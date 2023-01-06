<?php

//Linking the configuration file
require 'config.php';

    $id = $_GET['id'];

    $sql= "DELETE FROM faq WHERE ID = $id";
    
    if($con->query($sql)){
        $message = "Successfully deleted.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: displayFAQ.php");
        exit();
               
    } else{
        $message = "Record deletion failed.";
        echo "<script type='text/javascript'>alert('$message'.$con->error);</script>";

      }
      
?>
		
		
