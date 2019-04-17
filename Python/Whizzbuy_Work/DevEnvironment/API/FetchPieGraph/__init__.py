from flask import Blueprint
from flask.ext.restful import Api

FetchPieGraph = Blueprint('FetchPieGraph', __name__)
api = Api(FetchPieGraph)
from . import fetch_piegraph