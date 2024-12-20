
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Change Password</title>
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
			.slide-toggle{
			display:none!important;
			}
	
			
			</style>
		
	</head>
    
    <body>  
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Change Password</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		<section class="pro-content login-content center-content-page">
			<div class="container"> 
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							Change Password
						</h1>
					</div>
				</div>
				
				<div class="row justify-content-center">
	
				
	
					<div class="col-12 col-lg-3">
								<ul class="list-group">
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Profile") ?>">
								<i class="bi bi-person"></i>
								Profile          
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Wishlist") ?>">
								<i class="bi bi-heart"></i>
								Wishlist                   
							</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/Order") ?>">
								<i class="bi bi-cart3"></i>
								Orders                   
							</a>
						</li>
						<!--li class="list-group-item">
							<a class="nav-link" href="<?= base_url("Home/ShippingAddress") ?>">
								<i class="bi bi-geo-alt"></i>
								Shipping Address                           
							</a>
						</li-->
						<li class="list-group-item">
							<a class="nav-link" href="#">
								<i class="bi bi-power"></i>
								Logout                               
							</a>
						</li>
						<li class="list-group-item active">
							<a class="nav-link" href="<?= base_url("Home/ChangePassword") ?>">
								<i class="bi bi-unlock"></i>
								Change Password                            
							</a>
						</li> 
					</ul>
					</div>
					
					
					<div class="col-12 col-sm-9 col-md-9 col-lg-9 mb-5 px-0">
						
						
                        <div class="tab-content" id="registerTabContent">
							<div class="tab-pane active" >
								<div class="registration-process">
									<form class="form">
										<div class="from-group mb-4">
											
											<div class="input-group col-12">
												
												<input type="password" class="form-control" id="inlineFormInputGroup3" placeholder="Enter Your Old Password" required>
											</div>
										</div>
										<div class="from-group mb-4">
											
											<div class="input-group col-12">
												
												<input type="password" class="form-control" id="inlineFormInputGroup4" placeholder="Enter Your New Password" required>
											</div>
										</div>
										<div class="col-12 col-sm-12">
											<button class="btn btn-secondary swipe-to-top">Change</button>
											
										</div>
									</form>
								</div>
								
							</div>
							
							
						</div>
					</div>
					
				</div>
				<div class="row d-none">
					<div class="container">
						<div class="registration-socials">
							<p class="mb-3 text-center">
								Access Your Account Through Your Social Networks
							</p>
							<div class="from-group">
								<button type="button" class="btn btn-google swipe-to-top"><i class="fab fa-google-plus-g"></i>&nbsp;Google</button>
								<button type="button" class="btn btn-facebook swipe-to-top"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
								<button type="button" class="btn btn-twitter swipe-to-top"><i class="fab fa-twitter"></i>&nbsp;Twitter</button>
							</div>
						</div>
						<p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nulla vitae viverra nibh. Etiam a arcu sed mi suscipit rutrum.
							Sed a lorem pellentesque, dignissim risus in, feugiat ipsum.
							Nulla laoreet faucibus velit eget iaculis. Vivamus porttitor diam lectus,
						eu rhoncus lacus dignissim et. </p>
					</div>      
				</div>
			</div>
		</section>
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						