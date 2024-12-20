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
                                                            <th>View</th>
                                                            <th>View Image</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Sub-Category</th>
                                                            <th>Brand</th>
                                                            <th>Price</th>
														</tr>
													</thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($list as $item){
                                                            $category = $this->db->get_where('categories', array('id' => $item->category))->row();
                                                            $subcat = $this->db->get_where('sub_category', array('id' => $item->sub_category))->row();
                                                            $brand = $this->db->get_where('brand', array('id' => $item->brand_id))->row();
														?>
														<tr>
															<td><?= $srno; ?></td>
															<td><a class="btn btn-primary" href="<?= base_url($this->data->controller.'/'.$this->data->method.'/'.'ViewProduct/'.$item->id); ?>">View</a></td>
															<td>
																<button onclick="Viewimg('<?= $item->id?>')" class="btn btn-primary"><i class="fa fa-eye"></i> View Images</button>
															</td>
															<td><?= $item->name; ?></td>
															
															<td><?php if(!empty($category->name)){ echo $category->name; }else{echo "Category Not Found";}  ?></td>
															<td><?php if(!empty($subcat->name)){ echo $subcat->name; }else{echo "Sub-Category Not Found";}  ?></td>
															<td><?php if(!empty($brand->name)){ echo $brand->name; }else{echo "Brand Not Found";}  ?></td>
															<td><?= $item->off_price; ?></td>
															
															
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
					
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="ImgModal" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Product Images</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body" id="body">
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<!-- Modal -->
		<div class="modal fade" id="EditImage" tabdocumentation="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Product Image</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateImageData'); ?>" method="post" enctype="multipart/form-data" id="updateForm">
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
        <?php require APPPATH.'views/Auth/Footer.php';?>
        <?php require APPPATH.'views/Auth/JsLinks.php';?>
	</body>
</html>