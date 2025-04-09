<?php
include 'config.php';
include 'navheader.php';

$id = $_GET['id'];

if (isset($_POST['addRentalenquiry'])) {


// Escape strings
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$nameOfProperty = mysqli_real_escape_string($conn, $_POST['nameOfProperty']);
$bedrooms = mysqli_real_escape_string($conn, $_POST['bedrooms']);
$bathrooms = mysqli_real_escape_string($conn, $_POST['bathrooms']);
$area = mysqli_real_escape_string($conn, $_POST['area']);

$description = mysqli_real_escape_string($conn, $_POST['description']);


    $sql = "INSERT INTO `rentapplication` (`name`, `email`, `phone`, `address`, `description`, `nameOfProperty`, `bedrooms`, `bathrooms`, `area`) VALUES 
    ('$name', '$email', '$phone', '$address', '$description', '$nameOfProperty', '$bedrooms', '$bathrooms', '$area')";
    mysqli_query($conn,$sql);
header("location: index.php");

}

?>

<div class="main-wrapper">	
			 <!-- Breadcrumb -->
			 <div class="breadcrumb">
                <div class="container">
                    <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Rental Application</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home </a></li>
                                <li>Rent Application</li>
                            </ul>
                        </div>
                    </div>
                    <div class="breadcrumb-border-img">
                        <img src="assets/img/bg/line-bg.png" alt="Line Image">
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->		


			<!-- Contact us -->
		    <section class="section contact-section">
                <div class="container">
                    <div class="contact-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 d-flex"> 
                                        <div class="card">
                                            <div class="card-body contact-info flex-fill">
                                                <h3>We are here to assist you.												</h3>
                                                <p>If you have a rental home(s) and would like more information about our services, if you are looking for a place to rent, or if you are a current homeowner client or tenant, give us a call or complete the form below, we would love to hear from you.</p>
                                                <!-- <a href="javascript:void(0);" class="btn-primary d-inline-block">Contact Sales</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 d-flex"> 
                                        <div class="card">
                                            <div class="card-body contact-info flex-fill">
                                                <h3>Product & Account Support</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante,</p>
                                                <a href="faq.html" class="btn-primary d-inline-block">Go to FAQ</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/contact.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Contact us -->




            <!-- Contact Info Details -->
            <?php

			$sql = "SELECT * FROM `property` WHERE `id` = $id ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
		    <section class="section contact-info-sec">
                <h4 class="text-center " >Thank you for your interest in renting True Estates!</h4>
                <p class="text-center pb-5">Please let us know. Complete the maintenance request form and we will contact you shortly</p>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="rental_booking.php">  
                                <input type="hidden" name="id" value="<?php echo $row['id']?>" id="">   
                                <div class="card">
									<div class="card-header">
										<h>Thank you for your interest in renting True Estates!</h>
									</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Rent Details</h3>
                                        <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Name of property</label>
                                                    <input type="text" value="<?php echo $row['title']?>" name="nameOfProperty" class="form-control" placeholder="NAme of property">
                                                </div>
                                            </div>

                                           
                                        

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Bedrooms </label>
                                                    <input type="text" value="<?php echo $row['beds']?> bedrooms" name="bedrooms" class="form-control" placeholder="Bedroom">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Bathroom </label>
                                                    <input type="text" value="<?php echo $row['baths']?> Bathrooms" name="bathrooms" class="form-control" placeholder="BAthroom">
                                                </div>
                                            </div>

                                        
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Area sq/ft</label>
                                                    <input type="text" value="<?php echo $row['area']?>" name="area" class="form-control" placeholder="Area SQ ft">
                                                </div>
                                            </div>




                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Rent Property Located at</label>
                                                    <input type="text" value="<?php echo $row['address']?>" name="location" class="form-control" placeholder="property">
                                                </div>
                                            </div>

                                            <h3>Customer Details</h3>



                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter your Full Name">
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                <label>Phone</label>
                                                <input type="numer" name="phone" class="form-control" placeholder="44 73727535453">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Current Address</label>
                                                    <input type="text" name="address" class="form-control" placeholder="Current Address">
                                                </div>
                                            </div>
                                            
                                            
                                            		
                                            

                                            

                                            



                                            
							
                                            <div class="col-md-12"> 
                                                <div class="form-group">
                                                    <label>Please give any information that might help in evaluating our application</label>
                                                    <textarea class="form-control" name="description" rows="14" placeholder="Comments"></textarea>
                                                </div>
                                            </div>

                                            
                                        </div>		
                                        <button type="submit" name="addRentalenquiry" class="btn-primary">Submit Application</button>
                                    </div>
                                </div>					
                            </form>
                        </div>
                       
                    </div>
                </div>
            </section>
            <?php }} ?>
            <!-- /Contact Info Details -->





<?php
include 'footer.php';
?>