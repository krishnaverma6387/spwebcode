<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Home2 extends Home_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->getTitleCategory = getTitleCategory();
      $this->needHelp = getDataOrderByID('tbl_web_settings', [], '1');
      $this->webLogo = getDataOrderByID('tbl_logo', [], '1');
      $this->sitepermission = $this->db->get('site_permission')->row(); 
      $this->load->model('Web_model');
    }
    
    public function index()
    {
        // $data["sliders"] = getData('slider',['is_status'=>'true'],'','','','asc');
        $data["sliders"] = $this->Web_model->getSlider(['is_status'=>'true']);
        // $data["getWelcomeStoreProducts"] = Web_model::getWelcomeStoreProducts();
        $componentCondition=[
          'is_status'=>'true',
        ];
        $data["getWelcomeStoreProducts"] = Web_model::getComponentProduct($componentCondition);
        $data["ComponentsList"] = $this->Web_model->getComponents();
        $this->load->view('Home2/index',$data);
    }
    
    public function updateSliderClick(){
      $res=false;
      $id=$this->input->post('id');
      $sliderData=getData('slider',['id'=>$id],$id);
      if(!empty($sliderData)){
       $count= $sliderData['visit_count']+1;
        updateData('slider',['visit_count'=>$count],['id'=>$id]);
      }
     echo $res;
    }
    
    public function index2(){
         // $data["sliders"] = getData('slider',['is_status'=>'true'],'','','','asc');
         $data["sliders"] = $this->Web_model->getSlider(['is_status'=>'true']);
         // $data["getWelcomeStoreProducts"] = Web_model::getWelcomeStoreProducts();
         $componentCondition=[
           'is_status'=>'true',
         ];
         $data["getWelcomeStoreProducts"] = Web_model::getComponentProduct($componentCondition);
         $data["ComponentsList"] = $this->Web_model->getComponents();
      $this->load->view('Home2/index2',$data);
    }

    public function verifyOtp(){
   $this->load->view('Home2/verifyOtp');
 }
    public function loginNumber(){
   $this->load->view('Home2/loginNumber');
 }
    public function loginEmail(){
   $this->load->view('Home2/loginEmail');
 }
    public function randomSearch(){
   $this->load->view('Home2/randomSearch');
 }
    public function wishlist(){
   $this->load->view('Home2/wishlist');
 }
    public function products(){
   $this->load->view('Home2/products');
 }
    public function cart(){
   $this->load->view('Home2/cart');
 }
    public function address(){
   $this->load->view('Home2/address');
 }
    public function payment(){
   $this->load->view('Home2/payment');
 }
    public function orderPlaced(){
   $this->load->view('Home2/orderPlaced');
 }
    public function productDetails(){
   $this->load->view('Home2/productDetails');
 }
    public function productDetails2(){
   $this->load->view('Home2/productDetails2');
 }
    public function pdpImage(){
   $this->load->view('Home2/pdpImage');
 }
    public function overview(){
   $this->load->view('Home2/overview');
 }
    public function profile(){
   $this->load->view('Home2/profile');
 }
    public function profileEdit(){
   $this->load->view('Home2/profileEdit');
 }
 
    public function myOrder(){
   $this->load->view('Home2/myOrder');
 }


 public function order_details(){
  $this->load->view('Home2/order_details');
}



    
}
