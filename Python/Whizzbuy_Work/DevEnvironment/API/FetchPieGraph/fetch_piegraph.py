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
class FetchPieGraph(Resource):
    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
            parser.add_argument('TimeFilter', type=str, help='category of the store')
            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _filter = args['TimeFilter']

            returndata = []
            returndatafail = []

            #if _filter == 1:
                #period = 30
            #else if _filter == 2:
                #period = 60
            #else if _filter == 3:
                #period = 90

            def defineperiod(argument):
                switcher = {
                    '1': 90,
                    '2': 180,
                    '3': 270,
                    '4': 3650
                    }
                return switcher.get(argument, "nothing")


            period = defineperiod(_filter)


            # pdb.set_trace()
            # 2) From the TransactionMasterList table, SELECT the value of TransactionDate, Locality, TranCity, CompanyName, RcptAmount, TotItems corresponding to that TransactionID
            conn = mysql.connect()
            cursor = conn.cursor()

            ts = time.time()
            messagetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')


            query1 = '''SELECT SUM(RcptAmount)
                        FROM transactionmasterlist
                        WHERE (TransactionDate BETWEEN DATE_SUB(%s,INTERVAL %s DAY) AND %s) AND CustomerID IN (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''

            params1 = (messagetime, period, messagetime, _userMobile,)
            cursor.execute(query1,params1)
            data1 = cursor.fetchall()

            if len(data1):
                total = data1[0][0]
            else:
                total = 0



            query = '''SELECT DISTINCT CompanyName
						FROM transactionmasterlist
						WHERE (TransactionDate BETWEEN DATE_SUB(%s,INTERVAL %s DAY) AND %s) AND CustomerID IN (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
            params = (messagetime, period, messagetime, _userMobile,)
            cursor.execute(query,params)
            data = cursor.fetchall()
            #cursor.close()

            #print messagetime
            #messagetime = str(messagetime)[:10]
            #print data


            if len(data):

                for row in data:
                    _parentmerchant = row[0]
                    sql="SELECT CustomerID FROM customermaster WHERE MobileNO = %s"
                    para=(_userMobile,)
                    cursor.execute(sql,para)
                    dat=cursor.fetchall()
                    custid=dat[0][0]

                    query2 = '''SELECT SUM(RcptAmount)
                        FROM transactionmasterlist
                        WHERE (TransactionDate BETWEEN DATE_SUB(%s,INTERVAL %s DAY) AND %s) AND CompanyName = %s AND CustomerID = %s'''
                    params2 = (messagetime, period, messagetime, _parentmerchant, custid,)
                    cursor.execute(query2,params2)
                    data2 = cursor.fetchall()


                    if len(data2):
                        print data2
                        if total > 0:
                            sub = data2[0][0]
                            print sub
                            percentage = 100 * (float(sub/total))
                            returndata.append({'Brand': _parentmerchant, 'Percentage': percentage})

                        else:
                            returndatafail.append({'Status': '1000'})
                            returndatafail.append({'Message': 'Total fetch unsuccessful'})
                            return returndatafail


                returndata.append({'Status': '200'})
                returndata.append({'Message': 'Piechart fetch successful'})
                return returndata


            else:

                returndatafail.append({'Status': '1001'})
                returndatafail.append({'Message': 'Merchant fetch unsuccessful'})
                return returndatafail
     

        except Exception as e:
            logging.error(str(e))
            return [{'Status':'1010'}, {'Message':str(e) }]

api.add_resource(FetchPieGraph, '/fetchpiegraph')