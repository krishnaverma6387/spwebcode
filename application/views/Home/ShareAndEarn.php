
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Share and earn</title>
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
			body{
			background:#F7F7F7!important;
			}
			#main-sec{
			background: linear-gradient(90deg, rgb(168 83 233 / 49%) 20%, rgb(231 132 222 / 51%) 46%);
			padding: 75px;
			border-radius: 10px;
			}
			
			.referral-header{
			border-radius: 10px; background: #F9FAFC; position: relative; margin-top: -30px
			}
			
			@media only screen and (min-device-width : 240px) and (max-device-width : 600px) {
			
			#main-sec{
			padding: 0;
			padding-bottom: 18px;
			border-radius: 20px;
			}
			.referral-header{
			border-radius: 10px;
			background: #F9FAFC;
			position: relative;
			width: 330px;
			margin-top: 22px;
			}
			}
			.card-header{
			background:white!important;
			}
			
			.btn-link:hover {
			color: #505050;
			text-decoration:none !important;
			}
			
			
			/* .btn-link:after {
			font-family: 'FontAwesome';
			content: "\f078";    
			float: right;
			}
			.btn-link:after {
			font-family: 'FontAwesome';
			content: "\f078";    
			float: right;
			}
			*/
			
		</style>
	</head>
    
    <body>  
		
		<?php include('include/header.php') ?>
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Share And Earn</li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row" id="main-sec" >
					
					<div class="col-sm-12 text-center text-white">
						<h1 class="text-center">Invite Friends & Earn</h1>	
						<p class="text-center">Invite Friends & Earn <?php if(!empty($refer_reward->first_order)){echo $refer_reward->first_order;}?> Slick Pattern Points For Every Friend</p>
					</div>
					<div class="col-sm-8 mx-auto">
						<div class="card " style="border:0px;">
							<div class="card-body" style="padding-top:0px;" >
								<center><img src="<?=base_url('public/images/share_earn.jpg')?>" class="img-fluid"></center>
							</div>
						</div>   
					</div> 
					<div class="col-sm-5 mx-auto shadow p-2 referral-header" > 
						<div class="row mt-2" >
							<div class="col-5"> 
								<p class="mb-0" style="font-size: 14px;">Referral Code:</p>
							</div>	
							<div class="col-3">
								<p class="font-weight-bold mb-0"><?php if(!empty($this->userData->ref_code)){echo $this->userData->ref_code; }?></p>   
							</div>	
							<div class="col-4 text-right d-flex justify-content-end"> 
								<a href="javascript:void(0)" class="copy-code"  onclick="copyCode('<?php if(!empty($this->userData->ref_code)){echo $this->userData->ref_code; }?>')"><i class="conf-class bi bi-files"></i></a>
								<a href="javascript:void(0)" class="mx-2" data-toggle="modal" data-target="#ShareModal" ><i class="bi bi-share"></i></a>
							</div>	
						</div>
					</div>
				</div>
				<div class="row mt-2 bg-white">
					<div class="col-sm-12">
						<h3>  <i class="bi bi-info-circle"></i> <span>FAQs</span> <h3>
						</div>	
						<div class="col-sm-12">
							<div class="accordion" id="accordionExample">
								<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
									<div class="card-header" id="headingOne">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												What is Slick Pattern Invite Friends Program?
												<span class="float-right"> <i class="fas fa-chevron-down"></i> </span>
											</button>
										</h2>
									</div>
									
									<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
										</div>
									</div>
								</div>
								<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
									<div class="card-header" id="headingTwo">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Collapsible Group Item 2
												<span class="float-right"> <i class="fas fa-chevron-down"></i> </span>
											</button>
										</h2>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
											Some placeholder content for the second accordion panel. This panel is hidden by default.
										</div>
									</div>
								</div>
								<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
									<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item 3
												<span class="float-right"> <i class="fas fa-chevron-down"></i> </span>
											</button>
										</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
										</div>
									</div>
								</div>
								
								<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
									<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item 4
												<span class="float-right"> <i class="fas fa-chevron-down"></i> </span>
											</button>
										</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
										</div>
									</div>
								</div>
								
								<div class="card" style="border-top:0px; border-left:0px; border-right:0px">
									<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item 5
												<span class="float-right"> <i class="fas fa-chevron-down"></i> </span>
											</button>
										</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</section>
				<!-- Modal -->
				<div class="modal fade" id="ShareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="border:0px;">
								<h5 class="modal-title" id="exampleModalLabel">Share Via</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-12">
										<a href="javascript:void(0)" onclick="copyCode('<?php if(!empty($this->userData->ref_code)){echo urlencode(base_url($this->data->controller.'/'.$this->data->method.'/Login?referral_name='.$this->userData->name.'&referral_code='.$this->userData->ref_code)); }?>')"><img src="<?= base_url('public/images/link-icon.png') ?>" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Copy Link&nbsp;<span class="conf-class bi bi-files"></span></span></a>
									</div>
								    <div class="col-sm-12 mt-4"> 
										<a target="_blank" href="https://web.whatsapp.com/send?text=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">WhatsApp </span>  </a>
									</div>
									
								    <div class="col-sm-12 mt-4"> 
										<a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/768px-Facebook_Logo_%282019%29.png" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Facebook </span>  </a>
									</div>
									
									<div class="col-sm-12 mt-4">
										<a href="mailto:?subject=<?php echo urlencode('Your friend '.$this->userData->name.' has invited you to join SlickPattern. Use invite code '.$this->userData->ref_code.' to signup and earn 50 SlickPattern Points. You can also use the following link to join:'.base_url($this->data->controller.'/Login?referral_code='.$this->userData->ref_code.'&referral_name='.$this->userData->name));?>"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSkeoCs8VErWDf0vryeFdXddXFAKS0wtjAWw&usqp=CAU" class="img-fluid" style="height: 25px;"> &ensp;<span class="font-weight-bold">Mail</span>  </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include('include/footer.php'); ?>
				<?php include('include/jsLinks.php'); ?>
				<script>
					function copyCode(code) {
						navigator.clipboard.writeText(code);
						
						$('.conf-class').toggleClass('bi-files bi-check2');
						setTimeout(function() {
							$('.conf-class').toggleClass('bi-check2 bi-files');
						}, 1000); 
					}
				</script>
			</body>
		</html>																								
		