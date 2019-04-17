
<?php include 'database.php';?>

<?php

$id=$_GET["id"];

$sql="UPDATE supportus SET likes=likes-1 where id='$id' ";
$result=$conn->query($sql);
if($result==TRUE){
	$sql1="SELECT likes as likes from supportus where id='$id' ";
	$result1=$conn->query($sql1);
	if($result1==TRUE){

	if($result1->num_rows > 0)
		{
			$row = $result1->fetch_assoc();
			echo $row['likes'];
    	}
    else{
    		echo "Oops! Something went wrong.";
    	}

}
else{
    		echo "Oops! Something went wrong.";
    	}

}else{
	echo "Oops! Something went wrong.";
	}
$conn->close();


?>