from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql
import MySQLdb
import datetime
import time


class AdLikeStatus(Resource):

    def post(self):
        try:
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='Mobile Number of the user')
            parser.add_argument('AdvertID', type=str, help='unique ID of the ad')
            parser.add_argument('like', type=int, help='status of the ad')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            _advertID = args['AdvertID']
            _like = args['like']

            conn = mysql.connect()
            cursor = conn.cursor()

            query = """SELECT * 
                        FROM adlikelist
                        WHERE MobileNumber = %s AND advertid = %s
                    """
            params = (_userMobile,_advertID)
            cursor.execute(query,params)
            data = cursor.fetchall()

            if len(data):
                #Checking if the customer has already liked the ad
                if _like == 1:
                    #setting the value of isLiked
                    query = """UPDATE adlikelist SET 
                        isLiked = 1
                        WHERE MobileNumber = %s AND advertid = %s
                    """
                    params = (_userMobile,_advertID)
                    cursor.execute(query,params)
                    conn.commit()


                    #fetching the current value of likecount
                    query = """SELECT likecount FROM advertlist 
                        WHERE advertid = %s
                    """
                    params = (_advertID)
                    cursor.execute(query,params)
                    data = cursor.fetchall()
                    likecount = data[0][0]
                    likecount = likecount + 1



                    #updating new value of likecount
                    query = """UPDATE advertlist SET 
                        likecount = %s
                        WHERE advertid = %s
                    """
                    params = (likecount,_advertID)
                    cursor.execute(query,params)
                    conn.commit()

                    returndata = []
                    returndata.append({'Status': 200})
                    returndata.append({'Message': "Ad status insertion/update successful"})
                    return returndata
                else:
                    if _like == 0:
                        print "Inside"
                        query = """UPDATE adlikelist SET 
                        isLiked = 0
                        WHERE MobileNumber = %s AND advertid = %s
                        """
                        params = (_userMobile,_advertID)
                        cursor.execute(query,params)
                        conn.commit()

                        #fetching the current value of likecount
                        query = """SELECT likecount FROM advertlist 
                        WHERE advertid = %s
                        """
                        params = (_advertID)
                        cursor.execute(query,params)
                        data = cursor.fetchall()
                        likecount = data[0][0]
                        likecount = likecount - 1

                        #updating new value of likecount
                        query = """UPDATE advertlist SET 
                        likecount = %s
                        WHERE advertid = %s
                        """
                        params = (likecount,_advertID)
                        cursor.execute(query,params)
                        conn.commit()


                        returndata = []
                        returndata.append({'Status': 200})
                        returndata.append({'Message': "Ad status insertion/update successful"})
                        return returndata

            else:
                if _like == 1:

                    ts = time.time()
                    messagetime = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                    query = """INSERT INTO adlikelist
                                    (MobileNumber, advertid, inserttime, isLiked)
                                    VALUES (%s, %s, %s, %s)
                                """
                    params = (_userMobile, _advertID, messagetime, 1)
                    cursor.execute(query,params)
                    conn.commit()

                    #fetching current value of likecount
                    query = """SELECT likecount FROM advertlist 
                            WHERE advertid = %s
                        """
                    params = (_advertID)
                    cursor.execute(query,params)
                    data = cursor.fetchall()
                    likecount = data[0][0]
                    likecount = likecount + 1

                    #updating new value of likecount
                    query = """UPDATE advertlist SET 
                            likecount = %s
                            WHERE advertid = %s
                        """
                    
                    params = (likecount,_advertID)
                    cursor.execute(query,params)
                    conn.commit()
                    returndata = []
                    returndata.append({'Status': 200})
                    returndata.append({'Message': "Ad status insertion/update successful"})
                    return returndata





        except Exception as e:
            query = """INSERT INTO exceptionlog
                                    (API, Exception, Time)
                                    VALUES (%s, %s, %s)
                                """
            API = "setadlikestatus"
            params = (API, str(e), messagetime)
            cursor.execute(query,params)
            conn.commit()

            cursor.close()
            conn.close()
            returndata = []
            returndata.append({'Status': '1010'})
            returndata.append({'Message':str(e)})
            return returndata

            #return {'Status': '1010', 'Message':str(e)}

api.add_resource(AdLikeStatus,'/setadlikestatus')