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
		    <section class="section contact-info-sec">
                <h4 class="text-center " >Thank you for your interest in renting Shapira Management, LLC property!</h4>
                <p class="text-center pb-5">Please let us know. Complete the maintenance request form and we will contact you shortly</p>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="insertAction.php" method="post" >     
                                <div class="card">
									<div class="card-header">
										<h>Thank you for your interest in renting Shapira Investments, LLC property!</h>
									</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Rent Property Located at</label>
                                                    <input type="text" name="location" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Beginning on*</label>
                                                    <input type="date" name="beginning" class="form-control" placeholder="Begining on">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Monthly Rate of $</label>
                                                    <input type="text" name="price" class="form-control" placeholder="$200">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Full Name*</label>
                                                    <input type="text" name="Fname" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Date of birth*</label>
                                                    <input type="date" name="DOB" class="form-control" placeholder="DOB">
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
                                                    <label>Social secuirity Number</label>
                                                    <input type="text" name="socialNo" class="form-control" placeholder="Enter Secuirity Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Driving licence number</label>
                                                    <input type="text" name="drivingLicense" class="form-control" placeholder="Enter licence Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Current Addreaa</label>
                                                    <input type="text" name="currentAddress" class="form-control" placeholder="Current Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>city/state/zipcode</label>
                                                    <input type="text" name="city" class="form-control" placeholder="city/state/zipcode">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Landlords Name and Phone Number</label>
                                                    <input type="text" name="landlordName" class="form-control" placeholder="Landlords Name and Phone Number">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Reason For moving</label>
                                                    <input type="text" name="ReasonOfMoving" class="form-control" placeholder="Reason For moving">
                                                </div>
                                            </div>		
                                        		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Current Monthly Rent</label>
                                                    <input type="text" name="currentRent" class="form-control" placeholder="Current monthly rent">
                                                </div>
                                            </div>		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Date moved In</label>
                                                    <input type="date" name="DateMovedIn" class="form-control" placeholder="Date moved In">
                                                </div>
                                            </div>		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>previous Address</label>
                                                    <input type="text" name="PreviousAddress" class="form-control" placeholder="Previous address">
                                                </div>
                                            </div>	
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>previous /state/zipcode</label>
                                                    <input type="text" name="PreviousZipcode" class="form-control" placeholder="city/state/zipcode">
                                                </div>
                                            </div>	
                                            
                                            		
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Employment Information</label>
                                                    <select name="type" class="select">
                                                        <option value="0">--Select--</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Retired">Retired</option>
                                                        <option value="unemployed">Unemployed</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>present occupation</label>
                                                    <input type="text" name="PresentOccupation" class="form-control" placeholder="Present occupation">
                                                </div>
                                            </div>	
                                            
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Employee's Name</label>
                                                    <input type="text" name="EmployeeName" class="form-control" placeholder="Employee's Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Position And salary</label>
                                                    <input type="text" name="positionSalary" class="form-control" placeholder="Position and salary">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>employee's information</label>
                                                    <input type="text" name="employeeInfo" class="form-control" placeholder="Employee's Information">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Date employed from </label>
                                                    <input type="date" name="dateEmployeFrom" class="form-control" placeholder="Date moved From">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Other Sources of Income</label>
                                                    <input type="text" name="OtherSrceOfIncome" class="form-control" placeholder="Other Income sources">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Vehicle Information*</label>
                                                    <input type="text" name="VehicleInfo" class="form-control" placeholder="Vehile Information">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>License Number</label>
                                                    <input type="text" name="LicenseNo" class="form-control" placeholder="License Number">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Monthly Payment (if any)</label>
                                                    <input type="text" name="monthly" class="form-control" placeholder="Monthly payment (if Any)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Other Vehicles</label>
                                                    <input type="text" name="otherVehicle" class="form-control" placeholder="Other vehicle">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>How did you HEar about this rental?</label>
                                                    <input type="text" name="HowknowRental" class="form-control" placeholder="How did you know?">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Who will be occupying the unit?</label>
                                                    <input type="text" name="occupyingUnit" class="form-control" placeholder="Who will occupying unit">
                                                </div>
                                            </div>



                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Have you even been Sued for non-payment for rent?</label>
                                                    <select name="suedForRent" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Have you ever been evicted, served with an eviction note or asked to move out?</label>
                                                    <select name="evictedFromRent" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Have you ever been sued for damages to a rental property?</label>
                                                    <select name="suedForDamage" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Have you ever broken a rental agreement or lease? </label>
                                                    <select name="brokeRentAgreement" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Have you ever declared bankruptcy? </label>
                                                    <select name="bankruptcy" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12"> 
                                                <div class="form-group">
                                                    <label>Do you have any pets?</label>
                                                    <select name="pets" class="select">
                                                        <option value="0">Make Selection</option>
                                                        <option value="yes">YES</option>
                                                        <option value="No">NO</option>   
                                                    </select>
                                                </div>
                                            </div>
							
                                            <div class="col-md-12"> 
                                                <div class="form-group">
                                                    <label>Please give any information that might help in evaluating our application</label>
                                                    <textarea class="form-control" name="description" rows="14" placeholder="Comments"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12"> 
                                                <div class="form-group">
                                                    <label>In case of emergency, please notify</label>
                                                    <input type="text" name="notify" class="form-control" placeholder="notify">
                                                 
                                                </div>
                                            </div>
                                        </div>		
                                        <button type="submit" name="addRentalApplication" class="btn-primary">Submit Application</button>
                                    </div>
                                </div>					
                            </form>
                        </div>
                        <!-- <div class="col-lg-6">
                            <h3>Contact Details</h3>
                            <div class="row">
								<div class="col-lg-12 d-flex">
									<div class="flex-fill">
										<div class="contact-info-details d-flex align-items-center">
											<span><img src="assets/img/icons/phone.svg" alt="Image"></span>
											<div>														
												<h4>Call Us At</h4>
												<a href="tel:+16398098393">+13016615771</a>
												
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
												<a href="#"><span class="__cf_email__" data-cfemail="ddb4b3bbb29db8a5bcb0adb1b8f3beb2b0">lcshapira@gmail.com</span></a>
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
												<p>Jl. Surabaya Jaya, No.10, Surabaya United States</p>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
							<div class="map-location">
								<h3>Find Us On</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.8862835683544!2d-73.98256668525309!3d41.93829486962529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0ee3286615b7%3A0x42bfa96cc2ce4381!2s132%20Kingston%20St%2C%20Kingston%2C%20NY%2012401%2C%20USA!5e0!3m2!1sen!2sin!4v1670922579281!5m2!1sen!2sin" height="359"></iframe>
							</div>
							
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- /Contact Info Details -->





<?php
include 'footer.php';
?>