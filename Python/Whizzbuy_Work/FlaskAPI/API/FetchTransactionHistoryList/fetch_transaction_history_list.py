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
class FetchTransactionHistoryList(Resource):
    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
            parser.add_argument('TransactionID', type=str, help='Transaction ID')
            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _TransactionID = args['TransactionID']
            # pdb.set_trace()
            # 2) From the TransactionMasterList table, SELECT the value of TransactionDate, Locality, TranCity, CompanyName, RcptAmount, TotItems corresponding to that TransactionID
            conn = mysql.connect()
            cursor = conn.cursor()
            query = '''SELECT TransactionDate, Locality, TranCity, CompanyName, RcptAmount, TotItems
						FROM transactionmasterlist
						WHERE TransactionID = %s'''
            params = (_TransactionID ,)
            cursor.execute(query,params)
            data = cursor.fetchall()
            cursor.close()
            if len(data):
                TransactionDate = str(data[0][0])
                Locality = data[0][1]
                TranCity = data[0][2]
                CompanyName = data[0][3]
                RcptAmount = data[0][4]
                TotItems = data[0][5]
                # From the TransactionList table, SELECT values of Quantity, ItemDesc, ItemValue corresponding to that particular TransactionID
                cursor = conn.cursor()
                query = '''SELECT quantity, itemdesc, itemvalue,itembarcode
							FROM transactionlist
							WHERE transactionid = %s'''
                params = (_TransactionID ,)
                cursor.execute(query,params)
                # Store the rows fetched as a result of this query as say ItemBill
                itemBill = cursor.fetchall()
                cursor.close()
                if len(itemBill):
                    i = 1
                    item_bill = []
                    for item in itemBill:
                        Quantity = item[0]
                        ItemDesc = item[1]
                        ItemValue = item[2]
                        ItemBarcode = item[3]
                        conn = mysql.connect()
                        cursor = conn.cursor()
                        query = '''SELECT Review, StarRating
								FROM prodreviewlist
								WHERE TransactionID = %s and Barcode = %s and CustomerID = (SELECT CustomerID FROM customermaster WHERE MobileNO = %s)'''
                        params = (_TransactionID ,ItemBarcode,_userMobile )
                        cursor.execute(query,params)
                        review = cursor.fetchall()
                        cursor.close()
                        if len(review):
                            Review = review[0][0]
                            StarRating = review[0][1]
                            if not review[0][0] == None or not review[0][1] == None:
                                isPosted = '1'
                            else:
                                isPosted = '0'
                        else:
                            isPosted = '0'
                        d = {'quant': Quantity,'desc': ItemDesc, 'val': ItemValue,'isPosted':isPosted,'barcode':ItemBarcode}
                        item_bill.append(d)
                        
                    result = []
                    result.append({'Status':'200'})
                    result.append({'Message' :'Itemized receipt fetch successful'})
                    result.append({'trandate': TransactionDate})
                    result.append({'area': Locality})
                    result.append({'city': TranCity})
                    result.append({'comname': CompanyName})
                    result.append({'totamount': RcptAmount})
                    result.append({'totitem': TotItems})
                    result.append({'ItemBill':item_bill})
                    return result
                else:
                    logging.error('No item bill found')
                    return [{'Status' : '1000'}, {'Message': 'Itemized receipt fetch unsuccessful'}]
            else:
                logging.error('No transaction found')
                return [{ "Status": "1001"},{ "Message": "Itemized receipt fetch unsuccessful"}]

        except Exception as e:
            logging.error(str(e))
            return [{'Status':'1010'}, {'Message':str(e) }]

api.add_resource(FetchTransactionHistoryList, '/fetchtransactionhistorylist')