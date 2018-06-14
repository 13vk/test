<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];

mysql_connect("localhost","root");
mysql_select_db("btecha");

$a=mysql_query("select * from
	login where uid='$a1' and pwd='$a2'");
$b=mysql_num_rows($a);

if($b==0)
{
	header("location:a44.php?x=1");
}
else
{
mysql_query("delete from
login where uid='$a1' and pwd='$a2' ");
	header("location:a44.php?x=2");
}
?>