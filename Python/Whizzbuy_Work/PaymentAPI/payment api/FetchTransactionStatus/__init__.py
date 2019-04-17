from flask import Blueprint 
from flask.ext.restful import Api

FetchTransactionStatus = Blueprint('FetchTransactionStatus', __name__)
api = Api(FetchTransactionStatus)
from . import fetch_transactionstatus

