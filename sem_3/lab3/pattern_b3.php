<?php
$n = 5;

for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j < $n; $j++) {
        echo ("&nbsp;&nbsp;");
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*&nbsp;&nbsp;";
    }

    echo "<br> ";
}

?>