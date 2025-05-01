<?php

// DB Connection
include '../../library/db_conn.php';

$id = $_REQUEST['id'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$department = $_REQUEST['department'];
$email = $_REQUEST['email'];
$phonenumber = $_REQUEST['phonenumber'];

// Update query
$stmt = $conn->prepare("UPDATE employee SET first_name = ?, last_name = ?, email = ?, phonenumber = ?, department = ? WHERE id = ?");

$stmt->bind_param("ssssii", $first_name, $last_name, $email, $phonenumber, $department, $id);

if ($stmt->execute()) {
    echo "<script>
            alert('Employee updated successfully.');
            window.location.href = '../employee.php';
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
