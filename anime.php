<?php
 session_start();
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is gfg
$database = 'newdb';
 
// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = "SELECT * FROM userdata ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
if(!isset($_SESSION['ses'])){
    $_SESSION['ses']=md5(rand(0,99999) . time());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Anime Merch</title>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="commonstyle.css">
    <style>
    .container{
        max-width: 1300px;
        margin: auto;
        padding-right: 25px;
        padding-left: 25px;
    }
    .row{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }
	.col-3 img:hover
	{
		border: 5px solid steelblue;
	}
    .col-2{
        flex-basis: 50%;
        min-width: 300px;
    
    }
    .col-2 img{
        max-width: 100%;
        padding: 50px 0;
    
    }
    .col-2 h1{
        font-size: 50px;
        line-height: 60px;
        margin: 25px 0;
    }
    .col-2 .btn
    {
        border: 2px solid white;
        background-color: steelblue;
    }
    .btn{
        display: inline-block;
        background:steelblue;
        color: #fff;
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        border:none;
    
    }
    .header{
        background:radial-gradient(#fff,#004f97);
    }
    .header .row{
        margin-top: 70px;
    }
    .btn:hover{
        background:lightsteelblue;
        transition: background 0.5s;
        color: #004f97;
        border: none;
    }
    .categories{
        margin: 70px 0;
    
    }
    .col-3{
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
    }
    .col-3 img{
        width:100%;
    }
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
    .col-4 a
    {
        text-decoration: none;
        color: inherit;
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
    .offer{
        background:radial-gradient(#fff,#004f97);
        margin-top: 80px;
        padding: 30px 0;
    }
	.offer-img{
		
	}
    .col-2 .offer-img{
        padding:50px ;
    }
	.dropbtn {
  
  color: white;
  cursor: pointer;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown li{
	padding: 5px 20px;
}
.dropdown li:hover{
	border: 3px solid white;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>
	<script>
		function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
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
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">
	<div class="logo">
		<img src="logo.png" width="225px">
	</div>
	<nav >
		<ul>
        
		<li class="active"><a href="anime.php">Home</a></li>
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
		<li ><a href="signup.html">Account</a></li>
	</ul>
	</nav>
	<a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
</div>
<div class="row">
	<div class="col-2">
		<h1>Best site for <br> online anime merch shopping!</h1>
		<p> Get the best best deals on quality products and have them delivered at your doorstep.</p>
		<a href="apparel.php" class="btn">Shop Now &#10141;</a>
	</div>
	<div class="col-2">
		<img src="anime1.jpg" width="600px">
	</div>
	
	
</div>
	</div><!--cont-->
</div><!--header-->

<!--- categories--->
<div class="categories">
	<div class="container2">
		<div class="row">
		<a href="Apparel.php"><div class="col-3"><img src="apparel.jpeg" width="200px" height="200px"></div></a> 
		<a href="Actionfigures.php"><div class="col-3"><img src="actionfig.jpg" width="200px" height="200px"></div></a>
		<a href="Stationery.php"><div class="col-3"><img src="stationery.jpeg"  width="200px" height="200px"></div></a>
		<a href="accessories.php"><div class="col-3"><img src="accessories.jpeg"  width="200px" height="200px"></div></a>
		<a href="Posters.php"><div class="col-3"><img src="posters.jpeg" width="200px" height="200px"></div></a>
	</div>
	</div>
	
</div>


<!--offer-->
<div class="offer">
	<div class="container2">
		<div class="row">
			<div class="col-2">
				<img src="itachi.jpg" class="offer-img">
			</div>
			<div class="col-2">
				<p> Availaible now </p>
				<h1>Itachi Uchiha shirt</h1>
				<small>Itachi Uchiha short-sleeved Black comic print t-shirt<br>&#8377; 449</small>
				<a href="apparel.php" class="btn">Buy Now &#10141;</a>
			</div>
		</div>
		
	</div>
	
</div><!--offer class end-->

<!--footer-->

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
					<li>Aryan Pillai</li>
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