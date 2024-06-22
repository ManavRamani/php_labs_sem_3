<?php

$arr1 = array(1, 5, 2, 6, 8, 3);
$arr2 = array(10, 20,);

echo ("<br>Before sort : ");
print_r($arr1);
sort($arr1);
echo ("<br>After sort : ");
print_r($arr1);

echo ("<br><br>Before sort reverse order : ");
print_r($arr1);
rsort($arr1);
echo ("<br>After sort reverse order : ");
print_r($arr1);

echo ("<br><br>Before Array Shift : ");
print_r($arr1);
array_shift($arr1);
echo ("<br>After Array Shift : ");
print_r($arr1);

echo ("<br><br>Before Array Merge : ");
print_r($arr2);
$arr2 = array_merge($arr1, $arr2);
echo ("<br>After Array Merge : ");
print_r($arr2);

echo ("<br><br>Before Array Pop element : ");
print_r($arr2);
array_pop($arr2);
echo ("<br>After Array Poped element : ");
print_r($arr2);


echo ("<br><br> Array size : ");
print_r($arr2);

echo("<br>Size of Array : ".sizeof($arr2));
?>