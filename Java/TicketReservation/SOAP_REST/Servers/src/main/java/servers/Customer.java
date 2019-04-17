package servers;

public class Customer {

    //This Class represents customer object
    private String customerID;
    private String customerName="";
    private int customerAge=0;
    private shoppingCart customerCart;		//shopping cart for each customer

    public Customer(){}
    public Customer(String customerID) {
        this.customerID = customerID;
        setcustomerCart();						//Initialize customers cart
    }
    //This method adds Reservation to customer's cart
    public int addReservationToMyCart(Reservation Reservations)
    {
        return customerCart.addToCart(Reservations);
    }

    //This method displays customer's cart
    public String viewMyCart(){
        return customerCart.viewCart();				}

    //This method removes Reservation from customer's cart
    public int removeReservationFromMyCart(String SeatNumber,String FlightNumber)
    {
        return customerCart.removeFromCart(SeatNumber,FlightNumber);
    }

    //This method buys Reservations in customer's cart
    public int buyReservations()
    {
        return customerCart.resetReservation();
    }


    //setters
    public void setcustomerID(String customerID)
    {
        this.customerID = customerID;
    }

    public void setcustomerName(String customerName)
    {
        this.customerName = customerName;
    }

    public void setcustomerAge(int customerAge)
    {
        this.customerAge = customerAge;
    }

    public void setcustomerCart()
    {
        this.customerCart = new shoppingCart();
    }

    //getters
    public String getcustomerID()
    {
        return this.customerID;
    }

    public String getcustomerName()
    {
        return this.customerName;
    }

    public int getcustomerAge()
    {
        return this.customerAge;
    }

    public shoppingCart getshoppingCart()
    {
        return this.customerCart;
    }


}
