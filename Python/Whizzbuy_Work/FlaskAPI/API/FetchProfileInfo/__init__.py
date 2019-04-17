from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchProfileInfo = Blueprint('FetchProfileInfo', __name__) 
api = Api(FetchProfileInfo) 
# pdb.set_trace()

from . import fetch_profile