# Pritish
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
class FetchGraph(Resource):
    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
            parser.add_argument('Category', type=str, help='category of the store')
            parser.add_argument('TimeFilter', type=str, help='category of the store')
            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _category = args['Category']
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


            query = '''SELECT outletid
						FROM outletlist
						WHERE category = %s'''
            params = (_category,)
            cursor.execute(query,params)
            data = cursor.fetchall()
            #cursor.close()
            totamt = 0
            avgamt = 0.0

            #print messagetime
            #messagetime = str(messagetime)[:10]
            #print data


            if len(data):
                for row in data:
                    print row
                    print "first"
                    print row[0]
                    print "second"
                    #print row[0][0]
                    print "third"
                    _outletid = row[0]
                    print _outletid
                    query = """SELECT SUM(RcptAmount), COUNT(RcptAmount)
                        FROM transactionmasterlist
                        WHERE OutletID = %s"""
                    params = (_outletid ,)
                    cursor.execute(query,params)
                    data1 = cursor.fetchall()

                    if len(data1):
                        if not data1[0][0] is None:
                            totamt = totamt + int(data1[0][0])
                        if not data1[0][1] is None:
                            avgamt = avgamt + float(data1[0][1])

                returndata.append({'Status': '200'})
                returndata.append({'Message': 'Statistic fetch successful'})
                returndata.append({'TotalAmount': totamt})
                returndata.append({'AverageAmount': avgamt})

                for row in data:
                    _outletid = row[0]
                    sql="SELECT CustomerID FROM customermaster WHERE MobileNO = %s"
                    para=(_userMobile,)
                    cursor.execute(sql,para)
                    dat=cursor.fetchall()
                    custid=dat[0][0]
                    print "period "+str(period)
                    print "messagetime "+messagetime
                    print "custid "+str(custid)
                    print"out "+ str(_outletid)
                    query1 = '''SELECT RcptAmount, TransactionDate
                        FROM transactionmasterlist
                        WHERE (TransactionDate BETWEEN DATE_SUB(%s,INTERVAL %s DAY) AND %s) AND outletid = %s AND CustomerID = %s'''
                    params1 = (messagetime, period, messagetime, _outletid, custid,)
                    cursor.execute(query1,params1)
                    data2 = cursor.fetchall()


                    if len(data2):
                        for row1 in data2:
                            returndata.append({'TransactionDate': row1[1], 'Amount': row1[0]})


                if len(returndata) > 4:
                    print returndata
                    return returndata
                else:
                    returndatafail.append({'Status': '1000'})
                    returndatafail.append({'Message': 'Detail fetch unsuccessful'})
                    return returndatafail

                    #else:
                        #returndatafail.append({'Status': '1000'})
                        #returndatafail.append({'Message': 'Detail fetch unsuccessful'})
                        #return returndatafail
     


            else:
                returndatafail.append({'Status': '1001'})
                returndatafail.append({'Message': 'Header fetch unsuccessful'})
                return returndatafail
     

        except Exception as e:
            logging.error(str(e))
            return [{'Status':'1010'}, {'Message':str(e) }]

api.add_resource(FetchGraph, '/fetchgraph')