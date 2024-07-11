<?php
// Check if already logged in, redirect to index.php
if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] === 'true') {
    header("Location: index.php");
    exit;
}

// Static credentials (you can replace these with a database check)
$valid_username = "admin";
$valid_password = "admin";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set cookies
        setcookie("loggedin", 'true', time() + (86400 * 30), "/"); // 30 days expiration
        setcookie("username", $username, time() + (86400 * 30), "/"); // 30 days expiration
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='container mt-5'>
                <div class='alert alert-danger'>Invalid username or password!</div>
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login using Cookies</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login using Cookies
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>