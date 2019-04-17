package clients;

import java.awt.*;
import java.awt.event.*;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import javax.swing.*;
import javax.swing.border.EmptyBorder;
import java.util.ArrayList;

public class selectSeat extends JFrame{

    private static JPanel contentPane;

    private static int rows_local = 0;
    private static int columns_local = 0;
    private static String preserveUserName = "";
    private static String rowIndex = "";

    String reserveURL = "";
    ArrayList<String> opValue = new ArrayList<String>();



    public selectSeat(String username, int rows, int columns) {

        rows_local = rows;
        columns_local = columns;
        preserveUserName = username;

        setTitle("Dashboard - " + username);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 500, 600);
        contentPane = new JPanel(new GridLayout(rows_local, columns_local));
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);
    }


    //function to convert row array index into seat numbering
    public String rowConvert(int row){
        switch(row){
            case 0: rowIndex = "A";break;
            case 1: rowIndex = "B";break;
            case 2: rowIndex = "C";break;
            case 3: rowIndex = "D";break;
            case 4: rowIndex = "E";break;
            case 5: rowIndex = "F";break;
            case 6: rowIndex = "G";break;
            case 7: rowIndex = "H";break;
            case 8: rowIndex = "I";break;
            case 9: rowIndex = "J";break;
        }
        return rowIndex;
    }
    public void doSeatSelection(String day, String fl, String cl, int price, String selectedFlight) {


        for (int row = 0; row < rows_local; row++) {
            for (int column = 0; column < columns_local; column++) {
                final JToggleButton button = new JToggleButton("€ " + price);
                final int currentRowValue = row;
                final int currentColumnValue = column;
                button.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent actionEvent) {
                        AbstractButton abstractButton = (AbstractButton) actionEvent.getSource();
                        boolean selected = abstractButton.getModel().isSelected();

                        if (selected) {

                            try {


                                if (fl.equals("Boeing")) {
                                    reserveURL = "http://localhost:8080/reserveBoeing?day=" + day +
                                            "&class=" + cl + "&row=" + currentRowValue + "&column=" + currentColumnValue
                                            + "&selectedFlight=" + selectedFlight;
                                } else if (fl.equals("Airbus")) {
                                    reserveURL = "http://localhost:8080/reserveAirbus?day=" + day +
                                            "&class=" + cl + "&row=" + currentRowValue + "&column=" + currentColumnValue
                                            + "&selectedFlight=" + selectedFlight;
                                } else if (fl.equals("Embraer")) {
                                    reserveURL = "http://localhost:8080/reserveEmbraer?day=" + day +
                                            "&class=" + cl + "&row=" + currentRowValue + "&column=" + currentColumnValue
                                            + "&selectedFlight=" + selectedFlight;
                                }

                                URL url = new URL(reserveURL);
                                HttpURLConnection conn = (HttpURLConnection) url.openConnection();
                                conn.setRequestMethod("GET");

                                if (conn.getResponseCode() != 200) {
                                    throw new RuntimeException("Failed : HTTP error code : "
                                            + conn.getResponseCode());
                                }

                                BufferedReader br = new BufferedReader(new InputStreamReader(
                                        (conn.getInputStream())));

                                String output = "";
                                System.out.println("Output from Server .... \n");
                                while ((output = br.readLine()) != null) {
                                    opValue.add(output);
                                }


                                conn.disconnect();

                            } catch (MalformedURLException em) {

                                em.printStackTrace();

                            } catch (IOException ex) {

                                ex.printStackTrace();

                            }

                            if(opValue.get(0).equals("1")){

                                Object[] possibleValues = { "Veg", "Non - Veg"};
                                Object selectedValue = JOptionPane.showInputDialog(null,
                                        "Choose meal", "Input",
                                        JOptionPane.INFORMATION_MESSAGE, null,
                                        possibleValues, possibleValues[0]);
                                JOptionPane.showMessageDialog(null, "Seat " +
                                        rowConvert(currentRowValue) + " " + (currentColumnValue + 1)+ " reserved successfully with "
                                        + selectedValue.toString() + " meal");

                                dayFlight mainpg = new dayFlight();
                                mainpg.selectDayFlight(preserveUserName);
                                mainpg.setVisible(true);


                            }
                            else{
                                JOptionPane.showMessageDialog(null, "Seat " +
                                        rowConvert(currentRowValue) + " " + (currentColumnValue + 1) + " was already reserved. Try again ");
                                dayFlight mainpg = new dayFlight();
                                mainpg.selectDayFlight(preserveUserName);
                                mainpg.setVisible(true);
                            }

                            dispose();

                        }

                    }
                });
                contentPane.add(button);
            }
        }

    }
}
