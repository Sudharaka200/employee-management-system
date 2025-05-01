<?php 

//DB Connection
include '../../library/db_conn.php';

//get data from addemployee
$first_name = $_REQUEST["first_name"];
$last_name = $_REQUEST["last_name"];
$department = $_REQUEST["department"];
$email = $_REQUEST["email"];
$phonenumber = $_REQUEST["phonenumber"];

$sql = "INSERT INTO employee(first_name, last_name, department, email,phonenumber)
VALUES ('$first_name', '$last_name', '$department', '$email', '$phonenumber');";

if ($conn->query($sql) === TRUE) {
    echo "<script>";
    echo "alert('New employee added successfully.');";
    echo "window.location.replace('../addEmployee.php');";
    echo "</script>";
} else {
    echo "Error: " . $conn->error;
}

?>