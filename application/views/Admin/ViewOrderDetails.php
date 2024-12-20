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
                                            <?php if(!empty($order)){
												foreach($order as $order){ 
												?>
												<div class="row">
													<div class="col-sm-8"><strong>Date-Time</strong> : <?= $order->created_at?></div>
													<div class="col-sm-4">
														<strong>Order Status :</strong>
													<b class="text-primary"><?=$order->order_status?></b>	</div>
												</div><br> 
												<div class="row">
													<div class="col-sm-12 table-responsive">
														<table class="table table-bordered "> 
															<?php
																$uid =  $order->userid;
																$shippingCharge=$order->shipping_charge;
																$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
																$userid=$order->userid;
																$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
																$subscription='false';
																if($subscriber->num_rows()>0){
																	$subscriber=$subscriber->row();
																	$plan_expire_date=date('y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
																	$current_date=date('y-m-d');  
																	$diff =  date_diff(date_create($current_date),date_create($plan_expire_date))->format("%R%a"); 
																	if($diff>=0){
																		$subscription='true';
																	}
																	else{
																		$subscription='false';
																	} 
																}
																else{
																	$subscription='false';
																}
															?>
															<tbody><tr>
																<th>Order Id </th>
																<td class="text-uppercase"><?= $order->orderid?></td>
																<th>Name</th>
																<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$order->userid)?>"><?= $uDetails->name;?><?php if($subscription=='true'){echo '&nbsp;<span class="badge bg-warning">Royal</span>';}?></a></td>
															</tr>
															<tr>
																<th>Mobile</th>
																<td><a href="#"><?= $uDetails->mobile;?></a></td>
																<th>Email</th>
																<td><a href="#"><?= $uDetails->email;?></a></td>
															</tr>
															<tr>
																<?php 
																	$address=json_decode($order->address);  
																?>  
																<th>Delivery Address</th><td colspan="3"><?=$address->line1?>&nbsp;<?=$address->city?>&nbsp;<?= $address->state?>&nbsp;,&nbsp;<?= $address->pincode?></td>
															</tr>
															</tbody>
														</table>
													</div>
													<div class="col-sm-8 p-0">
														<div class="col-sm-12 mb-1">
															<form action="<?= base_url($this->data->controller.'/'.$this->data->method.'/InitiateRefund')?>" id="updateForm">
																<table class="table-sm table-bordered table-responsive">
																	<style>
																		.table td, .table th {
																		border-bottom: 1px solid #E3EBF3;
																		padding: 0.75rem 0.75rem;
																		}
																	</style>
																	<tbody><tr style="background-color:lavender;">
																		<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><button class="btn btn-sm btn-primary my-1" type="button"><input type='checkbox'  id="selectAll" onclick="SelectAll()"> Refund All</button><?php } ?>
																		<th colspan="8">Product Information</th>	
																	</tr>
																	<tr>
																		<th>#</th>
																		<th>Product</th>
																		<th>Product Details</th>
																		<th>Oreder Details</th>
																		<th>Unit Price</th>
																		<th>Quantity</th>
																		<th>Total Mrp</th>
																		<th>Total Off.Price</th>
																	</tr>
																	<!--individual product orders-->
																	
																	<?php
																		$count=1;
																		$id=$order->orderid;
																		$Indsel=$this->db->query("select * from tbl_cart where orderid='$id' AND is_combo='' AND availability='';");
																		$Indsel=$Indsel->result();
																		$totalIndividualPrice=0;
																		$totalIndividualClubCash=0;
																		$totalIndividualNormolPrice=0;
																		$totalIndividualMrp=0;
																		$totalIndividualGst=0;
																		
																		if(!empty($Indsel)){ 
																			foreach($Indsel as $each)
																			{	$sale=$each->is_sale;
																				$product = $this->db->get_where('products',array('id'=>$each->product_id));
																				if($product->num_rows()>0)
																				{
																					$product = $product->row();
																					$icons = explode(',',$product->image1);
																					$id = $order->userid;
																					$variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
																					if($variant->num_rows()>0)
																					{
																						$variant = $variant->row();
																						$cartprice = $this->db->get_where('products',array('id'=>$each->product_id))->row();
																						$icons=explode(",",$variant->variant_img);
																						$total=(int)$each->price;
																						$totalMrp = (int)$cartprice->mrp*(int)$each->qty;
																						$totalDiscount=(int)((int)($totalMrp-$total)/(int)$totalMrp)*100;
																						$totalIndividualPrice+=(int)$total;
																						$totalIndividualMrp+=(int)$totalMrp;
																						$totalIndividualClubCash+=(int)$cartprice->royal_clubcash*$each->qty;
																						$totalIndividualNormolPrice+=(int)$cartprice->reg_sell_price*$each->qty; 
																						$totalIndividualGst+=(int)$cartprice->gst*$each->qty;
																					} ?>
																					<tr>
																						<td>
																							<?=$count;?>
																							<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																								<?php if($each->order_status=='delivered' AND $product->refund_status=='true'){?>
																									<input type="checkbox" class="selectId" name="selectId[]" id="selectId-<?=$count?>" onclick="getId('<?=$count?>')" value="<?=$each->id?>">
																									<input type="checkbox" class="selectPayment sr-only" name="selectPayment[]" id="selectPayment-<?=$count?>" value="<?=$total?>"> 
																								<?php } ?>
																							<?php } ?>
																						</td>
																						<td>
																							<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/'.$product->id)?>"><img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" height="80" width="80"></a>
																						</td>
																						<td>
																							<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/'.$product->id)?>"><b><?= $product->name; ?></b></a><br>
																							<?php 
																								$color_details=$this->db->get_where('tbl_color',['code'=>$each->color])->row();
																							?>
																							<small style="font-size: 16px;"><?=ucfirst($color_details->name)?></small>
																							<?php if($each->size!='NA'){?>
																								/<small style="font-size: 16px;"><?=$each->size?></small> 
																							<?php } ?>
																							<?php if(!empty($product->vendor_id)){
																								$vendor=$this->db->get_where('tbl_vendor',['id'=>$product->vendor_id])->row()
																							?>
																							<br><strong>Vendor Name:</strong><small style="font-size: 14px;"><?php if(!empty($vendor->name)){echo $vendor->name;}?></small>
																							<?php } ?>
																							<?php if(!empty($product->brand_id)){
																								$brand=$this->db->get_where('brand',['id'=>$product->brand_id])->row();
																							?>
																							<br><strong>Brand :</strong><small style="font-size: 14px;"><?=$brand->name?></small></br>
																							<?php } ?>
																							<strong>SKU ID:</strong><small style="font-size: 14px;"><?= $product->skuid?></small>,
																							<strong>HSN ID:</strong><small style="font-size: 14px;"><?= $product->hsn?></small>
																							<?php if($product->gift_wrap!='true'){?><p class="mb-0"><span class="R14_75" style="font-size:12px; font-weight:500;">Gift wrap is not available for this product.</span></p><?php } ?></br>
																							<?php if($sale=='true'){ ?>
																								<a href="<?= base_url('Admin/ManageSale/AssignSaleProduct/'.$each->sale_id)?>" class="btn btn-sm btn-primary">
																									<?php 
																										$saleDetails=$this->db->select('*')->from('sale_product')->join('tbl_sale', 'tbl_sale.id = sale_product.sale_id' )->where('sale_id',$each->sale_id)->get()->result();
																										if(!empty($saleDetails)){
																											if($saleDetails[0]->discount_type=='buy_x_get_y'){
																												$sale_disc='buy-'.$saleDetails[1]->qty_x.' get-'.$saleDetails[1]->discount;
																											}
																											elseif($saleDetails[0]->discount_type=='percent'){
																												$sale_disc=$saleDetails[1]->discount.'% off';
																											}
																											elseif($saleDetails[0]->discount_type=='flat'){
																												$sale_disc='Rs '.$saleDetails[1]->discount.' off'; 
																											}
																											echo "Sale:".$sale_disc;
																										} 
																									?>
																								</a>
																							<?php } ?>
																						</td>
																						<?php 
																							$bg_color='bg-primary';
																							$toltip_msg='';
																							if($each->order_status=='pending' || $each->order_status=='processing'){
																								$bg_color='bg-warning';
																							}
																							elseif($each->order_status=='cancel'){
																								$toltip_msg=$each->cancel_reason;
																								$bg_color='bg-danger';
																							}
																							elseif($each->order_status=='return'){
																								$toltip_msg=$each->return_reason;
																								$bg_color='bg-info';
																							}
																							elseif($each->order_status=='refund'){
																								$toltip_msg=$each->refund_reason;
																								$bg_color='bg-info';
																							}
																							elseif($each->order_status=='delivered'){
																								$bg_color='bg-success';
																							}
																						?>
																						<td>
																							<span class="badge px-1 cursor-pointer <?=$bg_color?>" <?php if(!empty($toltip_msg)){?>data-toggle="tooltip" data-placement="top" title="<?= $toltip_msg ?>"<?php } ?>><?=$each->order_status?></span>
																							
																						</td>
																						<td>  
																							&#8377;<?= $product->mrp?> 
																						</td>
																						<td><?= $each->qty ?></td>
																						<td>
																							<?php 
																								echo "".$totalMrp; 
																							?>
																						</td>
																						<td>
																							<?php 
																								echo "".$total; 
																							?>
																						</td>
																					</tr>
																					<?php
																					$count++; }
																			}
																		}
																	?>
																	<!--combo product orders-->
																	<?php
																		
																		$id=$order->orderid;
																		$selCombo=$this->db->query("select * from tbl_cart where orderid='$id' AND is_combo='true' AND availability='';");
																		$selCombo=$selCombo->result();
																		$totalComboPrice=0;
																		$totalComboMrp=0;
																		$totalComboClubCash=0;
																		$totalComboNormolPrice=0;
																		
																		if(!empty($selCombo)){
																			foreach($selCombo as $each)
																			{
																				$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
																				if($product->num_rows()>0)
																				{	
																					$product = $product->row();
																					$icons = explode(',',$product->image);
																					$id = $order->userid;
																					$cartprice = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row();
																					
																					$total=$each->price;
																					$totalMrp=(int)$cartprice->price*$each->qty; 
																					$totalDiscount=(int)(($totalMrp-$total)/$totalMrp)*100;
																					$totalComboPrice+=(int)$total;
																					$totalComboMrp+=(int)$totalMrp;
																					$totalComboNormolPrice=(int)$cartprice->discount_price;    
																					$totalComboClubCash=(int)0;	
																				?>
																				<tr>
																					<td>
																						<?=$count;?>
																						<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																							<?php if($each->order_status=='return' AND $each->return_request=='initiated'){?>
																								<input type="checkbox" class="selectId" name="selectId[]" id="selectId-<?=$count?>" onclick="getId('<?=$count?>')" value="<?=$each->id?>">
																								<input type="checkbox" class="selectPayment sr-only" name="selectPayment[]" id="selectPayment-<?=$count?>" value="<?=$total?>">
																							<?php } ?>
																						<?php } ?>
																					</td>
																					<td>
																						<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" height="80" width="80">
																					</td>
																					<td>
																						<a href="<?=base_url('Home/ProductComboDetails/'.$product->id)?>"><b><?= $product->name; ?></b></a></br>
																						<?php 
																							$pid=explode(",",$each->product_id);
																							$psize=explode(",",$each->size);
																							$colors=explode(",",$each->color);
																							for($i=0;$i<count($pid);$i++){  
																								$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
																								$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
																								$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
																								echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
																							}
																						?>  
																					</td> 
																					<?php 
																						$bg_color='bg-primary';
																						$toltip_msg='';
																						if($each->order_status=='pending' || $each->order_status=='processing'){
																							$bg_color='bg-warning';
																						}
																						elseif($each->order_status=='cancel'){
																							$toltip_msg=$each->cancel_reason;
																							$bg_color='bg-danger';
																						}
																						elseif($each->order_status=='return'){
																							$toltip_msg=$each->return_reason;
																							$bg_color='bg-info';
																						}
																						elseif($each->order_status=='refund'){
																							$toltip_msg=$each->refund_reason;
																							$bg_color='bg-info';
																						}
																						elseif($each->order_status=='delivered'){
																							$bg_color='bg-success';
																						}
																					?>
																					<td><span class="badge px-1 cursor-pointer <?=$bg_color?>" <?php if(!empty($toltip_msg)){?>data-toggle="tooltip" data-placement="top" title="<?= $toltip_msg ?>"<?php } ?>><?=$each->order_status?></span></td>
																					<td>  
																						&#8377;<?= $product->price;?>  
																					</td>
																					<td><?= $each->qty ?></td>
																					<td>
																						<?php 
																							echo "&#8377;".$totalMrp;  
																						?>
																					</td>
																					<td>
																						<?php 
																							echo "&#8377;".$total;  
																						?>
																					</td>
																				</tr>
																				<?php
																				$count++; }
																			}
																		}
																	?>
																	<tr>
																		<td colspan="3"></td>
																		<th colspan="4">Total Price</th>
																		<td><?php echo "&#8377;".($totalIndividualMrp+$totalComboMrp);?></td>
																	</tr>
																	<tr>
																		<td colspan="3"></td>
																		<th colspan="4">Total Discount Price</th>
																		<td><?php 
																			$TotalProductPrice=($totalIndividualPrice+$totalComboPrice);
																			echo "&#8377;".($totalIndividualPrice+$totalComboPrice);
																		?></td>
																	</tr>
																	<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																		<tr>
																			<td colspan="3"></td>
																			<th colspan="4">Total Refund Amount</th> 
																			<td><input type="text" class="w-100" readonly name="refund_amount" id="refund_amount"  required="required" data-parsley-required-message="Please enter amt.	"><a href="javascript:void(0)" style="color:#3f3fcf;" id="refundAllBtn" onclick="RefundAll()">Refund Total Amount</a></td>
																		</tr>
																		<tr>
																			<td colspan="3"></td>
																			<th colspan="4">Reason For Refund(Optional)</th>
																			<td><input type="text" class="w-100" name="refund_reason"  value=""></td>
																		</tr>
																		<tr>
																			<td colspan="7"></td>
																			<td><button type="submit" id="updateBtn" class="btn btn-sm btn-primary px-1 refund-btn" style="padding:8px 0;" name="refund_amount" >Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></td>
																			</tr>
																		<?php } ?>
																	</tbody>
																	</table>
																</form>
															</div>
															<?php 
																$id=$order->orderid;
																$giftWrapCharge=0;
																$giftData=$this->db->query("select * from tbl_cart where orderid='$id' && availability='' AND is_giftwrap='true' AND giftwrap_details!='';")->row();
																if(!empty($giftData)){
																	if($giftData->is_giftwrap=='true'){
																		$cartGiftWrap=json_decode($giftData->giftwrap_details);
																		if(!empty($cartGiftWrap)){
																			$giftwrapid=$cartGiftWrap->giftwrapid;
																			$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
																			$giftPrice=$giftWrapDetails->price;  
																			$giftName=$giftWrapDetails->name;  
																			$receipientName=$cartGiftWrap->recipientName ;
																			$senderName =$cartGiftWrap->senderName;  
																			$message =$cartGiftWrap->message;
																			$giftWrapCharge=$giftPrice;
																		?>
																		<div class="col-sm-12 table-responsive">
																			<table class="table table-bordered">
																				<style>
																					.table td, .table th {
																					border-bottom: 1px solid #E3EBF3; 
																					padding: 0.75rem 0.75rem;
																					}
																				</style>
																				<tbody>
																					<tr style="background-color:lavender;">
																						<th colspan="6">Gift Wrapping Information</th>	
																					</tr>
																					<tr>
																						<th>Sender Name</th><td><?=$senderName?></td>
																						<th>Receipient Name</th><td><?=$receipientName?></td>
																						<th>Gift Charge</th><td>&#8377;<?=$giftPrice?></td>
																					</tr>
																					<tr>
																						<th colspan="2">Message</th><td colspan="4"><?=$message?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	<?php } } } ?>
																	<div class="col-sm-12 ">
																		<?php 
																			$count = 1;
																			$id=$order->orderid;
																			$cartid=$this->db->query("select id from tbl_cart where orderid='$id';")->result();
																			$id = array_map(function($result) {
																				return $result->id;
																			}, $cartid);
																			$beauty_consultant=$this->db->where_in('cartid',$id)->get('beauty_consultant')->result();
																			if (!empty($beauty_consultant)) {	
																			?>
																			<table class="table-sm table-responsive table-striped table-bordered" style="width:100%;">
																				<thead>
																					<tr style="background-color:lavender;">
																						<th colspan="9">Faishion Expert Information</th>	
																					</tr>
																					<tr>
																						<th>#</th>
																						<th>Product</th>
																						<th>User Details</th>
																						<th>Schedule Date-Time(Status)</th>
																						<th>Consultant Name</th>
																						<th>Consultantation Links</th>   
																					</tr>
																				</thead>
																				<tbody>
																					<?php 
																						
																						foreach ($beauty_consultant as $data) {
																							$productDetails=$this->db->get_where('product_variant',['id'=>$data->variant_id])->row();
																							if(!empty($productDetails->variant_img))
																							{
																								$icons = explode(',', $productDetails->variant_img);
																							}
																						?> 
																						<tr>
																							<td><?= $count?></td> 
																							<td><a href="<?= base_url('Admin/ManageProduct/ViewProduct/'.$data->product_id)?>"><img src="<?= base_url('uploads/product/') . $icons[0]; ?>" width="60" height="60"></a></td>
																							<?php
																								$uid =  $data->userid;
																								$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
																							?>
																							<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$uid)?>" class="badge badge-primary"><?= $uDetails->name ?></a><?= $data->email_id?></br><?= $data->mobile ?></td>
																							<td><?= $data->schedule_date?>(<?= $data->schedule_time?>)<br><span class="badge <?php if($data->schedule_status=='pending'){echo 'badge-warning';}elseif($data->schedule_status=='rejected'){echo 'badge-danger';}else{echo 'badge-success';}?>"><?=$data->schedule_status?></span></td>
																							<td><?= $data->consultant_name?></td>
																							<td><a href="<?= $data->consultation_links?>"><?= $data->consultation_links?></a></td>
																						</tr>
																					<?php $count++;}  ?>
																				</tbody>
																			</table>
																		<?php } ?>
																		<?php 
																			$count = 1;
																			$orderid=$order->orderid;
																			$product_id=$this->db->query("select product_id from tbl_cart where orderid='$orderid';")->result();
																			$id = array_map(function($result) {
																				return $result->product_id;
																			}, $product_id);
																			$product_review=$this->db->where_in('product_id',$id)->get('tbl_review',['review_type'=>'product'])->result();
																			if (!empty($product_review)) {	
																				
																				$permission_feedback='';
																				$role_type='admin';
																				if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
																					$permission_feedback=$this->permissionAuth->feedback;
																					$role_type='subadmin';
																				}
																			?>
																			
																			<table class="table-sm table-responsive table-striped table-bordered mt-1" style="width:100%;">
																				<thead>
																					<tr style="background-color:lavender;">
																						<th colspan="7">Product Review</th>	
																					</tr>
																					<tr>
																						<th>#</th>
																						<?php if(($role_type=='subadmin' && $permission_feedback->approval) || $role_type=='admin'){?><th>Action</th><?php } ?>
																						<th>Product Name</th>
																						<th>Star Ratings</th>
																						<th>Review Title-Message</th>
																						<th>Created Date</th>
																						<th>Modified Date</th> 
																					</tr>
																				</thead>
																				<tbody>
																					<?php $srno=1; foreach ($product_review as $item){ ?>
																						<tr>
																							<td><?= $srno; ?></td>
																							<?php if(($role_type=='subadmin' && $permission_feedback->approval) || $role_type=='admin'){?>
																								<td>
																									<select class="form-control" style="height: 28px;  appearance: auto; padding: 0;" onchange="UpdateStatus('<?= $item->id?>',this.value)">
																										<option selected disabled>new</option>
																										<option value="published" <?php if($item->is_status=='published'){echo 'selected disabled';}?>>Published</option>
																										<option value="unpublished" <?php if($item->is_status=='unpublished'){echo 'selected disabled';}?>>Unpublished</option>
																										<option value="deleted" <?php if($item->is_status=='deleted'){echo 'selected disabled';}?>>Trashed</option>
																										<option value="drafted" <?php if($item->is_status=='drafted'){echo 'selected disabled';}?>>Drafted</option>
																									</select>
																								</td>
																							<?php } ?>
																							<td>
																								<?php
																									if($item->is_combo=='false'){
																										$product=$this->db->get_where('products',array('id'=> $item->product_id))->row();
																										if(!empty($product)){
																											echo $product->name;
																										}
																									}
																									else{
																										$product=$this->db->get_where('tbl_combo',array('id'=> $item->product_id))->row();
																										if(!empty($product)){
																											echo $product->name;
																										} 
																									}
																								?>
																							</td>
																							<?php if($this->uri->segment(3)=='VendorReview'){
																								$vendor_details=$this->db->get_where('tbl_vendor',['id'=>$item->vendor_id])->row();
																								if(!empty($vendor_details)){
																								?>
																								<td><a href="<?= base_url('Admin/ManageVendor/VendorFullDetails/'.$item->vendor_id)?>" target="_blank" class="badge badge-primary"><?= $vendor_details->name; ?></a></td>
																							<?php } } ?>
																							<td><?= $item->rating; ?></td>
																							<td>
																								<strong><?= $item->review_title; ?></strong></br>
																								<?= $item->review_message; ?> 
																							</td>
																							<td><?= $item->created_at; ?></td>
																							<td><?= $item->modified_at; ?></td>
																						</tr>
																					<?php $srno++; } ?>
																				</tbody>
																			</table>
																		<?php } ?>
																		<?php 
																			$count = 1;
																			$orderid=$order->orderid;
																			$product_id=$this->db->query("select product_id from tbl_cart where orderid='$orderid';")->result();
																			$id = array_map(function($result) {
																				return $result->product_id;
																			}, $product_id);
																			$vendor_review=$this->db->where_in('product_id',$id)->get_where('tbl_review',['review_type'=>'vendor'])->result();
																			if (!empty($vendor_review)) {	
																				$permission_feedback='';
																				$role_type='admin';
																				if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
																					$permission_feedback=$this->permissionAuth->feedback;
																					$role_type='subadmin';
																				}
																			?>
																			<table class="table-sm table-responsive table-striped table-bordered mt-1" style="width:100%;">
																				<thead>
																					<tr style="background-color:lavender;">
																						<th colspan="8">Vendor Review</th>	
																					</tr>
																					<tr>
																						<th>#</th>
																						<?php if(($role_type=='subadmin' && $permission_feedback->approval) || $role_type=='admin'){?><th>Action</th><?php } ?>
																						<th>Product Name</th>
																						<th>Vendor Name</th>
																						<th>Star Ratings</th>
																						<th>Review Title-Message</th> 
																						<th>Created Date</th>
																						<th>Modified Date</th> 
																					</tr>
																				</thead>
																				<tbody>
																					<?php $srno=1; foreach ($vendor_review as $item){ ?>
																						<tr>
																							<td><?= $srno; ?></td>
																							<?php if(($role_type=='subadmin' && $permission_feedback->approval) || $role_type=='admin'){?>
																								<td>
																									<select class="form-control" style="height: 28px;  appearance: auto; padding: 0;" onchange="UpdateStatus('<?= $item->id?>',this.value)">
																										<option selected disabled>new</option>
																										<option value="published" <?php if($item->is_status=='published'){echo 'selected disabled';}?>>Published</option>
																										<option value="unpublished" <?php if($item->is_status=='unpublished'){echo 'selected disabled';}?>>Unpublished</option>
																										<option value="deleted" <?php if($item->is_status=='deleted'){echo 'selected disabled';}?>>Trashed</option>
																										<option value="drafted" <?php if($item->is_status=='drafted'){echo 'selected disabled';}?>>Drafted</option>
																									</select>
																								</td>
																							<?php } ?>
																							<td>
																								<?php
																									if($item->is_combo=='false'){
																										$product=$this->db->get_where('products',array('id'=> $item->product_id))->row();
																										if(!empty($product)){
																											echo $product->name;
																										}
																									}
																									else{
																										$product=$this->db->get_where('tbl_combo',array('id'=> $item->product_id))->row();
																										if(!empty($product)){
																											echo $product->name;
																										} 
																									}
																								?>
																							</td>
																							<?php 
																								$vendor_details=$this->db->get_where('tbl_vendor',['id'=>$item->vendor_id])->row();
																								if(!empty($vendor_details)){
																								?>
																								<td><a href="<?= base_url('Admin/ManageVendor/VendorFullDetails/'.$item->vendor_id)?>" target="_blank" class="badge badge-primary"><?= $vendor_details->name; ?></a></td>
																							<?php } ?>
																							<td><?= $item->rating; ?></td>
																							<td>
																								<strong><?= $item->review_title; ?></strong></br>
																								<?= $item->review_message; ?> 
																							</td>
																							<td><?= $item->created_at; ?></td>
																							<td><?= $item->modified_at; ?></td>
																						</tr>
																					<?php $srno++; } ?>
																				</tbody>
																			</table>
																		<?php } ?>
																	</div>
														</div>
														<div class="col-sm-4 pl-0">
															<div class="col-sm-12 mt-4 table-responsive">
																<table class="table table-bordered">
																	<style>
																		.table td, .table th {
																		border-bottom: 1px solid #E3EBF3; 
																		padding: 0.75rem 0.75rem;
																		}
																	</style>
																	<tbody>
																		<tr style="background-color:lavender;">
																			<th colspan="4">Coupon/Cashback/Reward Information</th>	
																		</tr>
																		<?php if(!empty($order->couponid)){ ?>
																			<tr>
																				<th>Coupon ID</th>
																				<td>
																					<?php 
																						if($order->giveway_type!='cashback' AND $order->giveway_type!='reward'){ ?>
																						<a href="javascript:void(0);" onclick="BenefitsDetails('tbl_coupon','<?=$order->couponid?>')"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																						<?php }elseif($order->giveway_type=='cashback'){ ?>
																						<a href="javascript:void(0);" onclick="BenefitsDetails('manage_cashback','<?=$order->couponid?>')"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																						<?php }elseif($order->giveway_type=='reward'){?>
																						<a href="javascript:void(0);" onclick="BenefitsDetails('reward_point','<?=$order->couponid?>')"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																					<?php } ?>
																				</td> 
																			</tr>
																		<?php } ?>
																		<tr>
																			<th>Coupon Discount</th>
																			<td>
																				<?php   
																					if(!empty($order->giveway_type) AND ($order->giveway_type!='cashback' AND  $order->giveway_type!='reward')){ 
																						$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$order->couponid])->row();
																						if(!empty($couponDetails)){
																							if($couponDetails->coupon_type=='Discount on minimum purchase' || $couponDetails->coupon_type=='New Customer Coupons' || $couponDetails->coupon_type=='Loyalty coupons'  || $couponDetails->coupon_type=='Get X% or XX rs on prebook order'){
																								if($couponDetails->type=='flat'){
																									$coupon_discount=$couponDetails->discount;
																								}
																								elseif($couponDetails->type=='percent'){
																									$coupon_discount=($TotalProductPrice*$couponDetails->discount)/100;
																									if($coupon_discount>$couponDetails->max_discount){
																										$coupon_discount=$couponDetails->max_discount;
																									}
																								}
																								$auto_apply='true';
																								echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You saved additional '.$coupon_discount.'</span></div>';
																							}
																							elseif($couponDetails->coupon_type=='Free shipping coupon'){
																								$coupon_discount=$shippingCharge;
																								$auto_apply='free shipping'; 
																								echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You Saved Your Shipping Charges</span></div>';
																							}
																							elseif($couponDetails->coupon_type=='Complementary discount coupons')
																							{
																								echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You will get complementry with purchase</span></div>';
																							}
																							elseif($couponDetails->coupon_type=='Buy-one-get-one coupons'){
																								echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">Get extra product with purchase</span></div>';
																							}
																							elseif($couponDetails->coupon_type=='Free gift with purchase'){
																								echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You will get free gift with purchase</span></div>';
																							} 
																						}
																					}
																					else{
																						echo 0;
																					}
																				?>
																			</td>
																		</tr>
																		<tr>
																			<th>Reward Points</th>
																			<td><?=$order->reward?>&nbsp;Coins</td> 
																		</tr>
																		<tr>
																			<th>Cashback</th>
																			<td>&#8377;<?=$order->cashback?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="col-sm-12 ">
																<table class="table-sm table-bordered table-responsive mb-1">
																	<style>
																		.table td, .table th {
																		border-bottom: 1px solid #E3EBF3; 
																		padding: 0.75rem 0.75rem;
																		}
																	</style>
																	<tbody>
																		<tr style="background-color:lavender;">
																			<th colspan="7">Payment Information&nbsp;
																				<span class="badge badge-primary"><?php 
																					if($order->pay_mode=='online'){
																						$pay_details=json_decode(base64_decode($order->payment_response)); 
																						$payMethod=$pay_details->method;
																						echo '('.$order->pay_mode.'->';
																						echo $pay_details->method.'->';
																						if($pay_details->method=='wallet'){
																							echo $pay_details->wallet.')';
																						}
																						elseif($pay_details->method=='upi'){
																							echo $pay_details->vpa.')';
																						}
																						elseif($pay_details->method=='card'){
																							echo $pay_details->card_id.')';
																						}
																						elseif($pay_details->method=='netbanking'){
																							echo $pay_details->bank.')';
																						}
																					}
																				else{ echo "Cash On Delivery(".$order->pay_mode.")";}?>
																				</span>
																			</th>       	   
																		</tr>
																		<tr>
																			<tr>
																				<th>Payment Status</th>
																				<td>
																					<span class="<?php if($order->PaymentStatus=='Success'){echo 'text-success'.' '.'font-weight-bold';}else{echo 'text-danger'.' '.'font-weight-bold';}?>"><?= $order->PaymentStatus ?></span><br>
																					<?php if($order->pay_mode=='online'){?>
																						<b>PaymentID:</b>&nbsp;<?= $order->rzp_paymentid?>
																						<b>RzpOid:</b>&nbsp;<?= $order->rzp_orderid?>
																					<?php } ?>
																				</td>
																			</tr>
																			<tr>
																				<th>Sub Total</th>
																				<td>&#8377;<?=$TotalProductPrice?></td> 
																			</tr>
																			<tr>
																				<th>GST(s)</th>
																				<td>&#8377;<?=$totalIndividualGst?>&nbsp;(included)</td> 
																			</tr>
																			<tr>
																				<th>Shipping Charge</th>
																				<td>&#8377;<?=$shippingCharge?></td> 
																			</tr>
																			<tr>
																				<th>Giftwrap Charge</th>
																				<td>&#8377;<?=$giftWrapCharge?></td>
																			</tr>
																			<tr>
																				<th>Total</th>
																				<td>&#8377;
																					<?php 
																						$total=((int)$TotalProductPrice+(int)$order->shipping_charge+(int)$giftWrapCharge);
																						echo $total;
																					?></td>
																			</tr>
																			<tr>
																				<th>Wallet Used</th>
																				<td>-&#8377;<?=$order->wallet_discount?></td> 
																			</tr>
																			<tr>
																				<th>Coupon Discount</th>
																				<td>-&#8377;<?=$order->coupon_discount?></td>
																			</tr>
																		</tr>
																		<tr>
																			<th>Grand Total</th><td><?php echo "&#8377;".(((int)$TotalProductPrice+(int)$order->shipping_charge+(int)$giftWrapCharge)-((int)$order->coupon_discount+(int)$order->wallet_discount))?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<style>
														#style1{
														-webkit-appearance: none;
														-moz-appearance: none;
														appearance: none;
														backgrount-color: transparent;
														width:28px;
														height: 30px;
														border: none;
														cursor: pointer;
														}
														
														#style1::-webkit-color-swatch{
														border-radius: 50%;
														}
														
														#style1::-moz-color-swatch{
														border-radius: 50%;
														}
													</style>
												<?php }} ?>
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
										<h5 class="modal-title text-white">Show Cancellation Details</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateCancellationRequest'); ?>"  class="addForm">
									<div class="modal-body p-1">
									
									</div>
									<div class="modal-footer d-block p-1">
									<button type="submit" class="btn btn-primary float-right mb-1 addBtn" > <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner addSpin"  style="display:none;"></i></button>
									</div>
									</form>
									</div>
									</div>
									</div>
									<!-- coupon details modal start-->
									<div class="modal fade" id="BenefitsDetails"> 
									<div class="modal-dialog">
									<div class="modal-content border-primary">
									<div class="modal-header bg-primary p-1">
									<h5 class="modal-title text-white">Benefits Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body p-1">
									
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									<?php require APPPATH.'views/Auth/Footer.php';?>
									<?php require APPPATH.'views/Auth/JsLinks.php';?>
									<script>
									var value = [];
									var amount=0;
									function SelectAll(){
									
									if ($('#selectAll').prop("checked")) {
									amount=0;
									$('.selectId').prop('checked',true);
									$('.selectPayment').prop('checked',true);
									
									$('.selectId:checked').each(function(i) {
									value[i] = $(this).val(); 
									});
									$('.selectPayment:checked').each(function(i) {
									amount+= parseInt($(this).val()); 
									});
									
									$('.refund_container').show();
									$('#refund_amount').val(amount);
									}
									else{
									$('.selectId').prop('checked', false);
									$('.selectPayment').prop('checked',false);
									$('.refund_container').hide();
									$('#refund_amount').val(0);
									amount=0;
									}
									if($('#refund_amount').val()==0){
									$('.refund-btn').attr('disabled',true);
									}else{
									$('.refund-btn').removeAttr('disabled');
									}
									};
									
									function RefundAll(){
									
									if($('#selectAll').prop("checked")){
									$('#selectAll').prop("checked",false);
									}else{
									$('#selectAll').prop("checked",true);
									}
									
									if ($('#selectAll').prop("checked")) {
									amount=0;
									$('.selectId').prop('checked',true);
									$('.selectPayment').prop('checked',true);
									
									$('.selectId:checked').each(function(i) {
									value[i] = $(this).val(); 
									});
									amount= '<?= $total?>';  
									
									$('.refund_container').show();
									$('#refund_amount').val(amount);
									
									}
									else{
									
									$('.selectId').prop('checked', false);
									$('.selectPayment').prop('checked',false);
									$('.refund_container').hide();
									$('#refund_amount').val(0);
									amount=0;
									}
									
									if($('#refund_amount').val()==0){
									$('.refund-btn').attr('disabled',true);
									}else{
									$('.refund-btn').removeAttr('disabled');
									}
									};
									
									function getId(id){
									if($('#selectId-'+id).prop("checked")){ 
									$('#selectPayment-'+id).prop('checked', true);
									if($('#selectPayment-'+id).prop("checked")){ 
									amount+= parseInt($('#selectPayment-'+id).val()); 
									}
									$('#refund_amount').val(amount);
									}
									else{
									$('#selectPayment-'+id).prop('checked', false);
									amount-= parseInt($('#selectPayment-'+id).val());
									$('#refund_amount').val(amount);
									}
									if($('#refund_amount').val()==0){
									$('.refund-btn').attr('disabled',true);
									}else{
									$('.refund-btn').removeAttr('disabled');
									}
									}
									
									
									function CancelView(id) {
									$("#CancelView").modal("show");
									$("#CancelView .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
									$("#CancelView .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/CancelItemDetails/') ?>" + id);
									}
									
									function BenefitsDetails(table,id){
									$("#BenefitsDetails").modal("show");
									$("#BenefitsDetails .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
									$("#BenefitsDetails .modal-body").load("<?php echo base_url($this->data->controller . '/BenefitsDetails/') ?>" +table+"/"+id);
									}
									</script>
									<script>
									function UpdateStatus(id,value) {
									var status = true;
									swal({
									title: "Are you sure?",
									text: "You want "+value+" !", 
									icon: "warning",
									buttons: true,
									dangerMode: true
									}).then((willDelete) => {
									if (willDelete) {
									$.ajax({
									url: "<?php echo base_url("Auth/UpdateReviewStatus"); ?>",
									type: "post",
									data: {
									'id': id,
									'value': value,
									},
									success: function(response) {
									swal(value+" Successfully!", {
									icon: "success",
									});
									location.reload();
									},
									error: function() {
									window.location.reload();
									}
									});
									}
									});
									return status;
									}
									</script>
									</body>
									</html>		
																		