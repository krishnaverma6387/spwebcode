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
				<section id="user-profile-cards-with-stats" class="row mt-2">
					<div class="col-sm-5">
						<div class="card profile-card-with-stats">
							<div class="text-center">
								<div class="card-body">
									<img src="<?= base_url(); ?>uploads/profile_pic/<?= $profile->icon; ?>" class="w-100  height-100" alt="Card image">
								</div>
								<div class="card-body">
									<h4 class="card-title"><?= $profile->name; ?></h4>
									<h6 class="card-subtitle text-muted"><?= $profile->mobile; ?></h6>
									<br>
									<ul class="list-inline list-inline-pipe">
										<li><?= $profile->email; ?></li>
									</ul>
									<ul class="list-inline list-inline-pipe">
										<li>Visit Count </li>
										<li> <?= $profile->visit_count; ?></li>
									</ul>
									<ul class="list-inline list-inline-pipe">
										<li>Login Time </li>
										<li> <?= $profile->login_at; ?></li>
									</ul>
									<ul class="list-inline list-inline-pipe">
										<li>Logout Time </li>
										<li> <?= $profile->logout_at; ?></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="card profile-card-with-stats">
							<div class="">
								<div class="card-body">
									<h1 class="card-title">Update Profile</h1>
									<hr>
									<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/UpdateProfile'); ?>" method="post" id="addForm">
										<input type="hidden" class="form-control" name="id" placeholder="ID" required value="<?php echo $profile->id; ?>">
										<div class="row">
											<div class="form-group col-sm-12">
												<label class="col-form-label">Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control text-capitalize" name="name" placeholder="Name" required value="<?php echo $profile->name; ?>">

												<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
											</div>

											<div class="form-group col-sm-12">
												<label class="col-form-label">Email Address<span class="text-danger">*</span></label>
												<input type="email" class="form-control" name="email" placeholder="Email Address" required readonly value="<?php echo $profile->email; ?>">
												<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
											</div>
											<div class="form-group col-sm-12">
												<label class="col-form-label">Mobile No <span class="text-danger">*</span></label>
												<input type="number" class="form-control" name="mobile" placeholder="Mobile No" required maxlength="10" minlength="10" readonly value="<?php echo $profile->mobile; ?>">
												<input type="hidden" class="form-control" name="password" placeholder="Password" required value="<?php echo $profile->password; ?>">
												<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
											</div>

											<div class="form-group col-sm-12">
												<label class="col-form-label"> Profile Photo <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
												<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/profile_pic/' . $profile->icon . '') ?>">
												<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
											</div>
											<div class="col-sm-12 form-group">
												<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
											</div>
										</div>
									</form>
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
</body>

</html>