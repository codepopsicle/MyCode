from flask.ext.restful import Resource 
from . import api 
from extension import mysql
from flask_restful import reqparse


class FetchVerifyqueue(Resource):
      def get(self):
          return {'hello': 'world'}
      def post(self):

          try:
              conn=mysql.connect()
              cursor = conn.cursor()
              parser = reqparse.RequestParser()

              parser.add_argument('OutletID', type=str, help='ID of the Outlet')
              args = parser.parse_args()
              # store arguments in variables
              _outletid = args['OutletID']
              query= "SELECT * FROM verifyqueue  WHERE isVerified=0 AND OutletID=%s"
              params=(_outletid)
              cursor.execute(query,params)
              results= cursor.fetchall()
              if len(results)==0:
                  return {"Status": "1000","Message": "No entries in the VerifyQueue"}
              returndata=[]
              returndata.append({"Status": "200"})
              returndata.append({"Message": "Fetch successful"})

              for x in results:
                  MobileNumber=x[1]
                  FinalQuantity=x[2]
                  ItemName=x[3]
                  TransactionID=x[4]
                  d={'MobileNumber':MobileNumber,'FinalQuantity':FinalQuantity,'ItemName':ItemName,'TransactionID':TransactionID}
                  returndata.append(d)
              return returndata



          except Exception as e:
              return {'Status':'1010','Message':str(e)}






api.add_resource(FetchVerifyqueue, '/fetchverifyqueue')

