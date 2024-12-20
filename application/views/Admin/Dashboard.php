<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
    </head>
    <body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <?php require 'Topbar.php';?>
        <?php require 'Sidebar.php';?>
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/ManageCategories')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-primary bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-primary white media-body">
                                                <h5>Categories</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $categories?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/SubCategories')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-secondary bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-secondary white media-body">
                                                <h5>Sub-Categories</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $subcategories?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/ManageBrand')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-success bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-success white media-body">
                                                <h5>Brands</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $brand?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/SubBrand')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-warning bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-warning white media-body">
                                                <h5>Sub-Brand</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $subbrand?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/ManageCoupon')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-danger bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-danger white media-body">
                                                <h5>Active Coupons</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $coupons?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/Notifications')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-info bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-info white media-body">
                                                <h5>Notification's</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $notification?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/DeliveryCharge')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-warning bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-warning white media-body">
                                                <h5>Delivery Charges</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $deliverycharge?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/ManageProduct')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-secondary bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-secondary white media-body">
                                                <h5>Total Products</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $products?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/ManageVendor')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-success bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-success white media-body">
                                                <h5>Total Vendors</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $vendors?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/HelpAndSupport')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-primary bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-primary white media-body">
                                                <h5>Contact</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $contact?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <a href="<?= base_url($this->data->controller.'/Slider')?>">
                                        <div class="media align-items-stretch">
                                            <div class="p-2 text-center bg-danger bg-darken-2">
                                                <i class="feather icon-map font-large-2 white"></i>
                                            </div>
                                            <div class="p-2 bg-gradient-x-danger white media-body">
                                                <h5>Active Slider</h5>
                                                <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> <?= $slider?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                 
                </div>
            </div>
        </div>
        <?php require APPPATH.'views/Auth/Footer.php';?>
        <?php require APPPATH.'views/Auth/JsLinks.php';?>
    </body>
</html>