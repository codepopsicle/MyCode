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
handler = logging.handlers.RotatingFileHandler("FetchTransactionHistory.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)

##################################################################################
class FetchTransactionHistory(Resource):
	def post(self):
		try:
			# Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('TimestampModified', type=str, help='current password')

			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			_timestampModified = args['TimestampModified']
			# pdb.set_trace()
			# Current date time
			ts = time.time()
			current_date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
			conn = mysql.connect()
			cursor = conn.cursor()
			query = "SELECT CustomerID FROM customermaster WHERE MobileNO = %s"
			params = (_userMobile,)
			# pdb.set_trace()
			cursor.execute(query,params)
			data = cursor.fetchall() 
			cursor.close()
			# pdb.set_trace()
			# If mobileno. is valid
			if len(data):
				CustomerID = data[0][0]
				conn = mysql.connect()
				cursor = conn.cursor()
				query = "SELECT DISTINCT TranCity FROM transactionmasterlist WHERE CustomerID = %s"
				params = (CustomerID,)
				cursor.execute(query,params)
				cities = cursor.fetchall() 
				cursor.close()
				# if cities are present
				if len(cities):
					result = []
					result.append({'Status':'200'})
					result.append({'Message':'Transaction History fetch successful'})
					i = 2 
					for city in cities:
						result.append({})
						result[i]['name'] = city[0]
						cursor = conn.cursor()
						query = "SELECT DISTINCT CompanyName, Locality FROM transactionmasterlist WHERE TranCity = %s and CustomerID = %s"
						params = (city[0],CustomerID)
						cursor.execute(query,params)
						data1 = cursor.fetchall() 
						cursor.close()
						result[i]['array1'] = []
						j = 0
						for item in data1:
							result[i]['array1'].append({})
							result[i]['array1'][j]['CompanyName'] = item[0]
							result[i]['array1'][j]['Locality'] = item[1]
							result[i]['array1'][j]['tran_array'] = []
							cursor = conn.cursor()
							query = "SELECT TransactionID, TransactionDate, RcptAmount FROM transactionmasterlist WHERE TranCity = %s and Locality = %s and CustomerID = %s and CompanyName = %s"
							params = (city[0],item[1],CustomerID,item[0])
							cursor.execute(query,params)
							data2 = cursor.fetchall() 
							cursor.close()
							# pdb.set_trace()
							if len(data2):
								k=0
								for item2 in data2:
									result[i]['array1'][j]['tran_array'].append({})
									# pdb.set_trace()
									result[i]['array1'][j]['tran_array'][k]['TransactionID'] = item2[0]
									result[i]['array1'][j]['tran_array'][k]['TransactionDate'] = str(item2[1])
									result[i]['array1'][j]['tran_array'][k]['RcptAmount'] = item2[2]
									k += 1
						# pdb.set_trace()
							j+=1
						i+=1
					
					return result
				else:
					result = []
					result.append({'Status':'1000'})
					result.append({'Message' :'No Transaction History'})
					return result
			else:
				result = []
				result.append({'Status':'1001'})
				result.append({'Message' :'Transaction History unavailable'})
				return result

		except Exception as e:
			logging.error(str(e))
			result = []
			result.append({'Status':'1010'})
			result.append({'Message' :str(e)})
			return result



api.add_resource(FetchTransactionHistory, '/fetchtransactionhistory') 

