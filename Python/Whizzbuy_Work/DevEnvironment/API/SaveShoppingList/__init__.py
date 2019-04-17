from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

SaveShoppingList = Blueprint('SaveShoppingList', __name__)
api = Api(SaveShoppingList)
# pdb.set_trace()

from . import save_shopping_list