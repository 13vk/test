<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];

mysql_connect("localhost","root");
mysql_select_db("btecha");

mysql_query("insert into login
				values('$a1','$a2')");

echo"USer created";


?>