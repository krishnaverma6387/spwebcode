<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Verify </title>
    <?php include('include/cssLinks.php'); ?>
    <style>
        :root {
            --color1: #8340A1;
            --color2: #e83e8c;
            --color3: #068FFF;
            --color4: rgb(243 244 246);
        }

        body{
            background-image: linear-gradient(127deg, #feedf4 0%, #fcf0e3 100%);
        }

        .redirectDialogContainer {
            height: 100%;
            width: 100%;
            z-index: 100000;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .redirectDialog {
            background-color: white;
            padding: 16px;
            border-radius: 4px;
            text-align: center;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
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
            border: 1px solid var(--color1);
        }

        .verifyBtn {
            font-family: 'League Spartan', sans-serif;
            font-size: 16px;
            width: 100%;
            background-color: var(--color1);
            padding: 8px 16px;
            border-radius: 4px;
            color: white;
            margin-top: 16px;
        }

        .resendBtn{
            background:transparent;
            border:none;
            font-family: 'League Spartan', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: var(--color2);
        }

        @media (width < 568px) {
            body{
                background-image: none;
            }
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="d-flex align-items-center">
        <div class="redirectDialogContainer">
            <div class="redirectDialog">
                <img src="<?=base_url('assets/new_website/img/loader.gif')?>" style="width: 80px;" alt="">
                <p class="font-weight-bold">Please wait</p>
                <p>It will take some time</p>
            </div>
        </div>
        <div class="bg-white p-4 mx-auto rounded-lg mt-sm-2 mt-md-4 mt-lg-4 mt-0">
            <!-- <a class="d-block mb-4" href="loginEmail.html">
                <i class="fa-solid fa-arrow-left"></i>
            </a> -->
            <img src="<?=base_url('assets/new_website/img/otpVerify.png')?>" class="mb-3" style="width: 80px;" alt="">
            <h1 class="my-2"
                style="font-size: 24px; color: black;font-family: 'League Spartan', sans-serif; font-weight: 600;">
                Verify with OTP
            </h1>
            <p class="mb-1" style="font-size: 14px; color: gray;">Enter the OTP sent to your mobile number/email</p>
            <p class="mb-2 text-dark" style="font-size: 16px;font-weight: 600;">+91 9876543210</p>
            <form id="otpForm" onsubmit="onFormSubmit(event)">
                <div class="inputs" id="inputs">
                    <input type="number" inputmode="numeric" class="otpField otpField1">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                    <input type="number" inputmode="numeric" class="otpField">
                </div>
                <!-- <p class="text-danger" id="otpErrorMsg" style="font-size: 12px;display: block;"><i
                        class="fa-solid fa-triangle-exclamation mr-1"></i>The
                    OTP does not match</p> -->
                <!-- <button class="resendBtn">RESEND
                    OTP</button> -->
                <p class="mb-2" style="color: gray; font-size: 14px;">Resend OTP in <span id="time">00:00</span></p>
                <p style="color: gray; font-size: 14px;">Login using 
                    <span class="font-weight-bold" style="color: var(--color2);">Email</span>
                    <!-- <span class="font-weight-bold" style="color: var(--color2);">Number</span> -->
                </p>
                <p class="text-center mb-0" style="font-size: 12px; color: gray;">Having Trouble? <a
                        href="mailto:me@example.com?subject=Me&body=HELP!!!"
                        style="color: var(--color1); font-weight: 600;">Get Help</a></p>
            </form>
        </div>
    </main>
    <script>
        const inputs = document.getElementById("inputs");
        const otpFields = document.querySelectorAll(".otpField");
        const otpForm = document.getElementById("otpForm");

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
    </script>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>