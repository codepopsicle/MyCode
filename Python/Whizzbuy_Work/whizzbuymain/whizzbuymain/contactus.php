
<?php include 'database.php';?>
<?php
$name= $_GET["name"];
$email= $_GET["email"];
$subject= $_GET["subject"];
$comment= $_GET["comment"];

    		$sql = "INSERT INTO contact (Name,EmailID,Subject,Message) VALUES ('$name','$email','$subject','$comment')";
    		
    		if($conn->query($sql)==TRUE){
    			
    			echo json_encode(array("msg" => "Submitted Successfully!"));
   			}
    		else{
    			echo json_encode(array("msg" =>  "Oops! Something went wrong."));

    		}
$conn->close();
 ?>