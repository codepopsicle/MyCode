from flask.ext.restful import Resource 
from . import api 
from extension import mysql
from flask_restful import reqparse
from server import app



class ConfirmVerifyqueue(Resource):
      def get(self):
          return {'hello': 'world'}
      def post(self):

          try:
              conn=mysql.connect()
              cursor = conn.cursor()
              parser = reqparse.RequestParser()
              parser.add_argument('TransactionID', type=str, help='Transaction ID')
              parser.add_argument('OutletID', type=str, help='Transaction ID')
              args = parser.parse_args()
              # store arguments in variables
              _TransactionID = args['TransactionID']
              _OutletID = args['OutletID']
              query= "UPDATE verifyqueue  SET isVerified=1 WHERE TransactionID=%s AND OutletID=%s"
              params=(_TransactionID,_OutletID)
              cursor.execute(query,params)
              try:
                  if app.config['TESTING'] != True:
                      conn.commit()
                  cursor.close()
                  return {"Status": "200", "Message": "Transaction Confirmed"}
              except:
                  return {"Status": "1000", "Message": "Transaction not confirmed. Retry"}


          except Exception as e:
              return {'Status':'1010','Message':str(e)}






api.add_resource(ConfirmVerifyqueue, '/confirmverifyqueue')

