<?php

function cal($n1, $n2, $choice)
{
    switch ($choice) {
        case '+':
            return $n1 + $n2;
            break;
        case '-':
            return $n1 - $n2;
            break;
        case '*':
            return $n1 * $n2;
            break;
        case '/':
            if ($n1 == 0 || $n2 == 0) {
                return 0;
            } else {
                return $n1 / $n2;
            }
            break;
        default:
            echo ("Invalid Choice...!");
            break;
    }
}

$n1 = 10;
$n2 = 20;

$ans = cal($n1, $n2, '+');

echo ("Answer is " . $ans . "<br>");
