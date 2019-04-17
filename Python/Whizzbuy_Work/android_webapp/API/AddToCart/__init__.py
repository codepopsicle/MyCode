from flask import Blueprint
from flask.ext.restful import Api

AddToCart = Blueprint('AddToCart', __name__)
api = Api(AddToCart)
from . import addto_cart