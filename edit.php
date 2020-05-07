
<?php
	session_start();
	
    try{
        $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");

            extract($_POST);

            $mail=$_SESSION["email"];

           // echo $mail;

            //edit first name
            if(isset($but1)){

                $st=$conn->prepare("update login set fname=:fn where login_id=:login");
                $st->bindParam(":login",$mail);
                $st->bindParam(":fn",$fname);
                $ab=$st->execute();  
             }
             //edit last name
            
            if(isset($but2)){

                $st=$conn->prepare("update login set lname=:ln where login_id=:login");
                $st->bindParam(":login",$mail);
                $st->bindParam(":ln",$lname);
                $ab=$st->execute();  
             }

             //edit password
             if(isset($but3)){
             	echo 'in password';
                $st=$conn->prepare("update login set password=:pas where login_id=:login");
                $st->bindParam(":login",$mail);
                $st->bindParam(":pas",$pass);
           		$ab=$st->execute();  
             }  

             //edit dob
             if(isset($but4)){

                $st=$conn->prepare("update login set DOB=:d where login_id=:login");
                $st->bindParam(":login",$mail);
               
                $st->bindParam(":d",$age);

                $ab=$st->execute();  
             }

             //edit address
             if(isset($but5)){

                $st=$conn->prepare("update login set address=:ad where login_id=:login");
                $st->bindParam(":login",$mail);             
                $st->bindParam(":ad",$addr);
                $ab=$st->execute();  
             }

             //edit contact number
             if(isset($but6)){

                $st=$conn->prepare("update login set number=:cn where login_id=:login");
                $st->bindParam(":login",$mail);              
                $st->bindParam(":cn",$cont);                
                $ab=$st->execute();  
             }
                           
    }
    catch(PDOException $e){
        die("connection failed".$e->getmessage());
    }
?>

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Details</title>
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
  margin-bottom: 10px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  margin-left:0px;
  color: #FFF;
  background-color: #e8491d;
  font-size: 15px;
  text-align: center;
  border-radius: 5px;
  width: 15%;
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

      <form  method="post">
      
        <h1>Edit Details</h1>
        
        <fieldset>
          
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" >
	  <button type="submit" name="but1">Edit</button>
          
	  <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" >
	  <button type="submit" name="but2">Edit</button>

          <label for="password">Password</label>
          <input type="password" id="password" name="pass">
	  <button type="submit" name="but3">Edit</button>
          
          <label>Date of Birth</label>
          <input type="date" placeholder="dob" name="age">
	  <button type="submit" name="but4">Edit</button>
	
	  <label for="address">Address</label>
          <input type="text" id="address" name="addr">
	  <button type="submit" name="but5">Edit</button>

	  <label for="contact">Contact Number</label>
          <input type="text" id="contact" name="cont">
	  <button type="submit" name="but6">Edit</button>
	  
        </fieldset>
        
        
   
      </form>
      
    </body>
</html>	
