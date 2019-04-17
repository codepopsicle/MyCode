package servers;

//similar to Item

public class Reservation {

    private String SeatNumber;
    private String SeatType;
    private double SeatPrice;
    private String FlightNumber;

    public Reservation(){}

    public Reservation(String seatnumber,String type,double price,String flight) {
        setSeatNumber(seatnumber);
        setSeatType(type);
        setSeatPrice(price);
        setFlightNumber(flight);
    }

    public String getSeatNumber() {
        return SeatNumber;
    }

    public void setSeatNumber(String seatNumber) {
        SeatNumber = seatNumber;
    }

    /**
     * @return the seatType
     */
    public String getSeatType() {
        return SeatType;
    }

    /**
     * @param seatType the seatType to set
     */
    public void setSeatType(String seatType) {
        SeatType = seatType;
    }

    /**
     * @return the seatPrice
     */
    public double getSeatPrice() {
        return SeatPrice;
    }

    /**
     * @param seatPrice the seatPrice to set
     */
    public void setSeatPrice(double seatPrice) {
        SeatPrice = seatPrice;
    }

    /**
     * @return the flightNumber
     */
    public String getFlightNumber() {
        return FlightNumber;
    }

    /**
     * @param flightNumber the flightNumber to set
     */
    public void setFlightNumber(String flightNumber) {
        FlightNumber = flightNumber;
    }


    public boolean isEmpty(Object obj)
    {
        if(obj==null)
            return true;
        return false;
    }


}
