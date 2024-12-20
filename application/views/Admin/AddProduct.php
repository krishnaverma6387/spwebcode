<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
      <?php require APPPATH . 'views/Auth/CssLinks.php'; ?>
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  />
      <style>
         .btn-toggle{
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
         .fa-minus{
         background-color: #df1940cc;
         }
         .fa-plus{
         background-color: #00B5B8;
         }
         .sub-heading{
         font-size:16px;
         }
         .step-trigger{
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
                     <h5 class="content-header-title float-left pr-1 mb-0">Add Product</h5>
                     <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                           <li class="breadcrumb-item">
                              <a href="<?= base_url($this->data->controller); ?>/index"><i class="fa fa-home"></i></a>
                           </li>
                           <li class="breadcrumb-item">
                              <a href="<?= base_url($this->data->controller); ?>/Dashboard"><?= $this->data->title; ?></a>
                           </li>
                           <li class="breadcrumb-item active">Add Product</li>
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
                              <a class="btn btn-sm btn-primary" href="<?= base_url($this->data->controller . '/' . $this->data->method . ''); ?>">
                              <i class="fa fa-circle-o"></i> Manage <?= $this->data->key; ?></a>
                              <a class="btn btn-sm btn-primary" href="javascript:void();">   
                              &nbsp <span id="catbread">-</span>//<span id="subcatbread">- </span>//<span id="cosubcatbread">- </span>//<span id="brandbread">- </span></a>
                              <button class="btn btn-sm btn-dark" type="button" data-toggle="modal" data-target="#UploadQuestionModal"> <i class="fa fa-upload" aria-hidden="true"></i> Upload Excel File</button>
                              <a href="<?= base_url('uploads/excel/DemoProduct.xlsx');?>" class="btn btn-sm btn-secondary"  > <i class="fa fa-download" aria-hidden="true"></i> Demo File</a>
                              <a href="<?= base_url($this->data->controller); ?>/BulkUploads" class="btn btn-sm btn-danger"  > <i class="fa fa-upload" aria-hidden="true"></i> Upload Bulk Image</a>
                              <div class="vdetails mt-2"></div>
                           </div>
                           <div class="card-content collpase show">
                              <div class="card-body py-1 table-responsive">
                                 <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/Add'); ?>" method="post" enctype="multipart/form-data" id="addForm">
                                    <div class="bs-stepper linear ">
                                       <div class="bs-stepper-header" role="tablist">
                                          <div class="step active" data-target="#basic-part">
                                             <button type="button" class="step-trigger" role="tab" aria-controls="basic-part" id="basic-part-trigger" aria-selected="true">
                                             <span class="bs-stepper-circle">1</span>
                                             <span class="bs-stepper-label">Basic Details</span>
                                             </button>
                                          </div>
                                          <div class="line"></div>
                                          <div class="step" data-target="#measurement-part">
                                             <button type="button" class="step-trigger" role="tab" aria-controls="measurement-part" id="measurement-part-trigger" aria-selected="true" >
                                             <span class="bs-stepper-circle">2</span>
                                             <span class="bs-stepper-label">Stock & Measurement Details</span>
                                             </button>  
                                          </div>
                                          <div class="line"></div>
                                          <div class="step" data-target="#price-part">
                                             <button type="button" class="step-trigger" role="tab" aria-controls="price-part" id="prcie-part-trigger" aria-selected="true" >
                                             <span class="bs-stepper-circle">3</span>
                                             <span class="bs-stepper-label">Price Details</span>
                                             </button>  
                                          </div>
                                          <div class="line"></div>
                                          <div class="step" data-target="#terms-part">
                                             <button type="button" class="step-trigger" role="tab" aria-controls="terms-part" id="terms-part-trigger" aria-selected="true" >
                                             <span class="bs-stepper-circle">4</span>
                                             <span class="bs-stepper-label">Terms & Conditions</span>
                                             </button>  
                                          </div>
                                          <div class="line"></div>
                                          <div class="step" data-target="#other-part">
                                             <button type="button" class="step-trigger" role="tab" aria-controls="other-part" id="other-part-trigger" aria-selected="false" disabled="disabled">
                                             <span class="bs-stepper-circle">5</span>
                                             <span class="bs-stepper-label">Other Details</span>
                                             </button>  
                                          </div>
                                       </div>
                                       <div class="bs-stepper-content p-0">
                                          <div id="basic-part"  class="content active dstepper-block m-0" role="tabpanel" aria-labelledby="basic-part-trigger">
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-primary"onclick="$('#cat-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Brand & Category Info&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="cat-info" style="display:flex;">
                                             <input type="hidden" name="brand" value="<?= $brandlist[0]->id?>">
                                                <!-- <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Select Product Brand Eg. Tanishq">Product Brand<span class="text-danger"> *</span></label>
                                                      <select name="brand" class="form-control  pb" id="pb" title="Select a Product Brand" data-placeholder="Choose a Brand..." onchange="change_subbrand(this.value);">
                                                         <option selected disabled>--- Select ---</option>
                                                         <?php
                                                            foreach ($brandlist as $brand)
                                                            {
                                                            ?>
                                                         <option class="optionbrand<?= $brand->id ?>" value="<?= $brand->id ?>"><?= $brand->name ?></option>
                                                         <?php
                                                            }
                                                            ?>
                                                      </select>
                                                   </div>
                                                </div> -->
                                                <!-- <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Sub-Brand">Product Subbrand<span class="text-danger"> </span></label>
                                                      <select name="subbrand" class="form-control " id="subbrand" title="Select a Product Subbrand" data-placeholder="Choose a Subbrand...">
                                                         <option value="">--- Select Brand First ---</option>
                                                      </select>
                                                   </div>
                                                </div> -->
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Select Product Category Eg. Jewellery">Product Category<span class="text-danger"> *</span></label>
                                                      <select name="category" required class="form-control pcat " id="cat" title="Select a Product Category" onchange="change_subcat(this.value);breadcrumb();generateProductCode(this.value,'C');" data-placeholder="Choose a Category...">
                                                         <option selected disabled>--- Select ---</option>
                                                         <?php
                                                            foreach ($categorylist as $cat)
                                                            {
                                                            ?>
                                                         <option class="optioncat<?= $cat->id ?>" value="<?= $cat->id ?>"><?= ucfirst($cat->name) ?></option>
                                                         <?php
                                                            }
                                                            ?>
                                                      </select>
                                                      <span id="pcat_error" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Select Product Sub-Category Eg. Neckless Etc.">Product Subcategory<span class="text-danger"> *</span></label>
                                                      <select name="subcategory" class="form-control " id="subcat" onchange="breadcrumb();change_attribute(this.value);generateSkuId('INDIVIDUAL', this.value);" title="Select a Product Subcategory" data-placeholder="Choose a Subcategory..." required>
                                                         <option selected disabled>--- Select Category First ---</option>
                                                      </select>
                                                   </div>
                                                </div>
                                               
                                             </div>
                                             <br>
                                             <div>
                                                <h6  class="sub-heading text-danger"onclick="$('#basic-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Basic Info&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="basic-info" style="display:flex;">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Code Must Be Unique">Product Code<span class="text-danger">  *</span></label>
                                                      <input type="text" readonly name="product_code" value="" id="product_code" placeholder="Product Code" class="form-control" required>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product HSN No.">HSN Code<span class="text-danger"> *</span></label>
                                                      <input type="number" name="hsn" title="Enter HSN" placeholder="Product HSN" class="form-control phsn" id="hsn">
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Bar Code">Bar Code<span class="text-danger">* </span></label>
                                                      <input type="number" name="barcode" required title="Bar Code" placeholder="Bar Code" class="form-control">
                                                      <span id="barcode" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product SKU Id">SKUID<span class="text-danger">* </span></label>
                                                      <input type="text" name="skuid" readonly required title="Enter SKUID" id="skuid" placeholder="Enter SKUID" class="form-control">
                                                      <span id="skuid" style="color: #fd3550;"></span>   
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Name">Product Name<span class="text-danger"> *</span></label>
                                                      <input type="text" name="name" placeholder="Product Name" class="form-control" data-parsley-group="signup" required>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Title">Product Title<span class="text-danger"> *</span></label>
                                                      <input type="text" name="title" placeholder="Product Title" class="form-control" required>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Lauching Date Time">Launch Time<span class="text-danger"> ( Optional )</span></label>
                                                      <input type="datetime-local" name="launchtime" class="form-control" >
                                                      <span id="launchtime" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Number of items within a package">Pack Of <span class="text-danger"> *</span></label>
                                                      <input type="number" name="packof"  placeholder="Number of items within a package" class="form-control">
                                                      <span id="packof" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Is This Product Currently Available">Avaliablity<span class="text-danger"> *</span></label>
                                                      <select name="avaliablity" required="" data-placeholder="Choose an Avaliability..." title="Select Avaliability  (Yes/No)" class="form-control pa " id="pa">
                                                         <option value="true">Yes</option>
                                                         <option value="false">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12">
                                                   <div class="form-group">
                                                      <label>Short Description (Maximum 100 words)<span class="text-danger"> *</span></label>
                                                      <textarea class="form-control short summernote" style="border:1px solid #aaaaaa;" id="s" required name="shortdescription"></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12">
                                                   <div class="form-group">
                                                      <label>Long Description</label>
                                                      <textarea id="summernoteEditor" name="longdescription" class="form-control summernote"></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Front View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="front_view_image" title="Choose Product Front View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Back View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="back_view_image" title="Choose Product Back View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Right View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="rside_view_image" title="Choose Product Right View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Left View Image <span class="text-danger"> * <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="lside_view_image" title="Choose Product Left View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Top View Image <span class="text-danger">  <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1"  class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="top_view_image" title="Choose Product Top View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Bottom View Image <span class="text-danger">  <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1"  class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="bottom_view_image" title="Choose Product Bottom View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Close View Image <span class="text-danger">  <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1"  class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="close_view_image" title="Choose Product Close View Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div>
                                                <!-- <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Images">Product Image <span class="text-danger"> (Use CTRL + Click To Select Multiple Img)* <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                      <input id="file1" required class="form-control demoInputBox1" type="file" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" name="image[]" multiple="multiple" title="Choose First Product Image." oninput="image1()">
                                                      <span id="file_error1"></span>
                                                   </div>
                                                </div> -->
                                                <!-- <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <div class="form-group">
                                                         <label  data-toggle="tooltip" data-placement="top" >Size chart Image<span class="text-danger"> (Optional) <small>(.png, .jpeg, .jpg, .webp, .avif, .svg)</small></span></label>
                                                         <input type="file" name="sizechart" accept="image/png, image/jpg, image/jpeg,image/webp,image/avif,image/svg" class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Size Chart ">Size Chart<span class="text-danger"> </span></label>
                                                      <select name="sizechart_type"  onchange="change_sizetype(this.value);" placeholder="Enter Size"  class="form-control" >
                                                         <option value="NA" selected disabled>N/A</option>
                                                         <?php
                                                            $sizelist=$this->db->get('tbl_size')->result();   
                                                            foreach($sizelist as $each)  
                                                            {
                                                            ?>
                                                         <option  value="<?= $each->id?>"><?= $each->size_type?></option>
                                                         <?php
                                                            }
                                                            ?>
                                                      </select>
                                                      <div id="sizechart" style="margin: 5px 0; display:none;">  
                                                         <span>Custom Size Chart</span>
                                                         <input type="checkbox" name="custom_sizechart" value="true">
                                                      </div>
                                                   </div>
                                                </div> -->
                                             </div>
                                             <!-- dynamic size chart table load start--> 
                                             <div class="mt-0" id="sizechart_table"></div>
                                             <hr>
                                             <!-- dynamic size chart table load end-->  
                                             <hr>
                                             <button type="button" class="btn btn-primary" onclick="validateForm('basic-part')">Next</button>
                                          </div>
                                          <div id="measurement-part" class="content  m-0" role="tabpanel" aria-labelledby="measurement-part-trigger">
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-primary" onclick="$('#stock-details').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Stock Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="stock-details">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Total Available Stock Quantity">Stock Quantity <span class="text-danger">(Stock=Sum of total varinant qty)*</span></label>
                                                      <input type="number" required name="stock" title="Stock Quantity" required placeholder="Stock Quantity" class="form-control" value="0">
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Maximum Purchase On Single Order">Maximum Selling Quantity <span class="text-danger">*</span></label>
                                                      <input type="number" name="maxqty" required placeholder="Enter Maximum Selling Quantity" class="form-control" value="10">
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Minimum Stock Alert Value">Stock Alert Quantity <span class="text-danger">*</span></label>
                                                      <input type="number" required name="alertqty" title="Stock Alert Quantity " placeholder="Stock Alert Quantity" class="form-control">
                                                      <span id="alertqty" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-danger" onclick="$('#unit-details').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Unit & Measurement Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="unit-details" style="display:flex;">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Unit Eg. Kg , Mg , Ml">Unit<span class="text-danger"> *</span></label>
                                                      <input list="units" class="form-control" placeholder="Product Unit" name="unit" id="e" required>
                                                      <datalist id="units">
                                                         <!--option value="mg"></option>
                                                            <option value="gm"></option>
                                                            <option Value="ml"></option>
                                                            <option value="liter"></option-->
                                                         <option value="gm"></option>
                                                         <option value="kg"></option>
                                                      </datalist>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Weight Acoording To Unit">Weight<span class="text-danger">*</span></label>
                                                      <input type="text" required name="weight" title="Enter Weight" placeholder="Product Weight" class="form-control phsn" id="Weight">
                                                      <span id="phsn_error" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Length">Length<span class="text-danger">&nbsp;(In cm) *</span></label>
                                                      <input type="text" required name="length" title="Length " placeholder="Length" class="form-control text-capitalize">
                                                      <span id="rewardpoint" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Width">Width<span class="text-danger">&nbsp;(In cm) *</span></label>
                                                      <input type="text" required name="width" title="Width " placeholder="Width"  class="form-control text-capitalize">
                                                      <span id="width" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Height">Height<span class="text-danger">&nbsp;(In cm) *</span></label>
                                                      <input type="text" required name="height" title="Height " placeholder="Height" class="form-control text-capitalize">
                                                      <span id="height" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('measurement-part')">Next</button>
                                          </div>
                                          <div id="price-part" class="content  m-0" role="tabpanel" aria-labelledby="price-part-trigger">
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-danger" onclick="$('#price-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Pricing Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="price-info" style="display:flex;">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Purchasing Price">Purchasing Price<span class="text-danger"> *</span></label>
                                                      <input type="number" name="purchase_price" title="Enter Purchasing Price" required placeholder="Purchasing Price" class="form-control" id="purchaseprice" oninput="setAmount()">
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
                                                      <input type="number" name="gst" title="Enter GST" placeholder="Product GST" class="form-control pgst1" id="gst1" readonly>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Total Base Price">Base Price(&#8377;)<span class="text-danger"> * </span></label>
                                                      <input type="number" name="base_price" title="Base Price" placeholder="Product Base Price" class="form-control base_price" id="base_price" readonly>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Total Expected Profit In Percentage">Expected Profit(%)<span class="text-danger"> *</span></label>
                                                      <input type="number" name="expected_profit" title="Expected Profit For This Product" placeholder="Expected Profit For This Product" class="form-control expected_profit"  id="expected_profit" oninput="setAmount()">
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Minimum Selling Price">Minimum Selling Price(&#8377;)<span class="text-danger"> *</span></label>
                                                      <input type="number" name="min_sell_price" title="Product Minimum Selling Price" placeholder="Product Minimum Selling Price" class="form-control minimum_selling_price" id="minimum_selling_price" readonly>
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product MRP">MRP(&#8377;)<span class="text-danger"> *</span></label>
                                                      <input type="number" name="mrp" title="Enter MRP" required="" placeholder="Product MRP" class="form-control pmrp" id="mrp" oninput="setAmount()">
                                                   </div>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product MRP">Regular Selling Price(&#8377;)<span class="text-danger"> *</span></label>
                                                      <input type="number" name="reg_sell_price" readonly title="Enter Regular Selling Price" required="" placeholder="Product Regular Selling Price" class="form-control pmrp" id="regular_selling_price">
                                                   </div>
                                                </div>
                                                <!--<div class="col-sm-4">
                                                   <div class="form-group">
                                                   <label data-toggle="tooltip" data-placement="top" title="Product Selling Price ">Offer Price(&#8377;)<span class="text-danger"> *</span></label>
                                                   <input type="number" name="price" title="Enter Price" placeholder="Product Price" class="form-control pprice" id="c" required oninput="setAmount()">
                                                   </div>
                                                   </div>-->
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Discount">Margin(&#8377;)<span class="text-danger"> *</span></label>
                                                      <input type="text" name="margin" title="Enter Discount" required placeholder="Discount" class="form-control pd" id="margin" readonly>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-success" onclick="$('#prebooking-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Prebooking & Royal User Information&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <hr>
                                             <div class="row" id="prebooking-info" style="display:flex;">
                                                <div class="col-sm-3">
                                                   <div class="form-group" >
                                                      <label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Pre Booking ?">Pre Booking Available<span class="text-danger"> *</span></label>
                                                      <select class="form-control" id="prebook_avl" name="prebook_avl"  required onchange="prebook_status(this.value)">
                                                         <option value="true">Yes</option>
                                                         <option value="false">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group" id="prebook_div">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Pre Booking Amount">Pre Booking Amount<span class="text-danger"> *</span></label>
                                                      <input class="form-control" type="number" name="prebook_amt"   placeholder="Pre Booking Amount" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group" id="prebook_div">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Amount For Royal Members">Sell Price For Royal Members<span class="text-danger"> *</span></label>
                                                      <input class="form-control" type="number" name="royal_amt"   placeholder="Royal Amount" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group" id="prebook_div">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Pre Booking Amount">Royal Club Cash Upto</label>
                                                      <input class="form-control" type="number" name="royal_clubcash"   placeholder="Royal club cash upto" >
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('price-part')">Next</button>
                                          </div>
                                          <div id="terms-part" class="content  m-0" role="tabpanel" aria-labelledby="terms-part-trigger">
                                             <hr>
                                             <div>
                                                <h6 class="sub-heading text-primary" onclick="$('#terms-conditions-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Cancel,Refund,Excahnge & SLA Information&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="terms-conditions-info" style="display:flex;">
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Is This Product Is Available For Cancellation ?">Cancel Status<span class="text-danger"> *</span></label>
                                                      <select class="form-control" id="cancel" name="cancel" required onchange="cancel_status(this.value)">
                                                         <option value="true">Yes</option>
                                                         <option value="false">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group" >
                                                      <label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Return And Refund ">Return & Refund Status<span class="text-danger"> *</span></label>
                                                      <select class="form-control" id="return_refund" name="return_refund"  required onchange="return_status(this.value)">
                                                         <option value="true">Yes</option>
                                                         <option value="false">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group" >
                                                      <label data-toggle="tooltip" data-placement="top" title="Is This Product Available For Exchange">Exchange Status<span class="text-danger"> *</span></label>
                                                      <select class="form-control" id="exchange_avl" name="exchange_avl"  required onchange="exchange_status(this.value)">
                                                         <option value="true">Yes</option>
                                                         <option value="false">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Time required to keep the product ready for dispatch.">Procurement SLA <span class="text-danger"> (In Days)*</span></label>
                                                      <input type="number" required name="procurementsla" title="Procurement SLA In Days " placeholder="Procurement SLA In Days" class="form-control">
                                                      <span id="procurementsla" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>&nbsp;<button type="button" class="btn btn-primary" onclick="validateForm('terms-part')">Next</button>
                                          </div>
                                          <div id="other-part" class="content m-0" role="tabpanel" aria-labelledby="other-part-trigger">
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-success" onclick="$('#additional-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">SEO & Meta Info&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="additional-info" style="display:flex;">
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product SEO Keywords">SEO Keywords<span class="text-danger"> ( Seprated With Comma , ) (Optional) </span></label>
                                                      <input type="text" name="seokeyword" title="SEO Keywords " placeholder="SEO Keywords" class="form-control">
                                                      <span id="seokeyword" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Additional Url (Single Word Only)">Additional Url<span class="text-danger"> (Optional)</span></label>
                                                      <input type="text" name="additionalurl" title="Additional Url" placeholder="Additional Url" class="form-control">
                                                      <span id="additionalurl" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Product Meta Tag Description">Meta Description<span class="text-danger"> (Optional)</span></label>
                                                      <input type="text" name="metadescription" title="Meta Description " placeholder="Meta Description" class="form-control">
                                                      <span id="metadescription" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label data-toggle="tooltip" data-placement="top" title="Talk To Fashion Expert Link">Fashion Expert Link<span class="text-danger"> ( Optional )</span></label>
                                                      <input type="text" name="expertlink" class="form-control" >
                                                      <span id="expertlink" style="color: #fd3550;"></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row attribute"></div>
                                             <div>
                                                <h6  class="sub-heading text-primary mt-1" onclick="$('#modal-other-info').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Modal & Other Details&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="modal-other-info" style="display:flex;">
                                                <div class="col-sm-12">
                                                   <div class="form-group">
                                                      <label>Product Tags</label>
                                                      <textarea class="form-control ptags summernote" style="border:1px solid #aaaaaa;"  name="producttags" id="tags"></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12">
                                                   <div class="form-group">
                                                      <label class="mt-1">Modal Info&nbsp;<input value="true" style="margin-top:-4px;" id="modalinfostatus" type="checkbox" name="modalinfostatus" onclick="toggleModalInfo()" ></label>
                                                      <textarea class="form-control ptags" style="border:1px solid #aaaaaa;display:none;" name="modal_info" id="modal_info" >
																												<div id="model-info">
																													<table class="info-popup__table">
																														<tbody>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Hips</th>
																																<td class="info-popup__block-col">35.5</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Waist</th>
																																<td class="info-popup__block-col">24</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Height</th>
																																<td class="info-popup__block-col">5'10"</td>
																															</tr>
																															<tr>
																																<th class="info-popup__block-col" row="scope">Bust</th>
																																<td class="info-popup__block-col">32</td>
																															</tr>
																														</tbody>
																													</table>
																													<div class="h6 u-margin-b--none u-margin-t--xl">Here she's wearing a size XS</div>
																												</div>
																											</textarea>
                                                   </div>
                                                </div>
                                                <!--<div class="col-sm-4" id="refundpoli">
                                                   <div class="form-group">
                                                   <label>Refund Policy</label>
                                                   <textarea class="form-control summernote" style="border:1px solid #aaaaaa; " required name="refundpolicy" id="refundpolicy"></textarea>
                                                   </div>
                                                   </div>
                                                   <div class="col-sm-4" id="returnpoli">
                                                   <div class="form-group">
                                                   <label>Return Policy</label>
                                                   <textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="returnpolicy" id="returnpolicy"></textarea>
                                                   </div>
                                                   </div>
                                                   <div class="col-sm-4" id="cancelpolicy">
                                                   <div class="form-group">
                                                   <label>Cancellation Policy</label>
                                                   <textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="cancellationpolicy" id="cancellationpolicy"></textarea>
                                                   </div>
                                                   </div>
                                                   <div class="col-sm-4" id="exchngpoli">
                                                   <div class="form-group">
                                                   <label>Exchange Policy</label>
                                                   <textarea class="form-control summernote" style="border:1px solid #aaaaaa;" required name="exchangepolicy" id="exchangepolicy"></textarea>
                                                   </div>
                                                   </div>-->
                                                <div class="col-sm-12">
                                                   <div class="form-group">
                                                      <label class="mt-1">Laundry Tips&nbsp;<input value="true" style="margin-top:-8px;" type="checkbox" name="laundry_avl" onclick="toggleLaundry()"> </label>
                                                      <textarea class="form-control ptags" style="border:1px solid #aaaaaa; display:none;" name="laundry_tips" id="laundry_tips">
                                                      <?php
                                                         $laundryTips=$this->db->get_where('manage_content',array('name'=>'laundry_tips'))->row();
                                                         if(!empty($laundryTips)){
                                                         	echo $decodeData=base64_decode($laundryTips->value);
                                                         }
                                                         ?>
                                                      </textarea> 
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <div>
                                                <h6  class="sub-heading text-danger" onclick="$('#other-settings').slideToggle();$(this).children().toggleClass('fa-minus fa-plus');">Other Settings&nbsp;<span class="fa-solid fa-plus btn-toggle" ><span></h6>
                                             </div>
                                             <div class="row" id="other-settings" style="display:flex;">
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label>Gift Wrap</label> &nbsp
                                                      <input checked value="true" type="checkbox" name="giftwrap" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label>Quick View</label> &nbsp
                                                      <input checked value="true" type="checkbox" name="quickview" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label>Compare</label> &nbsp
                                                      <input checked value="true" type="checkbox" name="compare" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label>Product Display</label> &nbsp
                                                      <input checked value="true" type="checkbox" name="is_status" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label>Chat For Consult</label> &nbsp
                                                      <input checked value="true" type="checkbox" name="consult" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 ">
                                                   <div class="form-group">
                                                      <label for="complimentary">Complimentary Product</label> &nbsp
                                                      <input value="true" id="Complimentary" type="checkbox" name="complimentary" >
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="combostatus">Combo Eligible</label> &nbsp
                                                      <input value="true" id="combostatus" type="checkbox" name="combostatus">
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                             <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                                             <button type="submit" class="btn btn-primary" id="addBtn"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin" style="display:none;"></i></button>
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
      </div>
      </div>
      </section>
      </div>
      </div>
      </div>
      <!--Modal Start-->
      <div class="modal fade" id="UploadQuestionModal">
         <div class="modal-dialog">
            <div class="modal-content border-primary">
               <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white">Upload Products</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UploadExcel'); ?>" method="post" enctype="multipart/form-data" id="uploadForm">
                  <div class="modal-body">
                     <div class="row">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                        <div class="form-group col-sm-12">
                           <label class="col-form-label">Choose Excel File <span class="text-danger">*</span></label>
                           <input type="file" class="form-control" data-height="150" name="excelfile" Title="Choose Excel File"  accept= "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"  >
                           <?php echo form_error("excelfile", "<p class='text-danger' >", "</p>"); ?>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer d-block p-1">
                     <button type="submit" class="btn btn-primary" id="addBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--Modal End-->
      <script>
         function toggleModalInfo(){
         	$('#modal_info').parent().children().eq(2).toggle()
         	$('#modal_info ').toggleClass('summernote'); 
         	$('.summernote').summernote();
         }
         function toggleLaundry(){
         	$('#laundry_tips').parent().children().eq(2).toggle()
         	$('#laundry_tips ').toggleClass('summernote'); 
         	$('.summernote').summernote();
         }
         var colorList = "";
         <?php 
            foreach($colorlist as $color)
            { 
            ?>
         	var ele = "<option style='background: <?= $color->code ?>'><?= $color->code ?></option>'";
         	colorList = colorList + ele;
         	<?php
            }
            ?>
         
         function Sizing() 
         {
         	$(".extra-content").append('<div class="row"><div class="col-sm-2"><div class="form-group"><label>Size <span class="text-danger"> *</span></label><select required name="p_size[]" class="form-control" ><option value="XS">XS</option><option value="S">S</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option></select></div></div><div class="col-sm-2"><div class="form-group"><label for="input-2">Numeric Size<span class="text-danger">*</span></label><input type="number" required name="p_sizenumeric" placeholder="Enter Numeric Size Eg. 32,34,36 Etc." required class="form-control text-uppercase"></div></div> <div class="col-sm-2"><div class="form-group"><label>Color <span class="text-danger"> *</span></label><select name="p_color[]" class="form-control pa chosen-select" required><option selected disabled>Select Color</option> '+colorList+'  </select></div></div> <div class="col-sm-2"><div class="form-group"><label>Unit <span class="text-danger"> *</span></label><input type="text" required name="p_unit[]" placeholder="Enter Unit" list="varunit"  required class="form-control text-uppercase"><datalist id="varunit"><option value="mg"></option><option value="gm"></option><option Value="ml"></option><option value="liter"></option><option value="kg"></option></datalist></div></div><div class="col-sm-2"><div class="form-group"><label>Weight <span class="text-danger"> *</span></label><input type="text" name="p_weight[]" required placeholder="Enter Weight" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>MRP <span class="text-danger"> *</span></label><input type="text" name="p_mrp[]" required placeholder="Enter MRP" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Offer Price <span class="text-danger"> *</span></label><input type="number" name="p_price[]" required  placeholder="Enter Offer Price" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Avaliability <span class="text-danger"> *</span></label><select name="avaliability[]" class="form-control pa chosen-select" required><option value="true">Yes</option><option value="false">No</option></select></div></div><div class="col-sm-2"><div class="form-group"><label>Quantity <span class="text-danger"> *</span></label><input type="number" required name="stock[]"  placeholder="Quantity" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Bar Code <span class="text-danger"> *</span></label><input type="number" required name="baar_code[]"  placeholder="Bar Code" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Length <span class="text-danger"> *</span></label><input type="text"  name="v_length[]"  placeholder="Length" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Width <span class="text-danger"> *</span></label><input type="text"  name="v_width[]"  placeholder="Width" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label>Height <span class="text-danger"> *</span></label><input type="text"  name="v_height[]"  placeholder="Height" class="form-control"></div></div><div class="col-sm-2"><div class="form-group p-4"><button class="btn btn-danger btn-sm fa fa-times-circle remove-extra-content" onclick="removesizing(this)" type="button"></button></div></div></div>');
         }
         
         const removesizing = (e) => {
         	$(e).closest('.row').remove()
         }
         
         
         function youtube()
         {
         	
         	$(".extra-content-youtube").append('<div class="row"><div class="col-sm-6 div-count"><div class="form-group"><label>Youtube Link</label><input type="text" required name="link1[]" placeholder="Enter YouTube Video Link (Only Embed Link)" class="form-control " ></div></div> <div class="col-sm-2"><div class="form-group p-4"><button class="btn btn-danger btn-sm fa fa-times-circle remove-extra-content-youtube" onclick="removebox(this)" type="button"></button></div></div></div>');
         	var divcount = $('.div-count').length;
         	if(divcount >= '5')
         	{
         		$(".add-extra-content-youtube").hide();
         	}
         	else
         	{
         		$(".add-extra-content-youtube").show();
         	}
         }
         
         const removebox = (e) => {
         	$(e).closest('.row').remove();
         	var divcount = $('.div-count').length;
         	if(divcount <= '4')
         	{
         		$(".add-extra-content-youtube").show();
         	}
         }
         
         
      </script>
      <script>
         function cancel_status(status){
         	if(status=='true'){
         		$("#cancel_limit_div").show();
         	}
         	else{
         		$("#cancel_limit_div").hide();
         	}
         	
         	if(status == 'true')
         	{
         		$("#cancelpolicy").show();
         	}
         	else
         	{
         		$("#cancelpolicy").hide();
         	}
         }
         
         function prebook_status(status){
         	if(status=='true'){
         		$("#prebook_div").show();
         	}
         	else{
         		$("#prebook_div").hide();
         	}
         }
         
         function return_status(status){
         	if(status=='true'){
         		$("#return_limit_div").show();
         		$("#refundpoli").show();
         		$("#returnpoli").show();
         	}
         	else{
         		$("#return_limit_div").hide();
         		$("#refundpoli").hide();
         		$("#returnpoli").hide();
         	}
         	
         	
         }
         function exchange_status(status){
         	if(status=='true'){
         		$("#exchange_limit_div").show();
         		$("#exchngpoli").show();
         	}
         	else{
         		$("#exchange_limit_div").hide();
         		$("#exchngpoli").hide();
         	}
         }
         exchange_status('true');
         cancel_status('true');
         return_status('true');
      </script>
      <script>
         function setAmount() {
         	//Purchasing Price
         	var purchaseprice=$("#purchaseprice").val();
         	
         	//fetch cgst and sgst and set as total gst
         	var gst = $("#gst").val();
         	var sgst = $("#sgst").val();
         	
         	//Get Expected Profit
         	var expectedProfit = $("#expected_profit").val();
         	
         	//Get Mrp
         	var mrp = $("#mrp").val();
         	
         	if(purchaseprice!=''){
         		
         		if(gst!='' || sgst!=''){
         			totalgst = parseFloat(gst) + parseFloat(sgst);
         			var gstr = (purchaseprice * totalgst) / 100;
         			gstr = gstr.toFixed(0);
         			$("#gst1").val(gstr);
         			
         			// set base price
         			var base_price=(parseFloat(purchaseprice)+parseFloat(gstr)).toFixed(0);
         			$('#base_price').val(base_price);
         		}
         	}
         	else{
         		var gstr='';
         		var base_price='';
         		$("#gst1").val(gstr);
         		$('#base_price').val(base_price);
         	}
         	
         	if(base_price!='' && expectedProfit!=''){
         		var minimum_selling_price =(parseFloat(base_price)+parseFloat((base_price * expectedProfit) / 100)).toFixed(0); 
         		$("#minimum_selling_price").val(minimum_selling_price); 
         	}
         	else{
         		var minimum_selling_price='';
         		$("#minimum_selling_price").val(minimum_selling_price);
         	}
         	
         	if(mrp != ''){
         		
         		if(minimum_selling_price!=''){
         			var regular_selling_price=parseFloat((parseFloat(mrp)+parseFloat(minimum_selling_price))/2);
         			regular_selling_price=(getNearestLowestMultipleOf50(regular_selling_price.toFixed(0))-1);
         			$('#regular_selling_price').val(regular_selling_price);
         		}
         		else{
         			regular_selling_price='';
         			$('#regular_selling_price').val(regular_selling_price);
         		}
         		
         		if(regular_selling_price!=''){
         			margin=parseFloat(regular_selling_price)-parseFloat(minimum_selling_price);
         			margin = margin.toFixed(0); 
         			$("#margin").val(margin);
         		}
         		else{
         			$("#margin").val(''); 
         		}
         	}
         	else{
         		$('#regular_selling_price').val('');
         		$("#margin").val(''); 
         	}
         }
         function getNearestLowestMultipleOf50(number) {
         	var nearestLowestMultiple = Math.floor(number / 50) * 50;
         	return nearestLowestMultiple;
         }
      </script>
      </script>
      <?php require APPPATH . 'views/Auth/Footer.php'; ?>
      <?php require APPPATH . 'views/Auth/JsLinks.php'; ?>
      <script type="text/javascript">
       
         var stepper = new Stepper(document.querySelector('.bs-stepper'));
         function validateForm(id) { 
         	var block='#'+id+' .form-control';
         	$(block).attr("data-parsley-group",id);
            stepper.next(); 
         	// if ($('form').parsley().validate({group: id })) {
         	// } 
         } 
         function change_subcat(id) {
         	var id = id;
         	var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subcategory/') ?>" + id;
         	$.ajax({
         		url: url,
         		type: "post",
         		
         		success: function(res) {
         			$("#subcat").html(res);
         			breadcrumb();
         		}
         	})	
         }
        
         function change_attribute(id) {
         	$.ajax({
         		url: "<?= base_url($this->data->controller . '/' . $this->data->method . '/ProductAttribute/') ?>" + id,
         		type: "post",
         		success: function(res) { 
         			$(".attribute").append(res); 
         			breadcrumb();
         		}
         	})
         	$.ajax({
         		url: "<?= base_url($this->data->controller . '/' . $this->data->method . '/ExpertAttribute/') ?>" + id,
         		type: "post",
         		success: function(res) { 
         			$(".attribute").append(res); 
         			breadcrumb();
         		}
         	})
         } 
         function change_subbrand(id) {
         	var id = id;
         	var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/subbrand/') ?>" + id;
         	$.ajax({
         		url: url,
         		type: "post",
         		
         		success: function(res) {
         			//   alert(res);
         			$("#subbrand").html(res);
         			breadcrumb();
         		}
         	})
         }
         function change_sizetype(id){
         	$('#sizechart').show();
         	$("#sizechart_table").hide();
         	$("input[name='custom_sizechart']").prop('checked',false);   
         	var url = "<?= base_url($this->data->controller . '/' . $this->data->method . '/ShowSizeChart/') ?>" + id;
         	$.ajax({
         		url: url,
         		type: "post",
         		success: function(res) {
         			$("#sizechart_table").html(res);  
         		}
         	})   
         }
         $("input[name='custom_sizechart']").click(function(){
         	if($(this).is(":checked")){
         		$("#sizechart_table").show(); 
         		}else{
         		$("#sizechart_table").hide();  
         	} 
         })
         
         function breadcrumb() {
         	
         	var category = $("#cat").val();
         	var subcategory = $("#subcat").val();
         	var cosubcategory = $("#cosubcat").val();
         	var brand = $("#pb").val();
         	
         	var catval = $('.optioncat'+category).html();
         	var subcatval = $('.optionsubcat'+subcategory).html();
         	var cosubcatval = $('.optioncosubcat'+cosubcategory).html();
         	var brandval = $('.optionbrand'+brand).html();
         	
         	$("#catbread").html(catval);
         	
         	if(subcategory==null||subcategory==""||subcategory==undefined)	
         	{
         		$("#subcatbread").html('-');
         	}
         	else
         	{
         		$("#subcatbread").html(subcatval);
         	}
         	
         	
         	$("#cobrandbread").html(brandval);
         }
      </script>
   </body>
</html>