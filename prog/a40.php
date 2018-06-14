<?php
mysql_connect("localhost","root");
mysql_select_db("btecha");
$a=mysql_query("select * from login");

$a1=mysql_result($a,0,"uid");
echo"User id is $a1<br>";

$a2=mysql_result($a,0,"pwd");
echo"Password  is $a2<br>";
?>