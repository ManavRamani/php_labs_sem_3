<?php

$arr = [10, 40, 200, 50, 36];
$n = count($arr);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo ("Small Value is : " . $arr[0] . "<br>");
echo ("Big Value is : " . $arr[$n - 1] . "<br>");
