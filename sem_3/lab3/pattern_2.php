<?php
$n=5;
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $n-$i; $j++) {
        echo("&nbsp;&nbsp;");
    }
    for ($j = 0; $j <= $i; $j++) {
        echo("*&nbsp;&nbsp;");
    }
    echo "<br>";
}
