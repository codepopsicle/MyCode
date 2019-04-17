from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql

conn = mysql.connect() 
cursor = conn.cursor()

class FetchProfileImage(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:      
    #parsing the mobile number
                      parser = reqparse.RequestParser()
	              parser.add_argument('MobileNumber', type=str, help='MobileNumber number to create user')
                      args = parser.parse_args()
			# store arguments in variables
                      _userMobileNumber = args['MobileNumber']
                      cursor = conn.cursor()
                      query= "SELECT ProfileImage FROM customerlist WHERE CustomerID =(SELECT CustomerID FROM customermaster WHERE MobileNO = %s)"
		      param= (_userMobileNumber,)
                      cursor.execute(query,param) 
                      data =cursor.fetchall()
                      if len(data):
			      conn.commit()
			      return {'Status': '200', 'Message': "Profile image fetch is successful", 'image': data[0][0]}
                      
                      else:
			      return {'Status': '1000', 'Message': "Profile image fetch is unsuccessful"}
              

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status': '1001', 'message': "Profile image fetch is unsuccessful"}
	              return {'Status':'1010','Message':str(e)}



api.add_resource(FetchProfileImage, '/FetchProfileImage')
