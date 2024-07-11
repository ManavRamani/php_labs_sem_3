<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['studentName'])) {
        $errors['studentName'] = 'Name is required';
    }

    if (empty($_POST['studentEmail'])) {
        $errors['studentEmail'] = 'Email is required';
    } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['studentEmail'])) {
        $errors['studentEmail'] = 'Invalid email format';
    }

    if (empty($_POST['studentPassword'])) {
        $errors['studentPassword'] = 'Password is required';
    }

    if (empty($_POST['studentAge'])) {
        $errors['studentAge'] = 'Age is required';
    } elseif (!is_numeric($_POST['studentAge'])) {
        $errors['studentAge'] = 'Age must be a number';
    }

    if (empty($_POST['studentCourse'])) {
        $errors['studentCourse'] = 'Course is required';
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
