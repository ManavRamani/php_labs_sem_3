<?php

$s = 100;
$e = 999;

for ($n = $s; $n <= $e; $n++) {
    $sum = 0;
    $temp = $n;
    $nStr = (string)$n;
    $nDigit = strlen($nStr);

    for ($i = 0; $i < $nDigit; $i++) {
        $digit = (int) $nStr[$i];
        $sum = $sum + pow($digit, $nDigit);
    }

    if ($sum == $n) {
        echo ($n . "<br>");
    }
}
