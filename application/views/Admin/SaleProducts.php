<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
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
							<h5 class="content-header-title float-left pr-1 mb-0"><?= $this->data->pageTitle; ?></h5>
							<div class="breadcrumb-wrapper d-none d-sm-block">
								<ol class="breadcrumb p-0 mb-0 pl-1">
									<li class="breadcrumb-item">
										<a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
									</li>
									<li class="breadcrumb-item">
										<a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->pageTitle; ?></li>
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
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?= $this->data->key; ?></button>
									</div>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<th>Status</th>
															<th>Sale</th>
															<th>Product</th>
															<th>Type</th>
															<th>Discount</th>
															<th>Created Date</th>
															<th>Modified Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php $srno = 1;
															foreach ($list as $item)
															{ 
																$product = $this->db->get_where('products',array('id'=>$item->product_id))->row();
																$sale = $this->db->get_where('tbl_sale',array('id'=>$item->sale_id))->row();
															?>
															<tr>
																<td><?= $srno; ?></td>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true')
																			{
																				echo 'checked';
																			} ?> id="switch-id<?= $srno; ?>">
																			<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																	</div>
																</td>
																<td><?php if(!empty($sale)){echo $sale->name;} ?></td>
																<td>
																	<?php 
																		if(!empty($product))
																		{
																		?>
																		<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/').$product->id?>" target="_blank"><?=  $product->name;?></a>
																		<?php
																		} 
																	?>
																</td>
																<td><?= ucwords($item->type); ?></td>
																<td><?php
																	if($item->type == "percent")
																	{
																	?>
																	<?= $item->discount; ?>%
																	<?php
																	}
																	else
																	{
																	?>
																	<?= $item->discount; ?>₹ 
																	<?php
																	}
																	
																?></td>
																
																
																<td><?= $item->created_at; ?></td>
																<td><?= $item->modified_at; ?></td>
																
																<td>
																	<div class="btn-group">
																		<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																		<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
															<?php $srno++;
															} ?>
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
									<h5 class="modal-title text-white">Add <?= $this->data->key; ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
									<div class="modal-body p-1">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
										<div class="form-group">
											<label class="col-form-label">Choose Sale<span class="text-danger">*</span></label>
											<select class="form-control " name="sale" required>
												<option selected disabled>-- Select --</option>
												<?php
													foreach($salelist as $list)
													{
													?>
													<option value="<?= $list->id?>"><?= $list->name?></option>
													<?php
													}
												?>
											</select>
											<?php echo form_error("sale", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label>Product Category<span class="text-danger"> *</span></label>
											<select name="category" required class="form-control pcat " id="cat" title="Select a Product Category" onchange="change_subcat(this.value);" data-placeholder="Choose a Category...">
												<option selected disabled>--- Select ---</option>
												<?php
													foreach ($categorylist as $cat)
													{
													?>
													<option class="optioncat<?= $cat->id ?>" value="<?= $cat->id ?>"><?= $cat->name ?></option>
													<?php
													}
												?>
											</select>
											<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label >Product Sub-category<span class="text-danger"> *</span></label>
											<select name="subcategory" onchange="getproduct(this.value)" class="form-control " id="subcat" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory...">
												<option selected disabled>--- Select Category First ---</option>
												
											</select>
										</div>
										<div class="form-group">
											<label class="col-form-label">Choose Product<span class="text-danger">*</span></label>
											<select class=" form-control chosen-select2 chosen-select" id="product" name="product" required>
												<option selected disabled>-- Select --</option>
												<?php
													foreach($productlist as $list)
													{
													?>
													 <option value="<?= $list->id?>"><?= $list->name?> - <?= $list->off_price?> ₹</option>
													<?php
													}
												?>
											</select>
											<?php echo form_error("product", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Discount Type <span class="text-danger">*</span></label>
											<select class="form-control " onchange="getType(this.value)" name="type" required>
												<option selected disabled>-- Select --</option>
												<option value="flat">Flat</option>
												<option value="percent">Percentage</option>
											</select>
											<?php echo form_error("type", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div style="display:none" id="percentdiv">
											<div class="form-group">
												<label class="col-form-label">Sale Discount <span class="text-danger">(In %)*</span></label>
												<input type="number" id="percentdis" min="0"  max="100" step="any" class="form-control " name="percentdis" placeholder="Sale Discount" >
												<?php echo form_error("percentdis", "<p class='text-danger' >", "</p>"); ?>
											</div>
										</div>
										<div style="display:none" id="amountdiv"> 
											<div class="form-group">
												<label class="col-form-label">Sale Discount <span class="text-danger">(In Rupee)*</span></label>
												<input type="number" id="flatdis" class="form-control " name="discountrs" placeholder="Sale Discount" >
												<?php echo form_error("discountrs", "<p class='text-danger' >", "</p>"); ?>
											</div>
										</div>
										
									</div>
									<div class="modal-footer d-block p-1">
										<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
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
									<h5 class="modal-title text-white">Edit <?= $this->data->key; ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
									<div class="modal-body p-1">
										
									</div>
									<div class="modal-footer d-block p-1">
										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
										<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<!--Modal End-->
				</div>
			</div>
		</div>
		<?php require APPPATH . 'views/Auth/Footer.php'; ?>
		<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
		<script>
			function getType(val)
			{
				if(val != null)
				{
					if(val == "flat")
					{
						$("#amountdiv").show();
						$("#percentdiv").hide();
						
						$('#flatdis').attr('required', true);
						$('#percentdis').removeAttr('required', true);
						
					}
					else if(val == "percent")
					{
						$("#amountdiv").hide();
						$("#percentdiv").show();
						
						$('#percentdis').attr('required', true);
						$('#flatdis').removeAttr('required', true);
					}
				}
				
			}
			
			function change_subcat(id) {
				var id = id;
				var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subcategory/') ?>" + id;
				$.ajax({
					url: url,
					type: "post",
					
					success: function(res) {
						// alert(res);
						$("#subcat").html(res);
					}
				})
				
			}
			
			function getproduct(id) {
			$('.chosen-select2').chosen('destroy');
			$('.chosen-select').chosen('destroy');
				var subcatid = id;
				var catid = $("#cat").val();
				
				var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/getproduct/') ?>" +catid+"/"+subcatid;
				$.ajax({
					url: url,
					type: "post",
					
					success: function(res) {
						$("#product").html(res);
						$('.chosen-select2').chosen();
					}
				})
				
				
			}
			
			
		</script>
	</body>
	
</html>		