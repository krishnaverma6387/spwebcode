<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php 
    $list = $this->db->get("tbl_disclaimer")->row();
    ?>
<head>
    <meta charset="UTF-8">
   <title><?= $list->disclaimer_title ?></title>
    <meta name="description" content="<?= $list->disclaimer_description ?>">
    <meta name="keywords" content="<?= $list->disclaimer_keyword ?>">
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
                    <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- <? //= $this->termsdata->disc_condition;
            ?> -->

    <section class="pro-content login-content">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <center> <img src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/New_Project_13_8c0b5e4b-5cb5-4bbc-b7be-239624586406_256x.png?v=1625126030" class="img-fluid lazy">
                        <h2><?= $list->title1; ?></h2>
                    </center>
                </div>
                <div class="col-sm-12">
                    <h2 class="text-center"><?= $list->title2; ?></h2>
                    <p class="text-justify"><?= $list->desc1; ?></p>
                   
                </div>
                <div class="col-sm-12">
                    <h2 class="text-center"><?= $list->title3; ?></h2>
                    <p class="text-justify"><?= $list->desc2; ?></p>
                </div>
                <div class="col-sm-12">
                    <h2 class="text-center"><?= $list->title4; ?></h2>
                    <p class="text-justify"><?= $list->desc3; ?></p>
                    <img alt="<?= $list->alt; ?>" title="<?= $list->seo_title; ?>" src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/Disclaimer_IMG.jpg?v=1625139569" class="img-fluid w-100 lazy">
                </div>

                <div class="col-sm-12 mt-5">
                    <h2 class="text-center"><?= $list->title5; ?></h2>
                    <p class="text-justify"><?= $list->desc4; ?></p>
                </div>
                <div class="col-sm-12">
                    <h2 class="text-center" style="font-weight: 600"><?= $list->title6; ?></h2>
                    <p class="text-justify"><?= $list->desc5; ?></p>
                    <p><?= $list->desc6; ?></p>
                    <ul>
                        <?= $list->desc7; ?>
                    </ul>
                    <img alt="<?= $list->alt2; ?>" title="<?= $list->seo_title2; ?>" src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/Laundry_Care_Symbols-01-1024x683.jpg?v=1624091522" class="img-fluid w-100 lazy">
                </div>
            </div>
        </div>
    </section>









    <!-- <section class="pro-content login-content">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12">
						<center> <img src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/New_Project_13_8c0b5e4b-5cb5-4bbc-b7be-239624586406_256x.png?v=1625126030" class="img-fluid lazy">
							<h2>Disclimer</h2> 
						</center>  
					</div>	
					<div class="col-sm-12">
						<h2 class="text-center">COLOR VARIATION DISCLAIMER</h2>
						<p class="text-justify">Products may vary slightly from their pictures. The images of the products on our website are for illustrative purposes only. Although we have made every effort to display the colours accurately, we cannot guarantee that a device's display of the colours accurately reflects the colour of the products. Your product may vary slightly from those images.</p>
						<p class="text-justify">Due to variations in monitor settings, SlickPattern assumes no responsibility regarding color matches of the product, either within an order or in a reorder. Please directly contact us at customercare@SlickPattern.pk if you have any queries about the exact color/shade. Note that like-named colors used by various brands (i.e. Navy, Navy Blue, Dark Navy, etc.) are not necessarily an exact shade match to each other or to any of the Brands Thread Guide options.</p>
						<p class="text-justify">Due to the nature of apparel manufacturing from various brands ends, SlickPattern does not guarantee the consistency, color, texture or appearance of the actual apparel. The colors displayed are the closest possible variant but hues & tones may slightly differ due to monitor/screen settings.</p>
						<p class="text-justify">Pictures of outfits and different products given on the website are taken during shoot, under mixture of natural and artificial lighting. Such pictures then go through editing. These pictures are for advertising and reference purposes only and actual products may vary from the picture.</p>
						<p class="text-justify">Please note that different types of fabrics absorb the same color differently and thus reflect different shades of the same color. We try to present the product in the picture closest to reality but actual products can vary and we hold no responsibility for that. Please read product description clearly before purchase.</p>
					</div>
					<div class="col-sm-12">
						<h2 class="text-center">SIZE DISCLAIMER</h2>
						<p class="text-justify">We make every effort to give you accurate manufacturer reported sizing information for the products in our size guides available alongside each product on the product page . However, please note that due to the nature of the manufacturing process the product sizing may vary slightly. SlickPattern is not responsible for sizing variations in the manufacturing process.</p>
					</div>
					<div class="col-sm-12">
						<h2 class="text-center">HOW TO GET THE RIGHT FIT</h2>
						<p class="text-justify">To measure your clothing size follow these instructions:</p>
						<img src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/Disclaimer_IMG.jpg?v=1625139569" class="img-fluid w-100 lazy">
					</div>
					
					<div class="col-sm-12 mt-5">
						<h2 class="text-center">CHOOSE THE RIGHT SIZE</h2>
						<p class="text-justify">That's easier said than done. Because, what do you do if you are in between two sizes?</p>
						<p class="text-justify">Well, that's up to you. Do you like a tight fit? Go for the smaller size. Loving a loose fit? Go for the larger size.</p>
						<p class="text-justify">Top fit: If your body measurements for bust and waist result in two different suggested sizes, order the size from your bust measurement.</p>
					</div>
					<div class="col-sm-12">
						<h1 class="text-center" style="font-weight: 600">PRODUCT CARE INSTRUCTIONS</h1>
						<p class="text-justify">SlickPattern encourages its customers to ensure proper care procedures of the purchased product which will help in optimizing the lifespan of the high performance product that you have invested your money in as a customer. Each brand has their own garment/product care policy and it will either be attached on the product itself, printed on the packaging or available on their website. Following these simple instructions will maximize the life of the product. Since SlickPattern are not the manufacturers of any products available on our website, therefore we hold no responsibilities or cater to any issues of product mishandling or violation of product care instructions and customers will not be issued any refund, cancellation of order, or exchange if any of the care instructions have been violated.</p>
						<p>Following points will be considered as violation of care instructions</p>
						<ul>
						 <li>If the outfit has been shrunk.</li>	
						 <li>If the outfit has been washed/ dry clean.</li>	
						 <li>If an outfit has been stitched even in cases of missing pieces.</li>	
						 <li>If the outfit has been worn or tried on.</li>	
						 <li>If the item has been subjected to bleach/chemical for stain removing.</li>	
						 <li>A list of care instructions/symbols are provided by the designer and if any of those instructions are also not followed properly.</li>	
						</ul>
						<img src="<?= $this->data->lazyLoader; ?>" data-src="https://cdn.shopify.com/s/files/1/2337/7003/files/Laundry_Care_Symbols-01-1024x683.jpg?v=1624091522" class="img-fluid w-100 lazy">
					</div>
					
					
					
					
					</div>
			</div>
		</section> -->
    <?php include('include/footer.php'); ?>
    <?php include('include/jsLinks.php'); ?>

</body>

</html>