<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Cashfree
	{
		private $CI;
		public $env, $action_url, $app_id, $secret_key;
		 
		public function __construct()
		{
			$this->CI =& get_instance();
			
			$this->env="TEST";  # TEST/PROD 
			
			if($this->env=="TEST")
			{
				$this->action_url="https://test.cashfree.com/billpay/checkout/post/submit";
				$this->token_url="https://test.cashfree.com/api/v2/cftoken/order";
				$this->app_id="74203d9ea5a1b04858452415130247";
				$this->secret_key="f0ab12cf9c01a69f2001a1a849bc95ec98815c48";
			}
			
			if($this->env=="LIVE")
			{
				$this->action_url="https://www.cashfree.com/checkout/post/submit";
				$this->token_url="https://api.cashfree.com/api/v2/cftoken/order";
				$this->app_id="1202719bd477b030904f6d0204172021";
				$this->secret_key="f13e7c76b0893d7990ca04553fe1783d92eaadf3";
			}
			
		}
		
		public function generateSignature($orderId, $orderAmount, $orderCurrency, $orderNote, $customerName, $customerPhone, $customerEmail,$returnUrl, $notifyUrl) 
		{
			
			$postData = array(
			"appId" => $this->app_id,
			"orderId" => $orderId,
			"orderAmount" => $orderAmount,
			"orderCurrency" => $orderCurrency,
			"orderNote" => $orderNote,
			"customerName" => $customerName,
			"customerPhone" => $customerPhone,
			"customerEmail" => $customerEmail,
			"returnUrl" => $returnUrl,
			"notifyUrl" => $notifyUrl,
			);
			
			ksort($postData);
			$signatureData = "";
			foreach ($postData as $key => $value){
				$signatureData .= $key.$value;
			}
			
			$signature = hash_hmac('sha256', $signatureData, $this->secret_key, true);
			$signature = base64_encode($signature);
			
			return $signature;
			
		}
		
		public function generateToken($orderId,$orderAmount)
		{
			$ch = curl_init();
			
			$headers  = [
			'X-Client-Id: '.$this->app_id.'',
			'X-Client-Secret: '.$this->secret_key.'',
			'Content-Type: application/json'
			];
			
			$postData = [
			'orderId' => $orderId,
			'orderAmount' =>$orderAmount,
			'orderCurrency'=>'INR'
			];
			
			curl_setopt($ch, CURLOPT_URL,$this->token_url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			
			$result     = curl_exec ($ch);
			$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			
			$result=json_decode($result);
			return $result;
		}
		
	}				