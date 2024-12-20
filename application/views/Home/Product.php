
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Listing</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
		<style>
			.form-control-file, .form-control-range {
			height: 1px;
			}
			.btn-outline-secondary {
			color: black !important;
			}
			.btn-outline-secondary:hover {
			color: white!important;
			background-color: #8340A1 !important;
			border-color: #b38741;
			}
			.sizebtn{
			padding: 16px!important;
			}
			button.sizebtn{
			line-height: 0.5!important;
			}
			.icon {
			font-size: 2rem;
			}
			.fas:hover{
			background:none!important;
			}
			.productimage {
			position: relative;
			width: 100%;
			}
			.middle {
			transition: .5s ease;
			opacity: 0;
			position: absolute;
			top: 80%;
			left: 50%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			
			}
			.productimage:hover .image {
			opacity: 0.3;
			}
			.productimage:hover .middle {
			opacity: 1;
			}
			.swiper-button-next{
			color: gray;
			}
			.swiper-button-prev{
			color: gray;
			}
			
			/* filter css */
			.faq-section .mb-0 > a {
			display: block;
			position: relative;
			}
			
			.faq-section .mb-0 > a:after {
			content: "\f067";
			font-family: "Font Awesome 5 Free";
			position: absolute;
			right: 0;
			font-weight: 600;
			}
			.faq-section .mb-0 > a[aria-expanded="true"]:after {
			content: "\f068";
			font-family: "Font Awesome 5 Free";
			font-weight: 600;
			}
			/* filter css */
			
			/*sidebar filte section css*/
			
			.sidenav {
			height: 100%; /* 100% Full-height */
			width: 0; /* 0 width - change this with JavaScript */
			position: fixed; /* Stay in place */
			z-index: 1; /* Stay on top */
			top: 0;
			background-color: white; /* Black*/
			overflow-x: hidden; /* Disable horizontal scroll */
			padding-top: 60px; /* Place content 60px from the top */
			transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
			}
			
			/* The navigation menu links */
			.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 15px;
			color: blabk;
			display: block;
			transition: 0.3s
			}
			
			/* When you mouse over the navigation links, change their color */
			.sidenav a:hover, .offcanvas a:focus{
			color: black;
			}
			
			/* Position and style the close button (top right corner) */
			.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
			}
			
			/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
			#main {
			transition: margin-left .5s;
			padding: 20px;
			}
			.sidenav {
			right: 0;
			}
			/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
			@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
			}
			.sidenav {
			right: 0;
			}
			/*sidebar filte section css*/
			
			/*Swiper css*/
			.swiper-slide {
			text-align: center;
			background: #fff;
			
			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
			}	
			.swiper {
			font-size: 7px;
			}
			/*Swiper css*/
		</style>
		<style>
			.productimage{
			position: relative;
			width: 100%;
			}
			.Overlay{
			position: absolute;
			top: -20px;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: .3s ease;
			background-color: transparent;
			}
			.productimage:hover .Overlay {
			opacity: 1;
			}
			.XlargeImgContainer{
			position: relative;
			width: 100%;
			}
			.XlargeImgContainer:hover .largeOverlay {
			opacity: 1;
			}
			
			.largeImgContainer {
			position: relative;
			width: 100%;
			max-width: 400px;
			}
			.largeOverlay {
			position: absolute;
			top: -20px;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: .3s ease;
			background-color: transparent;
			}
			
			.largeImgContainer:hover .largeOverlay {
			opacity: 1;
			}
			
			.iconrow{
			position: relative;
			top: 600px;
			}
			.iconrow2{
			position: relative;
			top: 320px;
			}
			
			.btn-sm {
			padding-top: 5px !important;
			padding-left: 10px!important;
			padding-right: 10px!important;
			padding-bottom: 5px!important;
			}
		</style>
	</head>
    <body>  
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item font-weight-bold active" aria-current="page">Products</li>
					</ol>
					
					<span class="breadcrumb-item active " aria-current="page">Ethnic Top Wear For Mens- 4512 items</span>
					
				</div>
			</nav>
		</div> 
        <section class="pro-content product-content">
            <div class="container">                       
				<div class="product-detail-info">  
					<div class="row">
						<div class="col-sm-3 col-3">
							<i class="fa fa-th-large" style="color: #8340A1;"></i> 
							<i class="fa fa-bars" style="color: #8340A1;"></i>
						</div>
						<div class="col-sm-6 col-6">
							<div class="item-nav">
								<!-- Swiper -->
								<div class="swiper mySwiper">
									<div class="swiper-wrapper">
										<a href="#" class="swiper-slide text-uppercase">View All</a>
										<a href="#" class="swiper-slide text-uppercase">Textured</a>
										<a href="#" class="swiper-slide text-uppercase">Black </a>
										<a href="#" class="swiper-slide text-uppercase">Croppped</a>
										<a href="#" class="swiper-slide text-uppercase">Waistcoats</a>
										<a href="#" class="swiper-slide text-uppercase">Linen</a>
										<a href="#" class="swiper-slide text-uppercase">Waistcoats</a>
									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-3">
							<p class="text-right"><button class="btn btn-sm btn-outline-secondary customization_popup_trigger" onclick="openNav()">filter</button></p>	
						</div>
					</div>	
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-7 mx-auto ">
								<h2>T-SHIRTS FOR WOMEN</h2>
								<small class="text-justify">OUR NEW ONLINE COLLECTION OF WOMEN'S T-SHIRTS HAS EVERYDAY BASICS AS WELL AS TREND-FOCUSSED STATEMENT PIECES. FROM BRETON STRIPED TOPS TO UNIQUE SLOGANS, EMBELLISHED DESIGNS TO PRINTED PATTERNS, OUR EDIT IS PACKED WITH VARIETY TO SWITCH UP YOUR CASUAL STYLE. BLACK OR WHITE T-SHIRTS CAN BECOME</small> </br>
								<a href="#" class="font-weight-bold">View More</a>
							</div>
							<div class="col-sm-6 mx-auto mt-4">
								<div class="largeImgContainer">
									<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0264/531/250/12/w/607/0264531250_1_1_1.jpg?ts=1654863944226" class="img-fluid" style="height: 700px"></a>
									<div class="largeOverlay">
										<div class="row text-center iconrow">
											<div class="col-4 col-sm-4"><center><button class="btn btn-secondary" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px;" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
											<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
											<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div> 
				</div>
				
				<div class="row mt-4">
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							
						</div>
						<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
						<span class="float-right">₹600</span>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							
						</div>
						<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
						<span class="float-right">₹600</span>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							
						</div>
						<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
						<span class="float-right">₹600</span>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							
						</div>
						<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
						<span class="float-right">₹600</span>
					</div>
					
				</div>
				<div class="row mt-5 ">
					<div class="col-sm-5 mx-auto">
						<div class="largeImgContainer">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0264/532/800/12/w/607/0264532800_2_1_1.jpg?ts=1654863943979" class="img-fluid" style="height: 700px"></a>
							<div class="largeOverlay">
								<div class="row text-center iconrow">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px;" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div> 
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/732/615/2/w/449/3905732615_6_1_1.jpg?ts=1646903383426" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2021/V/0/1/p/0264/532/706/2/w/449/0264532706_6_1_1.jpg?ts=1612171236615" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/0264/532/250/2/w/449/0264532250_6_1_1.jpg?ts=1650529051665" class="img-fluid"></a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid">	</a>
							<div class="Overlay">
								<div class="row text-center iconrow2">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div>
				</div>
				<div class="row mt-5 ">
					<div class="col-sm-5 mx-auto">
						<div class="largeImgContainer">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/0962/349/400/2/w/607/0962349400_2_1_1.jpg?ts=1653562350679" class="img-fluid" style="height: 700px"></a>
							<div class="largeOverlay">
								<div class="row text-center iconrow">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px;" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div> 
				</div>
				<div class="row mt-5 ">
					<div  class="col-sm-2"></div>
					<div class="col-sm-4 ">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0085/427/251/2/w/452/0085427251_1_1_1.jpg?ts=1653392355883" class="img-fluid" style="height: 600px"></a>
							<div class="Overlay">
								<div class="row text-center iconrow2" style="top:500px;">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div> 
					<div class="col-sm-4">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0085/427/800/2/w/452/0085427800_1_1_1.jpg?ts=1653392355864" class="img-fluid" style="height: 600px"></a>
							<div class="Overlay">
								<div class="row text-center iconrow2" style="top:500px;">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹800</span>
						</div>
					</div> 
					<div  class="col-sm-2"></div>
				</div>
				<div class="row mt-5 ">
					<div  class="col-sm-2"></div>
					<div class="col-sm-4 ">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0085/427/251/2/w/452/0085427251_1_1_1.jpg?ts=1653392355883" class="img-fluid" style="height: 600px"></a>
							<div class="Overlay">
								<div class="row text-center iconrow2" style="top:500px;">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹700</span>
						</div>
					</div> 
					<div class="col-sm-4">
						<div class="productimage">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/0085/427/800/2/w/452/0085427800_1_1_1.jpg?ts=1653392355864" class="img-fluid" style="height: 600px"></a>
							<div class="Overlay">
								<div class="row text-center iconrow2" style="top:500px;">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px; paddimg" ><i class="bi bi-eye fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary btn-sm" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div> 
					</div>
					<div  class="col-sm-2"></div>
				</div>
				<div class="row mt-5 ">
					<div class="col-sm-5 mx-auto">
						<div class="largeImgContainer">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/V/0/1/p/0858/019/420/2/w/607/0858019420_1_1_1.jpg?ts=1650383882673" class="img-fluid" style="height: 700px"></a>
							<div class="largeOverlay">
								<div class="row text-center iconrow">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px;" ><i class="bi bi-eye fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div> 
					</div>
				</div>
				<div class="row mt-5 ">
					<div class="col-sm-8 mx-auto">
						<div class="XlargeImgContainer">
							<a href="<?= base_url('Home/ProductDetails') ?>"><img src="https://static.zara.net/photos///2022/I/0/1/p/3641/303/620/12/w/1239/3641303620_9_1_1.jpg?ts=1654863929484" class="img-fluid" style="height: 700px"></a>
							<div class="largeOverlay">
								<div class="row text-center iconrow">
									<div class="col-4 col-sm-4"><center><button class="btn btn-secondary" data-toggle="modal" data-target="#quickViewModal" style="border-radius: 9px;" ><i class="bi bi-eye fa-2x text-white"></i></button></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-heart fa-2x text-white"></i></a></center></div>	
									<div class="col-4 col-sm-4"><center><a href="<?= base_url('Home/Compare') ?>" class="btn btn-secondary" style="border-radius: 9px;"><i class="bi bi-arrow-down-up fa-2x text-white"></i></a></center></div>	
								</div>
							</div>
							<a href="<?= base_url('Home/ProductDetails') ?>">Product Name</a>
							<span class="float-right">₹600</span>
						</div>
					</div> 
				</div>
			</section>
			<?php include('include/footer.php'); ?>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="card" style="border: 0px;">
								<div class="card-body">
									<div class="flex flex-column mb-5 mt-4 faq-section">
										<div class="row">
											<div class="col-md-12">
												<div id="accordion">
													<div class="card" style="border: 0px;">
														<div class="card-header " style="background-color: transparent; padding: 2px; border: 0px;" id="heading-1">
															<h5 class="mb-0">
																<a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
																	Category 
																</a>
															</h5>
														</div>
														<div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
															<div class="card-body">
																<ul style="list-style: none;">
																	<li class="p-1">Category1</li>	
																	<li class="p-1">Category2</li>	
																	<li class="p-1">Category3</li>	
																	<li class="p-1">Category4</li>	
																</ul>
															</div>
														</div>
													</div>
													<div class="card" style="border: 0px;">
														<div class="card-header"  style="background-color: transparent; padding: 2px; border: 0px;" id="heading-2">
															<h5 class="mb-0">
																<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
																	Sub-category
																</a>
															</h5>
														</div>
														<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
															<div class="card-body">
																<ul style="list-style: none;">
																	<li class="p-1">subcategory1</li>	
																	<li class="p-1">subcategory2</li>	
																	<li class="p-1">subcategory3</li>	
																	<li class="p-1">subcategory4</li>	
																</ul>
															</div>
														</div>
													</div>
													<div class="card" style="border: 0px;">
														<div class="card-header"  style="background-color: transparent; padding: 2px; border: 0px;" id="heading-2">
															<h5 class="mb-0">
																<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
																	Range
																</a>
															</h5>
														</div>
														<div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
															<div class="card-body">
																<ul style="list-style: none;">
																	<li class="p-1">subcategory1</li>	
																	<li class="p-1">subcategory2</li>	
																	<li class="p-1">subcategory3</li>	
																	<li class="p-1">subcategory4</li>	
																</ul>
															</div>
														</div>
													</div>
													<div class="card" style="border: 0px;">
														<div class="card-header"  style="background-color: transparent; padding: 2px; border: 0px;" id="heading-2">
															<h5 class="mb-0">
																<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-2">
																	Price
																</a>
															</h5>
														</div>
														<div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
															<div class="card-body">
																<ul style="list-style: none;">
																	<div class="form-group">
																		<small>499₹</small> <small class="float-right">4000₹</small>
																		<input type="range" class="form-control-range" id="formControlRange">
																	</div>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
						</div>  
					</div>	
				</div>
				
			</div>
	
			<?php include('include/jsLinks.php'); ?>
			
			<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
			<script>
				var swiper = new Swiper(".mySwiper", {
					slidesPerView: 4,
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
					// breakpoints: {
					// 460: {
					// slidesPerView: 1,
					// }
					// }
				});
			</script>
			
			<script>
				
				/* Simple appearence with animation AN-1*/
				function openNav() {
					document.getElementById("mySidenav").style.width = "400px";
				}
				function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				}
				/* Simple appearence with animation AN-1*/
				
				
				</script>
				<script type="application/ld+json">{
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Nike Revolution 6 Men's Road Running Shoes",
      "image": "https://static.nike.com/a/images/t_default/2a87e3da-58fd-4cdf-8b11-aee7501a8ac5/revolution-6-road-running-shoes-NC0P7k.png",
      "description": "Find the Nike Revolution 6 at Nike.com. ",
      "brand": {
        "@type": "Thing",
        "name": "Nike"
      },
      "logo": "https://www.nike.com/Nike_Swoosh_Logo_Black_original.jpg",
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "3137",
        "highPrice": "3695",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "offerCount": "7",
        "offers": [{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3137,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"1000871328","releaseDate":"2023-01-15T16:00:00.000Z","color":"Football Grey/Cobalt Bliss/White/Black"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/OutOfStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3507,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"1012320039","releaseDate":"2023-06-21T16:00:00.000Z","color":"Racer Blue/High Voltage/Sundial/White"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3695,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"13712261","releaseDate":"2023-03-20T16:00:00.000Z","color":"Midnight Navy/Obsidian/Ashen Slate/White"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3695,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"13712153","releaseDate":"2022-09-30T16:00:00.000Z","color":"Black/Dark Smoke Grey/Black"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3695,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"1010089214","releaseDate":"2023-04-12T16:00:00.000Z","color":"Oatmeal/Oxygen Purple/Gridiron"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3695,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"13824204","releaseDate":"2023-03-20T16:00:00.000Z","color":"White/White/White"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"},{"@type":"Offer","url":"https://www.nike.com/in/t/revolution-6-road-running-shoes-NC0P7k","price":3695,"priceCurrency":"INR","itemOffered":{"@type":"IndividualProduct","name":"Nike Revolution 6 Men's Road Running Shoes","model":"13712167","releaseDate":"2022-09-30T16:00:00.000Z","color":"Black/Iron Grey/White"},"seller":{"@type":"Organization","name":"Nike"},"availability":"https://schema.org/InStock"}]
      }
      ,"aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "3.8",
        "reviewCount": "149",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [{"@type":"Review","author":"Thomas337210314","datePublished":"2023-09-20T09:06:58-04:00","name":"","reviewBody":"They were great until they ripped and my entire foot fell out 2 months after purchase","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":3,"worstRating":1}},{"@type":"Review","author":"Guiness","datePublished":"2023-09-15T00:00:01-04:00","name":"Excellent trainers . My 6th pair .","reviewBody":"Third time I have ordered various Nike Revolution trainers from Sports Direct . Excellent customer service .","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":5,"worstRating":1}},{"@type":"Review","author":"James Burdett","datePublished":"2023-09-15T00:00:01-04:00","name":"Nike Trainers","reviewBody":"The quality and comfort aren't 100%...","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":2,"worstRating":1}}]
    }</script>
				</body>
				</html>																																																																																																																																																																																																																																																																																																																																																											