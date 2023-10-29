<?php
session_start();
include 'config.php';
$sql_prod= "SELECT * FROM productdb where pagecode='accessory';";
$product=mysqli_query($conn,$sql_prod);
$i=0;


?>



<!DOCTYPE html>
<html>
<head>
	<title>Apparel</title>
	<link rel="stylesheet" type="text/css" href="commonstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        
.container2{
	max-width: 1080px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
}
.col-4{
	flex-basis: 25%;
	padding:10px;
	min-width: 200px;
	margin-bottom: 50px;
	transition: transform 0.5s;
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);

}
.col-4 img{
     width: 100%;
}
.title{
	text-align: center;
	margin: 0 auto 80px;
	position: relative;
	line-height: 60px;
	color: #555;
}
.title::after{
	content:'';
	background:steelblue;
	width: 120px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left:45%;
	transform: translateX(-5);

}
h4{
	color:#555;
	font-weight: normal;

}
.col-4 p{
	font-size: 14px;
}
.col-4:hover{
	transform: translateY(-5px);
}
.row{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-around;
}
.btn{
	display: inline-block;
	background: steelblue;
	color: #fff;
	padding: 8px 30px;
	margin: 30px 0;
	border-radius: 30px;
	border:none;

}
.btn:hover{
	background:lightsteelblue;
	transition: background 0.5s;
    color: steelblue;
}
    </style>
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
<body>
    <div class="header">
	<div class="container">
		<div class="navbar">
	<div class="logo">
		<img src="logo.png" width="225px">
	</div>
	<nav>
		<ul>
		<li><a href="anime.php">Home</a></li>
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
		<li><a href="about.html">About</a></li>
		<li><a href="Contactus.html">Contact</a></li>
		<li><a href="signup1.php">Account</a></li>
	</ul>
	</nav>
	<a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
</div>
</div>
</div>
<!--Apparel section-->
<div class="container2">
	<h2 class="title">STATIONERY</h2><br>
	<div class="row">
		<?php
		
		if(mysqli_num_rows($product) > 0){
			while($prod= mysqli_fetch_assoc($product)){
				$n=$prod['rating'];
				?>
				<div class="col-4">
					<a href="propage2.php?id=<?php echo  $prod['id'];?>">
					<img src="<?php echo $prod['product_image'];  ?>">
					<h4><?php echo $prod['product_name'];  ?></h4>
					<div class="rating">
						<?php 
						for($i=1; $i<= $n; $i++){
							echo '<i class="fa fa-star" ></i>';
						}
						for($i=1; $i<= (5-$n); $i++){
							echo '<i class="fa fa-star-o" ></i>';
						}

						?>
					</div>
					<p>&#8377; <?php echo $prod['product_price'];  ?></p>
					<p><?php echo $prod['product_desc'];  ?></p>
				</a>
						<form action="pass2.php" method="get">
							<input type="hidden" name="id" value="<?php echo  $prod['id'];?>">
							<input type="hidden" name="price" value="<?php echo  $prod['product_price'];?>">
							<button type="submit" name="cartadd" class="btn">add to cart</button>
						</form>
				</div>
			<?php

			}
		}
		
		?>
	</div>
	</div>	
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
					<li><a href="#">T-shirts</a></li>
					<li><a href="#">Notebooks</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Creators</h4>
				<ul>
					<li><a href="#">About Us</a></li>
					<li>Manasi Mhatre</li>
					<li>Rohan</li>
					<li>Ganesh</li>
					<li>Aryan</li>
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