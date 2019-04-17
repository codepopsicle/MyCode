from flask import Blueprint 
from flask.ext.restful import Api

SaveProfileImage = Blueprint('SaveProfileImage', __name__) 
api = Api(SaveProfileImage) 
from . import SaveProfile_Image
