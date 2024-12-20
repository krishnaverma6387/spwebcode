
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Orders</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			/*swithc css*/
			body{
			font-family: sans-serif;
			}
			button.btn, a.btn {
			font-family: "Inter", sans-serif;
			font-size: 12px;
			line-height: 1;
			text-transform: uppercase;
			}
			.switch {
			position: relative;
			display: inline-block;
			width: 46px;
			height: 19px;
			}			
			.switch input {
			display: none;
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
			.popover-content {
			display: none;
			z-index:1!important;
			}
			
			/* optional shadow */
			.popover {
			-moz-box-shadow: 0 0 8px #5b7d83;
			-webkit-box-shadow: 0 0 8px #5b7d83;
			box-shadow: 0 0 8px #5b7d83;
			z-index: 1!important;
			}
			
			.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: #dedede;
			border-radius: 40px;
			-webkit-transition: 0.4s;
			transition: 0.4s;
			}		
			.slider:before {
			position: absolute;
			content: "";
			height: 14px;
			width: 14px;
			background: #fff;
			border-radius: 50%;
			left: 2px;
			bottom: 3px;
			-webkit-transition: 0.4s;
			transition: 0.4s;
			}		
			input:checked + .slider {
			background: #FF1493;
			}	
			input:checked + .slider:before {
			-webkit-transform: translateX(30px);
			-moz-transform: translateX(30px);
			transform: translateX(30px);
			}			
			input:focus + .slider {
			}
			.nav-tabs .nav-item .nav-link{
			font-weight:600;
			font-size:0.8rem;
			}
			/*swithc css*/
			
			.icon {
			font-size: 2rem;
			}
			.slide-toggle{
			display:none!important;
			}
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: #FF1493 !important;
			}
			@media only screen and (max-width: 360px)
			{
			/*button.btn, a.btn{
			font-size: 7px;
			}*/
		    }
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			.btn_align{
			text-align: left !important;
			}
			.whats_switch{
			float: left !important;
			}
			}
			
			.btn_align{
			text-align: right;
			}
			.whats_switch{
			float: right !important;
			}
			@media only screen and (max-width:768px){
			.order-deatils-box{
			flex-direction:column;
			}
			}
			.modal.show {
			background-color: rgba(0, 0, 0, 0.3); 
			}
			.divider-border{
			border-bottom: 4px solid #ebebf3;
			}
			label{
			letter-spacing: initial;
			}
			.status_details{
			color: grey;
			font-weight: 500;
			}
			.nav.nav-tabs .nav-link{
			border-radius:unset;
			}
		</style>
	</head>
	<body>  
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">My Orders</li>
					</ol>
				</div>
			</nav>
		</div>
		<section class="pro-content order-content pt-2">
			<div class="container-fluid">
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							My Order 
						</h1>
					</div>
				</div>	
				<div class="row">
					<div class="col-12 col-lg-3 mb-3  d-block d-xl-block"> 
						<ul class="list-group">
							<li class="list-group-item active">
								<a class="nav-link " href="<?= base_url("Home/Profile") ?>">
									<i class="bi bi-person"></i>
									Profile          
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Wishlist") ?>">
									<i class="bi bi-heart"></i>
									Wishlist                   
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Order") ?>">
									<i class="bi bi-cart3"></i>
									Orders                   
								</a>
							</li>
							<!--li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/ShippingAddress") ?>">
								<i class="bi bi-geo-alt"></i>
								Shipping Address                           
								</a>
							</li-->
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Logout") ?>">
									<i class="bi bi-power"></i>
									Logout                               
								</a>
							</li>
							<!--<li class="list-group-item">
								<a class="nav-link" href="change-password.html">
									<i class="bi bi-unlock"></i>
									Change Password                            
								</a>
							</li>-->
						</ul>
					</div>
					<div class="col-12 col-lg-9"> 
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-12 col-sm-8">
										<h1 style="font-size : 22px;">Your Orders</h1>  
									</div>
									<div class="col-12 col-sm-4">
										<div class="input-group">
											<input type="text" class="form-control search" id="filterCards"   style="border-radius: 3px 0 0 3px;" placeholder="Search Order">
										</div>
									</div>
								</div>	
							</div>
							<div class="card-body py-0">
								<section class="pro-content pt-1">
									<div class="container p-0">
										<div class="row">
											<div class="col-sm-12 p-0">
												<ul class="nav nav-tabs" id="myTab" role="tablist">
													<li class="nav-item" role="presentation">
														<button class="nav-link active button-block px-2 py-1" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Orders</button>
													</li>
													<li class="nav-item items" role="presentation">
														<button class="nav-link button-block px-2 py-1" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Delivered Orders</button>
													</li>
													<li class="nav-item items" role="presentation">
														<button class="nav-link button-block px-2 py-1" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Return & Refund Orders</button>
													</li>
													<li class="nav-item items" role="presentation">
														<button class="nav-link button-block px-2 py-1" id="contact-tab" data-toggle="tab" data-target="#concelledorder" type="button" role="tab" aria-controls="concelle-dorder" aria-selected="false">Cancelled Orders</button>
													</li>
												</ul>
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade p-0 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
														<!--content section start-->
														<?php 
															$sr = 1;
															$id = $this->userData->id;
															if(!empty($all_orders)){
																foreach($all_orders as $order){
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
																	$cartOrder=$this->db->get_where('tbl_cart',array('orderid'=>$order['orderid'],'is_status'=>'true'))->result();
																	if(!empty($cartOrder)){	
																	?>
																	<div class="row mt-3 search_container">
																		<div class="col-sm-12">
																			<div class="card">
																				<div class="card-header">
																					<div class="row">
																						<div class="col-12 col-sm-9 pr-3">
																							<div class="row">
																								<div class="col-sm-3 col-12 my-1 px-1" style="font-size:12px;">
																									<span>ORDER PLACED</span> <br>
																									<span class="font-weight-bold"><?= date('jS M Y',strtotime($order['created_at']))?></span>
																								</div>	
																								<div class="col-sm-2 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="text-uppercase">Total</span> <br>
																									<a href="javascript:void(0);" id="pover-order<?= $sr?>" class="text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus" > ₹<?= $order['amount']?><i class="fas fa-angle-down"></i></a>
																								</div>	 
																								<div class="col-sm-3 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="">SHIP TO</span> <br>
																									<a href="javascript:void(0);" id="pover-card<?= $sr?>" class="font-weight-bold text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus"  ><?=$address->name?><i class="fas fa-angle-down"></i></a> 
																								</div>	 
																							</div>
																						</div>	
																						<div class="col-12 col-sm-3 orderid-sec  py-1 px-1 " style="font-size:12px;">
																							<span class="searchable">ORDER <?= $order['orderid']?></span><br>
																							<a href="<?= base_url('OrdersDetails/'.$order['orderid'])?>" class="text-info">Order Summary</a>
																							<!--<a href="javascript:void(0);" id="cancelAll<?= $sr?>" onclick="cancelAll('<?=$order['orderid']?>')" class="text-info mt-2"><span style="color:black;">&nbsp;|&nbsp;</span>Cancel All<span style="color:black;">&nbsp;|&nbsp;</span></a>
																							<a href="javascript:void(0);" onclick="returndAll('<?=$order['orderid']?>')" class="text-info" id="returnAll<?= $sr?>">Return & Refund All</a>-->
																						</div>	
																					</div>
																				</div>  
																				<div class="card-body">
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
																								
																								$total =$cart->price;
																							}	
																							$totalPrice+=(int)$total;
																							$track_details=$this->db->get_where('tbl_track_product',['cartid'=>$cart->id])->row();
																						?>
																						<div class="row <?php if($cart_count<count($cartOrder)){echo 'border-bottom';}?> py-2">
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
																												<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:100px;">
																											</div>
																											<div class="col-sm-10">
																												<a href="#" class="searchable"><?= $product_name ?></a> <br>
																												<?php if($cart->order_type=='prebooking'){ ?><small style="font-size:12px;font-weight: 500;" class="badge bg-success text-white">Prebooking Order</small>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="popover-hover" data-content="<?php if($order['paid_amount']==$order['amount']){ echo "🎉Congratulations! You paid total amount."; }else{?>You can purchase this product at ₹<?=(int)$product->prebook_amt;?> , rest amount ₹<?php echo ((int)$product->reg_sell_price-(int)$product->prebook_amt);?> you have to pay via given payment links before the delivery date otherwise your order will be cancelled<?php } ?>" data-placement="top" style="cursor:pointer; font-size: 14px; color: grey;"></i><br style="margin-bottom:16px;"><?php } ?>
																												<?php 
																													if(!empty($cart->order_type)){
																														if($order['paid_amount']==$order['amount']){?> 
																														<small style="font-size:12px;">
																															🎉Congratulations! You paid total amount.
																														</small><br><br>
																														<?php }else{ ?>
																														<small style="font-size:12px;">
																															Payment Links:<a href="<?=$order['payment_links'];?>" target="_blank" style="color:#254def;"><?=$order['payment_links'];?></a>
																														</small><br>
																													<?php } } ?>
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
																										<?php if($cancel_status=='true'){
																											if(($current_date>$cancel_expire_date) || ($cart->order_status=='cancel') || ($cart->order_status=='delivered') || ($cart->order_status=='returned') || ($cart->order_status=='refunded')){
																												$cancel_count++;
																											}
																											if($cart->order_status!='delivered'){
																												if(($current_date<=$cancel_expire_date) AND ($cart->order_status!='cancelled') AND ($cart->order_status!='returned') AND ($cart->order_status!='refunded')){ 
																												?>
																												<button class="btn btn-block similar-btn" onclick="cancelSingleItem('<?=$order['orderid']?>','<?= $cart->id?>')">Cancel</button>	
																											<?php } } } ?>
																											
																											<?php if($cart->order_status=='delivered' || $cart->order_status=='returned'){?>
																												<?php if($this->sitepermission->product_rating_review){?>
																													<a href="<?= base_url('Review/Product/'.$cart->id)?>" class="btn btn-block similar-btn">Write a product review</a>	
																												<?php } ?>
																												<?php 
																													if($this->sitepermission->seller_rating_review){ 
																														if(!empty($product->vendor_id)){ ?>
																														<a href="<?= base_url('Review/Seller'.$cart->id)?>" class="btn btn-block similar-btn">Leave seller feedback</a>
																													<?php } } ?>
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
																						<script>
																							var cancel_count='<?=$cancel_count?>';
																							var ret_ref_expire_count='<?=$ret_ref_expire_count?>';
																							var total='<?=count($cartOrder)?>';
																							var count='<?=$sr?>';
																							if(cancel_count==total){
																								document.getElementById("<?= 'cancelAll'.$sr?>").style.display='none';
																							}
																							if(ret_ref_expire_count==total){
																								document.getElementById("<?= 'returnAll'.$sr?>").style.display='none';
																							}
																							
																						</script>
																						<?php 
																						$cart_count++; }
																					?>
																				</div>
																			</div>	
																		</div>	 
																	</div>
																<?php } ?>
																<!------------popover body ---------->
																<div  class="popover-content" > 
																	<div id="popover-card<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span class="font-weight-bold"><?= $address->name?></span> <br>
																				<span><?= $address->line1?></span> <br>
																				<span><?= $address->line2?></span> <br>
																				<span><?php echo $address->state.' '.$address->city.' , '.$address->pincode?></span> <br>
																				<span>India</span> <br>
																				<span>Phone: <?= $address->mobile?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<div  class="popover-content" > 
																	<div id="popover-order<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span><b>Subtotal:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Coupon Applied:</b>
																					<?php 
																						if($order['giveway_type']!='cashback' || $order['giveway_type']!='reward'){ 
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
																									echo '₹'.$coupon_discount;
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
																							echo 0;
																						}
																					?>
																				</span> <br>
																				<span><b>Shipping:</b>₹<?= $shipping_charge?></span><br>
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
																						<span><b>Giftwrap Charge:</b>₹<?= $giftWrapCharge?></span><br>
																						<?php 
																						}
																					}
																				?>
																				<span><b>Total:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Total:</b>₹<?= $order['wallet_discount']?></span> <br>
																				<span><b>Grand Total:</b><span id="totalPrice">₹<?=$totalPrice+$shipping_charge+$giftWrapCharge-($coupon_discount+(int)$order['wallet_discount'])?></span></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<!------------popover body ---------->
																<?php 
																	$sr++;
																}
															}
															else
															{
															?>
															<center class="mt-5"><span>There are no any items order till now. view <a href="<?= base_url()?>" class="text-info">latest product</a></span></center>
														<?php } ?>
														<!--content section end-->
													</div>
													<div class="tab-pane fade p-0" id="profile" role="tabpanel" aria-labelledby="profile-tab">
														<!--content section start-->
														<?php 
															$sr = 1;
															$id = $this->userData->id;
															if(!empty($delivered_orders)){
																foreach($delivered_orders as $order){
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
																	$oid=$order['orderid'];
																	$cartOrder=$this->db->get_where('tbl_cart',array('orderid'=>$order['orderid'],'is_status'=>'true','order_status'=>'delivered'))->result();
																	if(!empty($cartOrder)){	
																	?>
																	<div class="row mt-3 search_container">
																		<div class="col-sm-12">
																			<div class="card">
																				<div class="card-header">
																					<div class="row">
																						<div class="col-12 col-sm-9 pr-3">
																							<div class="row">
																								<div class="col-sm-3 col-12 my-1 px-1" style="font-size:12px;">
																									<span>ORDER PLACED</span> <br>
																									<span class="font-weight-bold"><?= date('jS M Y',strtotime($order['created_at']))?></span>
																								</div>	
																								<div class="col-sm-2 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="text-uppercase">Total</span> <br>
																									<a href="javascript:void(0);" id="pover-order<?= $sr?>" class="text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus" > ₹<?= $order['amount']?><i class="fas fa-angle-down"></i></a>
																								</div>	 
																								<div class="col-sm-3 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="">SHIP TO</span> <br>
																									<a href="javascript:void(0);" id="pover-card<?= $sr?>" class="font-weight-bold text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus"  ><?=$address->name?><i class="fas fa-angle-down"></i></a> 
																								</div>	 
																							</div>
																						</div>	
																						<div class="col-12 col-sm-3 orderid-sec  py-1 px-1 " style="font-size:12px;">
																							<span class="searchable">ORDER <?= $order['orderid']?></span><br>
																							<a href="<?= base_url('OrdersDetails/'.$order['orderid'])?>" class="text-info">Order Summary</a>
																							<!--<a href="javascript:void(0);" id="cancelAll<?= $sr?>" onclick="cancelAll('<?=$order['orderid']?>')" class="text-info mt-2"><span style="color:black;">&nbsp;|&nbsp;</span>Cancel All<span style="color:black;">&nbsp;|&nbsp;</span></a>
																							<a href="javascript:void(0);" onclick="returndAll('<?=$order['orderid']?>')" class="text-info" id="returnAll<?= $sr?>">Return & Refund All</a>-->
																						</div>	
																					</div>
																				</div>  
																				<div class="card-body">
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
																								
																								$total =$cart->price;
																							}	
																							$totalPrice+=(int)$total;
																							$track_details=$this->db->get_where('tbl_track_product',['cartid'=>$cart->id])->row();
																						?>
																						<div class="row <?php if($cart_count<count($cartOrder)){echo 'border-bottom';}?> py-2">
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
																												<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:100px;">
																											</div>
																											<div class="col-sm-10">
																												<a href="#" class="searchable"><?= $product_name ?></a> <br>
																												<?php if($cart->order_type=='prebooking'){ ?><small style="font-size:12px;font-weight: 500;" class="badge bg-success text-white">Prebooking Order</small>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="popover-hover" data-content="<?php if($order['paid_amount']==$order['amount']){ echo "🎉Congratulations! You paid total amount."; }else{?>You can purchase this product at ₹<?=(int)$product->prebook_amt;?> , rest amount ₹<?php echo ((int)$product->reg_sell_price-(int)$product->prebook_amt);?> you have to pay via given payment links before the delivery date otherwise your order will be cancelled<?php } ?>" data-placement="top" style="cursor:pointer; font-size: 14px; color: grey;"></i><br style="margin-bottom:16px;"><?php } ?>
																												<?php 
																													if(!empty($cart->order_type)){
																														if($order['paid_amount']==$order['amount']){?> 
																														<small style="font-size:12px;">
																															🎉Congratulations! You paid total amount.
																														</small><br><br>
																														<?php }else{ ?>
																														<small style="font-size:12px;">
																															Payment Links:<a href="<?=$order['payment_links'];?>" target="_blank" style="color:#254def;"><?=$order['payment_links'];?></a>
																														</small><br>
																													<?php } } ?>
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
																										<?php if($cancel_status=='true'){
																											if(($current_date>$cancel_expire_date) || ($cart->order_status=='cancel') || ($cart->order_status=='delivered') || ($cart->order_status=='returned') || ($cart->order_status=='refunded')){
																												$cancel_count++;
																											}
																											if($cart->order_status!='delivered'){
																												if(($current_date<=$cancel_expire_date) AND ($cart->order_status!='cancelled') AND ($cart->order_status!='returned') AND ($cart->order_status!='refunded')){ 
																												?>
																												<button class="btn btn-block similar-btn" onclick="cancelSingleItem('<?=$order['orderid']?>','<?= $cart->id?>')">Cancel</button>	
																											<?php } } } ?>
																											
																											<?php if($cart->order_status=='delivered' || $cart->order_status=='returned'){?>
																												<?php if($this->sitepermission->product_rating_review){ ?>
																													<a href="<?= base_url('Review/Product/'.$cart->id)?>" class="btn btn-block similar-btn">Write a product review</a>	
																												<?php } ?>
																												<?php 
																													if($this->sitepermission->seller_rating_review){
																														if(!empty($product->vendor_id)){?>
																														<a href="<?= base_url('Review/Seller'.$cart->id)?>" class="btn btn-block similar-btn">Leave seller feedback</a>
																													<?php } }  ?>
																													<?php 
																														if($this->sitepermission->seller_rating_review){
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
																						<script>
																							var cancel_count='<?=$cancel_count?>';
																							var ret_ref_expire_count='<?=$ret_ref_expire_count?>';
																							var total='<?=count($cartOrder)?>';
																							var count='<?=$sr?>';
																							if(cancel_count==total){
																								document.getElementById("<?= 'cancelAll'.$sr?>").style.display='none';
																							}
																							if(ret_ref_expire_count==total){
																								document.getElementById("<?= 'returnAll'.$sr?>").style.display='none';
																							}
																							
																						</script>
																						<?php 
																						$cart_count++; }
																					?>
																				</div>
																			</div>	
																		</div>	 
																	</div>
																<?php } ?>
																<!------------popover body ---------->
																<div  class="popover-content" > 
																	<div id="popover-card<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span class="font-weight-bold"><?= $address->name?></span> <br>
																				<span><?= $address->line1?></span> <br>
																				<span><?= $address->line2?></span> <br>
																				<span><?php echo $address->state.' '.$address->city.' , '.$address->pincode?></span> <br>
																				<span>India</span> <br>
																				<span>Phone: <?= $address->mobile?></span> <br> 
																			</div>
																		</div>
																	</div>
																</div>
																<div  class="popover-content" > 
																	<div id="popover-order<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span><b>Subtotal:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Coupon Applied:</b>
																					<?php 
																						if($order['giveway_type']!='cashback' || $order['giveway_type']!='reward'){ 
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
																									echo '₹'.$coupon_discount;
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
																							echo 0;
																						}
																					?>
																				</span> <br>
																				<span><b>Shipping:</b>₹<?= $shipping_charge?></span><br>
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
																						<span><b>Giftwrap Charge:</b>₹<?= $giftWrapCharge?></span><br>
																						<?php 
																						}
																					}
																				?>
																				<span><b>Total:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Grand Total:</b>₹<?=$order['amount']?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<!------------popover body ---------->
																<?php 
																	$sr++;
																}
															}
															else
															{
															?>
															<center class="mt-5"><span>There are no any delivered items till now. view <a href="#" class="text-info">all orders</a> for items you previously purchased.</span></center>
														<?php } ?>
														<!--content section end-->
													</div>
													<div class="tab-pane fade p-0" id="contact" role="tabpanel" aria-labelledby="contact-tab">
														<!--content section start-->
														<?php 
															$sr = 1;
															$id = $this->userData->id; 
															if(!empty($ret_ref_orders)){
																foreach($ret_ref_orders as $order){
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
																	$orderid=$order['orderid'];
																	$cartOrder=$this->db->where("orderid='$orderid' AND is_status='true' AND (order_status='returned' or order_status='refunded')")->get('tbl_cart')->result();
																	if(!empty($cartOrder)){	
																	?>
																	<div class="row mt-3 search_container">
																		<div class="col-sm-12">
																			<div class="card">
																				<div class="card-header">
																					<div class="row">
																						<div class="col-12 col-sm-9 pr-3">
																							<div class="row">
																								<div class="col-sm-3 col-12 my-1 px-1" style="font-size:12px;">
																									<span>ORDER PLACED</span> <br>
																									<span class="font-weight-bold"><?= date('jS M Y',strtotime($order['created_at']))?></span>
																								</div>	
																								<div class="col-sm-2 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="text-uppercase">Total</span> <br>
																									<a href="javascript:void(0);" id="pover-order<?= $sr?>" class="text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus" > ₹<?= $order['amount']?><i class="fas fa-angle-down"></i></a>
																								</div>	 
																								<div class="col-sm-3 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="">SHIP TO</span> <br>
																									<a href="javascript:void(0);" id="pover-card<?= $sr?>" class="font-weight-bold text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus"  ><?=$address->name?><i class="fas fa-angle-down"></i></a> 
																								</div>	 
																							</div>
																						</div>	
																						<div class="col-12 col-sm-3 orderid-sec  py-1 px-1 " style="font-size:12px;">
																							<span class="searchable">ORDER <?= $order['orderid']?></span><br>
																							<a href="<?= base_url('OrdersDetails/'.$order['orderid'])?>" class="text-info">Order Summary</a>
																							<!--<a href="javascript:void(0);" id="cancelAll<?= $sr?>" onclick="cancelAll('<?=$order['orderid']?>')" class="text-info mt-2"><span style="color:black;">&nbsp;|&nbsp;</span>Cancel All<span style="color:black;">&nbsp;|&nbsp;</span></a>
																							<a href="javascript:void(0);" onclick="returndAll('<?=$order['orderid']?>')" class="text-info" id="returnAll<?= $sr?>">Return & Refund All</a>-->
																						</div>	
																					</div>
																				</div>  
																				<div class="card-body">
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
																								
																								$total =$cart->price;
																							}	
																							$totalPrice+=(int)$total;
																							$track_details=$this->db->get_where('tbl_track_product',['cartid'=>$cart->id])->row();
																						?>
																						<div class="row <?php if($cart_count<count($cartOrder)){echo 'border-bottom';}?> py-2">
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
																												<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:100px;">
																											</div>
																											<div class="col-sm-10">
																												<a href="#" class="searchable"><?= $product_name ?></a> <br>
																												<?php if($cart->order_type=='prebooking'){ ?><small style="font-size:12px;font-weight: 500;" class="badge bg-success text-white">Prebooking Order</small>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="popover-hover" data-content="<?php if($order['paid_amount']==$order['amount']){ echo "🎉Congratulations! You paid total amount."; }else{?>You can purchase this product at ₹<?=(int)$product->prebook_amt;?> , rest amount ₹<?php echo ((int)$product->reg_sell_price-(int)$product->prebook_amt);?> you have to pay via given payment links before the delivery date otherwise your order will be cancelled<?php } ?>" data-placement="top" style="cursor:pointer; font-size: 14px; color: grey;"></i><br style="margin-bottom:16px;"><?php } ?>
																												<?php 
																													if(!empty($cart->order_type)){
																														if($order['paid_amount']==$order['amount']){?> 
																														<small style="font-size:12px;">
																															🎉Congratulations! You paid total amount.
																														</small><br><br>
																														<?php }else{ ?>
																														<small style="font-size:12px;">
																															Payment Links:<a href="<?=$order['payment_links'];?>" target="_blank" style="color:#254def;"><?=$order['payment_links'];?></a>
																														</small><br>
																													<?php } } ?>
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
																													
																											</div>	
																										</div>
																									</div>	 
																									<div class="col-sm-3">
																										<?php if($this->sitepermission->order_tracking){ ?> 
																											<a href="<?= base_url('Home/TrackPackage/'.$cart->id) ?>" class="btn btn-block similar-btn">Track Packege</a>	
																										<?php } ?>
																										<?php if($cart->order_status=='delivered' || $cart->order_status=='returned'){?>
																											<?php if($this->sitepermission->product_rating_review){ ?>
																												<a href="<?= base_url('Review/Product/'.$cart->id)?>" class="btn btn-block similar-btn">Write a product review</a>	
																											<?php } ?>
																											<?php 
																												if($this->sitepermission->seller_rating_review){
																													if(!empty($product->vendor_id)){ ?>
																													<a href="<?= base_url('Review/Seller'.$cart->id)?>" class="btn btn-block similar-btn">Leave seller feedback</a>
																												<?php } } ?>
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
																						<script>
																							var cancel_count='<?=$cancel_count?>';
																							var ret_ref_expire_count='<?=$ret_ref_expire_count?>';
																							var total='<?=count($cartOrder)?>';
																							var count='<?=$sr?>';
																							if(cancel_count==total){
																								document.getElementById("<?= 'cancelAll'.$sr?>").style.display='none';
																							}
																							if(ret_ref_expire_count==total){
																								document.getElementById("<?= 'returnAll'.$sr?>").style.display='none';
																							}
																							
																						</script>
																						<?php 
																						$cart_count++; }
																					?>
																				</div>
																			</div>	
																		</div>	 
																	</div>
																<?php } ?>
																<!------------popover body ---------->
																<div  class="popover-content" > 
																	<div id="popover-card<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span class="font-weight-bold"><?= $address->name?></span> <br>
																				<span><?= $address->line1?></span> <br>
																				<span><?= $address->line2?></span> <br>
																				<span><?php echo $address->state.' '.$address->city.' , '.$address->pincode?></span> <br>
																				<span>India</span> <br>
																				<span>Phone: <?= $address->mobile?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<div  class="popover-content" > 
																	<div id="popover-order<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span><b>Subtotal:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Coupon Applied:</b>
																					<?php 
																						if($order['giveway_type']!='cashback' || $order['giveway_type']!='reward'){ 
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
																									echo '₹'.$coupon_discount;
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
																							echo 0;
																						}
																					?>
																				</span> <br>
																				<span><b>Shipping:</b>₹<?= $shipping_charge?></span><br>
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
																						<span><b>Giftwrap Charge:</b>₹<?= $giftWrapCharge?></span><br>
																						<?php 
																						}
																					}
																				?>
																				<span><b>Total:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Grand Total:</b>₹<?=$order['amount']?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<!------------popover body ---------->
																<?php 
																	$sr++;
																}
															}
															else
															{
															?>
															<center class="mt-5"><span>There are no any return or refund items till now. view <a href="#" class="text-info">all orders</a> for items you previously purchased.</span></center>
														<?php } ?>
														<!--content section end-->
													</div>
													<div class="tab-pane fade p-1"  id="concelledorder" role="tabpanel" aria-labelledby="concelled-order">
														<?php 
															$sr = 1;
															$id = $this->userData->id;
															if(!empty($cancel_orders)){
																foreach($cancel_orders as $order){ 
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
																	$cartOrder=$this->db->get_where('tbl_cart',array('orderid'=>$order['orderid'],'is_status'=>'true','order_status'=>'cancelled'))->result();
																	if(!empty($cartOrder)){	
																	?>
																	<div class="row mt-3 search_container">
																		<div class="col-sm-12">
																			<div class="card">
																				<div class="card-header">
																					<div class="row">
																						<div class="col-12 col-sm-9 pr-3">
																							<div class="row">
																								<div class="col-sm-3 col-12 my-1 px-1" style="font-size:12px;">
																									<span>ORDER PLACED</span> <br>
																									<span class="font-weight-bold"><?= date('jS M Y',strtotime($order['created_at']))?></span>
																								</div>	
																								<div class="col-sm-2 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="text-uppercase">Total</span> <br>
																									<a href="javascript:void(0);" id="pover-order<?= $sr?>" class="text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus" > ₹<?= $order['amount']?><i class="fas fa-angle-down"></i></a>
																								</div>	 
																								<div class="col-sm-3 col-12 my-1 sec-down px-1" style="font-size:12px;">
																									<span class="">SHIP TO</span> <br>
																									<a href="javascript:void(0);" id="pover-card<?= $sr?>" class="font-weight-bold text-info" data-placement="bottom" data-toggle="popover" data-trigger="focus"  ><?=$address->name?><i class="fas fa-angle-down"></i></a> 
																								</div>	 
																							</div>
																						</div>	
																						<div class="col-12 col-sm-3 orderid-sec  py-1 px-1 " style="font-size:12px;">
																							<span class="searchable">ORDER <?= $order['orderid']?></span><br>
																							<a href="<?= base_url('OrdersDetails/'.$order['orderid'])?>" class="text-info">Order Summary</a>
																							<!--<a href="javascript:void(0);" id="cancelAll<?= $sr?>" onclick="cancelAll('<?=$order['orderid']?>')" class="text-info mt-2"><span style="color:black;">&nbsp;|&nbsp;</span>Cancel All<span style="color:black;">&nbsp;|&nbsp;</span></a>
																							<a href="javascript:void(0);" onclick="returndAll('<?=$order['orderid']?>')" class="text-info" id="returnAll<?= $sr?>">Return & Refund All</a>-->
																						</div>	
																					</div>
																				</div>  
																				<div class="card-body">
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
																								
																								$total =$cart->price;
																							}	
																							$totalPrice+=(int)$total;
																							$track_details=$this->db->get_where('tbl_track_product',['cartid'=>$cart->id])->row();
																						?>
																						<div class="row <?php if($cart_count<count($cartOrder)){echo 'border-bottom';}?> py-2">
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
																												<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:100px;">
																											</div>
																											<div class="col-sm-10">
																												<a href="#" class="searchable"><?= $product_name ?></a> <br>
																												<?php if($cart->order_type=='prebooking'){ ?><small style="font-size:12px;font-weight: 500;" class="badge bg-success text-white">Prebooking Order</small>&nbsp;<i class="bi bi-info-circle-fill" data-toggle="popover-hover" data-content="<?php if($order['paid_amount']==$order['amount']){ echo "🎉Congratulations! You paid total amount."; }else{?>You can purchase this product at ₹<?=(int)$product->prebook_amt;?> , rest amount ₹<?php echo ((int)$product->reg_sell_price-(int)$product->prebook_amt);?> you have to pay via given payment links before the delivery date otherwise your order will be cancelled<?php } ?>" data-placement="top" style="cursor:pointer; font-size: 14px; color: grey;"></i><br style="margin-bottom:16px;"><?php } ?>
																												<?php 
																													if(!empty($cart->order_type)){
																														if($order['paid_amount']==$order['amount']){?> 
																														<small style="font-size:12px;">
																															🎉Congratulations! You paid total amount.
																														</small><br><br>
																														<?php }else{ ?>
																														<small style="font-size:12px;">
																															Payment Links:<a href="<?=$order['payment_links'];?>" target="_blank" style="color:#254def;"><?=$order['payment_links'];?></a>
																														</small><br>
																													<?php } } ?>
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
																											</div>	
																										</div>
																									</div>	 
																									<div class="col-sm-3">
																										<?php if($cart->order_status=='delivered' || $cart->order_status=='returned'){?>
																											<?php if($this->sitepermission->product_rating_review){ ?>
																												<a href="<?= base_url('Review/Product/'.$cart->id)?>" class="btn btn-block similar-btn">Write a product review</a>	
																											<?php } ?>
																											<?php 
																												if($this->sitepermission->seller_rating_review){
																													if(!empty($product->vendor_id)){?>
																													<a href="<?= base_url('Review/Seller'.$cart->id)?>" class="btn btn-block similar-btn">Leave seller feedback</a>
																												<?php } }  ?>
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
																						<script>
																							var cancel_count='<?=$cancel_count?>';
																							var ret_ref_expire_count='<?=$ret_ref_expire_count?>';
																							var total='<?=count($cartOrder)?>';
																							var count='<?=$sr?>';
																							if(cancel_count==total){
																								document.getElementById("<?= 'cancelAll'.$sr?>").style.display='none';
																							}
																							if(ret_ref_expire_count==total){
																								document.getElementById("<?= 'returnAll'.$sr?>").style.display='none';
																							}
																							
																						</script>
																						<?php 
																						$cart_count++; }
																					?>
																				</div>
																			</div>	
																		</div>	 
																	</div>
																<?php } ?>
																<!------------popover body ---------->
																<div  class="popover-content" > 
																	<div id="popover-card<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span class="font-weight-bold"><?= $address->name?></span> <br>
																				<span><?= $address->line1?></span> <br>
																				<span><?= $address->line2?></span> <br>
																				<span><?php echo $address->state.' '.$address->city.' , '.$address->pincode?></span> <br>
																				<span>India</span> <br>
																				<span>Phone: <?= $address->mobile?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<div  class="popover-content" > 
																	<div id="popover-order<?= $sr?>" class="">
																		<div class="card text-center" style="margin: -10px -15px; border:0;">
																			<div class="card-body text-left">
																				<span><b>Subtotal:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Coupon Applied:</b>
																					<?php 
																						if($order['giveway_type']!='cashback' || $order['giveway_type']!='reward'){ 
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
																									echo '₹'.$coupon_discount;
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
																							echo 0;
																						}
																					?>
																				</span> <br>
																				<span><b>Shipping:</b>₹<?= $shipping_charge?></span><br>
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
																						<span><b>Giftwrap Charge:</b>₹<?= $giftWrapCharge?></span><br>
																						<?php 
																						}
																					}
																				?>
																				<span><b>Total:</b>₹<?= $totalPrice?></span> <br>
																				<span><b>Grand Total:</b>₹<?=$order['amount']?></span> <br>
																			</div>
																		</div>
																	</div>
																</div>
																<!------------popover body ---------->
																<?php 
																	$sr++;
																}
															}
															else
															{
															?>
															<center class="mt-5"><span>There are no any canceled items till now. view <a href="#" class="text-info">all orders</a> for items you previously purchased.</span></center>
														<?php } ?>
														<!--content section end-->
													</div>
												</div>  
											</div>  
										</div>
										<!--end tab section---> 
									</div>
								</div>
							</div>
						</div>
					</section>
					<?php include('include/footer.php'); ?>
					<!-- Add Bank Details  Modal Start-->
					<div class="modal fade" id="AddAccountModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" style="background:background-color: rgba(0, 0, 0, 0.3);">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel1"><i class="fa fa-arrow-left"></i> Add Bank Account</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form method="POST" action="<?= base_url($this->data->controller.'/'.$this->data->method.'/AddAccount')?>" class="addForm">
									<div class="modal-body">
										<center style="letter-spacing: initial;"><img src="<?= base_url('public/images/lightbulb.png')?>" width="20" height="20"><span style="position: relative; top: 3px;">Refer to your bank passbook for these details</span></center>
										<div class="form-group  mb-1 mt-2">
											<label class="mb-0"  style="font-size: 14px; font-weight:600;">IFSC Code</label><br>
											<input type="text" name="ifsc_code" class="form-control">
										</div>
										<div class="form-group  mb-1">
											<label class="mb-0"  style="font-size: 14px; font-weight:600;">Account Number</label><br>
											<input type="number" name="account_number" class="form-control">
										</div>
										<div class="form-group mb-1">
											<label class="mb-0"  style="font-size: 14px; font-weight:600;">Confirm Account Number</label><br>
											<input type="number" name="confirm_account_number" class="form-control">
										</div>
										<div class="form-group  mb-1">
											<label class="mb-0"  style="font-size: 14px; font-weight:600;">Account Holder Name</label><br>
											<input type="text" name="account_holder_name" class="form-control">
										</div>
										<div class="form-group mb-1">
											<label class="mb-0"  style="font-size: 14px; font-weight:600;">Phone Number</label><br>
											<input type="number" name="phone" class="form-control">
										</div>
										</div>
										<div class="modal-footer">
										<div class="row">
										<div class="col-sm-12 p-0">
										<div class="form-group mb-0">
										<button class="btn btn-secondary btn-block addBtn" type="submit" >Add&nbsp;<i class="fa fa-spin fa-spinner" class="addSpin" style="display:none;"></i></button>	
										</div>
										</div>	
										</div>
										</div>
										</form>
										</div>
										</div>
										</div>
										<!-- Add Bank Details  Modal End-->
										<!-- Cancel order Modal -->
										<div class="modal fade" id="CancelItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-arrow-left"></i> Cancel Item</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<form method="POST" action="<?= base_url($this->data->controller.'/'.$this->data->method.'/CancelAll')?>" id="CancelItem">
										<div class="modal-body">
										
										</div>
										<div class="modal-footer">
										<div class="row">
										<div class="col-sm-12 p-0">
										<div class="form-group mb-0">
										<button class="btn btn-secondary btn-block" type="submit"  id="CancelItemBtn">Cancel Item&nbsp;<i class="fa fa-spin fa-spinner" id="CancelItemSpin" style="display:none;"></i></button>	
										</div>
										</div>	
										</div>
										</div>
										</form>
										</div>
										</div>
										</div>
										<!--cancellation Modal-->
										<!-- Return order Modal -->
										<div class="modal fade" id="ReturnItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
										<form method="POST" action="<?= base_url($this->data->controller.'/'.$this->data->method.'/ReturnAll')?>" id="ReturnItem">
										<div class="modal-dialog modal-dialog-scrollable" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalToggleLabel"><i class="fa fa-arrow-left"></i>Return/Exchange Item</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										
										</div>
										<div class="modal-footer">
										<div class="row">
										<div class="col-sm-12 p-0">
										<div class="form-group mb-0">
										<button class="btn btn-secondary btn-block" type="submit"  id="ReturnItemBtn">Submit Request&nbsp;<i class="fa fa-spin fa-spinner" id="ReturnItemSpin" style="display:none;"></i></button>	
										</div> 
										</div>	
										</div>
										</div>
										</div>
										</div>
										</form>
										</div>
										<!--Return Modal-->
										<!-- Modal -->
										<div class="modal fade" id="CancelSuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-body">
										<div class="row">
										<div class="col-sm-12 mt-4">
										<div class="text-center">
										<i class="bi bi-patch-check-fill fa-4x" style="color:green"></i>
										<h5>Cancellation Successful !</h5>
										<p>Your item has been successfully cancelled.</p>
										</div>
										</div>	
										</div>
										</br>
										</div>
										<div class="modal-footer" style="border:0px;">
										<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Okay,Got It</button>
										</div>
										</div>
										</div>
										</div>
										
										<!--end modal-->
										<?php include('include/jsLinks.php'); ?>
										<script>
										jQuery('[data-toggle="popover"]').popover({
										html: true,
										content: function() {
										var id = jQuery(this).attr('id');
										return jQuery('#po' + id).html();
										}
										});
										</script>
										<script>
										function alertTOUser(data)
										{
										if(data =='Wrong address/phone')
										{
										jQuery('.alertmsg').show();
										}
										else
										{
										jQuery('.alertmsg').hide();
										}
										}
										
										function AccountModal(){
										jQuery(".modal").modal("hide");
										jQuery("#AddAccountModal").modal("show");
										}
										
										function cancelAll(orderid){
										jQuery("#CancelItemModal").modal("show");
										jQuery("#CancelItemModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
										jQuery("#CancelItemModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowAllOrder/') ?>" + orderid+"?status=cancel");
										}
										
										function returndAll(orderid){
										jQuery("#ReturnItemModal").modal("show");
										jQuery("#ReturnItemModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
										jQuery("#ReturnItemModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowAllOrder/') ?>" + orderid+"?status=return");
										}
										
										function cancelSingleItem(oid,itemid){
										jQuery("#CancelItemModal").modal("show");
										jQuery("#CancelItemModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
										jQuery("#CancelItemModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowSingleOrder/') ?>" +oid+'/'+itemid+"?status=cancel");
										}
										
										function returnSingleItem(oid,itemid){
										jQuery("#ReturnItemModal").modal("show");
										jQuery("#ReturnItemModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
										jQuery("#ReturnItemModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowSingleOrder/') ?>" +oid+'/'+itemid+"?status=return");
										}
										
										$("#EditInfo").click(function(){
										jQuery(".modal-header modal-title").html('EDIT INFORMATION');
										jQuery("#EditInfoModal").modal('show');
										
										})
										
										function ConfirmCancel()
										{
										jQuery("#ConfirmationModal").modal('hide');
										jQuery("#CancelSuccessModal").modal('show');
										}
										
										function AttemptToCancel()
										{
										jQuery("#ConfirmationModal").modal('show');	
										jQuery("#CancelItemModal").modal('hide');	
										}
										
										$("#ConfirmCalcelOrder").click(function(){
										jQuery("#CancelOrderModal").modal('hide');
										jQuery("#ConfirmationModal").modal('show');
										})
										
										var minVal = 1, maxVal = 20; // Set Max and Min values
										// Increase product quantity on cart page
										$(".increaseQty").on('click', function(){
										var $parentElm = $(this).parents(".qtySelector");
										$(this).addClass("clicked");
										setTimeout(function(){
										$(".clicked").removeClass("clicked");
										},100);
										var value = $parentElm.find(".qtyValue").val();
										if (value < maxVal) {
										value++;
										}
										$parentElm.find(".qtyValue").val(value);
										});
										// Decrease product quantity on cart page
										$(".decreaseQty").on('click', function(){
										var $parentElm = $(this).parents(".qtySelector");
										$(this).addClass("clicked");
										setTimeout(function(){
										$(".clicked").removeClass("clicked");
										},100);
										var value = $parentElm.find(".qtyValue").val();
										if (value > 1) {
										value--;
										}
										$parentElm.find(".qtyValue").val(value);
										});	
										
										function GetDetails(div_id)
										{
										let div=$('#'+div_id);  
										if(div.css('display')=='none'){
										div.show();
										}else{
										div.hide();
										}
										}
										
										$('#CancelItem').on('submit', function(e) { 
										var formAction = $(this);
										var btnAction = $('#CancelItemBtn');
										var spinAction = $('#CancelItemSpin');
										var data = new FormData(this);
										e.preventDefault();
										swal({
										title: "Are you sure?",
										text: "You want to cancel !",
										icon: "warning",
										buttons: true,
										dangerMode: true
										}).then((willDelete) => { 
										if (willDelete) {
										
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
										if (response[0].redirect) {
										window.setTimeout(function() {
										window.location.href = response[0].redirect;
										}, 1000);
										} 
										}
										},
										error: function() {
										// window.location.reload();
										}
										});
										}
										}
										});
										})
										
										$('#ReturnItem').on('submit', function(e) { 
										var formAction = $(this);
										var btnAction = $('#ReturnItemBtn');
										var spinAction = $('#ReturnItemSpin');
										var data = new FormData(this);
										e.preventDefault();
										swal({
										title: "Are you sure?",
										text: "You want to return !",
										icon: "warning",
										buttons: true,
										dangerMode: true
										}).then((willDelete) => { 
										if (willDelete) {
										
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
										if (response[0].redirect) {
										window.setTimeout(function() {
										window.location.href = response[0].redirect;
										}, 1000);
										} 
										}
										},
										error: function() {
										// window.location.reload();
										}
										});
										}
										}
										});
										})
										$(document).ready(function () {
										$("#filterCards").keyup(function () {
										var filter = $(this).val();
										$(".search_container").each(function () {
										var $i = 0;
										$(this)
										.find(".searchable")
										.each(function () {
										if ($(this).text().search(new RegExp(filter, "i")) >= 0) {
										$i++;
										}
										});
										if ($i > 0) {
										$(this).closest(".search_container").show();
										} else {
										$(this).closest(".search_container").hide();
										}
										});
										});
										});
										</script>
										</body>
										</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									