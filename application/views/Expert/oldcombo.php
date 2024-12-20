<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
	</head>
    <body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<?php  require APPPATH.'views/Admin/Topbar.php';?>
	<?php  require APPPATH.'views/Admin/Sidebar.php';?>
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
										<br/><br/>
										<button class="btn btn-secondary" >Total Combo : <?= count($list);?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Verification</th>
                                                            <th>Image</th>
                                                            <th>Combo Name</th>
															<th>Total Price</th>
                                                            <th>Offer Price	</th>
                                                            <th>Product 1</th>
                                                            <th>Product 2</th>
                                                            <th>Product 3</th>
                                                            <th>Product 4</th>
                                                            <th>Product 5</th>
                                                            <th>Product 6</th>
                                                            <th>Product 7</th>
                                                            <th>Product 8</th>
                                                            <th>Product 9</th>
                                                            <th>Product 10</th>
                                                            <th>Product 11</th>
                                                            <th>Sku Id</th>
                                                            <th>Short Desc</th>
                                                            <th>Long Desc</th>
														</tr>
													</thead>
                                                    <tbody>
														<?php
															$sr=1;
															foreach($combolist as $each)
															{
															?>
															<tr>
																<td><?= $sr;?></td>
																<td><button class="btn btn-danger btn-sm"><?= ucwords($each->verify_status);?></button></td>
																<td>
																	<button onclick="Comboimg('<?= $each->id?>')" class="btn btn-primary"><i class="fa fa-eye"></i> View Images</button>
																</td>
																<td><?= $each->name?></td>
																<td><?= $each->total_price?></td>
																<td><?= $each->off_price?></td>
																<td>
																	<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id1); ?>">View</a>
																</td>
																<td>
																	<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id2); ?>">View</a>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id3))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id3); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id4))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id4); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id5))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id5); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id6))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id6); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id7))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id7); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id8))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id8); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id9))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id9); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id10))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id4); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($each->pro_id11))
																		{
																		?>
																		<a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$each->pro_id11); ?>">View</a>
																		<?php
																		}
																	?>
																</td>
																<td><?= $each->skuid?></td>
																
																<td><?= $each->short_desc?></td>
																<td><?= $each->long_desc?></td>
															</tr>
															<?php
															$sr++;}
														?>
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
		
		<!--Modal Start-->
		<div class="modal fade" id="AddModal">
			<div class="modal-dialog modal-lg">
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
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Combo Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control text-capitalize" name="name" placeholder="Combo Name" required >
										<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
									</div>
									
									<div class="form-group">
										<label>Product 1<span class="text-danger"> *</span></label>
										<input type="number" hidden value="0" class="pro0">
										<select data-id="0" onchange="getimage(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product1" required  class="form-control" id="pro0" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error" style="color: #fd3550;"></span>
									</div>
									
									<div class="form-group">
										<label>Product 3<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro2">
										<select data-id="2" onchange="getimage3(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product3"  class="form-control" id="pro2" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error3" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 5<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro4">
										<select data-id="4" onchange="getimage5(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product5"  class="form-control" id="pro4" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error5" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 7<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro6">
										<select data-id="6" onchange="getimage7(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product7"  class="form-control" id="pro6" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error7" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 9<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro8">
										<select data-id="8" onchange="getimage9(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product9"  class="form-control" id="pro8" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error9" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 11<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro10">
										<select data-id="10" onchange="getimage11(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product11"  class="form-control" id="pro10" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error11" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label class="col-form-label">Total Price<span class="text-danger">*</span></label>
										<input type="number" readonly value="0" class="form-control " name="totalprice" placeholder="" required >
										<?php echo form_error("totalprice", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label class="col-form-label">Short Description<span class="text-danger">*</span></label>
										<textarea class="form-control summernote" name="shortdescription" placeholder="Short Description" required ></textarea>
										<?php echo form_error("shortdescription", "<p class='text-danger' >", "</p>"); ?>
									</div>
									
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Combo Image <span class="text-danger"> (Use Ctrl+Click To Select Multiple images)* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
										<input type="file" required class="form-control" data-height="100" name="image[]" Title="Choose" multiple="multiple" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
										<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label>Product 2<span class="text-danger"> *</span></label>
										<input type="number" hidden value="0" class="pro1">
										<select data-id="1" name="product2" onchange="getimage2(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" required  class="form-control" id="pro1" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error2" style="color: #fd3550;"></span>
									</div>
									
									<div class="form-group">
										<label>Product 4<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro3">
										<select data-id="3" onchange="getimage4(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product4"  class="form-control" id="pro3" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error4" style="color: #fd3550;"></span>
									</div>
									
									<div class="form-group">
										<label>Product 6<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro5">
										<select data-id="5" onchange="getimage6(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product6"  class="form-control" id="pro5" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error6" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 8<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro7">
										<select data-id="7" onchange="getimage8(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product8"  class="form-control" id="pro7" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error8" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label>Product 10<span class="text-danger"> </span></label>
										<input type="number" hidden value="0" class="pro9">
										<select data-id="9" onchange="getimage8(this.value,'<?= base_url($this->data->controller.'/'.$this->data->method.'/getimage')?>')" name="product10"  class="form-control" id="pro9" title="Select a Product "  data-placeholder="Choose Product..">
											<option selected disabled>--- Select ---</option>
											<?php
												foreach ($productlist as $each)
												{
												?>
												<option data-paisa="<?= $each->off_price ?>" value="<?= $each->id ?>"><?= $each->name ?> - &nbsp &nbsp  <?= $each->off_price ?> ₹ - &nbsp &nbsp <?= $each->vendor ?></option>
												<?php
												}
											?>
										</select>
										<span id="pro1error10" style="color: #fd3550;"></span>
									</div>
									<div class="form-group">
										<label class="col-form-label">SKU Id<span class="text-danger">*</span></label>
										<input type="number"  class="form-control " name="skuid" placeholder="Enter SKU id" required >
										<?php echo form_error("skuid", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label class="col-form-label">Offer Price<span class="text-danger">*</span></label>
										<input type="number"  class="form-control " name="offerprice" placeholder="" required >
										<?php echo form_error("offerprice", "<p class='text-danger' >", "</p>"); ?>
									</div>
									<div class="form-group">
										<label class="col-form-label">Long Description<span class="text-danger">*</span></label>
										<textarea class="form-control summernote" name="longdescription" placeholder="Long Description" required ></textarea>
										<?php echo form_error("longdescription", "<p class='text-danger' >", "</p>"); ?>
									</div>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-sm-3 mt-2" id="imgdiv"></div>
								<div class="col-sm-3 mt-2" id="imgdiv2"></div>
								<div class="col-sm-3 mt-2" id="imgdiv3"></div>
								<div class="col-sm-3 mt-2" id="imgdiv4"></div>
								<div class="col-sm-3 mt-2" id="imgdiv5"></div>
								<div class="col-sm-3 mt-2" id="imgdiv6"></div>
								<div class="col-sm-3 mt-2" id="imgdiv7"></div>
								<div class="col-sm-3 mt-2" id="imgdiv8"></div>
								<div class="col-sm-3 mt-2" id="imgdiv9"></div>
								<div class="col-sm-3 mt-2" id="imgdiv10"></div>
								<div class="col-sm-3 mt-2" id="imgdiv11"></div>
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
		
		<!-- Modal -->
		<div class="modal fade" id="ImgModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Combo Images</h5>
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
		<div class="modal fade " id="EditImage" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Combo Image</h5>
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
		<script>
			function Comboimg(id) {
				$("#ImgModal").modal("show");
				$("#ImgModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#ImgModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method .'/ComboImage/') ?>" + id);
			}
			
			function getimage(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			function getimage2(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv2").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage3(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv3").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage4(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv4").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage5(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv5").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage6(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv6").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage7(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv7").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage8(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv8").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage9(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv9").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage10(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv10").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
			
			function getimage11(id,url) {
				var id = id;
				var url = url;
				$.ajax({
					type: 'POST',
					url: url,
					data: {id:id},
					
					
					success: function(response) {
						console.log(response);
						$("#imgdiv11").html(response);
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		</script>
		<script>
			$('select').change(function(){
				var current = ($(this).attr('data-id'));

				var price_current = $('option:selected', this).attr('data-paisa');
				// console.log(element);
				var id = $(this,':selected').val();
				$('.pro'+current).val(price_current);
				var sum = 0;
				var i=0;
				while(i<11)
				{	
					var price = $('.pro'+i).val();
					
					sum = parseInt(price) + parseInt(sum);
					
					var paisa = $("#pro"+i+" selected:option").attr('data-paisa');
					console.log(paisa);
					
					if(current != i)
					{
						
						$("#pro"+i+" option").each(function() {
							//logic for disabling 
							var value = $(this).val();
							if(id == value)
							{
								$(this).attr('disabled','true');
							}
						});
					}
					
					
					i++;
				}
				
				$("[name='totalprice']").val(sum);
			})
		</script>
		
	</body>
</html>