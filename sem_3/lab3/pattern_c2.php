<!-- 
    1
   1 1
  1 2 1
 1 3 3 1
1 4 6 4 1
-->

<?php
$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }

    $value = 1;
    for ($j = 0; $j <= $i; $j++) {
        echo ($value . "&nbsp;&nbsp;");

        $value = $value * ($i - $j) / ($j + 1);
    }

    echo "<br>";
}
?>