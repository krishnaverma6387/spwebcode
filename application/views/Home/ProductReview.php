
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Review</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		
		<style>
			.rate {
			float: left;
			height: 30px;
			}
			.rate:not(:checked) > input {
			// position:absolute;
			// top:-9999px; 
			}
			.rate:not(:checked) > label {
			float:right;
			width:1em;
			overflow:hidden;
			white-space:nowrap;
			cursor:pointer;
			font-size:30px;
			color:#ccc;
			}
			.rate:not(:checked) > label:before {
			content: '★ ';
			}
			.rate > input:checked ~ label {
			color: #8340A1;    
			}
			.rate:not(:checked) > label:hover,
			.rate:not(:checked) > label:hover ~ label {
			color: #8340A1;  
			}
			.rate > input:checked + label:hover,
			.rate > input:checked + label:hover ~ label,
			.rate > input:checked ~ label:hover,
			.rate > input:checked ~ label:hover ~ label,
			.rate > label:hover ~ input:checked ~ label {
			color: #8340A1;
			}
			body {
			background-image: url(//cdn.fcglcdn.com/brainbees/images/n/main-bg.jpg);
			background-repeat: repeat;
			font-family: inherit;
			}
			.parsley-errors-list{
			padding-left:0;
			}
			.nav.nav-tabs .nav-link{
			border-radius:unset;
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
						<li class="breadcrumb-item active" aria-current="page">Product Review </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content py-0">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-lg-3 mb-3  d-block d-xl-block"> 
						<ul class="list-group">
							<li class="list-group-item active">
								<a class="nav-link " href="<?= base_url("Home/Profile") ?>">
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
								<a class="nav-link" href="<?= base_url("Home/Logout") ?>">
									<i class="bi bi-power"></i>
									Logout                               
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="change-password.html">
									<i class="bi bi-unlock"></i>
									Change Password                            
								</a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-lg-9 mb-3">
						<div class="card bg-white">
							<div class="card-header">
								<div class="row">
									<div class="col-12 col-sm-12 px-2 p-0">
										<h1 style="font-size : 22px;">Review</h1>  
									</div>
								</div>	
							</div>
							<div class="card-body p-1">
								<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link <?php if($this->uri->segment(2)=='Product' || $this->uri->segment(2)!='Seller'){echo 'active'; }?> button-block px-2 py-1" id="product-tab" data-toggle="tab" data-target="#product" type="button" role="tab" aria-controls="home" aria-selected="true">Review To Product</button>
									</li>
									<?php if(!empty($pdata->vendor_id)){?>
										<li class="nav-item items" role="presentation">
											<button class="nav-link button-block px-2 py-1 <?php if($this->uri->segment(2)=='Seller'){echo 'show active'; }?>" id="seller-tab" data-toggle="tab" data-target="#seller" type="button" role="tab" aria-controls="profile" aria-selected="false">Review To Seller</button>
										</li>
									<?php } ?>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade p-0 <?php if($this->uri->segment(2)=='Product' || $this->uri->segment(2)!='Seller'){echo 'show active'; }?>" id="product" role="tabpanel" aria-labelledby="product-tab">
										<?php if(!empty($pdata)){?>   
											<form method="POST" action="<?= base_url('Home/AddReview')?>" class="addReview">
												<div class="create-review-top-container-fluid d-flex p-2">
													<?php
														$size_status=false;
														if($ptype=='Ind'){
															$icons = explode(',', $vdata->variant_img);
															
															if($vdata->size!='[{"NA":"0"}]'){
																$size_status=true;
															}
														}
														else{
															$icons = explode(',', $pdata->image);
														}
													?>
													<img src="<?= base_url('uploads/product/') . $icons[0]; ?>"  class="create-review-image mr-2">
													<div class="create-review-top-right-container-fluid">
														<p class="create-review-product-title"><?=$pdata->title;?></p>
														<div id="create-review-star-line-field-container-fluid">
															<div id="create-review-star-line-wrapper">
																<div class="create-review-star-line-container-fluid">  
																	<div class="rating-box">  
																		<div class="rating-container">
																			<input type="radio" name="rating" value="5" id="star-5" required data-parsley-required-message="Please select a star rating."> <label for="star-5">&#9733;</label>
																			<input type="radio" name="rating" value="4" id="star-4"> <label for="star-4">&#9733;</label>
																			<input type="radio" name="rating" value="3" id="star-3"> <label for="star-3">&#9733;</label>
																			<input type="radio" name="rating" value="2" id="star-2"> <label for="star-2">&#9733;</label>
																			<input type="radio" name="rating" value="1" id="star-1"> <label for="star-1">&#9733;</label>
																		</div>   
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-12 py-2 reviews-details">
														
														<!--<div class="form-group">
															<label>Size Purchased</label>
															<select class="form-control">
															<option value="XS">XS</option>
															<option value>S</option>
															<option value>M</option>
															<option value>L</option>
															<option value>XL</option>
															</select>
															</div>
															<div class="form-group">
															<label>Your Usual Size</label>
															<select class="form-control">
															<option value="XS">XS</option>
															<option value>S</option>
															<option value>M</option>
															<option value>L</option>
															<option value>XL</option>
															</select>
														</div>-->
														<?php if($size_status==true){?>
															<label>How did it feet it?</label>
															<div class="form-group mb-0">
																
																<input type="radio" name="fit_status" id="true-to-size"  required data-parsley-required-message="Tell us how did it fit." class="sr-only" value="true-to-size">
																<label for="true-to-size"  class="review-fit-button">
																	<span>True to size</span>
																</label>
																<input type="radio" name="fit_status" id="run-small" required class="sr-only" value="run-small">
																<label for="run-small" class="review-fit-button">
																	<span>Run Small</span>
																</label>
																<input type="radio" name="fit_status" id="runs-large" required class="sr-only" value="runs-large">
																<label for="runs-large" class="review-fit-button">
																	<span>Runs large</span>
																</label>
															</div>
														<?php } ?>
														<div class="form-group mb-0 mt-1">
															<?php 
																if($this->permission == 'true'){ 
																	$name=$this->userData->name?$this->userData->name:'';
																	$email=$this->userData->email?$this->userData->email:'';
																}?>
																<label>Name</label>
																<input type="text" name="name" value="<?php if(!empty($name)){echo $name;}?>" required data-parsley-required-message="Please provide your name." placeholder="xyz" class="form-control">
														</div>
														<div class="form-group mb-0 mt-1">
															<label>Email</label>
															<input type="email" name="email" value="<?php if(!empty($email)){echo $email;}?>" required data-parsley-required-message="Please provide a valid email address." placeholder="slick@example.com" class="form-control">
														</div>
														<div class="form-group mb-0 mt-1">
															<label>Upload Your Product Image</label>
															<input type="file" name="image[]" multiple placeholder="" class="form-control">
															<input type="hidden" name="product_id" value="<?=$pdata->id ?>">
															<input type="hidden" name="product_type" value="<?=$ptype ?>"> 
															<input type="hidden" name="review_type" value="product"> 
														</div>
														<div class="form-group mb-0 mt-1">
															<label>Review Title</label>
															<input type="text" name="review_title" required data-parsley-required-message="Please give your review a title." placeholder="Give your review a title" class="form-control">
														</div>
														<div class="from-group mb-2 mt-1">
															<label>Body of Review(1500)</label>  
															<textarea class="form-control mb-0" name="review_message" required data-parsley-required-message="Please provide a short review of the product." rows="5" placeholder="Write your comments here"></textarea>
														</div>  
														<button class="addBtn btn btn-secondary">SUBMIT REVIEW</button> 
													</div> 
												</div> 
											</form>
										<?php } ?> 
									</div>
									<div class="tab-pane fade p-0 <?php if($this->uri->segment(2)=='Seller'){echo 'show active'; }?>" id="seller" role="tabpanel" aria-labelledby="seller-tab">
										<?php if(!empty($pdata)){?>   
											<form method="POST" action="<?= base_url('Home/AddReview')?>" class="addReview">
												<div class="create-review-top-container-fluid d-flex p-2">
													<?php
														$size_status=false;
														if($ptype=='Ind'){
															$icons = explode(',', $vdata->variant_img);
															
															if($vdata->size!='[{"NA":"0"}]'){
																$size_status=true;
															}
														}
														else{
															$icons = explode(',', $pdata->image);
														}
													?>
													<img src="<?= base_url('uploads/product/') . $icons[0]; ?>"  class="create-review-image mr-2">
													<div class="create-review-top-right-container-fluid">
														<p class="create-review-product-title"><?=$pdata->title;?></p>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-12 py-2 reviews-details">
														<span>SELLER</span>  
														<h4 class="font-weight-bold text-uppercase" style="font-size: 18px;">Turrantbuy</h4>
														<div class="form-group mb-0 mt-1">
															<?php 
																if($this->permission == 'true'){ 
																	$name=$this->userData->name?$this->userData->name:'';
																	$email=$this->userData->email?$this->userData->email:'';
																}?>
																<input type="hidden" name="name" value="<?php if(!empty($name)){echo $name;}?>" required data-parsley-required-message="Please provide your name." placeholder="xyz" class="form-control">
																<input type="hidden" name="email" value="<?php if(!empty($email)){echo $email;}?>" required data-parsley-required-message="Please provide a valid email address." placeholder="slick@example.com" class="form-control">
																<input type="hidden" name="product_id" value="<?=$pdata->id ?>">
																<input type="hidden" name="vendor_id" value="<?=$pdata->vendor_id ?>">
																<input type="hidden" name="product_type" value="<?=$ptype ?>"> 
																<input type="hidden" name="review_type" value="seller"> 
														</div>
														<div class="form-group mb-0 mt-1" style="line-height: 1;">
															<label>Rate Seller</label><br>
															<div class="rate">
																<input type="radio" class="sr-only" id="star5" name="rating" value="5" />
																<label for="star5"  title="5 stars">5 stars</label>
																<input type="radio" class="sr-only" id="star4" name="rating" value="4" />
																<label for="star4" title="4 stars">4 stars</label>
																<input type="radio" class="sr-only" id="star3" name="rating" value="3" />
																<label for="star3" title="3 stars">3 stars</label>
																<input type="radio" class="sr-only" id="star2" name="rating" value="2" />
																<label for="star2" title="2 stars">2 stars</label>
																<input type="radio" class="sr-only" id="star1" name="rating" value="1" />
																<label for="star1" title="1 stars">1 star</label>
															</div>
															<br><br>
														</div>
														<div class="form-group mb-0 mt-1">
															<label>Review Title</label>
															<input type="text" name="review_title" required data-parsley-required-message="Please give your review a title." placeholder="Give your review a title" class="form-control">
														</div>
														<div class="from-group mb-2 mt-1">
															<label>Body of Review(1500)</label>  
															<textarea class="form-control mb-0" name="review_message" required data-parsley-required-message="Please provide a short review of the product." rows="5" placeholder="Write your comments here"></textarea>
														</div>  
														<button  class="addBtn btn btn-secondary">SUBMIT REVIEW</button> 
													</div> 
												</div> 
											</form>
										<?php } ?> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		<script>
			
			function GiftReceipt()
			{
				jQuery("#gidtReceipt").modal('show');
			}
			
			jQuery('[data-toggle="popover"]').popover({
				html: true,
				content: function() {
					var id = jQuery(this).attr('id');
					return jQuery('#po' + id).html();
				}
			});
		</script>
		<script>
			$(".review-fit-button").click(function() {
				$(".review-fit-button").removeClass("activeFit");
				$(this).addClass("activeFit");
			});
			$('.addReview').on('submit', function(e) {     
				// alert(1);
				var formAction = $(this);
				var btnAction = $('.addBtn');
				var spinAction = $('.addSpin');
				e.preventDefault();
				var data = new FormData(this);
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
							$(btnAction).append('<i class="fa fa-spin fa-spinner" id="addSpin"></i>');
						},
						success: function(response) {
							console.log(response);
							var response = JSON.parse(response);
							$(btnAction).removeAttr("disabled");
							$(btnAction).children().remove(); 
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
								if (response[0].redirect) {
									window.setTimeout(function() {
										window.location.href = response[0].redirect;
									}, 1000);
								} 
							}
						},
						error: function() {
							// window.location.reload();
						}
					});
				}
			});
		</script>
	</body>
</html>																								
