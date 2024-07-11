<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Session Login</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Welcome, <?php echo $_SESSION['username']; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">Data Display</h5>
                <p class="card-text">This is where your data would be displayed.</p>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
