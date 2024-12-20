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
			width:125mm;
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
		<?php if(!empty($orders)){
			foreach($orders as $order)
			$uid =  $order['userid'];
			$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
		?>
		<div class="container inv py-1" id="pdf" style="background:#ffffffbf; color:black !important; ">
			<div class="p-1" style="border:0.2rem solid grey;">
				<div class="row">
					<div class="col-sm-8 py-1 px-3">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-6">
								<p class="font-weight-bold mb-0 mt-1">Ship To</p>
								<p class="mb-0"><?=$uDetails->name; ?></p>
								<?php 
									$address=json_decode($order['address']);  
								?>
								<p class="mb-0"><?=$address->line1?></p>
								<p class="mb-0"><?=$address->line2?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h1 class="font-weight-lighter pb-0"><img  src="<?=$this->data->appLogo?>" height="40" width="80" /></h1>
					</div>
				</div>
				<div class="row mb-0">
					<div class="col-sm-7">
						<p class="mb-0"><?=$address->city?>&nbsp;<?= $address->state?>&nbsp;</br>IN&nbsp;<?= $address->pincode?></p>
						<p class="mb-0"><b>Mob: </b><?= $address->mobile ?></p>
						<p class="mb-0"><b>Address Type: </b><?= $address->address_type ?></p>
					</div>
					<div class="col-sm-5">
						<p class="mb-0 mt-0"><b><span>PaymentType:</span></b><?= $order['pay_mode']?></p>
						<p class="mb-0 mt-2"><b><span>Collect: </span></b>&emsp;RS.<?php if($order['pay_mode']=='online'){echo 0;}else{echo $amount;}?></p>
					</div>
				</div>
				<div class="row mb-0" style="border-top:0.2rem solid grey;">
					<div class="col-sm-6" style="border-right:0.2rem solid grey;">hello</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-4" style="border-right:0.2rem solid grey;font-size:48px;">E</div>
							<div class="col-8">
								<p class="mb-0" style="font-size:12px;"><b>Carrier Name:</b>ECOM</p>
								<p class="mb-0" style="font-size:12px;"><b>Carrier Services:</b>ECOM-STANDARD</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-0" style="border-top:0.2rem solid grey;">
					<div class="col-sm-6" style="border-right:0.2rem solid grey;">
						<div class="row">
							<div class="col-6" style="font-size:48px; border-right:0.2rem solid grey;">
								<p class="mb-0" style="font-size:14px; "><b>Origin:</b><br>TUM</p>
							</div>
							<div class="col-6">
								<p class="mb-0" style="font-size:14px; "><b>Destination:</b><br>DLV</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6"><p class="mb-0" style="font-size:14px; "><b>Routing Code:</b><br>DLV/DLV</p></div>
				</div>
				<div class="row mb-0" style="border-top:0.2rem solid grey;">
					<div class="col-sm-12 px-1" style="padding:4px;"><b>Order#</b></div>
					<div class="col-sm-12 px-1" style="border-top:0.2rem solid grey; padding:4px;"><b>Container#</b></div>
					<div class="col-sm-12 px-1" style="border-top:0.2rem solid grey; padding:4px;"><b>Shipment#</b></div>
				</div>
				<div class="row mb-0" style="border-top:0.2rem solid grey;">
					<div class="col-6" style="font-size:48px; border-right:0.2rem solid grey;">
						<p class="mb-0" style="font-size:14px; height:100%;"><b class="d-flex align-items-center" style="height:100%;">Total Qunatity:</b></p>
					</div>
					<div class="col-6">
						<p class="mb-0" style="font-size:14px; "><b style="font-size:48px;">3</b></p>
					</div>
				</div>
				<div class="row mb-0" style="border-top:0.2rem solid grey;">
					<div class="col-12" >
						<b>Consignor & Return Address:</b><br>
						V027<br>
						AJIO.com<br>
						Survey No54/1
					</div>
					<div class="col-sm-12 printInvoice">
						<button class=" btn btn-primary" s onclick="printInvoice()">Print</button>
					</div>
				</div>
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