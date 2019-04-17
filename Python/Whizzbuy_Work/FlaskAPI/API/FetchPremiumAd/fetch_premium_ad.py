from flask.ext.restful import Resource 
from . import api 
from flask_restful import reqparse

from extension import mysql
from random import randint
import time
import datetime
import pdb
##################################################################################
#	ERROR LOG HANDLER
##################################################################################
import logging
import logging.handlers

logger = logging.getLogger("")
logger.setLevel(logging.DEBUG)
handler = logging.handlers.RotatingFileHandler("fetchPremiumAd.log",
    maxBytes=3000000, backupCount=2)
formatter = logging.Formatter(
    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
handler.setFormatter(formatter)
logger.addHandler(handler)

##################################################################################
class FetchPremiumAd(Resource):
	def post(self):
		try:
			# Current date time
			ts = time.time()
			current_date = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')
			conn = mysql.connect()
			cursor = conn.cursor()
			query = """SELECT *
						FROM advertlist
						WHERE pricingmarker  = '1' and isactive = '2' and %s >= startdate and %s < enddate 
						
					"""
			params = (current_date, current_date)
			cursor.execute(query,params)
			data = cursor.fetchall() 
			cursor.close()
			
			if len(data):
				conn = mysql.connect()
				cursor = conn.cursor()
				query = "SELECT Count FROM adcount WHERE Type = '1'"
				cursor.execute(query)
				count = cursor.fetchall() 
				cursor.close()

				if len(count):
					if len(data) > count[0][0]:
						return { "Message": "Number of premium ads more than admin specified", "Status": "1000"}
					else :
						result = []
						result.append({'Status': '200'})
						result.append({'Message': 'Premium Ads successfully fetched'})
						p_ad = {}
						# pdb.set_trace()
						img = {}
						adID = {}
						i = 1
						for ad in data:
							exec("img['image%d'] = %s" % ( i, repr(ad[2])))
							exec("adID['adID%d'] = %s" % ( i, repr(ad[0])))
							i += 1

						# pdb.set_trace()
						result.append(img)
						result.append(adID)
						return result#, {image1: URL, image2: URL, image3: URL, image4: URL.}, {adID1: Value1, adID2: Value2,}]}
				else:
					return {'Status' : '1001', 'Message': 'No premium ads'}
			else:
				logging.error('No ads found')
				return { "Message": "PremiumAd unavailable", "Status": "1002"}

		except Exception as e:
			logging.error(str(e))
			return { 'Message':str(e), "Status": "1010"}



api.add_resource(FetchPremiumAd, '/fetchpremiumad') 

