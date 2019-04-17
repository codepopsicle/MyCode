from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
from dist_between_locations import Distance
from operator import itemgetter

class StoreLocator(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('Currentlat', type=str, help='Latitude of the current location')
            parser.add_argument('Currentlong', type=str, help='Longitude of the current location')
            parser.add_argument('City', type=str, help='City of the store')
            print("4545")
            args = parser.parse_args()
            # store arguments in variables
            print(args['Currentlat'])
            _currentlat = float(args['Currentlat'])
            _currentlong = float(args['Currentlong'])
            _city = args['City']
            print 153415
            sql="SELECT * FROM outletlist WHERE outletcity = '%s'" % (_city)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            Dist=[]
            # checking if outlet is registered or not
            if len(result) == 0:
                return {'Status': '1000', 'Message': 'No stores in the city'}
            # fetching details of outlet
            else:
                returndata=[]
                returndata.append({"Status": "200"})
                returndata.append({"Message": "Store location fetch successful"})
                data=[]
                i=1
                for row in result:
                    OutLatitude=float(row[14])
                    OutLongitude=float(row[15])
                    OutletCity=row[10]
                    Locality=row[9]
                    OutletAddr=row[2]
                    ParentMerchant=row[1]
                    #distance between current and store location
                    distance = Distance(_currentlong,_currentlat,OutLongitude,OutLatitude)
                    Dist.append(distance)
                    data.append({"dist":Dist[i-1],"locality":Locality,"addr":OutletAddr,"lat":OutLatitude,"long":OutLongitude, "parent":ParentMerchant})
                    i=i+1
                newlist = sorted(data, key=itemgetter('dist'))
                returndata.append(newlist)
                return returndata
        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(StoreLocator,'/storelocator')





