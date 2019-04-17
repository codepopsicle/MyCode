from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import json

class Fetchshoppinglist(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']

            sql="SELECT * FROM shoppinglist WHERE MobNum = '%s'" % (_userMobile)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            if len(result) == 0:
                return {'status': '200', 'message': 'Shopping list fetch unsuccessful'}

            else:
                for row in result:
                    Unchecked=json.loads(row[1])
                    Checked=json.loads(row[2])
                    Title=row[3]



                return {'status': '1000', 'message': 'Shopping list fetch successful', 'title': Title,'checked':Checked,'unchecked':Unchecked}

        except Exception as e:
            return {"error" : str(e)}


api.add_resource(Fetchshoppinglist,'/fetchshoppinglist')


