<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php 
    $list = $this->db->get("tbl_rewards")->row();
    ?>
<head>
    <meta charset="UTF-8">
    <!--<title><?//= $this->termsdata->slick_title ?></title>
    <meta name="description" content="<?//= $this->termsdata->slick_description ?>">
    <meta name="keywords" content="<?//= $this->termsdata->slick_keyword ?>">-->
	<title><?= $list->reward_title ?></title>
    <meta name="description" content="<?= $list->reward_description ?>">
    <meta name="keywords" content="<?= $list->reward_keyword ?>">
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

        @media only screen and (max-width: 600px) {
            .pageheading {
                font-size: 20px !important;
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
                    <!-- <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li> -->
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rewards</li>
                </ol>
            </div>
        </nav>
    </div>

   

    <section class="pro-content blog-content blog-content-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<center><img alt="<?= !empty($list->alt)?$list->alt:''?>" title="<?= !empty($list->seo_title)?$list->seo_title:''?>" src="<?= $this->data->lazyLoader; ?>" class="lazy" data-src="<?= base_url('./uploads/brand/'.$list->image1) ?>" style="height: 100px;width:100%"></center>
						<h1 class="text-center"><?= !empty($list->title1)?$list->title1:''?></h1>
						<h2 class="text-center"style="color: #271665"><?= !empty($list->subtitle1)?$list->subtitle1:''?></h2>
					</div> 
					
					<div class="col-sm-6">
						<h2><?= !empty($list->title2)?$list->title2:''?></h2>
						<p class="text-justify"><?= !empty($list->desc1)?$list->desc1:''?></p>
					</div> 
				</div>
				
				<div class="row mt-2">
					<div class="col-sm-6">
						<h2  style="color: #271665"><?= !empty($list->title3)?$list->title3:''?></h2>
						<p class="text-justify"><?= !empty($list->desc2)?$list->desc2:''?></p>
						
						<h2  style="color: #271665"><?= !empty($list->title4)?$list->title4:''?></h2>
						<p class="text-justify"><?= !empty($list->desc3)?$list->desc3:''?></p>
						
						<h2  style="color: #271665"><?= !empty($list->title5)?$list->title5:''?></h2>
						<p class="text-justify"><?= !empty($list->desc4)?$list->desc4:''?></p>
					</div> 
					<div class="col-sm-6">
						<div class="content-wrap" style="padding: 60px;">
							<center><span style="color: #271665;font-size: 50px">?</h1></span>
							<h2 class="text-center"><?= !empty($list->title6)?$list->title6:''?></h2>
						</div>
					</div>
				</div>
			</div>
		</section>




        <!-- <section class="pro-content blog-content blog-content-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<center><img src="<?= $this->data->lazyLoader; ?>" class="lazy" data-src="<?= base_url('public/') ?>images/logo/logo.png" style="height: 100px;width:100%"></center>
						<h1 class="text-center">Rewards & Cashback</h1>
						<h2 class="text-center"style="color: #271665">Shop. Earn. Redeem.</h2>
					</div> 
					
					<div class="col-sm-6">
						<h2>About SlickPattern Rewards</h2>
						<p class="text-justify">Slick Pattern rewards are there to make sure your journey of navigating our breadth of brands is always fruitful, fun and meaningful.</p>
						<p class="text-justify">Earn rewards on everyday purchases and by completing actions. Then use these points to get discounts on your next purchases.</p>
						<p class="text-justify">We aim to be your one stop shop for all fashion needs and this is our way of thanking you for sticking with us ^^</p>
					</div> 
				</div>
				
				<div class="row mt-2">
					<div class="col-sm-6">
						<h2  style="color: #271665">Earning is easy!</h2>
						<p class="text-justify">Earn 1 point for every 1 Rupee spent. Receive up to ______ off for completing actions and gaining points through spending on purchases.</p>
						
						<h2  style="color: #271665">Redeming is a breeze ~</h2>
						<p class="text-justify">Once you’ve earned enough points, head over to the rewards menu to redeem those points for discounts off your next purchase.</p>
						
						<h2  style="color: #271665">It’s simple and free :)</h2>
						<p class="text-justify">There's no need to carry a card! You can check your reward balance through your online account or by asking one of our sales associates in store.</p>
					</div> 
					<div class="col-sm-6">
						<div class="content-wrap" style="padding: 60px;">
							<center><span style="color: #271665;font-size: 50px">?</h1></span>
							<h2 class="text-center">How the program works?</h2>
						</div>
					</div>
				</div>
			</div>
		</section> -->
    <?php include('include/footer.php'); ?>
    <?php include('include/jsLinks.php'); ?>

</body>

</html>