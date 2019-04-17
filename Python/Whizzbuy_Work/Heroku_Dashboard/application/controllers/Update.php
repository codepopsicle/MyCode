<?php
class Update extends CI_Controller {

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
        
		function profile()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$data['records2'] = $this->Fetch->fetch_outlet();
			$this->load->view('profile',$data);	

		}
        
        function personal()
        {
			$this->load->model('Update_model');
			$this->Update_model->personal($this->session->userdata('username'));			
			$this->profile();	
		}

		function password()
        {
			$this->load->model('Update_model');
			$this->Update_model->password($this->session->userdata('username'));			
			$this->profile();	
		}

		function contact()
        {
			$this->load->model('Update_model');
			$this->Update_model->contact($this->session->userdata('username'));			
			$this->profile();
		}

		function outletadd()
		{
			$this->load->model('Update_model');
			$this->Update_model->newoutlet();			
			redirect('merchant/myoutlets');
		}

		function outlet()
		{
			$this->load->model('Update_model');
			$this->Update_model->outlet_update();			
			redirect('merchant/myoutlets');
		}

		function cancel()
		{
			$this->load->model('Update_model');
			$this->Update_model->cancel();
			redirect('home/ad_metrics');
		}

		function disable()
		{
			$this->load->model('Update_model');
			$this->Update_model->disable();
			redirect('home/ad_metrics');
		}

		function enable()
		{
			$this->load->model('Update_model');
			$this->Update_model->enable();
			redirect('home/ad_metrics');
		}

		function reupload()
		{
			$adtype = $this->uri->segment(4);
			$pricing = $this->uri->segment(5);
			$this->load->model('Update_model');
			$this->Update_model->reupload();
			if ($pricing === '1') 
			{
				if ($adtype === '1') 
				{
					redirect('home/standard_ads');
				}
				else
				{
					redirect('home/standard_ads');
				}
				
			}
			else
			{
				if ($adtype === '1') 
				{
					redirect('home/premium_ads');
				}
				else
				{
					redirect('home/premium_ads');
				}
			}

		}

		function approve_merchant()
		{
			$merid = $this->uri->segment(3);
			$this->load->model('Update_model');
			$this->Update_model->approve_merchant($merid);
			redirect('admin/pending');
		}

		function reject_merchant()
		{
			$this->load->model('Update_model');
			$this->Update_model->reject_merchant();
			redirect('admin/pending');
		}

		function discard_merchant()
		{
			$merchantidd = $this->uri->segment(3);
			$this->load->model('Update_model');
			$this->Update_model->discard_merchant($merchantidd);
			redirect('admin/pending');
		}

		function reject_ad()
		{
			$this->load->model('Update_model');
			$this->Update_model->reject_ad();
			redirect('admin/ad_pending');
		}

		function approve_ad()
		{
			$adid = $this->uri->segment(3);
			$this->load->model('Update_model');
			$this->Update_model->approve_ad($adid);
			redirect('admin/ad_pending');
		}

		function lifestyle_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->lifestyle_update();
			redirect('admin/filter_lifestyle');
		}

		function lifestyle_delete()
		{
			$lifeid = $this->uri->segment(3);
			$this->load->model('Update_model');
			$this->Update_model->lifestyle_delete($lifeid);
			redirect('admin/filter_lifestyle');
		}

		function city_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->city_update();
			redirect('admin/filter_city');
		}

		function city_delete()
		{
			$cityid = $this->uri->segment(3);
			$this->load->model('Update_model');
			$this->Update_model->city_delete($cityid);
			redirect('admin/filter_city');
		}

		function city_add()
		{
			$this->load->model('Update_model');
			$this->Update_model->city_add();
			redirect('admin/filter_city');
		}

		function lifestyle_add()
		{
			$this->load->model('Update_model');
			$this->Update_model->lifestyle_add();
			redirect('admin/filter_lifestyle');
		}
		function countdown_timer_add()
		{
			$this->load->model('Update_model');
			$this->Update_model->countdown_timer_add();
			redirect('admin/parameters');
		}
		function premium_days_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->premium_days_update();
			// redirect('admin/filter_city');
		}
		function standard_days_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->standard_days_update();
			// redirect('admin/filter_city');
		}
		function premium_count_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->premium_count_update();
			// redirect('admin/filter_city');
		}
		function profile_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->profile_update();
			redirect('merchant/profile');
		}
		function password_update()
		{
			$this->load->model('Fetch');
			$data['records'] = $this->Fetch->fetch_profile();
			$this->load->model('Update_model');
			$data['result'] = $this->Update_model->password_update();
			$this->load->view('merchant/profile',$data);
		}
		function profile_personal_update()
		{
			$this->load->model('Update_model');
			$this->Update_model->profile_personal_update();
			redirect('merchant/profile');
		}
}