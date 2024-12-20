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
                           <div class="card-content collpase show">
                              <div class="card-body table-responsive">
                                 <div class="">
                                    <div class="col-xl-12 col-lg-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <h4 class="card-title">Stay Connect</h4>
                                          </div>
                                          <div class="card-content">
                                             <div class="card-body">
                                                <ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
                                                   <li class="nav-item">
                                                      <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" role="tab" aria-selected="true">Heading</a>
                                                   </li>
                                                   <li class="nav-item">
                                                      <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" role="tab" aria-selected="false">Social Media</a>
                                                   </li>
                                                </ul>
                                                <div class="tab-content px-1 pt-1">
                                                   <div class="tab-pane active" id="tab31" role="tabpanel" aria-labelledby="base-tab31">
                                                      <div class="row match-height">
                                                         <div class="col-sm-12">
                            <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateHeading'); ?>" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card card-dashboard">
                                            <div class="card-content collpase show">
                                                <div class="card-body py-1 px-0 table-responsive">
                                                    <div class="offcanvas-body">
                                                        <div class="container-fluid">

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1><span class="badge badge-secondary">Social Heading</span></h1>
                                                                </div>
															<?php 
															$list = $this->db->get("tbl_socialheading")->row();	
															?>
                                                                <div class="col-sm-12">
                                                                    <label>Social Heading</label>
                                                                    <div class="form-group">
                                                                        <textarea id="summernoteEditor" name="social_heading" class="form-control summernote">
                                                                        <?php echo !empty($list->social_heading) ? $list->social_heading : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="mt-2">
                                                                <button type="submit" class="mx-1 btn btn-primary btn-sm" style="padding: 8px;">Submit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane" id="tab32" role="tabpanel" aria-labelledby="base-tab32">
                                                      <div class="row match-height">
                                                         <div class="col-sm-12">
                                                            <div class="card card-dashboard">
                                                               <div class="card-content collpase show">
                                                                  <div class="card-header p-1">
                                                                     <button class="btn btn-primary" data-toggle="modal" data-target="#BottomAddModal">
                                                                     <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Social Media </button>
                                                                  </div>
                                                                  <div class="card-body table-responsive">
                                                                     <div class="">
                                                                        <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                                           <thead>
                                                                              <tr>
                                                                                 <th>#</th>
                                                                                 <?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
                                                                                 <th>Status</th>
                                                                                 <?php } ?>
                                                                                 <th>Link</th>
                                                                                 <th>Image</th>
                                                                                 <th>Created Date</th>
                                                                                 <?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
                                                                                 <th>Action</th>
                                                                                 <?php } ?>
                                                                              </tr>
                                                                           </thead>
	   <tbody>
	   
		  <?php 
		  if(!empty($social_media))
	   {
		  $srno = 1;
			 foreach ($social_media as $item) { ?>
		  <tr>
			 <td><?= $srno; ?></td>
			 <?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
			 <td>
				<div class="custom-control custom-switch custom-control-inline">
				   <input type="checkbox" class="custom-control-input" onchange="return Status(this,'brand','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
					  echo 'checked';
					  } ?> id="switch-id<?= $srno; ?>">
				   <label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
				</div>
			 </td>
			 <?php } ?>
			 <td><?= $item->name; ?></td>
			 <td>
				<?php
				   if (!empty($item->image)) {
				   ?>
				<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/brand/' .  $item->image); ?>" target="_blank"><img src="<?= base_url('uploads/brand/' .$item->image); ?>" style="height:50px;" /></a></label>
				<?php
				   }
				   ?>
			 </td>
			 <td><?= $item->date; ?></td>
			 <?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
			 <td>
				<div class="btn-group">
				   <?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
				   <a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
				   <?php } ?>
				   <?php if (($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
				   <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'tbl_stayconnect','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
				   <?php } ?>
				</div>
			 </td>
			 <?php } ?>
		  </tr>
		  <?php $srno++;
	   }} ?>
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
                     </div>
                     <br/>
                  </div>
            </div>
            </section>
         </div>
      </div>
      </div>
      <!--Modal Start-->
      <div class="modal fade" id="EditModal">
         <div class="modal-dialog">
            <div class="modal-content border-primary">
               <div class="modal-header bg-primary p-1">
                  <h5 class="modal-title text-white">Edit </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data" >
                  <div class="modal-body p-1">
                  </div>
                  <div class="modal-footer d-block p-1">
                     <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--Modal End-->
      <!--Modal Start-->
      <div class="modal fade" id="AddModal">
         <div class="modal-dialog">
            <div class="modal-content border-primary">
               <div class="modal-header bg-primary p-1">
                  <h5 class="modal-title text-white">Add Top Seller</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddTopSeller'); ?>" method="post" enctype="multipart/form-data">
                  <div class="modal-body p-1">
                     <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                     <div class="form-group">
                        <label class="col-form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Title" required>
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                        <input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
                     </div>
                  </div>
                  <div class="modal-footer d-block p-1">
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--Modal End-->
      <!--Modal Start-->
      <div class="modal fade" id="BottomAddModal">
         <div class="modal-dialog">
            <div class="modal-content border-primary">
               <div class="modal-header bg-primary p-1">
                  <h5 class="modal-title text-white">Add </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-1">

                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                                    <div class="form-group">
                                        <label class="col-form-label">Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Link" required>
                                        <?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                        <input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
                                        <?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
                                    </div>
                                </div>


                                <div class="modal-footer d-block p-1">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
                                </div>
                            </form>
            </div>
         </div>
      </div>
      <!--Modal End-->
      <!--Modal Edit-->
      <div class="modal fade" id="EditBottom">
         <div class="modal-dialog">
            <div class="modal-content border-primary">
               <div class="modal-header bg-primary p-1">
                  <h5 class="modal-title text-white">Edit Bottom</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateBottom'); ?>" method="post" enctype="multipart/form-data">
                  <div class="modal-body p-1"> 
                  </div>
                  <div class="modal-footer d-block p-1">
                     <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />
                     <button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit </button>
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
         function EditBottom(id) {
         $("#EditBottom").modal("show");
         $("#EditBottom .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
         $("#EditBottom .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditBottom/') ?>" + id);
         }
         
         
         
         
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
         
         
         
      </script>
   </body>
</html>