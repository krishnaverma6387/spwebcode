<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>

    <?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
    <style>
        .dt-buttons {
            display: none !important;
        }
    </style>
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
                $permission = $this->permissionAuth->slider;
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
                                        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#AddModal">
											<i class="fa fa-plus-circle" aria-hidden="true"></i> Add <?= $this->data->key; ?></button>
										<button class="btn btn-danger" onclick="check('<?= $this->data->table ?>')">
											<i class="fa fa-trash" aria-hidden="true"></i> Delete Selected</button> -->
                                    </div>
                                <?php } ?>
                                <div class="card-content collpase show">

                                    <div class="card-body table-responsive">

                                        <div class="">

                                            <table class="table table-striped table-bordered dataex-res-configuration" style="width:100%;">

                                                <thead>

                                                    <tr>
                                                        <th>#</th>
                                                        <?php if (($role_type == 'subadmin' && $permission->add) || $role_type == 'admin') { ?><th>Status</th><?php } ?>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Assign</th>
                                                        <?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?><th>Action</th><?php } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $srno = 1;
                                                    foreach ($list as $item) { ?>

                                                        <tr data-id="<?= $item->id; ?>">
                                                            <td><?= $srno; ?></td>
                                                            <?php if (($role_type == 'subadmin' && $permission->approval) || $role_type == 'admin') { ?>
                                                                <td>
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" onchange="return Status(this,'<?= $this->data->table; ?>','id','<?= $item->id; ?>','is_status')" <?php if ($item->is_status == 'true') {
                                                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                                                } ?> id="switch-id<?= $srno; ?>">

                                                                        <label class="custom-control-label mr-1" for="switch-id<?= $srno; ?>"></label>
                                                                    </div>
                                                                </td>
                                                            <?php } ?>
                                                            <td><?= $item->title; ?></td>
                                                            <td><?= $item->description; ?></td>
                                                            <td>
                                                                <?php
                                                                if($item->sub_type !='aboutUs'){
                                                                if ($item->type == 'category') {
                                                                ?>
                                                                    <a href="<?= base_url($this->data->controller); ?>/ManageComponent/<?= $item->id ?>" class="btn btn-sm btn-outline-success waves-effect waves-light"> Assign</a>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <a href="<?= base_url($this->data->controller); ?>/ManageComponentItem/<?= $item->id ?>" class="btn btn-sm btn-outline-success waves-effect waves-light"> Assign</a>
                                                                <?php
                                                                }
                                                            }
                                                                ?>
                                                            </td>
                                                            <?php if (($role_type == 'subadmin' && $permission->edit) || ($role_type == 'subadmin' && $permission->delete) || $role_type == 'admin') { ?>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <?php if (($role_type == 'subadmin' && $permission->edit) || $role_type == 'admin') { ?>
                                                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-info waves-effect waves-light" onclick="Edit('<?= $item->id; ?>')"> <i class="fa fa fa-edit"></i></a>
                                                                        <?php } ?>



                                                                    </div>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>

                                                    <?php
                                                        $srno++;
                                                    } ?>

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

                                <h5 class="modal-title text-white">Edit <?= $this->data->key; ?></h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                    <span aria-hidden="true">&times;</span>

                                </button>

                            </div>



                            <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/' . $this->uri->segment(3) . '/Update'); ?>" method="post" enctype="multipart/form-data" id="updateForm">

                                <div class="modal-body p-1">



                                </div>

                                <div class="modal-footer d-block p-1">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

                                    <button type="submit" class="btn btn-primary" id="updateBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="updateSpin" style="display:none;"></i></button>

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
    <script>
        $(document).ready(function() {

            $('.table tbody').sortable({
                items: 'tr',
                cursor: 'move',
                opacity: 0.6,
                update: function(event, ui) {
                    var order = $(this).sortable('toArray', {
                        attribute: 'data-id'
                    });
                    $.ajax({
                        url: '<?= base_url($this->data->controller . '/' . $this->data->method . '/SortingComponent') ?>',
                        method: 'POST',
                        data: {
                            order: order
                        },
                        success: function(response) {
                            var response = JSON.parse(response);
                            $('.notifyjs-wrapper').remove();
                            $.notify("" + response[0].msg + "", response[0].res);
                        }
                    });
                }
            }).disableSelection();
        });
    </script>
</body>

</html>