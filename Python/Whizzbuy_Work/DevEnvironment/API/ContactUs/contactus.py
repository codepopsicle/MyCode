from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
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
handler = logging.handlers.RotatingFileHandler("postReview.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)
# logging.getLogger().addHandler(logging.StreamHandler())

logging.debug("started app")
##################################################################################
class PostMessage(Resource):
	def post(self):
		# logging.error("inside post")
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('Message', type=str, help='Message from the user')
			parser.add_argument('Name', type=str, help='Message from the user')
			parser.add_argument('Email', type=str, help='Message from the user')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userMessage = args['Message']
			print _userMessage
			_userName = args['Name']
			_userEmail = args['Email']




			# get customer name and email ID
			conn = mysql.connect()
			cursor = conn.cursor()
			query = """SELECT FirstName, LastName, EmailID 
						FROM customerlist
						WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)
					"""
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall() 
			cursor.close()

			# if Customer corresponding to this mobile number exists
			if len(data):
				EmailID = data[0][2]
				FullName = data[0][0] + ' ' + data[0][1]
				ts = time.time()
				messagetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')

				conn = mysql.connect()
				cursor = conn.cursor()

				query = """INSERT INTO contact
								(MobileNumber, Name, EmailID, Message, Time)
								VALUES (%s, %s, %s, %s, %s)
							"""
				params = (_userMobile, _userName, _userEmail, _userMessage, messagetime)
				cursor.execute(query,params)
				conn.commit()
				cursor.close()

				return {'Status':'200', 'Message':'Message successfully posted'}

			else:
				logging.error("Mobile Number does not exist")
				return {'Status': '1000', 'Message': 'Review posting was unsuccessful'}

		except Exception as e:
			logging.error(str(e))
			return { 'Message':str(e), "Status": "1010"}



api.add_resource(PostMessage, '/contactus') 

