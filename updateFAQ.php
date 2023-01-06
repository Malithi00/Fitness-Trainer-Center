<?php

//Linking the configuration file
require 'config.php';

if(isset($_POST['submitBtn'])) {

    $id = $_GET['id'];
    $code = $_POST["id"];
    $ques = $_POST["Question"];   
    $ans = $_POST["Answer"];

    $sql= "UPDATE faq SET ID = '$code', Question = '$ques', Answer = '$ans' WHERE ID = $id";
    
    if($con->query($sql)){
        $message = "Record has been updated.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: displayFAQ.php");
        exit();
               
    } else{
        $message = "Record updating failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";
      }
    
}
$con->close();
?>