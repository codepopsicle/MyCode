from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from geolocation.main import GoogleMaps



class FetchOutletcity(Resource):

    def post(self):

        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('Currentlat', type=str, help='Latitude of current location')
            parser.add_argument('Currentlong', type=str, help='Longitude of current location')
            args = parser.parse_args()
            # store arguments in variables
            curlat = args['Currentlat']
            curlong = args['Currentlong']

            google_maps = GoogleMaps(api_key='AIzaSyDcJGrEquvG-OTi4cBNR-olVMryfMuQL6U')
            #fetching location using location coordinates
            my_location = google_maps.search(lat=curlat, lng=curlong).first()
            City=my_location.city

            return {'Status':'200','Message':'Fetch Successful','City':City}

        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(FetchOutletcity,'/fetchoutletcity')
