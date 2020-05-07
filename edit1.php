<?php 
	session_start();
	try{
		$conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$f=0;
		extract($_POST);
		$mail=$_SESSION["email"];
		if(isset($edit1))
		{
			$st=$conn->prepare("update login set col1=:val1,col2=:val2,col3=:val3,col4=:val4 where login_id=:id");

			$st->bindParam(":val1",$fname);

			$st->execute();
			$f=1;
		}

		if(isset($edit1))
		{
			$st=$conn->prepare("update login set col1=:val1,col2=:val2,col3=:val3,col4=:val4 where login_id=:id");

			$st->bindParam(":val1",$fname);

			$st->execute();
			$f=1;
		}

		if(isset($edit1))
		{
			$st=$conn->prepare("update login set col1=:val1,col2=:val2,col3=:val3,col4=:val4 where login_id=:id");

			$st->bindParam(":val1",$fname);

			$st->execute();
			
			$f=1;
		}

		if(isset($edit1))
		{
			$st=$conn->prepare("update login set col1=:val1,col2=:val2,col3=:val3,col4=:val4 where login_id=:id");

			$st->bindParam(":val1",$fname);

			$st->execute();
			$f=1;
		}

			if($f>0)
			{
				$_SESSION["fname"]=$fname;
				$_SESSION["edit"]=1;
				header("location:login_success.php");
			}
		}

	}
	catch(PDOException $e){
		die("connection failed".$e->getmessage());
	}
?>

<html>
	<head>
		<title>user_editing</title>
		<body>
			
		</body>
	</head>
</html>