<?php
class MerchantLogin extends CI_Controller {

        function index()
        {
                
                $this->load->view('merchant/login');
        }

        function validate_credentials()
        {
        	$this->load->model('membership_model');
			$query = $this->membership_model->validate();
			// print_r($_POST);die;
			if($query)
			{	

				$data = array(
	       						 'username' => $this->input->post('username'),
	       						 'is_logged_in'  => true
	       						 
	       						 
							);

				
				$this->session->set_userdata($data);

				if($query == 'Admin')
				{
					redirect('merchant/admin');
				}
				elseif($query == 'Manager')
				{
					if($_POST['location'] !='')
					{
						$location = explode('/',$_POST['location']);
						
						$r_url = $location[3].'/'.$location[4];
						redirect($r_url);
					}
					redirect('merchant/dashboard');
					
				}
				else
				{
					redirect('home/admin_pending');
				}
			}

			else
			{
				$data['err'] = "Username or Password is incorrect";
				$this->load->view('merchant/login', $data);

			}

        }
}
