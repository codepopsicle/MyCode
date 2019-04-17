from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql

conn = mysql.connect() 
cursor = conn.cursor()

class ReportIssue(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:      
    #parsing the mobile number
                      parser = reqparse.RequestParser()
	              parser.add_argument('MobileNumber', type=str, help='MobileNumber number to create user')
		      parser.add_argument('Message', type=str, help='Message Send by user')
                      args = parser.parse_args()
		      # store arguments in variables
                      _userMobileNumber = args['MobileNumber']
		      _userMessage = args['Message']
                      cursor = conn.cursor()
                      query= " SELECT CONCAT(FirstName, ' ', LastName) as FullName FROM customerlist WHERE CustomerID =(SELECT CustomerID FROM customermaster WHERE MobileNO = %s)"
                      param= (_userMobileNumber,)
                      cursor.execute(query,param)
		      data =cursor.fetchall()
		      #converting tuple into string
		      s = ' '.join(map(str, data))
                      query1="""Insert into reportissue (Name, Message, Mobile) VALUES (%s, %s, %s)"""
		      arg= (s, _userMessage, _userMobileNumber)
                      cursor.execute(query1,arg)
		      query3="SELECT LAST_INSERT_ID()"
		      cursor.execute(query3)
		      d=cursor.fetchall()
		      print d
                      query2="SELECT IssueID FROM reportissue WHERE IssueID= %s"
		      param= (d,)
                      cursor.execute(query2,param)
		      data =cursor.fetchall() 
		      conn.commit()
		      return { 'Status': '200', 'Message': 'Issue logging successful', 'id':data[0][0]}

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status':'1000','Message': ' Issue logging unsuccessful'}
	              return {'Status':'1010','Message': str(e)}

                      
             
api.add_resource(ReportIssue, '/ReportIssue')

