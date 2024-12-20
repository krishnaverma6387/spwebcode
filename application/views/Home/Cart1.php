
<!DOCTYPE html> 
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Carts</title>
		<meta name="description" content=""> 
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			*{ 
			letter-spacing: normal;
			}
			body{
			// background-image: url(//cdn.fcglcdn.com/brainbees/images/n/main-bg.jpg);
			// background-repeat: repeat; 
			font-family: inherit;
			background-color: #f1f3f6;
			}
			b, strong {
			font-weight: 600;
			}
			.btn {
			padding-top: 12px;
			padding-left: 12px;
			padding-right: 18px;
			padding-bottom: 12px;
			}
			.button{
			width:50%;
			}
			.button+.button{
			width:50%;
			margin-left:8px;
			}
			.parsley-errors-list{
			padding:0;
			}
			.btn-secondary.disabled, .btn-secondary:disabled{
			background:grey !important;  
			}
			.btn-secondary['disabled']:before{
			background:grey !important;
			}
			.modal-open .show{
			background-color: rgba(0, 0, 0, 0.3); 
			}
			.slick-arrow {
			opacity: 2!important;
			}
			.slick-slider:hover .slick-arrow {
			display: block!important;
			background: #8340A1;
			opacity: 1 !important;
			}
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
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
			.giftWrapDetails-base-header img{
			height:50px;
			width:50px;
			}
			.popular-product article .pro-description {
			display: flex;
			align-items: flex-start!important;
			}
			
			.bagicon{
			position: absolute;
			bottom: -4px;
			left: 0px;
			display: block;
			height: 45px;
			line-height: 45px;
			padding: 0 10px;
			z-index:9999;
			}
			label{
			color:black;
			font-size:14px;
			font-weight: 600;
			}
			.baseicons
			{
			display: none;
			z-index: 2 !important;
			position: absolute;
			background: #f7f7f9b5;
			width:92%;
			padding: 10px;
			bottom: 45px;
			line-height: 30px; 
			margin: 0;
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
			left: unset;
			}
			.slick-next{
			right:0;
			}
			
			.itemtext{
			font-size:8px!important;
			}
			
			#couponsection{
			overflow-y: scroll;
			height: 323px;
			
			}
			#MobileView{
			display:none;
			}
			@media only screen and (max-width: 800px) {
			#MobileView {
			display: block;
			}
			#DesktopView{
			display:none;
			}
			}
			.badge-pink{
			background: #FF1493;
			color:white;
			border-radius: 50px;
			cursor: pointer;
			padding: 5px;   
			}
			
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			
			.bagicon {
			left: 0px;
			z-index: 9;
			}
			.hidecontent{
			display:none;
			}
			#ContinueBtn{
			font-size:10px;
			}
			#chnagebackground{
			background: #E9ECEF!important;
			}
			.slick-prev, .slick-next{
			display:none!important;
			}
			#couponsection{
			overflow-y: scroll;
			height: 323px;
			
			}
			.pro_desc{
			padding: 1px!important;
			}
			
			}
			.slick-prev:before {
			content: '←' !important;
			}
			.slick-next:before {
			content: '→'!important;
			}
			.address-details{
			background:white;
			border-radius:3px;
			border:1px solid lavender;
			}
			.address-details p{
			margin-bottom:0;
			font-weight:500;
			}
			.btn-chnage-address{
			padding: 6px 7px 5px;
			border-radius: 3px;
			background: #fff;
			border: 1px solid #8834AD !important;
			text-transform: uppercase;
			float: right;
			cursor: pointer;
			color: #8834AD !important;  
			height:fit-content;
			font-size:12px;
			font-weight:600;
			}
			.btn-chnage-address:hover{
			color: #FA057E !important; 
			border: 1px solid #FA057E !important;
			}
			.offer-title .pers-icon {
			margin: 1px 5px;
			width: 16px;
			height: 16px;
			position: relative;
			}
			.per {
			position: absolute;
			width: 100%;
			}
			.offer-box .offer-list li{
			font-size: 12px; 
			list-style: disc;
			}
			.product-box{
			background:white;   
			border-top:1px solid lavender;
			border-bottom:1px solid lavender;
			}
			.product-thumbnail{
			min-width:150px;   
			}
			.price-details{
			padding-left:18px;
			min-width: 175px;
			border-left:1px solid lavender;
			}
			.fclub_price img, .fc_clubtag div img {
			width: 16px;
			height: 16px;
			margin-right: 3px;
			}
			.clubp_prc span:first-child {
			
			}
			.B14_Blue {
			font-size: 14px;
			color: #00325f;
			line-height: 20px;
			font-weight: bold;
			}
			.R14_75 {
			font-size: 12px!important;
			color: #757575;
			line-height: 20px;
			font-weight: bold;
			}
			.btn-container{
			border-top:1px solid lavender;
			padding-top:12px;
			}
			.btn-container .pro-info:first-child{
			border-right: 1px solid lavender;
			text-transform: uppercase;
			}
			.btn-container .pro-info{
			text-transform: uppercase;
			}
			.product-desc{
			display:flex;
			}
			.product-name{
			letter-spacing: normal; 
			}
			.giftwrap_img.giftwrpnotapplied {
			height: 90px;
			}
			.giftwrap_img.giftwrpapplied { 
			height: 100px;
			}
			.giftwrap_img img {
			max-width: 100%;
			max-height: 100%; 
			}
			div#earnedLC {
			display: flex;
			background-color: #fffbe8;
			border: 1px solid #e0d367;
			padding: 0px 10px 0px 10px;
			height: 24px;
			border-radius: 12px;
			align-items: center;
			}
			.no-padding{
			padding-right:0;
			}
			
			.club_banner .clubbanner_img {
			position: relative;
			}
			.clubbanner_img > img {
			height: 110px;
			}
			.club_banner img {
			width: 100%;
			}
			.newclub_banner .clubbanner_img .white_strip {
			top: 6px;
			}
			.club_banner .clubbanner_img .white_strip {
			background-repeat: no-repeat;
			height: 24px;
			position: absolute;
			top: 6px;
			width:100%; 
			}
			.club_banner .clubbanner_img .white_strip > div {
			position: relative;
			}
			.club_banner .clubbanner_img .white_strip img {
			width: 100%;
			height: 25px;
			}
			.club_text {
			position: absolute;
			top: 0;
			text-align: center;
			left: 0;
			right: 0;
			}
			.club_text img {
			width: 15px !important;
			height: 15px !important;
			position: relative;
			top: 0px;
			}
			.club_text span.jointext {
			vertical-align: middle;
			font-family: Roboto-Medium, sans-serif;
			color: #424242;
			margin-left: 2px;
			display: inline-block;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			padding-top: 4px;
			}
			.clubqicon {
			color: #fff;
			width: 14px;
			height: 14px;
			background: #bdbdbd;
			display: inline-block;
			text-align: center;
			border-radius: 50px;
			font-size: 10px;
			line-height: 15px;
			position: relative;
			left: 2px;
			top: 2px;
			cursor: pointer;
			}
			
			
			.newclub_banner .clubsubscription {
			overflow: hidden;
			text-align: center;
			width: 100%;
			position: absolute;
			margin: 0 auto;
			top: 34px;
			}
			
			.threemnth_subscription {
			margin-right: 6px;
			}
			.widthcls {
			width: 140px;
			height: 63px;
			display: inline-block;
			border: 1px solid #eee;
			border-radius: 3px;
			background: #fff;
			}
			.newclubtxt {
			padding-top: 3px;
			}	
			
			element.style {
			}
			.newclubtxt {
			padding-top: 3px;
			}
			.M14_21 {
			font-family: "Roboto-Medium";
			font-size: 14px;
			color: #212121;
			line-height: 20px;
			}
			.B14_blue {
			font-family: "Roboto-Bold";
			font-size: 14px;
			color: #00325f;
			line-height: 20px;
			}
			
			element.style {
			}
			.addnow_btn {
			width: 100%;
			background: #b598eb;
			/* border-radius: 3px; */
			text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
			padding: 1px 0;
			text-transform: uppercase;
			color: white;
			margin-top: 0px;
			cursor: pointer;
			}
			.pro-heading-title a{
			font-size:22px;
			font-weight:600;
			}
			.pro-heading-title a.active{
			border-bottom:3px solid #8834AD;
			}
			.gift-wrap-charge-info{
			margin:0;
			}
			@media only screen and (max-width:768px){
			.giftwrap_img.giftwrpnotapplied {
			height: 90px;
			}
			.giftwrap_img.giftwrpapplied { 
			height: 140px;
			}
			.product-desc{display:block;}
			.price-details{border:none;padding-left:8px;}
			.address-details{
			padding: 0;
			border-radius: 0;
			border: none; 
			}
			
			.product-box {
			background: white;
			border-top: 0;
			border-bottom: 7px solid lavender;
			padding: 14px 0 !important;
			}
			
			.giftwrap_img img {
			max-width: 100%;
			max-height: -webkit-fill-available; 
			}
			.checkout-container{
			flex-direction:column;
			}
			.button{
			width:100%;
			}
			.button+.button{
			width:100%;
			margin-left:0px;
			margin-top:8px;
			}
			.pro-heading-title a{
			font-size:18px;
			font-weight:600;
			}
			.pro-heading-title a.active{
			border-bottom:2px solid #8834AD;
			}
			}
			.paymentOptions{
			font-size: 14px;  color: #222127; padding: 5px 10px; border-radius: 15px; border: 1px solid gainsboro; cursor:pointer;"
			}
			.paymentOptions.active-paymode{
			border:1px solid #8834AD;
			}
			@media only screen and (max-width:574px){  
			
			.no-padding,.main-container{
			padding:0; 
			}
			.mobile-border{
			margin:0 -15px 0 -15px !important;
			border-bottom: 7px solid lavender;
			border-top: 7px solid lavender; 
			}          
			.mobile-top-border{ 
			margin:0 -15px 0 -15px !important;
			border-top: 7px solid lavender;
			}
			}
			.tooltip .tooltip-inner {
			background-color:#fdfdfd !important;
			opacity:1;
			color:black;
			}
			.bs-popover-top>.arrow::after, .bs-popover-auto[x-placement^="top"]>.arrow::after {
			bottom: 1px;
			border-width: 0.5rem 0.5rem 0;
			border-top-color: lavender;
			}
		</style>
	</head>
	<body>  
		<?php include('include/header.php') ?>
		<div class="container-fluid d-none"> 
			<nav aria-label="breadcrumb">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Bag</li>
					</ol>
				</div>
			</nav>
		</div> 
		<div class="container-fluid main-container"> 
			<?php if(!empty($list)){ ?>
				<div class="row mt-3 m-0">
					<div class="pro-heading-title bg-white p-1" style="padding-bottom: 16px; font-weight: 500">
						<a class="active" href="<?= base_url('Home/Cart') ?>" style="color:#8834AD;">Bag (<?= count($list)?>)</a> &ensp;
						<a href="<?= base_url('Home/Wishlist') ?>">Wishlist (<?= count($wishlist)?>)</a>
					</div> 
					<?php
						$subscription='false';
						$plan_duration='';
						if($this->permission=='true'){
							$userid=$this->userData->id;
							$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
							if($subscriber->num_rows()>0){
								$subscriber=$subscriber->row();
								$plan_expire_date=date('y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
								$current_date=date('y-m-d')	; 
								$diff =  date_diff(date_create($current_date),date_create($plan_expire_date))->format("%R%a");
								if($diff>=0){
									$subscription='true'; 
									$plan_duration=$subscriber->plan_duration;
								}
								else{
									$subscription='false';
								}
							}
							if($subscription=='true'){?>
							<div class="earn-box hide_in_mobile" style="display: flex; justify-content: end; align-items: center; width: 50%;">
								<div class="loyalty-cash-info" id="earnedLC">
									<span class="clubilogo"><img src="//cdn.fcglcdn.com/brainbees/checkout/club_cash.png" alt="Club coin img" class="clbImage"></span>
									&nbsp;<span class="R13_42" style="font-size:12px; font-weight: 600; color: #4f4c4c;">Net Club Cash Earned: <span style="color:#252525;" id="earn_cash"></span><span style="color:blue; cursor:pointer;" data-toggle="tooltip" data-placement="bottom" title="This is the Club Cash earned by you for this order and will be added to your account within 48 hours of successful delivery of order.">&nbsp;[?]</span></span>
								</div>
							</div>
						<?php } } ?>
				</div> 
				
				<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Checkout'); ?>" method="post" enctype="multipart/form-data" id="CheckOutForm2">
					<div class="row m-0">
						<div class="col-sm-8 bg-white pt-0 " style="box-shadow: 1px 1px 1px 0 #ccc;">      
							<?php if($subscription=='false'){ ?>
								<div class="row m-0 hide_desktop mobile-top-border"> 
									<div class="col-sm-12 p-0">
										<div class="club_banner newclub_banner" id="newclub_banner" style="">
											<div class="clubbanner_img">
												<img src="https://img.freepik.com/free-vector/cloudy-watercolor-background_91008-459.jpg?size=626&ext=jpg&ga=GA1.1.1508475195.1679125572&semt=ais" alt="Club banner" style="transform: rotate(180deg);">
												<div class="white_strip" id="saveStrip">
													<div>
														<img src="//cdn.fcglcdn.com/brainbees/checkout/club-white.png" alt="">
														<div class="club_text">
															<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png" alt="club logo">
															<span id="joinClubTxtWithoutCoupon">
																<span class="R12_blue jointext">
																	Join Royal Club &amp; Save <span>₹<span id="royal_saving"></span> with this Order&nbsp;<i class="bi bi-info-circle-fill" data-toggle="modal" data-target="#SavingModal" style="cursor:pointer; font-size: 14px;"></i>
																	</span>
																</span>
															</div>
														</div>
													</div>
													<div class="clubsubscription">
														<?php 
															if(!empty($royalcard)){ 
																$sr=1;
																foreach($royalcard as $card){
																?>
																<div class="threemnth_subscription widthcls">
																	<div class="M14_21 newclubtxt"><?= $card->duration; ?>&nbsp;<?= strtoupper($card->plan_type); ?></div>
																	<div class="newclubprice">
																		<label class="B14_blue clubpricenew" id="clubBuyBannerAPDiv3" style="margin-bottom: 0.15rem;">
																			<span class="rupees-icon fontsize" data-icon=""></span>
																			<span class="discontedprice" id="clubBuyBannerAP3"><span>₹</span><?= $card->offer_price; ?></span>
																		</label>
																		<label class="R13_75 clubpricenew textline" id="clubBuyBannerMrpDiv3" style="margin-bottom: 0.15rem;">
																			<span class="discontedprice" id="clubBuyBannerMrp3"><del class="M24_75 planmrp"><span>₹</span><?= $card->amount; ?></del></span>
																		</label>
																		<div class="M13_white addnow_btn" ><a href="<?= base_url('Home/RoyalBenefits#mobileApp')?>" style="color:white;">Add Now</a></div>
																	</div>
																</div>
															<?php } }?>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
								<?php 
									if(!empty($addresslist)){
										$count=1;
										foreach($addresslist as $each)
										{ if($each->default_address=='true'){ 
										?>
										<div class="row mx-0 my-3 mobile-top-border">
											<div class="col-sm-12 p-3 address-details d-flex justify-content-between">
												<input type="hidden" class="customradio" id="UserName2" name="address" data-parsley-required-message="Please select address" required value="<?= $each->id?>">
												<div class="box-left">
													<p><i class="bi bi-house-door"></i>&nbsp;<span>Deliver to <b><?= $each->name?></b> <span class="hide_in_mobile">(<?=$each->address_type?>)</span></span></p> 
													<p><span><?=ucfirst($each->line1)?>,<?=ucfirst($each->state)?></span></p> 
													<p><b><?= ucfirst($each->city)?> - <?= $each->pincode?></b></p>
												</div>
												<button type="button" class="btn-chnage-address" data-toggle="modal" data-target="#AddressModal">Change</button>
											</div>
										</div>
										<?php } } }?>
										<div class="row m-0 my-3 mobile-border">
											<?php $status=[]; 
												if(!empty($coupon) || !empty($cashback) || !empty($reward)){
													
												?>
												<div class="col-sm-12 py-2 px-2 address-details" id="coupon-details">
													<div class="offer-title d-flex"><div class="pers-icon"><img class="per" src="//cdn.fcglcdn.com/brainbees/checkout/pers.jpg"></div><div class="M14_21 a-offer" style="font-weight: 600;">Available offers:</div></div> 
													<div class="offer-box">
														<ul class="mx-2 offer-list mb-1 px-3" > 
															<?php 
																$count=1;
																if(!empty($coupon)){
																	foreach($coupon as $eachcoupon){
																		if(in_array($eachcoupon->id,$prv_applied_coupon)==false){
																			$expire_date=date('y-m-d',strtotime($eachcoupon->end_date)); 
																			$start_date=date('y-m-d',strtotime($eachcoupon->start_date)); 
																			$current_date=date('y-m-d')	; 
																			
																			if(($current_date>=$start_date && $current_date<=$expire_date) AND $eachcoupon->complementry_type=='offer'){	
																				$count++; 
																			?>
																			<li <?php if($count>4){ ?>class="slideup" style="display:none;"<?php }?>><?= $eachcoupon->description?> <a href="javascript:void(0)" style="color:blue;" onclick="CouponTermsConditions('<?= $eachcoupon->id?>','coupon')">T&C</a></li>  
																				<?php 
																				}
																				else
																				{
																					array_push($status,"false");
																				}
																			}  
																		}
																	}
																?>
																<?php 
																	
																	if(!empty($user_coupon)){
																		foreach($user_coupon as $eachcoupon){
																			$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$eachcoupon->coupon_id])->row();  
																			if($couponDetails){
																				$expire_date=date('y-m-d',strtotime($couponDetails->end_date. " +15 days")); 
																				$start_date=date('y-m-d',strtotime($couponDetails->start_date)); 
																				$current_date=date('y-m-d')	; 
																				
																				if(($current_date>=$start_date && $current_date<=$expire_date) AND $couponDetails->complementry_type=='offer'){
																					$count++; 
																				?>
																				<li <?php if($count>4){ ?>class="slideup" style="display:none;"<?php }?>><?= $couponDetails->description1?> <a href="javascript:void(0)" style="color:blue;" onclick="CouponTermsConditions('<?= $couponDetails->id?>','user_coupon')">T&C</a></li>  
																					<?php 
																					}
																					else{
																						array_push($status,"false");
																					}
																				}  
																			}
																		}
																		
																	?>
																	<?php 
																		if(!empty($cashback)){
																			foreach($cashback as $eachcashback){
																				if(in_array($eachcashback->id,$prv_applied_cashback)==false){
																					$expire_date=date('y-m-d',strtotime($eachcashback->end_date)); 
																					$start_date=date('y-m-d',strtotime($eachcashback->start_date)); 
																					$current_date=date('y-m-d')	; 
																					if($current_date>=$start_date && $current_date<=$expire_date){	
																						$count++; 
																					?>
																					<li <?php if($count>4){ ?>class="slideup" style="display:none;"<?php }?>><?= $eachcashback->description?> <a href="javascript:void(0)" style="color:blue;" onclick="CouponTermsConditions('<?= $eachcashback->id?>','cashback')">T&C</a></li>  
																						<?php 
																						}
																						else{
																							array_push($status,"false");
																						}
																					}  
																				}
																			}
																		?>
																		<?php 
																			if(!empty($reward)){
																				foreach($reward as $eachreward){
																					if(in_array($eachcashback->id,$prv_applied_reward)==false){
																						$expire_date=date('y-m-d',strtotime($eachreward->end_date)); 
																						$start_date=date('y-m-d',strtotime($eachreward->start_date)); 
																						$current_date=date('y-m-d')	; 
																						if($current_date>=$start_date && $current_date<=$expire_date){	
																							$count++; 
																						?>
																						<li <?php if($count>4){ ?>class="slideup" style="display:none;"<?php }?>><?= $eachreward->description?> <a href="javascript:void(0)" style="color:blue;" onclick="CouponTermsConditions('<?= $eachreward->id?>','reward')">T&C</a></li>  
																							<?php 
																							}
																							else{
																								array_push($status,"false");
																							}
																						} 
																					}
																				}
																			?>
																		</ul>
																		<a href="javascript:void(0)" onclick="ShowMore()"  class="ml-2 <?php if($count<=4){echo 'd-none';}?>" style="color: #FF1493; font-size:12px;"><span id="ShowMore">Show More</span><i class="fa fa-angle-down ml-1 " id="angle"  style="color:#FF1493;"></i></a>  
																		<script>
																			function ShowMore(){
																				$(".slideup").toggle();
																				var button_text = jQuery("#ShowMore");
																				var angle = jQuery("#angle");
																				
																				if(button_text.html()=='Show More'){
																					button_text.html("Less More");
																				}
																				else{
																					button_text.html("Show More");
																				}
																				angle.toggleClass('fa-angle-up');
																			}
																		</script>
																	</div>
																</div>
															<?php } ?>
															
														</div>
														<?php if(!empty($out_of_stock)){?>
															<div class="row mx-0 my-3 mobile-border">
																<div class="col-sm-12 p-0 address-details d-flex justify-content-between"> 
																	<p class="d-flex font-weight-bold p-2"><img class="" src="<?= base_url('public/images/out-of-stock.png')?>" width="20" height="20" />&nbsp;<span>Out Of Stock</span></p><span class="p-2"><a href="javascript:void(0)" style="text-transform:uppercase;font-weight:600; color:#FA057E; font-size:12px;" data-toggle="modal" data-target="#OutOfStockModal">view</a></span>
																</div>
															</div>
														<?php } ?>
														<?php 
															if(!empty($list)){
																foreach($list as $each){
																	$giftwrap_price=0;
																	if($each->is_giftwrap=='true' && !empty($each->giftwrap_details)){
																		$giftDetails=json_decode($each->giftwrap_details);
																		$tbl_giftwrap=$this->db->get_where('tbl_giftwrap',['id'=>$giftDetails->giftwrapid])->row();
																		$giftwrap_price=$tbl_giftwrap->price;
																	?>
																	<div class="row gift-wrap-charge-info">
																		<div class="col-sm-12 py-2 px-2" style="background: #7ec254; color: white;">
																			<span>The item Gift Wrap Rs <?= $giftwrap_price?> has been added to your cart</span>
																		</div>
																	</div>
																	<div class="row m-0 my-3 mobile-border">
																		<div class="col-sm-12 py-2 px-2 address-details">
																			<div class="col-sm-12 p-2"> 
																				<div class="d-flex">
																					<div class="product-thumbnail">  
																						<img src="<?= base_url('uploads/giftcard/').$tbl_giftwrap->image ?>" height="120" width="100">
																					</div>
																					<div class="product-desc justify-content-between w-100"> 
																						<div class="product-details px-2 mb-0">
																							<p class="product-name" style="font-weight:bold;">Gift Wrap</p>
																							<p><span>To:</span><span class="R14_75" style="font-size:14px;"><?= $giftDetails->recipientName?></span></p> 
																							<p><span>From:</span><span class="R14_75" style="font-size:14px;"><?= $giftDetails->senderName?></span></p> 
																							<p><span>Message:</span><span class="R14_75" style="font-size:14px;"><?= $giftDetails->message?></span></p> 
																						</div>
																						<div class="price-details px-2" >
																							<div class="fclub_price fcicon_price" style="display: flex;">
																								<span class="clubp_prc">  
																									<span class="B14_Blue clbprc" style="font-size:16px;">₹<?= $tbl_giftwrap->price?> </span>
																								</span>
																							</div>
																							<div class="mrp-and-off">
																								<div><span class="R14_75 mrp"></span></div> 
																								<div class="mrp-off R14_75">MRP Includes all taxes</div>  
																							</div>
																						</div>
																					</div> 
																				</div>
																				<div class="btn-container">
																					<div class="pro-options d-flex">
																						<p class="pro-info mb-0 pr-3">
																							<a href="javascript:void(0)" style="font-weight:600;" title="edit" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap(<?= $each->id?>)" ><i class="bi bi-pencil-square"></i>&nbsp;Edit</a>
																						</p> 
																						<p class="pro-info mb-0 pl-3"> 
																							<a href="javascript:void(0)" style="font-weight:600;" title="Remove" onclick="remove('<?= $each->system_id?>','<?= $each->userid?>')"><i class="bi bi-trash"></i>Remove</a>                                              
																						</p> <br/>
																					</div>  
																				</div>
																			</div>
																		</div>
																	</div> 
																<?php break; } } }?>
																<?php
																	$TotalAmount=0;
																	$shippingCharge=40;
																	$sr=1;
																	#Fetch Total Individual Amount
																	if(!empty($listInd)){ 
																		foreach($listInd as $each)
																		{	
																			$product = $this->db->get_where('products',array('id'=>$each->product_id));
																			if($product->num_rows()>0)
																			{	$product=$product->row();
																				
																				$cartprice = $this->db->get_where('products',array('id'=>$each->product_id))->row();
																				
																				// code for check sale is available or not on this product 
																				$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->product_id,'is_status'=>'true','product_type'=>'individual'))->row();
																				$sale_status='false';
																				$sale_user_type='';
																				$sale_qty=0;
																				if(!empty($saleProduct)){
																					
																					$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																					if(!empty($tblSale)){
																						$current_date = date('Y-m-d H:i:s'); 
																						if($this->subscription=='true'){ 
																							$day_limit=$this->db->get_where('manage_content')->row(); 
																							$prev_days="-".$day_limit->royal_feature_activated_limit." day";
																							$start_date= date('Y-m-d H:i:s',strtotime($prev_days,strtotime($tblSale->start_date))); 
																						}
																						else{ 
																							$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date)); 
																						}
																						$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
																						
																						if($current_date>=$start_date AND $current_date<=$last_date){
																							
																							if($tblSale->user_type=='normal' AND $subscription=='false'){
																								$sale_status='true';
																							}
																							elseif($tblSale->user_type=='royal' AND $subscription=='true'){
																								$sale_status='true';
																								$sale_user_type='royal';
																							}
																							elseif($tblSale->user_type=='all'){
																								$sale_status='true';
																							}
																							
																							if($tblSale->discount_type=='percent'){
																								$price=$product->reg_sell_price;
																								$discount=(int)$saleProduct->discount;
																								$saleprice=$price - ( ($price/100) * $discount );
																								$saleprice=((floor($saleprice/50)*50)-1);
																							}
																							elseif($tblSale->discount_type=='flat'){
																								$price=$product->reg_sell_price;
																								$discount=(int)$saleProduct->discount;
																								$saleprice=$price -  $discount ;
																								$saleprice=((floor($saleprice/50)*50)-1);
																							}
																							elseif($tblSale->discount_type=='buy_x_get_y'){
																								$saleprice=$product->reg_sell_price;
																							}
																						}
																					}
																				}
																				
																				if($sale_status=='true')
																				{
																					$price=$saleprice;
																				}
																				else{
																					$price = $cartprice->reg_sell_price;
																				}
																				
																				if($subscription=='true'){
																					if($sale_user_type=='royal'){
																						$total=$saleprice*$each->qty;
																					}
																					else{
																						$price = (int)$cartprice->royal_amt;
																					} 
																				}
																				else{
																					$price = (int)$price;
																				}
																				
																				$total=$price*($each->qty+$sale_qty);
																				$TotalAmount+=$total;
																				
																			}
																		}
																	}
																	
																	#Fetch Total Combo Product Price
																	if(!empty($listCombo)){
																		foreach($listCombo as $each)
																		{	
																			$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
																			if($product->num_rows()>0)
																			{
																				$cartprice = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row();
																				
																				// code for check sale is available or not on this product 
																				$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','product_type'=>'combo'))->row();
																				$sale_status='false';
																				$sale_user_type='';
																				if(!empty($saleProduct)){
																					$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																					if(!empty($tblSale)){
																						$current_date = date('Y-m-d H:i:s'); 
																						if($this->subscription=='true'){ 
																							$day_limit=$this->db->get_where('manage_content')->row(); 
																							$prev_days="-".$day_limit->royal_feature_activated_limit." day";
																							$start_date= date('Y-m-d H:i:s',strtotime($prev_days,strtotime($tblSale->start_date))); 
																						}
																						else{  
																							$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date)); 
																						}
																						$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
																						if($current_date>=$start_date AND $current_date<=$last_date){
																							if($tblSale->user_type=='normal' AND $subscription=='false'){
																								$sale_status='true';
																							}
																							elseif($tblSale->user_type=='royal' AND $subscription=='true'){
																								$sale_status='true';
																								$sale_user_type='royal';
																							}
																							elseif($tblSale->user_type=='all'){
																								$sale_status='true';
																							}
																							if($tblSale->discount_type=='percent'){
																								$price=$each->discount_price;
																								$discount=(int)$saleProduct->discount;
																								$saleprice=$price - ( ($price/100) * $discount );
																								$saleprice=((floor($saleprice/50)*50)-1);
																							}
																							elseif($tblSale->discount_type=='flat'){
																								$price=$each->discount_price;
																								$discount=(int)$saleProduct->discount;
																								$saleprice=$price -  $discount ;
																								$saleprice=((floor($saleprice/50)*50)-1);
																							}
																							elseif($tblSale->discount_type=='buy_x_get_y'){
																								$saleprice=$product->discount_price;
																							}
																						}
																					}
																				}
																				
																				$subscription='false';
																				if($this->permission=='true'){
																					$userid=$this->userData->id;
																					$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
																					if($subscriber->num_rows()>0){
																						$subscriber=$subscriber->row();
																						$plan_expire_date=date('y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
																						$current_date=date('y-m-d')	; 
																						$diff =  date_diff(date_create($current_date),date_create($plan_expire_date))->format("%R%a"); 
																						if($diff>=0){
																							$total = $product->royal_amt*$each->qty;
																							$subscription='true';
																						}
																						else{
																							$total = $price*$each->qty;
																							$subscription='false';
																						}
																					}
																					else{
																						$total = $price*$each->qty;
																						$subscription='false';
																					}
																				}
																				else{
																					$total = $price*$each->qty;
																				}
																				$TotalAmount+=$total;
																			}
																		}
																	}
																	$TotalAmount=$TotalAmount+$shippingCharge+$giftwrap_price;
																?>
																<div class="row my-0">
																	<div class="col-sm-12 py-2 px-2 product-box"> 
																		<?php
																			$coupon_msg='';
																			$totalIndividualPrice=0;
																			$totalIndividualClubCash=0;
																			$totalIndividualNormolPrice=0;
																			$totalIndividualMrp=0;
																			$sr=1;
																			if(!empty($listInd)){ 
																				foreach($listInd as $each)
																				{	
																					$product = $this->db->get_where('products',array('id'=>$each->product_id));
																					if($product->num_rows()>0)
																					{
																						$product = $product->row();
																						$icons = explode(',',$product->image1);
																						$variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
																						if(!empty($variant->row()->variant_img)){
																							$icons = explode(',',$variant->row()->variant_img);
																							}else{
																							$icons = explode(',',$product->image1);
																						}
																						
																						if($variant->num_rows()>0)
																						{
																							$variant = $variant->row();
																							$cartprice = $this->db->get_where('products',array('id'=>$each->product_id))->row();
																							
																							// code for check sale is available or not on this product 
																							$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->product_id,'is_status'=>'true','product_type'=>'individual'))->row();
																							$sale_status='false';
																							$sale_user_type='';
																							$sale_qty=0;
																							if(!empty($saleProduct)){
																								
																								$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																								if(!empty($tblSale)){
																									$current_date = date('Y-m-d H:i:s'); 
																									if($this->subscription=='true'){ 
																										$day_limit=$this->db->get_where('manage_content')->row(); 
																										$prev_days="-".$day_limit->royal_feature_activated_limit." day";
																										$start_date= date('Y-m-d H:i:s',strtotime($prev_days,strtotime($tblSale->start_date))); 
																									}
																									else{ 
																										$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date)); 
																									}
																									$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
																									
																									if($current_date>=$start_date AND $current_date<=$last_date){
																										$date_difference = date_diff(date_create($current_date),date_create($last_date));  
																										$days=$date_difference->format('%r%a');
																										$hour=$date_difference->format('%r%h');
																										$min=$date_difference->format('%r%i');
																										$sec=$date_difference->format('%r%s');  
																										$timer=$days."D".$hour."H".$min."M".$sec."S" ;
																										
																										if($tblSale->user_type=='normal' AND $subscription=='false'){
																											$sale_status='true';
																										}
																										elseif($tblSale->user_type=='royal' AND $subscription=='true'){
																											$sale_status='true';
																											$sale_user_type='royal';
																										}
																										elseif($tblSale->user_type=='all'){
																											$sale_status='true';
																										}
																										
																										if($tblSale->discount_type=='percent'){
																											$price=$product->reg_sell_price;
																											$discount=(int)$saleProduct->discount;
																											$saleprice=$price - ( ($price/100) * $discount );
																											$saleprice=((floor($saleprice/50)*50)-1);
																										}
																										elseif($tblSale->discount_type=='flat'){
																											$price=$product->reg_sell_price;
																											$discount=(int)$saleProduct->discount;
																											$saleprice=$price -  $discount ;
																											$saleprice=((floor($saleprice/50)*50)-1);
																										}
																										elseif($tblSale->discount_type=='buy_x_get_y'){
																											$saleprice=$product->reg_sell_price;
																										}
																									}
																								}
																							}
																							
																							if($sale_status=='true')
																							{
																								$price=$saleprice;
																							}
																							else{
																								$price = $cartprice->reg_sell_price;
																							}
																							
																							if($subscription=='true'){
																								if($sale_user_type=='royal'){
																									$price=$saleprice;
																								}
																								else{
																									$price = (int)$cartprice->royal_amt;
																								} 
																							}
																							else{
																								$price = (int)$price;
																							}
																							
																							$coupon_discount=0;
																							$coupon_product_qty=0; #buy one get one qty
																							if($each->coupon_status=='true'){
																								$coupon_id=$each->coupon_id;
																								$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$coupon_id,'is_status'=>'true'])->row(); 
																								if(!empty($couponDetails)){
																									$expire_date=date('y-m-d',strtotime($couponDetails->end_date)); 
																									$start_date=date('y-m-d',strtotime($couponDetails->start_date)); 
																									$current_date=date('y-m-d')	; 
																									if(($current_date>=$start_date && $current_date<=$expire_date) AND ($couponDetails->min_order<=$TotalAmount)){   
																										if($couponDetails->coupon_type=='Discount on minimum purchase' || $couponDetails->coupon_type=='New Customer Coupons' || $couponDetails->coupon_type=='Loyalty coupons'  || $couponDetails->coupon_type=='Get X% or XX rs on prebook order'){
																											if($couponDetails->type=='flat'){
																												$coupon_discount=$couponDetails->discount;
																											}
																											elseif($couponDetails->type=='percent'){
																												$coupon_discount=($TotalAmount*$couponDetails->discount)/100;
																												if($coupon_discount>$couponDetails->max_discount){
																													$coupon_discount=$couponDetails->max_discount;
																												}
																											}
																											$subTotal-=$coupon_discount;
																											$auto_apply='true';
																											$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You saved additional '.$coupon_discount.'</span></div>';
																										}
																										elseif($couponDetails->coupon_type=='Free shipping coupon'){
																											$coupon_discount=$shippingCharge;
																											$subTotal-=$coupon_discount;
																											$auto_apply='free shipping'; 
																											$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You Saved Your Shipping Charges</span></div>';
																										}
																										elseif($couponDetails->coupon_type=='Complementary discount coupons')
																										{	
																											$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You will get complementry with purchase</span></div>';
																										}
																										elseif($couponDetails->coupon_type=='Buy-one-get-one coupons'){
																											$coupon_product_qty-=1;
																											$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">Get a product free of cost with this applied coupon</span></div>';
																										}
																										elseif($couponDetails->coupon_type=='Free gift with purchase'){
																											$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You will get free gift with purchase</span></div>';
																										} 
																									}
																									else{
																										$this->db->where('id',$coupon_id)->update('tbl_cart',['coupon_status'=>'','coupon_id'=>'']);
																									}
																								}
																							}
																							
																							$total=($price-$coupon_discount)*($each->qty+$sale_qty+$coupon_product_qty);
																							$totalMrp = $cartprice->mrp*$each->qty;
																							$totalDiscount=(($totalMrp-$total)/$totalMrp)*100;
																							$totalIndividualPrice+=$total;
																							$totalIndividualMrp+=$totalMrp;
																							if($plan_duration==12){$totalIndividualClubCash+=((int)$cartprice->royal_clubcash*$each->qty)*2;}else{$totalIndividualClubCash+=(int)$cartprice->royal_clubcash*$each->qty;};
																							$totalIndividualNormolPrice+=$cartprice->reg_sell_price*$each->qty; 
																						?>
																						<div class="row m-0 my-2" style="<?php if($each->availability=='false'){echo 'border:1px solid #ff2800;';}else{echo 'border:1px solid lavender;';}?>">
																							<div class="col-sm-12 p-2 border:1px solid lavender; margin:8px 4px;">
																								<div class="d-flex">
																									<div class="product-thumbnail">  
																										<a href="<?= base_url('Home/ProductDetails/'.$each->product_id.'/'.$each->variant_id)?>"><img src="<?= base_url('uploads/product/').$icons[0]; ?>" height="160" width="145"></a>
																										<div class="cart-quantity hide_desktop">
																											<div class="pro-options mt-1">
																												<div class="size-selection">
																													Qty:
																													<?php 
																														$variants=$this->db->get_where('product_variant',['id'=>$each->variant_id,'product_id'=>$each->product_id])->row();
																														$json=json_decode($variants->size);
																														foreach ($json as $eachSize){
																															foreach($eachSize as $size=>$size_stock){
																																
																																if($each->availability=='false'){
																																	if($size!='NA'){
																																		
																																		if($each->size==$size && $size_stock<1){ 
																																			echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";
																																		}
																																		elseif($size==$each->size AND $size_stock<$each->qty){
																																			echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Only&nbsp;".$size_stock."&nbsp;left in stock</span>";
																																		}
																																		
																																		if($size==$each->size AND $size_stock<$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																																		}
																																		elseif($size==$each->size AND $size_stock>=$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																																		}
																																	}
																																	else{ 
																																		
																																		if($each->size==$size && $product->stock<1){ 
																																			echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";
																																		}
																																		elseif($size==$each->size AND $product->stock<$each->qty){
																																			echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Only&nbsp;".$product->stock."&nbsp;left in stock</span>";
																																		}
																																		if($product->stock<$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																																		}
																																		elseif($product->stock>=$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																																		}
																																	}
																																}
																																else{
																																	if($size!='NA'){
																																		
																																		if($each->size==$size && $size_stock<6){ 
																																			echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>".$size_stock."&nbsp;left</span>";
																																		}
																																		if($size==$each->size AND $size_stock<$each->qty){
																																			
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																																			}elseif($size==$each->size AND $size_stock>=$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																																		}
																																	}
																																	else{ 
																																		
																																		if($product->stock<$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																																		}
																																		elseif($product->stock>=$each->qty){
																																			$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																																		}
																																	}
																																}
																															}
																														}
																													?>
																													<div class="input-group item-quantity">
																														<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																														<span class="input-group-btn">
																															<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																																<span class="fas fa-plus"></span>
																															</button>
																															<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																																<span class="fas fa-minus"></span>
																															</button>
																														</span> 
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="product-desc w-100"> 
																										<div class="product-details px-2 mb-0 w-75">
																											<p class="product-name">
																												<a href="<?= base_url('Home/ProductDetails/'.$each->product_id.'/'.$each->variant_id)?>"><?= $product->title;?></a>
																											</p>
																											<?php if($each->size!='NA'){?><p><span class="R14_75" style="font-size:14px;">Size:</span><?= $each->size?></p><?php } ?>
																											<?php if($product->gift_wrap!='true'){?><p class="mb-1"><span class="R14_75" style="font-size:12px; font-weight:500;">Gift wrap is not available for this product.</span></p><?php } ?>
																											<?php if($each->coupon_status=='true'){
																												$coupon_id=$each->coupon_id;
																												$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$coupon_id,'is_status'=>'true'])->row(); 
																												if(!empty($couponDetails)){ 
																												?>
																												<button type="button" id="pover-card<?= $sr?>" data-placement="top" data-toggle="popover" data-trigger="focus" class="btn-chnage-address" style="float:unset; padding:2px !important; border-radius:0; text-transform:capitalize;">1 Offer Applied</button>
																												<?php }else{
																													$this->db->where(['id'=>$each->id])->update('tbl_cart',['coupon_status'=>'','coupon_id'=>'']);
																												} } ?>
																												<p class="mb-0"><span class="R14_75" style="font-size:13px !important; font-weight:500; color:darkslategrey;"><svg viewBox="0 0 29 30" class="pincode-serviceabilityIcon m-0"><g fill="none" fill-rule="evenodd"><path d="M0 1h24v24H0z"></path><path d="M21.872 12.843l-.68 3.849a1.949 1.949 0 00-.398-.819c-.377-.447-.925-.693-1.549-.693-1.024 0-1.98.669-2.395 1.601l1.159-6.571h1.703c.7 0 1.31.265 1.713.746.415.494.573 1.164.447 1.887m-3.238 5.812c-.297 0-.55-.108-.715-.306-.172-.204-.236-.486-.183-.795.123-.698.816-1.288 1.51-1.288.296 0 .55.108.716.306.17.204.235.486.18.794-.123.699-.814 1.289-1.508 1.289m-11.308 0c-.295 0-.55-.108-.715-.306-.171-.204-.236-.486-.18-.794.122-.699.814-1.289 1.508-1.289.296 0 .55.108.714.306.172.204.237.486.182.794-.123.699-.815 1.289-1.509 1.289m14.932-8.397c-.616-.731-1.518-1.134-2.546-1.134H18.2l.262-1.487A.546.546 0 0017.927 7H6.417a.543.543 0 100 1.086H17.28l-1.557 8.832h-5.8a1.965 1.965 0 00-.438-1.045c-.376-.447-.926-.693-1.548-.693-1.074 0-2.074.734-2.454 1.738h-.356l.143-.811a.543.543 0 10-1.069-.188l-.256 1.447a.546.546 0 00.535.637h.86c.045.389.194.753.438 1.045.375.446.925.693 1.548.693 1.075 0 2.075-.734 2.454-1.738h6.867c.044.389.194.752.439 1.045.375.446.925.693 1.547.693 1.075 0 2.075-.734 2.454-1.738h.52c.264 0 .49-.189.534-.449l.799-4.523c.184-1.043-.058-2.028-.683-2.773" fill="#535766"></path><path d="M9.812 9.667c0-.3-.243-.543-.543-.543H1.543a.544.544 0 000 1.086h7.726c.3 0 .543-.243.543-.543M9.387 12.074c0-.3-.243-.543-.543-.543h-5.82a.543.543 0 100 1.086h5.82c.3 0 .543-.243.543-.543M8.42 13.938H4.502a.543.543 0 100 1.086H8.42a.543.543 0 100-1.086" fill="#535766"></path></g></svg>Get it by <b>Wednesday, Apr 12</b></span></p>
																												<p class="mb-0"><span class="R14_75" style="font-size:13px !important; font-weight:500; color:darkslategrey;">Dispatch Within:<b>24 Hours</b></span></p>
																										</div>
																										
																										<div class="price-details">
																											<?php if($sale_status=='true'){?> <span class="mb-2 text-success"><?php if($tblSale->discount_type=='percent'){echo $saleProduct->discount.'% extra discount on this sale';}elseif($tblSale->discount_type=='flat'){echo '₹'.$saleProduct->discount.' extra off on this sale';}elseif($tblSale->discount_type=='buy_x_get_y'){echo 'Buy 1 get '.$saleProduct->discount.' on this sale';}?></span><?php } ?>
																											<?php 
																												
																												if($subscription!='true'){?>
																												<div class="fclub_price fcicon_price" style="display: flex;">
																													<span class="clubp_prc">  
																														<span class="B14_Blue clbprc">₹<?=$total?></span>
																													</span>
																												</div>
																												<?php }else{ ?>
																												<div class="fclub_price fcicon_price" style="display: flex;">
																													<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png">
																													<span class="clubp_prc">  
																														<span class="B14_Blue clbprc">₹<?=$total?></span>
																													</span>
																												</div>
																											<?php }?>
																											<div class="mrp-and-off">
																												<div><span class="R14_75 mrp">MRP</span>&nbsp;<span class="R14_75"><del>₹<?=$totalMrp?></del></span>&nbsp;&nbsp;<span class="R14_red text-danger" style="font-size: 12px;font-weight: 600;"><?=round($totalDiscount,0)?>% OFF</span></div> 
																												<div class="mrp-off R14_75">MRP Includes all taxes</div>
																												<div class="fclub_price" style="">
																													<?php if($subscription!='true'){?>
																														<div class="d-flex">
																															<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png">
																															<span class="clubp_prc">
																																<span class="B14_Blue">Club Price :</span>
																																<span class="B14_Blue clbprc nonclbprc">₹<?=(int)$cartprice->royal_amt*$each->qty?></span>
																															</span>
																														</div>
																														<?php }else{?>
																														<div class="mrp-off R13_42 d-flex">  
																															<span class="clubcoin"><img src="//cdn.fcglcdn.com/brainbees/checkout/club_cash.png" alt="loading" class="clbbImage"></span><span class="R13_42">Earn Club Cash: </span><span class="R14_42 earnlcValue">₹<?php if($plan_duration==3){echo (int)$cartprice->royal_clubcash;}else{echo (int)($cartprice->royal_clubcash)*2;}?></span>
																														</div>
																													<?php } ?> 
																												</div>  
																												
																												<div class="cart-quantity hide_in_mobile">
																													<div class="pro-options mt-1">
																														<div class="size-selection">
																															Qty:
																															<?php 
																																$variants=$this->db->get_where('product_variant',['id'=>$each->variant_id,'product_id'=>$each->product_id])->row();
																																$json=json_decode($variants->size);
																																foreach ($json as $eachSize){
																																	foreach($eachSize as $size=>$size_stock){
																																		if($each->availability=='false'){
																																			if($size!='NA'){
																																				
																																				if($each->size==$size && $size_stock<1){ 
																																					echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";
																																				}
																																				elseif($size==$each->size AND $size_stock<$each->qty){
																																					echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Only&nbsp;".$size_stock."&nbsp;left in stock</span>";
																																				}
																																			}
																																			else{ 
																																				
																																				if($each->size==$size && $product->stock<1){ 
																																					echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";
																																				}
																																				elseif($size==$each->size AND $product->stock<$each->qty){
																																					echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Only&nbsp;".$product->stock."&nbsp;left in stock</span>";
																																				}
																																			}
																																		}
																																		else{
																																			if($size!='NA'){
																																				if($each->size==$size && $size_stock<6){ 
																																					echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>".$size_stock."&nbsp;left</span>";
																																				}
																																			}
																																		}
																																	}
																																}
																															?>
																															
																															<div class="input-group item-quantity">
																																<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																																<span class="input-group-btn">
																																	<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																																		<span class="fas fa-plus"></span>
																																	</button>
																																	<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																																		<span class="fas fa-minus"></span>
																																	</button>
																																</span>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div> 
																								</div>
																								<div class="btn-container">
																									<div class="pro-options d-flex">
																										<p class="pro-info mb-0 pr-3">
																											<a href="javascript:void(0)" onclick="MoveToWishlist('<?=$each->id?>','ind')" title="move to wishlist" class="delete" ><i class="bi bi-suit-heart"></i> Wishlist</a>
																										</p> 
																										<p class="pro-info mb-0 pl-3"> 
																											<a href="javascript:void(0)" title="Delete" onclick="return Delete(this,'tbl_cart','id','<?= $each->id?>','','')"><i class="bi bi-trash"></i>Remove</a>                                              
																										</p> <br/>
																									</div>  
																								</div>
																							</div>
																						</div>
																						<?php	
																						}
																					}
																				$sr++; }
																			}
																		?> 
																		<!--combo product start-->
																		<?php
																			$totalComboPrice=0;
																			$totalComboMrp=0;
																			$totalComboClubCash=0;
																			$totalComboNormolPrice=0;
																			
																			if(!empty($listCombo)){
																				foreach($listCombo as $each)
																				{	
																					$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
																					if($product->num_rows()>0)
																					{
																						$product = $product->row();
																						$icons = explode(',',$product->image);
																						$cartprice = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row();
																						
																						// code for check sale is available or not on this product 
																						$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','product_type'=>'combo'))->row();
																						$sale_status='false';
																						$sale_user_type='';
																						if(!empty($saleProduct)){
																							$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																							if(!empty($tblSale)){
																								$current_date = date('Y-m-d H:i:s'); 
																								if($this->subscription=='true'){ 
																									$day_limit=$this->db->get_where('manage_content')->row(); 
																									$prev_days="-".$day_limit->royal_feature_activated_limit." day";
																									$start_date= date('Y-m-d H:i:s',strtotime($prev_days,strtotime($tblSale->start_date))); 
																								}
																								else{  
																									$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date)); 
																								}
																								$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
																								if($current_date>=$start_date AND $current_date<=$last_date){
																									$date_difference = date_diff(date_create($current_date),date_create($last_date));  
																									$days=$date_difference->format('%r%a');
																									$hour=$date_difference->format('%r%h');
																									$min=$date_difference->format('%r%i');
																									$sec=$date_difference->format('%r%s');  
																									$timer=$days."D".$hour."H".$min."M".$sec."S" ;
																									if($tblSale->user_type=='normal' AND $subscription=='false'){
																										$sale_status='true';
																									}
																									elseif($tblSale->user_type=='royal' AND $subscription=='true'){
																										$sale_status='true';
																										$sale_user_type='royal';
																									}
																									elseif($tblSale->user_type=='all'){
																										$sale_status='true';
																									}
																									if($tblSale->discount_type=='percent'){
																										$price=$each->discount_price;
																										$discount=(int)$saleProduct->discount;
																										$saleprice=$price - ( ($price/100) * $discount );
																										$saleprice=((floor($saleprice/50)*50)-1);
																									}
																									elseif($tblSale->discount_type=='flat'){
																										$price=$each->discount_price;
																										$discount=(int)$saleProduct->discount;
																										$saleprice=$price -  $discount ;
																										$saleprice=((floor($saleprice/50)*50)-1);
																									}
																									elseif($tblSale->discount_type=='buy_x_get_y'){
																										$saleprice=$product->discount_price;
																									}
																								}
																							}
																						}
																						
																						$subscription='false';
																						if($this->permission=='true'){
																							$userid=$this->userData->id;
																							$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
																							if($subscriber->num_rows()>0){
																								$subscriber=$subscriber->row();
																								$plan_expire_date=date('y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
																								$current_date=date('y-m-d')	; 
																								$diff =  date_diff(date_create($current_date),date_create($plan_expire_date))->format("%R%a"); 
																								if($diff>=0){
																									$total = $product->royal_amt;
																									$subscription='true';
																								}
																								else{
																									$total = $price;
																									$subscription='false';
																								}
																							}
																							else{
																								$total = $price;
																								$subscription='false';
																							}
																						}
																						else{
																							$total = $price;
																						}
																						
																						$coupon_discount=0;
																						$coupon_product_qty=0;
																						if($each->coupon_status=='true'){
																							$coupon_id=$each->coupon_id;
																							$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$coupon_id])->row(); 
																							if(!empty($couponDetails)){
																								$expire_date=date('y-m-d',strtotime($couponDetails->end_date)); 
																								$start_date=date('y-m-d',strtotime($couponDetails->start_date)); 
																								$current_date=date('y-m-d')	; 
																								if(($current_date>=$start_date && $current_date<=$expire_date) AND ($couponDetails->min_order<=$TotalAmount)){   
																									
																									if($couponDetails->coupon_type=='Discount on minimum purchase' || $couponDetails->coupon_type=='New Customer Coupons' || $couponDetails->coupon_type=='Loyalty coupons'  || $couponDetails->coupon_type=='Get X% or XX rs on prebook order'){
																										if($couponDetails->type=='flat'){
																											$coupon_discount=$couponDetails->discount;
																										}
																										elseif($couponDetails->type=='percent'){
																											$coupon_discount=($TotalAmount*$couponDetails->discount)/100;
																											if($coupon_discount>$couponDetails->max_discount){
																												$coupon_discount=$couponDetails->max_discount;
																											}
																										}
																										$subTotal-=$coupon_discount;
																										$auto_apply='true';
																										$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You saved additional '.$coupon_discount.'</span></div>';
																									}
																									elseif($couponDetails->coupon_type=='Free shipping coupon'){
																										$coupon_discount=$shippingCharge;
																										$subTotal-=$coupon_discount;
																										$auto_apply='free shipping'; 
																										$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You Saved Your Shipping Charges</span></div>';
																									}
																									elseif($couponDetails->coupon_type=='Complementary discount coupons')
																									{
																										$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You will get complementry with purchase</span></div>';
																									}
																									elseif($couponDetails->coupon_type=='Buy-one-get-one coupons'){
																										$coupon_product_qty-=1;
																										$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">Get extra product with purchase</span></div>';
																									}
																									elseif($couponDetails->coupon_type=='Free gift with purchase'){
																										$coupon_msg= '<div style="line-height: 1.1;"><span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">'.$couponDetails->coupon.' Coupon Applied</span><br><span style="font-size: 12px; font-weight: 500;color:#7ec254;">You will get free gift with purchase</span></div>';
																									} 
																								}
																								else{
																									$this->db->where('id',$coupon_id)->update('tbl_cart',['coupon_status'=>'','coupon_id'=>'']);
																								}
																							}
																						}
																						
																						$totalMrp=$cartprice->price*$each->qty; 
																						$totalDiscount=(($totalMrp-$total)/$totalMrp)*100;
																						$totalComboPrice+=($total-$coupon_discount)*($each->qty+$coupon_product_qty);
																						$totalComboMrp+=$totalMrp;
																						$totalComboNormolPrice=$cartprice->discount_price; 
																						if($plan_duration==12){$totalComboClubCash+=((int)$cartprice->royal_clubcash*$each->qty)*2;}else{$totalComboClubCash+=(int)$cartprice->royal_clubcash*$each->qty;};
																						
																						#Check Stock For Combo
																						$items=explode(",",$each->product_id); 
																						$itemsVariant=explode(",",$each->variant_id);
																						$sizes=explode(",",$each->size);
																						if(!empty($items) AND !empty($itemsVariant)){
																							for($i=0;$i<count($items);$i++){
																								$product=$this->db->get_where('products',['id'=>$items[$i]])->row();
																								$variants=$this->db->get_where('product_variant',['id'=>$itemsVariant[$i],'product_id'=>$items[$i]])->row();
																								$json=json_decode($variants->size,2);  
																								foreach($json as $jsoneach){
																									foreach($jsoneach as $size=>$size_stock){
																										if($sizes[$i]!='NA'){
																											if($size==$sizes[$i]){
																												if($size_stock<$each->qty){
																													$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																												}
																												else{
																													$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																												}
																												break;
																											}
																										}
																										else{
																											if($product->stock<$each->qty){
																												$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'false']);
																											}
																											else{
																												$this->db->where('id',$each->id)->update('tbl_cart',['availability'=>'']);
																											}
																											break;
																										}
																									}
																								} 
																								$is_false=$this->db->get_where('tbl_cart',['id'=>$each->id,'availability'=>'false'])->num_rows();
																								if($is_false>0){
																									break; 
																								}
																							}
																						}
																					?>
																					<div class="row my-2 m-0" style="<?php if($each->availability=='false'){echo 'border:1px solid #ff2800;';}else{echo 'border:1px solid lavender;';}?>">
																						<div class="col-sm-12 py-2">
																							<div class="d-flex">
																								<div class="product-thumbnail">  
																									<a href="<?= base_url('Home/ProductComboDetails/'.$each->combo_id)?>"><img src="<?= base_url('uploads/product/').$icons[0]; ?>" height="160" width="145"></a>
																									<div class="cart-quantity hide_desktop">
																										<div class="pro-options mt-1">
																											<div class="size-selection">
																												Qty: <?php if($each->availability=='false'){echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";}?>
																												<div class="input-group item-quantity">
																													<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																													<span class="input-group-btn">
																														<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																															<span class="fas fa-plus"></span>
																														</button>
																														<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																															<span class="fas fa-minus"></span>
																														</button>
																													</span>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																								<div class="product-desc w-100"> 
																									<div class="product-details px-2 mb-0 w-75">
																										<p class="product-name mb-0">
																											<a href="<?= base_url('Home/ProductComboDetails/'.$each->combo_id)?>"><?= $product->name;?></a>
																										</p>
																										<div class="pro-options py-1">
																											<span style="font-weight:600;text-transform:uppercase; font-size:12px;">Combo Items: </span><br>
																											<span class="pro-info" style="text-transform: capitalize; font-size:12px;">
																												<?php 
																													$pid=explode(",",$each->product_id);
																													foreach($pid as $id){
																														$pdata=$this->db->get_where('products',array('id'=>$id))->row();
																														echo $pdata->name."</br>";
																													}
																												?>             
																											</span> 
																										</div>
																										<p><span class="R14_75" style="font-size:14px;">Size:</span><?= $each->size?></p> 
																										<?php if($product->gift_wrap!='true'){?><p class="mb-1"><span class="R14_75" style="font-size:12px; font-weight:500;">Gift wrap is not available for this product.</span></p><?php } ?>
																										<?php if($each->coupon_status=='true'){
																											$coupon_id=$each->coupon_id;
																											$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$coupon_id,'is_status'=>'true'])->row(); 
																											if(!empty($couponDetails)){  
																											?>
																											<button type="button" id="pover-card<?= $sr?>" data-placement="top" data-toggle="popover" data-trigger="focus" class="btn-chnage-address" style="float:unset; padding:2px !important; border-radius:0; text-transform:capitalize;">1 Offer Applied</button>
																											<?php  }else{
																												$this->db->where(['id'=>$each->id])->update('tbl_cart',['coupon_status'=>'','coupon_id'=>'']);
																											} } ?>
																											<p class="mb-0"><span class="R14_75" style="font-size:13px !important; font-weight:500; color:darkslategrey;"><svg viewBox="0 0 29 30" class="pincode-serviceabilityIcon m-0"><g fill="none" fill-rule="evenodd"><path d="M0 1h24v24H0z"></path><path d="M21.872 12.843l-.68 3.849a1.949 1.949 0 00-.398-.819c-.377-.447-.925-.693-1.549-.693-1.024 0-1.98.669-2.395 1.601l1.159-6.571h1.703c.7 0 1.31.265 1.713.746.415.494.573 1.164.447 1.887m-3.238 5.812c-.297 0-.55-.108-.715-.306-.172-.204-.236-.486-.183-.795.123-.698.816-1.288 1.51-1.288.296 0 .55.108.716.306.17.204.235.486.18.794-.123.699-.814 1.289-1.508 1.289m-11.308 0c-.295 0-.55-.108-.715-.306-.171-.204-.236-.486-.18-.794.122-.699.814-1.289 1.508-1.289.296 0 .55.108.714.306.172.204.237.486.182.794-.123.699-.815 1.289-1.509 1.289m14.932-8.397c-.616-.731-1.518-1.134-2.546-1.134H18.2l.262-1.487A.546.546 0 0017.927 7H6.417a.543.543 0 100 1.086H17.28l-1.557 8.832h-5.8a1.965 1.965 0 00-.438-1.045c-.376-.447-.926-.693-1.548-.693-1.074 0-2.074.734-2.454 1.738h-.356l.143-.811a.543.543 0 10-1.069-.188l-.256 1.447a.546.546 0 00.535.637h.86c.045.389.194.753.438 1.045.375.446.925.693 1.548.693 1.075 0 2.075-.734 2.454-1.738h6.867c.044.389.194.752.439 1.045.375.446.925.693 1.547.693 1.075 0 2.075-.734 2.454-1.738h.52c.264 0 .49-.189.534-.449l.799-4.523c.184-1.043-.058-2.028-.683-2.773" fill="#535766"></path><path d="M9.812 9.667c0-.3-.243-.543-.543-.543H1.543a.544.544 0 000 1.086h7.726c.3 0 .543-.243.543-.543M9.387 12.074c0-.3-.243-.543-.543-.543h-5.82a.543.543 0 100 1.086h5.82c.3 0 .543-.243.543-.543M8.42 13.938H4.502a.543.543 0 100 1.086H8.42a.543.543 0 100-1.086" fill="#535766"></path></g></svg>Get it by <b>Wednesday, Apr 12</b></span></p>
																											<p class="mb-0"><span class="R14_75" style="font-size:13px !important; font-weight:500; color:darkslategrey;">Dispatch Within:<b>24 Hours</b></span></p>
																									</div>
																									<div class="price-details">
																										<?php if($sale_status=='true'){?> <span class="mb-2 text-success"><?php if($tblSale->discount_type=='percent'){echo $saleProduct->discount.'% extra discount on this sale';}elseif($tblSale->discount_type=='flat'){echo '₹'.$saleProduct->discount.' extra off on this sale';}elseif($tblSale->discount_type=='buy_x_get_y'){echo 'Buy 1 get '.$saleProduct->discount.' on this sale';}?></span><?php } ?>
																										<?php if($subscription!='true'){?>
																											<div class="fclub_price fcicon_price" style="display: flex;">
																												<span class="clubp_prc">  
																													<span class="B14_Blue clbprc">₹<?=$total?></span>
																												</span>
																											</div>
																											<?php }else{ ?>
																											<div class="fclub_price fcicon_price" style="display: flex;">
																												<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png">
																												<span class="clubp_prc">  
																													<span class="B14_Blue clbprc">₹<?=$total?></span>
																												</span>
																											<?php }?> 
																											<div class="mrp-and-off">
																												<div><span class="R14_75 mrp">MRP</span>&nbsp;<span class="R14_75"><del>₹<?=$totalMrp?></del></span>&nbsp;&nbsp;<span class="R14_red text-danger" style="font-size: 12px;font-weight: 600;"><?=round($totalDiscount,0)?>% OFF</span></div> 
																												<div class="mrp-off R14_75">MRP Includes all taxes</div>
																												<div class="fclub_price" style="">
																													<?php if($subscription!='true'){?>
																														<div class="d-flex">
																															<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png">
																															<span class="clubp_prc">
																																<span class="B14_Blue">Club Price :</span>
																																<span class="B14_Blue clbprc nonclbprc">₹<?=$total?></span>
																															</span>
																														</div>
																														<?php }else{?>
																														<div class="mrp-off R13_42 d-flex">  
																															<span class="clubcoin"><img src="//cdn.fcglcdn.com/brainbees/checkout/club_cash.png" alt="loading" class="clbbImage"></span><span class="R13_42">Earn Club Cash: </span><span class="R14_42 earnlcValue"> ₹<?php if($plan_duration==3){echo $product->royal_clubcash;}else{echo ($product->royal_clubcash)*2;}?></span>
																														</div>
																													<?php } ?>
																												</div> 
																												
																												<div class="cart-quantity hide_in_mobile">
																													<div class="pro-options mt-1">
																														<div class="size-selection">
																															Qty:<?php if($each->availability=='false'){echo "<span class='badge' style='background: white;color: #ff2800; border: 1px solid #ff2800; border-radius: 2px;'>Out Of Stock</span>";}?>
																															<div class="input-group item-quantity">
																																<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																																<span class="input-group-btn">
																																	<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																																		<span class="fas fa-plus"></span>
																																	</button>
																																	<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																																		<span class="fas fa-minus"></span>
																																	</button>
																																</span>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div> 
																								</div>
																								<div class="btn-container">
																									<div class="pro-options d-flex">
																										<p class="pro-info mb-0 pr-3">
																											<a href="javascript:void(0)" onclick="MoveToWishlist(<?=$each->id?>,'combo')" title="move to wishlist" class="delete" ><i class="bi bi-suit-heart"></i> Wishlist</a>
																										</p> 
																										<p class="pro-info mb-0 pl-3"> 
																											<a href="javascript:void(0)" title="Delete" onclick="return Delete(this,'tbl_cart','id','<?=$each->id?>','','')"><i class="bi bi-trash"></i>Remove</a>                                              
																										</p> <br/>
																									</div>  
																								</div>
																							</div>
																						</div>
																						<?php
																							
																						}
																					}
																				}
																			?>
																		</div>
																	</div>
																</div>
																<!--Set Total price-->
																<?php
																	$totalMrp=($totalIndividualMrp+$totalComboMrp);
																	$totalOfferPrice=($totalIndividualPrice+$totalComboPrice);
																	$discount=($totalMrp-$totalOfferPrice);
																	$subTotal=$totalOfferPrice+$shippingCharge+$giftwrap_price;
																	$TotalPaidAmount=$totalOfferPrice+$shippingCharge+$giftwrap_price;
																?>
																<div class="col-sm-4 no-padding">
																	<?php 
																		if($this->sitepermission->royal_subscription){
																			if($subscription=='false'){ ?>
																			<div class="row m-0 hide_in_mobile">
																				<div class="col-sm-12 p-0">
																					<div class="club_banner newclub_banner mb-2" id="newclub_banner" style="">
																						<div class="clubbanner_img">
																							<img src="https://img.freepik.com/free-vector/cloudy-watercolor-background_91008-459.jpg?size=626&ext=jpg&ga=GA1.1.1508475195.1679125572&semt=ais" alt="Club banner" style="transform: rotate(180deg);">
																							<div class="white_strip" id="saveStrip">
																								<div>
																									<img src="//cdn.fcglcdn.com/brainbees/checkout/club-white.png" alt="">
																									<div class="club_text">
																										<img src="//cdn.fcglcdn.com/brainbees/checkout/clublogo.png" alt="club logo">
																										<span id="joinClubTxtWithoutCoupon">
																											<span class="R12_blue jointext">
																												Join Royal Club &amp; Save <span>₹<span id="royal_saving"></span> with this Order&nbsp;<i class="bi bi-info-circle-fill" data-toggle="modal" data-target="#SavingModal" style="cursor:pointer; font-size: 14px;"></i>
																												</span>
																											</span>
																										</div>
																									</div>
																								</div>
																								<div class="clubsubscription">
																									<?php 
																										if(!empty($royalcard)){ 
																											$sr=1;
																											foreach($royalcard as $card){
																											?>
																											<div class="threemnth_subscription widthcls">
																												<div class="M14_21 newclubtxt"><?= $card->duration; ?>&nbsp;<?= strtoupper($card->plan_type); ?></div>
																												<div class="newclubprice">
																													<label class="B14_blue clubpricenew" id="clubBuyBannerAPDiv3" style="margin-bottom: 0.15rem;">
																														<span class="rupees-icon fontsize" data-icon=""></span>
																														<span class="discontedprice" id="clubBuyBannerAP3"><span>₹</span><?= $card->offer_price; ?></span>
																													</label>
																													<label class="R13_75 clubpricenew textline" id="clubBuyBannerMrpDiv3" style="margin-bottom: 0.15rem;">
																														<span class="discontedprice" id="clubBuyBannerMrp3"><del class="M24_75 planmrp"><span>₹</span><?= $card->amount; ?></del></span>
																													</label>
																													<div class="M13_white addnow_btn" ><a href="<?= base_url('Home/RoyalBenefits#mobileApp')?>" style="color:white;">Add Now</a></div>
																												</div>
																											</div>
																										<?php } }?>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			<?php } } ?>
																			<?php 
																				
																				if(!empty($coupon)){
																					$coupon_existence_status=[];
																					foreach($coupon as $eachcoupon){ 
																						if(in_array($eachcoupon->id,$prv_applied_coupon)==false){
																							$expire_date=date('y-m-d',strtotime($eachcoupon->end_date)); 
																							$start_date=date('y-m-d',strtotime($eachcoupon->start_date)); 
																							$current_date=date('y-m-d')	; 
																							if(($current_date>=$start_date && $current_date<=$expire_date) AND $eachcoupon->complementry_type=='coupon'){
																								array_push($coupon_existence_status,'true');
																							}
																						}
																					}
																					
																					if(count(array_unique($coupon_existence_status)) === 1 && end($coupon_existence_status) === 'true'){
																					?>
																					<div class="row m-0 mb-3">
																						<div class="col-sm-12 p-2 bg-white" style="box-shadow: 1px 1px 1px 0 #ccc;">  
																							<div class="offer-title d-flex"><div class="pers-icon"><img class="per" src="//cdn.fcglcdn.com/brainbees/checkout/pers.jpg"></div><div class="M14_21 a-offer font-weight-bold">Coupon:</div></div>
																							<div class="apply-coupon-box">
																								<?php if($this->permission=='true'){ ?>
																									<div class="input-coupon form-group my-1 d-flex align-items-center">
																										<span class="mx-1 my-1 d-flex w-75"> 
																											<?php if(!empty($coupon_msg)){
																												echo $coupon_msg;
																											}else{ ?>
																											<span style="font-size: 14px; font-weight: 600;color: #2f2e2e;">Apply Coupon</span>
																											<?php } ?>
																										</span>
																										<a href="javascript:(0)" class="btn-chnage-address" style="border: none; outline: none; line-height: 1.4; padding:4px 10px;" onclick="OpneCouponModal()">Apply</a>
																									</div> 
																									<?php  }else{ ?>
																									<a href="<?= base_url('Login')?>" class="mx-2"style="font-size: 14px; font-weight: 400;color:blue;">Login to apply coupon</a>
																								<?php } ?>
																							</div>
																						</div> 
																					</div>
																					<div  class="popover-content" > 
																						<div id="popover-card" class="" style="display:none;">
																							<div class="card text-center" style="margin: -10px -15px; border:0; background: white; box-shadow: 2px 4px 8px grey;">
																								<div class="card-body text-left p-1">
																									<?=$coupon_msg?>
																								</div>
																							</div>
																						</div>
																					</div>
																				<?php } }?>
																				<?php 
																					if($this->sitepermission->gift_wrap){
																						$count=0;
																						$applyGiftWrap=0;
																						$totalProduct=count($list);
																						if(!empty($list)){
																							foreach($list as $each){
																								if($each->is_giftwrap=='true'){
																									$count++;
																									if(!empty($each->giftwrap_details)){
																										$applyGiftWrap++;
																									}
																								}
																							}
																						}
																						if($count>0){
																						?>
																						<div class="row m-0 mb-3">
																							<div class="col-sm-12 d-flex" style="background:#fff1ec;" style="box-shadow: 1px 1px 1px 0 #ccc;">  
																								<div class="giftwrap_img <?php if($count==$totalProduct){echo "giftwrpnotapplied";}else{echo "giftwrpapplied";}?>">
																									<img src="//cdn.fcglcdn.com/brainbees/checkout/gift-wrap.png" alt="gift wrap">
																								</div>
																								<div class="mt-3">
																									<?php 
																										if($applyGiftWrap<1){ ?>
																										<div class="offer-title d-flex"><div class="M14_21 a-offer font-weight-bold mx-3" style="color: #424242; font-family: system-ui;">Buying For Loved one?</div></div>
																										<div class="my-2">
																											<div class="mx-3 d-flex"><p class="mb-0" style="font-weight: 500; font-size: 12px; font-family: sans-serif; color: #444141;">Gift Wrap and personalised Message on Card.</p>
																												&emsp;<input type="checkbox"  style="width:18px;height:18px; z-index:unset;" data-toggle="modal" data-target="#GiftWrapModal"/>
																											</div>
																										</div>
																										<?php  
																											}else{
																										?>
																										<div class="offer-title d-flex"><div class="M14_21 a-offer font-weight-bold mx-3" style="color: #424242; font-family: system-ui;">Gift Wrap Applied</div></div>
																										<div class="ml-3 my-2">
																											<div class="d-flex"><p class="mb-0" style="font-weight: 500; font-size: 12px; font-family: sans-serif; color: #444141;">Congratulations! Gift Wrap Applied!</p>
																												&nbsp;<input type="checkbox"  style="width:18px;height:18px; z-index:1;" onclick="remove('<?= $list[0]->system_id?>','<?= $list[0]->userid?>')"  checked/>
																											</div>
																											<div class="d-flex">
																												<span><a href="javascript:void(0)" style="color: #ff7167; font-weight: 600; text-transform: uppercase; font-size: 12px;" title="edit" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap(<?php if(!empty($list)){echo $list[0]->id;}?>)">Edit</a></span>&emsp;<span><a href="javascript:void(0)" onclick="remove(<?php if(!empty($list)){echo $list[0]->id;}?>)" style="color: #ff7167; font-weight: 600; text-transform: uppercase; font-size: 12px;">Remove</a></span>
																											</div>
																											<?php if($count<$totalProduct){?>
																												<div class="d-flex flex-column border-top">
																													<span style="font-size:12px;"><span style="color:#2287de;">(<?=$totalProduct-$count?>)</span>&nbsp;product(s) from your cart is not eligible for gift wrap.</span>
																												</div>
																											<?php } ?>
																										</div>
																									<?php } ?>
																								</div>
																							</div>
																						</div>
																					<?php } } ?>
																					<?php 
																						
																						if($this->sitepermission->wallet_management){
																							if(($this->permission=='true') AND ($subscriber=='true')){ ?>
																							<div class="row m-0 mb-3">
																								<div class="col-sm-12 p-2 bg-white" style="box-shadow: 1px 1px 1px 0 #ccc;">  
																									<div class="offer-title d-flex"><div class="M14_21 a-offer font-weight-bold">Use Club Cash <span style="font-weight:500;">(₹59.00 Available)</span></div></div>
																									<p class="mb-0" style="letter-spacing: initial; font-weight: 500; font-size: 12px; color: #292828;">You have to earn a minimum of ₹100 Club Cash before you can redeem it in your future purchases.</p>
																								</div> 
																							</div>
																						<?php }   ?>
																						<?php 
																							$reward_points=0;
																							$cashback=0;
																							$cashback_used_limit=0;
																							$reward_used_limit=0;
																							$eqv_show_cashback=0;
																							$eqv_cashback=0;
																							if(($this->permission=='true')){ 
																								$reward_point_setting=$this->db->get_where('reward_point_setting')->row();
																								$used_limit=$this->db->get_where('manage_content')->row();
																								if(!empty($user_wallet)){
																									foreach($user_wallet as $wallet){
																										if(!empty($wallet->coins)){
																											$reward_points+=(int)$wallet->coins;
																											$reward_used_limit=(int)$used_limit->reward_used_limit;
																										}
																										if(!empty($wallet->balance)){
																											$cashback+=(int)$wallet->balance;
																											$cashback_used_limit=(int)$used_limit->cashback_used_limit;
																										}
																									}
																									if($reward_points>=$reward_used_limit){
																										$eqv_cashback=(int)(($reward_point_setting->reward_value)*$reward_used_limit);
																										$eqv_show_cashback=(int)(($reward_point_setting->reward_value)*$reward_points);
																									}
																									
																								?>
																								<div class="row m-0 mb-3">
																									<div class="col-sm-12 p-2 bg-white" style="box-shadow: 1px 1px 1px 0 #ccc;">  
																										<div class="offer-title d-flex"><div class="M14_21 a-offer font-weight-bold">Use Wallet:</div></div>
																										<div class="offer-title d-flex"><div class="M14_21 a-offer"><input type="checkbox" <?php if($cashback<$cashback_used_limit){echo "disabled";}?> name="wallet_discount" value="cashback" class="wallet" id="cashback">&nbsp;<label for="cashback" class="mb-0 font-weight-normal">Cashback</label><span style="font-weight:500;">(₹<?= $cashback?> Available)</span></div></div>
																										<div class="offer-title d-flex"><div class="M14_21 a-offer"><input type="checkbox" <?php if($reward_points<$reward_used_limit){echo "disabled";}?> name="wallet_discount" value="reward" class="wallet" id="reward">&nbsp;<label for="reward" class="mb-1 font-weight-normal">Reward Points</label><span style="font-weight:500;">(<?= $reward_points?> Coins =₹<?=$eqv_show_cashback?> Available)</span></div></div>
																										<p class="mb-0" style="letter-spacing: initial; font-weight: 500; font-size: 12px; color: #292828;"><span class="text-danger font-weight-bold">Note:</span>You can use maximum ₹100/100 coins and you have to earn a minimum of ₹100 cashback/100 coins before you can redeem it in your future purchases.</p>
																									</div> 
																								</div>
																							<?php } } } ?>
																							<div class="row m-0 mb-3">
																								<div class="col-sm-12 p-2 bg-white" style="box-shadow: 1px 1px 1px 0 #ccc;">  
																									<div class="offer-title mb-1"><div class="M14_21 a-offer font-weight-bold">Payment Information</div><small>Prices are inclusive of all taxes</small></div>
																									<p class="mb-0 d-flex justify-content-between" style="font-weight: 500; font-size: 14px; color: #424040; letter-spacing: initial;"><span>Value of Product(s)</span><span>₹<?php echo $totalMrp; ?></span></p>
																									<p class="mb-0 d-flex justify-content-between" style="font-weight: 500; font-size: 14px; letter-spacing: initial;"><span>Discounts(-)</span><span style="color: #d7430e;">-₹<?php echo $discount;?></span></p>
																									<?php if(!empty($auto_apply) && $auto_apply=='true'){?><p class="mb-0 d-flex justify-content-between" style="font-weight: 500; font-size: 14px; letter-spacing: initial;"><span>Coupon Discounts(-)</span><span style="color:#d7430e;">-₹<?php echo $coupon_discount;?></p><?php } ?>
																										<p class="mb-0 d-flex justify-content-between" style="font-weight: 500; font-size: 14px; letter-spacing: initial;"><span>Shipping(+)</span><?php if(!empty($auto_apply) && $auto_apply =='free shipping'){?><span style="color: #10bc14;">Free</span><?php }else{?><span style="color: #10bc14;">+₹<?php echo $shippingCharge;?></span><?php } ?></p>
																										<p class="mb-0 d-flex justify-content-between my-1 py-2" style="font-weight: 600; font-size: 14px; color: #424040; letter-spacing: initial; border-top: 2px dotted lavender; border-bottom: 2px dotted lavender;"><span>Sub Total</span><span>₹<span class="total_paid_amount"><?= $subTotal;?></span></span></p>
																										<p class="mb-0 d-flex justify-content-between my-1 py-2" style="font-weight: 600; font-size: 14px; color: #424040; letter-spacing: initial; border-bottom: 2px dotted lavender;"><span>Final Payment</span><span>₹<span class="total_paid_amount"><?= $TotalPaidAmount;?></span></span></p>
																										<?php  if($this->permission=='true'){?>
																											<p class="mb-0 d-flex justify-content-between mt-1 pt-2" style="color: gray;font-weight: 500; font-size: 12px;"><span>Royal Club Savings</span><span>₹<span id="royal_saving"></span>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="modal" data-target="#SavingModal" style="cursor:pointer; font-size: 14px;"></i></span></p>
																										<?php } ?>
																									</div> 
																								</div>
																							</div>
																	</div>
																	<?php if($this->sitepermission->order_management){ ?>
																	<div class="row m-0 mt-3 " style="position: sticky; bottom: 0;">
																		<div class="col-sm-8 col-12 shadow-sm py-3 d-flex checkout-container justify-content-between bg-white">
																			<?php if($this->permission=='true'){?>
																				<?php if(!empty($addresslist)){?>
																					<div class="form-group pt-1 mb-0">
																						<input type="radio" required class="sr-only" data-parsley-required-message="Please select payment options" name="pay_mode" value="online" id="online"><label class="paymentOptions" for="online" >Pay Now</label>
																						<input type="radio" required class="sr-only" name="pay_mode" value="cod" id="cod"><label class="paymentOptions" for="cod" >Cash On Delivery</label> 
																					</div> 
																					<?php }else{ ?>
																					<div class="button">
																						<button  type="button"  onclick="OpenAddressModal()" class="btn checkoutbtn btn-secondary swipe-to-top btn-order btn-block font-weight-bold" >Add Delivery Address</button> 
																					</div>
																				<?php } ?>
																				<?php }else{ ?>
																				<div class="button">
																					<a href="<?= base_url('Login')?>"  class="btn checkoutbtn btn-secondary swipe-to-top btn-order btn-block font-weight-bold" >Login to place order</a>
																				</div>
																			<?php } ?>
																			<?php if(!empty($out_of_stock)){?>
																				<a class="button" href="javascript:void(0)" data-toggle="modal" data-target="#OutOfStockModal">
																					<button  type="button" disabled class="btn checkoutbtn btn-secondary  btn-order btn-block float-left" >
																						<span><p class="mb-0 text-white d-flex justify-content-between" style="padding:3.5px;"><span>Place Order</span><span>₹<span class="total_paid_amount"><?= $TotalPaidAmount ?></span></span></p></span>
																					</button> 
																				</a>
																				<?php }else{?>
																				<div class="button">
																					<input type="hidden" name="total_amount" value="<?=$TotalPaidAmount?>" style="display:none;">
																					<button id="CheckOutBtn2" <?php if($TotalPaidAmount<=0 || empty($addresslist)) { echo 'disabled'; } ?> type="submit" class="btn checkoutbtn btn-secondary  btn-order btn-block">
																						<span class="btn-text"><p class="mb-0 text-white d-flex justify-content-between" style="padding:3.5px;"><span>Place Order</span><span>₹<span class="total_paid_amount"><?= $TotalPaidAmount ?></span></span></p></span>
																						<span class="btn-hover-text font-weight-bold float-left" style="padding:4px;">Proceed to Checkout</span>
																						<i class="fa fa-spin fa-spinner" id="CheckOutSpin2" style="display:none;"></i>
																					</button> 
																				</div>
																			<?php } ?>
																		</div>
																		<div class="col-sm-4 col-12"></div>
																	</div>
																	<?php } ?> 
																	<br><hr>
																</form>
																<?php
																$MoreCollection = $this->db->order_by('id','desc')->get_where('products',['is_status'=>'true'])->result();
																if(!empty($MoreCollection)){
																?>
																<div class="container-fluid" >
																<div class="products-area">
																<div class="row justify-content-center">
																<div class="col-12 col-lg-12 p-0">
																<div class="pro-heading-title px-1" >
																<h1 class="text-uppercase" style="font-size: 18px; margin-bottom: 0;">YOU MAY ALSO LIKE</h1>
																<p class="mb-0">Some of the latest product just for you.</p>
																</div>
																</div>
																</div>
																<div class="row mt-4 p-2 bg-white shadow-sm">
																<div class="col-md-12">
																<div role="tabpanel" class="tab-pane fade active show p-1" id="featured">
																<div class="tab-carousel-js row">
																<?php
																$sr = 1;
																foreach($MoreCollection as $each) 
																{
																$Variant=$this->db->get_where('product_variant',array('product_id'=>$each->id,'is_status'=>'true'))->row(); 
																if(!empty($Variant->variant_img)){
																$icons = explode(',',$Variant->variant_img);
																}else{
																$icons = explode(',',$each->image1);
																}
																
																$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','sale_type'=>'individual'))->row();
																$sale_status='false';
																if(!empty($saleProduct)){
																$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																if(!empty($tblSale)){
																$current_date = date('Y-m-d H:i:s'); 
																if($this->subscription=='true'){ 
																$day_limit=$this->db->get_where('manage_content')->row(); 
																$prev_days="-".$day_limit->royal_feature_activated_limit." day";
																$start_date= date('Y-m-d H:i:s',strtotime($prev_days,strtotime($tblSale->start_date))); 
																}
																else{ 
																$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date)); 
																}
																$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
																if($current_date>=$start_date AND $current_date<=$last_date){
																$date_difference = date_diff(date_create($current_date),date_create($last_date));  
																$days=$date_difference->format('%r%a');
																$hour=$date_difference->format('%r%h');
																$min=$date_difference->format('%r%i');
																$sec=$date_difference->format('%r%s');  
																$timer=$days."D".$hour."H".$min."M".$sec."S" ;
																$sale_status='true';
																if($tblSale->discount_type=='percent'){
																$price=$each->mrp;
																$discount=(int)$saleProduct->discount;
																$saleprice=$price - ( ($price/100) * $discount );
																$saleprice=((floor($saleprice/50)*50)-1);
																}
																elseif($tblSale->discount_type=='flat'){
																$price=$each->mrp;
																$discount=(int)$saleProduct->discount;
																$saleprice=$price -  $discount ;
																$saleprice=((floor($saleprice/50)*50)-1);
																}
																elseif($tblSale->discount_type=='buy_x_get_y'){
																$discount_type='buy_x_get_y';
																$discount=(int)$saleProduct->discount;
																$saleprice='Buy-'.$saleProduct->qty_x.'-Get-'.$discount ;
																}
																}
																}
																}
																if(!empty($Variant)){ 
																?>
																<div class="col-sm-12" >
																<div class="product product-7 text-center " style="border:1px solid lavender;">  
																<form action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
																<figure class="product-media">
																<?php 
																if($sale_status=='true')
																{	
																?> 
																<span class="product-label label-primary">SALE&nbsp;<?php if($tblSale->discount_type=='percent'){echo $saleProduct->discount.'% OFF';}elseif($tblSale->discount_type=='flat'){echo '₹'.$saleProduct->discount.' OFF';}?></span>
																<?php }
																?>
																<a href="<?php echo  base_url('Home/ProductDetails/').$each->id.'/'.$Variant->id?>"> 
																<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>"  class="product-image  ">
																<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
																</a>
																
																<div class="product-action-vertical">  
																<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $Variant->id; ?>)"><span>add to wishlist</span></a>
																<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable"" title="Quick view" onclick="quickView(<?= $Variant->id; ?>,'Individual')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																</div><!-- End .product-action-vertical -->
																
																
																<?php 
																$Productsizes=json_decode($Variant->size);
																foreach($Productsizes[0] as $size=>$size_stock){ 
																if($size!='NA'){
																?> 
																<div class="product-action hide_in_mobile">
																<a href="javascript:void(0)" class="btn-product btn-cart"  style="font-size:12px;">Quick Add</a>
																</div><!-- End .product-action -->    
																<div class="add-product"  id="app"> 
																<div>  
																<input type="hidden" required name="productid" value="<?= $each->id; ?>">
																<div style="display:flex; flex-direction: column; justify-content: space-evenly;">    
																<div class="d-flex justify-content-between" style="padding: 5px 5px; cursor:pointer;"><b class="<?php if($Productsizes[0]=='NA'){echo 'invisible';}?>">Select size</b><b class="closeQuickAdd"><i class="fa-solid fa-xmark"></i></b></div>
																<div class="form--field product-nav-size my-2" style="text-align: start;" >
																<?php if($size!='NA' AND !empty($Variant->size_type)){ 
																$count=1;
																foreach ($Productsizes as $eachSize){
																foreach($eachSize as $size=>$size_stock){
																$uniqueId=$count.$sr;   
																?> 
																<input type="hidden" name="variantid" value="<?= $Variant->id ?>">  
																<label class="sizeContainer  <?php if($size_stock == 0 ){echo 'disabled';} ?>" for="size-tile<?=$uniqueId;?>" ><?=$size?><?php if($size_stock == 0){echo "<i class='bi bi-bell'></i>";} ?></label>
																<input type="radio" class="sr-only" name="size"  id="size-tile<?=$uniqueId;?>" <?php if($size_stock == 0){echo 'disabled';} ?> value="<?=$size?>" required data-parsley-required-message="Please select size">
																<?php 
																$count++;
																}
																}
																} 
																?>
																</div><!-- product-nav-size-->
																</div>
																<?php 
																$stockCount=0;
																$variant_count=(count($Productsizes));
																foreach ($Productsizes as $eachSize){
																foreach($eachSize as $size=>$size_stock){
																if($size_stock==0){ $stockCount++; } 
																} }	
																?>
																<?php if($stockCount==$variant_count){ ?>
																<button type="button" class="submit-button " style="width:75%; background:#d5d6d9 !important; cursor:default;"><i class='bi bi-bell'></i>&nbsp;Out Of Stock</button> 
																<?php }else{ ?>
																<button type="submit" class="submit-button " style="width:75%; font-size: 12px;">Add To Bag</button>
																<?php } ?>
																</div>
																</div>
																<?php 
																} else{ ?>
																<div class="product-action hide_in_mobile"> 
																<input type="hidden" required name="productid" value="<?= $each->id; ?>">
																<input type="hidden" name="variantid" value="<?= $Variant->id ?>">  
																<input type="hidden" class="sr-only " name="size"   value="NA" required data-parsley-required-message="Please select size">
																<button type="submit" class="btn-product btn-cart border-none"  style="font-size:12px; border:none;">Quick Add</button>
																</div><!-- End .product-action -->   
																<?php } }?>   
																
																<!--calcult time for timer--> 
																<?php if($sale_status=='true'){
																?>     
																<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?=$timer?>"></div>
																<?php } ?>  
																</figure><!-- End .product-media -->
																
																<div class="product-body">
																<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductDetails/').$each->id.'/'.$Variant->id?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																<div class="product-cat">
																<a href="<?php echo  base_url('Home/ProductDetails/').$each->id.'/'.$Variant->id?>"><?= $each->title; ?></a>
																</div><!-- End .product-cat -->
																<div class="product-price">
																<?if($sale_status=='true')
																{	
																?> 
																<span>₹<?=(int)$saleprice;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->reg_sell_price==(int)$each->mrp){ echo "d-none";} ?>" style="color: gray;"><?= $each->mrp ?></del>
																<?php 
																}
																else{
																?>
																<span>₹<?= $each->reg_sell_price?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->reg_sell_price==(int)$each->mrp){ echo "d-none";} ?>" style="color: gray;"><?= $each->mrp ?></del>
																<?php } ?>  
																</div><!-- End .product-price -->
																
																<div class="ratings-container">
																<?php
																$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$each->id,'is_combo'=>'false','is_status'=>'true'))->row(); 
																$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$each->id, 'is_combo'=>'false','is_status'=>'true'))->num_rows();
																if(!empty($countReview) AND !empty($ratingCount)){
																$totalRating=$ratingCount->rating/$countReview; 
																$totalRating=round($totalRating,1); 
																?>
																<div class="ratings" style="font-size:1.2rem;">   
																<div class="ratings-val" style="width:<?php if(!empty($totalRating)){echo ($totalRating)*20;}?>%; font-size:1.2rem;" ></div><!-- End .ratings-val -->
																</div><!-- End .ratings --> 
																<span>(<?php if(!empty($countReview)){echo $countReview;}?>)</span>    
																<?php } ?>
																</div><!-- End .rating-container -->
																<div class="product-nav product-nav-dots product-nav-color mt-1">
																<?php 
																$AllVariant=$this->db->get_where('product_variant',array('product_id'=>$each->id,'is_status'=>'true'))->result();
																if(!empty($AllVariant)){ 
																$count=1;
																if($AllVariant[0]->color!='NA')
																{ 
																foreach($AllVariant as $each1) 
																{ $uniqueId=$count.$sr;
																?>
																<input type="radio" name="color" id="color-tile<?= $uniqueId ?>" <?php if($each1->id==$Variant->id){echo "checked";}?> required class="color-item sr-only" value="<?= $each1->color ?>" data-parsley-required-message="Please select color">
																<label for="color-tile<?= $uniqueId ?>" class="m-0 <?php  if($count>4){echo 'MoreColor';}?>  <?php if($each1->id==$Variant->id){echo "active";}?>" style="height:18px; width:18px; cursor:pointer; border-radius:50%;  background:<?= $each1->color?>"></label>
																<?php
																$count++; 
																}   
																?>  
																<button class="MoreColorBtn btn p-0  <?php if(count($AllVariant)<4 || (count($AllVariant)-4)==0){echo 'd-none';}?>" style=" border: 1px solid gray; width: 20px; margin-top: -12px; height: 20px; color:rgba(0, 0, 0, 0.71);" title="<?=(count($AllVariant)-4)?>">+<?=(count($AllVariant)-4)?></button>
																<?php
																}else{ ?> 
																<input type="hidden" name="color"  required class="color-item sr-only" value="NA" >  
																<?php  
																} 
																}
																?>
																</div><!-- End .product-nav -->
																</div><!-- End .product-body -->
																</form>
																</div><!-- End .product -->
																</div><!-- End .col-sm-6 col-lg-4 col-xl-4 -->
																<?php
																}
																$sr++;
																} ?>
																</div>
																</div> 
																</div>
																</div>
																</div>
																<?php } ?>
																<script>
																document.getElementById('earn_cash').innerText='<?=$totalIndividualClubCash+$totalComboClubCash?>';
																</script>
																<?php }else{ ?>
																<div class="row m-0 mt-4">
																<div class="col-md-3 col-sm-6 col-12 mx-auto shadow-lg " style="display:flex; flex-direction:column;align-items:center;">
																<img src="<?= base_url('public/images/shipping_bag.jpg') ?>" class="img-fluid w-75" >
																<h4 class="text-center mt-3">Your Shopping cart is empty!</h4>
																<p class="text-center mt-2">Look like you haven't added anythig to your cart Let's change that.</p>
																<p class="text-center"><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary">Add Items From Wishlist</a></p>
																</div>  
																</div>
																<?php } ?> 
																</div>
																<!-- Modal -->
																<!-- giftwrap modal-->
																<div class="modal fade " id="GiftWrapDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document"> 
																<div class="modal-content">
																<div class="modal-header" style="border:none;">
																<strong class="text-uppercase">Gift Wrapping Details</strong>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body py-0">
																</div>
																</div>
																</div>
																</div>
																<!--club saving modal-->
																<div class="modal fade" id="SavingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																<div class="modal-header">
																<h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Royal Club Savings Details</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button> 
																</div>
																<div class="modal-body">
																<p class="border-bottom mb-2 d-flex justify-content-between"><span>Product Savings</span><span>₹<span id="product-savings"></span></span></p>
																<?php if(!empty($listInd) || !empty($listCombo)){ 
																$totalDiscount=0; 
																$totalClubCash=0; 
																foreach($listInd as $each)
																{ $product = $this->db->get_where('products',array('id'=>$each->product_id))->row(); 
																$totalDiscount+=((int)$product->reg_sell_price*$each->qty)-((int)$product->royal_amt*$each->qty);
																if($plan_duration==12){$totalClubCash+=((int)$cartprice->royal_clubcash*$each->qty)*2;}else{$totalClubCash+=(int)$cartprice->royal_clubcash*$each->qty;};
																?>
																<p class="d-flex justify-content-between mb-2 pb-2" style="border-bottom:0.5px solid lavender;font-weight:500;"><span style="width:380px;"><?=$product->title?></span><span>₹<?=((int)$product->reg_sell_price*$each->qty)-((int)$product->royal_amt*$each->qty)?></span></p> 
																<?php }  
																foreach($listCombo as $each)
																{ 	$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row(); 
																$totalDiscount+=((int)$product->discount_price*$each->qty)-((int)$product->royal_amt*$each->qty);
																if($plan_duration==12){$totalClubCash+=((int)$cartprice->royal_clubcash*$each->qty)*2;}else{$totalClubCash+=(int)$cartprice->royal_clubcash*$each->qty;};
																?>
																<p class="d-flex justify-content-between mb-2 pb-2" style="border-bottom:0.5px solid lavender;font-weight:500;"><span style="width:380px;"><?=$product->title?></span><span>₹<?=((int)$product->discount_price*$each->qty)-((int)$product->royal_amt*$each->qty)?></span></p> 
																<?php } ?> 
																<p class="border-bottom mb-2 pb-2 d-flex justify-content-between"><span class="d-flex"><img src="//cdn.fcglcdn.com/brainbees/checkout/club_cash.png" alt="loading" class="clubImage" style="height:18px; margin-right:5px;">Royal Club Cash Earnings</span><span>₹<?=$totalClubCash?></span></p>
																<p class="border-bottom mb-2 pb-2 d-flex justify-content-between text-success"><span>Total Club Cash Savings</span><span id="total_club_saving">₹<?=$totalDiscount+$totalClubCash?></span></p>
																<div class="terms-conditn">
																<p class="R13_61 tc-title mb-0" style="font-feature-settings: normal; font-size: 13px; color: #454343; font-weight: 500;"> Terms &amp; Conditions </p>
																<p class="R12_75 mb-0" style="font-feature-settings: normal; font-size: 12px; color: #454343; font-weight: 500;"> *This savings is applicable only for Club User </p>
																</div>
																<script>
																document.getElementById('product-savings').innerText=<?=$totalDiscount?>;
																document.getElementById('royal_saving').innerText=<?=$totalDiscount+$totalClubCash?>;
																</script>
																<?php } ?>
																</div> 
																</div>
																</div>
																</div> 
																<!--coupon modal--> 
																<div class="modal fade" id="CouponModal" style="background: rgba(0,0,0,.6);" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																<div class="modal-header">
																<h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Apply Coupon</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ApplyCoupon'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
																<div class="modal-body">
																<div class="" id="widget-1">
																<div class="widget-body">
																<div class="filter-search-filterSearchBox filter-search-expanded" style="width:100%;">
																<input type="text" class="filter-search-inputBox " name="category" value="" placeholder="Search for Coupon" >
																<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
																</div>
																<div class="filter-items filter-items-count">
																<?php 
																
																if(!empty($coupon)){ 
																$sr=1;
																foreach($coupon as $eachcoupon){
																
																if(in_array($eachcoupon->id,$prv_applied_coupon)==false){
																$selected='false';
																
																if($this->permission=='true'){
																$userid=$this->userData->id;
																$applied_coupon=$this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND is_status='false' AND coupon_status='true'")->row();
																}
																else{
																$applied_coupon=$this->db->get_where('tbl_cart',array('system_id'=>$this->system_id,'is_status'=>'false','coupon_status'=>'true'))->row();
																}
																if(!empty($applied_coupon)){
																$coupon_id=$applied_coupon->coupon_id;
																if($coupon_id==$eachcoupon->id){
																$selected='true';
																}
																}
																$expire_date=date('y-m-d',strtotime($eachcoupon->end_date)); 
																$start_date=date('y-m-d',strtotime($eachcoupon->start_date)); 
																$current_date=date('y-m-d')	; 
																
																$apply_status='';
																if(($eachcoupon->min_order>$TotalPaidAmount))
																{
																
																$apply_status='disabled';
																}
																
																if($eachcoupon->coupon_type=='Buy-one-get-one coupons' AND $apply_status!='disabled'){
																if($eachcoupon->product_type=='individual'){
																$product_ids=array_column($listInd,'product_id');
																$total_eligible_product=$this->db->where(['coupon_id'=>$eachcoupon->id])->where_in('product_id',$product_ids)->get('coupon_product')->result();
																if(count($total_eligible_product)<2){
																$apply_status='disabled';
																}
																}
																elseif($eachcoupon->product_type=='combo'){
																$product_ids=array_column($listCombo,'product_id');
																$total_eligible_product=$this->db->where(['coupon_id'=>$eachcoupon->id])->where_in('product_id',$product_ids)->get('coupon_product')->result();
																if(count($total_eligible_product)<2){
																$apply_status='disabled';
																}
																}
																$eligible_product_id=array_column($total_eligible_product,'product_id');
																}
																
																if(($current_date>=$start_date && $current_date<=$expire_date) AND $eachcoupon->complementry_type=='coupon'){
																?>
																<div class="mb-2" style="border-bottom: 1px dashed #ddd;">
																<div class="filter-item" style="padding: 3px !important;user-select: none;" onclick="couponDetails('<?=$eachcoupon->max_discount?>')">
																<input type="hidden"  class="total_amount"  name="total_amount" value="<?=$TotalPaidAmount?>" >
																<input type="hidden" name="product_id" value="<?php echo implode(',',$eligible_product_id); ?>"> 
																<input type="checkbox" id="<?=$eachcoupon->id?>" class="coupon"  <?php if($selected=='true'){ ?>checked<?php }?>  name="coupon" <?= $apply_status?> value="<?=$eachcoupon->id?>"> 
																<label for="<?=$eachcoupon->id?>" class="font-weight-bold" style="border: 0.5px dashed; padding: 0 12px; color: #393737;" ><?= $eachcoupon->coupon?></label><br> 
																<?php if(!empty($eachcoupon->max_discount)){?><span>Maximum Save ₹<span class="maximum-save"><?= $eachcoupon->max_discount?></span></span> <br><?php } ?>
																<span><?= $eachcoupon->description?></span> <br>
																<span> Expires on: <?= date('jS M Y',strtotime($eachcoupon->end_date))?> | 12:00 PM</span> <br>
																<a href="javascript:void(0);" onclick="CouponTermsConditions('<?= $eachcoupon->id?>','coupon')" style="color:blue; font-size:12px;">See More</a> <br> 
																</div>
																</div>
																<?php $sr++;} } } }?>
																</div><!-- End .filter-items -->
																</div><!-- End .widget-body -->
																<div class="row padding: 3px !important;">
																<div class="col-6 ">  <strong class="font-weight-bold" style="color: #3d3c3c; font-size: 12px;">Maximum Saving:</strong><br>₹<span class="saving-info">0</span></div>
																<div class="col-6 "><button type="submit" <?php if($sr<2){echo 'disabled'; }?> class="btn btn-secondary w-100" id="updateBtn"> <i class="fa fa-check-circle"></i> Apply <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button></div>
																</div>
																</div><!-- End .collapse -->
																</div>
																</form>
																</div>
																</div>
																</div> 
																<!--gift wrap modal--->
																<div class="modal fade modal-" id="GiftWrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document"> 
																<div class="modal-content">
																<div class="modal-header" style="border:none;">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body py-0">
																<div class="row">
																<div class="col-sm-6">
																<div class="mb-2">
																<span class="text-uppercase">Gift Wrapping</span><br> 
																<span class="font-weight:bold"><h3 class="mb-0">Make It Special</h3></span>
																</div>
																<form action="<?= base_url($this->data->controller . '/' . $this->data->method . '/AddGiftWrap')?>" class="addForm" method="POST" > 
																<div class="mb-4">
																<input type="hidden" id="cart-item-id" name="id">
																<div class="gift-wrap-slider owl-carousel m-0 overflow-hidden">
																<?php 
																if(!empty($giftwrap)){
																$count=0;
																foreach($giftwrap as $giftcard){
																?>
																<div class="mx-1 couponcontainer-fluid" >   
																<div class="row m-0" style="min-height:120px; min-width:120px; "> 
																<input type="radio" id="giftwrap<?=$count;?>" value="<?= $giftcard->id ?>" class="sr-only" name="giftwrapid" required data-parsley-required-message="Please select your favourite gift wrapper or box"> 
																<label class="col-sm-12 p-0 gift-wrap-label" for="giftwrap<?=$count;?>"> 
																<img src="<?= base_url('uploads/giftcard/').$giftcard->image ?>" class="gift-wrap-image" style="height:100px; width:100%" />
																</label>
																<div class="col-sm-12 p-0  d-flex justify-content-between" style="color:black;" > 
																<span style="font-weight:500;"><?= $giftcard->name; ?></span>     
																<span class="coupon-copy-btn"  style="font-weight:500;cursor:pointer;">Rs-<?= $giftcard->price?></span>  
																</div>          
																</div>
																</div>
																<?php $count++; } } ?>
																</div>
																</div>
																<div class="form-group">
																<input type="text" name="recipientName" class="form-control form-control-lg" placeholder="Recipient Name" required data-parsley-required-message="Please enter recipient name">     
																</div>
																<div class="form-group">
																<textarea class="form-control" name="message" placeholder="Message(200/200)" rows="3" style="border-radius:3px;min-height:100px;" required data-parsley-required-message="Please write your message"  maxlength="200"  oninput="this.value=this.value.slice(0,this.maxLength)"></textarea>    
																</div>
																<div class="form-group">
																<input type="text" name="senderName" class="form-control form-control-lg" placeholder="Sender Name" required data-parsley-required-message="Please enter sender name">       
																</div>
																<div class="form-group">
																<button class="btn btn-sm btn-secondary btn-block" id="addBtn" style="line-height:1"><i class="fa fa-check-circle"></i>Add Giftwrap&nbsp;<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>	   
																</div>
																</form>
																</div>	
																<div class="col-sm-6 d-flex flex-column"> 
																<div class="row mt-5 m-0">
																<?php 
																$manage_content=$this->db->get('manage_content')->row();
																if(!empty($manage_content)){
																echo base64_decode($manage_content->giftwrap_termscondition);
																}
																?>
																</div>
																</div>
																</div>
																</div>
																</div>
																</div>
																</div>
																<!-- address show modal start-->
																<div class="modal fade" id="AddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-scrollable" role="document">
																<div class="modal-content">
																<div class="modal-header bg-gray">
																<h5 class="modal-title text-uppercase" id="exampleModalLabel">Change Address</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body">
																<form action="<?= base_url($this->data->controller . '/' . $this->data->method . '/ChangeAddress/') ?>" class="addForm">
																<div class="modal-body">
																<div class="row">
																<a href="javascript:void(0)" onclick="OpenAddressModal()" class="font-weight-bold" style="height: 100%; width: 100%; display: block; padding: 6px; color:#8834AD;"><i class="bi bi-plus"></i>Add New Address</a>
																<div class="col-sm-12 p-2"> 
																<?php
																if(!empty($addresslist)){
																$count=1;
																foreach($addresslist as $each)
																{
																if($each->default_address != 'false')
																{
																?>
																<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%);">
																<div class="card-body" for="UserName2">
																<div class="d-flex justify-content-between">
																<div>
																<input type="radio" class="customradio" <?php if(count($addresslist)<2 || $each->default_address == 'true'){echo 'checked';}?> id="User<?=$count;?>" name="id" data-parsley-required-message="Please select address" required value="<?= $each->id?>">
																<label for="User<?=$count;?>"><?= $each->name?></label>&ensp;<span class="badge badge-pill badge-secondary"><?= ucwords($each->address_type)?></span> <br>
																</div>
																<p class="mb-0" style="font-weight:500;"><span class="badge badge-pill badge-primary" style="padding: 8px; font-weight: 500;">Default Address</span></p>
																</div>
																<div class="ml-3">
																<span><?= $each->line1?> </span> <br>
																<span><?= $each->line2?> </span> <br>
																<span><?= $each->city?> , <?= $each->state?>  - <?= $each->pincode?>  </span> <br>
																<span>Mobile: <span><?= $each->mobile?> </span></span> <br>
																<div class="hideitem mt-2">
																<button type="button" class="btn btn-secondary" style="padding:5px; font-size: 12px;" onclick="return Delete(this,'tbl_address','id','<?= $each->id; ?>','','')">REMOVE</button>
																<button type="button" class="btn btn-secondary" style="padding:5px; font-size: 12px;"  onclick="Edit('<?= $each->id; ?>')">EDIT</button>
																</div>
																</div>
																</div>	
																</div><br>
																<?php
																}
																$count++;
																}
																}
																?> 
																</div>	
																<div class="col-sm-12 p-2 moreAddress">
																<?php
																$sr=1;
																if(!empty($addresslist)){
																foreach($addresslist as $each)
																{
																if($each->default_address != 'true')
																{
																?>
																<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%);"> 
																<div class="card-body" for="UserName2">
																<div class="d-flex justify-content-between">
																<div>
																<input type="radio" <?php if(count($addresslist)<2){echo 'checked';}?> class="customradio"  id="User<?=$sr;?>" name="id" data-parsley-required-message="Please select address" required value="<?= $each->id?>">
																<label for="User<?=$sr;?>"><?= $each->name?></label>&ensp;<span class="badge badge-pill badge-secondary"><?= ucwords($each->address_type)?></span> <br>
																</div>
																</div>
																<div class="ml-3">
																<span><?= $each->line1?> </span> <br>
																<span><?= $each->line2?> </span> <br>
																<span><?= $each->city?> , <?= $each->state?>  - <?= $each->pincode?>  </span> <br><br>
																<span>Mobile: <span><?= $each->mobile?> </span></span> <br>
																<div class="hideitem">
																<button type="button" class="btn btn-secondary" style="padding:5px; font-size: 12px;" onclick="return Delete(this,'tbl_address','id','<?= $each->id; ?>','','')">REMOVE</button>
																<button type="button" class="btn btn-secondary" style="padding:5px; font-size: 12px;"  onclick="Edit('<?= $each->id; ?>')">EDIT</button>
																</div>
																</div>
																</div>	
																</div><br>
																<?php
																$sr++;}
																}
																}
																?>
																</div> 
																</div>
																</div>
																<div class="row p-3">
																<div class="col-6 "><button type="submit" <?php if(!empty($addresslist) AND count($addresslist)<2){echo 'disabled';}?> class="btn btn-secondary" class="addBtn">Deliver Here<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button></div>
																</div>
																</form>
																</div>
																</div> 
																</div> 
																</div>
																<!-- address show modal end-->
																<!-- address add modal start-->
																<div class="modal fade" id="AddAddress" tabindex="-1" role="dialog"  aria-hidden="true">
																<div class="modal-dialog modal-dialog-scrollable" role="document">
																<div class="modal-content">
																<div class="modal-header bg-gray">
																<h5 class="modal-title text-uppercase" id="exampleModalLabel">Add New Address</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body">
																<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddAddress'); ?>"  enctype="multipart/form-data" class="addForm">
																<div class="form-group">
																<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
																<input type="text" required name="name" class="form-control" placeholder="Full Name" data-parsley-required-message="Please enter full name">
																</div>
																<div class="form-group">
																<label>Choose State <span class="text-danger">*</span></label>
																<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required data-parsley-required-message="Please select state">
																<option select disabled>Select State</option>
																</select>
																</div>
																<div class="form-group">
																<label>Choose City <span class="text-danger">*</span></label>
																<select id ="state" name="city" class="form-control" required data-parsley-required-message="Please select city">
																<option selected disabled>Select City</option>	
																</select>
																</div>
																<div class="form-group"> 
																<label>Pin Code <span class="text-danger">*</span></label> 
																<input type="number" name="pincode" class="form-control" placeholder="pincode"required data-parsley-required-message="Please enter pin">
																</div>
																<div class="form-group">
																<label>Flat/House No./Building<span class="text-danger">*</span></label> 
																<input type="text" name="addressline1" class="form-control" placeholder="Flat/House No./Building*" required data-parsley-required-message="Please enter Flat/House No./Building">
																</div>
																<div class="form-group">
																<label>Area/Locality<span class="text-danger">*</span></label> 
																<input type="text" name="addressline2" class="form-control"  placeholder="Area/Locality*" required data-parsley-required-message="Please enter Area/Locality">
																</div>
																<div class="form-group">
																<label>Landmark<span class="text-danger">(Optional)</span></label> 
																<input type="text" name="addressline3" class="form-control"  placeholder="Landmark" >
																</div>
																<div class="form-group">
																<label>Mobile No<span class="text-danger">*</span></label> 
																<input type="number" name="mobile" class="form-control" placeholder="mobile number" required data-parsley-required-message="Please enter mobile number." parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" >
																</div>
																<div class="form-group">
																<label>Alternate No.<span class="text-danger">(optional)</span></label> 
																<input type="number" name="alternate_mobile" class="form-control" placeholder="mobile number"  parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)">
																</div>
																<div class="form-group">
																<label>Address Type<span class="text-danger">*</span></label>  <br>
																<input type="radio" required checked name="addresstype" id="Home" value="home" selected data-parsley-required-message="Please select address type"> <label for="Home">Home</label>
																&emsp;<input type="radio" required name="addresstype" id="Work"  value="work" > <label for="Work">Work</label>
																</div>
																<div class="form-group">
																<input type="checkbox" name="defaultaddress" for="" id="chebox" >
																<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
																</div>
																<button type="submit" value="Subscribe" name="subscribe"  class="btn btn-secondary swipe-to-top addBtn">Save Address<i class="fa fa-spin fa-spinner addSpin"  style="display:none;"></i></button>
																</form>
																</div>
																</div>
																</div>
																</div>
																<!-- address add modal end-->
																<!-- address edit modal start-->
																<div class="modal fade" id="EditModal" tabindex="-1" role="dialog"  aria-hidden="true">
																<div class="modal-dialog modal-dialog-scrollable" role="document">
																<div class="modal-content">
																<div class="modal-header bg-gray">
																<h5 class="modal-title text-uppercase" id="exampleModalLabel">Edit Address</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body">
																
																</div>
																</div>
																</div>
																</div>
																<!-- address edit modal end-->
																<!--giftwrap details modal start-->
																<div class="modal fade " id="GiftWrapDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document"> 
																<div class="modal-content">
																<div class="modal-header" style="border:none;">
																<strong class="text-uppercase">Gift Wrapping Details</strong>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body py-0">
																</div>
																</div>
																</div>
																</div>
																<!-- giftwrap details modal end-->
																<!-- coupon&offer terms and conditions  Start-->
																<div class="modal fade" id="CouponTermsConditionsModal">
																<div class="modal-dialog">
																<div class="modal-content">
																<div class="modal-header bg-gray p-1">
																<h5 class="modal-title" style="color:black; font-weight:400; font-size:18px;">Terms&Conditions</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body p-1">
																
																</div>
																</div>
																</div>
																</div>
																<!-- coupon&offer terms and conditions  Start-->
																<!-- OutOfStockModal  Start-->
																<div class="modal fade" id="OutOfStockModal">
																<div class="modal-dialog">
																<div class="modal-content">
																<div class="modal-header bg-gray p-1">
																<span><h5 class="modal-title" style="color:black; font-weight:400; font-size:18px;">Out of stock</h5><span><b class="text-danger">Note:</b>Please Remove Out of Stock Product or update quantity of low stock product.</span></span>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
																</div>
																<div class="modal-body p-1">
																<div class="row">
																<div class="col-sm-12">
																<div class="row m-0">
																<?php 
																if(!empty($out_of_stock)){
																foreach($out_of_stock as $each){
																if($each->is_combo==''){
																$product=$this->db->get_where('products',['id'=>$each->product_id])->row();
																$product_variant=$this->db->get_where('product_variant',['id'=>$each->variant_id])->row();
																if(!empty($product) AND !empty($product_variant)){
																$icon=explode(",",$product_variant->variant_img);
																?>
																<div class="col-12 d-flex border-bottom p-0 mb-2"><img src="<?= base_url('uploads/product/'.$icon[0])?>" height="120" width="100"><span class="mx-2"><?= $product->title?></span></div>
																<?php } }elseif($each->is_combo=='true'){ 
																$combo_product=$this->db->get_where('tbl_combo',['id'=>$each->combo_id])->row();
																if(!empty($combo_product)){
																$icon_combo=explode(",",$combo_product->image);
																?>
																<div class="col-12 d-flex border-bottom p-0 mb-2"><img src="<?= base_url('uploads/product/'.$icon_combo[0])?>" height="120" width="100"><span class="mx-2"><?=$combo_product->name?></span></div>
																<? } } } } ?>
																</div>
																</div>
																</div>
																</div>
																</div>
																</div>
																</div>
																<!-- OutOfStockModal  end-->
																
																
																<?php include('include/jsLinks.php'); ?>
																<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
																<script>
																
																$('#CheckOutForm2').on('submit', function(e){  
																var formAction = $(this);
																var btnAction = $('#CheckOutBtn2');
																var spinAction = $('#CheckOutSpin2');
																e.preventDefault();   
																var data = new FormData(this); 
																if ($(formAction).parsley().isValid() == true) {
																$.ajax({
																type: 'POST',
																url: $(formAction).attr('action'),
																data: data,
																cache: false,
																contentType: false,
																processData: false,
																beforeSend: function() {
																$(btnAction).attr("disabled", true);
																$(spinAction).show();
																},
																success: function(response) {
																var response = JSON.parse(response);
																$(btnAction).removeAttr("disabled");
																$(spinAction).hide();
																if (response[0].res == 'success') 
																{
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "success");
																if (response[0].redirect) {
																window.setTimeout(function() 
																{ 
																window.location.href = response[0].redirect;
																}, 1000);
																} 
																else{
																window.setTimeout(function() {
																window.location.reload();
																}, 1000);
																}
																}
																else if (response[0].res == 'pay') 
																{ 
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "success");
																var options = {
																"key": response[0].data.rzp_api_key,  
																"amount": response[0].data.rzpAmount, 
																"currency": "INR",   
																"name": response[0].data.product, 
																"description": response[0].data.description, 
																"image": response[0].data.logo, 
																"order_id": response[0].data.rzpOrderId, 
																"handler": function (rzpResponse){
																data=response[0].data.enrollData
																cart_details=response[0].data.cart_details
																apply_status=response[0].data.apply_status
																apply_type=response[0].data.apply_type
																apply_id=response[0].data.apply_id
																url=response[0].data.baseUrl+'Home/PaymentResponseOrder/'+rzpResponse.razorpay_order_id+'/'+rzpResponse.razorpay_payment_id;
																$.ajax({
																url: url,
																type: "post",
																data: {
																'data': data,
																'cart_details': cart_details,
																'apply_status': apply_status,
																'apply_type': apply_type,
																'apply_id': apply_id,
																},
																success: function(response) {
																var response = JSON.parse(response);
																if (response[0].res == 'success') {
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "success");
																if (response[0].redirect) {
																window.setTimeout(function() {
																window.location.href = response[0].redirect;
																}, 1000);
																} else {
																window.setTimeout(function() {
																window.location.reload();
																}, 1000);
																}
																} else if (response[0].res == 'error') {
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "error");
																}
																} 
																});
																},
																"prefill": {
																"name": 'User Name',
																"email": 'test@gmail.com',
																"contact": '9839336655'
																},
																"notes": {
																"address": "SlickPattern"
																},
																"theme": {
																"color": "#004bfe"
																}
																};
																var rzp1 = new Razorpay(options);   
																rzp1.open();   
																} 
																else if (response[0].res == 'error') {
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "error");
																window.setTimeout(function() {
																window.location.reload();
																}, 1000);  
																}
																},
																error: function() {
																// window.location.reload();
																}
																});
																}
																});
																$('.paymentOptions').click(function(){
																$('.paymentOptions').removeClass('active-paymode');
																$(this).addClass('active-paymode');
																})
																function couponDetails(discount){
																$('.saving-info').text(discount);
																}
																$(document).ready(function(){
																$('.coupon').each(function(){
																if ($(this).is(':checked')) {       
																discount=$(this).parent().find('.maximum-save').text()
																if(discount.length=='NULL'){
																discount=0;
																}
																$('.saving-info').text(discount);
																}      
																});
																})
																
																function OpenAddressModal(){
																jQuery('#AddAddress').modal('show')
																}
																
																function OpneCouponModal(){
																jQuery('#CouponModal').modal('show')
																}
																
																function UpdateQty(cartid,type,qty){
																$.ajax({
																url: "<?php echo base_url("Auth/UpdateCartQty"); ?>",
																type: "post",
																data: {
																'id': cartid,
																'type': type,
																'qty': qty,
																},
																success: function(response) {
																var response = JSON.parse(response);
																if (response[0].res == 'success') {
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "success");
																if (response[0].redirect) {
																window.setTimeout(function() {
																window.location.href = response[0].redirect;
																}, 1000);
																} else {
																window.setTimeout(function() {
																window.location.reload();
																}, 1000);
																}
																} else if (response[0].res == 'error') {
																$('.notifyjs-wrapper').remove();
																$.notify("" + response[0].msg + "", "error");
																}
																}
																});
																} 	
																$('.gift-wrap-slider').owlCarousel({  
																loop: false, 
																autoplay: false,  
																nav: true,
																dots: false,
																margin: 0,
																responsive: {
																0: {
																items: 1,
																
																},
																460: {
																items: 1.5,
																},
																1024: {
																items: 2,
																},
																},
																navText: [
																'<i class="fa-solid fa-angle-left" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>',
																'<i class="fa-solid fa-angle-right" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>'
																],
																// navcontainer-fluid: '.main-content .custom-nav',
																})
																
																$(document).ready(function(){
																$('.gift-wrap-label').click(function(){
																$('.gift-wrap-label').removeClass('active');
																$(this).addClass('active');
																})
																})
																
																function addGiftwrap(id){
																$('#cart-item-id').val(id);
																}
																function ShowGiftWrap(id) {
																jQuery("#GiftWrapDetailModal").modal("show");  
																jQuery("#GiftWrapDetailModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
																jQuery("#GiftWrapDetailModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowGiftWrap/') ?>" + id);
																}
																function remove(systemid,userid){
																var status = true;
																swal({
																title: "Are you sure?",
																text: "You want to remove giftwrap !",
																icon: "warning",
																buttons: true,
																dangerMode: true
																}).then((willDelete) => {
																if (willDelete) {
																$.ajax({
																url: "<?= base_url($this->data->controller .'/Cart/RemoveGiftWrap/')?>"+userid, 
																type: "post",
																data:{userid:userid,systemid:systemid},
																success: function(response) {
																if(response){
																swal("Removed successfully !", {
																icon: "success",
																});
																location.reload(); 
																}
																else{
																swal("Something went wrong !", {
																icon: "error",
																});
																}
																}
																});
																}
																});
																return status;  
																}
																
																$(document).ready(function(){
																$('.coupon').click(function() {
																$('.coupon').not(this).prop('checked', false);
																});
																$('.wallet').click(function() {
																$('.wallet').not(this).prop('checked', false);
																if($(this).prop("checked")==true){
																let value=$(this).val();
																let wallet_discount=0;
																let limit=0;
																let total='<?= $TotalPaidAmount?>';
																
																if(value=='cashback'){
																wallet_discount='<?=$cashback_used_limit?>';
																limit='<?=$cashback_used_limit?>';
																}
																else if(value=='reward'){
																wallet_discount='<?=$eqv_cashback?>';
																limit='<?=$eqv_cashback?>';
																}
																if(wallet_discount=>limit){
																$('.total_paid_amount').text(total-wallet_discount);
																$.notify("₹" + wallet_discount + " off in your total amount", "success");
																}
																else{
																$.notify("Sorry! your wallet amount is low", "error");
																}
																}
																
																});
																function OpneCouponModal(){
																jQuery('#CouponModal').modal('show')
																}
																
																});
																
																</script>
																<script>
																jQuery('[data-toggle="popover"]').popover({
																html: true,
																trigger:'click',
																content: function() {
																// var id = jQuery(this).attr('id');
																return jQuery('#popover-card').html();
																}
																});
																</script>
																</body>
																</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													