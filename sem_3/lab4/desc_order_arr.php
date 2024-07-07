<?php

$arr = [10, 40, 20, 50, 36];
$n=count($arr);

for($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $n-$i-1; $j++) {
        if($arr[$j]>$arr[$j+1]){
            $temp=$arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1]=$temp;
        }
    }
}

for($i=$n-1;$i>=0;$i--){
    echo($arr[$i]."<br>");
}
