
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
			
			.form{
			width:60%;
			}
			.form-group{
			margin-bottom:0.5rem;
			}
			label {
			display: inline-block;
			margin-bottom: 0rem;
			color: black;
			font-size: 14px;
			}
			@media only screen and (max-width:768px){
			.form{
			width:90%;
			}
			}
		</style>
		
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Beautician Consultation</li>
					</ol>
				</div>
			</nav>
		</div> 
		<div class="container-fluid my-3 mb-5">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?= base_url('public/images/beautybg.jpg')?>" class="img-fluid">
				</div>	
				<div class="col-sm-6 d-flex flex-column align-items-center" style="font-family: 'Inter', sans-serif;">
					<?php 
						$cartid=$this->uri->segment(2);
						$cartDetails=$this->db->get_where('tbl_cart',['id'=>$cartid])->row();
						if(!empty($cartDetails)){
							$vid=$cartDetails->variant_id;
							$pid=$cartDetails->product_id;
						?>
						<p class="subheading text-uppercase text-center mb-0">best discuss about your fashion style</p>
						<small class="text-center">You can frankly talking with ours beauty consultant</small>
						<div class="form mt-3" >
							
							<form action="<?= base_url('BeauticianConsultation/Add')?>" id="addForm2">      
								<div class="form-group">
									<?php
										$uid =  $this->userData->id;
										$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
									?>
									<input type="hidden" class="form-control" value="<?= $cartid?>" name="cart_id">
									<input type="hidden" class="form-control" value="<?= $pid?>" name="product_id">
									<input type="hidden" class="form-control" value="<?= $vid?>" name="variant_id">
								</div> 
								<div class="form-group"> 
									<label for="fullname">Full Name</label>
									<input type="text" value="<?=$uDetails->name?>" class="form-control" id="fullname" placeholder="Full Name" name="full_name" required data-parsley-required-message="Please enter full name">
								</div> 
								<div class="form-group">
									<label for="exampleInputEmail1">Email Id</label>
									<input type="email" value="<?=$uDetails->email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email_id" required data-parsley-required-message="Please enter email id">
								</div> 
								<div class="form-group">
									<label for="mobilenumber">Mobile Number</label>
									<input type="text" value="<?=$uDetails->mobile?>" class="form-control" id="mobilenumber" placeholder="Mobile Number" name="mobile_number" required data-parsley-required-message="Please enter mobile number">
								</div>
								<div class="form-group">
									<label for="sdate">Schedule Date</label>
									<input type="date" class="form-control" id="sdate" placeholder="Schedule Date" name="schedule_date" required data-parsley-required-message="Please select schedule date">
									<label for="stime">Schedule Time</label>
									<input type="time" class="form-control" id="stime" placeholder="Schedule Time" name="schedule_time" required data-parsley-required-message="Please select schedule time">
								</div> 
								<div class="form-group">
									<strong>Note:</strong><small style="font-size:14px;">Admin can approve or reschedule this call and inform you accordingly.You can check the updates under module name.</small>
								</div>
								<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
							</form>
						</div>
						<?php }else{?> 
						<img src="<?= base_url('public/images/norecordfound.png')?>" alt="No record found!" width="350">
					<?php } ?>
				</div>
				
			</div>
		</div>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																																						