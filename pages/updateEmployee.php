<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | Update</title>
</head>

<body>
    <!-- files -->
    <?php include '../library/db_conn.php'; ?>
    <?php include '../library/head.php'; ?>
    <!-- files -->

    <?php
    if (!isset($_GET['id'])) {
        die("ID not provided.");
    }
    
    $id = $_GET['id'];
    
    //get current data
    $stmt = $conn->prepare("SELECT * FROM employee WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $employee = $result->fetch_assoc();
    ?>

    <h2 class="add-employee-title">Update Employee</h2>
    <!-- Form -->
    <div class="container">
        <form class="row g-3" action="sql/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $employee['id'] ?>">

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="name" name="first_name" class="form-control" value="<?= $employee['first_name'] ?>" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="name" name="last_name" class="form-control" value="<?= $employee['last_name'] ?>" id="inputPassword4" required>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Department</label>
                <select id="inputState" name="department" class="form-select" required>
                    <option value="">Select</option>
                    <option value="1" <?= $employee['department'] == 1 ? 'selected' : '' ?>>IT</option>
                    <option value="2" <?= $employee['department'] == 2 ? 'selected' : '' ?>>HR</option>
                    <option value="3" <?= $employee['department'] == 3 ? 'selected' : '' ?>>Finance</option>
                    <option value="4" <?= $employee['department'] == 4 ? 'selected' : '' ?>>Marketing</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $employee['email'] ?>" id="inputCity" required>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Phonenumber</label>
                <input type="tel" name="phonenumber" class="form-control" value="<?= $employee['phonenumber'] ?>" id="inputZip" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>
        </form>
        <!-- Form end-->
    </div>

</body>

</html>
