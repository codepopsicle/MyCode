from flask import Blueprint 
from flask.ext.restful import Api

LoadNotification = Blueprint('LoadNotification', __name__) 
api = Api(LoadNotification) 
from . import Load_Notification
