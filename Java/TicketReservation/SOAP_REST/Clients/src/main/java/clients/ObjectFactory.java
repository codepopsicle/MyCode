
package clients;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the clients package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _Viewcart_QNAME = new QName("http://servers/", "viewcart");
    private final static QName _Removefromcart_QNAME = new QName("http://servers/", "removefromcart");
    private final static QName _Buyitems_QNAME = new QName("http://servers/", "buyitems");
    private final static QName _ViewcartResponse_QNAME = new QName("http://servers/", "viewcartResponse");
    private final static QName _Additemtocart_QNAME = new QName("http://servers/", "additemtocart");
    private final static QName _FlightList_QNAME = new QName("http://servers/", "flightList");
    private final static QName _RemovefromcartResponse_QNAME = new QName("http://servers/", "removefromcartResponse");
    private final static QName _AdditemtocartResponse_QNAME = new QName("http://servers/", "additemtocartResponse");
    private final static QName _BuyitemsResponse_QNAME = new QName("http://servers/", "buyitemsResponse");
    private final static QName _FlightListResponse_QNAME = new QName("http://servers/", "flightListResponse");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: clients
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link AdditemtocartResponse }
     * 
     */
    public AdditemtocartResponse createAdditemtocartResponse() {
        return new AdditemtocartResponse();
    }

    /**
     * Create an instance of {@link Additemtocart }
     * 
     */
    public Additemtocart createAdditemtocart() {
        return new Additemtocart();
    }

    /**
     * Create an instance of {@link RemovefromcartResponse }
     * 
     */
    public RemovefromcartResponse createRemovefromcartResponse() {
        return new RemovefromcartResponse();
    }

    /**
     * Create an instance of {@link FlightListResponse }
     * 
     */
    public FlightListResponse createFlightListResponse() {
        return new FlightListResponse();
    }

    /**
     * Create an instance of {@link Removefromcart }
     * 
     */
    public Removefromcart createRemovefromcart() {
        return new Removefromcart();
    }

    /**
     * Create an instance of {@link ViewcartResponse }
     * 
     */
    public ViewcartResponse createViewcartResponse() {
        return new ViewcartResponse();
    }

    /**
     * Create an instance of {@link Viewcart }
     * 
     */
    public Viewcart createViewcart() {
        return new Viewcart();
    }

    /**
     * Create an instance of {@link Buyitems }
     * 
     */
    public Buyitems createBuyitems() {
        return new Buyitems();
    }

    /**
     * Create an instance of {@link FlightList }
     * 
     */
    public FlightList createFlightList() {
        return new FlightList();
    }

    /**
     * Create an instance of {@link BuyitemsResponse }
     * 
     */
    public BuyitemsResponse createBuyitemsResponse() {
        return new BuyitemsResponse();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Viewcart }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "viewcart")
    public JAXBElement<Viewcart> createViewcart(Viewcart value) {
        return new JAXBElement<Viewcart>(_Viewcart_QNAME, Viewcart.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Removefromcart }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "removefromcart")
    public JAXBElement<Removefromcart> createRemovefromcart(Removefromcart value) {
        return new JAXBElement<Removefromcart>(_Removefromcart_QNAME, Removefromcart.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Buyitems }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "buyitems")
    public JAXBElement<Buyitems> createBuyitems(Buyitems value) {
        return new JAXBElement<Buyitems>(_Buyitems_QNAME, Buyitems.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ViewcartResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "viewcartResponse")
    public JAXBElement<ViewcartResponse> createViewcartResponse(ViewcartResponse value) {
        return new JAXBElement<ViewcartResponse>(_ViewcartResponse_QNAME, ViewcartResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Additemtocart }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "additemtocart")
    public JAXBElement<Additemtocart> createAdditemtocart(Additemtocart value) {
        return new JAXBElement<Additemtocart>(_Additemtocart_QNAME, Additemtocart.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link FlightList }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "flightList")
    public JAXBElement<FlightList> createFlightList(FlightList value) {
        return new JAXBElement<FlightList>(_FlightList_QNAME, FlightList.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link RemovefromcartResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "removefromcartResponse")
    public JAXBElement<RemovefromcartResponse> createRemovefromcartResponse(RemovefromcartResponse value) {
        return new JAXBElement<RemovefromcartResponse>(_RemovefromcartResponse_QNAME, RemovefromcartResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link AdditemtocartResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "additemtocartResponse")
    public JAXBElement<AdditemtocartResponse> createAdditemtocartResponse(AdditemtocartResponse value) {
        return new JAXBElement<AdditemtocartResponse>(_AdditemtocartResponse_QNAME, AdditemtocartResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link BuyitemsResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "buyitemsResponse")
    public JAXBElement<BuyitemsResponse> createBuyitemsResponse(BuyitemsResponse value) {
        return new JAXBElement<BuyitemsResponse>(_BuyitemsResponse_QNAME, BuyitemsResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link FlightListResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://servers/", name = "flightListResponse")
    public JAXBElement<FlightListResponse> createFlightListResponse(FlightListResponse value) {
        return new JAXBElement<FlightListResponse>(_FlightListResponse_QNAME, FlightListResponse.class, null, value);
    }

}
