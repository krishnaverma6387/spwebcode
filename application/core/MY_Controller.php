<?php
    class MY_Controller extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            date_default_timezone_set("asia/kolkata");
			$manage_content=$this->db->get('manage_content')->row();
			$appName="";
			$appLink="";
			$appEmail="";
			$appMobileNo="";
			$appAddress="";
			$copyrightName="";
			$copyrightLink="";
			$appLogo="";
			$appRoyalLogo="";
			
			if(!empty($manage_content)){
				$appName=$manage_content->website_name;
				$appLink=$manage_content->website_link;
				$appEmail=$manage_content->website_email;
				$appMobileNo=$manage_content->website_mobile;
				$appAddress=$manage_content->website_address;
				$copyrightName=$manage_content->copyright_name;
				$copyrightLink=$manage_content->copyright_link;
				$appLogo=base_url('uploads/websitecontent/'. $manage_content->website_main_logo);
				$appRoyalLogo=base_url('uploads/websitecontent/'. $manage_content->website_royal_logo);
			}
			
			$this->data = (object) [
			'appName' => $appName,
			'appLink' => $appLink,
			'appLogo' => $appLogo,
			'appRoyalLogo' => $appRoyalLogo,
			'appEmail' => $appEmail,
			'appMobileNo' => $appMobileNo,
			'appAddress' => $appAddress,
			'copyrightName' => $copyrightName,
			'copyrightLink' => $copyrightLink,
			'controller' => $this->router->fetch_class(),
			'method' => $this->router->fetch_method(),
			'appTempletePath' => 'assets/application/',
			'timestamp' => date('Y-m-d H:i:s'),
			'date' => date("Y-m-d"),
			'time' => date("h:i:s A"),
			'day' => date("l"),
			'otp' => '1234',//rand(1000,9999),
			'password' => '123456789',//time(),
			'reference_no' =>'SlickPattern',
			'encryption_key' =>'12345'
            ];
		} 
		
		function SendSMS1($mobile, $message)
		{
			// set app name as you required
			$app_name="DigiCademy";
			$message = (int) filter_var($msg, FILTER_SANITIZE_NUMBER_INT);
			// DLT Approved OTP SMS Template ID
			$template_id="1307164706435757762";
			// never change this sms template
			// Your OTP Code is 123456. Do not share it with anyone. From AppNameHere . #TeamDigiCoders 
			$message_template="Your OTP Code is ".$message.". Do not share it with anyone. From ".$app_name." . #TeamDigiCoders";
			
			$authkey="370038AesB6X2F62ac3ea6P1";
			$mobile="91".$mobile;  
			$final_message=urlencode($message_template);  
			$sender="DIGICO";
			$route="4";
			$country="91"; 
			
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://sms.digicoders.in/api/sendhttp.php?authkey=$authkey&mobiles=$mobile&message=$final_message&sender=$sender&route=$route&country=$country&unicode=1&response=json&DLT_TE_ID=".$template_id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST =>"GET"
			));
			
			$response = curl_exec($curl);
			curl_close($curl);
			
			$result=json_decode($response);
			
			if($result->type=="success") {
				return true;
			}
			else {
				return false;
			}
		}
		
	}
	class Auth_Controller extends MY_Controller 
	{
        function __construct()
        {
			parent::__construct();
			$this->data->role_id='0';
			$this->data->title='Authentication';
			$this->data->pageTitle=preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->data->method);
			$this->data->subTitle=$this->data->pageTitle;
		}
	}
	
	class Cron_Controller extends MY_Controller 
	{
        function __construct()
        {
			parent::__construct();
			$this->data->role_id='0';
			$this->data->title='Authentication';
			$this->data->pageTitle=preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->data->method);
			$this->data->subTitle=$this->data->pageTitle;
		}
	}
	
	class Admin_Controller extends MY_Controller 
	{
        function __construct()
        {
			parent::__construct();
			$this->data->role_id='1';
			$this->data->title='Admin';
			$this->data->pageTitle=preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->data->method);
			$this->data->subTitle=$this->data->pageTitle;
			$this->data->permission=['HelpAndSupport'];
		}
	}
	
	class Home_Controller extends MY_Controller 
	{
        function __construct()
        {
			parent::__construct();
			$this->data->role_id='6';
			$this->data->title='Website';
			$this->data->pageTitle=preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->data->method);
			$this->data->subTitle=$this->data->pageTitle;
			// $this->data->lazyLoader =  base_url('public/images/logo/logo.png');
			$this->data->lazyLoader =  'https://flevix.com/wp-content/uploads/2020/01/Reload-Image-Gif-1.gif';
		}
	}
	
	class Api_Controller extends MY_Controller 
	{
        function __construct()
        {
			parent::__construct();
			$this->data->title='Apis';
			$this->data->pageTitle=preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->data->method);
			$this->data->subTitle=$this->data->pageTitle;
			
		}
	}
	
	
	
?>						