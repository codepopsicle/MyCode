package com.tk1mqtt;

import java.awt.*;

import javax.swing.AbstractAction;
import javax.swing.Action;
import javax.swing.ActionMap;
import javax.swing.InputMap;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JLabel;
import javax.swing.JButton;
import javax.swing.JOptionPane;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.rmi.Naming;
import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.util.ArrayList;

import javax.swing.border.LineBorder;
import javax.swing.table.DefaultTableCellRenderer;
import javax.swing.table.DefaultTableModel;
import javax.swing.JTable;
import javax.swing.UIManager;
import javax.swing.JTextArea;
import javax.swing.SwingConstants;
import javax.swing.border.BevelBorder;




public class ClientGUI extends JFrame
{

    private JPanel contentPane;
    public String username;
    private JTable table;
    ArrayList<String> flightlist = new ArrayList<String>();
    String[] values;
    String IATACode = "";
    String CarrierName = "";
    String FlightNum = "";
    String DepartureAirport = "";
    String ArrivalAirport = "";
    String Direction = "";


	/*
	public static void main(String[] args)
	 {
		EventQueue.invokeLater(new Runnable()
		{
			public void run()
			{
				try
				{
					ClientGUI frame = new ClientGUI("1234");
					frame.setVisible(true);
				} catch (Exception e)
				{
					e.printStackTrace();
				}
			}
		}
		);
	}
	*/




    // Create the frame.

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

    public ClientGUI(final String username)
    {
        /*logic to retrieve flight list */

        try{
            ObjectInterfaceServer stub = (ObjectInterfaceServer)Naming.lookup("ObjectInterfaceServer");
            flightlist = stub.justCall();
        }catch(Exception e){
            System.err.println("Server exception: " + e.toString());
            e.printStackTrace();
        }



        this.username=username;
        setTitle("TK1 Schedule - "+ username);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setResizable(false);
        setBounds(100, 100, 500, 400);
        contentPane = new JPanel();
        contentPane.setBorder(new LineBorder(new Color(0, 0, 0)));
        setContentPane(contentPane);
        //populates the schedule page at run time from the flight list

        JTable table = new JTable(new DefaultTableModel(new Object[]{ "IATA Code", "Name", "Flight No:", "Departure" , "Arrival", "Direction"}, 0));
        DefaultTableModel model = (DefaultTableModel) table.getModel();
        System.out.println("Size of the flightlist array: "+ flightlist.size());

        DefaultTableCellRenderer centerRenderer = new DefaultTableCellRenderer();
        centerRenderer.setHorizontalAlignment( JLabel.LEFT );
        table.setDefaultRenderer(String.class, centerRenderer);
        table.setShowGrid(false);
        table.setBorder(null);
        table.setFont(new Font("Arial", Font.PLAIN, 14));

        contentPane.add(table.getTableHeader(), BorderLayout.NORTH);
        contentPane.add(table);


        /*add flight logic

         */

        final JButton btnAdd = new JButton("Add");
        btnAdd.setLocation(20,20);
        btnAdd.setVerticalAlignment(SwingConstants.BOTTOM);
        btnAdd.setBackground(UIManager.getColor("Button.background"));
        btnAdd.setFont(new Font("Tahoma", Font.BOLD, 15));
        btnAdd.setForeground(new Color(0, 0, 255));

        GridBagConstraints gbc_btnAdd = new GridBagConstraints();
        gbc_btnAdd.insets = new Insets(0, 0, 0, 5);
        gbc_btnAdd.gridx = 2;
        gbc_btnAdd.gridy = 8;
        contentPane.add(btnAdd, gbc_btnAdd);

        /*get arraylist of flight
        * This loop populates the table with flights
        * */

        for(int i=0; i<flightlist.size(); i++) {
            values = flightlist.get(i).split(";");
            IATACode = values[2];
            CarrierName = values[3];
            FlightNum = values[0];
            Direction = values[1];
            DepartureAirport = values[5];
            ArrivalAirport = values[6];
            model.addRow(new Object[]{IATACode,CarrierName,FlightNum,DepartureAirport,ArrivalAirport, getDirection(Direction)});
        }


        btnAdd.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                Object[] possibleValues = { "Arrival", "Departure"};
                Object selectedValue = JOptionPane.showInputDialog(null,
                        "Choose direction", "Input",
                        JOptionPane.INFORMATION_MESSAGE, null,
                        possibleValues, possibleValues[0]);

                dispose();

                rowData mainpg = new rowData(btnAdd.getText(),username, selectedValue.toString());
                mainpg.setVisible(true);
            }});


        /*edit flight logic

         */

        final JButton btnEdit = new JButton("Edit");
        btnEdit.setForeground(Color.BLUE);
        btnEdit.setFont(new Font("Tahoma", Font.BOLD, 14));
        GridBagConstraints gbc_btnEdit = new GridBagConstraints();
        gbc_btnEdit.insets = new Insets(0, 0, 0, 5);
        gbc_btnEdit.gridx = 3;
        gbc_btnEdit.gridy = 8;
        contentPane.add(btnEdit, gbc_btnEdit);

        btnEdit.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                //getting flight number from click
                int srow = table.getSelectedRow();
                int scolumn = table.getSelectedColumn();
                String extractFlight = table.getValueAt(srow, scolumn).toString();
                editFlight callEdit = new editFlight(extractFlight);
                callEdit.setVisible(true);
            }});


        /*delete flight logic

        */


        JButton btnDelete = new JButton("Delete");
        btnDelete.setFont(new Font("Tahoma", Font.BOLD, 14));
        btnDelete.setForeground(Color.BLUE);
        GridBagConstraints gbc_btnDelete = new GridBagConstraints();
        gbc_btnDelete.insets = new Insets(0, 0, 0, 5);
        gbc_btnDelete.gridx = 4;
        gbc_btnDelete.gridy = 8;
        contentPane.add(btnDelete, gbc_btnDelete);


        btnDelete.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                //getting flight from click
                int srow1 = table.getSelectedRow();
                int scolumn1 = table.getSelectedColumn();
                String extractFlightNum = table.getValueAt(srow1, scolumn1).toString();
                //calling the delete flight function
                try{
                    ObjectInterfaceServer stub = (ObjectInterfaceServer)Naming.lookup("ObjectInterfaceServer");
                    stub.deleteFlight(extractFlightNum);
                }catch(Exception ex){
                    System.err.println("Server exception: " + e.toString());
                    ex.printStackTrace();
                }
                //Deleteflight mainpg = new Deleteflight();
                //mainpg.setVisible(true);
            }});

        JLabel Note= new JLabel("Please select the flight number before trying to edit any information");
        contentPane.add(Note);

    }

}

