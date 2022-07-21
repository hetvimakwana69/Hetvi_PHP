<h1>Result</h1>
<?php
$phy=70;
$che=65;
$bio=80;
$eng=75;

echo  "Phy=".$phy."<br>"."Che=".$che."<br>"."Bio=".$bio."<br>"."Eng=".$eng."<br>";
$total=$phy+$che+$bio+$eng;
echo "Total marks is:.$total"."<br>";
$per=($total*100)/400;
echo "Percentage is:.$per"."<br>";
if($per>=70)
{
	echo "Your grade is distinction class <br>";
}
elseif($per>=65 && $per>=60)
{
	echo "Your grade is first class <br>";
}     
elseif($per>=55 && $per>=50)
{
	echo "Your grade is second class <br>";
}     
else
{
	echo "Your grade is fail<br>";
}




?>
