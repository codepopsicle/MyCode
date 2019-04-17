from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

UpdateClientTable = Blueprint('UpdateClientTable', __name__)
api = Api(UpdateClientTable)
# pdb.set_trace()

from . import update_client_table