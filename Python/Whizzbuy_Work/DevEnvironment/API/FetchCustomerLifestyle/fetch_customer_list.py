from flask.ext.restful import Resource
from . import api
from flask_restful import reqparse
from extension import mysql


class Fetchcustomerlifestyle(Resource):

    def post(self):

        try:
            conn = mysql.connect()
            cursor = conn.cursor()
            # Parse the arguments
            parser = reqparse.RequestParser()
            parser.add_argument('MobileNumber', type=str, help='MobileNumber number of the user')

            args = parser.parse_args()
            # store arguments in variables
            _userMobile = args['MobileNumber']
            sql="SELECT CustomerID FROM customermaster WHERE MobileNO = '%s'" % (_userMobile)

            # Execute the SQL command
            cursor.execute(sql)
            result= cursor.fetchall()
            if len(result) == 0:
                faildata = []
                faildata.append({'Status': '1000'})
                faildata.append({'Message': 'User is not registered'})
                return faildata
                #return {'Status': '1000', 'Message': 'User is not registered'}

            else:
                returndata=[]
                returndata.append({"Status": "200"})
                returndata.append({"Message": "Lifestyles successfully fetched"})
                i=1

                for row in result:
                    customerid=row[0]

                sql="SELECT * FROM customerlist WHERE CustomerID = '%s'" % (customerid)
                cursor.execute(sql)
                result= cursor.fetchall()
                if len(result) == 0:
                    responsedata = []
                    responsedata.append({'Status': '1001'})
                    responsedata.append({'Message': 'Lifestyle fetch unsuccessful'})
                    return responsedata
                    #return {'Status': '1001', 'Message': 'Lifestyle fetch unsuccessful'}

                else:
                    for row in result:
                        lifestyle=row[6]
                    #This list contains all the choices of lifestyles of the user
                    LifeStylelist = [int(x) for x in lifestyle.split(',')]
                    sql="SELECT * FROM lifestylelist "
                    # Execute the SQL command
                    cursor.execute(sql)
                    result= cursor.fetchall()
                    for row in result:
                        LifeStyleID=row[0]
                        LifeStyle=row[1]
                        LifeStyleDesc=row[2]
                        isChecked='0'

                        for x in LifeStylelist:
                            if LifeStyleID == x:
                                isChecked='1'
                                break

                        returndata.append({"Id":LifeStyleID,"check":isChecked,"style":LifeStyle,"desc":LifeStyleDesc})
                        i=i+1

                    return returndata

        except Exception as e:
            exception = []
            exception.append({'Status': '1010'})
            exception.append({'Message':str(e)})
            return exception
            #return {'Status': '1010', 'Message':str(e)}

api.add_resource(Fetchcustomerlifestyle,'/fetchcustomerlifestyle')

