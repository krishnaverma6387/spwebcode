
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Order Details</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			*{
			letter-spacing:0;
			}
			
			.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
			color: #8834AD !important;
			font-weight: 800;
			background-color: #fff;
			border-color:white!important;
			border-bottom: 1px solid #8834AD !important;
			}
			.nav-tabs {
			border-bottom: 2px solid #dee2e6 !important;
			}
			.buyItBnt{
			padding-top: 6px !important;
			padding-left: 12px!important;
			padding-right: 12px!important;
			padding-bottom: 6px!important;
			font-size: 12px!important;
			border-radius: 5px;
			}
			.similar-btn{
			
			padding-top: 8px!important;
			padding-left: 5px!important;
			padding-right: 5px!important;
			padding-bottom: 8px!important;
			
			background: white!important;
			border: 1px solid #eddddd !important;
			font-weight: normal !important;
			border-radius: 10px;
			color: #0009!important;
			}
			.similar-btn:hover{
			background: #F7FAFA!important;
			}
			.modal-open .show {
			background-color: rgba(0, 0, 0, 0.3);
			}
			label {
			color: black;
			font-size: 14px;
			font-weight: 600;
			}
			#borderd-card {
			border-radius: 7px;
			border-top: 1px solid #8340A1;
			border-bottom: 1px solid #8340A1;
			border-right: 1px solid #8340A1;
			border-left: 6px solid #8340A1;
			}
			.btn-contact {
			background: white;
			padding:5px;
			border: 1px solid #D5D9D9 !important;
			border-radius: 10px;
			font-weight: normal !important;
			font-size: 10px!important;
			}
			.card{
			box-shadow: 0px 1px 6px lavender;
			border: 1px solid grey !important;
			}
			.parsley-errors-list{
			padding-left:0;
			}
		</style>
		
	</head>
    
    <body>  
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Order Details </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content pt-2">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6">
						<h1 style="font-size : 22px;" class="mb-0">Order Details</h1>  
					</div>
				</div>
				<?php 
					$sr = 1;
					$id = $this->userData->id;
					
					if(!empty($order)){ 
						$totalPrice=0;
						$giftWrapCharge=0;
						$shipping_charge=$order['shipping_charge'];
						$coupon_discount=0;
						
						$userid=$order['userid'];
						$uDetails = $this->db->get_where('tbl_user', array('id' => $userid))->row();
						
						#Check User Type- Royal/Normal
						$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
						$subscription='false';
						if($subscriber->num_rows()>0){
							$subscriber=$subscriber->row();
							$plan_start_date=date('Y-m-d',strtotime($subscriber->created_at)); 
							$plan_expire_date=date('Y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
							$order_date=date('Y-m-d',strtotime($order['created_at'])); 
							if(($order_date>=$plan_start_date) AND ($order_date<=$plan_expire_date)){
								$subscription='true';
							}
							else{
								$subscription='false';
							}
						}
						
						$address = json_decode($order['address']);
						if(!empty($cartOrder)){	
						?>
						<div class="row">
							<div class="col-sm-6 col-12">
								<span>Ordered on <?=date('jS M Y',strtotime($order['created_at']))?></span> &nbsp; <span>|</span>  &nbsp; <span> Order# <?= $order['orderid']?></span>  
							</div>	
							<div class="col-sm-12 mt-2">
								<div class="card mb-3" style="border-radius:8px; border:none !important;">
									<div class="card-body p-0">
										<div class="row m-0 p-2" id="borderd-card">
											<div class="col-sm-12">
												<i class="bi bi-check-circle-fill fa-2x" style="color: #8340A1"></i>&nbsp; <span style="font-size: 18px;color: #403e3e;  letter-spacing: 0; font-family: 'Montserrat-Bold';" class="font-weight-bold">Fulfilled by Slickpattern</span>
											</div>  
											<div class="col-sm-12">
												<span>Got a problem with your delivery?&nbsp;</span><button class="btn btn-contact" data-toggle="modal" data-target="#NeedHelpModal">Raise Your Complaints</button>	
											</div>
										</div>  
									</div>	
								</div>
								<div class="card" style="border-radius: 7px;">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-4 mb-3">
												<p class="font-weight-bold mb-1">Shipping Address</p>
												<?php $address = json_decode($order['address']); ?>
												<span><?= $address->name?></span> <br>
												<span><?= $address->line1?></span> <br>
												<span><?= $address->line2?></span> <br>
												<span><?php echo $address->state.' '.$address->city.' , '.$address->pincode?></span> <br>
												<span>India</span> <br>
												<span>Phone: <?= $address->mobile?></span> <br>
												<?php 
													$orderid=$order['orderid'];
													$total_not_shipping_product=$this->db->where("(order_status='pending' OR order_status='processing') AND orderid='$orderid'")->get('tbl_cart')->num_rows();	
													if($total_not_shipping_product==count($cartOrder)){
													?>
													<button class="btn btn-secondary buyItBnt" onclick="EditAddress('<?= $address->id; ?>','<?= $order['orderid']?>')">Edit Information</button>
												<?php } ?>
											</div>	 
											<div class="col-sm-4 mb-3">
												<p class="font-weight-bold mb-1">Payment Method</p>	
												<span>Pay on Delivery (Cash/Online)<br><?php if($order['pay_mode']=='cod'){?>Cash on delivery (COD)<?php }else{ echo 'Online';}?></span> <br>
											</div>	 
											<div class="col-sm-4">
												<p class="font-weight-bold mb-1">Order Summary</p>
												<div id="order_summery"></div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>
						<!--content section start-->
						<div class="row mt-3">
							<div class="col-sm-12">
								<div class="card" style="border-radius: 7px;">
									<div class="card-body py-1" >
										<?php 
											$cancel_count=0;
											$ret_ref_expire_count=0;
											$cart_count=1;
											$chat_consult='false';
											foreach($cartOrder as $cart){
												if($cart->is_combo=='')
												{
													$product = $this->db->get_where('products',array('id'=>$cart->product_id))->row();
													$variant = $this->db->get_where('product_variant',array('id'=>$cart->variant_id))->row();
													$icons = explode(',',$variant->variant_img);
													$product_name=$product->title;
													$ret_ref_status=$product->refund_status;
													$cancel_status=$product->cancel_status;
													$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->refund_limit." days",strtotime($order['created_at'])));
													$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($order['created_at'])));
													$current_date=date('Y-m-d');
													if($product->chat_consult=='true'){
														$chat_consult='true';
													}
													
													$total = $cart->price;
												}
												else if($cart->is_combo=='true')
												{
													$product = $this->db->get_where('tbl_combo',array('id'=>$cart->combo_id))->row();
													$icons = explode(',',$product->image);
													$product_name=$product->name;
													$ret_ref_status=$product->ret_refund_status;
													$cancel_status=$product->cancel_status;
													$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->ret_ref_limit." days",strtotime($order['created_at'])));
													$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($order['created_at'])));
													$current_date=date('Y-m-d');
													
													$total = $cart->price; 
												}	
												$totalPrice+=(int)$total;
											?>
											<div class="row <?php if($cart_count<count($cartOrder)){echo 'border-bottom';}?> py-2" >
												<?php if($cart->order_status=='delivered'){?>
													<div class="col-sm-12 mb-3">
														<?php 
															if(!empty($cart->return_status)){
																$return_details=json_decode($cart->return_details);
																$status='';
																$status_details='';
																if($return_details->return_type=='refund'){
																	if($cart->return_status=='requested'){
																		$status="Requested For Refund";
																		$status_details='Refund cycle will be start after your refund request approved';
																	}
																	elseif($cart->return_status=='approved'){
																		$status="Requeste Approved For Refund";
																		if($order['pay_mode']=='online'){
																			$status_details='Refund will be transferred in your original payment method within 5-7 days after product pick up is completed';
																		}
																		else{
																			$status_details='Refund will be transferred in your bank account within 5-7 days after product pick up is completed';
																		}
																	}
																	elseif($cart->return_status=='denied'){
																		$status="Requeste Rejected For Refund";
																		$status_details='Your refund request has been rejected ,for more information call to the supported team';
																		
																	}
																}
																elseif($return_details->return_type=='exchange'){
																	if($cart->return_status=='requested'){
																		$status="Requested For Exchange";
																		$status_details='Exchange cycle will be start after your refund request approved';
																	}
																	elseif($cart->return_status=='approved'){
																		$status="Requeste Approved For Exchange";
																		$status_details='You will get new product after product pick up is completed';
																	}
																	elseif($cart->return_status=='denied'){
																		$status="Requeste Rejected For Exchange";
																		$status_details='Your exchange request has been rejected ,for more information call to the supported team';
																	}
																}
																
															?>
															<h5 class="font-weight-bold text-uppercase searchable mb-0" style="font-size:14px; line-height: 0.75;"><?= $status; ?></h5>  
															<span class="status_details"><?=$status_details;?></span>
															<?php }else{?>
															<h5 class="font-weight-bold text-uppercase searchable mb-0" style="font-size:14px; line-height: 0.75;"><?=$cart->order_status?><?php if(!empty($track_details->delivered_datetime)){?><span>On <?=$track_details->delivered_datetime;?></span><?php } ?></h5>  
															<?php if(!empty($track_details->delivered_datetime)){?><span class="status_details">Delivered On <?=$track_details->delivered_datetime;?></span><?php } ?>
														<?php } ?>
													</div>  
													<?php }elseif($cart->order_status=='cancelled'){	
													?>
													<div class="col-sm-12 mb-3">
														<?php if($order['pay_mode']=='online'){?>
															<h5 class="font-weight-bold text-uppercase searchable mb-0" style="font-size:14px; line-height: 0.75;">Cancelled<?php if(!empty($track_details->delivered_datetime)){?><span class=""> On <?=$track_details->cancelled_datetime;?></span><?php } ?></h5>  
															<span class="status_details">Refund will be transferred in your original payment method within 5-7 days after product pick up is completed</span>
															<?php 
															}
															else{?>
															<h5 class="font-weight-bold text-uppercase searchable " style="font-size:14px; line-height: 0.75;">Cancelled<?php if(!empty($track_details->delivered_datetime)){?><span class="status_details"> On <?=$track_details->cancelled_datetime;?></span><?php } ?></h5>  
														<?php } ?>
													</div>
													<?php }elseif($cart->order_status=='refunded'){ 
													?>
													<div class="col-sm-12 mb-3">
														
														<h5 class="font-weight-bold text-uppercase searchable mb-0" style="font-size:14px; line-height: 0.75;">Refunded<?php if(!empty($track_details->refunded_detetime)){?><span class="status_details"> On <?=$track_details->refunded_detetime;?></span><?php } ?> </h5>
													</div>
													<?php }elseif($cart->order_status=='returned'){ 
													?>
													<div class="col-sm-12 mb-3">
														<h5 class="font-weight-bold text-uppercase searchable mb-0" style="font-size:14px; line-height: 0.75;">Exchanged<?php if(!empty($track_details->replaced_datetime)){?><span class="status_details"> On <?=$track_details->replaced_datetime;?></span><?php } ?> </h5>
													</div>
												<?php } ?>
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-9">
															<div class="row">
																<div class="col-sm-2">
																	<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:100px;"><br>
																</div>	
																<div class="col-sm-10">
																	<a href="#" class="searchable"><?= $product_name ?></a> <br>
																	<p class="mb-1">
																		<?php if($cart->is_combo==''){?>
																			<?php 
																				$color_details=$this->db->get_where('tbl_color',['code'=>$cart->color])->row();
																			?>
																			<small style="font-size: 14px; font-weight:500;" ><?=ucfirst($color_details->name)?></small>
																			<?php if($cart->size!='NA'){?>
																				/<small style="font-size: 14px;"><?=$cart->size?></small>
																			<?php } ?>
																			<?php }else{ 
																				$pid=explode(",",$cart->product_id);
																				$psize=explode(",",$cart->size);
																				$colors=explode(",",$cart->color);
																				for($i=0;$i<count($pid);$i++){  
																					$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
																					$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
																					$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
																					echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;' class='searchable'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
																				}
																			}
																		?>  
																	</p>
																	<p class="mb-1">
																		<span class="badge p-1" style="background:lavender;">Qty:<?=$cart->qty?></span>
																		<span class="badge p-1" style="background:lavender;">Price:₹<?=$total?></span>
																	</p>
																	<small style="font-size:12px;">
																		<i class="bi bi-arrow-clockwise"></i>
																		<?php if($ret_ref_status=='true'){
																			if(($current_date>$ret_ref_expire_date)){
																				echo 'The return window has been closed  '.date('jS M Y',strtotime($ret_ref_expire_date));
																			}
																			else{
																				echo 'The return window will close on '.date('jS M Y',strtotime($ret_ref_expire_date));
																			}
																		?>
																		<?php } ?>
																	</small><br>
																	<span class="mb-0 mb-2 d-flex"> 
																		<form method="post" action="<?=base_url($this->data->method.'/BuyAgain/'.$cart->id)?>" class="addForm">
																			<button type="submit" class="btn btn-secondary buyItBnt" ><i class="bi bi-arrow-clockwise"></i> Buy It Again</button>
																		</form>
																	</span>
																</div>	
															</div>
														</div>	 
														<div class="col-sm-3">
															<?php if($this->sitepermission->order_tracking){ ?>
															<a href="<?= base_url('Home/TrackPackage/'.$cart->id) ?>" class="btn btn-block similar-btn">Track Packege</a>	
															<?php } ?>
															<?php if($ret_ref_status=='true'){
																if($current_date>$ret_ref_expire_date || $cart->order_status=='delivered' || $cart->order_status=='returned' || $cart->order_status=='refunded' || $cart->order_status=='cancelled'){
																	$ret_ref_expire_count++;
																}
																if(($current_date<=$ret_ref_expire_date) AND ($cart->order_status=='delivered') AND empty($cart->return_status)){ ?>
																<button class="btn btn-block similar-btn" onclick="returnSingleItem('<?=$order['orderid']?>','<?=$cart->id?>')">Return</button>	
															<?php } } ?>
															<?php if($cancel_status=='true' AND $cart->order_status){
																if(($current_date>$cancel_expire_date) || ($cart->order_status=='cancelled') || ($cart->order_status=='delivered') || ($cart->order_status=='returned') || ($cart->order_status=='refunded')){
																	$cancel_count++;
																}
																if($cart->order_status!='delivered' AND $cart->order_status!='dispatched' AND $cart->order_status!='transit'){
																	if(($current_date<=$cancel_expire_date) AND ($cart->order_status!='cancelled') AND ($cart->order_status!='returned') AND ($cart->order_status!='refunded')){ 
																	?>
																	<button class="btn btn-block similar-btn" onclick="cancelSingleItem('<?=$order['orderid']?>','<?= $cart->id?>')">Cancel</button>	
																	<?php 
																	} 
																} 
															} ?> 
															<?php if($cart->order_status=='delivered' || $cart->order_status=='returned'){?>
																<?php if($this->sitepermission->product_rating_review){ ?>
																<a href="<?= base_url('Review/Product'.$cart->id)?>" class="btn btn-block similar-btn">Write a product review</a>	
																<?php } ?>
																<?php if($this->sitepermission->seller_rating_review){ ?>
																<a href="<?= base_url('Review/Seller'.$cart->id)?>" class="btn btn-block similar-btn">Leave seller feedback</a>
																<?php } ?>
																<?php 
																if($this->sitepermission->expert_talk){
																	if($this->permission == 'true'){
																		if($subscription=='true' AND empty($cart->return_status) AND $chat_consult=='true'){
																		?>
																		<a target="_blank" class="mt-2 px-1 py-2 btn btn-success text-white w-100" style="border-radius: 8px;" <?php if($this->permission == 'true'){ ?>href="<?= base_url('BeauticianConsultation/'.$cart->id)?>" <?php }else{ ?>onclick="$('.notifyjs-wrapper').remove(); $.notify('Please login to consult with beautician', 'error');"<?php } ?>  class="text-white"><i class="bi bi-whatsapp"></i>&nbsp;beauty consultant</a>
																		<?php } 
																} } ?>
															<?php } ?>	
														</div>	 
													</div>  
												</div>
											</div>
											<div id="order_details" class="sr-only">
												<ul class="pl-0" style="list-style:none;">
													<li><span>Item(s) Subtotal:</span><span id="item_price"> ₹<?= $totalPrice?></span></li>
													<li><span>Shipping:</span><span> ₹<?= $shipping_charge?></span></li>
													<?php 
														$orderid=$order['orderid'];
														$giftData=$this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='';")->row();
														if($giftData->is_giftwrap=='true'){
															$cartGiftWrap=json_decode($giftData->giftwrap_details);
															if(!empty($cartGiftWrap)){
																$giftwrapid=$cartGiftWrap->giftwrapid;
																$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row();  
																$giftWrapCharge=$giftWrapDetails->price;
															?>
															<li><span class="font-weight-bold">Giftwrap Charge:</span><span class="font-weight-bold"> ₹<?= $giftWrapCharge?></span></li>
															<?php 
															}
														}
													?>
													<li><span>Total:</span><span> ₹<?=$totalPrice+$giftWrapCharge+$shipping_charge?></span></li>
													<li><span>Coupon Applied:
														<?php 
															if(!empty($order['giveway_type']) AND ($order['giveway_type']!='cashback' || $order['giveway_type']!='reward')){ 
																$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$order['couponid']])->row();
																if(!empty($couponDetails)){
																	if($couponDetails->coupon_type=='Discount on minimum purchase' || $couponDetails->coupon_type=='New Customer Coupons' || $couponDetails->coupon_type=='Loyalty coupons'  || $couponDetails->coupon_type=='Get X% or XX rs on prebook order'){
																		if($couponDetails->type=='flat'){
																			$coupon_discount=$couponDetails->discount;
																		}
																		elseif($couponDetails->type=='percent'){
																			$coupon_discount=($totalPrice*$couponDetails->discount)/100;
																			if($coupon_discount>$couponDetails->max_discount){
																				$coupon_discount=$couponDetails->max_discount;
																			}
																		}
																		$auto_apply='true';
																		echo '-₹'.$coupon_discount;
																	}
																	elseif($couponDetails->coupon_type=='Free shipping coupon'){
																		$coupon_discount=$shipping_charge;
																		$shipping_charge=0;
																		$auto_apply='free shipping'; 
																		echo '<span style="font-size: 12px; font-weight: 600;color:#109935;">You Saved Your Shipping Charges</span>';
																	}
																	elseif($couponDetails->coupon_type=='Complementary discount coupons')
																	{
																		echo '<span style="font-size: 12px; font-weight: 600;color:#109935;">You will get complementry gift</span>';
																	}
																	elseif($couponDetails->coupon_type=='Buy-one-get-one coupons'){
																		echo '<span style="font-size: 12px; font-weight: 600;color:#109935;">Get 1 extra product with purchase</span>';
																	}
																	elseif($couponDetails->coupon_type=='Free gift with purchase'){
																		echo '<span style="font-size: 12px; font-weight: 600;color:#109935;">Free gift with purchase</span>';
																	} 
																}
															}
															else{
																echo '-₹0';
															}
														?>
													</span></li>
													<li><span>Wallet Used:</span><span> -₹<?= $order['wallet_discount']?></span></li>
													<li><span class="font-weight-bold">Grand Total:</span><span class="font-weight-bold"> ₹<?= ($totalPrice+$giftWrapCharge+$shipping_charge)-($coupon_discount+(int)$order['wallet_discount'])?></span></li>
												</ul>
											</div>
											<?php 
											$cart_count++; }
										?>
									</div>
									
								</div>	
							</div>	 
						</div>
					<?php } } ?>
					<!--content section end-->
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
					<!-- NeedHelp Modal -->
					<div class="modal fade" id="NeedHelpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
						<form method="POST" action="<?=base_url($this->data->method.'/NeedHelp')?>" class="addForm">
							<div class="modal-dialog modal-dialog-scrollable" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalToggleLabel"><i class="bi bi-info-circle"></i>&nbsp;Need Help</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<select class="form-control" required name="id" data-parsley-required-message="Please select product for which you need help" style="appearance: auto;">
												<option selected disabled>select</option>
												<?php 
													if(!empty($cartOrder)){
														foreach($cartOrder as $cart){
															if($cart->is_combo=='')
															{ 
																$product = $this->db->get_where('products',array('id'=>$cart->product_id))->row();
																$product_name=$product->title;
															}
															elseif($cart->is_combo=='true'){
																$product = $this->db->get_where('tbl_combo',array('id'=>$cart->combo_id))->row();
																$product_name=$product->name;
															} ?>
															<option value="<?=$cart->id?>"><?=$product_name?></option>
															<?php
															}
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<textarea class="form-control" required name="order_query" data-parsley-required-message="Please describe your problem" placeholder="Describe your problem,our support team assist you as soon as possible"></textarea>
										</div>
									</div>
									<div class="modal-footer">
										<div class="row">
											<div class="col-sm-12 p-0">
												<div class="form-group mb-0">
													<button class="btn btn-secondary btn-block addBtn" type="submit">Submit&nbsp;<i class="fa fa-spin fa-spinner addSpin"  style="display:none;"></i></button>	
												</div> 
											</div>	
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!--NeedHelp Modal-->
			</section>
			<?php include('include/footer.php'); ?>
			<?php include('include/jsLinks.php'); ?>
			
			<script>
				
				function EditAddress(id,orderid) {
					jQuery("#EditModal").modal("show");
					jQuery("#EditModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
					jQuery("#EditModal .modal-body").load("<?php echo base_url($this->data->method . '/EditAddress/') ?>" + id+'/'+orderid);
				}
				
				function GiftReceipt()
				{
					jQuery("#gidtReceipt").modal('show');
				}
				jQuery('[data-toggle="popover"]').popover({
					html: true,
				content: function() {
				var id = jQuery(this).attr('id');
				return jQuery('#po' + id).html();
				}
				});
				var OrderSummery=jQuery('#order_details').html();
				jQuery('#order_summery').html(OrderSummery);
				</script>
				
				</body>
				</html>																								
								