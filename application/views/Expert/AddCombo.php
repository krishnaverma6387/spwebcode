<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			#scroll{
			height: 150px;
			overflow-y:scroll;
			}
			.chosen-container .chosen-choices{
			padding: 5px;
			border-radius: 3px;
			}
		</style>
	</head>
    <body class="vertical-layout vertical-menu 1-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<?php  require APPPATH.'views/Admin/Topbar.php';?>
	<?php  require APPPATH.'views/Admin/Sidebar.php';?>
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="breadcrumbs-top">
                            <h5 class="content-header-title float-left pr-1 mb-0">ADD LOOK</h5>
                            <div class="breadcrumb-wrapper d-none d-sm-block">
                                <ol class="breadcrumb p-0 mb-0 pl-1">
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/Dashboard">ADD LOOK</a>
									</li>
                                    <li class="breadcrumb-item active">ADD Look</li>
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
										<h4>Add Look</h4>
					
										<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/GetFilterProduct'); ?>" method="post" id="GetProducts">
											
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label class="col-form-label">Choose Category <span class="text-danger">*</span></label>
														<select type="text" onchange="getsubcat(this.value)" class="form-control" name="category" required >
															<option>--- Select ---</option>
															<?php 
																foreach($categorylist as $each)
																{
																?>
																<option value="<?= $each->id ?>"><?= $each->name ?></option>
																<?php
																}
															?>
														</select>
														<?php echo form_error("vendor", "<p class='text-danger' >", "</p>"); ?>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label class="col-form-label">Choose Sub-Category <span class="text-danger">*</span></label>
														<select type="text" class="form-control" id="bysubcat" name="subcategory" required >
															<option>--- Select ---</option>
															
														</select>
														<?php echo form_error("vendor", "<p class='text-danger' >", "</p>"); ?>
													</div>
												</div>
												
												<div class="col-sm-3">
													<div class="form-group">
														<label class="col-form-label">Submit <span class="text-danger">*</span></label>
														<br/>
														<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
													</div>
													
												</div>
											</div>
										</form>
										
									</div>
									<div class="card-content collpase show">
										<div class="card-body ">
											<div class="row">
												<div class="col-sm-8" id="productsData"></div>
												<div class="col-sm-4" >
													
													<div class="card">
														<?php 
															if(count($comboitem)>0)
															{
															?>
															<div class="card-header">
																<h4 class="card-title">Selected Item</h4>
																<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
																<div class="heading-elements">
																	<ul class="list-inline mb-0">
																		<li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li
																		</ul>
																	</div>
																</div>
																<?php
																}
															?>
															
															<div class="card-content px-1">
																<div id="scroll" class="media-list height-300 position-relative">
																	<div class="list-group ">
																		<?php
																			foreach($comboitem as $item)
																			{
																				$product = $this->db->get_where('products',array('id'=>$item->product_id,'is_status'=>'true'));
																				if($product->num_rows()>0)
																				{
																					$product = $product->row();
																					$img = explode(',',$product->image1);
																				?>
																				<a href="javascript:void(0)"  class="list-group-item p-0">
																					<div class="media px-1">
																						<div class="media-left ">
																							<img onclick="window.open('<?= base_url('uploads/product/').$img[0]?>')" style="height:80px; width:65px" src="<?= base_url('uploads/product/').$img[0]?>" alt="avatar">
																							
																						</div>
																						<div class="media-body w-100">
																							<h6 onclick="window.open('<?= base_url('Expert/productsdata/ViewProduct/').$product->id ?>')" class="media-heading mb-0"><?= $product->name?></h6>
																							<span style="color:black;">Size:</span>&nbsp;<span class=" mb-0 text-muted"><?= $item->size?></span>
																							<span style="color:black;">Color:</span>&nbsp;<span style="background:<?= $item->color?>; padding:0 8px; border: 1px solid gray;"></span><br>
																							<button class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'combo_item','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </button>
																						</div>
																					</div>
																				</a>
																				<?php
																				}
																			}
																		?>
																		
																	</div>
																	<?php 
																		if(count($comboitem)>1)
																		{
																		?>
																		<div class="card-footer mt-3">
																			<button class="btn btn-danger w-100" data-toggle="modal" data-target="#AddModal">
																			<i class="fa fa-plus-circle" aria-hidden="true"></i> Proceed Look</button>
																		</div>
																		<?php
																		}
																	?>
																</div>
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
			
			<!--Modal Start-->
			<div class="modal fade" id="AddModal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">Proceed To Look</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddNewCombo'); ?>" method="post" enctype="multipart/form-data" id="uploadForm">
							<div class="modal-body p-1">
								<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
								value="<?= $this->security->get_csrf_hash(); ?>" />
								<div class="row">
									
									<div class="col-sm-6">
										<div class="form-group">
											<label >Category<span class="text-danger"> *</span></label>
											<select class="form-control" onchange="change_subcat(this.value);" name="category" required>
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
										<div class="form-group">
											<label for="input-2">Look Name<span class="text-danger">*</span></label>
											<input type="text" name="name" required placeholder="Enter Look Name" class="form-control">
										</div>
										
										<div class="form-group">
											<label for="input-2">Look Description<span class="text-danger">*</span></label>
											<textarea name="description" required class="form-control summernote"></textarea>
										</div>	
										<div class="form-group">
											<label for="input-2">Beauty Tips<span class="text-danger">*</span></label>
											<textarea name="beautytips" required class="form-control summernote"></textarea>
										</div>	
									</div>
									<div class="col-sm-6">
										<!--div class="form-group">
											<label class="col-form-label">Combo Image <span class="text-danger"> (Use Ctrl+Click To Select Multiple images)*<small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
											<input type="file" required class="form-control" data-height="100" name="image[]" Title="Choose" multiple="multiple" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
											<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
										</div-->
										
										<div class="form-group">
											<label >Sub-category<span class="text-danger"> *</span></label>
											<select name="subcategory" class="form-control " id="subcat" required>
												<option selected disabled>--- Select Category First ---</option>
												
											</select>
										</div>
										
										<div class="form-group">
											<label for="input-2">Why This Look Created<span class="text-danger">*</span></label>
											<textarea name="whycreated" required class="form-control summernote"></textarea>
										</div>	
										<div class="form-group">
											<label for="input-2">Body Shape<span class="text-danger">*</span></label>
											<textarea name="bodyshape" required class="form-control summernote"></textarea>
										</div>
									</div>
								</div>
								
								<hr>
								
								<h4 class="text-danger">Preview</h4>
								
								<div class="row mt-2">
									<?php
										foreach($comboitem as $item)
										{
											$product = $this->db->get_where('products',array('id'=>$item->product_id,'is_status'=>'true'));
											if($product->num_rows()>0)
											{
												$product = $product->row();
												$img = explode(',',$product->image1);
											?>
											<div class="col-sm-4 ">
												<div class="card bg-dark">
													<div class="card-body">
														<a href="<?= base_url('uploads/product/').$img[0]?>" target="_blank"><img class="img-fluid" src="<?= base_url('uploads/product/').$img[0]?>" style="height:150px !important; width:100%"></a>
													</div>
													<div class="card-footer bg-dark text-white">
														<center><?= $product->name?></center>
														<center><small>Size:</small>&nbsp;<small><?= $item->size?></small></center>
														<center><small>Color:</small>&nbsp;<small style="background:<?= $item->color?>; padding:0 8px; border:1px solid gray;"></small></center>
													</div>
												</div>
											</div>
											<?php
											}
										}
									?>
								</div>
								
							</div>
							<div class="modal-footer d-block p-1">
								<button type="submit" class="btn btn-primary" id="addBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin3" style="display:none;"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--Modal End-->
			
			<?php require APPPATH.'views/Auth/Footer.php';?>
			<?php require APPPATH.'views/Auth/JsLinks.php';?>
			
		
		<script>
			function getsubcat(id) {
				var url="<?php echo base_url($this->data->controller . '/' . $this->data->method.'/GetSubcat/') ?>" + id;
				
				$.ajax({
					url: url,
					type: "post",
					data: {id: id},
					success: function(res) {
						$("#bysubcat").html(res);
					}
				});
				
			}
			
			function change_subcat(id) {
				
				var url="<?php echo base_url($this->data->controller . '/' . $this->data->method.'/GetSubcat/') ?>" + id;
				
				$.ajax({
					url: url,
					type: "post",
					data: {id: id},
					success: function(res) {
						$("#subcat").html(res);
					}
				});
				
				
			}
			
			
			
		</script>
		
		<script>
			$('#GetProducts').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtn');
				var spinAction = $('#addSpin');
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
							if (response[0].res == 'success') 
							{
								$("#productsData").html(response[0].html);
							}
							else if (response[0].res == 'error') 
							{
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error");
							}
						},
						error: function() {
							window.location.reload();
						}
					});
				}
			});
			
			$('#DesignwiseProducts').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtn2');
				var spinAction = $('#addSpin2');
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
							if (response[0].res == 'success') 
							{
								$("#productsData").html(response[0].html);
							}
							else if (response[0].res == 'error') 
							{
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error");
							}
						},
						error: function() {
							window.location.reload();
						}
					});
				}
			});
		</script>
		
		<script>
			
			// Select On Behalf Of Category
			// $('.iCheck-helper').click(function(){
			// setTimeout(function () {filter_data()}, 5000);
			// alert("Ok");
			
			// });
			//alert(Category);
			
			function getdata()
			{
				setTimeout(function () {filter_data()}, 1000);
			}
			
			function filter_data()
			{
				var action = 'code/ajax/filter.php?action=filter_college';
				var subcategorys = get_filter('subcategory');
				var brands = get_filter('brand');
				var url = "<?php echo base_url($this->data->controller . '/' . $this->data->method.'/CheckFilterProduct/') ?>";
				
				var obj = {subcategory:subcategorys.join(','),brand:brands.join(',')};
				console.log(obj); 
				
				$.ajax({
					url: url,
					type: 'POST',
					data: obj,
					
					success: function(response) {
						if (response != 'error') 
						{
							$("#productsData").html(response); 
						} 
						else if (response == 'error') 
						{
							$('.notifyjs-wrapper').remove();
							$.notify("Product Not Found!", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
				
			}
			
			function get_filter(class_name)
			{
				var filter = [];
				$('.'+class_name+':checked').each(function(){
					filter.push($(this).val());
				});
				return filter;
				
				
				
			}
			
			
		</script>
		
		
	</body>
</html>			