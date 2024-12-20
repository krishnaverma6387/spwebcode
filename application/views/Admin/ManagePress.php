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
															<h4 class="card-title">Manage Press</h4>
														</div>
														<div class="card-content">
															<div class="card-body">
																<ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" id="base-tab30" data-toggle="tab" aria-controls="tab30" href="#tab30" role="tab" aria-selected="true">Slick Pattern Story</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" role="tab" aria-selected="true">Our Leadership Team</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" role="tab" aria-selected="false">Our Team</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33" role="tab" aria-selected="false">New Launches</a>
																	</li>
																</ul>
																
																<div class="tab-content px-1 pt-1">
																	
																	
																	
																	<div class="tab-pane active" id="tab30" role="tabpanel" aria-labelledby="base-tab30">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddPressModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Press</button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																											<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																											<th>Title1</th>
																											<th>SubTitle1</th>
																											<th>Description1</th>
																											<th>Image1</th>
																											<th>Title2</th>
																											<th>SubTitle2</th>
																											<th>Description2</th>
																											<th>Our Vision</th>
																											<th>Vision Description</th>
																											<th>Our Mission</th>
																											<th>Mission Description</th>
																											<th>Our Values</th>
																											<th>Image2</th>
																											<th>Title3</th>
																											<th>Image3</th>
																											<th>Title4</th>
																											<th>Image4</th>
																											<th>Title5</th>
																											<th>Description5</th>
																											<th>Title6</th>
																											<th>Title7</th>
																											<th>Description6</th>
																											<th>Image5</th>
																											<th>Title8</th>
																											<th>Title9</th>
																											<th>Created Date</th>
																											
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($press)){
																												$srno = 1;
																												foreach ($press as $item) { ?>
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
																													
																													
																													<td>
																														<div class="btn-group">
																															<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																																<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditPress('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																															<?php } ?>
																															<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																																<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'tbl_press','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column1; ?>')"> <i class="fa fa-trash"></i> </a>
																															<?php } ?>
																														</div>
																													</td>
																													<td><?= $item->title1; ?></td>
																													<td><?= $item->subtitle1; ?></td>
																													<td><?= $item->desc1; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image1)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image1); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image1); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->title2; ?></td>
																													<td><?= $item->subtitle2; ?></td>
																													<td><?= $item->desc2; ?></td>
																													<td><?= $item->our_vission; ?></td>
																													<td><?= $item->vission_desc4; ?></td>
																													<td><?= $item->our_mission; ?></td>
																													<td><?= $item->mission_desc3; ?></td>
																													<td><?= $item->our_values; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image2)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image2); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image2); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->title3; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image3)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image3); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image3); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->title4; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image4)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image4); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image4); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->title5; ?></td>
																													<td><?= $item->desc5; ?></td>
																													<td><?= $item->title6; ?></td>
																													<td><?= $item->title7; ?></td>
																													<td><?= $item->desc6; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image5)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image5); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image5); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->title8; ?></td>
																													<td><?= $item->title9; ?></td>
																													<td><?= $item->date; ?></td>
																													<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																														
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
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	<div class="tab-pane" id="tab31" role="tabpanel" aria-labelledby="base-tab31">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddLeaderModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Leadership Team </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Image</th>
																											<th>Created Date</th>
																											<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($our_leader)){
																												$srno = 1;
																												foreach ($our_leader as $item) { ?>
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
																													<td><?= $item->title; ?></td>
																													<td><?= $item->description; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->date; ?></td>
																													<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																														<td>
																															<div class="btn-group">
																																<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																																<?php } ?>
																																<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'ourleadership','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
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
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddTeamModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Team </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Image</th>
																											<th>Created Date</th>
																											<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($our_team)){
																												$srno = 1;
																												foreach ($our_team as $item) { ?>
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
																													<td><?= $item->title; ?></td>
																													<td><?= $item->description; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->date; ?></td>
																													<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																														<td>
																															<div class="btn-group">
																																<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditTeam('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																																<?php } ?>
																																<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'ourteam','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column1; ?>')"> <i class="fa fa-trash"></i> </a>
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
																	<div class="tab-pane" id="tab33" role="tabpanel" aria-labelledby="base-tab33">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddModalLaunch">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Launches </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
																											<th>Title</th>
																											<th>Sub Title</th>
																											<th>Description</th>
																											<th>Image</th>
																											<th>Created Date</th>
																											<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
																										</tr>
																									</thead>
																									<tbody>
																										<?php 
																											if(!empty($new_launches)){
																												$srno = 1;
																												foreach ($new_launches as $item) { ?>
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
																													<td><?= $item->title; ?></td>
																													<td><?= $item->subtitle; ?></td>
																													<td><?= $item->description; ?></td>
																													<td>
																														<?php
																															if (!empty($item->image)) {
																															?>
																															<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image); ?>" style="height:50px;" /></a></label>
																															<?php
																															}
																														?>
																													</td>
																													<td><?= $item->date; ?></td>
																													<?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																														<td>
																															<div class="btn-group">
																																<?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditLaunch('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																																<?php } ?>
																																<?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
																																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'newlaunches','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
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
					<h5 class="modal-title text-white">Edit Leadership</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateLeadership'); ?>" method="post" enctype="multipart/form-data" >
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
	
	
	<!--Modal Press Start-->
	<div class="modal fade" id="AddPressModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Press</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddPress'); ?>" method="post" enctype="multipart/form-data">
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
							<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title1" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">SubTitle1 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="subtitle1" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title2" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">SubTitle2 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="subtitle2" class="form-control summernote">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Our Vision <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="our_vision" class="form-control summernote">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Vision Description<span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="vission_desc4" class="form-control summernote">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Our Mission <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="our_mission" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Mission Description<span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="mission_desc3" class="form-control summernote">
								
							</textarea>
						</div>
						
						
						<div class="form-group">
							<label class="col-form-label">Our Values <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="our_values" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
						<div class="form-group">
							<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title3" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image3 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image3" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title4" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image4 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>
						<div class="form-group">
							<label class="col-form-label">Title5 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title5" class="form-control summernote">
								
							</textarea>
						</div>
						<!--<div class="form-group">
							<label class="col-form-label">Image5 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image5" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						</div>-->
						
						<div class="form-group">
							<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="desc3" class="form-control summernote">	
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Title6 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title6" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Title7 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title7" class="form-control summernote">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="desc4" class="form-control summernote">	
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Title8 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title8" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Title9 <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="title9" class="form-control summernote">
								
							</textarea>
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
	<div class="modal fade" id="AddLeaderModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Leadership Team</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddLeaderTeam'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1">
						
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="form-group">
							<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="alt" placeholder="Image Alt" required >
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="title" placeholder="Title" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="description" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
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
	<div class="modal fade" id="AddTeamModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Our Team</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddTeam'); ?>" method="post" enctype="multipart/form-data">
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
							<label class="col-form-label">Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control text-capitalize" name="title" placeholder="Title" required >
						</div>
						<div class="form-group">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<textarea class="form-control summernote" name="description" placeholder="Description" ></textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
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
	<div class="modal fade" id="AddModalLaunch">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Launches</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AddLaunches'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1">
						
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="form-group">
							<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="alt" placeholder="Image Alt" required >
						</div>
						
						<div class="form-group">
							<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="title" placeholder="Title" required>
							<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
						</div>
						<div class="form-group">
							<label class="col-form-label">Sub Title <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="subtitle" placeholder="Sub Title" required>
							<?php echo form_error("subtitle", "<p class='text-danger' >", "</p>"); ?>
						</div>
						<div class="form-group">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<textarea id="summernoteEditor" name="description" class="form-control summernote">
								
							</textarea>
						</div>
						<div class="form-group">
							<label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
							<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
						</div>
						<div class="form-group">
							<label class="col-form-label">Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control" name="date" placeholder="Date" required>
							<?php echo form_error("date", "<p class='text-danger' >", "</p>"); ?>
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
	
	
	
	
	
	<!--Modal EditTeamModal Start-->
	<div class="modal fade" id="EditTeamModal">
		<div class="modal-dialog">
            <div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Team</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateTeam'); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body p-1"> 
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i>  Submit </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	
	
	
	
	<!--Modal Start-->
	<div class="modal fade" id="EditLaunchModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Launch</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateLaunch'); ?>" method="post" enctype="multipart/form-data" >
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
	
	<!--Modal Press Start-->
	<div class="modal fade" id="EditPressModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Press</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdatePress'); ?>" method="post" enctype="multipart/form-data" >
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
	
	<div id="loader"></div>
	<?php require APPPATH.'views/Auth/Footer.php';?>
	<?php require APPPATH.'views/Auth/JsLinks.php';?>
	
	<script>
		function EditPress(id) {
			$("#EditPressModal").modal("show");
			$("#EditPressModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditPressModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditPress/') ?>" + id);
		}
		
		function EditTeam(id) {
			$("#EditTeamModal").modal("show");
			$("#EditTeamModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditTeamModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditTeam/') ?>" + id);
		}
		
	</script>
	
	<script>
		
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