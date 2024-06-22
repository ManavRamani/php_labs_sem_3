<?php
// Array sort without using function

$arr = array(23,5,2,7,4,73,33);
echo("<br>before Sort : <br>");
print_r($arr);

for($i=0;$i<count($arr);$i++){
    for($j=1;$j<count($arr);$j++){
        if($arr[$j]>$arr[$i]){
            $temp = $arr[$j]; 
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

echo("<br>after Sort : <br>");
print_r($arr);

?>