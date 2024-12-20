
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Site Map</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			.myaccordion {
			margin: 50px auto;
			box-shadow: 0 0 1px rgba(0,0,0,0.1);
			}
			
			.myaccordion .card,
			.myaccordion .card:last-child .card-header {
			border: none;
			}
			
			.myaccordion .card-header {
			border-bottom-color: #EDEFF0;
			background: transparent;
			}
			
			.myaccordion .fa-stack {
			font-size: 18px;
			}
			
			.myaccordion .btn {
			width: 100%;
			font-weight: bold;
			color: #8340A1;
			padding: 0;
			}
			
			.myaccordion .btn-link:hover,
			.myaccordion .btn-link:focus {
			text-decoration: none;
			}
			
			.myaccordion li + li {
			margin-top: 10px;
			}
			
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			.myaccordion .fa-stack {
			font-size: 10px;
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
						<li class="breadcrumb-item active" aria-current="page">Site Map</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="col-sm-12">
				<h1>Site Map</h1>
					
					<div id="accordion" class="myaccordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<h2 class="d-flex align-items-center justify-content-between">
										Home Page
									</h2>
								</h2>
							</div>
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Undergraduate Studies
										<span class="fa-stack fa-sm">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-plus fa-stack-1x fa-inverse"></i>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<ul>
										<li>Computer Science</li>
										<li>Economics</li>
										<li>Sociology</li>
										<li>Nursing</li>
										<li>English</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Postgraduate Studies
										<span class="fa-stack fa-2x">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-plus fa-stack-1x fa-inverse"></i>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<ul>
										<li>Informatics</li>
										<li>Mathematics</li>
										<li>Greek</li>
										<li>Biostatistics</li>
										<li>English</li>
										<li>Nursing</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Research
										<span class="fa-stack fa-2x">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-plus fa-stack-1x fa-inverse"></i>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<ul>
										<li>Astrophysics</li>
										<li>Informatics</li>
										<li>Criminology</li>
										<li>Economics</li>
									</ul>
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
			jQuery("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
				jQuery(e.target)
				.prev()
				.find("i:last-child")
				.toggleClass("fa-minus fa-plus");
			});
			
		</script>
		
	</body>
</html>																								
