
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Track Package </title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
		    #modalheading{
			font-size: 22px;
			}
			*{
			letter-spacing:0;
			}
			.chkcontainer {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			}
			
			.chkcontainer input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
			}
			
			.checkmark {
			position: absolute;
			top: 0;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #eee;
			}
			
			
			/* On mouse-over, add a grey background color */
			.chkcontainer:hover input ~ .checkmark {
			background-color: #ccc;
			}
			
			/* When the checkbox is checked, add a blue background */
			.chkcontainer input:checked ~ .checkmark {
			background-color: #FF1493;
			}
			
			/* Create the checkmark/indicator (hidden when not checked) */
			.checkmark:after {
			content: "";
			position: absolute;
			display: none;
			}
			
			/* Show the checkmark when checked */
			.chkcontainer input:checked ~ .checkmark:after {
			display: block;
			}
			
			/* Style the checkmark/indicator */
			.chkcontainer .checkmark:after {
			left: 9px;
			top: 5px;
			width: 5px;
			height: 10px;
			border: solid white;
			border-width: 0 3px 3px 0;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
			}
			.orderlist .listorder{
			padding: 16px!important;
			}
			.listorder:hover{
			background:#EAF7F9;
			}
			.seprator{
			border-right: 1px solid black;
			}
			
			#hideindesktop{
			display:none;
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.seprator{
			border-right: 0px;
			}
			#last-img{
			display:none;
			}
			.pageheading{
			font-size: 13px!important;
			}
			#hideindesktop{
			display:block;
			}
			#modalheading{
			font-size: 16px;
			}
			}
			body {
			background-image: url(//cdn.fcglcdn.com/brainbees/images/n/main-bg.jpg);
			background-repeat: repeat;
			font-family: inherit;
			}
			:root{
			--body-background-color:#e5f4ff ;
			--v-progress-left: 50px;
			--v-progress-item-height-width: 12px;
			--v-progress-line-height: 45px;
			--v-progress-line-width: 3px;
			--v-progress-gap: 13px;
			--blue: #b266d3;
			--green: #159895;
			--light-blue: #8834AD;
			}
			/* vertical progress */
			.v-progress{
			padding:10px 0 10px 0;
			}
			.v-progress ul{
			list-style: none;
			padding:0;
			}
			
			.v-progress-item {
			position: relative;
			/* left: var(--v-progress-left); */
			margin-left: var(--v-progress-left);
			height: var(--v-progress-item-height-width);
			line-height: var(--v-progress-item-height-width);
			margin-bottom: var(--v-progress-line-height);
			--v-progress-border: 8px;
			}
			
			.v-progress-item:last-child {
			margin-bottom: 0px;
			}
			
			.v-progress-item:last-child:after {
			border-left: 0px;
			}
			
			.v-progress-item:before {
			content: "";
			display: inline-block;
			position: absolute;
			width: var(--v-progress-item-height-width);
			height: var(--v-progress-item-height-width);
			left: calc(0px - var(--v-progress-left));
			border-radius: 50%;
			background-color: #ccc;
			}
			
			.v-progress-item:after {
			content: "";
			display: inline-block;
			position: absolute;
			height: calc(var(--v-progress-line-height) - var(--v-progress-gap));
			top: calc(var(--v-progress-item-height-width) + var(--v-progress-gap) / 2);
			left: calc(0px - var(--v-progress-left) + var(--v-progress-item-height-width) / 2 - var(--v-progress-line-width) / 2);
			border-left: var(--v-progress-line-width) solid #ccc;
			}
			
			.v-progress-item.completed:after {
			border-color: var(--light-blue);
			}
			
			.v-progress-item.completed:before {
			content: "✔";
			font-size: 11px;
			text-align: center;
			color: white;
			background: var(--light-blue);
			height: calc(var(--v-progress-border) + var(--v-progress-item-height-width));
			width: calc(var(--v-progress-border) + var(--v-progress-item-height-width));
			line-height: calc(var(--v-progress-border) + var(--v-progress-item-height-width));
			left: calc(0px - var(--v-progress-left) - var(--v-progress-border) / 2);
			top: calc(0px - var(--v-progress-border) + var(--v-progress-border) / 2);
			}
			
			.v-progress-item.inprogress:before {
			background-color: white;
			/*   height: calc(var(--v-progress-border) + var(--v-progress-item-height-width));
			width: calc(var(--v-progress-border) + var(--v-progress-item-height-width)); */
			outline: calc(var(--v-progress-border) / 2) solid var(--blue);
			top: calc(0px - var(--v-progress-border) + var(--v-progress-border));
			}
			.order-status-details{
			font-weight:500;
			font-size:14px !important;
			line-height: 1.2;
			}
			.text-underline{text-decoration:underline;}
		</style>
		
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Track Package </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content py-0">
			<div class="container-fluid">
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
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/ShippingAddress") ?>">
									<i class="bi bi-geo-alt"></i>
									Shipping Address                           
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Logout") ?>">
									<i class="bi bi-power"></i>
									Logout                               
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="change-password.html">
									<i class="bi bi-unlock"></i>
									Change Password                            
								</a>
							</li>
						</ul>
					</div>
					<?php 
						$total=0;
						$subscription='false';
						$userid=$item->userid;
						#Track Details
						$tracking=$this->db->get_where('tbl_track_product',['cartid'=>$item->id])->row();
						#Check User Type- Royal/Normal
						$order=$this->db->get_where('tbl_order',['orderid'=>$item->orderid])->row_array();
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
						
						if($item->is_combo==''){
							$product=$this->db->get_where('products',['id'=>$item->product_id])->row();
							$variant = $this->db->get_where('product_variant',array('id'=>$item->variant_id))->row();
							$product_name=$product->title;
							$product_img=explode(',',$variant->variant_img);
							$total = $item->price;
						}
						else{
							$product=$this->db->get_where('tbl_combo',['id'=>$item->combo_id])->row();
							$product_name=$product->title;
							$product_img= explode(',',$product->image);
							$total = $item->price;
						}
					?>
					<div class="col-12 col-lg-9 mb-3">
						<div class="card bg-white">
							<div class="card-header">
								<div class="row">
									<div class="col-12 col-sm-12">
										<h1 style="font-size : 22px;">Track Package</h1>  
									</div>
								</div>	
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-9">
										<div class="row p-3">
											<div class="pr-2">
												<img src="<?= base_url('uploads/product/'.$product_img[0])?>" height="100" width="100">
											</div>
											<div>
												<b style="font-weight: 600;"><?=$product_name?></b><br>
												<p class="mb-0">
													<?php if($item->is_combo==''){?>
														<?php 
															$color_details=$this->db->get_where('tbl_color',['code'=>$item->color])->row();
														?>
														<small style="font-size: 14px; font-weight:500;"><?=ucfirst($color_details->name)?></small>
														<?php if($item->size!='NA'){?>
															/<small style="font-size: 14px;"><?=$item->size?></small>
														<?php } ?>
														<?php }else{ 
															$pid=explode(",",$item->product_id);
															$psize=explode(",",$item->size);
															$colors=explode(",",$item->color);
															for($i=0;$i<count($pid);$i++){  
																$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
																$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
																$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
																echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
															}
														}
													?>  
												</p>
												<p class="mb-1">
													<span class="badge p-1" style="background:lavender;">Qty:<?=$item->qty?></span>
													<span class="badge p-1" style="background:lavender;">Price:₹<?=$total?></span>
												</p>
											</div>
										</div>
									</div>
									<div class="col-sm-3 p-3">
										<b class="text-success text-capitalize" style="font-weight: 600;"><?=$item->order_status?></b><br>
										<span><b style="font-weight: 600;">Order Id:</b><?= $item->orderid?></span><br>
										<?php 
											if(!empty($tracking)){
												date_default_timezone_set('asia/kolkata');
												if($item->order_status=='delivered' AND (!empty($tracking->delivered_datetime))){?>
												<span>Delivered:<?=date('jS M Y',strtotime($tracking->delivered_datetime))?></span>
												<?php }elseif($item->order_status=='returned' AND (!empty($tracking->replaced_datetime))){ ?>
												<span>Replacement:<?=date('jS M Y',strtotime($tracking->replaced_datetime))?></span>
												<?php }elseif($item->order_status=='refunded' AND (!empty($tracking->refunded_detetime))){ ?>
												<span>Refunded:<?=date('jS M Y',strtotime($tracking->refunded_detetime))?></span>
												<?php }elseif($item->order_status=='cancelled' AND (!empty($tracking->cancelled_datetime))){?>
												<span>Cancelled:<?=date('jS M Y',strtotime($tracking->cancelled_datetime))?></span>
												<?php } 
											} ?>
									</div>
								</div><hr>
								<div class="row mb-3">
									<div class="col-sm-6 mb-3">
										<div class="row p-3 m-0" style="border:1px solid lavender; border-radius:8px;">
											<div class="v-progress">
												<ul>
													<?php 
														if(!empty($tracking))
														{ 	
														?>
														<li class="v-progress-item <?php if(!empty($tracking->placed_datetime)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Order Placed</span><br><?php if(!empty($tracking->placed_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->placed_datetime))?></span><?php } ?></p></li>
														<?php 
															if($item->order_status=='cancelled'){
															?>
															<li class="v-progress-item <?php if(!empty($tracking->cancelled_datetime)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Order Cancelled</span><br><?php if(!empty($tracking->cancelled_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->cancelled_datetime))?></span><?php } ?></p></li>
															<?php 
															}
															else{ ?>
															<li class="v-progress-item <?php if(!empty($tracking->dispatched_datetime) AND empty($item->return_status)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Order Dispatched</span><br><?php if(!empty($tracking->dispatched_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->dispatched_datetime))?></span><?php } ?></p></li>
															<li class="v-progress-item <?php if(!empty($tracking->transit_datetime) AND empty($item->return_status)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Out for Delivery</span><br><?php if(!empty($tracking->transit_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->transit_datetime))?></span><?php } ?></p></li>
															<li class="v-progress-item <?php if(!empty($tracking->delivered_datetime) AND empty($item->return_status)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Order Delivered</span><br><?php if(!empty($tracking->delivered_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->delivered_datetime))?></span><?php } ?></p></li>
															<?php if(!empty($item->return_status)){
																$return_details=json_decode($item->return_details); 
																if($return_details->return_type=='refund')
																{
																?>
															<li class="v-progress-item <?php if(!empty($return_details->return_datetime)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Refund Requested</span><br><?php if(!empty($return_details->return_datetime)){?><span style="color: grey;"><?=date('jS M Y',strtotime($return_details->return_datetime))?></span><?php } ?></span></p></li>
															<?php if($item->order_status=='refunded')
																{
																?>
															<li class="v-progress-item <?php if(!empty($tracking->refunded_detetime)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Refund Completed</span><br><?php if(!empty($tracking->refunded_detetime)){?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->refunded_detetime))?></span><?php } ?></span></p></li>
															<?php } 
															}
															else{ ?> 
															<li class="v-progress-item <?php if(!empty($return_details->return_datetime)){echo 'completed';}else{echo 'inprogress';}?>"><p class="order-status-details"><span>Return Requested</span><br><?php if(!empty($return_details->return_datetime)){ ?><span style="color: grey;"><?=date('jS M Y',strtotime($return_details->return_datetime))?></span><?php } ?></p></li>
															<?php if($item->order_status=='returned'){?>
																<li class="v-progress-item"><p class="order-status-details <?php if(!empty($tracking->replaced_datetime)){echo 'inprogress';}else{echo 'inprogress';}?>"><span>Return Completed</span><br><?php if(!empty($tracking->replaced_datetime)){?><span style="color: grey;"><?=date('jS M Y',strtotime($tracking->replaced_datetime))?></span><?php } ?></p></li>
																<?php 
																} 
															} 
														} 
													} 
												}
											?>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row m-0 mb-3 flex-column" style="border:1px solid lavender; border-radius:8px;">
									<div class="border-bottom p-2" style="background:lavender; border-radius:8px 8px 0 0;">Manage your return</div>
									<div class="border-bottom p-2"><a href="<?= base_url('OrdersDetails/'.$item->orderid)?>" class="text-underline">View order details</a></div>
									<?php if($item->order_status=='delivered' || $item->order_status=='returned'){?>
										<div class="border-bottom p-2"><a href="<?= base_url('Review/Product/'.$item->id)?>"  class="text-underline">Write a product review</a></div>
										<div class="p-2"><a href="<?= base_url('Review/Seller'.$item->id)?>"  class="text-underline">Write a product review</a></div>
									<?php } ?>
								</div>
								<div class="row m-0 mb-3 flex-column" style="border:1px solid lavender; border-radius:8px;">
									<div class="border-bottom p-2" style="background:lavender; border-radius:8px 8px 0 0;">Need more help?</div>
									<div class="p-2"><a href="<?=base_url('CancellationPolicy')?>" class="text-underline">Cancel</a>,&nbsp;<a href="<?=base_url('ExchangePolicy')?>" class="text-underline">Exchange</a>&nbsp;& <a href="<?=base_url('RefundPolicy')?>" class="text-underline">refund policies</a></div>
								</div>
								<div class="row m-0 flex-column" style="border:1px solid lavender; border-radius:8px;">
									<button class="btn btn-secondary rounded" style="border-radius: 8px !important;">Continue Shopping</button>
								</div>
							</div>
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
	function TrackingDetails()
	{
		jQuery("#Trackinhg").modal('show');	
	}
</script>
</body>
</html>																								
