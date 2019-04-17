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
              query2= "SELECT Count(*) FROM customertrannotification WHERE isViewed = 1 AND CustID = %s AND TransactionVerified = 1"
              param = (data,)
              cursor.execute(query2,param)
              data1 = cursor.fetchall()
              x=data1[0][0]

              if x==0:
                return {"Status": "1000","Message": "Notification count not fetched successfully"}
              else:
                return {"Status": "200","Message": "Notification count fetched successfully","count":x}

			 
          except Exception as e:
              cursor.close()
              conn.close()
              if '1062' in str(e):
                  return [{'Status': "1001"}, {'Message': 'Notification count not loaded  successfully'}]
              return [{'Status': "1010"}, {'Message': str(e)}]


api.add_resource(LoadNotification, '/LoadNotificationCount')
