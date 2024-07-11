<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Student Registration Form</h2>
        <form action="valid_info.php" method="POST">
            <!-- Text input -->
            <div class="mb-3">
                <label for="studentName" class="form-label">Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo isset($_POST['studentName']) ? htmlspecialchars($_POST['studentName']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['studentName'])) : ?>
                    <div class="text-danger"><?php echo $_GET['studentName']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label for="studentEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="studentEmail" name="studentEmail" value="<?php echo isset($_POST['studentEmail']) ? htmlspecialchars($_POST['studentEmail']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['studentEmail'])) : ?>
                    <div class="text-danger"><?php echo $_GET['studentEmail']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="studentPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="studentPassword" name="studentPassword">
                <?php if (isset($_GET['error']) && isset($_GET['studentPassword'])) : ?>
                    <div class="text-danger"><?php echo $_GET['studentPassword']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Number input -->
            <div class="mb-3">
                <label for="studentAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="studentAge" name="studentAge" value="<?php echo isset($_POST['studentAge']) ? htmlspecialchars($_POST['studentAge']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['studentAge'])) : ?>
                    <div class="text-danger"><?php echo $_GET['studentAge']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Dropdown input -->
            <div class="mb-3">
                <label for="studentCourse" class="form-label">Course</label>
                <select class="form-select" id="studentCourse" name="studentCourse">
                    <option selected disabled value="">Choose...</option>
                    <option value="science" <?php echo (isset($_POST['studentCourse']) && $_POST['studentCourse'] === 'science') ? 'selected' : ''; ?>>Science</option>
                    <option value="commerce" <?php echo (isset($_POST['studentCourse']) && $_POST['studentCourse'] === 'commerce') ? 'selected' : ''; ?>>Commerce</option>
                    <option value="arts" <?php echo (isset($_POST['studentCourse']) && $_POST['studentCourse'] === 'arts') ? 'selected' : ''; ?>>Arts</option>
                </select>
                <?php if (isset($_GET['error']) && isset($_GET['studentCourse'])) : ?>
                    <div class="text-danger"><?php echo $_GET['studentCourse']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Radio buttons -->
            <div class="mb-3">
                <label class="form-label">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'male') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'female') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <?php if (isset($_GET['error']) && isset($_GET['gender'])) : ?>
                    <div class="text-danger"><?php echo $_GET['gender']; ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="../assets/scripts.js"></script>
</body>

</html>