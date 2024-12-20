<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Profile Details </title>
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
            width: 50%;
            margin-inline:auto;
            line-height: 2.25;
        }

        .editBtn{
            background-color: var(--maincolor);
            color: white;
            width: 100%;
        }

        .editBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
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
            .overviewCards{
                grid-template-columns: 1fr 1fr;
            }

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
        }
        
        </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
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
            <div class="pt-lg-5 pt-md-5 pt-sm-5 pt-3 pb-3">
                <div>
                    <p class="m-0 fs18 font-weight-bold text-dark">Account</p>
                    <p class="m-0 fs16">Welcome, SP Guest</p>
                    <p class="m-0">Good Morning, Mrs. Shukla</p>
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
                        <p class="m-0 mt-3 fs16 font-weight-bold text-dark">Profile details</p>
                    </h1>
                    <hr>
                    <div class="fs16 text-dark profileDetailsCont">
                        <p class="m-0 d-flex justify-content-between">
                            <span>Full Name:</span>
                            <span class="text-right">SP Guest</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Mobile Number:</span>
                            <span class="text-right">9876543210</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Email Address:</span>
                            <span class="text-right">--not added--</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Gender:</span>
                            <span class="text-right">Male</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Date of Birth:</span>
                            <span class="text-right">--not added--</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Date of Marriage:</span>
                            <span class="text-right">--not added--</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Location:</span>
                            <span class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Alternate Mobile:</span>
                            <span class="text-right">--not added--</span>
                        </p>
                        <p class="m-0 d-flex justify-content-between">
                            <span>Hint Name:</span>
                            <span class="text-right">--not added--</span>
                        </p>
                        <div class="mt-3">
                            <button class="btn font-weight-bold editBtn fs14">EDIT PROFILE</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>

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
        
    </script>
    <?php include('include/footer.php'); ?>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>