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
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->salemanagement;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
										<div class="card-header p-1">
											<h4 class="text-capitalize">Discount Type:<?php if($saledata->discount_type=='percent'){echo 'Percent';}elseif($saledata->discount_type=='flat'){echo 'Flat';}elseif($saledata->discount_type=='buy_x_get_y'){echo 'Buy-X-Get-Y';}?></h4><hr>
											<?php 
												if($saledata->product_type == 'individual')
												{
												?>
												<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method .'/SaleFilterProduct'); ?>" method="post" enctype="multipart/form-data" id="FilterData">
													<input type="hidden" value="<?= $saledata->id;?>" name="saleid">
													<div class="row">
														<div class="col-sm-2">
															<div class="form-group">
																<label >Apply To</label>
																<select class="form-control" onchange="change_apply(this.value);" name="apply_type" required>
																	<option selected disabled>-- Select--</option>
																	<option value="all_product">All Product</option>
																	<option value="specific_collection">Specific Collection</option>
																</select>
															</div>
														</div>
														<div class="col-sm-5" id="SpecificCollection" style="display:none;">
															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group">
																		<label >Category<span class="text-danger"> *</span></label>
																		<select class="form-control specific_field" onchange="change_subcat(this.value);" name="category">
																			<option selected disabled>-- Select--</option>
																			<?php
																				foreach($categorylist as $data)
																				{
																				?>
																				<option value="<?= $data->id;?>"><?= $data->name?></option>
																				<?php
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label >Sub-category<span class="text-danger"> *</span></label>
																		<select name="subcategory" class="form-control specific_field" id="subcat">
																			<option selected disabled>--- Select Category First ---</option>
																		</select>
																	</div>
																</div>
																
															</div>
														</div>
														<div class="col-sm-2" style="padding:8px 0;">
															<button type="submit" class="btn btn-primary mt-2" id="filterBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="filterSpin" style="display:none;"></i></button>
														</div>
													</div>
													
												</form>
												<?php
												}
												elseif($saledata->product_type == 'combo')
												{
												?>
												<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method .'/SaleFilterCombo'); ?>" method="post" enctype="multipart/form-data" id="FilterData">
													<input type="hidden" value="<?= $saledata->id;?>" name="saleid">
													<div class="row">
														<div class="col-sm-2">
															<div class="form-group">
																<label >Apply To</label>
																<select class="form-control" onchange="change_apply(this.value);" name="" required>
																	<option selected disabled>-- Select--</option>
																	<option value="all_product">All Product</option>
																	<option value="specific_collection">Specific Collection</option>
																</select>
															</div>
														</div>
														<div class="col-sm-8" id="SpecificCollection" style="display:none;">
															<div class="row">
																<div class="col-sm-4">
																	<div class="form-group">
																		<label >Category<span class="text-danger"> *</span></label>
																		<select class="form-control specific_field" onchange="change_subcat(this.value);" name="category">
																			<option selected disabled>-- Select--</option>
																			<?php
																				foreach($categorylist as $data)
																				{
																				?>
																				<option value="<?= $data->id;?>"><?= $data->name?></option>
																				<?php
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="form-group">
																		<label >Sub-category<span class="text-danger"> *</span></label>
																		<select name="subcategory specific_field" class="form-control " id="subcat">
																			<option selected disabled>--- Select Category First ---</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-2" style="padding:8px 0;">
															<button type="submit" class="btn btn-primary mt-2" id="filterBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="filterSpin" style="display:none;"></i></button>
														</div>
													</div>
												</form>
												<?php
												}
											?>
										</div>
										<div class="card-body table-responsive py-0" style="padding:0 18px;">
											<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method); ?>/SubmitSaleData" id="SubmitsaleData">
												<input type="hidden" value="<?= $saledata->id;?>" name="saleid">
												<input type="hidden" value="<?= $saledata->product_type;?>" name="product_type">
												<input type="hidden" value="<?= $saledata->sale_type;?>" name="sale_type"> 
												<div id="productdata">
													
												</div>
												<button style="display:none;" type="submit" class="btn btn-primary my-2" id="saleBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="saleSpin" style="display:none;"></i></button>
											</form>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</section>
					<div class="content-body">
						<section id="form-action-layouts">
							<div class="row match-height">
								<div class="col-sm-12">
									<div class="card card-dashboard">
										<div class="card-header p-1">
											
										</div>
										<div class="card-content collpase show">
											<div class="card-body table-responsive">
												<div class="">
													<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
														<thead>
															<tr>
																<th>#</th>
																<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
																<th>Sale</th>
																<th>Product</th>
																<th>Type</th>
																<th>Discount(<?= $saledata->discount_type;?>)</th> 
																<th>Quantity</th>
																<th>Created Date</th>
																<th>Modified Date</th>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
															</tr>
														</thead>       
														<tbody>
															<?php $srno = 1;     
																foreach ($alldata as $item) 	 
																{     
																	if($item->product_type == "individual")
																	{
																		$product = $this->db->get_where('products',array('id'=>$item->product_id))->row();
																	}
																	else
																	{
																		$product = $this->db->get_where('tbl_combo',array('id'=>$item->product_id))->row();
																	}
																	$sale = $this->db->get_where('tbl_sale',array('id'=>$item->sale_id))->row();
																?>
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
																	<td><?php if(!empty($sale)){echo $sale->name;} ?></td>
																	<td>
																		<?php 
																			if($item->product_type == "individual")
																			{
																				if(!empty($product))
																				{
																				?> 
																				<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/').$product->id?>" target="_blank"><?=  $product->name;?></a>
																				<?php
																				}     
																			}
																			else
																			{
																				if(!empty($product))
																				{
																				?>
																				<?=  $product->name;?>
																				<?php
																				} 
																			}
																		?>
																	</td>
																	<td><?= ucwords($item->product_type); ?></td>
																	<td><?php
																		if($saledata->discount_type == "percent")
																		{
																		?>
																		<?= $item->discount; ?>%
																		<?php
																		}
																		elseif($saledata->discount_type == "flat")
																		{
																		?>
																		₹ <?= $item->discount; ?>
																		<?php
																		}
																		elseif($saledata->discount_type == "buy_x_get_y"){
																			echo $item->qty_x.'-'.$item->discount; 
																		}
																		
																	?></td>
																	<td><?= $item->quantity; ?></td>
																	<td><?= $item->created_at; ?></td>
																	<td><?= $item->modified_at; ?></td>
																	<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																		<td>
																			<div class="btn-group">
																				<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																					<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditSaleProduct('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																					<?php } ?><?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																					<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'sale_product','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																				<?php } ?>
																			</div>
																		</td>
																	<?php } ?>
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
					
					
					</div>
					
					</div>
					
					</div>
					</div>
					
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
					
					<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateSaleProduct'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
					
					<?php require APPPATH . 'views/Auth/Footer.php'; ?>
					
					<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
					
					</body>
					
					</html>		
					<script>
					function EditSaleProduct(id) {
					$("#EditModal").modal("show");
					$("#EditModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
					$("#EditModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditSaleProduct/') ?>" + id);
					}
					</script>
					<script>
					
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
					
					$(function() {
					var dtToday = new Date();
					
					var month = dtToday.getMonth() + 1;
					var day = dtToday.getDate();
					var year = dtToday.getFullYear();
					if (month < 10)
					month = '0' + month.toString();
					if (day < 10)
					day = '0' + day.toString();
					
					var maxDate = year + '-' + month + '-' + day;
					
					$('#startdate').attr('min', maxDate);
					$('#enddate').attr('min', maxDate);
					});
					
					function change_apply(e){
					if(e!=null){
					if(e=='specific_collection'){
					$('#SpecificCollection').show();
					$('.specific_field').attr('required',true);
					$("#productdata").html('');
					}
					else{
					$('#SpecificCollection').hide();
					$('.specific_field').attr('required',false);
					$("#productdata").html('');
					}
					}
					}
					
					$('#FilterData').on('submit', function(e) {
					var formAction = $(this);
					var btnAction = $('#filterBtn');
					var spinAction = $('#filterSpin');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
					$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
					$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					$("#productdata").html(response);
					$("#saleBtn").show();
					},
					error: function() {
					// window.location.reload();
					}
					});
					}
					});
					
					$('#SubmitsaleData').on('submit', function(e) {
					var formAction = $(this);
					var btnAction = $('#saleBtn');
					var spinAction = $('#saleSpin');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
					$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
					$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					var response = JSON.parse(response);
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if (response[0].redirect) 
					{
					window.setTimeout(function() {
					window.location.href = response[0].redirect;
					}, 1000);
					} 
					else
					{
					window.setTimeout(function() {
					window.location.reload();
					}, 1000);
					}
					}
					else if (response[0].res == 'error') 
					{
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
					}
					},
					error: function() {
					// window.location.reload();
					}
					});
					}
					});
					</script>																																																																																																								