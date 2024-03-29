
package clients;

import java.net.MalformedURLException;
import java.net.URL;
import java.util.logging.Logger;
import javax.xml.namespace.QName;
import javax.xml.ws.Service;
import javax.xml.ws.WebEndpoint;
import javax.xml.ws.WebServiceClient;
import javax.xml.ws.WebServiceFeature;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.1.4-b01-
 * Generated source version: 2.1
 * 
 */
@WebServiceClient(name = "ServicesService", targetNamespace = "http://servers/", wsdlLocation = "http://localhost:8090/servers/SOAPServerInterface?wsdl")
public class ServicesService
    extends Service
{

    private final static URL SERVICESSERVICE_WSDL_LOCATION;
    private final static Logger logger = Logger.getLogger(clients.ServicesService.class.getName());

    static {
        URL url = null;
        try {
            URL baseUrl;
            baseUrl = clients.ServicesService.class.getResource(".");
            url = new URL(baseUrl, "http://localhost:8090/servers/SOAPServerInterface?wsdl");
        } catch (MalformedURLException e) {
            logger.warning("Failed to create URL for the wsdl Location: 'http://localhost:8090/servers/SOAPServerInterface?wsdl', retrying as a local file");
            logger.warning(e.getMessage());
        }
        SERVICESSERVICE_WSDL_LOCATION = url;
    }

    public ServicesService(URL wsdlLocation, QName serviceName) {
        super(wsdlLocation, serviceName);
    }

    public ServicesService() {
        super(SERVICESSERVICE_WSDL_LOCATION, new QName("http://servers/", "ServicesService"));
    }

    /**
     * 
     * @return
     *     returns SOAPServerInterface
     */
    @WebEndpoint(name = "ServicesPort")
    public SOAPServerInterface getServicesPort() {
        return super.getPort(new QName("http://servers/", "ServicesPort"), SOAPServerInterface.class);
    }

    /**
     * 
     * @param features
     *     A list of {@link javax.xml.ws.WebServiceFeature} to configure on the proxy.  Supported features not in the <code>features</code> parameter will have their default values.
     * @return
     *     returns SOAPServerInterface
     */
    @WebEndpoint(name = "ServicesPort")
    public SOAPServerInterface getServicesPort(WebServiceFeature... features) {
        return super.getPort(new QName("http://servers/", "ServicesPort"), SOAPServerInterface.class, features);
    }

}
