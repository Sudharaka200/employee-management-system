<?php

//DB Connection
include '../../library/db_conn.php';

$id = $_GET['id'];

// Prepare and Delete Employee
$stmt = $conn->prepare("DELETE FROM employee WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<script>
            alert('Employee Deleted successfully.');
            window.location.href = '../employee.php';
          </script>";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>