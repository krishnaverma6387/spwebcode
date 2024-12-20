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
						$permission=$this->permissionAuth->offer;
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
											<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?= $this->data->key; ?></button>
										</div>
									<?php } ?>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
															<th>Assign</th>
															<th>Current</th>
															<th>Product Type</th>
															<th>User Type</th>
															<th>Complementary Type</th>
															<th>Coupon Type</th>
															<th>Coupon</th>
														<th>Discount Type</th>
														<th>Discount</th>
														<th>Max Discount</th>
														<th>No. Of Coupon</th>
														<th>Banner</th>
														<th>Title</th>
														<th>Description</th>
														<th>Terms & Conditions</th>
														<th>Created Date</th>
														<th>Modified Date</th>
														<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
													</thead>
													<tbody>
														<?php $srno = 1;
															foreach ($list as $item)
															{ 
																$start = $item->start_date;
																$end = $item->end_date;
																
																if($item->is_status != "false")
																{
																	$start = strtotime($item->start_date);
																	$end = strtotime($item->end_date);
																	$today=time();
																	
																	if($today >= $start and $today < $end)
																	{
																		$stat = "Activated";
																	}
																	elseif($today < $start and $today < $end)
																	{
																		$stat = "Not Started";
																	}
																	elseif($today > $start and $today > $end)
																	{
																		$stat = "Expired";
																	}
																	elseif($start > $end or $end < $start)
																	{
																		$stat = "Invalid Date Entered";
																	}
																}
																else
																{
																	$start = strtotime($item->start_date);
																	$end = strtotime($item->end_date);
																	
																	$today=time();
																	
																	
																	if($today >= $start and $today <= $end)
																	{
																		$stat = "Block And Activated";
																	}
																	elseif($today < $start and $today < $end)
																	{
																		$stat = "Block And Not Started";
																	}
																	elseif($today > $start and $today > $end)
																	{
																		$stat = "Block And Expired";
																	}
																	elseif($start > $end or $end < $start)
																	{
																		$stat = "Block And Invalid Date Entered";
																	}
																}
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
																<td><a class="btn btn-sm btn-dark" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/AssignCouponProduct/'.$item->id)?>"><i class="fa fa-check"></i> Assign</a></td>
																<td><button class="btn btn-sm <?php if($stat=='Activated'){echo 'btn-success';}elseif($stat=='Not Started'){echo 'btn-warning';}else{echo "btn-danger";}?>"><?= $stat; ?></button></td>
																<td><?= ucwords($item->product_type); ?></td>
																<td><?= ucwords($item->user_type); ?></td>
																<td><?= ucwords($item->complementry_type); ?><br><span class="badge badge-primary d-none"><?php if($item->apply_type=='before'){echo 'Before Purchase';}elseif($item->apply_type=='after'){echo 'After Purchase';}?></span></td>
																<td><?= ucwords($item->coupon_type); ?></td>
																<td>
																	<?php if($item->complementry_type=='coupon'){
																		echo $item->coupon; 
																		}else{
																		echo "---"; 
																	} ?>
																</td>
																<td>
																	<?php if($item->coupon_type !="Complementary discount coupons" AND $item->coupon_type !="Free gift with purchase" AND $item->coupon_type !="Free shipping coupon"){ ?>
																		<?= ucwords($item->coupon_type); ?>
																		<?php }else{?>
																		--
																	<?php } ?>
																</td>
																<td><?php
																	if($item->coupon_type !="Complementary discount coupons" AND $item->coupon_type !="Free gift with purchase" AND $item->coupon_type !="Free shipping coupon"){ 
																		if($item->type == "percent")
																		{
																		?>
																		<?= $item->discount; ?>%
																		<?php
																		}
																		elseif($item->type == "flat")
																		{
																		?>
																		₹<?= $item->discount; ?>
																		<?php
																		}
																	?>
																	<?php }else{ ?>
																	---
																<?php } ?>
																</td>
																<td><?= $item->max_discount; ?></td>
																<td><?= $item->no_of_coupon; ?></td>
																<td>
																	<?php
																		if(!empty($item->banner))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->banner); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->banner); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td><?= $item->title; ?></td>
																<td><?= $item->description; ?></td>
																<td><?php echo base64_decode($item->termsconditions); ?></td> 
																<td><?= $item->created_at; ?></td>
																<td><?= $item->modified_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																	<td>
																		<div class="btn-group">
																			<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																			<?php } ?>
																			<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
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
							<!--Modal Start-->
							<div class="modal fade" id="AddModal">
							<div class="modal-dialog modal-lg">
							<div class="modal-content border-primary">
							<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">Add <?= $this->data->key; ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
							<div class="modal-body p-1">
							<div class="row">
							<div class="col-sm-6">
							<div class="form-group">
							<label class="col-form-label">Product Type <span class="text-danger">*</span></label>
							<select class="form-control "  name="producttype" required>
							<option selected disabled>-- Select --</option>
							<option value="individual">Individual</option>
							<option value="combo">Combo</option> 
							<!--option value="all">All</option>-->
							</select>
							<?php echo form_error("producttype", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group">
							<label class="col-form-label">User Type <span class="text-danger">*</span></label>
							<select class="form-control " name="usertype" required>
							<option selected disabled>-- Select --</option>
							<option value="normal">Normal</option>
							<option value="royal">Royal</option>
							<option value="all">All</option>
							</select>
							<?php echo form_error("usertype", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group">
							<label class="col-form-label">Complementary Type <span class="text-danger">*</span></label>
							<select class="form-control " name="complementry_type" onchange="getComplementryType(this.value)" required>
							<option selected disabled>-- Select --</option>
							<option value="coupon">Coupon</option>
							<option value="offer">Offer</option>
							</select>
							<?php echo form_error("complementry_type", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group" id="coupon-apply-type" style="display:none;">
							<label class="col-form-label">Coupon Applied Type <span class="text-danger">*</span></label>
							<select class="form-control " readonly name="apply_type" onchange="CouponAppliedType(this.value)" id="apply_type">
							<option selected disabled>-- Select --</option>
							<option value="before" selected>Before Purchase</option>
							<!--<option value="after">After Purchase</option>-->
							</select>
							</div>
							<div class="form-group"> 
							<label class="col-form-label">Coupon Type <span class="text-danger">*</span></label>
							<select class="form-control " onchange="getCouponType(this.value)" name="coupon_type" id="type" required>
							<option selected disabled>-- Select --</option>
							<option value="Discount on minimum purchase">Discount on minimum purchase</option>
							<option value="Complementary discount coupons">Complementary discount coupons</option>
							<option value="Buy-one-get-one coupons">Buy-one-get-one coupons</option>
							<option value="New Customer Coupons">New Customer Coupons</option>
							<option value="Loyalty coupons">Loyalty coupons</option>
							<option value="Free gift with purchase">Free gift with purchase</option> 
							<option value="Free shipping coupon">Free shipping coupon</option>
							<option value="Get X% or XX rs on prebook order">Get X% or XX rs on prebook order</option>
							</select>
							<?php echo form_error("coupon_type", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group" id="coupon_code" style="display:none;">
							<label class="col-form-label">Coupon Code<span class="text-danger">*</span></label>
							<input type="text" class="form-control" style="text-transform:uppercase;" name="code" id="code" placeholder="Coupon Code" required>
							</div>
							<div class="form-group">
							<label class="col-form-label">Min Order<span class="text-danger">*</span></label>
							<input type="number" min="1" oninput="validity.valid||(value='');" class="form-control" name="minorder" placeholder="Minimum Order Amount" required>
							</div>
							<div class="form-group" id="discount_type"> 
							<label class="col-form-label">Discount Type <span class="text-danger">*</span></label>
							<select class="form-control " onchange="getType(this.value)" name="type" id="disType"  required>
							<option selected disabled>-- Select --</option>
							<option value="flat">Flat</option>
							<option value="percent">Percentage</option>
							</select>
							</div>
							<div style="display:none" id="percentdiv">
							<div class="form-group">
							<label class="col-form-label">Coupon Discount <span class="text-danger">(In %)*</span></label>
							<input type="number" id="percentdis" min="0"  max="100" step="any" class="form-control " name="percentdis" placeholder="Coupon Discount" >
							</div>
							</div>
							<div style="display:none" id="amountdiv"> 
							<div class="form-group">
							<label class="col-form-label">Coupon Discount <span class="text-danger">(In Rupee)*</span></label>
							<input type="number" id="flatdis" class="form-control " name="discountrs" placeholder="Coupon Discount" >
							</div>
							</div>
							<div class="form-group">
							<label class="col-form-label">Number of Coupon<span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="noofcoupon" placeholder="Number of Coupon" required>
							<?php echo form_error("noofcoupon", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group" id="maxdiv" style="display:none;">
							<label class="col-form-label">Max Discount<span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="maxdis" id="maxdis" placeholder="Max Discount" required>
							</div>
							</div>
							<div class="col-sm-6">
							<div class="form-group" >
							<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control " id="startdate" name="startdate" required>
							<?php echo form_error("startdate", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group">
							<label class="col-form-label">End Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control " id="enddate" name="enddate" required>
							<?php echo form_error("enddate", "<p class='text-danger' >", "</p>"); ?>
							<div id="dateValidationMessage" class="text-danger"></div>
							</div>
							<div class="form-group">
							<label class="col-form-label">Coupon Title<span class="text-danger">*</span></label>
							<input type="text" class="form-control" style="text-transform:uppercase;" name="title" id="title" placeholder="Coupon Title" required>
							<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
							
							</div>
							<div class="form-group">
							<label class="col-form-label">Description <span class="text-danger">*</span></label>
							<textarea class="form-control" name="description" placeholder="Description" required></textarea> 
							<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
							</div>
							<div class="form-group">
							<label class="col-form-label ">Terms & Conditions<span class="text-danger">*</span></label>
							<textarea class="form-control summernote" name="termsconditions" placeholder="Terms & Conditions"  required></textarea>
							</div>
							<div class="form-group" id="desc1" style="display:none;">
							<label class="col-form-label">Description For After<span class="text-danger">*</span></label>
							<textarea class="form-control" name="description1" placeholder="Description"></textarea> 
							</div>
							<div class="form-group" id="terms1" style="display:none;">
							<label class="col-form-label ">Terms & Conditions For After<span class="text-danger">*</span></label>
							<textarea class="form-control summernote" name="termsconditions1" placeholder="Terms & Conditions"
							></textarea>
							</div>
							<div class="form-group">
							<label class="col-form-label">Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
							<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
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
							</div>
							<!--Modal End-->
							<!--Modal Start-->
							<div class="modal fade" id="EditModal">
							<div class="modal-dialog modal-lg">
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
							function CouponAppliedType(val){ 
							if(val != null)
							{
							if(val == "before")
							{
							$("#terms1").hide();
							$('#desc1').hide();
							$('#terms1').removeAttr('required', true);
							$('#desc1').removeAttr('required', true); 
							}
							else if(val == "after")
							{
							$("#terms1").show();
							$('#desc1').show();
							$('#terms1').attr('required', true); 
							$('#desc1').attr('required', true); 
							}
							}
							}
							function getType(val)
							{
							if(val != null)
							{
							if(val == "flat")
							{
							$("#amountdiv").show();
							$("#maxdiv").show();
							$("#percentdiv").hide();
							$("#rewarddiv").hide();
							
							$('#flatdis').attr('required', true);
							$('#percentdis').removeAttr('required', true);
							$('#rewarddis').removeAttr('required', true);
							$('#maxdis').attr('required', true);
							
							}
							else if(val == "percent")
							{
							$("#amountdiv").hide();
							$("#rewarddiv").hide();
							$("#maxdiv").show();
							$("#percentdiv").show();
							
							$('#percentdis').attr('required', true);
							$('#flatdis').removeAttr('required', true);
							$('#rewarddis').removeAttr('required', true);
							$('#maxdis').attr('required', true);
							
							
							}else if(val == "reward")
							{
							$("#amountdiv").hide();
							$("#percentdiv").hide();
							$("#maxdiv").hide();
							$("#rewarddiv").show();
							
							$('#rewarddis').attr('required', true); 
							$('#percentdis').removeAttr('required', true);
							$('#flatdis').removeAttr('required', true);
							$('#maxdis').removeAttr('required', true);
							}
							}
							
							}
							
							function getComplementryType(val){
							if(val != null)
							{
							if(val == "coupon")
							{
							$("#coupon_code").show();
							$('#coupon-apply-type').hide();
							$('#code').attr('required', true);
							$('#apply_type').removeAttr('required', true); 
							}
							else if(val == "offer")
							{
							$("#coupon_code").hide();
							$('#coupon-apply-type').show();
							$('#apply_type').attr('required', true);
							$('#code').removeAttr('required', true); 
							}
							}
							}
							function getCouponType(val){
							if(val != null)
							{
							if(val == "Complementary discount coupons" || val == "Free shipping coupon" || val == "Free gift with purchase" || val=="Buy-one-get-one coupons")
							{
							$("#discount_type").hide();
							$("#amountdiv").hide();
							$("#percentdiv").hide();
							$("#rewarddiv").hide();
							$("#maxdiv").hide();
							
							
							$('#disType').removeAttr('required', true); 
							$('#rewarddis').removeAttr('required', true); 
							$('#percentdis').removeAttr('required', true);
							$('#flatdis').removeAttr('required', true);
							$('#maxdis').removeAttr('required', true);
							}
							else 
							{
							$("#discount_type").show();
							$("#amountdiv").show();
							$("#percentdiv").show();
							$("#rewarddiv").show();
							$("#maxdiv").show();
							}
							$('#title').val(val);
							}
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
							</script>
							<script>
							// Get the start and end date inputs
							var startDateInput = document.querySelector('input[name="startdate"]');
							var endDateInput = document.querySelector('input[name="enddate"]');
							var dateValidationMessage = document.getElementById('dateValidationMessage');
							
							// Add event listener to end date input
							endDateInput.addEventListener('input', function() {
							var startDate = new Date(startDateInput.value);
							var endDate = new Date(endDateInput.value);
							// Compare the dates
							if (endDate > startDate) {
							dateValidationMessage.textContent = "";
							} 
							else {
							
							dateValidationMessage.textContent = "End date must be greater than start date.";
							endDateInput.value='';
							}
							});
							</script>
							</body>
							
							</html>																																																																																																											