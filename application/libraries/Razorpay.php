<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once APPPATH .'third_party/razorpay/Razorpay.php';
	use Razorpay\Api\Api;
	#[\AllowDynamicProperties]
	class Razorpay
	{
		private $CI;
		
		public $rzp_api_key, $rzp_api_secret, $rzp_env;
		
		public function __construct()
		{
			$this->CI =& get_instance();
			
			$this->rzp_env="TEST";  # TEST/LIVE
			
			
			if($this->rzp_env=="TEST")
			{
				$this->rzp_api_key="rzp_test_6kz5nGEzi8uXRw";  
			}
			else if($this->rzp_env=="LIVE")
			{
				$this->rzp_api_key="rzp_live_1bGogPvHaanZYl";
			}
			
			
			if($this->rzp_env=="TEST")
			{
				$this->rzp_api_secret="SMtig3JkAqFP7nIMpODyyuAL";    
			}
			else if($this->rzp_env=="LIVE")
			{
				$this->rzp_api_secret="1NvCRnnGYMZ9KMMsnhY6fV0K";
			}  	
		}
		
		# Rezorpay Order ID Generator
		
		function getRazorpayOrderID($oid, $amount)
		{
			
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret);
			
			$orderData  = $api->order->create([
			'receipt'         => $oid,
			'amount'          => (double)$amount*100.0, // IN Paisa
			'currency'        => 'INR',
			'payment_capture' =>  1
			]);
			
			return $orderData->id;
			
		}
		
		function getRazorpayOrder($oid)
		{
			
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret);
			
			$orderData  = $api->order->fetch($oid);
			
			return $orderData;
			
		}
		
		function getRazorpayOrderPayment($oid)
		{
			
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret);
			
			$orderData  = $api->order->fetch($oid)->payments();
			
			return $orderData;
		}
		
		function getRazorpayRefund($paymentId,$amount)
		{
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret);
			$orderData  = $api->payment->fetch($paymentId)->refund(
			[
			"amount"=> (double)$amount,
			"speed"=>"normal", 
			]
			);
			return $orderData;
		}
		
		function sendPaymentLinks($amount,$orderid,$userdata,$expired_time){
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret); 
			$callback_url=base_url('Home/Prebooking/UpdatePaymentStatus'); 
			$paymentlinks=$api->paymentLink->create(
			[
			'amount'=>(double)$amount*100.0, 
			'currency'=>'INR', 
			'expire_by'=>$expired_time,
			'accept_partial'=>false,
			'reference_id'=>$orderid,  
			'description' => 'payment link for receiving due amount', 
			'customer' => json_decode($userdata),
			'notify'=>array('sms'=>true,'email'=>true,'whatsapp'=>true) ,
			'reminder_enable'=>true ,
			'callback_url' => $callback_url,
			'callback_method'=>'get'
			] 
			);
			return $paymentlinks->short_url;  
		}
		
		function SignatureVerify($razorpayPaymentlinkId,$razorpayPaymentId,$razorpayPaymentLinkReferenceId,$razorpayPaymentLinkStatus,$razorpayPaymentLinkSignature){
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret); 
			return $api->utility->verifyPaymentSignature(array('razorpay_payment_link_id' => $razorpayPaymentlinkId, 'razorpay_payment_id' => $razorpayPaymentId, 'razorpay_payment_link_reference_id' => $razorpayPaymentLinkReferenceId,'razorpay_payment_link_status' => $razorpayPaymentLinkStatus, 'razorpay_signature' => $razorpayPaymentLinkSignature));
		}
		
		function FetchPaymentLinks($paymentLinkId){
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret); 
			return $api->paymentLink->fetch($paymentLinkId);
		}
		
		function CancelledPaymentLinks($paymentLinkId){
			$api = new Api($this->rzp_api_key, $this->rzp_api_secret); 
			return $api->paymentLink->fetch($paymentLinkId);
		}
		
	}						