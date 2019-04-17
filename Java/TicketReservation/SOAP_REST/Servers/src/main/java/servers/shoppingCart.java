package servers;


public class shoppingCart {

    private Reservation itemsInCart;						//Reservation Date
    private int totalItem=0;								//total items in cart
    private double totalPrice=0;							//total price of items in cart

    public shoppingCart() {

        itemsInCart= new Reservation();
    }
    //This method add item in cart, increases total item count in cart and total price of cart
    //returns total item in cart so that client page can show updated item number in cart
    public int addToCart(Reservation itemToCart){

        //if user cart is not empty, search item set received:
        //	if there is any item in set (with unique itemID) which already in user cart, return with a message stating you cannot add more items
        if(totalItem!=0)
        {
            System.out.println("You can only make one reservation!");
            return 0;
        }
        //if user cart is empty take the first item from list and add to cart
        itemsInCart.setSeatNumber((itemToCart.getSeatNumber()));
        totalPrice = itemToCart.getSeatPrice();
        totalItem = 1;
        return totalItem;
    }
    //This method removes item from cart which matches(item type,item make,item model) tuple and decreases item count and total price
    //receives (item type,item make,item model) user want to remove
    //returns total item in cart after removal
    public int removeFromCart(String SeatNumber,String FlightNumber)
    {
        //if cart empty just for assurance set item count and price to 0
        if(totalItem==0)
        {
            System.out.println("Cart is empty!");
            totalPrice=0;
            return 0;
        }//else get the matching itemID of the item from cart and remove

        if((itemsInCart.getSeatNumber().equals(SeatNumber)) &&
                (itemsInCart.getFlightNumber().equals(FlightNumber)))
        {
            itemsInCart=null;
            totalItem = 0;
            totalPrice = 0;
        }

        return totalItem;
    }

    //after buying all items the counter is reset to zero
    public int resetReservation(){

        if(itemsInCart!=null){
            itemsInCart=null;
            totalItem = 0;
            totalPrice = 0;
        }
        return totalItem;
    }

    //*This method will return all the items in cart in below format*/
    //<cart>
    //	{<type>  XXXXXX </type><make>  XXXXXX </make><price> XXXXXX </price><model> XXXXXX </model><id>    XXXXXX </id></item>}*
    //	 <totalcost>XXXXXX.X</totalcost><totalitem>X</totalitem>
    //</cart>
    //Note: if cart empty -> <cart><totalcost>0</totalcost><totalitem>0</totalitem></cart>
    public String viewCart(){
        String viewCartResult="";
        String SeatNumber="";
        String SeatType="";
        String SeatPrice;
        String FlightNumber="";
        //String SeatMealType="";

        if(itemsInCart!=null)
        {
            SeatNumber ="	<SeatNumber> "+itemsInCart.getSeatNumber()+" <SeatNumber>";
            SeatType ="		<SeatType> "+itemsInCart.getSeatType()+" </SeatType>";
            SeatPrice ="	<SeatPrice>"+ itemsInCart.getSeatPrice()+ "</SeatPrice>";
            FlightNumber ="	<FlightNumber> "+itemsInCart.getFlightNumber()+" </FlightNumber>";
            //SeatMealType ="		<SeatMealType> "+itemsInCart.getSeatMealType()+" </SeatMealType>";
            viewCartResult= "<cart>"+ SeatNumber + SeatType + SeatPrice + FlightNumber +"</cart>";
        }
        else
            viewCartResult= "<totalcost>0</totalcost><totalitem>0</totalitem></cart>";

        return viewCartResult;
    }
    //getters
    public int gettotalItem()
    {
        return this.totalItem;
    }

    public double gettotaPrice()
    {
        return this.totalPrice;
    }
    public Reservation getitemsInCart()
    {
        return this.itemsInCart;
    }

}
