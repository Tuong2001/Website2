
<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<?php
SESSION_start();
include_once("connection.php")
?>
<body> 
	<!--top-header-->
	<?php
        if(isset($_SESSION['us']) && $_SESSION['us'] !=""){
      ?>
            <a href="Login.php">
                Hi,<?php echo $_SESSION['us'] ?>
            </a>
            <a href="Log out.php">
               Logout
            </a>
      <?php
        }
        else
        {}
      ?>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">\
				<div class="drop">
				<a href="?page=Login"><p>Login</p></a>
						<a href="register.php"><p>Register</p></a>
				</div>
					<div class="drop">
						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Euro</option>
							</select>
						</div>
						<div class="box1">
							<select tabindex="4" class="dropdown">
								<option value="" class="label">English :</option>
								<option value="1">English</option>
								<option value="2">French</option>
								<option value="3">German</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="checkout.php">
							 <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="index.php"><h1>Luxury Watches</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
                <ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
				<li class="grid"><a href="products.php">Men</a>
						</li>
						<li class="grid"><a href="products1.php">Women</a>
						</li>
						<li class="grid"><a href="products2.php">Kids</a>
                        </li> 
						<li class="grid"><a href="?page=category_management">Category Management</a>
						</li>
						<li class="grid"><a href="?page=product_management">Product Management</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<?php
        if(isset($_GET['page']))
        {
            $page =$_GET['page'];
			if($page=="Login")
            {
                include_once("account.php");
            }
            elseif($page=="category_management")
            {
                include_once("Category_Management.php");
            }
            elseif($page=="product_management")
            {
                include_once("Product_Management.php");
            }
            elseif($page=="Add_Product")
            {
                include_once("Add_Product.php");
            }
            elseif($page=="add_category")
            {
                include_once("Add_Category.php");
            }
            elseif($page=="update_category")
            {
                include_once("Update_Category.php");
            }
            elseif($page=="update_product")
            {
                include_once("Update_Product.php");
            }
            elseif($page=="logout")
            {
                include_once("Log out.php");
			}
        }
        else
        {
            include("Content.php");
        }
	?>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeck-top heading">
				<h2>CHECKOUT</h2>
			</div>
			<div class="ckeckout-top">
			<div class="cart-items">
			 <h3>My Shopping Bag (3)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
				
			<div class="in-check" >
				<ul class="unit">
					<li><span>Item</span></li>
					<li><span>Product Name</span></li>		
					<li><span>Unit Price</span></li>
					<li><span>Delivery Details</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header">
					<div class="close1"> </div>
						<li class="ring-in"><a href="single.html" ><img src="images/c-1.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 290.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
					<div class="clearfix"> </div>
				</ul>
				<ul class=" cart-header1">
					<div class="close2"> </div>
						<li class="ring-in"><a href="single.html" ><img src="images/c-2.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 300.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
						<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header2">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.html" ><img src="images/c-3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name">Analog Watches</span></li>
						<li><span class="cost">$ 360.00</span></li>
						<li><span>Free</span>
						<p>Delivered in 2-3 business days</p></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			</div>  
		 </div>
		</div>
	</div>
	<!--end-ckeckout-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
				<h3>Follow Us</h3>
					<ul>
						<li><a href="https://www.facebook.com/Luxury-watches-online-104538154385289"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="https://twitter.com/luxurywatches21"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.govberg.ontime&hl=en_US&gl=US"><span class="google"></span><h6>GooglePlay+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.php"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->	
</body>
</html>