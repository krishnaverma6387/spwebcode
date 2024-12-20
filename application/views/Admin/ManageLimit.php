<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<style>
			form .form-control {
			padding: 0 8px;
			height: 34px;
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
									<div class="card-header p-1">
										<button class="btn btn-primary d-none" data-toggle="modal" data-target="#AddModal">
										<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?= $this->data->key; ?></button>

										<a class="btn btn-primary text-white" onclick="UpdateSiteMap('<?php echo base_url('Sitemap') ?>')" > Update Sitemap</a>
										<a class="btn btn-danger text-white" href="<?= base_url($list[0]->sitemap)?>" download><i class="fa fa-download"></i> <?= $list[0]->sitemap?></a>
										 <a class="btn btn-primary text-white" onclick="UpdateSiteMap('<?php echo base_url('Robots') ?>')" > Update Robot</a>
										 <a class="btn btn-danger text-white" href="<?= base_url($list[0]->robot)?>" download><i class="fa fa-download"></i> <?= $list[0]->robot?></a>
									</div>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="hidden" name="id" value="<?=$list[0]->id?>">
															<label class="col-form-label">Add To Cart Limit<span class="text-danger">*</span></label>
															<input type="number" min="0" max="100" step="1" class="form-control " name="cart_limit" value="<?= $list[0]->cart_limit?>" placeholder="Add To Cart Limit" >
															<?php echo form_error("cart_limit", "<p class='text-danger' >", "</p>"); ?>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Add To Wishlist Limit<span class="text-danger">*</span></label>
															<input type="number" class="form-control" min="0" max="100" step="1" name="wishlist_limit" value="<?= $list[0]->wishlist_limit?>" placeholder="Add To Wishlist Limit" required>
															<?php echo form_error("wishlist_limit", "<p class='text-danger' >", "</p>"); ?>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Cashback Used Limit<span class="text-danger">*</span></label>
															<input type="number" class="form-control" min="0" max="1000" step="1" name="cashback_limit" value="<?= $list[0]->cashback_used_limit?>" placeholder="Cashback Used Limit" required>
															<?php echo form_error("cashback_limit", "<p class='text-danger' >", "</p>"); ?>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Reward Used Limit<span class="text-danger">*</span></label>
															<input type="number" class="form-control" min="0" max="5000" step="1" name="reward_limit" value="<?= $list[0]->reward_used_limit?>" placeholder="Reward Used Limit" required>
															<?php echo form_error("reward_limit", "<p class='text-danger' >", "</p>"); ?>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Prebooking Amt. Status For Royal User<span class="text-danger">*</span></label>
															<select class="form-control" name="royal_prebookig_status" required>
																<option value="true" <?php if($list[0]->royal_prebookig_status=='true'){echo 'selected';}?>>Enabled</option>
																<option value="false" <?php if($list[0]->royal_prebookig_status=='false'){echo 'selected';}?>>Disabled</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Day Limit<span class="text-danger">(Early Activated Features Day For Royal User)*</span></label>
															<input type="number" class="form-control" min="0" max="5000" step="1" name="royal_feature_activated_limit" value="<?= $list[0]->royal_feature_activated_limit?>" placeholder="Reward Used Limit" required>
															<?php echo form_error("royal_feature_activated_limit", "<p class='text-danger' >", "</p>"); ?>  
														</div>
													</div>
													<!-- <div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Sitemap<span class="text-danger"> (optional)</span></label>&nbsp;<a href="<?= base_url($list[0]->sitemap)?>" download><i class="fa fa-download"></i> <?= $list[0]->sitemap?></a>
															<input type="file" name="sitemap" class="form-control">
															<input type="checkbox" name="sitemap">
														</div>
													</div> -->
													<!-- <div class="col-sm-6">
														<div class="form-group">
															<label class="col-form-label">Robot<span class="text-danger"> (optional)</span></label>&nbsp;<a href="<?= base_url($list[0]->robot)?>" download><i class="fa fa-download"></i> <?= $list[0]->robot?></a>
															<input type="file" name="robot" class="form-control">
															 
														</div>
													</div> -->
												</div>
												<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
												<button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
											</form>
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
											<label class="col-form-label">Add To Cart Limit<span class="text-danger">*</span></label>
											<input type="number" min="0" max="100" step="1" class="form-control " name="cart_limit" placeholder="Add To Cart Limit" >
											<?php echo form_error("cart_limit", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Add To Wishlist Limit<span class="text-danger">*</span></label>
											<input type="number" class="form-control" min="0" max="100" step="1" name="wishlist_limit" placeholder="Add To Wishlist Limit" required>
											<?php echo form_error("wishlist_limit", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Cashback Used Limit<span class="text-danger">*</span></label>
											<input type="number" class="form-control" min="0" max="100" step="1" name="cashback_limit" placeholder="Cashback Used Limit" required>
											<?php echo form_error("cashback_limit", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Reward Used Limit<span class="text-danger">*</span></label>
											<input type="number" class="form-control" min="0" max="100" step="1" name="reward_limit" placeholder="Reward Used Limit" required>
											<?php echo form_error("reward_limit", "<p class='text-danger' >", "</p>"); ?>
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
		
		
		
			function UpdateSiteMap(url) {
	

				$.ajax({
					url: url,
					type: "post",
					success: function(response) {
					
						console.log(response);
						console.log(response.msg);
						$.notify("" + response.msg + "", ""+response.res+"");
						
						
					}
			
			
		});
		return status;
	}
		</script>
	</body>
	
</html>								