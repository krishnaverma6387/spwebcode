<style>

	
	/* Adjust the modal width and height in pixels */
	#registerModal .modal-dialog {
    width: 800px !important;
    margin: 1.75rem auto !important;
	}
	
	#registerModal .modal-content {
    height: 500px !important;
    width: 800px !important;
	}
	
	.dropdown-toggle::after {
	display: none;
	}
	.header-two .header-mini .dropdown .dropdown-toggle {
    font-size: 0.8125rem;
    color: white !important;
	}
	
	.header-two .header-mini .pro-header-options .dropdown .dropdown-menu {
    right: -110px;
    left: auto;
    width: 180px;
	}
	.dropdown-item {
    white-space: normal; 
    word-wrap: break-word; 
    overflow-wrap: break-word;
	}
	
	#badge 
	
	.badge-secondary {
	position: absolute;
    right: -3px!important;
    top: -6px;
    border-radius: 10px;
	}
	
	.badge {
    display: inline-block;
    padding: 0.2em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	}
	.headercount 
	{
	position: absolute;
    top: -5px;
    right: 0px;
    border-radius: 50%;
	}
	
	
	
</style>
<div class="se-pre-con"></div> 
<!-- //header style Two -->
<header id="headerTwo" class="header-area header-two header-desktop">
	<div class="header-mini bg-purple"> 
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-12 col-md-4 col-lg-4">
					<h4 class="text-white ">Customer care number: <strong><a href="tel:9718636582" class="text-white">+91 9718636582</a></strong></h4>
				</div>
				<div class="col-12 col-md-5 col-lg-4">
					<?php 
						if($this->sitepermission->notification){
						?>
						<marquee width="100%" direction="left" class="text-white"> 
							<?php 
								$notification=$this->db->get_where('notification',['is_status'=>'true'])->row() ;
								if(!empty($notification)){
									echo $notification->description;
								}
							?>
						</marquee>
					<?php } ?>
				</div>
				<div class="col-12 col-md-3 col-lg-4">
					<div class="pro-header-options  d-flex" style="justify-content: space-evenly;">
						
						<!-- Login/SignUp-->
						
						<!--<div class="dropdown icon-header">
							<a data-toggle="modal" data-target="#registerModal" href="#" class="text-white hvr-grow hoverHeaderIcons" title="SignIn/SignUp" data-toggle="tooltip" data-placement="bottom">
							<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>-->
						
						<?php 
							if($this->permission=='false')
							{
							?>
							<div class="dropdown icon-header">
								<a data-toggle="modal" data-target="#registerModal" href="#" class="text-white hvr-grow hoverHeaderIcons" title="SignIn/SignUp" data-toggle="tooltip" data-placement="bottom">
									<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
								</a>
							</div>
							<?php 
							}
							else 
							{
							?>
							<!--<div class="dropdown icon-header">
								<a href="<?= base_url('Profile')?>" class="text-white hvr-grow hoverHeaderIcons" title="My Account" data-toggle="tooltip" data-placement="bottom">
								<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
								</a>
							</div>-->
							<div class="dropdown icon-header">
								<a data-toggle="dropdown" href="#" class="text-white hvr-grow hoverHeaderIcons">
									<span class="bi bi-person hvr-grow" style="font-size: 22px;">   </span>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="<?= base_url('Home/Profile')?>">Profile</a>
									<a class="dropdown-item" href="<?= base_url('Home/Wishlist')?>">Wishlist</a>
									<a class="dropdown-item" href="<?= base_url('Home/Order')?>">Order History</a>
									<a class="dropdown-item" href="<?= base_url('Home/ClubDashboard')?>">Club Dashboard</a>
									<a class="dropdown-item" href="<?= base_url('Home/SlickWallet')?>">Wallet</a>
									<a class="dropdown-item" href="<?= base_url('Home/ShareAndEarn')?>">Share A Friend</a>
									<a class="dropdown-item" href="<?= base_url('Home/ShareAndEarn/App')?>">Share App With Friend</a>
									<a class="dropdown-item" href="<?= base_url('Home/Logout')?>">Logout</a>
								</div>
							</div>
							<?php 
							}	
						?>
						<!-- Login/SignUp-->
						
						
						<!--<div class="dropdown icon-header">
							<a href="<?//= base_url('Profile')?>" class="text-white hvr-grow hoverHeaderIcons" title="Profile" data-toggle="tooltip" data-placement="bottom">
							<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>-->
						
						<!--<div class="dropdown icon-header">
							<a href="<?//= base_url('Wishlist')?>" class="text-white hvr-grow hoverHeaderIcons" title="Wishlist" data-toggle="tooltip" data-placement="bottom">
							<span class="bi bi-heart hvr-grow" style="font-size: 18px;"></span>
							</a>
						</div>-->
						
						<!-- Cart Counting Start Here -->
						<?php 
							
							if(isset($_COOKIE['system_id']))
							{
								$system_id = $_COOKIE['system_id'];
								$UserData = $this->db->query("select * from tbl_cart where is_status='false' AND (system_id='$system_id')")->num_rows();
								$status = 'true';
								
								$WishlistData = $this->db->query("select * from tbl_wishlist where is_status='true' AND (system_id='$system_id')")->num_rows();
								// var_dump($system_id);die();
							}
							else
							{
								$system_id = $_COOKIE['system_id'];
								$UserData = $this->db->get_where('tbl_cart',array('system_id'=>$system_id,'is_status'=>'false'))->num_rows();
								$status = 'false';
								
								$WishlistData = $this->db->query("select * from tbl_wishlist where is_status='true' AND (system_id='$system_id')")->num_rows();
							}
							// var_dump($system_id);die();
							
						?>
						
						<div class="dropdown icon-header">
							<a href="<?= base_url('Wishlist')?>" class="text-white hvr-grow hoverHeaderIcons" title="Wishlist" data-toggle="tooltip" data-placement="bottom">
								<span class="bi bi-heart hvr-grow" style="font-size: 18px;"></span>
								<span class="badge badge-secondary headercount">
									<?php 
										if(!empty($WishlistData)) {
											echo $WishlistData;
											} else {
											echo "0";
										}
									?>
								</span>
							</a>
						</div>
						
						
						<div class="dropdown icon-header">
							<a href="<?= base_url('Cart')?>" class="text-white hvr-grow hoverHeaderIcons" title="Cart" data-toggle="tooltip" data-placement="bottom">
								<i class="bi bi-cart  hvr-grow" style="font-size: 21px;"></i>
								<span class="badge badge-secondary headercount">
									<?php 
										if(!empty($UserData))
										{
											echo $UserData;
										}
										else 
										{
											echo "0";
										}
									?>
								</span>
							</a>
							
						</div>
						
						
						<!-- Cart Counting ENd Here -->
						
						
						
						<?php 
							if($this->sitepermission->ecatlog){
							?>
							<div class="dropdown icon-header">
								<a href="javascript:void(0);" class="text-white hvr-grow hoverHeaderIcons" title="E-Catalog" data-toggle="tooltip" data-placement="bottom">
									<i class="bi bi-journal-code  hvr-grow" style="font-size: 18px;"></i>
								</a>
							</div>
						<?php } ?>
						<div class="dropdown icon-header">
							<a href="<?= base_url('Home/OrderTracking');?>" class="text-white hvr-grow hoverHeaderIcons" title="Track Order" data-toggle="tooltip" data-placement="bottom">
								<i class="bi bi-truck  hvr-grow" style="font-size: 22px;"></i>
							</a>
						</div>
						<div class="dropdown icon-header">
							<a href="javascript:void(0);" class="text-white hvr-grow hoverHeaderIcons" title="Become a partner" data-toggle="tooltip" data-placement="bottom" >
								<span class="bi bi-person-plus hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-maxi bg-header-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-12 col-sm-12 col-lg-2 d-flex justify-content-center">
					<a href="<?php echo base_url(); ?>" class="logo">
						<img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
					</a>
				</div>
				
				<div class="col-12 col-sm-8 nav-start">
					<nav id="headerOneNavbar" class="navbar navbar-expand-lg bg-nav-bar">
						
						<div class="navbar-collapse">
							<ul class="navbar-nav">
								<?php if(!empty($this->category)){
									
									foreach($this->category as $category){
										$sub_category=$this->db->get_where('sub_category',['category_id'=>$category->id,'is_status'=>'true'])->result();
									?>
									
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="<?= base_url('Home/Individual') ?>">
											<?= $category->name ?><span class="arrow"><i class="fa fa-angle-down"></i></span>
										</a>
										<div class="dropdown-menu mega-dropdown-menu row ">
											<div class="col-12">
												<div class="row">
													<div class="col-md-4">
														<ul>
															<li class="dropdown-header"></li>
															<li><a class="dropdown-item" href="#">Mobiles and Tablets</a></li>
															<li><a class="dropdown-item" href="#">Computers</a></li>
															<li><a class="dropdown-item" href="#">Audio & Video</a></li>
															<li><a class="dropdown-item" href="#">Watches</a></li>
															<li><a class="dropdown-item" href="#">Home appliances</a></li>
															<li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>
															<li><a class="dropdown-item" href="#">Video games</a></li>
															<li><a class="dropdown-item" href="#">Touch Screen</a></li>
														</ul>
													</div>
													
													<!--<div class="col-md-4">
														<ul>
														<li class="dropdown-header">Departments</li>
														<li><a class="dropdown-item" href="#">Featured Accessories</a></li>
														<li><a class="dropdown-item" href="#">Hot Brands</a></li>
														<li><a class="dropdown-item" href="#">Home Improvement</a></li>
														<li><a class="dropdown-item" href="#">Tools</a></li>
														<li><a class="dropdown-item" href="#">Security & Protection</a></li>
														<li><a class="dropdown-item" href="#">Accessories & Parts</a></li>
														<li><a class="dropdown-item" href="#">Smart Electronics</a></li>
														</ul>
														</div>
														<div class="col-md-4">
														<ul>
														<li><a class="dropdown-item dropdown-header" href="#">Shop Instagram</a></li>
														<li><a class="dropdown-item dropdown-header" href="#">Shop By Brands</a></li>
														<li><a class="dropdown-item dropdown-header" href="#">Repair & Cleaning</a></li>
														<li><a class="dropdown-item dropdown-header" href="#">Sell Your Product</a></li>
														</ul>
													</div>-->
													
												</div>
											</div>
										</div>
									</li>
								<?php } } ?>
								<!--<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#">
									Latest Individual <span class="arrow"><i class="fa fa-angle-down"></i></span>
									</a>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= base_url('Home/Product') ?>">Individual Product</a>
									</div>
									</li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#">
									Fashion <span class="arrow"><i class="fa fa-angle-down"></i></span>
									</a>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="index.html">Fashion 1
									</a>
									<a class="dropdown-item" href="index-2.html">Fashion 2
									</a>
									<a class="dropdown-item" href="index-3.html">Fashion 3
									</a>
									</div>
									</li>
									<li class="nav-item dropdown mega-dropdown">
									<a class="nav-link dropdown-toggle" href="#">
									Jewelry <span class="arrow"><i class="fa fa-angle-down"></i></span>
									<span class="badge badge-secondary" id="blink">New</span>
									</a>
									<div class="dropdown-menu mega-dropdown-menu row ">
									<div class="col-12">
									<div class="row">
									<div class="col-md-4">
									<ul>
									<li class="dropdown-header">Categories</li>
									<li><a class="dropdown-item" href="#">Mobiles and Tablets</a></li>
									<li><a class="dropdown-item" href="#">Computers</a></li>
									<li><a class="dropdown-item" href="#">Audio & Video</a></li>
									<li><a class="dropdown-item" href="#">Watches</a></li>
									<li><a class="dropdown-item" href="#">Home appliances</a></li>
									<li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>
									<li><a class="dropdown-item" href="#">Video games</a></li>
									<li><a class="dropdown-item" href="#">Touch Screen</a></li>
									</ul>
									</div>
									<div class="col-md-4">
									<ul>
									<li class="dropdown-header">Departments</li>
									<li><a class="dropdown-item" href="#">Featured Accessories</a></li>
									<li><a class="dropdown-item" href="#">Hot Brands</a></li>
									<li><a class="dropdown-item" href="#">Home Improvement</a></li>
									<li><a class="dropdown-item" href="#">Tools</a></li>
									<li><a class="dropdown-item" href="#">Security & Protection</a></li>
									<li><a class="dropdown-item" href="#">Accessories & Parts</a></li>
									<li><a class="dropdown-item" href="#">Smart Electronics</a></li>
									</ul>
									</div>
									<div class="col-md-4">
									<ul>
									<li><a class="dropdown-item dropdown-header" href="#">Shop Instagram</a></li>
									<li><a class="dropdown-item dropdown-header" href="#">Shop By Brands</a></li>
									<li><a class="dropdown-item dropdown-header" href="#">Repair & Cleaning</a></li>
									<li><a class="dropdown-item dropdown-header" href="#">Sell Your Product</a></li>
									</ul>
									</div>
									
									
									</div>
									</div>
									
									</div>
									</li>
									
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#">
									Hand Purse <span class="arrow"><i class="fa fa-angle-down"></i></span>
									</a>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="shop-page1.html">Top Bar
									</a>
									<a class="dropdown-item" href="shop-page2.html">Right Sidebar
									</a>
									<a class="dropdown-item" href="shop-page3.html">Top and Right Sidebar</a>
									<a class="dropdown-item" href="shop-page4.html">Left Sidebar</a>
									<a class="dropdown-item" href="shop-page5.html">Top and left Sidebar</a>
									
									</div>
									</li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#">
									Footwear <span class="arrow"><i class="fa fa-angle-down"></i></span>
									</a>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="product-page1.html">Left Carousel</a>
									<a class="dropdown-item" href="product-page2.html">Right Carousel</a>
									<a class="dropdown-item" href="product-page3.html">Vertical Thumbnail Carousel</a>
									<a class="dropdown-item" href="product-page4.html">Right Banner</a>
									<a class="dropdown-item" href="product-page5.html">Best Seller</a>
									
									</div>
								</li>-->
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<form>
						<input id="search" type="text" name="search" placeholder="Search here..." autocomplete='on'> <i class="fa fa-search"></i>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>


<!-- Sticky Header -->
<header id="stickyHeader" class="header-area header-sticky header-two  d-none">
	
	<div class="header-mini bg-purple">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-12 col-md-4 col-lg-4">
					<h4 class="text-white ">Customer care number: <strong><a href="tel:9718636582" class="text-white">+91 9718636582</a></strong></h4>
				</div>
				<div class="col-12 col-md-5 col-lg-4">
					<marquee width="100%" direction="left" class="text-white">
						Slick Pattren Noticications
					</marquee>
				</div>
				<div class="col-12 col-md-3 col-lg-4">
					<div class="pro-header-options d-flex" style="justify-content: space-evenly">
						
						<!--<div class="dropdown icon-header">
							<a data-toggle="modal" data-target="#registerModal" href="#" class="text-white hvr-grow hoverHeaderIcons" title="SignIn/SignUp" data-toggle="tooltip" data-placement="bottom">
							<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>-->
						
						<?php 
							if($this->permission=='false')
							{
							?>
							<div class="dropdown icon-header">
								<a data-toggle="modal" data-target="#registerModal" href="#" class="text-white hvr-grow hoverHeaderIcons" title="SignIn/SignUp" data-toggle="tooltip" data-placement="bottom">
									<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
								</a>
							</div>
							<?php 
							}
							else 
							{
							?>
							<div class="dropdown icon-header">
								<a data-toggle="dropdown" href="#" class="text-white hvr-grow hoverHeaderIcons">
									<span class="bi bi-person hvr-grow" style="font-size: 22px;">   </span>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="<?= base_url('Home/Profile')?>">Profile</a>
									<a class="dropdown-item" href="<?= base_url('Home/Wishlist')?>">Wishlist</a>
									<a class="dropdown-item" href="<?= base_url('Home/Order')?>">Order History</a>
									<a class="dropdown-item" href="<?= base_url('Home/SlickWallet')?>">Wallet</a>
									<a class="dropdown-item" href="<?= base_url('Home/ShareAndEarn')?>">Share A Friend</a>
									<a class="dropdown-item" href="<?= base_url('Home/ShareAndEarn/App')?>">Share App With Friend</a>
									<a class="dropdown-item" href="<?= base_url('Home/Logout')?>">Logout</a>
								</div>
							</div>
							<?php 
							}	
						?>
						
						
						<!--<div class="dropdown icon-header">
							<a href="<?= base_url('Profile')?>" class="text-white hvr-grow hoverHeaderIcons" title="Profile" data-toggle="tooltip" data-placement="bottom">
							<span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>-->
						<div class="dropdown icon-header">
							<a href="<?= base_url('Wishlist')?>" class="text-white hvr-grow hoverHeaderIcons" title="Wishlist" data-toggle="tooltip" data-placement="bottom">
								<span class="bi bi-heart hvr-grow" style="font-size: 18px;"></span>
							</a>
						</div>
						<div class="dropdown icon-header">
							<a href="<?= base_url('Cart')?>" class="text-white hvr-grow hoverHeaderIcons" title="Cart" data-toggle="tooltip" data-placement="bottom">
								<i class="bi bi-cart  hvr-grow" style="font-size: 21px;"></i>
								<span class="badge badge-secondary headercount">
									<?php 
										if(!empty($UserData))
										{
											echo $UserData;
										}
										else 
										{
											echo "0";
										}
									?>
								</span>
							</a>
						</div>
						<div class="dropdown icon-header">
							<a href="javascript:void(0);" class="text-white hvr-grow hoverHeaderIcons" title="E-Catalog" data-toggle="tooltip" data-placement="bottom">
								<i class="bi bi-journal-code  hvr-grow" style="font-size: 18px;"></i>
							</a>
						</div>
						<div class="dropdown icon-header">
							<a href="<?= base_url('Home/OrderTracking');?>" class="text-white hvr-grow hoverHeaderIcons" title="Track Order" data-toggle="tooltip" data-placement="bottom">
								<i class="bi bi-truck  hvr-grow" style="font-size: 22px;"></i>
							</a>
						</div>
						<div class="dropdown icon-header">
							<a href="javascript:void(0);" class="text-white hvr-grow hoverHeaderIcons" title="Become a partner" data-toggle="tooltip" data-placement="bottom" >
								<span class="bi bi-person-plus hvr-grow" style="font-size: 22px;"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-maxi bg-sticky-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-12 col-sm-12 col-lg-2 d-flex justify-content-center">
					<a href="<?php echo base_url(); ?>" class="logo">
						<img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
					</a>
				</div>
				<div class="col-12 col-sm-8" style="position:static;">
					<nav id="stickyNavbar" class="navbar navbar-expand-lg navbar-fixed-top ">
						<div class="navbar-collapse">
							<ul class="navbar-nav">
								<?php 
									if(!empty($this->category)){
										foreach($this->category as $category){
											$sub_categories = $this->db->get_where('sub_category', ['category_id' => $category->id, 'is_status' => 'true'])->result();
										?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="<?= base_url('Home/Individual') ?>">
												<?= $category->name;?> <span class="arrow" style="margin:3px;"><i class="fa fa-angle-down"></i></span>
											</a>
											<div class="dropdown-menu">
												<?php 
													foreach ($sub_categories as $sub_category) {
													?>
													<a class="dropdown-item" href="<?= base_url('Home/ComboProduct') ?>"><?= $sub_category->name; ?></a>
													<?php 
													}
												?>
											</div>
										</li>
										<?php 
										}
									} 
								?>
							</ul>
							
						</div>
					</nav>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<form>
						<input id="search" type="text" name="search" placeholder="Search here..." autocomplete='on'> <i class="fa fa-search"></i>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- //Mobile Header -->
<header id="headerMobile" class="header-area header-mobile">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<div class="container">
			<div class="pro-description">
				<div class="pro-info">
					Get<strong> UPTO 40% OFF </strong>on your 1st order
					<div class="pro-link-dropdown js-toppanel-link-dropdown">
						<a href="shop-page1.html" class="pro-dropdown-toggle">
							More details
						</a>
						
					</div>
				</div>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
		</div>
	</div>
	<div class="header-maxi bg-header-bar pb-2">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-2 pr-0">
					<div class="navigation-mobile-container">
						<a href="javascript:void(0)" class="navigation-mobile-toggler">
							<span class="fas fa-bars"></span>
						</a>
						<nav id="navigation-mobile">
							<div class="logout-main">
								<div class="welcome">
									<span>Welcome&nbsp;Guest !</span>
								</div>
								<div class="logout">
									<a href="#" class="">Logout</a>
								</div>
							</div>
							<a class="main-manu btn"  href="<?= base_url() ?>" >
								Home
							</a>
							<?php if(!empty($this->category)){
								$count=1;
								foreach($this->category as $category){
								?>
								<a class="main-manu btn collapsed" data-toggle="collapse" href="#homepages<?= $count?>" role="button" aria-expanded="false" aria-controls="shoppages">
									<?= $category->name ?>
								</a>
								<div class="sub-manu collapse multi-collapse" id="homepages<?= $count ?>">
									<ul class="unorder-list">
										<li class="">
											<a href="<?= base_url('Home/Individual')?>" class="btn main-manu">
												Individual
											</a>
											<a href="<?= base_url('Home/ComboProduct')?>" class="btn main-manu">
												Combo
											</a>
										</li>
									</ul>
								</div>
							<?php $count++; } } ?>
							<!--<a class="main-manu btn collapsed" data-toggle="collapse" href="#shoppages" role="button" aria-expanded="false" aria-controls="shoppages">
								Fashion
								</a>
								<div class="sub-manu collapse collapsed multi-collapse" id="shoppages">
								<ul class="unorder-list">
								<li class="">
								<a href="<?= base_url('Home/Product')?>" class="btn main-manu">
								Fashion 1
								</a>
								<a href="<?= base_url('Home/Product')?>" class="btn main-manu">
								Fashion 1
								</a>
								<a href="<?= base_url('Home/Product')?>" class="btn main-manu">
								Fashion 1
								</a>
								<a href="<?= base_url('Home/Product')?>" class="btn main-manu">
								Fashion 1
								</a>
								<a href="<?= base_url('Home/Product')?>" class="btn main-manu">
								Fashion 1
								</a>
								</li>
								</ul>
								</div>
								<a class=" main-manu btn collapsed" data-toggle="collapse" href="#staticpages" role="button" aria-expanded="false" aria-controls="staticpages">
								Hand Purse
								</a>
								<div class="sub-manu collapse multi-collapse" id="staticpages">
								<ul class="unorder-list">
								<li class="">
								<a class="main-manu btn " data-toggle="collapse" href="#staticabout" role="button" aria-expanded="false" aria-controls="staticabout">
								Hand Purse
								</a>
								<div class="sub-manu1 collapse multi-collapse" id="staticabout">
								<ul class="unorder-list">
								<li class="">
								<a href="about-page1.html" class="btn main-manu">
								Hand Purse 1
								</a>
								<a href="about-page2.html" class="btn main-manu">
								Hand Purse 2
								</a>
								</li>
								</ul>
								</div>
								</li>
								</ul>
							</div>-->
							<?php
								if($this->permission == 'true')	
								{
								?>
								<a href="<?= base_url('Profile')?>" class="main-manu btn ">
									Profile
								</a>
								<a href="<?= base_url('Wishlist')?>" class="main-manu btn ">
									Wishlist (8)
								</a>
								<a href="<?= base_url('Compare')?>" class="main-manu btn ">
									Compare
								</a>
								<a href="orders.html" class="main-manu btn ">
									Orders
								</a>
								<a href="shipping-address.html" class="main-manu btn ">
									Shipping Address
								</a>
								<?php
								}
							?>
						</nav>
					</div>
				</div>
				<div class="col-8 p-0 pr-1">
					<div class="logoBox d-flex">
						<a href="<?php echo base_url(); ?>" class="logo " >
							<img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
						</a>
						<a class="search-handle  " href="javascript:void(0);" style="margin:5px; margin-right: 0p">
							<i class="bi bi-search"></i>   
						</a>     
					</div>
					<div class="search-box " style="border-bottom: 1px solid #cdc5c5; display:none;">
						<div class="input-group">
							<input class="search-txt form-control" type="text" name="" placeholder="Type to Search" style="border: none; padding-left: 6px; box-shadow: none; outline: none;" aria-label="Username" aria-describedby="basic-addon1">
							<div class="input-group-append">
								<button type="submit" class="search-btn" href="#" style="padding-right: 5px; border:none;background:none;">
									<i class="bi bi-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-2 pl-0 d-flex justify-content-end align-items-center">
					<div class="cart-dropdown dropdown">
						
						<a class="cart-dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="bi bi-heart" aria-hidden="true"></i>&ensp;
							<i class="bi bi-cart3" aria-hidden="true"></i>
							<span class="badge badge-secondary">2</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
							<ul class="shopping-cart-items">
								<li>
									<div class="item-thumb">
										
										<div class="image">
											<img class="img-fluid" src="<?= base_url('public') ?>/images/product_images/product_image_02.jpg" alt="Product Image">
										</div>
									</div>
									<div class="item-detail">
										<h2>Crystal Water Drop Earrings</h2>
										<div class="item-s">2 x $285.00 <i class="bi bi-trash"></i></div>
									</div>
								</li>
								<li>
									<div class="item-thumb">
										
										<div class="image">
											<img class="img-fluid" src="<?= base_url('public') ?>/images/product_images/product_image_03.jpg" alt="Product Image">
										</div>
									</div>
									<div class="item-detail">
										<h2>Crytal Wedding Function Rings</h2>
										<span class="item-s">4 x $85.00 <i class="bi bi-trash"></i></span>
									</div>
								</li>
								<li>
									<span class="item-summary">Total&nbsp;:&nbsp;<span>$910.00</span>
									</span>
								</li>
								<li>
									<a class="btn btn-link btn-block " href="<?= base_url('Home/Cart')?>">View Cart</a>
									<a class="btn btn-secondary btn-block  swipe-to-top" href="checkout.html">Checkout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</header>


<!-- modal -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>



<!-- registerModal Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered " role="document" id="modalwidth" style="max-width: 650px; margin: 1.75rem auto;">
		<div class="modal-content" style="max-height:450px; max-width: 650px;">
			<div class="modal-header">
				<h4 class="modal-title" id="registerModalLabel"><br>
					<button type="button" class="close btn-md ml-0" data-dismiss="modal" aria-label="Close">
						<!--<span aria-hidden="true">&times;</span>-->
						<svg viewBox="0 0 24 24" class="css-1oql73n"><title></title><path d="M20.6907 3.30935C20.5934 3.21133 20.4778 3.13352 20.3503 3.08043C20.2229 3.02734 20.0862 3 19.9481 3C19.8101 3 19.6734 3.02734 19.5459 3.08043C19.4185 3.13352 19.3028 3.21133 19.2056 3.30935L12 10.5254L4.79439 3.30935C4.69688 3.21184 4.58112 3.13449 4.45372 3.08172C4.32632 3.02895 4.18977 3.00178 4.05187 3.00178C3.91397 3.00178 3.77742 3.02895 3.65002 3.08172C3.52262 3.13449 3.40686 3.21184 3.30935 3.30935C3.11242 3.50628 3.00178 3.77337 3.00178 4.05187C3.00178 4.33037 3.11242 4.59746 3.30935 4.79439L10.5254 12L3.30935 19.2056C3.21133 19.3028 3.13352 19.4185 3.08043 19.5459C3.02734 19.6734 3 19.8101 3 19.9481C3 20.0862 3.02734 20.2229 3.08043 20.3503C3.13352 20.4778 3.21133 20.5934 3.30935 20.6907C3.40657 20.7887 3.52224 20.8665 3.64968 20.9196C3.77712 20.9727 3.91381 21 4.05187 21C4.18993 21 4.32662 20.9727 4.45406 20.9196C4.5815 20.8665 4.69717 20.7887 4.79439 20.6907L12 13.4746L19.2056 20.6907C19.3028 20.7887 19.4185 20.8665 19.5459 20.9196C19.6734 20.9727 19.8101 21 19.9481 21C20.0862 21 20.2229 20.9727 20.3503 20.9196C20.4778 20.8665 20.5934 20.7887 20.6907 20.6907C20.7887 20.5934 20.8665 20.4778 20.9196 20.3503C20.9727 20.2229 21 20.0862 21 19.9481C21 19.8101 20.9727 19.6734 20.9196 19.5459C20.8665 19.4185 20.7887 19.3028 20.6907 19.2056L13.4746 12L20.6907 4.79439C20.7887 4.69717 20.8665 4.5815 20.9196 4.45406C20.9727 4.32662 21 4.18993 21 4.05187C21 3.91381 20.9727 3.77712 20.9196 3.64968C20.8665 3.52224 20.7887 3.40657 20.6907 3.30935Z" fill="#001325" fill-opacity="0.92"></path></svg>
					</button>
				</h4>
				<h4 class="modal-title" id="reghed" style="display:none">
					<button type="button" class="close btn-md ml-0" data-dismiss="modal" aria-label="Close">
						<!--<span aria-hidden="true">&times;</span>-->
						<button onclick="backarrow()" class="btn">
							<svg viewBox="0 0 24 24" class="css-1oql73n" id="backbtn" ><title></title><path d="M21.0005 11.0243L5.41829 11.0243L10.9255 5.66654C11.0192 5.57598 11.0936 5.46824 11.1443 5.34953C11.1951 5.23082 11.2212 5.1035 11.2212 4.9749C11.2212 4.84631 11.1951 4.71898 11.1443 4.60028C11.0936 4.48157 11.0192 4.37383 10.9255 4.28327C10.7383 4.10184 10.4849 4 10.2209 4C9.95684 4 9.70351 4.10184 9.51624 4.28327L2.29985 11.3068C2.20541 11.397 2.13028 11.5046 2.07881 11.6233C2.02733 11.742 2.00055 11.8695 2 11.9984C2.00055 12.1273 2.02733 12.2548 2.07881 12.3735C2.13028 12.4922 2.20541 12.5998 2.29985 12.69L9.50625 19.7135C9.69446 19.8969 9.94972 20 10.2159 20C10.4821 20 10.7373 19.8969 10.9255 19.7135C11.1137 19.5301 11.2195 19.2813 11.2195 19.0219C11.2195 18.7625 11.1137 18.5137 10.9255 18.3302L5.42829 12.9725L21.0005 12.9725C21.2656 12.9725 21.5198 12.8699 21.7073 12.6872C21.8947 12.5045 22 12.2568 22 11.9984C22 11.74 21.8947 11.4923 21.7073 11.3096C21.5198 11.1269 21.2656 11.0243 21.0005 11.0243Z" fill="#001325" fill-opacity="0.92"></path></svg>
						</button>
						
					</button>
				</h4>
				<button type="button" class="close btn-md" data-dismiss="modal" aria-label="Close">
					<img src="<?= base_url('assets/mobile.jpg')?>" style="height: 100px;margin-top: 1rem;margin-right: -1rem;"/>
				</button>
				
				
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-8">
						<div id="reg">
							<h4 style="color: rgb(25, 40, 55);">Login using mobile</h4>
							<p style="color: rgb(25, 40, 55);">Kindly enter the 10-digit mobile number and verify using OTP.</p>
							<div class="form-group">
								<input type="number" class="form-control" id="mobile" required placeholder="XXX-XXX-XXXX">
							</div>
							
							<div class="form-group mt-2" id="refCodeDiv">
								<input type="text" class="form-control" id="ref_by" placeholder="Enter Referral Code (Optional)">
							</div>
							
							<button style="margin-top: 0px !important;" class="btn btn-secondary btn-block mb-2" onclick="registerUser()">SUBMIT</button>
							
							<p style="color: rgba(0, 19, 37, 0.64);font-size: 12px;">By signing in, I agree to <a href="<?= base_url('Home/TermAndCondition')?>">Terms & Conditions,</a> and <a href="<?= base_url('Home/PrivacyPolicy')?>">Privacy Policy</a></p><br>
						</div>
					</div>
				</div>
				
				<div class="row">
				<div class="col-sm-8">
				<div id="regotp" style="display:none;">
				<h4 style="color: rgb(25, 40, 55);">Verify OTP</h4>
				<p style="color: rgb(25, 40, 55);">Enter the four digit OTP sent to</p>
				<div class="form-group mb-4">
				<input type="text" class="form-control" id="otp" placeholder="Enter OTP">
				</div>
				<button style="margin-top: 0px !important;" class="btn btn-secondary btn-block mb-4" onclick="verifyOTP()">VERIFY OTP</button><br>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				
				
				<script>
				// Your JavaScript code goes here
				// function registerUser() {
				// var mobile = $('#mobile').val();
				// $.ajax({
				// type: 'POST',
				// url: "<?= base_url('Home/register_user')?>",
				// data: { mobile: mobile },
				// dataType: 'json',
				// success: function(response) {
				// if (response.success) {
				// $('#reg').hide();
				// $('#regotp').show();
				// } else {
				// alert(response.msg);
				// }
				// }
				// });
				// }
				
				// function verifyOTP() {
				// var otp = $('#otp').val();
				// var mobile = $('#mobile').val();
				
				// $.ajax({
				// type: 'POST',
				// url: "<?= base_url('Home/verify_otp')?>",
				// data: { otp: otp, mobile: mobile },
				// dataType: 'json',
				// success: function(response) {
				// if (response.success) {
				// window.location.href="<?= base_url('Home/Profile')?>";
				// } else {
				// alert(response.msg);
				// }
				// }
				// });
				// }
				
				function backarrow() 
				{
				$('#regotp').hide();
				$('#reg').show();
				$('#registerModalLabel').show();
				$('#reghed').hide();
				}
				
				
				// for registerUser 
				function registerUser() {
				var mobile = $('#mobile').val();
				var ref_by = $('#ref_by').val();
				
				$.ajax({
				type: 'POST',
				url: "<?= base_url('Home/register_user')?>",
				data: { mobile: mobile,ref_by: ref_by },
				dataType: 'json',
				success: function(response) {
				if (response.success) {
				if (response.msg) {
				toastr.success(response.msg);
				}
				
				// Check if the user is old
				// if (response.is_old_user) {
				// $('#refCodeDiv').hide();
				// }
				$('#reg').hide();
				$('#regotp').show();
				
				$('#registerModalLabel').hide();
				$('#reghed').show();
				
				} else {
				toastr.error(response.msg);
				}
				}
				});
				}
				
				
				
				
				
				
				// for verifyOtp 
				function verifyOTP() {
				var otp = $('#otp').val();
				var mobile = $('#mobile').val();
				
				$.ajax({
				type: 'POST',
				url: "<?= base_url('Home/verify_otp')?>",
				data: { otp: otp, mobile: mobile },
				dataType: 'json',
				success: function(response) {
				if (response.success) {
				toastr.success(response.msg);
				
				
				setTimeout(function() {
				window.location.href = "<?= base_url('Home/Profile')?>";
				}, 1000);
				} else {
				toastr.error(response.msg);
				}
				},
				error: function(xhr, status, error) {
				console.error(xhr.responseText);
				}
				});
				}
				</script>					