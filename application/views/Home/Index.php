  <!DOCTYPE html>
  <html class="no-js" lang="zxx">

  <head>
    <meta charset="UTF-8">
    <title>Slick Pattern&nbsp;&minus;&nbsp;Home</title>
    <?php include('include/cssLinks.php'); ?>
    <!-- <link rel="stylesheet" href="<?= base_url('assets/website/css/home.css') ?>"> -->
  </head>

  <body>
    <!-- Header Section Start -->
    <?php include('include/header.php'); ?>
    <!-- Header Section End -->
    <!-- Revolution Layer Slider -->
    <div class="landpageCarousel-js prebook-row">
      <?php
      foreach ($sliders as $slider) {
        if (file_exists('./uploads/slider/' . $slider['image'])) {
      ?>

          <div class="landpage-img-container">
            <figure><img src="<?= base_url('uploads/slider/' . $slider['image']) ?>" alt="" class="img-fluid"></figure>
          </div>
      <?php
        }
      }
      ?>
      <!-- <div class="landpage-img-container">
        <figure><img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid"></figure>
      </div>
      <div class="landpage-img-container">
        <figure><img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid"></figure>
      </div> -->
    </div>

    <!-- advertisement  -->
    <section class="pro-content pro-tr-content testimonails-content">
      <div class="container-fluid">
        <div class="products-area ">
          <div class="row advertisement-container">
            <div class="col-12">
              <div class="tab-carousel-js-gift row">
                <div class="col-12">
                  <div class=" diff">
                    <figure>
                      <img src="https://img1.junaroad.com//assets/images/mobileNotif/img-1712748345399.jpg?crsl_pos=3" alt="" class="img-fluid advertisement-img">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class=" diff">
                    <figure>
                      <img src="https://img1.junaroad.com//assets/images/mobileNotif/img-1712748345399.jpg?crsl_pos=3" alt="" class="img-fluid advertisement-img">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class=" diff">
                    <figure>
                      <img src="https://img1.junaroad.com//assets/images/mobileNotif/img-1712748345399.jpg?crsl_pos=3" alt="" class="img-fluid advertisement-img">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--NEW SECTION START-->
    <section class="pro-content cart-content testimonails-content ">
      <div class="container">
        <div class="row justify-content-center elevateYourEssential prebook-row">
          <div class="col-12 col-lg-12">
            <div class="pro-heading-title">
              <h1> ELEVATE YOUR ESSENTIAL hdsbhj</h1>
              <p>Our one-stop destination for every style, trend, occasion you're shopping
              </p>
            </div>
          </div>
          <div class="col-12">

            <div class="row mt-3">
              <div class="col-md-12 col-lg-6 m-auto">

                <figure class="bundle-save">
                  <button id="elevate-plus-icon">+</button>
                  <button id="elevate-plus-icon2">+</button>
                  <button id="elevate-plus-icon3">+</button>
                  <img src="https://i.pinimg.com/564x/92/25/46/922546fb3b8856658b1c958662c574b8.jpg" alt="" class="img-fluid">
                </figure>
              </div>

              <div class="col-md-12 col-lg-6 m-auto">
                <p class="shop-this-look">SHOP THIS LOOK</p>
                <h5 class="bundle-save-title">BUNDLE & SAVE
                </h5>

                <div class="cart-desktop-view">
                  <div class="m-2">
                    <div class="single-cart-item">
                      <div class="my-auto">
                        <span class="single-cart-item-sequence">1</span>
                      </div>
                      <div class="my-auto">
                        <img class="lazy productImage" src="<?= base_url('public/') ?>images/product_images/product_image_02.jpg" alt="Product Image" height="117px !important" />
                      </div>

                      <div class="single-cart-item-dec">
                        <div class="item-detail">
                          <div class="pro-title">
                            <a href="<?= base_url('Home/ProductDetails') ?>" class="text-nowrap" style="text-decoration: none" ;>
                              Crystal Water Drop Earrings
                            </a>
                          </div>

                          <div class="item-attributes"></div>
                          <div class="item-controls">
                            <select class="form-control rounded-0" style="font-size: 12px;">
                              <option class="">Select your size </option>
                              <option>XL</option>
                              <option>XL</option>
                              <option>XL</option>
                              <option>XL</option>
                            </select>
                          </div>

                        </div>
                        <div class="djasd">
                          <div class=" my-auto ">
                            <div class="item-price">₹340</div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="m-2">
                    <div class="single-cart-item">
                      <div class="my-auto">
                        <span class="single-cart-item-sequence">2</span>
                      </div>
                      <div class="my-auto">
                        <img class="lazy productImage" src="<?= base_url('public/') ?>images/product_images/product_image_02.jpg" alt="Product Image" height="117px !important" />
                      </div>

                      <div class="single-cart-item-dec">
                        <div class="item-detail">
                          <div class="pro-title">
                            <a href="<?= base_url('Home/ProductDetails') ?>" class="text-nowrap" style="text-decoration: none" ;>
                              Crystal Water Drop Earrings
                            </a>
                          </div>

                          <div class="item-attributes"></div>
                          <div class="item-controls">
                            <select class="form-control rounded-0" style="font-size: 12px;">
                              <option class="">Select your size </option>
                              <option>XL</option>
                              <option>XL</option>
                              <option>XL</option>
                              <option>XL</option>
                            </select>
                          </div>

                        </div>
                        <div class="djasd">
                          <div class=" my-auto ">
                            <div class="item-price">₹340</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="" class="btn add-to-cart d-flex top-table rounded-0">Add to Bag | ₹500</a>
                  </div>
                </div>
                <div class="card-mobile-view  d-block d-md-none">
                  <div class="cart-slick-js row">
                    <div class="col-12 ">
                      <div class="single-cart-item">
                        <div class="my-auto">
                          <span class="single-cart-item-sequence">1</span>
                        </div>
                        <div class="my-auto">
                          <img class="lazy productImage" src="<?= base_url('public/') ?>images/product_images/product_image_02.jpg" alt="Product Image" height="117px !important" />
                        </div>

                        <div class="single-cart-item-dec">
                          <div class="item-detail">
                            <div class="pro-title">
                              <a href="<?= base_url('Home/ProductDetails') ?>" class="text-nowrap" style="text-decoration: none" ;>
                                Crystal Water Drop Earrings
                              </a>
                            </div>

                            <div class="item-attributes"></div>
                            <div class="item-controls">
                              <select class="form-control rounded-0" style="font-size: 12px;">
                                <option class="">Select your size </option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="single-cart-item">
                        <div class="my-auto">
                          <span class="single-cart-item-sequence">2</span>
                        </div>
                        <div class="my-auto">
                          <img class="lazy productImage" src="<?= base_url('public/') ?>images/product_images/product_image_02.jpg" alt="Product Image" height="117px !important" />
                        </div>

                        <div class="single-cart-item-dec">
                          <div class="item-detail">
                            <div class="pro-title">
                              <a href="<?= base_url('Home/ProductDetails') ?>" class="text-nowrap" style="text-decoration: none" ;>
                                Crystal Water Drop Earrings
                              </a>
                            </div>

                            <div class="item-attributes"></div>
                            <div class="item-controls">
                              <select class="form-control rounded-0" style="font-size: 12px;">
                                <option class="">Select your size </option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                              </select>
                            </div>

                          </div>

                        </div>
                      </div>

                    </div>
                    <div class="col-12 ">
                      <div class="single-cart-item">
                        <div class="my-auto">
                          <span class="single-cart-item-sequence">3</span>
                        </div>
                        <div class="my-auto">
                          <img class="lazy productImage" src="<?= base_url('public/') ?>images/product_images/product_image_02.jpg" alt="Product Image" height="117px !important" />
                        </div>

                        <div class="single-cart-item-dec">
                          <div class="item-detail">
                            <div class="pro-title">
                              <a href="<?= base_url('Home/ProductDetails') ?>" class="text-nowrap" style="text-decoration: none" ;>
                                Crystal Water Drop Earrings
                              </a>
                            </div>

                            <div class="item-attributes"></div>
                            <div class="item-controls">
                              <select class="form-control rounded-0" style="font-size: 12px;">
                                <option class="">Select your size </option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                                <option>XL</option>
                              </select>
                            </div>

                          </div>

                        </div>
                      </div>

                    </div>
                  </div>
                  <a href="" class="btn add-to-cart d-flex top-table rounded-0">Add to Bag | ₹500</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pro-content pro-plr-content mb-0 pb-0">
      <div class="container-fluid">
        <div class="products-area" style="margin-bottom:-30px;">
          <div class="row m-0 justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2>Welcome to Store</h2>
                <p>Our one-stop destination for every style, trend, occasion you're shopping
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center welcomeToStore-js prebook-row" data-itemmobile="1.2" data-item="4.1">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="">
                <figure class="banner-image">
                  <a href="#"><img class="img-fluid lazy bannerimgs " data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" src="<?= $this->data->lazyLoader; ?>" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class="fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>

            </div>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="">
                <figure class="banner-image">
                  <a href="#"><img class="img-fluid lazy bannerimgs " src="<?= $this->data->lazyLoader; ?>" data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class=" fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="last">
                <figure class="banner-image">
                  <a href="#"> <img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader; ?>" data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class="fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="last">
                <figure class="banner-image">
                  <a href="#"> <img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader; ?>" data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class="fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="last">
                <figure class="banner-image">
                  <a href="#"> <img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader; ?>" data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class="fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="last">
                <figure class="banner-image">
                  <a href="#"> <img class="img-fluid lazy bannerimgs" src="<?= $this->data->lazyLoader; ?>" data-src="https://images-static.nykaa.com/uploads/02e4f5f1-1087-4851-81df-99b6aa093b62.jpg?tr=w-240,cm-pad_resize" alt="Banner Image"></a>
                  <figcaption class="figure-caption-store">
                    <p class="text-white">Casually Wear <br><span class="fw-bold">Min.50%off</span></p>
                    <div></div>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Special Offer -->
    <section class="pro-content pro-tr-content testimonails-content ">
      <div class="container-fluid">
        <div class="products-area ">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2 class="text-uppercase">Gift Wrapping
                </h2>
                <p>Morbi venenatis felis tempus feugiat maximus.</p>
              </div>
            </div>
          </div>
          <div class="row prebook-row">
            <div class="col-12 col-log-6 col-sm-6 col-md-6">
              <div class="tab-carousel-js-gift row" data-item="2.01" data-itemmobile="1.03">

                <div class="col-6  col-lg-3">
                  <div class="product diff">
                    <article>
                      <div class="pro-thumb diff2  giftpack">
                        <div class="pro-tag">Sale</div>

                        <a href="<?php echo  base_url('Home/ProductDetails') ?>">
                          <span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;" src="<?= $this->data->lazyLoader; ?>" data-src="https://images.unsplash.com/photo-1577042939454-8b29d442b402?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image"></span>
                        </a>
                      </div>

                      <div class="pro-description text-center">
                        <a href="https://images.unsplash.com/photo-1577042939454-8b29d442b402?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="pro-info text-center">
                          Earrings
                        </a>
                      </div>
                    </article>
                  </div>
                </div>

                <div class="col-6  col-lg-3">
                  <div class="product diff">
                    <article>
                      <div class="pro-thumb diff2 giftpack">
                        <div class="pro-tag">Sale</div>
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>">
                          <span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;" data-src="https://images.unsplash.com/photo-1577042939454-8b29d442b402?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" src="<?= $this->data->lazyLoader; ?>" alt="Product Image"></span>
                        </a>
                      </div>
                      <div class="pro-description text-center">
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>" class="pro-info text-center">
                          Ring1
                        </a>
                      </div>

                    </article>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="product diff">
                    <article>
                      <div class="pro-thumb  diff2 giftpack">
                        <div class="pro-tag">Sale</div>
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>">
                          <span class="pro-image"><img class="img-fluid giftpackimg lazy" style="height: 310px!important;" data-src="https://images.unsplash.com/photo-1577042939454-8b29d442b402?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image"></span>
                        </a>
                      </div>
                      <div class="pro-description text-center">
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>" class="pro-info text-center">
                          Bangle
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="product diff">
                    <article>
                      <div class="pro-thumb diff2 giftpack">
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>">
                          <span class="pro-image"><img class="img-fluid giftpackimg" style="height: 310px!important;" src="https://images.unsplash.com/photo-1577042939454-8b29d442b402?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image"></span>
                        </a>
                        <div class="pro-tag">Sale</div>
                      </div>
                      <div class="pro-description text-center">
                        <a href="<?php echo  base_url('Home/ProductDetails') ?>" class="pro-info text-center">
                          Bracelet
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-log-6 col-sm-6 col-md-6 text-center">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/-9r7ezjl1us?si=C8dcG0R_u1wMQj4V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- product Section  Start -->
    <!-- Products Tabs -->
    <section class="pro-content pro-tab-content" style="padding-bottom: 25px;">
      <div class="container-fluid">
        <div class="products-area prebook-row">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2 class="text-uppercase"> New and core collection</h2>
                <p>Our one-stop destination for every style, trend, occasion you're shopping
                </p>
              </div>

              <div class="mobile-header-shop">
                <h2 class="header-section-header__title">Shop the Look 1</h2>
                <h4 class="header-section-header__subtitle">Hand to Toe Deals</h4>
              </div>
            </div>
          </div>
          <div class="">
            <div class="js-newCore-items-slider-container">
              <div class="slider slider-for">
                <div class="newCoreCollection d-flex">
                  <figure class="image-box">
                    <img src="https://www.linoperros.com/cdn/shop/files/Untitled_design_11.jpg?v=1712835708&width=1000" alt="">
                  </figure>
                  <div class="content-box">
                    <h2 class="section-header__title">Shop the Look 1</h2>
                    <h4 class="section-header__subtitle">Hand to Toe Deals</h4>
                    <div class="row">
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newCoreCollection d-flex">
                  <figure class="image-box">
                    <img src="https://www.linoperros.com/cdn/shop/files/IMG_1095.jpg?v=1710158831&width=1000" alt="" class="newCoreCollectionNav" alt="">
                  </figure>
                  <div class="content-box">
                    <h2 class="section-header__title">Shop the Look 2</h2>
                    <h4 class="section-header__subtitle">Hand to Toe Deals</h4>
                    <div class="row">
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newCoreCollection d-flex">
                  <figure class="image-box">
                    <img src="https://www.linoperros.com/cdn/shop/files/IMG_1282.jpg?v=1710158831&width=1000" alt="">
                  </figure>
                  <div class="content-box">
                    <h2 class="section-header__title">Shop the Look 3</h2>
                    <h4 class="section-header__subtitle">Hand to Toe Deals</h4>
                    <div class="row">
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newCoreCollection d-flex">
                  <figure class="image-box">
                    <img src="https://www.linoperros.com/cdn/shop/files/IMG_1895.jpg?v=1710158831&width=1000" alt="">
                  </figure>
                  <div class="content-box">
                    <h2 class="section-header__title">Shop the Look 4</h2>
                    <h4 class="section-header__subtitle">Hand to Toe Deals</h4>
                    <div class="row">
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                      <div class="col-6">
                        <img src="https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="w-100">
                        <figcaption>
                          <div class="grid-product__title grid-product__title--body">
                            Ava Casual Chain Loafers
                          </div>
                        </figcaption>
                        <div class="grid-product__price"><span class="bolder">₹ 1,998</span><span class="visually-hidden">Regular price</span>
                          <span class="grid-product__price--original">₹ 4,995</span>
                          <span class="visually-hidden">Sale price</span><span class="grid-product__price--savings">
                            (60% OFF)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider slider-nav">
                <div>
                  <img src="https://www.linoperros.com/cdn/shop/files/Untitled_design_11.jpg?v=1712835708&width=1000" alt="" class="newCoreCollectionNav">
                </div>
                <div>
                  <img src="https://www.linoperros.com/cdn/shop/files/IMG_1095.jpg?v=1710158831&width=1000" alt="" class="newCoreCollectionNav">
                </div>
                <div><img src="https://www.linoperros.com/cdn/shop/files/IMG_1269.jpg?v=1710158831&width=1000" alt="" class="newCoreCollectionNav">
                </div>
                <div><img src="https://www.linoperros.com/cdn/shop/files/IMG_1282.jpg?v=1710158831&width=1000" alt="" class="newCoreCollectionNav">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--Zoom Image -->
    <section class="pro-content pro-tab-content mb-0">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
            <div class="pro-heading-title">
              <h2 class="text-uppercase">Offers
              </h2>
              <p>Morbi venenatis felis tempus feugiat maximus.</p>
            </div>
          </div>
        </div>
        <div class="row prebook-row">
          <div class="col-sm-12 col-lg-6">
            <div class="img-box position-relative">
              <div class="image-card__content d-flex position-absolute p-4  inset-0 align-items-start justify-content-start" style=" z-index: 10;">
                <div class="image__card-heading-group">
                  <h3 class="image__card-heading text-white mb-4" style="font-size: calc(1.5rem + 1vw);">
                    THE FORMAL <br>EDIT
                  </h3>
                  <a href="" class="rounded-0  whiteBtnBlackText btn-light">SHOP NOW</a>
                </div>

              </div>
              <div class="imgback" style="background-image: url('https://chere.in/cdn/shop/files/03_Banner_650_x_587_650x.jpg?v=1680344546');">
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6">
            <div class="img-box position-relative">
              <div class="image-card__content d-flex position-absolute p-4  inset-0 align-items-start justify-content-start" style=" z-index: 10;">
                <div class="image__card-heading-group">
                  <h3 class="image__card-heading text-white mb-4" style="font-size: calc(1.5rem + 1vw);">
                    THE FORMAL <br>EDIT
                  </h3>
                  <a href="" class="rounded-0  whiteBtnBlackText btn-light">SHOP NOW</a>
                </div>
              </div>
              <div class="imgback" style="background-image: url('https://chere.in/cdn/shop/files/04_Banner_650_x_587_650x.jpg?v=1680344553');">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- combos -->
    <section class="pro-content pro-tab-content">
      <div class="container-fluid prebook-row">
        <div class="pro-heading-title">
          <h2 class="text-uppercase"> Our Combo's</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteee.</p>
        </div>
        <figure class="text-center">
          <img src="https://img.freepik.com/free-photo/shopping-concept-close-up-portrait-young-beautiful-attractive-redhair-girl-smiling-looking-camera_1258-123899.jpg?t=st=1716616165~exp=1716619765~hmac=a1aff9a3c874aab8bdffc18e06ff3346fc7a33aec421f997bfaffc721d46ac30&w=1380" class="w-100">
        </figure>
        <div class="welcomeToStore-js row prebook-row" data-item="5.1" data-itemmobile="2.5">
          <?php
          $cnt = 0;
          $limit = 8;
          while ($cnt < $limit) {
          ?>
            <div class="col-12 col-md-4 col-lg-3 combos-col me-2">
              <div class="">
                <figure class="banner-image">
                  <a href="#"><img class="img-fluid lazy bannerimgs " src="https://img.freepik.com/free-photo/portrait-handsome-smiling-stylish-young-man-model-dressed-blue-shirt-clothes-fashion-man-posing_158538-4913.jpg?t=st=1715930765~exp=1715934365~hmac=31d2b713e69f5277903cfac3c2d63473fa89d6ea6e4b5d8554c1a3bf268be9cb&w=740"" alt=" Banner Image"></a>
                  <figcaption class="mt-1">
                    <p class="">Shirt</p>
                  </figcaption>
                </figure>
              </div>

            </div>
          <?php $cnt++;
          }
          ?>
        </div>
    </section>

    <!--Zoom Image End-->
    <section class="pro-content pro-tab-content m-0 p-0" style="padding-bottom: 0px;">
      <div class="container-fluid">
        <div class="products-area">

          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2 class="text-uppercase"> Our Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteee.</p>
              </div>
            </div>
          </div>

          <!-- Desktop Carousel -->
          <div class="row prebook-row">
            <?php
            $cnt = 0;
            $limit = 4;
            while ($cnt < $limit) { ?>
              <div class="col-md-3 col-sm-12 ourProducts-col">

                <h2 class="fs-6 fw-bold">Deal of the day</h2>
                <div class="d-flex gap-2">
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_2_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_3_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                </div>

                <div class="d-flex gap-2">
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_2_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_3_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                </div>

                <a href="#" class="explore-more-btn">Explore More</a>
              </div>
            <?php $cnt++;
            } ?>
          </div>
          <!-- Mobile Carousel -->
          <div class="d-block d-md-none welcomeToStore-js row" data-itemmobile="1" data-item="4">
            <?php
            $cnt = 0;
            while ($cnt < $limit) { ?>
              <div class="col-12 ourProducts-col-mob">
                <h2 class="fs-6 fw-bold">Deal of the day</h2>
                <div class="d-flex gap-2">
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_2_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_3_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                </div>
                <div class="d-flex gap-2">
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_2_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                  <a href="#" class="product-container">
                    <figure>
                      <img src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2023/LuxuryStores/Spring-23/GW/Quad_Cards/Spring/LSS23_SPRING_DT_CAT_CARD_3_x1._SY116_CB595261253_.jpg" class="img-fluid" alt="">

                    </figure>
                  </a>
                </div>
                <a href="#" class="explore-more-btn">Explore More</a>
              </div>
            <?php $cnt++;
            } ?>
          </div>
        </div>
      </div>
    </section>

    <section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
      <div class="container-fluid" style="padding: 18px;">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
            <div class="pro-heading-title">
              <h2 class="text-uppercase"> Latest collections </h2>
              <p>Introducing our newest collection</p>
            </div>
          </div>
        </div>

        <div class="row welcomeToStore-js prebook-row" data-item="5.5" data-itemmobile="2.5">
          <?php
          $cnt = 0;
          $limit = 6;
          while ($cnt < $limit) { ?>
            <div class="col-12 col-md-4 col-lg-3">
              <div class="">
                <figure class="banner-image product m-0">
                  <a href="#"><img class="img-fluid lazy bannerimgs " src="https://is4.revolveassets.com/images/p4/n/tv/HLSA-WD86_V1.jpg"></a>
                  <figcaption class="mt-1">
                    <div class="grid-product__title grid-product__title--bodyme">The Amber Dress</div>
                    <div class="product-brand">Helsa</div>
                    <div class="grid-product__price m-0">
                      <span class="">₹24,849.18</span>
                    </div>

                    <div></div>
                  </figcaption>
                </figure>
              </div>

            </div>

          <?php $cnt++;
          } ?>
        </div>
      </div>
    </section>

    <!-- Special Offer -->
    <?php
    $sr = 1;
    if (!empty($prebooklist)) {
    ?>
      <section class="pro-content pro-tr-content " style="padding-bottom: 0px;">
        <div class="container-fluid">
          <div class="products-area ">
            <?php
            $count = 0;
            foreach ($prebooklist as $each) {
              $current_time = date('Y-m-d h:i');
              if ($this->subscription == 'true') {
                $day_limit = $this->db->get_where('manage_content')->row();
                $prev_days = "-" . $day_limit->royal_feature_activated_limit . " day";
                $launch_time = date('Y-m-d h:i', strtotime($prev_days, strtotime($each->launch_time)));
              } else {
                $launch_time = date('Y-m-d h:i', strtotime($each->launch_time));
              }
              if ($current_time >= $launch_time) {
                $count++;
                if ($count == 1) {
            ?>
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                      <div class="pro-heading-title">
                        <h2>Pre Book
                        </h2>
                        <p>Morbi venenatis felis tempus feugiat maximus.</p>
                      </div>
                    </div>
                  </div>
            <?php  }
              }
            } ?>
            <div class="row prebook-row">
              <div class="col-md-6">
                <figure class="position-relative">
                  <h2 class="position-absolute top-50 start-50 translate-middle text-center newarrivals-textaboveimg">
                    <span class="story-hero__hed-number">515</span> New Arrivals
                  </h2>

                  <img src="https://is4.revolveassets.com/images/up/2024/May/050424_f_na_1x.jpg" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="col-md-6">
                <figure>
                  <h2 class="prebookHeading">
                    <span class="story-hero__hed-number text-nowrap">Dresses To</span> Preorder now
                  </h2>
                  <img src="https://is4.revolveassets.com/images/up/2024/May/051624_f_longweekend_02.jpg" alt="" class="img-fluid">
                </figure>
              </div>
            </div>

            <div class="products mb-3 prebook-row">
              <div class="welcomeToStore-js row" data-item="5.1" data-itemmobile="2.5">
                <?php
                foreach ($prebooklist as $each) {
                  $Variants = $this->db->get_where('product_variant', array('product_id' => $each->id, 'is_status' => 'true'))->result();
                  if (!empty($Variants)) {
                    foreach ($Variants as $Variant) {
                      if (!empty($Variant->variant_img)) {
                        $icons = explode(',', $Variant->variant_img);
                      } else {
                        $icons = explode(',', $each->image1);
                      }
                      $current_time = date('Y-m-d h:i');
                      $launch_time = date('Y-m-d h:i', strtotime($each->launch_time));
                      if ($current_time >= $launch_time) {
                        $date_difference = date_diff(date_create($current_time), date_create($launch_time));
                        $days = $date_difference->format('%r%a');
                        $hour = $date_difference->format('%r%h');
                        $min = $date_difference->format('%r%i');
                        $timer = $days . "D" . $hour . "H" . $min . "M";
                ?>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-3 tile-view-card">
                          <div class="product product-7 text-center ">
                            <form action="<?php echo base_url($this->data->controller . '/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
                              <figure class="product-media">
                                <a href="<?php echo  base_url('Home/Prebooking/') . $each->id . '/' . $Variant->id ?>">
                                  <img src="<?php if (!empty($icons[0]) &&  file_exists('./uploads/product/' . $icons[0])) {
                                              echo base_url('uploads/product/') . $icons[0];
                                            } ?>" class="product-image  ">
                                  <img src="<?php if (!empty($icons[1]) &&  file_exists('./uploads/product/' . $icons[1])) {
                                              echo base_url('uploads/product/') . $icons[1];
                                            } ?>" class="product-image-hover">
                                </a>

                                <?php if (!empty($timer)) {
                                ?>

                                <?php } ?>
                              </figure>
                              <div class="product-body">
                                <h2 class="product-title">
                                  <a href="your_link_here">Armani</a>
                                </h2>
                                <div class="product-cat">
                                  <a href="your_link_here">Gossamer Grace</a>
                                </div>


                                <div class="d-flex align-items-center flex-column" style="margin-top: 20px;">
                                  <a class="mb-0 d-flex  prebook-btn">
                                    Pre-Order</a>
                                </div>
                              </div>
                            </form>
                          </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-4 -->
                <?php
                      }
                    }
                  }
                  $sr++;
                }
                ?>
              </div><!-- End .row -->
            </div><!-- End .products -->
          </div>
        </div>
      </section>
    <?php }  ?>
    <!-- Products Tabs -->

    <!-- lookbook -->
    <section class="pro-content pro-tab-content mt-0 pt-0" style="padding-bottom: 0px;">
      <div class="container-fluid" style="padding: 18px;">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
            <div class="pro-heading-title">
              <h2 class="text-uppercase"> DOWNLOAD LOOKBOOK </h2>
              <p> Warning: Serious Style Inspiration Ahead!</p>
            </div>
          </div>
        </div>

        <div class="welcomeToStore-js row prebook-row" data-item="5.5" data-itemmobile="2.7">

          <?php
          $cnt = 0;
          $limit = 6;
          while ($cnt < $limit) { ?>
            <div class="col-12 col-md-4 col-lg-3 product">
              <div class="">
                <figure class="banner-image">
                  <a href="#"><img class="img-fluid lazy bannerimgs " src="https://cdn.shopify.com/s/files/1/0106/4897/7444/files/02_01.jpg?v=1634485608"></a>
                  <figcaption class="mt-1 position-relative">
                    <a href="https://www.clickdimensions.com/links/TestPDFfile.pdf" target="_blank">
                      <div class="click-to-button position-absolute top-100 start-50 translate-middle d-flex gap-2 text-black text-nowrap align-items-center justify-content-center">
                        Brocher Name<i class="fa-solid fa-download download-icon"></i>
                      </div>
                    </a>
                  </figcaption>
                </figure>
              </div>
            </div>
          <?php $cnt++;
          } ?>
        </div>
      </div>
    </section>

    <!-- new on slick pattern -->
    <section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
      <div class="container-fluid">
        <div class="products-area">

          <div class=" justify-content-center ">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2> New on Slick Pattern</h2>
                <p>Our one-stop destination for every style, trend, occasion you're shopping
                </p>
              </div>
            </div>
          </div>
          <!-- desktop view -->
          <div class="row prebook-row newOnSlick-col">
            <?php
            $cnt = 0;
            $limit = 6;
            while ($cnt < $limit) { ?>
              <div class="col-12 col-md-4">
                <figure class="newOn_sp">
                  <h3 class="mb-2 fs-6 text-center text-uppercase fw-bold">Weekend Style</h3>
                  <img src="https://is4.revolveassets.com/images/up/2024/May/051824_f_shops_weekendstyles.jpg" alt="" class="img-fluid">
                  <figcaption class="story-hero__cta">Shop Now</figcaption>
                </figure>
              </div>
            <?php $cnt++;
            } ?>
          </div>

          <!-- Carousel for mobile view -->
          <div class="d-block d-md-none welcomeToStore-js row" data-itemmobile="1.4" data-item="4">
            <?php
            $cnt = 0;
            while ($cnt < $limit) { ?>
              <div class="newOnSLick-col-mob">
                <figure class="newOn_sp">
                  <h3 class="mb-2 fs-6 text-center text-uppercase fw-bold">Weekend Style</h3>
                  <img src="https://is4.revolveassets.com/images/up/2024/May/051824_f_shops_weekendstyles.jpg" alt="" class="img-fluid">
                  <figcaption class="story-hero__cta">Shop Now</figcaption>
                </figure>
              </div>
            <?php $cnt++;
            } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Our story -->
    <section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
      <div class="container-fluid">
        <div class="products-area">
          <div class="row prebook-row">
            <figure class="position-relative">
              <div class="position-absolute sf-hero__content">
                <span class=" text-white sf-hero__subtitle">BRAND STORY</span>
                <h2 class="sf-hero__title text-white">Launched in 2006, Vanilla Moon is an ode to quality and
                  craftsmanship.</h2>
                <div class="sf-hero__text ">
                  <span class="text-white lh-md">Our vision is to provide luxury yet affordable footwear to modern women
                    while
                    paving the way for
                    sustainability and social consciousness.</span>
                </div>
                <div><a href="" class="sf-btn">Learn more</a></div>
              </div>
              <img src="https://vanillamoon.in/cdn/shop/files/Dance-Naturals-36_2x_b236e382-3012-4b63-acad-fb9671faff28_1950x.png?v=1644582502" alt="" class="img-fluid brand-img">
            </figure>
          </div>
        </div>
      </div>
    </section>


    <!-- Our Clients  Start-->
    <section class="pro-content pro-tab-content " style="padding-bottom: 0px;">
      <div class="container-fluid">
        <div class="products-area">

          <div class="row justify-content-center ">
            <div class="col-12 col-lg-12">
              <div class="pro-heading-title">
                <h2> OUR CLIENTS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, impedit itaque
                </p>
              </div>
            </div>
          </div>
          <!-- ..........tabs start ......... -->
          <div class="welcomeToStore-js row prebook-row" data-item="5.5" data-itemmobile="1.5">
            <?php
            $cnt = 0;
            $limit = 6;
            while ($cnt < $limit) { ?>
              <div class="col-12 col-md-4 col-lg-3 ">
                <figure class="clientInstaFigureContainer">
                  <div class="position-relative">
                    <a href="" class="">
                      <figcaption class="videoViews">
                        <i class="fa-solid fa-eye"></i>
                        <div class="">2L</div>

                      </figcaption>
                      <video id="clientVideo" height="100%" width="100%" muted autoplay loop class="product m-0">
                        <source src="<?= base_url('public/uploads/sample.mp4') ?>" type="video/mp4">
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
            <?php $cnt++;
            } ?>
          </div>
        </div>
    </section>
    <!-- Our Clients  End-->
    <!-- Our Clients  End-->


    <!-- Our Promises -->
    <section class="pro-content testimonails-content" style="padding-bottom:10px;">

      <div class="container">
        <!-- heading -->

        <div class="row justify-content-center">
          <div class="col-12 col-lg-12 mb-4">
            <div class="pro-heading-title">
              <h2> Our Promise
              </h2>
              <p>Vitae posuere urna blandit sed. Praesent ut dignissim risus. </p>
            </div>
          </div>

          <div class="promise-row row">
            <div class="col-4 text-center">
              <figure>
                <div class=""><img class=" lazy promise-img" src="<?= base_url('public/images/promise/checkoutCart.png') ?>" alt="" style="width: 18%;"></div>
                <figcaption class="text-uppercase mt-2 fw-bold">A Look you love</figcaption>
              </figure>
            </div>
            <div class="col-4 text-center">
              <img class="img-fluid  lazy promise-img" src="<?= base_url('public/images/promise/return.png') ?>" alt="" style="width: 18%;">
              <figcaption class="text-uppercase mt-2 fw-bold">Easy Return</figcaption>

            </div>
            <div class="col-4 text-center">
              <img class="img-fluid  lazy promise-img" src="<?= base_url('public/images/promise/fast-delivery.png') ?>" alt="" style="width: 18%;">
              <figcaption class="text-uppercase mt-2 fw-bold ">Speedy delivery</figcaption>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">

      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <div class="row ">
                    <div id="quickViewCarousel" class="carousel slide" data-ride="carousel">
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">

                          <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_01.jpg" alt="image">
                        </div>
                        <div class="carousel-item">

                          <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_02.jpg" alt="image">
                        </div>
                        <div class="carousel-item">

                          <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_03.jpg" alt="image">
                        </div>
                        <div class="carousel-item">

                          <img class="img-fluid lazy" src="<?= base_url('public') ?>/images/gallery_demo_2/preview/Product_image_04.jpg" alt="image">
                        </div>
                      </div>
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#quickViewCarousel" data-slide="prev">
                        <span class="fas fa-angle-left "></span>
                      </a>
                      <a class="carousel-control-next" href="#quickViewCarousel" data-slide="next">
                        <span class="fas fa-angle-right "></span>
                      </a>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="pro-description">
                    <h2 class="pro-title">Teclast X22 Air LCD Screen </h2>

                    <div class="pro-price">
                      <ins>₹1100</ins>
                    </div>

                    <div class="pro-infos">
                      <div class="pro-single-info"><b>Product ID :</b>1004</div>
                      <div class="pro-single-info"><b>Categroy :</b><a href="#">Slim LCD Touch Screen</a></div>
                      <div class="pro-single-info">
                        <b>Tags :</b>
                        <ul>
                          <li><a href="#">LCD</a></li>
                          <li><a href="#">Monitor</a></li>
                          <li><a href="#">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>
                    </div>

                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <div class="pro-counter">
                      <div class="input-group item-quantity">

                        <input type="text" id="quantity1" name="quantity" class="form-control quantity " value="10">

                        <span class="input-group-btn">
                          <button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
                            <i class="fas fa-plus"></i>
                          </button>
                          <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
                            <i class="fas fa-minus"></i>
                          </button>
                        </span>
                      </div>
                      <button type="button" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <style>
      #qnabody .card {
        border: 0px !important;
      }
    </style>
    <!-- Footer Section Start  And Back To top -->
    <?php include('include/footer.php'); ?>
    <!-- Footer Section End -->

    <style>
      .parent-round-gender {
        width: 100px;
        height: 100px;
        margin-left: 15px;
        margin-right: 15px;
        display: inline-block;
        background-color: rgb(203, 203, 203);
        border-radius: 50%;
      }

      .round male {
        height: 100px;
        width: 100px;
      }

      #QuestionAnsModal #qnabody card {
        border: 0px;
      }

      .circleimg {
        border-radius: 50% !important;
        height: 80px !important;
        width: 80px !important;
        border: 1px solid black;
        text-align: center !important;
      }

      .circle-img {
        border-radius: 50%;
      }
    </style>


    <!-- Question Ans Modal -->
    <div class="modal fade" id="QuestionAnsModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-secondary text-white" style="border: 0px;">
            <h5 class="modal-title" id="staticBackdropLabel">Style Quiz</h5>
            <button type="button" onclick="CloseQuizModal()" class="close" aria-label="Close">
              <span aria-hidden="true" class="text-white">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="qnabody">
            <!--div class="row">
                <div class="col-sm-12">
                <p>I describe myself as</p>  
                <div class="gender" style="text-align:center">
                
                <div class="parent-round-gender">
                <a href="javascript:void(0)" onclick="getSkinTone('male')"><div class="round male" data="male" data-name="gender" style="background-image:url('https://elanstreet.com/skin/frontend/base/default/stylequiz/images/man.png'); height:110px; width:110px" rel="1"></div></a>
                </div>
                <div class="parent-round-gender">
                <a href="javascript:void(0)" onclick="getSkinTone('female')" ><div class="round female" data="male" data-name="gender" style="background-image:url('https://elanstreet.com/skin/frontend/base/default/stylequiz/images/woman.png'); height: 110px;width:110px" rel="2"></div></a>
                </div>
                </div>
                
                </div>	
              </div-->

            <div class="row">
              <div class="col-sm-12">
                <p>What is your skin tone?</p>
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="card">
                      <div class="card-body">
                        <center>
                          <img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/fair.png" style="height:110px;width:110px">
                          <br>
                          <span>Fair</span>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="card">
                      <div class="card-body">
                        <center>
                          <img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/medium.png" style="height:110px;width:110px">
                          <br>
                          <span>Fair/Medium</span>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="card">
                      <div class="card-body">
                        <center>
                          <img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/wheatish.png" style="height:110px;width:110px">
                          <br>
                          <span>Wheatish</span>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="card">
                      <div class="card-body">
                        <center>
                          <img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px">
                          <br>
                          <span>Dusky</span>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-6 mx-auto mt-2">
                    <div class="card">
                      <div class="card-body">
                        <center>
                          <img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px">
                          <br>
                          <span>Dusky</span>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-6 ml-auto">
                    <button class="btn btn-secondary btn-block" onclick='getBodyType()'>NEXT <div></div>
                  </div>
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>
    </div>
    <!-- The plus modal -->

    <div id="elevate-plus-modal" class="elevate-Plus-modal">
      <div class="elevate-Plus-modal-content">
        <span class="elevate-Plus-modalclose">&times;</span>
        <figure class="m-0 p-0">
          <img src="https://www.globaldesi.in/dw/image/v2/BGCX_PRD/on/demandware.static/-/Sites-masterCatalog_GD/default/dw48485a7a/images/hires/SS22/GD-SS23GMSJER64SIL-Silver-Alloy-and-Beads-Earring.jpg?sw=1300&sh=1950&sm=fit" alt="" class="img-fluid">
          <figcaption>
            <div class="grid-product__title fw-bold  text-nowrap">Product Name</div>
            <div class="grid-product__title text-nowrap">Product Name</div>
            <div class="grid-product__price mt-0 text-nowrap">₹300</div>
          </figcaption>
        </figure>
      </div>
    </div>


    <div id="elevate-plus-modal2" class="elevate-Plus-modal2">
      <div class="elevate-Plus-modal-content">
        <span class="elevate-Plus-modalclose2">&times;</span>
        <figure class="m-0 p-0">
          <img src="https://media.istockphoto.com/id/488160041/photo/mens-shirt.jpg?s=612x612&w=0&k=20&c=xVZjKAUJecIpYc_fKRz_EB8HuRmXCOOPOtZ-ST6eFvQ=" alt="" class="img-fluid">
          <figcaption>
            <div class="grid-product__title fw-bold">Product Name</div>
            <div class="grid-product__title">Product Name</div>
            <div class="grid-product__price mt-0">₹300</div>
          </figcaption>
        </figure>
      </div>
    </div>


    <div id="elevate-plus-modal3" class="elevate-Plus-modal3">
      <div class="elevate-Plus-modal-content">
        <span class="elevate-Plus-modalclose3">&times;</span>
        <figure class="m-0 p-0">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT86-7NLG7Qsovn3a2_NkztjXfp-v29s5gd2xrx-uHN9vCbOT42Js5iryTlS3QlPoezUKs&usqp=CAU" alt="" class="img-fluid">
          <figcaption>
            <div class="grid-product__title fw-bold">Product Name</div>
            <div class="grid-product__title">Product Name</div>
            <div class="grid-product__price mt-0">₹300</div>
          </figcaption>
        </figure>
      </div>

    </div>
    <?php include('include/jsLinks.php'); ?>
    <script>
      function CloseQuizModal() {
        Swal.fire({
          text: "If you exit the quiz all data will be lost. Please click Ok to save the data.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: 'default',
          cancelButtonText: 'OK',
          confirmButtonText: 'Discard'
        }).then((result) => {
          if (result.isConfirmed) {
            jQuery("#QuestionAnsModal").modal('hide');
          }
        })
      }

      function getSkinTone(value) {
        $("#qnabody").html(
          '<div class="row"><div class="col-sm-12"><p>What is your skin tone?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/fair.png" style="height:110px;width:110px"><br><span>Fair</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/medium.png" style="height:110px;width:110px"><br><span>Fair/Medium</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/wheatish.png" style="height:110px;width:110px"><br><span>Wheatish</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px"><br><span>Dusky</span></center></div></div></div><div class="col-sm-3 col-6 mx-auto mt-2"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dusky.png" style="height:110px;width:110px"><br><span>Dusky</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 ml-auto"><button class="btn btn-secondary btn-block" onclick="getBodyType()" >NEXT<div></div></div></div></div></div>'
        );

      }

      function getBodyType() {

        $("#qnabody").html(
          '<div class="row"><div class="col-sm-12"><p>What is your body type?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"  ><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/1.png" style="height:110px;width:110px"></a><br><span>Hourglass</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="jajascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom"src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/3.png" style="height:110px;width:110px"></a><br><span>Apple</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/4.png" style="height:110px;width:110px"></a><br><span>Pear</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/5.png" style="height:110px;width:110px"></a><br><span>Inverted Triangle</span></center></div></div></div><div class="col-sm-3 col-6 mx-auto mt-2"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img title="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content" data-toggle="tooltip" data-placement="bottom"src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/7.png" style="height:110px;width:110px"></a><br><span>Rectangle</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button onclick="getSkinTone()" class="btn btn-secondary btn-block">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()" >NEXT</button></div></div></div></div>'
        );
        jQuery('[data-toggle="tooltip"]').tooltip();

      }

      function getColorPrint() {
        $("#qnabody").html(
          '<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>Choose the color/prints you like(maximum seven)</p><div class="row"><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c16.png" style="height:110px;width:110px" class="circleimg"><br><span>Dark Green</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c22.png" style="height:110px;width:110px" class="circleimg"><br><span>Polka Dots</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c17.png" style="height:110px;width:110px" class="circleimg"><br><span>Violet</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c1.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Pink</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c2.png" style="height:110px;width:110px" class="circleimg"><br><span>Navy Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c3.png" style="height:110px;width:110px" class="circleimg"><br><span>White</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c4.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Brown</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c5.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c6.png" style="height:110px;width:110px" class="circleimg"><br><span>Grey</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c7.png" style="height:110px;width:110px" class="circleimg"><br><span>Dark Brown</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c8.png" style="height:110px;width:110px" class="circleimg"><br><span>Yellow</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c9.png" style="height:110px;width:110px" class="circleimg"><br><span>Black</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c10.png" style="height:110px;width:110px" class="circleimg"><br><span>Taupe</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c11.png" style="height:110px;width:110px" class="circleimg"><br><span>Red</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c12.png" style="height:110px;width:110px" class="circleimg"><br><span>Blue</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c13.png" style="height:110px;width:110px" class="circleimg"><br><span>Saffron</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c14.png" style="height:110px;width:110px"><br><span>Olive</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c15.png" style="height:110px;width:110px"><br><span>Turquoise</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c16.png" style="height:110px;width:110px" class="circleimg"><br><span>Light Green</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c17.png" style="height:110px;width:110px" class="circleimg"><br><span>Silver</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c18.png" style="height:110px;width:110px" class="circleimg"><br><span>Multi Coloured</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c19.png" style="height:110px;width:110px" class="circleimg"><br><span>Aztec</span></center></div></div></div><div class="col-sm-2 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c23.png" style="height:110px;width:110px" class="circleimg"><br><span>Gold</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c21.png" style="height:110px;width:110px" class="circleimg"><br><span>Stripes</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c22.png" style="height:110px;width:110px" class="circleimg"><br><span>Floral</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c27.png" style="height:110px;width:110px" class="circleimg"><br><span>Checks</span></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><img class="circleimg" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/colors/c24.png" style="height:110px;width:110px"><br><span>Animal</span></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getFabric()">NEXT</button></div></div></div></div>'
        );
      }

      function getFabric() {
        $("#qnabody").html(
          '<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>your favorite fabric?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b1.png" class="circle-img" style="height:110px;width:110px"><br><span>Cotton</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b2.png" class="circle-img" style="height:110px;width:110px"><br><span>lycra</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b3.png" class="circle-img" style="height:110px;width:110px"><br><span>silk</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b4.png" class="circle-img" style="height:110px;width:110px"><br><span>linen</span><a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b5.png" class="circle-img" style="height:110px;width:110px"><br><span>Velvet</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Polyster</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>rayon</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b8.png" class="circle-img" style="height:110px;width:110px"><br><span>satin</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b9.png" class="circle-img" style="height:110px;width:110px"><br><span>organza</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>Cambric</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>wool</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="wearMost()">NEXT</button></div></div></div></div>'
        );
      }


      function wearMost() {

        $("#qnabody").html(
          '<div class="row" style="height:350px;overflow-y:scroll"><div class="col-sm-12"><p>What do you like to wear most?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b1.png" class="circle-img" style="height:110px;width:110px"><br><span>Short Skirt</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b2.png" class="circle-img" style="height:110px;width:110px"><br><span>Shorts</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b3.png" class="circle-img" style="height:110px;width:110px"><br><span>Dress</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b4.png" class="circle-img" style="height:110px;width:110px"><br><span>Saree</span><a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b5.png" class="circle-img" style="height:110px;width:110px"><br><span>Kurti</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Suit</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b7.png" class="circle-img" style="height:110px;width:110px"><br><span>Formal Trousers</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b8.png" class="circle-img" style="height:110px;width:110px"><br><span>Casual Denim</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b9.png" class="circle-img" style="height:110px;width:110px"><br><span>Salwar Suit</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/dresses/b10.png" class="circle-img" style="height:110px;width:110px"><br><span>Maxi Dress</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block"onclick="getColorPrint()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getPersonalStyle()">NEXT</button></div></div></div></div>'
        );
      }

      function getPersonalStyle() {
        $("#qnabody").html(
          '<div class="row" style="height:350px;overflow-y:scroll" ><div class="col-sm-12"><p>What is your personal style?</p><div class="row"><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)" onclick="addClass(this.value)"><img title="" src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p3.png" class="circle-img" style="height:110px;width:110px"><br><span>Elegant</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p4.png" class="circle-img" style="height:110px;width:110px"><br><span>Girly</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p6.png" class="circle-img" style="height:110px;width:110px"><br><span>Trendy</span></a></center></div></div></div><div class=" col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p7.png" class="circle-img" style="height:110px;width:110px"><br><span>Fusion</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p8.png" class="circle-img" style="height:110px;width:110px"><br><span>Ethnic</span></a></center></div></div></div><div class="col-6 col-sm-3"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p9.png" class="circle-img" style="height:110px;width:110px"><br><span>Casual</span></a></center></div></div></div><div class="col-sm-3 col-6"><div class="card"><div class="card-body"><center><a href="javascript:void(0)"><img src="https://elanstreet.com/skin/frontend/base/default/stylequiz/images/personal-style/p12.png" class="circle-img" style="height:110px;width:110px"><br><span>Glamorous</span></a></center></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getFabric()" >BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="bodyMeasurements()">NEXT</button></div></div></div></div>'
        );
      }

      function bodyMeasurements() {
        $("#qnabody").html(
          '<div class="row"><div class="col-sm-12 "><div class="form-group"><p class="text-center font-weight-bold">Height</p><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Petite</label>&ensp; <input type="radio" name="average" id="average">&nbsp;<label for="average">Average</label>&ensp; <input type="radio" name="average" id="tall">&ensp;<label for="tall">Tall</label></div></div><div class="form-group"><p class="text-center font-weight-bold">Body-ratio</p><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Balanced Body</label>&ensp; <input type="radio" name="average" id="average"> &nbsp;<label for="average">Long Legged Short Torso</label>&ensp; <input type="radio" name="average" id="tall">&nbsp;<label for="tall">Short Legged</label>&ensp;</div></div><div class="form-group"><p class="text-center font-weight-bold">Build</p><div class="text-center"><input type="radio" name="petite" id="petite">&nbsp;<label for="petite">Small</label>&ensp; <input type="radio" name="average" id="average">&nbsp;<label for="average">Medium</label>&ensp; <input type="radio" name="average" id="tall">&nbsp;<label for="tall">Large</label>&ensp;</div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="getPersonalStyle()">BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="matchingAcc()">NEXT</button></div></div></div></div>'
        )
      }

      function matchingAcc() {
        $("#qnabody").html(
          '<div class="row"><div class="col-sm-12"><p>What do you buy in accessories matching up with your clothes?</p><div class="form-group"><div class="text-center"><input type="radio" name="petite" id="petite">&ensp;<label for="petite">Jewelry</label>&ensp;<input type="radio" name="average" id="average">&ensp;<label for="average">Jewelry & Purse</label>&ensp;<input type="radio" name="average" id="tall">&ensp;<label for="tall">Jewelry, Purse & Footwear</label></div></div><div class="row mt-2"><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="bodyMeasurements()" >BACK</button></div><div class="col-sm-6 col-6"><button class="btn btn-secondary btn-block" onclick="formdata()">NEXT</button></div></div></div></div>'
        );
      }

      function formdata() {
        $("#qnabody").html(
          '<div class="row"><div class="col-sm-12"><div class="row"> <div class="col-sm-12"> <h5 class="text-center">Thank You!</h5><center><span class="text-center">Please fill in the details below to save your data</span></center> <br><div class="form-group"><input type="text" name="full_name" placeholder="Full Name" class="form-control form-control-lg"> </div><div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control form-control-lg"> </div><div class="row"> <div class="col-12 col-sm-6"> <div class="form-group"> <input type="number" name="mobile" placeholder="Mobile" class="form-control form-control-lg"> </div></div><div class="col-12 col-sm-6"> <div class="form-group"> <select class="form-control form-control-lg" name="age_group" style="font-size: 13px;"> <option selected disabled>Age Group</option> <option value=""> < 40 </option> <option value=""> > 40 </option></select> </div></div></div></div></div><div class="row mt-2"><div class="col-sm-6 col-6 ml-auto"><button class="btn btn-secondary btn-block" onclick="getResult()" >Submit</button></div></div></div></div>'
        );
      }

      function getResult() {
        location.href = '<?= base_url('Home/QnaResult') ?>';
      }

      function Prebook(id) {
        $('#prebook' + id).attr("disabled", true);
        $('#prebookSpin' + id).show();

        var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/Prebook/') ?>" + id;
        $.ajax({
          url: url,
          type: "post",

          success: function(response) {
            var response = JSON.parse(response);
            $('#prebook' + id).removeAttr("disabled");
            $('#prebookSpin' + id).hide();
            if (response[0].res == 'success') {
              $('.notifyjs-wrapper').remove();
              $.notify("" + response[0].msg + "", "success");
              if (response[0].redirect) {
                window.setTimeout(function() {
                  window.location.href = response[0].redirect;
                }, 1000);
              } else {
                window.setTimeout(function() {
                  window.location.reload();
                }, 1000);
              }
            } else if (response[0].res == 'pay') {
              $('.notifyjs-wrapper').remove();
              $.notify("" + response[0].msg + "", "success");
              var options = {
                "key": response[0].data.rzp_api_key,
                "amount": response[0].data.rzpAmount,
                "currency": "INR",
                "name": response[0].data.product,
                "description": response[0].data.description,
                "image": response[0].data.logo,
                "order_id": response[0].data.rzpOrderId,
                "handler": function(rzpResponse) {
                  // window.location.href=response[0].data.baseUrl+'Home/PaymentResponse/'+rzpResponse.razorpay_order_id+'/'+rzpResponse.razorpay_payment_id;
                  data = response[0].data.enrollData
                  url = response[0].data.baseUrl + 'Home/PaymentResponse/' + rzpResponse.razorpay_order_id +
                    '/' +
                    rzpResponse.razorpay_payment_id;
                  $.ajax({
                    url: url,
                    type: "post",
                    data: {
                      'data': data,
                    },
                    success: function(response) {
                      var response = JSON.parse(response);
                      if (response[0].res == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("" + response[0].msg + "", "success");
                        if (response[0].redirect) {
                          window.setTimeout(function() {
                            window.location.href = response[0].redirect;
                          }, 1000);
                        } else {
                          window.setTimeout(function() {
                            window.location.reload();
                          }, 1000);
                        }
                      } else if (response[0].res == 'error') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("" + response[0].msg + "", "error");
                      }
                    }
                  });
                },
                "prefill": {
                  "name": response[0].data.enrollData.Name,
                  "email": response[0].data.enrollData.Email,
                  "contact": response[0].data.enrollData.Mobile
                },
                "notes": {
                  "address": "SlickPattern"
                },
                "theme": {
                  "color": "#004bfe"
                }
              };
              var rzp1 = new Razorpay(options);
              rzp1.on('payment.failed', function(response) {

              });
              rzp1.open();
            } else if (response[0].res == 'error') {
              $('.notifyjs-wrapper').remove();
              $.notify("" + response[0].msg + "", "error");
            }
          }
        })
      }
    </script>
    <!-- popadvertisement -->
    <div class="popUpDisplay  animate__animated animate__fadeInUpBig">
      <figure class="">
        <div class="btn-close ms-auto float-right bi bi-x-lg popUpDisplay-close-btn"></div>
        <img src="https://images.loox.io/uploads/2024/4/19/Sn6fzmzdW.jpg" alt="" class="img-fluid">
        <figcaption class="popUpDisplay-caption">
          <p class="m-0">Rajani N.</p>
          <div class="text-warning d-flex justify-content-start align-items-center" style="gap:1px;">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star fw-normal"></i>
          </div>
          <p class="review">"This is the best product ..."</p>
        </figcaption>
      </figure>
    </div>

    <script>
      const popUp = document.querySelector('.popUpDisplay');
      const closeButton = popUp.querySelector('.btn-close');

      // Use setTimeout to display the pop-up after 2 seconds on page load
      setTimeout(() => {
        popUp.style.display = 'block';
      }, 10000);

      // Add click event listener to the close button to hide the pop-up
      ('body .btn-close').on('click', () => {
        popUp.classList.add('animate__zoomOutDown')
        popUp.addEventListener('animationend', () => {
          popUp.style.display = 'none';
          popUp.classList.remove('animate__zoomOutDown');
        }, {
          once: true
        });

      });
    </script>
  </body>

  </html>