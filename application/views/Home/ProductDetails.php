<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<?php
			if(!empty($variants->variant_img)){
				$icons = explode(',', $variants->variant_img);
				}else{
				$icons = explode(',', $list->image1); 
			}
		?>
		<meta charset="UTF-8">  
		<title><?= $list->name?>-<?= $list->title?></title>
		<meta name="description" content="<?= $list->name?>-<?= $list->title?>">
		<meta name="keywords" content="">
		<meta name="author" content=""> 
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?= $list->name?>-<?= $list->title?>">
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="Slick Pattern" />
		<meta property="og:image" content="<?= base_url('uploads/product/') . $icons[0]; ?>" />
		<meta property="og:image:secure_url" content="<?= base_url('uploads/product/') . $icons[0]; ?>" />
		<meta property="og:image:width" content="640" />
		<meta property="og:image:height" content="640" />
		<meta property="og:image:alt" content="LOGO - <?= $list->name?>" />
		<meta property="og:title" content="<?= $list->name?>" />
		<meta property="og:description" content="<?= $list->title?>" />  
		<meta property="og:url" content="<?= base_url()?>" />
		<link rel="canonical" href="<?= base_url()?>" />
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/flyingHeart.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" />
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/reset.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/jquery-picZoomer.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
		<!--<link rel="stylesheet" type="text/css" href="<?= base_url('public/css/productDetails.css') ?>">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />
		<style>
			html {
            scroll-behavior: smooth;  
			}
			b, strong {
			font-weight: 500;
			}
			.pro-desc+p {
            margin: 0px;
			color: #505052ed;
			} 
			.fixedTop {
            position: sticky;
            top: 130px;
			}
			.btn-review-feedback::after{
			right: 11px;
			bottom: 19px;
			}
			
			#likebtn:hover {
            color: #FA057E;
			}
			
			#modalinfotxt {
            border: 1px solid slategray;
            padding: 2px 10px;
            border-radius: 50px;
			font-size: 12px !important;
			font-weight: 900;
			margin-top: 0px;
			position: absolute;
			color: black;
			}
			
			#modalinfotxt:hover {
            border: 1px solid #FA057E;
			}
			
			.customBtn1,
			.customBtn2 {
            width: 49%;
			padding-top: 12px;
			padding-left: 4px;
			padding-right: 20px; 
			padding-bottom: 12px;
			}
			
			@media only screen and (max-width:768px) {
            .customBtn1 {
			width: 55%;
            }
			
            .customBtn2 {
			width: 44%;
            }
			
            .divider {
			width: 100% !important;
            }
			
			#modalinfotxt {
			position:unset;
			margin-top:-1px;
			}
			
			}
			
			@media only screen and (min-width:768px) and (max-width:1024px) {
            .col-sm-10 {
			flex: 0 0 100%;
			max-width: 100%;
            }
			
            .fixedTop {
			position: sticky;
			top: 10px;
			z-index: 1;  
            }
			}
			
			@media only screen and (max-width:460px){
			.fixedTop {
			position: unset;
            }
			
			}
			
			.delivery-icon-box {
            width: 32%;
            padding: 5px;  
			}
			
			.divider {
            width: 84%;
			}
			
			.desktop-image-slider {
            transform: rotate(90deg);
            width: 450px;
            margin-top: 192px;
            margin-left: -194px;
			}
			
			.desktop-image-slider .owl-stage-outer {
			width: 450px;
			}
			
			.item {
			transform: rotate(-90deg);
			cursor: pointer;
			}
			
			.desktop-image-slider .owl-nav {
			display: flex;
			justify-content: space-between;
			position: absolute;
			width: 100%;
			top: calc(50% - -31px);
			left: -7px;
			}
			
			div.desktop-image-slider .owl-nav .owl-prev {
			font-size: 36px;
			top: unset;
			bottom: 15px;
			left: -10px;
			color: #8340A1;
			}
			
			div.desktop-image-slider .owl-nav .owl-next {
			font-size: 36px;
			top: unset;
			bottom: 15px;
			right: -25px;
			color: #8340A1;
			}
			
			.btn-iframe .img-fluid,.btn-iframe video ,.beauty-tips{  
			height:160px;   
			}
			.beauty-tips{
			width:100%;
			}  
			
			@media all and (max-width:767px) {
			.phoneFixedButton {
			position: fixed;
			bottom: 0px;
			z-index: 10000000000;
			margin-left: -19px;
			background: #fafafa;
			box-shadow: 2px 1px 11px #d7d2d2;
			padding-top: 2px !important;
			padding-bottom: 0px !important;
			}
			
			.btn-iframe .img-fluid,.btn-iframe video ,.beauty-tips{  
			height:100px;  
			}
			}
		</style>
		<!--css for countdown-->
		<style>
			.deal-countdown {
			position: absolute;
			left: auto;
			transform: unset;
			width: 100%;
			bottom: unset;
			top: unset;
			margin-top: 0px;
			}
			
			@media only screen and (max-width:768px) {
			.deal-countdown {
			position: absolute;
			left: auto;
			transform: unset;
			width: 100%;
			bottom: unset;
			top: unset;
			margin-top: -3px;
			}
			}
			
			.countdown-show4{
			background:transparent;
			}
			.countdown-row {
			border-radius: 50px;
			width: 100%;
			text-align: center;
			padding: 0px;
			margin-left: 0px;
			}
			
			.deal-countdown .countdown-section {
			display: flex;
			position: relative;
			font-weight: 600;
			font-size: 0.6rem !important;
			line-height: 1;
			padding: 0.5rem 0 2rem;
			margin-left: 0rem;
			margin-right: 0rem;
			background-color: transparent;
			border-radius: 0.3rem;
			border: none;
			}
			
			.deal-countdown .countdown-amount {
			display: inline-block;
			color: #ff0f0f;
			font-weight: 600;
			font-size: 1rem !important;
			line-height: 0;
			letter-spacing: -.03em;
			margin-bottom: 0rem;
			}
			
			.deal-countdown .countdown-period {
			position: absolute;
			left: 12px;
			right: 0;
			top: 0px;
			text-align: center;
			bottom: 1rem;
			display: block;
			font-weight: 600;
			color: #fa0f0f;
			text-transform: uppercase;
			/* width: 100%; */
			padding-left: 0;
			padding-right: 0;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			}
			
			.deal-countdown .countdown-period {
			font-size: 1rem;
			}
			
			.deal-countdown .countdown-section:not(:last-child):after {
			color: #333333;
			content: ':';
			display: inline-block;
			font-weight: 600;
			font-size: 14px;
			line-height: 1;
			position: absolute;
			left: 100%;
			margin-left: -8px;
			margin-top: -14px;
			top: 50%;
			transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			}
			
			@media only screen and (max-width:425px) {
			.deal-countdown {
			/* margin-bottom: 0; */
			max-width: none;
			position: absolute;
			left: auto;
			transform: unset;
			width: 55%;
			bottom: unset;
			top: unset;
			margin-top: 0px;
			}
			
			.deal-countdown .countdown-show4 .countdown-section {
			width: calc(25% - 0px);
			}
			
			.deal-countdown .countdown-amount,
			.deal-countdown .countdown-period {
			font-size: 0.8rem !important;
			}
			
			.deal-countdown .countdown-period {
			position: absolute;
			left: 2px;
			right: 0;
			top: 2px;   
			}
			
			.modal-info{
			padding:0;
			position: relative;
			top: 0px;
			left: 0px;
			}
			
			}
			.deal-countdown .countdown-show4 .countdown-section {
			width: calc(25%);
			}
			
			.slick-prev, .slick-next {
			font-size: 0;
			line-height: 0;
			position: absolute;
			top: 95% !important;    
			display: block;     
			width: 26px;
			height: 26px;
			padding: 0px;
			transform: rotate(90deg) !important;
			cursor: pointer;
			color: black;
			border: none;
			outline: none;
			background: none !important;
			border-radius: 50%;
			}
			.slick-arrow {
			opacity: 1!important;
			transform: translate(0);
			}
			.slick-next{
			right:25px;
			}
			.slick-prev{
			left:15px;
			}
			@media only screen and (max-width:1024px){
			.slick-next{
			right:15px;
			}
			.slick-prev{
			left:5px; 
			}
			.slick-prev, .slick-next {
			top:93% !important;
			}
			}
			@media only screen and (max-width:768px){
			.product-image-container{
			padding-left:0;
			}
			.slick-next{
			right:15px;
			}
			.slick-prev{
			left:5px; 
			}
			.slick-prev, .slick-next {
			top:25% !important;
			transform: rotate(0deg) !important;
			}
			}
			@media only screen and (max-width:425px){
			.product-image-container{
			padding:0;
			}
			}
			
			:root {
			--starColor: #a5a5a5;
			--starHighlightColor: #ffc107;
			--successColor: #069a1c;
			--starSize: 3rem;
			}
			
			@keyframes StarsIn {
			0% {
			background-color: var(--starColor);
			transform: scale(1) rotate(0);
			filter: brightness(100%);
			}
			
			50% {
			background-color: var(--starHighlightColor);
			transform: scale(1.3) rotate(5deg);
			filter: brightness(110%);
			}
			
			100% {
			background-color: var(--starHighlightColor);
			transform: scale(1) rotate(0);
			filter: brightness(100%);
			}
			}
			
			@keyframes EmojiIn {
			0% {
			opacity: 0;
			transform: scale(0.5) translateY(0);
			}
			
			50% {
			opacity: 1;
			transform: scale(1.5) translateY(-1rem);
			}
			
			100% {
			opacity: 0;
			transform: scale(2) translateY(-3rem);
			}
			}
			
			.star-rating-widget {
			position: relative;
			font-family: Arial, Helvetica, sans-serif;
			text-align: center;
			}
			
			.star-rating-widget__btn {
			position: relative;
			display: inline-block;
			padding: 0;
			border: none;
			background-color: transparent;
			cursor: pointer;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			outline: none;
			}
			
			.star-rating-widget__btn:focus,
			.star-rating-widget__btn-content:focus {
			outline: none;
			}
			
			.star-rating-widget__btn-content {
			display: inline-block;
			}
			
			.star-rating-widget__btn:focus>.star-rating-widget__btn-content {
			box-shadow: 0 0 2px 2px var(--starHighlightColor);
			}
			
			.star-rating-widget__star {
			display: inline-block;
			width: var(--starSize);
			height: var(--starSize);
			background-color: var(--starColor);
			clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
			}
			
			.star-rating-widget__btn--highlight .star-rating-widget__star {
			background-color: var(--starHighlightColor);
			}
			
			.star-rating-widget__btn--animate .star-rating-widget__star {
			animation: 0.2s ease-in both StarsIn;
			}
			
			.star-rating-widget__submitted {
			position: absolute;
			top: var(--starSize);
			left: 0;
			right: 0;
			font-weight: bold;
			}
			
			.star-rating-widget__submitted>p {
			color: var(--successColor);
			margin: 0.5em 0;
			}
			
			
			.star-rating-widget--with-emojis .star-rating-widget__emoji {
			content: attr(data-emoji);
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			opacity: 0;
			font-size: calc(var(--starSize) * 0.5);
			pointer-events: none;
			z-index: 10;
			}
			
			.star-rating-widget--with-emojis .star-rating-widget__btn--selected {
			outline: none;
			}
			
			.star-rating-widget--with-emojis .star-rating-widget__btn--selected .star-rating-widget__emoji {
			animation: 1s ease-in normal EmojiIn;
			}
		</style>  
	</head>
	<body>
		<?php include('include/header.php') ?> 
		<?php 
			
			$category=$this->db->get_where('categories',array('id'=>$list->category))->row();
			$subcategory=$this->db->get_where('sub_category',array('id'=>$list->sub_category))->row();
			$cosubcategory=$this->db->get_where('co_subcategory',array('subcategory_id'=>$subcategory->id))->row();
			$brand=$this->db->get_where('brand',array('id'=>$list->brand_id))->row();
			
		?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container-fluid py-0  d-flex justify-content-between" >
					<ol class="breadcrumb" style="margin-left:5px;">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item <?php if(empty($subcategory->name)){echo "active";}?>"><a href="<?= base_url('Product/C/'.$category->name)?>"><?php if(!empty($category->name)){ echo ucfirst($category->name);}?></a></li>
						<li class="breadcrumb-item <?php if(empty($cosubcategory->name)){echo "active";}?>"><a href="<?= base_url('Product/S/'.$subcategory->name)?>"><?php if(!empty($subcategory->name)){ echo ucfirst($subcategory->name);}?></a></li>
						<li class="breadcrumb-item <?php if(empty($list->title)){echo "active";}?>"><a href="<?= base_url('Product/CS/'.$cosubcategory->name)?>"><?php if(!empty($cosubcategory->name)){ echo ucfirst($cosubcategory->name);}?></a></li>
						<li class="breadcrumb-item active hide_in_mobile"><a><?php if(!empty($list->title)){ echo ucfirst($list->title);}?></a></li>
					</ol>
					<div class="" style="margin: auto 11px;">
						<!--<span class="bi bi-gift" id="blinkgift" data-toggle="tooltip" data-placement="top" title="Gift Wrap" onclick="giftWrap()"></span>&nbsp;-->
						<div class="dropdown">
							<span class="bi-solid bi-share   ml-1 dropbtn" data-toggle="tooltip" data-placement="top" title="Share"></span>
							<div class="dropdown-content">
								<!-- Sharingbutton Facebook -->
								<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$variants->id?>" target="_blank"  aria-label="">
									<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
									</div>
									</div>
								</a>
								<!-- Sharingbutton Twitter -->
								<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$variants->id?>" target="_blank"  aria-label="">
									<div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
									</div>
									</div>
								</a>
								<!-- Sharingbutton E-Mail -->
								<a class="resp-sharing-button__link" href="mailto:?subject=<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$variants->id?>" target="_self"  aria-label="">
									<div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg>
									</div>
									</div>
								</a>
								<!-- Sharingbutton WhatsApp -->
								<a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$variants->id?>" target="_blank" >
									<div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg>
									</div>
									</div>
								</a>
								
							</div>
						</div>
						
					</div>
					<div class="row" id="giftSection" style="position:absolute;right:80px;z-index:3;">
						<div class="col-sm-12">
							<div class="card shadow">
								<div class="card-body">
									<span class="float-right"><i class="bi bi-x-lg" onclick="closeGiftWrap()"></i></span>
									<div class="form-group">
										<label class="font-weight-bold text-uppercase">Add your message here</label>
										<textarea class="form-control" maxlength="100" name="msg" onkeyup="limitWords(this.value)" rows="3" cols='3' placeholder='Customize your message for your love one within 20 words' style="font-size:10px; "></textarea>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-3 col-12">
												<button class="mt-2  text-uppercase" id="btnSubmit" style="background-color:#8340A1; color:white; border: 0px; padding: 5px;">Submit</button>
											</div>
											<div class="col-lg-9 col-12">
												<a href="<?= base_url("Home/PrivacyPolicy") ?>" target="_blank" class="float-right" style="font-size: 12px; margin-top: 15px; font-weight: 600">Privacy Policy</a>
											</div>
										</div>
									</div>
									<span style="font-size: 9px; font-weight:900">This is chargeable and non refundable.</span>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
				<!--<div class="container-fluid-fluid py-0" >
					<div class="row m-0">
					<div class="col-sm-6 col-6">
					<a href="javascript:void(0)" class="prevbtn"><button class="bn30 p-0"> <i class="fa-solid fa-angle-left"></i>&ensp;<span class="appendtext " style="font-size: 12px;font-weight: 600; margin-top: -50px; position: relative; top: -1px; left: -3px;"></span> </button></a>
					</div>
					<div class="col-sm-6 col-6">
					<a href="javascript:void(0)" class="nxtbtn float-right"><button class="bn30 p-0"> <span class="appendnext" style="font-size: 12px;font-weight: 600; margin-top: -50px; position: relative; top: -1px; left: -3px;"></span><i class="fa-solid fa-angle-right"></i>&ensp; </button></a>
					</div>
					</div>
				</div>-->
			</nav>
		</div>
		<!-- Site Content -->
		<section class="pro-content product-content" style="padding-top:0px;">
			<div class="container-fluid">  
				<div class="product-detail-info">  
					<div class="row pt-2">
						<div class="col-12 col-sm-12 product-submain">
							<div class="row m-1">
								<div class="col-sm-6 p-0">
									<div class="row fixedTop m-0">  
										<div class="col-sm-12 product-image-container pl-0" > 
											<div class="product-gallery product-gallery-vertical ">
												<?php 
													if($list->modalinfo_status=='true'){
													?>
													<a href="javascript:void(0);" class="hide_in_mobile" style="font-size: 12px !important; font-weight:900; margin-left:10px;" id="modalinfotxt" data-toggle="modal" data-target="#modalinfo">Modal info&nbsp;</a>
													<style>
														@media screen and (min-width: 992px){
														.product-gallery-vertical .product-image-gallery {
														margin-top: 28px; 
														}
														}
													</style>
												<?php } ?> 
												<div class="row hide_in_mobile">  
													<?php
														if(!empty($variants->variant_img)){
															$icons = explode(',', $variants->variant_img);
															}else{
															$icons = explode(',', $list->image1); 
														}
													?>
													<figure class="product-main-image mb-1 ">
														<img id="product-zoom" src="<?= base_url('uploads/product/') . $icons[0]; ?>" data-zoom-image="<?= base_url('uploads/product/') . $icons[0]; ?>" alt="<?=$list->title?>">
														<a href="#" id="btn-product-gallery" class="btn-product-gallery phone-product-gallert-btn position-absolute hide_desktop">
															<i class="icon-arrows"></i>
														</a>    
													</figure><!-- End .product-main-image -->
													<div id="product-zoom-gallery" class="product-image-gallery vertical-slider" style="border:1px solid bloack;">
														<?php
															$count=1;
															foreach ($icons as $each) {
															?>
															<a class="product-gallery-item <?php if($count==1){echo "active";}?>" href="#" data-image="<?= base_url('uploads/product/') . $each; ?>" data-zoom-image="<?= base_url('uploads/product/') . $each; ?>">
																<img src="<?= base_url('uploads/product/') . $each; ?>"  alt="<?=$list->title?>">
															</a>
															<?php
															$count++;}
														?>
													</div><!-- End .product-image-gallery -->
												</div><!-- End .row -->
												<div class="row hide_desktop" style="margin-right: -17px; margin-left: -17px;">   
													<div class="product-gallery product-gallery-vertical">
														<div class="intro-slider-container">
															<div class="single-giftwraping owl-carousel owl-theme owl-nav-inside owl-light" >		
																<?php
																	if(!empty($variants->variant_img)){
																		$icons = explode(',', $variants->variant_img);
																	}
																	else{
																		$icons = explode(',', $list->image1); 
																	}
																?>
																<?php
																	$count=1;
																	foreach ($icons as $each) { 
																	?>
																	<img src="<?= base_url('uploads/product/') . $each; ?>"  alt="<?=$list->title?>" style="height:420px !important;">
																	<?php
																	$count++;}
																?>
															</div><!-- End .intro-slider owl-carousel owl-theme -->
															
														</div>
													</div>
												</div>
											</div><!-- End .product-gallery -->
										</div><!-- End .col-md-12 -->
										
										<!--like and modal info start-->
										<div class="col-sm-6 col-6 my-1 pl-0">     
											<span class="hide_desktop" style="color:#8340A1;">
												<?php
													$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$list->id,'is_combo'=>'false','is_status'=>'true'))->row(); 
													$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'true'))->num_rows();
													if(!empty($countReview) AND !empty($ratingCount)){
														$totalRating=$ratingCount->rating/$countReview; 
														$totalRating=round($totalRating,1);
													?>
													<div class="ratings" style="font-size:1.2rem;">   
														<div class="ratings-val" style="width:<?php if(!empty($totalRating)){echo ($totalRating)*20;}?>%; font-size:1.2rem;" ></div><!-- End .ratings-val -->
													</div><!-- End .ratings --> 
													<a href="#reviewSection">(<?php if(!empty($countReview)){echo $countReview;}?>)</a>   
												<?php } ?>
											</span>   
										</div>
										
										<div class="col-sm-6 col-6 my-1 pl-0 text-center d-flex justify-content-end modal-info">  
											<!--&emsp;&emsp;<span class=" p-0" id="likebtn" data-toggle="tooltip" data-placement="left" title="Like(238)" style=" font-size: 14px; font-weight: 600;"><i class="fa-regular fa-heart"></i>&nbsp;(238)</span>&nbsp;-->
											<a href="javascript:void(0);" class="hide_desktop" style="font-size: 12px !important; font-weight:900; margin-left:10px;" id="modalinfotxt" data-toggle="modal" data-target="#modalinfo">Modal info&nbsp;</a>
										</div>
										<!-- like and modal info end-->
										<span class="hide_in_mobile" style="display:flex; overflow:hidden;"> 
											<!-- beauty tips and dressing sense start--> 
											<?php 
												if($this->sitepermission->beauty_tips){
													$beautytips=$this->db->get_where('tbl_beautytips',array('product_id'=>$list->id))->row();
													if(!empty($beautytips)){
													?>
													<div class="col-sm-4 mt-0 pl-0">
														<h2 class="text-uppercase beautytxt">Beauty Tips</h2>
														<a href="javascript:void(0)" onclick="OpenTipsModal('<?= $beautytips->id?>')"> <img src="<?= base_url('uploads/product/').$beautytips->image?>" class=" beauty-tips" ></a>   
													</div>
												<?php } } ?>
												<?php 
													if($this->sitepermission->beauty_tips){
														$productVideo=$this->db->get_where('product_video',array('product_id'=>$list->id))->result();
														if(!empty($list->youtube_link1) OR !empty($list->youtube_link2) OR !empty($list->youtube_link3) OR !empty($productVideo)){?>
														<div class="col-sm-8 tabs-product mt-0 px-3">
															<h2 class="text-uppercase dressingtxt">Dressing Tips </h2>
															<div class="dressing-slider owl-carousel row " >     
																<?php if(!empty($list->youtube_link1)){
																	$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link1); 
																	$watchUrl =$getYoutubeLinkData->watchUrl;  
																	$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
																?>
																<div class="col-12 col-md-12 pro-blog p-0">
																	<div class="pro-thumb"> 
																		<a class="btn-iframe" href="<?= $watchUrl;?>">   
																			<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																		</a>
																	</div>
																</div>
																<?php } ?>
																<?php if(!empty($list->youtube_link2)){
																	$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link2);
																	$watchUrl =$getYoutubeLinkData->watchUrl;  
																	$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
																?>
																<div class="col-12 col-md-12 pro-blog p-0">
																	<div class="pro-thumb"> 
																		<a class="btn-iframe" href="<?= $watchUrl;?>">   
																			<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																		</a>
																	</div>
																</div>
																<?php } ?>
																<?php if(!empty($list->youtube_link3)){
																	$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link3);
																	$watchUrl =$getYoutubeLinkData->watchUrl;  
																	$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
																?>
																<div class="col-12 col-md-12 pro-blog p-0">
																	<div class="pro-thumb"> 
																		<a class="btn-iframe" href="<?= $watchUrl;?>">   
																			<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																		</a>
																	</div>
																</div>
																<?php } ?>
																<?php if(!empty($list->youtube_link4)){
																	$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link4);
																	$watchUrl =$getYoutubeLinkData->watchUrl;  
																	$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
																?>
																<div class="col-12 col-md-12 pro-blog p-0">
																	<div class="pro-thumb"> 
																		<a class="btn-iframe" href="<?= $watchUrl;?>">   
																			<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																		</a>
																	</div>
																</div>
																<?php } ?>
																<?php if(!empty($list->youtube_link5)){
																	$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link5);
																	$watchUrl =$getYoutubeLinkData->watchUrl;  
																	$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl; 
																?>
																<div class="col-12 col-md-12 pro-blog p-0">
																	<div class="pro-thumb"> 
																		<a class="btn-iframe" href="<?= $watchUrl;?>">   
																			<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																		</a>
																	</div>
																</div>
																<?php } ?>
																<?php 
																	
																	if(!empty($productVideo)){
																		foreach($productVideo as $video){ 
																			if($video->type=='Youtube'){ 
																				$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($video->video);
																				$watchUrl =$getYoutubeLinkData->watchUrl;  
																				$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl; 
																			?>
																			<div class="col-12 col-md-12 pro-blog p-0">
																				<div class="pro-thumb">
																					<a class="btn-iframe" href="<?= $watchUrl;?>">   
																						<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
																					</a>
																				</div>
																			</div>
																			<?php }
																			else{ ?>
																			<div class="col-12 col-md-12 pro-blog p-0">
																				<div class="pro-thumb">
																					<a class="btn-iframe" href="<?= base_url('uploads/video/').$video->video?>">       
																						<video>     
																							<source src="<?= base_url('uploads/video/').$video->video?>" type="video/mp4">
																						</video> 
																					</a>   
																				</div>
																			</div> 
																			<?php 
																			} 
																		} 
																	} ?>       
															</div>
														</div>
													<?php } } ?> 
													<!-- beauty tips and dressing sense end-->
										</span>
									</div>
								</div>
								<div class="col-sm-6 px-0 py-2 " style="font-family: 'Inter', sans-serif;">
									<div class="col-sm-10 col-12 px-0 ">
										<div class="row">
											<?php 
												#Check user type-roya/normal
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
															$subscription='true'; 
														}
														else{
															$subscription='false';
														} 
													}
												}
												
												$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$list->id,'is_status'=>'true','product_type'=>'individual'))->row();
												$sale_status='false';  
												$sale_user_type='';
												if($this->sitepermission->sale){
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
															$discount_type='';
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
																	$price=$list->reg_sell_price;
																	$discount=(int)$saleProduct->discount;
																	$saleprice=$price - (($price/100) * $discount );
																	$saleprice=((floor($saleprice/50)*50)-1);
																}
																elseif($tblSale->discount_type=='flat'){
																	$price=$list->reg_sell_price;
																	$discount=(int)$saleProduct->discount;
																	$saleprice=$price -  $discount ;
																	$saleprice=((floor($saleprice/50)*50)-1);
																}
																elseif($tblSale->discount_type=='buy_x_get_y'){
																	$discount_type='buy_x_get_y';
																	$discount=(int)$saleProduct->discount;
																	$discount_type='buy_x_get_y'; 
																	$saleprice='Buy-'.$saleProduct->qty_x.'-Get-'.$discount ;
																}
															}
														}
													}
												}
											?>
											<div class="col-sm-12 col-12 pb-2"> 
												<div class="d-flex justify-content-between pro-desc">
													<div class="d-flex"> 
														<?php 
															$find=array(" ","'","&");
															$replace=array("_","-","--");
														$DesignerName=str_replace($find,$replace,$list->name);?>   
														<a href="<?= base_url('Designers/'.$DesignerName.'/'.$list->category)?>" ><h4 class="p-0 m-0 " style="line-height:1; font-weight:600;"><?= $list->name ?></h4></a>&nbsp;
														<?php if($list->uploaded_by=='vendor'){?>
															(<a href="<?= base_url('BestSeller/'.$list->vendor_id.'/'.$list->category)?>" class="sellerDesc">Best Seller</a>)
														<?php } ?>
													</div>
													<span class="hide_in_mobile" style="color:#8340A1;">
														<?php
															$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$list->id,'is_combo'=>'false','is_status'=>'true'))->row(); 
															$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'true'))->num_rows();
															if(!empty($countReview) AND !empty($ratingCount)){
																$totalRating=$ratingCount->rating/$countReview; 
																$totalRating=round($totalRating,1);
															?>
															<div class="ratings" style="font-size:1.2rem;">   
																<div class="ratings-val" style="width:<?php if(!empty($totalRating)){echo ($totalRating)*20;}?>%; font-size:1.2rem;" ></div><!-- End .ratings-val -->
															</div><!-- End .ratings --> 
															<a href="#reviewSection">(<?php if(!empty($countReview)){echo $countReview;}?>)</a>   
														<?php } ?>
													</span>
												</div>
												<p><?= $list->title ?></p>  
											</div>
										</div>
									</div>
									
									<div class="pro-desc">
										<?php if($sale_status=='true'){?> 
											<div class="flash-message mt-1">
												<div class="w-100">
													<span class="alert my-1" style="color:#e81515!important; background-color:lightpink;border:none !important;  font-weight:600; padding:0px 2px; !important;" role="alert">Flash Sale</span>
													<span style="color:#a7a0a0 !important; border:none !important;  font-weight:600; padding:5px !important;  padding-left:0px !important;">&nbsp;Ends In:</span> 
													<span style="color: #ff0c0c !important; border:none !important;   font-weight:600; padding:5px !important;" class="deal-countdown offer-countdown product-details" data-until="<?=$timer?>"   style="background:white;" ></span>
												</div>
											</div>
											<span class="mb-2"><?php if($tblSale->discount_type=='percent'){echo $saleProduct->discount.'% extra discount on this sale';}elseif($tblSale->discount_type=='flat'){echo '₹'.$saleProduct->discount.' extra off on this sale';}elseif($tblSale->discount_type=='buy_x_get_y'){echo 'Buy 1 get '.$saleProduct->discount.' on this sale';}?></span></br>
										<?php } ?>   
										<div class="" style="padding-top:10px;">
											<div class="product-price-info">
												<?php 
													if($sale_status=='true' AND $discount_type!='buy_x_get_y')
													{	 
													?>  
													<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $saleprice ?></span> <span class="text-success paragraph" style="font-weight:600;">&nbsp;<?php if($tblSale->discount_type=='percent'){echo '₹'.($list->mrp-$saleprice);}elseif($tblSale->discount_type=='flat'){echo '₹'.($list->mrp-$saleprice).' off';}?></span> <br>
													<?php 
													}
													else 
													{ ?>
													<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $list->reg_sell_price ?></span><br>
												<?php } ?>
												<span class="paragraph" style="font-size: 13px;color: #686868;">MRP <del>₹<?= $list->mrp ?></del> <span class="text-success">&nbsp;Inclusive of all taxes</span></span>
											</div> 
											<?php if($this->sitepermission->royal_subscription){ ?>
												<div class="row couponcontainer-fluid mt-2" style="margin:0 0.1rem;">   
													<div class="col-lg-7 col-sm-10 col-12 m-0 couponBox" style="min-height:70px; border-radius:0;">  
														<div class="d-flex">
															<div class="col-2 p-0 pb-2"> 
																<img src="<?= base_url('public/images/royaldelivery.png')?>" alt="Royal Subscription Delivery Benefites" style="width:60px !important;" />
															</div>
															<div class="col-10 pb-2 pr-0">
																<?php 
																	if($sale_user_type=='royal' and $subscription=='true'){
																		$margin=(int)($list->mrp)-(int)($saleprice);
																	}
																	else{
																		$margin=(int)($list->mrp)-(int)($list->royal_amt);
																	}
																	if($margin<40){ ?>
																	<strong>Get free shipping with Royal Club</strong><br> 
																	<?php }else{ ?>
																	<span>Save <span class="text-success">₹<?= $margin?></span>&nbsp;with Royal Club</span><br> 
																<?php } ?>
																<span style="font-size:12px;">
																	<?php if($margin<40){ ?>
																		<strong>Shipping Cost: <span class="text-success">&nbsp;₹0</span>&emsp;<del>&nbsp;₹50</del></strong> 
																		<?php }else{ ?>
																		<strong style="font-size: 14px;">Royal Club Price:<span>₹<?php if($sale_user_type=='royal' and $subscription=='true'){echo $saleprice;}else{echo $list->royal_amt;}?></span></strong>
																	<?php } ?>
																	<a href="<?= base_url('Home/RoyalBenefits')?>" class="pincode-serviceabilityViewMore"> 
																		Join Now
																		<svg viewBox="0 0 24 24" fill="#ff3e6c" class="pincode-rightArrow"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0.05"></path><path fill="#ff3e6c" d="M12.55 15.768a.786.786 0 00.041-.048l6.183-6.36a.815.815 0 000-1.128.761.761 0 00-1.095 0l-5.68 5.844-5.678-5.844a.761.761 0 00-1.095 0 .816.816 0 000 1.127l6.182 6.361A.761.761 0 0012 16a.76.76 0 00.55-.232"></path></g></svg>
																	</a>
																</span>
															</div>
														</div>
														<div class="col-sm-12 pt-1  couponBox1 justify-content-between" style="height:30px; !important;"> 
															<span style="font-weight:500;">Buy & Earn Club Cash upto ₹<?= $list->royal_clubcash ?></span>     
														</div>          
													</div>
												</div> 
											<?php } ?> 
										</div>
										<form action="<?php echo base_url($this->data->controller . '/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
											<input type="hidden" required name="productid" value="<?= $list->id; ?>">
											<!--select image start-->
											<div class="row">
												<div class="col-sm-10 col-12">
													<div class="gift-with-purchase d-flex my-1">
														<div class="my-auto <?php if($list->is_complimentary=='false'){echo 'd-none';}?>" style="font-size: 14px; color: #444343;"><input type="checkbox" checked selected />&nbsp;Free additional gift with purchase.</div>
													</div>
													<?php 
														if($AllVariants[0]->color != 'NA'){
															$color=$this->db->get_where('tbl_color',array('code'=>$variants->color))->row();
															if(count($AllVariants)==1){
															?> 
															<input type="hidden" name="color"  class="color-item sr-only"  value="<?= $AllVariants[0]->color ?>">
															<?php }else{ ?>
															<p class="subheading mb-0 border-top">Select Color</p>
															<span class="text-capitalize"><?php if(!empty($color->name)){echo $color->name;}?></span>
															<div class="panel-body row pl-3 py-2 owl-carousel filter-color" data-selection="single" data-image-size="small">
																<?php
																	
																	foreach ($AllVariants as $each) {   
																		if($each->color != 'NA'){
																			$count = 1;
																			$icons = explode(',', $each->variant_img);   
																		?>
																		<a href="<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$each->id?>"> 
																			<input type="radio" name="color" id="color<?= $count ?>" <?php if($each->id==$variants->id){echo 'checked';}?> required class="color-item sr-only" data-parsley-required-message="Please select color" value="<?= $each->color ?>">
																			<label href="<?php echo  base_url('Home/ProductDetails/').$list->id.'/'.$each->id?>" class="gallery-item <?php if($each->id==$variants->id){echo 'selected';}?>" >
																				<img src="<?= base_url('uploads/product/') . $icons[0]; ?>" alt="<?=$list->title?>"  style="height:100%;"> 
																			</label>     
																		</a>
																		<?php
																		}else{ ?>
																		<input type="hidden" name="color"  class="color-item sr-only"  value="NA"> 
																		<?php 
																		} 
																		$count++;
																	}
																?>
															</div>
														<?php } }else{ ?>  
														<input type="hidden" name="color"  class="color-item sr-only"  value="NA"> 
														<?php  
														} ?>
												</div>
											</div>
											<!--select image end-->
											<?php
												$sizes = explode(',', $variants->size);  
												if(!empty($sizes) AND $sizes[0]!='[{"NA":"0"}]'){
												?>
												<hr class="m-0 my-2 divider"><div class="row pt-0">
													<span class="col-sm-10 col-12 d-flex justify-content-between">  
														<label class="subheading mb-0" style="color: #282626 !important;">Select Size</label>
														<span class="pincode-serviceabilityViewMore <?php if($list->sizechart_type=='NA'){ echo 'd-none' ; }?>" style="margin:3px 9px;" onclick="openNav()"> 
															SIZE CHART 
															<svg viewBox="0 0 24 24" fill="#ff3e6c" class="pincode-rightArrow"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0.05"></path><path fill="#ff3e6c" d="M12.55 15.768a.786.786 0 00.041-.048l6.183-6.36a.815.815 0 000-1.128.761.761 0 00-1.095 0l-5.68 5.844-5.678-5.844a.761.761 0 00-1.095 0 .816.816 0 000 1.127l6.182 6.361A.761.761 0 0012 16a.76.76 0 00.55-.232"></path></g></svg>
														</span>
													</span>
													<div class="col-sm-12 col-12">
														<div class="row m-0">
															<div class="col-sm-10 p-0   border-bottom  ">
																
																<input type="hidden" name="variantid" value="<?= $variants->id ?>"> 
																<div class="row m-0 d-flex py-2 filter-size owl-carousel">
																	<?php
																		$json=json_decode($variants->size);
																		$count = 1;
																		foreach ($json as $each){
																			foreach($each as $size=>$size_stock){
																			?>
																			<span>
																				<input type="radio" name="size" value="<?= $size ?>" <?php if($size_stock<=0){echo 'disabled';}?> id="sizename<?= $count ?>" class="sr-only sizename" data-parsley-required-message="Please select size" required />
																				<label for="sizename<?= $count ?>" class="size-label <?php if($size_stock<=0){echo 'size-buttons-size-button-disabled';}?>" >
																					<a class="sizeBox" style="font-weight: 500;"><?= $size ?></a> 
																					<?php if($size_stock<=0){echo "<span class='size-buttons-size-strike-show'></span>";}?> 
																				</label>
																				<span class="size-buttons-inventory-left <?php if($size_stock<=5 AND $size_stock > 0){echo 'd-block';}else{echo 'd-none';}?>" style="bottom:17px;"><?= $size_stock;?>&nbsp;left</span>
																			</span> 
																			<?php
																			}
																			$count++; 
																		}
																	?>
																</div>
																<?php 
																	if($this->permission == 'true'){
																		$userid = $this->userData->id;
																		$userCart=$this->db->get_where('tbl_cart',array('userid'=>$userid))->result();
																		if(!empty($userCart)) {
																			foreach($userCart as $userCart){
																				if(in_array($userCart->size,$sizes)){
																					$userPurchaseSize=$userCart->size;
																				}
																			}  
																		}    
																	?>
																	<?php 
																		if(!empty($userPurchaseSize)){
																		?>
																		<div class="alert my-1 w-100" style="background-color:lightpink!important;color: #222121 !important; border:none !important; font-weight:500; padding:8px !important; font-size: 14px;" role="alert"><i class="fa-solid fa-tape"></i>&nbsp;We recommend&nbsp;<b><?=$userPurchaseSize;?></b>&nbsp; based on your purchase history.</div>
																		<?php } 
																	}?>
															</div>
														</div>
													</div>
												</div> 
												<?php }else{ ?> 
												<input type="hidden" name="variantid" value="<?= $variants->id ?>"> 
												<input type="hidden" name="size" value="NA"  class="sr-only sizename" required />  
											<?php }?>
											
											<div class="row m-0 mb-3 mt-3" id="absoluteButton">  
												<div class="col-sm-10 p-0 col justify-content-between  d-flex" id="phoneFixedButton">
													<?php
														$json=json_decode($variants->size);
														$count = 0;
														$variant_count=(count($json));
														foreach ($json as $each){
															foreach($each as $size=>$size_stock){
																if(($size_stock==0 AND $size!='NA') || $list->is_status=='false'){ $count++; } 
															} 
														}
													?>
													<?php
														if($count==$variant_count){
														?>
														<span id="" class="btn btn-secondary customBtn1 size-buttons-size-button-disabled text-uppercase disabled" style="font-weight:600; background: #d5d6d9 !important;"><i class='bi bi-bell'></i>Out of Stock</span>
														<?php }else{ ?>
														<button id="" class="btn btn-secondary customBtn1"><i class="bi bi-bag-plus"></i>Add To Bag<i class="fa fa-spin fa-spinner d-none" id="addSpin" ></i></button>
													<?php } ?>
													<button type="button" onclick="AddToWishlist('<?= $variants->id ?>')" class="btn btn-secondary customBtn2"><i class="fa-regular fa-heart"></i>Wishlist</button>
												</div>
											</div>
											
											<hr class="m-0 mt-1 divider">
											<div class="row pb-3">
												<div class="col-sm-12">
													<?php 
														$couponProduct = $this->db->order_by('id','DESC')->get_where('coupon_product',array('product_id'=>$list->id,'product_type'=>'individual'))->result();
														if(empty($couponProduct)){
														?>
														<p class="subheading m-0">Best Offer<i class="bi bi-tag" style="font-size: 20px; margin: 5px;"></i></p>
														<span style="font-size: 14px; color: #444343;">The Product is already at its best value.</span>
														<?php }
														else{ ?>  
														<div class="row m-0">
															<div class="col-sm-10  col-12 p-0 pt-1 pb-3  border-bottom ">
																<?php
																	$count=1;
																	foreach($couponProduct as $each)
																	{
																		$coupon=$this->db->get_where('tbl_coupon',array('id'=>$each->coupon_id))->row();
																		$start = strtotime($coupon->start_date);
																		$end = strtotime($coupon->end_date);
																		$today=time();
																		if($today >= $start and $today < $end and $count <= 1){  
																		?>
																		<h3 class="subheading">Coupons &nbsp;.&nbsp;<span style="font-size: 14px;font-weight: 500;color: gray;"><?= count($couponProduct);?> available</span></h3>
																		<?php 
																		}
																		$count++; 
																	}?>
																	
																	<div class="coupon-slider owl-carousel m-0 ">
																		<?php
																			foreach($couponProduct as $each)
																			{
																				$coupon=$this->db->get_where('tbl_coupon',array('id'=>$each->coupon_id))->row();
																				$start = strtotime($coupon->start_date);
																				$end = strtotime($coupon->end_date);
																				$today=time();
																				if($today >= $start and $today < $end){ 
																				?>
																				<div class="mx-1 couponcontainer-fluid" >   
																					<div class="row m-0 couponBox" style="min-height:120px;">  
																						
																						<div class="col-sm-3 p-0 pb-2"> 
																							<img src="<?= base_url('uploads/coupon/'.$coupon->banner) ?>" alt="<?=$coupon->title ?>" style="width:60px !important;" />
																						</div>
																						<div class="col-sm-9 pb-2">
																							<strong><?=$coupon->title ?></strong><br> 
																							<span style="font-size:12px;"><?php echo substr($coupon->description,0,50)."...." ?><strong>   
																								<button type="button" class="btn" onclick='couponModal(<?php echo $coupon->id ;?>)' data-toggle="modal" data-target="#myModal">  
																									details<i class="fa-solid fa-angle-down m-1"></i> 
																								</button></strong>
																							</span>
																						</div>
																						<div class="col-sm-12 pt-2 d-flex couponBox1 justify-content-between" style="height:30px;!important; line-height:1;"> 
																							<span style="font-weight:600;"><?=$coupon->coupon ?></span>     
																							<span class="coupon-copy-btn" data-copy-on-click="<?=$coupon->coupon ?>" style="font-weight:600;color:#FA057E; cursor:pointer;">Copy Code</span>  
																						</div>          
																					</div>
																				</div>
																				<?php }  
																			}  
																		?>
																	</div>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12  col-lg-8">  
													<div class="form-group w-100 mb-0">
														<span class="subheading mb-2">Delivery Options</span> 
														<svg viewBox="0 0 24 25" class="pincode-serviceabilityIcon mb-2"><g fill="none" fill-rule="evenodd"><path d="M0 1h24v24H0z"></path><path d="M21.872 12.843l-.68 3.849a1.949 1.949 0 00-.398-.819c-.377-.447-.925-.693-1.549-.693-1.024 0-1.98.669-2.395 1.601l1.159-6.571h1.703c.7 0 1.31.265 1.713.746.415.494.573 1.164.447 1.887m-3.238 5.812c-.297 0-.55-.108-.715-.306-.172-.204-.236-.486-.183-.795.123-.698.816-1.288 1.51-1.288.296 0 .55.108.716.306.17.204.235.486.18.794-.123.699-.814 1.289-1.508 1.289m-11.308 0c-.295 0-.55-.108-.715-.306-.171-.204-.236-.486-.18-.794.122-.699.814-1.289 1.508-1.289.296 0 .55.108.714.306.172.204.237.486.182.794-.123.699-.815 1.289-1.509 1.289m14.932-8.397c-.616-.731-1.518-1.134-2.546-1.134H18.2l.262-1.487A.546.546 0 0017.927 7H6.417a.543.543 0 100 1.086H17.28l-1.557 8.832h-5.8a1.965 1.965 0 00-.438-1.045c-.376-.447-.926-.693-1.548-.693-1.074 0-2.074.734-2.454 1.738h-.356l.143-.811a.543.543 0 10-1.069-.188l-.256 1.447a.546.546 0 00.535.637h.86c.045.389.194.753.438 1.045.375.446.925.693 1.548.693 1.075 0 2.075-.734 2.454-1.738h6.867c.044.389.194.752.439 1.045.375.446.925.693 1.547.693 1.075 0 2.075-.734 2.454-1.738h.52c.264 0 .49-.189.534-.449l.799-4.523c.184-1.043-.058-2.028-.683-2.773" fill="#535766"></path><path d="M9.812 9.667c0-.3-.243-.543-.543-.543H1.543a.544.544 0 000 1.086h7.726c.3 0 .543-.243.543-.543M9.387 12.074c0-.3-.243-.543-.543-.543h-5.82a.543.543 0 100 1.086h5.82c.3 0 .543-.243.543-.543M8.42 13.938H4.502a.543.543 0 100 1.086H8.42a.543.543 0 100-1.086" fill="#535766"></path></g></svg></br>
														<!--<small class=" mb-3" style="font-size: 14px; color: #444343;">Enter PIN code to know estimated delivery date</small>-->
														<div class="css-193eiy1">
															<div class="css-1qpidvu">
																<div class="inputWrapper css-8of4eq">
																	<input type="number" aria-invalid="false" aria-describedby="Delivers to Salempur - 274705" aria-label="Enter Pincode" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" value="274705" placeholder="122001" class="input  css-hwf464" data-at="pincode-input"  data-gtm-form-interact-field-id="0">
																	<label class="label css-1vskggh">Enter Pincode</label>
																</div>
																<div class="trailingComponent css-1e46tsl">
																	<button type="button" tabindex="0" aria-label="close"  class="css-1gdrk6j">Apply</button>
																	
																</div>
															</div>
															<span class="bar isValid css-11f900s"></span>
														</div>
														<p class="helperText css-17ykk15 my-2">
														<span data-at="delivery-city" style="color:#080808;">Delivers to Aligarh - 202001 </span><span class="css-g5sccu"><svg viewBox="0 0 24 24" color="#5c6874" class="css-18yhvum"><title></title><path d="M12 3C10.22 3 8.47991 3.52784 6.99986 4.51677C5.51982 5.50571 4.36627 6.91131 3.68508 8.55585C3.00389 10.2004 2.82566 12.01 3.17293 13.7558C3.5202 15.5016 4.37736 17.1053 5.63604 18.364C6.89471 19.6226 8.49835 20.4798 10.2442 20.8271C11.99 21.1743 13.7996 20.9961 15.4441 20.3149C17.0887 19.6337 18.4943 18.4802 19.4832 17.0001C20.4722 15.5201 21 13.78 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3ZM16.07 10L11.07 15C10.9295 15.1407 10.7388 15.2198 10.54 15.22C10.4399 15.2212 10.3405 15.2024 10.2477 15.1646C10.155 15.1268 10.0708 15.0709 10 15L7.9 12.91C7.82924 12.8411 7.773 12.7586 7.73461 12.6676C7.69621 12.5766 7.67643 12.4788 7.67643 12.38C7.67643 12.2812 7.69621 12.1834 7.73461 12.0924C7.773 12.0014 7.82924 11.9189 7.9 11.85C8.04062 11.7095 8.23125 11.6307 8.43 11.6307C8.62875 11.6307 8.81937 11.7095 8.96 11.85L10.53 13.42L15 9C15.1406 8.85955 15.3312 8.78066 15.53 8.78066C15.7287 8.78066 15.9194 8.85955 16.06 9C16.1865 9.13522 16.2576 9.31293 16.2595 9.49806C16.2613 9.68318 16.1937 9.86228 16.07 10Z" fill="#001325" fill-opacity="0.92"></path></svg></span></p>
														<div class="row m-0 py-1 delivery-icon">
															<ul class="pincode-serviceability-list w-100">
																<li class="pincode-serviceabilityItem">
																	<svg viewBox="0 0 24 25" class="pincode-serviceabilityIcon"><g fill="none" fill-rule="evenodd"><path d="M0 1h24v24H0z"></path><path d="M21.872 12.843l-.68 3.849a1.949 1.949 0 00-.398-.819c-.377-.447-.925-.693-1.549-.693-1.024 0-1.98.669-2.395 1.601l1.159-6.571h1.703c.7 0 1.31.265 1.713.746.415.494.573 1.164.447 1.887m-3.238 5.812c-.297 0-.55-.108-.715-.306-.172-.204-.236-.486-.183-.795.123-.698.816-1.288 1.51-1.288.296 0 .55.108.716.306.17.204.235.486.18.794-.123.699-.814 1.289-1.508 1.289m-11.308 0c-.295 0-.55-.108-.715-.306-.171-.204-.236-.486-.18-.794.122-.699.814-1.289 1.508-1.289.296 0 .55.108.714.306.172.204.237.486.182.794-.123.699-.815 1.289-1.509 1.289m14.932-8.397c-.616-.731-1.518-1.134-2.546-1.134H18.2l.262-1.487A.546.546 0 0017.927 7H6.417a.543.543 0 100 1.086H17.28l-1.557 8.832h-5.8a1.965 1.965 0 00-.438-1.045c-.376-.447-.926-.693-1.548-.693-1.074 0-2.074.734-2.454 1.738h-.356l.143-.811a.543.543 0 10-1.069-.188l-.256 1.447a.546.546 0 00.535.637h.86c.045.389.194.753.438 1.045.375.446.925.693 1.548.693 1.075 0 2.075-.734 2.454-1.738h6.867c.044.389.194.752.439 1.045.375.446.925.693 1.547.693 1.075 0 2.075-.734 2.454-1.738h.52c.264 0 .49-.189.534-.449l.799-4.523c.184-1.043-.058-2.028-.683-2.773" fill="#535766"></path><path d="M9.812 9.667c0-.3-.243-.543-.543-.543H1.543a.544.544 0 000 1.086h7.726c.3 0 .543-.243.543-.543M9.387 12.074c0-.3-.243-.543-.543-.543h-5.82a.543.543 0 100 1.086h5.82c.3 0 .543-.243.543-.543M8.42 13.938H4.502a.543.543 0 100 1.086H8.42a.543.543 0 100-1.086" fill="#535766"></path></g></svg>
																	<h4 class="pincode-serviceabilityTitle">Get it by Mon, Feb 20</h4>
																</li>
																<li class="pincode-serviceabilityItem">
																	<svg id="prefix__Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="pincode-serviceabilityIcon"><defs><mask id="prefix__mask" x="0" y="0" width="24" height="24" maskUnits="userSpaceOnUse"><g id="prefix__b"><path id="prefix__a" class="prefix__cls-1" d="M0 0h24v24H0z"></path></g></mask><mask id="prefix__mask-2" x="5.17" y="2" width="13.59" height="20" maskUnits="userSpaceOnUse"><g id="prefix__d"><path id="prefix__c" class="prefix__cls-1" d="M5.17 2h13.59v20H5.17z"></path></g></mask><style>.prefix__cls-1,.prefix__cls-4{fill:#fff;fill-rule:evenodd}.prefix__cls-4{fill:#535766}</style></defs><g mask="url(#prefix__mask)"><g mask="url(#prefix__mask-2)"><path class="prefix__cls-4" d="M17.59 18v2.47a1.17 1.17 0 010 .32 1.13 1.13 0 01-.32 0h-2.76a4.18 4.18 0 01-4-3.48h1.14a.57.57 0 00.57-.57.58.58 0 00-.57-.58H6.84a1.17 1.17 0 01-.45-.05 1.27 1.27 0 010-.44v-3.63-8.5a.51.51 0 01.09-.35.44.44 0 01.33-.08h6.08a1.1 1.1 0 01.31 0 1.31 1.31 0 010 .33v7.15a.59.59 0 00.58.58.58.58 0 00.57-.59V8.91l2.23 2.74.31.42a2.5 2.5 0 01.74 1.57v4.38m1.17-4.36a3.55 3.55 0 00-1-2.3l-.3-.39-3.17-3.89V3.52c0-1-.48-1.5-1.5-1.5H11C9.64 2 8.19 2 6.78 2a1.54 1.54 0 00-1.17.42 1.59 1.59 0 00-.44 1.18V15.72c0 1.18.46 1.64 1.65 1.64h2.47A5.31 5.31 0 0014.51 22h2.74a1.32 1.32 0 001.5-1.5V18v-4.36"></path></g><path class="prefix__cls-4" d="M14.54 12.57c-.71-.76-1.43-1.51-2.17-2.25a1.72 1.72 0 00-1.78-.46 1.54 1.54 0 00-1 1.3 2 2 0 00.64 1.6l2.08 2.15.53.55a3.93 3.93 0 001.08 4 .58.58 0 00.82.05.57.57 0 000-.81c-1-1.15-1.22-2.06-.75-3.14a.55.55 0 00-.11-.63l-.79-.82c-.7-.71-1.39-1.42-2.07-2.14-.27-.28-.36-.46-.33-.66A.36.36 0 0111 11a.6.6 0 01.6.18c.72.73 1.45 1.49 2.14 2.23l.92 1a.58.58 0 00.82 0 .57.57 0 000-.82l-.91-1m-3.94-3.78a.29.29 0 00.29-.28.27.27 0 00-.09-.21L9.35 6.83a1.17 1.17 0 00.52-.36 1.53 1.53 0 00.32-.62h1a.29.29 0 00.27-.31.28.28 0 00-.27-.27h-.86a2.49 2.49 0 000-.48h.87a.29.29 0 100-.58H8.37a.29.29 0 100 .58H9.7a2.56 2.56 0 010 .48H8.37a.29.29 0 000 .58h1.21a.72.72 0 01-.14.24.8.8 0 01-.7.24.3.3 0 00-.28.17.33.33 0 00.06.33l1.9 1.9a.32.32 0 00.21.08"></path></g></svg>
																	<h4 class="pincode-serviceabilityTitle">Pay on delivery available</h4>
																</li>
																<?php if($list->refund_status=='true'){?>
																	<li class="pincode-serviceabilityItem">
																		<span>
																			<svg viewBox="0 0 24 24" class="pincode-serviceabilityIcon"><g fill="#535766"><path d="M15.19 8.606V4.3a.625.625 0 00-.622-.625H6.384V.672a.624.624 0 00-.407-.588.62.62 0 00-.687.178L.367 6.048a.628.628 0 000 .812l4.923 5.778a.626.626 0 00.687.182.624.624 0 00.407-.588V9.228h8.184a.62.62 0 00.621-.622zm-1.244-.625H5.762a.625.625 0 00-.621.625v1.938l-3.484-4.09L5.14 2.362V4.3c0 .344.28.625.621.625h8.184v3.056z"></path><path d="M22.708 13.028L17.785 7.25a.616.616 0 00-.687-.178.624.624 0 00-.407.587v3.003H8.507a.625.625 0 00-.622.625v4.304c0 .343.28.625.622.625h8.184v3.003a.624.624 0 00.621.625.626.626 0 00.473-.219l4.923-5.781a.632.632 0 000-.816zm-4.774 4.497v-1.937a.625.625 0 00-.622-.625H9.13v-3.054h8.183a.625.625 0 00.622-.625V9.347l3.484 4.09-3.484 4.088z"></path></g></svg>
																			<h4 class="pincode-serviceabilityTitle"><?php if(!empty($list->refund_status=='true')){?>Easy <?php if(!empty($list->refund_limit)){ echo $list->refund_limit;}?> days return available <?php }else{ echo "No return & refund are available";}?></h4>
																		</span> 
																		<?php if(!empty($list->refund_status=='true')){ ?>
																			<span class="pincode-serviceabilityViewMore" onclick="openPrivacyNav()"> 
																				MORE INFO
																				<svg viewBox="0 0 24 24" fill="#ff3e6c" class="pincode-rightArrow"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0.05"></path><path fill="#ff3e6c" d="M12.55 15.768a.786.786 0 00.041-.048l6.183-6.36a.815.815 0 000-1.128.761.761 0 00-1.095 0l-5.68 5.844-5.678-5.844a.761.761 0 00-1.095 0 .816.816 0 000 1.127l6.182 6.361A.761.761 0 0012 16a.76.76 0 00.55-.232"></path></g></svg>
																			</span>
																		<?php } ?>
																	</li>
																<?php } ?>
															</ul>															
														</div>
														<hr class="m-0 mt-2">
													</div>
												</div>
											</div>
											<?php if($this->sitepermission->royal_subscription){?>
												<div class="row">
													<div class="col-12  col-lg-10">  
														<div class="form-group w-100 mb-0">
															<span class="subheading mb-2">Slick Pattern Royal Benefites</span>  
														</span></p>
														<div class="row m-0 py-1 delivery-icon"> 
															<div class="pincode-serviceability-list benefits-info-slider w-100 d-flex" >
																<?php 
																	$royalbenefits=$this->db->order_by('id','ASC')->limit(5,3)->get_where('subscription_benefits',)->result(); 
																	if(!empty($royalbenefits)){
																		foreach($royalbenefits as $benefits){
																		?>
																		<a href="<?= base_url('Home/RoyalBenefits')?>" class="pincode-serviceabilityItem mx-1">    
																			<img src="<?= base_url('uploads/plan/'.$benefits->icon)?>" alt="<?= $benefits->title?>" style="width:100px !important;" />
																			<span><?= $benefits->title?></span>
																		</a>
																	<?php } } ?>
															</div>															
														</div>
														<hr class="m-0 mt-2"> 
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</form>
						<span class="hide_desktop_flex" style="display:flex; overflow:hidden;">    
							<!-- beauty tips and dressing sense start--> 
							<?php  
								$beautytips=$this->db->get_where('tbl_beautytips',array('product_id'=>$list->id))->row();
								if(!empty($beautytips)){
								?>
								<div class="col-md-4 col-sm-4 col-6 mt-0 pl-0">
									<h2 class="text-uppercase beautytxt">Beauty Tips</h2>
									<a href="javascript:void(0)" onclick="OpenTipsModal('<?= $beautytips->id?>')"> <img src="<?= base_url('uploads/product/').$beautytips->image?>" class=" beauty-tips" ></a>   
								</div>
							<?php } ?>
							<?php 
								$productVideo=$this->db->get_where('product_video',array('product_id'=>$list->id))->result();
								if(!empty($list->youtube_link1) OR !empty($list->youtube_link2) OR !empty($list->youtube_link3) OR !empty($productVideo)){?>
								<div class="col-6 col-md-6 col-sm-6 tabs-product mt-0 px-3">
									<h2 class="text-uppercase dressingtxt">Dressing Tips </h2>
									<div class="dressing-slider owl-carousel row " >     
										<?php if(!empty($list->youtube_link1)){
											$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link1); 
											$watchUrl =$getYoutubeLinkData->watchUrl;  
											$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
										?>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb"> 
												<a class="btn-iframe" href="<?= $watchUrl;?>">   
													<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
												</a>
											</div>
										</div>
										<?php } ?>
										<?php if(!empty($list->youtube_link2)){
											$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link2);
											$watchUrl =$getYoutubeLinkData->watchUrl;  
											$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
										?>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb"> 
												<a class="btn-iframe" href="<?= $watchUrl;?>">   
													<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
												</a>
											</div>
										</div>
										<?php } ?>
										<?php if(!empty($list->youtube_link3)){
											$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link3);
											$watchUrl =$getYoutubeLinkData->watchUrl;  
											$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
										?>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb"> 
												<a class="btn-iframe" href="<?= $watchUrl;?>">   
													<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
												</a>
											</div>
										</div>
										<?php } ?>
										<?php if(!empty($list->youtube_link4)){
											$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link4);
											$watchUrl =$getYoutubeLinkData->watchUrl;  
											$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl;
										?>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb"> 
												<a class="btn-iframe" href="<?= $watchUrl;?>">   
													<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
												</a>
											</div>
										</div>
										<?php } ?>
										<?php if(!empty($list->youtube_link5)){
											$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($list->youtube_link5);
											$watchUrl =$getYoutubeLinkData->watchUrl;  
											$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl; 
										?>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb"> 
												<a class="btn-iframe" href="<?= $watchUrl;?>">   
													<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
												</a>
											</div>
										</div>
										<?php } ?>
										<?php 
											
											if(!empty($productVideo)){
												foreach($productVideo as $video){ 
													if($video->type=='Youtube'){ 
														$getYoutubeLinkData=$this->Auth_model->getYoutubeLinkData($video->video);
														$watchUrl =$getYoutubeLinkData->watchUrl;  
														$thumbnailUrl =$getYoutubeLinkData->thumbnailUrl; 
													?>
													<div class="col-12 col-md-12 pro-blog p-0">
														<div class="pro-thumb">
															<a class="btn-iframe" href="<?= $watchUrl;?>">   
																<img class="img-fluid" src="<?= $thumbnailUrl;?>" alt="Image" >   
															</a>
														</div>
													</div>
													<?php }
													else{ ?>
													<div class="col-12 col-md-12 pro-blog p-0">
														<div class="pro-thumb">
															<a class="btn-iframe" href="<?= base_url('uploads/video/').$video->video?>">       
																<video>     
																	<source src="<?= base_url('uploads/video/').$video->video?>" type="video/mp4">
																</video> 
															</a>   
														</div>
													</div> 
													<?php 
													} 
												} 
											} ?>       
									</div>
								</div>
							<?php } ?> 
							<!-- beauty tips and dressing sense end-->
						</span>
					</div>
					<div class="col-sm-12 p-0">
						<!-- product ,vendor & other details for phone-->  
						<div class="card hide_desktop" style="border:none;">  
							<div class="card-body p-0">
								<div class="row mx-0 mt-2 "> 
									<div class="col-sm-6">
										<span class="subheading px-1" style="font-family: 'Inter', sans-serif;">PRODUCT INFORMATION</span> 
										<div id="main">
											<div class="container-fluid-fluid p-0">
												<div class="accordion" id="faq">
													<?php if(!empty($list->product_details)){ ?> 
														<div class="card card-hover" style="border: 0px; border-bottom:1px solid #e1e1e1;">
															
															<div class="card-header collapesces" id="faqhead1">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1"><span class="subheading "><i class="bi bi-box biicon"></i>&nbsp;Features</span></a>
															</div>
															<div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
																<div class="card-body px-1">
																	<?php if(!empty($list->product_details)){ 
																		$Details=explode(",",$list->product_details);
																	} 
																	?>
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Product Details</h3>
																		
																		<strong>Product Id</strong><br>
																		<span><?= $list->product_code ?></span><br><br>
																		
																		<?php if($list->modalinfo_status=='true'){?>
																			<strong>Size & Fit</strong><br>
																			<span class="modal-details"><?php if(!empty($list->modalinfo)){ echo base64_decode($list->modalinfo);}?></span>
																		<?php } ?> 
																		
																		<strong>Specification</strong><br>
																		<div class="row">
																			<div class="col-sm-3">
																				<?php 
																					if(!empty($Details)){
																						foreach($Details as $details){ 
																							$attribute=explode(":",$details);
																						?>
																						<small style="color:gray;"><?= $attribute[0] ;?></small><br><span><?=$attribute[1]?></span> 
																						<hr class="my-1">
																					<?php } } ?> 
																			</div>
																		</div>
																	</div> 
																</div>
															</div>
														</div>
													<?php } ?>
													<?php if($list->laundry_tips=='true'){ ?> 
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;;">
															<div class="card-header collapesces" id="faqhead2">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2"><span class="subheading "><i class="bi bi-info-circle biicon"></i>&nbsp;Care</span></a>
															</div>
															
															<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																<div class="card-body px-1">
																	<?php if(!empty($list->laundry_tips)){ 
																		if($list->laundry_tips=='true'){
																			$laundryTips=$this->db->get_where('manage_content',array('name'=>'laundry_tips'))->row();
																			if(!empty($laundryTips)){
																				echo $decodeData=base64_decode($laundryTips->value);
																			}
																		}
																	}?> 
																</div>
															</div>
														</div>
													<?php } ?>
													
													<?php if(!empty($list->expert_advice)){ ?> 
														<!-- expert advice start-->
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;;">
															<div class="card-header collapesces" id="faqhead3">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3"><span class="subheading "><i class="bi bi-info-circle biicon"></i>&nbsp;Expert</span></a>
															</div>
															<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																<div class="card-body px-1">
																	<?php if(!empty($list->expert_advice)){ 
																		$ExpertDetails=explode(",",$list->expert_advice);
																	?>
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Expert Advice</h3>
																		<strong>Specification</strong><br>
																		<div class="row">
																			<div class="col-sm-3">
																				<?php 
																					if(!empty($ExpertDetails)){
																						foreach($ExpertDetails as $details){ 
																							$attribute=explode(":",$details);
																						?>
																						<small style="color:gray;"><?= $attribute[0] ;?></small><br><span><?=$attribute[1]?></span> 
																						<hr class="my-1">
																					<?php } } ?> 
																			</div> 
																		</div>
																	</div>
																	<?php } ?>
																</div>
															</div>  
														</div>
														<!-- expert advice end-->
													<?php } ?>
													<?php 
														$vendorData=$this->db->get_where('tbl_vendor',array('id'=>$list->vendor_id))->row();
														if(!empty($vendorData)){ 
														?>
														<div class="card card-hover" style="border: 0px; border-bottom: 1px solid #e1e1e1;;">
															<div class="card-header collapesces" id="vendorhead">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#vendor" aria-expanded="true" aria-controls="faq3"><span class="subheading "><i class="bi bi-person biicon"></i>&nbsp;About the Brand</span></a>
															</div>
														</div>
														<div id="vendor" class="collapse" aria-labelledby="vendorhead" data-parent="#faq"> 
															<div class="card-body px-1">
																
																<div class="product-desc-content">
																	<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Vendor Details</h3>
																	<div class="row">
																		
																		<div class="col-sm-3">
																			<?php if(!empty($vendorData->icon)){?> 
																				
																				<span><img src="<?= base_url('uploads/profile_pic/').$vendorData->icon ?>" width="100" height="100"></span>
																				<hr class="my-1">
																			<?php } ?> 
																			<small style="color:gray;">Sold By</small><br><span><?= $vendorData->shop_name?></span>
																			<hr class="my-1">
																			<small style="color:gray;">Country Of Origin</small><br><span>India</span>
																			<hr class="my-1">
																			<small style="color:gray;">Name Of Vendor</small><br><span><?= $vendorData->name?></span>
																			<hr class="my-1">
																			<?php  if(!empty($vendorData->pickup_address)){ ?>
																				<small style="color:gray;">Address Of Vendor</small><br><span><?php  if(!empty($vendorData->pickup_address)){echo $vendorData->pickup_address."&nbsp;,";}if(!empty($vendorData->pickup_city)){echo $vendorData->pickup_city."&nbsp;,";}if(!empty($vendorData->pickup_state)){echo $vendorData->pickup_state."&nbsp;,";}if(!empty($vendorData->pickup_pincode)){echo $vendorData->pickup_pincode."&nbsp;,";}?></span> 
																				<hr class="my-1">
																			<?php } ?>   
																			<?php if(!empty($list->manufacturer_name)){ ?>
																				<small style="color:gray;">Name Of Manufacturer/Packer/Importer</small><br><span><?php  if(!empty($list->manufacturer_logo)){ ?><img src="<?= base_url('uploads/product/').$list->manufacturer_logo ?>" width="120" height="100" /><?php }?></span>&nbsp;<span><?php echo $list->manufacturer_name; ?></span> 
																				<hr class="my-1"> 
																			<?php } ?> 
																			
																			<?php if(!empty($list->manufacturer_address)){?> 
																				<small style="color:gray;">Address Of Manufacturer/Packer/Importer</small><br><span><?php echo $list->manufacturer_address; ?></span>   	
																				<hr class="my-1">
																			<?php } ?> 
																		</div>
																	</div> 
																</div><!-- End .product-desc-content -->
															</div>
														</div>
													</div>
													<?php
													} 
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- product ,vendor & other details for desktop-->  
					<div class="product-details-tab pb-3 hide_in_mobile px-3">
						<ul class="nav nav-pills" role="tablist">
							<?php 
								$vendorData=$this->db->get_where('tbl_vendor',array('id'=>$list->vendor_id))->row();
								if(!empty($list->product_details) AND !empty($list->laundry_tips) AND !empty($list->expert_advice) AND !empty($list->beauty_tips) AND !empty($vendorData))
								{ 
									$status='active';
									}else{
									$status='';
								} 
							?> 
							<?php if(!empty($list->product_details)){ ?> 
								<li class="nav-item px-0"> 
									<a class="nav-link  active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Features</a>
								</li>
							<?php } ?>
							
							<?php if($list->laundry_tips=='true'){ ?>  
								<li class="nav-item px-0">
									<a class="nav-link " id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Care</a>
								</li>
							<?php } ?>
							
							<?php if(!empty($list->expert_advice)){ ?> 
								<li class="nav-item px-0">
									<a class="nav-link " id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Expert</a>
								</li>
							<?php } ?>
							<?php 
								if(!empty($vendorData)){
								?>
								<li class="nav-item px-0">
									<a class="nav-link " id="vendor-link" data-toggle="tab" href="#vendor-tab" role="tab" aria-controls="vendor-tab" aria-selected="false">About The Brand</a>
								</li>
							<?php } ?> 
						</ul>
						<div class="tab-content" >
							
							<div class="tab-pane fade show active " id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
								<?php if(!empty($list->product_details)){ 
									$Details=explode(",",$list->product_details);
								} 
								?>
								<div class="product-desc-content">
									<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Product Details</h3>
									
									<strong>Product Id</strong><br>
									<span><?= $list->product_code ?></span><br><br>
									
									<?php if($list->modalinfo_status=='true'){?>
										<strong>Size & Fit</strong><br>
										<span class="modal-details"><?php if(!empty($list->modalinfo)){ echo base64_decode($list->modalinfo);}?></span>
									<?php } ?>
									<strong>Specification</strong><br>
									<div class="row">
										<div class="col-sm-3">
											<?php 
												if(!empty($Details)){
													foreach($Details as $details){ 
														$attribute=explode(":",$details);
													?>
													<small style="color:gray;"><?= $attribute[0] ;?></small><br><span><?=$attribute[1]?></span> 
													<hr class="my-1">
												<?php } } ?> 
										</div>
									</div>
								</div>
							</div><!-- .End .tab-pane -->
							<?php 
								$vendorData=$this->db->get_where('tbl_vendor',array('id'=>$list->vendor_id))->row();
								if(!empty($vendorData)){
								?>
								<div class="tab-pane fade show " id="vendor-tab" role="tabpanel" aria-labelledby="vendor-link">
									<div class="product-desc-content">
										<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Vendor Details</h3>
										<div class="row">
											
											<div class="col-sm-3">
												<?php if(!empty($vendorData->icon)){?> 
													
													<span><img src="<?= base_url('uploads/profile_pic/').$vendorData->icon ?>" width="100" height="100"></span>
													<hr class="my-1">
												<?php } ?> 
												<small style="color:gray;">Sold By</small><br><span><?= $vendorData->shop_name?></span>
												<hr class="my-1">
												<small style="color:gray;">Country Of Origin</small><br><span>India</span>
												<hr class="my-1">
												<small style="color:gray;">Name Of Vendor</small><br><span><?= $vendorData->name?></span>
												<hr class="my-1">
												<?php  if(!empty($vendorData->pickup_address)){ ?>
													<small style="color:gray;">Address Of Vendor</small><br><span><?php  if(!empty($vendorData->pickup_address)){echo $vendorData->pickup_address."&nbsp;,";}if(!empty($vendorData->pickup_city)){echo $vendorData->pickup_city."&nbsp;,";}if(!empty($vendorData->pickup_state)){echo $vendorData->pickup_state."&nbsp;,";}if(!empty($vendorData->pickup_pincode)){echo $vendorData->pickup_pincode."&nbsp;,";}?></span> 
													<hr class="my-1">
												<?php } ?>   
												<?php if(!empty($list->manufacturer_name)){ ?>
													<small style="color:gray;">Name Of Manufacturer/Packer/Importer</small><br><span><?php  if(!empty($list->manufacturer_logo)){ ?><img src="<?= base_url('uploads/product/').$list->manufacturer_logo ?>" width="120" height="100" /><?php }?></span>&nbsp;<span><?php echo $list->manufacturer_name; ?></span> 
													<hr class="my-1"> 
												<?php } ?> 
												
												<?php if(!empty($list->manufacturer_address)){?> 
													<small style="color:gray;">Address Of Manufacturer/Packer/Importer</small><br><span><?php echo $list->manufacturer_address; ?></span>   	
													<hr class="my-1">
												<?php } ?> 
											</div>
										</div>
									</div><!-- End .product-desc-content -->
								</div><!-- .End .tab-pane -->
							<?php } ?>
							
							<div class="tab-pane fade show " id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
								<?php if(!empty($list->laundry_tips)){ 
									if($list->laundry_tips=='true'){
										$laundryTips=$this->db->get_where('manage_content',array('name'=>'laundry_tips'))->row();
										if(!empty($laundryTips)){
											echo $decodeData=base64_decode($laundryTips->value);    
										} 
									}   
								}?> 
							</div><!-- .End .tab-pane -->
							
							<div class="tab-pane fade show" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
								<?php if(!empty($list->expert_advice)){ 
									$ExpertDetails=explode(",",$list->expert_advice); 
								?>
								<div class="product-desc-content">
									<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Expert Advice</h3>
									<strong>Specification</strong><br>
									<div class="row">
										<div class="col-sm-3">
											<?php 
												if(!empty($ExpertDetails)){
													foreach($ExpertDetails as $details){ 
														$attribute=explode(":",$details);
													?>
													<small style="color:gray;"><?= $attribute[0] ;?></small><br><span><?=$attribute[1]?></span> 
													<hr class="my-1">
												<?php } } ?> 
										</div> 
									</div>
								</div>
								<?php } ?>
							</div><!-- .End .tab-pane -->
						</div> 
					</div>
				</div>
				<!-- Product revies section start-->
				<div class="col-sm-12 p-1">
					<div class="related-product-content mt-0" id="reviewSection"> 
						<div class="row m-0 justify-content-center">
							<div class="col-12 col-lg-6">
								<div class="pro-heading-title text-left">
									<h2 class="text-uppercase">TELL US WHAT'S UP!</h2>
									<?php if(!empty($reward->product_feedback)){ ?><center>All customers that submit a product review are automatically entered into a chance to win  <?= $reward->product_feedback; ?> coins!</center><?php } ?> 
								</div>
							</div>
						</div>
						<?php 
							
							$reviews=$this->db->order_by('id','DESC')->limit(5)->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'published'))->result();
							if(!empty($reviews)){ ?>
							<div class="row m-0 my-4">
								<div class="col-sm-12">
									<div class="row px-2">
										<div class="col-sm-3">
											<div class="review-text"> 
												<span>
													<?php
														$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$list->id,'is_combo'=>'false','is_status'=>'published'))->row(); 
														$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														$totalRating=$ratingCount->rating/$countReview; 
														$totalRating=round($totalRating,1);
													?>
													<h3 class="subheading mb-0" style="font-size:22px;">
														<?php if(!empty($totalRating)){echo $totalRating.'/5';}?>
													</h3>
													<span class="hide_desktop">
														<?php 
															if(!empty($countReview)){
																echo $countReview."&nbsp;Reviews";
															}	
														?>
													</span>
												</span>
												<!--<div class="product-add-review-button-container-fluid hide_desktop">
													<button class="fn-button-variant-full" <?php if($this->permission == 'true'){ ?>onclick="WriteReview(<?=$list->id;?>,'Ind')" data-toggle="modal" data-target="#ReviewModal" <?php }else{ ?>onclick="$('.notifyjs-wrapper').remove(); $.notify('Please login to give review', 'error');"<?php } ?> type="button">Write a review</button>
												</div>--> 
											</div>
											<div class="review-star">
												<h3 class="subheading" style="color:#8340A1; font-size:22px;"> 
													<div class="ratings" style="font-size:1.4rem;">   
														<div class="ratings-val" style="width:<?php if(!empty($totalRating)){echo ($totalRating)*20;}?>%; font-size:1.4rem;" ></div><!-- End .ratings-val -->
													</div><!-- End .ratings -->
												</h3>
											</div>
											<div class="review-number hide_in_mobile">
												<span>
													<?php
														$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														if(!empty($countReview)){
															echo $countReview."&nbsp;Reviews";
														}
													?>
												</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="row d-flex justify-content-center">
												<div class="col-sm-10 text-center">
													<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Ind','5')">
														<?php 
															$star5= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'5', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														?>
														<div class="col-sm-2 pr-0 col-2"><span>5&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;"></i></span></div>
														<div class="col-sm-8 col-8 ">
															<div class="progress" style="margin-top: 5px;">
																<div class="progress-bar" role="progressbar" style="width:<?php if(!empty($star5)){echo $star5*10;}?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-sm-2 col-2 ">
															<?php if(!empty($star5)){echo $star5;}else{echo 0;}?>
														</div>
													</div>
													<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Ind','4')">
														<?php 
															$star4= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'4', 'is_combo'=>'false','is_status'=>'published'))->num_rows(); 
														?>
														<div class="col-sm-2 pr-0 col-2"><span>4&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;"></i></span></div>
														<div class="col-sm-8 col-8 ">
															<div class="progress" style="margin-top: 5px;">
																<div class="progress-bar" role="progressbar" style="width:<?php if(!empty($star4)){echo $star4*10;}?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-sm-2 col-2 ">
															<?php if(!empty($star4)){echo $star4;}else{echo 0;}?>  
														</div>
													</div>
													<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Ind','3')">
														<?php 
															$star3= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'3', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														?>
														<div class="col-sm-2 pr-0 col-2"><span>3&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;"></i></span></div>
														<div class="col-sm-8 col-8 ">
															<div class="progress" style="margin-top: 5px;">
																<div class="progress-bar" role="progressbar" style="width:<?php if(!empty($star3)){echo $star3*10;}?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-sm-2 col-2 ">
															<?php if(!empty($star3)){echo $star3;}else{echo 0;}?> 
														</div>
													</div>
													<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Ind','2')">
														<?php 
															$star2= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'2', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														?>
														<div class="col-sm-2 pr-0 col-2"><span>2&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;"></i></span></div>
														<div class="col-sm-8 col-8 ">
															<div class="progress" style="margin-top: 5px;">
																<div class="progress-bar" role="progressbar" style="width:<?php if(!empty($star2)){echo $star2*10;}?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-sm-2 col-2 ">
															<?php if(!empty($star2)){echo $star2;}else{echo 0;}?>  
														</div>
													</div>
													<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Ind','1')">
														<?php 
															$star1= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'1', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
														?>
														<div class="col-sm-2 pr-0 col-2"><span>1&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;"></i></span></div>
														<div class="col-sm-8 col-8 ">
															<div class="progress" style="margin-top: 5px;">
																<div class="progress-bar" role="progressbar" style="width:<?php if(!empty($star1)){echo $star1*10;}?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="col-sm-2 col-2 ">
															<?php if(!empty($star1)){echo $star1;}else{echo 0;}?>   
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<div class="hide_in_mobile">
												<strong>How do i feet it?</strong>
												<?php 
													$runSmall= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'run-small', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
													$trueSize= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'true-to-size', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
													$runLarge= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'runs-large', 'is_combo'=>'false','is_status'=>'published'))->num_rows();
													if($runSmall >= $trueSize AND $runSmall >= $runLarge){ 
														$btnPosition=0;
														}else if($trueSize >= $runSmall AND $trueSize >= $runLarge){
														$btnPosition=50;
														}else{
														$btnPosition=100; 
													}
												?>
												<div class="product-review-fit-bar-container">
													<div class="product-review-fit-horizontal-bar">
														<div class="product-review-fit-vertical-bar"></div>
														<div class="product-review-fit-vertical-bar"></div>
														<div class="product-review-fit-vertical-bar"></div>
														<div class="product-review-fit-cursor-container" style="left: calc(<?php if(!empty($btnPosition)){echo $btnPosition;}else{echo 0;}?>% - 11px)">
															<div class="product-review-fit-cursor"></div>
														</div>
													</div>
												</div>
												
												<div class="product-review-fit-description-container">
													<span class="product-review-fit-description">Runs Small</span>
													<span class="product-review-fit-description">True to size</span>
													<span class="product-review-fit-description">Runs Large</span>
												</div>
												<!--<div class="product-add-review-button-container">
													<button class="fn-button-variant-full" <?php if($this->permission == 'true'){ ?>onclick="WriteReview(<?=$list->id;?>,'Ind')" data-toggle="modal" data-target="#ReviewModal" <?php }else{ ?>onclick="$('.notifyjs-wrapper').remove(); $.notify('Please login to give review', 'error');"<?php } ?> type="button">Write a review</button>
												</div> -->
											</div>
											<!--show in phone-->
											<div class="product-review-mobile-container hide_desktop">
												<div class="product-review-fit-bar-mobile-wrapper">
													<div class="product-review-fit-bar-container">
														<div class="product-review-fit-horizontal-bar">
															<div class="product-review-fit-vertical-bar"></div>
															<div class="product-review-fit-vertical-bar"></div>
															<div class="product-review-fit-vertical-bar"></div>
															<div class="product-review-fit-cursor-container" style="left: calc(<?php if(!empty($btnPosition)){echo $btnPosition;}else{echo 0;}?>% - 11px)">
																<div class="product-review-fit-cursor"></div>
															</div>
														</div>
													</div>
													<div class="product-review-fit-description-container">
														<span class="product-review-fit-description">Runs Small</span>
														<span class="product-review-fit-description">True to size</span>
														<span class="product-review-fit-description">Runs Large</span>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							<div class="row m-0">
								<div class="col-sm-12 " style="padding:10px;">
									<div class="row bg-light py-2  m-0"> 
										<div class="col-sm-3 col-0">
											<!--<p class="mt-2">1-8 of 11 Reviews</p>-->
										</div>
										<div class="col-sm-8 col-12" style="text-align:end !important;">
											<span>Sort By: </span>
											<div class="dropdown bg-white">
												<select class="p-2" style="outline: none; border: 1px solid gainsboro;" onchange="RatingsFilter('<?= $list->id?>','Ind','',this.value)">     
													<option value="relevant">Most Relevant</option>
													<option value="helpful">Most Helpful</option>
													<option value="ratingInv">Highest to Lowest Rating </option>
													<option value="rating">Lowest to Highest Rating</option>
													<option value="recent">Most Recent</option>  
												</select> 
											</div>
											<!--<button class="btn p-1" onclick="ToggleRating()" style="background:#DEE1E6; border-radius: 20px"><i class="bi bi-filter-left fa-2x"></i></button>-->
										</div>
										<div class="col-sm-1 "></div>
										
									</div>
								</div>
								
								<div class="col-sm-12 py-3 ajax-review"> 
									<?php
										foreach($reviews as $review){
										?>
										<div class="row mt-2 pb-3 border-bottom">
											<div class="col-sm-3">
												<div class="ratings-container">
													<div class="ratings">
														<div class="ratings-val" style="width:<?= ($review->rating)*20;?>%;"></div><!-- End .ratings-val -->
													</div><!-- End .ratings -->
												</div><!-- End .rating-container -->
												
												<span style="font-weight:600"><?= $review->name;?></span><br>
												<?php 
													$last_date = date_create(date('Y-m-d H:i:s')); 
													$today = date_create($review->created_at);  
													$date_difference = date_diff($last_date,$today);  
													$days=$date_difference->format('%a');
													
													if($days<=10 AND $days>0){
														$reviewDays=$days.'&nbsp; Days Ago'; 
														}else{
														$reviewDays= $review->created_at;     
													}   
												?>
												<small><?= $reviewDays;?></small>
											</div>
											<div class="col-sm-4 review-desc">  
												<span style="font-weight:600; text-transform:uppercase;"><?= $review->review_title;?></span><br>
												<!--<div class="py-2"><small>Size purchased:1x</small>&emsp;<small>Usual Size:1x</small>&emsp;<small>Color:chocklate</small></div>-->
												<p style="font-weight:500;font-size: 12px;" class="text-justify"><?=  $review->review_message;?></p>
											</div>
											<div class="col-sm-3">
												<div class="owl-carousel user-review-img overflow-hidden">  
													<?php 
														$img=explode(",",$review->review_img); 
														if(!empty($img)){
															foreach($img as $icon){
																if(!empty($icon)){
																?>
																<img src="<?= base_url('uploads/review/'.$icon) ?>"  />
																<?php 
																} 
															}
														}
													?>
												</div> 
											</div>
											
											<div class="col-sm-2 ">
												<button class="product-review-helpful-button" style="margin:10px 0;" onclick="UpdateHelpfulReview(<?= $review->id;?>,this)">   
													<svg fill="none" style="margin-right:5px;margin-top:5px;" width="12" height="12" viewBox="0 0 12 12">
														<path d="M2.625 10.8755C2.88859 10.8794 3.15051 10.9181 3.404 10.9905L5.221 11.5095C5.48881 11.586 5.76597 11.6249 6.0445 11.625H8.487C9.23072 11.625 9.94793 11.3488 10.4995 10.8499C11.051 10.351 11.3976 9.66499 11.472 8.925L11.622 6.375C11.6485 5.85448 11.4935 5.3409 11.1835 4.92197C10.8734 4.50303 10.4275 4.20473 9.922 4.078L9.1945 3.919C9.03191 3.87868 8.88749 3.7851 8.78428 3.65316C8.68106 3.52121 8.62499 3.35852 8.625 3.191V1.5C8.625 1.20163 8.50647 0.915483 8.2955 0.704505C8.08452 0.493526 7.79837 0.375 7.5 0.375C7.20163 0.375 6.91548 0.493526 6.7045 0.704505C6.49353 0.915483 6.375 1.20163 6.375 1.5V2.277C6.375 3.27156 5.97991 4.22539 5.27665 4.92865C4.57339 5.63191 3.61956 6.027 2.625 6.027V10.8755Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M0.375 4.875H2.625V11.625H0.375V4.875Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
													<span class="product-review-helpful-button-text">Helpful (<span class="product-review-helpful-count"><?php if(!empty($review->help_count)){echo $review->help_count;}else{echo 0;}?></span>)</span>
												</button>
											</div>
										</div>
										<?php 
										}
									?>
								</div>
								<div class="col-sm-12 " >
									<div class="row justify-content-center ">
										<div class="col-sm-6 bg-light col-10 text-center loadMoreBtn" onclick="loadMore('<?=$list->id?>','Ind')" style="padding:15px 10px; border-radius:50px;">
											<a href="javascript:void(0)" class="font-weight-bold Loadbtn">Show More&nbsp;<i class="fa fa-spin fa-spinner" style="display:none;"  id="addSpin" ></i></a>  
										</div>  
									</div>
								</div>
							</div> 
							<?php }else{?>
							<div class="row m-0">
								<div class="col-sm-12 bg-light " style="padding:10px;">
									<div class="row m-0 py-3">
										<div class="col-sm-12 col-12">
											<div>
												<p class="product-review-empty-bold-text">No reviews yet.</p>
												<p class="product-review-empty-text">Be the first to write a review.</p>
											</div>   
										</div>
										<!--<div class="col-sm-9 col-5" style="text-align:end !important;">
											<div class="product-add-review-button-container"> 
											<button class="product-review-empty-button" <?php if($this->permission == 'true'){ ?>onclick="WriteReview(<?=$list->id;?>,'Ind')" data-toggle="modal" data-target="#ReviewModal" <?php }else{ ?>onclick="$('.notifyjs-wrapper').remove(); $.notify('Please login to give review', 'error');"<?php } ?> type="button" >Write a review</button> 
											</div> 
										</div>-->
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<!-- Product revies section end-->
				
				<?php 
					$Similiarproduct = $this->db->get_where('products',array('id !='=>$list->id,'category'=>$list->category,'sub_category'=>$list->sub_category))->result();
					if(!empty($Similiarproduct)){
					?>
					<div class="mt-5 col-sm-12">   
						<div class="row justify-content-center">
							<div class="col-12 col-lg-6">
								<div class="pro-heading-title">
									<h1> MATCH WITH IT  
									</h1>
									<!--<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text </span></center>-->
								</div>
							</div>
						</div>
						
						<div class="owl-carousel matchitem-carousel row overflow-hidden m-0">   
							<?php
								$sr = 1;
								foreach($Similiarproduct as $each) 
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
											$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date));  
											$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
											if($current_date>=$start_date AND $current_date<=$last_date){
												$date_difference = date_diff(date_create($current_date),date_create($last_date));  
												$days=$date_difference->format('%r%a');
												$hour=$date_difference->format('%r%h');
												$min=$date_difference->format('%r%i');
												$sec=$date_difference->format('%r%s');  
												$timer=$days."D".$hour."H".$min."M".$sec."S" ;
												$sale_status='true';
											}
										}
									}
									if(!empty($Variant)){ 
									?>
									<div class="col-12" >
										<div class="product product-7 text-center " >  
											<form action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
												<figure class="product-media">
													<?php 
														if($sale_status=='true')
														{	
														?> 
														<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
														<?php }
														else if((int)$each->reg_sell_price!=(int)$each->mrp)
														{ ?>
														<span class="product-label label-primary"><?=(int)$each->discount?>%OFF</span>
													<?php } ?>
													<a href="<?php echo  base_url('Home/ProductDetails/').$each->id.'/'.$Variant->id?>"> 
														<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" alt="<?= $each->title; ?>"  class="product-image  ">
														<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>" alt="<?= $each->title; ?>" class="product-image-hover">
													</a>
													
													<div class="product-action-vertical">  
														<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist('<?=$Variant->id;?>')"><span>add to wishlist</span></a>
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
																<input type="hidden" class="sr-only " name="size" value="NA" required data-parsley-required-message="Please select size">
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
														<?php if($sale_status=='true')
															{	$price=$each->mrp;
																$discount=(int)$saleProduct->discount;
																$saleprice=$price - ( ($price/100) * $discount );
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
													
													
													<div class="product-nav product-nav-dots product-nav-color">
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
								}
							?>
						</div>
					</div>
				<?php } ?>
				<!--more from collection -->
				<?php
					$MoreCollection = $this->db->get_where('products',array('id !='=>$list->id,'category'=>$list->category))->result();
					if(!empty($MoreCollection)){
					?>
					<div class="mt-5 col-sm-12">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-6">
								<div class="pro-heading-title text-left">
									<h2> MORE FROM THE COLLECTION
									</h2>
									<!--<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text </span></center>-->
								</div>
							</div>
						</div>  
						<div class="owl-carousel matchitem-carousel row overflow-hidden m-0">   
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
											$start_date = date('Y-m-d H:i:s',strtotime($tblSale->start_date));  
											$last_date = date('Y-m-d H:i:s',strtotime($tblSale->end_date));  
											if($current_date>=$start_date AND $current_date<=$last_date){
												$date_difference = date_diff(date_create($current_date),date_create($last_date));  
												$days=$date_difference->format('%r%a');
												$hour=$date_difference->format('%r%h');
												$min=$date_difference->format('%r%i');
												$sec=$date_difference->format('%r%s');  
												$timer=$days."D".$hour."H".$min."M".$sec."S" ;
												$sale_status='true';
											}
										}
									}
									if(!empty($Variant)){ 
									?>
									<div class="col-12" >
										<div class="product product-7 text-center " >  
											<form action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
												<figure class="product-media">
													<?php 
														if($sale_status=='true')
														{	
														?> 
														<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
														<?php }
														else if((int)$each->reg_sell_price!=(int)$each->mrp)
														{ ?>
														<span class="product-label label-primary"><?=(int)$each->discount?>%OFF</span>
													<?php } ?>
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
														<?php if($sale_status=='true')
															{	$price=$each->mrp;
																$discount=(int)$saleProduct->discount;
																$saleprice=$price - ( ($price/100) * $discount );
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
													
													
													<div class="product-nav product-nav-dots product-nav-color">
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
				<?php } ?> 
			</section>
			<section class="pro-content testimonails-content">
				<?php 
					$customerViewed=$this->db->order_by('id','desc')->get_where('sub_category',array('category_id'=>$list->category,'is_status'=>'true'),4,0)->result();    
					if(!empty($customerViewed)){ 
					?>
					<div class="container-fluid">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-12">
								<div class="pro-heading-title text-center">
									<h2 class="text-uppercase"> Customers Also Viewed
									</h2>
									<span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text </span>
								</div>
							</div>
							<div class="col-sm-12 col-lg-12">   
								<div class="css-176rt9o">
									<?php 
										foreach($customerViewed as $each){ 
											$category=$this->db->get_where('categories',array('id'=>$each->category_id))->row();
											$subcategory=$each->name;
											$cosubcategory=$this->db->get_where('co_subcategory',array('subcategory_id'=>$each->id))->row();
											if(!empty($cosubcategory) AND !empty($category) AND !empty($subcategory)){
												$viewProduct=$this->db->get_where('products',['co_subcategory'=>$cosubcategory->id])->result(); 
												if(!empty($viewProduct[0]->image1)){ 
													$icons0 = explode(',', $viewProduct[0]->image1); 
												}else{ $icons0=''; }
												if(!empty($viewProduct[1]->image1)){
													$icons1 = explode(',', $viewProduct[1]->image1);
												}else{ echo $icons1=''; }
												if(!empty($viewProduct[2]->image1)){
													
													$icons2 = explode(',', $viewProduct[2]->image1); 
												}else{ $icons2='';}
												$find=array('!', '*', "'", "(", ")", ";", ":", "@", "&", " & ", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]"," ");;
												$replace=array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '_','--', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D','-');
												$cat=str_replace($find,$replace,$category->name);
												$subcat=str_replace($find,$replace,$subcategory);
												$cosubcat=str_replace($find,$replace,$cosubcategory->name);
												
											?>
											<a href="<?= base_url('Product/'.$cat.'/'.$subcat.'/'.$cosubcat)?>" target="_blank" width="270" class="css-10xumnx">
												<div class="css-uf1ume">
													<div class="e1jjwn40 css-1c6l46a">
														<img class="imageContain <?php if(empty($icons0)){echo 'css-1q0mskh';} ?>" src="<?php if(!empty($icons0)){ echo base_url('uploads/product/'.$icons0[0]); } ?>" height="199.33333333333334" width="149.5" loading="lazy" />
													</div>
													<div class="css-15f4z57">
														<?php if(!empty($icons1)){ ?>
															<div class="e1jjwn40 css-1i6sp9j">
																<img class="imageContain <?php if(empty($icons1)){echo 'css-1q0mskh';} ?>" src="<?php if(!empty($icons1)){ echo base_url('uploads/product/'.$icons1[0]); } ?>" height="95.83333333333333" width="71.875" loading="lazy"
																/>
															</div>
														<?php } ?>
														<?php if(!empty($icons1)){ ?>
															<div class="e1jjwn40 css-1i6sp9j">
																<img class="imageContain <?php if(empty($icons2)){echo 'css-1q0mskh';} ?>" src="<?php if(!empty($icons2)){ echo base_url('uploads/product/'.$icons2[0]); } ?>" height="95.83333333333333" width="71.875"mloading="lazy" />
															</div>
														<?php } ?> 
													</div>
												</div> 
												<div class="css-i0f99m">
													<div class="css-v04ofk"><?= ucfirst($cosubcategory->name) ?></div>
													<div class="css-fe8534"><?php if(!empty($viewProduct)){foreach($viewProduct as $each){echo $each->name.',';}} ?></div>   
												</div>
											</a>
										<?php } } ?> 
								</div>
								
							</div>
						</div>
					</div>
				<?php } ?>
			</section>
			<?php include('include/footer.php'); ?>
			<?php include('include/jsLinks.php'); ?>     
			<!--similar product modal start -->
			<div class="modal fade" id="similarProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-xl  ">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"></h5>
							
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<small class="text-right">600 items</small>
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" style="height: 90vh;">
							<div class="row">
								<div class="col-sm-3">
									<p>Shopping Matches</p>
									<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/17_9f386bd4-f851-47d5-9290-9cc2a4252c17_320x.jpg?v=1642763086" class="img-fluid " style="height: 300px;">
									
									<div class="row mt-2">
										<div class="col-sm-12">
											<div id="main">
												<div class="container-fluid-fluid">
													<div class="accordion" id="faq">
														
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid;">
															<div class="card-header" id="faqhead2">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">Brand</a>
															</div>
															
															<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																<div class="card-body">
																	...
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px; border-bottom: 1px solid;">
															<div class="card-header" id="faqhead3">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">Price</a>
															</div>
															
															<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																<div class="card-body">
																	...
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-sm-9">
									<div class="row">
										<div class="col-sm-3">
											
											<select class="custom-select" id="inputState" style="border-top:0px; border-left:0px;border-right:0px;">
												
												<option>Most Similar</option>
												<option>Similar</option>
											</select>
										</div>
									</div>
									
									<div class="row mt-2" style="height: 500px;overflow-y:scroll">
										<div class="col-sm-3 mt2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh - All Off White - 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
											</div>
										</div>
										<div class="col-sm-3 mt-2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh - 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
												
											</div>
										</div>
										<div class="col-sm-3 mt-2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh - 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
												
											</div>
											
										</div>
										<div class="col-sm-3 mt-2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
												
											</div>
											
										</div>
										<div class="col-sm-3 mt-2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh - 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
												
											</div>
											
										</div>
										<div class="col-sm-3 mt-2">
											<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
											<div class="pro-desc">
												<a href="" class="font-weight-bold" style="font-size: 13px">Muraqsh - 3 Piece - 020</a>
												<br>
												<small>₹1000</small>
												
											</div>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--similar product modal end-->
			<!--DOt Modal  Modal -->
			<div class="modal fade" id="Dotimg" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Find Your Size</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 10px; right: 20px; padding: 0px 2px; z-index:999;">
								<div class="css-1uu6dpv p-0">
									<svg viewBox="0 0 24 24" class="css-1oql73n">         
										<title></title>
										<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
										<path
										d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
										fill="#001325" fill-opacity="0.92"></path>
									</svg>
								</div>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Find size Modal -->
			<div class="modal fade" id="findSize" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header" style="border: 0px;">
							
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<a href="<?= base_url('Home/PrivacyPolicy') ?>" style=" margin-left: 671px; position: absolute;">Privacy</a>
						</div>
						<div class="modal-body" id="findsize-modalbody">
							<div class="row">
								<div class="col-sm-3 col-12">
									<img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg">
								</div>
								<div class="col-sm-9 col-12">
									<div class="row">
										<div class="col-sm-9">
											<p class="text-uppercase font-weight-bold" style="font-size: 15px;">We help to find the right size</p>
											<span style="font-size: 13px;">We calculate the perfect fit based on your unique measurements</span>
										</div>
									</div>
									<br>
									<span style="font-size: 15px" class="text-uppercase font-weight-bold">Measurements</span>
									<div class="row ">
										<div class="col-sm-10 col-10">
											<div class="row">
												<div class="col-sm-6 col-6 "> <small>Your height and weight:</small></div>
												<div class="col-sm-6 col-6 text-right"> <small><span style="font-weight: 800">CM</span> | IN </small></div>
											</div>
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-3 col-sm-3"><small class="text-uppercase">height</small></div>
										<div class="col-6 col-sm-6">
											<form>
												<div class="form-group">
													<input type="range" min="1" max="100" value="50" class="rangbar" id="myRange">
												</div>
											</form>
										</div>
										<div class="col-3 col-sm-3"><small class="text-uppercase">6 FT 3IN</small></div>
									</div>
									<div class="row">
										<div class="col-3 col-sm-3"><small class="text-uppercase">Weight</small></div>
										<div class="col-6 col-sm-6">
											<form>
												<div class="form-group">
													<input type="range" min="1" max="100" value="50" class="rangbar" id="myRange">
												</div>
											</form>
										</div>
										<div class="col-3 col-sm-3"><small class="text-uppercase">296LBS</small></div>
									</div>
									<br>
									<span style=" font-size: 15px;" class="text-uppercase font-weight-bold my-1">Preference</span><br>
									<span style="font-size: 13px;">How do you want it to fit?</span> <br>
									<div class="row">
										<div class="col-sm-10">
											<form>
												<div class="form-group">
													<input type="range" min="1" max="100" value="50" class="rangbar" id="myRange">
													<div class="row mt-1">
														<div class="col-sm-4 col-4"><span>Tighter</span></div>
														<div class="col-sm-4 col-4">
															<center><span>Perfect</span></center>
														</div>
														<div class="col-sm-4 col-4"><span class="float-right">Looser</span></div>
													</div>
													
												</div>
											</form>
										</div>
									</div>
									<div class="form-group">
										<p class="text-right"><button class="btn btn-secondary" onclick="FindSize()" id="findsizes">Find my size</button></p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="mySidenav" class="sidenav" style="z-index: 9999; margin:0;padding:0;"> 
				<div class="container-fluid">
					<div class="row p-2 bg-white;">
						<div class="col-sm-12">
							<div>
								<span class="closebtn corsor-pointer" style="cursor:pointer; position:absolute !important;" onclick="closeNav()">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: -5px; right: 20px; padding: 0px 2px; z-index:999;">
										<div class="css-1uu6dpv p-0">
											<svg viewBox="0 0 24 24" class="css-1oql73n">         
												<title></title>
												<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
												<path
												d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
												fill="#001325" fill-opacity="0.92"></path>
											</svg>
										</div>
									</button>
								</span>
								<span class="text-uppercase" style="font-size:12px;">Size Chart</span>
							</div> 
							<?php
								if(!empty($variants->variant_img)){
									$icons = explode(',', $variants->variant_img);
									}else{
									$icons = explode(',', $list->image1); 
								}
							?>
							<div class="sizeChartWeb-content background:white;">
								<div class="sizeChartWeb-header">
									<img draggable="false" class="sizeChartWeb-sizechart-image" src="<?= base_url('uploads/product/'.$icons[0])?>"/> 
									<div class="sizeChartWeb-productInfo">
										<div class="sizeChartWeb-title"><?= $list->name ?></div>
										<div class="sizeChartWeb-subtitle"><?= $list->title ?></div>
										<div class="product-price-info">
											<?php 
												if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
												{	$price=$list->mrp;
													$discount=(int)$saleProduct->discount;
													$saleprice=$price - ( ($price/100) * $discount );
												?> 
												<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $saleprice ?></span> <span class="text-success paragraph" style="font-weight:600;">&nbsp;<?= (int)$discount ?>%&nbsp;Off</span> <br>
												<?php }
												else if((int)$list->reg_sell_price!=(int)$list->mrp)
												{ ?>
												<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $list->reg_sell_price ?></span> <span class="text-success paragraph" style="font-weight:600;">&nbsp;<?= (int)$list->discount ?>%&nbsp;Off</span> <br>
											<?php } ?>
											<span class="paragraph" style="font-size: 13px;color: #686868;">MRP <del>₹<?= $list->mrp ?></del> <span class="text-success">&nbsp;Inclusive of all taxes</span></span>
										</div>
									</div>
								</div>
								<div>
									<div class="sizeChartWeb-tabContainer product-details-tab mb-0">
										<ul class="nav nav-pills" role="tablist">
											<li class="nav-item px-0 w-50"> 
												<a class="nav-link  active" id="sizechart-link" data-toggle="tab" href="#sizechart-tab" role="tab" aria-controls="sizechart-tab" aria-selected="true">Size Chart</a>
											</li>
											<?php 
												$tblSize=$this->db->get_where('tbl_size',array('id'=>$list->sizechart_type))->row();
												if(!empty($tblSize->image) OR !empty($list->sizechart_image)){ 
												?>
												<li class="nav-item px-0 mx-0 w-50">  
													<a class="nav-link" id="howtomeasure-link" data-toggle="tab" href="#howtomeasure-tab" role="tab" aria-controls="howtomeasure-tab" aria-selected="false">How to measure</a>
												</li> 
											<?php } ?> 
										</ul> 
										<div class="tab-content" >
											<div class="tab-pane fade show active p-2" id="sizechart-tab" role="tabpanel" aria-labelledby="sizechart-link">
												<div class="product-desc-content">
													<div style="transition: transform 0.3s ease-out 0s; transform: translateY(0px);">
														<!--<div>
															<div class="scaleAndUnits-inchCmToggle">
															<button id="Inches" class="scaleAndUnits-metric scaleAndUnits-left scaleAndUnits-selected">in</button><button id="cm" class="scaleAndUnits-metric scaleAndUnits-right">cm</button>
															</div>
														</div>-->
														<div class="sizeChartWeb-info">
															<div>
																<?php 
																	if(!empty($list->size_chart)){
																		echo  base64_decode($list->size_chart);
																		}else{
																		$tblSize=$this->db->get_where('tbl_size',array('id'=>$list->sizechart_type))->row();
																		if(!empty($tblSize)){
																			echo base64_decode($tblSize->size_chart); 
																		}
																	}
																?>
															</div>
														</div>
														<div class="sizeChartWeb-divider"></div>
													</div>
												</div><!-- End .product-desc-content --> 
											</div><!-- .End .tab-pane -->
											<div class="tab-pane fade show p-2 py-4" id="howtomeasure-tab" role="tabpanel" aria-labelledby="howtomeasure-link">
												<div class="product-desc-content">
													<div style="transition: transform 0.3s ease-out 0s; transform: translateY(0px);">
														<div class="scaleAndUnits-unitText text-center" style="font-size:12px;">* To-Fit Denotes Body Measurements in Inches</div>
														<div class="sizeChartWeb-image-size">
															<div class="sizeChartWeb-measure-title font-weight-bold my-4">How to measure yourself</div>
															<img draggable="false" class="sizeChartWeb-image-size-chart my-2 mx-auto" src="<?php if(!empty($list->sizechart_image)){ echo base_url('uploads/product/'.$list->sizechart_image); }else if(!empty($tblSize->image)){ echo base_url('uploads/sizechart/'.$tblSize->image); } ?>" /> 
														</div>
													</div>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
										</div>
									</div>
								</div>
							</div>										
						</div>
					</div>
				</div>
			</div>
			
			<div id="myPrivacynav" class="sidenav" style="z-index:9999;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="p-3">
								<h6 style="font-weight:900">Easy Exchange & Return&nbsp;<span style="font-size: 14px;font-weight: 500;color: gray;">(how it works?)</span></h6><a href="javascript:void(0)" class="closebtn" onclick="closePrivacyNav()"><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 0px; right: 20px; padding: 0px 2px; z-index:999;">
									<div class="css-1uu6dpv p-0">
										<svg viewBox="0 0 24 24" class="css-1oql73n">         
											<title></title>
											<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
											<path
											d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
											fill="#001325" fill-opacity="0.92"></path>
										</svg>
									</div>
								</button></a>
								<br>
								<div class=halfcard-paddedContent>
									<div class=DeliveryHalfCard-half-card-container-fluid>
										<div class=HalfCard-delivery-halfcard><svg viewBox="0 0 2 144" class=HalfCard-delivery-halfcard-vertical-line style=height:136px>
											<path fill=none stroke=#9B9B9B stroke-dasharray=2 stroke-linecap=square d="M1 0v144"></path>
										</svg>
										<div class=HalfCard-delivery-halfcard-header>Easy Exchanges</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>1</div><svg viewBox="0 0 60 60" class=HalfCard-delivery-halfcard-icon>
												<defs>
													<path id=card_exchange_svg__a d="M0 60h57.965V0H0z"></path>
												</defs>
												<g fill=none fill-rule=evenodd> 
													<path fill=#8340A1 d="M42.006 60H13.442a2.002 2.002 0 01-2.004-2V2c0-1.105.897-2 2.004-2h28.564c1.107 0 2.005.895 2.005 2v56c0 1.105-.898 2-2.005 2"></path>
													<mask id=card_exchange_svg__b fill=#fff>
														<use xlink:href=#card_exchange_svg__a></use>
													</mask>  
													<path fill=#FFF d="M13.544 53.738h28.462v-50H13.544z" mask=url(#card_exchange_svg__b)></path>
													<g mask=url(#card_exchange_svg__b)>
														<path fill=#F4F4F4 d="M13.544 53.7h28.462v-50H13.544z"></path>
														<path fill=#000000 d="M13.544 5.49h28.462V3.7H13.544z"></path>
														<path fill=#EAEAEA d="M13.447 53.7h28.56V37.666h-28.56z"></path>
														<path fill=#DBDDDD d="M15.104 53.7h11.074V41.814H15.104zm12.216 0h10.581V41.814h-10.58zm11.864 0h2.822V41.814h-2.822z"></path>
														<path fill=#E4E4E4 d="M13.447 37.996h28.56v-10h-28.56z"></path>
														<path fill=#E6E8E8 d="M15.104 21.99h9.32V11.816h-9.32z"></path>
														<path fill=#DBDDDD d="M38.932 14.003H26.575a.97.97 0 110-1.938h12.357a.97.97 0 110 1.938"></path>
														<path fill=#E6E8E8 d="M38.716 17.012H26.072a.468.468 0 110-.935h12.644a.468.468 0 110 .935m-1.35 2.378H26.072a.468.468 0 110-.934h11.294a.468.468 0 110 .934m2.447 2.379H26.072a.468.468 0 110-.935h13.74a.468.468 0 110 .935"></path>
														<g fill=#8E8E8E>
															<path d="M16.686 8.054c-.601 0-.974.44-.974 1.136 0 .692.377 1.137.974 1.137.605 0 .978-.445.978-1.137 0-.696-.377-1.136-.978-1.136m-.004 2.64c-.846 0-1.383-.603-1.383-1.5 0-.9.545-1.508 1.39-1.508.85 0 1.388.604 1.388 1.5 0 .893-.545 1.509-1.395 1.509m2.838-2.601h-.397v.988h.353c.405 0 .661-.172.661-.496 0-.312-.208-.492-.617-.492zm.834 2.573l-.918-1.249h-.313v1.22h-.4v-2.9h.813c.617 0 1.002.296 1.002.828 0 .44-.273.7-.665.8l.902 1.212-.421.089zm1.776-2.565h-.482v2.172h.47c.729 0 1.17-.348 1.17-1.084 0-.724-.461-1.088-1.159-1.088m-.032 2.537h-.85v-2.9h.87c1.047 0 1.588.6 1.588 1.447 0 .86-.574 1.453-1.608 1.453m2.257 0v-2.9h1.624v.367h-1.223v.832h.95l.06.368h-1.01v.965h1.263v.368zM27.4 8.094h-.396v.988h.352c.405 0 .662-.172.662-.496 0-.312-.209-.492-.617-.492zm.834 2.573l-.918-1.249h-.312v1.22h-.401v-2.9h.814c.617 0 1.002.296 1.002.828 0 .44-.273.7-.666.8l.902 1.212-.42.089zm1.6.003c-.325 0-.618-.072-.838-.188l.06-.408c.2.132.485.248.79.248.316 0 .545-.155.545-.436 0-.264-.124-.372-.581-.568-.57-.248-.782-.428-.782-.844 0-.468.369-.768.914-.768.292 0 .509.068.685.164l-.064.4a1.116 1.116 0 00-.637-.216c-.345 0-.501.176-.501.388 0 .22.116.324.577.528.581.256.786.448.786.884 0 .5-.39.816-.954.816"></path>
														</g>
													</g>
													<g mask=url(#card_exchange_svg__b)>
														<path fill=#ff3e6c d="M6.955 31.98C3.665 31.98 1 29.336 1 26.072c0-3.263 2.666-5.909 5.955-5.909h28.09c3.29 0 5.955 2.646 5.955 5.91 0 3.263-2.666 5.909-5.955 5.909H6.955z"></path>
														<path stroke=#ff3e6c stroke-width=0.6 d="M35.045 31.98H6.955C3.665 31.98 1 29.336 1 26.072c0-3.263 2.666-5.909 5.955-5.909h28.09c3.29 0 5.955 2.646 5.955 5.91 0 3.263-2.666 5.909-5.955 5.909z"></path>
														<path d="M6.972 27.894v-4.48h2.496v.57h-1.88v1.284h1.46l.093.569H7.588v1.489H9.53v.568zm5.461.05l-.887-1.328-.826 1.278h-.641l1.146-1.686-1.072-1.564.597-.098.808 1.229.77-1.18h.635l-1.078 1.594 1.146 1.662zm2.639.018c-.913 0-1.584-.618-1.584-1.711 0-1.125.715-1.724 1.627-1.724.487 0 .85.142 1.09.303l-.092.593c-.302-.229-.616-.365-1.01-.365-.592 0-1 .42-1 1.18 0 .81.438 1.193 1.024 1.193.345 0 .684-.093 1.023-.37l.086.562c-.314.228-.684.34-1.164.34m4.178-.069v-2.249c0-.346-.16-.574-.541-.574-.346 0-.69.216-1.011.537v2.286h-.61v-4.9l.61-.092v2.132c.29-.247.684-.507 1.164-.507.654 0 .999.37.999.97v2.397h-.61zm3.62-1.68c-1.277.123-1.56.451-1.56.797 0 .272.197.445.524.445.376 0 .74-.18 1.035-.464v-.778zm.122 1.68l-.074-.444c-.283.271-.659.512-1.208.512-.61 0-1.004-.358-1.004-.914 0-.822.715-1.15 2.163-1.298v-.142c0-.413-.259-.562-.66-.562-.412 0-.807.124-1.183.284l-.08-.525c.407-.16.795-.278 1.313-.278.82 0 1.22.327 1.22 1.057v2.31h-.487zm3.705 0v-2.249c0-.346-.16-.574-.542-.574-.346 0-.69.216-1.011.537v2.286h-.61v-3.299h.48l.08.476c.333-.284.734-.544 1.215-.544.653 0 .998.37.998.97v2.397h-.61zm2.817-2.922c-.444 0-.715.315-.715.723 0 .383.284.68.715.68.45 0 .734-.31.734-.711 0-.395-.296-.692-.734-.692m-.357 2.663c-.413.191-.592.39-.592.618 0 .272.37.463 1.036.463.671 0 1.06-.222 1.06-.5 0-.204-.173-.346-.678-.433l-.395-.068a7.081 7.081 0 01-.431-.08m.413 1.52c-.888 0-1.59-.272-1.59-.853 0-.34.246-.6.733-.852-.154-.1-.222-.217-.222-.346 0-.161.13-.315.357-.445-.382-.186-.634-.538-.634-.989 0-.71.61-1.143 1.3-1.143.34 0 .647.099.882.278l.863-.26.092.55-.653.062c.086.155.135.322.135.513 0 .71-.61 1.137-1.306 1.137-.093 0-.18-.006-.266-.018-.11.061-.178.135-.178.197 0 .118.123.149.727.254l.247.043c.733.123 1.177.346 1.177.852 0 .692-.777 1.02-1.664 1.02m2.81-3.305h1.683c-.067-.538-.326-.847-.832-.847-.413 0-.752.284-.85.846m.937 2.113c-.894 0-1.578-.519-1.578-1.73 0-1.056.64-1.705 1.497-1.705.987 0 1.443.741 1.443 1.65v.13h-2.33c.024.778.4 1.136 1.01 1.136.488 0 .857-.185 1.227-.47l.087.545c-.358.278-.802.444-1.356.444" fill=#FFF></path>
													</g>
													<g mask=url(#card_exchange_svg__b)>  
														<path fill=#ecbcb4 d="M35.224 29.829s-2.87-4.425-4.774-1.979c-.513.553-.797 1.267-.836 2.153-.038.855.016 2.157.406 2.92 1.226 2.391 2.537 5.065 4.939 6.183 0 5.644 5.29 8.037 7.786 8.851.758.248 1.273.95 1.272 1.746l-.008 8.26h13.956V41.689l-6.067.012a5.043 5.043 0 01-4.566-2.884c-2.727-2.983-5.19-1.868-6.737-3.612-1.434-1.085-3.053-2.042-4.096-3.478l-1.275-1.897z"></path>
														<path fill=#EAEAEA d="M30.698 29.674s.278-1.753 1.873-2.302a.796.796 0 01.814.181c.569.541 1.724 1.728 2.236 2.886.08.183 0 .402-.176.47-.526.205-1.58.676-2.09 1.329a.29.29 0 01-.458.009l-2.199-2.573z"></path>
													</g>
												</g>
											</svg>
											<div class=HalfCard-delivery-halfcard-description>Go to <strong class="font-weight-bold">Profile</strong class="font-weight-bold"> &gt; <strong class="font-weight-bold">My Orders</strong> &gt; <strong class="font-weight-bold">Order Details</strong> and clicked on exchange button.</div>
										</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>2</div>
											<svg viewBox="0 0 24 23" class=HalfCard-delivery-halfcard-icon>
												<defs>
													<path id=prefix__a d=M.015.987h4.27V.022H.015v.965z></path>
													<path id=prefix__c d="M.007 4.97h4.74V.078H.006v4.89z"></path>
												</defs>
												<g fill=none fill-rule=evenodd>
													<path d="M0 0h24v24H0z"></path>
													<path d="M7.823 17.068s1.018.96 2.52.556l1.502-.404s.419-.683.613-.481c.193.202-.037.53.55.229.412-.212 1.308-.102.436.353-.872.454-4.022 2.069-5.427 1.262-1.405-.808-.92-1.262-.92-1.262l.726-.253z" fill=#8340A1></path>
													<g transform="translate(.825 21.841)">
														<mask id=prefix__b fill=#fff>
															<use xlink:href=#prefix__a></use>
														</mask>
														<path d="M4.285.274L4.15 1.598S.033 1.588.02 1.536C.008 1.484.019.022.019.022l4.266.252z" fill=#8340A1 mask=url(#prefix__b)></path>
													</g>
													<path d="M17.647 3.681s.254 2.688 1.962 2.84c1.708.15 1.672-2.537 1.6-3.218-.073-.682-2.69-2.953-3.562.378" fill=#ecbcb4></path>
													<path d="M17.429 3.946c.05.345 3.297-1.356 3.297-1.356l.482-.612s-.617-1.4-2.071-1.06c-1.454.34-1.817 2.271-1.708 3.028" fill=#000000></path>
													<path d="M20.726 2.59c.083.07.555 1.545.555 1.545s.654-1.362-.073-2.157l-.482.612z" fill=#000000></path>
													<path d="M19.028 6.407v.795s1.163.757 1.599-.114v-.946s-.473.605-1.6.265" fill=#ecbcb4></path>
													<path d="M18.955 7.012c-.109-.038-2.398.946-2.47 1.325-.074.379-.26 2.686-.26 2.686l.945-.1.114-.731-.073 2.422.218 4.694 4.724-.227.29-5.716.614-.039s.368-3.102-.504-3.594c-.872-.493-1.853-.909-1.853-.909l-.073.265s-.436.795-1.6.114l-.072-.19z" fill=#8340A1></path>
													<path fill=#8340A1 d="M16.302 11.025l-.072 1.627h.727l.109-1.741zM13.439 14.487l.061 2.158a.13.13 0 00.132.129l4.524-.147.036-2.385-4.753.245z"></path>
													<path d="M18.192 14.242c.037-.038 2.18-.984 2.18-.984v2.271l-2.216 1.098.036-2.385z" fill=#000000></path>
													<path d="M12.767 14.32c.006.105.09.187.19.187.958.002 5.4.007 5.4-.027 0-.037.024-.731.024-.731l-5.44.074a.196.196 0 00-.189.21l.015.286z" fill=#ecbcb4></path>
													<path fill=#ecbcb4 d="M18.326 13.73l2.163-1.06v.6l-2.157 1.21z"></path>
													<path d="M12.894 13.843c-.073-.075 3.336-1.19 3.336-1.19l4.258-.039c.035 0 .046.05.014.065l-2.194 1.095-5.414.07z" fill=#ff3e6c></path>
													<path fill=#000000 d="M17.436 17.105l-.024.908 4.705-.061.019-.948z"></path>
													<g transform="translate(17.391 17.859)">
														<mask id=prefix__d fill=#fff>
															<use xlink:href=#prefix__c></use>
														</mask>
														<path d="M.03.12C-.008.273-.073 3.16.51 5.544c0 0 1.672.228 1.672.114s.145-3.672.145-3.558v3.52s1.744.076 1.78-.038c.037-.113.786-4.294.614-5.502L.029.12z" fill=#8340A1 mask=url(#prefix__d)></path>
													</g>
													<path fill=#E2E0E0 d="M19.246 17.838h1.272v-.72h-1.272z"></path>
													<path d="M2.74 9.347s-.872 2.473.34 3.431c1.21.96 2.732-.846 3.149-1.413.093-.126.722-1.326.576-1.578-.145-.253-4.065-.44-4.065-.44" fill=#ecbcb4></path>
													<path d="M7.198 9.7s2.18-.303 1.793.151c-.388.454-2.229.202-2.229.202l.043-.392.393.039z" fill=#8340A1></path>
													<path d="M5.115 9.548s-.679.404-.824 1.161h-.34s.34-.706-.193-.656c-.533.05-.97 1.918-.97 1.918l-.29-.202s-.194-1.918.242-2.423l2.375.202zM7.24 17.486l.594-.295a.275.275 0 00.1-.399c-.46-.67-1.744-2.443-2.968-3.2-.24-.148-.506.147-.346.386l2.297 3.42c.073.107.21.145.324.088" fill=#000000></path>
													<path d="M7.116 17.786s.848 1.388 3.711 1.15c2.13-.178 1.958-.229 1.958-.229s.557-.403.654-.151c.097.252-.334.43-.189.48.145.051.37.088.824-.05.465-.14.92.05.29.354-.63.302-1.502.302-2.035.15 0 0-2.304.922-4.741.026a3.037 3.037 0 01-1.096-.72l-.273-.278.897-.732zM23.008 11.326s-.818 5.023-4.125 4.948l.109-.19s1.199-.605 1.09-.795c0 0-.763-.265-.364-.302.4-.038.763-.114.982-.341.218-.227 1.436-2.247 1.509-3.27.109 0 .8-.05.8-.05" fill=#ecbcb4></path>
													<path d="M7.21 17.813a.32.32 0 00.123-.368c-.28-.832-1.238-3.594-1.69-3.809-.533-.252-3-.35-3.539-.114-1.24.54-1.21 2.89-1.21 2.89l-.05 5.64 4.266.063-.146-5.652.78 2.049a.18.18 0 00.268.09l1.198-.789zM2.623 9.334l4.575.467s.34-2.271-1.211-2.827c-1.4-.5-2.918.849-3.557 1.97-.092.163.012.371.193.39" fill=#8340A1></path>
													<path d="M13.518 15.075s.342.178.304.68c-.016.228-.187.425-.406.43-.162.003-.318-.11-.298-.694.036-.454.4-.416.4-.416" fill=#BBBBBA></path>
												</g>
											</svg>
											<div class=HalfCard-delivery-halfcard-description>Delivery agent will deliver the new product and pick up the old one</div>
										</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>3</div><svg id=Layer_1 x=0px y=0px viewBox="0 0 240 240" xml:space=preserve class=HalfCard-delivery-halfcard-icon>
												<style>
													circle {
													animation: initial
													}
													
													.st0 {
													fill: #ecbcb4
													}
													
													.st1 {
													fill: #ff3e6c
													}
													
													.st2 {
													fill: #8340A1
													}
													
													.st5 {
													fill: #000000
													}
													
													.st6 {
													fill: #e2e0e0
													}
												</style>
												<path class=st0 d="M62.7 88.3L71.7 90.8 71.7 138.3 26.9 138.3 17.4 136.3 17.4 127.2 17.4 88.3z"></path>
												<path class=st1 d="M26.9 90.8H71.6V138.3H26.9z"></path>
												<path class=st2 d="M26.9 90.8L17.4 88.3 17.4 127.2 17.4 136.3 26.9 138.3 26.9 138.3 26.9 90.8"></path>
												<path class=st0 d="M115.5 61.2l11.6 14c.6.7 1.4 1.4 2.1 2l24.9 19.1c.8.6 1.8.9 2.9.7 2.5-.4 5.1-.2 7.5.7 1.2.4 2.1 1.4 2.2 2.7.1.4 0 .9-.1 1.3-.3.9-.7 1.7-1.3 2.4-.5.6-1.2.8-1.9.8-.7-.1-1.4-.3-2.1-.7-.1-.3 0-.6.2-.8.5 0 1-.1 1.4-.2 1.2-.5 1.7-1.9 1.2-3.1-.1-.1-.1-.3-.2-.4-.6-.8-1.5-.9-2.8-.6-.4.2-.8.6-1 1-.3.7-.9 1.1-1.6 1.1h-2.6c-.9 0-1.7-.3-2.4-.7l-27.1-17.7c-2-1.3-3.9-2.9-5.4-4.8l-11.2-13.4c-.9-1-1.1-2.5-.4-3.7.6-.9 1.7-1.4 2.7-1.2 1.3-.1 2.5.5 3.4 1.5z"></path>
												<path class=st2 d="M108.4 64.9l9.6 13.2 7.5-7-10.1-11.3c-1.4-1.6-3.6-2.1-5.6-1.4-1.1.4-2 1.4-2.2 2.6-.3 1.3 0 2.8.8 3.9z"></path>
												<path d="M131.8 181.1c-.4 1.7-.5 3.4-.3 5.1.1.6.5 1 1.1 1H149s2.6-4.3-8.1-7H133c-.6 0-1 .4-1.2.9z" fill=#a5a5a5></path>
												<path d="M92.4 113.3s-4.2 15.9 3.7 18.5 27.3-1.3 27.3-1.3 2.4-.2 3.4 3.5 5.4 46.2 5.4 46.2h8.2l1.1-43.9c.5-5.9-2.4-13.6-7.5-16.6l-18.3-6.4H92.4z" fill=#bababa></path>
												<path class=st2 d="M89.4 113.3s-4.2 15.9 3.7 18.5 27.3-1.3 27.3-1.3 2.4-.2 3.4 3.5 2.4 47.2 2.4 47.2h8.2l4.1-44.9c.5-5.9-2.4-13.6-7.5-16.6l-17.3-6.4H89.4z"></path>
												<circle class=st5 cx=54.2 cy=194.1 r=25.5></circle>
												<circle class=st6 cx=54.2 cy=194.1 r=18.5></circle>
												<circle class=st2 cx=54.2 cy=194.1 r=14.6></circle>
												<circle class=st5 cx=201.3 cy=194.1 r=25.5></circle>
												<circle class=st6 cx=201.3 cy=194.1 r=18.5></circle>
												<circle class=st2 cx=201.3 cy=194.1 r=14.6></circle>
												<path class=st5 d="M175.6 89.3s4.4 11 3.8 14.7-2.8 4.6-7.8 4.6 4-19.3 4-19.3z"></path>
												<path d="M86.1 198.6s-1.6-8.5-10.5-8.8-60.9-.1-60.9-.1H14c-.7 0-1.2-.5-1.2-1.2v-.1c.3-6.4 3.2-36 29.4-42.6v-4.6h72.4c.7 2.8-.5 5.7-3 7.3-4.2 2.8-8.7 16-8.6 20.8s.5 14 15.4 17.1 40.3-.9 46.2-15.8c0 0 4.8-8.4 5.6-17.6s-1.8-14-7.6-23.8-9.8-15.9-11.6-24c2.8-1.4 4.9-3.8 5.8-6.8 1.6-5.2 9-9.8 18.7-9.2 0 0 2.3 15.2-3.1 18.9 0 0 .1.5-4.7.7s-.1 8.4 2.6 12.9 11.8 22.5 11.8 22.5l4.6.9c.9.6 1.6 1.5 2 2.5.8 1.9 3.2 7.3 3.2 7.3s22.9-3.9 31.9 13.4c0 0-19.1 2.9-27.6 8.9s-8.7 11.9-30.6 11.3l-.3-2.4s-2.6 11.3-16.8 11.9l-14.3.5-48.1.1" fill=#e6e8e8></path>
												<path class=st5 d="M16.4 137.5H114.9V141.3H16.4z"></path>
												<path class=st5 d="M76 126.6h47.4c.5 0 .9.4.9.9v.3l-3.8 11.9c-.3 1-1.2 1.6-2.2 1.6H89.6l-13.3-4.8c-.6-.2-1.1-.8-1.1-1.5v-7.4c-.1-.6.3-.9.8-1z"></path>
												<path class=st1 d="M188.2 146.6s4.5.6 5.4 3.2c.5 1.6 1 3.2 1.3 4.9l-3.8.6-2.9-8.7z"></path>
												<path class=st5 d="M43 163.1h20.7c.8 0 1.4.6 1.4 1.4 0 .8-.6 1.4-1.4 1.4H43c-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4zM43 169.4h20.7c.8 0 1.4.6 1.4 1.4 0 .8-.6 1.4-1.4 1.4H43c-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4zM43 175.6h20.7c.8 0 1.4.6 1.4 1.4 0 .8-.6 1.4-1.4 1.4H43c-.8 0-1.4-.6-1.4-1.4 0-.7.6-1.4 1.4-1.4z"></path>
												<circle class=st5 cx=160.2 cy=106.2 r=2.3></circle>
												<path class=st5 d="M125.4 181.9c-.4 1.7-.5 3.4-.3 5.1.1.6.5 1 1.1 1h16.4s2.6-4.3-8.1-7h-7.9c-.6 0-1.1.4-1.2.9z"></path>
												<path class=st2 d="M89.4 113.3s6.3-49.4 15.7-61.2c.9-1.1 2.4-1.2 3.5-.3l9.8 8.2c1.2 1 1.9 2.6 1.7 4.1l-4.5 49.2H89.4z"></path>
												<path class=st0 d="M113.5 66.2l11.6 14c.6.7 1.4 1.4 2.1 2l24.9 19.1c.8.6 1.8.9 2.9.7 2.5-.4 5.1-.2 7.5.7 1.2.4 2.1 1.4 2.2 2.7.1.4 0 .9-.1 1.3-.3.9-.7 1.7-1.3 2.4-.5.6-1.2.8-1.9.8-.7-.1-1.4-.3-2.1-.7-.1-.3 0-.6.2-.8.5 0 1-.1 1.4-.2 1.2-.5 1.7-1.9 1.2-3.1-.1-.1-.1-.3-.2-.4-.6-.8-1.5-.9-2.8-.6-.4.2-.8.6-1 1-.3.7-.9 1.1-1.6 1.1h-2.6c-.9 0-1.7-.3-2.4-.7l-27.1-17.7c-2-1.3-3.9-2.9-5.4-4.8l-11.2-13.4c-.9-1-1.1-2.5-.4-3.7.6-.9 1.7-1.4 2.7-1.2 1.3-.1 2.5.5 3.4 1.5z"></path>
												<path class=st2 d="M106.4 69.9l9.6 13.2 7.5-7-10.1-11.3c-1.4-1.6-3.6-2.1-5.6-1.4-1.1.4-2 1.4-2.2 2.6-.3 1.3 0 2.8.8 3.9z"></path>
												<path class=st0 d="M110.1 53L111 48.5 115.4 49.3 114.6 56.7z"></path>
												<path class=st0 d="M114.3 52.3c.7.5 1.5.8 2.4.9 4.3.4 6.3-2.6 7.5-3.8 2.9-2.9 4.7-11.5 2.2-15.5-3.2-5.3-5.3-7.3-8.2-7.2-3 .1-5.8 1.9-7.1 4.6-2.3 4.6-2.9 10-1.5 15 .6 2.5 2.3 4.7 4.7 6z"></path>
												<path class=st5 d="M89.9 109.8L115.9 110.1 115.6 113.3 89.4 113.3z"></path>
												<path class=st5 d="M113.6 33.7c3.2 2.3 9.5 4.1 15.8 5.2.3.1.7-.2.7-.5v-.1c.1-2.2-.5-8.8-4.8-11.7-5.8-4-12-1.4-13.3.1-.1.1-.3.2-.4.2-1.3.2-6.5 1.6-3.4 13.9.1.3.4.5.8.5.2 0 .3-.1.4-.3 1.4-2.1 2.5-4.5 3.2-7 .1-.3.4-.5.7-.4.2 0 .3.1.3.1z"></path>
												<path class=st0 d="M113.3 110.1L115.9 110.1 115.6 113.3 113 113.3z"></path>
											</svg>
											<div class=HalfCard-delivery-halfcard-description><?=$list->exchange_policy ?></div>
										</div>
										</div>
										<div class=HalfCard-delivery-halfcard><svg viewBox="0 0 2 144" class=HalfCard-delivery-halfcard-vertical-line style=height:136px>
											<path fill=none stroke=#9B9B9B stroke-dasharray=2 stroke-linecap=square d="M1 0v144"></path>
										</svg>
										<div class=HalfCard-delivery-halfcard-header>Easy Returns</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>1</div><svg viewBox="0 0 47 60" class=HalfCard-delivery-halfcard-icon>
												<defs>
													<path id=card_return_svg__a d="M0 60h57.965V0H0z"></path>
												</defs>
												<g fill=none fill-rule=evenodd transform=translate(-11)>
													<path fill=#8340A1 d="M42.006 60H13.442a2.002 2.002 0 01-2.004-2V2c0-1.105.897-2 2.004-2h28.564c1.107 0 2.005.895 2.005 2v56c0 1.105-.898 2-2.005 2"></path>
													<mask id=card_return_svg__b fill=#fff>
														<use xlink:href=#card_return_svg__a></use>
													</mask>
													<path fill=#FFF d="M13.544 53.738h28.462v-50H13.544z" mask=url(#card_return_svg__b)></path>
													<g mask=url(#card_return_svg__b)>
														<path fill=#F4F4F4 d="M13.544 53.7h28.462v-50H13.544z"></path>
														<path fill=#000000 d="M13.544 5.49h28.462V3.7H13.544z"></path>
														<path fill=#EAEAEA d="M13.447 53.7h28.56V37.666h-28.56z"></path>
														<path fill=#DBDDDD d="M15.104 53.7h11.074V41.814H15.104zm12.216 0h10.581V41.814h-10.58zm11.864 0h2.822V41.814h-2.822z"></path>
														<path fill=#E4E4E4 d="M13.447 37.996h28.56v-10h-28.56z"></path>
														<path fill=#E6E8E8 d="M15.104 21.99h9.32V11.816h-9.32z"></path>
														<path fill=#DBDDDD d="M38.932 14.003H26.575a.97.97 0 110-1.938h12.357a.97.97 0 110 1.938"></path>
														<path fill=#E6E8E8 d="M38.716 17.012H26.072a.468.468 0 110-.935h12.644a.468.468 0 110 .935m-1.35 2.378H26.072a.468.468 0 110-.934h11.294a.468.468 0 110 .934m2.447 2.379H26.072a.468.468 0 110-.935h13.74a.468.468 0 110 .935"></path>
														<g fill=#8E8E8E>
															<path d="M16.686 8.054c-.601 0-.974.44-.974 1.136 0 .692.377 1.137.974 1.137.605 0 .978-.445.978-1.137 0-.696-.377-1.136-.978-1.136m-.004 2.64c-.846 0-1.383-.603-1.383-1.5 0-.9.545-1.508 1.39-1.508.85 0 1.388.604 1.388 1.5 0 .893-.545 1.509-1.395 1.509m2.838-2.601h-.397v.988h.353c.405 0 .661-.172.661-.496 0-.312-.208-.492-.617-.492zm.834 2.573l-.918-1.249h-.313v1.22h-.4v-2.9h.813c.617 0 1.002.296 1.002.828 0 .44-.273.7-.665.8l.902 1.212-.421.089zm1.776-2.565h-.482v2.172h.47c.729 0 1.17-.348 1.17-1.084 0-.724-.461-1.088-1.159-1.088m-.032 2.537h-.85v-2.9h.87c1.047 0 1.588.6 1.588 1.447 0 .86-.574 1.453-1.608 1.453m2.257 0v-2.9h1.624v.367h-1.223v.832h.95l.06.368h-1.01v.965h1.263v.368zM27.4 8.094h-.396v.988h.352c.405 0 .662-.172.662-.496 0-.312-.209-.492-.617-.492zm.834 2.573l-.918-1.249h-.312v1.22h-.401v-2.9h.814c.617 0 1.002.296 1.002.828 0 .44-.273.7-.666.8l.902 1.212-.42.089zm1.6.003c-.325 0-.618-.072-.838-.188l.06-.408c.2.132.485.248.79.248.316 0 .545-.155.545-.436 0-.264-.124-.372-.581-.568-.57-.248-.782-.428-.782-.844 0-.468.369-.768.914-.768.292 0 .509.068.685.164l-.064.4a1.116 1.116 0 00-.637-.216c-.345 0-.501.176-.501.388 0 .22.116.324.577.528.581.256.786.448.786.884 0 .5-.39.816-.954.816"></path>
														</g>
													</g>
													<g mask=url(#card_return_svg__b)>
														<path fill=#ff3e6c d="M21.508 31.98A5.504 5.504 0 0116 26.48c0-3.037 2.466-5.5 5.508-5.5h25.984A5.504 5.504 0 0153 26.48c0 3.038-2.466 5.5-5.508 5.5H21.508z"></path><text fill=#FFF font-family="WhitneySSm-Medium, Whitney SSm" font-size=7 font-weight=400 transform="translate(16 20)">
															<tspan x=7.5 y=8.5>Return</tspan>
														</text>
														<path stroke=#ff3e6c stroke-width=0.6 d="M47.492 31.98H21.508A5.504 5.504 0 0116 26.48c0-3.037 2.466-5.5 5.508-5.5h25.984A5.504 5.504 0 0153 26.48c0 3.038-2.466 5.5-5.508 5.5z"></path>
													</g>
													<g mask=url(#card_return_svg__b)>
														<path fill=#ecbcb4 d="M35.224 29.829s-2.87-4.425-4.774-1.979c-.513.553-.797 1.267-.836 2.153-.038.855.016 2.157.406 2.92 1.226 2.391 2.537 5.065 4.939 6.183 0 5.644 5.29 8.037 7.786 8.851.758.248 1.273.95 1.272 1.746l-.008 8.26h13.956V41.689l-6.067.012a5.043 5.043 0 01-4.566-2.884c-2.727-2.983-5.19-1.868-6.737-3.612-1.434-1.085-3.053-2.042-4.096-3.478l-1.275-1.897z"></path>
														<path fill=#EAEAEA d="M30.698 29.674s.278-1.753 1.873-2.302a.796.796 0 01.814.181c.569.541 1.724 1.728 2.236 2.886.08.183 0 .402-.176.47-.526.205-1.58.676-2.09 1.329a.29.29 0 01-.458.009l-2.199-2.573z"></path>
													</g>
												</g>
											</svg>
											<div class=HalfCard-delivery-halfcard-description>Go to <strong class="font-weight-bold">Profile</strong class="font-weight-bold"> &gt; <strong class="font-weight-bold">My Orders</strong> &gt; <strong class="font-weight-bold">Order Details</strong> and clicked on exchange button.</div>
										</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>2</div>
											<svg viewBox="0 0 24 23" class=HalfCard-delivery-halfcard-icon>
												<defs>
													<path id=prefix__a d=M.015.987h4.27V.022H.015v.965z></path>
													<path id=prefix__c d="M.007 4.97h4.74V.078H.006v4.89z"></path>
												</defs>
												<g fill=none fill-rule=evenodd>
													<path d="M0 0h24v24H0z"></path>
													<path d="M7.823 17.068s1.018.96 2.52.556l1.502-.404s.419-.683.613-.481c.193.202-.037.53.55.229.412-.212 1.308-.102.436.353-.872.454-4.022 2.069-5.427 1.262-1.405-.808-.92-1.262-.92-1.262l.726-.253z" fill=#8340A1></path>
													<g transform="translate(.825 21.841)">
														<mask id=prefix__b fill=#fff>
															<use xlink:href=#prefix__a></use>
														</mask>
														<path d="M4.285.274L4.15 1.598S.033 1.588.02 1.536C.008 1.484.019.022.019.022l4.266.252z" fill=#8340A1 mask=url(#prefix__b)></path>
													</g>
													<path d="M17.647 3.681s.254 2.688 1.962 2.84c1.708.15 1.672-2.537 1.6-3.218-.073-.682-2.69-2.953-3.562.378" fill=#ecbcb4></path>
													<path d="M17.429 3.946c.05.345 3.297-1.356 3.297-1.356l.482-.612s-.617-1.4-2.071-1.06c-1.454.34-1.817 2.271-1.708 3.028" fill=#000000></path>
													<path d="M20.726 2.59c.083.07.555 1.545.555 1.545s.654-1.362-.073-2.157l-.482.612z" fill=#000000></path>
													<path d="M19.028 6.407v.795s1.163.757 1.599-.114v-.946s-.473.605-1.6.265" fill=#ecbcb4></path>
													<path d="M18.955 7.012c-.109-.038-2.398.946-2.47 1.325-.074.379-.26 2.686-.26 2.686l.945-.1.114-.731-.073 2.422.218 4.694 4.724-.227.29-5.716.614-.039s.368-3.102-.504-3.594c-.872-.493-1.853-.909-1.853-.909l-.073.265s-.436.795-1.6.114l-.072-.19z" fill=#8340A1></path>
													<path fill=#8340A1 d="M16.302 11.025l-.072 1.627h.727l.109-1.741zM13.439 14.487l.061 2.158a.13.13 0 00.132.129l4.524-.147.036-2.385-4.753.245z"></path>
													<path d="M18.192 14.242c.037-.038 2.18-.984 2.18-.984v2.271l-2.216 1.098.036-2.385z" fill=#000000></path>
													<path d="M12.767 14.32c.006.105.09.187.19.187.958.002 5.4.007 5.4-.027 0-.037.024-.731.024-.731l-5.44.074a.196.196 0 00-.189.21l.015.286z" fill=#ecbcb4></path>
													<path fill=#ecbcb4 d="M18.326 13.73l2.163-1.06v.6l-2.157 1.21z"></path>
													<path d="M12.894 13.843c-.073-.075 3.336-1.19 3.336-1.19l4.258-.039c.035 0 .046.05.014.065l-2.194 1.095-5.414.07z" fill=#ff3e6c></path>
													<path fill=#000000 d="M17.436 17.105l-.024.908 4.705-.061.019-.948z"></path>
													<g transform="translate(17.391 17.859)">
														<mask id=prefix__d fill=#fff>
															<use xlink:href=#prefix__c></use>
														</mask>
														<path d="M.03.12C-.008.273-.073 3.16.51 5.544c0 0 1.672.228 1.672.114s.145-3.672.145-3.558v3.52s1.744.076 1.78-.038c.037-.113.786-4.294.614-5.502L.029.12z" fill=#8340A1 mask=url(#prefix__d)></path>
													</g>
													<path fill=#E2E0E0 d="M19.246 17.838h1.272v-.72h-1.272z"></path>
													<path d="M2.74 9.347s-.872 2.473.34 3.431c1.21.96 2.732-.846 3.149-1.413.093-.126.722-1.326.576-1.578-.145-.253-4.065-.44-4.065-.44" fill=#ecbcb4></path>
													<path d="M7.198 9.7s2.18-.303 1.793.151c-.388.454-2.229.202-2.229.202l.043-.392.393.039z" fill=#8340A1></path>
													<path d="M5.115 9.548s-.679.404-.824 1.161h-.34s.34-.706-.193-.656c-.533.05-.97 1.918-.97 1.918l-.29-.202s-.194-1.918.242-2.423l2.375.202zM7.24 17.486l.594-.295a.275.275 0 00.1-.399c-.46-.67-1.744-2.443-2.968-3.2-.24-.148-.506.147-.346.386l2.297 3.42c.073.107.21.145.324.088" fill=#000000></path>
													<path d="M7.116 17.786s.848 1.388 3.711 1.15c2.13-.178 1.958-.229 1.958-.229s.557-.403.654-.151c.097.252-.334.43-.189.48.145.051.37.088.824-.05.465-.14.92.05.29.354-.63.302-1.502.302-2.035.15 0 0-2.304.922-4.741.026a3.037 3.037 0 01-1.096-.72l-.273-.278.897-.732zM23.008 11.326s-.818 5.023-4.125 4.948l.109-.19s1.199-.605 1.09-.795c0 0-.763-.265-.364-.302.4-.038.763-.114.982-.341.218-.227 1.436-2.247 1.509-3.27.109 0 .8-.05.8-.05" fill=#ecbcb4></path>
													<path d="M7.21 17.813a.32.32 0 00.123-.368c-.28-.832-1.238-3.594-1.69-3.809-.533-.252-3-.35-3.539-.114-1.24.54-1.21 2.89-1.21 2.89l-.05 5.64 4.266.063-.146-5.652.78 2.049a.18.18 0 00.268.09l1.198-.789zM2.623 9.334l4.575.467s.34-2.271-1.211-2.827c-1.4-.5-2.918.849-3.557 1.97-.092.163.012.371.193.39" fill=#8340A1></path>
													<path d="M13.518 15.075s.342.178.304.68c-.016.228-.187.425-.406.43-.162.003-.318-.11-.298-.694.036-.454.4-.416.4-.416" fill=#BBBBBA></path>
												</g>
											</svg>
											<div class=HalfCard-delivery-halfcard-description>Delivery agent will pick up the product</div>
										</div>
										<div class=HalfCard-delivery-halfcard-info-item>
											<div class=HalfCard-delivery-halfcard-index>3</div>
											<svg id=prefix__Layer_1 data-name="Layer 1" viewBox="0 0 24 24" class=HalfCard-delivery-halfcard-icon>
												<defs>
													<style>
														.prefix__cls-2 {
														fill: #ecbcb4;
														fill-rule: evenodd
														}
													</style>
												</defs>
												<path d="M0 0h24v24H0z" fill=none></path>
												<path class=prefix__cls-2 d="M1.73 18.52h21.81V6.46H1.73z"></path>
												<path d="M1.28 18.07h21.81V6H1.28z" fill=#000000 fill-rule=evenodd></path>
												<path class=prefix__cls-2 d="M.75 17.3h21.81v-12H.75z"></path>
												<path d="M16 11.28A4.3 4.3 0 1111.65 7 4.29 4.29 0 0116 11.28z" fill=#ff3e6c fill-rule=evenodd></path>
												<path d="M12.29 9h1l.35-.52h-3.58L9.71 9h1a1.27 1.27 0 011.05.57h-1.71l-.35.53h2.13s0 1.14-1.93.94v.52l2.1 2.5h.79V14l-2-2.43s1.57 0 1.82-1.36h.66l.35-.53h-1a1.22 1.22 0 00-.33-.68" fill=#fff fill-rule=evenodd></path>
											</svg>
											<div class=HalfCard-delivery-halfcard-description><?= $list->return_policy ?></div>
										</div>
										</div>
										<div class="halfcard-footer DeliveryHalfCard-delivery-halfcard-footer " style="font-weight:500;"><strong>Note:</strong> The product should not be damaged and the price tags should be intact. T&amp;C applicable</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--gift wrap modal-->
			<div class="modal fade" id="gift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered  modal-sm">
					<div class="modal-content">
						<div class="modal-header" id="giftModal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 10px; right: 20px; padding: 0px 2px; z-index:999;">
								<div class="css-1uu6dpv p-0">
									<svg viewBox="0 0 24 24" class="css-1oql73n">         
										<title></title>
										<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
										<path
										d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
										fill="#001325" fill-opacity="0.92"></path>
									</svg>
								</div>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Leave Youe Message</label>
								<textarea class="form-control" cols="4" rows="4"></textarea>
							</div>
							<div class="form-group">
								<p class="text-right"><button class="btn btn-secondary">Submit</button></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<!--Beauty Tips Modal-->
			<div class="modal fade " id="BeautyTipsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> 
							<h5 class="modal-title" id="exampleModalLabel">Beauty Tips</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 10px; right: 20px; padding: 0px 2px; z-index:999;">
								<div class="css-1uu6dpv p-0">
									<svg viewBox="0 0 24 24" class="css-1oql73n">         
										<title></title>
										<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
										<path
										d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
										fill="#001325" fill-opacity="0.92"></path>
									</svg>
								</div>
							</button>
						</div>
						<div class="modal-body">
							
						</div>
					</div>
				</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="modalinfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background: rgb(38 37 37 / 57%);">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="border: 0px; padding:10px;">
							<p class="modal-title" id="staticBackdropLabel">Modal info</p>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 10px; right: 20px; padding: 0px 2px; z-index:999;">
								<div class="css-1uu6dpv p-0">
									<svg viewBox="0 0 24 24" class="css-1oql73n">         
										<title></title>
										<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
										<path
										d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
										fill="#001325" fill-opacity="0.92"></path>
									</svg>
								</div>
							</button>
						</div>
						<div class="modal-body">
							<?php if(!empty($list->modalinfo)){ echo base64_decode($list->modalinfo);}?>
						</div>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				function AddToWishlist(id) {
					$.ajax({
						url: "<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddToWishlist/') ?>" + id,
						type: "post",
						data: {
							id: id
						},
						success: function(response) {
							console.log(response);
							var response = JSON.parse(response);
							if (response[0].res == 'success') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "success");
								} else if (response[0].res == 'error') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error"); 
								if (response[0].redirect) {
									window.setTimeout(function() {
										window.location.href = response[0].redirect;
									}, 1000);
								}
							}
						}
					});
				}
				
			</script>
			<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-36251023-1']);
				_gaq.push(['_setDomainName', 'jqueryscript.net']);
				_gaq.push(['_trackPageview']);
				
				(function() {
					var ga = document.createElement('script');
					ga.type = 'text/javascript';
					ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(ga, s);
				})();
			</script>
			
			<script>
				function getSimilarProduct() {
					
					jQuery("#similarProductModal").modal('show');
				}
				
				function productViewDetail() {
					jQuery("#productViewDetail").modal('show');
				}
				
				function giftWrap() {
					jQuery("#giftSection").show();
				}
				
				function closeGiftWrap() {
					jQuery("#giftSection").hide();
				}
				
				function openDotModal() {
					
					// jQuery("#Dotimg").modal("show");  
				}
				//find my size popup 
				function findSize() {
					jQuery("#findSize").modal('show');
				}
				
				
				function openNav() {
					// document.getElementById("mySidenav").style.width = "410px";
					jQuery("#mySidenav").show();
					
				}
				
				function closeNav() {
					
					// document.getElementById("mySidenav").style.width = "0";
					jQuery("#mySidenav").hide();
				}
				/* Simple appearence with animation AN-1*/
				
				/* Privact nav*/
				function openPrivacyNav() {
					jQuery("#myPrivacynav").show();
					// document.getElementById("myPrivacynav").style.width = "410px";
				}
				
				function closePrivacyNav() {
					// document.getElementById("myPrivacynav").style.width = "0";
					jQuery("#myPrivacynav").hide();
				}
			</script>
			<script>
				jQuery("div[data-selection] div").click(function() {
					if (jQuery(this).find('img').hasClass('selected')) {
						jQuery(this).find('img').removeAttr('class')
						} else {
						if (jQuery(this).parent('div').attr("data-selection") == 'single') {
							jQuery("div[data-selection='single']  img").removeClass('selected');
							jQuery(this).find('img').toggleClass('selected');
							} else if (jQuery(this).parent('div').attr("data-selection") == 'multiple') {
							jQuery(this).find('img').toggleClass('selected');
						}
					}
				});
				
				
				/* Gallery Sizes */
				jQuery("div[data-image-size='large'] div").addClass('col-md-6 col-sm-4 col-xs-12');
				jQuery("div[data-image-size='medium'] div").addClass('col-md-4 col-sm-3 col-xs-6');
				jQuery("div[data-image-size='small'] div").addClass('col-md-2 col-sm-2 col-xs-3');
				
				/* Disable Dragging an Image */
				jQuery("div[data-selection] img").mousedown(function() {
					return false;
				});
				
				function NotifyProduct() {
					jQuery("#NotifyProduct").modal('show');
				}
				
				var blink = document.getElementById('blinkgift');
				setInterval(function() {
					blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
				}, 1200);
				
				jQuery("#expandHideArea").click(function() {
					jQuery(".hidearea").toggle();
					$("#expandHideArea").show();
					var x = document.getElementById("expandHideArea");
					if (x.innerHTML === "View More") {
						x.innerHTML = "View Less";
						} else {
						x.innerHTML = "View More";
					}
					var getcss = jQuery("#expandHideArea").html();
					if (getcss == 'View More') {
						jQuery(".leftscroll").css("overflow-y", "hidden");
						jQuery(".leftscroll").hover(function() {
							jQuery(this).css("overflow-y", "hidden");
							}, function() {
							jQuery(this).css("overflow-y", "hidden");
						});
						} else {
						jQuery(".leftscroll").css("overflow-y", "scroll");
						jQuery(".leftscroll").hover(function() {
							jQuery(this).css("overflow-y", "scroll");
							}, function() {
							jQuery(this).css("overflow-y", "hidden");
						});
					}
					
				})
				jQuery("#expandHideArea2").click(function() {
					jQuery(".hidearea2").toggle();
					$("#expandHideArea2").show();
					var x = document.getElementById("expandHideArea2");
					if (x.innerHTML === "View More") {
						x.innerHTML = "View Less";
						} else {
						x.innerHTML = "View More";
					}
					
					var getcss = jQuery("#expandHideArea2").html();
					if (getcss == 'View More') {
						jQuery(".hidearea2").css("overflow-y", "hidden");
						} else {
						jQuery(".hidearea2").css("overflow-y", "scroll");
					}
					
				})
				
				function OpenTipsModal(id) { 
					jQuery("#BeautyTipsModal").modal('show');
					jQuery("#BeautyTipsModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
					jQuery("#BeautyTipsModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ViewBeautyTips/') ?>" + id);
				}
				
				jQuery("#scrollablesection").hover(function() {
					jQuery(this).css("overflow-y", "scroll");
					}, function() {
					jQuery(this).css("overflow-y", "hidden");
				});
				
				// jQuery(".leftscroll").hover(function(){jQuery(this).css("overflow-y","scroll");},function(){jQuery(this).css("overflow-y","hidden");});
				
				
				
				function FindSize() {
					
					$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg mb-4"></div><div class="col-sm-9 col-12"><h5 class="text-uppercase text-center">63% of people like you bought size</h5><h2 class="text-center font-weight-bold">XS</h2><div class="row"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">63%</div></div><div class="row"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row"><div class="col-sm-12"><p class="mr-3 ml-3">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b><p></div></div><div class="row"><div class="col-sm-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row"><div class="col-sm-12"><span class="" font-weight-bold>ADD MORE INFORMATION<br><small>Improve your recommendation with 4 more questions</small></div></div><div class="row mt-5"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div><div class="col-sm-6 col-6"><button class="btn btn-secondary " id="infobtn1" onclick="addinformation()">ADD INFO</button></div></div></div></div>').fadeIn(3000);
				}
				
				function AllDone() {
					$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9"><div class="row"><div class="col-sm-11 mx-auto"><center><span class="text-uppercase" style="font-size:15px;text-align:center;font-weight:600">All Done Your Size is : </span></center><h2 class="text-center" style="font-weight:900"><b>XS</b></h2><div class="row mt-2"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">63%</div></div><div class="row mt-2"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row mt-4"><div class="col-sm-10 mx-auto"><p class="">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b></p></div></div><div class="row"><div class="col-sm-12 col-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row mt-5"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div></div></div></div></div></div>').fadeIn(3000);
				}
				
				function addinformation() {
					$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid findsizeimg" style="height:80px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR FIGURE</h3><div class="row"><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B1.png" class="img-fluid w-100 figureimg" onclick="Shape1()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.png"  class="img-fluid w-100 figureimg" onclick="Shape1()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B3.png" class="img-fluid w-100 figureimg"  onclick="Shape1()"></div></div><br><br><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="FindSize()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" checked="checked" disabled="disabled" name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="Shape1()">SKIP</a></div></div></div></div>').fadeIn('slow');
				}
				
				function Shape1() {
					$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height: 80px;"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR SHAPE</h3><div class="row"><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H1.png" class="img-fluid  w-100 figureimg" onclick="Shape2()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H2.png" class="img-fluid  w-100 figureimg" onclick="Shape2()" ></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H3.png" class="img-fluid  w-100 figureimg" onclick="Shape2()" ></div></div><br><br><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="#" onclick="addinformation()" >BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled name="" >&ensp;&ensp;<input type="checkbox" checked disabled  name="" > &ensp;&ensp;<input type="checkbox" disabled  name="" > &ensp;&ensp;<input type="checkbox" disabled name="" ></center></div><div class="col-sm-4 col-3"><a href="javascript:void(0)" class="float-right" onclick="Shape2()" >SKIP</a></div></div></div></div>').fadeIn(3000);
				}
				
				function Shape2() {
					$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px"><div class="col-sm-9 mx-auto"><h3 class="text-center font-weight-bold">HOW OLD ARE YOU</h3><div class="row mt-5"><div class="col-sm-3 col-3"><span class="mysize">MY AGE:</span></div><div class="col-sm-6 col-6"><div class="form-group" style="margin-top:2px"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></div><div class="col-sm-3 col-3"><span>14</span></div></div><div class="row"><div class="col-sm-12"><div class="col-sm-8 p-3 mx-auto" style="border:1px solid #000"><span>Why do we ask for this? Age has an impact on how your weight is distributed. Knowing your</div></div><div class="col-sm-12 mt-3"><p class="text-center"><button class="btn btn-secondary" onclick="finalShow()">Add Age</button></p></div></div><div class="row mt-5 backrow"><div class="col-sm-3 col-3"><a href="#" onclick="Shape1()">BACK</a></div><div class="col-sm-6 col-6"><center><input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp; <input type="checkbox" disabled checked name=""> &ensp;&ensp; <input type="checkbox" disabled name=""></center></div><div class="col-sm-3 col-3"><a href="#" class="float-right" onclick="SelectZise()">SKIP</a></div></div></div></div>').fadeIn(3000);
				}
				
				function finalShow() {
					$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9 col-12"><h5 class="text-uppercase text-center">63% of people like you bought size</h5><h2 class="text-center font-weight-bold">XS</h2><div class="row"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-3 col-2">63%</div></div><div class="row"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row"><div class="col-sm-12"><p class="mr-3 ml-3">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b><p></div></div><div class="row"><div class="col-sm-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row"><div class="col-sm-12"><span class="" font-weight-bold>ADD MORE INFORMATION<br><small>Improve your recommendation with 4 more questions</small></div></div><div class="row mt-5 backrow"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div><div class="col-sm-6 col-6"><button class="btn btn-secondary " id="infobtn2" onclick="addinformation()">ADD INFO</button></div></div></div></div>').fadeIn(3000);
				}
				
				function StartOver() {
					$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9 col-12"><div class="row"><div class="col-sm-9"><p class="text-uppercase font-weight-bold" style="font-size:15px">We help to find the right size</p><span style="font-size:13px">We calculate the perfect fit based on your unique measurements</span></div></div><br><span style="font-size:15px" class="text-uppercase font-weight-bold">Measurements</span><div class="row"><div class="col-sm-10 col-10"><div class="row"><div class="col-sm-6 col-6"><small>Your height and weight:</small></div><div class="col-sm-6 col-6 text-right"><small><span style="font-weight:800">CM</span>| IN</small></div></div></div></div><div class="row mt-4"><div class="col-3 col-sm-3"><small class="text-uppercase">height</small></div><div class="col-6 col-sm-6"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></form></div><div class="col-3 col-sm-3"><small class="text-uppercase">6 FT 3IN</small></div></div><div class="row"><div class="col-3 col-sm-3"><small class="text-uppercase">Weight</small></div><div class="col-6 col-sm-6"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></form></div><div class="col-3 col-sm-3"><small class="text-uppercase">296LBS</small></div></div><br><span style="font-size:15px" class="text-uppercase font-weight-bold my-1">Preference</span><br><span style="font-size:13px">How do you want it to fit?</span><br><div class="row"><div class="col-sm-10"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"><div class="row mt-1"><div class="col-sm-4 col-4"><span>Tighter</span></div><div class="col-sm-4 col-4"><center><span>Perfect</span></center></div><div class="col-sm-4 col-4"><span class="float-right">Looser</span></div></div></div></form></div></div><div class="form-group"><p class="text-right"><button class="btn btn-secondary" onclick="FindSize()">Find my size</button></p></div></div></div>').fadeIn(3000);
				}
				
				function SelectZise() {
					$("#findsize-modalbody").hide().html('<div class="row"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px;margin-left:20px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR BRA SIZE</h3><div class="row"><div class="col-sm-9 col-12 mx-auto"><div class="row my-2"><div class="col-sm-6 col-6"><select class="form-control"><option>My BRA SIZE</option><option>American Size</option></select></div><div class="col-sm-6 col-6"><select class="form-control"><option>EUROPEAN SIZE</option><option>American Size</option></select></div></div><div class="row"><div class="col-12 col-sm-6 p-0"><table class="table table-bordered"><tr><th>BUST</th></tr><tr><td>60</td><td>65</td><td>70</td><td>75</td></tr><tr><td>80</td><td>85</td><td>90</td><td>95</td></tr><tr><td>100</td><td>105</td><td>110</td><td>115</td></tr><tr><td>120</td><td>155</td></tr></table></div><div class="col-12 col-sm-6 p-0"><table class="table table-bordered"><tr><th>CUP</th></tr><tr><td>AA</td><td>A</td><td>B</td><td>C</td></tr><tr><td>D</td><td>E</td><td>F</td><td>G</td></tr><tr><td>H</td><td>I</td><td>J</td><td>K</td></tr></table></div></div></div></div><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="Shape2()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled="disabled" name="">&ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" checked="checked" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" name=""></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="BraSize()">SKIP</a></div></div></div></div>').fadeIn(3000);
				}
				
				function BraSize() {
					$("#findsize-modalbody").hide().html('<div class="row"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px;margin-left:20px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR BRA SIZE</h3><div class="row"><div class="col-sm-5 mx-auto" style="font-weight:700"><p class="text-center">MY BRA SIZE : 35A</p></div></div><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="SelectZise()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled="disabled" name="">&ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" checked="checked" name=""></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="AllDone()">SKIP</a></div></div></div></div>').fadeIn(3000);
				}
				
				
				function ToggleRating() {
					$("#toggleRating").toggle();
				}
				
				jQuery(".prevbtn").mouseenter(function() {
					jQuery(".appendtext").html('PREV');
				})
				jQuery(".prevbtn").mouseleave(function() {
					jQuery(".appendtext").html('')
				})
				
				
				jQuery(".nxtbtn").mouseenter(function() {
					jQuery(".appendnext").html('NEXT');
				})
				jQuery(".nxtbtn").mouseleave(function() {
					jQuery(".appendnext").html('');
				});
				
				jQuery("#SlideToggle").click(function() {
					var value = jQuery("#SlideToggle").html();
					
					var x = document.getElementById("SlideToggle");
					if (x.innerHTML === "View More") {
						x.innerHTML = "View Less";
						} else {
						x.innerHTML = "View More";
					}
					jQuery(".hidearea_mobile").slideToggle("slow");
				});
			</script>
			<script>
				$('.filter-color').owlCarousel({
					loop: false,
					autoplay: false,
					nav: false,
					dots: false,
					responsive: {
						0: {
							items: 3.8,
							
						},
						360: {
							items: 3.8,
						},
						1024: {
							items: 5.5,
						},
					}, 
					// navText: [
					// '<i class="fa-solid fa-angle-left" style="color:#8340A1;"></i>',
					// '<i class="fa-solid fa-angle-right" style="color: #8340A1;"></i>'
					// ],
					// navcontainer-fluid: '.main-content .custom-nav',
				})
				
				$('.filter-combo').owlCarousel({
					loop: false,
					autoplay: false,
					nav: false,
					dots: false,
					responsive: {
						0: {
							items: 2.8,
							
						},
						425: {
							items: 3.8
							
						},
						460: {
							items: 4.6,
						},
						768: {
							items: 2.9,
						},
						1024: {
							items: 4.9,
						},
					},
					
				})
				
				$('.filter-size').owlCarousel({
					loop: false,
					autoplay: false,
					nav: false,
					dots: false,
					responsive: {
						0: {
							items: 5.8,
							
						},
						460: {
							items: 7,
						},
						1024: {
							items: 9,
						},
					},
					
				})
				
				
				$('.user-review-img').owlCarousel({
					loop: true,
					autoplay: true,
					nav: false,
					items: 3,
					margin: 5,
					dots: false,
					
				})
				
				
				$(document).ready(function() {
					$(".desktop-image-slider").owlCarousel({
						items: 5,
						loop: false,
						mouseDrag: false,
						touchDrag: false,
						pullDrag: false,
						autoplay: false,
						margin: 2,
						nav: true,
						animateOut: 'slideOutUp',
						animateIn: 'slideInUp'
					});
				})
			</script>
			<!--coupon slider start-->
			<script>
				$('.coupon-slider').owlCarousel({
					loop: false, 
					autoplay: true,  
					nav: true,
					dots: false,
					margin: 0,
					responsive: {
						0: {
							items: 1,
							
						},
						460: {
							items: 1,
						},
						1024: {
							items: 1.5,
						},
					},
					navText: [
					'<i class="fa-solid fa-angle-left d-none" style="color:#8340A1;"></i>',
					'<i class="fa-solid fa-angle-right" style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: -10px; left:-25px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 3px 0 0 3px;"></i>'
					],
					// navcontainer-fluid: '.main-content .custom-nav',
				})
			</script>
			<!--coupon slider end-->
			
			<!--dressing sense slider start -->
			<script>
				$('.dressing-slider').owlCarousel({
					loop: true,
					autoplay: true,
					nav: false,
					dots: false,
					margin: 0,
					responsive: {
						0: {
							items: 1.4,
							
						},
						460: {
							items: 1,
						},
						1024: {
							items: 1.25,
						},
					},
					
					
				})
			</script>
			<!--dressing sense slider end -->
			
			<!--choose color-->
			<script>
				$(document).ready(function() {
					$('.gallery-item').click(function(e) {
						$('.gallery-item').removeClass('selected');
						$(this).addClass('selected');
					})
					
					$(".size-label").click(function() {
						$(".size-label").removeClass("activeSize");
						$(this).addClass("activeSize");
					});
					$(".review-fit-button").click(function() {
						$(".review-fit-button").removeClass("activeFit");
						$(this).addClass("activeFit");
					});
				})
			</script>
			
			<!--code for fix add to bag and wishlist button-->
			<script>
				$(window).scroll(function() {
					var height = $(window).scrollTop();
					var btnHeight = ($("#absoluteButton").offset().top) - (window.outerHeight);
					if (height < btnHeight) {
						$("#phoneFixedButton").addClass('phoneFixedButton');
						} else {
						$("#phoneFixedButton").removeClass('phoneFixedButton');
					}
				});
			</script> 
			<!--qty button start-->
			<script>
				var QtyInput = (function() {
					var $qtyInputs = $(".qty-input");
					
					if (!$qtyInputs.length) {
						return;
					}
					
					var $inputs = $qtyInputs.find(".product-qty");
					var $countBtn = $qtyInputs.find(".qty-count");
					var qtyMin = parseInt($inputs.attr("min"));
					var qtyMax = parseInt($inputs.attr("max"));
					
					$inputs.change(function() {
						var $this = $(this);
						var $minusBtn = $this.siblings(".qty-count--minus");
						var $addBtn = $this.siblings(".qty-count--add");
						var qty = parseInt($this.val());
						
						if (isNaN(qty) || qty <= qtyMin) {
							$this.val(qtyMin);
							$minusBtn.attr("disabled", true);
							} else {
							$minusBtn.attr("disabled", false);
							
							if (qty >= qtyMax) {
								$this.val(qtyMax);
								$addBtn.attr("disabled", true);
								} else {
								$this.val(qty);
								$addBtn.attr("disabled", false);
							}
						}
					});
					
					$countBtn.click(function() {
						var operator = this.dataset.action;
						var $this = $(this);
						var $input = $this.siblings(".product-qty");
						var qty = parseInt($input.val());
						
						if (operator == "add") {
							qty += 1;
							if (qty >= qtyMin + 1) {
								$this.siblings(".qty-count--minus").attr("disabled", false);
							}
							
							if (qty >= qtyMax) {
								$this.attr("disabled", true);
							}
							} else {
							qty = qty <= qtyMin ? qtyMin : (qty -= 1);
							
							if (qty == qtyMin) {
								$this.attr("disabled", true);
							}
							
							if (qty < qtyMax) {
								$this.siblings(".qty-count--add").attr("disabled", false);
							}
						}
						
						$input.val(qty);  
					});
				})();
				
				function couponModal(id){
					$("#myModal .modal-dialog").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ViewCoupon/') ?>" + id); 
				}
			</script>
			<?php
				$Offercount=0;
				foreach($couponProduct as $each)
				{
					$coupon=$this->db->get_where('tbl_coupon',array('id'=>$each->coupon_id))->row();
					$start = strtotime($coupon->start_date);
					$end = strtotime($coupon->end_date);
					$today=time();
					if($today >= $start and $today < $end){ 
						$Offercount++;
					}
				}
				
				$segid = $this->uri->segment('4');
				
				$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$segid,'is_combo'=>'false','is_status'=>'true'))->row(); 
				$minRating=$this->db->select_min('rating')->get_where('tbl_review',array('product_id'=>$segid,'is_combo'=>'false','is_status'=>'true'))->row(); 
				$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$segid, 'is_combo'=>'false','is_status'=>'true'))->num_rows();
				$totalRating=0;
				if(!empty($countReview) AND !empty($ratingCount)){
					$totalRating=$ratingCount->rating/$countReview; 
					$totalRating=round($totalRating,1);
				} 
				
				$reviews=$this->db->order_by('id','DESC')->limit(5)->get_where('tbl_review',array('product_id'=>$segid, 'is_combo'=>'false','is_status'=>'published'))->result();
				// $reviews=$this->db->order_by('id','DESC')->limit(5)->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'false','is_status'=>'published'))->result();
				$reviewdata='';
				if(!empty($reviews)){ 
					foreach($reviews as $review){
						$reviewdata.='{
						"@type": "Review",
						"name": "'.$review->name.'",
						"reviewBody": "'.$review->title.'",
						"reviewRating": {
						"@type": "Rating",
						"ratingValue": "'.$review->rating.'", 
						"bestRating": "5",
						"worstRating": "1"
						},
						"datePublished": "'.date('d-m-Y',strtotime($review->created_at)).'",
						"author": {"@type": "Person", "name": "Anshul Gupta"},
						"publisher": {"@type": "Organization", "name": "Anshul Gupta"}
						},'; 
					}
				}
			?>
			
			<script type="application/ld+json">
				{
					"@context": "https://schema.org/", 
					"@type": "Product", 
					"name": "<?=$list->name?>",
					"image": "<?= base_url('uploads/product/'.$icons[0])?>",
					"description": "<?=$list->title?>",
					"brand": {
						"@type": "Brand",
						"name": "<?php echo !empty($brand->name)?ucfirst($brand->name):''?>"
					},
					"sku": "<?php echo !empty($list->skuid)?$list->skuid:''?>",
					"offers": {
						"@type": "AggregateOffer",
						"url": "<?=base_url('Home/ProductDetails/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>",
						"priceCurrency": "INR",
						"lowPrice": "<?=$list->min_sell_price?>",
						"highPrice": "<?=$list->reg_sell_price?>",
						"offerCount": "5"
					},
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "<?php echo !empty($totalRating)?$totalRating:4;?>",
						"ratingCount": "<?php echo !empty($countReview)?$countReview:1;?>",
						"reviewCount": "<?php echo !empty($countReview)?$countReview:1;?>" 
					},
					"review": [<?=$reviewdata?>] 
				}
			</script>
		</body>
	</html>
