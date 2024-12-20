<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>

	<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
	<style>
		.dt-buttons {
			display: none !important;
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

								<li class="breadcrumb-item <?= empty($details) ? 'active' : '' ?>"><?= !empty($cmp_details) ? $cmp_details->title : '' ?></li>
								<?php
								if (!empty($details->title)) {
								?>
									<li class="breadcrumb-item <?= !empty($details) ? 'active' : '' ?>"><?= !empty($details->title) ? $details->title : '' ?></li>
								<?php
								}
								?>
							</ol>

						</div>

					</div>

				</div>

			</div>
			<?php
			$permission = '';
			$role_type = 'admin';
			if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
				$permission = $this->permissionAuth->slider;
				$role_type = 'subadmin';
			}
			?>
			<div class="content-body">

				<section id="form-action-layouts">

					<div class="row match-height">

						<div class="col-sm-12 mb-5">

							<div class="card card-dashboard">

								<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
									<div class="card-header p-1">
										<div class="row">
											<div class="col-sm-12 mb-2">
												<form action="" method="get">
													<div class="d-flex search_div">
														<div><b class="text-danger">From Date:</b> <br /><input type="date" name="from_date" value="<?= isset($_GET['from_date']) ? $_GET['from_date'] : '' ?>" class="form-control1"></div>
														<div><b class="text-danger">To Date:</b> <br /><input type="date" name="to_date" value="<?= isset($_GET['to_date']) ? $_GET['to_date'] : '' ?>" class="form-control1"></div>
														<div><b class="text-danger">Category:</b> <br />
															<select name="category" class="form-control1" onchange="change_subcat(this.value);">
																<option value="" selected disabled>--Category--</option>
																<?php foreach ($categoryList as $category) {
																?>
																	<option value="<?= $category['id'] ?>" <?= isset($_GET['category']) && $_GET['category'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
																<?php
																}
																?>
															</select>
														</div>
														<div><b class="text-danger">Subcategory:</b><br />
															<select name="subcat" id="subcat" class="form-control1">
																<option value="" selected disabled>--SubCategory--</option>
																<?php foreach ($subcategoryList as $subcat) {
																?>
																	<option value="<?= $subcat['id'] ?>" <?= isset($_GET['subcat']) && $_GET['subcat'] == $subcat['id'] ? 'selected' : '' ?>><?= $subcat['name'] ?></option>
																<?php
																}
																?>
															</select>
														</div>
														<div>
															<b class="text-danger">&nbsp;</b><br />
															<button type="submit" class="search_btn"><i class="fa fa-search"></i> Search</button>
															<a href="<?= base_url('Admin/ManageComponentItem/' . $this->uri->segment('3')) ?><?= $this->uri->segment('4') ? '/' . $this->uri->segment('4') : '' ?>" class="refresh_btn"><i class="fa fa-refresh"></i> Refresh</a>
														</div>
													</div>

												</form>
											</div>
											<div class="col-sm-12">
												<input type="text" id="start_date" class="datePicker" name="start_date" required placeholder="Start Date">

												<input type="text" id="end_date" class="datePicker" name="end_date" required placeholder="End Date">

												<button class="badge badge-info" onclick="AddProduct()"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Selected</button>

											</div>

										</div>
									</div>

								<?php } ?>



								<div class="card-content collpase show">
									<?php
									// var_dump($productList);
									?>
									<div class="card-body table-responsive">

										<div class="">

											<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">

												<thead>

													<tr>
														<th><input type="checkbox" id="checkall_p"></th>
														<th>#</th>
														<th>Name</th>
														<th>Image</th>
														<th>Reg. sell Price</th>
														<th>View</th>
													</tr>
												</thead>
												<tbody>

													<?php $srno = 1;
													foreach ($productList as $item) { ?>

														<tr data-id="<?= $item->id; ?>">
															<td><input type="checkbox" value="<?= $item->id ?>" name="id[]" class="selectall_p"></td>
															<td><?= $srno; ?></td>

															<td><?= $item->name; ?></td>
															<td><img src="<?= base_url('uploads/product/' . $item->front_view_image) ?>" alt="Product Image" height="100"></td>
															<td><?= $item->reg_sell_price; ?></td>
															<td><a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller . '/ManageProduct/' . 'ViewProduct/' . $item->id); ?>" target="_blank">View</a></td>

														</tr>

													<?php
														$srno++;
													} ?>

												</tbody>

											</table>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="col-sm-12">

							<div class="card card-dashboard">
								<div class="card-header p-1">
									<div class="row">
										<div class="col-sm-12">
											<form action="" method="get">
												<div class="d-flex search_div">
													<div><b class="text-danger">Start Date:</b> <br /><input type="date" name="afrom_date" value="<?= isset($_GET['afrom_date']) ? $_GET['afrom_date'] : '' ?>" class="form-control1"></div>
													<div><b class="text-danger">End Date:</b> <br /><input type="date" name="ato_date" value="<?= isset($_GET['ato_date']) ? $_GET['ato_date'] : '' ?>" class="form-control1"></div>
													<div><b class="text-danger">Category:</b> <br />
														<select name="acategory" class="form-control1" onchange="change_subcat1(this.value);">
															<option value="" selected disabled>--Category--</option>
															<?php foreach ($categoryList as $category) {
															?>
																<option value="<?= $category['id'] ?>" <?= isset($_GET['acategory']) && $_GET['acategory'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<div><b class="text-danger">Subcategory:</b><br />
														<select name="asubcat" id="subcat1" class="form-control1">
															<option value="" selected disabled>--SubCategory--</option>
															<?php foreach ($asubcategoryList as $subcat) {
															?>
																<option value="<?= $subcat['id'] ?>" <?= isset($_GET['asubcat']) && $_GET['asubcat'] == $subcat['id'] ? 'selected' : '' ?>><?= $subcat['name'] ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<div>
														<b class="text-danger">&nbsp;</b><br />
														<button type="submit" class="search_btn"><i class="fa fa-search"></i> Search</button>
														<a href="<?= base_url('Admin/ManageComponentItem/' . $this->uri->segment('3')) ?>" class="refresh_btn"><i class="fa fa-refresh"></i> Refresh</a>
													</div>
												</div>

											</form>
											</div>
											<div class="col-sm-12">
												<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
													<div class="card-header">

														<button class="badge badge-danger" onclick="check('<?= $this->data->table ?>')">
															<i class="fa fa-trash" aria-hidden="true"></i> Delete Selected</button>
													</div>
												<?php } ?>
											</div>
									</div>
								</div>
								<div class="card-content collpase show">

									<div class="card-body table-responsive">

										<div class="">

											<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;" id="table_p">

												<thead>

													<tr>
														<th><input type="checkbox" id="checkall"></th>
														<th>#</th>
														<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?><th>Status</th><?php } ?>

														<th>Name</th>
														<th>Image</th>
														<th>Reg. sell Price</th>
														<th>Start Date</th>
														<th>End Date</th>
														<th>View</th>
														<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
													</tr>
												</thead>
												<tbody>

													<?php
													// var_dump($addedProductList[0]);
													$srno = 1;
													foreach ($addedProductList as $item) { ?>

														<tr data-id="<?= $item->hp_item_id; ?>">
															<td><input type="checkbox" value="<?= $item->hp_item_id ?>" name="id[]" class="selectall"></td>
															<td><?= $srno; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->hp_item_id; ?>','is_status')" <?php if ($item->hp_is_status == 'true') {
																																																											echo 'checked';
																																																										} ?> id="switch-id<?= $srno; ?>">

																		<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
															<?php } ?>

															<td><?= $item->name; ?></td>
															<td><img src="<?= base_url('uploads/product/' . $item->front_view_image) ?>" alt="Product Image" height="100"></td>
															<td><?= $item->reg_sell_price; ?></td>

															<td><?= $item->start_date; ?></td>
															<td><?= $item->end_date; ?></td>
															<td><a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller . '/ManageProduct/' . 'ViewProduct/' . $item->id); ?>" target="_blank">View</a></td>

															<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																<td>
																	<div class="btn-group">
																		<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit1('<?= $cmp_details->id ?>','<?= $item->hp_item_id; ?>')"> <i class="fa fa fa-edit"></i></a>
																		<?php } ?>
																		<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->hp_item_id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
																		<?php }  ?>

																	</div>
																</td>
															<?php } ?>
														</tr>

													<?php
														$srno++;
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

				<div class="modal fade bd-example-modal-lg" id="EditModal">

					<div class="modal-dialog modal-lg">

						<div class="modal-content border-primary">

							<div class="modal-header bg-primary p-1">

								<h5 class="modal-title text-white">Edit <?= $this->data->key; ?></h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>



							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/' . $this->uri->segment(3) . '?action=Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">

								<div class="modal-body p-1">



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
			</div>

		</div>

	</div>

	<?php require APPPATH . 'views/Auth/Footer.php'; ?>

	<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
	<script>
		$(document).ready(function() {

			$('#table_p tbody').sortable({
				items: 'tr',
				cursor: 'move',
				opacity: 0.6,
				update: function(event, ui) {
					var order = $(this).sortable('toArray', {
						attribute: 'data-id'
					});
					$.ajax({
						url: '<?= base_url($this->data->controller . '/' . $this->data->method . '/' . $this->uri->segment('3') . '?action=SortingSlider') ?>',
						method: 'POST',
						data: {
							order: order
						},
						success: function(response) {
							var response = JSON.parse(response);
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", response[0].res);
						}
					});
				}
			}).disableSelection();


		});

		function change_subcat(id) {
			$("#subcat").html('');
			var id = id;
			var url = "<?= base_url($this->data->controller . '/ManageProduct/subcategory/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",

				success: function(res) {
					$("#subcat").html(res);
					breadcrumb();
				}
			})
		}

		function change_subcat1(id) {
			$("#subcat1").html('');
			var id = id;
			var url = "<?= base_url($this->data->controller . '/ManageProduct/subcategory/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",

				success: function(res) {
					$("#subcat1").html(res);
					breadcrumb();
				}
			})
		}

		$('#checkall').click(function() {
			if ($(this).prop('checked')) {
				$('.selectall').prop('checked', true);
			} else {
				$('.selectall').prop('checked', false);
			}
		});

		$('#checkall_p').click(function() {
			// alert('ok');
			if ($(this).prop('checked')) {
				$('.selectall_p').prop('checked', true);
			} else {
				$('.selectall_p').prop('checked', false);
			}
		});

		function AddProduct() {
			var start_date = $('#start_date').val();
			var end_date = $('#end_date').val();
			var value = [];
			$('.selectall_p:checked').each(function(i) {
				value[i] = $(this).val();
			});
			if (value.length == 0) {
				$.notify("Pleas check atleast one box !", "error");

			} else if (start_date.length == 0) {
				$.notify("Pleas choose start date time !", "error");

			} else if (end_date.length == 0) {
				$.notify("Pleas choose end date time !", "error");

			} else {
				<?php
				if($details){
					?>
					let url = "<?= base_url('Admin/ManageComponentItem/' .$cmp_details->id)?>" + "<?=   '/'.$details->id ?>"+"<?= '?action=Add' ?>";
					<?php
				}else{
				?>
				let url = "<?= base_url('Admin/ManageComponentItem/' .$cmp_details->id)?>" +"<?= '?action=Add' ?>";
				<?php
				}
				?>
				let page_id="<?= $details ? $details->id :'' ?>";
				$.ajax({
					url: url,
					type: "post",
					data: {
						'start_date': start_date,
						'end_date': end_date,
						'page_id': page_id,
						'ids': value,
					},
					success: function(response) {
						console.log(response[0]);
						swal(response[0].msg, {
							icon: response[0].res,
						});
						if (response[0].res == 'success') {

							location.reload();
						}
					}
				});
			}

		};
	</script>
</body>

</html>