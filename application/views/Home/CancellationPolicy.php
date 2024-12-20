<?php 
$list = $this->db->get("cancellation_policy")->row();	
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $list->cancellation_title?></title>
		<meta name="description" content="<?= $list->cancellation_description?>">
		<meta name="keywords" content="<?= $list->cancellation_keyword?>">
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
				@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
			}
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
						<li class="breadcrumb-item active" aria-current="page">Cancellation Policy</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 mx-auto">
						<center><img src="https://cdn.shopify.com/s/files/1/2337/7003/files/New_Project_12_256x256_crop_center.png?v=1624868361"></center>
						<!--<h2 class="text-center mt-2 pageheading">ORDER CANCELLATION POLICY</h2>-->
					</div>  
				</div> 
				<p class="text-justify"><?= $list->cancellation_policy;?></p>
				<!--<h2 class="text-center pageheading">HOW TO REQUEST FOR AN ORDER CANCELLATION?</h2>
				<p class="text-justify">To request for an order cancellation please email us the order # with product name, original proof of purchase receipt and issue at customercare@SlickPattern.pk and our customer care agent will get in contact with you. Alternatively you can call us on +92 316 7776158 from Monday to Saturday between 10:00 am - 6:00 pm (Pakistan Standard Time). Further, to proceed with the case, your purchase should be sent back to us within 14 days of receiving your order.</p>-->
				
				<div class="row">
					<div class="col-sm-6 mx-auto">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12  col-sm-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" placeholder="Order Number">
									</div>
								</div>   
								<div class="col-md-12 col-sm-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" placeholder="Email">
									</div>
								</div>   
							</div>	 
						</div>
						<div class="form-group">
							<input type="text" name="product_name" class="form-control form-control-lg" placeholder="Product Name">	 
						</div>
						<div class="form-group">
							<select class="form-control form-control-lg">
								<option value="selected disabled">Request of refund</option>  
							</select> 
						</div>
						<div class="form-group mr-5 ml-5">
							<p class="text-center"><button class="btn btn-secondary btn-block">Send</button></p>	 
						</div>
					</div>  
				</div>
				<br>
				<?= $list->cancellation_policy2;?>
				<!--h2 class="text-center pageheading">ELIGIBILITY CRITERIA FOR ORDER CANCELLATION</h2>
				<p class="text-justify">Same Day Delivery : In case your order is “same day delivery” then order can be cancelled within 30 minutes of order confirmation. After 30 minutes a cancellation request can be generated from the customer's end, but the approval of the cancellation request depends upon SlickPattern’s policy regarding brand/vendor/seller/distributor, shipment company delivery timelines and the nature of the item shipped.
				</p>
				<p class="text-justify">Unpaid COD Order : If it's an unpaid COD order and the customer asks for the cancellation of the order, the order will be cancelled without any questions asked before the order has been shipped out of the SlickPattern warehouse.</p>
				<p class="text-justify">Paid orders : can be cancelled for any reason, if reported within 48 hours of the order confirmation.</p>
				<p class="text-justify">Paid Ready to ship : If cancellation is requested within 48 hours of order confirmation then the complete amount will be refunded without any question.</p>
				<p class="text-justify">Paid Made to order : If cancellation is requested for paid made-to-order after 48 hours of order confirmation, SlickPattern holds the right to charge 25% of the order value as cost of labor, production and resources payable to partner brands. If you wish to file for cancellation of your order, once the order has completed the production phase or is in the final phases of production and/or is received in our warehouse, SlickPattern will deduct 50% of your paid amount as cost of production, labor, and resources.</p>
				<p class="text-justify">Order Delay by Brand : In the event of delay in delivery from the designers end and the customer has been pre-informed of the delay by the SlickPattern team either through sms, email or SlickPattern’s /designer’s social media channels then the customer has the option to inform and get their order cancelled within 24-48 hours time frame.</p>
				<p class="text-justify"></p>
				
				<h2 class="text-center pageheading">NON ELIGIBILITY CRITERIA FOR ORDER CANCELLATION</h2>
				<p class="text-justify">SlickPattern holds the right to charge cancellation fees if cancellations are reported after 48 hours.</p>
				<ul>
					<li>In case you want to cancel your Customized/made-to-order outfit out of serious and genuine circumstances after this time period since your purchase then SlickPattern holds the right to deduct 25% of total purchase as a fee for cost of production, labor, and machinery paid to designer and partner brands.</li>
					<li>SlickPattern holds the right to charge 10-15% fee of the total amount of the article in case ‘change of mind’ is given as reason for cancellation for a made to order outfit.</li>
					<li>In case bank deposit is chosen as an option for payment, then the customer needs to clear the pending balance amount within 7 business days or else their order will be automatically cancelled.</li>
					<li>Once the order is “Received at SlickPattern Warehouse” and 50% of the amount is paid by the customer against their order, SlickPattern will call the customer and notify them to clear their balance payment within 72 hours of time. If a customer fails to pay the balance amount within the above given time frame, SlickPattern has the right to hold his inventory for a particular time. After that SlickPattern holds the right to cancel the order and ship it back to the brand.</li>
					<li>Product pictures in case of made to order products are only shared with the customer for quality assurance purposes and SlickPattern will only cater to alterations requested by the customer at this point. The customer can’t cancel the order at this point or ask for a refund or replacement since this is a custom made product and is already made and delivered to us from the brand against your order number.</li>
					<li>SlickPattern always notify customers via email in case there is a change in delivery date from the brand's/designer’s/vendor’s end. SlickPattern holds no responsibility with production capacity/speed of brand’s/designer’s/vendor’s, therefore once email is sent as notification to client, request for cancellation can be requested within 48 hours of email notification receiving or through any of our social media channels.</li>
				</ul>
				<br>
				<h2 class="text-center pageheading">FOR ASSISTANCE</h2>
			    <div class="text-center">
					<span><a href="tel: 0987654321">CALL : +910987654321</span>	<span class="fa fa-pipe"></span> <span><a href="mailto: slickpattern@gmail.com">EMAIL : slickpattern@gmail.com</span>
					</div-->
					</div>
				</section>
				
				
				
				
				
				
				<?php include('include/footer.php'); ?>
				
				
				
				<?php include('include/jsLinks.php'); ?>
				
			</body>
		</html>																								
