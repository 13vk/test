<?php
function f1($a)
{
	echo"Table of $a is <br>";
	for($i=1;$i<=10;$i++)
	{
		$b=$a*$i;
		echo"$a*$i=$b<br>";
	}
}
f1(5);
?>