from flask import Blueprint
from flask.ext.restful import Api

FetchSavedAd = Blueprint('FetchSavedAd', __name__)
api = Api(FetchSavedAd)
from . import fetch_saved_ad