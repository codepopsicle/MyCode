from celery import Celery
from flask import Flask

app1 = Flask(__name__)


# Celery configuration
app1.config['CELERY_BROKER_URL'] = 'amqp://edfyavlj:GqZw8m3wSHPs6KbBJlBtl3RER6cSZ0jg@jaguar.rmq.cloudamqp.com/edfyavlj'
app1.config['CELERY_RESULT_BACKEND'] = 'amqp://edfyavlj:GqZw8m3wSHPs6KbBJlBtl3RER6cSZ0jg@jaguar.rmq.cloudamqp.com/edfyavlj'

# Initialize Celery
celery = Celery(app1.name, broker=app1.config['CELERY_BROKER_URL'],include=['email_task'])
celery.conf.update(app1.config)
