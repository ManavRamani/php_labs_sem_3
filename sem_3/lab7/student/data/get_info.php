<?php

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $ennumber = $_GET['ennumber'];

    $gender = $_GET['gender'];
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }

    $city = $_GET['city'];
    $spi = $_GET['spi'];
    $pass = $_GET['pass'];
    $branchName = $_GET['branchName'];
    $sem = $_GET['sem'];

    echo ("name is : $name<br>");
    echo ("Enroll Number : $ennumber<br>");
    echo ("Gender is : $gender<br>");
    echo ("City is : $city<br>");
    echo ("Spi is : $spi<br>");
    echo ("Password is : $pass<br>");
    echo ("Branch Name is : $branchName<br>");
    echo ("Sem is : $sem<br>");
}
