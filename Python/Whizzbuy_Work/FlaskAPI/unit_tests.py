from server import app, mysql
import os
import json
import unittest
import tempfile

class ApiTestCase(unittest.TestCase):
    # setting up initial configuration eg:- test database
    def setUp(self):
        app.config['TESTING'] = True
        app.config['MYSQL_DATABASE_USER'] = 'whizzbuytest'
        app.config['MYSQL_DATABASE_PASSWORD'] = 'whizzbuytest'
        app.config['MYSQL_DATABASE_DB'] = 'testwhizzbuy'
        app.config['MYSQL_DATABASE_HOST'] = 'whizzbuytest.c1vkqotq7mru.us-west-2.rds.amazonaws.com'
        self.conn = mysql.connect()
        self.cursor = self.conn.cursor()

    # test case for passing FetchShoppingList api
    def test_FetchShoppingList(self):
        tester = app.test_client(self)
        # saving the data in a variable to be sent
        sent=json.dumps({"MobileNumber":"2152256"})
        #fetching the response by calling the api with neccessary data
        response = tester.post('/fetchshoppinglist',data=sent, content_type='application/json',follow_redirects=True)
        #checking if the http request is successful or not
        self.assertEqual(response.status_code, 200)
        #checking if the response is equal to the required result
        reqdata={"checked": ["vfsdf","dfgh","saaw","jhkjh"],"message": "Shopping list fetch successful","status": "1000",
                                                    "title":"njfnf","unchecked": ["bnkvc","nvdsn","vfsdj","nvvbj"]}
        self.assertEqual(json.loads(response.data),reqdata)

    # test case for passing SaveShoppingList api
    def test_SaveShoppingList(self):
        tester = app.test_client(self)
        # saving the data in a variable to be sent
        sent=json.dumps({"MobileNumber":"8974589","Title":"Test","Checked":'["abc","def","ghi"]',"Unchecked":'["jkl","mno","pqr"]'})
        response = tester.post('/saveshoppinglist',data=sent, content_type='application/json',follow_redirects=True)
        #checking if the http request is successful or not
        self.assertEqual(response.status_code, 200)
        reqdata={"status": "200", "message": "Shopping list save successful"} #should be equal to fetched response
        #checking if the response is equal to the required result
        self.assertEqual(json.loads(response.data),reqdata)

    def test_AddToCart(self):
        tester = app.test_client(self)
        sent=json.dumps({"BarcodeNum":22})
        response = tester.post('/addtocart',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'Product search successful', 'prodname':'Maggi','price':150}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchCustomerLifestyle(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"1854763254"})
        response = tester.post('/fetchcustomerlifestyle',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": "Lifestyles successfully fetched"},{"Id1": 1,"check1": "1","desc1": "ghnfg vnvjkjf",
                                                                                   "style1": "Royal"},{"Id2": 2,"check2": "1","desc2": "ghkjhjklkjl",
                                                                                                       "style2": "Cool"},{"Id3": 3,"check3": "0","desc3": "",
                                                                                                                          "style3": "fcdfv"}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchProfileInfo(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454"})
        response = tester.post('/fetchprofile',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200','Message': 'Profile fetch is successful','FirstName': "Shane",'LastName':"Watson",
                  'Gender':None,'EmailID': "shane@gmail.com",'DOB': "1987-02-09",'LifeStyle': "1,2"}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchReview(self):
        tester = app.test_client(self)
        sent=json.dumps({"Barcode":"45127"})
        response = tester.post('/fetchreview',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{'Message': 'Review available'},{ 'Status': '200'},{'review':'cool','star_rating':4,'customername':"jnk dscdvfdv","locality":'GKM'}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchTransactionHistory(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454"})
        response = tester.post('/fetchtransactionhistory',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{'Status':'200'},{'Message':'Transaction History fetch successful'}, {'array1': [{'CompanyName': None,'tran_array': [],'Locality': 'GKM'}], 'name': 'Gwalior'}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchtransactionHistoryList(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","TransactionID":48})
        response = tester.post('/fetchtransactionhistorylist',data=sent, content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{'Status':'200'},{'Message':'Itemized receipt fetch successful'},{'trandate': '2016-02-04 04:09:30'},{'area':'GKM'},
                 {'city':'Gwalior'},{'comname': None},{'totamount': 155.0},{'totitem': None},
                 {'ItemBill2': {'isPosted':'1','quant':'3','val': 25.0,'desc':'DairyMilk'},
                  'ItemBill1':{'isPosted':'0','quant':'2','val':40.0,'desc':'Nutties'}}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_ForgotPasswordSetNew(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Password":"ghgh1234"})
        response = tester.post('/forgotpasswordsetnew',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={"Status": "200", "Message": "Successfully updated password"}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_StoreLocator(self):
        tester = app.test_client(self)
        sent=json.dumps({"Currentlat":"-56.45456","Currentlong":"5.456512","City":"gwalior"})
        response = tester.post('/storelocator',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": "Store location fetch successful"},
                 [{"addr": "some address","dist": 5078.908132778653,"lat": -12.4154,"locality": "GKM","long": 21.16121,"parent": "sumat1234"},
                  {"addr": "some address","dist": 7874.56384191835,"lat": 12.45154,"locality": "GKM","long": -14.16121,"parent": "sumat1234"},
                  {"addr": "some address","dist": 8064.940780225101,"lat": -142.4154,"locality": "GKM","long": -56.1648521,"parent": "sumat1234"},
                  {"addr": "some address","dist": 15765.413939721884,"lat": 142.4154,"locality": "GKM","long": 56.1648521,"parent": "sumat1234"}]]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_ForgotPasswordVerifyOTP(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Otp":"6905"})
        response = tester.post('/forgotpasswordverifyOTP',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'OTP Successfully verified'}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_ForgotPasswordOTPGen(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454"})
        response = tester.post('/forgotpasswordOTPgen',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'OTP successfully generated'}
        rdata=json.loads(response.data)
        self.assertEqual(rdata['Message'],reqdata['Message'])

    def test_Login(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Password":"ghgh1234"})
        response = tester.post('/login',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Successfully loggged in' }
        self.assertEqual(json.loads(response.data),reqdata)

    def test_Logout(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"7854698524"})
        response = tester.post('/logout',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Customer successfully logged out'}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_OutletCheckin(self):
        tester = app.test_client(self)
        sent=json.dumps({"Outletid":1,"Merchantcode":"NATU1","Wifiname":"Church123","Wifipass":"Church123"})
        response = tester.post('/outletcheckin',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'Outlet verified successfully', 'outletcity':"Mumbai", 'locality':"Churchgate"}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_PostCustomerLifestyle(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"7854698524","Lifestyle":"1,2"})
        response = tester.post('/postcustomerlifestyle',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'Lifestyle post successful'}
        self.assertEqual(json.loads(response.data),reqdata)


    def test_UpdateClientTable(self):
        tester = app.test_client(self)
        sent=json.dumps([{"barcode":22, "quantity":8}, {"barcode":2454, "quantity":7}])
        response = tester.post('/updateclienttable',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': 'Client table updated successfully'}
        self.assertEqual(json.loads(response.data),reqdata)


    def test_RecordTransaction(self):
        tester = app.test_client(self)
        sent=json.dumps([{"MerchantCode":"DFGB121"},{"OutletID":"1"},{"MobileNumber":"1854763254"},{"RcptAmount":155},
                         {"Receipt": {"Items": [{"Barcode":578901, "ProductName":"Nutties", "Price":40, "Quantity":2, "TotalPrice":80},
                                                {"Barcode":45127, "ProductName":"DairyMilk", "Price":25, "Quantity":3, "TotalPrice":75}],
                                      "Total":155,"ItemCount":5}}])
        response = tester.post('/recordtransaction',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={"Status":"200","Message":"Transaction Successful"}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_PostReview(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Barcode":"78456988","Review":"nice","StarRating":5,"TransactionID":48})
        response = tester.post('/postreview',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status':'200', 'Message':'Review successfully posted'}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_ReportIssue(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Message":"test"})
        response = tester.post('/ReportIssue',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status':'1000','Message': 'Issue logging successful'}
        rdata=json.loads(response.data)
        self.assertEqual(rdata['Message'],reqdata['Message'])

    def test_SaveProfileImage(self):
        tester = app.test_client(self)
        sent=json.dumps({"Image":"test","MobileNumber":"2345615454"})
        response = tester.post('/SaveProfileImage',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Image save successful'}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_SaveProfileInfo(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454","Firstname":"abc","LastName":"cde","Email":"abc@gmail.com","Lifestyle":"1,2",
        "Dob":"1987-02-09","Platform":"1","Gender":2})
        response = tester.post('/saveprofile',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Profile save is successful' }
        self.assertEqual(json.loads(response.data),reqdata)

    def test_SetNotifViewed(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454"})
        response = tester.post('/SetNotifViewed',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Notification viewed successfully'}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_ChangePassword(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"1854763254","Currpass":"asdf1234","Newpass":"qwed1234"})
        response = tester.post('/changepassword',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Successfully updated the password' }
        self.assertEqual(json.loads(response.data),reqdata)

    def test_verifyOTP(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"7854698524","Otp":"1005"})
        response = tester.post('/verifyotp',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={ 'Status': '200', 'Message': 'Customer Successfully verified' }
        self.assertEqual(json.loads(response.data),reqdata)

    def test_createcustomer(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"6547821452","FirstName":"raghu","LastName":"sharma","EmailID":"raghu@gmail.com","LifeStyle":"2",
                         "DOB":"1995-05-10","Platform":"2","Password":"raghu1234"})
        response = tester.post('/createcustomer',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status':'200','Message': 'User creation success' }
        rdata=json.loads(response.data)
        self.assertEqual(rdata['Message'],reqdata['Message'])

    def test_FetchProfileImage(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"7854698524"})
        response = tester.post('/FetchProfileImage',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={'Status': '200', 'Message': "Profile image fetch is successful" }
        rdata=json.loads(response.data)
        self.assertEqual(rdata['Message'],reqdata['Message'])

    def test_lifestyle(self):
        tester = app.test_client(self)
        response = tester.post('/FetchAllLifestyle',content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": " Fetch successful"},{"id": 1,"lifestyle": "Royal","lifestyledesc": "ghnfg vnvjkjf"},
                 {"id": 2,"lifestyle": "Cool","lifestyledesc": "ghkjhjklkjl"},{"id": 3,"lifestyle": "fcdfv","lifestyledesc": ""}]
        self.assertEqual(reqdata,reqdata)

    def test_CountDownTimer(self):
        tester = app.test_client(self)
        response = tester.post('/CountdownTimer',content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": " Search successful"},
                 {"LaunchDate": "0000-00-00","PostLaunchDescription": "https://play.google.com/store/apps/details?id=com.whatsapp&hl=en",
                  "PreLaunchDescription": "This app is in with agreement with teansferret","RunPeriod": 0,
                  "TargetAppVersion": "https://play.google.com/store/apps/details?id=com.whatsapp&hl=en"},
                 {"LaunchDate": "2015-12-17","PostLaunchDescription": "https://play.google.com/store/apps/details?id=com.whatsapp&hl=en",
                  "PreLaunchDescription": "hgjkng hdfvdjn jndkmvkld","RunPeriod": 0,"TargetAppVersion": "https://play.google.com/store/apps/details?id=com.whatsapp&hl=en"},
                 {"LaunchDate": "2015-12-09","PostLaunchDescription": "fref","PreLaunchDescription": "ded","RunPeriod": 0,"TargetAppVersion": "rfes"},
                 {"LaunchDate": "0000-00-00","PostLaunchDescription": "gfhn","PreLaunchDescription": "fghn","RunPeriod": 0,"TargetAppVersion": "hfghng"}]
        self.assertEqual(reqdata,reqdata)

    def test_LoadnNotification(self):
        tester = app.test_client(self)
        sent=json.dumps({"MobileNumber":"2345615454"})
        response = tester.post('/LoadNotification',content_type='application/json',data=sent,follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": "Notifications fetched successfully"},{"amt": [155],"id": "48"}]
        rdata=json.loads(response.data)
        self.assertEqual(rdata[1]['Message'],reqdata[1]['Message'])

    def test_FetchStandardAd(self):
        tester = app.test_client(self)
        response = tester.post('/fetchstandardad',content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": "Standard Ads successfully fetched"},{"image1": "http://google/jvndjk"},{"adID1": 1}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_FetchPremiumAd(self):
        tester = app.test_client(self)
        response = tester.post('/fetchpremiumad',content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata=[{"Status": "200"},{"Message": "Premium Ads successfully fetched"},
                 {"image1": "http://localhost/whizzbuy/images/a539db2548cb974a15d14b080e312b5c.png"},{"adID1": 3}]
        self.assertEqual(json.loads(response.data),reqdata)

    def test_MerchantFetchMetrics(self):
        tester = app.test_client(self)
        sent=json.dumps({'Outletid':3})
        response = tester.post('/merchantfetchmetrics',data=sent,content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={"GrossSale": 1,"Message": "Metric fetch successful","Status": "200","TotTran": 785}
        self.assertEqual(json.loads(response.data),reqdata)

    def test_RegisterOutlet(self):
        tester = app.test_client(self)
        sent=json.dumps({'OutletID':1,'Currentlat':89.4545,'Currentlong':45.7845})
        response = tester.post('/registeroutlet',data=sent,content_type='application/json',follow_redirects=True)
        self.assertEqual(response.status_code, 200)
        reqdata={"Message": "Outlet Location coordinates updated successfully","Status": "200"}
        self.assertEqual(json.loads(response.data),reqdata)


    # called at last
    def tearDown(self):
        self.conn.rollback()
        self.cursor.close()


if __name__ == '__main__':
    unittest.main()