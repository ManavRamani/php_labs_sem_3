<?php
$n = 5;

for ($i = $n - 1; $i >= 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $n-$i; $j++) {
        echo ("&nbsp;&nbsp;*");
    }
    echo "<br> ";
}
?>