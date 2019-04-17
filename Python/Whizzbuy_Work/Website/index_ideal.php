<html>    
<head>    
<script type="text/javascript">  	
var globaldata;      
function setdata(data) {          
globaldata = data;      
}      
function postResponseiOS() {          
return globaldata;      
}      
function postResponse(data) {          
CitrusResponse.pgResponse(data);      }    
</script>     
</head>     
<body>     
</body>     
</html>                
<?php                    
$secret_key = "b6fe378ee1c9606e81ebb0d0d704fdfd51f9e397";     
$data =array();     
foreach ($_POST as $name => $value) {                   
 $data[$name] = $value;                   
}     
   $verification_data =  $data['TxId']                        
                        . $data['TxStatus']                        
                        . $data['amount']                        
                        . $data['pgTxnNo']                        
                        . $data['issuerRefNo']                        
                        . $data['authIdCode']                        
                        . $data['firstName']                        
                        . $data['lastName']                        
                        . $data['pgRespCode']                        
                        . $data['addressZip'];     
$signature = hash_hmac('sha1', $verification_data, $secret_key);
error_log($signature);
error_log($data['signature']);     
  if ($signature == $data['signature'])  
    {										          
      $json_object = json_encode($data);										      	
      echo "<script> 
      postResponse('$json_object'); 
      </script>";										      	
      echo"<script> setdata ('$json_object');
      </script>";										      
    }										    
  else {										  	   
     $response_data = array("Error" => "Transaction Failed",
     "Reason" => "Signature Verification Failed");										  	    
 $json_object = json_encode($response_data);										  	    
 echo "
 <script> 
 postResponse('$json_object'); 
 </script>";	  	    
 echo"
 <script> 
 setdata ('$json_object'); 
 </script>";									      
 }      
?>    
          