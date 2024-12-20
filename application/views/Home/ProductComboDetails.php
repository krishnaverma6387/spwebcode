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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" />
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/reset.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/jquery-picZoomer.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
		<!--<link rel="stylesheet" type="text/css" href="<?= base_url('public/css/productDetails.css') ?>">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/website/assets/css/plugins/magnific-popup/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?= base_url('assets/website/assets/css/plugins/nouislider/nouislider.css')?>">
		
		<style>
			html {
            scroll-behavior: smooth;
			}
			b, strong {
			font-weight: 500;
			}
			.pro-desc+p {
            margin: 0px;
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
			}
		</style>
		<!--css for countdown-->
		<style>
			.deal-countdown {
			/* margin-bottom: 0; */
			max-width: 271px;
			position: absolute;
			left: 180px;
			transform: unset;
			width: 100%;
			bottom: unset;
			top: unset;
			margin-top: -3px;
			}
			
			@media only screen and (max-width:768px) {
            .deal-countdown {
			max-width: 271px;
			position: absolute;
			left: 110px;
			transform: unset;
			width: 100%;
			bottom: unset;
			top: unset;
			margin-top: -11px;
            }
			}
			
			.countdown-show4{
			background:transparent;
			}
			.countdown-row {
			border-radius: 50px;
			width: 100%;
			text-align: center;
			padding: 8px;
			margin-left: 4px;
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
            font-size: 1.2rem !important;
            line-height: 0;
            letter-spacing: -.03em;
            margin-bottom: 0.2rem;
			}
			
			.deal-countdown .countdown-period {
			position: absolute;
			left: 16px;
			right: 0;
			top: -1px;
			text-align: center;
			bottom: 1.2rem;
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
            font-size: 1.2rem;
			}
			
			.deal-countdown .countdown-section:not(:last-child):after {
            color: #333333;
            content: ':';
            display: inline-block;
            font-weight: 700;
            font-size: 14px;
            line-height: 1;
            position: absolute;
            left: 100%;
            margin-left: -8px;
            margin-top: -15px;
            top: 50%;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
			}
			
			@media only screen and (max-width:425px) {
            .deal-countdown {
			/* margin-bottom: 0; */
			max-width: none;
			position: absolute;
			left: 107px;
			transform: unset;
			width: 70%;
			bottom: unset;
			top: unset;
			margin-top: -9px;
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
			width: calc(25% - 8px);
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
			padding:0;
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
		</style>
	</head>
	
	<body>
		
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container-fluid py-0  d-flex justify-content-between" >
					<ol class="breadcrumb" style="margin-left:5px;">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Product Details</li>
					</ol>
					<div class="" style="margin: auto 11px;">
						<span class="bi bi-gift" id="blinkgift" data-toggle="tooltip" data-placement="top" title="Gift Wrap" onclick="giftWrap()"></span>&nbsp;
						<div class="dropdown">
							<span class="bi-solid bi-share shareBtn  ml-1 dropbtn" data-toggle="tooltip" data-placement="top" title="Share"></span>
							<div class="dropdown-content">
								<!--<span class="shareBtn"><i class="fab fa-facebook-f ml-1"></i></span>
								<span class="shareBtn"><i class="bi bi-instagram"></i></span>
								<span class="shareBtn"><i class="bi bi-whatsapp"></i></span>-->
								
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
					<div class="row pt-2 m-0" >
						<div class="col-sm-6 ">
							<div class="row fixedTop" >
								<div class="col-sm-12 product-image-container" > 
									<div class="product-gallery product-gallery-vertical">
										<a href="javascript:void(0);" class="hide_in_mobile" style="font-size: 12px !important; font-weight:900; margin-left:10px;" id="modalinfotxt" data-toggle="modal" data-target="#modalinfo">Modal info</a>
										<div class="row"> 
											<?php
												$icons = explode(',', $list->image);  
											?>
											<figure class="product-main-image mb-1">
												<img id="product-zoom" src="<?= base_url('uploads/product/') . $icons[0]; ?>" data-zoom-image="<?= base_url('uploads/product/') . $icons[0]; ?>" alt="<?=$product->title;?>">
												<a href="#" id="btn-product-gallery" class="btn-product-gallery phone-product-gallert-btn position-absolute hide_desktop">
													<i class="icon-arrows"></i>
												</a>  
											</figure><!-- End .product-main-image -->
											
											<div id="product-zoom-gallery" class="product-image-gallery vertical-slider" >
												<?php
													$icons = explode(',', $list->image);   
													$count=1;
													foreach ($icons as $each) {
													?>
													<a class="product-gallery-item <?php if($count==1){echo "active";}?>" href="#" data-image="<?= base_url('uploads/product/') . $each; ?>" data-zoom-image="<?= base_url('uploads/product/') . $each; ?>">
														<img src="<?= base_url('uploads/product/') . $each; ?>" alt="<?=$product->title;?>">
													</a>
													<?php
													$count++;}
												?>
												
												
											</div><!-- End .product-image-gallery -->
										</div><!-- End .row -->
									</div><!-- End .product-gallery -->
								</div><!-- End .col-md-6 -->
								
								
								<!--like and modal info start-->
								
								<div class="col-sm-6 col-5 my-1 pl-0">  
									<span class="hide_desktop" style="color:#8340A1;"><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><a href="#reviewSection">(218)</a></span>
								</div>
								<div class="col-sm-6 col-7 my-1  text-center d-flex justify-content-end modal-info">  
									&emsp;&emsp;<span class=" p-0" id="likebtn" data-toggle="tooltip" data-placement="left" title="Like(238)" style=" font-size: 14px; font-weight: 600;"><i class="fa-regular fa-heart"></i>&nbsp;(238)</span>&nbsp;
									<a href="javascript:void(0);" class="hide_desktop" style="font-size: 12px !important; font-weight:900; margin-left:10px;" id="modalinfotxt" data-toggle="modal" data-target="#modalinfo">Modal info&nbsp;</a>
									<a href="#" id="btn-product-gallery" class="btn-product-gallery hide_in_mobile">
										<i class="icon-arrows"></i>
									</a>  
								</div>
								<!-- like and modal info end-->
								
								<!-- beauty tips and dressing sense start-->
								<!--<div class="col-md-4 col-sm-6 col-6 mt-3 pl-0">
									<h2 class="text-uppercase beautytxt">Beauty Tips</h2>
									<a href="javascript:void(0)" onclick="OpenTipsModal()"> <img src="https://d5nunyagcicgy.cloudfront.net/external_assets/hero_examples/hair_beach_v391182663/original.jpeg" class=" beauty-tips" style="width: 100%; height: 100px;"></a>
								</div>
								
								<div class="col-6 col-md-7 col-sm-6 tabs-product mt-3">
									<h2 class="text-uppercase dressingtxt">Dressing Tips </h2>
									<div class="dressing-slider owl-carousel row">
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													<img class="img-fluid swipe-to-top" src="<?= base_url('public/') ?>images/blogs/blog_post_1.jpg" alt="Image">
												</a>
											</div>
										</div>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_2.jpg" alt="Image">
												</a>
											</div>
										</div>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_3.jpg" alt="Image">
												</a>
											</div>
										</div>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_4.jpg" alt="Image">
												</a>
											</div>
										</div>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													
													<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_5.jpg" alt="Image">
												</a>
											</div>
										</div>
										<div class="col-12 col-md-12 pro-blog p-0">
											<div class="pro-thumb">
												<a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
													<img class="img-fluid" src="<?= base_url('public/') ?>images/blogs/blog_post_6.jpg" alt="Image">
												</a>
											</div>
										</div>
									</div>
								</div>-->
								<!-- beauty tips and dressing sense end-->
							</div>
						</div>
						
						<div class="col-sm-6 px-0 py-2 " style="font-family: 'Inter', sans-serif;"> 
							<?php
								$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$list->id,'is_status'=>'true','sale_type'=>'combo'))->row();
								if(!empty($saleProduct)){
									
									$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
									
									$last_date = date_create(date('Y-m-d H:i:s')); 
									$today = date_create($tblSale->end_date);  
									$date_difference = date_diff($last_date,$today);  
									$days=$date_difference->format('%r%a');
									$hour=$date_difference->format('%r%h');
									$min=$date_difference->format('%r%i');
									$sec=$date_difference->format('%r%s');  
									$timer=$days."D".$hour."H".$min."M".$sec."S" ;
								}
							?>
							<div class="col-sm-10 col-12 px-0 ">
								<div class="row">
									<div class="col-sm-12 col-12 pt-2">
										<div class="d-flex justify-content-between pro-desc">
											<div class="d-flex"><a href="#">
												<h4 class="p-0 m-0 " style="line-height:1; font-weight:600;"><?= $list->name ?></h4>
											</a>&nbsp;(<span class="sellerDesc">Best Seller</span>)
											</div>
											<span class="hide_in_mobile" style="color:#8340A1;">
												<?php
													$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$list->id,'is_combo'=>'true','is_status'=>'true'))->row(); 
													$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
									</div>
									
								</div>
							</div>
							
							<div class="pro-desc">
								
								<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-"){?> 
									<div class="flash-message mt-3">
										
										<div class="w-100">
											<span class="alert my-1" style="color:#e81515!important; background-color:lightpink;border:none !important;  font-weight:600; padding:5px !important;" role="alert">Flash Sale</span>
											<span style="color:#a7a0a0 !important; border:none !important;  font-weight:600; padding:5px !important;  padding-left:0px !important;">&nbsp;Ends In:</span> 
											<span style="color: #ff0c0c !important; border:none !important;   font-weight:600; padding:5px !important;" class="deal-countdown offer-countdown " data-until="<?=$timer?>"  style="background:white;" ></span>
										</div>
									</div>
									<span class="mb-2">Limited Flash Sale</span></br>
								<?php } ?>  
								
								<div class="" style="padding-top:10px;">
									
									
									<div class="product-price-info">
										<?php 
											if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
											{	$price=$list->price;  
												$discount=(int)$saleProduct->discount;
												$saleprice=$price - ( ($price/100) * $discount );
											?> 
											<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $saleprice ?></span> <span class="text-success paragraph" style="font-weight:600;"><?= $discount ?>%&nbsp;Off</span> <br>
											<?php }
											else if((int)$list->discount_price!=(int)$list->price)
											{ $discount1=(((int)$list->price-(int)$list->discount_price)/(int)$list->price)*100;?>
											<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $list->discount_price ?></span> <span class="text-success paragraph" style="font-weight:600;"><?= $discount1 ?>%&nbsp;Off</span> <br>
										<?php } ?>
										<span class="paragraph" style="font-size: 13px;color: #686868;">MRP <del>₹<?= $list->price; ?></del> <span class="text-success">incl. of all taxes</span> </span>  
									</div>
									
									<div class="royalship-info mt-1">
										<p class="subheading m-0"><span><a href="<?= base_url('Home/RoyalCustomerBenifits') ?>" data-toggle="tooltip" data-placement="top" title="Get Royal Membership on ₹ 20000 (66 % Off)"><i class="fas fa-crown" style="color: #8340A1"></i></a></span></p>
										<!--<span class="paragraph">₹ 20000</span> <span class="text-success paragraph">(66 % Off</span> <br>-->
									</div>
									
								</div>
								<hr class="m-0 mt-2 divider">
								
								<form action="<?php echo base_url($this->data->controller . '/AddToCart/AddCombo'); ?> " method="post" enctype="multipart/form-data" class="addForm">
									<input type="hidden" required name="comboid" value="<?= $list->id; ?>">
									<div class="row mb-3">
										<div class="col-sm-10 col-12">
											<p class="subheading mb-0">Combo's Products</p>
											
											<div class="" >
												<?php
													$productCount = 1;
													foreach ($comboItems as $each) { 
														$product=$this->db->get_where('products',array('id'=>$each->product_id))->row();
														$variant=$this->db->get_where('product_variant',array('id'=>$each->variant_id))->row();
														$icons = explode(',',$variant->variant_img); 
													?>
													<div class="ComboProductContainer">
														<input type="hidden" required name="productid[]" value="<?= $product->id; ?> ">
														<div class="ComboProductCard_img_box">
															<div class="product-image-box ">
																<img alt="product image" class="picky-product-image" style=""
																src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" alt="<?=$product->title;?>"/>
															</div>
														</div>
														<div class="ComboProductCard">
															<a href="" class=""><?=$product->title;?></a>
															
															<div class="ComboProductCard_options mt-2 d-flex">
																<?php 
																	
																	$count = 1;
																	$colors = explode(',', $each->color);
																	if(!empty($colors)){   
																	?>
																	<div class="ProductOptionDropdown mr-2">
																		<div class="ProductOptionDropdown_title">Color</div>
																		<?php
																			foreach ($colors as $color) {
																				$colorData=$this->db->get_where('tbl_color',array('code'=>$color))->row(); 
																			?>
																			<input type="hidden" value="<?=$each->color;?>"   required data-parsley-required-message="Please select color"  name="color[]">
																			<div style="padding:4px; border: 1px solid #d0d0d9; background: #ede8e8; min-width:90px;"><span style="background:<?=$colorData->code?>; padding:0 8px;border:1px solid gray;"></span>&nbsp;<span><?=$colorData->name?></span></div>
																		<?php } ?>
																	</div>
																	<?php 
																	} 
																?>
																
																<?php   
																	$sizes = explode(',', $each->size);
																	if(!empty($sizes)){?>
																	<div class="ProductOptionDropdown mr-2">
																		<input type="hidden" name="variantid[]" value="<?= $each->variant_id?>">  
																		<div class="ProductOptionDropdown_title ">Size</div>
																		
																		<select class="form-select" style="padding: 4px; border: 1px solid gainsboro; min-width: 90px;" required data-placeholder="Select" data-parsley-required-message="Please select size"   name="size[]"> 
																			<option selected <?php if($sizes[0]!='NA'){echo "disabled";}?>  value="NA"><?php if($sizes[0]=='NA'){echo "N/A";}else{echo "Select size";}?></option>  
																			
																			<?php
																				if($sizes[0]!='NA'){
																					foreach ($sizes as $size) {
																					?>
																					<option value="<?=$size;?> " ><?=$size?></option>
																					<?php }
																				}?>
																		</select>
																	</div>
																<?php } ?>
																
															</div>
														</div>
													</div> 
													<?php
														$productCount++;
													}
												?>
											</div>
										</div>
									</div>  
									
									
									<!--product quantity-->
									<!--<div class="row pb-4">
										<label class="subheading ml-3">Select Quantity</label>
										<div class="col-sm-12">
										<div class="row m-0">
										<div class="col-sm-12 p-0 py-4  border-top border-bottom  ">
										<div class="qty-input">
										<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
										<input class="product-qty" type="number" name="product-qty" min="1" max="10" value="1">
										<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
										</div>
										</div>  
										</div>	
										</div>
									</div>-->
									
									<div class="row m-0 " id="absoluteButton">    
										<div class="col-sm-10 p-0 col justify-content-between  d-flex" id="phoneFixedButton">
											<button id="" class="btn btn-secondary customBtn1">Add To Bag<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
											<button type="button" onclick="AddToWishlist(<?= $list->id ?>,'combo')"  class="btn btn-secondary customBtn2">Wishlist</button>
										</div>
									</div>
									<div class="row mt-2 m-0">
										<div class="col-sm-10 col px-0">
											<p class="text-center"><button class="btn btn-success text-white w-100"><i class="bi bi-whatsapp"></i>&nbsp;<a href="#" class="text-white">beauty consultant</a></button></p>
										</div>
									</div>
								</form> 
								<hr class="m-0 divider">
								<div class="row pb-3"> 
									<div class="col-sm-12">
										<?php 
											$couponProduct = $this->db->order_by('id','DESC')->get_where('coupon_product',array('product_id'=>$list->id,'product_type'=>'combo'))->result();
											if(empty($couponProduct)){
											?>
											<p class="subheading m-0">Best Offer<i class="bi bi-tag" style="font-size: 20px; margin: 5px;"></i></p>
											<span style="font-size: 12px;">The Product is already at its best price</span>
											<?php }
											else{ ?>  
											<div class="row m-0">
												<div class="col-sm-10  col-12 p-0 pt-2 pb-3  border-bottom ">
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
																		<div class="row m-0 couponBox" style="min-height:150px;">  
																			<div class="col-sm-3 p-0 pb-2">  
																				<img src="<?= base_url('uploads/coupon/'.$coupon->banner) ?>" alt="<?=$coupon->title ?>" style="width:80px !important;" />
																			</div>
																			<div class="col-sm-9 pb-2">
																				<strong><?=$coupon->title ?></strong><br> 
																				<span style="font-size:12px;"><?php echo substr($coupon->description,0,50)."...." ?><strong>   
																					<button type="button" class="btn" onclick='couponModal(<?php echo $coupon->id ;?>)' data-toggle="modal" data-target="#myModal">  
																						details<i class="fa-solid fa-angle-down m-1"></i> 
																					</button></strong>
																				</span>
																			</div>
																			<div class="col-sm-12 pt-2 d-flex couponBox1 justify-content-between" style="height:40px; !important;"> 
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
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-sm-8">
										<div class="form-group w-100">
											<span class="subheading">DELIVERY OPTIONS</span>
											<i class="bi bi-truck biicon"></i></br>
											<small class=" mb-3" style="color:black;">Please enter PIN code to check delivery time & Pay On Delivery Availability</small>
											<div class="css-193eiy1">
												<div class="css-1qpidvu">
													<div class="inputWrapper css-8of4eq">
														<input type="number" aria-invalid="false" aria-describedby="Delivers to Salempur - 274705" aria-label="Enter Pincode" value="274705" placeholder="122001" class="input  css-hwf464" data-at="pincode-input"  data-gtm-form-interact-field-id="0">
														<label class="label css-1vskggh">Enter Pincode</label>
													</div>
													<div class="trailingComponent css-1e46tsl">
														<button type="button" tabindex="0" aria-label="close"  class="css-1gdrk6j">Apply</button>
														
													</div>
												</div>
												<span class="bar isValid css-11f900s"></span>
											</div>
											
											<div class="row m-0 py-2 delivery-icon">
												
												<div class="delivery-icon-box">
													<i class="fa-solid fa-money-bill"></i>
													<span style="font-size:12px;">COD <strong style="font-weight:600;">Available</strong></span>
													
												</div>
												<div class="delivery-icon-box">
													<i class="fa-solid fa-arrow-rotate-left"></i>
													<span style="font-size:12px;"><strong style="font-weight:600;">7 Days</strong> Return & Exchange</span>
												</div>
												<div class="delivery-icon-box">
													<i class="fa-solid fa-truck"></i>
													<span style="font-size:12px;">Usually ships in <strong style="font-weight:600;">5 Days</strong></span>
												</div>
												
											</div>
											<hr class="m-0 mt-2">
											<a href="javascript:void(0)" class="paragraph" onclick="openPrivacyNav()" style="font-size: 14px; font-weight: 600; text-transform:capitalize;"> Exchange & Returns</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card hide_desktop" style="border:none;">
								<div class="card-body p-0">
									<div class="row mt-2 ">
										
										<div class="col-sm-6">
											<!--<p class="subheading text-uppercase">PRODUCT INFORMATION</p> -->
											<div id="main">
												<div class="container-fluid-fluid p-0">
													<div class="accordion" id="faq">
														
														<div class="card card-hover" style="border: 0px; border-bottom:1px solid #e1e1e1;">
															<div class="card-header collapesces" id="faqhead1">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1"><span class="subheading "><i class="bi bi-box biicon"></i>&nbsp;Product Details</span></a>
															</div>
															
															<div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
																<div class="card-body px-1">
																	<?= $list->long_desc; ?>
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Product Details</h3>
																		<p class="tab-content">With our direct-to-consumer approach, our products come at ¼ the price of what just-in-time production.</p><br>
																		
																		<strong>Product Id</strong><br>
																		<span>12345</span><br><br>
																		
																		<strong>Size & Fit</strong><br>
																		<span>The model(height 5'8") is wearing size</span><br><br>
																		
																		<strong>Material & Care</strong><br>
																		<span>cotton</span><br><span>Machine wash</span><br><br>
																		
																		<strong>Specification</strong><br>
																		<div class="row">
																			<div class="col-sm-3">
																				<small style="color:gray;">Fabric</small><br><span>Cotton</span>
																				<hr class="my-1">
																				<small style="color:gray;">Multipack set</small><br><span>Single</span>
																				<hr class="my-1">
																				<small style="color:gray;">pattern</small><br><span>Solid</span>
																				<hr class="my-1">
																				<small style="color:gray;">Wash care</small><br><span>Machine wash</span>
																				<hr class="my-1">
																			</div>
																			<div class="col-sm-3">
																				<small style="color:gray;">Length</small><br><span>Ankle Length</span>
																				<hr class="my-1">
																				<small style="color:gray;">Occasion set</small><br><span>Ethnic</span>
																				<hr class="my-1">
																				<small style="color:gray;">Sustainable</small><br><span>Regular</span>
																				<hr class="my-1">
																				<small style="color:gray;">Weave Type</small><br><span>Machine Weave</span>
																				<hr class="my-1">
																			</div>
																			
																			
																		</div>
																	</div><!-- End .product-desc-content -->
																</div>
															</div>
														</div>
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;;">
															<div class="card-header collapesces" id="faqhead2">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2"><span class="subheading "><i class="bi bi-info-circle biicon"></i>&nbsp;Laundry Tips</span></a>
															</div>
															
															<div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
																<div class="card-body px-1">
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Care</h3>
																		<ul class="tab-content">
																			<li>Wash in warm water,upto 40deg ,with neutral water </li>
																			<li>Ironing with a slightly heated iron,(no higher than 100 deg celcius) </li>
																			<li>When washing do not use detergents containing bleach.</li>
																			<li>Tumble dry at low temperature</li>
																			<li>Dry clean with hydrocarban,chlorine ethylene.</li>
																		</ul>
																	</div><!-- End .product-desc-content -->
																</div>
															</div>
														</div>
														
														<!-- expert advice start-->
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;;">
															<div class="card-header collapesces" id="faqhead3">
																<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3"><span class="subheading "><i class="bi bi-info-circle biicon"></i>&nbsp;Expert Advice</span></a>
															</div>
															
															<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																<div class="card-body px-1">
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Expert Advice</h3>
																		
																		<div class="row">
																			<div class="col-sm-3">
																				<strong>Printed</strong><br>
																				<small style="color:gray;">Fit</small><br><span>Normol</span>
																				<hr class="my-1">
																				<small style="color:gray;">Sleeve Type</small><br><span>half Sleeves</span>
																				<hr class="my-1">
																				<small style="color:gray;">Care Instruction</small><br><span>Dry Clean Only</span>
																				<hr class="my-1">
																				<small style="color:gray;">Pack Contains</small><br><span>1 kurta,1 Pant,1 Duppta</span>
																				<hr class="my-1">
																			</div>
																			<div class="col-sm-3">
																				<strong>Rayon</strong><br>
																				<small style="color:gray;">Neckline Type</small><br><span>V-Neck</span>
																				<hr class="my-1">
																				<small style="color:gray;">Closure Type</small><br><span>Zip</span>
																				<hr class="my-1">
																			</div>
																		</div>
																	</div><!-- End .product-desc-content -->
																</div>
															</div>
														</div>
														<!-- expert advice end-->
														
														<!-- beauty tips start-->
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;">
															<div class="card-header collapesces " id="faqhead12">
																<a href="#" class="btn btn-header-link collapsed paragraph px-1" data-toggle="collapse" data-target="#faq11" aria-expanded="true" aria-controls="faq11"><i class="bi bi-eye biicon"></i>&nbsp;BEAUTY TIPS</a>
															</div>
															
															<div id="faq11" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
																<div class="card-body px-1">
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Beauty Tips</h3>
																		
																		<div class="row">
																			<div class="col-sm-3">
																				
																				<small style="color:gray;">Type of Work</small><br><span>Block Print</span>
																				<hr class="my-1">
																				<small style="color:gray;">Pattern</small><br><span>Printed</span>
																				<hr class="my-1">
																				<small style="color:gray;">Fit</small><br><span>Normol</span>
																				<hr class="my-1">
																				<small style="color:gray;">Sleeve Type</small><br><span>Half Sleeves</span>
																				<hr class="my-1">
																				<small style="color:gray;">Care Instructions</small><br><span>Dry Clean Only</span>
																				<hr class="my-1">
																				<small style="color:gray;">pack Contains</small><br><span>1 Kurta,1 Pant,1 Duppta</span>
																				<hr class="my-1">
																			</div>
																			<div class="col-sm-3">
																				<strong>Rayon</strong><br>
																				<small style="color:gray;">Type</small><br><span>Kurta Sets</span>
																				<hr class="my-1">
																				<small style="color:gray;">Material</small><br><span>Rayon</span>
																				<hr class="my-1">
																				<small style="color:gray;">Neckline Type</small><br><span>V-Neck</span>
																				<hr class="my-1">
																				<small style="color:gray;">Closure Type</small><br><span>Zip</span>
																				<hr class="my-1">
																			</div>
																		</div>
																	</div><!-- End .product-desc-content -->
																</div>
															</div>
														</div>
														<!-- beauty tips end-->
														
														<!-- faq start-->
														<div class="card card-hover" style="border: 0px ;border-bottom: 1px solid #e1e1e1;">
															<div class="card-header collapesces " id="faqhead12">
																<a href="#" class="btn btn-header-link collapsed paragraph px-1" data-toggle="collapse" data-target="#faq12" aria-expanded="true" aria-controls="faq12"><i class="bi bi-eye biicon"></i>&nbsp;FAQ</a>
															</div>
															
															<div id="faq12" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
																<div class="card-body px-1">
																	<div class="product-desc-content">
																		<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">FAQ's</h3>
																		<strong>What is the status of my order?<strong><br>
																			<span class="tab-content">Once you have placed your order, we will send you a confirmation email to track the status of your order.
																				
																				Once your order is shipped we will send you another email to confirm you the expected delivery date as well as the link to track your order (when the delivery method allows it).
																				
																				Additionally, you can track the status of your order from your "order history" section on your account page on the website.
																			</span><br><br>
																			
																			<strong>Can I change my order?</strong><br>
																			<span class="tab-content">We can only change orders that have not been processed for shipping yet.
																				
																				Once your order is under the status "preparing for shipping", "shipping" or "delivered", then we cannot accept any edits to your order.
																				
																				To make changes to your order, please reach out to support through the helpdesk.
																			</span><br><br>
																			
																			<strong>Where do you ship?</strong><br>
																			<span class="tab-content">We currently ship in the United-States, Canada, Australia, France, the UK and Germany.
																				
																				For shipping outside of these countries, please reach out to our support through our helpdesk.
																				
																				How long does it take to ship my order?
																				Once you've placed your order, it usually takes 24 to 48 hours to process it for delivery.
																			</span><br><br>
																			
																			
																			<strong>What payment methods do you accept?</strong><br>
																			<span class="tab-content">You can purchase on our website using a debit or credit card.</span><br>
																			<span class="tab-content">We additionnaly offer support for Paypal, Amazon Pay, Apple Pay, and Google Pay.</span><br>
																			<span class="tab-content">You can chose these payment methods at checkout.</span>
																			
																		</div><!-- End .product-desc-content -->
																		
																		</div>
																	</div>
																</div>
																<!-- faq tips end-->
																
																
																<?php
																	if (!empty($list->vendor_id)) {
																		$venid = $list->vendor_id;
																		$vendor = $this->db->get_where('tbl_vendor', array('id' => $venid))->row();
																		} else {
																		$vendor = '';
																	}
																	
																	if (!empty($vendor)) {
																	?>
																	<div class="card card-hover" style="border: 0px; border-bottom: 1px solid #e1e1e1;;">
																		<div class="card-header collapesces" id="faqhead3">
																			<a href="#" class="btn btn-header-link collapsed px-1" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3"><span class="subheading "><i class="bi bi-person biicon"></i>&nbsp;About Vendor</span></a>
																		</div>
																		
																		<div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
																			<div class="card-body px-1">
																				<?php
																					echo $vendor->shop_name;
																				?>
																				<div class="product-desc-content">
																					<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Vendor Details</h3>
																					<div class="row">
																						<div class="col-sm-3">
																							<span><img src="<?= base_url('public/') ?>images/blogs/blog_post_1.jpg" width="200" height="150"></span>
																							<hr class="my-1">
																							<small style="color:gray;">Sold By</small><br><span>Maanvi Creations</span>
																							<hr class="my-1">
																							<small style="color:gray;">Country Of Origin</small><br><span>India</span>
																							<hr class="my-1">
																							<small style="color:gray;">Name Of Manufacturer/Packer/Importer</small><br><span>Gillori</span>
																							<hr class="my-1">
																							<small style="color:gray;">Address Of Manufacturer/Packer/Importer</small><br><span>402 Akshat Elegance,Bihari Marg,Bani Park,Jaipur Rajasthan,Pin-302016</span>
																							<hr class="my-1">
																							
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
									<!--added by sumit start-->
									<div class="product-details-tab pb-3 hide_in_mobile">
										<ul class="nav nav-pills" role="tablist">
											<li class="nav-item px-0">
												<a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Product Details</a>
											</li>
											
											<li class="nav-item px-0">
												<a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Laundry Tips</a>
											</li>
											<li class="nav-item px-0">
												<a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Expert Advice</a>
											</li>
											<li class="nav-item px-0">
												<a class="nav-link" id="beauty-tips-link" data-toggle="tab" href="#beauty-tips-tab" role="tab" aria-controls="beauty-tips-tab" aria-selected="false">Beauty Tips</a>
											</li>
											<li class="nav-item px-0">
												<a class="nav-link" id="faq-link" data-toggle="tab" href="#faq-tab" role="tab" aria-controls="faq-tab" aria-selected="false">FAQ</a>
											</li>
											<li class="nav-item px-0">
												<a class="nav-link" id="vendor-link" data-toggle="tab" href="#vendor-tab" role="tab" aria-controls="vendor-tab" aria-selected="false">About vendors</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Product Details</h3>
													<p class="tab-content">With our direct-to-consumer approach, our products come at ¼ the price of what just-in-time production.</p><br>
													
													<strong>Product Id</strong><br>
													<span>12345</span><br><br>
													
													<strong>Size & Fit</strong><br>
													<span>The model(height 5'8") is wearing size</span><br><br>
													
													<strong>Material & Care</strong><br>
													<span>cotton</span><br><span>Machine wash</span><br><br>
													
													<strong>Specification</strong><br>
													<div class="row">
														<div class="col-sm-3">
															<small style="color:gray;">Fabric</small><br><span>Cotton</span>
															<hr class="my-1">
															<small style="color:gray;">Multipack set</small><br><span>Single</span>
															<hr class="my-1">
															<small style="color:gray;">pattern</small><br><span>Solid</span>
															<hr class="my-1">
															<small style="color:gray;">Wash care</small><br><span>Machine wash</span>
															<hr class="my-1">
														</div>
														<div class="col-sm-3">
															<small style="color:gray;">Length</small><br><span>Ankle Length</span>
															<hr class="my-1">
															<small style="color:gray;">Occasion set</small><br><span>Ethnic</span>
															<hr class="my-1">
															<small style="color:gray;">Sustainable</small><br><span>Regular</span>
															<hr class="my-1">
															<small style="color:gray;">Weave Type</small><br><span>Machine Weave</span>
															<hr class="my-1">
														</div>
														
														
													</div>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
											<div class="tab-pane fade show " id="vendor-tab" role="tabpanel" aria-labelledby="vendor-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Vendor Details</h3>
													<div class="row">
														<div class="col-sm-3">
															<span><img src="<?= base_url('public/') ?>images/blogs/blog_post_1.jpg" width="200" height="150"></span>
															<hr class="my-1">
															<small style="color:gray;">Sold By</small><br><span>Maanvi Creations</span>
															<hr class="my-1">
															<small style="color:gray;">Country Of Origin</small><br><span>India</span>
															<hr class="my-1">
															<small style="color:gray;">Name Of Manufacturer/Packer/Importer</small><br><span>Gillori</span>
															<hr class="my-1">
															<small style="color:gray;">Address Of Manufacturer/Packer/Importer</small><br><span>402 Akshat Elegance,Bihari Marg,Bani Park,Jaipur Rajasthan,Pin-302016</span>
															<hr class="my-1">
															
														</div>
													</div>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
											
											<div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Care</h3>
													<ul class="tab-content">
														<li>Wash in warm water,upto 40deg ,with neutral water </li>
														<li>Ironing with a slightly heated iron,(no higher than 100 deg celcius) </li>
														<li>When washing do not use detergents containing bleach.</li>
														<li>Tumble dry at low temperature</li>
														<li>Dry clean with hydrocarban,chlorine ethylene.</li>
													</ul>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
											<div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Expert Advice</h3>
													
													<div class="row">
														<div class="col-sm-3">
															<strong>Printed</strong><br>
															<small style="color:gray;">Fit</small><br><span>Normol</span>
															<hr class="my-1">
															<small style="color:gray;">Sleeve Type</small><br><span>half Sleeves</span>
															<hr class="my-1">
															<small style="color:gray;">Care Instruction</small><br><span>Dry Clean Only</span>
															<hr class="my-1">
															<small style="color:gray;">Pack Contains</small><br><span>1 kurta,1 Pant,1 Duppta</span>
															<hr class="my-1">
														</div>
														<div class="col-sm-3">
															<strong>Rayon</strong><br>
															<small style="color:gray;">Neckline Type</small><br><span>V-Neck</span>
															<hr class="my-1">
															<small style="color:gray;">Closure Type</small><br><span>Zip</span>
															<hr class="my-1">
														</div>
													</div>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
											<div class="tab-pane fade" id="beauty-tips-tab" role="tabpanel" aria-labelledby="beauty-tips-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">Beauty Tips</h3>
													
													<div class="row">
														<div class="col-sm-3">
															
															<small style="color:gray;">Type of Work</small><br><span>Block Print</span>
															<hr class="my-1">
															<small style="color:gray;">Pattern</small><br><span>Printed</span>
															<hr class="my-1">
															<small style="color:gray;">Fit</small><br><span>Normol</span>
															<hr class="my-1">
															<small style="color:gray;">Sleeve Type</small><br><span>Half Sleeves</span>
															<hr class="my-1">
															<small style="color:gray;">Care Instructions</small><br><span>Dry Clean Only</span>
															<hr class="my-1">
															<small style="color:gray;">pack Contains</small><br><span>1 Kurta,1 Pant,1 Duppta</span>
															<hr class="my-1">
														</div>
														<div class="col-sm-3">
															<strong>Rayon</strong><br>
															<small style="color:gray;">Type</small><br><span>Kurta Sets</span>
															<hr class="my-1">
															<small style="color:gray;">Material</small><br><span>Rayon</span>
															<hr class="my-1">
															<small style="color:gray;">Neckline Type</small><br><span>V-Neck</span>
															<hr class="my-1">
															<small style="color:gray;">Closure Type</small><br><span>Zip</span>
															<hr class="my-1">
														</div>
													</div>
												</div><!-- End .product-desc-content -->
											</div><!-- .End .tab-pane -->
											
											<div class="tab-pane fade" id="faq-tab" role="tabpanel" aria-labelledby="faq-link">
												<div class="product-desc-content">
													<h3 class="subheading" style="text-transform: uppercase !important;; font-size:17px;">FAQ's</h3>
													<strong>What is the status of my order?<strong><br>
														<span class="tab-content">Once you have placed your order, we will send you a confirmation email to track the status of your order.
															
															Once your order is shipped we will send you another email to confirm you the expected delivery date as well as the link to track your order (when the delivery method allows it).
															
															Additionally, you can track the status of your order from your "order history" section on your account page on the website.
														</span><br><br>
														
														<strong>Can I change my order?</strong><br>
														<span class="tab-content">We can only change orders that have not been processed for shipping yet.
															
															Once your order is under the status "preparing for shipping", "shipping" or "delivered", then we cannot accept any edits to your order.
															
															To make changes to your order, please reach out to support through the helpdesk.
														</span><br><br>
														
														<strong>Where do you ship?</strong><br>
														<span class="tab-content">We currently ship in the United-States, Canada, Australia, France, the UK and Germany.
															
															For shipping outside of these countries, please reach out to our support through our helpdesk.
															
															How long does it take to ship my order?
															Once you've placed your order, it usually takes 24 to 48 hours to process it for delivery.
														</span><br><br>
														
														
														<strong>What payment methods do you accept?</strong><br>
														<span class="tab-content">You can purchase on our website using a debit or credit card.</span><br>
														<span class="tab-content">We additionnaly offer support for Paypal, Amazon Pay, Apple Pay, and Google Pay.</span><br>
														<span class="tab-content">You can chose these payment methods at checkout.</span>
														
													</div><!-- End .product-desc-content -->
													
													</div><!-- .End .tab-pane -->
													
													
													
												</div><!-- End .tab-content -->
											</div><!-- End .product-details-tab -->
											<!--added by sumit end-->
											
											<!-- Product revies section start-->
											<div class="related-product-content mt-5" id="reviewSection">
												<div class="row justify-content-center">
													<div class="col-12 col-lg-6">
														<div class="pro-heading-title text-left">
															<h2 class="text-uppercase"> Product Review</h2>
														</div>
													</div>
												</div>
												<?php 
													$reviews=$this->db->order_by('id','DESC')->limit(5)->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'true','is_status'=>'true'))->result();
													if(!empty($reviews)){?>
													<div class="row my-4">
														<div class="col-sm-12">
															<div class="row px-2">
																<div class="col-sm-3">
																	<div class="review-text">
																		<span>
																			<?php
																				$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$list->id,'is_combo'=>'true','is_status'=>'true'))->row(); 
																				$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																		<div class="product-add-review-button-container-fluid hide_desktop">
																			<button class="fn-button-variant-full" onclick="WriteReview(<?=$list->id;?>,'Combo')" data-toggle="modal" data-target="#ReviewModal" type="button">Write a review</button>
																		</div>
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
																				$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$list->id, 'is_combo'=>'true','is_status'=>'true'))->num_rows(); 
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
																			<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Combo','5')">
																				<?php 
																					$star5= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'5', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																			<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Combo','4')">
																				<?php 
																					$star4= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'4', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																			<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Combo','3')">
																				<?php 
																					$star3= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'3', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																			<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Combo','2')">
																				<?php 
																					$star2= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'2', 'is_combo'=>'true','is_status'=>'true'))->num_rows(); 
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
																			<div class="row mt-2 ratingarea" onclick="RatingsFilter('<?= $list->id ?>','Combo','1')">
																				<?php 
																					$star1= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'rating'=>'1', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																			$runSmall= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'run-small', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
																			$trueSize= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'true-to-size', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
																			$runLarge= $this->db->get_where('tbl_review',array('product_id'=>$list->id, 'fit_status'=>'runs-large', 'is_combo'=>'true','is_status'=>'true'))->num_rows();
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
																		<div class="product-add-review-button-container">
																			<button class="fn-button-variant-full" onclick="WriteReview(<?=$list->id;?>,'Combo')" data-toggle="modal" data-target="#ReviewModal" type="button">Write a review</button>
																		</div> 
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
														<div class="col-sm-12 bg-light " style="padding:10px;">
															<div class="row">
																<div class="col-sm-3 col-12">
																	<!--<p class="mt-2">1-8 of 11 Reviews</p>-->
																</div>
																<div class="col-sm-8 col-10 " style="text-align:end !important;">
																	<span>Sort By: </span>
																	<div class="dropdown bg-white">
																		<select class="p-2" style="outline: none; border: 1px solid gainsboro;" onchange="RatingsFilter('<?= $list->id?>','Combo','',this.value)">     
																			<option value="relevant">Most Relevant</option>
																			<option value="helpful">Most Helpful</option>
																			<option value="ratingInv">Highest to Lowest Rating </option>
																			<option value="rating">Lowest to Highest Rating</option>
																			<option value="recent">Most Recent</option>  
																		</select> 
																	</div>
																	
																	<!--<button class="btn p-1" onclick="ToggleRating()" style="background:#DEE1E6; border-radius: 20px"><i class="bi bi-filter-left fa-2x"></i></button>-->
																</div>
																<div class="col-sm-1 col-12"></div>
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
																		<div class="row">
																			<div class="col-sm-12 owl-carousel user-review-img ">
																				
																				<?php 
																					$img=explode(",",$review->review_img); 
																					if(!empty($img)){
																						foreach($img as $icon){
																							if(!empty($icon)){
																							?>
																							<img src="<?= base_url('uploads/review/'.$icon) ?>" class="" alt="<?= $review->review_title;?>"  width="80" height="80" />
																							<?php 
																							}
																						}
																					}
																				?>
																			</div>
																			
																		</div>
																	</div>
																	<div class="col-sm-2 ">
																		<button class="product-review-helpful-button" style="margin:10px 0;" onclick="UpdateHelpfulReview(<?= $review->id;?>,this)">><svg fill="none" style="margin-right:5px;margin-top:5px;" width="12" height="12" viewBox="0 0 12 12">
																			<path d="M2.625 10.8755C2.88859 10.8794 3.15051 10.9181 3.404 10.9905L5.221 11.5095C5.48881 11.586 5.76597 11.6249 6.0445 11.625H8.487C9.23072 11.625 9.94793 11.3488 10.4995 10.8499C11.051 10.351 11.3976 9.66499 11.472 8.925L11.622 6.375C11.6485 5.85448 11.4935 5.3409 11.1835 4.92197C10.8734 4.50303 10.4275 4.20473 9.922 4.078L9.1945 3.919C9.03191 3.87868 8.88749 3.7851 8.78428 3.65316C8.68106 3.52121 8.62499 3.35852 8.625 3.191V1.5C8.625 1.20163 8.50647 0.915483 8.2955 0.704505C8.08452 0.493526 7.79837 0.375 7.5 0.375C7.20163 0.375 6.91548 0.493526 6.7045 0.704505C6.49353 0.915483 6.375 1.20163 6.375 1.5V2.277C6.375 3.27156 5.97991 4.22539 5.27665 4.92865C4.57339 5.63191 3.61956 6.027 2.625 6.027V10.8755Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
																			<path d="M0.375 4.875H2.625V11.625H0.375V4.875Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
																		</svg><span class="product-review-helpful-button-text">Helpful (<?php if(!empty($review->help_count)){echo $review->help_count;}else{echo 0;}?>)</span></button>
																	</div>
																</div>
																<?php 
																}
															?>
														</div> 
														<div class="col-sm-12 " >
															<div class="row justify-content-center ">
																<div class="col-sm-6 bg-light col-12 text-center loadMoreBtn" onclick="loadMore('<?=$list->id?>','Combo')" style="padding:15px 10px; border-radius:50px;">
																	<a href="javascript:void(0)" class="font-weight-bold Loadbtn">Show More&nbsp;<i class="fa fa-spin fa-spinner" style="display:none;"  id="addSpin" ></i></a>  
																</div>  
															</div>
														</div>
														
													</div>
													<?php }else{?>
													<div class="row m-0">
														<div class="col-sm-12 bg-light " style="padding:10px;">
															<div class="row m-0 py-3">
																<div class="col-sm-3 col-12">
																	<div>
																		<p class="product-review-empty-bold-text">No reviews yet.</p>
																		<p class="product-review-empty-text">Be the first to write a review.</p>
																	</div>   
																</div>
																<div class="col-sm-8 col-10 " style="text-align:end !important;">
																	<div class="product-add-review-button-container"> 
																		<button class="product-review-empty-button" onclick="WriteReview(<?=$list->id;?>,'Combo')" data-toggle="modal" data-target="#ReviewModal" type="button" >Write a review</button>
																	</div> 
																</div>
																<div class="col-sm-1 col-12"></div>
															</div>
														</div>
													</div>
												<?php } ?>
											</div>
											<!-- Product revies section end-->  
											
											<?php
												$Similiarproduct = $this->db->get_where('tbl_combo',array('id !='=>$list->id,'category_id'=>$list->category_id,'subcat_id'=>$list->subcat_id))->result();
												if(!empty($Similiarproduct)){
												?>
												<div class="mt-4">
													
													<div class="row justify-content-center">
														<div class="col-12 col-lg-6">
															<div class="pro-heading-title">
																<h1> MATCH WITH IT
																</h1>
																<!--<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text </span></center>-->
															</div>
														</div>
													</div> 
													<div class="owl-carousel cart-carousel row overflow-hidden">   
														<?php
															$sr = 1;
															
															foreach($Similiarproduct as $each)
															{
																$icons = explode(',',$each->image); 
																$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','sale_type'=>'combo'))->row();
																if(!empty($saleProduct)){
																	
																	$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																	
																	$last_date = date_create(date('Y-m-d H:i:s')); 
																	$today = date_create($tblSale->end_date);  
																	$date_difference = date_diff($last_date,$today);  
																	$days=$date_difference->format('%r%a');
																	$hour=$date_difference->format('%r%h');
																	$min=$date_difference->format('%r%i');
																	$sec=$date_difference->format('%r%s');  
																	$timer=$days."D".$hour."H".$min."M".$sec."S" ;
																}
																
															?>
															<div class="col-12" > 
																<div class="product product-7 text-center "  >  
																	<figure class="product-media"> 
																		<?php 
																			if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																			{	
																			?> 
																			<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
																			<?php 
																			}else if((int)$each->discount_price!=(int)$each->price) 
																			{
																				$discount=(((int)$each->price-(int)$each->discount_price)/(int)$each->price)*100;
																			?>
																			<span class="product-label label-primary"><?=(int)$discount ?>%OFF</span>  
																		<?php } ?>
																		<a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>">
																			<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" alt="<?=?>" class="product-image  ">
																			<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
																		</a>
																		
																		<div class="product-action-vertical">  
																			<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>add to wishlist</span></a>
																			<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable" title="Quick view" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																			<a href="<?= base_url('Home/Compare')?>"  class="btn-product-icon btn-compare btn-expandable" title="Compare"><span>Compare Product</span></a>  
																		</div><!-- End .product-action-vertical -->
																		
																		
																		<div class="container hide_in_mobile" id="app">
																			<div class="product-action">
																				<a href="javascript:void(0)" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal" class="btn-product btn-cart"  style="font-size:12px;">Quick Add</a>
																			</div><!-- End .product-action -->
																		</div>
																		<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-"){?>     
																			<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?=$timer?>"></div>
																		<?php } ?> 
																	</figure><!-- End .product-media -->
																	
																	<div class="product-body">
																		
																		<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																		<div class="product-price">
																			<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																				{	$price=$each->price; 
																					$discount=(int)$saleProduct->discount;
																					$saleprice=$price - ( ($price/100) * $discount );
																				?> 
																				<span>₹<?=(int)$saleprice;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																				<?php  
																				}else
																				{ ?>
																				<span>₹<?= $each->discount_price ?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																			<?php } ?>
																		</div><!-- End .product-price -->
																		<div class="ratings-container">
																			<div class="ratings">
																				<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
																			</div><!-- End .ratings -->
																			<span class="ratings-text">( 2 Reviews )</span>
																		</div><!-- End .rating-container -->
																		
																		<div class="product-nav product-nav-dots d-none">
																			<?php 
																				$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
																				$colors=explode(",",$data->color);
																				if(!empty($data->color)){
																					$count=1;
																					foreach($colors as $color)
																					{
																					?>
																					<a href="javascript:void(0)" class="<?php if($count==1){echo 'active';} if($count>4){echo 'MoreColor';}?>" style="background:<?= $color?>"><span class="sr-only">Color name</span></a>
																					<?php
																						$count++; 
																					}
																				?>
																				<button class="MoreColorBtn btn p-0 m-0 <?php if(count($colors)<4 || (count($colors)-4)==0){echo 'd-none';}?>" style="position: relative; top:-5px; border: 1px solid gray; width: 20px; height: 20px; color: #fe0631;" title="<?=(count($colors)-4)?>">+<?=(count($colors)-4)?></button>
																				<?php
																				} 
																			?>
																		</div><!-- End .product-nav -->
																	</div><!-- End .product-body -->
																</div><!-- End .product -->
															</div><!-- End .col-sm-12 col-lg-12 col-xl-12 -->
															<?php
																$sr++;
															}
														?>
													</div>
													
												</div>
											<?php } ?>
											
											<!--more from collection -->
											<?php
												$MoreCollection = $this->db->get_where('tbl_combo',array('id !='=>$list->id,'category_id'=>$list->category_id))->result(); 
												if(!empty($MoreCollection)){
												?>
												<div class="related-product-content mt-5">
													<div class="row justify-content-center">
														<div class="col-12 col-lg-6">
															<div class="pro-heading-title text-left">
																<h2> MORE FROM THE COLLECTION
																</h2>
																<!--<center><span style="font-size: 13px;">In publishing and graphic design, Lorem ipsum is a placeholder text </span></center>-->
															</div>
														</div>
													</div>
													<div class="owl-carousel cart-carousel row overflow-hidden">   
														<?php
															$sr = 1;
															foreach($MoreCollection as $each) 
															{
																$icons = explode(',',$each->image); 
																$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','sale_type'=>'combo'))->row();
																if(!empty($saleProduct)){
																	
																	$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																	
																	$last_date = date_create(date('Y-m-d H:i:s')); 
																	$today = date_create($tblSale->end_date);  
																	$date_difference = date_diff($last_date,$today);  
																	$days=$date_difference->format('%r%a');
																	$hour=$date_difference->format('%r%h');
																	$min=$date_difference->format('%r%i');
																	$sec=$date_difference->format('%r%s');  
																	$timer=$days."D".$hour."H".$min."M".$sec."S" ;
																}
																
															?>
															<div class="col-12" > 
																<div class="product product-7 text-center "  >  
																	<figure class="product-media"> 
																		<?php 
																			if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																			{	
																			?> 
																			<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
																			<?php 
																			}else if((int)$each->discount_price!=(int)$each->price) 
																			{
																				$discount=(((int)$each->price-(int)$each->discount_price)/(int)$each->price)*100;
																			?>
																			<span class="product-label label-primary"><?=(int)$discount ?>%OFF</span>  
																		<?php } ?>
																		<a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>">
																			<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" alt="<?= $each->name; ?>"  class="product-image">
																			<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  alt="<?= $each->name; ?>" class="product-image-hover">
																		</a>
																		
																		<div class="product-action-vertical">  
																			<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>add to wishlist</span></a>
																			<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable" title="Quick view" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																			<a href="<?= base_url('Home/Compare')?>"  class="btn-product-icon btn-compare btn-expandable" title="Compare"><span>Compare Product</span></a>  
																		</div><!-- End .product-action-vertical -->
																		
																		
																		<div class="container hide_in_mobile" id="app">
																			<div class="product-action">
																				<a href="javascript:void(0)" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal" class="btn-product btn-cart"  style="font-size:12px;">Quick Add</a>
																			</div><!-- End .product-action -->
																		</div>
																		<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-"){?>     
																			<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?=$timer?>"></div>
																		<?php } ?> 
																	</figure><!-- End .product-media -->
																	
																	<div class="product-body">
																		
																		<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																		<div class="product-price">
																			<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																				{	$price=$each->price; 
																					$discount=(int)$saleProduct->discount;
																					$saleprice=$price - ( ($price/100) * $discount );
																				?> 
																				<span>₹<?=(int)$saleprice;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																				<?php  
																				}else
																				{ ?>
																				<span>₹<?= $each->discount_price ?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																			<?php } ?>
																		</div><!-- End .product-price -->
																		<div class="ratings-container">
																			<div class="ratings">
																				<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
																			</div><!-- End .ratings -->
																			<span class="ratings-text">( 2 Reviews )</span>
																		</div><!-- End .rating-container -->
																		
																		<div class="product-nav product-nav-dots d-none">
																			<?php 
																				$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
																				$colors=explode(",",$data->color);
																				if(!empty($data->color)){
																					$count=1;
																					foreach($colors as $color)
																					{
																					?>
																					<a href="javascript:void(0)" class="<?php if($count==1){echo 'active';} if($count>4){echo 'MoreColor';}?>" style="background:<?= $color?>"><span class="sr-only">Color name</span></a>
																					<?php
																						$count++; 
																					}
																				?>
																				<button class="MoreColorBtn btn p-0 m-0 <?php if(count($colors)<4 || (count($colors)-4)==0){echo 'd-none';}?>" style="position: relative; top:-5px; border: 1px solid gray; width: 20px; height: 20px; color: #fe0631;" title="<?=(count($colors)-4)?>">+<?=(count($colors)-4)?></button>
																				<?php
																				} 
																			?>
																		</div><!-- End .product-nav -->
																	</div><!-- End .product-body -->
																</div><!-- End .product -->
															</div><!-- End .col-sm-12 col-lg-12 col-xl-12 -->
															<?php
																$sr++;
															}
														?>
													</div> 
												</div>
											<?php } ?> 
										</section>
										
										
										<section class="pro-content testimonails-content">
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
														<div class="row">
															<div class="col-sm-4 p-1">
																<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid"></center>
															</div>
															<div class="col-sm-4 p-1">
																<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid"></center>
															</div>
															<div class="col-sm-4 p-1">
																<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq92y93qDuBMRiT5CSCBl6PBPXKFWarHFV0Q&usqp=CAU" class="img-fluid"> </center>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</section>
										
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
										<div id="mySidenav" class="sidenav" style="z-index: 9999; margin:0;padding:0;height: fit-content;">
											
											<div class="container-fluid">
												
												<div class="row p-2">
													<div class="col-sm-12">
														<div>
															<span class="closebtn corsor-pointer" style="cursor:pointer; position:absolute !important;" onclick="closeNav()">&times;</span>
															<span class="text-uppercase" style="font-size:12px;">Size Guide</span>
														</div>
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
											<div class="container-fluid">
												<div class="row">
													<div class="col-sm-12">
														<div class="p-3">
															<h6 style="font-weight:900">Easy Exchange & Return&nbsp;<span style="font-size: 14px;font-weight: 500;color: gray;">(how it works?)</span></h6>
															<br>
															<!--<div class="row">
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
															<p style="font-size: 13px;font-weight:normal">You have 30 days from the shipping date to return your purchase from Zara.com FREE OF CHARGE.</p>-->
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
																				<path fill=#C4C4C4 d="M42.006 60H13.442a2.002 2.002 0 01-2.004-2V2c0-1.105.897-2 2.004-2h28.564c1.107 0 2.005.895 2.005 2v56c0 1.105-.898 2-2.005 2"></path>
																				<mask id=card_exchange_svg__b fill=#fff>
																					<use xlink:href=#card_exchange_svg__a></use>
																				</mask>
																				<path fill=#FFF d="M13.544 53.738h28.462v-50H13.544z" mask=url(#card_exchange_svg__b)></path>
																				<g mask=url(#card_exchange_svg__b)>
																					<path fill=#F4F4F4 d="M13.544 53.7h28.462v-50H13.544z"></path>
																					<path fill=#B7B7B7 d="M13.544 5.49h28.462V3.7H13.544z"></path>
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
																					<path fill=#E06194 d="M6.955 31.98C3.665 31.98 1 29.336 1 26.072c0-3.263 2.666-5.909 5.955-5.909h28.09c3.29 0 5.955 2.646 5.955 5.91 0 3.263-2.666 5.909-5.955 5.909H6.955z"></path>
																					<path stroke=#E06194 stroke-width=0.6 d="M35.045 31.98H6.955C3.665 31.98 1 29.336 1 26.072c0-3.263 2.666-5.909 5.955-5.909h28.09c3.29 0 5.955 2.646 5.955 5.91 0 3.263-2.666 5.909-5.955 5.909z"></path>
																					<path d="M6.972 27.894v-4.48h2.496v.57h-1.88v1.284h1.46l.093.569H7.588v1.489H9.53v.568zm5.461.05l-.887-1.328-.826 1.278h-.641l1.146-1.686-1.072-1.564.597-.098.808 1.229.77-1.18h.635l-1.078 1.594 1.146 1.662zm2.639.018c-.913 0-1.584-.618-1.584-1.711 0-1.125.715-1.724 1.627-1.724.487 0 .85.142 1.09.303l-.092.593c-.302-.229-.616-.365-1.01-.365-.592 0-1 .42-1 1.18 0 .81.438 1.193 1.024 1.193.345 0 .684-.093 1.023-.37l.086.562c-.314.228-.684.34-1.164.34m4.178-.069v-2.249c0-.346-.16-.574-.541-.574-.346 0-.69.216-1.011.537v2.286h-.61v-4.9l.61-.092v2.132c.29-.247.684-.507 1.164-.507.654 0 .999.37.999.97v2.397h-.61zm3.62-1.68c-1.277.123-1.56.451-1.56.797 0 .272.197.445.524.445.376 0 .74-.18 1.035-.464v-.778zm.122 1.68l-.074-.444c-.283.271-.659.512-1.208.512-.61 0-1.004-.358-1.004-.914 0-.822.715-1.15 2.163-1.298v-.142c0-.413-.259-.562-.66-.562-.412 0-.807.124-1.183.284l-.08-.525c.407-.16.795-.278 1.313-.278.82 0 1.22.327 1.22 1.057v2.31h-.487zm3.705 0v-2.249c0-.346-.16-.574-.542-.574-.346 0-.69.216-1.011.537v2.286h-.61v-3.299h.48l.08.476c.333-.284.734-.544 1.215-.544.653 0 .998.37.998.97v2.397h-.61zm2.817-2.922c-.444 0-.715.315-.715.723 0 .383.284.68.715.68.45 0 .734-.31.734-.711 0-.395-.296-.692-.734-.692m-.357 2.663c-.413.191-.592.39-.592.618 0 .272.37.463 1.036.463.671 0 1.06-.222 1.06-.5 0-.204-.173-.346-.678-.433l-.395-.068a7.081 7.081 0 01-.431-.08m.413 1.52c-.888 0-1.59-.272-1.59-.853 0-.34.246-.6.733-.852-.154-.1-.222-.217-.222-.346 0-.161.13-.315.357-.445-.382-.186-.634-.538-.634-.989 0-.71.61-1.143 1.3-1.143.34 0 .647.099.882.278l.863-.26.092.55-.653.062c.086.155.135.322.135.513 0 .71-.61 1.137-1.306 1.137-.093 0-.18-.006-.266-.018-.11.061-.178.135-.178.197 0 .118.123.149.727.254l.247.043c.733.123 1.177.346 1.177.852 0 .692-.777 1.02-1.664 1.02m2.81-3.305h1.683c-.067-.538-.326-.847-.832-.847-.413 0-.752.284-.85.846m.937 2.113c-.894 0-1.578-.519-1.578-1.73 0-1.056.64-1.705 1.497-1.705.987 0 1.443.741 1.443 1.65v.13h-2.33c.024.778.4 1.136 1.01 1.136.488 0 .857-.185 1.227-.47l.087.545c-.358.278-.802.444-1.356.444" fill=#FFF></path>
																				</g>
																				<g mask=url(#card_exchange_svg__b)>
																					<path fill=#D4D4D4 d="M35.224 29.829s-2.87-4.425-4.774-1.979c-.513.553-.797 1.267-.836 2.153-.038.855.016 2.157.406 2.92 1.226 2.391 2.537 5.065 4.939 6.183 0 5.644 5.29 8.037 7.786 8.851.758.248 1.273.95 1.272 1.746l-.008 8.26h13.956V41.689l-6.067.012a5.043 5.043 0 01-4.566-2.884c-2.727-2.983-5.19-1.868-6.737-3.612-1.434-1.085-3.053-2.042-4.096-3.478l-1.275-1.897z"></path>
																					<path fill=#EAEAEA d="M30.698 29.674s.278-1.753 1.873-2.302a.796.796 0 01.814.181c.569.541 1.724 1.728 2.236 2.886.08.183 0 .402-.176.47-.526.205-1.58.676-2.09 1.329a.29.29 0 01-.458.009l-2.199-2.573z"></path>
																				</g>
																			</g>
																		</svg>
																		<div class=HalfCard-delivery-halfcard-description>Go to <strong>Menu</strong> &gt; <strong>My Orders</strong> &gt; <strong>Exchange</strong> and select the time slot for exchange</div>
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
																				<path d="M7.823 17.068s1.018.96 2.52.556l1.502-.404s.419-.683.613-.481c.193.202-.037.53.55.229.412-.212 1.308-.102.436.353-.872.454-4.022 2.069-5.427 1.262-1.405-.808-.92-1.262-.92-1.262l.726-.253z" fill=#C4C4C4></path>
																				<g transform="translate(.825 21.841)">
																					<mask id=prefix__b fill=#fff>
																						<use xlink:href=#prefix__a></use>
																					</mask>
																					<path d="M4.285.274L4.15 1.598S.033 1.588.02 1.536C.008 1.484.019.022.019.022l4.266.252z" fill=#C4C4C4 mask=url(#prefix__b)></path>
																				</g>
																				<path d="M17.647 3.681s.254 2.688 1.962 2.84c1.708.15 1.672-2.537 1.6-3.218-.073-.682-2.69-2.953-3.562.378" fill=#D9DBDB></path>
																				<path d="M17.429 3.946c.05.345 3.297-1.356 3.297-1.356l.482-.612s-.617-1.4-2.071-1.06c-1.454.34-1.817 2.271-1.708 3.028" fill=#B7B7B7></path>
																				<path d="M20.726 2.59c.083.07.555 1.545.555 1.545s.654-1.362-.073-2.157l-.482.612z" fill=#B7B7B7></path>
																				<path d="M19.028 6.407v.795s1.163.757 1.599-.114v-.946s-.473.605-1.6.265" fill=#D9DBDB></path>
																				<path d="M18.955 7.012c-.109-.038-2.398.946-2.47 1.325-.074.379-.26 2.686-.26 2.686l.945-.1.114-.731-.073 2.422.218 4.694 4.724-.227.29-5.716.614-.039s.368-3.102-.504-3.594c-.872-.493-1.853-.909-1.853-.909l-.073.265s-.436.795-1.6.114l-.072-.19z" fill=#C4C4C4></path>
																				<path fill=#C4C4C4 d="M16.302 11.025l-.072 1.627h.727l.109-1.741zM13.439 14.487l.061 2.158a.13.13 0 00.132.129l4.524-.147.036-2.385-4.753.245z"></path>
																				<path d="M18.192 14.242c.037-.038 2.18-.984 2.18-.984v2.271l-2.216 1.098.036-2.385z" fill=#B7B7B7></path>
																				<path d="M12.767 14.32c.006.105.09.187.19.187.958.002 5.4.007 5.4-.027 0-.037.024-.731.024-.731l-5.44.074a.196.196 0 00-.189.21l.015.286z" fill=#D9DBDB></path>
																				<path fill=#D9DBDB d="M18.326 13.73l2.163-1.06v.6l-2.157 1.21z"></path>
																				<path d="M12.894 13.843c-.073-.075 3.336-1.19 3.336-1.19l4.258-.039c.035 0 .046.05.014.065l-2.194 1.095-5.414.07z" fill=#E06194></path>
																				<path fill=#B7B7B7 d="M17.436 17.105l-.024.908 4.705-.061.019-.948z"></path>
																				<g transform="translate(17.391 17.859)">
																					<mask id=prefix__d fill=#fff>
																						<use xlink:href=#prefix__c></use>
																					</mask>
																					<path d="M.03.12C-.008.273-.073 3.16.51 5.544c0 0 1.672.228 1.672.114s.145-3.672.145-3.558v3.52s1.744.076 1.78-.038c.037-.113.786-4.294.614-5.502L.029.12z" fill=#C4C4C4 mask=url(#prefix__d)></path>
																				</g>
																				<path fill=#E2E0E0 d="M19.246 17.838h1.272v-.72h-1.272z"></path>
																				<path d="M2.74 9.347s-.872 2.473.34 3.431c1.21.96 2.732-.846 3.149-1.413.093-.126.722-1.326.576-1.578-.145-.253-4.065-.44-4.065-.44" fill=#D9DBDB></path>
																				<path d="M7.198 9.7s2.18-.303 1.793.151c-.388.454-2.229.202-2.229.202l.043-.392.393.039z" fill=#C4C4C4></path>
																				<path d="M5.115 9.548s-.679.404-.824 1.161h-.34s.34-.706-.193-.656c-.533.05-.97 1.918-.97 1.918l-.29-.202s-.194-1.918.242-2.423l2.375.202zM7.24 17.486l.594-.295a.275.275 0 00.1-.399c-.46-.67-1.744-2.443-2.968-3.2-.24-.148-.506.147-.346.386l2.297 3.42c.073.107.21.145.324.088" fill=#B7B7B7></path>
																				<path d="M7.116 17.786s.848 1.388 3.711 1.15c2.13-.178 1.958-.229 1.958-.229s.557-.403.654-.151c.097.252-.334.43-.189.48.145.051.37.088.824-.05.465-.14.92.05.29.354-.63.302-1.502.302-2.035.15 0 0-2.304.922-4.741.026a3.037 3.037 0 01-1.096-.72l-.273-.278.897-.732zM23.008 11.326s-.818 5.023-4.125 4.948l.109-.19s1.199-.605 1.09-.795c0 0-.763-.265-.364-.302.4-.038.763-.114.982-.341.218-.227 1.436-2.247 1.509-3.27.109 0 .8-.05.8-.05" fill=#D9DBDB></path>
																				<path d="M7.21 17.813a.32.32 0 00.123-.368c-.28-.832-1.238-3.594-1.69-3.809-.533-.252-3-.35-3.539-.114-1.24.54-1.21 2.89-1.21 2.89l-.05 5.64 4.266.063-.146-5.652.78 2.049a.18.18 0 00.268.09l1.198-.789zM2.623 9.334l4.575.467s.34-2.271-1.211-2.827c-1.4-.5-2.918.849-3.557 1.97-.092.163.012.371.193.39" fill=#C4C4C4></path>
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
																				fill: #d9dbdb
																				}
																				
																				.st1 {
																				fill: #e06194
																				}
																				
																				.st2 {
																				fill: #c4c4c4
																				}
																				
																				.st5 {
																				fill: #b7b7b7
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
																		<div class=HalfCard-delivery-halfcard-description>No additional payment needed</div>
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
																				<path fill=#C4C4C4 d="M42.006 60H13.442a2.002 2.002 0 01-2.004-2V2c0-1.105.897-2 2.004-2h28.564c1.107 0 2.005.895 2.005 2v56c0 1.105-.898 2-2.005 2"></path>
																				<mask id=card_return_svg__b fill=#fff>
																					<use xlink:href=#card_return_svg__a></use>
																				</mask>
																				<path fill=#FFF d="M13.544 53.738h28.462v-50H13.544z" mask=url(#card_return_svg__b)></path>
																				<g mask=url(#card_return_svg__b)>
																					<path fill=#F4F4F4 d="M13.544 53.7h28.462v-50H13.544z"></path>
																					<path fill=#B7B7B7 d="M13.544 5.49h28.462V3.7H13.544z"></path>
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
																					<path fill=#E06194 d="M21.508 31.98A5.504 5.504 0 0116 26.48c0-3.037 2.466-5.5 5.508-5.5h25.984A5.504 5.504 0 0153 26.48c0 3.038-2.466 5.5-5.508 5.5H21.508z"></path><text fill=#FFF font-family="WhitneySSm-Medium, Whitney SSm" font-size=7 font-weight=400 transform="translate(16 20)">
																						<tspan x=7.5 y=8.5>Return</tspan>
																					</text>
																					<path stroke=#E06194 stroke-width=0.6 d="M47.492 31.98H21.508A5.504 5.504 0 0116 26.48c0-3.037 2.466-5.5 5.508-5.5h25.984A5.504 5.504 0 0153 26.48c0 3.038-2.466 5.5-5.508 5.5z"></path>
																				</g>
																				<g mask=url(#card_return_svg__b)>
																					<path fill=#D4D4D4 d="M35.224 29.829s-2.87-4.425-4.774-1.979c-.513.553-.797 1.267-.836 2.153-.038.855.016 2.157.406 2.92 1.226 2.391 2.537 5.065 4.939 6.183 0 5.644 5.29 8.037 7.786 8.851.758.248 1.273.95 1.272 1.746l-.008 8.26h13.956V41.689l-6.067.012a5.043 5.043 0 01-4.566-2.884c-2.727-2.983-5.19-1.868-6.737-3.612-1.434-1.085-3.053-2.042-4.096-3.478l-1.275-1.897z"></path>
																					<path fill=#EAEAEA d="M30.698 29.674s.278-1.753 1.873-2.302a.796.796 0 01.814.181c.569.541 1.724 1.728 2.236 2.886.08.183 0 .402-.176.47-.526.205-1.58.676-2.09 1.329a.29.29 0 01-.458.009l-2.199-2.573z"></path>
																				</g>
																			</g>
																		</svg>
																		<div class=HalfCard-delivery-halfcard-description>Go to <strong>Menu</strong> &gt; <strong>My Orders</strong> &gt; <strong>Return</strong> and select the time slot and mode for return</div>
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
																				<path d="M7.823 17.068s1.018.96 2.52.556l1.502-.404s.419-.683.613-.481c.193.202-.037.53.55.229.412-.212 1.308-.102.436.353-.872.454-4.022 2.069-5.427 1.262-1.405-.808-.92-1.262-.92-1.262l.726-.253z" fill=#C4C4C4></path>
																				<g transform="translate(.825 21.841)">
																					<mask id=prefix__b fill=#fff>
																						<use xlink:href=#prefix__a></use>
																					</mask>
																					<path d="M4.285.274L4.15 1.598S.033 1.588.02 1.536C.008 1.484.019.022.019.022l4.266.252z" fill=#C4C4C4 mask=url(#prefix__b)></path>
																				</g>
																				<path d="M17.647 3.681s.254 2.688 1.962 2.84c1.708.15 1.672-2.537 1.6-3.218-.073-.682-2.69-2.953-3.562.378" fill=#D9DBDB></path>
																				<path d="M17.429 3.946c.05.345 3.297-1.356 3.297-1.356l.482-.612s-.617-1.4-2.071-1.06c-1.454.34-1.817 2.271-1.708 3.028" fill=#B7B7B7></path>
																				<path d="M20.726 2.59c.083.07.555 1.545.555 1.545s.654-1.362-.073-2.157l-.482.612z" fill=#B7B7B7></path>
																				<path d="M19.028 6.407v.795s1.163.757 1.599-.114v-.946s-.473.605-1.6.265" fill=#D9DBDB></path>
																				<path d="M18.955 7.012c-.109-.038-2.398.946-2.47 1.325-.074.379-.26 2.686-.26 2.686l.945-.1.114-.731-.073 2.422.218 4.694 4.724-.227.29-5.716.614-.039s.368-3.102-.504-3.594c-.872-.493-1.853-.909-1.853-.909l-.073.265s-.436.795-1.6.114l-.072-.19z" fill=#C4C4C4></path>
																				<path fill=#C4C4C4 d="M16.302 11.025l-.072 1.627h.727l.109-1.741zM13.439 14.487l.061 2.158a.13.13 0 00.132.129l4.524-.147.036-2.385-4.753.245z"></path>
																				<path d="M18.192 14.242c.037-.038 2.18-.984 2.18-.984v2.271l-2.216 1.098.036-2.385z" fill=#B7B7B7></path>
																				<path d="M12.767 14.32c.006.105.09.187.19.187.958.002 5.4.007 5.4-.027 0-.037.024-.731.024-.731l-5.44.074a.196.196 0 00-.189.21l.015.286z" fill=#D9DBDB></path>
																				<path fill=#D9DBDB d="M18.326 13.73l2.163-1.06v.6l-2.157 1.21z"></path>
																				<path d="M12.894 13.843c-.073-.075 3.336-1.19 3.336-1.19l4.258-.039c.035 0 .046.05.014.065l-2.194 1.095-5.414.07z" fill=#E06194></path>
																				<path fill=#B7B7B7 d="M17.436 17.105l-.024.908 4.705-.061.019-.948z"></path>
																				<g transform="translate(17.391 17.859)">
																					<mask id=prefix__d fill=#fff>
																						<use xlink:href=#prefix__c></use>
																					</mask>
																					<path d="M.03.12C-.008.273-.073 3.16.51 5.544c0 0 1.672.228 1.672.114s.145-3.672.145-3.558v3.52s1.744.076 1.78-.038c.037-.113.786-4.294.614-5.502L.029.12z" fill=#C4C4C4 mask=url(#prefix__d)></path>
																				</g>
																				<path fill=#E2E0E0 d="M19.246 17.838h1.272v-.72h-1.272z"></path>
																				<path d="M2.74 9.347s-.872 2.473.34 3.431c1.21.96 2.732-.846 3.149-1.413.093-.126.722-1.326.576-1.578-.145-.253-4.065-.44-4.065-.44" fill=#D9DBDB></path>
																				<path d="M7.198 9.7s2.18-.303 1.793.151c-.388.454-2.229.202-2.229.202l.043-.392.393.039z" fill=#C4C4C4></path>
																				<path d="M5.115 9.548s-.679.404-.824 1.161h-.34s.34-.706-.193-.656c-.533.05-.97 1.918-.97 1.918l-.29-.202s-.194-1.918.242-2.423l2.375.202zM7.24 17.486l.594-.295a.275.275 0 00.1-.399c-.46-.67-1.744-2.443-2.968-3.2-.24-.148-.506.147-.346.386l2.297 3.42c.073.107.21.145.324.088" fill=#B7B7B7></path>
																				<path d="M7.116 17.786s.848 1.388 3.711 1.15c2.13-.178 1.958-.229 1.958-.229s.557-.403.654-.151c.097.252-.334.43-.189.48.145.051.37.088.824-.05.465-.14.92.05.29.354-.63.302-1.502.302-2.035.15 0 0-2.304.922-4.741.026a3.037 3.037 0 01-1.096-.72l-.273-.278.897-.732zM23.008 11.326s-.818 5.023-4.125 4.948l.109-.19s1.199-.605 1.09-.795c0 0-.763-.265-.364-.302.4-.038.763-.114.982-.341.218-.227 1.436-2.247 1.509-3.27.109 0 .8-.05.8-.05" fill=#D9DBDB></path>
																				<path d="M7.21 17.813a.32.32 0 00.123-.368c-.28-.832-1.238-3.594-1.69-3.809-.533-.252-3-.35-3.539-.114-1.24.54-1.21 2.89-1.21 2.89l-.05 5.64 4.266.063-.146-5.652.78 2.049a.18.18 0 00.268.09l1.198-.789zM2.623 9.334l4.575.467s.34-2.271-1.211-2.827c-1.4-.5-2.918.849-3.557 1.97-.092.163.012.371.193.39" fill=#C4C4C4></path>
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
																					fill: #d9dbdb;
																					fill-rule: evenodd
																					}
																				</style>
																			</defs>
																			<path d="M0 0h24v24H0z" fill=none></path>
																			<path class=prefix__cls-2 d="M1.73 18.52h21.81V6.46H1.73z"></path>
																			<path d="M1.28 18.07h21.81V6H1.28z" fill=#b7b7b7 fill-rule=evenodd></path>
																			<path class=prefix__cls-2 d="M.75 17.3h21.81v-12H.75z"></path>
																			<path d="M16 11.28A4.3 4.3 0 1111.65 7 4.29 4.29 0 0116 11.28z" fill=#e06194 fill-rule=evenodd></path>
																			<path d="M12.29 9h1l.35-.52h-3.58L9.71 9h1a1.27 1.27 0 011.05.57h-1.71l-.35.53h2.13s0 1.14-1.93.94v.52l2.1 2.5h.79V14l-2-2.43s1.57 0 1.82-1.36h.66l.35-.53h-1a1.22 1.22 0 00-.33-.68" fill=#fff fill-rule=evenodd></path>
																		</svg>
																		<div class=HalfCard-delivery-halfcard-description>Refund will be processed in 7-14 days after the quality check</div>
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
															<span class="fa fa-plus-circle fa-2x  cartitem1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
															<span class="fa fa-plus-circle fa-2x cartitem2" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="top"></span>
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
														<div class="create-review-top-container-fluid">
															<img src="https://cdn-yotpo-images-production.yotpo.com/Product/341890815/339962144/square.jpg?1661904914" alt="Let's Relax Jogger Sweatpants - Black image" class="create-review-image">
															<div class="create-review-top-right-container-fluid">
																<p class="create-review-product-title">Let's Relax Jogger Sweatpants - Black</p>
																<div id="create-review-star-line-field-container-fluid">
																	<div id="create-review-star-line-wrapper">
																		<div class="create-review-star-line-container-fluid">
																			<svg fill="none" width="32" height="31" viewBox="0 0 32 31" class="create-review-star">
																				<path d="M16.0001 1.52061L20.2429 10.6572L20.3617 10.913L20.6421 10.9436L30.828 12.058L23.267 18.7964L23.0507 18.9891L23.1104 19.2726L25.1737 29.0793L16.2426 24.124L16 23.9894L15.7574 24.124L6.82635 29.0793L8.88963 19.2726L8.94927 18.9891L8.73301 18.7964L1.17202 12.058L11.3579 10.9436L11.6383 10.913L11.7571 10.6572L16.0001 1.52061Z" fill="#E0AA1D" stroke="#E0AA1D"></path>
																			</svg>
																			<svg fill="none" width="32" height="31" viewBox="0 0 32 31" class="create-review-star">
																				<path d="M16.0001 1.52061L20.2429 10.6572L20.3617 10.913L20.6421 10.9436L30.828 12.058L23.267 18.7964L23.0507 18.9891L23.1104 19.2726L25.1737 29.0793L16.2426 24.124L16 23.9894L15.7574 24.124L6.82635 29.0793L8.88963 19.2726L8.94927 18.9891L8.73301 18.7964L1.17202 12.058L11.3579 10.9436L11.6383 10.913L11.7571 10.6572L16.0001 1.52061Z" fill="#E0AA1D" stroke="#E0AA1D"></path>
																				</svg><svg fill="none" width="32" height="31" viewBox="0 0 32 31" class="create-review-star">
																				<path d="M16.0001 0.333496L20.6964 10.4466L32 11.6832L23.5997 19.1696L25.8883 30.0477L16 24.5612L6.11167 30.0477L8.40034 19.1696L0 11.6832L11.3036 10.4466L16.0001 0.333496Z" fill="#f8f8f8" stroke="#e6e6e6"></path>
																				</svg><svg fill="none" width="32" height="31" viewBox="0 0 32 31" class="create-review-star">
																				<path d="M16.0001 0.333496L20.6964 10.4466L32 11.6832L23.5997 19.1696L25.8883 30.0477L16 24.5612L6.11167 30.0477L8.40034 19.1696L0 11.6832L11.3036 10.4466L16.0001 0.333496Z" fill="#f8f8f8" stroke="#e6e6e6"></path>
																				</svg><svg fill="none" width="32" height="31" viewBox="0 0 32 31" class="create-review-star">
																				<path d="M16.0001 0.333496L20.6964 10.4466L32 11.6832L23.5997 19.1696L25.8883 30.0477L16 24.5612L6.11167 30.0477L8.40034 19.1696L0 11.6832L11.3036 10.4466L16.0001 0.333496Z" fill="#f8f8f8" stroke="#e6e6e6"></path>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="row">
															<div class="col-sm-12 py-2">
																
																<div class="form-group">
																	<label>Size Purchased</label>
																	<select class="form-control">
																		<option value="XS">XS</option>
																		<option value>S</option>
																		<option value>M</option>
																		<option value>L</option>
																		<option value>XL</option>
																	</select>
																</div>
																<div class="form-group">
																	<label>Your Usual Size</label>
																	<select class="form-control">
																		<option value="XS">XS</option>
																		<option value>S</option>
																		<option value>M</option>
																		<option value>L</option>
																		<option value>XL</option>
																	</select>
																</div>
																<label>How did it feet it?</label>
																<div class="form-group">
																	
																	<input type="radio" name="color" id="true-to-size" required class="sr-only" value="true-to-size">
																	<label for="true-to-size" class="review-fit-button activeFit">
																		<span>True to size</span>
																	</label>
																	<input type="radio" name="color" id="run-small" required class="sr-only" value="run-small">
																	<label for="run-small " class="review-fit-button">
																		<span>Run Small</span>
																	</label>
																	<input type="radio" name="color" id="runs-large" required class="sr-only" value="runs-large">
																	<label for="runs-large " class="review-fit-button">
																		<span>Runs large</span>
																	</label>
																</div>
																<div class="form-group">
																	<label>Name</label>
																	<input type="text" name="name" placeholder="xyz" class="form-control">
																</div>
																<div class="form-group">
																	<label>Email</label>
																	<input type="email" name="email" placeholder="slick@example.com" class="form-control">
																</div>
																<!--<div class="form-group">
																	<label>Rating</label> <br>
																	<a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>  <a href="#"><i class="bi bi-star"></i></a>
																</div>-->
																<div class="form-group">
																	<label>Review Title</label>
																	<input type="text" name="title" placeholder="Give your review a title" class="form-control">
																</div>
																<div class="from-group">
																	<label>Body of Review(1500)</label>
																	<textarea class="form-control" name="body" rows="5" placeholder="Write your comments here"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary">Submit </button>
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
																<span class="text-justify">
																	Height: 178 cm
																	Chest girth: 83 cm
																	Waist girth: 60 cm
																	Hip girth: 90 cm
																	Size on model: S
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
										
										<script type="text/javascript" src="<?= base_url('public/js') ?>/jquery.picZoomer.js"></script>
										
										
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
											
											function OpenTipsModal() {
												jQuery("#BeautyTipsModal").modal('show');
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
											$('.filter-colors').owlCarousel({
												loop: false,
												autoplay: false,
												nav: false,
												dots: false,
												responsive: {
													0: {
														items: 4.9,
														
													},
													460: {
														items: 5.5,
													},
													1024: {
														items: 8.5,
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
														items: 1,
														
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
											
										</script>
									</body>
								</html>
														