<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
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
										<button class="btn btn-secondary" >Active Look : <?= $activecombo?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Expert</th>
                                                            <th>Verification</th>
                                                            <th>Images</th>
															<th>Products</th>
															<th>Purchase Price</th>
															<th>Sell Price</th>
                                                            <th>Look Name</th>
                                                            <th>Description</th>
                                                            <th>Beauty Tips</th>
                                                            <th>Why Created</th>
                                                            <th>Body Shape</th>
                                                            <th>Pre Book</th>
                                                            <th>Category</th>
                                                            <th>Sub-Category</th>
                                                            <th>Remark</th>
                                                            <th>Date Time</th>
														</tr>

													</thead>
                                                    <tbody>
														<?php
															$sr=1;
															foreach($combolist as $each)
															{
																$item = $this->db->get_where('combo_item',array('combo_id'=>$each->id))->result();
																$category = $this->db->get_where('categories', array('id' => $each->category_id))->row();
																$subcat = $this->db->get_where('sub_category', array('id' => $each->subcat_id))->row();
															?>
															<tr>
																<td><?= $sr;?></td>
																<td>
																	<?php
																		if(!empty($each->expert_id))
																		{														
																		?>
																		<button onclick="ExpertDetails('<?= $each->expert_id?>')" class="btn btn-secondary "> <i class="fa fa-user-circle"></i></button>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if($each->approve_status == "pending")
																		{
																		?>
																		<button onclick="ApproveCombo('<?= $each->id?>')" class="btn btn-warning btn-sm">Approve <i class="fa fa-check"></i></button><br/><br/>
																		<button onclick="RejectCombo('<?= $each->id?>','<?= $this->data->table?>','rejected')" class="btn btn-danger btn-sm">Reject <i class="fa fa-times"></i></button><br/><br/>
																		<button onclick="ModifyCombo('<?= $each->id?>')" class="btn btn-danger btn-sm">Modify </button>
																		<?php
																		}
																		elseif($each->approve_status == "approved")
																		{
																		?>
																		<button class="btn btn-success btn-sm"><?= ucwords($each->approve_status);?></button>
																		
																		<?php
																		}
																		elseif($each->approve_status == "rejected")
																		{
																		?>
																		<button class="btn btn-danger btn-sm"><?= ucwords($each->approve_status);?></button>
																		
																		<?php
																		}
																		elseif($each->approve_status == "modification")
																		{
																		?>
																		<button class="btn btn-danger btn-sm"><?= ucwords($each->approve_status);?></button>
																		
																		<?php
																		}
																	?>
																	
																	</td>
																<td>
																	<button onclick="Comboimg('<?= $each->id?>')" class="btn btn-primary"><i class="fa fa-eye"></i> View Images</button>
																</td>
																<td>
																	<?php
																		foreach($item as $pro)
																		{
																			$product = $this->db->get_where('products',array('id'=>$pro->product_id))->row();
																			
																		?>
																		<a href="<?= base_url().$this->data->controller.'/ManageProduct/ViewProduct/'.$product->id?>" class="btn btn-danger btn-sm mt-1"><?= ucwords($product->name);?>
																			<br/>
																			<?= $pro->size;?>
																		</a>
																		
																		<?php
																		}
																	?>
																</td>
																<td><?= $each->purchase_price;?></td>
																<td><?= $each->discount_price?></td>
																<td><?= $each->name?></td>
																<td><?= $each->description?></td>
																<td><?= $each->beautytips?></td>
																<td><?= $each->why_created?></td>
																<td><?= $each->bodyshape?></td>
																<td><?php if($each->prebook_status == 'true'){echo "Yes";}else{echo "No";}?></td>
																<td><?php if(!empty($category->name)){ echo $category->name; }else{echo "Category Not Found";}  ?></td>
																<td><?php if(!empty($subcat->name)){ echo $subcat->name; }else{echo "Sub-Category Not Found";}  ?></td>
																<td><?= $each->remark?></td>
																<td><?= $each->created_at?></td>
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
		
		<!-- Modal -->
		<div class="modal fade" id="ImgModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Look Images</h5>
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
		<div class="modal fade" id="ExpertModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Fashion Expert Details</h5>
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
		<div class="modal fade" id="ApproveModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Approve Look</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AppoveComboDetails'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
		
		<!-- Modal -->
		<div class="modal fade" id="ModifyModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modification Look</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/ModifyComboDetails'); ?>" method="post" enctype="multipart/form-data" id="modifyForm">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
							value="<?= $this->security->get_csrf_hash(); ?>" />
							<button type="submit" class="btn btn-primary" id="updateBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin3" style="display:none;"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="ImgModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Look Images</h5>
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
		
		<!-- Modal -->
		<div class="modal fade " id="EditImage" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Look Image</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateImageData'); ?>" method="post" enctype="multipart/form-data" id="updateForm2">
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
							value="<?= $this->security->get_csrf_hash(); ?>" />
							<button type="submit" class="btn btn-primary" id="updateBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin2" style="display:none;"></i></button>
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
			
			function ApproveCombo(id) {
				$("#ApproveModal").modal("show");
				$("#ApproveModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#ApproveModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method .'/ApproveCombo/') ?>" + id);
			}
			
			function ModifyCombo(id) {
				$("#ModifyModal").modal("show");
				$("#ModifyModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#ModifyModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method .'/ModifyCombo/') ?>" + id);
			}
			
			$('#modifyForm').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#updateBtn3');
				var spinAction = $('#updateSpin3');
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
			
			function RejectCombo(id, table, value) {
				var status = true;
				swal({
					title: "Are you sure?",
					text: "You want Reject this Combo!",
					icon: "warning",
					buttons: true,
					dangerMode: true
					}).then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/RejectCombo"); ?>",
							type: "post",
							data: {
								'table': table,
								'id': id,
								'value': value,
							},
							success: function(response) {
								swal("Combo Successfully Rejected !", {
									icon: "success",
								});
								location.reload();
							},
							error: function() {
								window.location.reload();
							}
						});
					}
				});
				return status;
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
		
		
	</body>
</html>