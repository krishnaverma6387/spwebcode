<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
	<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
	<style>
		.chosen-choices {
			padding: 6px !important;
			border-radius: 5px !important;
			box-shadow: none !important;
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
			<div class="content-body">
				<section id="form-action-layouts">
					<div class="row match-height">
						<div class="col-sm-12">
							<div class="card card-dashboard">
								<div class="card-content collpase show">
									<div class="card-body " style="min-height:600px;">
										<?php if (!empty($variants->variant_img)) { ?>
											<table class="table table-bordered table-responsive">
												<thead>
													<tr>
														<?php $count = 1;
														foreach (explode(",", $variants->variant_img) as $img) { ?>
															<th>Image <?= $count ?></th>
														<?php $count++;
														} ?>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php $count = 1;
														foreach (explode(",", $variants->variant_img) as $img) { ?>
															<td>
																<center><img src="<?= base_url('uploads/' . $this->data->folder . '/' . $img) ?>" style="height:150px;width:125px;"><br><br><button type="button" class="btn btn-primary bi bi-pencil-square editImage" onclick="editImage('<?= $img ?>')" title="Update" data-toggle="modal" data-target="#updateModal" id="product_main_img"></button> <button class="btn btn-danger bi bi-trash" onclick="DeleteVariantImage('<?= $this->uri->segment(5) ?>','<?= $img ?>')" title="delete"></button></center>
															</td>
														<?php } ?>
													</tr>
												</tbody>
											</table>
										<?php } ?>
										<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateVariantDetails/' . $this->uri->segment(5)); ?>" method="post" enctype="multipart/form-data" id="addForm2">
											<div class="row">
												<div class="row m-0">
													<div class="col-sm-12">
														<p><b>Variant Code: </b> <?= $variants->variant_code ?></p>
													</div>
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image:'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->front_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Front View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="front_view_image" title="Choose Product Front View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image :'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->back_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Back View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="back_view_image" title="Choose Product Back View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image:'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->rside_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Right View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="rside_view_image" title="Choose Product Right View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image :'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->lside_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Left View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="lside_view_image" title="Choose Product Left View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image : '#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->top_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Top View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="top_view_image" title="Choose Product Top View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image :'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->bottom_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Bottom View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="bottom_view_image" title="Choose Product Bottom View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="text-center mb-1"><a href="<?= $variants->bottom_view_image ? base_url('uploads/product/') . $variants->bottom_view_image :'#' ?>" target="_blank" title="Front View Image"><img src="<?= base_url('uploads/product/') . $variants->close_view_image ?>" style="height:100px; width:100px;" /></a></div>
																	<label data-toggle="tooltip" data-placement="top" title="Product Images">Product Close View Image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																	<input id="file1" class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="close_view_image" title="Choose Product Close View Image.">
																	<span id="file_error1"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
														<input type="hidden" name="id" value="<?= $list->id ?>" />

														<div class="form-group">
															<label for="input-2">Color<span class="text-danger">*</span></label>
															<select name="p_color" class="form-control " required>
																<option value="NA" <?php if ($variants->color == "NA") {
																						echo "selected";
																					} ?>>N/A</option>
																<?php
																foreach ($colorlist as $each) {
																?>
																	<option style='background-color: <?= $each->code ?>' value="<?= $each->code ?>" <?php if ($variants->color == $each->code) {
																																						echo "selected";
																																					} ?>><?= $each->name; ?></option>
																<?php
																}
																?>
															</select>
														</div>
													</div>

													<div class="col-sm-6">
														<div class="form-group">
															<label for="input-2">Product Type<span class="text-danger">*</span></label>
															<select required name="size_type" onchange="change_sizetype(this.value);" placeholder="Enter Size" class="form-control">
																<option value="NA" <?php if ($variants->size_type == 'NA') {
																						echo "selected";
																					} ?>>N/A</option>
																<?php
																$sizelist = $this->db->get('tbl_size')->result();
																foreach ($sizelist as $each) {
																?>
																	<option value="<?= $each->id ?>" <?php if ($variants->size_type == $each->id) {
																											echo "selected";
																										} ?>><?= $each->size_type ?></option>
																<?php
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="input-2">Size<span class="text-danger">*</span></label>
															<div id="sizename">
																<select required name="p_size[]" data-placeholder="Enter Size" multiple="multiple" class="form-control chosen-select">
																	<option value="NA" <?php if ($variants->size_type == 'NA') {
																							echo "selected";
																						} ?> id="sizeoption">N/A</option>
																	<?php
																	if ($variants->size_type != 'NA') {
																		$inserted_sizes = json_decode($variants->size);
																		$sizename = [];
																		$sizestock = [];
																		foreach ($inserted_sizes as $eachSize) {
																			foreach ($eachSize as $size => $size_stock) {
																				array_push($sizename, $size);
																				array_push($sizestock, $size_stock);
																			}
																		}
																		$sizelist = $this->db->get_where('tbl_size', ['id' => $variants->size_type])->row();
																		$sizes = explode(',', $sizelist->size_name);
																		for ($i = 0; $i < count($sizes); $i++) {
																	?>
																			<option class="optionsizename<?= $sizes[$i] ?>" value="<?= $sizes[$i] ?>" <?php if (in_array($sizes[$i], $sizename)) {
																																							echo "selected";
																																						} ?>><?php echo $sizes[$i]; ?></option>
																	<?php
																			$sr++;
																		}
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													<?php
													if ($variants->size_type != 'NA') {
														$stock = implode(",", $sizestock);
													} else {
														$stock = 0;
													}
													?>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="input-2">Size Stock<span class="text-danger">(Enter size stock in which sequence defined size)*</span></label>
															<input type="text" value="<?= $stock; ?>" required name="p_size_count" placeholder="Enter Size Stock Eg. 32,34,36 Etc." class="form-control text-uppercase">
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer d-block p-0">
												<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	<?php require APPPATH . 'views/Auth/Footer.php'; ?>
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
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateVariantImage'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
					<div class="modal-body p-1">
						<div class="input__box">
							<input type="hidden" name="product_id" value="<?= $this->uri->segment(4) ?>">
							<?php echo form_error("product_id", "<p class='text-danger' >", "</p>"); ?>
							<input type="hidden" name="id" value="<?= $this->uri->segment(5) ?>">
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
	<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>


	<script type="text/javascript">
		function editImage(imagename) {
			var a = "<?= base_url('uploads/product/') ?>" + imagename;
			$('.currentImg').attr('src', a);
			$('.imagename').val(imagename);
		}
	</script>
</body>

</html>