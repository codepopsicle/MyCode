<?php
class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You dont have permission to access this page. <a href="../adminlogin">Login</a> ';
			die();
		}
	}
        

        function merchant()
        {
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('home',$data);	

		}

		function admin()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$active = $this->Fetch->status();
			if ($active === '1') {
				$this->performance_metrics();
			}
			else {
				$this->load->view('inactive_profile',$data);
			}
			
		}

		
		function pending()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_pending_merchant();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/pending', $data);
		}

		function pendingdemo()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_pending_merchant();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/pendingdemo', $data);
		}

		function approved()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_approved_merchant();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/approved', $data);
		}

		function ad_pending()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_pending_ad();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/ad_pending', $data);
		}

		function merchants()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_merchant_list();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$data['records2'] = $this->Fetch->store_count();
			$data['records3'] = $this->Fetch->outlet_details();
			$this->load->view('admin/merchants',$data);
		}
		function transactions()
		{
			$this->load->model('Fetch');
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$data['transactions'] = $this->Fetch->fetch_transactions();
			// $data['merchants'] = $this->Fetch->fetch_merchant_list();
			// $data['records2'] = $this->Fetch->store_count();
			// $data['records3'] = $this->Fetch->outlet_details();
			$this->load->view('admin/transactions',$data);
		}
		function filter_lifestyle()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_lifestyle();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/filter_lifestyle', $data);
		}

		function filter_city()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_city();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/filter_city', $data);
		}

		function ad_metrics()
		{
			$this->load->view('admin/ad_metrics');
		}

		function performance()
		{
			$this->load->view('admin/performance');
		}
		function logout()
		{
			$this->session->sess_destroy();
			$this->load->view('adminlogin');

		}

		function parameters()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_parameters();
			$data['premiumadcount'] = $this->Fetch->fetch_adcount();
			$data['adperiod'] = $this->Fetch->fetch_adperiod();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/parameters', $data);
		}

		function customer()
		{
			$this->load->model('Fetch');
			$data['customers'] = $this->Fetch->fetch_customer();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin/customer', $data);
		}

		// function lock_screen()
		// {
		// 	$this->session->sess_destroy();
		// 	$this->load->view('admin/lock_screen');

		// }
		function profile()
        {
			$this->load->model('Fetch');
			$data['user'] = $this->Fetch->fetch_profile();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			// $data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('admin/profile',$data);	

		}
		function profile_help()
        {
			$this->load->model('Fetch');
			$data['user'] = $this->Fetch->fetch_profile();
			$data['pending_ads'] = $this->Fetch->fetch_pending_ad();
			$data['pending_merchants'] = $this->Fetch->fetch_pending_merchant();
			// $data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('admin/profile_help',$data);	

		}
		
}