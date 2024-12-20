<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Home </title>
    <?php include('include/cssLinks.php'); ?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>

        *{
            box-sizing: border-box;
        }
        
        h3{
           font-family: var(--heading_font);
           font-size: 28px;
            font-weight: 500;
        }

        body{
            background-color: #FFFFFF;
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
        
        .fs10{
            font-size: 10px;
        }
        .fs12{
            font-size: 12px;
        }
        .fs14{
            font-size: 14px;
        }
        .fs16{
            font-size: 16px;
        }

        .fs18{
            font-size: 18px;
        }

        input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        input[type=radio] {
            accent-color: var(--pinkcolor);
        }

        .feedback-btn{
            display: none!important;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        .rating {
            font-size: 12px;
            position: absolute;
            bottom: 4px;
            left: 4px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px 4px;
            border-radius: 4px;
        }

        .rating2 {
            font-size: 12px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px 4px;
            border-radius: 4px;
        }

        .addBtnContainer, .extraBtnContainer{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap:4px;
        }

        .extraBtnContainer{
            display: grid;
            grid-template-columns: 1fr;
            gap:4px;
        }
        
        .extraBtnContainer a{
            display: none;
        }

        .homeBtn{
            margin-block: 16px;
        }

        .addToBagBtn, .sidebarAddToBagBtn{
            background-color: var(--maincolor);
            color: white;
            padding-block: 8px;
            font-weight:500;
        }

        .addToBagBtn.active, .sidebarAddToBagBtn.active{
            background-color: var(--pinkcolor)!important;
        }

        .addToBagBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        .wishlistBtn{
            border: 1px solid rgba(0, 0, 0, 0.25);
            color: rgba(0, 0, 0, 0.7);
            padding-block: 8px;
            font-weight:500;
        }

        .priceContainer{
            position: relative;
            cursor: pointer!important;
        }

        .priceHoverDetails, .clubPriceHoverDetails{
            display: none;
            background-color: white;
            width: 240px;
            border-radius: 8px;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.25);
            padding: 10px;
            position: absolute;
            top:30px;
            z-index: 1000;
        }

        .clubPriceHoverDetails{
            top:52px!important;
        }

        .sidebar{
            height: 100%;
            width: 50%;
            background-color: white;
            transform: translateX(100%);
            position: fixed;
            top: 0;
            right: 0;
            transition: 0.3s;
            padding-top: 10px;
            z-index: 100000;
        }

        .sidebar .tabButton.active{
            background-color: var(--pinkcolor)!important;
            color: white!important;
        }

        .sidebar .tabButton:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        .sidebarContent{
            height: 268px;
            overflow-y: scroll; /* Enable scrolling */
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;
        }

        .sidebarContent::-webkit-scrollbar{
            display: none;
        }

        a:hover{
            text-decoration: none;
            color: black;
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
            color: var(--pinkcolor);
            font-weight: 600;
        }

        .productHeroSection {
            width: 80%;
        }

        .productImageContainer {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .sizeChartBtn{
            color: var(--pinkcolor);
        }
        
        .swiper {
            width: 100%;
        }

        .mySwiper2{
            width: 400px;
        }

        .colorSwiper{
            height: 100px;
        }

        .colorSwiper a.active img{
            border: 2px solid #FFD700;
            padding: 2px;
        }
        
        .sizeSwiper{
            height: 55px;
        }

        .sizeSwiper2, .sizeSwiper3, .sizeSwiper4{
            height: 55px;
        }

        .lookSwiper{
            height: 180px;
        }

        .lookSwiperItem{            
            transition: all 200ms ease;
        }

        .lookSwiperItem:hover{
            text-decoration: underline;
        }

        .lookSwiperItem:hover img{
            filter: brightness(125%);
        }

        .offerSwiper{
            height: auto;
        }

        .productImageSwiper{
            height: auto;
            padding-bottom: 8px;
        }
        
        .productImageSwiper .swiper-slide img{
            object-fit: contain;
            width: 100%;
        }

        .productImageSwiper .swiper-pagination .swiper-pagination-bullet:last-child{
            border-radius: 12% 88% 90% 10% / 10% 49% 51% 10% !important;
        }

        .productImageSwiper .swiper-pagination .swiper-pagination-bullet-active:last-child{
            border-radius: 12% 88% 90% 10% / 10% 49% 51% 10% !important;
        }

        .thumbnailSwiper2 .swiper-slide img{
            object-fit: cover;
            width: 100%;
        }

        .swiper-slide{
            text-align:center;
        }

        .colorSwiper .swiper-slide img {
            object-fit: cover;
            height: 100%;
        }

        .swiper-slide img {
            object-fit: contain;
            height: 100%;
        }

        .swiper-button-next,
        .swiper-button-prev{
            font-size: 16px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after{
            color: white;
            background-color: var(--maincolor);
            padding: 8px 10px;
            border-radius: 100vh;
            font-size: 12px;
            font-weight: 900;
        }

        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled{
            display: none;
        }

        .swiper-pagination-bullet-active{
            background-color: var(--pinkcolor)!important;
        }

        /* .swiper-pagination .swiper-pagination-bullet-active:last-child{
            opacity: 0!important;
        }

        .swiper-pagination .swiper-pagination-bullet-active:last-child::after{
            font-family: "Font Awesome 6 Free";
            content: "\f00c";
        } */

        .sizeDetails{
            display: none;
            background-color: white;
            position: absolute;
            top: -120px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 65%;
            padding: 10px;
            border-radius: 8px;
        }

        .selectSizeBtn{
            background-color: white;
            position: relative;
            border: 2px solid var(--maincolor);
            outline: none !important;
            border-radius: 20px;
            margin-top: 0.5rem;
            transition: all 200ms ease;
            padding: 10px;
        }

        .selectSizeBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
            border-color: var(--pinkcolor);
        }

        .sizeBtn {
            background-color: white;
            position: relative;
            border: 2px solid var(--maincolor);
            width: 40px;
            height: 40px;
            outline: none !important;
            border-radius: 12px;
            margin-top: 0.5rem;
            transition: all 200ms ease;
        }

        .sizeBtn.active{
            background-color: var(--pinkcolor)!important;
            color: white!important;
            border-color: var(--pinkcolor)!important;
        }

        .sizeBtn.freeSizeBtn{
            width: 90px;
            border-radius: 20px;
        }

        .sizeBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
            border-color: var(--pinkcolor);
        }

        .sizeBtn.outOfStock {
            position: relative;
            background-color: rgb(0, 0, 0, 0.35);
            pointer-events: none;
            cursor: not-allowed;
        }

        .sizeBtn.recommended {
            box-shadow: -2px 4px 2px 0px rgba(0, 0, 0, 0.2);
            animation: hu__hu__ infinite 2s ease-in-out
        }

        @keyframes hu__hu__ {
            50% { transform: translateY(-8px) }
        }

        .sizeBtn.stockLabel::after {
            content: attr(data-stock);
            width: 100%;
            position: absolute;
            bottom: -4px;
            line-height: 1.25;
            border-radius: 4px;
            box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.25);
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--pinkcolor);
            color: white;
            font-size: 10px;
            z-index: 2;
        }

        .outOfStock::after {
            content: "";
            position: absolute;
            top: -4px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 1.5px;
            height: 44px;
            background-color: var(--maincolor);
            z-index: 2;
            border-radius: 12px;
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
        }

        a.toolTip::after {
            content: attr(tip);
            background-color: #FCFCFC;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14;
            line-height: 1.25em;
            width: 120px;
            padding: 5px 10px;
            border-radius: 6px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .65);
            position: absolute;
            top: -103px;
            right: -53px;
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

        .features img{
            filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.4));
        }

        .coupon {
            width: 460px;
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

        .pincodeInput {
            border:0;
            outline:0;
        }

        .pincodeInput::placeholder {
            color: rgb(150, 150, 150);
        }

        .pincodeBtn, .pincodeChangeBtn {
            background-color: transparent;
            border:0;
            outline:0;
            font-size: 14px;
            font-weight: 600;
            color: var(--pinkcolor);
        }

        dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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

        .celebDialog img{
            height: 420px;
            width: 300px;
        }

        .similarProductsContainer {
            width: 85%;
            margin-inline: auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px;
            padding: 16px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .similarBtn a {
            position: absolute;
            bottom: 16px;
            right: 16px;
            padding: 4px 6px;
            outline: none;
            border: none;
            border-radius: 100vh;
            background-color: white;
            z-index: 10;
        }

        .similarBtn a:hover .similarText {
            display: inline;
        }

        .similarBtn a img {
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

        .productHighlights {
            position: absolute;
            bottom: 16px;
            left: 0px;
        }

        .productHighlights p{
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
            padding: 4px 6px;
            margin-block: 4px;
            border-radius: 0px 4px 4px 0px;
            font-weight: 500;
            font-size: 12px;
            line-height: 1.5;
        }

        .shareBtn, .likeBtn {
            background-color: var(--maincolor);
            color: white;
            padding: 8px 12px;
            border-radius: 100vh;
        }

        .shareBtn:hover, .likeBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
        }

        .modalBtnContainer{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .modalBtn{
            position: relative;
            overflow: hidden;
            border-radius: 0!important;
        }

        .modalBtn img{
            transition: all 2s ease-in-out;
        }

        .modalBtn:hover img{
            scale: 1.2;
        }

        .modalBtnText{
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            bottom: 0;
            color: white;
            font-weight: 500;
            padding-block: 16px;
        }

        .reviewsContainer{
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .reviewsContainer > *:not(:first-child) {
            display: none;
        }

        .reviewsContainer::-webkit-scrollbar{
            width: 0;
        }

        .extraReviewImg{
            padding: 2px 4px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .blinkingText {
            animation: blink 1.5s linear infinite;
        }

        #toaster {
            position: fixed;
            top: 160px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            min-width: 220px;
            margin-bottom: 10px;
            padding: 12px;
            font-weight: 600;
            font-size: 12px;
            color: #fff;
            background-color: var(--maincolor);
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
            background-color: var(--maincolor);
            border: 1px solid green;
            color: white;
        }

        .toast.error {
            background-color: var(--maincolor);
            border: 1px solid red;
            color: white;
        }

        #toaster2 {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 1000;
        }

        #toaster2 div {
            display: flex;
        }

        .toast2 {
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

        .toast2 img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .toast2 .message {
            flex: 1;
            font-weight: bold;
        }

        .toast2 button {
            background-color: transparent;
            font-weight: bold;
            color: var(--pinkcolor);
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .toast2 button:hover {
            background-color: #f0f0f0;
        }

        .toast2.show {
            opacity: 1;
            transform: translateX(0);
        }

        .toast2.success {
            background-color: #333333;
        }

        .toast2.error {
            background-color: #dc3545;
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

        .notifyMsg, .notifyErrorMsg {
            display: none;
        }

        .youtubePopup {
            display: none;
            position: fixed;
            top:0;
            z-index: 10000;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 100000;
        }

        .youtubePopup iframe {
            width: 100%;
            aspect-ratio: 16/9;
        }

        .youtubePopupCloseBtn{
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: white;
            font-size: 24px;
        }

        .likeBtn {
            background-color: var(--maincolor);
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

        .heart-container .svg-outline, .heart-container .svg-filled {
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
        
        .likeContainer input, .dislikeContainer input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .likeContainer, .dislikeContainer {
            width: 24px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            cursor: pointer;
            user-select: none;
        }

        .dislikeContainer{
            transform: rotate(180deg);
        }

        .likeContainer input:checked ~ .like {
            animation: kfs-fill-like .5s forwards;
        }

        .dislikeContainer input:checked ~ .like {
            animation: kfs-fill-dislike .5s forwards;
        }

        .likeContainer .like {
            fill: none;
            stroke: rgba(0, 0, 0, 0.6);
        }

        .likeContainer input:checked ~ .celebrate {
            display: block;
        }

        .likeContainer .celebrate {
            position: absolute;
            animation: kfs-celebrate 1s;
            animation-fill-mode: forwards;
            display: none;
            stroke: var(--maincolor);
        }

        .dislikeContainer .celebrate {
            position: absolute;
            animation: kfs-celebrate 1s;
            animation-fill-mode: forwards;
            display: none;
            stroke: red;
        }

        .dots{
            background-color: var(--maincolor);
            padding: 6px;
            border-radius: 100vh;
            position: absolute;
            /* border: 4px solid gray; */
            box-shadow: 0px 0px 1px 1px #0000001a;
            animation: pulse-animation 2s infinite;
        }

        .dots::after{
            content: attr(data-text);
            width: 108px;
            position: absolute;
            top: 0px;
            left: 16px;
            background-color: var(--maincolor);
            color: white;
            padding: 6px;
            border-radius: 8px;
            font-size: 12px;
            line-height: 1.1;
            display: none;
        }

        .dots:hover::after{
            display: block;
        }

        .dot1{
            top: 84px;
            left: 200px;
        }
        .dot2{
            top: 200px;
            left: 158px;
        }
        .dot3{
            bottom: 32px;
            left: 202px;
        }

        @keyframes pulse-animation {
            0% {
                box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.4);
            }
            100% {
                box-shadow: 0 0 0 12px rgba(0, 0, 0, 0);
            }
        }

        .customerImagesDialog{
            height: 600px;
            overflow-y: clip;
        }

        .customerImagesContainer{
            height: 100%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
            overflow: scroll!important;
        }

        .customerImagesContainer a{
            width: 120px;
            height: 120px;
        }

        .customerImagesContainer a img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .customerImagesContainer::-webkit-scrollbar {
            width: 0px;
        }

        .customerReveiwDialog{
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            width: 70%;
            height: 540px;
            border-radius: 4px;
            border: 0;
            box-shadow: 0 5px 30px 0 #000;
            animation: fadeIn 300ms ease both;
            z-index: 100000;
        }

        .customerReveiwDialog img{
            object-fit: contain;
            /* width: 200px; */
        }

        .customerReveiwDialog .buttons{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 95%;
        }

        .desktopPincodeDialog{
            max-width: 500px;
            width: 500px!important;
        }

        .loginPromptContainer{
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 99990;
            display: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        input[type="checkbox"] {
            accent-color: var(--color2);
        }

        .inputGroup{
            position: relative;
        }

        .inputGroup .errorMsg{
            display: none;
            font-size:12px;
            position: absolute;
            top: 36px;
        }

        .inputFieldContainer{
            border: 1px solid #d4d5d9;
            padding-inline:8px;
            margin-bottom: 20px;
            transition: all 200ms ease-in-out;
        }

        .inputFieldContainer input{
            border: none;
            outline: none;
            padding: 6px;
            width: 80%;
        }

        .inputFieldContainer input:focus .inputFieldContainer{
            border-color: var(--color2);
        }

        .inputFieldContainer span{
            color: rgb(150, 150, 150);
        }

        .inputFieldContainer input::placeholder{
            color: rgb(150, 150, 150);
        }

        .loginBtn {
            width: 100%;
            background-color: var(--maincolor);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            cursor: pointer;
            margin-bottom: 8px;
        }

        .loginBtn.disabled {
            background-color: gray;
            cursor: not-allowed;
        }

        @keyframes kfs-celebrate {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: scale(1.5) rotate(180deg);
                opacity: 0;
                display: none;
            }
        }

        @keyframes kfs-fill-like {

            50% {
                fill: var(--maincolor);
                stroke: var(--maincolor);
                transform: scale(1.2);
            }

            100% {
                fill: var(--maincolor);
                stroke: var(--maincolor);
            }
        }

        @keyframes kfs-fill-dislike {

            50% {
                fill: red;
                stroke: red;
                transform: scale(1.2);
            }

            100% {
                fill: red;
                stroke: red;
            }
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

        .mobileZoomImg{
            background-color: white;
            display: none;
            width: 100%;  /* Adjust based on screen */
            height: 100dvh;  /* Full screen height */
            overflow: hidden;
            position: fixed;
            top: 0;
            touch-action: none;
            z-index: 10000;
        }

        .closeMobileZoomImg{
            background-color: white;
            padding: 4px 10px;
            color: var(--maincolor);
            border-radius: 100vh;
            position: absolute;
            top: 12px;
            right: 12px;
        }

        .movableImg {
            max-width: 1000px;
            height: 1000px;
            position: absolute;
            top: 0;
            left: 0;
            cursor: grab;
        }

        .cartCounterBtn {
            position: relative;
        }

        .cartCounter {
            position: absolute;
            top: -10px;
            right: -13px;
            background-color: var(--maincolor);
            color: white;
            font-size: 10px;
            padding-inline:6px;
            border-radius: 100vh;
        }

        .stickySection{
            position: sticky;
            top: 0;
            height: 100%;
            top: 9.5rem;
            z-index: 10;
        }

        .parentcontainer {
            position: relative;
        }

        .imgContainer {
            aspect-ratio: 12/16;
            overflow: hidden;
            position: relative;
        }

        .imgContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .zoomWindow {
            position: absolute;
            width: 500px;
            height: 100%;
            overflow: hidden;
            display: none;
            top: 0;
            left: 100%;
            z-index: 100;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
        }

        .zoomWindow img {
            position: absolute;
            max-width: 1500px;
            height: 1500px;
            object-fit: cover;
        }

        .lens {
            width: 150px;
            height: 150px;
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            border: 2px solid var(--pinkcolor);
            display: none;
            pointer-events: none;
        }

        .videoBtns{
            position: absolute;
            width: 85%;
            bottom: 14px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
        }

        .mobileVideoBtns{
            justify-content: end;
            align-items: center;
            gap: 8px;
            bottom: 54px;
            width: 90%;
        }

        .mobileVideoBtns .muteBtnContainer{
            padding: 16px;
            --size: 16px;
        }

        .fullscreenBtn{
            background-color: white;
            padding: 8px;
            border-radius: 100vh;
            --color: var(--maincolor);
            --size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            cursor: pointer;
            font-size: var(--size);
            user-select: none;
            fill: var(--color);
        }

        .fullscreenBtn img {
            width: 24px;
        }        

        .muteBtnContainer {
            background-color: rgba(0,0,0,0.3);
            padding: 20px;
            border-radius: 100vh;
            --color: var(--maincolor);
            --size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            cursor: pointer;
            font-size: var(--size);
            user-select: none;
            fill: var(--color);
        }

        .muteBtnContainer .mute {
        position: absolute;
        animation: keyframes-fill .5s;
        }

        .muteBtnContainer .voice {
        position: absolute;
        display: none;
        animation: keyframes-fill .5s;
        }

        /* ------ On check event ------ */
        .muteBtnContainer input:checked ~ .mute {
        display: none;
        }

        .muteBtnContainer input:checked ~ .voice {
        display: block;
        }

        /* ------ Hide the default checkbox ------ */
        .muteBtnContainer input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }

        /* ------ Animation ------ */
        @keyframes keyframes-fill {
        0% {
            transform: rotate(0deg) scale(0);
            opacity: 0;
        }

        50% {
            transform: rotate(-10deg) scale(1.2);
        }
        }

        .dialogCheckBtn{
            background-color: var(--pinkcolor);
            color: white;
            font-weight: 600;
            position: absolute;
            bottom: 0;
        }

        .mobilePincodeBtn{
            display: none!important;
        }

        .mobileSizeDialog{
            width: 100%;
            max-width: 480px;
        }

        .mobileSizeDialog .submitBtn{
            margin-top: 8px;
            background-color: var(--maincolor);
            color: white
        }

        .homeProductBtn{
            box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.5);
            width: 48px;
            height: 48px;
            border-radius: 100vh;
            overflow: hidden;
            transition: all 200 ease-in-out;
        }

        .homeProductBtn img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .homeProductBtn:hover{
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.5);
            scale: 1.1;
        }

        .mobileHomeProductBtn{
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 100;
        }

        .mobileHomeProductBtn .mobileExtraProductBtns{
            width: 0;
            transition: all 200ms ease-in-out;
        }

        .btn-container {
            text-align: right;
        }

        .btn-color-mode-switch {
            display: inline-block;
            margin: 0px;
            position: relative;
        }

        .btn-color-mode-switch > label.btn-color-mode-switch-inner {
            margin: 0px;
            width: 80px;
            height: 26px;
            background-color: #8340A150;
            border-radius: 26px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
                /*box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;*/
            display: block;
        }

        .btn-color-mode-switch > label.btn-color-mode-switch-inner:before {
            content: attr(data-on);
            position: absolute;
            font-size: 14px;
            font-weight: 600;
            top: 1px;
            right: 8px;
            color: #222;
        }

        .btn-color-mode-switch > label.btn-color-mode-switch-inner:after {
            content: attr(data-off);
            width: 42px;
            height: 23px;
            background: #fff;
            border-radius: 26px;
            position: absolute;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            left: 2px;
            top: 2px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0px 0px 6px -2px #111;
            padding: 5px 0px;
            color: var(--pinkcolor);
            font-weight: 600;
        }

        .btn-color-mode-switch input[type="checkbox"] {
            cursor: pointer;
            width: 50px;
            height: 25px;
            opacity: 0;
            position: absolute;
            top: 0;
            z-index: 1;
            margin: 0px;
        }

        .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner {
            background-color: #8340A150;
        }

        .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after {
            content: attr(data-on);
            left: 35px;
        }

        .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before {
            content: attr(data-off);
            right: auto;
            left: 5px;
        }

        .sidebarTable tr.outofstock{
            text-decoration: line-through;
            color: rgba(0, 0, 0, 0.3);
        }

        .sidebarTable tr.outofstock .sidebarRadioBtn{
            pointer-events:none;
        }

        .thumbnailSwiper .swiper-button-next{
            top: 14px;
            right:30px;
            rotate: -90deg;
        }

        .thumbnailSwiper .swiper-button-prev{
            top: 447px;
            left:35px;
            rotate: 270deg;
        }

        .productImageSliderContainer{
            display: grid;
            grid-template-columns: 2fr 10fr; 
            gap: 4px;
        }

        .product-container {
    position: relative;
    width: 300px;
    height: 300px;
    overflow: hidden;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
}

.zoom-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    cursor: zoom-in;
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.zoom-wrapper:hover .product-image {
    transform: scale(2); /* Adjust scale factor for more/less zoom */
    cursor: zoom-out;
}

        @media (width < 1200px) {
            .productHeroSection {
                width: 95%;
            }
        }

        @media (width < 1100px) {
            .similarProductsContainer{
                grid-template-columns: repeat(4, 1fr);
            }

            .sidebar{
                width: 80%;
            }

            .productHeroSection {
                width: 95%;
            }
        }

        @media (width < 900px) {
            .similarProductsContainer{
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (width < 768px) {
            .sidebar{
                width: 90%;
            }

            .productImageContainer{
                grid-template-columns: 1fr 1fr 1fr;
            }

            .customerReveiwDialog{
                width: 85%;
            }

            .stickySection{
                position: relative;
                padding:0;
                top: 0;
            }

            .productHeroSection {
                width: 100%;
            }
        }

        @media (width < 568px) {

            dialog{
                top:100%;
                left:0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }

            .desktopPincodeDialog{
                width: 100%!important;
            }

            .sidebar{
                width: 100%;
            }

            .swiper-button-next, .swiper-button-prev{
                display: none;
            }

            .mySwiper2{
                width: 280px;
            }

            .homeBtn{
                background-color: white;
                margin-block: 16px;
                padding-block: 6px;
                position: sticky;
                width: 100%;
                bottom: 0;
                left: 0;
                z-index: 5;
            }

            .addToBagBtn:hover{
                background-color: var(--maincolor);
                color: white;
            }

            .customerImagesContainer{
                grid-template-columns: repeat(3, 1fr);
                place-items: center;
                gap:4px;
                height: 100%;
            }

            .customerImagesContainer a{
                width: 110px;
                height: 110px;
            }

            .customerReveiwDialog{
                width: 100%;
                height: 100dvh;   
            }

            .likeBtn{
                padding: 4px 8px;
                font-size: 12px;
            }

            .shareBtn{
                padding: 6px 8px;
                font-size: 12px;
            }

            .category_section, header{
                display: none;
            }
            
            .likeBtn:hover{
                background-color: var(--maincolor);
                color: white;
            }

            .shareBtn:hover{
                background-color: var(--maincolor);
                color: white;
            }

            .paddingTop{
                padding-top: 36px;
            }

            .extraBtnContainer{
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap:4px;
            }
            
            .extraBtnContainer a{
                display: block;
            }
            
        }

        @media (width < 385px) {
            .productImageSwiper .swiper-slide img{
                object-fit: cover;
            }
        }
        
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <div id="toaster"></div>
        <div id="toaster2"></div>
        <div class="loginPromptContainer">
            <div class="bg-white position-relative" style="max-width: 380px; margin-inline:auto;">
                <div class="position-absolute" style="top: 4px; right: 4px;">
                    <button class="btn closeLoginPromptBtn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div>
                    <img src="<?=base_url('assets/new_website/img/login-cover.jpg')?>" alt="">
                </div>
                <div class="px-4 py-3">
                    <p class="mb-2" style="font-size: 20px; color: gray; font-family: 'League Spartan', sans-serif;">
                        <span class="font-weight-bold" style="font-size: 24px; color: black;">Login</span>
                         or
                         <span class="font-weight-bold"
                            style="font-size: 24px; color: black;">Signup</span>
                    </p>
                    <p class="mb-1" style="font-size: 12px; color: var(--maincolor);">Please enter your mobile number and verify with OTP</p>
                    <form id="loginForm">
                        <div class="inputGroup">
                
                            <div class="inputFieldContainer container1">
                                <span>+91 | </span>
                                <input type="number" class="numberInput" id="number" oninput="this.value = this.value.slice(0, 10);" placeholder="Enter Mobile Number*">
                            </div>
                            <p class="m-0 p-0 errorMsg text-danger"><i class="fa-solid fa-triangle-exclamation mr-1"></i>Please enter a valid mobile number</p>
                        </div>
                        <div class="d-flex align-items-center mb-2"
                            style="gap: 4px;font-size: 12px;font-weight: 500; color: var(--maincolor);">
                            <input type="checkbox" id="tandc">
                            <label class="m-0" for="tandc">I ACCEPT TERMS AND CONDITIONS</label>
                        </div>
                        <p class="mb-2" style="font-size: 12px; line-height: 1.1;">By continuing, I agree to the <a href="#"
                                style="color: var(--maincolor); font-weight: 600;">Terms of Use</a>
                            and <a href="#" style="color: var(--maincolor); font-weight: 600;">Privacy Policy</a></p>
                        <button type="submit" class="loginBtn">LOGIN</button>
                        <p class="text-center" style="font-size: 14px; color: gray;">Login via <a href="./loginEmail.html"
                                style="color: var(--maincolor); font-weight: 600;">Email</a>
                        </p>
                        <p class="text-center mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                                href="mailto:me@example.com?subject=Me&body=HELP!!!"
                                style=" color: var(--maincolor); font-weight: 600;">Get Help</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="px-2 px-lg-5 px-md-4">
                <div class="text-right">
                    <button class="btn closeSidebarBtn"><i class="fa fa-xmark"></i></button>
                </div>
                <div class="d-flex gap-2">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="height: 144px;" alt="">
                    <div class="mt-2">
                        <p class="fs16 text-dark font-weight-bold m-0">Product Name</p>
                        <p class="fs12 text-secondary m-0" style="line-height: 1;">Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="mt-2">
                            <span class="font-weight-bold text-dark" style="font-size: 20px;">₹1,998</span>
                            <span class="text-secondary border-right pr-2" style="font-size: 16px; text-decoration: line-through;">₹2,998</span>
                            <span class="text-success font-weight-bold">50% OFF</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="pt-2 d-flex justify-content-center">
                        <div class="btn-group border rounded-pill overflow-hidden" role="group" aria-label="Basic example">
                            <a href="#sizeChart" id="sizeChartSectionBtn" class="btn fs12 tabButton">SIZE CHART</a>
                            <a href="#howToMeasure" id="howToMeasureBtn" class="btn fs12 tabButton">HOW TO MEASURE</a>
                        </div> 
                    </div>
                    <div style="background-color: rgb(255, 0, 0, 0.05);" class="p-2 my-2 rounded-lg d-flex align-items-center">
                        <img src="<?= base_url('assets/new_website/img/measuring-tape.png')?>" style="width: 28px;" alt="">
                        <span class="fs12 ml-1" style="line-height: 1;">We think <span class="font-weight-bold text-dark">XL</span> would be a perfect fit for you, based on your past purchases!</span>
                    </div>
                    <div class="btn-container my-2">
                        <label class="switch btn-color-mode-switch">
                            <input value="1" id="color_mode" name="color_mode" type="checkbox">
                            <label class="btn-color-mode-switch-inner" data-off="inch" data-on="cm" for="color_mode"></label>
                        </label>
                    </div>
                    <div class="mt-2 sidebarContent">
                        <section id="sizeChart">
                            <table class="table sidebarTable">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><strong>Size</strong></td>
                                        <td><strong>Shoulder</strong></td>
                                        <td><strong>Bust</strong></td>
                                        <td><strong>Waist</strong></td>
                                        <td><strong>Hips</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center sidebarRadioBtn"><input type="radio" name="size" value="S"></td>
                                        <td>S</td>
                                        <td>30</td>
                                        <td>28</td>
                                        <td>27</td>
                                        <td>11</td>
                                    </tr>
                                    <tr class="outofstock">
                                        <td class="text-center sidebarRadioBtn"><input type="radio" name="size" value="M"></td>
                                        <td>M</td>
                                        <td>30</td>
                                        <td>28</td>
                                        <td>27</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center sidebarRadioBtn"><input type="radio" name="size" value="L"></td>
                                        <td>L</td>
                                        <td>30</td>
                                        <td>28</td>
                                        <td>27</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center sidebarRadioBtn"><input type="radio" name="size" value="XL"></td>
                                        <td>XL</td>
                                        <td>30</td>
                                        <td>28</td>
                                        <td>27</td>
                                        <td>11</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section class="text-center" id="howToMeasure">
                            <img src="<?= base_url('assets/new_website/img/howToMeasure.png') ?>" style="width: 280px;" alt="">
                        </section>
                    </div>
                </div>
                <div class="position-fixed row bg-white w-100 pr-2 addBtnContainer" style="bottom: 16px; right: 8px;">
                    <button class="btn fs14 addToBagBtn sidebarAddToBagBtn" disabled><i class=" bx bx-shopping-bag"></i> ADD TO BAG</button>
                    <button class="btn fs14 wishlistBtn"><i class="fa-regular fa-heart"></i> WISHLIST</button>
                </div>
            </div>
        </div>
        <dialog class="reviewDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">Discover customer feedback on this product!</p>
                <button id="closeReviewBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3">
                <p class="m-0 text-secondary">Fit</p>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <p class="m-0 text-secondary">Stretch</p>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1" style="height: 6px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="ml-2">Tight (40%)</span>                    
                    </div>
                </div>
            </div>
        </dialog>
        <dialog class="mobileSizeDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">Select Size</p>
                <button id="closeMobileSizeDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3">
                <p class="m-0 font-weight-bold fs-16 text-center">Shirt</p>
                <div class="swiper sizeSwiper2">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <button class="sizeBtn freeSizeBtn" style="line-height: 1;">Free size</button>
                        </div> -->
                        <div class="swiper-slide">
                            <button class="sizeBtn stockLabel" data-stock="2 Left">S</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn outOfStock">M</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">L</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn recommended">XL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                    </div>
                </div>
                <p class="m-0 font-weight-bold fs-16 text-center">Shirt</p>
                <div class="swiper sizeSwiper3">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <button class="sizeBtn freeSizeBtn" style="line-height: 1;">Free size</button>
                        </div> -->
                        <div class="swiper-slide">
                            <button class="sizeBtn stockLabel" data-stock="2 Left">S</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn outOfStock">M</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">L</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn recommended">XL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                    </div>
                </div>
                <p class="m-0 font-weight-bold fs-16 text-center">Shirt</p>
                <div class="swiper sizeSwiper4">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <button class="sizeBtn freeSizeBtn" style="line-height: 1;">Free size</button>
                        </div> -->
                        <div class="swiper-slide">
                            <button class="sizeBtn stockLabel" data-stock="2 Left">S</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn outOfStock">M</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">L</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn recommended">XL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XXXL</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                        <div class="swiper-slide">
                            <button class="sizeBtn">XS</button>
                        </div>
                    </div>
                </div>
                <button class="btn w-100 fs12 font-weight-bold submitBtn" disabled>SELECT SIZES</button>
            </div>
        </dialog>
        <dialog class="royalCashDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">Royal Club cash</p>
                <button id="closeRoyalCashDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="<?= base_url('assets/new_website/img/crown2.png') ?>" style="width: 28px;" alt="">
                    <p>Earn Royal Club Cash upto ₹3 on this product</p>
                </div>
                <p class="fs10 mt-2 text-secondary" style="line-height: 1;">You can redeem your Royal Club Cash on your next purchase (Min. ₹100 RC Cash is required)</p>
            </div>
        </dialog>
        <dialog class="insightDialog" id="dialog" style="max-width: 500px;">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">Model Insights</p>
                <button id="closeInsightDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3">
                <p class="text-center">John is <span class="font-weight-bold">5'10</span> and is wearing a size <span class="font-weight-bold">S</span></p>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Parameters</th>
                                <th scope="col">Size specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Hips</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Waist</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Height</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Chest</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Inseam</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Sleeve length</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td class="p-1 font-weight-bold">Model Neck size</td>
                                <td>38 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </dialog>
        <dialog class="celebDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">CELEBRITY BEAUTY SECRETS</p>
                <button id="closeCelebDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="position-relative bg-transparent text-center p-2">
                <img src="<?= base_url('assets/new_website/img/combo3.webp') ?>" alt="">
                <a href="" class="dots dot1" data-text="View matching Earings"></a>
                <a href="" class="dots dot2" data-text="View matching Dresses"></a>
                <a href="" class="dots dot3" data-text="View matching Sandals"></a>
            </div>
        </dialog>
        <div class="customerReveiwDialog">
            <div class="d-flex justify-content-end align-items-center px-3 py-2 border-bottom">
                <button id="closeCustomerReviewBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="row m-0">
                <div class="col-lg-7 col-md-6 col-sm-12 col-12 position-relative p-2" style="background: linear-gradient(to top, #cd9cf2 0%, #f6f3ff 100%)">
                    <div class="swiper mySwiper2 mb-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper px-5" style="height: 60px">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 p-2">
                    <div class="py-2">
                        <div class="mb-1">
                            <span class="text-dark p-1 rounded-lg border">4 <i class="fa-solid fa-star fs12" style="color: #FFD700;"></i></span>
                        </div>
                        <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                        <div class="mt-2 text-secondary d-flex justify-content-between">
                            <span>John Doe | 1 day ago</span>
                            <div class="d-flex align-items-center gap-2">
                                <label class="m-0 likeContainer">
                                    <input type="checkbox">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                        <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                    </svg>
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                        <polygon points="0,0 10,10"></polygon>
                                        <polygon points="0,25 10,25"></polygon>
                                        <polygon points="0,50 10,40"></polygon>
                                        <polygon points="50,0 40,10"></polygon>
                                        <polygon points="50,25 40,25"></polygon>
                                        <polygon points="50,50 40,40"></polygon>
                                    </svg>
                                </label>
                                <label class="m-0 likeContainer dislikeContainer">
                                    <input type="checkbox">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                        <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                    </svg>
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                        <polygon points="0,0 10,10"></polygon>
                                        <polygon points="0,25 10,25"></polygon>
                                        <polygon points="0,50 10,40"></polygon>
                                        <polygon points="50,0 40,10"></polygon>
                                        <polygon points="50,25 40,25"></polygon>
                                        <polygon points="50,50 40,40"></polygon>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <dialog class="customerImagesDialog" id="dialog" style="max-width: 600px;">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">ALL BUYERS FAMILY PHOTOS</p>
                <button id="closeCustomerImagesDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="px-2 pt-2 pb-5 customerImagesContainer">
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/image5.jpg') ?>" alt="">
                </a>
                <a href="#">
                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                </a>
            </div>
        </dialog>
        <dialog class="dialog2 notifyDialog border-top-0 text-left" id="dialog">
            <div>
                <div class="px-3 py-2 position-absolute" style="top: 0; right: 0;">
                    <button type="button" aria-label="close" class="btn p-0 notifyDialogCloseBtn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="p-3">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url('assets/new_website/img/notification.gif') ?>" style="width: 40px;" alt="">
                        <p class="font-weight-bold text-left m-0 p-0"
                        style="font-family: 'League Spartan'; font-size: 28px;">
                        Receive Updates</p>
                    </div>
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
                            style="background-color: var(--maincolor); color: white;">CONFIRM</button>
                        <button type="button" onClick="notifyFocus()" class="btn w-100 rounded-sm mt-2 notifyCredentialEditBtn"
                            style="background-color: var(--maincolor); color: white; display: none">EDIT</button>
                    </form>
                </div>
            </div>
        </dialog>
        <div class="youtubePopup">
            <div class="position-relative w-100 h-100 d-flex justify-content-center align-items-center">
                <button class="btn youtubePopupCloseBtn"><i class="fa-solid fa-xmark"></i></button>
                <iframe src="https://www.youtube.com/embed/E3UxSs2TS2Q?controls=0" title="Trend In Real Life With Myntra" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <dialog class="dialog desktopPincodeDialog overflow-hidden" id="dialog">
            <div class="position-relative">
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold p-0 m-0">Check Delivery</p>
                    <button id="closeDesktopPincodeDialogBtn" aria-label="close"
                    class="btn p-0 m-0 font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 my-3">
                    <div class="border rounded-lg py-1 px-2">
                        <form class="d-flex" id="pincodeForm">
                            <input type="number" name="pincode" placeholder="Enter coupon code" class="pincodeInput flex-grow-1">
                            <button class="pincodeBtn fs12">CHECK</button>
                            <button type="button" class="pincodeChangeBtn fs12" style="display: none;">CHANGE</button>
                        </form>
                    </div>
                    <p class="m-0 fs12 mt-1 text-danger pincodeErrorMsg" style="display: none;"><i class="fa-solid fa-triangle-exclamation mr-1"></i>Invalid Pincode</p>
                </div>
                <!-- <hr class="m-0"> -->
                <div class="px-3 my-2">
                    <p class="m-0 font-weight-bold text-dark text-center">OR</p>
                    <div class="my-2">
                        <p class="fs18 font-weight-bold">Select a saved address to check delivery</p>
                        <label for="address1" class="d-flex align-items-center cursor-pointer border-bottom">
                            <div class="flex-grow-1">
                                <p class="m-0 font-weight-bold">John, 123abc,</p>
                                <p class="m-0 fs10">Pincode: 123456</p>
                            </div>
                            <div>
                                <input type="radio" name="address" id="address1">
                            </div>
                        </label>
                        <label for="address2" class="d-flex align-items-center cursor-pointer">
                            <div class="flex-grow-1">
                                <p class="m-0 font-weight-bold">John, 123abc,</p>
                                <p class="m-0 fs10">Pincode: 123456</p>
                            </div>
                            <div>
                                <input type="radio" name="address" id="address2">
                            </div>
                        </label>
                    </div>
                </div>
                <!-- <div class="addressTab">
                    <div class="px-2 d-flex justify-content-between align-items-center"
                        style="background-color: var(--color4);">
                        <p class="text-secondary font-weight-bold" style="font-size: 14px;">SAVED ADDRESS</p>
                        <button class="btn addAddressBtn font-weight-bold"
                            style="color: var(--color2);"><i class="fa-solid fa-plus"></i>
                            Add
                            new address</button>
                    </div>
                    <div class="px-3 py-3 addressSection">
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
                </div> -->
            </div>
        </dialog>
        <section class="d-lg-none d-md-none d-sm-block position-fixed w-100 bg-white" style="z-index: 1000; top: 0;" >
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
        <section class="d-lg-none d-md-none d-sm-block position-fixed mobileHomeProductBtn">
            <div class="d-flex align-items-center">
                <button class="btn border bg-white openMobileExtraProductBtn" >
                    <img src="<?= base_url('assets/new_website/img/extraProducts.png') ?>" style="width: 32px;" alt="">
                </button>
                <div class="bg-white rounded-lg mobileExtraProductBtns">
                    <div class="d-flex gap-2 py-2 px-3">
                        <button class="btn p-0 m-0 homeProductBtn">
                            <img src="<?= base_url('assets/new_website/img/shoes.jpg') ?>" alt="">
                        </button>
                        <button class="btn p-0 m-0 homeProductBtn">
                            <img src="<?= base_url('assets/new_website/img/jeans.jpg') ?>" alt="">
                        </button>
                        <button class="btn p-0 m-0 homeProductBtn">
                            <img src="<?= base_url('assets/new_website/img/tees.jpeg') ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <div class="mobileZoomImg">
                <img src="<?= base_url('assets/new_website/img/dressimage1.1.jpg')?>" class="movableImg"  alt="">
                <button class="btn closeMobileZoomImg"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mobileZoomImg">
                <img src="<?= base_url('assets/new_website/img/dressimage2.1.jpg')?>" class="movableImg"  alt="">
                <button class="btn closeMobileZoomImg"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mobileZoomImg">
                <img src="<?= base_url('assets/new_website/img/dressimage3.1.jpg')?>" class="movableImg"  alt="">
                <button class="btn closeMobileZoomImg"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mobileZoomImg">
                <img src="<?= base_url('assets/new_website/img/dressimage4.1.jpg')?>" class="movableImg" alt="">
                <button class="btn closeMobileZoomImg"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mobileZoomImg">
                <img src="<?= base_url('assets/new_website/img/dressimage5.1.jpg')?>" class="movableImg" alt="">
                <button class="btn closeMobileZoomImg"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
        <!-- <section class="saleTimerStripContainer border">
            <div class="saleTimerStrip">
                <p class="m-0 text-secondary">Sale ends
                    in- <span>10</span>days:<span>10</span>hrs:<span>10</span>min:<span>10</span>sec
                </p>
            </div>
        </section> -->
        <section class="text-dark d-lg-block d-md-block d-none">
            <div class="px-4 my-2">
                <ul class="d-flex" style="gap: 4px;font-size: 14px;">
                    <li><a href="#" class="text-secondary">Home /</a></li>
                    <li class="font-weight-bold"><h1 style="all:unset;">Products</h1></li>
                </ul>
            </div>
        </section>
        <section>
            <div class="productHeroSection row mx-auto mt-2 paddingTop">
                <div class="col-lg-6 col-md-6 col-12 stickySection">
                    <div class="d-lg-block d-md-block d-sm-none d-none gap-2">
                        <div class="productImageSliderContainer">
                            <div thumbsSlider="" class="swiper thumbnailSwiper py-4" style="height: 460px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('assets/new_website/img/dressimage1.1.jpg')?>" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('assets/new_website/img/dressimage2.1.jpg')?>" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('assets/new_website/img/dressimage3.1.jpg')?>" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('assets/new_website/img/dressimage4.1.jpg')?>" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('assets/new_website/img/dressimage5.1.jpg')?>" />
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                            </div>
                            <div style="height: 500px;" class="swiper thumbnailSwiper2 flex-grow-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="zoom-wrapper">
                                            <img src="<?= base_url('assets/new_website/img/dressimage1.1.jpg')?>" alt="Product" class="product-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zoom-wrapper">
                                            <img src="<?= base_url('assets/new_website/img/dressimage2.1.jpg')?>" alt="Product" class="product-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zoom-wrapper">
                                            <img src="<?= base_url('assets/new_website/img/dressimage3.1.jpg')?>" alt="Product" class="product-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zoom-wrapper">
                                            <img src="<?= base_url('assets/new_website/img/dressimage4.1.jpg')?>" alt="Product" class="product-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zoom-wrapper">
                                            <img src="<?= base_url('assets/new_website/img/dressimage5.1.jpg')?>" alt="Product" class="product-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-none d-sm-block d-block swiper productImageSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/dressimage1.1.jpg')?>" class="mobileZoomImgBtn" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/dressimage2.1.jpg')?>" class="mobileZoomImgBtn" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/dressimage3.1.jpg')?>" class="mobileZoomImgBtn" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/dressimage4.1.jpg')?>" class="mobileZoomImgBtn" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/new_website/img/dressimage5.1.jpg')?>" class="mobileZoomImgBtn" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="position-relative">
                                    <video width="100%" height="100%" id="mobileSilderVideo" autoplay muted loop>
                                        <source src="<?= base_url('assets/new_website/img/productVid.mp4') ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="videoBtns mobileVideoBtns">
                                        <div>
                                            <label class="muteBtnContainer m-0" id="mobileMuteToggle">
                                            <input  type="checkbox">
                                                <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="mute"><path d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"></path></svg>
                                                <svg viewBox="0 0 448 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="voice"><path d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM412.6 181.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5z"></path></svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="position-absolute w-100 d-flex justify-content-end align-items-center px-3" style="bottom: 30px; right: -4px; z-index: 1000;">
                            <button class="btn text-light p-1 fs10 rounded-pill scrollBtn" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1000">
                                <img src="<?= base_url('assets/new_website/img/cards.png') ?>" style="width: 16px;" alt="">
                                <span>VIEW SIMILAR</span>
                            </button>
                        </div>
                    </div>
                    <div class="my-1 d-flex justify-content-between align-items-center px-3">
                            <button class="btn p-0 fs14 font-weight-bold d-flex align-items-center modalInsightBtn">
                                <img src="<?= base_url('assets/new_website/img/model.jpg') ?>" style="width: 16px;" alt="">
                                <span class="ml-1">Model insight</span>
                            </button>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="d-flex align-items-center likeBtn">
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
                                     <label for="Give-It-An-Id" class="ml-1 mb-0 cursor-pointer">4 likes</label>
                                 </div>
                                <a href="https://wa.me/?text=Your%20custom%20message%20here" class="btn fs14 font-weight-bold shareBtn"><img src="<?= base_url('assets/new_website/img/share.png') ?>" style="width: 16px;" alt=""> Share</a>
                            </div>
                    </div>
                    <div class="my-3 d-lg-block d-md-block d-none">
                        <p class="m-0 mb-1 text-dark font-weight-bold">UNLOCKING GLAMOUR</p>
                        <div class="modalBtnContainer">
                            <button class="btn p-0 modalBtn celebDialogBtn">
                                <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                                <div class="w-100 modalBtnText">
                                    <span>CELEBRITY BEAUTY SECRETS</span>
                                </div>
                            </button>
                            <button class="btn p-0 modalBtn fashionModalBtn">
                                <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                                <div class="w-100 modalBtnText">
                                    <span>FASHION PAIRING</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="mb-2">
                        <h3 class="m-0 text-dark">Jack & Jones</h3>
                        <p class="fs12 text-secondary m-0 mb-2" style="line-height: 1;">Men Grey Slim Fit Light Fade Stretchable Jeans</p>
                        <div>
                            <button class="btn border rounded-sm text-dark p-1 fs12 font-weight-bold reviewScrollBtn">
                                <span>3.5</span>
                                <i class="fa-solid fa-star" style="color: #FFD700;"></i>
                                <span class="border-left pl-2">71 Ratings</span>
                            </button>
                        </div>
                    </div>
                    <div class="priceContainer mt-2">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="font-weight-bold text-dark" style="font-size: 24px;">₹1,998</span>
                            <span class="text-secondary border-right pr-2" style="font-size: 20px; text-decoration: line-through;">₹2,998</span>
                            <span class="text-success font-weight-bold">50% OFF</span>
                        </div>
                        <span class="text-success font-weight-bold fs12">inclusive of all taxes</span>
                        <div class="priceHoverDetails">
                            <p class="text-dark font-weight-bold mb-1 fs12 text-center">PRICE DETAILS</p>
                            <div class="d-flex justify-content-between">
                                <span class="fs12 d-flex flex-column">
                                    <span>Maximum Retail Price</span>
                                    <span>inclusive of all taxes</span>
                                </span>
                                <span class="text-dark font-weight-bold fs12">₹2,998</span>
                            </div>
                            <hr class="my-1">
                            <span class="fs12 d-flex justify-content-between">
                                <span>Discount</span>
                                <span class="font-weight-bold text-success">72% OFF</span>
                            </span>
                            <div class="d-flex justify-content-between">
                                <span class="fs12 d-flex flex-column">
                                    <span class="text-dark font-weight-bold">Selling Price</span>
                                    <span>(inclusive of all taxes)</span>
                                </span>
                                <span class="text-dark font-weight-bold fs12">₹2,998</span>
                            </div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="mb-3 position-relative">
                        <div class="clubPriceContainer">
                            <p class="m-0 fs12 text-dark font-weight-bold">ROYAL CLUB PRICE:</p>
                            <button class="btn p-0 d-flex align-items-center royalClubScrollBtn">
                                <img class="blinkingText" src="<?= base_url('assets/new_website/img/crown2.png') ?>" style="width: 24px;" alt="">
                                <p class="text-dark m-0 ml-1" style="font-size: 16px; font-weight: 700;">₹1,800</p>
                                <p class="m-0 ml-1 fs12" style="font-weight: 500;">MRP:</p>
                                <p class="m-0 ml-1 fs12" style="font-weight: 500; text-decoration: line-through;">₹2,998</p>
                                <p class="m-0 ml-1 fs12 border-left pl-1 text-success font-weight-bold">50% OFF</p>
                            </button>
                            <p class="m-0 text-success font-weight-bold fs10">inclusive of all taxes</p>
                            <div class="clubPriceHoverDetails">
                                <p class="text-dark font-weight-bold mb-1 fs12 text-center">PRICE DETAILS</p>
                                <div class="d-flex justify-content-between">
                                    <span class="fs12 d-flex flex-column">
                                        <span>Maximum Retail Price</span>
                                        <span>inclusive of all taxes</span>
                                    </span>
                                    <span class="text-dark font-weight-bold fs12">₹2,998</span>
                                </div>
                                <hr class="my-1">
                                <span class="fs12 d-flex justify-content-between">
                                    <span>Discount</span>
                                    <span class="font-weight-bold text-success">72% OFF</span>
                                </span>
                                <div class="d-flex justify-content-between">
                                    <span class="fs12 d-flex flex-column">
                                        <span class="text-dark font-weight-bold">Selling Price</span>
                                        <span>(inclusive of all taxes)</span>
                                    </span>
                                    <span class="text-dark font-weight-bold fs12">₹2,998</span>
                                </div>
                            </div>
                        </div>

                        <div>
                        <button class="btn border p-1 m-0 mt-1 fs12 font-weight-bold royalCashBtn">
                            <img src="<?= base_url('assets/new_website/img/crown2.png') ?>" style="width: 16px;" alt="">
                            <span>Earn Royal Club Cash ₹3 <i class="fa-solid fa-info-circle text-secondary"></i></span>
                        </button>
                    </div>
                    </div>
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">SELECT COLOR</p>
                        <div class="colorSwiperContainer rounded-lg">
                            <div class="d-flex justify-content-between">
                                <span>Color: <span class="font-weight-bold text-dark">Yellow</span></span>
                                <span>Available: <span class="font-weight-bold text-dark">2</span></span>
                            </div>
                            <div class="swiper colorSwiper my-1 ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="" class="active"><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""><img src="<?= base_url('assets/new_website/img/img1.png')?>" class="rounded-lg overflow-hidden" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">SELECT SIZE</p>
                        <p class="fs12 border rounded-lg text-center text-dark m-0 shadow-sm">SIZE <span class="font-weight-bold">XL</span> RECOMMENDED</p>
                        <div class="mb-1">
                            <button class="selectSizeBtn" style="line-height: 1;">Select Sizes</button>
                        </div>
                        <!-- <div class="sizeSwiperContainer rounded-lg position-relative">
                            <div class="sizeDetails shadow-sm">
                                <p>Body measurement: <span class="font-weight-bold text-dark">To Fit Bust - 88</span></p>
                                <p class="m-0 fs12">Size worn by model: S</p>
                                <p class="m-0 fs12">Size worn by model: S</p>
                                <p class="m-0 fs12">Size worn by model: S</p>
                                <p class="m-0 fs12">Size worn by model: S</p>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Size: <span class="font-weight-bold text-dark">S</span></span>
                                <a href="#" class="font-weight-bold sizeChartBtn">Size Chart</a>
                            </div>
                            <div class="swiper sizeSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <button class="sizeBtn stockLabel" data-stock="2 Left">S</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn outOfStock">M</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">L</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn recommended">XL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XXL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XXXL</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XS</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button class="sizeBtn">XS</button>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <p class="fs12 pl-2 mt-1">Tag past purchases & get right size recommendation</p>
                            <div style="background-color: rgb(255, 0, 0, 0.05);" class="p-2 rounded-lg">
                                <img src="<?= base_url('assets/new_website/img/measuring-tape.png')?>" style="width: 28px;" alt="">
                                <span class="fs12 ml-1">We think <span class="font-weight-bold text-dark">XL</span> would be a perfect fit for you, based on your past purchases!</span>
                            </div>
                        </div>-->
                    </div> 
                    <div class="border rounded-lg my-3 p-3">
                        <p class="text-dark fs12 font-weight-bold mb-1 text-left">UNLOCK EXCLUSIVE PERKS JUST FOR YOU</p>
                        <div>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/new_website/img/crown2.png')?>" style="width: 40px;" alt="">
                                <div class="d-flex flex-column ml-2" style="line-height: 1.25">
                                    <span>Join the Club and save <span class="text-success font-weight-bold">₹29.99</span></span>
                                    <span>Royal Club Price: <span class="text-dark font-weight-bold">₹502</span></span>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn fs12 p-0 font-weight-bold" style="color: var(--pinkcolor);">Join the Family now <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="mt-2 p-2 rounded-lg d-flex justify-content-center" style="border: 1px dashed black;gap: 4px;">
                            <img src="<?= base_url('assets/new_website/img/rupee.png')?>" style="width: 24px;" alt="">
                            <span class="fs12">Shop now & Earn Royal Cash upto <sapn class="font-weight-bold text-dark">₹5</sapn></span>
                            <a href="#" class="toolTip text-dark"
                                tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                <i class="fa-solid fa-circle-info text-secondary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mx-0 addBtnContainer homeBtn">
                        <button class="btn fs14 addToBagBtn"><i class=" bx bx-shopping-bag"></i> ADD TO BAG</button>
                        <button class="btn fs14 wishlistBtn"><i class="fa-regular fa-heart"></i> WISHLIST</button>
                    </div>
                    <div class="mx-0 extraBtnContainer pb-2">
                        <a href="tel:9876543210" class="btn fs14 border text-secondary callBtn"><i class="fa-solid fa-phone text-dark"></i> CALL</a>
                        <button class="btn fs14 border text-secondary notifyDialogBtn"><i class="fa-regular fa-bell text-dark"></i> NOTIFY</button>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="m-0 mb-2 font-weight-bold text-dark">SELECT DELIVERY LOCATION</p>
                        <button class="btn p-0 d-flex align-items-center border rounded-lg row m-0 w-lg-50 w-md-50 w-sm-50 w-100 p-2 desktopPincodeBtn">
                            <span class="text-secondary fs12 flex-grow-1 text-left">Enter Pincode</span>
                            <span class="fs12 font-weight-bold" style="color: var(--pinkcolor);">CHECK</span>
                        </button>
                        <p class="fs12 m-0 mt-2 pincodeInfo" style="line-height: 1;">Enter PIN to check delivery and Pay on Delivery.</p>
                        <!-- <div class="border rounded-lg py-1 px-2 d-flex align-items-center gap-2 mobilePincodeBtn">
                            <input type="text" class="flex-grow-1 outline-none border-0" placeholder="Enter Pincode">
                            <button class="btn p-0 fs12 font-weight-bold" style="color: var(--pinkcolor);">CHECK</button>
                        </div> -->
                        <p class="m-0 fs12 mt-1 text-success pincodeSuccessMsg" style="display: none;"><i class="fa-solid fa-circle-check mr-1"></i> Pincode verified</p>
                        <div class="mt-1 text-dark pincodeSuccesInfo" style="display: none;">
                            <p class="m-0 font-weight-bold">Receive it by Tue, Oct 08!</p>
                            <p class="m-0 font-weight-bold">Pay on delivery is available</p>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="text-dark font-weight-bold mb-1">LATEST DEALS & DISCOUNTS</p>
                        <div class="swiper offerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                                                aria-expanded="true" aria-controls="couponOne">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row align-items-center">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" onClick="copyToClipboard('couponOne')" class="btn bg-light font-weight-bold text-nowrap promoCopyBtn"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <a href="https://wa.me/?text=Your%20custom%20message%20here" class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</a>
                                            </div>
                                            <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                                                aria-expanded="true" aria-controls="couponOne">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row align-items-center">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" onClick="copyToClipboard('couponOne')" class="btn bg-light font-weight-bold text-nowrap promoCopyBtn"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <a href="https://wa.me/?text=Your%20custom%20message%20here" class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</a>
                                            </div>
                                            <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center">
                                        <div class="coupon">
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                            <div class="d-flex justify-content-between">
                                                <p class="m-0 fs14 text-left" style="width: 70%;">Lorem ipsum dolor sit amet consectetur?</p>
                                                <button class="float-right btn p-0 m-0 font-weight-bold text-light" style="font-size: 12px; white-space: nowrap;" data-toggle="collapse" data-target="#couponOne"
                                                aria-expanded="true" aria-controls="couponOne">See more</button>
                                            </div>
                                            <hr style="border: 1px dashed white;" />
                                            <div class="row align-items-center">
                                                <div class="col-8 btn-group w-100 py-1" role="group" aria-label="Basic example">
                                                    <p class="btn promoCode m-0">CART25</p>
                                                    <button type="button" onClick="copyToClipboard('couponOne')" class="btn bg-light font-weight-bold text-nowrap promoCopyBtn"><i class="fa-solid fa-copy"></i> COPY</button>
                                                </div>
                                                <a href="https://wa.me/?text=Your%20custom%20message%20here" class="btn p-1 col-2 text-white text-nowrap"><i class="fa-solid fa-share"></i> Share</a>
                                            </div>
                                            <div id="couponOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                                <div class="card-body p-0 px-3 pb-2 mt-2"
                                                    style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                                    <p class="m-0 p-0 text-dark text-center font-weight-bold" style="font-size: 12px">TERMS & CONDITIONS</p>
                                                    <ul class="couponList text-left" >
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem, ipsum.</li>
                                                        <li>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <a href="#" class="my-3 rounded-lg p-3 d-flex align-items-center" style="background-color: #8340A130; border:1px solid #8340A150;">
                        <img src="<?= base_url('assets/new_website/img/mobileWhatsapp.png')?>" style="width: 40px;" alt="">
                        <div class="d-flex flex-column flex-grow-1 pl-2" style="line-height: 1.25">
                            <span class="fs16 font-weight-bold">Celebrate your Personal Style</span>
                            <span class="fs10">Chat with Our Personal Fashion Stylist Today to find your perfect look</span>
                        </div>
                        <span class="float-end"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                    <div class="d-flex justify-content-around align-items-center py-2 features">
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/giftbox.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">Gift Wrap</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/rupee-sign.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">POD Ready</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/back.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12">Easy Returns</p>
                        </div>
                        <div class="text-center">
                            <img src="<?= base_url('assets/new_website/img/crown2.png')?>" style="width: 28px;" alt="">
                            <p class="m-0 mt-1 fs12" style="width: 80px; line-height: 1.25">Royal Club Cash</p>
                        </div>
                    </div>
                    <div class="my-3" id="royalClub">
                        <p class="m-0 font-weight-bold text-dark">ROYAL CLUB EXCLUSIVES</p>
                        <div class="swiper royalClubSwiper my-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 80px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Club Cash Rewards Upto ₹8</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club1.jpg')?>" style="width: 80px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Club Cash Rewards Upto ₹8</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club2.jpg')?>" style="width: 80px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Exclusive Offers & Discounts</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club3.jpg')?>" style="width: 80px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Reduced Prices on Products</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="<?= base_url('assets/new_website/img/club4.jpg')?>" style="width: 80px;" alt="">
                                        <p class="m-0 mt-2 fs12" style="line-height: 1.25">Lower Cost Barrier</p>
                                        <a href="#" class="toolTip text-dark"
                                            tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                            <i class="fa-solid fa-circle-question text-secondary"></i>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="my-3">
                        <p class="m-0 font-weight-bold text-dark">COMPLETE THE LOOK</p>
                        <div class="swiper lookSwiper my-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look1.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look2.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look3.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look4.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look5.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look6.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look7.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="text-dark lookSwiperItem">
                                        <img src="<?= base_url('assets/new_website/img/look8.avif')?>" style="height: 120px;" alt="">
                                        <p class="m-0 mt-2 font-weight-bold" style="line-height: 1.25">Lorem ipsum dolor</p>
                                        <p class="m-0 mt-1 fs12" style="line-height: 1.25">₹1,998</p>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="my-3">
                        <div class="d-flex flex-column border-bottom py-2">
                            <div id="headingOne">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <img src="<?=base_url('assets/new_website/img/product-details.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">PRODUCT DETAILS</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <div>
                                        <p class="text-dark font-weight-bold mb-1">Fabric:</p>
                                        <ul style="list-style-type: '-'; padding-left: 0;">
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Material: </span>
                                                    <span>100% Organic Cotton</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weight: </span>
                                                    <span>180 GSM (grams per square meter) for a comfortable, medium-weight feel</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weave: </span>
                                                    <span>Je₹ey knit for a soft and breathable texture</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column border-bottom py-2">
                            <div id="headingTwo">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="<?=base_url('assets/new_website/img/dressBoth.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">GET TO KNOW YOUR PRODUCT</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, a ad! Modi praesentium facere dignissimos deleniti illo cum sint necessitatibus illum laborum quo vero totam blanditiis cumque molestias possimus, animi corrupti alias, pariatur nisi sapiente at impedit nostrum! Quo, hic minus soluta consequuntur, ipsum nulla eaque beatae nesciunt placeat nam aspernatur atque excepturi commodi distinctio incidunt reiciendis laborum voluptate voluptates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column border-bottom py-2">
                            <div id="headingThree">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <img src="<?=base_url('assets/new_website/img/care.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">CARE</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores impedit necessitatibus qui quaerat commodi ipsa harum sequi, at aliquid quidem iure ad quasi tempore alias amet est perferendis facere unde vel! Quos perspiciatis est quas! Sint consequatur non eius rem sequi soluta? Quis vero sint a eveniet incidunt, praesentium fugiat?</p>
                                    <div>
                                        <p class="text-dark font-weight-bold mb-1">Fabric:</p>
                                        <ul style="list-style-type: '-'; padding-left: 0;">
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Material: </span>
                                                    <span>100% Organic Cotton</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weight: </span>
                                                    <span>180 GSM (grams per square meter) for a comfortable, medium-weight feel</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weave: </span>
                                                    <span>Je₹ey knit for a soft and breathable texture</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column border-bottom py-2">
                            <div id="headingFour">
                                <button class="btn btn-block text-left font-weight-bold text-dark align-items-center fs14" type="button" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="true" aria-controls="collapseFour">
                                    <img src="<?=base_url('assets/new_website/img/return2.png')?>" class="mr-1" style="width: 20px; margin-top: -2px;"
                                        alt="">
                                    <span class="font-weight-bold">RETURN & EXCHANGE GUIDELINES</span>
                                    <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                </button>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="">
                                <div class="card-body p-0 px-3 pb-2 mt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores impedit necessitatibus qui quaerat commodi ipsa harum sequi, at aliquid quidem iure ad quasi tempore alias amet est perferendis facere unde vel! Quos perspiciatis est quas! Sint consequatur non eius rem sequi soluta? Quis vero sint a eveniet incidunt, praesentium fugiat?</p>
                                    <div>
                                        <p class="text-dark font-weight-bold mb-1">Fabric:</p>
                                        <ul style="list-style-type: '-'; padding-left: 0;">
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Material: </span>
                                                    <span>100% Organic Cotton</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weight: </span>
                                                    <span>180 GSM (grams per square meter) for a comfortable, medium-weight feel</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="font-weight-bold">Weave: </span>
                                                    <span>Je₹ey knit for a soft and breathable texture</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3" id="reviews">
                        <p class="m-0 mb-3 font-weight-bold text-dark">RATINGS & REVIEWS</p>
                        <div class="d-flex justify-content-around border rounded-lg py-2">
                            <div class="px-4 d-flex align-items-center">
                                <p class="m-0" style="font-size: 22px;">4.0 </p>
                                <img src="<?=base_url('assets/new_website/img/star.png')?>" class="ml-1" style="width: 18px;" alt="">
                            </div>
                            <div class="text-center px-4">
                                <p class="m-0 fs16 font-weight-bold" style="line-height: 1;">61</p>
                                <span>Ratings</span>
                            </div>
                            <div class="text-center px-4">
                                <p class="m-0 fs16 font-weight-bold" style="line-height: 1;">6</p>
                                <span>Reviews</span>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">WHAT CUSTOMER SAID <i class="fa-solid fa-star-half"></i></p>
                            <div style="line-height:1;">
                                <p class="m-0 text-secondary">Fit</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-2">Tight (40%)</span>
                                </div>
                            </div>
                            <div style="line-height:1;">
                                <p class="m-0 text-secondary">Stretch</p>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-2">Medium (80%)</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn p-0 fs14 font-weight-bold reviewBtn" style="color:var(--pinkcolor);">View more...</button>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">BUYER PHOTOS <span>(6)</span></p>
                            <div>
                                <button class="btn p-0 customerReviewBtn">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 60px; height: 60px; object-fit: cover;" alt="">
                                </button>
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 60px; height: 60px; object-fit: cover;" alt="">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 60px; height: 60px; object-fit: cover;" alt="">
                                <button class="btn p-0 position-relative customerImageBtn">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" style="width: 60px; height: 60px; object-fit: cover;" alt="">
                                    <div class="position-absolute d-flex align-items-center justify-content-center" style="height: 100%; width: 100%; background-color: rgba(0, 0, 0, 0.4); top:0;">
                                        <span class="text-white font-weight-bold">+3</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div>
                            <p class="m-0 my-2 font-weight-bold text-dark">MOST HELPFULL REVIEW <span>(6)</span></p>
                            <div class="reviewsContainer">
                                <div class="border-bottom py-2">
                                    <div class="mb-1">
                                        <span class="text-dark p-1 rounded-lg border">4 <i class="fa-solid fa-star fs12" style="color: #FFD700;"></i></span>
                                    </div>
                                    <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                    <div class="mt-2 text-secondary d-flex justify-content-between">
                                        <span>John Doe | 1 day ago</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <label class="m-0 likeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                            <label class="m-0 likeContainer dislikeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-2">
                                    <div class="mb-1">
                                        <span class="text-dark p-1 rounded-lg border">4 <i class="fa-solid fa-star fs12" style="color: #FFD700;"></i></span>
                                    </div>
                                    <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                    <div class="mt-2 text-secondary d-flex justify-content-between">
                                        <span>John Doe | 1 day ago</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <label class="m-0 likeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                            <label class="m-0 likeContainer dislikeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-2">
                                    <div class="mb-1">
                                        <span class="text-dark p-1 rounded-lg border">4 <i class="fa-solid fa-star fs12" style="color: #FFD700;"></i></span>
                                    </div>
                                    <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                    <div class="mt-2 text-secondary d-flex justify-content-between">
                                        <span>John Doe | 1 day ago</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <label class="m-0 likeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                            <label class="m-0 likeContainer dislikeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-2">
                                    <div class="mb-1">
                                        <span class="text-dark p-1 rounded-lg border">4 <i class="fa-solid fa-star fs12" style="color: #FFD700;"></i></span>
                                    </div>
                                    <p class="m-0 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus exercitationem deserunt eos inventore laborum?</p>
                                    <div class="mt-2 text-secondary d-flex justify-content-between">
                                        <span>John Doe | 1 day ago</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <label class="m-0 likeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                            <label class="m-0 likeContainer dislikeContainer">
                                                <input type="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="50px" width="50px" class="like">
                                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                                </svg>
                                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                                    <polygon points="0,0 10,10"></polygon>
                                                    <polygon points="0,25 10,25"></polygon>
                                                    <polygon points="0,50 10,40"></polygon>
                                                    <polygon points="50,0 40,10"></polygon>
                                                    <polygon points="50,25 40,25"></polygon>
                                                    <polygon points="50,50 40,40"></polygon>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn fs14 font-weight-bold moreReviewBtn" style="color:var(--pinkcolor);">View all reviews <i class="fa-solid fa-chevron-down"></i></button>
                            <button type="button" class="btn fs14 font-weight-bold lessReviewBtn" style="display: none; color:var(--pinkcolor);">View less reviews <i class="fa-solid fa-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3 px-2 d-lg-none d-md-none d-block">
                <p class="m-0 mb-1 text-dark font-weight-bold">UNLOCKING GLAMOUR</p>
                <div class="d-flex flex-column flex-sm-row modalBtnContainer">
                    <button class="btn p-0 modalBtn celebDialogBtn">
                        <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                        <div class="w-100 modalBtnText">
                            <span>CELEBRITY BEAUTY SECRETS</span>
                        </div>
                    </button>
                    <button class="btn p-0 modalBtn fashionModalBtn">
                        <img src="https://i1.adis.ws/i/canon/pro-fashion-photography-technique-tips-1-new_e6eef04e6fe9434e9d9427a0220ef27c.jpeg" alt="">
                        <div class="w-100 modalBtnText">
                            <span>FASHION PAIRING</span>
                        </div>
                    </button>
                </div>
            </div>
        </section>
        <section>
            <div class="my-4">
                <p class="fs16 text-center font-weight-bold text-dark">Frequently Asked Questions (FAQ)</p>
                <div class="accordion px-3" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left fs14" style="font-family: var(--mainfont);" type="button" data-toggle="collapse" data-target="#accordOne" aria-expanded="true" aria-controls="accordOne">
                            Collapsible Group Item #1
                            </button>
                        </h2>
                        </div>

                        <div id="accordOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed fs14" style="font-family: var(--mainfont);" type="button" data-toggle="collapse" data-target="#accordTwo" aria-expanded="false" aria-controls="accordTwo">
                            Collapsible Group Item #2
                            </button>
                        </h2>
                        </div>
                        <div id="accordTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed fs14" style="font-family: var(--mainfont);" type="button" data-toggle="collapse" data-target="#accordThree" aria-expanded="false" aria-controls="accordThree">
                            Collapsible Group Item #3
                            </button>
                        </h2>
                        </div>
                        <div id="accordThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4 px-2" id="similarProducts">
                <p class="fs16 text-center font-weight-bold text-dark">SIMILAR PRODUCTS</p>
                <hr class="my-3">
                <div class="d-lg-block d-md-block d-none">
                    <div class="similarProductsContainer">
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-lg-none d-md-none d-block swiper similarProductsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4 px-2" id="similarProducts">
                <p class="fs16 text-center font-weight-bold text-dark">CUSTOMERS ALSO LIKED</p>
                <hr class="my-3">
                <div class="d-lg-block d-md-block d-none">
                    <div class="similarProductsContainer">
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border rounded-lg overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                <div class="rating text-white">
                                    <span>4.5</span>
                                    <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                    <span>| 10</span>
                                </div>
                            </div>
                            <div class="p-2">
                                <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                <div class="mt-1">
                                    <span>₹1,998</span>
                                    <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                    <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-lg-none d-md-none d-block swiper alsoLikedSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="d-block border rounded-lg overflow-hidden">
                                <div class="position-relative">
                                    <img src="<?= base_url('assets/new_website/img/img1.png') ?>" alt="">
                                    <div class="rating text-white">
                                        <span>4.5</span>
                                        <img src="<?= base_url('assets/new_website/img/star.png') ?>" alt="" style="width: 14px;">
                                        <span>| 10</span>
                                    </div>
                                </div>
                                <div class="p-2 text-left">
                                    <p class="text-dark font-weight-bold m-0">Lorem ipsum</p>
                                    <p class="text-secondary fs12 m-0">Lorem ipsum dolor sit amet.</p>
                                    <div class="mt-1">
                                        <span>₹1,998</span>
                                        <span class="text-secondary border-right pr-2" style="text-decoration: line-through;">₹2,998</span>
                                        <span class="fs12 pl-1 text-success font-weight-bold">50% OFF</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;

            const triggerPoint = 400;

            if (scrollPosition >= triggerPoint) {
                document.querySelector('.mobileHomeProductBtn').style.display = 'none';
            } else {
                document.querySelector('.mobileHomeProductBtn').style.display = 'block';
            }
        });
        
        window.addEventListener('load', () => {
            if(window.innerWidth < 768){   
                setTimeout(() => {
                    document.querySelector('.loginPromptContainer').style.display = 'block';
                    document.body.classList.add("sidebar-open");
                }, 5000)
            }
        });

        const closeLoginPromptBtn = document.querySelector(".closeLoginPromptBtn");

        closeLoginPromptBtn.addEventListener("click", () => {
            document.querySelector('.loginPromptContainer').style.display = 'none';
            document.body.classList.remove("sidebar-open");
        });

        const scrollBtn = document.querySelector('.scrollBtn')

        scrollBtn.addEventListener('click', () => {
            window.scrollBy({
                top: 3900,
                behavior: 'smooth'
            });
        })

        const reviewScrollBtn = document.querySelector('.reviewScrollBtn')

        reviewScrollBtn.addEventListener('click', () => {
            if(window.innerWidth > 768){
                window.scrollBy({
                    top: 2150,
                    behavior: 'smooth'
                });
            }else{
                window.scrollBy({
                    top: 2500,
                    behavior: 'smooth'
                })                
            } 
        })

        const royalClubScrollBtn = document.querySelector('.royalClubScrollBtn')

        royalClubScrollBtn.addEventListener('click', () => {
            if(window.innerWidth > 768){
                window.scrollBy({
                    top: 1200,
                    behavior: 'smooth'
                });
            }else{
                window.scrollBy({
                    top: 1500,
                    behavior: 'smooth'
                })                
            }    
            
        })

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                console.log('Text copied to clipboard: ' + text);
            }).catch(function(error) {
                console.error('Error copying text: ', error);
            });
        }

        var swiper100 = new Swiper(".thumbnailSwiper", {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        
        var swiper200 = new Swiper(".thumbnailSwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: swiper100,
            },
        });

        
        var swiper1 = new Swiper('.colorSwiper', {
                slidesPerView: 10,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 7
                    },
                    1100: {
                        slidesPerView: 6
                    },
                    768: {
                        slidesPerView: 5
                    },
                    640: {
                        slidesPerView: 8
                    },
                    568: {
                        slidesPerView: 7
                    },
                    468: {
                        slidesPerView: 6
                    },
                    360: {
                        slidesPerView: 4.5
                    },
                    300: {
                        slidesPerView: 4
                    }
                }
        });

        var swiper2 = new Swiper('.sizeSwiper', {
                slidesPerView: 8,
                spaceBetween: '0px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1250: {
                        slidesPerView: 11
                    },
                    1050: {
                        slidesPerView: 10
                    },
                    768: {
                        slidesPerView: 8
                    },
                    640: {
                        slidesPerView: 14
                    },
                    500: {
                        slidesPerView: 10
                    },
                    400: {
                        slidesPerView: 7
                    },
                    300: {
                        slidesPerView: 6
                    }
                }
        });

        var swiper21 = new Swiper('.sizeSwiper2', {
                slidesPerView: 9,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                breakpoints: {
                    600: {
                        slidesPerView: 9
                    },
                    400: {
                        slidesPerView: 8
                    },
                    300: {
                        slidesPerView: 7
                    }
                }
        });
        var swiper22 = new Swiper('.sizeSwiper3', {
                slidesPerView: 9,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                breakpoints: {
                    600: {
                        slidesPerView: 9
                    },
                    400: {
                        slidesPerView: 8
                    },
                    300: {
                        slidesPerView: 7
                    }
                }
        });
        var swiper23 = new Swiper('.sizeSwiper4', {
                slidesPerView: 9,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                breakpoints: {
                    600: {
                        slidesPerView: 9
                    },
                    400: {
                        slidesPerView: 8
                    },
                    300: {
                        slidesPerView: 7
                    }
                }
        });

        var swiper3 = new Swiper('.offerSwiper', {
                slidesPerView: 1.5,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1150: {
                        slidesPerView: 1.3
                    },
                    768: {
                        slidesPerView: 1
                    },
                    568: {
                        slidesPerView: 1.5
                    },
                    300: {
                        slidesPerView: 1.1
                    }
                }
        });

        var swiper4 = new Swiper('.royalClubSwiper', {
                slidesPerView: 4,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1250: {
                        slidesPerView: 4.5
                    },
                    1050: {
                        slidesPerView: 4.5
                    },
                    768: {
                        slidesPerView: 4
                    },
                    640: {
                        slidesPerView: 6
                    },
                    500: {
                        slidesPerView: 5
                    },
                    400: {
                        slidesPerView: 4.5
                    },
                    300: {
                        slidesPerView: 4
                    }
                }
        });

        var swiper5 = new Swiper('.lookSwiper', {
                slidesPerView: 4,
                spaceBetween: '8px',
                autoplay:false,
                loop: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    568: {
                        slidesPerView: 4
                    },
                    300: {
                        slidesPerView: 3
                    },
                    0: {
                        slidesPerView: 2
                    }
                }
        });

        var swiper6 = new Swiper('.productImageSwiper', {
                slidesPerView: 2,
                spaceBetween: 0,
                autoplay:false,
                loop: false,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                breakpoints: {
                    700: {
                        slidesPerView: 2
                    },
                    0: {
                        slidesPerView: 1
                    }
                },
        });

        var swiper7 = new Swiper('.similarProductsSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 16,
                autoplay:false,
                loop: false,
        });

        var swiper8 = new Swiper('.alsoLikedSwiper', {
                slidesPerView: 1.5,
                spaceBetween: 16,
                autoplay:false,
                loop: false,
        });

        var swiper9 = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper10 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper9,
            },
        });

        const priceContainer = document.querySelector(".priceContainer");
        const priceHoverDetails = document.querySelector(".priceHoverDetails");

        priceContainer.addEventListener("mouseenter", () => {
            priceHoverDetails.style.display = "block";
        })

        priceContainer.addEventListener("mouseleave", () => {
            priceHoverDetails.style.display = "none";
        })

        const clubPriceContainer = document.querySelector(".clubPriceContainer");
        const clubPriceHoverDetails = document.querySelector(".clubPriceHoverDetails");

        clubPriceContainer.addEventListener("mouseenter", () => {
            clubPriceHoverDetails.style.display = "block";
        })

        clubPriceContainer.addEventListener("mouseleave", () => {
            clubPriceHoverDetails.style.display = "none";
        })

        const sizeBtn = document.querySelectorAll(".sizeSwiper .swiper-wrapper .swiper-slide .sizeBtn");
        console.log(sizeBtn)

        sizeBtn.forEach(btn => {
            btn.addEventListener("mouseenter", () => {
                document.querySelector(".sizeDetails").style.display = "block";
            })
        })

        sizeBtn.forEach(btn => {
            btn.addEventListener("mouseleave", () => {
                document.querySelector(".sizeDetails").style.display = "none";
            })
        })

        sizeBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                sizeBtn.forEach(btn => btn.classList.remove('active'));
                btn.classList.add('active');
            })
        })

        const sidebarRadioBtns = document.querySelectorAll('input[name="size"]');
        const sidebarAddToBagBtn = document.querySelector('.sidebarAddToBagBtn');
        let sidebarRadios = false;

        sidebarRadioBtns.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.checked) {
                    sidebarRadios = true;
                    sidebarAddToBagBtn.removeAttribute('disabled');
                }
            });
        });

        const selectSizeBtn = document.querySelector(".selectSizeBtn");
        const addToBagBtn = document.querySelectorAll(".addToBagBtn");
        const mobileSizeDialog = document.querySelector(".mobileSizeDialog");
        const closeMobileSizeDialogBtn = document.querySelector("#closeMobileSizeDialogBtn");

        selectSizeBtn.addEventListener("click", () => {
            mobileSizeDialog.showModal();
            document.body.classList.add('sidebar-open');
        })

        addToBagBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                mobileSizeDialog.showModal();
                document.body.classList.add('sidebar-open');   
            })
        })
        

        // addToBagBtn.forEach(btn => {
        //     btn.addEventListener("click", () => {
        //         let hasActiveButton = false;
        //         sizeBtn.forEach(button => {
        //             if (button.classList.contains('active')) {
        //                 hasActiveButton = true;
        //             }
        //         });

        //         if(sidebarRadios){
        //             btn.classList.add("active");
        //             btn.innerHTML = "<i class='bx bx-shopping-bag'></i> GO TO BAG";
        //             showToast2('Product added to Bag', 'success');
        //             return
        //         }                

        //         if(!hasActiveButton && window.innerWidth < 568){
        //             mobileSizeDialog.showModal();
        //             document.body.classList.add('sidebar-open');
        //             return
        //         }else if(!hasActiveButton){
        //             document.querySelector(".sizeSwiper .swiper-wrapper").classList.add('animate__animated', 'animate__shakeX');
        //             window.scrollBy({
        //                 top: -300,
        //                 behavior: 'smooth'
        //             });
        //             const timer = setTimeout(() => {
        //                 document.querySelector(".sizeSwiper .swiper-wrapper").classList.remove('animate__animated', 'animate__shakeX');
        //             }, 1500)
        //             return
        //         }

        //         if(btn.classList.contains("active")){
        //             btn.classList.remove("active");
        //             btn.innerHTML = "<i class='bx bx-shopping-bag'></i> ADD TO BAG";
        //         } else {
        //             btn.classList.add("active");
        //             btn.innerHTML = "<i class='bx bx-shopping-bag'></i> GO TO BAG";
        //             showToast2('Product added to Bag', 'success');
        //         }
        //     })
        // })

        closeMobileSizeDialogBtn.addEventListener("click", () => {
            mobileSizeDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const wishlistBtn = document.querySelectorAll(".wishlistBtn");

        wishlistBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                if(btn.classList.contains("active")){
                    btn.classList.remove("active");
                    btn.innerHTML = "<i class='fa-regular fa-heart'></i> WISHLIST";
                } else {
                    btn.classList.add("active");
                    btn.innerHTML = "<i class='fa-solid fa-heart text-danger'></i> WISHLISTED";
                }
            })
        })

        // const sidebar = document.querySelector(".sidebar");
        // const closeBtn = document.querySelector(".closeSidebarBtn");
        // const sizeChartBtn = document.querySelector(".sizeChartBtn");

        // const mobileSizeChartBtn = document.querySelector(".mobileSizeChartBtn")

        // sizeChartBtn.addEventListener("click", (e) => {
        //     e.preventDefault();
        //     sidebar.style.transform = "translateX(0)";
        //     document.body.classList.add("sidebar-open");
        // });

        // closeBtn.addEventListener("click", () => {
        //     sidebar.style.transform = "translateX(100%)";
        //     document.body.classList.remove("sidebar-open");
        // });

        // mobileSizeChartBtn.addEventListener("click", (e) => {
        //     e.preventDefault();
        //     mobileSizeDialog.close();
        //     sidebar.style.transform = "translateX(0)";
        // });

        const mobileSizeBtns = document.querySelectorAll(".sizeSwiper2 .swiper-wrapper .swiper-slide .sizeBtn");
        const mobileSizeBtns2 = document.querySelectorAll(".sizeSwiper3 .swiper-wrapper .swiper-slide .sizeBtn");
        const mobileSizeBtns3 = document.querySelectorAll(".sizeSwiper4 .swiper-wrapper .swiper-slide .sizeBtn");
        const mobileSizeSubmitBtn = document.querySelector(".mobileSizeDialog .submitBtn");
        
        mobileSizeBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                mobileSizeBtns.forEach(btn => btn.classList.remove('active'));
                btn.classList.add('active');
            })            
        })
        mobileSizeBtns2.forEach(btn => {
            btn.addEventListener("click", () => {
                mobileSizeBtns2.forEach(btn => btn.classList.remove('active'));
                btn.classList.add('active');
            })            
        })
        mobileSizeBtns3.forEach(btn => {
            btn.addEventListener("click", () => {
                mobileSizeBtns3.forEach(btn => btn.classList.remove('active'));
                btn.classList.add('active');
            })            
        })

        mobileSizeBtns3.forEach(btn => {
            btn.addEventListener("click", () => {
                let hasActiveButton = false;
                let hasActiveButton2 = false;
                let hasActiveButton3 = false;

                mobileSizeBtns.forEach(button => {
                    if (button.classList.contains('active')) {
                        hasActiveButton = true;
                    }
                });                
                mobileSizeBtns2.forEach(button => {
                    if (button.classList.contains('active')) {
                        hasActiveButton2 = true;
                    }
                });                
                mobileSizeBtns3.forEach(button => {
                    if (button.classList.contains('active')) {
                        hasActiveButton3 = true;
                    }
                });                
                
                if(hasActiveButton && hasActiveButton2 && hasActiveButton3){
                    mobileSizeSubmitBtn.removeAttribute("disabled");
                    mobileSizeSubmitBtn.innerHTML = "DONE"
                } else{
                    mobileSizeSubmitBtn.setAttribute("disabled", true);
                    mobileSizeSubmitBtn.innerHTML = "SELECT SIZE"
                }
            })
        })

        mobileSizeSubmitBtn.addEventListener("click", () => {
            mobileSizeDialog.close();
            addToBagBtn.forEach((btn) => {
                btn.classList.add("active");
                btn.innerHTML = "<i class='bx bx-shopping-bag'></i> GO TO BAG"
            }
                
            );
            document.body.classList.remove("sidebar-open");
            showToast2('Product added to Bag', 'success');

        })

        const reviewDialog = document.querySelector(".reviewDialog");
        const closeReviewBtn = document.querySelector("#closeReviewBtn");
        const reviewBtn = document.querySelector(".reviewBtn");

        reviewBtn.addEventListener("click", (e) => {
            e.preventDefault();
            reviewDialog.showModal();
            document.body.classList.add("sidebar-open");
        });

        closeReviewBtn.addEventListener("click", () => {
            reviewDialog.close();
            document.body.classList.remove("sidebar-open");
        });

        const notifyDialog = document.querySelector(".notifyDialog");
        const notifyDialogCloseBtn = document.querySelector(".notifyDialogCloseBtn");
        const notifyDialogBtn = document.querySelector(".notifyDialogBtn");
        const notifyCredentialInput = document.querySelector('.notifyCredentialInput')
        const notifyCredentialBtn = document.querySelector('.notifyCredentialBtn')
        const notifyCredentialInputContainer = document.querySelector('.notifyCredentialInputContainer')

        notifyDialogBtn.addEventListener("click", (e) => {
            e.preventDefault();
            notifyDialog.showModal();
            document.body.classList.add("sidebar-open");
        });

        notifyDialogCloseBtn.addEventListener("click", () => {
            notifyDialog.close();
            document.body.classList.remove("sidebar-open");
        });

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

        const pincodeInput = document.querySelector('.pincodeInput');
        const pincodeForm = document.querySelector("#pincodeForm");
        const pincodeBtn = document.querySelector(".pincodeBtn");
        const pincodeChangeBtn = document.querySelector(".pincodeChangeBtn");
        const pincodeErrorMsg = document.querySelector(".pincodeErrorMsg");
        const pincodeSuccessMsg = document.querySelector(".pincodeSuccessMsg");
        const pincodeSuccesInfo = document.querySelector(".pincodeSuccesInfo");

        pincodeInput.addEventListener('input', function () {
            if (this.value.length > 6) {
                this.value = this.value.slice(0, 6);
            }
            if(pincodeErrorMsg.style.display == "block"){
                pincodeErrorMsg.style.display = "none";
            }
        });
        
        pincodeForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const data = new FormData(pincodeForm);
            const pincode = data.get("pincode");
            if(pincode == ""){
                return;
            } else if(pincode == 000000){
                pincodeErrorMsg.style.display = "block";
                return;
            } else if(pincode.length < 6){
                pincodeErrorMsg.style.display = "block";
                return;
            } else {
                document.querySelector(".pincodeInfo").style.display = "none";
                pincodeSuccessMsg.style.display = "block";
                pincodeInput.value = pincode;
                pincodeInput.disabled = true;
                pincodeBtn.style.display = "none";
                pincodeChangeBtn.style.display = "inline";
                pincodeSuccesInfo.style.display = "block";
                desktopPincodeDialog.close();
                document.body.classList.remove("sidebar-open");
                desktopPincodeBtn.innerHTML = `
                    <span class="fs12 flex-grow-1 text-left font-weight-bold">${pincode}</span>
                    <span class="fs12 font-weight-bold" style="color: var(--pinkcolor);">CHANGE</span>
                `
            }
        });

        pincodeChangeBtn.addEventListener("click", () => {
            pincodeInput.disabled = false
            pincodeInput.value = "";
            pincodeInput.focus();
            pincodeChangeBtn.style.display = "none";
            pincodeBtn.style.display = "inline";
            if(pincodeSuccesInfo.style.display == "block"){
                pincodeSuccesInfo.style.display = "none";
            }
            if(pincodeSuccessMsg.style.display == "block"){
                pincodeSuccessMsg.style.display = "none";
            }
            if(pincodeErrorMsg.style.display == "block"){
                pincodeErrorMsg.style.display = "none";
            }
        });

        const moreReviewBtn = document.querySelector(".moreReviewBtn");
        const lessReviewBtn = document.querySelector(".lessReviewBtn");
        const children = document.querySelectorAll('.reviewsContainer > *:not(:first-child)');
        
        moreReviewBtn.addEventListener("click", () => {
            document.querySelector(".reviewsContainer").style.height = "300px";
            document.querySelector(".reviewsContainer").style.overflowY = "scroll";
            children.forEach(child => {
                child.style.display = "block";
            })
            moreReviewBtn.style.display = "none";
            lessReviewBtn.style.display = "inline";
        })

        lessReviewBtn.addEventListener("click", () => {
            document.querySelector(".reviewsContainer").style.height = "auto";
            document.querySelector(".reviewsContainer").style.overflowY = "hidden";
            children.forEach(child => {
                child.style.display = "none";
            })
            moreReviewBtn.style.display = "inline";
            lessReviewBtn.style.display = "none";
        })

        const royalCashBtn = document.querySelector(".royalCashBtn");
        const royalCashDialog = document.querySelector(".royalCashDialog");
        const closeRoyalCashDialogBtn = document.querySelector("#closeRoyalCashDialogBtn");

        royalCashBtn.addEventListener("click", () => {
            royalCashDialog.showModal();
            document.body.classList.add("sidebar-open");
        })

        closeRoyalCashDialogBtn.addEventListener("click", () => {
            royalCashDialog.close();
            document.body.classList.remove("sidebar-open");
        })

        const sections = document.querySelectorAll(".sidebarContent section");
        const tabButtons = document.querySelectorAll(".tabButton");
        const sidebarContent = document.querySelector('.sidebarContent')

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                const navLink = document.querySelector(`.tabButton[href="#${id}"]`);

                if (entry.isIntersecting) {
                    navLink.classList.add('active');
                    entry.target.classList.add('active');
                } else {
                    navLink.classList.remove('active');
                    entry.target.classList.remove('active');
                }
            });
        }, { threshold: 0.5 });

        sections.forEach(section => {
            observer.observe(section);
        });
        

        const modalInsightBtn = document.querySelector(".modalInsightBtn");
        const insightDialog = document.querySelector(".insightDialog");
        const closeInsightDialogBtn = document.querySelector("#closeInsightDialogBtn");

        modalInsightBtn.addEventListener("click", () => {
            insightDialog.showModal();
            document.body.classList.add("sidebar-open");
        })

        closeInsightDialogBtn.addEventListener("click", () => {
            insightDialog.close();
            document.body.classList.remove("sidebar-open");
        })

        const customerImageBtn = document.querySelector(".customerImageBtn");
        const customerImagesDialog = document.querySelector(".customerImagesDialog");
        const closeCustomerImagesDialogBtn = document.querySelector("#closeCustomerImagesDialogBtn");

        customerImageBtn.addEventListener("click", () => {
            customerImagesDialog.showModal();
            document.body.classList.add("sidebar-open");
        })

        closeCustomerImagesDialogBtn.addEventListener("click", () => {
            customerImagesDialog.close();
            document.body.classList.remove("sidebar-open");
        })

        const customerReviewBtns = document.querySelectorAll(".customerReviewBtn");
        const customerReveiwDialog = document.querySelector(".customerReveiwDialog");
        const closeCustomerReviewBtn = document.querySelector("#closeCustomerReviewBtn");

        customerReviewBtns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                customerReveiwDialog.style.display = "block";
                document.body.classList.add("sidebar-open");
            })
        })

        closeCustomerReviewBtn.addEventListener("click", () => {
            customerReveiwDialog.style.display = "none";
            document.body.classList.remove("sidebar-open");
        })

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

        function showToast2(message, type) {
            const toaster = document.getElementById('toaster2');
            const toast = document.createElement('div');
            
            // Create the structure of the toast
            toast.className = `toast2 ${type}`;
            
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

        

        const fashionModalBtn = document.querySelectorAll(".fashionModalBtn");
        const youtubePopupCloseBtn = document.querySelector(".youtubePopupCloseBtn");

        fashionModalBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelector(".youtubePopup").style.display = "flex";
                document.body.classList.add("sidebar-open");
            })
        })

        youtubePopupCloseBtn.addEventListener("click", () => {
            document.querySelector(".youtubePopup").style.display = "none";
            document.body.classList.remove("sidebar-open");
        })

        const celebDialogBtn = document.querySelectorAll(".celebDialogBtn");
        const celebDialog = document.querySelector(".celebDialog");
        const closeCelebDialogBtn = document.querySelector("#closeCelebDialogBtn");

        celebDialogBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                celebDialog.showModal();
                document.body.classList.add("sidebar-open");
            })
        })

        closeCelebDialogBtn.addEventListener("click", () => {
            celebDialog.close();
            document.body.classList.remove("sidebar-open");
        })

        const promoCopyBtns = document.querySelectorAll(".promoCopyBtn");

        promoCopyBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                btn.innerText = "Copied";
            })
        })

        const mobileZoomSwiperBtn = document.querySelectorAll(".productImageSwiper .swiper-slide");
        const productImageZoomDialog = document.querySelector(".productImageZoomDialog");
        const closeProductImageZoomDialogBtn = document.querySelector(".closeProductImageZoomDialogBtn");

        // mobileZoomSwiperBtn.forEach(btn => {
        //     btn.addEventListener("click", () => {
        //         productImageZoomDialog.style.display = "block";
        //     })
        // })

        // closeProductImageZoomDialogBtn.addEventListener("click", () => {
        //     productImageZoomDialog.style.display = "none";
        //     document.body.classList.remove("sidebar-open");
        // })

        const mobileZoomImgBtns = document.querySelectorAll(".mobileZoomImgBtn");
        const mobileZoomImgs = document.querySelectorAll(".mobileZoomImg");
        const closeMobileZoomImg = document.querySelectorAll(".closeMobileZoomImg");
        let activeImage = null;
        let container = null;

        mobileZoomImgBtns.forEach((img, index) => {
            img.addEventListener("click", () => {
                mobileZoomImgs[index].style.display = "block";
                // document.body.classList.add("sidebar-open");
                mobileZoomImgs[index].children[0].classList.add("active")
                activeImage = mobileZoomImgs[index].children[0];
                container = mobileZoomImgs[index];
                closeMobileZoomImg[index].addEventListener("click", () => {
                    mobileZoomImgs[index].style.display = "none";
                    mobileZoomImgs[index].children[0].classList.remove("active")
                })
            })
        })

        const movableImgs = document.querySelectorAll('.movableImg');
        let isDragging = false;
        let startX, startY, initialX, initialY;

        movableImgs.forEach(movableImg => {
            movableImg.addEventListener('mousedown', startDrag);
            movableImg.addEventListener('touchstart', startDrag, { passive: false });

            movableImg.addEventListener('mousemove', drag);
            movableImg.addEventListener('touchmove', drag, { passive: false });

            movableImg.addEventListener('mouseup', stopDrag);
            movableImg.addEventListener('touchend', stopDrag);
        })
        

        function startDrag(e) {
            e.preventDefault();
            isDragging = true;
            
            // Get starting positions
            startX = (e.type === 'touchstart') ? e.touches[0].clientX : e.clientX;
            startY = (e.type === 'touchstart') ? e.touches[0].clientY : e.clientY;

            // Store the current position of the image
            initialX = activeImage.offsetLeft;
            initialY = activeImage.offsetTop;
        }

        function drag(e) {
            if (!isDragging) return;

            e.preventDefault();
            
            // Get the new cursor/touch position
            let currentX = (e.type === 'touchmove') ? e.touches[0].clientX : e.clientX;
            let currentY = (e.type === 'touchmove') ? e.touches[0].clientY : e.clientY;

            // Calculate how far the pointer has moved
            const dx = currentX - startX;
            const dy = currentY - startY;

            // Calculate the new position
            let newLeft = initialX + dx;
            let newTop = initialY + dy;

            const containerRect = container.getBoundingClientRect();
            const imageRect = activeImage.getBoundingClientRect();

            // Boundary checks to prevent the image from going outside the container
            if (newLeft > 0) newLeft = 0;  // Prevent dragging past the left edge
            if (newTop > 0) newTop = 0;    // Prevent dragging past the top edge

            const maxLeft = containerRect.width - imageRect.width;
            const maxTop = containerRect.height - imageRect.height;

            if (newLeft < maxLeft) newLeft = maxLeft;  // Prevent dragging past the right edge
            if (newTop < maxTop) newTop = maxTop;      // Prevent dragging past the bottom edge            

            // Move the image by adjusting the 'top' and 'left' properties
            activeImage.style.left = newLeft + 'px';
            activeImage.style.top = newTop + 'px';
        }

        function stopDrag() {
            isDragging = false;
        }

        function handleTouchStart(e) {
            if (e.touches.length === 2) {
                isPinching = true;
                initialDistance = getDistance(e.touches[0], e.touches[1]);
            } else {
                startDrag(e);
            }
        }

        function handleTouchMove(e) {
            if (isPinching && e.touches.length === 2) {
                const newDistance = getDistance(e.touches[0], e.touches[1]);
                const zoomFactor = newDistance / initialDistance;
                scale *= zoomFactor;

                // Set limits on the scale
                scale = Math.max(1, Math.min(scale, 4));

                const activeImage = e.target;
                activeImage.style.transform = `scale(${scale})`;

                initialDistance = newDistance;
            } else {
                drag(e);
            }
        }

        function handleTouchEnd(e) {
            if (e.touches.length < 2) {
                isPinching = false;
            }
            stopDrag();
        }

        function getDistance(touch1, touch2) {
            const dx = touch2.clientX - touch1.clientX;
            const dy = touch2.clientY - touch1.clientY;
            return Math.sqrt(dx * dx + dy * dy);
        }

		let isThrottled = false;

        document.querySelectorAll('.imgContainer').forEach(container => {
            const lens = container.querySelector('.lens');
            const zoomId = container.getAttribute('data-zoom');
            const zoomWindow = document.querySelector(`.zoomWindow[data-zoom="${zoomId}"]`);
            const zoomedImage = zoomWindow.querySelector('.zoomedImage');

            container.addEventListener('mousemove', function(e) {
                if (isThrottled) return;
                isThrottled = true;
                
                // Use requestAnimationFrame for smoother updates
                requestAnimationFrame(() => {
                    const rect = container.getBoundingClientRect();
                    let x = e.clientX - rect.left;
                    let y = e.clientY - rect.top;

                    const lensHalfWidth = lens.offsetWidth / 2;
                    const lensHalfHeight = lens.offsetHeight / 2;

                    x = Math.max(lensHalfWidth, Math.min(x, rect.width - lensHalfWidth));
                    y = Math.max(lensHalfHeight, Math.min(y, rect.height - lensHalfHeight));

                    lens.style.display = "block";
                    zoomWindow.style.display = "block";

                    lens.style.left = (x - lensHalfWidth) + 'px';
                    lens.style.top = (y - lensHalfHeight) + 'px';

                    const zoomX = (x / rect.width) * zoomedImage.width;
                    const zoomY = (y / rect.height) * zoomedImage.height;

                    const zoomImageX = Math.max(zoomWindow.clientWidth / 2, Math.min(zoomX, zoomedImage.width - zoomWindow.clientWidth / 2));
                    const zoomImageY = Math.max(zoomWindow.clientHeight / 2, Math.min(zoomY, zoomedImage.height - zoomWindow.clientHeight / 2));

                    zoomedImage.style.left = -(zoomImageX - zoomWindow.clientWidth / 2) + 'px';
                    zoomedImage.style.top = -(zoomImageY - zoomWindow.clientHeight / 2) + 'px';

                    isThrottled = false;  // Reset throttle flag
                });
            });

            container.addEventListener('mouseout', function() {
                lens.style.display = "none";
                zoomWindow.style.display = "none";
            });
        });

        const desktopPincodeBtn = document.querySelector('.desktopPincodeBtn');
        const desktopPincodeDialog = document.querySelector('.desktopPincodeDialog');
        const closeDesktopPincodeDialogBtn = document.querySelector('#closeDesktopPincodeDialogBtn');

        desktopPincodeBtn.addEventListener("click", () => {
            desktopPincodeDialog.showModal();
            document.body.classList.add("sidebar-open");
            pincodeInput.value = '';
            pincodeInput.disabled = false;
            pincodeInput.focus();
        })

        closeDesktopPincodeDialogBtn.addEventListener("click", () => {
            desktopPincodeDialog.close();
            document.body.classList.remove("sidebar-open");
        })

        const openMobileExtraProductBtn = document.querySelector('.openMobileExtraProductBtn');
        const mobileExtraProductBtns = document.querySelector('.mobileExtraProductBtns');

        openMobileExtraProductBtn.addEventListener("click", () => {
            if (mobileExtraProductBtns.style.width == "auto") {
                mobileExtraProductBtns.style.width = "0";
            } else {
                mobileExtraProductBtns.style.width = "auto";
            }
        })

        // const video = document.getElementById('productVideo');
        // const muteToggle = document.getElementById('muteToggle');
        // const fullscreenToggle = document.getElementById('fullscreenToggle');

        // // Mute/Unmute Video
        // muteToggle.addEventListener('change', function() {
        //     video.muted = !video.muted;
        // });

        // // Toggle Fullscreen
        // fullscreenToggle.addEventListener('click', function() {
        //     if (!document.fullscreenElement) {
        //         video.requestFullscreen().catch(err => {
        //             console.error(`Error attempting to enable full-screen mode: ${err.message}`);
        //         });
        //     } else {
        //         document.exitFullscreen();
        //     }
        // });

        const mobileVideo = document.getElementById('mobileSilderVideo');
        const mobileMuteToggle = document.getElementById('mobileMuteToggle');

        mobileMuteToggle.addEventListener('change', function() {
            mobileVideo.muted = !mobileVideo.muted;
        });

        document.querySelectorAll('.zoom-wrapper').forEach(wrapper => {
    wrapper.addEventListener('mousemove', (e) => {
        const img = e.currentTarget.querySelector('.product-image');
        const { left, top, width, height } = e.currentTarget.getBoundingClientRect();

                const x = ((e.clientX - left) / width) * 100;
                const y = ((e.clientY - top) / height) * 100;

        // Limit zoom to not exceed certain scale (e.g., 2)
        img.style.transformOrigin = `${x}% ${y}%`;
        img.style.transform = `scale(1.5)`; // Adjust the scale factor as needed
    });

    wrapper.addEventListener('mouseleave', (e) => {
        const img = e.currentTarget.querySelector('.product-image');
        img.style.transformOrigin = "center center";
        img.style.transform = "scale(1)";
    });
});

	</script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>