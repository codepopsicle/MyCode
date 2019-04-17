from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantChangePassword = Blueprint('MerchantChangePassword', __name__)
api = Api(MerchantChangePassword)
# pdb.set_trace()

from . import merchantchangepassword