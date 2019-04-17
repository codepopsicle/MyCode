from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

PostReview = Blueprint('PostReview', __name__) 
api = Api(PostReview) 
# pdb.set_trace()

from . import post_review