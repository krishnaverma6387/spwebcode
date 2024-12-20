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
							
							<h5 class="content-header-title float-left pr-1 mb-0"><?= $userdata->name; ?> Details</h5>
							
							<div class="breadcrumb-wrapper d-none d-sm-block">
								
								<ol class="breadcrumb p-0 mb-0 pl-1">
									
									<li class="breadcrumb-item">
										
										<a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
										
									</li>
									
									<li class="breadcrumb-item">
										
										<a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
										
									</li>
									
									<li class="breadcrumb-item active"><?= $userdata->name; ?> Details</li>
									
								</ol>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->fashionexpert;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					
					<section class="users-view">
						<!-- users view media object start -->
						<div class="row">
							<div class="col-12 col-sm-7">
								<div class="media mb-2">
									<a class="mr-1" href="#">
										<?php
											if(!empty($userdata->image))
											{
											?>
											<img src="<?= base_url('uploads/' . $this->data->folder . '/' . $userdata->icon); ?>" alt="users view avatar"
											class="users-avatar-shadow rounded-circle" height="64" width="64">
											<?php
											}
											else
											{
											?>
											<img src="<?=base_url($this->data->appTempletePath);?>images/logo/logo.png" alt="users view avatar"
											class="users-avatar-shadow rounded-circle" height="64" width="64">
											<?php
											}
										?>
									</a>
									<div class="media-body pt-25">
										<h4 class="media-heading"><span class="users-view-name"><?= $userdata->name; ?></span><span
										class="text-muted font-medium-1"></span></h4>
										<span>ID:</span>
										<span class="users-view-id"><?= $userdata->id; ?></span>
									</div>
								</div>
							</div>
							
						</div>
						<!-- users view media object ends -->
						
						<!-- users view card details start -->
						<div class="card">
							<div class="card-content">
								<div class="card-body">
									<div class="row bg-dark bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
										<div class="col-12 col-sm-3 p-2">
											<h6 class="text-primary mb-0">Wallet Amount: <span class="font-large-1 align-middle"><?php if(!empty($userdata->wallet)) {echo $userdata->wallet;}else{ echo '0';}?></span></h6>
										</div>
										
										
										
									</div>
									<div class="col-12">
										<table class="table table-borderless">
											<tbody>
												
												
												<tr>
													<td>Name:</td>
													<td ><?= $userdata->name; ?></td>
												</tr>
												
												<tr>
													<td>Email:</td>
													<td ><?= $userdata->email; ?></td>
												</tr>
												
												<tr>
													<td>Mobile:</td>
													<td ><?= $userdata->mobile; ?></td>
												</tr>
												
											
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- users view card details ends -->
						
					</section>
					
					
					<section id="form-action-layouts">
						
						<div class="row match-height">
							
							<div class="col-sm-12">
								
								<div class="card card-dashboard">
									
									<div class="card-content collpase show">
									
										<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header">
											<h4><?= $userdata->name;?> Wallet History</h4><br/>
											<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Money</button>
										</div>
										<?php } ?>
										<div class="card-body table-responsive">
											
											<div class="">
												
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													
													<thead>
														<tr>
															<th>#</th>
															<th>Credit / Debit</th>
															<th>Amount</th>
															<th>Balance</th>
															<th>Remark</th>
															<th>Date</th>
														</tr>
													</thead>
													<tbody>
														<?php $srno=1; foreach ($walletdata as $items){ ?>
															
															<tr>
																<td><?= $srno; ?></td>
																<td><?= $items->type;?></td>
																<td><?= $items->amount; ?></td>
																<td><?= $items->balance; ?></td>
																<td><?= $items->remark; ?></td>
																<td><?= $items->created_at; ?></td>
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
						
					</section>
					
						
					</div>
					
				</div>
				
			</div>
			
			
			
			<!--Modal Start-->
			<div class="modal fade" id="UserModal">
				<div class="modal-dialog">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">User Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							
						</div>
					</div>
				</div>
			</div>
			<!--Modal End-->
			
			<!--Modal Start-->
			<div class="modal fade" id="AddModal">
				<div class="modal-dialog">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">Add Money</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddMoney/'.$userdata->id.''); ?>" method="post" enctype="multipart/form-data" id="addForm">
							<div class="modal-body p-1">
								
								<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
								<input type="hidden" name="userid" value="<?= $userdata->id;?>" />
								<div class="form-group">
									<label class="col-form-label">Amount <span class="text-danger">*</span></label>
									<input type="number" class="form-control" name="amount" placeholder="Enter Amount" required >
									<?php echo form_error("amount", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Remark<span class="text-danger">*</span></label>
									<input type="text" value="Credit From Admin" readonly class="form-control" name="remark" placeholder="Enter Remark" required >
									<?php echo form_error("remark", "<p class='text-danger' >", "</p>"); ?>
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
			
			<?php require APPPATH.'views/Auth/Footer.php';?>
			
			<?php require APPPATH.'views/Auth/JsLinks.php';?>
			
		</body>
		
	</html>												