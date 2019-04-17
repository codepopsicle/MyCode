from flask import Blueprint 
from flask.ext.restful import Api 

# For error logging
from flask import current_app
# import pdb

SaveProfileInfo = Blueprint('SaveProfileInfo', __name__) 
api = Api(SaveProfileInfo) 
# pdb.set_trace()

from . import save_profile