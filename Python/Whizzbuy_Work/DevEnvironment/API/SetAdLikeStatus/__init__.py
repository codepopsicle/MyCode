from flask import Blueprint 
from flask.ext.restful import Api 
import pdb

SetAdLikeStatus = Blueprint('SetAdLikeStatus', __name__) 
api = Api(SetAdLikeStatus) 
# pdb.set_trace()

from . import ad_like_status