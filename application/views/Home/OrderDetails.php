
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Order Details</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			/*swithc css*/
			
			.switch {
			position: relative;
			display: inline-block;
			width: 46px;
			height: 19px;
			}			
			.switch input {
			display: none;
			}		
			.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: #dedede;
			border-radius: 40px;
			-webkit-transition: 0.4s;
			transition: 0.4s;
			}		
			.slider:before {
			position: absolute;
			content: "";
			height: 14px;
			width: 14px;
			background: #fff;
			border-radius: 50%;
			left: 2px;
			bottom: 3px;
			-webkit-transition: 0.4s;
			transition: 0.4s;
			}		
			input:checked + .slider {
			background: #FF1493;
			}	
			input:checked + .slider:before {
			-webkit-transform: translateX(30px);
			-moz-transform: translateX(30px);
			transform: translateX(30px);
			}			
			input:focus + .slider {
			}
			
			/*swithc css*/
			
			.icon {
			font-size: 2rem;
			}
			.slide-toggle{
			display:none!important;
			}
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: #FF1493 !important;
			}
			.list-group-item.active {
			z-index: 2;
			background-color: white!important;
			color: white !important;
			border-left: 5px solid !important;
		    border-color: #C2C2C2 !important;
			border-left-color: #FF1493!important;
			}
			body{
			background: #F3F3F3 !important;
			}
			.form-control-lg{
			font-size: 11px!important;
			}
			
			/*Qty Select css*/
			
			.qtySelector{
			border: 1px solid #ddd;
			width: 107px;
			height: 35px;
			
			}
			.qtySelector .fa{
			padding: 10px 5px;
			width: 35px;
			height: 100%;
			float: left;
			cursor: pointer;
			}
			.qtySelector .fa.clicked{
			font-size: 12px;
			padding: 12px 5px;
			}
			.qtySelector .fa-minus{
			border-right: 1px solid #ddd;
			}
			.qtySelector .fa-plus{
			border-left: 1px solid #ddd;
			}
			.qtySelector .qtyValue{
			border: none;
			padding: 5px;
			width: 35px;
			height: 100%;
			float: left;
			text-align: center
			}
			/*Qty Select css*/
			
			#hide_item_details{
			display:none;
			}
			.alertmsg{
			display:none;
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
						<li class="breadcrumb-item active" aria-current="page">Order Details</li>
					</ol>
				</div>
			</nav>
		</div>
		<section class="pro-content order-content">
			<div class="container">
				<div class="row">
					<div class="pro-heading-title">
						<h1>
							Order Details
						</h1>
					</div>
				</div>
				<div class="row">
					
					<div class="col-12 col-lg-3   d-block d-xl-block"> 
						<ul class="list-group">
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Profile") ?>">
									<i class="bi bi-person"></i>
									Profile          
								</a>
							</li>
							<li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/Wishlist") ?>">
									<i class="bi bi-heart"></i>
									Wishlist                   
								</a>
							</li>
							<li class="list-group-item active">
								<a class="nav-link " href="<?= base_url("Home/Order") ?>">
									<i class="bi bi-cart3"></i>
									My Orders                   
								</a>
							</li>
							<!--li class="list-group-item">
								<a class="nav-link" href="<?= base_url("Home/ShippingAddress") ?>">
								<i class="bi bi-geo-alt"></i>
								Shipping Address                           
								</a>
							</li-->
							<li class="list-group-item">
								<a class="nav-link" href="#">
									<i class="bi bi-power"></i>
									Logout                               
								</a>
							</li>
							<!--li class="list-group-item">
								<a class="nav-link" href="change-password.html">
								<i class="bi bi-unlock"></i>
								Change Password                            
								</a>
							</li--> 
						</ul>
					</div>
					<div class="col-12 col-lg-9 ">
						<div class="card">
							<div class="card-header">
								<p> <i class="fa fa-arrow-left"></i> Orders Details</p>  
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<span class="text-uppercase font-weight-bold">Order ID</span> <br>
										<span>SLK-123456-43213</span> <br><br> 
										<span class="text-uppercase font-weight-bold">Placed</span> <br>
										<span>Tue, 6 Sep</span>
									</div>	
									<div class="col-6 text-right">
										<span>TOTAL</span> <br>
										<span> ₹ 998</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="card mt-3">
							<div class="card-body">
								<p class="font-weight-bold">Shipping address</p>		
								<span>user name</span> <br>
								<span>near state bank of india IT Chouraha lucknow, IT Chouraha,</span> <br>
								<span>1234567890</span> 
								<div class="row mt-2">
									<div class="col-12 col-lg-6">
										<button class="btn btn-block btn-secondary" id="EditInfo">Edit Information</button>
									</div>	
								</div>
							</div>
							
						</div>
						<div class="card mt-3">
							<div class="card-body" style="padding-top: 1px;">
								<span class="font-weight-bold text-uppercase mb-2" style="font-size: 10px">shipment 1 of 1</span> <br> <br>
								<span class="font-weight-bold">Order Confirmed</span> <br>
								<span>Estimated delivery by Sat, 10 Sep</span> <br> <br>
								<p>Sold By  <span class="font-weight-bold">Slick Pattern Private Limited.</span></p>
								<span style="font-size: 10px;">Products are usually shipped in 1 days</span>
								<div class="row mt-2">
									<div class="col-6 col-lg-2 ">
										<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/3/d/3d66144SLT-180703_1.jpg?rnd=20200526195200" class="img-fluid border" style="height: 100px; width: 90%">
									</div>	
									<div class="col-8 col-lg-8">
										<div class="mt-3">
											<span >The Souled Store Men Solid Knit Shirt Black Knit Shirts (M)</span><br>	
											<span class="">Qty: !</span> <br>	
											
										</div>	
									</div>	
									<div class="col-lg-2 col-12 text-right">
										<div class="mt-3">
											<del>₹1900</del><span class="font-weight-bold">₹998</span>
										</div>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-12 col-lg-6">
										<button class="btn btn-block btn-secondary" id="cancellItem">Cancell Item(s)</button>
									</div>	
								</div>
							</div>	
						</div>
						<div class="card mt-3">
							<div class="card-body">
								<p class="font-weight-bold">Payment details</p>
								<table class="table table-striped " >
									<tbody>
										<tr>
											<td>Payment method</td>	  
											<td class="text-right">COD</td>	  
										</tr>	
										<tr>
											<td>Subtotal (Inclusive tax)</td>		  
											<td class="text-right">₹998</td>		  
										</tr>
										<tr>
											<td>Discount</td>		  
											<td class="text-right text-danger">(-) ₹0</td>		  
										</tr>
										<tr >
											<td>Shipping Charges</td>		  
											<td class="text-right">₹0</td>		  
										</tr>
									</tbody>
									
								</table>
							</div>	
						</div>
						<div class="alert  mt-2" style="background: #fa057e75;" role="alert">
							<div class="row">
								<div class="col-6">
									<span class="text-white">Total Savings:</span>  
								</div>	
								<div class="col-6 text-right">
									<span class="text-white">₹1200.00</span>    
								</div>	
							</div>
							
						</div>
						<div class="col-sm-5 mx-auto mt-3">
							<button class="btn btn-secondary btn-block" id="cancelOrder">Cancel Order</button>	
						</div>
						
						<!-- ............the end..... -->
					</div>
					
				</div>
				
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		
		
		<!-- Cancel order Modal -->
		<div class="modal fade" id="CancelOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-arrow-left"></i> Cancel Order</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/3/d/3d66144SLT-180703_1.jpg?rnd=20200526195200" class="img-fluid border" style="height: 100px;">
								<div class="form-group mt-2">
									<label class="font-weight-bold">Reason for cancellation <span>*</span></label>	
									<select class="form-control form-control-lg" required onchange="alertTOUser(this.value)" >
										<option selected disabled>Select Reason</option>  
										<option value="Delayed delivery – Product won’t reach on time">Delayed delivery – Product won’t reach on time</option>  
										<option value="Found cheaper somewhere else">Found cheaper somewhere else</option>  
										<option value="Want to change the style/color">Want to change the style/color</option>    
										<option value="Want to change the size">Want to change the size</option>    
										<option value="Wrong address/phone">Wrong address/phone </option>    
										<option value="Want to change tha payment method">Want to change tha payment method</option>    
										<option value="Duplicate order">Duplicate order </option>    
										<option value="Want to add more order">Want to add more order </option>    
										<option value="Other">Other</option>    
									</select>
									<div class="alert alert-info mt-2 alertmsg" role="alert">
										<i class="bi bi-info-circle-fill text-info"></i> We recommend you change the shipping address or phone insted of cancelling this order.
									</div>
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Order Details</label>
									<textarea rows="5"class="form-control"></textarea>
									<span style="font-size: 10px; float:right" class="text-right">200/200</span>
								</div>
								<div class="form-group mt-4">
									<button class="btn btn-secondary btn-block"  id="ConfirmCalcelOrder"  >Cancel Order </button>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end modal-->
		
		<div class="modal fade" id="CancelItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-arrow-left"></i> Cancel Item</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="row" >
									<div class="col-3 pr-0">
										<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/3/d/3d66144SLT-180703_1.jpg?rnd=20200526195200" class="img-fluid border" style="height: 100px;">
									</div>
									<div class="col-7">
										<label for="selectdata">The Souled Store Men Solid Knit Shirt Black Knit Shirts (M)</label>	<br>
										<span>Qty: 1</span>
									</div>
									<div class="col-2">
										<input type="checkbox" id="selectdata" onchange="GetDetails()" >	
									</div>
								</div>	
							</div>
							<div class="col-sm-12 mt-2" id="hide_item_details">
								<div class="form-group my-2">
									<label class="font-weight-bold">Select Qty.</label>
									<div class="qtySelector ">
										<i class="fa fa-minus decreaseQty"></i>
										<input type="text" class="qtyValue" value="1" />
										<i class="fa fa-plus increaseQty"></i>
									</div>
									<div class="form-group mt-2">
										<label class="font-weight-bold">Reason for cancellation <span>*</span></label>	
										<select class="form-control form-control-lg" required  onchange="alertTOUser(this.value)"  >
											<option selected disabled>Select Reason</option>  
											<option value="">Delayed delivery – Product won’t reach on time</option>  
											<option>Found cheaper somewhere else</option>  
											<option>Want to change the style/color</option>    
											<option>Want to change the size</option>    
											<option value="Wrong address/phone">Wrong address/phone </option>    
											<option>Want to change tha payment method</option>    
											<option>Duplicate order </option>    
											<option>Want to add more order </option>    
											<option>Other</option>    
										</select>
										<div class="alert alert-info mt-2 alertmsg" role="alert">
											<i class="bi bi-info-circle-fill text-info"></i> We recommend you change the shipping address or phone insted of cancelling this item.
										</div>
									</div>
									<div class="form-group">
										<label class="font-weight-bold">Order Details</label>
										<textarea rows="5"class="form-control"></textarea>
										<span style="font-size: 10px; float:right" class="text-right">200/200</span>
										
										<div class="form-group mt-4">
											<button class="btn btn-secondary btn-block"  onclick="AttemptToCancel()" >Cancel Item(s) </button>	
										</div>
									</div>	
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--cancellation Modal-->
		
		<!-- Modal -->
		<div class="modal fade" id="CancelSuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12 mt-4">
								<div class="text-center">
									<i class="bi bi-patch-check-fill fa-4x" style="color:green"></i>
									<h5>Cancellation Successful !</h5>
									<p>Your item has been successfully cancelled.</p>
								</div>
							</div>	
						</div>
						<div class="row my-5" >
							<div class="col-3 pr-0">
								<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/3/d/3d66144SLT-180703_1.jpg?rnd=20200526195200" class="img-fluid border" style="height: 100px;">
							</div>
							<div class="col-9 pl-0">
								<label for="selectdata">The Souled Store Men Solid Knit Shirt Black Knit Shirts (M)</label>	<br>
								<span>Qty: 1</span>
							</div>
						</div>
						<br></br>
					</div>
					<div class="modal-footer" style="border:0px;">
						<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Okay,Got It</button>
					</div>
				</div>
			</div>
		</div>
		<!--cancellation Modal-->
		
		<div class="modal fade" id="ConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-arrow-left"></i> Confirmation </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12 mt-5">
								<center> <img src="<?= base_url('public/images/danger.png') ?>" class="img-fluid" style="height: 100px"></center>
							</div>
							<div class="col-sm-8 mx-auto">
								<p class="text-center">You have saved ₹998. Are you sure you want to cancel?</p>  
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-sm-12 mt-3">
								<div class="btn-group btn-block" role="group" aria-label="Basic example">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>&nbsp;
									<button type="button" class="btn btn-secondary" onclick="ConfirmCancel()" >Confirm</button>
									
								</div>
							</div>	
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<!---editinformation Modal Start--->
						<!-- Modal -->
					<div class="modal fade" id="EditInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title text-uppercase" id="exampleModalLabel">EDIT INFORMATION</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label>Choose State <span class="text-danger">*</span></label>
											<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control form-control-lg" required>
												<option>Select</option>
											</select>
											
										</div>
										<div class="form-group">
											<label>Choose City <span class="text-danger">*</span></label>
											<select id ="state" class="form-control form-control-lg" required>
												<option selected disabled>Select</option>	
											</select>
										</div>
										<div class="form-group">
											<label>Pin Code <span class="text-danger">*</span></label> 
											<input type="number" name="pincode" class="form-control form-control-lg" placeholder="pincode">
										</div>
										<div class="form-group">
											<label>Address Line1 <span class="text-danger">*</span></label> 
											<input type="text" name="address-line1" class="form-control form-control-lg" placeholder="Address line1">
										</div>
										<div class="form-group">
											<label>Address Line2 <span class="text-danger">*</span></label> 
											<input type="text" name="address-line2" class="form-control form-control-lg"  placeholder="Address line2">
										</div>
										<div class="form-group">
											<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
											<input type="text" name="address-line2" class="form-control form-control-lg" placeholder="Full Name">
										</div>
										<div class="form-group">
											<label>Address Type<span class="text-danger">*</span></label>  <br>
											<input type="radio" name="Home" id="Home" value="Home" selected> <label for="Home">Home</label>
											<input type="radio" name="Work" id="Work"  value="Work"> <label for="Work">Work</label>
										</div>
										<div class="form-group">
											<label>Phone Number<span class="text-danger">*</span></label> 
											<input type="text" name="address-line2" class="form-control form-control-lg" placeholder="mobile number">
										</div>
										<div class="form-group">
											<input type="checkbox"  for="" id="chebox" placeholder="mobile number">
											<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
										</div>
										<div class="form-group">
											<div class="btn-group btn-block btn-group-toggle " data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="radio" name="options" class="customradio" id="option2" autocomplete="off"> <span class="font-weight-bold">SAVE</span>
												</label>&nbsp;
												<label class="btn btn-secondary">
													<input type="radio" name="options" id="option3" class="customradio" autocomplete="off"> <span class="font-weight-bold">CANCEL</span>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
		
		<!---editinformation Modal Start--->
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
		<script>
		    function alertTOUser(data)
			{
				if(data =='Wrong address/phone')
				{
					jQuery('.alertmsg').show();
				}
				else
				{
		        	jQuery('.alertmsg').hide();
				}
			}
			$("#EditInfo").click(function(){
				jQuery(".modal-header modal-title").html('EDIT INFORMATION');
				jQuery("#EditInfoModal").modal('show');
			
			})
		
		    function ConfirmCancel()
			{
				jQuery("#ConfirmationModal").modal('hide');
				jQuery("#CancelSuccessModal").modal('show');
			}
			
			function AttemptToCancel()
			{
				jQuery("#ConfirmationModal").modal('show');	
				jQuery("#CancelItemModal").modal('hide');	
			}
			
			$("#ConfirmCalcelOrder").click(function(){
				jQuery("#CancelOrderModal").modal('hide');
				jQuery("#ConfirmationModal").modal('show');
			})
			
			$("#cancelOrder").click(function(){
				jQuery("#CancelOrderModal").modal('show');
			})
			$("#cancellItem").click(function(){
				jQuery("#CancelItemModal").modal('show');
			})
			
			
			var minVal = 1, maxVal = 20; // Set Max and Min values
			// Increase product quantity on cart page
			$(".increaseQty").on('click', function(){
				var $parentElm = $(this).parents(".qtySelector");
				$(this).addClass("clicked");
				setTimeout(function(){
					$(".clicked").removeClass("clicked");
				},100);
				var value = $parentElm.find(".qtyValue").val();
				if (value < maxVal) {
					value++;
				}
				$parentElm.find(".qtyValue").val(value);
			});
			// Decrease product quantity on cart page
			$(".decreaseQty").on('click', function(){
				var $parentElm = $(this).parents(".qtySelector");
				$(this).addClass("clicked");
				setTimeout(function(){
					$(".clicked").removeClass("clicked");
				},100);
				var value = $parentElm.find(".qtyValue").val();
				if (value > 1) {
					value--;
				}
				$parentElm.find(".qtyValue").val(value);
			});	
			
			function GetDetails()
			{
				jQuery("#hide_item_details").show();  
			}
			
		</script>
		
	</body>
</html>																																																																																																																																																																																																																														