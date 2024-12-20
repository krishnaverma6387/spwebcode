<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Home </title>
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

        .userCard{
            width: 100%;
            background-color: rgba(0, 0, 0, 0.05);
        }

        .userCard img{
            width: 180px;
            height: 180px;
        }

        .userCard a{
            background-color: var(--maincolor);
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: 500;
        }

        .userCard a:hover{
            background-color: var(--pinkcolor);
        }

        .overviewCards{
            display: grid;
            gap: 8px;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .overviewCards a{
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            aspect-ratio: 1/1;
        }

        .overviewCards a:hover{
            scale: 1.05;
            box-shadow: 0 14px 24px rgba(62, 57, 107, .2);
            z-index: 30;
            color: black;
        }

        .overviewCards a img{
            width: 40px;
            height: 40px;
            object-fit: contain;
            margin-bottom: 6px;
        }

        .overviewCards a p{
            color:rgba(0, 0, 0, 0.4);
            line-height: 1.2;
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

        .notifycardCounter{
            height: 32px;
            width: 32px;
            display: grid;
            place-items: center;
            border-radius: 100vh;
            background-color: var(--maincolor);
            color: white;
            position: absolute;
            top: -6px;
            right: -6px;
        }

        .logoutBtn{
            background-color: var(--maincolor);
            color: white;
            width: 100%;
            border-radius: 4px;
            font-weight: 500;
        }

        .logoutBtn:hover{
            background-color: var(--pinkcolor);
            color: white;
        }

        @media (width< 1100px) {
            .overviewContainer{
                width: 85%;
            }
        }

        @media (width< 910px) {
            .overviewContainer{
                width: 90%;
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
        }

        @media (width< 568px) {
            header, .category_section, .extra_info{
                display: none;
            }

            .overviewContainer{
                padding-top: 60px;
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
                <div class="d-lg-none d-md-none d-sm-none d-block">
                    <button class="btn p-0 m-0 mobileProfileBtn">
                        <img src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/d664ddb1-a0c9-41cb-8ad7-53e323e5502d/e9df037a-8347-417b-af5c-0332420122df.png" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
            <div class="row border-top mb-5 pb-5">
                <div class="d-lg-block d-md-block d-sm-none d-none col-3 overviewSidebar border-right">
                    <div class="mt-3">
                        <a href="#" class="active">Overview</a>
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
                            <li><a href="#">Profile</a></li>
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
                    <div class="p-3 userCard mt-3 mb-4 d-lg-flex d-md-flex d-sm-flex d-none justify-content-between align-items-end">
                        <img src="<?= base_url('assets/new_website/img/user.png') ?>" alt="">
                        <a href="#"><i class="fas fa-edit"></i> EDIT PROFILE</a>
                    </div>
                    <div class="d-lg-none d-md-none d-sm-none d-block my-3 border">
                        <div>
                            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/powerpoint-denim-day-fashion-background-design-template-a0c8ea7168c7cb7257700cedf73f6912_screen.jpg?ts=1711562478" alt="">
                            <div class="p-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <img src="<?= base_url('assets/new_website/img/memberLogo.png') ?>" style="width: 110px;"  alt="">
                                </div>
                                <div class="text-right">
                                    <p class="m-0 font-weight-bold text-dark fs12">Wallet collection</p>
                                    <p class="m-0">₹ 50.00</p>
                                </div>
                            </div>
                            <a href="#" class="bg-secondary text-white p-2 d-flex justify-content-between align-items-center">
                                <span>MY RC MEMBERSHIP</span>
                                <span><i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-none d-sm-none d-block my-3 border">
                        <div class="row p-3">
                            <div class="col-2 pr-0">
                                <img src="<?= base_url('assets/new_website/img/profile.png') ?>" alt="">
                            </div>
                            <div class="col-10">
                                <p class="m-0 font-weight-bold text-dark mb-1 fs16">Complete Your Profile</p>
                                <p class="mb-3 fs12 lineHeight">See curated items and rewards base on your interests.</p>
                                <a href="#" class="border p-1 fs12">COMPLETE <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <h1 style="all:unset;">
                        <p class="mb-1 font-weight-bold text-dark">ORDERS, WISHLIST, AND MORE...</p>
                    </h1>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/order.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">My Orders</p>
                            <p class="m-0 fs12">Track your current and past order status.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/wishlist&coll.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">My Wishlist & Collections</p>
                            <p class="m-0 fs12">Access all your saved products and curated collections.</p>
                        </a>
                        <a href="#" class="border p-2 position-relative">
                            <img src="<?= base_url('assets/new_website/img/notifyMe.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Notify Me</p>
                            <p class="m-0 fs12">Set alerts for product availability or price drops.</p>
                            <div class="notifycardCounter">
                                <span>10</span>
                            </div>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/beautyAdvice.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Beauty Advice</p>
                            <p class="m-0 fs12">Chat with a personal fashion stylist for beauty and style tips.</p>
                        </a>
                    </div>
                    <hr>
                    <p class="mb-1 font-weight-bold text-dark">EXCLUSIVE</p>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/wallet.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">My Wallet</p>
                            <p class="m-0 fs12">Manage and view refunds and wallet balances.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/invites.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Invites & Credits</p>
                            <p class="m-0 fs12">Invite friends and earn shopping credits.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/rewardPoints.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">My Reward Points</p>
                            <p class="m-0 fs12">Earn and redeem points by referring friends and shopping.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/cashback.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">My Cashback</p>
                            <p class="m-0 fs12">Monitor your cashback rewards for eligible purchases.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/coupon-icon.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Coupons</p>
                            <p class="m-0 fs12">Stay updated with the latest offers, deals, and promotions.</p>
                        </a>
                    </div>
                    <hr>
                    <p class="mb-1 font-weight-bold text-dark">SUPPORT</p>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/msgSet.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Message Settings</p>
                            <p class="m-0 fs12">Customize and manage your notification preferences.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/chatus.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Chat with Us</p>
                            <p class="m-0 fs12">Instant support for orders, refunds, and cancellations.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/helpCenter.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Help Center</p>
                            <p class="m-0 fs12">Find answers, raise concerns, or explore FAQs.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/improve.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Help Us Improve</p>
                            <p class="m-0 fs12">Provide feedback through a quick survey on your experience.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/delete.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Delete Account</p>
                            <p class="m-0 fs12">Request account deletion and manage data privacy settings.</p>
                        </a>
                    </div>
                    <hr>
                    <p class="mb-1 font-weight-bold text-dark">PERSONALIZATION</p>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/profile.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Profile</p>
                            <p class="m-0 fs12">Manage your personal information, such as name and contact details.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/address.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Address</p>
                            <p class="m-0 fs12">Update or add your shipping and billing addresses.</p>
                        </a>
                    </div>
                    <hr>
                    <p class="mb-1 font-weight-bold text-dark">ROYAL CLUB MEMBERS</p>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/crown-icon.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Royal Benefits</p>
                            <p class="m-0 fs12">Discover exclusive privileges for Royal Club members.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/specialOffer.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Special Offers</p>
                            <p class="m-0 fs12">Access exclusive offers and deals as a Royal member.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/rcDash.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">RC Dashboard</p>
                            <p class="m-0 fs12">Manage your Royal Club membership details and activities.</p>
                        </a>
                    </div>
                    <hr>
                    <p class="mb-1 font-weight-bold text-dark">LEGAL</p>
                    <div class="py-2 overviewCards">
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/t&c.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Terms of Use</p>
                            <p class="m-0 fs12">Understand the terms and conditions of using the platform.</p>
                        </a>
                        <a href="#" class="border p-2">
                            <img src="<?= base_url('assets/new_website/img/privacy.png') ?>" alt="">
                            <p class="m-0 font-weight-bold text-dark mb-1">Privacy Policy</p>
                            <p class="m-0 fs12">Review how your personal data is collected and protected.</p>
                        </a>
                    </div>
                    <div class="mt-2">
                        <button class="btn logoutBtn fs14">LOGOUT</button>
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