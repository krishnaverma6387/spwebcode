
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - View List</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
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
			max-width: 109%;
			}
			}
			.custom-control-label::before {
			/* display:none;*/
			}
			
			.selectimg{
			max-width: 100%;
			height: auto;
			margin-left: -35px!important;
			margin-top: -7px!important;
			}
			
		</style>
		
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">View List</li>
							</ol>
						</div>
						<div class="col-sm-6 col-12">
							<ol class="breadcrumb float-right">
								<a href="javascript:void(0)" id="content1" class="active">ADD ALL TO CART</a> <span>&nbsp;&nbsp;.&nbsp;&nbsp;</span>
								<a href="javascript:void(0)" id="content2" onclick="ChangeContent(this.value)" class="active" >EDIT</a>
							</ol>
						</div>
					</div>
					
				</div>
				
			</nav>
			
			
		</div> 
		<section class="pro-content login-content">
			<div class="container-fluid" style="max-width: 95%">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="custom-control custom-checkbox image-checkbox">
							<input type="checkbox" class="custom-control-input" checked id="ck1a">
							<label class="custom-control-label" for="ck1a">
								<img src="https://static.zara.net/photos///2022/I/1/1/p/3344/010/040/2/w/444/3344010040_1_1_1.jpg?ts=1658933954946" alt="#" class="selectimg">
							</label>
						</div>
						<div class="row">
							<div class="col-5">
								<a href="" style="font-size:10px;">LACE UP MID-HEEL</a>  
							</div>	
							<div class="col-7">
								<a href="" style="font-size:10px;">₹ 5,990.00</a>  	
								<del style="font-size:10px;">₹ 6,990.00</del>
								<span><a href="javascript:void(0)" title="Remove form wishlist"><i class="bi bi-bookmark" style="font-size: 10px;"></i></a></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span style="font-size:10px;">BLACK · REF. 3344/010</span><br>	
								<span style="font-size:10px;">UK 7 (EUR 40)</span>	
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="custom-control custom-checkbox image-checkbox">
							<input type="checkbox" class="custom-control-input" checked id="ck1b">
							<label class="custom-control-label" for="ck1b">
								<img src="https://static.zara.net/photos///2022/I/0/1/p/3067/204/508/2/w/444/3067204508_1_1_1.jpg?ts=1660744979307" alt="#" class="selectimg w-100">
							</label>
						</div>
						<div class="row">
							<div class="col-5">
								<a href="" style="font-size:10px;">LACE UP MID-HEEL</a>  
							</div>	
							<div class="col-7">
								<a href="" style="font-size:10px;">₹ 5,990.00</a>  	
								<del style="font-size:10px;">₹ 6,990.00</del>
								<span><a href="javascript:void(0)" title="Remove form wishlist"><i class="bi bi-bookmark" style="font-size: 10px;"></i></a></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span style="font-size:10px;">BLACK · REF. 3344/010</span><br>	
								<span style="font-size:10px;">UK 7 (EUR 40)</span>	
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="custom-control custom-checkbox image-checkbox">
							<input type="checkbox" class="custom-control-input" checked id="ck1c">
							<label class="custom-control-label" for="ck1c">
								<img src="https://static.zara.net/photos///2022/I/0/1/p/8482/321/401/2/w/444/8482321401_1_1_1.jpg?ts=1660291341890" alt="#" class="selectimg">
							</label>
						</div>
						<div class="row">
							<div class="col-5">
								<a href="" style="font-size:10px;">LACE UP MID-HEEL</a>  
							</div>	
							<div class="col-7">
								<a href="" style="font-size:10px;">₹ 5,990.00</a>  	
								<del style="font-size:10px;">₹ 6,990.00</del>
								<span><a href="javascript:void(0)" title="Remove form wishlist"><i class="bi bi-bookmark" style="font-size: 10px;"></i></a></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span style="font-size:10px;">BLACK · REF. 3344/010</span><br>	
								<span style="font-size:10px;">UK 7 (EUR 40)</span>	
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
		<script>
			jQuery("#content2").click(function(){
				var text1 = jQuery("#content1").html();	 
				var text2 = jQuery("#content2").html();	
				if(text1 == 'ADD ALL TO CART')
				{
					jQuery("#content1").html('SELECT ALL');
					jQuery("#content2").html('CANCEL');
				}
				else
				{
					jQuery("#content1").html('ADD ALL TO CART');
					jQuery("#content2").html('EDIT');
				}
			})	
		</script>
		
	</body>
</html>																						