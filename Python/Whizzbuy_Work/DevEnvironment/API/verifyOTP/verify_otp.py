from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
import time
import datetime
from email_task import send_async_email
from flask.ext.mail import Mail, Message
import pdb
##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers
from email_task import send_async_sms

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("verifyOtp.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

logging.debug("started app")
##################################################################################
class VerifyOtp(Resource):
	def post(self):
		# logging.error("inside post")
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('Otp', type=str, help='OTP user')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userOtp = args['Otp']

			# Get the otp for this mobile number
			conn = mysql.connect()
			cursor = conn.cursor() 
			cursor.callproc('whizzbuydev.spGetOtp',(_userMobile,))
			data = cursor.fetchall() 
			# cursor.close()
			

			# Check if the mobile is registered
			if len(data):
				# Check this otp with otp given in parameters
				otp = str(data[0][0])
				if otp == _userOtp:
					conn = mysql.connect()
					cursor = conn.cursor() 
					cursor.callproc('whizzbuydev.spCheckVerified',(_userMobile,))
					#cursor.close() edited by Pritish
					data = cursor.fetchall()
					# Check if it is already verified
					if len(data):
						conn = mysql.connect()
						cursor = conn.cursor() 
						cursor.callproc('whizzbuydev.spSetIsVerified',(_userMobile,))
						#cursor.close() edited by Pritish, added below statement also
						conn.commit()
						#Adding Celery
						#Sending e-mail for successful registration
						sql="SELECT CustomerID FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)
						cursor.execute(sql)
						result= cursor.fetchall()
						for row in result:
							customerid=row[0]
						sql="SELECT * FROM customerlist WHERE CustomerID = '%s'" % (customerid)
						cursor.execute(sql)
						result= cursor.fetchall()
						for row in result:
							emailid=row[4]
							firstname=row[1]
						msg = Message('Welcome onboard Whizzbuy',sender="welcome@whizzbuy.com",recipients=[emailid])
						msg.body = 'This is a test email sent from a background Celery task.'
						msg.html = "Dear Mr." + firstname + ", welcome onboard Whizzbuy"

						send_async_email.apply_async(args=[msg])
						
						return { 'Status': '200', 'Message': 'Customer Successfully verified' }
					else:
						logging.error("Customer has already been verified")
						return { 'Status': '1000', 'Message': 'Customer has already been verified' }
				else:
					# OTP is incorrect
					conn = mysql.connect()
					cursor = conn.cursor() 
					# get otp conter value
					cursor.callproc('whizzbuydev.spGetOtpCounter',(_userMobile,))
					# pdb.set_trace()
					data = cursor.fetchall() 
					cursor.close()
					# check if otp counter value is less than 3
					
					# pdb.set_trace()
					if int(data[0][0]) < 3:
						conn = mysql.connect()
						cursor = conn.cursor() 
						cursor.callproc('whizzbuydev.spIncrOtpCounter',(_userMobile,int(data[0][0]) +1))
						data1 = cursor.fetchall()
						cursor.close()
						conn.commit()
						# pdb.set_trace()
						logging.error("Verification unsuccessful")
						return {'Status': '1001', 'Message': 'Verification unsuccessful', 'counter':data[0][0] + 1}
					else :
						# OTP failed to check three times
						# Generate new OTP
						otp = randint(1000,9999)
						# get current time
						ts = time.time()
						c_time = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
						# update database
						conn = mysql.connect()
						cursor = conn.cursor() 
						cursor.callproc('whizzbuydev.spUpdateOtp',(_userMobile, otp, c_time))
						cursor.close()
						conn.commit()

						logging.error("Verification unsuccessful, maximum tries exceeded")
						#Shift this to Celery
						message = "Your OTP is " + str(otp)
						sender = "WHZBUY"
						mobiles = _userMobile
						authkey = "102441AdJT63zH569fc8be"
						route = "4"

						values = {
                                	'authkey' : authkey,
                                	'mobiles' : mobiles,
                                	'message' : message,
                                	'sender' : sender,
                                	'route' : route
                    	}

                    	send_async_sms.apply_async(args=[values])

                    	return {'Status': '1002', 'Message': 'Verification unsuccessful, maximum tries exceeded', 'OTP': str(otp)}
			
			

		except Exception as e:
			logging.error(str(e))
			return {'Status': '1010', 'Message':str(e)} 



api.add_resource(VerifyOtp, '/verifyotp') 

