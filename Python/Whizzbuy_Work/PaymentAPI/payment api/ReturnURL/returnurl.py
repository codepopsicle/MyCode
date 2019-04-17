from flask import request
from flask.ext.restful import Resource
from . import api
from extension import mysql
import hashlib
import hmac
import json


class ReturnUrl(Resource):

	def post(self):
		conn = mysql.connect()
		cursor = conn.cursor()
		try:
			secret_key = "b6fe378ee1c9606e81ebb0d0d704fdfd51f9e397"
			txn_id = request.form.get('TxId')
			TransactionId= request.form.get('TransactionID')
			tx_status = request.form.get('TxStatus')
			amount = request.form.get('amount')
			pg_txn_no = request.form.get('pgTxnNo')
			issuer_ref_no = request.form.get('issuerRefNo')
			auth_id_code = request.form.get('authIdCode')
			first_name = request.form.get('firstName')
			last_name = request.form.get('lastName')
			pg_resp_code = int(request.form.get('pgRespCode'))
			address_zip = request.form.get('addressZip')
			payment_message = request.form.get('TxMsg', None)
			payment_status = request.form.get('TxStatus', None)
			payment_mode = request.form.get('paymentMode', None)
			payment_gateway = request.form.get('TxGateway', None)

			sql = "SELECT RcptAmount,CitrusID FROM transactionmasterlist WHERE TransactionID = %s"
			params=(TransactionId,)
			cursor.execute(sql,params)
			result=cursor.fetchall()
			if len(result)!=0:
				RcptAmount=result[0][0]
				CitrusId=result[0][1]

			if RcptAmount == float(amount) and str(txn_id) == CitrusId:
				if pg_resp_code == 0:

					sql="""UPDATE transactionmasterlist SET TransactionVerified =%s,
                                  CitrusStatus =%s,CitrusStatusDesc =%s, TransactionStatus=%s WHERE TransactionID=%s"""
					params=(1,pg_resp_code,tx_status,1,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
					sql="""UPDATE transactionlist SET TransactionVerified =%s WHERE TransactionID=%s"""
					params=(1,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
					sql="""UPDATE verifyqueue SET TransactionVerified =%s WHERE TransactionID=%s"""
					params=(1,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
				else:

					sql="""UPDATE transactionmasterlist SET TransactionVerified =%s,
                                  CitrusStatus =%s,CitrusStatusDesc =%s, TransactionStatus=%s WHERE TransactionID=%s"""
					params=(0,pg_resp_code,tx_status,1,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
					sql="""UPDATE transactionlist SET TransactionVerified =%s WHERE TransactionID=%s"""
					params=(0,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
					sql="""UPDATE verifyqueue SET TransactionVerified =%s WHERE TransactionID=%s"""
					params=(0,TransactionId,)
					cursor.execute(sql,params)
					conn.commit()
			else:
				sql="""UPDATE transactionmasterlist SET CitrusStatus =%s,
                                      CitrusStatusDesc =%s, TransactionStatus=%s WHERE TransactionID=%s"""
				params=(pg_resp_code,tx_status,2,TransactionId,)
				cursor.execute(sql,params)
				conn.commit()


			data_string = str(txn_id) + str(tx_status) + str(amount) + str(pg_txn_no) + str(issuer_ref_no) + \
						  str(auth_id_code) + str(first_name) + str(last_name) + str(pg_resp_code)
			if address_zip:
				data_string += str(address_zip)

			signature=hmac.new(secret_key, data_string, hashlib.sha1).hexdigest()
			#signature verification
			if signature == request.form.get("signature"):
				return "<html> <head> <body> scriptvar globaldata; function setdata(data) { globaldata = data; } function postResponseiOS() { return globaldata; } setdata('" + json.dumps(request.form)
			else:
				return {'Status':'1000','Message':'Transaction Failed'}

		except Exception as e:
			conn.close()
			return {'Status':'1001','Message':str(e) }



api.add_resource(ReturnUrl, '/returnurl')
