from flask.ext.restful import Resource
from . import api
from extension import mysql
from flask_restful import reqparse
import hmac
from random import randint, random
import time
import hashlib


class BillGenerator(Resource):

	def get(self):
		conn = mysql.connect()
		cursor = conn.cursor()
		try:
			access_key = 'FL73JC6L4SWVO7VOBYXW'  #use sample data as access_key='342' for testing
			secret_key = 'b6fe378ee1c9606e81ebb0d0d704fdfd51f9e397'  #use sample data as secret_key='342' for testing
			#return_url = "http://whizzbuydev.herokuapp.com/returnurl" # put ur own return url here
			return_url = "http://polar-caverns-11877.herokuapp.com/index.php" # put ur own return url here
			parser = reqparse.RequestParser()
			parser.add_argument('TotAmount', type=str, help='Total Amount')
			parser.add_argument('TransactionID', type=str, help='Transaction id')
			#parser.add_argument('MobileNumber', type=str, help='Users mobile number')
			#parser.add_argument('EmailID', type=str, help='Users email ID')
			args = parser.parse_args()
			# store arguments in variables
			value = args['TotAmount']
			print value
			_tid = args['TransactionID']
			print _tid
			#staticamount = args['amount']
			#print value + "value"
			#TransactionId = int(args['TransactionID'])
			#_userMobile = args['MobileNumber']
			#_userEmail = args['EmailID']

			CitrusId = str(int(time.time())) + str(int(random() * 99999) + 10000)
			data_string = ('merchantAccessKey=' + access_key +
				  '&transactionId=' + CitrusId +
				  '&amount=' + value)
			print CitrusId + "citrusID"
			print data_string + "data"
			sql="UPDATE transactionmasterlist SET CitrusID = %s WHERE TransactionID = %s"
			params=(CitrusId,_tid)
			cursor.execute(sql,params)
			conn.commit()
			conn.close()

			signature = hmac.new(secret_key, data_string, hashlib.sha1).hexdigest()

			print "Signature" + signature
			amount = {"value" : value, "currency": 'INR'}
			print amount
			bill = {
			"merchantTxnId": CitrusId,
			"amount": amount,
			"requestSignature": signature,
			"merchantAccessKey": access_key,
			"returnUrl": return_url, "customParameters":{"TransactionID":_tid}}

			print bill

			return bill

		except Exception as e:
			conn.close()
			return {'Status':'1001','Message':str(e) }



api.add_resource(BillGenerator, '/billgenerator')
