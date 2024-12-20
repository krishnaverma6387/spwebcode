
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
		<link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/flyingHeart.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/reset.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/jquery-picZoomer.css">
		<link rel="stylesheet" type="text/css" href="css/jquery-picZoomer.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
		
		
		<style>
			#btnSubmit:hover{
			background:#FA057E!important;
			color:black!important;
			}	
			.bi-x-lg:hover{
			color:#FA057E!important;
			}
			@media only screen and (min-width : 280px) and (max-width : 600px){
			.hide_in_mobile{
			display:none!important;
			}
			.hide_desktop{
			display:block!important;
			}
			
			
			}
			.hidearea_mobile{
			display:none;
			}
			.hide_desktop{
			display:none;
			}
			
			
			@media only screen and (min-device-width : 320px) and (max-device-width : 900px){
			#infobtn2{
			font-size: 10px!important;
			}
			#infobtn1{
			font-size: 10px!important;
			}
			.mysize{
			font-size: 8px!important;
			}
			.paragraph {
			font-size: 10px!important;
			font-weight: 500;
			text-align: justify!important;
			}
			.subheading {
			font-weight: bold;
			font-size: 11px!important;
			}
			}
			
			/* @media only screen and (min-width: 600px) and (orientation: landscape) {
			.heading{
			font-size: 15px!important;
			}
			.paragraph{
			font-size: 10px!important;
			font-weight: 500;
			text-align: justify;
			}
			.subheading{
			font-weight: bold;
			font-size: 11px!important;
			}
			} */
			
			
			/* Creatig css for details page start  */
			
			.heading{
			font-size: 18px!important;
			}
			.paragraph{
			font-size: 13px;
			font-weight: 500;
			text-align: justify;
			}		
			.subheading{
			font-weight: bold;
			font-size: 16px;
			}	
			/* Creatig css for details page  end */
			.selectsize:hover{
		    background:#E9ECEF;
			}
			@media only screen and (max-width: 460px)   {
			.findsizeimg{
			height: 100px!important;
			margin-top: -30px;
			}
			.figureimg{
			height:100px!important;
			}
			.backrow{
			margin-top: 0px!important;
			}
			.scrollrow{
			margin-left:0px!important;			
			}
			.switcher .slide-toggle {
			position: absolute;
			left: -30px;
			background-color: #333;
			color: #fff;
			top: 105px;
			width: 30px;
			height: 30px;
			padding: 0;
			}	
			}		
			.beautytxt{
			font-size: 14px;
			padding: 1px;
			}			
			@media screen and (min-device-width: 280px) and (max-device-width: 740px) { 
			.dressingtxt {
			font-size: 11px!important;
			}
			.beautytxt{
			font-size: 12px!important;
			padding: 0px;
			}
			#mySidenav {
			width: 278px!important;
			}
			.switcher2 {
			margin-top: 31px!important;
			-webkit-box-shadow: 0 0 4px 2px rgb(51 51 51 / 6%);
			box-shadow: 0 0 4px 2px rgb(51 51 51 / 6%);
			padding: 25px 30px 27px 29px;
			z-index: 1;
			position: fixed;
			top: 303px!important;
			background-color: #fff;
			width: 280px;
			right: -280px;
			-webkit-transition: all .25s ease-out;
			-o-transition: all .25s ease-out;
			transition: all .25s ease-out;
			}			
			}
			@media only screen and (max-width: 280px)   {
			.dressingtxt {
			font-size: 7px!important;
			}
			.beautytxt{
			font-size: 9px!important;
			}
			}			
			.figureimg{
			height:240px;
			}		
			.slick-prev, .slick-next {
			font-size: 0;
			line-height: 0;
			position: absolute;
			top: 35%!important;
			display: block;
			width: 26px;
			height: 26px;
			padding: 0;
			-webkit-transform: translate(0, -50%);
			-ms-transform: translate(0, -50%);
			transform: translate(0, -50%);
			cursor: pointer;
			color: transparent;
			border: none;
			outline: none;
			background: #8834AD;
			border-radius: 50%:
			}
			#mySidenav{
			width: 410px;
			display:none;			
			}
			#myPrivacynav{
			width: 410px;
			display:none;			
			}
			@media only screen and (min-width: 280px) and (max-width: 1200px)  { 
			#likebtn{
			margin-left:-40px!important;
			}	
			#modalinfotxt{
			margin-left:0px!important;
			font-size: 6px!important;
			}
			}
			/*@media only screen and (max-width: 1200px)   { 
			#likebtn{
			margin-left:-13px!important;
			}	
			#modalinfotxt{
			margin-left:0px!important;
			}
			}*/			
			#modalinfotxt{
			margin-left:0px!important;
			}
			}			
			#btnSubmit:hover{
			background-color:#FF1493!important;
			}			
			.ratingarea:hover{
			background:#E9ECEF;
			}
			.biicon:hover{
			color: #F83D7B!important;
			}
			#myPrivacynav::-webkit-scrollbar {
			width: 4px;
			}			
			.pro-title{
			font-weight:normal!important;
			}
			td:hover{
			background:#D4E0ED!important;
			}
			.mobileview{
			display:none;
			}			
			@media only screen and (max-width: 700px) {
			.mobileview{
			display:block;
			}
			.laptopview{
			display:none;
			}
			.colorul {
			list-style: none;
			padding: 24px;
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			grid-gap: 10px;
			}
			}		
			@media only screen and (max-width: 1024px) {
			.mobileview{
			display:block;
			}
			.laptopview{
			display:none;
			}
			}			
			.dropdown-toggle::after{
			right: 11px;
			bottom: 19px;
			}
			#toggleRating{
			display:none;
			}	
			.table th, .table td {
			padding-left: 27px!important;
			}
			.table th, .table td : hover{
			border:1px solid black!important;
			color: red !important;
			}
			.piclistscroll::-webkit-scrollbar-track
			{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			}		
			.piclistscroll::-webkit-scrollbar
			{
			width: 1px;
			background-color: #F5F5F5;
			}			
			.piclistscroll::-webkit-scrollbar-thumb
			{
			background-color: #000000;
			}		
			.piclistscroll{
			overflow-y:scroll;
			height:510px;
			}		
			.piclist{
			display: flex;
			flex-direction: column-reverse;
			align-items: flex-end!important;
			align-content: flex-start;
			margin-top:-4px;			
			}
			.piclist li{
			display: inline-block;
			width: 55px;
			height: 70px;
			}
			.piclist li img{
			width: 100%;
			height:70px;
			padding:1px;		
			}
			/*.piclist li img:hover{
			border:1px solid black;
			}*/
			.piclist li:hover{
			// border:1px solid black;
			}			
			/* custom style */
			.picZoomer-pic-wp,
			.picZoomer-zoom-wp{
			border: 1px solid #fff;
			}			
			.shapimg:hover{
			border: 1px solid black;
			}
			@media only screen and (max-width: 460px) {
			.leftscroll {
			height: 305px!important;
			overflow-y: hidden;
			overflow-x: hidden;
			margin-top: -55px!important;
			}
			}
			.product article .pro-thumb .pro-buttons .pro-icons {
			margin-top: 100px!important;
			}		
			.input-group-text:hover{
			background:#EB0577;
			color:white;
			}
			.modal-xl {
			max-width: 100%!important;
			height: auto;
			}			
			.icon {
			font-size: 2rem;
			}	
			.dot-thumb{
			height: 60px;
			position: relative;
			top: -135px;
			left: 378px;
			}
			#giftModal-header{
			padding: 8px!important;
			border-bottom: 0px solid #ddd !important;
			}	
			#giftSection{
			display: none;
			}
			#scrollablesection
			{
			height: 600px;
			overflow-y: scroll; 
			overflow-x: hidden;
			}
			
			#scrollablesection::-webkit-scrollbar-track
			{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			}
			
			#scrollablesection::-webkit-scrollbar
			{
			width: 1px;
			background-color: #F5F5F5;
			}
			
			#scrollablesection::-webkit-scrollbar-thumb
			{
			background-color: #000000;
			}
			
			.progress{
			height: 6px!important;
			}
			.progress-bar{
			background-color: #8340A1 !important;
			}
			.leftscroll{
			height: 500px;
			overflow-y: hidden; 
			overflow-x: hidden;
			}
			
			.leftscroll::-webkit-scrollbar-track
			{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			}
			
			.leftscroll::-webkit-scrollbar
			{
			width: 1px;
			background-color: #F5F5F5;
			}
			
			.leftscroll::-webkit-scrollbar-thumb
			{
			background-color: #000000;
			}
			
			hidearea2{
			height: 500px;
			overflow-y: hidden; 
			overflow-x: hidden;
			}
			
			.hidearea2::-webkit-scrollbar-track
			{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			}
			
			.hidearea2::-webkit-scrollbar
			{
			width: 0px;
			background-color: #F5F5F5;
			}
			
			.hidearea2::-webkit-scrollbar-thumb
			{
			background-color: #000000;
			}
			
			
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
			/* #main {
			transition: margin-left .5s;
			padding: 20px;
			} */
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
			#beautytips{
			position: ;
			margin-top: -150px;
			margin-left: -25px; 	
			}
		</style>
		<style>
			.color-card {
			background-color: #fafafa;
			border-radius; 
			padding: 20px; 
			box-shadow: 0 30px 30px -15px rgba(0,0,0, 0.3);
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			}
			
			p {
			/* text-transform: uppercase;*/
			letter-spacing: 1px;
			font-weight: bold;
			}
			
			.colorul {
			list-style: none;
			padding: 24px;
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			grid-gap: 20px;
			}
			
			.colorul li {
			width: 24px;
			height: 24px;
			border-radius: 50%;
			cursor: pointer;
			transition: transform 0.3s;
			}
			
			.colorul li:hover {
			transform: scale(1.5);
			}
			
			#red {
			background-color: #f05a4b;
			}
			
			#green {
			background-color: #61cc71;
			}
			
			#yellow {
			background-color: #fed772;
			}
			
			#orange {
			background-color: #ffba4f;
			}
			
			#blue {
			background-color: #a1b5ed;
			}
			
			
			.faq-section .mb-0 > a {
			display: block;
			position: relative;
			}
			
			.faq-section .mb-0 > a:after {
			content: "#8340A1f067";
			font-family: "Font Awesome 5 Free";
			position: absolute;
			right: 0;
			font-weight: 600;
			}
			
			.faq-section .mb-0 > a[aria-expanded="true"]:after {
			content: "#8340A1f068";
			font-family: "Font Awesome 5 Free";
			font-weight: 600;
			}
			
			
			.gallery-item .selected{
			border:3px solid #3498db;
			}
			.gallery-item img.selected{-webkit-filter: brightness(0.8);}
			
			.gallery-item img{
			width:99%;
			border:3px solid transparent;
			transition:filter .2s, border .2s;
			border-radius:3px;
			}
			
			.gallery-item{
			padding:0;}
			
			#blinkgift{
			color: #F83D7B;
			transition: 0.5s;
			}
			.hidearea{
			display:none;
			}
			
			.slider-for-vertical {
			float: right;
			width: calc( 93% - 30px) !important;
			margin-left: 0px !important;
			}
			
			/*Share icon css start*/
			.dropdown {
			position: relative;
			display: inline-block;
			}
			
			.dropdown-content {
			display: none;
			position: absolute;
			min-width: 50px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 999;
			line-height: 43px;
			margin-left:-25px!important;
			}
			
			.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			}
			.dropdown-content a:hover {background-color: #FA057E; color:white;}
			.dropdown:hover .dropdown-content {display: block; background:white;}
			/*Share icon css end*/
			.leftverticalslider{
			display:none;
			}
			.slider-wrapper:hover .leftverticalslider{
			display:block;
			background:white;
			}
			.hidearea2{
			display:none;
			}
			@media only screen and (max-width: 460px) {
			#beautytips {
			margin-left: -15px;
			}
			}
			
			#main #faq .card {
			border-bottom : 1px solid gray;
			}
			
			#main #faq .card .card-header {
			border: 0;
			padding: 0;
			}
			
			#main #faq .card .card-header .btn-header-link {
			color: #fff;
			display: block;
			text-align: left;
			background: #f7f7f9;
			color: black;
			padding: 20px;
			}
			.collapesces:hover{
			background: #f7f7f9;
			}
			
			#main #faq .card .card-header .btn-header-link:after {
			content: "\f107";
			font-family: 'Font Awesome 5 Free';
			font-weight: 900;
			float: right;
			color: black;
			}
			
			#main #faq .card .card-header .btn-header-link.collapsed {
			background:white;
			color: #black;
			}
			
			#main #faq .card .card-header .btn-header-link.collapsed:after {
			content: "\f106";
			color: black;
			}
			
			#main #faq .card .collapsing {		
			line-height: 30px;
			}
			
			#main #faq .card .collapse {
			border: 0;
			}
			
			#main #faq .card .collapse.show {	
			line-height: 30px;
			color: #222;
			}
			.card-header: hover{
			background: red;
			}
			.changetextcolor:hover. hidebtn{
			color: #F96A7C!important;
			}
			.hidebtn{	
			}
			.changetextcolor: hover .hidebtn{
			display:block !important;			
			}
			
			.bn30 {
			border: 5em;
			cursor: pointer;
			outline: none;
			font-size: 16px;
			/*-webkit-transform: translate(0);
			transform: translate(0);8?
			/*background-image: linear-gradient(45deg, #4568dc, #b06ab3);*/
			padding: 0.7em 2em;
			border-radius: 65px;
			/*box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
			/*-webkit-transition: box-shadow 0.25s;*/
			transition: box-shadow 0.25s;*/
			color: black;
			background: white;
			}
			
			.bn30 .text {
			background-clip: text;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			/*background-image: linear-gradient(45deg, #4568dc, #b06ab3);*/
			}
			
			.bn30:after {
			content: "";
			border-radius: 18px;
			position: absolute;
			margin: 4px;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			z-index: -1;
			background: #fff;
			}
			
			.bn30:hover {
			/*background-image: linear-gradient(-45deg, #4568dc, #b06ab3);*/
			/*box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);*/
			}
			
			.bn30:hover .text {
			/*background-image: linear-gradient(-45deg, #4568dc, #b06ab3);8?
			}
			
			button:focus {
			outline: 0px!important;
			outline: none!important;
			}
			
			
			
			.bi:hover{
			color: white;
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
						<li class="breadcrumb-item active" aria-current="page">Product Details</li>
					</ol>
					<div class="row">
						<div class="col-sm-6 col-6">
							<a href="javascript:void(0)" class="prevbtn"><button class="bn30"> <i class="fas fa-angle-left"></i>&ensp;<span class="appendtext "></span> </button></a>
							
							
						</div>	
						<div class="col-sm-6 col-6">
							<a href="javascript:void(0)" class="nxtbtn float-right"><button class="bn30"> <span class="appendnext"></span> <i class="fas fa-angle-right"></i>&ensp; </button></a>
						</div>	
					</div>
				</div>
				
			</nav>
		</div> 
		
		
		<!-- Site Content -->
		<section class="pro-content product-content product-page-three " style="padding-top: 20px;">
			<div class="container" style="max-width:98%"> 
				
				<div class="product-detail-info">
					<div class="row ">
						<div class="col-12 col-sm-12 product-submain">
							<div class="row">
								
								
								<div class="col-sm-4 ">
									
									<div class="float-right">
										<span class="bi bi-gift" id="blinkgift" data-toggle="tooltip" data-placement="top" title="Gift Wrap" onclick="giftWrap()"></span>&nbsp;
										<div class="dropdown">
											
											<span class="bi bi-share  ml-1 dropbtn" data-toggle="tooltip" data-placement="top" title="Share" ></span>
											<div class="dropdown-content">
												<a href="#"><i class="fab fa-facebook-f ml-1"></i></a>
												<a href="#"><i class="bi bi-instagram"></i></a>
												<a href="#"><i class="bi bi-whatsapp"></i></a>
											</div>
										</div>
									</div>
									
									<div class="row" id="giftSection">
										<div class="col-sm-9">
											<div class="card shadow">
												<div class="card-body">
													<span class="float-right"><i class="bi bi-x-lg" onclick="closeGiftWrap()" ></i></span>
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
									<div class="card p-2" style="border:none; ">
										<ul class="colorul">
											<li class="color-item" id="red"></li>
											<li class="color-item" id="green"></li>
											<li class="color-item" id="yellow"></li>
											<li class="color-item" id="orange"></li>
											<li class="color-item" id="blue"></li>
										</ul>
									</div>
									<br>
									<div class="row  hide_in_mobile">
										<div class="col-sm-9 p-4  leftscroll">
											<div class=" row ml-3 scrollrow">
												<div class="col-sm-12">
													<h2 class="heading" style="text-transform:uppercase">Expert Advice</h2>
													<p class="subheading">MATERIALS</p>
													<p class="paragraph" >We work with monitoring programmes to ensure compliance with safety, health and quality standards for our products. </p> 
													<p class="paragraph" >The Green to Wear 2.0 standard aims to minimise the environmental impact of textile manufacturing. To that end. </p>
													
													<div class="hidearea">
														<span class="subheading" >OUTER SHELL</span> <br>
														<span class="paragraph">63% polyester · 31% polyamide · 6% elastane</span> <br>
														
														<p class="subheading" >RECYCLED POLYESTER</p> 
														<p class="paragraph">Recycled polyester is produced from recycled PET plastic, such as that found in plastic bottles.</p>
														<p class="paragraph">Whenever you throw a plastic bottle into a recycling bin, it is taken to a waste separation and classification plant. These plants separate the different types of plastic and give it a better purpose. The PET plastic is cleaned, shredded and recycled into a new recycled polyester fibre.</p>
														<p class="paragraph" >As a result, we are able to give new life to plastic waste and reduce the consumption of virgin raw material through a process that consumes less water and less energy and generates less waste.</p>
														<p class="paragraph">The recovered thread has characteristics similar to virgin polyester: it is strong, resistant and long-lasting and can always be recycled again.</p>
														<span class="subheading" >CERTIFICATIONS</span> <br>
														<p class="paragraph" >We only use recycled polyester certified by organisations which monitor the process from the source to the final product. At present, we work with</p>
														
														<span class="paragraph">Global Recycled Standard (GRS)</span> <br>
														<span class="paragraph">Recycled Content Standard (RCS)</span> <br>
														<span class="paragraph">ENVIRONMENTAL BENEFITS</span> <br> <br>
														
														<img src="https://i.gifer.com/URQc.gif" class="img-fluid" style="height: 250px; width:100%;">
														</br>
														<p class="subheading">ORIGIN</p>
														<p class="paragraph">
														We work alongside our suppliers, workers, unions and international bodies to develop a supply chain that respects and promotes human rights, contributing to the United Nations Sustainable Development Goals. </p>
														<p class="paragraph">
														Additionally, thanks to an ongoing collaboration with our suppliers, we have developed a tracking programme that allows us to determine where and how our products are being made.</p>
														
														<p class="subheading">Care</p>
														<p class="paragraph">
														Caring for your clothes is caring for the environment. </p>
														<p class="paragraph">
														Lower temperature washes and delicate spin cycles are gentler on garments and help to protect the colour, shape and structure of the fabric. Furthermore, they reduce the amount of energy used in care processes.</p>
														
													</div>
													<a href="javascript:void(0)" class="font-weight-bold" id="expandHideArea" style=" font-size:11px;">View More</a> <br>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 ">
									<div class="row">
										<div class="col-sm-8 col-12 laptopview">
											<div class="row ">
												<div class="col-3 col-sm-3 p-1 piclistscroll">
													<ul class="piclist">
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_5.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_2.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_1.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_5.jpg?rnd=20200526195200" alt=""></li>
														<li><img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200" alt=""></li>
													</ul>  
												</div>	
												<div class="col-9 col-sm-9" style="padding-left:1px;">
													<div class="picZoomer" style="height: 400px;width: 100%">
														<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_1.jpg?rnd=20200526195200" style="height: 510px; width: 100%" alt="" class="mainimg">
													</div>	
													
												</div>	
											</div>
										</div>
										<!--check here this section  --->
										<div class="col-sm-12 mobileview ">
											<!--new mobile view carousal start-->
											
											<div class="tab-carousel-js-single row ">                         
												<div class="col-12 col-sm-6 col-md-4 col-lg-3">
													<div class="product">
														<article>
															<div class="pro-thumb "> 
																<a  data-fancybox="gallery" data-src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_5.jpg?rnd=20200526195200">
																	<span class="pro-image">
																		<img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_5.jpg?rnd=20200526195200" alt="Product Image">
																	</span>
																</a>
															</div>
														</article>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-4 col-lg-3">
													<div class="product">
														<article>
															<div class="pro-thumb "> 
																<a  data-fancybox="gallery" data-src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200">
																	<span class="pro-image">
																		<img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200" alt="Product Image">
																	</span>
																</a>
															</div>
														</article>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-6 col-md-4 col-lg-3">
													<div class="product">
														<article>
															<div class="pro-thumb "> 
																<a  data-fancybox="gallery" data-src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200">
																	<span class="pro-image">
																		<img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_3.jpg?rnd=20200526195200" alt="Product Image">
																	</span>
																</a>
															</div>
														</article>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-4 col-lg-3">
													<div class="product">
														<article>
															<div class="pro-thumb "> 
																<a  data-fancybox="gallery" data-src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_2.jpg?rnd=20200526195200">
																	<span class="pro-image">
																		<img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-960,/pub/media/catalog/product/3/b/3b0c950S2LIK562_2.jpg?rnd=20200526195200" alt="Product Image">
																	</span>
																</a>
															</div>
														</article>
													</div>
												</div>
											</div>
											
											<!--new mobile view carousal end-->
										</div>
										<!--check here--->
									</div>
									
									<div class="row mt-1">
										<div class="col-sm-3 col-3 mt-2">
											<a href="javascript:void(0);" style="font-size: 8px; font-weight:900; margin-left:10px;"  id="modalinfotxt" data-toggle="modal" data-target="#modalinfo" >Modal Info</a>
										</div>
										<div class="col-sm-9 col-9 mt-2">
											<p class="text-center mr-4"><button class="btn btn-secondary " id="likebtn"  style="border-radius: 25px; font-size: 10px; margin-left: -89px;"><i class="bi bi-suit-heart biicon"></i>&nbsp;Like 323</button></p>	
										</div>
									</div>
									<div class="row my-2">
										<div class="col-md-4 col-sm-6 col-6 mt-3">
											<h2 class="text-uppercase beautytxt">Beauty Tips</h2>
											<a href="javascript:void(0)" onclick="OpenTipsModal()" > <img src="https://d5nunyagcicgy.cloudfront.net/external_assets/hero_examples/hair_beach_v391182663/original.jpeg"class="img-fluid" style="width: 100%; height: 120px;"></a>
										</div>
										<div class="col-6 col-md-8 col-sm-6 tabs-product mt-3">
											<h2 class="text-uppercase dressingtxt">Dressing Sense Tips </h2>
											<div class="blog-carousel-js-new row">                         
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															<img class="img-fluid swipe-to-top" src="<?= base_url('public/') ?>images/blogs/blog_post_1.jpg" alt="Image" style="height: 120px">
														</a>
													</div>
												</div>
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_2.jpg" alt="Image" style="height: 120px">
														</a>
													</div>
												</div>
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_3.jpg" alt="Image" style="height: 120px">
														</a>
													</div>
												</div>
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_4.jpg" alt="Image" style="height: 120px"> 
														</a>
													</div>
												</div>
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															
															<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_5.jpg" alt="Image" style="height: 120px">
														</a>
													</div>
												</div>
												<div class="col-6 col-md-3 pro-blog">
													<div class="pro-thumb">
														<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
															<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_6.jpg" alt="Image" style="height: 120px">
														</a>
													</div>
												</div>
											</div>
										</div> 
									</div>
								</div>
								
								<div class="col-sm-4 p-4" >
									
									<!--show only mobile view--->
									
									<div class="row hide_desktop">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-12">
													<h2 class="heading" style="text-transform:uppercase">Expert Advice</h2>
													<p class="subheading">MATERIALS</p>
													<p class="paragraph" >We work with monitoring programmes to ensure compliance with safety, health and quality standards for our products. </p> 
													<p class="paragraph" >The Green to Wear 2.0 standard aims to minimise the environmental impact of textile manufacturing. To that end. </p>
													
													<div class="hidearea_mobile">
														<span class="subheading" >OUTER SHELL</span> <br>
														<span class="paragraph">63% polyester · 31% polyamide · 6% elastane</span> <br>
														
														<p class="subheading" >RECYCLED POLYESTER</p> 
														<p class="paragraph">Recycled polyester is produced from recycled PET plastic, such as that found in plastic bottles.</p>
														<p class="paragraph">Whenever you throw a plastic bottle into a recycling bin, it is taken to a waste separation and classification plant. These plants separate the different types of plastic and give it a better purpose. The PET plastic is cleaned, shredded and recycled into a new recycled polyester fibre.</p>
														<p class="paragraph" >As a result, we are able to give new life to plastic waste and reduce the consumption of virgin raw material through a process that consumes less water and less energy and generates less waste.</p>
														<p class="paragraph">The recovered thread has characteristics similar to virgin polyester: it is strong, resistant and long-lasting and can always be recycled again.</p>
														<span class="subheading" >CERTIFICATIONS</span> <br>
														<p class="paragraph" >We only use recycled polyester certified by organisations which monitor the process from the source to the final product. At present, we work with</p>
														
														<span class="paragraph">Global Recycled Standard (GRS)</span> <br>
														<span class="paragraph">Recycled Content Standard (RCS)</span> <br>
														<span class="paragraph">ENVIRONMENTAL BENEFITS</span> <br> <br>
														
														<img src="https://i.gifer.com/URQc.gif" class="img-fluid" style="height: 250px; width:100%;">
														</br>
														<p class="subheading">ORIGIN</p>
														<p class="paragraph">
														We work alongside our suppliers, workers, unions and international bodies to develop a supply chain that respects and promotes human rights, contributing to the United Nations Sustainable Development Goals. </p>
														<p class="paragraph">
														Additionally, thanks to an ongoing collaboration with our suppliers, we have developed a tracking programme that allows us to determine where and how our products are being made.</p>
														
														<p class="subheading">Care</p>
														<p class="paragraph">
														Caring for your clothes is caring for the environment. </p>
														<p class="paragraph">
														Lower temperature washes and delicate spin cycles are gentler on garments and help to protect the colour, shape and structure of the fabric. Furthermore, they reduce the amount of energy used in care processes.</p>
														
													</div>
													<a href="javascript:void(0)" class="font-weight-bold" id="SlideToggle" style=" font-size:11px;">View More</a> <br>
												</div>
											</div>
										</div>
									</div>
									
									
									<!--show only mobile view--->
									
									
									<div class="pro-desc my-3" >
										<h2 class="heading">BESTSELLER | EXPRESS SHIPPING</h2> 
										
										<p class="paragraph" >We work with monitoring programmes to ensure compliance with safety, health and quality standards for our products. </p>
										
										
										<div class="hidearea2" >
											<span class="subheading">UPPER</span><br>
											<span class="paragraph">100% goat leather</span><br>
											<span class="subheading" >LINING</span><br>
											<span class="paragraph">100% goat leather</span><br>
											<span class="subheading">SOLE</span><br>
											<span class="paragraph">100% vulcanized rubber</span><br>
											<span class="subheading">INSOLE</span><br>
											<span class="paragraph">100% vulcanized rubber</span> <br>
											<span class="paragraph">Simple steps like cleaning your clothing with a dry cotton cloth or a soft brush, depending on the characteristics of the product, can help you care for it. Whenever possible, try to use products that are respectful of the environment.</span>
										</div>
										<a href="javascript:void(0)" class="font-weight-bold" id="expandHideArea2" style="font-size:11px;">View More</a> <br>
										
										
										</br>
										<p class="subheading">BLACK | 21200/878</p>
										<span class="paragraph">₹ 20000</span> <span class="text-success paragraph">66 % Off</span> <br>
										<span class="paragraph">MRP <del>₹30000</del> incl. of all taxes</span>
										<br></br>
										
										<p class="subheading"><span><a href="#"><i class="fas fa-crown" style="color: #8340A1" ></i></a>  Royal customer price:</span></p>
										<span class="paragraph">₹ 20000</span> <span class="text-success paragraph">66 % Off</span> <br>
										
										<br>
										
										<!--select image start-->
										<div class="row  hide_in_mobile">
											<div class="col-sm-12">
												<p class="subheading">Select Colour</p>
												<div class="panel-body row p-2" data-selection="single"  data-image-size="small">
													<div class="gallery-item col-sm-3 col-3 ">
														<img src="https://us.123rf.com/450wm/nikiteev/nikiteev1810/nikiteev181000131/109758880-vector-cartoon-illustration-pink-polo-shirt.jpg?ver=6" class="selected img-fluid">
													</div>
													<div class="gallery-item col-sm-3 col-3">
														<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRneZVFz2fJJ732Y--br85Zdnh-e2Nw5lBws0j7LPqswXHoGPKWWkc9B85mnHsUVeNIqlk&usqp=CAU" class="img-fluid" >
													</div>
													<div class="gallery-item col-sm-3 col-3">
														<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOS53VUXEoA6PP12T2mZ1p1kqqhWnK6ZLuhQfhnkcIGcDDBqIlTxhIKb8ieLpKsAA8Zb0&usqp=CAU" class="img-fluid" >
													</div>
													<div class="gallery-item col-sm-3 col-3">
														<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV6p2fyV8gh1AepnwUsuuzlQAXNTdxzO13Qy3UkAXEsS1dOgAgSxJEdzHBeRyo-zKQdBc&usqp=CAU" class="img-fluid" >
													</div>
													
												</div>
												
											</div>	
										</div>
										
										<!--select image end-->
										</br>
										<div class="form-group">
											<span class="subheading">DELIVERY OPTIONS</span>	
											<i class="bi bi-truck biicon"></i>
											<div class="input-group mb-3">
												<input type="text" class="form-control" placeholder="Enter Pincode" aria-label="Username" aria-describedby="basic-addon1">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">Find</span>
												</div>
												<label class="paragraph">Please enter PIN code to check delivery time & Pay On Delivery Availability</label>
											</div>
										</div>
										
										<div class="row">
											<label class="subheading ml-3">Your recommended size : M</label>
											<div class="col-sm-12">
												<div class="row">
													<div class="col-sm-10 mx-auto border-top border-bottom  ">
														<div class="row p-1">
															<div class="col-sm-12 p-1 selectsize">
																<span>S</span><span class="float-right">only few left</span>  
															</div>
															<div class="col-sm-12 p-1 selectsize">
																<span>M</span><span class="float-right">only few left</span>  
															</div>
															<div class="col-sm-12 p-1 selectsize">
																<span>X</span>
															</div>
															<div class="col-sm-12 p-1 selectsize">
																<span>XXL</span>
															</div>
															<div class="col-sm-12 p-1 selectsize">
																<span>XL</span>
															</div>
														</div>
													</div>   
												</div>	
											</div>
										</div>
										<div class="mt-1">
											<a href="javascript:void(0)"  onclick="findSize()" style="font-weight: 600;" class="paragraph" >Find Your Size</a>
											<a href="javascript:void(0)" onclick="openNav()" style="font-weight: 600;" class="mt-1 paragraph float-right ">Size Guide</a>	
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-6 col-sm-12  col-12 p-1">
											<a href="<?= base_url('Home/Cart') ?>" class="btn btn-secondary btn-block"> Bag</a>
										</div>	
										<div class="col-sm-12 col-md-6 col-sm-12  col-12 p-1">
											<a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary btn-block">Wishlist</a>
										</div>	
									</div>
									<div class="row mt-2">
										<div class="col-sm-12">
											<p class="text-center"><button class="btn btn-success text-white"><i class="bi bi-whatsapp"></i>&nbsp;<a href="#" class="text-white" >beauty consultant</a></button></p>  
										</div>	
									</div>
									<a href="javascript:void(0)" class="paragraph"  onclick="openPrivacyNav()" >DELIVERY , EXCHANGE AND RETURNS</a>
									<hr>
									<div class="row">
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
									</div>
									<br>
									<!--beauty tips-->
									
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading text-uppercase">BEAUTY SUGGESTION</p> 
											<div id="main">
												<div class="container-fluid">
													<div class="accordion" id="faq">
														<div class="card card-hover" style="border: 0px; ">
															<div class="card-header collapesces" id="faqhead12">
																<a href="#" class="btn btn-header-link collapsed paragraph" data-toggle="collapse" data-target="#faq11"
																aria-expanded="true" aria-controls="faq11"><i class="bi bi-eye biicon"></i>&nbsp;BEAUTY TIPS</a>
															</div>
															
															<div id="faq11" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									
									<!--beauty tips-->
									<hr>
									
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading">PRODUCT INFORMATION</p> 
											<div id="main">
												<div class="container-fluid">
													<div class="accordion" id="faq">
														<div class="card card-hover" style="border: 0px; border-bottom:1px solid gray;">
															<div class="card-header collapesces" id="faqhead1">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
																aria-expanded="true" aria-controls="faq1"><span class="subheading "><i class="bi bi-box biicon"></i>&nbsp;Product Details</span></a>
															</div>
															
															<div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid;">
															<div class="card-header collapesces" id="faqhead2">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
																aria-expanded="true" aria-controls="faq2"><span class="subheading "><i class="bi bi-info-circle biicon"></i>&nbsp;Know your product</span></a>
															</div>
															
															<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px; border-bottom: 1px solid;">
															<div class="card-header collapesces" id="faqhead3">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
																aria-expanded="true" aria-controls="faq3"><span class="subheading "><i class="bi bi-person biicon"></i>&nbsp;Vendor details</span></a>
															</div>
															
															<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading" >About The Vendor Information</p>
										</div>
										
										<div class="col-lg-4 col-12">
											<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/category/tr:w-176,/IndiNside.jpg" class="img-fluid">
										</div>	 
										<div class="col-lg-8  col-12">
											<span class="paragraph">Established in 2018 by Akhil & Ankita. Indi Inside is a curated collection of local & contemporary ethnic handcrafted ensembles made in handloom.</span>  
										</div>	
									</div>
									<!--here-->
								</div>
							</div>
							
							
							
							<!---mobile View Section Start--->
							
							<div class="row my-2 d-none">
								<div class="col-sm-12">
									<h2 class="heading">BESTSELLER | EXPRESS SHIPPING</h2> 
									<p class="paragraph" >We work with monitoring programmes to ensure compliance with safety, health and quality standards for our products. </p>
									
									<div class="hidearea2" >
										<span class="subheading">UPPER</span><br>
										<span class="paragraph">100% goat leather</span><br>
										<span class="subheading" >LINING</span><br>
										<span class="paragraph">100% goat leather</span><br>
										<span class="subheading">SOLE</span><br>
										<span class="paragraph">100% vulcanized rubber</span><br>
										<span class="subheading">INSOLE</span><br>
										<span class="paragraph">100% vulcanized rubber</span> <br>
										<span class="paragraph">Simple steps like cleaning your clothing with a dry cotton cloth or a soft brush, depending on the characteristics of the product, can help you care for it. Whenever possible, try to use products that are respectful of the environment.</span>
									</div>
									<a href="javascript:void(0)" class="font-weight-bold" id="expandHideArea2" style="font-size:11px;">View More</a> <br>
									
									<p class="subheading">BLACK | 21200/878</p>
									<span class="paragraph">₹ 20000</span> <span class="text-success paragraph">66 % Off</span> <br>
									<span class="paragraph">MRP <del>₹30000</del> incl. of all taxes</span>
									<br></br>
									
									<p class="subheading"><span><a href="#"><i class="fas fa-crown" style="color: #8340A1" ></i></a>  Royal customer price:</span></p>
									<span class="paragraph">₹ 20000</span> <span class="text-success paragraph">66 % Off</span> <br>
									
									
									<!--select image start-->
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading">Select Colour</p>
											<div class="panel-body row p-2" data-selection="single"  data-image-size="small">
												<div class="gallery-item col-sm-3 col-3 ">
													<img src="https://us.123rf.com/450wm/nikiteev/nikiteev1810/nikiteev181000131/109758880-vector-cartoon-illustration-pink-polo-shirt.jpg?ver=6" class="selected img-fluid">
												</div>
												<div class="gallery-item col-sm-3 col-3">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRneZVFz2fJJ732Y--br85Zdnh-e2Nw5lBws0j7LPqswXHoGPKWWkc9B85mnHsUVeNIqlk&usqp=CAU" class="img-fluid" >
												</div>
												<div class="gallery-item col-sm-3 col-3">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOS53VUXEoA6PP12T2mZ1p1kqqhWnK6ZLuhQfhnkcIGcDDBqIlTxhIKb8ieLpKsAA8Zb0&usqp=CAU" class="img-fluid" >
												</div>
												<div class="gallery-item col-sm-3 col-3">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV6p2fyV8gh1AepnwUsuuzlQAXNTdxzO13Qy3UkAXEsS1dOgAgSxJEdzHBeRyo-zKQdBc&usqp=CAU" class="img-fluid" >
												</div>
											</div>
										</div>	
									</div>
									
									<!--select image end-->
									
									<div class="row my-1">
										<div class="col-sm-12">
											<span class="subheading">DELIVERY OPTIONS</span>	
											<i class="bi bi-truck biicon"></i>
											<div class="input-group mb-3">
												<input type="text" class="form-control" placeholder="Enter Pincode" aria-label="Username" aria-describedby="basic-addon1">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">Find</span>
												</div>
												<label class="paragraph">Please enter PIN code to check delivery time & Pay On Delivery Availability</label>
											</div>  
										</div>	
									</div>
									
									<div class="row">
										<label class="subheading ml-3">Your recommended size : M</label>
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-12  border-top border-bottom  ">
													<div class="row p-1">
														<div class="col-sm-12 p-1 selectsize">
															<span>S</span><span class="float-right">only few left</span>  
														</div>
														<div class="col-sm-12 p-1 selectsize">
															<span>M</span><span class="float-right">only few left</span>  
														</div>
														<div class="col-sm-12 p-1 selectsize">
															<span>X</span>
														</div>
														<div class="col-sm-12 p-1 selectsize">
															<span>XXL</span>
														</div>
														<div class="col-sm-12 p-1 selectsize">
															<span>XL</span>
														</div>
													</div>
												</div>   
											</div>	
										</div>
									</div>
									<div class="mt-1">
										<a href="javascript:void(0)"  onclick="findSize()" style="font-weight: 600;" class="paragraph" >Find Your Size</a>
										<a href="javascript:void(0)" onclick="openNav()" style="font-weight: 600;" class="mt-1 paragraph float-right ">Size Guide</a>	
									</div>
									<div class="row my-1">
										<div class="col-sm-6 p-1"><button class="btn btn-secondary btn-block"> Cart</button></div>	
										<div class="col-sm-6 p-1">
											<button class="btn btn-secondary btn-block">Wishlist</button>
										</div>	
									</div>
									<div class="row mt-1">
										<div class="col-sm-12">
											<p class="text-center"><button class="btn btn-success text-white"><i class="bi bi-whatsapp"></i>&nbsp;<a href="#" class="text-white" >beauty consultant</a></button></p>  
										</div>	
									</div>
									<a href="javascript:void(0)" class="paragraph"  onclick="openPrivacyNav()" >DELIVERY , EXCHANGE AND RETURNS</a>
									
									<hr>
									<div class="row">
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
										<div class="col-sm-12 mt-1">
											<div class="card" style="border:0px; border-bottom: 1px solid rgba(0, 0, 0, 0.125)">
												<div class="card-body">
													<p> <i class="bi bi-gift biicon"></i> &ensp; <span class="subheading">EXTRA Rs.300 Off</span>	 </p>
													<span class="paragraph">Use Code : NFSALE300 <i class="far fa-copy" title="Copy Code"></i> <br>for Extra  Rs. 300 off on orders above  Rs. 30000</span>
												</div>  
											</div>  
										</div>
									</div>
									
									
									<!--beauty tips-->
									
									<div class="row my-2">
										<div class="col-sm-12">
											<p class="subheading text-uppercase">BEAUTY SUGGESTION</p> 
											<div id="main">
												<div class="container-fluid">
													<div class="accordion" id="faq">
														<div class="card card-hover" style="border: 0px; ">
															<div class="card-header collapesces" id="faqhead12">
																<a href="#" class="btn btn-header-link collapsed paragraph" data-toggle="collapse" data-target="#faq11"
																aria-expanded="true" aria-controls="faq11"><i class="bi bi-eye biicon"></i>&nbsp;BEAUTY TIPS</a>
															</div>
															
															<div id="faq11" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									
									<!--beauty tips-->
									
									<hr>
									
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading">PRODUCT INFORMATION</p> 
											<div id="main">
												<div class="container-fluid">
													<div class="accordion" id="faq">
														<div class="card card-hover" style="border: 0px; border-bottom:1px solid gray;">
															<div class="card-header collapesces" id="faqhead1">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
																aria-expanded="true" aria-controls="faq1"><i class="bi bi-box biicon"></i>&nbsp;Product Details</a>
															</div>
															
															<div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid;">
															<div class="card-header collapesces" id="faqhead2">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
																aria-expanded="true" aria-controls="faq2"><i class="bi bi-info-circle biicon"></i>&nbsp;Know your product</a>
															</div>
															
															<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px; border-bottom: 1px solid;">
															<div class="card-header collapesces" id="faqhead3">
																<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
																aria-expanded="true" aria-controls="faq3"><i class="bi bi-person biicon"></i>&nbsp;Vendor details</a>
															</div>
															
															<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																<div class="card-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
																	moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
																	Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
																	shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
																	proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
																	aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12">
											<p class="subheading" >About The Vendor Information</p>
										</div>
										
										<div class="col-sm-4 col-4">
											<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/category/tr:w-176,/IndiNside.jpg" class="img-fluid">
										</div>	 
										<div class="col-sm-8  col-8">
											<span class="paragraph">Established in 2018 by Akhil & Ankita. Indi Inside is a curated collection of local & contemporary ethnic handcrafted ensembles made in handloom.</span>  
										</div>	
									</div>
									
									
									
									
								</div>	
							</div>
							
							
							
							
							
							
							<!---mobile View Section END--->
							
							
							<div class="mt-2">
								<div class="row justify-content-center">
									<div class="col-12 col-lg-6">
										<div class="pro-heading-title">
											<h1> MATCH WITH IT
											</h1>
											<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text  </span></center>
										</div>
									</div>
								</div>
								<div class="tab-carousel-js row">                         
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Ring Collection Test     111              
													</span>
													<h2 class="pro-title"><a href="#">Austrian Crystals Jewelry Engagement RingTest</a></h2>
													<!--p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p--->
													
													<div class="pro-price">
														<ins>₹285</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
														
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Earrings                   
													</span>
													<h2 class="pro-title"><a href="#">Crystal Water Drop Wedding Earrings</a></h2>
													
													<div class="pro-price">
														<del>₹450</del><ins>₹285</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>                             
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Ring Collection                          
													</span>
													<h2 class="pro-title"><a href="#">Crytal Wedding Engagement Rings</a></h2>
													
													<div class="pro-price">
														<del>₹120</del><ins>₹85</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Rings                   
													</span>
													<h2 class="pro-title"><a href="#">Women Wedding Zircon Engagement Ring</a></h2>
													
													<div class="pro-price">
														<del>₹120</del><ins>₹110</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Bangle                  
													</span>
													<h2 class="pro-title"><a href="#">Viennois Rose Gold Circle Bangle</a></h2>
													
													<div class="pro-price">
														<del>₹220</del><ins>₹185</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="fas fa-heart"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="fas fa-eye"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
														</div>
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Bracelet                 
													</span>
													<h2 class="pro-title"><a href="#">Bracelet for Women Metal Chain</a></h2>
													
													<div class="pro-price">
														<del>₹140</del><ins>₹81</ins>
													</div>
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
														
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Crown                 
													</span>
													<h2 class="pro-title"><a href="#">Gold Rhinestone Pageant Crown</a></h2>
													
													<div class="pro-price">
														<del>₹120</del><ins>₹85</ins>
													</div>
													
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="javascript:void(0)">
														<span class="pro-image"><img class="img-fluid" src="<?= base_url('public/') ?>images/product_images/product_image_08.jpg" alt="Product Image"></span>
														
													</a>
													<div class="pro-buttons">
														<div class="pro-icons">
															<a href="<?= base_url("Home/Wishlist") ?>" class="icon active swipe-to-top">
																<i class="bi bi-heart" style="font-size: 20px;"></i>
															</a>
															<div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
																<i class="bi bi-eye" style="font-size: 20px;"></i>
															</div>
															<a href="<?= base_url("Home/Compare") ?>" class="icon swipe-to-top">
																<i class="bi bi-arrow-down-up" style="font-size: 20px;"></i>
															</a>
														</div>
													</div>
													
												</div>
												<div class="pro-description">
													<span class="pro-info">
														Necklace123                 
													</span>
													<h2 class="pro-title"><a href="#">Hollow Heart Pendant Necklace for Women</a></h2>
													
													<div class="pro-price">
														<ins>₹85</ins>
													</div>
													
												</div>
												
											</article>
										</div>
									</div>
								</div>
								
							</div> 
							<!--more from collection -->
							<div class="related-product-content">
								<div class="row justify-content-center">
									<div class="col-12 col-lg-6">
										<div class="pro-heading-title text-left">
											<h2> MORE FROM THE COLLECTION
											</h2>
											<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text  </span></center>
										</div>
									</div>
								</div>
								<div class="tab-carousel-js row">                         
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="#">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
												</div>
												
												<div class="pro-description">
													<div class="row">
														<div class="col-sm-6 col-6">
															<span style="font-size: 12px; font-weight: 900">COMING SOON</span>
														</div>
														<div class="col-sm-6 col-6 text-right">
															<span class="badge p-1 hvr-buzz-out" style="border-radius: 5px; background: #8340A1; color:white " onclick="NotifyProduct()" >NOTIFY&nbsp; <i class="bi bi-bell-fill"></i></span>
														</div>
													</div>
													
													<p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p>
													
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													<a href="#">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
													</a>
												</div>
												<div class="pro-description">
													<div class="row">
														<div class="col-sm-6 col-6">
															<span style="font-size: 12px;font-weight: 900">COMING SOON</span>
														</div>
														<div class="col-sm-6 col-6 text-right">
															<span class="badge p-1 hvr-buzz-out" style="border-radius: 5px; background: #8340A1; color:white " onclick="NotifyProduct()" >NOTIFY&nbsp; <i class="bi bi-bell-fill"></i></span>
														</div>
													</div>
													<p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p>
													
												</div>
												
											</article>
										</div>
									</div>
									
									
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="#">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description">
													<div class="row">
														<div class="col-sm-6 col-6">
															<span style="font-size: 12px;font-weight: 900">COMING SOON</span>
														</div>
														<div class="col-sm-6 col-6 text-right">
															<span class="badge p-1 hvr-buzz-out" style="border-radius: 5px; background: #8340A1; color:white " onclick="NotifyProduct()" >NOTIFY&nbsp; <i class="bi bi-bell-fill"></i></span>
														</div>
													</div>
													
													<p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p>
													
													
													
												</div>
												
											</article>
										</div>
									</div>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													
													<a href="#">
														<span class="pro-image"><img class="img-fluid" src="https://adn-static1.nykaa.com/nykdesignstudio-images/tr:w-290.5,/pub/media/catalog/product/b/u/bul-bp21-009l_1_6c4c744f.jpg?rnd=20200526195200" alt="Product Image"></span>
														
													</a>
												</div>
												<div class="pro-description">
													<div class="row">
														<div class="col-sm-6 col-6">
															<span style="font-size: 12px;font-weight: 900">COMING SOON</span>
														</div>
														<div class="col-sm-6 col-6 text-right">
															<span class="badge p-1 hvr-buzz-out" style="border-radius: 5px; background: #8340A1; color:white " onclick="NotifyProduct()" >NOTIFY&nbsp; <i class="bi bi-bell-fill"></i></span>
														</div>
													</div>
													
													<p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p>
													
													
												</div>
												
											</article>
										</div>
									</div>
									
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="product">
											<article>
												<div class="pro-thumb "> 
													<a href="#">
														<span class="pro-image"><img class="img-fluid" src="<?= base_url('public/') ?>images/product_images/product_image_08.jpg" alt="Product Image"></span>
														<span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
															
														</a>
													</div>
													<div class="pro-description">
														<div class="row">
															<div class="col-sm-6 col-6">
																<span style="font-size: 12px;font-weight: 900">COMING SOON</span>
															</div>
															<div class="col-sm-6 col-6 text-right">
																<span class="badge hvr-buzz-out p-1" style="border-radius: 5px; background: #8340A1; color:white " onclick="NotifyProduct()" >NOTIFY&nbsp; <i class="bi bi-bell-fill"></i></span>
															</div>
														</div>
														<p class="font-weight-normal mt-1" style="font-size:14px;"><a href="#">Austrian Crystals Jewelry Engagement Ring</a></p>
														
													</div>
													
												</article>
											</div>
										</div>
									</div>
									
								</div> 
								<!-- check here-->
								<div class="related-product-content ">
									<div class="row justify-content-center">
										<div class="col-12 col-lg-6">
											<div class="pro-heading-title text-left">
												<h2 class="text-uppercase"> Product Review
												</h2>
												<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text  </span></center>
											</div>
										</div>
									</div>
									<div class="row "> 
										<div class="col-sm-4  hide_desktop">
											<img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid w-100">	
											<a href="#">Product Name</a>
											<a href="#" class="float-right mr-5">₹900</a>
										</div>
										<div class="col-sm-8 p-3">
											<div class="row">
												<div class="col-sm-12  bg-light ">
													<span style="color: #8340A1"><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i> &nbsp; 4.7 | <span style="color:#8340A1">11 Reviews</span></span> <br>
													<span style="font-weight: 700">2 out of 2 (100%) reviewers recommend this product</span>
													<hr>
													<div class="row">
														<div class="col-sm-5">
															<div class="input-group mb-2">
																<input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
																<div class="input-group-append">
																	<span class="input-group-text" style="background:#8340A1; color:white"><i class="bi bi-search"></i></span>
																</div>
															</div>
														</div>	
													</div>
												</div>	
												<div class="col-sm-12 mt-2">
													<div class="row">
														<div class="col-sm-6">
															<p style="font-weight: 800">Reviews</p>  
														</div>	
														<div class="col-sm-6">
															<p class="text-right"><button class="btn" data-toggle="modal" data-target="#ReviewModal" style="background:#8340A1;color:white; border-radius: 25px;">Write a review</button></p>  
														</div>	
													</div>	
												</div>
												<div class="col-sm-12 mt-2 ">
													<div class="row p-2">
														<div class="col-md-6 col-sm-12 col-12 p-1">
															<span style="font-weight: 600">Rating Snapshot</span> <br>
															<span style="font-weight: 500">Select a row below to filter reviews.<span>
																<br>
																<div class="row">
																	<div class="col-sm-10">
																		<div class="row mt-2 ratingarea">
																			<div class="col-sm-3 col-4"><span>5&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;" ></i></span></div>
																			<div class="col-sm-6 col-4 ">
																				<div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																			<div class="col-sm-3 col-4 ">8</div>
																		</div>
																		<div class="row mt-2 ratingarea">
																			<div class="col-sm-3 col-4"><span>4&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;" ></i></span></div>
																			<div class="col-sm-6 col-4">
																				<div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																			<div class="col-sm-3 col-4">3</div>
																		</div>
																		<div class="row mt-2 ratingarea">
																			<div class="col-sm-3 col-4"><span>3&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;" ></i></span></div>
																			<div class="col-sm-6 col-4">
																				<div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																			<div class="col-sm-3 col-4">0</div>
																		</div>
																		<div class="row mt-2 ratingarea">
																			<div class="col-sm-3 col-4"><span>2&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;" ></i></span></div>
																			<div class="col-sm-6 col-4">
																				<div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																			<div class="col-sm-3 col-4">0</div>
																		</div>
																		<div class="row mt-2 ratingarea">
																			<div class="col-sm-3 col-4"><span>1&nbsp;<i class="bi bi-star-fill biicon" style="font-size:10px;" ></i></span></div>
																			<div class="col-sm-6 col-4">
																				<div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																			<div class="col-sm-3 col-4">0</div>
																		</div>
																	</div>	
																</div>
															</div>
															<div class="col-md-6 col-sm-12 col-12 p-1">
																<span style="font-weight: 600">Average Customer Ratings</span>
																<div class="row">
																	<div class="col-sm-10 mt-4">
																		<div class="row">
																			<div class="col-sm-3 col-2">Overall</div>
																			<div class="col-sm-6 col-10"><center style="color:#8340A1;"><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i></center></div>
																			<div class="col-sm-3 col-2">4.7</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-sm-3 col-4"> Product Quality</div>
																			<div class="col-sm-6 col-4">
																				<center><div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div></center>
																			</div>
																			<div class="col-sm-3 col-4">5.0</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-sm-3 col-4">Rating</div>
																			<div class="col-sm-6 col-4">
																				<center><div class="progress" style="margin-top: 9px;">
																					<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div></center>
																			</div>
																			<div class="col-sm-3 col-4">5.0</div>
																		</div>
																	</div>
																</div>
															</div>
															</div>
															
															<div class="row">
																<div class="col-sm-12 bg-light">
																	<div class="row">
																		<div class="col-sm-4 col-12">
																			<p class="mt-2">1-8 of 11 Reviews</p>   
																		</div>	 
																		<div class="col-sm-8 col-12 text-center">
																			<span>Sort By: </span> 
																			<div class="dropdown">
																				<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
																					Most Relevant
																				</a>
																				
																				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																					<a class="dropdown-item" href="#">Most Relevant</a>
																					<a class="dropdown-item" href="#">Most Helpful</a>
																					<a class="dropdown-item" href="#"> Highest to Lowest Rating </a>
																					<a class="dropdown-item" href="#"> Lowest to Highest Rating </a>
																					<a class="dropdown-item" href="#">Most Recent</a>
																				</div>
																			</div>
																			
																			<button class="btn p-1" onclick="ToggleRating()" style="background:#DEE1E6; border-radius: 20px"><i class="bi bi-filter-left fa-2x"></i></button>
																		</div>	 
																	</div>
																</div>
																
																<div class="col-sm-12">
																	<div class="row mt-3">
																		<div class="col-sm-4"></div>
																		<div class="col-sm-4">
																			<span><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i>&ensp;7 Month Ago</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900" title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content."><i class="bi bi-gift biicon" style="color: #8340A1"></i> &nbsp;Received Free Product</span>
																		</div>
																	</div>	
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Melbourne Victoria</span></div>
																		<div class="col-sm-4">
																			<span style="font-weight:600">My favourite Dress Blonde espresso</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Review</span></div>
																		<div class="col-sm-4">
																			<p style="font-weight:500;font-size: 12px;" class="text-justify">The Blonde pods are absolutely perfect. We purchase quite a lot of these, however the only problem is that it seems everyone else loves them too. Coles and Woolworths are constantly our of stock .</p> <br><br>
																			
																			<a href="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90"><img src="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90" style="height: 80px; border:1px solid black;"></a>
																			
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 mt-2">
																	<div class="row mt-3">
																		<div class="col-sm-4"></div>
																		<div class="col-sm-4">
																			<span><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i>&ensp;7 Month Ago</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900" title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content."><i class="bi bi-gift biicon" style="color: #8340A1"></i> &nbsp;Received Free Product</span>
																		</div>
																	</div>	
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Melbourne Victoria</span></div>
																		<div class="col-sm-4">
																			<span style="font-weight:600">My favourite Dress Blonde espresso</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Review</span></div>
																		<div class="col-sm-4">
																			<p style="font-weight:500;font-size:12px"  class="text-justify">The Blonde pods are absolutely perfect. We purchase quite a lot of these, however the only problem is that it seems everyone else loves them too. Coles and Woolworths are constantly our of stock .</p> <br><br>
																			
																			<a href="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90"><img src="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90" style="height: 80px; border:1px solid black;"></a>
																			
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900"> Quality of Product </span>
																			<div class="row mt-3">
																				<div class="col-sm-8">
																					<div class="progress">
																						<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																				</div>	
																			</div>
																			<br>
																			<span style="font-weight:900"> Style </span>
																			<div class="row mt-2">
																				<div class="col-sm-8">
																					<div class="progress">
																						<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																				</div>	
																			</div>
																			
																		</div>
																		
																	</div>
																</div>
																<div class="col-sm-12 mt-2">
																	<div class="row mt-3">
																		<div class="col-sm-4"></div>
																		<div class="col-sm-4">
																			<span><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i>&ensp;7 Month Ago</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900" title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content."><i class="bi bi-gift biicon" style="color: #8340A1"></i> &nbsp;Received Free Product</span>
																		</div>
																	</div>	
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Melbourne Victoria</span></div>
																		<div class="col-sm-4">
																			<span style="font-weight:600">My favourite Dress Blonde espresso</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Review</span></div>
																		<div class="col-sm-4">
																			<p style="font-weight:500;font-size:12px"  class="text-justify">The Blonde pods are absolutely perfect. We purchase quite a lot of these, however the only problem is that it seems everyone else loves them too. Coles and Woolworths are constantly our of stock .</p> <br><br>
																			
																			<a href="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90"><img src="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90" style="height: 80px; border:1px solid black;"></a>
																			
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	
																</div>
																<div class="col-sm-12 mt-2">
																	<div class="row mt-3">
																		<div class="col-sm-4"></div>
																		<div class="col-sm-4">
																			<span><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i>&ensp;7 Month Ago</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900" title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content."><i class="bi bi-gift biicon" style="color: #8340A1"></i> &nbsp;Received Free Product</span>
																		</div>
																	</div>	
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Melbourne Victoria</span></div>
																		<div class="col-sm-4">
																			<span style="font-weight:600">My favourite Dress Blonde espresso</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Review</span></div>
																		<div class="col-sm-4">
																			<p style="font-weight:500;font-size:12px"  class="text-justify">The Blonde pods are absolutely perfect. We purchase quite a lot of these, however the only problem is that it seems everyone else loves them too. Coles and Woolworths are constantly our of stock .</p> <br><br>
																			
																			<a href="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90"><img src="https://rukminim1.flixcart.com/blobio/1160/1160/imr-202008/blobio-imr-202008_2d267b59551145ff8aa7bc8a0578f064.jpg?q=90" style="height: 80px; border:1px solid black;"></a>
																			
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 mt-2">
																	<div class="row mt-3">
																		<div class="col-sm-4"></div>
																		<div class="col-sm-4">
																			<span><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i>&ensp;7 Month Ago</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:900" title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content."><i class="bi bi-gift biicon" style="color: #8340A1"></i> &nbsp;<span>Received Free Product</span></span>
																		</div>
																	</div>	
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Melbourne Victoria</span></div>
																		<div class="col-sm-4">
																			<span style="font-weight:600">My favourite Dress Blonde espresso</span>
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																	<div class="row mt-2">
																		<div class="col-sm-4"><span style="font-weight:600">Review</span></div>
																		<div class="col-sm-4">
																			<p style="font-weight:500;font-size:12px"  class="text-justify">The Blonde pods are absolutely perfect. We purchase quite a lot of these, however the only problem is that it seems everyone else loves them too. Coles and Woolworths are constantly our of stock .</p> <br><br>
																			
																			<span>Helpful?&ensp;</span><a href="#" class="badge  p-2" style="border-radius: 20px; background:#8340A1; color:white">Yes</a>&nbsp;<a href="#" class="badge  p-2" style="border-radius: 20px; background:#8340A1; color:white">NO</a>
																			
																		</div>
																		<div class="col-sm-4">
																			<span style="font-weight:500"></span>
																		</div>
																	</div>
																</div>
																
																<div class="col-sm-12 mt-4">
																	<div class="row bg-light">
																		<div class="col-sm-6 col-6 ">
																			<p class="mt-2"> 1 - 8 of 11 Reviews</p>	 
																		</div>  
																		<div class="col-sm-6 col-6">
																			<p class="float-right mt-2"><i class="bi bi-caret-left-fill"></i>  <i class="bi bi-caret-right-fill"></i></p>
																		</div>  
																	</div>
																</div>
																
															</div>
														</div>
													</div>
												</div> 
												<div class="col-sm-4 p-3 hide_in_mobile">
													<img src="https://static.zara.net/photos///2022/V/0/1/p/3905/731/800/2/w/294/3905731800_6_1_1.jpg?ts=1640619994840" class="img-fluid w-100">	
													<a href="#">Product Name</a>
													<a href="#" class="float-right mr-5">₹900</a>
												</div>
												
												
											</div>
										</div>
									</section>
									
									
									<section class="pro-content testimonails-content">
										<div class="container">
											<div class="row justify-content-center">
												<div class="col-12 col-lg-12">
													<div class="pro-heading-title text-center">
														<h2 class="text-uppercase"> Customers Also Viewed
														</h2>
														<span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text  </span>
														
													</div>
												</div>
												<div class="col-sm-12 col-lg-12">
													<div class="row">
														<div class="col-sm-4 p-1">
															<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid"></center>
														</div>
														<div class="col-sm-4 p-1">
															<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid"></center>
														</div>
														<div class="col-sm-4 p-1">
															<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid">  </center>
														</div>
													</div>	
												</div>
											</div>	
										</div>
										
									</section>
									
									
									<?php include('include/footer.php'); ?>
									
									
									
									
									<?php include('include/jsLinks.php'); ?>
									
									
									<!--similar product modal start -->
									<div class="modal fade"  id="similarProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl  " >
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
																		<div class="container-fluid">
																			<div class="accordion" id="faq">
																				
																				<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid;">
																					<div class="card-header" id="faqhead2">
																						<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
																						aria-expanded="true" aria-controls="faq2">Brand</a>
																					</div>
																					
																					<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																						<div class="card-body">
																							...
																						</div>
																					</div>
																				</div>
																				<div class="card card-hover" style="border: 0px; border-bottom: 1px solid;">
																					<div class="card-header" id="faqhead3">
																						<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
																						aria-expanded="true" aria-controls="faq3">Price</a>
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
														<div class="col-sm-9" >
															<div class="row">
																<div class="col-sm-3" >
																	
																	<select class="custom-select" id="inputState" style="border-top:0px; border-left:0px;border-right:0px;">
																		
																		<option>Most Similar</option> 
																		<option>Similar</option>
																	</select>
																</div>  
															</div>
															
															<div class="row mt-2" style="height: 500px;overflow-y:scroll" >
																<div class="col-sm-3 mt2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px"  >Muraqsh - All Off White  - 3 Piece - 020</a>
																		<br>
																		<small>₹1000</small>
																		
																	</div>
																	
																</div> 
																<div class="col-sm-3 mt-2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px"  >Muraqsh - 3 Piece - 020</a>
																		<br>
																		<small>₹1000</small>
																		
																	</div>
																	
																</div> 
																<div class="col-sm-3 mt-2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px"  >Muraqsh  - 3 Piece - 020</a>
																		<br>
																		<small>₹1000</small>
																		
																	</div>
																	
																</div> 
																<div class="col-sm-3 mt-2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px"  >Muraqsh  3 Piece - 020</a>
																		<br>
																		<small>₹1000</small>
																		
																	</div>
																	
																</div> 
																<div class="col-sm-3 mt-2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px"  >Muraqsh - 3 Piece - 020</a>
																		<br>
																		<small>₹1000</small>
																		
																	</div>
																	
																</div> 
																<div class="col-sm-3 mt-2">
																	<img src="https://cdn.shopify.com/s/files/1/2337/7003/products/0007_AllOffWhite_320x.jpg?v=1653387603" style="height: 300px;" class="img-flud w-100">
																	<div class="pro-desc">
																		<a href="" class="font-weight-bold" style="font-size: 13px" >Muraqsh - 3 Piece - 020</a>
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
													
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														
													</div>
												</div>
												
											</div>
										</div>
									</div>
									
									<style>
										
									</style>
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
															<img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg" >
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
																		<div class="col-sm-6 col-6 text-right"> <small ><span style="font-weight: 800">CM</span> | IN </small></div>
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
																<div class="col-3 col-sm-3"><small class="text-uppercase">6 FT  3IN</small></div>  
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
															<span  style=" font-size: 15px;" class="text-uppercase font-weight-bold my-1">Preference</span><br>
															<span style="font-size: 13px;">How do you want it to fit?</span> <br>
															<div class="row">
																<div class="col-sm-10">
																	<form>
																		<div class="form-group">
																			<input type="range" min="1" max="100" value="50" class="rangbar" id="myRange">
																			<div class="row mt-1">
																				<div class="col-sm-4 col-4"><span>Tighter</span></div>	
																				<div class="col-sm-4 col-4"><center><span >Perfect</span></center></div>	
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
									<div id="mySidenav" class="sidenav">
										<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
										<div class="container">
											<div class="row p-2">
												<div class="col-sm-12">
													<p class="text-uppercase" style="font-size:12px;">Size Guide</p>
													<p>SHIRT</p>
													<img src="<?= base_url("public/images/sizeguid.png") ?>" class="img-fluid">
													
													<div class="form-group mt-4">
														<select class="form-control form-control-lg">
															<option selected disabled>Choose Size</option>
															<option>S</option>
															<option>M</option>
															<option>L</option>
															<option>XL</option>
														</select>	
													</div>
												</div>	
											</div>
										</div>
									</div>
									
									<div id="myPrivacynav" class="sidenav">
										<a href="javascript:void(0)" class="closebtn" onclick="closePrivacyNav()">&times;</a>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div class="p-5">
														<h6 style="font-weight:900">SHIPPING, EXCHANGES AND RETURNS</h6>
														<br></br>
														
														<p style="text-transform:uppercase; font-size: 12px;">SHIPPING</p>
														<div class="row">
															<div class="col-sm-12 bg-light ">
																<span style="font-size: 9px;">Delivery times and methods may vary.</span>	<br>
																<span style="font-size: 9px;" >When processing your purchase, we will show you the options available for your order.</span>	
															</div>
															
														</div>
														<br>
														<p style="font-size: 12px;">COLLECTION AT A ZARA STORE - FREE</p>
														<p style="font-size: 11px;">In the store of your choice within 3-5 working day</p>
														<p style="font-size: 13px;">HOME DELIVERY:</p>
														<li style="font-size: 10px;">STANDARD DELIVERY - ₹ 290.00 / FREE (ORDERS OVER ₹ 2,990)
														The estimated delivery time will be between 2-8 working days, depending on the delivery address.</li>
														<p style="font-size: 13px;font-weight:normal">At the time of processing your purchase, we will show you the available shipping methods, the cost and the delivery date of your order.</p>
														<p style="font-size: 13px;">EXCHANGES AND RETURNS</p>
														
														<p style="font-size: 13px;font-weight:normal">You have 30 days from the shipping date to return your purchase from Zara.com FREE OF CHARGE.</p>
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
													
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
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
									
									<!--Product Notify modal-->
									<div class="modal fade" id="NotifyProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
											<div class="modal-content">
												<div class="modal-header " id="giftModal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													
													<h2 class="text-center"> Notify Me</h2>
													<p style="font-size : 12px;">Please share your contact information so we can alert you when the product is back in stock.</p>
													<div class="form-group">
														<input class="form-control" type="email" placeholder="Enter your email">
													</div>
													<p class="text-center" style="font-weight:normal">OR</p>
													<div class="form-group">
														<input class="form-control" type="number" placeholder="Enter your mobile no">
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
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="cartimgsection">
														<span class="fa fa-plus-circle fa-2x  cartitem1"  data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
														<span class="fa fa-plus-circle fa-2x cartitem2"  data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
														<div class="col-12 col-md-6 d-none" id="chk">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!--product view details-->
									<div class="modal fade" id="productViewDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header" style="padding: 0px; border-bottom: 0px">  
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<span class="font-weight-bold" style="font-size:12px;">What customers say about this product</span>
															<br>
															<div class="row">
																<div class="col-sm-6">
																	<span>Fit</span>
																	<div class="progress">
																		<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>	 
																<div class="col-sm-6">
																	<small>Too Tight (2%)</small>
																</div>	 
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<span>Fit</span>
																	<div class="progress">
																		<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>	 
																<div class="col-sm-6">
																	<small>Too Tight (2%)</small>
																</div>	 
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<span>Fit</span>
																	<div class="progress">
																		<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>	 
																<div class="col-sm-6">
																	<small>Too Tight (2%)</small>
																</div>	 
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<span>Fit</span>
																	<div class="progress">
																		<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>	 
																<div class="col-sm-6">
																	<small>Too Tight (2%)</small>
																</div>	 
															</div>
														</div>
														<div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									
									<!-- Modal -->
									<div class="modal fade" id="ReviewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-scrollable">
											<div class="modal-content">
												<div class="modal-header" style="border: 0px;">
													<p class="modal-title" id="staticBackdropLabel">Write a review</p>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															
															<div class="form-group">
																<label>Name</label>
																<input type="text" name="name" placeholder="Enter your name" class="form-control">
															</div>	
															<div class="form-group">
																<label>Email</label>
																<input type="text" name="email" placeholder="slick@example.com" class="form-control">
															</div>
															<div class="form-group">
																<label>Rating</label> <br>
																<a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>
															</div>
															<div class="form-group">
																<label>Review Title</label>
																<input type="text" name="title" placeholder="Give your review a title" class="form-control">
															</div>
															<div class="from-group">
																<label>Body of Review(1500)</label>
																<textarea class="form-control" name="body" rows="5" placeholder="Write your comments here" ></textarea>  
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary">Submit </button>
												</div>
											</div>
										</div>
									</div>
									
									
									<!-- Modal -->
									<div class="modal fade" id="modalinfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header" style="border: 0px; padding:10px;">
													<p class="modal-title" id="staticBackdropLabel">Modal info</p>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<span class="text-justify">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span>  
														</div>   
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
									
									
									<script type="text/javascript" src="<?= base_url('public/js') ?>/jquery.picZoomer.js"></script>
									<script type="text/javascript">
										Fancybox.bind('[data-fancybox="gallery"]', {
											infinite: false
										});
										
										
										jQuery(function() {
											jQuery('.picZoomer').picZoomer();
											jQuery('.piclist li').on('click',function(event){
												var jQuerypic = jQuery(this).find('img');
												jQuery('.picZoomer-pic').attr('src',jQuerypic.attr('src'));
											});
										});
										
										
									</script>
									<script type="text/javascript">
										
										var _gaq = _gaq || [];
										_gaq.push(['_setAccount', 'UA-36251023-1']);
										_gaq.push(['_setDomainName', 'jqueryscript.net']);
										_gaq.push(['_trackPageview']);
										
										(function() {
											var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
											ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
										})();
										
									</script>
									
									<script>
										function getSimilarProduct()
										{
											
											jQuery("#similarProductModal").modal('show');	
										}
										function productViewDetail()
										{
											jQuery("#productViewDetail").modal('show');
										}
										function giftWrap(){
											jQuery("#giftSection").show();
										}
										function closeGiftWrap()
										{
											jQuery("#giftSection").hide();
										}
										function openDotModal()
										{
											
											// jQuery("#Dotimg").modal("show");  
										}
										//find my size popup 
										function findSize()
										{
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
											if ( jQuery(this).find('img').hasClass('selected')){jQuery(this).find('img').removeAttr('class')}
											else{
												if ( jQuery(this).parent('div').attr("data-selection") == 'single' ) {
													jQuery("div[data-selection='single']  img").removeClass('selected');
													jQuery(this).find('img').toggleClass('selected');
													} else if ( jQuery(this).parent('div').attr("data-selection") == 'multiple' ) {
													jQuery(this).find('img').toggleClass('selected');
												}
											}
										});
										
										
										/* Gallery Sizes */
										jQuery("div[data-image-size='large'] div").addClass('col-md-6 col-sm-4 col-xs-12');
										jQuery("div[data-image-size='medium'] div").addClass('col-md-4 col-sm-3 col-xs-6');
										jQuery("div[data-image-size='small'] div").addClass('col-md-2 col-sm-2 col-xs-3');
										
										/* Disable Dragging an Image */
										jQuery("div[data-selection] img").mousedown(function(){
											return false;
										});
										function NotifyProduct()
										{
											jQuery("#NotifyProduct").modal('show');
										}
										
										var blink = document.getElementById('blinkgift');
										setInterval(function() {
											blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
										}, 1200);
										
										jQuery("#expandHideArea").click(function(){
											jQuery(".hidearea").toggle();
											$("#expandHideArea").show();
											var x = document.getElementById("expandHideArea");
											if (x.innerHTML === "View More") {
												x.innerHTML = "View Less";
												} else {
												x.innerHTML = "View More";
											}												
											var getcss = jQuery("#expandHideArea").html();
											if(getcss == 'View More')
											{
												jQuery(".leftscroll").css("overflow-y","hidden");
												jQuery(".leftscroll").hover(function(){jQuery(this).css("overflow-y","hidden");},function(){jQuery(this).css("overflow-y","hidden");});
											}
											else
											{
												jQuery(".leftscroll").css("overflow-y","scroll"); 
												jQuery(".leftscroll").hover(function(){jQuery(this).css("overflow-y","scroll");},function(){jQuery(this).css("overflow-y","hidden");});
											}
											
										})
										jQuery("#expandHideArea2").click(function(){
											jQuery(".hidearea2").toggle();
											$("#expandHideArea2").show();
											var x = document.getElementById("expandHideArea2");
											if (x.innerHTML === "View More") {
												x.innerHTML = "View Less";
												} else {
												x.innerHTML = "View More";
											}
											
											var getcss = jQuery("#expandHideArea2").html();
											if(getcss == 'View More')
											{
												jQuery(".hidearea2").css("overflow-y","hidden");
											}
											else
											{
												jQuery(".hidearea2").css("overflow-y","scroll"); 
											}
											
										})
										
										function OpenTipsModal(){
											jQuery("#BeautyTipsModal").modal('show');
										}
										
										jQuery("#scrollablesection").hover(function(){jQuery(this).css("overflow-y","scroll");},function(){jQuery(this).css("overflow-y","hidden");});
										
										// jQuery(".leftscroll").hover(function(){jQuery(this).css("overflow-y","scroll");},function(){jQuery(this).css("overflow-y","hidden");});
										
										
										
										function FindSize(){
											
											$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg mb-4"></div><div class="col-sm-9 col-12"><h5 class="text-uppercase text-center">63% of people like you bought size</h5><h2 class="text-center font-weight-bold">XS</h2><div class="row"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">63%</div></div><div class="row"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row"><div class="col-sm-12"><p class="mr-3 ml-3">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b><p></div></div><div class="row"><div class="col-sm-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row"><div class="col-sm-12"><span class="" font-weight-bold>ADD MORE INFORMATION<br><small>Improve your recommendation with 4 more questions</small></div></div><div class="row mt-5"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div><div class="col-sm-6 col-6"><button class="btn btn-secondary " id="infobtn1" onclick="addinformation()">ADD INFO</button></div></div></div></div>').fadeIn(3000);
										}
										
										function AllDone(){
											$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9"><div class="row"><div class="col-sm-11 mx-auto"><center><span class="text-uppercase" style="font-size:15px;text-align:center;font-weight:600">All Done Your Size is : </span></center><h2 class="text-center" style="font-weight:900"><b>XS</b></h2><div class="row mt-2"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">63%</div></div><div class="row mt-2"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row mt-4"><div class="col-sm-10 mx-auto"><p class="">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b></p></div></div><div class="row"><div class="col-sm-12 col-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row mt-5"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div></div></div></div></div></div>').fadeIn(3000);
										}
										
										function addinformation()
										{
											$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid findsizeimg" style="height:80px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR FIGURE</h3><div class="row"><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B1.png" class="img-fluid w-100 figureimg" onclick="Shape1()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.png"  class="img-fluid w-100 figureimg" onclick="Shape1()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B3.png" class="img-fluid w-100 figureimg"  onclick="Shape1()"></div></div><br><br><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="FindSize()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" checked="checked" disabled="disabled" name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="Shape1()">SKIP</a></div></div></div></div>').fadeIn('slow');
										}
										
										function Shape1(){
											$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height: 80px;"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR SHAPE</h3><div class="row"><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H1.png" class="img-fluid  w-100 figureimg" onclick="Shape2()"></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H2.png" class="img-fluid  w-100 figureimg" onclick="Shape2()" ></div><div class="col-sm-4 col-4 shapimg"><img src="https://media.fitanalytics.com/widget_v2/bodyshapes-20151211/F.22.B2.H3.png" class="img-fluid  w-100 figureimg" onclick="Shape2()" ></div></div><br><br><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="#" onclick="addinformation()" >BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled name="" >&ensp;&ensp;<input type="checkbox" checked disabled  name="" > &ensp;&ensp;<input type="checkbox" disabled  name="" > &ensp;&ensp;<input type="checkbox" disabled name="" ></center></div><div class="col-sm-4 col-3"><a href="javascript:void(0)" class="float-right" onclick="Shape2()" >SKIP</a></div></div></div></div>').fadeIn(3000);
										}
										function Shape2()
										{
											$("#findsize-modalbody").hide().html('<div class="row p-4"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px"><div class="col-sm-9 mx-auto"><h3 class="text-center font-weight-bold">HOW OLD ARE YOU</h3><div class="row mt-5"><div class="col-sm-3 col-3"><span class="mysize">MY AGE:</span></div><div class="col-sm-6 col-6"><div class="form-group" style="margin-top:2px"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></div><div class="col-sm-3 col-3"><span>14</span></div></div><div class="row"><div class="col-sm-12"><div class="col-sm-8 p-3 mx-auto" style="border:1px solid #000"><span>Why do we ask for this? Age has an impact on how your weight is distributed. Knowing your</div></div><div class="col-sm-12 mt-3"><p class="text-center"><button class="btn btn-secondary" onclick="finalShow()">Add Age</button></p></div></div><div class="row mt-5 backrow"><div class="col-sm-3 col-3"><a href="#" onclick="Shape1()">BACK</a></div><div class="col-sm-6 col-6"><center><input type="checkbox" disabled name="">&ensp;&ensp;<input type="checkbox" disabled name="">&ensp;&ensp; <input type="checkbox" disabled checked name=""> &ensp;&ensp; <input type="checkbox" disabled name=""></center></div><div class="col-sm-3 col-3"><a href="#" class="float-right" onclick="SelectZise()">SKIP</a></div></div></div></div>').fadeIn(3000);
										}
										
										function finalShow(){
											$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9 col-12"><h5 class="text-uppercase text-center">63% of people like you bought size</h5><h2 class="text-center font-weight-bold">XS</h2><div class="row"><div class="col-sm-2 col-3"><span class="mb-2">XL</span></div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-3 col-2">63%</div></div><div class="row"><div class="col-sm-2 col-3">S</div><div class="col-sm-8 col-6"><div class="progress"><div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="col-sm-2 col-3">48%</div></div><div class="row"><div class="col-sm-12"><p class="mr-3 ml-3">Size XS was bought and not returned for size by 63%<b>height</b>and<b>Weidth</b>and<b>fit Perference</b><p></div></div><div class="row"><div class="col-sm-12"><p class="text-right"><button class="btn btn-secondary">Add Size Xs</button></p></div></div><div class="row"><div class="col-sm-12"><span class="" font-weight-bold>ADD MORE INFORMATION<br><small>Improve your recommendation with 4 more questions</small></div></div><div class="row mt-5 backrow"><div class="col-sm-6 col-6"><a href="javascript:void(0)" onclick="StartOver()" class="mt-2">START OVER</a></div><div class="col-sm-6 col-6"><button class="btn btn-secondary " id="infobtn2" onclick="addinformation()">ADD INFO</button></div></div></div></div>').fadeIn(3000);
										}
										
										function StartOver(){
											$("#findsize-modalbody").hide().html('<div class="row"><div class="col-sm-3 col-12"><img src="https://static.zara.net/photos///2022/V/0/1/p/0484/041/800/2/w/169/0484041800_6_1_1.jpg?ts=1652096781681" class="img-fluid findsizeimg"></div><div class="col-sm-9 col-12"><div class="row"><div class="col-sm-9"><p class="text-uppercase font-weight-bold" style="font-size:15px">We help to find the right size</p><span style="font-size:13px">We calculate the perfect fit based on your unique measurements</span></div></div><br><span style="font-size:15px" class="text-uppercase font-weight-bold">Measurements</span><div class="row"><div class="col-sm-10 col-10"><div class="row"><div class="col-sm-6 col-6"><small>Your height and weight:</small></div><div class="col-sm-6 col-6 text-right"><small><span style="font-weight:800">CM</span>| IN</small></div></div></div></div><div class="row mt-4"><div class="col-3 col-sm-3"><small class="text-uppercase">height</small></div><div class="col-6 col-sm-6"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></form></div><div class="col-3 col-sm-3"><small class="text-uppercase">6 FT 3IN</small></div></div><div class="row"><div class="col-3 col-sm-3"><small class="text-uppercase">Weight</small></div><div class="col-6 col-sm-6"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"></div></form></div><div class="col-3 col-sm-3"><small class="text-uppercase">296LBS</small></div></div><br><span style="font-size:15px" class="text-uppercase font-weight-bold my-1">Preference</span><br><span style="font-size:13px">How do you want it to fit?</span><br><div class="row"><div class="col-sm-10"><form><div class="form-group"><input type="range" min="1" max="100" value="50" class="rangbar" id="myRange"><div class="row mt-1"><div class="col-sm-4 col-4"><span>Tighter</span></div><div class="col-sm-4 col-4"><center><span>Perfect</span></center></div><div class="col-sm-4 col-4"><span class="float-right">Looser</span></div></div></div></form></div></div><div class="form-group"><p class="text-right"><button class="btn btn-secondary" onclick="FindSize()">Find my size</button></p></div></div></div>').fadeIn(3000);
										}
										
										function SelectZise(){
											$("#findsize-modalbody").hide().html('<div class="row"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px;margin-left:20px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR BRA SIZE</h3><div class="row"><div class="col-sm-9 col-12 mx-auto"><div class="row my-2"><div class="col-sm-6 col-6"><select class="form-control"><option>My BRA SIZE</option><option>American Size</option></select></div><div class="col-sm-6 col-6"><select class="form-control"><option>EUROPEAN SIZE</option><option>American Size</option></select></div></div><div class="row"><div class="col-12 col-sm-6 p-0"><table class="table table-bordered"><tr><th>BUST</th></tr><tr><td>60</td><td>65</td><td>70</td><td>75</td></tr><tr><td>80</td><td>85</td><td>90</td><td>95</td></tr><tr><td>100</td><td>105</td><td>110</td><td>115</td></tr><tr><td>120</td><td>155</td></tr></table></div><div class="col-12 col-sm-6 p-0"><table class="table table-bordered"><tr><th>CUP</th></tr><tr><td>AA</td><td>A</td><td>B</td><td>C</td></tr><tr><td>D</td><td>E</td><td>F</td><td>G</td></tr><tr><td>H</td><td>I</td><td>J</td><td>K</td></tr></table></div></div></div></div><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="Shape2()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled="disabled" name="">&ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" checked="checked" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" name=""></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="BraSize()">SKIP</a></div></div></div></div>').fadeIn(3000);
										}
										
										function BraSize(){
											$("#findsize-modalbody").hide().html('<div class="row"><img src="https://static.zara.net/photos///2022/V/0/1/p/5107/251/605/2/w/169/5107251605_6_1_1.jpg?ts=1643355627276" class="img-fluid" style="height:80px;margin-left:20px"><div class="col-sm-12"><h3 class="text-center font-weight-bold">SELECT YOUR BRA SIZE</h3><div class="row"><div class="col-sm-5 mx-auto" style="font-weight:700"><p class="text-center">MY BRA SIZE : 35A</p></div></div><div class="row mt-5 backrow"><div class="col-sm-4 col-3"><a href="javascript:void(0)" onclick="SelectZise()">BACK</a></div><div class="col-sm-4 col-6"><center><input type="checkbox" disabled="disabled" name="">&ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" name=""> &ensp;&ensp; <input type="checkbox" disabled="disabled" checked="checked" name=""></center></div><div class="col-sm-4 col-3"><a href="#" class="float-right" onclick="AllDone()">SKIP</a></div></div></div></div>').fadeIn(3000);
										}
										
										
										function ToggleRating(){
											$("#toggleRating").toggle();
										}
										
										jQuery(".prevbtn").mouseenter(function(){
											jQuery(".appendtext").html('PREV');
										})	
										jQuery(".prevbtn").mouseleave(function(){
											jQuery(".appendtext").html('')
										})
										
										
										jQuery(".nxtbtn").mouseenter(function(){
											jQuery(".appendnext").html('NEXT');
										})	
										jQuery(".nxtbtn").mouseleave(function(){
											jQuery(".appendnext").html('');
										});
										
										jQuery("#SlideToggle").click(function(){
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
								</body>
							</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			