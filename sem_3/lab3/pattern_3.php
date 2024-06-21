<?php
$n=5;
$count=0;
for($i=0;$i<$n;$i++){
    for($j=0;$j<=$i;$j++){
        $count++;
        echo("&nbsp;&nbsp;$count&nbsp;&nbsp;&nbsp;");
    }
    echo("<br>");
}

?>