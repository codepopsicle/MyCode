from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse
from extension import mysql
from server import app

conn = mysql.connect() 
cursor = conn.cursor()

class Registeroutlet(Resource):
      def get(self):
              return {'hello': 'world'}
      def post(self):
          try:
              #parsing the mobile number
              parser = reqparse.RequestParser()
              parser.add_argument('OutletID', type=str, help='Id of the outlet')
              parser.add_argument('Currentlat', type=str, help='Latitude of the current location')
              parser.add_argument('Currentlong', type=str, help='Longitude of the current location')
              args = parser.parse_args()
              # store arguments in variables
              _outletid = args['OutletID']
              _currentlat = args['Currentlat']
              _currentlong = args['Currentlong']
              cursor = conn.cursor()
              query= "SELECT * FROM outletlist WHERE outletid=%s"
              param= (_outletid,)
              cursor.execute(query,param)
              data =cursor.fetchall()
              if len(data)== 0:
                  return {'Status':'1000','Message':'Outlet not registered'}

              query= "UPDATE outletlist SET outlatitude=%s,outlongitude=%s WHERE outletid=%s"
              param= (_currentlat,_currentlong,_outletid,)
              cursor.execute(query,param)
              try:
                  if app.config['TESTING'] != True:
                      conn.commit()
                  return {'Status':'200','Message':'Outlet Location coordinates updated successfully'}
              except:
                  return {'Status':'1001','Message':'Coordinates not updated successfully'}

          except Exception as e:
              return {'Status':'1010','Message': str(e)}

                      
             
api.add_resource(Registeroutlet, '/registeroutlet')

