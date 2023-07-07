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
						<img class="img-fluid" src="assets/img/login.jpg" style="height: 900px;" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="login">Login Your Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Registration</h3>
						<form class="row login_form" method="post" id="contactForm" enctype="multipart/form-data" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fname" name="fnm" placeholder="First Name *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name *'" required >
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="lname" name="lnm" placeholder="Last Name *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name *'"required >
							</div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email *"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email *'"required >
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Password *" onfocus="this.placeholder = '" onblur="this.placeholder = 'Password *'"required >
							</div>
                            <div class="col-md-12 form-group">
								<input type="number" class="form-control" id="pho" name="phone" placeholder="Phone No. *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone No.'"required >
							</div>
							<div class="col-md-12 form-group">
								<input type="file" class="form-control" id="img" name="img" required >
							</div>
                            <div class="col-md-12 form-group">
								<textarea class="form-control" id="add" name="address" placeholder="Address *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required style="border-top:transparent; border-right:transparent; border-left:transparent;" ></textarea>
							</div>
							<div class="col-md-12 form-group">
							<h4 class="gender-title">Gender</h4>
								<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Prefer not to say">
										<label class="form-check-label" for="inlineRadio3">Prefer not to say</label>
									</div>
								</div>
							<div class="col-md-12 form-group">
								<button type="submit" name="register" value="Register" class="primary-btn">Register</button>
								<a href="login#">Already Have An Account?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->