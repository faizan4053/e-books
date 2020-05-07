<?php 
	session_start();
	$user='Signin';
    $_SESSION["user"]=$user;
     $_SESSION['search']="book";
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
				header("location:login_success.php");
			}
			else
			{
				$f=2;
			}

		}
		if(isset($find)){
            $_SESSION['search']=$search;
            header("location:searches.php");
        }

	}
	catch(PDOException $e){
		die("connection failed".$e->getmessage());
	}
?>



<!DOCTYPE html>
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
		<link rel="stylesheet" type="text/css" href="./css/cart.css">
		<link rel="stylesheet" type="text/css" href="./css/showItems.css">
		<link rel="stylesheet" type="text/css" href="./css/scrolle.css">
	</head>

	<body onResize="resetall()">
		<header style="padding-top:20px">
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
			<form class="SearchBar" method="post">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" name="find"><img src="./image/sbutton.png" style="width:25px; height:15px;"/></button>
            </form>
			<nav class="upperbar">    
				<ul>
					<li class="current" style="cursor: pointer;"><a herf=".php">Home</a></li>
					<li><a herf="about.html" style="text-decoration: none; color: white;cursor: pointer;">About</a></li>
					<li><a href="signin.php" style="text-decoration: none; color: white;cursor: pointer;">Sign In</a></li>
				</ul>
		</nav>
		<!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
		
		<!--div class="cart">
                        <img src="./image/cart.png" class="cart_image" style="width:40px; height:40px; margin-bottom:-70px; margin-left:-20px"/>
                        <p class="cart_notification" style="font-size:20px; cursor: pointer;">6</p>
                    </div-->
        <!-------------------------------------------------cart End-------------------------------------------------------------------->
        <!------siderbar-----start css in cart.css -->
		<div class="sidebar">
            <img src="./image/facebook.png" style="height:45px; width:45px;margin-top: 10px;" />
            <img src="./image/insta.jpeg" style="height:45px; width:45px;" />
            <img src="./image/twitter.png" style="height:45px; width:45px;" />
            <img src="./image/link.jpeg" style="height:45px; width:45px; margin-bottom:10px;" />
        </div>
        <!-------------------------siderbar---End----------------------------->
        </header>
        
		
		<!--------------------------------------Start Image Side Scroller,css in scrolle.css---------------------------------------->
		<div class="imageSideScroller">
		<img src="./image/sideshow/img1.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img2.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img3.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img4.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img5.jpg" class="myslides scroller_image" />
		<div class="leftsidekey" onclick="plusdiv(-1)" style="display:flex;justify-content:center;align-items:center;top:150px;font-size:50px;position:absolute;  padding-bottom:10px;">&#10094</div>
		<div class="rightsidekey" onclick="plusdiv(1)" style="display:flex;justify-content:center;align-items:center;top:150px;font-size:50px;position:absolute;  padding-bottom:10px;">&#10095</div>
		<div class="scroller_badge" style="">
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(1)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(2)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(3)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(4)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(5)"></button>
		</div>
	</div>
	<script>
		var slideIndex=1;
		showDivs(slideIndex);
		carousel()
		function plusdiv(n) {
			slideIndex+=n;
			showDivs(slideIndex);
		}
		function currentDiv(n){
			myIndex=n;
			showDivs(slideIndex=n);
		}

		function showDivs(n){
			var i;
			var x=document.getElementsByClassName("myslides");
			var dots=document.getElementsByClassName("Imageselect");
			//console.log(x);
			if (n >= x.length) {
				slideIndex=0;
			}
			if(n<1){
				slideIndex=x.length;
			}
			for(i=0;i < x.length; i++){
				x[i].style.display = "none";
			}
			for(i=0;i<dots.length;i++){
				dots[i].className[i]=dots[i].className.replace("dot_white","");
			}
			x[slideIndex-1].style.display="block";
			dots[slideIndex-1].className+="dot_white";

		}
		function carousel() {
			var i;
 			var x = document.getElementsByClassName("myslides");
  			for (i = 0; i < x.length; i++) {
    			x[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > x.length) {slideIndex = 1}    
  				x[slideIndex-1].style.display = "block";  
  				setTimeout(carousel, 5000); // Change image every 2 seconds
		}
	</script>
	<!-----------------------------------------------END Image Side Scroller--------------------------------------------------------->


		
        <!-- -----------------------------showItems start, css in showItems.css-------------------------------------------------->
        <div class="showCat" style="display:flex;flex-direction:column;justify-content:center;">
            <div class="first_row">
                <a href="./searches.php?search=fiction" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Science Fiction</h3>
                    <img src="./image/front_page/books_150015-668x1024.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/download1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/download.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/images.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=novel" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Novels</h3>
                    <img src="./image/front_page/noval1.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/noval2.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/noval3.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/noval4.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=kid"style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Kids</h3>
                    <img src="./image/front_page/kid.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/kid1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/kid2.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/kid3.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=adventure" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Action & Adventure</h3>
                    <img src="./image/front_page/Action_&_Aduencture.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
        <!------------------Start ImagesScroll,css in scrolle.css---------------------------------------------------------------->
        <div class="ImagesScroll" style="text-align: center;">
		<a href="./searches.php?search='The Book of the New Sun'"><img src="./image/books/The_Book_of_the_New_Sun.jpg" class="myimages scroller_images" /></a>
		<a href="./searches.php?search='Chetan Bhagat'"><img src="./image/books/The Girl in Room 105.jpg" class="myimages scroller_images" /></a>
		<a href="./searches.php?search=The Best of Panchatantra"><img src="./image/books/The Best of Panchatantra.jpg" class="myimages scroller_images" /></a>
		<a href="./searches.php?search=The Fifth Head of Cerberus"><img src="./image/books/The_Fifth_Head_of_Cerberus.jpg" class="myimages scroller_images" /></a>
		<img src="./image/front_page/science.jpg" class="myimages scroller_images" />
		<div class="keys" style="margin-top:150px;">
			<button class="leftsidekey" onclick="moveLeft()" style="display:flex;justify-content:center;align-items:center;font-size:50px;position:absolute;  padding-bottom:10px;">&#10094</button>
			<button class="rightsidekey" onclick="moveRight()" style="display:flex;justify-content:center;align-items:center;font-size:50px;position:absolute;  padding-bottom:10px; right:0px;float:right">&#10095</button>
		</div><div class="slider_badge">
			<div type="button" onclick="scroll_action()" style="right: 0px;"><a class="slideStartStop">Slide Start/Stop</a></div>
		</div>
	</div>
	<p id="demo"></p>
	<script >
		var i;
		var slideImage=0;
		var scroll_var=0;

		function moveRight() {
			++slideImage;
			scroll_var=0;
			Scroll_img();
		}

		function scroll_action(){
			if(scroll_var){
				scroll_var=0;
			}
			else{
				scroll_var=1;
				Scroll_img();
			}
		}

		var total_image=document.getElementsByClassName('myimages');
		var items=Math.floor(document.body.clientWidth/(400+20));
		var boxsImage=Math.floor(document.body.clientWidth/(300));

		function moveLeft() {
			--slideImage;
			if(slideImage<0){
				slideImage%=total_image.length;
			}
			scroll_var=0;
			Scroll_img();
		}

		function resetall(){
			total_image=document.getElementsByClassName('myimages');
			items=Math.floor(document.body.clientWidth/(400+20));
			items=Math.floor(document.body.clientWidth/(400+20));
			boxsImage=Math.floor(document.body.clientWidth/(300));
			
			if(Math.floor(document.body.clientWidth)<800){
			    var a=document.getElementsByClassName("upperbar");
			    a[0].style.display="none";
			}
			else{
			    var a=document.getElementsByClassName("upperbar");
			    a[0].style.display="block";
			}
			scroll_var=0;
			Scroll_img();
			box_margin();
		}
		
		
		function box_margin(){
		    
		    var z=document.getElementsByClassName('showItemclm');
			boxsImage=Math.floor(document.body.clientWidth/(320));
			for(i=0;i<z.length;i++){
			    z[i].style.marginLeft=Math.floor((document.body.clientWidth-boxsImage*(270))%160)/boxsImage+"px";
			}
		}
		Scroll_img();
		
		function Scroll_img() {
			
			var count=items;
			var x=document.getElementsByClassName('myimages');
			
			for(i=0;i<total_image.length;i++){
				x[i].style.display="none";
			}
			for(i=slideImage;i<slideImage+items;i++){
				
				x[i%(x.length)].style.display="block";
					x[i%(x.length)].style.marginLeft=Math.floor(document.body.clientWidth-items*(400+20))/items+"px";
					
					
			}
			
			if(scroll_var){
				slideImage++;

				setTimeout(Scroll_img, 2000);
			}
		}
	</script>
        <!--------------------------------------------------------------------------------------->
            <div class="showCat" style="display:flex;flex-direction:column;justify-content:center;">
            <div class="first_row">
                <a href="./searches.php?search=romance" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Romance</h3>
                    <img src="./image/front_page/Romance.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Romance1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Romance2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Romance3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=fantasy" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Mystery & Fantasy</h3>
                    <img src="./image/front_page/MyStory_&_Fantasy.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=horror" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Horror</h3>
                    <img src="./image/front_page/horror.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/horror1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/horror2.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/horror3.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=travel"style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Travel</h3>
                    <img src="./image/front_page/Travel.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Travel1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Travel2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Travel3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
            
            <div class="first_row">
                <a href="./searches.php?search=computer" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Computer Science</h3>
                    <img src="./image/front_page/computer.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/computer1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/computer2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/computer3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=science" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Science</h3>
                    <img src="./image/front_page/science.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/science1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/science2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/science3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=history"style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">History</h3>
                    <img src="./image/front_page/History.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/History1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/History2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/History3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=math" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Math</h3>
                    <img src="./image/front_page/math.jpeg" class="firstshowImage"/>
                    <img src="./image/front_page/math1.jpeg" class="secondshowImage"/>
                    <img src="./image/front_page/math2.jpeg" class="thirdshowImage"/>
                    <img src="./image/front_page/math3.png" class="fourthshowImage"/>
                </div></a>
            </div>
            
            <div class="first_row">
                <a href="./searches.php?search=poetry" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Poetry</h3>
                    <img src="./image/front_page/Poetry.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Poetry1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Poetry2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Poetry3.jpg" class="fourthshowImage"/>
                </div></a>
				<a href="./searches.php?search=encyclopedia" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Encyclopedia</h3>
                    <img src="./image/front_page/Encyclopedia.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Encyclopedia1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Encyclopedia2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Encyclopedia3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=religious" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Religious</h3>
                    <img src="./image/front_page/Religious.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Religious1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Religious2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Religious3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="./searches.php?search=biographie" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Biographies</h3>
                    <img src="./image/front_page/biographies.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/biographies1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/biographies2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/biographies3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
        </div></div>
        <script>
            box_margin();
        </script>
        <!---------------------------------------------------- showItems End ---------------------------------------------->
		
		

		<footer>
			<p>e-bOOKs ,Copyright &copy; 2019</p>
		</footer>
		<?php 
				if($f==1)
				{
					alert_func("all feilds are required");
				}
				elseif($f==2)
				{
					alert_func("either email or password is incorrect");
				}

		?>
	</body>
	
</html>
