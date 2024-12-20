
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Payment </title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.table th, .table td {
			padding-left: 5px;
			}
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
			.list-group .list-group-item {
			padding: 16px!important;
			}
			.list-group-item.active {
			z-index: 2;
			color: #fff;
			background-color: #8834AD;
			border-color: #333;
			}
			.inner{
			padding: 20px;
			}
			.inner:hover{
			background-color:#F7F7F7!important;
			}
			.slideup{
			display: none;
			}
			
			
			.list-group-item.active {
			color: #FF1493!important;
			}
			
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			#couponsection{
			overflow-y: scroll;
			height: 323px;
			
			}
			.itemtext{
			font-size:7px!important;
			}
			}
			.itemtext{
			font-size:7px!important;
			}
			
		</style>
		
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<header id="headerTwo" class="header-area header-two header-desktop">
			<div class="header-maxi bg-header-bar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-12 col-lg-2">
							<a href="<?php echo base_url(); ?>" class="logo">
								<img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
							</a>
						</div>
						<div class="col-12 col-sm-8 nav-start">
							<center>
								<span class="font-weight-bold"><a href="<?= base_url('Home/Cart') ?>">BAG</a></span>&nbsp;&nbsp;<span>----------</span>&nbsp;&nbsp;<span class="font-weight-bold"><a href="<?= base_url('Home/Checkout') ?>" class="active">ADDRESS</a></span>&nbsp;&nbsp;	<span>----------</span>&nbsp;&nbsp;<span class="font-weight-bold" ><a href="<?= base_url('Home/Payment') ?>" style="color: #FF1493;">PAYMENT</a></span>
							</center>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2">
							<img src="https://constant.myntassets.com/checkout/assets/img/sprite-secure.png" class="img-fluid">
							<span style="font-weight: 600">100% SECURE</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<section class="pro-content checkout-content">   
			<div class="container"> 
				
				<div class="row">
					<div class="col-12 col-xl-8">
						
						<div class="row ">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<i class="bi bi-patch-exclamation ml-4"></i>  <span class="font-weight-bold text-uppercase">Bank Offer</span> <br>
										<ul>
											<li> 10% Instant Discount on Kotak Credit and Debit Cards on a min spend of Rs 3,000. TCA</li>   
											<div class="slideup">
												<li>10% Instant Discount on Kotak Credit and Debit Cards on a min spend of Rs 3,000. TCA</li>   
												<li>10% Cashback upto Rs 100 on Paytm Postpaid transaction on a min spend of Rs 1000. TCA</li>   
												<li> 10% Cashback upto Rs 150 on Ola Money Postpaid or wallet transaction on a min spend of Rs 1000 . TCA</li>   
												<li> 10% Cashback upto Rs 150 on Freecharge Paylater transaction. TCA</li>   
												<li> Upto Rs 1500 Cashback on Mobikwik Wallet Transactions on a min spend of Rs 4999.Use code MBK1500 on Mobikwik.TCA</li>   
												<li> Upto Rs 500 Cashback on Mobikwik Wallet Transactions on a min spend of Rs 999.Use code MBK500 on Mobikwik.TCA</li>   
												<li> 5% Cashback upto Rs 100 on a minimum spend of Rs 1,500 with PayZapp. TCA</li> 
											</div>
										</ul>
										<a href="javascript:void(0)" onclick="ShowMore()" id="ShowMore" class="font-weight-bold ml-4"style="color: #FF1493;">Show More  <i class="fa fa-angle-down" style="color:#FF1493;"></i> </a>  
									</div>
								</div>  
							</div>
							
						</div>
						<div class="row mt-3">
							<div class="pro-heading-title">
								<h1 style="font-size: 20px;">
									Choose Payment Method 
								</h1>
							</div>
						</div>
						
						<div class="row">
							<div class="col-12 col-lg-4">
								<div class="list-group" id="list-tab" role="tablist">
									<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Credit/Debit Card</a>
									<a class="list-group-item list-group-item-action" id="list-upi-list" data-toggle="list" href="#upi" role="tab" aria-controls="home">UPI</a>
									<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">GPay/PhonePay/Paytm</a>
									<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Net Banking</a>
									<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Mobile Wallets</a>
									<a class="list-group-item list-group-item-action" id="list-cod-list" data-toggle="list" href="#list-cod" role="tab" aria-controls="cashondelevery">Cash On Delivery</a>
									<a class="list-group-item list-group-item-action" id="list-giftcard-list" data-toggle="list" href="#list-giftcard" role="tab" aria-controls="giftcard">Gift Card</a>
								</div>
							</div>
							<div class="col-12 col-lg-8">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">Credit/Debit Card</p>	
											</div>
											<div class="card-body">
												<form>
													<div class="form-group mb-1">
														<input type="text" class=" cc-number-input form-control form-control-lg" required placeholder="Card Number">	
													</div>	
													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 mt-2">
																<input type="text" class="cc-expiry-input form-control form-control-lg" name="" placeholder="Valid Thru (eg. MM/YY)">	
															</div> 
															
															<div class="col-lg-6 mt-2">
																<div class="input-group">
																	<input type="text" class="cc-cvc-input form-control form-control-lg" placeholder="CVV(Last 3 Digit)" aria-label="CVV" aria-describedby="basic-addon1">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="basic-addon1"><i class="bi bi-info-circle"></i></span>
																	</div>
																</div>	
															</div>  
														</div>	
													</div>
													<div class="form-group">
														<input type="checkbox"  name="" id="savechx"> <label for="savechx" class="mb-1">Save this card as pr RBI guideline</label>	
													</div>
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">Pay ₹800 now</button>
													</div>	
												</form>	
											</div>
											
										</div>	
									</div>
									<div class="tab-pane fade" id="upi" role="tabpanel" aria-labelledby="list-profile-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">BHIM UPI</p>	
											</div>  
											<div class="card-body">
												<form>
													<div class="form-group">
														<input type="text" class="form-control form-control-lg" required placeholder="VPA/UPI ID (eg. 1234567890@upi)">	
													</div>	 
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">Pay ₹800 now</button>
													</div>	
												</form>	
											</div>
										</div>	
									</div>
									<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">GooglePay/PhonePay/Paytm</p>	
											</div>  
											<div class="card-body">
												<form>
													<div class="form-group">
														<div class="row">
															<div class="col-sm-4 text-center inner shadow-sm">
																<a href="javascript:void(0)"><img src="https://i.pinimg.com/originals/f6/60/a6/f660a637c5ea8ef2b00218bac3479c82.png" style="height: 70px" class="img-fluid"><br><span><input type="radio" checked name="gpay">&nbsp;GooglePay</span></a>
															</div>	
															<div class="col-sm-4 text-center inner shadow-sm">
																<a href="javascript:void(0)"><img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/phonepe-logo-icon.png" style="height: 70px" class="img-fluid"><br><span><input type="radio" name="phonepay" >&nbsp;PhonePay</span></a>
															</div>	
															<div class="col-sm-4 text-center inner shadow-sm">
																<a href="javascript:void(0)"><img src="https://cdn.icon-icons.com/icons2/730/PNG/512/paytm_icon-icons.com_62778.png" style="height: 70px" class="img-fluid"><br><span><input type="radio" name="paytm" >&nbsp;Paytm</span></a>
															</div>	
														</div>	
													</div>
													<div class="form-group">
														<input type="text" class="form-control form-control-lg" required placeholder="Enter Mobile Number/GooglePay UPI ID">	
													</div>	 
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">send payment request</button>
													</div>	
												</form>	
											</div>
										</div>	
									</div>
									<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">Net Banking</p>	
											</div> 
											<div class="card-body">
												<form>
													<div class="form-group">
														<div class="row">
															<div class="col-sm-4 text-center inner ">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/axis.png" class="img-fluid"><br><span>AXIS</span></a>
															</div>	
															<div class="col-sm-4 text-center inner">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/hdfc.png" class="img-fluid"><br><span>HDFC</span></a>
															</div>	
															<div class="col-sm-4 text-center inner">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/icici.png" class="img-fluid"><br><span>ICICI</span></a>
															</div>	
															<div class="col-sm-4 text-center inner">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/kotak.png" class="img-fluid"><br><span>KOTAK</span></a>
															</div>	
															<div class="col-sm-4 text-center inner">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/sbi.png" class="img-fluid"><br><span>SBI</span></a>
															</div>	
															<div class="col-sm-4 text-center inner">
																<a href="#"><img src="https://www.nykaa.com/assets/mobile/icons/checkout/yes.png" class="img-fluid"> <br><span>YES</span></a>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-10 mx-auto">
																<div class="form-group">
																	<select class="form-control form-control-lg">
																		<option>Other Banks</option> 
																		<option> <span><i class="bi bi-bank2 text-danger"></i></span>  SBI</option>
																		<option><span><i class="bi bi-bank2"></i></span>  UBI</option>
																		<option><span><i class="bi bi-bank2"></i></span>  AXIS</option>
																		<option><span><i class="bi bi-bank2"></i></span>  YES</option>
																		<option><span><i class="bi bi-bank2"></i></span>  ICICI</option>
																	</select>  
																</div>  
															</div>	
														</div>
													</div>	 
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">pay ₹600 Now</button>
													</div>	
												</form>	
											</div>
										</div>		
									</div>
									<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">Mobile Wallets</p>	
											</div> 
											<div class="card-body">
												<form>
													<div class="form-group">
														<img src="https://www.nykaa.com/assets/desktop/images/checkout/pay-tm-payment.png" class=""> &ensp;&ensp;&ensp;<span>Paytm</span>
													</div>	 
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">Connect Paytm Wallet</button>
													</div>	
												</form>	
											</div>
										</div>	
									</div>
									<div class="tab-pane fade" id="list-cod" role="tabpanel" aria-labelledby="list-settings-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">Pay on delivery (Cash/Card/UPI)</p>	
											</div>
											<div class="card-body">
												<?php
													foreach($cartlist as $each)
													{
														$product = $this->db->get_where('products',array('id'=>$each->product_id));
														if($product->num_rows()>0)
														{
															$product = $product->row();
															$icons = explode(',',$product->image1);
															
															$variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
															if($variant->num_rows()>0)
															{
																$variant = $variant->row();
																$totalmrp = 0;
																foreach($list as $var){
																	$variant = $this->db->get_where('product_variant',array('id'=>$var->variant_id))->row();
																	$mrp = $variant->offer_price*$var->qty;
																	$totalmrp += $mrp;	
																}
																
																$total = $variant->offer_price*$each->qty;
																// $totalmrp = $variant->mrp*$each->qty;
																$totaldiscount = $totalmrp - $total;
															}
														}
													}
													
												?>
												<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/CodOrder'); ?>" method="post">	 
													<div class="form-group">
													    <p>User ID</p>
														<input type="text" class="form-control form-control-lg" name="userid" placeholder="Enter User ID">
														<span class="mt-2">Kindly, pay the amount in cash at the time of delivery.</span> <br>
														<small class="my-2">You can pay via Cash/Card or UPI enabled app at the time of delivery. Ask your delivery executive for these options.</small>
														<br>
														<button class="btn btn-secondary btn-block ">pay <?=$total?> By Cash  </button>
													</div>	
													<?php 
														echo $this->uri->segment(3);
													?>
												</form>	
											</div>
										</div>	
									</div>
									<div class="tab-pane fade" id="list-giftcard" role="tabpanel" aria-labelledby="list-settings-list">
										<div class="card">
											<div class="card-header">
												<p class="font-weight-bold ">Redeem Gift Card</p>	
											</div>  
											<div class="card-body">
												<form>
													<div class="form-group">
														<input type="text" class="form-control form-control-lg" required placeholder="16 Digits Gift card number">	
													</div>	
													<div class="form-group">
														<input type="text" class="form-control form-control-lg" required placeholder="6 Digits Pin">	
													</div>
													<div class="form-group">
														<button class="btn btn-secondary btn-block ">submit</button>
													</div>	
												</form>	
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-4 ">
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<h6 class="text-uppercase">Price Summary</h6>
										<small>Prices are inclusive of all taxes</small>
										
										<table class="table table-striped  table-borderless">
											<tr>
												<th>Total MRP</th>	 
												<th>₹1,299</th>	
											</tr>
											<tr>
												<th>Discount on MRP</th>	 
												<th>₹1,299</th>	
											</tr>
											<tr>
												<th>Coupon Discount </th>	 
												<th><a href="javascript:void(0)" class="font-weight-bold itemtext" style="color: #FF1493;" onclick="OpneCouponModal()">Apply Coupon </a></th>	
											</tr>
											<tr>
												<th>Convenience Fee <a href="javascript:void(0)" class="font-weight-bold itemtext" style="color: #FF1493;" onclick="OpneConvModal()">Know More </a></th>	 
												<th>₹1,299</th>	
											</tr>
											<tr>
												<th>Sub Total</th>	 
												<th>₹1,299</th>	
											</tr>
											<tr>
												<th>Shipping Charges <i class="bi bi-info-circle text-danger"></i> </th>	 
												<th>₹1,299</th>	
												<hr>
											</tr>
											<tr style="border:1px dotted;">
											</tr>
											<tr>
												<th>You Pay</th>	 
												<th>₹658</th>	
											</tr>
											
										</table>
										<span>You saved ₹8,696 on this purchase</span>
										
									</div>	
								</div>
							</div>
							<div class="col-sm-12 mt-4">
								<div class="card">
									<div class="card-body">
										<span class="text-uppercase font-weight-bold">Shipping Details</span> <br>
										<span class="font-weight-bold" style="font-size:12px;">User name</span> <br> 
										<span class="mt-2">c-435 Gomatinagar Lucknow - 226020</span> <br>
										<a href="javascript:void(0)" class="text-uppercase float-right" style="color: #FF1493; font-size:12px;" >Change</a>
									</div>	
								</div>
								
							</div>	
							
						</div>
						
						
					</div>
					
				</div>
			</div>
		</section>
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
						<h5 class="modal-title" id="exampleModalLongTitle">APPLY COUPON </h5>
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
								<div class="p-3" style="border-bottom: 1px solid #ddd;">
									<input type="checkbox" id="huey" name="drone" id="it1" value="huey"
									checked>
									<label  class="font-weight-bold" for="it1">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3" style="border-bottom: 1px solid #ddd;" >
									<input type="checkbox" id="huey" name="drone" id="it2" value="huey"
									>
									<label  class="font-weight-bold" for="it2">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3" >
									<input type="checkbox" id="huey" id="it3" name="drone" value="huey"
									>
									<label  class="font-weight-bold" for="it3">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
							</div>	
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6 ">  <p class="font-weight-bold mt-2">Maximum Saving: ₹200</p>  </div>
						<div class="col-6 "><button type="button" class="btn btn-secondary btn-block">Apply</button>	</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!----footer Start---->
		<section class="pro-content testimonails-content animate__animated animate__backInUp" style="background-color:white; padding-top: 20px; padding-bottom: 10px">
			<div class="container">
				<div class="row p-1 ">
					<div class="col-sm-6">
						<i class="bi bi-shield-check text-success"></i> &nbsp; <span>Safe & Secure Payments | 100% Authentic Products</span>	
					</div>
					<div class="col-sm-6 text-right">
						<span class="font-weight-bold">Need Help?</span><a class="font-weight-bold" href="<?= base_url('Home/Contact') ?>">Contact US</a>	
					</div>
				</div>
			</div>
		</section>
		<!----footer Start End---->
		
		
		<?php include('include/jsLinks.php'); ?>
		
		<script>
			function ShowMore(){
				var text = jQuery('#ShowMore').html();
				jQuery(".slideup").toggle();
				var x = jQuery("#ShowMore").html();
			}	
			
			function OpneConvModal(){
				jQuery('#ConvenienceModal').modal('show')
			}	
			
			function OpneCouponModal(){
				jQuery('#CouponModal').modal('show')
			}	
			
			
			
			
			let ccNumberInput = document.querySelector('.cc-number-input'),
			ccNumberPattern = /^\d{0,16}$/g,
			ccNumberSeparator = " ",
			ccNumberInputOldValue,
			ccNumberInputOldCursor,
			
			ccExpiryInput = document.querySelector('.cc-expiry-input'),
			ccExpiryPattern = /^\d{0,4}$/g,
			ccExpirySeparator = "/",
			ccExpiryInputOldValue,
			ccExpiryInputOldCursor,
			
			ccCVCInput = document.querySelector('.cc-cvc-input'),
			ccCVCPattern = /^\d{0,3}$/g,
			
			mask = (value, limit, separator) => {
				var output = [];
				for (let i = 0; i < value.length; i++) {
					if ( i !== 0 && i % limit === 0) {
						output.push(separator);
					}
					
					output.push(value[i]);
				}
				
				return output.join("");
			},
			unmask = (value) => value.replace(/[^\d]/g, ''),
			checkSeparator = (position, interval) => Math.floor(position / (interval + 1)),
			ccNumberInputKeyDownHandler = (e) => {
				let el = e.target;
				ccNumberInputOldValue = el.value;
				ccNumberInputOldCursor = el.selectionEnd;
			},
			ccNumberInputInputHandler = (e) => {
				let el = e.target,
				newValue = unmask(el.value),
				newCursorPosition;
				
				if ( newValue.match(ccNumberPattern) ) {
				newValue = mask(newValue, 4, ccNumberSeparator);
				
				newCursorPosition = 
				ccNumberInputOldCursor - checkSeparator(ccNumberInputOldCursor, 4) + 
				checkSeparator(ccNumberInputOldCursor + (newValue.length - ccNumberInputOldValue.length), 4) + 
				(unmask(newValue).length - unmask(ccNumberInputOldValue).length);
				
				el.value = (newValue !== "") ? newValue : "";
				} else {
				el.value = ccNumberInputOldValue;
				newCursorPosition = ccNumberInputOldCursor;
				}
				
				el.setSelectionRange(newCursorPosition, newCursorPosition);
				
				highlightCC(el.value);
				},
				highlightCC = (ccValue) => {
				let ccCardType = '',
				ccCardTypePatterns = {
				amex: /^3/,
				visa: /^4/,
				mastercard: /^5/,
				disc: /^6/,
				
				genric: /(^1|^2|^7|^8|^9|^0)/,
				};
				
				for (const cardType in ccCardTypePatterns) {
				if ( ccCardTypePatterns[cardType].test(ccValue) ) {
				ccCardType = cardType;
				break;
				}
				}
				
				let activeCC = document.querySelector('.cc-types__img--active'),
				newActiveCC = document.querySelector(`.cc-types__img--${ccCardType}`);
				
				if (activeCC) activeCC.classList.remove('cc-types__img--active');
				if (newActiveCC) newActiveCC.classList.add('cc-types__img--active');
				},
				ccExpiryInputKeyDownHandler = (e) => {
				let el = e.target;
				ccExpiryInputOldValue = el.value;
				ccExpiryInputOldCursor = el.selectionEnd;
				},
				ccExpiryInputInputHandler = (e) => {
				let el = e.target,
				newValue = el.value;
				
				newValue = unmask(newValue);
				if ( newValue.match(ccExpiryPattern) ) {
				newValue = mask(newValue, 2, ccExpirySeparator);
				el.value = newValue;
				} else {
				el.value = ccExpiryInputOldValue;
				}
				};
				
				ccNumberInput.addEventListener('keydown', ccNumberInputKeyDownHandler);
				ccNumberInput.addEventListener('input', ccNumberInputInputHandler);
				
				ccExpiryInput.addEventListener('keydown', ccExpiryInputKeyDownHandler);
				ccExpiryInput.addEventListener('input', ccExpiryInputInputHandler);
				
				
				</script>
				
				</body>
				</html>																																																																																																																																																													