<?php

include_once 'config.php';
?>

<?php

/*if(isset($_POST['subbtn'])){*/

    $name = $_POST["firstName"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $mail = $_POST["email"];
    $address = $_POST["address"];
    $dob = $_POST["day"];
    $pw = $_POST["password"];
    $rpw = $_POST["repassword"];
    $edu = $_POST["edu"];
    $course = $_POST["course"];
  

    $sql = "INSERT INTO instructor(ID,Name,Gender,ContactNo,Email,Address,DOB,Password,confirmPassword,Education,Course) VALUES('','$name','$gender','$mobile','$mail','$address','$dob','$pw','$rpw','$edu','$course')";



    if(mysqli_query($con,$sql)){
        echo "Record inserted sucessfully";
        header("Location:ilogin.php");

       
    } 
    else{
    
        echo "failed".$con->error;
    }



    mysqli_close($con);
?>
