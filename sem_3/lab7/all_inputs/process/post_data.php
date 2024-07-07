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
if($_POST['submit']){
    // print_r($_POST);
    $name = $_POST['name'];
    $ennumber = $_POST['ennumber'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $color = $_POST['color'];
    $range = $_POST['range'];
    $branchName = $_POST['branchName'];

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