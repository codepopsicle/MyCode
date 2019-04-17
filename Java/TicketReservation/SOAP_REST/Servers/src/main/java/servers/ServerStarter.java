package servers;

import java.io.IOException;

import javax.xml.ws.Endpoint;

public class ServerStarter {
    //path where the service is available
    static final String BASE_URI_SOAP = "http://localhost:8090/servers/SOAPServerInterface";
    public static void main(String[] args) throws IOException {
        try {
            //instantiate singleton class, server instantiates a object of the singleton class for which only one object can be instantiated
            //all the other objects in server are instantiated by singleton class and bound to it, so that when a service is called it can get
            //handle of those uniquely instantiated objects like airport, customer list etc. from singleton object and refer to them for operation
            //Singleton singleton = Singleton.getInstance( );

            //instantiate SOAP server
            Endpoint.publish(BASE_URI_SOAP, new Services());

            System.out.println("Server started successfully");


        } catch (IllegalArgumentException e)
        {
            e.printStackTrace();
        }
    }
}
