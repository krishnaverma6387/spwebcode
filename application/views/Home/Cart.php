
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Cart</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.btn {
			padding-top: 12px;
			padding-left: 12px;
			padding-right: 18px;
			padding-bottom: 12px;
			}
			.slick-arrow {
			opacity: 2!important;
			}
			.slick-slider:hover .slick-arrow {
			display: block!important;
			background: #8340A1;
			opacity: 1 !important;
			}
			
			
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
			}
			.active{
			color: #8340A1!important;
			}
			.popular-product article .pro-thumb {
			width: 100%!important;
			
			}
			.popular-product article .pro-description{
			border: 0px solid !important;
			}
			
			.popular-product article .pro-thumb .img-fluid {
			display: inherit;
			width: inherit;
			margin-left: auto;
			margin-right: auto;
			height: 400px;
			width: 100%!important;
			}
			.popular-product article .pro-description {
			display: flex;
			align-items: flex-start!important;
			}
			
			.bagicon{
			position: absolute;
			bottom: -4px;
			left: 0px;
			display: block;
			height: 45px;
			line-height: 45px;
			padding: 0 10px;
			z-index:9999;
			}
			
			.baseicons
			{
			display: none;
			z-index: 2 !important;
			position: absolute;
			background: #f7f7f9b5;
			width:92%;
			padding: 10px;
			bottom: 45px;
			line-height: 30px; 
			margin: 0;
			}
			
			
			.popular-product article .pro-thumb:after {
			content: "";
			position: absolute;
			z-index: 1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			border-color: rgba(255, 255, 255, 0.2);
			border-style: solid;
			border-width: 0;
			-webkit-transition-property: border-width;
			transition-property:none;
			-webkit-transition-duration: 0s;
			transition-duration: 0s;
			-webkit-transition-timing-function: none!important;
			transition-timing-function: none!important;
			}
			
			.popular-product article:hover .pro-thumb:after {
			-webkit-transform: none!important;
			transform: none!important;
			border-width: 6px;
			animation: none!important;
			}
			
			
			.slick-prev, .slick-next {
			background:none!important;
			position: absolute;
			top: -30px;
			}
			
			
			.slick-prev:before, .slick-next:before
			{
			color: #8340A1!important;
			}
			.slick-prev{
			left: 93%;
			}
			
			.itemtext{
			font-size:8px!important;
			}
			----------------
			
			#couponsection{
			overflow-y: scroll;
			height: 323px;
			
			}
			#MobileView{
			display:none;
			}
			@media only screen and (max-width: 800px) {
			#MobileView {
			display: block;
			}
			#DesktopView{
			display:none;
			}
			}
			.badge-pink{
			background: #FF1493;
			color:white;
			border-radius: 50px;
			cursor: pointer;
			padding: 5px;   
			}
			
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			.slick-prev{
			left: 95%;
			}
			.bagicon {
			left: 0px;
			z-index: 9;
			}
			.hidecontent{
			display:none;
			}
			#ContinueBtn{
			font-size:10px;
			}
			#chnagebackground{
			background: #E9ECEF!important;
			}
			.slick-prev, .slick-next{
			display:none!important;
			}
			#couponsection{
			overflow-y: scroll;
			height: 323px;
			
			}
			.pro_desc{
			padding: 1px!important;
			}
			
			}
			
			.slick-prev:before {
			content: '←' !important;
			}
			.slick-next:before {
			content: '→'!important;
			}
			
			
		</style>
		
	</head>
	
	<body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fluid"> 
			<nav aria-label="breadcrumb">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Bag</li>
					</ol>
				</div>
			</nav>
		</div> 
		<?php if($this->permission == 'true'){
			if(!empty($list)){	
			?>
			<section class="pro-content cart-content" style="padding-top: 25px;">
				
				<div class="container-fluid"> 
					<div class="row m-0">
						<div class="pro-heading-title" style="padding-bottom: 16px; font-weight: 600">
							<h1>
								<a class="active" href="<?= base_url('Home/Cart') ?>">Bag (<?= count($list)?>)</a> &ensp;
								<a href="<?= base_url('Home/Wishlist') ?>">Wishlist (<?= count($wishlist)?>)</a>
							</h1>
						</div> 
					</div> 
					<div class="row mx-0 mb-5 ">
						<div class="col-sm-5">
							<div class="alert alert-light" role="alert">
								<span style="font-size: 12px; font-weight: 600;">Items in the basket are not reserved until completing the purchase.</span>
							</div>  
						</div>	
					</div>
				</div>
				<?php
					$cartStatus = 'false';	
				?>
				<!-- Popular Products -->
				<section class="pro-content pro-pl-content py-0" id="DesktopView" style="margin-top: -25px;">  
					<div class="container-fluid" >    
						<?php
							$total = 0;
							if(!empty($list)){	 
							?>
							<div class="products-area d-flex justify-content-center" id="disktopView">
								<div class="row owl-carousel cart-carousel mx-2 overflow-hidden "  >   
									<?php
										
										$totalIndividualPrice=0;
										if(!empty($listInd)){ 
											foreach($listInd as $each)
											{	
												$product = $this->db->get_where('products',array('id'=>$each->product_id));
												if($product->num_rows()>0)
												{
													$product = $product->row();
													$icons = explode(',',$product->image1);
													$id = $this->userData->id;
													$variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
													$cart = $this->db->get_where('tbl_cart',array('userid'=>$id,'product_id'=>$each->product_id,'size'=>$each->size))->row();
													if($variant->num_rows()>0)
													{
														$variant = $variant->row();
														$cartprice = $this->db->get_where('products',array('id'=>$cart->product_id))->row();
														
														// code for check sale is available or not on this product 
														$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$cart->product_id,'is_status'=>'true','sale_type'=>'individual'))->row();
														if(!empty($saleProduct)){
															
															$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
															$last_date = date_create(date('Y-m-d H:i:s')); 
															$today = date_create($tblSale->end_date);  
															$date_difference = date_diff($last_date,$today);  
															$days=$date_difference->format('%r%a');
														}
														if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
														{
															$saleRate=$cartprice->mrp;
															$discount=(int)$saleProduct->discount;
															$saleprice=$saleRate - ( ($saleRate/100) * $discount );
															$price=$saleprice;
														}else
														{
															$price = $cartprice->off_price;
														}
														
														if($each->is_giftwrap=='true'){
															$cartGiftWrap=json_decode($each->giftwrap_details);
															$giftwrapid=$cartGiftWrap->giftwrapid;
															$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
															$giftPrice=$giftWrapDetails->price;  
															$total = ($price*$each->qty)+$giftPrice;
															}else{
															$total = $price*$each->qty;
														}
														$totalIndividualPrice+=$total;
														
													?>
													<div class="col-12 col-md-12 col-lg-12">
														<h6><?= $product->name;?></h6>
														<div class="popular-product">
															<article> 
																<div class="pro-thumb"> 
																	<a href="<?= base_url('Home/ProductDetails/'.$each->product_id)?>"  style="z-index:2;">
																		<span class=""><img  style="width:400px!important;height:300px!important;" class="" src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
																	</a>
																	<div class=" row baseicons">
																		<div class="col-sm-12 ">
																			<?php 
																				if($each->is_giftwrap=='true'){
																					echo '<span class="badge badge-pink " style="border-radius: 15px; cursor:pointer;" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap('.$each->id.')">Gift Wrap Added</span>';
																				}
																				else{
																				?>
																				<a href="javascript:void(0)" class="<?php if($product->gift_wrap!='true'){ echo "d-none";}?>" onclick="addGiftwrap(<?= $each->id ?>)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-pink" style="border-radius: 15px;">Gift Wrap</span></a>
																			<?php } ?>
																			<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-pink" style="border-radius: 15px;">Apply Coupon</span></a>
																		</div>
																	</div>
																	<div class="bagicon">
																		<a href="javascript:void(0)"  class="bagicon-btn" ><img src="<?= base_url('public/images/bag-icon.png') ?>" style="height: 30px;"></a>
																	</div>
																</div>
																
																<div class="pro-description row py-0">
																	<div class="col-12">
																		<span class="pro-info" style="font-size:10px; font-weight:600;">
																			<?= $product->title;?>                   
																		</span> <br/>
																		<div class="pro-options mt-1">
																			<div class="size-selection">
																				<div class="input-group item-quantity">
																					<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																					<span class="input-group-btn">
																						<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																							<span class="fas fa-plus"></span>
																						</button>
																						<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																							<span class="fas fa-minus"></span>
																						</button>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="pro-options">
																			<span class="pro-info">
																				<span style="font-weight: 700; font-size: 12px;">₹</span> <?=$total?>                   
																			</span> 
																		</div>
																	</div>	
																	
																	<div class="col-12">
																		<div class="pro-options">
																			<span class="pro-info">
																				<span style="font-weight: 700; font-size: 12px;">Size:</span>&nbsp;<?= $cart->size?>                   
																			</span> </br>
																			<span class="pro-info">
																				<span style="font-weight: 700; font-size: 12px;">Color:</span>&nbsp;<span  style="height:40px; width:40px; border-radius:50%; padding:0px 8px; margin:0 2px; background:<?= $cart->color?>;"></span>                  
																			</span> 
																		</div>
																		
																	</div>
																	
																	<div class="col-12 mt-5">
																		<div class="pro-options">
																			<p class="pro-info mb-0">
																				<a href="javascript:void(0)" title="move to wishlist" class="delete" ><i class="bi bi-suit-heart"></i> Wishlist</a>
																			</p> 
																			<span class="pro-info ">
																				<a href="javascript:void(0)" title="Delete" onclick="return Delete(this,'tbl_cart','id','<?= $each->id; ?>','','')"><i class="bi bi-trash"></i> delete</a>                                              
																			</span> <br/>
																		</div>
																	</div>
																</div>
															</article>
														</div>
													</div>
													<?php
														
													}
												}
											}
										}
									?>
									<!--combo product start-->
									<?php
										$totalComboPrice=0;
										if(!empty($listCombo)){
											foreach($listCombo as $each)
											{
												$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
												if($product->num_rows()>0)
												{
													$product = $product->row();
													$icons = explode(',',$product->image);
													$id = $this->userData->id;
													$cart = $this->db->get_where('tbl_cart',array('userid'=>$id,'product_id'=>$each->product_id,'size'=>$each->size))->row();
													$cartprice = $this->db->get_where('tbl_combo',array('id'=>$cart->combo_id))->row();
													
													// code for check sale is available or not on this product 
													$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$cart->combo_id,'is_status'=>'true','sale_type'=>'combo'))->row();
													if(!empty($saleProduct)){
														
														$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
														$last_date = date_create(date('Y-m-d H:i:s')); 
														$today = date_create($tblSale->end_date);  
														$date_difference = date_diff($last_date,$today);  
														$days=$date_difference->format('%r%a');
													}
													if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
													{	
														$saleRate=$cartprice->price;
														$discount=(int)$saleProduct->discount;
														$saleprice=$saleRate - ( ($saleRate/100) * $discount );
														$price=$saleprice;
													}else
													{
														$price = $cartprice->discount_price;
													}
													
													if($each->is_giftwrap=='true'){
														$cartGiftWrap=json_decode($each->giftwrap_details);
														$giftwrapid=$cartGiftWrap->giftwrapid;
														$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
														$giftPrice=$giftWrapDetails->price;  
														$total = ($price*$each->qty)+$giftPrice;
														}else{
														$total = $price*$each->qty;
													}
													$totalComboPrice+=$total;
													
												?>
												<div class="col-12 col-md-12 col-lg-12">
													<h6><?= $product->name;?></h6>
													<div class="popular-product">
														<article> 
															<div class="pro-thumb"> 
																<a href="<?= base_url('Home/ProductComboDetails/'.$each->combo_id)?>"  style="z-index:2;">
																	<span class=""><img  style="width:400px!important;height:300px!important;" class="" src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
																</a>
																<div class=" row baseicons">
																	<div class="col-sm-12 ">
																		<?php 
																			if($each->is_giftwrap=='true'){
																				echo '<span class="badge badge-pink  p-1" style="border-radius: 15px; cursor:pointer;" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap('.$each->id.')">Gift Wrap Added</span>';
																			}
																			else{
																			?>
																			<a href="javascript:void(0)" class="<?php if($product->gift_wrap!='true'){ echo "d-none";}?>" onclick="addGiftwrap(<?= $each->id ?>)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-pink  p-1" style="border-radius: 15px;">Gift Wrap</span></a>
																		<?php } ?>
																		
																		<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-pink p-1" style="border-radius: 15px;">Apply Coupon</span></a>
																	</div>
																</div>
																<div class="bagicon">
																	<a href="javascript:void(0)" class="bagicon-btn" ><img src="<?= base_url('public/images/bag-icon.png') ?>" style="height: 30px;"></a>
																</div>
															</div>
															
															<div class="pro-description row py-0">
																<div class="col-12">
																	<span class="pro-info" style="font-size:10px; font-weight:600;">
																		Combo Products                  
																	</span> <br/>
																	<div class="pro-options mt-1">
																		
																		<div class="size-selection mb-1">
																			<div class="input-group item-quantity">
																				<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																				<span class="input-group-btn">
																					<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																						<span class="fas fa-plus"></span>
																					</button>
																					
																					<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																						<span class="fas fa-minus"></span>
																					</button>
																					
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																
																<div class="col-12">
																	<div class="pro-options py-1">
																		<span style="font-weight:600;text-transform:uppercase; font-size:12px;">Combo Items: </span><br>
																		<span class="pro-info" style="text-transform: capitalize; font-size:12px;">
																			<?php 
																				$pid=explode(",",$cart->product_id);
																				foreach($pid as $id){
																					$pdata=$this->db->get_where('products',array('id'=>$id))->row();
																					echo $pdata->name."</br>";
																				}
																			?>             
																		</span> 
																	</div>
																	
																	<div class="pro-options">
																		<span class="pro-info">
																			<span style="font-weight: 700;">₹</span> <?=$total?>                   
																		</span> 
																	</div>
																	
																</div>	
																<div class="col-12">
																	<div class="pro-options">
																		<span class="pro-info">
																			<span style="font-weight: 700; font-size: 12px;">Size:</span>&nbsp;<?= $cart->size?>                   
																		</span> </br>
																		<span class="pro-info">
																			<span style="font-weight: 700; font-size: 12px;">Color:</span>&nbsp;
																			<?php 
																				$colors=explode(",",$cart->color);
																				if(!empty($colors))
																				{
																					foreach($colors as $color){
																					?>
																					<span  style="height:40px; width:40px; border-radius:50%; padding:0px 8px; margin:0 2px; background:<?= $color;?>;"></span> 
																					<?php
																					}
																				}?>            
																		</span> 
																	</div>
																	
																</div>
																
																<div class="col-12 mt-1">
																	<div class="pro-options">
																		<p class="pro-info mb-0">
																			<a href="javascript:void(0)" title="move to wishlist" class="delete" ><i class="bi bi-suit-heart"></i> Wishlist</a>
																		</p> 
																		<span class="pro-info ">
																			<a href="javascript:void(0)" title="Delete" onclick="return Delete(this,'tbl_cart','id','<?= $each->id; ?>','','')"><i class="bi bi-trash"></i> delete</a>                                              
																		</span> <br/>
																	</div>
																</div>
															</div>
														</article>
													</div>
												</div>
												<?php
													
												}
											}
										}
									?>
									<!--combo product end-->
								</div>
							</div>
							<?php
							}
						?>
					</div>
				</section> 
				
				<section class="pro-content pro-pl-content" id="MobileView" style="margin-top: -50px;">
					<div class="container" > 
						<?php
							if(!empty($list)){  
								if(count($listInd)>0)
								{	
									foreach($listInd as $each)
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
												
												// code for check sale is available or not on this product 
												$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->product_id,'is_status'=>'true','sale_type'=>'individual'))->row();
												if(!empty($saleProduct)){
													
													$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
													$last_date = date_create(date('Y-m-d H:i:s')); 
													$today = date_create($tblSale->end_date);  
													$date_difference = date_diff($last_date,$today);  
													$days=$date_difference->format('%r%a');
												}
												if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
												{	
													$saleRate=$cartprice->mrp;
													$discount=(int)$saleProduct->discount;
													$saleprice=$saleRate - ( ($saleRate/100) * $discount );
													$price=$saleprice;
												}else
												{
													$price = $cartprice->off_price;
												}
												if($each->is_giftwrap=='true'){
													$cartGiftWrap=json_decode($each->giftwrap_details);
													$giftwrapid=$cartGiftWrap->giftwrapid;
													$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
													$giftPrice=$giftWrapDetails->price;  
													$total = ($price*$each->qty)+$giftPrice;
													}else{
													$total = $price*$each->qty;
												}
												
											?>
											<div class="row mb-5" style="margin:0;">
												<div class="col-sm-12">
													<p><?= $product->name;?></p> 	
												</div>
												<div class="col-7 pl-0">
													<div class="pro-thumb"> 
														<a href="<?= base_url('Home/ProductDetails/'.$each->product_id)?>"  style="z-index:2;">
															<span class=""><img  style="width:400px!important;height:196px!important;" class="" src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
														</a>
														<div class=" row baseicons">
															<div class="col-sm-12 ">
																<?php 
																	if($each->is_giftwrap=='true'){
																		echo '<span class="badge badge-pink  p-1" style="border-radius: 15px; cursor:pointer;" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap('.$each->id.')">Gift Wrap Added</span>';
																	}
																	else{
																	?>
																	<a href="javascript:void(0)" class="<?php if($product->gift_wrap!='true'){ echo "d-none";}?>" onclick="addGiftwrap(<?= $each->id ?>)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-pink  p-1" style="border-radius: 15px;">Gift Wrap</span></a>
																<?php } ?>
																
																<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-pink p-1" style="border-radius: 15px;">Apply Coupon</span></a>
															</div>
														</div>
														<div class="bagicon">
															<a href="javascript:void(0)" class="bagicon-btn" ><img src="<?= base_url('public/images/bag-icon.png') ?>" style="height: 30px;"></a>
														</div>
													</div>
												</div>   
												<div class="col-5 text-uppercase pro_desc" style="font-size: 10px;">
													<div class="row">
														<div class="col-sm-12">
															<span style="font-weight: 600;"><?= $product->title;?>  </span><br>
															<div class="pro-options mt-1">
																
																<div class="size-selection mb-1">
																	<div class="input-group item-quantity">
																		<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																		<span class="input-group-btn">
																			<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																				<span class="fas fa-plus"></span>
																			</button>
																			<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																				<span class="fas fa-minus"></span>
																			</button>
																		</span>
																	</div>
																</div>
															</div>
														</div>	
													</div>
													<div class="row mt-3">
														<div class="col-sm-12 " style="display:flex;align-items:center">
															<span> <span style="font-weight:600;">₹</span>&nbsp;<?= $total ;?></span>  
														</div>	
													</div>
													<div class="row my-3">
														<div class="col-12">
															<div class="pro-options">
																<span class="pro-info">
																	<span style="font-weight:600;">Size:</span>&nbsp;<?= $each->size ?>                   
																</span> </br>
																<span class="pro-info">
																	<span style="font-weight:600;">Color:</span>&nbsp;<span  style="height:40px; width:40px; border-radius:50%; padding:0px 7px; background:<?= $each->color?>;"></span>                  
																</span> 
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-sm-12 " >
															<span><a href="javascript:void(0)"><i class="bi bi-heart"></i> Wishlist</a></span> <br>
															<span><a href="javascript:void(0)" onclick="return Delete(this,'tbl_cart','id','<?= $each->id; ?>','','')"><i class="bi bi-trash"></i> Delete</a></span>
														</div>	
													</div>
													
												</div>
											</div>
											<?php	
											}
										}
									}
								}
							?>
							<!--combo product start-->  
							<?php
								if(!empty($listCombo)){
									
									foreach($listCombo as $each)
									{ 
										$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
										
										if($product->num_rows()>0)
										{
											$product = $product->row();
											$icons = explode(',',$product->image);
											$id = $this->userData->id;
											// $variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
											
											$cart = $this->db->get_where('tbl_cart',array('userid'=>$id,'product_id'=>$each->product_id,'size'=>$each->size))->row();
											
											
											// $variant = $variant->row();
											$cartprice = $this->db->get_where('tbl_combo',array('id'=>$cart->combo_id))->row();
											// code for check sale is available or not on this product 
											$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$cart->combo_id,'is_status'=>'true','sale_type'=>'combo'))->row();
											if(!empty($saleProduct)){
												
												$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
												$last_date = date_create(date('Y-m-d H:i:s')); 
												$today = date_create($tblSale->end_date);  
												$date_difference = date_diff($last_date,$today);  
												$days=$date_difference->format('%r%a');
											}
											if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
											{	
												$saleRate=$cartprice->price;
												$discount=(int)$saleProduct->discount;
												$saleprice=$saleRate - ( ($saleRate/100) * $discount );
												$price=$saleprice;
											}else
											{
												$price = $cartprice->discount_price;
											}
											
											if($each->is_giftwrap=='true'){
												$cartGiftWrap=json_decode($each->giftwrap_details);
												$giftwrapid=$cartGiftWrap->giftwrapid;
												$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
												$giftPrice=$giftWrapDetails->price;  
												$total = ($price*$each->qty)+$giftPrice;
												}else{
												$total = $price*$each->qty;
											}
											
										?>
										<div class="row mb-5" style="margin:0;">
											<div class="col-sm-12">
												<p><?= $product->name;?></p> 	
											</div>
											<div class="col-7 pl-0">
												<div class="pro-thumb"> 
													<a href="<?= base_url('Home/ProductDetails/'.$each->combo_id)?>" style="z-index:2;">
														<span class=""><img  style="width:400px!important;height:196px!important;" class="" src="<?= base_url('uploads/product/').$icons[0]; ?>" alt="Product Image"></span>
													</a>
													<div class=" row baseicons">
														<div class="col-sm-12 ">
															<?php 
																if($each->is_giftwrap=='true'){
																	echo '<span class="badge badge-pink  p-1" style="border-radius: 15px; cursor:pointer;" data-toggle="modal" data-target="#GiftWrapDetailModal" onclick="ShowGiftWrap('.$each->id.')">Gift Wrap Added</span>';
																}
																else{
																?>
																<a href="javascript:void(0)" class="<?php if($product->gift_wrap!='true'){ echo "d-none";}?>" onclick="addGiftwrap(<?= $each->id ?>)"  data-toggle="modal" data-target="#GiftWrapModal" ><span class="badge badge-pink  p-1" style="border-radius: 15px;">Gift Wrap</span></a>
															<?php } ?>
															<a href="javascript:void(0)" data-toggle="modal" data-target="#CouponModal" ><span class="badge badge-pink p-1" style="border-radius: 15px;">Apply Coupon</span></a>
														</div>
													</div>
													<div class="bagicon">
														<a href="javascript:void(0)" class="bagicon-btn" ><img src="<?= base_url('public/images/bag-icon.png') ?>" style="height: 30px;"></a>
													</div>
												</div>
											</div>     
											<div class="col-5 text-uppercase pro_desc" style="font-size: 10px;">
												<div class="pro-description row py-0">
													<div class="col-12">
														<span class="pro-info" style="font-size:10px; font-weight:600;">
															Combo Products                  
														</span> <br/>
														
														<div class="pro-options mt-1">
															
															<div class="size-selection mb-1">
																<div class="input-group item-quantity">
																	<input type="text" id="quantity1" name="quantity" class="form-control" value="<?= $each->qty?>" style="font-size:10px;">
																	<span class="input-group-btn">
																		<button type="button" value="quantity1" onclick="UpdateQty('<?= $each->id?>','plus',<?= $each->qty?>)" class="quantity-plus btn" data-type="plus" data-field="">
																			<span class="fas fa-plus"></span>
																		</button>
																		
																		<button type="button" value="quantity1" class="quantity-minus btn" <?php if($each->qty <= 1){ echo "disabled";} ?> onclick="UpdateQty('<?= $each->id?>','minus',<?= $each->qty?>)" data-type="minus" data-field="">
																			<span class="fas fa-minus"></span>
																		</button>
																	</span>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-12">
														<div class="pro-options py-1">
															<span style="font-weight:600;text-transform:uppercase; font-size:12px;">Combo Items: </span>
															<span class="pro-info" style="text-transform: capitalize; font-size:12px;">
																<?php 
																	$pid=explode(",",$cart->product_id);
																	foreach($pid as $id){
																		$pdata=$this->db->get_where('products',array('id'=>$id))->row();
																		echo $pdata->name."</br>";
																	}
																?>             
															</span> 
														</div>
														
														<div class="pro-options">
															<span class="pro-info">
																<span style="font-weight: 700;">₹</span> <?=$total?>                   
															</span> 
														</div>
														
													</div>	
													<div class="col-12">
														<div class="pro-options">
															<span class="pro-info">
																<span style="font-weight: 700; font-size: 12px;">Size:</span>&nbsp;<?= $each->size?>                   
															</span> </br>
															<span class="pro-info">
																<span style="font-weight: 700; font-size: 12px;">Color:</span>&nbsp;
																<?php 
																	$colors=explode(",",$each->color);
																	if(!empty($colors))
																	{
																		foreach($colors as $color){
																		?>
																		<span  style="height:40px; width:40px; border-radius:50%; padding:0px 7px; margin:0 2px; background:<?= $color;?>;"></span> 
																		<?php
																		}
																	}?>            
															</span> 
														</div>
														
													</div>
													
													<div class="col-12 mt-1">
														<div class="pro-options">
															<p class="pro-info mb-0">
																<a href="javascript:void(0)" title="move to wishlist" class="delete" style="font-size: 10px; font-weight: 500;"><i class="bi bi-suit-heart"></i> Wishlist</a>
															</p> 
															<span class="pro-info ">
																<a href="javascript:void(0)" title="Delete" onclick="return Delete(this,'tbl_cart','id','<?= $each->id; ?>','','')" ><i class="bi bi-trash"></i> delete</a>                                              
															</span> <br/>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php
											
										}
									}
								}
							}
						?>
						<!--combo product end-->
						
					</div>
				</section>
				
				<div class="row m-3">
					<div class="col-sm-4 col-12">
						<a href="<?= base_url('Home/') ?>" id="ContinueBtn" class="btn btn-secondary  hvr-wobble-horizontal"><i class="fa fa-angle-left"></i>Continue Shopping</a>
					</div> 
					
				</div>
				
				<div class="container" id="chnagebackground">
					<div class="row  my-3 mr-auto  " id="footerab" style="position: relative">
						<!--div class="col-sm-4 p-3 hidecontent"></div>	
						<div class="col-sm-4 p-3 hidecontent"></div-->	
						<div class="col-sm-4 p-3 bg-light ml-auto">
							<div class="row">
								<div class="col-sm-5 col-6">
									<?php
										$totalPrice = 0;
										if(!empty($totalComboPrice)){
											$totalPrice+=$totalComboPrice;
										}
										if(!empty($totalIndividualPrice)){
											$totalPrice+=$totalIndividualPrice;
										}
									?>	
									<span>Total :  ₹<?=$totalPrice ?> </span> <br>  
									<span class=" ml-2" style="font-size: 7px;">INCLUDING GST</span> <br>
									<span class="ml-1" style="font-size: 7px;">- EXCL SHIPPING COST</span>
								</div>   
								<div class="col-sm-7 col-6"> 
									<a href="<?= base_url('Home/Checkout') ?>" id="ContinueBtn" class="btn btn-secondary  hvr-wobble-horizontal">Continue &ensp;<i class="fa fa-angle-right"></i></a>
								</div>  
							</div>
						</div>	
					</div>
				</div>
				
				
				<div class="container-fluid" >
					<div class="products-area">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-12">
								<div class="pro-heading-title">
									<h2 class="text-uppercase">YOU MAY ALSO LIKE</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-md-12">
								<div role="tabpanel" class="tab-pane fade active show" id="featured">   
									<div class="tab-carousel-js row">
										<div class="col-6 col-md-4 col-lg-3 ">
											<div class="product aos-init aos-animate ">
												<article>
													<div class="pro-thumb ">
														<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://static.zara.net/photos///2022/I/0/1/p/8741/256/250/2/w/452/8741256250_6_1_1.jpg?ts=1660751185029" alt="Product Image"></span>
															
														</a>
													</div>
													<div class="pro-description text-center">
														<span class="pro-info">
															Ring Collection
														</span>
														<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Austrian Crystals Jewelry Engagement Ring</a></h2>
														<div class="pro-btns">
															<a href="<?= base_url("Home/ProductDetails") ?>" type="button"  class="btn btn-block btn-secondary swipe-to-top">Pre Book</a>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-3">
											<div class="product">
												<article>
													<div class="pro-thumb ">
														<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
															<span class="pro-image"><img class="img-fluid lazy" data-src="https://static.zara.net/photos///2022/I/0/1/p/8741/256/656/2/w/452/8741256656_6_1_1.jpg?ts=1660115811624" src="<?= $this->data->lazyLoader;?>" alt="Product Image"></span>
														</a>
													</div>
													<div class="pro-description text-center">
														<span class="pro-info">
															Ring Collection
														</span>
														<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Austrian Crystals Jewelry Engagement Ring</a></h2>
														<div class="pro-btns">
															<a href="<?= base_url("Home/ProductDetails") ?>" type="button"  class="btn btn-block btn-secondary swipe-to-top">Pre Book</a>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-3">
											<div class="product">
												<article>
													<div class="pro-thumb ">
														<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
															<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/product_images_demo_2/product_image_03.jpg" alt="Product Image"></span>
															
														</a>
													</div>
													<div class="pro-description text-center">
														<a href="<?= base_url('Home/ProductDetails') ?>">
															<span class="pro-image"><img class="img-flui class="pro-info">
																Ring Collection1
															</span>
															<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Crytal Wedding Engagement Rings</a></h2>
															<div class="pro-btns">
																<a href="<?= base_url('Home/ProductDetails') ?>" type="button"  class="btn btn-secondary btn-block  swipe-to-top" >Pre Book</a>
																
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="col-6 col-md-4 col-lg-3">
												<div class="product">
													<article>
														<div class="pro-thumb ">
															<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
																<span class="pro-image"><img class="img-fluid lazy" data-src="<?= base_url('public/') ?>images/product_images_demo_2/product_image_04.jpg" src="<?= $this->data->lazyLoader;?>" alt="Product Image"></span>
																
															</a>
														</div>
														<div class="pro-description text-center">
															<span class="pro-info">
																Ring Collection
															</span>
															<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Austrian Crystals Jewelry Engagement Ring</a></h2>
															<div class="pro-btns">
																<a href="<?= base_url("Home/ProductDetails") ?>" type="button"  class="btn btn-block btn-secondary swipe-to-top">Pre Book</a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="col-6 col-md-4 col-lg-3">
												<div class="product">
													<article>
														<div class="pro-thumb ">
															<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
																<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/product_images_demo_2/product_image_05.jpg" alt="Product Image"></span>
																
															</a>
														</div>
														<div class="pro-description text-center">
															<span class="pro-info">
																Ring Collection
															</span>
															<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Austrian Crystals Jewelry Engagement Ring</a></h2>
															<div class="pro-btns">
																<a href="<?= base_url("Home/ProductDetails") ?>" type="button"  class="btn btn-block btn-secondary swipe-to-top">Pre Book</a>
															</div>
														</div>
													</article>
												</div>
											</div>
											<div class="col-6 col-md-4 col-lg-3">
												<div class="product">
													<article>
														<div class="pro-thumb ">
															<a href="<?= base_url('Home/ProductDetails') ?>" class="indexpart">
																<span class="pro-image"><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/product_images_demo_2/product_image_06.jpg" alt="Product Image"></span>
															</a>
															<div class="pro-tag">Sale</div>
														</div>
														<div class="pro-description text-center">
															<span class="pro-info">
																Ring Collection
															</span>
															<h2 class="pro-title"><a href="<?= base_url('Home/ProductDetails') ?>">Austrian Crystals Jewelry Engagement Ring</a></h2>
															<div class="pro-btns">
																<a href="<?= base_url("Home/ProductDetails") ?>" type="button"  class="btn btn-block btn-secondary swipe-to-top">Pre Book</a>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				
			</section> 
			<?php
			} 
			else
			{
			?>
			<div class="row m-0">
				<div class="col-sm-3 mx-auto shadow-lg " style="display:flex; flex-direction:column;align-items:center;">
					<img src="<?= base_url('public/images/shipping_bag.jpg') ?>" class="img-fluid w-75" >
					<h4 class="text-center mt-3">Your Shopping cart is empty!</h4>
					<p class="text-center mt-2">Look like you haven't added anythig to your cart Let's change that.</p>
					<p class="text-center"><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary">Add Items From Wishlist</a></p>
				</div>  
			</div>
			<?php
			} }else{ ?>
			<div class="row m-0">
				<div class="col-sm-3 mx-auto shadow-lg " style="display:flex; flex-direction:column;align-items:center;">
					<img src="<?= base_url('public/images/shipping_bag.jpg') ?>" class="img-fluid w-75" >
					<h4 class="text-center mt-3">Your Shopping cart is empty!</h4>
					<p class="text-center mt-2">Look like you haven't added anythig to your cart Let's change that.</p>
					<p class="text-center"><a href="<?= base_url('Home/Wishlist') ?>" class="btn btn-secondary">Add Items From Wishlist</a></p>
				</div>  
			</div>
		<?php } ?>
		
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
											<a href="#"><span class="input-group-text text-danger" id="basic-addon2">CHECK</span></a>
										</div>
									</div>  
								</div>  
							</div>	
						</div>
						<div class="row">
							<div class="col-sm-12" id="couponsection">
								<div class="p-3" style="border-bottom: 1px solid #ddd;">
									<input type="checkbox" id="1" name="drone" value="huey"
									checked>
									<label for="1" class="font-weight-bold">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3" style="border-bottom: 1px solid #ddd;">
									<input type="checkbox" id="2" name="drone" value="huey"
									>
									<label for="2" class="font-weight-bold">SLICKPATTERN200</label> <br>
									<span>Save ₹200</span> <br>
									<span> Rs. 200 off on minimum purchase of Rs. 599 .</span> <br>
									<span> Expires on: 31st December 2022 | 11:59 PM</span> <br>
								</div>
								<div class="p-3">
								<input type="checkbox" id="3" name="drone" value="huey">
								<label for="3"class="font-weight-bold">SLICKPATTERN200</label> <br>
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
								<!--gift wrap modal--->
								<div class="modal fade modal-" id="GiftWrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document"> 
								<div class="modal-content">
								<div class="modal-header" style="border:none;">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body py-0">
								<div class="row">
								<div class="col-sm-6">
								<div class="mb-2">
								<span class="text-uppercase">Gift Wrapping</span><br> 
								<span class="font-weight:bold"><h3 class="mb-0">Make It Special</h3></span>
								</div>
								<form action="<?= base_url($this->data->controller . '/' . $this->data->method . '/AddGiftWrap')?>" class="addForm" method="POST" > 
								<div class="mb-4">
								<input type="hidden" id="cart-item-id" name="id">
								<div class="gift-wrap-slider owl-carousel m-0 overflow-hidden">
								<?php 
								if(!empty($giftwrap)){
								$count=0;
								foreach($giftwrap as $giftcard){
								?>
								<div class="mx-1 couponcontainer-fluid" >   
								<div class="row m-0" style="min-height:120px; min-width:120px; "> 
								<input type="radio" id="giftwrap<?=$count;?>" value="<?= $giftcard->id ?>" class="sr-only" name="giftwrapid" required > 
								<label class="col-sm-12 p-0 gift-wrap-label" for="giftwrap<?=$count;?>"> 
								<img src="<?= base_url('uploads/giftcard/').$giftcard->image ?>" class="gift-wrap-image" style="height:100px; width:100%" />
								</label>
								<div class="col-sm-12 p-0  d-flex justify-content-between" style="color:black;" > 
								<span style="font-weight:500;"><?= $giftcard->name; ?></span>     
								<span class="coupon-copy-btn"  style="font-weight:500;cursor:pointer;">Rs-<?= $giftcard->price?></span>  
								</div>          
								</div>
								</div>
								<?php $count++; } } ?>
								</div>
								</div>
								<div class="form-group">
								<input type="text" name="recipientName" class="form-control form-control-lg" placeholder="Recipient Name">     
								</div>
								<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Message(200/200)" rows="3" style="border-radius:3px;min-height:100px;"></textarea>    
								</div>
								<div class="form-group">
								<input type="text" name="senderName" class="form-control form-control-lg" placeholder="Sender Name">       
								</div>
								<div class="form-group">
								<button class="btn btn-secondary btn-block" id="addBtn"><i class="fa fa-check-circle"></i>Add Giftwrap&nbsp;<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>	   
								</div>
								</form>
								</div>	
								<div class="col-sm-6 d-flex flex-column"> 
								<div class="mt-5">
								<h6 class="mt-3">HOW DOES IT WORKS?</h6> 
								<div class="row mt-2">
								<div class="col-3 ">
								<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-card.webp" class="img-fluid" style="height: 45px;"></center>
								</div>	
								<div class="col-9">
								<span class="font-weight-bold">Personalised card</span>  <br>
								<small>Your message will be printed on a card placed inside the package.</small>
								</div>	
								</div>
								<div class="row mt-2">
								<div class="col-3 ">
								<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-invoice.webp" class="img-fluid" style="height: 45px;"></center>
								</div>	
								<div class="col-9">
								<span class="font-weight-bold">Invoice will be included</span>  <br>
								<small>The receiver will get an invoice showing the amount you pay or the discount applied.</small>
								</div>	
								</div>
								<div class="row mt-2">
								<div class="col-3 ">
								<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-tag.webp" class="img-fluid" style="height: 45px;"></center>
								</div>	
								<div class="col-9">
								<span class="font-weight-bold">Original product tags will be retained</span>  <br>
								<small>Original product tags with MRP will be left intact in-case you’d like to exchange for a different size.</small>
								</div>	
								</div>
								<div class="row m-2">
								<label ><span class="text-danger font-weight-bold">Please Note: </span><span>Gift wrapping is not available for Pay on Delivery orders.</span><br><span>Gift wrapping price will be added in your product price.</span></label>
								</div>
								</div>
								</div>
								</div>
								
								</div>
								</div>
								</div>
								</div>
								<div class="modal fade " id="GiftWrapDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document"> 
								<div class="modal-content">
								<div class="modal-header" style="border:none;">
								<strong class="text-uppercase">Gift Wrapping Details</strong>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body py-0">
								</div>
								</div>
								</div>
								</div>
								
								<?php include('include/jsLinks.php'); ?>
								<script>
								$('.bagicon-btn').click(function(){
								$(this).parent().parent().find('.baseicons').toggle();
								})
								
								$('.cart-carousel').owlCarousel({
								loop:false,
								autoplay:false,
								nav:true,
								dots:false,
								responsive:{
								0:{
								items:1,
								
								},  
								460:{
								items:2, 
								},
								1024:{
								items:3,  
								},
								},
								navText: [ 
								'<i class="fa-solid fa-angle-left " style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 30px; left:15px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 3px 0 0 3px;"></i>',
								'<i class="fa-solid fa-angle-right" style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 30px; left:-35px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 0 3px 3px 0px;"></i>'
								]
								
								})
								
								
								function UpdateQty(cartid,type,qty){
								$.ajax({
								url: "<?php echo base_url("Auth/UpdateCartQty"); ?>",
								type: "post",
								data: {
								'id': cartid,
								'type': type,
								'qty': qty,
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
								} 	
								$('.gift-wrap-slider').owlCarousel({  
								loop: false, 
								autoplay: false,  
								nav: true,
								dots: false,
								margin: 0,
								responsive: {
								0: {
								items: 1,
								
								},
								460: {
								items: 1.5,
								},
								1024: {
								items: 2,
								},
								},
								navText: [
								'<i class="fa-solid fa-angle-left" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>',
								'<i class="fa-solid fa-angle-right" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>'
								],
								// navcontainer-fluid: '.main-content .custom-nav',
								})
								
								$(document).ready(function(){
								$('.gift-wrap-label').click(function(){
								$('.gift-wrap-label').removeClass('active');
								$(this).addClass('active');
								})
								})
								
								function addGiftwrap(id){
								$('#cart-item-id').val(id);
								}
								function ShowGiftWrap(id) {
								jQuery("#GiftWrapDetailModal").modal("show"); 
								jQuery("#GiftWrapDetailModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
								jQuery("#GiftWrapDetailModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/ShowGiftWrap/') ?>" + id);
								}
								</script>
								</body>
								</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													