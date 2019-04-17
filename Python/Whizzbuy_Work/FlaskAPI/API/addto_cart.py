from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql


class AddtoCart(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('BarcodeNum', type=int, help='Barcode of the product')

            args = parser.parse_args()
            # store arguments in variables
            _barcodenum = args['BarcodeNum']

            sql="SELECT * FROM test WHERE BarcodeNum = '%d'" % (_barcodenum)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            #checking if a product is found or not
            if len(result) == 0:
                return {'Status': '1000', 'Message': 'Product search unsuccessful'}
            # fetching details of product
            else:
                for row in result:
                    price=row[1]
                    prod_name=row[3]

                cursor.close()
                return {'Status': '200', 'Message': 'Product search successful', 'prodname':prod_name,'price':price}

        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}

api.add_resource(AddtoCart,'/addtocart')