__author__ = 'Jasmeet'
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from random import randint
import time
import datetime
from extension import mysql
from email_task import send_async_sms



class ForgotPasswordVerifyOtp(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
            parser.add_argument('Otp', type=str, help='OTP user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _userOtp = args['Otp']

            sql="SELECT * FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            for row in result:
                customerid=row[0]

            sql="SELECT * FROM customersession WHERE CustomerID = '%d'" % (customerid)
            # Execute the SQL command
            cursor.execute(sql)

            result= cursor.fetchall()
            for row in result:
                fetched_otp=row[3]
                otp_counter=row[4]

            if fetched_otp == _userOtp:
                # verification unsuccessfull

                cursor.execute("UPDATE customersession SET OTPCounter = 0 WHERE CustomerID = '%d'" % (customerid))
                cursor.close()
                conn.commit()
                return {'Status': '200', 'Message': 'OTP Successfully verified'}


            elif otp_counter < 3 :
                # verification unsuccessfull
                cursor.execute("UPDATE customersession SET OTPCounter = OTPCounter + 1  WHERE CustomerID = '%d'" %(customerid))
                cursor.close()
                conn.commit()
                return {'Status': '1000', 'Message': 'Verification unsuccessful'}

            elif otp_counter == 3:

                # OTP failed to check three times
				# Generate new OTP
                otp= randint(1000,9999)
                # getting current timestamp
                ts = time.time()
                c_time = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                # update database
                cursor.execute("UPDATE customersession SET OTPCounter = 0, OTP = '%s', SetTime = '%s'WHERE CustomerID = '%d'" % (otp, c_time,customerid))
                cursor.close()
                conn.commit()
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
                
                return {'Status': '1001', 'Message': 'Verification unsuccessful, maximum tries exceeded', 'OTP': str(otp)}


        except Exception as e:
            return {'Status': '1010', 'Message':str(e)}


api.add_resource(ForgotPasswordVerifyOtp, '/forgotpasswordverifyOTP')







