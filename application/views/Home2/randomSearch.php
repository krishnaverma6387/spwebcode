<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Random search </title>
    <?php include('include/cssLinks.php'); ?>
</head>

<body>
<style>
        :root {
            --color1: #8340A1;
            --color2: #e83e8c;
            --color3: #068FFF;
            --color4: rgb(243 244 246);
            --color5: #683481;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        img {
            width: 100%;
        }

        p {
            margin: 0;
        }

        .btn:focus,
        a:focus,
        input[type="text"]:focus {
            box-shadow: none;
        }

        .searchContainer {
            position: relative;
        }

        .searchContainer form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
        }

        .searchContainer input[type="text"] {
            width: 300px;
            background-color: var(--color4);
        }

        .searchContainer input[type="text"]:focus {
            border: var(--color1) solid 1px;
        }

        .searchContainer .submitBtn {
            background-color: var(--color1);
            color: white;
            font-weight: 600;
            transition: all .2s ease-in-out;
        }

        .searchContainer .submitBtn:hover {
            background-color: var(--color5);
            color: white;
        }

        .searchResults {
            display: none;
            padding: 8px 16px;
            background-color: white;
            border: 1px solid rgb(0, 0, 0, 0.1);
            border-radius: 4px;
            box-shadow: 1px 4px 4px 0px rgb(0, 0, 0, 0.1);
            position: absolute;
            left: 50%;
            top: 40px;
            transform: translateX(-50%);
            width: 360px;
            z-index: 999;
        }

        .searchResults ul {
            font-size: 14px;
        }

        .searchResults ul li {
            padding-block: 2px;
        }

        .searchResults li:hover {
            background-color: var(--color4);
        }

        .searchResults li a {
            color: black;
            text-decoration: none;
        }

        .searchCloseBtn {
            background-color: var(--color4);
            outline: none;
            border: 0;
            padding: 0 6px;
            border-radius: 100vh;
            margin: 0;
            position: absolute;
            top: 4px;
            right: 12px;
            transition: all .2s ease-in-out;
        }

        .searchCloseBtn:hover {
            background-color: rgb(0, 0, 0, 0.5);
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            color: var(--color2);
        }

        @media (width<568px){
            .searchResults{
                display: none!important;
            }
        }
    </style>
    <?php include('include/header.php'); ?>
    <main>
        <section class="d-lg-none d-md-none d-sm-block position-fixed top-0 w-100 bg-white" style="z-index: 10000;" >
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center text-dark">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <img src="<?= base_url('assets/new_website/img/favicon.png') ?>" class="ml-2" style="width: 40px;" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/heart.png') ?>" style="width: 20px;" alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/search.png') ?>" style="width: 18px;" alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/bag.png') ?>" style="width: 20px;" alt="">
                        <div>
                            <span class="cartCounter m-0">10</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="text-center py-5 px-2">
                <p class="text-dark" style="font-family: 'League Spartan', sans-serif; font-size: 26px; margin-top: 3rem;">No results for: <span
                        class="font-weight-bold">"random
                        word"</span></p>
                <div class="searchContainer">
                    <form>
                        <input type="text" class="form-control" name="" id="searchBar" placeholder="Let's try a new search">
                        <button class="btn ml-2 submitBtn" type="submit">Search</button>
                    </form>
                    <div class="searchResults text-left">
                        <p class="font-weight-bold" style="font-size: 14px; font-family: 'League Spartan', sans-serif;">
                            <img src="<?=base_url('assets/new_website/img/search.png')?>" class="" style="width: 16px;" alt="">
                            SUGGESTIONS:
                        </p>
                        <ul>
                            <li>
                                <a href="#" class="d-block w-100">Dress1</a>
                            </li>
                            <li>
                                <a href="#" class="d-block w-100">Dress2</a>
                            </li>
                            <li>
                                <a href="#" class="d-block w-100">Dress3</a>
                            </li>
                            <li>
                                <a href="#" class="d-block w-100">Dress4</a>
                            </li>
                        </ul>
                        <p class="font-weight-bold d-flex align-items-center"
                            style="font-size: 14px; font-family: 'League Spartan', sans-serif;">
                            <img src="<?=base_url('assets/new_website/img/recent-search.png')?>" class="mr-1" style="width: 18px;" alt="">
                            <span>RECENT SEARCHES:</span>
                        </p>
                        <ul>
                            <li>
                                <p>Shirt1</p>
                            </li>
                            <li>
                                <p>Shirt2</p>
                            </li>
                        </ul>
                        <p class="font-weight-bold" style="font-size: 14px; font-family: 'League Spartan', sans-serif;">
                            RELATED PRODUCTS:</p>
                        <div class="d-flex justify-content-between mt-2" style="gap: 8px;">
                            <a href="#" class="text-dark" style="font-size: 12px;">
                                <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 80px;" alt="">
                                <div class="text-center">
                                    <p class="font-weight-bold mt-1 text-dark">Lorem, ipsum.</p>
                                    <p style="font-size: 10px;">T-Shirt</p>
                                    <p>₹ 999</p>
                                </div>
                            </a>
                            <a href="#" class="text-dark" style="font-size: 12px;">
                                <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 80px;" alt="">
                                <div class="text-center">
                                    <p class="font-weight-bold mt-1 text-dark">Lorem, ipsum.</p>
                                    <p style="font-size: 10px;">T-Shirt</p>
                                    <p>₹ 999</p>
                                </div>
                            </a>
                            <a href="#" class="text-dark" style="font-size: 12px;">
                                <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 80px;" alt="">
                                <div class="text-center">
                                    <p class="font-weight-bold mt-1 text-dark">Lorem, ipsum.</p>
                                    <p style="font-size: 10px;">T-Shirt</p>
                                    <p>₹ 999</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="margin-top:2rem;">
                    <p class="mb-1 font-weight-bold text-dark">Still need help looking for something?</p>
                    <p style="font-size: 14px;"><a href="#" class="text-dark" style="text-decoration: underline;">Chat
                            with
                            us</a> or text us with your mobile device at +91-9718636582</p>
                </div>
            </div>
        </section>
        <section>
            <div class="container p-0">
                <p class="text-center text-dark font-weight-bold mb-4"
                    style="font-family: 'League Spartan', sans-serif; font-size: 22px;">NOW TRENDING</p>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container p-0 my-5">
                <p class="text-center text-dark font-weight-bold mb-4"
                    style="font-family: 'League Spartan', sans-serif; font-size: 22px;">BEST SELLERS</p>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                    <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                    <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-dark productCard">
                                <div class="productCardImg">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20231016/L6FL/652c5051afa4cf41f5466bdf/-473Wx593H-466711316-blue-MODEL.jpg"
                                        alt="" class="">
                                </div>
                                <div class="pb-1">
                                    <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                                    <p class="m-0 mt-1">
                                    <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                    <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                        2,999</span>
                                    </p>
                                    <p class="font-weight-bold text-success" style="font-size: 12px;">Upto 35% off</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });

        const searchBar = document.getElementById('searchBar')
        const submitBtn = document.querySelector('.submitBtn')

        searchBar.addEventListener('input', () => {
            if (searchBar.value.length > 0) {
                document.querySelector('.searchResults').style.display = 'block'
            } else {
                document.querySelector('.searchResults').style.display = 'none'
            }
        })

        submitBtn.addEventListener('click', () => {
            if (searchBar.value.length <= 0) {
                window.location.href = '/'
            }
        })

        searchBar.addEventListener('blur', () => {
            document.querySelector('.searchResults').style.display = 'none'
        })

    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>