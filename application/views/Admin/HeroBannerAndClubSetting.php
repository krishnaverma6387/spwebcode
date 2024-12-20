<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH.'views/Auth/CssLinks.php';?>
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
							<h5 class="content-header-title float-left pr-1 mb-0"><?=$this->data->pageTitle;?></h5>
							<div class="breadcrumb-wrapper d-none d-sm-block">
								<ol class="breadcrumb p-0 mb-0 pl-1">
									<li class="breadcrumb-item">
										<a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
									<li class="breadcrumb-item">
										<a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->pageTitle;?></li>
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
										<div class="card-body table-responsive">
											<div class="">
												<div class="col-xl-12 col-lg-12">
													<div class="card">
														<div class="card-header">
															<h4 class="card-title">HERO BANNER AND CLUB SETTING</h4>
														</div>
														<div class="card-content">
															<div class="card-body">
																<ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" role="tab" aria-selected="true">Hero Bannerr</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" role="tab" aria-selected="false">Royal Club Setting</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33" role="tab" aria-selected="false">Invite Friends & Earn</a>
																	</li>
																</ul>
																<div class="tab-content px-1 pt-1">
																	<div class="tab-pane active" id="tab31" role="tabpanel" aria-labelledby="base-tab31">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add HeroBanner </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
																												<th>Status</th>
																											<?php } ?>
																											<th>Alt</th>
																											<th>Seo Title</th>
																											<th>Image</th>
																											<th>Created Date</th>
																											<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																												<th>Action</th>
																											<?php } ?>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($tbl_herobanner))
																											{
																												$srno = 1;
																												foreach ($tbl_herobanner as $item) { ?>
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
																													<td><?= $item->alt; ?></td>
																													<td><?= $item->seo_title; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->created_at; ?></td>
																													<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																														<td>
																															<div class="btn-group">
																																<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																																<?php } ?>
																																<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'tbl_herobanner','id','<?= $item->id; ?>','banner','image')"> <i class="fa fa-trash"></i> </a>
																																<?php } ?>
																															</div>
																														</td>
																													<?php } ?>
																												</tr>
																												<?php $srno++;
																												}} ?>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab32" role="tabpanel" aria-labelledby="base-tab32">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#BottomAddModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Royal Club Setting </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																												<th>Status</th>
																											<?php } ?>
																											<th>Alt</th>
																											<th>Seo Title</th>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Image1</th>
																											<th>DateTime</th>
																											<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																												<th>Action</th>
																											<?php } ?>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($royalclubsetting))
																											{
																												$srno=1; 
																												foreach ($royalclubsetting as $item)
																												{ 
																												?>
																												<tr>
																													<td><?= $srno; ?></td>
																													<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																														<td>
																															<div class="custom-control custom-switch custom-control-inline">
																																<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'tbl_becomeseller','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																																<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																															</div>
																														</td>
																													<?php } ?>
																													<td><?= $item->alt; ?></td>
																													<td><?= $item->seo_title; ?></td>
																													<td><?= $item->title; ?></td>
																													<td><?= $item->description; ?></td>
																													<td>
																														<?php
																															if(!empty($item->image1))
																															{
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image1); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image1); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->updated_at; ?></td>
																													<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																														<td>
																															<div class="btn-group">
																																<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditBottom('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																																<?php } ?>
																																<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																																	<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'royalclubsetting','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column1; ?>')"> <i class="fa fa-trash"></i> </a>
																																<?php } ?>
																															</div>
																														</td>
																													<?php } ?>
																												</tr>
																											<?php $srno++; }} ?>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab33" role="tabpanel" aria-labelledby="base-tab33">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddReferEarn">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Reafer And Earn </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<th>Status</th>
																											<th>Alt</th>
																											<th>Seo Title</th>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Image</th>
																											<th>Date</th>
																											<th>Action</th>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											$referandearn = $this->db->order_by('id','desc')->get("referandearn")->result();
																											$srno=1; 
																											foreach ($referandearn as $item)
																											{ 
																											?>
																											<tr>
																												<td><?= $srno; ?></td>
																												<td>
																													<div class="custom-control custom-switch custom-control-inline">
																														<input type="checkbox" class="custom-control-input"  onchange="return StatusSingleActive(this,'referandearn','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-ida<?=$srno;?>">
																														<label class="custom-control-label mr-1" for="switch-ida<?=$srno;?>"></label>
																													</div>
																												</td>
																												<td><?= $item->alt; ?></td>
																												<td><?= $item->seo_title; ?></td>
																												<td><?= $item->title; ?></td>
																												<td><?= $item->description; ?></td>
																												<td><?php
																													if(!empty($item->image))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?>
																												</td>
																												<td><?= $item->created_at; ?></td>
																												<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																													<td>
																														<div class="btn-group">
																															<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																																<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditReferEarn('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																															<?php } ?>
																															<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																																<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'referandearn','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','image')"> <i class="fa fa-trash"></i> </a>
																															<?php } ?>
																														</div>
																													</td>
																												<?php } ?>
																											</tr>
																										<?php $srno++; } ?>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br/>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
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
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateHeroBanner'); ?>" method="post" enctype="multipart/form-data" >
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
	<!--Modal Start-->
	<div class="modal fade" id="AddModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add HeroBanner</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddHeroBanner'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="form-group">
							<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="alt" placeholder="Image Alt" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	<!--Modal Start-->
	<div class="modal fade" id="BottomAddModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Royal Club Setting</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddBottomSeller'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="form-group">
							<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="alt" placeholder="Image Alt" required >
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Heading <span class="text-danger">*</span></label>
							<input type="text" class="form-control text-capitalize" name="title" placeholder="Heading" required >
						</div>
						<div class="form-group">
							<label class="col-form-label">Short Description <span class="text-danger">*</span></label>
							<textarea class="form-control" name="description" placeholder="Short Description" ></textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	
	
	
	<!--Modal Start-->
	<div class="modal fade" id="AddReferEarn">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Refer And Earn</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddReferEarn'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="form-group">
							<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="alt" placeholder="Image Alt" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Heading <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="title" placeholder="Heading" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Short Description</label>
							<textarea class="form-control" name="description" placeholder="Short Description"></textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	<!--Modal Start-->
	<div class="modal fade" id="EditReferEarnModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Refer And Earn</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateReferEarn'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1"> 
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--Modal Start-->
	<div class="modal fade" id="EditBottom">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Royal Club Setting</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateBottom'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1"> 
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	<div id="loader"></div>
	<?php require APPPATH.'views/Auth/Footer.php';?>
	<?php require APPPATH.'views/Auth/JsLinks.php';?>
	<script>
		function EditBottom(id) {
			$("#EditBottom").modal("show");
			$("#EditBottom .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditBottom .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditBottom/') ?>" + id);
		}
		
		
		
		
		function StatusSingleActive(e, table, where_column, where_value, column) {
			var status = true;
			var check = $(e).prop("checked");
			if (check) {
				swal({
         			title: "Are you sure?",
         			text: "You want to activate this !",
         			icon: "warning",
         			buttons: true,
         			dangerMode: true
         			}).then((willDelete) => {
         			if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
							type: "post",
							data: {
								'table': table,
								'column': column,
								'value': 'true',
								'where_column': where_column,
								'where_value': where_value
							},
							success: function(response) {
								swal("Activated successfully !", {
									icon: "success",
								});
								window.setTimeout(function() {
									location.reload();
								}, 1000);
							}
						});
						} else {
						window.setTimeout(function() {
							location.reload();
						}, 1000);
					}
				});
				} else {
				swal({
         			title: "Are you sure?",
         			text: "You want to deactivate this !",
         			icon: "warning",
         			buttons: true,
         			dangerMode: true
         			}).then((willDelete) => {
         			if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
							type: "post",
							data: {
								'table': table,
								'column': column,
								'value': 'false',
								'where_column': where_column,
								'where_value': where_value
							},
							success: function(response) {
								swal("Deactivated successfully !", {
									icon: "success",
								});
								window.setTimeout(function() {
									location.reload();
								}, 1000);
							}
						});
						} else {
						window.setTimeout(function() {
							location.reload();
						}, 1000);
					}
				});
			}
			return status;
		}
		
		
		
	</script>
</body>
</html>					