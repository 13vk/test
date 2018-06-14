<?php
mysql_connect("localhost","root");
mysql_select_db("btecha");
$a=mysql_query("select * from login");
$b=mysql_num_rows($a);
for($i=0;$i<$b;$i++)
{
$a1=mysql_result($a,$i,"uid");
echo"User id is $a1<br>";
$a2=mysql_result($a,$i,"pwd");
echo"Password  is $a2<hr>";
}
?>