package com.tk1mqtt;

import org.eclipse.paho.client.mqttv3.IMqttDeliveryToken;
import org.eclipse.paho.client.mqttv3.MqttCallback;
import org.eclipse.paho.client.mqttv3.MqttMessage;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.rmi.Naming;

import javax.swing.*;
import javax.swing.border.LineBorder;
import javax.swing.table.DefaultTableCellRenderer;
import javax.swing.table.DefaultTableModel;
import java.awt.*;
import java.io.*;
import java.util.ArrayList;

public class DepartureBoard extends JFrame implements MqttCallback {

    private JPanel contentPane;
    private JTable table;
    private DefaultTableModel model;
    private JButton btnNewButton;
    private String[] values;
    String IATACode = "";
    String CarrierName = "";
    String FlightNum = "";
    String DepartureAirport = "";
    String ArrivalAirport = "";
    String Direction = "";
    String DepartureGate = "";
    private ArrayList<String> flist = new ArrayList<>();

    public DepartureBoard() {

        try{
            ObjectInterfaceServer stub = (ObjectInterfaceServer)Naming.lookup("ObjectInterfaceServer");
            flist = stub.justCall();
        }catch(Exception e){
            System.err.println("Server exception: " + e.toString());
            e.printStackTrace();
        }

        setTitle("Departures");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setResizable(false);
        setBounds(100, 100, 500, 400);
        contentPane = new JPanel();
        contentPane.setBorder(new LineBorder(new Color(0, 0, 0)));
        setContentPane(contentPane);

        JTable table = new JTable(new DefaultTableModel(new Object[]{ "IATA Code", "Name", "Flight No:", "Departure" , "Arrival", "Gate"}, 0));
        model = (DefaultTableModel) table.getModel();

        DefaultTableCellRenderer centerRenderer = new DefaultTableCellRenderer();
        centerRenderer.setHorizontalAlignment( JLabel.LEFT );
        table.setDefaultRenderer(String.class, centerRenderer);
        table.setShowGrid(false);
        table.setBorder(null);
        table.setFont(new Font("Arial", Font.PLAIN, 14));

        contentPane.add(table.getTableHeader(), BorderLayout.NORTH);
        contentPane.add(table);

        btnNewButton = new JButton("Change Board");
        btnNewButton.setFont(new Font("Helvetica", Font.BOLD, 15));
        btnNewButton.setBounds(10, 50, 90, 70);
        contentPane.add(btnNewButton);

        btnNewButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                dispose();
                chooseBoard mainpg = new chooseBoard();
                mainpg.setVisible(true);
            }
        });


        for(int i=0; i<flist.size(); i++) {
            values = flist.get(i).split(";");
            IATACode = values[2];
            CarrierName = values[3];
            FlightNum = values[0];
            Direction = values[1];
            DepartureAirport = values[5];
            ArrivalAirport = values[6];
            DepartureGate = values[14];

            /*logic for displaying only departures from gates starting with B*/
            if(Direction.equals("2")){
            if(DepartureGate.substring(0,1).equals("B")) {

            model.addRow(new Object[]{IATACode,CarrierName,FlightNum,DepartureAirport,ArrivalAirport,DepartureGate});
        }}
    }}


    public String getDirection(String direction){
        String retDirection = "";
        if(direction.equals("1")){
            retDirection = "Arrival";
        }
        else {
            retDirection = "Departure";
        }

        return retDirection;
    }


    public void connectionLost(Throwable throwable) {
        System.out.println("Connection to MQTT broker lost!");
    }

    public void messageArrived(String s, MqttMessage mqttMessage) throws Exception {
        /*cleanse the table*/
        int rowCount = model.getRowCount();
        for (int i = rowCount - 1; i >= 0; i--) {
            model.removeRow(i);
        }

        /*receiving flightlist from subscribed channel*/

        String[] valuelist;
        ByteArrayInputStream bais = new ByteArrayInputStream(mqttMessage.getPayload());
        DataInputStream in = new DataInputStream(bais);
        while (in.available() > 0) {
            String element = in.readUTF();
            valuelist = element.split(";");
            IATACode = valuelist[2];
            CarrierName = valuelist[3];
            FlightNum = valuelist[0];
            Direction = valuelist[1];
            DepartureAirport = valuelist[5];
            ArrivalAirport = valuelist[6];
            DepartureGate = valuelist[14];


            /*logic for displaying only departures from gates starting with B*/

            if(Direction.equals("2")){
                if(DepartureGate.substring(0,1).equals("B")) {

                    model.addRow(new Object[]{IATACode,CarrierName,FlightNum,DepartureAirport,ArrivalAirport,DepartureGate});
                }}

            // System.out.println(element + "received");
            //System.out.println("Message received:\n\t"+ new String(mqttMessage.getPayload()) );
        }}

    public void deliveryComplete(IMqttDeliveryToken iMqttDeliveryToken) {
        // not used in this example
    }
}
