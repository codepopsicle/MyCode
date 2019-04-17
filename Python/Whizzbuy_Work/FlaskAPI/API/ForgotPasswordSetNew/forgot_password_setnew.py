__author__ = 'Jasmeet'
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
import hashlib
from extension import mysql
from email_task import send_async_email
from flask.ext.mail import Mail, Message


conn = mysql.connect()
cursor = conn.cursor()

class ForgotPasswordSetNew(Resource):

    def post(self):

        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')
            parser.add_argument('Password', type=str, help='Password to create user')
            # store arguments in variables
            args = parser.parse_args()

            _userMobile = args['MobileNumber']
            _userPassword = args['Password']

            # hashing the password
            _userPassword = hashlib.sha256(_userPassword).hexdigest()
            # updating database with new password
            cursor.execute("UPDATE customermaster SET Password = '%s' WHERE MobileNO = '%s'" %(_userPassword,_userMobile))
            #cursor.close()
            conn.commit()
            #Adding Celery
            #Sending e-mail for successful password reset
            sql="SELECT CustomerID FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)
            cursor.execute(sql)
            result= cursor.fetchall()
            for row in result:
                customerid=row[0]
            sql="SELECT * FROM customerlist WHERE CustomerID = '%s'" % (customerid)
            cursor.execute(sql)
            result= cursor.fetchall()
            for row in result:
                emailid=row[4]
                firstname=row[1]
            msg = Message('You have successfully reset your password',sender="password@whizzbuy.com",recipients=[emailid])
            msg.body = 'This is a test email sent from a background Celery task.'
            msg.html = "Dear Mr." + firstname + ", you have successfully reset your password"

            send_async_email.apply_async(args=[msg])

            return {'Status': '200', 'Message': 'Successfully updated password'}

        except :
            return {'Status': '1000', 'Message': 'Password update unsuccessful'}


api.add_resource(ForgotPasswordSetNew, '/forgotpasswordsetnew')







