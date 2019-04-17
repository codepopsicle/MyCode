from flask.ext.restful import Resource 
from . import api 
from extension import mysql
from flask_restful import reqparse

conn = mysql.connect() 
cursor = conn.cursor()

class lifestyle(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:      
    
                     
                      cursor = conn.cursor() 
                      query= "SELECT id,lifestyle,lifestyledesc FROM lifestylelist "
                      
                    
                      cursor.execute(query) 
                      data =cursor.fetchall()
                      cursor.close() 
                      #print data
		      #for l in data:
                          #print ', '.join(map(str, l))
                      arr = []
		      
                      for x in data:
                          dict_e = {
                              'id': x[0],
                              'lifestyle': x[1],
                              'lifestyledesc': x[2],
			      'Status':'200',
			      'Message': ' Fetch successful'
                          }
                          arr.append(dict_e)
                              
                      if len(data):
			      conn.commit()
			      return arr
                      else:
			      return {'Status':'1000','Message': ' Fetch unsuccessful'}
              

              except Exception as e:
	              if '1062' in str(e):
		              return {'Status':'1001','Message': "Fetch unsuccessful "}
	              return {'Status':'1010','Message':str(e)}






api.add_resource(lifestyle, '/FetchAllLifestyle')

