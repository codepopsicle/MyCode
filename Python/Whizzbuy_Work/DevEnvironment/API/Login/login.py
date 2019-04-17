from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
import time
import datetime
import hashlib


##################################################################################
#	Authored by Fatema
##################################################################################


##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("login.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

##################################################################################

class Login(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('Password', type=str, help='password entered by user')
			

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userPassword = args['Password']
			

			# get values of isLogged in and isVerified 
			conn = mysql.connect()
			cursor = conn.cursor()
			query = '''SELECT isVerified, isLoggedIn, SetOn 
						FROM customersession 
						WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			#Checking if the user is new or not

			if len(data):
				lastlog = data[0][2]
			else:
				return {'Status':'1003', 'Message':'Mobile Number is incorrect'}


			query1 = '''SELECT LifeStyle, EmailID FROM customerlist WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
			params1 = (_userMobile,)
			cursor.execute(query1,params1)
			data1 = cursor.fetchall()
			lifestyle = data1[0][0]
			emailID = data1[0][1]


			if (lastlog is None) or (lifestyle is None):
				newuser = 1
			else:
				newuser = 0
			print newuser
			# if mobile number has a corresponding entry in both the customer master and
			# customer list table, the length of data would not be 0
			if len(data):
				isVerified = data[0][0]
				isLoggedIn = data[0][1]
				# Check whether the user is not logged in already and is verified 
				if isLoggedIn == 1 and isVerified == 1:
					# get the value of password stored in the table
					query = "SELECT Password FROM customermaster WHERE MobileNO = %s"
					params = (_userMobile,)
					cursor.execute(query,params)
					data = cursor.fetchall()
					cursor.close()
					# pdb.set_trace()
					correctPassword = data[0][0]
					# hash the password provided by user now
					hashUserPassword = hashlib.sha256(_userPassword).hexdigest()
					# check if the password given by user is correct
					if correctPassword == hashUserPassword: 
						# if passwords match store the log in the user
						conn = mysql.connect()
						cursor = conn.cursor() 
						query = """ UPDATE customersession
									SET isLoggedIn = 2, SetOn = %s
									WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)
								"""
						params = (datetime.datetime.fromtimestamp(time.time()).strftime('%Y-%m-%d %H:%M:%S'),_userMobile)
						cursor.execute(query,params)
						cursor.close()
						conn.commit()

						return { 'Status': '200', 'Message': 'Successfully logged in', 'newuser': newuser, 'emailID': emailID}
					else:
						logging.error('Password is incorrect')
						return {'Status':'1000', 'Message':'Password is incorrect'}
				else:
					if isLoggedIn == 2:
						logging.error('Account is already logged in')
						return {'Status':'1001', 'Message': 'Account is already logged in', 'newuser': newuser, 'emailID': emailID}
					elif not isVerified == 1:
						logging.error('Account has not been verified')
						return {'Status':'1002', 'Message': 'Account has not been verified'}


			else:
				logging.error('Mobile Number is incorrect')
				return {'Status':'1003', 'Message':'Mobile Number is incorrect'}

			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010', 'Message':str(e) } 



api.add_resource(Login, '/login') 