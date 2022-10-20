<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","id19737888_project","c))i!|chEuQLma2j","id19737888_akash");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

	

// $cn=mysqli_connect("localhost","root","","travel");
?>
</body>
</html>