from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql

class Outletcheckin(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('Outletid', type=int, help='Id of the outlet')
            parser.add_argument('Merchantcode', type=str, help='Code for merchant')
            parser.add_argument('Wifiname', type=str, help='Name of wifi')
            parser.add_argument('Wifipass', type=str, help='Password of wifi')

            args = parser.parse_args()
            # store arguments in variables
            _outletid = args['Outletid']
            _merchantcode = args['Merchantcode']
            _wifiname = args['Wifiname']
            _wifipass = args['Wifipass']

            sql="SELECT * FROM outletlist WHERE outletid = '%d'" % (_outletid)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            # checking if outlet is registered or not
            if len(result) == 0:
                return {'Status': '1001', 'Message': 'Outlet is not registered'}
            # fetching details of outlet
            else:
                for row in result:
                    MerchantCode=row[3]
                    APName=row[7]
                    APPass=row[8]
                    OutletCity=row[10]
                    Locality=row[9]
            # verifying the details
            if _merchantcode==MerchantCode and _wifiname==APName and _wifipass==APPass :
                return {'Status': '200', 'Message': 'Outlet verified successfully', 'outletcity':OutletCity, 'locality':Locality}
            else:
                return {'Status': '1000', 'Message': 'Outlet verification unsuccessful'}

        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(Outletcheckin,'/outletcheckin')
