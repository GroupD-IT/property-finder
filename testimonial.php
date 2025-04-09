<?php 
include 'config.php';

include 'navheader.php';

?>
		<div class="main-wrapper">
		
			
			 <!-- Breadcrumb -->
			 <div class="breadcrumb">
                <div class="container">
                    <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Client Testimonials</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="javascript:void(0);">Home </a></li>
                                <li>Client Testimonials</li>
                            </ul>
                        </div>
                    </div>
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" alt="Line Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->		     	
			
			<!-- Testimonials-->
			<div class="listing-section">
				<div class="container">
					<div class="testimonial-group m-0">
						<div class="row">

						<?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `testimonial`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
 
?>

							<!-- Col -->
							<div class="col-lg-4 col-12 d-flex aos" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="500">
								<div class="card testimonial-card flex-fill">
									<div class="user-icon">
										<a href="javascript:void(0);"><img src="adminPanel/uploads/<?php echo $row['image']; ?>" alt="Image"></a>
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
									<div class="quotes-head"></div>
								</div>
							</div>
							<!-- /Col -->

							<?php }?>

							

						
						</div>
					</div>
				</div>				   
			</div>	
			<!-- /Testimonials-->	

			<!-- Footer -->
		
			<!-- /Footer -->

			<!-- Search -->
			<div class="search-popup js-search-popup ">
				<a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
					<i class="fa fa-close"></i>
				</a>
				<div class="popup-inner">
					<div class="inner-container">
						<form class="search-form" id="search-form" action="https://dreamsestate.dreamstechnologies.com/html/rent-property-grid.html">
							<h3>What Are You Looking for?</h3>
							<div class="search-form-box flex">
								<input type="text" class="search-input" placeholder="Type a  Keyword...." id="search-input" aria-label="Type to search" role="searchbox" autocomplete="off">
								<button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
							</div>
							<h5>Popular Properties</h5>
							<ul>
								<li><a href="rent-property-grid.html">Beautiful Condo Room</a></li>
								<li><a href="rent-property-grid.html">Royal Apartment</a></li>
								<li><a href="rent-property-grid.html">Grand Villa House</a></li>
								<li><a href="rent-property-grid.html">Grand Mahaka</a></li>
								<li><a href="rent-property-grid.html">Lunaria Residence</a></li>
								<li><a href="rent-property-grid.html">Stephen Alexander Homes</a></li>
							</ul>
						</form>
					</div>
				</div>
			</div>	
			<!-- /Search -->
			
		</div>

		<!-- ScrollToTop -->
		<div class="progress-wrap active-progress">
			<svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
			</svg>
		</div>
		<!-- /ScrollToTop -->

		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>	
		
		<!-- Fearther JS -->
		<script src="assets/js/feather.min.js"></script>	

		<!-- Animation JS -->
		<script src="assets/js/aos.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
	
	