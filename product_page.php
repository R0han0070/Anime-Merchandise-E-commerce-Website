<?php
session_start();
include 'config.php';
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  header("Location: Apparel.php");
}

$sql_prod= "SELECT * FROM productdb WHERE id='$id';";
$product=mysqli_query($conn,$sql_prod);

if(mysqli_num_rows($product) > 0){
  $prod= mysqli_fetch_assoc($product);
  $i=0;
  $n=$prod['rating'];
  }

?>


<!DOCTYPE html>
<head><title>Kageyama T-shirt</title>
  <link rel="stylesheet" type="text/css" href="commonstyle.css">
  <link rel="stylesheet" type="text/css" href="product_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="container1">
      <div class="navbar">
    <div class="logo">
      <img src="logo.png" width="225px">
    </div>
    <nav >
      <ul>
    
      <li ><a href="anime.html">Home</a></li>
      <div class="dropdown">
        <li onclick="myFunction()" class="dropbtn">Products</li>
        <div id="myDropdown" class="dropdown-content">
          <a href="Apparel.html">Apparel</a>
          <a href="Actionfigures.html">Action Figures</a>
          <a href="accessories.html">Accessories</a>
          <a href="Stationery.html">Stationery</a>
          <a href="Posters.html">Posters</a>
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
    <main class="container">
 
        <!-- Left Column Image -->
        <div class="left-column">
          <img class="active" src="<?php echo $prod['product_image']; ?>" alt="" >
        </div>
        <!-- Right Column -->
        <div class="right-column">
       
          <!-- Product Description -->
          <div class="product-description">
            <span><?php echo $prod['type']; ?></span>
            <h1><?php echo $prod['product_name']; ?></h1>
            <br>
            <div class="rating">
						<?php 
						for($i=1; $i<= $n; $i++){
							echo '<i class="fa fa-star" ></i>';
						}
						for($i=1; $i<= (5-$n); $i++){
							echo '<i class="fa fa-star-o" ></i>';
						}

						?>
					</div><br>
            <p><?php echo $prod['product_desc']; ?></p>
            <p>Description:<br>
              Style:<?php echo $prod['style']; ?><br>
              Color:<?php echo $prod['color']; ?><br>
              Sleeve Length:<?php echo $prod['sleeve_length']; ?><br>
              Material: <?php echo $prod['material']; ?><br>
              Gender:<?php echo $prod['gender']; ?><br>
              Collar:<?php echo $prod['collar']; ?><br>
              Item Type:<?php echo $prod['type']; ?><br>
              Japanese Anime: <?php echo $prod['j_anime']; ?><br>
              Character:<?php echo $prod['a_character']; ?><br></p>
          </div>
       
       
            <!-- Product Size-->
            <div class="product-size">
              <span>Size</span>
              <form action="pass.php" method="get">
                <select name="size" id="size" class="size-choose">
                  <option value="">Select your size</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                </select>       
            </div>
         
          <!-- Product Pricing -->
          <div class="product-price">
            <span>&#8377;<?php echo $prod['product_price']; ?></span>
            
              <input type="hidden" name="id" value="<?= $id; ?>">
							<input type="hidden" name="price" value="<?php echo  $prod['product_price'];?>">

              <button type="submit" class="cart-btn" name="addcartmain">Add to cart</button>
            </form>
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