from flask import Blueprint 
from flask.ext.restful import Api

ConfirmVerifyQueue = Blueprint('ConfirmVerifyQueue', __name__)
api = Api(ConfirmVerifyQueue)
from . import confirm_verifyqueue

