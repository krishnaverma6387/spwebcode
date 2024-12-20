<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
	<link rel="stylesheet" href="<?= base_url('assets/application/vendors/jquery-ui/jquery-ui.css') ?>">
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
										<button class="btn btn-danger" onclick="check('sub_category')">
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
											?>
													<div class="div_tabs <?= $i == 1 ? 'd-block' : 'd-none' ?>" id="Tab_<?= $i ?>">

														<h3 class="border-bottom"><?= $item['name'] ?></h3>
														<table class="table table-striped table-bordered" style="width:100%;">
															<thead>
																<tr>
																	<th><input type="checkbox" id="checkall<?= $i ?>" value="<?= $i ?>" onclick="checkAll(this)"></th>
																	<th>#</th>
																	<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																	<th>Sub-Category</th>
																	<th>Size</th>
																	<th>Category Tag</th>
																	<th>Category</th>
																	<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																</tr>
															</thead>
															<tbody>
																<?php $srno = 1;
																foreach ($item['subcategories'] as $subcat) {

																?>
																	<tr data-id="<?= $subcat['id']; ?>">
																		<td><input type="checkbox" value="<?= $subcat['id'] ?>" name="id[]" class="selectall selectall<?= $i ?>"></td>
																		<td><?= $srno; ?></td>
																		<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																			<td>
																				<div class="custom-control custom-switch custom-control-inline">
																					<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $subcat['id']; ?>','is_status')" <?php if ($subcat['is_status'] == 'true') {
																																																													echo 'checked';
																																																												} ?> id="switch-id<?= $srno; ?>">
																					<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																				</div>
																			</td>
																		<?php } ?>
																		<td><?php if (!empty($subcat['name'])) {
																				echo $subcat['name'];
																			} ?></td>
																		<td><?= $subcat['size_type']; ?> <br> <?= $subcat['size_name']?></td>
																		<td><?= $subcat['tag_name']; ?></td>
																		<td><?= $item['name']; ?></td>
																		<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																			<td>
																				<div class="btn-group">
																					<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																						<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $subcat['id']; ?>')"> <i class="fa fa fa-edit"></i></a>
																					<?php } ?>
																					<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																						<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $subcat['id']; ?>','','')"> <i class="fa fa-trash"></i> </a>
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
										<select class="text-capitalize form-control" name="category" required onchange="getCatTag(this.value)">
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
										<label class="col-form-label">Category Tag <span class="text-danger">*</span></label>
										<select class="text-capitalize form-control" name="cat_tag_id" id="cat_tag_id" required>
											<option selected disabled>Select Category Tag</option>

										</select>
										<?php echo form_error("cat_tag_id", "<p class='text-danger'>", "</p>"); ?>
									</div>
									<div class="form-group">
										<label class="col-form-label">Size Type<span class="text-danger">*</span></label>
										<select class="text-capitalize form-control" name="size_id" required >
											<option selected disabled>Select</option>
											<?php
											foreach ($sizelist as $size) {
											?>
												<option value="<?= $size->id ?>"><?= $size->size_type ?></option>
											<?php } ?>

										</select>
										<?php echo form_error("size_id", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label class="col-form-label">Sub-Category <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="name" placeholder="Enter Sub-category Name" required>
										<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
									</div>
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
						url: '<?= base_url($this->data->controller . '/' . $this->data->method . '/SortingSubCategory') ?>',
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

	<script>
		function getCatTag(id) {
    var url = "<?= base_url($this->data->controller . '/getCatTag/') ?>" + id;
    $.ajax({
        url: url,
        type: "post",
        success: function(res) {
            res = JSON.parse(res); // Parse the JSON response
			console.log(res);
            if (res[0].res === 'success') {
                const selectElement = document.getElementById('cat_tag_id');
                selectElement.innerHTML = '<option value="" selected disabled>Select Category Tag</option>';
                res[0].data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.id;
                    option.text = item.tag_name;
                    selectElement.appendChild(option);
                });
				
				const selectElement1 = document.getElementById('cat_tag_id1');
                selectElement1.innerHTML = '<option value="" selected disabled>Select Category Tag</option>';
                res[0].data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.id;
                    option.text = item.tag_name;
                    selectElement1.appendChild(option);
                });
            } else {
                console.error(res[0].msg);
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error: ' + error);
        }
    });
}

	</script>
</body>

</html>