<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'Home/Refresh';
$route['web.config'] = 'Home/Refresh';
$route['(:any)/web.config'] = 'Home/Refresh';
$route['(:any)/(:any)/web.config'] = 'Home/Refresh';
$route['(:any)/(:any)/(:any)/web.config'] = 'Home/Refresh';
$route['(:any)/(:any)/(:any)/(:any)/web.config'] = 'Home/Refresh';

$route['translate_uri_dashes'] = FALSE;  
$route['AdminLogin']='Auth/AdminLogin';
$route['VendorLogin']='Auth/VendorLogin';
$route['ExpertLogin']='Auth/ExpertLogin';
// User Login 
$route['Login']='Home/Login';

//Website Route 
$route['Product/(:any)/(:any)/(:any)'] = 'Home/Product';   
$route['Product/(:any)/(:any)'] = 'Home/Product'; 
$route['Designers/(:any)/(:any)'] = 'Home/Product/Designers';   
$route['BestSeller/(:any)/(:any)'] = 'Home/Product/BestSeller';   
$route['ProductDetails/(:any)'] = 'Home/ProductDetails';   
$route['ProductDetails/(:any)/(:any)'] = 'Home/ProductDetails';     
$route['Wishlist'] = 'Home/Wishlist'; 
$route['Compare'] = 'Home/Compare'; 
$route['Cart'] = 'Home/Cart'; 
$route['Profile'] = 'Home/Profile'; 
$route['ShippingAddress'] = 'Home/ShippingAddress'; 
$route['ChangePassword'] = 'Home/ChangePassword'; 
$route['GiftCards'] = 'Home/GiftCards'; 
$route['BecomePartner'] = 'Home/BecomePartner'; 
$route['BeauticianConsultation/(:any)'] = 'Home/BeauticianConsultation'; 
$route['BeauticianConsultation'] = 'Home/BeauticianConsultation';   
$route['WorkWithUs'] = 'Home/WorkWithUs'; 
$route['Blogs'] = 'Home/Blogs'; 
$route['Profile'] = 'Home/Profile'; 
$route['Rewards'] = 'Home/Rewards'; 
$route['Disclaimer'] = 'Home/Disclaimer'; 
$route['OrderTracking'] = 'Home/OrderTracking'; 
$route['TermAndCondition'] = 'Home/TermAndCondition'; 
$route['ShippingPolicy'] = 'Home/ShippingPolicy'; 
$route['CancellationPolicy'] = 'Home/CancellationPolicy'; 
$route['RefundPolicy'] = 'Home/RefundPolicy'; 
$route['ExchangePolicy'] = 'Home/ExchangePolicy'; 
$route['InfringementPolicy'] = 'Home/InfringementPolicy'; 
$route['PrivacyPolicy'] = 'Home/PrivacyPolicy'; 
$route['Feedback'] = 'Home/Feedback'; 
$route['FAQs'] = 'Home/FAQs'; 
$route['ShoppingGuid'] = 'Home/ShoppingGuid'; 
$route['CouponRedemption'] = 'Home/CouponRedemption'; 
$route['PaymentMethod'] = 'Home/PaymentMethod'; 
$route['ChooseYourSize'] = 'Home/ChooseYourSize'; 
$route['GiftWrapping'] = 'Home/GiftWrapping'; 
$route['Unboxing'] = 'Home/Unboxing'; 
$route['AboutUs'] = 'Home/AboutUs'; 
$route['Career'] = 'Home/Career'; 
$route['BecomePartner'] = 'Home/BecomePartner'; 
$route['BecomeSeller'] = 'Home/BecomeSeller'; 
$route['BecomeSeller'] = 'Home/BecomeSeller'; 
$route['Contactus'] = 'Home/Contactus'; 
$route['Press'] = 'Home/Press'; 
$route['Order/(:any)'] = 'Home/Order'; 
$route['OrdersDetails/(:any)/(:any)/(:any)'] = 'Home/OrdersDetails'; 
$route['OrdersDetails/(:any)/(:any)'] = 'Home/OrdersDetails'; 
$route['OrdersDetails/(:any)'] = 'Home/OrdersDetails'; 
$route['TrackPackage/(:any)'] = 'Home/TrackPackage'; 
$route['Review/(:any)/(:any)'] = 'Home/Review'; 


