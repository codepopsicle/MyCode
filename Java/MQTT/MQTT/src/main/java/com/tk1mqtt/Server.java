package com.tk1mqtt;

import java.rmi.*;
import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.rmi.server.UnicastRemoteObject;
import java.util.*;
import java.io.*;
import org.eclipse.paho.client.mqttv3.*;





public class Server implements ObjectInterfaceServer, Serializable {

    //ArrayList for constructor initilization
    private ArrayList<String> flightlist;
    public String stringreturn;
    public Vector clientList = new Vector();

    //mandatory serilization ID
    private static final long serialVersionUID = 1L;

    protected Server(ArrayList<String> list) throws RemoteException {
        super();
        this.flightlist = list;
        // explicit constructor declaration
        //now flightlist will contain the first two dummy flights
    }

    public void flightDetails() throws RemoteException{
        /*this function returns a list of all flights
         * called each time a new flight is added
         * or deleted
         * or updated
         * This will in turn perform a callback to the method running
         * on the client VM called receiveUpdatedFlightList
         */


        /*calling pub-sub mechanism to update information boards according to
        subscribed topics
         */

        try{
            MqttClient client = new MqttClient("tcp://localhost:1883", MqttClient.generateClientId());
            client.connect();
            MqttMessage message = new MqttMessage();
            ByteArrayOutputStream baos = new ByteArrayOutputStream();
            DataOutputStream out = new DataOutputStream(baos);
            try{for (String element : flightlist) {
                out.writeUTF(element);
            }}catch(IOException e){
                System.out.println("Exception");
            }
            byte[] bytes = baos.toByteArray();
            message.setPayload(bytes);
            client.publish("arrival_departure", message);
            client.publish("departure", message);
            client.publish("gateBoard", message);

            System.out.println("\tMessage '"+"' to 'arrival_departure'");

            client.disconnect();
        }
        catch(MqttException e){
            System.out.println("Exception");
        }


        for(int i=0; i<clientList.size(); i++) {
            try {

                //debug
                System.out.println("Hello");
                ObjectInterfaceClient listclient = (ObjectInterfaceClient)clientList.elementAt(i);
                listclient.receiveUpdatedFlightList(flightlist);
            }catch (RemoteException ex) {
                /*removing the client from the vector list on disconnect*/
                clientList.removeElement(clientList.elementAt(i));
                System.out.println("Client disconnected");
            }
        }

    }

    public ArrayList<String> justCall() {
        return flightlist;
    }

    public static ArrayList<String> initializeFlights() {

        //this function intializes the list with a couple of flights
        //adding a couple of predefined flight entries
        //List to store flight info. Flight details stored as semi-colon delimited line
        ArrayList<String> flightDetail = new ArrayList<String>();
        //entry number 1 (arrival)
        flightDetail.add(0, "LH591;1;LH;Lufthansa;A380;FRA;TK;2018-10-30;2018-10-30T01:00:00Z;T1;B2;" +
                "2018-10-30T02:00:00Z;XX;XX;XX;XX;XX;XX;XX;" +
                "XX;B");
        //entry number 2 (departure)
        flightDetail.add(1, "LH592;2;LH;Lufthansa;A380;TK;FRA;2018-10-30;XX;XX;XX;" +
                "XX;2018-10-30T02:00:00Z;T2;B1;2018-10-30T02:00:00Z;T2;3;2018-10-30T02:00:00Z;" +
                "2018-10-30T02:00:00Z;D");
        //entry number 3 (arrival)
        flightDetail.add(2, "AI796;1;AI;AirIndia;A380;BOM;TK;2018-10-30;2018-10-30T01:00:00Z;T1;B1;" +
                "2018-10-30T02:00:00Z;XX;XX;XX;XX;XX;XX;XX;" +
                "XX;B");

        //entry number 4 (departure)
        flightDetail.add(3, "QA567;2;QA;Qatar Airways;A380;TK;DOH;2018-10-30;XX;XX;XX;" +
                "XX;2018-10-30T02:00:00Z;T2;B2;2018-10-30T02:00:00Z;T2;3;2018-10-30T02:00:00Z;" +
                "2018-10-30T02:00:00Z;D");

        //entry number 5 (arrival)
        flightDetail.add(2, "AI855;1;AI;AirIndia;A380;BOM;TK;2018-10-30;2018-10-30T01:00:00Z;T1;B3;" +
                "2018-10-30T02:00:00Z;XX;XX;XX;XX;XX;XX;XX;" +
                "XX;B");

        //entry number 6 (departure)
        flightDetail.add(3, "QA234;2;QA;Qatar Airways;A380;TK;DOH;2018-10-30;XX;XX;XX;" +
                "XX;2018-10-30T02:00:00Z;T2;B3;2018-10-30T02:00:00Z;T2;3;2018-10-30T02:00:00Z;" +
                "2018-10-30T02:00:00Z;D");

        //return initilaized list of flights
        return(flightDetail);
    }

    public void deleteFlight(String flnum) throws RemoteException {
        //this method deletes the flight requested by the client
        //takes as input Flight Number
        String[] values;
        //flightlist contains current list of flights
        //iterate through all flights and compare the Flight Code to locate the one to delete
        for(int i=0; i<flightlist.size(); i++){
            //obtain the Flight Code by accessing the first value of the semi-colon separated string
            values = flightlist.get(i).split(";");
            if (flnum.equals(values[0])) {
                flightlist.remove(i);
            }

        }

        //distribute updated flightlist to the clients
        flightDetails();

    }

    public void updateFlight(String changes, int position, String flightnum) throws RemoteException {
        //takes as input a list of changes. Each change is a string consisting of three values.
        //separated by a semi-colon. First value - Flight code. Second value - updated field value
        //Third value is the position of the field in the string


        //adding changed string at the appropriate position in the list array
        flightlist.set(position, changes);

        /*distribute updated flight list to all clients*/
        flightDetails();

    }


    public void addFlight(String flightdetail) throws RemoteException {
        //this method enables user to add flight with details. Accepts String as input
        System.out.println("Received list of values " + flightdetail);
        flightlist.add(flightdetail);


        /*distribute updated flight list to all clients
         */
        flightDetails();
    }


    @SuppressWarnings("unchecked")
    public void login(ObjectInterfaceClient loginobject) throws RemoteException {

        String response1 = "";
        /*If client list doesn't contain current logged in client
         * then add to the vector list
         */
        if (!(clientList.contains(loginobject))) {
            clientList.addElement(loginobject);
            System.out.println("Added client to the list");
        }


        //iterating through the client list (now just to test the distributed nature
        for(int i=0; i<clientList.size(); i++) {
            try {
                ObjectInterfaceClient workclient = (ObjectInterfaceClient)clientList.elementAt(i);
                response1 = "Callback for " + i + "th CLIENT";
                workclient.testDistribute(response1);
            }catch (RemoteException ex) {
                /*removing the client from the vecotr list on disconnect*/
                clientList.removeElement(clientList.elementAt(i));
                System.out.println("Client disconnected");
            }
        }
    }

    public void logout(ObjectInterfaceClient logoutobejct) throws RemoteException {

        /*this method removes a particular client from the
         * client vector list
         */
        clientList.removeElement(logoutobejct);

    }


    public static void main(String args[]) throws RemoteException, NotBoundException{

        try{

            //Naming.rebind("//localhost/FlightInterface", new Server(initializeFlights()));
            Server obj = new Server(initializeFlights());
            ObjectInterfaceServer stub = (ObjectInterfaceServer) UnicastRemoteObject.exportObject(obj, 0);

            Registry registry = LocateRegistry.getRegistry();
            registry.bind("ObjectInterfaceServer", stub);
            System.out.println("Bound");

        } catch(Exception e) {
            System.err.println("System Exception :" + e.toString());
            e.printStackTrace();
        }








    }
}
