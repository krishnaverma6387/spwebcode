<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="UTF-8">
	<title>Slick Pattern - Product Wishlist</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('include/cssLinks.php') ?>
	<style>
		.slide-toggle {
			display: none !important;
		}

		@media only screen and (max-width: 600px) {
			.pageheading {
				font-size: 20px !important;
			}

			.tile-view-card {
				padding: 0;
			}
		}

		.active {
			color: #8340A1 !important;
		}

		.description,
		.delete {
			float: right !important;
		}

		.slick-prev,
		.slick-next {
			background: none !important;
			position: absolute;
			top: -33px;
		}


		.slick-prev:before,
		.slick-next:before {
			color: #8340A1 !important;
		}

		.slick-prev {
			left: 93%;
		}

		@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {

			.slick-prev,
			.slick-next {
				display: none !important;
			}

			.slick-prev {
				left: 95%;
			}

			.slick-next {
				right: 44px;
			}

			.slick-prev {
				left: 90% !important;
			}
		}

		.selectvalues {
			position: absolute;
			left: 10%;
			top: 5%;
		}

		.slick-arrow {
			opacity: 2 !important;
		}

		.slick-slider:hover .slick-arrow {
			display: block !important;
			background: #8340A1;
			opacity: 1 !important;
		}

		.product-7 {
			border: 1px solid lavender;
		}

		.btn-product-icon+.btn-product-icon {
			margin-top: 0.5rem;
		}

		.product-action-vertical {
			display: flex;
			flex-direction: column;
			position: absolute;
			right: 0.5rem;
			top: 0.5rem;
			background-color: transparent;
			z-index: 1;
			visibility: visible;
			opacity: 1;
			transition: unset;
			transform: unset;
		}

		.bi-x {
			font-size: 18px;
		}
	</style>

</head>

<body>

	<div class="se-pre-con"></div>
	<?php include('include/header.php') ?>

	<div class="container-fuild">
		<nav aria-label="breadcrumb">
			<div class="container-fluid">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
				</ol>
			</div>
		</nav>
	</div>


	<?php
	if ($this->permission == 'true' || $this->permission == 'false') {
	?>
		<section class="pro-content wishlist-content">
			<div class="container-fluid">
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							<a href="<?= base_url('Home/Cart') ?>">Bag (<?= count($cartdata); ?>)</a> &ensp;
							<a class="active" href="<?= base_url('Home/Wishlist') ?>">Wishlist (<?= count($list); ?>)</a>
						</h1>
					</div>
				</div>
				<?php
				if (count($list) > 0) {
				?>
					<div class="row">
						<div class="col-md-12">
							<!-- Tab panes -->
							<div class="tab-content">

								<div role="tabpanel" class="tab-pane fade active show p-2" id="featured">
									<div class="owl-carousel cart-carousel row overflow-hidden m-0">
										<?php
										$sr = 1;
										if (!empty($listInd)) {
											foreach ($listInd as $each1) {
												$sr = 1;
												$product = $this->db->get_where('products', ['id' => $each1->product_id, 'is_status' => 'true'])->result();
												foreach ($product as $each) {
													$Variant = $this->db->get_where('product_variant', array('id' => $each1->variant_id, 'product_id' => $each1->product_id, 'is_status' => 'true'))->row();
													if (!empty($Variant->variant_img)) {
														$icons = explode(',', $Variant->variant_img);
													} else {
														$icons = explode(',', $each->image1);
													}

													$saleProduct = $this->db->get_where('sale_product', array('product_id' => $each->id, 'is_status' => 'true', 'sale_type' => 'individual'))->row();
													if (!empty($saleProduct)) {
														$tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
														if (!empty($tblSale)) {
															$last_date = date_create(date('Y-m-d H:i:s'));
															$today = date_create($tblSale->end_date);
															$date_difference = date_diff($last_date, $today);
															$days = $date_difference->format('%r%a');
															$hour = $date_difference->format('%r%h');
															$min = $date_difference->format('%r%i');
															$sec = $date_difference->format('%r%s');
															$timer = $days . "D" . $hour . "H" . $min . "M" . $sec . "S";
														}
													}
													if (!empty($Variant)) {
										?>
														<div class="col-12 tile-view-card">
															<div class="product product-7 text-center ">
																<form action="<?php echo base_url($this->data->controller . '/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
																	<figure class="product-media">
																		<?php
																		if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
																		?>
																			<span class="product-label label-primary">SALE&nbsp;<?= (int)$saleProduct->discount ?>%OFF</span>
																		<?php
																		} else if ((int)$each->reg_sell_price != (int)$each->mrp) { ?>
																			<span class="product-label label-primary"><?= (int)$each->discount ?>%OFF</span>
																		<?php
																		}
																		?>
																		<a href="<?php echo  base_url('Home/ProductDetails/') . $each->id . '/' . $Variant->id ?>">
																			<img src="<?php if (!empty($icons[0])) {
																							echo base_url('uploads/product/') . $icons[0];
																						}
																						?>" class="product-image  ">
																			<img src="<?php if (!empty($icons[1])) {
																							echo base_url('uploads/product/') . $icons[1];
																						}
																						?>" class="product-image-hover">
																		</a>

																		<div class="product-action-vertical">
																			<a href="javascript:void(0)" onclick="return Remove(this,'tbl_wishlist','id','<?= $each1->id ?>','','')" class="btn-product-icon bi-x btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>Remove</span></a>
																			<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable"" title=" Quick view" onclick="quickView(<?= $Variant->id; ?>,'Individual')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																		</div><!-- End .product-action-vertical -->
																		<?php
																		$Productsizes = json_decode($Variant->size);
																		foreach ($Productsizes[0] as $size => $size_stock) {
																			if ($size != 'NA') {
																		?>
																				<div class="product-action hide_in_mobile">
																					<a href="javascript:void(0)" class="btn-product btn-cart" style="font-size:12px;">Quick Add</a>
																				</div><!-- End .product-action -->

																				<div class="add-product" id="app">
																					<div>
																						<input type="hidden" required name="productid" value="<?= $each->id; ?>">
																						<div style="display:flex; flex-direction: column; justify-content: space-evenly;">
																							<div class="d-flex justify-content-between" style="padding: 5px 5px; cursor:pointer;"><b class="<?php if ($Productsizes[0] == 'NA') {
																																																echo 'invisible';
																																															} ?>">Select size</b><b class="closeQuickAdd"><i class="fa-solid fa-xmark"></i></b></div>
																							<div class="form--field product-nav-size my-2" style="text-align: start;">
																								<?php if ($size != 'NA' and !empty($Variant->size_type)) {
																									$count = 1;
																									foreach ($Productsizes as $eachSize) {
																										foreach ($eachSize as $size => $size_stock) {
																											$uniqueId = $count . $sr;
																								?>
																											<input type="hidden" name="variantid" value="<?= $Variant->id ?>">
																											<label class="sizeContainer  <?php if ($size_stock == 0) {
																																				echo 'disabled';
																																			} ?>" for="size-tile<?= $uniqueId; ?>"><?= $size ?><?php if ($size_stock == 0) {
																																																	echo "<i class='bi bi-bell'></i>";
																																																} ?></label>
																											<input type="radio" class="sr-only" name="size" id="size-tile<?= $uniqueId; ?>" <?php if ($size_stock == 0) {
																																																echo 'disabled';
																																															} ?> value="<?= $size ?>" required data-parsley-required-message="Please select size">
																								<?php
																											$count++;
																										}
																									}
																								}
																								?>
																							</div><!-- product-nav-size-->
																						</div>
																						<?php
																						$stockCount = 0;
																						$variant_count = (count($Productsizes));
																						foreach ($Productsizes as $eachSize) {
																							foreach ($eachSize as $size => $size_stock) {
																								if ($size_stock == 0) {
																									$stockCount++;
																								}
																							}
																						}
																						?>
																						<?php if ($stockCount == $variant_count) {
																						?>
																							<button type="button" class="submit-button " style="width:75%; background:#d5d6d9 !important; cursor:default;"><i class='bi bi-bell'></i>&nbsp;Out Of Stock</button>
																						<?php
																						} else {
																						?>
																							<button type="submit" class="submit-button " style="width:75%; font-size: 12px;">Add To Bag</button>
																						<?php
																						}
																						?>
																					</div>
																				</div>
																			<?php
																			} else {
																			?>
																				<div class="product-action hide_in_mobile">
																					<input type="hidden" required name="productid" value="<?= $each->id; ?>">
																					<input type="hidden" name="variantid" value="<?= $Variant->id ?>">
																					<input type="hidden" class="sr-only " name="size" value="NA" required data-parsley-required-message="Please select size">
																					<button type="submit" class="btn-product btn-cart border-none" style="font-size:12px; border:none;">Quick Add</button>
																				</div><!-- End .product-action -->
																		<?php
																			}
																		}
																		?>

																		<!--calcult time for timer-->
																		<?php if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
																		?>
																			<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?= $timer ?>"></div>
																		<?php
																		}
																		?>
																	</figure><!-- End .product-media -->

																	<div class="product-body">
																		<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductDetails/') . $each->id . '/' . $Variant->id ?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																		<div class="product-cat">
																			<a href="<?php echo  base_url('Home/ProductDetails/') . $each->id . '/' . $Variant->id ?>"><?= $each->title; ?></a>
																		</div><!-- End .product-cat -->
																		<div class="product-price">
																			<? if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
																				$price = $each->mrp;
																				$discount = (int)$saleProduct->discount;
																				$saleprice = $price - (($price / 100) * $discount);
																			?>
																				<span>₹<?= (int)$saleprice; ?></span>&nbsp;&nbsp;<del class="<?php if ((int)$each->reg_sell_price == (int)$each->mrp) {
																																					echo "d-none";
																																				}
																																				?>" style="color: gray;"><?= $each->mrp ?></del>
																			<?php
																			} else {
																			?>
																				<span>₹<?= $each->reg_sell_price ?></span>&nbsp;&nbsp;<del class="<?php if ((int)$each->reg_sell_price == (int)$each->mrp) {
																																						echo "d-none";
																																					}
																																					?>" style="color: gray;"><?= $each->mrp ?></del>
																			<?php } ?>
																		</div><!-- End .product-price -->



																		<div class="ratings-container">
																			<?php
																			$ratingCount = $this->db->select_sum('rating')->get_where('tbl_review', array('product_id' => $each->id, 'is_combo' => 'false', 'is_status' => 'true'))->row();
																			$countReview = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $each->id, 'is_combo' => 'false', 'is_status' => 'true'))->num_rows();
																			if (!empty($countReview) and !empty($ratingCount)) {
																				$totalRating = $ratingCount->rating / $countReview;
																				$totalRating = round($totalRating, 1);
																			?>
																				<div class="ratings" style="font-size:1.2rem;">
																					<div class="ratings-val" style="width:<?php if (!empty($totalRating)) {
																																echo ($totalRating) * 20;
																															}
																															?>%; font-size:1.2rem;"></div><!-- End .ratings-val -->
																				</div><!-- End .ratings -->
																				<span>(<?php if (!empty($countReview)) {
																							echo $countReview;
																						}
																						?>)</span>
																			<?php
																			}
																			?>
																		</div><!-- End .rating-container -->
																		<?php

																		if ($Variant->color != 'NA') {
																		?>
																			<input type="hidden" name="color" id="color-tile" required class="color-item sr-only" value="<?= $Variant->color ?>" data-parsley-required-message="Please select color">
																		<?php
																		} else {
																		?>
																			<input type="hidden" name="color" required class="color-item sr-only" value="NA">
																		<?php
																		}
																		?>
																	</div><!-- End .product-body -->
																</form>
															</div><!-- End .product -->
														</div><!-- End .col-sm-6 col-lg-4 col-xl-4 -->
										<?php
													}
													$sr++;
												}
											}
										}
										?>
										<?php
										$sr = 1;
										if (!empty($listCombo)) {
											foreach ($listCombo as $each2) {
												$comboProduct = $this->db->get_where('tbl_combo', array('id' => $each2->combo_id))->result();
												if (!empty($comboProduct)) {
													foreach ($comboProduct as $each) {
														$icons = explode(',', $each->image);
														$saleProduct = $this->db->get_where('sale_product', array('product_id' => $each->id, 'is_status' => 'true', 'sale_type' => 'combo'))->row();
														if (!empty($saleProduct)) {

															$tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();

															$last_date = date_create(date('Y-m-d H:i:s'));
															$today = date_create($tblSale->end_date);
															$date_difference = date_diff($last_date, $today);
															$days = $date_difference->format('%r%a');
															$hour = $date_difference->format('%r%h');
															$min = $date_difference->format('%r%i');
															$sec = $date_difference->format('%r%s');
															$timer = $days . "D" . $hour . "H" . $min . "M" . $sec . "S";
														}

										?>
														<div class="col-12 tile-view-card">
															<div class="product product-7 text-center ">
																<figure class="product-media">
																	<?php
																	if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
																	?>
																		<span class="product-label label-primary">SALE&nbsp;<?= (int)$saleProduct->discount ?>%OFF</span>
																	<?php
																	} else if ((int)$each->discount_price != (int)$each->price) {
																		$discount = (((int)$each->price - (int)$each->discount_price) / (int)$each->price) * 100;
																	?>
																		<span class="product-label label-primary"><?= (int)$discount ?>%OFF</span>
																	<?php } ?>
																	<a href="<?php echo  base_url('Home/ProductComboDetails/') . $each->id ?>">
																		<img src="<?php if (!empty($icons[0])) {
																						echo base_url('uploads/product/') . $icons[0];
																					} ?>" class="product-image  ">
																		<img src="<?php if (!empty($icons[1])) {
																						echo base_url('uploads/product/') . $icons[1];
																					} ?>" class="product-image-hover">
																	</a>

																	<div class="product-action-vertical">
																		<a href="javascript:void(0)" onclick="return Remove(this,'tbl_wishlist','id','<?= $each2->id ?>','','')" class="btn-product-icon bi-x btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>Remove</span></a>
																		<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable" title="Quick view" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																	</div><!-- End .product-action-vertical -->


																	<div class="container hide_in_mobile" id="app">
																		<div class="product-action">
																			<a href="javascript:void(0)" onclick="quickView(<?= $each2->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal" class="btn-product btn-cart" style="font-size:12px;">Quick Add</a>
																		</div><!-- End .product-action -->
																	</div>
																	<? if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") { ?>
																		<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?= $timer ?>"></div>
																	<?php } ?>
																</figure><!-- End .product-media -->

																<div class="product-body">
																	<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductComboDetails/') . $each->id ?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
																	<div class="product-price">
																		<? if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
																			$price = $each->price;
																			$discount = (int)$saleProduct->discount;
																			$saleprice = $price - (($price / 100) * $discount);
																		?>
																			<span>₹<?= (int)$saleprice; ?></span>&nbsp;&nbsp;<del class="<?php if ((int)$each->discount_price == (int)$each->price) {
																																				echo "d-none";
																																			} ?>" style="color: gray;"><?= $each->price ?></del>
																		<?php
																		} else { ?>
																			<span>₹<?= $each->discount_price ?></span>&nbsp;&nbsp;<del class="<?php if ((int)$each->discount_price == (int)$each->price) {
																																					echo "d-none";
																																				} ?>" style="color: gray;"><?= $each->price ?></del>
																		<?php } ?>
																	</div><!-- End .product-price -->
																	<div class="ratings-container">
																		<div class="ratings">
																			<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
																		</div><!-- End .ratings -->
																		<span class="ratings-text">( 2 Reviews )</span>
																	</div><!-- End .rating-container -->

																	<div class="product-nav product-nav-dots d-none">
																		<?php
																		$data = $this->db->get_where('product_variant', array('product_id' => $each->id))->row();
																		$colors = explode(",", $data->color);
																		if (!empty($data->color)) {
																			$count = 1;
																			foreach ($colors as $color) {
																		?>
																				<a href="javascript:void(0)" class="<?php if ($count == 1) {
																														echo 'active';
																													}
																													if ($count > 4) {
																														echo 'MoreColor';
																													} ?>" style="background:<?= $color ?>"><span class="sr-only">Color name</span></a>
																			<?php
																				$count++;
																			}
																			?>
																			<button class="MoreColorBtn btn p-0 m-0 <?php if (count($colors) < 4 || (count($colors) - 4) == 0) {
																														echo 'd-none';
																													} ?>" style="position: relative; top:-5px; border: 1px solid gray; width: 20px; height: 20px; color: #fe0631;" title="<?= (count($colors) - 4) ?>">+<?= (count($colors) - 4) ?></button>
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
												}
											}
										// }

										?>
									</div>
									<!-- 1st tab -->
								</div>

							</div>
						</div>
					</div>
			</div>
		<?php
				// } else {
		?>
			<div class="row">
				<div class="col-sm-4 mx-auto shadow-lg">
					<img src="<?= base_url('public/images/wishlistimg.png') ?>" class="img-fluid w-100">

					<h2 class="text-center mt-3">Your wishlist is empty!</h2>
					<p class="text-center mt-2">Save your favourite items so you don't lose sight of them.</p>
					<p class="text-center"><a href="<?= base_url('Home/Product') ?>" class="btn btn-secondary">Be inspired by the latest </a></p>
				</div>
			</div>
		<?php
				// }
		?>
		</div>
		</div>
		</section>
		<?php include('include/footer.php'); ?>
	<?php
	// } else {
	?>
		<!-- <div class="row m-0">
			<div class="col-sm-3 mx-auto shadow-lg " style="display:flex; flex-direction:column;align-items:center;">
				<img src="<?= base_url('public/images/wishlistimg.png') ?>" class="img-fluid w-100">
				<h4 class="text-center mt-3">PLEASE LOG IN!</h4>
				<p class="text-center mt-2">Login to view items in your wishlist.</p>
				<p class="text-center"><a href="<?= base_url('Home/Login') ?>" class="btn btn-secondary">Login</a></p>
			</div>
		</div> -->
	<?php
	// } 
	?>

	<?php include('include/jsLinks.php'); ?>

	<script>
		$('.cart-carousel').owlCarousel({
			loop: false,
			autoplay: false,
			nav: true,
			dots: false,
			responsive: {
				0: {
					items: 1,

				},
				460: {
					items: 2,
				},
				1024: {
					items: 5,
				},
			},
			navText: [
				'<i class="fa-solid fa-angle-left " style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 0px; left:15px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 3px 0 0 3px;"></i>',
				'<i class="fa-solid fa-angle-right" style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 0px; left:-35px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 0 3px 3px 0px;"></i>'
			]

		});

		jQuery("#content2").click(function() {
			var text1 = jQuery("#content1").html();
			var text2 = jQuery("#content2").html();
			if (text1 == 'ADD ALL TO CART') {
				jQuery("#content1").html('SELECT ALL');
				jQuery("#content2").html('CANCEL');
			} else {
				jQuery("#content1").html('ADD ALL TO CART');
				jQuery("#content2").html('EDIT');
			}
		});
	</script>

</body>

</html>