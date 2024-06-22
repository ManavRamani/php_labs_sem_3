<?php

$arr = array(
    array("manav",20,"mca"),
    array(4,"jhdf",6,10,34,2394),
    array(7,8.20,9),
);

echo "<br>";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . ", ";
    }
    echo "<br>";
}

?>