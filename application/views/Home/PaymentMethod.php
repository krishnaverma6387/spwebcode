
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Payment Methods</title>
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
						<li class="breadcrumb-item active" aria-current="page">Payment Methods</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content blog-content blog-content-page">
			<div class="container">
				<div class="row">
                    <?php 
                    $list = $this->db->get("tbl_paymentmethod")->row();
                    ?>
					<div class="col-sm-12">
						<h1 class="pageheading"><?= !empty($list->title)?$list->title:'';?></h1>
						<h2><?= !empty($list->subtitle)?$list->subtitle:'';?></h2>
						<center> <img alt="<?= !empty($list->alt)?$list->alt:'';?>" title="<?= !empty($list->seo_title)?$list->seo_title:'';?>" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/'.$list->image1);?>" class="img-fluid lazy" style="height: 100px;"></center>
						<p class="text-justify"><?= !empty($list->desc1)?$list->desc1:'';?></p>
						
						</div>  
					
					<div class="col-sm-12">
						
						<h2 class="my-2"><?= !empty($list->title2)?$list->title2:'';?></h2>
						<div class="row">
							<div class="col-sm-3">
								<img alt="<?= !empty($list->alt2)?$list->alt2:'';?>" title="<?= !empty($list->seo_title2)?$list->seo_title2:'';?>" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/'.$list->image2);?>" class="img-fluid w-100 lazy">  
							</div>	
							<div class="col-sm-3">
								<img alt="<?= !empty($list->alt3)?$list->alt3:'';?>" title="<?= !empty($list->seo_title3)?$list->seo_title3:'';?>" data-src="<?= base_url('./uploads/brand/'.$list->image3);?>" src="<?= $this->data->lazyLoader;?>" class="img-fluid w-100 lazy">
							</div>	
							<div class="col-sm-3">
								<img alt="<?= !empty($list->alt4)?$list->alt4:'';?>" title="<?= !empty($list->seo_title4)?$list->seo_title4:'';?>" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('./uploads/brand/'.$list->image4);?>" class="img-fluid w-100 lazy">    
							</div>	
							<div class="col-sm-3">
								<img alt="<?= !empty($list->alt5)?$list->alt5:'';?>" title="<?= !empty($list->seo_title5)?$list->seo_title5:'';?>" data-src="<?= base_url('./uploads/brand/'.$list->image5);?>" class="img-fluid w-100 lazy">    
							</div>	
						</div>
						<br>
						<p class="text-justify"><?= !empty($list->desc2)?$list->desc2:'';?></p>
						
						</div>
					<div class="col-sm-12">
					  <h2><?= !empty($list->title3)?$list->title3:'';?></h2>	
					  <p class="text-justify"><?= !empty($list->desc3)?$list->desc3:'';?></p>
					  <h2><?= !empty($list->title4)?$list->title4:'';?></h2>
					  <p class="text-justify"><?= !empty($list->desc4)?$list->desc4:'';?></p>
					 	</div>
					
				</div>	
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																				