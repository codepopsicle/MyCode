<?php

class Fetch extends CI_Model{

	function fetch_profile() 
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query = $this->db->get('merchantprofile');

			foreach ($query->result() as $row)
					{
						$data[] = $row;
					}
					// print_r($data);
			return $data;
		
	}

	function fetch_outlet()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query2 = $this->db->get('merchantprofile');
		if($query2->num_rows() > 0)
		{
		foreach ($query2->result() as $row)
				{
					$mcode = $row->merchantcode;
				}
		}


		$this->db->where('merchantcode' , $mcode);
		$outlet = $this->db->get('outletlist');
		if($outlet->num_rows() > 0)
		{
		foreach ($outlet->result() as $row)
					{
						$data2[] = $row;
					}

			return $data2;
		}
			
			
	}

	function fetch_transactions()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query3 = $this->db->get('merchantprofile');
		if($query3->num_rows() > 0)
		{
		foreach ($query3->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		$this->db->order_by('transactiondate', 'DESC');
		$transactions = $this->db->get('TransactionMasterList');
		if($transactions->num_rows() > 0)
		{
		foreach ($transactions->result() as $row)
					{
						$outletname = $this->db->query("SELECT `locality` FROM `outletlist` WHERE `outletid`=$row->OutletID ");
						// array_push($row,"outletname",$outletName);
						$row->outletname = $outletname->result();
						$data3[] = $row;
					}

			return $data3;
		}
	}


	function fetch_adlist()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query4 = $this->db->get('merchantprofile');
		if($query4->num_rows() > 0)
		{
		foreach ($query4->result() as $row)
				{
					$merccode = $row->merchantcode;
				}
		}
		$this->db->where('merchantcode' , $merccode);
		$ads = $this->db->get('advertlist');
		if($ads->num_rows() > 0)
		{
		foreach ($ads->result() as $row)
					{
						$data4[] = $row;
					}

			return $data4;
		}
	}

	

	function status()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$stat = $this->db->get('merchantprofile');
		if($stat->num_rows() > 0)
		{
		foreach ($stat->result() as $row)
				{
					$stats = $row->isactive;
				}

			return $stats;
		}
	}

	function fetch_singles()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query5 = $this->db->get('merchantprofile');
		if($query5->num_rows() > 0)
		{
		foreach ($query5->result() as $row)
				{
					$merchant = $row->merchantcode;
				}
		}
		//$sql = "SELECT COUNT(transactionlist.transactionid) as num_transaction, COUNT(outletlist.outletid) as num_outlets, SUM(transactionlist.rcptamount) as gross FROM transactionlist, outletlist WHERE transactionlist.merchantcode = '".$merchant."' AND outletlist.merchantcode = '".$merchant."' ";
		$sql = "SELECT COUNT(TransactionMasterList.TransactionID) as num_transaction, COUNT(outletlist.outletid) as num_outlets, SUM(TransactionMasterList.RcptAmount) as gross FROM TransactionMasterList, outletlist WHERE TransactionMasterList.MerchantCode = '".$merchant."' AND outletlist.merchantcode = '".$merchant."' ";
		$singles = $this->db->query($sql);
		{
		foreach ($singles->result() as $row)
					{
						$data5[] = $row;
					}

			return $data5;
		}
	}

	function fetch_transaction()
	{
		$query6 = $this->db->query("SELECT COUNT(*) as total_transaction FROM transactionlist");
		{
		foreach ($query6->result() as $row)
					{
						$data6[] = $row;
					}

			return $data6;
		}
	}

	function fetch_pending_merchant()
	{
		$this->db->where('kycpending','1');
		$this->db->where('account_type','Admin');
		$query7 = $this->db->get('merchantprofile');
		if ($query7->num_rows() > 0) 
		{
			foreach ($query7->result() as $row)
					{
						$data7[] = $row;
					}

			return $data7;
		}
		
		
	}

	function fetch_approved_merchant()
	{
		$this->db->where('kycpending','0');
		$this->db->where('account_type','Admin');
		$query8 = $this->db->get('merchantprofile');
		if ($query8->num_rows() > 0) 
		{
			foreach ($query8->result() as $row)
					{
						$data8[] = $row;
					}

			return $data8;
		}
		
		
	}

	function fetch_pending_ad()
	{
		$this->db->where('isactive','5');
		$query9 = $this->db->get('advertlist');
		if ($query9->num_rows() > 0) 
		{
			foreach ($query9->result() as $row)
					{
						$data9[] = $row;
					}

			return $data9;
		}
	}

	function fetch_merchant_list()
	{
		$query10 = $this->db->query("SELECT * FROM `merchantprofile`,`outletlist` WHERE merchantprofile.account_type='Admin' AND merchantprofile.brandname = outletlist.parentmerchant GROUP BY merchantprofile.brandname ORDER BY brandname ASC ");
		if ($query10->num_rows() > 0)
		{
		foreach ($query10->result() as $row)
					{
						$data10[] = $row;
					}

			return $data10;
		}
	}



	function store_count()
	{
		$query11 = $this->db->query("SELECT COUNT(*) as looper FROM `outletlist` GROUP BY parentmerchant ORDER BY parentmerchant ASC ");
		if ($query11->num_rows() > 0)
		{
		foreach ($query11->result() as $row)
					{
						$data11[] = $row;
					}

			return $data11;
		}
	}

	function outlet_details()
	{
		$query12 = $this->db->query("SELECT * FROM `outletlist` ORDER BY parentmerchant ASC ");
		if ($query12->num_rows() > 0)
		{
		foreach ($query12->result() as $row)
					{
						$data12[] = $row;
					}

			return $data12;
		}
	}

	function fetch_lifestyle()
	{
		$query13 = $this->db->get('lifestylelist');
		if ($query13->num_rows() > 0)
		{
			foreach ($query13->result() as $row) 
			{
				$data13[] = $row;
			}

			return $data13;
		}
	}

	function fetch_city()
	{
		$query14 = $this->db->get('citylist');
		if ($query14->num_rows() > 0)
		{
			foreach ($query14->result() as $row) 
			{
				$data14[] = $row;
			}

			return $data14;
		}
	}

	function fetch_parameters()
	{
		# code...
		$query15 = $this->db->get('CountdownTimer');
		if ($query15->num_rows() > 0)
		{
			foreach ($query15->result() as $row) 
			{
				$data15[] = $row;
			}

			return $data15;
		}
	}

	function fetch_adperiod()
	{
		# code...
		$this->db->select('Period');
		$this->db->where('Type', '1');
		$q = $this->db->get('AdPeriod');
		if ($q->num_rows() > 0)
		{
			$data17[0] = $q->result_array();
		}

		$this->db->select('Period');
		$this->db->where('Type', '2');
		$q = $this->db->get('AdPeriod');
		if ($q->num_rows() > 0)
		{
			$data17[1] = $q->result_array();
		}
		// $query17 = $this->db->get('AdPeriod');
		// foreach ($query15->result() as $row) 
		// {
		// 	$data17[] = $row;
		// }

		return $data17;
	}
	function fetch_adcount()
	{
		# code...
		$this->db->select('Count');
		$this->db->where('Type', '1');
		$q = $this->db->get('AdCount');
		$data18 = $q->result_array();
		return $data18;
	}
	function fetch_customer()
	{
		# code...
		// $query16 = $this->db->get('CustomerList');
		$query16 = $this->db->select('*')
                  ->from('CustomerMaster')
                  ->join('CustomerList', 'CustomerList.CustomerID = CustomerMaster.CustomerID')
                  ->get();
        if ($query16->num_rows() > 0)
		{
			foreach ($query16->result() as $row) 
			{
				$lifestyle = $row->LifeStyle;
				$lifestyleids = explode(',', $lifestyle);
				foreach ($lifestyleids as $lifestyleid) 
				{
					# code...
					// $lifestylequery = $this->db->query("SELECT `lifestyle` FROM `lifestylelist` WHERE `id`=(int)$lifestyleid ");
					// // print_r($lifestylequery);
					// if ($lifestylequery->num_rows() > 0)
					// {
					// 	$row->lifestyle[] = $lifestylequery->result();
					// }

					$this->db->select('lifestyle');
					$this->db->where('id', (int)$lifestyleid);
					$q = $this->db->get('lifestylelist');
					if ($q->num_rows() > 0)
					{
						$row->lifestyle[] = $q->result_array();
					}
				}
				
				$data16[] = $row;
			}

			return $data16;
		}
	}

	function fetch_merchant()
	{
		$query19 = $this->db->get('merchantprofile');
		if ($query19->num_rows() > 0)
		{
		foreach ($query19->result() as $row)
					{
						$data17[] = $row;
					}

			return $data17;
		}
	}

	function fetch_dashboard_count()
	{
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `CustomerMaster` ")->result();
		$data18[0] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `TransactionMasterList` 
								WHERE `MerchantCode` = (SELECT `merchantcode` FROM `merchantprofile` WHERE `username` = '".$this->session->userdata('username')."')" )->result();
		$data18[1] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `outletlist` ")->result();
		$data18[2] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `CustomerMaster` ")->result();
		$data18[3] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `ProdReviewList` 
								WHERE `TransactionID` in (SELECT `TransactionID` FROM `TransactionMasterList` 
								WHERE `MerchantCode`=(SELECT `merchantcode` FROM `merchantprofile` WHERE `username` = '".$this->session->userdata('username')."'))" )->result();
		$data18[5] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT SUM(`RcptAmount`) as cnt FROM `TransactionMasterList` 
								WHERE `MerchantCode` = (SELECT `merchantcode` FROM `merchantprofile` WHERE `username` = '".$this->session->userdata('username')."')" )->result();
		$data18[6] = $sql[0]->cnt;
		$sql= $this->db->query("SELECT COUNT(*) as cnt FROM `ProdReviewList` 
								WHERE `TransactionID` in (SELECT `TransactionID` FROM `TransactionMasterList` 
								WHERE `MerchantCode`=(SELECT `merchantcode` FROM `merchantprofile` WHERE `username` = '".$this->session->userdata('username')."'))" )->result();
		$data18[7] = $sql[0]->cnt;

		// print_r($data18[5]);
		// die;
		return $data18;
	}

	// for performance metrics
	function fetch_transaction_by_year_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		$transactions = $this->db->query("SELECT YEAR(`TransactionDate`) as transaction, COUNT( * ) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode'
										GROUP BY YEAR(  `TransactionDate` ) ");

		if($transactions->num_rows() > 0)
		{
		foreach ($transactions->result() as $row)
					{
						$data20[] = $row;
					}

			return $data20;
		}
	}
	function fetch_transaction_by_month_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate); 	
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P1M'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnMonths($startdate, $enddate);

		
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT COUNT( * ) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}
		return $data20;
	}
function fetch_transaction_by_month_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}
		
		$datePeriod = returnMonths($startdate, $enddate);
		
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT COUNT( * ) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}

		return $data20;
	}
	function fetch_transaction_by_day_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P30D'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT COUNT( * ) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
		
		return $data20;
	}
	// for custom range
		function fetch_transaction_by_day_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
	

		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		
		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT COUNT( * ) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
return $data20;
	}

///////////////////////////////////////////////////////////////////////////
	function fetch_revenue_by_year_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		$transactions = $this->db->query("SELECT YEAR(`TransactionDate`) as revenue, SUM(`RcptAmount`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode'
										GROUP BY YEAR(  `TransactionDate` ) ");

		if($transactions->num_rows() > 0)
		{
		foreach ($transactions->result() as $row)
					{
						$data20[] = $row;
					}

			return $data20;
		}
	}
	function fetch_revenue_by_month_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths2($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate); 	
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P1M'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnMonths2($startdate, $enddate);

		
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT  SUM(`RcptAmount`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}
		return $data20;
		
	}
	function fetch_revenue_by_month_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths2($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate); 	
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}

		$datePeriod = returnMonths2($startdate, $enddate);

		
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT  SUM(`RcptAmount`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}
		return $data20;
		
	}
	function fetch_revenue_by_day_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P30D'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT SUM(`RcptAmount`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
		
		return $data20;
		
	}
	function fetch_revenue_by_day_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT SUM(`RcptAmount`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
		
		return $data20;
		
	}

////////////////////////////////////////////////////////////////////////
	function fetch_product_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// select name,score from student order by score desc limit 5
		$transactions = $this->db->query("SELECT `itemdesc`, `prodhighsales`  
										FROM  `transactionlist` 
										WHERE `merchantcode` = '$mercode'
										order by `prodhighsales` desc limit 5");


		if($transactions->num_rows() > 0)
		{
		foreach ($transactions->result() as $row)
					{
						$data20[] = $row;
					}
			return $data20;
		}
	}
	

	///////////////////////////////////////////////////////////////////////////
	function fetch_unit_sold_by_year_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		$transactions = $this->db->query("SELECT YEAR(`TransactionDate`) as unit_sold, SUM(`TotItems`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode'
										GROUP BY YEAR(  `TransactionDate` ) ");
		// print_r($transactions); die;
		if($transactions) {
			if($transactions->num_rows() > 0)
			{
			foreach ($transactions->result() as $row)
						{
							$data20[] = $row;
						}
				// print_r($data20); die;
				return $data20;
			}
		}
	}
	function fetch_unit_sold_by_month_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths1($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate); 	
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P1M'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnMonths1($startdate, $enddate);

		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT SUM(`TotItems`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}
		return $data20;

		
	}
	function fetch_unit_sold_by_month_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnMonths($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate); 	
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1M'),
		        $todate->modify('+1 month')
		    );
		}

		$datePeriod = returnMonths($startdate, $enddate);

		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				$c_year = $date->format("Y");
				$c_mon = $date->format("m");
				// get day
				$data20[0][] = $date->format("F-y");;//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$transactions = $this->db->query("SELECT SUM(`TotItems`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and YEAR(`TransactionDate`) =  '$c_year' and Month(`TransactionDate`) = '$c_mon'");
                if(isset($transactions))
                	{ 
                		$count = $transactions->result();
                	}
				$data20[1][] = $count;
		}
		$startdate1 = \DateTime::createFromFormat('Y-m-d', $startdate);
		$enddate1 = \DateTime::createFromFormat('Y-m-d', $enddate);
        $startdate1=$startdate1->format('Y-m');
		$enddate1=$enddate1->format('Y-m');

		if ($startdate1==$enddate1)
		{
			array_pop($data20[0]);
			array_pop($data20[1]);
		}
		return $data20;
	
	}
	function fetch_unit_sold_by_day_count()
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		$enddate=date('Y-m-d');
		$startdate = new DateTime($enddate);
		$startdate->sub(new DateInterval('P30D'));
		$startdate= $startdate->format('Y-m-d');		
		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT SUM(`TotItems`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
		
		return $data20;
		
	}

	function fetch_unit_sold_by_day_count_1($startdate,$enddate)
	{
		$this->db->where('username' , $this->session->userdata('username'));
		$query20 = $this->db->get('merchantprofile');
		if($query20->num_rows() > 0)
		{
		foreach ($query20->result() as $row)
				{

					$mercode = $row->merchantcode;
				}
		}
		$this->db->where('MerchantCode' , $mercode);
		// To get year wise transactions:
		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data20[0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT SUM(`TotItems`) as c 
										FROM  `TransactionMasterList` 
										WHERE `MerchantCode` = '$mercode' and DATE(`TransactionDate`) >= '$day' and Date(`TransactionDate`) < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data20[1][] = $viewcount;
}
		
		return $data20;
		
	}

////////////////////////////////////////////////////////////////////////

	function fetch_item_details($advertid)
	{
		$this->db->where('advertid' , $advertid);
		$ads = $this->db->get('advertlist');
		if($ads->num_rows() > 0)
		{
		foreach ($ads->result() as $row)
					{
						$data21[] = $row;

					}
		// get view count
		$this->db->where('advertid' , $advertid);
		$views = $this->db->get('viewlist');
		if(isset($views)){ $viewcount = $views->num_rows();}
		$data21[1] = $viewcount;

		// get clicks count
		$this->db->where('advertid' , $advertid);
		$clicks = $this->db->get('clicklist');
		if(isset($clicks)){ $clickcount = $clicks->num_rows();}
		$data21[2] = $clickcount;
		


		// function to return every day from a date range

		function returnDates($fromdate, $todate) {
		    $fromdate = \DateTime::createFromFormat('Y-m-d', $fromdate);
		    $todate = \DateTime::createFromFormat('Y-m-d', $todate);
		    return new \DatePeriod(
		        $fromdate,
		        new \DateInterval('P1D'),
		        $todate->modify('+1 day')
		    );
		}

		
		$startdate = $data21[0]->startdate;
		$enddate = $data21[0]->enddate;
		$datePeriod = returnDates($startdate, $enddate);
		foreach($datePeriod as $date) {
		    	$day = $date->format('Y-m-d');
				// get day
				$data21[3][0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				// get view count for that day
				$views = $this->db->query("SELECT COUNT(*) as c
								FROM  `viewlist` 
								WHERE `advertid` = $advertid and `timestamp` >=  '$day'  and `timestamp` < '$day' + INTERVAL 1 DAY");
				if(isset($views)){ $viewcount = $views->result();}
				$data21[3][1][] = $viewcount;

				// get click count for that day
				$data21[4][0][] =$date->format('d/m/y'); //date('l', strtotime($date->format('Y-m-d')));
				$clicks = $this->db->query("SELECT COUNT(*) as c
								FROM  `clicklist` 
								WHERE `advertid` = $advertid and `timestamp` >=  '$day' and `timestamp` < '$day' + INTERVAL 1 DAY");
				if(isset($clicks)){ $clickcount = $clicks->result();}
				$data21[4][1][] = $clickcount;

				// get number of customer who bought after viewing the ads
				$data21[5][0][] = $date->format('d/m/y');//date('l', strtotime($date->format('Y-m-d')));
				$customers = $this->db->query("SELECT COUNT(*) as c
								FROM  `purchaselist` 
								WHERE `advertid` = $advertid and `timestamp` >=  '$day' and `timestamp` < '$day' + INTERVAL 1 DAY");
				if(isset($customers)){ $purchasecount = $customers->result();}
				$data21[5][1][] = $purchasecount;

			}


		return $data21;
		}
	}
}