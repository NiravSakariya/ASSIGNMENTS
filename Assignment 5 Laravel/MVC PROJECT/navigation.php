<?php
$maiurl="http://localhost/Nirav/Footwear%20Project/";
$baseurl="http://localhost/Nirav/Footwear%20Project/assets";
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Nirav's Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/nouislider.min.css">
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/main.css">


	<!--  Bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<!-- /Bootstrap -->
	<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/nouislider.min.js"></script>
	<script src="assets/js/countdown.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="assets/js/gmaps.min.js"></script>
	<script src="assets/js/main.js"></script>



	
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="./"><h1>Nirav's</h1></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->

					<?php 
						if(!isset($_SESSION["email"]))
						{
					?>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop </a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Account</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="register">Register</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking">Tracking</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact-us">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="carts" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
					<?php 
						}
						else
						{
					?>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop </a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
								<!-- <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login">Logout</a></li>
								</ul> -->
<!-- =================================================================================== -->

					<ul class="dropdown-menu">
                        <li class="nav-item">
                                <p class="nav-link ">Welcome To:
                                    <?php
                                         echo ucfirst($_SESSION["firstname"]);
                                    ?>
                                </p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-management">Manage Profile &nbsp;&nbsp;&nbsp;
							<img src="<?php echo $shwdata[0]["photo"];?>" alt="Profile" class="rounded-circle"
                        style="height: 24px; width: 24px;">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?logout" onclick="return confirm('Are You Sure Logout Your Account?')">LogOut <i class="bi bi-box-arrow-right text-danger fw-bolder ms-5" style=" margin-left:10px; font-size:16px;"></i></a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="?delete=<?php echo $shwdata[0]["usid"];?>" onclick="return confirm('Are You Sure You Want To Delete Your Account?')">Delete Account<i class="bi bi-trash text-danger fw-bolder ms-5" style=" margin-left:10px; font-size:16px;"></i></a>
                        </li>
                    </ul>

<!-- =================================================================================== -->



							</li>
							<li class="nav-item"><a class="nav-link" href="contact-us">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
					<?php 
						}
					?>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	
	
	

	
</body>

</html>