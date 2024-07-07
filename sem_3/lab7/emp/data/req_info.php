<?php


if (isset($_REQUEST['submit'])) {
    // print_r($_REQUEST);
    $name = $_REQUEST['name']??"";
    $empno = $_REQUEST['empno']??"";

    $gender = $_REQUEST['gender']??"";
    if ($gender == 1) {
        $gender = "male";
    } else {
        $gender = "female";
    }
    $hobby = $_REQUEST['hobby']??[];

    $city = $_REQUEST['city']??"";
    $pass = $_REQUEST['pass']??"";

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

?>

