<!-- 

1 2 3 4 5
 2 3 4 5
  3 4 5
   4 5
    5
   4 5
  3 4 5
 2 3 4 5
1 2 3 4 5 -->
<?php
$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = $i + 1; $j <= $n; $j++) {
        echo $j . "&nbsp;&nbsp;";
    }

    echo "<br>";
}

for ($i = $n - 2; $i >= 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = $i + 1; $j <= $n; $j++) {
        echo $j . "&nbsp;&nbsp;";
    }

    echo "<br>";
}
?>