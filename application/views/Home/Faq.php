
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - FAQs</title>
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
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: #FF1493 !important;
			color:white !important;
			}
			.slide-toggle{
			display:none!important;
			}
			.btn-link:focus, .btn-link.focus{
			text-decoration:none!important;
			}
			.btn-link{
			font-family: sans-serif;
			font-weight: 600;
			color: #635c5c;
			}
			@media only screen and (max-width: 600px) {
			#anssection{
			/* border-top: 1px solid black;*/
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
						<li class="breadcrumb-item active" aria-current="page">FAQs</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container"> 
				<div class="row">
					<div class="pro-heading-title">
						<h1 class="p-0">
							Frequently asked questions
						</h1>
					</div>
				</div>
				
				<!-- About-us Content -->
				<section class="aboutus-content" style="margin-top: 0px;">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<?php
									$sr=1;
									foreach($this->faqscategory as $faqcat)	
									{
									?>
									<a class="nav-link <?php if($sr == 1){echo 'active';}?>" id="v-pills-home-tab<?= $sr;?>" data-toggle="pill" href="#v-pills-home<?= $sr;?>" role="tab" aria-controls="v-pills-home<?= $sr;?>" aria-selected="true"><?= $faqcat->name;?></a>
									
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
									foreach($this->faqscategory as $faqcat)	
									{
										
										$questions = $this->db->get_where('faqs',array('category_id'=>$faqcat->id))->result();
										
									?>
									<div class="tab-pane fade show <?php if($sr == 1){echo 'active';}?>" id="v-pills-home<?= $sr;?>" role="tabpanel" aria-labelledby="v-pills-home-tab<?= $sr;?>" style="padding: 0 22px;">
										<div class="row">
											<div class="container-fluid">
												<h2><?= $faqcat->title?></h2>
												<?php if(!empty($faqcat->description)){?>
													<div class="row">
														<div class="col-sm-6">
															<p class="mt-3"><?= $faqcat->description?></p>
														</div>
														<div class="col-sm-6">
															
														</div>
													</div>
												<?php } ?>
												<hr>
												<div class="accordion" id="accordionExample">
													<?php
														$srno=1;
														foreach($questions as $each)	
														{
															
														?>
														<p class="mb-0">
															<button class="btn btn-link btn-block text-left p-2" type="button" data-toggle="collapse" data-target="#collapseOne<?= $srno;?>" aria-expanded="false" aria-controls="collapseOne<?= $srno;?>" style="background: ghostwhite; margin: 4px 0;">
																<i class="bi bi-info-circle"></i><?= $each->question;?>
															</button>
														</p>
														<div id="collapseOne<?= $srno;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
															<div class="card-body">
																<p><?= $each->answer;?></p>
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
				</section>
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																							