<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8"> 
		<title>Slick Pattern - FAQs</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			body{
			background: #e6e6facc;
			}
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
			.mm-survey {
			margin-top: 10px;
			margin-bottom: 50px;
			}
			
			.mm-survey-container {
			width: 100%;
			min-height: 600px;
			background: #fafafa;
			}
			
			.mm-survey-results-container {
			width: 100%;
			min-height: 600px;
			background: #fafafa;
			}
			
			.mm-survey-page {
			display: none;
			
			font-weight: 100;
			padding: 40px;
			}
			
			.mm-survey-page.active {
			display: block;
			}
			
			.mm-survey-controller {
			position: relative;
			height: 60px;
			background: #8340A1;
			padding: 12px 14px;
			}
			
			.mm-survey-results-controller {
			position: relative;
			height: 60px;
			background: #333;
			padding: 12px 14px;
			}
			
			.mm-back-btn {
			display: inline-block;
			position: relative;
			float: left;
			}
			
			.mm-prev-btn {
			display: inline-block;
			position: relative;
			float: left;
			}
			
			.mm-next-btn {
			display: inline-block;
			opacity: 0.25;
			position: relative;
			float: right;
			}
			
			.mm-finish-btn {
			display: none;
			position: relative;
			float: right;
			}
			
			.mm-survey-controller button {
			background: #fff;
			border: none;
			padding: 8px 18px;
			
			font-weight: 300;
			}
			
			.mm-survey-results-controller button {
			background: #fff;
			border: none;
			padding: 8px 18px;
			}
			
			.mm-survey-progress {
			width: 100%;
			height: 5px;
			background: #f5f5f5;
			overflow: hidden;
			}
			
			.mm-progress {
			transition: width 0.5s ease-in-out;
			}
			
			.mm-survey-progress-bar {
			height: 5px;
			width: 0%;
			background: linear-gradient(90deg, rgba(228,47,200,1) 35%, rgba(192,0,255,1) 100%);
			}
			
			.mm-survey-q {
			list-style-type: none;
			padding: 0px;
			}
			
			.mm-survey-q li {
			display: block;
			/*padding: 20px 0px;*/
			margin-bottom: 10px;
			width: 100%;
			background: #fff;
			}
			
			.mm-survey-q li input {
			width: 100%;
			}
			
			.mm-survery-content label {
			width: 100%;
			/*padding: 10px 10px;*/
			margin: 0px !important;
			}
			
			.mm-survery-content label:hover {
			cursor: pointer;
			}
			
			.mm-survey-question {
			min-height: 100px;
			}
			
			.mm-survey-question p {
			font-size: 22px;
			margin-bottom: 20px;
			line-height: 20px;
			}
			
			.mm-survery-content label p {
			display: inline-block;
			position: relative;
			top: 2px;
			left: 5px;
			margin: 0px;
			}
			
			input[type="radio"] {
			display: none;
			}
			
			input[type="radio"] + label {
			color: #292321;
			
			font-weight: 300;
			font-size: 7px;
			}
			
			input[type="radio"] + label span {
			display: inline-block;
			width: 30px;
			height: 30px;
			margin: 2px 4px 0 0;
			vertical-align: middle;
			cursor: pointer;
			-moz-border-radius: 50%;
			border-radius: 50%;
			}
			
			input[type="radio"] + label span {
			background-color: #333;
			}
			
			input[type="radio"]:checked + label span {
			border: 2px solid #3DD2AF;
			background: transparent;
			}
			
			input[type="radio"] + label span,
			input[type="radio"]:checked + label span {
			-webkit-transition: background-color 0.20s ease-in-out;
			-o-transition: background-color 0.20s ease-in-out;
			-moz-transition: background-color 0.20s ease-in-out;
			transition: background-color 0.20s ease-in-out;
			}
			
			.mm-survey-item {
			background: #fff;
			margin-bottom: 15px;
			border-bottom: 1px solid rgba(33,33,33,0.15);
			border-radius: 0px 0px 4px 4px;
			}
			
			.mm-prev-btn button:focus, .mm-next-btn button:focus, .mm-finish-btn button:focus {
			outline: none;
			border: none;
			}
			
			.mm-survey.okay .mm-next-btn {
			display: inline-block;
			opacity: 1;
			}
			
			.mm-finish-btn.active {
			display: inline-block;
			}
			
			.mm-survey-results {
			display: none;
			}
			
			.mm-survey-results-score {
			margin: 0px;
			padding: 0px;
			padding-top: 40px;
			padding-bottom: 40px;
			text-align: center;
			font-size: 80px;
			
			font-weight: 600;
			letter-spacing: -6px;
			}
			
			.mm-survey-results-list {
			list-style-type: none;
			padding: 0px 15px;
			margin: 0px;
			}
			
			.mm-survey-results-item {
			color: #fff;
			margin-top: 10px;
			padding: 15px 15px 15px 0px;
			
			font-weight: 300;
			}
			
			.mm-survey-results-item.correct {
			background: linear-gradient(to left, #4CB8C4, #3CD3AD);
			}
			
			.mm-survey-results-item.incorrect {
			background: linear-gradient(to left, #d33c62, #dc1144);
			}
			
			.mm-item-number {
			height: 40px;
			position: relative;
			padding: 17px;
			background: #333;
			color: #fff;
			}
			
			.mm-item-info {
			float: right;
			}
			/*checkbox style*/
			.checkbox-label {
			align-items: center;
			background-color: none;
			border: 1px solid lightgrey;
			border-radius: 5px;
			cursor: pointer;
			display: flex;
			font-weight: 600;
			justify-content: space-between;
			margin: 0 auto 10px;
			padding: 10px;
			position: relative;
			transition: .3s ease all;
			width: 100%;
			}
			.checkbox-label span:last-child {
			padding: 0 0 0 20px;
			}
			.checkbox-label:hover {
			background-color: rgba(255,255,255,0.2);   
			}
			.checkbox-label:focus {
			/*outline: dotted;*/
			}
			.checkbox-label:before {
			background-repeat: no-repeat;
			background-position: center;
			background-size: 15px;
			/*border: 1px solid lightgrey;*/
			border-radius: 50%;
			content:'';
			height: 30px;
			left: 20px;
			position: absolute;
			top: calc(50% - 15px);
			transition: .3s ease background-color;
			width: 30px;
			}
			.checkbox-label:hover:before {
			
			}
			.checkbox-label span {
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
			}
			.checkbox-label span em {
			display: block;
			font-size: 80%;
			font-style: normal;
			font-weight: 400;
			line-height: 1.2;
			}
			.checkbox-btn {
			position: absolute;
			visibility: hidden;
			}
			.checkbox-btn:checked + .checkbox-label {
			background-color: #AF77C8;
			color: white;
			border-color: mediumpurple;
			box-shadow: 0 2px 4px rgba(0,0,0,0.05);
			}
			.checkbox-btn:checked + .checkbox-label:before {
			border-color: mediumpurple;
			}
			
			.total-cost {
			align-items: baseline;
			border-top: 1px solid lightgrey;
			display: flex;
			justify-content: space-between;
			margin-top: 40px;
			padding: 40px 20px 0;
			}
			.total-cost div {
			align-items: baseline;
			display: flex;
			}
			.total-cost span:nth-child(1) {
			align-self: flex-start;
			padding-top: 5px;
			}
			.total-cost span:nth-child(2) {
			font-size: 32px;
			font-weight: bold;
			}
			.total-cost input {
			display: none;
			}
			
			@media(max-width:480px) {
			.checkbox-label {
			align-items: flex-start;
			flex-direction: column;
			flex-wrap: wrap;
			}
			.checkbox-label span:last-child {
			padding: 0px 0 0 0;
			}
			}
			
			/*Radio Button Css*/
			
			.selector{
			position:relative;
			width:100%;
			background-color:var(--smoke-white);
			height:50px;
			display:flex;
			justify-content:space-around;
			align-items:center;
			
			box-shadow:0 0 16px rgba(0,0,0,.2);
			}
			.selecotr-item{
			position:relative;
			flex-basis:calc(70% / 3);
			height:100%;
			display:flex;
			justify-content:center;
			align-items:center;
			}
			.selector-item_radio{
			appearance:none;
			display:none;
			}
			.selector-item_label{
			font-size: 14px !important;
			position:relative;
			height:100%!important;
			width:100%;
			text-align:center;
			line-height:400%;
			font-weight:900;
			transition-duration:.5s;
			transition-property:transform, color, box-shadow;
			transform:none;
			}
			.selector-item_radio:checked + .selector-item_label{
			background-color: #8340A1;
			color:var(--white);
			box-shadow:0 0 4px rgba(0,0,0,.5),0 2px 4px rgba(0,0,0,.5);
			transform:translateY(-2px);
			}
			@media (max-width:480px) {
			.selector{
			width: 100%!important;
			}
			}
			
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			.mm-survey-page{
			 padding: 10px;
			}
			.aboutus-content p{
			  font-size: 13px;
			}
			.mm-survey-question{
			 min-height:0px;
			}
			.text-label{
			  font-size:9px;
			}
			}
		</style>
		
	</head>
	
	<body>  
		<!-- Paste this code after body tag -->
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">FeedBack</li>
					</ol>
				</div>
			</nav>
		</div> 
		<!-- //Header Style One -->
		<section class="aboutus-content" style="margin-top: 0px;">
			<div class="container">
				<div class="col-sm-12 p-0">
					<div class="mm-survey">
						<div class="mm-survey-progress">
							<div class="mm-survey-progress-bar mm-progress"></div>
						</div>
						<div class="mm-survey-results">
							<div class="mm-survey-results-container">
								<h3 class="mm-survey-results-score"></h3>
								<ul class="mm-survey-results-list"></ul>
							</div>
							<div class="mm-survey-results-controller">
								<div class="mm-back-btn">
									<button>Back</button>
								</div>
							</div>
						</div>
						<div class="mm-survey-bottom">
							<div class="mm-survey-container">
								<div class="mm-survey-page active" data-page="1">
									<div class="mm-survery-content">
										<div class="mm-survey-question">
											<p class="text-uppercase">Please provide your feedback</p>
										</div>
										<label>What is your reason(s), if any, for visiting us today? (Select all that apply)</label>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-1" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-1" tabindex="1">
												<span>
													<em>To make a purchase.</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-2" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-2" tabindex="1">
												<span>
													<em>To sell/consign my item(s)</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-3" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-3" tabindex="1">
												<span>
													<em>To just window shop or browse around.</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-4" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-4" tabindex="1">
												<span>
													<em>To find a store/showroom location or find location hours.</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-5" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-5" tabindex="1">
												<span>
													<em>To do product research (e.g. pricing, availability, etc.)</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-6" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-6" tabindex="1">
												<span>
													
													<em>To see the new inventory.</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-7" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-7" tabindex="1">
												<span>
													<em>To check/change the status of my order.</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="checkbox-8" type="checkbox" value="49">
											<label class="checkbox-label" for="checkbox-8" tabindex="1">
												<span>
													<em>Other</em>
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="mm-survey-page" data-page="2">
									<div class="mm-survery-content">
										<div class="mm-survey-question">
											<p>How satisfied or dissatisfied are you with SlickPattern?</p>
										</div>
										<div class="container p-0">
											<span class="text-label">Extremely Dissatisfied</span>
											<span class="float-right text-label">Extremely Satisfied</span>
											<div class="selector">
												<div class="selecotr-item">
													<input type="radio" id="radio1" name="selector" class="selector-item_radio" checked>
													<label for="radio1" class="selector-item_label">1</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio2" name="selector" class="selector-item_radio">
													<label for="radio2" class="selector-item_label">2</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio3" name="selector" class="selector-item_radio">
													<label for="radio3" class="selector-item_label">3</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio4" name="selector" class="selector-item_radio">
													<label for="radio4" class="selector-item_label">4</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio5" name="selector" class="selector-item_radio">
													<label for="radio5" class="selector-item_label">5</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio6" name="selector" class="selector-item_radio">
													<label for="radio6" class="selector-item_label">6</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio7" name="selector" class="selector-item_radio">
													<label for="radio7" class="selector-item_label">7</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio8" name="selector" class="selector-item_radio">
													<label for="radio8" class="selector-item_label">8</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio9" name="selector" class="selector-item_radio">
													<label for="radio9" class="selector-item_label">9</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radio10" name="selector" class="selector-item_radio">
													<label for="radio10" class="selector-item_label">10</label>
												</div>
											</div>	
										</div>
										
										<br>
										<br>
										<br>
										
										<div class="container p-0">
											<p>How likely or unlikely are you to recommend Fashionphile to a friend or colleague?</p>
											<span class="text-label">Not at all likely</span>
											<span class="float-right text-label">Extremely likely</span>
											<div class="selector">
												<div class="selecotr-item">
													<input type="radio" id="radios1" name="selector" class="selector-item_radio" checked>
													<label for="radios1" class="selector-item_label">1</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios2" name="selector" class="selector-item_radio">
													<label for="radios2" class="selector-item_label">2</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios3" name="selector" class="selector-item_radio">
													<label for="radios3" class="selector-item_label">3</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios4" name="selector" class="selector-item_radio">
													<label for="radios4" class="selector-item_label">4</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios5" name="selector" class="selector-item_radio">
													<label for="radios5" class="selector-item_label">5</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios6" name="selector" class="selector-item_radio">
													<label for="radios6" class="selector-item_label">6</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios7" name="selector" class="selector-item_radio">
													<label for="radios7" class="selector-item_label">7</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios8" name="selector" class="selector-item_radio">
													<label for="radios8" class="selector-item_label">8</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios9" name="selector" class="selector-item_radio">
													<label for="radios9" class="selector-item_label">9</label>
												</div>
												<div class="selecotr-item">
													<input type="radio" id="radios10" name="selector" class="selector-item_radio">
													<label for="radios10" class="selector-item_label">10</label>
												</div>
											</div>	
										</div>
										<br>
										<br>
										<br>
										
										
										<p>Please, tell us what type of feedback you wish to give us.</p>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="suggestion-2" type="checkbox" value="49">
											<label class="checkbox-label" for="suggestion-2" tabindex="1">
												<span>
													<em>Make a suggestion</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="compliment-2" type="checkbox" value="49">
											<label class="checkbox-label" for="compliment-2" tabindex="1">
												<span>
													<em>Offer a compliment</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="leave-2" type="checkbox" value="49">
											<label class="checkbox-label" for="leave-2" tabindex="1">
												<span>
													<em>Leave a compliment</em>
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="mm-survey-page" data-page="3">
									<div class="mm-survery-content">
										<!--div class="mm-survey-question">
											<p>What kind of compliment would you like to offer? Select all that apply.</p>
										</div--->
										<p>What kind of compliment would you like to offer? Select all that apply.</p>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="leavec-2" type="checkbox" value="49">
											<label class="checkbox-label" for="leavec-2" tabindex="1">
												<span>
													<em>Compliment about my experience</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="employee-2" type="checkbox" value="49">
											<label class="checkbox-label" for="employee-2" tabindex="1">
												<span>
													<em>Compliment about a SlickPattern employee</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="other-3" type="checkbox" value="49">
											<label class="checkbox-label" for="other-3" tabindex="1">
												<span>
													<em>Other</em>
												</span>
											</label>
										</div>
										<div class="mm-survey-item">
											<input class="checkbox-btn" name="checkbox-collection" id="general-3" type="checkbox" value="49">
											<label class="checkbox-label" for="general-3" tabindex="1">
												<span>
													<em>General compliment about SlickPattern</em>
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="mm-survey-page" data-page="4">
									<div class="mm-survery-content">
										<div class="mm-survey-question">
											<p>Please leave your compliment below.</p>
										</div>
										<div class="mm-survey-item">
											<textarea class="form-control" name="leavemsg" rows="5" cols="4"></textarea>
										</div>
										
									</div>
								</div>
								<!-- <div class="mm-survey-page" data-page="5">
									<div class="mm-survery-content">
									
									</div>
									</div>
									<div class="mm-survey-page" data-page="6">
									<div class="mm-survery-content">
									
									</div>
									</div>
									<div class="mm-survey-page" data-page="7">
									<div class="mm-survery-content">
									
									</div>
								</div> -->
							</div>
							
							<div class="mm-survey-controller">
								<div class="mm-prev-btn">
									<button>Prev</button>
								</div>
								<div class="mm-next-btn">
									<button disabled="true">Next</button>
								</div>
								<div class="mm-finish-btn">
									<button>Submit</button>
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
			jQuery('.mm-prev-btn').hide();
			var x;
			var count;
			var current;
			var percent;
			var z = [];
			
			init();
			getCurrentSlide();
			goToNext();
			goToPrev();
			getCount();
			// checkStatus();
			// buttonConfig();
			buildStatus();
			deliverStatus();
			submitData();
			goBack();
			
			function init() {
				
				jQuery('.mm-survey-container .mm-survey-page').each(function() {
					
					var item;
					var page;
					
					item = jQuery(this);
					page = item.data('page');
					
					item.addClass('mm-page-'+page);
					//item.html(page);
					
				});
				
			}
			
			function getCount() {
				count = jQuery('.mm-survey-page').length;
				return count;
			}
			
			function goToNext() {
				
				jQuery('.mm-next-btn').on('click', function() {
					goToSlide(x);
					getCount();
					current = x + 1;
					var g = current/count;
					buildProgress(g);
					var y = (count + 1);
					getButtons();
					jQuery('.mm-survey-page').removeClass('active');
					jQuery('.mm-page-'+current).addClass('active');
					getCurrentSlide();
					checkStatus();
					if( jQuery('.mm-page-'+count).hasClass('active') ){
						if( jQuery('.mm-page-'+count).hasClass('pass') ) {
							jQuery('.mm-finish-btn').addClass('active');
						}
						else {
							jQuery('.mm-page-'+count+' .mm-survery-content .mm-survey-item').on('click', function() {
								jQuery('.mm-finish-btn').addClass('active');
							});
						}
					}
					else {
						jQuery('.mm-finish-btn').removeClass('active');
						if( jQuery('.mm-page-'+current).hasClass('pass') ) {
							jQuery('.mm-survey-container').addClass('good');
							jQuery('.mm-survey').addClass('okay');
						}
						else {
							jQuery('.mm-survey-container').removeClass('good');
							jQuery('.mm-survey').removeClass('okay');
						}
					}
					buttonConfig();
				});
				
			}
			
			function goToPrev() {
				
				jQuery('.mm-prev-btn').on('click', function() {
					goToSlide(x);
					getCount();			
					current = (x - 1);
					var g = current/count;
					buildProgress(g);
					var y = count;
					getButtons();
					jQuery('.mm-survey-page').removeClass('active');
					jQuery('.mm-page-'+current).addClass('active');
					getCurrentSlide();
					checkStatus();
					jQuery('.mm-finish-btn').removeClass('active');
					if( jQuery('.mm-page-'+current).hasClass('pass') ) {
						jQuery('.mm-survey-container').addClass('good');
						jQuery('.mm-survey').addClass('okay');
					}
					else {
						jQuery('.mm-survey-container').removeClass('good');
						jQuery('.mm-survey').removeClass('okay');
					}
					buttonConfig();
				});
				
			}
			
			function buildProgress(g) {
				
				if(g > 1){
					g = g - 1;
				}
				else if (g === 0) {
					g = 1;
				}
				g = g * 100;
				jQuery('.mm-survey-progress-bar').css({ 'width' : g+'%' });
				
			}
			
			function goToSlide(x) {
				
				return x;
				
			}
			
			function getCurrentSlide() {
				
				jQuery('.mm-survey-page').each(function() {
					
					var item;
					
					item = jQuery(this);
					
					if( jQuery(item).hasClass('active') ) {
						x = item.data('page');
					}
					else {
						
					}
					
					return x;
					
				});
				
			}
			
			function getButtons() {
				
				if(current === 0) {
					current = y;
				}
				if(current === count) {
					jQuery('.mm-next-btn').hide();
				}
				else if(current === 1) {
					jQuery('.mm-prev-btn').hide();
				}
				else {
					jQuery('.mm-next-btn').show();
					jQuery('.mm-prev-btn').show();
				}
				
			}
			
			jQuery('.mm-survey-q li input').each(function() {
				
				var item;
				item = jQuery(this);
				
				jQuery(item).on('click', function() {
					if( jQuery('input:checked').length > 0 ) {
						// console.log(item.val());
						jQuery('label').parent().removeClass('active');
						item.closest( 'li' ).addClass('active');
					}
					else {
						//
					}
				});
				
			});
			
			percent = (x/count) * 100;
			jQuery('.mm-survey-progress-bar').css({ 'width' : percent+'%' });
			
			function checkStatus() {
				jQuery('.mm-survery-content .mm-survey-item').on('click', function() {
					var item;
					item = jQuery(this);
					item.closest('.mm-survey-page').addClass('pass');
				});
			}
			
			function buildStatus() {
				jQuery('.mm-survery-content .mm-survey-item').on('click', function() {
					var item;
					item = jQuery(this);
					item.addClass('bingo');
					item.closest('.mm-survey-page').addClass('pass');
					jQuery('.mm-survey-container').addClass('good');
				});
			}
			
			function deliverStatus() {
				jQuery('.mm-survey-item').on('click', function() {
					if( jQuery('.mm-survey-container').hasClass('good') ){
						jQuery('.mm-survey').addClass('okay');
					}
					else {
						jQuery('.mm-survey').removeClass('okay');	
					}
					buttonConfig();
				});
			}
			
			function lastPage() {
				if( jQuery('.mm-next-btn').hasClass('cool') ) {
					alert('cool');
				}
			}
			
			function buttonConfig() {
				if( jQuery('.mm-survey').hasClass('okay') ) {
					jQuery('.mm-next-btn button').prop('disabled', false);
				}
				else {
					jQuery('.mm-next-btn button').prop('disabled', true);
				}
			}
			
			function submitData() {
				jQuery('.mm-finish-btn').on('click', function() {
					collectData();
					jQuery('.mm-survey-bottom').slideUp();
					jQuery('.mm-survey-results').slideDown();
				});
			}
			
			function collectData() {
				
				var map = {};
				var ax = ['0','red','mercedes','3.14','3'];
				var answer = '';
				var total = 0;
				var ttl = 0;
				var g;
				var c = 0;
				
				jQuery('.mm-survey-item input:checked').each(function(index, val) {
					var item;
					var data;
					var name;
					var n;
					
					item = jQuery(this);
					data = item.val();
					name = item.data('item');
					n = parseInt(data);
					total += n;
					
					map[name] = data;
					
				});
				
				jQuery('.mm-survey-results-container .mm-survey-results-list').html('');
				
				for (i = 1; i <= count; i++) {
					
					var t = {};
					var m = {};
					answer += map[i] + '<br>';
					
					if( map[i] === ax[i]) {
						g = map[i];
						p = 'correct';
						c = 1;
					}
					else {
						g = map[i];
						p = 'incorrect';
						c = 0;
					}
					
					jQuery('.mm-survey-results-list').append('<li class="mm-survey-results-item '+p+'"><span class="mm-item-number">'+i+'</span><span class="mm-item-info">'+g+' - '+p+'</span></li>');
					
					m[i] = c;
					ttl += m[i];
					
				}
				
				var results;
				results = ( ( ttl / count ) * 100 ).toFixed(0);
				
				jQuery('.mm-survey-results-score').html( results + '%' );
				
			}
			
			function goBack() {
				jQuery('.mm-back-btn').on('click', function() {
					jQuery('.mm-survey-bottom').slideDown();
					jQuery('.mm-survey-results').slideUp();
				});
			}
			
		</script>
		
		
	</body>
</html>																														
</html>																																																							