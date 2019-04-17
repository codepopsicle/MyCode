from flask import request
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql


class Updateclienttable(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            json_data = request.get_json(force=True)
            for x in range(len(json_data)):
                try:
                    sql="SELECT * FROM test WHERE BarcodeNum = '%d'" %(json_data[x]["barcode"])
                    # Execute the SQL command
                    cursor.execute(sql)
                    result= cursor.fetchall()
                    if len(result)==0:
                        return {'status': '1000', 'message': 'Client table not updated successfully'}
                    for row in result:
                        Quantity=row[4]
                        differnce=Quantity-json_data[x]["quantity"]

                    cursor.execute("UPDATE test SET Quantity = '%d' WHERE BarcodeNum = '%d'" %(differnce,json_data[x]["barcode"]))
                    conn.commit()
                except:
                    return {'Status': '1000', 'Message': 'Client table not updated successfully'}

            return {'Status': '200', 'Message': 'Client table updated successfully'}

        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(Updateclienttable,'/updateclienttable')





