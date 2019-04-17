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
handler = logging.handlers.RotatingFileHandler("fetchProfile.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

##################################################################################

class FetchProfile(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
			
			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			
			conn = mysql.connect()
			cursor = conn.cursor() 
			query = """ SELECT FirstName, LastName, Gender, EmailID, DOB, LifeStyle
						FROM customerlist
						WHERE CustomerID=(SELECT CustomerId FROM customermaster WHERE MobileNO = %s)
					"""
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			cursor.close()
			# pdb.set_trace()
			if len(data):
				return { 'Status': '200', 
					'Message': 'Profile fetch is successful',
					'FirstName': data[0][0],
					'LastName':data[0][1],
					'Gender':data[0][2],
					'EmailID': data[0][3],
					'DOB': str(data[0][4]),
					'LifeStyle': data[0][5] }
			else:
				logging.error('Profile fetch is unsuccessful')
				return {'Status':'1000','Message': 'Profile fetch is unsuccessful'}
			

		except Exception as e:
			logging.error(str(e))
			return {'Status':'1010','Message':str(e)} 



api.add_resource(FetchProfile, '/fetchprofile') 

#error:
	# mobile not registered