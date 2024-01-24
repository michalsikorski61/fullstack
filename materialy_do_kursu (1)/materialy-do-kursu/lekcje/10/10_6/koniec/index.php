<?php
// $result = sumNumbers();
// function sumNumbers($a = 2, $b = 3)
// {
// 	return $a + $b;
// }

$x = 4;

function modifyValue(&$a)
{
	$a /= 2;
	return $a;
}

$result = modifyValue($x);
echo($result);
echo '<br>';
echo($x);
?>