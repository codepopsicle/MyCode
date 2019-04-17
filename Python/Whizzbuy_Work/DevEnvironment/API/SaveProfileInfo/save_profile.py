from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql

from validate_email import validateEmail
# from random import randint
# import time
# import datetime
import pdb

##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("saveProfile.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

##################################################################################

class SaveProfile(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
			parser.add_argument('Firstname', type=str, help='FirstName of the user')
			parser.add_argument('Lastname', type=str, help='LastName of the user')
			parser.add_argument('Email', type=str, help='EmailID of the user')
			parser.add_argument('Lifestyle', type=str, help='LifeStyle of the user')
			parser.add_argument('Dob', type=str, help='DOB of the user')
			parser.add_argument('Platform', type=str, help='Platform 1-Android, 2-IOS')
			parser.add_argument('Gender', type=str, help='1-Male, 2-Female')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userFirstName =args['Firstname']
			_userLastName = args['Lastname']
			_userEmailID = args['Email']
			_userLifeStyle = args['Lifestyle']
			_userDOB = args['Dob']
			_userPlatform = args['Platform']
			_userGender = args['Gender']

			# check for valid email
			if validateEmail(_userEmailID):
				# UPdate the customer list table
				conn = mysql.connect()
				cursor = conn.cursor() 
				cursor.callproc('whizzbuydev.spUpdateCustomer',(_userFirstName,_userLastName,_userEmailID,_userDOB,_userGender,_userLifeStyle, _userMobile))
				cursor.close()
				conn.commit()

				return { 'Status': '200', 'Message': 'Profile save is successful' }
			else:
				logging.error('Invalid email address')
				return {'Status':'1000','Message': 'Invalid email address'}
			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010', 'Message':str(e)} 
			


api.add_resource(SaveProfile, '/saveprofile') 

