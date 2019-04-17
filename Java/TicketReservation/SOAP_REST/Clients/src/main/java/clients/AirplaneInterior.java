package clients;

import clients.ServicesService;
import clients.SOAPServerInterface;

import java.awt.BorderLayout;
import java.awt.Dimension;
import java.awt.EventQueue;
import java.awt.FlowLayout;
import java.awt.GridBagLayout;

import javax.swing.AbstractButton;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JToggleButton;

import java.awt.GridLayout;

import javax.swing.JTextField;
import javax.swing.JLabel;

import java.awt.GridBagConstraints;
import java.awt.Insets;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JRadioButton;
import javax.swing.JComboBox;


public class AirplaneInterior extends JFrame {
    /**
     *
     */
    private static final long serialVersionUID = 1L;
    private static String[] delimsplit;
    private static String[] commasplit;
    private static JPanel contentPane;
    private static String usernm;
    private String seatList;
    private String meal;
    private String seatNumber;
    private int price;

    /**
     * Launch the application.
     */
	/*public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					AirplaneInterior frame = new AirplaneInterior("Airbus319","Monday","11:00");
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
*/
    /**
     * Create the frame.
     */
    public AirplaneInterior(String flightNo,  String username) {
        final String flightNumber= flightNo;
        AirplaneInterior.usernm= username;
        setTitle("Please select the desirable seat for reservation!");
        setBounds(100, 100, 800, 800);
        contentPane = new JPanel(new GridLayout(0, 2));
        JPanel btnPnl = new JPanel(new FlowLayout(FlowLayout.CENTER));
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        ServicesService newcall = new ServicesService();
        final SOAPServerInterface call  = newcall.getServicesPort();

        seatList = call.flightList(flightNumber);
        //System.out.println(seatList);

        delimsplit = seatList.split(";");
        for(int i=0; i<delimsplit.length; i++){
            commasplit = delimsplit[i].split(",");

            final JToggleButton button = new JToggleButton(commasplit[0]+" "+commasplit[1]+" "+commasplit[2]);
            button.setSize(100,200);
            button.addActionListener(new ActionListener() {
                public void actionPerformed(ActionEvent actionEvent) {
                    price=Integer.parseInt(button.getText().substring(4,9));
                    System.out.println(price);
                    seatNumber = button.getText().substring(0,3);
                }
            });
            contentPane.add(button);
        }

        final JComboBox<String> MealType = new JComboBox<String>();
        MealType.addItem("Vegan");
        MealType.addItem("Standard");
        MealType.addItem("Vegetarian");
        contentPane.add(MealType, BorderLayout.SOUTH);
        MealType.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                meal =  (String) MealType.getSelectedItem();
            }});

        JButton button = new JButton("Reserve Seat!");
        btnPnl.add(button);
        contentPane.add(btnPnl, BorderLayout.SOUTH);
        button.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                String messageForUser = call.buyitems(usernm,flightNumber,seatNumber);

                UserMsg mainpg = new UserMsg(messageForUser, meal, price);
                mainpg.setVisible(true);
            }});

    }
}
