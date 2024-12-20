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
						$permission=$this->permissionAuth->product;
						$permission_catlog=$this->permissionAuth->ecatlog;
						$role_type='subadmin';
					}
				?>
                <div class="content-body">
                    <section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
                                        <?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?><a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'AddProduct'); ?>">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->key;?></a><?php } ?>
										<?php if(($role_type=='subadmin' && $permission->delete) || ($role_type=='subadmin' && $permission_catlog->add) || $role_type=='admin'){?><button class="btn btn-sm btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> <input type='checkbox'  id="selectAll" onclick="SelectAll()"> Check All</button><?php } ?>
										 <?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><button class="btn btn-sm btn-primary" onclick="check('<?= $this->data->table?>')">
										 <i class="fa fa-plus-circle" aria-hidden="true"></i> Delete</button><?php } ?>
										<br/>
										<hr/>
										 <?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
										<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/DeleteFromDate'); ?>" method="post">
											<div class="row">
												<div class="col-sm-6">
													<h3 class="text-danger">Date Wise Delete</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-2">
													<div class="form-group">
														<label>From Date</label>
														<input type="date" required class="form-control" data-height="150" name="fromdate" Title="From Date" >
														<?php echo form_error("fromdate", "<p class='text-danger' >", "</p>"); ?>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-group">
														<label>To Date</label>
														<input type="date" required class="form-control" data-height="150" name="todate" Title="To Date" >
														<?php echo form_error("todate", "<p class='text-danger' >", "</p>"); ?>
													</div>
												</div>
												<div class="col-sm-4">
													<br/>
													<button type="submit" class="btn btn-primary" > <i class="fa fa-check-circle"></i>  Delete</button>
												</div>
											</div>
										</form>
										 <?php } ?>
									</div>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>View</th>
															<th>Reg. sell Price</th>
															<th>Name</th>
															<th>Image</th>
															<th>Category</th>
															<th>Sub-Category</th>
															<th>Brand</th>
															<th>Product Image</th>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
															<th>Launching Date</th>
															<th>Created Date</th>
															<th>Modified Date</th>
														</tr>
													</thead>
													<tbody>
														<?php $srno=1; foreach ($list as $item){
															$category = $this->db->get_where('categories', array('id' => $item->category))->row();
															$subcat = $this->db->get_where('sub_category', array('id' => $item->sub_category))->row();
															$brand = $this->db->get_where('brand', array('id' => $item->brand_id))->row();
														?>
														<tr>
															<td><?= $srno; ?></td>
															<td>
																<div class="d-flex">
																	<?php if(($role_type=='subadmin' && $permission->delete) || ($role_type=='subadmin' && $permission_catlog->add) || $role_type=='admin'){?><input type="checkbox" value="<?= $item->id; ?>" class="selectall"  onclick="selectcatalog(this,<?= $item->id; ?>)"  name="checkbox" id="checkbox<?= $srno;?>"><?php } ?>
																	<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																		<div class="ml-1 custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																		<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																	<?php } ?>
																	</div>
																</div>
															</td>
															<td><a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$item->id); ?>">View</a></td>
															<td><?= $item->reg_sell_price; ?></td>
															<td><?= $item->name; ?></td>
															<td><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->front_view_image)?>" alt="Product Image" height="100"></td>
															<td><?php if(!empty($category->name)){ echo $category->name; }else{echo "Category Not Found";}  ?></td>
															<td><?php if(!empty($subcat->name)){ echo $subcat->name; }else{echo "Sub-Category Not Found";}  ?></td>
															<td><?php if(!empty($brand->name)){ echo $brand->name; }else{echo "Brand Not Found";}  ?></td>
															<td>
																<button onclick="Viewimg('<?= $item->id?>')" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View Images</button>
															</td>
															<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
															<td>
																<div class="btn-group">
																<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																	<a href="<?= base_url('Admin/ManageProduct/UpdateProduct/'.$item->id)?>" class="btn btn-sm btn-outline-info waves-effect waves-light"> <i class="fa fa fa-edit"></i></a>
																<?php } ?>
																<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																<?php } ?>
																</div>
															</td>
															<?php } ?>
															<td><?= $item->launch_time; ?></td>
															<td><?= $item->created_at; ?></td>
															<td><?= $item->modified_at; ?></td>
															
														</tr>
														<?php $srno++; } ?>
													</tbody>
													
												</table>
											</div>
										</div>
										<div class="card-footer ">
											<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/GenerateCatalog'); ?>" method="post" enctype="multipart/form-data" >
												
												<input type="hidden" name="selectedid" id="selectedid" required />
												<button type="submit" class="btn btn-primary btn-sm" id="catalogaddBtn"> <i class="fa fa-check-circle"></i>  Generate Catalog <i class="fa fa-spin fa-spinner" id="catalogaddSpin" style="display:none;"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="ImgModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Product Images</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body" id="body">
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<!-- Modal -->
		<div class="modal fade" id="VendorModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Vendor Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body" id="body">
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<!-- Modal -->
		<div class="modal fade" id="EditImage" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Product Image</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateImageData'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
		
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>

<script>
	var selectedStudents = [];
	function selectcatalog(chk, sid) {
		
		if ($(chk).prop("checked") == true) {
			selectedStudents[selectedStudents.length] = sid;
			} else {
			selectedStudents = selectedStudents.filter(function(item) {
				return item !== sid
			});
		}
		var allid = "";
		for (var i = 0; i < selectedStudents.length; i++) {
			allid += selectedStudents[i] + ",";
		}
		$("#selectedid").val(allid);
	}
	
	
</script>																																																																																																																				