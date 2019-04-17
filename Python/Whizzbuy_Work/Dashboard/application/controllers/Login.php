<?php
class Login extends CI_Controller {

        function index()
        {
                $this->load->view('login');
        }

        function validate_credentials()
        {
        	$this->load->model('membership_model');
			$query = $this->membership_model->validate();

			if($query)
			{	

				$data = array(
	       						 'username' => $this->input->post('username'),
	       						 'is_logged_in'  => true
	       						 
	       						 
							);

				
				$this->session->set_userdata($data);

				if($query == 'Admin')
				{
					redirect('home/admin');
				}
				elseif($query == 'Manager')
				{
					redirect('home/manager');
				}
				else
				{
					redirect('home/admin_pending');
				}
			}

			else
			{
				$this->load->view('login');
			}

        }
}