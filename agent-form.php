<?php include 'config.php';

include 'navheader.php'
?>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<div class="container">
				<!-- Header -->
			
				<!-- /Header -->

				<div class="login-wrapper">
					<div class="loginbox">						
						<div class="login-auth">
							<div class="login-auth-wrap">						
								<h1><span class="d-block">Apply As an Agent</span></h1>		

								<form action="insertAction.php" method="post" enctype="multipart/form-data">
								<div class="card-body">
                                <div class="row">
									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">First Name <span>*</span></label>
										<input type="text" name="fname" class="form-control"  placeholder="Enter Name">
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">Last Name <span>*</span></label>
										<input type="text" name="lname" class="form-control"  placeholder="Enter Name">
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">Email <span>*</span></label>
										<input type="email" name="email" class="form-control"  placeholder="Enter Email">
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">Phone <span>*</span></label>
										<input type="phone" name="phone" class="form-control"  placeholder="Enter Name">
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label"> Resume*<span>*</span></label>
										<input type="file" name="cv" class="form-control" >
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">Date of birth <span>*</span></label>
										<input type="date" name="DOB" class="form-control"  placeholder="Enter Name">
									</div>
									</div>

									<div class=" col-lg-6 col-12" >
									<div class="form-group">
										<label class="form-label">Previous job <span>*</span></label>
										<input type="text" name="previousJob" class="form-control"  placeholder="Enter Name">
									</div>
									</div>

									

									

										</div>
								</div>
								<button class="btn btn-outline-light w-100 btn-size" type="submit" name="agentResume" >Submit</button>
								</form>							
							</div>
						</div>
					</div>
				</div>	
			</div>		
		</div>
		
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>

</html>