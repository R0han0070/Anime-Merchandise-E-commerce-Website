<?php
session_start();
if(isset($_SESSION['uname'])){
	header("Location: accountdetail.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
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


function formValidation()
{
var unm = document.registration.uname;
var nm = document.registration.name;
var uemail = document.registration.email;
var passid = document.registration.passid;


if(uname_validation(unm,5,12))
{
if(name_validation(nm,5,12))
{	
if(passid_validation(passid,7,12))
{
if(allLetter(unm))
{ 
if(allLetter(nm))
{
if(ValidateEmail(uemail))
{
{
}
} 
}
} 
}
}
}
return false;
}

function uname_validation(unm,mx,my)
{
var uid_len = unm.value.length;
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("Username should not be empty. Length must be between "+mx+" to "+my);
uid.focus();
return false;
}
else
{
return true;
}
}

function name_validation(nm,mx,my)
{
var uid_len = nm.value.length;
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("Name should not be empty. Length must be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}

function passid_validation(passid,mx)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my)
{
alert("Password should not be empty. Length must be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}

function allLetter(unm)
{ 
var letters = /^[A-Za-z]+$/;
if(unm.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

function allLetter(nm)
{ 
var letters = /^[A-Za-z]+$/;
if(nm.value.match(letters))
{
return true;
}
else
{
alert('Name must have alphabet characters only');
nm.focus();
return false;
}
}

function ValidateEmail(uemail)
{
var mailformat = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
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
		<li class="active"><a href="signup.html">Account</a></li>
	</ul>
	</nav>
	<a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
</div>
</div>


</div>
<!--signup-->
<div class="container2">
	<div class="sign-up-form">
	<h1>Sign Up Now</h1>
	<form name="registration" method="post" action="signup.php" onSubmit="return formValidation()">
		<input type="text" class="input-box" placeholder="Username" name="uname" >
		<input type="text" class="input-box" placeholder="Name" name="name">
		<input type="text" class="input-box" placeholder="Contact Number" name="contact">
		<input type="text" class="input-box" placeholder="Address" name="address">
		<input type="text" class="input-box" placeholder="Zip-code" name="zipcode">
		<input type="email" class="input-box" placeholder="Email" name="email">
		<input type="password" class="input-box" placeholder="Password" name="passid">
		<br>
		<input type="submit" class="sign-btn" placeholder="Sign-Up" value="Sign-Up">
		<hr>
		<p class="or">OR</p>
		<p>Have an account? <a href="signin.php" style="color: steelblue;">Sign in</a></p>
	</form>
		</div><!--sign up formends-->
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
					<li>T-shirts</li>
					<li>Notebook</li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Creators</h4>
				<ul>
					<li><a href="#">About Us</a></li>
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