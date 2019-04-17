from flask import Blueprint
from flask.ext.restful import Api

FetchDataPoint = Blueprint('FetchDataPoint', __name__)
api = Api(FetchDataPoint)
from . import fetch_data_point