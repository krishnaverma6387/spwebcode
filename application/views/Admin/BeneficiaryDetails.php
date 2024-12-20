<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<style>
			.select-box{
			height: 30px;
			border-radius: 0;
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
							
							<h5 class="content-header-title float-left pr-1 mb-0">Beneficiary Details</h5> 
							
							<div class="breadcrumb-wrapper d-none d-sm-block">
								
								<ol class="breadcrumb p-0 mb-0 pl-1">
									
									<li class="breadcrumb-item">
										
										<a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
										
									</li>
									<li class="breadcrumb-item">
										
										<a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
										
									</li>
									
									<li class="breadcrumb-item active">Beneficiary Details</li>
									
								</ol>
								
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
					<div class="content-body">
						<section id="form-action-layouts">
							<div class="row match-height">
								<div class="col-sm-12">
									<div class="card card-dashboard">
										<div class="card-header p-1">
											
										</div>
										<div class="card-content collpase show">
											<div class="card-body table-responsive">
												<div class="">
													<table class="table table-striped table-bordered" id="tableuser" style="width:100%;">
														<thead>
															<tr>
																<th>Sr</th>
																<!--<th><input type="checkbox" id="selectAllUser"></th>-->
																<th>UserName</th> 
																<th>User Mobile No.</th>
																<th>User Email-Id</th>
															</tr>
														</thead>
														<tbody>
															<?php 
																if(!empty($list)){
																	$count=1;
																	foreach($list as $each){?>
																	<tr>
																		<td><?=$count?></td>
																		<!--<td>&nbsp;&nbsp;<input type="checkbox" class="selectUser" value="<?=$each->id?>" name="userid[]" required ></td>-->   
																		<td><?=$each->name?></td>
																		<td><?=$each->mobile?></td> 
																		<td><?=$each->email?></td> 
																	</tr>
																<?php $count++; } } ?>
																<tbody> 
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
				</div>
				<?php require APPPATH . 'views/Auth/Footer.php'; ?>
				<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
				<script>
					
					var table = $('#tableuser').DataTable({  
						responsive: true,
						lengthChange: true,
						buttons: ['excel', 'pdf']
					});
					
					$("#selectAllUser").on("click", function () {
						$('.selectUser').attr('checked',$(this).prop('checked'));
					});
					
				</script>
			</body>
		</html>		
		