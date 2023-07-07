<?php 
if(isset($_SESSION["usid"]))
{
    echo "<script>
    window.location='./';
    </script>";
}
?>
<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="./">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p> Please fill the details for registration</p>
							<a class="primary-btn" href="register">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" method="post" id="contactForm">
							<div class="col-md-12 form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email *"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email *'"required >
								</div>
								<div class="col-md-12 form-group">
									<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"required>
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Keep me logged in</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
								<a href=""><button type="submit" name="log"  value="submit" class="primary-btn">Log In</button></a>
									<a href="register">Don't Have An Account?</a>
									<a href="forget-password">Forgot Password?</a>

								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->