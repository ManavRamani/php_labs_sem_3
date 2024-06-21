<?php
echo ("For Loop using print Even Sum : <br><br>");
$sum=0;
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    if($i%2==0){
        $sum+=$i;
    }
}
echo("Sum : $sum <br>");
echo ("<br>While Loop using print Even Sum : <br><br>");
$sum=0;
$i = 1;
while ($i <= $n) {
    if($i%2==0){
        $sum+=$i;
    }$i++;
}
echo("Sum : $sum <br>");
echo ("<br> Do While Loop using print Even Sum: <br><br>");
$i = 1;
$sum=0;
do {
    if($i%2==0){
        $sum+=$i;
    }$i++;
} while ($i <= $n);
echo("Sum : $sum <br>");
