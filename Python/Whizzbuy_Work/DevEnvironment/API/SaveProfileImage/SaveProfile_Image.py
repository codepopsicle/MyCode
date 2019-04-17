from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql

conn = mysql.connect() 
cursor = conn.cursor()

class SaveProfileImage(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:  
		        # Parse the arguments
			parser = reqparse.RequestParser()
			parser.add_argument('Image', type=str, help='Image of customer')
			parser.add_argument('MobileNumber', type=str, help='Mobile Number of user')
			args = parser.parse_args()
			# store arguments in variables
			_userImage = args['Image']
			_userMobile = args['MobileNumber']
			
			query1= "SELECT CustomerID FROM customermaster WHERE MobileNO = %s"
			params = (_userMobile,)
			cursor.execute(query1,params)
			data = cursor.fetchone()
			query2= """UPDATE customerlist 
					SET ProfileImage = %s
					WHERE CustomerID = %s """
			param=(_userImage,data,) 		
			cursor.execute(query2,param)
			conn.commit()
			return { 'Status': '200', 'Message': 'Image save successful'}

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status':'1000','Message': ' Image save unsuccessful'}
	              return {'Status':'1010','Message':str(e)}

api.add_resource(SaveProfileImage, '/SaveProfileImage')

