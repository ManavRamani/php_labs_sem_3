<!-- 4. Wap to print class of result  based  on per. using switch  stat. -->

<?php

$per_std = 74;

switch(true){
    case $per_std<40:
        echo("Fail Student ....!");
        break;
    case $per_std>=40 && $per_std <50:
        echo("Pass Class .....");
        break;
    case $per_std>=50 && $per_std <60:
        echo("Second Class .....");
        break;
    case $per_std>=60 && $per_std <70:
        echo("First Class .....");
        break;
    case $per_std>=70:
        echo("Distinction .....");
        break;

}

?>