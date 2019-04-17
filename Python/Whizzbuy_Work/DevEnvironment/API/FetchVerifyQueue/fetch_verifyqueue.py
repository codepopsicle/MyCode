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
              parser.add_argument('OutletID', type=str, help='ID of the Outlet')
              args = parser.parse_args()
              # store arguments in variables
              _outletid = args['OutletID']
              query= "SELECT * FROM verifyqueue  WHERE isVerified=0 AND OutletID=%s AND TransactionVerified = 1"
              params=(_outletid)
              cursor.execute(query,params)
              results= cursor.fetchall()
              if len(results)==0:
                  cursor.close()
                  conn.close()
                  return {"Status": "1000","Message": "No entries in the VerifyQueue"}
              returndata=[]
              returndata.append({"Status": "200"})
              returndata.append({"Message": "Fetch successful"})
              li2=[]
              for x in results:
                  li=[]
                  MobileNumber=x[1]
                  FinalQuantity=x[2]
                  ItemName=x[3]
                  TransactionID=x[4]
                  e={'FinalQuantity':FinalQuantity,'ItemName':ItemName}
                  if len(li2)!=0:
                      for x in li2:
                          if x['TransactionID']==TransactionID:
                              x['Items'].append(e)
                              break
                      else:
                          li.append(e)
                          d={'TransactionID':TransactionID,'MobileNumber':MobileNumber,'Items':li}
                          li2.append(d)

                  else:
                      li.append(e)
                      d={'TransactionID':TransactionID,'MobileNumber':MobileNumber,'Items':li}
                      li2.append(d)
                      
              returndata.append({'Transactions':li2})
              cursor.close()
              conn.close()
              return returndata

          except Exception as e:
              cursor.close()
              conn.close()
              return {'Status':'1010','Message':str(e)}






api.add_resource(FetchVerifyqueue, '/fetchverifyqueue')

