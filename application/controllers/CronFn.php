<?php
	defined("BASEPATH") or exit("No direct script access allowed");
	class CronFn extends Cron_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Auth_model');
			$this->load->library('App');
			$this->load->library('Razorpay');
		} 
		
		public function ManageGiveway(){
			$order_track=$this->db->get_where('tbl_track_product')->result();
			if(!empty($order_track)){
				foreach($order_track as $track){
					if(!empty($track->delivered_datetime)){
						$current_date=date('Y-m-d');
						$delivered_date=date('Y-m-d',strtotime($track->delivered_datetime));
						if($delivered_date==$current_date){
							#Fetch Clubcash And Product Savings On This Order
							$totalClubCash=0;
							$totalProductSaving=0;
							$cart=$this->db->get_where('tbl_cart',['id'=>$track->cartid])->row();
							if(!empty($cart)){
								$UserWalletData=$this->db->get_where('user_wallet',['order_id'=>$cart->orderid])->row(); //Fetch all benefites for this orderid
								if(empty($UserWalletData)){
									if($cart->order_status=='delivered'){
										
										if($cart->is_combo==''){
											$product = $this->db->get_where('products',array('id'=>$cart->combo_id));
											if($product->num_rows()>0)
											{
												$product = $product->row();
												$ret_ref_status=$product->refund_status;
												$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->refund_limit." days",strtotime($track->delivered_datetime)));
												$current_date=date('Y-m-d');
												$status='false';
												if($ret_ref_status=='true')
												{
													if(($current_date<=$ret_ref_expire_date) AND ($cart->order_status=='delivered') AND empty($cart->return_status))
													{ 
														$status='true';
													} 
												} 
												
												if($status=='false'){
													$subscription='false';
													$userid=$cart->userid;
													$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
													if($subscriber->num_rows()>0){
														$subscriber=$subscriber->row();
														$plan_start_date=date('Y-m-d',strtotime($subscriber->created_at)); 
														$plan_expire_date=date('Y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
														$order_date=date('Y-m-d',strtotime($order->created_at))	; 
														if(($order_date>=$plan_start_date) AND ($order_date<=$plan_expire_date)){
															$totalClubCash+=(int)$product->royal_clubcash*$cart->qty;
															$totalProductSaving+=((int)$product->off_price*$cart->qty)-((int)$product->royal_amt*$cart->qty);
														}
													}
												}
											}
										}
										elseif($cart->is_combo=='true'){
											$product = $this->db->get_where('tbl_combo',array('id'=>$cart->product_id));
											if($product->num_rows()>0)
											{
												$product = $product->row();
												$ret_ref_status=$product->ret_refund_status;
												$ret_ref_expire_date=date('Y-m-d',strtotime("+7 days",strtotime($order['created_at'])));
												$current_date=date('Y-m-d');
												$status='false';
												if($ret_ref_status=='true')
												{
													if(($current_date<=$ret_ref_expire_date) AND ($cart->order_status=='delivered') AND empty($cart->return_status))
													{ 
														$status='true';
													} 
												} 
												
												if($status=='false'){
													$subscription='false';
													$userid=$cart->userid;
													$subscriber=$this->db->get_where('royal_subscriber',['userid'=>$userid]);
													if($subscriber->num_rows()>0){
														$subscriber=$subscriber->row();
														$plan_start_date=date('Y-m-d',strtotime($subscriber->created_at)); 
														$plan_expire_date=date('Y-m-d',strtotime("+".$subscriber->plan_duration." months",strtotime($subscriber->created_at))); 
														$order_date=date('Y-m-d',strtotime($order->created_at))	; 
														if(($order_date>=$plan_start_date) AND ($order_date<=$plan_expire_date)){
															$totalClubCash+=(int)$product->royal_clubcash*$cart->qty;
															$totalProductSaving+=((int)$product->discount_price*$cart->qty)-((int)$product->royal_amt*$cart->qty);
														}
													}
												}
											}
										}
										
										#Store Clubcash in user wallet
										if($totalClubCash>0 AND $totalProductSaving>0){
											$InsertBenefits=[
											'userid'=>$cart->userid,
											'product_saving'=>$totalProductSaving,
											'club_cash'=>$totalClubCash,
											'shipping_cost'=>'',
											'is_status'=>'true',
											'created_at'=>$this->data->timestamp,
											'modified_at'=>$this->data->timestamp,
											];
											$isInsert=$this->db->insert('royal_user_benefits',$InsertBenefits);
											if($isInsert){
												$InsertWallet=[
												'userid'=>$cart->userid,
												'order_id'=>$cart->orderid,
												'balance'=>$totalClubCash,
												'coins'=>'',
												'is_status'=>'true',
												'created_at'=>$this->data->timestamp,
												'modified_at'=>$this->data->timestamp,
												'remark_as'=>'club cash'
												];
												if($this->db->insert('user_wallet',$InsertWallet)){
													echo "club cash added in your wallet successfully";
												}
												echo "royal benefits added in your royal wallet successfully";
												
											}
										}
									}
								}else{
									continue; 
								}
							}
						}
					}
				}
			}
		}
		
		public function ManageBenefits(){
			$order_track=$this->db->get_where('tbl_track_product')->result();
			if(!empty($order_track)){
				foreach($order_track as $track){
					if(!empty($track->delivered_datetime)){
						$current_date=date('Y-m-d');
					$delivered_date=date('Y-m-d',strtotime($track->delivered_datetime));
					if($delivered_date==$current_date){
						$cart=$this->db->get_where('tbl_cart',['id'=>$track->cartid])->row();
						if(!empty($cart)){   
							if($cart->order_status=='delivered'){
								$UserWalletData=$this->db->get_where('user_wallet',['order_id'=>$cart->orderid])->row(); //Fetch all benefites for this orderid
								if(empty($UserWalletData)){
									#Fetch Cashback and reward points 
									$order_details=$this->db->get_where('tbl_order',['orderid'=>$cart->orderid])->row();
									if(!empty($order_details->cashback) || !empty($order_details->reward)){
										$total_item=$this->db->get_where('tbl_cart',['orderid'=>$cart->orderid])->num_rows();
										$total_delivered_item=$this->db->get_where('tbl_cart',['orderid'=>$cart->orderid,'order_status'=>'delivered'])->num_rows();
										if($total_delivered_item==$total_item){
											$Insert=[
											'userid'=>$cart->userid,
											'order_id'=>$cart->orderid,
											'balance'=>$order_details->cashback,
											'coins'=>$order_details->reward,
											'is_status'=>'true',
											'expire_date'=>'7', 
											'created_at'=>$this->data->timestamp,
											'modified_at'=>$this->data->timestamp,
											'remark_as'=>'Earned Cashback And Reward Points By Shopping'
											];
											$this->db->insert('user_wallet',$Insert);
											echo "cashback or reward added successfully";
										}
									}
								}
								else{
									continue;   
								}
							}
						}
					}
					}
				}
			}
		}
		
		function RewardUpdate(){
			$this
		}
	}
?>																	