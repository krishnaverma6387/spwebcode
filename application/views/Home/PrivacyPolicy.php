<?php 
	$list = $this->db->get("privacy_policy")->row();	
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $list->privacy_title?></title>
		<meta name="description" content="<?= $list->privacy_description?>">
		<meta name="keywords" content="<?= $list->privacy_keyword?>">
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
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container"> 
				<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<?= $list->privacy_policy;?>
				</div>
				</div>
			</div>
		</section>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
	</body>
</html>																						