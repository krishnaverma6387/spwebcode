
<!DOCTYPE html>
<?php 
	$about = $this->db->order_by('id','desc')->limit(1)->get("tbl_about")->row();
?>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title><?= $about->meta_title?></title>
		<meta name="description" content="<?= $about->meta_description?>">
		<meta name="keywords" content="<?= $about->meta_keyword?>">
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
						<li class="breadcrumb-item active" aria-current="page">AboutUs</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content ">	
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 p-0">
						<?php
							if(!empty($about->image1))
							{
							?>
							<img alt="<?= $about->alt; ?>" title="<?= $about->seo_title; ?>" class="img-fluid w-100 lazy"  src="<?= base_url('./uploads/brand/'.$about->image1)?>">		
							<?php
							}
						?>
					</div>	 
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center mt-4">
					<div class="pro-heading-title">
						<h1>
							<?php if(!empty($about)){echo $about->title1;} ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						
						<p class="peragraph text-right text-justify">
							<?php if(!empty($about)){echo $about->desc1;} ?>
						</p>
						
						<h3 class="text-right founder_name"><?php if(!empty($about)){echo $about->title2;} ?></h3>
						
					</div>
					<div class="col-12 col-md-6">
						<?php
							if(!empty($about))
							{
							?>
							<img alt="<?= $about->alt2; ?>" title="<?= $about->seo_title2; ?>" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/').$about->image2?>" class="img-fluid lazy founder_img" style="height: 400px">
							<?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="container accordion-container ">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<?php
								if(!empty($about))
								{
								?>
								<img alt="<?= $about->alt3; ?>" title="<?= $about->seo_title3; ?>" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/').$about->image3?>" class="img-fluid lazy">
								<?php
								}
							?>
						</div>
						<div class="col-12 col-md-6 mt-2">
							<div class="pro-heading-title">
								<h2>
									<?php if(!empty($about)){echo $about->title3;} ?>
								</h2>
							</div>
							<p class="peragraph  peragraph2">
								<?php if(!empty($about)){echo $about->desc2;} ?>
							</p>
							
						</div>
					</div>
					</div>
			</div>
			<div class="container-fluid p-1" style="background: #F8F9FA">
				<div class="col-lg-12 col-12">
					<center><i class="fa fa-quote-left fa-3x" style="color: #FF1493;"></i></center>
					<p class="text-center mt-2"><?php if(!empty($about)){echo $about->desc3;} ?></p>
					<h1 class="mt-3 text-center pageheading" style="color:#FF1493; font-weight: 600"><?php if(!empty($about)){echo $about->desc4;} ?></h1>
					<p class="mt-3 text-center"><?php if(!empty($about)){echo $about->title4;} ?></p>
				</div>	
			</div>
			
			<div class="container mt-5">
				<div class="pro-heading-title">
					<h2>
						<?php if(!empty($about)){echo $about->title5;} ?>
					</h2>
					<p class=" text-justify"><?php if(!empty($about)){echo $about->desc5;} ?></p>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-12 mt-2">
						<div class="pro-heading-title mt-5">
							<h2><?php if(!empty($about)){echo $about->title6;} ?></h2>
						</div>
						<p class="text-center"><?php if(!empty($about)){echo $about->desc6;} ?></p>
						<p class="text-center"><button class="btn btn-secondary">Follow Us</button></p>
					</div>	
					<div class="col-sm-6 col-12">
						<center><img alt="<?= $about->alt4; ?>" title="<?= $about->seo_title4; ?>" class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/').$about->image4?>"></center>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="pro-heading-title mt-5">
							<h2><?php if(!empty($about)){echo $about->title7;} ?></h2>
						</div>
						<p class="text-center"><?php if(!empty($about)){echo $about->desc7;} ?></p>
						<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://images-static.nykaa.com/nykdesignstudio-images/pub/media/about-us/Show-us-some-love%20(1).gif" class="img-fluid lazy"></center>
					</div>	
				</div>
			</div>
			<div class="container">
				<div class="pro-heading-title mt-5">
					<h2><?php if(!empty($about)){echo $about->title8;} ?></h2>
				</div>
				<div class="row">
					<div class="col-sm-6 col-12 mt-4">
						<center><i class="fa fa-quote-left fa-3x" style="color: #FF1493;"></i></center>
						<p class="text-right"><?php if(!empty($about)){echo $about->desc8;} ?></p>
						<p class="text-right"><?php if(!empty($about)){echo $about->title9;} ?></p>
					</div>	
					<div class="col-sm-6 col-12">
						<center><img alt="<?= $about->alt5; ?>" title="<?= $about->seo_title5; ?>" class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/').$about->image5; ?>" style="height: 450px;"></center>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm-5 m-auto">
						<i class="fa fa-quote-left fa-3x" style="color: #FF1493;opacity: 0.2"></i>  
						<p class="text-center"><?php if(!empty($about)){echo $about->desc9;} ?></p>
						<p class="text-right"><i class="fa fa-quote-right fa-3x" style="color: #FF1493;opacity: 0.2"></i></p>
					</div>	
				</div>
			</div>
			
			
			
		</section>
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																																	