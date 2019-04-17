from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

FetchShoppingList = Blueprint('FetchShoppingList', __name__)
api = Api(FetchShoppingList)
# pdb.set_trace()

from . import fetch_shopping_list