<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends Auth_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Product_model');
		$this->load->library('App');

		if (empty($this->session->get_userdata()['expertattempt'])) {
			$this->expertattempts = 1;
		} else {
			$this->expertattempts = $this->session->get_userdata()['expertattempt'];
		}
	}
	public function _remap($method, $params = array())
	{
		if (method_exists($this, $method)) {
			return call_user_func_array(array($this, $method), $params);
		} else {
			$this->index();
		}
	}
	public function index()
	{
		redirect(base_url());
	}
	public function Test()
	{

		// $result=$this->db->query("ALTER TABLE `tbl_cart` ADD `orderid` VARCHAR(100) NOT NULL AFTER `qty`;");
		// echo '<pre>';
		// $result=$this->db->query("select * from tbl_order where userid=1")->result();
		// $result=$this->db->where(['id'=>'13'])->update('products',['long_desc'=>'llk,ok']);
		// var_dump($result);
	}
	public function AdminLogin()
	{
		$this->data->role_id = '1';
		$this->load->view($this->data->controller . '/' . $this->data->method);
	}

	public function VendorLogin()
	{
		$this->data->role_id = '2';
		$this->load->view($this->data->controller . '/' . $this->data->method);
	}

	public function ExpertLogin()
	{
		$this->data->role_id = '3';

		if ($this->expertattempts > 3) {
			$this->session->set_flashdata(['res' => 'error', 'msg' => "You've Attempt 3 Times Wrong Password "]);
			$this->load->view($this->data->controller . '/ExpertOtpLogin');
		} else {
			$this->load->view($this->data->controller . '/' . $this->data->method);
		}
	}

	public function GetOtpCodeExpert()
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

				$data = $this->db->get_where('fashion_expert', array('mobile' => $mobile));
				if ($data->num_rows() > 0) {
					$data = $data->row();
					if ($data->is_status == 'true') {
						$updateData = [
							'otp' => $this->data->otp,
						];
						if ($this->db->where('mobile', $mobile)->update('fashion_expert', $updateData)) {
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
					$output['msg'] = "Invlid Mobile No";
				}
			}
		} else {
			$output['res'] = "error";
			$output['msg'] = "Mobile No. Cannot Be Blank";
		}
		echo json_encode([$output]);
	}


	public function UpdateCartQty()
	{
		$output['res'] = "error";
		$output['msg'] = "";

		if (!empty($this->input->post('id'))) {
			$this->form_validation->set_rules('id', 'Cart-Id', 'required|trim|numeric');
			$this->form_validation->set_rules('type', 'Type', 'required|trim');

			if ($this->form_validation->run() == false) {
				$msg = explode('</p>', validation_errors());
				$output['msg'] = str_ireplace('<p>', '', $msg[0]);
			} else {
				$id = $this->input->post('id');

				$data = $this->db->get_where('tbl_cart', array('id' => $id));
				if ($data->num_rows() > 0) {
					$data = $data->row();
					if ($this->input->post('type') == 'plus' or $this->input->post('type') == 'minus') {
						if (($data->is_combo == '') and empty($data->combo_id)) {
							if ($this->input->post('type') == 'plus') {
								$upqty = $data->qty + 1;
								$product = $this->db->get_where('products', ['id' => $data->product_id])->row();
								$variants = $this->db->get_where('product_variant', ['id' => $data->variant_id, 'product_id' => $data->product_id])->row();
								$json = json_decode($variants->size, 2);
								foreach ($json as $each) {
									foreach ($each as $size => $size_stock) {
										if ($size == $data->size) {
											if (($data->qty + 1) <= $product->max_qty) {
												if ($size == 'NA') {
													$size_stock = $product->stock;
												}
												if ($size_stock >= $upqty) {
													$this->db->where('id', $id)->update('tbl_cart', ['availability' => '']);
												}

												if ($upqty <= $size_stock) {
													$updateData = [
														'qty' => $upqty,
													];
													if ($this->db->where('id', $id)->update('tbl_cart', $updateData)) {
														$output['res'] = "success";
														$output['msg'] = "Quantity Successfully Update";
													} else {
														$output['msg'] = "Something Went Wrong";
													}
												} else {
													$output['msg'] = "Only " . $size_stock . " product left in stock";
												}
											} else {
												$output['msg'] = "You can buy maximum " . $product->max_qty . " products only";
											}
											break;
										}
									}
								}
							} else {
								if ($data->qty > 1) {
									$upqty = $data->qty - 1;
									$product = $this->db->get_where('products', ['id' => $data->product_id])->row();
									$variants = $this->db->get_where('product_variant', ['id' => $data->variant_id, 'product_id' => $data->product_id])->row();
									$json = json_decode($variants->size, 2);
									foreach ($json as $each) {
										foreach ($each as $size => $size_stock) {
											if ($size == $data->size) {
												if ($size == 'NA') {
													$size_stock = $product->stock;
												}
												if ($size_stock >= $upqty) {
													$this->db->where('id', $id)->update('tbl_cart', ['availability' => '']);
												}
											}
										}
									}

									$updateData = [
										'qty' => $upqty,
									];
									if ($this->db->where('id', $id)->update('tbl_cart', $updateData)) {
										$output['res'] = "success";
										$output['msg'] = "Quantity Successfully Update";
									} else {
										$output['msg'] = "Something Went Wrong";
									}
								} else {
									$output['res'] = "error";
									$output['msg'] = "Quantity Must Be Atleast 1";
								}
							}
						} elseif (($data->is_combo == 'true') and !empty($data->combo_id)) {
							if ($this->input->post('type') == 'plus') {
								$upqty = $data->qty + 1;
								$items = explode(",", $data->product_id);
								$itemsVariant = explode(",", $data->variant_id);
								$sizes = explode(",", $data->size);
								$count = 1;
								if (!empty($items) and !empty($itemsVariant)) {
									for ($i = 0; $i < count($items); $i++) {
										$product = $this->db->get_where('products', ['id' => $items[$i]])->row();
										$variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
										$json = json_decode($variants->size, 2);
										foreach ($json as $each) {
											foreach ($each as $size => $size_stock) {
												if ($sizes[$i] != 'NA') {
													if ($size == $sizes[$i]) {
														if ($upqty > $size_stock) {
															$count++;
														}
														break;
													}
												} else {
													if ($product->stock < $upqty) {
														$count++;
													}
												}
											}
										}
									}

									if ($count == 1) {
										$this->db->where('id', $id)->update('tbl_cart', ['availability' => '']);
										if ($upqty <= 2) {
											$updateData = [
												'qty' => $upqty,
											];
											if ($this->db->where('id', $id)->update('tbl_cart', $updateData)) {
												$output['res'] = "success";
												$output['msg'] = "Quantity Successfully Update";
											} else {
												$output['msg'] = "Something Went Wrong";
											}
										} else {
											$output['msg'] = "You can purchase only two combo products";
										}
									} else {
										$output['msg'] = "Some combo items have less quantity";
									}
								}
							} else {
								if ($data->qty > 1) {
									$items = explode(",", $data->product_id);
									$itemsVariant = explode(",", $data->variant_id);
									$sizes = explode(",", $data->size);
									$count = 1;
									if (!empty($items) and !empty($itemsVariant)) {
										for ($i = 0; $i < count($items); $i++) {
											$product = $this->db->get_where('products', ['id' => $items[$i]])->row();
											$variants = $this->db->get_where('product_variant', ['id' => $itemsVariant[$i], 'product_id' => $items[$i]])->row();
											$json = json_decode($variants->size, 2);
											foreach ($json as $each) {
												foreach ($each as $size => $size_stock) {
													if ($sizes[$i] != 'NA') {
														if ($size == $sizes[$i]) {
															if ($upqty > $size_stock) {
																$count++;
															}
															break;
														}
													} else {
														if ($product->stock < $upqty) {
															$count++;
														}
													}
												}
											}
										}
										if ($count == 1) {
											$this->db->where('id', $id)->update('tbl_cart', ['availability' => '']);
											$upqty = $data->qty - 1;
											$updateData = [
												'qty' => $upqty,
											];
											if ($this->db->where('id', $id)->update('tbl_cart', $updateData)) {
												$output['res'] = "success";
												$output['msg'] = "Quantity Successfully Update";
											} else {
												$output['msg'] = "Something Went Wrong";
											}
										}
									}
								} else {
									$output['res'] = "error";
									$output['msg'] = "Quantity Must Be Atleast 1";
								}
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Invallid Update Type";
					}
				} else {
					$output['res'] = "error";
					$output['msg'] = "Invlid Cart Item";
				}
			}
		}
		echo json_encode([$output]);
	}



	public function Authentication()
	{
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($action == 'Login') {

				if (empty($this->input->post()) or $this->form_validation->run('Login') == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {

					$postData = $this->input->post();
					$postData = $this->security->xss_clean($postData);
					$roleData = $this->Auth_model->getRole($postData['role_id']);

					if ($roleData) {
						$query = $this->db->where('username', $postData['username'])->or_where('email', $postData['username'])->or_where('mobile', $postData['username'])->get($roleData->table_name);



						$roleData_1 = $this->Auth_model->getRole(5);
						$query1 = $this->db->where("(`mobile`='" . $postData['username'] . "' OR `email`='" . $postData['username'] . "' OR `username`='" . $postData['username'] . "') AND `role_id`='" . $postData['role_id'] . "' ")->get($roleData_1->table_name);
						if ($query->num_rows()) {
							$result = $query->row();
							if ($result->password == md5($postData['password'])) {
								if ($result->is_status == 'true') {
									if ($result->is_verified == 'true') {
										$this->load->library('Activities');
										$activitiesData = [
											'role_id' => $postData['role_id'],
											'user_id' => $result->id,
											'role_role_id' => $roleData->id,
											'user_user_id' => $result->id,
											'ip' => $this->activities->get_ip(),
											'device' => $this->activities->get_useragent(),
											'os' => $this->activities->get_os(),
											'browser' => $this->activities->get_useragent(),
											'computer_name' => $this->activities->get_username(),
											'mac' => $this->activities->get_mac(),
											'created_at' => $this->data->timestamp,
											'modified_at' => $this->data->timestamp
										];
										$this->db->insert('activities', $activitiesData);
										$updateData = [
											'is_login' => 'true',
											'visit_count' => ($result->visit_count) + 1,
											'login_at' => $this->data->timestamp
										];
										$query = $this->db->where(['id', $result->id])->update($roleData->table_name, $updateData);
										if ($query) {
											$this->session->set_userdata($roleData->session, $result);
											$output['res'] = 'success';
											$output['msg'] = 'Welcome you are logged in.';
											if (empty($_POST['url'])) {
												$redirect = base_url($roleData->redirect);
											} else {
												$redirect = $_POST['url'];
											}
											$output['redirect'] = $redirect;
										} else {
											$output['msg'] = 'Login failed.';
										}
									} else {
										$sessionData = (object) ['role_id' => $roleData->id, 'user_id' => $result->id, 'type' => 'Verification'];
										$this->session->set_userdata('OTPVerification', $sessionData);
										// $mobile=$result->mobile;
										// $msg="OTP for ".$this->data->appName." is ".$otp.", Do not share this with anyone, Team ".$this->data->appName."";
										// $this->codersadda->SendSMS($mobile,$msg,$this->codersadda->TempleteIDForOTP);
										$output['res'] = 'success';
										$output['msg'] = 'OTP sent on your mobile no.';
										$output['redirect'] = base_url('Home/OTP');
									}
								} else {
									$output['msg'] = 'This account is currently inactive.';
								}
							} else {
								$output['msg'] = 'Password is invalid.';
							}
						} else if ($query1->num_rows()) {
							$result = $query1->row();
							if ($result->password == md5($postData['password'])) {
								$rQuery = $this->db->where(['id' => $result->user_id])->get($roleData->table_name);
								if ($rQuery->num_rows()) {
									$rResult = $rQuery->row();
									if ($rResult->is_status == 'true' and $rResult->is_verified == 'true') {
										if ($result->is_status == 'true') {
											if ($result->is_verified == 'true') {
												$this->load->library('Activities');
												$activitiesData = [
													'role_id' => $roleData_1->id,
													'user_id' => $result->id,
													'role_role_id' => $roleData->id,
													'user_user_id' => $rResult->id,
													'ip' => $this->activities->get_ip(),
													'device' => $this->activities->get_useragent(),
													'os' => $this->activities->get_os(),
													'browser' => $this->activities->get_useragent(),
													'computer_name' => $this->activities->get_username(),
													'mac' => $this->activities->get_mac(),
													'created_at' => $this->data->timestamp,
													'modified_at' => $this->data->timestamp
												];
												$this->db->insert('activities', $activitiesData);
												$updateData = [
													'is_login' => 'true',
													'visit_count' => ($result->visit_count) + 1,
													'login_at' => $this->data->timestamp
												];
												$query = $this->db->where(['id', $result->id])->update($roleData_1->table_name, $updateData);
												if ($query) {
													$this->session->set_userdata($roleData->session, $rResult);
													$sessionAuth = $roleData->session . $roleData_1->session;
													$this->session->set_userdata($sessionAuth, $result);
													$output['res'] = 'success';
													$output['msg'] = 'Welcome you are logged in.';
													if (empty($_POST['url'])) {
														$redirect = base_url($roleData->redirect);
													} else {
														$redirect = $_POST['url'];
													}
													$output['redirect'] = $redirect;
												} else {
													$output['msg'] = 'Login failed.';
												}
											} else {
												$sessionData = (object) ['role_id' => $roleData_1->id, 'user_id' => $result->id, 'type' => 'Verification'];
												$this->session->set_userdata('OTPVerification', $sessionData);
												// $mobile=$result->mobile;
												// $msg="OTP for ".$this->data->appName." is ".$otp.", Do not share this with anyone, Team ".$this->data->appName."";
												// $this->codersadda->SendSMS($mobile,$msg,$this->codersadda->TempleteIDForOTP);
												$output['res'] = 'success';
												$output['msg'] = 'OTP sent on your mobile no.';
												$output['redirect'] = base_url('Home/OTP');
											}
										} else {
											$output['msg'] = 'This account is currently inactive.';
										}
									} else {
										$output['msg'] = 'Provider account is currently inactive.';
									}
								} else {
									$output['msg'] = 'Provider is invalid.';
								}
							} else {
								$output['msg'] = 'Password is invalid.';
							}
						} else {
							$output['msg'] = 'Username is invalid.';
						}
					} else {
						$output['msg'] = 'Role ID is invalid.';
					}
				}
			} else if ($action == 'VendorLogin') {

				if (empty($this->input->post()) or $this->form_validation->run('Login') == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {

					$postData = $this->input->post();
					$postData = $this->security->xss_clean($postData);
					$roleData = $this->Auth_model->getRole($postData['role_id']);
					if ($roleData) {


						$query = $this->db->get_where('tbl_vendor', array('email' => $postData['username']));
						if ($query->num_rows()) {
							$result = $query->row();
							if ($result->password == $postData['password']) {
								if ($result->is_status == 'true') {

									$this->load->library('Activities');
									$activitiesData = [
										'role_id' => $postData['role_id'],
										'user_id' => $result->id,
										'role_role_id' => $roleData->id,
										'user_user_id' => $result->id,
										'ip' => $this->activities->get_ip(),
										'device' => $this->activities->get_useragent(),
										'os' => $this->activities->get_os(),
										'browser' => $this->activities->get_useragent(),
										'computer_name' => $this->activities->get_username(),
										'mac' => $this->activities->get_mac(),
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
									$this->db->insert('activities', $activitiesData);
									$updateData = [
										'is_login' => 'true',
										'visit_count' => ($result->visit_count) + 1,
										'login_at' => $this->data->timestamp
									];
									$query = $this->db->where(['id' => $result->id])->update($roleData->table_name, $updateData);
									if ($query) {
										$this->session->set_userdata($roleData->session, $result);
										$output['res'] = 'success';
										$output['msg'] = 'Welcome you are logged in.';
										if (empty($_POST['url'])) {
											$redirect = base_url($roleData->redirect);
										} else {
											$redirect = $_POST['url'];
										}
										$output['redirect'] = $redirect;
									} else {
										$output['msg'] = 'Login failed.';
									}
								} else {
									$output['msg'] = 'This account is currently inactive.';
								}
							} else {
								$output['msg'] = 'Password is invalid.';
							}
						} else {

							$output['msg'] = 'Username is invalid.';
						}
					} else {
						$output['msg'] = 'Role ID is invalid.';
					}
				}
			} else if ($action == 'ExpertLogin') {

				if (empty($this->input->post()) or $this->form_validation->run('Login') == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {

					$postData = $this->input->post();
					$postData = $this->security->xss_clean($postData);
					$roleData = $this->Auth_model->getRole($postData['role_id']);
					if ($roleData) {


						$query = $this->db->get_where('fashion_expert', array('email' => $postData['username']));
						if ($query->num_rows()) {
							$result = $query->row();
							if ($result->is_verified == 'true') {
								if ($result->password ==  $postData['password']) {
									// if ($result->password == hash_hmac('sha256', $postData['password'], $this->data->encryption_key)) {
									if ($result->is_status == 'true') {

										$this->load->library('Activities');
										$activitiesData = [
											'role_id' => $postData['role_id'],
											'user_id' => $result->id,
											'role_role_id' => $roleData->id,
											'user_user_id' => $result->id,
											'ip' => $this->activities->get_ip(),
											'device' => $this->activities->get_useragent(),
											'os' => $this->activities->get_os(),
											'browser' => $this->activities->get_useragent(),
											'computer_name' => $this->activities->get_username(),
											'mac' => $this->activities->get_mac(),
											'created_at' => $this->data->timestamp,
											'modified_at' => $this->data->timestamp
										];
										$this->db->insert('activities', $activitiesData);

										$updateData = [
											'is_login' => 'true',
											'visit_count' => ($result->visit_count) + 1,
											'login_at' => $this->data->timestamp
										];

										$query = $this->db->where(['id' => $result->id])->update($roleData->table_name, $updateData);


										if ($query) {
											$this->session->set_userdata($roleData->session, $result);
											$output['res'] = 'success';
											$output['msg'] = 'Welcome you are logged in.';
											if (empty($_POST['url'])) {
												$redirect = base_url($roleData->redirect);
											} else {
												$redirect = $_POST['url'];
											}
											$output['redirect'] = $redirect;
										} else {
											$output['msg'] = 'Login failed.';
										}
									} else {
										$output['msg'] = 'This account is currently Blocked.';
									}
								} else {
									if (empty($this->session->get_userdata()['expertattempt'])) {
										$attempts = $this->expertattempts + 1;
										$this->session->set_userdata('expertattempt', $attempts);
									} else {
										$attempts = $this->expertattempts + 1;
										$this->session->set_userdata('expertattempt', $attempts);
									}

									if ($this->expertattempts > 3) {
										$output['redirect'] = base_url('Auth/ExpertLogin');
									}
									$output['msg'] = 'Password is invalid.';
								}
							} else {
								$output['msg'] = 'This Account Is Not Verified Yet';
							}
						} else {

							$output['msg'] = 'Username is invalid.';
						}
					} else {
						$output['msg'] = 'Role ID is invalid.';
					}
				}
			} else if ($action == 'ExpertLoginOTP') {
				$this->form_validation->set_rules('mobile', 'Mobile No', 'required|trim|numeric|min_length[10]|max_length[10]');
				$this->form_validation->set_rules('otp', 'OTP', 'required|trim|numeric|min_length[4]|max_length[4]');
				$this->form_validation->set_rules('action', 'Action', 'required|trim');
				$this->form_validation->set_rules('token', 'Token', 'required|trim');
				$this->form_validation->set_rules('roleid', 'Role Id', 'required|trim|numeric');
				if ($this->form_validation->run() == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {
					$mobile = $this->input->post('mobile');
					$otp = $this->input->post('otp');
					$token = $this->input->post('token');
					$action = $this->input->post('action');
					$roleid = $this->input->post('roleid');

					$curlData = array(
						'secret'	=> '6Lfwaz4iAAAAACUFlBiShNP3xRJ6R1X6-M-ovC2S',
						'response'	=> $token
					);

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curlData));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$curlResponse = curl_exec($ch);

					$captchaResponse = json_decode($curlResponse, true);
					if (
						$captchaResponse['success'] == '1'
						&& $captchaResponse['action'] == $action
						&& $captchaResponse['score'] >= 0.5
						&& $captchaResponse['hostname'] ==  $_SERVER['SERVER_NAME']
					) {
						$roleData = $this->Auth_model->getRole($roleid);
						if ($roleData) {
							$query = $this->db->get_where('fashion_expert', array('mobile' => $mobile));
							if ($query->num_rows()) {
								$result = $query->row();
								if ($result->is_verified == 'true') {
									if ($result->otp == $otp) {
										if ($result->is_status == 'true') {
											$this->load->library('Activities');
											$activitiesData = [
												'role_id' => $roleid,
												'user_id' => $result->id,
												'role_role_id' => $roleData->id,
												'user_user_id' => $result->id,
												'ip' => $this->activities->get_ip(),
												'device' => $this->activities->get_useragent(),
												'os' => $this->activities->get_os(),
												'browser' => $this->activities->get_useragent(),
												'computer_name' => $this->activities->get_username(),
												'mac' => $this->activities->get_mac(),
												'created_at' => $this->data->timestamp,
												'modified_at' => $this->data->timestamp
											];
											$this->db->insert('activities', $activitiesData);

											$updateData = [
												'is_login' => 'true',
												'visit_count' => ($result->visit_count) + 1,
												'login_at' => $this->data->timestamp
											];

											$query = $this->db->where(['id' => $result->id])->update($roleData->table_name, $updateData);


											if ($query) {
												$this->session->set_userdata($roleData->session, $result);
												$this->session->unset_userdata('expertattempt');
												$output['res'] = 'success';
												$output['msg'] = 'Welcome you are logged in.';
												if (empty($_POST['url'])) {
													$redirect = base_url($roleData->redirect);
												} else {
													$redirect = $_POST['url'];
												}
												$output['redirect'] = $redirect;
											} else {
												$output['msg'] = 'Login failed.';
											}
										} else {
											$output['msg'] = 'This account is currently Blocked.';
										}
									} else {
										$output['msg'] = 'Invalid OTP';
									}
								} else {
									$output['msg'] = 'This Account Is Not Verified Yet';
								}
							} else {

								$output['msg'] = 'Username is invalid.';
							}
						} else {
							$output['msg'] = 'Role ID is invalid.';
						}
					} else {
						$output['msg'] = "You're Not A Human";
					}
				}
			} else {
				$output['msg'] = 'Action is invalid.';
			}
		} else {
			$output['msg'] = 'Action is required.';
		}
		echo json_encode([$output]);
	}
	public function ForgotPassword()
	{
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($action == 'Forgot') {
				if (empty($this->input->post()) or $this->form_validation->run('ForgotPassword') == FALSE) {
					$msg = explode('</p>', validation_errors());
					$output['msg'] = str_ireplace('<p>', '', $msg[0]);
				} else {
					$postData = $this->input->post();
					$postData = $this->security->xss_clean($postData);
					$roleData = $this->Auth_model->getRole($postData['role_id']);
					if ($roleData) {
						$query = $this->db->where('mobile', $postData['mobile'])->get($roleData->table_name);
						$roleData_1 = $this->Auth_model->getRole(5);
						$query1 = $this->db->where(" `mobile`='" . $postData['mobile'] . "' AND `role_id`='" . $postData['role_id'] . "' ")->get($roleData_1->table_name);
						if ($query->num_rows()) {
							$result = $query->row();
							if ($result->is_status == 'true') {
								$this->db->where('id', $result->id)->update($roleData->table_name, ['otp' => $this->data->otp]);
								$sessionData = (object) ['role_id' => $roleData->id, 'user_id' => $result->id, 'type' => 'ForgotPassword'];
								$this->session->set_userdata('OTPVerification', $sessionData);
								// $mobile=$result->mobile;
								// $msg="OTP for ".$this->data->appName." is ".$otp.", Do not share this with anyone, Team ".$this->data->appName."";
								// $this->codersadda->SendSMS($mobile,$msg,$this->codersadda->TempleteIDForOTP);
								$output['res'] = 'success';
								$output['msg'] = 'OTP sent on your mobile no.';
								$output['redirect'] = base_url('Home/OTP');
							} else {
								$output['msg'] = 'This account is currently inactive.';
							}
						} else if ($query1->num_rows()) {
							$result = $query1->row();
							$rQuery = $this->db->where(['id' => $result->user_id])->get($roleData->table_name);
							if ($rQuery->num_rows()) {
								$rResult = $rQuery->row();
								if ($rResult->is_status == 'true' and $rResult->is_verified == 'true') {
									if ($result->is_status == 'true') {
										$this->db->where('id', $result->id)->update($roleData_1->table_name, ['otp' => $this->data->otp]);
										$sessionData = (object) ['role_id' => $roleData_1->id, 'user_id' => $result->id, 'type' => 'ForgotPassword'];
										$this->session->set_userdata('OTPVerification', $sessionData);
										// $mobile=$result->mobile;
										// $msg="OTP for ".$this->data->appName." is ".$otp.", Do not share this with anyone, Team ".$this->data->appName."";
										// $this->codersadda->SendSMS($mobile,$msg,$this->codersadda->TempleteIDForOTP);
										$output['res'] = 'success';
										$output['msg'] = 'OTP sent on your mobile no.';
										$output['redirect'] = base_url('Home/OTP');
									} else {
										$output['msg'] = 'This account is currently inactive.';
									}
								} else {
									$output['msg'] = 'Provider account is currently inactive.';
								}
							} else {
								$output['msg'] = 'Provider is invalid.';
							}
						} else {
							$output['msg'] = 'Mobile No is invalid.';
						}
					} else {
						$output['msg'] = 'Role ID is invalid.';
					}
				}
			} else {
				$output['msg'] = 'Action is invalid.';
			}
		} else {
			$output['msg'] = 'Action is required.';
		}
		echo json_encode([$output]);
	}
	# Update Status
	public function UpdateStatus()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($data['table'] == 'products') {

				if ($this->Product_model->UpdateProductStatus($data)) {

					echo true;
				} else {
					echo false;
				}
			} else {
				$result = $this->db->where($data['where_column'], $data['where_value'])->update($data['table'], [$data['column'] => $data['value']]);
				if ($result) {

					echo true;
				} else {
					echo false;
				}
			}
		} else {
			echo false;
		}
	}

	# Update Status
	public function UpdateReviewStatus()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$result = $this->db->where('id', $data['id'])->update('tbl_review', ['is_status' => $data['value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}

	# Update Status
	public function UpdateStatusQuiz()
	{
		if ($this->input->post()) {
			$data = $this->input->post();

			$result = $this->db->update($data['table'], [$data['column'] => 'false']);
			$result = $this->db->where($data['where_column'], $data['where_value'])->update($data['table'], [$data['column'] => $data['value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}


	# Update Status
	public function StatusSingleActive()
	{
		if ($this->input->post()) {
			$data = $this->input->post();

			$result = $this->db->update($data['table'], [$data['column'] => 'false']);
			$result = $this->db->where($data['where_column'], $data['where_value'])->update($data['table'], [$data['column'] => $data['value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}



	# Update Status
	public function Updateverification()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$result = $this->db->where($data['where_column'], $data['where_value'])->update($data['table'], [$data['up_column'] => $data['up_value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}

	# Update Status
	public function ApproveCombo()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$result = $this->db->where('id', $data['id'])->update($data['table'], ['verify_status' => $data['value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}

	#Reject Combo
	public function RejectCombo()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$result = $this->db->where('id', $data['id'])->update($data['table'], ['approve_status' => $data['value']]);
			if ($result) {
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}


	# Delete   
	public function Delete()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$unlink_folder = $data['unlink_folder'];
			$unlink_column = $data['unlink_column'];
			$result = $this->db->where($data['where_column'], $data['where_value'])->get($data['table']);
			$resdata = $result->result_array();
			$result = $this->Product_model->deleteData($data['table'], [$data['where_column'] => $data['where_value']]);
			if ($result) {
				if (!empty($unlink_column)) {
					$unlink_column_array = explode(',', $unlink_column);
					for ($i = 0; $i < count($unlink_column_array); $i++) {
						$unlink_column_name = $unlink_column_array[$i];
						if (($resdata[0][$unlink_column_name]) != 'logo.png') {
							unlink('./uploads/' . $unlink_folder . '/' . $resdata[0][$unlink_column_name]);
						}
					}
				}
				echo true;
			} else {
				echo false;
			}
		} else {
			echo false;
		}
	}

	# DeleteCategory   
	public function DeleteCategory()
	{
		$resdata = [];
		$resdata['res'] = 'error';
		$resdata['msg'] = 'Something went wrong.';
		if ($this->input->post()) {
			$data = $this->input->post();
			$unlink_folder = $data['unlink_folder'];
			$unlink_column = $data['unlink_column'];
			$result = $this->db->where($data['where_column'], $data['where_value'])->get($data['table']);
			$resdata = $result->result_array();
			if (count(getData('sub_category', ['category_id' => $data['where_value']])) > 0) {
				$resdata['res'] = 'error';
				$resdata['msg'] = 'First delete all the subcategories that are created from the category.';
			} else {
				$result = $this->db->where($data['where_column'], $data['where_value'])->delete($data['table']);
				if ($result) {
					if (!empty($unlink_column)) {
						$unlink_column_array = explode(',', $unlink_column);
						for ($i = 0; $i < count($unlink_column_array); $i++) {
							$unlink_column_name = $unlink_column_array[$i];
							if (!empty($resdata[0]) && ($resdata[0][$unlink_column_name]) != 'logo.png') {
								unlink('./uploads/' . $unlink_folder . '/' . $resdata[0][$unlink_column_name]);
							}
						}
					}
					$resdata['res'] = 'success';
					$resdata['msg'] = 'Deleted successfully.';
				}
			}
		}
		header('Content-Type: application/json');
		echo json_encode($resdata);
	}

	# Delete   
	public function MultipleDelete()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$table = $data['table'];
			$ids = $data['ids'];

			foreach ($ids as $id) {
				if ($table == 'categories') {
					$cdata = getData($table, ['id' => $id], $id);

					$scdata = getData('sub_category', ['category_id' => $id]);
					if (count($scdata) > 0) {
						continue;
					}
					if (!empty($cdata) && !empty($cdata['icon'])) {
						unlinkFile('./uploads/Admin/' . $cdata['icon']);
					}
				} else if ($table == 'brand') {
					$cdata = getData($table, ['id' => $id], $id);
					if (!empty($cdata) && !empty($cdata['icon'])) {
						unlinkFile('./uploads/brand/' . $cdata['icon']);
					}
				} else if ($table == 'slider') {
					$cdata = getDataOrderByID($table, ['id' => $id], $id);
					if (!empty($cdata) && !empty($cdata['image'])) {
						unlinkFile('./uploads/slider/' . $cdata['image']);
					}
				}

				$result = $this->db->where('id', $id)->delete($table);
			}

			return true;
		} else {
			echo false;
		}
	}

	public function MultipleCategoryDelete()
	{
		$data['status'] = "error";
		$data['msg'] = "Something went wrong.";
		if ($this->input->post()) {
			$data = $this->input->post();
			$table = $data['table'];
			$ids = $data['ids'];
			$data['status'] = "success";
			$data['msg'] = "Successfully Deleted.";
			$deleteCount=0;
			foreach ($ids as $id) {

				$cdata = getData($table, ['id' => $id], $id);

				$scdata = getData('sub_category', ['category_id' => $id]);
				if (count($scdata) > 0) {
					$data['status'] = "success";
					$data['msg'] = "Categories cannot be deleted until their subcategories are deleted!";
				} else {
					if (!empty($cdata) && !empty($cdata['icon'])) {
						unlinkFile('./uploads/Admin/' . $cdata['icon']);
					}
					$result = $this->db->where('id', $id)->delete($table);
					$deleteCount++;
				}
			}
			if($deleteCount<=0){
				$data['status'] = "error";
			}
		}
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function DeleteImage()
	{
		if ($this->uri->segment(3) == true) {
			$filename = $this->uri->segment(3);
			$filename = base64_decode($filename);
			$products = $this->db->query("select * from products where image1 like '%$filename%'")->result();
			if (!empty($products)) {
				foreach ($products as $eachproduct) {
					$icon_arr = $eachproduct->image1;
					$new_arr =  str_replace($filename, '', $icon_arr);
					$new_arr = explode(',', $new_arr);
					$arr = [];
					foreach ($new_arr as $each) {
						if (!empty($each)) {
							array_push($arr, $each);
						}
					}
					$arr = implode(',', $arr);
					$data_arr = array(
						"image1" => $arr,
						"modified_at" => $this->data->timestamp,
					);

					if ($this->db->where('id', $eachproduct->id)->update('products', $data_arr)) {
						$filepath = './uploads/product/' . $filename;
						if (file_exists($filepath)) {
							unlink($filepath);
						}
					}
				}
			} else {
				$filepath = './uploads/product/' . $filename;
				if (file_exists($filepath)) {
					unlink($filepath);
				}
			}
			# Delete Variant image
			$product_variant = $this->db->query("select * from product_variant where variant_img like '%$filename%'")->result();
			if (!empty($product_variant)) {
				foreach ($product_variant as $eachvariant) {
					$icon_arr = $eachvariant->variant_img;
					$new_arr =  str_replace($filename, '', $icon_arr);
					$new_arr = explode(',', $new_arr);
					$arr = [];
					foreach ($new_arr as $each) {
						if (!empty($each)) {
							array_push($arr, $each);
						}
					}
					$arr = implode(',', $arr);
					$data_arr = array(
						"variant_img" => $arr,
						"modified_at" => $this->data->timestamp,
					);

					if ($this->db->where('id', $eachvariant->id)->update('product_variant', $data_arr)) {
						$filepath = './uploads/product/' . $filename;
						if (file_exists($filepath)) {
							unlink($filepath);
						}
					}
				}
			} else {
				$filepath = './uploads/product/' . $filename;
				if (file_exists($filepath)) {
					unlink($filepath);
				}
			}
		} else {
			echo "error";
		}
	}
	public function databaseexport()
	{
		// Load the DB utility class
		$this->load->dbutil();

		// Backup your entire database and assign it to a variable
		$backup = $this->dbutil->backup();

		// Load the file helper and write the file to your server
		$this->load->helper('file');
		write_file('./uploads/mybackup.gz', $backup);

		// Load the download helper and send the file to your desktop
		$this->load->helper('download');
		force_download('mybackup.gz', $backup);
	}


	# generateProductCode   
	public function generateProductCode()
	{
		$code = "";
		if ($this->input->post()) {
			$data = $this->input->post();
			$cat_id = $data['cat_id'];
			$item_type = $data['item_type'];

			$code = getProductCode($cat_id, $item_type);
		}
		header('Content-Type: application/json');
		echo json_encode($code);
	}

	# updateProductCode   
	public function updateProductCode()
	{
		$code = "";
		if ($this->input->post()) {
			$data = $this->input->post();
			$cat_id = $data['cat_id'];
			$item_type = $data['item_type'];
			$product_code = $data['product_code'];
			$pid = $data['pid'];

			$code = getUpdatedProductCode($cat_id, $item_type, $pid, $product_code);
		}
		header('Content-Type: application/json');
		echo json_encode($code);
	}

	# generateProductVariantCode   
	public function generateProductVariantCode()
	{
		$code = "";
		if ($this->input->post()) {
			$data = $this->input->post();
			$cat_id = $data['cat_id'];
			$item_type = $data['item_type'];
			$color_id = $data['color_id'];

			$code = getProductVariantCode($cat_id, $item_type, $color_id);
		}
		header('Content-Type: application/json');
		echo json_encode($code);
	}




	# generateSKUID   
	public function generateSKUID()
	{
		$code = "";
		if ($this->input->post()) {
			$data = $this->input->post();
			$cat_id = $data['cat_id'];
			$item_type = $data['item_type'];
			$subcat_id = $data['subcat_id'];

			$code = getProductSKUId($item_type, $cat_id, $subcat_id);
		}
		header('Content-Type: application/json');
		echo json_encode($code);
	}

	# updateSKUID   
	public function updateSKUID()
	{
		$code = "";
		if ($this->input->post()) {
			$data = $this->input->post();
			$cat_id = $data['cat_id'];
			$item_type = $data['item_type'];
			$subcat_id = $data['subcat_id'];
			$oldsku = $data['oldsku'];
			$pid = $data['pid'];

			$code = getupdatedProductSKUId($item_type, $cat_id, $subcat_id, $pid, $oldsku);
		}
		header('Content-Type: application/json');
		echo json_encode($code);
	}
}
