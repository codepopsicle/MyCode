from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantLogin = Blueprint('MerchantLogin', __name__)
api = Api(MerchantLogin)
# pdb.set_trace()

from . import merchantlogin