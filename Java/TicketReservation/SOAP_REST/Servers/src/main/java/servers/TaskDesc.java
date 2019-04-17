package servers;

import java.io.IOException;
import java.net.URI;
import javax.ws.rs.core.UriBuilder;
import com.sun.net.httpserver.*;
import com.sun.jersey.api.core.PackagesResourceConfig;
import com.sun.jersey.api.core.ResourceConfig;
import com.sun.jersey.api.container.httpserver.HttpServerFactory;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;


public class TaskDesc {
//defining the 2D arrays to house seat selection

    /*user's selection of day
    1- Monday, 2 - Tuesday, 3 - Wednesday, 4 - Thursday, 5 - Friday, 6 - Saturday, 7 - Sunday
     */
    int daySelect;

    /*User's choice of flight
    BO - Boeing, AB - AirBus, EM - Embraer
     */
    String flightSelect = "";

    String price = "";

    //user list
    ArrayList<String> UserList = new ArrayList<String>();

    //Arrays for Boeing
    private static String[][] UFBoeing = new String[5][4];
    private static int UFB_row = 5;
    private static int UFB_column = 4;
    private static String[][] EPBoeing = new String[6][6];
    private static int EPB_row = 6;
    private static int EPB_column = 6;
    private static String[][] ECBoeing = new String[22][6];
    private static int ECB_row = 22;
    private static int ECB_column = 6;

    //Arrays for Airbus
    private static String[][] UFAirbus = new String[2][4];
    private static int UFA_row = 2;
    private static int UFA_column = 4;
    private static String[][] EPAirbus = new String[7][6];
    private static int EPA_row = 7;
    private static int EPA_column = 6;
    private static String[][] ECAirbus = new String[13][6];
    private static int ECA_row = 13;
    private static int ECA_column = 6;

    //Arrays for Embraer
    private static String[][] UFEmbraer = new String[2][3];
    private static int UFE_row = 2;
    private static int UFE_column = 3;

    private static String[][] EPEmbraer = new String[4][4];
    private static int EPE_row = 4;
    private static int EPE_column = 4;
    private static String[][] ECEmbraer = new String[12][4];
    private static int ECE_row = 12;
    private static int ECE_column = 4;

    private static int dayValue = 0;
    private static String returnValue = "";


    //empty constructor

    public TaskDesc() {}

    //used to facilitate login
    public String login(String userName) {
        //checking if the userlist contains the user already
        if(!UserList.contains(userName)){
            UserList.add(userName);
            return userName;
        }
        else{
            return userName;
        }
    }




    //function to return price of selected seat

    public String seatPrice(String cl){

        if(cl.equals("UnitedFirst")){
            price = "120";
        }
        else if(cl.equals("EconomyPlus")){
            price = "80";
        }
        else{
            price = "45";
        }

        return price;
    }

    public String seatingArrangementRow(String fl, String cl){
        String result = "";
        if(fl.equals("Airbus")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFA_row);break;
                case "EconomyPlus": result = Integer.toString(EPA_row);break;
                case "Economy": result = Integer.toString(ECA_row);break;
            }
        }else if(fl.equals("Boeing")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFB_row);break;
                case "EconomyPlus": result = Integer.toString(EPB_row);break;
                case "Economy": result = Integer.toString(ECB_row);break;
            }
        }else if(fl.equals("Embraer")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFE_row);break;
                case "EconomyPlus": result = Integer.toString(EPE_row);break;
                case "Economy": result = Integer.toString(ECE_row);break;
            }
        }

        return result;
    }


    public String seatingArrangementColumn(String fl, String cl){
        String result = "";
        if(fl.equals("Airbus")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFA_column);break;
                case "EconomyPlus": result = Integer.toString(EPA_column);break;
                case "Economy": result = Integer.toString(ECA_column);break;
            }
        }else if(fl.equals("Boeing")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFB_column);break;
                case "EconomyPlus": result = Integer.toString(EPB_column);break;
                case "Economy": result = Integer.toString(ECB_column);break;
            }
        }else if(fl.equals("Embraer")){
            switch(cl){
                case "UnitedFirst": result = Integer.toString(UFE_column);break;
                case "EconomyPlus": result = Integer.toString(EPE_column);break;
                case "Economy": result = Integer.toString(ECE_column);break;
            }
        }

        return result;
    }

    //function to convert day to integer value

    public int dayConvert(String day){
        switch(day){
            case "Monday": dayValue = 1; break;
            case "Tuesday": dayValue = 2; break;
            case "Wednesday": dayValue = 3; break;
            case "Thursday": dayValue = 4; break;
            case "Friday": dayValue = 5; break;
            case "Saturday": dayValue = 6; break;
            case "Sunday": dayValue = 7;break;
        }

        return dayValue;
    }

    //function to make the reservation for Boeing
    public String doReserveBoeing(String daySelect, String resClass, int row, int column, String selectedFlight){
        List<String> nlist = new ArrayList<String>();
        int daySelectInteger = dayConvert(daySelect);
        String values = "";
        String[] valuelist;
        int present = 0;

        //initilized to true
        boolean response = true;
        if(resClass.equals("UnitedFirst")){
            values = UFBoeing[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }

                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    UFBoeing[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                UFBoeing[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("EconomyPlus")){
            values = EPBoeing[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    EPBoeing[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                EPBoeing[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("Economy")){
            values = ECBoeing[row][column];
            if(values!=null) {
                System.out.println("Entered this section");
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    ECBoeing[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                ECBoeing[row][column] = values;
                response = true;
            }
        }
        if(response){
            returnValue = "1";
        }
        else{
            returnValue = "0";
        }

        return returnValue;
    }

    //function to make the reservation for Boeing
    public String doReserveAirBus(String daySelect, String resClass, int row, int column, String selectedFlight){
        int daySelectInteger = dayConvert(daySelect);
        List<String> nlist = new ArrayList<String>();
        String values = "";
        String[] valuelist;
        int present = 0;

        //initilized to true
        boolean response = true;
        if(resClass.equals("UnitedFirst")){
            values = UFAirbus[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    UFAirbus[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                UFAirbus[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("EconomyPlus")){
            values = EPAirbus[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    EPAirbus[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                EPAirbus[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("Economy")){
            values = ECAirbus[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    ECAirbus[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                ECAirbus[row][column] = values;
                response = true;
            }
        }

        if(response){
            returnValue = "1";
        }
        else{
            returnValue = "0";
        }

        return returnValue;
    }


    //function to make the reservation for Boeing
    public String doReserveEmbraer(String daySelect, String resClass, int row, int column, String selectedFlight){
        int daySelectInteger = dayConvert(daySelect);
        List<String> nlist = new ArrayList<String>();
        String values = "";
        String[] valuelist;
        int present = 0;

        //initilized to true
        boolean response = true;
        if(resClass.equals("UnitedFirst")){
            values = UFEmbraer[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    UFEmbraer[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                UFEmbraer[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("EconomyPlus")){
            values = EPEmbraer[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    EPEmbraer[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                EPEmbraer[row][column] = values;
                response = true;
            }
        }
        else if(resClass.equals("Economy")){
            values = ECEmbraer[row][column];
            if(values!=null) {
                valuelist = values.split(";");
                nlist = Arrays.asList(valuelist);
                if(nlist.contains((Integer.toString(daySelectInteger) + "," + selectedFlight))){
                    present  = 1;
                }


                //checked if reservation for tha day has been made earlier or not
                if (present == 1) {
                    response = false;

                } else {
                    values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                    ECEmbraer[row][column] = values;
                    response = true;
                }
            } else{
                values = values + Integer.toString(daySelectInteger) + "," + selectedFlight + ";";
                values = values.substring(0,values.indexOf("null")) + values.substring(values.indexOf("null")+4, values.length());
                ECEmbraer[row][column] = values;
                response = true;
            }
        }

        if(response){
            returnValue = "1";
        }
        else{
            returnValue = "0";
        }

        return returnValue;
    }

    public static void main(String[] args) throws IOException{
        System.out.println("Starting embedded HTTP server");
        HttpServer newserver = createHTTPserver();
        newserver.start();
        System.out.println("Started server sucessfully");

    }

    public static HttpServer createHTTPserver() throws IOException{
        ResourceConfig newresource = new PackagesResourceConfig("servers");
        return HttpServerFactory.create(getURI(), newresource);
    }

    public static URI getURI(){
        return UriBuilder.fromUri("http://localhost/").port(8080).build();
    }

}
