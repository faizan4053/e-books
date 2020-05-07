<?php
	session_start();
  extract($_POST);
                     if(isset($add)){
                        /*$st=$conn->prepare("insert into cart (login_id,b_id) values(:log,:bid)");
                        $st->bindParam(":log",$_SESSION["email"]);
                        $st->bindParam(":bid",$cart);
                        $st->execute();
                        $_SESSION['cart']++;*/
                        $_SESSION['addcart']=$cart;
                        echo $cart;
                        echo $_SESSION['addcart'];
                       header("location:actions.php");
       }
        if(isset($ord)){

                      $_SESSION['order']=$order;
                      //echo '<script>window.alert("Invalid search")</script>';
                      header("location:payment.php");
                     }
      if(isset($find)){
                      $_SESSION['search']=$search;
                      $_SESSION['find']=5;
                      //echo '<script>window.alert("Searching...")</script>';
                        header("location:actions.php");
                    }
	//$_SESSION["search"]='Book';
  //echo $_SESSION['user'];
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
  width: 250px;
  height:350px;
  background:#ccc;
}

.Order_id{
  font-size:20px;
  margin-top:-350px;
  margin-left:460px;]

}



.vl{

  border-left: 2px solid #d8d8d8;
  height: 400px;
  margin-left:380px;
  margin-top: -65px;


}

.hl{

  border-top: 0.5px solid #d8d8d8;
  width: 600px;
  margin-left:440px;
  margin-top: -90px;


}

.button_2{
background:#e8491d;
height:30px;
border-radius:5px;


}
.button_3{
background:#e8491d;
height:30px;
border-radius:5px;


}
.button_4{
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
	margin-top: -10px;
	width: 1100px;
}  

.buynow_cls{
	width:100px;
	height:100px;	
	margin-top:-50px;	
	margin-left:1080px;
			
} 
.rent_cls{
	width:100px;
	height:100px;	
	margin-top:-100px;	
	margin-left:1180px;			
}  

.return_cls{
	width:100px;
	height:100px;	
	margin-top:-100px;	
	margin-left:1080px;			
}  

label,
textarea {
    font-size: .8rem;
    letter-spacing: 1px;
}
textarea {
    padding: 10px;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
    float:left;
    float:bottom;
    left:30px;
    margin-top:-20px;
}

label {
    display: block;
    margin-bottom: 10px;
}
.price{
    }
</style>
		
	</head>
	<body>
		<header style="margin-top:0px">
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
        <h1><span class="highlight">e</span>-bOOKs</h1>
                
      </div>
      <form class="SearchBar" style="margin-bottom: 5px;" method="post">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" name="find"><img src="./image/sbutton.png" style="width:25px; height:15px; margin-bottom: 4px;"/></button>
            </form>
      <nav class="upperbar">    
        <ul>
          <li class="current"><a herf="index.php">HOME</a></li>
          <li><a herf="about.html" style="text-decoration: none; color: white;">ABOUT</a></li>
          <li><a href="signin.php" style="text-decoration: none; color: white; resize: none;"><?php echo $_SESSION['user']; ?></a></li>
        </ul>
    </nav>
    <!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
    
    <div class="cart">
                        
                        <p class="cart_notification" style="font-size:20px; cursor: pointer;"><?php echo $_SESSION['cart'];?></p>
                        <a href="cart.php"><img src="./image/cart.png" class="cart_image" style="width:40px; height:40px; margin-top: -45px; margin-left:-20px;"></a>
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

                   $search=$_SESSION["search"];
                  // $_SESSION["search"]=null;
                    $st=$conn->prepare("select * from books where b_nm like '%$search%' or b_author like '%$search%' or b_publisher like '%$search%' or category like '%$search%'");
                    //$st->bindParam(":id",$m);
                    $st->execute();
		    while($ft=$st->fetch())
			
                    {?> 
                        
                        <div class=item_pic><div class='imgr'><img src="./image/books/<?php echo $ft['b_path']; ?>" alt="Image Not Available" height="350px" width="250px"></div></div>
                        
                        
		    
		    <?php
            echo '<div class="Order_id">';
                        
                        echo '<b>',$ft['b_nm'];
                echo '</b>';
                echo '<br>';


                echo '<i>by ',$ft['b_author'],'</i>';
                echo '<br>';
               

               


                        echo '<b>Order Price:</b>'.'&nbsp;'.'&#8377;'.$ft['b_price'];
                        echo '<br>';
                        
                        

                        echo '<b>Published by:</b> ',$ft['b_publisher'],'</i>';
                        echo '<br>';

                        echo '<b>Category:</b> ',$ft['category'],'</i>';
                        echo '<br>';
                        echo '<h4>Book Description</h4><pre></pre>';
                       echo '<textarea class="story" name="story" rows="5" cols="60">';
                       echo $ft["b_desc"];
                       echo '</textarea>';
                       ?>
                       <script>
var status = 1;
function toggleText()
{

    if (status == 0) {
        document.getElementByTagName("textarea").style.display = "none";
        status = 1;
    } else if (status == 1) {
        document.getElementByTagName("textarea").style.display = "block";
       
        status =0;
    }
}
</script>
<?
                       //echo '<button id="descriptionButton" onclick="decoration_button()">Book Description</button>';
                        //echo $ft[b_path];
                        echo '<br>';
                        
                            
                       // <input type="hidden" name="remove" value='<?php echo $ft['order_id'];                
			    ?> 
			</div>

            <div class="hl"></div>
            <div class="vl"></div>

           <div class="buynow_cls">
		 <form method="post">
				<input type="hidden" name="cart" value='<?php echo $ft['b_id'];?>'>
				<button type="buy" name="add" class="button_2">Add to Cart</button>
   			</div>
			<div class="rent_cls">
				<input type="hidden" name="order" value='<?php echo $ft['b_id'];?>'>
				<button type="rent" name="ord" class="button_3">Order now</button>
			</div>
			
			</form>

			</div>
			<div class="bor">
				
			</div>
                <?php       
                 } 
                    
             }
                      
                      catch(PDOException $e){
		die("connection failed".$e->getmessage());
	    
	
	}
	
	?>
<p>
<footer>
			<p>e-bOOKs ,Copyright &copy; 2019</p>
		</footer>
</body>
</html>
