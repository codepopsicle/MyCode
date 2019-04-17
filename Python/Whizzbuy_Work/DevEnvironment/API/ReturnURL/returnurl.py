from flask import request
from flask.ext.restful import Resource
from . import api
from extension import mysql
import hashlib
import hmac
import json
import js2py


class ReturnUrl(Resource):

	def post(self):
		conn = mysql.connect()
		cursor = conn.cursor()
		try:
			secret_key = "b6fe378ee1c9606e81ebb0d0d704fdfd51f9e397"
			txn_id = request.form.get('TxId')
			print txn_id + "TransactionID"
			TransactionId= request.form.get('TransactionID')
			print TransactionId + "our tran ID"
			tx_status = request.form.get('TxStatus')
			print tx_status + "Transaction Status"
			amount = request.form.get('amount')
			print amount + "amount"
			pg_txn_no = request.form.get('pgTxnNo')
			print pg_txn_no + "pg_txn_no"
			issuer_ref_no = request.form.get('issuerRefNo')
			print issuer_ref_no + "issuer_ref_no"
			auth_id_code = request.form.get('authIdCode')
			print auth_id_code + "auth_id_code"
			first_name = request.form.get('firstName')
			print first_name + "first_name"
			last_name = request.form.get('lastName')
			print last_name + "last_name"
			pg_resp_code = int(request.form.get('pgRespCode'))
			print str(pg_resp_code)
			address_zip = request.form.get('addressZip')
			print address_zip + "address_zip"
			payment_message = request.form.get('TxMsg', None)
			print payment_message + "payment_message"
			payment_status = request.form.get('TxStatus', None)
			print payment_status + "payment_status"
			payment_mode = request.form.get('paymentMode', None)
			print payment_mode + "payment_mode"
			payment_gateway = request.form.get('TxGateway', None)
			print payment_gateway + "payment_gateway"

			sql = "SELECT RcptAmount,CitrusID FROM transactionmasterlist WHERE TransactionID = %s"
			params=(TransactionId,)
			cursor.execute(sql,params)
			result=cursor.fetchall()
			if len(result)!=0:
				RcptAmount=result[0][0]
				CitrusId=result[0][1]

			if str(txn_id) == str(CitrusId):
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
					sql="""UPDATE customertrannotification SET TransactionVerified =%s WHERE TranID=%s"""
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

			print data_string + "data_string"
			if address_zip:
				data_string += str(address_zip)

			signature=hmac.new(secret_key, data_string, hashlib.sha1).hexdigest()
			#signature verification
			print request.form.get("signature") + "sig"
			if signature == request.form.get("signature"):
				#x = """
				#pyimport flask.request;
				#function setdata() { return CitrusResponse.pgResponse(JSON.stringify(request.form));}"""
				#closewindow = js2py.eval_js('function setdata(data) { CitrusResponse.pgResponse(data);} setdata(JSON.stringify(request.form))')
				#return js2py.eval_js(x)

				return "<html> <head> <body> scriptvar globaldata; function setdata(data) { globaldata = data; } function postResponseiOS() { return globaldata; } setdata('" + json.dumps(request.form) + "'); CitrusResponse.pgResponse('" + json.dumps(request.form) + "');<script></body></head></html>"
				#return "<html> <head> <body> scriptvar globaldata; function setdata(data) { globaldata = data; } function postResponseiOS() { return globaldata; } setdata('" + json.dumps(request.form) + "'); CitrusResponse.loadWalletResponse('" + json.dumps(request.form) + "');<script></body></head></html>"
			else:
				return {'Status':'1000','Message':'Transaction Failed'}

		except Exception as e:
			conn.close()
			return {'Status':'1001','Message':str(e) }



api.add_resource(ReturnUrl, '/returnurl')
