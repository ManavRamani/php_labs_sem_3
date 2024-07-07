<?php

function oddSum($arr,$size){
    $sum = 0;
    for($i=0;$i<$size;$i++){
        if($i%2!=0){
            $sum += $arr[$i];
        }
    }
    return $sum;
}

$arr = [1,2,3,4,5,6,7,8,9,10];
echo ("Sum is odd Number : ".oddSum($arr,sizeof($arr)));



?>