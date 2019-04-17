package clients;


import java.awt.EventQueue;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.SwingConstants;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.MalformedURLException;



public class Login extends JFrame {

    public static String LoginURL = "http://localhost:8080/login/";


    private JPanel contentPane;
    public JTextField username;
    private JButton btnNewButton;

    /**
     * Launch the application.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    Login frame = new Login();
                    frame.setVisible(true);
                    frame.doLoginPage();
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }


    /**
     * Create the frame.
     */

    public Login() {}

    public void doLoginPage()
    {
        //setting the title and frame data
        setTitle("Ticket Reservation - REST");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 311, 180);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        setContentPane(contentPane);

        JLabel userlabel = new JLabel("Enter your username:");
        userlabel.setFont(new Font("Helvetica", Font.BOLD, 15));
        contentPane.add(userlabel);

        username = new JTextField();
        username.setHorizontalAlignment(SwingConstants.CENTER);
        username.setFont(new Font("Helvetica", Font.BOLD, 15));
        username.setColumns(20);
        contentPane.add(username);

        btnNewButton = new JButton("Login");
        btnNewButton.setFont(new Font("Helvetica", Font.BOLD, 15));
        btnNewButton.setBounds(10, 50, 90, 70);

        System.out.println("Entered this function");
        btnNewButton.addActionListener(new ActionListener()
        {
            public void actionPerformed(ActionEvent e)

            {   try{
                LoginURL = LoginURL + username.getText();
                URL url = new URL(LoginURL);
                HttpURLConnection conn = (HttpURLConnection) url.openConnection();
                conn.setRequestMethod("GET");

                if (conn.getResponseCode() != 200) {
                    throw new RuntimeException("Failed : HTTP error code : "
                            + conn.getResponseCode());
                }

                BufferedReader br = new BufferedReader(new InputStreamReader(
                        (conn.getInputStream())));

                String output;
                System.out.println("Output from Server .... \n");
                while ((output = br.readLine()) != null) {
                    System.out.println(output);
                }

                conn.disconnect();

            } catch (MalformedURLException em) {

                em.printStackTrace();

            } catch (IOException ex) {

                ex.printStackTrace();

            }


                dispose();
                dayFlight mainpg = new dayFlight();
                mainpg.selectDayFlight(username.getText());
                mainpg.setVisible(true);
            }
        });
        contentPane.add(btnNewButton);


    }


}
