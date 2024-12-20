<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Edit Profile </title>
    <?php include('include/cssLinks.php'); ?>
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

        input[type="number"]{
            border: 0;
            outline: 0;
        }
        
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input::placeholder{
            color: rgba(0, 0, 0, 0.4);
        }

        input[type="radio"]{
            accent-color: var(--pinkcolor);
        }

        .feedback-btn{
            display: none!important;
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

        .lineHeight{
            line-height: 1;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        .overviewContainer{
            width:70%;
            margin-inline:auto;
        }

        .overviewSidebar a{
            display: block;
            transition: 0.1s all ease-in-out;
        }

        .overviewSidebar p{
            color: rgba(0, 0, 0, 0.4);
        }

        .overviewSidebar a.active{
            color: var(--pinkcolor);
            font-weight: 700;
        }

        .overviewSidebar a.active:hover{
            color: var(--pinkcolor);
            font-weight: 700;
        }

        .overviewSidebar a:hover{
            color: black;
            font-weight: 600;
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

        .profileDetailsCont{
            width: 60%;
            margin-inline:auto;
            line-height: 2.25;
        }

        .gender-input input {
        display: none;
        }

        .gender-input {
        --container_width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        background-color: #fff;
        /* color: #000000; */
        width: var(--container_width);
        overflow: hidden;
        }

        .gender-input label {
        width: 100%;
        padding: 4px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        letter-spacing: -1px;
        }

        .selection {
        display: none;
        position: absolute;
        height: 100%;
        width: calc(var(--container_width) / 2);
        z-index: 0;
        left: 0;
        top: 0;
        transition: 0.15s ease;
        }

        .gender-input label:has(input:checked) {
        color: #fff;
        }

        .gender-input label:has(input:checked) ~ .selection {
        background-color: var(--maincolor);
        display: inline-block;
        }

        .gender-input label:nth-child(1):has(input:checked) ~ .selection {
            transform: translateX(calc(var(--container_width) * 0 / 2));
        }

        .gender-input label:nth-child(2):has(input:checked) ~ .selection {
            transform: translateX(100%);
        }

        .submitBtn, .verifyBtn{
            background-color: var(--maincolor);
            color: white;
            padding: 10px 20px;
        }

        .submitBtn:hover, .verifyBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        .verifyBtn.disabled:hover{
            background-color: var(--maincolor);
            color: white;
            cursor: not-allowed;
        }

        .inputs {
            display: flex;
            margin-bottom: 16px;
        }

        .inputs input {
            flex: 1;
            padding: 8px;
            border: 1px solid rgb(0, 0, 0, 0.2);
            margin-right: 8px;
            outline: none;
            max-width: 32px;
            transition: all 0.3s ease;
        }

        .inputs input:focus {
            border: 1px solid var(--pinkcolor);
        }

        .resendBtn{
            background:transparent;
            border:none;
            font-family: 'League Spartan', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: var(--pinkcolor);
        }

        .mobileProfileBtn{
            position: relative;
            border-radius: 100vh;
            overflow: hidden;
        }

        .mobileProfileBtn::after{
            content: "EDIT";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            font-weight: 500;
        }

        .mobileProfileBtn img{
            width: 72px;
            height: 72px;
            object-fit: cover;
            padding: 2px;
            border: 2px solid var(--maincolor);
        }

        .profileUploadDialog .btns{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            place-items: center;
            gap: 8px;
        }

        .profileUploadDialog .btns button{
            width: 102px;
            height: 102px;
        }

        .profileUploadDialog .btns button img{
            width: 24px;
            height: 24px;
            margin-bottom: 6px;
        }

        .verifyEmailBtn{
            background-color: var(--maincolor);
            color: white;
        }

        .verifyEmailBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        .emailInputBtns{
            display: none;
        }

        @media (width< 1100px) {
            .overviewContainer{
                width: 85%;
            }

            .profileDetailsCont{
                width: 70%;
            }
        }

        @media (width< 910px) {
            .overviewContainer{
                width: 90%;
            }

            .profileDetailsCont{
                width: 80%;
            }
        }
        @media (width< 768px) {
            .overviewContainer{
                width: 92%;
            }
        }
        @media (width< 600px) {

            .profileDetailsCont{
                width: 90%;
            }
        }

        @media (width< 568px) {
            header, .category_section, .extra_info{
                display: none;
            }

            .overviewContainer{
                padding-top: 60px;
            }

            .profileDetailsCont{
                width: 100%;
            }

            dialog{
                top:100%;
                left:0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }

            .submitBtn{
                position: fixed;
                padding: 12px 0px;
                bottom: 0;
                left: 0;
                z-index: 5;
            }
        }
        
        </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <dialog class="profileUploadDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">EDIT PROFILE PICTURE</p>
                <button id="closeProfileUploadDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3 btns">
                <button class="btn p-0 m-0 fs12 border rounded-circle d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= base_url('assets/new_website/img/gallery.png') ?>" alt="">
                    <span>Choose from gallery</span>
                </button>
                <button class="btn p-0 m-0 fs12 border rounded-circle d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= base_url('assets/new_website/img/camera.png') ?>" alt="">
                    <span>Take a picture</span>
                </button>
                <button class="btn p-0 m-0 fs12 border rounded-circle d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= base_url('assets/new_website/img/deleteRed.png') ?>" alt="">
                    <span>Remove</span>
                </button>
            </div>
        </dialog>
        <dialog class="verificationDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">ACCOUNT VERIFICATION</p>
                <button id="closeVerificationDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3 btns">
                <p class="mb-1 font-weight-bold">2-Step Verification Required</p>
                <p class="fs10 lineHeight text-secondary">For enhanced security, the OTP is sent to a previously registered number on your account.</p>
                <p class="font-weight-bold mb-2">Select a mobile number</p>
                <div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" name="verifyNum" id="1">
                        <label for="1" class="m-0">+91 9876543210</label>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="radio" name="verifyNum" id="2">
                        <label for="2" class="m-0">+91 9876543210</label>
                    </div>
                </div>
                <button class="btn w-100 fs12 font-weight-bold mt-3 rounded-0 verifyBtn disabled" disabled>SEND OTP</button>
            </div>
        </dialog>
        <dialog class="otpDialog" id="dialog">
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <p class="m-0 font-weight-bold">VERIFY YOUR OTP</p>
                <button id="closeOtpDialogBtn" type="button" aria-label="close" class="btn p-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-3 btns">
                <p class="mb-2">OTP has been sent to <span class="font-weight-bold">+91 9876543210</span></p>
                <div class="inputs py-3" id="inputs">
                    <input type="number" inputmode="numeric" class="otpField otpField1">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                </div>
                <p class="mb-2" style="color: gray; font-size: 14px;">Resend OTP in <span id="time">00:00</span></p>
                <!-- <button class="resendBtn">RESEND
                    OTP</button> -->
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
                        <img src="<?= base_url('assets/new_website/img/search-black.png') ?>" style="width: 18px;" alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/heart-black.png') ?>" style="width: 20px;" alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/bag-black.png') ?>" style="width: 20px;" alt="">
                    </a>
                </div>
            </div>
        </section>
        <section class="overviewContainer">
            <div class="pt-lg-5 pt-md-5 pt-sm-5 pt-3 pb-3 d-flex justify-content-between align-items-center">
                <div>
                    <p class="m-0 fs18 font-weight-bold text-dark">Account</p>
                    <p class="m-0 fs16">Welcome, SP Guest</p>
                    <p class="m-0">Good Morning, Mrs. Shukla</p>
                </div>
                <div>
                    <button class="btn p-0 m-0 mobileProfileBtn">
                        <img src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/d664ddb1-a0c9-41cb-8ad7-53e323e5502d/e9df037a-8347-417b-af5c-0332420122df.png" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
            <div class="row border-top mb-5 pb-5">
                <div class="d-lg-block d-md-block d-sm-none d-none col-3 overviewSidebar border-right">
                    <div class="mt-3">
                        <a href="#">Overview</a>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">ORDERS, WISHLIST AND MORE</p>
                        <ul>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">My Wishlist & Collections</a></li>
                            <li><a href="#">Notify Me</a></li>
                            <li><a href="#">Beauty Advice</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">EXCLUSIVE</p>
                        <ul>
                            <li><a href="#">My Wallet</a></li>
                            <li><a href="#">Invites & Credits</a></li>
                            <li><a href="#">My Reward Points</a></li>
                            <li><a href="#">My Cashback</a></li>
                            <li><a href="#">Coupons</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">SUPPORT</p>
                        <ul>
                            <li><a href="#">Message Settings</a></li>
                            <li><a href="#">Chat with Us</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Help Us Improve</a></li>
                            <li><a href="#">Delete Account</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">PERSONALIZATION</p>
                        <ul>
                            <li><a href="#" class="active">Profile</a></li>
                            <li><a href="#">My Address Book</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">ROYAL CLUB MEMBERS</p>
                        <ul>
                            <li><a href="#">Royal Benefits</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">RC Dashboard</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <p class="m-0 fs10 font-weight-bold">LEGAL</p>
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 pb-5">
                    <h1 style="all:unset;">
                        <p class="m-0 mt-3 fs16 font-weight-bold text-dark">Edit details</p>
                    </h1>
                    <hr>
                    <div class="profileDetailsCont">
                        <div class="border p-2">
                            <div>
                                <span class="fs12 lineHeight">Mobile number*</span>
                                <p class="m-0 lineHeight font-weight-bold text-dark">+91 9876543210 <i class="fas fa-circle-check ml-1 text-success"></i></p>
                            </div>
                            <button class="btn w-100 fs12 font-weight-bold text-secondary border mt-3 rounded-0 changeNumberBtn">CHANGE NUMBER</button>
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <label for="full_name" class="mb-0">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="border px-2 py-1" placeholder="Enter your full name">
                        </div>
                        <div>
                            <div class="d-flex flex-column mt-2">
                                <label for="email" class="mb-0">Email</label>
                                <input type="email" name="email" id="email" class="border px-2 py-1" placeholder="Enter your email">
                            </div>
                            <div class="gap-2 justify-content-end mt-2 emailInputBtns">
                                <button class="btn fs14 verifyEmailBtn">VERIFY & SAVE</button>
                                <button class="btn fs14 border verifyEmailCancelBtn">CANCEL</button>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <label class="mb-0">Gender</label>
                            <div class="gender-input border w-100">
                                <label class="m-0">
                                    <input value="value-1" checked name="value-radio" id="value-1" type="radio" />
                                    <span>MALE</span>
                                </label>
                                <label class="m-0">
                                    <input value="value-2" name="value-radio" id="value-2" type="radio" />
                                    <span>FEMALE</span>
                                </label>
                                <span class="selection"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <label for="dob" class="mb-0">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="w-100 border px-2 py-1">
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <label for="marriageDate" class="mb-0">Date of Marriage</label>
                            <input type="date" name="marriageDate" id="marriageDate" class="w-100 border px-2 py-1">
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <label for="location" class="mb-0">Location</label>
                            <input type="text" name="location" id="location" class="border px-2 py-1" placeholder="Enter your location">
                        </div>
                        <p class="my-2 text-dark font-weight-bold">Alternate number details</p>
                        <div class="d-flex gap-2 align-items-center mt-2 border px-2 py-1">
                             <span style="color: rgba(0, 0, 0, 0.4);">+91 | </span>
                            <input type="number" name="alternateMobile" id="alternateMobile" class="" placeholder="Mobile number">
                        </div>
                        <div class="mt-2">
                            <input type="text" name="hintName" id="hintName" class="border w-100 px-2 py-1" placeholder="Enter Hint name">
                        </div>
                        <button class="btn fs14 w-100 font-weight-bold mt-3 rounded-0 submitBtn">SAVE CHANGES</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>

        const changeNumberBtn = document.querySelector('.changeNumberBtn');
        const verificationDialog = document.querySelector('.verificationDialog');
        const closeVerificationDialogBtn = document.querySelector('#closeVerificationDialogBtn');

        changeNumberBtn.addEventListener('click', () => {
            verificationDialog.showModal();
            document.body.classList.add('sidebar-open');
        })

        closeVerificationDialogBtn.addEventListener('click', () => {
            verificationDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const radioBtns = document.querySelectorAll('input[name="verifyNum"]');
        const verifyBtn = document.querySelector('.verifyBtn');
        
        radioBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.checked) {
                    verifyBtn.classList.remove('disabled');
                    verifyBtn.removeAttribute('disabled');
                } else {
                    verifyBtn.classList.add('disabled');
                    verifyBtn.setAttribute('disabled', true);
                }
            })
        })

        const otpDialog = document.querySelector('.otpDialog');
        const closeOtpDialogBtn = document.querySelector('#closeOtpDialogBtn');

        verifyBtn.addEventListener('click', () => {
            verificationDialog.close();
            otpDialog.showModal();
        })

        closeOtpDialogBtn.addEventListener('click', () => {
            otpDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const inputs = document.getElementById("inputs");

        inputs.addEventListener("input", function (e) {
            const target = e.target;
            const val = target.value;

            if (isNaN(val)) {
                target.value = "";
                return;
            }

            if (val != "") {
                const next = target.nextElementSibling;
                if (next) {
                    next.focus();
                }
            }
        });

        inputs.addEventListener("keyup", function (e) {
            const target = e.target;
            const key = e.key.toLowerCase();

            if (key == "backspace" || key == "delete") {
                target.value = "";
                const prev = target.previousElementSibling;
                if (prev) {
                    prev.focus();
                    prev.value = "";
                }
                return;
            }
        });

        document.querySelector('.otpField1').addEventListener('paste', function(e) {
            const otp = e.clipboardData.getData('text').trim();

            if (otp.length < 6 || otp.length > 6) {
                return
            }
            if (otp.length === otpFields.length) {
                otpFields.forEach((field, index) => {
                    field.value = otp[index];
                });
                otpFields[5].focus();
            }
            e.preventDefault(); 
        });

        const mobileProfileBtn = document.querySelector('.mobileProfileBtn');
        const profileUploadDialog = document.querySelector('.profileUploadDialog');
        const closeProfileUploadDialogBtn = document.querySelector('#closeProfileUploadDialogBtn');

        mobileProfileBtn.addEventListener('click', () => {
            profileUploadDialog.showModal();
            document.body.classList.add('sidebar-open');
        })

        closeProfileUploadDialogBtn.addEventListener('click', () => {
            profileUploadDialog.close();
            document.body.classList.remove('sidebar-open');
        })

        const emailInput = document.querySelector('#email');
        const emailInputBtns = document.querySelector('.emailInputBtns')
        const verifyEmailCancelBtn = document.querySelector('.verifyEmailCancelBtn')

        emailInput.addEventListener('input', () => {
            emailInputBtns.style.display = 'flex';
        })

        verifyEmailCancelBtn.addEventListener('click', () => {
            emailInputBtns.style.display = 'none';
            emailInput.value = '';
        })
        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>