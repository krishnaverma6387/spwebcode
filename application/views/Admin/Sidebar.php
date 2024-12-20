<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class="nav-item <?= $activepage=='dashboard' ? 'active':''?>">
				<a href="<?= base_url($this->data->controller); ?>/Dashboard"><i class="feather icon-home"></i><span class="menu-title">Dashboard</span></a>
			</li>
			<li class="nav-item">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Admin Hierarchy</span></a>
			</li>
			<?php
		$permission_limit = '';
		$role_type = 'admin';
		if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
			$permission_limit = $this->permissionAuth->businesssettings;
			$role_type = 'subadmin';
		}
		if (($role_type == 'subadmin' && $permission_limit->edit) || $role_type == 'admin') {
		?>
			<li class="nav-item <?= $activepage=='business_setting' ? 'active':''?>">
				<a href="<?= base_url($this->data->controller); ?>/ManageLimit"><i class="feather icon-settings"></i><span class="menu-title">Business Settings</span></a>
			</li>
		<?php } ?>

			<li class="nav-item <?= $activepage=='AccountSettings' || $activepage=='UpdateProfile' || $activepage=='ChangePassword' ? 'has-sub open':''?>">
				<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Account Settings</span></a>
				<ul class="menu-content">
					<li class=" <?= $activepage=='AccountSettings' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/AccountSettings">My Profile</a></li>
					<?php if ($this->sysAuth == false) : ?>
						<li class=" <?= $activepage=='UpdateProfile' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/AccountSettings/UpdateProfile">Update Profile</a></li>
					<?php endif; ?>
					<li class=" <?= $activepage=='ChangePassword' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/AccountSettings/ChangePassword">Change Password</a></li>
					<li><a class="menu-item" href="<?= base_url($this->data->controller); ?>/AccountSettings/Logout">Logout</a></li>
				</ul>
			</li>

			<li class="nav-item <?= $activepage=='SitePermission' ? 'active':''?>">
				<a href="<?= base_url($this->data->controller); ?>/SitePermission"><i class="feather icon-tag"></i><span class="menu-title">Site Permission</span></a>
			</li>
			<?php if ($this->userData->type != 'subadmin') { ?>
				<li class="nav-item <?= $activepage=='ManageSubadmin' || $activepage=='ManageSubadmin/Create' ? 'has-sub open':''?>">
					<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Subadmin</span></a>
					<ul class="menu-content">
						<li class=" <?= $activepage=='ManageSubadmin/Create' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageSubadmin/Create">Add New Subadmin</a></li>
						<li class=" <?= $activepage=='ManageSubadmin' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageSubadmin">Manage Subadmin</a></li>
					</ul>
				</li>
			<?php } ?>


			<li class="nav-item">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Site Configuration</span></a>
			</li>

			<li class="nav-item <?= $activepage=='ManageCategories' || $activepage=='CategoryTags' || $activepage=='SubCategories' || $activepage=='CoSubcategory' || $activepage=='AppPromotion' || $activepage=='NeedHelp' || $activepage=='LogoSetup' ? 'has-sub open':''?>">
				<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Header</span></a>
				<ul class="menu-content">

					<li class=" <?= $activepage=='ManageCategories' ? 'active':''?>">
						<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageCategories"><i class="feather icon-tag"></i><span class="menu-title">Categories</span></a>
					</li>
					<li class=" <?= $activepage=='CategoryTags' ? 'active':''?>">
						<a class="menu-item" href="<?= base_url($this->data->controller); ?>/CategoryTags"><i class="feather icon-tag"></i><span class="menu-title">Category Tags</span></a>
					</li>
					<li class="nav-item <?= $activepage=='SubCategories' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/SubCategories"><i class="feather icon-tag"></i><span class="menu-title">Sub-Categories</span></a>
					</li>
					<!-- <li class="nav-item <?= $activepage=='CoSubcategory' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/CoSubcategory"><i class="feather icon-tag"></i><span class="menu-title">Co-SubCategories</span></a>
					</li> -->
					<li class="nav-item <?= $activepage=='AppPromotion' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/AppPromotion"><i class="feather icon-tag"></i><span class="menu-title">App Promotion</span></a>
					</li>
					<li class="nav-item <?= $activepage=='NeedHelp' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/NeedHelp"><i class="feather icon-tag"></i><span class="menu-title">Need Help</span></a>
					</li>
					<li class="nav-item <?= $activepage=='LogoSetup' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/LogoSetup"><i class="feather icon-tag"></i><span class="menu-title">Logo Setup</span></a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?= $activepage=='StayConnect' || $activepage=='ManageGetApp' || $activepage=='BecomeaSeller' || $activepage=='ManageRewards' || $activepage=='ManageDisclaimer'  ? 'has-sub open':''?>">
				<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Footer</span></a>
				<ul class="menu-content">

					<!--<li>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/TermAndCondition"><i class="feather icon-tag"></i><span class="menu-title">Term And Condition</span></a>
					</li>-->

					<li class="<?= $activepage=='StayConnect' ? 'active':''?>">
						<!--<a class="menu-item" href="<?= base_url($this->data->controller); ?>/BecomeSellerTop"><i class="feather icon-tag"></i><span class="menu-title">Become Seller Top</span></a>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/BecomeSellerBottom"><i class="feather icon-tag"></i><span class="menu-title">Become Seller Bottom</span></a>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageSocialHeading"><i class="feather icon-tag"></i><span class="menu-title">Manage Social Heading</span></a>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageSocialMedia"><i class="feather icon-tag"></i><span class="menu-title">Manage Social Media</span></a>-->
						<!-- <a class="menu-item" href="<?= base_url($this->data->controller); ?>/Managepress"><i class="feather icon-tag"></i><span class="menu-title">Manage Press</span></a>-->
						<!--<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOurTeam"><i class="feather icon-tag"></i><span class="menu-title">Manage Our Team</span></a>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOurLeadership"><i class="feather icon-tag"></i><span class="menu-title">Manage Our Leadership Team</span></a>
                        <a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageNewlaunches"><i class="feather icon-tag"></i><span class="menu-title">Manage New Launches</span></a>-->


						<a class="menu-item" href="<?= base_url($this->data->controller); ?>/StayConnect"><i class="feather icon-tag"></i><span class="menu-title">Stay Connected</span></a>
					</li>
						<!-- Get the app -->
					<li class="nav-item <?= $activepage=='ManageGetApp' ? 'has-sub open':''?>">
						<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Get the app</span></a>
						<ul class="menu-content">
							<li class="nav-item <?= $activepage=='ManageGetApp' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageGetApp"><i class="feather icon-tag"></i><span class="menu-title">Manage Get App</span></a>
							</li>
						</ul>
					</li>
					<!-- Get the app -->


					<!-- Join Us -->
					<li class="nav-item <?= $activepage=='ManageDisclaimer' || $activepage=='ManageRewards' || $activepage=='BecomeaSeller' ? 'has-sub open':''?>">
						<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Join Us</span></a>
						<ul class="menu-content">
							<li class="nav-item <?= $activepage=='BecomeaSeller' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/BecomeaSeller"><i class="feather icon-tag"></i><span class="menu-title">Become a seller</span></a>
							</li>

							<li class="nav-item <?= $activepage=='ManageRewards' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageRewards"><i class="feather icon-tag"></i><span class="menu-title">Manage Rewards</span></a>
							</li>
							<li class="nav-item <?= $activepage=='ManageDisclaimer' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageDisclaimer"><i class="feather icon-tag"></i><span class="menu-title">Manage Disclaimer</span></a>
							</li>

						</ul>
					</li>
					<!-- Joinus end here -->



					<!-- Join Us -->
					<li class="nav-item <?= $activepage=='Term_Conditions' || $activepage=='ShippingPolicy' || $activepage=='CancellationsPolicy' || $activepage=='ReturnsPolicy' || $activepage=='RefundPolicy' || $activepage=='ExchangePolicy' || $activepage=='IntellectualProperty' || $activepage=='PrivacyPolicy' ? 'has-sub open':''?>">
						<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Help Center</span></a>
						<ul class="menu-content">
							<li class="nav-item <?= $activepage=='Term_Conditions' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/Term_Conditions"><i class="feather icon-tag"></i><span class="menu-title">Terms & Conditions</span></a>
							</li>
							<li class="nav-item <?= $activepage=='ShippingPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ShippingPolicy"><i class="feather icon-tag"></i><span class="menu-title">Shipping Policy</span></a>
							</li>
							<li class="nav-item <?= $activepage=='CancellationsPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/CancellationsPolicy"><i class="feather icon-tag"></i><span class="menu-title">Cancellations Policy</span></a>
							</li>

							<li class="nav-item <?= $activepage=='ReturnsPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ReturnsPolicy"><i class="feather icon-tag"></i><span class="menu-title">Return Policy</span></a>
							</li>
							<li class="nav-item <?= $activepage=='RefundPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/RefundPolicy"><i class="feather icon-tag"></i><span class="menu-title">Refund Policy</span></a>
							</li>
							<li class="nav-item <?= $activepage=='ExchangePolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ExchangePolicy"><i class="feather icon-tag"></i><span class="menu-title">Exchange Policy</span></a>
							</li>
							<li class="nav-item <?= $activepage=='IntellectualProperty' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/IntellectualProperty"><i class="feather icon-tag"></i><span class="menu-title">Intellectual Property</span></a>
							</li>
							<li class="nav-item <?= $activepage=='PrivacyPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/PrivacyPolicy"><i class="feather icon-tag"></i><span class="menu-title">Privacy and cookies</span></a>
							</li>
							<!-- <li class="nav-item <?= $activepage=='PrivacyPolicy' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/PrivacyPolicy"><i class="feather icon-tag"></i><span class="menu-title">Privacy Policy</span></a>
							</li> -->
						</ul>
					</li>
					<!-- Joinus end here -->

					<!-- Quik Links -->
					<li class="nav-item <?= $activepage=='ShoppingGuid' || $activepage=='CouponRedemption' || $activepage=='PaymentMethod' || $activepage=='ChooseYourSize' ? 'has-sub open':''?>">
						<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Quick Links</span></a>
						<ul class="menu-content">
							<li class="nav-item <?= $activepage=='ShoppingGuid' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ShoppingGuid"><i class="feather icon-tag"></i><span class="menu-title">Manage Shopping Guid</span></a>
							</li>
							<li class="nav-item <?= $activepage=='CouponRedemption' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/CouponRedemption"><i class="feather icon-tag"></i><span class="menu-title">Manage Coupon Redemption</span></a>
							</li>
							<li class="nav-item <?= $activepage=='PaymentMethod' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/PaymentMethod"><i class="feather icon-tag"></i><span class="menu-title">Manage Payment Method</span></a>
							</li>
							<li class="nav-item <?= $activepage=='ChooseYourSize' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ChooseYourSize"><i class="feather icon-tag"></i><span class="menu-title">Manage Choose Your Size</span></a>
							</li>
						</ul>
					</li>

					<!-- WHO ARE WE -->
					<li class="nav-item <?= $activepage=='ManageAboutUs'  || $activepage=='ManageContact' || $activepage=='ManagePress' ? 'has-sub open':''?>">
						<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">WHO ARE WE</span></a>
						<ul class="menu-content">
							<li class="nav-item <?= $activepage=='ManageAboutUs' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageAboutUs"><i class="feather icon-tag"></i><span class="menu-title">Manage AboutUs</span></a>
							</li>
							<!-- <li class="nav-item <?= $activepage=='ManageCareer' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageCareer"><i class="feather icon-tag"></i><span class="menu-title">Manage Career</span></a>
							</li> -->
							<li class="nav-item <?= $activepage=='ManageContact' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageContact"><i class="feather icon-tag"></i><span class="menu-title">Manage Contact</span></a>
							</li>

							<li class="nav-item <?= $activepage=='ManagePress' ? 'active':''?>">
								<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManagePress"><i class="feather icon-tag"></i><span class="menu-title">Manage Press</span></a>
							</li>

						</ul>
					</li>

			</li>
		</ul>
		</li>
		
		<li class="nav-item <?= $activepage=='Slider' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/Slider"><i class="feather icon-image"></i><span class="menu-title">Manage Slider</span></a>
		</li>
		
		<li class="nav-item <?= $activepage=='ManageComponent' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageComponent"><i class="feather icon-image"></i><span class="menu-title">Manage Component</span></a>
		</li>
		
		<li class="nav-item <?= $activepage=='SearchKeyword' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/globalSearchKeyword"><i class="feather icon-image"></i><span class="menu-title">Search Keyword</span></a>
		</li>


		<li class="nav-item <?= $activepage=='ManageColor' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageColor"><i class="feather icon-tag"></i><span class="menu-title">Manage Color</span></a>
		</li>
		<li class="nav-item <?= $activepage=='ManageSize' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageSize"><i class="feather icon-tag"></i><span class="menu-title">Manage Size</span></a>
		</li>
		
		<?php
		$permission_cms = '';
		$role_type = 'admin';
		if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
			$permission_cms = $this->permissionAuth->contentmanagement;
			$role_type = 'subadmin';
		}
		if (($role_type == 'subadmin' && $permission_cms->edit) || $role_type == 'admin') {
		?>
			<li class="nav-item <?= $activepage=='WebSiteContentManagement' ? 'active':''?>">
				<a href="<?= base_url($this->data->controller); ?>/WebSiteContentManagement"><i class="feather icon-image"></i><span class="menu-title">Content Management</span></a>
			</li>
		<?php } ?>
		<li class="nav-item <?= $activepage=='ManageCareer' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageCareer"><i class="feather icon-settings"></i><span class="menu-title">Career Management</span></a>
		</li>
		<li class="nav-item <?= $activepage=='Notifications' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/Notifications"><i class="feather icon-tag"></i><span class="menu-title">Notification</span></a>
		</li>
		<li class="nav-item <?= $activepage=='HelpAndSupport' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/HelpAndSupport"><i class="feather icon-phone-call"></i><span class="menu-title">Help & Support </span></a>
		</li>
		
		<li class="nav-item <?= $activepage=='ManageDisclaimer' || $activepage=='ManageRewards' || $activepage=='BecomeaSeller' ? 'has-sub open':''?>">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Product Management</span></a>
			</li>
			<li class="nav-item <?= $activepage=='AddProduct' || $activepage=='ManageProduct' || $activepage=='ManageAttribute' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Product</span></a>
			<ul class="menu-content <?= $activepage=='ManageDisclaimer' || $activepage=='ManageRewards' || $activepage=='BecomeaSeller' ? 'has-sub open':''?>">
				<?php
				$permission = '';
				$role_type = 'admin';
				if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
					$permission_product = $this->permissionAuth->product;
					$permission_attribute = $this->permissionAuth->attribute;
					$role_type = 'subadmin';
				}
				?>
				<?php if (($role_type == 'subadmin' && $permission_product->add) || $role_type == 'admin') { ?>
				<li class="nav-item <?= $activepage=='AddProduct' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageProduct/AddProduct"><i class="feather icon-tag"></i><span class="menu-title">Add Product</span></a></li><?php } ?>
				<li class="nav-item <?= $activepage=='ManageProduct' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageProduct"><i class="feather icon-tag"></i><span class="menu-title">Manage Product</span></a></li>
				<?php if (($role_type == 'subadmin' && $permission_attribute->add) || $role_type == 'admin') { ?>
				<li class="nav-item <?= $activepage=='ManageAttribute' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageAttribute"><i class="feather icon-tag"></i><span class="menu-title">Manage Attribute</span></a></li><?php } ?>
			</ul>
		</li>
		<li class="nav-item <?= $activepage=='StockAlert'  ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Stock</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='StockAlert' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/StockAlert"><i class="feather icon-tag"></i><span class="menu-title">Stock Alert</span></a></li>
				<!--<li class="nav-item"><a href="<?= base_url($this->data->controller); ?>/ManageProduct"><i class="feather icon-tag"></i><span class="menu-title">Manage Product</span></a></li>
					<li class="nav-item"><a href="<?= base_url($this->data->controller); ?>/StockAlert"><i class="feather icon-tag"></i><span class="menu-title">Stock Alert</span></a></li>-->
			</ul>
		</li>
		<!-- <li class="nav-item <?= $activepage=='ManageBrand' || $activepage=='SubBrand' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Brand & Sub-Brand</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='ManageBrand' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageBrand"><i class="feather icon-tag"></i><span class="menu-title">Brand</span></a>
				</li>
				<li class="nav-item <?= $activepage=='SubBrand' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/SubBrand"><i class="feather icon-tag"></i><span class="menu-title">Sub-Brand</span></a>
				</li>
			</ul>
		</li> -->
		<li class="nav-item <?= $activepage=='AddCombo' || $activepage=='ManageCombo' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Look Product</span></a>
			<ul class="menu-content">
				<?php
				$permission = '';
				$role_type = 'admin';
				if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
					$permission_look = $this->permissionAuth->lookproduct;
					$permission_attribute = $this->permissionAuth->attribute;
					$role_type = 'subadmin';
				}
				?>
				<?php if (($role_type == 'subadmin' && $permission_look->add) || $role_type == 'admin') { ?><li class="nav-item <?= $activepage=='ManageCombo' ? 'active':''?>"><a href="<?= base_url($this->data->controller . '/ManageCombo'); ?>"><i class="feather icon-tag"></i><span class="menu-title">Manage Look Product</span></a></li><?php } ?>
				<?php if (($role_type == 'subadmin' && $permission_look->add) || $role_type == 'admin') { ?><li class="nav-item <?= $activepage=='AddCombo' ? 'active':''?>"><a href="<?= base_url($this->data->controller . '/ManageCombo/AddCombo'); ?>"><i class="feather icon-tag"></i><span class="menu-title">Add Look Product</span></a></li><?php } ?>
			</ul>
		</li>
		<li class="nav-item <?= $activepage=='RewardPointsSetting' || $activepage=='ManageRewardPoints' || $activepage=='ManageCoupon' || $activepage=='ManageCashback' || $activepage=='BeneficiaryDetails' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Offer</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='ManageCashback' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageCashback"><i class="feather icon-tag"></i><span class="menu-title">Manage Cashback</span></a></li>
				<li class="nav-item <?= $activepage=='ManageCoupon' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageCoupon"><i class="feather icon-tag"></i><span class="menu-title">Manage Coupon</span></a></li>
				<li class="nav-item <?= $activepage=='ManageRewardPoints' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageRewardPoints"><i class="feather icon-tag"></i><span class="menu-title">Manage Reward Points</span></a></li>
				<li class="nav-item <?= $activepage=='RewardPointsSetting' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/RewardPointsSetting"><i class="feather icon-settings"></i><span class="menu-title">Reward Points Setting</span></a></li>

			</ul>
		</li>
		<li class="nav-item <?= $activepage=='ManageGiftwrap' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageGiftwrap"><i class="feather icon-tag"></i><span class="menu-title">Manage Gift Wrap</span></a>
		</li>
		<li class="nav-item <?= $activepage=='ManageECatalog' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Look Book</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='ManageECatalog' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageECatalog"><i class="feather icon-tag"></i><span class="menu-title">Manage E-Catalog</span></a></li>
			</ul>
		</li>
		<li class="nav-item <?= $activepage=='ManageDisclaimer' ? 'active':''?>">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Sales and Orders</span></a>
			</li>
		
			<li class="nav-item <?= $activepage=='PrebookOrders' || $activepage=='AllOrders' || $activepage=='SaleOrders' || $activepage=='RoyalOrders' || $activepage=='PrepaidOrders' || $activepage=='PostpaidOrders' || $activepage=='NewOrders' || $activepage=='ProcessingOrders' || $activepage=='DispatchOrders' || $activepage=='TransitOrders' || $activepage=='DeliveredOrders' || $activepage=='RtoOrders' || $activepage=='CancelOrders' || $activepage=='ReturnOrders' || $activepage=='IncompleteOrders'? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Orders</span></a>
			<ul class="menu-content">
				<li class="<?= $activepage=='PrebookOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/PrebookOrders"><i class="feather icon-tag"></i><span class="menu-title">Preebook Orders</span></a>
				</li>
				<li class="<?= $activepage=='AllOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/AllOrders"><i class="feather icon-tag"></i><span class="menu-title">All Orders</span></a>
				</li>
				<li class="<?= $activepage=='SaleOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/SaleOrders"><i class="feather icon-tag"></i><span class="menu-title">Sale Orders</span></a>
				</li>
				<li class="<?= $activepage=='RoyalOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/RoyalOrders"><i class="feather icon-tag"></i><span class="menu-title">Royal Orders</span></a>
				</li>
				<li class="<?= $activepage=='PrepaidOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/PrepaidOrders"><i class="feather icon-tag"></i><span class="menu-title">Prepaid Orders</span></a>
				</li>
				<li class="<?= $activepage=='PostpaidOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/PostpaidOrders"><i class="feather icon-tag"></i><span class="menu-title">Postpaid Orders</span></a>
				</li>
				<li class="<?= $activepage=='NewOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/NewOrders"><i class="feather icon-tag"></i><span class="menu-title">New Orders</span></a>
				</li>
				<li class="<?= $activepage=='ProcessingOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/ProcessingOrders"><i class="feather icon-tag"></i><span class="menu-title">Processing Orders</span></a>
				</li>
				<li class="<?= $activepage=='DispatchOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/DispatchOrders"><i class="feather icon-tag"></i><span class="menu-title">Dispatch Orders</span></a>
				</li>
				<li class="<?= $activepage=='TransitOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/TransitOrders"><i class="feather icon-tag"></i><span class="menu-title">Transit Orders</span></a>
				</li>
				<li class="<?= $activepage=='DeliveredOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/DeliveredOrders"><i class="feather icon-tag"></i><span class="menu-title">Delivered Orders</span></a>
				</li>
				<li class="<?= $activepage=='RtoOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/RtoOrders"><i class="feather icon-tag"></i><span class="menu-title">RTO Orders</span></a>
				</li>
				<li class="<?= $activepage=='CancelOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/CancelOrders"><i class="feather icon-tag"></i><span class="menu-title">Cancel Orders</span></a>
				</li>
				<li class="<?= $activepage=='ReturnOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/ReturnOrders"><i class="feather icon-tag"></i><span class="menu-title">Exchange Orders</span></a>
				</li>
				<li class="<?= $activepage=='RefundOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/RefundOrders"><i class="feather icon-tag"></i><span class="menu-title">Refund Orders</span></a>
				</li>
				<li class="<?= $activepage=='IncompleteOrders' ? 'active':''?>">
					<a class="menu-item" href="<?= base_url($this->data->controller); ?>/ManageOrders/IncompleteOrders"><i class="feather icon-tag"></i><span class="menu-title">Incomplete Orders</span></a>
				</li>
			</ul>
		</li>
		<li class="nav-item <?= $activepage=='ManageSale' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Sale</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='ManageSale' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageSale"><i class="feather icon-tag"></i><span class="menu-title">Manage Sale</span></a></li>
			</ul>
		</li>
		
		<li class="nav-item <?= $activepage=='DeliveryCharge' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/DeliveryCharge"><i class="feather icon-tag"></i><span class="menu-title">Delivery Charge</span></a>
		</li>
		
		<li class="nav-item">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Vendor and User Management</span></a>
			</li>
		
			<li class="nav-item <?= $activepage=='ManageVendor' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageVendor"><i class="feather icon-phone-call"></i><span class="menu-title">Manage Vendor</span></a>
		</li>
		<li class="nav-item <?= $activepage=='ManageUsers' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageUsers"><i class="feather icon-phone-call"></i><span class="menu-title">Manage Users</span></a>
		</li>
		
		<li class="nav-item <?= $activepage=='SubscriptionPlan' || $activepage=='Subscriber' || $activepage=='HeroBannerAndClubSetting' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Royal Club</span></a>
			<ul class="menu-content">
				<li class="menu-item <?= $activepage=='SubscriptionPlan' ? 'active':''?>">
					<a href="<?= base_url($this->data->controller); ?>/SubscriptionPlan"><i class="feather icon-tag"></i><span class="menu-title">Subscription Plan</span></a>
				</li>
				<li class="menu-item <?= $activepage=='Subscriber' ? 'active':''?>">
					<a href="<?= base_url($this->data->controller); ?>/SubscriptionPlan/Subscriber"><i class="feather icon-tag"></i><span class="menu-title">Manage Subscriber</span></a>
				</li>

				<li class="menu-item <?= $activepage=='HeroBannerAndClubSetting' ? 'active':''?>">
					<a href="<?= base_url($this->data->controller); ?>/HeroBannerAndClubSetting"><i class="feather icon-tag"></i><span class="menu-title">Manage HeroBannerAndClubSetting</span></a>
				</li>

				<!--<li class="menu-item <?= $activepage=='ManageDisclaimer' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/HeroBanner"><i class="feather icon-tag"></i><span class="menu-title">Manage HeroBanner</span></a>
					</li>
					
					<li class="menu-item <?= $activepage=='ManageDisclaimer' ? 'active':''?>">
						<a href="<?= base_url($this->data->controller); ?>/RoyalClubSetting"><i class="feather icon-tag"></i><span class="menu-title">Manage Royal Club Setting</span></a>
					</li>-->

			</ul>
		</li>
		
		<li class="nav-item <?= $activepage=='ManageBeautyConsultant' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/ManageBeautyConsultant"><i class="feather icon-settings"></i><span class="menu-title">Beauty Consultation</span></a>
		</li>
		
		
		<li class="nav-item <?= $activepage=='FashionExpert' ? 'active':''?>">
			<a href="<?= base_url($this->data->controller); ?>/FashionExpert"><i class="feather icon-phone-call"></i><span class="menu-title">Manage Fashion Expert</span></a>
		</li>
		
			<li class="nav-item <?= $activepage=='ManageDisclaimer' ? 'active':''?>">
				<a href="javascript:void(0);"><span class="menu-title font-weight-bold text-danger">Customer Interaction</span></a>
			</li>
			<li class="nav-item <?= $activepage=='VendorReview' || $activepage=='ProductReview' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Feedback</span></a>
			<ul class="menu-content">
				<li class="nav-item <?= $activepage=='ProductReview' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageReview/ProductReview"><i class="feather icon-tag"></i><span class="menu-title">Product Feedback</span></a></li>
				<li class="nav-item <?= $activepage=='VendorReview' ? 'active':''?>"><a href="<?= base_url($this->data->controller); ?>/ManageReview/VendorReview"><i class="feather icon-tag"></i><span class="menu-title">Vendor Feedback</span></a></li>
			</ul>
		</li>
		<li class="nav-item <?= $activepage=='SiteSurvey' ? 'active':''?>">
			<a class="menu-item" href="<?= base_url($this->data->controller); ?>/SiteSurvey"><i class="feather icon-tag"></i><span class="menu-title">Site Survey</span></a>
		</li>	
			
		<li class="nav-item <?= $activepage=='FaqCategory' || $activepage=='Faqs' ? 'has-sub open':''?>">
			<a href="javascript:void(0);"><i class="feather icon-settings"></i><span class="menu-title">Manage Faq's</span></a>
			<ul class="menu-content">
				<li class="<?= $activepage=='FaqCategory' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/FaqCategory">Faq Category</a></li>
				<li class="<?= $activepage=='Faqs' ? 'active':''?>"><a class="menu-item" href="<?= base_url($this->data->controller); ?>/Faqs">Faq's</a></li>
			</ul>
		</li>
			
			
			
			
			
			
			
			
			

		<!-- <li class="nav-item">
				<a href="<? //= base_url($this->data->controller); 
							?>/ManageContact"><i class="feather icon-tag"></i><span class="menu-title">Manage Contact</span></a>
							</li> -->
	
		
	

		
		<!--<li class="nav-item">
				<a href="<?= base_url($this->data->controller); ?>/ManageQuiz"><i class="feather icon-settings"></i><span class="menu-title">Manage Quiz</span></a>
			</li>-->
	
		<!--<li class="nav-item">
				<a href="<?= base_url($this->data->controller); ?>/ManageGiftCard"><i class="feather icon-settings"></i><span class="menu-title">Manage Gift Card</span></a>
			</li>-->
		
	
	
		
		<!--<li class="nav-item">
				<a href="<?= base_url($this->data->controller); ?>/PurchaseSeller"><i class="feather icon-phone-call"></i><span class="menu-title">Purchase Seller</span></a>
			</li>-->
	
		
	
		<!--<li class="nav-item">
				<a href="<?= base_url($this->data->controller); ?>/NewsLetters"><i class="feather icon-phone-call"></i><span class="menu-title">News Letters</span></a>
			</li>-->

		
	
	
		

		</ul>
	</div>
</div>