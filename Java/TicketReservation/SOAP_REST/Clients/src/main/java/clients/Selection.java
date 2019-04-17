package clients;


import java.awt.EventQueue;

import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JPanel;
import java.awt.GridBagLayout;

import javax.swing.JLabel;

import java.awt.GridBagConstraints;
import java.awt.Font;
import java.awt.Insets;
import javax.swing.JButton;

import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Selection extends JFrame {

    private JPanel contentPane;
    private static String usernm;
    private JComboBox<String> comboBox;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    Selection frame = new Selection("Deveena");
                    frame.setVisible(true);
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }

    /**
     * Create the frame.
     */
    public Selection(String username) {
        usernm = username;
        setTitle("Welcome "+ username + "!");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        setBounds(100, 100, 450, 300);
        GridBagLayout gridBagLayout = new GridBagLayout();
        gridBagLayout.columnWidths = new int[]{0, 0, 0, 0};
        gridBagLayout.rowHeights = new int[]{0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0};
        gridBagLayout.columnWeights = new double[]{0.0, 0.0, 1.0, Double.MIN_VALUE};
        gridBagLayout.rowWeights = new double[]{0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, Double.MIN_VALUE};
        getContentPane().setLayout(gridBagLayout);

        JLabel lblFlightNumber = new JLabel("Flight Number");
        lblFlightNumber.setFont(new Font("Tahoma", Font.BOLD, 14));
        GridBagConstraints gbc_lblFlightNumber = new GridBagConstraints();
        gbc_lblFlightNumber.gridwidth = 2;
        gbc_lblFlightNumber.insets = new Insets(0, 0, 5, 5);
        gbc_lblFlightNumber.gridx = 0;
        gbc_lblFlightNumber.gridy = 2;
        getContentPane().add(lblFlightNumber, gbc_lblFlightNumber);

        comboBox = new JComboBox<String>();
        comboBox.addItem("Airbus319");
        comboBox.addItem("Airbus320");
        comboBox.addItem("Airbus321");
        comboBox.addItem("Boeing737");
        comboBox.addItem("Boeing738");
        comboBox.addItem("Boeing739");
        comboBox.addItem("Embraer170");
        comboBox.addItem("Embraer171");
        comboBox.addItem("Embraer172");

        GridBagConstraints gbc_comboBox = new GridBagConstraints();
        gbc_comboBox.insets = new Insets(0, 0, 5, 0);
        gbc_comboBox.fill = GridBagConstraints.HORIZONTAL;
        gbc_comboBox.gridx = 2;
        gbc_comboBox.gridy = 2;
        getContentPane().add(comboBox, gbc_comboBox);

        JLabel lblDay = new JLabel("Day");
        lblDay.setFont(new Font("Tahoma", Font.BOLD, 14));
        GridBagConstraints gbc_lblDay = new GridBagConstraints();
        gbc_lblDay.gridwidth = 2;
        gbc_lblDay.insets = new Insets(0, 0, 5, 5);
        gbc_lblDay.gridx = 0;
        gbc_lblDay.gridy = 4;
        getContentPane().add(lblDay, gbc_lblDay);

        JComboBox<String> comboBox_1 = new JComboBox<String>();
        comboBox_1.addItem("Sunday");
        comboBox_1.addItem("Monday");
        comboBox_1.addItem("Tuesday");
        comboBox_1.addItem("Wednesday");
        comboBox_1.addItem("Thursday");
        comboBox_1.addItem("Friday");
        comboBox_1.addItem("Saturday");
        GridBagConstraints gbc_comboBox_1 = new GridBagConstraints();
        gbc_comboBox_1.insets = new Insets(0, 0, 5, 0);
        gbc_comboBox_1.fill = GridBagConstraints.HORIZONTAL;
        gbc_comboBox_1.gridx = 2;
        gbc_comboBox_1.gridy = 4;
        getContentPane().add(comboBox_1, gbc_comboBox_1);

        JButton btnNewButton = new JButton("Submit!");
        btnNewButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                dispose();

                AirplaneInterior mainpg = new AirplaneInterior(comboBox.getSelectedItem().toString(), usernm);
                //comboBox_1.getSelectedItem().,comboBox_2.getSelectedItem());
                mainpg.setVisible(true);

            }
        });
        GridBagConstraints gbc_btnNewButton = new GridBagConstraints();
        gbc_btnNewButton.insets = new Insets(0, 0, 5, 0);
        gbc_btnNewButton.gridx = 2;
        gbc_btnNewButton.gridy = 8;
        getContentPane().add(btnNewButton, gbc_btnNewButton);



    }

}
