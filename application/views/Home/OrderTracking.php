
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Order Treacking</title>
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
						<li class="breadcrumb-item active" aria-current="page">Track Your Order</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content blog-content blog-content-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 mx-auto">
						<h1 class="text-center pageheading">Track Your Orders</h1>
						<p class="text-center">Please enter your email address and order number to track your order</p>
						<form action="#" method="POST">
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Enter your email address" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"> <i class="bi bi-telephone"></i></span>
								</div>
								<input type="email" class="form-control" placeholder="Enter your order number" aria-label="Username" aria-describedby="basic-addon1">
							</div>	
						</div>
						<div class="form-group">
						   <p class="text-center"><button type="button" class="btn btn-secondary"><i class="fa fa-truck"></i>&nbsp;Track</button></p>	
						</div>
						</form>
					</div>	  
				</div>	
			</div>
		</section>
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
		</body>
					</html>																																