<html>
	<head>
		<title>
		a18.php
		</title>
	</head>
	<body>
<form name=frm1  method=post>
Enter Name <input type=text name=t1><br>
Enter Password
<input type=password name=t2>
<br>
<input type=submit>
</form><br>
<?php
$a1=@$_POST[t1];
$a2=@$_POST[t2];
if($a1!=null)
{
	echo"Name is $a1<br>";
	echo"Password is $a2";
}
?>
	</body>
</html>