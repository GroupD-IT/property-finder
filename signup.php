<?php 

	include 'config.php';
	include 'navheader.php';

?>

<div class="login-wrapper">
					<div class="loginbox">						
						<div class="login-auth">
							<div class="login-auth-wrap">						
								<h1>Signup! <span class="d-block"> New Account.</span></h1>							
								<form action="https://dreamsestate.dreamstechnologies.com/html/index.html">
									<div class="form-group">
										<label class="form-label">Name <span>*</span></label>
										<input type="text" class="form-control"  placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label class="form-label">Email <span>*</span></label>
										<input type="email" class="form-control"  placeholder="Enter Email">
									</div>
									<div class="form-group">
										<label class="form-label">Password <span>*</span></label>
										<div class="pass-group">
											<input type="password" class="form-control pass-input" placeholder="Enter Password">
											<span class="fas fa-eye toggle-password"></span>
										</div>
									</div>		
									<div class="form-group">
										<label class="form-label">Confirm Password <span>*</span></label>
										<div class="pass-group">
											<input type="password" class="form-control" placeholder="Enter Confirm Password">
										</div>
									</div>		
									<div class="form-group">
										<label class="custom_check mt-0 mb-0"><span>Remember me</span>
											<input type="checkbox" name="remeber">
											<span class="checkmark"></span>
										</label>
									</div>
									<a href="login.html" class="btn btn-outline-light w-100 btn-size">Sign Up</a>
									<div class="login-or">
										<span class="span-or-log">Or, Sign up with your email</span>
									</div>
									<!-- Social Login -->
									<div class="social-login">
										<a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Sign up with Google</a>
									</div>
									<div class="social-login">
										<a href="#" class="mb-0 d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Sign up  with Facebook</a>
									</div>
									<!-- /Social Login -->
									<div class="text-center dont-have">Already have login ? <a href="login.html">Sign In</a></div>
								</form>							
							</div>
						</div>
					</div>
				</div>	
			</div>		
		</div>
		