<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
    <link rel="stylesheet" href="../assets/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Employee Registration Form</h2>
        <form action="process_form.php" method="POST">
            <!-- Text input -->
            <div class="mb-3">
                <label for="employeeName" class="form-label">Name</label>
                <input type="text" class="form-control" id="employeeName" name="employeeName" value="<?php echo isset($_GET['employeeName']) ? htmlspecialchars($_GET['employeeName']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['employeeName'])) : ?>
                    <div class="text-danger"><?php echo $_GET['employeeName']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label for="employeeEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="employeeEmail" name="employeeEmail" value="<?php echo isset($_GET['employeeEmail']) ? htmlspecialchars($_GET['employeeEmail']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['employeeEmail'])) : ?>
                    <div class="text-danger"><?php echo $_GET['employeeEmail']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="employeePassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="employeePassword" name="employeePassword">
                <?php if (isset($_GET['error']) && isset($_GET['employeePassword'])) : ?>
                    <div class="text-danger"><?php echo $_GET['employeePassword']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Number input -->
            <div class="mb-3">
                <label for="employeeAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="employeeAge" name="employeeAge" value="<?php echo isset($_GET['employeeAge']) ? htmlspecialchars($_GET['employeeAge']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['employeeAge'])) : ?>
                    <div class="text-danger"><?php echo $_GET['employeeAge']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Dropdown input -->
            <div class="mb-3">
                <label for="employeeDepartment" class="form-label">Department</label>
                <select class="form-select" id="employeeDepartment" name="employeeDepartment">
                    <option selected disabled value="">Choose...</option>
                    <option value="hr" <?php echo (isset($_GET['employeeDepartment']) && $_GET['employeeDepartment'] === 'hr') ? 'selected' : ''; ?>>HR</option>
                    <option value="sales" <?php echo (isset($_GET['employeeDepartment']) && $_GET['employeeDepartment'] === 'sales') ? 'selected' : ''; ?>>Sales</option>
                    <option value="development" <?php echo (isset($_GET['employeeDepartment']) && $_GET['employeeDepartment'] === 'development') ? 'selected' : ''; ?>>Development</option>
                </select>
                <?php if (isset($_GET['error']) && isset($_GET['employeeDepartment'])) : ?>
                    <div class="text-danger"><?php echo $_GET['employeeDepartment']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Radio buttons -->
            <div class="mb-3">
                <label class="form-label">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo (isset($_GET['gender']) && $_GET['gender'] === 'male') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo (isset($_GET['gender']) && $_GET['gender'] === 'female') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <?php if (isset($_GET['error']) && isset($_GET['gender'])) : ?>
                    <div class="text-danger"><?php echo $_GET['gender']; ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>
