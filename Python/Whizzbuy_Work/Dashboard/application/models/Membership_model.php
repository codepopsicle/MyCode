<?php

class Membership_model extends CI_Model{

	function validate() 
	{
		$this->db->where('username' , $this->input->post('username'));
		$this->db->where('password' , md5($this->input->post('password')));
		$query = $this->db->get('merchantprofile');
		
		if($query->num_rows() == 1)
		{
			foreach ($query->result() as $row)
					{
						$account_type = $row->account_type;
					}

			return $account_type;
		}

	}





}