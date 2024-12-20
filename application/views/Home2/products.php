<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Products </title>
    <?php include('include/cssLinks.php'); ?>
</head>

<body>
<style>
        :root {
            --color1: #8340A1;
            --color2: #e83e8c;
            --color3: #068FFF;
            --color4: rgb(243 244 246);
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

        body.sidebar-open{
            overflow-y: hidden;
        }

        body.sidebar-open::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10000;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        input:focus {
            outline: none;
            box-shadow: none !important;
            border-color: var(--color2) !important;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        img {
            width: 100%;
        }

        .fontLeague{
            font-family: 'League Spartan', sans-serif;
        }

        .saleTimerStrip {
            background-color: rgba(0, 0, 0, 0.02);
            box-shadow: inset 0 0 4px 2px rgb(0, 0, 0, 0.03);
            padding-block: 4px;
            font-weight: 500;
            text-align: center;
            font-weight: 300;
        }

        .saleTimerStrip span {
            color: var(--color2);
            font-weight: 600;
        }

        button:focus,
        .btn:focus,
        a:focus {
            box-shadow: none;
            outline: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            right: 0;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 10000;
        }

        .dropdown-mobile .dropdown-content {
            bottom:46px;
            left:12px;
            min-width: 226px;
        }

        .dropdown-content a {
            color: black;   
        }

        .dropdown-content a:hover {
            background-color: rgba(0, 0, 0, 0.1);   
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .productContainer {
            display: grid;
            grid-template-columns: 2fr 10fr;
        }

        .filtersContainer {
            background-color: #F8F9FA;
            position: sticky;
            height: 100dvh;
            overflow-y: scroll;
            top: 0;
            min-width: 255px;
        }

        .filtersContainer::-webkit-scrollbar {
            display: none;
        }

        .productCard {
            position: relative;
            /* transition: all .2s ease-in-out; */
            border-radius: 4px;
            z-index: 10;
        }

        .productCard:hover .productCardHoverBtn,
        .productCard:hover .similarBtn,
        .productCard:hover .quickViewBtn {
            opacity: 1;
        }

        .productImgContainer{
            max-width: 240px;
            /* height: 320px; */
            object-fit: contain;
        }
        
        .card-img{
            height: 320px;
            width: 100%;
            object-fit: cover;
        }

        .newTag,
        .saleTag,
        .hotLookTag,
        .preBookTag,
        .trendyTag,
        .summerTag,
        .royalTag,
        .weekendTag,
        .discountTag {
            position: absolute;
            top: 0;
            left: 22px;
            z-index: 10;
            animation: swing ease-in-out 1s infinite alternate;
            transform-origin: center -30px;
            filter: drop-shadow(4px 4px 2px rgba(0, 0, 0, 0.5));
        }

        .newTag .string,
        .saleTag .string,
        .hotLookTag .string,
        .preBookTag .string,
        .trendyTag .string,
        .summerTag .string,
        .royalTag .string,
        .weekendTag .string,
        .discountTag .string {
            position: absolute;
            z-index: 12;
            left: 18px;
            height: 20px;
            width: 2px;
            background-color: var(--color2);
        }

        .newTag .circle,
        .saleTag .circle,
        .hotLookTag .circle,
        .preBookTag .circle,
        .trendyTag .circle,
        .summerTag .circle,
        .royalTag .circle,
        .weekendTag .circle,
        .discountTag .circle {
            width: 12px;
            height: 12px;
            border: 2px solid var(--color2);
            border-radius: 50%;
            background-color: white;
            margin: 0 4px;
            position: absolute;
            left: 9px;
            top: 16px;
            z-index: 11;
        }

        .newTag .tagCard,
        .saleTag .tagCard,
        .hotLookTag .tagCard,
        .preBookTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 60px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .newTag p {
            position: absolute;
            transform: rotate(-25deg);
            top: 40px;
            left: 4px;
        }

        .saleTag p {
            position: absolute;
            transform: rotate(-30deg);
            top: 40px;
            left: 2px;
        }

        .hotLookTag p {
            position: absolute;
            top: 34px;
            left: 3px;
        }

        .preBookTag p {
            position: absolute;
            top: 34px;
            left: 2px;
        }

        .trendyTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 80px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .summerTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 88px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .royalTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 80px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .weekendTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 96px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .discountTag .tagCard {
            background-color: var(--color1);
            position: absolute;
            top: 12px;
            height: 96px;
            width: 38px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .trendyTag p {
            position: absolute;
            top: 48px;
            left: -10px;
            transform: rotate(-90deg);
        }

        .summerTag p {
            position: absolute;
            top: 52px;
            left: -12px;
            transform: rotate(-90deg);
        }

        .royalTag p {
            position: absolute;
            top: 44px;
            left: -4px;
            transform: rotate(-90deg);
        }

        .weekendTag p {
            position: absolute;
            top: 54px;
            left: -15px;
            transform: rotate(-90deg);
        }

        .discountTag p {
            position: absolute;
            top: 54px;
            left: -12px;
            transform: rotate(-90deg);
        }

        @keyframes swing {
            0% {
                transform: rotate(3deg);
            }

            100% {
                transform: rotate(-3deg);
            }
        }

        .productCardHoverBtn {
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            border-bottom-left-radius: 8px;
            overflow: hidden;
            transition: all .2s ease-in-out;
            z-index: 999;
        }

        .productCardHoverBtn button {
            padding: 8px 12px;
            background-color: rgb(0, 0, 0, 0.25);
            border: 0;
            transition: all .1s ease-in-out;
        }

        .productCardHoverBtn button img {
            width: 20px;
            transition: all .2s ease-in-out;
        }

        .productCardHoverBtn button:hover {
            background-color: rgb(0, 0, 0, 0.5);
        }

        .productCardHoverBtn button:hover img {
            transform: scale(1.1);
        }

        .similarBtn {
            position: absolute;
            bottom: 8px;
            right: 8px;
            opacity: 0;
            transition: all .2s ease-in-out;
            z-index: 999;
        }

        .similarBtn button {
            padding: 4px 6px;
            outline: none;
            border: none;
            border-radius: 100vh;
        }

        .similarBtn button:hover .similarText {
            display: inline;
        }

        .similarBtn button img {
            width: 20px;
            height: 20px;
        }

        .similarText {
            display: none;
            margin: 0;
            padding: 0;
            font-size: 12px;
            font-weight: 600;
            color: var(--color2);
            margin-left: 4px;
        }

        .mobileBottomNavbar {
            background-color: var(--color4);
            width: 100%;
            position: fixed;
            bottom: 0;
            right: 0;
            display: none;
            z-index: 100;
        }

        .mobileBottomNavbar button {
            border: 0;
            padding-block: 12px;
            font-size: 14px;
            color: rgb(0, 0, 0, 0.75);
        }

        .blinkingText {
            animation: blink 1.5s linear infinite;
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
            z-index: 999;
        }

        a.toolTip::after {
            content: attr(tip);
            z-index: 999;
            background-color: #FCFCFC;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14;
            line-height: 1.25em;
            width: 160px;
            padding: 5px 10px;
            border-radius: 6px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .65);
            position: absolute;
            top: -76px;
            right: -35px;
            display: none;
        }

        a.toolTip:before {
            position: absolute;
            z-index: 999;
            content: "";
            top: 15px;
            left: 0px;
            border-right: 7px transparent solid;
            border-left: 7px transparent solid;
            display: none;
        }

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
        }

        a.toolTip:hover:before {
            display: block;
        }

        .sidebar {
            height: 100%;
            background-color: white;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            transition: 0.3s;
            padding-top: 28px;
            z-index: 100000;
        }

        .sidebar::-webkit-scrollbar {
            width: 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 12px;
            right: 12px;
        }

        .sidebar-content {
            padding: 15px;
            display: grid;
            gap: 24px;
            grid-template-columns: 1fr 1fr;
        }

        .filterSidebarContent {
            display: grid;
            gap: 8px;
            padding: 8px;
        }

        .productCardSidebar {
            transition: all .2s ease-in-out;
        }

        .productCardSidebar:hover {
            scale: 1.02;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .productCardSidebar .imageContainer {
            max-width: 240px;
            max-height: 320px;
        }

        .imageContainer {
            display: inline-block;
            position: relative;
        }

        .imageContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .imageContainer input[type="checkbox"] {
            z-index: 10;
            zoom: 1.25;
            position: absolute;
            top: 8px;
            left: 8px;
        }

        .rating {
            font-size: 12px;
            position: absolute;
            bottom: 4px;
            left: 4px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px 4px;
            border-radius: 4px;
            z-index: 99999;
        }

        .cartCounterBtn {
            position: relative;
        }

        .cartCounter {
            position: absolute;
            top: -8px;
            right: -10px;
            background-color: var(--color1);
            color: white;
            font-size: 10px;
            padding:4px;
            border-radius: 100vh;
            line-height: 1;
        }

        .newsStrip {
            background-color: rgba(205, 254, 194,0.5);
            color:black;
            display: flex;
            align-items: center;
            gap:4px;
            padding: 4px 8px;
        }

        .newsStrip p{
            font-weight: 300;
        }

        .newsStrip .icon{
            background-color: white;
            color:green;
            padding: 4px 8px;
            border-radius:100vh;
        }

        dialog {
            position: fixed;
            width: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2rem;
            background: white;
            border-radius: 4px;
            border: 0;
            box-shadow: 0 5px 30px 0 #000;
            animation: fadeIn 300ms ease both;
        }

        dialog::backdrop {
            animation: fadeIn 300ms ease both;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        dialog .x {
            border: none;
            background: none;
            position: absolute;
            top: 14px;
            right: 14px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
        }

        .quickViewDialog .x {
            top: -10px;
            right: 8px;
        }

        dialog .x:focus {
            outline: none;
        }

        dialog h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }

        dialog p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
        }

        dialog p a:visited {
            color: #000;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        #toaster {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 1000;
        }

        #toaster div {
            display: flex;
        }

        .toast {
            display: flex;
            align-items: center;
            min-width: 300px;
            margin-bottom: 10px;
            padding: 15px;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateX(100%);
            transition: transform 0.5s, opacity 0.5s;
        }

        .toast img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .toast .message {
            flex: 1;
            font-weight: bold;
        }

        .toast button {
            background-color: transparent;
            font-weight: bold;
            color: var(--color2);
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .toast button:hover {
            background-color: #f0f0f0;
        }

        .toast.show {
            opacity: 1;
            transform: translateX(0);
        }

        .toast.success {
            background-color: #333333;
        }

        .toast.error {
            background-color: #dc3545;
        }

        #toaster2 {
            position: fixed;
            top: 80px;
            right: 50%;
            transform: translateX(50%);
            z-index: 1000;
        }

        .toast2 {
            min-width: 250px;
            margin-bottom: 10px;
            padding: 15px;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(-100%);
            transition: transform 0.5s, opacity 0.5s;
        }

        .toast2.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast2.success {
            background-color: #333333;
        }

        .toast2.error {
            background-color: #dc3545;
        }

        .sizeBtn {
            background-color: white;
            border: 2px solid var(--color1);
            width: 40px;
            height: 40px;
            outline: none !important;
            border-radius: 12px;
            margin-top: 0.5rem;
            transition: all 200ms ease;
        }

        .sizeBtn:focus {
            background-color: var(--color2);
            color: white;
            border-color: var(--color2);
        }

        .sizeBtn:hover {
            background-color: var(--color2);
            color: white;
            border-color: var(--color2);
        }

        .stockBtns {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stockBtns .outOfStock {
            position: relative;
            background-color: rgb(0, 0, 0, 0.35);
            pointer-events: none;
            cursor: not-allowed;
        }

        .outOfStock::after {
            content: "";
            position: absolute;
            top: -4px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 1.5px;
            height: 44px;
            background-color: var(--color1);
            z-index: 2;
        }

        .colorBtnGroup{
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 0.5rem;
        }
        
        .colorBtn {
            padding: 8px;
            border-radius: 100vh;
            border:none;
            outline: none;
            transition: all 200ms ease;
        }

        .colorBtn:hover {
            transform: scale(1.1);
        }

        .colorBtn.active {
            border: 2px solid orange;
        }

        .dialogBtns{
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 1.5rem;
        }

        .dialogBtns button{
            width: 100%;
        }

        .detailLink{
            text-decoration: underline;
            font-weight: 300;
            font-size: 12px;
        }

        .quickViewBtn{
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: all .2s ease-in-out;
            z-index: 999;
            white-space: nowrap;
        }

        .quickViewBtn button{
            outline: none;
            border: none;
            color: white;
            display: flex;
            align-items: center;
            padding: 4px 8px;
            font-size: 12px;
            background-color: #ffffff50;
        }

        .quickViewSimilarProducts{
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 0.75rem;
        }

        .swiper {
            max-width: 300px;
            max-height:360px;
        }

        .quickViewSwiper {
            /* display: block; */
            width: 100%;
            /* height: 80px; */
        }

        .quickViewSwiper img{
            width: 60px;
            height: 80px;
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

        .swiper-pagination-bullet-active {
             background: var(--color2)!important;
         }

        .swiper-button-next,
        .swiper-button-prev{
            background-color:rgba(255, 255, 255, 0.6);
            font-size: 16px;
            border-radius: 100vh;
            padding: 0px 14px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: var(--color2);
            font-size: 12px
        }

        .pincodeErrorMsg{
            display: none;
            font-size: 12px;
        }

        .blinkingText {
            animation: blink 1.5s linear infinite;
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @media (max-width: 1000px) {

            dialog{
                width: 80%;
            }

            .quickViewBtn button{
                font-size: 10px;
            }
        }

        @media (max-width: 768px) {
            .productContainer {
                grid-template-columns: 1fr;
            }

            .filtersContainer,
            .hideOnMobile {
                display: none;
            }

            .mobileBottomNavbar {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .productCard .productCardHoverBtn,
            .productCard .similarBtn {
                opacity: 1;
            }

            .productCard:hover {
                transform: scale(1);
                box-shadow: none;
            }

            .quickViewBtn {
                display: none;
            }

            dialog{
                width: 80%;
            }
            .subHeaderSection {
                padding-top: 48px;
            }
        }

        @media (max-width: 568px) {

            dialog{
                width: 90%;
            }
        }

        @media (max-width: 500px) {
            .card-img{
                height: 240px;
            }
        }
    </style>
    <main>
        <div id="toaster"></div>
        <div id="toaster2"></div>
        <dialog class="quickViewDialog" id="dialog">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    <p class="text-center">
                        <a href="#" class="detailLink">View full details</a>
                    </p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <button id="closeModalBtn" aria-label="close" onClick="closeQuickViewDialog()" class="x closeSizeModalBtn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <p class="font-weight-bold fontLeague m-0 p-0" style="font-size: 20px;">Lorem ipsum dolor sit amet</p>
                    <p class="text-secondary m-0 p-0" style="font-size: 12px;">T-Shirt</p>
                    <p>₹120</p>
                    <div>
                        <p class="m-0 p-0 fontLeague">Size:</p>
                            <div class="text-left stockBtns">
                                <button class="sizeBtn">XS</button>
                                <button class="sizeBtn outOfStock">S</button>
                                <button class="sizeBtn">M</button>
                                <button class="sizeBtn">L</button>
                                <button class="sizeBtn">XL</button>
                                <button class="sizeBtn">XXL</button>
                            </div>
                    </div>
                    <div class="mt-3">
                        <p class="m-0 p-0 fontLeague">Colors:</p>
                        <div class="colorBtnGroup">
                            <button class="colorBtn active" style="background-color: red"></button>
                            <button class="colorBtn" style="background-color: blue"></button>
                            <button class="colorBtn" style="background-color: yellow"></button>
                            <button class="colorBtn" style="background-color: green"></button>
                            <button class="colorBtn" style="background-color: black"></button>
                        </div>
                    </div>
                    <div class="dialogBtns">
                        <button class="btn" style="border:2px solid var(--color1); color: black;">ADD TO BAG</button>
                        <button class="btn" style="background-color: var(--color1); color: white;">BUY NOW</button>
                    </div>
                </div>
                <div class="col-12 border-top pt-3" style="margin-top: 1rem;">
                    <p class="m-0 p-0 fontLeague font-weight-bold mb-3">COMPLETE THE LOOK</p>
                    <!-- <div class="quickViewSimilarProducts">
                        <div>
                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="width: 100px;" alt="">
                            <div class="p-1 text-center">
                                <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="width: 100px;" alt="">
                            <div class="p-1 text-center">
                                <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="width: 100px;" alt="">
                            <div class="p-1 text-center">
                                <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="width: 100px;" alt="">
                            <div class="p-1 text-center">
                                <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="swiper quickViewSwiper">
                        <div class="swiper-wrapper">
                            <div>
                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"  alt="">
                                <div class="p-1 text-center">
                                    <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                    <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                                </div>
                            </div>
                            <div>
                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"  alt="">
                                <div class="p-1 text-center">
                                    <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                    <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                                </div>
                            </div>
                            <div>
                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"  alt="">
                                <div class="p-1 text-center">
                                    <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                    <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                                </div>
                            </div>
                            <div>
                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"  alt="">
                                <div class="p-1 text-center">
                                    <p class="m-0 p-0" style="font-size: 12px;">Lorem ipsum...</p>
                                    <p class="m-0 p-0 text-secondary font-weight-bold" style="font-size: 14px;">₹120</p>
                                </div>
                            </div>
                        </div>
                        <div class="quickSwiper-button-next"></div>
                        <div class="quickSwiper-button-prev"></div>
                    </div>
            </div>
        </dialog>
        <section class="d-lg-none d-md-none d-sm-block position-fixed top-0 w-100 bg-white" style="z-index: 10000;" >
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center text-dark">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <img src="<?= base_url('assets/new_website/img/favicon.png') ?>" class="ml-2" style="width: 40px;" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/search.png') ?>" style="width: 18px;" alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/heart.png') ?>" style="width: 20px;" alt="">
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
        <div class="mobileBottomNavbar">
            <div class="dropdown dropdown-mobile border p-2 rounded-lg text-dark">
                <p class="text-center m-0 p-0"><i class="fa-solid fa-sort mr-2"></i>SORT BY</p>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#">Sort by Featured</a>
                    <a class="dropdown-item" href="#">Sort by Newest</a>
                    <a class="dropdown-item" href="#">Sort by Price: Low to High</a>
                    <a class="dropdown-item" href="#">Sort by Price: High to Low</a>
                    <a class="dropdown-item" href="#">Sort by Category</a>
                </div>
            </div>
            <button onclick="openFilterSidebar()" class="btn border rounded-0"><i class="fa-solid fa-filter mr-1"></i>FILTERS
                <span class="text-secondary" style="font-size: 13px;">(5)</span></button>
        </div>
        <div id="sidebar" class="sidebar">
                <button class="btn position-absolute" style="top: 0; right: 0;" onclick="closeSidebar()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            <p class="font-weight-bold m-0 p-0 text-dark text-center" style="font-size: 16px;">SIMILAR PRODUCTS</p>
            <div class="sidebar-content">
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg') ?>" alt="">
                    </a>
                    <div class="pb-3">
                        <p class="m-0 mt-1 font-weight-bold text-dark" style="font-size: 16px;">Lorem, ipsum.</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            <span class="font-weight-bold text-danger" style="font-size: 14px;">35%</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="filterSidebar" class="sidebar" style="padding-top: 12px;">
            <button class="btn position-absolute" style="top: 0; right: 0;" onclick="closeFilterSidebar()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="filterSidebarContent">
                <p class="font-weight-bold m-0 p-0 text-dark" style="font-size: 18px;">FILTERS</p>
            <div class="accordion" id="accordionExample">
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingOne">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CATEGORIES
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Half sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Full sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        PRICE
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹100 to ₹200<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹200 to ₹400<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹400 to ₹500<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹500 to ₹1000<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingThree">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        COLOR
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: black; padding: 8px; border-radius: 100vh;"></div>
                                        Black
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: red; padding: 8px; border-radius: 100vh;"></div>
                                        Red
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: Yellow; padding: 8px; border-radius: 100vh;"></div>
                                        Yellow
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFour">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        DISCOUNT
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFive">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        OCCASION
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingSix">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        LAUNCHED IN
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <section class="subHeaderSection">
            <div class="newsStrip">
                <div class="icon">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
                <p class="m-0 p-0">Great news! Prices have dropped for one or more items since you wishlisted them.</p>
            </div>
        </section>
        <section class="saleTimerStripContainer border" style="margin-top:8px;">
            <div class="saleTimerStrip">
                <p class="m-0 text-secondary">Sale ends
                    in- <span>10</span>days:<span>10</span>hrs:<span>10</span>min:<span>10</span>sec
                </p>
            </div>
        </section>
        <section class="hideOnMobile text-dark">
            <div class="px-4 my-2">
                <ul class="d-flex" style="gap: 4px;font-size: 14px;">
                    <li><a href="#" class="text-secondary">Home /</a></li>
                    <li class="font-weight-bold">Products</li>
                </ul>
            </div>
            <div class="px-4 my-2">
                <p class="font-weight-bold">Men T-Shirts <span class="font-weight-normal text-secondary"
                        style="font-size: 14px;">- 100 items</span></p>
            </div>
        </section>
        <section>
            <div class="px-4 mt-2 text-dark hideOnMobile">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 14px;">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="font-weight-bold m-0">DELIVER TO PINCODE
                                <button class="btn p-0 pl-2 m-0 pincodeBtn" onClick="openPincodeForm()"
                                    style="font-size: 14px; color: var(--color1);">Check<i class="fa-solid fa-pen ml-1"></i></button>
                                    <a href="#" class="toolTip pincodeTooltip text-dark"
                                        tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                        <i class="fa-solid fa-circle-question text-secondary"></i>
                                    </a>
                            </p>
                            <div class="pincodeFormContainer pb-4">
                                <form id="pincodeForm" class="d-flex align-items-center">
                                    <input type="number" name="pincode" class="form-control pincodeInput" style="width: 150px; font-size: 14px" id=""
                                    placeholder="deliver to pincode">
                                    <button class="btn m-0 ml-1"
                                    style="font-size: 14px; background-color: var(--color1); color: white;">CHECK</button>
                                </form>
                                <p class="m-0 p-0 pincodeErrorMsg text-danger position-absolute" style="">Please enter valid pincode</p>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="m-0 p-0 font-weight-bold" style="font-size: 18px;">Lorem ipsum dolor sit amet.</p>
                            <p class="m-0 p-0 font-weight-light" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, eligendi?</p>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown border p-2 rounded-lg">
                            <span><i class="fa-solid fa-sort mr-2"></i>Sort by Recommended</span>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="#">Sort by Featured</a>
                                <a class="dropdown-item" href="#">Sort by Newest</a>
                                <a class="dropdown-item" href="#">Sort by Price: Low to High</a>
                                <a class="dropdown-item" href="#">Sort by Price: High to Low</a>
                                <a class="dropdown-item" href="#">Sort by Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="productContainer">
                <div class="filtersContainer">
                    <div class="font-weight-bold p-2 w-100 bg-white d-flex align-items-center justify-content-between"
                        style="width: 220px;">
                        <p class="m-0">FILTERS <span>(2)</span></p>
                        <button class="btn bt-sm p-0" style="color: var(--color1); font-size: 14px;">
                            <i class="fa-solid fa-rotate-right mr-1"></i>Reset</button>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingOne">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CATEGORIES
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Half sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">Full sleeve T-Shirts <span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        PRICE
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹100 to ₹200<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹200 to ₹400<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹400 to ₹500<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">From ₹500 to ₹1000<span class="text-secondary ml-1"
                                                style="font-size: 11px;">(100+)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingThree">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        COLOR
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: black; padding: 8px; border-radius: 100vh;"></div>
                                        Black
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: red; padding: 8px; border-radius: 100vh;"></div>
                                        Red
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">
                                        <div class="mr-1"
                                            style="background-color: Yellow; padding: 8px; border-radius: 100vh;"></div>
                                        Yellow
                                        <span class="text-secondary ml-1" style="font-size: 11px;">(100+)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFour">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        DISCOUNT
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingFive">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        OCCASION
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-2 rounded-0">
                            <div class="" id="headingSix">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark align-items-center fontLeague"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        LAUNCHED IN
                                        <i class="fa-solid fa-caret-down float-right"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="">
                                <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" name="" id="">
                                        <p class="m-0 pl-2">T-Shirts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="shadow-sm pl-4 pt-1 pb-3 hideOnMobile">
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                        <a href="#" class="text-secondary border rounded-pill p-1 text-decoration-none"
                            style="font-size: 12px;">T-Shirts<i class="fa-solid fa-xmark pl-1"></i></a>
                    </div>
                    <div class="row m-1 my-3">
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="d-lg-none d-md-none d-sm-none d-xs-block d-block col-12 p-1">
                            <a href="#">
                                <img src="<?= base_url('assets/new_website/img/appPoster2.png') ?>" style="object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="productCard col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6 col-6 p-1">
                            <!-- <div class="newTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">NEW</p>
                            </div> -->
                            <!-- <div class="saleTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white" style="font-size: 14px;">SALE</p>
                            </div> -->
                            <!-- <div class="hotLookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">HOT</span>
                                    <span style="font-size: 12px;">LOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="preBookTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 16px;">
                                    <span style="letter-spacing: 1px;">PRE</span>
                                    <span style="font-size: 12px;">BOOK</span>
                                </p>
                            </div> -->
                            <!-- <div class="trendyTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">TRENDY</p>
                            </div> -->
                            <!-- <div class="summerTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white m-0" style="font-size: 14px;">SUMMER</p>
                            </div> -->
                            <!-- <div class="royalTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>ROYAL</span>
                                    <span style="font-size: 12px; letter-spacing: 3.5px;">CLUB</span>
                                </p>
                            </div> -->
                            <!-- <div class="weekendTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 14px; line-height: 12px;">
                                    <span>WEEKEND</span>
                                    <span style="font-size: 12px; letter-spacing: 6px;">STYLE</span>
                                </p>
                            </div> -->
                            <div class="discountTag">
                                <div class="string"></div>
                                <div class="circle"></div>
                                <div class="tagCard"></div>
                                <p class="font-weight-bold text-white text-center m-0"
                                    style="font-size: 16px; line-height: 12px;">
                                    <span>20%</span>
                                    <span style="font-size: 12px; letter-spacing: 0px;">DISCOUNT</span>
                                </p>
                            </div>
                            <a href="#" class="card border-0 text-decoration-none">
                                <div class="position-relative">
                                        <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>"
                                                                alt="" class="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                        </div>    
                                    <div class="productCardHoverBtn">
                                        <div>
                                            <button onClick="addToWishList()"><img src="<?=base_url('assets/new_website/img/love-icon.png')?>" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="similarBtn">
                                        <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""><span
                                                class="similarText">Similar
                                                Products</span></button>
                                    </div>
                                    <div class="quickViewBtn">
                                        <button onClick="openQuickViewDialog()">
                                            <img src="<?=base_url('assets/new_website/img/eye-icon.png')?>" alt="" class="mr-1" style="width: 16px;">
                                            QUICK VIEW
                                        </button>
                                    </div>
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="px-2 py-2 productInfo">
                                    <p class="font-weight-bold text-dark m-0" style="font-family: 'League Spartan';">
                                        Levi's T-Shirt Lorem lkj...</p>
                                    <p class="text-secondary m-0" style="font-size: 12px;">T-Shirt</p>
                                    <p class="m-0" style="font-size: 15px;">
                                        <span class="font-weight-bold text-dark">₹200</span>
                                        <span class="text-secondary" style="text-decoration: line-through;">₹300</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px;">35% OFF</span>
                                    </p>
                                    <p class="border m-0 border-success text-success rounded-sm px-1 d-flex align-items-center"
                                        style="width: 150px; font-size: 11px; white-space: nowrap;">
                                        <span>Price dropped by ₹100</span>
                                        <img src="<?=base_url('assets/new_website/img/price-down2.png')?>" class="blinkingText ml-1" style="width: 16px"
                                            alt="">
                                    </p>
                                    <p class="m-0">
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-crown blinkingText" style="color: #FFC107;"></i>
                                            Club price:
                                            <span class="text-secondary">₹190</span>
                                            <i class="fa-solid fa-circle-info text-secondary"></i>
                                        </a>
                                    </p>
                                    <p class="m-0" style="font-size: 12px; color: orange;">Only few left</p>
                                    <p class="m-0" style="font-size: 12px;">Get it by <span
                                            class="font-weight-bold">Sat, Aug 31</span></p>
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
        document.querySelectorAll('.mySwiper').forEach(function (swiperElement) {
            var swiper = new Swiper(swiperElement, {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay:false,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });

        var swiper = new Swiper('.quickViewSwiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay:false,
                navigation: {
                    nextEl: ".quickSwiper-button-next",
                    prevEl: ".quickSwiper-button-prev",
                }
        }); 

        window.onload = function() {
            showToast2('Logged in successfully', 'success');
        }

        function showToast(message, type) {
            const toaster = document.getElementById('toaster');
            const toast = document.createElement('div');
            
            // Create the structure of the toast
            toast.className = `toast ${type}`;
            
            // Add image
            const img = document.createElement('img');
            img.src = '<?= base_url('assets/new_website/img/product-1.jpg') ?>'; // Replace with your image URL
            img.alt = 'Toast Image';

            // Add message
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message';
            messageDiv.textContent = message;
            
            // Add button
            const closeButton = document.createElement('button');
            closeButton.textContent = 'VIEW BAG';
            closeButton.onclick = function() {
                toast.classList.remove('show');
                setTimeout(() => {
                    toaster.removeChild(toast);
                }, 500);
            };

            // Append elements to the toast
            toast.appendChild(img);
            toast.appendChild(messageDiv);
            toast.appendChild(closeButton);

            // Append toast to the toaster container
            toaster.appendChild(toast);
            
            // Show the toast
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);

            // Auto-remove the toast after 3 seconds (if not closed manually)
            setTimeout(() => {
                if (toaster.contains(toast)) {
                    toast.classList.remove('show');
                    setTimeout(() => {
                        toaster.removeChild(toast);
                    }, 500);
                }
            }, 3000);
        }

        function showToast2(message, type) {
            const toaster = document.getElementById('toaster2');
            const toast = document.createElement('div');
            
            toast.className = `toast2 ${type}`;
            toast.textContent = message;

            toaster.appendChild(toast);
            
            // Show the toast
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);

            // Remove the toast after 3 seconds
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toaster.removeChild(toast);
                }, 500);
            }, 3000);
        }

        function openSidebar() {
            document.getElementById("sidebar").style.width = "360px";
            document.body.classList.add('sidebar-open');
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.width = "0";
            document.body.classList.remove('sidebar-open');
        }

        function openFilterSidebar() {
            document.getElementById("filterSidebar").style.width = "360px";
            document.body.classList.add('sidebar-open');
        }

        function closeFilterSidebar() {
            document.getElementById("filterSidebar").style.width = "0";
            document.body.classList.remove('sidebar-open');
        }

        const pincodeBtn = document.querySelector('.pincodeBtn');
        const pincodeForm = document.querySelector('#pincodeForm');
        const pincodeInput = document.querySelector('.pincodeInput');
        const pincodeTooltip = document.querySelector('.pincodeTooltip');
        const pincodeErrorMsg = document.querySelector('.pincodeErrorMsg');
        const pincodeFormContainer = document.querySelector('.pincodeFormContainer')

        function openPincodeForm() {
            pincodeFormContainer.style.display = 'block';
            pincodeTooltip.style.display = 'inline';
            pincodeInput.value = '';
            pincodeInput.focus();
        }

        pincodeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const data = new FormData(pincodeForm);
            const pincode = data.get('pincode');
            if (pincode.length != 6 || pincode == '000000') {
                pincodeErrorMsg.style.display = 'block';
                pincodeInput.style.borderColor = 'red';
                return
            }else{
                pincodeBtn.innerHTML = `${pincode}<i class="fa-solid fa-pen ml-1"></i>`;
                pincodeFormContainer.style.display = 'none';
                pincodeTooltip.style.display = 'none';
            }
        })

        pincodeInput.addEventListener('input', (e) => {
            if (pincodeErrorMsg.style.display == 'block') {
                pincodeErrorMsg.style.display = 'none';
                pincodeInput.style.borderColor = '#d4d5d9';
            }
        })

        function addToWishList(e) {
            showToast('Added to wishlist', 'success')
        }

        const quickViewDialog = document.querySelector('.quickViewDialog');
        const quickViewCloseBtn = document.querySelector('.closeQuickViewDialogBtn');

        function openQuickViewDialog(){
            quickViewDialog.showModal();
            document.body.classList.toggle('modal-open');
        }

        function closeQuickViewDialog(){
            quickViewDialog.close();
            document.body.classList.toggle('modal-open');
        }

        // const pincodeForm = document.querySelector('#pincodeForm');
        // const pincodeInput = document.querySelector('.pincodeInput');
        // const pincodeErrorMsg = document.querySelector('.pincodeErrorMsg');

        // pincodeForm.addEventListener('submit', (e) => {
        //     e.preventDefault();
        //     console.log(pincodeInput.value)
        //     if (pincodeInput.value.length != 6 || pincodeInput.value == '') {
        //         pincodeErrorMsg.style.display = 'block';
        //         pincodeInput.style.borderColor = 'red';
        //         return
        //     }
        // })
        
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>