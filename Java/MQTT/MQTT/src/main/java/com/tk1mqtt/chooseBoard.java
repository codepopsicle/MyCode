package com.tk1mqtt;

import org.eclipse.paho.client.mqttv3.*;
import org.eclipse.paho.client.mqttv3.MqttClient;
import org.eclipse.paho.client.mqttv3.MqttException;

import javax.swing.*;
import javax.swing.border.EmptyBorder;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;


public class chooseBoard extends JFrame {

    private static JComboBox cmb;
    private static JPanel contentPane;
    private static JButton btnNewButton;

    public chooseBoard() {


        //setting the title and frame data
        setTitle("Board GUI");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 311, 180);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);

        cmb = new JComboBox();
        cmb.addItem("Arrival & Departure");
        cmb.addItem("Departure");
        cmb.addItem("GateBoard");
        contentPane.add(cmb);

        btnNewButton = new JButton("Confirm");
        btnNewButton.setFont(new Font("Helvetica", Font.BOLD, 15));
        btnNewButton.setBounds(10, 50, 90, 70);
        contentPane.add(btnNewButton);
        btnNewButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                String comboinput = cmb.getSelectedItem().toString();
                if (comboinput.equals("Arrival & Departure")) {
                    try {
                        MqttClient client = new MqttClient("tcp://localhost:1883", MqttClient.generateClientId());
                        ArrivalDepartureBoard obj = new ArrivalDepartureBoard();
                        dispose();
                        obj.setVisible(true);
                        client.setCallback(obj);
                        client.connect();

                        client.subscribe("arrival_departure");
                    } catch (MqttException ef) {
                        System.out.println("Exception");
                    }


                } else if (comboinput.equals("Departure")) {
                    try {
                        MqttClient client = new MqttClient("tcp://localhost:1883", MqttClient.generateClientId());
                        DepartureBoard obj1 = new DepartureBoard();
                        dispose();
                        obj1.setVisible(true);
                        client.setCallback(obj1);
                        client.connect();

                        client.subscribe("departure");
                    } catch (MqttException ef) {
                        System.out.println("Exception");
                    }

                } else if (comboinput.equals("GateBoard")) {

                    Object[] possibleValues = {"B1", "B2", "B3"};
                    Object selectedValue = JOptionPane.showInputDialog(null,
                            "Select Gate", "Input",
                            JOptionPane.INFORMATION_MESSAGE, null,
                            possibleValues, possibleValues[0]);

                    try {
                        MqttClient client = new MqttClient("tcp://localhost:1883", MqttClient.generateClientId());
                        GateBoard obj2 = new GateBoard(selectedValue.toString());
                        dispose();
                        obj2.setVisible(true);
                        client.setCallback(obj2);
                        client.connect();

                        client.subscribe("gateBoard");
                    } catch (MqttException ef) {
                        System.out.println("Exception");
                    }
                }
            }


        });
        contentPane.add(btnNewButton);

        setVisible(true);


    }




    public static void main(String[] args) {
        chooseBoard obj = new chooseBoard();
    }
}

