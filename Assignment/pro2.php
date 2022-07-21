<?php
$physics=90;
$chemistry=85;
$biology=80;
$maths=75;
$computer=70;
echo "physics=".$physics."<br>"."chemistry=".$chemistry."<br>"."biology=".$biology."<br>"."maths=".$maths."<br>"."computer=".
$computer."<br>";

$total=$physics+$chemistry+$biology+$maths+$computer;
echo "Total=".$total."<br>";

$per=($total*100)/500;
echo "Percentage=".$per."<br>";

if($per>=80)
{
	echo "your grade is distinction";
}
elseif($per>75 && $per70)
{
	echo "your grade is first class";
}
elseif($per>65 && $per60)
{
	echo "your grade is second class";
}
elseif($per>55 && $per50)
{
	echo "your grade is third class";
}
else
{
	echo "you are fail";
}
?>