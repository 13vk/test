<html>
	<head>
		<title>
		a42.php
		</title>
	</head>
	<body>
<form name=frm method=get action=a43.php>
Enter User Id <input type=text name=t1><br>
Enter Old Password <input type=text name=t2><br>
Enter New Password <input type=text name=t3><br>
		<input type=submit><br>
		<?php
		$a=@$_GET[x];
		if($a==1)
		{
echo"<font color=red>Invalid id or
Password</font>";
		}
		if($a==2)
		{
echo"<font color=blue>Password
updated succesfully</font>";
		}
		?>		</form>	</body></html>