from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import MySQLdb
import datetime
import time


class FetchAdDetail(Resource):

    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('AdvertID', type=str, help='unique ID of the ad')
            parser.add_argument('MobileNumber', type=str, help='mobile number of the user')

            args = parser.parse_args()
            # store arguments in variables
            _advertID = args['AdvertID']
            _userMobile = args['MobileNumber']

            conn = mysql.connect()
            cursor = conn.cursor()


            query = """SELECT adimage, addesc, likecount, adtitle, parentbrand 
                        FROM advertlist
                        WHERE advertid = %s
                    """
            params = (_advertID)
            cursor.execute(query,params)
            data = cursor.fetchall()

            adimage = data[0][0]
            addesc = data[0][1]
            likecount = data[0][2]
            adtitle = data[0][3]
            parentbrand = data[0][4]

            if len(data):
                #adding entry into the clickcount table

                ts = time.time()
                messagetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                query = """INSERT INTO clicklist
                                    (MobileNumber, Advertid, Inserttime)
                                    VALUES (%s, %s, %s)
                                """
                params = (_userMobile, _advertID, messagetime)
                cursor.execute(query,params)
                conn.commit()


                returndata = []
                returndata.append({'Status': 200})
                returndata.append({'Message': "Ad details fetch successfully"})
                returndata.append({'adimage': adimage})
                returndata.append({'addesc': addesc})
                returndata.append({'adtitle': adtitle})
                returndata.append({'parentbrand': parentbrand})
                returndata.append({'likecount': likecount})

                return returndata


            else:
                returndata = []
                returndata.append({'Status': 1000})
                returndata.append({'Message': "No details for the ad"})

                return returndata




            
        except Exception as e:

            cursor.close()
            conn.close()
            returndata = []
            returndata.append({'Status': '1010'})
            returndata.append({'Message':str(e)})
            return returndata

            #return {'Status': '1010', 'Message':str(e)}

api.add_resource(FetchAdDetail,'/fetchaddetail')