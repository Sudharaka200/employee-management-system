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
    <!-- files -->

    <h2 class="add-employee-title">Add Employee</h2>

    <div class="container">
        <form class="row g-3" action="sql/insert.php" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="name" name="first_name" class="form-control" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="name" name="last_name" class="form-control" id="inputPassword4" required>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Department</label>
                <select id="inputState" name="department" class="form-select" required>
                    <option value="">Select</option>
                    <option value="1">IT</option>
                    <option value="2">HR</option>
                    <option value="3">Finance</option>
                    <option value="4" >Marketing</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputCity" required>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Phonenumber</label>
                <input type="number" name="phonenumber" class="form-control" id="inputZip" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add New Employee</button>
            </div>
        </form>
    </div>

</body>

</html>