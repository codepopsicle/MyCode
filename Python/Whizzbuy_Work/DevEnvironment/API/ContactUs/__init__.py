from flask import Blueprint 
from flask.ext.restful import Api

ContactUs = Blueprint('ContactUs', __name__)
api = Api(ContactUs)
from . import contactus

