<!--Got help from https://youtu.be/scd8YKiuS7I-->
<?php 

session_start(); 

include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
}

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: alogin.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: alogin.php?error=Password is required");

        exit();

    }

        $sql = "SELECT * FROM admin_table WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                header("Location: adminselect.html");

                exit();

            }else{

                header("Location: alogin.php?error=Incorect User name or password");

                exit();

            }


}else{

    header("Location: alogin.php");

    exit();

}


