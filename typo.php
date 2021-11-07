<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Typo :: w3layouts</title>
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
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">\
				<div class="drop">
						<a href="account.php"><p>Login</p></a>
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
						<li class="grid"><a href="typo.php">Admin</a>
						</li>
						<li class="grid"><a href="contact.php">Contact</a>
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
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--typo-starts-->
	    <!-- Bootstrap --> 
		    <!-- Bootstrap --> 
			    <!-- Bootstrap --> 
			    <!-- Bootstrap --> 
				<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
        function deleteConfirm() 
        {
            if(confirm("Are you sure to delete!"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
    <?php
        include_once("connection.php");
        if(isset($_GET["function"]) =="del")
        {
            if(isset($_GET["id"]))
            {
                $id = $_GET["id"];
                mysqli_query($conn, "DELETE FROM category Where Cat_ID='$id'");
            }
        }
    ?>
        <form name="frm" method="post" action="">
        <h1>Product Category</h1>
        <p>
        <img src="images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="Add_category"> Add</a>
        </p>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Category Name</strong></th>
                    <th><strong>Desscriptin</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
                $No = 1;
                $result = mysqli_query($conn, "SELECT * FROM category");
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            ?>   
			<tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["Cat_Name"]; ?></td>
              <td><?php echo $row["Cat_Des"]; ?></td>
              <td style='text-align:center'> 
                    <a href="Update_Category.php?id=<?php echo $row['Cat_ID']; ?>">
                    <img src='images/edit.png' border='0'  />
                    </a>
                </td>
              <td style = 'text-align:center'>
                    <a href="Category_Management.php?function=del&&id=<?php echo $row["Cat_ID"]; ?>" onclick="return deleteConfirm()">
                        <img src='images/delete.png' border='0'/>
                    </a>
              </td>
            </tr>
            <?php
                $No++;
                }
            ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
   
       <!-- Bootstrap -->
	   <link rel="stylesheet" href="css/bootstrap.min.css">

<form name="frm" method="post" action="">
<h1>Product Management</h1>
<p>
	<a href="Add_Product.php"><img src="images/add.png"alt="Thêm mới" width="16" height="16" border="0" /> Add new</a>
</p>
<table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th><strong>No.</strong></th>
			<th><strong>Product ID</strong></th>
			<th><strong>Product Name</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Category ID</strong></th>
			<th><strong>Image</strong></th>
			<th><strong>Edit</strong></th>
			<th><strong>Delete</strong></th>
		</tr>
	 </thead>

	<tbody>
	<?php
		include_once("connection.php"); 
		$No = 1;
		$result = mysqli_query($conn, "SELECT  Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name FROM product a, category b
		Where a.Cat_ID = b.Cat_ID ORDER BY ProDate DESC");
		while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
	?>
	<tr>
	  <td ><?php echo $No; ?></td>
	  <td ><?php echo $row['Product_ID'] ?></td>
	  <td><?php echo $row['Product_Name'] ?></td>
	  <td><?php echo $row['Price'] ?></td>
	  <td ><?php echo $row['Pro_qty'] ?></td>
	  <td><?php echo $row['Cat_Name'] ?></td>
	 <td align='center' class='cotNutChucNang'>
		 <img src='product-imgs/<?php echo $row['Pro_image']?>' border='0' width="50" height="50"  /></td>
	 <td align='center' class='cotNutChucNang' ><a href="Update_Product.php?id=<?php echo $row['Product_ID']; ?>"><img src='images/edit.png' border='0'/></td>
	 <td align='center' class='cotNutChucNang'><img src='images/delete.png' border='0' /></td>
	</tr>
	<?php
		$No ++;
		}
	?>
	</tbody>

</table>  

</form>

	<!--typo-ends-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
				<h3>Follow Us</h3>
					<ul>
						<li><a href="https://www.facebook.com/Luxury-watches-online-104538154385289"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="https://twitter.com/luxurywatches21"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.govberg.ontime&hl=en_US&gl=US"><span class="google"></span><h6>Google+</h6></a></li>
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