
	<?php session_start();?>
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
@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
body,html {
  height:100%;
  margin:0;
  font-family:lato;
}

h2 {
  margin-bottom:0px;
  margin-top:25px;
  text-align:center;
  font-weight:200;
  font-size:19px;
  font-size:1.2rem;
  
}
.container {
  height:100%;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
  background:linear-gradient(#c9e5e9,#ccddf9);
}
.dropdown-select.visible {
  display:block;
}
.dropdown {
  position:relative;
}
ul {
  margin:0;
  padding:0;
}
ul li {
  list-style:none;
  padding-left:10px;
  cursor:pointer;
}
ul li:hover {
  background:rgba(255,255,255,0.1);
}

.thin {
  font-weight:400;
}
.small {
  font-size:12px;
  font-size:.8rem;
}
.half-input-table {
  border-collapse:collapse;
  width:100%;
}
.half-input-table td:first-of-type {
  border-right:10px solid #49545C;
  width:50%;
}
.window {
  height:540px;
  width:800px;
  background:#ddd;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}
.order-info {
  height:100%;
  width:50%;

  box-sizing:border-box;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  position:relative;
}

.order-table td:first-of-type {
  width:25%;
}
.order-table {
    position:relative;
}
.line {
  height:1px;
  width:100%;
  margin-top:10px;
  margin-bottom:10px;
  background:black;
}


.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;
}
.order-info-content {
  table-layout:fixed;

}

.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:#d81f26;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:160px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.pay-btn:hover {
  background:#22a877;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.cash-btn {
  border:none;
  background:#d81f26;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:20px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.cash-btn:hover {
  background:#22a877;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}


.hl1{
  border-top: 2px solid black;
  width: 50px;
  margin-left:60px;
  margin-top: 100px;

}

.hl2{
  border-top: 2px solid black;
  width: 50px;
  margin-left:220px;
  margin-top:-40px;
   
}

.line2{
  position:absolute;
  height:1.5px;
  width:25%;
  margin-top:170px;
  margin-bottom:10px;
  background:black;
  margin-left: 190px;
}

.line3{
  position:absolute;
  height:1.5px;
  width:55%;
  margin-left:-30px;
  margin-top:235px;
  margin-bottom:10px;
  background:black;
  }


.total {
  margin-top:0px;
  font-size:20px;
  font-size:1.3rem;
  
  bottom:30px;

}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}
.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.credit-info {
  background:#49545C;
  height:100%;
  width:50%;
  color:#eee;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
}

.disp{
    margin-left:295px;
    margin-right:-100px;
    margin-top:-342px;
    
}


.origin{
    margin-left:145px;
    margin-top:-43px;
}

.orient{
    margin-left:-100px;
    margin-top:20px;}


.credit-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:100%;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .credit-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .pay-btn {
    border-radius:0px;
  }
}

</style>

<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
                <div class='line'></div>
        
        
        <div class='total'>
          
          <span >
               <?php
                
                try{
                //echo 'enter';
                $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //echo 'after connection';

                //if(isset($_SESSION["email"]))
                //{
                    //$qty=$_SESSION['quantity'];
                    $qty=3;
                    //$tot=$_SESSION['total'];
                    $tot=10000;
                    $tax=0.18*$tot;
                    $del=30;
                    $n=0;
                    $_SESSION['email']="mohdf078@gmail.com";
                    $modecash="cash";
                    $modecard="card";
                    $date = date('Y-m-d H:i:s');
                    $net=$tot+$tax+$del;
                    $st=$conn->prepare("select * from cart where login_id=:id");
                    $rt=$conn->prepare("select * from login where login_id=:id");
                    
                    
                    $st->bindParam(":id",$_SESSION['email']);
                    $rt->bindParam(":id",$_SESSION['email']);
                    
                    $st->execute();
                    $rt->execute();
        
                    ?>
                    
                    
                    <div class="line3"></div>
                    <div class='line2'></div>
                    
                    <div class='orient'>
                    
                    Quantity
		            <br>
		            <br>
		            
			        Amount
			        <br>
			        Delivery
			        <br>
			        Taxes
			        <br>
			        <br><b>
			        Total
			        <br>
                    <br>
                    Email
                    <br>
                    Name
                    <br>
                    Address</b>
		           <div class='disp'>
		           <?php 
		           $ft=$st->fetch();
		           $gt=$rt->fetch();
		           
		           
		            
			       
			        echo $qty;
			        echo '<br>';
			        echo '<br>';
			        echo 'Rs. ',$tot;
			        echo '<br>';
			        echo 'Rs. ',$del;
			        echo '<br>';
			        echo 'Rs. ',$tax;
                    echo '<br>';
                    echo '<br>';
                    echo 'Rs. ',$net;			        
			        
                    
                    //echo $ft['login_id'];
                    
                    //echo $ft['fname'];
                        
                    //echo $ft['address'];
                     
                    
                   
                     extract($_POST);
                     if(isset($paybtn)){
                                          echo "run";
                                         $rt=$conn->prepare("insert into orders (order_id,order_price) select :cart_id,:b_id from cart");
                                         //$et=$conn->prepare("insert into transactions (mode,login_id,card_no,expiry,card_name) values (:mode, :login, :cardno, :exp, :cardname) where login_id=:login");
                                         $rt->bindParam(":cart_id",$ft['cart_id']);
                                         $rt->bindParam(":b_id",$ft['b_id']);
                                         $rt->bindParam(":dates",$date);
                                         //$et->bindParam(":mode",$modecard);
                                         $rt->bindParam(":login",$_SESSION['email']);
                                         //$et->bindParam(":login",$_SESSION['email']);
                                         //$et->bindParam(":cardno",$cardno);
                                         //$et->bindParam(":exp",$exp);
                                         //$et->bindParam(":cardname",$cardname);
                                         
                                        
                                         $rt->execute();  
                                         //$et->execute();
                     }
                     
                     if(isset($cashbtn)){
                                         $rt=$conn->prepare("insert into orders (order_id,order_price,order_date) select :cart_id, :b_id, :dates from cart");
                                         //$et=$conn->prepare("insert into transactions (mode,login_id,card_no,expiry,card_name) values (:mode, :login, :cardno, :exp, :cardname)");
                                 
                                         $rt->bindParam(":cart_id",$ft['cart_id']);
                                         $rt->bindParam(":b_id",$ft['b_id']);
                                         $rt->bindParam(":dates",$date);
                                         //$et->bindParam(":mode",$modecash);
                                         //$et->bindParam(":login",$_SESSION['email']);
                                         $rt->bindParam(":login",$_SESSION['email']);
                                        
                                         //$et->bindParam(":cardno",$n);
                                         //$et->bindParam(":exp",$n);
                                         //$et->bindParam(":cardname",$n);
                                       //$et->execute();
                                         $rt->execute();  
                     }                   
                     
                     }
                      
                      catch(PDOException $e){
		die("connection failed".$e->getmessage());
	}
	
	?>
	</div>
	</div>

          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
           <table class='half-input-table'>
              <tr><td>Prefered Payment method available: </td><td><div id='current-card'>Card/Cash</div> 
              
               </td></tr>
            </table>
           <br>
            Card Number
            <input class='input-field' name="cardno"></input>
            Card Holder
            <input class='input-field' name="cardname"></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field' name="exp"></input>
                </td>
                <td>CVC
                  <input class='input-field'></input>
                </td>
              </tr>
            </table>
            <form method="post"><button class='cash-btn' name='cashbtn'>Pay by Cash</button></form>
            
            <div class='hl1'></div>
            <div class="origin"><h1>OR</h1></div>
            <div class='hl2'></div>
            
            <form method="post" ><button class='pay-btn' name='paybtn'>Pay by Card</button></form>

          </div>

        </div>
      </div>
</div>
