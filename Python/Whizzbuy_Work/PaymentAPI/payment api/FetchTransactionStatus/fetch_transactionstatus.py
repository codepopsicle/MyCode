from flask.ext.restful import Resource 
from . import api 
from extension import mysql
from flask_restful import reqparse


class FetchVerifyqueue(Resource):
      def get(self):
          return {'hello': 'world'}
      def post(self):
          conn=mysql.connect()
          cursor = conn.cursor()
          try:
              parser = reqparse.RequestParser()
              parser.add_argument('TransactionID', type=str, help='ID of the Transaction')
              args = parser.parse_args()
              # store arguments in variables
              Transactionid = int(args['TransactionID'])
              query= "SELECT TransactionStatus,TransactionVerified FROM transactionmasterlist  WHERE TransactionID=%s"
              params=(Transactionid,)
              cursor.execute(query,params)
              results= cursor.fetchall()
              cursor.close()
              conn.close()
              if len(results)!=0:
                  TransactionStatus=results[0][0]
                  TransactionVerified=results[0][1]
                  return {'Status':'200','Message':'Fetch Successful','TransactionStatus':TransactionStatus,
                          'TransactionVerified':TransactionVerified }
              else:
                  return {'Status':'1000','Message':'Fetch Unsuccessful'}



          except Exception as e:
              cursor.close()
              conn.close()
              return {'Status':'1010','Message':str(e)}



api.add_resource(FetchVerifyqueue, '/fetchtransactionstatus')

