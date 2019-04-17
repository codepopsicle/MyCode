from flask import Blueprint 
from flask.ext.restful import Api

LoadNotificationCount = Blueprint('LoadNotificationCount', __name__) 
api = Api(LoadNotificationCount) 
from . import Load_Notification_Count
