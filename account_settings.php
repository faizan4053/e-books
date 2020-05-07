	
<?php 
  session_start();

  function alert_func($msg)
  {
    echo '<script type="text/javascript">alert($msg)</script>';
  }
  $f=0;
  try{
    $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    extract($_POST);
    if(isset($but))
    {
      if(empty($email) || empty($pass))
      {
        $f=1;
      }

      $st=$conn->prepare("select * from login where login_id=:log and password=:pas");

      $st->bindParam(":log",$email);

      $st->bindParam(":pas",$pass);

      $st->execute();

      $count=$st->rowCount();

      if($count>0)
      {

        $_SESSION["email"]=$email;
        header("location:edit.php");
      }
      else
      {
        $f=2;
      }

    }

  }
  catch(PDOException $e){
    die("connection failed".$e->getmessage());
  }
?>

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
	<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}


select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #e8491d;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}



label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}



@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style>
    </head>
    <body>

      <form method="post">
      
        <h1>Authenticate</h1>
        
        <fieldset>


          <label for="mail">Email</label>
          <input type="email" id="mail" name="email" required>
          
          <label for="password">Password</label>
          <input type="password" id="password" name="pass"  required >

	  
        </fieldset>
        
        
        <button type="submit"  name="but">Submit</button>
      </form>
      
    </body>
</html>	
