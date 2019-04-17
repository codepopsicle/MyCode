
<?php include 'database.php';?>
<?php
$fname= $_GET["fname"];
$lname =$_GET["lname"];
$email= $_GET["email"];
$postal= $_GET["postal"];
$comment= $_GET["comment"];

    		$sql = "INSERT INTO supportus (firstname,lastname,email,pincode,comment) VALUES ('$fname','$lname','$email','$postal','$comment')";
    		
    		if($conn->query($sql)==TRUE){
    			$sql1="SELECT COUNT(*) as count FROM supportus";
    			$result=$conn->query($sql1);
    			if($result==TRUE){
    				if($result->num_rows > 0)
    				{
    					$row = $result->fetch_assoc();
    					$count=$row['count'];
    					$msg="Submitted Successfully!";
    					//echo $msg;
    					$res=json_encode(array("msg" => $msg, "counter" => $count));
    					echo $res;
    				}
    				else{
    			echo json_encode(array("msg" => "Oops! Something went wrong."));
    		}

    			
    			}
    			else{
    				echo json_encode(array("msg" => "Oops! Something went wrong."));

    		}
    	}
    		else{
    			echo json_encode(array("msg" => "Oops! Something went wrong."));

    		}
$conn->close();
 ?>