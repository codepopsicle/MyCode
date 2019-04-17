from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchPremiumAd = Blueprint('FetchPremiumAd', __name__) 
api = Api(FetchPremiumAd) 
# pdb.set_trace()

from . import fetch_premium_ad