<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Home extends Home_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->getHeaderCategory = getHeaderCategory();
    $this->getTitleCategory = getTitleCategory();
    $this->needHelp = getDataOrderByID('tbl_web_settings', [], '1');
    $this->webLogo = getDataOrderByID('tbl_logo', [], '1');
    $this->getBrand = getData('brand',['is_status'=>'true']);
    $this->load->helper('email');
    $this->load->model('Auth_model');
    $this->load->library('App');
    $this->load->library('GoogleLogin');
    $this->load->library('Razorpay');
    $this->roleData = $this->Auth_model->getRole($this->data->role_id);
    $this->roleData_1 = $this->Auth_model->getRole(5);
    $this->termsdata = $this->db->order_by('id', 'DESC')->get('tbl_terms')->row();
    $this->cremdata = $this->db->order_by('id', 'DESC')->get('tbl_couponredemption')->row();
    $this->faqscategory = $this->db->order_by('id', 'DESC')->get('faqs_category')->result();

    // this code for royal club benefits 
    $this->faqscategory1 = $this->db->order_by('id', 'DESC')->where_in('id', array('4', '7'))->get('faqs_category')->result();


    $this->category = $this->db->order_by('position', 'ASC')->limit(4, 0)->get_where('categories', array('is_status' => 'true'))->result();
    $this->subcategory = $this->db->order_by('position', 'ASC')->limit(15, 0)->get_where('sub_category', array('is_status' => 'true'))->result();
    $this->newproducts = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true'))->result();
    $this->corecollection = $this->db->order_by('alert_qty', 'DESC')->get_where('products', array('is_status' => 'true'))->result();

    $this->sitepermission = $this->db->get('site_permission')->row();
    if (!isset($_COOKIE['user_id'])) {
      $this->permission = 'false';
    } else {
      $this->permission = 'true';
      $this->userData = json_decode($_COOKIE['user_id']);
    }

    $this->subscription = 'false';
    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      #check coins validation
      $wallet = $this->db->get_where('user_wallet', array('userid' => $userid))->result();
      if (!empty($wallet)) {
        foreach ($wallet as $each) {
          $startdate = date('d M y', strtotime($each->created_at));
          $enddate = date('d M y', strtotime($startdate . '+' . $each->expire_date . ' days'));
          $currentdate = date('d M y');
          if ($currentdate > $enddate) {
            $this->db->where(['id' => $each->id])->update('user_wallet', array('is_status' => 'true'));
          }
        }
      }


      $subscriber = $this->db->get_where('royal_subscriber', ['userid' => $userid]);
      if ($subscriber->num_rows() > 0) {
        $subscriber = $subscriber->row();
        $plan_expire_date = date('y-m-d', strtotime("+" . $subscriber->plan_duration . " months", strtotime($subscriber->created_at)));
        $current_date = date('y-m-d');
        $diff =  date_diff(date_create($current_date), date_create($plan_expire_date))->format("%R%a");
        if ($diff >= 0) {
          $this->subscription = 'true';
        } else {
          $this->subscription = 'false';
        }
      }
    }

    #Code for genrate unique id
    function generateRandomString($length = 5)
    {
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
    date_default_timezone_set("asia/kolkata");
    $datetime = date("dmy") . date("his") . generateRandomString();

    if (isset($_COOKIE['system_id'])) {
      $this->system_id = $_COOKIE['system_id'];
    } else {
      $cookie_name = "system_id";
      $cookie_value = $datetime;
      $expiry = time() + (60 * 60 * 24 * 30);
      setcookie($cookie_name, $cookie_value, $expiry, "/");
      redirect(base_url());
    }
  }

  public function _remap($method, $params = array())
  {
    if (method_exists($this, $method)) {
      return call_user_func_array(array($this, $method), $params);
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function test()
  {
$this->load->view('Home/Demo2');
    // echo "<pre>";
    // $a=$this->db->query("alter table manage_content add sitemap varchar(255) not null,add robot varchar(255) not null;");    
    // $a=$this->db->query("INSERT INTO royal_subscriber (plan_duration, amount, userid,order_id,payment_status,payment_id,rzp_orderid,created_at,modified_at)
    // VALUES ('3 months', '299', '3','OD_Slick26741673865381','Success','pay_L4omEWd0hioHNS','order_L4olyCYkU7bug','2023-01-16 16:06:21','2023-01-16 16:06:21' );");    
    // $a=$this->db->query("CREATE TABLE `cashback_product` (`id` INT NOT NULL AUTO_INCREMENT , `product_type` VARCHAR(200) NOT NULL , `cashback_id` VARCHAR(50) NOT NULL , `product_id` VARCHAR(50) NOT NULL , `userid` LONGTEXT NOT NULL , `is_status` VARCHAR(50) NOT NULL , `created_at` VARCHAR(100) NOT NULL , `modified_at` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"); 

    // $a=$this->db->where("id",'1')->update('admin',['password'=>'827ccb0eea8a706c4c34a16891f84e7b']);
    // $a=$this->db->where('userid','3')->delete('site_feedback');
    // $a=$this->db->order_by('id','desc')->get('products')->result();     
    // $a=$this->db->get('manage_content')->result();     
    // var_dump($a);

    // var_dump($this->userData);
    // delete_cookie('system_id');     
  }







  // Club Dashboard 
  public function ClubDashboard()
  {
    if ($this->permission == 'true') {
      $this->load->view('Home/ClubDashboard');
    } else {
      redirect(base_url());
    }
  }

  public function clubmemberships()
  {
    if ($this->permission == 'true') {
      $this->load->view('Home/clubmemberships');
    } else {
      redirect(base_url());
    }
  }


  public function appDownload()
  {
    $data['details'] = getDataOrderByID('tbl_app_download', [], '1');
    if(empty($data['details'])){
      redirect(base_url());
    }
    $this->load->view('Home/appDownload',$data);
  }

  public function termsandconditions()
  {
    $this->load->view("Home/termsandconditions");
  }


  public function QuickView()
  {
    if ($this->uri->segment(3) == TRUE) {
      $action = $this->uri->segment(3);
      if ($this->uri->segment(4) == TRUE) {
        $id = $this->uri->segment(4);
        if ($action == 'Individual') {
          $query = $this->db->where('id', $id)->get('product_variant');
          if ($query->num_rows()) {
            $data["list"] = $query->row();
            $data["action"] = "Individual";
            $this->load->view($this->data->controller . '/quickView', $data);
          }
        } elseif ($action == 'Combo') {
          $query = $this->db->where('id', $id)->get('tbl_combo');
          $comboItems = $this->db->order_by('product_id', 'ASC')->get_where('combo_item', array('combo_id' => $id));
          if ($query->num_rows()) {
            $data["list"] = $query->row();
            $data["comboItems"] = $comboItems->result();
            $data["action"] = "Combo";
            $this->load->view($this->data->controller . '/quickView', $data);
          }
        }
      }
    }
  }
  public function SpendingHistory()
  {
    $this->load->view('Home/SpendingHistory');
  }

  public function Ecatalogue()
  {
    $this->load->view('Home/Ecatalogue');
  }

  public function Passbook()
  {
    $this->load->view('Home/Passbook');
  }

  public function PriceDropAlert()
  {
    $this->load->view('Home/PriceDropAlert');
  }

  public function RoyalCustomerBenifits()
  {
    $this->load->view('Home/RoyalCustomerBenifits');
  }


  public function Reviews()
  {
    $this->load->view('Home/Reviews');
  }

  public function SiteMap()
  {
    $this->load->view('Home/SiteMap');
  }


  public function BeauticianConsultation()
  {
    if ($this->uri->segment(2) == true) {
      $action = $this->uri->segment(2);
      if ($action == 'Add') {
        if ($this->permission == 'true') {
          $userid = $this->userData->id;
          if (!empty($this->input->post())) {
            $list = $this->db->get_where('beauty_consultant', ['userid' => $userid, 'cartid' => $this->input->post('cart_id')])->row();
            if (empty($list)) {
              $insertData = [
                'userid' => $userid,
                'cartid' => $this->input->post('cart_id'),
                'product_id' => $this->input->post('product_id'),
                'variant_id' => $this->input->post('variant_id'),
                'name' => $this->input->post('full_name'),
                'email_id' => $this->input->post('email_id'),
                'mobile' => $this->input->post('mobile_number'),
                'schedule_date' => $this->input->post('schedule_date'),
                'schedule_time' => $this->input->post('schedule_time'),
                'schedule_status' => 'pending',
                'is_status' => 'true',
                'created_at' => $this->data->timestamp,
                'modified_at' => $this->data->timestamp,
              ];
              if ($this->db->insert('beauty_consultant', $insertData)) {
                $output['res'] = 'success';
                $output['msg'] = 'Your request has been sent for beauty consultation';
              } else {
                $output['res'] = 'error';
                $output['msg'] = "Your request hasn't been sent for beauty consultation";
              }
            } else {
              $output['res'] = 'success';
              $output['msg'] = 'Your request has been already sent';
            }
          }
        } else {
          $output['res'] = 'error';
          $output['msg'] = 'Please login to consult with beautician';
        }
        echo json_encode([$output]);
      } else {
        $this->load->view('Home/BeauticianConsultation');
      }
    } else {
      if ($this->permission == 'true') {
        $userid = $this->userData->id;
        $data['list'] = $this->db->get_where('beauty_consultant', ['userid' => $userid])->result();
        $this->load->view('Home/BeautyAdvice', $data);
      } else {
        redirect(base_url());
      }
    }
  }

  public function Discount()
  {
    $this->load->view('Home/Discount');
  }

  public function ShareAndEarn()
  {
    if ($this->permission == 'true') {
      $data['refer_reward'] = $this->db->get_where('reward_point_setting')->row();
      if ($this->uri->segment(3) == false) {
        $this->load->view('Home/ShareAndEarn', $data);
      } else {
        $this->load->view('Home/ShareAppAndEarn', $data);
      }
    } else {
      redirect(base_url());
    }
  }

  public function RoyalBenefits()
  {
    if ($this->sitepermission->royal_subscription) {
      $data['royalcard'] = $this->db->get_where('subscription_plan')->result();
      $data['royalinfo'] = $this->db->order_by('id', 'ASC')->limit(3, 0)->get_where('subscription_benefits',)->result();
      $data['royalbenefits'] = $this->db->order_by('id', 'ASC')->limit(50, 3)->get_where('subscription_benefits',)->result();
      if ($this->permission == 'true') {
        $userid = $this->userData->id;
        $subscriber = $this->db->get_where('royal_subscriber', ['userid' => $userid]);
        if ($subscriber->num_rows() > 0) {
          $data['user'] = $this->db->where('id', $userid)->get('tbl_user')->row();
          $data['subscriber'] = $subscriber->row();
          $this->load->view('Home/RoyalAccount', $data);
        } else {
          $this->load->view('Home/RoyalBenefits', $data);
        }
      } else {
        $this->load->view('Home/RoyalBenefits', $data);
      }
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function RoyalTermsConditions()
  {
    $this->load->view('Home/RoyalTermsConditions');
  }

  public function SlickWallet()
  {
    $output['res'] = 'error';
    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      $data['wallet'] = $this->db->get_where('user_wallet', array('userid' => $userid, 'is_status' => 'true'))->result();
      $this->load->view('Home/SlickWallet', $data);
    } else {
      $output['msg'] = 'Login to continue';
      redirect(base_url($this->data->controller . '/Login'));
    }
  }

  public function CreditDetails()
  {
    $this->load->view('Home/CreditDetails');
  }

  public function WalletBonus()
  {
    $output['res'] = 'error';
    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      $data['wallet'] = $this->db->get_where('user_wallet', array('userid' => $userid, 'is_status' => 'true'))->result();
      $data['Allwallet'] = $this->db->get_where('user_wallet', array('userid' => $userid))->result();
      $this->load->view('Home/WalletBonus', $data);
    } else {
      $output['msg'] = 'Login to continue';
      redirect(base_url($this->data->controller . '/Login'));
    }
  }

  public function demo()
  {
    $this->load->view("Home/demo");
  }

  public function SlickCoupon()
  {
    $this->load->view('Home/SlickCoupon');
  }

  public function MyNotification()
  {
    $this->load->view('Home/MyNotification');
  }

  public function SaveYourCard()
  {
    $this->load->view('Home/SaveYourCard');
  }

  public function ProductFeedback()
  {
    $this->load->view('Home/ProductFeedback');
  }

  public function Review()
  {
    $id = $this->uri->segment(3);
    $cartDetails = $this->db->get_where('tbl_cart', ['id' => $id])->row();
    if (!empty($cartDetails)) {
      if ($cartDetails->is_combo == '') {

        $query = $this->db->get_where('products', array('id' => $cartDetails->product_id));
        $query1 = $this->db->get_where('product_variant', array('id' => $cartDetails->variant_id));
        if ($query->num_rows() and $query1->num_rows()) {
          $data["pdata"] = $query->row();
          $data["vdata"] = $query1->row();
          $data["ptype"] = 'Ind';
          $this->load->view('Home/ProductReview', $data);
        } else {
          redirect(base_url($this->data->controller . '/Order'));
        }
      }
    } else {
      redirect(base_url($this->data->controller . '/Order'));
    }
  }

  public function TrackPackage()
  {
    if (($this->userData->id) and ($this->uri->segment(3) == true)) {
      $userid = $this->userData->id;
      $cartid = $this->uri->segment(3);
      $data['item'] = $this->db->get_where('tbl_cart', ['userid' => $userid, 'id' => $cartid])->row();
      if (!empty($data['item'])) {
        $this->load->view('Home/TrackPackage', $data);
      } else {
        $this->session->set_flashdata(['res' => 'error', 'msg' => 'Invalid Order Details']);
        redirect(base_url('Home/Order'));
      }
    } else {
      redirect(base_url('Login'));
    }
  }

  public function OrderHistory()
  {
    $this->load->view('Home/OrderHistory');
  }

  public function QnaResult()
  {
    $this->load->view('Home/QnaResult');
  }

  public function YourAccount()
  {
    if ($this->permission == 'true') {
      $this->load->view('Home/YourAccount');
    } else {
      redirect(base_url());
    }
  }
  public function YourAddress()
  {
    $this->load->view('Home/YourAddress');
  }

  public function LoginSecurity()
  {
    $this->load->view('Home/LoginSecurity');
  }

  public function ViewList()
  {
    $this->load->view('Home/ViewList');
  }

  public function Payment()
  {
    $userid = $this->userData->id;
    $data['addresslist'] = $this->db->get_where('tbl_address', array('userid' => $userid, 'is_status' => 'true'))->result();
    $data['cartlist'] = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false'))->result();
    $data['list'] = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false'))->result();
    $this->load->view("Home/Payment", $data);
  }



  public function index()
  { 
    if ($this->sitepermission->home) {
      $output['res'] = "error";
      $output['msg'] = "error";

      $querynewsletter = $this->db->order_by("id", "DESC")->get_where('newsletter_content', array('is_status' => 'true'));
      $querypopup = $this->db->order_by("id", "DESC")->get_where('corner_popup', array('is_status' => 'true'));
      $prebook = $this->db->order_by("id", "DESC")->get_where('products', array('is_status' => 'true', 'is_complimentary' => 'false', 'prebook_status' => 'true', 'availability' => 'true'));
      $data["newsletterlist"] = $querynewsletter->row();
      $data["popuplist"] = $querypopup->row();
      $data["prebooklist"] = $prebook->result();
      $data["sliders"] = getData('slider',['is_status'=>'true'],'','','','asc');

      if ($this->uri->segment(3) == true) {
        $action = $this->uri->segment(3);
        if ($this->uri->segment(4) == true) {
          $id = $this->uri->segment(4);

          if ($action == 'Prebook') {
            if ($this->permission == 'true') {

              $query = $this->db->get_where('products', array('id' => $id, 'prebook_status' => 'true'));
              if ($query->num_rows()) {
                $product = $query->row();

                $userid = $this->userData->id;
                $queryuser = $this->db->where('id', $userid)->get('tbl_user');
                if ($queryuser->num_rows()) {
                  $userdata = $queryuser->row();

                  $orderid = "OD_Slick" . rand(1000, 9999) . time();
                  $rzp_orderid = $this->razorpay->getRazorpayOrderID($orderid, $product->prebook_amt);
                  $this->data->order_id = $orderid;
                  $data_arr = array(
                    "name" => $userdata->name,
                    "email" => $userdata->mobile,
                    "mobile" => $userdata->email,
                    "amount" => $product->prebook_amt,
                    "product_id" => $product->id,
                    "userid" => $userdata->id,
                    "orderid" => $orderid,
                    "rzp_orderid" => $rzp_orderid,
                    "rzp_paymentid" => 'pending',
                    "PaymentStatus" => "failed",
                    "is_status" => 'true',
                    "created_at" => $this->data->timestamp,
                    "modified_at" => $this->data->timestamp
                  );

                  if ($this->db->get_where('tbl_prebook', array('userid' => $userdata->id, 'product_id' => $product->id, 'PaymentStatus' => 'success'))->num_rows() > 0) {
                    $output['msg'] = 'You Already Booked This Item';
                  } else {
                    $rzpOrderData = $this->razorpay->getRazorpayOrder($rzp_orderid);
                    if ($rzpOrderData) {
                      $data['baseUrl'] = base_url();
                      $data['rzp_api_key'] = $this->razorpay->rzp_api_key;
                      $data['rzp_api_secret'] = $this->razorpay->rzp_api_secret;
                      $data['rzpAmount'] = $rzpOrderData->amount;
                      $data['rzpOrderId'] = $rzpOrderData->id;
                      $data['enrollData'] = (object) $data_arr;
                      $data['product'] = $product->name;
                      $data['description'] = "Payment For " . $product->name . " at SlickPattern";
                      $data['logo'] = base_url('public/images/logo/logo.png');

                      $output['res'] = 'pay';
                      $output['msg'] = 'Please Pay';
                      $output['data'] = $data;
                    } else {
                      $output['msg'] = 'Invalid Order.';
                    }
                  }
                } else {
                  $output['res'] = 'error';
                  $output['msg'] = 'Inavlid User';
                }
              } else {
                $output['res'] = 'error';
                $output['msg'] = 'Product Not Found';
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Please Login.';
            }
            echo json_encode([$output]);
          } else {
            redirect(base_url());
          }
        } else {
          if ($action == 'Add') {
            if (!empty($this->input->post())) {
              $this->form_validation->set_rules('email', 'Email', 'required|trim');
              if ($this->form_validation->run() == FALSE) {
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
              } else {
                if ($this->db->get_where('tbl_newsletter', array('email' => $this->input->post('email')))->num_rows() > 0) {
                  $output['res'] = 'error';
                  $output['msg'] = "You're Already Subscribed";
                } else {
                  $insertData = [
                    'email' => $this->input->post('email'),
                    'is_status' => 'true',
                    'created_at' => $this->data->timestamp,
                    'modified_at' => $this->data->timestamp
                  ];
                  $insertData = $this->security->xss_clean($insertData);
                  if ($this->db->insert('tbl_newsletter', $insertData)) {
                    $output['res'] = 'success';
                    $output['msg'] = 'Data Added Successfully.';
                  } else {
                    $output['msg'] = 'Something went wrong in Data Saving.';
                  }
                }
              }
            }
            echo json_encode([$output]);
          }
        }
      } else {
        $this->load->view("Home/Index", $data);
      }
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function Product()
  {
    $data = array();
    $action = $this->uri->segment(1);

    if ($this->uri->segment(1) == true) {
      if ($action == 'Designers') {
        $find = array("_", "-", "--");
        $replace = array(" ", "'", "&");
        $name = str_replace($find, $replace, $this->uri->segment(2));
        $catid = $this->uri->segment(3);
        if ($this->uri->segment(2) == true and $this->uri->segment(3) == true) {
          $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'name' => $name, 'category' => $catid))->result();
        } else {
          redirect(base_url());
        }
      } else if ($action == 'BestSeller') {
        $vendor = $this->uri->segment(2);
        $catid = $this->uri->segment(3);
        if ($this->uri->segment(2) == true and $this->uri->segment(3) == true) {
          $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'vendor_id' => $vendor, 'category' => $catid))->result();
        } else {
          redirect(base_url());
        }
      } else if ($action == 'Product') {

        $replace = array('!', '*', "'", "(", ")", ";", ":", "@", "&", " & ", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]", " ");;
        $find = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '_', '--', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D', "-");;
        if ($this->uri->segment(2) == true and $this->uri->segment(3) == true and $this->uri->segment(4) == true) {
          $cat = str_replace($find, $replace, $this->uri->segment(2));
          $subcat = str_replace($find, $replace, $this->uri->segment(3));
          $cosubcat = str_replace($find, $replace, $this->uri->segment(4));
          $category = $this->db->get_where('categories', array('name' => $cat))->row();
          $subcategory = $this->db->get_where('sub_category', array('name' => $subcat))->row();
          $cosubcategory = $this->db->get_where('co_subcategory', array('name' => $cosubcat))->row();
          $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'category' => $category->id, 'sub_category' => $subcategory->id, 'co_subcategory' => $cosubcategory->id))->result();
        } elseif ($this->uri->segment(2) == true) {
          $action = $this->uri->segment(2);

          if ($action == 'CS') {
            $cosubcat = str_replace($find, $replace, $this->uri->segment(3));
            $cosubcategory = $this->db->get_where('co_subcategory', array('name' => $cosubcat))->row();
            $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'co_subcategory' => $cosubcategory->id))->result();
          } elseif ($action == 'S') {
            $subcat = str_replace($find, $replace, $this->uri->segment(3));
            $subcategory = $this->db->get_where('sub_category', array('name' => $subcat))->row();
            $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'sub_category' => $subcategory->id))->result();
          } elseif ($action == 'C') {
            $cat = str_replace($find, $replace, $this->uri->segment(3));
            $category = $this->db->get_where('categories', array('name' => $cat))->row();
            $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true', 'category' => $category->id))->result();
          } else {
            redirect(base_url());
          }
        } else {
          redirect(base_url());
        }
      }
    } else {
      redirect(base_url());
    }
    $this->load->view('Home/productList', $data);
  }


  public function ComboProduct()
  {
    if ($this->sitepermission->look_product) {
      $this->load->view('Home/ProductListCombo');
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function Individual()
  {
    $data['product'] = $this->db->order_by('id', 'DESC')->get_where('products', array('is_status' => 'true'))->result();
    $this->load->view('Home/productList', $data);
  }

  public function productFilter()
  {
    if (isset($_POST["action"])) {
      $query = "SELECT * FROM products where is_status='true'";
      $where = "";
      if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $where .= "AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'";
      }
      if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $where .= "AND brand_id IN('" . $brand_filter . "')";
      }
      if (isset($_POST["category"])) {
        $category_filter = implode("','", $_POST["category"]);
        $where = "AND category IN ('" . $category_filter . "')";
      }
      if (isset($_POST["color"])) {
        $color_filter = implode(",", $_POST["color"]);
        $where = "AND product_variant.color IN('" . $color_filter . "')";
      }
      if (isset($_POST["size"])) {
        $size_filter = implode(",", $_POST["size"]);
        $where = "AND product_variant.size like '" . $size_filter . "%'";
      }
      if (isset($_POST["sortby"])) {
        $sortby = "order by ";

        $sortby_filter = $_POST["sortby"];

        if ($sortby_filter == 'popularity') {
          $sortby .= "id desc";
        }
        if ($sortby_filter == 'priceSortInv') {
          $sortby .= "reg_sell_price desc";
        }
        if ($sortby_filter == 'priceSort') {
          $sortby .= "reg_sell_price asc";
        }
        if ($sortby_filter == 'newArrivals') {
          $sortby .= "id desc";
        }
        if ($sortby_filter == 'bestSeller') {
          $sortby .= "id desc";
        }
        if ($sortby == 'discountSortInv') {
          $sortby .= "discount desc";
        }
        if ($sortby_filter == 'shipTime') {
          $sortby .= "discount desc";
        }
      }

      if (!empty($where)) {
        $query = $query . $where;
      }
      if (!empty($sortby)) {
        $query = $query . $sortby;
      }

      $data['productDetails'] = $this->db->query($query)->result();
      $this->load->view("Home/productFilter", $data);
    }
  }

  public function Compare()
  {
    $this->load->view("Home/Compare");
  }
  public function Wishlist()
  {

    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      $data['list'] = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true'")->get('tbl_wishlist')->result();
      $data['listInd'] = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true' AND is_combo=''")->get('tbl_wishlist')->result();
      $data['listCombo'] = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true' AND is_combo='true'")->get('tbl_wishlist')->result();
      $data['cartdata'] = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='false'")->get('tbl_cart')->result();
    } else {
      $data['list'] = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'is_status' => 'true'))->result();
      $data['listInd'] = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'is_status' => 'true', 'is_combo' => ''))->result();
      $data['listCombo'] = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'is_status' => 'true', 'is_combo' => 'true'))->result();
      $data['cartdata'] = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false',))->result();
    }
    $this->load->view("Home/Wishlist", $data);
  }


  public function ProductDetails()
  {
    if ($this->uri->segment(3) == true) {
      if ($this->uri->segment(4) == true) {
        $action = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        $used_limit = $this->db->get('manage_content')->row();
        if ($action == "AddToWishlist") {
          $query = $this->db->get_where('product_variant', array('id' => $id));
          if ($query->num_rows()) {
            $product = $query->row();

            #Add to cart for login user
            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $chklist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND variant_id='$id'")->get('tbl_wishlist');
              $totalWishlist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true'")->get('tbl_wishlist')->num_rows();
            } else {
              $userid = "";
              $chklist = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'variant_id' => $id));
              $totalWishlist = $this->db->where("system_id='$this->system_id' AND is_status='true'")->get('tbl_wishlist')->num_rows();
            }

            if ($totalWishlist > $used_limit->wishlist_limit) {
              $output['res'] = 'error';
              $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to wishlist';
            } else {
              if ($chklist->num_rows() > 0) {
                $output['res'] = 'error';
                $output['msg'] = 'Already Added In Wishlist';
              } else {
                $insertData = [
                  'userid' => $userid,
                  'system_id' => $this->system_id,
                  'product_id' => $product->product_id,
                  'variant_id' => $id,
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];
                $insertData = $this->security->xss_clean($insertData);
                if ($this->db->insert('tbl_wishlist', $insertData)) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Product Wishlisted.';
                } else {
                  $output['msg'] = 'Something went wrong in Data Saving.';
                }
              }
            }
          } else {
            $output['res'] = 'error';
            $output['msg'] = 'Product Not Found';
          }

          echo json_encode([$output]);
        } else if ($action == "AddToComboWishlist") {

          $query = $this->db->get_where('tbl_combo', array('id' => $id));
          if ($query->num_rows()) {
            $product = $query->row();

            #Add to cart for login user
            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $chklist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND combo_id='$id'")->get('tbl_wishlist');
              $totalWishlist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true'")->get('tbl_wishlist')->num_rows();
            } else {
              $userid = "";
              $chklist = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'combo_id' => $id));
              $totalWishlist = $this->db->where("system_id='$this->system_id' AND is_status='true'")->get('tbl_wishlist')->num_rows();
            }

            if ($totalWishlist > $used_limit->wishlist_limit) {
              $output['res'] = 'error';
              $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to wishlist';
            } else {

              if ($chklist->num_rows() > 0) {
                $output['res'] = 'error';
                $output['msg'] = 'Already Added In Wishlist';
              } else {
                $insertData = [
                  'userid' => $userid,
                  'system_id' => $this->system_id,
                  'combo_id' => $id,
                  'product_id' => '',
                  'is_status' => 'true',
                  'is_combo' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];
                $insertData = $this->security->xss_clean($insertData);
                if ($this->db->insert('tbl_wishlist', $insertData)) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Product Wishlisted.';
                } else {
                  $output['msg'] = 'Something went wrong in Data Saving.';
                }
              }
            }
          } else {
            $output['res'] = 'error';
            $output['msg'] = 'Product Not Found';
          }

          echo json_encode([$output]);
        } else if ($action == "WriteReview") {
          $id = $this->uri->segment(4);
          $producrType = $this->uri->segment(5);
          if ($producrType == 'Ind') {

            $query = $this->db->get_where('products', array('id' => $id));
            if ($query->num_rows()) {
              $data["pdata"] = $query->row();
              $data["ptype"] = $producrType;
              $data["action"] = "WriteReview";
              $this->load->view($this->data->controller . '/UpdateData', $data);
            } else {
              redirect(base_url($this->data->controller . '/' . $this->data->method));
            }
          }
        } else if ($action == "ViewCoupon") {
          $id = $this->uri->segment(4);

          $query = $this->db->get_where('tbl_coupon', array('id' => $id));
          if ($query->num_rows()) {
            $data["coupon"] = $query->row();
            $data["action"] = "ViewCoupon";
            $this->load->view($this->data->controller . '/UpdateData', $data);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } elseif ($action == "ViewBeautyTips") {
          $id = $this->uri->segment(4);

          $query = $this->db->get_where('tbl_beautytips', array('id' => $id));
          if ($query->num_rows() > 0) {
            $data["beautytips"] = $query->row();
            $data["action"] = "ViewBeautyTips";
            $this->load->view($this->data->controller . '/UpdateData', $data);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } else {
          $id = $this->uri->segment(3);
          $variantid = $this->uri->segment(4);
          $query = $this->db->get_where('products', array('id' => $id));
          if ($query->num_rows() > 0) {
            $product = $query->row();
            $variants = $this->db->order_by('size', 'ASC')->get_where('product_variant', array('id' => $variantid, 'product_id' => $id, 'is_status' => 'true'))->row();
            $AllVariants = $this->db->order_by('size', 'ASC')->get_where('product_variant', array('product_id' => $id, 'is_status' => 'true'))->result();
            $videos = $this->db->order_by('id', 'DESC')->get_where('product_video', array('product_id' => $id))->result();
            $reward = $this->db->order_by('id', 'DESC')->get_where('reward_point_setting', array('is_status' => 'true'))->row();

            $data["videos"] = $videos;
            $data["variants"] = $variants;
            $data["AllVariants"] = $AllVariants;
            $data["list"] = $product;
            $data["reward"] = $reward;
            $this->load->view($this->data->controller . '/ProductDetails', $data);
          } else {
            redirect(base_url());
          }
        }
      } else {
        redirect(base_url());
      }
    } else {
      redirect(base_url());
    }
  }


  public function ProductComboDetails()
  {
    if ($this->sitepermission->look_product) {
      if ($this->uri->segment(3) == true) {
        if ($this->uri->segment(4) == true) {
          $action = $this->uri->segment(3);
          $id = $this->uri->segment(4);
          $used_limit = $this->db->get('manage_content')->row();
          if ($action == "AddToWishlist") {
            $query = $this->db->get_where('tbl_combo', array('id' => $id, 'is_status' => 'true'));
            if ($query->num_rows()) {
              $product = $query->row();

              #Add to cart for login user
              if ($this->permission == 'true') {
                $userid = $this->userData->id;
                $chklist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND combo_id='$id'")->get('tbl_wishlist');
                $totalWishlist = $this->db->where("(userid='$userid' OR system_id='$this->system_id') AND is_status='true'")->get('tbl_wishlist')->num_rows();
              } else {
                $userid = "";
                $chklist = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'combo_id' => $id));
                $totalWishlist = $this->db->where("system_id='$this->system_id' AND is_status='true'")->get('tbl_wishlist')->num_rows();
              }

              if ($totalWishlist > $used_limit->wishlist_limit) {
                $output['res'] = 'error';
                $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to wishlist';
              } else {

                if ($chklist->num_rows() > 0) {
                  $output['res'] = 'error';
                  $output['msg'] = 'Already Added In Wishlist';
                } else {
                  $insertData = [
                    'userid' => $userid,
                    'system_id' => $this->system_id,
                    'combo_id' => $id,
                    'product_id' => '',
                    'is_status' => 'true',
                    'is_combo' => 'true',
                    'created_at' => $this->data->timestamp,
                    'modified_at' => $this->data->timestamp
                  ];
                  $insertData = $this->security->xss_clean($insertData);
                  if ($this->db->insert('tbl_wishlist', $insertData)) {
                    $output['res'] = 'success';
                    $output['msg'] = 'Product Wishlisted.';
                  } else {
                    $output['msg'] = 'Something went wrong in Data Saving.';
                  }
                }
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Product Not Found';
            }
            echo json_encode([$output]);
          } else if ($action == "WriteReview") {
            $id = $this->uri->segment(4);
            $producrType = $this->uri->segment(5);
            if ($producrType == 'Combo') {
              $query = $this->db->get_where('tbl_combo', array('id' => $id));
              if ($query->num_rows()) {
                $data["pdata"] = $query->row();
                $data["ptype"] = $producrType;
                $data["action"] = "WriteReview";
                $this->load->view($this->data->controller . '/UpdateData', $data);
              } else {
                redirect(base_url($this->data->controller . '/' . $this->data->method));
              }
            }
          }
        } else {
          $id = $this->uri->segment(3);

          $query = $this->db->get_where('tbl_combo', array('id' => $id, 'is_status' => 'true'));
          if ($query->num_rows() > 0) {
            $comboProduct = $query->row();
            $comboItems = $this->db->order_by('product_id', 'ASC')->get_where('combo_item', array('combo_id' => $id))->result();


            $data["list"] = $comboProduct;
            $data["comboItems"] = $comboItems;

            $this->load->view($this->data->controller . '/ProductComboDetails', $data);
          } else {
            redirect(base_url());
          }
        }
      } else {
        redirect(base_url());
      }
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function Prebooking()
  {
    if ($this->sitepermission->prebooking) {
      $output['res'] = 'error';
      if ($this->uri->segment(3) == true) {
        $action = $this->uri->segment(3);
        if ($this->uri->segment(4) == true) {
          if ($this->uri->segment(5) == true) {
            if ($action == 'PaymentResponse') {
              $data_arr = $this->input->post('data');
              $cart_details = $this->input->post('cart_details');
              $apply_status = $this->input->post('apply_status');
              $apply_type = $this->input->post('apply_type');
              $apply_id = $this->input->post('apply_id');
              $userid = $data_arr['userid'];
              $output['res'] = 'error';
              $table = 'tbl_order';

              if (!empty($this->uri->segment(3)) and !empty($this->uri->segment(4))) {
                $rzporderid = $this->uri->segment(4);
                $paymentid = $this->uri->segment(5);
                $rzp_order = (array) $this->razorpay->getRazorpayOrder($rzporderid);
                $rzp_order_payment = (array) $this->razorpay->getRazorpayOrderPayment($rzporderid);
                $rzp_order = array_values($rzp_order)[0];
                $rzp_order_payment = array_values((array)array_values($rzp_order_payment)[0]['items'][0])[0];
                unset($rzp_order['notes']);
                unset($rzp_order_payment['notes']);
                unset($rzp_order_payment['acquirer_data']);

                $responsedata = base64_encode(json_encode($rzp_order_payment));
                if ($rzp_order) {
                  if ($rzp_order['status'] == 'paid') {
                    if ($this->db->insert('tbl_order', $data_arr)) {
                      $orderid = $rzp_order['receipt'];
                      $orderAmount = $rzp_order['amount_paid'] / 100; // ;To Get Amount In Rupees

                      if ($this->db->where(array("orderid" => $orderid))->update('tbl_order', array("payment_response" => $responsedata, "modified_at" => $this->data->timestamp))) {

                        #Genrate Payment links for due amount
                        $amount = $data_arr['due_amount'];
                        $user = $this->db->get_where('tbl_user', ['id' => $userid])->row();
                        $userdata = json_encode(['name' => $user->name, 'email' => $user->email, 'contact' => $user->mobile]);
                        $expired_time = strtotime(date('d-m-Y', strtotime("+7days")));
                        $payment_links = $this->razorpay->sendPaymentLinks($amount, $orderid, $userdata, $expired_time);

                        $this->db->where(array("orderid" => $orderid))->update('tbl_order', array("PaymentStatus" => "Success", "rzp_paymentid" => $paymentid, "payment_links" => $payment_links));
                        $this->db->where(array("is_status" => "false", 'availability' => '', 'userid' => $userid))->update('tbl_cart', array("is_status" => "true", "orderid" => $orderid));

                        #update cart price details
                        if (!empty($cart_details)) {
                          $this->db->update_batch('tbl_cart', $cart_details, 'id');
                        }

                        #Size Inventory Management For Individual
                        $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => '', 'availability' => '', 'order_type' => 'prebooking'))->result();
                        if (!empty($IndCart)) {
                          foreach ($IndCart as $each) {
                            $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                            $id = $this->userData->id;
                            #Size Inventory Management
                            if ($each->size != 'NA') {
                              $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                              $json_sizestock = json_decode($variant->size);
                              $arr = array();
                              $count = 0;
                              foreach ($json_sizestock as $eachSize) {
                                foreach ($eachSize as $size => $size_stock) {
                                  if ($size == $each->size) {
                                    $size_count = ($size_stock - $each->qty);
                                    array_push($arr, array($size => $size_count));
                                    if ($size_count < 1) {
                                      $count++;
                                    }
                                  } else {
                                    array_push($arr, array($size => $size_stock));
                                    if ($size_stock < 1) {
                                      $count++;
                                    }
                                  }
                                }
                              }

                              #update status and stock quantity of product variant 
                              if (count($json_sizestock) == $count) {
                                $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                # update status combo product 
                                $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                                if (!empty($ComboStock)) {
                                  foreach ($ComboStock as $stock) {
                                    $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                  }
                                }
                              } else {
                                $this->db->where('id', $each->variant_id)->update('product_variant', array('size' => json_encode($arr)));
                              }

                              #update stock quantity and status of purchasing product 
                              $variantStock = $this->db->get_where('product_variant', ['product_id' => $each->product_id, 'is_status' => 'true'])->num_rows();
                              if ($variantStock < 1) {
                                $this->db->where('id', $each->product_id)->update('products', array('is_status' => 'false'));
                              }
                            } else {
                              // $updatedStock=($product->stock-$each->qty);  
                              // if($updatedStock<1){
                              // $this->db->where('id',$each->product_id)->update('products',array('stock'=>$updatedStock,'is_status'=>'false'));
                              // }
                              // else{ 
                              // $this->db->where('id',$each->product_id)->update('products',array('stock'=>$updatedStock));  
                              // }  
                            }
                          }
                        }

                        #Size Inventory Management For Combo
                        $id = $this->userData->id;
                        $ComboCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => 'true', 'availability' => ''))->result();
                        if (!empty($ComboCart)) {
                          foreach ($ComboCart as $each) {
                            $items = explode(",", $each->product_id);
                            $itemsVariant = explode(",", $each->variant_id);
                            $sizes = explode(",", $each->size);
                            if (!empty($items) and !empty($itemsVariant)) {
                              for ($i = 0; $i < count($items); $i++) {
                                $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                                $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                                $json_sizestock = json_decode($variants->size);
                                if ($sizes[$i] != 'NA') {
                                  $arr = array();
                                  $count = 0;
                                  foreach ($json_sizestock as $eachSize) {
                                    foreach ($eachSize as $size => $size_stock) {
                                      if ($size == $sizes[$i]) {
                                        $size_count = ($size_stock - $each->qty);
                                        array_push($arr, array($size => $size_count));
                                        if ($size_count < 1) {
                                          $count++;
                                        }
                                      } else {
                                        array_push($arr, array($size => $size_stock));
                                        if ($size_stock < 1) {
                                          $count++;
                                        }
                                      }
                                    }
                                  }
                                  #update status and stock quantity of product variant 
                                  if (count($json_sizestock) == $count) {
                                    $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                    # update status combo product 
                                    $ComboStock = $this->db->get_where('combo_item', ['product_id' => $items[$i], 'variant_id' => $itemsVariant[$i], 'is_status' => 'true'])->result();
                                    if (!empty($ComboStock)) {
                                      foreach ($ComboStock as $stock) {
                                        $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                      }
                                    }
                                  } else {
                                    $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('size' => json_encode($arr)));
                                  }

                                  #update stock quantity and status of purchasing product 
                                  $variantStock = $this->db->get_where('product_variant', ['product_id' => $items[$i], 'is_status' => 'true'])->num_rows();
                                  if ($variantStock < 1) {
                                    $this->db->where('id', $items[$i])->update('products', array('is_status' => 'false'));
                                  }
                                } else {
                                  // $updatedStock=($product->stock-$each->qty);  
                                  // if($updatedStock<1){
                                  // $this->db->where('id',$items[$i])->update('products',array('stock'=>$updatedStock,'is_status'=>'false'));
                                  // }
                                  // else{ 
                                  // $this->db->where('id',$items[$i])->update('products',array('stock'=>$updatedStock));  
                                  // } 
                                }
                              }
                            }
                          }
                        }


                        $output['res'] = 'success';
                        $output['msg'] = 'Order Successfully Done!';
                        $output['redirect'] = base_url('Home/Order');
                      }
                    }
                  } else {
                    $output['res'] = 'error';
                    $output['msg'] = 'Payment Failed!';
                  }
                } else {
                  $output['res'] = 'error';
                  $output['msg'] = 'Invalid Order';
                }
                echo json_encode([$output]);
              } else {
                redirect(base_url());
              }
            }
          } else {
            $id = $this->uri->segment(4);
            $used_limit = $this->db->get('manage_content')->row();

            $id = $this->uri->segment(3);
            $variantid = $this->uri->segment(4);
            $query = $this->db->get_where('products', array('id' => $id));
            if ($query->num_rows() > 0) {
              $product = $query->row();
              $variants = $this->db->order_by('size', 'ASC')->get_where('product_variant', array('id' => $variantid, 'product_id' => $id, 'is_status' => 'true'))->row();
              $AllVariants = $this->db->order_by('size', 'ASC')->get_where('product_variant', array('product_id' => $id, 'is_status' => 'true'))->result();
              $videos = $this->db->order_by('id', 'DESC')->get_where('product_video', array('product_id' => $id))->result();
              $reward = $this->db->order_by('id', 'DESC')->get_where('reward_point_setting', array('is_status' => 'true'))->row();

              $data["videos"] = $videos;
              $data["variants"] = $variants;
              $data["AllVariants"] = $AllVariants;
              $data["list"] = $product;
              $data["reward"] = $reward;
              $this->load->view($this->data->controller . '/PrebookingDetails', $data);
            } else {
              redirect(base_url());
            }
          }
        } else {
          $used_limit = $this->db->get_where('manage_content')->row();
          if ($action == 'Add') {
            if ($this->permission == 'true') {
              if (!empty($this->input->post())) {
                $this->form_validation->set_rules('productid', 'Product', 'required|trim|numeric');
                $this->form_validation->set_rules('variantid', 'Variant', 'required|trim');
                $this->form_validation->set_rules('color', 'Color', 'required|trim');
                $this->form_validation->set_rules('size', 'Size', 'required|trim');
                $this->form_validation->set_rules('address', 'address', 'required|trim');

                if ($this->form_validation->run() == FALSE) {
                  $msg = explode('</p>', validation_errors());
                  $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                } else {
                  $query = $this->db->get_where('products', array('id' => $this->input->post('productid')));
                  if ($query->num_rows()) {
                    $product = $query->row();

                    $variant = $this->db->get_where('product_variant', array('id' => $this->input->post('variantid'), 'product_id' => $product->id));
                    if ($variant->num_rows() > 0) {
                      $stock_count = 0;
                      $variant = $variant->row();
                      #Check Stock of individual product
                      if ($this->input->post('size') != 'NA') {
                        $json_sizestock = json_decode($variant->size);
                        $arr = array();
                        foreach ($json_sizestock as $eachSize) {
                          foreach ($eachSize as $size => $size_stock) {
                            if ($size == $this->input->post('size') and $size_stock < 1) {
                              $stock_count++;
                            }
                          }
                        }
                      } else {

                        if ($product->stock < 1) {
                          $stock_count++;
                        }
                      }

                      if ($stock_count > 0) {
                        $output['res'] = 'error';
                        $output['msg'] = 'Product Out of Stock!';
                      } else {

                        #Add to cart for login user
                        if ($this->permission == 'true') {
                          $userid = $this->userData->id;
                          $subscription = $this->subscription;
                          $cart = $this->db->get_where('tbl_cart', array('variant_id' => $this->input->post('variantid'), 'product_id' => $product->id, 'size' => $this->input->post('size'), 'color' => $this->input->post('color'), 'is_status' => 'true', 'userid' => $userid, 'order_type' => 'prebooking'));
                          $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND userid='$userid'")->num_rows();
                          if ($totalCart > $used_limit->cart_limit) {
                            $output['res'] = 'error';
                            $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                          } else {
                            if ($cart->num_rows() > 0) {
                              $output['res'] = 'success';
                              $output['msg'] = 'Already Prebooked';
                            } else {
                              if ($product->gift_wrap == 'true') {
                                $gift_wrap = 'true';
                              } else {
                                $gift_wrap = 'false';
                              }

                              $insertData = [
                                'order_type' => 'prebooking',
                                'userid' => $userid,
                                'system_id' => $this->system_id,
                                'product_id' => $product->id,
                                'variant_id ' => $this->input->post('variantid'),
                                'size' => $this->input->post('size'),
                                'color' => $this->input->post('color'),
                                'qty' => '1',
                                'is_status' => 'false',
                                'is_giftwrap' => $gift_wrap,
                                'order_status' => 'pending',
                                'created_at' => $this->data->timestamp,
                                'modified_at' => $this->data->timestamp
                              ];
                              $insertData = $this->security->xss_clean($insertData);
                              if ($this->db->insert('tbl_cart', $insertData)) {

                                $id = $this->db->insert_id();
                                $listInd = $this->db->get_where('tbl_cart', ['userid' => $userid, 'id' => $id])->result();

                                $cart_details = [];
                                #Fetch total Individual product price behalf of normol and royal user
                                $totalIndividualPrice = 0;
                                $totalIndividualClubCash = 0;
                                $totalIndividualNormolPrice = 0;
                                $totalIndividualMrp = 0;
                                $totalPrebookPrice = 0;

                                if (!empty($listInd)) {
                                  foreach ($listInd as $each) {
                                    $product = $this->db->get_where('products', array('id' => $each->product_id, 'is_status' => 'true'));
                                    if ($product->num_rows() > 0) {
                                      $product = $product->row();
                                      $icons = explode(',', $product->image1);
                                      $id = $this->userData->id;
                                      $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id, 'is_status' => 'true'));
                                      if ($variant->num_rows() > 0) {
                                        $variant = $variant->row();
                                        $cartprice = $this->db->get_where('products', array('id' => $each->product_id))->row();


                                        if ($subscription == 'true') {
                                          $price = (int)$cartprice->royal_amt;
                                        } else {
                                          $price = (int)$cartprice->reg_sell_price;
                                        }

                                        $totalMrp = (int)$cartprice->mrp * $each->qty;
                                        $total = (int)$price * $each->qty;
                                        $totalDiscount = (int)(($totalMrp - $total) / $totalMrp) * 100;
                                        $totalIndividualPrice += (int)$total;
                                        $totalIndividualMrp += (int)$totalMrp;
                                        $totalIndividualClubCash += (int)$cartprice->royal_clubcash * $each->qty;
                                        $totalIndividualNormolPrice += (int)$cartprice->reg_sell_price * $each->qty;
                                        $totalPrebookPrice += (int)$cartprice->prebook_amt * $each->qty;
                                        array_push($cart_details, ['id' => $each->id, 'price' => $total, 'is_sale' => 'false', 'sale_id' => '']);
                                      }
                                    }
                                  }
                                }

                                $shippingCharge = 40;
                                $totalPrice = $total + $shippingCharge;
                                $amount = (int)round($totalPrice, 0);
                                $orderid = "OD_Slick" . rand(1000, 9999) . time();
                                if ($this->subscription == 'true') {
                                  $payment_settings = $this->db->get_where('manage_content')->row();
                                  if ($payment_settings->royal_prebookig_status == 'true') {
                                    $paymentOptions = 'online';
                                  } else {
                                    $paymentOptions = 'cod';
                                  }
                                } else {
                                  $paymentOptions = 'online';
                                }

                                if ($paymentOptions == 'online') {

                                  $rzp_orderid = $this->razorpay->getRazorpayOrderID($orderid, $totalPrebookPrice);
                                } else {
                                  $rzp_orderid = '';
                                }

                                $address_id = $this->input->post('address');
                                $address = $this->db->get_where('tbl_address', ['id' => $address_id])->row();
                                $address = json_encode($address);
                                if ($paymentOptions == 'online') {
                                  $data_arr = array(
                                    "order_type" => 'prebooking',
                                    "prebook_amt" => $totalPrebookPrice,
                                    "paid_amount" => $totalPrebookPrice,
                                    "due_amount" => $amount - $totalPrebookPrice,
                                    "amount" => $amount,
                                    "product_price" => $total,
                                    "shipping_charge" => $shippingCharge,
                                    "address" => $address,
                                    "userid" => $userid,
                                    "orderid" => $orderid,
                                    "pay_mode" => $paymentOptions,
                                    "order_status" => 'pending',
                                    "rzp_orderid" => $rzp_orderid,
                                    "rzp_paymentid" => 'pending',
                                    "PaymentStatus" => "pending",
                                    "is_status" => 'true',
                                    "created_at" => $this->data->timestamp,
                                    "modified_at" => $this->data->timestamp
                                  );

                                  $rzpOrderData = $this->razorpay->getRazorpayOrder($rzp_orderid);
                                  if ($rzpOrderData) {
                                    $data['baseUrl'] = base_url();
                                    $data['rzp_api_key'] = $this->razorpay->rzp_api_key;
                                    $data['rzp_api_secret'] = $this->razorpay->rzp_api_secret;
                                    $data['rzpAmount'] = $rzpOrderData->amount;
                                    $data['rzpOrderId'] = $rzpOrderData->id;
                                    $data['enrollData'] = (object) $data_arr;
                                    $data['cart_details'] = (object)$cart_details;
                                    $data['apply_status'] = '';
                                    $data['apply_type'] = '';
                                    $data['apply_id'] = '';
                                    $data['product'] = 'SlickPattern';
                                    $data['description'] = "Payment For Shopping at SlickPattern";
                                    $data['logo'] = base_url('public/images/logo/logo.png');

                                    $output['res'] = 'pay';
                                    $output['msg'] = 'Please Pay';
                                    $output['data'] = $data;
                                  } else {
                                    $output['msg'] = 'Invalid Order.';
                                  }
                                } else {

                                  $data_arr = array(
                                    "amount" => $amount,
                                    "paid_amount" => 0,
                                    "due_amount" => $amount,
                                    "product_price" => $total,
                                    "shipping_charge" => $shippingCharge,
                                    "address" => $address,
                                    "userid" => $userid,
                                    "orderid" => $orderid,
                                    "pay_mode" => $paymentOptions,
                                    "order_status" => 'pending',
                                    "rzp_orderid" => $rzp_orderid,
                                    "rzp_paymentid" => 'pending',
                                    "PaymentStatus" => "pending",
                                    "is_status" => 'true',
                                    "created_at" => $this->data->timestamp,
                                    "modified_at" => $this->data->timestamp
                                  );

                                  if ($this->db->insert('tbl_order', $data_arr)) {
                                    if ($this->db->where(array("userid" => $userid, 'is_status' => 'false', 'availability' => ''))->update('tbl_cart', array("orderid" => $orderid, "is_status" => 'true', "modified_at" => $this->data->timestamp))) {
                                      #Genrate Payment links for due amount
                                      $amount = $data_arr['due_amount'];
                                      $user = $this->db->get_where('tbl_user', ['id' => $userid])->row();
                                      $userdata = json_encode(['name' => $user->name, 'email' => $user->email, 'contact' => $user->mobile]);
                                      $expired_time = strtotime(date('d-m-Y', strtotime("+7days")));
                                      $payment_links = $this->razorpay->sendPaymentLinks($amount, $orderid, $userdata, $expired_time);
                                      $this->db->where(array("orderid" => $orderid))->update('tbl_order', array("payment_links" => $payment_links));

                                      #update cart price details
                                      if (!empty($cart_details)) {
                                        $this->db->update_batch('tbl_cart', $cart_details, 'id');
                                      }
                                      #Size Inventory Management For Individual
                                      $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => '', 'availability' => ''))->result();
                                      if (!empty($IndCart)) {
                                        foreach ($IndCart as $each) {
                                          $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                                          $id = $this->userData->id;
                                          #Size Inventory Management    
                                          if ($each->size != 'NA') {
                                            $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                                            $json_sizestock = json_decode($variant->size);
                                            $arr = array();
                                            $count = 0;
                                            foreach ($json_sizestock as $eachSize) {
                                              foreach ($eachSize as $size => $size_stock) {
                                                if ($size == $each->size) {
                                                  $size_count = ($size_stock - $each->qty);
                                                  array_push($arr, array($size => $size_count));
                                                  if ($size_count < 1) {
                                                    $count++;
                                                  }
                                                } else {
                                                  array_push($arr, array($size => $size_stock));
                                                  if ($size_stock < 1) {
                                                    $count++;
                                                  }
                                                }
                                              }
                                            }
                                            #update status and stock quantity of product variant 
                                            if (count($json_sizestock) == $count) {
                                              $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                              # update status combo product 
                                              $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                                              if (!empty($ComboStock)) {
                                                foreach ($ComboStock as $stock) {
                                                  $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                                }
                                              }
                                            } else {
                                              $this->db->where('id', $each->variant_id)->update('product_variant', array('size' => json_encode($arr)));
                                            }
                                          } else {
                                            // $updatedStock=($product->stock-$each->qty);  
                                            // if($updatedStock<1){
                                            // $this->db->where('id',$each->product_id)->update('products',array('stock'=>$updatedStock,'is_status'=>'false'));
                                            // }
                                            // else{ 
                                            // $this->db->where('id',$each->product_id)->update('products',array('stock'=>$updatedStock));  
                                            // } 
                                          }
                                        }
                                      }

                                      $output['redirect'] = base_url('Home/Order');
                                      $output['res'] = 'success';
                                      $output['msg'] = 'Order Successfully Done!';
                                    } else {
                                      $output['msg'] = 'Something Went Wrong';
                                    }
                                  } else {
                                    $output['msg'] = 'something went wrong!';
                                  }
                                }
                              } else {
                                $output['msg'] = 'Something went wrong in Data Saving.';
                              }
                            }
                          }
                        }
                      }
                    } else {
                      $output['msg'] = 'Invalid Product Variant';
                    }
                  } else {
                    $output['res'] = 'error';
                    $output['msg'] = 'Product Not Found';
                  }
                }
              }
            } else {
              $output['msg'] = 'Please login to continue..';
              $output['redirect'] = base_url('Login');
            }
            echo json_encode([$output]);
          } else if ($action == 'AddCombo') {
            if (!empty($this->input->post())) {
              $this->form_validation->set_rules('comboid', 'Combo', 'required|trim|numeric');
              $this->form_validation->set_rules('productid[]', 'Product', 'required|trim|numeric');
              $this->form_validation->set_rules('variantid[]', 'Variant', 'required|trim');
              $this->form_validation->set_rules('color[]', 'Color', 'required|trim');
              $this->form_validation->set_rules('size[]', 'Size', 'required|trim');
              $this->form_validation->set_rules('address', 'address', 'required|trim');

              if ($this->form_validation->run() == FALSE) {
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
              } else {
                #Add to cart for login user
                if ($this->permission == 'true') {
                  $userid = $this->userData->id;
                } else {
                  $userid = "";
                }

                $query = $this->db->get_where('tbl_combo', array('id' => $this->input->post('comboid')));
                if ($query->num_rows()) {
                  $combo = $query->row();
                  $productId = implode(",", $this->input->post('productid'));
                  $variantId = implode(",", $this->input->post('variantid'));
                  $color = implode(",", $this->input->post('color'));
                  $size = implode(",", $this->input->post('size'));

                  $items = explode(",", $productId);
                  $itemsVariant = explode(",", $variantId);
                  $sizes = explode(",", $size);

                  $combo_stock_count = 0;
                  if (!empty($items) and !empty($itemsVariant)) {
                    for ($i = 0; $i < count($items); $i++) {
                      $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                      $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();

                      $json = json_decode($variants->size, 2);

                      foreach ($json as $jsoneach) {
                        foreach ($jsoneach as $json_size => $size_stock) {
                          if ($sizes[$i] != 'NA') {
                            if ($json_size == $sizes[$i]) {
                              if ($size_stock < 1) {
                                $combo_stock_count++;
                              }
                              break;
                            }
                          } else {
                            if ($product->stock < 1) {
                              $combo_stock_count++;
                            }
                            break;
                          }
                        }
                      }
                    }
                  }

                  if ($combo_stock_count > 0) {
                    $output['res'] = 'error';
                    $output['msg'] = 'Product Out of Stock!';
                  } else {
                    $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND (userid='$userid' OR system_id='$this->system_id')")->num_rows();
                    if ($totalCart > $used_limit->cart_limit) {
                      $output['res'] = 'error';
                      $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                    } else {
                      $cart = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND variant_id='$variantId' AND product_id='$productId' AND size='$size' AND color='$color' AND is_status='false'");
                      if ($cart->num_rows() > 0) {
                        $output['res'] = 'success';
                        $output['msg'] = 'Already Prebooked';
                      } else {
                        if ($combo->gift_wrap == 'true') {
                          $gift_wrap = 'true';
                        } else {
                          $gift_wrap = 'false';
                        }

                        $insertData = [
                          'order_type' => 'prebooking',
                          'userid' => $userid,
                          'system_id' => $this->system_id,
                          'combo_id' =>  $this->input->post('comboid'),
                          'product_id' => $productId,
                          'variant_id ' => $variantId,
                          'size ' => $size,
                          'color ' => $color,
                          'qty ' => '1',
                          'is_status' => 'false',
                          'is_combo' => 'true',
                          'is_giftwrap' => $gift_wrap,
                          'order_status' => 'pending',
                          'cancel_request' => 'false',
                          'return_request' => 'false',
                          'refund_request' => 'false',
                          'created_at' => $this->data->timestamp,
                          'modified_at' => $this->data->timestamp
                        ];
                        $insertData = $this->security->xss_clean($insertData);
                        if ($this->db->insert('tbl_cart', $insertData)) {
                          $id = $this->db->insert_id();
                          $listInd = $this->db->get_where('tbl_cart', ['userid' => $userid, 'id' => $id])->result();

                          $cart_details = [];
                          #Fetch total combo product price behalf of normol and royal user
                          $totalComboPrice = 0;
                          $totalComboMrp = 0;
                          $totalComboClubCash = 0;
                          $totalComboNormolPrice = 0;
                          $totalPrebookPrice = 0;
                          if (!empty($listCombo)) {
                            foreach ($listCombo as $each) {
                              $product = $this->db->get_where('tbl_combo', array('id' => $each->combo_id, 'is_status' => 'true'));
                              if ($product->num_rows() > 0) {
                                $product = $product->row();
                                $icons = explode(',', $product->image);
                                $id = $this->userData->id;
                                $cartprice = $this->db->get_where('tbl_combo', array('id' => $each->combo_id, 'is_status' => 'true'))->row();

                                // code for check sale is available or not on this product 
                                $saleProduct = $this->db->get_where('sale_product', array('product_id' => $each->id, 'is_status' => 'true', 'product_type' => 'combo'))->row();
                                $sale_status = 'false';
                                $sale_user_type = '';
                                $sale_id = '';


                                if ($subscription == 'true') {
                                  $price = (int)$cartprice->discount_price;
                                } else {
                                  $price = (int)$cartprice->discount_price;
                                }

                                $total = (int)$price * $each->qty;
                                $totalPrebookPrice = (int)$cartprice->prebook_amt * $each->qty;;
                                $totalMrp = (int)$cartprice->price * $each->qty;
                                $totalDiscount = (int)(($totalMrp - $total) / $totalMrp) * 100;
                                $totalComboPrice += (int)$total;
                                $totalComboMrp += (int)$totalMrp;
                                $totalComboNormolPrice = (int)$cartprice->discount_price;
                                $totalComboClubCash = (int)0;
                                array_push($cart_details, ['id' => $each->id, 'price' => $total, 'is_sale' => $sale_status, 'sale_id' => $sale_id]);
                              }
                            }
                          }

                          $shippingCharge = 40;
                          $totalPrice = $total + $shippingCharge;
                          $amount = (int)round($totalPrice, 0);
                          $orderid = "OD_Slick" . rand(1000, 9999) . time();
                          // $paymentOptions=$this->input->post('pay_mode'); 
                          $paymentOptions = 'online';
                          if ($paymentOptions == 'online') {

                            $rzp_orderid = $this->razorpay->getRazorpayOrderID($orderid, $totalPrebookPrice);
                          } else {
                            $rzp_orderid = '';
                          }

                          $address_id = $this->input->post('address');
                          $address = $this->db->get_where('tbl_address', ['id' => $address_id])->row();
                          $address = json_encode($address);
                          if ($paymentOptions == 'online') {
                            $data_arr = array(
                              "order_type" => 'prebooking',
                              "prebook_amt" => $totalPrebookPrice,
                              "amount" => $amount,
                              "product_price" => $total,
                              "shipping_charge" => $shippingCharge,
                              "address" => $address,
                              "userid" => $userid,
                              "orderid" => $orderid,
                              "pay_mode" => $paymentOptions,
                              "order_status" => 'pending',
                              "rzp_orderid" => $rzp_orderid,
                              "rzp_paymentid" => 'pending',
                              "PaymentStatus" => "pending",
                              "is_status" => 'true',
                              "created_at" => $this->data->timestamp,
                              "modified_at" => $this->data->timestamp
                            );

                            $rzpOrderData = $this->razorpay->getRazorpayOrder($rzp_orderid);
                            if ($rzpOrderData) {
                              $data['baseUrl'] = base_url();
                              $data['rzp_api_key'] = $this->razorpay->rzp_api_key;
                              $data['rzp_api_secret'] = $this->razorpay->rzp_api_secret;
                              $data['rzpAmount'] = $rzpOrderData->amount;
                              $data['rzpOrderId'] = $rzpOrderData->id;
                              $data['enrollData'] = (object) $data_arr;
                              $data['cart_details'] = (object)$cart_details;
                              $data['apply_status'] = '';
                              $data['apply_type'] = '';
                              $data['apply_id'] = '';
                              $data['product'] = 'SlickPattern';
                              $data['description'] = "Payment For Shopping at SlickPattern";
                              $data['logo'] = base_url('public/images/logo/logo.png');

                              $output['res'] = 'pay';
                              $output['msg'] = 'Please Pay';
                              $output['data'] = $data;
                            } else {
                              $output['msg'] = 'Invalid Order.';
                            }
                          } else {

                            $data_arr = array(
                              "amount" => $amount,
                              "product_price" => $total,
                              "shipping_charge" => $shippingCharge,
                              "address" => $address,
                              "userid" => $userid,
                              "orderid" => $orderid,
                              "pay_mode" => $paymentOptions,
                              "order_status" => 'pending',
                              "rzp_orderid" => $rzp_orderid,
                              "rzp_paymentid" => 'pending',
                              "PaymentStatus" => "pending",
                              "is_status" => 'true',
                              "created_at" => $this->data->timestamp,
                              "modified_at" => $this->data->timestamp
                            );

                            if ($this->db->insert('tbl_order', $data_arr)) {
                              if ($this->db->where(array("userid" => $userdata->id, 'is_status' => 'false', 'availability' => ''))->update('tbl_cart', array("orderid" => $orderid, "is_status" => 'true', "modified_at" => $this->data->timestamp))) {

                                #update cart price details
                                if (!empty($cart_details)) {
                                  $this->db->update_batch('tbl_cart', $cart_details, 'id');
                                }

                                #Size Inventory Management For Combo
                                $id = $this->userData->id;
                                $ComboCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => 'true', 'availability' => '', 'order_type' => 'prebooking'))->result();
                                if (!empty($ComboCart)) {
                                  foreach ($ComboCart as $each) {
                                    $items = explode(",", $each->product_id);
                                    $itemsVariant = explode(",", $each->variant_id);
                                    $sizes = explode(",", $each->size);
                                    if (!empty($items) and !empty($itemsVariant)) {
                                      for ($i = 0; $i < count($items); $i++) {
                                        $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                                        $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                                        $json_sizestock = json_decode($variants->size);
                                        if ($sizes[$i] != 'NA') {
                                          $arr = array();
                                          $count = 0;
                                          foreach ($json_sizestock as $eachSize) {
                                            foreach ($eachSize as $size => $size_stock) {
                                              if ($size == $sizes[$i]) {
                                                $size_count = ($size_stock - $each->qty);
                                                array_push($arr, array($size => $size_count));
                                                if ($size_count < 1) {
                                                  $count++;
                                                }
                                              } else {
                                                array_push($arr, array($size => $size_stock));
                                                if ($size_stock < 1) {
                                                  $count++;
                                                }
                                              }
                                            }
                                          }
                                          #update status and stock quantity of product variant 
                                          if (count($json_sizestock) == $count) {
                                            $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                            # update status combo product 
                                            $ComboStock = $this->db->get_where('combo_item', ['product_id' => $items[$i], 'variant_id' => $itemsVariant[$i], 'is_status' => 'true'])->result();
                                            if (!empty($ComboStock)) {
                                              foreach ($ComboStock as $stock) {
                                                $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                              }
                                            }
                                          } else {
                                            $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('size' => json_encode($arr)));
                                          }

                                          #update stock quantity and status of purchasing product 
                                          $variantStock = $this->db->get_where('product_variant', ['product_id' => $items[$i], 'is_status' => 'true'])->num_rows();
                                          if ($variantStock < 1) {
                                            $this->db->where('id', $items[$i])->update('products', array('is_status' => 'false'));
                                          }
                                        } else {
                                          // $updatedStock=($product->stock-$each->qty);  
                                          // if($updatedStock<1){
                                          // $this->db->where('id',$items[$i])->update('products',array('stock'=>$updatedStock,'is_status'=>'false'));
                                          // }
                                          // else{ 
                                          // $this->db->where('id',$items[$i])->update('products',array('stock'=>$updatedStock));  
                                          // } 
                                        }
                                      }
                                    }
                                  }
                                }

                                $output['redirect'] = base_url('Home/Order');
                                $output['res'] = 'success';
                                $output['msg'] = 'Order Successfully';
                              } else {
                                $output['msg'] = 'Something Went Wrong';
                              }
                            } else {
                              $output['msg'] = 'something went wrong!';
                            }
                          }
                        } else {
                          $output['msg'] = 'Something went wrong in Data Saving.';
                        }
                      }
                    }
                  }
                } else {
                  $output['res'] = 'error';
                  $output['msg'] = 'Product Not Found';
                }
              }
              echo json_encode([$output]);
            }
          } elseif ($action == 'UpdatePaymentStatus') {
            $razorpayPaymentlinkId = $_REQUEST['razorpay_payment_link_id'];
            $razorpayPaymentId = $_REQUEST['razorpay_payment_id'];
            $razorpayPaymentLinkReferenceId = $_REQUEST['razorpay_payment_link_reference_id'];
            $razorpayPaymentLinkStatus = $_REQUEST['razorpay_payment_link_status'];
            $razorpayPaymentLinkSignature = $_REQUEST['razorpay_signature'];
            if ($razorpayPaymentLinkStatus == 'paid') {
              $this->razorpay->CancelledPaymentLinks($razorpayPaymentlinkId);
              $verify_signature = $this->razorpay->SignatureVerify($razorpayPaymentlinkId, $razorpayPaymentId, $razorpayPaymentLinkReferenceId, $razorpayPaymentLinkStatus, $razorpayPaymentLinkSignature);
              if (empty($verify_signature)) {
                $FetchPaymentData = $this->razorpay->FetchPaymentLinks($razorpayPaymentlinkId);
                $data = array_values((array)$FetchPaymentData)[0];
                $payment_link_response = base64_encode(json_encode($data));
                $paid_amount = ($data['amount_paid'] / 100);
                #Fetch data from the table
                $order_data = $this->db->get_where('tbl_order', ['orderid' => $razorpayPaymentLinkReferenceId])->row_array();
                $paid_amount += $order_data['paid_amount'];
                $unpaid_amount = $paid_amount - ($order_data['due_amount'] + $order_data['paid_amount']);
                $isUpdate = $this->db->where(['orderid' => $razorpayPaymentLinkReferenceId])->update('tbl_order', ['paid_amount' => $paid_amount, 'due_amount' => $unpaid_amount, 'PaymentStatus' => 'Success', 'payment_link_response' => $payment_link_response]);
                if ($isUpdate) {
                  $this->session->set_flashdata(['res' => 'success', 'msg' => "Payment Successfully Done!"]);
                  redirect(base_url($this->data->controller . '/Order'));
                } else {
                  $this->session->set_flashdata(['res' => 'success', 'msg' => "payment done but something is wrong"]);
                  redirect(base_url($this->data->controller . '/Order'));
                }
              }
            } else {
              $this->session->set_flashdata(['res' => 'success', 'msg' => "Sorry! your payment has been not completed,please try again or contact support team"]);
              redirect(base_url($this->data->controller . '/Order'));
            }
          } else {
            redirect(base_url());
          }
        }
      } else {
        redirect(base_url());
      }
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  public function AddReview()
  {
    $output['res'] = 'error';
    if ($this->uri->segment(2) == true) {
      $action = $this->uri->segment(2);
      $this->data->table = 'tbl_review';
      $this->data->folder = 'review';
      if ($this->permission == 'true') {
        if ($action == 'AddReview') {
          if (!empty($this->input->post())) {
            if (!empty($_FILES['image']['name'])) {
              $file_name = 'image';
              $countfiles = count($_FILES['image']['name']);
              for ($i = 0; $i <= $countfiles; $i++) {
                if (!empty($_FILES['image']['name'][$i])) {
                  // Define new $_FILES array - $_FILES['file']
                  $_FILES['file']['name'] = $_FILES[$file_name]['name'][$i];
                  $_FILES['file']['type'] = $_FILES[$file_name]['type'][$i];
                  $_FILES['file']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$i];
                  $_FILES['file']['error'] = $_FILES[$file_name]['error'][$i];
                  $_FILES['file']['size'] = $_FILES[$file_name]['size'][$i];
                  // Set preference
                  $config['upload_path'] = './uploads/' . $this->data->folder . '/';
                  $config['allowed_types'] = 'jpg|jpeg|png';
                  $config['max_size'] = 20000 * 1024; // max_size in kb
                  $config['file_name'] = time() . rand(10000, 99999) . $_FILES[$file_name]['name'][$i];
                  //Load upload library

                  $this->load->library('upload', $config);
                  // File upload
                  $this->upload->initialize($config);


                  if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    // Initialize array
                    $data['filenames'][] = $filename;
                    $image = implode(',', $data['filenames']);
                    $upload_status = "true";
                  } else {
                    $upload_status = "false";
                  }
                }
              }
            } else {
              $image = "";
            }

            if (empty($image)) {
              $image = '';
            }

            if (!empty($this->input->post('product_type'))) {
              if ($this->input->post('product_type') == 'Ind') {
                $isCombo = 'false';
              } else {
                $isCombo = 'true';
              }
            }
            $fit_status = '';
            if (!empty($this->input->post('fit_status'))) {
              $fit_status = $this->input->post('fit_status');
            }

            $review_type = $this->input->post('review_type');
            $vendor_id = "";
            if ($review_type == 'seller') {
              $vendor_id = $this->input->post('vendor_id');
            }

            $userid = $this->userData->id;
            $insertData = [
              'userid' => $userid,
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'product_id' => $this->input->post('product_id'),
              'review_type' => $review_type,
              'vendor_id' => $vendor_id,
              'rating' => $this->input->post('rating'),
              'review_title' => $this->input->post('review_title'),
              'review_message' => $this->input->post('review_message'),
              'review_img' => $image,
              'fit_status' => $fit_status,
              'is_status' => '',
              'is_combo' => $isCombo,
              'created_at' => $this->data->timestamp,
              'modified_at' => $this->data->timestamp
            ];

            if ($this->db->insert($this->data->table, $insertData)) {
              $review = $this->db->get_where('reward_point_setting', array('is_status' => 'true'))->row();
              if (!empty($review->product_feedback)) {
                $coins = $review->product_feedback;
                $expire_date = $review->expire_date;
                $rewardData = [
                  'userid' => $this->userData->id,
                  'coins' => $coins,
                  'expire_date' => $expire_date,
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp,
                ];
                $this->db->insert('user_wallet', $rewardData);
              }
              $output['res'] = 'success';
              $output['msg'] = 'Review posted ';
            } else {
              $output['msg'] = 'Something went wrong to post review.';
            }
          }
        }
      } else {
        $output['msg'] = 'Please login to give review';
      }
    }
    echo json_encode([$output]);
  }

  public function showReview()
  {
    $output['res'] = 'error';
    $id = $this->uri->segment(3);
    $type = $this->uri->segment(4);
    $count = $this->input->post('count');
    $ratings = $this->input->post('ratings');
    $sortby = $this->input->post('sortby');
    $offset = ((int)$count) * 5;

    $data["action"] = "ShowReview";
    if ($this->uri->segment(4) == true) {
      if ($type == 'Ind') {

        if (!empty($this->input->post('ratings'))) {
          $data['reviews'] = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'rating' => $ratings, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          $output['res'] = 'RatingsFilter';
        } else if (!empty($this->input->post('sortby'))) {

          $output['res'] = 'sortby';
          if ($sortby == 'relevant') {
            $data['reviews'] = $this->db->order_by('rating', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'helpful') {
            $data['reviews'] = $this->db->order_by('rating', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'ratingInv') {
            $data['reviews'] = $this->db->order_by('rating', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'rating') {
            $data['reviews'] = $this->db->order_by('rating', 'ASC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'recent') {
            $data['reviews'] = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          }
        } else {
          $output['res'] = 'LoadMore';
          $countProduct = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->num_rows();
          $data['reviews'] = $this->db->order_by('id', 'DESC')->limit($offset, 0)->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'false', 'is_status' => 'published'))->result();
          if ($countProduct <= count($data['reviews'])) {
            $output['msg'] = 'No More Reviews';
          }
        }
      } else if ($type == 'Combo') {

        if (!empty($this->input->post('ratings'))) {
          $data['reviews'] = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'rating' => $ratings, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          $output['res'] = 'RatingsFilter';
        } else if (!empty($this->input->post('sortby'))) {

          $output['res'] = 'sortby';
          if ($sortby == 'relevant') {
            $data['reviews'] = $this->db->order_by('rating', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'helpful') {
            $data['reviews'] = $this->db->order_by('help_count', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'ratingInv') {
            $data['reviews'] = $this->db->order_by('rating', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'rating') {
            $data['reviews'] = $this->db->order_by('rating', 'ASC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          }
          if ($sortby == 'recent') {
            $data['reviews'] = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          }
        } else {
          $output['res'] = 'LoadMore';
          $countProduct = $this->db->order_by('id', 'DESC')->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->num_rows();
          $data['reviews'] = $this->db->order_by('id', 'DESC')->limit($offset, 0)->get_where('tbl_review', array('product_id' => $id, 'is_combo' => 'true', 'is_status' => 'published'))->result();
          if ($countProduct <= count($data['reviews'])) {
            $output['msg'] = 'No More Reviews';
          }
        }
      }
      $output['reviews'] = $this->load->view($this->data->controller . '/UpdateData', $data, true);
      echo json_encode([$output]);
    }
  }

  public function UpdateHelpfulReview()
  {
    $output['res'] = 'error';
    $id = $this->input->post('id');
    $count = $this->input->post('count');

    if (!empty($this->input->post())) {
      $data = $this->db->get_where('tbl_review', array('id' => $id));
      if ($data->num_rows() > 0) {
        $data = $data->row();
        if (!empty($data->help_count)) {
          $upcount = $data->help_count + 1;
        } else {
          $upcount = 1;
        }
        $updateData = [
          'help_count' => $upcount,
        ];

        if ($this->db->where('id', $id)->update('tbl_review', $updateData)) {
          $output['res'] = "success";
          $HelpCount = $this->db->get_where('tbl_review', array('id' => $id))->row();
          if (!empty($HelpCount->help_count)) {
            $output['count'] = $HelpCount->help_count;
          }
        } else {
          $output['res'] = "error";
          $HelpCount = $this->db->get_where('tbl_review', array('id' => $id))->row();
          if (!empty($HelpCount->help_count)) {
            $output['count'] = $HelpCount->help_count;
          }
        }
        echo json_encode([$output]);
      }
    }
  }

  public function AddToCart()
  {
    $output['res'] = 'error';
    if ($this->uri->segment(3) == true) {
      $action = $this->uri->segment(3);
      $used_limit = $this->db->get_where('manage_content')->row();
      if ($action == 'Add') {
        if (!empty($this->input->post())) {
          $this->form_validation->set_rules('productid', 'Product', 'required|trim|numeric');
          $this->form_validation->set_rules('variantid', 'Variant', 'required|trim');
          $this->form_validation->set_rules('color', 'Color', 'required|trim');
          $this->form_validation->set_rules('size', 'Size', 'required|trim');

          if ($this->form_validation->run() == FALSE) {
            $msg = explode('</p>', validation_errors());
            $output['msg'] = str_ireplace('<p>', '', $msg[0]);
          } else {

            $query = $this->db->get_where('products', array('id' => $this->input->post('productid')));
            if ($query->num_rows()) {
              $product = $query->row();

              $variant = $this->db->get_where('product_variant', array('id' => $this->input->post('variantid'), 'product_id' => $product->id));
              if ($variant->num_rows() > 0) {
                $stock_count = 0;
                $variant = $variant->row();
                #Check Stock of individual product
                if ($this->input->post('size') != 'NA') {
                  $json_sizestock = json_decode($variant->size);
                  $arr = array();
                  foreach ($json_sizestock as $eachSize) {
                    foreach ($eachSize as $size => $size_stock) {
                      if ($size == $this->input->post('size') and $size_stock < 1) {
                        $stock_count++;
                      }
                    }
                  }
                } else {

                  if ($product->stock < 1) {
                    $stock_count++;
                  }
                }

                if ($stock_count > 0) {
                  $output['res'] = 'error';
                  $output['msg'] = 'Product Out of Stock!';
                } else {

                  #Add to cart for login user
                  if ($this->permission == 'true') {
                    $userid = $this->userData->id;
                    $cart = $this->db->get_where('tbl_cart', array('variant_id' => $this->input->post('variantid'), 'product_id' => $product->id, 'size' => $this->input->post('size'), 'color' => $this->input->post('color'), 'is_status' => 'false', 'userid' => $userid, 'order_type' => ''));
                    $WithoutLoginCart = $this->db->get_where('tbl_cart', array('variant_id' => $this->input->post('variantid'), 'product_id' => $product->id, 'size' => $this->input->post('size'), 'color' => $this->input->post('color'), 'is_status' => 'false', 'system_id' => $this->system_id, 'order_type' => ''));
                    $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND (userid='$userid' OR system_id='$this->system_id')")->num_rows();
                    if ($totalCart > $used_limit->cart_limit) {
                      $output['res'] = 'error';
                      $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                    } else {
                      if ($cart->num_rows() > 0 || $WithoutLoginCart->num_rows() > 0) {
                        $cartdata = !empty($cart->row()) ? $cart->row() : $WithoutLoginCart->row();
                        $uniqueid = $cartdata->id;
                        $quant = $cartdata->qty;
                        $quant = (int)$quant + 1;
                        $this->db->where('id', $uniqueid);
                        $this->db->update('tbl_cart', array('qty' => $quant));
                        $output['res'] = 'success';
                        $output['msg'] = 'Already Added In Cart';
                        $output['redirect'] = base_url('Home/Cart');
                      } else {
                        if ($product->gift_wrap == 'true') {
                          $gift_wrap = 'true';
                        } else {
                          $gift_wrap = 'false';
                        }

                        $insertData = [
                          'userid' => $userid,
                          'system_id' => $this->system_id,
                          'product_id' => $product->id,
                          'variant_id ' => $this->input->post('variantid'),
                          'size ' => $this->input->post('size'),
                          'color ' => $this->input->post('color'),
                          'qty ' => '1',
                          'is_status' => 'false',
                          'is_giftwrap' => $gift_wrap,
                          'order_status' => 'pending',
                          'created_at' => $this->data->timestamp,
                          'modified_at' => $this->data->timestamp
                        ];
                        $insertData = $this->security->xss_clean($insertData);
                        if ($this->db->insert('tbl_cart', $insertData)) {
                          $output['res'] = 'success';
                          $output['msg'] = 'Successfully Added To Cart';
                          $output['redirect'] = base_url('Home/Cart');
                        } else {
                          $output['msg'] = 'Something went wrong in Data Saving.';
                        }
                      }
                    }
                  } else {
                    $userid = "";
                    $cart = $this->db->get_where('tbl_cart', array('variant_id' => $this->input->post('variantid'), 'product_id' => $product->id, 'size' => $this->input->post('size'), 'color' => $this->input->post('color'), 'is_status' => 'false', 'system_id' => $this->system_id, 'availability' => ''));
                    $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND system_id='$this->system_id'")->num_rows();
                    if ($totalCart > $used_limit->cart_limit) {
                      $output['res'] = 'error';
                      $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                    } else {
                      if ($cart->num_rows() > 0) {
                        $cartdata = !empty($cart->row()) ? $cart->row() : $WithoutLoginCart->row();
                        $uniqueid = $cartdata->id;
                        $quant = $cartdata->qty;
                        $quant = (int)$quant + 1;
                        $this->db->where('id', $uniqueid);
                        $this->db->update('tbl_cart', array('qty' => $quant));
                        $output['res'] = 'success';
                        $output['msg'] = 'Already Added In Cart';
                        $output['redirect'] = base_url('Home/Cart');
                      } else {
                        if ($product->gift_wrap == 'true') {
                          $gift_wrap = 'true';
                        } else {
                          $gift_wrap = 'false';
                        }

                        $insertData = [
                          'userid' => $userid,
                          'system_id' => $this->system_id,
                          'product_id' => $product->id,
                          'variant_id ' => $this->input->post('variantid'),
                          'size ' => $this->input->post('size'),
                          'color ' => $this->input->post('color'),
                          'qty ' => '1',
                          'is_status' => 'false',
                          'is_giftwrap' => $gift_wrap,
                          'order_status' => 'pending',
                          'created_at' => $this->data->timestamp,
                          'modified_at' => $this->data->timestamp
                        ];
                        $insertData = $this->security->xss_clean($insertData);
                        if ($this->db->insert('tbl_cart', $insertData)) {
                          $output['res'] = 'success';
                          $output['msg'] = 'Successfully Added To Cart';
                          $output['redirect'] = base_url('Home/Cart');
                        } else {
                          $output['msg'] = 'Something went wrong in Data Saving.';
                        }
                      }
                    }
                  }
                }
              } else {
                $output['msg'] = 'Invalid Product Variant';
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Product Not Found';
            }
          }
          echo json_encode([$output]);
        }
      } else if ($action == 'AddCombo') {
        if (!empty($this->input->post())) {
          $this->form_validation->set_rules('comboid', 'Combo', 'required|trim|numeric');
          $this->form_validation->set_rules('productid[]', 'Product', 'required|trim|numeric');
          $this->form_validation->set_rules('variantid[]', 'Variant', 'required|trim');
          $this->form_validation->set_rules('color[]', 'Color', 'required|trim');
          $this->form_validation->set_rules('size[]', 'Size', 'required|trim');

          if ($this->form_validation->run() == FALSE) {
            $msg = explode('</p>', validation_errors());
            $output['msg'] = str_ireplace('<p>', '', $msg[0]);
          } else {
            #Add to cart for login user
            if ($this->permission == 'true') {
              $userid = $this->userData->id;
            } else {
              $userid = "";
            }

            $query = $this->db->get_where('tbl_combo', array('id' => $this->input->post('comboid')));
            if ($query->num_rows()) {
              $combo = $query->row();
              $productId = implode(",", $this->input->post('productid'));
              $variantId = implode(",", $this->input->post('variantid'));
              $color = implode(",", $this->input->post('color'));
              $size = implode(",", $this->input->post('size'));

              $items = explode(",", $productId);
              $itemsVariant = explode(",", $variantId);
              $sizes = explode(",", $size);

              $combo_stock_count = 0;
              if (!empty($items) and !empty($itemsVariant)) {
                for ($i = 0; $i < count($items); $i++) {
                  $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                  $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();

                  $json = json_decode($variants->size, 2);

                  foreach ($json as $jsoneach) {
                    foreach ($jsoneach as $json_size => $size_stock) {
                      if ($sizes[$i] != 'NA') {
                        if ($json_size == $sizes[$i]) {
                          if ($size_stock < 1) {
                            $combo_stock_count++;
                          }
                          break;
                        }
                      } else {
                        if ($product->stock < 1) {
                          $combo_stock_count++;
                        }
                        break;
                      }
                    }
                  }
                }
              }

              if ($combo_stock_count > 0) {
                $output['res'] = 'error';
                $output['msg'] = 'Product Out of Stock!';
              } else {
                $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND (userid='$userid' OR system_id='$this->system_id')")->num_rows();
                if ($totalCart > $used_limit->cart_limit) {
                  $output['res'] = 'error';
                  $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                } else {
                  $cart = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND variant_id='$variantId' AND product_id='$productId' AND size='$size' AND color='$color' AND is_status='false'");
                  if ($cart->num_rows() > 0) {
                    $cartdata = $cart->row();
                    $uniqueid = $cartdata->id;
                    $quant = $cartdata->qty;
                    $quant = (int)$quant + 1;
                    $this->db->where('id', $uniqueid);
                    $this->db->update('tbl_cart', array('qty' => $quant));
                    $output['res'] = 'success';
                    $output['msg'] = 'Already Added In Cart';
                    $output['redirect'] = base_url('Home/Cart');
                  } else {
                    if ($combo->gift_wrap == 'true') {
                      $gift_wrap = 'true';
                    } else {
                      $gift_wrap = 'false';
                    }

                    $insertData = [
                      'userid' => $userid,
                      'system_id' => $this->system_id,
                      'combo_id' =>  $this->input->post('comboid'),
                      'product_id' => $productId,
                      'variant_id ' => $variantId,
                      'size ' => $size,
                      'color ' => $color,
                      'qty ' => '1',
                      'is_status' => 'false',
                      'is_combo' => 'true',
                      'is_giftwrap' => $gift_wrap,
                      'order_status' => 'pending',
                      'cancel_request' => 'false',
                      'return_request' => 'false',
                      'refund_request' => 'false',
                      'created_at' => $this->data->timestamp,
                      'modified_at' => $this->data->timestamp
                    ];
                    $insertData = $this->security->xss_clean($insertData);
                    if ($this->db->insert('tbl_cart', $insertData)) {
                      $output['res'] = 'success';
                      $output['msg'] = 'Successfully Added To Cart';
                      $output['redirect'] = base_url('Home/Cart');
                    } else {
                      $output['msg'] = 'Something went wrong in Data Saving.';
                    }
                  }
                }
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Product Not Found';
            }
          }
          echo json_encode([$output]);
        }
      } else {
        redirect(baseurl());
      }
    } else {
      redirect(baseurl());
    }
  }

  public function Cart()
  {
    #Check this coupon/offer apply any previous purchase
    $prv_applied_coupon = [];
    $prv_applied_cashback = [];
    $prv_applied_reward = [];
    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      $applied_giveway = $this->db->query("select * from tbl_order where userid='$userid' AND is_status='true'")->result();
    }

    if (!empty($applied_giveway)) {
      foreach ($applied_giveway as $applied_coupon) {
        if ($applied_coupon->giveway_type == 'coupon_code' || $applied_coupon->giveway_type == 'store_user_coupon' || $applied_coupon->giveway_type == 'user_coupon') {
          array_push($prv_applied_coupon, $applied_coupon->couponid);
        } elseif ($applied_coupon->giveway_type == 'cashback') {
          array_push($prv_applied_cashback, $applied_coupon->couponid);
        } elseif ($applied_coupon->giveway_type == 'reward') {
          array_push($prv_applied_reward, $applied_coupon->couponid);
        }
      }
    }

    if ($this->uri->segment(5) == true) {
      $action = $this->uri->segment(3);
      $id = $this->uri->segment(4);
      $status = $this->uri->segment(5);
      if ($action == 'CouponTermsConditions') {
        $table = "";
        if ($status == 'coupon' || $status == 'user_coupon') {
          $table = 'tbl_coupon';
        } elseif ($status == 'cashback') {
          $table = 'manage_cashback';
        } elseif ($status == 'reward') {
          $table = 'reward_point';
        }
        $query = $this->db->where('id', $id)->get($table);
        if ($query->num_rows()) {
          $data["list"] = $query->row();
          $data["status"] = $status;
          $data["action"] = "CouponTermsConditions";
          $this->load->view($this->data->controller . '/UpdateData', $data);
        } else {
          redirect(base_url($this->data->controller . '/' . $this->data->method));
        }
      }
    } elseif ($this->uri->segment(4) == true) {
      $action = $this->uri->segment(3);
      $id = $this->uri->segment(4);
      if ($this->uri->segment(3) == true) {
        if ($action == 'MoveToWishlist') {
          $type = $this->input->post('type');
          $query = $this->db->get_where('tbl_cart', ['id' => $id])->row();

          if ($type == 'ind') {
            $product_id = $query->product_id;
            $combo_id = "";
            $is_combo = "";
          } else {
            $product_id = "";
            $combo_id = $query->combo_id;
            $is_combo = "true";
          }
          #Add to cart for login user
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            $this->system_id = "";
            $chklist = $this->db->get_where('tbl_wishlist', array('userid' => $userid, 'product_id' => $product_id));
          } else {
            $userid = "";
            $chklist = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'product_id' => $id));
          }

          if ($chklist->num_rows() > 0) {
            $this->db->where(['id' => $id])->delete('tbl_cart');
            $output['res'] = 'error';
            $output['msg'] = 'Already Added In Wishlist';
          } else {
            $insertData = [
              'userid' => $userid,
              'system_id' => $this->system_id,
              'product_id' => $product_id,
              'combo_id' => $combo_id,
              'is_combo' => $is_combo,
              'is_status' => 'true',
              'created_at' => $this->data->timestamp,
              'modified_at' => $this->data->timestamp
            ];
            $insertData = $this->security->xss_clean($insertData);
            if ($this->db->insert('tbl_wishlist', $insertData)) {
              $this->db->where(['id' => $id])->delete('tbl_cart');
              $output['res'] = 'success';
              $output['msg'] = 'Product Wishlisted.';
            } else {
              $output['msg'] = 'Something went wrong in Data Saving.';
            }
          }
          echo json_encode([$output]);
        } elseif ($action == 'ShowGiftWrap') {
          $query = $this->db->get_where('tbl_cart', array('id' => $id));
          if ($query->num_rows()) {
            $data["list"] = $query->row();
            $data["action"] = "ShowGiftWrap";
            $this->load->view($this->data->controller . '/UpdateData', $data);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } elseif ($action == 'RemoveGiftWrap') {
          $userid = $this->input->post('userid');
          $systemid = $this->input->post('systemid');
          if (!empty($userid) || !empty($systemid)) {
            $updateData = [
              'is_giftwrap' => 'true',
              'giftwrap_details' => '',
            ];

            $isUpdate = $this->db->where(['is_status' => 'false', 'is_giftwrap' => 'true', 'userid' => $userid])->or_where(['is_status' => 'false', 'is_giftwrap' => 'true', 'system_id' => $systemid])->update('tbl_cart', $updateData);
            if ($isUpdate) {
              echo true;
            } else {
              echo false;
            }
          } else {
            echo false;
          }
        } elseif ($action == 'EditAddress') {
          $query = $this->db->where('id', $id)->get('tbl_address');
          if ($query->num_rows()) {
            $data["list"] = $query->result();
            $data["action"] = "EditAddress";
            $this->load->view($this->data->controller . '/UpdateData', $data);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        }
      }
    } else {
      if ($this->uri->segment(3) == true) {
        $action = $this->uri->segment(3);
        if ($action == 'AddAddress') {
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            if (!empty($this->input->post())) {
              $this->form_validation->set_rules('state', 'State', 'required|trim');
              $this->form_validation->set_rules('city', 'City', 'required|trim');
              $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim|min_length[6]|max_length[6]');
              $this->form_validation->set_rules('addressline1', 'Address Line 1', 'required|trim');
              $this->form_validation->set_rules('addressline2', 'Address Line 2', 'required|trim');
              $this->form_validation->set_rules('name', 'Reciever Name', 'required|trim');
              $this->form_validation->set_rules('addresstype', 'Address Type', 'required|trim');
              $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|max_length[10]');
              $this->form_validation->set_rules('defaultaddress', 'Default Address', 'trim');
              if ($this->form_validation->run() == FALSE) {
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
              } else {
                if (!empty($this->input->post('defaultaddress'))) {
                  $default = 'true';
                } else {
                  $default = 'false';
                }

                $insertData = [
                  'userid' => $userid,
                  'state' => $this->input->post('state'),
                  'city' => $this->input->post('city'),
                  'pincode' => $this->input->post('pincode'),
                  'line1' => $this->input->post('addressline1'),
                  'line2' => $this->input->post('addressline2'),
                  'line3' => $this->input->post('addressline3'),
                  'name' => $this->input->post('name'),
                  'address_type' => $this->input->post('addresstype'),
                  'mobile' => $this->input->post('mobile'),
                  'alternate_mobile' => $this->input->post('alternate_mobile'),
                  'default_address' => $default,
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];
                $insertData = $this->security->xss_clean($insertData);
                if ($this->db->insert('tbl_address', $insertData)) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Address Successfully Added';

                  if ($default == 'true') {
                    $id = $this->db->insert_id();
                    if ($this->db->get_where('tbl_address', array('userid' => $userid))->num_rows() > 0) {
                      $this->db->where('userid', $userid)->update('tbl_address', ['default_address' => 'false']);
                      $this->db->where('id', $id)->update('tbl_address', ['default_address' => 'true']);
                    }
                  }
                } else {
                  $output['msg'] = 'Something went wrong in Data Saving.';
                }
              }
            }
          }
        } elseif ($action == 'UpdateAddress') {
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            if (!empty($this->input->post())) {
              if (empty($this->input->post("id"))) {
                $output['msg'] = 'ID is required.';
              } else {
                $query = $this->db->where('id', $this->input->post("id"))->get('tbl_address');
                if ($query->num_rows()) {
                  $data['list'] = $query->result();
                  $this->form_validation->set_rules('state', 'State', 'required|trim');
                  $this->form_validation->set_rules('city', 'City', 'required|trim');
                  $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim|min_length[6]|max_length[6]');
                  $this->form_validation->set_rules('addressline1', 'Address Line 1', 'required|trim');
                  $this->form_validation->set_rules('addressline2', 'Address Line 2', 'required|trim');
                  $this->form_validation->set_rules('name', 'Reciever Name', 'required|trim');
                  $this->form_validation->set_rules('addresstype', 'Address Type', 'required|trim');
                  $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|max_length[10]');
                  $this->form_validation->set_rules('defaultaddress', 'Default Address', 'trim');

                  if ($this->form_validation->run() == FALSE) {
                    $msg = explode('</p>', validation_errors());
                    $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                  } else {

                    if (!empty($this->input->post('defaultaddress'))) {
                      $default = 'true';
                    } else {
                      $default = 'false';
                    }

                    $updateData = [
                      'state' => $this->input->post('state'),
                      'city' => $this->input->post('city'),
                      'pincode' => $this->input->post('pincode'),
                      'line1' => $this->input->post('addressline1'),
                      'line2' => $this->input->post('addressline2'),
                      'line3' => $this->input->post('addressline3'),
                      'name' => $this->input->post('name'),
                      'address_type' => $this->input->post('addresstype'),
                      'mobile' => $this->input->post('mobile'),
                      'alternate_mobile' => $this->input->post('alternate_mobile'),
                      'default_address' => $default,
                      'modified_at' => $this->data->timestamp
                    ];
                    $updateData = $this->security->xss_clean($updateData);
                    $result = $this->db->where('id', $data['list'][0]->id)->update('tbl_address', $updateData);
                    if ($result) {
                      $output['res'] = 'success';
                      $output['msg'] = 'Data Updated Successfully.';
                      if ($default == 'true') {
                        if ($this->db->get_where('tbl_address', array('userid' => $data['list'][0]->userid))->num_rows() > 0) {
                          $this->db->where('userid', $data['list'][0]->userid)->update('tbl_address', ['default_address' => 'false']);
                          $this->db->where('id', $data['list'][0]->id)->update('tbl_address', ['default_address' => 'true']);
                        }
                      }
                    } else {
                      $output['msg'] = 'Something went wrong in Data Saving.';
                    }
                  }
                }
              }
            }
          }
        } elseif ($action == 'ChangeAddress') {
          $output['res'] = 'error';
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            if (!empty($this->input->post())) {
              $id = $this->input->post('id');
              $updateData = [
                'default_address' => 'true',
                'modified_at' => $this->data->timestamp
              ];

              if ($this->db->where('userid', $userid)->update('tbl_address', ['default_address' => 'false', 'modified_at' => $this->data->timestamp])) {
                if ($this->db->where('id', $id)->update('tbl_address', $updateData)) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Address change successfully.';
                }
              } else {
                $output['res'] = 'error';
                $output['msg'] = 'Unable to change address.';
              }
            }
          }
        } elseif ($action == 'AddGiftWrap') {
          $output['res'] = 'error';

          if (!empty($this->input->post())) {
            $giftwrapData = [
              'giftwrapid' => $this->input->post('giftwrapid'),
              'recipientName' => $this->input->post('recipientName'),
              'message' => $this->input->post('message'),
              'senderName' => $this->input->post('senderName'),
            ];
            $giftJson = json_encode($giftwrapData);
            $updateData = [
              'is_giftwrap' => 'true',
              'giftwrap_details' => $giftJson,
            ];

            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $isUpdate = $this->db->where(['is_status' => 'false', 'is_giftwrap' => 'true', 'userid' => $userid])->update('tbl_cart', $updateData);
            } else {
              $isUpdate = $this->db->where(['is_status' => 'false', 'is_giftwrap' => 'true', 'system_id' => $this->system_id])->update('tbl_cart', $updateData);
            }
            if ($isUpdate) {
              $output['res'] = 'success';
              $output['msg'] = 'Gift wrap added.';
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Unable to add gift wrap.';
            }
          }
        } elseif ($action == 'UpdateGiftWrap') {
          $output['res'] = 'error';
          $userid = $this->userData->id;
          if (!empty($this->input->post())) {
            $giftwrapData = [
              'giftwrapid' => $this->input->post('giftwrapid'),
              'recipientName' => $this->input->post('recipientName'),
              'message' => $this->input->post('message'),
              'senderName' => $this->input->post('senderName'),
            ];
            $giftJson = json_encode($giftwrapData);
            $updateData = [
              'is_giftwrap' => 'true',
              'giftwrap_details' => $giftJson,
            ];
            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $isUpdate = $this->db->where(['is_status' => 'false', 'is_giftwrap' => 'true', 'userid' => $userid])->update('tbl_cart', $updateData);
            } else {
              $isUpdate = $this->db->where(['is_status' => 'false', 'is_giftwrap' => 'true', 'system_id' => $this->system_id])->update('tbl_cart', $updateData);
            }
            if ($isUpdate) {
              $output['res'] = 'success';
              $output['msg'] = 'Gift wrap updated.';
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Unable to update gift wrap.';
            }
          }
        } elseif ($action == 'ApplyCoupon') {
          $output['res'] = 'error';
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            $list = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false'))->result();
            $listInd = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => ''))->result();
            $listCombo = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => 'true'))->result();
            #Check user type
            $subscriber = $this->db->get_where('royal_subscriber', ['userid' => $userid]);
            $subscription = 'false';
            if ($subscriber->num_rows() > 0) {
              $subscriber = $subscriber->row();
              $plan_expire_date = date('y-m-d', strtotime("+" . $subscriber->plan_duration . " months", strtotime($subscriber->created_at)));
              $current_date = date('y-m-d');
              $diff =  date_diff(date_create($current_date), date_create($plan_expire_date))->format("%R%a");
              if ($diff >= 0) {
                $subscription = 'true';
              } else {
                $subscription = 'false';
              }
            }
          } else {
            $list = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false'))->result();
            $listInd = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false', 'is_combo' => ''))->result();
            $listCombo = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false', 'is_combo' => 'true'))->result();
            $subscription = 'false';
          }

          if (!empty($this->input->post('coupon'))) {
            $totalPaidAmount = $this->input->post('total_amount');
            $product_id = explode(',', $this->input->post('product_id'));
            $products = $this->db->where('is_status', 'true')->where_in('id', $product_id)->get('products')->result();

            // Sort the products based on regular selling price
            usort($products, function ($a, $b) {
              return $a->reg_sell_price - $b->reg_sell_price;
            });

            // Get the product with the minimum selling price (first item after sorting)
            $minPriceProduct = $products[0];

            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $eligible_cart_item = $this->db->query("select * from tbl_cart where is_status='false'AND product_id='$minPriceProduct->id' AND (userid='$userid' OR system_id='$this->system_id')")->row();
            } else {
              $eligible_cart_item = $this->db->where(['is_status' => 'false', 'system_id' => $this->system_id, 'product_id' => $minPriceProduct->id])->get('tbl_cart')->row();
            }

            $updateData = [
              'coupon_id' => $this->input->post('coupon'),
              'coupon_status' => 'true',
            ];
            $couponDetails = $this->db->where(['id' => $this->input->post('coupon')])->or_where(['coupon' => $this->input->post('coupon')])->get('tbl_coupon')->row();
            if (!empty($couponDetails)) {

              if ($totalPaidAmount >= $couponDetails->min_order) {
                $apply_status = '';
                if ($couponDetails->coupon_type == 'Buy-one-get-one coupons') {
                  if ($couponDetails->product_type == 'individual') {

                    $product_ids = array_column($listInd, 'product_id');
                    $buy_one_num_rows = $this->db->where(['coupon_id' => $couponDetails->id])->where_in('product_id', $product_ids)->get('coupon_product')->num_rows();

                    if ($buy_one_num_rows < 2) {
                      $apply_status = 'disabled';
                    }
                  } elseif ($couponDetails->product_type == 'combo') {
                    $product_ids = array_column($listCombo, 'product_id');
                    $buy_one_num_rows = $this->db->where(['coupon_id' => $couponDetails->id])->where_in('product_id', $product_ids)->get('coupon_product')->num_rows();
                    if ($buy_one_num_rows < 2) {
                      $apply_status = 'disabled';
                    }
                  }
                }

                if ($apply_status != 'disabled') {

                  #Check coupon product type
                  if (($couponDetails->product_type == 'individual' && $listInd > 0) || ($couponDetails->product_type == 'combo' && $listCombo > 0) || ($couponDetails->product_type == 'all' && $list > 0)) {
                    if (($couponDetails->user_type == 'normal' && $subscription == 'false') || ($couponDetails->user_type == 'royal' && $subscription == 'true') || ($couponDetails->user_type == 'all')) {

                      //Removed previous applied coupon before apply new coupon
                      if ($this->permission == 'true') {
                        $userid = $this->userData->id;
                        $this->db->where(['is_status' => 'false', 'coupon_status' => 'true', 'userid' => $userid])->update('tbl_cart', ['coupon_status' => '', 'coupon_id' => '']);
                      } else {
                        $this->db->where(['is_status' => 'false', 'coupon_status' => 'true', 'system_id' => $this->system_id])->update('tbl_cart', ['coupon_status' => '', 'coupon_id' => '']);
                      }

                      $isUpdate = $this->db->where('id', $eligible_cart_item->id)->update('tbl_cart', $updateData);
                      if ($isUpdate) {
                        $output['res'] = 'success';
                        $output['msg'] = $couponDetails->coupon . ' code applied.';
                      } else {
                        $output['res'] = 'error';
                        $output['msg'] = 'Unable to ' . $couponDetails->coupon . ' code applied.';
                      }
                    } else {
                      $output['res'] = 'error';
                      $output['msg'] = "You did'nt full fill our terms&conditions.";
                    }
                  } else {
                    $output['res'] = 'error';
                    $output['msg'] = "You did'nt full fill our terms&conditions.";
                  }
                } else {
                  $output['res'] = 'error';
                  $output['msg'] = "You did'nt full fill our terms&conditions.";
                }
              } else {
                $output['res'] = 'error';
                $output['msg'] = 'Please increase your cart value to use this coupon.';
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Invalid Coupon Code.';
            }
          } else {
            $updateData = [
              'coupon_status' => '',
              'coupon_id' => '',
            ];

            if ($this->permission == 'true') {
              $userid = $this->userData->id;
              $isUpdate = $this->db->where(['is_status' => 'false', 'coupon_status' => 'true', 'userid' => $userid])->update('tbl_cart', $updateData);
            } else {
              $isUpdate = $this->db->where(['is_status' => 'false', 'coupon_status' => 'true', 'system_id' => $this->system_id])->update('tbl_cart', $updateData);
            }
            $output['res'] = 'success';
            $output['msg'] = 'Coupon Removed !';
          }
        } elseif ($action == 'Checkout') {
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            $userdata = $this->db->where('id', $userid)->get('tbl_user')->row();
            $this->db->where(['system_id' => $this->system_id])->update('tbl_cart', ['userid' => $userid]);

            $subscription = 'false';
            $subscriber = $this->db->get_where('royal_subscriber', ['userid' => $userid]);
            if ($subscriber->num_rows() > 0) {
              $subscriber = $subscriber->row();
              $plan_expire_date = date('y-m-d', strtotime("+" . $subscriber->plan_duration . " months", strtotime($subscriber->created_at)));
              $current_date = date('y-m-d');
              $diff =  date_diff(date_create($current_date), date_create($plan_expire_date))->format("%R%a");
              if ($diff >= 0) {
                $subscription = 'true';
              } else {
                $subscription = 'false';
              }
            }

            #Check Stock of individual product
            $listInd = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => '', 'order_type' => ''))->result();
            if (!empty($listInd)) {
              foreach ($listInd as $each) {
                $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                $id = $this->userData->id;
                #Size Inventory Management
                if ($each->size != 'NA') {
                  $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                  $json_sizestock = json_decode($variant->size);
                  $arr = array();
                  foreach ($json_sizestock as $eachSize) {
                    foreach ($eachSize as $size => $size_stock) {
                      if ($size == $each->size and $size_stock < $each->qty) {
                        $this->db->where('id', $each->id)->update('tbl_cart', ['availability' => 'false']);
                      }
                    }
                  }
                } else {

                  if ($product->stock < $each->qty) {
                    $this->db->where('id', $each->id)->update('tbl_cart', ['availability' => 'false']);
                  }
                }
              }
            }

            #Check Stock of For Combo
            $listCombo = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => 'true', 'availability' => '', 'order_type' => ''))->result();
            if (!empty($listCombo)) {
              foreach ($listCombo as $combo_each) {
                $items = explode(",", $combo_each->product_id);
                $itemsVariant = explode(",", $combo_each->variant_id);
                $sizes = explode(",", $combo_each->size);
                if (!empty($items) and !empty($itemsVariant)) {
                  for ($i = 0; $i < count($items); $i++) {
                    $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                    $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                    $json = json_decode($variants->size, 2);
                    foreach ($json as $jsoneach) {
                      foreach ($jsoneach as $size => $size_stock) {
                        if ($sizes[$i] != 'NA') {
                          if ($size == $sizes[$i]) {
                            if ($size_stock < $combo_each->qty) {
                              $this->db->where('id', $combo_each->id)->update('tbl_cart', ['availability' => 'false']);
                            }
                            break;
                          }
                        } else {
                          if ($product->stock < $combo_each->qty) {
                            $this->db->where('id', $combo_each->id)->update('tbl_cart', ['availability' => 'false']);
                          }
                          break;
                        }
                      }
                    }
                    $is_false = $this->db->get_where('tbl_cart', ['id' => $combo_each->id, 'availability' => 'false'])->num_rows();
                    if ($is_false > 0) {
                      break;
                    }
                  }
                }
              }
            }
            $list = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'availability' => 'false'))->num_rows();
            if ($list > 0) {
              $output['res'] = 'error';
              $output['msg'] = $list . ' product in your cart out of stock/less quantity.';
            } else {
              if (!empty($this->input->post())) {
                $this->form_validation->set_rules('address', 'Address Id', 'required|trim|numeric');
                if ($this->form_validation->run() == FALSE) {
                  $msg = explode('</p>', validation_errors());
                  $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                } else {
                  $addressId = $this->input->post('address');
                  $address = $this->db->get_where('tbl_address', array('id' => $addressId));
                  if ($address->num_rows()) {
                    $address = $address->row();
                    $list = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'availability' => '', 'order_type' => ''))->result();
                    $listInd = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => '', 'availability' => '', 'order_type' => ''))->result();
                    $listCombo = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => 'true', 'availability' => '', 'order_type' => ''))->result();

                    #Fetch Giftwrap Price
                    if (!empty($list)) {
                      foreach ($list as $each) {
                        $giftwrap_price = 0;
                        if ($each->is_giftwrap == 'true' && !empty($each->giftwrap_details)) {
                          $giftDetails = json_decode($each->giftwrap_details);
                          $tbl_giftwrap = $this->db->get_where('tbl_giftwrap', ['id' => $giftDetails->giftwrapid])->row();
                          $giftwrap_price = $tbl_giftwrap->price;
                          break;
                        }
                      }
                    }

                    $cart_details = [];
                    #Fetch total Individual product price behalf of normol and royal user
                    $totalIndividualPrice = 0;
                    $totalIndividualClubCash = 0;
                    $totalIndividualNormolPrice = 0;
                    $totalIndividualMrp = 0;
                    $discount_type = '';
                    if (!empty($listInd)) {
                      foreach ($listInd as $each) {
                        $product = $this->db->get_where('products', array('id' => $each->product_id, 'is_status' => 'true'));
                        if ($product->num_rows() > 0) {
                          $product = $product->row();
                          $icons = explode(',', $product->image1);
                          $id = $this->userData->id;
                          $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id, 'is_status' => 'true'));
                          if ($variant->num_rows() > 0) {
                            $variant = $variant->row();
                            $cartprice = $this->db->get_where('products', array('id' => $each->product_id))->row();

                            #code for check sale is available or not on this product 
                            $saleProduct = $this->db->get_where('sale_product', array('product_id' => $each->product_id, 'is_status' => 'true', 'product_type' => 'individual'))->row();
                            $sale_status = 'false';
                            $sale_user_type = '';
                            $discount_type = '';
                            $sale_id = '';

                            if (!empty($saleProduct)) {
                              $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                              if (!empty($tblSale)) {
                                $current_date = date('Y-m-d H:i:s');
                                if ($this->subscription == 'true') {
                                  $day_limit = $this->db->get_where('manage_content')->row();
                                  $prev_days = "-" . $day_limit->royal_feature_activated_limit . " day";
                                  $start_date = date('Y-m-d H:i:s', strtotime($prev_days, strtotime($tblSale->start_date)));
                                } else {
                                  $start_date = date('Y-m-d H:i:s', strtotime($tblSale->start_date));
                                }
                                $last_date = date('Y-m-d H:i:s', strtotime($tblSale->end_date));
                                if ($current_date >= $start_date and $current_date <= $last_date) {

                                  if ($tblSale->user_type == 'normal' and $subscription == 'false') {
                                    $sale_status = 'true';
                                    $sale_id = $tblSale->id;
                                  } elseif ($tblSale->user_type == 'royal' and $subscription == 'true') {
                                    $sale_status = 'true';
                                    $sale_user_type = 'royal';
                                    $sale_id = $tblSale->id;
                                  } elseif ($tblSale->user_type == 'all') {
                                    $sale_status = 'true';
                                    $sale_id = $tblSale->id;
                                  }

                                  if ($tblSale->discount_type == 'percent') {
                                    $reg_price = $product->reg_sell_price;
                                    $discount = (int)$saleProduct->discount;
                                    $sale_price = $reg_price - (($reg_price / 100) * $discount);
                                    $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                  } elseif ($tblSale->discount_type == 'flat') {
                                    $reg_price = (float)$product->reg_sell_price;
                                    $discount = (float)$saleProduct->discount;
                                    $sale_price = ($reg_price - $discount);
                                    $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                  } elseif ($tblSale->discount_type == 'buy_x_get_y') {
                                    $discount_type = 'buy_x_get_y';
                                  }
                                }
                              }
                            }

                            if ($sale_status == 'true' and $discount_type != 'buy_x_get_y') {
                              $price = $sale_price;
                            } elseif ($subscription == 'true' and $sale_status == 'false') {
                              $price = (int)$cartprice->royal_amt;
                            } else {
                              $price = (int)$cartprice->reg_sell_price;
                            }

                            $totalMrp = (int)$cartprice->mrp * $each->qty;
                            $total = (int)$price * $each->qty;
                            $totalDiscount = (int)(($totalMrp - $total) / $totalMrp) * 100;
                            $totalIndividualPrice += (int)$total;
                            $totalIndividualMrp += (int)$totalMrp;
                            $totalIndividualClubCash += (int)$cartprice->royal_clubcash * $each->qty;
                            $totalIndividualNormolPrice += (int)$cartprice->reg_sell_price * $each->qty;
                            array_push($cart_details, ['id' => $each->id, 'price' => $total, 'is_sale' => $sale_status, 'sale_id' => $sale_id]);
                          }
                        }
                      }
                    }

                    #Fetch total combo product price behalf of normol and royal user
                    $totalComboPrice = 0;
                    $totalComboMrp = 0;
                    $totalComboClubCash = 0;
                    $totalComboNormolPrice = 0;

                    if (!empty($listCombo)) {
                      foreach ($listCombo as $each) {
                        $product = $this->db->get_where('tbl_combo', array('id' => $each->combo_id, 'is_status' => 'true'));
                        if ($product->num_rows() > 0) {
                          $product = $product->row();
                          $icons = explode(',', $product->image);
                          $id = $this->userData->id;
                          $cartprice = $this->db->get_where('tbl_combo', array('id' => $each->combo_id, 'is_status' => 'true'))->row();

                          // code for check sale is available or not on this product 
                          $saleProduct = $this->db->get_where('sale_product', array('product_id' => $each->id, 'is_status' => 'true', 'product_type' => 'combo'))->row();
                          $sale_status = 'false';
                          $sale_user_type = '';
                          $sale_id = '';
                          if (!empty($saleProduct)) {
                            $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                            if (!empty($tblSale)) {
                              $current_date = date('Y-m-d H:i:s');
                              if ($this->subscription == 'true') {
                                $day_limit = $this->db->get_where('manage_content')->row();
                                $prev_days = "-" . $day_limit->royal_feature_activated_limit . " day";
                                $start_date = date('Y-m-d H:i:s', strtotime($prev_days, strtotime($tblSale->start_date)));
                              } else {
                                $start_date = date('Y-m-d H:i:s', strtotime($tblSale->start_date));
                              }
                              $last_date = date('Y-m-d H:i:s', strtotime($tblSale->end_date));
                              if ($current_date >= $start_date and $current_date <= $last_date) {

                                if ($tblSale->user_type == 'normal' and $subscription == 'false') {
                                  $sale_status = 'true';
                                  $sale_id = $tblSale->id;
                                } elseif ($tblSale->user_type == 'royal' and $subscription == 'true') {
                                  $sale_status = 'true';
                                  $sale_user_type = 'royal';
                                  $sale_id = $tblSale->id;
                                } elseif ($tblSale->user_type == 'all') {
                                  $sale_status = 'true';
                                  $sale_id = $tblSale->id;
                                }

                                if ($tblSale->discount_type == 'percent') {
                                  $reg_price = $cartprice->discount_price;
                                  $discount = (int)$saleProduct->discount;
                                  $sale_price = $reg_price - (($reg_price / 100) * $discount);
                                  $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                } elseif ($tblSale->discount_type == 'flat') {
                                  $reg_price = $cartprice->discount_price;
                                  $discount = (int)$saleProduct->discount;
                                  $sale_price = $reg_price -  $discount;
                                  $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                }
                              }
                            }
                          }

                          if ($sale_status == 'true') {
                            $price = $sale_price;
                          } elseif ($subscription == 'true' and $sale_status == 'false') {
                            $price = (int)$cartprice->discount_price;
                          } else {
                            $price = (int)$cartprice->discount_price;
                          }

                          $total = (int)$price * $each->qty;
                          $totalMrp = (int)$cartprice->price * $each->qty;
                          $totalDiscount = (int)(($totalMrp - $total) / $totalMrp) * 100;
                          $totalComboPrice += (int)$total;
                          $totalComboMrp += (int)$totalMrp;
                          $totalComboNormolPrice = (int)$cartprice->discount_price;
                          $totalComboClubCash = (int)0;
                          array_push($cart_details, ['id' => $each->id, 'price' => $total, 'is_sale' => $sale_status, 'sale_id' => $sale_id]);
                        }
                      }
                    }

                    #Ftech total individual+combo product price behalf of normol and royal user
                    $totalProductPrice = 0;
                    $totalPrice = 0;
                    $shippingCharge = 40;
                    if (!empty($totalComboPrice)) {
                      $totalProductPrice += $totalComboPrice;
                    }
                    if (!empty($totalIndividualPrice)) {
                      $totalProductPrice += $totalIndividualPrice;
                    }
                    $totalPrice = (($totalProductPrice + $shippingCharge + $giftwrap_price));

                    #Check is any coupon apply on this purchase
                    $coupon_discount = 0;
                    $apply_status = 'false';
                    $apply_type = '';
                    $apply_id = '';
                    $is_coupon = $this->db->where(['userid' => $userid, 'is_status' => 'false', 'coupon_status' => 'true'])->get('tbl_cart');
                    if ($is_coupon->num_rows() > 0) {
                      $is_coupon = $is_coupon->row();
                      $coupon_id = $is_coupon->coupon_id;
                      $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $coupon_id])->row();
                      if (in_array($couponDetails->id, $prv_applied_coupon) == false) {
                        $expire_date = date('y-m-d', strtotime($couponDetails->end_date));
                        $start_date = date('y-m-d', strtotime($couponDetails->start_date));
                        $current_date = date('y-m-d');
                        if (($current_date >= $start_date && $current_date <= $expire_date) and ($couponDetails->min_order <= $totalPrice)) {
                          if (!empty($couponDetails)) {
                            if ($couponDetails->coupon_type == 'Discount on minimum purchase' || $couponDetails->coupon_type == 'New Customer Coupons' || $couponDetails->coupon_type == 'Loyalty coupons'  || $couponDetails->coupon_type == 'Get X% or XX rs on prebook order') {
                              if ($couponDetails->type == 'flat') {
                                $coupon_discount = (int)$couponDetails->discount;
                              } elseif ($couponDetails->type == 'percent') {
                                $coupon_discount = ($totalPrice * $couponDetails->discount) / 100;
                                if ($coupon_discount > $couponDetails->max_discount) {
                                  $coupon_discount = (int)$couponDetails->max_discount;
                                }
                              }
                            } elseif ($couponDetails->coupon_type == 'Free shipping coupon') {
                              $coupon_discount = $shippingCharge;
                            } elseif ($couponDetails->coupon_type == 'Buy-one-get-one coupons') {
                              if ($couponDetails->product_type == 'individual') {
                                $product_data = $this->db->get_where('products', ['id' => $is_coupon->product_id])->row();
                                #code for check sale is available or not on this product 
                                $saleProduct = $this->db->get_where('sale_product', array('product_id' => $is_coupon->product_id, 'is_status' => 'true', 'product_type' => 'individual'))->row();
                                $sale_status = 'false';
                                $sale_user_type = '';
                                $discount_type = '';
                                $sale_id = '';

                                if (!empty($saleProduct)) {
                                  $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                                  if (!empty($tblSale)) {
                                    $current_date = date('Y-m-d H:i:s');
                                    if ($this->subscription == 'true') {
                                      $day_limit = $this->db->get_where('manage_content')->row();
                                      $prev_days = "-" . $day_limit->royal_feature_activated_limit . " day";
                                      $start_date = date('Y-m-d H:i:s', strtotime($prev_days, strtotime($tblSale->start_date)));
                                    } else {
                                      $start_date = date('Y-m-d H:i:s', strtotime($tblSale->start_date));
                                    }
                                    $last_date = date('Y-m-d H:i:s', strtotime($tblSale->end_date));
                                    if ($current_date >= $start_date and $current_date <= $last_date) {

                                      if ($tblSale->user_type == 'normal' and $subscription == 'false') {
                                        $sale_status = 'true';
                                        $sale_id = $tblSale->id;
                                      } elseif ($tblSale->user_type == 'royal' and $subscription == 'true') {
                                        $sale_status = 'true';
                                        $sale_user_type = 'royal';
                                        $sale_id = $tblSale->id;
                                      } elseif ($tblSale->user_type == 'all') {
                                        $sale_status = 'true';
                                        $sale_id = $tblSale->id;
                                      }

                                      if ($tblSale->discount_type == 'percent') {
                                        $reg_price = $product_data->reg_sell_price;
                                        $discount = (int)$saleProduct->discount;
                                        $sale_price = $reg_price - (($reg_price / 100) * $discount);
                                        $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                      } elseif ($tblSale->discount_type == 'flat') {
                                        $reg_price = (float)$product_data->reg_sell_price;
                                        $discount = (float)$saleProduct->discount;
                                        $sale_price = ($reg_price - $discount);
                                        $saleprice = ((floor($saleprice / 50) * 50) - 1);
                                      } elseif ($tblSale->discount_type == 'buy_x_get_y') {
                                        $discount_type = 'buy_x_get_y';
                                      }
                                    }
                                  }
                                }

                                if ($sale_status == 'true' and $discount_type != 'buy_x_get_y') {
                                  $price = $sale_price;
                                } elseif ($subscription == 'true' and $sale_status == 'false') {
                                  $price = (int)$cartprice->royal_amt;
                                } else {
                                  $price = (int)$cartprice->reg_sell_price;
                                }
                              } elseif ($couponDetails->product_type == 'combo') {
                                $product = $this->db->get_where('tbl_combo', ['id' => $is_coupon->combo_id])->row();
                                $price = $product->discount_price;
                              }
                              $coupon_discount = $price;
                            }

                            $apply_status = 'true';
                            $apply_type = 'coupon_code';
                            $apply_id = $couponDetails->id;
                          }
                        } else {
                          $updateData = [
                            'coupon_id' => "",
                            'coupon_status' => "",
                          ];
                          $isUpdate = $this->db->where(['is_status' => 'false', 'userid' => $userid])->update('tbl_cart', $updateData);
                        }
                      }
                    }

                    #check Cashback Availableity
                    $earn_cashback = 0;
                    $cashback = $this->isCashback($listInd, $listCombo, $userid);
                    if (!empty($cashback) && $apply_status == 'false') {
                      foreach ($cashback as $eachcashback) {
                        if (in_array($eachcashback->id, $prv_applied_cashback) == false) {
                          if ($totalPrice >= $eachcashback->min_order) {
                            if (($eachcashback->user_type == 'normal' && $subscription == 'false') || ($eachcashback->user_type == 'royal' && $subscription == 'true') || ($eachcashback->user_type == 'all')) {
                              $expire_date = date('y-m-d', strtotime($eachcashback->end_date));
                              $start_date = date('y-m-d', strtotime($eachcashback->start_date));
                              $current_date = date('y-m-d');
                              if ($current_date >= $start_date && $current_date <= $expire_date) {
                                if ($eachcashback->type == 'flat') {
                                  $earn_cashback = $eachcashback->discount;
                                } elseif ($eachcashback->type == 'percent') {
                                  $earn_cashback = ($totalPrice * $eachcashback->discount) / 100;
                                  if ($earn_cashback > $eachcashback->max_discount) {
                                    $earn_cashback = $eachcashback->max_discount;
                                  }
                                }

                                $apply_status = 'true';
                                $apply_type = 'cashback';
                                $apply_id = $eachcashback->id;
                                break;
                              }
                            }
                          }
                        }
                      }
                    }

                    #Reward Availability
                    $earn_point = 0;
                    $reward = $this->isReward($listInd, $listCombo, $userid);
                    if (!empty($reward) && $apply_status == 'false') {
                      foreach ($reward as $eachreward) {
                        if (in_array($eachreward->id, $prv_applied_reward) == false) {
                          if ($totalPrice >= $eachreward->min_order) {
                            if (($eachreward->user_type == 'normal' && $subscription == 'false') || ($eachreward->user_type == 'royal' && $subscription == 'true') || ($eachreward->user_type == 'all')) {
                              $expire_date = date('y-m-d', strtotime($eachreward->end_date));
                              $start_date = date('y-m-d', strtotime($eachreward->start_date));
                              $current_date = date('y-m-d');

                              if ($current_date >= $start_date && $current_date <= $expire_date) {
                                $earn_point = $eachreward->point;
                                $apply_status = 'true';
                                $apply_type = 'reward';
                                $apply_id = $eachreward->id;
                                break;
                              }
                            }
                          }
                        }
                      }
                    }

                    #Check User Coupon 
                    $user_coupon = $this->db->get_where('user_coupon', ['user_id' => $userid, 'is_status' => 'true'])->result();
                    if (!empty($user_coupon) && $apply_status == 'false') {
                      foreach ($user_coupon as $eachCoupon) {
                        $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $eachCoupon->coupon_id, 'is_status' => 'true'])->row();
                        if (!empty($couponDetails)) {
                          $expire_date = date('y-m-d', strtotime($couponDetails->end_date . "+15 days"));
                          $start_date = date('y-m-d', strtotime($couponDetails->start_date));
                          $current_date = date('y-m-d');
                          if ($current_date >= $start_date && $current_date <= $expire_date) {
                            if ($totalPrice >= $couponDetails->min_order) {
                              #Check coupon product type
                              if (($couponDetails->product_type == 'individual' && count($listInd) > 0) || ($couponDetails->product_type == 'combo' && count($listCombo) > 0) || ($couponDetails->product_type == 'all' && count($list) > 0)) {
                                if (($couponDetails->user_type == 'normal' && $subscription == 'false') || ($couponDetails->user_type == 'royal' && $subscription == 'true') || ($couponDetails->user_type == 'all')) {

                                  if ($couponDetails->coupon_type == 'Discount on minimum purchase' || $couponDetails->coupon_type == 'New Customer Coupons' || $couponDetails->coupon_type == 'Loyalty coupons'  || $couponDetails->coupon_type == 'Get X% or XX rs on prebook order') {
                                    if ($couponDetails->type == 'flat') {
                                      $coupon_discount = $couponDetails->discount;
                                    } elseif ($couponDetails->type == 'percent') {
                                      $coupon_discount = ($totalPrice * $couponDetails->discount) / 100;
                                      if ($coupon_discount > $couponDetails->max_discount) {
                                        $coupon_discount = $couponDetails->max_discount;
                                      }
                                    }
                                  } elseif ($couponDetails->coupon_type == 'Free shipping coupon') {
                                    $coupon_discount = $shippingCharge;
                                  }

                                  $apply_status = 'true';
                                  $apply_type = 'user_coupon';
                                  $apply_id = $eachCoupon->coupon_id;
                                  break;
                                }
                              }
                            }
                          }
                        }
                      }
                    }

                    # Check Direct Apply Coupon
                    $couponDetails = $this->db->get_where('tbl_coupon', ['is_status' => 'true', 'complementry_type' => 'offer'])->result();
                    if (!empty($couponDetails) && $apply_status == 'false') {
                      foreach ($couponDetails as $each) {
                        if (in_array($each->id, $prv_applied_coupon) == false) {
                          if ($totalPrice >= $each->min_order) {
                            #Check coupon product type
                            if (($each->product_type == 'individual' && count($listInd) > 0) || ($each->product_type == 'combo' && count($listCombo) > 0) || ($each->product_type == 'all' && count($list) > 0)) {
                              if (($each->user_type == 'normal' && $subscription == 'false') || ($each->user_type == 'royal' && $subscription == 'true') || ($each->user_type == 'all')) {
                                if ($each->apply_type == 'before') {
                                  $expire_date = date('y-m-d', strtotime($each->end_date));
                                  $start_date = date('y-m-d', strtotime($each->start_date));
                                  $current_date = date('y-m-d');
                                  if ($current_date >= $start_date && $current_date <= $expire_date0) {

                                    if ($each->coupon_type == 'Discount on minimum purchase' || $each->coupon_type == 'New Customer Coupons' || $each->coupon_type == 'Loyalty coupons'  || $each->coupon_type == 'Get X% or XX rs on prebook order') {
                                      if ($each->type == 'flat') {
                                        $coupon_discount = $each->discount;
                                      } elseif ($each->type == 'percent') {
                                        $coupon_discount = ($totalPrice * $each->discount) / 100;
                                        if ($coupon_discount > $each->max_discount) {
                                          $coupon_discount = $couponDetails->max_discount;
                                        }
                                      }
                                    } elseif ($each->coupon_type == 'Free shipping coupon') {
                                      $coupon_discount = $shippingCharge;
                                    }
                                    $apply_status = 'true';
                                    $apply_type = 'offer_apply';
                                    $apply_id = $each->id;
                                    break;
                                  }
                                } elseif ($each->apply_type == 'after') {

                                  $expire_date = date('y-m-d', strtotime($each->end_date));
                                  $start_date = date('y-m-d', strtotime($each->start_date));
                                  $current_date = date('y-m-d');
                                  if ($current_date >= $start_date && $current_date <= $expire_date) {

                                    $apply_status = 'true';
                                    $apply_type = 'store_user_coupon';
                                    $apply_id = $each->id;
                                  }
                                  break;
                                }
                              }
                            }
                          }
                        }
                      }
                    }

                    $wallet_discount = 0;
                    if (!empty($this->input->post('wallet_discount'))) {
                      $wallet_apply_type = $this->input->post('wallet_discount');
                    } else {
                      $wallet_apply_type = "";
                    }
                    $reward_points = 0;
                    $cashback = 0;
                    $eqv_cashback = 0;
                    $user_wallet = $this->db->get_where('user_wallet', ['userid' => $userid, 'is_status' => 'true'])->result();
                    $reward_point_setting = $this->db->get_where('reward_point_setting')->row();
                    $used_limit = $this->db->get_where('manage_content')->row();
                    if (!empty($user_wallet)) {
                      if (!empty($user_wallet)) {
                        foreach ($user_wallet as $wallet) {
                          if (!empty($wallet->coins)) {
                            $reward_points += (int)$wallet->coins;
                          }
                          if (!empty($wallet->balance)) {
                            $cashback += (int)$wallet->balance;
                          }
                        }
                      }
                    }

                    if (!empty($wallet_apply_type)) {
                      if ($wallet_apply_type == 'cashback') {
                        if ($cashback >= $used_limit->cashback_used_limit) {
                          $wallet_discount = $used_limit->cashback_used_limit;
                        }
                      } elseif ($wallet_apply_type == 'reward') {
                        if ($reward_points >= $used_limit->reward_used_limit) {
                          $wallet_discount = (int)(($reward_point_setting->reward_value) * $used_limit->reward_used_limit);
                        }
                      }
                    }

                    $totalPrice -= (int)($coupon_discount);
                    $amount = (int)$totalPrice - (int)round($wallet_discount, 0);
                    $address = json_encode($address);
                    $orderid = "OD_Slick" . rand(1000, 9999) . time();
                    $paymentOptions = $this->input->post('pay_mode');
                    if ($paymentOptions == 'online') {

                      $rzp_orderid = $this->razorpay->getRazorpayOrderID($orderid, $amount);
                    } else {
                      $rzp_orderid = '';
                    }

                    $this->data->order_id = $orderid;
                    if (!empty($list[0]->coupon_id)) {
                      $coupon_id = $list[0]->coupon_id;
                    } else {
                      $coupon_id = "";
                    }

                    if ($paymentOptions == 'online') {
                      $data_arr = array(
                        "amount" => $amount,
                        "paid_amount" => $amount,
                        "due_amount" => 0,
                        "amount" => $amount,
                        "product_price" => $totalProductPrice,
                        "giftwrap_price" => $giftwrap_price,
                        "shipping_charge" => $shippingCharge,
                        "coupon_discount" => $coupon_discount,
                        "cashback" => $earn_cashback,
                        "reward" => $earn_point,
                        "couponid" => $coupon_id,
                        "address" => $address,
                        "userid" => $userdata->id,
                        "orderid" => $orderid,
                        "pay_mode" => $paymentOptions,
                        "order_status" => 'pending',
                        "rzp_orderid" => $rzp_orderid,
                        "rzp_paymentid" => 'pending',
                        "wallet_apply_type" => $wallet_apply_type,
                        "wallet_discount" => $wallet_discount,
                        "PaymentStatus" => "pending",
                        "is_status" => 'true',
                        "created_at" => $this->data->timestamp,
                        "modified_at" => $this->data->timestamp
                      );

                      $rzpOrderData = $this->razorpay->getRazorpayOrder($rzp_orderid);
                      if ($rzpOrderData) {
                        $data['baseUrl'] = base_url();
                        $data['rzp_api_key'] = $this->razorpay->rzp_api_key;
                        $data['rzp_api_secret'] = $this->razorpay->rzp_api_secret;
                        $data['rzpAmount'] = $rzpOrderData->amount;
                        $data['rzpOrderId'] = $rzpOrderData->id;
                        $data['enrollData'] = (object) $data_arr;
                        $data['cart_details'] = (object)$cart_details;
                        $data['apply_status'] = $apply_status;
                        $data['apply_type'] = $apply_type;
                        $data['apply_id'] = $apply_id;
                        $data['product'] = 'SlickPattern';
                        $data['description'] = "Payment For Shopping at SlickPattern";
                        $data['logo'] = base_url('public/images/logo/logo.png');

                        $output['res'] = 'pay';
                        $output['msg'] = 'Please Pay';
                        $output['data'] = $data;
                      } else {
                        $output['msg'] = 'Invalid Order.';
                      }
                    } else {

                      $data_arr = array(
                        "amount" => $amount,
                        "paid_amount" => 0,
                        "due_amount" => $amount,
                        "product_price" => $totalProductPrice,
                        "giftwrap_price" => $giftwrap_price,
                        "shipping_charge" => $shippingCharge,
                        "coupon_discount" => $coupon_discount,
                        "cashback" => $earn_cashback,
                        "reward" => $earn_point,
                        "couponid" => $coupon_id,
                        "address" => $address,
                        "userid" => $userdata->id,
                        "orderid" => $orderid,
                        "pay_mode" => $paymentOptions,
                        "order_status" => 'pending',
                        "rzp_orderid" => $rzp_orderid,
                        "rzp_paymentid" => 'pending',
                        "PaymentStatus" => "pending",
                        "wallet_apply_type" => $wallet_apply_type,
                        "wallet_discount" => $wallet_discount,
                        "is_status" => 'true',
                        "created_at" => $this->data->timestamp,
                        "modified_at" => $this->data->timestamp
                      );

                      if ($this->db->insert('tbl_order', $data_arr)) {
                        if ($this->db->where(array("userid" => $userdata->id, 'is_status' => 'false', 'availability' => ''))->update('tbl_cart', array("orderid" => $orderid, "is_status" => 'true', "modified_at" => $this->data->timestamp))) {
                          #update cart price details
                          if (!empty($cart_details)) {
                            $this->db->update_batch('tbl_cart', $cart_details, 'id');
                          }

                          #Size And Sale Inventory Management For Individual
                          $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => '', 'availability' => ''))->result();
                          if (!empty($IndCart)) {
                            foreach ($IndCart as $each) {

                              #Manage Sale Inventory
                              if ($each->sale_status == 'true') {
                                $saleDetails = $this->db->get_where('sale_product', ['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->row();
                                if (!empty($saleDetails)) {
                                  $updateQty = $saleDetails->quantity - 1;
                                  $this->db->where(['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->update('sale_product', ['quantity' => $updateQty]);
                                  if ($updateQty < 1) {
                                    $this->db->where(['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->update('sale_product', ['is_status' => 'false']);
                                  }
                                }
                              }

                              $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                              $id = $this->userData->id;
                              #Size Inventory Management
                              if ($each->size != 'NA') {
                                $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                                $json_sizestock = json_decode($variant->size);
                                $arr = array();
                                $count = 0;
                                foreach ($json_sizestock as $eachSize) {
                                  foreach ($eachSize as $size => $size_stock) {
                                    if ($size == $each->size) {
                                      $size_count = ($size_stock - $each->qty);
                                      array_push($arr, array($size => $size_count));
                                      if ($size_count < 1) {
                                        $count++;
                                      }
                                    } else {
                                      array_push($arr, array($size => $size_stock));
                                      if ($size_stock < 1) {
                                        $count++;
                                      }
                                    }
                                  }
                                }
                                #update status and stock quantity of product variant 
                                if (count($json_sizestock) == $count) {
                                  $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                  # update status combo product 
                                  $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                                  if (!empty($ComboStock)) {
                                    foreach ($ComboStock as $stock) {
                                      $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                    }
                                  }
                                } else {
                                  $this->db->where('id', $each->variant_id)->update('product_variant', array('size' => json_encode($arr)));
                                }
                              } else {
                                $updatedStock = ($product->stock - $each->qty);
                                if ($updatedStock < 1) {
                                  $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                                } else {
                                  $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock));
                                }
                              }
                            }
                          }

                          #Size Inventory Management For Combo
                          $id = $this->userData->id;
                          $ComboCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => 'true', 'availability' => ''))->result();
                          if (!empty($ComboCart)) {
                            foreach ($ComboCart as $each) {
                              #Manage Sale Inventory
                              if ($each->sale_status == 'true') {
                                $saleDetails = $this->db->get_where('sale_product', ['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->row();
                                if (!empty($saleDetails)) {
                                  $updateQty = $saleDetails->quantity - 1;
                                  $this->db->where(['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->update('sale_product', ['quantity' => $updateQty]);
                                  if ($updateQty < 1) {
                                    $this->db->where(['product_id' => $each->product_id, 'sale_id' => $each->sale_id])->update('sale_product', ['is_status' => 'false']);
                                  }
                                }
                              }

                              $items = explode(",", $each->product_id);
                              $itemsVariant = explode(",", $each->variant_id);
                              $sizes = explode(",", $each->size);
                              if (!empty($items) and !empty($itemsVariant)) {
                                for ($i = 0; $i < count($items); $i++) {
                                  $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                                  $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                                  $json_sizestock = json_decode($variants->size);
                                  if ($sizes[$i] != 'NA') {
                                    $arr = array();
                                    $count = 0;
                                    foreach ($json_sizestock as $eachSize) {
                                      foreach ($eachSize as $size => $size_stock) {
                                        if ($size == $sizes[$i]) {
                                          $size_count = ($size_stock - $each->qty);
                                          array_push($arr, array($size => $size_count));
                                          if ($size_count < 1) {
                                            $count++;
                                          }
                                        } else {
                                          array_push($arr, array($size => $size_stock));
                                          if ($size_stock < 1) {
                                            $count++;
                                          }
                                        }
                                      }
                                    }
                                    #update status and stock quantity of product variant 
                                    if (count($json_sizestock) == $count) {
                                      $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                                      # update status combo product 
                                      $ComboStock = $this->db->get_where('combo_item', ['product_id' => $items[$i], 'variant_id' => $itemsVariant[$i], 'is_status' => 'true'])->result();
                                      if (!empty($ComboStock)) {
                                        foreach ($ComboStock as $stock) {
                                          $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                                        }
                                      }
                                    } else {
                                      $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('size' => json_encode($arr)));
                                    }
                                  } else {
                                    $updatedStock = ($product->stock - $each->qty);
                                    if ($updatedStock < 1) {
                                      $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                                    } else {
                                      $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock));
                                    }
                                  }
                                }
                              }
                            }
                          }

                          #Coupon Inventory Management
                          if ($apply_status == 'true') {
                            $this->db->where('orderid', $orderid)->update('tbl_order', ['giveway_type' => $apply_type, 'couponid' => $apply_id]);
                            if ($apply_type == 'cashback') {

                              $cashback = $this->db->get_where('manage_cashback', ['id' => $apply_id])->row();
                              $upQty = $cashback->cashback_count - 1;
                              if ($upQty < 1) {
                                $cashback_status = 'false';
                              } else {
                                $cashback_status = 'true';
                              }
                              $this->db->where(['id' => $apply_id])->update('manage_cashback', ['cashback_count' => $upQty, 'is_status' => $cashback_status]);
                            } elseif ($apply_type == 'reward') {
                              $reward = $this->db->get_where('reward_point', ['id' => $apply_id])->row();
                              $upQty = $reward->reward_count - 1;
                              if ($upQty < 1) {
                                $reward_status = 'false';
                              } else {
                                $reward_status = 'true';
                              }
                              $this->db->where(['id' => $apply_id])->update('reward_point', ['reward_count' => $upQty, 'is_status' => $reward_status]);
                            } elseif ($apply_type == 'store_user_coupon') {

                              #Coupon Inventory Management
                              if (!empty($apply_id)) {
                                $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $apply_id, 'is_status' => 'true'])->row();
                                $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                                $coupon_status = 'true';
                                if ($CouponQty < 1) {
                                  $coupon_status = 'false';
                                } else {
                                  $coupon_status = 'true';
                                }
                                $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                              }
                            } elseif ($apply_type == 'user_coupon') {
                              $this->db->where(['coupon_id' => $apply_id])->update('user_coupon', ['is_status' => 'false']);
                            } elseif ($apply_type == 'offer_apply') {
                              $is_update = $this->db->where(['is_status' => 'false', 'userid' => $userid])->update('tbl_cart', $OfferCoupon);
                              if ($is_update) {
                                if (!empty($apply_id)) {
                                  $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $apply_id, 'is_status' => 'true'])->row();
                                  $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                                  $coupon_status = 'true';
                                  if ($CouponQty < 1) {
                                    $coupon_status = 'false';
                                  } else {
                                    $coupon_status = 'true';
                                  }
                                  $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                                }
                              }
                            } else {
                              if (!empty($list[0]->coupon_id)) {
                                $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $list[0]->coupon_id, 'is_status' => 'true'])->row();
                                $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                                $coupon_status = 'true';
                                if ($CouponQty < 1) {
                                  $coupon_status = 'false';
                                } else {
                                  $coupon_status = 'true';
                                }
                                $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                              }
                            }
                          }

                          #User wallet Management
                          $user_wallet = $this->db->get_where('user_wallet', ['userid' => $userid, 'is_status' => 'true'])->result();
                          $order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
                          $reward_point_setting = $this->db->get_where('reward_point_setting')->row();
                          if (!empty($order_details)) {
                            if ($order_details->wallet_apply_type == 'cashback') {
                              $due = (int)$order_details->wallet_discount;
                            } else {
                              $due = (int)($order_details->wallet_discount / $reward_point_setting->reward_value);
                              $due = round($due, 0);
                            }
                            if (!empty($user_wallet)) {
                              foreach ($user_wallet as $wallet) {
                                if ($wallet->is_status == 'true') {
                                  if ($order_details->wallet_apply_type == 'reward') {
                                    if ($wallet->coins != '' && $wallet->coins != '0') {
                                      if ($due <= 0) {
                                        break;
                                      } else {
                                        if ($due >= $wallet->coins) {
                                          $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'false', 'coins' => '0']);
                                          if ($is_update) {
                                            $due -= (int)$wallet->coins;
                                          }
                                        } elseif ($due < $wallet->coins) {
                                          $update = ($wallet->coins - $due);
                                          $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'true', 'coins' => $update]);
                                          if ($is_update) {
                                            $due -= (int)$wallet->coins;
                                          }
                                        }
                                      }
                                    }
                                  } elseif ($order_details->wallet_apply_type == 'cashback') {
                                    if ($wallet->balance != '' && $wallet->balance != '0') {
                                      if ($due <= 0) {
                                        break;
                                      } else {
                                        if ($due >= $wallet->balance) {
                                          $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'false', 'balance' => '0']);
                                          if ($is_update) {
                                            $due -= (int)$wallet->balance;
                                          }
                                        } elseif ($due < $wallet->balance) {
                                          $update = ($wallet->balance - $due);
                                          $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'true', 'balance' => $update]);
                                          if ($is_update) {
                                            $due -= (int)$wallet->balance;
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }

                          $output['redirect'] = base_url('Home/Order');
                          $output['res'] = 'success';
                          $output['msg'] = 'Order Successfully';
                        } else {
                          $output['msg'] = 'Something Went Wrong';
                        }
                      } else {
                        $output['msg'] = 'something went wrong!';
                      }
                    }
                  } else {
                    $output['res'] = 'success';
                    $output['msg'] = 'Invalid Address';
                  }
                }
              } else {
                $output['res'] = 'error1';
                $output['msg'] = 'Data Is Required.';
              }
            }
          } else {
            $output['res'] = 'error';
            $output['msg'] = 'Please login to continue.';
          }
        }
        echo json_encode([$output]);
      } else {
        if ($this->permission == 'true') {
          $userid = $this->userData->id;
          $data['addresslist'] = $this->db->get_where('tbl_address', array('userid' => $userid, 'is_status' => 'true'))->result();
          $data['list'] = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND is_status='false' AND order_type=''")->result();;
          $data['listInd'] = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND is_status='false' AND is_combo='' AND order_type=''")->result();
          $data['listCombo'] = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND is_status='false' AND is_combo='true' AND order_type=''")->result();
          $data['out_of_stock'] = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND is_status='false' AND availability='false'")->result();
          $data['wishlist'] = $this->db->query("select * from tbl_wishlist where (userid='$userid' OR system_id='$this->system_id') AND is_status='true'")->result();
          $data['user_wallet'] = $this->db->get_where('user_wallet', ['is_status' => 'true', 'userid' => $userid])->result();

          if ($this->sitepermission->coupon) {
            $data['coupon'] = $this->isCoupon($data['listInd'], $data['listCombo'], $userid);
            $data['user_coupon'] = $this->db->get_where('user_coupon', ['is_status' => 'true', 'user_id' => $userid])->result();
          } else {
            $data['coupon'] = '';
            $data['user_coupon'] = '';
          }

          if ($this->sitepermission->cashback) {
            $data['cashback'] = $this->isCashback($data['listInd'], $data['listCombo'], $userid);
          } else {
            $data['cashback'] = '';
          }

          if ($this->sitepermission->reward) {
            $data['reward'] = $this->isReward($data['listInd'], $data['listCombo'], $userid);
          } else {
            $data['reward'] = '';
          }
        } else {
          $data['list'] = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false', 'order_type' => ''))->result();
          $data['listInd'] = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false', 'is_combo' => '', 'order_type' => ''))->result();
          $data['listCombo'] = $this->db->get_where('tbl_cart', array('system_id' => $this->system_id, 'is_status' => 'false', 'is_combo' => 'true', 'order_type' => ''))->result();
          $data['out_of_stock'] = $this->db->query("select * from tbl_cart where system_id='$this->system_id' AND is_status='false' AND availability='false'")->result();
          $data['wishlist'] = $this->db->get_where('tbl_wishlist', array('system_id' => $this->system_id, 'is_status' => 'true'))->result();
          $data['user_coupon'] = "";
          $data['coupon'] = "";
          $data['cashback'] = "";
        }

        $data['giftwrap'] = $this->db->get_where('tbl_giftwrap')->result();
        $data['royalcard'] = $this->db->get_where('subscription_plan')->result();
        $data['prv_applied_coupon'] = $prv_applied_coupon;
        $data['prv_applied_cashback'] = $prv_applied_cashback;
        $data['prv_applied_reward'] = $prv_applied_reward;
        $this->load->view("Home/Cart1", $data);
      }
    }
  }

  public function isCoupon($listInd, $listCombo, $userid)
  {
    $IndividualProductIds = array_column($listInd, 'product_id');
    $ComboProductIds = array_column($listCombo, 'combo_id');

    //Fetch Individual Product's Coupon
    $couponIndividual = [];
    $couponIndIds = []; //For getting all coupon id based on userid
    if (!empty($IndividualProductIds)) {
      $couponIndProduct = $this->db->order_by('id', 'DESC')->group_by('coupon_id')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('product_id', $IndividualProductIds)->get('coupon_product')->result();
      if (!empty($couponIndProduct)) {
        foreach ($couponIndProduct as $eachIndCoupon) {
          $userids = explode(',', $eachIndCoupon->userid);
          if (in_array($userid, $userids)) {
            array_push($couponIndIds, $eachIndCoupon->coupon_id);
          }
        }
      }

      if (!empty($couponIndIds)) {
        $couponIndividual = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('id', $couponIndIds)->get('tbl_coupon')->result();
      }
    }

    //Fetch Combo Product's Coupon
    $couponCombo = [];
    $couponComboIds = [];
    if (!empty($ComboProductIds)) {
      $couponComboProduct = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('product_id', $ComboProductIds)->get('coupon_product')->result();
      if (!empty($couponComboProduct)) {
        foreach ($couponComboProduct as $eachComboCoupon) {
          $userids = explode(',', $eachComboCoupon->userid);
          if (in_array($userid, $userids)) {
            array_push($couponComboIds, $eachComboCoupon->coupon_id);
          }
        }
      }
      if (!empty($couponComboIds)) {
        $couponCombo = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('id', $couponComboIds)->get('tbl_coupon')->result();
      }
    }

    return array_merge($couponIndividual, $couponCombo);
  }

  public function isCashback($listInd, $listCombo, $userid)
  {
    $IndividualProductIds = array_column($listInd, 'product_id');
    $ComboProductIds = array_column($listCombo, 'combo_id');
    //Fetch Individual Product's Cashback
    $cashbackIndividual = [];
    $cashbackIndIds = []; //For getting all coupon id based on userid
    if (!empty($IndividualProductIds)) {
      $cashbackIndProduct = $this->db->order_by('id', 'DESC')->group_by('cashback_id')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('product_id', $IndividualProductIds)->get('cashback_product')->result();
      if (!empty($cashbackIndProduct)) {
        foreach ($cashbackIndProduct as $eachIndCashback) {
          $userids = explode(',', $eachIndCashback->userid);
          if (in_array($userid, $userids)) {
            array_push($cashbackIndIds, $eachIndCashback->cashback_id);
          }
        }
      }

      if (!empty($cashbackIndIds)) {
        $cashbackIndividual = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('id', $cashbackIndIds)->get('manage_cashback')->result();
      }
    }

    //Fetch Combo Product's Coupon
    $cashbackCombo = [];
    $cashbackComboIds = [];
    if (!empty($ComboProductIds)) {
      $cashbackComboProduct = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('product_id', $ComboProductIds)->get('cashback_product')->result();
      if (!empty($cashbackComboProduct)) {
        foreach ($cashbackComboProduct as $eachComboCashback) {
          $userids = explode(',', $eachComboCashback->userid);
          if (in_array($userid, $userids)) {
            array_push($cashbackComboIds, $eachComboCashback->cashback_id);
          }
        }
      }
      if (!empty($cashbackComboIds)) {
        $cashbackCombo = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('id', $cashbackComboIds)->get('manage_cashback')->result();
      }
    }

    return array_merge($cashbackIndividual, $cashbackCombo);
  }

  public function isReward($listInd, $listCombo, $userid)
  {
    $IndividualProductIds = array_column($listInd, 'product_id');
    $ComboProductIds = array_column($listCombo, 'combo_id');
    //Fetch Individual Product's Cashback
    $rewardIndividual = [];
    $rewardIndIds = []; //For getting all coupon id based on userid
    if (!empty($IndividualProductIds)) {
      $rewardIndProduct = $this->db->order_by('id', 'DESC')->group_by('reward_id')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('product_id', $IndividualProductIds)->get('reward_product')->result();
      if (!empty($rewardIndProduct)) {
        foreach ($rewardIndProduct as $eachIndReward) {
          $userids = explode(',', $eachIndReward->userid);
          if (in_array($userid, $userids)) {
            array_push($rewardIndIds, $eachIndReward->reward_id);
          }
        }
      }

      if (!empty($rewardIndIds)) {
        $rewardIndividual = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'individual', 'is_status' => 'true'))->where_in('id', $rewardIndIds)->get('reward_point')->result();
      }
    }

    //Fetch Combo Product's Coupon
    $rewardCombo = [];
    $rewardComboIds = [];
    if (!empty($ComboProductIds)) {
      $rewardComboProduct = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('product_id', $ComboProductIds)->get('reward_product')->result();
      if (!empty($rewardComboProduct)) {
        foreach ($rewardComboProduct as $eachComboReward) {
          $userids = explode(',', $eachComboReward->userid);
          if (in_array($userid, $userids)) {
            array_push($rewardComboIds, $eachComboReward->reward_id);
          }
        }
      }
      if (!empty($rewardComboIds)) {
        $rewardCombo = $this->db->order_by('id', 'DESC')->where(array('product_type' => 'combo', 'is_status' => 'true'))->where_in('id', $rewardComboIds)->get('reward_point')->result();
      }
    }
    return array_merge($rewardIndividual, $rewardCombo);
  }

  public function GetOtpCode()
  {
    $output['res'] = "error";
    $output['msg'] = "";

    if (!empty($this->input->post('mobile'))) {
      $this->form_validation->set_rules('mobile', 'Mobile No', 'min_length[10]|max_length[10]|required|trim|numeric');

      if ($this->form_validation->run() == false) {
        $msg = explode('</p>', validation_errors());
        $output['msg'] = str_ireplace('<p>', '', $msg[0]);
      } else {
        $mobile = $this->input->post('mobile');

        $data = $this->db->get_where('tbl_user', array('mobile' => $mobile));
        if ($data->num_rows() > 0) {
          $data = $data->row();
          if ($data->is_status == 'true') {
            $updateData = [
              'otp' => $this->data->otp,
            ];
            if ($this->db->where('mobile', $mobile)->update('tbl_user', $updateData)) {
              $output['res'] = "success";
              $output['msg'] = "OTP Sent To Your Mobile No.";
            } else {
              $output['msg'] = "Something Went Wrong";
            }
          } else {
            $output['res'] = "error";
            $output['msg'] = "This Account Is Blocked";
          }
        } else {
          $output['res'] = "error";
          $output['msg'] = "You Are Not Registered Please Signup";
        }
      }
    } else {
      $output['res'] = "error";
      $output['msg'] = "Mobile No. Cannot Be Blank";
    }
    echo json_encode([$output]);
  }

  public function Login()
  {
    $output['res'] = "error";

    $data['loginURL'] = $this->googlelogin->loginURL();

    if ($this->permission == 'false') {

      if ($this->uri->segment(3) == true) {
        $action = $this->uri->segment(3);

        if ($action == "Registration") {
          if (!empty($this->input->post())) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|xss_clean');
            $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|numeric|min_length[10]|max_length[10]');
            if ($this->form_validation->run() == FALSE) {
              $msg = explode('</p>', validation_errors());
              $output['msg'] = str_ireplace('<p>', '', $msg[0]);
            } else {
              $query = $this->db->where('email', $this->input->post('email'))->or_where('mobile', $this->input->post('mobile'))->get('tbl_user');

              if ($query->num_rows() > 0) {
                $query = $query->row();
                if ($query->is_verified == 'false') {
                  $output['res'] = 'error';
                  $output['msg'] = 'Your Accout Is Not Verified Yet Please Verify Your No.';
                } else {
                  $output['res'] = 'error';
                  $output['msg'] = 'Your Accout Is Already Created.';
                }
              } else {
                $name = $this->input->post('name');
                $refrel_code = $this->input->post('ref_code');
                $user_ref_code = strtoupper(substr($name, 0, 3)) . 'S' . rand(1000, 9999) . 'P';
                $insertData = [
                  'name' => $this->input->post('name'),
                  'email' => $this->input->post('email'),
                  'mobile' => $this->input->post('mobile'),
                  'ref_code' => $user_ref_code,
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];

                $insertData = $this->security->xss_clean($insertData);
                if ($this->db->insert('tbl_user', $insertData)) {
                  $user_id = $this->db->insert_id();

                  $data = $this->db->get_where('tbl_user', ['ref_code' => $refrel_code])->row();
                  if (!empty($data)) {
                    $benefits_data = $this->db->get_where('reward_point_setting', array('is_status' => 'true'))->row();
                    if ($benefits_data->first_order) {
                      $referral_name = $data->name;
                      $remark = $referral_name . " gifted you";
                      $referral_data = [
                        'referral_id' => $refrel_code,
                        'referred_id' => $user_ref_code,
                        'remarks' => $remark,
                        'benefits_type' => 'points',
                        'benefits' => $benefits_data->first_order,
                        'is_status' => 'true',
                        'created_at' => $this->data->timestamp,
                        'modified_at' => $this->data->timestamp
                      ];

                      $this->db->insert('referral_history', $referral_data);

                      $coins = $benefits_data->first_order;
                      $expire_date = $benefits_data->expire_date;
                      $rewardData = [
                        'userid' => $user_id,
                        'coins' => $coins,
                        'expire_date' => $expire_date,
                        'is_status' => 'true',
                        'remark_as' => $remark,
                        'created_at' => $this->data->timestamp,
                        'modified_at' => $this->data->timestamp,
                      ];
                      $this->db->insert('user_wallet', $rewardData);
                    }
                  }

                  $query = $this->db->get_where('tbl_user', array('id' => $user_id));
                  if ($query->num_rows() > 0) {
                    if (isset($_COOKIE['user_id'])) {
                      delete_cookie('user_id');
                    } else {
                      $cookie_name = "user_id";
                      $cookie_value = json_encode($query->row());
                      $expiry = time() + (60 * 60 * 24 * 30);
                      setcookie($cookie_name, $cookie_value, $expiry, "/");
                    }
                    $output['res'] = 'success';
                    $output['msg'] = 'Data Added Successfully.';
                  }
                } else {
                  $output['msg'] = 'Something went wrong in Data Saving.';
                }
              }
            }
          }
        } elseif ($action == "UserLogin") {
          if (!empty($this->input->post())) {
            $this->form_validation->set_rules('otp', 'OTP', 'required|trim');
            $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|numeric|min_length[10]|max_length[10]');

            if ($this->form_validation->run() == FALSE) {
              $msg = explode('</p>', validation_errors());
              $output['msg'] = str_ireplace('<p>', '', $msg[0]);
            } else {
              $query = $this->db->get_where('tbl_user', array('mobile' => $this->input->post('mobile'), 'is_status' => 'true'));
              if ($query->num_rows() > 0) {
                $query = $query->row();
                $id = $query->id;
                if ($this->input->post('otp') == $query->otp) {
                  $redirect = base_url();
                  if (isset($_COOKIE['user_id'])) {
                    delete_cookie('user_id');
                  } else {
                    $cookie_name = "user_id";
                    $cookie_value = json_encode($query);
                    $expiry = time() + (60 * 60 * 24 * 30);
                    setcookie($cookie_name, $cookie_value, $expiry, "/");
                  }
                  $output['res'] = 'success';
                  $output['msg'] = 'Welcome you are logged in.';
                  $output['redirect'] = $redirect;
                } else {
                  $output['msg'] = 'Invalid OTP';
                }
              } else {
                $output['msg'] = 'Invalid User';
              }
            }
          }
        }
        echo json_encode([$output]);
      } else {
        $this->load->view("Home/Login", $data);
      }
    } else {
      $this->session->set_flashdata(['res' => 'success', 'msg' => 'Session Recovered']);
      redirect(base_url());
    }
  }




  public function ValidateRefCode()
  {
    $ref_code = $this->input->post('ref_code');
    if ($ref_code != '') {
      $data = $this->db->get_where('tbl_user', ['ref_code' => $ref_code])->row();
      if (!empty($data)) {
        $output['res'] = 'success';
        $output['msg'] = $data->name;
      } else {
        $output['res'] = 'error';
      }
    } else {
      $output['res'] = 'nofound';
    }

    echo json_encode($output);
  }

  public function Registration()
  {
    $this->load->view("Home/Signup");
  }

  public function AboutUs()
  {
    $query = $this->db->order_by("id", "DESC")->get_where('content_about', array('is_status' => 'true'));

    $data['list'] = $query->row();
    $this->load->view("Home/AboutUs", $data);
  }


  // Contactus
  public function ContactUs()
  {
    $this->data->key = 'contactus';
    $this->data->table = 'contact';
    // $output['res'] = "error";

    if ($this->uri->segment(3) == true) {
      $action = $this->uri->segment(3);
      if ($action == 'Add') {
        if (!empty($this->input->post())) {
          if ($this->form_validation->run($this->data->key) == FALSE) {
            $msg = explode('</p>', validation_errors());
            $msg = str_ireplace('<p>', '', $msg[0]);
            $this->session->set_flashdata(['res' => 'error', 'msg' => $msg]);
            redirect(base_url('Home/ContactUs'));
          } else {
            $insertData = [
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'mobile ' => $this->input->post('phone'),
              'subject ' => $this->input->post('subject'),
              'message ' => $this->input->post('msg'),
              'is_status' => 'false',
              'created_at' => $this->data->timestamp,
              'modified_at' => $this->data->timestamp
            ];
            $insertData = $this->security->xss_clean($insertData);
            if ($this->db->insert($this->data->table, $insertData)) {
              // $output['res'] = 'success';
              // $output['msg'] = 'Your request has been sent, we will response as soon as possible.';
              $this->session->set_flashdata(['res' => 'success', 'msg' => 'Your request has been sent, we will response as soon as possible.']);
              redirect(base_url('Home/ContactUs'));
            } else {
              // $output['msg'] = 'Something went wrong in Data Saving.';
              $this->session->set_flashdata(['res' => 'error', 'msg' => 'Yog went wrong in Data Saving.']);
              redirect(base_url('Home/ContactUs'));
            }
          }
        }
      }
      // echo json_encode([$output]);
    } else {
      $this->load->view('Home/ContactUs');
    }
  }






  // public function ContactUs()
  // {
  // 	$this->data->key='contactus';
  // 	$this->data->table='contact';
  // 	$output['res'] = "error";

  // 	if($this->uri->segment(3) == true)
  // 	{
  // 		$action = $this->uri->segment(3);
  // 		if($action == 'Add')
  // 		{
  // 			if (!empty($this->input->post()))
  // 			{
  // 				if ($this->form_validation->run($this->data->key) == FALSE)
  // 				{
  // 					$msg = explode('</p>', validation_errors());
  // 					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
  // 				}
  // 				else
  // 				{
  // 					$insertData = [
  // 					'name' => $this->input->post('name'),
  // 					'email' => $this->input->post('email'),
  // 					'mobile ' => $this->input->post('phone'),
  // 					'subject ' => $this->input->post('subject'),
  // 					'message ' => $this->input->post('msg'),
  // 					'is_status' => 'false',
  // 					'created_at' => $this->data->timestamp,
  // 					'modified_at' => $this->data->timestamp
  // 					];
  // 					$insertData = $this->security->xss_clean($insertData);
  // 					if ($this->db->insert($this->data->table, $insertData))
  // 					{
  // 						$output['res'] = 'success';
  // 						$output['msg'] = 'Your request has been sent, we will response as soon as possible.';
  // 					}
  // 					else
  // 					{
  // 						$output['msg'] = 'Something went wrong in Data Saving.';
  // 					}
  // 				}
  // 			}
  // 		}
  // 		echo json_encode([$output]);
  // 	}
  // 	else
  // 	{
  // 		$this->load->view('Home/ContactUs');	
  // 	}
  // }  

  public function OrdersDetails()
  {
    if ($this->uri->segment(2) == true and $this->userData->id) {
      $action = $this->uri->segment(2);
      if ($this->uri->segment(3) == true) {
        $id = $this->uri->segment(3);
        if ($action == 'EditAddress') {
          $orderid = $this->uri->segment(4);
          $query = $this->db->where('id', $id)->get('tbl_address');
          if ($query->num_rows()) {
            $data["list"] = $query->result();
            $data["orderid"] = $orderid;
            $data["action"] = "EditShippingAddress";
            $this->load->view($this->data->controller . '/UpdateData', $data);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } elseif ($action == 'UpdateAddress') {
          if ($this->permission == 'true') {
            $userid = $this->userData->id;
            if (!empty($this->input->post())) {
              if (empty($this->input->post("id"))) {
                $output['msg'] = 'ID is required.';
              } else {
                $query = $this->db->where('id', $this->input->post("id"))->get('tbl_address');
                if ($query->num_rows()) {
                  $data['list'] = $query->result();
                  $this->form_validation->set_rules('state', 'State', 'required|trim');
                  $this->form_validation->set_rules('city', 'City', 'required|trim');
                  $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim|min_length[6]|max_length[6]');
                  $this->form_validation->set_rules('addressline1', 'Address Line 1', 'required|trim');
                  $this->form_validation->set_rules('addressline2', 'Address Line 2', 'required|trim');
                  $this->form_validation->set_rules('name', 'Reciever Name', 'required|trim');
                  $this->form_validation->set_rules('addresstype', 'Address Type', 'required|trim');
                  $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|max_length[10]');
                  $this->form_validation->set_rules('defaultaddress', 'Default Address', 'trim');

                  if ($this->form_validation->run() == FALSE) {
                    $msg = explode('</p>', validation_errors());
                    $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                  } else {

                    if (!empty($this->input->post('defaultaddress'))) {
                      $default = 'true';
                    } else {
                      $default = 'false';
                    }

                    $orderid = $this->input->post('orderid');
                    $updateData = [
                      'state' => $this->input->post('state'),
                      'city' => $this->input->post('city'),
                      'pincode' => $this->input->post('pincode'),
                      'line1' => $this->input->post('addressline1'),
                      'line2' => $this->input->post('addressline2'),
                      'line3' => $this->input->post('addressline3'),
                      'name' => $this->input->post('name'),
                      'address_type' => $this->input->post('addresstype'),
                      'mobile' => $this->input->post('mobile'),
                      'alternate_mobile' => $this->input->post('alternate_mobile'),
                      'default_address' => $default,
                      'modified_at' => $this->data->timestamp
                    ];
                    $updateData = $this->security->xss_clean($updateData);
                    $result = $this->db->where('id', $data['list'][0]->id)->update('tbl_address', $updateData);
                    if ($result) {
                      $address = $this->db->get_where('tbl_address', ['id' => $data['list'][0]->id])->row();
                      $isUpdate = $this->db->where(['orderid' => $orderid])->update('tbl_order', ['address' => json_encode($address)]);
                      if ($isUpdate) {
                        $output['res'] = 'success';
                        $output['msg'] = 'Data Updated Successfully.';
                      }
                    } else {
                      $output['msg'] = 'Something went wrong in Data Saving.';
                    }
                  }
                }
              }
            }
          } else {
            $output['msg'] = 'Please login to continue.';
          }
          echo json_encode([$output]);
        } elseif ($action == 'BuyAgain') {
          $cartDetails = $this->db->get_where('tbl_cart', ['id' => $id])->row();
          $used_limit = $this->db->get_where('manage_content')->row();
          if ($cartDetails->is_combo == '') {
            $query = $this->db->get_where('products', array('id' => $cartDetails->product_id));
            if ($query->num_rows()) {
              $product = $query->row();

              $variant = $this->db->get_where('product_variant', array('id' => $cartDetails->variant_id, 'product_id' => $product->id));
              if ($variant->num_rows() > 0) {
                $stock_count = 0;
                $variant = $variant->row();
                #Check Stock of individual product
                if ($cartDetails->size != 'NA') {
                  $json_sizestock = json_decode($variant->size);
                  $arr = array();
                  foreach ($json_sizestock as $eachSize) {
                    foreach ($eachSize as $size => $size_stock) {
                      if ($size == $cartDetails->size and $size_stock < 1) {
                        $stock_count++;
                      }
                    }
                  }
                } else {

                  if ($product->stock < 1) {
                    $stock_count++;
                  }
                }

                if ($stock_count > 0) {
                  $output['res'] = 'error';
                  $output['msg'] = 'Product Out of Stock!';
                } else {

                  #Add to cart for login user
                  if ($this->permission == 'true') {
                    $userid = $this->userData->id;
                    $cart = $this->db->get_where('tbl_cart', array('variant_id' => $cartDetails->variant_id, 'product_id' => $product->id, 'size' => $cartDetails->size, 'color' => $cartDetails->color, 'is_status' => 'false', 'userid' => $userid));
                    $WithoutLoginCart = $this->db->get_where('tbl_cart', array('variant_id' => $cartDetails->variant_id, 'product_id' => $product->id, 'size' => $cartDetails->size, 'color' => $cartDetails->color, 'is_status' => 'false', 'system_id' => $this->system_id));
                    $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND (userid='$userid' OR system_id='$this->system_id')")->num_rows();
                    if ($totalCart > $used_limit->cart_limit) {
                      $output['res'] = 'error';
                      $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                    } else {
                      if ($cart->num_rows() > 0 || $WithoutLoginCart->num_rows() > 0) {
                        $cartdata = !empty($cart->row()) ? $cart->row() : $WithoutLoginCart->row();
                        $uniqueid = $cartdata->id;
                        $quant = $cartdata->qty;
                        $quant = (int)$quant + 1;
                        $this->db->where('id', $uniqueid);
                        $this->db->update('tbl_cart', array('qty' => $quant));
                        $output['res'] = 'success';
                        $output['msg'] = 'Already Added In Cart';
                        $output['redirect'] = base_url('Home/Cart');
                      } else {
                        if ($product->gift_wrap == 'true') {
                          $gift_wrap = 'true';
                        } else {
                          $gift_wrap = 'false';
                        }

                        $insertData = [
                          'userid' => $userid,
                          'system_id' => $this->system_id,
                          'product_id' => $product->id,
                          'variant_id ' => $cartDetails->variant_id,
                          'size ' => $cartDetails->size,
                          'color ' => $cartDetails->color,
                          'qty ' => '1',
                          'is_status' => 'false',
                          'is_giftwrap' => $gift_wrap,
                          'order_status' => 'pending',
                          'created_at' => $this->data->timestamp,
                          'modified_at' => $this->data->timestamp
                        ];
                        if ($this->db->insert('tbl_cart', $insertData)) {
                          $output['res'] = 'success';
                          $output['msg'] = 'Successfully Added To Cart';
                          $output['redirect'] = base_url('Home/Cart');
                        } else {
                          $output['msg'] = 'Something went wrong in Data Saving.';
                        }
                      }
                    }
                  } else {
                    $userid = "";
                    $cart = $this->db->get_where('tbl_cart', array('variant_id' => $cartDetails->variant_id, 'product_id' => $product->id, 'size' => $cartDetails->size, 'color' => $cartDetails->color, 'is_status' => 'false', 'system_id' => $this->system_id, 'availability' => ''));
                    $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND system_id='$this->system_id'")->num_rows();
                    if ($totalCart > $used_limit->cart_limit) {
                      $output['res'] = 'error';
                      $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                    } else {
                      if ($cart->num_rows() > 0) {
                        $cartdata = !empty($cart->row()) ? $cart->row() : $WithoutLoginCart->row();
                        $uniqueid = $cartdata->id;
                        $quant = $cartdata->qty;
                        $quant = (int)$quant + 1;
                        $this->db->where('id', $uniqueid);
                        $this->db->update('tbl_cart', array('qty' => $quant));
                        $output['res'] = 'success';
                        $output['msg'] = 'Already Added In Cart';
                        $output['redirect'] = base_url('Home/Cart');
                      } else {
                        if ($product->gift_wrap == 'true') {
                          $gift_wrap = 'true';
                        } else {
                          $gift_wrap = 'false';
                        }

                        $insertData = [
                          'userid' => $userid,
                          'system_id' => $this->system_id,
                          'product_id' => $product->id,
                          'variant_id ' => $cartDetails->variant_id,
                          'size ' => $cartDetails->size,
                          'color ' => $cartDetails->color,
                          'qty ' => '1',
                          'is_status' => 'false',
                          'is_giftwrap' => $gift_wrap,
                          'order_status' => 'pending',
                          'created_at' => $this->data->timestamp,
                          'modified_at' => $this->data->timestamp
                        ];

                        if ($this->db->insert('tbl_cart', $insertData)) {
                          $output['res'] = 'success';
                          $output['msg'] = 'Successfully Added To Cart';
                          $output['redirect'] = base_url('Home/Cart');
                        } else {
                          $output['msg'] = 'Something went wrong in Data Saving.';
                        }
                      }
                    }
                  }
                }
              } else {
                $output['msg'] = 'Invalid Product Variant';
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Product Not Found';
            }

            echo json_encode([$output]);
          } else if ($cartDetails->is_combo == 'true') {

            #Add to cart for login user
            if ($this->permission == 'true') {
              $userid = $this->userData->id;
            } else {
              $userid = "";
            }

            $query = $this->db->get_where('tbl_combo', array('id' => $cartDetails->combo_id));
            if ($query->num_rows()) {
              $combo = $query->row();
              $productId = $cartDetails->product_id;
              $variantId = $cartDetails->variant_id;
              $color = $cartDetails->color;
              $size = $cartDetails->size;

              $items = explode(",", $productId);
              $itemsVariant = explode(",", $variantId);
              $sizes = explode(",", $size);

              $combo_stock_count = 0;
              if (!empty($items) and !empty($itemsVariant)) {
                for ($i = 0; $i < count($items); $i++) {
                  $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                  $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();

                  $json = json_decode($variants->size, 2);

                  foreach ($json as $jsoneach) {
                    foreach ($jsoneach as $json_size => $size_stock) {
                      if ($sizes[$i] != 'NA') {
                        if ($json_size == $sizes[$i]) {
                          if ($size_stock < 1) {
                            $combo_stock_count++;
                          }
                          break;
                        }
                      } else {
                        if ($product->stock < 1) {
                          $combo_stock_count++;
                        }
                        break;
                      }
                    }
                  }
                }
              }

              if ($combo_stock_count > 0) {
                $output['res'] = 'error';
                $output['msg'] = 'Product Out of Stock!';
              } else {
                $totalCart = $this->db->query("select * from tbl_cart where is_status = 'false' AND (userid='$userid' OR system_id='$this->system_id')")->num_rows();
                if ($totalCart > $used_limit->cart_limit) {
                  $output['res'] = 'error';
                  $output['msg'] = 'Sorry! You have exceeded the maximum limit of add to cart';
                } else {
                  $cart = $this->db->query("select * from tbl_cart where (userid='$userid' OR system_id='$this->system_id') AND variant_id='$variantId' AND product_id='$productId' AND size='$size' AND color='$color' AND is_status='false'");
                  if ($cart->num_rows() > 0) {
                    $cartdata = $cart->row();
                    $uniqueid = $cartdata->id;
                    $quant = $cartdata->qty;
                    $quant = (int)$quant + 1;
                    $this->db->where('id', $uniqueid);
                    $this->db->update('tbl_cart', array('qty' => $quant));
                    $output['res'] = 'success';
                    $output['msg'] = 'Already Added In Cart';
                    $output['redirect'] = base_url('Home/Cart');
                  } else {
                    if ($combo->gift_wrap == 'true') {
                      $gift_wrap = 'true';
                    } else {
                      $gift_wrap = 'false';
                    }

                    $insertData = [
                      'userid' => $userid,
                      'system_id' => $this->system_id,
                      'combo_id' =>  $cartDetails->combo_id,
                      'product_id' => $productId,
                      'variant_id ' => $variantId,
                      'size ' => $size,
                      'color ' => $color,
                      'qty ' => '1',
                      'is_status' => 'false',
                      'is_combo' => 'true',
                      'is_giftwrap' => $gift_wrap,
                      'order_status' => 'pending',
                      'cancel_request' => 'false',
                      'return_request' => 'false',
                      'refund_request' => 'false',
                      'created_at' => $this->data->timestamp,
                      'modified_at' => $this->data->timestamp
                    ];
                    $insertData = $this->security->xss_clean($insertData);
                    if ($this->db->insert('tbl_cart', $insertData)) {
                      $output['res'] = 'success';
                      $output['msg'] = 'Successfully Added To Cart';
                      $output['redirect'] = base_url('Home/Cart');
                    } else {
                      $output['msg'] = 'Something went wrong in Data Saving.';
                    }
                  }
                }
              }
            } else {
              $output['res'] = 'error';
              $output['msg'] = 'Product Not Found';
            }

            echo json_encode([$output]);
          }
        }
      } elseif ($action == 'NeedHelp') {
        $output['res'] = 'error';
        if (!empty($this->input->post())) {
          $id = $this->input->post('id');
          $cartDetails = $this->db->get_where('tbl_cart', ['id' => $id])->row();
          if (!empty($cartDetails)) {
            $order_query = base64_encode($this->input->post('order_query'));
            $isUpdate = $this->db->where('id', $id)->update('tbl_cart', ['order_query' => $order_query]);
            if ($isUpdate) {
              $output['res'] = 'success';
              $output['msg'] = 'Your query has been sent';
            } else {
              $output['msg'] = 'Something went wrong';
            }
          } else {
            $output['msg'] = 'Invalid Details Found';
          }
        } else {
          $output['msg'] = 'Please fill all the field';
        }
        echo json_encode([$output]);
      } else {

        $orderid = $this->uri->segment(2);
        $userid = $this->userData->id;

        $data['order'] = $this->db->get_where('tbl_order', array('orderid' => $orderid, 'is_status' => 'true'))->row_array();
        $data['cartOrder'] = $this->db->get_where('tbl_cart', array('orderid' => $orderid, 'is_status' => 'true'))->result();
        if (!empty($data['order']) and !empty($data['cartOrder'])) {
          $this->load->view('Home/OrdersDetails', $data);
        } else {
          $this->session->set_flashdata(['res' => 'error', 'msg' => 'Invalid Order Details']);
          redirect(base_url('Home/Order'));
        }
      }
    } else {
      redirect(base_url('Login'));
    }
  }

  public function Profile()
  {
    $output['res'] = 'error';
    $this->data->folder = 'profile_pic';

    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      if ($this->uri->segment(3) == TRUE) {
        $action = $this->uri->segment(3);
        if ($action == 'UpdateUserProfile') {
          $query = $this->db->where('id', $userid)->get('tbl_user');
          if ($query->num_rows()) {
            $data['list'] = $query->result();

            $this->form_validation->set_rules('name', 'User Name', 'required|trim');
            $this->form_validation->set_rules('email', 'User Email', 'required|trim');
            $this->form_validation->set_rules('gender', 'User Gender', 'required|trim');
            $this->form_validation->set_rules('dob', 'Date Of Birth', 'required|trim');

            if ($this->form_validation->run() == FALSE) {
              $msg = explode('</p>', validation_errors());
              $output['msg'] = str_ireplace('<p>', '', $msg[0]);
            } else {
              $old_filename = $data['list'][0]->image;
              $filename = $old_filename;
              if (!empty($_FILES['icon']['name'])) {
                $extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
                $filename = time() . rand() . "." . $extension;
              }
              $updateData = [
                'name' => $this->input->post('name'),
                'email ' => $this->input->post('email'),
                'gender ' => $this->input->post('gender'),
                'dob ' => $this->input->post('dob'),
                'image' => $filename,
                'modified_at' => $this->data->timestamp
              ];
              $updateData = $this->security->xss_clean($updateData);
              $result = $this->db->where('id', $data['list'][0]->id)->update('tbl_user', $updateData);
              if ($result) {
                $output['res'] = 'success';
                $output['msg'] = 'Data Updated Successfully.';

                // Check if the old image exists
                if ($old_filename && file_exists('./uploads/' . $this->data->folder . '/' . $old_filename)) {
                  // Remove the old image if it exists
                  unlink('./uploads/' . $this->data->folder . '/' . $old_filename);
                }


                if (!empty($_FILES['icon']['name'])) {
                  $upload_errors           = array();
                  $config['upload_path']   = './uploads/' . $this->data->folder . '/';
                  $config['allowed_types'] = 'gif|jpg|png|jpeg';
                  $config['max_size']      = 2048;
                  $config['file_name']     = $filename;
                  $this->load->library('upload', $config);
                  if (!$this->upload->do_upload('icon')) {
                    array_push($upload_errors, array(
                      'error_upload' => $this->upload->display_errors()
                    ));
                    $output['msg'] = 'Data saved but error in file upload.';
                  }
                }
              } else {
                $output['msg'] = 'Something went wrong in Data Saving.';
              }
            }
          }
          echo json_encode([$output]);
        } else {
          redirect(base_url($this->data->controller . '/' . $this->data->method));
        }
      } else {
        $queryuser = $this->db->where('id', $userid)->get('tbl_user');
        $userdata = $queryuser->row();
        $data['user'] = $userdata;
        $this->load->view("Home/Profile", $data);
      }
    } else {
      redirect(base_url('Home/Login'));
    }
  }


  public function Order()
  {
    $this->data->table = 'tbl_order';
    $action = $this->uri->segment(3);
    $orderid = $this->uri->segment(4);
    $itemid = $this->uri->segment(5);
    $output['res'] = 'error';
    if ($this->userData->id) {
      if ($this->uri->segment(3) == true) {
        if ($action == 'AddAccount') {
          if (!empty($this->input->post())) {
            if ($this->input->post('account_number') == $this->input->post('confirm_account_number')) {
              $userid = $this->userData->id;
              $user_existing_account = $this->db->select('account_number')->where('userid', $userid)->get('tbl_user_account')->result();
              if (in_array($this->input->post('account_number'), $user_existing_account)) {
                $insertData = [
                  'userid' => $userid,
                  'ifsc_code' => $this->input->post('ifsc_code'),
                  'account_number' => $this->input->post('account_number'),
                  'account_holder_name' => $this->input->post('account_holder_name'),
                  'phone' => $this->input->post('phone'),
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];

                $isInsert = $this->db->insert('tbl_user_account', $insertData);
                if ($isInsert) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Account Added.';
                } else {
                  $output['msg'] = 'Something went wrong.';
                }
              } else {
                $output['msg'] = 'Account already exist.';
              }
            } else {
              $output['msg'] = 'Account number not matched to confirm account number';
            }
            echo json_encode([$output]);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } elseif ($action == 'CancelAll') {
          if (!empty($this->input->post())) {
            $id = $this->input->post('id');
            $refunded = false;
            $reason = $this->input->post('reason');
            $item_details = $this->db->where_in('id', $id)->get('tbl_cart')->row();
            if (!empty($item_details)) {
              $orderid = $item_details->orderid;
              $order = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
              if (!empty($order)) {
                $userid = $order->userid;
                if ($order->pay_mode == 'online' and $order->PaymentStatus == 'Success') {
                  #Check User Type-Royal/Normal
                  $subscriber = $this->db->get_where('royal_subscriber', ['userid' => $userid]);
                  $subscription = 'false';
                  if ($subscriber->num_rows() > 0) {
                    $subscriber = $subscriber->row();
                    $plan_start_date = date('Y-m-d', strtotime($subscriber->created_at));
                    $plan_expire_date = date('Y-m-d', strtotime("+" . $subscriber->plan_duration . " months", strtotime($subscriber->created_at)));
                    $order_date = date('Y-m-d', strtotime($order->created_at));
                    if (($order_date >= $plan_start_date) and ($order_date <= $plan_expire_date)) {
                      $subscription = 'true';
                    } else {
                      $subscription = 'false';
                    }
                  }

                  $cartOrder = $this->db->get_where('tbl_cart', array('orderid' => $orderid))->result();

                  if (!empty($cartOrder)) {
                    $updateData = [];
                    $data = [];
                    $totalProductPrice = 0;
                    $amount = (int)$order->refund_amount;
                    foreach ($cartOrder as $cart) {
                      $totalPrice = 0;
                      $total = 0;
                      if ($cart->is_combo == '') {
                        $product = $this->db->get_where('products', array('id' => $cart->product_id))->row();
                        $variant = $this->db->get_where('product_variant', array('id' => $cart->variant_id))->row();
                        $icons = explode(',', $variant->variant_img);
                        $product_name = $product->title;
                        $ret_ref_status = $product->refund_status;
                        $cancel_status = $product->cancel_status;
                        $ret_ref_expire_date = date('Y-m-d', strtotime("+" . $product->refund_limit . " days", strtotime($order->created_at)));
                        $cancel_expire_date = date('Y-m-d', strtotime("+" . $product->cancel_limit . " days", strtotime($order->created_at)));
                        $current_date = date('Y-m-d');

                        #code for check sale is available or not on this product 
                        $saleProduct = $this->db->get_where('sale_product', array('product_id' => $cart->product_id, 'sale_type' => 'individual'))->row();
                        if (!empty($saleProduct)) {

                          $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                          $today = date_create(date('Y-m-d H:i:s', strtotime($order->created_at)));
                          $order_date = date('Y-m-d', strtotime($order->created_at));
                          $sale_start_date = date_create($tblSale->start_date);
                          $sale_end_date = date_create($tblSale->end_date);
                          if (!empty($saleProduct->sale_id) and (($order_date >= $sale_start_date) and ($order_date <= $sale_end_date))) {
                            $saleRate = $product->mrp;
                            $discount = (int)$saleProduct->discount;
                            $saleprice = $saleRate - (($saleRate / 100) * $discount);
                            $price = $saleprice;
                            $sale = "true";
                          } else {
                            $price = $product->reg_sell_price;
                          }
                        } else {
                          $price = $product->reg_sell_price;
                        }

                        if ($subscription == 'true') {
                          $total = $product->royal_amt * $cart->qty;
                        } else {
                          $total = $price * $cart->qty;
                        }
                      } else if ($cart->is_combo == 'true') {
                        $product = $this->db->get_where('tbl_combo', array('id' => $cart->combo_id))->row();
                        $icons = explode(',', $product->image);
                        $product_name = $product->name;
                        $ret_ref_status = $product->ret_refund_status;
                        $cancel_status = $product->cancel_status;
                        $ret_ref_expire_date = date('Y-m-d', strtotime("+" . $product->ret_ref_limit . " days", strtotime($order->created_at)));
                        $cancel_expire_date = date('Y-m-d', strtotime("+" . $product->cancel_limit . " days", strtotime($order->created_at)));
                        $current_date = date('Y-m-d');

                        #code for check sale is available or not on this product 
                        $saleProduct = $this->db->get_where('sale_product', array('product_id' => $cart->product_id, 'sale_type' => 'individual'))->row();
                        if (!empty($saleProduct)) {

                          $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                          $today = date_create(date('Y-m-d H:i:s', strtotime($order->created_at)));
                          $order_date = date('Y-m-d', strtotime($order->created_at));
                          $sale_start_date = date_create($tblSale->start_date);
                          $sale_end_date = date_create($tblSale->end_date);
                          if (!empty($saleProduct->sale_id) and (($order_date >= $sale_start_date) and ($order_date <= $sale_end_date))) {
                            $saleRate = $product->price;
                            $discount = (int)$saleProduct->discount;
                            $saleprice = $saleRate - (($saleRate / 100) * $discount);
                            $price = $saleprice;
                            $sale = "true";
                          } else {
                            $price = $product->discount_price;
                          }
                        } else {
                          $price = $product->discount_price;
                        }

                        if ($subscription == 'true') {
                          $total = $price * $cart->qty;
                        } else {
                          $total = $price * $cart->qty;
                        }
                      }
                      $giftWrapForThisProduct = 0;
                      $giftWrapCharge = 0;
                      if ($product->gift_wrap == 'true') {
                        $giftData = $this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->row();
                        $giftCount = $this->db->query("select * from tbl_cart where orderid='$orderid' AND availability='' AND is_giftwrap='true';")->num_rows();
                        if ($giftData->is_giftwrap == 'true') {
                          $cartGiftWrap = json_decode($giftData->giftwrap_details);
                          if (!empty($cartGiftWrap)) {
                            $giftwrapid = $cartGiftWrap->giftwrapid;
                            $giftWrapDetails = $this->db->get_where('tbl_giftwrap', array('id' => $giftwrapid))->row();
                            $giftWrapCharge = ($giftWrapDetails->price);
                            $giftWrapForThisProduct = (($giftWrapDetails->price) / $giftCount);
                          }
                        }
                      }

                      // $order_amount=$order->amount;
                      // $coupon_discount=$order->coupon_discount;
                      // $shipping_charge=$order->shipping_charge;

                      // $totalProductPrice=((float)$order_amount+(float)$coupon_discount-(float)$giftWrapCharge-(float)($shipping_charge)); 
                      // $discount=(float)(($coupon_discount/$totalProductPrice)*$total);
                      // $totalPrice+=(float)$total+(float)$giftWrapForThisProduct+(float)($shipping_charge/count($cartOrder))-(float)$discount-(float)($data['wallet_discount'])/count($cartOrder);
                      // $totalPrice=round($totalPrice,0);
                      $totalProductPrice += (int)$total;

                      for ($i = 0; $i < count($id); $i++) {
                        if ($cart->id == $id[$i]) {
                          $data = [
                            'id' => $cart->id,
                            'order_status' => 'cancelled',
                            'cancel_reason' => $reason[$i],
                            'refund_amount' => $total,
                            'cancel_date_time' => $this->data->timestamp
                          ];
                          array_push($updateData, $data);
                        }
                      }
                    }

                    $refund_amount = $totalProductPrice;
                    $wallet_discount = 0;
                    $cashback = 0;
                    $reward = 0;
                    if (!empty($order->wallet_discount)) {
                      $wallet_discount = (($order->wallet_discount) / (count($cartOrder))) * (count($updateData));
                      $reward_point_setting = $this->db->get_where('reward_point_setting')->row();
                      $refund_amount -= $wallet_discount;
                      if ($order->wallet_apply_type == 'cashback') {
                        $cashback += $wallet_discount;
                      } elseif ($order->wallet_apply_type == 'reward') {
                        $reward += (int)(($wallet_discount) / ($reward_point_setting->reward_value));
                      }
                    }

                    $paymentId = $order->rzp_paymentid;
                    $refundData = (array)$this->razorpay->getRazorpayRefund($paymentId, $refund_amount);
                    $refundData = array_values($refundData)[0];
                    unset($refundData['notes']);
                    unset($refundData['acquirer_data']);

                    if (!empty($refundData) and $refundData['status'] == 'processed') {
                      $refundId = $refundData['id'];
                      $refundAmount = $refundData['amount'];
                      $amount += ($refundAmount + $wallet_discount);
                      array_push($data, ['rzp_refundid' => $refundId]);
                      $isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
                      $isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);

                      if ($cashback > 0 || $reward > 0) {
                        $isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
                      }

                      if ($isUpdate and $isUpdate2) {
                        $refunded = true;
                      } else {
                        $output['msg'] = 'Something went wrong.';
                      }
                    }
                  }
                } elseif ($order->pay_mode == 'cod') {
                  $cashback = 0;
                  $reward = 0;
                  if (!empty($order->wallet_discount)) {
                    $cartOrder = $this->db->get_where('tbl_cart', array('orderid' => $orderid))->result();
                    $wallet_discount = (($order->wallet_discount) / (count($cartOrder))) * (count($id));
                    $reward_point_setting = $this->db->get_where('reward_point_setting')->row();
                    if ($order->wallet_apply_type == 'cashback') {
                      $cashback += $wallet_discount;
                    } elseif ($order->wallet_apply_type == 'reward') {
                      $reward += (int)(($wallet_discount) / ($reward_point_setting->reward_value));
                    }
                  }

                  $updateData = [];
                  for ($i = 0; $i < count($id); $i++) {
                    $data = [
                      'id' => $id[$i],
                      'order_status' => 'cancelled',
                      'cancel_reason' => $reason[$i],
                      'cancel_date_time' => $this->data->timestamp
                    ];
                    array_push($updateData, $data);
                  }

                  $isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
                  if ($cashback > 0 || $reward > 0) {
                    $isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
                  }

                  if ($isUpdate) {
                    $refunded = true;
                  } else {
                    $output['msg'] = 'Something went wrong.';
                  }
                }
                #Restock of purchasing product
                if ($refunded == true) {
                  #Size Inventory Management For Individual
                  $IndCart = $this->db->where_in('id', $id)->where(['is_combo' => '', 'availability' => ''])->get('tbl_cart')->result();
                  if (!empty($IndCart)) {
                    foreach ($IndCart as $each) {
                      $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                      $id = $this->userData->id;
                      #Size Inventory Management
                      if ($each->size != 'NA') {
                        $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                        $json_sizestock = json_decode($variant->size);
                        $arr = array();
                        $count = 0;
                        foreach ($json_sizestock as $eachSize) {
                          foreach ($eachSize as $size => $size_stock) {
                            if ($size == $each->size) {
                              $size_count = ($size_stock + $each->qty);
                              array_push($arr, array($size => $size_count));
                              if ($size_count < 1) {
                                $count++;
                              }
                            } else {
                              array_push($arr, array($size => $size_stock));
                              if ($size_stock < 1) {
                                $count++;
                              }
                            }
                          }
                        }

                        #update status and stock quantity of product variant 
                        if (count($json_sizestock) > $count) {
                          $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'true', 'size' => json_encode($arr)));
                          # update status combo product 
                          $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                          if (!empty($ComboStock)) {
                            foreach ($ComboStock as $stock) {
                              $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'true'));
                            }
                          }
                        }


                        #update stock quantity and status of purchasing product 
                        $variantStock = $this->db->get_where('product_variant', ['product_id' => $each->product_id, 'is_status' => 'true'])->num_rows();
                        $updatedStock = ($product->stock + $each->qty);
                        if ($updatedStock < 1 || $variantStock < 1) {
                          $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                        } else {
                          $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock));
                        }
                      } else {
                        $updatedStock = ($product->stock - $each->qty);
                        if ($updatedStock < 1) {
                          $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                        } else {
                          $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock));
                        }
                      }
                    }
                  }

                  #Size Inventory Management For Combo
                  $id = $this->userData->id;
                  $ComboCart = $this->db->where_in('id', $id)->where(['is_combo' => 'true', 'availability' => ''])->get('tbl_cart')->result();
                  if (!empty($ComboCart)) {
                    foreach ($ComboCart as $each) {
                      $items = explode(",", $each->product_id);
                      $itemsVariant = explode(",", $each->variant_id);
                      $sizes = explode(",", $each->size);
                      if (!empty($items) and !empty($itemsVariant)) {
                        for ($i = 0; $i < count($items); $i++) {
                          $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                          $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                          $json_sizestock = json_decode($variants->size);
                          if ($sizes[$i] != 'NA') {
                            $arr = array();
                            $count = 0;
                            foreach ($json_sizestock as $eachSize) {
                              foreach ($eachSize as $size => $size_stock) {
                                if ($size == $sizes[$i]) {
                                  $size_count = ($size_stock + $each->qty);
                                  array_push($arr, array($size => $size_count));
                                  if ($size_count < 1) {
                                    $count++;
                                  }
                                } else {
                                  array_push($arr, array($size => $size_stock));
                                  if ($size_stock < 1) {
                                    $count++;
                                  }
                                }
                              }
                            }
                            #update status and stock quantity of product variant 
                            if (count($json_sizestock) > $count) {
                              $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'true', 'size' => json_encode($arr)));
                              # update status combo product 
                              $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                              if (!empty($ComboStock)) {
                                foreach ($ComboStock as $stock) {
                                  $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'true'));
                                }
                              }
                            }

                            #update stock quantity and status of purchasing product 
                            $variantStock = $this->db->get_where('product_variant', ['product_id' => $each->product_id, 'is_status' => 'true'])->num_rows();
                            $updatedStock = ($product->stock + $each->qty);
                            if ($updatedStock < 1 || $variantStock < 1) {
                              $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                            } else {
                              $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock));
                            }
                          } else {
                            $updatedStock = ($product->stock + $each->qty);
                            if ($updatedStock < 1) {
                              $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                            } else {
                              $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock));
                            }
                          }
                        }
                      }
                    }
                  }

                  $output['res'] = 'success';
                  $output['msg'] = 'Item Cancelled.';
                }
              }
            }
            echo json_encode([$output]);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } elseif ($action == 'ReturnAll') {
          if (!empty($this->input->post())) {
            $id = $this->input->post('id');
            $item_details = $this->db->where_in('id', $id)->get('tbl_cart')->result();
            if (!empty($item_details)) {

              $orderid = $item_details[0]->orderid;
              $order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
              $reason = $this->input->post('reason');
              $account_details = '';
              $transfer_type = '';
              if ($order_details->pay_mode == 'cod') {
                $transfer_type = $this->input->post('transfer_type');
                $account_details = $this->input->post('account_details');
              }

              $updateData = [];
              for ($i = 0; $i < count($id); $i++) {
                $return_details = [
                  'return_reason' => $reason[$i],
                  'return_type' => $this->input->post('return_type'),
                  'return_datetime' => $this->data->timestamp,
                  'transfer_type' => $transfer_type,
                  'account_details' => $account_details,
                ];

                $data = [
                  'id' => $id[$i],
                  'return_status' => 'requested',
                  'return_details' => json_encode($return_details),
                ];
                array_push($updateData, $data);
              }
              $isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
              if ($isUpdate) {
                $output['res'] = 'success';
                $output['msg'] = 'Requested send successfully for return.';
              } else {
                $output['msg'] = 'Something went wrong.';
              }
            } else {
              $output['msg'] = 'No Order Details Found.';
            }
            echo json_encode([$output]);
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } else {
          if ($this->uri->segment(4) == true) {
            if ($this->uri->segment(5) == true) {
              if ($action == 'ShowSingleOrder') {
                $status = $_REQUEST['status'];
                $query = $this->db->where(['id' => $itemid, 'orderid' => $orderid])->get('tbl_cart');
                $query1 = $this->db->where(['orderid' => $orderid])->get($this->data->table);
                if ($query->num_rows() and $query1->num_rows()) {
                  $data["list"] = $query->row();
                  $data["order"] = $query->row_array();
                  $data["action"] = "ShowSingleOrder";
                  $data["status"] = $status;
                  $this->load->view($this->data->controller . '/UpdateData', $data);
                } else {
                  redirect(base_url($this->data->controller . '/' . $this->data->method));
                }
              } else {
                redirect(base_url($this->data->controller . '/' . $this->data->method));
              }
            } else {
              if ($action == 'ShowAllOrder') {
                $status = $_REQUEST['status'];
                $query = $this->db->where('orderid', $orderid)->get($this->data->table);
                if ($query->num_rows()) {
                  $data["list"] = $query->row();
                  $data["action"] = "ShowAllOrder";
                  $data["status"] = $status;
                  $this->load->view($this->data->controller . '/UpdateData', $data);
                } else {
                  redirect(base_url($this->data->controller . '/' . $this->data->method));
                }
              } else {
                redirect(base_url($this->data->controller . '/' . $this->data->method));
              }
            }
          }
        }
      } else {
        $userid = $this->userData->id;
        $data['all_orders'] = $this->db->order_by('id', 'desc')->get_where('tbl_order', array('userid' => $userid, 'is_status' => 'true'))->result_array();
        $data['delivered_orders'] = $this->db->order_by('id', 'desc')->get_where('tbl_order', array('userid' => $userid, 'is_status' => 'true'))->result_array();
        $data['ret_ref_orders'] = $this->db->order_by('id', 'desc')->get_where('tbl_order', array('userid' => $userid, 'is_status' => 'true'))->result_array();
        $data['cancel_orders'] = $this->db->order_by('id', 'desc')->get_where('tbl_order', array('userid' => $userid, 'is_status' => 'true'))->result_array();
        $this->load->view("Home/Orders", $data);
      }
    } else {
      redirect(base_url('/Login'));
    }
  }

  public function cartchek()
  {

    echo "<pre>";
    $userid = $this->userData->id;
    $result = $this->db->order_by('id', 'desc')->get_where('tbl_cart', array('userid' => $userid))->result();
    // $result1 = $this->db->delete('tbl_cart',array('userid'=>$userid));
    var_dump($result);
  }

  public function OrderDetails()
  {
    $this->load->view('Home/OrderDetails');
  }

  public function OrderSuccess()
  {
    $this->load->view('Home/OrderSuccess');
  }
  public function ChangePassword()
  {
    $this->load->view("Home/ChangePassword");
  }
  public function ShippingAddress()
  {
    $this->load->view("Home/ShippingAddress");
  }
  public function Blogs()
  {
    $this->load->view('Home/Blogs');
  }
  public function Blog()
  {
    $this->load->view('Home/Blog');
  }
  public function Checkout()
  {
    if ($this->permission == 'true') {
      $userid = $this->userData->id;
      $data['addresslist'] = $this->db->get_where('tbl_address', array('userid' => $userid, 'is_status' => 'true'))->result();
      $data['IndList'] = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => ''))->result();
      $data['ComboList'] = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => 'true'))->result();

      if ($this->uri->segment(3) == true) {
        $userdata = $this->db->where('id', $userid)->get('tbl_user')->row();
        $action = $this->uri->segment(3);
        if ($this->uri->segment(4) == TRUE) {
          $id = $this->uri->segment(4);
          if ($action == 'EditAddress') {
            $query = $this->db->where('id', $id)->get('tbl_address');
            if ($query->num_rows()) {
              $data["list"] = $query->result();
              $data["action"] = "EditAddress";
              $this->load->view($this->data->controller . '/UpdateData', $data);
            } else {
              redirect(base_url($this->data->controller . '/' . $this->data->method));
            }
          } else {
            redirect(base_url($this->data->controller . '/' . $this->data->method));
          }
        } else {
          if ($action == 'Checkout') {
            if (!empty($this->input->post())) {
              $this->form_validation->set_rules('address', 'Address Id', 'required|trim|numeric');

              if ($this->form_validation->run() == FALSE) {
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
              } else {
                $addressId = $this->input->post('address');
                $address = $this->db->get_where('tbl_address', array('id' => $addressId));
                if ($address->num_rows()) {
                  $address = $address->row();
                  $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => ''))->result();
                  $ComboCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'is_status' => 'false', 'is_combo' => 'true'))->result();

                  if (count($IndCart) > 0 || count($ComboCart) > 0) {
                    $totalIndividualPrice = 0;
                    $totalIndDiscount = 0;
                    foreach ($IndCart as $each) {
                      $product = $this->db->get_where('products', array('id' => $each->product_id));
                      $id = $this->userData->id;

                      if ($product->num_rows() > 0) {
                        $product = $product->row();
                        $id = $this->userData->id;
                        // code for check sale is available or not on this product 
                        $saleProduct = $this->db->get_where('sale_product', array('product_id' => $product->id, 'is_status' => 'true', 'sale_type' => 'individual'))->row();
                        if (!empty($saleProduct)) {

                          $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                          $last_date = date_create(date('Y-m-d H:i:s'));
                          $today = date_create($tblSale->end_date);
                          $date_difference = date_diff($last_date, $today);
                          $days = $date_difference->format('%r%a');
                        }
                        if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
                          $saleRate = $product->mrp;
                          $discount = (int)$saleProduct->discount;
                          $saleprice = $saleRate - (($saleRate / 100) * $discount);
                          $price = $saleprice;
                        } else {
                          $price = $product->reg_sell_price;
                        }

                        if ($each->is_giftwrap == 'true') {
                          $cartGiftWrap = json_decode($each->giftwrap_details);
                          $giftwrapid = $cartGiftWrap->giftwrapid;
                          $giftWrapDetails = $this->db->get_where('tbl_giftwrap', array('id' => $giftwrapid))->row();
                          $giftPrice = $giftWrapDetails->price;
                          $total = ($price * $each->qty) + $giftPrice;
                        } else {
                          $total = $price * $each->qty;
                        }
                        $totalIndDiscount += $total;
                      }
                    }

                    $totalComboPrice = 0;
                    $totalComboDiscount = 0;
                    foreach ($ComboCart as $each) {
                      $product = $this->db->get_where('tbl_combo', array('id' => $each->combo_id));
                      $id = $this->userData->id;
                      if ($product->num_rows() > 0) {
                        $product = $product->row();
                        $icons = explode(',', $product->image);
                        $id = $this->userData->id;
                        // code for check sale is available or not on this product 
                        $saleProduct = $this->db->get_where('sale_product', array('product_id' => $product->id, 'is_status' => 'true', 'sale_type' => 'combo'))->row();
                        if (!empty($saleProduct)) {

                          $tblSale = $this->db->get_where('tbl_sale', array('id' => $saleProduct->sale_id))->row();
                          $last_date = date_create(date('Y-m-d H:i:s'));
                          $today = date_create($tblSale->end_date);
                          $date_difference = date_diff($last_date, $today);
                          $days = $date_difference->format('%r%a');
                        }
                        if (!empty($saleProduct->sale_id) and substr(strval($days), 0, 1) != "-") {
                          $saleRate = $product->price;
                          $discount = (int)$saleProduct->discount;
                          $saleprice = $saleRate - (($saleRate / 100) * $discount);
                          $price = $saleprice;
                        } else {
                          $price = $product->discount_price;
                        }

                        #check giftwrap added or not
                        if ($each->is_giftwrap == 'true') {
                          $cartGiftWrap = json_decode($each->giftwrap_details);
                          $giftwrapid = $cartGiftWrap->giftwrapid;
                          $giftWrapDetails = $this->db->get_where('tbl_giftwrap', array('id' => $giftwrapid))->row();
                          $giftPrice = $giftWrapDetails->price;
                          $total = ($price * $each->qty) + $giftPrice;
                        } else {
                          $total = $price * $each->qty;
                        }
                        $totalComboDiscount += $total;
                      }
                    }
                    $totalprice = (int)$totalComboDiscount + (int)$totalIndDiscount;
                    $amount = $totalprice;

                    $address = json_encode($address);
                    $orderid = "OD_Slick" . rand(1000, 9999) . time();
                    $paymentOptions = $this->input->post('pay_mode');
                    if ($paymentOptions == 'online') {
                      $rzp_orderid = $this->razorpay->getRazorpayOrderID($orderid, $amount);
                    } else {
                      $rzp_orderid = '';
                    }

                    $this->data->order_id = $orderid;
                    $data_arr = array(
                      "amount" => $amount,
                      "address" => $address,
                      "userid" => $userdata->id,
                      "orderid" => $orderid,
                      "pay_mode" => $paymentOptions,
                      "order_status" => 'pending',
                      "rzp_orderid" => $rzp_orderid,
                      "rzp_paymentid" => 'pending',
                      "PaymentStatus" => "pending",
                      "is_status" => 'true',
                      "created_at" => $this->data->timestamp,
                      "modified_at" => $this->data->timestamp
                    );

                    if ($this->db->insert('tbl_order', $data_arr)) {
                      if ($this->db->where(array("userid" => $userdata->id, 'is_status' => 'false'))->update('tbl_cart', array("orderid" => $orderid, "is_status" => 'true', "modified_at" => $this->data->timestamp))) {
                        $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid))->result();
                        #Size Inventory Management For Individual
                        foreach ($IndCart as $each) {
                          $product = $this->db->get_where('products', array('id' => $each->product_id));
                          $id = $this->userData->id;
                          #Size Inventory Management
                          if ($each->size != 'NA') {
                            $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                            $json_sizestock = json_decode($variant->size);
                            foreach ($json_sizestock as $eachSize) {
                              foreach ($eachSize as $size => $size_stock) {
                                if ($size == $each->size) {
                                  $size_count = ($size_stock - $each->qty);
                                  $arr[] = array($size => $size_count);
                                } else {
                                  $arr[] = array($size => $size_stock);
                                }
                              }
                            }
                            $this->db->where('id', $each->variant_id)->update('product_variant', array('size' => json_encode($arr)));
                          }
                        }
                        if ($paymentOptions == 'online') {
                          $rzpOrderData = $this->razorpay->getRazorpayOrder($rzp_orderid);
                          if ($rzpOrderData) {
                            $data['baseUrl'] = base_url();
                            $data['rzp_api_key'] = $this->razorpay->rzp_api_key;
                            $data['rzp_api_secret'] = $this->razorpay->rzp_api_secret;
                            $data['rzpAmount'] = $rzpOrderData->amount;
                            $data['rzpOrderId'] = $rzpOrderData->id;
                            $data['enrollData'] = (object) $data_arr;
                            $data['product'] = 'SlickPattern';
                            $data['description'] = "Payment For Shopping at SlickPattern";
                            $data['logo'] = base_url('public/images/logo/logo.png');

                            $output['res'] = 'pay';
                            $output['res'] = 'pay';
                            $output['msg'] = 'Please Pay';
                            $output['data'] = $data;
                          } else {
                            $output['msg'] = 'Invalid Order.';
                          }
                        } else {
                          $output['redirect'] = base_url('Home/Order');
                          $output['res'] = 'success';
                          $output['msg'] = 'Order Successfully';
                        }
                      } else {
                        $output['msg'] = 'Something Went Wrong';
                      }
                    } else {
                      $output['msg'] = 'something went wrong!';
                    }
                  }
                } else {
                  $output['res'] = 'success';
                  $output['msg'] = 'Invalid Address';
                }
              }
            } else {
              $output['res'] = 'error1';
              $output['msg'] = 'Data Is Required.';
            }
            echo json_encode([$output]);
          } elseif ($action == 'AddAddress') {
            if (!empty($this->input->post())) {
              $this->form_validation->set_rules('state', 'State', 'required|trim');
              $this->form_validation->set_rules('city', 'City', 'required|trim');
              $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim|min_length[6]|max_length[6]');
              $this->form_validation->set_rules('addressline1', 'Address Line 1', 'required|trim');
              $this->form_validation->set_rules('addressline2', 'Address Line 2', 'required|trim');
              $this->form_validation->set_rules('name', 'Reciever Name', 'required|trim');
              $this->form_validation->set_rules('addresstype', 'Address Type', 'required|trim');
              $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|max_length[10]');
              $this->form_validation->set_rules('defaultaddress', 'Default Address', 'trim');
              if ($this->form_validation->run() == FALSE) {
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
              } else {
                if (!empty($this->input->post('defaultaddress'))) {
                  $default = 'true';
                } else {
                  $default = 'false';
                }

                $insertData = [
                  'userid' => $userid,
                  'state' => $this->input->post('state'),
                  'city' => $this->input->post('city'),
                  'pincode' => $this->input->post('pincode'),
                  'line1' => $this->input->post('addressline1'),
                  'line2' => $this->input->post('addressline2'),
                  'name' => $this->input->post('name'),
                  'address_type' => $this->input->post('addresstype'),
                  'mobile' => $this->input->post('mobile'),
                  'default_address' => $default,
                  'is_status' => 'true',
                  'created_at' => $this->data->timestamp,
                  'modified_at' => $this->data->timestamp
                ];
                $insertData = $this->security->xss_clean($insertData);
                if ($this->db->insert('tbl_address', $insertData)) {
                  $output['res'] = 'success';
                  $output['msg'] = 'Address Successfully Added';

                  if ($default == 'true') {
                    $id = $this->db->insert_id();
                    if ($this->db->get_where('tbl_address', array('userid' => $userid))->num_rows() > 0) {
                      $this->db->where('userid', $userid)->update('tbl_address', ['default_address' => 'false']);
                      $this->db->where('id', $id)->update('tbl_address', ['default_address' => 'true']);
                    }
                  }
                } else {
                  $output['msg'] = 'Something went wrong in Data Saving.';
                }
              }
            }
            echo json_encode([$output]);
          } else if ($action == 'UpdateAddress') {
            if (!empty($this->input->post())) {
              if (empty($this->input->post("id"))) {
                $output['msg'] = 'ID is required.';
              } else {
                $query = $this->db->where('id', $this->input->post("id"))->get('tbl_address');
                if ($query->num_rows()) {
                  $data['list'] = $query->result();

                  $this->form_validation->set_rules('state', 'State', 'required|trim');
                  $this->form_validation->set_rules('city', 'City', 'required|trim');
                  $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim|min_length[6]|max_length[6]');
                  $this->form_validation->set_rules('addressline1', 'Address Line 1', 'required|trim');
                  $this->form_validation->set_rules('addressline2', 'Address Line 2', 'required|trim');
                  $this->form_validation->set_rules('name', 'Reciever Name', 'required|trim');
                  $this->form_validation->set_rules('addresstype', 'Address Type', 'required|trim');
                  $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|max_length[10]');
                  $this->form_validation->set_rules('defaultaddress', 'Default Address', 'trim');

                  if ($this->form_validation->run() == FALSE) {
                    $msg = explode('</p>', validation_errors());
                    $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                  } else {

                    if (!empty($this->input->post('defaultaddress'))) {
                      $default = 'true';
                    } else {
                      $default = 'false';
                    }

                    $updateData = [
                      'state' => $this->input->post('state'),
                      'city' => $this->input->post('city'),
                      'pincode' => $this->input->post('pincode'),
                      'line1' => $this->input->post('addressline1'),
                      'line2' => $this->input->post('addressline2'),
                      'name' => $this->input->post('name'),
                      'address_type' => $this->input->post('addresstype'),
                      'mobile' => $this->input->post('mobile'),
                      'default_address' => $default,
                      'modified_at' => $this->data->timestamp
                    ];
                    $updateData = $this->security->xss_clean($updateData);
                    $result = $this->db->where('id', $data['list'][0]->id)->update('tbl_address', $updateData);
                    if ($result) {
                      $output['res'] = 'success';
                      $output['msg'] = 'Data Updated Successfully.';
                      if ($default == 'true') {
                        if ($this->db->get_where('tbl_address', array('userid' => $data['list'][0]->userid))->num_rows() > 0) {
                          $this->db->where('userid', $data['list'][0]->userid)->update('tbl_address', ['default_address' => 'false']);
                          $this->db->where('id', $data['list'][0]->id)->update('tbl_address', ['default_address' => 'true']);
                        }
                      }
                    } else {
                      $output['msg'] = 'Something went wrong in Data Saving.';
                    }
                  }
                }
              }
            }
            echo json_encode([$output]);
          }
        }
      } else {
        $data['wishlist'] = $this->db->get_where('tbl_wishlist', array('userid' => $userid))->result();
        if (!empty($data['IndList']) or !empty($data['ComboList'])) {
          $this->load->view("Home/Checkout", $data);
        } else {
          $this->session->set_flashdata(['res' => 'error', 'msg' => 'No Items In Your Cart']);
          redirect(base_url());
        }
      }
    } else {
      $this->session->set_flashdata(['res' => 'error', 'msg' => 'Please Login To Continue']);
      redirect(base_url('Home/Login'));
    }
  }
  public function Press()
  {
    $this->load->view('Home/Press');
  }

  public function Career()
  {
    $this->data->table = 'tbl_job_post';
    if ($this->sitepermission->career) {
      if ($this->uri->segment(3) == true) {
        if (!empty($_FILES['icon']['name'])) {
          $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
          $filename = time() . rand() . "." . $extension3;
          $upload_errors = array();
          $config['upload_path'] = './uploads/' . $this->data->folder . '/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = 2048;
          $config['file_name'] = $filename;
          $this->load->library('upload', $config);
          if (!$this->do_upload('icon')) {
          }
        }

        $action = $this->uri->segement(3);
        if ($action == 'Add') {
          // $insertData=[
          // 'name'
          // 'email'
          // 'mobile'
          // 'address'
          // 'position'
          // 'message'
          // 'icon'
          // 'is_status'
          // 'created_at'
          // 'modified_ats'
          // ]
        }
      } else {
        $data['list'] = $this->db->get_where($this->data->table, ['is_status' => 'true'])->result();
        $this->load->view('Home/Career', $data);
      }
    } else {
      $this->load->view($this->data->controller . '/page_not_found');
    }
  }

  // public function TermAndCondition()
  // {
  // 	$this->load->view('Home/TermAndCondition');	
  // }

  public function TermAndCondition()
  {
    // $data['list'] = $this->db->get("tbl_termcondition")->row();
    $this->load->view('Home/TermAndCondition');
  }

  public function PrivacyPolicy()
  {
    $this->load->view('Home/PrivacyPolicy');
  }
  public function CancellationPolicy()
  {
    $this->load->view('Home/CancellationPolicy');
  }
  public function ReturnPolicy()
  {
    $this->load->view('Home/ReturnPolicy');
  }
  public function FAQs()
  {
    $this->load->view('Home/Faq');
  }
  public function InfringementPolicy()
  {
    $this->load->view('Home/InfringementPolicy');
  }

  public function BecomePartner()
  {
    $this->load->view('Home/BecomePartner');
  }

  public function WorkWithUs()
  {
    $this->data->table = 'fashion_expert';
    $this->data->key = 'Expert';
    $output['res'] = 'error';

    if ($this->uri->segment(3) == true) {
      $action = $this->uri->segment(3);
      if ($action == 'Add') {
        if (!empty($this->input->post())) {
          if ($this->form_validation->run($this->data->key) == FALSE) {
            $msg = explode('</p>', validation_errors());
            $output['msg'] = str_ireplace('<p>', '', $msg[0]);
          } else {
            $insertData = [
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'mobile' => $this->input->post('mobile'),
              'password ' => $this->input->post('password'),
              'is_status' => 'false',
              'is_verified' => 'false',
              'created_at' => $this->data->timestamp,
              'modified_at' => $this->data->timestamp
            ];
            $insertData = $this->security->xss_clean($insertData);
            if ($this->db->insert($this->data->table, $insertData)) {
              $output['res'] = 'success';
              $output['msg'] = 'Your Application Is Under Review It May be Tak 2-3 Working Days';
            } else {
              $output['msg'] = 'Something went wrong in Data Saving.';
            }
          }
        }
      }
      echo json_encode([$output]);
    } else {
      $this->load->view('Home/WorkWithUs');
    }
  }
  public function Disclaimer()
  {
    $this->load->view('Home/Disclaimer');
  }
  public function Products()
  {
    $this->load->view('Home/Product2');
  }
  public function GiftCards()
  {
    $this->load->view('Home/GiftCards');
  }
  public function Rewards()
  {
    $this->load->view('Home/Rewards');
  }
  public function OrderTracking()
  {
    $this->load->view('Home/OrderTracking');
  }
  public function BuyIt()
  {
    $this->load->view('Home/BuyIt');
  }
  public function ShippingPolicy()
  {
    $this->load->view('Home/ShippingPolicy');
  }
  public function RefundPolicy()
  {
    $this->load->view('Home/RefundPolicy');
  }
  public function ExchangePolicy()
  {
    $this->load->view('Home/ExchangePolicy');
  }
  public function ShoppingGuid()
  {

    $this->load->view('Home/ShoppingGuid');
  }
  public function PaymentMethod()
  {
    $this->load->view('Home/PaymentMethod');
  }
  public function CouponRedemption()
  {
    $this->load->view('Home/CouponRedemption');
  }
  public function ChooseYourSize()
  {
    $this->load->view('Home/ChooseYourSize');
  }
  public function Unboxing()
  {
    $this->load->view('Home/Unboxing');
  }
  public function GiftWrapping()
  {
    $this->load->view('Home/GiftWrapping');
  }

  // public function Logout()
  // {	
  // delete_cookie('system_id');
  // delete_cookie('user_id');
  // redirect(base_url('Home/Login'));
  // }

  public function Logout()
  {
    delete_cookie('system_id');
    delete_cookie('user_id');
    // $this->session->set_flashdata(['res'=>'success','msg'=>'User Loged Out!']);
    redirect(base_url('Home/Login'));
  }

  public function BecomeSeller()
  {
    if ($this->sitepermission->become_seller) {
      $this->data->table = 'purchase_vendor';
      $this->data->key = 'Purchase Vendor';
      $output['res'] = 'error';

      if ($this->uri->segment(3) == true) {
        $action = $this->uri->segment(3);
        if ($action == 'Add') {
          if (!empty($this->input->post())) {
            if ($this->form_validation->run($this->data->key) == FALSE) {
              $msg = explode('</p>', validation_errors());
              $output['msg'] = str_ireplace('<p>', '', $msg[0]);
            } else {
              $insertData = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'address ' => $this->input->post('address'),
                'is_status' => 'false',
                'created_at' => $this->data->timestamp,
                'modified_at' => $this->data->timestamp
              ];
              $insertData = $this->security->xss_clean($insertData);
              if ($this->db->insert($this->data->table, $insertData)) {
                $output['res'] = 'success';
                $output['msg'] = 'Your Registration Is Successfull';
              } else {
                $output['msg'] = 'Something went wrong in Data Saving.';
              }
            }
          }
        }
        echo json_encode([$output]);
      } else {

        $this->load->view('Home/BecomeSeller');
      }
    } else {
      $this->load->view('Home/page_not_found');
    }
  }

  public function Feedback()
  {
    $this->data->table = 'site_feedback';
    $output['res'] = 'error';
    if ($this->uri->segment(3) == true) {
      $action = $this->uri->segment(3);
      if ($action == 'Add' && $this->permission == 'true') {
        $userid = $this->userData->id;
        $questions = $this->input->post('question[]');
        $data_arr = [];
        $count = 1;
        $is_exist = $this->db->distinct('question')->where_in('question', $questions)->where('userid', $userid)->get('site_feedback')->num_rows();
        if ($is_exist >= count($questions)) {
          for ($i = 0; $i < count($questions); $i++) {
            $isAvl = $this->db->distinct('question')->where(['userid' => $userid, 'question' => $questions[$i]])->get('site_feedback')->num_rows();
            if ($isAvl < 1) {
              $opt = $this->input->post('option_' . $count);
              $insertData = [
                'userid' => $userid,
                'question' => $questions[$i],
                'response' => $opt,
                'is_status' => 'true',
                'created_at' => $this->data->timestamp,
                'modified_at' => $this->data->timestamp,
              ];
              array_push($data_arr, $insertData);
              $count++;
            }

            if ($this->db->insert_batch($this->data->table, $data_arr)) {
              $output['res'] = 'success';
              $output['msg'] = 'Thank You! Your feedback has been sent';
            } else {
              $output['msg'] = 'Something went wrong!';
            }
          }
        } else {
          $output['msg'] = 'You already attempted this survey';
        }
      } else {
        $output['res'] = 'error';
        $output['msg'] = 'Please login to give your feedback!';
      }
      echo json_encode([$output]);
    } else {
      $query = $this->db->select('*,faqs.id as qid')->from('faqs')->join('faqs_category', 'faqs_category.id=faqs.category_id')->where(['faqs_category.name' => 'Website Survey', 'faqs.is_status' => 'true'])->get();
      $data["list"] = $query->result();
      $this->load->view('Home/Feedback', $data);
    }
  }


  public function PrebookPaymentResponse()
  {
    $table = 'tbl_prebook';
    $data_arr = $this->input->post('data');
    $userid = $data_arr['userid'];
    if (!empty($this->uri->segment(3)) and !empty($this->uri->segment(4))) {
      $rzporderid = $this->uri->segment(3);
      $paymentid = $this->uri->segment(4);
      $rzp_order = (array) $this->razorpay->getRazorpayOrder($rzporderid);
      $rzp_order_payment = (array) $this->razorpay->getRazorpayOrderPayment($rzporderid);
      $rzp_order = array_values($rzp_order)[0];
      $rzp_order_payment = array_values((array)array_values($rzp_order_payment)[0]['items'][0])[0];
      unset($rzp_order['notes']);
      unset($rzp_order_payment['notes']);
      unset($rzp_order_payment['acquirer_data']);
      $orderid = $rzp_order['receipt'];
      $responsedata = base64_encode(json_encode($rzp_order_payment));
      if ($rzp_order) {
        if ($rzp_order['status'] == 'paid') {
          if ($this->db->insert($table, $data_arr)) {
            $this->db->where(array("orderid" => $orderid))->update('tbl_prebook', array("PaymentStatus" => "Success", "rzp_paymentid" => $paymentid));
            $output['res'] = 'success';
            $output['msg'] = 'Payment Successfully Done!';
          } else {
            $output['res'] = 'error';
            $output['msg'] = 'Something Went Wrong!';
          }
        } else {
          $output['res'] = 'error';
          $output['msg'] = 'Payment Failed!';
        }
        echo json_encode([$output]);
      } else {
        redirect(base_url());
      }
    }
  }

  public function PaymentResponseOrder()
  {
    $data_arr = $this->input->post('data');
    $cart_details = $this->input->post('cart_details');
    $apply_status = $this->input->post('apply_status');
    $apply_type = $this->input->post('apply_type');
    $apply_id = $this->input->post('apply_id');
    $userid = $data_arr['userid'];
    $output['res'] = 'error';
    $table = 'tbl_order';

    if (!empty($this->uri->segment(3)) and !empty($this->uri->segment(4))) {
      $rzporderid = $this->uri->segment(3);
      $paymentid = $this->uri->segment(4);
      $rzp_order = (array) $this->razorpay->getRazorpayOrder($rzporderid);
      $rzp_order_payment = (array) $this->razorpay->getRazorpayOrderPayment($rzporderid);
      $rzp_order = array_values($rzp_order)[0];
      $rzp_order_payment = array_values((array)array_values($rzp_order_payment)[0]['items'][0])[0];
      unset($rzp_order['notes']);
      unset($rzp_order_payment['notes']);
      unset($rzp_order_payment['acquirer_data']);

      $responsedata = base64_encode(json_encode($rzp_order_payment));

      if ($rzp_order) {
        if ($rzp_order['status'] == 'paid') {
          if ($this->db->insert('tbl_order', $data_arr)) {
            $orderid = $rzp_order['receipt'];
            $orderAmount = $rzp_order['amount_paid'] / 100; // ;To Get Amount In Rupees

            if ($this->db->where(array("orderid" => $orderid))->update('tbl_order', array("payment_response" => $responsedata, "modified_at" => $this->data->timestamp))) {
              $this->db->where(array("orderid" => $orderid))->update('tbl_order', array("PaymentStatus" => "Success", "rzp_paymentid" => $paymentid));
              $this->db->where(array("is_status" => "false", 'availability' => '', 'userid' => $userid))->update('tbl_cart', array("is_status" => "true", "orderid" => $orderid));

              #update cart price details
              if (!empty($cart_details)) {
                $this->db->update_batch('tbl_cart', $cart_details, 'id');
              }

              #Size Inventory Management For Individual
              $IndCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => '', 'availability' => ''))->result();
              if (!empty($IndCart)) {
                foreach ($IndCart as $each) {
                  $product = $this->db->get_where('products', array('id' => $each->product_id))->row();
                  $id = $this->userData->id;
                  #Size Inventory Management
                  if ($each->size != 'NA') {
                    $variant = $this->db->get_where('product_variant', array('id' => $each->variant_id))->row();
                    $json_sizestock = json_decode($variant->size);
                    $arr = array();
                    $count = 0;
                    foreach ($json_sizestock as $eachSize) {
                      foreach ($eachSize as $size => $size_stock) {
                        if ($size == $each->size) {
                          $size_count = ($size_stock - $each->qty);
                          array_push($arr, array($size => $size_count));
                          if ($size_count < 1) {
                            $count++;
                          }
                        } else {
                          array_push($arr, array($size => $size_stock));
                          if ($size_stock < 1) {
                            $count++;
                          }
                        }
                      }
                    }

                    #update status and stock quantity of product variant 
                    if (count($json_sizestock) == $count) {
                      $this->db->where('id', $each->variant_id)->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                      # update status combo product 
                      $ComboStock = $this->db->get_where('combo_item', ['product_id' => $each->product_id, 'variant_id' => $each->variant_id, 'is_status' => 'true'])->result();
                      if (!empty($ComboStock)) {
                        foreach ($ComboStock as $stock) {
                          $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                        }
                      }
                    } else {
                      $this->db->where('id', $each->variant_id)->update('product_variant', array('size' => json_encode($arr)));
                    }

                    #update stock quantity and status of purchasing product 
                    $variantStock = $this->db->get_where('product_variant', ['product_id' => $each->product_id, 'is_status' => 'true'])->num_rows();
                    if ($variantStock < 1) {
                      $this->db->where('id', $each->product_id)->update('products', array('is_status' => 'false'));
                    }
                  } else {
                    $updatedStock = ($product->stock - $each->qty);
                    if ($updatedStock < 1) {
                      $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                    } else {
                      $this->db->where('id', $each->product_id)->update('products', array('stock' => $updatedStock));
                    }
                  }
                }
              }

              #Size Inventory Management For Combo
              $id = $this->userData->id;
              $ComboCart = $this->db->get_where('tbl_cart', array('userid' => $userid, 'orderid' => $orderid, 'is_combo' => 'true', 'availability' => ''))->result();
              if (!empty($ComboCart)) {
                foreach ($ComboCart as $each) {
                  $items = explode(",", $each->product_id);
                  $itemsVariant = explode(",", $each->variant_id);
                  $sizes = explode(",", $each->size);
                  if (!empty($items) and !empty($itemsVariant)) {
                    for ($i = 0; $i < count($items); $i++) {
                      $product = $this->db->get_where('products', ['id' => $items[$i]])->row();
                      $variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
                      $json_sizestock = json_decode($variants->size);
                      if ($sizes[$i] != 'NA') {
                        $arr = array();
                        $count = 0;
                        foreach ($json_sizestock as $eachSize) {
                          foreach ($eachSize as $size => $size_stock) {
                            if ($size == $sizes[$i]) {
                              $size_count = ($size_stock - $each->qty);
                              array_push($arr, array($size => $size_count));
                              if ($size_count < 1) {
                                $count++;
                              }
                            } else {
                              array_push($arr, array($size => $size_stock));
                              if ($size_stock < 1) {
                                $count++;
                              }
                            }
                          }
                        }
                        #update status and stock quantity of product variant 
                        if (count($json_sizestock) == $count) {
                          $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('is_status' => 'false', 'size' => json_encode($arr)));
                          # update status combo product 
                          $ComboStock = $this->db->get_where('combo_item', ['product_id' => $items[$i], 'variant_id' => $itemsVariant[$i], 'is_status' => 'true'])->result();
                          if (!empty($ComboStock)) {
                            foreach ($ComboStock as $stock) {
                              $this->db->where('id', $stock->combo_id)->update('tbl_combo', array('is_status' => 'false'));
                            }
                          }
                        } else {
                          $this->db->where('id', $itemsVariant[$i])->update('product_variant', array('size' => json_encode($arr)));
                        }

                        #update stock quantity and status of purchasing product 
                        $variantStock = $this->db->get_where('product_variant', ['product_id' => $items[$i], 'is_status' => 'true'])->num_rows();
                        if ($variantStock < 1) {
                          $this->db->where('id', $items[$i])->update('products', array('is_status' => 'false'));
                        }
                      } else {
                        $updatedStock = ($product->stock - $each->qty);
                        if ($updatedStock < 1) {
                          $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock, 'is_status' => 'false'));
                        } else {
                          $this->db->where('id', $items[$i])->update('products', array('stock' => $updatedStock));
                        }
                      }
                    }
                  }
                }
              }

              if ($apply_status == 'true') {
                $this->db->where('orderid', $orderid)->update('tbl_order', ['giveway_type' => $apply_type, 'couponid' => $apply_id]);
                if ($apply_type == 'cashback') {

                  $cashback = $this->db->get_where('manage_cashback', ['id' => $apply_id])->row();
                  $upQty = $cashback->cashback_count - 1;
                  if ($upQty < 1) {
                    $cashback_status = 'false';
                  } else {
                    $cashback_status = 'true';
                  }
                  $this->db->where(['id' => $apply_id])->update('manage_cashback', ['cashback_count' => $upQty, 'is_status' => $cashback_status]);
                } elseif ($apply_type == 'reward') {
                  $reward = $this->db->get_where('reward_point', ['id' => $apply_id])->row();
                  $upQty = $reward->reward_count - 1;
                  if ($upQty < 1) {
                    $reward_status = 'false';
                  } else {
                    $reward_status = 'true';
                  }
                  $this->db->where(['id' => $apply_id])->update('reward_point', ['reward_count' => $upQty, 'is_status' => $reward_status]);
                } elseif ($apply_type == 'store_user_coupon') {

                  #Coupon Inventory Management
                  if (!empty($apply_id)) {
                    $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $apply_id, 'is_status' => 'true'])->row();
                    $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                    $coupon_status = 'true';
                    if ($CouponQty < 1) {
                      $coupon_status = 'false';
                    } else {
                      $coupon_status = 'true';
                    }
                    $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                  }
                } elseif ($apply_type == 'user_coupon') {
                  $this->db->where(['id' => $apply_id])->update('user_coupon', ['is_status' => 'false']);
                } elseif ($apply_type == 'offer_apply') {
                  $is_update = $this->db->where(['is_status' => 'false', 'userid' => $userid])->update('tbl_cart', $OfferCoupon);
                  if ($is_update) {
                    if (!empty($apply_id)) {
                      $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $apply_id, 'is_status' => 'true'])->row();
                      $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                      $coupon_status = 'true';
                      if ($CouponQty < 1) {
                        $coupon_status = 'false';
                      } else {
                        $coupon_status = 'true';
                      }
                      $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                    }
                  }
                } else {
                  if (!empty($list[0]->coupon_id)) {
                    $couponDetails = $this->db->get_where('tbl_coupon', ['id' => $list[0]->coupon_id, 'is_status' => 'true'])->row();
                    $CouponQty = (int)($couponDetails->no_of_coupon) - 1;
                    $coupon_status = 'true';
                    if ($CouponQty < 1) {
                      $coupon_status = 'false';
                    } else {
                      $coupon_status = 'true';
                    }
                    $this->db->where('id', $apply_id)->update('tbl_coupon', array('is_status' => $coupon_status, 'no_of_coupon' => $CouponQty));
                  }
                }
              }

              #User wallet Management
              $user_wallet = $this->db->get_where('user_wallet', ['userid' => $userid, 'is_status' => 'true'])->result();
              $order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
              $reward_point_setting = $this->db->get_where('reward_point_setting')->row();
              if (!empty($order_details)) {
                if ($order_details->wallet_apply_type == 'cashback') {
                  $due = (int)$order_details->wallet_discount;
                } else {
                  $due = (int)($order_details->wallet_discount / $reward_point_setting->reward_value);
                  $due = round($due, 0);
                }
                if (!empty($user_wallet)) {
                  foreach ($user_wallet as $wallet) {
                    if ($wallet->is_status == 'true') {
                      if ($order_details->wallet_apply_type == 'reward') {
                        if ($wallet->coins != '' && $wallet->coins != '0') {
                          if ($due <= 0) {
                            break;
                          } else {
                            if ($due >= $wallet->coins) {
                              $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'false', 'coins' => '0']);
                              if ($is_update) {
                                $due -= (int)$wallet->coins;
                              }
                            } elseif ($due < $wallet->coins) {
                              $update = ($wallet->coins - $due);
                              $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'true', 'coins' => $update]);
                              if ($is_update) {
                                $due -= (int)$wallet->coins;
                              }
                            }
                          }
                        }
                      } elseif ($order_details->wallet_apply_type == 'cashback') {
                        if ($wallet->balance != '' && $wallet->balance != '0') {
                          if ($due <= 0) {
                            break;
                          } else {
                            if ($due >= $wallet->balance) {
                              $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'false', 'balance' => '0']);
                              if ($is_update) {
                                $due -= (int)$wallet->balance;
                              }
                            } elseif ($due < $wallet->balance) {
                              $update = ($wallet->balance - $due);
                              $is_update = $this->db->where('id', $wallet->id)->update('user_wallet', ['is_status' => 'true', 'balance' => $update]);
                              if ($is_update) {
                                $due -= (int)$wallet->balance;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }

              $output['res'] = 'success';
              $output['msg'] = 'Payment Successfully Done!';
              $output['redirect'] = base_url('Home/Order');
            }
          }
        } else {
          $output['res'] = 'error';
          $output['msg'] = 'Payment Failed!';
        }
      } else {
        $output['res'] = 'error';
        $output['msg'] = 'Invalid Order';
      }
      echo json_encode([$output]);
    } else {
      redirect(base_url());
    }
  }




  // mobile no 
  public function register_user()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|numeric|min_length[10]|max_length[10]');

    if ($this->form_validation->run() == FALSE) {
      $this->output->set_output(json_encode(['success' => false, 'msg' => validation_errors()]));
    } else {
      $query = $this->db->get_where('tbl_user', array('mobile' => $this->input->post('mobile'), 'is_status' => 'true'));

      if ($query->num_rows() > 0) {

        $resdata = $query->row();
        $id = $resdata->id;
        $resmobile = $resdata->mobile;
        $updatedata = array(
          'otp' => '1234',
        );
        $updata = $this->db->where('mobile', $resmobile)->update("tbl_user", $updatedata);
        if ($updata) {
          if (isset($_COOKIE['user_id'])) {
            delete_cookie('user_id');
          } else {
            $cookie_name = "user_id";
            $cookie_value = json_encode($resdata);
            $expiry = time() + (60 * 60 * 24 * 30);
            setcookie($cookie_name, $cookie_value, $expiry, "/");
          }
        }

        $this->output->set_output(json_encode(['success' => true, 'msg' => 'User Mobile  Verify.', 'is_old_user' => true]));
      } else {

        $ref_by = $this->input->post('ref_by');
        $refrel_code = !empty($ref_by) ? $ref_by : '';


        $user_ref_code = strtoupper(substr('SLICK', 0, 3)) . 'S' . rand(1000, 9999) . 'P';

        $insertData = array(
          'mobile' => $this->input->post('mobile'),
          'ref_by' => $refrel_code,
          'ref_code' => $user_ref_code,
          'is_status' => 'true',
          'created_at' => $this->data->timestamp,
          'modified_at' => $this->data->timestamp
        );

        $insdata = $this->db->insert('tbl_user', $insertData);
        if ($insdata) {
          $user_id = $this->db->insert_id();
          $data = $this->db->get_where('tbl_user', ['ref_by' => $refrel_code])->row();

          if (!empty($data)) {
            $benefits_data = $this->db->get_where('reward_point_setting', array('is_status' => 'true'))->row();
            if ($benefits_data->first_order) {
              $referral_name = $data->name;
              $remark = $referral_name . " gifted you";
              $referral_data = [
                'referral_id' => $data->ref_code,
                'referred_id' => $user_ref_code,
                'remarks' => $remark,
                'benefits_type' => 'points',
                'benefits' => $benefits_data->first_order,
                'is_status' => 'true',
                'created_at' => $this->data->timestamp,
                'modified_at' => $this->data->timestamp
              ];

              $this->db->insert('referral_history', $referral_data);

              $coins = $benefits_data->first_order;
              $expire_date = $benefits_data->expire_date;
              $rewardData = [
                'userid' => $user_id,
                'coins' => $coins,
                'expire_date' => $expire_date,
                'is_status' => 'true',
                'remark_as' => $remark,
                'created_at' => $this->data->timestamp,
                'modified_at' => $this->data->timestamp,
              ];
              $this->db->insert('user_wallet', $rewardData);
            }
          }
          // end here 

          $query = $this->db->get_where('tbl_user', array('id' => $user_id));
          if ($query->num_rows() > 0) {
            if (isset($_COOKIE['user_id'])) {
              delete_cookie('user_id');
            } else {
              $cookie_name = "user_id";
              $cookie_value = json_encode($query->row());
              $expiry = time() + (60 * 60 * 24 * 30);
              setcookie($cookie_name, $cookie_value, $expiry, "/");
            }
          }
        }

        $otp = '1234';
        $this->db->set('otp', $otp);
        $this->db->where('mobile', $this->input->post('mobile'));
        $this->db->update('tbl_user');

        $this->output->set_output(json_encode(['success' => true, 'msg' => 'User registered successfully.']));
      }
    }
  }


  public function verify_otp()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('otp', 'OTP', 'required|trim');
    $this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|numeric|min_length[10]|max_length[10]');

    if ($this->form_validation->run() == FALSE) {
      $this->output->set_output(json_encode(['success' => false, 'msg' => validation_errors()]));
      // $this->session->set_flashdata(['res'=>'success','msg'=>validation_errors()]);
    } else {
      $query = $this->db->get_where('tbl_user', array('mobile' => $this->input->post('mobile'), 'otp' => $this->input->post('otp')));
      if ($query->num_rows() > 0) {
        $this->output->set_output(json_encode(['success' => true, 'msg' => 'OTP verified successfully.', 'redirect' => base_url('Home/Profile')]));

        // $this->session->set_flashdata(['res'=>'success','msg'=>'OTP verified successfully.']);
        // redirect(base_url('Home/Profile'));
      } else {
        // $this->session->set_flashdata(['res'=>'error','msg'=>'Invalid OTP.']);
        // redirect(base_url());
        $this->output->set_output(json_encode(['success' => false, 'msg' => 'Invalid OTP.']));
      }
    }
  }

  public function Refresh()
{
  redirect(base_url());
}


  // end 
public function vaibhav()
{
  return $this->load->view('Home/vaibhav');
}


}
