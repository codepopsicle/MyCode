from flask import Blueprint 
from flask.ext.restful import Api

ReportIssue = Blueprint('ReportIssue', __name__) 
api = Api(ReportIssue) 
from . import Report_Issue
