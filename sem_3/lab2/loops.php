<?php

$a = 10;

echo ("For Loop : <br><br>");

for ($i = 1; $i <= $a; $i++) {
    echo ("$i<br>");
}

echo ("<br>While Loop : <br><br>");

$i = 1;
while ($i <= $a) {
    echo ("$i<br>");
    $i++;
}

echo ("<br> Do While Loop : <br><br>");
$i = 1;
do {
    echo ("$i<br>");
    $i++;
} while ($i <= $a);
