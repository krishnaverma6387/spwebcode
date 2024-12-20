<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Wishlist </title>
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
            background-color: #FFFFFF;
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

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: var(--color2) !important;
        }

        img {
            width: 100%;
        }

        .btn:focus,
        a:focus,
        input[type="text"]:focus {
            box-shadow: none;
            outline: none;
        }

        .saleStrip {
            background-image: linear-gradient(to right, var(--color1), var(--color2));
            width: 50%;
            display: grid;
            grid-template-columns: 2fr 1fr;
            place-items: center;
            color: white;
            padding: 0 1rem;
            margin-top: 1rem;
            margin-inline: auto;
        }

        .saleStrip .text{
            font-size: 28px;
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

        .selectBtns {
            display: flex;
            gap: 8px;
        }

        .selectBtns button {
            border:none;
            background-color: transparent;
            padding: 4px 8px;
            border-radius: 4px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            transition: all .2s ease-in-out;
        }

        .selectBtns button:hover {
            transform: scale(1.1);
        }

        .selectBtns button img {
            width: 18px;
        }

        .wishlistClearBtn{
            transition: all .2s ease-in-out;
        }

        .wishlistClearBtn:hover{
            transform: scale(1.1);
        }

        .continueBtn {
            border: 1px solid var(--color2);
            color: var(--color2);
            background-color: transparent;
            padding: 8px 30px;
            margin-top: 3rem;
            border-radius: 4px;
            transition: all .2s ease-in-out;
            font-family: 'League Spartan', sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .continueBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .productContainer {
            justify-content: space-between;
        }

        .productCard {
            transition: all .2s ease-in-out;
            max-width: 240px;
            margin-bottom: 1rem;
        }

        .productCard:hover {
            scale: 1.02;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .productCard .productImageContainer {
            position: relative;
            display: block;
            max-width: 240px;
            max-height: 320px;
        }

        .productImageContainer .productImage {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .productCloseIcon{
            position: absolute;
            top: 14px;
            right: 14px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 998;
        }

        .productCloseIcon .close-btn{
            background: none;
        }

        .productCloseIcon .close-btn:hover{
            background: var(--color2);
        }

        .checkMark {
            z-index: 10;
            zoom: 1.25;
            position: absolute;
            top: 8px;
            left: 8px;
            opacity: 0;
        }

        .checkMark.checked {
            opacity: 1;
        }

        .productCard:hover .checkMark {
            opacity: 1;
        }

        .outOfStockLayer {
            height: 100%;
            width: 100%;
            top: 0;
            position: absolute;
            z-index: 10;
            background-color: rgb(0, 0, 0, 0.5);
            backdrop-filter: grayscale(100%);
        }

        .outOfStockLayer img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
        }

        .outOfStockLayer .outOfStockBtn {
            color: var(--color2);
            font-weight: 600;
            background-color: white;
            padding: 4px 8px;
            border:none;
            outline: none;
            position: absolute;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .outOfStockLayer .outOfStockBtn:hover {
            text-decoration: underline;
        }

        .stockTag {
            font-size: 12px;
            position: absolute;
            bottom: 2px;
            right: 2px;
            background-color: var(--color2);
            padding: 2px 4px;
        }

        .preorderTag {
            font-size: 12px;
            position: absolute;
            bottom: 2px;
            left: 2px;
            background-color: var(--color1);
            padding: 2px 4px;
        }
        
        .rating {
            font-size: 12px;
            position: absolute;
            bottom: 32px;
            left: 2px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px 4px;
            border-radius: 4px;
        }

        .moveBtn {
            font-size: 14px;
            color: var(--color2);
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            border-radius: 0;
        }

        .moveBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .notifyCredentialInputContainer {
          border: 1px solid rgba(0, 0, 0, 0.15);
          padding: 4px 8px;
          border-radius: 4px;   
        }

        .notifyCredentialInputContainer .notifyCredentialInputSpan {
            display: none;
            color: rgba(0, 0, 0, 0.5);
        }

        .notifyCredentialInput {
            border: none;
            outline: none;
            padding: 4px 8px;
            border-radius: 0;
            font-size: 14px;
            width: 254px;
        }

        .notifyCredentialInput::placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .notifyBtn {
            font-size: 14px;
            color: var(--color2);
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            border-radius: 0;
        }

        .notifyBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .notifyMsg, .notifyErrorMsg {
            display: none;
        }


        body.modal-open {
            /* height: 100vh; */
            overflow-y: hidden;
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

        .imageContainer {
            display: inline-block;
            position: relative;
        }

        .imageContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2rem;
            background: white;
            max-width: 400px;
            min-width: 360px;
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

        .sizeBtn {
            background-color: white;
            position: relative;
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
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            place-items: center;
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
            border-radius: 12px;
        }

        .stockBtns .recommended::after {
            content: "RECOMMENDED SIZE";
            font-size: 10px;
            text-align: left;
            line-height: 1;
            position: absolute;
            top: -16px;
            left:0px;
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
            padding-top: 10px;
            z-index: 100000;
        }

        .sidebar.open{
            width: 480px;
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

        .similarBtn {
            position: absolute;
            bottom: 8px;
            right: 8px;
            transition: all .2s ease-in-out;
            z-index: 20;
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
        
        .cartCounterBtn {
            position: relative;
        }

        .cartCounter {
            position: absolute;
            top: -18px;
            right: -10px;
            background-color: var(--color1);
            color: white;
            font-size: 10px;
            padding-inline:6px;
            border-radius: 100vh;
        }

        #toaster {
            position: fixed;
            top: 160px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            min-width: 250px;
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

        .toast.show {
            opacity: 1;
            transform: translateX(0);
        }

        .toast.success {
            background-color: #333333;
            color: white;
        }

        .toast.error {
            background-color: #333333;
            border: 1px solid red;
            color: white;
        }

        @media (max-width: 1100px) {

            .saleStrip {
                width: 75%;
            }

            .saleStrip .text {
                font-size: 24px;
            }
        }

        @media (max-width: 800px) {

            .saleStrip {
                width: 90%;
            }

            .saleStrip .text {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .subHeaderSection {
                padding-top: 56px;
            }

            .checkMark{
                opacity: 1;
            }
        }

        @media (max-width: 568px) {

            .productContainer{
                display:grid;
                grid-template-columns: 1fr 1fr;
                gap:4px;
            }
            
            .productCard{
                margin-bottom:4px;
            }
            
            .productCard:hover{
                scale:1;
                box-shadow:none;
            }

            dialog, .dialog2{
                top:100%;
                left:0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }

            .sidebar.open{
                width: 376px;
            }
        }
    </style>
    <?php include('include/header.php'); ?>
    <main>
        <div id="toaster"></div>
        <div id="sidebar" class="sidebar">
            <button onclick="closeSidebar()">
            <span class="close-btn">×</span>
            </button>
            <p class="m-0 p-0 font-weight-bold text-dark text-center" >SIMILAR PRODUCTS</p>
            <div class="sidebar-content">
                <div class="text-center text-decoration-none productCardSidebar">
                    <a href="#" class="imageContainer">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" alt="">
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
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" alt="">
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
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" alt="">
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
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" alt="">
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
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" alt="">
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
                <div class="border d-flex justify-content-center align-items-center">
                    <p class="m-0 p-0 text-center">No more products...</p>
                </div>
            </div>
        </div>
        <dialog class="sizeDialog" id="dialog">
                        <div>
                            <div class="d-flex">
                                <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" style="width: 80px;" alt="">
                                <div class="ml-3 text-left">
                                    <p class="m-0 p-0">Lorem, ipsum.</p>
                                    <p class="m-0 p-0 text-secondary" style="font-size: 14px;">Lorem, ipsum.</p>
                                    <p class="m-0 p-0">
                                        <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                                        <span class="text-secondary"
                                            style="text-decoration: line-through; font-size: 14px;">₹
                                            2,999</span>
                                        <span class="font-weight-bold text-success" style="font-size: 14px;">35%</span>
                                    </p>
                                </div>
                            </div>
                            <hr class="my-2" />
                            <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE</p>
                            <div class="text-left mt-2 stockBtns">
                                <button class="sizeBtn">XS</button>
                                <button class="sizeBtn outOfStock">S</button>
                                <button class="sizeBtn recommended">M</button>
                                <button class="sizeBtn">L</button>
                                <button class="sizeBtn">XL</button>
                                <button class="sizeBtn">XXL</button>
                                <button class="sizeBtn">XXL</button>
                                <button class="sizeBtn">XXL</button>
                                <button class="sizeBtn recommended">XXL</button>
                                <button class="sizeBtn">XXL</button>
                                <button class="sizeBtn">XXL</button>
                                <button class="sizeBtn">XXL</button>
                            </div>
                            <button onclick="sizeDialogBtn()" class="btn w-100 mt-4"
                                style="background-color: var(--color1); color: white;">ADD TO BAG</button>
                            <button id="closeModalBtn" aria-label="close" class="x closeSizeModalBtn">
                                <span class="close-btn" id="close-popup">×</span>
                            </button>
                        </div>
        </dialog>
        <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
            <div>
                <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                    <p class="font-weight-bold text-left m-0 p-0"
                    style="font-family: 'League Spartan'; font-size: 28px;">
                    Receive Updates</p>
                </div>
                <hr class="my-2" />
                <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                <p class="text-success m-0 p-0 notifyMsg" style="font-size: 14px;"><i class="fas fa-check-circle"></i> You're all set</p>
                <p class="text-danger m-0 p-0 notifyErrorMsg" style="font-size: 14px;"><i class="fas fa-info-circle"></i> Please input valid details!</p>
                <form class="notifyForm">
                    <div class="notifyCredentialInputContainer">
                        <span class="notifyCredentialInputSpan">+91 |</span>
                        <input type="text" name="credential" id="" placeholder="Enter Email id or WhatsApp number"
                        class="notifyCredentialInput">
                    </div>
                    <button type="submit" class="btn w-100 rounded-sm mt-2 notifyCredentialBtn"
                        style="background-color: var(--color1); color: white;">CONFIRM</button>
                    <button type="button" onClick="notifyFocus()" class="btn w-100 rounded-sm mt-2 notifyCredentialEditBtn"
                        style="background-color: var(--color1); color: white; display: none">EDIT</button>
                </form>
            </div>
        </dialog>
        <dialog class="dialog2" id="wishlistClearDialog">
                    <div class="text-center">
                        <button id="" aria-label="close" class="x wishlistClearCloseBtn">
                            <span class="close-btn" id="close-popup">×</span>
                        </button>
                        <p class="font-weight-bold m-0 p-0"
                            style="font-family: 'League Spartan'; font-size: 32px;">Confirmation</p>
                        <p class="text-secondary mt-2" style="font-size: 14px;">Are you sure you want to clear your wishlist?</p>
                        <div>
                            <button class="btn w-100 rounded-sm"
                                style="background-color: var(--color1); color: white;">CONTINUE</button>
                        </div>
                    </div>
                </dialog>
        <section class="d-lg-none d-md-none d-sm-block position-fixed top-0 w-100 bg-white" style="z-index: 10000;" >
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center text-dark">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <span class="ml-2 d-flex flex-column font-weight-bold" style="font-size: 18px;">My Wishlist
                        <span class="font-weight-normal" style="color: #777; font-size: 10px;">(210 products)</span>
                    </span>
                </div>
                <div>
                    <a class="cartCounterBtn" href="">
                        <img src="<?= base_url('assets/new_website/img/bag.png') ?>" style="width: 20px;" alt="">
                        <div>
                            <span class="cartCounter m-0">10</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="subHeaderSection">
            <div class="newsStrip">
                <div class="icon">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
                <p class="m-0 p-0">Great news! Prices have dropped for one or more items since you wishlisted them.</p>
            </div>
            <div class="saleStrip">
                <p class="m-0 p-0 text">EXTRA 10% OFF</p>
                <div class="text-center py-2">
                    <p class="m-0 p-0">USE CODE:</p>
                    <p class="m-0 p-0 text">SPFLAT20</p>
                </div>
            </div>
            <div class="px-lg-5 px-md-3 px-sm-3 px-3 mt-lg-5 mt-3 d-flex justify-content-end justify-content-lg-between justify-content-md-between justify-content-sm-end align-items-center"
                style="font-style: 'League Spartan';">
                <p class="font-weight-bolder m-0 d-lg-block d-md-block d-sm-none d-none text-dark" style="font-size: 20px;">My Wishlist <span
                        class="font-weight-normal text-secondary" style="font-size: 14px;">(210 products)</span></p>
                <button class="btn m-0 p-0 wishlistClearBtn float-right font-weight-bold" style="font-family: 'League Spartan';"><img src="<?= base_url('assets/new_website/img/clear.png') ?>" style="width: 20px;" alt=""></i>Clear All</button>
                <div class="selectBtns text-dark" style="display: none;">
                    <button>
                        <img src="<?= base_url('assets/new_website/img/bag.png') ?>" alt="">
                        <span>Move to Cart</span>
                    </button>
                    <button>
                        <img src="<?= base_url('assets/new_website/img/trash.png') ?>" alt="">
                        <span> Remove</span>
                    </button>
                </div>
            </div>
        </section>
        <section>
            <!-- <div class="px-3 px-lg-5 mt-3">
                <div class="mt-5 text-center">
                    <p class="m-0 mb-1 font-weight-bold text-uppercase"
                        style="font-size: 22px; font-family: 'League Spartan';">No items in
                        wishlist</p>
                    <p class="m-0 text-secondary" style="font-size: 14px;">Add items you like to your wishlist. Review
                        them anytime and effortlessly move them to your bag.
                    </p>
                    <img class="mt-4" src="<?= base_url('assets/new_website/img/wishlist.png')?>"
                        style="width: 100%; height: 180px; object-fit: contain;" alt="">
                    <button class="continueBtn">CONTINUE SHOPPING</button>
                </div>
            </div> -->
            <div class="my-3 mx-lg-5 mx-md-3 mx-sm-2 mx-1 productContainer row m-0">
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                            <button onclick="openSidebar()" class="outOfStockBtn">
                                VIEW SIMILAR
                            </button>
                        </div>
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <!-- <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div> -->
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <!-- <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button> -->
                    <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div>
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <!-- <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div> -->
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <!-- <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button> -->
                    <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
                <div class="text-center text-decoration-none productCard p-0 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="#" class="productImageContainer">
                        <div class="productCloseIcon"> <span class="close-btn" id="close-popup">×</span></div>
                        <!-- <div class="outOfStockLayer">
                            <img src="<?= base_url('assets/new_website/img/out-of-stock.png') ?>" alt="out of stock icon">
                        </div> -->
                        <img src="<?= base_url('assets/new_website/img/product-1.jpg') ?>" class="productImage" alt="">
                        <input type="checkbox" class="checkMark" name="" id="">
                        <!-- <div class="similarBtn">
                            <button onclick="openSidebar()"><img src="<?=base_url('assets/new_website/img/cards.png')?>" alt=""></button>
                        </div> -->
                        <div class="stockTag">
                            <p class="m-0 text-white font-weight-bold">5 left!</p>
                        </div>
                        <div class="preorderTag">
                            <p class="m-0 text-white font-weight-bold blinkingText">Pre-Order</p>
                        </div>
                        <div class="rating text-white">
                            <span>4.5</span>
                            <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                            <span>| 10</span>
                        </div>
                    </a>
                    <div class="border pb-3">
                        <p class="m-0 mt-1 text-dark" style="font-size: 16px;">Lorem ipsum dolor..</p>
                        <p class="m-0 mt-1">
                            <span class="font-weight-bold text-dark" style="font-size: 15px;">₹ 1,999</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px;">₹
                                2,999</span>
                            </p>
                            <p class="text-success m-0" style="font-size: 12px;">Upto 35% off</p>
                            <p class="m-0 d-inline text-success rounded-lg" style="font-size: 10px; border: 1px solid limegreen; padding: 2px 4px;">
                                <span>Price dropped by <span class="font-weight-bold">₹ 1,999</span> </span>
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/price-down2.png') ?>" style="width: 12px;" alt="">
                            </p>
                    </div>
                    <button class="btn border w-100 border-top-0 moveBtn">MOVE TO
                        BAG</button>
                    <!-- <button class="btn border w-100 notifyBtn
                    notifyBtn">NOTIFY ME</button>
                    <dialog class="dialog2 notifyDialog border-top-0 text-left" id="notifyDialog">
                        <div>
                            <button id="" aria-label="close" class="x notifyCloseBtn"><span class="close-btn" id="close-popup">×</span></button>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                                <p class="font-weight-bold text-left m-0 p-0"
                                style="font-family: 'League Spartan'; font-size: 28px;">
                                Receive Updates</p>
                            </div>
                            <hr class="my-2" />
                            <p class="text-secondary p-0">Get alerts for restocks, price drops, and availability.</p>
                            <form>
                                <input type="text" name="" id="" placeholder="Enter Email id or WhatsApp number"
                                    class="form-control">
                                <button class="btn w-100 rounded-sm mt-2"
                                    style="background-color: var(--color1); color: white;">CONFIRM</button>
                            </form>
                        </div>
                    </dialog> -->
                </div>
            </div>
        </section>
    </main>
    <script>
        const moveBtns = document.querySelectorAll('.moveBtn');
        const sizeModal = document.querySelector('.sizeDialog')
        const closeSizeModalBtn = document.querySelector('.closeSizeModalBtn')
        
        const wishlistClearBtn = document.querySelector('.wishlistClearBtn')
        const wishlistClearDialog = document.getElementById('wishlistClearDialog')
        const wishlistClearCloseBtn = document.querySelector('.wishlistClearCloseBtn')

        const notifyBtn = document.querySelectorAll('.notifyBtn')
        const notifyDialog = document.querySelector('.notifyDialog')
        const notifyCloseBtn = document.querySelector('.notifyCloseBtn')
        const notifyCredentialInput = document.querySelector('.notifyCredentialInput')
        const notifyCredentialBtn = document.querySelector('.notifyCredentialBtn')
        const notifyCredentialInputContainer = document.querySelector('.notifyCredentialInputContainer')

        const checkMarks = document.querySelectorAll('.checkMark')

        checkMarks.forEach((checkbox) => {
            checkbox.addEventListener('change', () => {
                const isAnyChecked = Array.from(checkMarks).some(checkbox => checkbox.checked);
                if (isAnyChecked) {
                    checkMarks.forEach((checkbox) => {
                        checkbox.classList.add('checked')
                        wishlistClearBtn.style.display = 'none'
                        document.querySelector('.selectBtns').style.display = 'block'
                    })
                }else{
                    checkMarks.forEach((checkbox) => {
                        checkbox.classList.remove('checked')
                        wishlistClearBtn.style.display = 'block'
                        document.querySelector('.selectBtns').style.display = 'none'
                    })
                }
            })
        })

        moveBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                sizeModal.showModal();
                document.body.classList.add('modal-open');
            })
        })

        closeSizeModalBtn.addEventListener('click', () => {
            sizeModal.close();
            document.body.classList.remove('modal-open');
        })

        wishlistClearBtn.addEventListener('click', () => {
            wishlistClearDialog.showModal();
            document.body.classList.add('modal-open');
        })

        wishlistClearCloseBtn.addEventListener('click', () => {
            wishlistClearDialog.close();
            document.body.classList.remove('modal-open');
        })

        notifyBtn.forEach((btn) => {
            btn.addEventListener('click', () => {
                notifyDialog.showModal();
                document.body.classList.add('modal-open');
            })
        })

        notifyCloseBtn.addEventListener('click', () => {
            notifyDialog.close();
            document.body.classList.remove('modal-open');
        })

        function openSidebar() {
            document.getElementById("sidebar").classList.add("open");
            document.body.classList.toggle('sidebar-open');
        }

        function closeSidebar() {
            document.getElementById("sidebar").classList.remove("open");
            document.body.classList.toggle('sidebar-open');
        }

        notifyCredentialInput.addEventListener('input', (e) => {
            if(e.target.value.length == 0){
                notifyCredentialInputContainer.style.borderColor = 'rgba(0, 0, 0, 0.15)'
                document.querySelector('.notifyMsg').style.display = 'none'
                document.querySelector('.notifyErrorMsg').style.display = 'none'
                document.querySelector('.notifyCredentialInputSpan').style.display = 'none'
            }

            if(e.target.value.charAt(0) >= 0 || e.target.value.charAt(0) <= '9'){
                document.querySelector('.notifyCredentialInputSpan').style.display = 'inline-block'
            }else if(e.target.value == '0000000000'){
                notifyCredentialBtn.classList.add('btn-disabled')
            }else{
                document.querySelector('.notifyCredentialInputSpan').style.display = 'none'
            }
        })

        const notifyForm = document.querySelector('.notifyForm')

        notifyForm.addEventListener('submit', (e) => {
            e.preventDefault()
            const data = new FormData(notifyForm)
            const credential = data.get('credential')
            if(credential.length == 0){
                notifyCredentialInputContainer.style.borderColor = 'red'
                return
            }else if (credential == '0000000000'){
                notifyCredentialInputContainer.style.borderColor = 'red'
                document.querySelector('.notifyErrorMsg').style.display = 'block'
                return
            }
            notifyCredentialInput.value = credential
            notifyCredentialInput.style.borderColor = 'green'
            notifyCredentialBtn.style.display = 'none'
            document.querySelector('.notifyCredentialEditBtn').style.display = 'block'
            document.body.classList.toggle('modal-open');
        })

        function notifyFocus() {
            notifyCredentialBtn.style.display = 'block'
            document.querySelector('.notifyCredentialEditBtn').style.display = 'none'
            notifyCredentialInput.value = ''
            notifyCredentialInput.style.borderColor = 'gray'
            notifyCredentialInputContainer.style.borderColor = 'rgba(0, 0, 0, 0.15)'
            notifyCredentialInput.focus()
        }

        function sizeDialogBtn() {
            sizeModal.close();
            document.body.classList.toggle('modal-open');
            showToast('Product moved to bag', 'success')
        }


        function showToast(message, type) {
            const toaster = document.getElementById('toaster');
            const toast = document.createElement('div');
            
            toast.className = `toast ${type}`;
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

    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>