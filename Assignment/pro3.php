<?php
$a=200;
$b=150;
$c=100;
echo "a=".$a."<br>"."b=".$b."<br>"."c=".$c."<br>";
$max=($a>$b)?($a>$b?$a:$c):($b>$c?$b:$c);
echo "The Larjest Number".$a.",".$b.",".$c."is:"."<br>".$max;
?>


