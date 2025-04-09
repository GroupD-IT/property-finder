
<?php include 'navheader.php'; 
include 'config.php';

?>
		<!-- Main Wrapper -->
		<div class="main-wrapper">


            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Rent Property</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home </a></li>
                                <li>Rent Property </li>
                            </ul>
                        </div>
                    </div>
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" alt="Line Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->

            <!-- Feature Property For Rent -->
			<div class="listing-section">
				<div class="container">

                    <!-- Sort Result -->
                    <!-- <div class="showing-result-head">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="result-show">
                                    <h5>Showing result <span>06</span> of <span>125</span></h5>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="sort-result">
                                    <div class="sort-by grid-head">
                                        <div>
                                            <p>Sort By</p>
                                        </div>
                                        <div class="review-form">
                                            <select class="select">
                                                <option value="0">Default</option>
                                                <option value="1" >A-Z</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="price-range grid-head">
                                        <div>
                                            <p>Price Range</p>
                                        </div>
                                        <div class="review-form">
                                            <select class="select">
                                                <option>Low to High</option>
                                                <option>High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid-list-view">
                                        <ul>
                                            <li><a href="rent-property-grid.html" class="active"><i class="bx bx-grid"></i></a></li>
                                            <li><a href="rent-property-list.html"><i class="bx bx-list-ul"></i></a></li>
                                            <li><a href="rent-grid-map.html"><i class="bx bxs-map"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /Sort Result -->

                    <div class="feature-property-sec for-rent for-rent p-0 bg-transparent">
                        <div class="row">

                        <?php
			$sql = "SELECT * FROM `property` ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>

                            <!-- Rent grid -->
                            <div class="col-lg-4 col-md-6">
                                <div class="product-custom">
                                    <div class="profile-widget">
                                        <div class="doc-img">
                                            <a href="rent-details.php?id=<?php echo $row['id']; ?>" class="property-img">
                                                <img class="img-fluid" alt="Property Image" style=" height: 300px;" src="adminPanel/uploads/<?php echo $row['featureImg']; ?>">
                                            </a>
                                            <!-- <div class="product-amount">
                                                <h5><span>$</span>/ Month</h5>
                                            </div> -->
                                            <div class="featured">
                                                <span><?php echo $row['category']; ?></span>
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
                                                <a href="rent-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a> 
                                            </h3>
                                            <p><i class="feather-map-pin"></i> <?php echo $row['address']; ?></p>
                                            <ul class="d-flex details">
                                                <li>
                                                    <img src="assets/img/icons/bed-icon.svg" alt="bed-icon" >
                                                    <?php echo $row['beds']; ?> bedrooms
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                    <?php echo $row['baths']; ?> Baths
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                    <?php echo $row['area']; ?> Sqft
                                                </li>
                                            </ul>
                                            <ul class="property-category d-flex justify-content-between align-items-center">
                                                <!-- <li class="user-info">
                                                    <a href="agent-grid.html"><img src="assets/img/profiles/avatar-07.jpg" class="img-fluid avatar" alt="User"></a>
                                                    <div class="user-name">
                                                        <a href="agent-grid.html">Pittman</a>
                                                        <p>Cambridge</p>
                                                    </div>													
                                                </li> -->
                                                
                                            </ul>
                                        </div>
                                    </div>		
                                </div>
                            </div>
                            <!-- /Rent grid -->

                            <?php }}?>

                        </div>
					</div>
				</div>
			</div>
			<!-- /Feature Property For Rent -->

<?php include 'footer.php'; ?>