<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="UTF-8">
  <title>Slick Pattern - Contact Us Page</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('include/cssLinks.php') ?>
  <style>
  .pro-socials ul li a {
    color: black !important;
  }

  .slide-toggle {
    display: none !important;
  }

  .contactSection {
    margin-top: 100px;
  }

  /* mobile */
  @media only screen and (max-width: 991px) {
    .contactSection {
      margin-top: 0;
    }
  }
  </style>
</head>

<body>

  <?php include('include/header.php') ?>
  <div class="container-fuild">
    <nav aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us </li>
        </ol>
      </div>
    </nav>
  </div>


  <section class="contactSection">
    <section class="pro-content contact-content">
      <div class="container">
        <div class="row">
          <div class="pro-heading-title">
            <h1>
              Contact
            </h1>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-lg-9">
            <p>If you have any querry or problem then fill free to contact us!</p>
            <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>"
              method="post" enctype="multipart/form-data">
              <div class="form-group row">

                <div class="col-sm-6">
                  <input type="text" name="name" required class="form-control form-control-lg" placeholder="Name">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="email" required class="form-control form-control-lg" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">

                <div class="col-sm-6">
                  <input type="text" name="phone" required class="form-control form-control-lg" placeholder="Phone">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="subject" required class="form-control form-control-lg" placeholder="Subject">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <textarea class="form-control from-control-lg" required name="msg" placeholder="Message" rows="5"
                    cols="56"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-secondary"> Submit </button>
            </form>
          </div>
          <?php
          $list = $this->db->get("contact_address")->row();
          ?>
          <div class="col-12 col-lg-3">
            <ul class="contact-info pl-0 mb-0">

              <li> <i class="fas fa-map-marker "
                  style="color: #8340A1"></i><span><?= !empty($list->location) ? $list->location : '' ?></span> </li>
              <li> <i class="fas fa-envelope "
                  style="color: #8340A1"></i><span><?= !empty($list->address) ? $list->address : '' ?></span></li>
              <li> <i class="fas fa-mobile-alt "
                  style="color: #8340A1"></i><span><?= !empty($list->mobile) ? $list->mobile : '' ?></span> </li>

            </ul>
            <div class="pro-socials d-none">
              <h4>
                Follow Us
              </h4>
              <ul>
                <li><a href="#" class="fab fb fa-facebook-square text-dark"></a></li>
                <li><a href="#" class="fab tw fa-youtube"></a></li>
                <li><a href="#" class="fab ig fa-instagram"></a></li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </section>
  </section>

  <?php include('include/footer.php'); ?>
  <?php include('include/jsLinks.php'); ?>

</body>

</html>