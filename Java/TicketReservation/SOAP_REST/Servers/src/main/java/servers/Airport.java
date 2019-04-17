/**
 *
 */
package servers;

import java.util.HashMap;
import java.util.Map;
import java.util.TreeMap;
//This item represents item object
public class Airport {

    private Reservation newitem1,newitem2, newitem3,newitem4,newitem5,newitem6,newitem7,newitem8,newitem9,newitem10,newitem11,newitem12,
            newitem13,newitem14,newitem15,newitem16,newitem17,newitem18,newitem19,newitem20,newitem21,newitem22,newitem23,newitem24,newitem25,newitem26,
            newitem27,newitem28,newitem29,newitem30,newitem31,newitem32,newitem33,newitem34,newitem35,newitem36,newitem37,newitem38,newitem39,newitem40,
            newitem41,newitem42,newitem43,newitem44,newitem45,newitem46,newitem47,newitem48,newitem49,newitem50,newitem51,newitem52,newitem53,newitem54,
            newitem55,newitem56,newitem100,newitem101,newitem102,newitem103,newitem104,newitem105,newitem106,newitem107,newitem108,newitem109,newitem110,newitem111,
            newitem112,newitem113,newitem114,newitem115,newitem116,newitem117,newitem118,newitem119,newitem120,newitem121,newitem122,newitem123,newitem124,
            newitem125,newitem126,newitem127,newitem128,newitem129,newitem130,newitem131,newitem132,newitem133,newitem134,newitem135,newitem136,newitem137,
            newitem200,newitem201,newitem202,newitem203,newitem204,newitem205,newitem206,newitem207,newitem208,newitem209,newitem210,newitem211,
            newitem212,newitem213,newitem214,newitem215,newitem216,newitem217,newitem218,newitem219,newitem220,newitem221;

    private Reservation newitem_1,newitem_2, newitem_3,newitem_4,newitem_5,newitem_6,newitem_7,newitem_8,newitem_9,newitem_10,newitem_11,newitem_12,
            newitem_13,newitem_14,newitem_15,newitem_16,newitem_17,newitem_18,newitem_19,newitem_20,newitem_21,newitem_22,newitem_23,newitem_24,newitem_25,newitem_26,
            newitem_27,newitem_28,newitem_29,newitem_30,newitem_31,newitem_32,newitem_33,newitem_34,newitem_35,newitem_36,newitem_37,newitem_38,newitem_39,newitem_40,
            newitem_41,newitem_42,newitem_43,newitem_44,newitem_45,newitem_46,newitem_47,newitem_48,newitem_49,newitem_50,newitem_51,newitem_52,newitem_53,newitem_54,
            newitem_55,newitem_56,newitem_100,newitem_101,newitem_102,newitem_103,newitem_104,newitem_105,newitem_106,newitem_107,newitem_108,newitem_109,newitem_110,newitem_111,
            newitem_112,newitem_113,newitem_114,newitem_115,newitem_116,newitem_117,newitem_118,newitem_119,newitem_120,newitem_121,newitem_122,newitem_123,newitem_124,
            newitem_125,newitem_126,newitem_127,newitem_128,newitem_129,newitem_130,newitem_131,newitem_132,newitem_133,newitem_134,newitem_135,newitem_136,newitem_137,
            newitem_200,newitem_201,newitem_202,newitem_203,newitem_204,newitem_205,newitem_206,newitem_207,newitem_208,newitem_209,newitem_210,newitem_211,
            newitem_212,newitem_213,newitem_214,newitem_215,newitem_216,newitem_217,newitem_218,newitem_219,newitem_220,newitem_221;

    private Reservation newitem__1,newitem__2, newitem__3,newitem__4,newitem__5,newitem__6,newitem__7,newitem__8,newitem__9,newitem__10,newitem__11,newitem__12,
            newitem__13,newitem__14,newitem__15,newitem__16,newitem__17,newitem__18,newitem__19,newitem__20,newitem__21,newitem__22,newitem__23,newitem__24,newitem__25,newitem__26,
            newitem__27,newitem__28,newitem__29,newitem__30,newitem__31,newitem__32,newitem__33,newitem__34,newitem__35,newitem__36,newitem__37,newitem__38,newitem__39,newitem__40,
            newitem__41,newitem__42,newitem__43,newitem__44,newitem__45,newitem__46,newitem__47,newitem__48,newitem__49,newitem__50,newitem__51,newitem__52,newitem__53,newitem__54,
            newitem__55,newitem__56,newitem__100,newitem__101,newitem__102,newitem__103,newitem__104,newitem__105,newitem__106,newitem__107,newitem__108,newitem__109,newitem__110,newitem__111,
            newitem__112,newitem__113,newitem__114,newitem__115,newitem__116,newitem__117,newitem__118,newitem__119,newitem__120,newitem__121,newitem__122,newitem__123,newitem__124,
            newitem__125,newitem__126,newitem__127,newitem__128,newitem__129,newitem__130,newitem__131,newitem__132,newitem__133,newitem__134,newitem__135,newitem__136,newitem__137,
            newitem__200,newitem__201,newitem__202,newitem__203,newitem__204,newitem__205,newitem__206,newitem__207,newitem__208,newitem__209,newitem__210,newitem__211,
            newitem__212,newitem__213,newitem__214,newitem__215,newitem__216,newitem__217,newitem__218,newitem__219,newitem__220,newitem__221;


    //maps to hold 3 types of every flight for the day
    private static Map<String,Reservation> AirBus319List;
    private static Map<String,Reservation> Boeing737List;
    private static Map<String,Reservation> Embraer170List;

    private static Map<String,Reservation> AirBus320List;
    private static Map<String,Reservation> Boeing738List;
    private static Map<String,Reservation> Embraer171List;

    private static Map<String,Reservation> AirBus321List;
    private static Map<String,Reservation> Boeing739List;
    private static Map<String,Reservation> Embraer172List;

    public Airport() {

        AirBus319List  = new HashMap<String,Reservation>();
        Boeing737List  = new HashMap<String,Reservation>();
        Embraer170List  = new HashMap<String,Reservation>();

        AirBus320List  = new HashMap<String,Reservation>();
        Boeing738List  = new HashMap<String,Reservation>();
        Embraer171List  = new HashMap<String,Reservation>();

        AirBus321List  = new HashMap<String,Reservation>();
        Boeing739List  = new HashMap<String,Reservation>();
        Embraer172List  = new HashMap<String,Reservation>();
    }

    //This method marks a Reservation in the respective airplane,
    //if item is not in Airplane returns "Reservation done by someone else" if item sucessfully removed returns "Reservation made in the Airplane"
    private String makeReservation(String flightNumber,String seatNumber){
        String response="";
        if(flightNumber.equals("Boeing737"))
        {
            if(Boeing737List.containsKey(seatNumber))
            {
                Boeing737List.remove(seatNumber);
                response="Reservation made in the Airplane Boeing - 737";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Airbus319"))
        {
            if(AirBus319List.containsKey(seatNumber))
            {
                AirBus319List.remove(seatNumber);
                response="Reservation made in the Airbus 319";
            }
            else {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Embraer170"))
        {
            if(Embraer170List.containsKey(seatNumber))
            {
                Embraer170List.remove(seatNumber);
                response="Reservation made in flight Embraer 170";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Boeing738"))
        {
            if(Boeing738List.containsKey(seatNumber))
            {
                Boeing738List.remove(seatNumber);
                response="Reservation made in the Airplane Boeing - 738";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Airbus321"))
        {
            if(AirBus321List.containsKey(seatNumber))
            {
                AirBus321List.remove(seatNumber);
                response="Reservation made in the Airbus 321";
            }
            else {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Embraer171"))
        {
            if(Embraer171List.containsKey(seatNumber))
            {
                Embraer171List.remove(seatNumber);
                response="Reservation made in flight Embraer 171";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Boeing739"))
        {
            if(Boeing739List.containsKey(seatNumber))
            {
                Boeing739List.remove(seatNumber);
                response="Reservation made in the Airplane Boeing - 739";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Airbus321"))
        {
            if(AirBus321List.containsKey(seatNumber))
            {
                AirBus321List.remove(seatNumber);
                response="Reservation made in the Airbus 321";
            }
            else {
                response="Reservation done by someone else!";
            }
        }
        else if(flightNumber.equals("Embraer172"))
        {
            if(Embraer172List.containsKey(seatNumber))
            {
                Embraer172List.remove(seatNumber);
                response="Reservation made in flight Embraer 172";
            }
            else
            {
                response="Reservation done by someone else!";
            }
        }

        return response;
    }

    //This method checks if item is in store, if yes remove from store and mark it sold
    //if item can be sold returns "Reservation made in the flight XXXX" else returns "Reservation done by someone else!"
    public synchronized String sellReservation(String flightNumber, String seatNumber)
    {
        String sellResponse="Reservation not in Airport";
        if(flightNumber.equals("Airbus319"))
        {					//search Airbus 319 list if list not empty and call removeReservation to remove from store
            if(!AirBus319List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : AirBus319List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Airbus319",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Boeing737"))
        {					//search the list of seats in Boeing and if list not empty and call removeReservation to remove from store
            if(!Boeing737List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Boeing737List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Boeing737",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Embraer170"))
        {					//search the list of seats in Embraer and if list not empty and call removeReservation to remove from store
            if(!Embraer170List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Embraer170List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Embraer170",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Airbus320"))
        {					//search Airbus 320 list if list not empty and call removeReservation to remove from store
            if(!AirBus320List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : AirBus320List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Airbus320",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Boeing738"))
        {					//search the list of seats in Boeing and if list not empty and call removeReservation to remove from store
            if(!Boeing738List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Boeing738List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Boeing738",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Embraer171"))
        {					//search the list of seats in Embraer and if list not empty and call removeReservation to remove from store
            if(!Embraer171List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Embraer171List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Embraer171",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Airbus321"))
        {					//search Airbus 321 list if list not empty and call removeReservation to remove from store
            if(!AirBus321List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : AirBus321List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Airbus321",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Boeing739"))
        {					//search the list of seats in Boeing and if list not empty and call removeReservation to remove from store
            if(!Boeing739List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Boeing739List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Boeing739",entry.getKey());
                        break;
                    }
                }
            }
        }

        else if(flightNumber.equals("Embraer172"))
        {					//search the list of seats in Embraer and if list not empty and call removeReservation to remove from store
            if(!Embraer172List.isEmpty())
            {
                for(Map.Entry<String, Reservation> entry : Embraer172List.entrySet())
                {
                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))
                    {
                        sellResponse = makeReservation("Embraer172",entry.getKey());
                        break;
                    }
                }
            }
        }
        return sellResponse;
    }
    //This method finds a tuple (item type,item make,item model) in store and returns set of items along with item ID
    //it searches corresponding item list and adds matching item in set which will be returned  else returns empty set
    public static Reservation findReservationinStore(String flightNumber,String seatNumber){

        Reservation returnItems = new Reservation();

        if(flightNumber.equals("Airbus319")){
            if(!AirBus319List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : AirBus319List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }
        else if(flightNumber.equals("Boeing737")){
            if(!Boeing737List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Boeing737List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }

        else  if(flightNumber.equals("Embraer170")){
            if(!Embraer170List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Embraer170List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }

        if(flightNumber.equals("Airbus320")){
            if(!AirBus320List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : AirBus320List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }
        else if(flightNumber.equals("Boeing738")){
            if(!Boeing738List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Boeing738List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }

        else  if(flightNumber.equals("Embraer171")){
            if(!Embraer171List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Embraer171List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }

        if(flightNumber.equals("Airbus321")){
            if(!AirBus321List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : AirBus321List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }
        else if(flightNumber.equals("Boeing739")){
            if(!Boeing739List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Boeing739List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }

        else  if(flightNumber.equals("Embraer172")){
            if(!Embraer172List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : Embraer172List.entrySet()){

                    if((entry.getValue().getFlightNumber().equals(flightNumber)) &&
                            (entry.getValue().getSeatNumber().equals(seatNumber)))	{
                        returnItems=entry.getValue();
                    }
                }
            }
        }
        return returnItems;
    }


    //This method returns list of items in store for specific type in XML format
    //if there is no item in list then returns "No Items in List"
    public String showItemList(String flightNumber){
        String Value="";
        String seatNumber="";
        String seatType="";
        String seatPrice="";


        if(flightNumber.equals("Boeing737")){

            TreeMap<String, Reservation> sortedList = new TreeMap<>(Boeing737List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Airbus319")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(AirBus319List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Embraer170")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(Embraer170List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }

        if(flightNumber.equals("Boeing738")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(Boeing738List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Airbus320")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(AirBus320List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Embraer171")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(Embraer171List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }

        if(flightNumber.equals("Boeing739")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(Boeing739List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Airbus321")){
            if(!AirBus321List.isEmpty()){
                for(Map.Entry<String, Reservation> entry : AirBus321List.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        else if (flightNumber.equals("Embraer172")){
            TreeMap<String, Reservation> sortedList = new TreeMap<>(Embraer172List);
            if(!sortedList.isEmpty()){
                for(Map.Entry<String, Reservation> entry : sortedList.entrySet()){

                    seatNumber =entry.getValue().getSeatNumber()+",";
                    seatPrice =entry.getValue().getSeatPrice()+",";
                    seatType =entry.getValue().getSeatType()+",;";
                    Value= Value +  seatNumber + seatPrice + seatType;
                }
            }
            else{
                Value= "No Items in List";
            }
        }
        return Value;
    }


    //This method creates items
    public void createReservation(){

        //Boeing 737 Map
        newitem1 = new Reservation("A01","United-First",50000,"Boeing737");
        newitem2 = new Reservation("B01","United-First",50000,"Boeing737");
        newitem3 = new Reservation("E01","United-First",50000,"Boeing737");
        newitem4 = new Reservation("F01","United-First",50000,"Boeing737");
        newitem5 = new Reservation("A02","United-First",50000,"Boeing737");
        newitem6 = new Reservation("B02","United-First",50000,"Boeing737");
        newitem7 = new Reservation("E02","United-First",50000,"Boeing737");
        newitem8 = new Reservation("F02","United-First",50000,"Boeing737");
        newitem9 = new Reservation("A03","United-First",50000,"Boeing737");
        newitem10 = new Reservation("B03","United-First",50000,"Boeing737");
        newitem11 = new Reservation("E03","United-First",50000,"Boeing737");
        newitem12 = new Reservation("F03","United-First",50000,"Boeing737");
        newitem13 = new Reservation("A04","United-First",50000,"Boeing737");
        newitem14 = new Reservation("B04","United-First",50000,"Boeing737");
        newitem15 = new Reservation("E04","United-First",50000,"Boeing737");
        newitem16 = new Reservation("F04","United-First",50000,"Boeing737");
        newitem17 = new Reservation("A05","United-First",50000,"Boeing737");
        newitem18 = new Reservation("B05","United-First",50000,"Boeing737");
        newitem19 = new Reservation("E05","United-First",50000,"Boeing737");
        newitem20 = new Reservation("F05","United-First",50000,"Boeing737");
        newitem21 = new Reservation("F07","Economy Plus",30000,"Boeing737");
        newitem22 = new Reservation("E07","Economy Plus",30000,"Boeing737");
        newitem23 = new Reservation("D07","Economy Plus",30000,"Boeing737");
        newitem24 = new Reservation("A07","Economy Plus",30000,"Boeing737");
        newitem25 = new Reservation("B07","Economy Plus",30000,"Boeing737");
        newitem26 = new Reservation("C07","Economy Plus",30000,"Boeing737");
        newitem27 = new Reservation("F08","Economy Plus",30000,"Boeing737");
        newitem28 = new Reservation("E08","Economy Plus",30000,"Boeing737");
        newitem29 = new Reservation("D08","Economy Plus",30000,"Boeing737");
        newitem30 = new Reservation("A08","Economy Plus",30000,"Boeing737");
        newitem31 = new Reservation("B08","Economy Plus",30000,"Boeing737");
        newitem32 = new Reservation("C08","Economy Plus",30000,"Boeing737");
        //Emergency Seats only for customers abover 40 years of age
        newitem45 = new Reservation("F20","Economy Plus",30000,"Boeing737");
        newitem46 = new Reservation("E20","Economy Plus",30000,"Boeing737");
        newitem47 = new Reservation("D20","Economy Plus",30000,"Boeing737");
        newitem48 = new Reservation("A20","Economy Plus",30000,"Boeing737");
        newitem49 = new Reservation("B20","Economy Plus",30000,"Boeing737");
        newitem50 = new Reservation("C20","Economy Plus",30000,"Boeing737");
        newitem51 = new Reservation("F21","Economy Plus",30000,"Boeing737");
        newitem52 = new Reservation("E21","Economy Plus",30000,"Boeing737");
        newitem53 = new Reservation("D21","Economy Plus",30000,"Boeing737");
        newitem54 = new Reservation("A21","Economy Plus",30000,"Boeing737");
        newitem55 = new Reservation("B21","Economy Plus",30000,"Boeing737");
        newitem56 = new Reservation("C21","Economy Plus",30000,"Boeing737");
        //Economy seats
        newitem33 = new Reservation("F14","Economy",20000,"Boeing737");
        newitem34 = new Reservation("E14","Economy",20000,"Boeing737");
        newitem35 = new Reservation("D14","Economy",20000,"Boeing737");
        newitem36 = new Reservation("A14","Economy",20000,"Boeing737");
        newitem37 = new Reservation("B14","Economy",20000,"Boeing737");
        newitem38 = new Reservation("C14","Economy",20000,"Boeing737");
        newitem39 = new Reservation("F15","Economy",20000,"Boeing737");
        newitem40 = new Reservation("E15","Economy",20000,"Boeing737");
        newitem41 = new Reservation("D15","Economy",20000,"Boeing737");
        newitem42 = new Reservation("A15","Economy",20000,"Boeing737");
        newitem43 = new Reservation("B15","Economy",20000,"Boeing737");
        newitem44 = new Reservation("C15","Economy",20000,"Boeing737");

        //Boeing 738 Map
        newitem_1 = new Reservation("A01","United-First",50000,"Boeing738");
        newitem_2 = new Reservation("B01","United-First",50000,"Boeing738");
        newitem_3 = new Reservation("E01","United-First",50000,"Boeing738");
        newitem_4 = new Reservation("F01","United-First",50000,"Boeing738");
        newitem_5 = new Reservation("A02","United-First",50000,"Boeing738");
        newitem_6 = new Reservation("B02","United-First",50000,"Boeing738");
        newitem_7 = new Reservation("E02","United-First",50000,"Boeing738");
        newitem_8 = new Reservation("F02","United-First",50000,"Boeing738");
        newitem_9 = new Reservation("A03","United-First",50000,"Boeing738");
        newitem_10 = new Reservation("B03","United-First",50000,"Boeing738");
        newitem_11 = new Reservation("E03","United-First",50000,"Boeing738");
        newitem_12 = new Reservation("F03","United-First",50000,"Boeing738");
        newitem_13 = new Reservation("A04","United-First",50000,"Boeing738");
        newitem_14 = new Reservation("B04","United-First",50000,"Boeing738");
        newitem_15 = new Reservation("E04","United-First",50000,"Boeing738");
        newitem_16 = new Reservation("F04","United-First",50000,"Boeing738");
        newitem_17 = new Reservation("A05","United-First",50000,"Boeing738");
        newitem_18 = new Reservation("B05","United-First",50000,"Boeing738");
        newitem_19 = new Reservation("E05","United-First",50000,"Boeing738");
        newitem_20 = new Reservation("F05","United-First",50000,"Boeing738");
        newitem_21 = new Reservation("F07","Economy Plus",30000,"Boeing738");
        newitem_22 = new Reservation("E07","Economy Plus",30000,"Boeing738");
        newitem_23 = new Reservation("D07","Economy Plus",30000,"Boeing738");
        newitem_24 = new Reservation("A07","Economy Plus",30000,"Boeing738");
        newitem_25 = new Reservation("B07","Economy Plus",30000,"Boeing738");
        newitem_26 = new Reservation("C07","Economy Plus",30000,"Boeing738");
        newitem_27 = new Reservation("F08","Economy Plus",30000,"Boeing738");
        newitem_28 = new Reservation("E08","Economy Plus",30000,"Boeing738");
        newitem_29 = new Reservation("D08","Economy Plus",30000,"Boeing738");
        newitem_30 = new Reservation("A08","Economy Plus",30000,"Boeing738");
        newitem_31 = new Reservation("B08","Economy Plus",30000,"Boeing738");
        newitem_32 = new Reservation("C08","Economy Plus",30000,"Boeing738");
        //Emergency Seats only for customers abover 40 years of age
        newitem_45 = new Reservation("F20","Economy Plus",30000,"Boeing738");
        newitem_46 = new Reservation("E20","Economy Plus",30000,"Boeing738");
        newitem_47 = new Reservation("D20","Economy Plus",30000,"Boeing738");
        newitem_48 = new Reservation("A20","Economy Plus",30000,"Boeing738");
        newitem_49 = new Reservation("B20","Economy Plus",30000,"Boeing738");
        newitem_50 = new Reservation("C20","Economy Plus",30000,"Boeing738");
        newitem_51 = new Reservation("F21","Economy Plus",30000,"Boeing738");
        newitem_52 = new Reservation("E21","Economy Plus",30000,"Boeing738");
        newitem_53 = new Reservation("D21","Economy Plus",30000,"Boeing738");
        newitem_54 = new Reservation("A21","Economy Plus",30000,"Boeing738");
        newitem_55 = new Reservation("B21","Economy Plus",30000,"Boeing738");
        newitem_56 = new Reservation("C21","Economy Plus",30000,"Boeing738");
        //Economy seats
        newitem_33 = new Reservation("F14","Economy",20000,"Boeing738");
        newitem_34 = new Reservation("E14","Economy",20000,"Boeing738");
        newitem_35 = new Reservation("D14","Economy",20000,"Boeing738");
        newitem_36 = new Reservation("A14","Economy",20000,"Boeing738");
        newitem_37 = new Reservation("B14","Economy",20000,"Boeing738");
        newitem_38 = new Reservation("C14","Economy",20000,"Boeing738");
        newitem_39 = new Reservation("F15","Economy",20000,"Boeing738");
        newitem_40 = new Reservation("E15","Economy",20000,"Boeing738");
        newitem_41 = new Reservation("D15","Economy",20000,"Boeing738");
        newitem_42 = new Reservation("A15","Economy",20000,"Boeing738");
        newitem_43 = new Reservation("B15","Economy",20000,"Boeing738");
        newitem_44 = new Reservation("C15","Economy",20000,"Boeing738");

        //Boeing 739 Map
        newitem__1 = new Reservation("A01","United-First",50000,"Boeing739");
        newitem__2 = new Reservation("B01","United-First",50000,"Boeing739");
        newitem__3 = new Reservation("E01","United-First",50000,"Boeing739");
        newitem__4 = new Reservation("F01","United-First",50000,"Boeing739");
        newitem__5 = new Reservation("A02","United-First",50000,"Boeing739");
        newitem__6 = new Reservation("B02","United-First",50000,"Boeing739");
        newitem__7 = new Reservation("E02","United-First",50000,"Boeing739");
        newitem__8 = new Reservation("F02","United-First",50000,"Boeing739");
        newitem__9 = new Reservation("A03","United-First",50000,"Boeing739");
        newitem__10 = new Reservation("B03","United-First",50000,"Boeing739");
        newitem__11 = new Reservation("E03","United-First",50000,"Boeing739");
        newitem__12 = new Reservation("F03","United-First",50000,"Boeing739");
        newitem__13 = new Reservation("A04","United-First",50000,"Boeing739");
        newitem__14 = new Reservation("B04","United-First",50000,"Boeing739");
        newitem__15 = new Reservation("E04","United-First",50000,"Boeing739");
        newitem__16 = new Reservation("F04","United-First",50000,"Boeing739");
        newitem__17 = new Reservation("A05","United-First",50000,"Boeing739");
        newitem__18 = new Reservation("B05","United-First",50000,"Boeing739");
        newitem__19 = new Reservation("E05","United-First",50000,"Boeing739");
        newitem__20 = new Reservation("F05","United-First",50000,"Boeing739");
        newitem__21 = new Reservation("F07","Economy Plus",30000,"Boeing739");
        newitem__22 = new Reservation("E07","Economy Plus",30000,"Boeing739");
        newitem__23 = new Reservation("D07","Economy Plus",30000,"Boeing739");
        newitem__24 = new Reservation("A07","Economy Plus",30000,"Boeing739");
        newitem__25 = new Reservation("B07","Economy Plus",30000,"Boeing739");
        newitem__26 = new Reservation("C07","Economy Plus",30000,"Boeing739");
        newitem__27 = new Reservation("F08","Economy Plus",30000,"Boeing739");
        newitem__28 = new Reservation("E08","Economy Plus",30000,"Boeing739");
        newitem__29 = new Reservation("D08","Economy Plus",30000,"Boeing739");
        newitem__30 = new Reservation("A08","Economy Plus",30000,"Boeing739");
        newitem__31 = new Reservation("B08","Economy Plus",30000,"Boeing739");
        newitem__32 = new Reservation("C08","Economy Plus",30000,"Boeing739");
        //Emergency Seats only for customers abover 40 years of age
        newitem__45 = new Reservation("F20","Economy Plus",30000,"Boeing739");
        newitem__46 = new Reservation("E20","Economy Plus",30000,"Boeing739");
        newitem__47 = new Reservation("D20","Economy Plus",30000,"Boeing739");
        newitem__48 = new Reservation("A20","Economy Plus",30000,"Boeing739");
        newitem__49 = new Reservation("B20","Economy Plus",30000,"Boeing739");
        newitem__50 = new Reservation("C20","Economy Plus",30000,"Boeing739");
        newitem__51 = new Reservation("F21","Economy Plus",30000,"Boeing739");
        newitem__52 = new Reservation("E21","Economy Plus",30000,"Boeing739");
        newitem__53 = new Reservation("D21","Economy Plus",30000,"Boeing739");
        newitem__54 = new Reservation("A21","Economy Plus",30000,"Boeing739");
        newitem__55 = new Reservation("B21","Economy Plus",30000,"Boeing739");
        newitem__56 = new Reservation("C21","Economy Plus",30000,"Boeing739");
        //Economy seats
        newitem__33 = new Reservation("F14","Economy",20000,"Boeing739");
        newitem__34 = new Reservation("E14","Economy",20000,"Boeing739");
        newitem__35 = new Reservation("D14","Economy",20000,"Boeing739");
        newitem__36 = new Reservation("A14","Economy",20000,"Boeing739");
        newitem__37 = new Reservation("B14","Economy",20000,"Boeing739");
        newitem__38 = new Reservation("C14","Economy",20000,"Boeing739");
        newitem__39 = new Reservation("F15","Economy",20000,"Boeing739");
        newitem__40 = new Reservation("E15","Economy",20000,"Boeing739");
        newitem__41 = new Reservation("D15","Economy",20000,"Boeing739");
        newitem__42 = new Reservation("A15","Economy",20000,"Boeing739");
        newitem__43 = new Reservation("B15","Economy",20000,"Boeing739");
        newitem__44 = new Reservation("C15","Economy",20000,"Boeing739");


        //Airbus 319 Map
        newitem100 = new Reservation("A01","United-First",55000,"Airbus319");
        newitem101 = new Reservation("B01","United-First",55000,"Airbus319");
        newitem102= new Reservation("E01","United-First",55000,"Airbus319");
        newitem103 = new Reservation("F01","United-First",55000,"Airbus319");
        newitem104 = new Reservation("A02","United-First",55000,"Airbus319");
        newitem105 = new Reservation("B02","United-First",55000,"Airbus319");
        newitem106= new Reservation("E02","United-First",55000,"Airbus319");
        newitem107 = new Reservation("F02","United-First",55000,"Airbus319");
        //Economy Plus
        newitem108 = new Reservation("A07","Economy Plus",45000,"Airbus319");
        newitem109 = new Reservation("B07","Economy Plus",45000,"Airbus319");
        newitem110= new Reservation("C07","Economy Plus",45000,"Airbus319");
        newitem111 = new Reservation("D07","Economy Plus",45000,"Airbus319");
        newitem112= new Reservation("E07","Economy Plus",45000,"Airbus319");
        newitem113 = new Reservation("F07","Economy Plus",45000,"Airbus319");
        newitem114 = new Reservation("A08","Economy Plus",45000,"Airbus319");
        newitem115 = new Reservation("B08","Economy Plus",45000,"Airbus319");
        newitem116= new Reservation("C08","Economy Plus",45000,"Airbus319");
        newitem117 = new Reservation("D08","Economy Plus",45000,"Airbus319");
        newitem118= new Reservation("E08","Economy Plus",45000,"Airbus319");
        newitem119 = new Reservation("F08","Economy Plus",45000,"Airbus319");
        //Emergency Seats only for customers with over 4- years of age
        newitem120 = new Reservation("A21","Economy Plus",45000,"Airbus319");
        newitem121 = new Reservation("B21","Economy Plus",45000,"Airbus319");
        newitem122= new Reservation("C21","Economy Plus",45000,"Airbus319");
        newitem123 = new Reservation("D21","Economy Plus",45000,"Airbus319");
        newitem124= new Reservation("E21","Economy Plus",45000,"Airbus319");
        newitem125 = new Reservation("F21","Economy Plus",45000,"Airbus319");
        //Economy Seats
        newitem126 = new Reservation("A22","Economy",35000,"Airbus319");
        newitem127 = new Reservation("B22","Economy",35000,"Airbus319");
        newitem128= new Reservation("C22","Economy",35000,"Airbus319");
        newitem129 = new Reservation("D22","Economy",35000,"Airbus319");
        newitem130= new Reservation("E22","Economy",35000,"Airbus319");
        newitem131 = new Reservation("F22","Economy",35000,"Airbus319");
        newitem132 = new Reservation("A23","Economy",35000,"Airbus319");
        newitem133 = new Reservation("B23","Economy",35000,"Airbus319");
        newitem134= new Reservation("C23","Economy",35000,"Airbus319");
        newitem135 = new Reservation("D23","Economy",35000,"Airbus319");
        newitem136= new Reservation("E23","Economy",35000,"Airbus319");
        newitem137 = new Reservation("F23","Economy",35000,"Airbus319");


        //Airbus 320 Map
        newitem_100 = new Reservation("A01","United-First",55000,"Airbus320");
        newitem_101 = new Reservation("B01","United-First",55000,"Airbus320");
        newitem_102= new Reservation("E01","United-First",55000,"Airbus320");
        newitem_103 = new Reservation("F01","United-First",55000,"Airbus320");
        newitem_104 = new Reservation("A02","United-First",55000,"Airbus320");
        newitem_105 = new Reservation("B02","United-First",55000,"Airbus320");
        newitem_106= new Reservation("E02","United-First",55000,"Airbus320");
        newitem_107 = new Reservation("F02","United-First",55000,"Airbus320");
        //Economy Plus
        newitem_108 = new Reservation("A07","Economy Plus",45000,"Airbus320");
        newitem_109 = new Reservation("B07","Economy Plus",45000,"Airbus320");
        newitem_110= new Reservation("C07","Economy Plus",45000,"Airbus320");
        newitem_111 = new Reservation("D07","Economy Plus",45000,"Airbus320");
        newitem_112= new Reservation("E07","Economy Plus",45000,"Airbus320");
        newitem_113 = new Reservation("F07","Economy Plus",45000,"Airbus320");
        newitem_114 = new Reservation("A08","Economy Plus",45000,"Airbus320");
        newitem_115 = new Reservation("B08","Economy Plus",45000,"Airbus320");
        newitem_116= new Reservation("C08","Economy Plus",45000,"Airbus320");
        newitem_117 = new Reservation("D08","Economy Plus",45000,"Airbus320");
        newitem_118= new Reservation("E08","Economy Plus",45000,"Airbus320");
        newitem_119 = new Reservation("F08","Economy Plus",45000,"Airbus320");
        //Emergency Seats only for customers with over 4- years of age
        newitem_120 = new Reservation("A21","Economy Plus",45000,"Airbus320");
        newitem_121 = new Reservation("B21","Economy Plus",45000,"Airbus320");
        newitem_122= new Reservation("C21","Economy Plus",45000,"Airbus320");
        newitem_123 = new Reservation("D21","Economy Plus",45000,"Airbus320");
        newitem_124= new Reservation("E21","Economy Plus",45000,"Airbus320");
        newitem_125 = new Reservation("F21","Economy Plus",45000,"Airbus320");
        //Economy Seats
        newitem_126 = new Reservation("A22","Economy",35000,"Airbus320");
        newitem_127 = new Reservation("B22","Economy",35000,"Airbus320");
        newitem_128= new Reservation("C22","Economy",35000,"Airbus320");
        newitem_129 = new Reservation("D22","Economy",35000,"Airbus320");
        newitem_130= new Reservation("E22","Economy",35000,"Airbus320");
        newitem_131 = new Reservation("F22","Economy",35000,"Airbus320");
        newitem_132 = new Reservation("A23","Economy",35000,"Airbus320");
        newitem_133 = new Reservation("B23","Economy",35000,"Airbus320");
        newitem_134= new Reservation("C23","Economy",35000,"Airbus320");
        newitem_135 = new Reservation("D23","Economy",35000,"Airbus320");
        newitem_136= new Reservation("E23","Economy",35000,"Airbus320");
        newitem_137 = new Reservation("F23","Economy",35000,"Airbus320");

        //Airbus 321 Map
        newitem__100 = new Reservation("A01","United-First",55000,"Airbus321");
        newitem__101 = new Reservation("B01","United-First",55000,"Airbus321");
        newitem__102= new Reservation("E01","United-First",55000,"Airbus321");
        newitem__103 = new Reservation("F01","United-First",55000,"Airbus321");
        newitem__104 = new Reservation("A02","United-First",55000,"Airbus321");
        newitem__105 = new Reservation("B02","United-First",55000,"Airbus321");
        newitem__106= new Reservation("E02","United-First",55000,"Airbus321");
        newitem__107 = new Reservation("F02","United-First",55000,"Airbus321");
        //Economy Plus
        newitem__108 = new Reservation("A07","Economy Plus",45000,"Airbus321");
        newitem__109 = new Reservation("B07","Economy Plus",45000,"Airbus321");
        newitem__110= new Reservation("C07","Economy Plus",45000,"Airbus321");
        newitem__111 = new Reservation("D07","Economy Plus",45000,"Airbus321");
        newitem__112= new Reservation("E07","Economy Plus",45000,"Airbus321");
        newitem__113 = new Reservation("F07","Economy Plus",45000,"Airbus321");
        newitem__114 = new Reservation("A08","Economy Plus",45000,"Airbus321");
        newitem__115 = new Reservation("B08","Economy Plus",45000,"Airbus321");
        newitem__116= new Reservation("C08","Economy Plus",45000,"Airbus321");
        newitem__117 = new Reservation("D08","Economy Plus",45000,"Airbus321");
        newitem__118= new Reservation("E08","Economy Plus",45000,"Airbus321");
        newitem__119 = new Reservation("F08","Economy Plus",45000,"Airbus321");
        //Emergency Seats only for customers with over 4- years of age
        newitem__120 = new Reservation("A21","Economy Plus",45000,"Airbus321");
        newitem__121 = new Reservation("B21","Economy Plus",45000,"Airbus321");
        newitem__122= new Reservation("C21","Economy Plus",45000,"Airbus321");
        newitem__123 = new Reservation("D21","Economy Plus",45000,"Airbus321");
        newitem__124= new Reservation("E21","Economy Plus",45000,"Airbus321");
        newitem__125 = new Reservation("F21","Economy Plus",45000,"Airbus321");
        //Economy Seats
        newitem__126 = new Reservation("A22","Economy",35000,"Airbus321");
        newitem__127 = new Reservation("B22","Economy",35000,"Airbus321");
        newitem__128= new Reservation("C22","Economy",35000,"Airbus321");
        newitem__129 = new Reservation("D22","Economy",35000,"Airbus321");
        newitem__130= new Reservation("E22","Economy",35000,"Airbus321");
        newitem__131 = new Reservation("F22","Economy",35000,"Airbus321");
        newitem__132 = new Reservation("A23","Economy",35000,"Airbus321");
        newitem__133 = new Reservation("B23","Economy",35000,"Airbus321");
        newitem__134= new Reservation("C23","Economy",35000,"Airbus321");
        newitem__135 = new Reservation("D23","Economy",35000,"Airbus321");
        newitem__136= new Reservation("E23","Economy",35000,"Airbus321");
        newitem__137 = new Reservation("F23","Economy",35000,"Airbus321");



        //Embraer 170 Map
        newitem200 = new Reservation("A01","United-First",55000,"Embraer170");
        newitem201 = new Reservation("C01","United-First",55000,"Embraer170");
        newitem202= new Reservation("D01","United-First",55000,"Embraer170");
        newitem203 = new Reservation("A02","United-First",55000,"Embraer170");
        newitem204 = new Reservation("C02","United-First",55000,"Embraer170");
        newitem205= new Reservation("D02","United-First",55000,"Embraer170");
        //Economy Plus Seats
        newitem206 = new Reservation("A07","Economy Plus",49000,"Embraer170");
        newitem207 = new Reservation("B07","Economy Plus",49000,"Embraer170");
        newitem208 = new Reservation("C07","Economy Plus",49000,"Embraer170");
        newitem209 = new Reservation("D07","Economy Plus",49000,"Embraer170");
        newitem210 = new Reservation("A08","Economy Plus",49000,"Embraer170");
        newitem211 = new Reservation("B08","Economy Plus",49000,"Embraer170");
        newitem212 = new Reservation("C08","Economy Plus",49000,"Embraer170");
        newitem213 = new Reservation("D08","Economy Plus",49000,"Embraer170");
        //Economy Seats
        newitem214 = new Reservation("A11","Economy ",40000,"Embraer170");
        newitem215 = new Reservation("B11","Economy ",40000,"Embraer170");
        newitem216 = new Reservation("C11","Economy ",40000,"Embraer170");
        newitem217 = new Reservation("D11","Economy ",40000,"Embraer170");
        newitem218 = new Reservation("A12","Economy ",40000,"Embraer170");
        newitem219 = new Reservation("B12","Economy ",40000,"Embraer170");
        newitem220 = new Reservation("C12","Economy ",40000,"Embraer170");
        newitem221 = new Reservation("D12","Economy ",40000,"Embraer170");

        //Embraer 171 Map
        newitem_200 = new Reservation("A01","United-First",55000,"Embraer171");
        newitem_201 = new Reservation("C01","United-First",55000,"Embraer171");
        newitem_202= new Reservation("D01","United-First",55000,"Embraer171");
        newitem_203 = new Reservation("A02","United-First",55000,"Embraer171");
        newitem_204 = new Reservation("C02","United-First",55000,"Embraer171");
        newitem_205= new Reservation("D02","United-First",55000,"Embraer171");
        //Economy Plus Seats
        newitem_206 = new Reservation("A07","Economy Plus",49000,"Embraer171");
        newitem_207 = new Reservation("B07","Economy Plus",49000,"Embraer171");
        newitem_208 = new Reservation("C07","Economy Plus",49000,"Embraer171");
        newitem_209 = new Reservation("D07","Economy Plus",49000,"Embraer171");
        newitem_210 = new Reservation("A08","Economy Plus",49000,"Embraer171");
        newitem_211 = new Reservation("B08","Economy Plus",49000,"Embraer171");
        newitem_212 = new Reservation("C08","Economy Plus",49000,"Embraer171");
        newitem_213 = new Reservation("D08","Economy Plus",49000,"Embraer171");
        //Economy Seats
        newitem_214 = new Reservation("A11","Economy ",40000,"Embraer171");
        newitem_215 = new Reservation("B11","Economy ",40000,"Embraer171");
        newitem_216 = new Reservation("C11","Economy ",40000,"Embraer171");
        newitem_217 = new Reservation("D11","Economy ",40000,"Embraer171");
        newitem_218 = new Reservation("A12","Economy ",40000,"Embraer171");
        newitem_219 = new Reservation("B12","Economy ",40000,"Embraer171");
        newitem_220 = new Reservation("C12","Economy ",40000,"Embraer171");
        newitem_221 = new Reservation("D12","Economy ",40000,"Embraer171");

        //Embraer 172 Map
        newitem__200 = new Reservation("A01","United-First",55000,"Embraer172");
        newitem__201 = new Reservation("C01","United-First",55000,"Embraer172");
        newitem__202= new Reservation("D01","United-First",55000,"Embraer172");
        newitem__203 = new Reservation("A02","United-First",55000,"Embraer172");
        newitem__204 = new Reservation("C02","United-First",55000,"Embraer172");
        newitem__205= new Reservation("D02","United-First",55000,"Embraer172");
        //Economy Plus Seats
        newitem__206 = new Reservation("A07","Economy Plus",49000,"Embraer172");
        newitem__207 = new Reservation("B07","Economy Plus",49000,"Embraer172");
        newitem__208 = new Reservation("C07","Economy Plus",49000,"Embraer172");
        newitem__209 = new Reservation("D07","Economy Plus",49000,"Embraer172");
        newitem__210 = new Reservation("A08","Economy Plus",49000,"Embraer172");
        newitem__211 = new Reservation("B08","Economy Plus",49000,"Embraer172");
        newitem__212 = new Reservation("C08","Economy Plus",49000,"Embraer172");
        newitem__213 = new Reservation("D08","Economy Plus",49000,"Embraer172");
        //Economy Seats
        newitem__214 = new Reservation("A11","Economy ",40000,"Embraer172");
        newitem__215 = new Reservation("B11","Economy ",40000,"Embraer172");
        newitem__216 = new Reservation("C11","Economy ",40000,"Embraer172");
        newitem__217 = new Reservation("D11","Economy ",40000,"Embraer172");
        newitem__218 = new Reservation("A12","Economy ",40000,"Embraer172");
        newitem__219 = new Reservation("B12","Economy ",40000,"Embraer172");
        newitem__220 = new Reservation("C12","Economy ",40000,"Embraer172");
        newitem__221 = new Reservation("D12","Economy ",40000,"Embraer172");

    }

    //This method add items to store
    public void addReservationToList(){
        Boeing737List.put(newitem1.getSeatNumber(), newitem1);
        Boeing737List.put(newitem2.getSeatNumber(), newitem2);
        Boeing737List.put(newitem3.getSeatNumber(), newitem3);
        Boeing737List.put(newitem4.getSeatNumber(), newitem4);
        Boeing737List.put(newitem5.getSeatNumber(), newitem5);
        Boeing737List.put(newitem6.getSeatNumber(), newitem6);
        Boeing737List.put(newitem7.getSeatNumber(), newitem7);
        Boeing737List.put(newitem8.getSeatNumber(), newitem8);
        Boeing737List.put(newitem9.getSeatNumber(), newitem9);
        Boeing737List.put(newitem10.getSeatNumber(), newitem10);
        Boeing737List.put(newitem11.getSeatNumber(), newitem11);
        Boeing737List.put(newitem12.getSeatNumber(), newitem12);
        Boeing737List.put(newitem13.getSeatNumber(), newitem13);
        Boeing737List.put(newitem14.getSeatNumber(), newitem14);
        Boeing737List.put(newitem15.getSeatNumber(), newitem15);
        Boeing737List.put(newitem16.getSeatNumber(), newitem16);
        Boeing737List.put(newitem17.getSeatNumber(), newitem17);
        Boeing737List.put(newitem18.getSeatNumber(), newitem18);
        Boeing737List.put(newitem19.getSeatNumber(), newitem19);
        Boeing737List.put(newitem20.getSeatNumber(), newitem20);
        Boeing737List.put(newitem21.getSeatNumber(), newitem21);
        Boeing737List.put(newitem22.getSeatNumber(), newitem22);
        Boeing737List.put(newitem23.getSeatNumber(), newitem23);
        Boeing737List.put(newitem24.getSeatNumber(), newitem24);
        Boeing737List.put(newitem25.getSeatNumber(), newitem25);
        Boeing737List.put(newitem26.getSeatNumber(), newitem26);
        Boeing737List.put(newitem27.getSeatNumber(), newitem27);
        Boeing737List.put(newitem28.getSeatNumber(), newitem28);
        Boeing737List.put(newitem29.getSeatNumber(), newitem29);
        Boeing737List.put(newitem30.getSeatNumber(), newitem30);
        Boeing737List.put(newitem31.getSeatNumber(), newitem31);
        Boeing737List.put(newitem32.getSeatNumber(), newitem32);
        Boeing737List.put(newitem33.getSeatNumber(), newitem33);
        Boeing737List.put(newitem34.getSeatNumber(), newitem34);
        Boeing737List.put(newitem35.getSeatNumber(), newitem35);
        Boeing737List.put(newitem36.getSeatNumber(), newitem36);
        Boeing737List.put(newitem37.getSeatNumber(), newitem37);
        Boeing737List.put(newitem38.getSeatNumber(), newitem38);
        Boeing737List.put(newitem39.getSeatNumber(), newitem39);
        Boeing737List.put(newitem40.getSeatNumber(), newitem40);
        Boeing737List.put(newitem41.getSeatNumber(), newitem41);
        Boeing737List.put(newitem42.getSeatNumber(), newitem42);
        Boeing737List.put(newitem43.getSeatNumber(), newitem43);
        Boeing737List.put(newitem44.getSeatNumber(), newitem44);
        Boeing737List.put(newitem45.getSeatNumber(), newitem45);
        Boeing737List.put(newitem46.getSeatNumber(), newitem46);
        Boeing737List.put(newitem47.getSeatNumber(), newitem47);
        Boeing737List.put(newitem48.getSeatNumber(), newitem48);
        Boeing737List.put(newitem49.getSeatNumber(), newitem49);
        Boeing737List.put(newitem50.getSeatNumber(), newitem50);
        Boeing737List.put(newitem51.getSeatNumber(), newitem51);
        Boeing737List.put(newitem52.getSeatNumber(), newitem52);
        Boeing737List.put(newitem53.getSeatNumber(), newitem53);
        Boeing737List.put(newitem54.getSeatNumber(), newitem54);
        Boeing737List.put(newitem55.getSeatNumber(), newitem55);
        Boeing737List.put(newitem56.getSeatNumber(), newitem56);

        //add seats to Boeing 738
        Boeing738List.put(newitem_1.getSeatNumber(), newitem_1);
        Boeing738List.put(newitem_2.getSeatNumber(), newitem_2);
        Boeing738List.put(newitem_3.getSeatNumber(), newitem_3);
        Boeing738List.put(newitem_4.getSeatNumber(), newitem_4);
        Boeing738List.put(newitem_5.getSeatNumber(), newitem_5);
        Boeing738List.put(newitem_6.getSeatNumber(), newitem_6);
        Boeing738List.put(newitem_7.getSeatNumber(), newitem_7);
        Boeing738List.put(newitem_8.getSeatNumber(), newitem_8);
        Boeing738List.put(newitem_9.getSeatNumber(), newitem_9);
        Boeing738List.put(newitem_10.getSeatNumber(), newitem_10);
        Boeing738List.put(newitem_11.getSeatNumber(), newitem_11);
        Boeing738List.put(newitem_12.getSeatNumber(), newitem_12);
        Boeing738List.put(newitem_13.getSeatNumber(), newitem_13);
        Boeing738List.put(newitem_14.getSeatNumber(), newitem_14);
        Boeing738List.put(newitem_15.getSeatNumber(), newitem_15);
        Boeing738List.put(newitem_16.getSeatNumber(), newitem_16);
        Boeing738List.put(newitem_17.getSeatNumber(), newitem_17);
        Boeing738List.put(newitem_18.getSeatNumber(), newitem_18);
        Boeing738List.put(newitem_19.getSeatNumber(), newitem_19);
        Boeing738List.put(newitem_20.getSeatNumber(), newitem_20);
        Boeing738List.put(newitem_21.getSeatNumber(), newitem_21);
        Boeing738List.put(newitem_22.getSeatNumber(), newitem_22);
        Boeing738List.put(newitem_23.getSeatNumber(), newitem_23);
        Boeing738List.put(newitem_24.getSeatNumber(), newitem_24);
        Boeing738List.put(newitem_25.getSeatNumber(), newitem_25);
        Boeing738List.put(newitem_26.getSeatNumber(), newitem_26);
        Boeing738List.put(newitem_27.getSeatNumber(), newitem_27);
        Boeing738List.put(newitem_28.getSeatNumber(), newitem_28);
        Boeing738List.put(newitem_29.getSeatNumber(), newitem_29);
        Boeing738List.put(newitem_30.getSeatNumber(), newitem_30);
        Boeing738List.put(newitem_31.getSeatNumber(), newitem_31);
        Boeing738List.put(newitem_32.getSeatNumber(), newitem_32);
        Boeing738List.put(newitem_33.getSeatNumber(), newitem_33);
        Boeing738List.put(newitem_34.getSeatNumber(), newitem_34);
        Boeing738List.put(newitem_35.getSeatNumber(), newitem_35);
        Boeing738List.put(newitem_36.getSeatNumber(), newitem_36);
        Boeing738List.put(newitem_37.getSeatNumber(), newitem_37);
        Boeing738List.put(newitem_38.getSeatNumber(), newitem_38);
        Boeing738List.put(newitem_39.getSeatNumber(), newitem_39);
        Boeing738List.put(newitem_40.getSeatNumber(), newitem_40);
        Boeing738List.put(newitem_41.getSeatNumber(), newitem_41);
        Boeing738List.put(newitem_42.getSeatNumber(), newitem_42);
        Boeing738List.put(newitem_43.getSeatNumber(), newitem_43);
        Boeing738List.put(newitem_44.getSeatNumber(), newitem_44);
        Boeing738List.put(newitem_45.getSeatNumber(), newitem_45);
        Boeing738List.put(newitem_46.getSeatNumber(), newitem_46);
        Boeing738List.put(newitem_47.getSeatNumber(), newitem_47);
        Boeing738List.put(newitem_48.getSeatNumber(), newitem_48);
        Boeing738List.put(newitem_49.getSeatNumber(), newitem_49);
        Boeing738List.put(newitem_50.getSeatNumber(), newitem_50);
        Boeing738List.put(newitem_51.getSeatNumber(), newitem_51);
        Boeing738List.put(newitem_52.getSeatNumber(), newitem_52);
        Boeing738List.put(newitem_53.getSeatNumber(), newitem_53);
        Boeing738List.put(newitem_54.getSeatNumber(), newitem_54);
        Boeing738List.put(newitem_55.getSeatNumber(), newitem_55);
        Boeing738List.put(newitem_56.getSeatNumber(), newitem_56);

        //add seats of Boeing739
        Boeing739List.put(newitem__1.getSeatNumber(), newitem__1);
        Boeing739List.put(newitem__2.getSeatNumber(), newitem__2);
        Boeing739List.put(newitem__3.getSeatNumber(), newitem__3);
        Boeing739List.put(newitem__4.getSeatNumber(), newitem__4);
        Boeing739List.put(newitem__5.getSeatNumber(), newitem__5);
        Boeing739List.put(newitem__6.getSeatNumber(), newitem__6);
        Boeing739List.put(newitem__7.getSeatNumber(), newitem__7);
        Boeing739List.put(newitem__8.getSeatNumber(), newitem__8);
        Boeing739List.put(newitem__9.getSeatNumber(), newitem__9);
        Boeing739List.put(newitem__10.getSeatNumber(), newitem__10);
        Boeing739List.put(newitem__11.getSeatNumber(), newitem__11);
        Boeing739List.put(newitem__12.getSeatNumber(), newitem__12);
        Boeing739List.put(newitem__13.getSeatNumber(), newitem__13);
        Boeing739List.put(newitem__14.getSeatNumber(), newitem__14);
        Boeing739List.put(newitem__15.getSeatNumber(), newitem__15);
        Boeing739List.put(newitem__16.getSeatNumber(), newitem__16);
        Boeing739List.put(newitem__17.getSeatNumber(), newitem__17);
        Boeing739List.put(newitem__18.getSeatNumber(), newitem__18);
        Boeing739List.put(newitem__19.getSeatNumber(), newitem__19);
        Boeing739List.put(newitem__20.getSeatNumber(), newitem__20);
        Boeing739List.put(newitem__21.getSeatNumber(), newitem__21);
        Boeing739List.put(newitem__22.getSeatNumber(), newitem__22);
        Boeing739List.put(newitem__23.getSeatNumber(), newitem__23);
        Boeing739List.put(newitem__24.getSeatNumber(), newitem__24);
        Boeing739List.put(newitem__25.getSeatNumber(), newitem__25);
        Boeing739List.put(newitem__26.getSeatNumber(), newitem__26);
        Boeing739List.put(newitem__27.getSeatNumber(), newitem__27);
        Boeing739List.put(newitem__28.getSeatNumber(), newitem__28);
        Boeing739List.put(newitem__29.getSeatNumber(), newitem__29);
        Boeing739List.put(newitem__30.getSeatNumber(), newitem__30);
        Boeing739List.put(newitem__31.getSeatNumber(), newitem__31);
        Boeing739List.put(newitem__32.getSeatNumber(), newitem__32);
        Boeing739List.put(newitem__33.getSeatNumber(), newitem__33);
        Boeing739List.put(newitem__34.getSeatNumber(), newitem__34);
        Boeing739List.put(newitem__35.getSeatNumber(), newitem__35);
        Boeing739List.put(newitem__36.getSeatNumber(), newitem__36);
        Boeing739List.put(newitem__37.getSeatNumber(), newitem__37);
        Boeing739List.put(newitem__38.getSeatNumber(), newitem__38);
        Boeing739List.put(newitem__39.getSeatNumber(), newitem__39);
        Boeing739List.put(newitem__40.getSeatNumber(), newitem__40);
        Boeing739List.put(newitem__41.getSeatNumber(), newitem__41);
        Boeing739List.put(newitem__42.getSeatNumber(), newitem__42);
        Boeing739List.put(newitem__43.getSeatNumber(), newitem__43);
        Boeing739List.put(newitem__44.getSeatNumber(), newitem__44);
        Boeing739List.put(newitem__45.getSeatNumber(), newitem__45);
        Boeing739List.put(newitem__46.getSeatNumber(), newitem__46);
        Boeing739List.put(newitem__47.getSeatNumber(), newitem__47);
        Boeing739List.put(newitem__48.getSeatNumber(), newitem__48);
        Boeing739List.put(newitem__49.getSeatNumber(), newitem__49);
        Boeing739List.put(newitem__50.getSeatNumber(), newitem__50);
        Boeing739List.put(newitem__51.getSeatNumber(), newitem__51);
        Boeing739List.put(newitem__52.getSeatNumber(), newitem__52);
        Boeing739List.put(newitem__53.getSeatNumber(), newitem__53);
        Boeing739List.put(newitem__54.getSeatNumber(), newitem__54);
        Boeing739List.put(newitem__55.getSeatNumber(), newitem__55);
        Boeing739List.put(newitem__56.getSeatNumber(), newitem__56);


        //add seats of Airbus319
        AirBus319List.put(newitem100.getSeatNumber(), newitem100);
        AirBus319List.put(newitem101.getSeatNumber(), newitem101);
        AirBus319List.put(newitem102.getSeatNumber(), newitem102);
        AirBus319List.put(newitem103.getSeatNumber(), newitem103);
        AirBus319List.put(newitem104.getSeatNumber(), newitem104);
        AirBus319List.put(newitem105.getSeatNumber(), newitem105);
        AirBus319List.put(newitem106.getSeatNumber(), newitem106);
        AirBus319List.put(newitem107.getSeatNumber(), newitem107);
        AirBus319List.put(newitem108.getSeatNumber(), newitem108);
        AirBus319List.put(newitem109.getSeatNumber(), newitem109);
        AirBus319List.put(newitem110.getSeatNumber(), newitem110);
        AirBus319List.put(newitem111.getSeatNumber(), newitem111);
        AirBus319List.put(newitem112.getSeatNumber(), newitem112);
        AirBus319List.put(newitem113.getSeatNumber(), newitem113);
        AirBus319List.put(newitem114.getSeatNumber(), newitem114);
        AirBus319List.put(newitem115.getSeatNumber(), newitem115);
        AirBus319List.put(newitem116.getSeatNumber(), newitem116);
        AirBus319List.put(newitem117.getSeatNumber(), newitem117);
        AirBus319List.put(newitem118.getSeatNumber(), newitem118);
        AirBus319List.put(newitem119.getSeatNumber(), newitem119);
        AirBus319List.put(newitem120.getSeatNumber(), newitem120);
        AirBus319List.put(newitem121.getSeatNumber(), newitem121);
        AirBus319List.put(newitem122.getSeatNumber(), newitem122);
        AirBus319List.put(newitem123.getSeatNumber(), newitem123);
        AirBus319List.put(newitem124.getSeatNumber(), newitem124);
        AirBus319List.put(newitem125.getSeatNumber(), newitem125);
        AirBus319List.put(newitem126.getSeatNumber(), newitem126);
        AirBus319List.put(newitem127.getSeatNumber(), newitem127);
        AirBus319List.put(newitem128.getSeatNumber(), newitem128);
        AirBus319List.put(newitem129.getSeatNumber(), newitem129);
        AirBus319List.put(newitem130.getSeatNumber(), newitem130);
        AirBus319List.put(newitem131.getSeatNumber(), newitem131);
        AirBus319List.put(newitem132.getSeatNumber(), newitem132);
        AirBus319List.put(newitem133.getSeatNumber(), newitem133);
        AirBus319List.put(newitem134.getSeatNumber(), newitem134);
        AirBus319List.put(newitem135.getSeatNumber(), newitem135);
        AirBus319List.put(newitem136.getSeatNumber(), newitem136);
        AirBus319List.put(newitem137.getSeatNumber(), newitem137);


        //add seats of Airbus320
        AirBus320List.put(newitem_100.getSeatNumber(), newitem_100);
        AirBus320List.put(newitem_101.getSeatNumber(), newitem_101);
        AirBus320List.put(newitem_102.getSeatNumber(), newitem_102);
        AirBus320List.put(newitem_103.getSeatNumber(), newitem_103);
        AirBus320List.put(newitem_104.getSeatNumber(), newitem_104);
        AirBus320List.put(newitem_105.getSeatNumber(), newitem_105);
        AirBus320List.put(newitem_106.getSeatNumber(), newitem_106);
        AirBus320List.put(newitem_107.getSeatNumber(), newitem_107);
        AirBus320List.put(newitem_108.getSeatNumber(), newitem_108);
        AirBus320List.put(newitem_109.getSeatNumber(), newitem_109);
        AirBus320List.put(newitem_110.getSeatNumber(), newitem_110);
        AirBus320List.put(newitem_111.getSeatNumber(), newitem_111);
        AirBus320List.put(newitem_112.getSeatNumber(), newitem_112);
        AirBus320List.put(newitem_113.getSeatNumber(), newitem_113);
        AirBus320List.put(newitem_114.getSeatNumber(), newitem_114);
        AirBus320List.put(newitem_115.getSeatNumber(), newitem_115);
        AirBus320List.put(newitem_116.getSeatNumber(), newitem_116);
        AirBus320List.put(newitem_117.getSeatNumber(), newitem_117);
        AirBus320List.put(newitem_118.getSeatNumber(), newitem_118);
        AirBus320List.put(newitem_119.getSeatNumber(), newitem_119);
        AirBus320List.put(newitem_120.getSeatNumber(), newitem_120);
        AirBus320List.put(newitem_121.getSeatNumber(), newitem_121);
        AirBus320List.put(newitem_122.getSeatNumber(), newitem_122);
        AirBus320List.put(newitem_123.getSeatNumber(), newitem_123);
        AirBus320List.put(newitem_124.getSeatNumber(), newitem_124);
        AirBus320List.put(newitem_125.getSeatNumber(), newitem_125);
        AirBus320List.put(newitem_126.getSeatNumber(), newitem_126);
        AirBus320List.put(newitem_127.getSeatNumber(), newitem_127);
        AirBus320List.put(newitem_128.getSeatNumber(), newitem_128);
        AirBus320List.put(newitem_129.getSeatNumber(), newitem_129);
        AirBus320List.put(newitem_130.getSeatNumber(), newitem_130);
        AirBus320List.put(newitem_131.getSeatNumber(), newitem_131);
        AirBus320List.put(newitem_132.getSeatNumber(), newitem_132);
        AirBus320List.put(newitem_133.getSeatNumber(), newitem_133);
        AirBus320List.put(newitem_134.getSeatNumber(), newitem_134);
        AirBus320List.put(newitem_135.getSeatNumber(), newitem_135);
        AirBus320List.put(newitem_136.getSeatNumber(), newitem_136);
        AirBus320List.put(newitem_137.getSeatNumber(), newitem_137);

        //add seats of Airbus321
        AirBus321List.put(newitem__100.getSeatNumber(), newitem__100);
        AirBus321List.put(newitem__101.getSeatNumber(), newitem__101);
        AirBus321List.put(newitem__102.getSeatNumber(), newitem__102);
        AirBus321List.put(newitem__103.getSeatNumber(), newitem__103);
        AirBus321List.put(newitem__104.getSeatNumber(), newitem__104);
        AirBus321List.put(newitem__105.getSeatNumber(), newitem__105);
        AirBus321List.put(newitem__106.getSeatNumber(), newitem__106);
        AirBus321List.put(newitem__107.getSeatNumber(), newitem__107);
        AirBus321List.put(newitem__108.getSeatNumber(), newitem__108);
        AirBus321List.put(newitem__109.getSeatNumber(), newitem__109);
        AirBus321List.put(newitem__110.getSeatNumber(), newitem__110);
        AirBus321List.put(newitem__111.getSeatNumber(), newitem__111);
        AirBus321List.put(newitem__112.getSeatNumber(), newitem__112);
        AirBus321List.put(newitem__113.getSeatNumber(), newitem__113);
        AirBus321List.put(newitem__114.getSeatNumber(), newitem__114);
        AirBus321List.put(newitem__115.getSeatNumber(), newitem__115);
        AirBus321List.put(newitem__116.getSeatNumber(), newitem__116);
        AirBus321List.put(newitem__117.getSeatNumber(), newitem__117);
        AirBus321List.put(newitem__118.getSeatNumber(), newitem__118);
        AirBus321List.put(newitem__119.getSeatNumber(), newitem__119);
        AirBus321List.put(newitem__120.getSeatNumber(), newitem__120);
        AirBus321List.put(newitem__121.getSeatNumber(), newitem__121);
        AirBus321List.put(newitem__122.getSeatNumber(), newitem__122);
        AirBus321List.put(newitem__123.getSeatNumber(), newitem__123);
        AirBus321List.put(newitem__124.getSeatNumber(), newitem__124);
        AirBus321List.put(newitem__125.getSeatNumber(), newitem__125);
        AirBus321List.put(newitem__126.getSeatNumber(), newitem__126);
        AirBus321List.put(newitem__127.getSeatNumber(), newitem__127);
        AirBus321List.put(newitem__128.getSeatNumber(), newitem__128);
        AirBus321List.put(newitem__129.getSeatNumber(), newitem__129);
        AirBus321List.put(newitem__130.getSeatNumber(), newitem__130);
        AirBus321List.put(newitem__131.getSeatNumber(), newitem__131);
        AirBus321List.put(newitem__132.getSeatNumber(), newitem__132);
        AirBus321List.put(newitem__133.getSeatNumber(), newitem__133);
        AirBus321List.put(newitem__134.getSeatNumber(), newitem__134);
        AirBus321List.put(newitem__135.getSeatNumber(), newitem__135);
        AirBus321List.put(newitem__136.getSeatNumber(), newitem__136);
        AirBus321List.put(newitem__137.getSeatNumber(), newitem__137);


        //Adding Seats for Embraer170
        Embraer170List.put(newitem200.getSeatNumber(),newitem200);
        Embraer170List.put(newitem201.getSeatNumber(),newitem201);
        Embraer170List.put(newitem202.getSeatNumber(),newitem202);
        Embraer170List.put(newitem203.getSeatNumber(),newitem203);
        Embraer170List.put(newitem204.getSeatNumber(),newitem204);
        Embraer170List.put(newitem205.getSeatNumber(),newitem205);
        Embraer170List.put(newitem206.getSeatNumber(),newitem206);
        Embraer170List.put(newitem207.getSeatNumber(),newitem207);
        Embraer170List.put(newitem208.getSeatNumber(),newitem208);
        Embraer170List.put(newitem209.getSeatNumber(),newitem209);
        Embraer170List.put(newitem210.getSeatNumber(),newitem210);
        Embraer170List.put(newitem211.getSeatNumber(),newitem211);
        Embraer170List.put(newitem212.getSeatNumber(),newitem212);
        Embraer170List.put(newitem213.getSeatNumber(),newitem213);
        Embraer170List.put(newitem214.getSeatNumber(),newitem214);
        Embraer170List.put(newitem215.getSeatNumber(),newitem215);
        Embraer170List.put(newitem216.getSeatNumber(),newitem216);
        Embraer170List.put(newitem217.getSeatNumber(),newitem217);
        Embraer170List.put(newitem218.getSeatNumber(),newitem218);
        Embraer170List.put(newitem219.getSeatNumber(),newitem219);
        Embraer170List.put(newitem220.getSeatNumber(),newitem220);
        Embraer170List.put(newitem221.getSeatNumber(),newitem221);

        //Adding Seats for Embraer171
        Embraer171List.put(newitem_200.getSeatNumber(),newitem_200);
        Embraer171List.put(newitem_201.getSeatNumber(),newitem_201);
        Embraer171List.put(newitem_202.getSeatNumber(),newitem_202);
        Embraer171List.put(newitem_203.getSeatNumber(),newitem_203);
        Embraer171List.put(newitem_204.getSeatNumber(),newitem_204);
        Embraer171List.put(newitem_205.getSeatNumber(),newitem_205);
        Embraer171List.put(newitem_206.getSeatNumber(),newitem_206);
        Embraer171List.put(newitem_207.getSeatNumber(),newitem_207);
        Embraer171List.put(newitem_208.getSeatNumber(),newitem_208);
        Embraer171List.put(newitem_209.getSeatNumber(),newitem_209);
        Embraer171List.put(newitem_210.getSeatNumber(),newitem_210);
        Embraer171List.put(newitem_211.getSeatNumber(),newitem_211);
        Embraer171List.put(newitem_212.getSeatNumber(),newitem_212);
        Embraer171List.put(newitem_213.getSeatNumber(),newitem_213);
        Embraer171List.put(newitem_214.getSeatNumber(),newitem_214);
        Embraer171List.put(newitem_215.getSeatNumber(),newitem_215);
        Embraer171List.put(newitem_216.getSeatNumber(),newitem_216);
        Embraer171List.put(newitem_217.getSeatNumber(),newitem_217);
        Embraer171List.put(newitem_218.getSeatNumber(),newitem_218);
        Embraer171List.put(newitem_219.getSeatNumber(),newitem_219);
        Embraer171List.put(newitem_220.getSeatNumber(),newitem_220);
        Embraer171List.put(newitem_221.getSeatNumber(),newitem_221);

        //Adding Seats for Embraer172
        Embraer172List.put(newitem__200.getSeatNumber(),newitem_200);
        Embraer172List.put(newitem__201.getSeatNumber(),newitem_201);
        Embraer172List.put(newitem__202.getSeatNumber(),newitem_202);
        Embraer172List.put(newitem__203.getSeatNumber(),newitem_203);
        Embraer172List.put(newitem__204.getSeatNumber(),newitem_204);
        Embraer172List.put(newitem__205.getSeatNumber(),newitem_205);
        Embraer172List.put(newitem__206.getSeatNumber(),newitem_206);
        Embraer172List.put(newitem__207.getSeatNumber(),newitem_207);
        Embraer172List.put(newitem__208.getSeatNumber(),newitem_208);
        Embraer172List.put(newitem__209.getSeatNumber(),newitem_209);
        Embraer172List.put(newitem__210.getSeatNumber(),newitem_210);
        Embraer172List.put(newitem__211.getSeatNumber(),newitem_211);
        Embraer172List.put(newitem__212.getSeatNumber(),newitem_212);
        Embraer172List.put(newitem__213.getSeatNumber(),newitem_213);
        Embraer172List.put(newitem__214.getSeatNumber(),newitem_214);
        Embraer172List.put(newitem__215.getSeatNumber(),newitem_215);
        Embraer172List.put(newitem__216.getSeatNumber(),newitem_216);
        Embraer172List.put(newitem__217.getSeatNumber(),newitem_217);
        Embraer172List.put(newitem__218.getSeatNumber(),newitem_218);
        Embraer172List.put(newitem__219.getSeatNumber(),newitem_219);
        Embraer172List.put(newitem__220.getSeatNumber(),newitem_220);
        Embraer172List.put(newitem__221.getSeatNumber(),newitem_221);

    }

}
