from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

MerchantLogout = Blueprint('MerchantLogout', __name__)
api = Api(MerchantLogout)
# pdb.set_trace()

from . import merchantlogout