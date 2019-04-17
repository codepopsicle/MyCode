package clients;

import java.awt.BorderLayout;
import java.awt.Dimension;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import java.awt.GridLayout;

import javax.swing.JLabel;

import java.awt.Font;

import javax.swing.JFormattedTextField;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.ImageIcon;

import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.text.NumberFormat;

import javax.swing.SwingConstants;
import javax.swing.JToggleButton;


public class Logins extends JFrame {

    private JPanel contentPane;
    public JTextField username,username_1;
    private JButton btnNewButton;
    private JLabel lblPleaseEnterYour;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    Logins frame = new Logins();
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
    public Logins()
    {
        //setting the title and frame data
        setTitle("Ticket Reservation - SOAP");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 515, 281);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);

        JLabel userlabel = new JLabel("Please enter your username:");
        userlabel.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        contentPane.add(userlabel);

        username = new JTextField();
        username.setHorizontalAlignment(SwingConstants.CENTER);
        username.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        username.setColumns(20);
        contentPane.add(username);

        lblPleaseEnterYour = new JLabel("Please enter your age:");
        lblPleaseEnterYour.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        lblPleaseEnterYour.setVerticalAlignment(SwingConstants.TOP);
        lblPleaseEnterYour.setHorizontalAlignment(SwingConstants.LEFT);
        contentPane.add(lblPleaseEnterYour);

        username_1 = new JTextField();
        username_1.setHorizontalAlignment(SwingConstants.CENTER);
        username_1.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        username_1.setColumns(10);
        contentPane.add(username_1);

        btnNewButton = new JButton("Login!");
        btnNewButton.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        btnNewButton.setBounds(10, 50, 90, 70);
        btnNewButton.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                Selection mainpg = new Selection(username.getText());
                mainpg.setVisible(true);
            }
        });
        contentPane.add(btnNewButton);

    }

}
