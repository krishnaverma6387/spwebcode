
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Royal Benifits</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>  
		
		<style>
			.bg-image{
			background-image: url(https://img.freepik.com/free-vector/royal-mandala-background-islamic-style-design_1017-27402.jpg?size=626&ext=jpg&ga=GA1.2.1868235404.1664542293);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			height: 350px; 
			}
			html{
			scroll-behavior:smooth; 
			}
			#input-search{
			display: inline;
			width: 70%;
			}
			#faq .card .card-header .btn-header-link:after {
			content: " \f107";
			font-family: 'Font Awesome 5 Free';
			font-weight: 900;
			float: right !important;
			color: white;
			}
			
			#faq .card .card-header .btn-header-link.collapsed {
			color: #black;
			}
			
			#faq .card .card-header .btn-header-link.collapsed:after {
			content: " \f106";
			color: white;
			float: right;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			#input-search{
			display: inline;
			width: 100%;
			}
			#srch-btn{
			margin-top: 5px;
			}
			}
			
			three_monthSub-block {
			margin-right: 38px;
			}
			.three_monthSub-block,twelve_monthSub-block {
			position: relative;
			padding: 15px 0 26px;
			background-color: #fff;
			display: inline-block;
			border-radius: 6px;
			box-shadow: 0 0 7px 2px rgb(0 0 0 / 10%);
			}
			.three_month-membrship{
			text-align: center;
			font-size: 25px;
			color:#00325f;
			font-weight:600;
			display: flex;
			justify-content: center;
			align-items: center;
			}
			.B50_blue{
			font-family: "Inter", sans-serif;
			font-size: 45px; 
			margin:0 10px;
			color:#00325f;
			}
			.three_month-main-price{
			font-size: 18px;
			font-weight:600;
			}
			.three_month-main-price del{
			color:gray;
			}
			.plandisc{
			color: #0db20d;
			}
			.three_monthSub-label{
			display: block;
			height: 50px;
			}
			
			.basic_label {
			float:right;
			display: inline-block;
			width: max-content;
			color: #fff;
			padding: 7px 28px;
			font-size: 15px;
			text-transform: uppercase;
			font-weight: 600;
			font-family: 'Inter', sans-serif;
			background: linear-gradient(112deg, rgb(247, 88, 145), rgb(247, 88, 145) 7%, rgba(247, 88, 145, 0.18) 14%, rgb(247, 88, 145) 21%);
			animation-name: animate-pink-basic;
			animation-duration: 4s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			border-radius: 5px 0 0 5px;
			}
			.premium_label {
			float:right;
			display: inline-block;
			width: max-content;
			color: #fff;
			padding: 7px 28px;
			font-size: 15px;
			text-transform: uppercase;
			font-weight: 600;
			font-family: 'Inter', sans-serif;
			background: linear-gradient(112deg, rgb(216, 166, 86), rgb(216, 166, 86) 9%, rgba(216, 166, 86, 0.18) 14%, rgb(216, 166, 86) 19%);
			animation-name: animate-pink-basic;
			animation-duration: 4s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			border-radius: 5px 0 0 5px;
			}
			.basic_label::after {
			z-index: 0;
			content: "";
			position: absolute;
			width: 0;
			height: 0;
			margin-left: 0;
			bottom: 0;
			top: 13%; 
			right: -4px;
			box-sizing: border-box;
			border: 6px solid #f44336;
			border-color: transparent #a5305a transparent transparent;
			transform-origin: 0 0;
			transform: rotate(45deg);
			}
			@keyframes animate-pink-basic{
			0% {
			background-position: 0 0;
			}
			100% {
			background-position: 232px 0;
			}
			} 
			.premium_label::after {
			z-index: 0;
			content: "";
			position: absolute;
			width: 0;
			height: 0;
			margin-left: 0;
			bottom: 0;
			top: 13%; 
			right: -4px;
			box-sizing: border-box;
			border: 6px solid #f44336;
			border-color: transparent #a58230 transparent transparent;
			transform-origin: 0 0;
			transform: rotate(45deg);
			}
			.saving_counter-section {
			position: relative;
			background-color: #fff;
			padding-bottom: 50px;
			}
			.clublandingRevamp_wrapper .coupon-code-section {
			background: #fff;
			padding: 40px;
			}
			.saving_counter-section .saving-membrship-expird-block {
			position: relative;
			width: 602px;
			border-radius: 6px;
			border: 1px solid #ff5c6b;
			margin: 0 auto;
			}
			section .saving_counterOffer-block {
			position: relative;
			max-width: 1299px;
			margin: 0 auto;
			}
			
			.saving_counterOffer-bg .saving_counterOffer-left {
			}
			
			element.style {
			}
			.saving_counterOffer-bg .saving_counterOffer-details-box {
			border-radius: 6px;
			box-shadow: 0 0 7px rgb(0 0 0 / 15%);
			}
			.saving_counterOffer-bg .saving_counterOffer-details-box {
			border-radius: 6px;
			box-shadow: 0 0 7px rgb(0 0 0 / 15%);
			}
			.saving_counterOffer-bg .saving_counterOffer-details-box {
			border-radius: 6px;
			box-shadow: 0 0 7px rgb(0 0 0 / 15%);
			margin: 20px 0;
			}
			.M15_42, .M16_42, .M18_42, .M18_bc9343, .M18_ff4992, .M18_bc9343, .M20_27a63f, .M20_42, .M18_42, .M20_link, .M22_42, .M24_75, .M24_e53935, .M26_blue, .M14_white {
			font-family: 'Inter', sans-serif;
			}
			.SB18_21 {
			font-size: 18px;
			color: #212121;
			line-height: 27px;
			font-weight: 600;
			}
			.M18_42{
			font-size:14px !important; 
			font-weight: 500;
			}
			.saving_counterOffer-bg .saving_counterOffer-details-block .saving_counterOffer-txt .rs_icon {
			font-size: 14px;
			margin-right: -2px;
			}
			.saving_counterOffer-bg .announce-img{
			margin-top: 50px;
			}
			
			.saving_counterOffer-details-box .saving_counterOffer-colorStrip {
			height: 10px;
			background-color: #ffb2d1;
			border-radius: 0 0 6px 6px;
			}
			.saving_counterOffer-block .saving_counterOffer-right {
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-board {
			position: relative;
			text-align: center;
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-board .saving_counter-board-title {
			transform: translateX(-50%);
			position: absolute;
			top: 84px;
			left: 130px;
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-board .saving_counter-board-title p {
			line-height: 28px;
			font-weight: 900;
			font-size: 22px;
			}
			.B36_white {
			font-size: 36px;
			color: #fff;
			line-height: 54px;
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-shoppersClub {
			text-align: center;
			margin-top: 42px;
			}
			.M20_42 {
			font-family: 'Inter', sans-serif;
			font-size: 20px;
			color: #424242;
			line-height: 28px;
			}
			.B22_21 {
			font-size: 22px;
			color: #212121;
			line-height: 30px;
			} 
			.saving_counterOffer-block .saving_counterOffer-bg .saving_counterOffer-details-block {
			background-color: #fff;
			display: flex;
			justify-content: center;
			padding: 14px 15px;
			}
			.saving_counterOffer-txt{
			padding:8px 12px;
			}
			.saving_counterOffer-txt p+p{
			font-weight:500;
			}
			.basic_label, .premium_label{
			position:relative;
			left:5px;
			}
			.basic_label::after, .premium_label::after {
			top: 76%;
			}
			.profile-box .profile-img{
			height:100px;
			width:100px;
			border-radius:50px;
			}
			@media only screen and (max-width:768px){
			.head-title{
			font-size:18px;
			}
			.profile-box .profile-img{
			height:55px;
			width:100px;
			border-radius:50px;
			}  
			.three_month-membrship {
			flex-direction: column; font-size: 14px;
			line-height: 1; }
			.three_monthSub-label {
			height: 38px;
			}
			.B50_blue{
			font-size:34px;
			}
			.planprice{
			font-size:18px;
			}
			.three_month-main-price{
			font-size:14px;
			}
			.three_monthSub-block, twelve_monthSub-block{
			padding: 8px 0 3px;
			}
			.basic_label,.premium_label{
			padding: 4px 9px;
			font-size: 12px;
			}
			.basic_label::after,.premium_label::after{
			top:67%;
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-board .saving_counter-board-title {
			transform: translateX(-50%);
			position: absolute;
			top: 32px;
			left: 72px;
			} 
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-board .saving_counter-board-title p {
			line-height: 25px;
			font-weight: 900;
			font-size: 16px;
			}
			.saving_counterOffer-block .saving_counterOffer-right .saving_counter-shoppersClub {
			text-align: center;
			margin-top: 12px;
			} 
			.bg-image{
			height: 180px; 
			}
			.saving_counterOffer-txt p+p,.SB18_21{
			font-size:14px;
			}
			.saving_counterOffer-block .saving_counterOffer-bg .saving_counterOffer-details-block{
			padding:5px;
			}
			.saving_counterOffer-txt{
			padding:0 0 0 5px; 
			}
			.three_month-main-price {
			font-size: 14px;
			}
			}
			.membership-benefits-tooltip{
			background-color: #fff;
			border-radius: 12px;
			text-align: left;
			padding: 15px;
			position: absolute;
			display: none;
			z-index: 5;
			border: 1px solid #e4e4e4;
			box-sizing: border-box;
			-ms-box-shadow: 0 0 14px 0 rgba(0, 0, 0, 0.14);
			-o-box-shadow: 0 0 14px 0 rgba(0, 0, 0, 0.14);
			-moz-box-shadow: 0 0 14px 0 rgba(0, 0, 0, 0.14); 
			-webkit-box-shadow: 0 0 14px 0 rgb(0 0 0 / 14%);
			box-shadow: 0 0 14px 0 rgb(0 0 0 / 14%);
			top: 100%;
			margin-top: 10px;
			right: 0;
			}           
			.membership-benefits-tooltip::after {
			content: "";
			position: absolute;
			left: 12%;
			border-width: 15px 15px 15px 15px;
			border-style: solid;
			top: -26px;
			margin-left: -4px;
			border-color: transparent transparent #fff transparent;
			}
			.membership-benefits-card.active .membership-benefits-tooltip {
			display: block;
			}
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
		</style>
		
	</head>
    
    <body>  
		
		
		<?php include('include/header.php') ?>
		
		<!--<div class="container">
			<nav aria-label="breadcrumb">
			<div class="img-container">
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
			<li class="breadcrumb-item active" aria-current="page">Cancellation Policy</li>
			</ol>
			</div>
			</nav>
		</div> -->
		
		<section >
			<div class="container-fluid bg-image">
			</div>
		</section> 
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-sm-12">
					<h2 class="text-center" style="color:#00325f;font-family:Montserrat-Bold, sans-serif;">BIG BENEFITS, ATTRACTIVE PLANS</h2>
					<div class="d-flex my-4 row" style="justify-content:space-evenly;">
						<?php 
							if(!empty($royalcard)){ 
								$sr=1;
								foreach($royalcard as $card){
								?>
								<div class="col-sm-3 col-7 my-2 mx-1 three_monthSub-block text-center" > 
									<div class="three_monthSub-label">
										<div class="<?php if($sr%2==0){echo 'premium_label';}else{echo 'basic_label';}?>">Offer</div>
									</div>
									<div class="three_month-membrship">
										<span class="B50_blue"><?= $card->duration; ?></span>
										<span class="M26_blue"><?= strtoupper($card->plan_type); ?></span>
									</div>
									<div class="three_month-price">
										<p class="B34_blue B50_blue planprice"><span>₹</span><?= $card->offer_price; ?></p>
									</div>
									<?php if($card->offer_price!=$card->amount){?>
										<div class="three_month-main-price">
											<del class="M24_75 planmrp"><span>₹</span><?= $card->amount; ?></del>
											<span class="M24_e53935 plandisc"><?= $card->discount; ?>% OFF</span>
										</div>
									<?php } ?>
									<div class="three_month-joinNow-btn my-2">
										<a href="#mobileApp" class="btn btn-secondary" style="padding:5px 22px;border-radius: 5px;" onclick="$('.notifyjs-wrapper').remove(); $.notify('Download App to Purchase Plan', 'info');">
											<span class="B20_white" style="font-size:16px;" >BUY NOW</span>
											<p class="M14_white permnth B20_white text-white mb-0" style="font-size:12px;"><span>₹</span><?= round($card->offer_price/$card->duration); ?>/Month</p>
										</a>
									</div>
								</div>
							<?php $sr++;} } ?>
					</div>	
					<center>
						<h2 class="text-center head-title" style="color:#00325f;font-family:Montserrat-Bold, sans-serif; cursor:pointer;" data-toggle="modal" data-target="#exampleModal">COMPARE PLANS&emsp;<i class="bi bi-arrow-right"></i></h2>
						<span>*Compare plans benefits & Select the best Club plan for you</span>
					</center>
					
				</div>
			</div>
			<center class="d-none">
				<div class="coupon-code-section ">
					<div class="coupon_code-apply-section ">
						<div class="coupon_code-apply-input-block">
							<p class="M14_orange ValidMsg"></p>
							<div class="cpn_code-input-box">
								<input type="text" class="SB20_21 R20_75" id="Coupon_code" placeholder="Have a coupon code?">
								<span data-icon="3" class="close_icon" style="display: inline;"></span>
							</div>
						</div>
						<div onclick="applycoupon()" class="apply_editBtn">
							<div class="c-ripple js-ripple">
								<span class="c-ripple__circle" style="top: 23px; left: 82.375px;"></span>
							</div>
							<p class="SB20_white coupon_code-apply-btn-block" style="display: none;">APPLY</p>
							<p class="SB20_75 saving-couponCode-btn" style="display: block;">APPLY HERE</p>
						</div>
					</div>
					<div class="coupon_code-edit-section" style="display: none">
						<div class="coupon_code-edit-input-block">
							<div class="cpn_code-input-box">
								<span class="M20_27a63f">Coupon Applied : </span>
								<input type="text" disabled="" class="SB20_21" id="editcoupon">
								<span data-icon="-" id="iconeditcoupon" onclick="editcoupon()"></span>
							</div>
						</div>
						<div class="coupon_code-edit-btn-block" onclick="editcoupon()">
							<p class="SB20_white">EDIT</p>
						</div>
					</div>
				</div>
			</center>
			<section class="pro-content login-content pb-1 mb-4" >
				<div class="container mb-1 pb-1">
					<div class="saving_counterOffer-block">
						<div class="row saving_counterOffer-bg">
							<div class="col-sm-5 col-12 p-1">
								<div class="saving_counterOffer-left">
									<?php 
										if(!empty($royalinfo)){ 
											foreach($royalinfo as $info){
											?>
											<div class="saving_counterOffer-details-box">
												<div class="saving_counterOffer-details-block">
													<img src="<?= base_url('uploads/plan/'.$info->icon)?>" alt="">
													<div class="saving_counterOffer-txt">
														<p class="M18_42"><span class="SB18_21"><?= base64_decode($info->description) ?></p>
														</div>
													</div>
													<div class="saving_counterOffer-colorStrip"></div>
												</div>
											<?php } } ?>
									</div>
								</div>
								<div class="col-sm-4 col-6">
									<img src="//cdn.fcglcdn.com/brainbees/images/clrp_savings-counter-girl.jpg" class="announce-img" alt="">
								</div>
								<div class="col-sm-3 col-6">
									<div class="saving_counterOffer-right">
										<div class="saving_counter-board">
											<img src="//cdn.fcglcdn.com/brainbees/images/clrp_savings_counter_board.png" alt="">
											<div class="saving_counter-board-title">
												<p class="B36_white">SAVINGS COUNTER</p>
											</div>
										</div>
										<div class="saving_counter-shoppersClub">
											<p class="M20_42"><span class="B22_21"><?= count($royalcard) ?>+</span> Shoppers are now Club Members &amp; have saved over</p>
											<p class="B40_pink shoppersClub-totalMembr"><span data-icon=""></span>43.7 Cr</p>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="row" style="background:#8340A1; pb-5 ">
						<div class="col-sm-12 text-center mt-5 ">
							<h2 class="text-center head-title" style="color:white;font-family:Montserrat-Bold, sans-serif;">MEMBERSHIP BENEFITS</h2><br>
						</div>
						<div class="container pb-5">
							<div class="row">
								<?php if(!empty($royalbenefits)){ 
									foreach($royalbenefits as $benefits){
									?>
									<div class="col-sm-3 mb-3">
										<div class="card membership-benefits-card" style="border: 0px; background:transparent" >
											<img src="<?= base_url('uploads/plan/'.$benefits->icon)?>" style="user-select:none;" alt="">
											<div class="membership-benefits-tooltip">
												<p class="M16_42"><?= base64_decode($benefits->description) ?></p>  
											</div>
										</div>	
									</div>
								<?php } } ?>
							</div>
						</div>
					</div>  
				</section>
				<div class="container mt-5" id="mobileApp">
					<div class="row my-2">
						
						<div class="col-sm-5">
							<center><img src="<?= base_url('public/images/app-screen.png') ?>" class="img-fluid" style="height: 390px;"></center>
						</div>
						<div class="col-sm-7">
							<h4>Get the Slickpattern app</h4>
							<p>We will send you a link, open it on your phone to download the app</p>
							<div class="form-group">
								<input type="radio" name="radio" id="email" value="email">&ensp;<label for="email">Email</label>	&ensp; &ensp; &ensp; &ensp;    <input type="radio" name="" id="phone" value="phone">&ensp;<label for="phone">Phone</label>	  
							</div>
							<div class="form-group">
								<input type="text" name="" class="form-control form-control-lg " id="input-search" placeholder="Email"  >  <button class="btn btn-secondary d-inline" style="border-radius: 10px;" id="srch-btn" >Share App link</button>	
							</div>
							<div class="row">
								<div class="col-sm-12" >
									<span>Download App From </span>	
								</div>
								
								<div class="col-sm-6 col-6 mt-2 d-flex">
									<img src="https://texttofloss.com/wp-content/uploads/2021/01/Google-Play-Store-Button.png"  width="150" style="">
									<img src="https://1000logos.net/wp-content/uploads/2020/08/apple-app-store-logo.jpg" width="150" class="img-fluid" style="">
								</div>  
							</div>
						</div>
						<div class="col-sm-12 my-3">
							<div class="row">
								<div class="col-sm-4 mx-2 font-weight-bold" style="background: #e9e9ea; padding: 16px;"><a href="<?= base_url('Home/FAQs')?>" class="d-flex justify-content-between w-100"><span>Frequently Asked Questions</span><i class="bi bi-arrow-right"></i></a></div>
								<div class="col-sm-4  mx-2 font-weight-bold" style="background: #e9e9ea; padding: 16px;"><a href="<?= base_url('Home/RoyalTermsConditions')?>" class="d-flex justify-content-between w-100"><span>Terms & Conditions</span><i class="bi bi-arrow-right"></i></a></div>
								<div class="col-sm-3 mx-2 font-weight-bold" style="background: #e9e9ea; padding: 16px;"><a href="#" class="d-flex justify-content-between w-100" ><span>Need Help? Chat with us</span><i class="bi bi-arrow-right"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModal">
				<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1" style="background: transparent !important;">
							<h5 class="modal-title">Compare Plan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
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
										<?php include('include/footer.php'); ?>
										<?php include('include/jsLinks.php'); ?>
										<script>
										// function ExpressCheckout(e){
										
										// $.ajax({
										// type: 'POST',
										// url: '<?= base_url('Home/ExpressCheckout')?>',
										// data: data, 
										// cache: false,
										// success: function(response) {
										// var response = JSON.parse(response);
										// if (response[0].res == 'success') {
										
										// $('.notifyjs-wrapper').remove();
										// $.notify("" + response[0].msg + "", "success");
										// if (response[0].redirect) {
										// window.setTimeout(function() {
										// window.location.href = response[0].redirect;
										// }, 1000);
										// } else {
										// window.setTimeout(function() {
										// window.location.reload();
										// }, 1000);
										// }
										// } else if (response[0].res == 'error') {
										// $('.notifyjs-wrapper').remove();
										// $.notify("" + response[0].msg + "", "error");
										// if (response[0].redirect) {
										// window.setTimeout(function() {
										// window.location.href = response[0].redirect;
										// }, 1000);
										// } 
										// }
										// },
										// error: function() {
										// window.location.reload();
										// }
										// });
										// }
										$('.membership-benefits-card').click(function(){
										$('.membership-benefits-card').removeClass('active');
										$(this).addClass('active');
										})
										</script>
										
										</body>
										</html>																								
																				