<?php
	session_start();

	$category="science fiction";

	$_SESSION["search"]=$category;
	function alert_func($msg)
	{
		echo '<script type="text/javascript">alert($msg)</script>';
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>login successful</title>
</head>
<body>
<?php
	
	if(isset($_SESSION["search"]))
	{
		header("location:searches.php");
	}
	else{
		echo '<script>window.alert("Invalid search")</script>';
	}
?>

</body>
</html>