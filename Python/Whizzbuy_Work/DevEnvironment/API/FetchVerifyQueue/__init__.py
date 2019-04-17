from flask import Blueprint 
from flask.ext.restful import Api

FetchVerifyQueue = Blueprint('FetchVerifyQueue', __name__)
api = Api(FetchVerifyQueue)
from . import fetch_verifyqueue

