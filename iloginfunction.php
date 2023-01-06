<!--Got help from https://youtu.be/scd8YKiuS7I-->
<?php
session_start();

include 'config.php';

if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header ("Location: ilogin.php?error = user name is required ");
        exit();

    }else if(empty($pass)){
        header ("Location: ilogin.php?error = password is required ");
        exit();


    }else{
        $sql  = "SELECT * FROM instructor WHERE Email ='$uname' AND Password = '$pass'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)=== 1){
            $row = mysqli_fetch_assoc($result);
            if($row ['Email'] === $uname && $row['Password'] === $pass ){
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['ID'] = $row['ID'];
            header ("Location: home.php");
                exit();
            }

            }else{
                header ("Location: ilogin.php?error = incorrect ");
                exit();
            }
        }
}
else{
    header ("Location: ilogin.php");
    exit();
}