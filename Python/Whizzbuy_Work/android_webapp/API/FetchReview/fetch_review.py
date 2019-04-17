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
handler = logging.handlers.RotatingFileHandler("fetchReview.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)

##################################################################################
class FetchReview(Resource):
	def post(self):
		# logging.error("inside post")
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('Barcode', type=str, help='barcode of the product')

			args = parser.parse_args()
			# store arguments in variables
			_userBarcode = args['Barcode']

			conn = mysql.connect()
			cursor = conn.cursor()
			query = """SELECT Review, StarRating, CustomerName, Locality
						FROM prodreviewlist
						WHERE Barcode = %s
					"""
			params = (_userBarcode,)
			cursor.execute(query,params)
			data = cursor.fetchall() 
			cursor.close()

			# if product review corresponding to this barcode exists
			
			
			if len(data):
				ctx = []
				ctx.append({ "Message": "Review available"})
				ctx.append({"Status": "200"})

				for review in data:
					result = {}
					result['review'] = review[0]
					result['star_rating'] =review[1]
					result['customername'] = review[2]
					result['locality'] = review[3]

					ctx.append(result)

				return ctx
			else:
				logging.error('No review found')
				return { "Message": "Review unavailable", "Status": "1000"}



		except Exception as e:
			logging.error(str(e))
			return { 'Message':str(e), "Status": "1010"}



api.add_resource(FetchReview, '/fetchreview') 

