<?php

$n1 = 0;
$n2 = 1;
$n = 10;
$sum=0;

echo ("Answer is : ");

if ($n == 1) {
    echo ("0");
} else if ($n == 2) {
    echo ("0, 1");
} else {
    echo("0, 1, ");
    for ($i = 3; $i <= $n; $i++) {
        $sum = $n1 + $n2;
        echo("$sum, ");

        $n1=$n2;
        $n2=$sum;
    }
}
