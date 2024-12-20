<?php defined("BASEPATH") or exit("No direct scripts allowed here"); ?>
<?php
	if (isset($action))
	{
		switch ($action) 
		{
			case "Individual";
			if(!empty($list)){
				$product=$this->db->get_where('products',['id'=>$list->product_id])->row();
				$variants=$this->db->get_where('product_variant',['product_id'=>$list->product_id])->result();
				if(!empty($variants)) {
				?>
				<div class="row">
					<div class="col-lg-5 col-md-5 px-3 pb-0">  
						<div class="owl-carousel quick-view-img overflow-hidden d-block" >
							<?php
								$icons = explode(',', $list->variant_img);  
								foreach ($icons as $each) {
								?>
								<img src="<?= base_url('uploads/product/') . $each; ?>" alt="" style="height:100%; width:100%;" >  
								<?php
								}
							?>  
						</div>
					</div>
					<div class=" col-lg-7 col-md-7 px-3 pb-0" style="font-family: 'Inter', sans-serif;">
						
						<div class="col-sm-12 col-12 px-0 ">
							<div class="row">
								<div class="col-sm-12 col-12 ">
									<div class="d-flex justify-content-between pro-desc"><div class="d-flex"><a href=""><h4 class="p-0 m-0 " style="line-height:1; font-weight:600;"><?= $product->title ?></h4></a></div>
										<span class="" style="color:#8340A1;">
											<?php
												$ratingCount=$this->db->select_sum('rating')->get_where('tbl_review',array('product_id'=>$product->id,'is_combo'=>'false','is_status'=>'true'))->row(); 
												$countReview=$this->db->order_by('id','DESC')->get_where('tbl_review',array('product_id'=>$product->id, 'is_combo'=>'false','is_status'=>'true'))->num_rows();
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
						<div class="pro-desc mb-3 mt-2" >   
							<div class="">  
								<div class="product-price-info" >
									<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $product->off_price ?></span> <span class="text-success paragraph" style="font-weight:600;"><?= $product->discount ?> % Off</span> <br>
									<span class="paragraph" style="font-size: 13px;color: #686868;">MRP <del>₹<?= $product->mrp ?></del> <span class="text-success">incl. of all taxes</span> </span>
								</div>
							</div>  
							<hr class="m-0 mt-2 divider" >  
							<form  action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
								<input type="hidden" required name="productid" value="<?= $product->id; ?>">
								<!--select image start-->  
								<div class="row m-0">
									<div class="col-sm-12 col-12  p-0 border-bottom">
										<?php
											if($variants[0]->color != 'NA'){
												$color=$this->db->get_where('tbl_color',array('code'=>$variants[0]->color))->row();
												if(count($variants)==1){
												?>
												<input type="hidden" name="color"  class="color-item sr-only"  value="<?= $variants[0]->color ?>">
												<?php }else{ ?>
												<p class="subheading mb-0 border-top">Select Color</p>
												<span class="text-capitalize"><?php if(!empty($color->name)){echo $color->name;}?></span>
												<div class="owl-carousel   mb-0 panel-body row popup-colors p-2 px-3" style="padding-bottom: 8px; overflow: hidden;">  
													<?php
														
														foreach($variants as $each) {   
															if($each->color != 'NA'){
																$count = 1;
																$icons = explode(',', $each->variant_img);   
															?>
															<a href="<?php echo  base_url('Home/ProductDetails/').$product->id.'/'.$each->id?>"> 
																<input type="radio" name="color" id="color<?= $count ?>" <?php if($each->id==$list->id){echo 'checked';}?> required class="color-item sr-only" data-parsley-required-message="Please select color" value="<?= $each->color ?>">
																<label href="<?php echo  base_url('Home/ProductDetails/').$product->id.'/'.$each->id?>" class="gallery-item <?php if($each->id==$list->id){echo 'selected';}?>" >
																	<img src="<?= base_url('uploads/product/') . $icons[0]; ?>"  style="height:100%; width:100%;"> 
																</label>     
															</a>
															<?php
															}else{ ?>
															<input type="hidden" name="color"  class="color-item sr-only"  value="NA"> 
															<?php 
															} 
															$count++;
														}
													?>
												</div>
											<?php } }else{ ?>  
											<input type="hidden" name="color"  class="color-item sr-only"  value="NA"> 
											<?php  
											} ?>
											
									</div>	
								</div>
								
								<!--select image end-->
								<div class="row ">
									<div class="col-sm-12 col-12 ">
										<?php
											$sizes = explode(',', $list->size);  
											if(!empty($sizes) AND $sizes[0]!='[{"NA":"0"}]'){
											?>
											<hr class="m-0 my-2 divider"><div class="row pt-0">
												<span class="col-sm-10 col-12 d-flex justify-content-between">  
													<label class="subheading mb-0" style="color: #282626 !important;">Select Size</label>
												</span>
												<div class="col-sm-12 col-12">
													<div class="row m-0">
														<div class="col-sm-10 p-0   border-bottom  ">
															<input type="hidden" name="variantid" value="<?= $list->id ?>"> 
															<div class="row m-0 d-flex py-2 popup-size owl-carousel">
																<?php
																	$json=json_decode($list->size);
																	$count = 1;
																	foreach ($json as $each){
																		foreach($each as $size=>$size_stock){
																		?>
																		<span>
																			<input type="radio" name="size" value="<?= $size ?>" <?php if($size_stock<=0){echo 'disabled';}?> id="sizename<?= $count ?>" class="sr-only sizename" data-parsley-required-message="Please select size" required />
																			<label for="sizename<?= $count ?>" class="size-label <?php if($size_stock<=0){echo 'size-buttons-size-button-disabled';}?>" >
																				<a class="sizeBox" style="font-weight: 500;"><?= $size ?></a> 
																				<?php if($size_stock<=0){echo "<span class='size-buttons-size-strike-show'></span>";}?> 
																			</label>
																			<span class="size-buttons-inventory-left <?php if($size_stock<=5 AND $size_stock > 0){echo 'd-block';}else{echo 'd-none';}?>" style="bottom:2px;"><?= $size_stock;?>&nbsp;left</span>
																		</span> 
																		<?php
																		}
																		$count++; 
																	}
																?>
															</div>
															<?php 
																if($this->permission == 'true'){
																	$userid = $this->userData->id;
																	$userCart=$this->db->get_where('tbl_cart',array('userid'=>$userid))->result();
																	if(!empty($userCart)) {
																		foreach($userCart as $userCart){
																			if(in_array($userCart->size,$sizes)){
																				$userPurchaseSize=$userCart->size;
																			}
																		}  
																	}    
																?>
																<?php 
																	if(!empty($userPurchaseSize)){
																	?>
																	<div class="alert my-1 w-100" style="background-color:lightpink!important;color: #222121 !important; border:none !important; font-weight:500; padding:8px !important; font-size: 14px;" role="alert"><i class="fa-solid fa-tape"></i>&nbsp;We recommend&nbsp;<b><?=$userPurchaseSize;?></b>&nbsp; based on your purchase history.</div>
																	<?php } 
																}?>
														</div>
													</div>
												</div>
											</div> 
											<?php }else{ ?> 
											<input type="hidden" name="variantid" value="<?= $list->id ?>"> 
											<input type="hidden" name="size" value="NA"  class="sr-only sizename" required />  
										<?php }?>
									</div>  
								</div>
								<div class="row m-0 w-100 mt-2" id="absoluteButton">
									<div class="col-sm-12 p-0 col justify-content-between  d-flex" id="phoneFixedButton" >
										<button id="" class="btn btn-secondary customBtn1 w-100">Add To Bag<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none; line-height:1;"></i></button>&emsp;
										<button type="button" onclick="AddToWishlist(<?= $list->id ?>) " class="btn btn-secondary customBtn2 w-100" style="line-height:1;">Wishlist</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> 
			</div>
		</div>
		<?php 
		} }
		break;
		case "Combo";
?>
<div class="row">
	<div class="col-lg-5 col-md-5 px-3 pb-0">  
		<div class="owl-carousel quick-view-img overflow-hidden d-block" >
			<?php
				$icons = explode(',', $list->image);  
				
				foreach ($icons as $each) {
				?>
				<img src="<?= base_url('uploads/product/') . $each; ?>" alt="" style="height:100%; width:100%;" >  
				<?php
				}
			?>  
		</div>
	</div>
	<div class=" col-lg-7 col-md-7 px-3 pb-0" style="font-family: 'Inter', sans-serif;">
		
		<div class="col-sm-12 col-12 px-0 ">
			<div class="row">
				<div class="col-sm-12 col-12 ">
					<div class="d-flex justify-content-between pro-desc"><div class="d-flex"><a href=""><h4 class="p-0 m-0 " style="line-height:1; font-weight:600;"><?= $list->name ?></h4></a></div><span style="color:#8340A1; margin-right:14px;"><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><i class="bi bi-star-fill biicon"></i><a href="#reviewSection">(218)</a></span></div>
				</div>
				
			</div>
		</div>
		
		<div class="pro-desc mb-3 mt-2" >   
			<div class="">  
				<div class="product-price-info" >
					<span class="paragraph" style="font-weight:600; font-size: 16px;">₹ <?= $list->discount_price ?></span> <span class="text-success paragraph" style="font-weight:600;"><?php (int)$discount=(((int)$list->price-(int)$list->discount_price)/(int)$list->price)*100; echo (int)$discount;?> % Off</span> <br>
					<span class="paragraph" style="font-size: 13px;color: #686868;">MRP <del>₹<?= $list->price?></del> <span class="text-success">incl. of all taxes</span> </span>
				</div>
			</div>  
			<hr class="m-0 mt-2 divider" >  
			<form action="<?php echo base_url($this->data->controller . '/AddToCart/AddCombo'); ?> " method="post" enctype="multipart/form-data" class="addForm">
				<input type="hidden" required name="comboid" value="<?= $list->id; ?>">
				<div class="row mb-3">
					<div class="col-sm-12 col-12">
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
											src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" height="100" width="100"/>
										</div>
									</div>
									<div class="ComboProductCard">
										<a href="" class=""><?=$product->title;?></a>
										<div class="ComboProductCard_options mt-2 d-flex">
											<input type="hidden" value="<?=$each->color;?>"   required data-parsley-required-message="Please select color"  name="color[]">
											<?php   
												$sizes = explode(',', $each->size);
												if(!empty($sizes)){?>
												<div class="ProductOptionDropdown mr-2">
													<input type="hidden" name="variantid[]" value="<?= $each->variant_id ?>">  
													<?php 
														if($sizes[0]=='NA'){ ?>
														<input type="hidden" name="size[]" value="NA">
														<?php }else{?>
														<select class="form-select" style="padding: 4px; border: 1px solid gainsboro; min-width: 90px;" required data-placeholder="Select" data-parsley-required-message="Please select size"   name="size[]"> 
															<option selected disabled >Select Size</option>  
															<?php
																foreach ($sizes as $size) {
																?>
																<option value="<?=$size;?> " ><?=$size?></option>
															<?php } ?>
														</select>
													</div>
												<?php } } ?>
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
				
				<div class="row m-0 w-100 mt-2" id="absoluteButton">
					<div class="col-sm-12 p-0 col justify-content-between  d-flex" id="phoneFixedButton" >
					<button id="" class="btn btn-secondary customBtn1 w-100">Add To Bag<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none; line-height:1;"></i></button>&emsp;
					<button type="button" onclick="AddToWishlist(<?= $list->id ?>) " class="btn btn-secondary customBtn2 w-100" style="line-height:1;">Wishlist</button>
					</div>
					</div>
					
					</form> 
					</div>
					</div> 
					</div>
					</div>
					<?php } 
					}?>	
										