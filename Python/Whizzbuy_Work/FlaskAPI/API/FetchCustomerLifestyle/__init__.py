from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchCustomerLifestyle = Blueprint('FetchCustomerLifestyle', __name__)
api = Api(FetchCustomerLifestyle)
# pdb.set_trace()

from . import fetch_customer_list