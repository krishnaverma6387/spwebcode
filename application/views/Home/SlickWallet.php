<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Slick Wallet</title>
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
			
		</style>
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Slick Wallet</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row" id="main-sec" >
					<div class="col-sm-12">
						<h1 class="text-center">Slick Wallet</h1>	
					</div>
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<p class="text-center">Total Wallet Balance</p>
								<h5 class="text-center">₹ 0</h5>
							</div>  
							<div class="card-body" style="background: #F7F7F7; padding-top:0px;" >
								<a href="<?= base_url('Home/CreditDetails') ?>" class="mb-2">
									<div class="row p-3" style="background: white;">
										<div class="col-sm-12">
											<span class="font-weight-bold">Slick Cash</span> 
											<span class="float-right">₹ 0  <i class="fas fa-angle-right"></i></span>
											<br>
											<span>The Indian rupee is the official currency of India. The rupee is subdivided</span>
										</div>	
									</div>
								</a>
								
								<?php
									if(!empty($wallet)){
										$sum=0;
										foreach($wallet as $each){
											$sum+=$each->coins;
										} }
								?>
								<a href="<?= base_url('Home/WalletBonus')?>">   
									<div class="row mt-3 p-3"  style="background: white;" >
										<div class="col-sm-12">
											<span class="font-weight-bold">Slick Points</span> 
											<span class="float-right"> <?php if(!empty($sum)){ echo $sum;}else{echo '0';}?> coins <i class="fas fa-angle-right"></i></span>
											<br>
											<span>Earned from promotions & offers at Slick with limited validity. Use upto 100%* on every purchase.</span>
										</div>	
									</div>
								</a>
								<!--<a href="javascript:void(0)">
									<div class="row mt-3 p-3"  style="background: white;" >
										<div class="col-sm-12">
											<span class="font-weight-bold">Have a gift Card ?</span> 
											<br>
											<span>Add to AJIO Wallet to pay for your orders</span>
										</div>	
										<div class="col-sm-12">
											<div class="row">
												<div class="col-6">
													<small><a href="<?= base_url('Home/TermAndCondition')?>" class="font-weight-bold" > T&C </a></small>	
												</div>
												<div class="col-6 text-right">
													<small><a href="javascript:void(0)" data-toggle="modal" data-target="#CheckBalance" class="font-weight-bold" >Check balance</a></small> &ensp;
													<small><a href="javascript:void(0)" data-toggle="modal" data-target="#AddBalance"  class="font-weight-bold" >Add</a></small>
												</div>
											</div>
										</div>
									</div>
								</a>-->
								
								
								<a href="<?= base_url('Home/SpendingHistory') ?>">
									<div class="row mt-3 p-3"  style="background: white;" >
										<div class="col-sm-12">
											<span class="font-weight-bold">Spending History</span> 
											<span class="float-right"><i class="fas fa-angle-right"></i></span>
										</div>	
									</div>
								</a>
								
								
								<a href="<?= base_url('Home/FAQs') ?>">
									<div class="row mt-3 p-3"  style="background: white;" >
										<div class="col-sm-12">
											<span class="font-weight-bold">Frequently Asked Questions</span> 
											<span class="float-right"><i class="fas fa-angle-right"></i></span>
										</div>	
									</div>
								</a>
								
								
							</div>
						</div>   
					</div>
				</div>
				
				
				
				<!-- Modal -->
				<div class="modal fade" id="CheckBalance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-sm">
						<div class="modal-content">
							<div class="modal-header" style="border-bottom: 0px;">
								<h6 class="modal-title" id="exampleModalLabel">Check Gift Card Balance</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>	
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Card Number</label>
									<input type="number" name="cardNumber"  class="form-control form-control-lg" placeholder="XXXX  XXXX XXXX - 1233">
								</div>
								<div class="form-group">
									<label>PIN</label>
									<input type="number" name="cardNumber"  class="form-control form-control-lg" placeholder="********">
								</div>
								<div class="form-group">
									<button class="btn btn-secondary btn-block">Check Balance</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Modal -->
				<div class="modal fade" id="AddBalance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
				<div class="modal-header" style="border-bottom: 0px;">
				<h6 class="modal-title" id="exampleModalLabel">Enter Gift Card Details</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>	
				
				</div>
				
				<div class="modal-body">
				
				<div class="row">
				<div class="col-sm-12">
				<small class="">The value of your Gift Card will be added to Slick Wallet. You can use it to pay for your orders</small>  
				</div>	
				</div>
				<br>
				
				<div class="form-group">
				<label>Card Number</label>
				<input type="number" name="cardNumber"  class="form-control form-control-lg" placeholder="XXXX  XXXX XXXX - 1233">
				</div>
				<div class="form-group">
				<label>PIN</label>
				<input type="number" name="cardNumber"  class="form-control form-control-lg" placeholder="********">
				</div>
				<div class="form-group">
				<button class="btn btn-secondary btn-block">Add To Slick Wallet</button>
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
								