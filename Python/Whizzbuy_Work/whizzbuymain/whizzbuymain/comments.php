
<?php include 'database.php';?>

<?php
$sql="SELECT comment,firstname,lastname,likes,id FROM supportus ORDER BY likes DESC ";
$result = mysqli_query($conn,$sql);


//echo "<table>";

while($row = mysqli_fetch_array($result)) {
   // echo "<tr>";
	if($row[0] != null)
	{
    echo "<p style='font-size:22px;margin-top:20px;margin-left:20px;margin-right:15px;'>" . $row[0] . "</p>";
    echo "<h5 style='margin-left:20px;'><b>" . $row[1] . " " .$row[2] . "</b></h5>";
    echo '<div style="margin-left:20px;"id="'. $row[4] .'" class="btn btn-sm clor btn1" onclick="inclike(this.id)"><span class="glyphicon glyphicon-heart"></span> <span id="like'.$row[4].'" style="color:#000000; font-size:12px">' . $row[3]. '</span></div><hr style="margin-bottom:0px">';
	}
     //  echo "</tr>";
}
//echo "</table>";	
mysqli_close($conn);
?>