<?php
    session_start();

    try{
        $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
        //$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            extract($_POST);

            if(isset($but2)){

                $st=$conn->prepare("insert into seller (login_id,password,fname,lname,number,address,DOB) values(:login,:pass,:fn,:ln,:nu, :addr,:age)");
                $st->bindParam(":login",$email);
                $st->bindParam(":pass",$pass);
                $st->bindParam(":fn",$fname);
                $st->bindParam(":ln",$lname);
                $st->bindParam(":nu",$num);
                $st->bindParam(":addr",$addr);
                $st->bindParam(":age",$age);
                

                $ab=$st->execute();  
                if($ab)
                {
                    $_SESSION['email']=$email;
                    header("location:sellersignin.php");
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
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/cart.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
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

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #e8491d;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style>
    </head>
    <body>
    <header style="padding-top:20px">
        <!---------------------------------------- Menu sidebar start, css in menu.css---------------------------------->
        <span class="menu_icon" onclick="openNav()">&#9776</span>
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <a class="home" href="home.php">Home</a>
                
                <a href="signin.php" class="after_login">Sign in</a>
                
                <a href="signup.php" class="Sing_In_out">Sign up</a>
                <a href="sellersignin.php" class="after_login">Seller</a>
            </div>
            
		    <script>
		        var action=0;
                function openNav(){
                    if(action==0){
                        document.getElementById("mySidenav").style.width="250px";
                    document.getElementsByTagName('body')[0].style.marginLeft="250px";
                    action=1;
                    }
                    else{
                        closeNav();
                    }
                }
                function closeNav(){
                    document.getElementById("mySidenav").style.width="0";
                    document.getElementsByTagName('body')[0].style.marginLeft="0";
                    action=0;
                    
                }
                function sidebar_action(){
                    if(action==1){
                        closeNav();
                    }
                }
        </script>
        <!---------------------------------------------------- End of Menu--------------------------------------------->
         <div id="name">
				<a herf="home.php" style="text-decoration:none;"><h1 style="white-space: nowrap; cursor:pointer;"><span class="highlight">e</span>-bOOKs</h1></a>
				        
			</div>
			

        <!------siderbar-----start css in cart.css -->
		<div class="sidebar">
            <img src="./image/facebook.png" style="height:45px; width:45px;margin-top: 10px;" />
            <img src="./image/insta.jpeg" style="height:45px; width:45px;" />
            <img src="./image/twitter.png" style="height:45px; width:45px;" />
            <img src="./image/link.jpeg" style="height:45px; width:45px; margin-bottom:10px;" />
        </div>
        <!-------------------------siderbar---End----------------------------->
        </header>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
      
        <h1>Seller Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" required>
          
	  <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" required>

          <label for="mail">Email</label>
          <input type="email" id="mail" name="email" required>
          
          <label for="password">Password</label>
          <input type="password" id="password" name="pass" required>
          
          <label>Date of Birth</label>
          <input type="date" placeholder="Age" name="age" required>
	
	  <label for="address">Address</label>
          <input type="text" id="address" name="addr" required>

	  <label for="contact">Contact Number</label>
          <input type="text" id="contact" name="num" required>
	  
        </fieldset>
        
        
        <button type="submit" name="but2">Sign Up</button>
        <a href="signin.php">Already have an account?</a>
      </form>
      
    </body>
</html>	
