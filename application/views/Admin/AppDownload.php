<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <style>
        .btn-toggle {
            border-radius: 0;
            border: 2px solid white;
            top: 10px;
            left: 10px;
            box-shadow: 0 0 2px #1f1515;
            color: white;
            padding: 1px 2px;
            font-size: 10px;
            margin: 0 5px;
        }

        .fa-minus {
            background-color: #df1940cc;
        }

        .fa-plus {
            background-color: #00B5B8;
        }

        .sub-heading {
            font-size: 16px;
        }

        .step-trigger {
            background: unset !important;
            padding: 6px !important;
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
                        <h5 class="content-header-title float-left pr-1 mb-0">App Download</h5>
                        <div class="breadcrumb-wrapper d-none d-sm-block">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
                                </li>
                                <li class="breadcrumb-item active">App Download</li>
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
                                    <div class="card-body py-1 table-responsive">
                                        <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
                                            <div class="bs-stepper linear ">

                                                <div class="bs-stepper-content p-0">
                                                    <div id="basic-part" class="content active dstepper-block m-0" role="tabpanel" aria-labelledby="basic-part-trigger">

                                                        <div>
                                                            <h6 class="sub-heading text-primary" onclick="$('#basic-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">App Download Info&nbsp;<span class="fa-solid fa-plus btn-toggle"><span></h6>
                                                        </div>
                                                        <hr>


                                                        <div class="row" id="basic-info" style="display:flex;">

                                                            <!-- Background-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Background Image Title">Background Image Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="bg_title" title="Enter Background Title" placeholder="Background Title" class="form-control" value="<?= !empty($data) ? $data['bg_title'] : '' ?>" id="bg_title" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Background Image Alt">Background Image Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="bg_alt" title="Enter Background Alt" placeholder="Background Alt" class="form-control" value="<?= !empty($data) ? $data['bg_alt'] : '' ?>" id="bg_alt" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Background Image<span class="text-danger"> *</span></label>
                                                                        <!-- <input type="file" name="background_image" class="form-control"> -->
                                                                        <input type="file" class="form-control dropify" data-height="100" name="background_image" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['background_image']) : '' ?>" Title="Choose Background Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- QR Code-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="QR Image Title">QR Image Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="QR_image_title" title="Enter QR Title" placeholder="QR Title" class="form-control" id="QR_image_title" value="<?= !empty($data) ? $data['bg_title'] : '' ?>" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="QR Image Alt">QR Image Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="QR_image_alt" title="Enter QR Alt" placeholder="QR Alt" class="form-control" id="QR_image_alt" value="<?= !empty($data) ? $data['QR_image_alt'] : '' ?>" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">QR Image<span class="text-danger"> *</span></label>
                                                                        <!-- <input type="file" name="QR_image" class="form-control"> -->
                                                                        <input type="file" class="form-control dropify" data-height="100" name="QR_image" Title="Choose QR Image" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['QR_image']) : '' ?>" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Banner-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Banner Image Title">Banner Image Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="banner_title" title="Enter Banner Title" placeholder="Banner Title" class="form-control" id="banner_title" value="<?= !empty($data) ? $data['banner_title'] : '' ?>" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Banner Image Alt">Banner Image Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="banner_alt" title="Enter Banner Alt" placeholder="Banner Alt" class="form-control" id="banner_alt" value="<?= !empty($data) ? $data['banner_alt'] : '' ?>" required>
                                                                </div>
                                                                <!-- </div>
                                                            <div class="col-sm-4"> -->
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Banner Image<span class="text-danger"> *</span></label>
                                                                        <!-- <input type="file" name="banner" class="form-control"> -->
                                                                        <input type="file" class="form-control dropify" data-height="100" name="banner" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['banner']) : '' ?>" Title="Choose Banner Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Link<span class="text-danger"> *</span></label>
                                                                    <input type="link" name="app_link" class="form-control " required value="<?= !empty($data) ? $data['app_link'] : '' ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Meta Description<span class="text-danger"> *</span></label>
                                                                    <textarea name="meta_description" class="form-control " required><?= !empty($data) ? $data['meta_description'] : '' ?></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Text<span class="text-danger"> *</span></label>
                                                                    <textarea class="form-control short summernote" style="border:1px solid #aaaaaa;" id="s" required name="text"><?= !empty($data) ? $data['text'] : '' ?></textarea>
                                                                </div>
                                                            </div>




                                                        </div>
                                                        <!-- dynamic size chart table load start-->

                                                        <hr>

                                                        <button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i> Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
                                                    </div>

                                                </div>


                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>




    <?php require APPPATH . 'views/Auth/Footer.php'; ?>
    <?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
    <script type="text/javascript">
        var stepper = new Stepper(document.querySelector('.bs-stepper'));

        function validateForm(id) {
            var block = '#' + id + ' .form-control';
            $(block).attr("data-parsley-group", id);
            // if ($('form').parsley().validate({group: id })) {

            // } 
            stepper.next();
        }
    </script>
</body>

</html>