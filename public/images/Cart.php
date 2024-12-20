
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
		<style>
			
			/*.slick-arrow {
			opacity: 2!important; 
			}
			.slick-slider:hover .slick-arrow {
			display: block!important;
			background: #8340A1;
			opacity: 1 !important;
			}*/
			
			/*.slick-next:before {
			content: '>' !important;
			}
			
			.slick-prev:before {
			content: '\f30a'!important;
			}*/
			
			
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
			}
			.active{
			color: #8340A1!important;
			}
			.popular-product article .pro-thumb {
			width: 100%!important;
			
			}
			.popular-product article .pro-description{
			border: 0px solid !important;
			}
			
			.popular-product article .pro-thumb .img-fluid {
			display: inherit;
			width: inherit;
			margin-left: auto;
			margin-right: auto;
			height: 400px;
			width: 100%!important;
			}
			.popular-product article .pro-description {
			display: flex;
			align-items: flex-start!important;
			}
		    
			
			
			
			
			.bagicon{
			position: absolute;
			bottom: -4px;
			left: 13px;
			display: block;
			height: 45px;
			line-height: 45px;
			padding: 0 10px;
			z-index:9999;
			}
			
			.baseicons
			{
			display:none;
			z-index:9999!important;
			position: absolute;
			background:#f7f7f9b5;
			/*width: 100%;*/
			padding: 10px;
			bottom: 45px;
			line-height: 45px
			
			}
			
			
			.popular-product article .pro-thumb:after {
			content: "";
			position: absolute;
			z-index: 1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			border-color: rgba(255, 255, 255, 0.2);
			border-style: solid;
			border-width: 0;
			-webkit-transition-property: border-width;
			transition-property:none;
			-webkit-transition-duration: 0s;
			transition-duration: 0s;
			-webkit-transition-timing-function: none!important;
			transition-timing-function: none!important;
			}
			
			.popular-product article:hover .pro-thumb:after {
			-webkit-transform: none!important;
			transform: none!important;
			border-width: 6px;
			animation: none!important;
			}
			
			
			.slick-prev, .slick-next {
			background:none!important;
			position: absolute;
			top: -30px;
			}
			
			
			.slick-prev:before, .slick-next:before
			{
			color: #8340A1!important;
			}
			.slick-prev{
			left: 93%;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.slick-prev{
			left: 95%;
			}
			.bagicon {
			left: 29px;
			}
			.hidecontent{
			display:none;
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
						<li class="breadcrumb-item active" aria-current="page">Cart</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<section class="pro-content cart-content">      
			<div class="container"> 
				<div class="row">
					<div class="pro-heading-title" style="padding-bottom: 16px; font-weight: 600">
						<h1>
							<a class="active" href="<?= base_url('Home/Cart') ?>">Cart (0)</a> &ensp;
							<a href="<?= base_url('Home/Wishlist') ?>">Wishlist (0)</a>
						</h1>
					</div>
				</div>
				<div class="row mb-5 d-none">
					<div class="col-sm-5">
						<div class="alert alert-light" role="alert">
							<span style="font-size: 10px;">Items in the basket are not reserved until completing the purchase.</span>
						</div>  
					</div>	
				</div>
			</div>
			
			<?php
				$cartStatus = 'false';	
			?>
			<!-- Popular Products -->
			<section class="pro-content pro-pl-content">
				<div class="container-fluid" style="max-width: 90%;"> 
					<?php
						if($cartStatus == 'false'){	
						?>
						<div class="products-area">
							<div class="popular-carousel-js row">                         
								<div class="col-6 col-md-6 col-lg-6">
									<h6>Product Title</h6>
									<div class="popular-product">
										<article style="heigth: 410px;"> 
											<div class="pro-thumb" > 
												<a href="#">
													<span class="pro-image"><img class="img-fluid" src="https://static.zara.net/photos///2022/I/0/1/p/7385/537/610/2/w/378/7385537610_1_1_1.jpg?ts=1660745007498" alt="Product Image"></span>
												</a>
												<div class=" row baseicons">
													<div class="col-sm-12 ">
														<a href="javascript:void(0)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-danger p-1" style="border-radius: 15px;">Gift Wrap</span></a>
														<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-danger p-1" style="border-radius: 15px;">Apply Coupon</span></a>
													</div>
												</div>
												<div class="bagicon">
													<a href="javascript:void(0)" onclick="showSection()" ><img src="<?= base_url('public/images/bag-icon.jpeg') ?>" style="height: 30px;"></a>
												</div>
											</div>
											
											<div class="pro-description row ">
												<div class="col-12">
													<span class="pro-info">
														REF. |  1723213                     
													</span> <br/>
													<span class="pro-info">
														AUBERGINE
													</span> <br/>
													<span class="pro-info">
														Size
													</span> <br/>
													
													<div class="pro-options mt-1">
														
														<div class="size-selection">
															<div class="input-group item-quantity">
																<input type="text" id="quantity1" name="quantity" class="form-control" value="2" >
																<span class="input-group-btn">
																	<button type="button" value="quantity1" class="quantity-plus btn"  data-type="plus" data-field="">
																		<span class="fas fa-plus"></span>
																	</button>
																	<button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
																		<span class="fas fa-minus"></span>
																	</button>
																</span>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-12">
													<div class="pro-options">
														<span class="pro-info">
															₹ 5,780.00                   
														</span> 
													</div>
													
												</div>
												<br></br>
												<div class="col-12 mt-5">
													<div class="pro-options">
														<span class="pro-info">
															<a href="javascript:void(0)" tiltlt="move to wishlist"><i class="bi bi-suit-heart"></i>&nbsp; Wishlist</a>                  
														</span> <br/>
														<span class="pro-info">
															<a href="javascript:void(0)" title="Delete"><i class="bi bi-trash"></i>delete</a>                                              
														</span> <br/>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
								
								<div class="col-6 col-md-6 col-lg-6">
									<h6>Product Title</h6>
									<div class="popular-product">
										<article> 
											<div class="pro-thumb"> 
												<a href="#">
													<span class="pro-image"><img class="img-fluid" src="https://static.zara.net/photos///2022/I/0/1/p/7385/523/941/2/w/378/7385523941_1_1_1.jpg?ts=1660745002315" alt="Product Image" alt="Product Image"></span>
												</a>
												<div class=" row baseicons">
													<div class="col-sm-12 ">
														<a href="javascript:void(0)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-danger p-1" style="border-radius: 15px;">Gift Wrap</span></a>
														<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-danger p-1" style="border-radius: 15px;">Apply Coupon</span></a>
													</div>
												</div>
												<div class="bagicon">
													<a href="javascript:void(0)" class="showSection()"><img src="https://assets.ajio.com/static/img/wishlist-bag-icon.svg"></a>
												</div>
											</div>
											<div class="pro-description row">
												<div class="col-12">
													<span class="pro-info">
														REF. |  1723213                     
													</span> <br/>
													<span class="pro-info">
														AUBERGINE
													</span> <br/>
													<span class="pro-info">
														Size
													</span> <br/>
													
													<div class="pro-options mt-1">
														
														<div class="size-selection">
															<div class="input-group item-quantity">
																<input type="text" id="quantity1" name="quantity" class="form-control" value="2" >
																<span class="input-group-btn">
																	<button type="button" value="quantity1" class="quantity-plus btn"  data-type="plus" data-field="">
																		<span class="fas fa-plus"></span>
																	</button>
																	<button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
																		<span class="fas fa-minus"></span>
																	</button>
																</span>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-12">
													<div class="pro-options">
														<span class="pro-info">
															₹ 5,780.00                   
														</span> 
													</div>
												</div>
												<br></br>
												<div class="col-12 mt-5">
													<div class="pro-options">
														<span class="pro-info">
															<a href="javascript:void(0)" tiltlt="move to wishlist"><i class="bi bi-suit-heart"></i>&nbsp; Wishlist</a>
														</span> <br/>
														<span class="pro-info">
															<a href="javascript:void(0)" title="Delete"><i class="bi bi-trash"></i> Delete</a>                    
														</span> <br/>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
								
								<div class="col-6 col-md-6 col-lg-6">
									<h6>Product Title</h6>
									<div class="popular-product">
										<article> 
											<div class="pro-thumb"> 
												<a href="#">
													<span class="pro-image"><img class="img-fluid" src="https://static.zara.net/photos///2022/I/0/1/p/7385/537/610/2/w/378/7385537610_1_1_1.jpg?ts=1660745007498" alt="Product Image"></span>
													
												</a>
												<div class="bagicon">
													<a href="javascript:void(0)"><img src="https://assets.ajio.com/static/img/wishlist-bag-icon.svg"></a>
												</div>
											</div>
											<div class="pro-description row">
												<div class="col-12">
													<span class="pro-info">
														REF. |  1723213                     
													</span> <br/>
													<span class="pro-info">
														AUBERGINE
													</span> <br/>
													<span class="pro-info">
														Size
													</span> <br/>
													
													<div class="pro-options mt-1">
														
														<div class="size-selection">
															<div class="input-group item-quantity">
																<input type="text" id="quantity1" name="quantity" class="form-control" value="2" >
																<span class="input-group-btn">
																	<button type="button" value="quantity1" class="quantity-plus btn"  data-type="plus" data-field="">
																		<span class="fas fa-plus"></span>
																	</button>
																	<button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
																		<span class="fas fa-minus"></span>
																	</button>
																</span>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-12">
													<div class="pro-options">
														<span class="pro-info">
															₹ 5,780.00                   
														</span> 
													</div>
													
												</div>
												<br></br>
												<div class="col-12 mt-5">
													<div class="pro-options">
														<span class="pro-info">
															<a href="javascript:void(0)" tiltlt="move to wishlist"><i class="bi bi-suit-heart"></i>&nbsp; Wishlist</a>              
														</span> <br/>
														<span class="pro-info">
															<a href="javascript:void(0)" title="Delete"><i class="bi bi-trash"></i>Delete </a>                                  
														</span> <br/>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
								
								<div class="col-6 col-md-6 col-lg-6">
									<h6>Product Title</h6>
									<div class="popular-product">
										<article> 
											<div class="pro-thumb"> 
												<a href="#">
													<span class="pro-image"><img class="img-fluid" src="https://static.zara.net/photos///2022/I/0/1/p/2010/869/941/2/w/377/2010869941_6_1_1.jpg?ts=1660058020560" alt="Product Image"></span>
													
												</a>
												<div class="bagicon">
													<a href="javascript:void(0)"><img src="https://assets.ajio.com/static/img/wishlist-bag-icon.svg"></a>
												</div>
											</div>
											<div class="pro-description row">
												<div class="col-12">
													<span class="pro-info">
														REF. |  1723213                     
													</span> <br/>
													<span class="pro-info">
														AUBERGINE
													</span> <br/>
													<span class="pro-info">
														Size
													</span> <br/>
													
													<div class="pro-options mt-1">
														
														<div class="size-selection">
															<div class="input-group item-quantity">
																<input type="text" id="quantity1" name="quantity" class="form-control" value="2" >
																<span class="input-group-btn">
																	<button type="button" value="quantity1" class="quantity-plus btn"  data-type="plus" data-field="">
																		<span class="fas fa-plus"></span>
																	</button>
																	<button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
																		<span class="fas fa-minus"></span>
																	</button>
																</span>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-12">
													<div class="pro-options">
														<span class="pro-info">
															₹ 5,780.00                   
														</span> 
													</div>
													
												</div>
												<br></br>
												<div class="col-12 mt-5">
													<div class="pro-options">
														<span class="pro-info">
															<a href="javascript:void(0)" tiltlt="move to wishlist"><i class="bi bi-suit-heart"></i>&nbsp; Wishlist</a>               
														</span> <br/>
														<span class="pro-info">
															<a href="javascript:void(0)" title="Delete"><i class="bi bi-trash"></i> delete</a>                        
														</span> <br/>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
						<?php
						}else
						{
						?>
						<div class="row">
							<div class="col-sm-4 mx-auto shadow-lg">
								<img src="<?= base_url('public/images/shipping_bag.jpg') ?>" class="img-fluid w-100" >
								<h2 class="text-center mt-3">Your Shopping cart is empty!</h2>
								<p class="text-center mt-2">Look like you haven't added anythig to your cart Let's change that.</p>
								<p class="text-center"><a href="<?= base_url('Home/Product') ?>" class="btn btn-primary">Back to shopping</a></p>
							</div>  
						</div>
						<?php
						}
					?>
					
				</div>
			</section> 
			
			
			
			<div class="container">
				<div class="row  my-3 mr-auto  " id="footerab" style="position: relative">
					<div class="col-sm-4 p-3 hidecontent"></div>	
					<div class="col-sm-4 p-3 hidecontent"></div>	
					<div class="col-sm-4 p-3 bg-light">
						<div class="row">
							<div class="col-sm-5 col-6">
								<span>Total :  ₹12333 </span> <br>
								<span class=" ml-2" style="font-size: 7px;">INCLUDING GST</span> <br>
								<span class="ml-1" style="font-size: 7px;">- EXCL SHIPPING COST</span>
								
							</div>  
							<div class="col-sm-7 col-6">
								<a href="<?= base_url('Home/Checkout') ?>" class="btn btn-secondary  hvr-wobble-horizontal">Continue &ensp;<i class="fa fa-angle-right"></i></a>
							</div>  
						</div>
					</div>	
				</div>
			</div>
			
			
			<div class="container-fluid" style="max-width: 85%;">
				<div class="products-area">
					
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<h2 class="text-uppercase">YOU MAY ALSO LIKE</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-12">
							<div role="tabpanel" class="tab-pane fade active show" id="featured">
								<div class="tab-carousel-js row">
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage2.webp" alt="Product Image"></span>
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage3.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage4.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
											</article>
										</div>
									</div>
									
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy " src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy" data-src="<?= base_url('public') ?>/uploads/product/sliderimage2.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage3.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb ">
													<a href="">
														<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/uploads/product/sliderimage4.webp" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description text-dark">
													<span class="pro-info">
														Earrings
													</span> <br>
													<span>₹ 5,990.00</span>
													<del>₹ 6,990.00</del> <br>
													<span>MRP incl. of all taxes</span> <br> 
													<button class="btn btn-secondary mt-2">Add To Bag</button>
												</div>
												
											</article>
										</div>
									</div>
								</div>
								<!-- 1st tab -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
		<!-- Modal -->
		<div class="modal fade" id="CouponModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Apply Coupon</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Enter Coupon code" aria-label="Recipient's username" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<a href="#"><span class="input-group-text text-danger" id="basic-addon2">Check</span></a>
										</div>
									</div>  
								</div>  
							</div>	
						</div>
						<div class="row">
							<div class="col-sm-12" id="couponsection">
								<div class="p-3">
									<input type="radio" id="huey" name="drone" value="huey"
									checked>
									<label for="huey">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3">
									<input type="radio" id="huey" name="drone" value="huey"
									>
									<label for="huey">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3">
									<input type="radio" id="huey" name="drone" value="huey"
									>
									<label for="huey">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
							</div>	
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6 ">  <p>Maximum Saving: ₹200</p>  </div>
						<div class="col-6 "><button type="button" class="btn btn-secondary btn-block">Apply</button>	</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!--gift wrap modal--->
		<div class="modal fade" id="GiftWrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header" style="border:none;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-4">
									<span>Gift Wrapping</span><br>
									<span class="font-weight:bold"><h3>Make It Special</h3></span>
								</div>
								<div class="form-group">
									<input type="text" name="" class="form-control form-control-lg" placeholder="Recipient Name">   
								</div>
								<div class="form-group">
									<textarea class="form-control" name="" placeholder="Message(200/200)" rows="5"></textarea> 
								</div>
								<div class="form-group">
									<input type="text" name="" class="form-control form-control-lg" placeholder="Sender Name">   
								</div>
								<div class="form-group">
									<label ><span class="text-danger font-weight-bold">Please Note: </span><span>Gift wrapping is not available for Pay on Delivery orders.</span></label>
								</div>
								<div class="form-group">
									<button class="btn btn-secondary btn-block">Apply Gift Wrap</button>	
								</div>
							</div>	
							<div class="col-sm-6">
								<center><img src="<?= base_url('public/images/giftwrap.png') ?>" class="img-fluid" style="height: 120px; width: 90%"></center>
								<h6 class="mt-3">HOW DOES IT WORKS?</h6> 
								<div class="row mt-2">
									<div class="col-3 ">
										<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-card.webp" class="img-fluid" style="height: 45px;"></center>
									</div>	
									<div class="col-9">
										<span class="font-weight-bold">Personalised card</span>  <br>
										<small>Your message will be printed on a card placed inside the package.</small>
									</div>	
								</div>
								<div class="row mt-2">
									<div class="col-3 ">
										<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-invoice.webp" class="img-fluid" style="height: 45px;"></center>
									</div>	
									<div class="col-9">
										<span class="font-weight-bold">Invoice will be included</span>  <br>
										<small>The receiver will get an invoice showing the amount you pay or the discount applied.</small>
									</div>	
								</div>
								<div class="row mt-2">
									<div class="col-3 ">
										<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-tag.webp" class="img-fluid" style="height: 45px;"></center>
									</div>	
									<div class="col-9">
										<span class="font-weight-bold">Original product tags will be retained</span>  <br>
										<small>Original product tags with MRP will be left intact in-case you’d like to exchange for a different size.</small>
									</div>	
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		<script>
			function showSection(){
				jQuery(".baseicons").toggle();
			} 	
		</script>
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																																																																																																																																																																																																																																																																																																																																					