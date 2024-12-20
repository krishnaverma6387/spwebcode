
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $this->termsdata->size_title?></title>
		<meta name="description" content="<?= $this->termsdata->size_description?>">
		<meta name="keywords" content="<?= $this->termsdata->size_keyword?>">
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
			@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
			}
			}
		</style>
		
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">How To choose Your Size</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
            <?php 
                $list = $this->db->get("tbl_choosesize")->row();
			?>
			<div class="container">
				<!-- <?//= $this->termsdata->choose_size;?> -->
				<h1 class="pageheading"><?= !empty($list->title)?$list->title:''?></h1>
				<h2><?= !empty($list->subtitle)?$list->subtitle:''?></h2>
				<p class="text-justify"><?= !empty($list->desc1)?$list->desc1:''?>
				</p>
				
				
				<div class="row my-3">
					<div class="col-sm-12"><img alt="<?= !empty($list->alt)?$list->alt:''?>" title="<?= !empty($list->seo_title)?$list->seo_title:''?>" src="<?= base_url('./uploads/brand/'.$list->image1)?>" class="img-fluid w-100" alt=""></div>	
				</div>
				
				
				<p class="text-justify"><?= !empty($list->desc2)?$list->desc2:''?></p>
				
				
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
				
				
				<?php include('include/jsLinks.php'); ?>
				
	</body>
</html>																						