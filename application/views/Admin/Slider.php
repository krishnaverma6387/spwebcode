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
				$permission = $this->permissionAuth->slider;
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
										<button class="btn btn-danger" onclick="check('slider')">
											<i class="fa fa-trash" aria-hidden="true"></i> Delete Selected</button>
									</div>
								<?php } ?>
								<div class="card-content collpase show">

									<div class="card-body table-responsive">

										<div class="">

											<table class="table table-striped table-bordered dataex-res-configuration" id="example_1" style="width:100%;">

												<thead>

													<tr>
														<th><input type="checkbox" id="checkall"></th>
														<th>#</th>
														<?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
														<th>Slider Image</th>
														<th>Click URL</th>
														<th> Image Title</th>
														<th>Image Alt</th>
														<th>Start Date</th>
														<th>End Date</th>
														<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
													</tr>
												</thead>
												<tbody>

													<?php $srno = 1;
													foreach ($list as $item) { ?>

														<tr data-id="<?= $item->id; ?>">
															<td><input type="checkbox" value="<?= $item->id ?>" name="id[]" class="selectall"></td>
															<td><?= $srno; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
																																																									echo 'checked';
																																																								} ?> id="switch-id<?= $srno; ?>">

																		<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
															<?php } ?>
															<td>
															<?php
															if(!empty($item->video_url)){
																?>
															<iframe style="width: -webkit-fill-available;" height="100" src="<?= $item->video_url?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																<?php
															}else{
																?>
																<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/' . $this->data->folder . '/' . $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/' . $this->data->folder . '/' . $item->image); ?>" style=" width:150px;" /></a></label>
<?php
															}
															?>
															</td>
															<td class="text-center">
																<?php
																if (!empty($item->click_url)) {
																?>
																	<a href="<?= $item->click_url; ?>" target="_blank" class="badge badge-success"><i class="fa fa-eye"></i></a>
																<?php
																}
																?>
																<br><small>click count (<?= $item->visit_count ?>)</small>
															</td>
															<td><?= $item->seo_title; ?></td>
															<td><?= $item->alt; ?></td>
															<td><?= $item->start_date; ?></td>
															<td><?= $item->end_date; ?></td>
															<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																<td>
																	<div class="btn-group">
																		<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																		<?php } ?>
																		<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
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

				<div class="modal fade bd-example-modal-lg" id="AddModal">

					<div class="modal-dialog  modal-lg">

						<div class="modal-content border-primary">

							<div class="modal-header bg-primary p-1">

								<h5 class="modal-title text-white">Add <?= $this->data->key; ?></h5>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true">&times;</span>

								</button>

							</div>

							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/' . $this->uri->segment(3) . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">

								<div class="modal-body p-1">
									<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Target URL<span class="text-danger"></span></label>
												<input type="text" class="form-control" name="click_url" placeholder="https://slickpattern.com/">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Meta Title<span class="text-danger">*</span></label>
												<textarea class="form-control" name="meta_tag" placeholder="Meta Title" required></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Meta Keyword<span class="text-danger">*</span></label>
												<textarea class="form-control" name="meta_keyword" placeholder="Meta Keyword" required></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Meta Description<span class="text-danger">*</span></label>
												<textarea class="form-control" name="meta_description" placeholder="Meta Description" required></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Image Heading<span class="text-danger"></span></label>
												<textarea class="form-control" name="heading" placeholder="Image Heading"></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Image Short Description<span class="text-danger"></span></label>
												<textarea class="form-control summernote" name="description" placeholder="Image Text"></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="checkbox" id="btn_status" name="btn_status" value="true">
												<label class="col-form-label" for="btn_status">Show Image Button</label>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group" id="buttonNameGroup" style="display: none;">
												<label class="col-form-label" for="btn_txt">Button Name</label>
												<input type="text" id="btn_txt" name="btn_txt" placeholder="Button Name" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Start Date <span class="text-danger"></span></label>
												<input type="text" id="startDate" class="form-control datePicker" name="start_date">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">End Date <span class="text-danger"></span></label>
												<input type="text" id="end_date" class="form-control datePicker" name="end_date">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="alt" placeholder="Image Alt" required>
											</div>
										</div>

										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Video URL <span class="text-danger">(if you want add a YouTube video, only allow enbedded YouTube)</span></label>
												<input type="text" class="form-control" id="video_url" name="video_url" placeholder="https://www.youtube.com/embed/pVpjtKs9ErQ?si=sW9boFpHnzg4M-jv">
											</div>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="key" value="Intro Slider" />
											<div class="form-group">
												<label class="col-form-label">Desktop Slider Image <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)(optional if you want upload video url)</small></span></label>
												<input type="file" class="form-control dropify" data-height="100" id="desktop_image" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg+xml">
												<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
											</div>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="key" value="Intro Slider" />
											<div class="form-group">
												<label class="col-form-label"> Mobile Slider Image <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)(optional if you want upload video url)</small></span></label>
												<input type="file" class="form-control dropify" data-height="100" id="mobile_image" name="image_mobile" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg+xml">
												<?php echo form_error("image_mobile", "<p class='text-danger' >", "</p>"); ?>
											</div>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="key" value="Intro Slider" />
											<div class="form-group">
												<label class="col-form-label">Tablet Slider Image <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)(optional if you want upload video url)</small></span></label>
												<input type="file" class="form-control dropify" data-height="100" id="tablet_image" name="image_tablet" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg+xml">
												<?php echo form_error("image_tablet", "<p class='text-danger' >", "</p>"); ?>
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer d-block p-1">
									<button type="submit" class="btn btn-primary" id="addBtn" disabled> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
								</div>
							</form>

						</div>

					</div>

				</div>

				<!--Modal End-->

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



							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/' . $this->uri->segment(3) . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">

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

			$('.table tbody').sortable({
				items: 'tr',
				cursor: 'move',
				opacity: 0.6,
				update: function(event, ui) {
					var order = $(this).sortable('toArray', {
						attribute: 'data-id'
					});
					$.ajax({
						url: '<?= base_url($this->data->controller . '/' . $this->data->method . '/SortingSlider') ?>',
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
		document.addEventListener('DOMContentLoaded', function() {
			const form = document.getElementById('addForm');
			const requiredFields = form.querySelectorAll('[required]');
			const submitButton = document.getElementById('addBtn');
			const buttonNameGroup = document.getElementById('buttonNameGroup');
			const btnStatus = document.getElementById('btn_status');
			const btnTxt = document.getElementById('btn_txt');

			// Check if all required fields are filled
			function checkRequiredFields() {
				let allFilled = true;
				requiredFields.forEach(field => {
					if (!field.value.trim()) {
						allFilled = false;
					}
				});
				// Additional check for button name if checkbox is checked
				if (btnStatus.checked && !btnTxt.value.trim()) {
					allFilled = false;
				}
				submitButton.disabled = !allFilled;
			}

			// Add event listeners to required fields
			requiredFields.forEach(field => {
				field.addEventListener('input', checkRequiredFields);
			});

			// Add event listener for the checkbox
			btnStatus.addEventListener('change', function() {
				if (btnStatus.checked) {
					buttonNameGroup.style.display = 'block';
					btnTxt.setAttribute('required', 'required');
				} else {
					buttonNameGroup.style.display = 'none';
					btnTxt.removeAttribute('required');
				}
				checkRequiredFields(); // Recheck required fields
			});

			// Add event listener to button name field
			btnTxt.addEventListener('input', checkRequiredFields);

			// Initial check on page load
			checkRequiredFields();
		});
		document.addEventListener('DOMContentLoaded', function() {
			const videoUrl = document.getElementById('video_url');
			const desktopImage = document.getElementById('desktop_image');
			const mobileImage = document.getElementById('mobile_image');
			const tabletImage = document.getElementById('tablet_image');

			function toggleImageRequired() {
				if (videoUrl.value.trim() === '') {
					desktopImage.required = true;
					mobileImage.required = true;
					tabletImage.required = true;
				} else {
					desktopImage.required = false;
					mobileImage.required = false;
					tabletImage.required = false;
				}
			}

			videoUrl.addEventListener('input', toggleImageRequired);

			// Initial check
			toggleImageRequired();
		});
	</script>

</body>

</html>