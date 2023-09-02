<?php
require "config/constants.php";
session_start();
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e32f8d610d.js" crossorigin="anonymous"></script>
	<style>

		*{
			font-family: 'Quicksand', sans-serif;
		}
		a{
			font-family: 'Quicksand', sans-serif;
			transition: 0.5s;
			
		}
		.btn{
			transition: 0.5s;
		}
		.font-color{
			color: #ec4141;
		}
	</style>
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="navbar navbar-fixed-top" style="box-shadow: 0px 4px 18px 14px rgba(0,0,0,0.1);background-color:black;border-radius:5%;"><!--INLINE STYLE HEREE NAVBAR-->
		<div class="container-fluid">
			<div class="navbar-header">
			
			
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav navbar-hover">
					<li><a href="index.php" class="font-color"><i class="fa-solid fa-house-user"></i> Home</a></li>
					<li><a href="index.php" class="font-color"><i class="fa-solid fa-store"></i> Products</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" id="search" style="font-family:'Quicksand', sans-serif">
					</div>
					<button type="submit" class="btn btn-primary" id="search_btn"><i class="fa-solid fa-magnifying-glass"></i></span></button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle font-color" data-toggle="dropdown"><i class="fa-solid fa-cart-plus"></i> Cart <span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading"style="background-color: #44ab9c;color:white">
									<div class="row">
										<div class="col-md-3">Sl.No</div>
										<div class="col-md-3">Image</div>
										<div class="col-md-3">Name</div>
										<div class="col-md-3">Price<?php echo CURRENCY; ?></div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
						
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle font-color" data-toggle="dropdown"><i class="fa-solid fa-user"></i> Login/Register</a>
						<ul class="dropdown-menu">
							<div style="width:100%;height:100%;">
								<div class="panel panel-primary"style="padding:10%;">
									<div class="">Login</div>
									<div class="" >
										<form onsubmit="return false" id="login" >
											<label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
											<input type="email" class="form-control" name="email" id="email" required />
											<label for="email"><i class="fa-solid fa-lock"></i> Password</label>
											<input type="password" class="form-control" name="password" id="password" required />
											
											<input type="submit" class="btn btn-danger" style="min-width: 100%;margin:2%" value="Login">
											<a href="customer_registration.php?register=1" class="btn btn-danger" style="min-width: 100%;margin:2%">Register</a>
										</form>
									</div>
									<div class="" id="e_msg"></div>
								</div>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" style="box-shadow: 14px 25px 25px 24px rgba(0,0,0,0.1);">
					<div class="panel-heading" style="background-color: #ac999a;">Products</div>
					<div class="panel-body"> 
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">Rs.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; <?php echo date("D-M-Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>

</html>