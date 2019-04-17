from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

ForgotPasswordOTPGen = Blueprint('ForgotPasswordOTPGen', __name__) 
api = Api(ForgotPasswordOTPGen)
# pdb.set_trace()

from . import forgot_pass_otpgen