<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Home </title>
    <?php include('include/cssLinks.php'); ?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        .fs10{
            font-size: 10px;
        }
        .fs12{
            font-size: 12px;
        }
        .fs16{
            font-size: 16px;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        iframe{
            width: 100%;
            aspect-ratio: 16/9;
        }

        a:hover{
            text-decoration: none;
            color: black;
        }

        .homePageSlider .carousel-item {
            max-height: 600px;
        }

        .homePageSlider .carousel-item img {
            max-height: 600px;
            object-fit: cover;
        }

        .sliderVideo{
            max-height: 600px;
            object-fit: cover;
        }

        .carousel-text{
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            color: white;
            text-align: center;
            width: 80%;
        }

        .muteBtnCont{
            bottom:28px;
            left:50%;
            transform: translateX(-50%);
        }

        .carousel-text p:nth-child(1){
            font-size: 12px;
            line-height: 1.2;
        }

        .carousel-text p:nth-child(2){
            font-size: 40px;
            line-height: 1.2;
            text-transform: uppercase;
            font-weight: 500;
            font-family: var(--heading_font);
        }

        .carousel-text p:nth-child(3){
            width: 80%;
            line-height: 1;
            font-size: 16px;
            margin-inline: auto;
            margin-bottom: 40px;
        }

        .carousel-text a{
            border: 2px solid white;
            color: white;
            padding: 8px 16px;
            font-size: 18px;
            font-family: var(--heading_font);
        }

        .carousel-indicators {
            margin-bottom: 0.5rem;
        }
        
        .swiper {
            width: 100%;
        }

        .offerSwiper{
            height: 192px;
        }

        .welcomeSwiper{
            height: 260px;
        }

        .fourthSwiper{
            height:400px;
        }

        .latestSwiper{
            height: 440px;
        }

        .productSwiper{
            height: 480px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            /* padding-inline: 40px; */
            position: relative;
        }

        .swiper-slide img {
            display: block;
        }

        .swiper-button-next,
        .swiper-button-prev{
            background-color:var(--maincolor);
            font-size: 16px;
            border-radius: 100vh;
            padding: 0px 22px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: white;
            font-size: 12px;
            font-weight: 900;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled{
            display: none;
        }

        .swiper-pagination-bullet-active{
            background-color: var(--pinkcolor)!important;
        }

        #combo_slider .owl-dots{
            display: none;
        }

        .owl-dots{
            display: flex;
            gap: 6px;
            justify-content: center;
        }

        .owl-carousel button.owl-dot{
            padding: 4px!important;
            background-color: rgba(0, 0, 0, 0.2)!important;
            border-radius: 100vh;
        }

        .owl-carousel button.owl-dot.active{
            background-color: var(--pinkcolor)!important;
        }

        .productSliderCard{
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }

        .productSliderCard p{
            font-family: var(--heading_font)!important;
            color: rgba(0, 0, 0, 0.5);
            font-weight: 600;
        }

        .productSliderCard span{
            font-family: var(--heading_font)!important;
            font-weight: 500;
            color: black;
            position: absolute;
            bottom: 0;
            left: 8px;
            font-size: 13px;
        }

        .productSliderCard a:hover{
            color: var(--pinkcolor);
        }
        
        .productSliderCard .img-container{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .productSliderCard .img-card{
            height: 140px;
            width: 140px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .productSliderCard .img-card img{
            height: 100%;
            width: 100%;
            object-fit: contain;
            transition: all .4s ease-in-out;
        }

        .productSliderCard .img-card img:hover{
            scale: 1.1;
        }

        .shopNowBtn:hover{
            background-color: var(--maincolor);
            color: white;
            border-color: var(--maincolor);
        }

        .prebookTag h2{
            font-family: var(--heading_font);
            color: white;
            z-index: 5;
            position: absolute;
            font-size: 16px;
            transform: rotate(-45deg);
            line-height: 1;
            margin-top: 20px;
            margin-left: 8px;
        }

        .triangle_top_left {
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 100px 100px 0 0;
            border-color: var(--maincolor) transparent transparent transparent;
        }

        /* From Uiverse.io by vinodjangid07 */ 
        /* The switch - the box around the speaker*/
        .toggleSwitch {
        width: 50px;
        height: 50px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(39, 39, 39);
        border-radius: 50%;
        cursor: pointer;
        transition-duration: .3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.13);
        overflow: hidden;
        }

        /* Hide default HTML checkbox */
        #checkboxInput {
        display: none;
        }

        .bell {
        width: 18px;
        }

        .bell path {
        fill: white;
        }

        .speaker {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition-duration: .3s;
        }

        .speaker svg {
        width: 18px;
        }

        .mute-speaker {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        z-index: 3;
        transition-duration: .3s;
        }

        .mute-speaker svg {
        width: 18px;
        }

        #checkboxInput:checked +.toggleSwitch .speaker {
        opacity: 0;
        transition-duration: .3s;
        }

        #checkboxInput:checked +.toggleSwitch .mute-speaker {
        opacity: 1;
        transition-duration: .3s;
        }

        #checkboxInput:active + .toggleSwitch {
        transform: scale(0.7);
        }

        #checkboxInput:hover + .toggleSwitch {
        background-color: rgb(61, 61, 61);
        }

        .welcomeSliderCard{
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            height: 100%;
            width: 100%;
            text-decoration: none;
        }

        .welcomeSliderCard img{
            transition-duration: 3s;
        }

        .welcomeSliderCard:hover{
            color: black;
        }

        .welcomeSliderCard:hover img{
            scale: 1.2;
        }

        .welcomeSliderCardText{
            background-image: url("<?=base_url('assets/new_website/img/pinkTexture.jpg') ?>");
            position: absolute;
            width:95%;
            border-radius: 4px;
            bottom: 6px; 
            left: 50%;
            transform: translateX(-50%); 
        }

        .welcomeSliderCardText p{
            font-family: var(--heading_font)!important;
        }

        .latestSliderCard{
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border-radius: 6px;
            overflow: hidden;
            text-decoration:none;
        }

        .latestSliderCard:hover{
            color:black;
        }

        .latestSliderCard .imgCont{
            height: 280px;
            width: 100%;
        }

        .latestSliderCard .imgCont img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .latestSliderCardText{
            background-color:rgba(0,0,0,0.05);
        }

        .latestSliderCardText p{
            font-family: var(--heading_font)!important;
        }

        .latestSliderCardText p:first-child{
            line-height:1;
        }

        .latestSliderCardText .price{
            color: var(--maincolor);
            font-weight:500;
            font-size: 18px;
        }

        .storeSliderCard .imgCont{
            height: 320px;
            width: 100%;
        }

        .storeSliderCard .imgCont img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .prebookSliderCard{
            border: 14px solid #FEF0F0;
        }

        .prebookSliderCard img{
            height: 220px;
            width: 100%;
            object-fit: cover;
        }

        .prebookSliderCard button{
            background-color: var(--maincolor);
            color: white;
        }

        .prebookSliderCard button:hover{
            color: var(--maincolor);
            background-color: white;
            border: 1px solid var(--maincolor);
        }

        .newOnSlickInner{
            background-color: rgba(0,0,0,0.5);
            border-radius: 8px 8px 0 0;
        }

        .newOnSlick-btn{
            width: 100%;
            color: whitesmoke;
            border: 1px solid rgba(255,255,255,0.7);
        }

        .newOnSlick-btn:hover{
            border-color: var(--maincolor);
            background-color: var(--maincolor);
            color: white;
        }

        .brochureCard img{
            height: 280px;
            width: 320px;
            object-fit: cover;
        }

        .brochureCardDetails{
            font-family: var(--heading_font);
            background-color: #deedff;
        }

        .brochureCardDetails p{
            font-size: 14px;
            font-weight: 500;
        }

        .brochureCard button{
            font-family: var(--heading_font)!important;
            font-weight: 500;
            font-size: 13px;
            transition: scale .2s ease-in;
        }

        .brochureCard label{
            font-family: var(--mainfont)!important;
            font-weight: 500;
        }

        .brochureCard .downloadBtn{
            position: absolute;
            bottom: 16px;
            right: 16px;
            z-index: 5;
            transition: scale .2s ease-in;
        }

        .brochureCard button:hover, .brochureCard .downloadBtn:hover{
            scale: 1.1;
        }

        .showcaseSection{
            background-image: url('<?=base_url('assets/new_website/img/slider2.webp')?>');
            height:400px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: grid;
            place-items: center;
        }

        .showcaseSection a{
            border: 2px solid white;
            color: white;
            padding: 6px 20px;
        }

        .heart-container {
        --heart-color: rgb(255, 91, 137);
        position: relative;
        width: 16px;
        height: 16px;
        transition: .3s;
        }

        .heart-container .checkbox {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 20;
        cursor: pointer;
        }

        .heart-container .svg-container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .heart-container .svg-outline,
                .heart-container .svg-filled {
        fill: var(--heart-color);
        position: absolute;
        }

        .heart-container .svg-filled {
        animation: keyframes-svg-filled 1s;
        display: none;
        }

        .heart-container .svg-celebrate {
        position: absolute;
        animation: keyframes-svg-celebrate .5s;
        animation-fill-mode: forwards;
        display: none;
        stroke: var(--heart-color);
        fill: var(--heart-color);
        stroke-width: 2px;
        }

        .heart-container .checkbox:checked~.svg-container .svg-filled {
        display: block
        }

        .heart-container .checkbox:checked~.svg-container .svg-celebrate {
        display: block
        }

        @keyframes keyframes-svg-filled {
            0% {
                transform: scale(0);
            }

            25% {
                transform: scale(1.2);
            }

            50% {
                transform: scale(1);
                filter: brightness(1.5);
            }
        }

        @keyframes keyframes-svg-celebrate {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                filter: brightness(1.5);
            }

            100% {
                transform: scale(1.2);
                opacity: 0;
                display: none;
            }
        }

        .cookiesCont {
            width: 90%;
            bottom: 0;
            left:50%;
            transform: translateX(-50%);
            z-index: 99999;
            display: none;
        }

        .cookiesCont .btnCont{
            display: flex;
            gap: 8px;
            align-items: center;
            justify-content: end;
        }

        .cookiesCont .btnCont button{
            font-size: 14px;
        }

        .cookiesCont .acceptBtn{
            background-color: var(--maincolor);
            border: 1px solid var(--maincolor);
            color: white;
            border-radius: 100vh;
            transition: .2s;
        }

        .cookiesCont .acceptBtn:hover{
            background-color: white;
            color: var(--maincolor);
        }

        .cookiesCont .declineBtn{
            border: 1px solid black;
            color: black;
            border-radius: 100vh;
        }

        .cookiesCont .declineBtn:hover{
            color: white;
            background-color: black;
        }

        .cookiesCont a{
            text-decoration: underline;
            color: var(--pinkcolor);
        }

        .homeBottomNav {
            background-color: white;
            position:fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 99998;
            box-shadow: 0px 6px 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s ease-in-out;
        }

        .homeBottomNav ul{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }

        .homeBottomNav ul li{
            padding: 6px 0;
            text-align: center;
            position: relative;
        }

        .homeBottomNav ul li a.active::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            background-color: var(--pinkcolor);
            bottom: 0;
            left: 0;
        }

        .homeBottomNav ul li{
            padding: 6px 0;
            text-align: center;
        }

        .homeBottomNav img{
            width: 24px;
            margin-bottom: 4px;
        }

        .homeBottomNav p{
            margin: 0;
            padding: 0;
            line-height: 1;
            font-size: 10px;
            font-weight: 500;
            text-transform: uppercase;
        }

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

        .scroll-up-btn, .feedback-btn {
            display: none!important;
        }

        @media (width< 768px) {
            .carousel-text p:nth-child(2){
                font-size: 28px;
            }

            .fourthSwiper{
                height:320px;
            }
        }

        @media (width< 576px) {
            .offerSwiper{
                height: 102px;
            }
            
            .carousel-text p:nth-child(1){
                margin-bottom: 4px;
            }

            .carousel-text p:nth-child(2){
                font-size: 20px;
                margin-bottom: 6px;
            }

            .carousel-text p:nth-child(3){
                font-size: 12px;
                margin-bottom: 16px;
            }

            .carousel-text a, .carousel-text button{
                font-size: 10px;
            }

            .welcomeSwiper{
                height: 360px;
            }

            .latestSwiper{
                height:400px;
            }

            .fourthSwiper{
                height:130px;
            }

            .showcaseSection{
                height: 280px;
            }

            .toggleSwitch{
                width: 30px;
                height: 30px;
            }

            .speaker, .mute-speaker{
                width: 14px;
            }

            .swiper-button-next,
            .swiper-button-prev{
                display: none;
            }

            .cookiesCont{
                width: 95%;
                font-size: 12px;
                line-height: 1.5;
            }
        }

        @media (width< 400px){
            .showcaseSection{
                height: 240px;
            }
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <div class="d-lg-none d-md-none- d-sm-none d-xs-block d-block homeBottomNav">
            <ul>
                <li>
                    <a href="#" class="active">
                        <img src="<?= base_url('assets/new_website/img/favicon.png') ?>" alt="">
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="#" >
                        <img src="<?= base_url('assets/new_website/img/crown2.png') ?>" alt="">
                        <p>Royal Club</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('assets/new_website/img/sale-tag.png') ?>" alt="">
                        <p>Sale</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('assets/new_website/img/coupon.png') ?>" alt="">
                        <p>Offers</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('assets/new_website/img/user2.png') ?>" alt="">
                        <p>Profile</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="position-fixed bg-white p-4 rounded-lg cookiesCont shadow">
            <p class="mb-1">This website uses cookies to enhance your browsing experience by improving site functionality and personalization. We respect your privacy and give you the choice to opt-out. If you opt-out, we will not track or store your activity or data, except for a single cookie that saves your preference not to be tracked.</p>
            <p>For more information, visit our <a href="">Cookie Policy</a>.</p>
            <div class="btnCont">
                <a href="#">Cookies settings</a>
                <button class="btn declineBtn">Decline</button>
                <button class="btn acceptBtn">Accept</button>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide homePageSlider" data-ride="carousel">
            <ol class="carousel-indicators"> 
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZmFzaGlvbnxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                    <div class="carousel-text d-block position-absolute">
                        <p class="animate__animated animate__fadeInUp">Good Morning</p>
                        <p class="animate__animated animate__fadeInUp animate__delay-1s">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A tempora obcaecati facere voluptate distinctio, adipisci nemo vero minus harum iure.</p>
                        <a href="#" class="shopNowBtn">SHOP NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZmFzaGlvbnxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="..."> -->
                    <video width="100%" height="100%" autoplay="autoplay" loop muted id="myVideo">
                        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="muteBtnCont d-block position-absolute">
                        <div>
                            <input type="checkbox" id="checkboxInput" class="muteBtn" checked>
                            <label for="checkboxInput" class="toggleSwitch m-0">
                                <div class="speaker"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
                                <path d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z" style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;"></path>
                                <path d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6" style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round"></path>
                                </svg></div>

                                <div class="mute-speaker"><svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
                                <path d="m39,14-17,15H6V48H22l17,15z" fill="#fff" stroke-linejoin="round"></path>
                                <path d="m49,26 20,24m0-24-20,24" fill="#fff" stroke-linecap="round"></path>
                                </svg></div>
                            </label>
                        </div>
                    </div>
                </div>               
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZmFzaGlvbnxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                    <div class="carousel-text d-block position-absolute">
                        <p class="animate__animated animate__fadeInUp">Good Morning</p>
                        <p class="animate__animated animate__fadeInUp animate__delay-1s">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A tempora obcaecati facere voluptate distinctio, adipisci nemo vero minus harum iure.</p>
                        <a href="#" class="shopNowBtn">SHOP NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <iframe id="sliderVideo" width="auto" src="https://www.youtube.com/embed/iesoe2JF_AY?controls=0&rel=0&modestbranding=1&fs=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <!-- __________slider_____section_____ -->

        <!-- <section class="slider_area" id="slider_section">
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
        </section> -->

        <!-- _______offersection___________ -->

        <?php if (!empty($getWelcomeStoreProducts)) { ?>
            <div class="box-25">
                <section class="offerSection_startHere my-lg-5 my-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center ">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2 class="m-0 text-dark">Offers</h2>
                                    </div>
                                    <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                        <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper offerSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <img src="<?= base_url('assets/new_website/img/bn1.avif') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="welcome_startingSection blog__area my-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-40">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2 class="m-0 text-dark">Welcome To Store </h2>
                                    </div>
                                    <div class="section__sub-title  wow fadeInDown" data-wow-duration="2s">
                                        <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- <div class="welcome__slider owl-carousel">
                                    <?php
                                    // var_dump($getWelcomeStoreProducts[0]);
                                    foreach ($getWelcomeStoreProducts as $eachStoreProducts) {
                                        // $icons = explode(',', $eachStoreProducts->image1);
                                    ?>
                                        <div class="blog__item">
                                            <div class="blog__thumb fix ">
                                                <a href="#" class="w-img"><img class="image-placeholder" src="<?= $eachStoreProducts->image ?>" alt="img"></a>
                                            </div>
                                            <div class="blog__content">
                                                <h4><a href="#"><?= $eachStoreProducts->title ?></a></h4>
                                                <div class="blog__meta ">
                                                    <span>Min.50%off</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="blog__item">
                                        <div class="blog__thumb fix ">
                                            <a href="#" class="w-img"><img class="image-placeholder" src="https://i.pinimg.com/474x/8c/a1/2b/8ca12b1cddece82596cfbbb42f85147b.jpg" alt="img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="#"><?= $eachStoreProducts->title ?></a></h4>
                                            <div class="blog__meta ">
                                                <span>Min.50%off</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__item">
                                        <div class="blog__thumb fix ">
                                            <a href="#" class="w-img"><img class="image-placeholder" src="https://i.pinimg.com/474x/8c/a1/2b/8ca12b1cddece82596cfbbb42f85147b.jpg" alt="img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="#"><?= $eachStoreProducts->title ?></a></h4>
                                            <div class="blog__meta ">
                                                <span>Min.50%off</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__item">
                                        <div class="blog__thumb fix ">
                                            <a href="#" class="w-img"><img class="image-placeholder" src="https://i.pinimg.com/474x/8c/a1/2b/8ca12b1cddece82596cfbbb42f85147b.jpg" alt="img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="#"><?= $eachStoreProducts->title ?></a></h4>
                                            <div class="blog__meta ">
                                                <span>Min.50%off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="swiper welcomeSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="welcomeSliderCard">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="height: 100%; width: 100%; object-fit: cover" alt="">
                                                <div class="p-2 welcomeSliderCardText text-center" style=" ">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="fs12">Starts from Rs. 999</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php } ?>
        <!-- ___seller___banner_____ -->
        <section class="offerSection_startHere SaleBannerSectionhere my-5">
            <div class="banner__area-2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">Heading</h2>
                                </div>
                                <div class="section__sub-title  wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor earum consequatur quam alias suscipit! Ratione.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-lg-12 mx-0 px-0">
                            <!-- <div id="sellerBanner_owl" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner__item-2 banner-left p-relative mb-30 pl-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="swiper fourthSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div>
                                            <img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <img src="<?= base_url('assets/new_website/img/banner1.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="box-25">

            <!-- ____combo____product____ -->
            <section class="product__area comboProductArea my-5" id="view_Third_popup">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-55">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">New And Core Collection </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid combo_section_Desktopview">
                    <div class="product__banner p-relative">
                        <div class="product__banner-inner p-absolute fix d-none d-lg-block">
                            <div class="product__banner-img large-image">
                                <a href="#"><img src="<?= base_url('assets/new_website/img/combo.webp') ?>" id="mainImage" alt="product-banner"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 ">
                                <div class="product__slider-2 owl-carousel" id="comboProducts">
                                    <div class="product__item ">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a>
                                                        <br>
                                                        ₹ 1,998 Regular price
                                                    </h4>
                                                    <span></span> &nbsp;
                                                    <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>

                                                    <div class="product__price transition-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                    <img class="product__thumb-2" src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>₹ 1,998 Regular price</span>&nbsp;
                                                        <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success">(60% Off)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                                <div class="thumbnails owl-carousel" id="combo_slider">
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="thumb" alt="product-img">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo3.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo4.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="thumb" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="thumb" alt="product-img">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid combo_section_Mobileview">
                    <div class="product__banner p-relative">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="comboProductsMobile owl-carousel">
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo2.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo3.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo4.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row ">
                                            <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                                <div class="product__wrapper ">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/combo1.webp') ?>" class="h-100" alt="product-img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5 combo_parts_img">
                                                <div class="product__wrapper">
                                                    <div class="product__thumb mb-40">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative mb-10">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__wrapper">
                                                    <div class="product__thumb">
                                                        <a href="#" class="w-img">
                                                            <img src="<?= base_url('assets/new_website/img/bag1.avif') ?>" alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__content p-relative">
                                                        <div class="product__content-inner">
                                                            <h4><a href="#"> Ava Casual Chain Loafers</a></h4>
                                                            <span class="old-price">₹ 4,995 </span><span>Sale price <span class="text-success text-nowrap">(60% Off)</span>
                                                            </span>
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
            <!-- ______Latest Collections______ -->
            <section class="sale__area mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="text-dark m-0">Latest Collections</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- <div class="sale__area-slider-2 owl-carousel latest_collection">
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://m.media-amazon.com/images/I/41+HM8MhyKL._AC_UF480,600_SR480,600_.jpg" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://m.media-amazon.com/images/I/71CLU0SCWwL._SY741_.jpg" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://netose.in/cdn/shop/files/27A_540x.jpg?v=1712500288" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Aurelia</span>
                                                <h4><a href="#">Cotton Floral Printed Dress </a></h4>
                                                <span class="mb-4">₹1,280</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="<?= base_url('assets/new_website/img/img2.jpg') ?>" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://cdn.shopify.com/s/files/1/0554/7530/6627/files/kostume-2.jpg?v=1688130819" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="https://kostumecounty.com/cdn/shop/files/IMG_3576_300x300.jpg?v=1687846468" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="<?= base_url('assets/new_website/img/latestcollection.avif') ?>" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">Helsa</span>
                                                <h4><a href="#">The Amber Dress</a></h4>
                                                <span class="mb-4">₹24,849.18</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="swiper latestSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="latestSliderCard">
                                            <div class="imgCont">
                                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                            </div>
                                            <div class="p-3 text-left latestSliderCardText">
                                                <p class="m-0">MENS WEAR</p>
                                                <div class="d-flex justify-content-between align-items-center mt-1">
                                                    <span class="fs12 text-secondary" style="line-height:1.1;">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                                    <span class="fs16 price">₹299</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ____banner_img____ -->
        <!-- <section class="banner_one_section mt-4">
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
        </section> -->
        <section>
            <div class="container mb-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title-wrapper text-center ">
                            <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                <h2 class="m-0 text-dark">Offers</h2>
                            </div>
                            <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showcaseSection">
                <a href="#" class="shopNowBtn">SHOP NOW</a>
            </div>
        </section>

        <div class="box-25">
            <section class="sale__area pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">Our Combo's</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper comboSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog__item">
                                            <div class="blog__thumb">
                                                <a href="#"><img src="https://m.media-amazon.com/images/I/81rYMYCiyaL._AC_UL480_FMwebp_QL65_.jpg" alt="img"></a>
                                            </div>
                                            <div class="overlay_add">
                                                <div class="lastText">
                                                    <p>Women Kurta</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ______our_productSection_____ -->
            <section class="sale__area productsSection_Start my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">Our Products </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper productSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <a href="#">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </a>
                                        <span>Bestsellers</span>
                                    </div>
                                    <div class="img-card">
                                        <a href="#"><img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt=""></a>
                                        <span>Bestsellers</span>
                                    </div>
                                    <div class="img-card">
                                        <a href="#"><img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt=""></a>
                                        <span>Bestsellers</span>
                                    </div>
                                    <div class="img-card">
                                        <a href="#"><img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt=""></a>
                                        <span>Bestsellers</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border rounded-lg p-4 productSliderCard text-left bg-white">
                                <p>Revamp your style</p>
                                <div class="img-container mb-2">
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="img-card">
                                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="#" class="fs12">Explore more <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-none d-sm-none d-xs-block d-block swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </section>
            <section class="sale__area  our_storesSection my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">Our Stores</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="m-0">Find everything for your every need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <!-- <div class="bagProduct__slider owl-carousel">
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="storeSliderCard border rounded-lg overflow-hidden text-decoration-none">
                                        <div class="imgCont">
                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="m-0">MENS WEAR</p>
                                            <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                            <div class="swiper storeSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="storeSliderCard border rounded-lg overflow-hidden ">
                                            <a href="#" class="text-decoration-none">
                                                <div class="imgCont">
                                                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                                                </div>
                                                <div class="p-3 text-left">
                                                    <p class="m-0">MENS WEAR</p>
                                                    <p class="m-0 fs10 text-secondary" >Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
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
                                    <h2 class="text-dark m-0">Pre Book</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion
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
                            <div class="col-6 p-1">
                                <figure class="position-relative">
                                    <div class="prebookTag">
                                        <div class="triangle_top_left"></div>
                                        <h2>
                                            <div>515 New</div>
                                            <div>Arrivals</div>
                                        </h2>
                                    </div>
                                    <img class="prebookimg" src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-6 p-1">
                                <figure class="position-relative">
                                    <div class="prebookTag">
                                        <div class="triangle_top_left"></div>
                                        <h2 style="margin-top: 20px;margin-left: -8px;">
                                            <div class="text-center">Dress to</div>
                                            <div>Pre order now</div>
                                        </h2>
                                    </div>
                                    <img class="prebookimg" src="https://images.pexels.com/photos/7505254/pexels-photo-7505254.jpeg?cs=srgb&dl=pexels-rnthlcueto-7505254.jpg&fm=jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sale__area  pt-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class=" pre_order_slider  owl-carousel">
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="prebookSliderCard">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                        <div class="p-3">
                                            <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                            <p class="m-0 fs12">Gossamer Grace</p>
                                            <button class="btn mt-2 fs12">PRE-ORDER</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="swiper prebookSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="prebookSliderCard">
                                            <div>
                                                <img src="<?= base_url('assets/new_website/img/product.webp') ?>" alt="">
                                                <div class="p-3 text-left">
                                                    <p class="font-weight-bold text-dark fs16 m-0">Armani</p>
                                                    <p class="m-0 fs12">Gossamer Grace</p>
                                                    <button class="btn mt-2 fs12">PRE-ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new on slick pattern -->
            <section class="pro-content pro-tab-content my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="text-dark m-0">New On Slick Pattern</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="products-area desktop_view_newONSlickPattern">
                        <!-- desktop view -->
                        <div class="row prebook-row newOnSlick-col weekend_style">
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- __mobile_viewSection__ -->

                    <div class="row mobileViewNEWOnSlickPattern">
                        <div class="col-12">
                            <!-- <div class=" pre_order_slider  owl-carousel">
                                <div class="position-relative">
                                    <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <img src="https://images.meesho.com/images/products/343616323/lcbl1_512.webp" style="height: 280px; object-fit: cover;" alt="">
                                    <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                        <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                        <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="swiper newOnSlickSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="position-relative">
                                            <img src="https://i.pinimg.com/originals/27/b9/0f/27b90f8f9656bd2ef766c41359566c5d.jpg" style="height: 280px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 newOnSlickInner" style="bottom: 0;">
                                                <p class="m-0 pl-2 fs16 text-light font-weight-bold">Weekend Style</p>
                                                <button class="btn rounded-0 font-weight-bold newOnSlick-btn">SHOP NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ____our Catelog_____ -->
            <section class="sale__area catelog_lookbook my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="m-0 text-dark">Download Lookbook</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-secondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper catalogSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brochureCard rounded-lg overflow-hidden position-relative">
                                            <img src="https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="">
                                            <div class="text-left p-2 brochureCardDetails">
                                                <p class="m-0 text-dark">Brocher Name</p>
                                                <div class="d-flex align-items-center text-dark fs12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <button class="btn m-0 p-0 thumbs-up-icon"><i class="fa-regular fa-thumbs-up"></i> 122k</button> -->
                                                        <div class="heart-container" title="Like">
                                                            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                                                            <div class="svg-container">
                                                                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                                                    </path>
                                                                </svg>
                                                                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                                                    <polygon points="10,10 20,20"></polygon>
                                                                    <polygon points="10,50 20,50"></polygon>
                                                                    <polygon points="20,80 30,70"></polygon>
                                                                    <polygon points="90,10 80,20"></polygon>
                                                                    <polygon points="90,50 80,50"></polygon>
                                                                    <polygon points="80,80 70,70"></polygon>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">Like</label>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn m-0 p-0 mt-1"><i class="fa fa-circle-down"></i> 500k</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="downloadBtn">
                                                <a href="#" class="download-btn" id="download-btn"><img src="<?=base_url('assets/new_website/img/downloadIcon.png') ?>" style="height: 32px; width: 32px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ____banner_img____ -->
        <section class="banner_one_section my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title-wrapper text-center mb-40">
                            <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                <h2 class="m-0 text-dark">Heading</h2>
                            </div>
                            <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, saepe!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show_banner_two banner__area-2">
                <div class="onLayer">
                    <div class="container-fluid  px-0 m-0">
                        <dirv class="row px-0 m-0">
                            <div class="col-lg-12 text-center pt-4 px-0">
                                <div class="content_here">
                                    <div class="position-absolute sf-hero__content pt-lg-5">
                                        <span class=" text-white sf-hero__subtitle">BRAND STORY</span><br><br>
                                        <h2 class="sf-hero__title text-white font-weight-bold">Launched in 2006, Vanilla Moon is an ode
                                            to <br> quality and
                                            craftsmanship.</h2>
                                        <div class="sf-hero__text ">
                                            <span class="text-white lh-md fs12">Our vision is to provide luxury yet
                                                affordable footwear to modern women
                                                while
                                                paving the way for
                                                sustainability and social consciousness.</span>
                                        </div><br><br>
                                        <a href="#" class="os-btn os-btn-2">Learn More</span></a>
                                    </div>
                                </div>
                        </dirv>
                    </div>
                </div>
            </div>
        </section>
        <div class="box-25">
            <section class="sale__area catelog_lookbook my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="text-dark m-0">Our Clients</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-scondary">Our one-stop destination for every style, trend, occasion you're shopping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper clientSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg overflow-hidden">
                                            <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 360px; object-fit: cover;" alt="">
                                            <div class="position-absolute w-100 p-2 d-flex align-items-center rounded-lg" style="bottom: 0;background-color: rgba(0,0,0,0.5);">
                                                <img src="https://cdn.shopify.com/s/files/1/2542/7564/files/IMG_2219.jpg?v=1697873297&width=400&height=400" style="height: 40px; width: 40px; border-radius: 100vh; object-fit: cover;" alt="">
                                                <div class="pl-2 text-left">
                                                    <span class="fs12 text-white" style="line-height: 1;">Maroon Blush Embroidered Georgette Suit Set</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ___our promises_section___ -->
            <section class="pro-content testimonails-content my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2 class="text-dark m-0">Our Promise</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p class="text-scondary">Our one-stop destination for every style, trend, occasion you're shopping
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
                                <div class=""><img class=" lazy promise-img" src="<?=base_url('assets/new_website/img/shopping-cart.png') ?>" alt="" style="width: 15%;"></div>
                                <figcaption class="text-capitalize mt-2 font-weight-bold" style="line-height: 1.1;">Love this Look</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="<?=base_url('assets/new_website/img/return.png') ?>" alt="" style="width: 15%;">
                            <figcaption class="text-capitalize mt-2 font-weight-bold" style="line-height: 1.1;">Easy Returns</figcaption>

                        </div>
                        <div class="col-md-4  col-sm-4 col-4 text-center">
                            <img class="img-fluid  lazy promise-img" src="<?=base_url('assets/new_website/img/delivery.png') ?>" alt="" style="width: 18%;">
                            <figcaption class="text-capitalize mt-2 font-weight-bold " style="line-height: 1.1;">Quick Delivery</figcaption>

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
                            <h2 class="text-center m-0 font-weight-bold">Stay Connected</h2>
                            <p class="text-center fs12">Follow us on our social media accounts to get even more tasty
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper1 = new Swiper('.offerSwiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                autoplay:true,
                loop: true,
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 2
                    }
                }
        });

        var swiper2 = new Swiper('.welcomeSwiper', {
                slidesPerView: 1,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                    },
                    500: {
                        slidesPerView: 2
                    },
                    700: {
                        slidesPerView: 3
                    },
                    900: {
                        slidesPerView: 4
                    },
                    1100: {
                        slidesPerView: 5
                    }
                }
        });

        var swiper3 = new Swiper('.fourthSwiper', {
            slidesPerView: 1,
                spaceBetween: 40,
                autoplay:true,
                loop: true,
        });

        var swiper4 = new Swiper('.latestSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1.5,
                    },
                    500: {
                        slidesPerView: 2
                    },
                    700: {
                        slidesPerView: 3
                    },
                    900: {
                        slidesPerView: 4
                    },
                    1100: {
                        slidesPerView: 5
                    }
                }
        });

        var swiper5 = new Swiper('.productSwiper', {
                slidesPerView: 1,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    650: {
                        slidesPerView: 1
                    },
                    700: {
                        slidesPerView: 2
                    },
                    950: {
                        slidesPerView: 2
                    },
                    1100: {
                        slidesPerView: 3
                    },
                    1420: {
                        slidesPerView: 4
                    }
                }
        });

        var swiper6 = new Swiper('.comboSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    600: {
                        slidesPerView: 1.5
                    },
                    700: {
                        slidesPerView: 2
                    },
                    950: {
                        slidesPerView: 3
                    },
                    1100: {
                        slidesPerView: 4
                    },
                    1260: {
                        slidesPerView: 5
                    }
                }
        });

        var swiper6 = new Swiper('.storeSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    600: {
                        slidesPerView: 1.5
                    },
                    700: {
                        slidesPerView: 2
                    },
                    950: {
                        slidesPerView: 3
                    },
                    1100: {
                        slidesPerView: 4
                    },
                    1260: {
                        slidesPerView: 5
                    }
                }
        });
        
        var swiper7 = new Swiper('.prebookSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    500: {
                        slidesPerView: 2
                    },
                    600: {
                        slidesPerView: 2.5
                    },
                    700: {
                        slidesPerView: 3
                    },
                    950: {
                        slidesPerView: 4
                    },
                    1100: {
                        slidesPerView: 5
                    },
                    1260: {
                        slidesPerView: 6
                    }
                }
        });

        var swiper8 = new Swiper('.newOnSlickSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 0,
                autoplay:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    500: {
                        slidesPerView: 2
                    },
                    600: {
                        slidesPerView: 2.5
                    },
                    750: {
                        slidesPerView: 3
                    },
                    950: {
                        slidesPerView: 4
                    },
                    1100: {
                        slidesPerView: 5
                    },
                    1260: {
                        slidesPerView: 6
                    }
                }
        });

        var swiper9 = new Swiper('.catalogSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:false,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    500: {
                        slidesPerView: 2
                    },
                    600: {
                        slidesPerView: 2
                    },
                    650: {
                        slidesPerView: 2.5
                    },
                    850: {
                        slidesPerView: 3
                    },
                    950: {
                        slidesPerView: 4
                    },
                    1150: {
                        slidesPerView: 4
                    },
                    1260: {
                        slidesPerView: 5
                    }
                }
        });

        var swiper10 = new Swiper('.clientSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 18,
                autoplay:false,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    500: {
                        slidesPerView: 2
                    },
                    600: {
                        slidesPerView: 2
                    },
                    650: {
                        slidesPerView: 2.5
                    },
                    850: {
                        slidesPerView: 3
                    },
                    1000: {
                        slidesPerView: 3.5
                    },
                    1150: {
                        slidesPerView: 4
                    },
                    1260: {
                        slidesPerView: 5
                    }
                }
        });

        const video = document.getElementById('myVideo');
        const muteBtn = document.querySelector('.muteBtn');

        muteBtn.addEventListener('click', () => {
            if (video.muted) {
                video.muted = false;
            } else {
                video.muted = true;
            }
        });

        const cookiesCont = document.querySelector('.cookiesCont');
        const acceptBtn = document.querySelector('.acceptBtn');
        const declineBtn = document.querySelector('.declineBtn');

        window.addEventListener('load', () => {
            cookiesCont.style.display = 'block';
        });

        acceptBtn.addEventListener('click', () => {
            cookiesCont.style.display = 'none';
        });

        declineBtn.addEventListener('click', () => {
            cookiesCont.style.display = 'none';
        });

        window.addEventListener('scroll', function() {
            if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 40)) {
                document.querySelector('.homeBottomNav').style.transform = 'translateY(100%)';
            } else {
                document.querySelector('.homeBottomNav').style.transform = 'translateY(0%)';
            }
        });
        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>