<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['employeeName'])) {
        $errors['employeeName'] = 'Name is required';
    }

    if (empty($_POST['employeeEmail'])) {
        $errors['employeeEmail'] = 'Email is required';
    } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['employeeEmail'])) {
        $errors['employeeEmail'] = 'Invalid email format';
    }

    if (empty($_POST['employeePassword'])) {
        $errors['employeePassword'] = 'Password is required';
    }

    if (empty($_POST['employeeAge'])) {
        $errors['employeeAge'] = 'Age is required';
    } elseif (!is_numeric($_POST['employeeAge'])) {
        $errors['employeeAge'] = 'Age must be a number';
    }

    if (empty($_POST['employeeDepartment'])) {
        $errors['employeeDepartment'] = 'Department is required';
    }

    if (empty($_POST['gender'])) {
        $errors['gender'] = 'Gender is required';
    }

    if (!empty($errors)) {
        $queryString = 'error=1';
        foreach ($errors as $key => $message) {
            $queryString .= "&$key=" . urlencode($message);
        }
        header("Location: index.php?$queryString");
        exit;
    }

    echo '<div class="alert alert-success">Form submitted successfully!</div>';
}
?>
