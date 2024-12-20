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
			color: #00B5B8!important;
			font-size:16px;
			}
			.step-trigger{
			background: unset !important;
			padding: 6px !important;
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
										<a class="btn btn-primary" href="<?= base_url($this->data->controller . '/' . $this->data->method . ''); ?>">
										<i class="fa fa-circle-o"></i> Manage <?= $this->data->key; ?></a>
										<a class="btn btn-primary" href="javascript:void();">
										&nbsp <span id="catbread">-</span>//<span id="subcatbread">- </span>//<span id="cosubcatbread">- </span>//<span id="brandbread">- </span></a>
									</div>
									<div class="card-content collpase show">
										<div class="card-body py-1 table-responsive">
											<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update/'.$this->uri->segment(4)); ?>" method="post" enctype="multipart/form-data" id="addForm">
												<div class="bs-stepper linear">
													<div class="bs-stepper-header" role="tablist">
														<div class="step active" data-target="#basic-part">
															<button type="button" class="step-trigger" role="tab" aria-controls="basic-part" id="basic-part-trigger" aria-selected="true">
																<span class="bs-stepper-circle">1</span>
																<span class="bs-stepper-label">Basic Details</span>
															</button>
														</div>
														<div class="line"></div>
														<div class="step" data-target="#measurement-part">
															<button type="button" class="step-trigger" role="tab" aria-controls="measurement-part" id="measurement-part-trigger" aria-selected="true" >
																<span class="bs-stepper-circle">2</span>
																<span class="bs-stepper-label">Stock & Measurement Details</span>
															</button>  
														</div>
														<div class="line"></div>
														<div class="step" data-target="#price-part">
															<button type="button" class="step-trigger" role="tab" aria-controls="price-part" id="prcie-part-trigger" aria-selected="true" >
																<span class="bs-stepper-circle">3</span>
																<span class="bs-stepper-label">Price Details</span>
															</button>  
														</div>
														<div class="line"></div>
														<div class="step" data-target="#terms-part">
															<button type="button" class="step-trigger" role="tab" aria-controls="terms-part" id="terms-part-trigger" aria-selected="true" >
																<span class="bs-stepper-circle">4</span>
																<span class="bs-stepper-label">Terms & Conditions</span>
															</button>  
														</div>
														<div class="line"></div>
														<div class="step" data-target="#other-part">
															<button type="button" class="step-trigger" role="tab" aria-controls="other-part" id="other-part-trigger" aria-selected="false" disabled="disabled">
																<span class="bs-stepper-circle">5</span>
																<span class="bs-stepper-label">Other Details</span>
															</button>  
														</div>
													</div>
													<div class="bs-stepper-content p-0">
														<div id="basic-part"  class="content active dstepper-block m-0" role="tabpanel" aria-labelledby="basic-part-trigger">
															<hr>
															<div><h6  class="sub-heading"onclick="$('#basic-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Basic Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																<div class="row" id="basic-info" style="display:flex;">
																	<input type="hidden" name="id" value="<?=$list->id?>" required>
																	<!-- <div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Upload For Vendor">Upload For Vendor<span class="text-danger"> *</span></label>
																			<select type="text" name="vendorupload" class="form-control" >
																				<option selected disabled>select</option>
																				<option value="NA" <?php if($list->vendor_id=="NA"){echo "selected";}?>>Slick Pattern</option> 
																				<?php
																					foreach($vendorlist as $vendor)
																					{
																					?>
																					<option value="<?= $vendor->id?>" <?php if($list->vendor_id==$vendor->id){echo "selected";}?>><?= $vendor->name?> &nbsp  -- &nbsp <?= $vendor->shop_name?></option>
																					<?php
																					}
																				?>
																			</select>
																		</div>
																	</div> -->
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Name">Product Name<span class="text-danger"> *</span></label>
																			<input type="text" name="name" value="<?php if(!empty($list->name)){echo $list->name;}?>" placeholder="Product Name" class="form-control" required>
																		</div>
																		</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Title">Product Title<span class="text-danger"> *</span></label>
																			<input type="text" name="title" value="<?php if(!empty($list->title)){echo $list->title;}?>" placeholder="Product Title" class="form-control" required>
																		</div>
																		</div>
																
																	<div class="col-sm-4">
																		
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Select Product Category Eg. Jewellery">Product Category<span class="text-danger"> *</span></label>
																			<select name="category" required class="form-control pcat " id="cat" title="Select a Product Category" onchange="change_subcat(this.value);breadcrumb();updateProductCode(this.value,'C','<?= $list->product_code?>','<?= $list->id?>');" data-placeholder="Choose a Category...">
																				<option selected disabled>--- Select ---</option>
																				<?php
																					foreach ($categorylist as $cat)
																					{
																					?>
																					<option class="optioncat<?= $cat->id ?>" value="<?= $cat->id ?>" <?php if($list->category==$cat->id){echo "selected";}?>><?= ucfirst($cat->name) ?></option>
																					<?php
																					}
																				?>
																			</select>
																			<span id="pcat_error" style="color: #fd3550;"></span>
																		</div>
																		</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Select Product Sub-Category Eg. Neckless Etc.">Product Subcategory<span class="text-danger"> *</span></label>
																			<!-- <select name="subcategory" class="form-control " id="subcat" onchange="breadcrumb();change_attribute(this.value);change_cosub(this.value);generateSkuId('INDIVIDUAL', this.value);" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory..."> -->
																			<select name="subcategory" class="form-control " id="subcat" onchange="breadcrumb();change_attribute(this.value);updateSkuId('INDIVIDUAL', this.value,'<?= $list->skuid?>','<?= $list->id?>');" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory...">
																				<?php $subcat=$this->db->get_where('sub_category',['category_id'=>$list->category])->result();
																					if(!empty($subcat)){
																						foreach($subcat as $each1){ 
																						?>
																						<option class="optionsubcat<?= $each1->id ?>" value="<?= $each1->id ?>" <?php if($list->sub_category==$each1->id){echo "selected";}?>><?= ucfirst($each1->name) ?></option>
																					<?php } }?>
																			</select>
																		</div>
																		<!-- <div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Select Product Co-subcategory Eg. Neckless Etc.">Product Co-subcategory<span class="text-danger"> *</span></label>
																			<select name="cosubcategory" class="form-control " id="cosubcat" onchange="breadcrumb();change_attribute(this.value)" title="Select a Product Co-subcategory" data-placeholder="Choose a Co-subcategory...">
																				<?php $cosubcat=$this->db->get_where('co_subcategory',['category_id'=>$list->category,'subcategory_id'=>$list->sub_category])->result();
																					if(!empty($cosubcat)){
																						foreach($cosubcat as $each2){ 
																						?>
																						<option class="optioncosubcat<?= $each2->id ?>" value="<?= $each2->id ?>" <?php if($list->co_subcategory==$each1->id){echo "selected";}?>><?= ucfirst($each2->name) ?></option>
																					<?php } }?>
																			</select>
																		</div>  -->
																		<!-- <div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Select Product Brand Eg. Tanishq">Product Brand<span class="text-danger"> *</span></label>
																			<select name="brand" class="form-control  pb" id="pb" title="Select a Product Brand" data-placeholder="Choose a Brand..." onchange="change_subbrand(this.value);breadcrumb()">
																				<option selected disabled>--- Select ---</option>
																				<?php
																					foreach ($brandlist as $brand)
																					{
																					?>
																					<option class="optionbrand<?= $brand->id ?>" value="<?= $brand->id ?>" <?php if($list->brand_id==$brand->id ){echo "selected";}?>><?= ucfirst($brand->name) ?></option>
																					<?php
																					}
																				?>
																			</select>
																		</div>
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Sub-Brand">Product Subbrand<span class="text-danger"> </span></label>
																			<select name="subbrand" class="form-control " id="subbrand" title="Select a Product Subbrand" data-placeholder="Choose a Subbrand...">
																				<?php $sub_brand=$this->db->get_where('sub_brand',['brand_id'=>$list->brand_id])->result();
																					if(!empty($sub_brand)){
																						foreach($sub_brand as $each3){ 
																						?>
																						<option class="optionsubbrand<?= $each3->id ?>" value="<?= $each3->id ?>" <?php if($list->subbrand_id==$each3->id){echo "selected";}?>><?= ucfirst($each3->name) ?></option>
																					<?php } }?>
																			</select>
																		</div> -->
																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Code Must Be Unique">Product Code<span class="text-danger">  *</span></label>
																			<input type="text" value="<?php if(!empty($list->product_code)){echo $list->product_code;}?>" name="product_code" id="product_code" placeholder="Product Code" class="form-control" required>
																		</div>
																		</div>
																	<div class="col-sm-4">
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product SKU Id">SKUID<span class="text-danger">* </span></label>
																			<input type="text"  id="skuid" value="<?php if(!empty($list->skuid)){echo $list->skuid;}?>" name="skuid" required title="Enter SKUID" placeholder="Enter SKUID" class="form-control">
																			<!-- <span id="skuid" style="color: #fd3550;"></span>    -->
																		</div>
																	</div>
																	<!-- <div class="col-sm-4">
																		<div class="form-group">
																			<div class="form-group">
																				<label  data-toggle="tooltip" data-placement="top" >Size chart Image<span class="text-danger"> (Optional)</span></label>
																				<input type="file" data-height="100"  data-default-file="<?php if(!empty($list->sizechart_image)){echo base_url('uploads/' . $this->data->folder . '/' . $list->sizechart_image. '');} ?>" name="sizechart"  class="form-control dropify">
																			</div>
																		</div>
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Size Chart ">Size Chart<span class="text-danger"> </span></label>
																			<select required name="sizechart_type"  onchange="change_sizetype(this.value);" placeholder="Enter Size"  class="form-control" > 
																				<option value="NA" <?php if(!empty($list->sizechart_type) AND ($list->sizechart_type=='NA')){echo "selected";}?>>N/A</option> 
																				<?php
																					$sizelist=$this->db->get('tbl_size')->result();   
																					foreach($sizelist as $each)  
																					{
																					?>
																					<option  value="<?= $each->id?>" <?php if(!empty($list->sizechart_type) AND $list->sizechart_type==$each->id){echo "selected";}?>><?= $each->size_type?></option>
																					<?php
																					}
																				?>
																			</select>
																			<div id="sizechart" style="margin: 5px 0; display:none;">  
																				<span>Custom Size Chart</span>
																				<input type="checkbox" name="custom_sizechart" value="true">
																			</div>
																		</div>
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Is This Product Currently Available">Avaliablity<span class="text-danger"> *</span></label>
																			<select name="avaliablity" required data-placeholder="Choose an Avaliability..." title="Select Avaliability  (Yes/No)" class="form-control pa " id="pa">
																				<option value="true" <?php if($list->availability=='true'){echo "selected";}?>>Yes</option>
																				<option value="false" <?php if($list->availability=='false'){echo "selected";}?>>No</option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label data-toggle="tooltip" data-placement="top" title="Product Lauching Date Time">Launch Time<span class="text-danger"> ( Optional )</span></label>
																			<input type="datetime-local" value="<?php if(!empty($list->launch_time)){echo $list->launch_time;}?>" name="launchtime" class="form-control" >
																			<span id="launchtime" style="color: #fd3550;"></span>
																		</div>
																	</div> -->
																</div>
																<!-- dynamic size chart table load start-->
																<div class="row mt-0" id="sizechart_table"></div><hr>  
																<!-- dynamic size chart table load end--> 
																<div><h6  class="sub-heading" onclick="$('#long-short-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Product Short & Long Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																	<div class="row" id="long-short-info" style="display:flex;">
																		<div class="col-sm-6">
																			<div class="form-group">
																				<label>Short Description (Maximum 100 words)<span class="text-danger"> *</span></label>
																				<textarea class="form-control short summernote" style="border:1px solid #aaaaaa;" id="s" required name="shortdescription"><?php if(!empty($list->short_desc)){echo $list->short_desc;}?></textarea>
																			</div>
																		</div>
																		<div class="col-sm-6 ">
																			<div class="form-group">
																				<label>Long Description</label>
																				<textarea id="summernoteEditor" name="longdescription" class="form-control short summernote"><?php if(!empty($list->long_desc)){echo $list->long_desc;}?></textarea>
																			</div>
																		</div>
																	</div>
																	<hr>
																	<button type="button" class="btn btn-primary" onclick="validateForm('basic-part')">Next</button>
																</div>
																<div id="measurement-part" class="content  m-0" role="tabpanel" aria-labelledby="measurement-part-trigger">
																	<hr><div><h6  class="sub-heading" onclick="$('#stock-details').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Stock Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6></div>
																		<div class="row" id="stock-details"> 
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label data-toggle="tooltip" data-placement="top" title="Total Available Stock Quantity">Stock Quantity <span class="text-danger">(Stock=Sum of total varinant qty)*</span></label>
																					<input type="number" required name="stock" title="Stock Quantity" value="<?php if(!empty($list->stock)){echo $list->stock;}?>" required placeholder="Stock Quantity" class="form-control" value="0">
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label data-toggle="tooltip" data-placement="top" title="Maximum Purchase On Single Order">Maximum Selling Quantity <span class="text-danger">*</span></label>
																					<input type="number" name="maxqty" required placeholder="Enter Maximum Selling Quantity" value="<?php if(!empty($list->max_qty)){echo $list->max_qty;}?>" class="form-control" value="10">
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label data-toggle="tooltip" data-placement="top" title="Minimum Stock Alert Value">Stock Alert Quantity <span class="text-danger">*</span></label>
																					<input type="number" required name="alertqty" title="Stock Alert Quantity " placeholder="Stock Alert Quantity" value="<?php if(!empty($list->alert_qty)){echo $list->alert_qty;}?>" class="form-control">
																					<span id="alertqty" style="color: #fd3550;"></span>
																				</div>						
																			</div>
																		</div>
																		<hr><div><h6  class="sub-heading" onclick="$('#unit-details').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Unit & Measurement Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6></div>
																			<div class="row" id="unit-details" style="display:flex;">
																				<div class="col-sm-4">
																					<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Unit Eg. Kg , Mg , Ml">Unit<span class="text-danger"> *</span></label>
																						<input list="units"  value="<?php if(!empty($list->unit)){echo $list->unit;}?>" class="form-control" placeholder="Product Unit" name="unit" id="e" required>
																						<datalist id="units">
																							<option value="gm"></option>
																							<option value="kg"></option>
																						</datalist>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Weight Acoording To Unit">Weight<span class="text-danger"> *</span></label>
																						<input type="text" value="<?php if(!empty($list->weight)){echo $list->weight;}?>" required name="weight" title="Enter Weight" placeholder="Product Weight" class="form-control phsn" id="Weight">
																						<span id="phsn_error" style="color: #fd3550;"></span>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Length">Length<span class="text-danger"> *</span></label>
																						<input type="text" value="<?php if(!empty($list->length)){echo $list->length;}?>" required name="length" title="Length " placeholder="Length" class="form-control text-capitalize">
																						<span id="rewardpoint" style="color: #fd3550;"></span>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Width">Width<span class="text-danger"> *</span></label>
																						<input type="text" value="<?php if(!empty($list->width)){echo $list->width;}?>" required name="width" title="Width " placeholder="Width"  class="form-control text-capitalize">
																						<span id="width" style="color: #fd3550;"></span>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Height">Height<span class="text-danger"> *</span></label>
																						<input type="text" value="<?php if(!empty($list->height)){echo $list->height;}?>" required name="height" title="Height " placeholder="Height" class="form-control text-capitalize">
																						<span id="height" style="color: #fd3550;"></span>
																					</div>
																				</div>
																			</div>
																			<hr>
																			<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('measurement-part')">Next</button>
																		</div>
																		<div id="price-part" class="content  m-0" role="tabpanel" aria-labelledby="price-part-trigger">
																			<hr>
																			<div><h6  class="sub-heading" onclick="$('#price-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Pricing Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																				<div class="row" id="price-info" style="display:flex;">
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Purchasing Price">Purchasing Price<span class="text-danger"> *</span></label>
																							<input type="number" value="<?php if(!empty($list->purchase_price)){echo $list->purchase_price;}?>" name="purchase_price" title="Enter Purchasing Price" required placeholder="Purchasing Price" class="form-control" id="purchaseprice" oninput="setAmount()">
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="CGST On Product">CGST(%)<span class="text-danger"> *</span></label>
																							<input type="number" name="cgst" title="Enter GST" value="<?php if(!empty($list->cgst)){echo $list->cgst;}?>" required="" placeholder="Product GST" class="form-control pgst" id="gst" oninput="setAmount()">
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="SGST On Product">SGST(%)<span class="text-danger"> *</span></label>
																							<input type="number" name="sgst" title="Enter GST" value="<?php if(!empty($list->sgst)){echo $list->sgst;}?>" required="" placeholder="Product GST" class="form-control pgst" id="sgst" oninput="setAmount(),handleChange(this)">
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Total GST Amount">GST(&#8377;)<span class="text-danger"> *</span></label>
																							<input type="number" name="gst" title="Enter GST" placeholder="Product GST" value="<?php if(!empty($list->gst)){echo $list->gst;}?>" class="form-control pgst1" id="gst1" readonly>
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Total Base Price">Base Price(&#8377;)<span class="text-danger"> * </span></label>
																							<input type="number" name="base_price" title="Base Price" placeholder="Product Base Price" value="<?php if(!empty($list->base_price)){echo $list->base_price;}?>" class="form-control base_price" id="base_price" readonly>
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Total Expected Profit In Percentage">Expected Profit(%)<span class="text-danger"> *</span></label>
																							<input type="number" name="expected_profit" title="Expected Profit For This Product" placeholder="Expected Profit For This Product" value="<?php if(!empty($list->expected_profit)){echo $list->expected_profit;}?>" class="form-control expected_profit"  id="expected_profit" oninput="setAmount()">
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Minimum Selling Price">Minimum Selling Price(&#8377;)<span class="text-danger"> * </span></label>
																							<input type="number" name="min_sell_price" value="<?php if(!empty($list->min_sell_price)){echo $list->min_sell_price;}?>" title="Product Minimum Selling Price" placeholder="Product Minimum Selling Price" class="form-control minimum_selling_price" id="minimum_selling_price" readonly>
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Product MRP">MRP(&#8377;)<span class="text-danger"> *</span></label>
																							<input type="number" name="mrp" title="Enter MRP" required="" value="<?php if(!empty($list->mrp)){echo $list->mrp;}?>" placeholder="Product MRP" class="form-control pmrp" id="mrp" oninput="setAmount()">
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Product MRP">Regular Selling Price(&#8377;)<span class="text-danger"> *</span></label>
																							<input type="number" name="reg_sell_price" readonly title="Enter Regular Selling Price" value="<?php if(!empty($list->reg_sell_price)){echo $list->reg_sell_price;}?>" required="" placeholder="Product Regular Selling Price" class="form-control pmrp" id="regular_selling_price">
																						</div>
																					</div>
																					<!--<div class="col-sm-4">
																						<div class="form-group">
																						<label data-toggle="tooltip" data-placement="top" title="Product Selling Price ">Offer Price(&#8377;)<span class="text-danger"> *</span></label>
																						<input type="number" name="price" title="Enter Price" placeholder="Product Price" class="form-control pprice" id="c" required oninput="setAmount()">
																						</div>
																					</div>-->
																					<div class="col-sm-4">
																						<div class="form-group">
																							<label data-toggle="tooltip" data-placement="top" title="Product Discount">Margin(&#8377;)<span class="text-danger">  *</span></label>
																							<input type="text" name="margin" title="Enter Discount" required placeholder="Margin" class="form-control pd" value="<?php if(!empty($list->margin)){echo $list->margin;}?>" id="margin" readonly>
																						</div>
																					</div>
																				</div>
																				<hr>
																				<div><h6  class="sub-heading" onclick="$('#prebooking-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Prebooking & Royal User Information&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																					<hr><div class="row" id="prebooking-info" style="display:flex;">
																						<div class="col-sm-3">
																							<div class="form-group" >
																								<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Pre Booking ?">Pre Booking Available<span class="text-danger"> *</span></label>
																								<select class="form-control" id="prebook_avl" name="prebook_avl"  required onchange="prebook_status(this.value)">
																									<option value="true" <?php if($list->prebook_status=='true'){echo "selected";}?>>Yes</option>
																									<option value="false" <?php if($list->prebook_status=='false'){echo "selected";}?>>No</option>
																								</select>
																							</div>
																						</div>
																						<div class="col-sm-3">
																							<div class="form-group" id="prebook_div">
																								<label data-toggle="tooltip" data-placement="top" title="Product Pre Booking Amount">Pre Booking Amount<span class="text-danger"> *</span></label>
																								<input class="form-control" type="number" value="<?php if(!empty($list->prebook_amt)){echo $list->prebook_amt;}?>" name="prebook_amt"   placeholder="Pre Booking Amount" >
																							</div>
																						</div>
																						<div class="col-sm-3">
																							<div class="form-group" id="prebook_div">
																								<label data-toggle="tooltip" data-placement="top" title="Product Amount For Royal Members">Product Amount For Royal Members<span class="text-danger"> *</span></label>
																								<input class="form-control" type="number" name="royal_amt"  value="<?php if(!empty($list->royal_amt)){echo $list->royal_amt;}?>" placeholder="Royal Amount" >
																							</div>
																						</div>
																						<div class="col-sm-3">
																							<div class="form-group" id="prebook_div">
																								<label data-toggle="tooltip" data-placement="top" title="Royal Club Cash">Royal Club Cash Upto<span class="text-danger"> *</span></label>
																								<input class="form-control" type="number" value="<?php if(!empty($list->royal_clubcash)){echo $list->royal_clubcash;}?>" name="royal_clubcash"   placeholder="Royal club cash upto" >
																							</div>
																						</div>
																					</div>
																					<hr>
																					<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('price-part')">Next</button>
																				</div>
																				<div id="terms-part" class="content  m-0" role="tabpanel" aria-labelledby="terms-part-trigger">
																					<hr><div><h6 class="sub-heading" onclick="$('#terms-conditions-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Cancel,Refund,Excahnge & SLA Information&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																						<div class="row" id="terms-conditions-info" style="display:flex;">
																							<div class="col-sm-3">
																								<div class="form-group">
																									<label data-toggle="tooltip" data-placement="top" title="Is This Product Is Available For Cancellation ?">Cancel Status<span class="text-danger"> *</span></label>
																									<select class="form-control" id="cancel" name="cancel" required onchange="cancel_status(this.value)">
																										<option value="true" <?php if($list->cancel_status=='true'){echo "selected";}?>>Yes</option>
																										<option value="false" <?php if($list->cancel_status=='false'){echo "selected";}?>>No</option>
																									</select>
																								</div>
																							</div>
																							<div class="col-sm-3">
																								<div class="form-group" >
																									<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Return And Refund ">Return & Refund Status<span class="text-danger"> *</span></label>
																									<select class="form-control" id="return_refund" name="return_refund"  required onchange="return_status(this.value)">
																										<option value="true" <?php if($list->refund_status=='true'){echo "selected";}?>>Yes</option>
																										<option value="false" <?php if($list->refund_status=='false'){echo "selected";}?>>No</option>
																									</select>
																								</div>
																							</div>
																							<div class="col-sm-3">
																								<div class="form-group" >
																									<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Exchange">Exchange Status<span class="text-danger"> *</span></label>
																									<select class="form-control" id="exchange_avl" name="exchange_avl"  required onchange="exchange_status(this.value)">
																										<option value="true" <?php if($list->exchange_status=='true'){echo "selected";}?>>Yes</option>
																										<option value="false" <?php if($list->exchange_status=='false'){echo "selected";}?>>No</option>
																									</select>
																								</div>
																							</div>
																							<div class="col-sm-3">
																								<div class="form-group">
																									<label data-toggle="tooltip" data-placement="top" title="Time required to keep the product ready for dispatch.">Procurement SLA <span class="text-danger"> (In Days)*</span></label>
																									<input type="number" value="<?php if(!empty($list->procurement_sla)){echo $list->procurement_sla;}?>" required name="procurementsla" title="Procurement SLA In Days " placeholder="Procurement SLA In Days" class="form-control">
																									<span id="procurementsla" style="color: #fd3550;"></span>
																								</div>
																							</div>
																						</div><hr>
																						<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('terms-part')">Next</button>
																					</div>
																					<div id="other-part" class="content m-0" role="tabpanel" aria-labelledby="other-part-trigger">
																						<hr><div><h6  class="sub-heading" onclick="$('#additional-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Additional Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																							<div class="row" id="additional-info" style="display:flex;">
																								<div class="col-sm-4">
																									
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Product SEO Keywords">SEO Keywords<span class="text-danger"> ( Seprated With Comma , ) (Optional) </span></label>
																										<input type="text" value="<?php if(!empty($list->seo_keywrod)){echo $list->seo_keyword;}?>" name="seokeyword" title="SEO Keywords " placeholder="SEO Keywords" class="form-control">
																										<span id="seokeyword" style="color: #fd3550;"></span>
																									</div>
																									
																								</div>
																								<div class="col-sm-4">
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Product Additional Url (Single Word Only)">Additional Url<span class="text-danger"> (Optional)</span></label>
																										<input type="text" value="<?php if(!empty($list->add_url)){echo $list->add_url;}?>" name="additionalurl" title="Additional Url" placeholder="Additional Url" class="form-control">
																										<span id="additionalurl" style="color: #fd3550;"></span>
																									</div>
																								</div>
																								<div class="col-sm-4">
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Product Bar Code">Bar Code<span class="text-danger">* </span></label>
																										<input type="number" value="<?php if(!empty($list->bar_code)){echo $list->bar_code;}?>" name="barcode" required title="Bar Code" placeholder="Bar Code" class="form-control">
																										<span id="barcode" style="color: #fd3550;"></span>
																									</div>
																								</div>
																								<div class="col-sm-4">
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Product Meta Tag Description">Meta Description<span class="text-danger"> (Optional)</span></label>
																										<input type="text" value="<?php if(!empty($list->meta_desc)){echo $list->meta_desc;}?>" name="metadescription" title="Meta Description " placeholder="Meta Description" class="form-control">
																										<span id="metadescription" style="color: #fd3550;"></span>
																									</div>
																								</div>
																								<div class="col-sm-4">
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Product HSN No.">HSN<span class="text-danger"> *</span></label>
																										<input type="number" value="<?php if(!empty($list->hsn)){echo $list->hsn;}?>" name="hsn" title="Enter HSN" placeholder="Product HSN" class="form-control phsn" id="hsn">
																									</div>
																								</div>
																								<div class="col-sm-4">
																									<div class="form-group">
																										<label data-toggle="tooltip" data-placement="top" title="Talk To Fashion Expert Link">Fashion Expert Link<span class="text-danger"> ( Optional )</span></label>
																										<input type="text" value="<?php if(!empty($list->expertlink)){echo $list->expertlink;}?>" name="expertlink" class="form-control" >
																										<span id="expertlink" style="color: #fd3550;"></span>
																									</div>
																								</div>
																							</div>
																							<div class="row attribute">
																								<?php $product_attr = $this->db->get_where('tbl_attribute', array('subcategory' => $list->co_subcategory,'attribute_type'=>'product_attr'))->result(); ?>
																								<?php if(!empty($product_attr)){ ?> 
																									<div class="col-sm-12">
																										<div><h4 style="font-weight:600;" class="text-danger">Product Details</h4></div>
																										<div class="row">
																											<?php foreach($product_attr as $attribute){ ?>
																												<div class="col-sm-3">
																													<div class="form-group">
																														<label for="input-2"><?= $attribute->attribute?><span class="text-danger">(Optional)</span></label>
																														<select  name="productattr[]"  class="form-control form-control" required>
																															<option disabled>select</option>
																															<?php
																																$insertedAttr=explode(",",$list->product_details);
																																$attr_value=explode(',',$attribute->attribute_value); 
																																if(!empty($attr_value)){
																																	foreach($attr_value as $each){
																																		$attr=$attribute->attribute.':'.$each;
																																	?>
																																	<option value="<?php echo $attribute->attribute.':'.$each; ?>" <?php if(in_array($attr,$insertedAttr,true)){ echo 'selected';}?>><?php echo $each; ?></option>  
																																<?php } }?>
																														</select>
																													</div>
																												</div> 
																											<?php }  ?> 
																										</div><hr>
																									</div>
																								<?php } ?>
																								
																								<?php 
																									$expert_attr = $this->db->get_where('tbl_attribute', array('subcategory' => $list->co_subcategory,'attribute_type'=>'expert_attr'))->result(); 
																									if(!empty($expert_attr)){ ?> 
																									<div class="col-sm-12">
																										<div><h4 style="font-weight:600;" class="text-success">Expert Tips Details</h4></div>
																										<div class="row">
																											<?php foreach($expert_attr as $attribute1){ 
																											?>
																											<div class="col-sm-3">
																												<div class="form-group">
																													<label for="input-2"><?= $attribute1->attribute?><span class="text-danger">(Optional)</span></label>
																													<select  name="expertattr[]"  class="form-control form-control" required>
																														<option selected disabled>select</option>
																														<?php
																															$insertedAttr1=explode(",",$list->expert_advice);
																															$attr_value1=explode(',',$attribute1->attribute_value); 
																															if(!empty($attr_value1)){
																																foreach($attr_value1 as $each){ 
																																	$attr1=$attribute1->attribute.':'.$each;
																																?>
																																<option value="<?php echo $attribute1->attribute.':'.$each; ?>" <?php if(in_array($attr1,$insertedAttr1,true)){ echo 'selected';}?>><?php echo $each; ?></option>  
																															<?php } }?>
																													</select>
																												</div>
																											</div> 
																											<?php }  ?> 
																										</div><hr>
																									</div>
																								<?php } ?>
																							</div>
																							<div><h6  class="sub-heading" onclick="$('#modal-other-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Modal & Other Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
																								<div class="row" id="modal-other-info" style="display:flex;">
																									<div class="col-sm-12">
																										<div class="form-group">
																											<label>Product Tags</label>
																											<textarea class="form-control ptags summernote" style="border:1px solid #aaaaaa;"  name="producttags" id="tags"><?php if(!empty($list->tags)){echo $list->tags;}?></textarea>
																										</div>
																									</div>
																									<div class="col-sm-12">
																										<div class="form-group">
																											<label>Modal Info&nbsp;<input value="true" <?php if($list->modalinfo_status=='true'){echo "checked";}?> style="margin-top:-4px;" id="modalinfostatus" type="checkbox" name="modalinfostatus" onclick="toggleModalInfo()" ></label>
																											<textarea class="form-control ptags" style="border:1px solid #aaaaaa;display:none;" name="modal_info" id="modal_info" >
																												<div id="model-info">
																													<table class="info-popup__table">
																														<tbody>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Hips</th>
																																<td class="info-popup__block-col">35.5</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Waist</th>
																																<td class="info-popup__block-col">24</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Height</th>
																																<td class="info-popup__block-col">5'10"</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Bust</th>
																																<td class="info-popup__block-col">32</td>
																															</tr>
																														</tbody>
																													</table>
																													<div class="h6 u-margin-b--none u-margin-t--xl">Here she's wearing a size XS</div>
																												</div>
																											</textarea>
																										</div>
																									</div>
																									<!--<div class="col-sm-4" id="refundpoli">
																										<div class="form-group">
																										<label>Refund Policy</label>
																										<textarea class="form-control summernote" style="border:1px solid #aaaaaa; " required name="refundpolicy" id="refundpolicy"></textarea>
																										</div>
																										</div>
																										<div class="col-sm-4" id="returnpoli">
																										<div class="form-group">
																										<label>Return Policy</label>
																										<textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="returnpolicy" id="returnpolicy"></textarea>
																										</div>
																										</div>
																										<div class="col-sm-4" id="cancelpolicy">
																										<div class="form-group">
																										<label>Cancellation Policy</label>
																										<textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="cancellationpolicy" id="cancellationpolicy"></textarea>
																										</div>
																										</div>
																										<div class="col-sm-4" id="exchngpoli">
																										<div class="form-group">
																										<label>Exchange Policy</label>
																										<textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="exchangepolicy" id="exchangepolicy"></textarea>
																										</div>
																									</div>-->
																									<div class="col-sm-12">
																										<div class="form-group">
																											<label>Laundry Tips&nbsp;<input value="true" style="margin-top:-8px;" type="checkbox" name="laundry_avl" onclick="toggleLaundry()"> </label>
																											<textarea class="form-control ptags" style="border:1px solid #aaaaaa; display:none;" name="laundry_tips" id="laundry_tips">
																												<?php
																													$laundryTips=$this->db->get_where('manage_content',array('name'=>'laundry_tips'))->row();
																													if(!empty($laundryTips)){
																														echo $decodeData=base64_decode($laundryTips->value);
																													}
																												?>
																											</textarea> 
																										</div>
																									</div>
																								</div><hr>
																								<div><h6  class="sub-heading" onclick="$('#other-settings').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Other Settings&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6></div>
																									<div class="row" id="other-settings" style="display:flex;">
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Gift Wrap</label> &nbsp
																												<input <?php if($list->gift_wrap=='true'){echo "checked";}?> value="true" type="checkbox" name="giftwrap" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Quick View</label> &nbsp
																												<input <?php if($list->quick_view=='true'){echo "checked";}?> value="true" type="checkbox" name="quickview" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Laundry Tips</label> &nbsp
																												<input value="true" <?php if($list->laundry_tips=='true'){echo "checked";}?> type="checkbox" name="laundry_avl">  
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Compare</label> &nbsp
																												<input <?php if($list->compare=='true'){echo "checked";}?> value="true" type="checkbox" name="compare" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Product Display</label> &nbsp
																												<input <?php if($list->is_status=='true'){echo "checked";}?> value="true" type="checkbox" name="is_status" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Audio Play</label> &nbsp
																												<input <?php if($list->audio_status=='true'){echo "checked";}?> value="true" type="checkbox" name="audiostatus" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label>Chat For Consult</label> &nbsp
																												<input <?php if($list->chat_consult=='true'){echo "checked";}?> value="true" type="checkbox" name="consult" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label for="complimentary">Complimentary Product</label> &nbsp
																												<input <?php if($list->is_complimentary=='true'){echo "checked";}?> value="true" id="Complimentary" type="checkbox" name="complimentary" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label for="combostatus">Combo Eligible</label> &nbsp
																												<input value="true" <?php if($list->combo_status=='true'){echo "checked";}?> id="combostatus" type="checkbox" name="combostatus" >
																											</div>
																										</div>
																										<div class="col-sm-3 ">
																											<div class="form-group">
																												<label for="combostatus">Modal Info</label> &nbsp
																												<input <?php if($list->modalinfo_status=='true'){echo "checked";}?> value="true" id="modalinfostatus" type="checkbox" name="modalinfostatus" >
																											</div>
																										</div>
																									</div><hr>
																									<button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
																									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
																									<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
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
																			</div>
																			</div>
																		</div>
																		</section>
																	</div>
																	</div>
																</div>
																<script>
																	function toggleModalInfo(){
																		$('#modal_info').parent().children().eq(2).toggle()
																		$('#modal_info ').toggleClass('summernote'); 
																		$('.summernote').summernote();
																	}
																	function toggleLaundry(){
																		$('#laundry_tips').parent().children().eq(2).toggle()
																		$('#laundry_tips ').toggleClass('summernote'); 
																		$('.summernote').summernote();
																	}
																	var colorList = "";
																	<?php 
																		
																		foreach($colorlist as $color)
																		{ 
																		?>
																		var ele = "<option style='background: <?= $color->code ?>'><?= $color->code ?></option>'";
																		colorList = colorList + ele;
																		<?php
																		}
																	?>
																	
																	function Sizing() 
																	{
																		$(".extra-content").append('<div class="row"><div class="col-sm-2"><div class="form-group"><label>Size <span class="text-danger"> *</span></label><select required name="p_size[]" class="form-control" ><option value="XS">XS</option><option value="S">S</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option></select></div></div><div class="col-sm-2"><div class="form-group"><label for="input-2">Numeric Size<span class="text-danger">*</span></label><input type="number" required name="p_sizenumeric" placeholder="Enter Numeric Size Eg. 32,34,36 Etc." required class="form-control text-uppercase"></div></div> <div class="col-sm-2"><div class="form-group"><label>Color <span class="text-danger"> *</span></label><select name="p_color[]" class="form-control pa chosen-select" required><option selected disabled>Select Color</option> '+colorList+'  </select></div></div> <div class="col-sm-2"><div class="form-group"><label>Unit <span class="text-danger"> *</span></label><input type="text" required name="p_unit[]" placeholder="Enter Unit" list="varunit"  required class="form-control text-uppercase"><datalist id="varunit"><option value="mg"></option><option value="gm"></option><option Value="ml"></option><option value="liter"></option><option value="kg"></option></datalist></div></div><div class="col-sm-2"><div class="form-group"><label>Weight <span class="text-danger"> *</span></label><input type="text" name="p_weight[]" required placeholder="Enter Weight" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>MRP <span class="text-danger"> *</span></label><input type="text" name="p_mrp[]" required placeholder="Enter MRP" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Offer Price <span class="text-danger"> *</span></label><input type="number" name="p_price[]" required  placeholder="Enter Offer Price" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Avaliability <span class="text-danger"> *</span></label><select name="avaliability[]" class="form-control pa chosen-select" required><option value="true">Yes</option><option value="false">No</option></select></div></div><div class="col-sm-2"><div class="form-group"><label>Quantity <span class="text-danger"> *</span></label><input type="number" required name="stock[]"  placeholder="Quantity" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Bar Code <span class="text-danger"> *</span></label><input type="number" required name="baar_code[]"  placeholder="Bar Code" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Length <span class="text-danger"> *</span></label><input type="text"  name="v_length[]"  placeholder="Length" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Width <span class="text-danger"> *</span></label><input type="text"  name="v_width[]"  placeholder="Width" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Height <span class="text-danger"> *</span></label><input type="text"  name="v_height[]"  placeholder="Height" class="form-control"></div></div><div class="col-sm-2"><div class="form-group p-4"><button class="btn btn-danger btn-sm fa fa-times-circle remove-extra-content" onclick="removesizing(this)" type="button"></button></div></div></div>');
																	}
																	
																	const removesizing = (e) => {
																		$(e).closest('.row').remove()
																	}
																	
																	
																	function youtube()
																	{
																		
																		$(".extra-content-youtube").append('<div class="row"><div class="col-sm-6 div-count"><div class="form-group"><label>Youtube Link</label><input type="text" required name="link1[]" placeholder="Enter YouTube Video Link (Only Embed Link)" class="form-control " ></div></div> <div class="col-sm-2"><div class="form-group p-4"><button class="btn btn-danger btn-sm fa fa-times-circle remove-extra-content-youtube" onclick="removebox(this)" type="button"></button></div></div></div>');
																		var divcount = $('.div-count').length;
																		if(divcount >= '5')
																		{
																			$(".add-extra-content-youtube").hide();
																		}
																		else
																		{
																			$(".add-extra-content-youtube").show();
																		}
																	}
																	
																	const removebox = (e) => {
																		$(e).closest('.row').remove();
																		var divcount = $('.div-count').length;
																		if(divcount <= '4')
																		{
																			$(".add-extra-content-youtube").show();
																		}
																	}
																</script>
																<script>
																	function cancel_status(status){
																		if(status=='true'){
																			$("#cancel_limit_div").show();
																		}
																		else{
																			$("#cancel_limit_div").hide();
																		}
																		
																		if(status == 'true')
																		{
																			$("#cancelpolicy").show();
																		}
																		else
																		{
																			$("#cancelpolicy").hide();
																		}
																	}
																	
																	function prebook_status(status){
																		if(status=='true'){
																			$("#prebook_div").show();
																		}
																		else{
																			$("#prebook_div").hide();
																		}
																	}
																	
																	function return_status(status){
																		if(status=='true'){
																			$("#return_limit_div").show();
																			$("#refundpoli").show();
																			$("#returnpoli").show();
																		}
																		else{
																			$("#return_limit_div").hide();
																			$("#refundpoli").hide();
																			$("#returnpoli").hide();
																		}
																		
																		
																	}
																	function exchange_status(status){
																		if(status=='true'){
																			$("#exchange_limit_div").show();
																			$("#exchngpoli").show();
																		}
																		else{
																			$("#exchange_limit_div").hide();
																			$("#exchngpoli").hide();
																		}
																	}
																	exchange_status('true');
																	cancel_status('true');
																	return_status('true');
																</script>
																<script>
																	function setAmount() {
																		//Purchasing Price
																		var purchaseprice=$("#purchaseprice").val();
																		
																		//fetch cgst and sgst and set as total gst
																		var gst = $("#gst").val();
																		var sgst = $("#sgst").val();
																		
																		//Get Expected Profit
																		var expectedProfit = $("#expected_profit").val();
																		
																		//Get Mrp
																		var mrp = $("#mrp").val();
																		
																		if(purchaseprice!=''){
																			
																			if(gst!='' || sgst!=''){
																				totalgst = parseFloat(gst) + parseFloat(sgst);
																				var gstr = (purchaseprice * totalgst) / 100;
																				gstr = gstr.toFixed(0);
																				$("#gst1").val(gstr);
																				
																				// set base price
																				var base_price=(parseFloat(purchaseprice)+parseFloat(gstr)).toFixed(0);
																				$('#base_price').val(base_price);
																			}
																		}
																		else{
																			var gstr='';
																			var base_price='';
																			$("#gst1").val(gstr);
																			$('#base_price').val(base_price);
																		}
																		
																		if(base_price!='' && expectedProfit!=''){
																			var minimum_selling_price =(parseFloat(base_price)+parseFloat((base_price * expectedProfit) / 100)).toFixed(0); 
																			$("#minimum_selling_price").val(minimum_selling_price); 
																		}
																		else{
																			var minimum_selling_price='';
																			$("#minimum_selling_price").val(minimum_selling_price);
																		}
																		
																		if(mrp != ''){
																			
																			if(minimum_selling_price!=''){
																				var regular_selling_price=parseFloat((parseFloat(mrp)+parseFloat(minimum_selling_price))/2);
																				regular_selling_price=(getNearestLowestMultipleOf50(regular_selling_price.toFixed(0))-1);
																				$('#regular_selling_price').val(regular_selling_price);
																			}
																			else{
																				regular_selling_price='';
																				$('#regular_selling_price').val(regular_selling_price);
																			}
																			
																			if(regular_selling_price!=''){
																				margin=parseFloat(regular_selling_price)-parseFloat(minimum_selling_price);
																				margin = margin.toFixed(0); 
																				$("#margin").val(margin);
																			}
																			else{
																				$("#margin").val(''); 
																			}
																		}
																		else{
																			$('#regular_selling_price').val('');
																			$("#margin").val(''); 
																		}
																	}
																	function getNearestLowestMultipleOf50(number) {
																		var nearestLowestMultiple = Math.floor(number / 50) * 50;
																		return nearestLowestMultiple;
																	}
																</script>
																</script>
																<?php require APPPATH . 'views/Auth/Footer.php'; ?>
																<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
																
																<script type="text/javascript">
																	function change_subcat(id) {
																		var id = id;
																		var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subcategory/') ?>" + id;
																		$.ajax({
																			url: url,
																			type: "post",
																			
																			success: function(res) {
																				// alert(res);
																				$("#subcat").html(res);
																				breadcrumb();
																			}
																		})	
																	}
																	function change_cosub(id) {
																		var id = id;
																		var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/cosubcategory/') ?>" + id;
																		$.ajax({
																			url: url,
																			type: "post",
																			
																			success: function(res) {
																				// alert(res);
																				$("#cosubcat").html(res);
																				breadcrumb();
																			}
																		})	
																	}
																	function change_attribute(id) {
																		$.ajax({
																			url: "<?= base_url($this->data->controller . '/' . $this->data->method . '/ProductAttribute/') ?>" + id,
																			type: "post",
																			success: function(res) { 
																				$(".attribute").append(res); 
																				breadcrumb();
																			}
																		})
																		$.ajax({
																			url: "<?= base_url($this->data->controller . '/' . $this->data->method . '/ExpertAttribute/') ?>" + id,
																			type: "post",
																			success: function(res) { 
																				$(".attribute").append(res); 
																				breadcrumb();
																			}
																		})
																	} 
																	function change_subbrand(id) {
																		var id = id;
																		var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subbrand/') ?>" + id;
																		$.ajax({
																			url: url,
																			type: "post",
																			
																			success: function(res) {
																				//   alert(res);
																				$("#subbrand").html(res);
																				breadcrumb();
																			}
																		})
																	}
																	function change_sizetype(id){
																		$('#sizechart').show();
																		$("#sizechart_table").hide();
																		$("input[name='custom_sizechart']").prop('checked',false);   
																		var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/ShowSizeChart/') ?>" + id;
																		$.ajax({
																			url: url,
																			type: "post",
																			success: function(res) {
																				$("#sizechart_table").html(res);  
																			}
																		})   
																	}
																	$("input[name='custom_sizechart']").click(function(){
																		if($(this).is(":checked")){
																			$("#sizechart_table").show(); 
																			}else{
																			$("#sizechart_table").hide();  
																		} 
																	})
																	
																	function breadcrumb() {
																		
																		var category = $("#cat").val();
																		var subcategory = $("#subcat").val();
																		var cosubcategory = $("#cosubcat").val();
																		var brand = $("#pb").val();
																		
																		var catval = $('.optioncat'+category).html();
																		var subcatval = $('.optionsubcat'+subcategory).html();
																		var cosubcatval = $('.optioncosubcat'+cosubcategory).html();
																		var brandval = $('.optionbrand'+brand).html();
																		
																		$("#catbread").html(catval);
																		
																		if(subcategory==null||subcategory==""||subcategory==undefined)	
																		{
																			$("#subcatbread").html('-');
																		}
																		else
																		{
																			$("#subcatbread").html(subcatval);
																		}
																		
																		if(cosubcategory==null||cosubcategory==""||cosubcategory==undefined)	
																		{
																			$("#cosubcatbread").html('-');
																		}
																		else
																		{
																			$("#cosubcatbread").html(cosubcatval);
																		}
																		
																		$("#cobrandbread").html(brandval);
																	}
																	
																	var stepper = new Stepper(document.querySelector('.bs-stepper'));
																	function validateForm(id) { 
																		var block='#'+id+' .form-control';
																		$(block).attr("data-parsley-group",id);
																		if ($('form').parsley().validate({group: id })) {
																			stepper.next(); 
																		}
																	}
																</script>
															</body>
															</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			