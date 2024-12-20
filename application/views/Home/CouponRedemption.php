
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<?php 
    $cpn_red = $this->db->get("tbl_couponredemption")->row();
    ?>
	<head>
		<meta charset="UTF-8">
		<title><?= $cpn_red->coupon_title?></title>
		<meta name="description" content="<?= $cpn_red->coupon_description?>">
		<meta name="keywords" content="<?= $cpn_red->coupon_keyword?>">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
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
						<li class="breadcrumb-item active" aria-current="page">Coupon Redemption</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
			<?= $cpn_red->coupon_redemption;?>
				<!--h1 class="pageheading">Coupon Redemption:</h1>
				<h2>a. How do I use my coupon?</h2>
				<p class="text-justify">It’s as simple as snow! Add the products to your ‘Bag’. Make sure that the products that you add are eligible for the offer. To find that out, select the product, and just below the price, you will be able to see the coupons that can be applied on that product. Once they’re all added to ‘Bag’, click on ‘Apply Coupon’ on the right hand top corner of the page.</p>
				
				<h2>b. Why am I unable to apply coupon on products in my bag?</h2>
				<p class="text-justify">Ouch! This might explain why. Coupons are applicable only on selected merchandise. To find out whether the coupon is applicable on your shortlisted products or not:</p>
				<ul style="list-style-type: roman;">
					<li>Select a product.</li>	
					<li>You will be able to see the list of offers applicable on the product along with Coupon code, discount amount, and minimum purchase to avail the discount</li>	
					<li>If you want to view the list of products on which a particular coupon code is applicable, you may click on 'View All Products' link as shown below.</li>	
				</ul>
				
				<div class="row my-3">
					<div class="col-sm-12">Imgage Section</div>	
				</div>
				
				<h2>c. Why am I not getting the complete discount as mentioned in the offer?</h2>
				<p class="text-justify">Yes you are! Here’s how. For every coupon, there is a limit on the maximum discount that can be availed. That means, existing discount on the product, plus the coupon discount should be equal to or less than the maximum discount applicable.</p>
				<div class="text-center">
					<h4> <span class="badge badge-light">30 DAY RETURNS*</span></h4>
					<h4><span class="badge badge-light">100% HANDPICKED</span></h4>	
					<h4><span class="badge badge-light">ASSURED QUALITY</span></h4>	
				</div-->
				
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						