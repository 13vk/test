<html>
	<head>
	<title>
	</title>
	</head>
	<body>
	<form name=frm1>
	<input type=text name=t1><input type=submit>
	</form>
	<hr>
	<?php
	$a=@$_GET[t1];
	for($i=1;$i<=$a;$i++)
	{
		$b='T'.$i;
		echo"$b <input type=text name=$b><br>";
	}
	?>
	</body>
</html>