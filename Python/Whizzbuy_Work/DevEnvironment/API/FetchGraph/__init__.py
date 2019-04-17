from flask import Blueprint
from flask.ext.restful import Api

FetchGraph = Blueprint('FetchGraph', __name__)
api = Api(FetchGraph)
from . import fetch_graph