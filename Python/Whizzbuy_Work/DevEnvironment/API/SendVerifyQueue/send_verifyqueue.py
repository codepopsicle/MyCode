from flask import request
from flask.ext.restful import Resource
from . import api 
from extension import mysql
from flask_restful import reqparse
from server import app
from flask import request
import json


class SendVerifyqueue(Resource):
      def get(self):
          return {'hello': 'world'}
      def post(self):

          try:
              conn=mysql.connect()
              cursor = conn.cursor()
              json_data=request.get_json(force=True)

              for x in json_data:
                  print x
                  _userMobile = x['MobileNumber']
                  _itemname = x['ItemName']
                  _finalQuantity = x['FinalQuantity']
                  _outletid = x['OutletID']
                  _TransactionID = x['TransactionID']
                  isverified=0
                  tranverified=0
                  query= "INSERT INTO verifyqueue VALUES (%s,%s,%s,%s,%s,%s,%s)"
                  params=(_outletid,_userMobile,_finalQuantity,_itemname,_TransactionID,isverified,tranverified)
                  cursor.execute(query,params)
                  try:
                      if app.config['TESTING'] != True:
                          conn.commit()
                  except:
                      return {'Status':'1000','Message':'Entries not inserted into the Verify Queue'}
              return {"Status": "200", "Message": "Entries inserted into Verify Queue successfully"}



          except Exception as e:
              return {'Status':'1010','Message':str(e)}






api.add_resource(SendVerifyqueue, '/sendverifyqueue')

