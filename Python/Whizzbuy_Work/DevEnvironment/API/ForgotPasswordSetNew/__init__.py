from flask import Blueprint 
from flask.ext.restful import Api 
# import pdb

ForgotPasswordSetNew = Blueprint('ForgotPasswordSetNew', __name__)
api = Api(ForgotPasswordSetNew)
# pdb.set_trace()

from . import forgot_password_setnew