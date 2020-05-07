
<?php
	session_start();
	
    try{
        $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");

            extract($_POST);

            $mail=$_SESSION["email"];

           // echo $mail;

            //edit first name
            if(isset($but1)){

                $st=$conn->prepare("update books set b_nm=:name where b_id=:id");
                $st->bindParam(":name",$name);
                $st->bindParam(":id",$ident);
                $ab=$st->execute();  
             }
             //edit last name
            
            if(isset($but2)){

                $st=$conn->prepare("update books set b_author=:auth where b_id=:id");
                $st->bindParam(":id",$ident);
                $st->bindParam(":auth",$author);
                $ab=$st->execute();  
             }

            
             if(isset($but3)){
             	
                $st=$conn->prepare("update books set b_publisher=:publish where b_id=:id");
                $st->bindParam(":id",$ident);
                $st->bindParam(":publish",$publisher);
           		$ab=$st->execute();  
             }  

             //edit dob
             if(isset($but4)){

                $st=$conn->prepare("update books set b_desc=:descr where b_id=:id");
                $st->bindParam(":id",$ident);
                $st->bindParam(":descr",$desc);

                $ab=$st->execute();  
             }

             //edit address
             if(isset($but5)){

                $st=$conn->prepare("update books set b_price=:prc where b_id=:id");
                $st->bindParam(":id",$ident);           
                $st->bindParam(":prc",$prices);
                $ab=$st->execute();  
             }

             //edit contact number
             if(isset($but6)){

                $st=$conn->prepare("update books set b_path=:pth where b_id=:id");
                $st->bindParam(":id",$ident);             
                $st->bindParam(":pth",$path);                
                $ab=$st->execute();  
             }
             
             if(isset($but7)){

                $st=$conn->prepare("update books set category=:cat where b_id=:id");
                $st->bindParam(":id",$ident);             
                $st->bindParam(":cat",$category);                
                $ab=$st->execute();  
             }
             if(isset($but11)){

                $st=$conn->prepare("delete from books where b_id=:id");
                $st->bindParam(":id",$ident);              
                          
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
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/cart.css">
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

button [name="but11"]{
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
                
                <a href="signin.php" class="after_login">User Sign in</a>
                <a href="seller.php">ADD Items</a>
                
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

      <form  method="post">
      
        <h1>Edit Details</h1>
        
        <fieldset>
          <label for="fname">Book ID</label>
          <input type="text" id="fname" name="ident" required>

        
          
          <label for="fname">Book Name</label>
          <input type="text" id="fname" name="name" >
	  <button type="submit" name="but1">Edit</button>
          
          <label for="password">Book Author</label>
          <input type="text" id="password" name="author">
	  <button type="submit" name="but2">Edit</button>

	  <label for="address">Book Publisher</label>
          <input type="text" id="address" name="publisher">
	  <button type="submit" name="but3">Edit</button>
          

	  <label for="contact">Book Description</label>
          <input type="text" id="contact" name="desc">
	  <button type="submit" name="but4">Edit</button>
	
	  <label for="price">Book Price</label>
          <input type="text" id="price" name="prices">
	  <button type="submit" name="but5">Edit</button>

	  <label for="paths">Book Path</label>
          <input type="text" id="paths" name="path">
	  <button type="submit" name="but6">Edit</button>


    	  <label for="cat">Category</label>
          <input type="text" id="cat" name="category">	  
           <button type="submit" name="but7">Edit</button>
        
        
        </fieldset>
        
        <button type="submit" name="but11" class="but11">Remove</button>
   
      </form>
      
    </body>
</html>	
