from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

ReturnURL = Blueprint('ReturnURL', __name__)
api = Api(ReturnURL)
# pdb.set_trace()

from . import returnurl