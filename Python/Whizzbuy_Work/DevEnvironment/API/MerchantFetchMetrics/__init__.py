from flask import Blueprint
from flask.ext.restful import Api

MerchantFetchMetrics = Blueprint('MerchantFetchMetrics', __name__)
api = Api(MerchantFetchMetrics)
from . import merchant_fetch_metrics
