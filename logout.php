<?php
	session_start();
	//echo 'enter';
		if(isset($_SESSION["email"]))
		{
			echo 'before';
			session_destroy();
			echo 'after';
			header("location:index.php");
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<body>
				
			</body>
	</head>
</html>