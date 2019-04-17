__author__ = 'Jasmeet'
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from validate_email import validateEmail
import hashlib
from random import randint
import time
import datetime
from extension import mysql
from email_task import send_async_sms


conn = mysql.connect()
cursor = conn.cursor()

class ForgotPasswordOtpGen(Resource):

    def post(self):

        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']

            sql="SELECT CustomerID FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)

            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            if len(result) == 0:
                return {'Status': '1000', 'Message': 'User is not registered'}

            else:
                for row in result:
                    customerid=row[0]

                # generating OTP
                otp= randint(1000,9999)
                # getting current timestamp
                ts = time.time()
                c_time = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                #updating database
                cursor.execute("UPDATE customersession SET OTP = '%s', SetTime = '%s' WHERE CustomerID = '%d'" %(otp, c_time,customerid))
                #cursor.close()
                conn.commit()
                #cursor.close()
                #Shift this to Celery
                message = "Your OTP is " + str(otp)
                sender = "WHZBUY"
                mobiles = _userMobile
                authkey = "102441AdJT63zH569fc8be"
                route = "4"

                values = {
                            'authkey' : authkey,
                            'mobiles' : mobiles,
                            'message' : message,
                            'sender' : sender,
                            'route' : route
                }

                send_async_sms.apply_async(args=[values])

                return {'Status': '200', 'Message': 'OTP successfully generated', 'OTP': str(otp)}

        except :
            return {'Status': '1001', 'Message': 'OTP generation was unsuccessful, try again'}


api.add_resource(ForgotPasswordOtpGen, '/forgotpasswordOTPgen')







