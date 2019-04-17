from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantForgotPasswordVerifyOTP = Blueprint('MerchantForgotPasswordVerifyOTP', __name__)
api = Api(MerchantForgotPasswordVerifyOTP)
# pdb.set_trace()

from . import merchantforgotpasswordverifyotp