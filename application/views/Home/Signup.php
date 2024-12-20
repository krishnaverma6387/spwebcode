
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
						<li class="breadcrumb-item active" aria-current="page">Signup</li>
					</ol>
				</div>
			</nav>
		</div> 
		
	
      <section class="pro-content login-content">
          <div class="container"> 
            
              <div class="row">
                  <div class="pro-heading-title">
                      <h1>
                          Signup 
                      </h1>
                    </div>
              </div>
              <div class="row">
                  
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="">
                        <h2>New Customer</h2>
                      <form action="#" name="">
                          <div class="from-group row mb-4">
                              <div class="input-group col-12">
                                <input type="text" name="fullname" class="form-control" id="inlineFormInputGroup00" required placeholder="Enter Your Fullname">
                              </div>
                            </div>
                          <div class="from-group row mb-4">
                            <div class="input-group col-12">
                              <input type="text" name="email" class="form-control" id="inlineFormInputGroup0" required placeholder="Enter Your Email">
                            </div>
                          </div>
						    <div class="from-group row mb-4">
                         
                            <div class="input-group col-12">
                              
                              <input type="mobile" name="mobile" class="form-control" id="inlineFormInputGroup0" required placeholder="Enter Your Mobile No.">
                            </div>
                          </div>
                          <div class="from-group row mb-4">
                            
                              <div class="input-group col-12">
                                
                                <input type="password" name="password" class="form-control" id="inlineFormInputGroup1" required placeholder="Enter Your Password">
                              </div>
                            </div>
                            
                            <div class="from-group">
                                <button class="btn btn-secondary swipe-to-top">Create Account</button>
                              
                            </div>
                      </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h2>Already Registered?</h2>
                    
                    <div class="registration-process">
                      <p>Get access to your Orders, Wishlist and Recommendations.</p>
                      <form>
                          
                            <div class="from-group">
                                <a href="<?= base_url('Home/Login') ?>" class="btn btn-secondary swipe-to-top">Login</a>
                              
                            </div>
                      </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
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