<?php
class Merchant extends CI_Controller {

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
			echo 'You dont have permission to access this page. <a href="../merchantlogin">Login</a> ';
			die();
		}
	}
        

        function merchant()
        {
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/home',$data);	

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
				$this->load->view('merchant/inactive_profile',$data);
			}
			
		}


		function lock_screen()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$this->load->view('merchant/lock_screen', $data);
			$this->session->sess_destroy();

		}

		function dashboard()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['counts'] = $this->Fetch->fetch_dashboard_count();
			$this->load->view('merchant/dashboard',$data);	
			
		}


		function profile()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/profile',$data);	

		}

		function profile_picture()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$this->load->model('Update_model');
			$img = $this->Update_model->profile_picture();
			redirect('merchant/profile');
		}

		function help()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/help',$data);	

		}

		function sproduct()
		{
				// $this->load->model('Fetch');
				// $data['records'] = $this->Fetch->fetch_profile();
				$this->load->model('Update_model');
				$img = $this->Update_model->sproduct();
				redirect('merchant/standard_ads');
		}

		function pproduct()
		{
		// 		$this->load->model('Fetch');
		// 		$data['records'] = $this->Fetch->fetch_profile();
				$this->load->model('Update_model');
				$img = $this->Update_model->pproduct();
				redirect('merchant/premium_ads');
		}

		function pevent()
		{
				// $this->load->model('Fetch');
				// $data['records'] = $this->Fetch->fetch_profile();
				$this->load->model('Update_model');
				$img = $this->Update_model->pevent();
				redirect('merchant/premium_ads#premium_event');
		}

		function sevent()
		{
				// $this->load->model('Fetch');
				// $data['records'] = $this->Fetch->fetch_profile();
				$this->load->model('Update_model');
				$img = $this->Update_model->sevent();
				redirect('merchant/standard_ads#standard_event');
		}

		function performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['fetch_transaction_by_month_count'] = $this->Fetch->fetch_transaction_by_month_count();
			$data['transaction_by_month_count'] = json_encode($data['fetch_transaction_by_month_count']);
			$data['fetch_revenue_by_month_count'] = $this->Fetch->fetch_revenue_by_month_count();
			$data['revenue_by_month_count'] = json_encode($data['fetch_revenue_by_month_count']);
			$data['fetch_product_count'] = $this->Fetch->fetch_product_count();
			$data['product_count'] = json_encode($data['fetch_product_count']);
			$data['fetch_unit_sold_by_month_count'] = $this->Fetch->fetch_unit_sold_by_month_count();
			$data['unit_sold_by_month_count'] = json_encode($data['fetch_unit_sold_by_month_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/pmetrics',$data);
		}

		function transactions_performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_transaction_by_year_count'] = $this->Fetch->fetch_transaction_by_year_count();
			//$data['transaction_by_year_count'] = json_encode($data['fetch_transaction_by_year_count']);
			$data['fetch_transaction_by_month_count'] = $this->Fetch->fetch_transaction_by_month_count();
			$data['transaction_by_month_count'] = json_encode($data['fetch_transaction_by_month_count']);
			$data['fetch_transaction_by_day_count'] = $this->Fetch->fetch_transaction_by_day_count();
			$data['transaction_by_day_count'] = json_encode($data['fetch_transaction_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/transactions_pmetrics',$data);
		}

		function transactions_performance_metrics_1()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_transaction_by_year_count'] = $this->Fetch->fetch_transaction_by_year_count();
			//$data['transaction_by_year_count'] = json_encode($data['fetch_transaction_by_year_count']);
			$data['fetch_transaction_by_month_count'] = $this->Fetch->fetch_transaction_by_month_count_1($_GET['start'],$_GET['end']);
			$data['transaction_by_month_count'] = json_encode($data['fetch_transaction_by_month_count']);
			$data['fetch_transaction_by_day_count'] = $this->Fetch->fetch_transaction_by_day_count_1($_GET['start'],$_GET['end']);
			$data['transaction_by_day_count'] = json_encode($data['fetch_transaction_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/transactions_pmetrics',$data);
		}

		function gross_revenue_performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_revenue_by_year_count'] = $this->Fetch->fetch_revenue_by_year_count();
			//$data['revenue_by_year_count'] = json_encode($data['fetch_revenue_by_year_count']);
			$data['fetch_revenue_by_month_count'] = $this->Fetch->fetch_revenue_by_month_count();
			$data['revenue_by_month_count'] = json_encode($data['fetch_revenue_by_month_count']);
			$data['fetch_revenue_by_day_count'] = $this->Fetch->fetch_revenue_by_day_count();
			$data['revenue_by_day_count'] = json_encode($data['fetch_revenue_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/gross_revenue_pmetrics',$data);
		}
		function gross_revenue_performance_metrics_1()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_revenue_by_year_count'] = $this->Fetch->fetch_revenue_by_year_count();
			//$data['revenue_by_year_count'] = json_encode($data['fetch_revenue_by_year_count']);
			$data['fetch_revenue_by_month_count'] = $this->Fetch->fetch_revenue_by_month_count_1($_GET['start'],$_GET['end']);
			$data['revenue_by_month_count'] = json_encode($data['fetch_revenue_by_month_count']);
			$data['fetch_revenue_by_day_count'] = $this->Fetch->fetch_revenue_by_day_count_1($_GET['start'],$_GET['end']);
			$data['revenue_by_day_count'] = json_encode($data['fetch_revenue_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/gross_revenue_pmetrics',$data);
		}

		function unit_sold_performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_unit_sold_by_year_count'] = $this->Fetch->fetch_unit_sold_by_year_count();
			//$data['unit_sold_by_year_count'] = json_encode($data['fetch_unit_sold_by_year_count']);
			$data['fetch_unit_sold_by_month_count'] = $this->Fetch->fetch_unit_sold_by_month_count();
			$data['unit_sold_by_month_count'] = json_encode($data['fetch_unit_sold_by_month_count']);
			$data['fetch_unit_sold_by_day_count'] = $this->Fetch->fetch_unit_sold_by_day_count();
			$data['unit_sold_by_day_count'] = json_encode($data['fetch_unit_sold_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/unit_sold_pmetrics',$data);
		}
		function unit_sold_performance_metrics_1()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			//$data['fetch_unit_sold_by_year_count'] = $this->Fetch->fetch_unit_sold_by_year_count();
			//$data['unit_sold_by_year_count'] = json_encode($data['fetch_unit_sold_by_year_count']);
			$data['fetch_unit_sold_by_month_count'] = $this->Fetch->fetch_unit_sold_by_month_count_1($_GET['start'],$_GET['end']);
			$data['unit_sold_by_month_count'] = json_encode($data['fetch_unit_sold_by_month_count']);
			$data['fetch_unit_sold_by_day_count'] = $this->Fetch->fetch_unit_sold_by_day_count_1($_GET['start'],$_GET['end']);
			$data['unit_sold_by_day_count'] = json_encode($data['fetch_unit_sold_by_day_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/unit_sold_pmetrics',$data);
		}

		function product_performance_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['fetch_product_count'] = $this->Fetch->fetch_product_count();
			$data['product_count'] = json_encode($data['fetch_product_count']);
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records5'] = $this->Fetch->fetch_singles();
			$data['records6'] = $this->Fetch->fetch_transaction();
			$this->load->view('merchant/product_pmetrics',$data);
		}

		function ad_metrics()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['records4'] = $this->Fetch->fetch_adlist();
			$this->load->view('merchant/ametrics',$data);
		}

		function ad_metrics_details()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['item_details'] = $this->Fetch->fetch_item_details($_GET['advertid']);
			$data['ad_view_day_count'] = json_encode($data['item_details'][3]);
			$data['ad_click_day_count'] = json_encode($data['item_details'][4]);
			$data['purchase_day_count'] = json_encode($data['item_details'][5]);
			// print_r($data['ad_view_day_count']); die;
			$this->load->view('merchant/ametrics_details',$data);
		}

		function transactions()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$data['transactions'] = $this->Fetch->fetch_transactions();
			$this->load->view('merchant/transactions',$data);
		}

		function qrcode()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/qrcode',$data);
		}

		function manager_qrcode()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/manager_qrcode',$data);
		}

		function myoutlets()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/outlets',$data);
		}

		function standard_ads()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/standard_ads',$data);
		}

		function premium_ads()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('merchant/premium_ads',$data);
		}
}
