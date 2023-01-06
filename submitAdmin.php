<?php

//Linking the configuration file
require 'config.php';

if(isset($_POST['submitBtn'])) {

    $FirstName = $_POST["firstName"];   
    $LastName = $_POST["lastName"];
    $Gender = $_POST["gender"];
    $Mobile = $_POST["mobile"];
    $Email = $_POST["email"];
    $Address = $_POST["address"];
    $Age = $_POST["age"];
    $Health = $_POST["health"];
    $Pwd = $_POST["pwd"];

    $sql= "INSERT INTO register_table(First_Name, Last_Name, Gender, Age, Mobile_Number, Email, Address, Health_Issues, Password)VALUES('$FirstName','$LastName', '$Gender', $Age, '$Mobile', '$Email', '$Address', '$Health', '$Pwd')";
    
    if($con->query($sql)){
        $message = "Record has been added.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:displayUser.php");
               
    } else{
        $message = "Record adding failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";

      }
    
}
$con->close();
?>