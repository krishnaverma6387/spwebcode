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
			
			
			
			buy_now {
			font-family: "Inter", sans-serif;
			font-size: 13px;
			line-height: 1.5;
			text-transform: uppercase;
			margin-top: 90px !important;
			}
			
			.plan {
			border: 1.5px solid #f2e1b4 !important;
			/* background: #8340a1; */
			color: #ecebe4;
			border-radius: 10px;
			background: linear-gradient(to right, #849cb0, #8340a1);
			margin-top:-90px !important;
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
			
			
			
			/*
			Start Here 
			*/
			
			#main-sec{
			background: linear-gradient(90deg, rgb(168 83 233 / 49%) 20%, rgb(231 132 222 / 51%) 46%);
			padding: 75px;
			// border-radius: 10px;
			}
			.referral-header{
			border-radius: 10px; background: #F9FAFC; position: relative; margin-top: -30px
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			
			#main-sec{
			padding: 0;
			padding-bottom: 18px;
			border-radius: 20px;
			}
			.referral-header{
			border-radius: 10px;
			background: #F9FAFC;
			position: relative;
			width: 330px;
			margin-top: 22px;
			}
			}
			.card-header{
			// background:white!important;
			}
			
			.btn-link:hover {
			color: #505050;
			text-decoration:none !important;
			}
			
			.term_condition{
			font-size: 15px;
			border-radius: 20px;
			padding-top: 15px;
			padding-bottom: 15px;
			background-color: #8340a1;
			text-align: center;
			width: 100%;
			}
			
			.accordion > .card {
			overflow: visible !important; 
			}
			
			#invite_friend{
			border-radius: 12px;
			border: none;
			font-size: 16px;
			width: 100%;
			padding: 10px;
			background: #8340a1;
			color: white;
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
		<section class="pro-content aboutus-content">	
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
										<img src="<?= base_url('uploads/brand/' . $image->image) ?>" class="d-block w-100 mainbanner" title="<?= $image->seo_title; ?>" alt="<?= $image->alt; ?>">
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
						<?php 
							$choose_plan = $this->db->get("choose_plan")->row();
						?>
						<h4 class="text-center mt-4 choose"><?= $choose_plan->title; ?></h4>
						<h6 class="text-center  mb-4 choose"><?= $choose_plan->description; ?></h6>
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
											<a class="buy_now text-white btn mt-2" style="margin-top: 25px !important;">BUY NOW</a>
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
							<?php 
								$whatyouget = $this->db->get("whatyouget")->row();	
							?>
							<h4 class="text-center text-white mt-4"><?= $whatyouget->title; ?></h4>
							<h6 class="text-center text-white "><?= $whatyouget->description; ?></h6>
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
													<img alt="<?= $item->alt; ?>" title="<?= $item->seo_title; ?>" src="<?= base_url('./uploads/plan/'.$item->icon)?>" class="img-fluid rounded-start" style="height:50px;float: left;" alt="...">
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
					$royalclubsetting = $this->db->get('royalclubsetting')->row();
					$referandearn = $this->db->get('referandearn')->row();
				?>
				<div class="row bg-primary">
					<div class="col-sm-12 col-lg-12">
						<div class="pro-heading-title">
							<h4 class="text-center text-white mt-4"><?= $royalclubsetting->title; ?></h4>
							<h6 class="text-center text-white "><?= $royalclubsetting->description; ?></h6>
						</div>
					</div>
					<div class="col-sm-12 col-lg-12">
						<img alt="<?= $royalclubsetting->alt; ?>" title="<?= $royalclubsetting->seo_title; ?>" src="<?= base_url('uploads/brand/'.$royalclubsetting->image1)?>" class="img-fluid mb-4" style="max-height: 400px; object-fit: fill; width: 100%;border-radius:8px"/>
					</div>
				</div>
				
				
				<div class="row" id="main-sec">
					<div class="col-sm-12 text-center text-white">
						<!--<h1 class="text-center">Invite Friends & Earn</h1>	
						<p class="text-center">Invite Friends & Earn Slick Pattern Points For Every Friend</p>-->
						<h1 class="text-center"><?= $referandearn->title; ?></h1>	
						<p class="text-center"><?= $referandearn->description; ?></p>
					</div>
					<div class="col-sm-8 mx-auto">
						<div class="card " style="border:0px;">
							<div class="card-body" style="padding-top:0px;" >
								<center><img alt="<?= $referandearn->alt; ?>" title="<?= $referandearn->seo_title; ?>" src="<?= base_url('uploads/brand/'.$referandearn->image)?>" class="img-fluid"></center>
							</div>
						</div>   
					</div> 
					
					
					<div class="col-sm-5 mx-auto shadow p-2 referral-header" > 
						<div class="row mt-2" >
							<div class="col-2 col-sm-2"></div>
							<div class="col-8 col-sm-8">
								<?php 
									
									if(empty($this->userData))
									{
									?>
									<button id="invite_friend" class="justify-content-center d-block" onclick="<?php echo "showNotification('Please login first', 'error')"; ?>"
									>Invite a friend</button>
									<?php 
									}
									else
									{
									?>
									
									<div class="text-center">
										<?php echo $this->userData->ref_code; ?>
										<a href="javascript:void(0)" class="copy-code" onclick="<?php if(!empty($this->userData->ref_code)){echo "copyCode('" . $this->userData->ref_code . "')";} ?>"><i class="conf-class bi bi-files"></i></a> &ensp;
										<a onclick="<?php if(!empty($this->userData)){echo "openInviteModal();";} ?>" style="cursor: pointer;"><i class="bi bi-share"></i></a>
									</div>
									
									<?php 
									} 
								?>
								
								
								
								<!--<button id="invite_friend" class="justify-content-center d-block" onclick="<?//php if(!empty($this->userData)){echo "openInviteModal();";} else {echo "showNotification('Please login first', 'error')";} ?>"
								>Invite a friend</button>-->
								
								<!--<p class="font-weight-bold mb-0" style="color:black"><?//php if(!empty($this->userData->ref_code)){echo $this->userData->ref_code; }?></p>-->
								
								<!--<p class="font-weight-bold mb-0" style="color:black"><?php 
									// if (!empty($this->userData)) {
									// echo $this->userData->ref_code; 
									// } else {
									// echo "Referral empty";
									// }
								?></p> -->  
							</div>	
							<div class="col-2 col-sm-2"></div>
							<!--<div class="col-4 col-sm-4 text-right d-flex justify-content-end"> 
								
								<a href="javascript:void(0)" class="copy-code" onclick="<?//php if(!empty($this->userData->ref_code)){echo "copyCode('" . $this->userData->ref_code . "')";} else {echo "showNotification('Please login first', 'error')";} ?>"><i class="conf-class bi bi-files"></i></a>
								<a href="javascript:void(0)" class="mx-2" onclick="<?//php if(!empty($this->userData->ref_code)){echo "$('#ShareModal').modal('show');";} else {echo "showNotification('Please login first', 'error');";} ?>"><i class="bi bi-share"></i></a>
							</div>	-->
							
						</div>
					</div>
					
				</div>
				
				<div class="row" style="background: linear-gradient(90deg, rgb(168 83 233 / 49%) 20%, rgb(231 132 222 / 51%) 46%);">
					<div class="col-sm-2"></div>
					<div class="col-sm-4 mt-4">
						<div class="">
							<a href="<?= base_url('Home/termsandconditions')?>">
								<p class="term_condition">Terms &amp; Conditions <i class="fas fa-arrow-right fa-lg text-white"></i></p>
							</a>
						</div>   
					</div>
					<div class="col-sm-4 mt-4">
						<div style="cursor:pointer" id="div2">
							<a style="cursor:pointer">
								<p class="term_condition">Frequently Asked Questions <i class="fas fa-arrow-right fa-lg text-white"></i></p>
							</a>
						</div>   
					</div>
					<div class="col-sm-2"></div>
				</div>
				
				
				
				<!-- faq start here -->
				<div class="row mt-2" id="div1" style="display:none">
					<div class="col-12 mb-4 mt-4">
						<h3>  <i class="bi bi-info-circle"></i> <span>FREQUENTLY ASKED QUESTIONS</span> <h3>
						</div>
						
						<div class="col-12 col-lg-3" >
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<?php
									$sr=1;
									foreach($this->faqscategory1 as $faqcat) {
									?>
									<a class="nav-link <?php if($sr == 1) {echo 'active';} ?>" id="v-pills-home-tab<?= $sr; ?>" data-toggle="pill" href="#v-pills-home<?= $sr; ?>" role="tab" aria-controls="v-pills-home<?= $sr; ?>" aria-selected="true"><?= $faqcat->name; ?></a>
									
									<?php
										$sr++;
									}
								?>
							</div>
						</div>
						<div class="col-12 col-lg-9" id="anssection">
							<div class="tab-content" id="v-pills-tabContent">
								<?php
									$sr=1;
									foreach($this->faqscategory1 as $faqcat) {
										$questions = $this->db->get_where('faqs', array('category_id'=>$faqcat->id))->result();
									?>
									<div class="tab-pane fade <?php if($sr == 1) {echo 'show active';} ?>" id="v-pills-home<?= $sr; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab<?= $sr; ?>" style="padding: 0 22px;">
										<div class="row">
											<div class="container-fluid">
												<h2><?= $faqcat->title ?></h2>
												<?php if(!empty($faqcat->description)) { ?>
													<div class="row">
														<div class="col-sm-6">
															<p class="mt-3"><?= $faqcat->description ?></p>
														</div>
														<div class="col-sm-6">
															
														</div>
													</div>
												<?php } ?>
												<hr>
												<div id="accordion<?= $sr; ?>">
													<?php
														$srno=1;
														foreach($questions as $each) {
														?>
														<div class="card">
															<div class="card-header" id="heading<?= $sr; ?><?= $srno; ?>">
																<h2 class="mb-0">
																	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $sr; ?><?= $srno; ?>" aria-expanded="false" aria-controls="collapse<?= $sr; ?><?= $srno; ?>">
																		<i class="bi bi-info-circle"></i><?= $each->question; ?>
																	</button>
																</h2>
															</div>
															<div id="collapse<?= $sr; ?><?= $srno; ?>" class="collapse" aria-labelledby="heading<?= $sr; ?><?= $srno; ?>" data-parent="#accordion<?= $sr; ?>">
																<div class="card-body">
																	<?= $each->answer; ?>
																</div>
															</div>
														</div>
														<?php
															$srno++;
														}
													?>
												</div>
											</div>
										</div>
									</div>
									<?php
										$sr++;
									}
								?>
							</div>
						</div>
						</div>
						<!-- faq end here -->		
						
						
					</section>
					
					
					
					
					
					
					
					
					<!-- Refer Wala Modal -->
					<div class="modal fade" id="ShareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="border:0px;">
									<h5 class="modal-title" id="exampleModalLabel">Share Via</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-sm-12">
											<a href="javascript:void(0)" onclick="copyCode('<?php if(!empty($this->userData->ref_code)){echo urlencode(base_url($this->data->controller.'/'.$this->data->method.'/Login?referral_name='.$this->userData->name.'&referral_code='.$this->userData->ref_code)); }?>')"><img src="<?= base_url('public/images/link-icon.png') ?>" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Copy Link&nbsp;<span class="conf-class bi bi-files"></span></span></a>
										</div>
										<div class="col-sm-12 mt-4"> 
											<a target="_blank" href="https://web.whatsapp.com/send?text=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">WhatsApp </span>  </a>
										</div>
										
										<div class="col-sm-12 mt-4"> 
											<a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/768px-Facebook_Logo_%282019%29.png" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Facebook </span>  </a>
										</div>
										
										<div class="col-sm-12 mt-4">
											<a href="mailto:?subject=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSkeoCs8VErWDf0vryeFdXddXFAKS0wtjAWw&usqp=CAU" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Mail</span>  </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Here Referal Modal -->
					
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
					
					<!-- Benefits Modal Start Here  -->
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
					
					<!-- Benefits Modal End Here -->
					
					
					
					<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
					
					<?php include('include/footer.php'); ?>
					<?php include('include/jsLinks.php'); ?>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
					
					<script>
						$(document).ready(function() {
							$("#div2").click(function() {
								$("#div1").toggle();    
							});
						});
						
						function openInviteModal() {
							$('#ShareModal').modal('show');
						}
					</script>
					
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
						
						
						// copy text function here 
						function copyCode(code) {
							navigator.clipboard.writeText(code);
							
							$('.conf-class').toggleClass('bi-files bi-check2');
							setTimeout(function() {
								$('.conf-class').toggleClass('bi-check2 bi-files');
							}, 1000); 
						}
					</script>
					
					
					<script>
						
						function showNotification(message, type) {
							toastr.options = {
								closeButton: true,
								progressBar: true,
								positionClass: 'toast-top-right',
								preventDuplicates: true,
								showDuration: 400,
								hideDuration: 1000,
								timeOut: 5000,
								extendedTimeOut: 1000,
								showEasing: 'swing',
								hideEasing: 'linear',
								showMethod: 'fadeIn',
								hideMethod: 'fadeOut'
							};
							
							toastr[type](message);
						}
						
					</script>
				</body>
			</html>																																																																																																																																									