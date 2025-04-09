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
         
            <!-- /Header -->

           

            <!-- Detail View Section -->
			<?php
                        $id = $_GET['id'];
                        
                        $sql = "SELECT * FROM `maintenanceapplication` where `id` = '$id';";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
            <section class="buy-detailview">
                <div class="container">
				<a href="adminPanel/maintenance.php" style="font-weight:bold;" class ="btn btn-info" > <- back</a>

					<!-- Details -->
                   

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
                                        <img src="uploads/<?php echo $imagePath ?>" style="height: 500px;"   alt="image">
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
                                    <img style="height: 150px;"  src="uploads/<?php echo $imagePath ?>" alt="image">
                                    </div>
                                    <?php  } ?>
                                    
										
									</div>
								</div>
							</div>


							<!-- /Slider -->

							

                </div>
            </section>

			<?php } ?>
			<!-- /Detail View Section -->

			

			<!-- Search -->
			
			<!-- /Search -->

		</div>		
		<!-- /Main Wrapper -->

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