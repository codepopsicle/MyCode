from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import time
import datetime
from server import app


class MerchantFetchmetrics(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('Outletid', type=int, help='Id of the outlet')
            args = parser.parse_args()
            # store arguments in variables
            _outletid = args['Outletid']
            ts = time.time()
            current_date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')

            sql="SELECT RcptAmount FROM transactionmasterlist WHERE OutletID = %s AND DATE(TransactionDate)=%s"
            if app.config['TESTING'] == True:
                params=(2,'2016-02-04')
            else:
                params=(_outletid,current_date)
            # Execute the SQL command
            cursor.execute(sql,params)
            result= cursor.fetchall()
            cursor.close()
            TotTran=0
            GrossSale=0
            if len(result) == 0:
                return {'Status': '1000', 'Message': 'Metrics fetch unsuccessful. Please retry'}

            else:
                for row in result:
                    Rcptamount=row[0]
                    TotTran=TotTran+Rcptamount
                    GrossSale=GrossSale+1
                return {'Status': '200', 'Message': 'Metric fetch successful', 'TotTran':TotTran,'GrossSale':GrossSale}

        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(MerchantFetchmetrics,'/merchantfetchmetrics')
