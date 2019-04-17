<?php
class AdminLogin extends CI_Controller {

        function index()
        {
                $this->load->view('adminlogin');
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
				else
				{
					redirect('admin/pending');
				}
				
			}

			else
			{
				redirect('admin/admin');
				$this->load->view('adminlogin');
			}

        }
}
