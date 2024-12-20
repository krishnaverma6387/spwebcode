<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Login </title>
    <?php include('include/cssLinks.php'); ?>
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
            background-image: linear-gradient(127deg, #feedf4 0%, #fcf0e3 100%);
        }

        ul {
            list-style-type: none;
        }

        input {
            font-family: 'Inter', sans-serif;
        }

        img {
            width: 100%;
        }

        .loginContainer{
            margin-top: 28px;
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
            background-color: var(--color1);
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
        
        .youtube-embed-container {
            position: relative;
            width: 800px;
            height: 400px;
        }

        .youtube-embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .youtube-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        .ytp-chrome-top-buttons {
            display: none !important;
        }

        .ytp-title-channel {
            display: none !important;
        }

        .ytp-title {
            display: none !important;
        }

        @media (width< 568px) {
            body{
                background-image: none;
            }

            .loginContainer{
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
<?php include('include/header.php'); ?>
    <main>
        <!-- 30 second redirect popup -->
        <div class="text-center mb-2">
            <p class="mb-0 text-dark d-inline px-2 py-1 rounded-bottom shadow-sm" style="background-color: #FFFAE8; font-size: 12px" ><i class="fa-regular fa-circle-xmark mr-1 text-danger"></i>Sorry your account is temporarily disabled for 00:30 min</p>
        </div>
        <div class="loginContainer bg-white mx-auto my-lg-4 my-md-2 position-relative" style="max-width: 400px;">
            <a href="#" class="text-dark position-absolute" style="top: 12px; left: 14px;"><i class="fa-solid fa-arrow-left-long"></i></a>
            <div>
                <img src="<?=base_url('assets/new_website/img/login-cover.jpg')?>" alt="">
            </div>
            <div class="px-4 py-3">
                <h1 class="mb-2" style="font-size: 20px; color: gray; font-family: 'League Spartan', sans-serif;">
                    <span style="font-size: 24px; color: black;;">Login</span> or <span
                        style="font-size: 24px; color: black;;">Signup</span>
                </h1>
                <p class="mb-1" style="font-size: 12px; color: var(--color1);">Please enter your mobile number and verify with OTP</p>
                <form id="loginForm">
                    <div class="inputGroup">
                        
                        <div class="inputFieldContainer container1">
                            <span>+91 | </span>
                            <input type="number" class="numberInput" id="number" oninput="this.value = this.value.slice(0, 10);" placeholder="Enter Mobile Number*">
                        </div>
                        <p class="m-0 p-0 errorMsg text-danger"><i class="fa-solid fa-triangle-exclamation mr-1"></i>Please enter a valid mobile number</p>
                    </div>
                    <div class="d-flex align-items-center mb-4"
                        style="gap: 4px;font-size: 12px;font-weight: 500; color: var(--color1);">
                        <input type="checkbox" id="tandc">
                        <label class="m-0" for="tandc">I ACCEPT TERMS AND CONDITIONS</label>
                    </div>
                    <p class="mb-2" style="font-size: 12px;">By continuing, I agree to the <a href="#"
                            style="color: var(--color1); font-weight: 600;">Terms of Use</a>
                        and <a href="#" style="color: var(--color1); font-weight: 600;">Privacy Policy</a></p>
                    <button type="submit" class="loginBtn">LOGIN</button>
                    <p class="text-center" style="font-size: 14px; color: gray;">Login via <a href="./loginEmail.html"
                            style="color: var(--color1); font-weight: 600;">Email</a>
                    </p>
                    <p class="text-center mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                            href="mailto:me@example.com?subject=Me&body=HELP!!!"
                            style=" color: var(--color1); font-weight: 600;">Get Help</a></p>
                </form>
            </div>
        </div>
    </main>
    <script>
        const number = document.getElementById('number')
        const loginForm = document.getElementById('loginForm')
        const errorMsg = document.querySelector('.errorMsg')

        document.querySelector('.numberInput').addEventListener('focus', function () {
            document.querySelector('.container1').style.borderColor = 'var(--color1)'
        })

        document.querySelector('.numberInput').addEventListener('blur', function () {
            document.querySelector('.container1').style.borderColor = '#d4d5d9'
        })

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault()
            if(number.value == 0000000000){
                errorMsg.style.display = 'block'
                document.querySelector('.container1').style.borderColor = 'red'
            }else{
                errorMsg.style.display = 'none'
                document.querySelector('.container1').style.borderColor = '#d4d5d9'
            }
        })

        number.addEventListener('input', () => {
            errorMsg.style.display = 'none'
            number.style.borderColor = '#d4d5d9'
        })

    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>