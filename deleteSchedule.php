<?php
	include_once 'config.php';

?>

<?php		
		global $conn;
		
		$CID = $_POST["ClassID"];
		$sql = "delete from timetable where TTclass_id=$CID";
		
		$s = mysqli_query($con,$sql);
		
		if($s){
			echo "Deleted successfully";
			header ("location:classes.php");
		}
		else{
			echo "Error: ".$con->error;
		}
	

	
	mysqli_close($con);

?>

