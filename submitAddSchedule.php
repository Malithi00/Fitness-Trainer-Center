<?php
	include_once 'config.php';
?>

<?php

	$date = $_POST["field1"];
	$time = $_POST["field2"];
	$sch = $_POST["field3"];
	$class = $_POST["field4"];
	$mID = $_POST["field5"];
	
	$sql = "insert into timetable(TTclass_id,TT_date,TT_time,TT_schedule,TT_class,TT_meeting_Details)values('','$date','$time','$sch','$class','$mID')";	

    if(mysqli_query($con,$sql)){
		echo "<script>alert ('Record inserted successfully!')<script>";
		header("Location:classes.php");
	}
	else{
		echo "<script>alert ('Error record insertion')</script>";
	}
	
	mysqli_close($con);

?>