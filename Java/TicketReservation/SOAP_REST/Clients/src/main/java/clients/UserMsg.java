package clients;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.SwingConstants;
import java.awt.Font;

public class UserMsg extends JFrame {

    private JPanel contentPane;

    /**
     * Launch the application.

     public static void main(String[] args) {
     EventQueue.invokeLater(new Runnable() {
     public void run() {
     try {
     UserMsg frame = new UserMsg("Booking Done!");
     frame.setVisible(true);
     } catch (Exception e) {
     e.printStackTrace();
     }
     }
     });
     }
     * Create the frame.
     */
    public UserMsg(String resverationMsg,String meal,int price) {
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 850, 200);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
        contentPane.setLayout(new BorderLayout(0, 0));
        setContentPane(contentPane);

        JLabel lblNewLabel = new JLabel(resverationMsg+" Price: "+price + "    Meal Type:"+meal);
        lblNewLabel.setFont(new Font("Comic Sans MS", Font.BOLD, 15));
        lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
        contentPane.add(lblNewLabel, BorderLayout.CENTER);

    }

}
