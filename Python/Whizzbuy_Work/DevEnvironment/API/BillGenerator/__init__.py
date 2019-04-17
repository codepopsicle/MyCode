from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

BillGenerator = Blueprint('BillGenerator', __name__)
api = Api(BillGenerator)
# pdb.set_trace()

from . import billgen