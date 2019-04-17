from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
import time
import datetime
import pdb
import hashlib


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

class MerchantChangePassword(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('OutletID', type=str, help='Unique ID of the outlet')
			parser.add_argument('Currpass', type=str, help='current password')
			parser.add_argument('Newpass',type=str, help='new password')

			args = parser.parse_args()
			# store arguments in variables
			_userOutletID = args['OutletID']
			_userCurrentPassword = args['Currpass']
			_userNewPassword = args['Newpass']

			# get values of isLogged in and isVerified 
			conn = mysql.connect()
			cursor = conn.cursor()
			query = '''SELECT isLoggedIn 
						FROM outletlist 
						WHERE OutletID = %s'''
			params = (_userOutletID,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			# pdb.set_trace()
			# if mobile number has a corresponding entry in both the customer master and
			# customer list table, the length of data would not be 0
			if len(data):
				isLoggedIn = data[0][0]
				print isLoggedIn
				# Check whether the user is logged in and is verified 
				if isLoggedIn == 2:
					# get the value of password stored in the table
					query = "SELECT Password, MobileNumber FROM outletlist WHERE OutletID = %s"
					params = (_userOutletID,)
					cursor.execute(query,params)
					data = cursor.fetchall()
					cursor.close()
					# pdb.set_trace()
					oldPassword = data[0][0]
					_userMobile = data[0][1]
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
						query = """ UPDATE outletlist
									SET Password = %s
									WHERE OutletID = %s
								"""
						params = (hashlib.sha256(_userNewPassword).hexdigest(),_userOutletID)
						cursor.execute(query,params)
						#cursor.close()
						conn.commit()


						return { 'Status': '200', 'Message': 'Successfully updated the password' }
					else:
						logging.error('Password is incorrect')
						return {'Status':'1000', 'Message':'Password is incorrect'}
				else:
					logging.error('User not authorized to change the password')
					return {'Status':'1001', 'Message': 'User not authorized to change the password'}

			else:
				logging.error('OutletID is incorrect')
				return {'Status':'1002', 'Message':'OutletID is incorrect'}

			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010', 'Message':str(e) } 



api.add_resource(MerchantChangePassword, '/merchantchangepassword') 

#warning
	#new password should be diff from old password

#errors
	#

