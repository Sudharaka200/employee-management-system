<?php 
    // DB Connection
    $conn = new mysqli("localhost", "root", "", "employe_management");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    // else{
    //     echo 'connection is ok';
    // }
?>
