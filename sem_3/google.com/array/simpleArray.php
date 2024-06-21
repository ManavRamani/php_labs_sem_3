<?php

$arr = array('item1'=> 'This is Value 1','item2'=> 'This is Value 2','item3'=> 'This is Value 3');


for($i=0;$i<=2;$i++){
    // echo ($arr['item'.$i] . "</br>");
    print($arr['item'.$i+1] . "</br>");
}

?>