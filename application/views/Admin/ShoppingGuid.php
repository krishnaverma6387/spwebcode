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
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add </button>
										</div>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
															<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
															<th>Title1</th>
															<th>Subtitle1</th>
															<th>Step1</th>
															<th>Description1</th>
															<th>Image1</th>
															<th>Step2</th>
															<th>Title2</th>
															<th>Description2</th>
															<th>Image2</th>
															<th>Step3</th>
															<th>Title3</th>
															<th>Description3</th>
															<th>Image3</th>
															<th>Step4</th>
															<th>Title4</th>
															<th>Description4</th>
															<th>Image4</th>
															<th>Notes</th>
															<th>Description5</th>
															<th>Created Date</th>
															
														</tr>
													</thead>
													<tbody>
														<?php $srno = 1;
															foreach ($list as $item) { ?>
															<tr>
																<td><?= $srno; ?></td>
																<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input" onchange="return Status(this,'brand','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
																				echo 'checked';
																			} ?> id="switch-id<?= $srno; ?>">
																			<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																		</div>
																	</td>
																<?php } ?>
																
																<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																	<td>
																		<div class="btn-group">
																			<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																			<?php } ?>
																			<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'tbl_shoppingguide','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																		</div>
																	</td>
																<?php } ?>
																
																<td><?= $item->title1; ?></td>
																<td><?= $item->subtitle1; ?></td>
																<td><?= $item->step1; ?></td>
																<td><?= $item->desc1; ?></td>
																<td>
																	<?php
																		if (!empty($item->image1)) {
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image1); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' . $item->image1); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td><?= $item->step2; ?></td>
																<td><?= $item->title2; ?></td>
																<td><?= $item->desc2; ?></td>
																<td>
																	<?php
																		if (!empty($item->image2)) {
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image2); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' . $item->image2); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																
																<td><?= $item->step3; ?></td>
																<td><?= $item->title3; ?></td>
																<td><?= $item->desc3; ?></td>
																<td>
																	<?php
																		if (!empty($item->image3)) {
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image3); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' . $item->image3); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td><?= $item->step4; ?></td>
																<td><?= $item->title4; ?></td>
																<td><?= $item->desc4; ?></td>
																<td>
																	<?php
																		if (!empty($item->image4)) {
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image4); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' . $item->image4); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td><?= $item->notes; ?></td>
																<td><?= $item->desc5; ?></td>
																<td><?= $item->date; ?></td>
																
															</tr>
															<?php $srno++;
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
					<div class="modal fade" id="AddModal">
						<div class="modal-dialog">
							<div class="modal-content border-primary">
								<div class="modal-header bg-primary p-1">
									<h5 class="modal-title text-white">Add </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body p-1">
										
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
										
										<div class="form-group">
											<label class="col-form-label">Image Alt1 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="alt" placeholder="Image Alt1" required >
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image Title1 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="seo_title" placeholder="Image Title1" required>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image Alt2 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="alt2" placeholder="Image Alt2" required >
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image Title2 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="seo_title2" placeholder="Image Title2" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Image Alt3 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="alt3" placeholder="Image Alt3" required >
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image Title3 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="seo_title3" placeholder="Image Title3" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Image Alt4 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="alt4" placeholder="Image Alt4" required >
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image Title4 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="seo_title4" placeholder="Image Title4" required>
										</div>
										
										
										<div class="form-group">
											<label class="col-form-label">Shopping Guide Title<span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="guide_title" placeholder="Shopping Guide Title" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Shopping Guide Description<span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="guide_description" placeholder="Shopping Guide Description" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Shopping Guide Keyword<span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="guide_keyword" placeholder="Shopping Guide Keyword" required>
										</div>
										
										
										
										<div class="form-group">
											<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="title1" placeholder="Title1" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Subtitle1 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="subtitle1" placeholder="Subtitle1" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Step1 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="step1" placeholder="Step1" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
											<textarea id="summernoteEditor" name="desc1" class="form-control summernote"></textarea>
										</div>
										<div class="form-group">
											<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
										</div>
										<div class="form-group">
											<label class="col-form-label">Step2 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="step2" placeholder="Step2" required>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="title2" placeholder="Title2" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
											<textarea id="summernoteEditor" name="desc2" class="form-control summernote"></textarea>
										</div>
										<div class="form-group">
											<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
										</div>
										<div class="form-group">
											<label class="col-form-label">Step3 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="step3" placeholder="Step3" required>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="title3" placeholder="Title3" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
											<textarea id="summernoteEditor" name="desc3" class="form-control summernote"></textarea>
										</div>
										<div class="form-group">
											<label class="col-form-label">Image3 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="image3" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
										</div>
										<div class="form-group">
											<label class="col-form-label">Step4 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="step4" placeholder="Step4" required>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="title4" placeholder="Title4" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
											<textarea id="summernoteEditor" name="desc4" class="form-control summernote"></textarea>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Image4 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
										</div>
										<div class="form-group">
											<label class="col-form-label">Notes <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="notes" placeholder="Notes" required>
										</div>
										<div class="form-group">
											<label class="col-form-label">Description5 <span class="text-danger">*</span></label>
											<textarea id="summernoteEditor" name="desc5" class="form-control summernote"></textarea>
										</div>
										
										
									</div>
									
									
									<div class="modal-footer d-block p-1">
										<button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
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
									<h5 class="modal-title text-white">Edit </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body p-1">
										
									</div>
									<div class="modal-footer d-block p-1">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
										<button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit </button>
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
	</body>
	
</html>