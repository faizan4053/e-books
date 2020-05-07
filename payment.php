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
  bottom:400px;
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
  bottom:210px;
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
  margin-top: 160px;

}

.hl2{
  border-top: 2px solid black;
  width: 50px;
  margin-left:220px;
  margin-top: -40px;
   
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
    margin-top:-45px;
}

.rzr{
  border:none;
  background:#d81f26;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:330px;
  left:160px;
  width:30px;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
          
          
          
      

    
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
                    $qty=$_SESSION["cart"];
                    //$tot=$_SESSION['total'];
                    $tot=$_SESSION["price"];
                    $tax=0.18*$tot;
                    $del=30;
                    $n=0;
                    $modecash="cash";
                    $modecard="card";
                    
                    $date = date('Y-m-d H:i:s');
                    $net=$tot+$tax+$del;
                    $net100=100*$net;
                    
                    
        
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
              
                    
                    
                     
                    
                   
                     extract($_POST);
                     $email=$_SESSION["email"];
                     $n=6;
                     if(isset($paybtn)){ 
                     $rt=$conn->prepare("select * from cart where login_id=:id");
                     $rt->bindParam(":id",$email);
                     $rt->execute();
                     
                     
                 
                     
                     
                     echo '<br>';
                    
                     
                     while($ft=$rt->fetch()){
                      
                        $st=$conn->prepare("insert into orders (login_id,b_id,date) values(:login,:bid,:date)");
                        $st->bindParam(":login",$email);
                        
                        $st->bindParam(":date",$date);
                        $st->bindParam(":bid",$ft['b_id']);
                   
                    
                       $ab=$st->execute(); 
                       } 
                   
                        $card="card";
                        $cash="cash";
                        $et=$conn->prepare("insert into transactions (login_id,mode) values(:login,:mode)");
                        $et->bindParam(":login",$email);
                        $et->bindParam(":mode",$card);
                                           
                     
                     $ab=$et->execute(); 
                     }
                     
                 if(isset($cashbtn)){
                     $rt=$conn->prepare("select * from cart where login_id=:id");
                     $rt->bindParam(":id",$email);
                     $rt->execute();
                     $ft=$rt->fetch();
                     
                     echo '<br>';
               
                     
                     
                     
                        $st=$conn->prepare("insert into orders (login_id,b_id,date) values(:login,:bid,:date)");
                        $st->bindParam(":login",$email);
                        $st->bindParam(":date",$date);
                        $st->bindParam(":bid",$ft['b_id']);
                   
                    
                    $ab=$st->execute();  
                   
                        $cash="cash";
                        $et=$conn->prepare("insert into transactions (login_id,mode) values(:login,:mode)");
                        $et->bindParam(":login",$email);
                        $et->bindParam(":mode",$cash);
                        
                     $ab=$et->execute(); 
                     
                     
                     
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
           
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"><button class='cash-btn' name='cashbtn'>Pay by Cash</button></form>         
            <form class= "rzr" action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_J257esDxQcqnAB" // Enter the Key ID generated from the Dashboard
    data-amount="<?php echo $net100;?>" // 
    data-currency="INR"
    data-order_id="<?php $qty; ?>"

    data-image="https://example.com/your_logo.jpg"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
            <div class='hl1'></div>
            <div class="origin"><h1>OR</h1></div>
            <div class='hl2'></div>
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"><button class='pay-btn' name='paybtn'>Cofirm to pay by Card</button></form>

          </div>

        </div>
      </div>
</div>


