from flask import Blueprint 
from flask.ext.restful import Api

CountdownTimer = Blueprint('CountdownTimer', __name__) 
api = Api(CountdownTimer) 
from . import Countdown_Timer
