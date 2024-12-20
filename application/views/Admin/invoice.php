<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Invoice</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			body {
            overflow-x: hidden;
            font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
			background: #FFF ;
			margin:auto;
			height:297mm;
			width:220mm;
			}
			
			.signature {
            font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            color: #0099D5;
			}
			
			.table thead th {
            vertical-align: bottom;
            <!-- border-bottom: 2px solid transparent; -->
            <!-- background: #0099D5; -->
            <!-- color: #fff; -->
            padding: 6px;
            font-size: 17.5px;
			}
			
			.table tbody td {
            padding: 2px 8px;
			}
			.table-bordered>:not(caption)>* {
			border-width: 1px 1px;
			}
			
			.font-weight-lighter {
            font-weight: bolder;
            <!-- background: #0099D5; -->
            <!-- color: #fff; -->
            /* font-size: 18px; */
			}
			
			.inv {
			<!-- border-top:1rem solid #e38c8c; -->
			<!-- border-bottom:1rem solid #e38c8c; -->
            <!-- background: #E6E4E7; -->
			padding-top:3rem;
			}
			.table, .table-hover tbody tr:hover {
			color: #0c0c0c !important;
			}
			
			.my-3 {
            margin-bottom: 1rem !important;
            margin-top: 1rem !important;
			}
			
			.my-5 {
            margin-bottom: 3rem !important;
            margin-top: 3rem !important;
			}
			
			.py-5 {
            padding-bottom: 3rem !important;
            padding-top: 3rem !important;
			}
			
			.px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
			}
			
			.border-bottom {
            border-bottom: 2px solid #000 !important;
            /*width: 35%;*/
            padding: 0px 0px 5px 0px;
			}
			
			@media print {
            .printInvoice{
			display: none;
            }
			html body{
			background:white;
			}
			}
			#logo_img{
			text-align: center;
			}
			#invoiceid{
			<!-- flex-wrap: nowrap; -->
			}
			.border_sp{
			padding-bottom:8px;
			border-bottom:1px solid gray;
			}
		</style>
	</head>
	<body>
		<?php 
			if(!empty($orders)){
				foreach($orders as $order)
				$uid =  $order['userid'];
				$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
			?>
			<div class="container inv " id="pdf" style="background:white; color:black !important; ">
				<div class="row" >
					<div class="col-sm-8 py-1 px-3">
						<p class="mb-2"><a href="base_url()">www.slickpattern.com</a></p>
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-6">
								<p class="font-weight-bold mb-0">Shipping Address</p>
								<p class="mb-0"><?=$uDetails->name; ?></p>
								<?php 
									$address=json_decode($order['address']);  
								?>
								<p class="mb-0"><?=$address->line1?>&nbsp;<?=$address->city?>&nbsp;<?= $address->state?>&nbsp;<?= $address->pincode?></p>
								<p class="mb-0"><?= $address->mobile ?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h1 class="font-weight-lighter pb-0">INVOICE</h1>
						<div class="mb-0">
							<img alt="testing" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?= urlencode($order['orderid']);?>&choe=UTF-8" />
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-sm-7">
						<p class="mb-0 mt-2"><b>GST NO:<span></span></b><?= $order['orderid']?></p>     
						<p class="mb-0"><b><span>Place Of Supply: </span></b><?= $address->state?></p> 
						<p class="mb-0"><b><span>Shipment ID: </span></b><?= $order['pay_mode']?></p>
						<p class="mb-0"><b><span>Order No: </span></b><?=  $order['orderid']?></p>
					</div>
					<div class="col-sm-5">
						<p class="mb-0 mt-2"><b><span>Invoice No:</span></b><?php echo 'INV'.strtotime(date('d-m-Y h:i:s')); ?></p>
						<p class="mb-0"><b><span>Invoice Date: </span></b><?= date('d-m-Y')?></p>
						<p class="mb-0"><b><span>Order Date: </span></b><?= date('d-m-Y',strtotime($order['created_at']))?></p>
						<p class="mb-0"><b><span>Payment Mode: </span></b><?= $order['pay_mode']?></p>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-sm-12">
						<p class="mb-0 mt-0"><b>Sold By:</b><span>Digital age retail pvt ltd plot no</span>
							<p class="mb-0 mt-0"><b>Dispatch From:</b><span>Digital age retail pvt ltd plot no</span>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered text-center">
									<thead>
										<tr>
											<th scope="col">Item Name</th>
											<th scope="col">QTY</th>
											<th scope="col">UNIT PRICE</th>
											<th scope="col">TAX RATE</th>
											<th scope="col">TAX AMT</th>
											<th scope="col">TOTAL</th>
										</tr>  
									</thead>
									<tbody>
										<!--individual product orders-->
										<?php
											$count=0;
											$id=$order['orderid'];
											$totalIndividualPrice=0;
											$totalIndividualClubCash=0;
											$totalIndividualNormolPrice=0;
											$totalIndividualMrp=0;
											$totalIndividualGst=0;
											if(!empty($cart)){ 
												foreach($cart as $each)
												{		
													if($each->is_combo==''){
														$product = $this->db->get_where('products',array('id'=>$each->product_id));
														if($product->num_rows()>0)
														{
															$product = $product->row();
															$cartprice = $this->db->get_where('products',array('id'=>$each->product_id))->row();
															$total=$each->price;
															$totalMrp = (int)$cartprice->mrp*$each->qty;
															$totalDiscount=(int)(($totalMrp-$total)/$totalMrp)*100;
															$totalIndividualPrice+=(int)$total;
															$totalIndividualMrp+=(int)$totalMrp;
															$totalIndividualClubCash+=(int)$cartprice->royal_clubcash*$each->qty;
															$totalIndividualNormolPrice+=(int)$cartprice->reg_sell_price*$each->qty; 
															$totalIndividualGst+=(int)$cartprice->gst*$each->qty;
														?>
														<tr>
															<td style="text-align:start;">
																<p class="mb-0"><?= $product->title; ?></p>
																<p class="mb-0"><b>HSN Code:</b><?= $product->hsn; ?></p>
															</td>
															<td><?= $each->qty ?></td>
															<td><?= $product->mrp?></td>
															<td>CGST(<?= $product->cgst?>%)<br>SGST(<?= $product->sgst?>%)</td>
															<td><?php echo $product->gst; ?></td>
															<td>
																<?php 
																	echo $totalMrp;
																?>
															</td>
														</tr>
														<?php
														}
													}
												}
											}
										?>
										
										<!--combo product orders-->
										<?php
											$count=0;
											$id=$order['orderid'];
											$totalComboPrice=0;
											$totalComboMrp=0;
											$totalComboClubCash=0;
											$totalComboNormolPrice=0;
											
											if(!empty($cart)){
												foreach($cart as $each)
												{	
													if($each->is_combo=='true'){
														$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
														if($product->num_rows()>0)
														{	
															$product = $product->row();
															$id = $order['userid'];
															$cartprice = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row();
															$$total=$each->price;
															$totalMrp=(int)$cartprice->price*$each->qty; 
															$totalDiscount=(int)(($totalMrp-$total)/$totalMrp)*100;
															$totalComboPrice+=(int)$total;
															$totalComboMrp+=(int)$totalMrp;
															$totalComboNormolPrice=(int)$cartprice->discount_price; 
															$totalComboClubCash=(int)0;	
														?>
														<tr>
															<td style="text-align:start;">
																<p class="mb-0"><?= $product->name; ?></p>
															</td>
															<td><?= $each->qty ?></td>
															<td>  
																<?= $product->price?> 
															</td>
															<td></td>
															<td></td>
															<td>
																<?php 
																	echo $totalMrp;
																?>
															</td>
														</tr>
														<?php
														}
													}
												}
											}
										?>
										
										<tr>
											<td colspan="5" style="text-align:end;"><b>Subtotal</b></td>
											<td><b>
												<?php 
													$subtotal=$totalIndividualMrp+$totalComboMrp;
													echo "&nbsp; &#8377;".$subtotal;
												?>
											</b></td>
										</tr>
										<tr>
											<td colspan="5" style="text-align:end;"><b>Discount</b></td>
											<td ><b>
												<?php 
													$discount=((int)$subtotal-(int)($totalIndividualPrice+$totalComboPrice));
													$total=$subtotal-$discount;
													echo "- &#8377;".$discount;
												?>
											</b></td>
										</tr>
										<tr>
											<td colspan="5" style="text-align:end;"><b>Shipping + Convenience Charges(inclusive of all taxes)</b></td>
											<td><b>
												<?php 
													$id=$order['orderid'];
													$totalProduct=$this->db->query("select * from tbl_cart where orderid='$id' AND availability='';")->num_rows();
													$shipping_charge=(float)($order['shipping_charge'])/$totalProduct;
													echo "&nbsp;&#8377;".round($shipping_charge,2);
												?>
											</b></td>
										</tr>
										<?php 
											$giftPrice=0;
											$giftWrapCharge=0;
											$orderid=$order['orderid'];
											$giftWrapForThisProduct=0;
											
											if($product->gift_wrap=='true'){
												$giftData=$this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->row();
												$giftCount=$this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->num_rows();
												if($giftData->is_giftwrap=='true'){
													$cartGiftWrap=json_decode($giftData->giftwrap_details);
													if(!empty($cartGiftWrap)){
														$giftwrapid=$cartGiftWrap->giftwrapid;
														$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row();  
														$giftWrapCharge=($giftWrapDetails->price);
														$giftWrapForThisProduct=(($giftWrapDetails->price)/$giftCount);
														$giftPrice=$giftWrapForThisProduct;
													 ?>
													<tr>
														<td colspan="5" style="text-align:end;"><b>Gift Wrap Charges(inclusive of all taxes)</b></td>
														<td><b>&#8377;<?=round($giftWrapForThisProduct,2)?></b></td>
													</tr>
													<?php } }
											}
											
										?>
										<?php 
											$cod_charges=0;
											if($order['pay_mode']=='cod'){?>
											<tr>
												<td colspan="5" style="text-align:end;"><b>COD Charges(inclusive of all taxes)</b></td>
												<td><b>
													<?php 
														echo "&nbsp;&#8377;".$cod_charges;
													?>
												</b></td>
											</tr>
										<?php } ?>
										<tr>
											<td colspan="5" style="text-align:end;"><b>Total Amount Including Tax</b></td>
											<td><b>
												<?php 
													$total_amount=(int)$totalIndividualPrice+(int)$totalComboPrice+(int)$shipping_charge+(int)$cod_charges+(int)$giftPrice;
													echo "&nbsp;&#8377;".$total_amount;
												?>
											</b></td>
										</tr>
										<tr>
											<td colspan="5" style="text-align:end;"><b>(Club Cash/Coupon Discount/Etc) Additional Discount</b></td>
											<td><b>
												<?php 
													$coupon_discount=(int)$order['coupon_discount'];
													$totalProductPrice=((float)$order['amount']+(float)$coupon_discount-(float)$giftWrapCharge-(float)($order['shipping_charge'])); 
													$promo_discount=(float)(($coupon_discount/$totalProductPrice)*$total)+$order['wallet_discount'];
													echo "- &#8377;".round($promo_discount,2);
												?>
											</b></td>
										</tr>
										<tr>
											<td colspan="5" style="text-align:end;"><b>Grand Total(inclusive of all taxes)</b></td>
											<td><b>
												&nbsp; &#8377;
												<?php 
													echo ((int)$total_amount-(int)($promo_discount));
												?>
											</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<b>Not for Resale:</b><br>
								<p class="mb-0">Thank you for being slick pattern royal club member. Keep shopping & enjoying the benefits.</p>
								<p class="mb-0">This is computer generated invoice and requires no signature & stamp.</p>
								<p class="mb-0">Registered office: <?= $this->data->appAddress?> </p>
							</div>
							<div class="col-sm-12 printInvoice">
								<button class=" btn btn-primary" s onclick="printInvoice()">Print</button>
								<!--<button class=" btn btn-primary" id="download">Download</button>-->
							</div>
						</div>
						<br>
					</div>
				<?php } ?>
			
			<?php require APPPATH.'views/Auth/JsLinks.php';?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
			
			
			
			<script>   
			function printInvoice() {
			window.print();
			}
			</script>
			<script type="text/javascript">
			
			// $(function() { 
			$('#download').click(function() {
			var options = {
			
			};
			var pdf = new jsPDF('p', 'pt', 'a4');
			pdf.addHTML($("#pdf"), 1, 5, options, function() {
			
			pdf.save('invoiceGL.pdf');  
			
			});
			
			})
			</script>
			</body>
			
			</html>																																																																																																																																																																													