<?php
session_start();

include 'config.php';


$ses=$_SESSION['ses'];
$sp="SELECT SUM(price) AS spr from cart_data WHERE ses='$ses'";
$sp_data=mysqli_query($conn, $sp);
$sprow=mysqli_fetch_assoc($sp_data);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
	<link rel="stylesheet" type="text/css" href="commonstyle.css">
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
		  }
		  
		function orderfun() {
			confirm("Order Placed. Your order will be shipped in 4-5 by BlueDart.com");}
        </script>    
</head>
<body>

	<div class="header">
		<div class="container1">
		  <div class="navbar">
		<div class="logo">
		  <img src="logo.png" width="225px">
		</div>
		<nav >
		  <ul>
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
<!--checkout-->
<main>
	<div class="containerp">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
				Full name
				<input type="text" name="" placeholder="Enter name" value="">
				Email
				<input type="text" name="" placeholder="Enter email">

				Address
				<input type="text" name="" placeholder="Enter address">
				
				City
				<input type="text" name="" placeholder="Enter City">
				<div id="zip">
					<label>
						State
						<select>
							<option>Choose State..</option>
							<option>Rajasthan</option>
							<option>Hariyana</option>
							<option>Uttar Pradesh</option>
							<option>Madhya Pradesh</option>
							<option>Maharashtra</option>
							<option>Kashmir</option>
							<option>Andhra Pradesh</option>
							<option>Arunachal Pradesh</option>
							<option>Assam</option>
							<option>Bihar</option>
							<option>Chhatisgarh</option>
							
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form onsubmit="orderfun();">
				Accepted Card <br>
				<img src="card1.png" width="100">
				<img src="card2.png" width="50">
				<br><br>

				Credit card number
			<input type="text" name="" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV">
					</label>
				</div>
				<label>
					Total: 
					&#8377;<input type="number" name="" placeholder="Total" value="<?php echo $sprow['spr'];?>">
				</label>
			</form>
			<input type="submit" name="ordr" value="Order" >
		</div>
	</div>
</main>

<!--footer-->

<footer class="footer">
	<div class="contains">
		<div class="frow">
			<div class="footer-col">
				<h4>Categories</h4>
				<ul>
					<li><a href="Apparel.php">Apparel</a></li>
					<li><a href="Stationery.php">Stationery</a></li>
					<li><a href="accessories.php">Accessories</a></li>
					<li><a href="Posters.php">Posters</a></li>
					<li><a href="Actionfigures.php">Actionfigures</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Products</h4>
				<ul>
					<li>T-shirts</li>
					<li>Notebooks</li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Creators</h4>
				<ul>
					<li><a href="about.html">About Us</a></li>
					<li>Manasi Mhatre</li>
					<li>Rohan Kadam</li>
					<li>Ganesh Pillai</li>
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