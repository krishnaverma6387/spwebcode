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
						$permission=$this->permissionAuth->stock;
						$role_type='subadmin';
					}
				?>
                <div class="content-body">
                    <section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
										<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method); ?>" >
											<?php
												
												if(isset($_GET['vendor']))
												{
													$vendor = $_GET['vendor'];
													
												}
												else
												{
													$vendor = "all";
												}
											?>
											<div class="row">
												<div class="col-sm-4 px-2">
													<div class="form-group">
														<select class="form-control chosen-select" name="vendor">
															<option <?php if($vendor == 'all'){echo "selected";}?> value="all">Show All</option>
															<option <?php if($vendor == 'NA'){echo "selected";}?> value="NA">Slick Pattern</option>     
															<?php
																foreach($vendorlist as $data) 
																{
																?> 
																<option <?php if($vendor == $data->id){echo "selected";}?> value="<?= $data->id;?>"><?= $data->name?> --- <?= $data->shop_name;?></option>
																<?php
																}
															?>
														</select>
													</div>
												</div>
												<div class="col-sm-4"> 
													<button type="submit" class="btn btn-primary" style="height: 24px; padding:0 8px; line-height:1;" > <i class="fa fa-check-circle"></i>  Submit</button>
												</div>
											</div>
										</form>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body py-0 table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
                                                            <th>View</th>
															<th>Seller Details</th>
                                                            <!--<th>View Image</th>-->
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Sub-Category</th>
                                                            <th>Brand</th>
                                                            <th>Price</th>
                                                            <th>Size:Stock</th>
                                                            <th>Refill</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php 
															
															$srno=1; foreach ($list as $item){
                                                            $category = $this->db->get_where('categories', array('id' => $item->category))->row();
                                                            $subcat = $this->db->get_where('sub_category', array('id' => $item->sub_category))->row();
                                                            $brand = $this->db->get_where('brand', array('id' => $item->brand_id))->row();
															$sizes=json_decode($item->size);
															$count = 1;
															$json_less_size=[];
															foreach ($sizes as $eachSize){
																foreach($eachSize as $size=>$size_stock){
																	
																	if($size_stock<=$item->alert_qty){ 
																		array_push($json_less_size,$size.':'.$size_stock); 
																	} 
																}  
															}
															if(!empty($json_less_size)){ 
															?>
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
																<td><a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller.'/ManageProduct/'.'ViewProduct/'.$item->id); ?>">View</a></td>
																<!--<td>
																	<button onclick="Viewimg('<?= $item->id?>')" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View Images</button>
																</td>-->
																<td>
																	<?php
																		if($item->vendor_id=='NA' || $item->vendor_id=='')
																		{	
																		?>
																		<a href="javascript:void(0);"  class="btn btn-sm btn-success waves-effect waves-light w-100" > <i class="fa fa-user"></i> Slick Pattern</a>
																		<?php
																			}else{
																		?>
																		<a href="javascript:void(0);"  class="btn btn-sm btn-danger waves-effect waves-light w-100" onclick="VendorDetail('<?= $item->vendor_id; ?>')"> <i class="fa fa-user"></i> Vendor</a>
																	<?php } ?>
																</td>
																<td><?= $item->name; ?></td>
																
																<td><?php if(!empty($category->name)){ echo $category->name; }else{echo "Category Not Found";}  ?></td>
																<td><?php if(!empty($subcat->name)){ echo $subcat->name; }else{echo "Sub-Category Not Found";}  ?></td>
																<td><?php if(!empty($brand->name)){ echo $brand->name; }else{echo "Brand Not Found";}  ?></td>
																<td><?= $item->reg_sell_price; ?></td>
																<td><?= implode(",",$json_less_size) ?></td>
																<td><a href="<?=base_url('Admin/ManageProduct/UpdateVariant/'.$item->product_id.'/'.$item->vid)?>" class="btn btn-sm btn-danger">Refill</a></td>
																<td><?= $item->created_at; ?></td>
																<td><?= $item->modified_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																		</div>
																	</td>
																<?php } ?>
															</tr>
														<?php $srno++; } } ?>
													</tbody>
												</table>
											</div>
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
		<div class="modal fade" id="EditImage" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Product Image</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/ManageProduct/UpdateImageData'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
		
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>	