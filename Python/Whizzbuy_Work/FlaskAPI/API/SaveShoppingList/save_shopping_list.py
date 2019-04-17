from flask import request, jsonify
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import json

class Saveshoppinglist(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
            parser.add_argument('Title', type=str)
            parser.add_argument('Checked', type=str)
            parser.add_argument('Unchecked', type=str)

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args["MobileNumber"]
            _userTitle = args["Title"]
            _userChecked = json.loads(args["Checked"])
            _userUnchecked = json.loads(args["Unchecked"])

            sql="SELECT * FROM shoppinglist WHERE MobNum = '%s'" % (_userMobile)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            try:
                if len(result) == 0:
                    cursor.execute("INSERT INTO shoppinglist VALUES ('%s','%s','%s','%s')" %(_userMobile,json.dumps(_userUnchecked),json.dumps(_userChecked),_userTitle))
                    cursor.close()
                    conn.commit()
                    return {"status": "200", "message": "Shopping list save successful"}

                else:
                    cursor.execute("UPDATE shoppinglist SET Unchecked = '%s',Checked = '%s',Title = '%s' WHERE MobNum = '%s'" %(json.dumps(_userUnchecked),json.dumps(_userChecked),_userTitle,_userMobile))
                    cursor.close()
                    conn.commit()
                    return {"status": "200", "message": "Shopping list save successful"}
            except:
                return {"status": "1000", "message": "Shopping list save unsuccessful"}

        except Exception as e:
            return {"error" : str(e)}


api.add_resource(Saveshoppinglist,'/saveshoppinglist')


