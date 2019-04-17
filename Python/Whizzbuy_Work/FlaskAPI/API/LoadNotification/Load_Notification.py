from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql
from server import app
import json
import datetime

class LoadNotification(Resource):
      def get(self):
          return {'hello': 'world'}

      def post(self):
          conn = mysql.connect()
          cursor = conn.cursor()
          try:
              # Parse the arguments
              parser = reqparse.RequestParser()
              parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
              args = parser.parse_args()
              # store arguments in variables
              _userMobile = args['MobileNumber']
              query1= "SELECT CustomerID FROM customermaster WHERE MobileNO = %s "
              params = (_userMobile,)
              cursor.execute(query1,params)
              data = cursor.fetchall()
              query2= "SELECT TranID, Amt FROM customertrannotification WHERE isViewed = 1 AND CustID = %s"
              param = (data,)
              cursor.execute(query2,param)
              data1 = cursor.fetchall()

              arr = []
              arr.append({'Status':'200'})
              arr.append({'Message': 'Notifications fetched successfully'})
              ret=[]
              for x in data1:
                  sql="SELECT CompanyName,Locality,TranCity,TransactionDate FROM transactionmasterlist WHERE TransactionID=%s "
                  params=(x[0],)
                  cursor.execute(sql,params)
                  result=cursor.fetchall()
                  CompanyName=result[0][0]
                  Locality=result[0][1]
                  TranCity=result[0][2]
                  TransactionDate=str(result[0][3])
                  dict_e = {'id': x[0],'CompanyName':CompanyName,'Locality':Locality,'City':TranCity,
                            'Amount': float(x[1]),'TransactionDate':TransactionDate}
                  ret.append(dict_e)

              arr.append({"Notification":ret})
              cursor.close()
              if len(data1) !=0:
                  if app.config['TESTING'] != True:
                      conn.commit()
                  conn.close()
                  return arr
              else:
                  conn.close()
                  return [{'Status': "1000"},{ 'Message': 'Notifications not loaded successfully'}]

          except Exception as e:
              cursor.close()
              conn.close()
              if '1062' in str(e):
                  return [{'Status': "1001"}, {'Message': 'Notifications not loaded  successfully'}]
              return [{'Status': "1010"}, {'Message': str(e)}]


api.add_resource(LoadNotification, '/LoadNotification')
