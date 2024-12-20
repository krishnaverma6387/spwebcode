<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Address </title>
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

        body {
            font-family: 'Inter', sans-serif;
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
            z-index: 999;
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
            /* box-shadow: -4px 0px 2px 4px rgb(0, 0, 0,0.5) ; */
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

        .addressBtn {
            font-size: 14px;
            border: 1px solid var(--color2);
            border-radius: 100vh;
        }

        .addressBtn:hover {
            background-color: var(--color2);
            color: white;
        }

        .addressBtn:focus {
            background-color: var(--color2);
            color: white;
        }

        .weekendCheckbox {
            display: none;
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

        .borderStart {
            border-left: 1px solid rgb(0, 0, 0, 0.1);
            padding-left: 16px;
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
            }
        }

        @media (width<768px) {
            .cartContainer {
                padding-top: 68px;
            }
        }

        @media (width<600px) {
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
                border-radius: 0;
                padding-block: 0.75rem!important;
                width: 100%;
            }
        }
    </style>
    <main>
        <div id="addressSidebar" class="sidebar">
            <button class="close-btn btn" onclick="closeAddressSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="sidebar-content">
                <div>
                    <p class="font-weight-bold m-0 text-dark" style="font-size: 18px">ADD NEW ADDRESS</p>
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
        <dialog class="dialog removeDialog p-0" id="dialog" style="z-index: 1;">
            <div>
                <div class="d-flex px-3 py-1 font-weight-bold justify-content-between align-items-center shadow-sm">
                    <p class="font-weight-bold p-0 m-0 my-1">Remove this address?</p>
                    <button id="closeAddressDialogBtn" aria-label="close"
                    class="btn p-0 m-0 closeRemoveDialogBtn font-weight-bold"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="px-3 pb-2 mt-2">
                    <p class="text-secondary" style="font-size: 14px;">Are you sure you want to remove this address from your list?</p>
                    <hr class="m-0">
                    <div class="d-flex mt-1">
                        <button class="btn w-50 text-secondary font-weight-bold" style="font-size: 12px;">CANCEL</button>
                        <button class="btn w-50 font-weight-bold border-left ml-2" style="font-size: 12px; color: var(--color2);">REMOVE</button>
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
                    <span class="ml-2" style="font-size: 16px;">ADDRESS
                    </span>
                </div>
                <div>
                    <p>STEP 2/3</p>
                </div>
            </div>
        </section>
        <section class="d-lg-block d-md-block d-sm-none d-none">
            <div class="stepper-wrapper">
                <a href="#" class="stepper-item completed" style="font-size: 12px; font-weight: 700;">
                    <div class="step-counter">1</div>
                    <div class="step-name">BAG</div>
                </a>
                <div class="stepper-item active">
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
        <section>
            <div class="cartContainer mb-2">
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0">
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1 class="text-secondary m-0 p-0 text-dark font-weight-bold" style="font-size:16px; font-family: 'League Spartan', sans-serif">Select delivery
                                    address</h1>
                            </div>
                            <button onclick="openAddressSidebar()" class="btn font-weight-bold"
                                style="font-size: 12px; border: 1px solid black">ADD NEW ADDRESS</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">DEFAULT ADDRESS
                            </p>
                            <div class="mt-2 p-3 rounded-lg" style="box-shadow: 0px 0px 4px 1px #ccc;">
                                <div class="d-flex align-items-center">
                                    <input type="radio" name="" id="" style="zoom: 1.1;" checked>
                                    <p class="m-0 p-0 ml-2 text-dark font-weight-bold" style="font-size: 18px;">John Doe
                                        <span class="text-success font-weight-normal ml-4 rounded-lg p-1"
                                            style="font-size: 12px; border: 1px solid green;">HOME</span>
                                    </p>
                                </div>
                                <div class="text-secondary mt-2 ml-3" style="font-size: 14px;">
                                    <p class="m-1 w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
                                        dolor.</p>
                                    <p class="ml-1 my-2">Mobile: <span class="font-weight-bold text-dark">+91 123456789</span>
                                    </p>
                                    <p class="ml-1 my-2"><i class="fa-solid fa-caret-right mr-1"></i>Pay on Delivery not
                                        available</p>
                                    <!-- <li>Pay on Delivery available</li> -->
                                    <div class="mt-2">
                                        <button class="btn font-weight-bold d-none d-lg-inline d-md-inline d-sm-inline d-xs-none addressRemoveBtn"
                                            style="font-size: 14px; border: 1px solid black; font-family: 'League Spartan';">Remove</button>
                                        <button onclick="openAddressSidebar()" class="btn font-weight-bold d-none d-lg-inline d-md-inline d-sm-inline d-xs-none"
                                            style="font-size: 14px; border: 1px solid black; font-family: 'League Spartan';">Edit</button>
                                        <button onclick="openAddressSidebar()" class="btn font-weight-bold d-inline d-lg-none d-md-none d-sm-none d-xs-inline"
                                            style="font-size: 14px; border: 1px solid black; font-family: 'League Spartan';">CHANGE OR ADD ADDRESS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="openAddressSidebar()" class="btn btn-block text-left mt-2 p-4 rounded-lg"
                            style="border: 2px dashed rgb(0, 0, 0,0.2); text-decoration: none;">
                            <p class="m-0 p-0 font-weight-bold" style="font-size: 12px; color: var(--color2);">+ADD NEW
                                ADDRESS</p>
                        </button>
                    </div>
                </div>
                <div class="mt-lg-3 mt-md-3 mt-sm-0 mt-0 borderStart">
                    <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">DELIVERY ESTIMATES
                    </p>
                    <div class="d-flex flex-column" style="gap: 8px;">
                        <div class="d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwqIMSS6cTq7wi1c08k5ZHrGiyQ0tepv1bfg&s"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Delivery between <span
                                    class="font-weight-bold text-dark">2 Aug - 30 Aug</span></p>
                        </div>
                        <hr class="m-0">
                        <div class="d-flex align-items-center">
                            <img src="https://veirdo.in/cdn/shop/files/b_0119493a-9927-4550-8323-baefe5f625c0.jpg?v=1724147309"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Estimated delivery by <span
                                    class="font-weight-bold text-dark">tomorrow</span></p>
                        </div>
                        <hr class="m-0">
                        <div class="d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwqIMSS6cTq7wi1c08k5ZHrGiyQ0tepv1bfg&s"
                                alt="" style="width: 40px;">
                            <p class="m-0 p-0 ml-2 text-secondary" style="font-size: 14px;">Delivery between <span
                                    class="font-weight-bold text-dark">2 Aug - 30 Aug</span></p>
                        </div>
                        <hr class="m-0">
                    </div>
                    <div class="mt-4">
                        <p class="text-secondary m-0 p-0 font-weight-bold" style="font-size: 12px;">PRICE DETAILS
                            <span>(1 item)</span>
                        </p>
                        <div class="mt-2" style="font-size: 14px;">
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
                            <p class="font-weight-bold text-dark">Total Amount <span class="float-right">₹399</span></p>
                        </div>
                        <button class="btn btn-block font-weight-bold text-light mt-1 placeOrderBtn"
                            style="font-size: 14px; background-color: var(--color1);">CONTINUE</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bottomFooter position-relative text-center w-100 py-2 border-top mt-4" style="bottom: 0;">
                <a href="#" class="text-dark font-weight-" style="font-size: 14px;">Need Help? Contact us</a>
            </div>
        </section>
    </main>
    <script>

        const addressSidebar = document.getElementById("addressSidebar");

        function openAddressSidebar() {
            document.getElementById("addressSidebar").style.width = "360px";
            document.body.classList.add('sidebar-open');
        }

        function closeAddressSidebar() {
            document.getElementById("addressSidebar").style.width = "0";
            document.body.classList.remove('sidebar-open');
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

        const addressRemoveBtn = document.querySelectorAll('.addressRemoveBtn');
        const removeDialog = document.querySelector('.removeDialog');
        const closeRemoveDialogBtn = document.querySelectorAll('.closeRemoveDialogBtn')

        addressRemoveBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                removeDialog.showModal();
                document.body.classList.add('sidebar-open');
            })
        })

        closeRemoveDialogBtn.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                removeDialog.close();
                document.body.classList.remove('sidebar-open');
            })
        })
        
    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>