
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Price Drop Alert</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
			color: black!important;
			background-color: white!important;
			border-bottom: 2px solid #8340A1 !important;
			font-weight: bold;
			}
			.nav-pills .nav-link{
			border: 0px !important;
			background: white;
			}
			
			.table thead th{
			padding: 5px!important;
			}
			.table th, .table td {
			padding-left: 5px;
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
						<li class="breadcrumb-item active" aria-current="page">Price Drop Alert</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container w-100 p-0">
				<div class="col-sm-12">
					<h1>Price Drop Alert</h1>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 p-5" style="background: #8340A1">
						<div class="row">
							<div class="col-sm-10 mx-auto" >
								<div class="card  shadow-lg" style="border-radius: 10px;">
									<div class="card-body">
										<div class="card-header" style="background:white; border: 0px;">
											<div class="row">
												<div class="col-sm-1 col-2">
													<i class="bi bi-wallet fa-3x"></i> 
												</div>
												<div class="col-sm-3">
													<span style="font-size: 20px;font-weight: 800">Rs. 0</span> <br> <span >Your Wallet Balance</span>
												</div>
												<!--div class="col-sm-5">
													<img src="https://ps.w.org/flexy-breadcrumb/assets/banner-772x250.jpg?rev=2132060" class="img-fluid">	
												</div-->
												<div class="col-sm-3 ml-auto">
													<button class="btn btn-secondary">Add Money to wallet</button>	
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
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="position: relative;margin-top:-20px">
						<div class="card shadow-lg" style="border-radius: 10px;">
							<div class="card-body">
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation"  >
										<button class="nav-link active " id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
									</li>
									<li class="nav-item" role="presentation" >
										<button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Education</button>
									</li>
									<li class="nav-item" role="presentation" >
										<button class="nav-link" id="pills-profile-tab3" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Test</button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent"  style="height: 300px;">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="row">
											<div class="col-sm-12 table-responsive">
												<table class="table table-borderd ">
													<thead class="bg-light">
														<tr>
															<th scope="col">Product Description</th>
															<th scope="col">Status</th>
															<th scope="col">Price</th>
															<th scope="col">Order No.</th>
															<th scope="col">Order Total</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>Mark</td>
															<td>Otto</td>
															<td>@mdo</td>
															<td>@mdo</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>Jacob</td>
															<td>Thornton</td>
															<td>@fat</td>
															<td>@fat</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>Larry</td>
															<td>the Bird</td>
															<td>@twitter</td>
															<td>@twitter</td>
														</tr>
													</tbody>
												</table>
											</div>  
										</div>
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
									<div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
								</div>
								
							</div>	
						</div>	 
					</div>   
				</div>	
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
		<script>
			
		</script>
		
	</body>
</html>																								
