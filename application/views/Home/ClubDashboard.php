<?php 
	$benefits = $this->db->order_by('id','desc')->get("subscription_benefits")->result();	
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		
		<style>
			body {
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			background-color: #8340a1;
			}
			.box-main {
			width: auto;
			height: 160px;
			background-color: white;
			border-radius: 0px 0px 20px 20px;
			}
			
			.box-main h1 {
			text-align: center;
			padding-top: 40px;
			font-size: 30px;
			font-family: "Montserrat-Regular", sans-serif;
			}
			
			.img-box1 {
			width: 160px !important;
			height: 160px !important;
			background-color: #8340a1;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
			position: absolute;
			top: -70px;
			}
			
			.img-box1 img {
			height: 130px;
			width: 130px;
			border-radius: 50%;
			}
			.invite img {
			height: 70px;
			width: 40%;
			border-radius: 20px;
			}
			
			.img-main-div {
			position: relative;
			}
			@media (max-width: 768px) {
			.box-main h1 {
			padding-left: 20px;
			font-size: 16px;
			}
			.invite img {
			height: 60px;
			width: 100%;
			border-radius: 20px;
			}
			}
			.text-area {
			margin-top: 80px;
			}
			.invite {
			margin-top: 40px;
			}
			
			.btn-center-card {
			position: absolute;
			top: -20px;
			left: 70px;
			z-index: 999;
			}
			
			.content
			{
			color:white !important;
			font-weight:bold;
			font-size:13px !important;
			}
			
			@media (max-width: 768px) {
			.btn-center-card {
			position: absolute;
			left: 130px;
			}
			.content
			{
			color:white !important;
			font-weight:bold;
			font-size:11px !important;
			}
			}
			
			.card-bg {
			background-color: #ffffff00;
			border: 1px solid navy;
			text-align: center;
			}
			
			.card-main-div {
			position: relative;
			}
			
			.basic {
			background: linear-gradient(to right, #849cb0, #8340a1);
			border: 1.5px solid #f2e1b4 !important;
			font-family: "Inter", sans-serif;
			color: white;
			}
			
			.plan {
			border: 1.5px solid #f2e1b4 !important;
			color: #ecebe4;
			border-radius: 10px;
			background: linear-gradient(to right, #849cb0, #8340a1);
			margin-top: -90px !important;
			font-size: 13px;
			padding: 10px;
			width: 80%;
			text-transform: uppercase;
			font-weight: bold;
			}
			
			.month {
			text-align: center;
			font-weight: bold;
			font-size: 24px;
			color: white !important;
			}
			.net_price {
			font-family: Jakarta-Bold;
			font-weight: bold;
			font-size: 24px;
			text-align: center;
			color: white !important;
			}
			.offer {
			text-align: center;
			font-weight: bold;
			font-size: 15px;
			margin-top: -5px;
			color: white !important;
			}
			
			.card_box {
			border: 1.5px solid #f2e1b4 !important;
			border-radius: 12px;
			padding: 10px 0px 10px 0px;
			background: #8340a1 !important;
			}
			.buy_now {
			border: 1.5px solid #f2e1b4 !important;
			background: #8340a1;
			color: #ecebe4;
			border-radius: 10px;
			}
			.bg-primary {
			background-color: #8340a1 !important;
			}
			.choose {
			color: #f0ebf2 !important;
			}
			.aboutus-content p {
			color: white;
			}
			
			.clickable-row {
			cursor: pointer;
			}
			
			.modal-open-with-blur .modal-backdrop {
			backdrop-filter: blur(4px); /* Adjust blur intensity as needed */
			}
			
			
			
			.modal {
			background: rgba(8,0,7,.6);
			backdrop-filter: blur(0px);
			-webkit-backdrop-filter: blur(0px);
			}
			
			.close_btn{
			border: none;
			background: #8340a1;
			color: white;
			font-size: 20px;
			margin-top: -5px;
			}
			
			
			
			
			
			
			
			// compare plan css here 
			
			.cmpre_plan-details-block {
			border-radius: 12px;
			padding:12px;
			}
			.cmpre_plan-details-block ul li{
			display:flex;
			padding: 12px;
			border-bottom: 1px dotted lavender;
			}
			.cmpre_plan-details-block ul li:nth-child(2n+1){
			background: lavender;;
			}
			
			.cmpre_plan-details-block ul li .cmpre_plan-text {
			width: 50%;
			}
			.SB20_21 {
			font-size: 16px;
			color: #212121;
			line-height: 30px;
			font-weight: 600;
			}
			.cmpre_plan-details-block ul li .cmpre_plan-months {
			width: 50%;
			display: flex;
			justify-content: space-around;
			align-items: center;
			}
			.cmpre_plan-details-block ul li .cmpre_plan-months img{
			height:24px;
			}
			.coupon_code-apply-section{
			display: flex;
			justify-content: center;
			padding: 4px 18px;
			background: white;
			box-shadow: 1px 1px 12px grey;
			width: fit-content;
			position: relative;
			top: -65px;
			}
			.cpn_code-input-box input{
			outline: none;
			border: none;
			border-bottom: 2px solid red;
			}
			.apply_editBtn{
			background: red;
			padding: 0 4px;
			color: white;
			}
			.saving-couponCode-btn{color:white;}
			.main-box{
			border-radius:7px;
			}
			
			
			.row total_saving{
    display: flex;
    flex-wrap: wrap;
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
						<li class="breadcrumb-item active" aria-current="page">Club Dashbpard</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content">	
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="box-main">
							<h1>Slick Pattern Club Member</h1>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
				
				<div class="row">
					<div class="col-sm-5 col-2"></div>
					<div class="col-sm-2 col-8 img-main-div">
						<div class="img-box1">
							<img
							src="https://i.pinimg.com/originals/73/d5/95/73d595aed56a6b7ecc971dbca7885dad.jpg"
							class="img-fluid"
							alt=""
							/>
						</div>
					</div>
					<div class="col-sm-5 col-2"></div>
				</div>
				
				<div class="row text-area">
					<div class="col-sm-12 text-center">
						<h3
						class="text-white mt-2"
						style="font-family: Montserrat-Regular, sans-serif"
						>
							Hello, Srija Gupta
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-2 col-6 text-center d-flex">
						<i
						class="bi bi-star mt-2 text-warning"
						style="font-size: 20px; font-weight: 600"
						></i>
						<p class="text-white">
							3 Months <br/>
							&ensp;&ensp;Membership
						</p>
					</div>
					<div class="col-sm-2 col-6 text-center d-flex">
						<i
						class="bi bi-calendar-date text-warning"
						style="font-size: 20px; font-weight: 600"
						></i>
						<p class="text-white">
							Expiry on <br />
							&ensp;&ensp;6th Apr 2024
						</p>
					</div>
					<div class="col-sm-4"></div>
				</div>
				
				<div class="row invite mb-4">
					<div class="col-sm-12 text-center">
						<a href="<?= base_url('Home/RoyalCustomerBenifits') ?>">
							<img src="<?= base_url('./uploads/plan/invite.png')?>" class="img-fluid invite_img" alt="" />
						</a>
						<h4
						class="mt-4 text-white"
						style="font-family: Montserrat-Regular, sans-serif">
							CONTINUE TO ENJOY <br/>
							CLUB BENEFITS
						</h4>
					</div>
				</div>
				
				
				
				<div class="row bg-primary">
					<div class="col-sm-3 col-md-3 col-lg-3"></div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<!-- table data fetch -->
						<div class="row mt-4 mb-4">
							<!-- loop start -->
							<div class="col-sm-4 col-md-4 col-lg-4 mt-5">
								<div class="card card_box">
									<div class="card-body text-center">
										<button class="plan text-white btn btn-sm rounded-pill">
											Basic
										</button>
										<p class="month">3 month</p>
										<p class="net_price"style="color:white">₹99</p>
										<div class="offer">
											<del>₹125</del>
											<span>20.80% OFF</span>
										</div>
										<a
										class="buy_now text-white btn mt-2"
										style="margin-top: 25px !important"
										>SELECT</a
										>
										<div class="mt-2">
											<span class="text-white">₹89/Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 mt-5">
								<div class="card card_box">
									<div class="card-body text-center">
										<button class="plan text-white btn btn-sm rounded-pill">
											Popular
										</button>
										<p class="month">3 month</p>
										<p class="net_price">₹99</p>
										<div class="offer">
											<del>₹125</del>
											<span>20.80% OFF</span>
										</div>
										<a
										class="buy_now text-white btn mt-2"
										style="margin-top: 25px !important"
										>RENEW</a
										>
										<div class="mt-2">
											<span class="text-white">₹81/Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 mt-5">
								<div class="card card_box">
									<div class="card-body text-center">
										<button class="plan text-white btn btn-sm rounded-pill">
											Premium
										</button>
										<p class="month">3 month</p>
										<p class="net_price">₹99</p>
										<div class="offer">
											<del>₹125</del>
											<span>20.80% OFF</span>
										</div>
										<a
										class="buy_now text-white btn mt-2"
										style="margin-top: 25px !important"
										>UPGRADE</a
										>
										<div class="mt-2">
											<span class="text-white">₹70/Month</span>
										</div>
									</div>
								</div>
							</div>
							<!-- loopend -->
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3"></div>
				</div>
				<!-- end -->
				
				
				<div class="row mb-4">
					<div class="col-sm-5 col-2"></div>
					<div class="col-sm-2 col-8">
						<span id="comparePlans" data-toggle="modal" data-target="#compareplan" class="text-white" style="font-weight:bold;font-size:20px; cursor:pointer;">Compare Plans <i class="bi bi-arrow-right text-bold"></i></span>
						
						<!--<center>
							<h5 class="text-center head-title text-white" style="color:#00325f;font-family:Montserrat-Bold, sans-serif; cursor:pointer;" data-toggle="modal" data-target="#compareplan">COMPARE PLANS&emsp;<i class="bi bi-arrow-right"></i></h5>
						</center>-->
						
					</div>
					<div class="col-sm-5 col-2"></div>
				</div>
				<div class="row mb-4">
					<div class="col-sm-4 col-2"></div>
					<div class="col-sm-4 col-8">
						<span class="text-white text-center" style="font-size:14px;">Renewal or Upgradation will be applied after the end of the current membership</span>
					</div>
					<div class="col-sm-4 col-2"></div>
				</div>
				
				
				
				<div class="row total_saving mb-4">
					<div class="col-sm-4"></div>
					<div class="col-sm-4 card " style="
						background: linear-gradient(to right, #7e70e4, #fb76b2);
						color: white;
						font-weight: 700;
						font-family: Montserrat-Regular, sans-serif;
						">
					
							<div class="row p-0">
								<a href="<?= base_url('Home/clubmemberships')?>" class="row custom-link">
									<div class="col-sm-2 col-2 fs-5 mt-4 text-center">
										<i class="bi bi-star text-warning"></i>
									</div>
									<div class="col-sm-7 col-7">
										<p class="mt-3">
											Total savings so far with all your Club Memberships:
										</p>
									</div>
									<div class="col-sm-3 col-3 d-flex">
										<p class="mt-4" style="font-size:13px">
											₹ 4546<i class="bi bi-arrow-right-short"></i>
										</p>
									</div>
								</a>
							</div>
						
					</div>
					<div class="col-sm-4"></div>
				</div>
				
				<div class="row mb-4">
					<div class="col-sm-4"></div>
					
					<div class="col-sm-4 text-center">
						<div class="row">
							<div class="col-sm-2 col-2">
								<img src="<?= base_url('./uploads/plan/piggy.png')?>" style="height: 100px;
								margin-top: -50px;
								margin-left: -30px;" alt="" />
							</div>
							<div class="col-sm-10 col-10">
								<h4
								class="text-white"
								style="font-family: Montserrat-Regular, sans-serif"
								>
									SAVINGS DETAILS
								</h4>
								<p class="text-center text-white fs-5">
									Data last updated on: 5th April 2024
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center"></div>
				</div>
				
				<div class="row mb-4">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div
						class="card"
						style="
						background: #8340a1;
						color: white;
						font-weight: 700;
						font-family: Montserrat-Regular, sans-serif;
						border: 1px solid rgb(245, 212, 212);
						"
						>
							<div class="row">
								<div class="col-sm-2 col-2 text-center fs-5 mt-4"></div>
								<div class="col-sm-7 col-7">
									<p class="mt-3" >
										Savings till now from your current Club Membership:
									</p>
								</div>
								<div class="col-sm-3 col-3">
									<p class="mt-4" style="font-size:13px !important">₹396.22</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<p class="text-center text-white" style="font-weight: bold">
							Your Savings:
						</p>
					</div>
				</div>
			
			
			<div class="card mb-4 mt-4 " style="background:#8340a1;border:1px solid gray;box-shadow:0px 0px 0px 1px">
				<div class="container">
					<div class="row clickable-row card-text">
						<div class="col-sm-4 col-4">
							<p class="text-dark content">
								Product Discount <i class="bi bi-arrow-right text-bold"></i>
							</p>
						</div>
						<div class="col-sm-2 col-2 d-flex">
							<p class="text-dark content">₹66</p>
						</div>
						<div class="col-sm-4 col-4">
							<p class="text-dark content">
								Coupon Savings <i class="bi bi-arrow-right text-bold"></i>
							</p>
						</div>
						<div class="col-sm-2 col-2">
							<p class="text-dark content">₹66</p>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<p class="text-dark">
									<hr style="border:1px solid black">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" style="height:auto">
				<div class="modal-content" style="background:#8340a1;border-radius: 15px;">
					<div class="modal-header bg-primary" style="height:50px;border-radius: 20px;">
						<h5 class="modal-title text-white" id="exampleModalLabel">Savings Details</h5>
						<button type="button" class="close_btn btn-close" data-bs-dismiss="modal" aria-label="Close" >
							<i class="fas fa-times"></i>  
						</button>
					</div>
					<div class="modal-body" style="border-top: 2px solid white;">
						<div class="row">
							<div class="col-md-3">
								<img src="<?= base_url('./public/uploads/club_dashboard.png')?>" class="img-fluid" alt="" style="height:60px;width:60px;float:left">
							</div>
							<div class="col-md-8">
								<h5 class="mt-2 text-white">Product Discount</h5>
								<p class="text-white" style="word-wrap: break-word;">Total value of additional product discount earned on orders placed</p>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="modal fade" id="compareplan">
			<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1" style="background: transparent !important;">
						<h5 class="modal-title">Compare Plan</h5>
						<button type="button" class="close mt-4" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="margin-top: 20px !important;display:block;">&times;</span>
						</button>
					</div>
					<div class="modal-body p-1">
						<div class="cmpre_plan-details-block">
							<ul>
								<li>
									<div class="cmpre_plan-text">
										<span class="SB20_21">Benefits</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<span class="SB20_21">3 Months</span>
										</div>
										<div class="tick-img">
											<span class="SB20_21">6 Months</span>
										</div>
										<div class="tick-img">
											<span class="SB20_21">12 Months</span>
										</div>
										
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Upto 10% additional discount</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div> 
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Exclusive Offers, Deals &amp; Sales</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Early Access to Sales</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Club Cash Benefit on Products
										</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<span class="M18_bc9343">2X</span>
										</div>
										<div class="tick-img">
											<span class="M18_bc9343">2X</span>
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Free Shipping On Every Order                                    </span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<span class="M18_ff4992">Above<br><span data-icon="" class="rs-icon"></span>499</span>
										</div>
										<div class="tick-img">
											<span class="M18_bc9343">On all<br>orders</span>
										</div>
										<div class="tick-img">
											<span class="M18_bc9343">On all<br>orders</span>
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Free Subscription of PlayBees Early Learning App                                    </span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Return Gift Coupons worth <span data-icon="" class="rs_icon"></span>2000                                    </span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_cross_pink_tick.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_cross_pink_tick.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Free Assembly service</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_cross_pink_tick.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_cross_pink_tick.png" alt="">
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Exclusive Store Coupons</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<span class="M18_ff4992">Worth<br><span data-icon="" class="rs-icon"></span>600</span>
										</div>
										<div class="tick-img">
											<span class="M18_bc9343">Worth<br><span data-icon="" class="rs-icon"></span>7,800</span>
										</div>
										<div class="tick-img">
											<span class="M18_ff4992">Worth<br><span data-icon="" class="rs-icon"></span>600</span>
										</div>
									</div>
								</li>
								<li>
									<div class="cmpre_plan-text">
										<span class="M18_42">Extra 10% discount on FirstCry Intellikit Subscriptions</span>
									</div>
									<div class="cmpre_plan-months">
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_golden.png" alt="">
										</div>
										<div class="tick-img">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_tick_pink.png" alt="">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		
		
		<!-- JavaScript to open modal on card body click -->
		<script>
			$(document).ready(function() {
				$('.card-text').click(function() {
					$('#exampleModal').modal('show');
					$('body').addClass('modal-open-with-blur');
				});
				
			});
			
			
			$(document).on('click','.close_btn',function(){
				$('#exampleModal').modal('hide');
			});
			
			$('#exampleModal').on('shown.bs.modal', function () {
				$('body').addClass('modal-open-with-blur');
			});
			
			// When the modal is hidden, remove the class to remove the blur
			$('#exampleModal').on('hidden.bs.modal', function () {
				$('body').removeClass('modal-open-with-blur');
			});
		</script>
	</body>
</html>																																																																																																																																												