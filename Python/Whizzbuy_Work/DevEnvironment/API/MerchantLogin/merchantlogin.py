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

class MerchantLogin(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('OutletID', type=str, help='UniqueID of the outlet')
			parser.add_argument('Password', type=str, help='password entered by user')
			parser.add_argument('MobileNumber', type=str, help='mobile number entered by user')
			

			args = parser.parse_args()
			# store arguments in variables
			_userOutletID = args['OutletID']
			_userPassword = args['Password']
			_userMobile = args['MobileNumber']
			

			# get values of isLogged in and isVerified 
			conn = mysql.connect()
			cursor = conn.cursor()
			query = '''SELECT isLoggedIn,LastLoggedIn,MobileNumber
						FROM outletlist 
						WHERE OutletID = %s'''
			params = (_userOutletID,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			#checking if the user is new or not
			lastlog = data[0][1]

			if lastlog:
				newuser = 0
			else:
				newuser = 1

			#checking if the mobile number is correct
			mobnum = data[0][2]

			# if mobile number has a corresponding entry in both the customer master and
			# customer list table, the length of data would not be 0
			if len(data):
				isLoggedIn = data[0][0]
				# Check whether the user is not logged in already and is verified 
				if isLoggedIn == 1:
					# get the value of password stored in the table
					query = "SELECT Password FROM outletlist WHERE OutletID = %s"
					params = (_userOutletID,)
					cursor.execute(query,params)
					data = cursor.fetchall()
					cursor.close()
					# pdb.set_trace()
					correctPassword = data[0][0]
					# hash the password provided by user now
					hashUserPassword = hashlib.sha256(_userPassword).hexdigest()
					# check if the password given by user is correct
					if correctPassword == hashUserPassword and mobnum == _userMobile: 
						# if passwords match store the log in the user
						conn = mysql.connect()
						cursor = conn.cursor() 
						query = """ UPDATE outletlist
									SET isLoggedIn = 2, LastLoggedIn = %s
									WHERE OutletID = %s
								"""
						params = (datetime.datetime.fromtimestamp(time.time()).strftime('%Y-%m-%d %H:%M:%S'),_userOutletID)
						cursor.execute(query,params)
						cursor.close()
						conn.commit()

						return { 'Status': '200', 'Message': 'Successfully logged in', 'NewUser': newuser}
					else:
						if not correctPassword == hashUserPassword:
							logging.error('Password is incorrect')
							return {'Status':'1000', 'Message':'Password is incorrect'}

						if not mobnum == _userMobile:
							logging.error('Mobile Number is incorrect')
							return {'Status':'1004', 'Message':'Mobile Number is incorrect'}


				else:
					if isLoggedIn == 2:
						logging.error('Account is already logged in')
						return {'Status':'1001', 'Message': 'Account is already logged in'}


			else:
				logging.error('OutletID is incorrect')
				return {'Status':'1003', 'Message':'OutletID is incorrect'}

			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010', 'Message':str(e) } 



api.add_resource(MerchantLogin, '/merchantlogin') 