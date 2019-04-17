<?php
class Register extends CI_Controller {

	 //    function register()
  //       {
		// 		$records  = array('none' => 'none' );
		// 		$this->load->view('register',$records);

		// }  

  //       function reg_admin()
  //       {
		// 		$records = array('username' => $this->input->post('username'),
		// 								'password' => $this->input->post('password'),
		// 								'brandname' => $this->input->post('brandname'),
		// 								'companyname' => $this->input->post('companyname'),
		// 								'email'=> $this->input->post('email'),
		// 								'regaddr'=> $this->input->post('address'),
		// 								'city'=> $this->input->post('city'),
										
		// 							 );
		// 		$this->load->view('register',$records);

		// }

		function final_register()
		{
			$this->load->model('Update_model');
			$this->Update_model->newreg();
			$this->load->view('login');
		}

}