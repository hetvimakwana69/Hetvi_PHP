<?php

echo $a=10 ."<br>";
function addition()
{
    $x=10;
    $y=45;
    echo $GLOBALS['z']=$x+$y."<br>";
}
addition();
echo $z;

?>