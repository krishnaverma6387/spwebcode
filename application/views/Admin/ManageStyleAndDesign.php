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
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->designkey;?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Design Name</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($designlist as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->tabledesign; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><?= $item->name; ?></td>
																
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                                
                                                                <td>
                                                                    <div class="btn-group">
																		
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->tabledesign; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModalneck">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->neckkey;?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Neck Style</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($necklist as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->tableneck; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-idneck<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-idneck<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><?= $item->name; ?></td>
																
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                                
                                                                <td>
                                                                    <div class="btn-group">
																		
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->tableneck; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModalsleeve">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->sleevekey;?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Sleeve Style</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($sleevelist as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->tablesleeve; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-idsleeve<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-idsleeve<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><?= $item->name; ?></td>
																
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                                
                                                                <td>
                                                                    <div class="btn-group">
																		
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->tablesleeve; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModalcloth">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?=$this->data->clothkey;?></button>
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Cloth Type</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($clothlist as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->tablecloth; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-idcloth<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-idcloth<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><?= $item->name; ?></td>
																
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                                
                                                                <td>
                                                                    <div class="btn-group">
																		
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->tablecloth; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
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
                                    <h5 class="modal-title text-white">Add <?=$this->data->designkey;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
									</button>
								</div>
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddDesign'); ?>" method="post" enctype="multipart/form-data" id="addForm">
                                    <div class="modal-body p-1">
                                        
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                        value="<?= $this->security->get_csrf_hash(); ?>" />
                                        <div class="form-group">
                                            <label class="col-form-label">Design Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-capitalize" name="name" placeholder="Design Name" required >
                                            <?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
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
					<!--Modal Start-->
                    <div class="modal fade" id="AddModalneck">
                        <div class="modal-dialog">
                            <div class="modal-content border-primary">
                                <div class="modal-header bg-primary p-1">
                                    <h5 class="modal-title text-white">Add <?=$this->data->neckkey;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
									</button>
								</div>
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddNeckstyle'); ?>" method="post" enctype="multipart/form-data" id="addFormNeck">
                                    <div class="modal-body p-1">
                                        
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                        value="<?= $this->security->get_csrf_hash(); ?>" />
                                        <div class="form-group">
                                            <label class="col-form-label">Neck Style <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-capitalize" name="name" placeholder="Neck Style " required >
                                            <?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
									</div>
                                    <div class="modal-footer d-block p-1">
                                        <button type="submit" class="btn btn-primary" id="addBtnneck"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpinneck" style="display:none;"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
                    <!--Modal End-->
					
					<!--Modal Start-->
                    <div class="modal fade" id="AddModalsleeve">
                        <div class="modal-dialog">
                            <div class="modal-content border-primary">
                                <div class="modal-header bg-primary p-1">
                                    <h5 class="modal-title text-white">Add <?=$this->data->sleevekey;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
									</button>
								</div>
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddSleevestyle'); ?>" method="post" enctype="multipart/form-data" id="addFormSleeve">
                                    <div class="modal-body p-1">
                                        
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                        value="<?= $this->security->get_csrf_hash(); ?>" />
                                        <div class="form-group">
                                            <label class="col-form-label">Sleeve Style <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-capitalize" name="name" placeholder="Sleeve Style " required >
                                            <?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
									</div>
                                    <div class="modal-footer d-block p-1">
                                        <button type="submit" class="btn btn-primary" id="addBtnsleeve"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpinsleeve" style="display:none;"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
                    <!--Modal End-->
					<!--Modal Start-->
                    <div class="modal fade" id="AddModalcloth">
                        <div class="modal-dialog">
                            <div class="modal-content border-primary">
                                <div class="modal-header bg-primary p-1">
                                    <h5 class="modal-title text-white">Add <?=$this->data->clothkey;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
									</button>
								</div>
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddClothType'); ?>" method="post" enctype="multipart/form-data" id="addFormCloth">
                                    <div class="modal-body p-1">
                                        
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                        value="<?= $this->security->get_csrf_hash(); ?>" />
                                        <div class="form-group">
                                            <label class="col-form-label">Cloth Type <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-capitalize" name="name" placeholder="Cloth Type " required >
                                            <?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
									</div>
                                    <div class="modal-footer d-block p-1">
                                        <button type="submit" class="btn btn-primary" id="addBtncloth"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpincloth" style="display:none;"></i></button>
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
                                    <h5 class="modal-title text-white">Edit <?=$this->data->key;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
									</button>
								</div>
                                
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
                    <!--Modal End-->
				</div>
			</div>
		</div>
        <?php require APPPATH.'views/Auth/Footer.php';?>
        <?php require APPPATH.'views/Auth/JsLinks.php';?>
		
		<script>
			$('#addFormNeck').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtnneck');
				var spinAction = $('#addSpinneck');
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
			
			$('#addFormSleeve').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtnsleeve');
				var spinAction = $('#addSpinsleeve');
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
			
			$('#addFormCloth').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtncloth');
				var spinAction = $('#addSpincloth');
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