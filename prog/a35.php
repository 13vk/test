<?php
session_start();
$a1=@$_GET[t1];
$a2=@$_GET[t2];
if($a2==12345)
{
	$_SESSION[uid]=$a1;
	header("location:a36.php");
}
else
{
	header("location:a34.php?x=1");
}
?>