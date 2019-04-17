from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchReview = Blueprint('FetchReview', __name__) 
api = Api(FetchReview) 
# pdb.set_trace()

from . import fetch_review