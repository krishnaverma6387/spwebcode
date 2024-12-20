
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Spending History</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.card{
			border-radius: 6px;
			}
			body{
			background:#F7F7F7!important;
			}
			#main-sec{
			background:white; 
			padding: 75px;
			border-radius: 10px;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			#main-sec{
			padding: 0px;
			border-radius: 10px;
			}
			#hide{
			  display:none;
			}
			}
			
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
			color: black!important;
			background-color: white!important;
			border-bottom: 2px solid #8340A1 !important;
			font-weight: bold;
			}
			.nav-pills .nav-link{
			border: 0px !important;
			background: white;
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
						<li class="breadcrumb-item active" aria-current="page">Spending History</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row" id="main-sec" >
					<div class="col-sm-12">
						<div class="card" style="border:0px;">
							<div class="card-header bg-white" >
								<div class="row">
									<div class="col-sm-4" id="hide"><small><a href="<?= base_url('Home/SlickWallet') ?>" class="d-inline"> <i class="fas fa-chevron-left"></i> Back to Slick Wallet</a></small></div>	
									<div class="col-sm-4">	
										<p class="text-center">Total Cash Balance</p>
										<h5 class="text-center font-weight-bold">₹ 0</h5>
									</div>	
								</div>
							</div>  
							<div class="card-body border" style="background: white; padding-top:0px;">
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation" style="width:50%;" >
										<button class="nav-link active w-100" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Non-Transferable ₹0</button>
									</li>
									<li class="nav-item" role="presentation" style="width:50%;">
										<button class="nav-link w-100" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Transferable ₹0</button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent"  style="height: 300px;">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
								</div>
								
								<div class="row">
									<div class="col-sm-12 text-center">
										<p>Start Shopping to Earn Slick Cash</p>
										<a href="<?= base_url() ?>" class="btn btn-secondary">Start Shopping</a>
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
		
	</body>
</html>																								
