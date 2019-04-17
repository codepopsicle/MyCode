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
class PostReview(Resource):
	def post(self):
		# logging.error("inside post")
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('Barcode', type=str, help='barcode of the product')
			parser.add_argument('Review', type=str, help='Review')
			parser.add_argument('StarRating', type=str, help='Star Rating out of 5')
			parser.add_argument('TransactionID', type=str, help='TransactionID')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_userBarcode = args['Barcode']
			print _userBarcode
			_userReview = args['Review']
			_userStarRating = args['StarRating']
			_userTransactionID = int(args['TransactionID'])

			# get CustomerID
			# Get Locality
			conn = mysql.connect()
			cursor = conn.cursor()
			query = """SELECT CustomerID, FirstName, LastName 
						FROM customerlist
						WHERE CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)
					"""
			params = (_userMobile,)
			cursor.execute(query,params)
			data = cursor.fetchall() 
			cursor.close()

			# if Customer corresponding to this mobile number exists
			if len(data):
				CustomerID = data[0][0]
				FullName = data[0][1] + ' ' + data[0][2]

				# Get Locality
				cursor = conn.cursor()
				query = """SELECT TransactionDate 
							FROM transactionmasterlist 
							WHERE transactionid = %s"""
				# pdb.set_trace()
				params = (int(_userTransactionID),)
				cursor.execute(query,params)
				data = cursor.fetchall() 
				cursor.close()
				# pdb.set_trace()
				# if Locality exists
				if len(data):
					_datetime = data[0][0]
					conn = mysql.connect()
					cursor = conn.cursor()
					# pdb.set_trace()
					query = """INSERT INTO prodreviewlist
								(CustomerID, Barcode, Review, StarRating, TransactionID, CustomerName, DateTime)
								VALUES (%s, %s, %s, %s, %s, %s, %s)
							"""
					params = (CustomerID, _userBarcode,_userReview, _userStarRating, _userTransactionID, FullName, _datetime)
					cursor.execute(query,params)
					data = cursor.fetchall() 
					cursor.close()
					conn.commit()
					return {'Status':'200', 'Message':'Review successfully posted'}
				else:
					logging.error("Locality does not exist")
					return {'Status': '1000', 'Message': 'Review posting was unsuccessful'}
			else:
				logging.error("Customer with the mobile number is not present")
				return {'Status': '1001', 'Message': 'Review posting was unsuccessful'}
			
			

		except Exception as e:
			logging.error(str(e))
			return { 'Message':str(e), "Status": "1010"}#{'error': str(e)} 



api.add_resource(PostReview, '/postreview') 

