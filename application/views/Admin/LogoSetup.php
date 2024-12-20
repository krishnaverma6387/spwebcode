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
                        <h5 class="content-header-title float-left pr-1 mb-0">Logo Setup</h5>
                        <div class="breadcrumb-wrapper d-none d-sm-block">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
                                </li>
                                <li class="breadcrumb-item active">Logo Setup</li>
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
                                                            <h6 class="sub-heading text-primary" onclick="$('#basic-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Logo Setup Info&nbsp;<span class="fa-solid fa-plus btn-toggle"><span></h6>
                                                        </div>
                                                        <hr>


                                                        <div class="row" id="basic-info" style="display:flex;">

                                                            <!-- Website Header Logo-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Website Header Logo Title">Website Header Logo Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="web_header_logo_title" title="Enter Website Header Logo Title" placeholder="Website Header Logo Title" class="form-control" value="<?= !empty($data) ? $data['web_header_logo_title'] : '' ?>" id="web_header_logo_title" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Website Header Logo Alt">Website Header Logo Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="web_header_logo_alt" title="Enter Website Header Logo Alt" placeholder="Website Header Logo Alt" class="form-control" value="<?= !empty($data) ? $data['web_header_logo_alt'] : '' ?>" id="web_header_logo_alt" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Website Header Logo<span class="text-danger"> * <small>(.png, .jpg, .jpeg, .webp, .svg, .avif)</small></span></label>
                                                                        <input type="file" class="form-control dropify" data-height="100" name="web_header_logo" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['web_header_logo']) : '' ?>" Title="Choose Website Header Logo" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Website Footer Logo-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Website Footer Logo Title">Website Footer Logo Title</label>
                                                                    <input type="text" name="web_footer_logo_title" title="Enter Website Footer Logo Title" placeholder="Website Footer Logo Title" class="form-control" id="web_footer_logo_title" value="<?= !empty($data) ? $data['web_footer_logo_title'] : '' ?>" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Website Footer Logo Alt">Website Footer Logo Alt</label>
                                                                    <input type="text" name="web_footer_logo_alt" title="Enter Website Footer Logo Alt" placeholder="Website Footer Logo Alt" class="form-control" id="web_footer_logo_alt" value="<?= !empty($data) ? $data['web_footer_logo_alt'] : '' ?>" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Website Footer Logo <span class="text-danger"><small>(.png, .jpg, .jpeg, .webp, .svg, .avif)</small></span></label>
                                                                        <input type="file" class="form-control dropify" data-height="100" name="web_footer_logo" Title="Choose Website Footer Logo" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['web_footer_logo']) : '' ?>" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Favicon-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Favicon Image Title">Favicon Image Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="favicon_title" title="Enter Favicon Title" placeholder="Favicon Title" class="form-control" id="favicon_title" value="<?= !empty($data) ? $data['favicon_title'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Favicon Image Alt">Favicon Image Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="favicon_alt" title="Enter Favicon Alt" placeholder="Favicon Alt" class="form-control" id="favicon_alt" value="<?= !empty($data) ? $data['favicon_alt'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Favicon Image<span class="text-danger"> * <small>(.png, .jpg, .jpeg, .webp, .svg, .avif)</small></span></label>
                                                                        <input type="file" class="form-control dropify" data-height="100" name="favicon" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['favicon']) : '' ?>" Title="Choose Favicon Image" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- App Logo-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="App Logo Title">App Logo Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="app_logo_title" title="Enter App Logo Title" placeholder="App Logo Title" class="form-control" id="app_logo_title" value="<?= !empty($data) ? $data['app_logo_title'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="App Logo Alt">App Logo Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="app_logo_alt" title="Enter App Logo Alt" placeholder="App Logo Alt" class="form-control" id="app_logo_alt" value="<?= !empty($data) ? $data['app_logo_alt'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">App Logo<span class="text-danger"> * <small>(.png, .jpg, .jpeg, .webp, .svg, .avif)</small></span></label>
                                                                        <input type="file" class="form-control dropify" data-height="100" name="app_logo" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['app_logo']) : '' ?>" Title="Choose App Logo" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- Royal Club-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Royal Club Logo Title">Royal Club Logo Title<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="royal_club_logo_title" title="Enter Royal Club Logo Title" placeholder="Royal Club Logo Title" class="form-control" id="royal_club_logo_title" value="<?= !empty($data) ? $data['royal_club_logo_title'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Royal Club Logo Alt">Royal Club Logo Alt<span class="text-danger"> *</span></label>
                                                                    <input type="text" name="royal_club_logo_alt" title="Enter Royal Club Logo Alt" placeholder="Royal Club Logo Alt" class="form-control" id="royal_club_logo_alt" value="<?= !empty($data) ? $data['royal_club_logo_alt'] : '' ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" data-placement="top">Royal Club Logo<span class="text-danger"> * <small>(.png, .jpg, .jpeg, .webp, .svg, .avif)</small></span></label>

                                                                        <input type="file" class="form-control dropify" data-height="100" name="royal_club_logo" data-default-file="<?= !empty($data) ? base_url('uploads/' . $this->data->folder . '/' . $data['royal_club_logo']) : '' ?>" Title="Choose Royal Club Logo" accept="image/jpg, image/png, image/jpeg,image/webp,image/avif">
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>


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