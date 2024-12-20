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
                        <h5 class="content-header-title float-left pr-1 mb-0">Need Help</h5>
                        <div class="breadcrumb-wrapper d-none d-sm-block">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
                                </li>
                                <li class="breadcrumb-item active">Need Help</li>
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
                                                            <h6 class="sub-heading text-primary" onclick="$('#basic-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Need Help Info&nbsp;<span class="fa-solid fa-plus btn-toggle"><span></h6>
                                                        </div>
                                                        <hr>


                                                        <div class="row" id="basic-info" style="display:flex;">

                                                            <!-- Background-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Email">Email<span class="text-danger"> *</span></label>
                                                                    <input type="email" name="email" title="Enter Email" placeholder="Email" class="form-control" value="<?= !empty($data) ? $data['email'] : '' ?>" id="email" required>
                                                                </div>
                                                                </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="Mobile">Mobile<span class="text-danger"> *</span></label>
                                                                    <input type="number" name="mobile" title="Enter Mobile" placeholder="Mobile" class="form-control" value="<?= !empty($data) ? $data['mobile'] : '' ?>" id="mobile" >
                                                                    <span class="error-message text-danger" id="err_mobile_message"></span>
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label data-toggle="tooltip" data-placement="top" title="WhatsApp No.">WhatsApp No.<span class="text-danger"> *</span></label>
                                                                    <input type="number" name="whatsapp_no" title="Enter WhatsApp No." placeholder="WhatsApp No."  class="form-control" value="<?= !empty($data) ? $data['whatsapp_no'] : '' ?>" id="whatsapp_no" >
                                                                    <span class="error-message text-danger" id="err_whatsapp_no_message"></span>
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
     <script>
        $(document).ready(function(){
            $('#mobile').on('keypress', function(event) {
                // Allow only digits (0-9) and prevent default if not a digit
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }

                // Prevent typing if the length is already 10
                if ($(this).val().length >= 10) {
                    event.preventDefault();
                }
            });

            $('#mobile').on('input', function() {
                // Ensure only digits are allowed (in case of pasting)
                var value = $(this).val();
                $(this).val(value.replace(/\D/g, ''));

                // Trim the value if it exceeds 10 digits
                if (value.length > 10) {
                    $(this).val(value.substring(0, 10));
                }
            });

            $('#whatsapp_no').on('keypress', function(event) {
                // Allow only digits (0-9) and prevent default if not a digit
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }

                // Prevent typing if the length is already 10
                if ($(this).val().length >= 10) {
                    event.preventDefault();
                }
            });

            $('#whatsapp_no').on('input', function() {
                // Ensure only digits are allowed (in case of pasting)
                var value = $(this).val();
                $(this).val(value.replace(/\D/g, ''));

                // Trim the value if it exceeds 10 digits
                if (value.length > 10) {
                    $(this).val(value.substring(0, 10));
                }
            });
        });
    </script>
      <script>
        document.getElementById('whatsapp_no').addEventListener('input', function() {
            const input = this;
            const errorMessageElement = document.getElementById('err_whatsapp_no_message');
            
            if (input.value.length < 10) {
                input.setCustomValidity('Please enter a valid mobile number!');
                errorMessageElement.textContent = 'Please enter a valid mobile number!';
            }else if(input.value[0] < 6){
                input.setCustomValidity('Please enter a valid mobile number!');
                errorMessageElement.textContent = 'Please enter a valid mobile number!';
            } else {
                input.setCustomValidity('');
                errorMessageElement.textContent = '';
                document;getElementById('addBtn').setAttribute("disabled", false);
            }
        });
        document.getElementById('mobile').addEventListener('input', function() {
            const input = this;
            const errorMessageElement = document.getElementById('err_mobile_message');
            
            if (input.value.length < 10) {
                input.setCustomValidity('Please enter a valid mobile number!');
                errorMessageElement.textContent = 'Please enter a valid mobile number!';
            }else if(input.value[0] < 6){
                input.setCustomValidity('Please enter a valid mobile number!');
                errorMessageElement.textContent = 'Please enter a valid mobile number!';
            } else {
                input.setCustomValidity('');
                errorMessageElement.textContent = '';
            }
        });
    </script>
</body>

</html>