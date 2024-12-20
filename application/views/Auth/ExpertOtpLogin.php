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
											
											<form class="form-horizontal" method="POST" action="<?=base_url($this->data->controller.'/Authentication/ExpertLoginOTP');?>" id="addFormLogin">
												
												<input type="hidden" id="roleid" name="role_id" value="<?=$this->data->role_id;?>" />
												
												<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
												
												<div id="mobilediv" >
													<label for="mobileno">Registered Mobile No <span class="text-danger">*</span></label>
													
													<fieldset class="form-group position-relative has-icon-left">
														
														<input type="number" class="form-control" id="mobileno" name="mobile" placeholder="Mobile No" required >
														
														<div class="form-control-position">
															
															<i class="feather icon-user"></i>
															
														</div>
														
														<?php echo form_error("mobile","<p class='text-danger' >","</p>"); ?>
														
													</fieldset>
												</div>
												<div id="otpdiv"  style="display:none">
													<label for="otp">OTP<span class="text-danger">*</span></label>
													
													<fieldset class="form-group position-relative has-icon-left">
														
														<input type="number" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required >
														
														<div class="form-control-position">
															
															<i class="feather icon-user"></i>
															
														</div>
														
														<?php echo form_error("otp","<p class='text-danger' >","</p>"); ?>
														
													</fieldset>
												</div>
												<input type="hidden" class="form-control" id="token" name="token" required >
												<div id="getotpdiv" class="from-group">
													<button type="button" onclick="getotp()" class="btn btn-secondary btn-block">Get Otp</button>
												</div>
												<div id="logindiv" style="display:none;">
													<button  type="submit" class="btn btn-primary btn-block " id="addBtn" ><i
														
													class="feather icon-unlock"></i> Login  <i class="fa fa-spinner fa-spin" id="addSpin" style="display:none;"></i></button>
												</div>
												
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
		<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lfwaz4iAAAAAGy45ud68HQ-nY1TtNMv-I2PlYbl"></script>
		<script>
			var url = $('#addFormLogin').attr('action');
			// alert(url);
			grecaptcha.enterprise.ready(function() {
				grecaptcha.enterprise.execute('6Lfwaz4iAAAAAGy45ud68HQ-nY1TtNMv-I2PlYbl', {action: 'LOGIN'}).then(function(token) {
					$("#token").val(token);
				});
			});
		</script>
		
		<script>
			$('#addFormLogin').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtn');
				var spinAction = $('#addSpin');
				e.preventDefault();
				
				var mobile = $("#mobileno").val();
				var otp = $("#otp").val();
				var token = $("#token").val();
				var roleid = $("#roleid").val();
				var url = $('#addFormLogin').attr('action');
				
				if ($(formAction).parsley().isValid() == true) {
					var formData = {
			    		mobile : mobile,
			    		otp: otp,
			    		token: token,
			    		roleid: roleid,
			    		action : 'LOGIN'
					};
					
					$.ajax({
						type: 'POST',
						url: url,
						data: formData,
						dataType: "json",
						beforeSend: function() {
							$(btnAction).attr("disabled", true);
							$(spinAction).show();
						},
						success: function(response) {
							console.log(response);
							// var response = JSON.parse(response);
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
						}
					});
				}
			});
		</script>
		
		<script>
			function getotp()
			{
				var mobile = document.getElementById('mobileno').value;
				
				var url = '<?= base_url('Auth/GetOtpCodeExpert')?>';
				$.ajax({
					url : url,
					type: 'POST',
					data: {mobile:mobile},
					
					success: function(response) {
						var response = JSON.parse(response);
						
						if (response[0].res == 'success') 
						{
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							
							$("#getotpdiv").hide();
							$("#mobilediv").hide();
							$("#otpdiv").show();
							$("#logindiv").show();
							
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
							}
						} 
						else if (response[0].res == 'error')
						{
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
				});
			}
			
			
		</script>
		
	</body>
	
</html>	