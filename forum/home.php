<?php
session_start();
$rn=@$_SESSION[rn];
if($rn==null)
{
	header("location:login.php");
}
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	<center>
		<table width=90%>
			<tr><td colspan=3>
<a href=index.php><img src=header.png height=150 width=100%></a>
			</td></tr>
			<tr><td colspan=3><hr></td></tr>
<tr><td><?php echo"Welcome $rn";?></td><td><a href=logout.php>Logout</a></td></tr>
		</table>
		</center>
	</body>
</html>