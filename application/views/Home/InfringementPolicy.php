<?php
$list = $this->db->get("tbl_intellectual")->row();	
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $list->intellectual_title?></title>
		<meta name="description" content="<?= $list->intellectual_description?>">
		<meta name="keywords" content="<?= $list->intellectual_keyword?>">
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
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Infringement Policy</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<section class="pro-content login-content">
			<div class="container"> 
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<?= !empty($list->intellectual_property)?$list->intellectual_property:''; ?>
						<!--h1>Infringement Policy</h1>
						<p>Returns is a scheme provided by respective sellers directly under this policy in terms of which the option of exchange, replacement and/ or refund is offered by the respective sellers to you. All products listed under a particular category may not have the same returns policy. For all products, the returns/replacement policy provided on the product page shall prevail over the general returns policy. Do refer the respective item's applicable return/replacement policy on the product page for any exceptions to this returns policy and the table below</p>
						
						<p>The return policy is divided into three parts; Do read all sections carefully to understand the conditions and cases under which returns will be accepted.</p-->
						
					</div>
				</div>
				
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						