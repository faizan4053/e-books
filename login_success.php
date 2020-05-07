<?php
	session_start();
	function alert_func($msg)
	{
		echo '<script type="text/javascript">window.alert($msg)</script>';
	}
	if(isset($_SESSION["email"]))
	{
		$f=1;
	}
	else
	{
		$f=2;
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>login successful</title>
</head>
<body>
<?php
	
	if($f==1)
	{
		alert_func("login successful");
		header("location:index_after_login.php");
	}
	elseif($f==2)
	{
		alert_func("login failed");
		header("location:index.php");
	}
?>
</body>

</html>