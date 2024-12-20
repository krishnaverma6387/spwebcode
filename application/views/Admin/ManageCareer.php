<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			p{
			margin-bottom:0 !important;
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
				<?php 
                    $permission='';
                    $role_type='admin';
                    if(!empty($this->permissionAuth) && ($this->userData->type=='subadmin')){
						$permission=$this->permissionAuth->career;
						$role_type='subadmin';
					}
				?>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12 p-0">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<div class="col-xl-12 col-lg-12 p-0">
													<div class="card">
														<div class="card-content">
															<div class="card-header p-0">
																<button class="btn btn-primary" data-toggle="modal" data-target="#Add">
																<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Job </button>
															</div>
															<div class="card-body p-0">
																<div class="row match-height">
																	<div class="col-sm-12 p-0">
																		<div class="card card-dashboard">
																			<div class="card-content collpase show">
																				<div class="card-body table-responsive">
																					<div class="">
																						<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																							<thead>
																								<tr>
																									<th>#</th>
																									<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?><th>Status</th><?php } ?>
																									<th>Title</th>
																									<th>Description</th>
																									<th>Mail</th>
																									<th>Created Date</th>
																									<th>Modified Date</th>
																									<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?><th>Action</th><?php } ?>
																								</tr>
																							</thead>
																							<tbody>
																								<?php $srno=1; 
																									if(!empty($list)){
																										foreach ($list as $item){ ?>
																										<tr>
																											<td><?= $srno; ?></td>
																											<?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
																												<td>
																													<div class="custom-control custom-switch custom-control-inline">
																														<input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																														<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																													</div>
																												</td>
																											<?php } ?>
																											<td><?= $item->title; ?></td>
																											<td><?= base64_decode($item->description); ?></td>
																											<td><?= $item->mail; ?></td>
																											<td><?= $item->created_at; ?></td>
																											<td><?= $item->modified_at; ?></td>
																											<?php if(($role_type=='subadmin' && $permission->edit) || ($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																												<td>
																													<div class="btn-group">
																														<?php if(($role_type=='subadmin' && $permission->edit) || $role_type=='admin'){?>
																															<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																														<?php } ?>
																														<?php if(($role_type=='subadmin' && $permission->delete) || $role_type=='admin'){?>
																															<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																														<?php } ?>
																													</div>
																												</td>
																											<?php } ?>
																										</tr>
																									<?php $srno++; } } ?>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>
																		<br/>
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
<div class="modal fade" id="Add">
	<div class="modal-dialog modal-lg">
		<div class="modal-content border-primary">
			<div class="modal-header bg-primary p-1">
				<h5 class="modal-title text-white">Add Job Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
				<div class="modal-body p-1">
					<div class="form-group p-0">
						<label class="col-form-label">Job Title<span class="text-danger"></span></label>
						<input type="text" class="form-control" required name="job_title" value="" placeholder="Job Title"  >
					</div> 
					<div class="form-group">
						<label class="col-form-label">Job Description<span class="text-danger">*</span></label>
						<textarea class="form-control summernote" name="desc" required>
							<b>Experience :</b> 2-6 Years<br><br>
							<b>Qualification :</b> Candidate must possess at least a Professional Certificate, Advanced Diploma, Higher Graduate , Bachelor’s Degree, Post Graduate Diploma or Professional Degree or equivalent. <br><br>
							<b>Preferred candidates :</b> from Digital Agencies, Media Agencies (social media), Advertising Agency, Creative Agencies. Digital media , online media, social networking Industry. <br><br>
							<b>Job Responsibilities :</b> <br>
							<p>1. Create designs, concepts, and sample layouts based on knowledge of layout principles and aesthetic design concepts.</p>
							<p>2. Determine size and arrangement of illustrative material and copy, and select style and size of type.</p>
							<p>3. Extensive use of Corel draw & Photoshop to create and generate new images. 4. Design eye-catching web and mobile banners for display ad campaigns.</p>
							<p>5. Design imagery for emails and landing pages.</p>
							
							
						</textarea>
					</div>
                   
                    
                    <div class="form-group">
                        <textarea name="mail" class="summernote form-control">
                        Mail us your resume at careers@slickpattern.com
                        </textarea>
                    </div>
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
<!--Modal End-->

<!--Modal Start-->
<div class="modal fade" id="EditModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content border-primary">
			<div class="modal-header bg-primary p-1">
				<h5 class="modal-title text-white">Edit Career Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm2">
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
<!--Modal End-->

<div id="loader"></div>

<?php require APPPATH.'views/Auth/Footer.php';?>
<?php require APPPATH.'views/Auth/JsLinks.php';?>

<script>
	
	
	function StatusSingleActive(e, table, where_column, where_value, column) {
		var status = true;
		var check = $(e).prop("checked");
		if (check) {
			swal({
				title: "Are you sure?",
				text: "You want to activate this !",
				icon: "warning",
				buttons: true,
				dangerMode: true
				}).then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
						type: "post",
						data: {
							'table': table,
							'column': column,
							'value': 'true',
							'where_column': where_column,
							'where_value': where_value
						},
						success: function(response) {
							swal("Activated successfully !", {
								icon: "success",
							});
							window.setTimeout(function() {
								location.reload();
							}, 1000);
						}
					});
					} else {
					window.setTimeout(function() {
						location.reload();
					}, 1000);
				}
			});
			} else {
			swal({
				title: "Are you sure?",
				text: "You want to deactivate this !",
				icon: "warning",
				buttons: true,
				dangerMode: true
				}).then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
						type: "post",
						data: {
							'table': table,
							'column': column,
							'value': 'false',
							'where_column': where_column,
							'where_value': where_value
						},
						success: function(response) {
							swal("Deactivated successfully !", {
								icon: "success",
							});
							window.setTimeout(function() {
								location.reload();
							}, 1000);
						}
					});
					} else {
					window.setTimeout(function() {
						location.reload();
					}, 1000);
				}
			});
		}
		return status;
	}
	
	
	$('#updatecookies').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtncookies');
		var spinAction = $('#updateSpincookies');
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
	
	$('#updateintellectual').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnintellectual');
		var spinAction = $('#updateSpinintellectual');
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
	
	$('#updateexchange').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnexchange');
		var spinAction = $('#updateSpinexchange');
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
	$('#updaterefund').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnrefund');
		var spinAction = $('#updateSpinrefund');
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
	$('#updatereturn').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnreturn');
		var spinAction = $('#updateSpinreturn');
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
	
	$('#updatetermscancellation').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnterm');
		var spinAction = $('#updateSpinterm');
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
	$('#updateshopping').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnshopping');
		var spinAction = $('#updateSpinshopping');
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
	$('#updatecoupon').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtncoupon');
		var spinAction = $('#updateSpincoupon');
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
	
	$('#updatetermscondition').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtntermcon');
		var spinAction = $('#updateSpintermcon');
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
	
	$('#updateshoppingguide').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnshoppingguide');
		var spinAction = $('#updateSpinshoppingguide');
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
	
	$('#updatesize').on('submit', function(e) {
		var formAction = $(this);
		var btnAction = $('#updateBtnsize');
		var spinAction = $('#updateSpinsize');
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
</script>
</body>
</html>																																								