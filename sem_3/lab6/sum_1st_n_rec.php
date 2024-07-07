<?php

function sum($num)
{
    $ans=0;
    if($num == 0){
        return 0;
    }
    return $ans=($num + sum($num-1));
}


$ans = sum(10);

echo ("Sum is : " . $ans);
