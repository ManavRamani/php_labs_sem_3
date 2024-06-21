<!-- 8. cal bill -->

<!-- 
unit
totalBill
150

50 down      0.50
50 to 150    0.57
150 to 250   1.20
250 up       1.50

-->


<?php

$unit = 100;
$totalBill = 0;

if ($unit <= 50) {
    $totalBill = $unit * 0.50;
} else if ($unit <= 150) {
    $totalBill = 50 * 0.50 + ($unit - 50) * 0.75;
} else if ($unit <= 250) {
    $totalBill = 50 * 0.50 + 100 * 0.75 + ($unit - 100) * 1.20;
} else {
    $totalBill = 50 * 0.50 + 100 * 0.75 + 100 * 1.20 + ($unit - 250) * 1.50;
}

echo ("Unit : " . $unit . "</br>");
echo ("Total Bill : " . $totalBill)

?>