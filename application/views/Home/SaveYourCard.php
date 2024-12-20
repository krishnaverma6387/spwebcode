
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Save Your Card</title>
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
			.logoimg
			{
			height: 14px;
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
						<li class="breadcrumb-item active" aria-current="page">Your Card</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 style="font-size : 22px;">Add Your Card</h1>  
					</div>
					<div class="col-sm-12">
					    <center>
							
							<img src="<?= base_url('public/images/card-img.jpg') ?>" class="img-fluid" style="height: 200px" >
							<h4 class="text-uppercase">Save Your Credit / Debit Cards </h4>
							<p>it's convenient to pay with saved card . Your card information will be secure, we userd 128 bit encryption. </p>
						</center>
						<p class="text-center"><button class="btn btn-secondary" onclick="AddCard()" >Add Card</button></>
					</div>
					
				</div>
			</div>
		</section>
		
		
		<!-- Modal -->
		<div class="modal fade" id="AddAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-uppercase" id="exampleModalLabel">Add New Credit/Debit Card</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<input type="number" class="form-control form-control-lg" name="" placeholder="Card Number *">
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" name="" placeholder="Card Name *">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<select class="form-control form-control-lg" style="font-size:10px;">
											<option selected disabled>Expiry Month</option>   
											<option>01(Jan)</option>   
										</select>	 
									</div>  
								</div>	
								<div class="col-sm-6">
									<div class="form-group">
										<select class="form-control form-control-lg" style="font-size:10px;">
											<option selected disabled>Expiry Year</option>   
											<option>2022</option>   
										</select>	 
									</div>	  
								</div>	
								<div class="col-sm-12">
								 <small>Expiry Month and Year not required if not mentioned on your card.</small>	
								</div>
							</div>
							<br>
							
							<div class="form-group">
								<div class="btn-group btn-block btn-group-toggle " data-toggle="buttons">
									<label class="btn btn-secondary">
										<input type="radio" name="options" class="customradio" id="option2" autocomplete="off"> <span class="font-weight-bold">SAVE</span>
									</label>&nbsp;
									<label class="btn btn-secondary">
										<input type="radio" name="options" id="option3" class="customradio" autocomplete="off"> <span class="font-weight-bold">CANCEL</span>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
		<script>
			function AddCard()
			{
				jQuery("#AddAddress").modal('show');
			}
		</script>
		
	</body>
</html>																								
