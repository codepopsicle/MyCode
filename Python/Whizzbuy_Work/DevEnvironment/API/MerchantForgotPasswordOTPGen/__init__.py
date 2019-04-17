from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantForgotPasswordOTPGen = Blueprint('MerchantForgotPasswordOTPGen', __name__)
api = Api(MerchantForgotPasswordOTPGen)
# pdb.set_trace()

from . import merchantforgotpassotpgen