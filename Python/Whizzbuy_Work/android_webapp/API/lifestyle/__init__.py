from flask import Blueprint 
from flask.ext.restful import Api

lifestyle = Blueprint('lifestyle', __name__) 
api = Api(lifestyle) 
from . import life_style
