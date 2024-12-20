<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Home </title>
    <?php include('include/cssLinks.php'); ?>
    <style>
        .youtube-embed-container {
            position: relative;
            width: 800px;
            height: 400px;
        }

        .youtube-embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .youtube-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        .ytp-chrome-top-buttons {
            display: none !important;
        }

        .ytp-title-channel {
            display: none !important;
        }

        .ytp-title {
            display: none !important;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <!-- __________slider_____section_____ -->
        <section class="slider_area" id="slider_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_Image_here slider">
                            <div class="contain slides_all">
                                <div id="topSlider" class="owl-carousel owl-theme">

                                    <?php
                                    foreach ($sliders as $slider) {

                                        if (!empty($slider['video_url'])) {
                                    ?>
                                            <div class="item">
                                                <iframe style="width: -webkit-fill-available;" height="450" src="<?= $slider['video_url'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <div class="youtube-overlay"></div>
                                            </div>
                                            <?php
                                        } else {
                                            if (file_exists('./uploads/slider/' . $slider['image'])) {
                                            ?>
                                                <div class="item">
                                                    <?php
                                                    if (!empty($slider['click_url'])) {
                                                    ?>
                                                        <a href="javascript:void(0)" onclick="SliderURL('<?= $slider['id'] ?>', '<?= $slider['click_url'] ?>')">
                                                        <?php
                                                    } else {
                                                        ?>
                                                            <a href="javascript:void(0)">
                                                            <?php
                                                        }
                                                            ?>
                                                            <div class="slider_img second_img">
                                                                <img class="d-block w-100 slider-img" src="<?= base_url('uploads/slider/' . $slider['image']) ?>" alt="<?= $slider['alt'] ?>" title="<?= $slider['seo_title'] ?>" data-mobile="<?= base_url('uploads/slider/' . $slider['image_mobile']) ?>" data-tablet="<?= base_url('uploads/slider/' . $slider['image_tablet']) ?>" data-desktop="<?= base_url('uploads/slider/' . $slider['image']) ?>">
                                                            </div>
                                                            </a>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- _______offersection___________ -->


        <div class="box-25">

            <?php
            if (!empty($ComponentsList) && count($ComponentsList) > 0) {
                if ($ComponentsList[0]->sub_type == "offer") {
                    echo $this->Web_model->getOfferHtml($ComponentsList[0]);
                } else if ($ComponentsList[0]->sub_type == "welcomtostore") {
                    echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[0]);
                } else if ($ComponentsList[0]->sub_type == "latestcombo") {
                    echo $this->Web_model->getLatestCollectionHtml($ComponentsList[0]);
                } else if ($ComponentsList[0]->sub_type == "newcorecollection") {
                    echo $this->Web_model->getNewCoreHtml($ComponentsList[0]);
                }elseif($ComponentsList[0]->sub_type=="offerSlider"){
                    echo $this->Web_model->getOfferSliderHtml($ComponentsList[0]);
                 }elseif($ComponentsList[0]->sub_type=="newOnSlickPattern"){
                    echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[0]);
                 }else if($ComponentsList[0]->sub_type=="aboutUs"){
                    echo $this->Web_model->getAboutUsHtml($ComponentsList[0]);
                 }else if($ComponentsList[0]->sub_type=="ourCombos"){
                    echo $this->Web_model->getOurCombosHtml($ComponentsList[0]);
                 }
            }
            if (!empty($ComponentsList) && count($ComponentsList) > 1) {
                if ($ComponentsList[1]->sub_type == "offer") {
                    echo $this->Web_model->getOfferHtml($ComponentsList[1]);
                } else if ($ComponentsList[1]->sub_type == "welcomtostore") {
                    echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[1]);
                } else if ($ComponentsList[1]->sub_type == "latestcombo") {
                    echo $this->Web_model->getLatestCollectionHtml($ComponentsList[1]);
                } else if ($ComponentsList[1]->sub_type == "newcorecollection") {
                    echo $this->Web_model->getNewCoreHtml($ComponentsList[1]);
                }elseif($ComponentsList[1]->sub_type=="offerSlider"){
                    echo $this->Web_model->getOfferSliderHtml($ComponentsList[1]);
                 }elseif($ComponentsList[1]->sub_type=="newOnSlickPattern"){
                    echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[1]);
                 }else if($ComponentsList[1]->sub_type=="aboutUs"){
                    echo $this->Web_model->getAboutUsHtml($ComponentsList[1]);
                 }else if($ComponentsList[1]->sub_type=="ourCombos"){
                    echo $this->Web_model->getOurCombosHtml($ComponentsList[1]);
                 }
            }
            ?>
        </div>

        <!-- ___seller___banner_____ -->
        <?php
        if (!empty($ComponentsList) && count($ComponentsList) > 2) {
                if ($ComponentsList[2]->sub_type == "offer") {
                    echo $this->Web_model->getOfferHtml($ComponentsList[2]);
                } else if ($ComponentsList[2]->sub_type == "welcomtostore") {
                    echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[2]);
                } else if ($ComponentsList[2]->sub_type == "latestcombo") {
                    echo $this->Web_model->getLatestCollectionHtml($ComponentsList[2]);
                } else if ($ComponentsList[2]->sub_type == "newcorecollection") {
                    echo $this->Web_model->getNewCoreHtml($ComponentsList[2]);
                }elseif($ComponentsList[2]->sub_type=="offerSlider"){
                    echo $this->Web_model->getOfferSliderHtml($ComponentsList[2]);
                 }elseif($ComponentsList[2]->sub_type=="newOnSlickPattern"){
                    echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[2]);
                 }else if($ComponentsList[2]->sub_type=="aboutUs"){
                    echo $this->Web_model->getAboutUsHtml($ComponentsList[2]);
                 }else if($ComponentsList[2]->sub_type=="ourCombos"){
                    echo $this->Web_model->getOurCombosHtml($ComponentsList[2]);
                 }
            }
        ?>
        <div class="box-25">

            <!-- ____combo____product____ -->
            <?php
            // echo $ComponentsList[2]->sub_type;
            if (!empty($ComponentsList) && count($ComponentsList)>3) { 
            if($ComponentsList[3]->sub_type=="offer"){
                echo $this->Web_model->getOfferHtml($ComponentsList[3]);
             }else if($ComponentsList[3]->sub_type=="welcomtostore"){
                echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[3]);
             }else if($ComponentsList[3]->sub_type=="latestcombo"){
                echo $this->Web_model->getLatestCollectionHtml($ComponentsList[3]);
             }else if($ComponentsList[3]->sub_type=="newcorecollection"){
                echo $this->Web_model->getNewCoreHtml($ComponentsList[3]);
             }elseif($ComponentsList[3]->sub_type=="offerSlider"){
                echo $this->Web_model->getOfferSliderHtml($ComponentsList[3]);
             }elseif($ComponentsList[3]->sub_type=="newOnSlickPattern"){
                echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[3]);
             }else if($ComponentsList[3]->sub_type=="aboutUs"){
                echo $this->Web_model->getAboutUsHtml($ComponentsList[3]);
             }else if($ComponentsList[3]->sub_type=="ourCombos"){
                echo $this->Web_model->getOurCombosHtml($ComponentsList[3]);
             }
                } 
            ?>
            <!-- ______Latest Collections______ -->
            <?php
            // echo $ComponentsList[3]->sub_type;
            if (!empty($ComponentsList) && count($ComponentsList)>4) { 
            if($ComponentsList[4]->sub_type=="offer"){
                echo $this->Web_model->getOfferHtml($ComponentsList[4]);
             }else if($ComponentsList[4]->sub_type=="welcomtostore"){
                echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[4]);
             }else if($ComponentsList[4]->sub_type=="latestcombo"){
                echo $this->Web_model->getLatestCollectionHtml($ComponentsList[4]);
             }else if($ComponentsList[4]->sub_type=="newcorecollection"){
                echo $this->Web_model->getNewCoreHtml($ComponentsList[4]);
             }elseif($ComponentsList[4]->sub_type=="offerSlider"){
                echo $this->Web_model->getOfferSliderHtml($ComponentsList[4]);
             }elseif($ComponentsList[4]->sub_type=="newOnSlickPattern"){
                echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[4]);
             }else if($ComponentsList[4]->sub_type=="aboutUs"){
                echo $this->Web_model->getAboutUsHtml($ComponentsList[4]);
             }else if($ComponentsList[4]->sub_type=="ourCombos"){
                echo $this->Web_model->getOurCombosHtml($ComponentsList[4]);
             }
                } 
            ?>
        </div>
        <!-- ____banner_img____ -->
        <section class="banner_one_section">
            <div class="show_banner banner__area-2">
                <div class="onLayer  pb-30">
                    <div class="conatiner px-0 m-0">
                        <dirv class="row px-0 m-0">
                            <div class="col-lg-12 px-0">
                                <div class="content_here">
                                    <a href="#" class="os-btn os-btn-2">Shop Now</span></a>
                                </div>
                            </div>
                        </dirv>
                    </div>
                </div>
            </div>
        </section>

        <div class="box-25">
        <?php
            // echo $ComponentsList[5]->sub_type;
            if (!empty($ComponentsList) && count($ComponentsList)>5) { 
            if($ComponentsList[5]->sub_type=="offer"){
                echo $this->Web_model->getOfferHtml($ComponentsList[5]);
             }else if($ComponentsList[5]->sub_type=="welcomtostore"){
                echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[5]);
             }else if($ComponentsList[5]->sub_type=="latestcombo"){
                echo $this->Web_model->getLatestCollectionHtml($ComponentsList[5]);
             }else if($ComponentsList[5]->sub_type=="newcorecollection"){
                echo $this->Web_model->getNewCoreHtml($ComponentsList[5]);
             }elseif($ComponentsList[5]->sub_type=="offerSlider"){
                echo $this->Web_model->getOfferSliderHtml($ComponentsList[5]);
             }elseif($ComponentsList[5]->sub_type=="newOnSlickPattern"){
                echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[5]);
             }else if($ComponentsList[5]->sub_type=="aboutUs"){
                echo $this->Web_model->getAboutUsHtml($ComponentsList[5]);
             }else if($ComponentsList[5]->sub_type=="ourCombos"){
                echo $this->Web_model->getOurCombosHtml($ComponentsList[5]);
             }
                } 
            ?>
            <!-- ______our_productSection_____ -->
            <section class="sale__area productsSection_Start pt-40 pb-50" style="background: #ededf9 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 style="background: #ededf9 !important;">Our Products </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row our_productSection">
                        <div class="productslider add_combo_imgcss owl-carousel">
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Revamp your home in style</h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_furnishings_2._SY116_CB555624324_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_storage_1._SY116_CB555624324_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_lighting_2._SY116_CB555624324_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Up to 60% off | Top picks </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/PC/Shoes-low._SY116_CB554442186_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/pcqc2-3-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/Pcqc2-4-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/2024/July/BTF/1st/Pcqc-2-2-low._SY116_CB554637206_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Pocket-friendly fashion </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-1-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-3-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-2-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PC-PFF/PFF-4-186-116._SY116_CB636055991_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="card">
                                    <h2 class="fs-5 fw-bold"> Brands in focus </h2>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container ">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/LaptopsPD24_Intel_Ascent/Intel_QuadCard_186x116._SY116_CB554215172_.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <a href="#" class="product-container">
                                                <figure>
                                                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Wireless/tsahtany/PrimeDay/ASCENT/PC_QuadCard186x116._SY116_CB569818057_.jpg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/COOP/ASCENT/PD24/GW_deskQC/Surf_1x._SY116_CB569797750_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                        <a href="#" class="product-container">
                                            <figure>
                                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/COOP/ASCENT/PD24/GW_deskQC/Pampers_1x._SY116_CB569797750_.jpg" class="img-fluid" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <a href="#" class="explore-more-btn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sale__area  our_storesSection pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Stores </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Find everything for your every need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="bagProduct__slider   owl-carousel">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b1.webp') ?>" alt="img">
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b2.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b3.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b4.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/b5.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f11.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f12.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f13.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/f14.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Street 9 </a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j4.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Oomph</a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j2.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Peora</a></h4>
                                        <div class="blog__meta ">
                                            <span>Solid Purse Clutch</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/j3.webp') ?>" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ______pre___book____ -->
            <section class="sale__area  prebook_sales">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Pre Book </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion
                                        you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="products-area ">
                        <div class="row prebook-row pre_book_showing">
                            <div class="col-md-6">
                                <figure class="position-relative">
                                    <h2 class="position-absolute top-50 start-50 translate-middle text-center newarrivals-textaboveimg">
                                        <span class="story-hero__hed-number">515</span> New Arrivals
                                    </h2>

                                    <img src="https://is4.revolveassets.com/images/up/2024/May/050424_f_na_1x.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <figure class="position-relative">
                                    <h2 class="position-absolute top-50 start-50 translate-middle text-center newarrivals-textaboveimg">
                                        Dresses To Preorder <br> Now
                                    </h2>

                                    <img src="https://is4.revolveassets.com/images/up/2024/May/051624_f_longweekend_02.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <figure>


                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sale__area  pt-20">
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class=" pre_order_slider  owl-carousel">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="#">Armani</a></h4>
                                        <div class="blog__meta ">
                                            <span>Gossamer Grace</span>
                                            <a class="mb-0 d-flex  prebook-btn badge badge-secondary" href="#">
                                                Pre-Order</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new on slick pattern -->
            <?php
            // echo $ComponentsList[6]->sub_type;
            if (!empty($ComponentsList) && count($ComponentsList)>6) { 
            if($ComponentsList[6]->sub_type=="offer"){
                echo $this->Web_model->getOfferHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="welcomtostore"){
                echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="latestcombo"){
                echo $this->Web_model->getLatestCollectionHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="newcorecollection"){
                echo $this->Web_model->getNewCoreHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="offerSlider"){
                echo $this->Web_model->getOfferSliderHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="newOnSlickPattern"){
                echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="aboutUs"){
                echo $this->Web_model->getAboutUsHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="ourCombos"){
                echo $this->Web_model->getOurCombosHtml($ComponentsList[6]);
             }
                } 
            ?>
            <!-- ____our Catelog_____ -->
            <section class="sale__area catelog_lookbook ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Download Lookbook </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="catelog__slider   owl-carousel mt-10 catelog_section">
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608" alt="img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <h4> Brocher Name </h4>
                                        <span class="badge ">
                                            <i class="fa-regular fa-thumbs-up thumbs-up-icon"></i>&nbsp; <span> 122K
                                            </span> &emsp;
                                            <!-- <i class="fa-regular fa-circle-down"></i> &nbsp;<span> 500K </span> -->
                                        </span>
                                        <span class="badge" id="download-btn">
                                            <i class="fa fa-circle-down download-icon"></i>&nbsp;<span> 500K </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ____banner_img____ -->
        <?php
            // echo $ComponentsList[5]->sub_type;
            if (!empty($ComponentsList) && count($ComponentsList)>6) { 
            if($ComponentsList[6]->sub_type=="offer"){
                echo $this->Web_model->getOfferHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="welcomtostore"){
                echo $this->Web_model->getWelcomeStoreHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="latestcombo"){
                echo $this->Web_model->getLatestCollectionHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="newcorecollection"){
                echo $this->Web_model->getNewCoreHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="offerSlider"){
                echo $this->Web_model->getOfferSliderHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="newOnSlickPattern"){
                echo $this->Web_model->getNewSlickPatternHtml($ComponentsList[6]);
             }else if($ComponentsList[6]->sub_type=="aboutUs"){
                echo $this->Web_model->getAboutUsHtml($ComponentsList[6]);
             }else if($ComponentsList[4]->sub_type=="ourCombos"){
                echo $this->Web_model->getOurCombosHtml($ComponentsList[4]);
             }
                } 
            ?>
        <div class="box-25">
            <section class="sale__area catelog_lookbook pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Clients </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-30">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="catelog__slider   owl-carousel mt-10 client_section">
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="blog__item mb-30">
                                    <figure class="clientInstaFigureContainer">
                                        <div class="position-relative">
                                            <a href="" class="">
                                                <figcaption class="videoViews d-none">
                                                    <i class="fa-solid fa-eye"></i>
                                                    <div class="">2L</div>

                                                </figcaption>
                                                <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                                                    <source src="https://dev.slickpattern.com/public/uploads/sample.mp4" type="video/mp4">
                                                </video>
                                                <figcaption class="clientInstaFigureCaption">
                                                    <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" alt="" class="img-fluid" style="max-width: 45px;border-radius: 6px;object-fit: contain !important;">
                                                    <div class="clientHeading">
                                                        Maroon
                                                        Blush Embroidered Georgette Suit Set</div>
                                                </figcaption>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ___our promises_section___ -->
            <section class="pro-content testimonails-content pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>Our Promise</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-4 col-4 text-center">
                            <figure>
                                <div class=""><img class=" lazy promise-img" src="https://static-00.iconduck.com/assets.00/shopping-cart-icon-512x462-yrde1eu0.png" alt="" style="width: 15%;"></div>
                                <figcaption class="text-capitalize mt-2 fw-bold">A Look you love</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM-uNfDYK5mHtJzUcvSlRzW2zYjbzweG4Reklw21tJp_8hj-iJc_pq6iHpRkJZ4FGpU1E&usqp=CAU" alt="" style="width: 15%;">
                            <figcaption class="text-capitalize mt-2 fw-bold">Easy Return</figcaption>

                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="https://dev.slickpattern.com/public/images/promise/fast-delivery.png" alt="" style="width: 18%;">
                            <figcaption class="text-capitalize mt-2 fw-bold ">Speedy delivery</figcaption>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="pro-content testimonails-content stay_connected_section " style="background-color:#8340a1;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="pro-heading-title text-light pt-4 pb-3">
                            <h2 class="text-center ">Stay Connected</h2>
                            <p class="text-center">Follow us on our social media accounts to get even more <br> tasty
                                content. </p>
                            <div class="social_icons pt-3 pb-4">
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-instagram"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-youtube"></i></a>
                                <a href="" class="text-white fs-2"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--footer area end-->
    </main>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>