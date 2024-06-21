<!-- 7. Simple Calculator -->

<?php

$input1 = 10;
$input2 = 10;
$opration = '+';

switch ($opration) {
    case '+':
        echo ("Sum is : " . $input1 + $input2);
        break;
    case '-':
        echo ("Sub is : " . $input1 - $input2);
        break;
    case '*':
        echo ("Mul is : " . $input1 * $input2);
        break;
    case '/':
        echo ("Div is : " . $input1 / $input2);
        break;
    case '%':
        echo ("Mod is : " . $input1 % $input2);
        break;

    default:
        echo("Invalid Choice ......");
        break;
}



?>