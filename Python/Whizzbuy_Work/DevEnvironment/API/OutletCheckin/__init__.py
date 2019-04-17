from flask import Blueprint
from flask.ext.restful import Api

OutletCheckin = Blueprint('OutletCheckin', __name__)
api = Api(OutletCheckin)
from . import outlet_checkin
