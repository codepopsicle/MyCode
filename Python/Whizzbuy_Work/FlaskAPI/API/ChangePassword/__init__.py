from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

ChangePassword = Blueprint('ChangePassword', __name__) 
api = Api(ChangePassword) 
# pdb.set_trace()

from . import change_password