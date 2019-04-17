package clients;

import javax.swing.JFrame;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.JPanel;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.border.LineBorder;
import java.awt.Color;
import java.awt.BorderLayout;
import javax.swing.table.DefaultTableCellRenderer;
import java.awt.GridBagConstraints;
import java.awt.Insets;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;


public class Flist extends JFrame {

    private static String setUsername;
    private static String setDay;
    private static String setFlightClass;
    private static String airline = "";
    private static String flightSelect = "";
    private JTable table;
    private JPanel contentPane;
    private static String fetchurl = "http://localhost:8080/getBoeingUF";

    String fetchURLRow = "http://localhost:8080/fetchSeatsRow";
    String fetchURLColumn = "http://localhost:8080/fetchSeatsColumn";
    String fetchURLPrice = "http://localhost:8080/fetchSeatPrice";

    ArrayList<String> opRowValue= new ArrayList<String>();
    ArrayList<String> opColumnValue = new ArrayList<String>();
    ArrayList<String> opPriceValue = new ArrayList<String>();
    String outputRow = "";
    String outputColumn = "";
    String outputPrice = "";



    public Flist(String username, String day, String flight, String flightclass) {
        setUsername = username;
        setDay = day;
        setFlightClass = flightclass;
        airline = flight;
        setTitle("Dashboard - " + username);

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setResizable(false);
        setBounds(100, 100, 400, 250);
        contentPane = new JPanel();
        contentPane.setBorder(new LineBorder(new Color(0, 0, 0)));
        setContentPane(contentPane);

        table = new JTable(new DefaultTableModel(new Object[]{ "No", "Airline", "Destination"}, 0));
        DefaultTableModel model = (DefaultTableModel) table.getModel();
        DefaultTableCellRenderer centerRenderer = new DefaultTableCellRenderer();
        centerRenderer.setHorizontalAlignment( JLabel.LEFT );
        table.setDefaultRenderer(String.class, centerRenderer);
        table.setShowGrid(false);
        table.setBorder(null);
        table.setFont(new Font("Arial", Font.PLAIN, 14));

        contentPane.add(table.getTableHeader(), BorderLayout.NORTH);
        contentPane.add(table);

        if(flight.equals("Boeing")) {

            model.insertRow(0, new Object[]{"1", "Boeing 777", "Frankfurt"});
            model.insertRow(1, new Object[]{"2", "Boeing 787", "Berlin"});
            model.insertRow(2, new Object[]{"3", "Boeing 797", "Munich"});
        }
        else if(flight.equals("Airbus")) {
            model.insertRow(0, new Object[]{"1", "Airbus A70", "Frankfurt"});
            model.insertRow(1, new Object[]{"2", "Airbus A80", "Berlin"});
            model.insertRow(2, new Object[]{"3", "Airbus A90", "Munich"});
        }else if(flight.equals("Embraer")) {
            model.insertRow(0, new Object[]{"1", "Embraer 350", "Frankfurt"});
            model.insertRow(1, new Object[]{"2", "Embraer 360", "Berlin"});
            model.insertRow(2, new Object[]{"3", "Embraer 370", "Munich"});
        }

        final JButton btnSelect = new JButton("Select");
        btnSelect.setForeground(Color.BLUE);
        btnSelect.setFont(new Font("Tahoma", Font.BOLD, 14));
        GridBagConstraints gbc_btnSelect = new GridBagConstraints();
        gbc_btnSelect.insets = new Insets(0, 0, 0, 5);
        gbc_btnSelect.gridx = 3;
        gbc_btnSelect.gridy = 8;
        contentPane.add(btnSelect, gbc_btnSelect);


        btnSelect.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                //getting flight number from click
                int srow = table.getSelectedRow();
                int scolumn = table.getSelectedColumn();
                switch(srow){
                    case 0: flightSelect = "A";break;
                    case 1: flightSelect = "B";break;
                    case 2: flightSelect = "C";break;

                }

                try{
                    fetchURLRow = fetchURLRow + "?flightSelect=" + airline + "&classSelect=" + setFlightClass;
                    fetchURLColumn = fetchURLColumn + "?flightSelect=" + airline + "&classSelect=" + setFlightClass;
                    fetchURLPrice = fetchURLPrice + "?classSelect=" + setFlightClass;
                    URL url1 = new URL(fetchURLRow);
                    URL url2 = new URL(fetchURLColumn);
                    URL url3 = new URL(fetchURLPrice);
                    HttpURLConnection conn1 = (HttpURLConnection) url1.openConnection();
                    HttpURLConnection conn2 = (HttpURLConnection) url2.openConnection();
                    HttpURLConnection conn3 = (HttpURLConnection) url3.openConnection();

                    conn1.setRequestMethod("GET");

                    if (conn1.getResponseCode() != 200) {
                        throw new RuntimeException("Failed : HTTP error code : "
                                + conn1.getResponseCode());
                    }

                    BufferedReader br1 = new BufferedReader(new InputStreamReader(
                            (conn1.getInputStream())));

                    System.out.println("Output from Server .... \n");
                    while ((outputRow = br1.readLine()) != null) {
                        opRowValue.add(outputRow);
                        System.out.println(outputRow);
                    }


                    conn1.disconnect();


                    conn2.setRequestMethod("GET");
                    //conn.setRequestProperty("Accept", "application/json");

                    if (conn2.getResponseCode() != 200) {
                        throw new RuntimeException("Failed : HTTP error code : "
                                + conn2.getResponseCode());
                    }

                    BufferedReader br2 = new BufferedReader(new InputStreamReader(
                            (conn2.getInputStream())));

                    System.out.println("Output from Server .... \n");
                    while ((outputColumn = br2.readLine()) != null) {
                        opColumnValue.add(outputColumn);
                        System.out.println(outputColumn);
                    }

                    conn2.disconnect();


                    conn3.setRequestMethod("GET");
                    //conn.setRequestProperty("Accept", "application/json");

                    if (conn3.getResponseCode() != 200) {
                        throw new RuntimeException("Failed : HTTP error code : "
                                + conn3.getResponseCode());
                    }

                    BufferedReader br3 = new BufferedReader(new InputStreamReader(
                            (conn3.getInputStream())));

                    System.out.println("Output from Server .... \n");
                    while ((outputPrice = br3.readLine()) != null) {
                        opPriceValue.add(outputPrice);
                        System.out.println(outputPrice);
                    }

                    conn2.disconnect();



                } catch (
                        MalformedURLException em) {

                    em.printStackTrace();

                } catch (
                        IOException ex) {

                    ex.printStackTrace();

                }


                selectSeat sn = new selectSeat(username, Integer.parseInt(opRowValue.get(0)), Integer.parseInt(opColumnValue.get(0)));
                sn.doSeatSelection(day, airline, setFlightClass, Integer.parseInt(opPriceValue.get(0)), flightSelect);
                sn.setVisible(true);

            }});



    }


}
