<?php

//Linking the configuration file
require 'config.php';

if(isset($_POST['submitBtn'])) {

    $ques = $_POST["Question"];   
    $ans = $_POST["Answer"];

    $sql= "INSERT INTO faq(Question, Answer)VALUES('$ques','$ans')";
    
    if($con->query($sql)){
        $message = "Record has been added.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:displayFAQ.php");
               
    } else{
        $message = "Record adding failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";

      }
    
}
$con->close();
?>