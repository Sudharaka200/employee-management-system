<?php 

//DB Connection
include '../../library/db_conn.php';

echo $first_name = $_REQUEST["first_name"];
echo $last_name = $_REQUEST["last_name"];
echo $department = $_REQUEST["department"];
echo $email = $_REQUEST["email"];
echo $phonenumber = $_REQUEST["phonenumber"];

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