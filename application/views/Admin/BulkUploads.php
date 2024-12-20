<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
		<link rel="stylesheet" href="<?= base_url('assets/website/assets/css/jquery.ui.plupload.css')?>" type="text/css" />
		<style>
			.plupload_container{
			padding:0;
			}
			.plupload_header_title,.plupload_header_text{
			color:black;
			}
			.plupload_header_content{
			padding-left:12px;
			background:none;
			}
			.plupload_logo{
			display:none;
			background:none;
			}
			.plupload_filelist .plupload_file_name {
			width: unset  !important;
			}
			.plupload_total_file_size,.plupload_total_status{
			margin-top: 12px;
			text-align: center !important;
			}
			.copy-confirmation{
			background: #00B5B8!important;
			color: white;
			position: absolute;
			top: 8px;
			border-radius: 3px;
			padding: 0px 5px;
			}
			
			#table_id_paginate
			{
			display:none !important;
			}
			
			.dataTables_filter
			{
			display:none !important;
			}
			
			.pagination-circular li a{
			margin: 0 2px;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 35px;
			width: 35px;
			background:grey;
			// box-shadow: inset 0 2px 4px 0 #ffffff60, inset 0 -3px 3px 0 #00000031, 1px 1px 9px 0 #061d6280;
			/* box-shadow: 1px 1px 9px #00000061; */
			text-transform:uppercase;
			font-size:14px;
			
			}
			
			.pagination-circular li.active, .pagination-circular li.active a {
			background:black;
			}
			
			.pagination-circular li #next{
			width:50px;
			background:#6842ff;
			height:45px;
			text-transform:uppercase;
			
			}
			.pagination-circular li #next:hover{
			background:#7a5deb;
			}
			
			.pagination-circular #next a{
			width:50px;
			background:blue;
			height:35px;
			text-transform:uppercase;
			
			}
			.pagination-circular #next a:hover{
			background:#1a72e9;
			}
			
			.pagination-circular li #previous{
			width:50px;
			background:#6842ff;
			height:45px;
			text-transform:uppercase;
			}
			.pagination-circular li #previous:hover{
			
			background:#7a5deb;
			}
			
			.pagination-circular #previous a{
			width:50px;
			background:blue;
			height:35px;
			text-transform:uppercase;
			}
			.pagination-circular #previous a:hover{
			/* hjkj */
			
			background:#1a72e9;;
			}
			
			
			.pagination-circular li.disabled {
			border: 1px solid #cacaca;
			}
			
			.pagination-circular a {
			color:white;
			text-decoration:none;
			}
			
			.pagination-circular li:not(.disabled):hover a {
			background:#28293d;
			
			}
			
			.pagination-circular li  {
			transition: background 0.15s ease-in, color 0.15s ease-in;
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
									<div class="card-content collpase show">
										<div class="card-body py-1 table-responsive">
											<div id="uploader">
											</div>
										</div>
									</div>
								</div>
							</div><br>
							<div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
												<!-- Search Here -->
												<form action="<?php echo base_url('Admin/BulkUploads'); ?>" method="post">
													<div class="row mb-2">
														<div class="col-sm-4"></div>
														<div class="col-sm-8 d-flex justify-content-end">
															<div class="row m-0 justify-content-end">
																<div class="col-sm-10 p-0 d-flex">
																	<input placeholder="Search here..." type="text" name="search" class="form-control" style="border-radius:0;height: 33px;" />
																	<button class="btn btn-primary btn-md" type="submit" style="border-radius:0; height: 33px; padding: 4px 12px;"><i class="fa fa-search" aria-hidden="true"></i></button>
																</div>
															</div>
														</div>
													</div>
												</form>
												<!-- Search Here -->
                                                <table class="table table-striped table-bordered" style="width:100%;" id="table_id">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Image</th>
                                                            <th>File Name</th>
                                                            <th>Copy</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php 
															if(!empty($this->uri->segment(3)) AND $this->uri->segment(3)!='Search'){
																$srno=$this->uri->segment(3)+1;
															}
															else{
																$srno=1; 
															}
															
															foreach ($files as $filename){ 
																$file= basename($filename); 
															?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
																	<img src="<?= base_url('uploads/product/'.$file); ?>" style="height:80px;" />
																</td>
                                                                <td><?= $file ?></td>
                                                                <td style="position:relative;"><button class="btn btn-sm btn-primary copy-btn" style="min-width: 48px;" data-copy-on-click="<?=$file ?>"><i class="fa-solid fa-copy"></i></button></td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return DeleteImage(this,'<?=base64_encode($file)?>')"> <i class="fa fa-trash"></i> </a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
												<!-- Pagination Start Here Link -->
												<?= $this->pagination->create_links(); ?>
												<!-- Pagination End Here Link -->
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
		
		<?php require APPPATH . 'views/Auth/Footer.php'; ?>
		<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		
		<!-- production -->
		<script type="text/javascript" src="<?= base_url('assets/website/assets/js/plupload.full.min.js')?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/website/assets/js/jquery.ui.plupload.js')?>"></script>
		<script type="text/javascript">
			
			$('#table_id').DataTable({
				"order": [[0, "asc"]],   // this code is order by desc 
				"bInfo" : false,
				"autoWidth":true, 
				responsive:true,
				pageLength: 50, 
				dom: 'iBfrtp',
				"buttons": [
				]
			});
			
			// Initialize the widget when the DOM is ready
			$(function() {
				$("#uploader").plupload({
					// General settings
					runtimes : 'html5,flash,silverlight,html4',
					url : '<?=base_url($this->data->controller.'/'.$this->data->method.'/Add')?>',
					
					// User can upload no more then 20 files in one go (sets multiple_queues to false)
					max_file_count: 200,
					chunk_size: '1mb',
					
					// Resize images on clientside if we can
					// resize : {
						// width : 200, 
						// height : 200, 
						// quality : 90,
						// crop: false 
					// }, 
					
					filters : {
						// Maximum file size
						max_file_size : '1000mb',
						// Specify what files to browse for
						mime_types: [
						{title : "Image files", extensions : "jpg,gif,png"},
						{title : "Zip files", extensions : "zip"}
						]
					},
					
					// Rename files by clicking on their titles
					rename: true,
					
					// Sort files
					sortable: true,
					
					// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
					dragdrop: true,
					
					// Views to activate
					views: {
						list: true,
						thumbs: true, // Show thumbs
						active: 'thumbs'
					},
					
					// Flash settings
					flash_swf_url : '<?= base_url('assets/website/assets/js/Moxie.swf')?>',
					
					// Silverlight settings
					silverlight_xap_url : '<?= base_url('assets/website/assets/js/Moxie.xap')?>'
				});
				
			});
		</script>
		<script src="<?= base_url('assets/website/assets/js/copy_on_click.js')?>"></script> 
		<script>
			// Initialise copy buttons on load
			$('.copy-btn').copyOnClick({
				confirmTime: 1, 
				confirmClass: "copy-confirmation",  
				confirmText: "copied" 
				// confirmText: "%c from %i"  
			}); 
		</script>
	</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											