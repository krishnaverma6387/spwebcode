<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Payment </title>
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

        body.modal-open {
            overflow-y: hidden;
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

        input[type="checkbox"],
        input[type="radio"] {
            accent-color: var(--color2) !important;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: var(--color2) !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        img {
            width: 100%;
        }

        .btn:focus,
        a:focus,
        input[type="text"]:focus,
        input[type="number"]:focus {
            box-shadow: none;
            outline: none;
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

        .stepper-item:hover {
            color: black;
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

        .cartContainer {
            width: 70%;
            display: grid;
            gap: 16px;
            grid-template-columns: 3fr 2fr;
            margin-inline: auto;
        }

        .recommendPayments {
            transition: all .2s ease-in-out;
        }

        .recommendPayments p {
            font-size: 14px;
        }

        .paymentTabs button{
            background-color: var(--color4);
            color: black;
            border: 1px solid #ccc;
            border-bottom: none;
            border-radius: 0;
            text-align: left;
            font-size: 14px;
        }

        .paymentTabs button:nth-child(5){
            border-bottom: 1px solid #ccc;
        }

        .paymentTabs button.active{
            background-color: white;
            border-inline: none;
            position: relative;
        }

        .paymentTabs button.active::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: var(--color2);
            z-index: 1;
        }

        .contentWrapper .content{
            display: none;
        }
        .contentWrapper .content.active{
            display: block;
        }

        .borderStart {
            border-left: 1px solid rgb(0, 0, 0, 0.1);
            padding-left: 16px;
            margin-left: 16px;
        }

        a.toolTip {
            position: relative;
            font-size: 12px;
        }

        a.toolTip::after {
            content: attr(tip);
            z-index: 9999;
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
            top: 0px;
            left: 20px;
            display: none;
        }

        a.toolTip:hover {
            position: relative;
        }

        a.toolTip:hover:after {
            display: block;
            z-index: 99999;
        }

        .paymentList {
            font-size: 14px;
        }

        .placeOrderBtn button {
            display: none;
        }

        .placeOrderBtn p {
            margin: 0;
            font-size: 12px;
            line-height: 1.25em;
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

        .cardErrorMsgLg {
            display: block;
        }

        @media (width<1150px) {
            .cartContainer {
                width: 80%;
            }
        }

        @media (width<950px) {
            .cartContainer {
                width: 95%;
            }
        }

        @media (width<900px) {
            .cartContainer {
                grid-template-columns: 1fr;
            }

            .borderStart {
                border-left: none;
                padding-left: 0;
                margin-left:0;
            }
        }

        @media (width<768px) {
            .cartContainer {
                padding-top: 60px;
            }
        }

        @media (width<568px) {
            .placeOrderBtn {
                position: fixed;
                bottom: 0px;
                left: 0;
                width: 100%;
                z-index: 9999;
                border-radius: 0;
                padding-block: 0.75rem!important;
                width: 100%;
                background-color: white;
                text-align: center;
                padding-block: 0!important
            }

            .placeOrderBtn button {
                display: block;
                border-radius: 0;
                padding-block: 0.75rem!important;
                width: 100%;
            }

            .placeOrderBtn p {
                font-size: 10px;
            }

            .placeOrderBtn2 {
                display: none;
            }

            .paymentList {
                margin-bottom: 82px;
            }

            .dialog {
                top: 100%;
                left: 0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }
        }
    </style>
    <main>
        <dialog class="dialog cvvDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold m-0">What is a CVV number?</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                    class="btn p-0 m-0 closeCvvDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <div>
                        <p class="text-secondary m-0" style="font-size: 12px;">The CVV number is a 3 digit number printed on the back of a credit card.</p>
                        <div class="text-center">
                            <img src="<?=base_url('assets/new_website/img/cvvBack.png')?>" style="width: 100px;" alt="">
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-dark m-0 pb-0 font-weight-bold" style="font-size: 14px;">Have an American Express card?</p>
                        <p class="text-secondary m-0 pt-0" style="font-size: 12px;">The 4-digit number is located on the front of your card, just above your credit card number.</p>
                        <div class="text-center">
                            <img src="<?=base_url('assets/new_website/img/cvvFront.jpg')?>" style="width: 100px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </dialog>
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
                    <span class="ml-2" style="font-size: 16px;">PAYMENT
                    </span>
                </div>
                <div>
                    <p>STEP 3/3</p>
                </div>
            </div>
        </section>
        <section class="d-lg-block d-md-block d-sm-none d-none">
            <div class="stepper-wrapper">
                <a href="#" class="stepper-item completed" style="font-size: 12px; font-weight: 700;">
                    <div class="step-counter">1</div>
                    <div class="step-name">BAG</div>
                </a>
                <a href="#" class="stepper-item completed" style="font-size: 12px; font-weight: 700;">
                    <div class="step-counter">2</div>
                    <div class="step-name">ADDRESS</div>
                </a>
                <div class="stepper-item active">
                    <div class="step-counter">3</div>
                    <div class="step-name">PAYMENT</div>
                </div>
            </div>
        </section>
        <hr class="m-0">
        <section>
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div class="d-lg-block d-md-block d-sm-none d-none">
                        <h1 class="text-secondary text-dark font-weight-bold" style="font-family: 'League Spartan', sans-serif; font-size: 16px;">CHOOSE PAYMENT MODE</h1>
                        <div class="row border rounded overflow-hidden paymentWrapper">
                            <div class="col-4 d-flex flex-column paymentTabs pl-0">
                                <button data-id="recommendPaymentsSection" class="btn p-3 tab-button active"><i class="fa-regular fa-star mr-1"></i>Recommended</button>
                                <button data-id="cod" class="btn p-3 tab-button"><i class="fa-solid fa-money-bill-wave mr-1"></i>Cash on delivery</button>
                                <button data-id="upi" class="btn p-3 d-flex align-items-center tab-button">
                                    <img src="<?= base_url('assets/new_website/img/upi.png')?>" class="mr-1" style="width:20px;" alt="">
                                    <div style="line-height: 1.25;">
                                        <span>UPI</span>
                                        <span class="text-secondary" style="font-size: 12px; white-space: nowrap">(Pay via any app)</span>
                                    </div>
                                </button>
                                <button data-id="card" class="btn p-3 tab-button"><i class="fa-regular fa-credit-card mr-1"></i>Credit/Debit card</button>
                                <button data-id="wallet" class="btn p-3 tab-button"><i class="fa-solid fa-wallet mr-1"></i>Wallets</button>
                                <button data-id="netbanking" class="btn p-3 tab-button"><i class="fa-solid fa-building-columns mr-1"></i>Net Banking</button>
                                <!-- <button data-id="paylater" class="btn p-3 tab-button"><i class="fa-regular fa-clock mr-1"></i>Pay later</button>
                                <button data-id="emi" class="btn p-3 tab-button"><i class="fa-solid fa-money-bill-transfer mr-1"></i>EMI</button> -->
                            </div>
                            <div class="col-8 p-0 contentWrapper">
                                <div id="recommendPaymentsSection" class="pt-4 mr-2 content active">
                                    <p class="font-weight-bold text-dark">Recommended Payment Mode</p>
                                    <div>
                                        <label for="pod"
                                            class="d-flex align-items-center justify-content-between px-2 py-3 mb-0 recommendPayments">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="recommendPayment" id="pod" value="pod" />
                                                <p class="m-0 p-0 ml-2 font-weight-bold">Pay on delivery</p>
                                            </div>
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                        </label>
                                        <hr class="my-0">
                                        <label for="online"
                                            class="d-flex align-items-center justify-content-between px-2 py-3 recommendPayments">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="recommendPayment" id="online" value="online" />
                                                <p class="m-0 p-0 ml-2 font-weight-bold">Google Pay</p>
                                            </div>
                                            <i class="fa-brands fa-google-pay" style="font-size: 20px;"></i>
                                        </label>
                                    </div>
                                </div>
                                <div id="cod" class="pt-4 mr-2 content">
                                    <p class="font-weight-bold text-dark">Cash on Delivery</p>
                                    <label for="cod"
                                        class="d-flex align-items-center justify-content-between px-2 py-3 mb-0 recommendPayments">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="cod" id="cod" value="cod" />
                                            <p class="m-0 p-0 ml-2 font-weight-bold">Cash on delivery (Cash/UPI)</p>
                                        </div>
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                    </label>
                                    <div class="mt-2 bg-light border p-2 rounded-lg">
                                        <p class="text-warning m-0"><i class="fa-solid fa-triangle-exclamation"></i> Cash on delivery</p>
                                        <p class="text-secondary m-0 font-weight-light" style="font-size: 12px;">Pay on deliver is available only for a purchase between of Rs. 1 to Rs. 10000</p>
                                    </div>
                                </div>
                                <div id="upi" class="pt-4 mr-2 content">
                                    <p class="font-weight-bold text-dark">Pay using UPI</p>
                                    <form class="px-2">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control" id="upiId" name="upiId" placeholder="Enter UPI ID*" style="font-size: 14px;">
                                            <button type="button" class="btn w-25 ml-2 btn-outline-success">VERIFY</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="card" class="pt-4 mr-2 pr-2 content">
                                    <p class="font-weight-bold text-dark mb-0">Credit/Debit card</p>
                                    <p class=" text-secondary" style="font-size: 12px;">Please ensure that your card can be used for online payments</p>
                                    <form id="cardFormLg">
                                        <input type="number" class="form-control mt-2" id="cardNumber"
                                            name="cardNumber" placeholder="Card number*" style="font-size: 14px;"
                                            required>
                                        <input type="text" class="form-control mt-2" id="fullName" name="fullName"
                                            placeholder="Name on card*" style="font-size: 14px;" required>
                                        <div class="d-flex" style="gap: 8px;">
                                            <input type="text" class="form-control mt-2" id="validThru"
                                                name="validThru" placeholder="Valid thru (MM/YY)*"
                                                style="font-size: 14px;" oninput="formatExpiryDate(this)" onkeydown="handleBackspace(event, this)" required>
                                            <div class="d-flex align-items-center">
                                                <input type="number" class="form-control mt-2" id="cvv" name="cvv"
                                                    placeholder="CVV*" style="font-size: 14px;" required max="9999">
                                                <button type="button" class="btn p-0 m-0 cvvDialogBtn">
                                                    <img src="<?= base_url('assets/new_website/img/cvv.png')?>" style="width:40px;" class="ml-1 mt-2" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mt-2 bg-light border p-2 rounded-lg cardErrorMsgLg">
                                        <p class="text-danger" style="font-size: 12px;"><i class="fa-solid fa-triangle-exclamation"></i> Please fill all the card details to proceed</p>
                                    </div>
                                </div>
                                <div id="wallet" class="pt-4 mr-2 content">
                                    <p class="font-weight-bold text-dark">Select your wallet</p>
                                    <label for="airtel"
                                        class="d-flex align-items-center px-2 py-3 mb-0 recommendPayments">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="wallet" id="airtel" value="airtel" />
                                            <img src="<?= base_url('assets/new_website/img/airtel.jpg')?>" class="mx-1" style="width:20px;" alt="">
                                            <p class="m-0 p-0 font-weight-bold">Airtel Payments Bank</p>
                                        </div>
                                    </label>
                                    <label for="mobikwik"
                                        class="d-flex align-items-center px-2 py-3 mb-0 recommendPayments">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="wallet" id="mobikwik" value="mobikwik" />
                                            <img src="<?= base_url('assets/new_website/img/mobikwik.png')?>" class="mx-1" style="width:20px;" alt="">
                                            <p class="m-0 p-0 font-weight-bold">Mobikwik</p>
                                        </div>
                                    </label>
                                </div>
                                <div id="netbanking" class="pt-4 mr-2 content">
                                    <p class="font-weight-bold text-dark">Net Banking</p>
                                    <label for="airtel"
                                        class="d-flex align-items-center px-2 py-3 mb-0 recommendPayments">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="wallet" id="airtel" value="airtel" />
                                            <img src="<?= base_url('assets/new_website/img/sbi.png')?>" class="mx-1" style="width:20px;" alt="">
                                            <p class="m-0 p-0 font-weight-bold">State Bank of India</p>
                                        </div>
                                    </label>
                                </div>
                                <!-- <div id="paylater" class="pt-4 content">
                                    <p class="font-weight-bold text-dark">Cash on delivery</p>
                                </div>
                                <div id="emi" class="pt-4 content">
                                    <p class="font-weight-bold text-dark">Net Banking</p>
                                </div> -->
                                <button class="btn w-100 font-weight-bold text-light position-absolute placeOrderBtn2"
                                    style="font-size: 14px; background-color: var(--color1); bottom: 8px;">PAY NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-none d-sm-block d-block">
                        <p class="text-secondary m-0 text-dark font-weight-bold text-center" style="font-family: 'League Spartan', sans-serif'; font-size: 16px;">CHOOSE PAYMENT MODE</p>
                        <div class="mt-2">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">RECOMMENDED
                                PAYMENT MODE</p>
                            <div class="d-flex flex-column mt-1">
                                <label for="pod2"
                                    class="d-flex align-items-center justify-content-between p-3 mb-0 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="recommendPayment2" id="pod2" value="pod2" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Pay on delivery</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                    </div>
                                </label>
                                <hr class="my-0">
                                <label for="online2"
                                    class="d-flex align-items-center justify-content-between p-3 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="recommendPayment2" id="online2" value="online2" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Gpay</p>
                                    </div>
                                    <div class="icon2">
                                        <i class="fa-brands fa-google-pay" style="font-size: 20px;"></i>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">ONLINE PAYMENT
                                METHODS</p>
                            <div class="card py-2 rounded-lg mt-1 border-0">
                                <div class="" id="headingOne">
                                    <button
                                        class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="font-weight-bold">
                                            <img src="<?=base_url('assets/new_website/img/upi.png')?>" style="width: 20px;" alt="">
                                            UPI
                                            <span class="font-weight-normal">(Pay with any UPI app)</span></span>
                                        <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                    <div class="card-body p-0 px-3 pb-2 mt-2"
                                        style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                        <form>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="upiId" name="upiId" placeholder="Enter UPI ID*" style="font-size: 14px;">
                                                <button type="button" class="btn w-25 ml-2 btn-outline-success" style="white-space: nowrap">VERIFY</button>
                                            </div>
                                            <button class="btn w-100 mt-2 text-white" type="submit" style="background-color: var(--color1);">PAY</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card py-2 rounded-lg mt-1 border-0">
                                <div class="" id="headingTwo">
                                    <button
                                        class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <span class="font-weight-bold">
                                            <i class="fa-solid fa-credit-card mr-1"></i>
                                            Credit/Debit card
                                            <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                    </button>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                    <div class="card-body p-0 px-3 pb-2 mt-2"
                                        style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                        <p>Please ensure your card can be used for online payments
                                        </p>
                                        <form>
                                            <input type="number" class="form-control mt-2" id="cardNumber"
                                                name="cardNumber" placeholder="Card number*" style="font-size: 14px;"
                                                required>
                                            <input type="text" class="form-control mt-2" id="fullName" name="fullName"
                                                placeholder="Name on card*" style="font-size: 14px;" required>
                                            <div class="d-flex" style="gap: 8px;">
                                                <input type="text" class="form-control mt-2" id="validThru"
                                                    name="validThru" placeholder="Valid thru (MM/YY)*"
                                                    style="font-size: 14px;" oninput="formatExpiryDate(this)" onkeydown="handleBackspace(event, this)" required>
                                                <div class="d-flex align-items-center">
                                                    <input type="number" class="form-control mt-2" id="cvv" name="cvv"
                                                        placeholder="CVV*" style="font-size: 14px;" required>
                                                    <button type="button" class="btn p-0 m-0 cvvDialogBtn">
                                                        <img src="<?= base_url('assets/new_website/img/cvv.png')?>" style="width:40px;" class="ml-1 mt-2" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card py-2 rounded-lg mt-1 border-0">
                                <div class="" id="headingTwo">
                                    <button
                                        class="btn btn-block text-left font-weight-bold text-dark align-items-center"
                                        style="font-size: 14px;" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <span class="font-weight-bold">
                                            <i class="fa-solid fa-wallet mr-1"></i>
                                            Wallets
                                            <i class="fa-solid fa-caret-down float-right mt-1"></i>
                                    </button>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="">
                                    <div class="card-body p-0 px-3 pb-2 mt-2"
                                        style="font-size: 13px; color: rgb(0, 0, 0,0.75);">
                                        <p class="font-weight-bold text-dark">Select your wallet</p>
                                        <label for="airtel2"
                                            class="d-flex align-items-center px-2 py-3 mb-0 recommendPayments">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="wallet" id="airtel2" value="airtel2" />
                                                <img src="<?= base_url('assets/new_website/img/airtel.jpg')?>" class="mx-1" style="width:20px;" alt="">
                                                <p class="m-0 p-0 font-weight-bold">Airtel Payments Bank</p>
                                            </div>
                                        </label>
                                        <label for="mobikwik2"
                                            class="d-flex align-items-center px-2 py-3 mb-0 recommendPayments">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="wallet" id="mobikwik2" value="mobikwik2" />
                                                <img src="<?= base_url('assets/new_website/img/mobikwik.png')?>" class="mx-1" style="width:20px;" alt="">
                                                <p class="m-0 p-0 font-weight-bold">Mobikwik</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 10px;">PAY ON DELIVERY
                                OPTION</p>
                            <div>
                                <label for="cod2" class="w-100 p-3 mb-0 recommendPayments">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="cod2" id="cod2" value="cod2" />
                                        <p class="m-0 p-0 ml-2 font-weight-bold">Cash on delivery
                                            <span class="font-weight-normal">(CASH/UPI)</span></p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0 borderStart">
                    <div class="mt-4">
                        <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">PRICE DETAILS
                            <span>(1 item)</span>
                        </p>
                        <div class="mt-2 paymentList">
                            <p class="mb-1">Total MRP <span class="float-right">₹399</span></p>
                            <p class="mb-1">Discount on MRP <span class="float-right text-success">-₹399</span></p>
                            <p class="mb-1">Platform fee
                                <a href="#" class="toolTip text-dark"
                                    tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                    <i class="fa-solid fa-info-circle ml-1 text-secondary"></i>
                                </a>
                                <span class="float-right">₹399</span>
                            </p>
                            <p class="mb-1">Delivery charges
                                <a href="#" class="toolTip text-dark"
                                    tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                    <i class="fa-solid fa-info-circle ml-1 text-secondary"></i>
                                </a>
                                <span class="float-right">₹399</span>
                            </p>
                            <p class="mb-1">Cash/Pay on delivery charges
                                <a href="#" class="toolTip text-dark"
                                    tip="This is a link to somewhere cool, and the toolTip gives more info about that cool place...">
                                    <i class="fa-solid fa-info-circle ml-1 text-secondary"></i>
                                </a> 
                                <span class="float-right">₹399</span>
                            </p>
                            <hr>
                            <p class="font-weight-bold text-dark mb-2">Total Amount <span class="float-right">₹399</span></p>
                        </div>
                        <div class="placeOrderBtn">
                            <button class="btn btn-block font-weight-bold text-light"
                                style="font-size: 14px; background-color: var(--color1);">PAY NOW</button>
                            <p class="text-secondary m-0 p-0 my-1">By placing the order, you agree to our
                                <a href="#" class="font-weight-bold" style="color: var(--color2);">Terms of use</a>
                                 & <a href="" class="font-weight-bold" style="color: var(--color2);">Privacy policy.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const tabs = document.querySelector(".paymentWrapper");
        const tabButton = document.querySelectorAll(".tab-button");
        const contents = document.querySelectorAll(".content");

        tabs.onclick = e => {
            const id = e.target.dataset.id;
            if (id) {
                tabButton.forEach(btn => {
                    btn.classList.remove("active");
                });
                e.target.classList.add("active");

                contents.forEach(content => {
                    content.classList.remove("active");
                });
                const element = document.getElementById(id);
                element.classList.add("active");
            }
        }

        const cvvDialog = document.querySelector(".cvvDialog");
        const cvvDialogBtn = document.querySelectorAll(".cvvDialogBtn");
        const closeCvvDialogBtn = document.querySelector(".closeCvvDialogBtn");

        cvvDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                cvvDialog.showModal();
                document.body.classList.add('modal-open');
            })
        })

        closeCvvDialogBtn.addEventListener('click', () => {
            cvvDialog.close();
            document.body.classList.remove('modal-open');
        })

        function formatExpiryDate(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            
            if (value.length >= 2) {
                // Add a slash after the second character
                input.value = value.slice(0, 2) + '/' + value.slice(2, 4);
            } else {
                input.value = value; // No slash if less than 2 digits
            }
        }
        
        function handleBackspace(event, input) {
            if (event.key === "Backspace" && input.value.length === 3) {
                // If backspace is pressed after the slash, remove the slash
                input.value = input.value.slice(0, 2);
            }
        }
        
    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>