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
$servername = "whizzbuydev.c1vkqotq7mru.us-west-2.rds.amazonaws.com";
$username = "whizzbuydev";
$password = "whizzbuydev";
$dbname = "whizzbuydev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
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
$verify_signature = $data['signature'];
error_log($verify_signature); 

$sql = "SELECT RcptAmount,CitrusID FROM transactionmasterlist WHERE TransactionID = '".$data['TransactionID']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $RcptAmount= $row["RcptAmount"];
        $CitrusId= $row["CitrusID"];
    }
}
if ((string)$data['TxId'] == (string)$CitrusId)
{
  if ($data['pgRespCode']==0){
    $sql1="UPDATE transactionmasterlist SET TransactionVerified =1,CitrusStatus ='".$data['pgRespCode']."',CitrusStatusDesc ='".$data['TxStatus']."', TransactionStatus = 1 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql1);
    $conn->commit();
     $sql2="UPDATE transactionlist SET TransactionVerified =1 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql2);
    $conn->commit();
     $sql3="UPDATE verifyqueue SET TransactionVerified =1 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql3);
    $conn->commit();
     $sql4="UPDATE customertrannotification SET TransactionVerified =1 WHERE TranID='".$data['TransactionID']."'";
    $result = $conn->query($sql4);
    $conn->commit();

  }
  else{
     $sql1="UPDATE transactionmasterlist SET TransactionVerified =0,CitrusStatus ='".$data['pgRespCode']."',CitrusStatusDesc ='".$data['TxStatus']."', TransactionStatus=1 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql1);
    $conn->commit();
     $sql2="UPDATE transactionlist SET TransactionVerified =0 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql2);
    $conn->commit();
     $sql3="UPDATE verifyqueue SET TransactionVerified =0 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql3);
    $conn->commit();

  }

}
else{
 $sql1="UPDATE transactionmasterlist SET CitrusStatus ='".$data['pgRespCode']."',CitrusStatusDesc ='".$data['TxStatus']."', TransactionStatus=2 WHERE TransactionID='".$data['TransactionID']."'";
    $result = $conn->query($sql1);
    $conn->commit(); 
}
//closing the database connection
$conn->close();
//$signature = hash_hmac('sha1', $verification_data, $secret_key);     
  if ($signature == $verify_signature)  
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
          