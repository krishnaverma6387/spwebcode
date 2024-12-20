<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title><?= $this->termsdata->shopping_title ?></title>
    <meta name="description" content="<?= $this->termsdata->shopping_description ?>">
    <meta name="keywords" content="<?= $this->termsdata->shopping_keyword ?>">
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

    <?php include('include/header.php') ?>

    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Guid</li>
                </ol>
            </div>
        </nav>
    </div>
    <section class="pro-content login-content">
        <div class="container">
            <?php
            $list = $this->db->get("tbl_shoppingguide")->row();
            ?>
            
            <h1 class="pageheading"><?= !empty($list->title1)?$list->title1:'';?></h1>
            <h2><?= !empty($list->subtitle1)?$list->subtitle1:'';?></h2>
            <h2><?= !empty($list->step1)?$list->step1:'';?></h2>
            <!-- <p class="text-justify">-Select the size, color or quantity if necessary</p> -->
            <p class="text-justify"><?= !empty($list->desc1)?$list->desc1:'';?></p>
            <div class="row">
                <div class="col-sm-12"><img alt="<?= !empty($list->alt)?$list->alt:'';?>" title="<?= !empty($list->seo_title)?$list->seo_title:'';?>" src="<?= base_url('./uploads/brand/'.$list->image1)?>" style="width:100%;height:400px" class="img-fluid" alt=""></div>
            </div>

            <h2><?= !empty($list->step2)?$list->step2:'';?></h2>
            <p class="text-justify"><strong><?= !empty($list->title2)?$list->title2:'';?></strong></p>
            <p class="text-justify"><?= !empty($list->desc2)?$list->desc2:'';?></p>
            <!-- <p class="text-justify">-Click on “CHECKOUT” if you are ready to place the order. Otherwise, Click on the blank space to continue shopping.</p> -->

            <div class="row">
                <div class="col-sm-12">
                    <img alt="<?= !empty($list->alt2)?$list->alt2:'';?>" title="<?= !empty($list->seo_title2)?$list->seo_title2:'';?>" src="<?= base_url('./uploads/brand/'.$list->image2)?>" style="width:100%;height:400px" class="img-fluid" alt="">
                </div>
            </div>

            <h2><?= !empty($list->step3)?$list->step3:'';?></h2>
            <p class="text-justify"><strong><?= !empty($list->title3)?$list->title3:'';?></strong></p>
            <p class="text-justify"><?= !empty($list->desc3)?$list->desc3:'';?></p>
            <!-- <p class="text-justify">-Choose “Create one” if you do not have a pre-existing account.</p> -->

            <div class="row">
                <div class="col-sm-12"><img alt="<?= !empty($list->alt3)?$list->alt3:'';?>" title="<?= !empty($list->seo_title3)?$list->seo_title3:'';?>" src="<?= base_url('./uploads/brand/'.$list->image3)?>" style="width:100%;height:400px" class="img-fluid" alt=""></div>
            </div>

            <h2><?= !empty($list->step4)?$list->step4:'';?></h2>
            <p class="text-justify"><strong><?= !empty($list->title4)?$list->title4:'';?></strong></p>
            <p class="text-justify"><?= !empty($list->desc4)?$list->desc4:'';?></p>


            <div class="row my-3">
                <div class="col-sm-12"> <img alt="<?= !empty($list->alt4)?$list->alt4:'';?>" title="<?= !empty($list->seo_title4)?$list->seo_title4:'';?>" src="<?= base_url('./uploads/brand/'.$list->image4)?>" style="width:100%;height:400px" class="img-fluid" alt=""></div>
            </div>

            <h2><?= !empty($list->notes)?$list->notes:'';?></h2>

            <p class="text-justify"><?= !empty($list->desc5)?$list->desc5:'';?></p>








            <!-- <? //= $this->termsdata->shopping_guide;
                    ?> -->

            <!--h1 class="pageheading">Shopping Guide</h1>
				<h2>Shopping at SlickPatternis easy. Simply follow the steps below.</h2>
				<h2>Step 1</h2>
				<p class="text-justify">-Select the size, color or quantity if necessary</p>
				<p class="text-justify">-Click on “ADD TO CART”</p>
				<div class="row">
					<div class="col-sm-12">Image Section</div>	
				</div>
				
				<h2>Step 2</h2>
				<p class="text-justify"><strong>Check out when item selection is completed</strong></p>
				<p class="text-justify">-Click the "CART" button to review the item(s) selected and make some modifications if necessary</p>
				<p class="text-justify">-Click on “CHECKOUT” if you are ready to place the order. Otherwise, Click on the blank space to continue shopping.</p>
				
				<div class="row">
					<div class="col-sm-12">Image Section</div>	
				</div>
				
				<h2>Step 3</h2>
				<p class="text-justify"><strong>Check out when item selection is completed</strong></p>
				<p class="text-justify">-Choose Login if you already have an account on our site;</p>
				<p class="text-justify">-Choose “Create one” if you do not have a pre-existing account.</p>
				
				<div class="row">
					<div class="col-sm-12">Image Section</div>	
				</div>
				
				<h2>Step 4</h2>
				<p class="text-justify"><strong>Complete shipping and billing information.</strong></p>
				<p class="text-justify">Fill in the shipping address</p>
				<p class="text-justify">-Choose one shipping option</p>
				<p class="text-justify">-Click Continue to shipping method, Select a payment method</p>
				<p class="text-justify">-Click on “PAY NOW”.</p>
				
				
				<div class="row my-3">
					<div class="col-sm-12">Imgage Section</div>	
				</div>
				
				<h2>Notes :</h2>
				
				<p class="text-justify">-We will begin to process your order upon receipt of your payment and an email will be sent to you for order confirmation then.</p>
				<p class="text-justify">-You may check order status and track the parcel(s) in My Orders after logging in your account on our site.</p>
				<p class="text-justify">-You may click <a href="#" class="text-info">here</a> for more information about shipping.</p-->

        </div>
    </section>


    <?php include('include/footer.php'); ?>

    <?php include('include/jsLinks.php'); ?>

</body>

</html>