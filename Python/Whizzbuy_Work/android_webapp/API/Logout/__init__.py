from flask import Blueprint 
from flask.ext.restful import Api 
import pdb

Logout = Blueprint('Logout', __name__) 
api = Api(Logout) 
# pdb.set_trace()

from . import log_out