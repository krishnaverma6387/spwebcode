<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			[data-after-text],
			[data-before-text] {
			--badge-offset-x: calc(0px - var(--badge-size) / 2.2);
			--badge-offset-y: calc(0px - var(--badge-size) / 2.2);
			--badge-size: 0.8rem;
			--circle-size: 1rem;
			--dot-offset: 1rem;
			--dot-size: 0.5rem;
			
			--b: initial;
			--bgcw: hsl(0deg 85.37% 40.5%);
			--bgcd: hsl(0deg 85.37% 40.5%);
			--bgcs hsl(0deg 85.37% 40.5%);
			--bdrs: 0;
			--c: hsl(195, 100%, 99%);
			--d: inline-flex;
			--fz: 0.625rem;
			--fw: 700;
			--h: auto;
			--l: initial;
			--m: 0.4rem;
			--p: 0;
			--pos: static;
			--r: -5px;
			--t: -6px;
			--tt: uppercase;
			--w: initial;
			
			position: relative;
			}
			
			[data-after-text]:not([data-after-text=""])::after {
			content: attr(data-after-text);
			}
			[data-before-text]:not([data-before-text=""])::before {
			content: attr(data-before-text);
			}
			
			[data-after-text]:not([data-after-text=""])::after,
			[data-before-text]:not([data-before-text=""])::before {
			align-items: center;
			background: var(--bgc);
			border-radius: var(--bdrs);
			bottom: var(--b);
			box-shadow: var(--bxsh);
			box-sizing: border-box;
			color: var(--c);
			display: var(--d);
			font-size: var(--fz);
			font-weight: var(--fw);
			height: var(--h);
			justify-content: center;
			left: var(--l);
			padding: var(--p);
			position: var(--pos);
			right: var(--r);
			text-decoration: none;
			text-transform: var(--tt);
			top: var(--t);
			width: var(--w);
			}
			
			/* MODIFIERS */
			[data-after-type*="badge"]::after,
			[data-before-type*="badge"]::before {
			--bdrs: var(--badge-size);
			--bxsh: 0 0 0 2px rgba(255, 255, 255, 0.5);
			--h: var(--badge-size);
			--p: 0;
			--pos: absolute;
			--w: var(--badge-size);
			}
			[data-after-type*="circle"],
			[data-before-type*="circle"]{
			align-items: center;
			display: flex;
			}
			[data-after-type*="circle"]::after,
			[data-before-type*="circle"]::before {
			--bdrs: 50%;
			--fw: 400;
			--h: var(--circle-size);
			// --pos: relative;
			// --t: -0.75em;
			--tt: initial;
			--w: var(--circle-size);
			}
			[data-after-type*="circle"]::after,
			[data-after-type*="pill"]::after {
			margin-inline-start: 1ch;
			}
			[data-before-type*="circle"]::before,
			[data-before-type*="dot"]::before,
			[data-before-type*="pill"]::before {
			margin-inline-end: 1ch;
			}
			[data-after-type*="dot"]::after,
			[data-before-type*="dot"]::before {
			--bdrs: 50%;
			--d: inline-block;
			--fz: 50%;
			--h: var(--dot-size);
			--p: 0;
			--pos: relative;
			--t: -1px;
			--w: var(--dot-size);
			}
			[data-after-type*="dot"]::after,
			[data-before-type*="dot"]::before {
			content: "" !important;
			}
			[data-after-type*="pill"]::after,
			[data-before-type*="pil"]::before {
			--bdrs: 1rem;
			--p: 0.25rem 0.75rem;
			--pos: relative;
			--t: -1px;
			}
			
			/* COLORS */
			[data-after-type*="blue"]::after,
			[data-before-type*="blue"]::before {
			--bgc: #007acc;
			}
			[data-after-type*="darkgray"]::after,
			[data-before-type*="darkgray"]::before {
			--bgc: #706e6b;
			--c: #fff;
			}
			[data-after-type*="green"]::after,
			[data-before-type*="green"]::before {
			--bgc: #04844b;
			}
			[data-after-type*="lightgray"]::after,
			[data-before-type*="lightgray"]::before {
			--bgc: #ecebea;
			--c: #080707;
			}
			[data-after-type*="orange"]::after,
			[data-before-type*="orange"]::before {
			--bgc: #ffb75d;
			--c: #080707;
			}
			
			[data-after-type*="red"]::after,
			[data-before-type*="red"]::before {
			--bgc: #c23934;
			}
			
			/* POSITION */
			[data-after-type*="top"]::after,
			[data-before-type*="top"]::before {
			--b: auto;
			--pos: absolute;
			--t: var(--dot-offset);
			}
			[data-after-type*="right"]::after,
			[data-before-type*="right"]::before {
			--l: auto;
			--pos: absolute;
			--r: var(--dot-offset);
			}
			[data-after-type*="bottom"]::after,
			[data-before-type*="bottom"]::before {
			--b: var(--dot-offset);
			--pos: absolute;
			--t: auto;
			}
			[data-after-type*="left"]::after,
			[data-before-type*="left"]::before {
			--pos: absolute;
			--r: auto;
			--l: var(--dot-offset);
			}
			[data-after-type*="badge"][data-after-type*="top"]::after,
			[data-before-type*="badge"][data-before-type*="top"]::before {
			--m: 0;
			--t: var(--badge-offset-y);
			}
			[data-after-type*="badge"][data-after-type*="right"]::after,
			[data-before-type*="badge"][data-before-type*="right"]::before {
			--m: 0;
			--r: var(--badge-offset-x);
			}
			[data-after-type*="badge"][data-after-type*="bottom"]::after,
			[data-before-type*="badge"][data-before-type*="bottom"]::before {
			--b: var(--badge-offset-y);
			--m: 0;
			}
			[data-after-type*="badge"][data-after-type*="left"]::after,
			[data-before-type*="badge"][data-before-type*="left"]::before {
			--l: var(--badge-offset-x);
			--m: 0;
			}
			.act-btn+.act-btn{
			margin-right:4px;
			margin-left:4px;
			}
			
		</style>
	</head>
    <body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <?php require 'Topbar.php'; ?>
        <?php require 'Sidebar.php'; ?>
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1"> 
                        <div class="breadcrumbs-top">
                            <h5 class="content-header-title float-left pr-1 mb-0"><?=$this->data->pageTitle;?></h5>
                            <div class="breadcrumb-wrapper d-none d-sm-block">
                                <ol class="breadcrumb p-0 mb-0 pl-1">
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
									<li class="breadcrumb-item">
                                        <a href="<?= base_url($this->data->controller); ?>/ManageOrders/AllOrders"><?=$this->data->pageTitle;?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->subTitle;?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->order;
						$role_type='subadmin';
                    }
                ?>
                <div class="content-body">
                    <section id="form-action-layouts">
                        <div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<th>Action</th>
															<th>Username</th>
															<th>Product Name</th>
															<th>Order ID</th>
															<th>Order Status</th>
															<th>Payment Method</th>
															<th>Payment Status</th>
															<th>Amount</th>
															<?php if($this->uri->segment(3)=='RefundOrders'){?><th>Refund Amt.</th><?php } ?>
															<th>Created at</th>    
															<th>Modified at</th>  
														</tr>
													</thead>
													<tbody>
														<?php 
															$count = 1;
															if (!empty($orders)) {
																foreach ($orders as $data) { 
																	
																	$orderid=$data['orderid'];
																	$userid=$data['userid'];
																	$uDetails = $this->db->get_where('tbl_user', array('id' => $userid))->row();
																	
																	$address = json_decode($data['address']);
																	$coupon_discount=$data['coupon_discount'];
																	$shipping_charge=$data['shipping_charge'];
																	$giftWrapCharge=0;
																	$action=$this->uri->segment(3);
																	$cartOrder=$this->db->get_where('tbl_cart',array('orderid'=>$data['orderid'],'is_status'=>'true','is_sale'=>'true'))->result();
																	
																	if(!empty($cartOrder)){	
																		foreach($cartOrder as $cart){
																			$totalPrice=0;
																			$total=(int)$cart->price;	
																			$giftWrapForThisProduct=0;
																			$product = $this->db->get_where('products',array('id'=>$cart->product_id))->row();
																			if($product->gift_wrap=='true'){
																				$giftData=$this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->row();
																				$giftCount=$this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->num_rows();
																				if($giftData->is_giftwrap=='true'){
																					$cartGiftWrap=json_decode($giftData->giftwrap_details);
																					if(!empty($cartGiftWrap)){
																						$giftwrapid=$cartGiftWrap->giftwrapid;
																						$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row();  
																						$giftWrapCharge=($giftWrapDetails->price);
																						$giftWrapForThisProduct=(($giftWrapDetails->price)/$giftCount);
																					}
																				}
																			}
																			$totalProductPrice=((float)$data['amount']+(float)$coupon_discount-(float)$giftWrapCharge-(float)($shipping_charge)); 
																			$discount=(float)(((float)$coupon_discount/$totalProductPrice)*$total);
																			$totalPrice+=(float)$total+(float)$giftWrapForThisProduct+(float)($shipping_charge/count($cartOrder))-(float)$discount-(float)($data['wallet_discount'])/count($cartOrder);
																			$refundable_amount=(float)$totalPrice-(float)($shipping_charge/count($cartOrder))-(float)$giftWrapForThisProduct;
																		?> 
																		<tr>
																			<td class="text-center"><input type="hidden" value="<?= $data['id']; ?>" id="getId">
																				<?= $count++; ?>
																			</td>
																			<td class="col-sm-12">
																				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
																					<!--<button type="button" class="btn btn-sm btn-primary" onclick="View('<?=$data['id']; ?>')"></button>-->
																					<a class="btn btn-sm btn-primary" target="_blank" href="<?= base_url('Admin/ManageOrders/View/'.$data['id'])?>"><i class="bi bi-eye-fill"></i></a>
																					<div class="btn-group" role="group">
																						<button id="dropdownMenuLink" type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																							<i class="bi bi-printer-fill"></i> 
																						</button>
																						<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																							<li><a class="dropdown-item" target="_blank" href="<?= base_url('Admin/invoice/'.$cart->id.'/'.$data['orderid'])?>">Details Invoice</a></li>
																							<li><a class="dropdown-item" target="_blank" href="<?= base_url('Admin/invoice/'.round($totalPrice,0).'/'.$data['orderid']).'/PacketInvoice'?>">Packet Invoice</a></li>
																						</ul>
																					</div>
																					<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																					<?php if($action!='AllOrders' AND $action!='PrepaidOrders' AND $action!='PostpaidOrders' AND $action!='IncompleteOrders'){?>
																						<div class="btn-group" role="group">
																							<button id="dropdownMenuLink" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																								<i class="bi bi-geo-alt"></i> 
																							</button>
																							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																								<?php if($this->uri->segment(3)!="ProcessingOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipProcessingOrders','')" >Process Orders (Shiprocket)</a></li>
																									<?php } if($this->uri->segment(3)!="DispatchOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipDispatchOrders','')">Mark as Dispatched</a></li>
																									<?php } if($this->uri->segment(3)!="TransitOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipTransitOrders','')">Mark as Transit</a></li>
																									<?php } if($this->uri->segment(3)!="DeliveredOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipDeliveredOrders','')">Mark as Delivered</a></li>
																									<?php } if($this->uri->segment(3)!="RtoOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipRtoOrders','')">Mark as RTO Order</a></li>
																									<?php } if($this->uri->segment(3)!="CancelOrders" AND ($cart->order_status!='cancelled')){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipCancelOrders','<?=$totalPrice?>')">Mark as Cancelled Order</a></li>
																									<?php } if($this->uri->segment(3)!="ReturnOrders" AND ($cart->order_status!='returned')){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipReturnOrders','<?=$total?>')">Mark as Returned Order</a></li>
																									<?php } if($this->uri->segment(3)!="RefundOrders" AND ($cart->order_status!='refunded')){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','shipRefundOrders','<?=$total?>')">Mark as Refunded Order</a></li>
																									<?php } if($this->uri->segment(3)!="MarkLostOrders"){?>
																									<li><a class="dropdown-item" href="javascript:void(0)" onclick="UpdateOrderStatus('<?=$cart->id?>','MarkLostOrders','')">Mark as Lost Order</a></li>    
																								<?php } ?>
																							</ul>
																						</div>
																					<?php } ?>
																					<?php } ?>
																					<?php if(!empty($cart->order_query)){?>
																						<a href="<?= base_url($this->data->controller.'/SendMessage/'.$cart->id)?>" target="_blank" class="btn btn-sm btn-danger"><i class="bi bi-bell"></i></a>
																					<?php } ?>
																				</div>
																			</td>
																			<?php
																				$uid =  $data['userid'];
																				$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
																			?>
																			<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$uid)?>" ><?= $uDetails->name ?></a></td>
																			<td><?= $product->name?></td>
																			<td><?= $data['orderid'] ?></td>
																			<?php 
																				$bg_color='bg-primary';
																				$toltip_msg='';
																				$order_status=$cart->order_status;
																				
																				if($cart->order_status=='pending' || $cart->order_status=='processing'){
																					$bg_color='bg-warning';
																				}
																				elseif($cart->order_status=='cancel'){
																					$toltip_msg=$cart->cancel_reason;
																					$bg_color='bg-danger';
																				}
																				elseif($cart->order_status=='return'){
																					$toltip_msg=$cart->return_status;
																					$bg_color='bg-info';
																				}
																				elseif($cart->order_status=='refund'){
																					$toltip_msg=$cart->return_status;
																					$bg_color='bg-secondary';
																				}
																				elseif($cart->order_status=='delivered'){
																					$bg_color='bg-success';
																					
																					if(!empty($cart->return_status))
																					{	$bg_color="bg-primary";
																						$return_details=json_decode($cart->return_details);
																						$toltip_msg=!empty($return_details->return_reason)?$return_details->return_reason:'';
																						$order_status=$return_details->return_type.' '.$cart->return_status;  
																					}
																				}
																			?>
																			<td><span class="badge px-1 cursor-pointer <?=$bg_color?>" <?php if(!empty($toltip_msg)){?>data-toggle="tooltip" data-placement="top" title="<?= $toltip_msg ?>"<?php } ?>><?=$order_status?></span></td>
																			<?php
																				$oid =  $data['orderid'];
																			?>
																			<td><?= $data['pay_mode'] ?></td>
																			<td class="<?php if($data['PaymentStatus']=='Success'){echo "text-success";}else{echo "text-danger";}?>"><?= $data['PaymentStatus'] ?></td>
																			<td>&#8377;<?=round($totalPrice,0)?></td> 
																			<?php if($this->uri->segment(3)=='RefundOrders'){?><td>&#8377;<?=round($cart->refund_amount,0)?><br><?php if($data['pay_mode']=='online'){?><span class="badge bg-secondary"><?=$cart->rzp_refundid?></span><?php } ?></td><?php } ?>
																			<td><?= $data['created_at'] ?></td>
																			<td><?= $data['modified_at'] ?></td>
																		</tr>
																	<?php } } }
															} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--Modal Start-->
					<div class="modal fade" id="ViewModal"> 
						<div class="modal-dialog modal-lg">
							<div class="modal-content border-primary">
								<div class="modal-header bg-primary p-1">
									<h5 class="modal-title text-white">Show <?=$this->data->key;?> Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								
								<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" >
									<div class="modal-body p-1">
										
									</div>
									<div class="modal-footer d-block p-1">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
										value="<?= $this->security->get_csrf_hash(); ?>" />
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--Modal End-->
					<div class="modal fade" id="CancelView"> 
						<div class="modal-dialog">
							<div class="modal-content border-primary">
								<div class="modal-header bg-primary p-1">
									<h5 class="modal-title text-white">Show Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateReturnStatus'); ?>"  class="addForm">
									<div class="modal-body p-1">
										
									</div>
									<div class="modal-footer d-block p-1">
										<button type="submit" class="btn btn-primary float-right mb-1 addBtn" > <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner addSpin"  style="display:none;"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
		<script>
			function CancelView(id) {
				$("#CancelView").modal("show");
				$("#CancelView .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#CancelView .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/CancelItemDetails/') ?>" + id);
			}
		</script>
	</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																										