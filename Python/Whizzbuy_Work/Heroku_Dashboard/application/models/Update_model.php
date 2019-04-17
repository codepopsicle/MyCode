<?php

class Update_model extends CI_Model{

	function personal($user) 
	{
		$pupdates = array(
							'companyname' => $this->input->post('companyname'),
							'regaddr' => $this->input->post('companyaddress'),
							'pincode' => $this->input->post('pin'),
							'city' => $this->input->post('city')
						);
		$this->db->where('username', $user);
		$this->db->update('merchantprofile', $pupdates);

			return;
		
	}

	function password($user) 
	{
		$pupdates = array(
							'password' => $this->input->post('password')
						);
		$this->db->where('username', $user);
		$this->db->update('merchantprofile', $pupdates);

			return;
		
	}

	function contact($user) 
	{
		$cupdates = array(
							'email' => $this->input->post('email'),
							'mobile' => $this->input->post('mobile')
						 );
							
		$this->db->where('username', $user);
		$this->db->update('merchantprofile', $cupdates);

		return;
		
	}
	
	function newreg()
	{
		$cnt = $this->db->count_all('merchantprofile');
		$cnt++;
		$brand = $this->input->post('brandname');
		$merchant = mb_substr($brand, 0, 3).$cnt;
		
		$new = array(	'companyname' => $this->input->post('companyname'),
						'brandname' => $this->input->post('brandname'), 
						'regaddr' => $this->input->post('address'),
						'mobile' => $this->input->post('mobile'),
						'email' => $this->input->post('email'),
						'city' => $this->input->post('city'),
						'password' => md5($this->input->post('password')), 
						'pan' => $this->input->post('pan'),
						'username' => $this->input->post('username'),
						'pincode' => $this->input->post('pin'),
						'bankaccname' => $this->input->post('bankholder'), 
						'bankaccno' => $this->input->post('bankaccount'),
						'vattin' => $this->input->post('vattin'),
						'csttin' => $this->input->post('csttin'),
						'merchantcode' => $merchant,
						'account_type' => 'Manager'//'Admin'

					);
		$this->db->insert('merchantprofile',$new);
		return;

	}

	function newoutlet()
	{
		$cntt = $this->db->count_all('outletlist');
		$cntt++;
		$pm = $this->input->post('parentmerchant');
		$unique = mb_substr($pm, 0, 3).$cntt;
		$outlet = array(
							'parentmerchant' => $this->input->post('parentmerchant'),
							'outletaddr' => $this->input->post('address'),
							'merchantcode' => $this->input->post('merchantcode'),
							'uniqueoutletcode' => $unique,
							'outpincode' => $this->input->post('pin'),
							'outlocation' => '-',
							'locality' => $this->input->post('locality'),
							'username' => $this->input->post('username'),
							'outletcity' => $this->input->post('city')
							);
		$this->db->insert('outletlist', $outlet);

		$profile = array(	'companyname' => $this->input->post('company'),
							'brandname' => $this->input->post('parentmerchant'),
							'regaddr' => $this->input->post('address'),
							'mobile' => '-',
							'email' => '-',
							'city' => $this->input->post('city'),
							'password' => md5($this->input->post('password')), 
							'pan' => '-',
							'username' => $this->input->post('username'),
							'pincode' => $this->input->post('pin'),
							'bankaccname' => '-', 
							'bankaccno' => '-',
							'vattin' => '-',
							'csttin' => '-',
							'merchantcode' => $this->input->post('merchantcode'),
							'isactive' => '1',
							'account_type' => 'Manager'

					);
		$this->db->insert('merchantprofile', $profile);
		return;
	}	

	function outlet_update()
	{
		$this->db->set('outletaddr', $this->input->post('address'));
		$this->db->set('outpincode', $this->input->post('pin'));
		$this->db->set('outlocation', $this->input->post('location'));
		$this->db->set('locality', $this->input->post('locality'));
		$this->db->set('outletcity', $this->input->post('city'));
		$this->db->set('username',$this->input->post('username'));
		$this->db->where('outletid',$this->input->post('outletid'));
		$this->db->update('outletlist');

		$this->db->set('username',$this->input->post('username'));
		if ($this->input->post('password') != "") {
			$this->db->set('password', md5($this->input->post('password')));
		}
		$this->db->where('username',$this->input->post('old_username'));
		$this->db->update('merchantprofile');
		return;
	}


	function sproduct()
	{
		$user = $this->input->post('username');

		$image_path = realpath(APPPATH.'../images');
		
		$config = array(
							'allowed_types' => 'jpg|jpeg|png|gif|bmp',
							'upload_path' =>  $image_path,
							'encrypt_name' => TRUE
						);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data('file_name');
		$newimage = base_url("images/$image_data");
		$this->load->helper('date');
		$updateimg = array( 'image' => $newimage );
		$cc = $this->input->post('daterange');
		$cc_explode = explode(' - ', $cc);
		$start = $cc_explode[0];
		$enddate = $cc_explode[1];
		$nstart = nice_date($start, 'Y-m-d'); ;
		$nenddate = nice_date($enddate, 'Y-m-d'); ;
		$nnenddate = date_create($nenddate);
		$nnstart = date_create($nstart);
		$diff = date_diff($nnstart,$nnenddate);
		$runtime = $diff->format("%a");
		$duration = $runtime;

		$updates = array('merchantcode' => $this->input->post('merchantc'),
						 'adimage' => $newimage,
						 'pricingmarker' => '1',
						 'advertproductcode' => $this->input->post('barcode'),
						 'startdate' => $nstart,
						 'enddate' => $nenddate,
						 'isactive' => '5',
						 'adlifestyle' => $this->input->post('lifestyle'),
						 'adruntime' => $runtime,
						 'adruntimecount' => $runtime,
						 'addesc' => $this->input->post('cdescription'),
						 'adtype' => '1',
						 'advertprodname' => $this->input->post('pname'),
						 'interdate' => date("Y/m/d"),
						 'duration' => $duration
						  );
		$this->db->insert('advertlist',$updates);
		return;
	}

	function pproduct()
	{
		$user = $this->input->post('username');

		$image_path = realpath(APPPATH.'../images');
		
		$config = array(
							'allowed_types' => 'jpg|jpeg|png|gif|bmp',
							'upload_path' =>  $image_path,
							'encrypt_name' => TRUE
						);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data('file_name');
		$newimage = base_url("images/$image_data");
		$this->load->helper('date');
		$updateimg = array( 'image' => $newimage );
		$cc = $this->input->post('daterange');
		$cc_explode = explode(' - ', $cc);
		$start = $cc_explode[0];
		$enddate = $cc_explode[1];
		$nstart = nice_date($start, 'Y-m-d'); ;
		$nenddate = nice_date($enddate, 'Y-m-d'); ;
		$nnenddate = date_create($nenddate);
		$nnstart = date_create($nstart);
		$diff = date_diff($nnstart,$nnenddate);
		$runtime = $diff->format("%a");
		$duration = $runtime;

		$updates = array('merchantcode' => $this->input->post('merchantc'),
						 'adimage' => $newimage,
						 'pricingmarker' => '2',
						 'advertproductcode' => $this->input->post('barcode'),
						 'startdate' => $nstart,
						 'enddate' => $nenddate,
						 'isactive' => '5',
						 'adlifestyle' => $this->input->post('lifestyle'),
						 'adruntime' => $runtime,
						 'adruntimecount' => $runtime,
						 'addesc' => $this->input->post('cdescription'),
						 'adtype' => '1',
						 'advertprodname' => $this->input->post('pname'),
						 'interdate' => date("Y/m/d"),
						 'duration' => $duration,
						 'notiftext' => $this->input->post('anotification'),
						 'notiftextdisplay' => $this->input->post('dnotification')
						  );
		$this->db->insert('advertlist',$updates);
		return;
	}

	function sevent()
	{
		$user = $this->input->post('username');

		$image_path = realpath(APPPATH.'../images');
		
		$config = array(
							'allowed_types' => 'jpg|jpeg|png|gif|bmp',
							'upload_path' =>  $image_path,
							'encrypt_name' => TRUE
						);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data('file_name');
		$newimage = base_url("images/$image_data");
		$this->load->helper('date');
		$updateimg = array( 'image' => $newimage );
		$cc = $this->input->post('daterange');
		$cc_explode = explode(' - ', $cc);
		$start = $cc_explode[0];
		$enddate = $cc_explode[1];
		$nstart = nice_date($start, 'Y-m-d'); ;
		$nenddate = nice_date($enddate, 'Y-m-d'); ;
		$nnenddate = date_create($nenddate);
		$nnstart = date_create($nstart);
		$diff = date_diff($nnstart,$nnenddate);
		$runtime = $diff->format("%a");
		$duration = $runtime;

		$updates = array('merchantcode' => $this->input->post('merchantc'),
						 'adimage' => $newimage,
						 'pricingmarker' => '1',
						 
						 'startdate' => $nstart,
						 'enddate' => $nenddate,
						 'isactive' => '5',
						 'adlifestyle' => $this->input->post('lifestyle'),
						 'adruntime' => $runtime,
						 'adruntimecount' => $runtime,
						 'addesc' => $this->input->post('cdescription'),
						 'adtype' => '2',
						 'adverteventname' => $this->input->post('bname'),
						 'interdate' => date("Y/m/d"),
						 'duration' => $duration
						  );
		$this->db->insert('advertlist',$updates);
		return;
	}

	function pevent()
	{
		$user = $this->input->post('username');

		$image_path = realpath(APPPATH.'../images');
		
		$config = array(
							'allowed_types' => 'jpg|jpeg|png|gif|bmp',
							'upload_path' =>  $image_path,
							'encrypt_name' => TRUE
						);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data('file_name');
		$newimage = base_url("images/$image_data");
		$this->load->helper('date');
		$updateimg = array( 'image' => $newimage );
		$cc = $this->input->post('daterange');
		$cc_explode = explode(' - ', $cc);
		$start = $cc_explode[0];
		$enddate = $cc_explode[1];
		$nstart = nice_date($start, 'Y-m-d'); ;
		$nenddate = nice_date($enddate, 'Y-m-d'); ;
		$nnenddate = date_create($nenddate);
		$nnstart = date_create($nstart);
		$diff = date_diff($nnstart,$nnenddate);
		$runtime = $diff->format("%a");
		$duration = $runtime;

		$updates = array('merchantcode' => $this->input->post('merchantc'),
						 'adimage' => $newimage,
						 'pricingmarker' => '2',
						 
						 'startdate' => $nstart,
						 'enddate' => $nenddate,
						 'isactive' => '5',
						 'adlifestyle' => $this->input->post('lifestyle'),
						 'adruntime' => $runtime,
						 'adruntimecount' => $runtime,
						 'addesc' => $this->input->post('cdescription'),
						 'adtype' => '1',
						 'adverteventname' => $this->input->post('ename'),
						 'interdate' => date("Y/m/d"),
						 'duration' => $duration,
						 'notiftext' => $this->input->post('anotification'),
						 'notiftextdisplay' => $this->input->post('dnotification')
						  );
		$this->db->insert('advertlist',$updates);
		return;
	}

	function cancel()
	{
		$theid = $this->uri->segment(3);
		$this->db->where('advertid',$theid);
		$this->db->delete('advertlist');
	}

	function disable()
	{
		$theid2 = $this->uri->segment(3);
		$tdate = date(Y-m-d);
		$this->db->set('isactive', '3');
		$this->db->set('interdate', $tdate);
		$this->db->where('advertid',$theid2);
		$this->db->update('advertlist');
	}

	function enable()
	{
		$theid3 = $this->uri->segment(3);
		$tdate2 = date(Y-m-d);
		$this->db->set('isactive', '2');
		$this->db->set('interdate', $tdate2);
		$this->db->where('advertid',$theid3);
		$this->db->update('advertlist');
	}

	function reupload()
	{
		$theid4 = $this->uri->segment(3);
		$this->db->where('advertid',$theid4);
		$this->db->delete('advertlist');
		return;
	}

	function approve_merchant($merid)
	{
		$this->db->set('kycpending', '0');
		$this->db->where('merchantid', $merid);
		$this->db->update('merchantprofile');
		return;
		
	}

	function reject_merchant()
	{
		$this->db->set('reason', $this->input->post('reason'));
		$this->db->set('coraction', $this->input->post('caction'));
		$this->db->set('kycpending', '0');
		$this->db->where('merchantid',$this->input->post('merrid'));
		$this->db->update('merchantprofile');
		return;
	}

	function discard_merchant($merchantidd)
	{
		$this->db->where('merchantid', $merchantidd);
		$this->db->delete('merchantprofile');
	}

	function reject_ad()
	{
		$this->db->set('rejectreason',$this->input->post('reason'));
		$this->db->set('isactive', '6');
		$this->db->where('advertid',$this->input->post('adid'));
		$this->db->update('advertlist');
		return;
	}

	function approve_ad($adid)
	{
		$this->db->set('isactive', '1');
		$this->db->where('advertid',$adid);
		$this->db->update('advertlist');
		return;
	}

	function lifestyle_update()
	{
		$this->db->set('lifestyle', $this->input->post('lifestyle'));
		$this->db->set('lifestyledesc', $this->input->post('description'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('lifestylelist');
		return;
	}

	function lifestyle_delete($lifeid)
	{
		$this->db->where('id', $lifeid);
		$this->db->delete('lifestylelist');	
	}

	function lifestyle_add()
	{
		$this->db->set('lifestyle',$this->input->post('lifestyle'));
		$this->db->set('lifestyle',$this->input->post('lifestyledesc'));
		$this->db->insert('lifestylelist');
	}

	function city_update()
	{
		$this->db->set('city', $this->input->post('city'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('citylist');
		return;
	}

	function city_delete($cityid)
	{
		$this->db->where('id', $cityid);
		$this->db->delete('citylist');	
	}

	function city_add()
	{
		$this->db->set('city',$this->input->post('city'));
		$this->db->insert('citylist');
	}

	function countdown_timer_add()
	{
		$this->db->set('PreLaunchDescription',$this->input->post('prelaunch'));
		$this->db->set('PostLaunchDescription',$this->input->post('PostLaunchDescription'));
		$this->db->set('LaunchDate',$this->input->post('LaunchDate'));
		$this->db->set('TargetAppVersion',$this->input->post('TargetAppVersion'));
		$this->db->set('IsDisplayed',1);
		$this->db->set('RunPeriod', (int)$this->input->post('RunPeriod'));
		$this->db->insert('CountdownTimer');
	}

	function premium_count_update()
	{
		$this->db->set('Count',(int)$this->input->post('value'));
		$this->db->where('Type','1');
		$this->db->update('AdCount');
		return;
	}
	function premium_days_update()
	{
		$this->db->set('Period',(int)$this->input->post('value'));
		$this->db->where('Type','1');
		$this->db->update('AdPeriod');
		return;
	}
	function standard_days_update()
	{
		$this->db->set('Period', (int)$this->input->post('value'));
		$this->db->where('Type','2');
		$this->db->update('AdPeriod');
		return;
	}
	function profile_update()
	{
		$this->db->set('brandname', $this->input->post('brandname'));
		$this->db->set('city', $this->input->post('city'));
		$this->db->set('pincode', $this->input->post('pincode'));
		$this->db->where('username' , $this->session->userdata('username'));
		$this->db->update('merchantprofile');
		return;
	}

	function profile_personal_update()
	{
		$this->db->set('username', $this->input->post('username'));
		$this->db->set('mobile', (int)$this->input->post('mobile'));
		$this->db->set('email', $this->input->post('email'));
		$this->db->where('username' , $this->session->userdata('username'));
		$this->db->update('merchantprofile');
		return;
	}
	
	function password_update()
	{
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('merchantprofile');
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row)
					{
						$password[] = $row->password;
					}
			if ($password[0] == md5($this->input->post('password')))
			{
				$this->db->where('username', $this->session->userdata('username'));
				$this->db->set('password', md5($this->input->post('new_password')));
				$this->db->update('merchantprofile');
				$data = "success";
				return $data;
			}
			$data = "unsuccessful";
			return $data;
		}
	}

	function profile_picture()
	{
		// $user = $this->session->userdata('username');

		$image_path = realpath(APPPATH.'../images');
		
		$config = array(
							'allowed_types' => 'jpg|jpeg|png|gif|bmp',
							'upload_path' =>  $image_path,
							'encrypt_name' => TRUE
						);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data('file_name');
		if ($image_data != '') {
			$newimage = base_url("images/$image_data");

			$this->db->where('username', $this->session->userdata('username'));
			$this->db->set('picture',$newimage);
			$this->db->update('merchantprofile');
			return;
		}
		
	}
}