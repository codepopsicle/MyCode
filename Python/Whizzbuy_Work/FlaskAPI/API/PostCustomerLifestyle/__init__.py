from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

PostCustomerLifestyle = Blueprint('PostCustomerLifestyle', __name__)
api = Api(PostCustomerLifestyle)
# pdb.set_trace()

from . import post_customer_lifestyle