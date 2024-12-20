<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Cart </title>
    <?php include('include/cssLinks.php'); ?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
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

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        p {
            margin: 0;
            padding: 0;
        }

        body.modal-open {
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
            z-index: 5;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        input[type="radio"] {
            accent-color: var(--color2);
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: var(--color2);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .inputDisabled {
            background-color: rgba(0, 0, 0, 0.05) !important;
            border: none !important;
        }

        .btn:focus,
        a:focus,
        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: none !important;
        }

        .stepper-wrapper {
            max-width: 500px;
            font-family: 'League Spartan', sans-serif;
            margin-inline: auto;
            display: flex;
            justify-content: space-between;
            margin-block: 20px;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            font-weight: 600;
        }

        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 2px dashed #ccc;
            width: 100%;
            top: 20px;
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px dashed #ccc;
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 2;
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 6px;
        }

        .stepper-item.active {
            font-weight: 700;
            color: var(--color2);
        }

        .stepper-item.completed .step-counter {
            background-color: var(--color1);
            color: white;
        }

        .stepper-item.completed::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid var(--color1);
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 3;
        }

        .stepper-item:first-child::before {
            content: none;
        }

        .stepper-item:last-child::after {
            content: none;
        }

        .paddingTop {
            padding-top: 0rem;
        }

        .cartContainer {
            width: 70%;
            display: grid;
            gap: 16px;
            grid-template-columns: 3fr 2fr;
            margin-inline: auto;
        }

        .productsContainer {
            width: 70%;
            margin-inline: auto;
            margin-block: 5rem;
            background-color: #e83e8c15;
            padding: 1rem 2rem;
            border-radius: 8px;
        }

        .productsContainer .products {
            display: grid;
            gap: 8px;
            grid-template-columns: repeat(5, 1fr);
        }

        .productList {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .productCard {
            display: flex;
            gap: 16px;
            border-radius: 8px;
            border: 1px solid rgb(0, 0, 0, 0.1);
            padding: 8px;
            position: relative;
        }

        .productCard.sizeNotAvailableBorder {
            border-color: orange;
        }

        .productCard .closeBtn {
            position: absolute;
            top: 4px;
            right: 8px;
        }

        .productCard input[type="checkbox"] {
            accent-color: var(--color2);
            zoom: 1.1;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .productImg .outOfStock {
            position: absolute;
            top: 40px;
            left: 20px;
        }

        .productImg .outOfStock img {
            width: 80px;
        }

        .royalMemberCard {
            background-image: linear-gradient(128deg, #e83e8c 0%, 12%, #8340a1 34% 100%);
        }

        .royalMemberCard .body {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
            padding: 12px;
        }

        .royalMemberCard .body button {
            background-color: var(--color2);
            color: white;
            border-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .royalMemberCard .body div {
            transition: all .2s ease-in-out;
        }

        .royalMemberCard .body div:hover {
            scale: 1.05;
            box-shadow: 0 0 8px 0 white;
        }

        .blinkAnimation {
            animation: blink 1.5s linear infinite;
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
            z-index: 100;
        }

        a.toolTip::after {
            content: attr(tip);
            z-index: 999;
            background-color: white;
            color: black;
            text-align: left;
            font-size: 14;
            font-weight: 500;
            line-height: 1.25em;
            width: 160px;
            padding: 5px 10px;
            border-radius: 6px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .65);
            position: absolute;
            top: 20px;
            right: -6px;
            display: none;
        }

        a.priceTootip::after {
            background-color: black;
            color: white;
            text-align: left;
            line-height: 1.75em;
            width: 140px;
            padding: 8px 12px;
        }

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
            z-index: 999;
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
            z-index: 10000;
        }

        dialog::backdrop {
            animation: fadeIn 300ms ease both;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        dialog .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
        }

        dialog .x:focus {
            outline: none;
        }

        dialog .x:hover {
            filter: grayscale(0);
            transform: scale(1.1);
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

        .sidebar {
            height: 100%;
            background-color: #fff;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            transition: 0.3s;
            padding-top: 22px;
            z-index: 10000;
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
            display: grid;
            gap: 8px;
            padding-inline: 16px;
            margin-bottom: 16px;
        }

        .sidebar-content.similarProducts{
            grid-template-columns: 1fr 1fr;
        }

        .weekendCheckbox {
            display: none;
        }

        .coupon {
            background-color: #D9AFD9;
            background-image: linear-gradient(45deg, #D9AFD9 0%, #97D9E1 100%);
            border-radius: 8px;
            padding: 16px;
            color: white;
            position: relative;
        }

        .couponList{
            list-style: disc;
            list-style-type: "- ";
        }

        .promoCode {
            border: 1px dashed white;
            color: white;
            cursor: auto !important;
        }

        .promoCode:hover {
            color: white;
        }

        .circle1 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 70px;
            left: -6px;
        }

        .circle2 {
            background-color: white;
            height: 20px;
            width: 20px;
            border-radius: 100vh;
            position: absolute;
            top: 70px;
            right: -6px;
        }

        .giftNameErrorMsg,
        .giftMessageErrorMsg,
        .giftSenderNameErrorMsg{
            display: none;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        dialog .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
        }

        dialog .x:focus {
            outline: none;
        }

        dialog .x:hover {
            filter: grayscale(0);
            transform: scale(1.1);
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

        .addressDialog {
            padding: 0;
            min-width: 40%;
            height: 500px;
        }

        .addressDialog .pincodeContainer {
            margin: 1rem;
        }

        .addressDialog .pincodeInput {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgb(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        .addressDialog .pincodeInput input {
            width: 100%;
        }

        .addressDialog .pincodeInput input::placeholder {
            color: rgb(0, 0, 0, 0.5);
        }

        .addressDialog .btn {
            font-size: 14px;
            transition: all 200ms ease;
        }

        .addressDialog .checkBtn:hover {
            color: var(--color2);
        }

        .addNewAddressBtn {
            background-color: white;
            padding: 0.25rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .addNewAddressBtn button {
            border: 1px solid black;
        }

        .addressSection{
            overflow-y: scroll;
            max-height: 308px;
        }

        .addressSection::-webkit-scrollbar{
            display: none;
        }

        .singleAddress {
            display: flex;
            gap: 8px;
            padding-block: 4px;
        }

        .singleAddress button {
            font-size: 12px;
        }

        .singleAddress input[type="radio"] {
            zoom: 1.05;
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
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            place-items: center;
        }

        .stockBtns .outOfStock {
            position: relative;
            background-color: rgb(0, 0, 0, 0.35);
            pointer-events: none;
            cursor: not-allowed;
        }

        .sizeNotAvailable{
            text-decoration: line-through!important;
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

        .addressBtn {
            font-size: 14px;
            border: 1px solid black;
            border-radius: 100vh;
        }

        .addressBtn:hover {
            border-color: var(--color2);
            color: var(--color2);
        }

        .homeButton.active {
            border-color: var(--color2);
            color: var(--color2);
            font-weight: 700;
        }

        .officeBtn.active {
            border-color: var(--color2);
            color: var(--color2);
            font-weight: 700;
        }

        .addressSelectSectionBtnLg {
            display: inline;
        }
        .addressSelectSectionBtnSm {
            display: none;
        }

        .removeDialogBtnLg, .moveDialogBtnLg {
            display: inline;
        }
        .removeDialogBtnSm,.moveDialogBtnSm {
            display: none;
        }

        .outOfStockDialogProductList {
            height: 80px;
            overflow-y: scroll;
            padding: 16px;
        }

        .borderStart {
            border-left: 1px solid rgb(0, 0, 0, 0.1);
            padding-left: 16px;
        }

        .typewriter {
            width: 40px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid #7E2EA0;
            animation: typing 1s steps(4, end), cursor 1s steps(4, end) infinite;
        }

        @keyframes typing {
            from { width: 0 }
        }
        @keyframes cursor {
            50% { border-color: transparent }
        }

        .mobileSwiperContainer{
            width:90%;
            background-color: #FCE7F1;
            margin-inline: auto;
        }

        .mobileSwiperContainer p:nth-child(1){
            font-size: 16px;
        }

        .swiper {
            height: 440px;
            width: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
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
            background-color:rgba(0,0,0,0.15);
            font-size: 16px;
            border-radius: 100vh;
            padding: 0px 14px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: var(--pinkcolor);
            font-size: 16px
        }

        @media (width<1150px) {
            .cartContainer {
                width: 80%;
            }

            .productsContainer {
                width: 80%;
            }
        }

        @media (width<950px) {
            .cartContainer {
                width: 95%;
            }

            .productsContainer {
                width: 95%;
                padding: 0.5rem 1rem;
            }

            .productsContainer .products {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (width<900px) {
            .cartContainer {
                grid-template-columns: 1fr;
            }

            .borderStart {
                border-left: none;
                padding-left: 0;
            }

            .addressDialog {
                min-width: 70%;
            }

            .productsContainer .products {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (width<768px) {
            .paddingTop {
                padding-top: 4rem;
            }
        }

        @media (width<600px) {
            .addressDialog {
                min-width: 90%;
            }

            .productsContainer .products {
                grid-template-columns: repeat(2, 1fr);
            }

            .dialog {
                top: 100%;
                left: 0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }

            .placeOrderBtn {
                position: fixed;
                bottom: 0px;
                left: 0;
                width: 100%;
                z-index: 9999;
            }

            .placeOrderBtn button {
                border-radius: 0;
                padding-block: 0.75rem!important;
                width: 100%;
            }

            .addressSelectSection p:nth-child(1) {
                font-size: 12px;
            }

            .addressSelectSectionBtnLg {
                display: none;
            }
            .addressSelectSectionBtnSm {
                display: inline;
            }

            .addressSelectSectionBtnLg {
                display: none;
            }
            .addressSelectSectionBtnSm {
                display: inline;
            }

            .removeDialogBtnLg, .moveDialogBtnLg {
                display: none;
            }
            .removeDialogBtnSm, .moveDialogBtnSm {
                display: inline;
            }
        }
    </style>
    <main>
        <div id="couponSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeCouponSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="sidebar-content">
                <p class="font-weight-bold text-dark">COUPONS</p>
                <hr class="m-0">
                <p class="font-weight-bold">Top offers for you</p>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                        <button class="btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                        aria-expanded="true" aria-controls="couponOne">See more</button>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold">APPLIED</button>
                    </div>
                    <p class="m-0 p-0 mt-2 text-center"><i class="fa-solid fa-circle-check text-success"></i> Coupon discount <span class="text-success"> ₹200 Applied!</span></p>
                    <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                        <div class="card-body p-0 px-3 pb-2 mt-2"
                            style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                            <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                            <ul class="couponList" >
                                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="coupon">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="d-flex justify-content-between">
                        <p class="m-0" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                        <button class="btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#coupon2"
                        aria-expanded="true" aria-controls="coupon2">See more</button>
                    </div>
                    <hr style="border: 1px dashed white;" />
                    <div class="btn-group w-100 py-1" role="group" aria-label="Basic example">
                        <p class="btn promoCode">CART25</p>
                        <button type="button" class="btn bg-light font-weight-bold">APPLY</button>
                    </div>
                    <!-- <p class="m-0 p-0 mt-2 text-center"><i class="fa-solid fa-circle-check text-success"></i> Coupon discount <span class="text-success"> ₹200 Applied!</span></p> -->
                    <div id="coupon2" class="collapse" aria-labelledby="headingOne" data-parent="">
                        <div class="card-body p-0 px-3 pb-2 mt-2"
                            style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                            <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                            <ul class="couponList" >
                                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="giftSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeGiftSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="sidebar-content">
                <div>
                    <p class="font-weight-bold m-0 text-dark" style="font-size: 20px">Gift
                        Wrap</p>
                    <p class="text-secondary" style="font-size: 12px;">Get personalized message added with
                        your gift.</p>
                </div>
                <hr class="m-0">
                <form id="giftForm">
                    <div>
                        <label for="recepientName" style="font-size: 14px;" class="m-0 font-weight-bold">Recepient
                            name</label>
                        <input type="text" class="form-control giftNameInput" id="recepientName" name="recepientName"
                            placeholder="Enter receivers's name" style="font-size: 14px;">
                        <p class="position-absolute text-danger giftNameErrorMsg" style="font-size: 12px; left: 16px;">This field is required</p>
                        <p class="position-absolute" style="font-size: 12px; right: 16px;">0/60</p>
                    </div>
                    <div class="mt-3">
                        <label for="giftMessage" style="font-size: 14px;" class="m-0 font-weight-bold">Message</label>
                        <textarea class="form-control giftMessageInput" id="giftMessage" name="giftMessage" placeholder="Enter a message"
                            style="font-size: 14px;" rows="5"></textarea>
                        <p class="position-absolute text-danger giftMessageErrorMsg" style="font-size: 12px; left: 16px;">This field is required</p>
                        <p class="position-absolute" style="font-size: 12px; right: 16px;">0/140</p>
                    </div>
                    <div class="mt-3">
                        <label for="senderName" style="font-size: 14px;" class="m-0 font-weight-bold">Sender's
                            name</label>
                        <input type="text" class="form-control giftSenderNameInput" id="senderName" name="senderName"
                            placeholder="Enter sender's name" style="font-size: 14px;">
                        <p class="position-absolute text-danger giftSenderNameErrorMsg" style="font-size: 12px; left: 16px;">This field is required</p>
                        <p class="position-absolute" style="font-size: 12px; right: 16px;">0/60</p>
                    </div>
                    <div class="d-flex" style="gap: 8px; margin-top: 28px;">
                        <button type="reset" onclick="closeGiftSidebar()" class="btn w-50"
                            style="border: 1px solid rgb(0, 0, 0,0.2);font-size: 14px;">CANCEL</button>
                        <button type="submit" class="btn w-50"
                            style="background-color: var(--color1); color: white;font-size: 14px;">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <dialog class="dialog platformDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold">Platform Convenience Fee</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                    class="btn p-0 m-0 closePlatformDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <p class="text-success">Fee charged by Slick Pattern to support efficient operations and continuous platform improvements, ensuring a hassle-free experience.</p>
                    <p class="text-secondary" style="font-size: 14px;">Have any query? Refer <a href="#" style="color: var(--color2);">FAQ's</a> or read our <a href="#" style="color: var(--color2);">T&Cs</a></p>
                </div>
            </div>
        </dialog>
        <dialog class="dialog outOfStockDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold">
                        <img src="<?=base_url('assets/new_website/img/out-of-stock2.png')?>" style="width: 20px" alt="">
                        Move out of stock items
                    </p>
                    <button aria-label="close"
                    class="btn p-0 m-0 closeoutOfStockDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <p style="font-size: 12px;">Few item(s) in your bag are out of stock. Please move them from the bag to proceed.</p>
                    <div class="outOfStockDialogProductList">
                        <div class="d-flex align-items-center mb-2">
                            <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="height: 40px" alt="">
                            <div class="ml-2">
                                <p class="m-0 p-0">Lorem ipsum dolor sit amet.</p>
                                <p class="text-secondary p-0 m-0" style="font-size: 12px;">T-shirt</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="height: 40px" alt="">
                            <div class="ml-2">
                                <p class="m-0 p-0">Lorem ipsum dolor sit amet.</p>
                                <p class="text-secondary p-0 m-0" style="font-size: 12px;">T-shirt</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4 pt-1 border-top">
                        <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">UNSELECT ITEMS</button>
                        <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                    </div>
                </div>
            </div>
        </dialog>
        <dialog class="dialog removeDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold">Remove 20 items</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                    class="btn p-0 m-0 closeRemoveDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <p class="text-secondary" style="font-size: 14px;">Are you sure you want to remove 20 items from your cart?</p>
                    <hr class="m-0">
                    <div class="d-flex mt-1">
                        <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                        <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                    </div>
                </div>
            </div>
        </dialog>
        <dialog class="dialog moveDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold">Move 20 items to Wishlist</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                    class="btn p-0 m-0 closeMoveDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <p class="text-secondary" style="font-size: 14px;">Are you sure you want to move 20 items to your wishlist?</p>
                    <hr class="m-0">
                    <div class="d-flex mt-1">
                        <button class="btn w-50 text-secondary font-weight-bold closeMoveDialogBtn" style="font-size: 12px;">CANCEL</button>
                        <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                    </div>
                </div>
            </div>
        </dialog>
        <dialog class="dialog addressDialog overflow-hidden" id="dialog" style="z-index: 1;">
            <div class="position-relative">
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold">Select Delivery Address</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                        class="btn p-0 m-0 closeAddressDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="pincodeContainer">
                    <form id="pincodeForm" class="pincodeInput">
                        <input type="text" class="border-0 ml-2 picodeInputField" placeholder="Enter Pincode">
                        <button class="btn checkBtn font-weight-bold">CHECK</button>
                    </form>
                    <p class="m-0 p-0 pincodeErrorMsg text-danger" style="font-size: 12px; display: none;"><i class="fa-solid fa-triangle-exclamation"></i> Please enter a valid pincode</p>
                </div>
                <div class="addressTab">
                    <div class="px-2 d-flex justify-content-between align-items-center"
                        style="background-color: var(--color4);">
                        <p class="text-secondary font-weight-bold" style="font-size: 14px;">SAVED ADDRESS</p>
                        <button class="btn addAddressBtn font-weight-bold" onclick="openAddressSidebar()"
                            style="color: var(--color2);"><i class="fa-solid fa-plus"></i>
                            Add
                            new address</button>
                    </div>
                    <div class="px-3 py-3 addressSection">
                        <!-- <p class="m-0 p-3 text-center" style="font-size: 12px;">No saved address</p> -->
                        <div class="singleAddress">
                            <div>
                                <input type="radio" checked class="mr-2" name="address" id="address1">
                            </div>
                            <label for="address1" style="flex: 1;">
                                <p class="m-0 p-0 font-weight-bold">John Doe <span
                                class="text-secondary font-weight-normal" style="font-size: 12px;">(Default)</span></p>
                                <p class="m-0 text-secondary" style="font-size: 14px;">123abc, Varanasi, U.P. India</p>
                                <p class="text-secondary" style="font-size: 14px;">Mobile: <span class="font-weight-bold text-dark">+91 9876543210</span></p>
                                <div>
                                    <div>
                                        <button class="btn font-weight-bold deliveringBtn" style="background-color: rgb(0, 0, 0,0.15);" disabled>DELIVERING HERE</button>
                                        <button class="btn border font-weight-bold deliverBtn">DELIVER HERE</button>
                                        <button class="btn border font-weight-bold editBtn" onclick="openAddressSidebar()">EDIT</button>
                                        <button class="btn border font-weight-bold cancelBtn" onClick="cancelDeleteAddress()" style="display: none;">CANCEL</button>
                                        <button class="btn border font-weight-bold confirmBtn" style="background-color: var(--color2); color: white; display: none;">CONFIRM</button>
                                        <button class="btn border deleteBtn" ><img src="<?=base_url('assets/new_website/img/trash.png')?>" style="width: 18px;" alt=""></button>
                                    </div>
                                </div>
                            </label>
                            <div>
                                <p class="text-success rounded-lg px-1 py-0 m-0 mr-1" style="font-size: 12px; font-weight: 500; border: 1px solid green;">HOME</p>
                            </div>
                        </div>
                        <hr class="my-1 p-0">
                        <div class="singleAddress">
                            <div>
                                <input type="radio" class="mr-2" name="address" id="address2">
                            </div>
                            <label for="address2" style="flex: 1;">
                                <p class="m-0 p-0 font-weight-bold">John Doe <span
                                class="text-secondary font-weight-normal" style="font-size: 12px;">(Default)</span></p>
                                <p class="m-0 text-secondary" style="font-size: 14px;">123abc, Varanasi, U.P. India</p>
                                <p class="text-secondary" style="font-size: 14px;">Mobile: <span class="font-weight-bold text-dark">+91 9876543210</span></p>
                                <div>
                                    <div>
                                        <button class="btn font-weight-bold deliveringBtn" style="background-color: rgb(0, 0, 0,0.15);" disabled>DELIVERING HERE</button>
                                        <button class="btn border font-weight-bold deliverBtn">DELIVER HERE</button>
                                        <button class="btn border font-weight-bold editBtn">EDIT</button>
                                        <button class="btn border font-weight-bold cancelBtn" onClick="cancelDeleteAddress()" style="display: none;">CANCEL</button>
                                        <button class="btn border font-weight-bold confirmBtn" style="background-color: var(--color2); color: white; display: none;">CONFIRM</button>
                                        <button class="btn border deleteBtn" onClick="deleteAddress()"><img src="<?=base_url('assets/new_website/img/trash.png')?>" style="width: 18px;" alt=""></button>
                                    </div>
                                </div>
                            </label>
                            <div>
                                <p class="text-success rounded-lg px-1 py-0 m-0 mr-1" style="font-size: 12px; font-weight: 500; border: 1px solid green;">HOME</p>
                            </div>
                        </div>
                        <hr class="my-1 p-0">
                    </div>
                </div>
                <div class="addNewAddressBtn">
                    <button class="btn w-100 font-weight-bold" onclick="openAddressSidebar()">ADD NEW ADDRESS</button>
                </div>
            </div>
        </dialog>
        <div id="addressSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeAddressSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="sidebar-content">
                <div>
                    <p class="font-weight-bold m-0 text-dark" style="font-size: 20px">Add new address</p>
                </div>
                <hr class="m-0">
                <form id="addAddressForm">
                    <div>
                        <label for="fullName" style="font-size: 12px;" class="m-0 d-block font-weight-bold text-dark">CONTACT
                            DETAILS</label>
                        <span class="text-danger nameErrorMsg" style="font-size: 12px; display:none;">Please enter your full name</span>
                        <input type="text" class="form-control mb-2 fullName" id="fullName" name="fullName" placeholder="Name*"
                            style="font-size: 14px; padding-block: 1.2rem;">
                        <span class="text-danger mobileErrorMsg" style="font-size: 12px; display:none;">Please enter your mobile number</span>
                        <input type="number" class="form-control mb-2 mt-1 mobile" id="mobile" name="mobile"
                            placeholder="Mobile number*" style="font-size: 14px;padding-block: 1.2rem;">
                    </div>
                    <div class="mt-2">
                        <label for="pinCode" style="font-size: 12px;" class="m-0 d-block font-weight-bold text-dark">ADDRESS</label>
                        <span class="text-danger pinErrorMsg" style="font-size: 12px; display:none;">Please enter your pincode</span>
                        <input type="text" class="form-control mb-2 pincdeInput" id="pinCode" name="pinCode" placeholder="Pincode*"
                            style="font-size: 14px;padding-block: 1.2rem;">
                        <span class="text-danger addressErrorMsg" style="font-size: 12px; display:none;">Please enter your address</span>
                        <input type="text" class="form-control mb-2 mt-1 address" id="address" name="address"
                            placeholder="Address (House no.,Building, Street, Area)*" style="font-size: 14px;padding-block: 1.2rem;">
                        <span class="text-danger localityErrorMsg" style="font-size: 12px; display:none;">Please enter your locality/town</span>
                        <input type="text" class="form-control mb-2 mt-1 localityInputField" id="locality" name="locality"
                            placeholder="Locality/Town*" style="font-size: 14px;padding-block: 1.2rem;">
                        <input type="text" class="form-control mb-2 mt-1 inputDisabled" disabled id="city" name="city" placeholder="City/District*"
                            style="font-size: 14px;padding-block: 1.2rem;">
                        <input type="text" class="form-control mt-1 inputDisabled" disabled id="state" name="state" placeholder="State*"
                            style="font-size: 14px;padding-block: 1.2rem;">
                    </div>
                    <div class="mt-2">
                        <label style="font-size: 12px;" class="m-0 font-weight-bold text-dark">SAVE ADDRESS AS</label>
                        <div class="mt-1">
                            <button class="btn addressBtn homeButton active" type="button"> HOME</button>
                            <input class="btn addressBtn officeBtn" type="button" value="OFFICE">
                        </div>
                        <div class="weekendCheckbox mt-3 text-dark">
                            <div class="d-flex align-items-center" style="font-size: 14px;">
                                <input type="checkbox" name="saturday" id="saturday">
                                <label for="saturday" class="m-0 ml-1">Open on Saturday</label>
                            </div>
                            <div class="d-flex align-items-center" style="font-size: 14px;">
                                <input type="checkbox" name="sunday" id="sunday">
                                <label for="sunday" class="m-0 ml-1">Open on Sunday</label>
                            </div>
                        </div>
                        <div class="my-3 d-flex align-items-center" style="font-size: 12px;">
                            <input type="checkbox" name="default" id="defaultAddress">
                            <label for="defaultAddress" class="text-secondary m-0 ml-1">Make this my default
                                address</label>
                        </div>
                    </div>
                    <div class="mt-2" role="group" aria-label="Basic example">
                        <button type="submit" class="btn w-100 font-weight-bold"
                            style="background-color: var(--color1); color: white; font-size: 14px;">ADD ADDRESS</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="royalSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeRoyalSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="sidebar-content text-dark">
                <div>
                    <p class="font-weight-bold m-0 text-dark" style="font-size: 20px">Club Savings</p>
                </div>
                <hr class="m-0">
                <p>Products savings <span class="float-right">₹ 0</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, unde! <span class="float-right">₹ 0</span></p>
                <hr class="m-0">
                <p><img src="<?=base_url('assets/new_website/img/royal.png')?>" style="width: 40px;" alt=""> Royal Club cash earning <span class="float-right">₹ 0</span></p>
                <hr class="m-0">
                <p class="text-success font-weight-bold">Total Royal Club cash savings <span class="float-right">₹ 0</span></p>
                <hr class="m-0">
                <div style="font-size: 12px;">
                    <p class="font-weight-bold">Terms & Conditions</p>
                    <p>*Lorem ipsum dolor,</p>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block d-md-block d-sm-none position-absolute" style="top: 20px; right: 28px; z-index: 999;">
            <div class="d-flex justify-content-center align-items-center">
                <img src="<?=base_url('assets/new_website/img/secure.png')?>" style="width: 40px;" alt="">
                <p class="m-0 ml-2">100% SECURE</p>
            </div>
        </div>
        <div class="d-none d-lg-block d-md-block d-sm-none position-absolute" style="top: 20px; left: 28px; z-index: 999;">
            <div class="d-flex justify-content-center align-items-center">
                <img src="<?=base_url('assets/new_website/img/memberLogo.png')?>" style="height: 40px;" alt="">
            </div>
        </div>
        <section class="d-lg-none d-md-none d-sm-block position-fixed top-0 w-100 bg-white" style="z-index: 999;" >
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center py-2">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <span class="ml-2" style="font-size: 16px;">SHOPPING BAG
                    </span>
                </div>
                <div>
                    <p>STEP 1/3</p>
                </div>
            </div>
        </section>
        <section class="d-lg-block d-md-block d-sm-none d-none">
            <div class="stepper-wrapper">
                <div class="stepper-item active">
                    <div class="step-counter">1</div>
                    <div class="step-name"><h1 style="all: unset">BAG</h1></div>
                </div>
                <div class="stepper-item ">
                    <div class="step-counter">2</div>
                    <div class="step-name">ADDRESS</div>
                </div>
                <div class="stepper-item ">
                    <div class="step-counter">3</div>
                    <div class="step-name">PAYMENT</div>
                </div>
            </div>
        </section>
        <hr class="m-0">
        <section class="paddingTop">
            <!-- <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                <img src="<?=base_url('assets/new_website/img/empty-cart.png')?>" style="width: 200px;" alt="">
                <p class="text-dark font-weight-bold m-0" style="font-size: 20px;">"It feels so effortless!"</p>
                <p class="text-secondary" style="font-size: 14px;">Your bag is empty. Let's add some items.</p>
                <button class="btn rounded-0 mt-2" style="background-color: var(--color1); color: white; font-size: 14px;">ADD ITEMS FORM WISHLIST</button>
            </div> -->
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div class="px-lg-4 px-sm-2 px-2 py-lg-3 py-sm-2 py-2 border rounded-lg d-flex align-items-center justify-content-between"
                        style="background-color: rgba(255, 193, 193, 0.25); font-size: 14px;">
                        <div class="addressSelectSection">
                            <p class="m-0 p-0 text-secondary">Deliver to: <span class="font-weight-bold text-dark">John Doe, Sigra, 221010</span></p>
                            <p class="m-0 p-0" style="font-size: 12px;">123abc, Varanasi, U.P. India</p>
                        </div>
                        <!-- <p class="m-0">Deliver to: <span class="font-weight-bold">221010</span></p> -->
                        <button class="btn border-danger text-danger font-weight-bold addressDialogBtn addressSelectSectionBtnLg" style="font-size: 12px;">CHANGE
                            ADDRESS</button>
                        <button class="btn border-danger text-danger font-weight-bold addressDialogBtn addressSelectSectionBtnSm" style="font-size: 12px;">CHANGE</button>
                    </div>
                    <div class="d-flex align-items-center border mt-2 p-3 rounded-lg" style="font-size: 14px;">
                            <img src="<?=base_url('assets/new_website/img/rupee-drop.png')?>" style="width: 22px;" alt="">
                            <span class="ml-2" style="line-height: 1">The price of some items(s) might have changed.</span>
                    </div>
                    <div class="d-flex align-items-center border rounded-lg mt-2 p-2" style="background-color: #FFFAE8;">
                            <i class="fa-solid fa-triangle-exclamation text-danger mr-2"></i>
                            <p style="font-size: 12px; line-height: 1.25;">Unfortunately,some of the items in your cart are no longer available and have been removed.</p>
                    </div>
                    <div class="mt-2 mt-lg-4 mt-md-4 mt-sm-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center" style="font-family: 'League Spartan', sans-serif';">
                                <input type="checkbox" style="zoom:1.25;" id="selectAll" />
                                <label for="selectAll" class="text-secondary m-0 p-0 ml-2 text-dark font-weight-bold"
                                    style="font-size: 14px;">0/1 ITEMS
                                    SELECTED <span style="color: var(--color2)">(₹200)</span></label>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn font-weight-bold removeDialogBtn removeDialogBtnLg" style="font-size: 10px;">REMOVE</button>
                                <button class="btn font-weight-bold removeDialogBtn removeDialogBtnSm" style="font-size: 10px;"><img src="<?=base_url('assets/new_website/img/trash.png')?>" style="width: 16px;" alt=""></button>
                                <button class="btn font-weight-bold moveDialogBtn moveDialogBtnLg" style="font-size: 10px; white-space: nowrap">MOVE TO WISHLIST</button>
                                <button class="btn font-weight-bold moveDialogBtn moveDialogBtnSm" style="font-size: 10px; white-space: nowrap"><img src="<?=base_url('assets/new_website/img/moveHeart.png')?>" style="width: 16px;"  alt=""></button>
                            </div>
                        </div>
                        <div class="productList mt-2">
                            <div class="productCard sizeNotAvailableBorder">
                                <a href="#" class="position-relative d-block productImg">
                                    <img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt="">
                                        <div class="outOfStock">
                                            <img src="<?=base_url('assets/new_website/img/out-of-stock.png')?>" alt="">
                                        </div>
                                    </a>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn sizeNotAvailable"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 60px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">XS</button>
                                                    <button class="sizeBtn outOfStock">S</button>
                                                    <button class="sizeBtn">M</button>
                                                    <button class="sizeBtn">L</button>
                                                    <button class="sizeBtn">XL</button>
                                                    <button class="sizeBtn">XXL</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">Size not available</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <a href="#" class="toolTip priceTootip text-dark"
                                            tip="Older price: ₹300 New price: ₹250">
                                            <i class="fa-solid fa-info-circle text-dark"></i>
                                        </a>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-success font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown blinkAnimation" style="color: #FFD700;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary p-0 m-0" style="font-size: 10px; line-height: 1;">MRP includes all taxes</p>
                                    <p class="text-dark font-weight-bold p-0 m-0 mt-1" style="font-size: 10px; line-height: 1;">NO RETURN</p>
                                    <div class="d-flex align-items-center mt-1">
                                        <div style="width: 16px; height: 16px; border-radius: 50%; background-color: blue;"></div>
                                        <span class="ml-1 font-weight-bold typewriter">BLUE</span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="pl-1 rounded-left" style="font-size: 12px;background-image:linear-gradient(to right, #8340a1 -7% -7%, #fff 50% 50%); color: var(--color1);">
                                        <i class="fa-solid fa-arrow-trend-down border p-1 rounded-circle text-light"
                                            style="font-size: 10px;"></i>
                                        Lowest price in <span class="font-weight-bold">30 days</span></p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-truck-fast text-dark"
                                            style="font-size: 12px;"></i>
                                        Order in
                                        <span class="font-weight-bold blinkAnimation" style="color: var(--color2);">5H:45M</span> for <span class="text-dark font-weight-bold">Same day </span>delivery</p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">Sat 15 Aug, 2024</span>
                                    </p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Delivery between
                                        <span class="text-dark font-weight-bold">Mon 15 Aug - Wed 18 Aug</span>
                                    </p>
                                    <!-- <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-regular fa-clock text-success mr-1" style="font-size: 12px;"></i>
                                        Get it by
                                        <span class="text-dark font-weight-bold">Tomorrow 8PM</span>
                                    </p> -->
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog p-0 closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                                                <p class="font-weight-bold">Move from Bag</p>
                                                <button id="closeAddressDialogBtn" aria-label="close"
                                                class="btn p-0 m-0 closeModalBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="px-3 pb-2 mt-2">
                                                <p class="text-secondary mb-4" style="font-size: 14px;">Are you sure want to move this product from Bag?</p>
                                                <hr class="m-0">
                                                <div class="d-flex mt-1">
                                                    <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                                                    <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                            <div class="productCard">
                                <a href="#" class="position-relative d-block productImg">
                                    <img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt="">
                                        <!-- <div class="outOfStock">
                                            <img src="<?=base_url('assets/new_website/img/out-of-stock.png')?>" alt="">
                                        </div> -->
                                    </a>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn sizeNotAvailable"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 60px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">XS</button>
                                                    <button class="sizeBtn outOfStock">S</button>
                                                    <button class="sizeBtn">M</button>
                                                    <button class="sizeBtn">L</button>
                                                    <button class="sizeBtn">XL</button>
                                                    <button class="sizeBtn">XXL</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">Size not available</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <a href="#" class="toolTip priceTootip text-dark"
                                            tip="Older price: ₹300 New price: ₹250">
                                            <i class="fa-solid fa-info-circle text-dark"></i>
                                        </a>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-success font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown" style="color: #FFD700;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary p-0 m-0" style="font-size: 10px; line-height: 1;">MRP includes all taxes</p>
                                    <p class="text-dark font-weight-bold p-0 m-0 mt-1" style="font-size: 10px; line-height: 1;">NO RETURN</p>
                                    <div class="d-flex align-items-center mt-1">
                                        <div style="width: 16px; height: 16px; border-radius: 50%; background-color: blue;"></div>
                                        <span class="ml-1 font-weight-bold typewriter">BLUE</span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="pl-1 rounded-left" style="font-size: 12px;background-image:linear-gradient(to right, #8340a1 -7% -7%, #fff 50% 50%); color: var(--color1);">
                                        <i class="fa-solid fa-arrow-trend-down border p-1 rounded-circle text-light"
                                            style="font-size: 10px;"></i>
                                        Lowest price in <span class="font-weight-bold">30 days</span></p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-truck-fast text-dark"
                                            style="font-size: 12px;"></i>
                                        Order in
                                        <span class="font-weight-bold blinkAnimation" style="color: var(--color2);">5H:45M</span> for <span class="text-dark font-weight-bold">Same day </span>delivery</p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">Sat 15 Aug, 2024</span>
                                    </p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Delivery between
                                        <span class="text-dark font-weight-bold">Mon 15 Aug - Wed 18 Aug</span>
                                    </p>
                                    <!-- <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-regular fa-clock text-success mr-1" style="font-size: 12px;"></i>
                                        Get it by
                                        <span class="text-dark font-weight-bold">Tomorrow 8PM</span>
                                    </p> -->
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog p-0 closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                                                <p class="font-weight-bold">Move from Bag</p>
                                                <button id="closeAddressDialogBtn" aria-label="close"
                                                class="btn p-0 m-0 closeModalBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="px-3 pb-2 mt-2">
                                                <p class="text-secondary mb-4" style="font-size: 14px;">Are you sure want to move this product from Bag?</p>
                                                <hr class="m-0">
                                                <div class="d-flex mt-1">
                                                    <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                                                    <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                            <div class="productCard">
                                <a href="#" class="position-relative d-block productImg">
                                    <img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt="">
                                        <div class="outOfStock">
                                            <img src="<?=base_url('assets/new_website/img/out-of-stock.png')?>" alt="">
                                        </div>
                                    </a>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn sizeNotAvailable"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 60px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">XS</button>
                                                    <button class="sizeBtn outOfStock">S</button>
                                                    <button class="sizeBtn">M</button>
                                                    <button class="sizeBtn">L</button>
                                                    <button class="sizeBtn">XL</button>
                                                    <button class="sizeBtn">XXL</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">Size not available</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <a href="#" class="toolTip priceTootip text-dark"
                                            tip="Older price: ₹300 New price: ₹250">
                                            <i class="fa-solid fa-info-circle text-dark"></i>
                                        </a>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-success font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown" style="color: #FFD700;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary p-0 m-0" style="font-size: 10px; line-height: 1;">MRP includes all taxes</p>
                                    <p class="text-dark font-weight-bold p-0 m-0 mt-1" style="font-size: 10px; line-height: 1;">NO RETURN</p>
                                    <div class="d-flex align-items-center mt-1">
                                        <div style="width: 16px; height: 16px; border-radius: 50%; background-color: blue;"></div>
                                        <span class="ml-1 font-weight-bold typewriter">BLUE</span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="pl-1 rounded-left" style="font-size: 12px;background-image:linear-gradient(to right, #8340a1 -7% -7%, #fff 50% 50%); color: var(--color1);">
                                        <i class="fa-solid fa-arrow-trend-down border p-1 rounded-circle text-light"
                                            style="font-size: 10px;"></i>
                                        Lowest price in <span class="font-weight-bold">30 days</span></p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-truck-fast text-dark"
                                            style="font-size: 12px;"></i>
                                        Order in
                                        <span class="font-weight-bold blinkAnimation" style="color: var(--color2);">5H:45M</span> for <span class="text-dark font-weight-bold">Same day </span>delivery</p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">Sat 15 Aug, 2024</span>
                                    </p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Delivery between
                                        <span class="text-dark font-weight-bold">Mon 15 Aug - Wed 18 Aug</span>
                                    </p>
                                    <!-- <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-regular fa-clock text-success mr-1" style="font-size: 12px;"></i>
                                        Get it by
                                        <span class="text-dark font-weight-bold">Tomorrow 8PM</span>
                                    </p> -->
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog p-0 closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                                                <p class="font-weight-bold">Move from Bag</p>
                                                <button id="closeAddressDialogBtn" aria-label="close"
                                                class="btn p-0 m-0 closeModalBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="px-3 pb-2 mt-2">
                                                <p class="text-secondary mb-4" style="font-size: 14px;">Are you sure want to move this product from Bag?</p>
                                                <hr class="m-0">
                                                <div class="d-flex mt-1">
                                                    <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                                                    <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                            <div class="productCard">
                                <a href="#" class="position-relative d-block productImg">
                                    <img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt="">
                                        <div class="outOfStock">
                                            <img src="<?=base_url('assets/new_website/img/out-of-stock.png')?>" alt="">
                                        </div>
                                    </a>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn sizeNotAvailable"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 60px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">XS</button>
                                                    <button class="sizeBtn outOfStock">S</button>
                                                    <button class="sizeBtn">M</button>
                                                    <button class="sizeBtn">L</button>
                                                    <button class="sizeBtn">XL</button>
                                                    <button class="sizeBtn">XXL</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">Size not available</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <a href="#" class="toolTip priceTootip text-dark"
                                            tip="Older price: ₹300 New price: ₹250">
                                            <i class="fa-solid fa-info-circle text-dark"></i>
                                        </a>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-success font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown" style="color: #FFD700;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary p-0 m-0" style="font-size: 10px; line-height: 1;">MRP includes all taxes</p>
                                    <p class="text-dark font-weight-bold p-0 m-0 mt-1" style="font-size: 10px; line-height: 1;">NO RETURN</p>
                                    <div class="d-flex align-items-center mt-1">
                                        <div style="width: 16px; height: 16px; border-radius: 50%; background-color: blue;"></div>
                                        <span class="ml-1 font-weight-bold typewriter">BLUE</span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="pl-1 rounded-left" style="font-size: 12px;background-image:linear-gradient(to right, #8340a1 -7% -7%, #fff 50% 50%); color: var(--color1);">
                                        <i class="fa-solid fa-arrow-trend-down border p-1 rounded-circle text-light"
                                            style="font-size: 10px;"></i>
                                        Lowest price in <span class="font-weight-bold">30 days</span></p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-truck-fast text-dark"
                                            style="font-size: 12px;"></i>
                                        Order in
                                        <span class="font-weight-bold blinkAnimation" style="color: var(--color2);">5H:45M</span> for <span class="text-dark font-weight-bold">Same day </span>delivery</p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">Sat 15 Aug, 2024</span>
                                    </p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Delivery between
                                        <span class="text-dark font-weight-bold">Mon 15 Aug - Wed 18 Aug</span>
                                    </p>
                                    <!-- <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-regular fa-clock text-success mr-1" style="font-size: 12px;"></i>
                                        Get it by
                                        <span class="text-dark font-weight-bold">Tomorrow 8PM</span>
                                    </p> -->
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog p-0 closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                                                <p class="font-weight-bold">Move from Bag</p>
                                                <button id="closeAddressDialogBtn" aria-label="close"
                                                class="btn p-0 m-0 closeModalBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="px-3 pb-2 mt-2">
                                                <p class="text-secondary mb-4" style="font-size: 14px;">Are you sure want to move this product from Bag?</p>
                                                <hr class="m-0">
                                                <div class="d-flex mt-1">
                                                    <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                                                    <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                            <div class="productCard">
                                <a href="#" class="position-relative d-block productImg">
                                    <img
                                        src="https://www.jiomart.com/images/product/original/rvxqd4wmk4/eyebogler-light-green-tshirts-men-tshirt-tshirt-for-men-tshirt-mens-tshirt-men-s-polo-neck-regular-fit-half-sleeves-colorblocked-t-shirt-product-images-rvxqd4wmk4-1-202402121853.jpg?im=Resize=(500,630)"
                                        style="width: 120px;" alt="">
                                        <div class="outOfStock">
                                            <img src="<?=base_url('assets/new_website/img/out-of-stock.png')?>" alt="">
                                        </div>
                                    </a>
                                <div>
                                    <p class="font-weight-bold text-dark" style="font-style: 'League Spartan';">Levis's
                                        Men's Slim Fit Shirt</p>
                                    <p class="text-secondary" style="font-size: 12px;">T-Shirt</p>
                                    <div class="mt-1">
                                        <button class="btn px-1 py-0 font-weight-bold sizeSelectBtn sizeNotAvailable"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Size: XL <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog sizeDialog" id="dialog">
                                            <div>
                                                <div class="d-flex">
                                                    <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" style="width: 60px;" alt="">
                                                    <div class="ml-3 text-left">
                                                        <p class="m-0 p-0">Lorem, ipsum.</p>
                                                        <p class="m-0 p-0 text-secondary" style="font-size: 14px;">
                                                            Lorem, ipsum.</p>
                                                        <p class="m-0 p-0">
                                                            <span class="font-weight-bold text-dark"
                                                                style="font-size: 15px;">₹ 1,999</span>
                                                            <span class="text-secondary"
                                                                style="text-decoration: line-through; font-size: 14px;">₹
                                                                2,999</span>
                                                            <span class="font-weight-bold text-danger"
                                                                style="font-size: 14px;">35%</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="my-2" />
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT SIZE
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">XS</button>
                                                    <button class="sizeBtn outOfStock">S</button>
                                                    <button class="sizeBtn">M</button>
                                                    <button class="sizeBtn">L</button>
                                                    <button class="sizeBtn">XL</button>
                                                    <button class="sizeBtn">XXL</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeSizeDialogBtn" aria-label="close"
                                                    class="x closeSizeDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <button class="btn px-1 py-0 font-weight-bold quantityBtn"
                                            style="font-size: 12px; background-color: rgb(0, 0, 0,0.1);">Quantity: 1 <i
                                                class="fa-solid fa-caret-down ml-2"></i></button>
                                        <dialog class="dialog quantityDialog" id="dialog">
                                            <div>
                                                <p class="font-weight-bold text-left m-0 p-0"
                                                    style="font-family: 'League Spartan'; font-size: 16px;">SELECT
                                                    QUANTITY
                                                </p>
                                                <div class="text-left mt-2 stockBtns">
                                                    <button class="sizeBtn">1</button>
                                                    <button class="sizeBtn">2</button>
                                                    <button class="sizeBtn">3</button>
                                                    <button class="sizeBtn">4</button>
                                                    <button class="sizeBtn">5</button>
                                                    <button class="sizeBtn">6</button>
                                                    <button class="sizeBtn">7</button>
                                                    <button class="sizeBtn">8</button>
                                                    <button class="sizeBtn">9</button>
                                                    <button class="sizeBtn">10</button>
                                                </div>
                                                <button class="btn w-100 mt-4"
                                                    style="background-color: var(--color1); color: white;">DONE</button>
                                                <button id="closeQuantitiDialogBtn" aria-label="close"
                                                    class="x closeQuantitiDialogBtn"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </dialog>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">2 left</span>
                                        <span class="border border-danger rounded-lg p-1 ml-1 text-danger font-weight-bold"
                                            style="font-size: 10px; white-space: nowrap;">Size not available</span>
                                    </div>
                                    <div class="mt-1" style="font-size: 14px;">
                                        <span class="font-weight-bold">₹200</span>
                                        <a href="#" class="toolTip priceTootip text-dark"
                                            tip="Older price: ₹300 New price: ₹250">
                                            <i class="fa-solid fa-info-circle text-dark"></i>
                                        </a>
                                        <span class="text-secondary ml-1"
                                            style="text-decoration: line-through;">₹300</span>
                                        <span class="text-success font-weight-bold ml-1">35%</span>
                                        <span class="font-weight-bold"
                                            style="border: 1px solid rgb(0, 0, 0,0.15); padding: 2px 4px; border-radius: 100vh; font-size: 12px; white-space: nowrap;">
                                            <i class="fa-solid fa-crown" style="color: #FFD700;"></i>
                                            <span>RC Price: ₹195</span>
                                        </span>
                                    </div>
                                    <p class="text-secondary p-0 m-0" style="font-size: 10px; line-height: 1;">MRP includes all taxes</p>
                                    <p class="text-dark font-weight-bold p-0 m-0 mt-1" style="font-size: 10px; line-height: 1;">NO RETURN</p>
                                    <div class="d-flex align-items-center mt-1">
                                        <div style="width: 16px; height: 16px; border-radius: 50%; background-color: blue;"></div>
                                        <span class="ml-1 font-weight-bold typewriter">BLUE</span>
                                    </div>
                                    <p class="text-secondary mt-2" style="font-size: 12px;">
                                        <i class="fa-solid fa-rotate-left border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        <span class="text-dark font-weight-bold">14 days</span> return available
                                    </p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-gift border p-1 rounded-circle text-dark"
                                            style="font-size: 10px;"></i>
                                        This product
                                        <span class="text-dark font-weight-bold">cannot</span> be Gift wrapped
                                    </p>
                                    <p class="pl-1 rounded-left" style="font-size: 12px;background-image:linear-gradient(to right, #8340a1 -7% -7%, #fff 50% 50%); color: var(--color1);">
                                        <i class="fa-solid fa-arrow-trend-down border p-1 rounded-circle text-light"
                                            style="font-size: 10px;"></i>
                                        Lowest price in <span class="font-weight-bold">30 days</span></p>
                                    <p class="text-secondary" style="font-size: 12px;">
                                        <i class="fa-solid fa-truck-fast text-dark"
                                            style="font-size: 12px;"></i>
                                        Order in
                                        <span class="font-weight-bold blinkAnimation" style="color: var(--color2);">5H:45M</span> for <span class="text-dark font-weight-bold">Same day </span>delivery</p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Deliverd by
                                        <span class="text-dark font-weight-bold">Sat 15 Aug, 2024</span>
                                    </p>
                                    <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-solid fa-check text-success mr-1" style="font-size: 12px;"></i>
                                        Delivery between
                                        <span class="text-dark font-weight-bold">Mon 15 Aug - Wed 18 Aug</span>
                                    </p>
                                    <!-- <p class="text-secondary pl-1" style="font-size: 12px;">
                                        <i class="fa-regular fa-clock text-success mr-1" style="font-size: 12px;"></i>
                                        Get it by
                                        <span class="text-dark font-weight-bold">Tomorrow 8PM</span>
                                    </p> -->
                                    <button class="closeBtn btn p-0"><i class="fa-solid fa-xmark"></i></button>
                                    <dialog class="dialog p-0 closeProductDialogBtn" id="dialog">
                                        <div>
                                            <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                                                <p class="font-weight-bold">Move from Bag</p>
                                                <button id="closeAddressDialogBtn" aria-label="close"
                                                class="btn p-0 m-0 closeModalBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="px-3 pb-2 mt-2">
                                                <p class="text-secondary mb-4" style="font-size: 14px;">Are you sure want to move this product from Bag?</p>
                                                <hr class="m-0">
                                                <div class="d-flex mt-1">
                                                    <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">REMOVE</button>
                                                    <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">MOVE TO WISHLIST</button>
                                                </div>
                                            </div>
                                        </div>
                                    </dialog>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-block text-left border mt-4 p-3 rounded-lg" style="font-size: 14px;">
                            <img src="<?=base_url('assets/new_website/img/wishlist.png')?>" style="width: 18px;" alt="">
                            <span class="font-weight-bold">Add More From Wishlist</span>
                            <i class="fa-solid fa-chevron-right float-right mt-1"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0 borderStart">
                    <div class="card py-2 rounded-lg">
                        <div class="" id="headingOne">
                            <button class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <img src="<?=base_url('assets/new_website/img/coupon.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                    alt="">
                                <span class="font-weight-bold">Apply coupons</span>
                                <i class="fa-solid fa-caret-down float-right mt-1"></i>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                            <div class="card-body p-0 px-3 pb-2 mt-2">
                                <div class="d-flex align-items-center rounded-lg mb-2 p-2" style="border: 2px solid #28A745;">
                                    <i class="fa-solid fa-circle-check text-success mr-2"></i>
                                    <div class="flex-grow-1">
                                        <p class="m-0 p-0">Promocode applied successfully!</p>
                                        <p class="m-0 p-0 text-success">₹399 Saved</p>
                                    </div>
                                    <button class="btn p-0 m-0"><img src="<?=base_url('assets/new_website/img/trash.png')?>" style="width: 18px;" alt=""></button>
                                </div>
                                <form style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                    <div class="d-flex align-items-center border rounded-lg">
                                        <input type="text" id="couponCode" name="couponCode" class="border-0 ml-2 outline-0 flex-grow-1"
                                        placeholder="Enter coupon code" style="font-size: 14px;">
                                        <button type="submit" class="btn text-secondary font-weight-bold"
                                        style="font-size: 14px;">APPLY</button>
                                    </div>
                                    <!-- <span class="promoErrorCodeMsg text-success mt-1"><i class="fa-solid fa-circle-check"></i> Promocode
                                        applied successfully!</span> -->
                                    <!-- <span class="promoCodeSuccessMsg text-danger mt-1"><i
                                            class="fa-solid fa-triangle-exclamation"></i> Invalid promocode!</span> -->
                                </form>
                                <button onclick="openCouponSidebar()" class="btn text-dark font-weight-bold m-0 p-0 float-right mt-3"
                                    style="font-size: 12px;">All Coupons
                                    <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card py-2 rounded-lg mt-2">
                        <div class="" id="headingTwo">
                            <button class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <img src="<?=base_url('assets/new_website/img/giftbox.png')?>" class="mr-1" style="width: 18px; margin-top: -4px;"
                                    alt="">
                                Add Gift wrap
                                <i class="fa-solid fa-caret-down float-right"></i>
                            </button>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                            <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                <p><span class="font-weight-bold">Add a Personal touch:</span> Enhance your gift with beautiful wrapping & a heartfelt message for only ₹35</p>
                                <button onclick="openGiftSidebar()" class="btn mt-2 font-weight-bold"
                                    style="font-size: 14px; border: 1px solid var(--color1); color: var(--color1);">ADD
                                    NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="royalMemberCard mt-2 rounded-lg">
                        <p class="font-weight-bold text-center text-white pt-2" style="letter-spacing: 2px; font-size: 16px; font-family: 'League Spartan';">UNLOCK BENEFITS</p>
                        <div class="text-white text-center">
                            <i class="fa-solid fa-crown mr-1 blinkAnimation" style="color: yellow;"></i>
                            <span style="font-family: 'League Spartan';">Join Royal Club & save ₹ with this order</span>
                            <a href="#" class="toolTip text-dark"
                                tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                <i class="fa-solid fa-info-circle ml-1" style="color: var(--color4);"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                            <div class="bg-white pt-2 rounded-lg text-center">
                                <p class="mb-2" style="font-family: 'League Spartan';">3 MONTHS</p>
                                <p class="font-weight-bold">₹299</p>
                                <p class="text-secondary" style="font-size: 12px;"><span
                                        style="text-decoration: line-through;">₹399</span> <span
                                        class="text-danger">(30% OFF)</span></p>
                                <button class="btn font-weight-bold mt-2 w-100" style="font-size: 12px;">ADD
                                    NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="card py-2 rounded-lg mt-2">
                        <div class="" id="headingThree">
                            <button class="btn btn-block text-left d-flex align-items-center"
                                style="font-size: 14px;" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="<?=base_url('assets/new_website/img/crown.png')?>" class="mr-2" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <div class="d-inline-block flex-grow-1">
                                        <p class="p-0 m-0">REDEEM YOUR ROYAL REWARDS</p> 
                                        <span class="font-weight-normal" style="font-size: 12px">(50 available)</span>
                                    </div>
                                    <i class="fa-solid fa-caret-down float-right"></i>
                            </button>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                            <div class="card-body p-0 px-3 pb-2" style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                <p>To make the most of your Royal Club cash, simply collect ₹100 or more, and you'll be ready to enjoy it on your next purchase!</p>
                            </div>
                        </div>
                    </div>
                    <div class="paymentDetails">
                        <div class="text-center mt-3 mb-1">
                            <p class="font-weight-bold">PRICE DETAILS (20 items)</p>
                            <p class="text-secondary" style="font-size: 12px;">Prices are inclusive of all taxes</p>
                        </div>
                        <div class="text-dark" style="font-size: 14px;">
                            <p class="py-1 px-3 font-weight-bold" >
                                <span>Total</span> <span class="float-right font-weight-normal">₹399</span>
                            </p>
                            <p class="py-1 px-3"><span>Discount</span> <span
                                    class="float-right font-weight-normal">-
                                    ₹399</span></p>
                            <p class="py-1 px-3" >
                                <span>Estimated GST</span> <span class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3"><span>Coupon Discount</span> <span
                                    class="float-right font-weight-normal">-
                                    ₹399</span></p>
                            <p class="py-1 px-3" >
                                <span>Gift wrap charges</span> <span class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3"><span>Shipping charges</span> <span
                                    class="float-right font-weight-normal">+
                                    ₹399</span></p>
                            <p class="py-1 px-3" >
                                <span>Platform convinience fee <button class="btn text-secondary p-0 m-0 platformDialogBtn"><i class="fa-solid fa-info-circle"></i></button></span> <span
                                    class="float-right font-weight-normal">+₹399</span>
                            </p>
                            <p class="py-1 px-3"><span>Delivery charges</span> <span
                                    class="float-right font-weight-normal">+
                                    ₹399</span></p>
                            <p class="py-1 pt-2 px-3 font-weight-bold border-top">
                                <span>Sub-total</span> <span class="float-right">₹399</span>
                            </p>
                            <p class="py-1 pt-2 px-3 font-weight-bold border-top">
                                <span>Net payment</span> <span class="float-right">₹399</span>
                            </p>
                            <p class="py-1 px-3 font-weight-bold">
                                <span>
                                    <i class="fa-solid fa-crown mr-1" style="color: #FFD700;"></i>
                                    Royal Club saving
                                </span>
                                <span
                                    class="float-right">-₹399
                                </span>
                            </p>
                            <p class="py-1 px-3 mt-3 mx-3 text-center font-weight-bold rounded-pill"
                                style="background-color:#e83e8c20 ;">
                                You saved ₹99 on this purchase
                            </p>
                        </div>
                        <div class="placeOrderBtn">
                            <button class="btn w-100 py-1 mt-3 font-weight-bold outOfStockBtn"
                                style="background-color: var(--color1); color: white;">PLACE ORDER</button>
                        </div>
                        <div class="d-flex justify-content-around mt-2 text-secondary"
                            style="font-size: 10px; font-family: 'League Spartan'; border-top: 1px solid var(--color1);">
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Genuine product</p>
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Secure payment</p>
                            <p class="m-0 p-0"><i class="fa-solid fa-circle-check mr-1"
                                    style="color: var(--color2);"></i>Easy returns</p>
                        </div>
                        <!-- <div class="mt-2 py-2 px-3 rounded-lg d-lg-block d-md-block d-sm-none d-none"
                            style="background-image: linear-gradient(128deg, #e83e8c 0%, 12%, #8340a1 34% 100%); font-family: 'League Spartan';">
                            <div class="d-flex align-items-center mt-2">
                                <img src="./images/rupee.png" style="width: 30px; position: relative; left: 6px;"
                                    alt="">
                                <p class="m-0 p-0 px-3"
                                    style="background-image: linear-gradient(90deg, #fff 17% 17%, #ff0 110% 110%);">
                                    <span class="blinkAnimation">
                                        Save
                                        upto <span class="font-weight-bold">₹399</span> with Royal
                                        Club
                                    </span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="./images/delivery-man.png" style="width: 32px;" alt="">
                                    <p class="m-0 p-0 ml-2 text-light">Free shipping on every order</p>
                                </div>
                                <button class="btn" style="color: yellow; box-shadow: 0px 0px 4px 1px white;"><i
                                        class="fa-solid fa-cart-shopping mr-1"></i>Add</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="d-lg-block d-md-block d-sm-block d-xs-block d-none">
            <div class="productsContainer">
                <p class="font-weight-bold text-dark" style="font-size: 18px;">You may also like</p>
                <hr class="mt-1 mb-3">
                <div class="products">
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                    <div class="card">
                        <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="my-1 p-2 text-center" style="font-size: 14px">
                            <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                            <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                            <p>
                                <span>₹1,999</span> 
                                <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                        </div>
                        <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                            style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-lg-none d-md-none d-sm-none d-xs-none d-block">
            <div class="my-4 p-3 rounded-lg mobileSwiperContainer">
                <p class="font-weight-bold text-dark">You may also like</p>
                <hr>
                <div class="swiper productSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" style="width:240px; height: 280px; object-fit: cover" alt="...">
                                <div class="my-1 p-2 text-center" style="font-size: 14px">
                                    <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                                    <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                                    <p>
                                        <span>₹1,999</span>
                                        <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                                </div>
                                <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                                    style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="<?=base_url('assets/new_website/img/product-1.jpg')?>" class="card-img-top" style="width:240px; height: 280px; object-fit: cover" alt="...">
                                <div class="my-1 p-2 text-center" style="font-size: 14px">
                                    <p class="font-weight-bold text-dark">Lorem, ipsum.</p>
                                    <p class="text-secondary" style="font-size: 12px">T-Shirt</p>
                                    <p>
                                        <span>₹1,999</span>
                                        <span class="text-secondary" style="text-decoration: line-through">₹2,999</span>
                                        <span class="font-weight-bold text-success" style="font-size: 12px; white-space: nowrap">10% off</span></p>
                                </div>
                                <button onclick="scrollToTop()" class="btn font-weight-bold border-top rounded-0"
                                    style="font-size: 14px; color: var(--color2);">ADD TO BAG</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const closeBtn = document.querySelectorAll('.closeBtn');
        const modal = document.querySelectorAll('.closeProductDialogBtn')
        const closeModalBtn = document.querySelectorAll('.closeModalBtn')

        closeBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                modal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        closeModalBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                modal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        function openCouponSidebar() {
            document.getElementById("couponSidebar").style.width = "360px";
            document.getElementById("couponSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.add('sidebar-open');
        }

        function closeCouponSidebar() {
            document.getElementById("couponSidebar").style.width = "0";
            document.getElementById("couponSidebar").style.boxShadow = "none";
            document.body.classList.remove('sidebar-open');
        }

        function openGiftSidebar() {
            document.getElementById("giftSidebar").style.width = "360px";
            document.getElementById("giftSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.add('sidebar-open');
        }

        function closeGiftSidebar() {
            document.getElementById("giftSidebar").style.width = "0";
            document.getElementById("giftSidebar").style.boxShadow = "none";
            document.body.classList.remove('sidebar-open');
        }

        const sizeBtn = document.querySelectorAll('.sizeSelectBtn');
        const sizeModal = document.querySelectorAll('.sizeDialog')
        const quantityBtn = document.querySelectorAll('.quantityBtn');
        const quantityModal = document.querySelectorAll('.quantityDialog')
        const closeSizeDialogBtn = document.querySelectorAll('.closeSizeDialogBtn')
        const closeQuantitiDialogBtn = document.querySelectorAll('.closeQuantitiDialogBtn')

        sizeBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                sizeModal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        quantityBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                quantityModal[i].showModal();
                document.body.classList.toggle('modal-open');
            })
        })

        closeSizeDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                sizeModal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        closeQuantitiDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                quantityModal[i].close();
                document.body.classList.toggle('modal-open');
                console.log(i)
            })
        })

        const outOfStockDialog = document.querySelector('.outOfStockDialog');
        const outOfStockBtn = document.querySelector('.outOfStockBtn');
        const closeoutOfStockDialogBtn = document.querySelector('.closeoutOfStockDialogBtn')

        outOfStockBtn.addEventListener('click', () => {
            outOfStockDialog.showModal();
            document.body.classList.add('modal-open');
        })

        closeoutOfStockDialogBtn.addEventListener('click', () => {
            outOfStockDialog.close();
            document.body.classList.remove('modal-open');
        })

        const addressDialogBtn = document.querySelectorAll('.addressDialogBtn');
        const addressDialog = document.querySelector('.addressDialog');
        const closeAddressDialogBtn = document.querySelector('.closeAddressDialogBtn')

        addressDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                addressDialog.showModal();
                document.body.classList.add('sidebar-open');
            })
        })

        closeAddressDialogBtn.addEventListener('click', () => {
            addressDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const platformDialogBtn = document.querySelector('.platformDialogBtn');
        const platformDialog = document.querySelector('.platformDialog');
        const closePlatformDialogBtn = document.querySelector('.closePlatformDialogBtn')

        platformDialogBtn.addEventListener('click', () => {
            platformDialog.showModal();
            document.body.classList.add('sidebar-open');
        })

        closePlatformDialogBtn.addEventListener('click', () => {
            platformDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const removeDialogBtn = document.querySelectorAll('.removeDialogBtn');
        const removeDialog = document.querySelector('.removeDialog');
        const closeRemoveDialogBtn = document.querySelector('.closeRemoveDialogBtn')

        removeDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
            removeDialog.showModal();
            document.body.classList.add('sidebar-open');
        })
        })

        closeRemoveDialogBtn.addEventListener('click', () => {
            removeDialog.close();
            document.body.classList.remove('sidebar-open');
        })
        
        const moveDialogBtn = document.querySelectorAll('.moveDialogBtn');
        const moveDialog = document.querySelector('.moveDialog');
        const closeMoveDialogBtn = document.querySelectorAll('.closeMoveDialogBtn')

        moveDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                moveDialog.showModal();
                document.body.classList.add('sidebar-open');
            })
        })

        closeMoveDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                moveDialog.close();
                document.body.classList.remove('sidebar-open');
            })
        })

        const addAddressBtn = document.querySelector('.addAddressBtn');
        const addressSidebar = document.querySelector('.addressSidebar');

        function openAddressSidebar() {
            addressDialog.close();
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "360px";
            document.getElementById("addressSidebar").style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.toggle('modal-open');
        }

        function closeAddressSidebar() {
            addressDialog.showModal();
            document.body.classList.toggle('modal-open');
            document.getElementById("addressSidebar").style.width = "0";
            document.getElementById("addressSidebar").style.boxShadow = "none";
            document.body.classList.toggle('modal-open');
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        const officeBtn = document.querySelector('.officeBtn');
        const homeButton = document.querySelector('.homeButton');
        const weekendCheckbox = document.querySelector('.weekendCheckbox');

        officeBtn.addEventListener('focus', () => {
            weekendCheckbox.style.display = 'block'
            officeBtn.classList.add('active')
            homeButton.classList.remove('active')
        })

        homeButton.addEventListener('focus', () => {
            weekendCheckbox.style.display = 'none'
            homeButton.classList.add('active')
            officeBtn.classList.remove('active')
        })

        const pincodeErrorMsg = document.querySelector('.pincodeErrorMsg');
        const pincodeInputField = document.querySelector('.picodeInputField');
        const pincodeForm = document.querySelector('#pincodeForm');

        pincodeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (pincodeInputField.value.length != 6) {
                pincodeErrorMsg.style.display = 'block';
                document.querySelector('.pincodeInput').style.borderColor = 'red';
                return
            } else if(pincodeInputField.value == '000000'){
                pincodeErrorMsg.style.display = 'block';
                document.querySelector('.pincodeInput').style.borderColor = 'red';
                return
            }else{
                pincodeErrorMsg.style.display = 'none';
                document.querySelector('.pincodeInput').style.borderColor = '#d4d5d9';
            }
        })
        
        pincodeInputField.addEventListener('input', () => {
            if(pincodeErrorMsg.style.display == 'block'){
                pincodeErrorMsg.style.display = 'none';
                document.querySelector('.pincodeInput').style.borderColor = '#d4d5d9';
            }
        })

        const deleteBtn = document.querySelectorAll('.deleteBtn');
        const cancelBtn = document.querySelectorAll('.cancelBtn')
        const confirmBtn = document.querySelectorAll('.confirmBtn')
        const deliveringBtn = document.querySelectorAll('.deliveringBtn')
        const deliverBtn = document.querySelectorAll('.deliverBtn')
        const editBtn = document.querySelectorAll('.editBtn')

        deleteBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                cancelBtn[i].style.display = 'inline';
                confirmBtn[i].style.display = 'inline';
                deleteBtn[i].style.display = 'none';
                deliveringBtn[i].style.display = 'none';
                deliverBtn[i].style.display = 'none';
                editBtn[i].style.display = 'none';
                console.log(i)
            })
        })

        cancelBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                cancelBtn[i].style.display = 'none';
                confirmBtn[i].style.display = 'none';
                deleteBtn[i].style.display = 'inline';
                deliveringBtn[i].style.display = 'inline';
                deliverBtn[i].style.display = 'inline';
                editBtn[i].style.display = 'inline';
                console.log(i)
            })
        })

        const addAddressForm = document.querySelector('#addAddressForm');
        const nameErrorMsg = document.querySelector('.nameErrorMsg');
        const mobileErrorMsg = document.querySelector('.mobileErrorMsg');
        const pinErrorMsg = document.querySelector('.pinErrorMsg');
        const addressErrorMsg = document.querySelector('.addressErrorMsg');
        const localityErrorMsg = document.querySelector('.localityErrorMsg');

        addAddressForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const data = new FormData(addAddressForm);
            const name = data.get('fullName');
            const mobile = data.get('mobile');
            const pinCode = data.get('pinCode');
            const address = data.get('address');
            const locality = data.get('locality');
        
            if (name == '') {
                nameErrorMsg.style.display = 'block';
                document.querySelector('.fullName').style.borderColor = 'red';
            }else if (mobile == '') {
                mobileErrorMsg.style.display = 'block';
                document.querySelector('.mobile').style.borderColor = 'red';
            }else if (pinCode == '') {
                pinErrorMsg.style.display = 'block';
                document.querySelector('.pincdeInput').style.borderColor = 'red';
            }else if (address == '') {
                addressErrorMsg.style.display = 'block';
                document.querySelector('.address').style.borderColor = 'red';
            }else if (locality == '') {
                localityErrorMsg.style.display = 'block';
                document.querySelector('.localityInputField').style.borderColor = 'red';
            }
        })

        document.querySelector('.fullName').addEventListener('focus', () => {
            if(nameErrorMsg.style.display == 'block'){
                nameErrorMsg.style.display = 'none';
                document.querySelector('.fullName').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.mobile').addEventListener('focus', () => {
            if(mobileErrorMsg.style.display == 'block'){
                mobileErrorMsg.style.display = 'none';
                document.querySelector('.mobile').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.pincdeInput').addEventListener('focus', () => {
            if(pinErrorMsg.style.display == 'block'){
                pinErrorMsg.style.display = 'none';
                document.querySelector('.pincdeInput').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.address').addEventListener('focus', () => {
            if(addressErrorMsg.style.display == 'block'){
                addressErrorMsg.style.display = 'none';
                document.querySelector('.address').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.localityInputField').addEventListener('focus', () => {
            if(localityErrorMsg.style.display == 'block'){
                localityErrorMsg.style.display = 'none';
                document.querySelector('.locality').style.borderColor = '#d4d5d9';
            }
        })

        const giftNameErrorMsg = document.querySelector('.giftNameErrorMsg');
        const giftMessageErrorMsg = document.querySelector('.giftMessageErrorMsg');
        const giftSenderNameErrorMsg = document.querySelector('.giftSenderNameErrorMsg');

        giftForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const data = new FormData(giftForm);
            const recepientName = data.get('recepientName');
            const giftMessage = data.get('giftMessage');
            const senderName = data.get('senderName');
        
            if (recepientName == '') {
                giftNameErrorMsg.style.display = 'inline';
                document.querySelector('.giftNameInput').style.borderColor = 'red';
            }else if (giftMessage == '') {
                giftMessageErrorMsg.style.display = 'inline';
                document.querySelector('.giftMessageInput').style.borderColor = 'red';
            }else if (senderName == '') {
                giftSenderNameErrorMsg.style.display = 'inline';
                document.querySelector('.giftSenderNameInput').style.borderColor = 'red';
            }
        })

        document.querySelector('.giftNameInput').addEventListener('focus', () => {
            if(giftNameErrorMsg.style.display == 'inline'){
                giftNameErrorMsg.style.display = 'none';
                document.querySelector('.giftNameInput').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.giftMessageInput').addEventListener('focus', () => {
            if(giftMessageErrorMsg.style.display == 'inline'){
                giftMessageErrorMsg.style.display = 'none';
                document.querySelector('.giftMessageInput').style.borderColor = '#d4d5d9';
            }
        })

        document.querySelector('.giftSenderNameInput').addEventListener('focus', () => {
            if(giftSenderNameErrorMsg.style.display == 'inline'){
                giftSenderNameErrorMsg.style.display = 'none';
                document.querySelector('.giftSenderNameInput').style.borderColor = '#d4d5d9';
            }
        })
        
        const royalSidebar = document.querySelector('#royalSidebar');

        function openRoyalSidebar() {
            royalSidebar.style.width = "360px";
            royalSidebar.style.boxShadow = "-2px 0px 4px 0px rgb(0, 0, 0,0.2)";
            document.body.classList.add('sidebar-open');
        }

        function closeRoyalSidebar() {
            royalSidebar.style.width = "0";
            royalSidebar.style.boxShadow = "none";
            document.body.classList.remove('sidebar-open');
        }

        var swiper = new Swiper('.productSwiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay:false,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
        });

    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>