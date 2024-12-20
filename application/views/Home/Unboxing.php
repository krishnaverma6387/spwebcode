
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Unboxing Videos</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
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
						<li class="breadcrumb-item active" aria-current="page">Unboxing Videos</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<h1 class="text-center pageheading mb-2 mt-2"><i class="fab fa-youtube"></i>Unboxing Video</h1>
				<div class="row">
					<div class="col-sm-3 p-1">
						<div class="card shadow">
							<div class="card-body">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
									<img src="<?= $this->data->lazyLoader;?>" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3lpn-J1_nyk8o9CdLVWmNnfE3RDYGT5azQ&usqp=CAU"class="img-fluid lazy lazy">	
								</a>
								
							</div> 
						</div>  
					</div>	
					<div class="col-sm-3 p-1">
						<div class="card shadow">
							<div class="card-body">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
									<img src="<?= $this->data->lazyLoader;?>" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3lpn-J1_nyk8o9CdLVWmNnfE3RDYGT5azQ&usqp=CAU"class="img-fluid lazy">	
								</a>
								
							</div> 
						</div>  
					</div>	
					<div class="col-sm-3 p-1">
						<div class="card shadow">
							<div class="card-body">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
								<img src="<?= $this->data->lazyLoader;?>" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3lpn-J1_nyk8o9CdLVWmNnfE3RDYGT5azQ&usqp=CAU"class="img-fluid lazy">	
								</a>
								
								</div> 
								</div>  
								</div>	
								<div class="col-sm-3 p-1">
								<div class="card shadow">
								<div class="card-body">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
								<img src="<?= $this->data->lazyLoader;?>" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3lpn-J1_nyk8o9CdLVWmNnfE3RDYGT5azQ&usqp=CAU"class="img-fluid lazy">	
								</a>
								
								</div> 
								</div>  
								</div>	
								<div class="col-sm-3 p-1">
								<div class="card shadow">
								<div class="card-body">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
								<img src="<?= $this->data->lazyLoader;?>" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH3lpn-J1_nyk8o9CdLVWmNnfE3RDYGT5azQ&usqp=CAU"class="img-fluid lazy">	
								</a>
								
								</div> 
								</div>  
								</div>
								</div>
								<div class="row mt-4">
								<div class="col-sm-12">
								<button class="btn btn-secondary">More</button>	
								<br>
								<br>
								<h2>Want to share? </h2>
								<ul style="list-style-type: number">
								<li>Record your unboxing</li>  
								<li>Upload to youtube</li>  
								<li>Mention "Fashionphile Unboxing"</li>  
								<li>See yourself here!</li>  
								</ul>
								</div>	
								</div>
								</div>
								</section>
								<?php include('include/footer.php'); ?>
								<?php include('include/jsLinks.php'); ?>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
								
								<script>
								jQuery(function() {
								jQuery('.popup-youtube, .popup-vimeo').magnificPopup({
								disableOn: 700,
								type: 'iframe',
								mainClass: 'mfp-fade',
								removalDelay: 160,
								preloader: false,
								fixedContentPos: false
								});
								});	
								</script>
								
								
								
								
								</body>
								</html>																														