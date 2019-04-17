from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import MySQLdb
import datetime
import time


class FetchSavedAd(Resource):

    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='mobile number of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']

            conn = mysql.connect()
            cursor = conn.cursor()

            returndata = []


            query = """SELECT advertid 
                        FROM adlikelist 
                        WHERE MobileNumber = %s AND isLiked = 1"""
            params = (_userMobile,)
            cursor.execute(query,params)
            data = cursor.fetchall()


            #checking if any liked ads exist
            if len(data):
                #fetching each advertid
                for row in data:
                    likeid = str(row[0][0]).strip()
                    #fetching details for this partiuclar ad ID from the advertlist table where isActive = 2(ad is active)
                    query = """SELECT adimage 
                        FROM advertlist 
                        WHERE advertid = %s AND isactive = '2'"""
                    params = (likeid)
                    cursor.execute(query,params)
                    data1 = cursor.fetchall()
                    #checking to see if any active saved ads exist
                    if len(data1):
                        adimage = data1[0][0]
                        returndata.append({'adID': likeid, 'adImage': adimage})


                if len(returndata) > 0:
                    returndata.append({'Status': '200'})
                    returndata.append({'Message': 'Saved Ads fetched successfully'})
                    return returndata
                else:
                   returndata.append({'Status': '1000'})
                   returndata.append({'Message': 'No active saved ads to fetch'})
                   return returndata


            else:
                returndata.append({'Status': '1001'})
                returndata.append({'Message': 'No liked ads to fetch'})
                return returndata




        
            
        except Exception as e:
            API = "FetchSavedAd"
            ExceptionText = str(e)
            ts = time.time()
            messagetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')

            query = """INSERT INTO exceptionlog
                                (API, Exception, Time)
                                VALUES (%s, %s, %s)
                            """
            params = (API, ExceptionText, messagetime)
            cursor.execute(query,params)
            conn.commit()

            cursor.close()
            conn.close()
            returndata = []
            returndata.append({'Status': '1010'})
            returndata.append({'Message':str(e)})
            return returndata

            #return {'Status': '1010', 'Message':str(e)}

api.add_resource(FetchSavedAd,'/fetchsavedad')