
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Ecatalouge</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.card{
			border-radius: 6px;
			}
			
			
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			#main-sec{
			padding: 0px;
			border-radius: 10px;
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
						<li class="breadcrumb-item active" aria-current="page">E-Catalouge</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row" id="main-sec" >
					<div class="col-sm-8">
						<div class="sample-container" style="height: 400px; width: 100%">
							
						</div>
					</div>
					<div class="col-sm-4">
						<h1><b>Automated Fashion Catalog</b></h1>
						<div class="row">
							<div class="col-sm-12">
								<span><i class="bi bi-aspect-ratio"></i> &ensp;<span>Size: 794px x 1123px</span></span>
							</div>	
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Number of pages: 22</span></span>
							</div>
							<div class="col-sm-12 my-2">
								<button class="btn btn-secondary">Customize This</button>
							</div>
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Page-flipping effect</span></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Add videos, links, product tags</span></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Include your brand elements</span></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Share publicly or privately</span></span>
							</div>
							<div class="col-sm-12 mt-2">
								<span><i class="bi bi-stickies"></i> &ensp;<span>Statistics about performance</span></span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
		<script >
			// jQuery('.sample-container').FlipBook({pdf: '<?= base_url('public/images/dearpdf-manual.pdf') ?>'});
		</script>
		
	</body>
</html>																								
