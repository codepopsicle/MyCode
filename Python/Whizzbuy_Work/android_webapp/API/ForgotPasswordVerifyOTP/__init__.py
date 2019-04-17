from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

ForgotPasswordVerifyOTP = Blueprint('ForgotPasswordVerifyOTP', __name__)
api = Api(ForgotPasswordVerifyOTP)
# pdb.set_trace()

from . import forgot_password_verifyotp