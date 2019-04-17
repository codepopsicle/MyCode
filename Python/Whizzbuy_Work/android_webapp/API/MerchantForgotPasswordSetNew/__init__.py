from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantForgotPasswordSetNew = Blueprint('MerchantForgotPasswordSetNew', __name__)
api = Api(MerchantForgotPasswordSetNew)
# pdb.set_trace()

from . import merchantforgotpasswordsetnew