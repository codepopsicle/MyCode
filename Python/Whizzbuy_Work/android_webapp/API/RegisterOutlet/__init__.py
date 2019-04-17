from flask import Blueprint 
from flask.ext.restful import Api

RegisterOutlet = Blueprint('RegisterOutlet', __name__)
api = Api(RegisterOutlet)
from . import registeroutlet
