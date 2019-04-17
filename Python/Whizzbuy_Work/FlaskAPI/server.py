import os
import logging
from logging.handlers import RotatingFileHandler
from werkzeug.contrib.fixers import ProxyFix


from flask import Flask, request, render_template



app = Flask(__name__)


from extension import mysql
import pdb


# MySQL configurations
app.config['MYSQL_DATABASE_USER'] = 'whizzbuytest'
app.config['MYSQL_DATABASE_PASSWORD'] = 'whizzbuytest'
app.config['MYSQL_DATABASE_DB'] = 'whizzbuytest'
app.config['MYSQL_DATABASE_HOST'] = 'whizzbuytest.c1vkqotq7mru.us-west-2.rds.amazonaws.com'



mysql.init_app(app)
# conn = mysql.connect()
# cursor = conn.cursor()
@app.route('/')
def foo():
    app.logger.warning('A warning occurred (%d apples)', 42)
    app.logger.error('An error occurred')
    app.logger.info('Info')
    return "foo"

@app.errorhandler(404)
def page_not_found(error):
	# pdb.set_trace()
	app.logger.error('Page not found: %s'% (request.path))
	return render_template('404.htm'), 4044


from API.createcustomer import createcustomer as createcustomer_blueprint
from API.verifyOTP import verifyOTP as verifyOTP_blueprint
from API.SaveProfileInfo import SaveProfileInfo as SaveProfileInfo_blueprint
from API.FetchProfileInfo import FetchProfileInfo as FetchProfileInfo_blueprint
from API.Logout import Logout as Logout_blueprint
from API.ChangePassword import ChangePassword as ChangePassword_blueprint
from API.Login import Login as Login_blueprint
from API.FetchReview import FetchReview as FetchReview_blueprint
from API.PostReview import PostReview as PostReview_blueprint
from API.FetchPremiumAd import FetchPremiumAd as FetchPremiumAd_blueprint
from API.FetchStandardAd import FetchStandardAd as FetchStandardAd_blueprint
from API.FetchTransactionHistory import FetchTransactionHistory as FetchTransactionHistory_blueprint
from API.FetchTransactionHistoryList import FetchTransactionHistoryList as FetchTransactionHistoryList_blueprint
from API.AddToCart import AddToCart as AddToCart_blueprint
from API.OutletCheckin import OutletCheckin as OutletCheckin_blueprint
from API.StoreLocator import StoreLocator as StoreLocator_blueprint
from API.lifestyle import lifestyle as lifestyle_blueprint
from API.CountDownTimer import CountdownTimer as CountDownTimer_blueprint
from API.FetchCustomerLifestyle import FetchCustomerLifestyle as FetchCustomerLifestyle_blueprint
from API.PostCustomerLifestyle import PostCustomerLifestyle as PostCustomerLifestyle_blueprint
from API.FetchShoppingList import FetchShoppingList as FetchShoppingList_blueprint
from API.SaveShoppingList import SaveShoppingList as SaveShoppingList_blueprint
from API.UpdateClientTable import UpdateClientTable as UpdateClientTable_blueprint
from API.ReportIssue import ReportIssue as ReportIssue_blueprint
from API.FetchProfileImage import FetchProfileImage as FetchProfileImage_blueprint
from API.SaveProfileImage import SaveProfileImage as SaveProfileImage_blueprint
from API.SetNotifViewed import SetNotifViewed as SetNotifViewed_blueprint
from API.LoadNotification import LoadNotification as LoadNotification_blueprint
from API.ForgotPasswordOTPGen import ForgotPasswordOTPGen as ForgotPasswordOTPGen_blueprint
from API.ForgotPasswordSetNew import ForgotPasswordSetNew as ForgotPasswordSetNew_blueprint
from API.ForgotPasswordVerifyOTP import ForgotPasswordVerifyOTP as ForgotPasswordVerifyOTP_blueprint
from API.RecordTransaction import RecordTransaction as RecordTransaction_blueprint
from API.MerchantLogin import MerchantLogin as MerchantLogin_blueprint
from API.MerchantLogout import MerchantLogout as MerchantLogout_blueprint
from API.MerchantChangePassword import MerchantChangePassword as MerchantChangePassword_blueprint
from API.MerchantForgotPasswordOTPGen import MerchantForgotPasswordOTPGen as MerchantForgotPasswordOTPGen_blueprint
from API.MerchantForgotPasswordVerifyOTP import MerchantForgotPasswordVerifyOTP as MerchantForgotPasswordVerifyOTP_blueprint
from API.MerchantForgotPasswordSetNew import MerchantForgotPasswordSetNew as MerchantForgotPasswordSetNew_blueprint
from API.MerchantFetchMetrics import MerchantFetchMetrics as MerchantFetchMetrics_blueprint
from API.RegisterOutlet import RegisterOutlet as RegisterOutlet_blueprint
from API.ConfirmVerifyQueue import ConfirmVerifyQueue as ConfirmVerifyQueue_blueprint
from API.FetchVerifyQueue import FetchVerifyQueue as FetchVerifyQueue_blueprint
from API.SendVerifyQueue import SendVerifyQueue as SendVerifyQueue_blueprint
from API.LoadNotificationCount import LoadNotificationCount as LoadNotificationCount_blueprint
from API.FetchOutletCity import FetchOutletCity as FetchOutletCity_blueprint



app.register_blueprint(createcustomer_blueprint)
app.register_blueprint(verifyOTP_blueprint)
app.register_blueprint(FetchProfileInfo_blueprint)
app.register_blueprint(SaveProfileInfo_blueprint)
app.register_blueprint(Logout_blueprint)
app.register_blueprint(ChangePassword_blueprint)
app.register_blueprint(Login_blueprint)
app.register_blueprint(FetchReview_blueprint)
app.register_blueprint(PostReview_blueprint)
app.register_blueprint(FetchPremiumAd_blueprint)
app.register_blueprint(FetchStandardAd_blueprint)
app.register_blueprint(FetchTransactionHistory_blueprint)
app.register_blueprint(FetchTransactionHistoryList_blueprint)
app.register_blueprint(AddToCart_blueprint)
app.register_blueprint(OutletCheckin_blueprint)
app.register_blueprint(StoreLocator_blueprint)
app.register_blueprint(lifestyle_blueprint)
app.register_blueprint(CountDownTimer_blueprint)
app.register_blueprint(FetchCustomerLifestyle_blueprint)
app.register_blueprint(PostCustomerLifestyle_blueprint)
app.register_blueprint(FetchShoppingList_blueprint)
app.register_blueprint(SaveShoppingList_blueprint)
app.register_blueprint(UpdateClientTable_blueprint)
app.register_blueprint(ReportIssue_blueprint)
app.register_blueprint(FetchProfileImage_blueprint)
app.register_blueprint(SaveProfileImage_blueprint)
app.register_blueprint(SetNotifViewed_blueprint)
app.register_blueprint(LoadNotification_blueprint)
app.register_blueprint(ForgotPasswordOTPGen_blueprint)
app.register_blueprint(ForgotPasswordSetNew_blueprint)
app.register_blueprint(ForgotPasswordVerifyOTP_blueprint)
app.register_blueprint(RecordTransaction_blueprint)
app.register_blueprint(MerchantLogin_blueprint)
app.register_blueprint(MerchantLogout_blueprint)
app.register_blueprint(MerchantChangePassword_blueprint)
app.register_blueprint(MerchantForgotPasswordOTPGen_blueprint)
app.register_blueprint(MerchantForgotPasswordVerifyOTP_blueprint)
app.register_blueprint(MerchantForgotPasswordSetNew_blueprint)
app.register_blueprint(MerchantFetchMetrics_blueprint)
app.register_blueprint(RegisterOutlet_blueprint)
app.register_blueprint(ConfirmVerifyQueue_blueprint)
app.register_blueprint(FetchVerifyQueue_blueprint)
app.register_blueprint(SendVerifyQueue_blueprint)
app.register_blueprint(LoadNotificationCount_blueprint)
app.register_blueprint(FetchOutletCity_blueprint)



if __name__ == '__main__':
    handler = RotatingFileHandler('404.log', maxBytes=10000, backupCount=1)
    handler.setLevel(logging.INFO)
    formatter = logging.Formatter(
	    '[%(asctime)s] {%(filename)s:%(lineno)d} %(levelname)s - %(message)s')
    handler.setFormatter(formatter)
    app.logger.addHandler(handler)
    app.wsgi_app = ProxyFix(app.wsgi_app)
    port = int(os.environ.get("PORT", 5000))
    app.run(host='0.0.0.0', port=port, debug=True, use_reloader=True)

	# # If you also want to see the log messages emitted by Werkzeug in your log file, you can add the following:

 #    log = logging.getLogger('werkzeug')
 #    log.setLevel(logging.DEBUG)
 #    log.addHandler(handler)
