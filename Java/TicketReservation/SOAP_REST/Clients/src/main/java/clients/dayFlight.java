package clients;

import javax.swing.*;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.util.ArrayList;



public class dayFlight extends JFrame{

    private JPanel contentPane;
    private JComboBox day;
    private JComboBox flight;
    private JComboBox seatClass;
    private JButton btnNewButton;

    int rows = 0;
    int columns = 0;

    public dayFlight() {}

    public void selectDayFlight(String username) {

        //setting the title and frame data
        setTitle("Dashboard - " + username);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 311, 180);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);

        JLabel userlabel = new JLabel("Select day and flight:");
        userlabel.setFont(new Font("Helvetica", Font.BOLD, 15));
        contentPane.add(userlabel);

        day = new JComboBox();
        day.addItem("Monday");
        day.addItem("Tuesday");
        day.addItem("Wednesday");
        day.addItem("Thursday");
        day.addItem("Friday");
        day.addItem("Saturday");
        day.addItem("Sunday");
        contentPane.add(day);


        flight = new JComboBox();
        flight.addItem("Boeing");
        flight.addItem("Airbus");
        flight.addItem("Embraer");
        contentPane.add(flight);


        seatClass = new JComboBox();
        seatClass.addItem("UnitedFirst");
        seatClass.addItem("EconomyPlus");
        seatClass.addItem("Economy");
        contentPane.add(seatClass);


        btnNewButton = new JButton("Confirm");
        btnNewButton.setFont(new Font("Helvetica", Font.BOLD, 15));
        btnNewButton.setBounds(10, 50, 90, 70);
        btnNewButton.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e){

                String daySelection = day.getSelectedItem().toString();
                String flightSelection = flight.getSelectedItem().toString();
                String classSelection = seatClass.getSelectedItem().toString();


                System.out.println(daySelection + " was selected");
                System.out.println(flightSelection + " was selected");
                System.out.println(classSelection + "Was selected");

                Flist mainpg = new Flist(username, daySelection, flightSelection, classSelection);
                mainpg.setVisible(true);

                dispose();

            }


        });
        contentPane.add(btnNewButton);


    }




}
