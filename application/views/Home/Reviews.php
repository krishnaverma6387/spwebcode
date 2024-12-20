
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Reviews</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
			.flex-column {
            max-width: 260px;
			}
			
			img {
            margin: 5px;
			}
			
			.scale {
            transform: scaleY(1.05);
            padding-top: 5px; 
			}
		</style>
		
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container">
			<nav aria-label="breadcrumb">
				<div class="img-container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Reviews</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 my-2 text-center">
						<h1 class="font-weight-bold">Reviews</h1>	  
					</div>	
				</div>
				<br>
				<div class="d-flex flex-row flex-wrap justify-content-center">
					<div class="d-flex flex-column">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/47cf8783-dcde-47ef-b5e5-46d6a9b70aa5/1664256642043.png" class="img-fluid">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/3fc45818-f3f8-49be-ba9d-aa9db96395b3/1663148779561.png" class="img-fluid">
					</div>
					
					<div class="d-flex flex-column">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/0746a9f1-c252-4410-a330-d6909c684a09/1663147027918.jpeg" class="img-fluid">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/c139e10e-cddc-4fbd-bb8d-dc6d828307dd/1663146061996.png" class="img-fluid scale">
					</div>
					
					<div class="d-flex flex-column">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/f404df28-fef4-45ab-92cd-254758e65743/1663146806318.png" class="img-fluid scale mb-2">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/4ceea982-fdfd-4b77-b532-bf0e23077509/1663145796768.jpeg"  class="img-fluid">
					</div>
					
					<div class="d-flex flex-column">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/4ceea982-fdfd-4b77-b532-bf0e23077509/1663145796768.jpeg" class="img-fluid m-1 p-1">
						<img src="https://stylenook-prod.s3.ap-south-1.amazonaws.com/UserReviews/e307e341-f4b0-4ed6-96f8-dccd4b63af04/1636547021967.png" class="img-fluid image m-1 p-1">
					</div>
				</div>
			</div>
			
		</section>
		
		
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
		
		
	</body>
</html>																								
