<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			#style2{
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			backgrount-color: transparent;
			width:100px;
			height: 100px;
			border: 1px solid red;
			cursor: pointer;
			}
			
			#style1::-webkit-color-swatch{
			border-radius: 50%;
			}
			
			#style1::-moz-color-swatch{
			border-radius: 50%;
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
                <div class="content-body">
                    <section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Permissions</th>
															<th>Role</th>
                                                            <th>Name</th>
                                                            <th>Mobile</th>
                                                            <th>Email</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($list as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><a href="javascript:void(0);" class="btn btn-sm btn-primary" onclick="ShowPermission('<?= base64_encode($item->permission); ?>');">View</a></td>    
                                                                <td><?= $item->role; ?></td>
																<td><?= $item->name; ?></td>   
																<td><?= $item->mobile; ?></td>  
																<td><?= $item->email; ?></td>
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="<?= base_url($this->data->controller.'/'.$this->data->method.'/Edit/'.$item->id)?>" class="btn btn-sm btn-outline-info waves-effect waves-light" > <i class="fa fa fa-edit"></i></a>
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
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
					<!--Modal Start-->
                    <div class="modal fade" id="AssignPermissionModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content border-primary">
                                <div class="modal-header bg-primary p-1">
                                    <h5 class="modal-title text-white">Assign Permissions</h5>
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
				</div>
			</div>
		</div>
        <?php require APPPATH.'views/Auth/Footer.php';?>
        <?php require APPPATH.'views/Auth/JsLinks.php';?>
		<script>
			function ShowPermission(data){
				$("#AssignPermissionModal").modal("show");
				$("#AssignPermissionModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
				$("#AssignPermissionModal .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/AssignPermission/') ?>" + data);
			} 
		</script>
	</body>
</html>