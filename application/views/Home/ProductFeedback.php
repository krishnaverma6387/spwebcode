
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Feedback</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
			.nav-tabs {
			border-bottom: 1px solid #dee2e6;
			background: #dee2e6;
			}
			.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
			color: #8834AD !important; 
			font-weight: 800;
			}
			#borderd-card{
			border-radius: 9px;
			border-top: 1px solid #8340A1;
			border-bottom: 1px solid #8340A1;
			border-right :1px solid #8340A1;
			border-left :6px solid #8340A1;
			}
			.btn-contact{
			background: white;
			border: 1px solid #D5D9D9 !important;
			border-radius: 10px;
			font-weight: normal !important;
			font-size: 10px!important;
			}
			
			
			
			.rate {
			float: left;
			height: 46px;
			}
			.rate:not(:checked) > input {
			position:absolute;
			top:-9999px;
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
			color: #ffc700;    
			}
			.rate:not(:checked) > label:hover,
			.rate:not(:checked) > label:hover ~ label {
			color: #deb217;  
			}
			.rate > input:checked + label:hover,
			.rate > input:checked + label:hover ~ label,
			.rate > input:checked ~ label:hover,
			.rate > input:checked ~ label:hover ~ label,
			.rate > label:hover ~ input:checked ~ label {
			color: #c59b08;
			}
			
			#toggle-card{
			 display:none;
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
						<li class="breadcrumb-item active" aria-current="page">Product Feedback</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Rate your experience</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Completed feedback</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent" style="border: 1px solid #E2E8E8;">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="card" style="border: 0px;" >
							<div class="card-body">
								<div class="row  p-2" style="border: 1px solid #D5D9D9; border-radius: 9px;">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												<span>SELLER</span>
											</div>	 
											<div class="col-sm-6">
												<span class="text-center">PRODUCT</span>
											</div>	 
											<div class="col-sm-3">
												<span>ORDER PLACED</span>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<h1 class="font-weight-bold" style="font-size: 22px;">Turrantbuy</h1>
										<a href="#">View Seller profile</a>
									</div>	 
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-2"><img src="https://m.media-amazon.com/images/I/41WIROp7icS.jpg" class="img-fluid " style="height: 90px">	</div>	
											<div class="col-sm-10">
												<span class="font-weight-bold" style="font-size:20px;">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</span><br>
												<a href="<?= base_url('Home/ProductReview') ?>" class="font-weight-bold">Write a review</a>
											</div>
										</div>
									</div>	 
									<div class="col-sm-3">
										<span>1 August, 2022 <br>
											ORDER NUMBER<br>
											403-3233527-4835516
										</span>
									</div>	 
								</div>
							</div>  
						</div>
						
						<div class="card" style="border:0px;">
							<div class="card-body">
								<div class="row  p-2" id="borderd-card">
									<div class="col-sm-12">
										<i class="bi bi-check-circle-fill fa-2x" style="color: #8340A1"></i>&nbsp; <a href="#" style="font-size: 19px;" class="font-weight-bold">Fulfilled by Slickpattern</a>
									</div>  
									<div class="col-sm-12">
										<span>Got a problem with your delivery?&nbsp;</span><button class="btn btn-contact">Contact Slickpattern</button>	
									</div>
								</div>  
							</div>	
						</div>
						
						
						<div class="card" style="border:0px;">
							<div class="card-body">
								<div class="row  p-2" >
									<div class="col-sm-12">
										<span class="font-weight-bold">Rate Seller</span> <br>
										<div class="rate">
											<input type="radio" id="star5" name="rate" value="5" />
											<label for="star5" title="text">5 stars</label>
											<input type="radio" id="star4" name="rate" value="4" />
											<label for="star4" title="text">4 stars</label>
											<input type="radio" id="star3" name="rate" value="3" />
											<label for="star3" title="text">3 stars</label>
											<input type="radio" id="star2" name="rate" value="2" />
											<label for="star2" title="text">2 stars</label>
											<input type="radio" id="star1" name="rate" value="1" />
											<label for="star1" title="text">1 star</label>
										</div>
									</div>
								</div>  
							</div>	
						</div>
						
						<div class="card" style="border: 0px;" >
							<div class="card-body">
								<div class="row  p-2" style="border: 1px solid #D5D9D9; border-radius: 9px;">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												<span class="font-weight-bold">Item as described by the seller?</span>
											</div>	 
											<div class="col-sm-6">
												<center><input type="radio" name="radio" value="Yes" id="Yes" >&nbsp; <label for="Yes">Yes</label> &nbsp;  <input type="radio" name="radio" id="No" value="No">&nbsp;<label for="No">No</label></center>
											</div>	 
											<div class="col-sm-3">
												<a href="javascript:void(0)" class="shadow p-1 float-right" style="border-radius: 5px;">&times;</a>
											</div>
										</div>
									</div>
									<div class="col-sm-12 mt-2">
										<label>Comments:</label>
										<textarea class="form-control" rows="3" placeholder="Please enter comments here about eperience with this seller"></textarea>
										<span>No Html</span>
										<span class="float-right">Characters remaining:  400</span>
										
										<div class="form-group mt-2">
											<button class="btn btn-secondary">Submit feedback</button>
										</div>
									</div>	 
									
									
								</div>
							</div>  
						</div>
						
						
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						
						<div class="card d-none" style="border:0px;">
							<div class="card-body">
								<div class="row  p-2" id="borderd-card">
									<div class="col-sm-12">
										<i class="bi bi-check-circle-fill fa-2x" style="color: #8340A1"></i>&nbsp; <a href="#" style="font-size: 19px;" class="font-weight-bold">You haven't yet left any feedback</a>
									</div>  
									<div class="col-sm-12">
										<span class="ml-2 mt-1">If you have questions regarding feedback, please see <a href="">feedback help</a>.&nbsp;</span>
										<div class="form-group mt-3">
											<button class="btn btn-secondary"  style="border-radius: 10px;">See all orders awaiting your feedback</button>
										</div>
									</div>
								</div>  
							</div>	
						</div>
						
						
						<div class="card" style="border: 0px;" >
							<div class="card-body">
								<div class="row  p-2" style="border: 1px solid #D5D9D9; border-radius: 9px;">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												<span>SELLER</span>
											</div>	 
											<div class="col-sm-6">
												<span class="text-center">PRODUCT</span>
											</div>	 
											<div class="col-sm-3">
												<span>ORDER PLACED</span>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<h1 class="font-weight-bold" style="font-size: 22px;">Turrantbuy</h1>
										<a href="#">View Seller profile</a>
									</div>	 
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-2"><img src="https://m.media-amazon.com/images/I/41WIROp7icS.jpg" class="img-fluid " style="height: 90px">	</div>	
											<div class="col-sm-10">
												<span class="font-weight-bold" style="font-size:20px;">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</span><br>
												<a href="<?= base_url('Home/ProductReview') ?>" class="font-weight-bold">Write a review</a>
											</div>
										</div>
									</div>	 
									<div class="col-sm-3">
										<span>1 August, 2022 <br>
											ORDER NUMBER<br>
											403-3233527-4835516
										</span>
									</div>	 
								</div>
							</div>  
						</div>
						
						
						<div class="card" style="border:0px;">
							<div class="card-body">
								<div class="row  p-2" >
									<div class="col-sm-12">
										<span class="font-weight-bold">Your Submitted Feedback</span> &nbsp; <a href="#"><span class="badge badge-primary" style="border-radius:5px;">Remove</span></a> <br>
										<div class="rate">
											<input type="radio" id="star5" checked name="rate" value="5" />
											<label for="star5" title="text">5 stars</label>
											<input type="radio" id="star4" name="rate" value="4" />
											<label for="star4" title="text">4 stars</label>
											<input type="radio" id="star3" name="rate" value="3" />
											<label for="star3" title="text">3 stars</label>
											<input type="radio" id="star2" name="rate" value="2" />
											<label for="star2" title="text">2 stars</label>
											<input type="radio" id="star1" name="rate" value="1" />
											<label for="star1" title="text">1 star</label>
											
										</div> 
										<p class="font-weight-bold ml-5" style="margin-top: 14px;">&ensp;&ensp;Good</p>
										<a href="javascript:void(0)" id="ToggleSection" class="font-weight-bold">Show details</a>
									</div>
								</div>  
							</div>	
						</div>
						
						
						
						<div class="card" style="border: 0px;" id="toggle-card" >
							<div class="card-body">
								<div class="row  p-2" style="border: 1px solid #D5D9D9; border-radius: 9px;">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												<span class="font-weight-bold">Item as described by the seller?</span>
											</div>	 
											<div class="col-sm-6">
												<center><span>Yes</span></center>
											</div>	 
											<div class="col-sm-3">
												<a href="javascript:void(0)" onclick="HideSection()" class="shadow p-1 float-right" style="border-radius: 5px;">&times;</a>
											</div>
										</div>
									</div>
									<div class="col-sm-12 mt-2">
										<label>Comments:</label>
										<textarea class="form-control" rows="1" readonly placeholder="Please enter comments here about eperience with this seller" value="Good"></textarea>
										<div class="form-group mt-1">
											<span>The name <span class="font-weight-bold">"Amazon Customer"</span> will be displayed with your feedback.<a href="#"> Use a different name</a></span>
										</div>
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
			jQuery('.flip').hover(function(){
				$(this).find('.card').toggleClass('flipped');
				
			});
			
			jQuery("#ToggleSection").click(function(){
				jQuery("#toggle-card").show();
				jQuery("#ToggleSection").hide();
			})
			
			function HideSection()
			{
					jQuery("#ToggleSection").show();
					jQuery("#toggle-card").hide();
			}
		</script>
		
		
	</body>
</html>																								
