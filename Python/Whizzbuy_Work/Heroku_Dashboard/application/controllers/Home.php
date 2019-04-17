<?php
class Home extends CI_Controller {

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
			echo 'You dont have permission to access this page. <a href="../login">Login</a> ';
			die();
		}
	}
        

        function merchant()
        {
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('home',$data);	

		}

		function admin()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$active = $this->Fetch->status();
			if ($active === '1') {
				$this->performance_metrics();
			}
			else {
				$this->load->view('inactive_profile',$data);
			}
			
		}

		function manager()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('manager_transactions',$data);
		}

		function logout()
		{
			$this->session->sess_destroy();
			$this->load->view('login');

		}

		// function lock_screen()
		// {
		// 	$this->session->sess_destroy();
		// 	$this->load->view('admin/lock_screen');

		// }
		function adminlogout()
		{
			$this->session->sess_destroy();
			$this->load->view('adminlogin');

		}

		function adminlock_screen()
		{
			$this->session->sess_destroy();
			$this->load->view('adminlock_screen');

		}
		function profile()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('profile',$data);	

		}

		function sproduct()
		{
			
				$this->load->model('Update_model');
				$img = $this->Update_model->sproduct();
				
			
			$this->admin();
		}

		function pproduct()
		{
			
				$this->load->model('Update_model');
				$img = $this->Update_model->pproduct();
				
			
			$this->admin();
		}

		function pevent()
		{
			
				$this->load->model('Update_model');
				$img = $this->Update_model->pevent();
				
			
			$this->admin();
		}

		function sevent()
		{
			
				$this->load->model('Update_model');
				$img = $this->Update_model->sevent();
				
			
			$this->admin();
		}

		function performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('pmetrics',$data);
		}

		function ad_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records4'] = $this->Fetch->fetch_adlist();
			$this->load->view('ametrics',$data);
		}

		function transactions()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records3'] = $this->Fetch->fetch_transactions();
			$this->load->view('transactions',$data);
		}

		function qrcode()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('qrcode',$data);
		}

		function manager_qrcode()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('manager_qrcode',$data);
		}

		function outlets()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('outlets',$data);
		}

		function standard_ads()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('standard_ads',$data);
		}

		function premium_ads()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('premium_ads',$data);
		}

		function admin_pending()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_pending_merchant();
			$this->load->view('admin_pending', $data);
		}

		function admin_approved()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_approved_merchant();
			$this->load->view('admin_approved', $data);
		}

		function admin_ad_pending()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_pending_ad();
			$this->load->view('admin_ad_pending', $data);
		}

		function admin_merchants()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_merchant_list();
			$data['records2'] = $this->Fetch->store_count();
			$data['records3'] = $this->Fetch->outlet_details();
			$this->load->view('admin_merchants',$data);
		}

		function admin_filter_lifestyle()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_lifestyle();
			$this->load->view('admin_filter_lifestyle', $data);
		}

		function admin_filter_city()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_city();
			$this->load->view('admin_filter_city', $data);
		}

		function admin_ad_metrics()
		{
			$this->load->view('admin_ad_metrics');
		}

		function admin_performance()
		{
			$this->load->view('admin_performance');
		}
}