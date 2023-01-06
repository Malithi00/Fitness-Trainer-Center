<?php

//Linking the configuration file
require 'config.php';

if(isset($_POST['submitBtn'])) {

    $id = $_GET['id'];
    $code = $_POST["id"];
    $FirstName = $_POST["firstName"];   
    $LastName = $_POST["lastName"];
    $Gender = $_POST["gender"];
    $Mobile = $_POST["mobile"];
    $Email = $_POST["email"];
    $Address = $_POST["address"];
    $Age = $_POST["age"];
    $Health = $_POST["health"];
    $Pwd = $_POST["pwd"];

    $sql= "UPDATE register_table SET ID = '$code', First_Name = '$FirstName', Last_Name = '$LastName', Gender = '$Gender', Age = $Age, Mobile_Number = '$Mobile', Email = '$Email', Address = '$Address', Health_Issues = '$Health', Password = '$Pwd' WHERE ID = $id";
    
    if($con->query($sql)){
        $message = "Record has been updated.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: displayUser.php");
        exit();
               
    } else{
        $message = "Record updating failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";

      }
    
}
$con->close();
?>