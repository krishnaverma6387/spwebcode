<?php 
	$benefits = $this->db->order_by('id','desc')->get("subscription_benefits")->result();	
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		
		<style>
			 body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        background-color: #8340a1;
      }

      .box-main {
        width: auto;
        height: 160px;
        background-color: white;
        border-radius: 0px 0px 20px 20px;
      }

      .box-main h1 {
        text-align: center;
        padding-top: 40px;
        font-size: 30px;
        font-family: "Montserrat-Regular", sans-serif;
      }

      .img-box {
        width: 160px;
        height: 160px;
        background-color: #8340a1;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
        top: -70px;
      }

      .img-box img {
        height: 130px;
        width: 130px;
        border-radius: 50%;
      }
      .invite img {
        height: 70px;
        width: 40%;
        border-radius: 20px;
      }

      .img-main-div {
        position: relative;
      }
      @media (max-width: 768px) {
        .box-main h1 {
          padding-left: 20px;
          font-size: 20px;
        }
        .invite img {
          height: 60px;
          width: 100%;
          border-radius: 20px;
        }
      }
      .text-area {
        margin-top: 80px;
      }
      .invite {
        margin-top: 40px;
      }

      .btn-center-card {
        position: absolute;
        top: -20px;
        left: 70px;
        z-index: 999;
      }

      @media (max-width: 768px) {
        .btn-center-card {
          position: absolute;
          left: 130px;
        }
      }

      .card-bg {
        background-color: #ffffff00;
        border: 1px solid navy;
        text-align: center;
      }

      .card-main-div {
        position: relative;
      }

      .basic {
        background: linear-gradient(to right, #849cb0, #8340a1);
        border: 1.5px solid #f2e1b4 !important;
        font-family: "Inter", sans-serif;
        color: white;
      }

      .plan {
        border: 1.5px solid #f2e1b4 !important;
        color: #ecebe4;
        border-radius: 10px;
        background: linear-gradient(to right, #849cb0, #8340a1);
        margin-top: -90px !important;
        font-size: 13px;
        padding: 10px;
        width: 80%;
        text-transform: uppercase;
        font-weight: bold;
      }

      .month {
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        color: white;
      }
      .net_price {
        font-family: Jakarta-Bold;
        font-weight: bold;
        font-size: 24px;
        text-align: center;
        color: white;
      }
      .offer {
        text-align: center;
        font-weight: bold;
        font-size: 15px;
        margin-top: -5px;
        color: white !important;
      }

      .card_box {
        border: 1.5px solid #f2e1b4 !important;
        border-radius: 12px;
        padding: 10px 0px 10px 0px;
        background: #8340a1 !important;
      }
      .buy_now {
        border: 1.5px solid #f2e1b4 !important;
        background: #8340a1;
        color: #ecebe4;
        border-radius: 10px;
      }
      .bg-primary {
        background-color: #8340a1 !important;
      }
      .choose {
        color: #f0ebf2 !important;
      }
      .content
      {
        color:white !important;
        font-weight:bold;
      }

      .clickable-row {
        cursor: pointer;
    }
		</style>
	</head>
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Club Memberships</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content">	
			 <div class="container-fluid">
    
    <!-- Your Current Club Membership Details -->
      <div class="row">
        <div class="col-sm-12 mt-3">
          <p class="text-center text-white fs-4" style="font-weight: bold">
            Your Current Club Membership Details
          </p>
        </div>
      </div>

      <!-- end here  -->
    <div class="card mb-4 mt-4" style="background:#8340a1;border:1px solid gray;box-shadow:0px 0px 0px 1px">
      <div class="container">
        <div class="row">
            <div class="col-sm-6 col-12 mt-2 mb-4">
                <div class="row">
                    <div class="col-sm-12 col-12 d-flex justify-content-center">
                        <button class="btn mt-2 text-white border-white fs-5" style="border-radius: 50px;background: linear-gradient(to right, #42e393, #317be8);">
                            Membership Duration: 3 Months
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-6 text-center">
                        <p class="text-white mt-2 mb-0">Membership Start Date :</p>
                        <h6 class="text-white">08-01-2024</h6>
                    </div>
                    <div class="col-sm-6 col-6 text-center">
                        <p class="text-white mt-2 mb-0">Membership End Date :</p>
                        <h6 class="text-white">06-04-2024</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 mt-2 mb-4">
                <!-- <div class="col-sm-12"> -->
                    <div
                      class="card"
                      style="
                        background: #8340a1;
                        color: white;
                        font-weight: 700;
                        font-family: Montserrat-Regular, sans-serif;
                        border: 1px solid rgb(245, 212, 212);
                      "
                    >
                      <div class="row">
                        <div class="col-sm-1 col-1 text-center fs-5 mt-4"></div>
                        <div class="col-sm-7 col-7">
                          <p class="mt-3 text-whte">
                            Total Savings during this Club Membership:
                          </p>
                        </div>
                        <div class="col-sm-4 col-4">
                          <p class="mt-4 text-whte">₹396.22</p>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- </div> -->
        </div>

        <div class="row">
          <div class="col-sm-4 col-4">
            <p class="text-dark content">
              Product Discount <i class="bi bi-arrow-right text-bold"></i>
            </p>
          </div>
          <div class="col-sm-2 col-2">
            <p class="text-dark content">: ₹66</p>
          </div>
          <div class="col-sm-4 col-4">
            <p class="text-dark content">
              Coupon Savings <i class="bi bi-arrow-right text-bold"></i>
            </p>
          </div>
          <div class="col-sm-2 col-2">
            <p class="text-dark content">: ₹66</p>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="text-dark">
                <hr style="border:1px solid black">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Your Previous Club Membership Details -->
    <div class="row">
        <div class="col-sm-12 mt-3">
          <p class="text-center text-white fs-4" style="font-weight: bold">
            Your Previous Club Membership Details
          </p>
        </div>
      </div>

      <!-- end here  -->

    <div class="card mb-4 mt-4" style="background:#8340a1;border:1px solid gray;box-shadow:0px 0px 0px 1px">
      <div class="container">
        <div class="row">
            <div class="col-sm-6 col-12 mt-2 mb-4">
                <div class="row">
                    <div class="col-sm-12 col-12 d-flex justify-content-center">
                        <button class="btn mt-2 text-white border-white fs-5" style="border-radius: 50px;background: linear-gradient(to right, #42e393, #317be8);">
                            Membership Duration: 3 Months
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-6 text-center">
                        <p class="text-white mt-2 mb-0">Membership Start Date :</p>
                        <h6 class="text-white">18-09-2023</h6>
                    </div>
                    <div class="col-sm-6 col-6 text-center">
                        <p class="text-white mt-2 mb-0">Membership End Date :</p>
                        <h6 class="text-white">16-12-2023</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 mt-2 mb-4">
                <!-- <div class="col-sm-12"> -->
                    <div
                      class="card"
                      style="
                        background: #8340a1;
                        color: white;
                        font-weight: 700;
                        font-family: Montserrat-Regular, sans-serif;
                        border: 1px solid rgb(245, 212, 212);
                      "
                    >
                      <div class="row">
                        <div class="col-sm-1 col-1 text-center fs-5 mt-4"></div>
                        <div class="col-sm-7 col-7">
                          <p class="mt-3">
                            Total Savings during this Club Membership:
                          </p>
                        </div>
                        <div class="col-sm-4 col-4">
                          <p class="mt-4">₹1262.22</p>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- </div> -->
        </div>

        <div class="row">
          <div class="col-sm-4 col-4">
            <p class="text-dark content">
              Product Discount <i class="bi bi-arrow-right text-bold"></i>
            </p>
          </div>
          <div class="col-sm-2 col-2">
            <p class="text-dark content">: ₹66</p>
          </div>
          <div class="col-sm-4 col-4">
            <p class="text-dark content">
              Coupon Savings <i class="bi bi-arrow-right text-bold"></i>
            </p>
          </div>
          <div class="col-sm-2 col-2">
            <p class="text-dark content">: ₹66</p>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="text-dark">
                <hr style="border:1px solid black">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
		</section>
		
		
		
		
		
		
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		
		
		<!-- JavaScript to open modal on card body click -->
		<script>
			$(document).ready(function() {
				$('.card-text').click(function() {
					$('#exampleModal').modal('show');
					$('body').addClass('modal-open-with-blur');
				});
				
			});
			
			
			$(document).on('click','.close_btn',function(){
							$('#exampleModal').modal('hide');
						});
			
			 $('#exampleModal').on('shown.bs.modal', function () {
        $('body').addClass('modal-open-with-blur');
    });

    // When the modal is hidden, remove the class to remove the blur
    $('#exampleModal').on('hidden.bs.modal', function () {
        $('body').removeClass('modal-open-with-blur');
    });
		</script>
	</body>
</html>																																																																																																																																												