<!-- tile view start-->
<div class="col-lg-12 product-card-view p-0" id="tile-view">
	<div class="products mb-3">
		
		<div class="row justify-content-center filter-data">
			<?php
				$sr = 1;
				
				foreach($productDetails as $each)
				{
					$icons = explode(',',$each->image1);
					
				?>
				<div class="col-6 col-md-4 col-lg-4 col-xl-4 tile-view-card" >
					<div class="product product-7 text-center "  >  
						<figure class="product-media">  
							<?php if((int)$each->off_price!=(int)$each->mrp){ ?>
								<span class="product-label label-primary">SALE&nbsp;<?=(int)$each->discount?>%OFF</span>
							<?php } ?>
							<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>">
								<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>"  class="product-image  ">
								<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
							</a>
							
							<div class="product-action-vertical">  
								<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>)"><span>add to wishlist</span></a>
								<a href="javascript:void(0)" class="btn-product-icon btn-quickview" title="Quick view" onclick="quickView(<?= $each->id; ?>,'Individual')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
								<a href="<?= base_url('Home/Compare')?>" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
							</div><!-- End .product-action-vertical -->
							
							
							<div class="container hide_in_mobile" id="app">
								<div class="product-action">
									<!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
									<a href="javascript:void(0)" class="btn-product btn-cart"  style="font-size:12px;">Quick Add</a>
								</div><!-- End .product-action -->
								<div class="add-product" style="z-index:1;">
									<form action="<?php echo base_url($this->data->controller.'/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
										<input type="hidden" required name="productid" value="<?= $each->id; ?>">
										<div style="min-height:170px; display:flex; flex-direction: column; justify-content: space-evenly;">  
											<div class="d-flex justify-content-between" style="padding: 5px 5px; cursor:pointer;"><b>Select size</b><b class="closeQuickAdd"><i class="fa-solid fa-xmark"></i></b></div>
											<div class="form--field product-nav-size">
												<?php  
													$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
													$sizes=explode(",",$data->size);
													if(!empty($data->size)){
														$count=1;
														
													?> 
													<input type="hidden" name="variantid" value="<?= $data->id ?>">  
													<label class="sizeContainer active<?php if(!in_array('S',$sizes)){echo 'disabled';} ?>"  for="size-tile1<?=$sr;?>" >S<?php if(!in_array('S',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class="sr-only " name="size"  id="size-tile1<?=$sr;?>" <?php if(!in_array('S',$sizes)){echo 'disabled';} ?> value="S" required>
													
													
													<label class="sizeContainer <?php if(!in_array('M',$sizes)){echo 'disabled';} ?>" for="size-tile2<?=$sr;?>" >M<?php if(!in_array('M',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class="sr-only" name="size"  id="size-tile2<?=$sr;?>" <?php if(!in_array('M',$sizes)){echo 'disabled';} ?> value="M" required>
													
													
													<label class="sizeContainer <?php if(!in_array('L',$sizes)){echo 'disabled';} ?>" for="size-tile3<?=$sr;?>" >L<?php if(!in_array('L',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class=" sr-only" name="size"  id="size-tile3<?=$sr;?>" <?php if(!in_array('L',$sizes)){echo 'disabled';} ?> value="L" required>
													
													
													<label class="sizeContainer <?php if(!in_array('XL',$sizes)){echo 'disabled';} ?>" for="size-tile4<?=$sr;?>" >XL<?php if(!in_array('XL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class=" sr-only" name="size"  id="size-tile4<?=$sr;?>" <?php if(!in_array('XL',$sizes)){echo 'disabled';} ?> value="Xl" required>
													
													
													<label class="sizeContainer <?php if(!in_array('XXL',$sizes)){echo 'disabled';} ?>" for="size-tile5<?=$sr;?>" >XXL<?php if(!in_array('XXL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class=" sr-only" name="size"  id="size-tile5<?=$sr;?>" <?php if(!in_array('XXL',$sizes)){echo 'disabled';} ?> value="XXL" required>
													
													
													<label class="sizeContainer <?php if(!in_array('XXXL',$sizes)){echo 'disabled';} ?>" for="size-tile6<?=$sr;?>" >XXXL<?php if(!in_array('XXXL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
													<input type="radio" class=" sr-only" name="size"  id="size-tile6<?=$sr;?>" <?php if(!in_array('XXXL',$sizes)){echo 'disabled';} ?> value="XXXL" required>
													
												<?php } ?>
												
											</div><!-- product-nav-size-->
											<div class="d-flex justify-content-between" style="padding: 5px 5px; cursor:pointer;"><b>Select Color</b></div>
											<div class="product-nav-color product-nav-dots m-0 px-1">
												<?php 
													$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
													$colors=explode(",",$data->color);
													if(!empty($data->color)){
														$count=1;
														foreach($colors as $color)
														{ $uniqueId=$count.$sr;
														?>
														<input type="radio" name="color" id="color-tile<?= $uniqueId ?>" required class="color-item sr-only" value="<?= $color ?>">
														<label for="color-tile<?= $uniqueId ?>" class="<?php if($count==1){echo 'active';} ?> m-0" style="height:18px; width:18px; cursor:pointer; border-radius:50%;  background:<?= $color?>"></label>
														<?php
															$count++;     
														}
													?>
													
													<?php
													} 
												?>
												
											</div><!-- End .product-nav-color -->
										</div>
										<button type="submit" class="submit-button " style="width:85%">Add To Bag</button>
									</form> 
								</div>
							</div>
							
							<div class="deal-countdown offer-countdown hide_in_mobile" data-until="+11h"></div><!-- End .deal-countdown -->
						</figure><!-- End .product-media -->
						
						<div class="product-body">
							<div class="product-cat">
								<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>">
									<?php if(!empty($each->category)){
										$catName=$this->db->get_where("categories",array('id'=>$each->category))->row();
										if(!empty($catName->name)){
											echo $catName->name; 
										} 
									} ?>
								</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>"><?= $each->title; ?></a></h3><!-- End .product-title -->
							<div class="product-price">
								<span style="color: #ec1137;">₹<?= $each->off_price?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->off_price==(int)$each->mrp){ echo "d-none";} ?>" style="color: gray;"><?= $each->mrp ?></del>
							</div><!-- End .product-price -->
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 2 Reviews )</span>
							</div><!-- End .rating-container -->
							
							<div class="product-nav product-nav-dots">
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
				</div><!-- End .col-sm-6 col-lg-4 col-xl-4 -->
				<?php
					$sr++;
				}
			?>
			
		</div><!-- End .row -->
	</div><!-- End .products -->
	
</div><!-- End .col-lg-9 -->
<!-- tile view end-->

<!-- list view start-->
<div class="col-lg-12 product-card-view" id="list-view" style="display:none;">
	<div class="products mb-3">
		<?php
			$sr = 1;
			foreach($productDetails as $each)
			{ 
				$icons = explode(',',$each->image1);
			?>
			<form action="<?php echo base_url($this->data->controller . '/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
				<input type="hidden" required name="productid" value="<?= $each->id; ?>">
				<div class="product product-list">
					<div class="row">
						<div class="col-6 col-lg-3">
							<figure class="product-media">
								<?php if((int)$each->off_price!=(int)$each->mrp){ ?>
									<span class="product-label label-primary">SALE&nbsp;<?=(int)$each->discount?>%OFF</span>
								<?php } ?>
								<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>">
									<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>"  class="product-image  ">
									<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
								</a>
							</figure><!-- End .product-media -->
						</div><!-- End .col-sm-6 col-lg-3 -->
						
						<div class="col-6 col-lg-3 order-lg-last">
							<div class="product-list-action">
								<div class="product-price">
									<span style="color: #ec1137;">₹<?= $each->off_price?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->off_price==(int)$each->mrp){ echo "d-none";} ?>" style="color: gray;"><?= $each->mrp ?></del>
								</div><!-- End .product-price -->
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->
								
								<div class="product-action">
									<a href="javascript:void(0)" onclick="quickView(<?= $each->id; ?>,'Individual')" class="btn-product btn-quickview" data-toggle="modal" data-target="#QuickViewModal" title="Quick view"><span>quick view</span></a>
									<a href="<?= base_url('Home/Compare')?>" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
								</div><!-- End .product-action -->
								
								<button class="btn-product btn-cart w-100"><span>add to cart</span></button>
								
							</div><!-- End .product-list-action -->
						</div><!-- End .col-sm-6 col-lg-3 -->
						
						<div class="col-lg-6">
							<div class="product-body product-action-inner">
								<a href="javascript:void(0)" class="btn-product btn-wishlist" title="Add to wishlist" onclick="AddToWishlist(<?= $each->id; ?>)"><span>add to wishlist</span></a>
								<div class="product-cat">
									<a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>">
										<?php if(!empty($each->category)){
											$catName=$this->db->get_where("categories",array('id'=>$each->category))->row();
											if(!empty($catName->name)){
												echo $catName->name; 
											} 
										} ?>
									</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="<?php echo  base_url('Home/ProductDetails/').$each->id?>"><?= $each->title?></a></h3><!-- End .product-title -->
								
								<div class="product-content">
									<p><?= $each->short_desc?></p>
								</div><!-- End .product-content -->
								
								<div class="product-nav-color product-nav-dots">
									<?php 
										$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
										$colors=explode(",",$data->color);
										if(!empty($data->color)){
											$count=1;
											foreach($colors as $color)
											{ $uniqueId=$count.$sr;
											?>
											<input type="radio" name="color" id="color-list<?= $uniqueId ?>" required class="color-item sr-only" value="<?= $color ?>">
											<label for="color-list<?= $uniqueId ?>" class="<?php if($count==1){echo 'active';} if($count>4){echo 'MoreColor';}?> m-0" style="height:18px; width:18px; cursor:pointer; border-radius:50%;  background:<?= $color?>"></label>
											<?php
												$count++;   
											}
										?>
										<a href="javascript:void(0)" class="MoreColorBtn btn p-0 m-0 <?php if(count($colors)<4 || (count($colors)-4)==0){echo 'd-none';}?>" style="position: relative; top:-5px; border: 1px solid gray; width: 20px; height: 20px; color: #fe0631;" title="<?=(count($colors)-4)?>">+<?=(count($colors)-4)?></a>
										<?php
										} 
									?>
								</div><!-- End .product-nav-color -->
								
								
								<div class="product-nav-size">
									<div class="form--field ">
										<?php 
											$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
											$sizes=explode(",",$data->size);
											if(!empty($data->size)){
												$count=1;
												
											?>
											<input type="hidden" name="variantid" value="<?= $data->id ?>">  
											<label class="sizeContainer active <?php if(!in_array('S',$sizes)){echo 'disabled';} ?>"  for="size-list1<?=$sr;?>" >S<?php if(!in_array('S',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class="sr-only " name="size"  id="size-list1<?=$sr;?>" <?php if(!in_array('S',$sizes)){echo 'disabled';} ?> value="S" required>
											
											
											<label class="sizeContainer <?php if(!in_array('M',$sizes)){echo 'disabled';} ?>" for="size-list2<?=$sr;?>" >M<?php if(!in_array('M',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class="sr-only" name="size"  id="size-list2<?=$sr;?>" <?php if(!in_array('M',$sizes)){echo 'disabled';} ?> value="M" required>
											
											
											<label class="sizeContainer <?php if(!in_array('L',$sizes)){echo 'disabled';} ?>" for="size-list3<?=$sr;?>" >L<?php if(!in_array('L',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class=" sr-only" name="size"  id="size-list3<?=$sr;?>" <?php if(!in_array('L',$sizes)){echo 'disabled';} ?> value="L" required>
											
											
											<label class="sizeContainer <?php if(!in_array('XL',$sizes)){echo 'disabled';} ?>" for="size-list4<?=$sr;?>" >XL<?php if(!in_array('XL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class=" sr-only" name="size"  id="size-list4<?=$sr;?>" <?php if(!in_array('XL',$sizes)){echo 'disabled';} ?> value="XL" required>
											
											
											<label class="sizeContainer <?php if(!in_array('XXL',$sizes)){echo 'disabled';} ?>" for="size-list5<?=$sr;?>" >XXL<?php if(!in_array('XXL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class=" sr-only" name="size"  id="size-list5<?=$sr;?>" <?php if(!in_array('XXL',$sizes)){echo 'disabled';} ?> value="XXL" required>
											
											
											<label class="sizeContainer <?php if(!in_array('XXXL',$sizes)){echo 'disabled';} ?>" for="size-list6<?=$sr;?>" >XXXL<?php if(!in_array('XXXL',$sizes)){echo "<i class='bi bi-bell'></i>";} ?></label>
											<input type="radio" class=" sr-only" name="size"  id="size-list6<?=$sr;?>" <?php if(!in_array('XXXL',$sizes)){echo 'disabled';} ?> value="XXXL" required>
											
										<?php } ?>
										
									</div>
									
								</div><!-- End .product-nav -->
								
							</div><!-- End .product-body -->
						</div><!-- End .col-lg-6 -->
						
					</div><!-- End .row -->
				</div><!-- End .product -->
			</form>  
		<?php $sr++; }  ?>
	</div><!-- End .products -->
	
	<!--<nav aria-label="Page navigation">   
		<ul class="pagination d-flex justify-content-center" style="border:none;">
		<li class="page-item disabled" >
		<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true" style="border:none;">
		<span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
		</a>
		</li>
		<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item-total">of 6</li>
		<li class="page-item">
		<a class="page-link page-link-next" href="#" aria-label="Next" style="border:none;">
		Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
		</a>
		</li>
		</ul>
	</nav>-->
</div><!-- End .col-lg-9 -->
<!-- list view end-->
<?php include('include/jsLinks.php'); ?>
