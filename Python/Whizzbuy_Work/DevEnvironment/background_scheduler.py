from yattag import Doc
from apscheduler.schedulers.blocking import BlockingScheduler

sched = BlockingScheduler()

@sched.scheduled_job('interval', minutes=1)
def timed_job():
	variable = "New"
	doc, tag, text = Doc().tagtext()
	doc.asis('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">')
	with tag('html'):
		doc.attr(xmlns = "http://www.w3.org/1999/xhtml")
		with tag('head'):
			with tag('meta'):
				doc.attr('http-equiv="Content-Type"')
				doc.attr(content="text/html; charset=iso-8859-1")
			with tag('title'):
				text(variable)

	print (doc.getvalue() + "doc")
	print('This job is run every three minutes.')




    #print('This job is run every three minutes.')

@sched.scheduled_job('cron', day_of_week='mon-fri', hour=17)
def scheduled_job():
    print('This job is run every weekday at 5pm.')

sched.start()