<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['textInput'])) {
        $errors['textInput'] = 'Text input is required';
    }

    if (empty($_POST['emailInput'])) {
        $errors['emailInput'] = 'Email is required';
    } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['emailInput'])) {
        $errors['emailInput'] = 'Invalid email format';
    }

    if (empty($_POST['passwordInput'])) {
        $errors['passwordInput'] = 'Password is required';
    }

    if (empty($_POST['numberInput'])) {
        $errors['numberInput'] = 'Number input is required';
    } elseif (!is_numeric($_POST['numberInput'])) {
        $errors['numberInput'] = 'Number input must be a number';
    }

    if (empty($_POST['dropdownInput'])) {
        $errors['dropdownInput'] = 'Dropdown input is required';
    }

    if (empty($_POST['radioInput'])) {
        $errors['radioInput'] = 'Radio input is required';
    }

    if (empty($_POST['rangeInput'])) {
        $errors['rangeInput'] = 'Range input is required';
    }

    if (empty($_POST['colorInput'])) {
        $errors['colorInput'] = 'Color input is required';
    }

    if (empty($_POST['datetimeInput'])) {
        $errors['datetimeInput'] = 'Datetime input is required';
    } elseif (!strtotime($_POST['datetimeInput'])) {
        $errors['datetimeInput'] = 'Invalid datetime format';
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
