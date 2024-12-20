<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

	<head>

		<?php require 'CssLinks.php';?>

	</head>

	<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">

		<div class="app-content content">

			<div class="content-overlay"></div>

			<div class="content-wrapper">

				<div class="content-header row">

				</div>

				<div class="content-body">

					<section class="row flexbox-container">

						<div class="col-12 d-flex align-items-center justify-content-center">

							<div class="col-lg-4 col-md-8 col-12 box-shadow-2 p-0">

								<div class="card border-grey border-lighten-3 px-1 py-1 m-0">

									<div class="card-header border-0">

										<div class="card-title text-center">

											<img src="<?=base_url($this->data->appTempletePath);?>images/logo/logo.png"  style="height:80px;">

										</div> 

										<h5 class="card-subtitle line-on-side text-muted text-center pt-2">

											<span><?=$this->data->pageTitle;?></span>

										</h5>

									</div>

									<div class="card-content">

										<div class="card-body">
											
											<form class="form-horizontal" method="POST" action="<?=base_url($this->data->controller.'/Authentication/Login');?>" id="addForm">

												<input type="hidden" name="role_id" value="<?=$this->data->role_id;?>" />

												<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

												<label for="username">Username <span class="text-danger">*</span></label>

												<fieldset class="form-group position-relative has-icon-left">

													<input type="text" class="form-control" id="username" name="username" placeholder="Email Address" required >

													<div class="form-control-position">

														<i class="feather icon-user"></i>

													</div>

													<?php echo form_error("username","<p class='text-danger' >","</p>"); ?>

												</fieldset>

												<label for="password">Password <span class="text-danger">*</span></label>

												<fieldset class="form-group position-relative has-icon-left">

													<input type="password" class="form-control password" id="password" name="password"

													placeholder="Password" required>

													<div class="form-control-position">

														<i class="fa fa-key"></i>

													</div>

													<?php echo form_error("password","<p class='text-danger' >","</p>"); ?>

												</fieldset>

												<div class="form-group row">

													<div class="col-sm-6 col-12 text-center text-sm-left pr-0">

														<fieldset>

															<input type="checkbox" toggle="#password-field" class="toggle-password" id="remember-me" class="chk-remember">

															<label for="remember-me"> Show Password</label>

														</fieldset>

													</div>

													
												</div>

												<button type="submit" class="btn btn-primary btn-block" id="addBtn"><i 
												class="feather icon-unlock"></i> Login  <i class="fa fa-spinner fa-spin" id="addSpin" style="display:none;"></i></button>

											</form>

										</div>

										<div class="card-body">

										</div>

									</div>

								</div>

							</div>

						</div>

					</section>

				</div>

			</div>

		</div>

		<?php require 'Footer.php'; ?>

		<?php require 'JsLinks.php';?>
		<script>
			$(document).on('click', '.toggle-password', function() {
				
				var input = $(".password");
				input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
			});
		</script>

	</body>

</html>