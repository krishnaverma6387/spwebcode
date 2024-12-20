<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
<meta name="keywords" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
<meta name="author" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
<title><?= $this->data->appName.' | '.$this->data->title.' | '.$this->data->subTitle;?></title>
<link rel="apple-touch-icon" href="<?=base_url($this->data->appTempletePath);?>images/logo/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="<?=base_url($this->data->appTempletePath);?>images/logo/favicon.png">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?=base_url();?>/assets/application/vendors/css/vendors.min.css">
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/datatable/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/extensions/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/extensions/colReorder.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/extensions/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/datatable/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/tables/extensions/fixedHeader.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/extensions/toastr.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/forms/spinner/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/forms/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/forms/icheck/custom.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/forms/toggle/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/extensions/unslider.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/weather-icons/climacons.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>fonts/meteocons/style.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/charts/morris.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>vendors/css/extensions/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/bootstrap-extended.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/colors.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/components.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/core/menu/menu-types/vertical-menu.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/core/colors/palette-gradient.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/plugins/forms/validation/form-validation.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/plugins/forms/validation/form-validation.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>fonts/simple-line-icons/style.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/pages/timeline.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/pages/login-register.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/plugins/extensions/toastr.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/plugins/forms/checkboxes-radios.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/pages/app-chat.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/bs-stepper.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url($this->data->appTempletePath);?>css/pages/app-email.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" integrity="sha512-/D4S05MnQx/q7V0+15CCVZIeJcV+Z+ejL1ZgkAcXE1KZxTE4cYDvu+Fz+cQO9GopKrDzMNNgGK+dbuqza54jgw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plupload/3.1.5/jquery.plupload.queue/css/jquery.plupload.queue.min.css" integrity="sha512-50UY9VY37/VxML0pGNJb59uufYoNCfrnYb81jx6AswTD5mRhdnXfBeyA6uxOfygxRZqj7jCjDjtIXRmTlOc48w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plupload/3.1.5/jquery.ui.plupload/css/jquery.ui.plupload.min.css" integrity="sha512-5kSSFJmWS26fqHGZl2ZYGaf10cC6hBEIWw/LxBlJ28KaMQtK1NwuAhQlClirbCPz7W5yiJQFhKpeZHWkRSG6BA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link  href="<?=base_url($this->data->appTempletePath);?>css/osahan.css" rel="stylesheet" type="text/css" />
<link  href="<?=base_url($this->data->appTempletePath);?>css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link  href="<?=base_url($this->data->appTempletePath);?>css/owl.theme.css" rel="stylesheet" type="text/css" />

<link  href="<?=base_url($this->data->appTempletePath);?>css/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>	
	.card .card-header .card-img-top	
	{	
	height:190px !important;	
	}
	
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
	}
	
			/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.sorting_1{
  padding:  10px 18px!important;
}
	
	
</style>