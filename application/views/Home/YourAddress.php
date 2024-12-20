
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Your Address</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.card{
			border-radius: 6px;
			}
			.logoimg
			{
			height: 14px;
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
						<li class="breadcrumb-item active" aria-current="page">Your Address</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 style="font-size : 22px;">Your Address</h1>  
					</div>	
					<div class="col-sm-4 ">
						<div class="card">
							<div class="card-body">
								</br>
								<div class="mt-5 mb-5">
									<a href="javascript:void(0)" data-target="#AddAddress" data-toggle="modal"><center><i class="bi bi-plus fa-3x"></i></center></a>	 
									<center><a href="javascript:void(0)" data-target="#AddAddress" data-toggle="modal" class="font-weight-bold"><h4>Add Address</h4></a></center>
								</div>
								<br>
							</div>  
						</div>	
					</div>
					<div class="col-sm-4 ">
						<div class="card">
							<div class="card-header" style="background:white">
								<span class="font-weight-bold">Default:  <img src="<?= base_url('public/images/logo/logo.png') ?>" class="img-fluid logoimg"></span>	
							</div>
							<div class="card-body">
								<b>Rahul Singh</b> </br>
								<span>22-23 bihind state bank of india <br>
									Babuganj near IT Chauraha Lucknow,up <br>
								LUCKNOW, UTTAR PRADESH 226007,</span> <br>
								<span>India</span> <br>
								<span>Phone number: 0987654321</span> <br>
								<span><a href="#">Add delivery instructions</a></span>
							</div>
							<div class="card-footer" style="border: 0px; background: none">
								<a href="#">Edit</a>  <span>|</span>	<a href="#">Remove</a>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Modal -->
		<div class="modal fade" id="AddAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-uppercase" id="exampleModalLabel">Add New Address</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Choose State <span class="text-danger">*</span></label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control form-control-lg" required>
									<option>Select</option>
								</select>
								
							</div>
							<div class="form-group">
								<label>Choose City <span class="text-danger">*</span></label>
								<select id ="state" class="form-control form-control-lg" required>
									<option selected disabled>Select</option>	
								</select>
							</div>
							<div class="form-group">
								<label>Pin Code <span class="text-danger">*</span></label> 
								<input type="number" name="pincode" class="form-control form-control-lg" placeholder="pincode">
							</div>
							<div class="form-group">
								<label>Address Line1 <span class="text-danger">*</span></label> 
								<input type="text" name="address-line1" class="form-control form-control-lg" placeholder="Address line1">
							</div>
							<div class="form-group">
								<label>Address Line2 <span class="text-danger">*</span></label> 
								<input type="text" name="address-line2" class="form-control form-control-lg"  placeholder="Address line2">
							</div>
							<div class="form-group">
								<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
								<input type="text" name="address-line2" class="form-control form-control-lg" placeholder="Full Name">
							</div>
							<div class="form-group">
								<label>Address Type<span class="text-danger">*</span></label>  <br>
								<input type="radio" name="Home" id="Home" value="Home" selected> <label for="Home">Home</label>
								<input type="radio" name="Work" id="Work"  value="Work"> <label for="Work">Work</label>
							</div>
							<div class="form-group">
								<label>Phone Number<span class="text-danger">*</span></label> 
								<input type="text" name="address-line2" class="form-control form-control-lg" placeholder="mobile number">
							</div>
							<div class="form-group">
								<input type="checkbox"  for="" id="chebox" placeholder="mobile number">
								<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
							</div>
							<div class="form-group">
								<div class="btn-group btn-block btn-group-toggle " data-toggle="buttons">
									<label class="btn btn-secondary">
										<input type="radio" name="options" class="customradio" id="option2" autocomplete="off"> <span class="font-weight-bold">SAVE</span>
									</label>&nbsp;
									<label class="btn btn-secondary">
										<input type="radio" name="options" id="option3" class="customradio" autocomplete="off"> <span class="font-weight-bold">CANCEL</span>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																								
