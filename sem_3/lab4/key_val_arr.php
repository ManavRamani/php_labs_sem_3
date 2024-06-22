<?php

$arr = array("item1" => 10, "val2" => 20, "value3" => 30);
// print_r($arr);

$keys = array_keys($arr);

echo ("<br>Array is : <br>");

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    $val = $arr[$key];
    echo ("$val <br>");
}
