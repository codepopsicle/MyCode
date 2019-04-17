from flask.ext.restful import Resource 
from . import api 
from extension import mysql


conn = mysql.connect() 
cursor = conn.cursor()

class CountdownTimer(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
              
	      try:      
    
                     
                      cursor = conn.cursor() 
                      query= "SELECT PreLaunchDescription, PostLaunchDescription, LaunchDate, TargetAppVersion, RunPeriod FROM countdowntimer WHERE isDisplayed =1"
                     
                      cursor.execute(query)
                      data =cursor.fetchall()
                      cursor.close() 
                      arr = []
                      for x in data:
                          dict_e = {
                              'PreLaunchDescription':x[0] ,
			      'PostLaunchDescription':x[1],
			      'LaunchDate':str(x[2]),
			      'TargetAppVersion':x[3],
			      'RunPeriod':x[4],
			      'Status':'200',
			      'Message': ' Search successful'
                          }
                          arr.append(dict_e)

                      #for l in data:
                          #print ', '.join(map(str, l))
                      if len(data) is 0:
			      conn.commit()
			      return {'Status':'1000','Message': ' Search unsuccessful'}
                      else:
	                      return arr
		                        
              except Exception as e:
	              if '1062' in str(e):
		              return {'Status':'1001','Message': "Search unsuccessful "}
	              return {'Status':'1010','Message':str(e)}






api.add_resource(CountdownTimer, '/CountdownTimer')

