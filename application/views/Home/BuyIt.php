
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Buy Gift Card</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.icon {
			font-size: 2rem;
			}	
			.form-control-lg {
			border-radius: 6px!important;
			}
			.slide-toggle{
			display:none!important;
			}
			.wrap-img{
			height: 60px;
			width: 70px;
			background : white;
		    margin-top: 20px;
			border: 1px solid black;
			border-radius: 5px;
			}
			.clicktext {
			position: absolute;
			margin-top: -52px;
			margin-left: 75px;
			}
			@media only screen and (max-width: 1000px) {
			#blockpoint{
			display: none;
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
						<li class="breadcrumb-item active" aria-current="page">Buy Gift Card</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container"> 
				
				<div class="row">
					<div class="col-sm-7 ">
						<form action="#">
							<div class="form-group">
								<label  style="font-weight: 800">Contact Information</label>	
								<label class="float-right">Already have an account?<a href="<?= base_url('Home/Login') ?>" class="text-info">Login</a></label>	
								<input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="checkbox" value="" name="" id="ckbbox">	
								<label for="ckbbox" >Email me with news and offers</label>
							</div>
							<label style="font-weight: 800">Billing Address</label>
							<div class="form-group">
							    <select class="form-control form-control-lg" name="region">
								 	<option value="selected disabled">Country/Region</option>
								 	<option value="Indai">India</option>
								</select>
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="First name">
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="Last name">
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="Address">
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="Apartment,Suite,etc (Optional)">
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="City">
							</div>
							<div class="form-group">
							    <select class="form-control form-control-lg" name="region">
								 	<option value="selected disabled">State</option>
								</select>
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="Pin Code">
							</div>
							<div class="form-group">
							    <input type="text" name="" class="form-control form-control-lg" placeholder="Phone">
							</div>
							<div class="form-group">
							    <input type="checkbox" name="" id="info"> <label for="info">Save this information for next time</label>
								<p>By clicking Continue to shipping, you agree to our <a href="<?= base_url("Home/TermAndCondition") ?>" class="text-info">Terms & Conditions</a></p>
							</div>
							<div class="form-group">
							    <p class="text-right"><button class="btn btn-secondary">Continue to payment</button></p>
							</div>
						</form>
					</div>
					<div class="col-sm-5 bg-light" id="blockpoint">
						<div class="row">
							<div class="col-sm-6">
								<div class="wrap-img">
									<img src="<?= base_url('public/images/banners/banner_1.jpg'); ?>" style="height: 60px;" class="img-fluid">
								</div>
								<span class="clicktext">SlickPattern GiftCard</span>
							</div>
							<div class="col-sm-6">
								<div style="margin-top: 35px;">
									<span class="text-right">Rs 5000</span>	
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<input type="text" name="" placeholder="Discount code" class="form-control form-control-lg" style="width:70%; display: inline">	<button class="btn btn-secondary">Apply</button>
						</div>
						<hr>
						<div class="form-group">
							<span>Total</span>	
							<span class="float-right"><h2>Rs.5000</h2></span>	
						</div>
					</div>	
				</div>
			</div>
			
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																				