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
							
							<h5 class="content-header-title float-left pr-1 mb-0"><?= $userdata->name; ?> Details</h5>
							
							<div class="breadcrumb-wrapper d-none d-sm-block">
								
								<ol class="breadcrumb p-0 mb-0 pl-1">
									
									<li class="breadcrumb-item">
										
										<a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
										
									</li>
									
									<li class="breadcrumb-item">
										
										<a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
										
									</li>
									
									<li class="breadcrumb-item active"><?= $userdata->name; ?> Details</li>
									
								</ol>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->user;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					
					<section class="users-view">
						<!-- users view media object start -->
						<div class="row">
							<div class="col-12">
								<div class="media mb-2 p-1 bg-dark bg-lighten-5 rounded">
									<a class="mr-1 text-primary" href="#" style="border-radius: 50%; border: 2px solid #00B5B8;">
										<?php
											
											if(!empty($userdata->image))
											{ 
											?>
											<img src="<?= base_url('uploads/' . $this->data->folder . '/' . $userdata->image); ?>" alt="users view avatar"
											class="users-avatar-shadow rounded-circle" height="64" width="64">
											<?php
											}
											else
											{
											?>
											<img src="<?=base_url($this->data->appTempletePath);?>images/logo/logo.png" alt="users view avatar"
											class="users-avatar-shadow rounded-circle" height="64" width="64">
											<?php
											}
										?>
									</a>
									<div class="media-body pt-25 text-primary">
										<h4 class="media-heading"><span class="users-view-name"><?= $userdata->name; ?></span><span
										class="text-muted font-medium-1"></span></h4>
										<span>ID:</span>
										<span class="users-view-id"><?= $userdata->id; ?></span>
									</div>
								</div>
							</div>
							
						</div>
						<!-- users view media object ends -->
						
						<!-- users view card details start -->
						<div class="card">
							<div class="card-content">
								<div class="card-body p-0">
									<div class="col-12 p-0">
										<table class="table table-borderless">
											<tbody>
												<tr>
													<td>Name:</td>
													<td ><?= $userdata->name; ?></td>
												</tr>
												<tr>
													<td>Email:</td>
													<td ><?= $userdata->email; ?></td>
												</tr>
												<tr>
													<td>Mobile:</td>
													<td ><?= $userdata->mobile; ?></td>
												</tr>
												<tr>
													<td>Gender:</td>
													<td ><?= $userdata->gender; ?></td>
												</tr>
												<tr>
													<td>DOB:</td>
													<td ><?= $userdata->dob; ?></td>
												</tr>
												<tr>
													<td>User Type:</td>
													<td ><span class="badge bg-primary"><?= ucfirst($userdata->user_type); ?></span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- users view card details ends -->
						
					</section>
					
					<section id="form-action-layouts">
						<div class="row match-height">	
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-header pb-0">
											<h4>Wallet History</h4>
											<button class="btn btn-primary d-none" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Money</button>
										</div>
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<th>Balance</th>
															<th>Reward Points</th>
															<th>Expire(In days)</th>
															<th>Remark</th>
															<th>Created At</th>
															<th>Modified At</th>
															<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
														</tr>
														
													</thead>
													<tbody>
														<?php $srno=1; foreach ($walletdata as $items){ ?>
															<tr>
																<td><?= $srno; ?></td>
																<td><?= (int)$items->balance;?></td>
																<td><?= (int)$items->coins; ?></td>
																<td><?= (int)$items->expire_date; ?></td>
																<td>Credited By Admin</td>
																<td><?= $items->created_at; ?></td>
																<td><?= $items->modified_at; ?></td>
																<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																<td>
                                                                    <div class="btn-group">
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'user_wallet','id','<?= $items->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
																<?php } ?>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br/>
							</div>
						</div>
					</section>
					<section id="form-action-layouts">
						<div class="row match-height">	
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-header pb-0">
											<h4>Order History</h4>
											<button class="btn btn-primary d-none" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Money</button>
										</div>
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Action</th>
                                                            <th>Order ID</th>
                                                            <th>Payment Method</th>
                                                            <th>Payment Status</th>
															<!--<th>Order Status</th>-->
                                                            <th>Amount</th>
                                                            <th>Created at</th>    
                                                            <th>Modified at</th>    
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php 
															$count = 1;
															if (!empty($orders)) {
																foreach ($orders as $data) { ?> 
																<tr>
																	<td class="text-center"><input type="hidden" value="<?= $data['id']; ?>"
																	id="getId"><?= $count++; ?></td>
																	<td>
																		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
																			<a href="<?=base_url('Admin/ManageOrders/View/'.$data['id'])?>" target="_blank" class="btn btn-sm btn-primary" ><i class="bi bi-eye-fill"></i></a>
																		</div>
																	</td>
																	<td><?= $data['orderid'] ?></td>
																	<?php
																		$oid =  $data['orderid'];
																	?>
																	<td><?= $data['pay_mode'] ?></td>
																	<td class="<?php if($data['PaymentStatus']=='Success'){echo "text-success";}else{echo "text-danger";}?>"><?= $data['PaymentStatus'] ?></td>
																	<!--<td><?= ucfirst($data["order_status"]) ?></td>-->
																	<td>&#8377;<?= $data["amount"] ?></td>
																	<td><?= $data['created_at'] ?></td>
																	<td><?= $data['modified_at'] ?></td>
																</tr>
																<?php }
															} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br/>
							</div>
						</div>
					</section>
					<section id="form-action-layouts">
						<div class="row match-height">	
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-header pb-0">
											<h4>Ratings & Review For Product&Vendor</h4>
												<button class="btn btn-primary d-none" data-toggle="modal" data-target="#AddModal">
												<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Money</button>
											</div>
											<div class="card-body pt-1">
												<div class="table-responsive">
													<?php 
														$count = 1;
														$userid=$this->uri->segment(4);
														$product_review=$this->db->where('userid',$userid)->get('tbl_review',['review_type'=>'product'])->result();
														if (!empty($product_review)) {	
														?>
														<table class="table  table-striped table-bordered mt-1" style="width:100%;">
															<thead>
																<tr style="background-color:lavender;">
																	<th colspan="7">Product Review</th>	
																</tr>
																<tr>
																	<th>#</th>
																	<th>Action</th>
																	<th>Product Name</th>
																	<th>Star Ratings</th>
																	<th>Review Title-Message</th>
																	<th>Created Date</th>
																	<th>Modified Date</th> 
																</tr>
															</thead>
															<tbody>
																<?php $srno=1; foreach ($product_review as $item){ ?>
																	<tr>
																		<td><?= $srno; ?></td>
																		<td>
																			<select class="form-control" style="height: 28px;  appearance: auto; padding: 0;" onchange="UpdateStatus('<?= $item->id?>',this.value)">
																				<option selected disabled>new</option>
																				<option value="published" <?php if($item->is_status=='published'){echo 'selected disabled';}?>>Published</option>
																				<option value="unpublished" <?php if($item->is_status=='unpublished'){echo 'selected disabled';}?>>Unpublished</option>
																				<option value="deleted" <?php if($item->is_status=='deleted'){echo 'selected disabled';}?>>Trashed</option>
																				<option value="drafted" <?php if($item->is_status=='drafted'){echo 'selected disabled';}?>>Drafted</option>
																			</select>
																		</td>
																		<td>
																			<?php
																				if($item->is_combo=='false'){
																					$product=$this->db->get_where('products',array('id'=> $item->product_id))->row();
																					if(!empty($product)){
																						echo $product->name;
																					}
																				}
																				else{
																					$product=$this->db->get_where('tbl_combo',array('id'=> $item->product_id))->row();
																					if(!empty($product)){
																						echo $product->name;
																					} 
																				}
																			?>
																		</td>
																		<?php if($this->uri->segment(3)=='VendorReview'){
																			$vendor_details=$this->db->get_where('tbl_vendor',['id'=>$item->vendor_id])->row();
																			if(!empty($vendor_details)){
																			?>
																			<td><a href="<?= base_url('Admin/ManageVendor/VendorFullDetails/'.$item->vendor_id)?>" target="_blank" class="badge badge-primary"><?= $vendor_details->name; ?></a></td>
																		<?php } } ?>
																		<td><?= $item->rating; ?></td>
																		<td>
																			<strong><?= $item->review_title; ?></strong></br>
																			<?= $item->review_message; ?> 
																		</td>
																		<td><?= $item->created_at; ?></td>
																		<td><?= $item->modified_at; ?></td>
																	</tr>
																<?php $srno++; } ?>
															</tbody>
														</table>
													<?php } ?>
													<?php 
														$count = 1;
														$userid=$this->uri->segment(4);
														$vendor_review=$this->db->where('userid',$userid)->get_where('tbl_review',['review_type'=>'vendor'])->result();
														if (!empty($vendor_review)) {	
														?>
														<table class="table  table-striped table-bordered mt-1" style="width:100%;">
															<thead>
																<tr style="background-color:lavender;">
																	<th colspan="8">Vendor Review</th>	
																</tr>
																<tr>
																	<th>#</th>
																	<th>Action</th>
																	<th>Product Name</th>
																	<th>Vendor Name</th>
																	<th>Star Ratings</th>
																	<th>Review Title-Message</th> 
																	<th>Created Date</th>
																	<th>Modified Date</th> 
																</tr>
															</thead>
															<tbody>
																<?php $srno=1; foreach ($vendor_review as $item){ ?>
																	<tr>
																		<td><?= $srno; ?></td>
																		<td>
																			<select class="form-control" style="height: 28px;  appearance: auto; padding: 0;" onchange="UpdateStatus('<?= $item->id?>',this.value)">
																				<option selected disabled>new</option>
																				<option value="published" <?php if($item->is_status=='published'){echo 'selected disabled';}?>>Published</option>
																				<option value="unpublished" <?php if($item->is_status=='unpublished'){echo 'selected disabled';}?>>Unpublished</option>
																				<option value="deleted" <?php if($item->is_status=='deleted'){echo 'selected disabled';}?>>Trashed</option>
																				<option value="drafted" <?php if($item->is_status=='drafted'){echo 'selected disabled';}?>>Drafted</option>
																			</select>
																		</td>
																		<td>
																			<?php
																				if($item->is_combo=='false'){
																					$product=$this->db->get_where('products',array('id'=> $item->product_id))->row();
																					if(!empty($product)){
																						echo $product->name;
																					}
																				}
																				else{
																					$product=$this->db->get_where('tbl_combo',array('id'=> $item->product_id))->row();
																					if(!empty($product)){
																						echo $product->name;
																					} 
																				}
																			?>
																		</td>
																		<?php 
																			$vendor_details=$this->db->get_where('tbl_vendor',['id'=>$item->vendor_id])->row();
																			if(!empty($vendor_details)){
																			?>
																			<td><a href="<?= base_url('Admin/ManageVendor/VendorFullDetails/'.$item->vendor_id)?>" target="_blank" class="badge badge-primary"><?= $vendor_details->name; ?></a></td>
																		<?php } ?>
																		<td><?= $item->rating; ?></td>
																		<td>
																			<strong><?= $item->review_title; ?></strong></br>
																			<?= $item->review_message; ?> 
																		</td>
																		<td><?= $item->created_at; ?></td>
																		<td><?= $item->modified_at; ?></td>
																	</tr>
																<?php $srno++; } ?>
															</tbody>
														</table>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<br/>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<!--Modal Start-->
			<div class="modal fade" id="UserModal">
				<div class="modal-dialog">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">User Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body p-1">
							
						</div>
						<div class="modal-footer d-block p-1">
							
						</div>
					</div>
				</div>
			</div>
			<!--Modal End-->
			<!--Modal Start-->
			<div class="modal fade" id="ViewModal"> 
				<div class="modal-dialog modal-lg">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">Show Order Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body p-1">
							
						</div>
					</div>
				</div>
			</div>
			<!--Modal End-->
			
			<!--Modal Start-->
			<div class="modal fade" id="AddModal">
				<div class="modal-dialog">
					<div class="modal-content border-primary">
						<div class="modal-header bg-primary p-1">
							<h5 class="modal-title text-white">Add Money</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddMoney/'.$userdata->id.''); ?>" method="post" enctype="multipart/form-data" id="addForm">
							<div class="modal-body p-1">
								
								<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
								<input type="hidden" name="userid" value="<?= $userdata->id;?>" />
								<div class="form-group">
									<label class="col-form-label">Amount <span class="text-danger">*</span></label>
									<input type="number" class="form-control" name="amount" placeholder="Enter Amount" required >
									<?php echo form_error("amount", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Remark<span class="text-danger">*</span></label>
									<input type="text" value="Credit From Admin" readonly class="form-control" name="remark" placeholder="Enter Remark" required >
									<?php echo form_error("remark", "<p class='text-danger' >", "</p>"); ?>
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
			<?php require APPPATH.'views/Auth/Footer.php';?>
			<?php require APPPATH.'views/Auth/JsLinks.php';?>
			<script>
				function UpdateStatus(id,value) {
					var status = true;
					swal({
						title: "Are you sure?",
						text: "You want "+value+" !", 
						icon: "warning",
						buttons: true,
						dangerMode: true
						}).then((willDelete) => {
						if (willDelete) {
							$.ajax({
								url: "<?php echo base_url("Auth/UpdateReviewStatus"); ?>",
								type: "post",
								data: {
									'id': id,
									'value': value,
								},
								success: function(response) {
									swal(value+" Successfully!", {
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
		</body>
	</html>																									