<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head><?php require APPPATH.'views/Auth/CssLinks.php';?></head>
    <body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <?php require 'Topbar.php'; ?>
        <?php require 'Sidebar.php'; ?>
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1"> 
                        <div class="breadcrumbs-top">
                            <h5 class="content-header-title float-left pr-1 mb-0">Beauty Consultation</h5>
                            <div class="breadcrumb-wrapper d-none d-sm-block">
                                <ol class="breadcrumb p-0 mb-0 pl-1">
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
                                    <li class="breadcrumb-item active">Beauty Consultation</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						
                        $permission=$this->permissionAuth->beautyconsultation;
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
                                                            <?php if(($role_type=='subadmin' && $permission->approval) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
															<th>Product</th>
                                                            <th>Username</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Schedule Date-Time</th>
                                                            <th>Schedule Status</th>
                                                            <th>Consultant Name</th>
                                                            <th>Consultantation Links</th>
                                                            <th>Created at</th>    
                                                            <th>Modified at</th>    
														</tr>
													</thead>
                                                    <tbody>
														<?php 
															$count = 1;
															if (!empty($beauty_consultant)) {
																foreach ($beauty_consultant as $data) {
																	$productDetails=$this->db->get_where('product_variant',['id'=>$data->variant_id])->row();
																	if(!empty($productDetails->variant_img))
																	{
																		$icons = explode(',', $productDetails->variant_img);
																	}
																?> 
																<tr>
																	<td><?= $count?></td> 
																	<?php if(($role_type=='subadmin' && $permission->approval) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																		<td>
																			<div class="btn-group">
																				<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																					<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $data->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																				<?php } ?>
																				<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																					<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'beauty_consultant','id','<?= $data->id?>','','')"> <i class="fa fa-trash"></i> </a>
																				<?php } ?>
																			</div>
																		</td>
																	<?php } ?>
																	<td><a href="<?= base_url('Admin/ManageProduct/ViewProduct/'.$data->product_id)?>"><img src="<?= base_url('uploads/product/') . $icons[0]; ?>" width="80" height="80"></a></td>
																	<?php
																		$uid =  $data->userid;
																		$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
																	?>
																	<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$uid)?>"><?= $uDetails->name ?></a><br><?php if($data->name!=$uDetails->name){echo '('.$data->name.')';}?></td>
																	<td><?= $data->email_id?></td>
																	<td><?= $data->mobile ?></td>
																	<td><?= $data->schedule_date?><br>(<?= $data->schedule_time?>)</td>
																	<td><span class="badge <?php if($data->schedule_status=='pending'){echo 'badge-warning';}elseif($data->schedule_status=='rejected'){echo 'badge-danger';}else{echo 'badge-success';}?>"><?=$data->schedule_status?></span></td>
																	<td><?= $data->consultant_name?></td>
																	<td><a href="<?= $data->consultation_links?>"><?= $data->consultation_links?></a></td>
																	<td><?= $data->created_at ?></td>
																	<td><?= $data->modified_at ?></td>
																	</tr>
															<?php $count++;} } ?>
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
																<div class="modal fade" id="EditModal"> 
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
																<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
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