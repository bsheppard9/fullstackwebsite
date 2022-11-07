<?php

    $server = "localhost";
    $username = "root";
    $password = "root";
    $db = "my_first_database"; //NEEDS TO HAVE THE SAME NAME AS THE DATABASE IN PHPMYADMIN

    $connection = mysqli_connect($server, $username, $password, $db);

    if(!$connection) {
        die("Connection failed: " . mysqli_connect_error()); 
    }

    //echo "Connected Successfully!";
?>