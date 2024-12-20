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
			
			.slide-toggle {
            display: none !important;
			}
			
			@media only screen and (min-device-width : 280px) and (max-device-width : 600px) {
            .slick_img {
			height: 200px;
            }
			
            .nav {
			display: flex !important;
			flex-wrap: wrap !important;
			padding-left: 0 !important;
			margin-bottom: 0 !important;
			list-style: none !important;
			flex-direction: column !important;
            }
			
			}
		</style>
	</head>
	
	<body>
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Press</li>
					</ol>
				</div>
			</nav>
		</div>
		
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container">
				<div class="products-area">
					<?php
						$list = $this->db->get("tbl_press")->row();
						
					?>
					
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<!--<h1>Slick Pattern Story</h1>
								<p>India’s largest omnichannel beauty destination</p>-->
								<?= !empty($list->title1) ? $list->title1 : '' ?>
								<p style="text-align:center">
									<?= !empty($list->subtitle1) ? $list->subtitle1 : '' ?>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<p class="text-center text-justify">
								<?= !empty($list->desc1) ? $list->desc1 : '' ?>
							</p>
							
							<!--<p class="text-justify text-center">Derived from the Sanskrit word ‘Nayaka’ meaning actress or one in the spotlight, SlickPattern is all about celebrating the star in each woman, and being her confidante and companion as she embarks on her own journey to discover her unique identity and personal style. From the widest selection of genuine beauty products from around the world to beauty advice, SlickPattern is truly passionate about catering to your every beauty and wellness need. Because after all, Your Beauty is Our Passion.</p>-->
						</div>
						<div class="col-sm-12">
							<img alt="<?= !empty($list->alt) ? $list->alt : '' ?>" title="<?= !empty($list->seo_title) ? $list->seo_title : '' ?>" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('uploads/brand/'.$list->image1)?>" class="img-fluid w-100 lazy slick_img">
							<!--<img src="<?= $this->data->lazyLoader; ?>" data-src="https://www.nykaa.com/media/wysiwyg/2022/cms/nykaa-ipo-banner.jpg" class="img-fluid w-100 lazy slick_img">--> 
						</div>
						<div class="col-sm-10 mx-auto ">
							<div class="card shadow p-4" style="margin-top: -30px">
								<div class="card-body">
									<!--<h2 style="font-weight:800" class="p-0 pageheading ">
										SlickPattern features in the prestigious annual TIME100
									</h2>-->
									<h2 style="font-weight:800" class="p-0 pageheading ">
										<?= !empty($list->title2) ? $list->title2 : '' ?>
									</h2>
									
									<!--<h2 style="font-weight:800" class="p-0 pageheading ">Most Influential Companies List 2022</h2>-->
									<h2 style="font-weight:800" class="p-0 pageheading ">
										<?= !empty($list->subtitle2) ? $list->subtitle2 : '' ?>	
									</h2>
									<span>
										<?= !empty($list->desc2) ? $list->desc2 : '' ?>	
									</span>
									<!--<span>Ten years after being founded by entrepreneur Falguni Nayar with the goal of inspiring Indian women, SlickPattern has evolved into one of India’s largest cosmetics and lifestyle brands.</span>-->
									<br>
									<br>
									<button class="btn btn-secondary mt-3">Read More</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="pro-content pro-tr-content testimonails-content mt-4">
			<div class="container">
				<div class="products-area ">
					<div class="row justify-content-center">
						<div class="col-sm-6 col-12">
							<div class="card" style="height: 183px">
								<div class="card-body">
									<!-- <h2>Our Vision</h2> 
									<p>Bring inspiration and joy to people, everywhere, everyday.</p> -->
									<h2><?= !empty($list->our_vission) ? $list->our_vission : '' ?></h2>
									<p><?= !empty($list->vission_desc4) ? $list->vission_desc4 : '' ?></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<!--<h2>Our Mission</h2> 
									<p>To create a world where our consumers have access to a finely curated, authentic assortment of products and services that delight and elevate the human spirit.</p> 	-->
									<h2><?= !empty($list->our_mission) ? $list->our_mission : '' ?></h2>
									<p><?= !empty($list->mission_desc3) ? $list->mission_desc3 : '' ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container">
				<div class="products-area">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-12">
							<div class="pro-heading-title">
								<!--<h2>Our Values</h2>-->
								<h2><?= !empty($list->our_values) ? $list->our_values : '' ?></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<img alt="<?= !empty($list->alt2) ? $list->alt2 : '' ?>" title="<?= !empty($list->seo_title2) ? $list->seo_title2 : '' ?>" data-src="<?= base_url('./uploads/brand/'.$list->image2)?>" src="<?= $this->data->lazyLoader; ?>" class="img-fluid w-100 lazy">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<!--<h2>A Day In The Life Of SlickPattern</h2>-->
							<h2><?= !empty($list->title3) ? $list->title3 : '' ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!--<img src="<?= $this->data->lazyLoader; ?>" data-src="https://adn-static1.nykaa.com/media/wysiwyg/2019/who-we-are/galleryimage2a212.png" class="img-fluid lazy">-->
						<img alt="<?= !empty($list->alt3) ? $list->alt3 : '' ?>" title="<?= !empty($list->seo_title3) ? $list->seo_title3 : '' ?>" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('./uploads/brand/'.$list->image3)?>" class="img-fluid lazy">
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonails -->
		<section class="pro-content testimonails-content">
			
			<div class="container">
				<!-- heading -->
				
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<!--<h2>Our Leadership Team</h2>-->
							<h2><?= !empty($list->title4) ? $list->title4 : '' ?></h2>
						</div>
					</div>
				</div>
				<div class="testimonials-carousel-js row">
					<?php
						$ourleadership = $this->db->get("ourleadership")->result();
						if (!empty($ourleadership)) {
							foreach ($ourleadership as $item) {
							?>
							<div class="col-12">
								<figure class="banner-image">
									<img alt="<?= !empty($item->alt) ? $item->alt : '' ?>" title="<?= !empty($item->seo_title) ? $item->seo_title : '' ?>"  class="img-fluid lazy" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('./uploads/brand/' . $item->image) ?>" alt="Profile Image">
								</figure>
								<div class="pro-detail">
									<h2><a href="#"><?= $item->title; ?></a></h2>
									
									<p>
										<?= $item->description; ?>
									</p>
									<a href="#" class="pro-readmore" tabindex="0">Read more</a>
								</div>
							</div>
							<?php
							}
						}
					?>
					<!-- <div class="col-12">
						<figure class="banner-image">
                        <img class="img-fluid lazy" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('public/') ?>images/about-us/profile.png" alt="Profile Image">
						</figure>
						<div class="pro-detail">
                        <h2><a href="blog-page1.html">Jeny Martinez</a></h2>
						
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
						incdidunt ut labore et dolore magna aliqua
                        </p>
                        <a href="#" class="pro-readmore" tabindex="0">Read more</a>
						</div>
						</div>
						
						<div class="col-12">
						<figure class="banner-image">
                        <img class="img-fluid lazy" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('public/') ?>images/about-us/profile.png" alt="Banner Image">
						</figure>
						<div class="pro-detail">
                        <h2><a href="blog-page1.html">Theresa May</a></h2>
						
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
						incdidunt ut labore et dolore magna aliqua [....]
                        </p>
                        <a href="#" class="pro-readmore" tabindex="0">Read more</a>
						</div>
						</div>
						<div class="col-12">
						<figure class="banner-image">
                        <img class="img-fluid lazy" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('public/') ?>images/about-us/profile.png" alt="Banner Image">
						</figure>
						<div class="pro-detail">
                        <h2><a href="blog-page1.html">Malissa</a></h2>
						
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
						incdidunt ut labore et dolore magna aliqua [....]
                        </p>
                        <a href="#" class="pro-readmore" tabindex="0">Read more</a>
						</div>
					</div> -->
					
				</div>
			</div>
		</section>
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<!--<img src="<?= $this->data->lazyLoader; ?>" data-src="https://adn-static1.nykaa.com/media/wysiwyg/2019/who-we-are/galleryimage1.png" class="img-fluid lazy">-->
						<img alt="<?= !empty($list->alt4) ? $list->alt4 : '' ?>" title="<?= !empty($list->seo_title4) ? $list->seo_title4 : '' ?>" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('./uploads/brand/'.$list->image4)?>" class="img-fluid lazy">
					</div>
				</div>
			</div>
		</section>
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<!--<h2>Are You Keen To Join Our Team?</h2>-->
							<h2><?= !empty($list->title5) ? $list->title5 : '' ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- <p class="text-center">We’ve tried to transform the way India shops for beauty and that hasn’t been easy. Luckily for us, we have an incredible team that loves a challenge. Our team is constantly growing and evolving and we’re always on the look-out for young, energetic, highly-motivated superheroes to come aboard.</p>-->
						<p class="text-center"><?= !empty($list->desc3) ? $list->desc3 : 'okkkkk' ?></p>
					</div>
				</div>
				<div class="row">
					<?php
						$ourteam = $this->db->get("ourteam")->result();
						if (!empty($ourteam)) {
							foreach ($ourteam as $item) {
								
							?>
							<div class="col-sm-4 col-12">
								<center><img alt="<?= !empty($item->alt) ? $item->alt : '' ?>" title="<?= !empty($item->seo_title) ? $item->seo_title : '' ?>" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('./uploads/brand/' . $item->image) ?>" class="lazy" style="height: 50px;"></center>
								<h3 class="text-center"><?= $item->title; ?></h3>
								<center> <?= $item->description; ?></center>
							</div>
							<?php
							}
						}
					?>
					<!-- <div class="col-sm-4 col-12">
						<center><img src="<?= $this->data->lazyLoader; ?>" class="lazy" data-src="https://cdn.w600.comps.canstockphoto.com/rockstar-symbol-with-sign-of-the-horns-eps-vector_csp23602744.jpg" style="height: 50px;"></center>
						<h3 class="text-center">Rockstar team players</h3>
						<center><span>eCommerce is all <br> about working in teams</span></center>
						</div>
						<div class="col-sm-4 col-12">
						<center><img src="<?= $this->data->lazyLoader; ?>" class="lazy" data-src="https://cdn.w600.comps.canstockphoto.com/rockstar-symbol-with-sign-of-the-horns-eps-vector_csp23602744.jpg" style="height: 50px;"></center>
						<h3 class="text-center">Rockstar team players</h3>
						<center><span>eCommerce is all <br> about working in teams</span></center>
					</div> -->
					<!-- <div class="col-sm-4 col-12">
						<center><img src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.w600.comps.canstockphoto.com/rockstar-symbol-with-sign-of-the-horns-eps-vector_csp23602744.jpg" class="lazy" style="height: 50px;"></center>
						<h3 class="text-center">Rockstar team players</h3>
						<center> <span>eCommerce is all <br> about working in teams</span></center>
					</div> -->
					<div class="col-sm-12 mt-3">
						<!--<p class="text-center">If you feel you’ve got what it takes, get in touch at careers@nykaa.com</p>-->
						<p class="text-center"><?= !empty($list->title6) ? $list->title6 : '' ?></p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<!--<h2>Authenticity</h2>-->
							<h2><?= !empty($list->title7) ? $list->title7 : '' ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- <p class="text-center">We have developed systems and processes to ensure that the products sold on our platform are authentic, and build trust among our consumers and brands. For our beauty and personal care offering, our business is predominantly inventory led. This approach ensures sourcing directly from brands or their authorized distributors in India. It allows us to guarantee authenticity of products bought by our consumers, an important consideration for consumers of such products. We also conduct quality checks at our warehouses periodically on our beauty and personal care products. For our fashion offering, we operate a managed marketplace and ensure that the sellers we onboard are authorized resellers only. We have also developed systems to monitor and address consumer complaints towards our ongoing commitment to authenticity.</p>-->
						<p class="text-center"><?= !empty($list->desc4) ? $list->desc4 : '' ?></p>
					</div>
					<div class="col-sm-12 mt-3">
						<p class="text-center"><a href="#" class="btn btn-secondary">Know More</a></p>
					</div>
				</div>
				
			</div>
		</section>
		
		<section class="pro-content pro-plr-content " style="padding-bottom: 0px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-12">
						<div class="pro-heading-title">
							<center><i class="fa fa-calculator fa-3x text-denger"></i></center>
							<!--<h2>Press</h2>-->
							<h2><?= !empty($list->title8)?$list->title8:''?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- <nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist" >
							<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Interviews</a>
							<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Fund Raising</a>
							<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">New Launches</a>
							</div>
						</nav> -->
						<?php
							$newlaunches = $this->db->get("newlaunches")->result();
						?>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<div class="row">
									<div class="col-sm-12" style="padding: 40px">
										<!-- <h2 style="font-weight: 700">NEW LAUNCHES</h3> -->
										<h2 style="font-weight: 700">
										<?= !empty($list->title9)?$list->title9:''?></h3>
                                        <?php
											if (!empty($newlaunches)) {
												foreach ($newlaunches as $item) {
													$uniqueId = "read-more-" . $item->id;
												?>
                                                <div class="card shadow mt-1">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <img alt="<?= !empty($item->alt) ? $item->alt : '' ?>" title="<?= !empty($item->seo_title) ? $item->seo_title : '' ?>" src="<?= $this->data->lazyLoader; ?>" data-src="<?= base_url('./uploads/brand/' . $item->image); ?>" class="img-fluid w-100 p-0 lazy">
															</div>
                                                            <div class="col-sm-8">
                                                                <h5><?= $item->title; ?> </h5>
                                                                <h3><?= $item->subtitle; ?><br>
                                                                    <p id="<?= $uniqueId; ?>"> <?= $item->description; ?>
                                                                        <hr>
																		<div class="row">
																			<div class="col-sm-6">
																				<p style="font-weight: 800">
																					<?php
																						$dateString = $item->date;
																						$date = new DateTime($dateString);
																						$formattedDate = $date->format("F j, Y");
																						$formattedDate = strtoupper($date->format("F j, Y"));
																						echo $formattedDate;
																					?>
																				</p>
																			</div>
																			<div class="col-sm-6">
																				<p class="text-right"> <button class="btn btn-secondary" onclick="toggleReadMore('<?= $uniqueId; ?>')">Know More </button> </p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php
														}
													}
												?>
												
												<!-- <div class="card shadow mt-1">
													<div class="card-body">
													<div class="row">
													<div class="col-sm-4">
													<img src="<?= $this->data->lazyLoader; ?>" data-src="https://adn-static1.nykaa.com/media/wysiwyg/2019/who-we-are/Press/Interviews/11TheEconomicTimes_Bangalore_P04_27November2018.jpg" class="img-fluid w-100 p-0 lazy">  
													</div> 
													<div class="col-sm-8">
													<h5>ECONOMIC TIMES BANGALORE</h5>
													<h3>Nykaa Eyes a Rs. 85 crore Touch-up with this Year's Pink Friday Sale</h3>
													<br>
													<p> ECONOMIC TIMES BANGALORENykaa Eyes a Rs. 85 crore Touch-up with this Year's Pink Friday Sale
													Beauty retailer saw order volume grow 5x, while the average sale value was up 46% on first day alone</p>
													<hr>
													<div class="row">
													<div class="col-sm-6">
													<p style="font-weight: 800">NOVEMBER 27, 2018</p>  
													</div>	
													<div class="col-sm-6">
													<p class="text-right"> <button class="btn btn-secondary">Know More </button>  </p>
													</div>	
													</div>
													</div>
													</div>
													</div>  
												</div> -->
												
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
				
				
				<script>
					function toggleReadMore(uniqueId) {
						var description = document.getElementById(uniqueId);
						var button = document.querySelector('[onclick="toggleReadMore(\'' + uniqueId + '\')"]');
						
						if (description.classList.contains('expanded')) {
							description.classList.remove('expanded');
							button.innerText = 'Read More';
							} else {
							description.classList.add('expanded');
							button.innerText = 'Read Less';
						}
					}
				</script>
				
				
				
			</body>
			
		</html>		