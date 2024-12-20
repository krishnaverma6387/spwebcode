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
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-header p-1">
										<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Survey Question</button>
									</div>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<h3 class="text-danger">Website Survey</h3>
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<th>Status</th>
															<th>Report</th>
															<th>Category</th>
															<th>Question</th>
															<th>Answer</th>
															<th>Created Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php $srno = 1;
															
															foreach ($list as $item)
															{
																$city = $this->db->get_where('faqs_category' ,  array('id' => $item->category_id))->row();
																
															?>
															<tr>
																<td><?= $srno; ?></td>
																<td>
																	<div class="custom-control custom-switch custom-control-inline">
																		<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true')
																			{
																				echo 'checked';
																			} ?> id="switch-id<?= $srno; ?>">
																			<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																		</div>
																	</td>
																	<td><a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/ViewReport/'.$item->qid)?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-eye">&nbsp;view</a></td>
																		<td><?php if(!empty($city->name)){echo$city->name; }?></td>
																		<td><?= $item->question; ?></td>
																		<td><?= $item->answer; ?></td>
																		<td><?= $item->created_at; ?></td>
																		<td>
																			<div class="btn-group">
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->qid; ?>')"> <i class="fa fa fa-edit"></i></a>
																				<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->qid; ?>','','')"> <i class="fa fa-trash"></i> </a>
																			</div>
																		</td>
																	</tr>
																	<?php $srno++;
																	}
																?>
															</tbody>
														</table>
													</div>
													<div class="">
														<h3 class="text-success">App Survey</h3>
														<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Status</th>
																	<th>Report</th>
																	<th>Category</th>
																	<th>Question</th>
																	<th>Answer</th>
																	<th>Created Date</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php $srno = 1;
																	
																	foreach ($app_list as $item)
																	{
																		$city = $this->db->get_where('faqs_category' ,  array('id' => $item->category_id))->row();
																		
																	?>
																	<tr>
																		<td><?= $srno; ?></td>
																		<td>
																			<div class="custom-control custom-switch custom-control-inline">
																				<input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true')
																					{
																						echo 'checked';
																					} ?> id="switch-id<?= $srno; ?>">
																					<label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
																			</div>
																		</td>
																		<td><a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/ViewReport/'.$item->qid)?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-eye">&nbsp;view</a></td>
																			<td><?php if(!empty($city->name)){echo$city->name; }?></td>
																			<td><?= $item->question; ?></td>
																			<td><?= $item->answer; ?></td>
																			<td><?= $item->created_at; ?></td>
																			<td>
																				<div class="btn-group">
																					<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->qid; ?>')"> <i class="fa fa fa-edit"></i></a>
																					<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->qid; ?>','','')"> <i class="fa fa-trash"></i> </a>
																				</div>
																			</td>
																		</tr>
																		<?php $srno++;
																		}
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
						<!--Modal Start-->
						<div class="modal fade" id="AddModal">
							<div class="modal-dialog">
								<div class="modal-content border-primary">
									<div class="modal-header bg-primary p-1">
										<h5 class="modal-title text-white">Add <?= $this->data->key; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
										
										
										<div class="modal-body p-1">
											
											<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
											
											<div class="form-group">
												<label class="col-form-label">Category<span class="text-danger">*</span></label>
												<select class="text-capitalize form-control" name="category" required>
													<option selected disabled>Select</option>
													<?php
														foreach ($categorylist as $each)
														{ 
															if($each->name=='Website Survey' || $each->name=='App Survey'){
															?>
															<option value="<?= $each->id ?>"><?= $each->name ?></option>
														<?php }  } ?>
												</select>
												<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
											</div>
											<div class="form-group">
												<label class="col-form-label">Question <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="question" placeholder="Enter Question" required>
												<?php echo form_error("question", "<p class='text-danger'>", "</p>"); ?>
											</div>
											<div class="form-group">
												<label class="col-form-label">Option<span class="text-danger">*</span></label>
												<div id="option-container">
													<span class="d-flex"><input type="text" name="option[]" class="form-control"><button type="button" class="btn btn-primary" onclick="appendOption()" style="margin-left:4px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></span>
												</div>
												<?php echo form_error("answer", "<p class='text-danger' >", "</p>"); ?>
											</div>
											
										</div>
										
										<div class="modal-footer d-block p-1">
											<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--Modal End-->
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
									
									<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
					</div>
				</div>
			</div>
			
			<?php require APPPATH . 'views/Auth/Footer.php'; ?>
			<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
			<script>
				function appendOption(){
					$('#option-container').append('<span class="d-flex mt-1"><input type="text" name="option[]" class="form-control"><button type="button" class="btn btn-danger" style="margin-left:4px;" onclick="removeOption(this)"><i class="fa fa-minus-circle" ></i></button></span>'); 
				}
				
				function removeOption(e){
					$(e).parent().remove();
				}
			</script>
		</body>
	</html>										