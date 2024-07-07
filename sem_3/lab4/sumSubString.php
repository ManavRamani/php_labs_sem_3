<?php

$arr=[1,2,3,4,5];
$sumArr = [];
$sum=0;
$ans = 5;

foreach($arr as $key => $e){
        $sum+=$e;
        $sumArr[$key] = $e;
}

?>