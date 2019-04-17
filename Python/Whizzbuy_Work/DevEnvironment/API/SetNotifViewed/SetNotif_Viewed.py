from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql

conn = mysql.connect() 
cursor = conn.cursor()

class SetNotifViewed(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:  
		        # Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			parser.add_argument('TransactionID', type=str, help='Transaction ID of user')
			args = parser.parse_args()
			# store arguments in variables
			_userMobile = args['MobileNumber']
			print _userMobile
			_tranID = args['TransactionID']
			print _tranID
			query= """UPDATE customertrannotification 
					SET isViewed = 2
					WHERE Mobile = %s AND TranID = %s """
			param=(_userMobile, _tranID) 
			cursor.execute(query,param)
			conn.commit()
			return { 'Status': '200', 'Message': 'Notification viewed successfully'}

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status':'1000','Message': 'Notification not viewed'}
	              return {'Status':'1010','Message':str(e)}

api.add_resource(SetNotifViewed, '/SetNotifViewed')
