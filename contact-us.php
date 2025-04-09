

<?php
 include 'navheader.php';
 include 'config.php';

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';
 if (isset($_POST['addEnquiry'])) {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    


     // Recipient's email address
     $to = "alviu027@gmail.com";

     // PHPMailer setup
     $mail = new PHPMailer(true);
 
     try {
         // Server settings
         $mail->isSMTP();
         $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
         $mail->SMTPAuth   = true;
         $mail->Username   = 'alviu027@gmail.com'; // Your SMTP username
         $mail->Password   = 'bric qepf rcxu uxrm'; // Your SMTP password
         $mail->SMTPSecure = 'tls';
         $mail->Port       = 587;
 
         // Recipient and sender details
         $mail->setFrom($email, $fname);
         $mail->addAddress($to);
         
         // Content
         $mail->isHTML(true);  // Set to true if sending HTML content
         $mail->Subject = $subject;
         $mail->Body    = "First Name: $fname <br> Last Name: $lname <br> Sender Email: $email <br> Phone: $phone  <br> Address: $address <br> Zip: $zipcode <br> Subject : $subject <br> Message: $description";
 
         // Send the email
         $mail->send();
         
         // You can customize the response message
         session_start();
         $_SESSION['sent'] = true;
     } catch (Exception $e) {
         // Handle errors
         echo 'error';
     }



    
    $sql = "INSERT INTO `contact` (`fname`, `lname`, `phone`, `email`, `address`, `zipcode`,  `subject`, `description`)
            VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$zipcode',  '$subject', '$description')";
    mysqli_query($conn, $sql);
    



}


?>
	
		<div class="main-wrapper">	
			 <!-- Breadcrumb -->
			 <div class="breadcrumb">
                <div class="container">
                    <div class="bread-crumb-head">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html">Home </a></li>
                                <li>Contact Us</li>
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
                                               
                                            </div>
                                        </div>
                                    </div>
                                   
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
		    <section class="section contact-info-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <form  method="post" action="contact-us.php" >     
                                <div class="card">
									<div class="card-header">
										<h3>Get In Touch</h3>
									</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="fname" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lname" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Zip Code</label>
                                                    <input type="number" name="zipcode" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>		
                                           
                                           
                                            <div class="col-lg-12 col-12"> 
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                                                </div>
                                            </div>							
                                            <div class="col-md-12"> 
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" name="description" rows="14" placeholder="Comments"></textarea>
                                                </div>
                                            </div>
                                        </div>		
                                        <button type="submit" name="addEnquiry" class="btn-primary">Submit Enquiry</button>
                                    </div>
                                </div>					
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h3>Contact Details</h3>
                            <div class="row">
								<div class="col-lg-12 d-flex">
									<div class="flex-fill">
										<div class="contact-info-details d-flex align-items-center">
											<span><img src="assets/img/icons/phone.svg" alt="Image"></span>
											<div>														
												<h4>Call Us At</h4>
												<a href="tel:+447376481664">+447376481664</a>
												
											</div>
										</div>
                                    </div>
                                </div>
								<div class="col-lg-12 d-flex">
                                    <div class="flex-fill">
										<div class="contact-info-details d-flex align-items-center">
											<span><img src="assets/img/icons/mail.svg" alt="Image"></span>
											<div>														
												<h4>Email Us</h4>
												<a href="mailto:trueestateapira@gmail.com">trueesttate@gmail.com</a>
											</div>
										</div>
                                    </div>
                                </div>
								<div class="col-lg-12 d-flex">
                                    <div class="flex-fill">
										<div class="contact-info-details d-flex align-items-center">
											<span><img src="assets/img/icons/map-pin.svg" alt="Image"></span>
											<div>														
												<h4>Location</h4>
												<p>16021 Industrial Drive bay Aberdeen</p>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
							<div class="map-location">
								<h3>Find Us On</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.0595846885676!2d-2.1404399239090495!3d57.11894508594939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488410483d2f0941%3A0x5d8969688e77366a!2sRobert%20Gordon%20University!5e0!3m2!1sen!2suk!4v1742292354761!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Contact Info Details -->


            <!-- FAQ  -->
			<section class="faq-section bg-white section">
                
				<div class="container">
                <h2 class="mb-3" >Frequently Asked Questions</h2>
					<div class="faq-info">
						<div class="faq-card bg-white aos" data-aos="fade-down">
							<h4 class="faq-title">
								<a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">1. Are the utilities the responsibility of the tenant?</a>
							</h4>
							<div id="faqOne" class="card-collapse collapse">								
								<div class="faq-info">
									<p>Again, it depends on what is written in the lease, but typically, the tenant pays the utilities. If this is the case, then we advise that you call all necessary utility companies a week in advance in order to have the utilities turned on or transferred into your name. A list of local utility vendors should be given to you upon the signing of the lease.</p>
								</div>
							</div>
						</div>	
						<div class="faq-card bg-white aos" data-aos="fade-down">
							<h4 class="faq-title">
								<a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">2. Is there an application fee? How much? Where do I turn in an application?</a>
							</h4>
							<div id="faqTwo" class="card-collapse collapse">							
								<div class="faq-info">
									<p>Yes, we require an application fee of $60 per applicant. Anyone 18 or older that will be a full-time resident of the property needs to fill out an application. We check your credit report, criminal background, your rental/eviction history, and we verify income/employment. The screening process usually takes 1-2 business days. You can fax, email, mail, or drop off your application, and you can also apply online (go to the property listing and click the “apply now” button). Your application fee needs to be paid before we start the screening process.</p>
								</div>
							</div>
						</div>
						<div class="faq-card bg-white aos" data-aos="fade-down">
							<h4 class="faq-title">
								<a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">3. When I move out, what do I need to do to receive my full security deposit back?</a>
							</h4>
							<div id="faqThree" class="card-collapse collapse">							
								<div class="faq-info">
									<p>We advise that you remove all personal belongings and clean the house thoroughly including floors, walls, trim, windows, bathrooms, counters, cabinets, appliances. All carpets should be shampooed. Gutters should be cleaned out. The roof should be free of leaves and debris. If you are responsible for lawn maintenance, then the grass and hedges need to be trimmed to a reasonable height and all beds should be free of weeds. We ask that all damages be repaired by a licensed contractor that is approved by Shapira Management, LLC. You should be able to receive your security deposit back within 45 days from the day of your lease end term date.</p>
								</div>
							</div>
						</div>	
						<div class="faq-card bg-white aos" data-aos="fade-down">
							<h4 class="faq-title">
								<a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">4. When is your staff available for showings/inspections?</a>
							</h4>
							<div id="faqFour" class="card-collapse collapse">							
								<div class="faq-info">
									<p>Again, it depends on what is written in the lease.  Typically, the tenant will pay an additional security deposit. We accept pets on a case-by-case situation. Shapira Management may request to be shown pictures of all pets that are being requested to live inside the home. </p>
								</div>
							</div>
						</div>	
						<div class="faq-card bg-white aos" data-aos="fade-down">
							<h4 class="faq-title">
								<a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">5. Who do I call for maintenance problems? What maintenance issues is the landlord responsible for?</a>
							</h4>
							<div id="faqFive" class="card-collapse collapse">							
								<div class="faq-info">
									<p>It depends on how the lease reads, but most residential leases dictate that the landlord is responsible for the roof, electrical, plumbing, heating/cooling and appliances. When in doubt, you are welcome to call our office to ask. Unless directed otherwise, you should call your property manager for all maintenance issues.</p>
								</div>
							</div>
						</div>	
															
					</div>		
				</div>	
			</section>	
			<!-- /FAQ -->	
<?php include 'footer.php'; ?>