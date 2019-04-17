__author__ = 'Jasmeet'
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
import hashlib
from extension import mysql



conn = mysql.connect()
cursor = conn.cursor()

class MerchantForgotPasswordSetNew(Resource):

    def post(self):

        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('OutletID', type=str, help='Unique ID of the outlet')
            parser.add_argument('Password', type=str, help='Password to create user')
            # store arguments in variables
            args = parser.parse_args()

            _userOutletID = args['OutletID']
            _userPassword = args['Password']

            # hashing the password
            _userPassword = hashlib.sha256(_userPassword).hexdigest()
            # updating database with new password
            cursor.execute("UPDATE outletlist SET Password = '%s' WHERE OutletID = '%s'" %(_userPassword,_userOutletID))
            #cursor.close()
            conn.commit()
			

            return {'Status': '200', 'Message': 'Successfully updated password'}

        except :
            return {'Status': '1000', 'Message': 'Password update unsuccessful'}


api.add_resource(MerchantForgotPasswordSetNew, '/merchantforgotpasswordsetnew')







