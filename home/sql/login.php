<?php

//DB Connection
include '../../library/db_conn.php';

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$check = 0;

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

if ($result && $result->num_rows > 0) {
    $check = 1;
}

if ($check == 1) {
    echo "<script>";
    echo "alert('Login success.');";
    echo "window.location.replace('../../pages/employee.php');";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('Email or Password incorrect');";
    echo "window.location.replace('../index.php');";
    echo "</script>";
}

?>