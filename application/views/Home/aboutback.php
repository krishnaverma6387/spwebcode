
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $list->meta_title?></title>
		<meta name="description" content="<?= $list->meta_description?>">
		<meta name="keywords" content="<?= $list->meta_keyword?>">
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
			@media only screen and (min-device-width : 320px) and (max-device-width : 600px){
			.founder_img{
			width: 100%!important;
			height: auto!important;
			}
			.founder_name{
			text-align:center!important;
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
						<li class="breadcrumb-item active" aria-current="page">AboutUs</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content ">	
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 p-0">
						<?php
							if(!empty($list))
							{
							?>
							<img class="img-fluid w-100 lazy"  src="<?= base_url('uploads/websitecontent/').$list->mainicon?>">		
							<?php
							}
						?>
					</div>	 
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center mt-4">
					<div class="pro-heading-title">
						<h1>
							A LEAP OF FAITH
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						
						<p class="peragraph text-right text-justify">
							<?php if(!empty($list)){echo $list->message;} ?>
						</p>
						
						<h3 class="text-right founder_name"><?php if(!empty($list)){echo $list->name;} ?></h3>
						
					</div>
					<div class="col-12 col-md-6">
						<?php
							if(!empty($list))
							{
							?>
							<img src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('uploads/websitecontent/').$list->icon?>" class="img-fluid lazy founder_img" style="height: 400px">
							<?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="container accordion-container ">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<?php
								if(!empty($list))
								{
								?>
								<img src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('uploads/websitecontent/').$list->image?>" class="img-fluid lazy">
								<?php
								}
							?>
						</div>
						<div class="col-12 col-md-6 mt-2">
							<div class="pro-heading-title">
								<h2>
									<?php if(!empty($list)){echo $list->title;} ?>
								</h2>
							</div>
							<p class="peragraph  peragraph2">
								<?php if(!empty($list)){echo $list->description;} ?>
							</p>
							
						</div>
					</div>
				</div>
				</div>
				<div class="container-fluid p-1" style="background: #F8F9FA">
					<div class="col-lg-12 col-12">
					<center><i class="fa fa-quote-left fa-3x" style="color: #FF1493;"></i></center>
					<p class="text-center mt-2">I think women today are ready to be inspired and shop in a way that truly inspires them. It’s less about discounts and more about trend and quality.</p>
					<p class="text-center mt-2">This is mirrored in our mission statement -</p>
					<h1 class="mt-3 text-center pageheading" style="color:#FF1493; font-weight: 600">Inspiring Indians, both men and women to make fashion & lifestyle choices that best suit them.</h1>
					<p class="mt-3 text-center">– Founder name, CEO, Slick Pattern</p>
				</div>	
			</div>
			
			<div class="container mt-5">
				<div class="pro-heading-title">
					<h2>
						WHAT SETS US APART
					</h2>
					<p class=" text-justify">While we offer a wide range of products, we place strong emphasis on curation. We identify fashion-forward brands, vetting for style and quality, and further select styles within these brands to offer. We also place importance on selling full-price products, reducing reliance on discounting, and selling the latest season’s designs. In addition, we use digital content, personalized mobile application experiences and proprietary recommendation algorithms, to build differentiated style-driven, discovery-led experiences for consumers</p>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-12 mt-2">
						<div class="pro-heading-title mt-5">
							<h2>GET TO KNOW THEM</h2>
						</div>
						<p class="text-center">We’ve worked very hard towards building a team of seriously cool and talented people and we want you to know who they are. You can get a glimpse of their style and lives on our website, by signing up for our mailers or following us on Instagram. (@slickpattern)</p>
						<p class="text-center"><button class="btn btn-secondary">Follow Us</button></p>
					</div>	
					<div class="col-sm-6 col-12">
					<center><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://images-static.nykaa.com/nykdesignstudio-images/pub/media/about-us/Get%20to%20know%20us.jpg"></center>
					</div>
					</div>
					</div>
					<div class="container">
					<div class="row">
					<div class="col-lg-12">
					<div class="pro-heading-title mt-5">
					<h2>SHOW US<br><span style="color: #FF1493;">Some Love</span></h2>
					</div>
					<p class="text-center">We’ll know we’re successful not through skyrocketing numbers but if we manage to build a community of customers who cares for us as deeply as we care for them. Keep coming back to us and tell us what you love, there’s nothing that makes us happier!</p>
					<center><img src="<?= $this->data->lazyLoader;?>" data-src="https://images-static.nykaa.com/nykdesignstudio-images/pub/media/about-us/Show-us-some-love%20(1).gif" class="img-fluid lazy"></center>
					</div>	
					</div>
					</div>
					<div class="container">
					<div class="pro-heading-title mt-5">
					<h2>THE JOYS OF THE JOURNEY</h2>
					</div>
					<div class="row">
					<div class="col-sm-6 col-12 mt-4">
					<center><i class="fa fa-quote-left fa-3x" style="color: #FF1493;"></i></center>
					<p class="text-right">We thoroughly enjoyed the process of building Nykaa beauty and it’s the same with Nykaa Fashion. More than the end goal, it’s about piecing something together, delighting customers and building memories with our team mates every day. This is something that I’ve learnt through C P Cavafy’s poem Ithaka, which my mother and I constantly go back to.</p>
					<p class="text-right">– Founder name, CEO, Slick Pattern</p>
					</div>	
					<div class="col-sm-6 col-12">
					<center><img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="https://images-static.nykaa.com/nykdesignstudio-images/pub/media/about-us/The%20joy%20of%20our%20journey.jpg" style="height: 450px;"></center>
					</div>
					</div>
					<div class="row mt-2">
					<div class="col-sm-5 m-auto">
					<i class="fa fa-quote-left fa-3x" style="color: #FF1493;opacity: 0.2"></i>  
					<p class="text-center">As you set out for Ithaka hope the voyage is a long one, full of adventure, full of discovery. Laistrygonians and Cyclops, angry Poseidon- don't be afraid of them: you'll never find things like that on your way as long as you keep your thoughts raised high, as long as a rare excitement stirs your spirit and your body. Laistrygonians and Cyclops, wild Poseidon- you won't encounter them unless you bring them along inside your soul, unless your soul sets them up in front of you. May there be many a summer morning when, with what pleasure, what joy, you come into harbors seen for the first time; may you stop at Phoenician trading stations to buy fine things, mother of pearl and coral, amber and ebony, the sensual perfume of every kind- as many sensual perfumes as you can; and may you visit many Egyptian cities to gather stores of knowledge from their scholars. Keep Ithaka always in your mind. Arriving there is what you are destined for. But do not hurry the journey at all. Better if it lasts for years, so you are old by the time you reach the island, wealthy with all you have gained on the way, not expecting Ithaka to make you rich. Ithaka gave you the marvelous journey. Without her, you would not have set out. She has nothing left to give you now. And if you find her poor, Ithaka won't have fooled you. Wise as you will have become, so full of experience, you will have understood by then what these Ithakas mean.
					– Constantine P. Cavafy</p>
					<p class="text-right"><i class="fa fa-quote-right fa-3x" style="color: #FF1493;opacity: 0.2"></i></p>
					</div>	
					</div>
					</div>
					
					
					
					</section>
					
					
					
					<?php include('include/footer.php'); ?>
					
					
					
					<?php include('include/jsLinks.php'); ?>
					
					</body>
					</html>																																																	