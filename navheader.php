<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>True Estates</title>
		
		<!-- Favicon -->
		<!-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"> -->
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		

		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    	

		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

	</head>		
	<body>

	

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header header-fix">
				
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo" >
							<img src="assets/img/new-logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/new-logo.png" class="img-fluid" alt="Logo">
							</a>
				
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="index.php">Home</a>
								</li>
								<li><a href="rent-property-grid.php">Our Properties</a></li>
							<li><a href="about-us.php">About us</a></li>
							

							
							
							<li><a href="contact-us.php">Contact Us</a></li>
							

							
						<li class="login-link"><a href="login.html">Sign Up</a></li>
						<li class="login-link"><a href="register.html">Sign In</a></li>

						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						
						
					<?php 
					session_start();
					if(isset($_SESSION['user_id'])){
						?>
<li>
							<a href="#" class="btn btn-primary"><i class="feather-user-plus"><?php  echo $_SESSION['email']?></i></a>
						</li>
						<li>
							<a href="logout.php" class="btn sign-btn"><i class="feather-unlock"></i>logout</a>
						</li>
						<?php
					} else {
					?>

						<li>
							<a href="register.html" class="btn btn-primary"><i class="feather-user-plus"></i>Sign Up</a>
						</li>
						<li>
							<a href="login.html" class="btn sign-btn"><i class="feather-unlock"></i>Sign In</a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</header>
			<!-- /Header -->


</body>
</html>