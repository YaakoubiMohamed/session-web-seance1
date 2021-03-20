<?php

$a = 12;
$b = 4;
$x= $a;
$y= $b;
while($x != $y){
    if($x>$y)
    {
        $x-=$y;
    }
    else
    $y-=$x;
}
echo "le PGCD de $a et $b est ".$x; //$x ou $y
?>