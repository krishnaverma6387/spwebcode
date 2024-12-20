<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
	<style>
		#style1::-webkit-color-swatch {
			border-radius: 50%;
		}

		#style1::-moz-color-swatch {
			border-radius: 50%;
		}

		.chosen-container-multi .chosen-choices {
			padding: 5px;
			border-radius: 4px;
			border: 1px solid #d5d1d1;
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
						<h5 class="content-header-title float-left pr-1 mb-0"><?= $this->data->pageTitle; ?></h5>
						<div class="breadcrumb-wrapper d-none d-sm-block">
							<ol class="breadcrumb p-0 mb-0 pl-1">
								<li class="breadcrumb-item">
									<a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									<a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
								</li>
								<li class="breadcrumb-item active"><?= $this->data->pageTitle; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<?php
			$permission = '';
			$role_type = 'admin';
			if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
				$permission = $this->permissionAuth->product;
				$permission_catlog = $this->permissionAuth->ecatlog;
				$role_type = 'subadmin';
			}
			?>
			<div class="content-body">
				<section id="form-action-layouts">
					<div class="row match-height">
						<div class="col-sm-12">
							<div class="card card-dashboard">
								<div class="card-header p-1">
									<a class="btn btn-primary" href="<?= base_url($this->data->controller . '/' . $this->data->method . ''); ?>">
										<i class="fa fa-circle-o"></i> Manage <?= $this->data->key; ?></a>
									<center>
										<p style="font-size: 18px;">Product Name : <?php echo $list->name; ?></p>
										<h5>Stock: <span class="text-info"><?php echo $list->stock; ?></span></h5>
									</center>
								</div>
								<div class="card-content collpase show">
									<div class="card-body table-responsive">
										<!--	<?php if (!empty($list->image1)) { ?>
												<div class="table-responsive">
												<table class="table table-bordered">
												<thead>
												<tr>
												
												<?php
													$images = explode(",", $list->image1);
													$count = 1;
													foreach ($images as $each) {
												?>
													<th>Image <?= $count; ?></th>
												<?php $count++;
													} ?>
												</tr>
												</thead>
												<tbody>
												<tr>
												<?php
													$images = explode(",", $list->image1);
													$count = 1;
													foreach ($images as $each) {
												?>
													<td>
													<center><img src="<?= base_url('uploads/product/' . $each) ?>" style="height:150px;width:125px;"><br><br><button class="btn btn-primary bi bi-pencil-square editImage" onclick="editImage('<?= $each ?>')" title="Update" data-toggle="modal" data-target="#updateModal" id="product_main_img"></button>&emsp;<button class="btn btn-danger bi bi-trash" onclick="DeleteProductImage('<?= $list->id ?>','<?= $each ?>')" title="delete" ></button></center>
													</td>
												<?php } ?>
												</tr>
												</tbody>
												</table>
												</div></br>
											<?php } ?>-->
										<div class="row">
											<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?><div class="col-sm-12 my-1"><a href="<?= base_url('Admin/ManageProduct/UpdateProduct/' . $list->id) ?>" class="btn btn-primary bi bi-pencil-square editImage" title="Update" id="product_main_img">&nbsp;Update Product Details</a><br></div><?php } ?>
											<div class="col-sm-7 table-responsive card">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<th>Product Name :</th>
															<td><?php echo $list->name ?></td>
														</tr>
														<tr>
															<th>Category :</th>
															<td><?php
																$catid = $list->category;
																$category = $this->db->get_where('categories', array('id' => $catid))->row();
																if (!empty($category->name)) {
																	echo $category->name;
																} else {
																	echo "Category Not Found";
																}


																?></td>
														</tr>
														<tr>
															<th>Subcategory :</th>
															<td><?php
																$subcatid = $list->sub_category;
																$subcat = $this->db->get_where('sub_category', array('id' => $subcatid))->row();
																if (!empty($subcat->name)) {
																	echo $subcat->name;
																} else {
																	echo "Sub-Category Not Found";
																}
																?></td>
														</tr>
														<tr>
															<th>Title :</th>
															<td><?php echo $list->title ?></td>
														</tr>
														<tr>
															<th>Brand :</th>
															<td><?php
																$brandid = $list->brand_id;
																$brand = $this->db->get_where('brand', array('id' => $brandid))->row();
																if (!empty($brand->name)) {
																	echo $brand->name;
																} else {
																	echo "Brand Not Found";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Subbrand :</th>
															<td><?php
																if (!empty($list->subbrand_id)) {
																	$subbrandid = $list->subbrand_id;
																	$subbrand = $this->db->get_where('sub_brand', array('id' => $subbrandid))->row();
																	if (!empty($subbrand->name)) {
																		echo $subbrand->name;
																	} else {
																		echo "Sub-Brand Not Found";
																	}
																}

																?>
															</td>
														</tr>
														<tr>
															<th>Purchasing Price(Rs.) :</th>
															<td>Rs. <?= $list->purchase_price; ?></td>
														</tr>
														<tr>
															<th>CGST(%) :</th>
															<td><?= $list->cgst; ?>%</td>
														</tr>
														<tr>
															<th>SGST(%) :</th>
															<td><?= $list->cgst; ?>%</td>
														</tr>
														<tr>
															<th>GST(Rs.) :</th>
															<td><?= $list->gst; ?></td>
														</tr>
														<tr>
															<th>Base Price(Rs.) :</th>
															<td>Rs. <?= $list->base_price; ?></td>
														</tr>
														<tr>
															<th>Expected Profit(%) :</th>
															<td>Rs. <?= $list->expected_profit; ?></td>
														</tr>
														<tr>
															<th>Minimum Selling Price(Rs.) :</th>
															<td>Rs. <?= $list->min_sell_price; ?></td>
														</tr>
														<tr>
															<th>MRP(Rs.) :</th>
															<td>Rs. <?= $list->mrp; ?></td>
														</tr>
														<tr>
															<th>Regular Selling Price(Rs.) :</th>
															<td>Rs. <?= $list->reg_sell_price; ?></td>
														</tr>
														<tr>
															<th>Margin :</th>
															<td><?= $list->margin; ?></td>
														</tr>
														<tr>
															<th>HSN :</th>
															<td><?= $list->hsn; ?></td>
														</tr>
														<tr>
															<th>Avaliability :</th>
															<td>
																<?php
																if ($list->availability == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Unit :</th>
															<td><?= $list->unit; ?></td>
														</tr>
														<tr>
															<th>Weight :</th>
															<td><?= $list->weight; ?></td>
														</tr>
														<tr>
															<th>Maximum Quantity :</th>
															<td><?= $list->max_qty; ?></td>
														</tr>
														<tr>
															<th>SKU Id :</th>
															<td><?= $list->skuid; ?></td>
														</tr>

														<tr>
															<th>Length , Width , Height:</th>
															<td><?= $list->length; ?> , <?= $list->width; ?> , <?= $list->height; ?> Cm.</td>
														</tr>
														<tr>
															<th>Meta Description</th>
															<td><?= $list->meta_desc; ?></td>
														</tr>
														<tr>
															<th>SEO Keywords</th>
															<td><?= $list->seo_keyword; ?></td>
														</tr>
														<tr>
															<th>Additional Url</th>
															<td><?= $list->add_url; ?></td>
														</tr>
														<tr>
															<th>Bar Code</th>
															<td>
																<?php
																if ($list->bar_code == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Gift Wrap</th>
															<td>
																<?php
																if ($list->gift_wrap == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Quick View:</th>
															<td>
																<?php
																if ($list->quick_view == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Compare :</th>
															<td><?= $list->compare; ?></td>
														</tr>
														<tr>
															<th>Cancel Status:</th>
															<td>
																<?php
																if ($list->cancel_status == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>

														<tr>
															<th>Cancellation Limit :</th>
															<td><?= $list->cancel_limit; ?> Days.</td>
														</tr>
														<tr>
															<th>Prebook Status:</th>
															<td>
																<?php
																if ($list->prebook_status == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Prebooking Price :</th>
															<td>
																<?php
																if (!empty($list->prebook_amt)) {
																	echo $list->prebook_amt;
																}

																?>
															</td>
														</tr>
														<tr>
															<th>Return & Refund Status:</th>
															<td>
																<?php
																if ($list->refund_status == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Return & Refund Limit :</th>
															<td><?= $list->refund_limit; ?> Days.</td>
														</tr>
														<tr>
															<th>Refund Policy :</th>
															<td><?= $list->refund_policy; ?></td>
														</tr>
														<tr>
															<th>Return Policy :</th>
															<td><?= $list->return_policy; ?></td>
														</tr>
														<tr>
															<th>Cancellation Policy :</th>
															<td><?= $list->cancellation_policy; ?></td>
														</tr>
														<tr>
															<th>Procurement SLA :</th>
															<td><?= $list->procurement_sla; ?></td>
														</tr>
														<tr>
															<th>Manufacturer Name:</th>
															<td><?= $list->manufacturer_name; ?></td>
														</tr>
														<tr>
															<th>Manufacturer Address:</th>
															<td><?= $list->manufacturer_address; ?></td>
														</tr>
														<tr>
															<th>Manufacturer Logo:</th>
															<td>
																<?php
																if (!empty($list->manufacturer_logo)) {
																?>
																	<a href="<?= base_url('uploads/product/') . $list->manufacturer_logo ?>" target="_blank" title="<?= $list->manufacturer_logo ?>"><img src="<?= base_url('uploads/product/') . $list->manufacturer_logo ?>" style="height:150px; width:150px;" /></a>&nbsp&nbsp
																<?php
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Pack Of:</th>
															<td><?= $list->pack_of; ?></td>
														</tr>
														<tr>
															<th>Exchange Status:</th>
															<td>
																<?php
																if ($list->exchange_status == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Exchange Limit :</th>
															<td><?= $list->exchange_limit; ?> Days.</td>
														</tr>
														<tr>
															<th>Exchange Policy :</th>
															<td><?= $list->exchange_policy; ?></td>
														</tr>
														<tr>
															<th>Chat Consult:</th>
															<td>
																<?php
																if ($list->chat_consult == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>
														<tr>
															<th>Is Complimentary</th>
															<td>
																<?php
																if ($list->is_complimentary == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>

														<tr>
															<th>Combo Eligible</th>
															<td>
																<?php
																if ($list->combo_status == 'true') {
																	echo "Yes";
																} else {
																	echo "No";
																}
																?>
															</td>
														</tr>

														<tr>
															<th>Launch Time :</th>
															<td><?= $list->launch_time; ?></td>
														</tr>
														<tr>
															<th>Expert Link:</th>
															<td><?= $list->expertlink; ?></td>
														</tr>
														<tr>
															. <th>Date Time:</th>
															<td><?= $list->created_at; ?></td>
														</tr>
														<tr>
															<th>Bar Code: </th>
															<!--<td><img src="<?= APPPATH . 'third_party/barcode.php?text=' . $list->bar_code . '&print=true' ?>" /></td>-->
															<td><img src="<?= $barcode ?>" /></td>
														</tr>
														<tr>
															<th>QR Code: </th>

															<td><img alt="testing" src="<?= $qrcode ?>" /></td>

														</tr>
													</tbody>
												</table><br />
											</div>
											<div class="col-sm-5 card">

												<div class="row"><br />
													<div class="col-lg-12 " style="border:1px solid #dee2e6;"><br />
														<p class="mt-2"><b style="font-size: 18px;">Short Description:</b></p>
														<p><?= $list->short_desc; ?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 " style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Product Tags:</b></p>
														<p><?= $list->tags; ?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Long Description:</b></p>
														<p><?= $list->long_desc; ?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Product Additional Details:</b></p>
														<p><?= $list->long_desc; ?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Expert Details:</b></p>
														<p><?= $list->long_desc; ?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<?php if (!empty($list->youtube_link1)) {
															$sr = 1;
															$videos = explode('###', $list->youtube_link1);
															foreach ($videos as $each) {
														?>
																<p class="mt-2"><b>Youtube Link <?= $sr; ?> </b>: <a href="<?= $each; ?>" target="_blank"> <?= $each; ?></a></p>
															<?php
																$sr++;
															}
														} else {
															?>
															<p class="mt-2"><b>No Videos Found</b></p>
														<?php
														}
														?>

													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Size Chart</b></p>
														<?php
														if (!empty($list->size_chart)) {
														?>
															<a href="<?= base_url('uploads/product/') . $list->size_chart ?>" target="_blank" title="<?= $list->size_chart ?>"><img src="<?= base_url('uploads/product/') . $list->size_chart ?>" style="height:150px; width:150px;" /></a>&nbsp&nbsp
														<?php
														}
														?>

													</div>
												</div>

												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Audio</b></p>
														<?php
														if (!empty($list->audio)) {
															$srno = 1;
														?>
															<audio controls>
																<source src="<?= base_url('uploads/product/') . $list->audio ?>" type="audio/ogg">
																<source src="<?= base_url('uploads/product/') . $list->audio ?>" type="audio/mpeg">
																Your browser does not support the audio element.
															</audio>
															<br /><br />
															<div class="custom-control custom-switch custom-control-inline">
																<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $list->id; ?>','audio_status')" <?php if ($list->audio_status == 'true') {
																																																							echo 'checked';
																																																						} ?> id="switch-id<?= $srno; ?>">
																<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
															</div>

														<?php
														}
														?>

													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
														<p class="mt-2"><b style="font-size: 18px;">Product Images</b></p>
														<!-- <?php
														$icons = explode(',', $list->image1);
														foreach ($icons as $icon) {
														?>
															<a href="<?= base_url('uploads/product/') . $icon ?>" target="_blank" title="<?= $icon ?>"><img src="<?= base_url('uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>&nbsp&nbsp
														<?php
														}
														?> -->
														<table class="table table-bordered">
													
														<tbody>
														<tr>
														<th>Front View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->front_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->front_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Back View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->back_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->back_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Right View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->rside_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->rside_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Left View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->lside_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->lside_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Top View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->top_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->top_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Bottom View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->bottom_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->bottom_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														<tr>
														<th>Close View Image</th>
														<td><a href="<?= base_url('uploads/product/') . $list->close_view_image ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $list->close_view_image ?>" style="height:150px; width:150px;" /></a></td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="form-action-layouts">
					<div class="row match-height">
						<div class="col-sm-12">
							<div class="card card-dashboard">
								<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
									<div class="card-header p-1">
										<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal" onclick="generateProductVariantCode('<?= $list->category ?>','C','<?= $list->id ?>')">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Variant</button>
									</div>
								<?php } ?>
								<div class="card-content collpase show">
									<div class="card-body table-responsive">
										<div class="">
											<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
												<thead>
													<tr>
													<tr>
														<th>#</th>
														<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
														<th>Variant Image</th>
														<th>COLOR</th>
														<th>SIZE</th>
														<!--<th>Numeric Size</th>
																	<th>UNIT</th>
																	<th>WEIGHT</th>
																	<th>MRP</th>
																	<th>OFFER PRICE</th>
																	<th>STOCK</th>
																	<th>Availaibility</th>
																	<th>BAR CODE</th>
																	<th>Length</th>
																	<th>Width</th>
																<th>Height</th>-->
														<th>Date</th>
														<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
													</tr>
													</tr>
												</thead>
												<tbody>
													<?php $srno = 1;
													foreach ($variants as $item) { ?>
														<tr>
															<td><?= $srno; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'product_variant','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
																																																						echo 'checked';
																																																					} ?> id="switch-id<?= $srno; ?>">
																		<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
															<?php } ?>
															<td>
																<?php $icons = explode(',', $item->variant_img); ?>
																<img src="<?= base_url('uploads/product/') . $item->front_view_image; ?>" style="height:45px; width:50px;" alt="product image">
															</td>
															<td>
																<p class="d-flex">
																	<?php
																	$colors = explode(',', $item->color);

																	foreach ($colors as $color) {
																		if ($colors[0] != 'NA') {
																			$color_details = $this->db->get_where('tbl_color', ['code' => $color])->row();
																	?>
																			<span style="padding:4px;display:block;background:<?= $color ?>;width:15px;height:15px;border-radius:25px;box-shadow: 0px 0px 0px 3px #dbdbdb;"></span>&nbsp;
																		<?php } ?>
																		<?= $color_details->name; ?>
																	<?php
																	}
																	?>
																</p>
															</td>
															<td>
																<table>
																	<thead>
																		<?php
																		$json = json_decode($item->size);
																		$size_data = '';
																		foreach ($json as $sizes) {
																			foreach ($sizes as $size => $size_stock) { ?>
																				<th><?= $size ?></th>
																		<?php }
																		}
																		?>
																	</thead>
																	<tbody>
																		<?php
																		$json = json_decode($item->size);
																		$size_data = '';
																		foreach ($json as $sizes) {
																			foreach ($sizes as $size => $size_stock) { ?>
																				<td><?= $size_stock ?></td>
																		<?php }
																		}
																		?>
																	</tbody>
																</table>
															</td>
															<!-- <td><?= $item->numeric_size; ?></td>
																	<td><?= $item->unit; ?></td>
																	<td><?= $item->weight; ?></td>
																	<td><?= $item->mrp; ?></td>
																	<td><?= $item->offer_price; ?></td>
																	<td><?= $item->stock; ?></td>
																	<td><?= $item->availability; ?></td>
																	<td><?= $item->barcode; ?>
																	<img alt="testing" src="<?= base_url() ?>barcode.php?text=<?= $item->barcode; ?>&print=true" />
																	</td>
																	<td><?= $item->length; ?></td>
																	<td><?= $item->width; ?></td>
																<td><?= $item->height; ?></td> -->
															<td><?= $item->created_at; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																<td>
																	<div class="btn-group">
																		<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																			<a href="<?= base_url($this->data->controller . '/' . $this->data->method . '/UpdateVariant/' . $item->product_id . '/' . $item->id) ?>" class="btn btn-sm btn-outline-info waves-effect waves-light"><i class="fa fa fa-edit"></i></a>
																		<?php } ?>
																		<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'product_variant','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																		<?php } ?>
																	</div>
																</td>
															<?php } ?>
														</tr>
													<?php $srno++;
													} ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<br />
						</div>
					</div>
				</section>


				<section id="form-action-layouts">
					<div class="row match-height">
						<div class="col-sm-12">
							<div class="card card-dashboard">
								<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
									<div class="card-header p-1">
										<button class="btn btn-primary" data-toggle="modal" data-target="#VideoModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Dressing Sense</button>
									</div>
								<?php } ?>
								<div class="card-content collpase show">
									<div class="card-body table-responsive">
										<div class="">
											<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
												<thead>
													<tr>
													<tr>
														<th>#</th>
														<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
														<th>Type</th>
														<th>Video</th>
														<th>Date</th>
														<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
													</tr>
													</tr>
												</thead>
												<tbody>
													<?php $srno = 1;
													foreach ($videos as $item) {
													?>
														<tr>
															<td><?= $srno; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'product_video','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
																																																					echo 'checked';
																																																				} ?> id="switch-id<?= $srno; ?>">
																		<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
															<?php } ?>
															<td><?= $item->type; ?></td>
															<td><?php
																if ($item->type == "Internal") {
																?>
																	<video controls width="250" height="250">
																		<source src="<?= base_url('uploads/video/') . $item->video ?>" type="video/mp4">
																	</video>
																<?php
																} else {
																	$getYoutubeLinkData = $this->Auth_model->getYoutubeLinkData($item->video);
																	$yid = $getYoutubeLinkData->embedUrl;
																?>
																	<iframe width="250" height="250" src="<?= $yid ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																<?php
																}
																?>
															</td>
															<td><?= $item->created_at; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																<td>
																	<div class="btn-group">
																		<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'product_video','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															<?php } ?>
														</tr>
													<?php $srno++;
													} ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<br />
						</div>
					</div>
				</section>
				<section id="form-action-layouts">
					<div class="row match-height m-0">
						<div class="col-sm-12">
							<div class="card card-dashboard row">
								<div class="card-header p-0">
									<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
										<button class="btn btn-primary mx-1 mt-1"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Beauty Tips</button>
										<?php
										$beautytips = $this->db->get_where('tbl_beautytips', array('product_id' => $list->id))->row();
										if (empty($beautytips)) {
										?>
											<div class="d-flex justify-content-between py-1">
												<!--<button class="btn btn-dark btn-sm add-extra-content-beautytips" onclick="beautytips()" type="button">Add Beauty Tips&nbsp;<i class="fa fa-plus-circle"></i></button><br><br>-->
												<div class="col-sm-5 col-12 p-0">
													<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddBeautyTips'); ?>" method="post" enctype="multipart/form-data" id="addForm">

														<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
														<input type="hidden" name="id" required value="<?= $list->id ?>" />
														<div class="col-sm-12">
															<div id="beautyimg">
																<div class="form-group">
																	<label for="input-2">Beauty Modal Image<span class="text-danger">*(Image size must be 500*465)</span></label>
																	<input type="file" name="image" required class="form-control beautyimg">
																</div>
															</div>
															<span class="text-danger" style="font-size:12px;">Before Adding Points first verify X & Y axis according which Points show on top.</span>
															<div id="coordinates"></div>
															<hr>

														</div>
														<div class="col-sm-12 extra-beauty-tips py-0">

														</div>
														<button typr="submit" class="btn btn-primary mx-1 beauty-submit" style="display:none;">Submit&nbsp;<i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
													</form>
												</div>
												<div class="col-sm-7 col-12"><img id="BeautyModalImage" src="" style="width: 465px; height: 500px; border: 1px solid black; display:none;"></div>
											</div>
										<?php } ?>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
														<tr>
															<th>#</th>
															<th>Point</th>
															<th>Point Content</th>
															<th>X-axis</th>
															<th>Y-axis</th>
															<th>Date</th>
															<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
														</tr>
														</tr>
													</thead>
													<tbody>

														<?php $srno = 1;
														if (!empty($beautytips)) {
														?>
															<tr>
																<td><?= $srno; ?></td>
																<td><?= $beautytips->point_name; ?></td>
																<td><?= $beautytips->point_content; ?></td>
																<td><?= $beautytips->xaxis; ?></td>
																<td><?= $beautytips->yaxis; ?></td>
																<td><?= $beautytips->created_at; ?></td>
																<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																	<td>
																		<div class="btn-group">
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'tbl_beautytips','id','<?= $beautytips->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																		</div>
																	</td>
																<?php } ?>
															</tr>
														<?php  } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br />
					</div>
			</div>
			</section>


		</div>
	</div>
	</div>

	<!--Modal Start-->
	<div class="modal fade" id="updateModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Update Product Image </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateImageData'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
					<div class="modal-body p-1">
						<div class="input__box">
							<input type="hidden" name="id" value="<?= $list->id ?>">
							<?php echo form_error("id", "<p class='text-danger' >", "</p>"); ?>
							<input type="hidden" name="imagename" class="imagename" value="" required>
							<?php echo form_error("imagename", "<p class='text-danger' >", "</p>"); ?>
						</div>
						<div class="input__box">
							<center><img src="" class="currentImg" id="currentImg" alt="" height="150" width="150"></center>
						</div>
						<div class="input_box w-100">
							<span class="details">Update Product Image</span>
							<input class="form-control" type="file" id="formFile" style="outline:none; box-shadow:none;" name="icon" oninput="document.getElementById('currentImg').src = window.URL.createObjectURL(this.files[0])" required>
							<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
					</div>
				</form>

			</div>
		</div>
	</div>
	<!--Modal End-->

	<!--Modal Start-->
	<div class="modal fade" id="AddModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Variant</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddVariant'); ?>" method="post" enctype="multipart/form-data" id="addVideo">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<input type="hidden" name="id" value="<?= $list->id ?>" />
						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Variant Code Must Be Unique">Variant Code<span class="text-danger"> *</span></label>
							<input type="text" readonly name="variant_code" value="" id="varient_code" placeholder="Variant Code" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="input-2">Color<span class="text-danger">*</span></label>
							<select name="p_color" class="form-control " required>
								<option value="" selected disabled>Enter Color</option>
								<option value="NA">N/A</option>
								<?php
								foreach ($colorlist as $each) {
								?>
									<option style='background-color: <?= $each->code ?>' value="<?= $each->code ?>"><?= $each->name; ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<!-- <div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Image <span class="text-danger"> (Use CTRL + Click To Select Multiple Images)* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" required class="form-control demoInputBox1" type="file" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" name="image[]" multiple="multiple" title="Choose First Product Image.">
							<span id="file_error1"></span>
						</div> -->
						<div class="form-group">
							<label for="input-2">Product Type<span class="text-danger">*</span></label>
							<select required name="size_type" onchange="change_sizetype(this.value);" placeholder="Enter Size" class="form-control">
								<option value="NA">N/A</option>
								<?php
								$sizelist = $this->db->get('tbl_size')->result();
								foreach ($sizelist as $each) {
								?>
									<option value="<?= $each->id ?>"><?= $each->size_type ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="input-2">Size<span class="text-danger">*</span></label>
							<div id="sizename">
								<select required name="p_size[]" data-placeholder="Enter Size" multiple="multiple" class="form-control chosen-select">
									<option value="NA" id="sizeoption">N/A</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="input-2">Size Stock<span class="text-danger">(Enter size stock in which sequence defined size)*</span></label>
							<input type="text" required name="p_size_count" placeholder="Enter Size Stock Eg. 32,34,36 Etc." class="form-control text-uppercase">
						</div>


						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Front View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="front_view_image" title="Choose Product Front View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Back View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="back_view_image" title="Choose Product Back View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Right View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="rside_view_image" title="Choose Product Right View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Left View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="lside_view_image" title="Choose Product Left View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Top View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="top_view_image" title="Choose Product Top View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Bottom View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="bottom_view_image" title="Choose Product Bottom View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<div class="form-group">
							<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Close View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="close_view_image" title="Choose Product Close View Image." oninput="image1()">
							<span id="file_error1"></span>
						</div>

						<!--<div class="form-group">
				<label for="input-2">Unit<span class="text-danger">*</span></label>
				<input type="text" list="varunit" required name="p_unit" placeholder="Enter Unit"  class="form-control text-uppercase">
				<datalist id="varunit">
				<option value="mg"></option>
				<option value="gm"></option>
				<option Value="ml"></option>
				<option value="liter"></option>
				<option value="kg"></option>
				</datalist>
				</div>
				<div class="form-group">
				<label for="input-2">Weight<span class="text-danger">*</span></label>
				<input type="text" name="p_weight"  placeholder="Enter Weight" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">MRP<span class="text-danger">*</span></label>
				<input type="text" name="p_mrp" required placeholder="Enter MRP" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Offer Price<span class="text-danger">*</span></label>
				<input type="text" name="p_price" required  placeholder="Enter Offer Price" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Avaliability<span class="text-danger">*</span></label>
				<select name="avaliability" class="form-control" required>
				<option selected disabled>--- Select Avaliability ---</option>
				<option value="true">Yes</option>
				<option value="false">No</option>
				
				</select>
				</div>
				<div class="form-group">
				<label for="input-2">Quantity<span class="text-danger">*</span></label>
				<input type="number" required name="stock"  placeholder="Quantity" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Bar Code<span class="text-danger">*</span></label>
				<input type="number" required name="baar_code"  placeholder="Bar Code" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Length<span class="text-danger">*</span></label>
				<input type="text"  name="length"  placeholder="Length" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Width<span class="text-danger">*</span></label>
				<input type="text"  name="width"  placeholder="Width" class="form-control">
				</div>
				<div class="form-group">
				<label for="input-2">Height<span class="text-danger">*</span></label>
				<input type="text"  name="height"  placeholder="Height" class="form-control">
				</div> -->
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->


	<!--Modal Start-->
	<div class="modal fade" id="VideoModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddVideo'); ?>" method="post" enctype="multipart/form-data" id="addVideo">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<input type="hidden" name="id" value="<?= $list->id ?>" />
						<div class="form-group">
							<label for="input-2">Video Type<span class="text-danger">*</span></label>
							<select required onchange="getType(this.value)" name="type" class="form-control ">
								<option selected disabled>-- Select --</option>
								<option value="Internal">Internal</option>
								<option value="Youtube">Youtube</option>
							</select>
						</div>
						<div style="display:none" id="vdodiv">
							<div class="form-group">
								<label for="input-2">Video<span class="text-danger">*</span></label>
								<input type="file" id="videointernal" name="video" accept="video/mp4" class="form-control">
							</div>
						</div>
						<div style="display:none" id="linkdiv">
							<div class="form-group">
								<label for="input-2">YouTube Link<span class="text-danger"> (Embed Link Only)*</span></label>
								<input type="text" id="vdolink" required name="vdolink" accept="video/mp4" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->

	<?php require APPPATH . 'views/Auth/Footer.php'; ?>
	<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>

	<script>
		function getType(val) {
			if (val != null) {
				if (val == "Internal") {
					$("#vdodiv").show();
					$("#linkdiv").hide();

					$('#videointernal').attr('required', true);
					$('#vdolink').removeAttr('required', true);

				} else if (val == "Youtube") {
					$("#vdodiv").hide();
					$("#linkdiv").show();

					$('#vdolink').attr('required', true);
					$('#videointernal').removeAttr('required', true);
				}
			}

		}

		$('#addVideo').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#addBtn2');
			var spinAction = $('#addSpin2');
			e.preventDefault();
			var data = new FormData(this);
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
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
	</script>
	<script type="text/javascript">
		function change_sizetype(id) {
			var id = id;
			var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/sizetype/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",
				success: function(res) {

					$("#sizename").html(res);
					$('.chosen-select').chosen();
					// breadcrumb(); 
				}
			})
		}
		$('.beautyimg').on('input', function() {
			path = (window.URL ? URL : webkitURL).createObjectURL(this.files[0]);
			$('#BeautyModalImage').attr('src', path);
			$('#BeautyModalImage').show();
		})
		// function beautytips()  
		// {

		// }

		const removebox = (e) => {

			$(e).closest('.row').parent().remove();

			var divcount = $('.div-count').length;
			if (divcount <= '4') {
				$(".add-extra-content-youtube").show();
			}
		}


		var image = document.getElementById("BeautyModalImage");
		const coordinates = document.getElementById("coordinates");

		let clickCount = 0;
		image.addEventListener("click", function(event) {

			// here the X and Y on Click
			X = (event.pageX - $(event.target).offset().left).toFixed(0);
			Y = (event.pageY - $(event.target).offset().top).toFixed(0);
			coordinates.innerHTML = `X: ${X}, Y: ${Y}`;

			$(".extra-beauty-tips").append('<div class="div-count"><div class="row"><div class="col-sm-12 d-flex p-0"><div class="col-sm-5 "><div class="form-group"><label>Point Name</label><input type="text" required name="point_name[]" placeholder="Enter Point Name" class="form-control"></div></div><div class="col-sm-2 "><div class="form-group"><label>X-axis</label><input type="text" class="x' + clickCount + ' form-control" required readonly name="xaxis[]" placeholder="px"  style="padding:8px"></div></div><div class="col-sm-2 "><div class="form-group"><label>Y-axis</label><input type="text" class="y' + clickCount + ' form-control" readonly required name="yaxis[]" placeholder="px"  style="padding:8px"></div></div><div class="col-sm-2 "><div class="form-group"><label>Remove</label><br><button class="btn btn-danger btn-sm fa fa-times-circle remove-extra-content-youtube p-1" onclick="removebox(this)" type="button"></button></div></div></div></div><div class="col-sm-12 p-0" id="refundpoli"><div class="form-group"><label>Beauty Tips Content</label><textarea class="form-control summernote" style="border:1px solid #aaa" required name="point_content[]" ></textarea></div></div></div>');

			xaxis = '.x' + clickCount;
			yaxis = '.y' + clickCount;
			$(xaxis).val(X);
			$(yaxis).val(Y);

			var divcount = $('.div-count').length;
			if (divcount => '1') {
				$(".beauty-submit").show();
			}

			clickCount++;
		});

		function editImage(imagename) {
			var a = "<?= base_url('uploads/product/') ?>" + imagename;
			$('.currentImg').attr('src', a);
			$('.imagename').val(imagename);
		}
	</script>
</body>

</html>