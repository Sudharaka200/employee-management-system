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

    <div class="container" >
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="name" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Department</label>
                <select id="inputState" class="form-select">
                    <option>IT</option>
                    <option>HR</option>
                    <option>Finance</option>
                    <option>Marketing</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Phonenumber</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

</body>

</html>