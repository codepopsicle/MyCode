from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

verifyOTP = Blueprint('verifyOTP', __name__) 
api = Api(verifyOTP) 
# pdb.set_trace()

from . import verify_otp