<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | Home</title>
</head>

<body>
    <!-- files -->
    <?php include '../library/head.php' ?>
    <?php include '../library/navbar.php' ?>
    <?php include '../library/db_conn.php' ?>
    <!-- files -->

    <h2 class="employee-title">Employee</h2>

    <!-- Employee Table -->
    <?php
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phonenumber</th>
                    <th scope="col">Update | Delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Display table data -->
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";

                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";

                        $departmentName = '';
                        if ($row['department'] == 1) {
                            $departmentName = 'IT';
                        } elseif ($row['department'] == 2) {
                            $departmentName = 'HR';
                        } elseif ($row['department'] == 3) {
                            $departmentName = 'Finance';
                        } elseif ($row['department'] == 4) {
                            $departmentName = 'Marketing';
                        } else {
                            $departmentName = 'Unknown';
                        }

                        echo "<td>" . $departmentName . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phonenumber'] . "</td>";
                        echo '<td> 
                                    <a href="updateEmployee.php?id=' . $row['id'] . '" class="btn btn-primary">Update</a>
                                    <a href="sql/delete.php?id=' . $row['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</a>
                              </td>';
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- Employee Table end-->
    </div>


</body>

</html>