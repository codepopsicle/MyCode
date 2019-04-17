from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from validate_email import validateEmail
import hashlib
from random import randint
import time
import datetime
from extension import mysql

import json
import urllib # Python URL functions
import urllib2

from email_task import send_async_sms

##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("createCustomer.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

##################################################################################

conn = mysql.connect()
cursor = conn.cursor()

class CreateCustomer(Resource):
	def get(self):
		return {'data': 'ok'}

	def post(self):
		try:
            # Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='MobileNumber number to create user')
			parser.add_argument('Password', type=str, help='Password to create user')
			parser.add_argument('FirstName', type=str, help='FirstName to create user')
			parser.add_argument('LastName', type=str, help='LastName to create user')
			parser.add_argument('EmailID', type=str, help='EmailID to create user')
			parser.add_argument('LifeStyle', type=str, help='LifeStyle to create user')
			parser.add_argument('DOB', type=str, help='DOB to create user')
			parser.add_argument('Platform', type=str, help='Platform 1-Android, 2-IOS')
			parser.add_argument('Gender', type=str, help='Gender 1-Male, 2-Female')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userPassword = args['Password']
			_userFirstName =args['FirstName']
			_userLastName = args['LastName']
			_userEmailID = args['EmailID']
			_userLifeStyle = args['LifeStyle']
			_userDOB = args['DOB']
			_userPlatform = args['Platform']
			_userGender = args['Gender']

			# check for valid email
			if validateEmail(_userEmailID):
				# hashing the password
				_userPassword = hashlib.sha256(_userPassword).hexdigest()
				# generating OTP
				otp = randint(1000,9999)
				# getting current timestamp
				ts = time.time()
				c_time = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
				cursor = conn.cursor() 
				cursor.callproc('whizzbuytest.spCreateCustomer',(_userMobile,_userPassword,_userFirstName,_userLastName,_userEmailID,_userLifeStyle, _userDOB, otp, c_time, _userPlatform,_userGender))
				data = cursor.fetchall()
				cursor.close() 
				# pdb.set_trace()
				# If data is successfully inserted
				if len(data) is 0:
					conn.commit()
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
					
					return {'Status':'200','Message': 'User creation success','MobileNumber': _userMobile, 'OTP': str(otp)}
					conn.close()

                # If mobile no. is already present
				else:
					#logging.error("Please enter some other Mobile Number")
					return {'Status':'1000','Message': "Please enter some other Mobile Number"}
					conn.close()
			else:
				#logging.error( 'Invalid email address')
				return {'Status':'1001','Message': 'Invalid email address'}
				conn.close()


		except Exception as e:
			if '1062' in str(e):
				#logging.error()
				return {'Status':'1002','Message': "Please enter some other Mobile "}
				conn.close()
			#logging.error(str(e))
			return {'Status':'1010','Message':str(e)}



api.add_resource(CreateCustomer, '/createcustomer') 
#critical errors
	#database is full
	#incorrect mobile number
	# # invalid email id
	# # mobile already registered
#warnings
	#password is too short
