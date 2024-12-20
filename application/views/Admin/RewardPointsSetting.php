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
						$permission=$this->permissionAuth->offer;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>First time user register</th> 
															<!--<th>Register</th>
															<th>First Order</th>-->
															<th>Birthday celebration reward points</th>
															<th>Anniversary celebration reward points</th>
															<!--<th>Newly Couple</th>-->
															<!--<th>Become Parent</th>-->
															<th>Min Redemption Point</th>
															<!--<th>Subscription Newsletter</th>-->
															<th>Share the app with others</th>
															<th>Surfing the mobile app</th>
															<!--<th>5 Days Office Wear</th>
															<th>Ready Your Mother</th>--> 
															<th>Women's Day</th>     
															<!--<th>Beauty Tips</th>-->
															<th>Product Feedback</th>
															<!--<th>Student</th>-->
															<th>1 Reward Value</th>
															<th>Expire(In days)</th> 
															<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														<?php $srno=1; foreach ($list as $item){ ?>
															<tr>
																<td><?= $srno; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true')
																			{
																				echo 'checked';
																			} ?> id="switch-id<?= $srno; ?>">
																			<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
																<?php } ?>
																<td><?= $item->first_order; ?></td>
																<!--<td><?= $item->register; ?></td>
																<td><?= $item->first_order; ?></td>-->
																<td><?= $item->birthday; ?></td>
																<td><?= $item->marriage_anniversary; ?></td>
																<!--<td><?= $item->new_couple; ?></td>
																<td><?= $item->become_parent; ?></td>-->
																<td><?= $item->min_redemption; ?></td>
																<!--<td><?= $item->newsletter; ?></td>-->
																<td><?= $item->share_app; ?></td>
																<td><?= $item->visit; ?></td>
																<!--<td><?= $item->office_wear; ?></td>
																<td><?= $item->ready_mother; ?></td>-->
																<td><?= $item->womens_day; ?></td>
																<!--<td><?= $item->beauty_tips; ?></td>-->
																<td><?= $item->product_feedback; ?></td>
																<!--<td><?= $item->student; ?></td>-->
																<td><?= $item->reward_value; ?></td>
																<td><?= $item->expire_date; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																<td>
																	<div class="btn-group">
																		<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
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
					</section>
				</div>
			</div>
		</div>
		
		<!--Modal Start-->
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
		<!--Modal End-->
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>															