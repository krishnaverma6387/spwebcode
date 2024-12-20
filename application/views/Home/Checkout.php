
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Checkout</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>			
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
			}
			@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
			}
			}
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: #FF1493 !important;
			}
			.slide-toggle{
			display:none!important;
			}
			.btn-link:focus, .btn-link.focus{
			text-decoration:none!important;
			}
			.addressContainer{
			padding-right:24px;
			}
			@media only screen and (max-width: 600px) {
			#anssection{
			border-top: 1px solid black;
			}
			#mobileheader{
			display:block;
			}
			.addressContainer{
			padding-right:0px;
			}
			}
			
	     	@media only screen and (min-width : 760px){ 
			#mobileheader{
			display:none !important;
			}
			}
			input,
			input::placeholder {
			font: 12px/3 sans-serif;
			text-transform: capitalize;
			}
			.nav-pills .nav-link, .nav-pills .show>.nav-link {
			background-color: #8340A1 !important;
			color: white;
			}
			
			.form-control-lg {
			font-size: 12px!important;
			}
			ol {
			list-style:none;
			display:inline;
			}
			.table th, .table td {
			padding-left: 5px;
			font-size: 14px;
			}
			.table th, .table td {
			padding-left: 8px!important;
			}
			#couponsection{
			height: 300px;
			overflow-y:scroll;
			}
			.btn {
			font-size: 12px!important;
			padding-top: 9px!important;
			padding-left: 19px!important;
			padding-right: 19px!important;
			padding-bottom: 9px!important;
			}
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.headingP{
			font-size: 15px;
			}
			.btnsize{
			text-aligh: left!important;
			}
			.change_font{
			font-size: 8px;
			}
			}
			.btnsize{
			text-aligh: right!important;
			}
			.css-acjr43 {
			box-sizing: border-box;
			border-radius: 2px;
			display: flex;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: start;
			justify-content: flex-start;
			font-size: 12px;
			font-weight: 400;
			line-height: 16px;
			letter-spacing: 0px;
			border: 1px solid rgba(6, 135, 67, 0.16);
			background: rgba(6, 135, 67, 0.08);
			padding: 6px 0.5rem;
			margin-top: 0.75rem;
			}
			.css-aijry1 {
			display: inline-block;
			height: 16px;
			width: 16px;
			margin-right: 10px;
			}
			
			.paymentOptions.active{
			border:1px solid #8834AD !important;  
			}
			
		</style>
		
	</head>
    <body>  
		
		<header id="headerTwo" class="header-area header-two header-desktop mt-2" style="box-shadow:none;">
			<div class="header-maxi bg-header-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 col-sm-12 col-lg-2">
							<a href="<?php echo base_url(); ?>" class="logo">
								<img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
							</a>
						</div>
						<div class="col-12 col-sm-8 nav-start">
							<center>
								<span class="font-weight-bold"><a href="<?= base_url('Home/Cart') ?>">BAG</a></span>&nbsp;&nbsp;<span>----------</span>&nbsp;&nbsp;<span class="font-weight-bold" ><a href="<?= base_url('Home/Checkout') ?>" style="color: #FF1493;">CHECKOUT</a></span><!--&nbsp;&nbsp;<span>----------</span>&nbsp;&nbsp;<span class="font-weight-bold"><a href="<?= base_url('Home/Payment') ?>">PAYMENT</a></span>-->
							</center>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center">
							<img src="https://constant.myntassets.com/checkout/assets/img/sprite-secure.png"  style="height: 40px; margin:0 5px;">
							<span style="font-weight: 600">100% SECURE</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<header id="mobileheader">
			<div class="container mt-2">
				<div class="row">
					<div class="col-6">
						<a href="javascript:void(0)">&nbsp;<i class="bi bi-arrow-left-short"></i>&nbsp;Delivery Address</a>
					</div>
					<div class="col-6 text-right">
						STEP 2/3
					</div>
				</div>	
			</div>
		</header>
		
		<!--<div class="container-fuild ">
			<nav aria-label="breadcrumb">
			<div class="container-fluid">
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="bi bi-house-door"></i></a></li>
			<li class="breadcrumb-item active" aria-current="page">Select Delivery Address </li>
			</ol>
			</div>
			</nav>
		</div> -->
		
		<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Checkout'); ?>" method="post" enctype="multipart/form-data" id="CheckOutForm2">
			<!--<form  action="<?=base_url('Home/codOrder')?>" method="post">-->
			<section class="pro-content checkout-content">   
				<div class="container-fluid"> 
					<div class="row d-none">
						<div class="pro-heading-title">
							<h1>
								Checkout 
							</h1>
						</div>
					</div>
					<div class="row p-3 " style="justify-content:space-between;">   
						<div class="col-12 col-xl-8 px-0">
							<div class="row m-0 hide_in_mobile">
								<div class="col-sm-6 col-12 ">
									<h4 class="font-weight-bold text-uppercase headingP"><b style="font-size: 18px;">Select Delivery Address</b></h4>   
								</div>
								<div class="col-sm-6 col-12 pr-4" >
									<p class="btnsize float-right px-2"><a href="javascript:void(0)" class="btn btn-secondary" onclick="OpenAddressModal()">ADD NEW ADDRESS</a> </p>  
								</div>
							</div>
							<div class="row mt-3 m-0 addressContainer">
								<div class="scrollAdderss col-sm-12 px-0" >
									<div class="col-sm-12 p-2">
										<p class="font-weight-bold">DEFAULT ADDRESS</p>
										<?php
											
											foreach($addresslist as $each)
											{
												if($each->default_address != 'false')
												{
												?>
												<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%);">
													<div class="card-body" for="UserName2">
														<div>
															<input type="radio" class="customradio" id="UserName2" name="address" data-parsley-required-message="Please select address" required value="<?= $each->id?>">
															<label for="User"><?= $each->name?></label>&ensp;<span class="badge badge-pill badge-secondary"><?= ucwords($each->address_type)?></span> <br>
														</div> 
														<div class="ml-3">
															<span><?= $each->line1?> </span> <br>
															<span><?= $each->line2?> </span> <br>
															<span><?= $each->city?> , <?= $each->state?>  - <?= $each->pincode?>  </span> <br><br>
															<span>Mobile: <span><?= $each->mobile?> </span></span> <br>
															<div class="hideitem">
																<span>Pay on Delivery available</span> <br><br>
																<button type="button" class="btn btn-secondary" onclick="return Delete(this,'tbl_address','id','<?= $each->id; ?>','','')">REMOVE</button>
																<button type="button" class="btn btn-secondary" onclick="Edit('<?= $each->id; ?>')">EDIT</button>
															</div>
														</div>
													</div>	
												</div><br>
												<?php
												}
											}
										?>
										<div class="col-sm-12 p-0 d-none"> 
											<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%); border: 1px dashed  rgb(40 44 63 / 20%) !important;">
												<div class="card-body p-0">
													<a href="javascript:void(0)" onclick="OpenMoreAddress()" class="font-weight-bold" style="height: 100%; width: 100%; display: block; padding: 12px;">ADD OR CHANGE ADDRESS</a>
												</div>	
											</div>
										</div>
									</div>	
									<div class="col-sm-12 p-2 moreAddress">
										<p class="font-weight-bold">OTHER ADDRESS</p>
										<?php
											foreach($addresslist as $each)
											{
												if($each->default_address != 'true')
												{
												?>
												<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%);"> 
													<div class="card-body" for="UserName2">
														<div>
															<input type="radio" class="customradio" id="UserName2"  name="address" required value="<?= $each->id?>" >
															<label for="User"><?= $each->name?></label>&ensp;<span class="badge badge-pill badge-secondary"><?= ucwords($each->address_type)?></span> <br>
														</div>
														<div class="ml-3">
															<span><?= $each->line1?> </span> <br>
															<span><?= $each->line2?> </span> <br>
															<span><?= $each->city?> , <?= $each->state?>  - <?= $each->pincode?>  </span> <br><br>
															<span>Mobile: <span><?= $each->mobile?> </span></span> <br>
															<div class="hideitem">
																<span>Pay on Delivery available</span> <br><br>
																<button type="button" class="btn btn-secondary" onclick="return Delete(this,'tbl_address','id','<?= $each->id; ?>','','')">REMOVE</button>
																<button type="button" class="btn btn-secondary"  onclick="Edit('<?= $each->id; ?>')">EDIT</button>
															</div>
														</div>
													</div>	
												</div><br>
												<?php
												}
											}
										?>
									</div>
								</div>
								<div class="col-sm-12 p-2 pb-5"> 
									<div class="card" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%); border: 1px dashed gray !important;">
										<div class="card-body p-0">
											<a href="javascript:void(0)" onclick="OpenAddressModal()" class="font-weight-bold" style="height: 100%; width: 100%; display: block; padding: 18px;"><i class="bi bi-plus"></i>ADD NEW ADDRESS</a>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-4 px-4"> 
							<div class="row" style="box-shadow: 0 0 4px rgb(40 44 63 / 20%);">
								<?php
									$totalIndividualPrice=0;
									$totalIndDiscount=0;
									foreach($IndList as $each)
									{
										$product = $this->db->get_where('products',array('id'=>$each->product_id));
										$id = $this->session->userdata('userId');
										
										
										if($product->num_rows()>0)
										{
											$product = $product->row();
											$icons = explode(',',$product->image1);
											$id = $this->session->userdata('userId');
											
											// code for check sale is available or not on this product 
											$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$product->id,'is_status'=>'true','sale_type'=>'individual'))->row();
											if(!empty($saleProduct)){
												
												$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
												$last_date = date_create(date('Y-m-d H:i:s')); 
												$today = date_create($tblSale->end_date);  
												$date_difference = date_diff($last_date,$today);  
												$days=$date_difference->format('%r%a');
											}
											if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
											{	
												$saleRate=$product->mrp;
												$discount=(int)$saleProduct->discount;
												$saleprice=$saleRate - ( ($saleRate/100) * $discount );
												$price=$saleprice;
											}else
											{
												$price = $product->off_price;
											}
											
											#check giftwrap added or not
											if($each->is_giftwrap=='true'){
												$cartGiftWrap=json_decode($each->giftwrap_details);
												$giftwrapid=$cartGiftWrap->giftwrapid;
												$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
												$giftPrice=$giftWrapDetails->price;  
												$total = ($price*$each->qty)+$giftPrice;
												$totalMrp = ($product->mrp*$each->qty)+$giftPrice;
											}
											else{
												$total = $price*$each->qty;
												$totalMrp = ($product->mrp*$each->qty);
											}
											$totalIndDiscount += $total; 
											$totalIndividualPrice+=$totalMrp;
										}?>
										<div class="col-sm-12 my-2"  >
											<span><h6 style="font-weight: 500;"><span><?= $product->name;?></span>
												<span style="float:right">Qty : <?=$each->qty?></span>
											</h6>
											</span>
											<div class=" border-bottom d-flex" >
												<span><img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid" style="height:80px;width:80px;"></span>
												<div class="product-details" style="font-size:12px;">
													&nbsp;&nbsp;<span> COLOR:</span>&nbsp;<?php 
														$colors=explode(",",$each->color);
														if(!empty($colors))
														{
															foreach($colors as $color){
															?>
															<span  style="height:40px; width:40px; border-radius:50%; padding:0px 8px; margin:0 2px; background:<?= $color;?>;"></span> 
															<?php
															}
														}?>   
														</br>&nbsp;&nbsp;<span> SIZE : <?= $each->size?></span>
														</br>&nbsp;&nbsp;<span> PRICE : <?= $totalMrp;?></span>
												</div>
											</div>
										</div>
										<?php
										}	
								?>
								
								<!-- combo product start-->
								<?php
									$totalComboPrice=0;
									$totalComboDiscount=0;
									foreach($ComboList as $each)
									{
										$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
										$id = $this->session->userdata('userId');
										if($product->num_rows()>0)
										{
											$product = $product->row();
											$icons = explode(',',$product->image);
											$id = $this->session->userdata('userId');
											
											// code for check sale is available or not on this product 
											$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$product->id,'is_status'=>'true','sale_type'=>'combo'))->row();
											if(!empty($saleProduct)){
												
												$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
												$last_date = date_create(date('Y-m-d H:i:s')); 
												$today = date_create($tblSale->end_date);  
												$date_difference = date_diff($last_date,$today);  
												$days=$date_difference->format('%r%a');
											}
											if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
											{	
												$saleRate=$product->price;
												$discount=(int)$saleProduct->discount;
												$saleprice=$saleRate - ( ($saleRate/100) * $discount );
												$price=$saleprice;
											}else
											{
												$price = $product->discount_price;  
											}
											
											#check giftwrap added or not
											if($each->is_giftwrap=='true'){
												$cartGiftWrap=json_decode($each->giftwrap_details);
												$giftwrapid=$cartGiftWrap->giftwrapid;
												$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
												$giftPrice=$giftWrapDetails->price;  
												$total = ($price*$each->qty)+$giftPrice;
												$totalMrp = ($product->price*$each->qty)+$giftPrice;
											}
											else{
												$total = $price*$each->qty;
												$totalMrp = ($product->price*$each->qty);
											}
											
											$totalComboDiscount += $total;  
											$totalComboPrice+=$totalMrp; 
										}
									?>	
									<div class="col-sm-12 my-2"  >
										<span><h6 style="font-weight: 500;"><span><?= $product->name;?></span>
											<span style="float:right">Qty : <?=$each->qty?></span>
										</h6>
										</span>
										<div class=" border-bottom d-flex" >
											<span><img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid" style="height:80px;width:80px;"></span>
											<div class="product-details" style="font-size:12px;">
												&nbsp;&nbsp;<span> COLOR:</span>&nbsp;<?php 
													$colors=explode(",",$each->color);
													if(!empty($colors))
													{
														foreach($colors as $color){
														?>
														<span  style="height:40px; width:40px; border-radius:50%; padding:0px 8px; margin:0 2px; background:<?= $color;?>;"></span> 
														<?php
														}
													}?>   
													</br>&nbsp;&nbsp;<span> SIZE : <?= $each->size?></span>
													</br>&nbsp;&nbsp;<span> PRICE : <?= $totalMrp?></span>
											</div>
										</div>
									</div>
									<!-- combo product end-->
									<?php
									}
								?>
								<!--
									<span>Estimated delivery by <span class="font-weight-bold">25 Aug 2022</span></span>
								-->
								
								<div class="row m-0" style="padding: 12px 0;">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<h6>Price Summary</h6>
												<small>Prices are inclusive of all taxes</small>
												
												<table class="table table-striped  table-borderless">
													<tr>
														<th>Total MRP</th>	 
														<th>₹<?php echo $totalIndividualPrice+$totalComboPrice; ?></th>	
													</tr>
													<tr>
														<th>Discount on MRP</th>	 
														<th>₹<?php $discount=(($totalIndividualPrice+$totalComboPrice)-($totalIndDiscount+$totalComboDiscount));echo $discount;?></th>
													</tr>
													<tr>
														<th>Coupon Discount  <a href="javascript:void(0)" class="font-weight-bold change_font" style="color: #FF1493;" onclick="OpneCouponModal()">Coupon </a></th>	 
														<th><a href="javascript:void(0)" class="change_font" style="color: #FF1493;" >Apply</a></th>	
													</tr>
													<tr>
														<th>Convenience Fee <a href="javascript:void(0)" class="font-weight-bold change_font" onclick="OpneConvModal()" style="color: #FF1493;" >Know More </a></th>	 
														<th>₹0</th>	
													</tr>
													<tr>
														<th>Sub Total</th>	 
														<th>₹<?php $subTotal=(($totalIndividualPrice+$totalComboPrice)-$discount); echo $subTotal;?></th>	
														<hr>
													</tr>
													
													<tr style="border:1px dotted;">
													</tr>
													<tr class="bg-white">
														<th>You Pay</th>	 
														<th>₹<?= $subTotal;?></th>	
													</tr>
													
												</table>
												<?php if($discount>0){?>
													<div class="css-acjr43">
														<svg viewBox="0 0 24 24" class="css-aijry1"><title></title><path d="M12 3C10.22 3 8.47991 3.52784 6.99986 4.51677C5.51982 5.50571 4.36627 6.91131 3.68508 8.55585C3.00389 10.2004 2.82566 12.01 3.17293 13.7558C3.5202 15.5016 4.37736 17.1053 5.63604 18.364C6.89471 19.6226 8.49835 20.4798 10.2442 20.8271C11.99 21.1743 13.7996 20.9961 15.4441 20.3149C17.0887 19.6337 18.4943 18.4802 19.4832 17.0001C20.4722 15.5201 21 13.78 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3ZM16.07 10L11.07 15C10.9295 15.1407 10.7388 15.2198 10.54 15.22C10.4399 15.2212 10.3405 15.2024 10.2477 15.1646C10.155 15.1268 10.0708 15.0709 10 15L7.9 12.91C7.82924 12.8411 7.773 12.7586 7.73461 12.6676C7.69621 12.5766 7.67643 12.4788 7.67643 12.38C7.67643 12.2812 7.69621 12.1834 7.73461 12.0924C7.773 12.0014 7.82924 11.9189 7.9 11.85C8.04062 11.7095 8.23125 11.6307 8.43 11.6307C8.62875 11.6307 8.81937 11.7095 8.96 11.85L10.53 13.42L15 9C15.1406 8.85955 15.3312 8.78066 15.53 8.78066C15.7287 8.78066 15.9194 8.85955 16.06 9C16.1865 9.13522 16.2576 9.31293 16.2595 9.49806C16.2613 9.68318 16.1937 9.86228 16.07 10Z" fill="#001325" fill-opacity="0.92"></path></svg>
														Yay! You are saving ₹<?=$discount;?>.
													</div>
												<?php } ?>
												<div class="form-group pt-3 mb-0">
													<input type="radio" required class="sr-only" data-parsley-required-message="Please select payment options" name="pay_mode" value="online" id="online"><label class="paymentOptions" for="online" style="font-size: 14px;  color: #222127; padding: 5px 10px; border-radius: 15px; border: 1px solid gainsboro; cursor:pointer;">Pay Now</label>
													<input type="radio" required class="sr-only" name="pay_mode" value="cod" id="cod"><label class="paymentOptions" for="cod" style="font-size: 14px;  color: #222127; padding: 5px 10px; border-radius: 15px; border: 1px solid gainsboro; cursor:pointer;">Cash On Delivery</label> 
												</div>
											</div>	
										</div>
									</div>
									<div class="col-sm-12 mt-4" style="max-width: 99%;">   
										<button <?php if($subTotal==0) { echo 'disabled'; } ?> id="CheckOutBtn2"  type="submit" class="btn checkoutbtn btn-secondary swipe-to-top btn-order btn-block">
											<span class="btn-text">Place Order</span>
											<span class="btn-hover-text">Proceed to Checkout</span>
											<i class="fa fa-spin fa-spinner" id="CheckOutSpin2" style="display:none;"></i>
										</button> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
		
		<!-- Modal -->
		<div class="modal fade" id="ConvenienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header" style="border-bottom: 0px; padding-bottom: 1px">
						<h4 class="modal-title" id="exampleModalLongTitle" style="font-size: 17px;">Convenience Fee </h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row pr-2 pl-2" style="border-radius: 10px;">
							<div class="col-sm-12   p-2" style="background-color:#F5F5F6;">
								<h6 style="font-size: 13px;">What is Convenience Fee ?</h6>	
								<p style="font-size: 10px;">"Convenience Fee"  is a service charge levied by slickpattern Pvt. Ltd. on low value orders on slickpattern plateform</p>
								<p style="font-size: 10px;">Have a question?Refer <a href="#" style="color: red;">FAQ's</a></p>
								<hr>
								<p style="font-size: 10px;">For further information , refer to our <a href="#" style="color: red;">Term of use</a></p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="CouponModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Apply Coupon</h5>
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
								<div class="p-3" style="border-bottom:1px solid #ddd;">
									<input type="checkbox" id="huey" class="customradio" name="drone" value="huey"
									checked>
									<label for="huey" class="font-weight-bold">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3" style="border-bottom:1px solid #ddd;">
									<input type="checkbox" class="customradio" id="huey2" name="drone" value="huey"
									>
									<label for="huey2" class="font-weight-bold">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3">
									<input type="checkbox" class="customradio" id="huey3" name="drone" value="huey"
									>
									<label for="huey3" class="font-weight-bold">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
							</div>	
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6 ">  <p class="font-weight-bold">Maximum Saving: ₹200</p>  </div>
						<div class="col-6 "><button type="button" class="btn btn-secondary btn-block">Apply</button>	</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Modal -->
		<div class="modal fade" id="AddAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-uppercase" id="exampleModalLabel">Add New Address</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddAddress'); ?>" method="post" enctype="multipart/form-data" id="addForm">
							<div class="form-group">
								<label>Choose State <span class="text-danger">*</span></label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control form-control-lg" required>
									<option>Select</option>
								</select>
								
							</div>
							<div class="form-group">
								<label>Choose City <span class="text-danger">*</span></label>
								<select id ="state" name="city" class="form-control form-control-lg" required>
									<option selected disabled>Select</option>	
								</select>
							</div>
							<div class="form-group">
								<label>Pin Code <span class="text-danger">*</span></label> 
								<input type="number" name="pincode" class="form-control form-control-lg" placeholder="pincode"required>
							</div>
							<div class="form-group">
								<label>Address Line1 <span class="text-danger">*</span></label> 
								<input type="text" name="addressline1" class="form-control form-control-lg" placeholder="Address line1" required>
							</div>
							<div class="form-group">
								<label>Address Line2 <span class="text-danger">*</span></label> 
								<input type="text" name="addressline2" class="form-control form-control-lg"  placeholder="Address line2" required>
							</div>
							<div class="form-group">
								<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
								<input type="text" required name="name" class="form-control form-control-lg" placeholder="Full Name">
							</div>
							<div class="form-group">
								<label>Address Type<span class="text-danger">*</span></label>  <br>
								<input type="radio" required name="addresstype" id="Home" value="home" selected> <label for="Home">Home</label>
								<input type="radio" required name="addresstype" id="Work"  value="work"> <label for="Work">Work</label>
							</div>
							<div class="form-group">
								<label>Phone Number<span class="text-danger">*</span></label> 
								<input type="text" name="mobile" class="form-control form-control-lg" placeholder="mobile number" required>
							</div>
							<div class="form-group">
								<input type="checkbox" name="defaultaddress" for="" id="chebox" >
								<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
							</div>
							<button type="submit" value="Subscribe" name="subscribe" id="addBtn" class="btn btn-secondary swipe-to-top">Subscribe<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!----footer Start---->
		<section class="pro-content testimonails-content animate__animated animate__backInUp" style="background-color:white; padding-top: 20px; padding-bottom: 10px">
			<div class="container">
				<div class="row p-1 ">
					<div class="col-sm-6 col-12">
						<i class="bi bi-shield-check text-success"></i> &nbsp; <span>Safe & Secure Payments | 100% Authentic Products</span>	
					</div>
					<div class="col-sm-6 col-12 text-right ">
						<span class="font-weight-bold">Need Help?</span><a class="font-weight-bold" href="<?= base_url('Home/Contact') ?>">Contact US</a>	
					</div>
				</div>
			</div>
		</section>
		<!----footer Start End---->
		<div class="modal fade" id="EditModal">
			<div class="modal-dialog ">
				<div class="modal-content border-secondary">
					<div class="modal-header bg-secondary p-1">
						<h5 class="modal-title text-white">Edit Address</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateAddress'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
							value="<?= $this->security->get_csrf_hash(); ?>" />
							<button type="submit" class="btn btn-secondary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<!--Modal End-->
		
		<?php include('include/jsLinks.php'); ?>
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
		<script>
			$('#CheckOutForm2').on('submit', function(e) {  
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
							console.log(response);
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
										window.location.href=response[0].data.baseUrl+'Home/PaymentResponseOrder/'+rzpResponse.razorpay_order_id+'/'+rzpResponse.razorpay_payment_id;
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
								// rzp1.on('payment.failed', function (response){  
								// });  
								rzp1.open();   
							} 
							else if (response[0].res == 'error') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error");
							}
						},
						error: function() {
							window.location.reload();
						}
					});
				}
			});
			
			function OpneConvModal(){
				jQuery('#ConvenienceModal').modal('show')
			}	
			function OpenAddressModal(){
				jQuery('#AddAddress').modal('show')
			}
			
			function OpneCouponModal(){
				jQuery('#CouponModal').modal('show')
			}	
			$('.paymentOptions').click(function(){
				$('.paymentOptions').removeClass('active');
				$(this).addClass('active');
			})
		</script>
		
		
		
	</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											