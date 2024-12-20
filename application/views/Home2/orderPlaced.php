<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Slick Pattern - Order Placed </title>
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
            background-image: linear-gradient(127deg, #feedf4 0%, #fcf0e3 100%);
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100dvh;
        }

        .fs20{
            font-size: 20px;
        }

        .continueBtn{
            background-color: var(--color1);
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 600;
        }

        .continueBtn:hover{
            background-color: var(--color2);
            color: white;
        }
        
    </style>
    <main>
        <div class="bg-white rounded-lg p-4 text-center" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
            <img src="<?=base_url('assets/new_website/img/orderPlaced.png') ?>" style="width: 160px;" alt="orderPlaced">
            <p class="font-weight-bold m-0 mt-3 fs20">Your order has been placed</p>
            <p class="text-secondary">Thank you...</p>
            <a href="<?= base_url('Home') ?>" class="btn mt-2 continueBtn">Continue Shopping</a>
        </div>
    </main>
    <!-- <?php include('include/modal.php'); ?> -->
    <?php include('include/jsLinks.php'); ?>
</body>

</html>