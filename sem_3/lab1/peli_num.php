<!-- 6. Wap to check Number is Pelindrome or not -->


<?php

$num = 121; 
$temp = $num;
$reversNum = 0;

while($temp > 0){

    $digit = $temp %10;
    $reversNum = $reversNum *10  + $digit;
    $temp = (int) ($temp/10);

}

if ($num == $reversNum) {
    echo ("Number is Pelindrome");
} else {
    echo ("Number is Not Pelindrome");
}


?>