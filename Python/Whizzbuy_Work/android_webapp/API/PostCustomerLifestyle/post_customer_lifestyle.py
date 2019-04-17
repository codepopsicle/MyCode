from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql


class Postcustomerlifestyle(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
            parser.add_argument('Lifestyle', type=str, help='Lifestyle of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _userlifestyle = args['Lifestyle']
            sql="SELECT CustomerID FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)

            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            if len(result) == 0:
                return {'Status': '1000', 'Message': 'User is not registered'}

            else:
                for row in result:
                    customerid=row[0]

                sql="UPDATE customerlist SET LifeStyle = '%s' WHERE CustomerID = '%d'" % (_userlifestyle,customerid)
                # Execute the SQL command
                cursor.execute(sql)

                try:
                    cursor.close()
                    conn.commit()
                    return {'Status': '200', 'Message': 'Lifestyle post successful'}

                except :
                    return {'Status': '1001', 'Message': 'Lifestyle post unsuccessful'}


        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}


api.add_resource(Postcustomerlifestyle, '/postcustomerlifestyle')
