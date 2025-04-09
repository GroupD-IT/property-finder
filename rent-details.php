<?php 

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
	
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title></title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Feathericon CSS -->
    	<link rel="stylesheet" href="assets/css/feather.css">

		<!-- Boxicons CSS -->
		<link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css"> 

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

	</head>		
	<body>

		
		<!-- /Loader -->

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
           <?php include 'navheader.php' ?>
            <!-- /Header -->

            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Rent Details</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html">Home </a></li>
                                <li>Rent Details</li>
                            </ul>
                        </div>
                    </div>
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" alt="Line Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->

            <!-- Detail View Section -->
			<?php
                        $id = $_GET['id'];
                        
                        $sql = "SELECT * FROM `property` WHERE `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
            <section class="buy-detailview">
                <div class="container">

					<!-- Details -->
                    <div class="row align-items-center page-head">
                        <div class="col-lg-8">
                            <div class="buy-btn">
                                
                                <span class="appartment"><?php echo $row['category'] ?></span>
                            </div>
                            <div class="page-title">
                                <h3><?php echo $row['title'] ?><span><img src="assets/img/icons/location-icon.svg" alt="Image"></span></h3>
                                <p><i class="feather-map-pin"></i><?php echo $row['address'] ?> </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="latest-update">
                                <h5>Last Updated on : <?php echo $row['listedDate'] ?></h5>
                                
                                <ul class="other-pages">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
					<!-- /Details -->

                    <div class="row">
                        <div class="col-lg-8">

							<!-- Slider -->
							<div class="buy-details-col">
								<div class="rental-card">
								<div class="slider rental-slider">
									
									<?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="product-img">
                                        <img src="adminPanel/uploads/<?php echo $imagePath ?>" style="height: 600px;"  alt="image">
                                    </div>
                                <?php  } ?>
										
									</div>
									
									<div class="slider slider-nav-thumbnails">
									<?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="detail-slider-item">
                                    <img style="height: 150px;" src="adminPanel/uploads/<?php echo $imagePath ?>" alt="image">
                                    </div>
                                    <?php  } ?>
                                    
										
									</div>
								</div>
							</div>


							<!-- /Slider -->

							<!-- Overview -->
							<div class="collapse-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#overview" aria-expanded="false">Overview</a>
								</h4>
								<div id="overview" class="card-collapse collapse show">
									<ul class="property-overview  collapse-view">
										<li>
											<img src="assets/img/icons/bed-icon.svg" alt="Image">
											<p><?php echo $row['beds'] ?> Beds</p>
										</li>
										<li>
											<img src="assets/img/icons/bath-icon.svg" alt="Image">
											<p><?php echo $row['baths'] ?> Baths</p>
										</li>
										<li>
											<img src="assets/img/icons/building-icon.svg" alt="Image">
											<p><?php echo $row['area'] ?> Sqft</p>
										</li>
									
										
										<li>
											<img src="assets/img/icons/calender-icon.svg" alt="Image">
											<p> <?php echo $row['listedDate'] ?></p>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Overview -->

							<!-- Overview -->
							<div class="collapse-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#about" aria-expanded="false">Description</a>
								</h4>
								<div id="about" class="card-collapse collapse show">
									<div class="about-agent collapse-view">
										<p><?php echo $row['description'] ?></p>
									</div>
								</div>
							</div>
							<!-- /Overview -->
							
							<!-- Property Address -->
							<div class="collapse-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#address" aria-expanded="false">Property Address</a>
								</h4>
								<div id="address" class="card-collapse collapse show  collapse-view">
									<ul class="property-address">
										<li>Address : <span> <?php echo $row['address'] ?></span></li>
										<li>City : <span> <?php echo $row['city'] ?> </span></li> 
										
										
										<li>State : <span><?php echo $row['country'] ?> </span></li> 
										<li>Zip : <span> <?php echo $row['zipcode'] ?></span></li> 
									</ul>
								</div>
							</div>
							<!-- /Property Address -->

							<!-- Property Details -->
							<!-- <div class="collapse-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#details" aria-expanded="false">Property Details</a>
								</h4>
								<div id="details" class="card-collapse collapse show  collapse-view">
									<div class="row">
										<div class="col-md-4">
											<ul class="property-details">
												<li>Property Id : <span> 22972</span></li>
												<li>Price : <span> $ 860,000 </span></li> 
												<li>Price Info: <span> $ 1,098 /sq ft</span></li>
												<li>Property Size : <span>  190 ft2</span></li> 
												<li>Property Lot Size : <span>  1,200 ft2</span></li> 
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="property-details">
												<li>Rooms : <span> 10</span></li>
												<li>Bedrooms : <span> 5</span></li> 
												<li>Bathrooms : <span> 6</span></li>
												<li>Custom Id : <span> 68</span></li> 
												<li>Garages : <span> 2</span></li> 
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="property-details">
												<li>Year Built :  <span> 2005</span></li>
												<li>Garage Size : <span> 2 cars </span></li> 
												<li>Available From : <span> 2023-11-18</span></li>
												<li>Structure Type : <span> Brick</span></li> 
												<li>Floors No : <span> 3</span></li> 
											</ul>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Property Details -->

							<!-- Amenities -->
							<!-- <div class="collapse-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#amenities" aria-expanded="false">Amenities</a>
								</h4>
								<div id="amenities" class="card-collapse collapse show  collapse-view">
									<div class="row">
									<?php

                                    $amenities = $row['amenities'];
                                    $amenities = explode(",",$amenities);
                                    foreach ($amenities as $amenity) {
                                    ?>
                                                    <div class="col-lg-6 col-md-6 mb-1"><img  src="assets/img/icons/amenities.png" alt=""><?php echo $amenity; ?></div>
                                                   <?php } ?>
										
									</div>
								</div>
							</div> -->
							<!-- /Amenities -->

							<!-- Video -->
						
							<!-- /Map -->

							<!-- Reviews -->
							<!-- <div class="collapse-card sidebar-card">
								<h4 class="card-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#review" aria-expanded="false">Reviews (25)</a>
								</h4>
								<div id="review" class="card-collapse collapse show  collapse-view">
									<div class="review-card">
										<div class="customer-review">
											<div class="customer-info">
												<div class="customer-name">
													<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-01.jpg" alt="User"></a>
													<div>
														<h5><a href="javascript:void(0);">Johnson</a></h5>
														<p>02 Jan 2023</p>
													</div>
												</div>												
												<div class="rating">
													<span class="rating-count">
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star"></i>
													</span>
													<p class="rating-review"><span>4.0</span>(20 Reviews)</p>
												</div>
											</div>
											<div class="review-para">
												<p>It was popularised in the 1960s with the release of Letraset sheets containing LoremIpsum passages, and more recently with desktop publishing software like Aldus PageMakerincluding versions of Lorem Ipsum.It was popularised in the 1960s </p>
											</div>
										</div>
										<div class="customer-review">
											<div class="customer-info">
												<div class="customer-name">
													<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-02.jpg" alt="User"></a>
													<div>
														<h5><a href="javascript:void(0);">Casandra</a></h5>
														<p>01 Jan 2023</p>
													</div>
												</div>
												<div class="rating">
													<span class="rating-count">
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
														<i class="fa-solid fa-star checked"></i>
													</span>
													<p class="rating-review"><span>5.0</span>(20 Reviews)</p>
												</div>
											</div>
											<div class="review-para">
												<p>It was popularised in the 1960s with the release of Letraset sheets containing LoremIpsum passages, and more recently with desktop publishing software like Aldus PageMakerincluding versions of Lorem Ipsum.It was popularised in the 1960s with the elease ofLetraset sheets containing Lorem Ipsum passages, and more recently with desktop publishingsoftware like Aldus Page Maker including versions.</p>
											</div>
										</div>
										<div class="property-review">
											<h5 class="card-title">Property Reviews</h5>
											<form action="#">
												<div class="row">
													<div class="col-md-6">
														<div class="review-form">
															<input type="text" class="form-control" placeholder="Your Name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="review-form">
															<input type="email" class="form-control" placeholder="Your Email">
														</div>
													</div>
													<div class="col-md-12">
														<div class="review-form">
															<textarea rows="5" placeholder="Enter Your Comments"></textarea>
														</div>
													</div>
													<div class="col-md-12">
														<div class="review-form submit-btn">
															<button type="submit" class="btn-primary">Submit Review</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Reviews -->

						</div>

						<!-- Sidebar -->
						<div class="col-lg-4 theiaStickySidebar">
							<div class="right-sidebar">
								<a href="rental_booking.php?id=<?php echo $row['id'] ?>" class="btn btn-primary prop-book"><i class="bx bx-calendar"></i>Book Property</a>

								<a href="<?php echo $row['video']?>" class="btn btn-primary prop-book"><i class="bx bx-calendar"></i>See In 3D</a>
								
								<!-- Enquiry -->
								<!-- <div class="sidebar-card">
									<div class="sidebar-card-title">
										<h5>Request Info</h5>
									</div> -->
								
									<!-- <form  action="insertAction.php" method="post" >
										<div class="review-form">
											
											<input type="hidden" name="enquiry_id" value="" id="">
											<input type="text" name="name" class="form-control" placeholder="Your Name">
										</div>
										<div class="review-form">
											<input type="email" name="email" class="form-control" placeholder="Your Email">
										</div>
										<div class="review-form">
											<input type="text" name="phone" class="form-control" placeholder="Your Phone Number">
										</div>
										<div class="review-form">
											<textarea rows="5" name="description" placeholder="Yes, I'm Interested"></textarea>
										</div>
										<div class="review-form submit-btn">
											<button type="submit" name="addEnquiry"  class="btn-primary">Send</button>
										</div>
									</form> -->
									<!-- <ul class="connect-us">
										<li><a href="javascript:void(0);"><i class="feather-phone"></i>Call Us</a></li>
										<li><a href="javascript:void(0);"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a></li>
									</ul> -->
								<!-- </div> -->
								<!-- /Enquiry -->

								<!-- Listing Owner Details -->
								<!-- <div class="sidebar-card">
									<div class="sidebar-card-title">
										<h5>Listing Owner Details</h5>
									</div>
									<div class="user-active bg-white p-0">
										<div class="user-img">
											<a href="javascript:void(0);"><img class="avatar" src="assets/img/profiles/avatar-03.jpg" alt="Image"></a>
										</div>
										<div class="user-name">
											<h4><a href="javascript:void(0);">John Collins</a></h4>
											<div class="rating">
                                                <span class="rating-count d-inline-flex">
                                                    <i class="fa-solid fa-star checked"></i>
                                                    <i class="fa-solid fa-star checked"></i>
                                                    <i class="fa-solid fa-star checked"></i>
                                                    <i class="fa-solid fa-star checked"></i>
                                                    <i class="fa-solid fa-star checked"></i>
                                                </span>
                                                <span class="rating-review">5.0 (20 Reviews)</span>
                                            </div>
										</div>
									</div>
									<ul class="list-details">
										<li>No of Listings <span>05</span></li>
										<li>No of Bookings<span>225</span></li>
										<li>Memeber on<span>15 Jan 2023</span></li>
										<li>Verification<span>Verified</span></li>
									</ul>
								</div> -->
								<!-- /Listing Owner Details -->

								<!-- Share Property -->
								<!-- <div class="sidebar-card">
									<div class="sidebar-card-title">
										<h5>Share Property</h5>
									</div>
									<div class="social-links">
										<ul class="sidebar-social-links">
											<li><a href="javascript:void(0);" class="fb-icon"><i class="fa-brands fa-facebook-f hi-icon"></i></a></li>
											<li><a href="javascript:void(0);" class="ins-icon"><i class="fa-brands fa-instagram hi-icon"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa-brands fa-behance hi-icon"></i></a></li>
											<li><a href="javascript:void(0);" class="twitter-icon"><i class="fa-brands fa-twitter hi-icon"></i></a></li>
											<li><a href="javascript:void(0);" class="ins-icon"><i class="fa-brands fa-pinterest-p hi-icon"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fa-brands fa-linkedin hi-icon"></i></a></li>
										</ul>
									</div>
								</div> -->
								<!-- /Share Property -->
								
							</div>
						</div>
						<!-- /Sidebar -->

                    </div>

					<!-- Similar Listings -->
					<!-- <div class="similar-list">
						<div class="section-heading">
							<h2>Similar Listings</h2>
							<div class="sec-line">
								<span class="sec-line1"></span>
								<span class="sec-line2"></span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmodtempor incididunt</p>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="feature-property-sec for-rent p-0">
									<div class="rentfeature-slider owl-carousel">
										<div class="product-custom">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="rent-details.html" class="property-img">
														<img class="img-fluid" alt="Property Image" src="assets/img/product/product-6.jpg">
													</a>
													<div class="product-amount">
														<h5><span>$2,200 </span> / Night</h5>
													</div>
													<div class="featured">
														<span>Featured</span>
													</div>
													<div class="new-featured">
														<span>New</span>
													</div>
													<a href="javascript:void(0)">
														<div class="favourite">
															<span><i class="fa-regular fa-heart"></i></span>
														</div>
													</a>
												</div>
												<div class="pro-content">
													<div class="rating">
														<span class="rating-count">
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
														</span>
														<span class="rating-review">Excellent</span>
													</div>
													<h3 class="title">
														<a href="rent-details.html">Beautiful Condo Room</a> 
													</h3>
													<p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA</p>
													<ul class="d-flex details">
														<li>
															<img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
															3 Beds
														</li>
														<li>
															<img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
															2 Baths
														</li>
														<li>
															<img src="assets/img/icons/building-icon.svg" alt="building-icon">
															15000 Sqft
														</li>
													</ul>
													<ul class="property-category d-flex justify-content-between align-items-center">
														<li class="user-info">
															<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-01.jpg" class="img-fluid avatar" alt="User"></a>
															<div class="user-name">
																<h6><a href="javascript:void(0);">Marc Silva</a></h6>
																<p>Newyork</p>
															</div>													
														</li>
														<li>
															<a href="rent-details.html" class="btn-primary">Book Now</a>
														</li>
													</ul>
												</div>
											</div>		
										</div>
										<div class="product-custom">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="rent-details.html" class="property-img">
														<img class="img-fluid" alt="Property Image" src="assets/img/product/product-7.jpg">
													</a>
													<div class="product-amount">
														<h5><span>$1,400 </span> / Night</h5>
													</div>
													<div class="featured">
														<span>Featured</span>
													</div>
													<a href="javascript:void(0)">
														<div class="favourite">
															<span><i class="fa-regular fa-heart"></i></span>
														</div>
													</a>
												</div>
												<div class="pro-content">
													<div class="rating">
														<span class="rating-count">
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
														</span>
														<span class="rating-review">Excellent</span>
													</div>
													<h3 class="title">
														<a href="rent-details.html">Grand Mahaka</a> 
													</h3>
													<p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
													<ul class="d-flex details">
														<li>
															<img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
															3 Beds
														</li>
														<li>
															<img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
															3 Baths
														</li>
														<li>
															<img src="assets/img/icons/building-icon.svg" alt="building-icon">
															30100 Sqft
														</li>
													</ul>
													<ul class="property-category d-flex justify-content-between align-items-center">
														<li class="user-info">
															<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-02.jpg" class="img-fluid avatar" alt="User"></a>
															<div class="user-name">
																<h6><a href="javasript:void(0);">Karen Maria</a></h6>
																<p>South Dokata</p>
															</div>													
														</li>
														<li>
															<a href="rent-details.html" class="btn-primary">Book Now</a>
														</li>
													</ul>
												</div>
											</div>		
										</div>
										<div class="product-custom">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="rent-details.html" class="property-img">
														<img class="img-fluid" alt="Property Image" src="assets/img/product/product-8.jpg">
													</a>
													<div class="product-amount">
														<h5><span>$1,500 </span> / Night</h5>
													</div>
													<div class="featured">
														<span>Featured</span>
													</div>
													<a href="javascript:void(0)">
														<div class="favourite">
															<span><i class="fa-regular fa-heart"></i></span>
														</div>
													</a>
												</div>
												<div class="pro-content">
													<div class="rating">
														<span class="rating-count">
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
														</span>
														<span class="rating-review">Excellent</span>
													</div>
													<h3 class="title">
														<a href="rent-details.html">Royal Apartment</a> 
													</h3>
													<p><i class="feather-map-pin"></i> 82-25 Parsons Blvd, Jamaica, NY 11432, USA</p>
													<ul class="d-flex details">
														<li>
															<img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
															2 Beds
														</li>
														<li>
															<img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
															1 Bath
														</li>
														<li>
															<img src="assets/img/icons/building-icon.svg" alt="building-icon">
															2500 Sqft
														</li>
													</ul>
													<ul class="property-category d-flex justify-content-between align-items-center">
														<li class="user-info">
															<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
															<div class="user-name">
																<h6><a href="javascript:void(0)">Scott Gwin</a></h6>
																<p>Minipoliies</p>
															</div>													
														</li>
														<li>
															<a href="rent-details.html" class="btn-primary">Book Now</a>
														</li>
													</ul>
												</div>
											</div>		
										</div>
										<div class="product-custom">
											<div class="profile-widget">
												<div class="doc-img">
													<a href="rent-details.html" class="property-img">
														<img class="img-fluid" alt="Property Image" src="assets/img/product/product-10.jpg">
													</a>
													<div class="product-amount">
														<h5><span>$4,500 </span> / Night</h5>
													</div>
													<div class="featured">
														<span>Featured</span>
													</div>
													<a href="javascript:void(0)">
														<div class="favourite">
															<span><i class="fa-regular fa-heart"></i></span>
														</div>
													</a>
												</div>
												<div class="pro-content">
													<div class="rating">
														<span class="rating-count">
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
															<i class="fa-solid fa-star checked"></i>
														</span>
														<span class="rating-review">Excellent</span>
													</div>
													<h3 class="title">
														<a href="rent-details.html">Grand Villa house</a> 
													</h3>
													<p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
													<ul class="d-flex details">
														<li>
															<img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
															4 Beds
														</li>
														<li>
															<img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
															3 Baths
														</li>
														<li>
															<img src="assets/img/icons/building-icon.svg" alt="building-icon">
															11000 Sqft
														</li>
													</ul>
													<ul class="property-category d-flex justify-content-between align-items-center">
														<li class="user-info">
															<a href="javascript:void(0);"><img src="assets/img/profiles/avatar-05.jpg" class="img-fluid avatar" alt="User"></a>
															<div class="user-name">
																<h6><a href="javascript:void(0);">Kell Robinson</a></h6>
																<p>USA</p>
															</div>													
														</li>
														<li>
															<a href="rent-details.html" class="btn-primary">Book Now</a>
														</li>
													</ul>
												</div>                                                                                          
											</div>		
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- /Similar Listings -->

                </div>
            </section>

			<?php } ?>
			<!-- /Detail View Section -->

			<!-- Footer -->
			<?php include 'footer.php' ?>

		<!-- ScrollToTop -->
		<div class="progress-wrap active-progress">
			<svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
			</svg>
		</div>
		<!-- /ScrollToTop -->
	
		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>

		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>

		<!-- Slick JS -->
		<script src="assets/plugins/slick/slick.js"></script>

		<!-- Sticky Sidebar JS -->
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
		<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
	
		<!-- Fancybox JS -->
		<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
	
	<?php include 'config.php'; ?>