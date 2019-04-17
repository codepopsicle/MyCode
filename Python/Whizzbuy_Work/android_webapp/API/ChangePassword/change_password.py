from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
import time
import datetime
import pdb
import hashlib
from email_task import send_async_email
from flask.ext.mail import Mail, Message

##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("changePassword.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

##################################################################################

class ChangePassword(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('Currpass', type=str, help='current password')
			parser.add_argument('Newpass',type=str, help='new password')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userCurrentPassword = args['Currpass']
			_userNewPassword = args['Newpass']

			# get values of isLogged in and isVerified 
			conn = mysql.connect()
			cursor = conn.cursor()
			query = '''SELECT isVerified, isLoggedIn 
						FROM customersession 
						WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			# pdb.set_trace()
			# if mobile number has a corresponding entry in both the customer master and
			# customer list table, the length of data would not be 0
			if len(data):
				isVerified = data[0][0]
				isLoggedIn = data[0][1]
				# Check whether the user is logged in and is verified 
				if isLoggedIn == 1 and isVerified == 1:
					# get the value of password stored in the table
					query = "SELECT Password FROM customermaster WHERE MobileNO = %s"
					params = (_userMobile,)
					cursor.execute(query,params)
					data = cursor.fetchall()
					cursor.close()
					# pdb.set_trace()
					oldPassword = data[0][0]
					# hash the password provided by user now
					hashCurrentPassword = hashlib.sha256(_userCurrentPassword).hexdigest()
					print hashCurrentPassword
					# pdb.set_trace()
					# for checkin purpose use 'if oldPassword in hashCurrentPassword':
					# as before the limit of Password field was 50 ,
					#the generated hash was sliced
					if oldPassword in hashCurrentPassword: 
						# if passwords match store the new password(hashed) in the table
						conn = mysql.connect()
						cursor = conn.cursor() 
						query = """ UPDATE customermaster
									SET Password = %s
									WHERE MobileNO = %s
								"""
						params = (hashlib.sha256(_userNewPassword).hexdigest(),_userMobile)
						cursor.execute(query,params)
						#cursor.close()
						conn.commit()

						#Adding Celery
						#Sending e-mail for successful password change
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
						msg = Message('You have successfully changed your password',sender="password@whizzbuy.com",recipients=[emailid])
						msg.body = 'This is a test email sent from a background Celery task.'
						msg.html = "Dear Mr." + firstname + ", you have successfully changed your password"

						send_async_email.apply_async(args=[msg])

						return { 'Status': '200', 'Message': 'Successfully updated the password' }
					else:
						logging.error('Password is incorrect')
						return {'Status':'1000', 'Message':'Password is incorrect'}
				else:
					logging.error('User not authorized to change the password')
					return {'Status':'1001', 'Message': 'User not authorized to change the password'}

			else:
				logging.error('Mobile Number is incorrect')
				return {'Status':'1002', 'Message':'Mobile Number is incorrect'}

			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010', 'Message':str(e) } 



api.add_resource(ChangePassword, '/changepassword') 

#warning
	#new password should be diff from old password

#errors
	#

