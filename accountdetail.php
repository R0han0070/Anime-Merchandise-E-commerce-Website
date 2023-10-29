<?php 
session_start();
include 'config.php';

if(!isset($_SESSION['uname'])){

header("Location: signin.php ");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Accout</title>
	<link rel="stylesheet" type="text/css" href="signup.css" >
	<link rel="stylesheet" href="commonstyle.css">
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


</script>
</head>
<body onload="document.registration.uname.focus();">
    <div class="header">
	<div class="container">
		<div class="navbar">
	<div class="logo">
		<img src="logo.png" width="200px">
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
		<li class="active"><a href="signup1.php">Account</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</nav>
	<a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
</div>
</div>


</div>
<!--account detil-->
<div class="container2">
	<div class="sign-up-form">
	<h1>MY ACCOUNT</h1>
	<form >
		User Name:<input type="text" class="input-box" value="<?php echo $_SESSION['uname'];?>" >
		Name :<input type="text" class="input-box" value="<?php echo $_SESSION['name'];?>">
		Contact number:<input type="number" class="input-box" value="<?php echo $_SESSION['contact']; ?>">
		Address:<input type="text" class="input-box" value="<?php echo $_SESSION['address'];?>">
		Zip-code:<input type="text" class="input-box" value="<?php echo $_SESSION['zipcode'];?>">
		Email:<input type="email" class="input-box" value="<?php echo $_SESSION['email'];?>">
		Password:<input type="password" class="input-box" value="<?php echo $_SESSION['passid'];?>">
		<br>
	</form>
		</div><!--account detail formends-->
</div><!--cont2 end-->
	
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