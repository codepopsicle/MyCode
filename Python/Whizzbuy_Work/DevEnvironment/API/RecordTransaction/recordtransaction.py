from flask import request, jsonify
from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import time
import datetime
import json
from server import app
from yattag import Doc

from email_task import send_async_email
from flask.ext.mail import Mail, Message
from email_task import send_async_sms



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
            Transactiondate = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')


            sql="SELECT * FROM customermaster WHERE MobileNO = '%s'" %(Mobile)
            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            for row in result:
                Customerid=row[0]


            sql="SELECT * FROM outletlist WHERE OutletID = '%d'" %(Outletid)
            cursor.execute(sql)
            result= cursor.fetchall()
            for row in result:
                parentmerchant=row[1]


            sql="SELECT * FROM outletlist WHERE outletid = '%d'" % (Outletid)
            # Execute the SQL command
            cursor.execute(sql)

            result= cursor.fetchall()
            for row in result:
                OutletCity=row[10]
                Locality=row[9]


            sql="""INSERT INTO transactionmasterlist (CompanyName,OutletID,
                          Receipt,CustomerID,RcptAmount,TransactionDate,TranCity,Locality,TransactionVerified,TransactionStatus)
                            VALUES ('%s','%d','%s','%d','%f','%s','%s','%s','%d','%d')"""\
                                %(parentmerchant,Outletid,json.dumps(Receipt),Customerid,RcptAmount,Transactiondate,OutletCity,Locality,0,0)
            cursor.execute(sql)
            if app.config['TESTING'] != True:
                conn.commit()
            cursor.execute("SELECT LAST_INSERT_ID()")
            result= cursor.fetchall()
            for row in result:
                Transid=row[0]

            sql="""INSERT INTO customertrannotification (CustID,TranID,Amt,isViewed,Mobile,TransactionVerified) VALUES ('%d','%d','%s','%d','%s','%d')"""\
                    %(Customerid,Transid,RcptAmount,1,Mobile,0)
            cursor.execute(sql)

            #setting total items count
            count = 0


            for x in Items:
                Barcode=x["Barcode"]
                print Barcode
                Price=x["Price"]
                Quantity=str(x["Quantity"])
                Itemdesc=x["ProductName"]
                count = count + int(Quantity)
                sql="INSERT INTO transactionlist VALUES ('%d','%s','%d','%s','%d','%d','%s','%s','%s','%d')"\
                                   %(Transid,Merchantcode,Outletid,Barcode,Customerid,Price,Transactiondate,Itemdesc,Quantity,0)
                cursor.execute(sql)

            query="""UPDATE transactionmasterlist SET TotItems = %s WHERE TransactionID = %s"""
            params = (count,Transid)
            cursor.execute(query,params)


            #inserting receipt into sendreceipt table
            sql1="SELECT parentmerchant, outletaddr, locality, landmark FROM outletlist WHERE outletid = '%d'" % (Outletid)
            cursor.execute(sql1)

            data1 = cursor.fetchall()

            MerchantName = data1[0][0]
            Address = data1[0][1]
            Locality = data1[0][2]
            Landmark = data1[0][3]

            #add receipt here
            conn.commit()


            if app.config['TESTING'] != True:
                conn.commit()
            cursor.close()
            conn.close()
            return {"Status":"200","Message":"Transaction Successful","TransactionID":Transid}

        except Exception as e:
            cursor.close()
            conn.close()
            return {'Status': '1010', 'Message':str(e)}


api.add_resource(Recordtransaction, '/recordtransaction')
