<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  />
		<style>
			.btn-toggle{
			border-radius: 0;
			border: 2px solid white;
			top: 10px;
			left: 10px;
			box-shadow: 0 0 2px #1f1515;
			color: white;
			padding: 1px 2px;
			font-size: 10px;
			margin: 0 5px;
			}
			.fa-minus{
			background-color: #df1940cc;
			}
			.fa-plus{
			background-color: #00B5B8;
			}
			.sub-heading{
			font-size:16px;
			}
			.step-trigger{
			background: unset !important;
			padding: 6px !important;
			}
			.form-control{
			height:30px;
			padding: 3px;
			}
			
			.col-form-label {
			padding-top: calc(0.75rem + 1px);
			padding-bottom: calc(0.5rem + 1px);
			margin-bottom: 0;
			font-size: inherit;
			line-height: 0.5;
			}
			
			.disable{
			pointer-events: none;
			opacity: 0.5;
			}
		</style>
	</head>
	<body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns" onload="disablePastDates()">
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
					$permission=json_decode($list->permission);
					$category=$permission->category;   
					$color=$permission->category;   
					$size=$permission->size;   
					$brand=$permission->brand;   
					$order=$permission->order;   
					$subscriptionplan=$permission->subscriptionplan;   
					$subscriber=$permission->subscriber;   
					$product=$permission->product;   
					$attribute=$permission->attribute;   
					$lookproduct=$permission->lookproduct;   
					$stock=$permission->stock;   
					$offer=$permission->offer;   
					$giftwrap=$permission->giftwrap;   
					$salemanagement=$permission->salemanagement;   
					$feedback=$permission->feedback;   
					$beautyconsultation=$permission->beautyconsultation;   
					$ecatlog=$permission->ecatlog;   
					$vendor=$permission->vendor;   
					$fashion_expert=$permission->fashionexpert;   
					$user=$permission->user;   
					$helpandsupport=$permission->helpandsupport;   
					$deliverycharge=$permission->deliverycharge;   
					$notification=$permission->notification;   
					$slider=$permission->slider;   
					$contentmanagement=$permission->contentmanagement;   
					$businesssettings=$permission->businesssettings;   
					$faqs=$permission->faqs;   
				?>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="addForm">
									<div class="row"> 
										<div class="col-sm-4">    
											<div class="card card-dashboard">    
												<div class="card-content collpase show">
													<div class="card-body py-1 table-responsive">
														<div class="form-group">
															<input type="hidden" name="id" value="<?=$list->id?>">
															<input type="hidden" class="form-control" name="password" id="password" value="<?=$list->password?>" placeholder="Enter Password" required>
															<input type="hidden" class="form-control" name="confirm_password" value="<?=$list->password?>" id="confirm_password" placeholder="Confirm Password">
															<label class="col-form-label">Name<span class="text-danger">*</span></label>
															<input type="text" class="form-control" style="text-transform:capitalize;" name="name" value="<?=$list->name?>" placeholder="Name" required >
															<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
														</div>
														<div class="form-group">
															<label class="col-form-label">Mobile <span class="text-danger">(10 Digit Only)*</span></label>
															<input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter Mobile Number" value="<?=$list->mobile?>" maxlength="10" data-parsley-pattern="^[6789]\d{9}$" data-parsley-error-message="Please enter a valid 10 digit mobile number." required>
															<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
														</div>
														<div class="form-group">
															<label class="col-form-label">Email <span class="text-danger">*</span></label>
															<input type="email" class="form-control " name="email" value="<?=$list->email?>" readonly placeholder="Email No." required >
															<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
														</div>
														<div class="form-group">
															<label for="exampleFormControlInput1" class="form-label font-w500">Role Name<span class="text-danger">*</span></label>
															<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Role Name" value="<?=$list->role?>" name="rolename" required>
															<?php echo form_error("rolename", "<p class='text-danger'>", "</p>"); ?>
														</div>
														<div class="form-group">
															<label class="col-form-label">Expiry Date <span class="text-danger">*</span></label> 
															<input type="date" class="form-control " name="date" id="dateInput" placeholder="Chhose Date" value="<?=$list->exp_date?>" required >
															<?php echo form_error("date", "<p class='text-danger' >", "</p>"); ?>
														</div>
														<div class="form-group">
															<label class="col-form-label">Profile Picture<span class="text-danger">(Optional)</span></label> 
															<input type="file" class="form-control dropify"  name="icon" placeholder=""  data-default-height="100"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="card card-dashboard">    
												<div class="card-content collpase show">
													<div class="card-body py-1 px-0 table-responsive">
														<div class="offcanvas-body">
															<div class="container-fluid p-0">
																<div class="col-xl-12 mb-1">
																	
																</div>	
																<div class="table-responsive">
																	<table id="role" class="table role-tble">
																		<thead>
																			<tr>
																				<th>Entity</th>
																				<th class="text-end">Add</th>
																				<th class="text-end">Approval</th>
																				<th class="text-end">Edit</th>
																				<th class="text-end">Delete</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Categories Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox4" name="category_add" <?php if($category->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox4">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox51" name="category_approval"  <?php if($category->approval){echo 'checked';}?>> 
																						<label class="form-check-label" for="customCheckBox51">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox5" name="category_edit" <?php if($category->edit){echo 'checked';}?> >
																						<label class="form-check-label" for="customCheckBox5">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger"> 
																						<input type="checkbox" class="form-check-input"  id="customCheckBox6" name="category_delete" <?php if($category->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox6">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Color Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox7" name="color_add" <?php if($color->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox7">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox71" name="color_approval" disabled <?php if($color->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox71">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox8" name="color_edit" <?php if($color->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox8">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input" id="customCheckBox9" name="color_delete" <?php if($color->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox9">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Size Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox10" name="size_add" <?php if($size->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox10">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox10-1" name="size_approval" disabled <?php if($size->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox10-1">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox11" name="size_edit" <?php if($size->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox11">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input" id="customCheckBox12" name="size_delete" <?php if($size->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox12">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Brand Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox131" name="brand_add" <?php if($brand->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox131">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox1325" name="brand_approval" disabled <?php if($brand->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox1325">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox132" name="brand_edit" <?php if($brand->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox132">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox13" name="brand_delete" <?php if($brand->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox13">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Orders Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox14" name="order_add" disabled <?php if($order->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox14">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox369" name="order_approval" <?php if($order->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox369">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox15" name="order_edit" disabled <?php if($order->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox15">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input" id="customCheckBox16" name="order_delete" disabled <?php if($order->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox16">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Subscription Plan Management	</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox17" name="subscriptionplan_add" <?php if($subscriptionplan->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox17">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox6582" disabled name="subscriptionplan_approval" <?php if($subscriptionplan->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox6582">Approval</label> 
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox18" name="subscriptionplan_edit" <?php if($subscriptionplan->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox18">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox19" name="subscriptionplan_delete" <?php if($subscriptionplan->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox19">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Subscriber Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox20" name="subscriber_add" <?php if($subscriber->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox20">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox01" disabled name="subscriber_approval" <?php if($subscriber->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox01">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox21" name="subscriber_edit" <?php if($subscriber->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox21">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox22" name="subscriber_delete" <?php if($subscriber->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox22">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Product Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox23" name="product_add" <?php if($product->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox23">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox3651" name="product_approval" <?php if($product->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox3651">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox24" name="product_edit" <?php if($product->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox24">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox25" name="product_delete" <?php if($product->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox25">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Attribute Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox26" name="attribute_add" <?php if($attribute->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox26">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox9625" disabled name="attribute_approval" <?php if($attribute->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox9625">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox27" name="attribute_edit" <?php if($attribute->edit){echo 'checked';}?>> 
																						<label class="form-check-label" for="customCheckBox27">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox28" name="attribute_delete" <?php if($attribute->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox28">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Look Product Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox29" name="lookproduct_add" <?php if($lookproduct->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox29">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox511" name="lookproduct_approval" <?php if($lookproduct->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox511">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox30" name="lookproduct_edit" <?php if($lookproduct->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox30">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input" id="customCheckBox31" name="lookproduct_delete" <?php if($lookproduct->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox31">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Stock Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox35" name="stock_add" <?php if($stock->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox35">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox2544" disabled name="stock_approval" <?php if($stock->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox2544">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox36" name="stock_edit" <?php if($stock->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox36">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox37" name="stock_delete" <?php if($stock->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox37">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Offer Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="offer_add" <?php if($offer->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox3628" name="offer_approval" <?php if($offer->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox3628">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="offer_edit" <?php if($offer->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="offer_delete" <?php if($offer->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Gift Wrap Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="giftwrap_add" <?php if($giftwrap->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxgr" name="giftwrap_approval" <?php if($giftwrap->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxgr">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="giftwrap_edit" <?php if($giftwrap->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="giftwrap_delete" <?php if($giftwrap->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Beauty Consultation</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="beautyconsultation_add" <?php if($beautyconsultation->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxbc" disabled name="beautyconsultation_approval" <?php if($beautyconsultation->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxbc" >Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="beautyconsultation_edit" <?php if($beautyconsultation->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="beautyconsultation_delete" <?php if($beautyconsultation->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Feedback Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="feedback_add"  <?php if($feedback->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxfm" disabled name="feedback_approval" <?php if($feedback->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxfm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="feedback_edit" <?php if($feedback->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="feedback_delete" <?php if($feedback->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Sale Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="salemanagement_add" <?php if($salemanagement->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxsm" name="salemanagement_approval" <?php if($salemanagement->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxsm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="salemanagement_edit" <?php if($salemanagement->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="salemanagement_delete" <?php if($salemanagement->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>E-Catlog Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="ecatlog_add" <?php if($ecatlog->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxec" disabled name="ecatlog_approval" <?php if($ecatlog->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxec">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="ecatlog_edit" <?php if($ecatlog->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="ecatlog_delete" <?php if($ecatlog->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Vendor Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="vendor_add" <?php if($vendor->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxvm" name="vendor_approval" <?php if($vendor->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxvm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="vendor_edit" <?php if($vendor->edit){echo 'checked';}?>> 
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="vendor_delete" <?php if($vendor->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>User Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="user_add" <?php if($user->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxum" name="user_approval" <?php if($user->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxum">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="user_edit" <?php if($user->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="user_delete" <?php if($user->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Fashion Expert</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="expert_add" <?php if($fashion_expert->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxum" name="expert_approval" <?php if($fashion_expert->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxum">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="expert_edit" <?php if($fashion_expert->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="expert_delete" <?php if($fashion_expert->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Notification Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="notification_add" <?php if($notification->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxnm" disabled name="notification_approval" <?php if($notification->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxnm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="notification_edit" <?php if($notification->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="notification_delete" <?php if($notification->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Help & Support</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="helpandsupport_add" <?php if($helpandsupport->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxdcm"  name="helpandsupport_approval" <?php if($helpandsupport->approval){echo 'checked';}?>> 
																						<label class="form-check-label" for="customCheckBoxdcm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="helpandsupport_edit" <?php if($helpandsupport->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="helpandsupport_delete" <?php if($helpandsupport->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Delivery Charge Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="deliverycharge_add" <?php if($deliverycharge->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxdcm" disabled name="deliverycharge_approval" <?php if($deliverycharge->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxdcm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="deliverycharge_edit" <?php if($deliverycharge->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="deliverycharge_delete" <?php if($deliverycharge->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Slider Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="slider_add" <?php if($slider->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxfm" disabled name="slider_approval" <?php if($slider->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxfm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="slider_edit" <?php if($slider->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="slider_delete" <?php if($slider->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Content Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="contentmanagement_add" <?php if($contentmanagement->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxcmm" disabled name="contentmanagement_approval" <?php if($contentmanagement->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxcmm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="contentmanagement_edit" <?php if($contentmanagement->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="contentmanagement_delete" <?php if($contentmanagement->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>Business Settings Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="businesssettings_add" <?php if($businesssettings->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxbsm" disabled name="businesssettings_approval" <?php if($businesssettings->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxbsm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="businesssettings_edit" <?php if($businesssettings->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="businesssettings_delete" <?php if($businesssettings->delete){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>FAQ's Management</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox38" name="faqs_add" <?php if($faqs->add){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox38">Add</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input"  id="customCheckBoxfaqm" disabled name="faqs_approval" <?php if($faqs->approval){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBoxfaqm">Approval</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-warning">
																						<input type="checkbox" class="form-check-input" id="customCheckBox39" name="faqs_edit" <?php if($faqs->edit){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox39">Edit</label>
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-danger">
																						<input type="checkbox" class="form-check-input"  id="customCheckBox40" name="faqs_delete" <?php if($faqs->delete){echo 'checked';}?>> 
																						<label class="form-check-label" for="customCheckBox40">Delete</label>
																					</div>
																				</td> 
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="mt-2 mx-2">
																	<button type="reset" class="btn btn-light btn-sm" style="padding: 8px;">Reset</a>
																	<button type="submit" class="mx-1 btn btn-primary btn-sm" style="padding: 8px;">Update</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
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

<?php require APPPATH . 'views/Auth/Footer.php'; ?>
<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
<script>
	// Function to disable past dates
	function disablePastDates() {
		const today = new Date().toISOString().split('T')[0];
		document.getElementById('dateInput').min = today;
	}  
</script>
</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				