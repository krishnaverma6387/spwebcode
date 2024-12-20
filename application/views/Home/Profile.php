<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Profile</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" integrity="sha512-CJ6VRGlIRSV07FmulP+EcCkzFxoJKQuECGbXNjMMkqu7v3QYj37Cklva0Q0D/23zGwjdvoM4Oy+fIIKhcQPZ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
			.icon {
			font-size: 2rem;
			}
			.slide-toggle{
			display:none!important;
			}
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: #FF1493 !important;
			}
			.btn-secondary{
			background-color:#8340A1;
			}
			.input-group {
			flex-direction: column;
			}
			label {
			display: inline-block;
			margin-bottom: 0rem;
			font-size: 12px;
			font-weight: 600;
			}
			body{
			background-color: #f1f3f6;
			}
		</style>
	</head>
    <body>  
		<?php include('include/header.php') ?>
		<section class="pro-content profile-content py-1">
            <div class="container-fluid px-1">
				<div class="row m-0 p-3 d-none">
					<div class="pro-heading-title py-1 px-0">
						<h1>
							Profile 
						</h1>
					</div>
				</div>
				<div class="row m-0 mt-3">
					<div class="col-12 col-lg-3 pb-3">
						<div class="row">
							<div class="col-12">
								<div class="card mb-3">
									<div class="card-body p-2 d-flex">
										<?php
											if(!empty($user->image))
											{
											?>
											<img src="<?= base_url('uploads/profile_pic/').$user->image?>" alt= "avatar" height="60" width="60" class="rounded-circle">
											<?php
											}
											else
											{
											?>
											<img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="avatar" height="60" width="60">
											<?php	
											}
										?>
										<div class="media-body ml-2" style="margin:auto;">
											<h5 class="mt-0" style="font-family:unset;"><?php if(!empty($user->name)){echo $user->name;} ?></h5> 
										</div>
									</div>
								</div>
							</div>
							<div class=" col-12">
								<ul class="list-group">
									<li class="list-group-item active">
										<a class="nav-link " href="<?= base_url("Home/Profile") ?>">
											<i class="bi bi-person"></i>
											My Profile          
										</a>
									</li>
									<li class="list-group-item">
										<a class="nav-link" href="<?= base_url("Home/Wishlist") ?>">
											<i class="bi bi-heart"></i>
											My Wishlist                   
										</a>
									</li>
									<li class="list-group-item">
										<a class="nav-link" href="<?= base_url("Home/Order") ?>">
											<i class="bi bi-cart3"></i>
											My Orders                   
										</a>
									</li>
									<?php if($this->sitepermission->wallet_management){?>
										<li class="list-group-item">
											<a class="nav-link" href="<?= base_url("Home/SlickWallet") ?>"> 
												<i class="bi bi-wallet"></i>
												My Wallet                           
											</a>
										</li>
									<?php } ?>
									<?php 
										if($this->permission=='true'){ 
											if($this->sitepermission->refer_friend_web){
											?>
											<li class="list-group-item">
												<a class="nav-link" href="<?= base_url("Home/ShareAndEarn") ?>"> 
													<i class="bi bi-wallet"></i>
													Refer A Friend                           
												</a>
											</li>
											<?php } 
											if($this->sitepermission->refer_friend_app){
											?>
											<li class="list-group-item">
												<a class="nav-link" href="<?= base_url("Home/ShareAndEarn/App") ?>"> 
													<i class="bi bi-wallet"></i>
													Refer App With Friend                           
												</a>
											</li>
										<?php } } ?>
										<?php 
											if($this->permission=='true'){ 
												$userid=$this->userData->id;
												$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
												if($subscriber->num_rows()>0){
												?>
												<li class="list-group-item">
													<a class="nav-link" href="<?= base_url("Home/BeauticianConsultation") ?>"> 
														<i class="bi bi-chat"></i>
														Beauty Advice                           
													</a>
												</li>
											<?php } }?>
											<li class="list-group-item">
												<a class="nav-link" href="<?= base_url("Home/Logout") ?>">
													<i class="bi bi-power"></i>
													Logout                               
												</a>
											</li>
											<!--<li class="list-group-item">
												<a class="nav-link" href="change-password.html">
												<i class="bi bi-unlock"></i>
												Change Password                            
												</a>
											</li>-->
								</ul> 
							</div>
						</div>
						
					</div>  
					<div class="col-12 col-lg-9">
						<div class="row m-0"> 
							<div class="col-12 col-md-12 bg-white"> 
								<h5 class="text-uppercase mt-1">Update Profile</h5>
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateUserProfile'); ?>" method="post" class="mb-3" id="updateForm3">
									<div class="from-group row pt-3">
										<div class="input-group col-sm-6 col-12 mb-3">
											<label>Name</label>
											<input type="text" value="<?php if(!empty($user->name)){echo $user->name;} ?>" name="name" class="form-control form-control-lg" id="inlineFormInputGroup0" placeholder="Enter Your Full Name">
										</div>
										<div class="input-group col-sm-6 col-12 mb-3">
											<label>Email</label>
											<input type="email" value="<?php if(!empty($user->email)){echo $user->email;} ?>" name="email" class="form-control form-control-lg" id="inlineFormInputGroup2" placeholder="Enter Your Email">
										</div>
									</div>
									
									<div class="from-group row">
										<div class="input-group col-sm-6 col-12 mb-3">
											<label>Gender</label>
											<select name="gender" class="form-control form-control-lg" id="inlineFormInputGroup3" style="font-size:14px;">
												<option class="desabled">Gender</option>
												<option <?php if(!empty($user->gender)){ if($user->gender == 'male'){ echo 'selected';}} ?> value="male">Male</option>
												<option <?php if(!empty($user->gender)){ if($user->gender == 'female'){ echo 'selected';}} ?> value="female">Female</option>
											</select>
										</div>
										<div class="input-group col-sm-6 col-12 mb-3">
											<label>Date Of Birth</label>
											<input type="date" name="dob" value="<?php if(!empty($user->dob)){echo $user->dob;} ?>" class="form-control form-control-lg text-lowercase" onchange="calculateAge(this.value)" placeholder="date of birth" id="inlineFormInputGroup4">
										</div>
									</div>
									<div class="from-group row">
										<div class="input-group col-sm-6 col-12 mb-3">
											<label>Age</label/>
												<input type="text"  readonly name="age" value="<?= (date('Y')-date('Y',strtotime($user->dob))).' Year'?>"  class="form-control form-control-lg" placeholder="Age" id="age" style="font-size:16px" >
											</div>
											<div class="input-group col-sm-6 col-12 mb-3"> 
												<label>Profile</label/>
													<input type="file" name="icon"  class="form-control form-control-lg"  style="line-height:1;border: 1px solid #ddd;" placeholder="upload Photo" id="inlineFormInputGroup4" />
												</div>
											</div>
											<button type="submit" class="btn btn-secondary swipe-to-top" id="updateBtn3"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="updateSpin3" style="display:none;"></i></button>	
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				
				
				<?php include('include/footer.php'); ?>
				<?php include('include/jsLinks.php'); ?>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
				
				<script>
					$('#updateForm3').on('submit', function(e) {
						e.preventDefault();
						var data = new FormData(this);
						var formAction = $(this);
						var btnAction = $('#updateBtn3');
						var spinAction = $('#updateSpin3');
						if ($(formAction).parsley().isValid() == true) {
							$.ajax({
								type: 'POST',
								url: $(formAction).attr('action'),
								data: data,
								cache: false,
								contentType: false,
								processData: false,
								beforeSend: function() {
									$(btnAction).attr("disabled", true);
									$(spinAction).show();
								},
								success: function(response) {
									console.log(response);
									var response = JSON.parse(response);
									$(btnAction).removeAttr("disabled");
									$(spinAction).hide();
									if (response[0].res == 'success') {
										$('.notifyjs-wrapper').remove();
										$.notify("" + response[0].msg + "", "success");
										if (response[0].redirect) {
											window.setTimeout(function() {
												window.location.href = response[0].redirect;
											}, 1000);
											} else {
											window.setTimeout(function() {
												window.location.reload();
											}, 1000);
										}
										} else if (response[0].res == 'error') {
										$('.notifyjs-wrapper').remove();
										$.notify("" + response[0].msg + "", "error");
									}
								},
								error: function() {
									// window.location.reload();
								}
							});
						}
					});
				</script>
				
				
				<script>
					function calculateAge(value)
					{
						var choosen_date = value;
						var arr_val = choosen_date.split("-");
						var year = arr_val['0'];
						console.log(year);
						
						var current_date = "<?= date('Y') ?>";
						var get_age = parseInt((current_date - year)) + " Year";
						console.log(get_age);
						$("#age").val(get_age);
						
						
					}
				</script>
				<?php
					if ($this->session->flashdata('res') == 'success')
					{
						echo '<script>$.notify("' . $this->session->flashdata('msg') . '","success")</script>';
					}
					else if ($this->session->flashdata('res') == 'error')
					{
						echo '<script>$.notify("' . $this->session->flashdata('msg') . '","error")</script>';
					}
				?>
				
				<?php
					unset($_SESSION['res']);
					unset($_SESSION['msg']);
				?>
			</body>
		</html>																																																																																																																																				