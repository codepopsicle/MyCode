
<?php include 'database.php';?>
<?php
$sql1="SELECT COUNT(*) as count FROM supportus";
$result=$conn->query($sql1);
if($result==TRUE){
	if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$count=$row['count'];
			echo $count;
    	}
    else{
    		echo "Oops! Something went wrong.";
    	}

}
else{
	echo "Oops! Something went wrong.";
	}
$conn->close();


?>