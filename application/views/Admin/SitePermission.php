<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  />
		<style>
			.btn-toggle{
			border-radius: 0;
			border: 2px solid white;
			top: 10px;
			left: 10px;
			box-shadow: 0 0 2px #1f1515;
			color: white;
			padding: 1px 2px;
			font-size: 10px;
			margin: 0 5px;
			}
			.fa-minus{
			background-color: #df1940cc;
			}
			.fa-plus{
			background-color: #00B5B8;
			}
			.sub-heading{
			font-size:16px;
			}
			.step-trigger{
			background: unset !important;
			padding: 6px !important;
			}
			.form-control{
			height:30px;
			padding: 3px;
			}
			
			.col-form-label {
			padding-top: calc(0.75rem + 1px);
			padding-bottom: calc(0.5rem + 1px);
			margin-bottom: 0;
			font-size: inherit;
			line-height: 0.5;
			}
			
			.disable{
			pointer-events: none;
			opacity: 0.5;
			}
		</style>
	</head>
	<body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns" onload="disablePastDates()">
		<?php require 'Topbar.php'; ?>
		<?php require 'Sidebar.php'; ?>
		<div class="app-content content">
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-header row">
					<div class="content-header-left col-12 mb-2 mt-1">
						<div class="breadcrumbs-top">
							<h5 class="content-header-title float-left pr-1 mb-0"><?= $this->data->pageTitle; ?></h5>
							<div class="breadcrumb-wrapper d-none d-sm-block">
								<ol class="breadcrumb p-0 mb-0 pl-1">
									<li class="breadcrumb-item">
										<a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
									</li>
									<li class="breadcrumb-item">
										<a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->pageTitle; ?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="addForm">
									<div class="row"> 
										<div class="col-sm-12">
											<div class="card card-dashboard">    
												<div class="card-content collpase show">
													<div class="card-body py-1 px-0 table-responsive">
														<div class="offcanvas-body">
															<div class="container-fluid p-0">
																<div class="col-xl-12 mb-1">
																	
																</div>	
																<div class="table-responsive">
																	<table id="role" class="table role-tble">
																		<thead>
																			<tr>
																				<th colspan="5">General</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>
																					<input type="hidden" name="id" value="<?=$list->id?>">
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="customCheckBox4" name="home" <?php if($list->home){echo 'checked';}?>>
																						<label class="form-check-label" for="customCheckBox4">Home</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="gift_wrap" name="gift_wrap" <?php if($list->gift_wrap){echo 'checked';}?>>
																						<label class="form-check-label" for="gift_wrap">Gift Wrap</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="look_product" name="look_product" <?php if($list->look_product){echo 'checked';}?>>
																						<label class="form-check-label" for="look_product">Look Product</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="ecatlog" name="ecatlog" <?php if($list->ecatlog){echo 'checked';}?>>
																						<label class="form-check-label" for="ecatlog">E-Catlog</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="prebooking" name="prebooking" <?php if($list->prebooking){echo 'checked';}?>>
																						<label class="form-check-label" for="prebooking">Prebooking</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="expert_talk" name="expert_talk" <?php if($list->expert_talk){echo 'checked';}?>>
																						<label class="form-check-label" for="expert_talk">Expert Talk</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="career" name="career" <?php if($list->career){echo 'checked';}?>>
																						<label class="form-check-label" for="career">Career</label>   
																					</div> 
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="become_seller" name="become_seller" <?php if($list->become_seller){echo 'checked';}?>>
																						<label class="form-check-label" for="become_seller">Become Seller</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="royal_subscription" name="royal_subscription" <?php if($list->royal_subscription){echo 'checked';}?>>
																						<label class="form-check-label" for="royal_subscription">Royal Subscription</label>
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="coupon_management" name="coupon_management" <?php if($list->coupon){echo 'checked';}?>>
																						<label class="form-check-label" for="coupon_management">Coupon Management</label>   
																					</div>
																				</td>
																				<td>
																					
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="cashback_management" name="cashback_management" <?php if($list->cashback){echo 'checked';}?>>
																						<label class="form-check-label" for="cashback_management">Cashback Management</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="reward_management" name="reward_management" <?php if($list->reward){echo 'checked';}?>>
																						<label class="form-check-label" for="reward_management">Reward Management</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary"> 
																						<input type="checkbox" class="form-check-input" id="sale_management" name="sale_management" <?php if($list->sale){echo 'checked';}?>>
																						<label class="form-check-label" for="sale_management">Sale Management</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="wallet_management" name="wallet_management" <?php if($list->wallet_management){echo 'checked';}?>>
																						<label class="form-check-label" for="wallet_management">Wallet Management</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="refer_friend_web" name="refer_friend_web" <?php if($list->refer_friend_web){echo 'checked';}?>>
																						<label class="form-check-label" for="refer_friend_web">Refer Friend (Web)</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="refer_friend_app" name="refer_friend_app" <?php if($list->refer_friend_app){echo 'checked';}?>>
																						<label class="form-check-label" for="refer_friend_app">Refer Friend (App)</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="notification" name="notification" <?php if($list->notification){echo 'checked';}?>>
																						<label class="form-check-label" for="notification">Notification</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="chat_support" name="chat_support" <?php if($list->chat_support){echo 'checked';}?>>
																						<label class="form-check-label" for="chat_support">Chat & Support</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="contact_us" name="contact_us" <?php if($list->contact_us){echo 'checked';}?>>
																						<label class="form-check-label" for="contact_us">Contact Us</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="beauty_tips" name="beauty_tips" <?php if($list->beauty_tips){echo 'checked';}?>>
																						<label class="form-check-label" for="beauty_tips">Beauty Tips</label>   
																					</div>
																				</td>
																				<td>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="product_rating_review" name="product_rating_review" <?php if($list->product_rating_review){echo 'checked';}?>>
																						<label class="form-check-label" for="product_rating_review">Product Rating & Review</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="seller_rating_review" name="seller_rating_review" <?php if($list->seller_rating_review){echo 'checked';}?>>
																						<label class="form-check-label" for="seller_rating_review">Seller Rating & Review</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="order_management" name="order_management" <?php if($list->order_management){echo 'checked';}?>>
																						<label class="form-check-label" for="order_management">Order Management</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="survey" name="survey" <?php if($list->survey){echo 'checked';}?>>
																						<label class="form-check-label" for="survey">Survey</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="site_feedback" name="site_feedback" <?php if($list->site_feedback){echo 'checked';}?>>
																						<label class="form-check-label" for="site_feedback">Site Feedback</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="hygine_page" name="hygine_page" <?php if($list->hygine_page){echo 'checked';}?>>
																						<label class="form-check-label" for="hygine_page">Hygine Page</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="shopping_music" name="shopping_music" <?php if($list->shopping_music){echo 'checked';}?>>
																						<label class="form-check-label" for="shopping_music">Shopping Music</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="social_media_account" name="social_media_account" <?php if($list->social_media_account){echo 'checked';}?>>
																						<label class="form-check-label" for="social_media_account">Social Media Account</label>   
																					</div>
																					<div class="form-check custom-checkbox checkbox-primary">
																						<input type="checkbox" class="form-check-input" id="order_tracking" name="order_tracking" <?php if($list->order_tracking){echo 'checked';}?>>
																						<label class="form-check-label" for="order_tracking">Order Tracking</label>   
																					</div>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="mt-2 mx-2">
																	<button type="reset" class="btn btn-light btn-sm" style="padding: 8px;">Reset</a>
																	<button type="submit" class="mx-1 btn btn-primary btn-sm" style="padding: 8px;">Submit</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
</div>

<?php require APPPATH . 'views/Auth/Footer.php'; ?>
<?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
<script>
	// Function to disable past dates
	function disablePastDates() {
		const today = new Date().toISOString().split('T')[0];
		document.getElementById('dateInput').min = today;
	}  
</script>
</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													