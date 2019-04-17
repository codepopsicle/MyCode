from flask import Blueprint 
from flask.ext.restful import Api 

createcustomer = Blueprint('createcustomer', __name__) 
api = Api(createcustomer) 
from . import create_customer