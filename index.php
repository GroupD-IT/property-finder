<?php 

include 'config.php';
include 'navheader.php';

?>

	

	
			<!-- Home Banner -->
			<section class="banner-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="banner-content" data-aos="fade-down">
								<h1>Find Your Best Dream House for <span>Rental, Buy & Sell...</span></h1>
								<p>Properties for buy / rent in in your location. We have more than 3000+ listings for you to choose</p>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- /Home Banner -->


<!-- Cities List -->
<section class="cities-list-sec">
				<div class="container">
					<div class="section-heading">
						<h2>States With Listing</h2>
						<div class="sec-line">
							<span class="sec-line1"></span>
							<span class="sec-line2"></span>
						</div>
						<p>Find your Dream home, in your Dream City!</p>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="city-card-slider owl-carousel">
							<?php
          
  $statesql = "SELECT * FROM `states`";
  $stateresult = mysqli_query($conn, $statesql);
  while ($staterow = mysqli_fetch_assoc($stateresult)) { 
?>
								<div class="city-first-card"  data-aos="fade-down" data-aos-duration="2000">
									<div class="city-list">
										<div class="city-img">
											<img src="adminPanel/uploads/<?php echo $staterow['image'] ?>" alt="City">
										</div>
										<div class="city-name">
											<h5><?php echo $staterow['state'] ?></h5>
											<!-- <p>300 Properties</p> -->
										</div>
										<div class="arrow-overlay">
											<a href="property-state.php?id=<?php echo $staterow['id']; ?>"><i class='fa-solid fa-arrow-right'></i></a>
										</div>
									</div>
									
								</div>
								
							<?php }	?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		
		<!-- /Cities List -->

			<!-- Feature Properties For Sale-->
			<section class="feature-property-sec">
				<div class="container">
					<div class="section-heading text-center">
						<h2>Properties for Rent</h2>
						<div class="sec-line">
							<span class="sec-line1"></span>
							<span class="sec-line2"></span>
						</div>
						<p>Book Your Dream Home!</p>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="feature-slider owl-carousel">
							<?php
			$sql = "SELECT * FROM `property` ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
								<div class="slider-col">
		
									<div class="product-custom"  data-aos="fade-down" data-aos-duration="1000">
										<div class="profile-widget">
											<div class="doc-img">
												<a href="rent-details.php?id=<?php echo $row['id']; ?>" class="property-img">
													<img class="img-fluid" alt="Property Image" style="height: 300px;"  src="adminPanel/uploads/<?php echo $row['featureImg']; ?>">
												</a>
												<!-- <div class="product-amount">
													<span>/monthly</span>
												</div> -->
												<!-- <div class="feature-rating">
													<div>
														<div class="featured">
															<span>Featured</span>
														</div>
														<div class="new-featured">
															<span>New</span>
														</div>
													</div>
													<a href="javascript:void(0)">
														<div class="favourite selected">
															<span><i class="fa-regular fa-heart"></i></span>
														</div>
													</a>
												</div> -->
												<!-- <div class="user-avatar">
													<img src="assets/img/profiles/avatar-01.jpg" alt="User">
												</div> -->
											</div>
											<div class="pro-content">
                                                <!-- <div class="rating">
                                                    <span class="rating-count">
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                        <i class="fa-solid fa-star checked"></i>
                                                    </span>
                                                    <p class="rating-review"><span>5.0</span>(20 Reviews)</p>
                                                </div> -->
												<h3 class="title">
													<a href="rent-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a> 
												</h3>
												<p><span><i class="feather-map-pin"></i></span><?php echo $row['address'] ?></p>
												<ul class="d-flex details">
													<li>
														<!-- <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" > -->
														<i style="color: #FF8080; margin-right: 5px;" class="fa-solid fa-bed"></i>
														<?php echo $row['beds'] ?> Bedrooms
														
													</li>
													<li>
														<!-- <img src="assets/img/icons/bath-icon.svg" alt="bath-icon"> -->
														<i style="color: #FF8080; margin-right: 5px;" class="fa-solid fa-bath"></i>
														<?php echo $row['baths'] ?> Bathrooms
													</li>
													<li>
														<!-- <img src="assets/img/icons/building-icon.svg" alt="building-icon"> -->
														<i style="color: #FF8080; margin-right: 5px;" class="fa-solid fa-building"></i>
														<?php echo $row['area'] ?> sqft
													</li>
												</ul>
					
												<ul class="property-category d-flex justify-content-between">
													<!-- <li>
														<span class="list">Listed on : </span>
														<span class="date">16 Jan 2023</span>
													</li> -->
													<li>
														<span class="category list">Category : </span>
														<span class="category-value date">	<?php echo $row['category'] ?></span>
													</li>
												</ul>
											</div>
										</div>		
									</div>

									
									
								</div>
								<?php }
			                           } ?>
								
								
								
								
							</div>
							<div class="view-property-btn d-flex justify-content-center"  data-aos="fade-down" data-aos-duration="1000">
								<a href="rent-property-grid.php" class="btn-primary">View All Properties</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-imgs">
					<img src="assets/img/bg/price-bg.png" class="bg-01" alt="icon">
					<!-- <img src="assets/img/icons/blue-circle.svg" class="bg-02" alt="icon"> -->
					<img src="assets/img/icons/red-circle.svg" class="bg-03" alt="icon">
				</div>
			</section>
			<!-- /Feature Properties For Sale -->

			

			<!-- Feature Property For Rent -->
			
			<!-- /Feature Property For Rent -->

			

			<!-- Main Property -->
			<section class="main-property-sec">
				<div class="container">
					<div class="main-property-details">
						<div class="row justify-content-center">

							<!-- Buy Property -->
							<div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
								<div class="single-property-card">
									<div class="img-card">
										<a href="buy-property-grid.html"><img src="assets/img/city/property-img-1.jpg" alt="Property Image"></a>
									</div>
									<div class="buy-property">
										<h4><a href="buy-property-grid.html">Find a Property</a></h4>
										<a href="buy-property-grid.html" class="arrow buy-arrow"><i class='fa-solid fa-arrow-right'></i></a>
									</div>
								</div>
							</div>
							<!-- /Buy Property -->

							<!-- Sell Property -->
							<div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
								<div class="single-property-card">
									<div class="img-card">
										<a href="rent-property-grid.html"><img src="assets/img/city/property-img-2.jpg" alt="Property Image"></a>
									</div>
									<div class="buy-property">
										<h4><a href="rent-property-gridhtml.html">Select a Property</a></h4>
										<a href="rent-property-grid.html" class="arrow sell-arrow"><i class='fa-solid fa-arrow-right'></i></a>
									</div>
								</div>
							</div>
							<!-- /Sell Property -->

							<!-- Rent Property -->
							<div class="col-lg-4 col-md-6"  data-aos="fade-down" data-aos-duration="2000">
								<div class="single-property-card">
									<div class="img-card">
										<a href="rent-property-grid.html"><img src="assets/img/city/property-img-3.jpg" alt="Property Image"></a>
									</div>
									<div class="buy-property">
										<h4><a href="rent-property-grid.html">Rent a Property</a></h4>
										<a href="rent-property-grid.html" class="arrow rent-arrow"><i class='fa-solid fa-arrow-right'></i></a>
									</div>
								</div>
							</div>
							<!-- /Rent Property -->

						</div>

						
						<div class="bg-imgs">
							<img src="assets/img/bg/prop-bg.png" class="bg-10" alt="icon">
						</div>
					</div>

					
				</div>		
				<!-- <div class="bg-imgs">
					<img src="assets/img/icons/blue-circle.svg" class="bg-08" alt="icon">
				</div> -->
			</section>
			<!-- /Main Property -->

			
			<section class="testimonial-sec">
				<div class="container">
					<div class="section-heading">
						<h2>Testimonials</h2>
						<div class="sec-line">
							<span class="sec-line1"></span>
							<span class="sec-line2"></span>
						</div>
						<p>What our happy client says</p>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="testimonial-slider owl-carousel">

							<!-- Testimonial -->
			<?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `testimonial`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
?>
								
								<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
									<div class="user-icon">
										<a href="javascript:void(0);"><img src="adminPanel/uploads/<?php echo $row['image']; ?>" alt="User"></a>
									</div>
									<p><?php echo $row['description']; ?></p>
									<h4><a href="javascript:void(0);"><?php echo $row['name']; ?></a></h4>
									<div class="rating">
										<span><i class="fa-solid fa-star"></i></span>
										<span><i class="fa-solid fa-star"></i></span>
										<span><i class="fa-solid fa-star"></i></span>
										<span><i class="fa-solid fa-star"></i></span>
										<span><i class="fa-solid fa-star"></i></span>
									</div>
								</div>

								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			
			<!-- /Testimonial -->

			

					
				<div class="bg-imgs" >
					<img src="assets/img/bg/price-bg.png" class="bg-05" alt="icon">
				</div>
			</section>
			<!-- /Pricing -->

			<!-- Faq -->
			<section class="faq-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="faq-img">
								<img src="assets/img/faq-img.jpg" alt="icon">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
								<h2>Frequently Asked Questions</h2>
								<div class="sec-line">
									<span class="sec-line1"></span>
									<span class="sec-line2"></span>
								</div>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
							</div>
							<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">1. Are the utilities the responsibility of the tenant?</a>
								</h4>
								<div id="faqone" class="card-collapse collapse">
									<div class="faq-info">
										<p>Again, it depends on what is written in the lease, but typically, the tenant pays the utilities. If this is the case, then we advise that you call all necessary utility companies a week in advance in order to have the utilities turned on or transferred into your name. A list of local utility vendors should be given to you upon the signing of the lease.</p>
									</div>
								</div>
							</div>
							<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. Is there an application fee? How much? Where do I turn in an application?</a>
								</h4>
								<div id="faqtwo" class="card-collapse collapse">
									<div class="faq-info">
										<p>Yes, we require an application fee of $60 per applicant. Anyone 18 or older that will be a full-time resident of the property needs to fill out an application. We check your credit report, criminal background, your rental/eviction history, and we verify income/employment. The screening process usually takes 1-2 business days. You can fax, email, mail, or drop off your application, and you can also apply online (go to the property listing and click the “apply now” button). Your application fee needs to be paid before we start the screening process.</p>
									</div>
								</div>
							</div>
							<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
								<h4 class="faq-title">
									<a class="" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. When I move out, what do I need to do to receive my full security deposit back?</a>
								</h4>
								<div id="faqthree" class="card-collapse collapse show">
									<div class="faq-info">
										<p>We advise that you remove all personal belongings and clean the house thoroughly including floors, walls, trim, windows, bathrooms, counters, cabinets, appliances. All carpets should be shampooed. Gutters should be cleaned out. The roof should be free of leaves and debris. If you are responsible for lawn maintenance, then the grass and hedges need to be trimmed to a reasonable height and all beds should be free of weeds. We ask that all damages be repaired by a licensed contractor that is approved by Shapira Management, LLC. You should be able to receive your security deposit back within 45 days from the day of your lease end term date</p>
									</div>
								</div>
							</div>
							<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. When is your staff available for showings/inspections?</a>
								</h4>
								<div id="faqfour" class="card-collapse collapse">									
									<div class="faq-info">
										<p>Again, it depends on what is written in the lease.  Typically, the tenant will pay an additional security deposit. We accept pets on a case-by-case situation. Shapira Management may request to be shown pictures of all pets that are being requested to live inside the home. </p>
									</div>
								</div>
							</div>
							<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5.Who do I call for maintenance problems? What maintenance issues is the landlord responsible for?</a>
								</h4>
								<div id="faqfive" class="card-collapse collapse">									
									<div class="faq-info">
										<p>It depends on how the lease reads, but most residential leases dictate that the landlord is responsible for the roof, electrical, plumbing, heating/cooling and appliances. When in doubt, you are welcome to call our office to ask. Unless directed otherwise, you should call your property manager for all maintenance issues.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Faq -->

			<!-- Agent Register -->
			<section class="agent-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8">
							<div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
								<h2>Want to join our Team</h2>
								<div class="sec-line">
									<span class="sec-line1"></span>
									<span class="sec-line2"></span>
								</div>
								<p>If you want to join our team then click on register button!</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="register-btn" data-aos="fade-down" data-aos-duration="2000">
								<a href="agent-form.php" class="btn-primary">Register Now</a>
							</div>
						</div>
					</div>
				</div>				
				<div class="bg-imgs">
					<!-- <img src="assets/img/icons/blue-circle.svg" class="bg-06" alt="icon"> -->
					<img src="assets/img/icons/red-circle.svg" class="bg-07" alt="icon">
				</div>
			</section>
			<!-- /Agent Register -->

<?php include 'footer.php'; ?>

			

			
		
	
