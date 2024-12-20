<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH.'views/Auth/CssLinks.php';?>
	</head>
	<body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
		<?php  require APPPATH.'views/Admin/Topbar.php';?>
		<?php  require APPPATH.'views/Admin/Sidebar.php';?>
		<div class="app-content content">
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-header row">
					<div class="content-header-left col-12 mb-2 mt-1">
						<div class="breadcrumbs-top">
							<h5 class="content-header-title float-left pr-1 mb-0"><?=$this->data->pageTitle;?></h5>
							<div class="breadcrumb-wrapper d-none d-sm-block">
								<ol class="breadcrumb p-0 mb-0 pl-1">
									<li class="breadcrumb-item">
										<a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
									<li class="breadcrumb-item">
										<a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->pageTitle;?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
					<section id="user-profile-cards-with-stats" class="row mt-2">
						<div class="col-sm-5">
							<div class="card profile-card-with-stats">
								<div class="text-center">
									<div class="card-body">
									<?php
										if(!empty($profile->icon))
										{
										?>
										<img src="<?=base_url();?>uploads/profile_pic/<?=$profile->icon;?>" class="w-100  height-100" alt="Card image">
										<?php
										}
										else
										{
										?>
										<img class="brand-logo img-fluid" style="height:49px;margin-top:-12px;"  src="<?=base_url($this->data->appTempletePath);?>images/logo/logo.png">
										<?php
										}
											?>
									</div>
									<div class="card-body">
										<h4 class="card-title"><?=$profile->name;?></h4>
										<h6 class="card-subtitle text-muted"><?=$profile->mobile;?></h6>
										<br>
										<ul class="list-inline list-inline-pipe">
											<li><?=$profile->email;?></li>
										</ul>
										<ul class="list-inline list-inline-pipe">
											<li>Visit Count </li>
											<li> <?=$profile->visit_count;?></li>
										</ul>
										<ul class="list-inline list-inline-pipe">
											<li>Login Time </li>
											<li> <?=$profile->login_at;?></li>
										</ul>
										<ul class="list-inline list-inline-pipe">
											<li>Logout Time </li>
											<li> <?=$profile->logout_at;?></li>
										</ul>
										
										
									</div>
									
									<div class="card-body">
										<button type="button" class="btn btn-outline-danger btn-md mr-1" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> Logout</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="card profile-card-with-stats">
								<div class="">
									<div class="card-body">
										<h1 class="card-title">Login Activities</h1>
										<hr>
										<div class="table-responsive">
											<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
												<thead>
													<tr>
														<th>#</th>
														<th>Username</th>
														<th>IP</th>
														<th>Device</th>
														<th>OS</th>
														<th>Browser</th>
														<th>Computer</th>
														<th>MAC</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<?php $srno=1; foreach ($activitiesList as $item){ ?>
														<tr>
															<td><?= $srno; ?></td>
															<td><?= $item->user->name; ?></td>
															<td><?= $item->ip; ?></td>
															<td><?= $item->device; ?></td>
															<td><?= $item->os; ?></td>
															<td><?= $item->browser; ?></td>
															<td><?= $item->computer_name; ?></td>
															<td><?= $item->mac; ?></td>
															<td><?= $item->created_at	; ?></td>
														</tr>
													<?php $srno++; } ?>
												</tbody>
											</table>
										</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		</div>
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>