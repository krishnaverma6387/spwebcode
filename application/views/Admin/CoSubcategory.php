<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
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
				$permission = $this->permissionAuth->category;
				$role_type = 'subadmin';
			}
			?>
			<div class="content-body">
				<section id="form-action-layouts">
					<div class="row match-height">
						<div class="col-sm-12">
							<div class="card card-dashboard">
								<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
									<div class="card-header p-1">
										<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?= $this->data->key; ?></button>
											<button class="btn btn-danger" onclick="check('co_subcategory')">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete Selected</button>
									</div>
								<?php } ?>
								<div class="card-content collpase show">
									<div class="card-body table-responsive">
										<div class="">
											<?php
											$i = 1;
											foreach ($list as $item) {
												if (!empty($item['subcategories'])) {
													foreach ($item['subcategories'] as $subcat) {
														if (!empty($subcat['cosubcategories'])) {
											?>
															<div class="div_tabs <?= $i == 1 ? 'd-block' : 'd-none' ?>" id="Tab_<?= $i ?>">

																<h3 class="border-bottom"><?= $item['name'] ?> / <small><?=$subcat['name']?></small></h3>
																<table class="table table-striped table-bordered " style="width:100%;">
																	<thead>
																		<tr>
																		<th><input type="checkbox" id="checkall"></th>
																			<th>#</th>
																			<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																																
																			<th>Co-Subcategory</th>
																			<th>Sub-Category</th>
																			<th>Category</th>
																			<th>Created Date</th>
																			<th>Modified Date</th>
																			<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $srno = 1;

																		foreach ($subcat['cosubcategories'] as $cosubcat) {
																		?>
																			  <tr data-id="<?= $cosubcat['id'] ?>">
																			  <td><input type="checkbox" value="<?= $cosubcat['id'] ?>" name="id[]" class="selectall"></td>
																				<td><?= $srno; ?></td>
																				<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																					<td>
																						<div class="custom-control custom-switch custom-control-inline">
																							<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $cosubcat['id']; ?>','is_status')" <?php if ($cosubcat['is_status'] == 'true') {
																																																														echo 'checked';
																																																													} ?> id="switch-id<?= $srno; ?>">
																							<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																						</div>
																					</td>
																				<?php } ?>
																				<td><?= ucfirst($cosubcat['name']); ?></td>

																				<td><?php if (!empty($subcat['name'])) {
																						echo ucfirst($subcat['name']);
																					} ?></td>
																					<td><?php if (!empty($item['name'])) {
																							echo ucfirst($item['name']);
																						} ?></td>
																				<td><?= $cosubcat['created_at']; ?></td>
																				<td><?= $cosubcat['modified_at']; ?></td>
																				<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																					<td>
																						<div class="btn-group">
																							<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																								<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $cosubcat['id']; ?>')"> <i class="fa fa fa-edit"></i></a>
																							<?php } ?>
																							<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																								<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $cosubcat['id']; ?>','','')"> <i class="fa fa-trash"></i> </a>
																							<?php } ?>
																						</div>
																					</td>
																				<?php } ?>
																			</tr>
																		<?php $srno++;
																		}
																		?>
																	</tbody>
																</table>
																<a onclick="ShowPrevious(<?= $i ?>)" class="btn btn-primary">Previous</a>
																<a onclick="ShowNext(<?= $i ?>)" class="btn btn-primary">Next</a>
															</div>
											<?php
															$i++;
														}
													}
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Modal Start-->
				<div class="modal fade" id="AddModal">
					<div class="modal-dialog">
						<div class="modal-content border-primary">
							<div class="modal-header bg-primary p-1">
								<h5 class="modal-title text-white">Add <?= $this->data->key; ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
								<div class="modal-body p-1">

									<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

									<div class="form-group">
										<label class="col-form-label">Category<span class="text-danger">*</span></label>
										<select class="text-capitalize form-control" name="category" onchange="change_subcat(this.value);" required>
											<option selected disabled>Select</option>
											<?php
											foreach ($categorylist as $each) {
											?>
												<option value="<?= $each->id ?>"><?= $each->name ?></option>
											<?php } ?>

										</select>
										<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label data-toggle="tooltip" data-placement="top" title="Select Product Sub-Category Eg. Neckless Etc.">Product Subcategory<span class="text-danger"> *</span></label>
										<select name="subcategory" required class="form-control " id="subcat" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory...">
											<option selected disabled>--- Select Category First ---</option>

										</select>
									</div>
									<div class="form-group">
										<label class="col-form-label">Co-Subcategory <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="name" placeholder="Enter Sub-category Name" required>
										<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
									</div>
									<!-- <div class="form-group">
											<label class="col-form-label">Vendor Commision <span class="text-danger"> (In %)*</span></label>
											<input type="number" class="form-control commision" name="commision" placeholder="Enter Vendor Commision" required min="0"  max="100" step="any" >
											<?php echo form_error("commision", "<p class='text-danger'>", "</p>"); ?>
										</div> -->

									<!--div class="form-group">
											<label class="col-form-label">Expert Commision <span class="text-danger"> (In %)*</span></label>
											<input type="number" class="form-control" name="commisionexpert" placeholder="Enter Expert Commision" required>
											<?php echo form_error("commisionexpert", "<p class='text-danger'>", "</p>"); ?>
										</div-->

								</div>

								<div class="modal-footer d-block p-1">
									<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--Modal End-->
				<!--Modal Start-->
				<div class="modal fade" id="EditModal">
					<div class="modal-dialog">
						<div class="modal-content border-primary">
							<div class="modal-header bg-primary p-1">
								<h5 class="modal-title text-white">Edit <?= $this->data->key; ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
								<div class="modal-body p-1">

								</div>
								<div class="modal-footer d-block p-1">
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
		function change_subcat(id) {
			var id = id;
			var url = "<?= base_url($this->data->controller . '/ManageProduct/subcategory/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",

				success: function(res) {
					$("#subcat").html(res);
				}
			})
		}
	</script>
	<script>
		function ShowPrevious(i) {
			i = i - 1;
			if (i > 0) {
				$(".div_tabs").removeClass('d-block').addClass('d-none');
				$("#Tab_" + i).removeClass('d-none').addClass('d-block');
			}
		}

		function ShowNext(i) {
			i = i + 1;
			if ($("#Tab_" + i).length) {
				$(".div_tabs").removeClass('d-block').addClass('d-none');
				$("#Tab_" + i).removeClass('d-none').addClass('d-block');
			}
		}
	</script>
	<script>
		$(document).ready(function() {

			$('.table tbody').sortable({
				items: 'tr',
				cursor: 'move',
				opacity: 0.6,
				update: function(event, ui) {
					var order = $(this).sortable('toArray', {
						attribute: 'data-id'
					});
					$.ajax({
						url: '<?= base_url($this->data->controller . '/' . $this->data->method . '/SortingCoSubCategory') ?>',
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

		$('#checkall').click(function() {
			if ($(this).prop('checked')) {
				$('.selectall').prop('checked', true);
			} else {
				$('.selectall').prop('checked', false);
			}
		});
	</script>
</body>

</html>