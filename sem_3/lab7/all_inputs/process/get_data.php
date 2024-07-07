<?php
/*

Array ( 
[name] => hdfsk 
[ennumber] => 1234 
[gender] => 1 
[hobby] => Array ( [0] => Reading [1] => Drawing ) 
[address] => wsrg jnm; ,;, ; lnl 
[phone] => 1234567890 
[email] => admin1@gmail.com 
[pass] => 12345678 
[color] => #962222 
[range] => 2 
[branchName] => B.Tech 
[submit] => submit )

*/ 
if($_GET['submit']){
    // print_r($_GET);
    $name = $_GET['name'];
    $ennumber = $_GET['ennumber'];
    $gender = $_GET['gender'];
    $hobby = $_GET['hobby'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $color = $_GET['color'];
    $range = $_GET['range'];
    $branchName = $_GET['branchName'];

    echo "<br>name : $name<br>";
    echo "ennumber : $ennumber<br>";
    echo "gender : $gender<br>";
    echo("Hobby : ");
    for($i=0;$i<count($hobby);$i++){
        echo($hobby[$i].", ");
    }
    echo "<br>address : $address<br>";
    echo "phone : $phone<br>";
    echo "email : $email<br>";
    echo "pass : $pass<br>";
    echo "color : $color<br>";
    echo "range : $range<br>";
    echo "branchName : $branchName<br>";

}

?>