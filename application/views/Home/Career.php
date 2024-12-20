
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
			.icon {
			font-size: 2rem;
			}	
			.form-control-lg {
			border-radius: 6px!important;
			}
			.slide-toggle{
			display:none!important;
			}
			/*@media only screen and (max-width: 600px) {
			.pageheading{
			font-size: 20px!important;
			}
			}*/
			@media only screen and (min-width: 360px) and (max-width: 768px) {
			.pageheading{
			font-size: 20px!important;
			}
			.mainbanner
			{
			height: 300px!important;
			width: 100%;
			}
			}
			
			p{
			font-weight:unset;
			}
			
			body{
			font-family: sans-serif;
			}
			
			.job-title{
			text-decoration: underline;
			font-size:16px;
			font-weight:600;
			letter-spacing: 0 !important;
			}
			
			b, strong {
			font-weight: 600;
			}
			
			p{
			margin-bottom:0rem;
			}
			
			a {
			color: #009C9F;
			background-color: transparent;
			}
		</style>
		
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Career</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		
		<!-- About-us Content -->
		<section class="pro-content aboutus-content pt-1">
			<div class="container">
				<div class="row ">
					<div class="col-12 d-flex justify-content-center align-items-center" style="background:url('<?= base_url('public/') ?>images/about-us/full-width.jpg');height:40vh;color: #e5e2e2;">
						<h1>Career</h1>
					</div>
					<div class="col-12 col-sm-12 mt-2 mx-0 px-0">
						<?php 
							if(!empty($list)){
								foreach($list as $each){
								?>
								<p class="job-title"><?=$each->title?></p>
								<div>
									<?=base64_decode($each->description)?>
                                    Mail us your resume at <a href="mailto:<?= $each->mail;?>"><?= $each->mail;?></a>
								</div>
							<?php } } ?>
							<!--<form action="<?=base_url($this->data->controller.'/'.$this->data->method.'/Add')?>" method="POST" enctype="multipart/form-data" class="addForm">
								<div class="row">
								<div class="col-lg-6 col-12">
								<div class="form-group">
								<label>Name<span class="text-danger">*</span></label>
								<input type="text" name="name" class="form-control form-control-lg" required placeholder="Name">
								</div>
								<div class="form-group">
								<label>Mobile no<span class="text-danger">*</span></label>
								<input type="number" name="mobile" class="form-control form-control-lg" required placeholder="Mobile No">
								</div>
								<div class="form-group">
								<label>Address</label>
								<input type="text" name="mobile" class="form-control form-control-lg"  placeholder="Address">
								</div>
								</div>
								<div class="col-lg-6 col-12">
								<div class="form-group">
								<label>Email<span class="text-danger">*</span></label>
								<input type="email" name="email" class="form-control form-control-lg" required placeholder="Email">
								</div>
								<div class="form-group">
								<label>Choose Position<span class="text-danger">*</span></label>
								<select class="form-control form-control-lg" required>
								<option value="selected disabled">select position</option>	
								</select>
								</div>
								<div class="form-group">
								<label>Upload Resume<span class="text-danger" >*</span></label>
								<input type="file" name="icon" class="form-control form-control-lg" style="padding: 3px;" required>
								</div>
								
								</div>
								<div class="col-12">
								<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" name="msg" cols="5" rows="5" placeholder="Message.."></textarea>
								</div>
								<div class="form-group">
								<p class="text-right"><button type="submit" class="btn btn-secondary" class="addBtn">  Submit <i class="fa fa-spin fa-spinner" class="addSpin" style="display:none;"></i></button></p>	
								</div>
								</div>
								</div>
							</form>-->
							
					</div>
					
				</div>
				
			</div>  
			<div class="container-fluid bg-media d-none">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 media-col">
							<div class="media align-items-center">
								<img src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/profile.png" alt="profile" class="rounded-circle lazy" style="width:100px;">
								<div class="media-body">
									<h4>Charlis <small>Chief Officer </small></h4>
									<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="media align-items-center">
								<img src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/profile.png" alt="profile" class="lazy rounded-circle" style="width:100px;">
								<div class="media-body">
									<h4>John Doe  <small>Sales Executive</small></h4>
									<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="conatiner-fluid d-none ">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-6">
							<div class="pro-heading-title">
								<h1> Our Team
								</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							
							<div class="aboutUs-carousel-js row" style="margin-bottom: 10px;">                  
								
								<div class="col-12 col-md-3">
									<div class="team-member">
										<article>
											<div class="team-thumb">
												<img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/14_01_about.jpg" alt="Member Image">
											</div>
											<div class="team-info">
												<h3>Charlis</h3>
												<p>Chief Officer</p>
											</div>
										</article>
										
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="team-member">
										<article>
											<div class="team-thumb">
												<img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/14_02_about.jpg" alt="Member Image">
											</div>
											<div class="team-info">
												<h3>John Doe</h3>
												<p>Sales Executive</p>
											</div>
										</article>
										
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="team-member">
										<article>
											<div class="team-thumb">
												<img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/14_03_about.jpg" alt="Member Image">
											</div>
											<div class="team-info">
											<h3>Theresa May</h3>
											<p>Markting Officer</p>
											</div>
											</article>
											
											</div>
											</div>
											<div class="col-12 col-md-3">
											<div class="team-member">
											<article>
											<div class="team-thumb">
											<img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/14_04_about.jpg" alt="Member Image">
											</div>
											<div class="team-info">
											<h3>Xavior</h3>
											<p>Manager</p>
											</div>
											</article>
											
											</div>
											</div>
											<div class="col-12 col-md-3">
											<div class="team-member">
											<article>
											<div class="team-thumb">
											<img class="img-fluid lazy" src="<?= $this->data->lazyLoader;?>" data-src="<?= base_url('public/') ?>images/about-us/14_05_about.jpg" alt="Member Image">
											</div>
											<div class="team-info">
											<h3>Malissa</h3>
											<p>Product Manager</p>
											</div>
											</article>
											
											</div>
											</div>
											</div>
											</div>
											</div>
											</div>
											</div>
											</section>
											
											
											
											
											
											
											<?php include('include/footer.php'); ?>
											
											
											
											<?php include('include/jsLinks.php'); ?>
											
											</body>
											</html>																																																								