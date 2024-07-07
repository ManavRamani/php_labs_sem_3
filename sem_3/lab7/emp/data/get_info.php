<?php


if (isset($_GET['submit'])) {
    // print_r($_GET);
    $name = $_GET['name']??"";
    $empno = $_GET['empno']??"";

    $gender = $_GET['gender']??"";
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }
    $hobby = $_GET['hobby']??"";

    $city = $_GET['city']??"";
    $pass = $_GET['pass']??"";

    $size = sizeof($hobby);


    echo ("name is : $name<br>");
    echo ("Enroll Number : $empno<br>");
    echo ("Password is : $pass<br>");
    echo ("Gender is : $gender<br>");
    echo ("City is : $city<br>");
    echo("Hobby : ");

    for($i=0;$i<$size;$i++){
        echo($hobby[$i].", ");
    }
}
