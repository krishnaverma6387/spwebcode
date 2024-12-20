<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
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
            <?php
            $permission = '';
            $role_type = 'admin';
            if (!empty($this->permissionAuth) && ($this->userData->type == 'subadmin')) {
                $permission = $this->permissionAuth->category;
                $role_type = 'subadmin';
            }
            ?>
            <div class="content-body">
                <section id="form-action-layouts">
                    <div class="row match-height">
                        <div class="col-sm-12">
                            <div class="card card-dashboard">
                                <?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?>
                                    <div class="card-header p-1">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Update </button>
                                    </div>
                                <?php } ?>
                                <div class="card-content collpase show">
                                    <div class="card-body table-responsive">
                                        <div class="">
                                            <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Location</th>
                                                        <th>Address</th>
                                                        <th>Mobile</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $srno = 1;
                                                    foreach ($list as $item) { ?>
                                                        <tr>
                                                            <td><?= $srno; ?></td>
                                                            <td><?= $item->location; ?></td>
                                                            <td><?= $item->address; ?></td>
                                                            <td><?= $item->mobile; ?></td>
                                                        </tr>
                                                    <?php $srno++;
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-body table-responsive">
                                            <div class="">
                                                <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Subject</th>
                                                            <th>Message</th>
                                                            <th>Created Date</th>
                                                            <th>Modified Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $srno=1; foreach ($contact as $item){ ?>
                                                            <tr>
                                                                <td><?= $srno; ?></td>
                                                                <?php if(($role_type=='subadmin' && $permission->approval) || $role_type=='admin'){?>
                                                                
                                                                <?php } ?>
                                                                <td><?= $item->name; ?></td>
                                                                <td><?= $item->email; ?></td>
                                                                <td><?= $item->mobile; ?></td>
                                                                <td><?= $item->subject; ?></td>
                                                                <td><?= $item->message; ?></td>
                                                               
                                                                <td><?= $item->created_at; ?></td>
                                                                <td><?= $item->modified_at; ?></td>
                                                               
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
                <div class="modal fade" id="AddModal">
                    <div class="modal-dialog">
                        <div class="modal-content border-primary">
                            <div class="modal-header bg-primary p-1">
                                <h5 class="modal-title text-white">Update </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-1">

                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                                    <div class="form-group">
                                        <label class="col-form-label">Location <span class="text-danger">*</span></label>
                                        <input value="<?= !empty($list[0]->location)?$list[0]->location:''?>" type="text" class="form-control" name="location"  placeholder="Location" required>
                                        <?php echo form_error("location", "<p class='text-danger' >", "</p>"); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                        <input value="<?= !empty($list[0]->address)?$list[0]->address:''?>" type="text" class="form-control" name="address" placeholder="Address" required>
                                        <?php echo form_error("address", "<p class='text-danger' >", "</p>"); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Mobile <span class="text-danger">*</span></label>
                                        <input value="<?= !empty($list[0]->mobile)?$list[0]->mobile:''?>" type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                                        <?php echo form_error("mobile", "<p class='text-danger' >", "</p>"); ?>
                                    </div>
                                </div>

                                <div class="modal-footer d-block p-1">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Modal End-->
               
            </div>
        </div>
    </div>
    <?php require APPPATH . 'views/Auth/Footer.php'; ?>
    <?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
</body>

</html>