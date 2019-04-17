#authored by Pritish
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
handler = logging.handlers.RotatingFileHandler("FetchTransactionHistoryList.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)

##################################################################################
class FetchDataPoint(Resource):
    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']

            
            returndata = []


            # pdb.set_trace()
            # 2) From the TransactionMasterList table, SELECT the value of TransactionDate, Locality, TranCity, CompanyName, RcptAmount, TotItems corresponding to that TransactionID
            conn = mysql.connect()
            cursor = conn.cursor()
            query = '''SELECT COUNT(RcptAmount)
						FROM transactionmasterlist
						WHERE CustomerID IN (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
            params = (_userMobile,)
            cursor.execute(query,params)
            data = cursor.fetchall()

            if len(data):
                transactioncount = data[0][0]
            else:
                transactioncount = 0


            query = '''SELECT COUNT(StarRating)
                        FROM prodreviewlist
                        WHERE CustomerID IN (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''

            params = (_userMobile,)
            cursor.execute(query,params)
            data1 = cursor.fetchall()

            if len(data1):
                postcount = data1[0][0]
            else:
                postcount = 0


            returndata.append({'Status': '200'})
            returndata.append({'Message': 'Datapoint fetch successful'})
            returndata.append({'TransactionCount': transactioncount})
            returndata.append({'ReviewCount': postcount})

            return returndata



        except Exception as e:
            logging.error(str(e))
            return [{'Status':'1010'}, {'Message':str(e) }]

api.add_resource(FetchDataPoint, '/fetchdatapoint')