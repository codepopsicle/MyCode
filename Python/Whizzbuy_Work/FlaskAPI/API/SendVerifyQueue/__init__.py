from flask import Blueprint 
from flask.ext.restful import Api

SendVerifyQueue = Blueprint('SendVerifyQueue', __name__)
api = Api(SendVerifyQueue)
from . import send_verifyqueue

