from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
# from random import randint
import time
import datetime
import pdb

##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("logOut.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

logging.debug("started app")
##################################################################################

class Logout(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']

			# Check value of IsLoggedIn corres. to Mobile
			conn = mysql.connect()
			cursor = conn.cursor()
			query = """ SELECT isLoggedIn 
						FROM customersession
						WHERE CustomerID=(SELECT CustomerId FROM customermaster WHERE MobileNO = %s)
					"""
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall()
			cursor.close()

			# check if mobile number is correct
			if len(data):
				isLoggedIn = data[0][0]
				if isLoggedIn == 1:
					# Current date time
					ts = time.time()
					c_datetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
					# db update
					conn = mysql.connect()
					cursor = conn.cursor()
					query = """UPDATE customersession 
								SET LoggedOutOn=%s,isLoggedIn=2 
								WHERE CustomerID=(SELECT CustomerId FROM customermaster WHERE MobileNO = %s)
							"""
					params = (c_datetime,_userMobile)
					cursor.execute(query,params)
					data = cursor.fetchall() 
					cursor.close()
					conn.commit()
					return { 'Status': '200', 'Message': 'Customer successfully logged out'}
				else:
					logging.error('Customer not logged in')
					return { 'Status': '1001', 'Message': 'Customer not logged in'}
			else:
				logging.error('Logout  unsuccessful')
				return { 'Status': '1000', 'Message': 'Logout  unsuccessful' }
			
			
		except Exception as e:
			logging.error(str(e))
			return {'Status': '1010', 'Message':str(e)} 



api.add_resource(Logout, '/logout') 

#error:
	#customer not registered
