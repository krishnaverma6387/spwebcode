
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Order History</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		
		<style>
			.nav-tabs ,.nav-item ,.nav-link
			{
			background: white!important;
			}
			
			.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
			color: #8834AD !important;
			font-weight: 800;
			background-color: #fff;
			border-color:white!important;
			border-bottom: 1px solid #8834AD !important;
			}
			.nav-tabs {
			border-bottom: 2px solid #dee2e6 !important;
			}
			.buyItBnt{
			padding-top: 6px !important;
			padding-left: 12px!important;
			padding-right: 12px!important;
			padding-bottom: 6px!important;
			font-size: 12px!important;
			border-radius: 5px;
			}
			.similar-btn{
			
			padding-top: 10px!important;
			padding-left: 25px!important;
			padding-right: 25px!important;
			padding-bottom: 10px!important;
			
			background: white!important;
			border: 1px solid #eddddd !important;
			font-weight: normal !important;
			border-radius: 10px;
			color: #0009!important;
			}
			.similar-btn:hover{
			background: #F7FAFA!important;
			}
			
			.popover-content {
			display: none;
			z-index:1!important;
			}
			
			/* optional shadow */
			.popover {
			-moz-box-shadow: 0 0 8px #5b7d83;
			-webkit-box-shadow: 0 0 8px #5b7d83;
			box-shadow: 0 0 8px #5b7d83;
			z-index: 1!important;
			}
			.orderid-sec{
			text-align: right;
			}
			#filterData{
			display:inline; 
			width: 12%;
			border-radius: 5px;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.orderid-sec{
			text-align: left;
			maring-top: 10px;
			}
			.sec-down{
			margin-top: 15px;
			margin-bottom: 15px;
			}
			#filterData{
			display:inline; 
			width: 58%;
			border-radius: 5px;
			}
			.nav{
			flex-direction: column;
			}
			.button-block{
			display: block;
			width: 100%;
			border: none;
			background-color: #8834AD !important;
			padding: 14px 28px;
			color: white;
			cursor: pointer;
			text-align: center;
			}
			.items{
			 margin-top: 5px;
			}
			.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
			  color: white !important;
			  background: #FA057E !important;
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
						<li class="breadcrumb-item active" aria-current="page">Your Orders </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6">
						<h1 style="font-size : 22px;">Your Orders</h1>  
					</div>
					<div class="col-12 col-sm-6">
						<div class="row">
							<div class="col-sm-8 col-7 ">
								<div class="form-group">
									<input type="text" name="search" placeholder="Search all order" class="form-control form-control-lg">	
								</div>  
							</div>	 
							<div class="col-sm-4 col-5">
								<button class="btn btn-secondary">Search</button>  
							</div>	 
						</div>  
					</div>
				</div>	
				<!--start tab section --->
				<div class="row">
					<div class="col-sm-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active button-block" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Orders</button>
							</li>
							<li class="nav-item items" role="presentation">
								<button class="nav-link button-block" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Buy Again</button>
							</li>
							<li class="nav-item items" role="presentation">
								<button class="nav-link button-block" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Not Yet Shipped</button>
							</li>
							<li class="nav-item items" role="presentation">
								<button class="nav-link button-block" id="contact-tab" data-toggle="tab" data-target="#concelledorder" type="button" role="tab" aria-controls="concelle-dorder" aria-selected="false">Cancelled Orders</button>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row mt-3">
									<div class="col-12">
										<span> <span class="font-weight-bold">23 Orders</span> placed in </span>
									    <select class="form-control" id="filterData" >
											<option>Last 30 Days</option>	 
											<option>Last 30 Days</option>	 
										</select>  
									</div>
								</div>
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-sm-4 col-6">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
															</div>	 
															<div class="col-sm-3 col-6">
																<span>ORDER TYPE</span> <br>
																<span class="font-weight-bold">SALE</span>
															</div>	
															<div class="col-sm-3 col-6 sec-down">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-sm-2 col-6 sec-down">
																<span>SHIP TO</span> <br>
																<a href="javascript:void(0)" id="pover-card" class="font-weight-bold text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus"  >Rahul<i class="fas fa-angle-down"></i></a> 
															</div>	 
														</div>
													</div>	
													
													<div class="col-12 col-sm-6  orderid-sec">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Delivered 23-Aug-2022</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 my-2">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		<button class="btn btn-secondary buyItBnt my-2" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																	</div>	
																</div>
															</div>	 
															<div class="col-sm-4">
																<a href="<?= base_url('Home/TrackPackage') ?>" class="btn btn-block similar-btn">Track Packege</a>	
																<button class="btn btn-block similar-btn">Return Items</button>	
																<button class="btn btn-block similar-btn" onclick="GiftReceipt()" >Share Gift Receipt</button>	
																<a href="<?= base_url('Home/ProductReview')?>" class="btn btn-block similar-btn">Write a product review</a>	
															</div>	 
														</div>  
													</div>
												</div>	
											</div>
											
										</div>	
									</div>	 
								</div>
								<!--content section end-->
								
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-sm-4 col-6">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
																
															</div>	 
															<div class="col-sm-3 col-6">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-sm-3 col-6 sec-down">
																<span>SHIP TO</span> <br>
																<a href="javascript:void(0)" class="font-weight-bold text-info" id="pover-card" data-placement="bottom" data-toggle="popover" data-trigger="focus">Rahul Singh <i class="fas fa-angle-down"></i></a> 
															</div>	 
														</div>
													</div>	
													<div class="col-12 col-sm-6 orderid-sec">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Delivered 23-Aug-2022</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 my-2">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		<button class="btn btn-secondary buyItBnt my-2" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																	</div>	
																</div>
															</div>	 
															<div class="col-sm-4">
																<a href="<?= base_url('Home/ProductFeedback') ?>" class="btn btn-block similar-btn">Leave seller feedback</a>	
																<a href="<?= base_url('Home/ProductReview')?>" class="btn btn-block similar-btn">Write a product review</a>	
																<button class="btn btn-block similar-btn" onclick="GiftReceipt()">Share Gift Receipt</button>	
															</div>	 
														</div>  
													</div>
												</div>	
											</div>
											
										</div>	
									</div>	 
								</div>
								<!--content section end-->
								
								
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-4">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
																
															</div>	 
															<div class="col-3">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-3">
																<span>SHIP TO</span> <br>
																<span class="font-weight-bold text-info">Rahul Singh <i class="fas fa-angle-down"></i></span> 
															</div>	 
														</div>
													</div>	
													<div class="col-12 col-sm-6 text-right">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Delivered 23-Aug-2022</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 ">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		<button class="btn btn-secondary buyItBnt" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																	</div>	
																</div>
															</div>	 
															<div class="col-sm-4">
																<button class="btn btn-block similar-btn">Leave seller feedback</button>	
																<button class="btn btn-block similar-btn">Write a product review</button>	
																<button class="btn btn-block similar-btn" onclick="GiftReceipt()">Share Gift Receipt</button>	
															</div>	 
														</div>  
													</div>
												</div>	
											</div>
											
										</div>	
									</div>	 
								</div>
								<!--content section end-->
								
								
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-4">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
																
															</div>	 
															<div class="col-3">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-3">
																<span>SHIP TO</span> <br>
																<span class="font-weight-bold text-info">Rahul Singh <i class="fas fa-angle-down"></i></span> 
															</div>	 
														</div>
													</div>	
													<div class="col-12 col-sm-6 text-right">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Delivered 23-Aug-2022</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 ">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		<button class="btn btn-secondary buyItBnt" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																	</div>	
																</div>
															</div>	 
															<div class="col-sm-4">
																<button class="btn btn-block similar-btn">Leave seller feedback</button>	
																<button class="btn btn-block similar-btn">Write a product review</button>	
																<button class="btn btn-block similar-btn" onclick="GiftReceipt()">Share Gift Receipt</button>	
															</div>	 
														</div>  
													</div>
												</div>	
											</div>
											
										</div>	
									</div>	 
								</div>
								<!--content section end-->
								
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-4">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
																
															</div>	 
															<div class="col-3">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-3">
																<span>SHIP TO</span> <br>
																<span class="font-weight-bold text-info">Rahul Singh <i class="fas fa-angle-down"></i></span> 
															</div>	 
														</div>
													</div>	
													<div class="col-12 col-sm-6 text-right">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Delivered 23-Aug-2022</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 ">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		<button class="btn btn-secondary buyItBnt" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																	</div>	
																</div>
															</div>	 
															<div class="col-sm-4">
																<button class="btn btn-block similar-btn">Leave seller feedback</button>	
																<button class="btn btn-block similar-btn">Write a product review</button>	
																<button class="btn btn-block similar-btn" onclick="GiftReceipt()">Share Gift Receipt</button>	
															</div>	 
														</div>  
													</div>
												</div>	
											</div>
											
										</div>	
									</div>	 
								</div>
								<!--content section end-->
								
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row mt-3">
									<div class="col-sm-12 mt-3">
										<center><span>There are no recommended items for you to buy again at this time. Check <a href="#" class="text-info">Your Orders</a> for items you previously purchased.</span></center>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="row mt-3">
									<div class="col-sm-12 mt-3">
										<center><span> Looking for an order? All of your orders have been dispatched. <a href="#" class="text-info">View all orders</a></span></center>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="concelledorder" role="tabpanel" aria-labelledby="concelled-order">
								<!--cencel order section-->
								<div class="row mt-3">
									<div class="col-12">
										<span> <span class="font-weight-bold">1 cancelled order</span> placed in last 6 month</span>
									</div>
								</div>
								<!--content section start-->
								<div class="row mt-3">
								    <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
												<div class="row">
													<div class="col-12 col-sm-6">
														<div class="row">
															<div class="col-4">
																<span>ORDER PLACED</span> <br>
																<span class="font-weight-bold">29 September 2022</span>
																
															</div>	 
															<div class="col-3">
																<span class="text-uppercase">Total</span> <br>
																<span class="font-weight-bold">₹ 150.00</span> 
															</div>	 
															<div class="col-3">
																<span>SHIP TO</span> <br>
																<a href="javascript:void(0)" id="pover-card" data-placement="bottom" data-toggle="popover" data-trigger="focus" class="font-weight-bold text-info">Rahul Singh <i class="fas fa-angle-down"></i></span> 
															</div>	 
														</div>
													</div>	
													<div class="col-12 col-sm-6 text-right">
														<span>ORDER # 406-1641815-3361959</span>	<br>
														<a href="<?= base_url("Home/OrdersDetails") ?>" class="text-info">View order details</a>	<span>|</span> <span> <a href="#" class="text-info">Invoice <i class="fas fa-angle-down"></i></a></span>
													</div>	
												</div>
											</div>  
											<div class="card-body">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="font-weight-bold">Cancelled</h5>  
													</div>  
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<div class="row">
																	<div class="col-sm-2 ">
																		<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid w-90">  
																	</div>	
																	<div class="col-sm-10">
																		<a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black) (Black)</a> <br>
																		<small>Return window closed on 14-Aug-2022</small> <br>
																		
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
								<!--content section end-->
							</div>
						</div>  
					</div>  
				</div>
				<!--end tab section--->
				
				
			</div>
			
			
			<!------------popover body ---------->
			<div  class="popover-content" > 
				<!-- Button #4 Popover Card -->
				<div id="popover-card" class="">
					<div class="card text-center" style="margin: -10px -15px; border:0;">
						<div class="card-body text-left">
							<span class="font-weight-bold">Rahul Singh</span> <br>
							<span>22-23 bihind state bank of india</span> <br>
							<span>Babuganj near IT Chauraha Lucknow,up</span> <br>
							<span>LUCKNOW, UTTAR PRADESH 226007</span> <br>
							<span>India</span> <br>
							<span>Phone: 9151558218</span> <br>
						</div>
					</div>
					<!-- /card -->	
				</div>
				<!-- /popover-card-content -->
				
			</div>
			<!-- /popover-content -->
			<!------------popover body ---------->
			
			
			<!-- Modal -->
			<div class="modal fade" id="gidtReceipt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Gift Receipt</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						    <div class="row">
								<div class="col-sm-12">
									<h5>Copy & share link to gift receipt</h5>
								</div>
								<div class="col-sm-12 mt-3">
									<div class="row">
										<div class="col-sm-2">
											<img src="https://images-eu.ssl-images-amazon.com/images/I/41WIROp7icS._SY90_.jpg" class="img-fluid ">  
										</div>
										<div class="col-sm-9">
											<span><a href="#">MATRIX Day & Date Analog Wrist Watch for Men & Boys (Black)</a></span> <br>
											<span>Order #<a href="#" class="text-info">406-1641815-3361959</a></span> <br>
										</div>
									</div>
								</div>
								<div class="col-sm-12 mt-4">
									<div class="card" style="border-radius:5px;">
										<div class="card-body" style="padding: 10px;">
											<a href="#">https://slickpattern.digitalcoders.in/</a>  <a href="#"><i class="bi bi-box-arrow-up-right float-right"></i></a>
										</div>	
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
		<script>
			
			function GiftReceipt()
			{
				jQuery("#gidtReceipt").modal('show');
			}
			
		 	jQuery('[data-toggle="popover"]').popover({
				html: true,
				content: function() {
					var id = jQuery(this).attr('id');
					return jQuery('#po' + id).html();
				}
			});
		</script>
		
	</body>
</html>																								
