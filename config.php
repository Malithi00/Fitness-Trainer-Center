<?php

    // Create connection

    $con = new mysqli("localhost", "root", "", "iwt_assignment");



    if ($con->connect_error) {

    die("Connection failed: " .$con->connect_error);

    }

?>
