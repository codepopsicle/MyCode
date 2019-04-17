from flask import Blueprint
from flask.ext.restful import Api

FetchOutletCity = Blueprint('FetchOutletCity', __name__)
api = Api(FetchOutletCity)
from . import fetchoutletcity