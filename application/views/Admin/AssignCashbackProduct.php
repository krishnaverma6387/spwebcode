<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<style>
			.select-box{
			height: 30px;
			border-radius: 0;
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
							
							<h5 class="content-header-title float-left pr-1 mb-0">Assign Cashback Product</h5> 
							
							<div class="breadcrumb-wrapper d-none d-sm-block">
								
								<ol class="breadcrumb p-0 mb-0 pl-1">
									
									<li class="breadcrumb-item">
										
										<a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
										
									</li>
									<li class="breadcrumb-item">
										
										<a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
										
									</li>
									
									<li class="breadcrumb-item active"><?= $cashbackdata->title;?></li>
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
					<?php if(($role_type=='subadmin' && $permission->add) || $role_type=='admin'){?>
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
								
									<div class="card-header p-1">
										<?php
											if($cashbackdata->product_type == 'individual')
											{
											?>
											<form action="<?php echo base_url($this->data->controller.'/ManageCoupon/CouponFilterProduct'); ?>" method="post" enctype="multipart/form-data" id="FilterData">
												
												<div class="row mt-2">
													<div class="col-sm-3">
														<div class="form-group">
															<label>User<span class="text-danger"> *</span></label> 
															<select class="form-control select-box" name="user" onchange="change_usertype(this.value,'<?=$cashbackdata->user_type?>');" data-placeholder="Select User Type">
																<option selected disabled>Select User Type</option>    
																<option value="all">All</option>    
																<option value="max_purchase">Max Purchasing Rate</option>     
															</select>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<label >Category<span class="text-danger"> *</span></label>
															<select class="form-control select-box" onchange="change_subcat(this.value);" name="category" required>
																<option selected disabled>-- Select--</option>
																<option value="all">All Prouduct</option>    
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
													<div class="col-sm-3" style="display:none;" id="subcat_div">
														<div class="form-group">
															<label >Sub-category<span class="text-danger"> *</span></label>
															<select name="subcategory  select-box" class="form-control " id="subcat" style="height:30px !important; border-radius:0;">
																<option selected disabled>--- Select Category First ---</option>
																
															</select>
														</div>
														
													</div>
													<div class="col-sm-2">
														<div class="form-group">
															<label >Brand<span class="text-danger"> *</span></label>
															<select class="form-control  select-box"  name="brand" required>
																<option selected disabled>-- Select--</option>
																<option value="all">All Brand</option>
																<?php
																	foreach($brandlist as $data)
																	{
																	?>
																	<option value="<?= $data->id;?>"><?= $data->name?></option>
																	<?php
																	}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-1 p-0">
														<button type="submit" class="btn btn-primary select-box" id="filterBtn" style="margin-top:26px; padding: 0 8px;"> <i class="fa fa-filter"></i> Filter <i class="fa fa-spin fa-spinner" id="filterSpin" style="display:none;"></i></button>
													</div>
												</div>
											</form>
											<?php
											}
											else
											{
											?>
											<form action="<?php echo base_url($this->data->controller.'/ManageCoupon/CouponFilterCombo'); ?>" method="post" enctype="multipart/form-data" id="FilterData">
												
												<div class="row mt-2">
													<div class="col-sm-3">
														<div class="form-group">
															<label >Category<span class="text-danger"> *</span></label>
															<select class="form-control  select-box" onchange="change_subcat(this.value);" name="category" required>
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
													<div class="col-sm-3">
														<div class="form-group">
															<label >Sub-category<span class="text-danger"> *</span></label>
															<select name="subcategory  select-box" class="form-control " id="subcat" required>
																<option selected disabled>--- Select Category First ---</option>
															</select>
														</div>
													</div>
													<div class="col-sm-2">
														<button type="submit" class="btn btn-primary mt-2" id="filterBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="filterSpin" style="display:none;"></i></button>
													</div>
												</div>
											</form>
											<?php
											}
										?>
									</div>
								
									<div class="card-body table-responsive">
										<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method); ?>/SubmitCashbackData" id="SubmitCouponData">
											<input type="hidden" value="<?= $cashbackdata->id;?>" name="cashbackid">
											<input type="hidden" value="<?= $cashbackdata->product_type;?>" name="producttype">
											<div class="row">
												<div class="col p-0" id="user_type">
													 
												</div>
											</div>
											<div id="productdata">
												
											</div>
											<button style="display:none;" type="submit" class="btn btn-primary mt-2" id="saleBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="saleSpin" style="display:none;"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
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
																<th>Beneficiary User</th>
																<th>Product</th>
																<th>Created Date</th>
																<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
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
																	
																?>
																<tr>
																	<td><?= $srno; ?></td>
																	<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																	<td>
																		<div class="custom-control custom-switch custom-control-inline">
																			<input type="checkbox" class="custom-control-input" onchange="return Status(this,'coupon_product','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true')
																				{
																					echo 'checked';
																				} ?> id="switch-id<?= $srno; ?>">
																				<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																		</div>
																	</td>
																	<?php } ?>
																	<td>
																		<a href="<?= base_url($this->data->controller.'/BeneficiaryDetails/'.base64_encode($item->userid))?>" class="btn btn-sm btn-outline-success waves-effect waves-light" > <i class="fa fa-user"></i> view users</a>
																	</td>
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
																	<td><?= $item->created_at; ?></td>
																	<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'cashback_product','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
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
		<?php require APPPATH . 'views/Auth/Footer.php'; ?>
		<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
	</body>
	
</html>		

<script>
	
	function change_subcat(id) {
		var id = id;
		if(id!='all'){
			$('#subcat_div').show();
			$("#subcat").attr('required',true);
			var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subcategory/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",
				success: function(res) {
					$("#subcat").html(res);
				}
			})
		}
		else{
			$('#subcat_div').hide();
			$("#subcat").attr('required',false);
		}
	}
	
	function change_usertype(id,user_type){
		if(id){
			var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/FilterUser/') ?>" + id;
			$.ajax({
				url: url,
				type: "post",
				data:{usertype:user_type}, 
				success: function(res) {
					$("#user_type").html(res);  
				}
			})
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
	
	$('#SubmitCouponData').on('submit', function(e) {
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