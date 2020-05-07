<?php
	session_start();
	//$_SESSION["search"]='Book';
   extract($_POST);
                     if(isset($reorder)){

                      $_SESSION['order']=$order;
                     // echo '<script>window.alert("Request Processed")</script>';
                      header("location:actions.php");
                        
                     }
                     if(isset($return1)){

                      $_SESSION['return']=$return;
                      header("location:actions.php");
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
  width: 250px;
  height:350px;
}

.Order_id{
  font-size:20px;
  margin-top:-350px;
  margin-left:460px;
}



.vl{

  border-left: 2px solid #d8d8d8;
  height: 400px;
  margin-left:380px;
  margin-top: -82px;


}

.hl{

  border-top: 0.5px solid #d8d8d8;
  width: 600px;
  margin-left:440px;
  margin-top: -150px;


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
</style>
		
	</head>
	<body>
		<<header>
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
                <a>Book Category</a>
                <a>Book by Year</a>
                <a class="after_login">Your Orders</a>
                <a class="after_login">Account Setting</a>
                <a href="signin.php" class="Sing_In_out">Sign in</a>
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
      <form class="SearchBar" style="margin-bottom: 5px;">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><img src="./image/sbutton.png" style="width:25px; height:15px; margin-bottom: 4px;"/></button>
            </form>
      <nav class="upperbar">    
        <ul>
          <li class="current"><a herf="index.php">HOME</a></li>
          <li><a herf="about.html" style="text-decoration: none; color: white;">ABOUT</a></li>
          <li><a href="signin.php" style="text-decoration: none; color: white; resize: none;">Sign In</a></li>
        </ul>
    </nav>
    <!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
    
    <div class="cart">
                        
                        <p class="cart_notification" style="font-size:20px; cursor: pointer;">6</p>
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

                   $st=$conn->prepare("select * from books b inner join orders o on b.b_id=o.b_id order by o.date desc");
                    $st->bindParam(":id",$_SESSION['email']);
                    
                    $st->execute();
                    
		    while($ft=$st->fetch())
			
                    {?> 
                        
                        <div class=item_pic><div class='imgr'><img src="./image/books/<?php echo $ft['b_path']; ?>" height="350px" width="250px"></div></div>
		    
		    <?php
            echo '<div class="Order_id">';
                echo '<b>',$ft['b_nm'];
                echo '</b>';
                echo '<br>';


                echo '<i>by ',$ft['b_author'],'</i>';
                echo '<br>';
               

                echo '<b>Order ID:</b> #201787653EBOOK',$ft['order_id'];
                        echo '<br>';

                        echo '<b>Order Price:</b>',$ft['b_price'];
                        echo '<br>';
                        
                        echo '<b>Order Date: </b>',$ft['date'];
                        //echo $ft[b_path];
                        echo '<br>';

                        echo '<b>Published by:</b> ',$ft['b_publisher'],'</i>';
                        echo '<br>';

                        echo '<b>Category:</b> ',$ft['category'],'</i>';
                        echo '<br>';
                        
                            
                       // <input type="hidden" name="remove" value='<?php echo $ft['order_id'];                
			    ?> 
			</div>
            <div class="hl"></div>
            <div class="vl"></div>

           <div class="buynow_cls">
		 <form method="post">
				<input type="hidden" name="order" value='<?php echo $ft['b_id'];?>'>
				<button type="buy" name="reorder" class="button_2">Re-order</button>
   			</div>
			<div class="rent_cls">
				<input type="hidden" name="return" value='<?php echo $ft['b_id'];?>'>
				<button type="rent" name="return1" class="button_3">Return</button>
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
