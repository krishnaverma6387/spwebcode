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
                                    <li class="breadcrumb-item active"><?php if($this->uri->segment(3)=='ProductReview'){echo 'Product Review';}else{echo 'Vendor Review';}?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						
                        $permission=$this->permissionAuth->feedback;
						$role_type='subadmin';
					}
				?>
                <div class="content-body">
                    <section id="form-action-layouts">
						<div class="row">
							<?php 
								if($this->uri->segment(3)=='ProductReview'){
									$new_comments=$this->db->get_where('tbl_review',['is_status'=>'','vendor_id'=>''])->num_rows();
									$published_comments=$this->db->get_where('tbl_review',['is_status'=>'published','vendor_id'=>''])->num_rows();
									$unpublished_comments=$this->db->get_where('tbl_review',['is_status'=>'unpublished','vendor_id'=>''])->num_rows();
									$trash_comments=$this->db->get_where('tbl_review',['is_status'=>'deleted','vendor_id'=>''])->num_rows();
									$top_ratings=$this->db->order_by('rating','desc')->get_where('tbl_review',['is_status'=>'published','vendor_id'=>''])->num_rows();
								}
								elseif($this->uri->segment(3)=='VendorReview'){
									$new_comments=$this->db->get_where('tbl_review',['is_status'=>'','vendor_id!='=>''])->num_rows();
									$published_comments=$this->db->get_where('tbl_review',['is_status'=>'published','vendor_id!='=>''])->num_rows();
									$unpublished_comments=$this->db->get_where('tbl_review',['is_status'=>'unpublished','vendor_id!='=>''])->num_rows();
									$trash_comments=$this->db->get_where('tbl_review',['is_status'=>'deleted','vendor_id!='=>''])->num_rows();
									$top_ratings=$this->db->order_by('rating','desc')->get_where('tbl_review',['is_status'=>'published','vendor_id!='=>''])->num_rows();
								}
							?>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.$this->uri->segment(3).'/NewComments')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-primary white media-body">
													<h5>New Comments</h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i><?= $new_comments?></h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.$this->uri->segment(3).'/Published')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-secondary white media-body">
													<h5>Published</h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i><?= $published_comments?></h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.$this->uri->segment(3).'/Unpublished')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-secondary white media-body">
													<h5>Unpublished</h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i><?= $unpublished_comments?></h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.$this->uri->segment(3).'/TopRatings')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-success white media-body">
													<h5>Top Rating <?php if($this->uri->segment(3)=='ProductReview'){echo 'Product';}else{echo 'Vendor';}?></h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i><?=$top_ratings?></h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/SubBrand')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-warning white media-body">
													<h5>Draft Comments</h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 15</h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-12">
								<div class="card">
									<div class="card-content">
										<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.$this->uri->segment(3).'/TrashComments')?>">
											<div class="media align-items-stretch">
												<div class="p-1 bg-gradient-x-danger white media-body">
													<h5>Trash Comments</h5>
													<h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i><?= $trash_comments?></h5>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
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
                                                            <?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Action</th><?php } ?>
															<th>Product Name</th>
                                                            <th>Username</th>
                                                            <?php if($this->uri->segment(3)=='VendorReview'){?><th>Vendorname</th><?php } ?>
                                                            <th>Star Ratings</th>
                                                            <th>Review Title-Message</th> 
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>  
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($list as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
                                                                <td>
																	<select class="form-control" style="height: 28px;  appearance: auto; padding: 0;" onchange="UpdateStatus('<?= $item->id?>',this.value)">
																		<option selected disabled>new</option>
																		<option value="published" <?php if($item->is_status=='published'){echo 'selected disabled';}?>>Published</option>
																		<option value="unpublished" <?php if($item->is_status=='unpublished'){echo 'selected disabled';}?>>Unpublished</option>
																		<option value="deleted" <?php if($item->is_status=='deleted'){echo 'selected disabled';}?>>Trashed</option>
																		<option value="drafted" <?php if($item->is_status=='drafted'){echo 'selected disabled';}?>>Drafted</option>
																	</select>
																	<!--<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																		<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																	</div>-->
																</td>
																<?php } ?>
																<td>
																	<?php
																		if($item->is_combo=='false'){
																			$product=$this->db->get_where('products',array('id'=> $item->product_id))->row();
																			if(!empty($product)){
																				echo $product->name;
																			}
																		}
																		else{
																			$product=$this->db->get_where('tbl_combo',array('id'=> $item->product_id))->row();
																			if(!empty($product)){
																				echo $product->name;
																			} 
																		}
																	?>
																</td>
																<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$item->userid)?>" target="_blank" class="badge badge-primary"><?= $item->name; ?></a></td>
																<?php if($this->uri->segment(3)=='VendorReview'){
																	$vendor_details=$this->db->get_where('tbl_vendor',['id'=>$item->vendor_id])->row();
																	if(!empty($vendor_details)){
																	?>
																	<td><a href="<?= base_url('Admin/ManageVendor/VendorFullDetails/'.$item->vendor_id)?>" target="_blank" class="badge badge-primary"><?= $vendor_details->name; ?></a></td>
																<?php } } ?>
																<td><?= $item->rating; ?></td>
                                                                <td>
																	<strong><?= $item->review_title; ?></strong></br>
																	<?= $item->review_message; ?> 
																</td>
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
																</tr>
															<?php $srno++; } ?>
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
									<h5 class="modal-title text-white">Add <?=$this->data->key;?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
									<div class="modal-body p-1">
										
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
										value="<?= $this->security->get_csrf_hash(); ?>" />
										<div class="form-group">
											<label class="col-form-label">Gift Card Name<span class="text-danger">*</span></label>
											<input type="text" class="form-control text-capitalize" name="name" placeholder="Gift Card Name" required >
											<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Title<span class="text-danger">*</span></label>
											<input type="text" class="form-control text-capitalize" name="title" placeholder="Gift Card Title" required >
											<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
										
										<div class="form-group">
											<label class="col-form-label">Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose" required  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
											<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
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
				</div>
			</div>
		</div>
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
		<script>
			function UpdateStatus(id,value) {
				var status = true;
				swal({
					title: "Are you sure?",
					text: "You want "+value+" !", 
					icon: "warning",
					buttons: true,
					dangerMode: true
					}).then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/UpdateReviewStatus"); ?>",
							type: "post",
							data: {
								'id': id,
								'value': value,
							},
							success: function(response) {
								swal(value+" Successfully!", {
									icon: "success",
								});
								location.reload();
							},
							error: function() {
								window.location.reload();
							}
						});
					}
				});
				return status;
			}
		</script>
	</body>
</html>												