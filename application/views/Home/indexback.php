<!DOCTYPE html> 
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern&nbsp;&minus;&nbsp;Home</title>    
		<?php include('include/cssLinks.php'); ?>	 
		<style>
			.carousel-indicators {
			position: absolute;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1 !important;
			display: flex;
			justify-content: center;
			padding-left: 0;
			margin-right: 15%;
			margin-left: 15%;
			list-style: none;
			}
			.table th, .table td {     
			padding-left: 10px!important; 
			}
		    .slide-toggle{
			display:none!important;
			}
			.showbtn{
			display:none !important;
			}
			.showbtn1:hover{
			display: block!important;
			}
			.far:hover { 
			color: #FF1493!important; 
			} 
			.fas:hover { 
			color: #FF1493!important;
			}		
			@media only screen and (max-width: 600px) {
			.hoverbtn{
			display:none;
			}
			.centertxt{
			text-align:center!important;
			}
			.pageheading{
			font-size: 20px!important;
			}
			.secondbtn{
			display:none;
			}
			}
			.hoverbtn{
			color: white!important;
			font-weight: bold!important;
			border-radius: 25px;
			position: absolute;
			bottom: 30px;
			left: 252px;
			text-align: center;
			opacity: 1;
			transition: opacity .35s ease;
			}	
			.hoverbtn: hover{
			background-color:#FF1493!important;
			color: white!important;
			}
			.btn-light:hover {
			background-color: #FF1493!important;
			color: white!important;
			}
			.hoverbtn a: hover a{
			color: white!important;
			}
			.hoverbtn: hover a{
			color: white!important;
			}
			.secondbtn{
			color: black;
			font-weight: bold!important;
			margin-left: 90px;
			position: absolute;
			margin-top: -61px!important;
			z-index: 1;
			border-radius: 25px;
			}
			.secondbtn:hover{
			background-color:#FA057E;
			}
			.secondbtn:hover a{
			color: white!important;
			}
			.vertical-center {
			margin: 0;
			position: absolute;
			top: 50%;
			left: 34%;
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			}
			.fa-plus-circle: hover{
			color: #FF1493;
			}
			
			
			/*index on hover show button index page strat*/
			.vertical-center {
			position: relative;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: .5s ease;
			}
			.buttonoverlay{
			position: absolute;
			top: 100%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			text-align: center;
			}
			.img-box:hover .vertical-center {
			opacity: 1;
			}
			/*index on hover show button index page end*/
			
			
			@media only screen and (min-width: 768px) and (max-width: 900px){
			.secondbtn {
			color: black;
			font-weight: bold!important;
			margin-left: 28px;
			position: absolute;
			margin-top: -61px!important;
			z-index: 1;
			border-radius: 25px;
			font-size: 10PX;
			}
			.hoverbtn{
			left: 122px;
			}
			.cartitem1 {
			position: absolute;
			margin-top: 48px;
			margin-left: 293px;
			color: white;
			}
			.cartitem2 {
			position: absolute;
			margin-top: 357px;
			margin-left: 306px;
			color: white;
			}
			}
			.hoverbtn:hover #whitetxt{
			color:white!important;
			}
			/*.product article .pro-thumb {
			height: 310px!important;
			width: 100%!important;
			}*/
			.diff article .diff2{
			height: 310px!important;
			width: 100%!important;
			}
			.indexpart{
			z-index: 99999!important;
			}
			
			.bg-image{
			background-image: url("<?= base_url('public/images/questonans_Banner.jpg') ?>");
			padding: 100px 140px 120px;
			height: 100vh;
			width: 100%;
			background-repeat: no-repeat;
			background-size: cover;
			top: 0;
			}
			.banner-textarea {
			text-align: right;
			position: absolute;
			right: 0;
			bottom: 100px;
			color: #fff;
			padding: 20px 80px;
			}	
			#getStart{
			border-radius: 50px;
			}
			
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			.mainbanner
			{
			height: 250px!important;
			width: 100%;
			}
			.bg-image {
			height: 50vh;
			width: 100%;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			top: 0;
			}
			.qnatext{
			font-size: 10px
			}
			.qnatext2{
			font-size: 10px
			}
			#getStart{
			font-size: 10px;
			}
			}             
		</style>
	</head>
	<body>
		<!-- Header Section Start -->
		<?php include('include/header.php'); ?>
		<!-- Header Section End -->
		<!-- Revolution Layer Slider -->
		<div class="carousel-content carousel-content-home-page-2 ">
			<div class="container-fuild">
				<!--bootstarp carousal Start--->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_01.jpg" class="d-block w-100 mainbanner" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_02.jpg" class="d-block w-100 mainbanner" alt="...">
						</div>	
						<div class="carousel-item">
							<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_03.jpg" class="d-block w-100 mainbanner" alt="...">
						</div>
					</div>
					
				</div>
				<!--bootstarp carousal End--->
				<div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container d-none" data-alias="scroll-effect136" data-source="gallery" style="padding:0px;">
					<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
					<div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
						<ul>
							<!-- SLIDE  -->
							<li data-index="rs-3043" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="NEW ELEGENCE" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_01.jpg"  alt="" data-bgposition="center center"  class="lazy" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
								<!-- LAYERS -->						
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-3042" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Big &amp; Bold" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_02.jpg" alt=""  data-bgposition="center center"  class="lazy" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
								<!-- LAYERS -->
							</li>
							
							<!-- SLIDE  -->
							<li data-index="rs-3044" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Beauty Here" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_03.jpg" alt="" data-bgposition="center center" class="lazy" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
								<!-- LAYERS -->
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div>
				<!-- END REVOLUTION SLIDER -->
			</div>
		</div>
		
		<!--NEW SECTION START--> 
		<section class="pro-content cart-content testimonails-content animate__animated animate__backInUp ">
			<div class="container"> 
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title"> 
							<h1> ELEVATE YOUR ESSENTIAL</h1>
						</div>
					</div>
				</div>
				<div class="row justify-content-center ">
					<div class="col-12   col-lg-7 ">
						<p class="centertxt">SHOP THIS LOOK</p>
						<h5 class="centertxt" ><b>BUNDLE & SAVE</b></h5> 
						<table class="table top-table">
							<tbody>
								<tr class="d-flex">
									<td><span style="height:30px !important; width:30px !important; border-radius:50%; padding:2px 5px; border:2px solid black;">1</span></td>
									<td class="col-8 col-md-2" >
										<img class="img-fluid lazy" src="<?= base_url('public/')  ?>images/product_images/product_image_02.jpg" alt="Product Image"/>
									</td>
									<td class="col-12 col-md-6">
										<div class="item-detail">
											<span class="pro-info">Earrings</span>
											<h2 class="pro-title">
												<a href="<?= base_url('Home/ProductDetails') ?>">
													Crystal Water Drop Earrings
												</a>
											</h2>
											<div class="item-attributes"></div>
											<div class="item-controls">
												<select class="form-control">
													<option class="">Select your size</option>
													<option>XL</option>
													<option>XL</option>
													<option>XL</option>
													<option>XL</option>	
												</select>
											</div>
										</div>
									</td>
									<!--td class="col-12 col-md-2"><span class="item-price">₹285</span></td-->
									<td class="col-12 col-md-2">
										<div class="input-group item-quantity">
											<input type="text" id="quantity1" name="quantity" class="form-control" value="2" >
											<span class="input-group-btn">
												<button type="button" value="quantity1" class="quantity-plus btn"  data-type="minus" data-field="">
													<span class="fas fa-plus"></span>
												</button>
												<button type="button" value="quantity1"  class="quantity-minus btn" data-type="plus" data-field="">
													<span class="fas fa-minus"></span>
												</button>
											</span>
										</div>
									</td>
									<td class="col-12 col-md-2"><span class="item-price">₹570</span></td>
								</tr> 
								<tr class="d-flex">
									<td><span style="height:30px !important; width:30px !important; border-radius:50%; padding:2px 5px; border:2px solid black;">2</span></td>
									<td class="col-8 col-md-2" > 
										<img class="img-fluid lazy" src="<?= base_url('public/')  ?>images/product_images/product_image_03.jpg" alt="Product Image"/>
									</td>
									<td class="col-12 col-md-6">
										<div class="item-detail">
											<span class="pro-info">Ring Collection</span>
											<h2 class="pro-title">
												<a href="<?= base_url('Home/ProductDetails') ?>">
													Crytal Wedding Engagement 
												</a>
											</h2>
											<div class="item-attributes"></div>
											<div class="item-controls">
												<select class="form-control">
													<option class="">Select your size</option>
													<option>XL</option>
													<option>XL</option>
													<option>XL</option>
													<option>XL</option>	
												</select>
											</div>
										</div>
									</td>
									<!--td class="col-12 col-md-2"><span class="item-price">₹85</span></td-->
									<td class="col-12 col-md-2">
										<div class="input-group item-quantity">
											<input type="text" id="quantity2" name="quantity" class="form-control" value="4" >
											<span class="input-group-btn">
												<button type="button" value="quantity2" class="quantity-plus btn"  data-type="minus" data-field="">
													<span class="fas fa-plus"></span>
												</button>
												
												<button type="button" value="quantity2" class="quantity-minus btn" data-type="plus" data-field="">
													<span class="fas fa-minus"></span>
												</button>
											</span>
										</div>
									</td>
									<td class="col-12 col-md-2"><span class="item-price">₹340</span></td>
								</tr>
							</tbody>
						</table>
						<div class="row my-4 ">
							<div class="col-sm-12 mx-auto"><center><a href="<?= base_url('Home/Cart') ?>" type="submit" class="btn btn-secondary swipe-to-top" style="width:100%;">BUY NOW</a></center></div>
						</div>
					</div>
					<div class="col-12  col-lg-5">
						<div class="slider-wrapper" id="itemsdata">
							<div class="cartimgsection" >
								<span class="fa fa-plus-circle fa-2x  cartitem1" data-toggle="popover-hover" title="Popover title"
								data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
								<span class="fa fa-plus-circle fa-2x  cartitem2" data-toggle="popover-hover" title="Popover title"
								data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
								<div class="col-12 col-md-6 d-none" id="chk"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--questionn ans sec--->
		<section class="pro-content pro-plr-content py-0" style="padding-bottom: 0px;">
			<div class="container-fluid ">
				<div class="products-area">
					<div class="row ">
						<div class="col-12 col-md-12 col-lg-12 bg-image">
							<div class="">
								<div class="banner-textarea">
									<h1 class="uppercase qnatext">Discover your</h1>
									<h1 class="uppercase qnatext">Personal style</h1>
									<h4 class="light qnatext2">Let us be your perfect styling partner</h4>
									<button class=" btn btn-secondary font-weight-bold" id="getStart" data-target="#QuestionAnsModal" data-toggle="modal" >Get started<i class="bi bi-caret-right-fill"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--questionn ans sec end--->
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container-fluid">
				<div class="products-area">
					<div class="row m-0 justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<h2>Welcome to Store</h2>
								<p>Vitae posuere urna blandit sed. Praesent ut dignissim risus. </p>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-12 col-md-4 col-lg-4">
							<div class="">
								<figure class="banner-image">
									<a href="#"><img class="img-fluid lazy bannerimgs" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/index_a2-1.jpg" src="<?= $this->data->lazyLoader;?>" style="height: 500px" alt="Banner Image"></a>
								</figure>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-4">
							<div class="">
								<figure class="banner-image">
									<a href="#"><img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader;?>" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/index_a2-1.jpg" style="height: 500px" alt="Banner Image"></a>
								</figure>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-4">
							<div class="last">
								<figure class="banner-image">
									<a href="#"> <img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader;?>" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/index_a2-1.jpg" style="height: 500px" alt="Banner Image"></a>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Special Offer -->
		<section class="pro-content pro-tr-content testimonails-content ">
			<div class="container-fluid">
				<div class="products-area ">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<h2 class="text-uppercase">Gift Wrapping
								</h2>
								<p>Morbi venenatis felis tempus feugiat maximus.</p>
							</div>
						</div>
					</div>
					<div class="row p-1">
						<div class="col-12 col-log-6 col-sm-6 col-md-6">
							<div class="tab-carousel-js-gift row">
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff aos-init aos-animate ">
										<article>
											<div class="pro-thumb diff2 giftpack" >
												<div class="pro-tag">Sale</div>
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_01.jpg" alt="Product Image" style="height: 310px!important;"></span>
													
												</a>
											</div>
											<div class="pro-description text-center">
												<a href="<?php echo  base_url('Home/ProductDetails')?>" class="pro-info ">
													Ring Collection
												</a>
											</div>
											
										</article>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff">
										<article>
											<div class="pro-thumb diff2  giftpack">
												<div class="pro-tag">Sale</div>
												
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_02.jpg" alt="Product Image"></span>
												</a>
											</div>
											
											<div class="pro-description text-center">
												<a href="<?php echo  base_url('Home/ProductDetails')?>" class="pro-info text-center">
													Earrings
												</a>
											</div>
										</article>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff">
										<article>
											<div class="pro-thumb diff2 giftpack">
												<div class="pro-tag">Sale</div>
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_03.jpg" style="height: 310px!important;" alt="Product Image"></span>
												</a>
											</div>   
											<div class="pro-description">
												<a href="<?php echo  base_url('Home/ProductDetails')?>"class="pro-info text-center">
													Ring Collection
												</a>
											</div>
										</article>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff">
										<article>
											<div class="pro-thumb diff2 giftpack">
												<div class="pro-tag">Sale</div>
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;" data-src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_04.jpg" src="<?= $this->data->lazyLoader;?>" alt="Product Image"></span>
												</a>
											</div>
											<div class="pro-description text-center">
												<a href="<?php echo  base_url('Home/ProductDetails')?>" class="pro-info text-center">
													Ring1
												</a>
											</div>
											
										</article>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff">
										<article>
											<div class="pro-thumb  diff2 giftpack">
												<div class="pro-tag">Sale</div>
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;"  data-src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_05.jpg" alt="Product Image"></span>
												</a>
											</div>
											<div class="pro-description text-center">
												<a href="<?php echo  base_url('Home/ProductDetails')?>" class="pro-info text-center">
													Bangle
												</a>
											</div>
										</article>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-3">
									<div class="product diff">
										<article>
											<div class="pro-thumb diff2 giftpack">
												<a href="<?php echo  base_url('Home/ProductDetails')?>">
													<span class="pro-image"><img class="img-fluid giftpackimg" style="height: 310px!important;" src="<?= base_url('public') ?>/images/product_images_demo_2/product_image_06.jpg" alt="Product Image"></span>  
												</a>
												<div class="pro-tag">Sale</div>
											</div>
											<div class="pro-description text-center">
												<a href="<?php echo  base_url('Home/ProductDetails')?>" class="pro-info text-center">
													Bracelet
												</a>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-log-6 col-sm-6 col-md-6">
							<iframe width="100%" height="340" src="https://www.youtube.com/embed/3mQzTfzcKmk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- product Section  Start -->
		<!-- Products Tabs -->
		<section class="pro-content pro-tab-content" style="padding-bottom: 25px;">
			<div class="container-fluid">
				<div class="products-area">
					
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<h2 class="text-uppercase"> New and core collection</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-12">
							<div role="tabpanel" class="tab-pane fade active show" style="padding:0px;"  id="featured">
								<div class="tab-carousel-js row">
									<?php
										$sr = 1;
										foreach($this->corecollection as $each)
										{
											$icons = explode(',',$each->image1);
										?>
										<div class="col-12 col-sm-6 col-md-4 col-lg-3">
											<div class="product">
												<article>
													<div class="pro-thumb">
														<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>" class="indexpart" >
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
														</a>
													</div>
													<div class="pro-description">
														<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>" class="pro-info">
															<?= $each->name;?>
														</a>
													</div>
												</article>
											</div>
										</div>
										<?php
											$sr++;
										}
									?>
								</div>
								<!-- 1st tab -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Zoom Image -->
		<section class="">
			<div class="container-fluid">
				<div class="row ">
					<div class="col-sm-12 ">
						<div class="img-box">
							<div class="imgback" style="background-image: url('<?= base_url('public') ?>/images/revolution_layer_slider_demo_3/Slider_01_03.jpg');">
								<div class="vertical-center">
									<div class="buttonoverlay"><a href="<?= base_url('Home/Product') ?>" class="btn btn-secondary text-white">Shop Now</a></div>
								</div>
							</div>
							
						</div>
					</div>	
				</div>
				<div class="row my-1">
					<div class="col-sm-4 col-sm-12 col-lg-4">
						<div class="img-box">
							<div class="imgback" style="background-image:url(https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aGFuZGJhZ3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500)">
								<div class="vertical-center" >
									<div class="buttonoverlay"><a href="<?= base_url('Home/Product') ?>" class="btn btn-secondary text-white ">Shop Now</a></div>
								</div>
							</div>
							
						</div>
					</div>	
					<div class="col-sm-4 col-sm-12 col-lg-4"> 
						<div class="img-box">
							<div class="imgback" style="background-image:url('<?= base_url('public') ?>/images/product_images/product_image_01.jpg')" >
								<div class="vertical-center" >
									<div class="buttonoverlay"><a href="<?= base_url('Home/Product') ?>" class="btn btn-secondary text-white ">Shop Now</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-sm-12 col-lg-4">
						<div class="img-box">
							<div class="imgback" style="background-image:url(https://www.dealsshutter.com/blog/wp-content/uploads/2020/10/Stilleto.jpg)" >
								<div class="vertical-center" >
									<div class="buttonoverlay"><a href="<?= base_url('Home/Product') ?>" class="btn btn-secondary text-white ">Shop Now</a></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!--Zoom Image End-->
		<section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
			<div class="container-fluid">
				<div class="products-area">
					
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<h2 class="text-uppercase"> Our Products</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteee.</p>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-12">
							<div role="tabpanel" class="tab-pane fade active show" style="padding:0px;" id="featured">
								<div class="tab-carousel-js row">
									<?php
										$sr = 1;
										foreach($this->newproducts as $each)
										{
											$icons = explode(',',$each->image1);
										?>
										<div class="col-12 col-sm-6 col-md-4 col-lg-3">
											
											<div class="product">
												<article>
													<div class="pro-thumb ">
														
														<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>" class="indexpart">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>"  data-src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
															
														</a>
													</div>
													<div class="pro-description">
														<span class="pro-info">
															<?= $each->name;?>
														</span>
													</div>
												</article>
												
											</div>
											
										</div>
										<?php
											$sr++;
										}
									?>
								</div>
								<!-- 1st tab -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
			<div class="container-fluid" style="padding: 18px;">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<h2 class="text-uppercase"> Our Categories</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				
				<div class="row p-2">
					<div class="col-sm-6 col-12 p-0">
						<div class="img-wrapper p-1">
							<img data-src="<?= base_url('public') ?>/uploads/salecomponent.webp" class="img-fluid inner-image lazy" src="<?= $this->data->lazyLoader;?>" style="border-radius: 8px;">  
							<div class="btn btn-light hoverbtn text-center " ><a href="<?= base_url('Home/Product') ?>" id="whitetxt" style="text-align: center;"> Buy Now</a></div>
						</div>
						
					</div>  
					<div class="col-sm-6">
						<div class="row ">
							<div class="col-sm-6 col-6 p-1">
								<div class="img-wrapper">
									<img data-src="<?= base_url('public') ?>/uploads/salecomponent2.webp" class="img-fluid inner-image lazy" src="<?= $this->data->lazyLoader;?>" style="border-radius: 8px;"> 
								</div>
								<div class="btn btn-light secondbtn"><a href="<?= base_url('Home/Product') ?>" style="text-align: center; color: black"> Buy Now </a></div>
							</div>   
							<div class="col-sm-6 col-6 p-1">
								<div class="img-wrapper">
									<img data-src="<?= base_url('public') ?>/uploads/salecomponent3.jpg" src="<?= $this->data->lazyLoader;?>" class=" lazy img-fluid inner-image" style="border-radius: 8px;"> 
								</div>
								<div class="btn btn-light secondbtn"><a href="<?= base_url('Home/Product') ?>" style="text-align: center;color: black"> Buy Now </a></div>
							</div>   
						</div>	
						<div class="row">
							<div class="col-sm-6 col-6 p-1">
								<div class="img-wrapper">
									<img data-src="<?= base_url('public') ?>/uploads/salecomponent2.webp" class="img-fluid inner-image lazy" src="<?= $this->data->lazyLoader;?>" style="border-radius: 8px;">
								</div>
								<div class="btn btn-light secondbtn"><a href="<?= base_url('Home/Product') ?>" style="text-align: center;color: black"> Buy Now </a></div>
							</div>   
							<div class="col-sm-6 col-6 p-1">
								<div class="img-wrapper">
									<img data-src="<?= base_url('public') ?>/uploads/salecomponent4.webp" class="img-fluid inner-image lazy" style="border-radius: 8px;">
								</div>
								<div class="btn btn-light secondbtn"><a href="<?= base_url('Home/Product') ?>" style="text-align: center;color: black"> Buy Now </a></div>
							</div>   
						</div>
					</div>  
				</div>  
			</div>	
		</section>
		
		<!-- Special Offer -->
		<?php 
			$sr = 1;
			if(!empty($prebooklist)){
			?>
			<section class="pro-content pro-tr-content " style="padding-bottom: 0px;">
				<div class="container-fluid">
					<div class="products-area ">
						<?php 
							$count=0;
							foreach($prebooklist as $each){
								$current_time=date('Y-m-d h:i');
								if($this->subscription=='true'){ 
									$day_limit=$this->db->get_where('manage_content')->row(); 
									$prev_days="-".$day_limit->royal_feature_activated_limit." day";
									$launch_time=date('Y-m-d h:i',strtotime($prev_days,strtotime($each->launch_time)));
								}
								else{ 
									$launch_time=date('Y-m-d h:i',strtotime($each->launch_time));
								} 
								if($current_time>=$launch_time){
									$count++;
									if($count==1){
									?>
									<div class="row justify-content-center">
										<div class="col-12 col-lg-12">
											<div class="pro-heading-title">
												<h2>Pre Book
												</h2>
												<p>Morbi venenatis felis tempus feugiat maximus.</p>
											</div>
										</div>
									</div>
								<?php  } } } ?>
								<div class="products mb-3" >
									<div class="tab-carousel-js row">
										<?php
											foreach($prebooklist as $each)
											{
												$Variants=$this->db->get_where('product_variant',array('product_id'=>$each->id,'is_status'=>'true'))->result(); 
												if(!empty($Variants)){ 
													foreach($Variants as $Variant){
														if(!empty($Variant->variant_img)){
															$icons = explode(',',$Variant->variant_img);
														}
														else{
															$icons = explode(',',$each->image1);
														} 
														$current_time=date('Y-m-d h:i');
														$launch_time=date('Y-m-d h:i',strtotime($each->launch_time));
														if($current_time>=$launch_time){
															$date_difference = date_diff(date_create($current_time),date_create($launch_time));  
															$days=$date_difference->format('%r%a');
															$hour=$date_difference->format('%r%h');
															$min=$date_difference->format('%r%i'); 
															$timer=$days."D".$hour."H".$min."M"; 
														?>
														<div class="col-6 col-md-4 col-lg-3 col-xl-3 tile-view-card" >
															<div class="product product-7 text-center " >  
																<form action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
																	<figure class="product-media">
																		<a href="<?php echo  base_url('Home/Prebooking/').$each->id.'/'.$Variant->id?>"> 
																			<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>"  class="product-image  ">
																			<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
																		</a>
																		<div class="product-action-vertical d-none">  
																			<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $Variant->id; ?>)"><span>add to wishlist</span></a>
																			<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable"" title="Quick view" onclick="quickView(<?= $Variant->id; ?>,'Individual')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																			<!--<a href="<?= base_url('Home/Compare')?>" class="btn-product-icon btn-compare btn-expandable"" title="Compare"><span>Compare Product</span></a>-->
																		</div><!-- End .product-action-vertical -->
																		<?php if(!empty($timer)){
																		?>    
																		<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?=$timer?>"></div>
																		<?php } ?>   
																	</figure><!-- End .product-media -->
																	<div class="product-body">
																		<h2 class="product-title"><a href="<?php echo  base_url('Home/Prebooking/').$each->id.'/'.$Variant->id?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																		<div class="product-cat">
																			<a href="<?php echo  base_url('Home/Prebooking/').$each->id.'/'.$Variant->id?>"><?= $each->title; ?></a>
																		</div><!-- End .product-cat -->
																		<div class="product-price">
																			<span>₹<?=(int)$each->reg_sell_price;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->reg_sell_price==(int)$each->mrp){ echo "d-none";} ?>" style="color: gray;"><?= $each->mrp ?></del>
																		</div><!-- End .product-price -->
																		<div class="product-price d-flex align-items-start flex-column" style="font-size:1rem;"> 
																			<p class="mb-0 d-flex" style="background:lavender;padding:4px;border-radius:4px;">Prebooking:₹<?=(int)$each->prebook_amt;?>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="popover-hover" data-content="You can purchase this product at ₹<?=(int)$each->prebook_amt;?> , rest amount ₹<?php echo ((int)$each->reg_sell_price-(int)$each->prebook_amt);?> you have to pay before the delivery date" data-placement="top" style="cursor:pointer; font-size: 14px; color: grey;"></i></p>
																		</div><!-- End .product-price -->
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
													}
												}
												$sr++;
											}
										?>
									</div><!-- End .row -->
								</div><!-- End .products -->
					</div>
				</div>
			</section>
		<?php }  ?>
		<!-- Products Tabs -->
		
		<!-- Our Clients  Start-->
		<section class="pro-content pro-tab-content " style="padding-bottom: 0px;" >
			<div class="container-fluid" >   
				<div class="products-area">
					
					<div class="row justify-content-center">           
						<div class="col-12 col-lg-12">              
							<div class="pro-heading-title"> 
								<h2> OUR CLIENTS</h2>           
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, impedit itaque
								</p>
							</div>
						</div>
					</div>
					<!-- ..........tabs start ......... -->
					<div class="row p-2">
						<div class="col-md-12">
							<!-- Tab panes -->
							<div class="tab-content ">
								<div role="tabpanel" class="tab-pane fade active show" id="featured">
									<div class="tab-carousel-js-row row ">
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_01.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
																<div class="overlay"></div>
															</span>
														</a>
														<div class="pro-buttons d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_02.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															</span>
														</a>
														<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_03.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top  d-lg-block d-xl-block overlay">
															</span>
														</a>
														<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<!-- <div class="pro-tag bg-success">NEW</div> -->
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_04.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
																<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_04_02.jpg" alt="Product Image"> -->
															</span>
														</a>
														<div class="pro-buttons d-none d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<!-- <div class="pro-tag bg-success">NEW1</div> -->
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_05.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
																<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_05_02.jpg" alt="Product Image"> -->
															</span>
														</a>
														<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<!-- <div class="pro-tag bg-success">NEW</div> -->
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_06.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
																<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_06_02.jpg" alt="Product Image"> -->
															</span>
														</a>
														<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
																<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-12 p-0">
											<div class="product">
												<article>
													<div class="pro-thumb tworow">
														<!-- <div class="pro-tag bg-success">NEW</div> -->
														<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_07.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_07_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
															</div>
															</article>
															</div>
															</div>
															<div class="col-12 p-0">
															<div class="product">
															<article>
															<div class="pro-thumb tworow">
															<!-- <div class="pro-tag bg-success">NEW</div> -->
															<a href="javascript:void(0)">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public') ?>/images/product_images/product_image_08.jpg" alt="Product Image"></span>
															<span class="pro-image-hover swipe-to-top   d-lg-block d-xl-block overlay">
															<!-- <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/product_images/product_image_08_02.jpg" alt="Product Image"> -->
															</span>
															</a>
															<div class="pro-buttons  d-lg-block d-xl-block">
															<div class="pro-icons">
															<a href="javascript:void(0)" class="icon swipe-to-top"><i class="fab ig fa-instagram" data-fa-transform="rotate-90"></i></a>
															</div>
															</div>
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
															</div>
															</section>
															<!-- Our Clients  End-->
															
															
															<!-- Our Promises -->
															<section class="pro-content testimonails-content" style="padding-bottom:10px;">
															
															<div class="container">
															<!-- heading -->
															
															<div class="row justify-content-center">
															<div class="col-12 col-lg-12">
															<div class="pro-heading-title">
															<h2> Our Promise
															</h2>
															<p>Vitae posuere urna blandit sed. Praesent ut dignissim risus. </p>
															</div>
															</div>
															
															<div class="col-12 col-sm-4 col-lg-4 col-md-4">
															<img class="img-fluid w-100 lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/test1-1.jpg" alt="Banner Image" id="colimg">
															</div>
															<div class="col-12 col-sm-4 col-lg-4 col-md-4">
															<img class="img-fluid w-100 lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/test.jpg" alt="Banner Image" id="colimg">
															</div>
															<div class="col-12 col-sm-4 col-lg-4 col-md-4">
															<img class="img-fluid w-100 lazy" data-src="https://mansastyle.com/slickpattern/wp-content/uploads/2021/12/dffffffffdf.jpg" alt="Banner Image" id="colimg">
															</div>
															</div>
															</div>
															</section>
															
															<!-- Product Modal -->
															<div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">
															
															<div class="modal-dialog modal-lg" role="document">
															<div class="modal-content">
															<div class="modal-body">
															
															<div class="container">
															<div class="row align-items-center">
															<div class="col-12 col-md-6">
															<div class="row ">
															<div id="quickViewCarousel" class="carousel slide" data-ride="carousel">
															<!-- The slideshow -->
															<div class="carousel-inner">
															<div class="carousel-item active">
															
															<img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_01.jpg" alt="image">
															</div>
															<div class="carousel-item">
															
															<img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_02.jpg" alt="image">
															</div>
															<div class="carousel-item">
															
															<img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_03.jpg" alt="image">
															</div>
															<div class="carousel-item">
															
															<img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_04.jpg" alt="image">
															</div>
															</div>
															<!-- Left and right controls -->
															<a class="carousel-control-prev" href="#quickViewCarousel" data-slide="prev">
															<span class="fas fa-angle-left "></span>
															</a>
															<a class="carousel-control-next" href="#quickViewCarousel" data-slide="next">
															<span class="fas fa-angle-right "></span>
															</a>
															
															</div>
															</div>
															</div>
															<div class="col-12 col-md-6">
															<div class="pro-description">
															<h2 class="pro-title">Teclast X22 Air LCD Screen </h2>
															
															<div class="pro-price">
															<ins>₹1100</ins>
															</div>
															
															<div class="pro-infos">
															<div class="pro-single-info"><b>Product ID :</b>1004</div>
															<div class="pro-single-info"><b>Categroy :</b><a href="#">Slim LCD Touch Screen</a></div>
															<div class="pro-single-info">
															<b>Tags :</b>
															<ul>
															<li><a href="#">LCD</a></li>
															<li><a href="#">Monitor</a></li>
															<li><a href="#">Accessories</a></li>
															</ul>
															</div>
															<div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>
															</div>
															
															<p>
															Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
															</p>
															<div class="pro-counter">
															<div class="input-group item-quantity">
															
															<input type="text" id="quantity1" name="quantity" class="form-control quantity " value="10">
															
															<span class="input-group-btn">
															<button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
															<i class="fas fa-plus"></i>
															</button>
															
															<button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
															<i class="fas fa-minus"></i>
															</button>
															</span>
															</div>
															<button type="button" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">Add to Cart</button>
															
															</div>
															</div>
															</div>
															</div>
															</div>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
															</div>
															</div>
															</div>
															</div>
															
															<style>
															#qnabody  .card{
															border: 0px !important;
															}
															</style>
															
															
															
															<!-- Footer Section Start  And Back To top -->
															<?php include('include/footer.php'); ?>
															<!-- Footer Section End -->
															
															<!-- Newsletter Modal -->
															<div class="modal fade show" id="newsletterModal" tabindex="-1" role="dialog" aria-hidden="false">
															
															<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
															<div class="modal-content">
															<div class="modal-body">
															
															<div class="container">
															<div class="row align-items-center">
															<div class="col-12 col-md-6">
															<div class="row ">
															<div class="pro-image">
															<img class="img-fluid lazy" src="<?= base_url('uploads/websitecontent/').$newsletterlist->icon?>" alt="image">	
															</div>
															</div>
															</div>
															<div class="col-12 col-md-6">
															<div class="promo-box">
															<div class="text-01">
															<?= $newsletterlist->title?>
															</div>
															<div class="text-03">
															<?= $newsletterlist->description?>
															</div>
															<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
															<div class="form-group">
															<input type="email" value="" name="email" class="required email form-control" placeholder="Enter Your Email Address...">
															</div>
															<button type="submit" value="Subscribe" name="subscribe" id="addBtn" class="btn btn-secondary swipe-to-top">Subscribe<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
															</form>
															</div>
															
															</div>
															</div>
															</div>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
															</div>
															</div>
															</div>
															</div>
															
															
															
															<!--	<div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog" role="document" id="modal-dialog">
															<div class="modal-content" id="modal-content" style="background-image:url('<?= base_url('uploads/websitecontent/').$popuplist->icon?>');   background-size: 100% 100%;">
															<div class="modal-header" id="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
															</div>
															<div class="modal-body text-center">-->
															<!--img src="<?= base_url('public/images/offerimages.png') ?>" class="img-fluid"-->
															<!--div class="icon text-danger">
															<i class="fas fa-gift"></i>
															</div>
															<div class="notice">
															<h4 class="h4">Get 50% Discount</h4>
															<p class="para">For the next 24 hours you can get any product at half-price.</p>
															
															<p class="promo">Use promo code <span class="badge badge-info">50-OFF</span> at checkout.</p>
															</div>
															<div class="code"></div-->
															<!--</div>-->
															<!--div class="modal-footer d-flex justify-content-between">
															<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Nevermind</button>
															<button type="button" class="btn btn-danger btn-sm">Get Code</button>
															</div
															</div>
															</div>
															</div>
															-->
															
															<style>
															.parent-round-gender {
															width: 100px;
															height: 100px;
															margin-left: 15px;
															margin-right: 15px;
															display: inline-block;
															background-color: rgb(203, 203, 203);
															border-radius: 50%;
															}	
															.round male{
															height: 100px;
															width: 100px;
															}
															#QuestionAnsModal #qnabody card{
															border: 0px;
															}
															.circleimg{
															border-radius: 50%!important;
															height: 80px!important;
															width: 80px!important;
															border: 1px solid black;
															text-align: center!important;
															}
															.circle-img{
															border-radius: 50%;
															}
															</style>
															
															
															<!-- Question Ans Modal -->
															<div class="modal fade" id="QuestionAnsModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg">
															<div class="modal-content">
															<div class="modal-header bg-secondary text-white" style="border: 0px;">
															<h5 class="modal-title" id="staticBackdropLabel">Style Quiz</h5>
															<button type="button" onclick="CloseQuizModal()" class="close"  aria-label="Close">
															<span aria-hidden="true" class="text-white">&times;</span>
															</button>
															</div>
															<div class="modal-body" id="qnabody">
															<!--div class="row">
															<div class="col-sm-12">
															<p>I describe myself as</p>  
															<div class="gender" style="text-align:center">
															
															<div class="parent-round-gender">
															<a href="javascript:void(0)" onclick="getSkinTone('male')"><div class="round male" data="male" data-name="gender" style="background-image:url('https://elanstreet.com/skin/frontend/base/default/stylequiz/images/man.png'); height:110px; width:110px" rel="1"></div></a>
															</div>
															<div class="parent-round-gender">
															<a href="javascript:void(0)" onclick="getSkinTone('female')" ><div class="round female" data="male" data-name="gender" style="background-image:url('https://elanstreet.com/skin/frontend/base/default/stylequiz/images/woman.png'); height: 110px;width:110px" rel="2"></div></a>
															</div>
															</div>
															
															</div>	
															</div-->
															
															<div class="row">
															<div class="col-sm-12">
															<p>What is your skin tone?</p>
															<div class="row">
															<div class="col-sm-3 col-6">
															<div class="card">
															<div class="card-body">
															<center>
															<img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/fair.png" style="height:110px;width:110px">
															<br>
															<span>Fair</span>
															</center>
															</div>
															</div>
															</div>
															<div class="col-sm-3 col-6">
															<div class="card">
															<div class="card-body">
															<center>
															<img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/medium.png" style="height:110px;width:110px">
															<br>
															<span>Fair/Medium</span>
															</center>
															</div>
															</div>
															</div>
															<div class="col-sm-3 col-6">
															<div class="card">
															<div class="card-body">
															<center>
															<img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/wheatish.png" style="height:110px;width:110px">
															<br>
															<span>Wheatish</span>
															</center>
															</div>
															</div>
															</div>
															<div class="col-sm-3 col-6">
															<div class="card">
															<div class="card-body">
															<center>
															<img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px">
															<br>
															<span>Dusky</span>
															</center>
															</div>
															</div>
															</div>
															<div class="col-sm-3 col-6 mx-auto mt-2">
															<div class="card">
															<div class="card-body">
															<center>
															<img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px">
															<br>
															<span>Dusky</span>
															</center>
															</div>
															</div>
															</div>
															</div>
															<div class="row mt-2">
															<div class="col-sm-6 ml-auto">
															<button class="btn btn-secondary btn-block"  onclick='getBodyType()'>NEXT <div></div>
															</div>
															</div>
															</div>
															</div>
															
															
															</div>
															
															</div>
															</div>
															</div>
															
															<?php include('include/jsLinks.php'); ?>
															
															<script>
															
															function CloseQuizModal()
															{
															Swal.fire({
															text: "If you exit the quiz all data will be lost. Please click Ok to save the data.",
															icon: 'warning',
															showCancelButton: true,
															confirmButtonColor: '#3085d6',
															cancelButtonColor: 'default',
															cancelButtonText: 'OK',
															confirmButtonText: 'Discard'
															}).then((result) => {
															if (result.isConfirmed) {
															jQuery("#QuestionAnsModal").modal('hide');
															}
															})
															}
															
															function getSkinTone(value)
															{
															$("#qnabody").html('<div class="row"><div class="col-sm-12"><p>What is your skin tone?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/fair.png" style="height:110px;width:110px"><br><span>Fair</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/medium.png" style="height:110px;width:110px"><br><span>Fair/Medium</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/wheatish.png" style="height:110px;width:110px"><br><span>Wheatish</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px"><br><span>Dusky</span></center></div></div></div><div class="col-sm-3 col-6 mx-auto mt-2"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px"><br><span>Dusky</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 ml-auto"><button class="btn btn-secondary btn-block" onclick="getBodyType()" >NEXT<div></div></div></div></div></div>');
															
															}
															
															function getBodyType()
															{
															
															$("#qnabody").html('<div class="row"><div class="col-sm-12"><p>What is your body type?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"  ><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/1.png" style="height:110px;width:110px"></a><br><span>Hourglass</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="jajascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom"src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/3.png" style="height:110px;width:110px"></a><br><span>Apple</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/4.png" style="height:110px;width:110px"></a><br><span>Pear</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/5.png" style="height:110px;width:110px"></a><br><span>Inverted Triangle</span></center></div></div></div><div class="col-sm-3 col-6 mx-auto mt-2"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom"src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/7.png" style="height:110px;width:110px"></a><br><span>Rectangle</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button onclick="getSkinTone()" class="btn btn-secondary btn-block">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()" >NEXT</button></div></div></div></div>');	
															jQuery('[data-toggle="tooltip"]').tooltip();
															
															}
															
															function getColorPrint(){
															$("#qnabody").html('<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>Choose the color/prints you like(maximum seven)</p><div class="row"><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c16.png" style="height:110px;width:110px" class="circleimg"><br><span>Dark Green</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c22.png" style="height:110px;width:110px" class="circleimg"><br><span>Polka Dots</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c17.png" style="height:110px;width:110px" class="circleimg"><br><span>Violet</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c1.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Pink</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c2.png" style="height:110px;width:110px" class="circleimg"><br><span>Navy Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c3.png" style="height:110px;width:110px" class="circleimg"><br><span>White</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c4.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Brown</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c5.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c6.png" style="height:110px;width:110px" class="circleimg"><br><span>Grey</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c7.png" style="height:110px;width:110px" class="circleimg"><br><span>Dark Brown</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c8.png" style="height:110px;width:110px" class="circleimg"><br><span>Yellow</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c9.png" style="height:110px;width:110px" class="circleimg"><br><span>Black</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c10.png" style="height:110px;width:110px" class="circleimg"><br><span>Taupe</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c11.png" style="height:110px;width:110px" class="circleimg"><br><span>Red</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c12.png" style="height:110px;width:110px" class="circleimg"><br><span>Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c13.png" style="height:110px;width:110px" class="circleimg"><br><span>Saffron</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c14.png" style="height:110px;width:110px"><br><span>Olive</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c15.png" style="height:110px;width:110px"><br><span>Turquoise</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c16.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Green</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c17.png" style="height:110px;width:110px" class="circleimg"><br><span>Silver</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c18.png" style="height:110px;width:110px" class="circleimg"><br><span>Multi Coloured</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c19.png" style="height:110px;width:110px" class="circleimg"><br><span>Aztec</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c23.png" style="height:110px;width:110px" class="circleimg"><br><span>Gold</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c21.png" style="height:110px;width:110px" class="circleimg"><br><span>Stripes</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c22.png" style="height:110px;width:110px" class="circleimg"><br><span>Floral</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c27.png" style="height:110px;width:110px" class="circleimg"><br><span>Checks</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c24.png" style="height:110px;width:110px"><br><span>Animal</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getFabric()">NEXT</button></div></div></div></div>');
															}
															
															function  getFabric(){
															$("#qnabody").html('<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>your favorite fabric?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b1.png" class="circle-img" style="height:110px;width:110px"><br><span>Cotton</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b2.png" class="circle-img" style="height:110px;width:110px"><br><span>lycra</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b3.png" class="circle-img" style="height:110px;width:110px"><br><span>silk</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b4.png" class="circle-img" style="height:110px;width:110px"><br><span>linen</span><a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b5.png" class="circle-img" style="height:110px;width:110px"><br><span>Velvet</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Polyster</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>rayon</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b8.png" class="circle-img" style="height:110px;width:110px"><br><span>satin</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b9.png" class="circle-img" style="height:110px;width:110px"><br><span>organza</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>Cambric</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>wool</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="wearMost()">NEXT</button></div></div></div></div>');
															}
															
															
															function wearMost(){
															
															$("#qnabody").html('<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>What do you like to wear most?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b1.png" class="circle-img" style="height:110px;width:110px"><br><span>Short Skirt</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b2.png" class="circle-img" style="height:110px;width:110px"><br><span>Shorts</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b3.png" class="circle-img" style="height:110px;width:110px"><br><span>Dress</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b4.png" class="circle-img" style="height:110px;width:110px"><br><span>Saree</span><a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b5.png" class="circle-img" style="height:110px;width:110px"><br><span>Kurti</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Suit</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Formal Trousers</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b8.png" class="circle-img" style="height:110px;width:110px"><br><span>Casual Denim</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b9.png" class="circle-img" style="height:110px;width:110px"><br><span>Salwar Suit</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>Maxi Dress</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block"onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getPersonalStyle()">NEXT</button></div></div></div></div>');
															}
															
															function getPersonalStyle(){
															$("#qnabody").html('<div class="row" style="height:350px;overflow-y:scroll" ><div class="col-sm-12"><p>What is your personal style?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p3.png" class="circle-img" style="height:110px;width:110px"><br><span>Elegant</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p4.png" class="circle-img" style="height:110px;width:110px"><br><span>Girly</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p6.png" class="circle-img" style="height:110px;width:110px"><br><span>Trendy</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p7.png" class="circle-img" style="height:110px;width:110px"><br><span>Fusion</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p8.png" class="circle-img" style="height:110px;width:110px"><br><span>Ethnic</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p9.png" class="circle-img" style="height:110px;width:110px"><br><span>Casual</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p12.png" class="circle-img" style="height:110px;width:110px"><br><span>Glamorous</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getFabric()" >BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="bodyMeasurements()">NEXT</button></div></div></div></div>');
															}
															
															function bodyMeasurements(){
															$("#qnabody").html('<div class="row"><div class="col-sm-12 "><div class="form-group"><p class="text-center font-weight-bold">Height</p><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Petite</label>&ensp; <input type="radio" name="average" id="average">&nbsp;<label for="average">Average</label>&ensp; <input type="radio" name="average" id="tall">&ensp;<label for="tall">Tall</label></div></div><div class="form-group"><p class="text-center font-weight-bold">Body-ratio</p><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Balanced Body</label>&ensp; <input type="radio" name="average" id="average"> &nbsp;<label for="average">Long Legged Short Torso</label>&ensp; <input type="radio" name="average" id="tall">&nbsp;<label for="tall">Short Legged</label>&ensp;</div></div><div class="form-group"><p class="text-center font-weight-bold">Build</p><div class="text-center"><input type="radio" name="petite" id="petite">&nbsp;<label for="petite">Small</label>&ensp; <input type="radio" name="average" id="average">&nbsp;<label for="average">Medium</label>&ensp; <input type="radio" name="average" id="tall">&nbsp;<label for="tall">Large</label>&ensp;</div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getPersonalStyle()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="matchingAcc()">NEXT</button></div></div></div></div>')	
															}
															
															function matchingAcc(){
															$("#qnabody").html('<div class="row"><div class="col-sm-12"><p>What do you buy in accessories matching up with your clothes?</p><div class="form-group"><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Jewelry</label>&ensp;<input type="radio" name="average" id="average">&ensp;<label for="average">Jewelry & Purse</label>&ensp;<input type="radio" name="average" id="tall">&ensp;<label for="tall">Jewelry, Purse & Footwear</label></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="bodyMeasurements()" >BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="formdata()">NEXT</button></div></div></div></div>');
															}
															
															function formdata()
															{
															$("#qnabody").html('<div class="row"><div class="col-sm-12"><div class="row"> <div class="col-sm-12"> <h5 class="text-center">Thank You!</h5><center><span class="text-center">Please fill in the details below to save your data</span></center> <br><div class="form-group"><input type="text" name="full_name" placeholder="Full Name" class="form-control form-control-lg"> </div><div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control form-control-lg"> </div><div class="row"> <div class="col-12 col-sm-6"> <div class="form-group"> <input type="number" name="mobile" placeholder="Mobile" class="form-control form-control-lg"> </div></div><div class="col-12 col-sm-6"> <div class="form-group"> <select class="form-control form-control-lg" name="age_group" style="font-size: 13px;"> <option selected disabled>Age Group</option> <option value=""> < 40 </option> <option value=""> > 40 </option></select> </div></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6 ml-auto"><button class="btn btn-secondary btn-block" onclick="getResult()" >Submit</button></div></div></div></div>');
															}
															
															function getResult(){
															location.href='<?= base_url('Home/QnaResult') ?>';
															}
															
															function Prebook(id){
															$('#prebook'+id).attr("disabled", true);
															$('#prebookSpin'+id).show();
															
															var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/Prebook/') ?>" + id;
															$.ajax({
															url: url,
															type: "post",
															
															success: function(response) {
															var response = JSON.parse(response);
															$('#prebook'+id).removeAttr("disabled");
															$('#prebookSpin'+id).hide();
															if (response[0].res == 'success') 
															{
															$('.notifyjs-wrapper').remove();
															$.notify("" + response[0].msg + "", "success");
															if (response[0].redirect) 
															{
															window.setTimeout(function() {
															window.location.href = response[0].redirect;
															}, 1000);
															} 
															else 
															{
															window.setTimeout(function() {
															window.location.reload();
															}, 1000);
															}
															}
															else if (response[0].res == 'pay') {
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
															// window.location.href=response[0].data.baseUrl+'Home/PaymentResponse/'+rzpResponse.razorpay_order_id+'/'+rzpResponse.razorpay_payment_id;
															data=response[0].data.enrollData
															url=response[0].data.baseUrl+'Home/PaymentResponse/'+rzpResponse.razorpay_order_id+'/'+rzpResponse.razorpay_payment_id;
															$.ajax({
															url: url,
															type: "post",
															data: {
															'data': data,
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
															"name": response[0].data.enrollData.Name,
															"email": response[0].data.enrollData.Email,
															"contact": response[0].data.enrollData.Mobile
															},
															"notes": {
															"address": "SlickPattern"
															},
															"theme": {
															"color": "#004bfe"
															}
															};
															var rzp1 = new Razorpay(options);
															rzp1.on('payment.failed', function (response){
															
															});
															rzp1.open();
															}
															else if (response[0].res == 'error') 
															{
															$('.notifyjs-wrapper').remove();
															$.notify("" + response[0].msg + "", "error");
															}
															}
															})
															}
															</script>
															
															</body>
															
															</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									