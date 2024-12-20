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
												<div class="col-xl-12 col-lg-12">
													<div class="card">
														<div class="card-header">
															<h4 class="card-title">Website Contents</h4>
														</div>
														<div class="card-content">
															<div class="card-body">
																
																<ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" role="tab" aria-selected="true">NewsLetter</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" role="tab" aria-selected="false">Corner Popup</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33" role="tab" aria-selected="false">About Section</a>
																	</li>
																	<!--li class="nav-item">
																		<a class="nav-link" id="base-tab34" data-toggle="tab" aria-controls="tab34" href="#tab34" role="tab" aria-selected="false">Terms And Privacy</a>
																	</li-->
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab35" data-toggle="tab" aria-controls="tab35" href="#tab35" role="tab" aria-selected="false">Privacy And Cookies</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab36" data-toggle="tab" aria-controls="tab36" href="#tab36" role="tab" aria-selected="false">Intellectual Property</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab37" data-toggle="tab" aria-controls="tab37" href="#tab37" role="tab" aria-selected="false">Exchange Policy</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab38" data-toggle="tab" aria-controls="tab38" href="#tab38" role="tab" aria-selected="false">Refund Policy</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab39" data-toggle="tab" aria-controls="tab39" href="#tab39" role="tab" aria-selected="false">Return Policy</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab40" data-toggle="tab" aria-controls="tab40" href="#tab40" role="tab" aria-selected="false">Cancellation Policy</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab41" data-toggle="tab" aria-controls="tab41" href="#tab41" role="tab" aria-selected="false">Shipping Terms</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab42" data-toggle="tab" aria-controls="tab42" href="#tab42" role="tab" aria-selected="false">Coupon Redemption</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab43" data-toggle="tab" aria-controls="tab43" href="#tab43" role="tab" aria-selected="false">Terms & Condition</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab44" data-toggle="tab" aria-controls="tab44" href="#tab44" role="tab" aria-selected="false">Shopping Guide</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab45" data-toggle="tab" aria-controls="tab45" href="#tab45" role="tab" aria-selected="false">Choose Size</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab46" data-toggle="tab" aria-controls="tab46" href="#tab46" role="tab" aria-selected="false">Gift Wrap How does it works</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" id="base-tab47" data-toggle="tab" aria-controls="tab47" href="#tab47" role="tab" aria-selected="false">Updatw Website Details</a>
																	</li>
																</ul>
																<div class="tab-content px-1 pt-1">
																	<div class="tab-pane active" id="tab31" role="tabpanel" aria-labelledby="base-tab31">
																		
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add NewsLetter </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<th>Status</th>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Icon</th>
																											<th>Date</th>
																											<th>Action</th>
																										</tr>
																									</thead>
																									<tbody>
																										<?php $srno=1; foreach ($listnewsletter as $item){ ?>
																											<tr>
																												<td><?= $srno; ?></td>
																												<td>
																													<div class="custom-control custom-switch custom-control-inline">
																														<input type="checkbox" class="custom-control-input"  onchange="return StatusSingleActive(this,'<?= $this->data->table_newsletter; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
																														<label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																													</div>
																												</td>
																												<td><?= $item->title; ?></td>
																												<td><?= $item->description; ?></td>
																												<td><?php
																													if(!empty($item->icon))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?></td>
																												<td><?= $item->created_at; ?></td>
																												<td>
																													<div class="btn-group">
																														<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditNewsLetter('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																														<?php
																															if($srno != 1)
																															{
																															?>
																															<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table_newsletter; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																															<?php
																															}
																														?>
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
																	</div>
																	<div class="tab-pane" id="tab32" role="tabpanel" aria-labelledby="base-tab32">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddModalCornerPopup">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Corner Popup </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<th>Status</th>
																											<th>Icon</th>
																											<th>Date</th>
																											<th>Action</th>
																										</tr>
																									</thead>
																									<tbody>
																										<?php $srno=1; foreach ($listcornerpopup as $item){ ?>
																											<tr>
																												<td><?= $srno; ?></td>
																												<td>
																													<div class="custom-control custom-switch custom-control-inline">
																														<input type="checkbox" class="custom-control-input"  onchange="return StatusSingleActive(this,'<?= $this->data->table_cornerpopup; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-ids<?=$srno;?>">
																														<label class="custom-control-label mr-1" for="switch-ids<?=$srno;?>"></label>
																													</div>
																												</td>
																												<td><?php
																													if(!empty($item->icon))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?></td>
																												<td><?= $item->created_at; ?></td>
																												<td>
																													<div class="btn-group">
																														<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Editcornerpopup('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																														<?php
																															if($srno != 1)
																															{
																															?>
																															<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table_cornerpopup; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																															<?php
																															}
																														?>
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
																	</div>
																	<div class="tab-pane" id="tab33" role="tabpanel" aria-labelledby="base-tab33">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-header p-1">
																							<button class="btn btn-primary" data-toggle="modal" data-target="#AddModalAbout">
																							<i class="fa fa-plus-circle" aria-hidden="true"></i> Add About Details </button>
																						</div>
																						<div class="card-body table-responsive">
																							<div class="">
																								<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																									<thead>
																										<tr>
																											<th>#</th>
																											<th>Status</th>
																											<th>Name</th>
																											<th>Message</th>
																											<th>Icon</th>
																											<th>Main Banner</th>
																											<th>Image</th>
																											<th>Title</th>
																											<th>Description</th>
																											<th>Meta Title</th>
																											<th>Meta Description</th>
																											<th>Meta Keywords</th>
																											<th>Date</th>
																											<th>Action</th>
																										</tr>
																									</thead>
																									<tbody>
																										<?php $srno=1; foreach ($listabout as $item){ ?>
																											<tr>
																												<td><?= $srno; ?></td>
																												<td>
																													<div class="custom-control custom-switch custom-control-inline">
																														<input type="checkbox" class="custom-control-input"  onchange="return StatusSingleActive(this,'<?= $this->data->table_about; ?>','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-ida<?=$srno;?>">
																														<label class="custom-control-label mr-1" for="switch-ida<?=$srno;?>"></label>
																													</div>
																												</td>
																												<td><?= $item->name; ?></td>
																												<td><?= $item->message; ?></td>
																												<td><?php
																													if(!empty($item->icon))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->icon); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?></td>
																												<td><?php
																													if(!empty($item->mainicon))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->mainicon); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->mainicon); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?></td>
																												<td><?php
																													if(!empty($item->image))
																													{
																													?>
																													<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->image); ?>" style="height:50px;" /></a></label>
																													<?php
																													}
																												?></td>
																												<td><?= $item->title; ?></td>
																												<td><?= $item->description; ?></td>
																												<td><?= $item->meta_title; ?></td>
																												<td><?= $item->meta_description; ?></td>
																												<td><?= $item->meta_keyword; ?></td>
																												<td><?= $item->created_at; ?></td>
																												<td>
																													<div class="btn-group">
																														<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditAbout('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																														<?php
																															if($srno != 1)
																															{
																															?>
																															<a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'<?= $this->data->table_about; ?>','id','<?= $item->id; ?>','','')"> <i class="fa fa-trash"></i> </a>
																															<?php
																															}
																														?>
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
																	</div>
																	<div class="tab-pane" id="tab34" role="tabpanel" aria-labelledby="base-tab34">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-body table-responsive">
																							<table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
																								<thead>
																									<tr>
																										<th>#</th>
																										<th>Privacy & Cookies</th>
																										<th>Itellectual Property</th>
																										<th>Exchange Policy</th>
																										<th>Refund Policy</th>
																										<th>Return Policy</th>
																										<th>Cancellation Policy</th>
																										<th>Shipping & Delivery</th>
																										<th>Terms & Condition</th>
																										<th>Shopping Guide</th>
																										<th>Coupon Redemption</th>
																										<th>Choose Your Size</th>
																										<th>Date</th>
																										<th>Action</th>
																									</tr>
																								</thead>
																								<tbody>
																									<?php $srno=1; foreach ($listterms as $item){ ?>
																										<tr>
																											<td><?= $srno; ?></td>
																											
																											<td><?= $item->privacy_cookie; ?></td>
																											<td><?= $item->intellectual_proprty; ?></td>
																											<td><?= $item->exchange_policy; ?></td>
																											<td><?= $item->refund_policy; ?></td>
																											<td><?= $item->return_policy; ?></td>
																											<td><?= $item->cancellation_policy; ?></td>
																											<td><?= $item->shipping_terms; ?></td>
																											<td><?= $item->terms_condition; ?></td>
																											<td><?= $item->shopping_guide; ?></td>
																											<td><?= $item->coupon_redemption; ?></td>
																											<td><?= $item->choose_size; ?></td>
																											<td><?= $item->created_at; ?></td>
																											<td>
																												<div class="btn-group">
																													<a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="EditTerms('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
																												</div>
																											</td>
																										</tr>
																									<?php $srno++; } ?>
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab35" role="tabpanel" aria-labelledby="base-tab35">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<div class="row">
																								<div class="col-sm-12">
																									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatecookies">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="privacycookie" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->cookie_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->cookie_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->cookie_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Privacy & Cookies <span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="cookies" placeholder="Privacy & Cookies " required><?php echo $termsdata->privacy_cookie; ?></textarea>
																											<?php echo form_error("cookies", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtncookies"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpincookies" style="display:none;"></i></button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab36" role="tabpanel" aria-labelledby="base-tab36">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<div class="row">
																								<div class="col-sm-12">
																									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updateintellectual">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="intellectual" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->intellectual_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->intellectual_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->intellectual_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Intellectual Property <span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="intellectual" placeholder="Intellectual Property " required><?php echo $termsdata->intellectual_proprty; ?></textarea>
																											<?php echo form_error("intellectual", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtnintellectual"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinintellectual" style="display:none;"></i></button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab37" role="tabpanel" aria-labelledby="base-tab37">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<div class="row">
																								<div class="col-sm-12">
																									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updateexchange">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="exchangepolicy" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->exchange_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->exchange_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->exchange_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Exchange Policy <span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="exchangepolicy" placeholder="Exchange Policy " required><?php echo $termsdata->exchange_policy; ?></textarea>
																											<?php echo form_error("exchangepolicy", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtnexchange"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinexchange" style="display:none;"></i></button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab38" role="tabpanel" aria-labelledby="base-tab38">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<div class="row">
																								<div class="col-sm-12">
																									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updaterefund">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="refund" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->refund_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->refund_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->refund_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Refund Policy<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="refundpolicy" placeholder="Refund Policy" required><?php echo $termsdata->refund_policy; ?></textarea>
																											<?php echo form_error("refundpolicy", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtnrefund"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinrefund" style="display:none;"></i></button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab39" role="tabpanel" aria-labelledby="base-tab39">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<div class="row">
																								<div class="col-sm-12">
																									<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatereturn">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="return" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->return_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->return_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->return_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Return Policy<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="returnpolicy" placeholder="Return Policy" required><?php echo $termsdata->return_policy; ?></textarea>
																											<?php echo form_error("returnpolicy", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtnreturn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinreturn" style="display:none;"></i></button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab40" role="tabpanel" aria-labelledby="base-tab40">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatetermscancellation">
																								<div class="row">
																									<div class="col-sm-12">
																										
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="termscancellation" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->cancellation_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->cancellation_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->cancellation_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Cancellation Policy<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="cancellationpolicy" placeholder="Cancellation Policy" required><?php echo $termsdata->cancellation_policy; ?></textarea>
																											<?php echo form_error("cancellationpolicy", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										<button type="submit" class="btn btn-primary" id="updateBtnterm"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinterm" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab41" role="tabpanel" aria-labelledby="base-tab41">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updateshopping">
																								<div class="row">
																									<div class="col-sm-12">
																										
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="ShippingShopping" required />
																										
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->shipping_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->shipping_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->shipping_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Shipping & Delivery<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="shippingterms" placeholder="Shipping & Delivery" required><?php echo $termsdata->shipping_terms; ?></textarea>
																											<?php echo form_error("shippingterms", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<button type="submit" class="btn btn-primary" id="updateBtnshopping"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinshopping" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab42" role="tabpanel" aria-labelledby="base-tab42">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatecoupon">
																								<div class="row">
																									<div class="col-sm-12">
																										
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="CouponAndSize" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->coupon_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->coupon_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->coupon_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Coupon Redemption<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="couponredemption" placeholder="Coupon Redemption" required><?php echo $termsdata->coupon_redemption; ?></textarea>
																											<?php echo form_error("couponredemption", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										
																										<button type="submit" class="btn btn-primary" id="updateBtncoupon"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpincoupon" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab43" role="tabpanel" aria-labelledby="base-tab43">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatetermscondition">
																								<div class="row">
																									<div class="col-sm-12">
																										
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="termscondition" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->terms_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->terms_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->terms_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Terms & Condition<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="termscondition" placeholder="Terms & Condition" required><?php echo $termsdata->terms_condition; ?></textarea>
																											<?php echo form_error("termscondition", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<button type="submit" class="btn btn-primary" id="updateBtntermcon"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpintermcon" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab44" role="tabpanel" aria-labelledby="base-tab44">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updateshoppingguide">
																								<div class="row">
																									<div class="col-sm-12">
																										
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="ShoppingGuide" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->shopping_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->shopping_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->shopping_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Shopping Guide<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="shoppingguide" placeholder="Shopping Guide" required><?php echo $termsdata->shopping_guide; ?></textarea>
																											<?php echo form_error("shoppingguide", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
																										value="<?= $this->security->get_csrf_hash(); ?>" />
																										
																										<button type="submit" class="btn btn-primary" id="updateBtnshoppingguide"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinshoppingguide" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab45" role="tabpanel" aria-labelledby="base-tab45">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateDetailsTerms'); ?>" method="post" enctype="multipart/form-data" id="updatesize">
																								<div class="row">
																									<div class="col-sm-12">
																										<input type="hidden" name="id" value="<?php echo $termsdata->id; ?>" required />
																										<input type="hidden" name="type" value="ChooseSize" required />
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
																											<input type="text" class="form-control" required name="keyword" value="<?php echo $termsdata->size_keyword; ?>" placeholder="Meta Keywords"  >
																											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group p-0">
																											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
																											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $termsdata->size_title; ?>" placeholder="Meta Title"  >
																											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<div class="form-group">
																											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
																											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $termsdata->size_description; ?></textarea>
																											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										<div class="form-group">
																											<label class="col-form-label">Choose Your Size<span class="text-danger">*</span></label>
																											<textarea class="form-control summernote" name="choosesize" placeholder="Choose Your Size" required><?php echo $termsdata->choose_size; ?></textarea>
																											<?php echo form_error("choosesize", "<p class='text-danger' >", "</p>"); ?>
																										</div>
																										
																										<button type="submit" class="btn btn-primary" id="updateBtnsize"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpinsize" style="display:none;"></i></button>
																										
																									</div>
																									
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab46" role="tabpanel" aria-labelledby="base-tab46">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateGiftWrapTerms'); ?>" method="post" enctype="multipart/form-data" class="addForm">
																								<?php 
																									$manage_content=$this->db->get('manage_content')->row();
																									if(!empty($manage_content)){
																									?>
																									<div class="row">
																										<div class="col-sm-12">
																											<input type="hidden" name="id" value="<?=$manage_content->id?>" required />
																											<div class="form-group">
																												<label class="col-form-label">Gift Wrap Terms&COnditions <span class="text-danger">*</span></label>
																												<textarea class="form-control summernote" name="giftwrap_termscondition" required><?php echo base64_decode($manage_content->giftwrap_termscondition); ?></textarea>
																												<?php echo form_error("giftwrap_termscondition", "<p class='text-danger' >", "</p>"); ?>
																											</div>
																											<button type="submit" class="btn btn-primary addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner addSpin" style="display:none;"></i></button>
																										</div>
																									</div>
																								<?php } ?>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab47" role="tabpanel" aria-labelledby="base-tab47">
																		<div class="row match-height">
																			<div class="col-sm-12">
																				<div class="card card-dashboard">
																					<div class="card-content collpase show">
																						<div class="card-body table-responsive">
																							<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateWebsiteDetails'); ?>" method="post" enctype="multipart/form-data" class="addForm">
																								<?php 
																									$manage_content=$this->db->get('manage_content')->row();
																									if(!empty($manage_content)){
																									?>
																									<div class="row">
																										<div class="col-sm-12">
																											<input type="hidden" name="id" value="<?=$manage_content->id?>" required />
																											<div class="row">
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Webiste Name<span class="text-danger">*</span></label>
																														<input type="text" class="form-control" name="website_name" value="<?=$manage_content->website_name?>" required>
																														<?php echo form_error("website_name", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Webiste Email<span class="text-danger">*</span></label>
																														<input type="email" class="form-control" name="website_email" value="<?=$manage_content->website_email?>" required>
																														<?php echo form_error("website_email", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Webiste Mobile<span class="text-danger">*</span></label>
																														<input type="number" class="form-control" value="<?=$manage_content->website_mobile?>" name="website_mobile" required>
																														<?php echo form_error("website_mobile", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Webiste Link<span class="text-danger">*</span></label>
																														<input type="url" class="form-control" value="<?=$manage_content->website_link?>" name="website_link"  required>
																														<?php echo form_error("website_link", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Copyright Name<span class="text-danger">*</span></label>
																														<input type="text" class="form-control" value="<?=$manage_content->copyright_name?>" name="copyright_name"  required>
																														<?php echo form_error("copyright_name", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Copyright Link<span class="text-danger">*</span></label>
																														<input type="url" class="form-control" value="<?=$manage_content->copyright_link?>" name="copyright_link" required>
																														<?php echo form_error("copyright_link", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-12">
																													<div class="form-group">
																														<label class="col-form-label">Webiste Address<span class="text-danger">*</span></label>
																														<input type="text" class="form-control" name="website_address" value="<?=$manage_content->website_address?>" required>
																														<?php echo form_error("website_address", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Main Logo<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																														<input type="file" class="form-control dropify" data-height="100" name="website_main_logo" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $manage_content->website_main_logo. '') ?>" >
																														<?php echo form_error("website_main_logo", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																												<div class="col-sm-6">
																													<div class="form-group">
																														<label class="col-form-label">Royal Logo<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																														<input type="file" class="form-control dropify" data-height="100" name="website_royal_logo" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $manage_content->website_royal_logo. '') ?>" >
																														<?php echo form_error("website_royal_logo", "<p class='text-danger' >", "</p>"); ?>
																													</div>
																												</div>
																											</div>
																											<button type="submit" class="btn btn-primary addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner addSpin" style="display:none;"></i></button>
																											</div>
																												</div>
																											<?php } ?>
																							</form>
																						</div>
																					</div>
																				</div>
																				<br/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
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
	<div class="modal fade" id="EditModalNewsLetter">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Newsletter</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateNewsletter'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
	
	<!--Modal Start-->
	<div class="modal fade" id="Editcornerpopup">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Corner Popup</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateCornerPopup'); ?>" method="post" enctype="multipart/form-data" id="updateForm2">
					<div class="modal-body p-1">
						
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="updateBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin2" style="display:none;"></i></button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	<!--Modal Start-->
	<div class="modal fade" id="EditAbout">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit About Section</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateAbout'); ?>" method="post" enctype="multipart/form-data" id="uploadForm">
					<div class="modal-body p-1">
						
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="addBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin3" style="display:none;"></i></button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<!--Modal End-->
	<!--Modal Start-->
	<div class="modal fade" id="EditTerms">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Edit Terms & Privacy And Other Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateTermsDetails'); ?>" method="post" enctype="multipart/form-data" id="updateForm3">
					<div class="modal-body p-1">
						
					</div>
					<div class="modal-footer d-block p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						<button type="submit" class="btn btn-primary" id="updateBtn3"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin3" style="display:none;"></i></button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	<!--Modal Start-->
	<div class="modal fade" id="AddModal">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add NewsLetter</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddNewsLetter'); ?>" method="post" enctype="multipart/form-data" id="addForm">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						
						<div class="form-group p-0">
							<label class="col-form-label">Newsletter Title<span class="text-danger"></span></label>
							<input type="text" class="form-control text-capitalize" name="title" placeholder="Title"  >
							<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
						</div>
						
						<div class="form-group">
							<label class="col-form-label">NewsLetter Description <span class="text-danger"></span></label>
							<textarea class="form-control summernote" name="description" placeholder="Description" ></textarea>
							<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
						</div>
						
						<div class="form-group">
							<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" required name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
							<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	<!--Modal Start-->
	<div class="modal fade" id="AddModalCornerPopup">
		<div class="modal-dialog">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add Corner Popup</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddCornerPopup'); ?>" method="post" enctype="multipart/form-data" id="addForm2">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						<input type="hidden" name="text"
						value="text" />
						
						<div class="form-group">
							<label class="col-form-label"> Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
							<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Banner" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
							<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	
	
	<!--Modal Start-->
	<div class="modal fade" id="AddModalAbout">
		<div class="modal-dialog modal-lg">
			<div class="modal-content border-primary">
				<div class="modal-header bg-primary p-1">
					<h5 class="modal-title text-white">Add About Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/AddAbout'); ?>" method="post" enctype="multipart/form-data" id="addForm3">
					<div class="modal-body p-1">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
						value="<?= $this->security->get_csrf_hash(); ?>" />
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group p-0">
									<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
									<input type="text" class="form-control" required name="keyword"  placeholder="Meta Keywords"  >
									<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group p-0">
									<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
									<input type="text" class="form-control text-capitalize" required name="metatitle" placeholder="Meta Title"  >
									<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								<div class="form-group">
									<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
									<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ></textarea>
									<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group p-0">
									<label class="col-form-label">Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize" name="name" placeholder="Name" required >
									<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								<div class="form-group">
									<label class="col-form-label">Message <span class="text-danger">*</span></label>
									<textarea class="form-control summernote" name="message" placeholder="Message" required></textarea>
									<?php echo form_error("message", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label"> Banner <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
									<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label">Main Banner <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="mainicon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
									<?php echo form_error("mainicon", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
						</div>
						<hr/>
						<h3 class="text-danger">Text + Image component</h3>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group p-0">
									<label class="col-form-label">Title<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize" name="title" placeholder="Title" required >
									<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<textarea class="form-control summernote" name="description"  required></textarea>
									<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label class="col-form-label">Image<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
									<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer d-block p-1">
						<button type="submit" class="btn btn-primary" id="addBtnn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpinn" style="display:none;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal End-->
	<div id="loader"></div>
	
	<?php require APPPATH.'views/Auth/Footer.php';?>
	<?php require APPPATH.'views/Auth/JsLinks.php';?>
	
	<script>
		
		
		function EditNewsLetter(id) {
			$("#EditModalNewsLetter").modal("show");
			$("#EditModalNewsLetter .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditModalNewsLetter .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditNewsLetter/') ?>" + id);
		}
		
		function Editcornerpopup(id) {
			$("#Editcornerpopup").modal("show");
			$("#Editcornerpopup .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#Editcornerpopup .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditCornerPopup/') ?>" + id);
		}
		
		function EditAbout(id) {
			$("#EditAbout").modal("show");
			$("#EditAbout .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditAbout .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditAbout/') ?>" + id);
		}
		
		function EditTerms(id) {
			$("#EditTerms").modal("show");
			$("#EditTerms .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
			$("#EditTerms .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditTerms/') ?>" + id);
		}
		
		
		function StatusSingleActive(e, table, where_column, where_value, column) {
			var status = true;
			var check = $(e).prop("checked");
			if (check) {
				swal({
					title: "Are you sure?",
					text: "You want to activate this !",
					icon: "warning",
					buttons: true,
					dangerMode: true
					}).then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
							type: "post",
							data: {
								'table': table,
								'column': column,
								'value': 'true',
								'where_column': where_column,
								'where_value': where_value
							},
							success: function(response) {
								swal("Activated successfully !", {
									icon: "success",
								});
								window.setTimeout(function() {
									location.reload();
								}, 1000);
							}
						});
						} else {
						window.setTimeout(function() {
							location.reload();
						}, 1000);
					}
				});
				} else {
				swal({
					title: "Are you sure?",
					text: "You want to deactivate this !",
					icon: "warning",
					buttons: true,
					dangerMode: true
					}).then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "<?php echo base_url("Auth/StatusSingleActive"); ?>",
							type: "post",
							data: {
								'table': table,
								'column': column,
								'value': 'false',
								'where_column': where_column,
								'where_value': where_value
							},
							success: function(response) {
								swal("Deactivated successfully !", {
									icon: "success",
								});
								window.setTimeout(function() {
									location.reload();
								}, 1000);
							}
						});
						} else {
						window.setTimeout(function() {
							location.reload();
						}, 1000);
					}
				});
			}
			return status;
		}
		
		
		$('#updatecookies').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtncookies');
			var spinAction = $('#updateSpincookies');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		
		$('#updateintellectual').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnintellectual');
			var spinAction = $('#updateSpinintellectual');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		
		$('#updateexchange').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnexchange');
			var spinAction = $('#updateSpinexchange');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		$('#updaterefund').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnrefund');
			var spinAction = $('#updateSpinrefund');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		$('#updatereturn').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnreturn');
			var spinAction = $('#updateSpinreturn');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		
		$('#updatetermscancellation').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnterm');
			var spinAction = $('#updateSpinterm');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		$('#updateshopping').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtnshopping');
			var spinAction = $('#updateSpinshopping');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
						$(spinAction).show();
					},
					success: function(response) {
						console.log(response);
						var response = JSON.parse(response);
						$(btnAction).removeAttr("disabled");
						$(spinAction).hide();
						if (response[0].res == 'success') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "success");
							if (response[0].redirect) {
								window.setTimeout(function() {
									window.location.href = response[0].redirect;
								}, 1000);
								} else {
								window.setTimeout(function() {
									window.location.reload();
								}, 1000);
							}
							} else if (response[0].res == 'error') {
							$('.notifyjs-wrapper').remove();
							$.notify("" + response[0].msg + "", "error");
						}
					},
					error: function() {
						window.location.reload();
					}
				});
			}
		});
		$('#updatecoupon').on('submit', function(e) {
			var formAction = $(this);
			var btnAction = $('#updateBtncoupon');
			var spinAction = $('#updateSpincoupon');
			e.preventDefault();
			var data = new FormData(this);
			if ($(formAction).parsley().isValid() == true) {
				$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					console.log(response);
					var response = JSON.parse(response);
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if (response[0].redirect) {
					window.setTimeout(function() {
					window.location.href = response[0].redirect;
					}, 1000);
					} else {
					window.setTimeout(function() {
					window.location.reload();
					}, 1000);
					}
					} else if (response[0].res == 'error') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
					}
					},
					error: function() {
					window.location.reload();
					}
					});
					}
					});
					
					$('#updatetermscondition').on('submit', function(e) {
					var formAction = $(this);
					var btnAction = $('#updateBtntermcon');
					var spinAction = $('#updateSpintermcon');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
					$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
					$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					console.log(response);
					var response = JSON.parse(response);
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if (response[0].redirect) {
					window.setTimeout(function() {
					window.location.href = response[0].redirect;
					}, 1000);
					} else {
					window.setTimeout(function() {
					window.location.reload();
					}, 1000);
					}
					} else if (response[0].res == 'error') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
					}
					},
					error: function() {
					window.location.reload();
					}
					});
					}
					});
					
					$('#updateshoppingguide').on('submit', function(e) {
					var formAction = $(this);
					var btnAction = $('#updateBtnshoppingguide');
					var spinAction = $('#updateSpinshoppingguide');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
					$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
					$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					console.log(response);
					var response = JSON.parse(response);
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if (response[0].redirect) {
					window.setTimeout(function() {
					window.location.href = response[0].redirect;
					}, 1000);
					} else {
					window.setTimeout(function() {
					window.location.reload();
					}, 1000);
					}
					} else if (response[0].res == 'error') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
					}
					},
					error: function() {
					window.location.reload();
					}
					});
					}
					});
					
					$('#updatesize').on('submit', function(e) {
					var formAction = $(this);
					var btnAction = $('#updateBtnsize');
					var spinAction = $('#updateSpinsize');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
					$.ajax({
					type: 'POST',
					url: $(formAction).attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
					$(btnAction).attr("disabled", true);
					$(spinAction).show();
					},
					success: function(response) {
					console.log(response);
					var response = JSON.parse(response);
					$(btnAction).removeAttr("disabled");
					$(spinAction).hide();
					if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if (response[0].redirect) {
					window.setTimeout(function() {
					window.location.href = response[0].redirect;
					}, 1000);
					} else {
					window.setTimeout(function() {
					window.location.reload();
					}, 1000);
					}
					} else if (response[0].res == 'error') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
					}
					},
					error: function() {
					window.location.reload();
					}
					});
					}
					});
					</script>
					</body>
					</html>																																								