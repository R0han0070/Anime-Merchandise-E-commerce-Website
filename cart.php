<?php
error_reporting(0);
session_start();

include 'config.php';

$ses=$_SESSION['ses'];
// $sql="SELECT * FROM cart_data WHERE i_id in(SELECT i_id FROM cart_data GROUP BY i_id HAVING COUNT(i_id)=1)";
$sql="SELECT i_id, size, code, COUNT(*) AS sizeq FROM cart_data WHERE ses='$ses' GROUP BY i_id";
$result=mysqli_query($conn, $sql);
$total=0;
?>

<!DOCTYPE html>
<head><title>Cart</title>
  <link rel="stylesheet" type="text/css" href="commonstyle.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
<script>
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }</script>
</head>
<style>
main{
margin:auto;
 background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
 height: auto;
 justify-content: center;
 align-items: center;
 width: 80%;
 padding: 100px;
 background-color: #ffffff;
 border-radius: 20px;
 box-shadow: 0px 25px 40px #1687d933;
}


.Header1{
	margin: auto;
	width: 90%;
	height: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.Heading{
	font-size: 40px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #2F3841;
}

.Action{
	font-size: 14px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: steelblue;
	cursor: pointer;
	border-bottom: 1px solid steelblue;
}

.Cart-Items{
	margin: auto;
	width: 95%;
	height: 30%;
	display: flex;
	justify-content: space-between;
	align-items: center;
  padding:5px;
}
.image-box{
	width: 15%;
	text-align: center;
}
.about{
	height: 100%;
}
.title{
padding-left:100px;
padding-top: 5px;
 line-height: 10px;
 font-size: 30px;
 font-family: ‘Open Sans’;
 font-weight: 800;
 color: #202020;
}
.subtitle{
	line-height: 10px;
	font-size: 18px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #909090;
}

.counter{
	width: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.btn{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background-color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px;
	font-family: 'Open Sans';
	font-weight: 900;
	color: #202020;
	cursor: pointer;
}
.count{
	font-size: 20px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #202020;
}

.prices{
	height: 100%;
	text-align: right;
}
.amount{
	padding-top: 20px;
	font-size: 26px;
	font-family: 'Open Sans';
	font-weight: 800;
	color: #202020;
}
.save{
	padding-top: 5px;
	font-size: 14px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #1687d9;
	cursor: pointer;
}
.remove{
	
	cursor: pointer;
}

.pad{
	margin-top: 5px;
}

hr{
	width: 66%;
	float: right;
	margin-right: 5%;
}
.checkout{
	float: right;
	margin-right: 5%;
	width: 28%;
}
.total{
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.Subtotal{
	font-size: 22px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #202020;
}
.items{
	font-size: 16px;
	font-family: 'Open Sans';
	font-weight: 500;
	color: #909090;
	line-height: 10px;
}
.total-amount{
	font-size: 36px;
	font-family: 'Open Sans';
	font-weight: 900;
	color: #202020;
}
.button{
	margin-top: 10px;
	width: 100%;
	height: 40px;
	border: none;
	background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
	border-radius: 20px;
	cursor: pointer;
	font-size: 16px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #202020;
}
</style>
<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
    <div class="logo">
      <img src="logo.png" width="225px">
    </div>
    <nav >
      <ul>
      <li><input type="text" placeholder="Search.."></li>
      <li ><a href="anime.php">Home</a></li>
      <div class="dropdown">
        <li onclick="myFunction()" class="dropbtn">Products</li>
        <div id="myDropdown" class="dropdown-content">
          <a href="Apparel.php">Apparel</a>
          <a href="Actionfigures.php">Action Figures</a>
          <a href="accessories.php">Accessories</a>
          <a href="Stationery.php">Stationery</a>
          <a href="Posters.php">Posters</a>
        </div>
      </div>
      <li ><a href="about.html">About</a></li>
      <li ><a href="Contactus.html">Contact</a></li>
      <li ><a href="signup1.php">Account</a></li>
    </ul>
    </nav>
    <a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
    </div>
    </div>
  </div>
<main>
  <div class="CartContainer" style="padding: 20px;">
    <!--Cart body-->
      <div class="Header1">
        <h3 class="Heading">Shopping Cart</h3>
      </div>

      <?php
		
		      if(mysqli_num_rows($result) > 0){
			     while($row= mysqli_fetch_assoc($result)){//row for cart products
          $temp_id=$row['i_id'];
          // $count="SELECT COUNT(size) AS size FROM cart_db WHERE ses='$ses' GROUP BY i_id";
          // $count_data=mysqli_fetch_assoc(mysqli_query($conn,$count));
          // $code=$row['code'];
          $nrow="SELECT * FROM productdb where id='$temp_id'";
         //for storing details 
          $nrow_data=mysqli_query($conn, $nrow); 
          $prow=mysqli_fetch_assoc($nrow_data);//fetching product detail


          $sp="SELECT SUM(price) AS spr from cart_data WHERE ses='$ses'";
          $sp_data=mysqli_query($conn, $sp);
          $sprow=mysqli_fetch_assoc($sp_data);


			?>
          <div class="Cart-Items">
            <div class="image-box">
            <img src="<?php echo $prow['product_image'];?>"  style="height:200px;" >
            </div>
              <h1 class="title"><?php echo $prow['product_name'];?></h1><br>
              <h3 class="subtitle">size <?php echo $row['size'];?></h3><br>
            
            <div class="counter">
            <form action="pass.php" method="post" id="add">
                <input type="hidden" name="addsize" value="<?php echo $row['size'];?>">
                <input type="hidden" name="addid" value="<?php echo $row['i_id']; ?>">
                <input type="hidden" name="addprice" value="<?php echo $prow['product_price']; ?>">
                <button type="submit" class="btn">+</button>
              </form>
              
              <div class="count"><?php echo $row['sizeq']; ?></div>
              <form action="pass.php" method="post" id="del">
                <input type="hidden" name="delsize" value="<?php echo $row['size'];?>">
                <input type="hidden" name="delid" value="<?php echo $row['i_id']; ?>">
                <button type="submit" class="btn">-</button>
              </form>
            </div>
            <div class="prices">
              <div class="amount">&#8377;<?php echo $prow['product_price'];?></div>
              <div class="remove">
                <form action="pass.php" method="post" id="dele">
                <input type="hidden" name="del" value="<?php echo $row['i_id'];?>">
                <button type="submit" ><i class="fa fa-trash"></i></button>
              </form>
              </div>
            </div>
            </div>
           </div>
  </div>
    <?php
}
          }else{
            echo "<h5>No items in cart</h5>";
          }
?>

      
    <hr> 
<div class="checkout">
    <div class="total">
      <div>
        <div class="Subtotal">Sub-Total</div>
        <div class="items">2 items</div>
      </div>
      <div class="total-amount">&#8377;<?php echo $sprow['spr'];?></div>
      </div>
    <form action="payment.php">
    <button class="button" >Checkout</button></div>
       </form>

</div>
        </main>
    <!--cart body end-->

    <footer class="footer">
      <div class="contains">
        <div class="frow">
          <div class="footer-col">
            <h4>Categories</h4>
            <ul>
              <li><a href="Apparel.html">Apparel</a></li>
              <li><a href="Stationery.html">Stationery</a></li>
              <li><a href="accessories.html">Accessories</a></li>
              <li><a href="Posters.html">Posters</a></li>
              <li><a href="Actionfigures.html">Actionfigures</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Products</h4>
            <ul>
              <li><a href="#">T-shirts</a></li>
              <li><a href="#">Notebooks</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Creators</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li>Manasi Mhatre</li>
              <li>Rohan Kadam</li>
              <li>Ganesh pillai</li>
              <li>Aryan Rajeev</li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact</h4>
            <ul>
              <li><a href="Contactus.html">Contact Us</a></li>
            </ul>
            <div class="social-links">
              <a href="mailto:animerch@gmail.com"><i class="fab fa-google"></i></a>
            </div>
          </div>
        </div>
      </div>
    
    </footer><!--footer end-->
</body>
</html>