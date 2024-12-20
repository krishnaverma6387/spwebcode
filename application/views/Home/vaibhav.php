<!DOCTYPE html>
<html lang="en">

<head>
    <meta cha₹et="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="canonical" href="<?= base_url()?>" />
    <?php include('include/cssLinks.php') ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/flyingHeart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css') ?>/jquery-picZoomer.css">
    <link rel="stylesheet" href="<?= base_url('assets/application/css/custom.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url('public/css/productDetails.css') ?>">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>

<body>
    <?php include('include/header.php') ?>
    <section>
        <div class="container-fluid px-3 px-md-3 px-lg-5 padding-container">
            <!-- Sale Section Start -->
            <div class="sale-bg p-2">
                <h6 class="text-center mb-0">
                    Sale End in: <span class="text-white"><span> 04 <span class="hour">H</span>: 20 <span
                                class="min">M</span>: 35 <span class="sec">S</span>
                        </span>
                </h6>
            </div>
            <div class="d-flex d-md-none justify-content-end align-items-center my-2">
                <i class="bi bi-heart"></i>
                <i class="bi bi-share ms-2"></i>
            </div>
            <!-- <div class="sale position-relative">
                <div id="clock" class="d-flex justify-content-center align-items-center gap-4">
                    <div class="clocktxt">Sale ends in </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <div>
                            <span id="hou₹"></span>
                            <div class="clocktxt">Hou₹</div>
                        </div>
                        <div>
                            <span id="minutes"></span>
                            <div class="clocktxt">Minutes</div>
                        </div>
                        <div>
                            <span id="seconds"></span>
                            <div class="clocktxt">Seconds</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Sale Section End -->

            <nav aria-label="breadcrumb" class="my-3 d-none d-md-block">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Clothing</a></li>
                    <li class="breadcrumb-item"><a href="#">Mens</a></li>
                    <li class="breadcrumb-item"><a href="#">Jeans</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jack & Jones</li>
                </ol>
            </nav>

            <div class="row border-bottom-theme pb-4">
                <div class="col-md-7">
                    <div class="sidebar-item">
                        <div class="make-me-sticky">
                            <div class="show-on-mobile">
                                <div class="home-demo">
                                    <div id="product-slider-img" class="owl-carousel">
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic1.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic3.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic4.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic5.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="<?= base_url('assets/website/images/product/pic6.jpg') ?>"
                                                class="product-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="show-on-other">
                                <div class="d-flex flex-column gap-2">


                                    <div class="d-flex justify-content-between align-items-center gap-2">
                                        <div class="" id='slideshow-items-container'>
                                            <img src="<?= base_url('assets/website/images/product/pic1.jpg') ?>"
                                                class="product-img slideshow-items active" alt="">
                                            <div id='lens'></div>
                                        </div>
                                        <div class="">
                                            <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                                class="product-img  slideshow-items active" alt="">
                                            <div id='lens'></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center gap-2">
                                        <div class="">
                                            <img src="<?= base_url('assets/website/images/product/pic3.jpg') ?>"
                                                class="product-img  slideshow-items active" alt="">
                                            <div id='lens'></div>
                                        </div>
                                        <div class="">
                                            <img src="<?= base_url('assets/website/images/product/pic4.jpg') ?>"
                                                class="product-img  slideshow-items active" alt="">
                                            <div id='lens'></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center gap-2">
                                        <div class="">
                                            <img src="<?= base_url('assets/website/images/product/pic5.jpg') ?>"
                                                class="product-img  slideshow-items active" alt="">
                                            <div id='lens'></div>
                                        </div>
                                        <div class="">
                                            <video width="450" muted controls autoplay style="height:550px">
                                                <source
                                                    src="<?= base_url('assets/website/images/product/productVideo.mp4') ?>"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>

                                            <div id='lens'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center gap-0 gap-md-3 flex-wrap">
                                    <div>
                                        <button class="btn btn-theme-white" data-bs-toggle="modal"
                                            data-bs-target="#modal_info">Modal Info</button>
                                    </div>
                                    <div class="justify-content-center align-items-center gap-3 d-none d-md-flex">
                                        <div class="div">
                                            <a href="#"
                                                class="btn btn-theme-purple d-flex justify-content-center align-items-center gap-3">
                                                <div>
                                                    <input id="toggle-heart" type="checkbox" />
                                                    <label for="toggle-heart" aria-label="like">❤</label>
                                                </div>Like
                                            </a>
                                        </div>
                                        <div class="div" id="share-btn">
                                            <button href="" class="btn btn-theme-purple" id="">
                                                <i class="bi bi-share-fill mr-3"></i>Share
                                            </button>
                                            <div id="share_icon" class="d-none">
                                                <img src="<?= base_url('assets/website/images/product/whstap.webp') ?>"
                                                    alt="">
                                                <img src="<?= base_url('assets/website/images/product/insta.webp') ?>"
                                                    alt="">
                                                <img src="<?= base_url('assets/website/images/product/fb.webp') ?>"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#similar-product" class="btn btn-theme-white"><i
                                                class="bi bi-copy mr-2"></i> View Similar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 d-none d-md-block">
                                <h5 class="fw-semibold text-main mb-3">Unlocking Glamour</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button data-bs-toggle="modal" data-bs-target="#beauty_secrets">
                                                <img src="<?= base_url('assets/website/images/product/beauty.png') ?>"
                                                    alt="">
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button href="#" data-bs-toggle="modal" data-bs-target="#fashion_pairing">
                                                <img src="<?= base_url('assets/website/images/product/fashion.png') ?>"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="border-bottom-theme pb-4">
                        <div class="title">
                            <h4 class="fw-semibold product-title mt-3 mt-md-0" style="font-size: 22px;">Jack & Jones</h4>
                            <h6 class="text-secondary" style="font-size: 12px;" >Men Grey Slim Fit Light Fade Stretchable Jeans</h6>
                        </div>
                        <div class="rating">
                            <a href="#rating-container" class="btn-group rounded-4 border" role="group"
                                aria-label="Basic example">
                                <button type="button" class="bg-white text-main border p-1 pl-4">
                                    <div class="rating-num fw-semibold fs-8 mx-2">3.5 <i class="bi bi-star-fill"></i>
                                    </div>
                                </button>
                                <button type="button" class="bg-white text-main border p-1 pr-4">
                                    <div class="total-rating text-color fs-8 font-weight-normal text-nowrap mx-2">
                                        71 Rating</div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="border-bottom-theme pb-4 ">
                        <div class="pricing mt-3">
                            <div class="d-flex align-items-center">
                                <div id="product-price">
                                    <h3 class="real fw-semibold pl-0 mb-0 fs-4">
                                        ₹1484
                                    </h3>
                                    <span class="text-main mt-2 d-none" id="product-price-details">
                                        <div>
                                            <div class="d-flex flex-column border-bottom-theme gap-0 pb-1">
                                                <h6 class="text-main mb-0 fw-semibold fs-7">Price Details</h6>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0 text-theme-secondary fw-normal fs-7">Maxium Retail
                                                        Price
                                                    </p>
                                                    <h6 class="mb-0 text-main fw-semibold fs-7">Rs 799</h6>
                                                </div>
                                                <span clas="fs-8 text-theme-secondary fw-normal"
                                                    style="font-size:12px">(Inc all taxs)</span>
                                            </div>
                                            <div class="d-flex flex-column gap-0 pt-1">
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0 text-theme-secondary fw-normal fs-7">Discount</p>
                                                    <h6 class="mb-0 text-main fw-semibold fs-7">10% Off</h6>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0 text-theme-secondary fw-normal fs-7">Selling Price
                                                    </p>
                                                    <h6 class="mb-0 text-main fw-semibold fs-7">Rs 719</h6>
                                                </div>
                                                <span clas="fs-8 text-theme-secondary fw-normal"
                                                    style="font-size:12px">(Inc all taxs)</span>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <h5 class="fw-semibold text-theme-secondary font-weight-normal pl-2 mb-0">

                                    <span class="text-cut"> ₹ 3000</span>
                                    </h4>
                                    <span class="vr mx-2"></span>
                                    <h5 class="fw-semibold text-success mb-0 fs-7">55% OFF</h5>
                            </div>
                            <span class="font-weight-light fs-8 text-theme-secondary">*MRP Inclusive of all taxes</span>
                        </div>

                        <div class="mt-3">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex">
                                    <h6 class="text-main text-capitalize fw-semibold mb-0">Select Color</h6>
                                </div>
                                <div class="d-flex justify-content-between align-content-center">
                                    <h6 class="text-theme-secondary text-capitalize fw-semibold mb-0 fs-7">Color: <span
                                            class="text-main">Yellow</span></h6>
                                    <h6 class="text-theme-secondary text-capitalize fw-semibold mb-0 fs-7">Available :
                                        <span class="text-main">4</span>
                                    </h6>
                                </div>
                                <div class="row gx-0 gap-4">
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                    <div class="col-auto p-0">
                                        <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                            class="seleceted-color" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column gap-3  mt-3">
                                <div class="d-flex">
                                    <h6 class="text-main text-capitalize fw-semibold mb-0">Select Size</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-main text-capitalize fw-semibold mb-0 fs-7">Size : M</h6>
                                    <a class="anchor-color anchor-hover fw-semibold fs-7" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">Size Chart</a>
                                    <?php
                                        include 'size-offcanvas.php'
                                        ?>


                                    <!-- <a href="#" class="anchor-color anchor-hover fw-semibold"
                                        data-toggle="modal" data-target="#size-select"></a> -->
                                </div>
                                <p class="mb-0 fw-semibold text-theme-secondary fs-8">Body Measurement : To Fit Bust
                                    37.5 in
                                </p>
                            </div>

                            <div class="d-flex flex-column mt-3 gap-2">
                                <a href="#" class="btn-theme rounded-4 text-center p-2 text-white px-4">Size M
                                    Recommended</a>

                                <div class="sizes my-2 d-flex flex-wrap gap-2 gap-md-3 justify-content-between justify-content-md-start">
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="box-42 rounded-8 border-theme" id="product-size">
                                            <h6 class="mb-0">XS</h6>
                                        </div>
                                        <span class="text-main fw-normal mt-1">2 left</span>
                                        <span class="text-main fs-7 mt-2 d-none" id="product-left">
                                            <div>
                                                <p class="text-theme-secondary fw-normal mb-0">Garment measurement :
                                                    <span class="fw-semibold">Bust - 2.30 in</span>
                                                </p>
                                                <span class="fs-7 text-theme-secondary fw-normal">The modal (height
                                                    5'80) is wearing a size S</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="box-42 rounded-8 border-theme not-avaiable" data-toggle="tooltip"
                                        data-placement="bottom" title="2 Left">
                                        <h6 class="mb-0">S</h6>
                                    </div>
                                    <div class="box-42 rounded-8 border-theme  zoom-in-zoom-out" data-toggle="tooltip"
                                        data-placement="bottom" title="2 Left">
                                        <h6 class="mb-0 ">M</h6>
                                    </div>
                                    <div class="box-42 rounded-8 border-theme" data-toggle="tooltip"
                                        data-placement="bottom" title="2 Left">
                                        <h6 class="mb-0">L</h6>
                                    </div>
                                    <div class="box-42 rounded-8 border-theme not-avaiable" data-toggle="tooltip"
                                        data-placement="bottom" title="2 Left">
                                        <h6 class="mb-0">XL</h6>
                                    </div>
                                    <div class="box-42 rounded-8 border-theme" data-toggle="tooltip"
                                        data-placement="bottom" title="2 Left">
                                        <h6 class="mb-0">XXL</h6>
                                    </div>
                                </div>
                                <div class="fs-8">Tag past purchases & get right size recommendation</div>
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom-theme pb-4 ">
                        <div class="club border p-2 p-md-3 mt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2 gap-md-3">
                                    <img src="<?= base_url('assets/website/images/product/king.png') ?>" class="clud-img">
                                    <div>
                                        <p class="font-weight-normal mb-0">Save <span class="text-success fw-semibold">₹
                                                29.99</span> with Club</p>
                                        <p class="font-weight-normal mb-0 text-color">Club Price: ₹ 502</p>
                                    </div>
                                </div>
                                <a href="#" class="anchor-color me-0 me-md-4 anchor-hover">Join Now<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>

                            <div class="px-2 coin p-2 mt-3 ">
                                <div class="d-flex justify-content-center align-items-center gap-3">
                                    <img src="<?= base_url('assets/website/images/product/coin.png') ?>" width="22"
                                        height="22" alt="">
                                    <p class="mb-0 font-weight-normal">Buy & Earn Royal Cash upto ₹5 <span
                                            class="text-purple" data-toggle="tooltip" data-placement="left"
                                            title="Save upto 20%">[?]</span></p>
                                </div>
                            </div>
                        </div>



                        <div class="gap-3 align-items-center mt-3 d-none d-md-flex">
                            <button id="add-to-bag" class="btn-buy text-uppercase"><i
                                    class="bi bi-bag-check-fill mr-2"></i> Add To
                                Bag</button>

                            <button id="wishlist" class="btn-other text-uppercase"> <i class="bi bi-heart  mr-2"></i>
                                Wishlist</button>
                        </div>
                        <div id="mobile-buy-btn" class="gap-3 align-items-center mt-3 d-flex d-md-none">
                            <button id="add-to-bag" class="btn-buy text-uppercase">
                                <i class="bi bi-bag-check-fill mr-2"></i> Add To Bag
                            </button>

                            <button id="wishlist" class="btn-other text-uppercase">
                                <i class="bi bi-heart mr-2"></i> Wishlist
                            </button>
                        </div>

                     


                    </div>

                    <!-- <div class="mt-3 border-bottom-theme pb-4 ">
                        <div class="d-flex flex-column gap-3">
                            <h6 class="mb-0 fw-semibold">DELIVERY OPTIONS <i class="bi bi-truck  ms-2  fs-7"></i>
                            </h6>

                            <div class="d-flex flex-column gap-2">
                                <div class="delivery">
                                    <form action="">
                                        <input type="text" placeholder="Enter pincode" class="pincode-code" value=""
                                            name="pincode">
                                        <input type="submit"
                                            class="pincode-check pincode-button anchor-color anchor-hover"
                                            value="Check">
                                    </form>
                                </div>

                                <p class="mb-0 fs-8 text-theme-secondary font-weight-normal">Please enter PIN code to
                                    check delivery time & Pay on Delivery Availability</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="d-flex flex-column gap-2">
                                <p class="mb-0 font-weight-normal fs-7 text-theme-secondary">100% Original Products</p>
                                <p class="mb-0 font-weight-normal fs-7 text-theme-secondary">Pay on delivery might be
                                    available</p>
                                <p class="mb-0 font-weight-normal fs-7 text-theme-secondary">Easy 14 days returns and
                                    exchanges</p>
                            </div>
                        </div>
                    </div> -->

                    <div class="mt-3 border-bottom-theme pb-1 pb-md-4 ">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="fw-semibold mb-0 fw-semibold">Offers And Discounts</h5>
                            </div>                      
                        </div>
                        <div class="mt-2 couple-box">                            
                            <div id="sync1" class="owl-carousel owl-theme mt-3">
                                <div class="item">
                                    <div class="w-fc" id="couple-card">
                                        <div class="coupon">
                                            <div class="coupon-container">
                                                <div class="d-flex flex-column">
                                                    <div class="row">
                                                        <div class="col-8 col-md-8">
                                                            <div class="d-flex flex-column gap-1">
                                                                <div class="d-flex gap-2">
                                                                    <img class="club-img"
                                                                        src="<?= base_url('assets/website/images/product/club_membership.svg') ?>"
                                                                        alt="">
                                                                    <div class="offer-head text-theme-secondary">
                                                                        Flat 50% OFF* on Entire Fashion Range
                                                                    </div>
                                                                </div>
                                                                <p
                                                                    class="mb-0 font-weight-normal offer-head text-theme-secondary">
                                                                    Flat 45% OFF* on
                                                                    Entire
                                                                    Fashion Range</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 col-md-4 d-flex justify-content-end">
                                                            <button class="fs-8 text-purple" data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdroptnc">
                                                                View T&C <i class="bi bi-chevron-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="details">
                                                <div
                                                    class="details-container d-flex justify-content-between  align-items-cener gap-1  gap-md-3">
                                                    <div class="btn-group btn-group-sm" role="group"
                                                        aria-label="Large button group">
                                                        <button type="button" class="btn-code">BSALEFC</button>
                                                        <button type="button" class="btn-copy" id="btn-copy"><i
                                                                class="bi bi-copy"></i>
                                                            Copy</button>
                                                    </div>
                                                    <div class="btn-share-container">
                                                        <button class="btn-share-offer"><i class="bi bi-share"></i>
                                                            Share</button>
                                                        <div id="share_icon-offer" class="d-none">
                                                            <img src="<?= base_url('assets/website/images/product/whstap.webp') ?>"
                                                                alt="">
                                                            <img src="<?= base_url('assets/website/images/product/insta.webp') ?>"
                                                                alt="">
                                                            <img src="<?= base_url('assets/website/images/product/fb.webp') ?>"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="<?= base_url('assets/website/images/product/	circle.png') ?>"
                                                class="dot" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="w-fc" id="couple-card">
                                        <div class="coupon">
                                            <div class="coupon-container">
                                                <div class="d-flex flex-column">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="d-flex flex-column gap-1">
                                                                <div class="d-flex gap-2">
                                                                    <img class="club-img"
                                                                        src="<?= base_url('assets/website/images/product/club_membership.svg') ?>"
                                                                        alt="">
                                                                    <div class="offer-head text-theme-secondary">
                                                                        Flat 50% OFF* on Entire Fashion Range
                                                                    </div>
                                                                </div>
                                                                <p
                                                                    class="mb-0 font-weight-normal offer-head text-theme-secondary">
                                                                    Flat 45% OFF* on
                                                                    Entire
                                                                    Fashion Range</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 d-flex justify-content-end">
                                                            <button class="fs-8 text-purple" data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdroptnc">
                                                                View T&C <i class="bi bi-chevron-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="details">
                                                <div
                                                    class="details-container d-flex justify-content-between  align-items-cener gap-1  gap-md-3">
                                                    <div class="btn-group btn-group-sm" role="group"
                                                        aria-label="Large button group">
                                                        <button type="button" class="btn-code">BSALEFC</button>
                                                        <button type="button" class="btn-copy" id="btn-copy"><i
                                                                class="bi bi-copy"></i>
                                                            Copy</button>
                                                    </div>
                                                    <div class="btn-share-container">
                                                        <button class="btn-share-offer"><i class="bi bi-share"></i>
                                                            Share</button>
                                                        <div id="share_icon-offer" class="d-none">
                                                            <img src="<?= base_url('assets/website/images/product/whstap.webp') ?>"
                                                                alt="">
                                                            <img src="<?= base_url('assets/website/images/product/insta.webp') ?>"
                                                                alt="">
                                                            <img src="<?= base_url('assets/website/images/product/fb.webp') ?>"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="<?= base_url('assets/website/images/product/	circle.png') ?>"
                                                class="dot" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>

                    <div class="mt-3 border-bottom-theme pb-4">
                        <div class="border rounded-4 p-2 py-3 p-md-4 soft-green">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-0 gap-md-3 align-items-center">
                                    <img src="<?= base_url('assets/website/images/product/chat.png') ?>" width="36">
                                    <div class="d-flex flex-column gap-1 gap-md-2">
                                        <h6 class="mb-0 text-main fw-semibold fs-7">Slick Pattern Fashion Peronal
                                            Stylist
                                        </h6>
                                        <p class="mb-0 text-theme-color font-weight-normal fs-8">Chat with our stylist
                                            on</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="bi bi-chevron-right blink_btn fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-4 border-bottom-theme">
                        <!-- <h6 class="mb-0">Royal Club Benifits</h6> -->
                        <div class="row mt-2">
                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="gift-svg">
                                    <img src="<?= base_url('assets/website/images/product/gift.svg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Gift <span
                                            class="fw-semibold">Wrap</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="gift-svg">
                                    <img src="<?= base_url('assets/website/images/product/cod.svg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">COD <span
                                            class="fw-semibold">Avaiable</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="gift-svg">
                                    <img src="<?= base_url('assets/website/images/product/exchange.svg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Days Return <span
                                            class="fw-semibold d-none d-md-block">or Exchange</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="gift-svg">
                                    <img src="<?= base_url('assets/website/images/product/club.svg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Royal Club <span
                                            class="fw-semibold d-none d-md-block">Cash</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 border-bottom-theme pb-4">
                        <h5 class="fw-semibold mb-0">Royal Club Benifits</h5>
                        <div class="row mt-3">
                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="benefits-listing">
                                    <img src="<?= base_url('assets/website/images/product/club1.jpg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Club Cash Benefits <span
                                            class="d-none d-md-block">Upto ₹ 8</span>
                                        <button type="button" class="bg-transparent border-0" data-toggle="tooltip"
                                            data-class="tooltip-royal-club" data-placement="bottom"
                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                            <i class="bi bi-patch-question"></i> </button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="benefits-listing">
                                    <img src="<?= base_url('assets/website/images/product/club2.jpg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Exclusive Offer <span
                                            class="d-none d-md-block">& Discount</span>
                                        <button type="button" class="bg-transparent border-0" data-toggle="tooltip"
                                            data-class="tooltip-royal-club" data-placement="bottom"
                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                            <i class="bi bi-patch-question"></i> </button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="benefits-listing">
                                    <img src="<?= base_url('assets/website/images/product/club3.jpg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center"> Lower Prices <span
                                            class="d-none d-md-block">on products</span>
                                        <button type="button" class="bg-transparent border-0" data-toggle="tooltip"
                                            data-class="tooltip-royal-club" data-placement="bottom"
                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                            <i class="bi bi-patch-question"></i> </button>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-3 col-xxl-3 p-0">
                                <div class="benefits-listing">
                                    <img src="<?= base_url('assets/website/images/product/club4.jpg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Lower cost <span
                                            class="d-none d-md-block">Barrier</span><button type="button"
                                            class="bg-transparent border-0" data-toggle="tooltip"
                                            data-class="tooltip-royal-club" data-placement="bottom"
                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                            <i class="bi bi-patch-question"></i> </button>
                                    </p>
                                </div>
                            </div>

                            <!-- <div class="col-md-3">
                                <div class="benefits-listing">
                                    <img src="<?= base_url('assets/website/images/product/club5.jpg') ?>"
                                        class="mx-auto mb-2" alt="">
                                    <p class="fs-8 mb-0 font-weight-normal text-center">Free baby gear assembly <button
                                            type="button" class="bg-transparent border-0" data-toggle="tooltip"
                                            data-class="tooltip-royal-club" data-placement="bottom"
                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                            <i class="bi bi-patch-question"></i> </button>
                                    </p>
                                </div>
                            </div> -->


                        </div>
                    </div>

                    <div class="mt-3 border-bottom-theme pb-4">
                        <div class="d-flex flex-column gap-2 mt-2">
                            <h5 class="fw-semibold mb-0 fw-semibold">Complete The Look</h5>
                            <div class="row mt-3">
                                <div class="col-md-3 col-3">
                                    <div
                                        class="look d-flex flex-column gap-0 justify-content-center align-items-center">
                                        <img src="<?= base_url('assets/website/images/product/pic2-nobg.png') ?>"
                                            class="look_img" alt="">
                                        <h6 class="text-main fw-semibold mb-0 fs-7 mt-2">Jeans</h6>
                                        <p class="font-weight-normal text-theme-secondary mb-0 fs-8"> ₹ 7599</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div
                                        class="look d-flex flex-column gap-0 justify-content-center align-items-center">
                                        <img src="<?= base_url('assets/website/images/product/pic2-nobg.png') ?>"
                                            class="look_img" alt="">
                                        <h6 class="text-main fw-semibold mb-0 fs-7 mt-2">Jeans</h6>
                                        <p class="font-weight-normal text-theme-secondary mb-0 fs-8"> ₹ 7599</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div
                                        class="look d-flex flex-column gap-0 justify-content-center align-items-center">
                                        <img src="<?= base_url('assets/website/images/product/pic2-nobg.png') ?>"
                                            class="look_img" alt="">
                                        <h6 class="text-main fw-semibold mb-0 fs-7 mt-2">Jeans</h6>
                                        <p class="font-weight-normal text-theme-secondary mb-0 fs-8"> ₹ 7599</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div
                                        class="look d-flex flex-column gap-0 justify-content-center align-items-center">
                                        <img src="<?= base_url('assets/website/images/product/pic2-nobg.png') ?>"
                                            class="look_img" alt="">
                                        <h6 class="text-main fw-semibold mb-0 fs-7 mt-2">Jeans</h6>
                                        <p class="font-weight-normal text-theme-secondary mb-0 fs-8"> ₹ 7599</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 mt-md-3 mb-2 mb-md-0 pb-md-4 product-info border-bottom-theme">
                        <div class="accordion" id="product-info">
                            <div class="card border-bottom-theme">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left fs-6" type="button"
                                            data-toggle="collapse" data-target="#pointOne" aria-expanded="true"
                                            aria-controls="pointOne">
                                            <i class="bi bi-clipboard ml-2"></i> Product Information
                                        </button>
                                    </h2>
                                </div>

                                <div id="pointOne" class="collapse show aaccordion-container"
                                    aria-labelledby="headingOne" data-parent="#product-info">
                                    <div class="card-body">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex flex-column ">
                                                <div class="details-section">
                                                    <h6 class="text-main mb-2">Fabric<button type="button"
                                                            class="bg-transparent border-0" data-toggle="tooltip"
                                                            data-class="tooltip-royal-club" data-placement="bottom"
                                                            title="Earn Club Cash up to ₹ 8/- for this product, depending upon membe₹hip plan. 12-month plan club membe₹ receive ₹ 2 X Club Cash. You can redeem it in your future purchase (Min. 100/- Club Cash is required.)">
                                                            <i class="bi bi-patch-question"></i> </button>:</h6>
                                                    <ul>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                <span class="fw-semibold">Material</span> : 100%
                                                                Organic Cotton
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                <span class="fw-semibold">Weight</span> : 180 GSM
                                                                (grams per square meter) for
                                                                a comfortable, medium-weight feel
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                <span class="fw-semibold">Weave</span>: Je₹ey knit
                                                                for a soft and breathable texture
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="details-section">
                                                <h6 class="text-main mb-2">Product Details:</h6>
                                                <ul>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Fit</span> : 100%
                                                            Organic Cotton
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Sleeves</span> : Regular fit
                                                            with a
                                                            classic crew neckline
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Length</span>: Short sleeves
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Design</span>: Hip length for
                                                            a
                                                            ve₹atile look
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Sizes</span>: XS, S, M, L,
                                                            XL, XXL
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Features</span>: Tag-free for
                                                            added
                                                            comfort, double-stitched seams for durability
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="details-section">
                                                <h6 class="text-main mb-2">Sustainable:</h6>
                                                <ul>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Eco-Friendly</span> : Made
                                                            from certified organic cotton, grown without harmful
                                                            pesticides or synthetic fertilize₹.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Low Water Usage</span> :
                                                            Utilizes sustainable farming practices that significantly
                                                            reduce water consumption compared to conventional cotton.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Fair Trade Certified</span> :
                                                            Ensures fair wages and safe working conditions for the
                                                            farme₹ and worke₹ involved in the production process.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Recycled Packaging</span> :
                                                            Shipped in recyclable and biodegradable packaging to reduce
                                                            environmental impact.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Carbon Neutral</span> : Our
                                                            manufacturing process is carbon neutral, offsetting
                                                            emissions through certified carbon offset programs.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Ethical Production</span> :
                                                            Produced in factories adhering to ethical labor practices,
                                                            with no child labor and safe working environments.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="details-section">
                                                <h5 class="fw-semibold text-main mb-2">Material & Care:</h5>
                                                <ul>
                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Fabric</span> : 100%
                                                            Organic Cotton
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                            <span class="fw-semibold">Care Instructions</span> :
                                                        <ul>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Machine
                                                                    wash cold with like colo₹</p>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Use
                                                                    mild detergent</p>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Do not
                                                                    bleach</p>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Tumble
                                                                    dry low or line dry</p>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Warm
                                                                    iron if needed</p>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                    Do not
                                                                    dry clean</p>
                                                            </li>
                                                        </ul>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-bottom-theme">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left fs-6 collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="bi bi-terminal ml-2"></i> Know Your Product
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#product-info">
                                    <div class="card-body">
                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">

                                            Our Eco-Friendly Organic Cotton T-Shirt is crafted from 100%
                                            organic cotton, offering a soft, breathable, and durable fabric
                                            that’s gentle on your skin and better for the environment. With
                                            a comfortable medium-weight of 180 GSM, this t-shirt features a
                                            classic crew neckline and regular fit, making it a ve₹atile
                                            wardrobe staple. It’s produced in Fair Trade Certified
                                            factories, ensuring fair wages and safe working conditions.
                                            Packaged in recyclable materials, this t-shirt is easy to care
                                            for with machine washable fabric that retains its quality and
                                            color, promoting a more sustainable and ethical fashion choice.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left fs-6 collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <i class="bi bi-joystick ml-2"></i> Return And Exchange Policy:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#product-info">
                                    <div class="card-body">
                                        <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                            We want you to be completely satisfied with your purchase. If for any reason
                                            you are not happy with your Eco-Friendly Organic Cotton T-Shirt, we offer a
                                            hassle-free return and exchange policy. You can return or exchange your item
                                            within 30 days of purchase, provided it is unworn, unwashed, and in its
                                            original condition with all tags attached. Simply contact our customer
                                            service team to initiate the process, and we will provide you with a prepaid
                                            return shipping label. Once we receive the returned item, we will process
                                            your refund or exchange promptly. Your satisfaction is our top priority, and
                                            we strive to make your shopping experience as seamless as possible.</p>
                                        <div class="details-section">
                                            <h5 class="fw-semibold text-main mb-2">How to do Material & Care:</h5>
                                            <ul>
                                                <li>
                                                    <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                        <span class="fw-semibold">Fabric</span> : 100%
                                                        Organic Cotton
                                                    </p>
                                                </li>

                                                <li>
                                                    <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                        <span class="fw-semibold">Care Instructions</span> :
                                                    <ul>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Machine
                                                                wash cold with like colo₹</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Use
                                                                mild detergent</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Do not
                                                                bleach</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Tumble
                                                                dry low or line dry</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Warm
                                                                iron if needed</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-theme-color font-weight-normal mb-0 fs-7">
                                                                Do not
                                                                dry clean</p>
                                                        </li>
                                                    </ul>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 pb-3  border-bottom-theme"  id="rating-container">
                        <h5 class="mb-0 fw-semibold">Select Delivery Location<i class="bi bi-truck ms-3"></i></h5>
                        <div class="d-flex flex-column gap-2 my-3">
                            <div class="input-group delivery p-0 border-ddd">
                                <input type="text" class="form-control" placeholder="Enter a Pincode"
                                    aria-label="Enter a Pincode" aria-describedby="find-btn">
                                <span class="input-group-text text-main" id="find-btn">Find</span>
                            </div>

                            <p class="mb-0 mt-2 fs-7 text-theme-secondary font-weight-normal">Please enter PIN code
                                to
                                check delivery time & Pay on Delivery Availability</p>
                        </div>
                    </div>

                    <div class="mt-3 border-bottom-theme pb-4" >
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex flex-column gap-2">
                                <h5 class="mb-0 fw-semibold">Rating & Reviews </h6>
                            </div>

                            <div class="mt-2">
                                <div class="rating-number border rounded-4">
                                    <h2 class="mb-0 font-weight-light d-flex align-items-center">3.7 <i
                                            class="bi bi-star-half ms-2 fs-7 text-theme-secondary"></i>
                                    </h2>
                                    <div class="vr"></div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <h6 class="mb-0 font-weight-light">61</h6>
                                        <h6 class="mb-0 font-weight-light">Rating</h6>
                                    </div>
                                    <div class="vr"></div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <h6 class="mb-0 font-weight-light">6</h6>
                                        <h6 class="mb-0 font-weight-light">Review</h6>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-2  size-section ">
                                <h6 class="mb-0 font-weight-semibold">What customer Said <i
                                        class="bi bi-star-half ms-2 fs-7 text-theme-secondary"></i>
                                </h6>
                                <div class="d-flex flex-column qa-rating mt-2">
                                    <div>
                                        <h6 class="text-theme-secondary mb-0 font-weight-normal">Fit</h6>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mb-0 text-nowrap text-color font-weight-normal">Tight (40%)</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <h6 class="text-theme-secondary mb-0 font-weight-normal">Stretch</h6>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mb-0 text-nowrap text-color font-weight-normal">Medium (80%)</h6>
                                        </div>
                                    </div>

                                    <button class="fw-semibold mt-2 anchor-color anchor-hover w-fc" data-toggle="modal"
                                        data-target="#product_detial_modal">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 border-bottom-theme pb-4">
                        <h5 class="fw-semibold mb-0">Buyer Photos</h5>
                        <div class="cutomer-product-img">
                            <div class="cutomer-product-img-container">
                                <img src="<?= base_url('assets/website/images/product/pic6.jpg') ?>"
                                    alt="cutomer product review">
                            </div>
                            <div class="cutomer-product-img-container">
                                <img src="<?= base_url('assets/website/images/product/pic6.jpg') ?>"
                                    alt="cutomer product review">
                            </div>
                            <div class="cutomer-product-img-container">
                                <!-- <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                    alt="cutomer product review"> -->
                                <video width="80" height="106.6" muted autoplay style="height:106px">
                                    <source src="<?= base_url('assets/website/images/product/productVideo.mp4') ?>"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 pb-2">
                        <h5 class="fw-semibold mb-0 mt-2 mb-1">Most Helpfull review</h5>
                        <div class="review border-0">
                            <div class="review-container mt-3 mb-1">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <h6 class="mb-0 text-theme-secondary font-weight-normal">Verified Buyer</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <h6 class="mb-0 text-theme-secondary font-weight-normal">Reviewed On: 22/04/2024
                                    </h6>
                                </div>
                                <div class="box-40 border rounded-4 bg-light-gray-f4">
                                    <div class="d-flex">
                                        <h6 class="mb-0">5</h6>
                                        <i class="bi bi-star-half ml-1 fs-7 text-theme-secondary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="review-cmt">
                                <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                                <div id="review-cmt">
                                    <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently purchased a
                                        pair of Nice Fiit Jeans, and they have quickly become my favorite due to their
                                        exceptional fit and comfort.
                                        <span class="d-none" id="read-more-cmt"> The jeans hug
                                            the body perfectly, providing a snug fit without feeling restrictive, thanks
                                            to
                                            the stretchable fabric that allows for easy movement. The high-quality
                                            cotton
                                            and elastane blend feels soft against the skin and remains durable and
                                            breathable even after multiple washes. These jeans seamlessly blend style
                                            and
                                            comfort, making them ideal for both casual and semi-formal wear. Overall,
                                            Nice
                                            Fiit Jeans are a fantastic addition to any wardrobe.
                                        </span>
                                    </p>

                                    <button class="moreless-button anchor-hover p-0" href="javascript:void(0)">Read
                                        more</button>
                                </div>
                                <h6 href="javascript:void(0)" id="view-all-review"
                                    class="mt-2 text-main anchor-hover p-0">View
                                    all Review</h6>
                            </div>
                        </div>
                    </div>

                    <div class="all-review border-bottom-theme pb-3 d-none transition-3" id="all-review">
                        <div class="review-cmt py-3 border-bottom">
                            <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                            <h6 class="my-2 text-main">Pradeep</h6>
                            <div id="review-cmt">
                                <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently
                                    purchased a
                                    pair of Nice Fiit Jeans, and they have quickly become my favorite due to
                                    their
                                    exceptional fit and comfort.
                                    <span class="d-none" id="read-more-cmt"> The jeans hug
                                        the body perfectly, providing a snug fit without feeling restrictive,
                                        thanks
                                        to
                                        the stretchable fabric that allows for easy movement. The high-quality
                                        cotton
                                        and elastane blend feels soft against the skin and remains durable and
                                        breathable even after multiple washes. These jeans seamlessly blend
                                        style
                                        and
                                        comfort, making them ideal for both casual and semi-formal wear.
                                        Overall,
                                        Nice
                                        Fiit Jeans are a fantastic addition to any wardrobe.
                                    </span>
                                </p>

                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>

                        <div class="review-cmt py-3 border-bottom">
                            <div class="cutomer-product-img">
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                            </div>
                            <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                            <h6 class="my-2 text-main">Pradeep</h6>
                            <div id="review-cmt">
                                <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently
                                    purchased a
                                    pair of Nice Fiit Jeans, and they have quickly become my favorite due to
                                    their
                                    exceptional fit and comfort.
                                    <span class="d-none" id="read-more-cmt"> The jeans hug
                                        the body perfectly, providing a snug fit without feeling restrictive,
                                        thanks
                                        to
                                        the stretchable fabric that allows for easy movement. The high-quality
                                        cotton
                                        and elastane blend feels soft against the skin and remains durable and
                                        breathable even after multiple washes. These jeans seamlessly blend
                                        style
                                        and
                                        comfort, making them ideal for both casual and semi-formal wear.
                                        Overall,
                                        Nice
                                        Fiit Jeans are a fantastic addition to any wardrobe.
                                    </span>
                                </p>

                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>

                        <div class="review-cmt py-3 border-bottom">
                            <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                            <h6 class="my-2 text-main">Pradeep</h6>
                            <div id="review-cmt">
                                <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently
                                    purchased a
                                    pair of Nice Fiit Jeans, and they have quickly become my favorite due to
                                    their
                                    exceptional fit and comfort.
                                    <span class="d-none" id="read-more-cmt"> The jeans hug
                                        the body perfectly, providing a snug fit without feeling restrictive,
                                        thanks
                                        to
                                        the stretchable fabric that allows for easy movement. The high-quality
                                        cotton
                                        and elastane blend feels soft against the skin and remains durable and
                                        breathable even after multiple washes. These jeans seamlessly blend
                                        style
                                        and
                                        comfort, making them ideal for both casual and semi-formal wear.
                                        Overall,
                                        Nice
                                        Fiit Jeans are a fantastic addition to any wardrobe.
                                    </span>
                                </p>

                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>

                        <div class="review-cmt py-3 border-bottom">
                            <div class="cutomer-product-img">
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                                <div class="cutomer-product-img-container">
                                    <img src="<?= base_url('assets/website/images/product/pic2.jpg') ?>"
                                        alt="cutomer product review">
                                </div>
                            </div>
                            <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                            <h6 class="my-2 text-main">Pradeep</h6>
                            <div id="review-cmt">
                                <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently
                                    purchased a
                                    pair of Nice Fiit Jeans, and they have quickly become my favorite due to
                                    their
                                    exceptional fit and comfort.
                                    <span class="d-none" id="read-more-cmt"> The jeans hug
                                        the body perfectly, providing a snug fit without feeling restrictive,
                                        thanks
                                        to
                                        the stretchable fabric that allows for easy movement. The high-quality
                                        cotton
                                        and elastane blend feels soft against the skin and remains durable and
                                        breathable even after multiple washes. These jeans seamlessly blend
                                        style
                                        and
                                        comfort, making them ideal for both casual and semi-formal wear.
                                        Overall,
                                        Nice
                                        Fiit Jeans are a fantastic addition to any wardrobe.
                                    </span>
                                </p>

                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>

                        <div class="review-cmt py-3 border-bottom">
                            <h5 class="fw-semibold mb-0 text-main font-weight-light">Nice Fitting</h5>
                            <h6 class="my-2 text-main">Pradeep</h6>
                            <div id="review-cmt">
                                <p class="mb-0 text-theme-secondary mt-2 font-weight-normal">I recently
                                    purchased a
                                    pair of Nice Fiit Jeans, and they have quickly become my favorite due to
                                    their
                                    exceptional fit and comfort.
                                    <span class="d-none" id="read-more-cmt"> The jeans hug
                                        the body perfectly, providing a snug fit without feeling restrictive,
                                        thanks
                                        to
                                        the stretchable fabric that allows for easy movement. The high-quality
                                        cotton
                                        and elastane blend feels soft against the skin and remains durable and
                                        breathable even after multiple washes. These jeans seamlessly blend
                                        style
                                        and
                                        comfort, making them ideal for both casual and semi-formal wear.
                                        Overall,
                                        Nice
                                        Fiit Jeans are a fantastic addition to any wardrobe.
                                    </span>
                                </p>

                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 d-block d-md-none">
                        <h5 class="fw-semibold text-main mb-2">Unlocking Glamour</h5>
                        <div class="row gap-3 gap-md-0">
                            <div class="col-md-6">
                                <button data-bs-toggle="modal" data-bs-target="#beauty_secrets">
                                    <img src="<?= base_url('assets/website/images/product/beauty.png') ?>" alt="">
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button href="#" data-bs-toggle="modal" data-bs-target="#fashion_pairing">
                                    <img src="<?= base_url('assets/website/images/product/fashion.png') ?>" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 border-bottom-theme pb-4">
                <h5 class="fw-semibold mb-0 text-center text-main underline-cls mx-auto w-fc">Frequently Asked Questions
                    (FAQ)</h5>
                <p class="mb-3 text-theme-secondary text-center mx-auto w-fc fs-7 fw-normal">Common Questions About
                    Our Jeans</p>
                <div class="accordion mb-0" id="FAQ">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="fs-16 " type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1. What sizes do your jeans come in?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#FAQ">
                            <div class="card-body">
                                Our jeans are available in a wide range of sizes to accommodate different body
                                types. We
                                offer sizes from XXS to XXL, including specific measurements for waist and inseam
                                lengths. Please refer to our size chart for detailed measurements to ensure the best
                                fit.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="fs-16  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How should I care for my jeans to ensure they last longer?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
                            <div class="card-body">
                                To prolong the life of your jeans, we recommend washing them inside out in cold
                                water
                                with similar colo₹. Avoid using bleach or fabric softene₹. It's best to air dry
                                your
                                jeans, but if you must use a dryer, use a low heat setting. Additionally, avoid
                                frequent
                                washing to maintain the color and fabric integrity.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="fs-16  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is the difference between the various fits (e.g., skinny, slim,
                                    straight,
                                    bootcut)?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#FAQ">
                            <div class="card-body">
                                The fit of jeans refe₹ to the overall shape and cut of the legs. Here's a quick
                                guide:
                                <ul style="padding-left:01rem">
                                    <li class="mt-1">
                                        <span class="fw-semibold">Skinny</span>: Tightly fitted from waist to
                                        ankle.
                                    </li>
                                    <li class="mt-1">
                                        <span class="fw-semibold">Slim</span>: Tightly fitted from waist to
                                        ankle.
                                    </li>
                                    <li class="mt-1">
                                        <span class="fw-semibold">Straight</span>: The same width from the knee
                                        to
                                        the leg opening, providing a classic look.
                                    </li>
                                    <li class="mt-1">
                                        <span class="fw-semibold">Bootcut</span>: Slightly flared from the knee
                                        to
                                        the leg opening, allowing room for boots.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="fs-16  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Are your jeans made from sustainable materials?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#FAQ">
                            <div class="card-body">
                                Yes, we are committed to sustainability. Many of our jeans are made from organic
                                cotton
                                and recycled materials. We also use eco-friendly dyes and washing techniques to
                                reduce
                                water and energy consumption. You can find specific information about the materials
                                and
                                processes used for each product on its product page.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="fs-16  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. What is your return and exchange policy for jeans?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#FAQ">
                            <div class="card-body">
                                We offer a hassle-free return and exchange policy. If you are not completely
                                satisfied
                                with your purchase, you can return or exchange your jeans within 30 days of
                                receiving
                                your order, provided they are in their original condition with tags attached. Please
                                visit our returns page for detailed instructions and to initiate a return or
                                exchange.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 border-bottom-theme pb-4 " id="similar-product">
                <h5 class="mb-0 fw-semibold">Similar Product</h5>
                <div class="d-none d-md-block">
                    <div class="d-flex flex-wrap mt-3 ">
                        <div id="product-container"></div>
                    </div>
                </div>
                <div class="d-flex d-md-none">
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="slider-container">
                                    <div class="product-container">
                                        <div class="d-flex flex-column gap-1">
                                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>"
                                                alt="">
                                            <div class="product-details d-flex flex-column gap-1">
                                                <h6 class="mb-0">Jack & Jones</h6>
                                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit
                                                    Stretchable
                                                    Jeans
                                                </p>
                                                <div class="d-flex gap-2 align-items-end">
                                                    <h6 class="mb-0">₹ 1700</h6>
                                                    <span class="fs-7 text-cut">₹ 2000</span>
                                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 border-bottom-theme pb-4">
                <h5 class="mb-0 fw-semibold">Customer Also Liked</h5>

                <div class="mt-3 d-none d-md-flex" id="product-container">
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="d-flex flex-column gap-1">
                            <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
                            <div class="product-details d-flex flex-column gap-1">
                                <h6 class="mb-0">Jack & Jones</h6>
                                <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans
                                </p>
                                <div class="d-flex gap-2 align-items-end">
                                    <h6 class="mb-0">₹ 1700</h6>
                                    <span class="fs-7 text-cut">₹ 2000</span>
                                    <span class="fw-semibold text-success mb-0">55% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 d-block d-md-none">
                    <div class="d-flex d-md-none">
                        <div class="home-demo">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="slider-container">
                                        <div class="product-container">
                                            <div class="d-flex flex-column gap-1">
                                                <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>"
                                                    alt="">
                                                <div class="product-details d-flex flex-column gap-1">
                                                    <h6 class="mb-0">Jack & Jones</h6>
                                                    <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit
                                                        Stretchable
                                                        Jeans
                                                    </p>
                                                    <div class="d-flex gap-2 align-items-end">
                                                        <h6 class="mb-0">₹ 1700</h6>
                                                        <span class="fs-7 text-cut">₹ 2000</span>
                                                        <span class="fw-semibold text-success mb-0">55% OFF</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button onclick="pricedrop()" id="pricedrop" title="Price Drop" data-bs-toggle="modal"
        data-bs-target="#priceDropModal">
        <i class="bi bi-bell-fill"></i>
    </button>
    <?php include('modal.php') ?>
    <?php include('include/footer.php') ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function() {
    const productHTML = `
      <div class="product-container">
          <div class="d-flex flex-column gap-1">
              <img src="<?= base_url('assets/website/images/product/similar-product.webp') ?>" alt="">
              <div class="product-details d-flex flex-column gap-1">
                  <h6 class="mb-0">Jack & Jones</h6>
                  <p class="mb-0 text-theme-secondary font-weight-normal">Men Slim Fit Stretchable Jeans</p>
                  <div class="d-flex gap-2 align-items-end">
                      <h6 class="mb-0">₹ 1700</h6>
                      <span class="fs-7 text-cut">₹ 2000</span>
                      <span class="fw-semibold text-success mb-0">55% OFF</span>
                  </div>
              </div>
          </div>
      </div>
  `;

    for (let i = 0; i < 20; i++) {
        $('#product-container').append(productHTML);
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</html>