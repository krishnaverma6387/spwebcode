<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<head>
		<?php require APPPATH.'views/Auth/CssLinks.php';?>
	</head>
	<body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
		<?php require 'Topbar.php'; ?>
		<?php require 'Sidebar.php'; ?>
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
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<div class="card card-dashboard">
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="">
												<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
													<thead>
														<tr>
															<th>#</th>
															<th>Signup Cashback</th>
															<th>Sign Up Rewards Point</th>
															<th>Referral Cashback</th>
															<th>Referral Reward Point</th>
															<th>Referral User Order Cashback</th>
															<th>Referral User Order Reward Point</th>
															<th>Referral User Min Order Value</th>
															<th>Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php $srno=1; foreach ($list as $item){ ?>
															<tr>
																<td><?= $srno; ?></td>
																
																<td><?= $item->signup_cashback; ?></td>
																<td><?= $item->signup_points; ?></td>
																<td><?= $item->ref_cashback; ?></td>
																<td><?= $item->ref_points; ?></td>
																<td><?= $item->ref_order_cashback; ?></td>
																<td><?= $item->ref_order_point; ?></td>
																<td><?= $item->ref_min_order; ?></td>
																<td><?= $item->created_at; ?></td>
																<td>
																	<div class="btn-group">
																		<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																	</div>
																</td>
															</tr>
														<?php $srno++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<br/>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		
		 <!--Modal Start-->
                    <div class="modal fade" id="EditModal">
                        <div class="modal-dialog">
                            <div class="modal-content border-primary">
                                <div class="modal-header bg-primary p-1">
                                    <h5 class="modal-title text-white">Edit <?=$this->data->key;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
                                    <div class="modal-body p-1">
                                        
                                    </div>
                                    <div class="modal-footer d-block p-1">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                        value="<?= $this->security->get_csrf_hash(); ?>" />
                                        <button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <!--Modal End-->
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>