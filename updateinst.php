<!--Get support by https://youtu.be/72U5Af8KUpA-->

<?php

//Linking the configuration file
require 'config.php';
session_start();
if($_SESSION['Email']){

if(isset($_POST['submitBtn'])) {

    $mail = $_GET['Email'];
    
    $FirstName = $row["Name"];
    $Gender = $row["Gender"];
    $Mobile = $row["ContactNo"];
    $Email = $row["Email"];         
    $Address = $row["Address"];
    $dob = $row["DOB"];
    $pwd = $row["Password"];
    $rPwd = $row["confirmPassword"];
    $edu = $row["Education"];
    $course = $row["Course"];
  

    $sql= "UPDATE instructor  SET  Name = '$FirstName', Gender = '$Gender',  ContactNo = '$Mobile', Email = '$Email', Address = '$Address', DOB = '$dob', Password = '$Pwd' confirmPassword = '$rpwd', Education = '$edu', Course = '$course'  WHERE Email = '".$_SESSION['Email']."'";
    
    if($con->query($sql)){
        $message = "Record has been updated.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: iview.php");
        exit();
               
    } else{
        $message = "Record updating failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";
        header("Location: iedit.php");
        exit();

      }
}
}
$con->close();

?>