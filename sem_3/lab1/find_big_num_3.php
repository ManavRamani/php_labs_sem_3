<!-- 5. Find Big Value Using 3 number -->

<?php 

$num1 = 10;
$num2 = 20;
$num3 = 30;

if($num1==$num2 || $num1==$num3 || $num2==$num3){
    echo("same value are present");
}else if($num1>$num2 && $num1>$num3){
         echo("Number is Big : " . $num1);
}else if($num2>$num3){
    echo("Number is Big : " . $num2);
}
else{
    echo("Number is Big : " . $num3);
}

?>