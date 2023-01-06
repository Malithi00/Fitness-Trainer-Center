<?php

require 'config.php';

 ?>   



<?php
   
    $Name=$_POST["cname"];
    $Mobile=$_POST["cnumber"];
    $Email=$_POST["cemail"];
    $Bank=$_POST["bname"];
    $Card=$_POST["ccardnumber"];
    $Cvv=$_POST["ccvv"];
    $sql="INSERT INTO billing_details(ID,Name,Mobile_No,Email,Bank_Card_Name,card_number,CVV)VALUES('','$Name','$Mobile','$Email','$Bank',
    '$Card','$Cvv')";

    if(mysqli_query($con,$sql)){

        echo"inserted successfully";
        header("Location:billing.php");
    }
    else{
        echo"error".$con->error;
    }
    
    mysqli_close($con);



?>