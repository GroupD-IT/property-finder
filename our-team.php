
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
                            <h2>Our Team</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html">Home </a></li>
                                <li>Our Team</li>
                            </ul>
                        </div>
                    </div>
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" alt="Line Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->		
		
			<!-- Meet our Team -->
			<section class="our-team-section">
				<div class="container">
					<div class="row">
					<?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `team`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
						<div class="col-lg-4 col-md-6 col-12 aos" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="600">
							<div class="our-team">
								<div class="profile-pic">
									<a href="javascript:void(0);">
										<img src="adminPanel/uploads/<?php echo $row['featureImg']?>" alt="Our Team">
									</a>
								</div>
		
								<div class="team-prof">
									<h6><a href="javascript:void(0);"><?php echo $row['name']?></a></h6>
									<span class="team-designation"><?php echo $row['designation']?></span>
		
									<div class="footer-social-links m-0">
										<ul class="nav">										
											<li>
												<a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-facebook"></i></a>
											</li>											
											<li>
												<a href="#" target="_blank"><i class="fa-brands fa-instagram"></i> </a>
											</li>											
											<li>
												<a href="#" target="_blank"><i class="fa-brands fa-behance"></i> </a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fa-brands fa-twitter"></i> </a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<?php } ?>
					</div>		
				</div>	
			</section>	
			<!-- /Meet our Team -->

<?php include 'footer.php'; ?>