
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Slick Points</title>
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
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Slick Points</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row" id="main-sec" >
					<?php
						if(!empty($wallet)){
							$sum=0;
							foreach($wallet as $each){
								$sum+=$each->coins;
							} 
							$userid=$this->userData->id;
					?>
					<div class="col-sm-12">
						<div class="card" style="border:0px;">
							<div class="card-header p-0 bg-white" style="border: 0px;">
								<div class="row">
									<div class="col-sm-4"><small><a href="<?= base_url('Home/SlickWallet') ?>" class="d-inline"> <i class="fas fa-chevron-left"></i> Back to Slick Wallet</a></small></div>	
									<div class="col-sm-4">	
										<p class="text-center">Active Slick Points</p>
										<h5 class="text-center font-weight-bold"><?php if(!empty($sum)){echo $sum;}else{echo "0";}?> Coins</h5>
									</div>	
									<div class="col-sm-4 text-right"><small ><a href="<?= base_url('Home/SlickWallet') ?>" class="d-inline">  View T&C </a></small></div>	
								</div>
								<!--<div class="alert alert-danger" role="alert">
									<span><small><i class="bi bi-info-circle"></i> Additional points pending for activation</small></span>
									<span class="float-right"><small><a href="#"> View T&C </a></small></span>
								</div>-->
							</div>  
							<h1 style="font-size: 12px; my-2">Recent Activity</h1>
							<div class="card-body border" style="background: white; padding-top:0px;">
								<?php
									foreach($Allwallet as $each1){	
									$startdate=date('d M y',strtotime($each1->created_at));
									$enddate=date('d M y',strtotime($startdate.'+'.$each1->expire_date.' days'));
									$currentdate=date('d M y');
									if(strtotime($currentdate)>strtotime($enddate)){
								?>
								<div class="row p-2 " style="border-bottom: 3px solid #F7F7F7;">
									<div class="col-sm-2 mt-2">
										<p class="text-center"> <img src="https://assets.ajio.com/static/ws/ajiowallet/v1/active-points-expired-v1.png" class="img-fluid" style="height: 40px;"> </center> 
									</div>	
									<div class="col-sm-8 mt-2">
										<span>Expired Points</span> <br>
										<small>Expired on <?= $enddate?></small> 
									</div>	
									<div class="col-sm-2 mt-2 text-right">
										<small class="font-weight-bold">-<?= $each1->coins ?></small>
									</div>	
								</div>
								<?php }else{ ?>
								<div class="row p-2 " style="border-bottom: 3px solid #F7F7F7;">
									<div class="col-sm-2 mt-2">
										<p class="text-center"><img src="<?= base_url('assets/website/assets/images/Promotion.png')?>" class="img-fluid" style="height: 48px;"> </center> 
									</div> 	
									<div class="col-sm-8 mt-2">
										<span>Active Points (<?=ucwords($each1->remark_as)?>)</span> <br>
										<small>Activated on <?= $startdate?> | Expires on <?= $enddate?></small>
									</div>	
									<div class="col-sm-2 mt-2 text-right">
										<small class="font-weight-bold"><?= $each1->coins?></small>
									</div>	
								</div>
								<?php } } ?> 
							</div>
						</div>   
					</div>
					<?php } ?>
				</div>	 	
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																								
