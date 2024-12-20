<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="UTF-8">
  <title>Slick Pattern&nbsp;&minus;&nbsp;Home</title>
  <?php include('include/cssLinks.php'); ?>
  <style>
    .css-37opj5 {
      position: relative;
      background: url(<?= base_url('uploads/appdownload/' . $details['page_bg_img']) ?>) center center / cover no-repeat !important;
      width: 100%;
      aspect-ratio: 1 / 1;
      z-index: -2;
      overflow: hidden;
    }

    /*.css-1bd2yxk {
      position: relative;
      background: url(<?= base_url('uploads/appdownload/' . $details['page_bg_img']) ?>) no-repeat center center !important;
      width: 100%;
      z-index: -2;
      min-height: 360px;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      background-size: cover;
      overflow: hidden;
    }*/
  </style>
</head>

<body>
  <!-- Header Section Start -->
  <?php include('include/header.php'); ?>
  <!-- Header Section End -->

  <!-- desktop -->
  <div class="css-12k99am">
    <div class="css-1bd2yxk">
      <div class="css-1fyxncj">
        <img src="https://images-static.nykaa.com/uploads/99b73913-605d-4b69-a1ec-2b9c64fb1815.png" class="css-rk4n8s">
        <div class="css-19j27pm">Slick Pattern Fashion </div>
        <div class="css-1o2fb6c">Your perfect styling partner</div>
        <div class="css-1ahygpo">Download the Slick Pattern App for the best fashion products and online offers!</div>
        <div class="css-0">
          <div class="css-ndhooj">Scan QR code to download app</div><img src="<?= base_url('uploads/brand/getapp_1704892632.png')?>" class="css-1tat7nt">
        </div>
        <div class="css-0">
          <div class="css-ndhooj">Available on</div><img src="https://images-static.nykaa.com/uploads/841bc1b3-c664-4fe7-b537-e66813b70d36.png" class="css-oslloj"><img src="https://images-static.nykaa.com/uploads/02acb21d-fbb3-4bf1-97c7-95661a769979.png" class="css-oslloj">
        </div><img src="https://images-static.nykaa.com/uploads/6d421ced-71d5-4d9e-a6e8-f5085510b64d.gif" class="css-zkfj91">
      </div>
    </div>
  </div>
  <!-- mobile -->
  <div class="css-9msay7">
    <div class="css-37opj5"><img src="https://images-static.nykaa.com/uploads/99b73913-605d-4b69-a1ec-2b9c64fb1815.png" class="css-ltq7zx">
      <div class="css-qw8m1r">
        <!-- <div class="css-x0ez6e">Slick Pattern Fashion</div>
        <div class="css-7m1ebt">Your perfect styling partner</div> -->
        <?= $details['phone_text']?>
      </div>
    </div>
    <div class="css-1otbdh5">
      <div class="css-1t940od"></div><img src="https://images-static.nykaa.com/uploads/6d421ced-71d5-4d9e-a6e8-f5085510b64d.gif" class="css-xcdytv">
      <div class="css-1t940od"></div>
      <!-- <div class="css-1o2ail2">Download the Slick Pattern App for the best fashion products and online offers!</div> -->
      <div class="css-1o2ail2"><?= $details['phone_app_text']?></div>
      <div class="css-1t940od"></div><a href="#" class="css-obyp8z">Get
        App</a>
    </div>
  </div>

  <?php include('include/footer.php'); ?>
  <?php include('include/jsLinks.php'); ?>
</body>

</html>