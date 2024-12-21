<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Slick Pattern - Profile Details </title>
    <?php include 'include/cssLinks.php'; ?>
    <style>
        * {
            box-sizing: border-box;
        }

        h3 {
            font-family: var(--heading_font);
            font-size: 28px;
            font-weight: 500;
        }

        body {
            background-color: #FFFFFF;
        }

        body.sidebar-open {
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

        .feedback-btn {
            display: none !important;
        }

        .fs10 {
            font-size: 10px;
        }

        .fs12 {
            font-size: 12px;
        }

        .fs14 {
            font-size: 14px;
        }

        .fs16 {
            font-size: 16px;
        }

        .fs18 {
            font-size: 18px;
        }

        .lineHeight {
            line-height: 1;
        }

        main {
            max-width: 1560px;
            margin-inline: auto;
        }

        .overviewContainer {
            width: 70%;
            margin-inline: auto;
        }

        .overviewSidebar a {
            display: block;
            transition: 0.1s all ease-in-out;
        }

        .overviewSidebar p {
            color: rgba(0, 0, 0, 0.4);
        }

        .overviewSidebar a.active {
            color: var(--pinkcolor);
            font-weight: 700;
        }

        .overviewSidebar a.active:hover {
            color: var(--pinkcolor);
            font-weight: 700;
        }

      
        .overviewSidebar a:hover {
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

        .profileDetailsCont {
            width: 50%;
            margin-inline: auto;
            line-height: 2.25;
        }

        .editBtn {
            background-color: var(--maincolor);
            color: white;
            width: 100%;
        }

        .editBtn:hover {
            background-color: var(--pinkcolor);
            color: white;
        }

        @media (width< 1100px) {
            .overviewContainer {
                width: 85%;
            }

            .profileDetailsCont {
                width: 70%;
            }
        }

        @media (width< 910px) {
            .overviewContainer {
                width: 90%;
            }

            .profileDetailsCont {
                width: 80%;
            }
        }

        @media (width< 768px) {
            .overviewContainer {
                width: 92%;
            }
        }

        @media (width< 600px) {
            .overviewCards {
                grid-template-columns: 1fr 1fr;
            }

            .profileDetailsCont {
                width: 90%;
            }
        }

        @media (width< 568px) {

            header,
            .category_section,
            .extra_info {
                display: none;
            }

            .overviewContainer {
                padding-top: 60px;
            }

            .profileDetailsCont {
                width: 100%;
            }

            dialog {
                top: 100%;
                left: 0;
                transform: translateY(-100%);
                min-width: 100%;
                border-radius: 0;
            }
        }

        .custom-bg-color {
            background: #f3f3f3;
        }

        @media only screen and (max-width: 600px) {
            .res-img {
                height: 50px;
                width: 50px;
            }
        }

        .res-img {
            height: 50px;
            width: 50px;
        }



        /* search icon in placeholder  */
        .search-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .search-container input {
            padding-left: 30px;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
        }

        /* end search icon in placeholder  */

        /* filter icon in placeholder  */
        .input-icon {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .input-icon input {
            padding-left: 35px;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
        }
        /* end filter icon in placeholder  */

       

    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <main>

        <section class="d-lg-none d-md-none d-sm-block position-fixed w-100 bg-white" style="z-index: 1000; top: 0;">
            <div class="d-flex justify-content-between align-items-center px-3 py-1 shadow-sm">
                <div class="d-flex align-items-center text-dark">
                    <a href=""><span style="font-size: 20px;"><i class="fa-solid fa-arrow-left"></i></span></a>
                    <img src="<?= base_url('assets/new_website/img/favicon.png') ?>" class="ml-2" style="width: 40px;"
                        alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/search-black.png') ?>" style="width: 18px;"
                            alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/heart-black.png') ?>" style="width: 20px;"
                            alt="">
                    </a>
                    <a class="cartCounterBtn ml-3" href="">
                        <img src="<?= base_url('assets/new_website/img/bag-black.png') ?>" style="width: 20px;"
                            alt="">
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
                            <li><a href="#" class="active">My Orders</a></li>
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

                <!-- profile details start  -->
                <div class="col-lg-9 col-md-9 col-sm-12 pb-5">

                    <div class="row mt-3">

                        <div class="col-md-4 col-3">
                            <h1 style="all:unset;">
                                <p class="m-0 fs16 font-weight-bold text-dark"> All Orders </p>
                            </h1>
                            <p>from anytime</p>
                        </div>

                        <div class="col-md-6 col-7">
                            <div class="search-container">
                                <input type="text" placeholder="Search in orders" class="form-control">
                                <i class="fa fa-search search-icon"></i>
                            </div>
                        </div>

                        <div class="col-md-2 col-2">
                            <div class="input-icon">
                                <input type="text" placeholder="FILTER" class="form-control" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                <i class="fa fa-filter"></i>
                            </div>
                        </div>

                    </div>

                    <!-- filter Modal -->
                    <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" data-bs-backdrop="static"
                        data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                               
                                <div class="modal-header pb-0">
                                    <h5 class="modal-title" id="staticBackdropLabel"> <b> Filter Orders </b> </h5>
                                    <button type="button" class="btn pt-0" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-4">
                                                <b> Status </b>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioall" checked>
                                                    <label class="form-check-label" for="flexRadioall">
                                                        All
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadio_the_Way">
                                                    <label class="form-check-label" for="flexRadio_the_Way">
                                                        On the Way
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioDelivered">
                                                    <label class="form-check-label" for="flexRadioDelivered">
                                                        Delivered
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioCancelled">
                                                    <label class="form-check-label" for="flexRadioCancelled">
                                                        Cancelled
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioExchange">
                                                    <label class="form-check-label" for="flexRadioExchange">
                                                        Exchange
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiostatus" id="flexRadioReturned">
                                                    <label class="form-check-label" for="flexRadioReturned">
                                                        Returned
                                                    </label>
                                                </div>

                                            </div>

                                            <div class="col-4">
                                                <b> Time </b>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime1" checked>
                                                    <label class="form-check-label" for="flexRadiotime1">
                                                        Any Time
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime30_Days">
                                                    <label class="form-check-label" for="flexRadiotime30_Days">
                                                        Last 30 Days
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotime_6_Moths">
                                                    <label class="form-check-label" for="flexRadiotime_6_Moths">
                                                        Last 6 Moths
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotimelast_year">
                                                    <label class="form-check-label" for="flexRadiotimelast_year">
                                                        Last Years
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <b> Others Options </b>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiotlooks" checked>
                                                    <label class="form-check-label" for="flexRadiotlooks">
                                                      	Looks 
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadioprebooking">
                                                    <label class="form-check-label" for="flexRadioprebooking">
                                                    	Pre Booking
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadiotime" id="flexRadiosale">
                                                    <label class="form-check-label" for="flexRadiosale">
                                                        Sale
                                                    </label>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn  custom-btn">CLEAR FILTERS</button>
                                    <button type="button" class="btn custom-btn"> APPLY </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end filter Modal -->

                    <hr>

                <!-- start all order -->
                    <div class="row py-3 custom-bg-color">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-times-circle" style="font-size:24px"></i>
                                        </div>
                                        <div class="col-11">
                                            <b> Cancelled </b> <br>
                                              <span> on Fri, 20 Dec as per your request </span>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>" class="res-img"
                                                alt="no-img">
                                        </div>
                                        <div class="col-10">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>
                                        <div class="col-1">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"></i> </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-1">
                                            <img src="<?= base_url('public/images/back-img.jpg') ?>"
                                                style="height: 23px;border-radius: 100%;" alt="">
                                        </div>
                                        <div class="col-11">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <a href="#" class="text-danger"> View Refund details </a>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>" class="res-img"
                                                alt="no-img">
                                        </div>
                                        <div class="col-10">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>

                                        <div class="col-1">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"></i> </a>
                                        </div>

                                        <div class="col-12">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <p> Rate & Review to <b> earn Myntra credit</b> </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-1 d-flex align-items-center">
                                            <i class="fa fa-cube" style="font-size:17px"></i>
                                       </div>

                                        <div class="col-11">
                                            <b style="color: rgb(8 186 150);"> In Transit </b> <br>
                                            <span> Arriving by Tue, 24 Dec </span>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="row mx-1 py-1 custom-bg-color">
                                        <div class="col-1 px-sm-1 px-0">
                                            <img src="<?= base_url('public/images/jeans.webp') ?>" class="res-img"
                                                alt="no-img">
                                        </div>
                                        <div class="col-10">
                                            <b> Refund Credited </b> <br>
                                            <span> Your refund of ₹450.00 for return has been proccessed jeans </span>
                                            <br>
                                            <p> Size : 34 </p>
                                        </div>

                                        <div class="col-1">
                                            <a href="<?php echo site_url('Home2/order_details'); ?>"> <i class="fa fa-angle-right"></i> </a>
                                        </div>

                                        <div class="col-12">
                                           <a href="#" class="form-control text-center"> Track </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12 mt-2">
                            <center> <span>Showing 1 -2 of 2</span> </center>
                        </div>
                    </div>
                 <!-- end all order -->
                

                    <!-- start no order image  -->
                   <!--  <div class="row text-center">
                        <div class="col-md-12 ">
                            <img src="<?= base_url('public/images/no-order.png') ?>" style="max-width: 50%;" alt=""> <br>
                            <b> Your shopping journey is waiting to begin!  No orders yet? </b>
                            <p> Treat yourself! Discover something you'll love and start shopping.
                                    Track all your fabulous finds right here. Happy shopping, beautiful! </p>
                        </div>
                    </div> -->
                   <!-- end no order image  -->

                </div>
                <!-- profile details end -->


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
    <?php include 'include/footer.php'; ?>
    <!-- <?php include 'include/modal.php'; ?> -->
    <?php include 'include/jsLinks.php'; ?>

</body>

</html>
