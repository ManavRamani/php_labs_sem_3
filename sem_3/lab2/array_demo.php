<?php

$arr1 = array(1, 3, 5, 2, 4);
for ($i = 0; $i < count($arr1); $i++) {
    echo ("arr1[$i] =$arr1[$i]<br>");
}
echo "<br>";



$arr2[1] = 20;
$arr2[2] = 30;
$arr2[3] = 40;
$arr2[] = 50;
$arr2[] = 60;
echo "<br>";

for ($i = 1; $i < count($arr2); $i++) {
    echo ("arr2[$i] =$arr2[$i]<br>");
}

echo "<br>";

$arr3 = array(6, 7);
echo "<br>";

for ($i = 0; $i < count($arr3); $i++) {
    echo ("arr3[$i] =$arr3[$i]<br>");
}
echo "<br>";

// write multi dymension array create and display array in php

$arr = array(
    array(10, 20, 40),
    array(30, 13, 23)
);
echo "<br>";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}
