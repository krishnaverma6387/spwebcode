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

        .form-control {
            height: 30px;
            padding: 3px;
        }

        .col-form-label {
            padding-top: calc(0.75rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 0.5;
        }

        .disable {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns" onload="disablePastDates()">
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
            <div class="content-body">
                <section id="form-action-layouts">
                    <div class="row match-height">
                        <div class="col-sm-12">
                            <form action="<?php echo base_url($this->data->controller . '/' . $this->data->method . '/Update'); ?>" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card card-dashboard">
                                            <div class="card-content collpase show">
                                                <div class="card-body py-1 px-0 table-responsive">
                                                    <div class="offcanvas-body">
                                                        <div class="container-fluid">

                                                        <!-- <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1><span class="badge badge-secondary">STAY CONNECTED</span></h1>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <textarea id="summernoteEditor" name="stay_connected" class="form-control summernote">
                                                                        <?//php echo !empty($list->stay_connected) ? $list->stay_connected : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                        <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1><span class="badge badge-secondary">Get the app</span></h1>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="get_the_app" class="form-control summernote">
                                                                        <?php echo !empty($list->get_the_app) ? $list->get_the_app : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1><span class="badge badge-secondary">SLICK </span></h1>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK REWARDS TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="slick_title" class="form-control summernote">
                                                                        <?php echo !empty($list->slick_title) ? $list->slick_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK REWARDS DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="slick_description" class="form-control summernote">
                                                                        <?php echo !empty($list->slick_description) ? $list->slick_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK REWARDS KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="slick_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->slick_keyword) ? $list->slick_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK CONDITION</h3></label>
                                                                        <textarea id="summernoteEditor" name="slick_condition" class="form-control summernote">
                                                                        <?php echo !empty($list->slick_condition) ? $list->slick_condition : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>




                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK DISCLIMER TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="disc_title" class="form-control summernote">
                                                                        <?php echo !empty($list->disc_title) ? $list->disc_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK DISCLIMER DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="disc_description" class="form-control summernote">
                                                                        <?php echo !empty($list->disc_description) ? $list->disc_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK DISCLIMER KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="disc_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->disc_keyword) ? $list->disc_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SLICK DISCLIMER CONDITION</h3></label>
                                                                        <textarea id="summernoteEditor" name="disc_condition" class="form-control summernote">
                                                                        <?php echo !empty($list->disc_condition) ? $list->disc_condition : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>








                                                            </div>




                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1><span class="badge badge-secondary">Help Center</span></h1>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>TERMS TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="terms_title" class="form-control summernote">
                                                                        <?php echo !empty($list->terms_title) ? $list->terms_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>TERMS DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="terms_description" class="form-control summernote">
                                                                        <?php echo !empty($list->terms_description) ? $list->terms_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>TERMS KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="terms_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->terms_keyword) ? $list->terms_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>TERMS CONDITION</h3></label>
                                                                        <textarea id="summernoteEditor" name="terms_condition" class="form-control summernote">
                                                                        <?php echo !empty($list->terms_condition) ? $list->terms_condition : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SHIPPING TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="shipping_title" class="form-control summernote">
                                                                        <?php echo !empty($list->shipping_title) ? $list->shipping_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SHIPPING DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="shipping_description" class="form-control summernote">
                                                                        <?php echo !empty($list->shipping_description) ? $list->shipping_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SHIPPING keyword</h3></label>
                                                                        <textarea id="summernoteEditor" name="shipping_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->shipping_keyword) ? $list->shipping_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>SHIPPING TERMS</h3></label>
                                                                        <textarea id="summernoteEditor" name="shipping_terms" class="form-control summernote">
                                                                        <?php echo !empty($list->shipping_terms) ? $list->shipping_terms : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>CANCELLATION TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="cancellation_title" class="form-control summernote">
                                                                        <?php echo !empty($list->cancellation_title) ? $list->cancellation_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>CANCELLATION DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="cancellation_description" class="form-control summernote">
                                                                        <?php echo !empty($list->cancellation_description) ? $list->cancellation_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>CANCELLATION KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="cancellation_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->cancellation_keyword) ? $list->cancellation_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>CANCELLATION POLICY</h3></label>
                                                                        <textarea id="summernoteEditor" name="cancellation_policy" class="form-control summernote">
                                                                        <?php echo !empty($list->cancellation_policy) ? $list->cancellation_policy : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>




                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>RETURN TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="return_title" class="form-control summernote">
                                                                        <?php echo !empty($list->return_title) ? $list->return_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>RETURN DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="return_description" class="form-control summernote">
                                                                        <?php echo !empty($list->return_description) ? $list->return_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>RETURN KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="return_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->return_keyword) ? $list->return_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>RETURN POLICY</h3></label>
                                                                        <textarea id="summernoteEditor" name="return_policy" class="form-control summernote">
                                                                        <?php echo !empty($list->return_policy) ? $list->return_policy : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>REFUND TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="refund_title" class="form-control summernote">
                                                                        <?php echo !empty($list->refund_title) ? $list->refund_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>REFUND DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="refund_description" class="form-control summernote">
                                                                        <?php echo !empty($list->refund_description) ? $list->refund_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>REFUND KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="refund_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->refund_keyword) ? $list->refund_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>REFUND POLICY</h3></label>
                                                                        <textarea id="summernoteEditor" name="refund_policy" class="form-control summernote">
                                                                        <?php echo !empty($list->refund_policy) ? $list->refund_policy : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>EXCHANGE TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="exchange_title" class="form-control summernote">
                                                                        <?php echo !empty($list->exchange_title) ? $list->exchange_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>EXCHANGE DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="exchange_description" class="form-control summernote">
                                                                        <?php echo !empty($list->exchange_description) ? $list->exchange_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>EXCHANGE KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="exchange_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->exchange_keyword) ? $list->exchange_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>EXCHANGE POLICY</h3></label>
                                                                        <textarea id="summernoteEditor" name="exchange_policy" class="form-control summernote">
                                                                        <?php echo !empty($list->exchange_policy) ? $list->exchange_policy : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>INTELLECTUAL TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="intellectual_title" class="form-control summernote">
                                                                        <?php echo !empty($list->intellectual_title) ? $list->intellectual_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>INTELLECTUAL DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="intellectual_description" class="form-control summernote">
                                                                        <?php echo !empty($list->intellectual_description) ? $list->intellectual_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>INTELLECTUAL KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="intellectual_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->intellectual_keyword) ? $list->intellectual_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>INTELLECTUAL POLICY</h3></label>
                                                                        <textarea id="summernoteEditor" name="intellectual_proprty" class="form-control summernote">
                                                                        <?php echo !empty($list->intellectual_proprty) ? $list->intellectual_proprty : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>COOKIE TITLE</h3></label>
                                                                        <textarea id="summernoteEditor" name="cookie_title" class="form-control summernote">
                                                                        <?php echo !empty($list->cookie_title) ? $list->cookie_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>COOKIE DESCRIPTION</h3></label>
                                                                        <textarea id="summernoteEditor" name="cookie_description" class="form-control summernote">
                                                                        <?php echo !empty($list->cookie_description) ? $list->cookie_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>COOKIE KEYWORD</h3></label>
                                                                        <textarea id="summernoteEditor" name="cookie_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->cookie_keyword) ? $list->cookie_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1"><h3>COOKIE PRIVACY</h3></label>
                                                                        <textarea id="summernoteEditor" name="privacy_cookie" class="form-control summernote">
                                                                        <?php echo !empty($list->privacy_cookie) ? $list->privacy_cookie : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>




                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SHOPPING TITLE</label>
                                                                        <textarea id="summernoteEditor" name="shopping_title" class="form-control summernote">
                                                                        <?php echo !empty($list->shopping_title) ? $list->shopping_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SHOPPING DESCRIPTION</label>
                                                                        <textarea id="summernoteEditor" name="shopping_description" class="form-control summernote">
                                                                        <?php echo !empty($list->shopping_description) ? $list->shopping_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SHOPPING KEYWORD</label>
                                                                        <textarea id="summernoteEditor" name="shopping_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->shopping_keyword) ? $list->shopping_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SHOPPING GUIDE</label>
                                                                        <textarea id="summernoteEditor" name="shopping_guide" class="form-control summernote">
                                                                        <?php echo !empty($list->shopping_guide) ? $list->shopping_guide : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>





                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">COUPON TITLE</label>
                                                                        <textarea id="summernoteEditor" name="coupon_title" class="form-control summernote">
                                                                        <?php echo !empty($list->coupon_title) ? $list->coupon_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">COUPON DESCRIPTION</label>
                                                                        <textarea id="summernoteEditor" name="coupon_description" class="form-control summernote">
                                                                        <?php echo !empty($list->coupon_description) ? $list->coupon_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">COUPON KEYWORD</label>
                                                                        <textarea id="summernoteEditor" name="coupon_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->coupon_keyword) ? $list->coupon_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">COUPON REDEMPTION</label>
                                                                        <textarea id="summernoteEditor" name="coupon_redemption" class="form-control summernote">
                                                                        <?php echo !empty($list->coupon_redemption) ? $list->coupon_redemption : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>




                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SIZE TITLE</label>
                                                                        <textarea id="summernoteEditor" name="size_title" class="form-control summernote">
                                                                        <?php echo !empty($list->size_title) ? $list->size_title : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SIZE DESCRIPTION</label>
                                                                        <textarea id="summernoteEditor" name="size_description" class="form-control summernote">
                                                                        <?php echo !empty($list->size_description) ? $list->size_description : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SIZE KEYWORD</label>
                                                                        <textarea id="summernoteEditor" name="size_keyword" class="form-control summernote">
                                                                        <?php echo !empty($list->size_keyword) ? $list->size_keyword : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">SIZE CHOOSE</label>
                                                                        <textarea id="summernoteEditor" name="choose_size" class="form-control summernote">
                                                                        <?php echo !empty($list->choose_size) ? $list->choose_size : '' ?>
                                                                    </textarea>
                                                                    </div>
                                                                </div>







                                                            </div>
                                                            <div class="mt-2">
                                                                <button type="submit" class="mx-1 btn btn-primary btn-sm" style="padding: 8px;">Submit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    </section>
    </div>
    </div>
    </div>
    <?php require APPPATH . 'views/Auth/Footer.php'; ?>
    <?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
    <script>
        // Function to disable past dates
        function disablePastDates() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('dateInput').min = today;
        }
    </script>
</body>

</html>