from flask import Blueprint 
from flask.ext.restful import Api

SetNotifViewed = Blueprint('SetNotifViewed', __name__) 
api = Api(SetNotifViewed) 
from . import SetNotif_Viewed
