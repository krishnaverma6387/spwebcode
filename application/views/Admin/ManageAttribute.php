<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			#style2{
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			background-color: transparent;
			width:100px;
			height: 100px;
			border: 1px solid red;
			cursor: pointer;
			} 
			#style1::-webkit-color-swatch{
			border-radius: 50%;
			}
			
			#style1::-moz-color-swatch{
			border-radius: 50%;
			}
			
		</style>
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
                                    <div class="card-header p-1">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->key;?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
											<?php
												$listProductAttr = $this->db->order_by("id", "DESC")->get_where($this->data->table,array('attribute_type'=>'product_attr'))->result();
												if(!empty($listProductAttr)){
												?>
												<div class="mb-1">
													<div><h5 style="font-weight:600;" class="text-success">Product Attribute</h5> </div> <br>
													<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
														<thead>
															<tr>
																<th>#</th>
																<th>Status</th>
																<th>Category</th>
																<th>Subcategory</th>
																<th>Attribute</th>
																<th>Attribute Value</th>
																<th>Created Date</th>
																<th>Modified Date</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php $srno=1; foreach ($listProductAttr as $item){ ?>
																<tr>
																	<td><?= $srno; ?></td>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																			<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																		</div>
																	</td>
																	<td>
																		<?php 
																			$catName=$this->db->get_where('categories',array('id'=>$item->category))->row();
																			if(!empty($catName)){
																				echo $catName->name;
																				}else{
																				echo "No category Found";
																			}
																		?>
																	</td>
																	<td>
																		<?php 
																			$subcat=$this->db->get_where('sub_category',array('id'=>$item->subcategory))->row();
																			if(!empty($subcat)){
																				echo $subcat->name;
																				}else{
																				echo "No category Found";
																			}
																		?>
																	</td>
																	<td><?= $item->attribute; ?></td>
																	<td><?= $item->attribute_value; ?></td>
																	<td><?= $item->created_at; ?></td>  
																	<td><?= $item->modified_at; ?></td>
																	<td>
																		<div class="btn-group"> 
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																			<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																		</div>
																	</td>
																</tr>
															<?php $srno++; } ?>
														</tbody>
													</table>
												</div>
											<?php } ?>
											<?php
												$listExpertAttr = $this->db->order_by("id", "DESC")->get_where($this->data->table,array('attribute_type'=>'expert_attr'))->result();
												if(!empty($listExpertAttr)){
												?>
												<hr><div class="my-1">
													<div><h5 style="font-weight:600;" class="text-danger">Experts Tips Attribute</h5> </div> <br>
													<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
														<thead>
															<tr>
																<th>#</th>
																<th>Status</th>
																<th>Category</th>
																<th>Subcategory</th>
																<th>Attribute</th>
																<th>Attribute Value</th>
																<th>Created Date</th>
																<th>Modified Date</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php $srno=1; foreach ($listExpertAttr as $item){ ?>
																<tr>
																	<td><?= $srno; ?></td>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																			<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																		</div>
																	</td>
																	<td>
																		<?php 
																			$catName=$this->db->get_where('categories',array('id'=>$item->category))->row();
																			if(!empty($catName)){
																				echo $catName->name;
																				}else{
																				echo "No category Found";
																			}
																		?>
																	</td>
																	<td>
																		<?php 
																			$subcat=$this->db->get_where('sub_category',array('id'=>$item->subcategory))->row();
																			if(!empty($subcat)){
																				echo $subcat->name;
																				}else{
																				echo "No category Found";
																			}
																		?>
																	</td>
																	<td><?= $item->attribute; ?></td>
																	<td><?= $item->attribute_value; ?></td>
																	<td><?= $item->created_at; ?></td>  
																	<td><?= $item->modified_at; ?></td>
																	<td>
																		<div class="btn-group"> 
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																			<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																		</div>
																	</td>
																</tr>
															<?php $srno++; } ?>
														</tbody>
													</table>
												</div>
											<?php } ?>
											<div class="row"> 
												<div class="col-sm-12">
													<form action="<?= base_url($this->data->controller . '/ManageContent/laundrytips')?>" method="post" id="addForm1"> 
														<div class="form-group">
															<hr><div><h5 style="font-weight:600;" class="text-warning">Laundry Tips</h5> </div> <br> 
															<textarea class="form-control ptags summernote" style="border:1px solid #aaaaaa;" name="laundry_tips" >
																<?php
																	$laundryTips=$this->db->get_where('manage_content',array('name'=>'laundry_tips'))->row();
																	if(!empty($laundryTips)){
																	echo $decodeData=base64_decode($laundryTips->value);
																	}
																?>
															</textarea> 
														</div>
														<div class="form-group">
															<button type="submit" class="btn btn-primary float-right" id="addBtn"> <i class="fa fa-check-circle"></i> Update <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
														</div>
													</form>
												</div>
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
											<label for="input-2">Category<span class="text-danger">*</span></label>
											<select  name="category"  class="form-control form-control" onchange="change_subcat(this.value);"  required>
												<option selected disabled>select category</option>
												<?php
													if(!empty($category)){
														foreach($category as $each){
														?>
														<option value="<?php echo $each->id; ?>"><?php echo $each->name; ?></option> 
													<?php } }?>
											</select>
										</div>
										<div class="form-group">
											<label for="input-2">Subcategory<span class="text-danger">*</span></label>
											<select  name="subcategory" id="subcat" class="form-control form-control" required>
												<option selected disabled>select subcategory</option> 
											</select>
										</div> 
										<div class="form-group">
											<label for="input-2">Attribute Type<span class="text-danger">*</span></label>
											<select  name="attribute_type" class="form-control form-control" required>
												<option selected disabled>select attribute type</option> 
												<option value="product_attr">Product Attribute</option> 
												<option value="expert_attr">Expert Attribute</option> 
											</select>
										</div> 
										<div class="form-group">
											<label for="input-2">Attribute<span class="text-danger">*</span></label>
											<input type="text" class="form-control demoInputBox " name="attribute"  title="Please Choose Attribute" required > 
										</div>
										<div class="form-group">
											<label for="input-2">Attribute value<span class="text-danger">(In case of multiple value each value seprated With Comma ,&nbsp;)*</span></label>   
											<input type="text text-uppercase" class="form-control demoInputBox " name="attribute_value"  title="Please Choose Attribute Value" required >
											<!-- <select class="form-control" multiple="multiple">
  <option selected="selected">orange</option>
  <option>white</option>
  <option selected="selected">purple</option>
</select> -->
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
			function change_subcat(id) {
				var id = id;
				var url = "<?= base_url($this->data->controller . '/ManageProduct/subcategory/') ?>" + id; 
				$.ajax({
					url: url,
					type: "post",
					
					success: function(res) {
						$("#subcat").html(res);
					}
				})
			}
		</script>
	</body>
</html>																																					