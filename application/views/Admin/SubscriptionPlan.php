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
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->subscriptionplan;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					<section id="form-action-layouts">
						
						<!-- Start Here -->
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header p-1">
											<button class="btn btn-primary" data-toggle="modal" data-target="#AddChoose">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Choose Your Plan</button>
										</div>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>Title</th>
															<th>Description</th>
															<th>Date</th>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														
														<?php 
															$choose_plan = $this->db->order_by('id','desc')->get("choose_plan")->result();
															$srno=1; foreach ($choose_plan as $item)
															{ 
															?>
															<tr>
																<td><?= $srno; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'choose_plan','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																			<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																		</div>
																	</td>
																<?php } ?>
																<td><?= $item->title; ?></td>
																<td><?= $item->description; ?></td>
																<td><?= $item->created_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'choose_plan','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditChoose('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
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
						<!-- End Here  -->
						
						
						
						
						
						
						
						
						
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header p-1">
											<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->key;?></button>
										</div>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>Name</th>
															<th>Type</th>
															<th>Duration</th>
															<th>Net Price</th>
															<th>Offer Price</th>
															<th>Discount</th>
															<!--<th>Tax</th>
															<th>Icon</th>-->
															<th>Description</th>
															<th>Date</th>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														<?php $srno=1; foreach ($list as $item){ ?>
															<tr>
																<td><?= $srno; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																			<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																		</div>
																	</td>
																<?php } ?>
																<td><?= $item->name; ?></td>
																<td><?= ucwords($item->plan_type); ?></td>
																<td><?= $item->duration; ?></td>
																<td>₹ <?= $item->amount; ?> </td>
																<td>₹ <?= $item->offer_price; ?> </td>
																<td><?= $item->discount; ?> %</td>
																<!--<td><?= $item->tax; ?> %</td>
																<td><a href="<?= base_url('uploads/'.$this->data->folder.'/').$item->icon;?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/').$item->icon;?>" height="150" width="150" ></a></td>-->
																<td><?= $item->description; ?></td>
																<td><?= $item->created_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
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
						
						
						
						
						
						
						<!-- Start WHAT YOU GET Here -->
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header p-1">
											<button class="btn btn-primary" data-toggle="modal" data-target="#Addwhatyouget">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add WHAT YOU GET</button>
										</div>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>Title</th>
															<th>Description</th>
															<th>Date</th>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														
														<?php 
															$whatyouget = $this->db->order_by('id','desc')->get("whatyouget")->result();
															$srno=1; foreach ($whatyouget as $item)
															{ 
															?>
															<tr>
																<td><?= $srno; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'whatyouget','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																			<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																		</div>
																	</td>
																<?php } ?>
																<td><?= $item->title; ?></td>
																<td><?= $item->description; ?></td>
																<td><?= $item->created_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'whatyouget','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Editwhatyouget('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
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
						<!-- End Here  -->
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="row match-height"> 
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header p-1">
											<button class="btn btn-primary" data-toggle="modal" data-target="#AddBenefitsModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Benefits Info</button>
										</div> 
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>Icon</th>
															<th>Title</th>
															<th>Description</th>
															<th>Date</th>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														<?php $count=1; 
															$benefits=$this->db->get('subscription_benefits')->result();
															foreach ($benefits as $item){ ?> 
															<tr>
																<td><?= $count; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'subscription_benefits','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id1<?=$count;?>">
																			<label class="custom-control-label mr-1" for="switch-id1<?=$count;?>"></label>
																		</div>
																	</td>
																<?php } ?>
																<td><a href="<?= base_url('uploads/'.$this->data->folder.'/').$item->icon;?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/').$item->icon;?>" height="80" width="80" ></a></td>
																<td><?= $item->title?></td>
																<td><?= base64_decode($item->description); ?></td>
																<td><?= $item->created_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'subscription_benefits','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditSubscriptionBenefits('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																			<?php } ?>
																		</div>
																	</td>
																<?php } ?>
															</tr>
														<?php $count++; } ?> 
													</tbody>
												</table>
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
		
		
		
		
		<!-- Chhose Modal Start Here -->
		<div class="modal fade" id="AddChoose">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Add Choose Your Plan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddChoose'); ?>" method="post" enctype="multipart/form-data" id="addForm3">
						<div class="modal-body p-1">
							<div class="form-group">
								<label class="col-form-label">Heading <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="title" placeholder="Heading" required>
							</div>  
							
							<div class="form-group">
								<label class="col-form-label">Short Description</label>
								<textarea  class="form-control"  name="description" placeholder="Short Description"></textarea>
							</div>
						</div>
						
						<div class="modal-footer d-block p-1">
							<button type="submit" class="btn btn-primary" id="addBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin3" style="display:none;"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Chhose Modal End Here -->
		
		
		
		<!-- Chhose WHAT YOU GET Here -->
		<div class="modal fade" id="Addwhatyouget">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Add WHAT YOU GET</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Addwhatyouget'); ?>" method="post" enctype="multipart/form-data" id="addForm4">
						<div class="modal-body p-1">
							<div class="form-group">
								<label class="col-form-label">Heading <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="title" placeholder="Heading" required>
							</div>  
							
							<div class="form-group">
								<label class="col-form-label">Short Description</label>
								<textarea  class="form-control"  name="description" placeholder="Short Description"></textarea>
							</div>
						</div>
						
						<div class="modal-footer d-block p-1">
							<button type="submit" class="btn btn-primary" id="addBtn4"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin4" style="display:none;"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Chhose Modal End Here -->
		
		
		
		
		
		<!--Modal Start-->
		<div class="modal fade" id="AddModal">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Add <?=$this->data->key;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
						<div class="modal-body p-1">
							<div class="form-group">
								<label class="col-form-label">Plan Name<span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="" name="name" placeholder="Enter Plan Name" required>
								<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
							</div>
							<div class="form-group">
								<label class="col-form-label">Plan Type <span class="text-danger">*</span></label>
								<select class="form-control " name="type" required>
									<option  selected disabled>-- Select --</option>
									<option  value="month">Month</option>
									<option  value="year">Year</option>
								</select>
								<?php echo form_error("type", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group">
								<label class="col-form-label">Plan Duration<span class="text-danger">*</span></label>
								<input type="number" class="form-control" value="" name="duration" placeholder="Enter Plan Duration" required>
								<?php echo form_error("duration", "<p class='text-danger'>", "</p>"); ?>
							</div>
							<div class="form-group">
								<label class="col-form-label">Net Price<span class="text-danger">*</span></label>
								<input type="number" class="form-control net_price" value="" oninput="setAmount()" name="amount" placeholder="Enter Plan Amount" required>
								<?php echo form_error("amount", "<p class='text-danger'>", "</p>"); ?>
							</div>
							<div class="form-group">
								<label class="col-form-label">Offer Price<span class="text-danger">*</span></label>
								<input type="number" class="form-control offer_price" value="" name="offer_price" oninput="setAmount()" placeholder="Enter Plan Amount" required>
								<?php echo form_error("amount", "<p class='text-danger'>", "</p>"); ?>
							</div>
							<div class="form-group">
								<label class="col-form-label">Discount(%)<span class="text-danger">*</span></label>
								<input type="text" class="form-control discount" value="" readonly name="discount" class="discount" placeholder="Enter Plan Amount" required>
							</div>
							<!--<div class="form-group">
								<label class="col-form-label">Tax<span class="text-danger"> (In %)*</span></label>
								<input type="number" class="form-control" value="" name="tax" placeholder="Enter Plan Tax" required>
								<?php echo form_error("tax", "<p class='text-danger'>", "</p>"); ?>
							</div>--> 
							<div class="form-group">
								<label class="col-form-label">Plan Description<span class="text-danger">*</span></label>
								<textarea  class="form-control"  name="description" placeholder="Enter Plan Description" required></textarea>
								<?php echo form_error("description", "<p class='text-danger'>", "</p>"); ?>
							</div>
						</div>
						<div class="modal-footer d-block p-1">
							<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="AddBenefitsModal">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Add Benefits Info</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddBenefits'); ?>" method="post" enctype="multipart/form-data" id="addForm2">
						<div class="modal-body p-1">
							
							<div class="form-group">
								<label class="col-form-label">Image Alt <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="alt" placeholder="Image Alt" required >
							</div>
							
							<div class="form-group">
								<label class="col-form-label">Image Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
							</div>
							
							<div class="form-group">
								<label class="col-form-label">Benefits Icon<span class="text-danger">*</span></label>
								<input type="file" required class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg" >
							</div>
							<div class="form-group">
								<label class="col-form-label">Image Alt<span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="alt" placeholder="Image Alt" required>
							</div> 
							<div class="form-group">
								<label class="col-form-label">Image Title<span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="seo_title" placeholder="Image Title" required>
							</div> 
							
							<div class="form-group">
								<label class="col-form-label">Benefites Title<span class="text-danger">(Less than 50 characters)*</span></label>
								<input type="text" class="form-control" value="" name="title" placeholder="Enter Benefites Title" required>
							</div> 
							<div class="form-group">
								<label class="col-form-label">Benefits Description<span class="text-danger">*</span></label>
								<textarea  class="form-control summernote"  required name="description" placeholder="Enter Plan Description" required></textarea>
							</div>
						</div>
						<div class="modal-footer d-block p-1">
							<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="EditModal">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Edit <?=$this->data->key;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
							value="<?= $this->security->get_csrf_hash(); ?>" />
							<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<div class="modal fade" id="EditModalBenefits">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Edit Subscription Benefites</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateBenefits'); ?>" method="post" enctype="multipart/form-data" id="updateForm2" >
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<button type="submit"  class="btn btn-primary" id="updateBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin2" style="display:none;"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<!--Modal End-->
		
		<!-- Edit Choose Modal Here -->
		<div class="modal fade" id="EditChooseModal">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Edit</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateChoose'); ?>" method="post" enctype="multipart/form-data" id="updateForm3">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<button type="submit"  class="btn btn-primary" id="updateBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin3" style="display:none;"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<!-- Edit Choose Modal End Here -->
		
		
		
		<!-- Edit Choose Modal Here -->
		<div class="modal fade" id="EditwhatyougetModal">
			<div class="modal-dialog">
				<div class="modal-content border-primary">
					<div class="modal-header bg-primary p-1">
						<h5 class="modal-title text-white">Edit</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Updatewhatyouget'); ?>" method="post" enctype="multipart/form-data" id="updateForm4">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<button type="submit"  class="btn btn-primary" id="updateBtn4"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin4" style="display:none;"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<!-- Edit Choose Modal End Here -->
		
		
		
		
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
		<script>
			function setAmount() {
				var mrp = $(".net_price").val();
				if (mrp == '') {
					mrp = 0;
				}
				
				var price = $(".offer_price").val();
				if (price == '' || mrp == '') {
					
				} 
				else 
				{
					if (price == '') {
						price = 0;
					}
					var discount = ((mrp - price) / mrp) * 100;
					if (discount < 0) {
						discount = 0;
					}
					discount = discount.toFixed(2);
					$(".discount").val(discount);
					
				}
			}
		</script>
	</body>
</html>																																																																																				