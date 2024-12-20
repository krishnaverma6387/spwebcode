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
                            <h5 class="content-header-title float-left pr-1 mb-0">Royal Subscriber</h5>
                            <div class="breadcrumb-wrapper d-none d-sm-block">
                                <ol class="breadcrumb p-0 mb-0 pl-1">
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
                                    <li class="breadcrumb-item active">Royal Subscriber</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->subscriber;
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
                                                            <?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
															<th>Plan Duration</th>
                                                            <th>Amount</th>
                                                            <th>Username</th>
                                                            <th>Mobile</th>
                                                            <th>Order ID</th>
                                                            <th>Payment Status</th>
                                                            <th>Payment ID</th>
                                                            <th>Razorpay Order ID</th>
                                                            <th>Created at</th>    
                                                            <th>Modified at</th>    
                                                            
														</tr>
													</thead>
                                                    <tbody>
														<?php 
															$count = 1;
															if (!empty($subscriber)) {
																foreach ($subscriber as $data) { ?> 
																<tr>
																	<td><?= $count?></td> 
																	<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('item_id')"> <i class="fa fa fa-edit"></i></a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'table','id','item_id','','')"> <i class="fa fa-trash"></i> </a>
																			<?php } ?>
																		</div>
																	</td>
																	<?php } ?>
																	<td><?= $data['plan_duration']?></td>
																	<td>₹<?= $data['amount']?></td>
																	<?php
																		$uid =  $data['userid'];
																		$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
																		
																	?>
																	<td><a href="<?= base_url('Admin/userProfile') ?>"><?= $uDetails->name ?></a>
																	</td>
																	<td><?= $uDetails->mobile ?></td>
																	<td><?= $data['order_id'] ?></td>
																	<?php
																	$oid =  $data['order_id'];
																	?>
																	<td class="<?php if($data['payment_status']=='Success'){echo "text-success";}else{echo "text-danger";}?>"><?= $data['payment_status'] ?></td>
																	<td><?= $data['rzp_paymentid'] ?></td>
																	<td><?= $data['rzp_orderid'] ?></td>
																	<td><?= $data['created_at'] ?></td>
																	<td><?= $data['modified_at'] ?></td>
																	</tr>
																	<?php } } ?>
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
																	<div class="modal fade" id="ViewModal"> 
																	<div class="modal-dialog modal-lg">
																	<div class="modal-content border-primary">
																	<div class="modal-header bg-primary p-1">
																	<h5 class="modal-title text-white">Show <?=$this->data->key;?> Details</h5>
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
																	</div>
																	</form>
																	
																	</div>
																	</div>
																	</div>
																	<!--Modal End-->
																	</div>
																	</div>
																	</div>
																	<?php require APPPATH.'views/Auth/Footer.php';?>
																	<?php require APPPATH.'views/Auth/JsLinks.php';?>
																	</body>
																	</html>																			