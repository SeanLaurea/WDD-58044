<html>
<body>
<?php

//inequality
$a = 2;
$b = 3;
echo "<br>";
$bank_balance = 99;

	if($a !=$b) echo "1";
	if($a !== $b) echo "2";
	echo "<br>";

//comparison operator
	if($a > $b) echo "a is greater than b<br>";
	echo "<br>";
	if($a < $b) echo "a is less than b<br>";
	echo "<br>";
	if($a >= $b) echo "a is greater than or equal to b<br>";
	echo "<br>";
	if($a <= $b) echo "a is less than or equal to b<br>";

//logical operator

	echo ($a AND $b). "<br>";
	echo ($a or $b). "<br>";
	echo ($a XOR $b). "<br>";
	echo !$a 	. "<br>";

//if statement

	if($bank_balance<1000)
{
	$money = 1000;
	$bank_balance+=$money;
	echo $bank_balance;
}

?>
</body>
</html>