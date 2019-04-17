from flask import Blueprint 
from flask.ext.restful import Api 
import pdb

FetchAdDetail = Blueprint('FetchAdDetail', __name__) 
api = Api(FetchAdDetail) 
# pdb.set_trace()

from . import fetch_ad_detail