from flask import request, jsonify
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import time
import datetime
import json
from server import app

class Recordtransaction(Resource):

    def post(self):
        conn = mysql.connect()
        cursor = conn.cursor()
        try:
            transaction=request.get_json(force=True)
            Items=transaction[4]["Receipt"]["Items"]
            Merchantcode=transaction[0]["MerchantCode"]
            Merchantcode=Merchantcode.encode("UTF-8")
            Mobile=transaction[2]["MobileNumber"]
            Outletid=int(transaction[1]["OutletID"])
            RcptAmount=transaction[3]["RcptAmount"]
            Receipt=transaction[4]["Receipt"]
            ts = time.time()
            Transactiondate = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d')


            sql="SELECT * FROM customermaster WHERE MobileNO = '%s'" %(Mobile)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()

            for row in result:
                Customerid=row[0]

            sql="SELECT * FROM outletlist WHERE outletid = '%d'" % (Outletid)
            # Execute the SQL command
            cursor.execute(sql)

            result= cursor.fetchall()
            for row in result:
                OutletCity=row[10]
                Locality=row[9]

            sql="""INSERT INTO transactionmasterlist (MerchantCode,OutletID,
                          Receipt,CustomerID,RcptAmount,TransactionDate,TranCity,Locality)
                            VALUES ('%s','%d','%s','%d','%f','%s','%s','%s')"""\
                                %(Merchantcode,Outletid,json.dumps(Receipt),Customerid,RcptAmount,Transactiondate,OutletCity,Locality)
            cursor.execute(sql)
            if app.config['TESTING'] != True:
                conn.commit()
            cursor.execute("SELECT LAST_INSERT_ID()")
            result= cursor.fetchall()
            for row in result:
                Transid=row[0]


            for x in Items:
                Barcode=x["Barcode"]
                Price=x["Price"]
                Quantity=str(x["Quantity"])
                Itemdesc=x["ProductName"]
                sql="INSERT INTO transactionlist VALUES ('%d','%s','%d','%d','%d','%d','%s','%s','%s')"\
                                   %(Transid,Merchantcode,Outletid,Barcode,Customerid,Price,Transactiondate,Itemdesc,Quantity)
                cursor.execute(sql)

            if app.config['TESTING'] != True:
                conn.commit()
            cursor.close()
            return {"Status":"200","Message":"Transaction Successful","TransacitonID":Transid}

        except Exception as e:
            cursor.close()
            return {'Status': '1010', 'Message':str(e)}


api.add_resource(Recordtransaction, '/recordtransaction')
