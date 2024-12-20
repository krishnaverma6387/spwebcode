<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	
	<head>
		<?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
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
								<div class="card card-dashboard">
									<div class="card-header p-1">
										
										<center>
											<p style="font-size: 18px;">Product Name : <?php echo $list->name; ?></p>
											<h5>Stock: <span class="text-info"><?php echo $list->stock; ?></span></h5>
										</center>
									</div>
									<div class="card-content collpase show">
										<div class="card-body table-responsive">
											<div class="table-responsive">
												
											</div><br/>
											<div class="row">
												<div class="col-sm-7 table-responsive card"><br/>
													<table class="table table-bordered">
														<tbody>
															<tr>
																<th>Product Name :</th>
																<td><?php echo $list->name?></td>
															</tr>
															<tr>
																<th>Category :</th>
																<td><?php 
																	$catid=$list->category;
																	$category = $this->db->get_where('categories', array('id' => $catid))->row();
																	if(!empty($category->name)){ echo $category->name; }else{echo "Category Not Found";} 
																	
																	
																?></td>
															</tr>
															<tr>
																<th>Subcategory :</th>
																<td><?php 
																	$subcatid=$list->sub_category;
																	$subcat = $this->db->get_where('sub_category', array('id' => $subcatid))->row();
																	if(!empty($subcat->name)){ echo $subcat->name; }else{echo "Sub-Category Not Found";} 
																	
																	
																?></td>
															</tr>
															<tr>
																<th>Title :</th>
																<td><?php echo $list->title?></td>
															</tr>
															<tr>
																<th>Brand :</th>
																<td><?php 
																	$brandid=$list->brand_id;
																	$brand = $this->db->get_where('brand', array('id' => $brandid))->row();
																	if(!empty($brand->name)){ echo $brand->name; }else{echo "Brand Not Found";} 
																?>
																</td>
															</tr>
															<tr>
																<th>Subbrand :</th>
																<td><?php 
																	if(!empty($list->subbrand_id))
																	{
																		$subbrandid=$list->subbrand_id;
																		$subbrand = $this->db->get_where('sub_brand', array('id' => $subbrandid))->row();
																		if(!empty($subbrand->name)){ echo $subbrand->name; }else{echo "Sub-Brand Not Found";} 
																		
																	}
																	
																?>
																</td>
															</tr>
															
															<tr>
																<th>Offer Price(Rs.)  :</th>
																<td>Rs. <?= $list->off_price;?></td>
															</tr>
															<tr>
																<th>MRP(Rs.) :</th>
																<td>Rs. <?= $list->mrp;?></td>
															</tr>
															<tr>
																<th>Discount(%) :</th>
																<td><?= $list->discount;?>%</td>
															</tr>
															<tr>
																<th>CGST(%) :</th>
																<td><?= $list->cgst;?>%</td>
															</tr>
															<tr>
																<th>SGST(%) :</th>
																<td><?= $list->cgst;?>%</td>
															</tr>
															<tr>
																<th>GST(Rs.) :</th>
																<td><?= $list->gst;?></td>
															</tr>
															
															<tr>
																<th>HSN :</th>
																<td><?= $list->hsn;?></td>
															</tr>
															<tr>
																<th>Avaliability :</th>
																<td>
																	<?php 
																		if($list->availability == 'true')
																		{
																			echo "Yes";
																		}
																		else
																		{
																			echo "No";
																		}
																	?>
																</td>
															</tr>
															<tr>
																<th>Combo Eligible</th>
																<td>
																	<?php
																	if($list->combo_status == 'true')
																	{
																		echo "Yes";
																	}
																	else
																	{
																		echo "No";
																	}
																	?>
																</td>
															</tr>
															<tr>
																<th>Unit :</th>
																<td><?= $list->unit;?></td>
															</tr>
															<tr>
																<th>Weight :</th>
																<td><?= $list->weight;?></td>
															</tr>
															<tr>
																<th>Maximum Quantity :</th>
																<td><?= $list->max_qty;?></td>
															</tr>
															<tr>
																<th>Launch Time :</th>
																<td><?= $list->launch_time;?></td>
															</tr>
															<tr>
																<th>Date Time:</th>
																<td><?= $list->created_at;?></td>
															</tr>
															
														</tbody>
													</table><br/>
												</div>
												<div class="col-sm-5 card" >
													
													
													<div class="row"><br/>
														<div class="col-lg-12 " style="border:1px solid #dee2e6;"><br/>
															<p  class="mt-2"><b style="font-size: 18px;">Short Description:</b></p>
															<p><?= $list->short_desc;?></p>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12 " style="border:1px solid #dee2e6;">
															<p class="mt-2"><b style="font-size: 18px;">Product Tags:</b></p>
															<p><?= $list->tags;?></p>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
															<p  class="mt-2"><b style="font-size: 18px;">Long Description:</b></p>
															<p><?= $list->long_desc;?></p>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12 mt-2" style="border:1px solid #dee2e6;">
															<p  class="mt-2"><b style="font-size: 18px;">Product Images</b></p>
															<?php
																$icons=explode(',',$list->image1);	
																foreach($icons as $icon)
																{
																?>
																<a href="<?= base_url('uploads/product/') . $icon ?>" target="_blank" title="<?= $icon?>"><img  src="<?= base_url('uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>&nbsp&nbsp
																<?php
																}
															?>
															
														</div>
													</div>
												</div>
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
	</body>
	
</html>