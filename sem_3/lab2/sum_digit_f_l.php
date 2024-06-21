<?php
$number = 12345;

$numStr = (string)$number;

$firstDigit = (int)$numStr[0];
$lastDigit = (int)$numStr[strlen($numStr) - 1];

$sum = $firstDigit + $lastDigit;

echo "The sum of the first and last digits of $number is: " . $sum;
?>
