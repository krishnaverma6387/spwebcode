<?php defined("BASEPATH") or exit("No direct scripts allowed here"); ?>
<?php
	if (isset($action))
	{
		switch ($action)   
		{
			case "VendorDetails":
		?> 
		<div class="row">
			<div class="col-sm-12"> 
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered border-top mb-0 mt-5">
								<tr>
									<th colspan="2">Vendor Details</th>
								</tr>
								<tr style="text-align:justify">
									<th>Vendor Name</th>
									<th><?= $list->name ?></th>
								</tr>
								<tr style="text-align:justify">
									<th>Vendor Mobile No.</th>
									<th><?= $list->mobile ?></th>
								</tr>
								<tr style="text-align:justify">
									<th>Vendor EmailId</th>
									<th><?= $list->email ?></th>
								</tr>
								<tr style="text-align:justify"> 
									<th>On-Board Date</th>
									<th><?= $list->created_at ?></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
			break;
			case "ExpertDetails";
		?>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered border-top mb-0 mt-5">
								<tr>
									<th colspan="2">Fashion Expert Details</th>
								</tr>
								<tr style="text-align:justify">
									<th>Expert Name</th>
									<th><?= $list->name ?></th>
								</tr>
								<tr style="text-align:justify">
									<th>Expert Mobile No.</th>
									<th><?= $list->mobile ?></th>
								</tr>
								<tr style="text-align:justify">
									<th>Expert EmailId</th>
									<th><?= $list->email ?></th>
								</tr>
								<tr style="text-align:justify">
									<th>On-Board Date</th>
									<th><?= $list->created_at ?></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
			break;
			case "UserDetails":
		?>
		<?php if(!empty($list)){?>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						
						<div class="card-body">
							<div class="table-responsive">
								
								<table class="table table-bordered border-top mb-0 mt-5">
									
									<tr>
										<th colspan="2">User Details</th>
									</tr>
									<tr style="text-align:justify">
										<th>User Name</th>
										<th><?= $list->name ?></th>
									</tr>
									<tr style="text-align:justify">
										<th>User Mobile No.</th>
										<th><?= $list->mobile ?></th>
									</tr>
									<tr style="text-align:justify">
										<th>User Email-Id</th>
										<th><?= $list->email ?></th>
									</tr>
									<tr style="text-align:justify">
										<th>On-Board Date</th>
										<th><?= $list->created_at ?></th>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?> 
		<?php   
			break; 
			
			
			
		// EditManageGetApp 
		case 'EditManageGetApp':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />

		<div class="form-group">
			<label class="col-form-label">GetApp Title<span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="app_title" class="form-control summernote">
				<?php echo $list[0]->app_title; ?>	
			</textarea>
		</div>
		
		
		<div class="form-group">
			<label class="col-form-label">GetApp Description <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="app_description" class="form-control summernote">
				<?php echo $list[0]->app_description; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">GetApp Keyword <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="app_keyword" class="form-control summernote">
				<?php echo $list[0]->app_keyword; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">GetApp Heading <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="app_heading" class="form-control summernote">
				<?php echo $list[0]->app_heading; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Scanner Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
        <?php
            break;
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			case 'EditManageAboutUs':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group">
			<label class="col-form-label">Meta Title <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->meta_title; ?>" class="form-control" name="meta_title" placeholder="Meta Title" required>
		</div>
		
		
		<div class="form-group">
			<label class="col-form-label">Meta Description <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="meta_description" class="form-control summernote">
				<?php echo $list[0]->meta_description; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Meta Keyword <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="meta_keyword" class="form-control summernote">
				<?php echo $list[0]->meta_keyword; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" class="form-control" value="<?php echo $list[0]->title1; ?>" name="title1" placeholder="Title1" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
			<input type="text" class="form-control" value="<?php echo $list[0]->title2; ?>" name="title2" placeholder="Title2" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose Image2" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image2 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Image3 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image3" Title="Choose Image3" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image3 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title3; ?>" class="form-control" name="title3" placeholder="Title3" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc3" class="form-control summernote">
				<?php echo $list[0]->desc3; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc4" class="form-control summernote">
				<?php echo $list[0]->desc4; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Founder Name <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title4; ?>" class="form-control" name="title4" placeholder="Founder Name" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title5 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title5; ?>" class="form-control" name="title5" placeholder="Title5" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description5 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc5" class="form-control summernote">
				<?php echo $list[0]->desc5; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title6 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title6; ?>" class="form-control" name="title6" placeholder="Title6" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description6 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc6" class="form-control summernote">
				<?php echo $list[0]->desc6; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image4 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image4" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image4 . '') ?>">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title7 <span class="text-danger">*</span></label>
			<input type="text"  value="<?php echo $list[0]->title7; ?>" class="form-control" name="title7" placeholder="Title7" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description7 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc7" class="form-control summernote">
				<?php echo $list[0]->desc7; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title8 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title8; ?>" class="form-control" name="title8" placeholder="Title8" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description8 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc8" class="form-control summernote">
				<?php echo $list[0]->desc8; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title9 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title9; ?>" class="form-control" name="title9" placeholder="Title9" required>
		</div>
		
		
		<div class="form-group">
			<label class="col-form-label">Image5 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image5" Title="Choose Image5" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image5 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Description9 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc9" class="form-control summernote">
				<?php echo $list[0]->desc9; ?>	
			</textarea>
		</div>
        <?php
            break;
			
			
			
			// EditManageRewards 
			case 'EditManageRewards':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group">
			<label class="col-form-label">Reward Title<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->reward_title; ?>" class="form-control " name="reward_title" placeholder="Reward Title">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Reward Description<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->reward_description; ?>" class="form-control " name="reward_description" placeholder="Reward Description">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Reward Keyword<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->reward_keyword; ?>" class="form-control " name="reward_keyword" placeholder="Reward Keyword">
		</div>
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title1; ?>" class="form-control" name="title1" placeholder="Title1" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Subtitle1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->subtitle1; ?>" class="form-control" name="subtitle1" placeholder="Subtitle1" required>
		</div>
		
		
		<div class="form-group">
			<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title2; ?>" class="form-control" name="title2" placeholder="Title2" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title3; ?>" class="form-control" name="title3" placeholder="Title3" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title4; ?>" class="form-control" name="title4" placeholder="Title4" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc3" class="form-control summernote">
				<?php echo $list[0]->desc3; ?>
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title5 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title5; ?>" class="form-control" name="title5" placeholder="Title5" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc4" class="form-control summernote">
				<?php echo $list[0]->desc4; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title6 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title6; ?>" class="form-control" name="title6" placeholder="Title6" required>
		</div>
		<?php
            break;
			
			// start here ManageDisclaimer 
			case 'EditManageDisclaimer':
			
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		
		<div class="form-group">
			<label class="col-form-label">Disclaimer Title<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->disclaimer_title; ?>" class="form-control " name="disclaimer_title" placeholder="Disclaimer Title">
		</div>
		<div class="form-group">
			<label class="col-form-label">Disclaimer Description<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->disclaimer_description; ?>" class="form-control " name="disclaimer_description" placeholder="Disclaimer Description">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Disclaimer Keyword<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->disclaimer_keyword; ?>" class="form-control " name="disclaimer_keyword" placeholder="Disclaimer Keyword">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title1; ?>" class="form-control" name="title1" placeholder="Title1" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title2; ?>" class="form-control" name="title2" placeholder="Title2" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title3; ?>" class="form-control" name="title3" placeholder="Title3" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title4; ?>" class="form-control" name="title4" placeholder="Title4" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc3" class="form-control summernote">
				<?php echo $list[0]->desc3; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title5 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title5; ?>" class="form-control" name="title5" placeholder="Title5" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc4" class="form-control summernote">
				<?php echo $list[0]->desc4; ?>		
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title6 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title6; ?>" class="form-control" name="title6" placeholder="Title6" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description5 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc5" class="form-control summernote">
				<?php echo $list[0]->desc5; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description6 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc6" class="form-control summernote">
				<?php echo $list[0]->desc6; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description7 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc7" class="form-control summernote">
				<?php echo $list[0]->desc7; ?>		
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose Image2" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image2 . '') ?>">
		</div>
		
		<?php
			break;
			
			
			
			
			
			
			// EditShoppingGuid 
			case 'EditShoppingGuid':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group">
			<label class="col-form-label">Shopping Guide Title<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_title; ?>" class="form-control" name="guide_title" placeholder="Shopping Guide Title" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Shopping Guide Description<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_description; ?>" class="form-control" name="guide_description" placeholder="Shopping Guide Description" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Shopping Guide Keyword<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_keyword; ?>" class="form-control" name="guide_keyword" placeholder="Shopping Guide Keyword" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title1; ?>" class="form-control" name="title1" placeholder="Title1" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Subtitle1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->subtitle1; ?>" class="form-control" name="subtitle1" placeholder="Subtitle1" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Step1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->step1; ?>" class="form-control" name="step1" placeholder="Step1" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Step2 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->step2; ?>" class="form-control" name="step2" placeholder="Step2" required>
		</div>
		
		
		<div class="form-group">
			<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title2; ?>" class="form-control" name="title2" placeholder="Title2" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose Image2" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image2 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Step3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->step3; ?>" class="form-control" name="step3" placeholder="Step3" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title3; ?>" class="form-control" name="title3" placeholder="Title3" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc3" class="form-control summernote">
				<?php echo $list[0]->desc3; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image3 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image3" Title="Choose Image3" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image3 . '') ?>">
		</div>
		
		
		
		<div class="form-group">
			<label class="col-form-label">Step4 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->step4; ?>" class="form-control" name="step4" placeholder="Step4" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title4; ?>" class="form-control" name="title4" placeholder="Title4" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc4" class="form-control summernote">
				<?php echo $list[0]->desc4; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image4 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image4" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image4 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Notes <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->notes; ?>" class="form-control" name="notes" placeholder="Notes" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description5 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc5" class="form-control summernote">
				<?php echo $list[0]->desc5; ?>	
			</textarea>
		</div>
		
		<?php
			break;
			
			
			
			
			// EditPaymentMethod 
			case 'EditPaymentMethod':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<!--<div class="form-group">
			<label class="col-form-label">Shopping Guide Title<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_title; ?>" class="form-control" name="guide_title" placeholder="Shopping Guide Title" required>
			</div>
			<div class="form-group">
			<label class="col-form-label">Shopping Guide Description<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_description; ?>" class="form-control" name="guide_description" placeholder="Shopping Guide Description" required>
			</div>
			<div class="form-group">
			<label class="col-form-label">Shopping Guide Keyword<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->guide_keyword; ?>" class="form-control" name="guide_keyword" placeholder="Shopping Guide Keyword" required>
		</div>-->
		
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title; ?>" class="form-control" name="title" placeholder="Title" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Subtitle1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->subtitle; ?>" class="form-control" name="subtitle" placeholder="Subtitle" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title2 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title2; ?>" class="form-control" name="title2" placeholder="Title2" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image2 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image2" Title="Choose Image2" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image2 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Image3 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image3" Title="Choose Image3" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image3 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Image4 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image4" Title="Choose Image4" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image4 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Image5 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image5" Title="Choose Image5" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image5 . '') ?>">
		</div>
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>	
			</textarea>
		</div>
		<div class="form-group">
			<label class="col-form-label">Title3 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title3; ?>" class="form-control" name="title3" placeholder="Title3" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description3 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc3" class="form-control summernote">
				<?php echo $list[0]->desc3; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title4 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title4; ?>" class="form-control" name="title4" placeholder="Title4" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description4 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc4" class="form-control summernote">
				<?php echo $list[0]->desc4; ?>	
			</textarea>
		</div>
		
		<?php
			break;
			
			
			// EditChooseYourSize 
			case 'EditChooseYourSize':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group">
			<label class="col-form-label">Shopping Guide Title<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->choose_title; ?>" class="form-control" name="choose_title" placeholder="Size Title" required>
			</div>
			<div class="form-group">
			<label class="col-form-label">Shopping Guide Description<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->choose_description; ?>" class="form-control" name="choose_description" placeholder="Size Description" required>
			</div>
			<div class="form-group">
			<label class="col-form-label">Shopping Guide Keyword<span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->choose_keyword; ?>" class="form-control" name="choose_keyword" placeholder="Size Keyword" required>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Title1 <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->title; ?>" class="form-control" name="title" placeholder="Title" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Subtitle <span class="text-danger">*</span></label>
			<input type="text" value="<?php echo $list[0]->subtitle; ?>" class="form-control" name="subtitle" placeholder="Subtitle" required>
		</div>
		<div class="form-group">
			<label class="col-form-label">Description1 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc1" class="form-control summernote">
				<?php echo $list[0]->desc1; ?>	
			</textarea>
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Image1 <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image1" Title="Choose Image1" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image1 . '') ?>">
		</div>
		
		<div class="form-group">
			<label class="col-form-label">Description2 <span class="text-danger">*</span></label>
			<textarea id="summernoteEditor" name="desc2" class="form-control summernote">
				<?php echo $list[0]->desc2; ?>	
			</textarea>
		</div>
		
		<?php
			break;
			
			
			
			
			
			// end here 
			case "EditLimit";  
			if(!empty($list)){	
			?>
			<div class="form-group">
				<input type="hidden" name="id" value="<?=$list[0]->id?>">
				<label class="col-form-label">Add To Cart Limit<span class="text-danger">*</span></label>
				<input type="number" min="0" max="100" step="1" class="form-control " name="cart_limit" value="<?= $list[0]->cart_limit?>" placeholder="Add To Cart Limit" >
				<?php echo form_error("cart_limit", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Add To Wishlist Limit<span class="text-danger">*</span></label>
				<input type="number" class="form-control" min="0" max="100" step="1" name="wishlist_limit" value="<?= $list[0]->wishlist_limit?>" placeholder="Add To Wishlist Limit" required>
				<?php echo form_error("wishlist_limit", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Cashback Used Limit<span class="text-danger">*</span></label>
				<input type="number" class="form-control" min="0" max="1000" step="1" name="cashback_limit" value="<?= $list[0]->cashback_used_limit?>" placeholder="Cashback Used Limit" required>
				<?php echo form_error("cashback_limit", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Reward Used Limit<span class="text-danger">*</span></label>
				<input type="number" class="form-control" min="0" max="5000" step="1" name="reward_limit" value="<?= $list[0]->reward_used_limit?>" placeholder="Reward Used Limit" required>
				<?php echo form_error("reward_limit", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Prebooking Amt. Status For Royal User<span class="text-danger">*</span></label>
				<select class="form-control" name="royal_prebookig_status" required>
					<option value="true" <?php if($list[0]->royal_prebookig_status=='true'){echo 'selected';}?>>Enabled</option>
					<option value="false" <?php if($list[0]->royal_prebookig_status=='false'){echo 'selected';}?>>Disabled</option>
				</select>
			</div>
			<div class="form-group">
				<label class="col-form-label">Day Limit<span class="text-danger">(Early Activated Features Day For Royal User)*</span></label>
				<input type="number" class="form-control" min="0" max="5000" step="1" name="royal_feature_activated_limit" value="<?= $list[0]->royal_feature_activated_limit?>" placeholder="Reward Used Limit" required>
				<?php echo form_error("royal_feature_activated_limit", "<p class='text-danger' >", "</p>"); ?>  
			</div>
			<?php
			} break;
			case 'EditCategory';
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group p-0">
			<label class="col-form-label">Category Name <span class="text-danger">*</span></label>
			<input type="text" class="form-control text-capitalize" name="name" placeholder="Category Name" required value="<?php echo $list[0]->name; ?>">
			<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
		</div>
		
		<!--div class="form-group">
			<label class="col-form-label">Description <span class="text-danger">*</span></label>
			<textarea class="form-control" name="description" placeholder="Description" required><?php echo $list[0]->description; ?></textarea>
			<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
		</div-->
		
		<div class="form-group">
			<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
			<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
		</div>
		
        <?php
            break;
			case 'EditSlider';
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<input type="hidden" name="key" value="Slider" />
		<div class="form-group">
			<label class="col-form-label"> Slider Image <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
			<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image . '') ?>">
			<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
		</div>
		<?php
            break;
			case 'EditBeautyConsultant';
		?>
		<input type="hidden" name="id" value="<?php echo $list->id; ?>" />
		<div class="form-group">
			<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Exchange">Schedule Status<span class="text-danger"> *</span></label>
			<select class="form-control" id="schedule_status" name="schedule_status"   required data-parsley-required-message="Please select schedule date" onchange="validate(this)">
				<option value="pending" <?php if($list->schedule_status=='pending'){echo 'selected';}?>>Pending</option>
				<option value="rejected" <?php if($list->schedule_status=='rejected'){echo 'selected';}?>>Rejected</option>
				<option value="approved"<?php if($list->schedule_status=='approved'){echo 'selected';}?>>Approved</option>
			</select>
			<label for="sdate">Schedule Date</label>
			<input type="date" class="form-control" id="sdate" value="<?=$list->schedule_date?>" placeholder="Schedule Date" name="schedule_date" required data-parsley-required-message="Please select schedule date">
			<label for="stime">Schedule Time</label>
			<input type="time" class="form-control" id="stime" value="<?=$list->schedule_time?>" placeholder="Schedule Time" name="schedule_time" required data-parsley-required-message="Please select schedule time">
			<label class="col-form-label">Consultant Name</label>
			<input type="text" class="form-control " value="<?=$list->consultant_name?>" name="consultant_name" id="consultant_name" data-parsley-required-message="Please enter consultant name">
			<label class="col-form-label">Consultant Links</label>
			<input type="url" class="form-control" value="<?=$list->consultation_links?>" name="consultation_links" id="consultation_links" data-parsley-required-message="Please enter consultation links">
		</div> 
		<script>
			function validate(e){
				if(e.value=='approved'){
					$('#consultant_name').attr('required','');
					$('#consultation_links').attr('required',''); 
					}else{
					$('#consultant_name').attr('required',false);
					$('#consultation_links').attr('required',false);
				}
			}
		</script>
        <?php
            break;
			case 'EditECatalog';  
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group">
			
			<label class="col-form-label">Name<span class="text-danger">*</span></label>
			
			<input type="text" class="form-control " value="<?php echo $list[0]->name; ?>" name="name"  required>
			
			<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
			
		</div>
		
		<div class="form-group">
			
			<label class="col-form-label">Title<span class="text-danger">*</span></label>
			
			<input type="text" class="form-control " value="<?php echo $list[0]->title; ?>" name="title"  required>
			
			<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
			
		</div>
		
		<div class="form-group">
			
			<label class="col-form-label">Description<span class="text-danger">*</span></label>
			
			<textarea type="text" class="form-control " name="description"  required><?php echo $list[0]->description; ?></textarea>
			
			<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
			
		</div>
		
		<div class="form-group">
			
			<label class="col-form-label">Catalog<span class="text-danger">*</span></label>
			
			<input type="file" class="form-control " name="catalog" Title="Choose" accept="application/pdf" >
			
			<?php echo form_error("catalog", "<p class='text-danger' >", "</p>"); ?>
			
		</div>
		
		<div class="form-group">
			<a href="<?= base_url('uploads/' . $this->data->folder . '/' . $list[0]->catalog); ?>" target="_blank" class="btn btn-danger"><i class="fa fa-eye"></i> Catalog</a>			
		</div>
		<?php
            break;
			
			case 'EditCareer':
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="form-group p-0">
			<label class="col-form-label">Job Title<span class="text-danger"></span></label>
			<input type="text" class="form-control" required name="job_title" value="<?php echo $list[0]->title; ?>" placeholder="Job Title">
		</div> 
		<div class="form-group">
			<label class="col-form-label">Job Description<span class="text-danger">*</span></label>
			<textarea class="form-control summernote" name="desc" required>
				<?php echo base64_decode($list[0]->description); ?>
			</textarea>
		</div>
		<div class="form-group">
			<textarea name="mail" class="summernote form-control">
				<?php echo $list[0]->mail; ?>
			</textarea>
		</div>
        <?php
			break;
			
			case 'EditSale';
		?>
		<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Sale Type <span class="text-danger">*</span></label>
					<select class="form-control "  name="sale_type" required>
						<option selected disabled>-- Select --</option>
						<option value="flash_sale" <?php if($list[0]->sale_type=='flash_sale'){echo 'selected';} ?>>Flash Sale</option>
						<option value="live_sale" <?php if($list[0]->sale_type=='live_sale'){echo 'selected';} ?>>Live Sale</option>
						<option value="daily_deal" <?php if($list[0]->sale_type=='daily_sale'){echo 'selected';} ?>>Daily Deal</option>
					</select>
					<?php echo form_error("sale_type", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">User Type <span class="text-danger">*</span></label>
					<select class="form-control "  name="user_type" required>
						<option selected disabled>-- Select --</option>
						<option value="all" <?php if($list[0]->user_type=='all'){echo 'selected';} ?>>All</option>
						<option value="normal" <?php if($list[0]->user_type=='normal'){echo 'selected';} ?>>Normal</option>
						<option value="royal" <?php if($list[0]->user_type=='royal'){echo 'selected';} ?>>Royal</option>
					</select>
					<?php echo form_error("user_type", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Product Type <span class="text-danger">*</span></label>
					<select class="form-control "  name="product_type" required>
						<option selected disabled>-- Select --</option>
						<option value="individual" <?php if($list[0]->product_type=='individual'){echo 'selected';} ?>>Individual</option>
						<option value="combo" <?php if($list[0]->sale_type=='combo'){echo 'selected';} ?>>Look</option>
					</select>
					<?php echo form_error("product_type", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Discount Type <span class="text-danger">*</span></label>
					<select class="form-control "  name="discount_type" required>
						<option selected disabled>-- Select --</option>
						<option value="percent" <?php if($list[0]->discount_type=='percent'){echo 'selected';} ?>>Percent</option>
						<option value="flat" <?php if($list[0]->discount_type=='flat'){echo 'selected';} ?>>Flat</option>
						<option value="buy_x_get_y" <?php if($list[0]->discount_type=='buy_x_get_y'){echo 'selected';} ?>>Buy-X-get-Y</option>
					</select>
					<?php echo form_error("discount_type", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<!--<div class="col-sm-6">
				<div class="form-group">
				<label class="col-form-label">Discount Value <span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->discount_value ?>" name="discount_value" min="0" oninput="this.value = Math.abs(this.value)">
				<?php 
					// echo form_error("discount_value", "<p class='text-danger' >", "</p>"); 
				?>
				</div>
			</div>-->
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Name<span class="text-danger">*</span></label>
					<input type="text" class="form-control " name="name" value="<?= $list[0]->name?>"  required>
					<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Title<span class="text-danger">*</span></label>
					<input type="text" class="form-control"  name="title" value="<?= $list[0]->title?>"  required>
					<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label class="col-form-label">Description<span class="text-danger">*</span></label>
					<textarea type="text" class="form-control" name="description"   required ><?= $list[0]->description?></textarea>
					<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label class="col-form-label">Banner<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
					<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg"  data-default-file="<?= base_url('uploads/sale/'.$list[0]->icon)?>">
					<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
				</div> 
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">Start Date<span class="text-danger">*</span></label>
					<input type="datetime-local" class="form-control "  name="startdate" value="<?= $list[0]->start_date?>"  required>	
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-form-label">End Date<span class="text-danger">*(End date must be greater then start date)</span></label>
					<input type="datetime-local"  class="form-control " name="enddate" value="<?= $list[0]->end_date?>"  required>
				</div>
			</div>
			<?php
				break;
				case 'EditSubCategory';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Category<span class="text-danger">*</span></label>
				<select class="text-capitalize form-control" name="category" required>
					<option selected disabled>Select</option>
					<?php
						foreach ($categorylist as $each)
						{
						?>
						<option <?php if ($each->id == $list[0]->category_id)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php } ?>
					
				</select>
				<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Sub-Category <span class="text-danger">*</span></label>
				<input type="text" class="form-control" value="<?= $list[0]->name ?>" name="name" placeholder="Enter Sub-category Name" required>
				<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Vendor Commision <span class="text-danger"> (In %)*</span></label>
				<input type="number" value="<?= $list[0]->commision ?>" class="form-control" name="commision" placeholder="Enter Vendor Commision" required min="0" max="100" >
				<?php echo form_error("commision", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<!--div class="form-group">
				<label class="col-form-label">Expert Commision <span class="text-danger"> (In %)*</span></label>
				<input type="number" value="<?= $list[0]->expert_commision ?>" class="form-control" name="commisionexpert" placeholder="Enter Expert Commision" required>
				<?php echo form_error("commisionexpert", "<p class='text-danger'>", "</p>"); ?>
			</div-->
			<?php
				break;
				case 'EditCosubcategory';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Category<span class="text-danger">*</span></label>
				<select class="text-capitalize form-control" name="category"  onchange="change_subcat(this.value);" required>
					<option selected disabled>Select</option>
					<?php
						foreach ($categorylist as $each)
						{
						?>
						<option <?php if ($each->id == $list[0]->category_id)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php } ?>
					
				</select>
			</div>
			
			<div class="form-group">
				<label data-toggle="tooltip" data-placement="top" title="Select Product Sub-Category Eg. Neckless Etc.">Product Subcategory<span class="text-danger"> *</span></label>
				<select name="subcategory" required class="form-control " id="subcat1" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory...">
					<?php
						$subcategorylist = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get_where('sub_category',['category_id'=>$list[0]->category_id])->result();
						foreach ($subcategorylist as $each)
						{
						?>
						<option <?php if ($each->id == $list[0]->subcategory_id)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php } ?>
				</select>
			</div> 
			<div class="form-group">
				<label class="col-form-label">Co-Subategory <span class="text-danger">*</span></label>
				<input type="text" class="form-control" value="<?= $list[0]->name ?>" name="name" placeholder="Enter Sub-category Name" required>
			</div>
			<div class="form-group">
				<label class="col-form-label">Vendor Commision <span class="text-danger"> (In %)*</span></label>
				<input type="number" value="<?= $list[0]->commision ?>" class="form-control" name="commision" placeholder="Enter Vendor Commision" required min="0" max="100" >
			</div> 
			<script>
				function change_subcat(id) {
					var id = id;
					var url = "<?= base_url($this->data->controller .'/ManageProduct/subcategory/') ?>" + id;
					$.ajax({
						url: url,
						type: "post",
						
						success: function(res) {
							$("#subcat1").html(res);
						}
					})	
				}
			</script>
			<?php
				break;
				
				case 'RecjectExpert';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group p-0">
				<label class="col-form-label">Reject Remark<span class="text-danger">*</span></label>
				<input type="text" class="form-control text-capitalize" name="rejectremark" placeholder="Enter Reason For Rejection" required value="<?php echo $list[0]->reject_remark; ?>">
				<?php echo form_error("rejectremark", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<?php
				break;
				case 'ApproveCombo';
			?>
			<input type="hidden" name="id" value="<?php echo $list->id; ?>" />
			<div class=""><h4 style="font-weight:600;" class="text-danger">Look Details</h4> </div>
			<div class="row">
				<div class="col-sm-2">
					<div class="form-group p-0">
						<label class="col-form-label">Sku Id<span class="text-danger">*</span></label>
						<input type="number" class="form-control " name="skuid" placeholder="Enter Sku Id" required >
						<?php echo form_error("skuid", "<p class='text-danger' >", "</p>"); ?>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="form-group p-0">
						<label class="col-form-label">Launching Date Time<span class="text-danger">*</span></label>
						<input type="datetime-local" class="form-control" name="launch" required >
						<?php echo form_error("launch", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Look Image <span class="text-danger"> (Use Ctrl+Click To Select Multiple images)* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
						<input type="file" required class="form-control" data-height="100" name="image[]" Title="Choose" multiple="multiple" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg">
						<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
			</div><hr>
			<div class=""><h4 style="font-weight:600;" class="text-info">Pricing Details</h4> </div>
			<div class="row mb-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Purchasing Price">Purchasing Price<span class="text-danger"> *</span></label>
						<input type="number" name="purchaseprice" title="Enter Purchasing Price" required placeholder="Purchasing Price" class="form-control" id="purchaseprice">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Product MRP">MRP(&#8377;)<span class="text-danger"> *</span></label>
						<input type="number" name="price" title="Enter MRP" required="" placeholder="Product MRP" class="form-control pmrp" id="mrp" oninput="setAmount()">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Product Selling Price ">Offer Price(&#8377;)<span class="text-danger"> *</span></label>
						<input type="number" name="discountprice" title="Enter Price" placeholder="Product Price" class="form-control pprice" id="c" required oninput="setAmount()">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Product Discount">Discount(%)</label>
						<input type="text" name="discount" title="Enter Discount" required placeholder="Discount" class="form-control pd" id="d" readonly>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="CGST On Product">CGST(%)<span class="text-danger"> *</span></label>
						<input type="number" name="cgst" title="Enter GST" required="" placeholder="Product GST" class="form-control pgst" id="gst" oninput="setAmount()">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="SGST On Product">SGST(%)<span class="text-danger"> *</span></label>
						<input type="number" name="sgst" title="Enter GST" required="" placeholder="Product GST" class="form-control pgst" id="sgst" oninput="setAmount(),handleChange(this)">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Total GST Amount">GST(&#8377;)<span class="text-danger"> *</span></label>
						<input type="text" name="gst" title="Enter GST" placeholder="Product GST" class="form-control pgst1" id="gst1" readonly>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group" >
						<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Pre Booking ?">Pre Booking Available<span class="text-danger"> *</span></label>
						<select class="form-control" id="prebook_avl" name="prebook_avl"  required onchange="prebook_status(this.value)">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group" id="prebook_div">
						<label data-toggle="tooltip" data-placement="top" title="Product Pre Booking Amount">Pre Booking Amount<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="prebook_amt"   placeholder="Pre Booking Amount" >
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group" id="prebook_div">
						<label data-toggle="tooltip" data-placement="top" title="Product Amount For Royal Members">Product Amount For Royal Members<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="royal_amt"   placeholder="Royal Amount" >
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group" id="prebook_div">
						<label data-toggle="tooltip" data-placement="top" title="Product Pre Booking Amount">Royal Club Cash Upto<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="royal_clubcash"   placeholder="Royal club cash upto" >
					</div>
				</div>
			</div><hr>
			<div class=""><h4 style="font-weight:600;" class="text-warning">Return/Refund/Exchnage Information</h4> </div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label data-toggle="tooltip" data-placement="top" title="Is This Product Is Available For Cancellation ?">Cancel Status<span class="text-danger"> *</span></label>
						<select class="form-control" id="cancel" name="cancel" required onchange="cancel_status(this.value)">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
					</div>
					<div class="form-group" id="cancel_limit_div" >
						<label data-toggle="tooltip" data-placement="top" title="Product Can Be Cancel Withinn Days ?">Cancel Limit(in days)<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="cancel_limit" value="1"  placeholder="Days">
					</div>
					
					
				</div>
				<div class="col-sm-4">
					<div class="form-group" >
						<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Return And Refund ">Return & Refund Status<span class="text-danger"> *</span></label>
						<select class="form-control" id="return_refund" name="return_refund"  required onchange="return_status(this.value)">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
					</div>
					<div class="form-group" id="return_limit_div" >
						<label data-toggle="tooltip" data-placement="top" title="Product Can Be Returned Within Days ?">Return & Refund Limit(in days)<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="return_limit"  value="1" placeholder="Days">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group" >
						<label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Exchange">Exchange Status<span class="text-danger"> *</span></label>
						<select class="form-control" id="exchange_avl" name="exchange_avl"  required onchange="exchange_status(this.value)">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
					</div>
					<div class="form-group" id="exchange_limit_div">
						<label data-toggle="tooltip" data-placement="top" title="Product Can Be Exchange Within Days ?">Exchange Limit(in days)<span class="text-danger"> *</span></label>
						<input class="form-control" type="number" name="exchange_limit"  value="1" placeholder="Days">
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-6" id="refundpoli">
					<div class="form-group">
						<label>Refund Policy</label>
						<textarea class="form-control summernote" style="border:1px solid #aaaaaa; "  name="refundpolicy" id="refundpolicy"></textarea>
					</div>
				</div>
				<div class="col-sm-6" id="returnpoli">
					<div class="form-group">
						<label>Return Policy</label>
						<textarea class="form-control summernote" style="border:1px solid #aaaaaa;"  name="returnpolicy" id="returnpolicy"></textarea>
					</div>
				</div>
				<div class="col-sm-6" id="cancelpolicy">
					<div class="form-group">
						<label>Cancellation Policy</label>
						<textarea class="form-control summernote" style="border:1px solid #aaaaaa;"  name="cancellationpolicy" id="cancellationpolicy"></textarea>
					</div>
				</div>
				<div class="col-sm-6" id="exchngpoli">
					<div class="form-group">
						<label>Exchange Policy</label>
						<textarea class="form-control summernote" style="border:1px solid #aaaaaa;"  name="exchangepolicy" id="exchangepolicy"></textarea>
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-sm-3 ">
					<div class="form-group">
						<label>Gift Wrap</label> &nbsp
						<input checked value="true" type="checkbox" name="giftwrap" >
					</div>
				</div>
			</div>
			
			
			<script>
				function prebook_status(status){
					if(status=='true'){
						$("#prebook_div").show();
					}
					else{
						$("#prebook_div").hide();
					}
				}
				
			</script>
			<?php
				break;
				
				case 'ModifyCombo';
			?>
			<input type="hidden" name="id" value="<?php echo $list->id; ?>" />
			<div class="form-group p-0">
				<label class="col-form-label">Remark<span class="text-danger">*</span></label>
				<input type="text" class="form-control text-capitalize" name="remark" placeholder="Enter Modification Remark" required value="<?php echo $list->remark; ?>">
				<?php echo form_error("remark", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			
			<?php
				break;
				
				case 'EditRewardPoint';
			?>
			<input type="hidden" name="id" value="<?php echo $list->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">User Type <span class="text-danger">*</span></label>
				<select class="form-control " name="usertype" required>
					<option selected disabled>-- Select --</option>
					<option <?php if($list->user_type == "normal"){echo "selected";}?> value="normal">Normal</option>
					<option <?php if($list->user_type == "royal"){echo "selected";}?> value="royal">Royal</option>
					<option <?php if($list->user_type == "all"){echo "selected";}?> value="all">All</option>
				</select>
				<?php echo form_error("usertype", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Product Type <span class="text-danger">*</span></label>
				<select class="form-control "  name="producttype" required>
					<option selected disabled>-- Select --</option>
					<option value="individual" <?php if($list->product_type == "individual"){echo "selected";}?>>Individual</option>
					<option value="combo" <?php if($list->product_type == "combo"){echo "selected";}?>>Combo</option> 
				</select>
				<?php echo form_error("producttype", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Min Order<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?php echo $list->min_order; ?>" name="minorder" placeholder="Minimum Order Amount" required>
				<?php echo form_error("minorder", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Reward Points <span class="text-danger">*</span></label>
				<input type="number" min="0" max="1000" step="any" value="<?php echo $list->point; ?>" class="form-control " name="point" placeholder="Reward Points" >
				<?php echo form_error("point", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Total Reward Count<span class="text-danger">*</span></label>
				<input type="number" class="form-control" name="reward_count" value="<?= $list->reward_count;?>" placeholder="Number of Reward" required>
				<?php echo form_error("reward_count", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Title<span class="text-danger">*</span></label>
				<input type="text" value="<?= $list->title;?>" class="form-control" style="text-transform:uppercase;" name="title" id="title" placeholder="Coupon Title" required>
				<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Description <span class="text-danger">*</span></label>
				<textarea class="form-control" name="description" placeholder="Description" required><?= $list->description;?></textarea> 
				<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label ">Terms & Conditions<span class="text-danger">*</span></label>
				<textarea class="form-control summernote" name="termsconditions" placeholder="Terms & Conditions"  required><?= base64_decode($list->termsconditions);?></textarea>
			</div>
			<div class="form-group">
				<label class="col-form-label">Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list->icon . '') ?>"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg"  required>
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
				<input type="date" class="form-control" value="<?= $list->start_date;?>" id="startdate" name="startdate" required>
				<?php echo form_error("startdate", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">End Date <span class="text-danger">*</span></label>
				<input type="date" class="form-control" value="<?= $list->end_date;?>" id="enddate" name="enddate" required>
				<?php echo form_error("enddate", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				case 'EditBrand';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label data-toggle="tooltip" data-placement="top" title="Product Upload For Vendor">Upload For Vendor<span class="text-danger"> *</span></label>
				<select type="text" name="vendorupload" class="form-control" required>
					<option selected disabled>select</option>
					<option value="NA" <?php if($list[0]->vendor_id=='NA'){echo 'selected';}?>>Slick Pattern</option> 
					<?php
						$vendorlist=$this->db->get_where('tbl_vendor',['is_status'=>'true'])->result();
						if(!empty($vendorlist)){
							foreach($vendorlist as $vendor)
							{
							?>
							<option value="<?= $vendor->id?>" <?php if($list[0]->vendor_id==$vendor->id){echo 'selected';}?>><?= $vendor->name?> &nbsp  -- &nbsp <?= $vendor->shop_name?></option>
							<?php
							}
						} 
					?>
				</select>
			</div>
			<div class="form-group p-0">
				<label class="col-form-label">Brand Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control text-capitalize" name="name" placeholder="Brand Name" required value="<?php echo $list[0]->name; ?>">
				<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				
				case 'EditSubBrand';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Brand<span class="text-danger">*</span></label>
				<select class="text-capitalize form-control" name="brand" required>
					<option selected disabled>Select</option>
					<?php
						foreach ($brandlist as $each)
						{
						?>
						<option <?php if ($each->id == $list[0]->brand_id)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php } ?>
					
				</select>
				<?php echo form_error("brand", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Sub-Brand <span class="text-danger">*</span></label>
				<input type="text" class="form-control" value="<?= $list[0]->name ?>" name="name" placeholder="Enter Sub-Brand Name" required>
				<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				
				case 'EditReferFriend';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			
			<div class="form-group">
				<label class="col-form-label">Signup Cashback<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->signup_cashback ?>" name="signup_cashback" placeholder="Enter Signup Cashback" required>
				<?php echo form_error("signup_cashback", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Sign Up Rewards Point<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->signup_points ?>" name="signup_points" placeholder="Enter Sign Up Rewards Point" required>
				<?php echo form_error("signup_points", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Referral Cashback<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->ref_cashback ?>" name="ref_cashback" placeholder="Enter Referral Cashback" required>
				<?php echo form_error("ref_cashback", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Referral Reward Point<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->ref_points ?>" name="ref_points" placeholder="Enter Referral Reward Point" required>
				<?php echo form_error("ref_points", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Referral User Order Cashback<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->ref_order_cashback ?>" name="ref_order_cashback" placeholder="Enter Referral User Order Cashback" required>
				<?php echo form_error("ref_order_cashback", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Referral User Order Reward Point<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->ref_order_point ?>" name="ref_order_point" placeholder="Enter Referral User Order Reward Point" required>
				<?php echo form_error("ref_order_point", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<div class="form-group">
				<label class="col-form-label">Referral User Min Order Value<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->ref_min_order ?>" name="ref_min_order" placeholder="Enter Referral User Min Order Value" required>
				<?php echo form_error("ref_min_order", "<p class='text-danger'>", "</p>"); ?>
			</div>
			
			<?php
				break;
				
				case 'EditSubscriptionPlan';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Plan Name<span class="text-danger">*</span></label>
				<input type="text" class="form-control" value="<?= $list[0]->name ?>" name="name" placeholder="Enter Plan Name" required>
				<?php echo form_error("name", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Plan Type <span class="text-danger">*</span></label>
				<select class="form-control " name="type" required>
					<option  selected disabled>-- Select --</option>
					<option <?php if($list[0]->plan_type == "month"){echo "selected";}?> value="month">Month</option>
					<option <?php if($list[0]->plan_type == "year"){echo "selected";}?> value="year">Year</option>
				</select>
				<?php echo form_error("type", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Plan Duration<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->duration ?>" name="duration" placeholder="Enter Plan Duration" required>
				<?php echo form_error("duration", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Net Price<span class="text-danger">*</span></label>
				<input type="number" class="form-control net_price" id="net_price" value="<?= $list[0]->amount ?>" onkeyup="setAmount()" name="amount" placeholder="Enter Plan Amount" required>
				<?php echo form_error("amount", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Offer Price<span class="text-danger">*</span></label>
				<input type="number" class="form-control offer_price" id="offer_price" value="<?= $list[0]->offer_price ?>" name="offer_price" oninput="setAmount()" placeholder="Enter Plan Amount" required>
				<?php echo form_error("amount", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Discount(%)<span class="text-danger">*</span></label>
				<input type="text" class="form-control discount" id="discount" value="<?= $list[0]->discount ?>" readonly name="discount" class="discount" placeholder="Enter Plan Amount" required><?php echo form_error("amount", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<!--<div class="form-group">
				<label class="col-form-label">Tax<span class="text-danger"> (In %)*</span></label>
				<input type="number" class="form-control" value="<?= $list[0]->tax ?>" name="tax" placeholder="Enter Plan Tax" required>
				<?php echo form_error("tax", "<p class='text-danger'>", "</p>"); ?>
				</div>
				<div class="form-group">
				<label class="col-form-label"> Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>-->
			<div class="form-group">
				<label class="col-form-label">Plan Description<span class="text-danger">*</span></label>
				<textarea  class="form-control"  name="description" placeholder="Enter Plan Description" required><?= $list[0]->description ?></textarea>
				<?php echo form_error("description", "<p class='text-danger'>", "</p>"); ?>
			</div>
			<script>
				function setAmount(){
					var mrp =  document.getElementById('net_price').value;
					
					if (mrp == '') {
						mrp = 0;
					} 
					var price = document.getElementById('offer_price').value;
					if (price == '' || mrp == '') {
						
					} 
					else 
					{
						if (price == '') {
							price = 0;
						}
						var discount = ((mrp - price) / mrp) * 100; 
						if (discount < 0) {
							discount = 0;
						}
						discount = discount.toFixed(2);
						document.getElementById('discount').value=discount;
					}
					
				}
			</script>
			<?php
				break;
				case 'EditSubscriptionBenefits';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Benefits Icon<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file"  class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
			</div>
			<div class="form-group">
				<label class="col-form-label">Benefites Title<span class="text-danger">(Less than 50 characters)*</span></label>
				<input type="text" class="form-control" value="<?= $list[0]->title?>" name="title" placeholder="Enter Benefites Title" required>
			</div>
			<div class="form-group">
				<label class="col-form-label">Benefits Description<span class="text-danger">*</span></label>
				<textarea  class="form-control summernote"  required name="description" placeholder="Enter Plan Description" required><?= base64_decode($list[0]->description)?></textarea>
			</div>
			<?php
				break;
				case 'EditSizeChart';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label class="col-form-label">Sub Category <span class="text-danger">*</span></label>
				<select class="text-capitalize form-control" name="subcat" required>
					<option selected disabled>Select</option>
					<?php
						foreach ($subcategorylist as $each)
						{
						?>
						<option <?php if ($each->id == $list[0]->subcat_id)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
					<?php } ?>
					
				</select>
				<?php echo form_error("subcat", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Size <span class="text-danger">*</span></label>
				<select class="text-capitalize form-control" name="size" required>
					<option selected disabled>Select </option>
					<option  <?php if($list[0]->size  == 'XS'){ echo "selected";}?>>XS</option>
					<option <?php if($list[0]->size  == 'S'){ echo "selected";}?> >S</option>
					<option <?php if($list[0]->size  == 'M'){ echo "selected";}?>>M</option>
					<option  <?php if($list[0]->size  == 'L'){ echo "selected";}?>>L</option>
					<option <?php if($list[0]->size  == 'XL'){ echo "selected";}?>>XL</option>
					<option <?php if($list[0]->size  == 'XXL'){ echo "selected";}?>>XXL</option>
					<option <?php if($list[0]->size  == 'XXXL'){ echo "selected";}?>>XXXL</option>
				</select>
				<?php echo form_error("size", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Size Chart <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image . '') ?>">
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<?php
				break;
				case 'ShowSizeChart';
			?>
			<div class="form-group mx-1">
				<label class="col-form-label">Size Chart Table<span class="text-danger">*</span></label>
				<textarea class="form-control summernote" style="border:1px solid #aaaaaa; " required name="sizechart_table" >
					<?= base64_decode($list->size_chart); ?>
				</textarea>
			</div>
			<?php
				break;
				case 'EditCoupon';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Product Type <span class="text-danger">*</span></label>
						<select class="form-control "  name="producttype" required>
							<option selected disabled>-- Select --</option>
							<option value="individual" <?php if($list[0]->product_type=='individual'){echo "selected";}?>>Individual</option>
							<option value="combo" <?php if($list[0]->product_type=='combo'){echo "selected";}?>>Combo</option> 
						</select>
						<?php echo form_error("producttype", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">User Type <span class="text-danger">*</span></label>
						<select class="form-control " name="usertype" required>
							<option selected disabled>-- Select --</option>
							<option value="normal" <?php if($list[0]->user_type=='normal'){echo "selected";}?>>Normal</option>
							<option value="royal" <?php if($list[0]->user_type=='royal'){echo "selected";}?>>Royal</option>
							<option value="all" <?php if($list[0]->user_type=='all'){echo "selected";}?>>All</option>
						</select>
						<?php echo form_error("usertype", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<?php 
						if($list[0]->complementry_type=='offer'){
						?>
						<div class="form-group"> 
							<label class="col-form-label">Coupon Applied Type <span class="text-danger">*</span></label>
							<select class="form-control " onchange="apply_type1(this.value)" name="apply_type"  required>
								<option selected disabled>-- Select --</option>
								<option value="before" <?php if($list[0]->apply_type=='before'){echo "selected";}?>>Before Purchase</option>
								<option value="after" <?php if($list[0]->apply_type=='after'){echo "selected";}?>>After Purchase</option> 
							</select>
						</div>
					<?php } ?>
					<?php 
						if($list[0]->complementry_type=='coupon'){
						?>
						<div class="form-group" id="coupon_code">
							<label class="col-form-label">Coupon Code<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?php echo $list[0]->coupon; ?>" style="text-transform:uppercase;" name="code" id="code" placeholder="Coupon Code" required>
						</div>
					<?php } ?>
					<div class="form-group">
						<label class="col-form-label">Min Order<span class="text-danger">*</span></label>
						<input type="number" class="form-control" value="<?php echo $list[0]->min_order; ?>" name="minorder" placeholder="Minimum Order Amount" required>
					</div>
					<?php if($list[0]->coupon_type!='Complementary discount coupons' && $list[0]->coupon_type!='Free gift with purchase' && $list[0]->coupon_type!='Free shipping coupon' && $list[0]->coupon_type !='Buy-one-get-one coupons'){?>
						<div class="form-group" id="discount_type"> 
							<label class="col-form-label">Discount Type <span class="text-danger">*</span></label>
							<select class="form-control " onchange="getType2(this.value)" name="type" id="disType"  required>
								<option value="flat" <?php if($list[0]->type=='flat'){echo "selected";}?>>Flat</option>
								<option value="percent" <?php if($list[0]->type=='percent'){echo "selected";}?>>Percentage</option>
							</select>
						</div>
						<div style="display:none" id="percentdiv2">
							<div class="form-group">
								<label class="col-form-label">Coupon Discount <span class="text-danger">(In %)*</span></label>
								<input type="number" id="percentdis2" min="0"  max="100" step="any" class="form-control " value="<?php if($list[0]->type=='percent'){echo $list[0]->discount;}?>" name="percentdis" placeholder="Coupon Discount" >
							</div>
						</div>
						<div style="display:none" id="amountdiv2"> 
							<div class="form-group">
								<label class="col-form-label">Coupon Discount <span class="text-danger">(In Rupee)*</span></label>
								<input type="number" id="flatdis2" class="form-control " name="discountrs" value="<?php if($list[0]->type=='flat'){echo $list[0]->discount;}?>" placeholder="Coupon Discount" >
							</div>
						</div>
						<div style="display:none" id="rewarddiv2"> 
							<div class="form-group">
								<label class="col-form-label">Coupon Discount <span class="text-danger">(In Reward Points)*</span></label>
								<input type="number" id="rewarddis2" class="form-control " name="rewarddis" value="<?php if($list[0]->type=='reward'){echo $list[0]->discount;}?>" placeholder="Coupon Discount" >
							</div>
						</div>
						<div class="form-group" id="maxdiv2" style="display:none;">
							<label class="col-form-label">Max Discount<span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="maxdis" id="maxdis2" value="<?php echo $list[0]->max_discount; ?>" placeholder="Max Discount" required>
						</div>
					<?php } ?>
					<div class="form-group">
						<label class="col-form-label">Number of Coupon<span class="text-danger">*</span></label>
						<input type="number" class="form-control"  name="noofcoupon" value="<?php echo (int)$list[0]->no_of_coupon; ?>" placeholder="Number of Coupon" required>
						<?php echo form_error("noofcoupon", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group" >
						<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
						<input type="date" class="form-control " id="startdate" name="startdate" value="<?php echo $list[0]->start_date; ?>" required>
						<?php echo form_error("startdate", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">End Date <span class="text-danger">*</span></label>
						<input type="date" class="form-control " id="enddate" name="enddate" value="<?php echo $list[0]->end_date; ?>" required>
						<?php echo form_error("enddate", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Coupon Title<span class="text-danger">*</span></label>
						<input type="text" class="form-control" style="text-transform:uppercase;" name="title" value="<?php echo $list[0]->title; ?>" id="title" placeholder="Coupon Title" required>
						<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Description <span class="text-danger">*</span></label>
						<textarea class="form-control" name="description" placeholder="Description"  required><?php echo $list[0]->description; ?></textarea> 
						<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label ">Terms & Conditions<span class="text-danger">*</span></label>
						<textarea class="form-control summernote" name="termsconditions" placeholder="Terms & Conditions"  required><?php echo base64_decode($list[0]->termsconditions); ?></textarea>
					</div>
					<?php if($list[0]->complementry_type=='offer' AND $list[0]->apply_type=='after'){?>
						
						<div class="form-group" id="desc2" style="display:none;">
							<label class="col-form-label">Description For After<span class="text-danger">*</span></label>
							<textarea class="form-control" name="description1" placeholder="Description" required><?=$list[0]->description1?></textarea> 
							<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
						</div>
						<div class="form-group" id="terms2" style="display:none;">
							<label class="col-form-label ">Terms & Conditions For After<span class="text-danger">*</span></label>
							<textarea class="form-control summernote" name="termsconditions1" placeholder="Terms & Conditions"  required><?= base64_decode($list[0]->termsconditions1) ?></textarea>
						</div>
					<?php } ?>
					<div class="form-group">
						<label class="col-form-label">Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
						<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->banner . '') ?>">
						<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
			</div>
			
			<script>
				$(document).ready(function() {
					var type = "<?= $list[0]->type?>";
					if(type == "flat")
					{
						$("#amountdiv2").show();
						$("#maxdiv2").show();
						$("#percentdiv2").hide();
						$("#rewarddiv2").hide();
						$('#maxdis2').attr('required', true);
					}
					else if(type == "percent")
					{	
						$("#amountdiv2").hide();
						$("#percentdiv2").show();
						$("#maxdiv2").show();
						$("#rewarddiv2").hide();
						$('#maxdis2').attr('required', true);
					}
					else if(type == "reward")
					{	
						$("#amountdiv2").hide();
						$("#percentdiv2").hide();
						$("#maxdiv2").hide();
						$("#rewarddiv2").show();
						$('#maxdis2').removeAttr('required', true);
					}
					apply_type1("<?= $list[0]->apply_type?>");
				});
				
				function getType2(val)
				{
					if(val != null)
					{
						if(val == "flat")
						{
							$("#amountdiv2").show();
							$("#percentdiv2").hide();
							$("#rewarddiv2").hide();
							$("#maxdiv2").show();
							
							$('#flatdis2').attr('required', true);
							$('#percentdis2').removeAttr('required', true);
							$('#rewarddis2').removeAttr('required', true);
							$('#maxdis2').attr('required', true);
						}
						else if(val == "percent")
						{
							$("#amountdiv2").hide();
							$("#rewarddiv2").hide();
							$("#percentdiv2").show();
							$("#maxdiv2").show();
							
							$('#percentdis2').attr('required', true);
							$('#flatdis2').removeAttr('required', true);
							$('#rewarddis2').removeAttr('required', true);
							$('#maxdis2').attr('required', true);
						}
						else if(val == "reward")
						{
							$("#amountdiv2").hide();
							$("#rewarddiv2").show();
							$("#percentdiv2").hide();
							$("#maxdiv2").hide();
							
							$('#percentdis2').removeAttr('required', true);
							$('#flatdis2').removeAttr('required', true);
							$('#rewarddis2').attr('required', true);
							$('#maxdis2').removeAttr('required', true); 
						}
					}
				}
				function apply_type1(val){
					
					if(val != null)
					{
						if(val == "before")
						{
							$("#terms2").hide();
							$('#desc2').hide();
							$('#terms2').removeAttr('required', true);
							$('#desc2').removeAttr('required', true); 
						}
						else if(val == "after")
						{
							$("#terms2").show();
							$('#desc2').show();
							$('#terms2').attr('required', true);
							$('#desc2').attr('required', true); 
						}
					}
				}
			</script>
			<?php
				break;
				case 'EditCashBack';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			
			<div class="form-group">
				<label class="col-form-label">Min Order<span class="text-danger">*</span></label>
				<input type="number" class="form-control" value="<?php echo $list[0]->min_order; ?>" name="minorder" placeholder="Minimum Order Amount" required>
				<?php echo form_error("minorder", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">User Type <span class="text-danger">*</span></label>
				<select class="form-control " name="usertype" required>
					<option selected disabled>-- Select --</option>
					<option <?php if($list[0]->user_type == "normal"){echo "selected";}?> value="normal">Normal</option>
					<option <?php if($list[0]->user_type == "royal"){echo "selected";}?> value="royal">Royal</option>
					<option <?php if($list[0]->user_type == "all"){echo "selected";}?> value="all">All</option>
				</select>
				<?php echo form_error("usertype", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Product Type <span class="text-danger">*</span></label>
				<select class="form-control "  name="producttype" required>
					<option selected disabled>-- Select --</option>
					<option value="individual" <?php if($list[0]->product_type == "individual"){echo "selected";}?>>Individual</option>
					<option value="combo" <?php if($list[0]->product_type == "combo"){echo "selected";}?>>Combo</option> 
				</select>
				<?php echo form_error("producttype", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label"> Type <span class="text-danger">*</span></label>
				<select class="form-control " onchange="getType2(this.value)" id="type" name="type" required>
					<option  selected disabled>-- Select --</option>
					<option <?php if($list[0]->type == "flat"){echo "selected";}?> value="flat">Flat</option>
					<option <?php if($list[0]->type == "percent"){echo "selected";}?> value="percent">Percentage</option>
				</select>
				<?php echo form_error("type", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div style="display:none" id="percentdiv2">
				<div class="form-group">
					<label class="col-form-label">Cashback <span class="text-danger">(In %)*</span></label>
					<input type="number" id="percentdis2" min="0" value="<?php if($list[0]->type == "percent"){echo $list[0]->discount;}?>" max="100" step="any" class="form-control " name="percentdis" placeholder="Cashback Discount" >
					<?php echo form_error("percentdis", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div style="display:none" id="amountdiv2"> 
				<div class="form-group">
					<label class="col-form-label">Cashback<span class="text-danger">(In Rupee)*</span></label>
					<input type="number" id="flatdis2"  value="<?php if($list[0]->type == "flat"){echo $list[0]->discount;}?>" class="form-control " name="discountrs" placeholder="Cashback Discount" >
					<?php echo form_error("discountrs", "<p class='text-danger' >", "</p>"); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-form-label">Number of Applied Cashback<span class="text-danger">*</span></label>
				<input type="number" class="form-control" name="cashback_count" value="<?= $list[0]->cashback_count ?>" placeholder="Number of Coupon" required>
				<?php echo form_error("noofcoupon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Max Cashback<span class="text-danger">*</span></label>
				<input type="number" class="form-control" name="maxdis" value="<?= $list[0]->max_discount?>" placeholder="Max Cashback" required>
				<?php echo form_error("maxdis", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Title<span class="text-danger">*</span></label>
				<input type="text" value="<?= $list[0]->title?>" class="form-control" style="text-transform:uppercase;" name="title" id="title" placeholder="Coupon Title" required>
				<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Description <span class="text-danger">*</span></label>
				<textarea class="form-control"  name="description" placeholder="Description" required><?= $list[0]->description?></textarea> 
				<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label ">Terms & Conditions<span class="text-danger">*</span></label>
				<textarea class="form-control summernote" name="termsconditions" placeholder="Terms & Conditions"  required><?= base64_decode($list[0]->termsconditions)?></textarea>
			</div>
			<div class="form-group">
				<label class="col-form-label">Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
				<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" required>
				<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
				<input type="date" class="form-control " value="<?= $list[0]->start_date ?>" id="startdate" name="startdate" required>
				<?php echo form_error("startdate", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">End Date <span class="text-danger">*</span></label>
				<input type="date" class="form-control" value="<?= $list[0]->end_date ?>" id="enddate" name="enddate" required>
				<?php echo form_error("enddate", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<script>
				$(document).ready(function() {
					var type = $("#type").val();
					if(type == "flat")
					{
						$("#amountdiv2").show();
						$("#percentdiv2").hide();
					}
					else if(type == "percent")
					{
						$("#amountdiv2").hide();
						$("#percentdiv2").show();
					}
				});
				
				function getType2(val)
				{
					if(val != null)
					{
						if(val == "flat")
						{
							$("#amountdiv2").show();
							$("#percentdiv2").hide();
							
							$('#flatdis2').attr('required', true);
							$('#percentdis2').removeAttr('required', true);
							
						}
						else if(val == "percent")
						{
							$("#amountdiv2").hide();
							$("#percentdiv2").show();
							
							$('#percentdis2').attr('required', true);
							$('#flatdis2').removeAttr('required', true);
						}
					}
					
				}
			</script>
			
			<?php
				break;
				case 'EditVendor';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Owner Name<span class="text-danger">*</span></label>
						<input type="text" class="form-control" style="text-transform:capitalize;" value="<?php echo $list[0]->name; ?>" name="name" placeholder="Shop Owner Name" required>
						<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control " readonly name="email" value="<?php echo $list[0]->email; ?>" placeholder="Enter Email-Id" required>
						<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">GSTIN No.<span class="text-danger">*</span></label>
						<input type="number" class="form-control" value="<?php echo $list[0]->gstno; ?>" style="text-transform:capitalize;" name="gstno" placeholder="Enter GSTIN Number" required >
						<?php echo form_error("gstno", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">GSTIN Certificate<span class="text-danger">*</span></label>
						<input type="file" class="form-control"  name="gstcertificate" placeholder=""  >
						<?php echo form_error("gstcertificate", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Mobile <span class="text-danger">(10 Digit Only)*</span></label>
						<input type="number" class="form-control " readonly value="<?php echo $list[0]->mobile; ?>" name="mobile" placeholder="Mobile No." required>
						<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Password <span class="text-danger">*</span></label>
						<input type="text" class="form-control " name="password" value="<?php echo $list[0]->password; ?>" placeholder="Enter Password" required>
						<?php echo form_error("password", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Shop Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control " name="shopname" value="<?php echo $list[0]->shop_name; ?>" placeholder="Shop Name" required>
						<?php echo form_error("shopname", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
			</div>
			
			<br/>
			<h4 class="text-secondary">Pickup Details</h4>
			<hr/>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Pickup Authority Name<span class="text-danger">*</span></label>
						<input type="text" class="form-control" value="<?php echo $list[0]->pickup_name; ?>" style="text-transform:capitalize;" name="pickupname" placeholder="Pickup Authority Name" required >
						<?php echo form_error("pickupname", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">State<span class="text-danger">*</span></label>
						<input type="text" class="form-control" value="<?php echo $list[0]->pickup_state; ?>" style="text-transform:capitalize;" name="state" placeholder="Enter State" required >
						<?php echo form_error("state", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">City<span class="text-danger">*</span></label>
						<input type="text" class="form-control" value="<?php echo $list[0]->pickup_city; ?>" style="text-transform:capitalize;" name="city" placeholder="Enter City" required >
						<?php echo form_error("city", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Pincode<span class="text-danger">*</span></label>
						<select class="form-control chosen-select"  name="pincode"  required >
							<?php
								foreach($pincodelist as $each)
								{
								?>
								<option <?php if($each->pincode == $list[0]->pickup_pincode){echo "selected";}?> value="<?= $each->pincode?>"><?= $each->pincode?></option>
								<?php
								}
							?>
						</select>
						<?php echo form_error("pincode", "<p class='text-danger' >", "</p>"); ?>
					</div>
					
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label class="col-form-label">Pickup Address<span class="text-danger">*</span></label>
						<textarea class="form-control" style="text-transform:capitalize;" name="address" placeholder="Enter Pickup Address" required ><?php echo $list[0]->pickup_address; ?></textarea>
						<?php echo form_error("address", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
			</div>
			
			<br/>
			<h4 class="text-secondary">Banking Details</h4>
			<hr/>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">Account Holder<span class="text-danger">*</span></label>
						<input type="text" class="form-control "  value="<?php echo $list[0]->account_holder; ?>" name="acholder" placeholder="Account Holder Name" required >
						<?php echo form_error("acholder", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Account No<span class="text-danger">*</span></label>
						<input type="number" class="form-control "  value="<?php echo $list[0]->account_no; ?>" name="accountno" placeholder="Enter Account No." required >
						<?php echo form_error("pincode", "<p class='text-danger' >", "</p>"); ?>
					</div>
					
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-form-label">IFSC CODE<span class="text-danger">*</span></label>
						<input type="text" class="form-control "  style="text-transform:uppercase" value="<?php echo $list[0]->ifsc; ?>" name="ifsc" placeholder="Enter IFSC CODE" required >
						<?php echo form_error("ifsc", "<p class='text-danger' >", "</p>"); ?>
					</div>
					<div class="form-group">
						<label class="col-form-label">Branch<span class="text-danger">*</span></label>
						<input type="text" class="form-control "  value="<?php echo $list[0]->branch; ?>" name="branch" placeholder="Enter Branch" required >
						<?php echo form_error("branch", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				
			</div>
			
			<?php
				break;
				
				case 'EditUser';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			
			<div class="form-group">
				<label class="col-form-label">User Name<span class="text-danger">*</span></label>
				<input type="text" class="form-control" style="text-transform:capitalize;" value="<?php echo $list[0]->name; ?>" name="name" placeholder="User Name" required>
				<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control " readonly name="email" value="<?php echo $list[0]->email; ?>" placeholder="Enter Email-Id" required>
				<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Mobile <span class="text-danger">(10 Digit Only)*</span></label>
				<input type="number" class="form-control "  value="<?php echo $list[0]->mobile; ?>" name="mobile" placeholder="Mobile No." required>
				<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Password <span class="text-danger">*</span></label>
				<input type="text" class="form-control " name="password" value="<?php echo $list[0]->password; ?>" placeholder="Enter Password" required>
				<?php echo form_error("password", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				
				case 'EditExpert';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			
			<div class="form-group">
				<label class="col-form-label">User Name<span class="text-danger">*</span></label>
				<input type="text" class="form-control" style="text-transform:capitalize;" value="<?php echo $list[0]->name; ?>" name="name" placeholder="User Name" required>
				<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control " readonly name="email" value="<?php echo $list[0]->email; ?>" placeholder="Enter Email-Id" required>
				<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Mobile <span class="text-danger">(10 Digit Only)*</span></label>
				<input type="number" class="form-control "  value="<?php echo $list[0]->mobile; ?>" name="mobile" placeholder="Mobile No." required>
				<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Password <span class="text-danger">*</span></label>
				<input type="text" class="form-control " name="password" value="<?php echo $list[0]->password; ?>" placeholder="Enter Password" required>
				<?php echo form_error("password", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				
				case 'EditPurchaseSeller';
			?>
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			
			<div class="form-group">
				<label class="col-form-label">Seller Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" style="text-transform:capitalize;" value="<?php echo $list[0]->name; ?>" name="name" placeholder="Saller Name" required>
				<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control " readonly name="email" value="<?php echo $list[0]->email; ?>" placeholder="Enter Email-Id" required>
				<?php echo form_error("email", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Mobile <span class="text-danger">(10 Digit Only)*</span></label>
				<input type="number" class="form-control "  value="<?php echo $list[0]->mobile; ?>" name="mobile" placeholder="Mobile No." required>
				<?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Alternate Mobile <span class="text-danger">(10 Digit Only)*</span></label>
				<input type="number" class="form-control " value="<?php echo $list[0]->altmobile; ?>" name="altmobile" placeholder="Alternate Mobile No." required >
				<?php echo form_error("altmobile", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Whatsapp Mobile No<span class="text-danger">(10 Digit Only)*</span></label>
				<input type="number" class="form-control " value="<?php echo $list[0]->wtspmobile; ?>" name="wtspmobile" placeholder="Whatsapp Mobile No." required >
				<?php echo form_error("wtspmobile", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">State<span class="text-danger">*</span></label>
				<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->state; ?>" name="state" placeholder="Enter Your State" required >
				<?php echo form_error("state", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">City<span class="text-danger">*</span></label>
				<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->city; ?>" name="city" placeholder="Enter Your City" required >
				<?php echo form_error("city", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Pincode<span class="text-danger">(6 Digit Only)*</span></label>
				<input type="number" class="form-control " value="<?php echo $list[0]->pincode; ?>" name="pincode" placeholder="Enter Your Pincode." required >
				<?php echo form_error("pincode", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Address <span class="text-danger">*</span></label>
				<textarea type="text" class="form-control " name="address" placeholder="Enter Address" required ><?php echo $list[0]->address; ?></textarea>
				<?php echo form_error("address", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div>
				<h3 class="text-danger">Banking Details</h3>
			</div>
			<div class="form-group">
				<label class="col-form-label">Account Holder<span class="text-danger">*</span></label>
				<input type="text" class="form-control "  value="<?php echo $list[0]->account_holder; ?>" name="acholder" placeholder="Account Holder Name" required >
				<?php echo form_error("acholder", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Account No<span class="text-danger">*</span></label>
				<input type="number" class="form-control "  value="<?php echo $list[0]->account_no; ?>" name="accountno" placeholder="Enter Account No." required >
				<?php echo form_error("pincode", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">IFSC CODE<span class="text-danger">*</span></label>
				<input type="text" class="form-control "  style="text-transform:uppercase" value="<?php echo $list[0]->ifsc; ?>" name="ifsc" placeholder="Enter IFSC CODE" required >
				<?php echo form_error("ifsc", "<p class='text-danger' >", "</p>"); ?>
			</div>
			<div class="form-group">
				<label class="col-form-label">Branch<span class="text-danger">*</span></label>
				<input type="text" class="form-control "  value="<?php echo $list[0]->branch; ?>" name="branch" placeholder="Enter Branch" required >
				<?php echo form_error("branch", "<p class='text-danger' >", "</p>"); ?>
			</div>
			
			<?php
				break;
				case 'subcategory';
				if (count($list) > 0)
				{
					$sr = 1;
				?>
				<option value="">--- select ---</option>
				<?php
					foreach ($list as $each)
					{
					?>
					<option <?php if ($sr == 1)
						{
						} ?> class="optionsubcat<?= $each->id ?>" value="<?= $each->id ?>"><?= ucfirst($each->name) ?></option>
						<?php
							$sr++;
						}
				}
				else
				{
				?>
				<option selected disabled>--- No Sub-Category Available ---</option>
				<?php
				} break;
				case 'cosubcategory';
				if (count($list) > 0)
				{
					$sr = 1;
				?>
				<option value="">--- select ---</option>
				<?php
					foreach ($list as $each)
					{
					?>
					<option <?php if ($sr == 1)
						{
						} ?> class="optioncosubcat<?= $each->id ?>" value="<?= $each->id ?>"><?= ucfirst($each->name) ?></option>
						<?php
							$sr++;
						}
				}
				else
				{
				?>
				<option selected disabled>--- No Co-subcategory Available ---</option>
				<?php 
				}
				break;
				case 'sizetype';
				if (count($list) > 0)
				{
					$sr = 1;
				?>
				<select required name="p_size[]" id="sizename" placeholder="Enter  Size" multiple="multiple" class="form-control  chosen-select" >
					<option value="NA" >N/A</option>
					<?php
						foreach ($list as $each)
						{
							$sizes=explode(',',$each->size_name);
							foreach($sizes as $size){
							?>
							<option  class="optionsizename<?= $size ?>" value="<?= $size ?>"><?= $size ?></option>
							<?php
								$sr++;
							} 
						}
					?>
				</select>
				<?php
				}else
				{
				?>
				<select required name="p_size[]" id="sizename" placeholder="Enter  Size" multiple="multiple" class="form-control  chosen-select" >
					<option selected disabled value="NA">N/A</option>
				</select>
				<?php
				} ?> 
				
				<?php
					break;
					case 'Getproduct';
					
					if (count($list) > 0)
					{
						$sr = 1;
					?>
					<option value="">--- select ---</option>
					<?php
						foreach ($list as $each)
						{
						?>
						<option value="<?= $each->id ?>"><?= $each->name ?> - <?= $each->reg_sell_price ?> ₹</option>
						<?php
							$sr++;
						}
					}
					else
					{
					?>
					<option selected disabled>--- No Product Available ---</option>
					<?php
					}
					break;
					
					case 'subbrand';
					
					if (count($list) > 0)
					{
						$sr = 1;
					?>
					<option value="">--- Select ---</option>
					<?php
						foreach ($list as $each)
						{
						?>
						<option <?php if ($sr == 1)
							{
								echo "selected";
							} ?> value="<?= $each->id ?>" class="optionsubbrand<?= $each->id ?>"><?= $each->name ?></option>
							<?php
								$sr++;
							}
					}
					else
					{
					?>
					<option seleted disabled>--- No Sub-Category Available ---</option>
					<?php
					}
					break;
					
					
					case 'UpdateImageProduct';
				?>
				
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				<input type="hidden" name="column" value="<?php echo $column ?>" />
				
				<?php
					if ($column == 'image1')
					{
						$image = $list[0]->image1;
					}
					elseif ($column == 'image2')
					{
						$image = $list[0]->image2;
					}
					elseif ($column == 'image3')
					{
						$image = $list[0]->image3;
					}
					elseif ($column == 'image4')
					{
						$image = $list[0]->image4;
					}
					elseif ($column == 'image5')
					{
						$image = $list[0]->image5;
					}
				?>
				
				<div class="form-group">
					<label class="col-form-label"> Product Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
					<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $image . '') ?>">
					<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<?php
					break;
					case 'EditSaleProduct':
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				<!--div class="form-group">
					<label class="col-form-label">Choose Sale<span class="text-danger">*</span></label>
					<select class="form-control " name="sale" required>
					<option selected disabled>-- Select --</option>
					<?php
						foreach($salelist as $slist)
						{
						?>
						<option <?php if($list[0]->sale_id == $slist->id){echo "selected";}?> value="<?= $slist->id?>"><?= $slist->name?></option>
						<?php
						}
					?>
					</select>
					<?php echo form_error("sale", "<p class='text-danger' >", "</p>"); ?>
				</div-->
				<!--div class="form-group">
					<label>Product Category<span class="text-danger"> *</span></label>
					<select name="category"  class="form-control pcat " id="cat2" title="Select a Product Category" onchange="change_subcat2(this.value);" data-placeholder="Choose a Category...">
					<option selected disabled>--- Select ---</option>
					<?php
						foreach ($categorylist as $cat)
						{
						?>
						<option class="optioncat<?= $cat->id ?>" value="<?= $cat->id ?>"><?= $cat->name ?></option>
						<?php
						}
					?>
					</select>
					<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
				</div-->
				<!--div class="form-group">
					<label >Product Sub-category<span class="text-danger"> *</span></label>
					<select name="subcategory" onchange="getproduct2(this.value)" class="form-control " id="subcat2" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory...">
					<option selected disabled>--- Select Category First ---</option>
					</select>
					</div>
					<div class="form-group">
					<label class="col-form-label">Choose Product<span class="text-danger">*</span></label>
					<select class=" form-control chosen-select" id="product2" name="product" >
					<option selected disabled>-- Select --</option>
					<?php
						foreach($productlist as $plist)
						{
						?>
						<option <?php if($list[0]->product_id == $plist->id){echo "selected";}?> value="<?= $plist->id?>"><?= $plist->name?> - <?= $plist->reg_sell_price?> ₹</option>
						<?php
						}
					?>
					</select>
					<?php echo form_error("product", "<p class='text-danger' >", "</p>"); ?>
				</div-->
				<!--div class="form-group">
					<label class="col-form-label">Discount Type <span class="text-danger">*</span></label>
					<select class="form-control " onchange="getType2(this.value)" id="type" name="type" required>
					<option  selected disabled>-- Select --</option>
					<option <?php if($list[0]->type == "flat"){echo "selected";}?> value="flat">Flat</option>
					<option <?php if($list[0]->type == "percent"){echo "selected";}?> value="percent">Percentage</option>
					</select>
					<?php echo form_error("type", "<p class='text-danger' >", "</p>"); ?>
				</div-->
				<div id="percentdiv2">
					<div class="form-group">
						<label class="col-form-label">Sale Discount <span class="text-danger">(In %)*</span></label>
						<input type="number" id="percentdis2" min="0" value="<?php if($list[0]->type == "percent"){echo $list[0]->discount;}?>" max="100" step="any" class="form-control " name="percentdis" placeholder="Sale Discount" >
						<?php echo form_error("percentdis", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<div>
					<div class="form-group">
						<label class="col-form-label">Quantity <span class="text-danger">*</span></label>
						<input type="number" id="quantity" min="0" value="<?= $list[0]->quantity;?>" class="form-control " name="quantity" placeholder="Quantity" >
						<?php echo form_error("quantity", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div>
				<!--div style="display:none" id="amountdiv2"> 
					<div class="form-group">
					<label class="col-form-label">Sale Discount <span class="text-danger">(In Rupee)*</span></label>
					<input type="number" id="flatdis2"  value="<?php if($list[0]->type == "flat"){echo $list[0]->discount;}?>" class="form-control " name="discountrs" placeholder="Sale Discount" >
					<?php echo form_error("discountrs", "<p class='text-danger' >", "</p>"); ?>
					</div>
				</div-->
				
				<script>
					$(document).ready(function() {
						var type = $("#type").val();
						if(type == "flat")
						{
							$("#amountdiv2").show();
							$("#percentdiv2").hide();
						}
						else if(type == "percent")
						{
							$("#amountdiv2").hide();
							$("#percentdiv2").show();
						}
					});
					
					function getType2(val)
					{
						if(val != null)
						{
							if(val == "flat")
							{
								$("#amountdiv2").show();
								$("#percentdiv2").hide();
								
								$('#flatdis2').attr('required', true);
								$('#percentdis2').removeAttr('required', true);
								
							}
							else if(val == "percent")
							{
								$("#amountdiv2").hide();
								$("#percentdiv2").show();
								
								$('#percentdis2').attr('required', true);
								$('#flatdis2').removeAttr('required', true);
							}
						}
						
					}
					
					
					function change_subcat2(id) {
						var id = id;
						var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subcategory/') ?>" + id;
						$.ajax({
							url: url,
							type: "post",
							
							success: function(res) {
								// alert(res);
								$("#subcat2").html(res);
							}
						})
						
					}
					
					function getproduct2(id) {
						$('.chosen-select2').chosen('destroy');
						$('.chosen-select').chosen('destroy');
						var subcatid = id;
						var catid = $("#cat2").val();
						
						var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/getproduct/') ?>" +catid+"/"+subcatid;
						$.ajax({
							url: url,
							type: "post",
							
							success: function(res) {
								$("#product2").html(res);
								$('.chosen-select2').chosen();
							}
						})
					}
				</script>
				<?php
					break;
					case 'SaleFilterProducts';  
				?>
				<div class="row">
					<div class="col-sm-2 px-1 pb-0 pt-0">
						<div class="form-group">
							<label for="commondis">Common Discount</label>
							<?php if($saledata->discount_type=='flat'){?>
								<div class="input-group mb-2">  
									<div class="input-group-prepend">
										<div class="input-group-text" style="background: white; border-right: 0; padding:4px;">₹</div>
									</div>
									<input style="border-left:none; padding:4px;" type="number" min="0" max="100" class="form-control"  id="commondis">
								</div>
								<?php }elseif($saledata->discount_type=='percent'){?>
								<div class="input-group mb-2">
									<input style="border-right:none; padding:4px;" type="number" min="0" max="100" class="form-control"  id="commondis">
									<div class="input-group-append">
										<div class="input-group-text" style="background: white; border-left: 0; padding:4px;">%</div>
									</div>
								</div>
								<?php }elseif($saledata->discount_type=='buy_x_get_y'){?>  
								<div class="d-flex">
									<input type="number" min="0" max="100" class="form-control"  placeholder="X" oninput="setXQty(this.value)">_  
									<input type="number" min="0" max="100" class="form-control"  id="commondis" placeholder="Y">
								</div>
							<?php } ?>
						</div> 
					</div>
				</div> 
				<hr>
				<table class="table table-striped table-bordered dataex-res-configuration" id="tablenew" style="width:100%;">
					<thead>
						<tr>
							<th>#</th>
							<th class="p-1" style="width:80px;"><input type="checkbox" id="chkSelectAll">&nbsp;Select</th>
							<th>Name</th>
							<th>Min. Selling Price</th>  
							<th><?php if($saledata->discount_type!='buy_x_get_y'){ echo 'Sale Price';}else{ echo 'Qty Of X-Y';} ?></th>
							<?php if($saledata->discount_type!='buy_x_get_y'){ ?><th>Margin</th><?php } ?>
							<th>Stock</th>
							<th>Quantity</th>
							<th>Image</th>
							<th>Vendor</th>
						</tr>
					</thead>
					<tbody id="tablesaleproduct">
						<?php $srno = 1;
							foreach ($productdata as $item) { 
								$icon = explode(',',$item->image1);
								$variants = $this->db->get_where('product_variant',array('product_id'=>$item->id))->result();
								if(empty($item->vendor_id) || $item->vendor_id=='NA')
								{
									$vendorname = 'Slick pattern';
								}
								else
								{
									$vendor = $this->db->get_where('tbl_vendor',array('id'=>$item->vendor_id))->row();
									if(!empty($vendor)){ 
										$vendorname = $vendor->shop_name;  
									}
								}
								
								$already_in_sale=$this->db->get_where('sale_product',['product_id'=>$item->id,'is_status'=>'true'])->num_rows();
								if($already_in_sale<1){
								?>
								<tr style="">
									<td><?=  $srno?></td>
									<td>
										&nbsp;<input type="checkbox"  class="selectId"  onclick="selectdata(this,<?= $item->id; ?>,'quantity<?= $item->id; ?>')"  name="productid[]" id="checkbox<?= $srno;?>" value="<?= $item->id?>"> 
										<input type="number"  onkeyup="getdisprice(this,'<?= $item->min_sell_price; ?>','<?= $item->reg_sell_price; ?>','disprice<?= $item->id; ?>','margin<?= $item->id; ?>')" class="commondisc" min="0" max="100" style="display:none;width:80px;" placeholder="Enter Discount In %" name="discount<?= $item->id; ?>" id="select<?= $item->id; ?>" >
									</td>
									<td><?= $item->name; ?>
										<input type="hidden" readonly id="minPrice<?= $item->id; ?>" value="<?= $item->min_sell_price; ?>">
									</td>
									<td>
										₹<?= $item->min_sell_price; ?>  
										<input type="hidden" readonly id="regPrice<?= $item->id; ?>" value="<?= $item->reg_sell_price; ?>">	
									</td>
									<td><?php if($saledata->discount_type=='buy_x_get_y'){ ?><input type="text" placeholder="x" style="width:70px !important;" class="x-qty" name="qty_x<?= $item->id; ?>" value="1" required >-<?php } ?><input type="text" readonly name="disprice" id="disprice<?= $item->id; ?>" style="width:70px !important;" class="y-qty"></td>
									<?php if($saledata->discount_type!='buy_x_get_y'){ ?><td><input type="text" readonly name="margin" class="margin" id="margin<?= $item->id; ?>" ></td><?php }?>
									<td><?= $item->stock; ?></td>
									<td><input type="number" min='0' name="quantity<?= $item->id; ?>" class="quantity" id="quantity<?= $item->id; ?>" style="display:none; width:60px !important;" oninput="ValidateQty('<?= $item->stock; ?>',this)"></td>
									<td>
										<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/product/' . $icon[0]); ?>" target="_blank"><img src="<?= base_url('uploads/product/' . $icon[0]); ?>" style=" width:100px;" /></a></label>
									</td>
									<td><?php if(!empty($vendorname) AND $vendorname!='NA'){echo $vendorname;}else{echo "Slick Pattern";} ?></td>
								</tr>
								<?php
									$srno++;
								} 
							}
						?>
						
					</tbody>
				</table>
				<script>
					$('#chkSelectAll').click(function () {
						var checked_status = this.checked;
						$('.selectId').not("[disabled]").each(function () {
							this.checked = checked_status;
						});
					}); 
					
					function setXQty(e){
						$('.x-qty').val(e);
					}
					
					function ValidateQty(qty,e){
						let value=e.value;
						id='#'+e.id; 
						if(parseInt(value)>parseInt(qty)){
							$.notify("Warning: You can'nt enter sale qty of more than total qty", "warn");
							$(id).val('');
						} 
					}
					
					$(document).ready(function(){
						$("#commondis").keyup(function(){
							var comdis=$(this).val();
							var discount_type='<?=$saledata->discount_type?>';
							if(discount_type=='buy_x_get_y'){
								$("#tablesaleproduct tr").each(function(){
									$(this).find("td").eq(1).find("input.commondisc").val(comdis);
									$(this).find("td").eq(4).find("input.y-qty").val(comdis); 
									var xqty=$(this).find("td").eq(4).find("input.x-qty").val();
									var yqty=$(this).find("td").eq(4).find("input.y-qty").val();
									var total_stock=$(this).find("td").eq(5).text();
									count=parseInt(xqty)+parseInt(yqty);
									
									if(parseInt(total_stock)<count){   
										
										$(this).find("td").eq(1).find("input.selectId").attr('disabled',true);
										$(this).find("td").eq(1).find("input.selectId").removeAttr('checked');
										$(this).css('background','#f909090d'); 
										
									}
									else{
										$(this).css('background','#05a3370d');
										$(this).find("td").eq(1).find("input.selectId").attr('disabled',false);
										$(this).find("td").eq(1).find("input.selectId").attr('checked');
									}
									
								})
							}
							else{
								$("#tablesaleproduct tr").each(function(){
									$(this).find("td").eq(1).find("input.commondisc").val(comdis);
									var minPrice=$(this).find("td").eq(2).find("input").val();
									var regPrice=$(this).find("td").eq(3).find("input").val();
									if(discount_type=='percent'){
										var calcPrice = (regPrice) - ((regPrice/100) * comdis );
										var discountPrice = calcPrice.toFixed(2);
										discountPrice=parseInt(discountPrice);
										discountPrice=(getNearestLowestMultipleOf50(discountPrice)-1);
										var margin = (regPrice-discountPrice).toFixed(2);
										margin=parseInt(margin);
									}
									else if(discount_type=='flat')
									{
										var calcPrice = (regPrice - comdis);
										var discountPrice = calcPrice.toFixed(2);
										discountPrice=parseInt(discountPrice);
										discountPrice=(getNearestLowestMultipleOf50(discountPrice)-1);
										var margin = (regPrice-discountPrice).toFixed(2);
										margin=parseInt(margin);
									}
									else if(discount_type=='buy_x_get_y')
									{
										var calcPrice = comdis; 
										var margin = '';
										var discountPrice = calcPrice;
									}
									$(this).find("td").eq(4).find("input[name=disprice]").val(discountPrice);
									$(this).find("td").eq(5).find("input[name=margin]").val(margin);
									if(discountPrice<minPrice){ 
										if(discount_type!='buy_x_get_y'){
											$(this).find("td").eq(1).find("input.selectId").attr('disabled',true);
											$(this).find("td").eq(1).find("input.selectId").removeAttr('checked');
											$(this).css('background','#f909090d'); 
										}
									}
									else{
										$(this).css('background','#05a3370d');
										$(this).find("td").eq(1).find("input.selectId").attr('disabled',false);
										$(this).find("td").eq(1).find("input.selectId").attr('checked');
									}
								})
							}
						})
					})
					
					
					
					var table = $('#tablenew').DataTable({
						responsive: true,
						lengthChange: true,
						buttons: ['excel', 'pdf']
					});
					
					function getdisprice(e,minPrice,regPrice,discountId,marginId) {
						discount=e.value;
						var discount_type='<?=$saledata->discount_type?>';
						
						if(discount_type=='buy_x_get_y'){
							
							$(e).parent().parent().find("td").eq(4).find("input.y-qty").val(discount); 
							var xqty=$(e).parent().parent().find("td").eq(4).find("input.x-qty").val();
							var yqty=$(e).parent().parent().find("td").eq(4).find("input.y-qty").val();
							var total_stock=$(e).parent().parent().find("td").eq(5).text();
							count=parseInt(xqty)+parseInt(yqty);
							
							if(parseInt(total_stock)<count){   
								
								$(e).parent().parent().find("td").eq(1).find("input.selectId").attr('disabled',true);
								$(e).parent().parent().find("td").eq(1).find("input.selectId").removeAttr('checked');
								$(e).parent().parent().css('background','#f909090d');
								$("#"+discountId).val('');
								$("#"+marginId).val('');
							}
							else{
								$(e).parent().parent().css('background','#05a3370d');
								$(e).parent().parent().find("td").eq(1).find("input.selectId").attr('disabled',false);
								$(e).parent().parent().find("td").eq(1).find("input.selectId").attr('checked');
								$("#"+discountId).val(discount);
								$("#"+marginId).val('');
							}
						}
						else{
							if(discount_type=='percent'){
								var calcPrice = regPrice - ((regPrice/100) * discount).toFixed(2);
								discountPrice = calcPrice.toFixed(2);
								discountPrice=parseInt(discountPrice);
								discountPrice=(getNearestLowestMultipleOf50(discountPrice)-1);
								var margin = (regPrice - discountPrice).toFixed(2);
								margin=parseInt(margin);
							}
							else if(discount_type=='flat')
							{
								var calcPrice = (regPrice - discount);
								discountPrice = calcPrice.toFixed(2);
								discountPrice=parseInt(discountPrice);
								discountPrice=(getNearestLowestMultipleOf50(discountPrice)-1); 
								var margin = (regPrice - discountPrice).toFixed(2);
								margin=parseInt(margin);
							}
							else if(discount_type=='buy_x_get_y') 
							{
								var calcPrice = discount; 
								discountPrice = calcPrice;
								var margin = '';
							}
							
							$("#"+discountId).val(discountPrice);
							$("#"+marginId).val(margin);
							
							if(discountPrice<minPrice){
								$(e).parent().find("input.selectId").attr('disabled',true);
								$(e).parent().find("input.selectId").attr('disabled',true);
								$(e).parent().parent().find("td").eq(7).find("input").attr('required',false);
								$(e).parent().parent().css('background','#f909090d');
								console.log(discountPrice);
								console.log(minPrice); 
							} 
							else{ 
								$(e).parent().parent().css('background','#05a3370d');
								$(e).parent().find("input.selectId").attr('disabled',false);
								$(e).parent().find("input.selectId").attr('checked'); 
								$(e).parent().parent().find("td").eq(7).find("input").attr('required',true);
							}
						}
					}
					
					
					function selectdata(chk, sid, quantity) {
						
						if ($(chk).prop("checked") == true)
						{
							$("#select"+sid).show();
							$("#"+quantity).show();
							$("#select"+sid).attr("required", true);
							$("#"+quantity).attr("required", true);
						}
						else 
						{
							$("#select"+sid).hide();
							$("#"+quantity).hide();
							$("#select"+sid).removeAttr('required',true);
							$("#"+quantity).removeAttr('required',true);
							$("#select"+sid).val("");
							$("#"+quantity).val(""); 
							
						}
					}
					
					function getNearestLowestMultipleOf50(number) {
						var nearestLowestMultiple = Math.floor(number / 50) * 50;
						return nearestLowestMultiple; 
					}
				</script>
				<?php
					break;
					
					case 'EditNotification';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				<div class="form-group p-0">
					<label class="col-form-label">Title <span class="text-danger">*</span></label>
					<input type="text" class="form-control text-capitalize" name="title" placeholder="Notification Title" required value="<?php echo $list[0]->title; ?>">
					<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group">
					<label class="col-form-label">Description <span class="text-danger">*</span></label>
					<textarea class="form-control" name="description" placeholder="Description" required><?php echo $list[0]->description; ?></textarea>
					<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<?php
					break;
					
					case 'EditRewardPointSetting';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				<Span class="text-danger">Reward Point Setting</span>
				<div class="form-group p-0">
					<label class="col-form-label">First time user register<span class="text-danger">*</span></label>
					<input type="number" class="form-control" name="firstorder" min="1"  placeholder="First Order" required value="<?php echo $list[0]->first_order; ?>"> 
					<?php echo form_error("first_order", "<p class='text-danger' >", "</p>"); ?>
				</div> 
				<div class="form-group p-0">
					<label class="col-form-label">Birthday celebration reward points<span class="text-danger">*</span></label>
					<input type="number" class="form-control" name="birthday" min="1"  placeholder="Celebrate A Birthday" required value="<?php echo $list[0]->birthday; ?>">
					<?php echo form_error("birthday", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group p-0">
					<label class="col-form-label">Anniversary celebration reward points<span class="text-danger">*</span></label>
					<input type="number" class="form-control" name="anniversary" min="1"  placeholder="Marriage Anniversary" required value="<?php echo $list[0]->marriage_anniversary; ?>">
					<?php echo form_error("anniversary", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group p-0">
					<label class="col-form-label">Min Redemption Points<span class="text-danger">*</span></label>
					<input type="number" class="form-control" min="1" name="minredemption" placeholder="Min Redemption Points" required value="<?php echo $list[0]->min_redemption; ?>">
					<?php echo form_error("minredemption", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group p-0">
					<label class="col-form-label">Share the app with others<span class="text-danger">*</span></label>
					<input type="number" class="form-control" min="1" name="shareapp" placeholder="Share App Points" required value="<?php echo $list[0]->share_app; ?>">
					<?php echo form_error("shareapp", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group p-0">
					<label class="col-form-label">Surfing the mobile app<span class="text-danger">*</span></label>
					<input type="number" class="form-control" min="1" name="visit" placeholder="7 Days Visit Points" required value="<?php echo $list[0]->visit; ?>">
					<?php echo form_error("visit", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group p-0">
					<label class="col-form-label">Women's Day<span class="text-danger">*</span></label>
					<input type="number" class="form-control" min="1" name="womensday" placeholder="Womens Day Points" required value="<?php echo $list[0]->womens_day; ?>">
					<?php echo form_error("womensday", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group p-0">
					<label class="col-form-label">Product Feedback<span class="text-danger">*</span></label>
					<input type="number" class="form-control" min="1" name="productfeedback" placeholder="Product Feedback Points" required value="<?php echo $list[0]->product_feedback; ?>">
					<?php echo form_error("productfeedback", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<hr/>
				<Span class="text-danger mt-4 mb-2">Reward Point Value</span>      
				<div class="form-group p-0">
					<label class="col-form-label">1 Reward Point Value<span class="text-danger">*</span></label> 
					<input type="number" class="form-control" name="rewardvalue" min="0" step="any" placeholder="1 Reward Point Value" required value="<?php echo $list[0]->reward_value; ?>">
					<?php echo form_error("reward_value", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group p-0">    
					<label class="col-form-label">Expire<span class="text-danger">&nbsp;(in days)&nbsp;*</span></label>            
					<input type="number" class="form-control" name="expire_date" min="0" step="1" placeholder="Expire in days " required value="<?php echo $list[0]->expire_date; ?>">
					<?php echo form_error("expire_date", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<?php
					break;
					
					case 'EditDeliveryCharge';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				
				
				<div class="form-group">
					<label class="col-form-label">Pincode <span class="text-danger">*</span></label>
					<input type="number" readonly class="form-control  text-capitalize" minlength="6" maxlength="6" value="<?php echo $list[0]->pincode; ?>" name="pincode" placeholder="Enter Area Pincode" required>
					<?php echo form_error("pincode", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group">
					<label class="col-form-label">Area<span class="text-danger">*</span></label>
					<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->area; ?>" name="area" placeholder="Enter Pincode Area Name" required >
					<?php echo form_error("charge", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group">
					<label class="col-form-label">Delivery Charge<span class="text-danger">*</span></label>
					<input type="number" class="form-control text-capitalize" name="charge" value="<?php echo $list[0]->charge; ?>" placeholder="Enter Charge" required>
					<?php echo form_error("charge", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group">
					<label class="col-form-label">Description <span class="text-danger">*</span></label>
					<textarea class="form-control text-capitalize" name="description" placeholder="Description" required><?php echo $list[0]->description; ?></textarea>
					<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<?php
					break;
					case 'SaleFilterCombo';
				?>
				<hr>
				<table class="table table-striped table-bordered dataex-res-configuration" id="tablenew" style="width:100%;">
					
					<thead>
						<tr>
							<th>#</th>
							<th>Check</th>
							<th>Name</th>
							<th>Mrp</th>
							<th>Price</th>
							<th>Sale Price</th>
							<th>Margin</th>
							<th>Quantity</th>
							<th>Image</th>
							<th>Fashion Expert</th>
						</tr>
					</thead>
					<tbody id="tablesaleproduct">
						<?php $srno = 1;
							foreach ($productdata as $item) { 
								$icon = explode(',',$item->image);
								$expert = $this->db->get_where('fashion_expert',array('id'=>$item->expert_id))->row();
							?>
							<tr>
								<td><?=  $srno?></td>
								<td>
									<input type="checkbox"  onclick="selectdata(this,<?= $item->id; ?>)"  name="productid[]" id="checkbox<?= $srno;?>" value="<?= $item->id?>"> 
									<input type="number" onkeyup="getdisprice(this.value,'proprice<?= $item->id; ?>','disprice<?= $item->id; ?>','<?= $item->price; ?>','<?= $item->purchase_price; ?>','margin<?= $item->id; ?>')" class="form-control commondisc" min="0" max="100" style="display:none;" placeholder="Enter Discount In %" name="discount[]" id="select<?= $item->id; ?>" >
								</td>
								<td><?= $item->name; ?></td>
								<td><?= $item->price; ?> ₹
									<input type="hidden" readonly id="purchaseprice<?= $item->id; ?>" value="<?= $item->purchase_price; ?>">
								</td>
								<td><?= $item->discount_price; ?> ₹
									<input type="hidden" readonly id="proprice<?= $item->id; ?>" value="<?= $item->price; ?>">	
								</td>
								<td><input type="text" readonly name="disprice" id="disprice<?= $item->id; ?>" ></td>
								<td><input type="text" readonly name="margin" class="margin" id="margin<?= $item->id; ?>" ></td>
								<td><input type="number" min='0' name="quantity[]" class="quantity" id="quantity<?= $item->id; ?>" style="display:none;"></td>
								<td>
									<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/product/' . $icon[0]); ?>" target="_blank"><img src="<?= base_url('uploads/product/' . $icon[0]); ?>" style=" width:100px;" /></a></label>
								</td>
								<td><?= $expert->name; ?></td>
							</tr>
							<?php
								$srno++;
							} ?>
					</tbody>
					
				</table>
				<script>
					$(document).ready(function(){
						$("#commondis").keyup(function(){
							
							var comdis=$(this).val();
							
							
							$("#tablesaleproduct tr").each(function(){
								
								$(this).find("td").eq(1).find("input.commondisc").val(comdis);
								
								var purchaseprice=$(this).find("td").eq(3).find("input").val();
								var offprice=$(this).find("td").eq(4).find("input").val();
								var calcPrice = offprice - ( (offprice/100) * comdis );
								var discountPrice = calcPrice.toFixed(2);
								var margin = (discountPrice - purchaseprice).toFixed(2);
								$(this).find("td").eq(5).find("input[name=disprice]").val(discountPrice);
								$(this).find("td").eq(6).find("input[name=margin]").val(margin);
							})
						})
					})
					
					var table = $('#tablenew').DataTable({
						responsive: true,
						lengthChange: true,
						buttons: ['excel', 'pdf']
					});
					
					
					function getdisprice(discount,pid,disprice,price,purchaseprice,marginid) {
						if(discount != '')
						{
							calcPrice = price - ( (price/100) * discount );
							discountPrice = calcPrice.toFixed(2);
							$("#"+disprice).val(discountPrice);
							var margin = (discountPrice - purchaseprice).toFixed(2);
							$("#"+marginid).val(margin);
						}
						else
						{
							$("#"+disprice).val('');
							$("#"+marginid).val('');
						}
					}
					
					function selectdata(chk, sid) {
						
						if ($(chk).prop("checked") == true)
						{
							$("#select"+sid).show();
							$("#quantity"+sid).show();
							$("#select"+sid).attr("required", true);
							$("#quantity"+sid).attr("required", true);
						}
						else 
						{
							$("#select"+sid).hide();
							$("#quantity"+sid).hide();
							$("#select"+sid).removeAttr('required',true);
							$("#quantity"+sid).removeAttr('required',true);
							$("#select"+sid).val("");
							$("#quantity"+sid).val("");
						}
					}
				</script>
				<?php
					break;
					
					case 'CouponFilterProducts';
					
				?>
				<table class="table table-striped table-bordered dataex-res-configuration" id="tablenew" style="width:100%;">
					<thead>
						<tr> 
							<th>#</th>
							<th><input type="checkbox" id="selectAll" ></th>
							<th>Name</th>
							<th>Product Code</th>
							<th>HSN Id</th>
							<th>SKU Id</th>
							<th>Mrp</th>
							<th>Reg. Sell Price</th>
							<th>Image</th>
							<th>Vendor Name</th>
						</tr>
					</thead>
					<tbody id="tbody">
						<?php $srno = 1;
							foreach ($productdata as $item) { 
								$icon = explode(',',$item->image1);
							?>
							<tr>
								<td><?=  $srno?></td>    
								<td>&nbsp;&nbsp;<input type="checkbox" name="productid[]" class="selectAll" id="checkbox<?= $srno;?>" value="<?= $item->id?>"></td>    
								<td><?= $item->name; ?></td>
								<td><?= $item->product_code; ?></td>
								<td><?= $item->hsn; ?></td>
								<td><?= $item->skuid; ?></td>
								<td>₹<?= $item->mrp; ?></td>
								<td>₹<?= $item->reg_sell_price; ?></td>
								<td>
									<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/product/' . $icon[0]); ?>" target="_blank"><img src="<?= base_url('uploads/product/' . $icon[0]); ?>" style=" width:100px;" /></a></label>
								</td>
								<td><?php if(!empty($vendorname) AND $vendorname!='NA'){echo $vendorname;}else{echo "Slick Pattern";} ?></td>
							</tr>
							<?php
								$srno++;
							} ?>
					</tbody>
				</table>
				<script>
					
					var table = $('#tablenew').DataTable({
						responsive: true,
						lengthChange: true,
						buttons: ['excel', 'pdf']
					});
					
					$("#selectAll").on("click", function () {
						$("#tbody tr").each( function() {
							if($(this).find("input[name='productid[]']").prop("checked") == false)
							{
								$(this).find("input[name='productid[]']").attr('checked', true);
							}
							else
							{
								$(this).find("input[name='productid[]']").removeAttr('checked', true);   
							}
						});
					});
					
				</script>
				<?php
					break;
					
					case 'CouponFilterCombo';
					
				?>
				<button type="button" class="btn btn-primary mb-2" id="selectAll" >
				<i class="fa fa-plus-circle" aria-hidden="true"></i> Check All</button>
				<table class="table table-striped table-bordered dataex-res-configuration" id="tablenew" style="width:100%;">
					<thead>
						<tr>
							<th>#</th>
							<th>Check</th>
							<th>Name</th>
							<th>Mrp</th>
							<th>Price</th>
							<th>Image</th>
						</tr>
					</thead>
					<tbody id="tbody">
						<?php $srno = 1;
							foreach ($productdata as $item) { 
								$icon = explode(',',$item->image);
								
							?>
							
							<tr>
								<td><?=  $srno?></td>
								<td>
								<input type="checkbox" name="productid[]" id="checkbox<?= $srno;?>" value="<?= $item->id?>"> </td>
								<td><?= $item->name; ?></td>
								<td><?= $item->price; ?> ₹
									
								</td>
								<td><?= $item->discount_price; ?> ₹</td>
								<td>
									<label data-toggle="tooltip" data-placement="top" title="ID: <?= $item->id; ?>"><a href="<?= base_url('uploads/product/' . $icon[0]); ?>" target="_blank"><img src="<?= base_url('uploads/product/' . $icon[0]); ?>" style=" width:100px;" /></a></label>
									
								</td>
							</tr>
							
							<?php
								$srno++;
							} ?>
							
					</tbody>
					
				</table>
				<script>
					
					var table = $('#tablenew').DataTable({
						responsive: true,
						lengthChange: true,
						buttons: ['excel', 'pdf']
					});
					
					$("#selectAll").on("click", function () {
						$("#tbody tr").each( function() {
							if($(this).find("input[name='productid[]']").prop("checked") == false)
							{
								$(this).find("input[name='productid[]']").attr('checked', true);
							}
							else
							{
								$(this).find("input[name='productid[]']").removeAttr('checked', true);   
							}
						});
					});
				</script>
				<?php
					break;
					
					case 'ViewImageProducts';
				?>
				<div class="row">
					<?php
						$sr=1;
						foreach($list as $icon)
						{
						?>
						<div class="col-sm-4">
							<a href="javascript:void()" title="<?= $icon?>"><img  src="<?= base_url('/uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>
							<br><br>
							
							<center>
								<button title="<?= $datas->id?>" onclick="EditProductImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageProduct/') ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>&nbsp <br/><br/>
								<?php
									if($sr != '1')
									{
									?>
									<button title="<?= $datas->id?>" onclick="DeleteDesignImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageProduct/') ?>','/')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
									<?php
									}
								?>
							</center><br/>
							
						</div><br/>
						<?php
							$sr++;
						}
					?>
				</div><br/>
				<div class="row">
					
					
					<!--center><button title="<?= $datas->id?>" onclick="AddDesignImg('<?= $datas->id?>','<?= base_url('ControlPanel/AddDesignImg/') ?>','/')" class="btn btn-primary"><i class="fa fa-plus"></i> Add Image</button></center-->
					
				</div>
				
				<?php
					break;
					
					case 'EditQuiz';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				<div class="form-group">
					<label class="col-form-label">Quiz Name <span class="text-danger">*</span></label>
					<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->name; ?>" name="name" placeholder="Quiz Name" required >
					<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group">
					<label class="col-form-label">Title<span class="text-danger">*</span></label>
					<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->title; ?>" name="title" placeholder="Quiz Title" required >
					<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
				</div>
				<div class="form-group">
					<label class="col-form-label">Description<span class="text-danger">*</span></label>
					<textarea class="form-control " name="description"  required ><?php echo $list[0]->description; ?></textarea>
					<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<div class="form-group">
					<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
					<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
					<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
				</div>
				
				<?php
					break;
					
					case 'EditProductImage';
					
					foreach($icons as $icon)
					{
						if($icon == $imagename)
						{
						?>
						<center><img src="<?= base_url('uploads/product/') . $icon ?>" style="height:100px;" /></center>
						
						<?php
						}
					}
				?>
				
				<div style="display:none" id="errorContainer" class="bg-light text-danger mb-3 p-2" style="border-radius: 5px;">
				</div>
				<input type="text" name="id" value="<?= $list[0]->id?>"  class="form-control" hidden>
				<input type="text" name="imagename" value="<?= $imagename?>"  class="form-control" hidden>
				<div class="form-group">
					<label class="form-label" for="exampleInputEmail1">Edit Image</label>
					<input required type="file" name="icon" class="form-control">
				</div>
				
				
				
				<?php
					break;
					
					case 'EditColor';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				
				
				<div class="form-group">
					<label for="input-2">Color Name<span class="text-danger">*</span></label>
					<input type="text" class="form-control demoInputBox " value="<?php echo $list[0]->name; ?>" name="name"  title="Please Choose a Name" required >
				</div>
				<div class="form-group">
					<label for="input-2">Color<span class="text-danger">*</span></label>
					<input type="color" readonly value="<?php echo $list[0]->code; ?>" id="style2" class="form-control demoInputBox " name="code"  title="Please Choose a Color" required >
				</div>
				
				<?php
					break;
					
					case 'EditSize';
				?>
				<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
				
				<div class="form-group">
					<label for="input-2">Size Type<span class="text-danger">*</span></label>
					<input type="text" class="form-control demoInputBox " value="<?php echo $list[0]->size_type; ?>" readonly name="size_type"  title="Please Choose Type" required >
				</div>
				<div class="form-group">
					<label for="input-2">Size<span class="text-danger">*</span></label>
					<input type="text text-uppercase" oninput="this.value = this.value.toUpperCase();" onkeyup="if(this.value.substr(0, 1)=='-'){this.value= this.value.substr(1)}"   value="<?php echo $list[0]->size_name; ?>"  class="form-control demoInputBox " name="size_name"  title="Please Choose Name" required >
				</div>
				<div class="form-group">
					<label class="col-form-label">Size Chart <span class="text-danger">(Optional)</span></label>
					<textarea class="form-control ptags summernote" style="border:1px solid #aaaaaa;" name="size_chart" id="tags">
						<?php echo base64_decode($list[0]->size_chart); ?>
					</textarea>
				</div>
				<div class="form-group">
					<label class="col-form-label">Size Chart <span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
					<input type="file" class="form-control dropify"  data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder. '/' . $list[0]->image) ?>">
				</div> 
				<?php
					break;
					
					case 'EditAttribute';
				?>
				<div class="form-group">
					<input type="hidden" value="<?= $list->id ?>" name="id"> 
					<label for="input-2">Category<span class="text-danger">*</span></label>
					<select  name="category" class="form-control form-control" onchange="change_subcat(this.value);" required>
						<?php 
							$catName=$this->db->get_where('categories',array('id'=>$list->category))->row();
							if(!empty($catName)){
								$category=$catName->name; 
								}else{
								$category="No category Found"; 
							}
						?>
						<option selected value="<?= $list->category ?>"><?= $category ?></option> 
						<?php
							if(!empty($allcategory)){
								foreach($allcategory as $each){ 
								?>
								<option value="<?php echo $each->id; ?>"><?php echo $each->name; ?></option> 
							<?php } }?>
					</select>
				</div>
				<div class="form-group">
					<label for="input-2">Subcategory<span class="text-danger">*</span></label>
					<select  name="subcategory" id="attribute_subcat"  class="form-control form-control" required >
						<?php 
							$subcat=$this->db->get_where('sub_category',array('category_id'=>$list->category))->result();
							if(empty($subcat)){
								echo "<option selected disabled>No category Found</option>";  
							}
							else{
								foreach($subcat as $eachsubcat){ 
								?>
								<option value="<?= $eachsubcat->id ?>" <?php if($eachsubcat->id==$list->subcategory){ echo "selected";}?> ><?= $eachsubcat->name ?></option> 
							<?php } }?>
					</select>
				</div>
				<div class="form-group">
					<label for="input-2">Attribute Type<span class="text-danger">*</span></label>
					<select  name="attribute_type" class="form-control form-control" required> 
						<option value="product_attr" <?php if($list->attribute_type=='product_attr'){echo 'selected';}?>>Product Attribute</option> 
						<option value="expert_attr" <?php if($list->attribute_type=='expert_attr'){echo 'selected';}?> >Expert Attribute</option> 
					</select>
				</div> 
				<div class="form-group">
					<label for="input-2">Attribute<span class="text-danger">*</span></label>
					<input type="text" class="form-control demoInputBox " value="<?= $list->attribute ?>" name="attribute"  title="Please Choose Attribute" required > 
				</div>
				<div class="form-group">
					<label for="input-2">Attribute value<span class="text-danger">(In case of multiple value each value seprated With Comma ,&nbsp;)*</span></label>   
					<input type="text text-uppercase" class="form-control demoInputBox " name="attribute_value" value="<?= $list->attribute_value ?>"  title="Please Choose Attribute Value" required >
				</div>
				<script>
					function change_subcat(id) {
						var id = id;
						var url = "<?= base_url($this->data->controller . '/ManageProduct/subcategory/') ?>" + id; 
						$.ajax({
							url: url,
							type: "post",
							success: function(res) {
								$("#attribute_subcat").html(res);  
							}
						})
					}
				</script>
				<?php
					break;
					case 'ProductAttribute';
				?>
				<?php 
					if(!empty($list)){ ?> 
					<div class="col-sm-12">
						<div><h6  class="sub-heading text-primary" >Product Attribute&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
							<div class="row">
								<?php foreach($list as $attribute){ ?>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="input-2"><?= $attribute->attribute?><span class="text-danger">(Optional)</span></label>
											<select  name="productattr[]"  class="form-control form-control" required>
												<option selected disabled>select</option>
												<?php
													$attr_value=explode(',',$attribute->attribute_value); 
													if(!empty($attr_value)){
														foreach($attr_value as $each){   
														?>
														<option value="<?php echo $attribute->attribute.':'.$each; ?>"><?php echo $each; ?></option>  
													<?php } }?>
											</select>
										</div>
									</div> 
								<?php }  ?> 
							</div><hr>
						</div>
						<?php } 
						break;
						case 'ExpertAttribute';
						?>
						<?php 
							if(!empty($list)){ ?> 
							<div class="col-sm-12">
								<div><h6  class="sub-heading text-primary" >Expert Attribute&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6> </div>
									<div class="row">
										<?php foreach($list as $attribute){ 
										?>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="input-2"><?= $attribute->attribute?><span class="text-danger">(Optional)</span></label>
												<select  name="expertattr[]"  class="form-control form-control" required>
													<option selected disabled>select</option>
													<?php
														$attr_value=explode(',',$attribute->attribute_value); 
														if(!empty($attr_value)){
															foreach($attr_value as $each){   
															?>
															<option value="<?php echo $attribute->attribute.':'.$each; ?>"><?php echo $each; ?></option>  
														<?php } }?>
												</select>
											</div>
										</div> 
										<?php }  ?> 
									</div><hr>
								</div>
								<?php } 
								break;
								case 'ViewImageCombo';
								?>
								<div class="row">
									<?php
										$sr=1;
										foreach($list as $icon)
										{
										?>
										<div class="col-sm-4">
											
											
											<center>
												<a href="<?= base_url('/uploads/product/') . $icon ?>" target="_blank" title="<?= $icon?>"><img  src="<?= base_url('/uploads/product/') . $icon ?>" style="height:150px; width:150px;" /></a>
												<br><br>
												<button title="<?= $datas->id?>" onclick="EditComboImg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageCombo/') ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>&nbsp
												<?php
													if($sr != '1')
													{
													?>
													<button title="<?= $datas->id?>" onclick="DeleteComboimg('<?= $icon ?>','<?= $datas->id?>','<?= base_url('Admin/ManageCombo/') ?>','/')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
													<?php
													}
												?>
											</center><br/> 
											
										</div><br/>
										<?php
											$sr++;	
										}
									?>
								</div><br/>
								<?php
									break;
									
									case 'EditComboImage';
									
									foreach($icons as $icon)
									{
										if($icon == $imagename)
										{
										?>
										<center><img src="<?= base_url('uploads/product/') . $icon ?>" style="height:100px;" /></center>
										
										<?php
										}
									}
								?>
								
								<div style="display:none" id="errorContainer" class="bg-light text-danger mb-3 p-2" style="border-radius: 5px;">
								</div>
								<input type="text" name="id" value="<?= $list[0]->id?>"  class="form-control" hidden>
								<input type="text" name="imagename" value="<?= $imagename?>"  class="form-control" hidden>
								<div class="form-group">
									<label class="form-label" for="exampleInputEmail1">Edit Image</label>
									<input required type="file" name="icon" class="form-control">
								</div>
								
								
								
								<?php
									break;
									
									case 'EditNewsLetter';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								
								<div class="form-group p-0">
									<label class="col-form-label">Title<span class="text-danger"></span></label>
									<input type="text" class="form-control text-capitalize" name="title" placeholder="Title"  value="<?php echo $list[0]->title; ?>">
									<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Description <span class="text-danger"></span></label>
									<textarea class="form-control" name="description" placeholder="Description" ><?php echo $list[0]->description; ?></textarea>
									<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label"> Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
									<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								<?php
									break;
									
									case 'EditTermsDetails';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Privacy & Cookies <span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="cookies" placeholder="Privacy & Cookies " required><?php echo $list[0]->privacy_cookie; ?></textarea>
											<?php echo form_error("cookies", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Exchange Policy <span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="exchangepolicy" placeholder="Exchange Policy " required><?php echo $list[0]->exchange_policy; ?></textarea>
											<?php echo form_error("exchangepolicy", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Return Policy<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="returnpolicy" placeholder="Return Policy" required><?php echo $list[0]->return_policy; ?></textarea>
											<?php echo form_error("returnpolicy", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Shipping & Delivery<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="shippingterms" placeholder="Shipping & Delivery" required><?php echo $list[0]->shipping_terms; ?></textarea>
											<?php echo form_error("shippingterms", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Shopping Guide<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="shoppingguide" placeholder="Shopping Guide" required><?php echo $list[0]->shopping_guide; ?></textarea>
											<?php echo form_error("shoppingguide", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Choose Your Size<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="choosesize" placeholder="Choose Your Size" required><?php echo $list[0]->choose_size; ?></textarea>
											<?php echo form_error("choosesize", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Intellectual Property <span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="intellectual" placeholder="Itellectual Property " required><?php echo $list[0]->intellectual_proprty; ?></textarea>
											<?php echo form_error("intellectual", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Refund Policy<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="refundpolicy" placeholder="Refund Policy" required><?php echo $list[0]->refund_policy; ?></textarea>
											<?php echo form_error("refundpolicy", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Cancellation Policy<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="cancellationpolicy" placeholder="Cancellation Policy" required><?php echo $list[0]->cancellation_policy; ?></textarea>
											<?php echo form_error("cancellationpolicy", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Terms & Condition<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="termscondition" placeholder="Terms & Condition" required><?php echo $list[0]->terms_condition; ?></textarea>
											<?php echo form_error("termscondition", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group">
											<label class="col-form-label">Coupon Redemption<span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="couponredemption" placeholder="Coupon Redemption" required><?php echo $list[0]->coupon_redemption; ?></textarea>
											<?php echo form_error("couponredemption", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
								</div>
								
								<?php
									break;
									
									case 'EditAbout';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group p-0">
											<label class="col-form-label">Meta Keywords<span class="text-danger"></span></label>
											<input type="text" class="form-control" required name="keyword" value="<?php echo $list[0]->meta_keyword; ?>" placeholder="Meta Keywords"  >
											<?php echo form_error("keyword", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group p-0">
											<label class="col-form-label">Meta Title<span class="text-danger"></span></label>
											<input type="text" class="form-control text-capitalize" required name="metatitle" value="<?php echo $list[0]->meta_title; ?>" placeholder="Meta Title"  >
											<?php echo form_error("metatitle", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Meta Description <span class="text-danger"></span></label>
											<textarea class="form-control " required name="metadescription" placeholder="Meta Description" ><?php echo $list[0]->meta_description; ?></textarea>
											<?php echo form_error("metadescription", "<p class='text-danger' >", "</p>"); ?>
										</div>
										<div class="form-group p-0">
											<label class="col-form-label">Name<span class="text-danger">*</span></label>
											<input type="text" class="form-control text-capitalize" name="name" placeholder="Name" required value="<?php echo $list[0]->name; ?>">
											<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Message <span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="message" placeholder="Message" required><?php echo $list[0]->message; ?></textarea>
											<?php echo form_error("message", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label"> Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
											<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="col-form-label">Main Banner <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="mainicon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->mainicon . '') ?>">
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
											<input type="text" class="form-control text-capitalize" value="<?php echo $list[0]->title; ?>" name="title" placeholder="Title" required >
											<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Description <span class="text-danger">*</span></label>
											<textarea class="form-control summernote" name="description"  required><?php echo $list[0]->description; ?></textarea>
											<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Image<span class="text-danger">* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
											<input type="file" class="form-control dropify" data-height="100" name="image" Title="Choose Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image . '') ?>">
											<?php echo form_error("image", "<p class='text-danger' >", "</p>"); ?>
										</div>
									</div>
								</div>
								<?php
									break;
									
									case 'EditCornerPopup';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								
								<div class="form-group">
									<label class="col-form-label"> Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose Icon" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
									<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								<?php
									break;
									
									case 'EditFaq';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								<div class="form-group">
									<label class="col-form-label">Category<span class="text-danger">*</span></label>
									<select class="text-capitalize form-control" name="category" required>
										<option selected disabled>Select</option>
										<?php
											foreach ($categorylist as $each)
											{
											?>
											<option <?php if ($each->id == $list[0]->category_id)
												{
													echo "selected";
												} ?> value="<?= $each->id ?>"><?= $each->name ?></option>
										<?php } ?>
										
									</select>
									<?php echo form_error("category", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Question <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="<?php echo $list[0]->question; ?>" name="question" placeholder="Enter Question" required>
									<?php echo form_error("question", "<p class='text-danger'>", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Answer<span class="text-danger">*</span></label>
									<textarea class="form-control text-capitalize" name="answer" ><?php echo $list[0]->answer; ?></textarea>
									<?php echo form_error("answer", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<?php
									break;
									case 'EditGiftCard';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								
								<div class="form-group">
									<label class="col-form-label">Gift Card Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize"  name="name" value="<?php echo $list[0]->name; ?>" placeholder="Gift Card Name" required >
									<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Title<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize" name="title" value="<?php echo $list[0]->title; ?>" placeholder="Gift Card Title" required >
									<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								
								<div class="form-group">
									<label class="col-form-label">Icon <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" name="icon" Title="Choose"  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->icon . '') ?>">
									<?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<?php
									break;
									
									case 'EditGiftWrap';
								?>
								<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								<div class="form-group">
									<label class="col-form-label">Type<span class="text-danger">*</span></label>
									<select name="type" class="form-control form-control" required="">
										<option selected="" value="<?php echo $list[0]->type; ?>"><?php echo ucfirst($list[0]->type); ?></option> 
										<option value="wrapper">Wrapper</option> 
										<option value="box">Box</option>  
									</select>
								</div>
								<div class="form-group">
									<label class="col-form-label">Gift Wrapper/Box Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize" name="name" value="<?php echo $list[0]->name; ?>" placeholder="Gift Card Name" required >
									
								</div>
								<div class="form-group">
									<label class="col-form-label">Gift Wrapper/Box Price<span class="text-danger">*</span></label>
									<input type="text" class="form-control text-capitalize" name="price" value="<?php echo $list[0]->price; ?>" placeholder="Gift Wrapper/Box Price" required >
									<?php echo form_error("price", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Wrapper/Box Image <span class="text-danger"><small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
									<input type="file" class="form-control dropify" data-height="100" value name="image" Title="Choose" required  accept="image/jpg, image/png, image/jpeg,image/webp,image/avif, image/svg" data-default-file="<?php echo base_url('uploads/' . $this->data->folder . '/' . $list[0]->image. '') ?>">   <?php echo form_error("icon", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<?php
									break;
									case 'EditFaqCategory';
								?>
								<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
								<div class="form-group">
									<label class="col-form-label">Name<span class="text-danger">*</span></label>
									<input type="text" value="<?php echo $list[0]->name; ?>" class="form-control text-capitalize" name="name" placeholder=" Name" required >
									<?php echo form_error("name", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Title<span class="text-danger">*</span></label>
									<input type="text" value="<?php echo $list[0]->title; ?>" class="form-control text-capitalize" name="title" placeholder="Gift Card Title" required >
									<?php echo form_error("title", "<p class='text-danger' >", "</p>"); ?>
								</div>
								<div class="form-group">
									<label class="col-form-label">Description<span class="text-danger">*</span></label>
									<textarea class="form-control text-capitalize" name="description" ><?php echo $list[0]->description; ?></textarea>
									<?php echo form_error("description", "<p class='text-danger' >", "</p>"); ?>
								</div>
								
								<?php
									break;
									case 'ViewOrder';
								?>
								<?php if(!empty($order)){
									foreach($order as $order){
									?>
									<div class="row">
										<div class="col-sm-8"><strong>Date-Time</strong> : <?= $order->created_at?></div>
										<div class="col-sm-4">
											<strong>Order Status :</strong>
										<b class="text-primary"><?=$order->order_status?></b>	</div>
									</div><br> 
									<div class="row">
										<div class="col-sm-12 table-responsive">
											<table class="table table-bordered ">
												<?php
													$uid =  $order->userid;
													$shippingCharge=$order->shipping_charge;
													$uDetails = $this->db->get_where('tbl_user', array('id' => $uid))->row();
													$userid=$order->userid;
													$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
													$subscription='false';
													if($subscriber->num_rows()>0){
														$subscriber=$subscriber->row();
														$plan_expire_date=date('y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
														$current_date=date('y-m-d');  
														$diff =  date_diff(date_create($current_date),date_create($plan_expire_date))->format("%R%a"); 
														if($diff>=0){
															$subscription='true';
														}
														else{
															$subscription='false';
														} 
													}
													else{
														$subscription='false';
													}
												?>
												<tbody><tr>
													<th>Order Id </th>
													<td class="text-uppercase"><?= $order->orderid?></td>
													<th>Name</th>
													<td><a href="<?= base_url('Admin/ManageUsers/UserFullDetails/'.$order->userid)?>"><?= $uDetails->name;?><?php if($subscription=='true'){echo '&nbsp;<span class="badge bg-warning">Royal</span>';}?></a></td>
												</tr>
												<tr>
													<th>Mobile</th>
													<td><a href="#"><?= $uDetails->mobile;?></a></td>
													<th>Email</th>
													<td><a href="#"><?= $uDetails->email;?></a></td>
												</tr>
												<!-- product details -->
												</tbody></table>
										</div>
										<div class="col-sm-12 table-responsive">
											<table class="table table-bordered">
												<style>
													.table td, .table th {
													border-bottom: 1px solid #E3EBF3;
													padding: 0.75rem 0.75rem;
													}
												</style>
												<tbody><tr style="background-color:lavender;">
													<th colspan="7">Product Information</th>	
												</tr>
												<tr>
													<th>#</th>
													<th>Product</th>
													<th>Product Details</th>
													<th>Unit Price</th>
													<th>Quantity</th>
													<th>Total</th>
												</tr>
												<!--individual product orders-->
												<?php
													$count=1;
													$id=$order->orderid;
													$Indsel=$this->db->query("select * from tbl_cart where orderid='$id' AND is_combo='' AND availability='';");
													$Indsel=$Indsel->result();
													$totalIndividualPrice=0;
													$totalIndividualClubCash=0;
													$totalIndividualNormolPrice=0;
													$totalIndividualMrp=0;
													$totalIndividualGst=0;
													
													if(!empty($Indsel)){ 
														foreach($Indsel as $each)
														{	$sale="false";
															$product = $this->db->get_where('products',array('id'=>$each->product_id));
															if($product->num_rows()>0)
															{
																$product = $product->row();
																$icons = explode(',',$product->image1);
																$id = $order->userid;
																$variant = $this->db->get_where('product_variant',array('id'=>$each->variant_id));
																if($variant->num_rows()>0)
																{
																	$variant = $variant->row();
																	$cartprice = $this->db->get_where('products',array('id'=>$each->product_id))->row();
																	
																	// code for check sale is available or not on this product 
																	$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->product_id,'sale_type'=>'individual'))->row();
																	if(!empty($saleProduct)){
																		
																		$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																		$today = date_create(date('Y-m-d H:i:s',strtotime($order->created_at))); 
																		$order_date=date('Y-m-d',strtotime($order->created_at))	; 
																		$sale_start_date = date_create($tblSale->start_date); 
																		$sale_end_date = date_create($tblSale->end_date); 
																		if(!empty($saleProduct->sale_id) AND (($order_date>=$sale_start_date) AND ($order_date<=$sale_end_date)))
																		{
																			$saleRate=$cartprice->mrp;
																			$discount=(int)$saleProduct->discount;
																			$saleprice=$saleRate - ( ($saleRate/100) * $discount );
																			$price=$saleprice;
																			$sale="true";
																		}
																		else
																		{
																			$price = $cartprice->reg_sell_price;
																		}
																	}
																	else
																	{
																		$price = $cartprice->reg_sell_price;
																	}
																	
																	$userid=$order->userid;
																	$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
																	$subscription='false';
																	if($subscriber->num_rows()>0){
																		$subscriber=$subscriber->row();
																		$plan_start_date=date('Y-m-d',strtotime($subscriber->created_at)); 
																		$plan_expire_date=date('Y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
																		$order_date=date('Y-m-d',strtotime($order->created_at))	; 
																		if(($order_date>=$plan_start_date) AND ($order_date<=$plan_expire_date)){
																			$total = $cartprice->royal_amt*$each->qty;
																			$subscription='true';
																		}
																		else{
																			$total = $price*$each->qty;
																			$subscription='false';
																		}
																	}
																	else{
																		$total = $price*$each->qty;
																		$subscription='false';
																	}
																	
																	$icons=explode(",",$variant->variant_img);
																	
																	$totalMrp = (int)$cartprice->mrp*$each->qty;
																	$totalDiscount=(int)(($totalMrp-$total)/$totalMrp)*100;
																	$totalIndividualPrice+=(int)$total;
																	$totalIndividualMrp+=(int)$totalMrp;
																	$totalIndividualClubCash+=(int)$cartprice->royal_clubcash*$each->qty;
																	$totalIndividualNormolPrice+=(int)$cartprice->reg_sell_price*$each->qty; 
																	$totalIndividualGst+=(int)$cartprice->gst*$each->qty;
																	
																} ?>
																<tr>
																	<form>
																		<td>
																			<?=$count;?>
																		</td>
																		<td>
																			<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/'.$product->id)?>"><img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" height="80" width="80"></a>
																		</td>
																		<td>
																			<a href="<?= base_url($this->data->controller.'/ManageProduct/ViewProduct/'.$product->id)?>"><b><?= $product->name; ?></b></a><span class="badge bg-primary"><?php if($sale=='true'){echo 'Sale';}?></span><br>
																			<?php 
																				$color_details=$this->db->get_where('tbl_color',['code'=>$each->color])->row();
																			?>
																			<small style="font-size: 16px;"><?=ucfirst($color_details->name)?></small>
																			<?php if($each->size!='NA'){?>
																				/<small style="font-size: 16px;"><?=$each->size?></small>
																			<?php } ?>
																			<?php if(!empty($product->vendor_id)){
																				$vendor=$this->db->get_where('tbl_vendor',['id'=>$product->vendor_id])->row()
																			?>
																			<br><strong>Vendor Name:</strong><small style="font-size: 14px;"><?=$vendor->name?></small>
																			<?php } ?>
																			<?php if(!empty($product->brand_id)){
																				$brand=$this->db->get_where('brand',['id'=>$product->brand_id])->row();
																			?>
																			<br><strong>Brand :</strong><small style="font-size: 14px;"><?=$brand->name?></small></br>
																			<?php } ?>
																			<strong>SKU ID:</strong><small style="font-size: 14px;"><?= $product->skuid?></small>,
																			<strong>HSN ID:</strong><small style="font-size: 14px;"><?= $product->hsn?></small>
																			<?php if($product->gift_wrap!='true'){?><p class="mb-0"><span class="R14_75" style="font-size:12px; font-weight:500;">Gift wrap is not available for this product.</span></p><?php } ?>
																		</td>
																		<td>  
																			&#8377;<?= $product->mrp?> 
																		</td>
																		<td><input type="number" class="w-25" value="<?= $each->qty ?>" name="qty"></td>
																		<td>
																			<?php 
																				echo "&#8377;".$totalMrp; 
																			?>
																		</td>
																	</form>
																</tr>
																<?php
																$count++; }
														}
													}
												?>
												<!--combo product orders-->
												<?php
													
													$id=$order->orderid;
													$selCombo=$this->db->query("select * from tbl_cart where orderid='$id' AND is_combo='true' AND availability='';");
													$selCombo=$selCombo->result();
													$totalComboPrice=0;
													$totalComboMrp=0;
													$totalComboClubCash=0;
													$totalComboNormolPrice=0;
													
													if(!empty($selCombo)){
														foreach($selCombo as $each)
														{
															$product = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id));
															if($product->num_rows()>0)
															{	
																$product = $product->row();
																$icons = explode(',',$product->image);
																$id = $order->userid;
																$cartprice = $this->db->get_where('tbl_combo',array('id'=>$each->combo_id))->row();
																
																// code for check sale is available or not on this product 
																$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->combo_id,'sale_type'=>'combo'))->row();
																if(!empty($saleProduct)){
																	
																	$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
																	$order_date=date('Y-m-d',strtotime($order->created_at))	; 
																	$sale_start_date = date_create($tblSale->start_date); 
																	$sale_end_date = date_create($tblSale->end_date); 
																	if(!empty($saleProduct->sale_id) AND (($order_date>=$sale_start_date) AND ($order_date<=$sale_end_date)))
																	{
																		$saleRate=$cartprice->price;
																		$discount=(int)$saleProduct->discount;
																		$saleprice=$saleRate - ( ($saleRate/100) * $discount );
																		$price=$saleprice;
																	}
																	else     
																	{
																		$price = $cartprice->discount_price;
																	}
																}
																else     
																{
																	$price = $cartprice->discount_price;
																}
																
																$userid=$order->userid;
																$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
																$subscription='false';
																if($subscriber->num_rows()>0){
																	$subscriber=$subscriber->row();
																	$plan_start_date=date('Y-m-d',strtotime($subscriber->created_at)); 
																	$plan_expire_date=date('Y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
																	$order_date=date('Y-m-d',strtotime($order->created_at))	; 
																	if(($order_date>=$plan_start_date) AND ($order_date<=$plan_expire_date)){
																		$total = $price*$each->qty;
																		$subscription='true';
																	}
																	else{
																		$total = $price*$each->qty;
																		$subscription='false';
																	}
																	$icons=explode(',',$product->image); 
																}
																else{
																	$total = $price*$each->qty;
																	$subscription='false';
																}
																$totalMrp=(int)$cartprice->price*$each->qty; 
																$totalDiscount=(int)(($totalMrp-$total)/$totalMrp)*100;
																$totalComboPrice+=(int)$total;
																$totalComboMrp+=(int)$totalMrp;
																$totalComboNormolPrice=(int)$cartprice->discount_price; 
																$totalComboClubCash=(int)0;	
															?>
															<tr>
																<td>
																	<?=$count;?>
																</td>
																<td>
																	<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" height="80" width="80">
																</td>
																<td>
																	<a href="<?=base_url('Home/ProductComboDetails/'.$product->id)?>"><b><?= $product->name; ?></b></a></br>
																	<?php 
																		$pid=explode(",",$each->product_id);
																		$psize=explode(",",$each->size);
																		$colors=explode(",",$each->color);
																		for($i=0;$i<count($pid);$i++){  
																			$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
																			$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
																			$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
																			echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
																		}
																	?>  
																</td> 
																<td>  
																	&#8377;<?= $product->price;?>  
																</td>
																<td><?= $each->qty ?></td>
																<td>
																	<?php 
																		echo "&#8377;".$totalMrp;  
																	?>
																</td>
															</tr>
															<?php
															$count++; }
														}
													}
												?>
												<tr>
													<td colspan="4"></td>
													<th>Total Price</th>
													<td><?php echo "&#8377;".($totalIndividualMrp+$totalComboMrp);?></td>
												</tr>
												<tr>
													<td colspan="4"></td>
													<th>Total Offer Price/Sale Price</th>
													<td><?php 
														$TotalProductPrice=($totalIndividualPrice+$totalComboPrice);
														echo "&#8377;".($totalIndividualPrice+$totalComboPrice);
													?></td>
												</tr>
												</tbody>
											</table>
										</div>
										
										<?php 
											$id=$order->orderid;
											$giftWrapCharge=0;
											$giftData=$this->db->query("select * from tbl_cart where orderid='$id' AND availability='';")->row();
											if($giftData->is_giftwrap=='true'){
												$cartGiftWrap=json_decode($giftData->giftwrap_details);
												if(!empty($cartGiftWrap)){
													$giftwrapid=$cartGiftWrap->giftwrapid;
													$giftWrapDetails=$this->db->get_where('tbl_giftwrap',array('id'=>$giftwrapid))->row(); 
													$giftPrice=$giftWrapDetails->price;  
													$giftName=$giftWrapDetails->name;  
													$receipientName=$cartGiftWrap->recipientName ;
													$senderName =$cartGiftWrap->senderName;  
													$message =$cartGiftWrap->message;
													$giftWrapCharge=$giftPrice;
												?>
												<div class="col-sm-12 table-responsive">
													<table class="table table-bordered">
														<style>
															.table td, .table th {
															border-bottom: 1px solid #E3EBF3; 
															padding: 0.75rem 0.75rem;
															}
														</style>
														<tbody>
															<tr style="background-color:lavender;">
																<th colspan="6">Gift Wrapping Information</th>	
															</tr>
															<tr>
																<th>Sender Name</th><td><?=$senderName?></td>
																<th>Receipient Name</th><td><?=$receipientName?></td>
																<th>Gift Charge</th><td>&#8377;<?=$giftPrice?></td>
															</tr>
															<tr>
																<th colspan="2">Message</th><td colspan="4"><?=$message?></td>
															</tr>
														</tbody>
													</table>
												</div>
											<?php } } ?>
											<div class="col-sm-12 table-responsive">
												<table class="table table-bordered">
													<style>
														.table td, .table th {
														border-bottom: 1px solid #E3EBF3; 
														padding: 0.75rem 0.75rem;
														}
													</style>
													<tbody>
														<tr style="background-color:lavender;">
															<th colspan="4">Coupon/Cashback/Reward Information</th>	
														</tr>
														<tr>
															<th>Id</th>
															<th>Coupon Discount</th>
															<th>Reward Points</th>
															<th>Cashback</th>
														</tr>
														<tr>
															<td>
																<?php if($order->giveway_type!='cashback' || $order->giveway_type!='reward'){ ?>
																	<a href="<?= base_url($this->data->controller.'/ManageCoupon/Edit/'.$order->couponid)?>"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																	<?php }elseif($order->giveway_type=='cashback'){ ?>
																	<a href="<?= base_url($this->data->controller.'/ManageCashback/Edit/'.$order->couponid)?>"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																	<?php }elseif($order->giveway_type=='reward'){?>
																	<a href="<?= base_url($this->data->controller.'/ManageRewardPoints/Edit/'.$order->couponid)?>"><span class="btn btn-sm btn-primary">View Details(<?=$order->couponid?>)</span></a>
																<?php } ?>
															</td> 
															<td>
																<?php 
																	if($order->giveway_type!='cashback' || $order->giveway_type!='reward'){ 
																		$couponDetails=$this->db->get_where('tbl_coupon',['id'=>$order->couponid])->row();
																		if(!empty($couponDetails)){
																			if($couponDetails->coupon_type=='Discount on minimum purchase' || $couponDetails->coupon_type=='New Customer Coupons' || $couponDetails->coupon_type=='Loyalty coupons'  || $couponDetails->coupon_type=='Get X% or XX rs on prebook order'){
																				if($couponDetails->type=='flat'){
																					$coupon_discount=$couponDetails->discount;
																				}
																				elseif($couponDetails->type=='percent'){
																					$coupon_discount=($TotalProductPrice*$couponDetails->discount)/100;
																					if($coupon_discount>$couponDetails->max_discount){
																						$coupon_discount=$couponDetails->max_discount;
																					}
																				}
																				$auto_apply='true';
																				echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You saved additional '.$coupon_discount.'</span></div>';
																			}
																			elseif($couponDetails->coupon_type=='Free shipping coupon'){
																				$coupon_discount=$shippingCharge;
																				$auto_apply='free shipping'; 
																				echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You Saved Your Shipping Charges</span></div>';
																			}
																			elseif($couponDetails->coupon_type=='Complementary discount coupons')
																			{
																				echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You will get complementry with purchase</span></div>';
																			}
																			elseif($couponDetails->coupon_type=='Buy-one-get-one coupons'){
																				echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">Get extra product with purchase</span></div>';
																			}
																			elseif($couponDetails->coupon_type=='Free gift with purchase'){
																				echo '<div style="line-height: 1.1;"><span style="font-size: 12px; font-weight: 600;color:#109935;">You will get free gift with purchase</span></div>';
																			} 
																		}
																	}
																	else{
																		echo 0;
																	}
																?>
															</td> 
															<td><?=$order->reward?>&nbsp;Coins</td> 
															<td>&#8377;<?=$order->cashback?></td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-12 table-responsive">
												<table class="table table-bordered mb-1">
													<style>
														.table td, .table th {
														border-bottom: 1px solid #E3EBF3; 
														padding: 0.75rem 0.75rem;
														}
													</style>
													<tbody>
														<tr style="background-color:lavender;">
															<th colspan="7">Payment Information&nbsp;
																<span class="badge badge-primary"><?php 
																	if($order->pay_mode=='online'){
																		$pay_details=json_decode(base64_decode($order->payment_response));
																		$payMethod=$pay_details->method;
																		echo '('.$order->pay_mode.'->';
																		echo $pay_details->method.'->';
																		echo $pay_details->$payMethod.')';
																	}
																else{ echo "Cash On Delivery(".$order->pay_mode.")";}?>
																</span>
															</th>       	   
														</tr>
														<tr>
															<th>Payment Status</th>
															<th>Sub Total</th>
															<th>GST(s)</th>
															<th>Wallet Used</th>
															<th>Shipping Charge</th>
															<th>Giftwrap Charge</th>
															<th>Coupon Discount</th>
														</tr>
														<!--individual product orders-->
														<tr>	
															<td>
																<span class="<?php if($order->PaymentStatus=='Success'){echo 'text-success'.' '.'font-weight-bold';}else{echo 'text-danger'.' '.'font-weight-bold';}?>"><?= $order->PaymentStatus ?></span><br>
																<?php if($order->pay_mode=='online'){?>
																	<b>PaymentID:</b>&nbsp;<?= $order->rzp_paymentid?>
																	<b>RzpOid:</b>&nbsp;<?= $order->rzp_orderid?>
																<?php } ?>
															</td>  
															<td>&#8377;<?=$TotalProductPrice?></td> 
															<td>&#8377;<?=$totalIndividualGst?>&nbsp;(included)</td> 
															<td>&#8377;<?=$order->wallet_discount?></td> 
															<td>&#8377;<?=$shippingCharge?></td> 
															<td>&#8377;<?=$giftWrapCharge?></td>
															<td>&#8377;<?=$order->coupon_discount?></td>
														</tr>
														<tr>
															<td colspan="5"></td>
															<th>Grand Total</th><td><?php echo "&#8377;".(((int)$TotalProductPrice+(int)$order->shipping_charge+(int)$giftWrapCharge)-(int)$order->coupon_discount)?></td>
														</tr>
													</tbody>
												</table>
											</div>
											</br>
											<div class="col-sm-12 table-responsive">
												<table class="table table-bordered">
													<tbody>
														<tr style="background-color:lavender;">
															<th colspan="5">Delivery Address</th>
															<?php 
																$address=json_decode($order->address);  
															?>
														</tr><tr><th>Address</th><td><?=$address->line1?>&nbsp;<?=$address->city?>&nbsp;<?= $address->state?>&nbsp;,&nbsp;<?= $address->pincode?></td></tr><tr><th>Contact Details</th><td><?= $uDetails->mobile;?> , <?= $uDetails->email;?></td></tr>
													</tbody>
												</table>
											</div>
									</div>
									
									<style>
										#style1{
										-webkit-appearance: none;
										-moz-appearance: none;
										appearance: none;
										backgrount-color: transparent;
										width:28px;
										height: 30px;
										border: none;
										cursor: pointer;
										}
										
										#style1::-webkit-color-swatch{
										border-radius: 50%;
										}
										
										#style1::-moz-color-swatch{
										border-radius: 50%;
										}
									</style>
									
								<?php }} 
								break;
								case "CancelItemDetails";
								if(!empty($cart)){
									// var_dump($cart);
									$return_details=json_decode($cart->return_details);
								?>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="col-form-label">Reason For Return/Refund</label>
											<input type="text" class="form-control text-capitalize" readonly name="name" value="<?=$return_details->return_reason?>" placeholder="Reason For Return" required >
											<input type="hidden" class="form-control text-capitalize"  name="id" value="<?=$cart->id?>"  required >
										</div>
										<div class="form-group">
											<label class="col-form-label">Return Status<span class="text-danger">*</span></label>
											<select name="return_status" class="form-control form-control" id="type" required="" onchange="getType(this.value)">
												<option selected disabled>Select</option> 
												<option value="requested" <?php if(($cart->return_status)=='requested'){echo 'selected';}?>>Requested</option> 
												<option value="approved" <?php if(($cart->return_status)=='approved'){echo 'selected';}?>>Approved</option>  
											</select>
										</div>
										<div class="form-group" id="deny_reason_div" style="display:none;">
											<label class="col-form-label">Reason For Deny</label>
											<textarea  class="form-control"  name="deny_reason" id="deny_reason" placeholder="Describe reason why did you reject cancel request..."></textarea>
										</div>
									</div>
								</div>
								<script>
									$(document).ready(function() {
										var type = $("#type").val();
										if(type == "true")
										{
											$("#deny_reason_div").hide();
										}
										else if(type == "false")
										{
											$("#deny_reason_div").hide();
											// $('#deny_reason').attr('required', true);
										}
									});
									
									function getType(val) 
									{	
										if(val != null)
										{
											if(val == "true")
											{
												$("#deny_reason_div").hide();
												$('#deny_reason').removeAttr('required', true);
											}
											else if(val == "false")
											{
												$("#deny_reason_div").show();
												$('#deny_reason').attr('required', true);
											}
										}
									}
								</script>
								<?php	
								}
								break;
								case "FilterUser";
								?>
								<div class="card">
									<div class="card-body p-0">
										<div class="table-responsive">    
											<table class="table table-striped table-bordered dataex-res-configuration" id="tablenew1" style="width:100%;">
												<thead>
													<tr>
														<th>Sr</th>
														<th><input type="checkbox" id="selectAllUser"></th>
														<th>UserName</th> 
														<th>User Mobile No.</th>
														<th>User Email-Id</th>
													</tr>
												</thead>
												<tbody>
													<?php 
														if(!empty($list)){
															$count=1;
															foreach($list as $each){?>
															<tr>
																<td><?=$count?></td>
																<td>&nbsp;&nbsp;<input type="checkbox" class="selectUser" value="<?=$each->id?>" name="userid[]" required ></td>
																<td><?=$each->name?></td>
																<td><?=$each->mobile?></td>
																<td><?=$each->email?></td> 
															</tr>
														<?php $count++; } } ?>
														<tbody> 
														</table>
												</div>
											</div>
										</div>
										<script>
											
											var table = $('#tablenew1').DataTable({  
												responsive: true,
												lengthChange: true,
												buttons: ['excel', 'pdf']
											});
											
											$("#selectAllUser").on("click", function () {
												$('.selectUser').attr('checked',$(this).prop('checked'));
											});
											
										</script>
										<?php	
											break;
											case "AssignPermission";
											
										?>
										<div class="card">
											<div class="card-body p-0">
												<div class="table-responsive">    
													<table id="role" class="table role-tble">
														<thead style="background: lavender;">
															<tr>
																<th>Entity</th>
																<th class="text-end">Add</th>
																<th class="text-end">Approval</th>
																<th class="text-end">Edit</th>
																<th class="text-end">Delete</th>
															</tr>
														</thead>
														<tbody>
															<?php 
																$permission=json_decode(base64_decode($list));
																$category=$permission->category;   
																$color=$permission->category;   
																$size=$permission->size;   
																$brand=$permission->brand;   
																$order=$permission->order;   
																$subscriptionplan=$permission->subscriptionplan;   
																$subscriber=$permission->subscriber;   
																$product=$permission->product;   
																$attribute=$permission->attribute;   
																$lookproduct=$permission->lookproduct;   
																$stock=$permission->stock;   
																$offer=$permission->offer;   
																$giftwrap=$permission->giftwrap;   
																$salemanagement=$permission->salemanagement;   
																$feedback=$permission->feedback;   
																$beautyconsultation=$permission->beautyconsultation;   
																$ecatlog=$permission->ecatlog;   
																$vendor=$permission->vendor;   
																$fashion_expert=$permission->fashionexpert;   
																$user=$permission->user;   
																$helpandsupport=$permission->helpandsupport;   
																$deliverycharge=$permission->deliverycharge;   
																$notification=$permission->notification;   
																$slider=$permission->slider;   
																$contentmanagement=$permission->contentmanagement;   
																$businesssettings=$permission->businesssettings;   
																$faqs=$permission->faqs;   
															?>
															<tr>
																<td>Categories Management</td>
																<td>
																	<img src="<?php if($category->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($category->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($category->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($category->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Color Management</td>
																<td>
																	<img src="<?php if($color->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($color->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($color->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($color->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Size Management</td>
																<td>
																	<img src="<?php if($size->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($size->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($size->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($size->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Brand Management</td>
																<td>
																	<img src="<?php if($brand->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($brand->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($brand->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($brand->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Orders Management</td>
																<td>
																	<img src="<?php if($order->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($order->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($order->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($order->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Subscription Plan Management</td>
																<td>
																	<img src="<?php if($subscriptionplan->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriptionplan->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriptionplan->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriptionplan->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Subscriber Management</td>
																<td>
																	<img src="<?php if($subscriber->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriber->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriber->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($subscriber->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Product Management</td>
																<td>
																	<img src="<?php if($product->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($product->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($product->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($product->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Attribute Management</td>
																<td>
																	<img src="<?php if($attribute->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($attribute->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($attribute->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($attribute->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Look Product Management</td>
																<td>
																	<img src="<?php if($lookproduct->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($lookproduct->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($lookproduct->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($lookproduct->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Stock Management</td>
																<td>
																	<img src="<?php if($stock->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($stock->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($stock->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($stock->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Offer Management</td>
																<td>
																	<img src="<?php if($offer->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($offer->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($offer->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($offer->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Gift Wrap Management</td>
																<td>
																	<img src="<?php if($giftwrap->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($giftwrap->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($giftwrap->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($giftwrap->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Beauty Consultation</td>
																<td>
																	<img src="<?php if($beautyconsultation->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($beautyconsultation->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($beautyconsultation->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($beautyconsultation->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Feedback Management</td>
																<td>
																	<img src="<?php if($feedback->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($feedback->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($feedback->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($feedback->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Sale Management</td>
																<td>
																	<img src="<?php if($salemanagement->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($salemanagement->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($salemanagement->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($salemanagement->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>E-Catlog Management</td>
																<td>
																	<img src="<?php if($ecatlog->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($ecatlog->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($ecatlog->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($ecatlog->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Vendor Management</td>
																<td>
																	<img src="<?php if($vendor->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($vendor->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($vendor->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($vendor->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>User Management</td>
																<td>
																	<img src="<?php if($user->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($user->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($user->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($user->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Fashion Expert</td>
																<td>
																	<img src="<?php if($fashion_expert->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Fashion Expert</td>
																<td>
																	<img src="<?php if($fashion_expert->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($fashion_expert->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Notification Management</td>
																<td>
																	<img src="<?php if($notification->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($notification->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($notification->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($notification->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Delivery Charge Management</td>
																<td>
																	<img src="<?php if($deliverycharge->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($deliverycharge->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($deliverycharge->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($deliverycharge->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Slider Management</td>
																<td>
																	<img src="<?php if($slider->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($slider->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($slider->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($slider->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Help & Support</td>
																<td>
																	<img src="<?php if($helpandsupport->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($helpandsupport->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($helpandsupport->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($helpandsupport->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Content Management</td>
																<td>
																	<img src="<?php if($contentmanagement->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($contentmanagement->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($contentmanagement->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($contentmanagement->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>Business Settings Management</td>
																<td>
																	<img src="<?php if($businesssettings->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($businesssettings->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($businesssettings->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($businesssettings->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
															<tr>
																<td>FAQ's Management</td>
																<td>
																	<img src="<?php if($faqs->add){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($faqs->approval){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($faqs->edit){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
																<td>
																	<img src="<?php if($faqs->delete){ echo base_url('public/images/checked.png'); }else{echo base_url('public/images/incorrect.png');}?>" height="20">
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<?php 
											break; 
											case 'BenefitsDetails': 
										?>
										<div class="card">
											<div class="card-body p-0">
												<div class="table-responsive">    
													<table class="table table-striped table-bordered" style="width:100%;">
														<tbody>
															<?php 
																if(!empty($list)){ 
																?>
																<tr><th>Title</th><td><?=$list->title?></td></tr>
																<?php if(!empty($list->type)){?><tr><th>Type</th><td><?=$list->type?></td><tr><?php } ?>
																	<?php if(!empty($list->discount)){?><tr><th>Discount</th><td><?=$list->discount?>&nbsp;(Max:<?=$list->max_discount?>)</td><tr><?php } ?>
																		<tr><th>Min Order</th><td><?=$list->min_order ?></td><tr>
																			<tr><th>User Type</th><td><?=$list->user_type?></td><tr>
																				<tr><th>Product Type</th><td><?=$list->product_type?></td><tr>
																					<tr><th>Terms&Conditions</th><td><?=base64_decode($list->termsconditions)?></td><tr>
																					<?php } ?>
																					<tbody> 
																					</table> 
																					</div>
																				</div>
																				</div>
																				<?php 
																					break; 
																				} }
																				else
																				{
																					echo 'Action is required.';
																				}
																				
																			?>
																			<script>
																				$('.dropify').dropify({
																					messages: {
																						'default': 'Drag and drop a file here or click',
																						'replace': 'Drag and drop or click to replace',
																						'remove': 'Remove',
																						'error': 'Ooops, something wrong appended.'
																					},
																					error: {
																						'fileSize': 'The file size is too big (2M max).'
																					}
																				});
																				$('.summernote').summernote();
																				$('.chosen-select').chosen();
																			</script>
																			<script>
																				$(function() {
																					var dtToday = new Date();
																					
																					var month = dtToday.getMonth() + 1;
																					var day = dtToday.getDate();
																					var year = dtToday.getFullYear();
																					if (month < 10)
																					month = '0' + month.toString();
																					if (day < 10)
																					day = '0' + day.toString();
																					
																					var maxDate = year + '-' + month + '-' + day;
																					
																					$('.startdate').attr('min', maxDate);
																					$('.enddate').attr('min', maxDate);
																				});
																			</script>
																		<script src="<?= base_url($this->data->appTempletePath); ?>js/scripts/forms/checkbox-radio.min.js"></script>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																