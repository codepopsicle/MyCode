import os
import logging
from logging.handlers import RotatingFileHandler

from flask import Flask, request, render_template

application = Flask(__name__)

from extension import mysql
import pdb


# MySQL configurations
application.config['MYSQL_DATABASE_USER'] = 'whizzbuy'
application.config['MYSQL_DATABASE_PASSWORD'] = 'whizzbuy'
application.config['MYSQL_DATABASE_DB'] = 'whizzbuy'
application.config['MYSQL_DATABASE_HOST'] = 'whizzbuy.c1vkqotq7mru.us-west-2.rds.amazonaws.com'

mysql.init_app(application)
# conn = mysql.connect()
# cursor = conn.cursor()
@application.route('/')
def foo():
    application.logger.warning('A warning occurred (%d apples)', 42)
    application.logger.error('An error occurred')
    application.logger.info('Info')
    return "foo"

@application.errorhandler(404)
def page_not_found(error):
	# pdb.set_trace()
	application.logger.error('Page not found: %s'% (request.path))
	return render_template('404.htm'), 4044


from Login import Login as Login_blueprint



application.register_blueprint(Login_blueprint)



if __name__ == '__main__':
    handler = RotatingFileHandler('404.log', maxBytes=10000, backupCount=1)
    handler.setLevel(logging.INFO)
    formatter = logging.Formatter(
	    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
    handler.setFormatter(formatter)
    application.logger.addHandler(handler)
    port = int(os.environ.get("PORT", 5000))
    application.run(host='0.0.0.0', port=port, debug=True, use_reloader=True)

	# # If you also want to see the log messages emitted by Werkzeug in your log file, you can add the following:

 #    log = logging.getLogger('werkzeug')
 #    log.setLevel(logging.DEBUG)
 #    log.addHandler(handler)
