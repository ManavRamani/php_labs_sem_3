<?php


if (isset($_POST['submit'])) {
    // print_r($_POST);
    $name = $_POST['name']??"";
    $empno = $_POST['empno']??"";
    $gender = $_POST['gender']??"";
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }
    $hobby = $_POST['hobby']??"";
    $city = $_POST['city']??"";
    $pass = $_POST['pass']??"";
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
