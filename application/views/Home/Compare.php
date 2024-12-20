	
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Product Listing</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php include('include/cssLinks.php') ?>
		<style>
		.slide-toggle{
			display:none!important;
			}
			.text-custom-truncate {
			display: -webkit-box !important;
			max-width: 230px;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
			}
			
			.table thead tr th {
			background-color: white;
			/*z-index: 10;*/
			}
			table {
			text-align: left;
			position: relative;
			border-collapse: collapse;
			overflow: scroll;
			}
			
			th {
			background: white;
			position: sticky   ;
			top: 109px;
			box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
			}
			
			.table-responsive {
			overflow-x: inherit !important;
			}
			
			.product_name{
			 text-decoration: underline;
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
						<li class="breadcrumb-item active" aria-current="page">Compare Products</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section style="margin-top: 20px;">
		   	<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h4 class="font-weight-bold">Compare Products</h4>
					</div>   
					<div class="col-sm-6 text-right">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1">
							<label class="custom-control-label" for="customSwitch1">Show only differences</label>
						</div>	  
					</div>   
				</div>
				<hr>
			</div>
		</section>
		<section style="margin-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 " >
						<div class="container-fluid" >
							<div class="table-responsive">
								<table class="table" >
									<thead>
										<tr class="simple-head" >
											<th width="20%">
												<div class="bg-white h-100 w-100"> </div>
											</th>
											<th width="20%">
												<div class="mb-2">
													<button type="button" class="close" id="close" onclick="removeCompareProduct()">
														<span aria-hidden="true">&times;</span>
													</button>
													<div class="d-flex justify-content-between align-items-center"> <img src="https://5.imimg.com/data5/NA/PN/MY-39199367/ladies-fashion-hand-bag-500x500.jpg" width="100" style="height: 100px">  </div>
													<hr>
													<span class="d-block text-custom-truncate ml-1">Girls Hand Bags Latest Design</span>
													<span>₹999</span>
													
												</div>
											</th>
											<th width="20%">
												<div class="mb-2">
													<button type="button" class="close" id="close" onclick="removeCompareProduct()">
														<span aria-hidden="true">&times;</span>
													</button>
													<div class="d-flex justify-content-between align-items-center"> <img src="https://5.imimg.com/data5/XK/BS/MY-3791772/hand-purses-500x500.jpg" width="100" style="height: 100px"> </div>
													<hr>
													<span class="d-block text-custom-truncate ml-1">Nylon Ladies Hand Purse</span>
													<span>₹999</span>
												</div>
											</th>
											<th width="20%">
												<div class="mb-2">
													<button type="button" class="close" id="close" onclick="removeCompareProduct()">
														<span aria-hidden="true">&times;</span>
													</button>
													<div class="d-flex justify-content-between align-items-center"> <img src="https://img.joomcdn.net/124fcb855bbbb91a81a60e270febdb3dd906e511_original.jpeg" width="100" style="height: 100px">  </div>
													<hr>
													<span class="d-block text-custom-truncate ml-1">Girls Hand Bags Latest Design</span>
													<span>₹999</span>
												</div>
											</th>
											<th width="20%">
												<div class="mb-2">
													<button type="button" class="close" id="close" onclick="removeCompareProduct()">
														<span aria-hidden="true">&times;</span>
													</button>
													<div class="d-flex justify-content-between align-items-center"> <img src="https://clutchtotebags.com/wp-content/uploads/2018/03/leather-clutch-bag-for-women-clutches-leather-bag-girls-ladies-clutch-purse-leather-crocodile-pattern-croc-bag-italian-leather-purse-pink-.jpg" width="100" style="height: 100px"> </div>
													<hr>
													<span class="d-block text-custom-truncate ml-1">Nylon Ladies Hand Purse</span>
													<span>₹999</span>
												</div>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="addnewrow">
											<th scope="row">Product Title</th>
											<td class="base-item">Core i5</td>
											<td>Core i5</td>
											<td>Core i7</td>
											<td>R Series</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Product Name</th>
											<td class="base-item">15.6 in</td>
											<td>15.6 in</td>
											<td>14.6 in</td>
											<td>16 in</td>
											
										</tr>
										<tr class="addnewrow">
											<th>Cloth Types</th>
											<td class="base-item">Windows 10</td>
											<td>Windows 10 Home</td>
											<td>Windows 8</td>
											<td>Windows 10 pro</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Rating</th>
											<td class="base-item">Core i5</td>
											<td>Core i5</td>
											<td>Core i7</td>
											<td>R Series</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Pricing</th>
											<td class="base-item">15.6 in</td>
											<td>15.6 in</td>
											<td>14.6 in</td>
											<td>16 in</td>
											
										</tr>
										<tr class="addnewrow">
											<th>Offer</th>
											<td class="base-item">Windows 10</td>
											<td>Windows 10 Home</td>
											<td>Windows 8</td>
											<td>Windows 10 pro</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Care Instruction</th>
											<td class="base-item">Core i5</td>
											<td>Core i5</td>
											<td>Core i7</td>
											<td>R Series</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Screen Size</th>
											<td class="base-item">15.6 in</td>
											<td>15.6 in</td>
											<td>14.6 in</td>
											<td>16 in</td>
											
										</tr>
										<tr class="addnewrow">
											<th>Operating system</th>
											<td class="base-item">Windows 10</td>
											<td>Windows 10 Home</td>
											<td>Windows 8</td>
											<td>Windows 10 pro</td>
											
										</tr>
										<tr class="addnewrow">
											<th scope="row">Processor Name</th>
											<td class="base-item">Core i5</td>
											<td>Core i5</td>
											<td>Core i7</td>
											<td>R Series</td>
											
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						
						
					</div>  
					<div class="col-sm-3">
						<h4 class="text-center font-weight-bold">Add Product</h4> 
						<div class="form-group">
							<div class="col-auto">
								<label class="sr-only" for="inlineFormInputGroup">Username</label>
								<div class="input-group mb-2" >
									<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="" >
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-search"></i></div>
									</div>
								</div>
							</div>
						</div>
						<div class="compare_product">
							<div class="row p-1 my-1">
								<div class="col-sm-3 col-12">
									<img src="https://clutchtotebags.com/wp-content/uploads/2018/03/leather-clutch-bag-for-women-clutches-leather-bag-girls-ladies-clutch-purse-leather-crocodile-pattern-croc-bag-italian-leather-purse-pink-.jpg" class="img-fluid">	
								</div>
								<div class="col-sm-9 col-12">
									<a href="javascript:void(0)" onclick="addProductTocompare('10')" class="text-danger product_name">Girls Hand Bags Latest Design</a>	<br>
									<small>₹900</small>
								</div>
							</div>	
							<div class="row p-1 my-1">
								<div class="col-sm-3 col-12">
									<img src="https://5.imimg.com/data5/XK/BS/MY-3791772/hand-purses-500x500.jpg" class="img-fluid">	
								</div>
								<div class="col-sm-9 col-12">
									<a href="javascript:void(0)" onclick="addProductTocompare('20')" class="text-danger product_name">Nylon Ladies Hand Purse</a><br>
								    <small>₹900</small>
								</div>
							</div>
							<div class="row p-1 my-1">
								<div class="col-sm-3 col-12">
									<img src="https://5.imimg.com/data5/NA/PN/MY-39199367/ladies-fashion-hand-bag-500x500.jpg" class="img-fluid">	
								</div>
								<div class="col-sm-9 col-12">
									<a href="javascript:void(0)" onclick="addProductTocompare('30')" class="text-danger product_name">Nylon Ladies Hand Purse</a><br>
									<small>₹900</small>
								</div>
							</div>
							<div class="row p-1 my-1">
								<div class="col-sm-3 col-12">
									<img src="https://5.imimg.com/data5/XK/BS/MY-3791772/hand-purses-500x500.jpg" class="img-fluid">	
								</div>
								<div class="col-sm-9 col-12">
									<a href="javascript:void(0)" onclick="addProductTocompare('10')" class="text-danger product_name">Girls Hand Bags Latest Design</a><br>
									<small>₹900</small>
								</div>
							</div>
							<div class="row p-1 my-1">
								<div class="col-sm-3 col-12">
									<img src="https://5.imimg.com/data5/NA/PN/MY-39199367/ladies-fashion-hand-bag-500x500.jpg" class="img-fluid">	
								</div>
								<div class="col-sm-9 col-12">
									<a href="javascript:void(0)" onclick="addProductTocompare('10')" class="text-danger product_name">Nylon Ladies Hand Purse</a>	 <br>
									<small>₹900</small>
								</div>
							</div>
						</div>
					</div>  
				</div>  
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		<script>
			
			function addProductTocompare(id)
			{
				jQuery(".simple-head").append('<th width="20%"><div class="mb-2"><button type="button" class="close" id="close" onclick="removeCompareProduct('+id+')" ><span aria-hidden="true">&times;</span></button><div class="d-flex justify-content-between align-items-center"> <img src="https://5.imimg.com/data5/NA/PN/MY-39199367/ladies-fashion-hand-bag-500x500.jpg" width="100" style="height: 100px"></div><hr><span class="d-block text-custom-truncate ml-1">Girls Hand Bags Latest Design</span><span>₹999</span></div></th>');
				
				jQuery(".addnewrow").append('<td>New</td>');
				
			}
			function removeCompareProduct(id)
			{
			var id = jQuery(this).attr('id');
			}
		</script>
	</body>
</html>																						