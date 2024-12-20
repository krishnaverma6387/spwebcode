
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Shipping Address</title>
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
			@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
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
						<li class="breadcrumb-item active" aria-current="page">Shipping Address</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content shipping-content">
			<div class="container">
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							Shipping Address
						</h1>
					</div>
				</div>
				<div class="row">
					
					<div class="col-12 col-lg-3">
								<ul class="list-group">
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Profile") ?>">
								<i class="bi bi-person"></i>
								Profile          
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Wishlist") ?>">
								<i class="bi bi-heart"></i>
								Wishlist                   
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Order") ?>">
								<i class="bi bi-cart3"></i>
								Orders                   
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/ShippingAddress") ?>">
								<i class="bi bi-geo-alt"></i>
								Shipping Address                           
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="#">
								<i class="bi bi-power"></i>
								Logout                               
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/ChangePassword") ?>">
								<i class="bi bi-unlock"></i>
								Change Password                            
							</a>
						</li> 
					</ul>
					</div>
					<div class="col-12 col-lg-9 ">
						
						
						<table class="table">
							<thead>
								<tr class="d-flex">
									<th class="col-12 col-md-8">DEFAULT ADDRESS</th>
									<th class="col-12 col-md-4">ACTION</th>
								</tr>
							</thead>
							<tbody>
								<tr class="d-flex">
									
									<td class="col-12 col-md-8">
										
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
											<label class="form-check-label" for="exampleRadios1">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</label>
											
										</div>
									</td>
									
									<td class=" col-12 col-md-4">
										<ul  class="controls">
											<li><a href="#"> <i class="fas fa-pen"></i> Edit</a></li>
											<li><a href="#"> <i class="fas fa-trash-alt"></i> Remove</a></li>
										</ul>
										
									</td>
								</tr>
								
								
							</tbody>
						</table>
						
						
						<div class="add-address">
							<form action="/" name="general-form">
								<h4 >Personal Information</h4>
								
								<div class="form-row">
									<div class="from-group col-md-6 mb-4">
										<div class="input-group ">
											
											<input type="text" name="fullname" class="form-control form-control-lg" id="inlineFormInputGroup0" placeholder="Name">
										</div>
									</div>
									<div class="from-group col-md-6 mb-4">
										<div class="input-group ">
											
											<input type="text" name="mobile" class="form-control form-control-lg" id="inlineFormInputGroup1" placeholder="10-digit mobile number">
										</div>
									</div>
									
									
								</div>
								<div class="form-row">
									<div class="from-group col-md-6 mb-4">
										<div class="input-group ">
											
											<input type="text" name="pincode" class="form-control form-control-lg" id="inlineFormInputGroup2" placeholder="Pincode">
										</div>
									</div>
									<div class="from-group col-md-6 mb-4">
										<div class="input-group ">
											
											<input type="text" name="locality" class="form-control form-control-lg" id="inlineFormInputGroup3" placeholder="locality">
										</div>
									</div>
								</div>
								
								<div class="form-row">
									<div class="from-group col-md-6 mb-4">
										<div class="input-group"  >
											
											<input type="text" name="postcode" class="form-control form-control-lg" id="inlineFormInputGroup7" placeholder="City"> 
										</div>
									</div>
									
									<div class="from-group col-md-6 mb-4">
										<div class="input-group select-control">
											
											<select class="form-control form-control-lg" name="SelectStateName" id="inlineFormInputGroup5">
												<option selected>-select state-</option>
												<option value="1">Alaska</option>
												<option value="2">New York</option>
												<option value="3">Taxes</option>
											</select> 
										</div>
									</div>
									
									
								</div>
								<div class="form-row">
									<div class="from-group col-md-6 mb-4">
										<div class="input-group">
											
											<input type="text" name="text" class="form-control form-control-lg" id="inlineFormInputGroup8" placeholder="Landmark"> 
										</div>
									</div>
									<div class="from-group col-md-6 mb-4">
										<div class="input-group">
											
											<input type="text" name="number" class="form-control form-control-lg" id="inlineFormInputGroup8" placeholder="alt-phone number"> 
										</div>
									</div>
									
								</div>
								<div class="form-row">
									<div class="from-group col-md-6 mb-4">
									<label>Address Type</label> 
										<div class="input-group">
											<span class="mt-1 mr-2"><input type="radio" id="home" name="fav_language" value="home"></span>
											<label for="home">Home</label>&ensp;&ensp;
											<span class="mt-1 mr-2"><input type="radio" id="Office" name="fav_language" value="Office"></span>
											<label for="Office">Work</label>
										</div>
									</div>
									
								</div>
								
								<button type="submit" class="btn btn-secondary swipe-to-top">Add Address</button>
							</form> 
						</div>
						<!-- ............the end..... -->
					</div>
				</div>
			</div>
		</section>
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						