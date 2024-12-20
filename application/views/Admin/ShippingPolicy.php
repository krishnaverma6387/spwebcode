<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
		<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
		<style>
			.btn-toggle {
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
			
			.fa-minus {
            background-color: #df1940cc;
			}
			
			.fa-plus {
            background-color: #00B5B8;
			}
			
			.sub-heading {
            font-size: 16px;
			}
			
			.step-trigger {
            background: unset !important;
            padding: 6px !important;
			}
			
			.form-control {
            height: 30px;
            padding: 3px;
			}
			
			.col-form-label {
            padding-top: calc(0.75rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 0.5;
			}
			
			.disable {
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
								<form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post">
									<div class="row">
										<div class="col-sm-12">
											<div class="card card-dashboard">
												<div class="card-content collpase show">
													<div class="card-body py-1 px-0 table-responsive">
														<div class="offcanvas-body">
															<div class="container-fluid">
																
																
																
																
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label for="exampleFormControlTextarea1"><h3>SHIPPING TITLE</h3></label>
																			<textarea id="summernoteEditor" name="shipping_title" class="form-control summernote">
																				<?php echo !empty($list->shipping_title) ? $list->shipping_title : '' ?>
																			</textarea>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label for="exampleFormControlTextarea1"><h3>SHIPPING DESCRIPTION</h3></label>
																			<textarea id="summernoteEditor" name="shipping_description" class="form-control summernote">
																				<?php echo !empty($list->shipping_description) ? $list->shipping_description : '' ?>
																			</textarea>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label for="exampleFormControlTextarea1"><h3>SHIPPING KEYWORD</h3></label>
																			<textarea id="summernoteEditor" name="shipping_keyword" class="form-control summernote">
																				<?php echo !empty($list->shipping_keyword) ? $list->shipping_keyword : '' ?>
																			</textarea>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label for="exampleFormControlTextarea1"><h3>SHIPPING POLICY</h3></label>
																			<textarea id="summernoteEditor" name="shipping_policy" class="form-control summernote">
																				<?php echo !empty($list->shipping_policy) ? $list->shipping_policy : '' ?>
																			</textarea>
																		</div>
																	</div>
																</div>
																<div class="mt-2">
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