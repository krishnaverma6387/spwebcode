
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Listing</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.icon {
			font-size: 2rem;
			}	
			.card-header{
			border-bottom: 0px !important;
			}
			
			.slide-toggle{
			display:none!important;
			}
				@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
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
						<li class="breadcrumb-item active" aria-current="page">Work With Us </li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<section class="pro-content login-content" style="background-color: #f8f9fa">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 mx-auto">
						<h1 class="text-center font-weight-blod pageheading">OUR THREE EASY STEPS</h1> <br>
						<div class="row">
							<div class="col-sm-4 col-4 ">
								<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/1_06259c75-4952-4d24-af55-b7a39e6a7b98_400x.png?v=1628769113" class="img-fluid lazy" >
									<span>Fill The Form</span>	
								</center>
							</div>   
							<div class="col-sm-4 col-4">
								<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/2_3b342d5c-ac3b-4ce9-9313-866b9838603a_400x.png?v=1628769113" class="img-fluid lazy" >   <span>Qualifying Process</span> </center>
							</div>   
							<div class="col-sm-4 col-4">
								<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/3_1_400x.png?v=1628769113" class="img-fluid lazy" > <span style="font-weight: 500;">Start Selling</span> </center>
							</div>   
						</div>
						<div class="row mt-4">
							<div class="col-sm-12">
								<p class="text-center"><a href="#" class="btn btn-secondary">Sign Up Now</a></p>
							</div>
							<div>
							</div>	
						</div>
					</div>
				</section>
				<div class="col-12 col-sm-6 col-lg-6 mx-auto">
					<h2 class="mt-3 text-center pageheading">Work With Us As A Fashion Expert</h2>
					<form  action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="form-group">
									<label>Name<span class="text-danger">*</span></label>
									<input type="text" name="name" class="form-control form-control-lg" required placeholder="Name">
								</div>
								
								
								<div class="form-group">
									<label>Email<span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control form-control-lg" required placeholder="Email">
								</div>
								<div class="form-group">
									<label>Mobile no<span class="text-danger">*</span></label>
									<input type="number" name="mobile" class="form-control form-control-lg" required placeholder="Mobile No">
								</div>
								<div class="form-group">
									<label>Password<span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control form-control-lg" required placeholder="Mobile No">
								</div>
								<div class="form-group">
									<p class="text-right"><button type="submit" class="btn btn-secondary" id="addBtn">   Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button></p>
								</div>
							</div>
						</div>
					</form>
					
				</div>
				<section class="pro-content login-content" >
					<div class="container">
						<div class="row">
							<div class="col-sm-4 p-2">
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/7_200x.png?v=1629117487" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
										</div>	
										<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
									</div>
								</div>  
							</div>  
							<div class="col-sm-4 p-2" >
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/5_200x.png?v=1629117600" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
									</div>	
									<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
									</div>
								</div>  
							</div> 
							<div class="col-sm-4 p-2" >
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/7_200x.png?v=1629117487" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
									</div>	
									<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
									</div>
								</div>  
							</div> 
							<div class="col-sm-4 p-2" >
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/7_200x.png?v=1629117487" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
									</div>	
									<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
									</div>
								</div>  
							</div> 
							<div class="col-sm-4 p-2" >
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/7_200x.png?v=1629117487" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
									</div>	
									<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
									</div>
								</div>  
							</div> 
							<div class="col-sm-4 p-2" >
								<div class="card" style="background-color: #f8f9fa">
									<div class="card-header"  style="background-color: #f8f9fa">
										<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/7_200x.png?v=1629117487" class="img-fluid lazy" style="height: 100px"></center>
										<hr>
									</div>	
									<div class="card-body"style="background-color: #f8f9fa">
										<h2 class="text-center">Nationwide Network</h2>
										<p class="text-center">We have one of the biggest nationwide ecommerce operations</p>
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