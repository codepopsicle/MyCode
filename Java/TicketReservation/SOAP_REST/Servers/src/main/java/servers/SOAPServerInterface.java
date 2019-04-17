/**
 *
 */
package servers;

import javax.jws.*;

/**
 * @author Deveena Jain
 *
 */
//Service Endpoint interface
@WebService
public interface SOAPServerInterface {

    @WebMethod
    String additemtocart(String flightNumber,String seatNumber,String seatType,String userID);

    @WebMethod
    String removefromcart(String flightNumber,String seatNumber,String seatType,String userID);

    @WebMethod
    String flightList(String flightNumber);


    @WebMethod
    String viewcart(String userID);

    @WebMethod
    String buyitems(String userID,String flightNumber,String seatNumber);

}
