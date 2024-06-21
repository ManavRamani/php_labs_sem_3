<?php

$a = 10;

echo ("For Loop using print Odd : <br><br>");

for ($i = 1; $i <= $a; $i++) {
    if($i%2!=0){
        echo ("$i<br>");
    }
}

echo ("<br>While Loop using print Odd : <br><br>");

$i = 1;
while ($i <= $a) {
    if($i%2!=0){
        echo ("$i<br>");
    }
    $i++;
}

echo ("<br> Do While Loop using print Odd : <br><br>");
$i = 1;
do {
    if($i%2!=0){
        echo ("$i<br>");
    }
    $i++;
} while ($i <= $a);
