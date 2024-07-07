<?php

if ($_REQUEST['submit']) {
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $method = 'POST';
    }else if($_SERVER['REQUEST_METHOD']== "GET"){
        $method = 'GET';
    }else{
        $method = "Other Method Used";
    }
    
    $name = $_REQUEST['name'];
    $ennumber = $_REQUEST['ennumber'];

    $gender = $_REQUEST['gender'];
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }

    $city = $_REQUEST['city'];
    $spi = $_REQUEST['spi'];
    $pass = $_REQUEST['pass'];
    $branchName = $_REQUEST['branchName'];
    $sem = $_REQUEST['sem'];

    valuePrint($method,$name, $ennumber, $gender, $city, $spi, $pass, $branchName, $sem);
}


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if ($_POST['submit']) {
//         $name = $_POST['name'];
//         $method = 'POST';
//         $ennumber = $_POST['ennumber'];

//         $gender = $_POST['gender'];
//         if ($gender == 1) {
//             $gender = "male";
//         } else {
//             $gender = "female";
//         }

//         $city = $_POST['city'];
//         $spi = $_POST['spi'];
//         $pass = $_POST['pass'];
//         $branchName = $_POST['branchName'];
//         $sem = $_POST['sem'];

//         valuePrint($method, $name, $ennumber, $gender, $city, $spi, $pass, $branchName, $sem);
//     }
// } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $method = 'GET';

//     $name = $_GET['name'];
//     $ennumber = $_GET['ennumber'];

//     $gender = $_GET['gender'];
//     if ($gender == 1) {
//         $gender = "male";
//     } else {
//         $gender = "female";
//     }

//     $city = $_GET['city'];
//     $spi = $_GET['spi'];
//     $pass = $_GET['pass'];
//     $branchName = $_GET['branchName'];
//     $sem = $_GET['sem'];

//     valuePrint($method, $name, $ennumber, $gender, $city, $spi, $pass, $branchName, $sem);
// } else {
//     echo "<br>Invalid Method...!<br>";
// }


function valuePrint($method,$name, $ennumber, $gender, $city, $spi, $pass, $branchName, $sem)
{
        echo ("method is : $method<br>");
        echo ("name is : $name<br>");
        echo ("Enroll Number : $ennumber<br>");
        echo ("Gender is : $gender<br>");
        echo ("City is : $city<br>");
        echo ("Spi is : $spi<br>");
        echo ("Password is : $pass<br>");
        echo ("Branch Name is : $branchName<br>");
        echo ("Sem is : $sem<br>");
}
