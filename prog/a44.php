<html>
	<head>
		<title>
		a44.php
		</title>
	</head>
	<body>
<form name=frm1 action=a45.php method=get>
Enter USer Id <input type=text name=t1><br>
Enter Password <input type=text name=t2><br>
<input type=submit>
		</form><br>
		<?php
				$a=@$_GET[x];
				if($a==1)
				{
		echo"<font color=red>Invalid id or
		Password</font>";
				}
				if($a==2)
				{
		echo"<font color=blue>Account deleted succesfully</font>";
				}
		?>
	</body>
</html>