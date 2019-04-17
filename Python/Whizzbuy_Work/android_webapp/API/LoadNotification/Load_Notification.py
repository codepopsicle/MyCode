from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql

conn = mysql.connect() 
cursor = conn.cursor()

class LoadNotification(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
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
			print data
			query2= "SELECT TranID, Amt FROM customertrannotification WHERE isViewed = 1 AND CustID = %s"
			param = (data,)
			cursor.execute(query2,param)
			data1 = cursor.fetchall()
			print data1
			arr = []
			for x in data1:
                          dict_e = {
                              'id': x[0],
                              'amt': [float(x[1]) for x in data1],
                              'Status':'200',
			      'Message': 'Notifications fetched successfully'
                          }
                          arr.append(dict_e)
			
			if len(data1):
			      conn.commit()
			      return arr
			else:
			      return {'Status': 1000, 'Message': 'Notifications not loaded successfully'}
              

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status': 1001, 'Message': 'Notifications not loaded  successfully'}
	              return {'Status': 1010, 'Message': str(e)}      
			


api.add_resource(LoadNotification, '/LoadNotification')
