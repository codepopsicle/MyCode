from flask import Blueprint 
from flask.ext.restful import Api

FetchProfileImage = Blueprint('FetchProfileImage', __name__) 
api = Api(FetchProfileImage) 
from . import FetchProfile_Image
