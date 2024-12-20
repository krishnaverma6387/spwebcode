<?php 
	$benefits = $this->db->order_by('id','desc')->get("subscription_benefits")->result();	
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title></title>
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
			.slide-toggle{
			display:none!important;
			}
			@media only screen and (min-device-width : 320px) and (max-device-width : 600px){
			.founder_img{
			width: 100%!important;
			height: auto!important;
			}
			.founder_name{
			text-align:center!important;
			}
			}
			.pro-content {
			padding-top: 1px !important;
			padding-bottom: 1px !important;
			}
			
			.month{
			text-align: center;
			font-weight: bold;
			font-size: 24px;
			}
			.net_price{
			font-family: Jakarta-Bold;
			font-weight: bold;
			font-size: 24px;
			text-align: center;
			}
			.aboutus-content p {
			color: white;
			line-height: 25px	;
			}
			.offer{
			text-align: center;
			font-weight: bold;
			font-size: 15px;
			margin-top: -5px;
			color:white !important;
			}
			
			.card_box{
			border: 1.5px solid #f2e1b4 !important;
			border-radius: 12px;
			padding: 10px 0px 10px 0px;
			background:#8340a1 !important;
			}
			.buy_now{
			border: 1.5px solid #f2e1b4!important;
			background: #8340a1;
			color: #ecebe4;
			border-radius: 10px;
			}
			.bg-primary{
			background-color: #8340a1 !important;
			}
			.choose{
			color:#f0ebf2 !important;
			}
			
			button.btn, a.btn {
			font-family: "Inter", sans-serif;
			font-size: 13px;
			line-height: 1.5;
			text-transform: uppercase;
			margin-top: -90px;
			}
			
			.plan {
			border: 1.5px solid #f2e1b4 !important;
			/* background: #8340a1; */
			color: #ecebe4;
			border-radius: 10px;
			background: linear-gradient(to right, #849cb0, #8340a1);
			}
			.benefits_title{
			color: white;
			font-size: 17px;
			line-height: 16px;
			}
			.aboutus-content p {
			color: white;
			line-height: 20px;
			}
			.card {
			border: none;
			}
			.benefits{
			border-radius:20px;
			}
			.benefits_div{
			background: #8340a1 !important;
			border-radius: 16px;
			}
			
			.modal-header {
			display: flex;
			align-items: flex-start;
			justify-content: space-between;
			padding: 1rem 1rem;
			border-bottom: 0px solid #ddd !important;
			border-top-left-radius: -1px;
			border-top-right-radius: -1px;
			height: 50px;
			}
			
			.modal {
			background: rgba(8,0,7,.6);
			backdrop-filter: blur(0px);
			-webkit-backdrop-filter: blur(0px);
			}
			
			.close_btn{
			border: none;
			background: #8340a1;
			color: white;
			font-size: 20px;
			margin-top: -5px;
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
						<li class="breadcrumb-item active" aria-current="page">Royal Customer Benifits</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content ">	
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 p-0">
						<!-- Bootstrap carousel Start -->
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php
									$slider_images = $this->db->order_by('id', 'desc')->get('tbl_herobanner')->result();
									foreach ($slider_images as $key => $image) {
										$active_class = ($key == 0) ? 'active' : ''; 
									?>
									<li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= $active_class ?>"></li>
								<?php } ?>
							</ol>
							<div class="carousel-inner">
								<?php
									foreach ($slider_images as $key => $image) {
										$active_class = ($key == 0) ? 'active' : ''; 
									?>
									<div class="carousel-item <?= $active_class ?>">
										<img src="<?= base_url('uploads/slider/' . $image->image) ?>" class="d-block w-100 mainbanner" alt="Slider Image">
									</div>
								<?php } ?>
							</div>
							<!-- Controls -->
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<!-- Bootstrap carousel End -->
					</div>	 
				</div>
				
				<div class="row bg-primary">
					<div class="col-sm-3 col-md-3 col-lg-3"></div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<h4 class="text-center mt-4 mb-4 choose">CHOOSE YOUR PLAN</h4>
						<div class="row mt-4 mb-4">
							<?php 
								$list = $this->db->order_by('id','desc')->get("subscription_plan")->result();
								foreach($list as $item)
								{
								?>
								<div class="col-sm-4 col-md-4 col-lg-4 mt-4">
									<div class="card card_box">
										<div class="card-body text-center">
											<button class="plan text-white btn btn-sm rounded-pill"><?= $item->name?></button>
											<p class="month"><?= $item->duration;?> <?= $item->plan_type;?></p>
											<p class="net_price">₹<?= $item->offer_price?></p>
											<div class="offer">
												<del>₹<?= $item->amount?></del>
												<span><?= $item->discount?>% OFF</span>
											</div>
											<a class="buy_now text-white btn mt-2">BUY NOW</a>
										</div>
									</div>	
								</div>
								<?php 
								}
							?>
							<!--<div class="col-sm-4">
								<div class="card card_box">
								<div class="card-body">
								<p class="month">6 Month</p>
								<p class="net_price">₹666</p>
								<div class="offer">
								<del>₹499</del>
								<span>13% OFF</span>
								</div>
								<a class="buy_now text-white btn mt-2">BUY NOW</a>
								</div>
								</div>	
								</div>
								<div class="col-sm-4">
								<div class="card card_box">
								<div class="card-body">
								<p class="month">12 Month</p>
								<p class="net_price">₹747</p>
								<div class="offer">
								<del>₹599</del>
								<span>13% OFF</span>
								</div>
								<a class="buy_now text-white btn mt-2">BUY NOW</a>
								</div>
								</div>	
							</div>-->
							
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3"></div>
				</div>
				
				<!-- What You Get Start Here -->
				<div class="row bg-primary">
					<div class="col-sm-12 col-lg-12">
						<div class="pro-heading-title">
							<h4 class="text-center text-white mt-4">WHAT YOU GET</h4>
						</div>
					</div>
				</div>
				
				<div class="row bg-primary">
					<div class="container">
						<div class="row border border-5 p-5 mb-4 benefits_div">
							<?php 
								foreach($benefits as $item)
								{
								?>
								<div class="col-sm-6">
									<div class="card mb-3">
										<div class="card-body bg-primary" style="min-height: 180px;max-height:180px; overflow-y: auto;">
											<div class="row g-0">
												<div class="col-md-1"></div>
												<div class="col-md-2">
													<img src="<?= base_url('./uploads/plan/'.$item->icon)?>" class="img-fluid rounded-start" style="height:50px;float: left;" alt="...">
												</div>
												<div class="col-md-9">
													<p class="card-title benefits_title"><?= $item->title; ?></p>
													
													<?php
														$description = $item->description;
														$words = str_word_count($description, 1);
														$limitedContent = implode(" ", array_slice($words, 0, 7)); 
													?>
													<p class="card-text" data-id="<?= $item->id; ?>"><?= $limitedContent; ?> <i class="fas fa-arrow-right fa-lg"></i></p>
													
													<!-- Full Description Here -->
													<p class="full-description" style="display: none;"><?= $description; ?></p>
													
												</div>
											</div>
										</div>
									</div>	
								</div>
								<?php 
								}
							?>
						</div>
					</div>
				</div>
				<!-- What You Get Start End -->
				<?php 
					$royalclubsetting = $this->db->order_by('id','desc')->get('royalclubsetting')->result();
				?>
				<div class="row bg-primary">
					<?php 
						foreach($royalclubsetting as $item)
						{
						?>
						
						<div class="col-sm-12 col-lg-12">
							<a href="<?= base_url('Home/ShareAndEarn') ?>" class="open-share-and-earn">
								<img src="<?= base_url('uploads/brand/'.$item->image1)?>" class="img-fluid mb-4" style="max-height: 400px; object-fit: fill;width: 100%;border-radius:8px"/>
							</a>
						</div>
						
						
						<!--<div class="col-sm-12 col-lg-12">
							<img src="<?= base_url('uploads/brand/'.$item->image1)?>" class="img-fluid mb-4" style="max-height: 400px; object-fit: fill;width: 100%;border-radius:8px"/>
						</div>-->
						
						<div class="col-sm-12 col-lg-12">
							<img src="<?= base_url('uploads/brand/'.$item->image2)?>" class="img-fluid mb-4" style="max-height: 400px; object-fit: fill; width: 100%;border-radius:8px"/>
						</div>
						<?php 
						}
					?>
				</div>
				
			</div>
			
		</section>
		
		
		<!-- Modal -->
		<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"> Membership Benefits</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="modalContent">
			<img src="" class="img-fluid" id="modalImage" alt="">
			<h5 class="modal-title mt-2" id="modalTitle"></h5>
			<p class="modal-description"></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
			</div>
			</div>
		</div>-->
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" style="height:auto">
				<div class="modal-content" style="background:#8340a1;border-radius: 15px;">
					<div class="modal-header bg-primary text-white" style="height:50px;border-radius: 20px;">
						<h5 class="modal-title" id="exampleModalLabel">Membership Benefits</h5>
						<button type="button" class="close_btn btn-close" data-bs-dismiss="modal" aria-label="Close" >
							<i class="fas fa-times"></i>  
						</button>
						
					</div>
					<div class="modal-body" style="border-top: 2px solid white;">
						<div class="row">
							<div class="col-md-3">
								<img src="" class="img-fluid" id="modalImage" alt="" style="height:60px;width:60px;float:left">
							</div>
							<div class="col-md-8">
								<h5 class="modal-title mt-2 text-white" id="modalTitle"></h5>
								<p class="modal-description text-white" id="modalDescription" style="word-wrap: break-word;"></p>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		
		
		<!-- JavaScript to open modal on card body click -->
		<script>
			$(document).ready(function() {
				$('.card-text').click(function() {
					var primaryId = $(this).data('id');
					var title = $(this).siblings('.benefits_title').text();
					// var description = $(this).text();
					var description = $(this).siblings('.full-description').text();
					var imageUrl = $(this).closest('.card-body').find('img').attr('src');
					openModal(title, description, imageUrl);
				});
				
				function openModal(title, description, imageUrl) {
					$('#modalTitle').text(title);
					$('#modalDescription').text(description);
					$('#modalImage').attr('src', imageUrl);
					$('#exampleModal').modal('show');
				}
			});
			
			$(document).on('click','.close_btn',function(){
				$('#exampleModal').modal('hide');
			});
		</script>
		
		
	</body>
</html>																																																	