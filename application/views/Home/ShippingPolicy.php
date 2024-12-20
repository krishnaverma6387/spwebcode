<?php 
	$list = $this->db->get("shipping_policy")->row();
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
			<title><?= $list->shipping_title ?></title>
		<meta name="description" content="<?= $list->shipping_description?>">
		<meta name="keywords" content="<?= $list->shipping_keyword?>">
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
						<li class="breadcrumb-item active" aria-current="page">Shipping Policy</li>
					</ol>
				</div>
			</nav>
		</div> 
		
	
      <section class="pro-content login-content">
      <div class="container">
	  <?= $list->shipping_policy;?>
	    <!--h1>SHIPPING POLICY</h1>	
		<h2>FREE INBOUND SHIPPING LABELS</h2>
		<p class="text-justify">Whether you are selling your bags to FASHIONPHILE or need to return an item you purchased, we offer free insured domestic shipping within the continental U.S.. For direct purchase and consignment items, shipments sent from outside the continental U.S. such as Alaska or Hawaii must have a minimum of $1000 in quoted value to be eligible to print a free shipping label. You may choose to select either the free UPS or FedEx inbound label to ship your items to us, printed along with your Ship List once your quote submissions have been accepted by FASHIONPHILE. For returns, you can view your orders and select the item you wish to return from your <a href="#" class="text-info">account purchase history</a>.</p>
		<br>
		<p>We cannot provide shipping labels for P.O. Boxes, international addresses, APO/FPO/DPO addresses and select U.S. Territories such as Puerto Rico and Guam.</p>
		
		<h2>PROCESSING TIME</h2>
		<p class="text-justify">Generally, your purchase is shipped within 3-5 business days. We also provide an estimated delivery date during checkout!</p>
		<p class="text-justify">FASHIONPHILE is open Monday-Friday 7 AM - 5 PM (PT). If you place an order on a weekend, holiday, or outside of our normal business hours, the item will be prepared for shipment within the following 3-5 business days. FASHIONPHILE will attempt to accommodate special requests for shipping, however, it is the sole responsibility of the customer to understand our shipping procedures.</p>
		<p class="text-justify">If you place an order with expedited shipping before 11:00 AM (PT), your order will ship the same day; after 11:00 AM (PT), your order will ship the following business day.</p>
		<p class="text-justify">We review, verify and approve every order. Discrepancies between billing and shipping information may cause a delay. We may contact you, so please provide phone numbers for both billing and shipping.</p>
		<p class="text-justify">Please note that from time to time we may experience delays with shipping.</p>
		<h2>SATURDAYS & WEEKENDS</h2>
		<p class="text-justify">Saturday delivery is not included in the standard pricing for UPS. If you would like to request Saturday delivery, please call us and an additional UPS Saturday-delivery fee will be added to your shipping costs, if available.</p>
		<p class="text-justify">In regard to weekend delivery for orders placed with expedited shipping, a 2-Day order shipped on Thursday, will be delivered the following Monday. An Overnight order shipped on Friday will be delivered the following Monday (next business day).</p>
		<p class="text-justify">While deliveries may be scheduled for a specified arrival, we cannot guarantee delivery by any specific time. Delays may be caused by weather or mechanical issues and FASHIONPHILE is unable to refund shipping fees for these kinds of delays as they are out of our control.</p>
		<h2>ORDER CHANGES</h2>
		<p class="text-justify">We are not able to make any changes to the shipping once the tracking number has been created. If you need to upgrade your shipping prior to your order being shipped, please contact Client Services at (844).619.8902. </p>
		<h2>SIGNATURE REQUIRED</h2>
		<p class="text-justify">All orders are defaulted to ship with signature required due to the value of our items. To request shipping without a signature required for orders under $500, please waive the signature requirement. By waiving the signature, the buyer accepts the full financial responsibility for the item after the package leaves the FASHIONPHILE facility.</p>
		<p class="text-justify">For your convenience, we can ship your order to the nearest UPS Customer Center to be picked up by providing your tracking number and government issued ID.</p>
		<h2>SHIPPING TO NON-BILLING ADDRESS</h2>
		<p class="text-justify">In order to protect against fraud, we suggest all items be shipped to the billing address of the payment method. We do recognize that several exceptions to this may be requested (shipping to a neighbor, place of business, second home, gift, etc). While we can typically honor these requests, you must enter the contact information for the buyer and recipient, as we may need to phone-verify the order. This may result in a delay in processing time.</p>
		<h2>SHIPPING TO A BUSINESS</h2>
		<p class="text-justify">We will ship to your place of employment, after verification. If you choose to ship to a business, please provide the Company name and contact phone number.</p>
		<h2>COMBINING ORDERS</h2>
		<p class="text-justify"><span style="text-decoration: underline;">Ground & Express:</span> Two or more orders may be combined into a single shipment upon request and approval. If the items are located in different FASHIONPHILE locations, we will treat them as separate orders and ship separately. </p>
		<p class="text-justify"><span style="text-decoration: underline;">International:</span> Unfortunately, we are not able to combine international orders as each order requires an individual commercial invoice. </p>
		<h2>ORDERS WITH MULTIPLE ITEMS</h2>
		<p class="text-justify">If there is a multiple-item order and items are located at different FASHIONPHILE shipping locations, they may be shipped separately. There will be no increase in the shipping charge to you.</p>
		<br>
		<h2>INFORMATION FOR INTERNATIONAL BUYERS/SELLERS</h2>
		<h2>DESTINATION CUSTOMS IN YOUR COUNTRY</h2>
		<p class="text-justify">You, as the customer, are solely responsible for import taxes, customs duties and any other applicable fees imposed by the destination country, as well as compliance with any applicable laws and regulations. Please note that all items will be declared at full purchase price and indicated as "used" when shipped outside of the United States. We cannot declare any item as a “gift”.</p>
		<p class="text-justify">You, as the customer, must also be aware of any regulations that may prohibit the importation of your order. Some countries prohibit the importation of items made with exotic skins.</p>
		<h2>DESTINATION CUSTOMS IN THE UNITED STATES</h2>
		<p class="text-justify">When your previously owned (used) luxury items are shipped to FASHIONPHILE for consignment or buyouts, they are subject to inspection and possible fees/taxes.</p>
		<p class="text-justify">Please declare these items as used handbags or accessories, as applicable. Please note that U.S. Customs duties and taxes are based on a percentage of declared value and that they may assess a higher value after inspection.</p>
		<p class="text-justify">FASHIONPHILE's policy is to split any applicable U.S. Customs duties and taxes 50/50 with you. Once we receive the item, we will provide a scanned receipt of the completed tax payment to you and deduct 50% of the paid tax amount from your payment for your item.</p>
		<h2>INTERNATIONAL CURRENCY INFORMATION</h2>
		<p class="text-justify">All prices shown and the amount due reflected at checkout are represented in US Dollars and do not include import taxes, customs duties and any other applicable fees imposed by the destination country. We accept returns on international orders as further described in our <a href="<?= base_url('Home/ReturnPolicy') ?>" class="text-info">return policy</a>. For international shipments and all returns on items shipped internationally will be made in US Dollars only and in the same US Dollar amount that was paid to us at the time of order. We are unable to provide any currency exchange estimates as these rates constantly fluctuate. All transactions are subject to the exchange rate at the time of processing and are determined by the intermediary financial institutions. We make no adjustments for currency exchange on returns.</p-->
	 </div>
      </section>
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
	</body>
</html>																						