
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
			.table-striped tbody tr:nth-of-type(odd) {
			background-color: rgb(195 107 140 / 25%);
			}
			.table-sm th, .table-sm td {
			padding: 0.1rem;
			font-weight: 600;
			border:none;
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
						<li class="breadcrumb-item active" aria-current="page">Beauty Consulatation</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="py-3 pb-5">
			<div class="container">
				<div class="row">
					<?php 
						if(!empty($list)){
							foreach($list as $each){
								$variantDetails=$this->db->get_where('product_variant',['id'=>$each->variant_id])->row();
								$productDetails=$this->db->get_where('products',['id'=>$each->product_id])->row();
								if(!empty($variantDetails->variant_img))
								{
									$icons = explode(',', $variantDetails->variant_img);
									}else{
									$icons = explode(',', $productDetails->image1);
								}
								date_default_timezone_set('Asia/Kolkata');
								$date=date('d-m-Y',strtotime($each->schedule_date));
								$time=date('h:i A',strtotime($each->schedule_time));
								$day=date('l',strtotime($each->schedule_date));
							?>
							<div class="col-sm-12">
								<div class="card shadow-sm" style="border-radius:5px; border:none;">
									<div class="card-header p-1 d-flex" style="background-color: #FA057E; color:white; border-radius:5px 5px 0 0; font-size: 14px;">
										<p class="mb-0 text-white" style="font-weight:500; ">Product Name:</p>&nbsp;<p class="mb-0 text-white"><?php if(!empty($productDetails->name)){echo $productDetails->name;}?></p>
									</div>  
									<div class="card-body row m-0 py-0" style="padding-top:0px;" >
										<div class="col-sm-1 col-3 px-0 pt-2 pb-0"><a href="<?= base_url('Home/ProductDetails/'.$each->product_id.'/'.$each->variant_id)?>"><img src="<?= base_url('uploads/product/') . $icons[0]; ?>" width="70" height="80"></a></div>
										<div class="col-sm-11 col-9 px-0 pt-2">
											<table class="table table-sm table-striped">
												<tr><td class="d-flex justify-content-between"><span>Schedule Date:</span><span><?= $date?></span></td></tr>
												<tr><td class="d-flex justify-content-between"><span>Schedule Time:</span><span><?= $time?></span></td></tr>
												<tr><td class="d-flex justify-content-between"><span>Schedule Day:</span><span><?= $day?><span></td></tr>
													<tr><td class="d-flex justify-content-between"><span>Schedule Status:</span><span class="mb-0 <?php if($each->schedule_status=='approved'){echo 'text-success';}else{echo 'text-danger';}?>"><?= ucfirst($each->schedule_status)?></span></td></tr>
												</table>  
												</div>   
											</div>
											<?php if($each->schedule_status=='approved'){?>
												<div class="card-footer p-1" style="background: lavender">
													<div>
														<p class="mb-0"><span>Consult With</span>&nbsp;<?= $each->consultant_name?></p>
														<p class="mb-0"><span>Join us:</span><a style="color:blue;" href="<?= $each->consultation_links?>"><?= $each->consultation_links?></a></p> 
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
						<?php } }?>
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
