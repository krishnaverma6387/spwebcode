
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Gift Cards</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
			}
			}
			.icon {
			font-size: 2rem;
			}
			.slide-toggle{
			display:none!important;
			}
			.faq-section .mb-0 > a {
			display: block;
			position: relative;
			}
			.faq-section .mb-0 > a:after {
			content: "+";
			font-family: "Font Awesome 5 Free";
			position: absolute;
			right: 0;
			font-weight: 600;
			}
			.faq-section .mb-0 > a[aria-expanded="true"]:after {
			content: "-";
			font-family: "Font Awesome 5 Free";
			font-weight: 600;
			}
			.fa-heart:hover{
			color: #FF1493;
			}
			.fa-share:hover{
			color: #FF1493;
			}
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.product article .pro-thumb .img-fluid {
			height: 370px!important;
			width: 100%!important;
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
						<li class="breadcrumb-item active" aria-current="page">Gift Cards</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content blog-content blog-content-page">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<h1 class="text-uppercase"> Gift Cards
							</h1>
							<p>Vitae posuere urna blandit sed. Praesent ut dignissim risus. </p>
						</div>
					</div>
					<div class="col-sm-6">
						<div role="tabpanel" class="tab-pane fade active show" id="featured">
							<div class="tab-carousel-js-giftcard row">
								<div class="col-12 col-sm-6 col-md-4 col-lg-3">
									<div class="product">
										<article>
											<a href="#">
												<div class="pro-thumb ">
													<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/products/PNG_700x.png?v=1649134482" alt="Product Image"></span>
												</div></a>
										</article>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-3">
									<div class="product">
										<article>
											<a href="#"><div class="pro-thumb ">
												
												<span class="pro-image"><img class="img-fluid lazy" data-src="https://cdn.shopify.com/s/files/1/2337/7003/products/PNG_700x.png?v=1649134482" alt="Product Image"></span>
												
											</div></a>
										</article>
									</div>
								</div>
								
							</div>
							<!-- 1st tab -->
						</div>
					</div>   
					<div class="col-sm-6">
						<div class="card shadow">
							<div class="card-header">
								<div class="row">
									<div class="col-sm-6"><span>SlickPattern Gift Card</span></div>  
									<div class="col-sm-6">
										<div class="icon-wrap text-right">
											<a href="#"><i class="far fa-heart" title="Like"></i></a>
											<a href="#"><i class="bi bi-share" title="Share"></i></a>
										</div>
									</div>  
								</div>   
							</div>
							<div class="card-body">
								<div class="wrap-content my-4">
									<h2>Rs. 5,000</h2>	
								</div>
								<div class="row mt-4">
									<div class="col-sm-12 col-12">
										<p class="" style="font-weight: 800;">Value</p>	
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<span class="badge badge-secondary p-3 mt-1" style="border-radius: 10px;">Rs 5000</span>
										<p class="text-center mt-2">
											<a href="#" class="btn btn-secondary btn-lg mt-1">Add to cart</a>
											<a href="<?= base_url('Home/BuyIt') ?>" class="btn btn-secondary btn-lg mt-1">Buy it now</a>
										</p>
									</div>
								</div>
								<hr>
								<div class="flex flex-column faq-section">
									<div class="row">
										<div class="col-md-12">
											<div id="accordion">
												<div class="card">
													<div class="card-header" id="heading-1">
														<h5 class="mb-0">
															<a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
															</span>Gift Card Details</span>
													</a>
												</h5>
											</div>
											
											<div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
												<div class="card-body">
													<p class="text-justify">Whether you are looking for the perfect present for her or him or for a special occasion, why not choose the endless gifting possibilities of a SlickPattern Gift Card?</p>
													<p class="text-justify">SlickPattern Gift Card can be purchased in the given four values and will be sent to you via an exclusive email.</p>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="heading-2">
												<h5 class="mb-0">
													<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														<span>BUYERS-PROTECTION</span>
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
												<div class="card-body">
													After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div>
					</div>
				</div>	
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																				