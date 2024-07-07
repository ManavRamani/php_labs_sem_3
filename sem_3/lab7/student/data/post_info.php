<?php
// Array ( [name] => fj [ennumber] => 2839 
// [gender] => 1 [city] => lkfg [spi] => 3984 [pass] => 98247 [branchName] => MCA [sem] => Sem 1 )

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $ennumber = $_POST['ennumber'];

    $gender = $_POST['gender'];
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }

    $city = $_POST['city'];
    $spi = $_POST['spi'];
    $pass = $_POST['pass'];
    $branchName = $_POST['branchName'];
    $sem = $_POST['sem'];

    echo ("name is : $name<br>");
    echo ("Enroll Number : $ennumber<br>");
    echo ("Gender is : $gender<br>");
    echo ("City is : $city<br>");
    echo ("Spi is : $spi<br>");
    echo ("Password is : $pass<br>");
    echo ("Branch Name is : $branchName<br>");
    echo ("Sem is : $sem<br>");
}
