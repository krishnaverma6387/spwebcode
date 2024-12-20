
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Beautician Consultation</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			#mobile_view{
			display:none;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			#mobile_view{
			display: block;
			}
			#desktop_view{
			display:none;
			}
			.fontdata{
			  font-size: 20px;
			}
			
			}
			
		</style>
		
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Student Discount </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content contact-content" >
			<div class="container">
				<div class="row">
					
					
					<div class="col-sm-6" id="mobile_view" > 
						<img src="http://uptownee101.com/discount/studs.jpg" class="img-fluid">	
					</div>	
					
					<div class="col-sm-12 text-center">
						<h1 class="font-weight-bold fontdata">Get extra 10% off for student</h1>
						<p>Here is what you need to do</p>
					</div>
					
					<div class="col-sm-3">
						<center><i class="bi bi-pencil-square fa-4x"></i>
							<p class="font-weight-bold">1. Fill up the form</p>	
						</center>
					</div>  
					<div class="col-sm-3">
						<center><i class="bi bi-cloud-upload fa-4x"></i>
							<p class="font-weight-bold">2. Upload your College ID photo</p>	
						</center>
					</div>  
					<div class="col-sm-3">
						<center><i class="bi bi-envelope fa-4x"></i>
							<p class="font-weight-bold">3. Wait for the mail which includes your discount coupon</p>	
						</center>
					</div> 
					<div class="col-sm-3">
						<center><i class="bi bi-tags fa-4x"></i>
							<p class="font-weight-bold">4. Use your discount coupon at checkout<p>	
							</center>
							</div> 
						</div>
						<div class="row mt-3">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="font-weight-bold">Name</label>	
									<input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your full name" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Email ID</label>	
									<input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your email address" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Phone Number</label>	
									<input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your phonr number" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">College Name</label>	
									<input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your college name" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Upload your College ID photo</label>	
									<input type="file" name="photo" class="form-control form-control-lg">
								</div>
								<div class="form-group">
									<button class="btn btn-secondary btn-block">Register</button>
								</div>
							</div>	
							<div class="col-sm-6" id="desktop_view" > 
								<img src="http://uptownee101.com/discount/studs.jpg" class="img-fluid">	
							</div>	
						</div>
					</div>
				</section>
				
				
				
				
				
				<?php include('include/footer.php'); ?>
				<?php include('include/jsLinks.php'); ?>
				
			</body>
		</html>																																														