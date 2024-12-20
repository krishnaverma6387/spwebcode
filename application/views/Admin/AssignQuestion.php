<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
	</head>
    <body class="vertical-layout vertical-menu 1-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
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
                                    <div class="card-header p-1">
                                        
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body ">
											<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method .'/AddQuestion'); ?>" method="post" enctype="multipart/form-data" id="addForm">
												<input type="hidden" value="<?= $quizlist->id?>" name="quizid" required>
												<div class="">
													<div class="row mt-2">
														<div class="col-sm-3">
															<div class="form-group">
																<label >Question<span class="text-danger"> *</span></label>
																<input type="text" name="question" class="form-control " required>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Question Type<span class="text-danger"> *</span></label>
																<select name="questiontype" class="form-control " id="questiontype" required>
																	<option selected disabled>--- Select ---</option>
																	<option value="single"> Single </option>
																	<option value="multiple"> Multiple </option>
																</select>
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 1<span class="text-danger"> *</span></label>
																<input type="text" name="opt1" class="form-control " required>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 2<span class="text-danger"> *</span></label>
																<input type="text" name="opt2" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 3<span class="text-danger"> </span></label>
																<input type="text" name="opt3" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 4<span class="text-danger"> </span></label>
																<input type="text" name="opt4" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 5<span class="text-danger"> </span></label>
																<input type="text" name="opt5" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 6<span class="text-danger"> </span></label>
																<input type="text" name="opt6" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 7<span class="text-danger"> </span></label>
																<input type="text" name="opt7" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 8<span class="text-danger"> </span></label>
																<input type="text" name="opt8" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 9<span class="text-danger"> </span></label>
																<input type="text" name="opt9" class="form-control " >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label >Option 10<span class="text-danger"> </span></label>
																<input type="text" name="opt10" class="form-control " >
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 1 image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt1image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" required>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 2 image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt2image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 3 image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt3image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 4 image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt4image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 5 image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt5image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 6 image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt6image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 7 image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt7image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 8 image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt8image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 9 image <span class="text-danger"> <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt9image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 10 image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small> </span></label>
																<input type="file" class="form-control dropify" data-height="100" name="opt10image" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" >
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 1 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt1desc" class="form-control " required></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 2 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt2desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 3 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt3desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 4 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt4desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 5 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt5desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 6 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt6desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 7 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt7desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 8 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt8desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 9 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt9desc" class="form-control " ></textarea>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="form-group">
																<label>Option 10 Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="opt10desc" class="form-control " ></textarea>
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-sm-12">
															<div class="form-group">
																<label>Description<span class="text-danger"> *</span></label>
																<textarea type="text" name="description" class="form-control " required></textarea>
															</div>
														</div>
														
													</div>
												</div>
												<button type="submit" class="btn btn-primary mt-2" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-header p-1">
										
									</div>
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Question</th>
                                                            <th>Opt1</th>
                                                            <th>Opt2</th>
                                                            <th>Opt3</th>
                                                            <th>Opt4</th>
                                                            <th>Opt5</th>
                                                            <th>Opt6</th>
                                                            <th>Opt7</th>
                                                            <th>Opt8</th>
                                                            <th>Opt9</th>
                                                            <th>Opt10</th>
                                                            <th>Opt 1 Desc</th>
                                                            <th>Opt 2 Desc</th>
                                                            <th>Opt 3 Desc</th>
                                                            <th>Opt 4 Desc</th>
                                                            <th>Opt 5 Desc</th>
                                                            <th>Opt 6 Desc</th>
                                                            <th>Opt 7 Desc</th>
                                                            <th>Opt 8 Desc</th>
                                                            <th>Opt 9 Desc</th>
                                                            <th>Opt 10 Desc</th>
                                                            <th>Opt 1 Image</th>
                                                            <th>Opt 2 Image</th>
                                                            <th>Opt 3 Image</th>
                                                            <th>Opt 4 Image</th>
                                                            <th>Opt 5 Image</th>
                                                            <th>Opt 6 Image</th>
                                                            <th>Opt 7 Image</th>
                                                            <th>Opt 8 Image</th>
                                                            <th>Opt 9 Image</th>
                                                            <th>Opt 10 Image</th>
															
                                                            <th>Description</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($questionlist as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"  onchange="return StatusQuiz(this,'quiz_question','id','<?= $item->id; ?>','is_status')"  <?php if($item->is_status == 'true') { echo 'checked'; } ?> id="switch-id<?=$srno;?>">
                                                                        <label class="custom-control-label mr-1" for="switch-id<?=$srno;?>"></label>
																	</div>
																</td>
                                                                <td><?= $item->question; ?></td>
                                                                <td><?= $item->opt1; ?></td>
                                                                <td><?= $item->opt2; ?></td>
                                                                <td><?= $item->opt3; ?></td>
                                                                <td><?= $item->opt4; ?></td>
                                                                <td><?= $item->opt5; ?></td>
                                                                <td><?= $item->opt6; ?></td>
                                                                <td><?= $item->opt7; ?></td>
                                                                <td><?= $item->opt8; ?></td>
                                                                <td><?= $item->opt9; ?></td>
                                                                <td><?= $item->opt10; ?></td>
                                                                <td><?= $item->opt1desc; ?></td>
                                                                <td><?= $item->opt2desc; ?></td>
                                                                <td><?= $item->opt3desc; ?></td>
                                                                <td><?= $item->opt4desc; ?></td>
                                                                <td><?= $item->opt5desc; ?></td>
                                                                <td><?= $item->opt6desc; ?></td>
                                                                <td><?= $item->opt7desc; ?></td>
                                                                <td><?= $item->opt8desc; ?></td>
                                                                <td><?= $item->opt9desc; ?></td>
                                                                <td><?= $item->opt10desc; ?></td>
																<td>
																	<?php
																		if(!empty($item->opt1image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt1image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt1image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt2image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt2image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt2image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt3image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt3image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt3image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt4image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt4image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt4image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt5image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt5image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt5image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt6image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt6image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt6image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt7image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt7image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt7image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt8image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt8image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt8image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt9image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt9image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt9image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
																<td>
																	<?php
																		if(!empty($item->opt10image))
																		{
																		?>
																		<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt10image); ?>" target="_blank"><img src="<?= base_url('uploads/'.$this->data->folder.'/'.$item->opt10image); ?>" style="height:50px;" /></a></label>
																		<?php
																		}
																	?>
																</td>
                                                                <td><?= $item->description; ?></td>
                                                                <td><?= $item->created_at; ?></td>
																
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="javascript:void(0);"  class="btn btn-sm btn-outline-danger waves-effect waves-light" onclick="return Delete(this,'quiz_question','id','<?= $item->id; ?>','<?= $this->data->folder; ?>','<?= $this->data->file_column; ?>')"> <i class="fa fa-trash"></i> </a>
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
							</div>
						</div>
					</section>
				
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
				
				
				</div>
			</div>
		</div>
		<?php require APPPATH.'views/Auth/Footer.php';?>
		<?php require APPPATH.'views/Auth/JsLinks.php';?>
		
		
	</body>
</html>	