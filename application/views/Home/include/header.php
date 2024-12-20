<style>
    .close {
        float: right;
        font-size: 4.3125rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        float: left;
        opacity: .5;
    }

    .input-feild {
        height: 50px;
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 0px solid #ddd !important;
        border-top-left-radius: -1px;
        border-top-right-radius: -1px;
        height: 100px;
    }

    .modal-header .close {
        /* padding: 1rem 1rem; */
        margin: -3rem -1rem -1rem auto !important;
    }

    /* Adjust the modal width and height in pixels */
    #registerModal .modal-dialog {
        width: 800px !important;
        margin: 1.75rem auto !important;
    }

    .close {
        float: right;
        font-size: 4.3125rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        float: left;
        opacity: .5;
    }

    .input-feild {
        height: 50px;
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 0px solid #ddd !important;
        border-top-left-radius: -1px;
        border-top-right-radius: -1px;
        height: 100px;
    }

    .modal-header .close {
        /* padding: 1rem 1rem; */
        margin: -3rem -1rem -1rem auto !important;
    }

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
        background: none;
        border: none;
        color: white;
        line-height: normal;

    }

    .header-two .header-mini .pro-header-options .dropdown .dropdown-menu {
        top: 40px;
    }

    .header-two .header-mini .pro-header-options .dropdown .dropdown-menu .menu {
        gap: 20px;
        margin-bottom: 5px;
    }

    .dropdown-item {
        font-weight: 500;
        padding-left: 0;
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        font-size: 14px;
    }

    #badge .badge-secondary {
        position: absolute;
        right: -3px !important;
        top: -6px;
        border-radius: 10px;
    }



    .headercount {
        position: absolute;
        top: -7px;
        right: 39px;
        padding: 3px 6px !important;
        border-radius: 50%;
        background-color: #8340a1;
    }

    /* input .custom-form-group */

    .custom-form-group {
        position: relative;

    }

    .custom-form-group .custom-label {
        position: absolute;
        top: 0rem;
        left: 1rem;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
        color: #666;
    }

    .custom-form-group input:focus+.custom-label,
    .custom-form-group input:not(:placeholder-shown)+.custom-label {
        top: 5px;
        font-size: 12px;
        color: #333;
    }

    .custom-form-group input {
        width: 100%;
        padding: 1rem;
        border: 1px solid #ccc;
        /* border-radius: 5px; */
        outline: none;
        transition: all 0.3s ease-in-out;
        height: 55px;
        background-color: #eeeef1;
        font-size: 14px;
    }

    .app-download-btn {
        gap: 6px;
        font-size: 12px;
        background: none;
        outline: 0;
        border: 0;
        color: rgba(255, 255, 255, 0.72);
        cursor: pointer;
        margin-left: 25px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .category-name {
        font-size: 1rem;
        padding-top: 1rem;
        font-weight: 600;
        padding-bottom: 0.2142857143rem;
        border-bottom: 0 solid #000;
        letter-spacing: 0.1428571429em;
        text-transform: uppercase;
        white-space: nowrap;
        font-size: 13px;
        line-height: 1.5;
        text-transform: uppercase;
        color: #000;
    }

    .category-name:active {
        border: none;

    }



    .dropdown-menu {
        display: none;

    }

    /* Custom CSS to show dropdown on hover */
    .dropdown:hover .dropdown-menu {
        display: block;
        top: 2.5rem !important;
        background: white;
        box-shadow: rgba(17, 19, 20, 0.16) 0px 2px 8px -2px, rgba(17, 19, 20, 0.08) 0px 8px 24px -2px;
        border-radius: 2px;
        overflow: hidden;
        padding: 1rem;
        max-height: 392px;
        min-width: 12rem;
        position: absolute;
        will-change: transform;
        top: 0px;
        left: 0px;
        transform: translate3d(0px, -1px, 0px) !important;
        transform: translate3d(0px, -1px, 0px) !important;
        width: 100%;
    }

    .mega-dropdown {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        /* This will ensure the dropdown covers the entire width of the viewport */
        z-index: 1000;
        /* Adjust as needed */
    }

    .shop-by-category {
        border-bottom: 1px solid #b07bc7;
        margin-bottom: 10px;
        padding-bottom: 5px;
        letter-spacing: .0214285714rem;
        text-transform: none;
        font-size: 1rem;
        line-height: 1.2857142857rem;
    }

    .css-1tef76f {
        width: 100%;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        -webkit-letter-spacing: 0;
        -moz-letter-spacing: 0;
        -ms-letter-spacing: 0;
        letter-spacing: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: black;
    }

    .dropdown2:hover .dropdown-menu {
        padding-top: 19px;
        display: block;
        border: none;
        border-radius: 0px;
        padding-left: 10px;
        left: -156px;
        padding-right: 11px;
        top: 35px;

    }



    .dropdown-item2 {
        font-weight: 500;
        padding-left: 0;
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        font-size: 14px;
        margin-bottom: 13px;
    }

    .dropdown-categories {
        border: 0;
        position: relative;
        outline: none;
    }

    .dropdown-categories::after {
        content: '';
        opacity: 0;
        height: 2px;
        width: 100%;
        background-color: #b380ca;
        position: absolute;
        bottom: 0;
        left: 0;

    }

    .dropdown-categories:hover::after {
        opacity: 1;
    }


    .dropdown-item.active,
    .dropdown-item:focus,
    .dropdown-item:hover,
    .dropdown-item:active {
        background-color: white;
        color: black;
    }

    #autocomplete{
        width: 500px;
    }

   .aa-Panel{
    z-index: 9999;
    position: fixed;
    top: 0px;
   }
</style>

<!--<div class="se-pre-con"></div> -->
<!-- //header style Two -->
<div class="fixed-top">
    <header id="headerTwo 33" class="header-area header-two header-desktop">
        <div class="header-mini bg-purple">
            <div class="container-fluid" style="height: 29px;">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="username">
                            <h6 class="text-white fw-semibold fs-8"> Mr. Admin</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <?php
                        if ($this->sitepermission->notification) {
                        ?>
                            <marquee width="100%" direction="left" class="text-white" style="height: 31px;">
                                <?php
                                $notification = $this->db->get_where('notification', ['is_status' => 'true'])->row();
                                if (!empty($notification)) {
                                    echo $notification->description;
                                }
                                ?>
                            </marquee>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end fw-normal">
                        <a class="app-download-btn " href="<?php echo base_url('Home/appDownload') ?>">
                            <button class="app-download-btn text-white fw-bold" style="padding-bottom: 12px;">
                                <i class="bi bi-phone" style="font-size: 16px;"></i>
                                App Download
                            </button>
                            <div class="pro-header-options  d-flex">
                                <!-- Need Help-->
                                <div class="dropdown need-help">
                                    <a class="dropdown-toggle d-flex align-items-center gap-1 fw-bold mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Need Help? <i class="bi bi-chevron-down text-white"></i>
                                    </a>
                                    <div class="py-2">
                                        <ul class="dropdown-menu px-4" style="top: 32px;height: 121px;">

                                            <?php
                                            if (!empty($this->needHelp)) {
                                            ?>
                                                <li class="d-flex menu"><span class="fw-bold">Chat:</span>
                                                    <a class="text-black  text-nowrap" href="https://wa.me/<?= !empty($this->needHelp) ? $this->needHelp['whatsapp_no'] : '' ?>?text=Hello%20World!" target="_blank">Let's Chat</a>

                                                </li>
                                                <li class="d-flex menu"><span class="fw-bold">Phone:</span>
                                                    <a href="tel:91<?= !empty($this->needHelp) ? $this->needHelp['mobile'] : '' ?>" class="text-black text-nowrap" style="text-decoration: none;">+91
                                                        <?= !empty($this->needHelp) ? $this->needHelp['mobile'] : '' ?>
                                                    </a>
                                                </li>
                                                <li class="d-flex menu"><span class="fw-bold">Email:</span>
                                                    <a class="text-black  text-nowrap" href="mailto:<?= !empty($this->needHelp) ? $this->needHelp['email'] : '' ?>"><?= !empty($this->needHelp) ? $this->needHelp['email'] : '' ?></a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <li class="d-flex menu"><span class="fw-bold">Order:</span>
                                                <a class="text-black  text-nowrap" href="<?php echo base_url('Home/OrderTracking') ?>">Track
                                                    Your Orders</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-maxi bg-header-bar">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center px-5">
                    <div class="col-12 col-sm-12 col-lg-2 d-flex justify-content-start">
                        <a href="<?php echo base_url(); ?>" class="logo">
                            <img class="img-fluid" src="<?= !empty($this->webLogo) ? base_url('uploads/logo/' . $this->webLogo['web_header_logo']) : '' ?>" alt="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_alt'] : '' ?>" title="<?= !empty($this->webLogo) ? $this->webLogo['web_header_logo_title'] : '' ?>">
                        </a>
                    </div>

                    <div class="col-lg-8 nav-start">
                    </div>

                    <div class="col-lg-2 d-flex gap-3 align-items-center justify-content-end">
                        <div class="d-flex gap-3 ">
                            <!-- <div id="autocomplete"></div>  -->
                            <!-- <form class="d-flex justify-content-center align-items-center search-container" style="margin-right: 10px;">
                                <input type="text" name="search" placeholder="Search here... " autocomplete='on' id="searchInput"> <i class="bi bi-search"></i>
                                <div class="search-dropdown " id="searchDropdown">
                                    <div class="suggestions">
                                        <p class="font-weight-bold mons-sans-bold">SUGGESTIONS</p>
                                        <div><a class="category-sub-link ">Clothes Doctor <i class="site-search__cat">in womens</i></a>
                                        </div>
                                        <div><a class="category-sub-link">YFB CLOTHING <i class="site-search__cat">in womens</i></a></div>
                                    </div>
                                    <div class="recent-searches">
                                        <p class="font-weight-bold mons-sans-bold">RECENT SEARCHES</p>
                                        <div><a class="category-sub-link gap-2 d-flex"><i class="bi bi-clock-history"></i> Clothes Doctor
                                            </a>
                                        </div>
                                        <div><a class="category-sub-link gap-2 d-flex"><i class="bi bi-clock-history"></i> YFB CLOTHING </a>
                                        </div>
                                    </div>
                                    <div class="related-products">
                                        <p class="font-weight-bold mons-sans-bold">RELATED PRODUCTS</p>
                                        <div class="d-flex gap-4">
                                            <a class="search-product zoomAnimation" href="">
                                                <img src="https://via.placeholder.com/50" alt="Product 1">
                                                <div class="mt-1">
                                                    <div class="text-nowrap">Yazime Dress</div>
                                                    <span class="text-muted">YFB CLOTHING</span><br>
                                                    <span class="text-danger">₹20,489.25</span>
                                                </div>
                                            </a>
                                            <a class="search-product zoomAnimation" href="">
                                                <img src="https://via.placeholder.com/50" alt="Product 2">
                                                <div class="mt-1">
                                                    <div>Cedarwood And Vanilla Knitwear Mist</div>
                                                    <span class="text-muted">Clothes
                                                        Doctor</span><br>₹1,421.70
                                                </div>
                                            </a>
                                            <a class="search-product zoomAnimation" href="">
                                                <img src="https://via.placeholder.com/50" alt="Product 3">
                                                <div class="mt-1">
                                                    <div class="text-nowrap">Deodorizing Clothing Spritz</div>
                                                    <span class="text-muted">Clothes
                                                        Doctor</span><br>₹1,421.70
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form> -->


                            <div class="dropdown2 icon-header my-auto mx-1">
                                <a href="#" class="text-black hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-2" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                    <span class="bi bi-person hvr-grow" style="font-size: 22px;"></span>
                                    <div class="css-1tef76f">Account</div>
                                </a>

                                <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item dropdown-item2 " href="<?= base_url('Home/Profile') ?>">Profile</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/Wishlist') ?>">Wishlist</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/Order') ?>">Order
                                        History</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/ClubDashboard') ?>">Club
                                        Dashboard</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/SlickWallet') ?>">Wallet</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/ShareAndEarn') ?>">Share A
                                        Friend</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/ShareAndEarn') ?>/App">Share App
                                        With Friend</a>
                                    <a class="dropdown-item dropdown-item2" href="<?= base_url('Home/Logout') ?>">Logout</a>
                                </div>
                            </div>

                            <div class="dropdown2 icon-header my-auto mx-1">
                                <a href="#" class="hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-3" id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cart" data-placement="bottom" style="text-decoration: none;">
                                    <i class="bi bi-heart" style="font-size: 17px;"></i>
                                    <div class="css-1tef76f">Wishlist</div>
                                    <span class="badge badge-secondary headercount" style="right: 59px;">
                                        <?php
                                        if (!empty($CartData)) {
                                            echo $CartData;
                                        } else {
                                            echo "0";
                                        }
                                        ?>
                                    </span>
                                </a>
                                <!-- <div class="dropdown-menu shadow" aria-labelledby="cartDropdown">
                  <a class="dropdown-item dropdown-item2" href="<?= base_url('Cart') ?>">View Wishlist</a>
                </div> -->
                            </div>

                            <div class="dropdown2 icon-header my-auto mx-1">
                                <a href="#" class="text-black hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-3 " id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cart" data-placement="bottom" style="text-decoration: none;">
                                    <i class="bi bi-cart hvr-grow" style="font-size: 21px;"></i>
                                    <span class="badge badge-secondary headercount">
                                        0 </span>
                                    <div class="css-1tef76f ">Cart</div>
                                </a>

                                <!-- <div class="dropdown-menu shadow" aria-labelledby="cartDropdown" style="left: 94px;">
                  <a class="dropdown-item dropdown-item2" href="<?= base_url('Cart">') ?>View
                    Cart</a>
                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <?php
    // var_dump( $this->subcategory);
    ?>
    <div class="top-categories">
        <header class="header" id="header">
            <nav class="navbar p-0">
                <section class="navbar__left">
                    <div class="box-40 d-none pre-menu" id="pre-menu">
                        <h4 class="mb-0">
                            <i class="bi bi-arrow-left-circle-fill"></i>
                        </h4>
                    </div>
                    <div class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </div>
                </section>


                <section class="navbar__center">
                    <div class="menu" id="menu">
                        <ul class="menu__inner">
                            <!-- <li class="menu__item"><a href="<?= base_url() ?>" class="menu__link">Home</a></li> -->
                            <!-- <li class="menu__item menu__dropdown">
                                <a href="#" class="menu__link">
                                    What's New
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <div class="submenu megamenu__image">
                                    <?php
                                    foreach ($this->getBrand as $brand) {
                                    ?>

                                        <div class="submenu__inner">

                                            <a href="#">
                                                <img src="<?= base_url('uploads/brand/' . $brand['icon']) ?>" class="submenu-image" alt="">
                                                <span class="submenu__title"><?= $brand['name'] ?></span>
                                            </a>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                </div>
                            </li>-->
                            <!-- <li class="menu__item menu__dropdown">
                                <a href="#" class="menu__link">
                                    Account
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <div class="submenu megamenu__normal">
                                    <ul class="submenu__list">
                                        <li><a href="<?= base_url('Home/Login') ?>">Login</a></li>
                                        <li><a href="<?= base_url('Home/Login') ?>">Register</a></li>
                                        <li><a href="<?= base_url('Home/OrderTracking') ?>">Track Order</a></li>
                                        <li><a href="<?= base_url('Home/Contactus') ?>">Help</a></li>
                                    </ul>
                                </div>
                            </li> -->
                            <?php
                            foreach ($this->getHeaderCategory as $cindex => $catData) {
                                // if ($cindex > 6)
                                //     break;

                            ?>

                                <!--    <li class="menu__item menu__dropdown more_product">
                                    <a href="#" class="menu__link">
                                        <?= $catData['name'] ?>
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <?php
                                    if (!empty($catData['subcategories'])) {
                                    ?>
                                    <div class="submenu megamenu__text">
                                        <?php
                                        if (!empty($catData['icon'])) {
                                        ?>
                                            <div class="submenu__inner">
                                                <img src="<?= $catData['icon'] ?>" class="submenu-image" width="200" alt="">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        $subcatsList = [];
                                        $sb = 0;
                                        foreach ($catData['subcategories'] as $index => $subcat) {
                                            if (!empty($subcat['cosubcategory'])) {
                                                // var_dump($subcat['cosubcategory']);

                                        ?>
                                                <div class="submenu__inner">
                                                    <ul class="submenu__list">

                                                        <li><b class="border-bottom"><a href="#"><?= !empty($subcat['title']) ? $subcat['title'] : $subcat['name'] ?></a></b></li>
                                                        <?php
                                                        foreach ($subcat['cosubcategory'] as $cosubcate) {

                                                        ?>
                                                            <li><a href="#"><?= $cosubcate['name'] ?></a></li>
                                                        <?php

                                                        }
                                                        $sb++;
                                                        if ($sb == 6)
                                                            break;
                                                        ?>

                                                    </ul>
                                                </div>
                                        <?php
                                            } else {
                                                array_push($subcatsList, $subcat);
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($sb < 6) {
                                            $i = 6 - ($sb + 1);
                                            if (count($subcatsList) > 0) {
                                                $sn = getNumberRound(count($subcatsList));
                                                $loopcount = 1;
                                                for ($j = 0; $j <= $i; $j++) {
                                                    if ($j < $sn) {
                                        ?>
                                                        <div class="submenu__inner">

                                                            <ul class="submenu__list">
                                                                <?php
                                                                foreach ($subcatsList as $index => $sbcat) {
                                                                    if ($index != 0 && ($index + 1) % 8 == 0) {
                                                                        $loopcount++;
                                                                        break;
                                                                    }
                                                                    if ($loopcount > 1) {
                                                                        if ($index <= ($loopcount * 8)) {
                                                                            continue;
                                                                        }
                                                                    }

                                                                ?>
                                                                    <li><a href="#"><?= $sbcat['name'] ?></a></li>
                                                                <?php

                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </li>
                            <?php

                            }
                            ?>-->

                                <!--=======================================-->
                                <!-- <?php
                                        foreach ($this->getHeaderCategory as $cindex => $catData) {
                                            // if ($cindex > 6)
                                            //     break;
                                        ?>

                                <li class="menu__item menu__dropdown more_product">
                                    <a href="#" class="menu__link">
                                        <?= $catData['name'] ?>
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <div class="submenu megamenu__text">
                                        <?php
                                            if (!empty($catData['icon'])) {
                                        ?>
                                            <div class="submenu__inner">
                                                <img src="<?= $catData['icon'] ?>" class="submenu-image" width="200" alt="">
                                            </div>
                                        <?php
                                            }
                                        ?>
                                        <div class="submenu__inner">
                                            <ul class="submenu__list">
                                                <li><a href="#" class="shop-all">Shop All</a></li>
                                                <?php
                                                foreach ($catData['subcategories'] as $index => $subcat) {
                                                ?>
                                                    <li><a href="#"><?= $subcat['name'] ?></a></li>
                                                <?php
                                                    if ($index == 6)
                                                        break;
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <?php
                                            if (count($catData['subcategories']) > 7) {
                                                $i = getNumberRound(count($catData['subcategories']) - 7);
                                                // echo count($catData['subcategories']) - 7;
                                                $j = 0;
                                                for ($i; $i >= 1; $i--) {
                                        ?>
                                                <div class="submenu__inner">

                                                    <ul class="submenu__list">
                                                        <?php
                                                        foreach ($catData['subcategories'] as $index => $subcat) {
                                                            if ($index <= 6 && $j == 0)
                                                                continue;
                                                        ?>
                                                            <li><a href="#"><?= $subcat['name'] ?></a></li>
                                                        <?php
                                                            $j++;
                                                            if ($j % 8 == 0)
                                                                break;
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </li>
                            <?php
                                        }
                            ?> -->

                                <!--  =========================================-->

                                <?php
                                foreach ($this->getTitleCategory as $cindex => $catData) {

                                ?>

                                    <li class="menu__item menu__dropdown more_product">
                                        <a href="#" class="menu__link">
                                            <?= $catData['name'] ?>
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <?php
                                        if (!empty($catData['categoryTags'])) {
                                        ?>
                                            <div class="submenu megamenu__text">
                                                <?php
                                                if (!empty($catData['icon'])) {
                                                ?>
                                                    <div class="submenu__inner">
                                                        <img src="<?= $catData['icon'] ?>" class="submenu-image" width="200" alt="">
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                foreach ($catData['categoryTags'] as $tindex => $ctags) {
                                                    if (!empty($ctags['subcategories'])) {
                                                ?>
                                                        <div class="submenu__inner">
                                                            <ul class="submenu__list">
                                                                <li><b class="border-bottom"><a href="#"><?= $ctags['tag_name'] ?></a></b></li>
                                                                <?php
                                                                foreach ($ctags['subcategories'] as $scindex => $subcat) {
                                                                ?>
                                                                    <li><a href="#"><?= $subcat['name'] ?></a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }

                                        ?>
                                    </li>
                                <?php
                                }
                                ?>

                                <!--  <li class="menu__item menu__dropdown">
                                <a href="#" class="menu__link">
                                    More
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <div class="submenu megamenu__text">

                                    <?php
                                    //    echo count($this->getHeaderCategory);
                                    foreach ($this->getHeaderCategory as $cindex1 => $catData1) {
                                        if ($cindex1 <= 6) {
                                            continue;
                                        }
                                        // echo $catData1['name'].'<br/>';

                                    ?>


                                        <div class="submenu__inner">

                                            <ul class="submenu__list">
                                                <li><a href="#" class="border-bottom "><b><?= $catData1['name'] ?></b></a></li>
                                                <li><a href="#" class="shop-all">Shop All</a></li>
                                                <?php
                                                foreach ($catData1['subcategories'] as $scindex1 => $subcat) {
                                                ?>
                                                    <li><a href="#"><?= $subcat['name'] ?></a></li>
                                                <?php
                                                    if ($scindex1 == 6)
                                                        break;
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                       



                                    <?php
                                    }
                                    ?>
                                </div>
                            </li>-->
                                <!-- <li class="menu__item"><a href="<?= base_url('Home/Contactus') ?>" class="menu__link">Support</a></li> -->


                        </ul>
                    </div>
                </section>

                <section class="navbar__right navbar-right-bg">

                    <div class="box-40 next-menu d-none" id="next-menu">
                        <h4 class="mb-0">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </h4>
                    </div>
                </section>

            </nav>
        </header>


    </div>

</div>

<!-- //Mobile Header -->
<header id="headerMobile" class="header-area header-mobile sticky-top">
    <div class="header-maxi bg-header-bar pb-2">
        <div class="container-fluid pb-1">
            <div class="row align-items-center justify-content-between">
                <div class="col-1 ">
                    <div class="navigation-mobile-container">
                        <a href="javascript:void(0)" class="navigation-mobile-toggler" onclick="toggleStickyHeader()">
                            <i class="bi bi-list"></i>
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
                            <a class="main-manu btn" href="<?= base_url() ?>">
                                Home
                            </a>
                            <?php if (!empty($this->getTitleCategory)) {
                                $count = 1;
                                foreach ($this->getTitleCategory as $cindex => $category) {
                            ?>
                                    <a class="main-manu btn collapsed" data-toggle="collapse" href="#homepages<?= $count ?>" role="button" aria-expanded="false" aria-controls="shoppages">
                                        <?= $category['name'] ?>
                                    </a>
                                    <?php
                                    if (!empty($category['categoryTags'])) {

                                        foreach ($category['categoryTags'] as $tindex => $ctags) {
                                            if (!empty($ctags['subcategories'])) {
                                    ?>

                                                <div class="sub-manu collapse multi-collapse" id="homepages<?= $count ?>">
                                                    <ul class="unorder-list">
                                                        <!-- <li><b class="border-bottom"><a href="#"><?= $ctags['tag_name'] ?></a></b></li> -->
                                                        <li class="">
                                                            <?php
                                                            foreach ($ctags['subcategories'] as $scindex => $subcats) {
                                                            ?>
                                                                <a href="#" class="btn main-manu">
                                                                    <?= $subcats['name'] ?>
                                                                </a>
                                                            <?php
                                                            }
                                                            ?>

                                                        </li>
                                                    </ul>
                                                </div>
                            <?php 
                                            }
                                        }
                                    }
                                    $count++;
                                }
                                
                            } ?>

                            <!--  <?php if (!empty($this->getHeaderCategory)) {
                                        $count = 1;
                                        foreach ($this->getHeaderCategory as $category) {
                                            if ($count == 7) {
                                                break;
                                            }
                                    ?>
                                    <a class="main-manu btn collapsed" data-toggle="collapse" href="#homepages<?= $count ?>" role="button" aria-expanded="false" aria-controls="shoppages">
                                        <?= $category['name'] ?>
                                    </a>
                                    <div class="sub-manu collapse multi-collapse" id="homepages<?= $count ?>">
                                        <ul class="unorder-list">
                                            <li class="">
                                                <?php
                                                foreach ($category['subcategories'] as $subcats) {
                                                ?>
                                                    <a href="#" class="btn main-manu">
                                                        <?= $subcats['name'] ?>
                                                    </a>
                                                <?php
                                                }
                                                ?>
                                                <!-- <a href="<?= base_url('Home/Individual') ?>" class="btn main-manu">
                                                    Individual
                                                </a>
                                                <a href="<?= base_url('Home/ComboProduct') ?>" class="btn main-manu">
                                                    Combo
                                                </a> ->
                                            </li>
                                        </ul>
                                    </div>
                            <?php $count++;
                                        }
                                    } ?>-->
                            <?php
                            if ($this->permission == 'true') {
                            ?>
                                <a href="<?= base_url('Profile') ?>" class="main-manu btn ">
                                    Profile
                                </a>
                                <a href="<?= base_url('Wishlist') ?>" class="main-manu btn ">
                                    Wishlist (8)
                                </a>
                                <a href="<?= base_url('Compare') ?>" class="main-manu btn ">
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
                <div class="col-4 p-0">
                    <div class="logoBox d-flex">
                        <a href="<?php echo base_url(); ?>" class="logo">
                            <img class="img-fluid" src="<?= base_url('public') ?>/images/logo/logo.png" alt="logo here">
                        </a>
                    </div>
                </div>
                <div class="col-6 pl-0 d-flex justify-content-end align-items-center gap-3">

                    <div class="icon-header my-auto mx-1">
                        <a href="#" class="text-black hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-3 " id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cart" data-placement="bottom" style="text-decoration: none;">
                            <i class="bi bi-bell" style="font-size: 21px;"></i>
                            <span class="badge badge-secondary headercount-mobileheader">
                                0 </span>
                        </a>
                    </div>
                    <div class="icon-header my-auto mx-1">
                        <a href="#" class="text-black hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-3 " id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cart" data-placement="bottom" style="text-decoration: none;">
                            <i class="bi bi-heart" style="font-size: 21px;"></i>

                        </a>
                    </div>
                    <div class="icon-header my-auto mx-1">
                        <a href="#" class="text-black hvr-grow hoverHeaderIcons dropdown-toggle d-flex justify-content-center align-items-center gap-3 " id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Cart" data-placement="bottom" style="text-decoration: none;">
                            <i class="bi bi-cart hvr-grow" style="font-size: 21px;"></i>
                            <span class="badge badge-secondary headercount-mobileheader">
                                0 </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-2">
            <div class="col-12 bg-purple mobile-header-banner text-uppercase">
                <marquee width="100%" direction="left" class="text-white">
                    "Welcome to the Slick Pattern - The Next Generation of Pattern - All in one Products"
                </marquee>
            </div>
        </div>
        <div class="container-fluid mt-2">
            <!-- <div id="autocomplete"></div> -->
            <!-- <form class="d-flex justify-content-start align-items-center mobile-input-container search-container" style="background-color: #dfdcdc;">
                <i class="bi bi-search"></i>
                <input id="searchInput2" type="text" name="search" placeholder="Type to search" autocomplete="on" class="search-mobile">
                <div class="search-dropdown2 " id="searchDropdown2">
                    <div class="suggestions">
                        <p class="font-weight-bold mons-sans-bold">SUGGESTIONS</p>
                        <div><a class="category-sub-link ">Clothes Doctor <i class="site-search__cat">in womens</i></a>
                        </div>
                        <div><a class="category-sub-link">YFB CLOTHING <i class="site-search__cat">in womens</i></a></div>
                    </div>
                    <div class="recent-searches">
                        <p class="font-weight-bold mons-sans-bold">RECENT SEARCHES</p>
                        <div><a class="category-sub-link gap-2 d-flex"><i class="bi bi-clock-history"></i> Clothes Doctor </a>
                        </div>
                        <div><a class="category-sub-link gap-2 d-flex"><i class="bi bi-clock-history"></i> YFB CLOTHING </a></div>
                    </div>
                    <div class="related-products ">
                        <p class="font-weight-bold mons-sans-bold">RELATED PRODUCTS</p>
                        <div class="row mobile-search-js">
                            <a class="search-product zoomAnimation col" href="">
                                <img src="https://via.placeholder.com/50" alt="Product 1">
                                <div class="mt-1">
                                    <div class="text-nowrap">Yazime Dress</div>
                                    <span class="text-muted">YFB CLOTHING</span><br>
                                    <span class="text-danger">₹20,489.25</span>
                                </div>
                            </a>
                            <a class="search-product zoomAnimation col" href="">
                                <img src="https://via.placeholder.com/50" alt="Product 2">
                                <div class="mt-1">
                                    <div>Cedarwood And Vanilla Knitwear Mist</div>
                                    <span class="text-muted">Clothes
                                        Doctor</span><br>₹1,421.70
                                </div>
                            </a>
                            <!-- <a class="search-product zoomAnimation col" href="">
                <img src="https://via.placeholder.com/50" alt="Product 3">
                <div class="mt-1">
                  <div class="text-nowrap">Deodorizing Clothing Spritz</div>
                  <span class="text-muted">Clothes
                    Doctor</span><br>₹1,421.70
                </div>
              </a>
              <a class="search-product zoomAnimation col" href="">
                <img src="https://via.placeholder.com/50" alt="Product 1">
                <div class="mt-1">
                  <div class="text-nowrap">Yazime Dress</div>
                  <span class="text-muted">YFB CLOTHING</span><br>
                  <span class="text-danger">₹20,489.25</span>
                </div>
              </a>
              <a class="search-product zoomAnimation col" href="">
                <img src="https://via.placeholder.com/50" alt="Product 2">
                <div class="mt-1">
                  <div>Cedarwood And Vanilla Knitwear Mist</div>
                  <span class="text-muted">Clothes
                    Doctor</span><br>₹1,421.70
                </div>
              </a>
              <a class="search-product zoomAnimation col" href="">
                <img src="https://via.placeholder.com/50" alt="Product 3">
                <div class="mt-1">
                  <div class="text-nowrap">Deodorizing Clothing Spritz</div>
                  <span class="text-muted">Clothes
                    Doctor</span><br>₹1,421.70
                </div>
              </a> -->
                        </div>
                    </div>
                </div>
            </form> -->
        </div>
    </div>

</header>

<!-- registerModal Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document" id="modalwidth" style="max-width: 650px; margin: 1.75rem auto;">
        <div class="modal-content" style="max-height:450px; max-width: 650px;">
            <div class="modal-header">
                <h4 class="modal-title" id="registerModalLabel"><br>
                    <button type="button" class="close btn-md" data-dismiss="modal" aria-label="Close">
                        <!--<span aria-hidden="true">&times;</span>-->
                        <svg viewBox="0 0 24 24" class="css-1oql73n">
                            <title></title>
                            <path d="M20.6907 3.30935C20.5934 3.21133 20.4778 3.13352 20.3503 3.08043C20.2229 3.02734 20.0862 3 19.9481 3C19.8101 3 19.6734 3.02734 19.5459 3.08043C19.4185 3.13352 19.3028 3.21133 19.2056 3.30935L12 10.5254L4.79439 3.30935C4.69688 3.21184 4.58112 3.13449 4.45372 3.08172C4.32632 3.02895 4.18977 3.00178 4.05187 3.00178C3.91397 3.00178 3.77742 3.02895 3.65002 3.08172C3.52262 3.13449 3.40686 3.21184 3.30935 3.30935C3.11242 3.50628 3.00178 3.77337 3.00178 4.05187C3.00178 4.33037 3.11242 4.59746 3.30935 4.79439L10.5254 12L3.30935 19.2056C3.21133 19.3028 3.13352 19.4185 3.08043 19.5459C3.02734 19.6734 3 19.8101 3 19.9481C3 20.0862 3.02734 20.2229 3.08043 20.3503C3.13352 20.4778 3.21133 20.5934 3.30935 20.6907C3.40657 20.7887 3.52224 20.8665 3.64968 20.9196C3.77712 20.9727 3.91381 21 4.05187 21C4.18993 21 4.32662 20.9727 4.45406 20.9196C4.5815 20.8665 4.69717 20.7887 4.79439 20.6907L12 13.4746L19.2056 20.6907C19.3028 20.7887 19.4185 20.8665 19.5459 20.9196C19.6734 20.9727 19.8101 21 19.9481 21C20.0862 21 20.2229 20.9727 20.3503 20.9196C20.4778 20.8665 20.5934 20.7887 20.6907 20.6907C20.7887 20.5934 20.8665 20.4778 20.9196 20.3503C20.9727 20.2229 21 20.0862 21 19.9481C21 19.8101 20.9727 19.6734 20.9196 19.5459C20.8665 19.4185 20.7887 19.3028 20.6907 19.2056L13.4746 12L20.6907 4.79439C20.7887 4.69717 20.8665 4.5815 20.9196 4.45406C20.9727 4.32662 21 4.18993 21 4.05187C21 3.91381 20.9727 3.77712 20.9196 3.64968C20.8665 3.52224 20.7887 3.40657 20.6907 3.30935Z" fill="#001325" fill-opacity="0.92"></path>
                        </svg>
                    </button>
                </h4>
                <h4 class="modal-title" id="reghed" style="display:none">
                    <button type="button" class="close btn-md" data-dismiss="modal" aria-label="Close">
                        <!--<span aria-hidden="true">&times;</span>-->
                        <button onclick="backarrow()" class="btn">
                            <svg viewBox="0 0 24 24" class="css-1oql73n" id="backbtn">
                                <title></title>
                                <path d="M21.0005 11.0243L5.41829 11.0243L10.9255 5.66654C11.0192 5.57598 11.0936 5.46824 11.1443 5.34953C11.1951 5.23082 11.2212 5.1035 11.2212 4.9749C11.2212 4.84631 11.1951 4.71898 11.1443 4.60028C11.0936 4.48157 11.0192 4.37383 10.9255 4.28327C10.7383 4.10184 10.4849 4 10.2209 4C9.95684 4 9.70351 4.10184 9.51624 4.28327L2.29985 11.3068C2.20541 11.397 2.13028 11.5046 2.07881 11.6233C2.02733 11.742 2.00055 11.8695 2 11.9984C2.00055 12.1273 2.02733 12.2548 2.07881 12.3735C2.13028 12.4922 2.20541 12.5998 2.29985 12.69L9.50625 19.7135C9.69446 19.8969 9.94972 20 10.2159 20C10.4821 20 10.7373 19.8969 10.9255 19.7135C11.1137 19.5301 11.2195 19.2813 11.2195 19.0219C11.2195 18.7625 11.1137 18.5137 10.9255 18.3302L5.42829 12.9725L21.0005 12.9725C21.2656 12.9725 21.5198 12.8699 21.7073 12.6872C21.8947 12.5045 22 12.2568 22 11.9984C22 11.74 21.8947 11.4923 21.7073 11.3096C21.5198 11.1269 21.2656 11.0243 21.0005 11.0243Z" fill="#001325" fill-opacity="0.92"></path>
                            </svg>
                        </button>

                    </button>
                </h4>
                <button type="button" class="close btn-md" data-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url('assets/mobile.jpg') ?>" style="height: 80px;margin-top: 1rem;margin-right: -1rem;" />
                </button>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="reg">
                            <h5 style="color: rgb(25, 40, 55);">Login using mobile</h5>
                            <p style="color: rgb(25, 40, 55);font-size:13px">Kindly enter the 10-digit mobile number and
                                verify using OTP.</p>
                            <div class="form-group">
                                <div class="custom-form-group">
                                    <input type="number" id="mobile" placeholder="+91 XXXXXXXXXX" class="form-control" required>
                                    <label for="username" class="custom-label">Mobile Number</label>
                                </div>
                            </div>

                            <div class="form-group mt-2" id="refCodeDiv">
                                <div class="custom-form-group">
                                    <input type="text" class="form-control" id="ref_by" placeholder="Enter Referral Code (Optional)">
                                </div>
                            </div>

                            <button style="margin-top: 0px !important;" class="btn btn-secondary btn-block mb-2" onclick="registerUser()">SUBMIT</button>

                            <p style="color: rgba(0, 19, 37, 0.64);font-size: 12px;">By signing in, I agree to <a href="<?= base_url('Home/TermAndCondition') ?>">Terms & Conditions,</a> and <a href="<?= base_url('Home/PrivacyPolicy') ?>">Privacy Policy</a></p><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div id="regotp" style="display:none;">
                            <h4 style="color: rgb(25, 40, 55);">Verify OTP</h4>
                            <p style="color: rgb(25, 40, 55);">Enter the four digit OTP sent to</p>
                            <div class="form-group mb-4">
                                <div class="custom-form-group">
                                    <input type="text" class="form-control" id="otp" placeholder="Enter OTP">
                                </div>
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
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const searchInput2 = document.getElementById('searchInput2');

        const searchDropdown = document.getElementById('searchDropdown');
        const searchDropdown2 = document.getElementById('searchDropdown2');


        searchInput.addEventListener('focus', function() {
            searchDropdown.style.display = 'block';
        });
        searchInput2.addEventListener('focus', function() {
            searchDropdown2.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.search-container')) {
                searchDropdown.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.search-container')) {
                searchDropdown2.style.display = 'none';
                document.body.style.overflow = 'auto';


            }
        });

        searchInput.addEventListener('input', function() {
            if (window.innerWidth < 768) {
                searchDropdown.style.display = 'block';
            }
        });
        searchInput.addEventListener('input', function() {
            if (window.innerWidth < 768) {
                searchDropdown2.style.display = 'block';
            }
        });
    });

    function toggleStickyHeader() {
        var header = document.getElementById("stickyHeader");
        header.classList.toggle("d-none");
    }

    var placeholderTexts = ["Search items...", "Type to search", "Try searching for something"];

    // Function to update placeholder text
    function updatePlaceholder() {
        var input = document.getElementById("search");
        var randomIndex = Math.floor(Math.random() * placeholderTexts.length);
        input.placeholder = placeholderTexts[randomIndex];
    }

    // Initial call to update placeholder text
    updatePlaceholder();

    // Update placeholder text every 2 seconds
    setInterval(updatePlaceholder, 2000);



    function backarrow() {
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
            url: "<?= base_url('Home/register_user') ?>",
            data: {
                mobile: mobile,
                ref_by: ref_by
            },
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
            url: "<?= base_url('Home/verify_otp') ?>",
            data: {
                otp: otp,
                mobile: mobile
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    toastr.success(response.msg);


                    setTimeout(function() {
                        window.location.href = "<?= base_url('Home/Profile') ?>";
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

    // JavaScript
    document.getElementById("dropdownMenuButton").addEventListener("click", function(event) {
        event.preventDefault(); // Prevents the default action of the button
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>