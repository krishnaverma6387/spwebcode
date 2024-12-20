<?php defined("BASEPATH") or exit("No direct scripts allowed here"); ?>
<?php
	if (isset($action))
	{
		switch ($action)
		{
			
			case 'subcategory';
			
            if (count($list) > 0)
            {
                $sr = 1;
                foreach ($list as $each)
                {
				?>
				<option <?php if ($sr == 1){echo "selected";} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
				<?php
					$sr++;
				}
			}
            else
            {
			?>
			<option selected disabled>--- No Sub-Category Available ---</option>
            <?php
			}
            break;
			
			case 'ModifyCombo';
		?>
		<input type="hidden" name="id" class="comboid" value="<?php echo $list->id; ?>" />
		<div class="row">
			<div class="col-sm-12">
				<span>Modifictaion Needs : <?= $list->remark;?></span>
				
			</div>
		</div>
		<div class="row mt-3">
			
			<div class="col-sm-6">
				<div class="form-group">
					<label >Category<span class="text-danger"> *</span></label>
					<select class="form-control" onchange="change_subcat(this.value);" name="category" required>
						<option selected disabled>-- Select--</option>
						<?php
							foreach($categorylist as $data)
							{
							?>
							<option <?php if($data->id == $list->category_id){echo "selected";}?> value="<?= $data->id;?>"><?= $data->name?></option>
							<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="input-2">Look Name<span class="text-danger">*</span></label>
					<input type="text" name="name" value="<?php echo $list->name; ?>" required placeholder="Enter Look Name" class="form-control">
				</div>
				<div class="form-group">
					<label for="input-2">Look Description<span class="text-danger">*</span></label>
					<textarea name="description" required class="form-control summernote"><?php echo $list->description; ?></textarea>
				</div>	
				<div class="form-group">
					<label for="input-2">Beauty Tips<span class="text-danger">*</span></label>
					<textarea name="beautytips" required class="form-control summernote"><?php echo $list->beautytips; ?></textarea>
				</div>	
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label >Sub-category<span class="text-danger"> *</span></label>
					<select name="subcategory" class="form-control " id="subcat" required>
						<?php
							$getsubcat = $this->db->get_where('sub_category',array('id'=>$list->subcat_id))->row();
							if(!empty($getsubcat))
							{
							?>
							<option value="<?= $getsubcat->id?>"><?= $getsubcat->name?></option>
							<?php
							}
						?>
						
					</select>
				</div>
				<div class="form-group">
					<label for="input-2">Why This Look Created<span class="text-danger">*</span></label>
					<textarea name="whycreated" required class="form-control summernote"><?php echo $list->why_created; ?></textarea>
				</div>	
				<div class="form-group">
					<label for="input-2">Body Shape<span class="text-danger">*</span></label>
					<textarea name="bodyshape" required class="form-control summernote"><?php echo $list->bodyshape; ?></textarea>
				</div>
			</div>
		</div>
		
		<hr>
		<div class="row mt-2">
			<?php
				foreach($comboitem as $item)
				{
					$product = $this->db->get_where('products',array('id'=>$item->product_id,'is_status'=>'true'));
					if($product->num_rows()>0)
					{
						$product = $product->row();
						$variant = $this->db->get_where('product_variant',array('id'=>$item->variant_id,'is_status'=>'true'));
						if($variant->num_rows()>0)
						{
							$variant = $variant->row();
							$img = explode(',',$product->image1);
						?>
						<div class="col-sm-4 ">
							<div class="card bg-dark">
								<div class="card-body">
									<a href="<?= base_url('uploads/product/').$img[0]?>" target="_blank"><img class="img-fluid" src="<?= base_url('uploads/product/').$img[0]?>" style="height:150px !important; width:100%"></a>
								</div>
								<div class="card-footer bg-dark text-white">
									<center><?= $product->name?></center>
									<center><small><?= $variant->size?> -- <?= $variant->numeric_size?></small></center>
								</div>
							</div>
							<button  onclick="return Remove(this,'combo_item','id','<?= $item->id; ?>','<?= $item->combo_id; ?>')" type="button" class="btn btn-danger w-100">Delete</button>
							
						</div>
						<?php
						}
					}
				}
			?>
		</div>
		<br/>
		<div class="row">
			<div class="col-xl-6 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Category</h4>
						<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
						<div class="heading-elements">
							<ul class="list-inline mb-0">
								
							</ul>
						</div>
					</div>
					<div class="card-content collapse show">
						<div class="card-body" id="scroll">
							<div class="row skin skin-flat">
								<div class="col-md-12 col-sm-12">
									<?php 
										$sr = 1;
										foreach($subcategorylist as $each)
										{
										?> 
										<fieldset class="">
											<input value="<?= $each->id?>" type="checkbox" class="common_selector subcategory" id="input-<?= $sr?>">
											<label onclick="getdata()" for="input-<?= $sr?>"><?= $each->name?></label>
										</fieldset>
										<?php
											$sr++;
										}
									?>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-6 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Brand</h4>
						<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
						<div class="heading-elements">
							<ul class="list-inline mb-0">
								
							</ul>
						</div>
					</div>
					<div class="card-content collapse show">
						<div class="card-body" id="scroll">
							<div class="row skin skin-flat">
								<div class="col-md-12 col-sm-12">
									<?php 
										$sr2 = 1;
										foreach($brandlist as $each)
										{
										?>
										<fieldset>
											<input type="checkbox" value="<?= $each->id?>"  class="common_selector brand" id="input2-<?= $sr2?>">
											<label onclick="getdata()" id="filter" for="input2-<?= $sr2?>"><?= $each->name?></label>
										</fieldset>
										<?php
											$sr2++;
										}
									?>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12" id="productsData"></div>
		</div>
		
		<script>
			function getdata()
			{
				setTimeout(function () {filter_data()}, 1000);
			}
			
			function filter_data()
			{
				var comboid = $(".comboid").val();
				var subcategorys = get_filter('subcategory');
				var brands = get_filter('brand');
				var url = "<?php echo base_url($this->data->controller . '/' . $this->data->method.'/ModifyCheckFilterProduct/') ?>"+comboid;
				var obj = {subcategory:subcategorys.join(','),brand:brands.join(',')};
				console.log(obj); 
				
				$.ajax({
					url: url,
					type: 'POST',
					data: obj,
					
					success: function(response) {
						if (response != 'error') 
						{
							$('.notifyjs-wrapper').remove();
							$.notify("Product Found!", "success");
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
		
		<?php
			break;
			case 'ProductForCombo';
		?>
		<div class="row">
			<?php
				foreach($products as $each)
				{
					$pic = explode(',',$each->image1);
					$variant = $this->db->get_where('product_variant',array('product_id'=>$each->id,'is_status'=>'true'))->result();
				?>
				<div class="col-sm-4">
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddComboItem'); ?>" method="post" enctype="multipart/form-data" class="addForm2">
						<input type="hidden" value="<?= $each->id?>" name="productid">
						<div class="card bg-dark">
							<div class="card-body">
								<a href="<?= base_url('uploads/product/').$pic[0]?>" target="_blank"><img class="img-fluid" src="<?= base_url('uploads/product/').$pic[0]?>" style="height:150px !important; width:100%"></a>
							</div>
							<div class="card-footer bg-dark text-white"><center><a href="<?= base_url('Expert/productsdata/ViewProduct/').$each->id?>" target="_blank"><?= $each->name?></a></center>
								<div class="form-group">
									<label class="col-form-label text-white">Choose Color<span class="text-danger">*</span></label>
									<select type="text" class="form-control " name="variantid" required >
										<option selected disabled>--- Select ---</option>
										<?php 
											foreach($variant as $each){
											?>
											<option style="background-color:<?= $each->color ?>; color:white;" <?php if($each->color=='NA'){ echo "selected disabled"; }?> value="<?= $each->id ?>" ><?= $each->color ?></option> 
											<?php
											}
										?>
									</select> 
								</div>
								<div class="form-group" id="variant-data">
									
								</div>
								<div class="d-block">
									<center><button type="submit" class="btn btn-primary addBtn2" id=""> <i class="fa fa-check-circle"></i>  Submit <i class="fa spin-ico fa-spin fa-spinner"  style="display:none;"></i></button></center>
								</div>
							</div>
						</div>
					</form>
				</div>
				<script>
					$(document).on("change","select[name='variantid']",function(){
					
						var id = $(this).val();
						var _this=$(this);
						var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/ChangeVariant/') ?>";
						$.ajax({
							url: url,
							data: {id:id},
							type: "post",
							success: function(response) {
								var response = JSON.parse(response); 
								console.log(response);
								console.log(response[0].html);
								if (response[0].res == 'success') {
									_this.parent().parent().find('#variant-data').html(response[0].html); 
								}
								else if (response[0].res == 'error') {
									$('.notifyjs-wrapper').remove();
									$.notify("" + response[0].msg + "", "error");
									
								}
							},
							error: function() {
								// window.location.reload();
							}
						})	
						
					})
				</script>
				<?php
				}
			?>
		</div>
		<?php 
			break;
			case 'ChangeVariant';
		?>
		<label class="col-form-label text-white">Choose Size<span class="text-danger">*</span></label>
		<select type="text" class="form-control chosen-select" name="size[]" multiple required  data-placeholder="Choose a size">
			<?php
				$json=json_decode($list[0]->size);
				$count = 1;
				foreach ($json as $each){
					foreach($each as $size=>$size_stock){
					?>
					<option  value="<?= $size ?>" <?php if($size=='NA'){ echo "selected "; }?>><?= $size ?></option> 
					<?php
					}
				}
			?>
		</select> 
		<input type="hidden" value="<?= $list[0]->color?>" name="color">
		<?php 
			break;
			case 'ModifyForCombo';
		?>
		<div class="row">
			<?php
				foreach($products as $each)
				{
					$pic = explode(',',$each->image1);
					$variant = $this->db->get_where('product_variant',array('product_id'=>$each->id,'availability'=>'true'))->result();
				?>
				
				<div class="col-sm-4 ">
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/ModifyComboItem'); ?>" method="post" enctype="multipart/form-data" class="addForm3">
						<input type="hidden" value="<?= $each->id?>" name="productid">
						<div class="card bg-dark">
							<div class="card-body">
								<a href="<?= base_url('uploads/product/').$pic[0]?>" target="_blank"><img class="img-fluid" src="<?= base_url('uploads/product/').$pic[0]?>" style="height:150px !important; width:100%"></a>
							</div>
							<div class="card-footer bg-dark text-white"><center><a href="<?= base_url('Expert/productsdata/ViewProduct/').$each->id?>" target="_blank"><?= $each->name?></a></center>
								<input type="hidden" value="<?= $comboid?>" name="comboid">
								<div class="form-group">
									<label class="col-form-label text-white">Choose Variant <span class="text-danger">*</span></label>
									<select type="text" class="form-control" name="variant" required >
										<option selected disabled>--- Select ---</option>
										<?php 
											foreach($variant as $variant)
											{
											?>
											<option style='background-color: <?= $variant->color ?>' value="<?= $variant->id ?>"><?= $variant->size ?> -- <?= $variant->color ?></option>
											<?php
											}
										?>
									</select>
									<?php echo form_error("vendor", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="d-block">
									<center><button type="submit" class="btn btn-primary addBtn2" id=""> <i class="fa fa-check-circle"></i>  Submit <i class="fa spin-ico fa-spin fa-spinner"  style="display:none;"></i></button></center>
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<?php
				}
			?>
		</div>
		<?php 
			break;
			case 'ViewImage':
			if(!empty($list))
			{
			?>
			<a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$row->id); ?>" target="_blank"><img src="<?= base_url('/uploads/product/') . $list[0] ?>" style="height:150px; width:150px;" /></a>
			<?php
			}
			break;
			case 'subbrand';
			if (count($list) > 0)
			{
				$sr = 1;
			?>
			<option value="">--- Select ---</option>
			<?php
				foreach ($list as $each)
				{
				?>
				<option <?php if ($sr == 1)
					{
						echo "selected";
					} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php
						$sr++;
					}
			}
			else
			{
			?>
			<option seleted disabled>--- No Sub-Category Available ---</option>
			<?php
			}
			break;
			case 'UpdateImageProduct';
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<input type="hidden" name="column" value="<?php echo $column ?>" />
		
		<?php
			if ($column == 'image1')
			{
				$image = $list[0]->image1;
			}
			elseif ($column == 'image2')
			{
				$image = $list[0]->image2;
			}
			elseif ($column == 'image3')
			{
				$image = $list[0]->image3;
			}
			elseif ($column == 'image4')
			{
				$image = $list[0]->image4;
			}
			elseif ($column == 'image5')
			{
				$image = $list[0]->image5;
			}
		?>
		
		<div class="form-group">
			<label class="col-form-label"> Product Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $image . '') ?>">
			<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			
			
		</div>
		
		<?php
			break;
			
			case 'ViewImageProducts';
		?>
		<div class="row">
			<?php
				foreach($list as $icon)
				{
				?>
				<div class="col-sm-4">
					<a href="javascript:void()" title="<?= $icon?>"><img  src="<?= base_url('/uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>
					<br><br>
					<?php
						foreach($data as $datas)
						{
						?>
						<center>
							<button title="<?= $datas->id?>" onclick="EditProductImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageProduct/') ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>&nbsp <br/><br/>
							<!--button title="<?= $datas->id?>" onclick="DeleteDesignImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageProduct/') ?>','/')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button-->
							
						</center><br/>
					<?php }?>
				</div><br/>
				<?php
				
				}
				?>
				</div><br/>
				<div class="row">
				<?php
				foreach($data as $datas)
				{
				?>
				<!--center><button title="<?= $datas->id?>" onclick="AddDesignImg('<?= $datas->id?>','<?= base_url('ControlPanel/AddDesignImg/') ?>','/')" class="btn btn-primary"><i class="fa fa-plus"></i> Add Image</button></center-->
				<?php }?>
				</div>
				
				<?php
				break;
				
				case 'ViewImageCombo';
				?>
				<div class="row">
				<?php
				$sr=1;
				foreach($list as $icon)
				{
				?>
				<div class="col-sm-4">
				
				
				<center>
				<a href="<?= base_url('/uploads/product/') . $icon ?>" target="_blank" title="<?= $icon?>"><img  src="<?= base_url('/uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>
				<br><br>
				<!--button title="<?= $datas->id?>" onclick="EditComboImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Expert/ManageCombo/') ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button-->&nbsp 
				<?php
				if($sr != '1')
				{
				?>
				<!--button title="<?= $datas->id?>" onclick="DeleteComboimg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Expert/ManageCombo/') ?>','/')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button-->
				<?php
				}
				?>
				</center><br/>
				
				</div><br/>
				<?php
				$sr++;	
				}
				?>
				</div><br/>
				<?php
				break;
				
				case 'EditComboImage';
				
				foreach($icons as $icon)
				{
				if($icon == $imagename)
				{
				?>
				<center><img src="<?= base_url('uploads/product/') . $icon ?>" style="height:100px;" /></center>
				
				<?php
				}
				}
				?>
				
				<div style="display:none" id="errorContainer" class="bg-light text-danger mb-3 p-2" style="border-radius: 5px;">
				</div>
				<input type="text" name="id" value="<?= $list[0]->id?>"  class="form-control" hidden>
				<input type="text" name="imagename" value="<?= $imagename?>"  class="form-control" hidden>
				<div class="form-group">
				<label class="form-label" for="exampleInputEmail1">Edit Image</label>
				<input required type="file" name="icon" class="form-control">
				</div>
				
				
				
				<?php
				break;
				
				
				}
				}
				else
				{
				echo 'Action is required.';
				}
				?>
				<script>
				$('.dropify').dropify({
				messages: {
				'default': 'Drag and drop a file here or click',
				'replace': 'Drag and drop or click to replace',
				'remove': 'Remove',
				'error': 'Ooops, something wrong appended.'
				},
				error: {
				'fileSize': 'The file size is too big (2M max).'
				}
				});
				$('.summernote').summernote();
				$('.chosen-select').chosen();
				</script>
				<script type="text/javascript">
				$('.addForm2').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = formAction.find('.addBtn2');
				var spinAction = formAction.find('.spin-ico');
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
				console.log(response);
				var response = JSON.parse(response);
				$(btnAction).removeAttr("disabled");
				$(spinAction).hide();
				if (response[0].res == 'success') {
				$('.notifyjs-wrapper').remove();
				$.notify("" + response[0].msg + "", "success");
				if (response[0].redirect) {
				window.setTimeout(function() {
				window.location.href = response[0].redirect;
				}, 1000);
				} else {
				window.setTimeout(function() {
				window.location.reload();
				}, 1000);
				}
				} else if (response[0].res == 'error') {
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
				
				$('.addForm3').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = formAction.find('.addBtn2');
				var spinAction = formAction.find('.spin-ico');
				e.preventDefault();
				var data = new FormData(this);
				
				var comboid = data.get('comboid');
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
				console.log(response);
				var response = JSON.parse(response);
				$(btnAction).removeAttr("disabled");
				$(spinAction).hide();
				if (response[0].res == 'success') {
				$('.notifyjs-wrapper').remove();
				$.notify("" + response[0].msg + "", "success");
				$("#ModifyModal").modal("show");
				$("#ModifyModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#ModifyModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method .'/ModifyCombo/') ?>" +comboid);
				} else if (response[0].res == 'error') {
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
				
				$('.startdate').attr('min', maxDate);
				$('.enddate').attr('min', maxDate);
				});
				</script>
				<script src="<?= base_url($this->data->appTempletePath); ?>js/scripts/forms/checkbox-radio.min.js"></script>																																																																									