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
class PostNotifID(Resource):
    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
            parser.add_argument('CloudID', type=str, help='GCM ID of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _CloudID = args['CloudID']



            returndata = []


            # pdb.set_trace()
            # 2) From the TransactionMasterList table, SELECT the value of TransactionDate, Locality, TranCity, CompanyName, RcptAmount, TotItems corresponding to that TransactionID
            conn = mysql.connect()
            cursor = conn.cursor()

            query = """INSERT INTO pushnotificationmaster
                                (MobileNumber, CloudID)
                                VALUES (%s, %s)
                            """
            params = (_userMobile, _CloudID)
            cursor.execute(query,params)
            conn.commit()

            returndata.append({'Status': '200'})
            returndata.append({'Message': 'Cloud ID inserted successfully'})


        except Exception as e:
            logging.error(str(e))
            return [{'Status':'1010'}, {'Message':str(e) }]

api.add_resource(PostNotifID, '/postnotifid')