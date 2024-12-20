
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Notification </title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.card{
			border-radius: 6px;
			}
			.logoimg
			{
			height: 14px;
			}
			.ul-list{
			margin-left:-13px;
			}
			.ul-list{
			display:none;
			}
			.custom-control-input:checked~.custom-control-label::before {
			border-color: red !important;
			background-color: red !important;
			}
			.notification-row{
			display: flex;
			align-items: center;
			justify-content: center;
			}
			
			
			@media only screen and (min-width: 240px) and (max-width: 768px) {
			.notification-row{
			display: inline-block;
			}
			}
			
		</style>
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Notification Prefrence</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 style="font-size: 25px;">Notifications</h1>	
					</div>
					<div class="col-sm-12">
						<div class="card">
							<p class="p-1 ml-2 mt-2">Order related SMS can not disabled as they are critical to provide service</p>	 
						</div>  
					</div>
				</div>
				
				<div class="card mt-3">
					<div class="card-body">
						<div class="row">
							
							<div class="col-sm-7 border-right">
								<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document </p>
							</div>	
							<div class="col-sm-5 ">
								<div class="notification-row mt-3" style="align-items: center; justify-content: center;">
									<span style="font-size: 14px;" class="font-weight-bold">Notification1</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification2</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification3</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</div>
								
							</div>
						</div> 
					</div>	
				</div>
				
				
				
				
				<div class="card mt-3">
					<div class="card-body">
						<div class="row">
							
							<div class="col-sm-7 border-right">
								<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document </p>
							</div>	
							<div class="col-sm-5 ">
								<div class="notification-row mt-3" >
									<span style="font-size: 14px;" class="font-weight-bold">Notification1</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification2</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification3</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</div>
								
							</div>
						</div> 
					</div>	
				</div>
				
				<div class="card mt-3">
					<div class="card-body">
						<div class="row">
							
							<div class="col-sm-7 border-right">
								<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document </p>
							</div>	
							<div class="col-sm-5 ">
								<div class="notification-row mt-3">
									<span style="font-size: 14px;" class="font-weight-bold">Notification1</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification2</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
									
									<span style="font-size: 13px;" class="font-weight-bold">Notification3</span>  
									&ensp;
									<div class="custom-control custom-switch d-inline">
										<input type="checkbox" class="custom-control-input" id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1"></label>
									</div>
								</div>
								
							</div>
						</div> 
					</div>	
				</div>
				
				
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																								
