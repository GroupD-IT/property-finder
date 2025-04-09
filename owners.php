<?php include 'navheader.php';
include 'config.php';
?>


	
		<div class="main-wrapper">
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<div class="container">
					<div class="bread-crumb-head">
						<div class="breadcrumb-title">
							<h2> Owners</h2>
						</div>
						<div class="breadcrumb-list">
							<ul>
								<li><a href="index.php">Home </a></li>
								<li>Owners</li>
							</ul>
						</div>
					</div>
					<div class="breadcrumb-border-img">
						<img src="assets/img/bg/line-bg.png" alt="Line Image">
					</div>
				</div>
			</div>
			<!-- Breadcrumb -->		

			<!-- Blog Grid-->
			<div class="section blog-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="blog-banner">
								<div class="blog-banner-img">
									<img src="assets/img/blog/blog-banner.jpg" alt="img">
								</div>
								<div class="blog-banner-content">
									<div class="blog-banner-contenthead">
										<h6>Shapira Property Management</h6>
										<h5> Contact Our Experienced Property Managers

										</h5>
										<p>

											We know that every property is unique so we custom tailor our services to meet the individual needs of your property.

										</p>
									</div>
									<div class="blog-detailset">
										<div class="post-author">
											
											<a href="contact-us.php" class="btn btn-primary"><i class="fa-regular fa-envelope" style="margin-right: 5px;"></i>Contact us</a>
										</div>
										
									</div>
								</div>
								
							</div>
							<div class="blog-para-content">
								<p>Our professional management team will work diligently to successfully market your home. Our mission will be to maintain the property, find the best tenants, and negotiate a comprehensive lease. We screen all our vendors, personally oversee maintenance, ensure the timely payment of all bills, as well as to conduct periodic inspections of your property.
<br><br>
									We’ll post your monthly statements online, and electronically transfer all proceeds directly into your bank account. We’re available to answer any and all questions and will respond in a timely manner to any concerns. We comply with all state and federal statutes with respect to tenant selection and landlord/tenant laws. Our level of service will ensure that your investment real estate experience is a hassle-free one.</p>
								<h4>Owner Resources</h4>
								<img src="assets/img/blog/blog-banner1.jpg" alt="img">
								<p>We treat your home as our own. We offer a wide range of property management services to fit your needs as a landlord or homeowner and tailor our services to ensure that you have the highest level of service for your home.

</p>
							</div>
						</div>
					</div>

					<div class="row" style="margin-top: 40px ;">
						<div class="col-lg-6 d-flex" style="flex-direction: column; justify-content: center;">
							<h2>Documents & Forms
							</h2>
							<p>Every property management office needs documents to track information and communicate effectively.

							</p>
						</div>
						<div class="col-lg-6">
							<img src="assets/img/profiles/docs.jpg" alt="">
						</div>
					</div>
				</div>				   
			</div>	
			<!-- /Blog Grid-->	

			<!-- Testimonial -->
			<!-- <section class="testimonial-sec">
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

								
								</div>
								<?php } ?>
								
								
								
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- /Testimonial -->
	
			
<?php include 'footer.php'; ?>