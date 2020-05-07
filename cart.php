<?php 
	session_start();
	$price=0;
  $cart=$_SESSION['cart'];

  extract($_POST);

                     if(isset($but)){

                        $_SESSION['remove']=$remove;
                        header("location:actions.php");

                     }
                     if(isset($but2)){

                        //$_SESSION['remove']=$remove;
                        header("location:payment.php");

                     }
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Book rental portal">
		<meta name="keywords"  content="book rent,rent book,mnit book rent">
		<meta name="author" content="Mohammad Faizan,Yashvendar ,Aakash Gopal Vacchani">
		<title>bookshop</title>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/menu.css">
		<link rel="stylesheet" type="text/css" href="./css/orders.css">
		<link rel="stylesheet" type="text/css" href="./css/cart.css">
		<link rel="stylesheet" type="text/css" href="./css/showItems.css">
		<style>

footer {
	padding:3px;
	margin-top:0px;
	color:#ffffff;
	background-color: #e8491d;
	text-align:center;
	font-size: 20px;
}


.item_pic{
  border: 1px solid black;
  margin-top:50px;
  margin-left:70px;
  border-radius: 4px;
  padding: 5px;
  width: 223px;
  height:260px;
}

.orient{
  
  font-size:15px;
 
  margin-left: 490px;
  margin-top:-260px; 

}



.vl{

  border-left: 3px solid #d8d8d8;
  height: 300px;
  margin-left:350px;
  margin-top: -280px;


}


.button_5{
background:#e8491d;
height:30px;
border-radius:5px;

}

.button_6{
background:#e8491d;
height:30px;
border-radius:5px;

}
.imgr{
margin-top:0px;

}

.bor{
	border: black 1px solid;
	margin-left:90px;
	margin-right:20px;
	margin-top:40px;
	width: 1100px;
}  
.proceed{
  width:100px;
  height:100px; 
  margin-top:-70px; 
  margin-left:1140px;     
}  


.remove_cls{
	width:100px;
	height:100px;	
	margin-top:-30px;	
	margin-left:1080px;			
}  
</style>
		
	</head>
	<body>
		<header style="margin-top:0px;">
        <!---------------------------------------- Menu sidebar start, css in menu.css---------------------------------->
        <span class="menu_icon" onclick="openNav()">&#9776</span>
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a>
                <?php
                    echo '<h3>';
                    echo 'Hello,';
                    echo  $_SESSION['user'];
                    echo '</h3>';
                 ?>
                 <hr>
                </a>
                <a class="home" href="home.php">Home</a>
                <a href="cart.php">My cart</a>
                <a href="orders.php"class="after_login">My Orders</a>
                <a href="account_settings.php"class="after_login">Account Setting</a>
                <a href="logout.php" class="Sing_In_out">Log out</a>
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
      <!--form class="SearchBar" style="margin-bottom: 5px;">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><img src="./image/sbutton.png" style="width:25px; height:15px; margin-bottom: 4px;"/></button>
            </form-->
      <nav class="upperbar" style="margin-left:45%;">    
        <ul>
          <li class="current"><a herf="home.php">HOME</a></li>
          <li><a herf="about.php" style="text-decoration: none; color: white;">ABOUT</a></li>
          <li><a href="logout.php" style="text-decoration: none; color: white; resize: none;">Log out</a></li>
        </ul>
    </nav>
    <!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
    
    <div class="cart" style="right:10px; float:right;">
                        
                        <p class="cart_notification" style="font-size:20px; cursor: pointer;"><?php echo $_SESSION['cart'];?></p>
                        <img src="./image/cart.png" class="cart_image" style="width:40px; height:40px; margin-top: -45px; margin-left:-20px;"/>
                    </div>
        <!-------------------------------------------------cart End-------------------------------------------------------------------->
        <!------siderbar-----start css in cart.css -->
    <div class="sidebar">
            <img src="./image/facebook.png" style="height:45px; width:45px;margin-top: 10px;" />
            <img src="./image/insta.jpeg" style="height:45px; width:45px;" />
            <img src="./image/twitter.png" style="height:45px; width:45px;" />
            <img src="./image/link.jpeg" style="height:45px; width:45px;" />
        </div>
        <!-------------------------siderbar---End----------------------------->
        </header>
	
                    
		    <?php
                
                try{
                //echo 'enter';
                $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo 'after connection';

                //if(isset($_SESSION["email"]))
                //{
                
               $st=$conn->prepare("select * from books where b_id in (select b_id from cart where login_id=:log)");
                    $st->bindParam(":log",$_SESSION["email"]);
                    $st->execute();
		    while($ft=$st->fetch())
			
                    {
                    	$price=$price+$ft['b_price'];
                      $_SESSION['price']=$price;
                      $_SESSION['$ft[b_id]']=$ft['b_price'];
                    	?> 
                        
                        <div class=item_pic><div class='imgr'><img src="./image/books/<?php echo $ft['b_path']; ?>" height="250px" width="210px"></div></div>
			<div class="vl"></div>
      <div class="orient">
			<?php
			
                		echo '<h3>';
                        echo $ft['b_nm'];
                        echo '</h3>';
             		
						echo '<h4>';
                        echo 'By'.'&nbsp;'.$ft['b_author'];
                        echo '</h4>';
                        
						echo '<h4>';
                        echo $ft['b_publisher'];
                        echo '</h4>';
                       	    
                       	echo '<h4>';
                        echo '&#8377;'.'&nbsp;'.$ft['b_price'];
                        echo '</h4>';
                                      
					echo '</div>';
				?>
				</div>
			<form method="post" action="cart.php">

			<div class="remove_cls">
			<input type="hidden" name="remove" value='<?php echo $ft['b_id']; ?>' >
			<button type="removes" name="but" class="button_5" style="white-space: nowrap; cursor:pointer;">Remove Item</button>
			</div>

			</form>
			</div>
			<div class="bor">
				
			</div>
			

		    <?php
              } 

              ?>
              <h1>Total amount:<?php echo $price; ?></h1>
              <?php
                    
            }
                      
          catch(PDOException $e){
					die("connection failed".$e->getmessage());
		}
	
	?>
<form method="post">
<div class="proceed">
      <button type="removes" name="but2" class="button_6">Submit</button>

      </div>
    </form>
<footer>
			<p>e-bOOKs ,Copyright &copy; 2019</p>
		</footer>
</body>

</html>
