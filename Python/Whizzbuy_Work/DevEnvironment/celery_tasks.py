from celery import Celery
from flask import Flask

app1 = Flask(__name__)


# Celery configuration
app1.config['CELERY_BROKER_URL'] = 'amqp://xapgbgky:4IrIF2gqmTxZKlet9COasd9x2WeGENXW@moose.rmq.cloudamqp.com/xapgbgky'
app1.config['CELERY_RESULT_BACKEND'] = 'amqp://xapgbgky:4IrIF2gqmTxZKlet9COasd9x2WeGENXW@moose.rmq.cloudamqp.com/xapgbgky'

# Initialize Celery
celery = Celery(app1.name, broker=app1.config['CELERY_BROKER_URL'],include=['email_task'])
celery.conf.update(app1.config)
