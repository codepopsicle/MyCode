from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchStandardAd = Blueprint('FetchStandardAd', __name__) 
api = Api(FetchStandardAd) 
# pdb.set_trace()

from . import fetch_standard_ad