from flask_mail import Mail, Message
from celery_tasks import celery,app1

import json
import urllib # Python URL functions
import urllib2

# Flask-Mail configuration
app1.config['MAIL_SERVER'] = 'smtp.sendgrid.net'
app1.config['MAIL_PORT'] = 587
app1.config['MAIL_USE_TLS'] = True
app1.config['MAIL_USERNAME'] = 'whizzbuymail'
app1.config['MAIL_PASSWORD'] = 'g1o0ankr'
app1.config['MAIL_DEFAULT_SENDER'] = 'flask@example.com'

# Initialize extensions
mail = Mail(app1)


@celery.task
def send_async_email(msg):
    """Background task to send an email with Flask-Mail."""
    with app1.app_context():
        mail.send(msg)
    print "Email sent successfully"

@celery.task
def send_async_sms(values):
	"""Background task to send an SMS using MSG91 API"""
	with app1.app_context():
		url = "https://control.msg91.com/api/sendhttp.php" # API URL
		postdata = urllib.urlencode(values)
		req = urllib2.Request(url, postdata)
		response = urllib2.urlopen(req)
		output = response.read()
		print "SMS sent successfully"
