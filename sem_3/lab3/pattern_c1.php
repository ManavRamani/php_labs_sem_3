<?php
$n = 5;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $n - $i; $j++) {
        echo ("&nbsp;&nbsp;");
    }
    for ($j = 0; $j <= $i; $j++) {
        if ($i == 2 && $j == 1 || $i == 3 && ($j > 0 && $j < $i)) {
            echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
        } else {
            echo ("*&nbsp;&nbsp;");
        }
    }
    echo "<br>";
}
