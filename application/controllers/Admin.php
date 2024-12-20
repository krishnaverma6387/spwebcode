<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Product_model');
		$this->load->library('App');
		$this->load->library('Razorpay');
		$this->load->library('Zend');
		$this->roleData = $this->Auth_model->getRole($this->data->role_id);
		$this->roleData_1 = $this->Auth_model->getRole(5);
		if (empty($this->session->get_userdata()[$this->roleData->session])) {
			redirect(base_url('Auth/AdminLogin'));
		} else {
			$this->user_id = $this->session->get_userdata()[$this->roleData->session]->id;
			$userData = $this->Auth_model->isValid($this->roleData->table_name, $this->user_id);
			if ($userData) {
				$this->userData = $userData;
				$sessionAuth = $this->roleData->session . $this->roleData_1->session;
				$this->sysAuth = false;
				if (empty($this->session->get_userdata()[$sessionAuth])) {
					$this->permissionAuth = json_decode($this->userData->permission);
				} else {
					$this->user_id_1 = $this->session->get_userdata()[$sessionAuth]->id;
					$userData_1 = $this->Auth_model->isValid($this->roleData_1->table_name, $this->user_id_1);
					if ($userData_1) {
						$this->sysAuth = true;
						$this->userData_1 = $userData_1;
						$this->permissionAuth = json_decode($this->userData->permission);
					} else {
						redirect(base_url($this->data->controller . '/AccountSettings/Logout'));
					}
				}
			} else {
				redirect(base_url($this->data->controller . '/AccountSettings/Logout'));
			}
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





	public function Test()
	{

		// sendEmail('anshul.guptacs@gmail.com','Anshika Chaurasiya','hello','hello');
		// compress_image('./uploads/brand/cmp.png','./uploads/brand/cmp1214.png');
		// compress_svg2('./uploads/brand/svgimg.svg','./uploads/brand/svgimg1.svg');
		// ===================================

		// Define the path of the original image and the output image
		// $inputImagePath = 'C:/xampp/htdocs/slickpattern/uploads/brand/gate.jpg';
		// $outputImagePath = 'C:/xampp/htdocs/slickpattern/uploads/brand/gate.jpg';

		// // Define the maximum allowed size in bytes (100KB)
		// $maxSize = 100 * 1024;

		// // Get the size of the original image
		// $imageSize = filesize($inputImagePath);

		// if ($imageSize > $maxSize) {
		//     // Create a new image from the original
		//     $img = imagecreatefromjpeg($inputImagePath);

		//     // Initialize the compression quality
		//     $quality = 90;

		//     // Compress the image until it is less than or equal to 100KB
		//     do {
		//         // Save the image with the current quality
		//         imagejpeg($img, $outputImagePath, $quality);

		//         // Check the size of the compressed image
		//         $compressedSize = filesize($outputImagePath);

		//         // Decrease the quality for the next iteration
		//         $quality -= 5;
		//     } while ($compressedSize > $maxSize && $quality > 0);

		//     // Free up memory
		//     imagedestroy($img);
		// } else {
		//     // If the original image is already less than or equal to 100KB, just copy it
		//     copy($inputImagePath, $outputImagePath);
		// }

		// echo "Image processing completed.";
		// =========================================
		// $img=imagecreatefromjpeg('C:/xampp/htdocs/slickpattern/uploads/brand/compress.jpg');
		// imagejpeg($img,'C:/xampp/htdocs/slickpattern/uploads/brand/compress1.jpg',50);
		// var_dump(generateBarcode('54656'));
		// var_dump(generateQrcode('54656'));
		// var_dump( compress_image(base_url('uploads/brand/compress.jpg'),base_url('uploads/brand/')));
		// $source_image = 'C:/xampp/htdocs/slickpattern/uploads/brand/getapp_1704892632.png';
		// $destination_path = 'C:/xampp/htdocs/slickpattern/uploads/brand/';
		// // var_dump(compress_image($source_image, $destination_path));
		// $quality = 50;
		// $result = compress_image($source_image, $destination_path, $quality);

		// if ($result) {
		// 	echo "Image compressed successfully.";
		// } else {
		// 	echo "Failed to compress image.";
		// }
		// $insertdata = [
		// 'userid'=>'',
		// 'order_type'=>'',
		// 'system_id'=>'27122310213293694',
		// 'combo_id'=>'',
		// 'product_id'=>'52',
		// 'variant_id'=>'96',
		// 'price'=>'',
		// 'size'=>'M',
		// 'color'=>'#e70808',
		// 'qty'=>'3',
		// 'orderid'=>'',
		// 'is_status'=>'false',
		// 'is_sale'=>'',
		// 'sale_id'=>'',
		// 'availability'=>'',
		// 'is_combo'=>'',
		// 'is_giftwrap'=>'true',
		// 'giftwrap_details'=>'',
		// 'coupon_id'=>'',
		// 'coupon_status'=>'',
		// 'created_at'=>'2023-11-27 13:53:59',
		// 'modified_at'=>'2023-11-27 13:53:59',
		// 'order_status'=>'pending',
		// 'return_status'=>'',
		// 'return_details'=>'',
		// 'cancel_reason'=>'',
		// 'cancel_date_time'=>'',
		// 'rzp_refundid'=>'',
		// 'refund_amount'=>'0',
		// 'order_query'=>'',
		// ];


		// $insertdata = [
		// 'userid'=>'',
		// 'system_id'=>'04042410565172107',
		// 'combo_id'=>'',
		// 'product_id'=>'52',
		// 'variant_id'=>'96',
		// 'is_status'=>'true',
		// 'is_combo'=>''
		// ];

		// $a = $this->db->insert('tbl_wishlist',$insertdata);
		// $a = $this->db->query("select * from tbl_wishlist")->result();
		// $a = $this->db->insert('tbl_cart',$insertdata);
		// $a = $this->db->query("delete from tbl_wishlist where id='27'");
		// $a = $this->db->query("select * from tbl_shoppingguide")->result();
		// $a = $this->db->query("select * from subscription_plan")->result();
		// $a = $this->db->query("select * from royal_subscriber")->result();
		// $a = $this->db->query("select * from tbl_choosesize")->result();
		// $a = $this->db->query("select * from tbl_cart")->result();
		// $a = $this->db->query("select * from tbl_user order by id desc")->result();
		// $a = $this->db->query("select * from tbl_press")->result();
		// $a = $this->db->query("select * from ourleadership")->result();
		// $a = $this->db->query("select * from ourteam")->result();
		// $a = $this->db->query("select * from newlaunches")->result();
		// $a = $this->db->query("select * from categories")->result();
		// $a = $this->db->query("select * from brand")->result();
		// $a = $this->db->query("select * from sub_brand")->result();
		// $a = $this->db->query("select * from subscription_benefits")->result();
		// $a = $this->db->query("update tbl_cart set system_id='04042410565172107' where system_id='27122310213293694'");
		// $a=$this->db->query("ALTER TABLE `tbl_user` ADD `ref_by` VARCHAR(255) NULL DEFAULT NULL AFTER `id`;"); 
		// echo "<pre>";
		// print_r($a);
		// die();
	}



	// start here all 

	public function HeroBannerAndClubSetting()
	{
		$this->data->file_column = 'image';
		$this->data->file_column1 = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'HeroBannerAndClubSetting';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_herobanner");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditHeroBanner';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/BecomeaSeller'));
					}
				} elseif ($action == 'EditBottom') {
					$query = $this->db->where('id', $id)->get('royalclubsetting');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditRoyalClubSetting";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/HeroBannerAndClubSetting'));
					}
				} elseif ($action == 'EditReferEarn') {
					$query = $this->db->where('id', $id)->get('referandearn');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditReferEarn";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/HeroBannerAndClubSetting'));
					}
				} else {
					redirect(base_url('Admin/BecomeaSeller'));
				}
			} else {
				if ($action == 'AddHeroBanner') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('alt', 'Alt', 'required');
					$this->form_validation->set_rules('seo_title', 'Seo Title', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/HeroBannerAndClubSetting'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "herobanner_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'is_status' => 'true',
							'image' => $filename1,
							'created_at' => $this->data->timestamp,
							'updated_at' => $this->data->timestamp
						];
						// echo "<pre>";print_r($insertdata);die();
						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_herobanner", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
					// }
				}

				// BottomSeller Start Here 
				elseif ($action == 'AddBottomSeller') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('alt', 'ALt', 'required');
					$this->form_validation->set_rules('seo_title', 'Seo Title', 'required');
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/HeroBannerAndClubSetting'));
					} else {

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "bottom_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image1')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post('alt'),
							'seo_title' => $this->input->post('seo_title'),
							'title' => $this->input->post('title'),
							'description ' => $this->input->post('description'),
							'image1' => $filename1,
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'updated_at' => $this->data->timestamp
						];


						if ($upload_status == true) {

							$ins = $this->db->insert("royalclubsetting", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
				}
				// AddReferEarn Start Here 
				elseif ($action == 'AddReferEarn') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('alt', 'ALt', 'required');
					$this->form_validation->set_rules('seo_title', 'Seo Title', 'required');
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/HeroBannerAndClubSetting'));
					} else {

						// image
						$upload_status = true;
						$filename = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename = time() . "bottom_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post('alt'),
							'seo_title' => $this->input->post('seo_title'),
							'title' => $this->input->post('title'),
							'description ' => $this->input->post('description'),
							'image' => $filename,
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'updated_at' => $this->data->timestamp
						];


						if ($upload_status == true) {

							$ins = $this->db->insert("referandearn", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
				}


				// end here 
				elseif ($action == 'UpdateHeroBanner') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_herobanner');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "herobanner_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_herobanner', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
				}
				// updatebottom 
				elseif ($action == 'UpdateBottom') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('royalclubsetting');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "Bottom_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'image1' => $image1,
							];
							$up = $this->db->where('id', $result->id)->update('royalclubsetting', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
				}
				// updatebottom 
				elseif ($action == 'UpdateReferEarn') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('referandearn');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "ReferEarn_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('referandearn', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/HeroBannerAndClubSetting'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/HeroBannerAndClubSetting'));
						}
					}
				}
			}
		} else {
			$data['tbl_herobanner'] = $this->db->order_by("id", "desc")->get("tbl_herobanner")->result();
			$data['royalclubsetting'] = $this->db->order_by("id", "desc")->get("royalclubsetting")->result();
			$this->load->view("Admin/HeroBannerAndClubSetting", $data);
		}
	}



	// ManagePress Start Here 
	public function ManagePress()
	{
		$this->data->file_column = 'image';
		$this->data->file_column1 = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManagePress';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("ourleadership");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditOurLeadership';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManagePress'));
					}
				} elseif ($action == 'EditTeam') {
					$query = $this->db->where('id', $id)->get('ourteam');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditTeam";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManagePress'));
					}
				} elseif ($action == 'EditLaunch') {
					$query = $this->db->where('id', $id)->get('newlaunches');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditNewLaunches";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManagePress'));
					}
				} elseif ($action == 'EditPress') {
					$query = $this->db->where('id', $id)->get('tbl_press');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						// echo "<pre>";print_r($data);die();
						$data["action"] = "EditPress";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManagePress'));
					}
				} else {
					redirect(base_url('Admin/ManagePress'));
				}
			} else {

				if ($action == 'AddPress') {
					$this->form_validation->set_rules('title1', 'Title1', 'required');
					$this->form_validation->set_rules('subtitle1', 'SubTitle1', 'required');
					$this->form_validation->set_rules('desc1', 'Description1', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}
					if (empty($_FILES['image2']['name'])) {
						$this->form_validation->set_rules('image2', 'Image', 'required');
					}
					if (empty($_FILES['image3']['name'])) {
						$this->form_validation->set_rules('image3', 'Image', 'required');
					}
					if (empty($_FILES['image4']['name'])) {
						$this->form_validation->set_rules('image4', 'Image', 'required');
					}
					// if (empty($_FILES['image5']['name'])) {
					// $this->form_validation->set_rules('image5', 'Image', 'required');
					// }

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManagePress'));
					} else {

						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "aboutus_1." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						// image2 
						$filename2 = "";
						if (!empty($_FILES['image2']['name'])) {
							$ext = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);

							$filename2 = time() . "aboutus_2." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename2;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image2')) {
								$upload_status = false;
							}
						}

						// image3
						$filename3 = "";
						if (!empty($_FILES['image3']['name'])) {
							$ext = pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);

							$filename3 = time() . "aboutus_3." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename3;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image3')) {
								$upload_status = false;
							}
						}

						// image4
						$filename4 = "";
						if (!empty($_FILES['image4']['name'])) {
							$ext = pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);

							$filename4 = time() . "aboutus_4." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename4;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image4')) {
								$upload_status = false;
							}
						}
						// image5
						// $filename5 = "";
						// if (!empty($_FILES['image5']['name'])) {
						// $ext = pathinfo($_FILES["image5"]["name"], PATHINFO_EXTENSION);

						// $filename5 = time() . "aboutus_5." . $ext;
						// $config0['upload_path'] = './uploads/brand/';
						// $config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						// $config0['max_size'] = 3024;
						// $config0['file_name'] = $filename5;
						// $this->load->library('upload');
						// $this->upload->initialize($config0);
						// if (!$this->upload->do_upload('image5')) {
						// $upload_status = false;
						// }
						// }

						$insertdata = [
							// 'meta_title' => $this->input->post("meta_title"),
							// 'meta_description' => $this->input->post("meta_description"),
							// 'meta_keyword' => $this->input->post("meta_keyword"),
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'alt2' => $this->input->post("alt2"),
							'seo_title2' => $this->input->post("seo_title2"),
							'alt3' => $this->input->post("alt3"),
							'seo_title3' => $this->input->post("seo_title3"),
							'alt4' => $this->input->post("alt4"),
							'seo_title4' => $this->input->post("seo_title4"),
							'title1' => $this->input->post("title1"),
							'subtitle1' => $this->input->post("subtitle1"),
							'desc1' => $this->input->post("desc1"),
							'title2' => $this->input->post("title2"),
							'subtitle2' => $this->input->post("subtitle2"),
							'desc2' => $this->input->post("desc2"),
							'our_vission' => $this->input->post("our_vision"),
							'vission_desc4' => $this->input->post("vission_desc4"),
							'our_mission' => $this->input->post("our_mission"),
							'mission_desc3' => $this->input->post("mission_desc3"),
							'our_values' => $this->input->post("our_values"),
							'title3' => $this->input->post("title3"),
							'desc3' => $this->input->post("desc3"),
							'title4' => $this->input->post("title4"),
							'title5' => $this->input->post("title5"),
							'desc4' => $this->input->post("desc4"),
							'title6' => $this->input->post("title6"),
							'title7' => $this->input->post("title7"),
							'title8' => $this->input->post("title8"),
							'title9' => $this->input->post("title9"),
							'image1' => $filename1,
							'image2' => $filename2,
							'image3' => $filename3,
							'image4' => $filename4,
							// 'image5' => $filename5,
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_press", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManagePress'));
						}
					}
				} elseif ($action == 'UpdatePress') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_press');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "press_1_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}
							// image2 
							if (empty($_FILES['image2']['name'])) {
								$image2 = $result->image2;
							} else {
								$ext = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
								$image2 = "press_2_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image2;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image2')) {
									$upload_status = false;
								} else {
									if (!empty($result->image2) && file_exists('./uploads/brand/' . $result->image2)) {
										unlinkFile('./uploads/brand/' . $result->image2);
									}
								}
							}

							// image3 
							if (empty($_FILES['image3']['name'])) {
								$image3 = $result->image3;
							} else {
								$ext = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION);
								$image3 = "press_3_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image3;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image3')) {
									$upload_status = false;
								} else {
									if (!empty($result->image3) && file_exists('./uploads/brand/' . $result->image3)) {
										unlinkFile('./uploads/brand/' . $result->image3);
									}
								}
							}

							// image3 
							if (empty($_FILES['image4']['name'])) {
								$image4 = $result->image4;
							} else {
								$ext = pathinfo($_FILES['image4']['name'], PATHINFO_EXTENSION);
								$image4 = "press_4_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image4;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image4')) {
									$upload_status = false;
								} else {
									if (!empty($result->image4) && file_exists('./uploads/brand/' . $result->image4)) {
										unlinkFile('./uploads/brand/' . $result->image4);
									}
								}
							}

							// image5
							// if (empty($_FILES['image5']['name'])) {
							// $image5 = $result->image5;
							// } else {
							// $ext = pathinfo($_FILES['image5']['name'], PATHINFO_EXTENSION);
							// $image5 = "press_5_" . time() . "." . $ext;

							// $config0['upload_path'] = './uploads/brand/';
							// $config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							// $config0['max_size'] = 3024;
							// $config0['file_name'] = $image5;
							// $this->load->library('upload');
							// $this->upload->initialize($config0);

							// if (!$this->upload->do_upload('image5')) {
							// $upload_status = false;
							// } else {
							// if (!empty($result->image5) && file_exists('./uploads/brand/' . $result->image5)) {
							// unlinkFile('./uploads/brand/' . $result->image5);
							// }
							// }
							// }

							$updatedata = [
								// 'meta_title' => $this->input->post("meta_title"),
								// 'meta_description' => $this->input->post("meta_description"),
								// 'meta_keyword' => $this->input->post("meta_keyword"),
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'alt2' => $this->input->post("alt2"),
								'seo_title2' => $this->input->post("seo_title2"),
								'alt3' => $this->input->post("alt3"),
								'seo_title3' => $this->input->post("seo_title3"),
								'alt4' => $this->input->post("alt4"),
								'seo_title4' => $this->input->post("seo_title4"),
								'title1' => $this->input->post("title1"),
								'subtitle1' => $this->input->post("subtitle1"),
								'desc1' => $this->input->post("desc1"),
								'title2' => $this->input->post("title2"),
								'subtitle2' => $this->input->post("subtitle2"),
								'desc2' => $this->input->post("desc2"),
								'our_vission' => $this->input->post("our_vision"),
								'vission_desc4' => $this->input->post("vission_desc4"),
								'our_mission' => $this->input->post("our_mission"),
								'mission_desc3' => $this->input->post("mission_desc3"),
								'our_values' => $this->input->post("our_values"),
								'title3' => $this->input->post("title3"),
								'title4' => $this->input->post("title4"),
								'title5' => $this->input->post("title5"),
								'desc3' => $this->input->post("desc3"),
								'desc4' => $this->input->post("desc4"),
								'title6' => $this->input->post("title6"),
								'title7' => $this->input->post("title7"),
								'title8' => $this->input->post("title8"),
								'title9' => $this->input->post("title9"),
								'image1' => $image1,
								'image2' => $image2,
								'image3' => $image3,
								'image4' => $image4,
								// 'image5' => $image5,
								'date' => date('Y-m-d h:i:s A')
							];

							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_press', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ManagePress'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ManagePress'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManagePress'));
						}
					}
				}
				// end here 
				elseif ($action == 'AddLeaderTeam') {

					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManagePress'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "ourleadership_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'title' => $this->input->post("title"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("ourleadership", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManagePress'));
						}
					}
				} elseif ($action == 'AddLaunches') {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('subtitle', 'Sub Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManagePress'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "newlaunches_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024;
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'title' => $this->input->post("title"),
							'subtitle' => $this->input->post("subtitle"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => $this->input->post("date")
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("newlaunches", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManagePress'));
						}
					}
				} elseif ($action == 'UpdateLaunch') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('newlaunches');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "newlaunches_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}

							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'title' => $this->input->post("title"),
								'subtitle' => $this->input->post("subtitle"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => $this->input->post("date")
							];
							$up = $this->db->where('id', $result->id)->update('newlaunches', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManagePress'));
						}
					}
				}
				// BottomSeller Start Here 
				elseif ($action == 'AddTeam') {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManagePress'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "ourteam_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'title' => $this->input->post("title"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("ourteam", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManagePress'));
						}
					}
				} elseif ($action == 'UpdateTeam') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('ourteam');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "ourteam_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'title' => $this->input->post("title"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => date('Y-m-d h:i:s A')
							];
							$up = $this->db->where('id', $result->id)->update('ourteam', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManagePress'));
						}
					}
				}
				// end here 
				elseif ($action == 'UpdateLeadership') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('ourleadership');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "ourleadership_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'title' => $this->input->post("title"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => date('Y-m-d h:i:s A')
							];
							$up = $this->db->where('id', $result->id)->update('ourleadership', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManagePress'));
						}
					}
				}
				// updatebottom 
				elseif ($action == 'UpdateBottom') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_becomeseller');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "Bottom_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}


							$updatedata = [
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'image1' => $image1,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_becomeseller', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManagePress'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManagePress'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManagePress'));
						}
					}
				}
			}
		} else {
			$data['press'] = $this->db->get("tbl_press")->result();
			$data['our_leader'] = $this->db->get("ourleadership")->result();
			$data['our_team'] = $this->db->get("ourteam")->result();
			$data['new_launches'] = $this->db->get("newlaunches")->result();
			$this->load->view("Admin/ManagePress", $data);
		}
	}

	// ManagePress End Here 


	// StayConnect 
	public function StayConnect()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'StayConnect';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_stayconnect");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditStayConnected';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/StayConnect'));
					}
				} elseif ($action == 'EditBottom') {
					$query = $this->db->where('id', $id)->get('tbl_becomeseller');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditBecomeaSellerBottom";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/BecomeaSeller'));
					}
				} else {
					redirect(base_url('Admin/BecomeaSeller'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('name', 'Link', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/StayConnect'));
					} else {
						$name = $this->input->post("name");

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "stayconnected_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'name' => $name,
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_stayconnect", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/StayConnect'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/StayConnect'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/StayConnect'));
						}
					}
					// }
				}
				// BottomSeller Start Here 

				// end here 
				elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_stayconnect');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "stayconnected_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'name' => $this->input->post('name'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_stayconnect', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/StayConnect'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/StayConnect'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/StayConnect'));
						}
					}
				} elseif ($this->uri->segment(3) == 'UpdateHeading') {
					$check = $this->db->get('tbl_socialheading');

					$updatedata = [
						'social_heading' => $this->input->post("social_heading"),
					];

					if ($check->num_rows() > 0) {
						$row = $check->row();
						$data = $this->db->where('id', $row->id)->update('tbl_socialheading', $updatedata);
						if (!empty($data)) {
							$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
							redirect(base_url('Admin/StayConnect'));
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
							redirect(base_url('Admin/StayConnect'));
						}
					} else {

						$data = $this->db->insert('tbl_socialheading', $updatedata);
						if (!empty($data)) {
							$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
							redirect(base_url('Admin/StayConnect'));
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
							redirect(base_url('Admin/StayConnect'));
						}
					}
				}
			}
		} else {
			$data['social_media'] = $this->db->get("tbl_stayconnect")->result();
			$this->load->view("Admin/StayConnect", $data);
		}
	}


	// BecomeaSeller 
	public function BecomeaSeller()
	{
		$this->data->file_column = 'image';
		$this->data->file_column1 = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'BecomeaSeller';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_stayconnecttop");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditBecomeaSellerTop';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/BecomeaSeller'));
					}
				} elseif ($action == 'EditBottom') {
					$query = $this->db->where('id', $id)->get('tbl_becomeseller');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditBecomeaSellerBottom";
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/BecomeaSeller'));
					}
				} else {
					redirect(base_url('Admin/BecomeaSeller'));
				}
			} else {
				if ($action == 'AddTopSeller') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('name', 'Title', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/BecomeaSeller'));
					} else {
						$name = $this->input->post("name");

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "stayconnectedtop_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'name' => $name,
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_stayconnecttop", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/BecomeaSeller'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/BecomeaSeller'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/BecomeaSeller'));
						}
					}
					// }
				}

				// BottomSeller Start Here 
				elseif ($action == 'AddBottomSeller') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/BecomeaSeller'));
					} else {
						$title = $this->input->post("title");
						$description = $this->input->post("description");

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "bottom_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image1')) {
							$upload_status = false;
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'title' => $this->input->post('title'),
							'description ' => $this->input->post('description'),
							'image1' => $filename1,
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'updated_at' => $this->data->timestamp
						];


						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_becomeseller", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/BecomeaSeller'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/BecomeaSeller'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/BecomeaSeller'));
						}
					}
				}


				// end here 
				elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_stayconnecttop');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "stayconnectedtop_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'name' => $this->input->post('name'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_stayconnecttop', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/BecomeaSeller'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/BecomeaSeller'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/BecomeaSeller'));
						}
					}
				}
				// updatebottom 
				elseif ($action == 'UpdateBottom') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_becomeseller');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "Bottom_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}


							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'image1' => $image1,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_becomeseller', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/BecomeaSeller'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/BecomeaSeller'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/BecomeaSeller'));
						}
					}
				}
			}
		} else {
			$data['top_seller'] = $this->db->get("tbl_stayconnecttop")->result();
			$data['bottom_seller'] = $this->db->get("tbl_becomeseller")->result();
			$this->load->view("Admin/BecomeaSeller", $data);
		}
	}


	// GetTheApp
	public function ManageGetApp()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageGetApp';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_getapp");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditManageGetApp';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageGetApp'));
					}
				} else {
					redirect(base_url('Admin/ManageGetApp'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('app_heading', 'Heading', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageGetApp'));
					} else {



						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "getapp_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}


						$insertdata = [
							'app_title' => $this->input->post("app_title"),
							'app_description' => $this->input->post("app_description"),
							'app_keyword' => $this->input->post("app_keyword"),
							'app_heading' => $this->input->post("app_heading"),
							'image1' => $filename1,
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_getapp", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageGetApp'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageGetApp'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageGetApp'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_getapp');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "getapp_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}

							$updatedata = [
								'app_title' => $this->input->post("app_title"),
								'app_description' => $this->input->post("app_description"),
								'app_keyword' => $this->input->post("app_keyword"),
								'app_heading' => $this->input->post("app_heading"),
								'image1' => $image1,
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_getapp', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ManageGetApp'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ManageGetApp'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ManageGetApp'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageGetApp'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->get("tbl_getapp")->result();
			$this->load->view("Admin/ManageGetApp", $data);
		}
	}


	// Term_Conditions
	public function Term_Conditions()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('term_condition');

			$updatedata = [
				'terms_title' => $this->input->post("terms_title"),
				'terms_description' => $this->input->post("terms_description"),
				'terms_keyword' => $this->input->post("terms_keyword"),
				'terms_condition' => $this->input->post("terms_condition"),
				'is_status' => 'true',
				'date' => date('Y-m-d h:i:s A'),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('term_condition', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/Term_Conditions'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/Term_Conditions'));
				}
			} else {
				$data = $this->db->insert('term_condition', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/Term_Conditions'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/Term_Conditions'));
				}
			}
		} else {
			$data['activepage'] = 'Term_Conditions';
			$data['list'] = $this->db->get("term_condition")->row();
			$this->load->view("Admin/Term_Conditions", $data);
		}
	}


	// Shipping Policy 
	public function ShippingPolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('shipping_policy');

			$updatedata = [
				'shipping_title' => $this->input->post("shipping_title"),
				'shipping_description' => $this->input->post("shipping_description"),
				'shipping_keyword' => $this->input->post("shipping_keyword"),
				'shipping_policy' => $this->input->post("shipping_policy"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('shipping_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/ShippingPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/ShippingPolicy'));
				}
			} else {
				$data = $this->db->insert('shipping_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/ShippingPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/ShippingPolicy'));
				}
			}
		} else {
			$data['activepage'] = 'ShippingPolicy';
			$data['list'] = $this->db->get("shipping_policy")->row();
			$this->load->view("Admin/ShippingPolicy", $data);
		}
	}


	// Cancellation Policy 
	public function CancellationsPolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('cancellation_policy');

			$updatedata = [
				'cancellation_title' => $this->input->post("cancellation_title"),
				'cancellation_description' => $this->input->post("cancellation_description"),
				'cancellation_keyword' => $this->input->post("cancellation_keyword"),
				'cancellation_policy' => $this->input->post("cancellation_policy"),
				'cancellation_policy2' => $this->input->post("cancellation_policy2"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('cancellation_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/CancellationsPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/CancellationsPolicy'));
				}
			} else {
				$data = $this->db->insert('cancellation_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/CancellationsPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/CancellationsPolicy'));
				}
			}
		} else {
			$data['activepage'] = 'CancellationsPolicy';
			$data['list'] = $this->db->get("cancellation_policy")->row();
			$this->load->view("Admin/CancellationsPolicy", $data);
		}
	}


	// Return Policy 
	public function ReturnsPolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('return_policy');

			$updatedata = [
				'return_title' => $this->input->post("return_title"),
				'return_description' => $this->input->post("return_description"),
				'return_keyword' => $this->input->post("return_keyword"),
				'return_policy' => $this->input->post("return_policy"),
				'return_policy2' => $this->input->post("return_policy2"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('return_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/ReturnsPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/ReturnsPolicy'));
				}
			} else {
				$data = $this->db->insert('return_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/ReturnsPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/ReturnsPolicy'));
				}
			}
		} else {
			$data['activepage'] = 'ReturnsPolicy';
			$data['list'] = $this->db->get("return_policy")->row();
			$this->load->view("Admin/ReturnsPolicy", $data);
		}
	}


	// Refund Policy 
	public function RefundPolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('refund_policy');

			$updatedata = [
				'refund_title' => $this->input->post("refund_title"),
				'refund_description' => $this->input->post("refund_description"),
				'refund_keyword' => $this->input->post("refund_keyword"),
				'refund_policy' => $this->input->post("refund_policy"),
				'refund_policy2' => $this->input->post("refund_policy2"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('refund_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/RefundPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/RefundPolicy'));
				}
			} else {
				$data = $this->db->insert('refund_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/RefundPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/RefundPolicy'));
				}
			}
		} else {
			$data['activepage'] = 'RefundPolicy';
			$data['list'] = $this->db->get("refund_policy")->row();
			$this->load->view("Admin/RefundPolicy", $data);
		}
	}


	// Exchanges Policy 
	public function ExchangePolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('exchange_policy');

			$updatedata = [
				'exchange_title' => $this->input->post("exchange_title"),
				'exchange_description' => $this->input->post("exchange_description"),
				'exchange_keyword' => $this->input->post("exchange_keyword"),
				'exchange_policy' => $this->input->post("exchange_policy"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('exchange_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/ExchangePolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/ExchangePolicy'));
				}
			} else {
				$data = $this->db->insert('exchange_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/ExchangePolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/ExchangePolicy'));
				}
			}
		} else {
			$data['activepage'] = 'ExchangePolicy';
			$data['list'] = $this->db->get("exchange_policy")->row();
			$this->load->view("Admin/ExchangePolicy", $data);
		}
	}


	// Intellectual Policy 
	public function IntellectualProperty()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('tbl_intellectual');

			$updatedata = [
				'intellectual_title' => $this->input->post("intellectual_title"),
				'intellectual_description' => $this->input->post("intellectual_description"),
				'intellectual_keyword' => $this->input->post("intellectual_keyword"),
				'intellectual_property' => $this->input->post("intellectual_property"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('tbl_intellectual', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/IntellectualProperty'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/IntellectualProperty'));
				}
			} else {
				$data = $this->db->insert('tbl_intellectual', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/IntellectualProperty'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/IntellectualProperty'));
				}
			}
		} else {
			$data['activepage'] = 'IntellectualProperty';
			$data['list'] = $this->db->get("tbl_intellectual")->row();
			$this->load->view("Admin/IntellectualProperty", $data);
		}
	}

	// Privacy Policy 
	public function PrivacyPolicy()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('privacy_policy');

			$updatedata = [
				'privacy_title' => $this->input->post("privacy_title"),
				'privacy_description' => $this->input->post("privacy_description"),
				'privacy_keyword' => $this->input->post("privacy_keyword"),
				'privacy_policy' => $this->input->post("privacy_policy"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('privacy_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/PrivacyPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/PrivacyPolicy'));
				}
			} else {
				$data = $this->db->insert('privacy_policy', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/PrivacyPolicy'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/PrivacyPolicy'));
				}
			}
		} else {
			$data['activepage'] = 'PrivacyPolicy';
			$data['list'] = $this->db->get("privacy_policy")->row();
			$this->load->view("Admin/PrivacyPolicy", $data);
		}
	}


	// ManageAboutUs 
	public function ManageAboutUs()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_about");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditManageAboutUs';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageAboutUs'));
					}
				} else {
					redirect(base_url('Admin/ManageAboutUs'));
				}
			} else {
				if ($action == 'Add') {
					$this->form_validation->set_rules('title1', 'Title', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}
					if (empty($_FILES['image2']['name'])) {
						$this->form_validation->set_rules('image2', 'Image', 'required');
					}
					if (empty($_FILES['image3']['name'])) {
						$this->form_validation->set_rules('image3', 'Image', 'required');
					}
					if (empty($_FILES['image4']['name'])) {
						$this->form_validation->set_rules('image4', 'Image', 'required');
					}
					if (empty($_FILES['image5']['name'])) {
						$this->form_validation->set_rules('image5', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageAboutUs'));
					} else {

						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "aboutus_1." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						// image2 
						$filename2 = "";
						if (!empty($_FILES['image2']['name'])) {
							$ext = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);

							$filename2 = time() . "aboutus_2." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename2;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image2')) {
								$upload_status = false;
							}
						}

						// image3
						$filename3 = "";
						if (!empty($_FILES['image3']['name'])) {
							$ext = pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);

							$filename3 = time() . "aboutus_3." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename3;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image3')) {
								$upload_status = false;
							}
						}

						// image4
						$filename4 = "";
						if (!empty($_FILES['image4']['name'])) {
							$ext = pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);

							$filename4 = time() . "aboutus_4." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename4;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image4')) {
								$upload_status = false;
							}
						}
						// image5
						$filename5 = "";
						if (!empty($_FILES['image5']['name'])) {
							$ext = pathinfo($_FILES["image5"]["name"], PATHINFO_EXTENSION);

							$filename5 = time() . "aboutus_5." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename5;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image5')) {
								$upload_status = false;
							}
						}

						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'alt2' => $this->input->post("alt2"),
							'seo_title2' => $this->input->post("seo_title2"),
							'alt3' => $this->input->post("alt3"),
							'seo_title3' => $this->input->post("seo_title3"),
							'alt4' => $this->input->post("alt4"),
							'seo_title4' => $this->input->post("seo_title4"),
							'alt5' => $this->input->post("alt5"),
							'seo_title5' => $this->input->post("seo_title5"),
							'meta_title' => $this->input->post("meta_title"),
							'meta_description' => $this->input->post("meta_description"),
							'meta_keyword' => $this->input->post("meta_keyword"),
							'title1' => $this->input->post("title1"),
							'title2' => $this->input->post("title2"),
							'title3' => $this->input->post("title3"),
							'title4' => $this->input->post("title4"),
							'title5' => $this->input->post("title5"),
							'title6' => $this->input->post("title6"),
							'title7' => $this->input->post("title7"),
							'title8' => $this->input->post("title8"),
							'title9' => $this->input->post("title9"),
							// 'title10' => $this->input->post("title10"),
							'image1' => $filename1,
							'image2' => $filename2,
							'image3' => $filename3,
							'image4' => $filename4,
							'image5' => $filename5,
							'desc1' => $this->input->post("desc1"),
							'desc2' => $this->input->post("desc2"),
							'desc3' => $this->input->post("desc3"),
							'desc4' => $this->input->post("desc4"),
							'desc5' => $this->input->post("desc5"),
							'desc6' => $this->input->post("desc6"),
							'desc7' => $this->input->post("desc7"),
							'desc8' => $this->input->post("desc8"),
							'desc9' => $this->input->post("desc9"),
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_about", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageAboutUs'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageAboutUs'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageAboutUs'));
						}
					}
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_about');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "aboutus_1_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}
							// image2 
							if (empty($_FILES['image2']['name'])) {
								$image2 = $result->image2;
							} else {
								$ext = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
								$image2 = "aboutus_2_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image2;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image2')) {
									$upload_status = false;
								} else {
									if (!empty($result->image2) && file_exists('./uploads/brand/' . $result->image2)) {
										unlinkFile('./uploads/brand/' . $result->image2);
									}
								}
							}

							// image3 
							if (empty($_FILES['image3']['name'])) {
								$image3 = $result->image3;
							} else {
								$ext = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION);
								$image3 = "aboutus_3_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image3;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image3')) {
									$upload_status = false;
								} else {
									if (!empty($result->image3) && file_exists('./uploads/brand/' . $result->image3)) {
										unlinkFile('./uploads/brand/' . $result->image3);
									}
								}
							}

							// image3 
							if (empty($_FILES['image4']['name'])) {
								$image4 = $result->image4;
							} else {
								$ext = pathinfo($_FILES['image4']['name'], PATHINFO_EXTENSION);
								$image4 = "aboutus_4_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image4;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image4')) {
									$upload_status = false;
								} else {
									if (!empty($result->image4) && file_exists('./uploads/brand/' . $result->image4)) {
										unlinkFile('./uploads/brand/' . $result->image4);
									}
								}
							}

							// image5
							if (empty($_FILES['image5']['name'])) {
								$image5 = $result->image5;
							} else {
								$ext = pathinfo($_FILES['image5']['name'], PATHINFO_EXTENSION);
								$image5 = "aboutus_5_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image5;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image5')) {
									$upload_status = false;
								} else {
									if (!empty($result->image5) && file_exists('./uploads/brand/' . $result->image5)) {
										unlinkFile('./uploads/brand/' . $result->image5);
									}
								}
							}

							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'alt2' => $this->input->post("alt2"),
								'seo_title2' => $this->input->post("seo_title2"),
								'alt3' => $this->input->post("alt3"),
								'seo_title3' => $this->input->post("seo_title3"),
								'alt4' => $this->input->post("alt4"),
								'seo_title4' => $this->input->post("seo_title4"),
								'alt5' => $this->input->post("alt5"),
								'seo_title5' => $this->input->post("seo_title5"),
								'meta_title' => $this->input->post("meta_title"),
								'meta_description' => $this->input->post("meta_description"),
								'meta_keyword' => $this->input->post("meta_keyword"),
								'title1' => $this->input->post("title1"),
								'title2' => $this->input->post("title2"),
								'title3' => $this->input->post("title3"),
								'title4' => $this->input->post("title4"),
								'title5' => $this->input->post("title5"),
								'title6' => $this->input->post("title6"),
								'title7' => $this->input->post("title7"),
								'title8' => $this->input->post("title8"),
								'title9' => $this->input->post("title9"),
								// 'title10' => $this->input->post("title10"),
								'image1' => $image1,
								'image2' => $image2,
								'image3' => $image3,
								'image4' => $image4,
								'image5' => $image5,
								'desc1' => $this->input->post("desc1"),
								'desc2' => $this->input->post("desc2"),
								'desc3' => $this->input->post("desc3"),
								'desc4' => $this->input->post("desc4"),
								'desc5' => $this->input->post("desc5"),
								'desc6' => $this->input->post("desc6"),
								'desc7' => $this->input->post("desc7"),
								'desc8' => $this->input->post("desc8"),
								'desc9' => $this->input->post("desc9"),
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_about', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ManageAboutUs'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ManageAboutUs'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ManageAboutUs'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageAboutUs'));
						}
					}
				}
			}
		} else {
			$data['activepage'] = 'ManageAboutUs';
			$data['list'] = $this->db->order_by('id', 'DESC')->limit(1)->get("tbl_about")->result();
			$this->load->view("Admin/ManageAboutUs", $data);
		}
	}


	// ManageDisclaimer
	public function ManageDisclaimer()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageDisclaimer';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_disclaimer");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditManageDisclaimer';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageDisclaimer'));
					}
				} else {
					redirect(base_url('Admin/ManageDisclaimer'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title1', 'Title1', 'required');
					$this->form_validation->set_rules('title2', 'Title2', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageDisclaimer'));
					} else {

						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "disclaimer_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						// image2
						$filename2 = "";
						if (!empty($_FILES['image2']['name'])) {
							$ext = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);

							$filename2 = time() . "disclaimer2_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename2;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image2')) {
								$upload_status = false;
							}
						}


						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'alt2' => $this->input->post("alt2"),
							'seo_title2' => $this->input->post("seo_title2"),
							'disclaimer_title' => $this->input->post("disclaimer_title"),
							'disclaimer_description' => $this->input->post("disclaimer_description"),
							'disclaimer_keyword' => $this->input->post("disclaimer_keyword"),
							'title1' => $this->input->post("title1"),
							'title2' => $this->input->post("title2"),
							'desc1' => $this->input->post("desc1"),
							'title3' => $this->input->post("title3"),
							'desc2' => $this->input->post("desc2"),
							'title4' => $this->input->post("title4"),
							'desc3' => $this->input->post("desc3"),
							'image1' => $filename1,
							'title5' => $this->input->post("title5"),
							'desc4' => $this->input->post("desc4"),
							'title6' => $this->input->post("title6"),
							'desc5' => $this->input->post("desc5"),
							'desc6' => $this->input->post("desc6"),
							'desc7' => $this->input->post("desc7"),
							'image2' => $filename2,
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_disclaimer", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageDisclaimer'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageDisclaimer'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageDisclaimer'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_disclaimer');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "rewards_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}


							// image2 
							if (empty($_FILES['image2']['name'])) {
								$image2 = $result->image2;
							} else {
								$ext = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
								$image2 = "disclaimer2_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image2;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image2')) {
									$upload_status = false;
								} else {
									if (!empty($result->image2) && file_exists('./uploads/brand/' . $result->image2)) {
										unlinkFile('./uploads/brand/' . $result->image2);
									}
								}
							}



							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'alt2' => $this->input->post("alt2"),
								'seo_title2' => $this->input->post("seo_title2"),
								'disclaimer_title' => $this->input->post("disclaimer_title"),
								'disclaimer_description' => $this->input->post("disclaimer_description"),
								'disclaimer_keyword' => $this->input->post("disclaimer_keyword"),
								'title1' => $this->input->post("title1"),
								'title2' => $this->input->post("title2"),
								'desc1' => $this->input->post("desc1"),
								'title3' => $this->input->post("title3"),
								'desc2' => $this->input->post("desc2"),
								'title4' => $this->input->post("title4"),
								'desc3' => $this->input->post("desc3"),
								'image1' => $image1,
								'title5' => $this->input->post("title5"),
								'desc4' => $this->input->post("desc4"),
								'title6' => $this->input->post("title6"),
								'desc5' => $this->input->post("desc5"),
								'desc6' => $this->input->post("desc6"),
								'desc7' => $this->input->post("desc7"),
								'image2' => $image2,
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_disclaimer', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ManageDisclaimer'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ManageDisclaimer'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ManageDisclaimer'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageDisclaimer'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->get("tbl_disclaimer")->result();
			$this->load->view("Admin/ManageDisclaimer", $data);
		}
	}


	// ManageRewards
	public function ManageRewards()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageRewards';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_rewards");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditManageRewards';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageRewards'));
					}
				} else {
					redirect(base_url('Admin/ManageRewards'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title1', 'Title', 'required');
					$this->form_validation->set_rules('subtitle1', 'Sub Title', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageRewards'));
					} else {



						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "rewards_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}



						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'reward_title' => $this->input->post("reward_title"),
							'reward_description' => $this->input->post("reward_description"),
							'reward_keyword' => $this->input->post("reward_keyword"),
							'title1' => $this->input->post("title1"),
							'subtitle1' => $this->input->post("subtitle1"),
							'title2' => $this->input->post("title2"),
							'desc1' => $this->input->post("desc1"),
							'title3' => $this->input->post("title3"),
							'desc2' => $this->input->post("desc2"),
							'title4' => $this->input->post("title4"),
							'desc3' => $this->input->post("desc3"),
							'title5' => $this->input->post("title5"),
							'desc4' => $this->input->post("desc4"),
							'title6' => $this->input->post("title6"),
							'image1' => $filename1,
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_rewards", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageRewards'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageRewards'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageRewards'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_rewards');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "rewards_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}

							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'reward_title' => $this->input->post("reward_title"),
								'reward_description' => $this->input->post("reward_description"),
								'reward_keyword' => $this->input->post("reward_keyword"),
								'title1' => $this->input->post("title1"),
								'subtitle1' => $this->input->post("subtitle1"),
								'title2' => $this->input->post("title2"),
								'desc1' => $this->input->post("desc1"),
								'title3' => $this->input->post("title3"),
								'desc2' => $this->input->post("desc2"),
								'title4' => $this->input->post("title4"),
								'desc3' => $this->input->post("desc3"),
								'title5' => $this->input->post("title5"),
								'desc4' => $this->input->post("desc4"),
								'title6' => $this->input->post("title6"),
								'image1' => $image1,
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_rewards', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ManageRewards'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ManageRewards'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ManageRewards'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageRewards'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->get("tbl_rewards")->result();
			$this->load->view("Admin/ManageRewards", $data);
		}
	}



	// ChooseYourSize
	public function ChooseYourSize()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ChooseYourSize';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_choosesize");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditChooseYourSize';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ChooseYourSize'));
					}
				} else {
					redirect(base_url('Admin/ChooseYourSize'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('subtitle', 'Sub Title', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ChooseYourSize'));
					} else {



						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "choosesize_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'choose_title' => $this->input->post("choose_title"),
							'choose_description' => $this->input->post("choose_description"),
							'choose_keyword' => $this->input->post("choose_keyword"),
							'title' => $this->input->post("title"),
							'subtitle' => $this->input->post("subtitle"),
							'desc1' => $this->input->post("desc1"),
							'image1' => $filename1,
							'desc2' => $this->input->post("desc2"),
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_choosesize", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ChooseYourSize'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ChooseYourSize'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ChooseYourSize'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_choosesize');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "choosesize_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}

							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'choose_title' => $this->input->post("choose_title"),
								'choose_description' => $this->input->post("choose_description"),
								'choose_keyword' => $this->input->post("choose_keyword"),
								'title' => $this->input->post("title"),
								'subtitle' => $this->input->post("subtitle"),
								'desc1' => $this->input->post("desc1"),
								'image1' => $image1,
								'desc2' => $this->input->post("desc2"),
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_choosesize', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ChooseYourSize'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ChooseYourSize'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ChooseYourSize'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ChooseYourSize'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->limit(1)->get("tbl_choosesize")->result();
			$this->load->view("Admin/ChooseYourSize", $data);
		}
	}


	// CouponRedemption
	public function CouponRedemption()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('tbl_couponredemption');

			$updatedata = [
				'coupon_title' => $this->input->post("coupon_title"),
				'coupon_description' => $this->input->post("coupon_description"),
				'coupon_keyword' => $this->input->post("coupon_keyword"),
				'coupon_redemption' => $this->input->post("coupon_redemption"),
				'date' => date('Y-m-d h:i:s A'),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('tbl_couponredemption', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/CouponRedemption'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/CouponRedemption'));
				}
			} else {
				$data = $this->db->insert('tbl_couponredemption', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/CouponRedemption'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/CouponRedemption'));
				}
			}
		} else {
			$data['activepage'] = 'CouponRedemption';
			$data['list'] = $this->db->get("tbl_couponredemption")->row();
			$this->load->view("Admin/CouponRedemption", $data);
		}
	}



	// PaymentMethod
	public function PaymentMethod()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'PaymentMethod';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_paymentmethod");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditPaymentMethod';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/PaymentMethod'));
					}
				} else {
					redirect(base_url('Admin/PaymentMethod'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('subtitle', 'Sub Title', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}
					if (empty($_FILES['image2']['name'])) {
						$this->form_validation->set_rules('image2', 'Image', 'required');
					}
					if (empty($_FILES['image3']['name'])) {
						$this->form_validation->set_rules('image3', 'Image', 'required');
					}
					if (empty($_FILES['image4']['name'])) {
						$this->form_validation->set_rules('image4', 'Image', 'required');
					}
					if (empty($_FILES['image5']['name'])) {
						$this->form_validation->set_rules('image5', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/PaymentMethod'));
					} else {



						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "paymentmethod." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						// image2 
						$filename2 = "";
						if (!empty($_FILES['image2']['name'])) {
							$ext = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);

							$filename2 = time() . "paymentmethod2_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename2;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image2')) {
								$upload_status = false;
							}
						}

						// image3
						$filename3 = "";
						if (!empty($_FILES['image3']['name'])) {
							$ext = pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);

							$filename3 = time() . "paymentmethod3_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename3;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image3')) {
								$upload_status = false;
							}
						}

						// image4
						$filename4 = "";
						if (!empty($_FILES['image4']['name'])) {
							$ext = pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);

							$filename4 = time() . "paymentmethod4_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename4;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image4')) {
								$upload_status = false;
							}
						}
						// image5
						$filename5 = "";
						if (!empty($_FILES['image5']['name'])) {
							$ext = pathinfo($_FILES["image5"]["name"], PATHINFO_EXTENSION);

							$filename5 = time() . "paymentmethod5_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024;
							$config0['file_name'] = $filename5;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image5')) {
								$upload_status = false;
							}
						}

						$insertdata = [
							'payment_title' => $this->input->post("payment_title"),
							'payment_description' => $this->input->post("payment_description"),
							'payment_keyword' => $this->input->post("payment_keyword"),
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'alt2' => $this->input->post("alt2"),
							'seo_title2' => $this->input->post("seo_title2"),
							'alt3' => $this->input->post("alt3"),
							'seo_title3' => $this->input->post("seo_title3"),
							'alt4' => $this->input->post("alt4"),
							'seo_title4' => $this->input->post("seo_title4"),
							'alt5' => $this->input->post("alt5"),
							'seo_title5' => $this->input->post("seo_title5"),
							'title' => $this->input->post("title"),
							'title2' => $this->input->post("title2"),
							'title3' => $this->input->post("title3"),
							'title4' => $this->input->post("title4"),
							'subtitle' => $this->input->post("subtitle"),
							'image1' => $filename1,
							'image2' => $filename2,
							'image3' => $filename3,
							'image4' => $filename4,
							'image5' => $filename5,
							'desc1' => $this->input->post("desc1"),
							'desc2' => $this->input->post("desc2"),
							'desc3' => $this->input->post("desc3"),
							'desc4' => $this->input->post("desc4"),
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_paymentmethod", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/PaymentMethod'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/PaymentMethod'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/PaymentMethod'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_paymentmethod');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "paymentmethod_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}
							// image2 
							if (empty($_FILES['image2']['name'])) {
								$image2 = $result->image2;
							} else {
								$ext = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
								$image2 = "paymentmethod2_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image2;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image2')) {
									$upload_status = false;
								} else {
									if (!empty($result->image2) && file_exists('./uploads/brand/' . $result->image2)) {
										unlinkFile('./uploads/brand/' . $result->image2);
									}
								}
							}

							// image3 
							if (empty($_FILES['image3']['name'])) {
								$image3 = $result->image3;
							} else {
								$ext = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION);
								$image3 = "paymentmethod3_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image3;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image3')) {
									$upload_status = false;
								} else {
									if (!empty($result->image3) && file_exists('./uploads/brand/' . $result->image3)) {
										unlinkFile('./uploads/brand/' . $result->image3);
									}
								}
							}

							// image3 
							if (empty($_FILES['image4']['name'])) {
								$image4 = $result->image4;
							} else {
								$ext = pathinfo($_FILES['image4']['name'], PATHINFO_EXTENSION);
								$image4 = "paymentmethod4_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image4;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image4')) {
									$upload_status = false;
								} else {
									if (!empty($result->image4) && file_exists('./uploads/brand/' . $result->image4)) {
										unlinkFile('./uploads/brand/' . $result->image4);
									}
								}
							}

							// image5
							if (empty($_FILES['image5']['name'])) {
								$image5 = $result->image5;
							} else {
								$ext = pathinfo($_FILES['image5']['name'], PATHINFO_EXTENSION);
								$image5 = "paymentmethod5_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image5;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image5')) {
									$upload_status = false;
								} else {
									if (!empty($result->image5) && file_exists('./uploads/brand/' . $result->image5)) {
										unlinkFile('./uploads/brand/' . $result->image5);
									}
								}
							}

							$updatedata = [
								'payment_title' => $this->input->post("payment_title"),
								'payment_description' => $this->input->post("payment_description"),
								'payment_keyword' => $this->input->post("payment_keyword"),
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'alt2' => $this->input->post("alt2"),
								'seo_title2' => $this->input->post("seo_title2"),
								'alt3' => $this->input->post("alt3"),
								'seo_title3' => $this->input->post("seo_title3"),
								'alt4' => $this->input->post("alt4"),
								'seo_title4' => $this->input->post("seo_title4"),
								'alt5' => $this->input->post("alt5"),
								'seo_title5' => $this->input->post("seo_title5"),
								'title' => $this->input->post("title"),
								'title2' => $this->input->post("title2"),
								'title3' => $this->input->post("title3"),
								'title4' => $this->input->post("title4"),
								'subtitle' => $this->input->post("subtitle"),
								'image1' => $image1,
								'image2' => $image2,
								'image3' => $image3,
								'image4' => $image4,
								'image5' => $image5,
								'desc1' => $this->input->post("desc1"),
								'desc2' => $this->input->post("desc2"),
								'desc3' => $this->input->post("desc3"),
								'desc4' => $this->input->post("desc4"),
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_paymentmethod', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/PaymentMethod'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/PaymentMethod'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/PaymentMethod'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/PaymentMethod'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->limit(1)->get("tbl_paymentmethod")->result();
			$this->load->view("Admin/PaymentMethod", $data);
		}
	}




	// ShoppingGuid
	public function ShoppingGuid()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ShoppingGuid';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_shoppingguide");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditShoppingGuid';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ShoppingGuid'));
					}
				} else {
					redirect(base_url('Admin/ShoppingGuid'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title1', 'Title', 'required');
					$this->form_validation->set_rules('subtitle1', 'Sub Title', 'required');
					$this->form_validation->set_rules('desc1', 'Description', 'required');
					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}
					if (empty($_FILES['image2']['name'])) {
						$this->form_validation->set_rules('image2', 'Image', 'required');
					}
					if (empty($_FILES['image3']['name'])) {
						$this->form_validation->set_rules('image3', 'Image', 'required');
					}
					if (empty($_FILES['image4']['name'])) {
						$this->form_validation->set_rules('image4', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ShoppingGuid'));
					} else {



						$upload_status = true;
						// image1
						$filename1 = "";
						if (!empty($_FILES['image1']['name'])) {
							$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

							$filename1 = time() . "shoppingguid_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename1;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image1')) {
								$upload_status = false;
							}
						}

						// image2 
						$filename2 = "";
						if (!empty($_FILES['image2']['name'])) {
							$ext = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);

							$filename2 = time() . "shoppingguid2_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename2;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image2')) {
								$upload_status = false;
							}
						}

						// image3
						$filename3 = "";
						if (!empty($_FILES['image3']['name'])) {
							$ext = pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);

							$filename3 = time() . "shoppingguid3_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename3;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image3')) {
								$upload_status = false;
							}
						}

						// image4
						$filename4 = "";
						if (!empty($_FILES['image4']['name'])) {
							$ext = pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);

							$filename4 = time() . "shoppingguid4_." . $ext;
							$config0['upload_path'] = './uploads/brand/';
							$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config0['max_size'] = 3024; // In KB
							$config0['file_name'] = $filename4;
							$this->load->library('upload');
							$this->upload->initialize($config0);
							if (!$this->upload->do_upload('image4')) {
								$upload_status = false;
							}
						}

						$insertdata = [
							'alt' => $this->input->post("alt"),
							'seo_title' => $this->input->post("seo_title"),
							'alt2' => $this->input->post("alt2"),
							'seo_title2' => $this->input->post("seo_title2"),
							'alt3' => $this->input->post("alt3"),
							'seo_title3' => $this->input->post("seo_title3"),
							'alt4' => $this->input->post("alt4"),
							'seo_title4' => $this->input->post("seo_title4"),
							'guide_title' => $this->input->post("guide_title"),
							'guide_description' => $this->input->post("guide_description"),
							'guide_keyword' => $this->input->post("guide_keyword"),
							'title1' => $this->input->post("title1"),
							'subtitle1' => $this->input->post("subtitle1"),
							'step1' => $this->input->post("step1"),
							'desc1' => $this->input->post("desc1"),
							'image1' => $filename1,
							'image2' => $filename2,
							'image3' => $filename3,
							'image4' => $filename4,
							'step2' => $this->input->post("step2"),
							'title2' => $this->input->post("title2"),
							'desc2' => $this->input->post("desc2"),
							'step3' => $this->input->post("step3"),
							'title3' => $this->input->post("title3"),
							'desc3' => $this->input->post("desc3"),
							'step4' => $this->input->post("step4"),
							'title4' => $this->input->post("title4"),
							'desc4' => $this->input->post("desc4"),
							'notes' => $this->input->post("notes"),
							'desc5' => $this->input->post("desc5"),
							'is_status' => 'true',
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_shoppingguide", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ShoppingGuid'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ShoppingGuid'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ShoppingGuid'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_shoppingguide');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "shoppingguid_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										unlinkFile('./uploads/brand/' . $result->image1);
									}
								}
							}
							// image2 
							if (empty($_FILES['image2']['name'])) {
								$image2 = $result->image2;
							} else {
								$ext = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
								$image2 = "shoppingguid2_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image2;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image2')) {
									$upload_status = false;
								} else {
									if (!empty($result->image2) && file_exists('./uploads/brand/' . $result->image2)) {
										unlinkFile('./uploads/brand/' . $result->image2);
									}
								}
							}

							// image3 
							if (empty($_FILES['image3']['name'])) {
								$image3 = $result->image3;
							} else {
								$ext = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION);
								$image3 = "shoppingguid3_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image3;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image3')) {
									$upload_status = false;
								} else {
									if (!empty($result->image3) && file_exists('./uploads/brand/' . $result->image3)) {
										unlinkFile('./uploads/brand/' . $result->image3);
									}
								}
							}

							// image3 
							if (empty($_FILES['image4']['name'])) {
								$image4 = $result->image4;
							} else {
								$ext = pathinfo($_FILES['image4']['name'], PATHINFO_EXTENSION);
								$image4 = "shoppingguid4_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image4;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image4')) {
									$upload_status = false;
								} else {
									if (!empty($result->image4) && file_exists('./uploads/brand/' . $result->image4)) {
										unlinkFile('./uploads/brand/' . $result->image4);
									}
								}
							}

							$updatedata = [
								'alt' => $this->input->post("alt"),
								'seo_title' => $this->input->post("seo_title"),
								'alt2' => $this->input->post("alt2"),
								'seo_title2' => $this->input->post("seo_title2"),
								'alt3' => $this->input->post("alt3"),
								'seo_title3' => $this->input->post("seo_title3"),
								'alt4' => $this->input->post("alt4"),
								'seo_title4' => $this->input->post("seo_title4"),
								'guide_title' => $this->input->post("guide_title"),
								'guide_description' => $this->input->post("guide_description"),
								'guide_keyword' => $this->input->post("guide_keyword"),
								'title1' => $this->input->post("title1"),
								'subtitle1' => $this->input->post("subtitle1"),
								'step1' => $this->input->post("step1"),
								'desc1' => $this->input->post("desc1"),
								'image1' => $image1,
								'image2' => $image2,
								'image3' => $image3,
								'image4' => $image4,
								'step2' => $this->input->post("step2"),
								'title2' => $this->input->post("title2"),
								'desc2' => $this->input->post("desc2"),
								'step3' => $this->input->post("step3"),
								'title3' => $this->input->post("title3"),
								'desc3' => $this->input->post("desc3"),
								'step4' => $this->input->post("step4"),
								'title4' => $this->input->post("title4"),
								'desc4' => $this->input->post("desc4"),
								'notes' => $this->input->post("notes"),
								'desc5' => $this->input->post("desc5"),
								'date' => date('Y-m-d h:i:s A')
							];
							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('tbl_shoppingguide', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/ShoppingGuid'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/ShoppingGuid'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/ShoppingGuid'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ShoppingGuid'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->limit(1)->get("tbl_shoppingguide")->result();
			$this->load->view("Admin/ShoppingGuid", $data);
		}
	}


	// TermAndCondition
	public function TermAndCondition()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('tbl_terms');

			$updatedata = [
				'disc_title' => $this->input->post("disc_title"),
				'disc_description' => $this->input->post("disc_description"),
				'disc_keyword' => $this->input->post("disc_keyword"),
				'disc_condition' => $this->input->post("disc_condition"),
				'slick_title' => $this->input->post("slick_title"),
				'slick_description' => $this->input->post("slick_description"),
				'slick_keyword' => $this->input->post("slick_keyword"),
				'slick_condition' => $this->input->post("slick_condition"),
				'get_the_app' => $this->input->post("get_the_app"),
				'terms_title' => $this->input->post("terms_title"),
				'terms_description' => $this->input->post("terms_description"),
				'terms_keyword' => $this->input->post("terms_keyword"),
				'terms_condition' => $this->input->post("terms_condition"),
				'shipping_title' => $this->input->post("shipping_title"),
				'shipping_description' => $this->input->post("shipping_description"),
				'shipping_keyword' => $this->input->post("shipping_keyword"),
				'shipping_terms' => $this->input->post("shipping_terms"),
				'cancellation_title' => $this->input->post("cancellation_title"),
				'cancellation_description' => $this->input->post("cancellation_description"),
				'cancellation_keyword' => $this->input->post("cancellation_keyword"),
				'cancellation_policy' => $this->input->post("cancellation_policy"),
				'return_title' => $this->input->post("return_title"),
				'return_description' => $this->input->post("return_description"),
				'return_keyword' => $this->input->post("return_keyword"),
				'return_policy' => $this->input->post("return_policy"),
				'refund_title' => $this->input->post("refund_title"),
				'refund_description' => $this->input->post("refund_description"),
				'refund_keyword' => $this->input->post("refund_keyword"),
				'refund_policy' => $this->input->post("refund_policy"),
				'exchange_title' => $this->input->post("exchange_title"),
				'exchange_description' => $this->input->post("exchange_description"),
				'exchange_keyword' => $this->input->post("exchange_keyword"),
				'exchange_policy' => $this->input->post("exchange_policy"),
				'intellectual_title' => $this->input->post("intellectual_title"),
				'intellectual_description' => $this->input->post("intellectual_description"),
				'intellectual_keyword' => $this->input->post("intellectual_keyword"),
				'intellectual_proprty' => $this->input->post("intellectual_proprty"),
				'cookie_title' => $this->input->post("cookie_title"),
				'cookie_description' => $this->input->post("cookie_description"),
				'cookie_keyword' => $this->input->post("cookie_keyword"),
				'privacy_cookie' => $this->input->post("privacy_cookie"),
				'shopping_title' => $this->input->post("shopping_title"),
				'shopping_description' => $this->input->post("shopping_description"),
				'shopping_keyword' => $this->input->post("shopping_keyword"),
				'shopping_guide' => $this->input->post("shopping_guide"),
				'coupon_title' => $this->input->post("coupon_title"),
				'coupon_description' => $this->input->post("coupon_description"),
				'coupon_keyword' => $this->input->post("coupon_keyword"),
				'coupon_redemption' => $this->input->post("coupon_redemption"),
				'size_title' => $this->input->post("size_title"),
				'size_description' => $this->input->post("size_description"),
				'size_keyword' => $this->input->post("size_keyword"),
				'choose_size' => $this->input->post("choose_size"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('tbl_terms', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/TermAndCondition'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/TermAndCondition'));
				}
			} else {
				$data = $this->db->insert('tbl_terms', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/TermAndCondition'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/TermAndCondition'));
				}
			}
		} else {
			$data['list'] = $this->db->get("tbl_terms")->row();
			$this->load->view("Admin/TermAndCondition", $data);
		}
	}

	// ManageContact 
	public function ManageContact()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('contact_address');

			$updatedata = [
				'location' => $this->input->post("location"),
				'address' => $this->input->post("address"),
				'mobile' => $this->input->post("mobile"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('contact_address', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/ManageContact'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/ManageContact'));
				}
			} else {
				// echo "<pre>";print_r($updatedata);die();
				$data = $this->db->insert('contact_address', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/ManageContact'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/ManageContact'));
				}
			}
		} else {
			$data['activepage'] = 'ManageContact';
			$data['list'] = $this->db->order_by('id', 'desc')->get("contact_address")->result();
			$data['contact'] = $this->db->order_by('id', 'desc')->get("contact")->result();
			$this->load->view("Admin/ManageContact", $data);
		}
	}



	// Managepress 
	// public function Managepress()
	public function ManagepressText()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('tbl_press');

			$updatedata = [
				'message1' => $this->input->post("message1"),
				'message2' => $this->input->post("message2"),
				'message3' => $this->input->post("message3"),
				'message4' => $this->input->post("message4"),
				'message5' => $this->input->post("message5"),
				'message6' => $this->input->post("message6"),
				'message7' => $this->input->post("message7"),
				'message8' => $this->input->post("message8"),
				'message9' => $this->input->post("message9"),
				'message10' => $this->input->post("message10"),
				'message11' => $this->input->post("message11"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('tbl_press', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/Managepress'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/Managepress'));
				}
			} else {
				$data = $this->db->insert('tbl_press', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/Managepress'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/Managepress'));
				}
			}
		} else {
			$data['activepage'] = 'ManagePressText';
			$this->load->view("Admin/Managepress", $data);
		}
	}


	//  Manage Social Heading 
	public function ManageSocialHeading()
	{
		if ($this->uri->segment(3) == 'Update') {
			$check = $this->db->get('tbl_socialheading');

			$updatedata = [
				'social_heading' => $this->input->post("social_heading"),
			];

			if ($check->num_rows() > 0) {
				$row = $check->row();
				$data = $this->db->where('id', $row->id)->update('tbl_socialheading', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Updated Succefully']);
					redirect(base_url('Admin/ManageSocialHeading'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Went Wrong!']);
					redirect(base_url('Admin/ManageSocialHeading'));
				}
			} else {
				// echo "<pre>";print_r($updatedata);die();
				$data = $this->db->insert('tbl_socialheading', $updatedata);
				if (!empty($data)) {
					$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Succefully']);
					redirect(base_url('Admin/ManageSocialHeading'));
				} else {
					$this->session->set_flashdata(['res' => 'error', 'msg' => 'Not Added!']);
					redirect(base_url('Admin/ManageSocialHeading'));
				}
			}
		} else {
			$data['list'] = $this->db->get("tbl_socialheading")->row();
			$this->load->view("Admin/ManageSocialHeading", $data);
		}
	}


	// Our Team 
	public function ManageOurTeam()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("ourteam");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditOurTeam';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageOurTeam'));
					}
				} else {
					redirect(base_url('Admin/ManageOurTeam'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageOurTeam'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "ourteam_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'title' => $this->input->post("title"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("ourteam", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageOurTeam'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageOurTeam'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageOurTeam'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('ourteam');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "ourteam_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'title' => $this->input->post("title"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => date('Y-m-d h:i:s A')
							];
							$up = $this->db->where('id', $result->id)->update('ourteam', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManageOurTeam'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManageOurTeam'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageOurTeam'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->get("ourteam")->result();
			$this->load->view("Admin/ManageOurTeam", $data);
		}
	}

	// Manage New Launches 
	public function ManageOurLeadership()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("ourleadership");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditOurLeadership';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageOurLeadership'));
					}
				} else {
					redirect(base_url('Admin/ManageOurLeadership'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageOurLeadership'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "ourleadership_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'title' => $this->input->post("title"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("ourleadership", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageOurLeadership'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageOurLeadership'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageOurLeadership'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('ourleadership');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "ourleadership_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'title' => $this->input->post("title"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => date('Y-m-d h:i:s A')
							];
							$up = $this->db->where('id', $result->id)->update('ourleadership', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManageOurLeadership'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManageOurLeadership'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageOurLeadership'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->get("ourleadership")->result();
			$this->load->view("Admin/ManageOurLeadership", $data);
		}
	}


	// Manage New Launches 
	public function ManageNewLaunches()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("newlaunches");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditNewLaunches';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageNewLaunches'));
					}
				} else {
					redirect(base_url('Admin/ManageNewLaunches'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('title', 'Title', 'required');
					$this->form_validation->set_rules('subtitle', 'Sub Title', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageNewLaunches'));
					} else {


						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "stayconnected_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'title' => $this->input->post("title"),
							'subtitle' => $this->input->post("subtitle"),
							'description' => $this->input->post("description"),
							'is_status' => 'true',
							'image' => $filename1,
							'date' => $this->input->post("date")
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("newlaunches", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageNewLaunches'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageNewLaunches'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageNewLaunches'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('newlaunches');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "stayconnected_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'title' => $this->input->post("title"),
								'subtitle' => $this->input->post("subtitle"),
								'description' => $this->input->post("description"),
								'image' => $image,
								'date' => $this->input->post("date")
							];
							$up = $this->db->where('id', $result->id)->update('newlaunches', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManageNewLaunches'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManageNewLaunches'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageNewLaunches'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->get("newlaunches")->result();
			$this->load->view("Admin/ManageNewLaunches", $data);
		}
	}


	// StayConnected
	public function ManageSocialMedia()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_stayconnect");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditStayConnected';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/ManageSocialMedia'));
					}
				} else {
					redirect(base_url('Admin/ManageSocialMedia'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('name', 'Link', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/ManageSocialMedia'));
					} else {
						$name = $this->input->post("name");

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "stayconnected_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'name' => $name,
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_stayconnect", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/ManageSocialMedia'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/ManageSocialMedia'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/ManageSocialMedia'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_stayconnect');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "stayconnected_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'name' => $this->input->post('name'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_stayconnect', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/ManageSocialMedia'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/ManageSocialMedia'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/ManageSocialMedia'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->get("tbl_stayconnect")->result();
			$this->load->view("Admin/ManageSocialMedia", $data);
		}
	}



	// StayConnected
	public function BecomeSellerTop()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("tbl_stayconnecttop");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						$data['action'] = 'EditStayConnectedTop';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/BecomeSellerTop'));
					}
				} else {
					redirect(base_url('Admin/BecomeSellerTop'));
				}
			} else {
				if ($action == 'Add') {
					// if (!empty($this->input->post())) {
					$this->form_validation->set_rules('name', 'Title', 'required');
					if (empty($_FILES['image']['name'])) {
						$this->form_validation->set_rules('image', 'Image', 'required');
					}

					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "$msg");
						redirect(base_url('Admin/BecomeSellerTop'));
					} else {
						$name = $this->input->post("name");

						// image
						$upload_status = true;
						$filename1 = "";
						$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "stayconnectedtop_." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024; // In KB
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);

						if (!$this->upload->do_upload('image')) {
							$upload_status = false;
						}


						$insertdata = [
							'name' => $name,
							'is_status' => 'true',
							'image' => $filename1,
							'date' => date('Y-m-d h:i:s A')
						];

						if ($upload_status == true) {

							$ins = $this->db->insert("tbl_stayconnecttop", $insertdata);
							if ($ins) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

								redirect(base_url('Admin/BecomeSellerTop'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
								redirect(base_url('Admin/BecomeSellerTop'));
							}
						} else {
							$this->session->set_flashdata("res", "error");
							$this->session->set_flashdata("msg", "File upload failed.");
							redirect(base_url('Admin/BecomeSellerTop'));
						}
					}
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('tbl_stayconnecttop');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image']['name'])) {
								$image = $result->image;
							} else {
								$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$image = "stayconnectedtop_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024; // In KB
								$config0['file_name'] = $image;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image')) {
									$upload_status = false;
								} else {
									// unlinkFile the old image if it exists
									if (!empty($result->image) && file_exists('./uploads/brand/' . $result->image)) {
										unlinkFile('./uploads/brand/' . $result->image);
									}
								}
							}


							$updatedata = [
								'name' => $this->input->post('name'),
								'image' => $image,
							];
							$up = $this->db->where('id', $result->id)->update('tbl_stayconnecttop', $updatedata);
							if ($up) {
								$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
								redirect(base_url('Admin/BecomeSellerTop'));
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
								redirect(base_url('Admin/BecomeSellerTop'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/BecomeSellerTop'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->get("tbl_stayconnecttop")->result();
			$this->load->view("Admin/BecomeSellerTop", $data);
		}
	}


	// Manage Become Seller Start Here 

	public function BecomeSellerBottom()
	{
		$this->data->table = 'tbl_becomeseller';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'BecomeSeller';
		$this->data->file_column = 'image1';
		$output['res'] = 'error';

		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditBecomeSeller";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (!empty($_FILES['image1']['name'])) {
							$extension = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
							$filename1 = time() . rand() . "." . $extension;
						} else {
							$filename1 = "";
						}


						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'title' => $this->input->post('title'),
								// 'title1' => $this->input->post('title1'),
								'description ' => $this->input->post('description'),
								'image1' => $filename1,
								// 'image2' => $filename2,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'updated_at' => $this->data->timestamp
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
								if (!empty($_FILES['image1']['name'])) {
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 2048;
									$config['file_name']     = $filename1;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
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
				} else if ($action == 'Update') {
					// if (!empty($this->input->post())) {
					if (empty($this->input->post("id"))) {
						$output['msg'] = 'ID is required.';
					} else {
						$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
						if ($query->num_rows()) {
							$data['list'] = $query->result();
							if ($this->form_validation->run($this->data->key) == FALSE) {
								$msg = explode('</p>', validation_errors());
								$output['msg'] = str_ireplace('<p>', '', $msg[0]);
							} else {
								$old_filename = $data['list'][0]->image1;

								$upload_status = true;

								if (empty($_FILES['image1']['name'])) {
									$image1 = $old_filename;
								} else {
									$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
									$image1 = "brand_" . time() . "." . $ext;

									$config0['upload_path'] = './uploads/brand/';
									$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config0['max_size'] = 6024; // In KB
									$config0['file_name'] = $image1;
									$this->load->library('upload');
									$this->upload->initialize($config0);

									if (!$this->upload->do_upload('image1')) {
										$upload_status = false;
										$output['msg'] = $this->upload->display_errors();
									} else {
										// unlinkFile the old image if it exists
										if (!empty($old_filename) && file_exists('./uploads/brand/' . $old_filename)) {
											unlinkFile('./uploads/brand/' . $old_filename);
										}
									}
								}


								$updateData = [
									'title' => $this->input->post('title'),
									'description ' => $this->input->post('description'),
									'image1' => $image1,
									'updated_at' => $this->data->timestamp
								];

								$updateData = $this->security->xss_clean($updateData);
								$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
								if ($result) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Updated Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					}
					// }
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	// Manage Become Seller End Here 


	public function index()
	{
		redirect(base_url($this->data->controller . '/Dashboard'));
	}
	#Dashboard
	public function Dashboard()
	{
		$data['categories'] = $this->db->get('categories')->num_rows();
		$data['subcategories'] = $this->db->get('sub_category')->num_rows();
		$data['brand'] = $this->db->get('brand')->num_rows();
		$data['subbrand'] = $this->db->get('sub_brand')->num_rows();
		$data['coupons'] = $this->db->get_where('tbl_coupon', array('is_status' => 'true'))->num_rows();
		$data['notification'] = $this->db->get('notification')->num_rows();
		$data['deliverycharge'] = $this->db->get('delivery_charge')->num_rows();
		$data['products'] = $this->db->get('products')->num_rows();
		$data['vendors'] = $this->db->get('tbl_vendor')->num_rows();
		$data['contact'] = $this->db->get('contact')->num_rows();
		$data['slider'] = $this->db->get_where('slider', array('is_status' => 'true'))->num_rows();
		$data['activepage'] = 'dashboard';
		$this->load->view($this->data->controller . '/' . $this->data->method, $data);
	}
	#Manage Categories
	public function ManageCategories()
	{
		$this->data->table = 'categories';
		$this->data->folder = 'category';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Category';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditCategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$filename = "";
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if (!empty($_FILES['icon']['name'])) {

								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;

								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									array_push($upload_errors, array(
										'error_upload' => $this->upload->display_errors()
									));
									$output['msg'] = 'Data saved but error in file upload.';
								} else {
									// echo $filename;
									compress_image('./uploads/' . $this->data->folder . '/' . $filename, './uploads/' . $this->data->folder . '/' . $filename);
									$insertData = [
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'name' => $this->input->post('name'),
										'description ' => $this->input->post('description'),
										'icon' => $filename,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
									$insertData = $this->security->xss_clean($insertData);
									if ($this->db->insert($this->data->table, $insertData)) {
										$msg = '<b>Category Name:</b>' . $this->input->post('name');
										// sendEmail('anshikachaurasiya2002@gmail.com','Anshul Gupta','New Category Added',$msg);
										sendEmail('anshul.guptacs@gmail.com', 'Anshul Gupta', 'New Category Added', $msg);
										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							} else {
								$output['msg'] = 'Icon is required.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						// var_dump($this->input->post());die();
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;
									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
									}
									$updateData = [
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'name' => $this->input->post('name'),
										'description ' => $this->input->post('description'),
										'icon' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									// var_dump($this->db->last_query());die();
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';

										if (!empty($_FILES['icon']['name'])) {

											$upload_errors           = array();
											$config['upload_path']   = './uploads/' . $this->data->folder . '/';
											$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
											$config['max_size']      = 2048;
											$config['file_name']     = $filename;
											$this->load->library('upload', $config);
											if (!$this->upload->do_upload($this->data->file_column)) {
												array_push($upload_errors, array(
													'error_upload' => $this->upload->display_errors()
												));
												$output['msg'] = 'Data saved but error in file upload.';
											}
											compress_image('./uploads/' . $this->data->folder . '/' . $filename, './uploads/' . $this->data->folder . '/' . $filename);
											$output['data'] = $upload_errors;
											if (!empty($old_filename)) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
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
				} elseif ($action == 'SortingCategory') {
					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update('categories');
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data['activepage'] = 'ManageCategories';
			$query = $this->db->order_by("position", "ASC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Slider
	public function Slider()
	{
		$this->data->table = 'slider';
		$this->data->folder = 'slider';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'Slider';
		$this->data->key = 'Slider';
		$this->data->file_column = 'image';
		$this->data->file_column1 = 'image_mobile';
		$this->data->file_column2 = 'image_tablet';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditSlider";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} elseif ($action == 'SortingSlider') {

				$order = $this->input->post('order');
				$this->db->trans_start();
				foreach ($order as $position => $id) {
					$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
				}
				$this->db->trans_complete();

				if ($this->db->trans_status() === FALSE) {

					$output['res'] = 'error';
					$output['msg'] = 'Something went wrong in Data Saving.';
				} else {
					$output['res'] = 'success';
					$output['msg'] = 'Positions updated successfully.';
				}
				echo json_encode([$output]);
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post('video_url'))) {
							if (empty($_FILES['image']['name'])) {
								$this->form_validation->set_rules('image', 'Icon', 'required');
								//  $filename='logo.png';
							} else if (empty($_FILES['image_mobile']['name'])) {
								$this->form_validation->set_rules('image_mobile', 'Icon', 'required');
								//  $filename='logo.png';
							} else if (empty($_FILES['image_tablet']['name'])) {
								$this->form_validation->set_rules('image_tablet', 'Icon', 'required');
								//  $filename='logo.png';
							}
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$filename = '';
							$image_mobile = '';
							$image_tablet = '';
							if (empty($this->input->post('video_url'))) {
								$filename = FIleUpload('image', $_FILES['image']['name'], './uploads/' . $this->data->folder, 'image');
								$image_mobile = FIleUpload('image_mobile', $_FILES['image_mobile']['name'], './uploads/' . $this->data->folder, 'image_mobile');
								$image_tablet = FIleUpload('image_tablet', $_FILES['image_tablet']['name'], './uploads/' . $this->data->folder, 'image_tablet');
							}
							if (empty($this->input->post('video_url')) && empty($filename)) {
								$output['msg'] = 'Desktop Slider Image Uploaded Failed.';
							} else if (empty($this->input->post('video_url')) && empty($image_mobile)) {
								$output['msg'] = 'Mobile Slider Image Uploaded Failed.';
							} else if (empty($this->input->post('video_url')) && empty($image_tablet)) {
								$output['msg'] = 'Tablet Slider Image Uploaded Failed.';
							} else {


								$insertData = [
									'click_url' => $this->input->post('click_url'),
									'image_mobile' => $image_mobile,
									'image_tablet' => $image_tablet,
									'description' => $this->input->post('description'),
									'btn_status' => $this->input->post('btn_status') ? $this->input->post('btn_status') : 'false',
									'start_date' => $this->input->post('start_date'),
									'end_date' => $this->input->post('end_date'),
									'meta_tag' => $this->input->post('meta_tag'),
									'meta_description' => $this->input->post('meta_description'),
									'meta_keyword' => $this->input->post('meta_keyword'),
									'alt' => $this->input->post('alt'),
									'seo_title' => $this->input->post('seo_title'),
									'heading' => $this->input->post('heading'),
									'btn_txt' => $this->input->post('btn_txt'),
									'video_url' => $this->input->post('video_url'),
									'image' => $filename,
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];


								$insertData = $this->security->xss_clean($insertData);

								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
									//  compress_image('./uploads/' . $this->data->folder . '/' . $filename, './uploads/' . $this->data->folder . '/' . $filename);
									// compress_image('./uploads/' . $this->data->folder . '/' . $image_tablet, './uploads/' . $this->data->folder . '/' . $image_tablet);
									// compress_image('./uploads/' . $this->data->folder . '/' . $image_tablet, './uploads/' . $this->data->folder . '/' . $image_tablet);
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$upImg1 = true;
									$upImg2 = true;
									$upImg3 = true;
									$old_filename = $data['list'][0]->image;
									$filename = $old_filename;
									$image_mobile_old = $data['list'][0]->image_mobile;
									$image_mobile = $data['list'][0]->image_mobile;
									$image_tablet_old = $data['list'][0]->image_tablet;
									$image_tablet = $data['list'][0]->image_tablet;
									if (!empty($_FILES['image']['name'])) {
										$filename_new = FIleUpload('image', $_FILES['image']['name'], './uploads/' . $this->data->folder, 'image');
										if (!empty($filename_new)) {
											$filename = $filename_new;
										} else {
											$upImg1 = false;
										}
									}
									if (!empty($_FILES['image_mobile']['name'])) {
										$image_mobile_new = FIleUpload('image_mobile', $_FILES['image_mobile']['name'], './uploads/' . $this->data->folder, 'image_mobile');
										if (!empty($image_mobile_new)) {
											$image_mobile = $image_mobile_new;
										} else {
											$upImg2 = false;
										}
									}
									if (!empty($_FILES['image_tablet']['name'])) {
										$image_tablet_new = FIleUpload('image_tablet', $_FILES['image_tablet']['name'], './uploads/' . $this->data->folder, 'image_tablet');
										if (!empty($image_tablet_new)) {
											$image_tablet = $image_tablet_new;
										} else {
											$upImg3 = false;
										}
									}




									$updateData = [
										'click_url' => $this->input->post('click_url'),
										'image_mobile' => $image_mobile,
										'image_tablet' => $image_tablet,
										'description' => $this->input->post('description'),
										'btn_status' => $this->input->post('btn_status') ? $this->input->post('btn_status') : 'false',
										'start_date' => $this->input->post('start_date'),
										'end_date' => $this->input->post('end_date'),
										'meta_tag' => $this->input->post('meta_tag'),
										'meta_description' => $this->input->post('meta_description'),
										'meta_keyword' => $this->input->post('meta_keyword'),
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'heading' => $this->input->post('heading'),
										'btn_txt' => $this->input->post('btn_txt'),
										'video_url' => $this->input->post('video_url'),
										'image' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
										if (!empty($_FILES['image']['name'])) {
											if (!$upImg1) {
												$output['msg'] = 'Data saved but error in file upload.';
											} else {
												// compress_image('./uploads/' . $this->data->folder . '/' . $filename, './uploads/' . $this->data->folder . '/' . $filename);
												if (!empty($old_filename)) {
													unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
												}
											}
										}

										if (!empty($_FILES['image_tablet']['name'])) {
											if (!$upImg1) {
												$output['msg'] = 'Data saved but error in file upload.';
											} else {
												// compress_image('./uploads/' . $this->data->folder . '/' . $image_tablet, './uploads/' . $this->data->folder . '/' . $image_tablet);
												if (!empty($image_tablet_old)) {
													unlinkFile('./uploads/' . $this->data->folder . '/' . $image_tablet_old);
												}
											}
										}

										if (!empty($_FILES['image_mobile']['name'])) {
											if (!$upImg1) {
												$output['msg'] = 'Data saved but error in file upload.';
											} else {
												// compress_image('./uploads/' . $this->data->folder . '/' . $image_mobile, './uploads/' . $this->data->folder . '/' . $image_mobile);
												if (!empty($image_mobile_old)) {
													unlinkFile('./uploads/' . $this->data->folder . '/' . $image_mobile_old);
												}
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
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("position", "ASC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	// Manage Hero Banner 
	public function HeroBanner()
	{
		$this->data->table = 'tbl_herobanner';
		$this->data->folder = 'slider';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'HeroBanner';
		$this->data->file_column = 'image';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditHeroBanner";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if (empty($_FILES['image']['name'])) {
							$this->form_validation->set_rules('image', 'Icon', 'required');
							//  $filename='logo.png';
						} else {
							$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'image' => $filename,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'updated_at' => $this->data->timestamp
							];



							$insertData = $this->security->xss_clean($insertData);

							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
								if (!empty($_FILES['image']['name'])) {
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 30720;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {

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
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->image;
									$filename = $old_filename;
									if (!empty($_FILES['image']['name'])) {
										$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
									}
									$updateData = [
										'image' => $filename,
										'updated_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
										if (!empty($_FILES['image']['name'])) {
											$upload_errors           = array();
											$config['upload_path']   = './uploads/' . $this->data->folder . '/';
											$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
											$config['max_size']      = 30720;
											$config['file_name']     = $filename;
											$this->load->library('upload', $config);
											if (!$this->upload->do_upload($this->data->file_column)) {
												array_push($upload_errors, array(
													'error_upload' => $this->upload->display_errors()
												));
												$output['msg'] = 'Data saved but error in file upload.';
											}
											// unlink('./uploads/' . $this->data->folder . '/' . $old_filename);
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}




	// Royal Club Setting Start Here 


	public function RoyalClubSetting()
	{
		$this->data->file_column = 'image1';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where("id", $id)->get("royalclubsetting");
				if ($query->num_rows()) {
					$data['list'] = $query->result();
					if ($action == 'Edit') {
						// $data['action'] = 'EditPaymentMethod';
						$data['action'] = 'EditRoyalClubSetting';
						$this->load->view("Admin/UpdateData", $data);
					} else {
						redirect(base_url('Admin/RoyalClubSetting'));
					}
				} else {
					redirect(base_url('Admin/RoyalClubSetting'));
				}
			} else {
				if ($action == 'Add') {



					// if (!empty($this->input->post())) {

					if (empty($_FILES['image1']['name'])) {
						$this->form_validation->set_rules('image1', 'Image', 'required');
					}

					// if ($this->form_validation->run() == FALSE) {
					// $msg = explode('</p>', validation_errors());
					// $msg = str_ireplace('<p>', '', $msg[0]);
					// $this->session->set_flashdata("res", "error");
					// $this->session->set_flashdata("msg", "$msg");
					// redirect(base_url('Admin/RoyalClubSetting'));
					// } else {

					$upload_status = true;
					// image1
					$filename1 = "";
					if (!empty($_FILES['image1']['name'])) {
						$ext = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

						$filename1 = time() . "RoyalClubSetting." . $ext;
						$config0['upload_path'] = './uploads/brand/';
						$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
						$config0['max_size'] = 3024;
						$config0['file_name'] = $filename1;
						$this->load->library('upload');
						$this->upload->initialize($config0);
						if (!$this->upload->do_upload('image1')) {
							$upload_status = false;
						}
					}




					$insertdata = [
						'image1' => $filename1,
						'is_status' => 'true',
						'created_at' => $this->data->timestamp,
						'updated_at' => $this->data->timestamp,
					];



					if ($upload_status == true) {

						$ins = $this->db->insert("royalclubsetting", $insertdata);
						if ($ins) {
							$this->session->set_flashdata(['res' => 'success', 'msg' => 'Data Added Successfully!']);

							redirect(base_url('Admin/RoyalClubSetting'));
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Failed']);
							redirect(base_url('Admin/RoyalClubSetting'));
						}
					} else {
						$this->session->set_flashdata("res", "error");
						$this->session->set_flashdata("msg", "File upload failed.");
						redirect(base_url('Admin/RoyalClubSetting'));
					}
					// }
					// }
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						$query = $this->db->where('id', $this->input->post('id'))->get('royalclubsetting');
						if ($query->num_rows()) {

							$result = $query->row();

							$upload_status = true;

							if (empty($_FILES['image1']['name'])) {
								$image1 = $result->image1;
							} else {
								$ext = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
								$image1 = "RoyalClubSetting_" . time() . "." . $ext;

								$config0['upload_path'] = './uploads/brand/';
								$config0['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config0['max_size'] = 3024;
								$config0['file_name'] = $image1;
								$this->load->library('upload');
								$this->upload->initialize($config0);

								if (!$this->upload->do_upload('image1')) {
									$upload_status = false;
								} else {
									if (!empty($result->image1) && file_exists('./uploads/brand/' . $result->image1)) {
										// unlink('./uploads/brand/' . $result->image1);
										unlinkFile('./uploads/' . $this->data->folder . '/' . $result->image1);
									}
								}
							}


							$updatedata = [
								'image1' => $image1,
								'updated_at' => $this->data->timestamp,
							];


							if ($upload_status) {
								$up = $this->db->where('id', $result->id)->update('royalclubsetting', $updatedata);
								if ($up) {
									$this->session->set_flashdata(['res' => 'success', 'msg' => 'Update Successfully!']);
									redirect(base_url('Admin/RoyalClubSetting'));
								} else {
									$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
									redirect(base_url('Admin/RoyalClubSetting'));
								}
							} else {
								$this->session->set_flashdata(['res' => 'error', 'msg' => 'Image Upload Error!']);
								redirect(base_url('Admin/RoyalClubSetting'));
							}
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'Something Wrong!']);
							redirect(base_url('Admin/RoyalClubSetting'));
						}
					}
				}
			}
		} else {
			$data['list'] = $this->db->order_by('id', 'DESC')->get("royalclubsetting")->result();
			$this->load->view("Admin/RoyalClubSetting", $data);
		}
	}


	// Royal Club Setting End Here 





	#Manage Sub Categories
	public function SubCategories()
	{
		$this->data->table = 'sub_category';
		$this->data->key = 'SubCategory';
		$data['activepage'] = 'SubCategories';
		$data['categorylist'] = $this->db->where(['is_status' => 'true'])->order_by("position", "ASC")->get('categories')->result();
		$data['sizelist'] = $this->db->where(['is_status' => 'true'])->order_by("id", "DESC")->get('tbl_size')->result();

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				// $query = $this->db->where('id', $id)->get($this->data->table);
				$query = $this->db->select('sub_category.*,tbl_category_tags.tag_name')->join('tbl_category_tags', 'tbl_category_tags.id=sub_category.cat_tag_id', 'left')->where('sub_category.id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditSubCategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'category_id' => $this->input->post('category'),
								'name' => $this->input->post('name'),
								'cat_tag_id' => $this->input->post('cat_tag_id'),
								'size_id' => $this->input->post('size_id'),
								// 'commision' => $this->input->post('commision'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {

								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							// $query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							$query = $this->db->select('sub_category.*,tbl_category_tags.tag_name')->join('tbl_category_tags', 'tbl_category_tags.id=sub_category.cat_tag_id', 'left')->where('sub_category.id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {

								$data['list'] = $query->result();
								// $this->form_validation->set_rules('category', 'Category', 'required|trim');
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'category_id' => $this->input->post('category'),
										'name' => $this->input->post('name'),
										'cat_tag_id' => $this->input->post('cat_tag_id'),
										'size_id' => $this->input->post('size_id'),
										// 'commision' => $this->input->post('commision'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'SortingSubCategory') {

					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update('sub_category');
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			// $query = $this->db->order_by("position", "ASC")->get($this->data->table);
			// $data["list"] = $query->result();
			$data["list"] = $this->Auth_model->getSubcategory();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage  Categorie Tags
	public function CategoryTags()
	{
		$this->data->table = 'tbl_category_tags';
		$this->data->key = 'CategoryTags';
		$data['activepage'] = 'CategoryTags';
		$data['categorylist'] = $this->db->where(['is_status' => 'true'])->order_by("position", "ASC")->get('categories')->result();

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);

			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditCategoryTags";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {

					if (!empty($this->input->post())) {
						if ($this->form_validation->run($this->data->key) == FALSE) {

							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'cat_id' => $this->input->post('cat_id'),
								'tag_name' => $this->input->post('tag_name'),
								'is_status' => 'true',
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {

								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {

								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								// $this->form_validation->set_rules('category', 'Category', 'required|trim');
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'cat_id' => $this->input->post('cat_id'),
										'tag_name' => $this->input->post('tag_name'),
										'is_status' => 'true',
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'SortingCategoryTags') {

					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			// $query = $this->db->order_by("position", "ASC")->get($this->data->table);
			// $data["list"] = $query->result();
			$data["list"] = $this->Auth_model->getCategoryTags();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Co-Subcategories
	public function CoSubcategory()
	{
		$this->data->table = 'co_subcategory';
		$this->data->key = 'Co-Subcategory';
		$data['categorylist'] = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get('categories')->result();

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditCosubcategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$insertData = [
							'category_id' => $this->input->post('category'),
							'subcategory_id' => $this->input->post('subcategory'),
							'name' => $this->input->post('name'),
							// 'commision' => $this->input->post('commision'),
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'modified_at' => $this->data->timestamp
						];

						$insertData = $this->security->xss_clean($insertData);
						if ($this->db->insert($this->data->table, $insertData)) {

							$output['res'] = 'success';
							$output['msg'] = 'Data Added Successfully.';
						} else {
							$output['msg'] = 'Something went wrong in Data Saving.';
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								// $this->form_validation->set_rules('category', 'Category', 'required|trim');

								$updateData = [
									'category_id' => $this->input->post('category'),
									'subcategory_id' => $this->input->post('subcategory'),
									'name' => $this->input->post('name'),
									// 'commision' => $this->input->post('commision'),
									'is_status' => 'true',
									'modified_at' => $this->data->timestamp
								];
								$updateData = $this->security->xss_clean($updateData);
								$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
								if ($result) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Updated Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'SortingCoSubCategory') {

					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			// $query = $this->db->order_by("id", "DESC")->get($this->data->table);
			// $data["list"] = $query->result();
			$data["list"] = $this->Auth_model->getCoSubcategory();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Brand
	public function ManageBrand()
	{
		$this->data->table = 'brand';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Brand';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageBrand';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'Edit') {

					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditBrand";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Data Not Found";
					}
				} elseif ($action == 'VendorDetails') {
					$query = $this->db->where('id', $id)->get('tbl_vendor');
					if ($query->num_rows()) {
						$data["list"] = $query->row();
						$data["action"] = "VendorDetails";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Data Not Found";
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else if ($action == 'SortingBrand') {
				$order = $this->input->post('order');
				$this->db->trans_start();
				foreach ($order as $position => $id) {
					$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
				}
				$this->db->trans_complete();

				if ($this->db->trans_status() === FALSE) {

					$output['res'] = 'error';
					$output['msg'] = 'Something went wrong in Data Saving.';
				} else {
					$output['res'] = 'success';
					$output['msg'] = 'Positions updated successfully.';
				}
				echo json_encode([$output]);
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Icon', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}


						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'name' => $this->input->post('name'),
								'vendor_id' => $this->input->post('vendorupload'),
								'icon' => $filename,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
								if (!empty($_FILES['icon']['name'])) {
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 2048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
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
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('name', 'Brand Name', 'required|trim');
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;
									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
									}
									$updateData = [
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'name' => $this->input->post('name'),
										'vendor_id' => $this->input->post('vendorupload'),
										'icon' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
										if (!empty($_FILES['icon']['name'])) {
											$upload_errors           = array();
											$config['upload_path']   = './uploads/' . $this->data->folder . '/';
											$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
											$config['max_size']      = 2048;
											$config['file_name']     = $filename;
											$this->load->library('upload', $config);
											if (!$this->upload->do_upload($this->data->file_column)) {
												array_push($upload_errors, array(
													'error_upload' => $this->upload->display_errors()
												));
												$output['msg'] = 'Data saved but error in file upload.';
											}
											// unlink('./uploads/' . $this->data->folder . '/' . $old_filename);
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Sub Brand
	public function SubBrand()
	{
		$this->data->table = 'sub_brand';
		$this->data->key = 'SubBrand';
		$this->data->folder = 'brand';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->file_column = 'icon';
		$data['brandlist'] = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get('brand')->result();
		$data['activepage'] = 'SubBrand';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditSubBrand";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else if ($action == 'SortingSubBrand') {
				$order = $this->input->post('order');
				$this->db->trans_start();
				foreach ($order as $position => $id) {
					$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
				}
				$this->db->trans_complete();

				if ($this->db->trans_status() === FALSE) {

					$output['res'] = 'error';
					$output['msg'] = 'Something went wrong in Data Saving.';
				} else {
					$output['res'] = 'success';
					$output['msg'] = 'Positions updated successfully.';
				}
				echo json_encode([$output]);
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Icon', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'brand_id' => $this->input->post('brand'),
								'name' => $this->input->post('name'),
								'icon' => $filename,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';

								if (!empty($_FILES['icon']['name'])) {
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 2048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
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
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {

							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {

								$data['list'] = $query->result();

								$old_filename = $data['list'][0]->icon;
								$filename = $old_filename;
								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
								}
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'brand_id' => $this->input->post('brand'),
										'name' => $this->input->post('name'),
										'icon' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';

										if (!empty($_FILES['icon']['name'])) {
											$upload_errors           = array();
											$config['upload_path']   = './uploads/' . $this->data->folder . '/';
											$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
											$config['max_size']      = 30720;
											$config['file_name']     = $filename;
											$this->load->library('upload', $config);
											if (!$this->upload->do_upload($this->data->file_column)) {
												array_push($upload_errors, array(
													'error_upload' => $this->upload->display_errors()
												));
												$output['msg'] = 'Data saved but error in file upload.';
											}
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Sub Brand
	public function SizeChart()
	{
		$this->data->table = 'size_chart';
		$this->data->key = 'SizeChart';
		$this->data->folder = 'sizechart';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->file_column = 'image';
		$data['subcategorylist'] = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get('sub_category')->result();

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditSizeChart";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Icon', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$upload_status = 'true';
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload('icon')) {
									$upload_status = 'false';
								}
							}


							if ($upload_status == "true") {
								$insertData = [
									'subcat_id' => $this->input->post('subcat'),
									'size' => $this->input->post('size'),
									'image' => $filename,
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];

								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Size Chart Unable To Upload';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {

							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {

								$data['list'] = $query->result();

								$old_filename = $data['list'][0]->image;
								$filename = $old_filename;
								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
								}
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'subcat_id' => $this->input->post('subcat'),
										'size' => $this->input->post('size'),
										'image' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';

										if (!empty($_FILES['icon']['name'])) {
											$upload_errors           = array();
											$config['upload_path']   = './uploads/' . $this->data->folder . '/';
											$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
											$config['max_size']      = 2048;
											$config['file_name']     = $filename;
											$this->load->library('upload', $config);
											if (!$this->upload->do_upload($this->data->file_column)) {
												array_push($upload_errors, array(
													'error_upload' => $this->upload->display_errors()
												));
												$output['msg'] = 'Data saved but error in file upload.';
											}
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Coupon
	public function ManageCoupon()
	{
		$this->data->table = 'tbl_coupon';
		$this->data->key = 'Coupon';
		$this->data->file_column = 'icon';
		$this->data->folder = 'coupon';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageCoupon';
		$data['categorylist'] = $this->db->get_where('categories', array('is_status' => 'true'))->result();
		$data['brandlist'] = $this->db->get_where('brand', array('is_status' => 'true'))->result();

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditCoupon";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo 'Data Not Found';
					}
				} elseif ($action == 'subcategory') {
					$query = $this->db->get_where('sub_category', array('category_id' => $id));

					$data["list"] = $query->result();
					$data["action"] = "subcategory";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'AssignCouponProduct') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$list = $this->db->order_by('id', 'DESC')->where('coupon_id', $id)->get('coupon_product')->result();
						$data["coupondata"] = $query->row();
						$data["alldata"] = $list;
						$this->load->view($this->data->controller . '/AssignCouponProduct', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'FilterUser') {
					$type = $this->uri->segment(4);
					$usertype = $this->input->post('usertype');
					$userids = [];
					$matching_userids = [];
					$royalids = [];
					$indvidualids = [];
					if ($usertype == 'all') {
						$user_list = $this->db->get_where('tbl_user', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'id');
					} elseif ($usertype == 'royal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'userid');
					} elseif ($usertype == 'normal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$royalids = array_column($royal_user_list, 'userid');
						$user_list = $this->db->where(['is_status' => 'true'])->get('tbl_user')->result();
						$indvidualids = array_column($user_list, 'id');
						$userids = array_diff($indvidualids, $royalids);
					}

					if ($type == 'all') {
						$query = $this->db->where(['is_status' => 'true'])->where_in('id', $userids)->get('tbl_user')->result();
					} elseif ($type == 'max_purchase') {
						$cart_details = $this->db->order_by('userid', 'asc')->get_where('tbl_cart', ['order_status' => 'delivered'])->result();
						$user_ids = array_unique(array_column($cart_details, 'userid'));
						$matching_userids = array_intersect($user_ids, $userids);
						$query = $this->db->where('is_status', 'true')->where_in('id', $matching_userids)->get('tbl_user')->result();
					}

					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "FilterUser";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('coupon_type', 'Coupon Type', 'required|trim');
						// $this->form_validation->set_rules('apply_type','Coupon Applied Type','required|trim');
						$this->form_validation->set_rules('complementry_type', 'Complementry Type', 'required|trim');
						$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
						$this->form_validation->set_rules('description', 'Coupon Description', 'required|trim');
						$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
						$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
						$this->form_validation->set_rules('producttype', 'Product Type', 'required|trim');
						$this->form_validation->set_rules('title', 'Coupon Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Coupon description', 'required|trim');
						$this->form_validation->set_rules('noofcoupon', 'Number Of Coupon', 'required|trim|numeric');
						$this->form_validation->set_rules('minorder', 'Minimum Order Amount', 'required|trim|numeric');

						// if($this->input->post('type') == "percent")
						// {
						// $this->form_validation->set_rules('percentdis','Discount Percentage','required|trim|numeric');
						// }
						// elseif($this->input->post('type') == "flat")
						// {
						// $this->form_validation->set_rules('discountrs','Discount Rupees','required|trim|numeric');
						// }
						// elseif($this->input->post('type') == "flat")
						// {
						// $this->form_validation->set_rules('rewarddis','Reward Points','required|trim|numeric');
						// }


						// if($this->input->post('complementry_type')=='coupon'){
						// $this->form_validation->set_rules('code','Coupon Code','required|trim');
						// } 

						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}


						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$max_discount = "";
							$discount = "";
							if ($this->input->post('type') == "percent") {
								$discount = $this->input->post('percentdis');
								$max_discount = $this->input->post('maxdis');
							} elseif ($this->input->post('type') == "flat") {
								$discount = $this->input->post('discountrs');
								$max_discount = $this->input->post('maxdis');
							} elseif ($this->input->post('type') == "reward") {
								$discount = $this->input->post('rewarddis');
								$max_discount = "";
							}
							$description1 = "";
							$termsconditions1 = "";
							if (($this->input->post('complementry_type') == "offer") && ($this->input->post('apply_type') == 'after')) {
								$description1 = $this->input->post('description1');
								$termsconditions1 = base64_encode($this->input->post('termsconditions1'));
							}

							$uploadstatus = "true";
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									array_push($upload_errors, array(
										'error_upload' => $this->upload->display_errors()
									));
									$uploadstatus = "false";
								}
							} else {
								$filename = '';
							}

							if ($uploadstatus == "true") {
								$insertData = [
									'coupon' => $this->input->post('code'),
									'discount' => $discount,
									'user_type' => $this->input->post('usertype'),
									'coupon_type' => $this->input->post('coupon_type'),
									'apply_type' => $this->input->post('apply_type'),
									'complementry_type' => $this->input->post('complementry_type'),
									'title' => $this->input->post('title'),
									'description ' => $this->input->post('description'),
									'description1 ' => $description1,
									'termsconditions ' => base64_encode($this->input->post('termsconditions')),
									'termsconditions1 ' => $termsconditions1,
									'start_date ' => $this->input->post('startdate'),
									'end_date ' => $this->input->post('enddate'),
									'type' => $this->input->post('type'),
									'no_of_coupon' => $this->input->post('noofcoupon'),
									'min_order' => $this->input->post('minorder'),
									'max_discount' => $max_discount,
									'product_type' => $this->input->post('producttype'),
									'banner' => $filename,
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								// $insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Banner Unable To Upload';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == "CouponFilterProduct") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('category', 'Category', 'required|trim');
						$this->form_validation->set_rules('brand', 'Brand', 'required|trim');
						if ($this->input->post('category') != 'all') {
							$this->form_validation->set_rules('subcategory', 'Sub-Category', 'required|trim');
						}

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							echo  str_ireplace('<p>', '', $msg[0]);
						} else {
							$category = $this->input->post('category');
							$subcategory = $this->input->post('subcategory');
							$brand = $this->input->post('brand');
							if ($category == 'all') {
								if ($brand == 'all') {
									$chk = $this->db->get_where('products');
								} else {
									$chk = $this->db->get_where('products', array('brand_id' => $brand));
								}
							} else {
								if ($brand == 'all') {
									$chk = $this->db->get_where('products', array('category' => $category, 'sub_category' => $subcategory));
								} else {
									$chk = $this->db->get_where('products', array('category' => $category, 'sub_category' => $subcategory, 'brand_id' => $brand));
								}
							}

							if ($chk->num_rows() > 0) {
								$product = $chk->result();

								$data["productdata"] = $product;
								$data["action"] = "CouponFilterProducts";

								$this->load->view($this->data->controller . '/UpdateData', $data);
							} else {
								echo "No Product Found";
							}
						}
					} else {
						echo "Data Cannot Be Empty";
					}
				} elseif ($action == "CouponFilterCombo") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('category', 'Category', 'required|trim|numeric');
						$this->form_validation->set_rules('subcategory', 'Sub-Category', 'required|trim|numeric');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							echo  str_ireplace('<p>', '', $msg[0]);
						} else {
							$category = $this->input->post('category');
							$subcategory = $this->input->post('subcategory');

							$chk = $this->db->get_where('tbl_combo', array('category_id' => $category, 'subcat_id' => $subcategory, 'approve_status' => 'approved'));

							if ($chk->num_rows() > 0) {
								$product = $chk->result();

								$data["productdata"] = $product;
								$data["action"] = "CouponFilterCombo";

								$this->load->view($this->data->controller . '/UpdateData', $data);
							} else {
								echo "No Product Found";
							}
						}
					} else {
						echo "Data Cannot Be Empty";
					}
				} elseif ($action == "SubmitCouponData") {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("couponid"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("couponid"))->get('tbl_coupon');
							if ($query->num_rows()) {
								$data['list'] = $query->result();


								$this->form_validation->set_rules('couponid', 'Coupon Id', 'required|trim|numeric');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$product = $this->input->post('productid[]');
									$userid = $this->input->post('userid[]');
									if (!empty($product)) {
										$dataadd = [];
										foreach ($product as $each) {
											$check = $this->db->get_where('coupon_product', array('coupon_id' => $this->input->post('couponid'), 'product_id' => $each));

											if ($check->num_rows() > 0) {
												continue;
											} else {

												if ($this->input->post('producttype') == "individual") {
													$productp = $this->db->get_where('products', array('id' => $each))->row();
													$price = $productp->mrp;
												} else {
													$productp = $this->db->get_where('tbl_combo', array('id' => $each))->row();
													$price = $productp->price;
												}

												$adddata = [
													'product_type' => $this->input->post('producttype'),
													'price' => $price,
													'coupon_id' => $this->input->post('couponid'),
													'product_id' => $each,
													'userid' => implode(',', $userid),
													'is_status' => 'true',
													'created_at' => $this->data->timestamp,
													'modified_at' => $this->data->timestamp
												];
												$dataadd[] = $adddata;
											}
										}

										if (count($dataadd) > 0) {
											if ($this->db->insert_batch('coupon_product', $dataadd)) {
												$output['res'] = "success";
												$output['msg'] = count($dataadd) . " Data Added Successfully";
											} else {
												$output['msg'] = "Something Went Wrong";
											}
										} else {
											$output['msg'] = "No Product Eligible For Coupon";
										}
									} else {
										$output['msg'] = "Please Select Product";
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								// $this->form_validation->set_rules('code','Coupon Code','required|trim');
								// $this->form_validation->set_rules('type','Discount Type','required|trim');
								$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
								// $this->form_validation->set_rules('apply_type','Coupon Applied Type','required|trim');
								$this->form_validation->set_rules('description', 'Coupon Description', 'required|trim');
								$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
								$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
								$this->form_validation->set_rules('noofcoupon', 'Number Of Coupon', 'required|trim|numeric');


								// if($this->input->post('type') == "percent")
								// {
								// $this->form_validation->set_rules('percentdis','Discount Percentage','required|trim|numeric|greater_than[0]|less_than[100]');
								// }
								// elseif($this->input->post('type') == "flat")
								// {
								// $this->form_validation->set_rules('discountrs','Discount Rupees','required|trim|numeric');
								// } 
								$old_filename = $data['list'][0]->banner;
								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
								} else {
									$filename = $old_filename;
								}

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$max_discount = "";
									$discount = "";
									if ($this->input->post('type') == "percent") {
										$discount = $this->input->post('percentdis');
										$max_discount = $this->input->post('maxdis');
									} elseif ($this->input->post('type') == "flat") {
										$discount = $this->input->post('discountrs');
										$max_discount = $this->input->post('maxdis');
									} elseif ($this->input->post('type') == "reward") {
										$discount = $this->input->post('rewarddis');
										$max_discount = "";
									}
									$description1 = "";
									$termsconditions1 = "";
									if (($this->input->post('apply_type') == 'after')) {
										$description1 = $this->input->post('description1');
										$termsconditions1 = base64_encode($this->input->post('termsconditions1'));
									}

									$upload_status = "true";
									if (!empty($_FILES['icon']['name'])) {
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											array_push($upload_errors, array(
												'error_upload' => $this->upload->display_errors()
											));
											$upload_status = "false";
										} else {
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									}

									if ($data['list'][0]->coupon_type == 'Complementary discount coupons' && $data['list'][0]->coupon_type == 'Free gift with purchase' && $data['list'][0]->coupon_type == 'Free shipping coupon') {
										$discount = "";
										$typr = "";
									} else {
										$type = $this->input->post('type');
									}

									if ($data['list'][0]->complementry_type == 'offer') {
										$apply_type = $this->input->post('apply_type');
									} else {
										$apply_type = '';
									}

									if ($upload_status == "true") {
										$updateData = [
											'coupon' => $this->input->post('code'),
											'product_type' => $this->input->post('producttype'),
											'apply_type' => $apply_type,
											'discount' => $discount,
											'title' => $this->input->post('title'),
											'description' => $this->input->post('description'),
											'description1' => $description1,
											'termsconditions' => base64_encode($this->input->post('termsconditions')),
											'termsconditions1' => $termsconditions1,
											'start_date ' => $this->input->post('startdate'),
											'end_date ' => $this->input->post('enddate'),
											'type' => $type,
											'user_type' => $this->input->post('usertype'),
											'no_of_coupon' => $this->input->post('noofcoupon'),
											'max_discount' => $max_discount,
											'min_order' => $this->input->post('minorder'),
											'banner' => $filename,
											'modified_at' => $this->data->timestamp
										];

										// $updateData = $this-	>security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Banner Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Cashback
	public function ManageCashback()
	{
		$this->data->table = 'manage_cashback';
		$this->data->key = 'Cash Back';
		$this->data->folder = 'coupon';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageCashback';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditCashBack";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'AssignCashbackProduct') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$list = $this->db->order_by('id', 'DESC')->where('cashback_id', $id)->get('cashback_product')->result();
						$data["cashbackdata"] = $query->row();
						$data["alldata"] = $list;
						$this->load->view($this->data->controller . '/AssignCashbackProduct', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'FilterUser') {
					$type = $this->uri->segment(4);
					$usertype = $this->input->post('usertype');
					$userids = [];
					$matching_userids = [];
					$royalids = [];
					$indvidualids = [];
					if ($usertype == 'all') {
						$user_list = $this->db->get_where('tbl_user', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'id');
					} elseif ($usertype == 'royal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'userid');
					} elseif ($usertype == 'normal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$royalids = array_column($royal_user_list, 'userid');
						$user_list = $this->db->where(['is_status' => 'true'])->get('tbl_user')->result();
						$indvidualids = array_column($user_list, 'id');
						$userids = array_diff($indvidualids, $royalids);
					}

					if ($type == 'all') {
						$query = $this->db->where(['is_status' => 'true'])->where_in('id', $userids)->get('tbl_user')->result();
					} elseif ($type == 'max_purchase') {
						$cart_details = $this->db->order_by('userid', 'asc')->get_where('tbl_cart', ['order_status' => 'delivered'])->result();
						$user_ids = array_unique(array_column($cart_details, 'userid'));
						$matching_userids = array_intersect($user_ids, $userids);
						$query = $this->db->where('is_status', 'true')->where_in('id', $matching_userids)->get('tbl_user')->result();
					}

					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "FilterUser";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('minorder', 'Minimum Order', 'required|trim');
						$this->form_validation->set_rules('producttype', 'Product Type', 'required|trim');
						$this->form_validation->set_rules('type', 'Cashback Type', 'required|trim');
						$this->form_validation->set_rules('maxdis', 'Maximum Cashback', 'required|trim|numeric');
						$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
						$this->form_validation->set_rules('title', 'Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Description', 'required|trim');
						$this->form_validation->set_rules('termsconditions', 'Terms&Conditions', 'required|trim');
						$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
						$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
						if ($this->input->post('type') == "percent") {
							$this->form_validation->set_rules('percentdis', 'Cashback Percentage', 'required|trim|numeric|greater_than[0]|less_than[100]');
						} elseif ($this->input->post('type') == "flat") {
							$this->form_validation->set_rules('discountrs', 'Cashback Rupees', 'required|trim|numeric');
						}

						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$this->form_validation->set_rules('icon', 'Banner', 'required|trim');
						}


						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if ($this->input->post('type') == "percent") {
								$discount = $this->input->post('percentdis');
							} elseif ($this->input->post('type') == "flat") {
								$discount = $this->input->post('discountrs');
							}

							$uploadstatus = "true";
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									array_push($upload_errors, array(
										'error_upload' => $this->upload->display_errors()
									));
									$uploadstatus = "false";
								}
							}

							$insertData = [
								'min_order' => $this->input->post('minorder'),
								'discount' => $discount,
								'type' => $this->input->post('type'),
								'user_type' => $this->input->post('usertype'),
								'product_type' => $this->input->post('producttype'),
								'max_discount' => $this->input->post('maxdis'),
								'cashback_count' => $this->input->post('cashback_count'),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'termsconditions' => base64_encode($this->input->post('termsconditions')),
								'icon' => $filename,
								'start_date' => $this->input->post('startdate'),
								'end_date' => $this->input->post('enddate'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							if ($uploadstatus == 'true') {
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Something went wrong to upload banner.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('minorder', 'Minimum Order', 'required|trim|trim');
								$this->form_validation->set_rules('type', 'Cashback Type', 'required|trim');
								$this->form_validation->set_rules('producttype', 'Product Type', 'required|trim');
								$this->form_validation->set_rules('maxdis', 'Maximum Cashback', 'required|trim|numeric');
								$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
								$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
								$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
								$this->form_validation->set_rules('title', 'Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Description', 'required|trim');
								$this->form_validation->set_rules('termsconditions', 'Terms&Conditions', 'required|trim');


								if ($this->input->post('type') == "percent") {
									$this->form_validation->set_rules('percentdis', 'Cashback Percentage', 'required|trim|numeric|greater_than[0]|less_than[100]');
								} elseif ($this->input->post('type') == "flat") {
									$this->form_validation->set_rules('discountrs', 'Cashback Rupees', 'required|trim|numeric');
								}

								$old_filename = $data['list'][0]->icon;
								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
								} else {
									$filename = $old_filename;
								}

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									if ($this->input->post('type') == "percent") {
										$discount = $this->input->post('percentdis');
									} elseif ($this->input->post('type') == "flat") {
										$discount = $this->input->post('discountrs');
									}


									$uploadstatus = "true";
									if (!empty($_FILES['icon']['name'])) {
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											array_push($upload_errors, array(
												'error_upload' => $this->upload->display_errors()
											));
											$uploadstatus = "false";
										} else {
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									}
									$updateData = [
										'min_order' => $this->input->post('minorder'),
										'discount' => $discount,
										'type' => $this->input->post('type'),
										'user_type' => $this->input->post('usertype'),
										'product_type' => $this->input->post('producttype'),
										'max_discount' => $this->input->post('maxdis'),
										'start_date' => $this->input->post('startdate'),
										'end_date' => $this->input->post('enddate'),
										'cashback_count' => $this->input->post('cashback_count'),
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'termsconditions' => base64_encode($this->input->post('termsconditions')),
										'icon' => $filename,
										'modified_at' => $this->data->timestamp
									];

									if ($uploadstatus == 'true') {
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Something went wrong to update  banner.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == "SubmitCashbackData") {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("cashbackid"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("cashbackid"))->get('tbl_coupon');
							if ($query->num_rows()) {
								$data['list'] = $query->result();


								$this->form_validation->set_rules('cashbackid', 'Cashback Id', 'required|trim|numeric');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$product = $this->input->post('productid[]');
									$userid = $this->input->post('userid[]');
									if (!empty($product)) {
										$dataadd = [];
										foreach ($product as $each) {
											$check = $this->db->get_where('cashback_product', array('cashback_id' => $this->input->post('cashbackid'), 'product_id' => $each));

											if ($check->num_rows() > 0) {
												continue;
											} else {

												if ($this->input->post('producttype') == "individual") {
													$productp = $this->db->get_where('products', array('id' => $each))->row();
													$price = $productp->mrp;
												} else {
													$productp = $this->db->get_where('tbl_combo', array('id' => $each))->row();
													$price = $productp->price;
												}

												$adddata = [
													'product_type' => $this->input->post('producttype'),
													'cashback_id' => $this->input->post('cashbackid'),
													'product_id' => $each,
													'userid' => implode(',', $userid),
													'is_status' => 'true',
													'created_at' => $this->data->timestamp,
													'modified_at' => $this->data->timestamp
												];
												$dataadd[] = $adddata;
											}
										}

										if (count($dataadd) > 0) {
											if ($this->db->insert_batch('cashback_product', $dataadd)) {
												$output['res'] = "success";
												$output['msg'] = count($dataadd) . " Data Added Successfully";
											} else {
												$output['msg'] = "Something Went Wrong";
											}
										} else {
											$output['msg'] = "No Product Eligible For Cashback";
										}
									} else {
										$output['msg'] = "Please Select Product";
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Reward Points 
	public function ManageRewardPoints()
	{
		$this->data->table = 'reward_point';
		$this->data->key = 'Reward Point';
		$this->data->file_column = 'icon';
		$this->data->folder = 'coupon';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageRewardPoints';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'Edit') {

					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {

						$data["list"] = $query->row();
						$data["action"] = "EditRewardPoint";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'AssignRewardProduct') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$list = $this->db->order_by('id', 'DESC')->where('reward_id', $id)->get('reward_product')->result();
						$data["rewarddata"] = $query->row();
						$data["alldata"] = $list;
						$this->load->view($this->data->controller . '/AssignRewardProduct', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'FilterUser') {
					$type = $this->uri->segment(4);
					$usertype = $this->input->post('usertype');
					$userids = [];
					$matching_userids = [];
					$royalids = [];
					$indvidualids = [];
					if ($usertype == 'all') {
						$user_list = $this->db->get_where('tbl_user', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'id');
					} elseif ($usertype == 'royal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$userids = array_column($user_list, 'userid');
					} elseif ($usertype == 'normal') {
						$royal_user_list = $this->db->get_where('royal_subscriber', ['is_status' => 'true'])->result();
						$royalids = array_column($royal_user_list, 'userid');
						$user_list = $this->db->where(['is_status' => 'true'])->get('tbl_user')->result();
						$indvidualids = array_column($user_list, 'id');
						$userids = array_diff($indvidualids, $royalids);
					}

					if ($type == 'all') {
						$query = $this->db->where(['is_status' => 'true'])->where_in('id', $userids)->get('tbl_user')->result();
					} elseif ($type == 'max_purchase') {
						$cart_details = $this->db->order_by('userid', 'asc')->get_where('tbl_cart', ['order_status' => 'delivered'])->result();
						$user_ids = array_unique(array_column($cart_details, 'userid'));
						$matching_userids = array_intersect($user_ids, $userids);
						$query = $this->db->where('is_status', 'true')->where_in('id', $matching_userids)->get('tbl_user')->result();
					}

					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "FilterUser";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('minorder', 'Minimum Order', 'required|trim|numeric');
						$this->form_validation->set_rules('point', 'Reward Points', 'required|trim|numeric');
						$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
						$this->form_validation->set_rules('producttype', 'Product Type', 'required|trim');
						$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
						$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
						$this->form_validation->set_rules('reward_count', 'Number Of Coupon', 'required|trim|numeric');
						$this->form_validation->set_rules('title', 'Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Description', 'required|trim');
						$this->form_validation->set_rules('termsconditions', 'Terms&Conditions', 'required|trim');

						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$this->form_validation->set_rules('icon', 'Banner', 'required|trim');
						}


						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$uploadstatus = "true";
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									array_push($upload_errors, array(
										'error_upload' => $this->upload->display_errors()
									));
									$uploadstatus = "false";
								}
							}

							$insertData = [
								'min_order' => $this->input->post('minorder'),
								'point' => $this->input->post('point'),
								'user_type' => $this->input->post('usertype'),
								'product_type' => $this->input->post('producttype'),
								'start_date' => $this->input->post('startdate'),
								'end_date' => $this->input->post('enddate'),
								'reward_count' => $this->input->post('reward_count'),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'termsconditions' => base64_encode($this->input->post('termsconditions')),
								'icon' => $filename,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							if ($uploadstatus == 'true') {
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Something went wrong to upload banner.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('minorder', 'Minimum Order', 'required|trim|numeric');
								$this->form_validation->set_rules('point', 'Reward Points', 'required|trim|numeric');
								$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
								$this->form_validation->set_rules('producttype', 'User Type', 'required|trim');
								$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
								$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
								$this->form_validation->set_rules('reward_count', 'Number Of Coupon', 'required|trim|numeric');
								$this->form_validation->set_rules('title', 'Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Description', 'required|trim');
								$this->form_validation->set_rules('termsconditions', 'Terms&Conditions', 'required|trim');

								$old_filename = $data['list'][0]->icon;
								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
								} else {
									$filename = $old_filename;
								}

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$uploadstatus = "true";
									if (!empty($_FILES['icon']['name'])) {
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											array_push($upload_errors, array(
												'error_upload' => $this->upload->display_errors()
											));
											$uploadstatus = "false";
										} else {
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									}

									$updateData = [
										'min_order' => $this->input->post('minorder'),
										'point' => $this->input->post('point'),
										'user_type' => $this->input->post('usertype'),
										'product_type' => $this->input->post('producttype'),
										'start_date' => $this->input->post('startdate'),
										'end_date' => $this->input->post('enddate'),
										'reward_count' => $this->input->post('reward_count'),
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'termsconditions' => base64_encode($this->input->post('termsconditions')),
										'icon' => $filename,
										'modified_at' => $this->data->timestamp
									];

									if ($uploadstatus == 'true') {
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Something went wrong to update banner.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == "SubmitRewardData") {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("rewardid"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("rewardid"))->get('reward_point');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('rewardid', 'Reward Id', 'required|trim|numeric');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$product = $this->input->post('productid[]');
									$userid = $this->input->post('userid[]');
									if (!empty($product)) {
										$dataadd = [];
										foreach ($product as $each) {
											$check = $this->db->get_where('reward_product', array('reward_id' => $this->input->post('rewardid'), 'product_id' => $each));

											if ($check->num_rows() > 0) {
												continue;
											} else {
												if ($this->input->post('producttype') == "individual") {
													$productp = $this->db->get_where('products', array('id' => $each))->row();
													$price = $productp->mrp;
												} else {
													$productp = $this->db->get_where('tbl_combo', array('id' => $each))->row();
													$price = $productp->price;
												}

												$adddata = [
													'product_type' => $this->input->post('producttype'),
													'reward_id' => $this->input->post('rewardid'),
													'product_id' => $each,
													'userid' => implode(',', $userid),
													'is_status' => 'true',
													'created_at' => $this->data->timestamp,
													'modified_at' => $this->data->timestamp
												];
												$dataadd[] = $adddata;
											}
										}

										if (count($dataadd) > 0) {
											if ($this->db->insert_batch('reward_product', $dataadd)) {
												$output['res'] = "success";
												$output['msg'] = count($dataadd) . " Data Added Successfully";
											} else {
												$output['msg'] = "Something Went Wrong";
											}
										} else {
											$output['msg'] = "No Product Eligible For Reward";
										}
									} else {
										$output['msg'] = "Please Select Product";
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Beneficiary user
	public function BeneficiaryDetails()
	{
		if ($this->uri->segment(3) == true) {
			$userids = explode(',', base64_decode($this->uri->segment(3)));
			$data['activepage'] = 'BeneficiaryDetails';
			$data['list'] = $this->db->where_in('id', $userids)->get('tbl_user')->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Users
	public function ManageUsers()
	{
		$this->data->table = 'tbl_user';
		$this->data->folder = 'profile_pic';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Users';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageUsers';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditUser";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} elseif ($action == 'View') {
					$query = $this->db->get_where('tbl_order', array('id' => $id));
					$data["order"] = $query->result();
					$data["action"] = "ViewOrder";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'UserFullDetails') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {

						$data["walletdata"] = $this->db->order_by('id', 'desc')->get_where('user_wallet', array('userid' => $id))->result();
						$data['orders'] = $this->db->order_by('id', 'desc')->get_where('tbl_order', ['userid' => $id])->result_array();
						$data["userdata"] = $query->row();
						$this->load->view($this->data->controller . '/UserInformation', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else if ($action == 'AddMoney') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('amount', 'Amount', 'required|trim|numeric');
						$this->form_validation->set_rules('remark', 'Remark', 'required|trim');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$userdata = $this->db->get_where('tbl_user', array('id' => $id))->row();

							$income = $this->input->post('amount');
							$balance = $userdata->wallet;
							$upincome = $income + $balance;
							$UpdateData = [
								'wallet' => $upincome,
							];

							if ($this->db->where(array('id' => $id))->update('tbl_user', $UpdateData)) {
								$balance = $upincome;

								$insertData = [
									'userid' => $id,
									'amount' => $income,
									'balance' => $balance,
									'remark' => $this->input->post('remark'),
									'type' => 'credit',
									'user_type' => 'user',
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);

								if ($this->db->insert('tbl_wallet', $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['res'] = 'error';
									$output['msg'] = 'Something Went Wrong';
								}
							} else {
								$output['res'] = 'error';
								$output['msg'] = 'Something Went Wrong';
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'email' => $this->input->post('email'),
								'mobile ' => $this->input->post('mobile'),
								'password ' => $this->input->post('password'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run('edituser') == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'name' => $this->input->post('name'),
										'password' => $this->input->post('password'),
										'mobile' => $this->input->post('mobile'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Upload') {
					if (!empty($this->input->post())) {

						$this->load->library('excel');


						if (empty($_FILES['excelfile']['name'])) {
							$output['msg'] = 'Excel File Is Required';
						} else if (!in_array($_FILES["excelfile"]["type"], $this->excel->allowedFileType)) {
							$output['msg'] = 'Invalid Excel File';
						} else {

							$fileInfo = $_FILES["excelfile"]["name"];
							$newFileName = "Users-" . time() . rand(100, 900) . "." . pathinfo($_FILES['excelfile']['name'], PATHINFO_EXTENSION);
							$fileDirectory = "./uploads/excel/";
							$inputFileName = $fileDirectory . $newFileName;

							$config['upload_path'] = $fileDirectory;
							$config['allowed_types'] = 'xlsx|xls';
							$config['max_size'] = 100000000;
							$config['file_name'] = $newFileName;

							$this->load->library('upload', $config);
							$this->upload->do_upload('excelfile');

							$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
							$objReader = PHPExcel_IOFactory::createReader($inputFileType);
							$objReader->setReadDataOnly(true);
							$objPHPExcel = $objReader->load($inputFileName);
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
							$highestRow = $objWorksheet->getHighestRow();
							$highestColumn = $objWorksheet->getHighestColumn();
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							if ($highestRow <= 1 or $highestColumnIndex <= 1) {
								$output['msg'] = 'Empty Excel File.';
							} else {
								for ($row = 2; $row <= $highestRow; $row++) {
									$srno = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
									$username = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();

									$useremail = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
									$usermobile = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
									$password = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();

									if ($this->db->get_where($this->data->table, array('email' => $useremail))->num_rows()) {
										continue;
									}

									$insertData[] = [
										'name' => $username,
										'email' => $useremail,
										'mobile' => $usermobile,
										'password' => $password,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
								}

								if (!empty($insertData)) {

									if ($this->db->insert_batch($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Uploaded Successfully.';
									} else {
										$output['msg'] = 'Something Went Wrong';
									}
								} else {
									$output['msg'] = 'Data Is Already Saved Please Enter Fresh Data.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Users
	public function FashionExpert()
	{
		$this->data->table = 'fashion_expert';
		$this->data->folder = 'profile_pic';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Expert';
		$output['res'] = 'error';
		$data['activepage'] = 'FashionExpert';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();

						$data["action"] = "EditExpert";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'RejectExpert') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();

						$data["action"] = "RecjectExpert";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'ExpertFullDetails') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {

						$wallettable = $this->db->order_by('id', 'desc')->get_where('tbl_wallet', array('userid' => $id, 'is_status' => 'true', 'user_type' => 'expert'))->result();
						$data["walletdata"] = $wallettable;

						$data["userdata"] = $query->row();
						$this->load->view($this->data->controller . '/ExpertInformation', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else if ($action == 'AddMoney') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('amount', 'Amount', 'required|trim|numeric');
						$this->form_validation->set_rules('remark', 'Remark', 'required|trim');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$userdata = $this->db->get_where('fashion_expert', array('id' => $id))->row();

							$income = $this->input->post('amount');
							$balance = $userdata->wallet;
							$upincome = $income + $balance;
							$UpdateData = [
								'wallet' => $upincome,
							];

							if ($this->db->where(array('id' => $id))->update('fashion_expert', $UpdateData)) {
								$balance = $upincome;

								$insertData = [
									'userid' => $id,
									'amount' => $income,
									'balance' => $balance,
									'remark' => $this->input->post('remark'),
									'type' => 'credit',
									'user_type' => 'expert',
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);

								if ($this->db->insert('tbl_wallet', $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['res'] = 'error';
									$output['msg'] = 'Something Went Wrong';
								}
							} else {
								$output['res'] = 'error';
								$output['msg'] = 'Something Went Wrong';
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$password = hash_hmac('sha256', $this->input->post('password'), $this->data->encryption_key);
							$insertData = [
								'name' => $this->input->post('name'),
								'email' => $this->input->post('email'),
								'mobile ' => $this->input->post('mobile'),
								'password ' => $password,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run('editexpert') == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$password = hash_hmac('sha256', $this->input->post('password'), $this->data->encryption_key);
									$updateData = [
										'name' => $this->input->post('name'),
										'password' => $password,
										'mobile' => $this->input->post('mobile'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'RejectExpert') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('rejectremark', 'Rejection Remark', 'required|trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'reject_remark' => $this->input->post('rejectremark'),
										'is_verified' => 'rejected',
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Expert Successfully Rejected.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Upload') {
					if (!empty($this->input->post())) {

						$this->load->library('excel');


						if (empty($_FILES['excelfile']['name'])) {
							$output['msg'] = 'Excel File Is Required';
						} else if (!in_array($_FILES["excelfile"]["type"], $this->excel->allowedFileType)) {
							$output['msg'] = 'Invalid Excel File';
						} else {

							$fileInfo = $_FILES["excelfile"]["name"];
							$newFileName = "Users-" . time() . rand(100, 900) . "." . pathinfo($_FILES['excelfile']['name'], PATHINFO_EXTENSION);
							$fileDirectory = "./uploads/excel/";
							$inputFileName = $fileDirectory . $newFileName;

							$config['upload_path'] = $fileDirectory;
							$config['allowed_types'] = 'xlsx|xls';
							$config['max_size'] = 100000000;
							$config['file_name'] = $newFileName;

							$this->load->library('upload', $config);
							$this->upload->do_upload('excelfile');

							$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
							$objReader = PHPExcel_IOFactory::createReader($inputFileType);
							$objReader->setReadDataOnly(true);
							$objPHPExcel = $objReader->load($inputFileName);
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
							$highestRow = $objWorksheet->getHighestRow();
							$highestColumn = $objWorksheet->getHighestColumn();
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							if ($highestRow <= 1 or $highestColumnIndex <= 0) {
								$output['msg'] = 'Empty Excel File.';
							} else {
								for ($row = 2; $row <= $highestRow; $row++) {
									$srno = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
									$expertname = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();

									$expertemail = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
									$expertmobile = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
									$password = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();

									if ($this->db->get_where($this->data->table, array('email' => $expertemail))->num_rows()) {
										continue;
									}

									$insertData[] = [
										'name' => $expertname,
										'email' => $expertemail,
										'mobile' => $expertmobile,
										'password' => $password,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
								}

								if (!empty($insertData)) {

									if ($this->db->insert_batch($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Uploaded Successfully.';
									} else {
										$output['msg'] = 'Something Went Wrong';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Users
	public function PurchaseSeller()
	{
		$this->data->table = 'purchase_vendor';
		$this->data->key = 'Purchase Vendor';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditPurchaseSeller";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'email' => $this->input->post('email'),
								'mobile ' => $this->input->post('mobile'),
								'altmobile ' => $this->input->post('altmobile'),
								'wtspmobile ' => $this->input->post('wtspmobile'),
								'state ' => $this->input->post('state'),
								'city ' => $this->input->post('city'),
								'pincode ' => $this->input->post('pincode'),
								'address ' => $this->input->post('address'),
								'account_holder' => $this->input->post('acholder'),
								'account_no' => $this->input->post('accountno'),
								'ifsc' => $this->input->post('ifsc'),
								'branch' => $this->input->post('branch'),
								'is_status' => 'false',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run('EditPurchaseVendor') == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'name' => $this->input->post('name'),
										'address ' => $this->input->post('address'),
										'mobile' => $this->input->post('mobile'),
										'altmobile ' => $this->input->post('altmobile'),
										'wtspmobile ' => $this->input->post('wtspmobile'),
										'state ' => $this->input->post('state'),
										'city ' => $this->input->post('city'),
										'pincode ' => $this->input->post('pincode'),
										'account_holder' => $this->input->post('acholder'),
										'account_no' => $this->input->post('accountno'),
										'ifsc' => $this->input->post('ifsc'),
										'branch' => $this->input->post('branch'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'UploadExcelSeller') {
					if (!empty($this->input->post())) {

						$this->load->library('excel');


						if (empty($_FILES['excelfile']['name'])) {
							$output['msg'] = 'Excel File Is Required';
						} else if (!in_array($_FILES["excelfile"]["type"], $this->excel->allowedFileType)) {
							$output['msg'] = 'Invalid Excel File';
						} else {

							$fileInfo = $_FILES["excelfile"]["name"];
							$newFileName = "Seller-" . time() . rand(100, 900) . "." . pathinfo($_FILES['excelfile']['name'], PATHINFO_EXTENSION);
							$fileDirectory = "./uploads/excel/";
							$inputFileName = $fileDirectory . $newFileName;

							$config['upload_path'] = $fileDirectory;
							$config['allowed_types'] = 'xlsx|xls';
							$config['max_size'] = 100000000;
							$config['file_name'] = $newFileName;

							$this->load->library('upload', $config);
							$this->upload->do_upload('excelfile');

							$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
							$objReader = PHPExcel_IOFactory::createReader($inputFileType);
							$objReader->setReadDataOnly(true);
							$objPHPExcel = $objReader->load($inputFileName);
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
							$highestRow = $objWorksheet->getHighestRow();
							$highestColumn = $objWorksheet->getHighestColumn();
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							if ($highestRow <= 1 or $highestColumnIndex <= 0) {
								$output['msg'] = 'Empty Excel File.';
							} else {
								for ($row = 2; $row <= $highestRow; $row++) {
									$srno = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
									$sellername = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();

									$selleremail = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
									$sellermobile = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
									$address = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();

									if ($this->db->get_where($this->data->table, array('email' => $selleremail))->num_rows()) {
										continue;
									}

									$insertData[] = [
										'name' => $sellername,
										'email' => $selleremail,
										'mobile' => $sellermobile,
										'address' => $address,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
								}

								if (!empty($insertData)) {

									if ($this->db->insert_batch($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Uploaded Successfully.';
									} else {
										$output['msg'] = 'Something Went Wrong';
									}
								} else {
									$output['msg'] = 'Data Already Added Please Add Some Fresh Data';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Product
	public function ManageProduct()
	{
		$this->data->table = 'products';
		$this->data->key = 'Product';
		$this->data->folder = 'product';
		createFolder('./uploads/' . $this->data->folder);
		$output['res'] = 'error';

		$data['vendorlist'] = $this->Product_model->getData('tbl_vendor', array('is_status' => 'true'));
		$data['categorylist'] = $this->Product_model->getData('categories', array('is_status' => 'true'));
		$data['brandlist'] = $this->Product_model->getData('brand', array('is_status' => 'true'));
		$data['colorlist'] = $this->Product_model->getData('tbl_color', array('is_status' => 'true'));
		$data['designlist'] = $this->Product_model->getData('tbl_design', array('is_status' => 'true'));
		$data['sleevelist'] = $this->Product_model->getData('tbl_sleevestyle', array('is_status' => 'true'));
		$data['necklist'] = $this->Product_model->getData('tbl_neckstyle', array('is_status' => 'true'));
		$data['clothlist'] = $this->Product_model->getData('tbl_clothtype', array('is_status' => 'true'));

		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(5) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'UpdateImageProduct') {
					$col = $this->uri->segment(5);
					// $query = $this->db->get_where('products', array('id' => $id));
					// if ($query->num_rows() > 0) {
					// 	$data["list"] = $query->result();
					$query = $this->Product_model->getData('products', array('id' => $id));
					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "UpdateImageProduct";
						$data["column"] = $col;
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Invalid Product";
					}
				} elseif ($action == 'DeleteProductImage') {
					$imagename = $this->uri->segment(5);
					$image_key = $this->uri->segment(6);
					// $query = $this->db->get_where('products', array('id' => $id));
					// $data = $query->result();
					$data = $this->Product_model->getData('products', array('id' => $id));

					if (!empty($id)) {
						$data_arr = array(
							$image_key => '',
							"modified_at" => $this->data->timestamp,
						);

						// if ($this->db->where('id', $id)->update('products', $data_arr)) {
						if ($this->Product_model->updateData('products', $data_arr, array('id' => $id))) {

							unlinkFile('./uploads/product/' . $imagename);

							echo "success";
						}
					}
				} elseif ($action == 'DeleteProductImage_old') {
					$imagename = $this->uri->segment(5);
					// $query = $this->db->get_where('products', array('id' => $id));
					// $data = $query->result();
					$data = $this->Product_model->getData('products', array('id' => $id));
					$icon_arr = $data[0]->image1;
					$new_arr =  str_replace($imagename, '', $icon_arr);
					$new_arr = explode(',', $new_arr);
					$arr = [];
					foreach ($new_arr as $each) {
						if (!empty($each)) {
							array_push($arr, $each);
						}
					}
					$arr = implode(',', $arr);

					if (!empty($id)) {
						$data_arr = array(
							"image1" => $arr,
							"modified_at" => $this->data->timestamp,
						);

						// if ($this->db->where('id', $id)->update('products', $data_arr)) {
						if ($this->Product_model->updateData('products', $data_arr, array('id' => $id))) {

							unlinkFile('./uploads/product/' . $imagename);

							echo "success";
						}
					}
				} elseif ($action == 'DeleteVariantImage') {
					$imagename = $this->uri->segment(5);

					// $query = $this->db->get_where('product_variant', array('id' => $id));
					// $data = $query->result();
					$data = $this->Product_model->getData('product_variant', array('id' => $id));
					$icon_arr = $data[0]->variant_img;
					$new_arr =  str_replace($imagename, '', $icon_arr);
					$new_arr = explode(',', $new_arr);
					$arr = [];
					foreach ($new_arr as $each) {
						if (!empty($each)) {
							array_push($arr, $each);
						}
					}
					$arr = implode(',', $arr);

					if (!empty($id)) {
						$data_arr = array(
							"variant_img" => $arr,
							"modified_at" => $this->data->timestamp,
						);

						// if ($this->db->where('id', $id)->update('product_variant', $data_arr)) {
						if ($this->Product_model->updateData('product_variant', $data_arr, array('id' => $id))) {

							unlinkFile('./uploads/product/' . $imagename);

							echo "success";
						}
					}
				} elseif ($action == 'UpdateVariant') {
					$data['activepage'] = 'UpdateVariant';
					$product_id = $this->uri->segment(4);
					$variant_id = $this->uri->segment(5);
					// $query = $this->db->get_where('products', array('id' => $product_id));
					// if ($query->num_rows() > 0) {
					$query = $this->Product_model->getData('products', array('id' => $product_id), $product_id);
					if (!empty($query)) {
						$this->data->pageTitle = "Update Variant Details";
						// $variants = $this->db->get_where('product_variant', array('product_id' => $product_id, 'id' => $variant_id))->row();
						$variants = $this->Product_model->getData('product_variant', array('product_id' => $product_id, 'id' => $variant_id), $product_id);
						$data["variants"] = $variants;
						// $data["list"] = $query->row();
						$data["list"] = $query;
						$this->load->view($this->data->controller . '/UpdateVariant', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				}
			} elseif ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'subcategory') {

					$data["list"] = $this->Product_model->getSubcategory(['sub_category.category_id' => $id]);
					$data["action"] = "subcategory";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'cosubcategory') {

					$data["list"] = $this->Product_model->getData('co_subcategory', array('subcategory_id' => $id));
					$data["action"] = "cosubcategory";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'ProductAttribute') {

					$data["list"] = $this->Product_model->getData('tbl_attribute', array('subcategory' => $id, 'attribute_type' => 'product_attr'));
					$data["action"] = "ProductAttribute";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'ExpertAttribute') {

					$data["list"] = $this->Product_model->getData('tbl_attribute', array('subcategory' => $id, 'attribute_type' => 'expert_attr'));
					$data["action"] = "ExpertAttribute";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'BeautytipsAttribute') {
					$data["list"] = $this->Product_model->getData('tbl_attribute', array('subcategory' => $id, 'attribute_type' => 'beautytips_attr'));
					$data["action"] = "BeautytipsAttribute";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'sizetype') {

					$query = $this->Product_model->getData('tbl_size', array('id' => $id));
					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "sizetype";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Data Not Found";
					}
				} elseif ($action == 'ShowSizeChart') {
					// $query = $this->db->where('id', $id)->get('tbl_size');
					// if ($query->num_rows()) {
					// 	$data["list"] = $query->row();
					$query = $this->Product_model->getData('tbl_size', array('id' => $id), $id);
					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "ShowSizeChart";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} elseif ($action == 'ViewProduct') {
					$data['activepage'] = 'ManageProduct';
					// $query = $this->db->get_where('products', array('id' => $id));
					// if ($query->num_rows() > 0) {
					$query = $this->Product_model->getData('products', array('id' => $id), $id);
					if (!empty($query)) {
						$this->data->pageTitle = "Product Detail";

						// $variants = $this->db->get_where('product_variant', array('product_id' => $id))->result();
						// $videos = $this->db->order_by('id', 'DESC')->get_where('product_video', array('product_id' => $id))->result();

						$variants = $this->Product_model->getData('product_variant', array('product_id' => $id));
						$videos = $this->Product_model->getData('product_video', array('product_id' => $id));

						// $code = (int)$query->row()->bar_code;
						$code = (int)$query->bar_code;
						// $this->zend->load('Zend/Barcode');
						// $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $code), array())->draw();
						// imagepng($imageResource, 'barcodes/' . $code . '.png');

						// $data['barcode'] = 'barcodes/' . $code . '.png';
						$data['barcode'] = generateBarcode($code);
						$data['qrcode'] = generateQrcode($code);
						$data["videos"] = $videos;
						$data["variants"] = $variants;
						// $data["list"] = $query->row();
						$data["list"] = $query;
						$this->load->view($this->data->controller . '/ProductDetail', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'UpdateProduct') {

					$data['activepage'] = 'ManageProduct';
					$query = $this->Product_model->getData('products', array('id' => $id), $id);
					if (!empty($query)) {
						$this->data->pageTitle = "Update Product Details";
						$variants = $this->db->get_where('product_variant', array('product_id' => $id))->result();
						$videos = $this->db->order_by('id', 'DESC')->get_where('product_video', array('product_id' => $id))->result();
						$data["videos"] = $videos;
						$data["variants"] = $variants;
						// $data["list"] = $query->row();
						$data["list"] = $query;
						$this->load->view($this->data->controller . '/UpdateProduct', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'UpdateVariantDetails') {
					if ($this->form_validation->run('AddVariant') == FALSE) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {

						$size = $this->input->post('p_size');
						$size_stock = explode(',', $this->input->post('p_size_count'));
						for ($i = 0; $i < count($size); $i++) {

							$arr[] = array($size[$i] => $size_stock[$i]);
						}

						$color = $this->input->post('p_color');
						$updateData = [
							// 'variant_code' => $this->input->post('variant_code'),
							'size' => json_encode($arr),
							'size_type' => $this->input->post('size_type'),
							'numeric_size' => "",
							'color' => $color,
							'unit' => "",
							'weight' => "",
							'mrp' => "",
							'offer_price' => "",
							'availability' => "",
							'stock' => "",
							'barcode' => "",
							'length' => "",
							'width' => "",
							'height' => "",
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'modified_at' => $this->data->timestamp,
						];

						$upload_status = "true";
						$upload_status_name = "Product Image";
						$front_view_image = '';
						if (!empty($_FILES['front_view_image']['name'])) {
							$front_view_image = FIleUpload('front_view_image', $_FILES['front_view_image']['name'], './uploads/' . $this->data->folder . '/', 'front');
							if (empty($front_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Front View Image";
							} else {
								$updateData['front_view_image'] = $front_view_image;
							}
						}
						$back_view_image = '';
						if (!empty($_FILES['back_view_image']['name'])) {
							$back_view_image = FIleUpload('back_view_image', $_FILES['back_view_image']['name'], './uploads/' . $this->data->folder . '/', 'back');
							if (empty($back_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Back View Image";
							} else {
								$updateData['back_view_image'] = $back_view_image;
							}
						}
						$rside_view_image = '';
						if (!empty($_FILES['rside_view_image']['name'])) {
							$rside_view_image = FIleUpload('rside_view_image', $_FILES['rside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'rside');
							if (empty($rside_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Right View Image";
							} else {
								$updateData['rside_view_image'] = $rside_view_image;
							}
						}
						$lside_view_image = '';
						if (!empty($_FILES['lside_view_image']['name'])) {
							$lside_view_image = FIleUpload('lside_view_image', $_FILES['lside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'lside');
							if (empty($lside_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Left View Image";
							} else {
								$updateData['lside_view_image'] = $lside_view_image;
							}
						}

						$top_view_image = '';
						if (!empty($_FILES['top_view_image']['name'])) {
							$top_view_image = FIleUpload('top_view_image', $_FILES['top_view_image']['name'], './uploads/' . $this->data->folder . '/', 'top');
							if (empty($top_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Top View Image";
							} else {
								$updateData['top_view_image'] = $top_view_image;
							}
						}
						$bottom_view_image = '';
						if (!empty($_FILES['bottom_view_image']['name'])) {
							$bottom_view_image = FIleUpload('bottom_view_image', $_FILES['bottom_view_image']['name'], './uploads/' . $this->data->folder . '/', 'bottom');
							if (empty($bottom_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Bottom View Image";
							} else {
								$updateData['bottom_view_image'] = $bottom_view_image;
							}
						}
						$close_view_image = '';
						if (!empty($_FILES['close_view_image']['name'])) {
							$close_view_image = FIleUpload('close_view_image', $_FILES['close_view_image']['name'], './uploads/' . $this->data->folder . '/', 'close');
							if (empty($close_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Close View Image";
							} else {
								$updateData['close_view_image'] = $close_view_image;
							}
						}
						if ($upload_status == "true") {
							$updateData = $this->security->xss_clean($updateData);
							// if ($this->db->where('id', $id)->update('product_variant', $updateData)) {
							if ($this->Product_model->updateData('product_variant', $updateData, ['id' => $id])) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Updated Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data updating.';
							}
						} else {
							$output['msg'] = 'Something went wrong in ' . $upload_status_name . '  uploading.';
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'Update') {
					if (!empty($this->input->post('id'))) {

						$query = $this->Product_model->getData('products', ['id' => $id], $id);
						if (!empty($query)) {
							if ($this->form_validation->run($this->data->key) == FALSE) {
								$msg = explode('</p>', validation_errors());
								$output['msg'] = str_ireplace('<p>', '', $msg[0]);
							} else {
								// $list = $query->row();
								$list = $query;
								$old_audio = $list->audio;
								$upload_status1 = "true";
								if (!empty($_FILES['audio']['name'])) {
									$extension2 = pathinfo($_FILES['audio']['name'], PATHINFO_EXTENSION);
									$filename2 = time() . rand() . "." . $extension2;
									$upload_errors           = array();
									$config2['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config2['allowed_types'] = 'mp3';
									$config2['max_size']      = 4048;
									$config2['file_name']     = $filename2;
									$this->load->library('upload', $config2);
									$this->upload->initialize($config2);
									if (!$this->upload->do_upload('audio')) {
										$upload_status1 = 'false';
									} else {
										unlinkFile('./uploads/' . $this->data->folder . '/' . $old_audio);
									}
								} else {
									$filename2 = $old_audio;
								}

								$upload_status2 = "true";
								$old_sizechart_image = $list->sizechart_image;
								if (!empty($_FILES['sizechart']['name'])) {
									$extension3 = pathinfo($_FILES['sizechart']['name'], PATHINFO_EXTENSION);
									$filename3 = time() . rand() . "." . $extension3;
									$upload_errors           = array();
									$config3['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config3['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config3['max_size']      = 4078;
									$config3['file_name']     = $filename3;
									$this->load->library('upload', $config3);
									$this->upload->initialize($config3);
									if (!$this->upload->do_upload('sizechart')) {
										$upload_status2 = 'false';
									} else {
										unlinkFile('./uploads/' . $this->data->folder . '/' . $old_sizechart_image);
									}
								} else {
									$filename3 = $old_sizechart_image;
								}

								if (!empty($this->input->post('custom_sizechart'))) {
									if ($this->input->post('custom_sizechart') == 'true') {
										$filename3_details = base64_encode($this->input->post('sizechart_table'));
									}
								} else {
									$filename3_details = $list->size_chart;
								}

								$upload_status3 = "true";
								// $old_manufacturerlogo = $list->manufacturer_logo;
								if (!empty($_FILES['manufacturerlogo']['name'])) {
									$extension4 = pathinfo($_FILES['manufacturerlogo']['name'], PATHINFO_EXTENSION);
									$filename4 = time() . rand() . "." . $extension4;
									$upload_errors           = array();
									$config4['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config4['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config4['max_size']      = 4078;
									$config4['file_name']     = $filename4;
									$this->load->library('upload', $config4);
									$this->upload->initialize($config4);
									if (!$this->upload->do_upload('manufacturerlogo')) {
										$upload_status3 = 'false';
									} else {
										// unlinkFile('./uploads/' . $this->data->folder . '/' . $old_manufacturerlogo);
									}
								} else {
									// $filename4 = $old_manufacturerlogo;
								}


								if ($upload_status1 == 'true') {
									if ($upload_status2 == 'true') {
										if ($upload_status3 == 'true') {
											if (!empty($this->input->post('compare'))) {
												$compare = 'true';
											} else {
												$compare = 'false';
											}

											if (!empty($this->input->post('vendorupload'))) {
												$vendorid = $this->input->post('vendorupload');
												$uploadby = 'vendor';
											} else {
												$vendorid = '';
												$uploadby = 'admin';
											}

											if (!empty($this->input->post('quickview'))) {
												$quickview = 'true';
											} else {
												$quickview = 'false';
											}

											if (!empty($this->input->post('giftwrap'))) {
												$giftwrap = 'true';
											} else {
												$giftwrap = 'false';
											}

											if (!empty($this->input->post('audiostatus'))) {
												$audiostatus = 'true';
											} else {
												$audiostatus = 'false';
											}

											if (!empty($this->input->post('is_status'))) {
												$is_status = 'true';
											} else {
												$is_status = 'false';
											}

											if (!empty($this->input->post('consult'))) {
												$consult = 'true';
											} else {
												$consult = 'false';
											}

											if (!empty($this->input->post('complimentary'))) {
												$complimentary = 'true';
											} else {
												$complimentary = 'false';
											}

											if (!empty($this->input->post('combostatus'))) {
												$combostatus = 'true';
											} else {
												$combostatus = 'false';
											}


											if (!empty($this->input->post('prebook_avl'))) {
												$prebook_avl = 'true';
											} else {
												$prebook_avl = 'false';
											}

											if (!empty($this->input->post('laundry_avl'))) {
												$laundry_avl = base64_encode($this->input->post('laundry_tips'));
											} else {
												$laundry_avl = '';
											}

											if (!empty($this->input->post('modalinfostatus'))) {
												$modalinfostatus = 'true';
											} else {
												$modalinfostatus = 'false';
											}
											if (!empty($this->input->post('productattr[]'))) {
												$productAttr = implode(',', $this->input->post('productattr[]'));
											} else {
												$productAttr = $list->product_details;
											}
											if (!empty($this->input->post('expertattr[]'))) {
												$expertAttr = implode(',', $this->input->post('expertattr[]'));
											} else {
												$expertAttr = $list->expert_advice;
											}

											$updateData = [
												'product_code' => $this->input->post('product_code'),
												'name' => $this->input->post('name'),
												'title' => $this->input->post('title'),
												'purchase_price' => $this->input->post('purchase_price'),
												'base_price' => $this->input->post('base_price'),
												'expected_profit' => $this->input->post('expected_profit'),
												'min_sell_price' => $this->input->post('min_sell_price'),
												'mrp' => $this->input->post('mrp'),
												'reg_sell_price' => $this->input->post('reg_sell_price'),
												'margin' => $this->input->post('margin'),
												'royal_amt' => $this->input->post('royal_amt'),
												'royal_clubcash' => $this->input->post('royal_clubcash'),
												'cgst' => $this->input->post('cgst'),
												'sgst' => $this->input->post('sgst'),
												'gst' => $this->input->post('gst'),
												'hsn' => $this->input->post('hsn'),
												'unit' => $this->input->post('unit'),
												'weight' => $this->input->post('weight'),
												'category' => $this->input->post('category'),
												'sub_category' => $this->input->post('subcategory'),
												'co_subcategory' => $this->input->post('cosubcategory'),
												'brand_id' => $this->input->post('brand'),
												'subbrand_id' => $this->input->post('subbrand'),
												'availability' => $this->input->post('avaliablity'),
												'stock' => $this->input->post('stock'),
												'alert_qty' => $this->input->post('alertqty'),
												'max_qty' => $this->input->post('maxqty'),
												'short_desc' => $this->input->post('shortdescription'),
												'long_desc' => $this->input->post('longdescription'),
												'launch_time' => $this->input->post('launchtime'),
												'audio' => $filename2,
												'refund_policy' => $this->input->post('refundpolicy'),
												'compare' => $compare,
												'quick_view' => $quickview,
												'gift_wrap' => $giftwrap,
												'bar_code' => $this->input->post('barcode'),
												'sizechart_type' => $this->input->post('sizechart_type'),
												'sizechart_image' => $filename3,
												'size_chart' => $filename3_details,
												'modalinfo_status' => $modalinfostatus,
												'modalinfo' => base64_encode($this->input->post('modal_info')),
												'add_url' => $this->input->post('additionalurl'),
												'seo_keyword' => $this->input->post('seokeyword'),
												'meta_desc' => $this->input->post('metadescription'),
												'height' => $this->input->post('height'),
												'width' => $this->input->post('width'),
												'length' => $this->input->post('length'),
												'skuid' => $this->input->post('skuid'),
												'stock' => $this->input->post('stock'),
												'max_qty' => $this->input->post('maxqty'),
												'alert_qty' => $this->input->post('alertqty'),
												'cancel_status' => $this->input->post('cancel'),
												'refund_status' => $this->input->post('return_refund'),
												'cancel_limit' => $this->input->post('cancel_limit'),
												'refund_limit' => $this->input->post('return_limit'),
												'return_policy' => $this->input->post('returnpolicy'),
												'audio_status' => $audiostatus,
												'cancellation_policy' => $this->input->post('cancellationpolicy'),
												'procurement_sla' => $this->input->post('procurementsla'),
												'pack_of' => $this->input->post('packof'),
												'exchange_status' => $this->input->post('exchange_avl'),
												'exchange_limit' => $this->input->post('exchange_limit'),
												'exchange_policy' => $this->input->post('exchangepolicy'),
												'expertlink' => $this->input->post('expertlink'),
												'chat_consult' => $consult,
												'uploaded_by' => $uploadby,
												'is_complimentary' => $complimentary,
												'combo_status' => $combostatus,
												'prebook_status' => $prebook_avl,
												'prebook_amt' => $this->input->post('prebook_amt'),
												'product_details' => $productAttr,
												'laundry_tips' => $laundry_avl,
												'expert_advice' => $expertAttr,
												'tags' => $this->input->post('producttags'),
												'is_status' => $is_status,
												'created_at' => $this->data->timestamp,
												'modified_at' => $this->data->timestamp,
											];
											// $updateData = $this->security->xss_clean($updateData);
											// if ($this->db->where(['id' => $id])->update($this->data->table, $updateData)) {
											if ($this->Product_model->updateData($this->data->table, $updateData, ['id' => $id])) {

												$output['res'] = 'success';
												$output['msg'] = 'Data Update Successfully.';

												$product_id = $this->db->insert_id();
												$size = $this->input->post('p_size[]');
												$p_sizenumeric = $this->input->post('p_sizenumeric[]');
												$color = $this->input->post('p_color[]');
												$unit = $this->input->post('p_unit[]');
												$weight = $this->input->post('p_weight[]');
												$mrp = $this->input->post('p_mrp[]');
												$offer_price = $this->input->post('p_price[]');
												$avaliability = $this->input->post('avaliability[]');
												$stock = $this->input->post('stock[]');
												$baar_code = $this->input->post('baar_code[]');
												$length = $this->input->post('v_length[]');
												$width = $this->input->post('v_width[]');
												$height = $this->input->post('v_height[]');

												if (!empty($size)) {
													$dataadd = [];
													$i = 0;
													foreach ($size as $each) {
														$adddata = [
															'product_id' => $product_id,
															'size' => $each,
															'numeric_size' => $p_sizenumeric,
															'color' => $color[$i],
															'unit' => $unit[$i],
															'weight' => $weight[$i],
															'mrp' => $mrp[$i],
															'offer_price' => $offer_price[$i],
															'stock' => $stock[$i],
															'availability' => $avaliability[$i],
															'barcode' => $baar_code[$i],
															'length' => $length[$i],
															'width' => $width[$i],
															'height' => $height[$i]
														];
														$dataadd[] = $adddata;
													}
													// $this->db->insert_batch('product_variant', $dataadd);
													$this->Product_model->inserBatchData('product_variant', $dataadd);
												}
											} else {
												$output['msg'] = 'Something went wrong in Data Updating.';
											}
										} else {
											$output['msg'] = 'Manufacturer Logo Unable To Upload';
										}
									} else {
										$output['msg'] = 'Size Chart Unable To Upload';
									}
								} else {
									$output['msg'] = 'Audio Unable To Upload';
								}
							}
						} else {
							$output['msg'] = 'No Product Found';
						}
					} else {
						$output['msg'] = 'Product Id is required';
					}
					echo json_encode([$output]);
				} elseif ($action == 'VendorDetails') {
					// $query = $this->db->get_where('tbl_vendor', array('id' => $id));
					// if ($query->num_rows() > 0) {
					// 	$data["list"] = $query->row();
					$query = $this->Product_model->getData('tbl_vendor', array('id' => $id), $id);
					if (!empty($query)) {
						$data["list"] = $query;
						$data["action"] = "VendorDetails";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Invalid Vendor";
					}
				} elseif ($action == 'EditProductImage') {
					$imagename = $this->input->post('image');
					$image_key = $this->input->post('image_key');

					$query = $this->Product_model->getData('products', array('id' => $id));
					if (!empty($query)) {
						$data = $query;
						$icons = explode(',', $data[0]->image1);
						$data["list"] = $data;
						// $data["imagename"] = $imagename;
						$data["imagename"] = $data[0]->$image_key;
						$data["image_key"] = $image_key;
						$data["icons"] = $icons;
						$data["action"] = "EditProductImage";

						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} elseif ($action == 'subbrand') {
					// $query = $this->db->get_where('sub_brand', array('brand_id' => $id));
					// $data["list"] = $query->result();
					$data["list"] = $this->Product_model->getData('sub_brand', array('brand_id' => $id));
					$data["action"] = "subbrand";
					$this->load->view($this->data->controller . '/UpdateData', $data);
				} elseif ($action == 'ProductImage') {
					// $query = $this->db->get_where('products', array('id' => $id));
					// if ($query->num_rows() > 0) {
					// 	$imageresult = $query->row();
					$query = $this->Product_model->getData('products', array('id' => $id), $id);
					if (!empty($query)) {
						$imageresult = $query;
						// var_dump($imageresult);
						$icons = explode(',', $imageresult->image1);
						$data["list"] = $icons;
						$data["datas"] = $imageresult;
						$data["action"] = "ViewImageProducts";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Invalid Product";
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'AddProduct') {
					$data['activepage'] = 'AddProduct';
					$this->load->view($this->data->controller . '/AddProduct', $data);
				} elseif ($action == 'GenerateCatalog') {
					if (!empty($this->input->post('selectedid'))) {
						$ids = $this->input->post('selectedid');

						$id = explode(',', $ids);

						$products = [];

						foreach ($id as $item) {
							if (!empty($item)) {
								// $product = $this->db->get_where('products', array('id' => $item));
								// if ($product->num_rows() > 0) {
								// 	$product = $product->row();
								// 	array_push($products, $product);
								// }
								$product = $this->Product_model->getData('products', array('id' => $item), $item);
								if (!empty($product)) {
									array_push($products, $product);
								}
							}
						}

						if (count($products) > 0) {
							$data['product'] = $products;

							$this->load->view($this->data->controller . '/GenerateCatalog', $data);
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => "Data Not Found"]);
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					} else {
						$this->session->set_flashdata(['res' => 'error', 'msg' => "Please Select Atleast One Product"]);
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'DeleteFromDate') {
					$this->form_validation->set_rules('fromdate', 'From Date', 'required|trim');
					$this->form_validation->set_rules('todate', 'To Date', 'required|trim');
					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$this->session->set_flashdata(['res' => 'error', 'msg' => $msg]);
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					} else {
						$fromdate = date('Y-m-d', strtotime($this->input->post('fromdate')));
						$todate = date('Y-m-d', strtotime($this->input->post('todate')));

						// $getpro = $this->db->order_by('id', 'desc')->get($this->data->table)->result();
						$getpro = $this->Product_model->getData($this->data->table);

						$arr = [];
						foreach ($getpro as $each) {
							$prodate = date('Y-m-d', strtotime($each->created_at));
							if ($prodate >= $fromdate && $prodate <= $todate) {
								array_push($arr, $each->id);
							}
						}

						if (!empty($arr)) {
							$sr = 0;
							foreach ($arr as $onepro) {
								// $this->db->where('id', $onepro)->delete($this->data->table);
								$this->Product_model->deleteData($this->data->table, ['id' => $onepro]);
								$sr++;
							}
							$this->session->set_flashdata(['res' => 'error', 'msg' => $sr . ' Product Deleted Successfully']);
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						} else {
							$this->session->set_flashdata(['res' => 'error', 'msg' => 'No Product Found With Search Date']);
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					}
				} elseif ($action == 'AddVariant') {
					if (empty($_FILES)) {
						$this->form_validation->set_rules('image', 'Product Image ', 'required');
					}

					if (empty($_FILES['front_view_image']['name'])) {
						$this->form_validation->set_rules('front_view_image', 'Product Front View Image ', 'required');
					}

					if (empty($_FILES['back_view_image']['name'])) {
						$this->form_validation->set_rules('back_view_image', 'Product Back View Image  ', 'required');
					}


					if (empty($_FILES['rside_view_image']['name'])) {
						$this->form_validation->set_rules('rside_view_image', 'Product Right View Image', 'required');
					}

					if (empty($_FILES['lside_view_image']['name'])) {
						$this->form_validation->set_rules('lside_view_image', 'Product Left View Image', 'required');
					}

					if ($this->form_validation->run('AddVariant') == FALSE) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {
						$upload_status = "true";

						/*$file_name = 'image';
						$countfiles = count($_FILES['image']['name']);
						for ($i = 0; $i <= 10; $i++) {
							if (!empty($_FILES['image']['name'][$i])) {
								// Define new $_FILES array - $_FILES['file']
								$_FILES['file']['name'] = $_FILES[$file_name]['name'][$i];
								$_FILES['file']['type'] = $_FILES[$file_name]['type'][$i];
								$_FILES['file']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$i];
								$_FILES['file']['error'] = $_FILES[$file_name]['error'][$i];
								$_FILES['file']['size'] = $_FILES[$file_name]['size'][$i];
								// Set preference
								$config['upload_path'] = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size'] = 2003934; // max_size in kb
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
									$upload_status = "true";
								} else {
									$upload_status = "false";
								}
							}
						}
						$filename = implode(',', $data['filenames']);
						*/

						$front_view_image = FIleUpload('front_view_image', $_FILES['front_view_image']['name'], './uploads/' . $this->data->folder . '/', 'front');
						$back_view_image = FIleUpload('back_view_image', $_FILES['back_view_image']['name'], './uploads/' . $this->data->folder . '/', 'back');
						$rside_view_image = FIleUpload('rside_view_image', $_FILES['rside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'rside');
						$lside_view_image = FIleUpload('lside_view_image', $_FILES['lside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'lside');

						if (empty($front_view_image)) {
							$upload_status = "false";
							$upload_status_name = "Product Front View Image";
						}

						if (empty($back_view_image)) {
							$upload_status = "false";
							$upload_status_name = "Product Back View Image";
						}

						if (empty($rside_view_image)) {
							$upload_status = "false";
							$upload_status_name = "Product Right View Image";
						}

						if (empty($lside_view_image)) {
							$upload_status = "false";
							$upload_status_name = "Product Left View Image";
						}

						$top_view_image = '';
						if (!empty($_FILES['top_view_image']['name'])) {
							$top_view_image = FIleUpload('top_view_image', $_FILES['top_view_image']['name'], './uploads/' . $this->data->folder . '/', 'top');
							if (empty($top_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Top View Image";
							}
						}
						$bottom_view_image = '';
						if (!empty($_FILES['bottom_view_image']['name'])) {
							$bottom_view_image = FIleUpload('bottom_view_image', $_FILES['bottom_view_image']['name'], './uploads/' . $this->data->folder . '/', 'bottom');
							if (empty($bottom_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Bottom View Image";
							}
						}
						$close_view_image = '';
						if (!empty($_FILES['close_view_image']['name'])) {
							$close_view_image = FIleUpload('close_view_image', $_FILES['close_view_image']['name'], './uploads/' . $this->data->folder . '/', 'close');
							if (empty($close_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Close View Image";
							}
						}
						$size = $this->input->post('p_size');
						$size_stock = explode(',', $this->input->post('p_size_count'));
						for ($i = 0; $i < count($size); $i++) {

							$arr[] = array($size[$i] => $size_stock[$i]);
						}

						$color = $this->input->post('p_color');
						if ($upload_status == 'true') {
							$insertData = [
								'product_id' => $this->input->post('id'),
								'variant_code' => $this->input->post('variant_code'),
								// 'variant_img' => $filename,
								'size' => json_encode($arr),
								'size_type' => $this->input->post('size_type'),
								'numeric_size' => "",
								'color' => $color,
								'unit' => "",
								'weight' => "",
								'mrp' => "",
								'offer_price' => "",
								'availability' => "",
								'stock' => "",
								'barcode' => "",
								'length' => "",
								'width' => "",
								'height' => "",
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp,
								'front_view_image' => $front_view_image,
								'back_view_image' => $back_view_image,
								'rside_view_image' => $rside_view_image,
								'lside_view_image' => $lside_view_image,
								'top_view_image' => $top_view_image,
								'bottom_view_image' => $bottom_view_image,
								'close_view_image' => $close_view_image,
							];
							$insertData = $this->security->xss_clean($insertData);
							// if ($this->db->insert('product_variant', $insertData)) {
							if ($this->Product_model->inserData('product_variant', $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {

							$output['msg'] = 'Something went wrong to upload image.';
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddVideo') {
					$this->form_validation->set_rules('type', 'Discount Type', 'required|trim');
					$this->form_validation->set_rules('id', 'Product Id', 'required|trim');

					if ($this->input->post('type') == "Youtube") {
						$this->form_validation->set_rules('vdolink', 'Video Link', 'required|trim');
					}


					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {
						$upload_status = "true";

						if ($this->input->post('type') == "Internal") {
							if (!empty($_FILES['video']['name'])) {
								$extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand(10000, 99999) . "." . $extension;
								$config['upload_path'] = './uploads/video/';
								$config['allowed_types'] = 'mp4';
								$config['max_size'] = 8024; // In KB
								$filesize = $config['max_size'];
								$config['file_name'] = $filename;
								$this->load->library('upload', $config);

								if (!$this->upload->do_upload('video')) {
									$upload_status = "false";
								}
							} else {
								$upload_status = "false";
							}
						} elseif ($this->input->post('type') == "Youtube") {
							$filename = $this->input->post('vdolink');
						}



						if ($upload_status == 'true') {
							$insertData = [
								'product_id' => $this->input->post('id'),
								'type' => $this->input->post('type'),
								'video' => $filename,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							// if ($this->db->insert('product_video', $insertData)) {
							if ($this->Product_model->inserData('product_video', $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {
							$output['msg'] = 'Video Unable To Upload.';
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddBeautyTips') {

					$this->form_validation->set_rules('id', 'Product Id', 'required|trim');


					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {
						$upload_status = "true";

						if (!empty($this->input->post())) {
							if (!empty($_FILES['image']['name'])) {
								$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand(10000, 99999) . "." . $extension;
								$config['upload_path'] = './uploads/product/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size'] = 8024; // In KB
								$filesize = $config['max_size'];
								$config['file_name'] = $filename;
								// $this->initialize();
								$this->load->library('upload', $config);

								if (!$this->upload->do_upload('image')) {
									$upload_status = "false";
								}
							} else {
								$upload_status = "false";
							}

							if ($upload_status == 'true') {
								$insertData = [
									'product_id' => $this->input->post('id'),
									'point_name' => implode(',', $this->input->post('point_name')),
									'point_content' => implode(',', $this->input->post('point_content')),
									'xaxis' => implode(',', $this->input->post('xaxis')),
									'yaxis' => implode(',', $this->input->post('yaxis')),
									'image' => $filename,
									// 'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);

								// if ($this->db->insert('tbl_beautytips', $insertData)) {
								if ($this->Product_model->inserData('tbl_beautytips', $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Image Unable To Upload.';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'Add') {

					if (!empty($this->input->post())) {

						// if (empty($_FILES['image']['name'])) {
						// 	$this->form_validation->set_rules('image', 'Product Image ', 'required');
						// }

						if (empty($_FILES)) {
							$this->form_validation->set_rules('image', 'Product Image ', 'required');
						}

						if (empty($_FILES['front_view_image']['name'])) {
							$this->form_validation->set_rules('front_view_image', 'Product Front View Image ', 'required');
						}

						if (empty($_FILES['back_view_image']['name'])) {
							$this->form_validation->set_rules('back_view_image', 'Product Back View Image  ', 'required');
						}


						if (empty($_FILES['rside_view_image']['name'])) {
							$this->form_validation->set_rules('rside_view_image', 'Product Right View Image', 'required');
						}

						if (empty($_FILES['lside_view_image']['name'])) {
							$this->form_validation->set_rules('lside_view_image', 'Product Left View Image', 'required');
						}



						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							if (!empty($this->input->post('link1[]'))) {
								$youtube = $this->input->post('link1[]');
								$vdolinks = implode('###', $youtube);
							} else {
								$vdolinks = "";
							}

							$upload_status = "true";
							$upload_status_name = "Product Name";

							// $file_name = 'image';
							/*$countfiles = count($_FILES['image']['name']);
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
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size'] = 2003934; // max_size in kb
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
										$upload_status = "true";
									} else {
										$upload_status = "false";
									}
								}
							}
								$filename = implode(',', $data['filenames']);
							*/

							$front_view_image = FIleUpload('front_view_image', $_FILES['front_view_image']['name'], './uploads/' . $this->data->folder . '/', 'front');
							$back_view_image = FIleUpload('back_view_image', $_FILES['back_view_image']['name'], './uploads/' . $this->data->folder . '/', 'back');
							$rside_view_image = FIleUpload('rside_view_image', $_FILES['rside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'rside');
							$lside_view_image = FIleUpload('lside_view_image', $_FILES['lside_view_image']['name'], './uploads/' . $this->data->folder . '/', 'lside');

							if (empty($front_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Front View Image";
							}

							if (empty($back_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Back View Image";
							}

							if (empty($rside_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Right View Image";
							}

							if (empty($lside_view_image)) {
								$upload_status = "false";
								$upload_status_name = "Product Left View Image";
							}

							$top_view_image = '';
							if (!empty($_FILES['top_view_image']['name'])) {
								$top_view_image = FIleUpload('top_view_image', $_FILES['top_view_image']['name'], './uploads/' . $this->data->folder . '/', 'top');
								if (empty($top_view_image)) {
									$upload_status = "false";
									$upload_status_name = "Product Top View Image";
								}
							}
							$bottom_view_image = '';
							if (!empty($_FILES['bottom_view_image']['name'])) {
								$bottom_view_image = FIleUpload('bottom_view_image', $_FILES['bottom_view_image']['name'], './uploads/' . $this->data->folder . '/', 'bottom');
								if (empty($bottom_view_image)) {
									$upload_status = "false";
									$upload_status_name = "Product Bottom View Image";
								}
							}
							$close_view_image = '';
							if (!empty($_FILES['close_view_image']['name'])) {
								$close_view_image = FIleUpload('close_view_image', $_FILES['close_view_image']['name'], './uploads/' . $this->data->folder . '/', 'close');
								if (empty($close_view_image)) {
									$upload_status = "false";
									$upload_status_name = "Product Close View Image";
								}
							}




							$upload_status1 = "true";


							$upload_status2 = "true";
							if (!empty($_FILES['sizechart']['name'])) {
								$extension3 = pathinfo($_FILES['sizechart']['name'], PATHINFO_EXTENSION);
								$filename3 = time() . rand() . "." . $extension3;
								$upload_errors           = array();
								$config3['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config3['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config3['max_size']      = 4078;
								$config3['file_name']     = $filename3;
								$this->load->library('upload', $config3);
								$this->upload->initialize($config3);
								if (!$this->upload->do_upload('sizechart')) {
									$upload_status2 = 'false';
								}
							} else {
								$filename3 = "";
							}

							if (!empty($this->input->post('custom_sizechart'))) {
								if ($this->input->post('custom_sizechart') == 'true') {
									$filename3_details = base64_encode($this->input->post('sizechart_table'));
								}
							} else {
								$filename3_details = '';
							}
							// $imgs=array(
							// 	'front_view_image'=>$front_view_image,
							// 					'back_view_image'=>$back_view_image,
							// 					'rside_view_image'=>$rside_view_image,
							// 					'lside_view_image'=>$lside_view_image,
							// 					'top_view_image'=>$top_view_image,
							// 					'bottom_view_image'=>$bottom_view_image,
							// 					'close_view_image'=>$close_view_image,
							// );
							// var_dump($imgs);

							$upload_status3 = "true";
							if ($upload_status == "true") {
								if ($upload_status1 == 'true') {
									if ($upload_status2 == 'true') {
										if ($upload_status3 == 'true') {
											if (!empty($this->input->post('compare'))) {
												$compare = 'true';
											} else {
												$compare = 'false';
											}

											if (!empty($this->input->post('vendorupload'))) {
												$vendorid = $this->input->post('vendorupload');
												$uploadby = 'vendor';
											} else {
												$vendorid = '';
												$uploadby = 'admin';
											}

											if (!empty($this->input->post('quickview'))) {
												$quickview = 'true';
											} else {
												$quickview = 'false';
											}

											if (!empty($this->input->post('giftwrap'))) {
												$giftwrap = 'true';
											} else {
												$giftwrap = 'false';
											}



											if (!empty($this->input->post('is_status'))) {
												$is_status = 'true';
											} else {
												$is_status = 'false';
											}

											if (!empty($this->input->post('consult'))) {
												$consult = 'true';
											} else {
												$consult = 'false';
											}

											if (!empty($this->input->post('complimentary'))) {
												$complimentary = 'true';
											} else {
												$complimentary = 'false';
											}

											if (!empty($this->input->post('combostatus'))) {
												$combostatus = 'true';
											} else {
												$combostatus = 'false';
											}


											if (!empty($this->input->post('prebook_avl'))) {
												$prebook_avl = 'true';
											} else {
												$prebook_avl = 'false';
											}

											if (!empty($this->input->post('laundry_avl'))) {
												$laundry_avl = 'true';
											} else {
												$laundry_avl = 'false';
											}

											if (!empty($this->input->post('modalinfostatus'))) {
												$modalinfostatus = 'true';
											} else {
												$modalinfostatus = 'false';
											}
											if (!empty($this->input->post('productattr[]'))) {
												$productAttr = implode(',', $this->input->post('productattr[]'));
											} else {
												$productAttr = "";
											}
											if (!empty($this->input->post('expertattr[]'))) {
												$expertAttr = implode(',', $this->input->post('expertattr[]'));
											} else {
												$expertAttr = "";
											}
											$insertData = [
												'product_code' => $this->input->post('product_code'),
												'name' => $this->input->post('name'),
												'title' => $this->input->post('title'),
												'purchase_price' => $this->input->post('purchase_price'),
												'base_price' => $this->input->post('base_price'),
												'expected_profit' => $this->input->post('expected_profit'),
												'min_sell_price' => $this->input->post('min_sell_price'),
												'mrp' => $this->input->post('mrp'),
												'reg_sell_price' => $this->input->post('reg_sell_price'),
												'margin' => $this->input->post('margin'),
												'cgst' => $this->input->post('cgst'),
												'sgst' => $this->input->post('sgst'),
												'gst' => $this->input->post('gst'),
												'royal_amt' => $this->input->post('royal_amt'),
												'royal_clubcash' => $this->input->post('royal_clubcash'),
												'hsn' => $this->input->post('hsn'),
												'unit' => $this->input->post('unit'),
												'weight' => $this->input->post('weight'),
												'category' => $this->input->post('category'),
												'sub_category' => $this->input->post('subcategory'),
												'brand_id' => $this->input->post('brand'),
												'subbrand_id' => $this->input->post('subbrand'),
												'availability' => $this->input->post('avaliablity'),
												'stock' => $this->input->post('stock'),
												'max_qty' => $this->input->post('maxqty'),
												'alert_qty' => $this->input->post('alertqty'),
												// 'image1' => $filename,
												'short_desc' => $this->input->post('shortdescription'),
												'long_desc' => $this->input->post('longdescription'),
												'launch_time' => $this->input->post('launchtime'),
												'pack_of' => $this->input->post('packof'),
												'refund_policy' => $this->input->post('refundpolicy'),
												'compare' => $compare,
												'quick_view' => $quickview,
												'youtube_link1' => $vdolinks,
												'gift_wrap' => $giftwrap,
												'bar_code' => $this->input->post('barcode'),
												'sizechart_type' => $this->input->post('sizechart_type'),
												'sizechart_image' => $filename3,
												'size_chart' => $filename3_details,
												'modalinfo_status' => $modalinfostatus,
												'modalinfo' => base64_encode($this->input->post('modal_info')),
												'add_url' => $this->input->post('additionalurl'),
												'seo_keyword' => $this->input->post('seokeyword'),
												'meta_desc' => $this->input->post('metadescription'),
												'height' => $this->input->post('height'),
												'width' => $this->input->post('width'),
												'length' => $this->input->post('length'),
												'skuid' => $this->input->post('skuid'),
												'cancel_status' => $this->input->post('cancel'),
												'refund_status' => $this->input->post('return_refund'),
												'procurement_sla' => $this->input->post('procurementsla'),
												'exchange_status' => $this->input->post('exchange_avl'),
												'expertlink' => $this->input->post('expertlink'),
												'chat_consult' => $consult,
												'uploaded_by' => $uploadby,
												'is_complimentary' => $complimentary,
												'combo_status' => $combostatus,
												'prebook_status' => $prebook_avl,
												'prebook_amt' => $this->input->post('prebook_amt'),
												'product_details' => $productAttr,
												'laundry_tips' => $laundry_avl,
												'expert_advice' => $expertAttr,
												'is_status' => $is_status,
												'created_at' => $this->data->timestamp,
												'modified_at' => $this->data->timestamp,
												'front_view_image' => $front_view_image,
												'back_view_image' => $back_view_image,
												'rside_view_image' => $rside_view_image,
												'lside_view_image' => $lside_view_image,
												'top_view_image' => $top_view_image,
												'bottom_view_image' => $bottom_view_image,
												'close_view_image' => $close_view_image,
											];
											// $insertData = $this->security->xss_clean($insertData);
											// if ($this->db->insert($this->data->table, $insertData)) {
											if ($this->Product_model->inserData($this->data->table, $insertData)) {

												$output['res'] = 'success';
												$output['msg'] = 'Data Added Successfully.';

												$product_id = $this->db->insert_id();
												$size = $this->input->post('p_size[]');
												$p_sizenumeric = $this->input->post('p_sizenumeric[]');
												$color = $this->input->post('p_color[]');
												$unit = $this->input->post('p_unit[]');
												$weight = $this->input->post('p_weight[]');
												$mrp = $this->input->post('p_mrp[]');
												$offer_price = $this->input->post('p_price[]');
												$avaliability = $this->input->post('avaliability[]');
												$stock = $this->input->post('stock[]');
												$baar_code = $this->input->post('baar_code[]');
												$length = $this->input->post('v_length[]');
												$width = $this->input->post('v_width[]');
												$height = $this->input->post('v_height[]');

												if (!empty($size)) {
													$dataadd = [];
													$i = 0;
													foreach ($size as $each) {
														$adddata = [
															'product_id' => $product_id,
															'size' => $each,
															'numeric_size' => $p_sizenumeric,
															'color' => $color[$i],
															'unit' => $unit[$i],
															'weight' => $weight[$i],
															'mrp' => $mrp[$i],
															'offer_price' => $offer_price[$i],
															'stock' => $stock[$i],
															'availability' => $avaliability[$i],
															'barcode' => $baar_code[$i],
															'length' => $length[$i],
															'width' => $width[$i],
															'height' => $height[$i]
														];
														$dataadd[] = $adddata;
													}
													// $this->db->insert_batch('product_variant', $dataadd);
													$this->Product_model->inserBatchData('product_variant', $dataadd);
												}
											} else {
												$output['msg'] = 'Something went wrong in Data Saving.';
											}
										} else {
											$output['msg'] = 'Manufacturer Logo Unable To Upload';
										}
									} else {
										$output['msg'] = 'Size Chart Unable To Upload';
									}
								} else {
									$output['msg'] = 'Audio Unable To Upload';
								}
							} else {
								$output['msg'] = $$upload_status_name . ' Unable To Upload';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UploadExcel') {
					if (!empty($this->input->post())) {

						$this->load->library('excel');


						if (empty($_FILES['excelfile']['name'])) {
							$output['msg'] = 'Excel File Is Required';
						} else if (!in_array($_FILES["excelfile"]["type"], $this->excel->allowedFileType)) {
							$output['msg'] = 'Invalid Excel File';
						} else {

							$fileInfo = $_FILES["excelfile"]["name"];
							$newFileName = "Product-" . time() . rand(100, 900) . "." . pathinfo($_FILES['excelfile']['name'], PATHINFO_EXTENSION);
							$fileDirectory = "./uploads/excel/";
							$inputFileName = $fileDirectory . $newFileName;

							$config['upload_path'] = $fileDirectory;
							$config['allowed_types'] = 'xlsx|xls';
							$config['max_size'] = 100000000;
							$config['file_name'] = $newFileName;

							$this->load->library('upload', $config);
							$this->upload->do_upload('excelfile');

							// var_dump($inputFileName);
							// die(); 
							$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
							$objReader = PHPExcel_IOFactory::createReader($inputFileType);
							$objReader->setReadDataOnly(true);
							$objPHPExcel = $objReader->load($inputFileName);
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
							$highestRow = $objWorksheet->getHighestRow();
							$highestColumn = $objWorksheet->getHighestColumn();
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							// echo $highestRow;
							// die(); 
							if ($highestRow <= 1 or $highestColumnIndex <= 1) {
								$output['msg'] = 'Empty Excel File.';
							} else {
								$insertData = [];
								for ($row = 2; $row <= $highestRow - 1; $row++) {
									$srno = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
									$vendor = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();
									$brand = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
									$subbrand = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
									$category = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();
									$subcategory = $objWorksheet->getCellByColumnAndRow(5, $row)->getValue();
									$cosubcategory = $objWorksheet->getCellByColumnAndRow(6, $row)->getValue();
									$product_code = $objWorksheet->getCellByColumnAndRow(7, $row)->getValue();
									$hsn_code = $objWorksheet->getCellByColumnAndRow(8, $row)->getValue();
									$bar_code = $objWorksheet->getCellByColumnAndRow(9, $row)->getValue();
									$sku_id = $objWorksheet->getCellByColumnAndRow(10, $row)->getValue();
									$productname = $objWorksheet->getCellByColumnAndRow(11, $row)->getValue();
									$title = $objWorksheet->getCellByColumnAndRow(12, $row)->getValue();
									$launchtime = $objWorksheet->getCellByColumnAndRow(13, $row)->getValue();
									$packof = $objWorksheet->getCellByColumnAndRow(14, $row)->getValue();
									$availability = $objWorksheet->getCellByColumnAndRow(15, $row)->getValue();
									$short_desc = $objWorksheet->getCellByColumnAndRow(16, $row)->getValue();
									$long_desc = $objWorksheet->getCellByColumnAndRow(17, $row)->getValue();
									$product_img = $objWorksheet->getCellByColumnAndRow(18, $row)->getValue();
									$size_chart_img = $objWorksheet->getCellByColumnAndRow(19, $row)->getValue();
									$stock_qty = $objWorksheet->getCellByColumnAndRow(20, $row)->getValue();
									$max_sell_qty = $objWorksheet->getCellByColumnAndRow(21, $row)->getValue();
									$stock_alert_qty = $objWorksheet->getCellByColumnAndRow(22, $row)->getValue();
									$unit = $objWorksheet->getCellByColumnAndRow(23, $row)->getValue();
									$weight = $objWorksheet->getCellByColumnAndRow(24, $row)->getValue();
									$length = $objWorksheet->getCellByColumnAndRow(25, $row)->getValue();
									$width = $objWorksheet->getCellByColumnAndRow(26, $row)->getValue();
									$height = $objWorksheet->getCellByColumnAndRow(27, $row)->getValue();
									$purchase_price = $objWorksheet->getCellByColumnAndRow(28, $row)->getValue();
									$cgst = $objWorksheet->getCellByColumnAndRow(29, $row)->getValue();
									$sgst = $objWorksheet->getCellByColumnAndRow(30, $row)->getValue();
									$gst = $objWorksheet->getCellByColumnAndRow(31, $row)->getValue();
									$base_price = $objWorksheet->getCellByColumnAndRow(32, $row)->getValue();
									$expected_profit = $objWorksheet->getCellByColumnAndRow(33, $row)->getValue();
									$min_sell_price = $objWorksheet->getCellByColumnAndRow(34, $row)->getValue();
									$mrp = $objWorksheet->getCellByColumnAndRow(35, $row)->getValue();
									$reg_sell_price = $objWorksheet->getCellByColumnAndRow(36, $row)->getValue();
									$margin = $objWorksheet->getCellByColumnAndRow(37, $row)->getValue();
									$prebooking_avl = $objWorksheet->getCellByColumnAndRow(38, $row)->getValue();
									$prebooking_amt = $objWorksheet->getCellByColumnAndRow(39, $row)->getValue();
									$sell_price_for_royal = $objWorksheet->getCellByColumnAndRow(40, $row)->getValue();
									$royal_clubcash = $objWorksheet->getCellByColumnAndRow(41, $row)->getValue();
									$cancel_status = $objWorksheet->getCellByColumnAndRow(42, $row)->getValue();
									$ret_ref_status = $objWorksheet->getCellByColumnAndRow(43, $row)->getValue();
									$exchange_status = $objWorksheet->getCellByColumnAndRow(44, $row)->getValue();
									$procurement_sla = $objWorksheet->getCellByColumnAndRow(45, $row)->getValue();
									$seo_keyword = $objWorksheet->getCellByColumnAndRow(46, $row)->getValue();
									$additionalurl = $objWorksheet->getCellByColumnAndRow(47, $row)->getValue();
									$meta_desc = $objWorksheet->getCellByColumnAndRow(48, $row)->getValue();
									$fashion_expert_link = $objWorksheet->getCellByColumnAndRow(49, $row)->getValue();
									$tags = $objWorksheet->getCellByColumnAndRow(50, $row)->getValue();
									$gift_wrap = $objWorksheet->getCellByColumnAndRow(51, $row)->getValue();
									$quick_view = $objWorksheet->getCellByColumnAndRow(52, $row)->getValue();
									$compare = $objWorksheet->getCellByColumnAndRow(53, $row)->getValue();
									$product_display = $objWorksheet->getCellByColumnAndRow(54, $row)->getValue();
									$chat_for_consult = $objWorksheet->getCellByColumnAndRow(55, $row)->getValue();
									$complementry_product = $objWorksheet->getCellByColumnAndRow(56, $row)->getValue();
									$combo_eligible = $objWorksheet->getCellByColumnAndRow(57, $row)->getValue();

									$vendor = trim($vendor);
									if (!empty($vendor) and ($vendor != 'NA')) {
										// $vendor_details = $this->db->get_where('tbl_vendor', ['name' => $vendor])->row();
										$vendor_details = $this->Product_model->getData('tbl_vendor', ['name' => $vendor], $vendor);
										if (!empty($vendor_details)) {
											$vendor_id = $vendor_details->id;
										} else {
											$vendor_id = '';
										}
									} else {
										$vendor_id = 'NA';
									}

									$brand = trim($brand);
									if (!empty($brand)) {
										// $brand_details = $this->db->get_where('brand', ['name' => $brand])->row();
										$brand_details = $this->Product_model->getData('brand', ['name' => $brand], $brand);
										if (!empty($brand_details)) {
											$brand_id = $brand_details->id;
										} else {
											$brand_id = '';
										}
									} else {
										$brand_id = '';
									}

									$subbrand = trim($subbrand);
									if (!empty($subbrand)) {
										// $subbrand_details = $this->db->get_where('sub_brand', ['name' => $subbrand])->row();
										$subbrand_details = $this->Product_model->getData('sub_brand', ['name' => $subbrand], $subbrand);
										if (!empty($subbrand_details)) {
											$subbrand_id = $subbrand_details->id;
										} else {
											$subbrand_id = '';
										}
									} else {
										$subbrand_id = '';
									}

									$category = trim($category);
									if (!empty($category)) {
										// $category_details = $this->db->get_where('categories', ['name' => $category])->row();
										$category_details = $this->Product_model->getData('categories', ['name' => $category], $category);

										if (!empty($category_details)) {
											$category_id = $category_details->id;
										} else {
											$category_id = '';
										}
									} else {
										$category_id = '';
									}

									$subcategory = trim($subcategory);
									if (!empty($subcategory)) {
										// $subcategory_details = $this->db->get_where('sub_category', ['name' => $subcategory])->row();
										$subcategory_details = $this->Product_model->getData('sub_category', ['name' => $subcategory], $subcategory);
										if (!empty($subcategory_details)) {
											$subcategory_id = $subcategory_details->id;
										} else {
											$subcategory_id = '';
										}
									} else {
										$subcategory_id = '';
									}

									$cosubcategory = trim($cosubcategory);
									if (!empty($cosubcategory)) {
										$co_subcategory_details = $this->Product_model->getData('co_subcategory', ['name' => $cosubcategory], $cosubcategory);
										if (!empty($co_subcategory_details)) {
											$co_subcategory_id = $co_subcategory_details->id;
										} else {
											$co_subcategory_id = '';
										}
									} else {
										$co_subcategory_id = '';
									}

									$compare = trim($compare);
									if ($compare == 'true' || $compare == 'True') {
										$compare = 'true';
									} else {
										$compare = 'false';
									}

									$exchange_status = trim($exchange_status);
									if ($exchange_status == 'true' || $exchange_status == 'True') {
										$exchange_status = 'true';
									} else {
										$exchange_status = 'false';
									}

									$cancel_status = trim($cancel_status);
									if ($cancel_status == 'true' || $cancel_status == 'True') {
										$cancel_status = 'true';
									} else {
										$cancel_status = 'false';
									}

									$ret_ref_status = trim($ret_ref_status);
									if ($ret_ref_status == 'true' || $ret_ref_status == 'True') {
										$ret_ref_status = 'true';
									} else {
										$ret_ref_status = 'false';
									}

									$quick_view = trim($quick_view);
									if ($quick_view == 'true' || $quick_view == 'True') {
										$quick_view = 'true';
									} else {
										$quick_view = 'false';
									}

									$gift_wrap = trim($gift_wrap);
									if ($gift_wrap == 'true' || $gift_wrap == 'True') {
										$gift_wrap = 'true';
									} else {
										$gift_wrap = 'false';
									}

									$chat_for_consult = trim($chat_for_consult);
									if ($chat_for_consult == 'true' || $chat_for_consult == 'True') {
										$chat_for_consult = 'true';
									} else {
										$chat_for_consult = 'false';
									}



									$insertBulk = [
										'product_code' => $product_code,
										'name' => $productname,
										'title' => $title,
										'purchase_price' => $purchase_price,
										'base_price' => $base_price,
										'expected_profit' => $expected_profit,
										'min_sell_price' => $min_sell_price,
										'mrp' => $mrp,
										'reg_sell_price' => $reg_sell_price,
										'margin' => $margin,
										'cgst' => $cgst,
										'sgst' => $sgst,
										'gst' => $gst,
										'royal_amt' => $sell_price_for_royal,
										'royal_clubcash' => $royal_clubcash,
										'hsn' => $hsn_code,
										'unit' => $unit,
										'weight' => $weight,
										'category' => $category_id,
										'sub_category' => $subcategory_id,
										'co_subcategory' => $co_subcategory_id,
										'brand_id' => $brand_id,
										'subbrand_id' => $subbrand_id,
										'availability' => $availability,
										'stock' => $stock_qty,
										'max_qty' => $max_sell_qty,
										'alert_qty' => $stock_alert_qty,
										'image1' => $product_img,
										'short_desc' => $short_desc,
										'long_desc' => $long_desc,
										'launch_time' => $launchtime,
										'pack_of' => $packof,
										'compare' => $compare,
										'quick_view' => $quick_view,
										'gift_wrap' => $gift_wrap,
										'bar_code' => $bar_code,
										'sizechart_image' => $size_chart_img,
										'add_url' => $additionalurl,
										'seo_keyword' => $seo_keyword,
										'meta_desc' => $meta_desc,
										'height' => $height,
										'width' => $width,
										'length' => $length,
										'skuid' => $sku_id,
										'cancel_status' => $cancel_status,
										'refund_status' => $ret_ref_status,
										'procurement_sla' => $procurement_sla,
										'exchange_status' => $exchange_status,
										'expertlink' => $fashion_expert_link,
										'chat_consult' => $chat_for_consult,
										'vendor_id' => $vendor_id,
										'is_complimentary' => $complementry_product,
										'combo_status' => $combo_eligible,
										'prebook_status' => $prebooking_avl,
										'prebook_amt' => $prebooking_amt,
										'is_status' => $product_display,
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp,
									];
									array_push($insertData, $insertBulk);
								}

								if (!empty($insertData)) {

									if ($this->Product_model->inserBatchData('products', $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Uploaded Successfully.';
									} else {
										$output['msg'] = 'Something Went Wrong';
									}
								} else {
									$output['msg'] = 'Data Is Already Saved Please Enter Fresh Data.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateImage') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							// $query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							// if ($query->num_rows()) {
							// $data['list'] = $query->result();
							$query = $this->Product_model->getData($this->data->table, ['id' => $this->input->post("id")]);
							if (!empty($query)) {

								$data['list'] = $query;
								$this->form_validation->set_rules('id', 'Product Id', 'required');

								if (empty($_FILES['image']['name'])) {
									$this->form_validation->set_rules('image', 'Product Image', 'required');
								} else {
									$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
									$filename1 = time() . rand() . "." . $extension;
								}


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$upload_status1 = "true";
									if (!empty($_FILES['image']['name'])) {
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename1;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload('image')) {
											$upload_status1 = 'false';
										}
									}

									if ($upload_status1 == 'true') {
										$updateData = [
											$this->input->post('column') => $filename1,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										// $result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										$result = $this->Product_model->updateData($this->data->table, $updateData, ['id' => $data['list'][0]->id]);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateImageData') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							// $query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							// if ($query->num_rows()) {
							// 	$data['list'] = $query->result();
							$query = $this->Product_model->getData($this->data->table, ['id' => $this->input->post("id")]);
							if (!empty($query)) {
								$data['list'] = $query;
								$this->form_validation->set_rules('id', 'Product Id', 'required');
								// $this->form_validation->set_rules('imagename', 'Image', 'required');
								$this->form_validation->set_rules('image_key', 'Image Key', 'required');


								if (empty($_FILES['icon']['name'])) {
									$this->form_validation->set_rules('icon', 'Product Image', 'required');
								} else {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename1 = time() . rand() . "." . $extension;
								}


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$imagename = $this->input->post("imagename");
									$editid = $this->input->post("id");
									$image_key = $this->input->post("image_key");

									$upload_status = "true";


									$ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand(10000, 99999) . "." . $ext;
									$config['upload_path'] = './uploads/product/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size'] = 8024; // In KB
									$filesize = $config['max_size'];
									$config['file_name'] = $filename;
									$this->load->library('upload', $config);

									if (!$this->upload->do_upload('icon')) {
										$upload_status = "false";
									}

									if ($upload_status == 'true') {
										// $query = $this->db->get_where('products', array('id' => $editid));
										// $userdata = $query->result();
										$userdata = $this->Product_model->getData('products', array('id' => $editid));
										if (!empty($imagename)) {
											unlinkFile('./uploads/product/' . $imagename);
										}
										$data_arr = array(
											$image_key => $filename,
											"modified_at" => $this->data->timestamp
										);
										$updateData = $this->security->xss_clean($data_arr);
										// $result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										$result = $this->Product_model->updateData($this->data->table, $updateData, array('id' => $editid));
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateImageData_old') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							// $query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							// if ($query->num_rows()) {
							// 	$data['list'] = $query->result();
							$query = $this->Product_model->getData($this->data->table, ['id' => $this->input->post("id")]);
							if (!empty($query)) {
								$data['list'] = $query;
								$this->form_validation->set_rules('id', 'Product Id', 'required');
								$this->form_validation->set_rules('imagename', 'Image', 'required');


								if (empty($_FILES['icon']['name'])) {
									$this->form_validation->set_rules('icon', 'Product Image', 'required');
								} else {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename1 = time() . rand() . "." . $extension;
								}


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$imagename = $this->input->post("imagename");
									$editid = $this->input->post("id");

									$upload_status = "true";
									$ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand(10000, 99999) . "." . $ext;
									$config['upload_path'] = './uploads/product/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size'] = 8024; // In KB
									$filesize = $config['max_size'];
									$config['file_name'] = $filename;
									$this->load->library('upload', $config);

									if (!$this->upload->do_upload('icon')) {
										$upload_status = "false";
									}

									if ($upload_status == 'true') {
										// $query = $this->db->get_where('products', array('id' => $editid));
										// $userdata = $query->result();
										$userdata = $this->Product_model->getData('products', array('id' => $editid));
										unlinkFile('./uploads/product/' . $imagename);
										$icons_str = $userdata[0]->image1;
										$icons_str = str_replace($imagename, $filename, $icons_str);
										$data_arr = array(
											"image1" => $icons_str,
											"modified_at" => $this->data->timestamp
										);
										$updateData = $this->security->xss_clean($data_arr);
										// $result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										$result = $this->Product_model->updateData($this->data->table, $updateData, array('id', $data['list'][0]->id));
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateVariantImage') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'Id is required.';
						} else {
							// $query = $this->db->where('id', $this->input->post("id"))->get('product_variant');
							// if ($query->num_rows()) {
							// 	$data['list'] = $query->result();
							$query = $this->Product_model->getData('product_variant', ['id' => $this->input->post("id")]);
							if (!empty($query)) {
								$data['list'] = $query;
								$this->form_validation->set_rules('product_id', 'Product Id', 'required');
								$this->form_validation->set_rules('id', 'Variant Id', 'required');
								$this->form_validation->set_rules('imagename', 'Image', 'required');


								if (empty($_FILES['icon']['name'])) {
									$this->form_validation->set_rules('icon', 'Image', 'required');
								} else {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename1 = time() . rand() . "." . $extension;
								}


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$imagename = $this->input->post("imagename");
									$product_id = $this->input->post("product_id");
									$variant_id = $this->input->post("id");

									$upload_status = "true";
									$ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand(10000, 99999) . "." . $ext;
									$config['upload_path'] = './uploads/product/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size'] = 8024; // In KB
									$filesize = $config['max_size'];
									$config['file_name'] = $filename;
									$this->load->library('upload', $config);

									if (!$this->upload->do_upload('icon')) {
										$upload_status = "false";
									}
									if ($upload_status == 'true') {
										// $query = $this->db->get_where('product_variant', array('id' => $variant_id, 'product_id' => $product_id));
										// $userdata = $query->result();
										$userdata =  $this->Product_model->getData('product_variant', ['id' => $variant_id, 'product_id' => $product_id]);
										unlinkFile('./uploads/product/' . $imagename);
										$icons_str = $userdata[0]->variant_img;
										$icons_str = str_replace($imagename, $filename, $icons_str);
										$data_arr = array(
											"variant_img" => $icons_str,
											"modified_at" => $this->data->timestamp
										);
										$updateData = $this->security->xss_clean($data_arr);
										// $result = $this->db->where(['id' => $variant_id, 'product_id' => $product_id])->update('product_variant', $updateData);
										$result = $this->Product_model->updateData('product_variant', $updateData, ['id' => $variant_id, 'product_id' => $product_id]);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Unable To Update.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			if (isset($_GET['vendor'])) {
				$vendor_id = $_GET['vendor'];
				if ($vendor_id != "all") {
					$where = ['vendor_id' => $vendor_id];
					// $query = $this->db->order_by("id", "DESC")->get_where($this->data->table, $where);
					$query = $this->Product_model->getData($this->data->table, $where);
				} else {
					// $query = $this->db->order_by("id", "DESC")->get($this->data->table);
					$query = $this->Product_model->getData($this->data->table);
				}
			} else {
				// $query = $this->db->order_by("id", "DESC")->get($this->data->table);
				$query = $this->Product_model->getData($this->data->table);
			}
			$data['activepage'] = 'ManageProduct';

			// $data["list"] = $query->result();
			$data["list"] = $query;
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Combo
	public function ManageCombo()
	{
		$this->data->table = 'combo';
		$this->data->key = 'Combo';
		$this->data->folder = 'product';
		$output['res'] = 'error';

		$allproduct = $this->db->get_where('products', array('is_status' => 'true', 'is_complimentary' => 'false'))->result();


		foreach ($allproduct as $product) {
			if (!empty($product->vendor_id)) {
				$vendor = $this->db->get_where('tbl_vendor', array('id' => $product->vendor_id))->row();
				if (!empty($vendor)) {
					$product->vendor = $vendor->shop_name;
				} else {
					$product->vendor = "Vendor Not Found";
				}
			} else {
				$product->vendor = "Admin";
			}
		}

		$data['productlist'] = $allproduct;
		$data['combolist'] = $this->db->order_by("id", "DESC")->get($this->data->table)->result();
		$data['vendorlist'] = $this->db->order_by("id", "DESC")->get_where('tbl_vendor', array('is_status' => 'true'))->result();
		$data['categorylist'] = $this->db->order_by("id", "DESC")->get_where('categories', array('is_status' => 'true'))->result();
		$data['subcategorylist'] = $this->db->order_by("id", "DESC")->get_where('sub_category', array('is_status' => 'true'))->result();
		$data['brandlist'] = $this->db->order_by("id", "DESC")->get_where('brand', array('is_status' => 'true'))->result();
		$data['designlist'] = $this->db->order_by("id", "DESC")->get_where('tbl_design', array('is_status' => 'true'))->result();
		$data['neckstylelist'] = $this->db->order_by("id", "DESC")->get_where('tbl_neckstyle', array('is_status' => 'true'))->result();
		$data['clothtypelist'] = $this->db->order_by("id", "DESC")->get_where('tbl_clothtype', array('is_status' => 'true'))->result();
		$data['comboitem'] = $this->db->order_by("id", "DESC")->get_where('combo_item', ['is_status' => 'false', 'expert_id' => $this->userData->id])->result();

		$data['listcombos'] = $this->db->order_by("id", "DESC")->get_where('tbl_combo', ['expert_id' => $this->userData->id])->result();

		if ($this->uri->segment(3) == true) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(5) == true) {
				$id = $this->uri->segment(4);
				if ($action == 'DeleteImage') {
					$imagename = $this->uri->segment(5);

					$query = $this->db->get_where('tbl_combo', array('id' => $id));
					$data = $query->result();
					$icon_arr = $data[0]->image;

					$new_arr = str_replace($imagename, '', $icon_arr);

					$new_arr = explode(',', $new_arr);

					$arr = [];
					foreach ($new_arr as $each) {
						if (!empty($each)) {
							array_push($arr, $each);
						}
					}

					$arr = implode(',', $arr);

					// echo $arr;

					if (!empty($id)) {
						$data_arr = array(
							"image" => $arr,
							"modified_at" => $this->data->timestamp,
						);

						if ($this->db->where('id', $id)->update('tbl_combo', $data_arr)) {
							$filepath = './uploads/product/' . $imagename;
							if (file_exists($filepath)) {
								unlink($filepath);
							}
							echo "success";
						}
					}
				}
			} elseif ($this->uri->segment(4) == true) {
				$id = $this->uri->segment(4);
				if ($action == 'ComboImage') {
					$query = $this->db->get_where('tbl_combo', array('id' => $id));
					if ($query->num_rows() > 0) {

						$imageresult = $query->row();

						$icons = explode(',', $imageresult->image);
						$data["list"] = $icons;
						$data["datas"] = $imageresult;
						$data["action"] = "ViewImageCombo";

						$this->load->view('Expert/UpdateData', $data);
					} else {
						echo "Invalid Product";
					}
				} elseif ($action == "ModifyCombo") {

					$query = $this->db->get_where('tbl_combo', array('id' => $id));
					if ($query->num_rows() > 0) {

						$list = $query->row();
						$query2 = $this->db->get_where('combo_item', array('combo_id' => $id))->result();

						$data["list"] = $list;
						$data["comboitem"] = $query2;
						$data["action"] = "ModifyCombo";
						$this->load->view('Expert/UpdateData', $data);
					} else {
						echo "Invalid Look";
					}
				} elseif ($action == 'EditComboImage') {
					$imagename = $this->input->post('image');

					$query = $this->db->get_where('tbl_combo', array('id' => $id));
					if ($query->num_rows() > 0) {

						$data = $query->result();
						$icons = explode(',', $data[0]->image);
						$data["list"] = $data;
						$data["imagename"] = $imagename;
						$data["icons"] = $icons;
						$data["action"] = "EditComboImage";
						$this->load->view('Expert/UpdateData', $data);
					}
				} elseif ($action == "ModifyCheckFilterProduct") {
					if (!empty($this->input->post())) {

						$this->form_validation->set_rules('brand', 'Brand', 'trim');
						$this->form_validation->set_rules('subcategory', 'Sub-Category', 'trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$brand = $this->input->post('brand');

							$subcategory = $this->input->post('subcategory');

							$basic_query = "SELECT * FROM `products` where is_status ='true' and combo_status='true'";
							if (!empty($subcategory)) {
								$basic_query .= " AND  FIND_IN_SET(sub_category,'" . $subcategory . "')";
							}

							if (!empty($brand)) {
								$basic_query .= " AND  FIND_IN_SET(brand_id,'" . $brand . "')";
							}

							$basic_query .= "order by id desc";

							$query  = $this->db->query($basic_query);

							if ($query->num_rows() > 0) {
								$products = $query->result();
								$output['res'] = "success";
								$data["products"] = $products;
								$data["comboid"] = $id;
								$data["action"] = "ModifyForCombo";
								$this->load->view('Expert/UpdateData', $data);
							} else {
								echo "error";
								exit;
							}
						}
					} else {
						echo "error";
						exit;
					}
				} elseif ($action == 'GetSubcat') {

					$query = $this->db->get_where('sub_category', array('category_id' => $id));

					$data = $query->result();
					$data["list"] = $data;

					$data["action"] = "subcategory";
					$this->load->view('Expert/UpdateData', $data);
				} elseif ($action == 'ViewProduct') {

					$query = $this->db->get_where('products', array('id' => $id));
					if ($query->num_rows() > 0) {
						$this->data->pageTitle = "Product Detail";

						$data["list"] = $query->row();
						$data['activepage'] = 'ManageProduct';
						$this->load->view('Exprt/ProductDetail', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				}
			} else {
				if ($action == "Add") {
					if (!empty($this->input->post())) {

						if (empty($_FILES['image']['name'])) {
							$this->form_validation->set_rules('image', 'Combo Image ', 'required');
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = "true";

							$file_name = 'image';
							$countfiles = count($_FILES['image']['name']);
							for ($i = 0; $i < $countfiles; $i++) {
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
									$config['max_size'] = 8024; // max_size in kb
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
										$upload_status = "true";
									} else {
										$upload_status = "false";
									}
								}
							}
							$filename = implode(',', $data['filenames']);

							if ($upload_status == "true") {
								$insertData = [
									'name' => $this->input->post('name'),
									'image' => $filename,
									'pro_id1' => $this->input->post('product1'),
									'pro_id2' => $this->input->post('product2'),
									'pro_id3' => $this->input->post('product3'),
									'pro_id4' => $this->input->post('product4'),
									'pro_id5' => $this->input->post('product5'),
									'pro_id6' => $this->input->post('product6'),
									'pro_id7' => $this->input->post('product7'),
									'pro_id8' => $this->input->post('product8'),
									'pro_id9' => $this->input->post('product9'),
									'pro_id10' => $this->input->post('product10'),
									'pro_id11' => $this->input->post('product11'),
									'skuid' => $this->input->post('skuid'),
									'total_price' => $this->input->post('totalprice'),
									'off_price' => $this->input->post('offerprice'),
									'long_desc' => $this->input->post('longdescription'),
									'short_desc' => $this->input->post('shortdescription'),
									'expert_id' => $this->userData->id,
									'verify_status' => 'pending',
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Successfully Added';
								} else {
									$output['msg'] = 'Something Went Wrong  ';
								}
							} else {
								$output['msg'] = 'Look Image Unable To Upload ';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'getimage') {
					if (!empty($this->input->post('id'))) {
						$id = $this->input->post('id');
						$query = $this->db->get_where('products', array('id' => $id));
						if ($query->num_rows() > 0) {
							$row = $query->row();
							$images = explode(',', $row->image1);
							$arr = [];
							$sr = 1;
							foreach ($images as $each) {
								if ($sr == 1) {
									array_push($arr, $each);
								}
								$sr++;
							}

							$data["list"] = $arr;
							$data["row"] = $row;
							$data["action"] = "ViewImage";
							$this->load->view('Expert/UpdateData', $data);
						}
					}
				} elseif ($action == 'UpdateImageData') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Look Id', 'required');
								$this->form_validation->set_rules('imagename', 'Image', 'required');


								if (empty($_FILES['icon']['name'])) {
									$this->form_validation->set_rules('icon', 'Look Image', 'required');
								} else {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename1 = time() . rand() . "." . $extension;
								}


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$imagename = $this->input->post("imagename");
									$editid = $this->input->post("id");

									$upload_status = "true";

									$ext = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand(10000, 99999) . "." . $ext;
									$config['upload_path'] = './uploads/product/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size'] = 8024; // In KB
									$filesize = $config['max_size'];
									$config['file_name'] = $filename;
									$this->load->library('upload', $config);

									if (!$this->upload->do_upload('icon')) {
										$upload_status = "false";
									}

									if ($upload_status == 'true') {

										$query = $this->db->get_where('tbl_combo', array('id' => $editid));
										$userdata = $query->result();

										$icons_str = $userdata[0]->image;

										$icons_str = str_replace($imagename, $filename, $icons_str);

										$data_arr = array(
											"image" => $icons_str,
											"modified_at" => $this->data->timestamp
										);
										$updateData = $this->security->xss_clean($data_arr);
										$result = $this->db->where('id', $data['list'][0]->id)->update('tbl_combo', $updateData);
										if ($result) {
											$filepath = './uploads/product/' . $imagename;
											if (file_exists($filepath)) {
												unlink($filepath);
											}
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == "AddCombo") {
					$data['activepage'] = 'AddCombo';
					$this->load->view('Expert/AddCombo', $data);
				} elseif ($action == "CheckFilterProduct") {
					if (!empty($this->input->post())) {

						$this->form_validation->set_rules('brand', 'Brand', 'trim');
						$this->form_validation->set_rules('subcategory', 'Sub-Category', 'trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$brand = $this->input->post('brand');

							$subcategory = $this->input->post('subcategory');

							$basic_query = "SELECT * FROM `products` where is_status ='true' and combo_status='true'";
							if (!empty($subcategory)) {
								$basic_query .= " AND  FIND_IN_SET(sub_category,'" . $subcategory . "')";
							}

							if (!empty($brand)) {
								$basic_query .= " AND  FIND_IN_SET(brand_id,'" . $brand . "')";
							}

							$basic_query .= "order by id desc";

							$query  = $this->db->query($basic_query);

							if ($query->num_rows() > 0) {
								$products = $query->result();
								$output['res'] = "success";
								$data["products"] = $products;
								$data["action"] = "ProductForCombo";
								$this->load->view('Expert/UpdateData', $data);
							} else {
								echo "error";
								exit;
							}
						}
					} else {
						echo "error";
						exit;
					}
				} elseif ($action == "GetFilterProduct") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('category', 'Category', 'required|trim|numeric');
						$this->form_validation->set_rules('subcategory', 'Sub-Category', 'required|trim|numeric');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$category = $this->input->post('category');
							$subcategory = $this->input->post('subcategory');

							$query = $this->db->get_where('products', array('category' => $category, 'sub_category' => $subcategory, 'combo_status' => 'true'));

							if ($query->num_rows() > 0) {
								$products = $query->result();
								$output['res'] = "success";
								$data["products"] = $products;
								$data["action"] = "ProductForCombo";
								$output['html'] = $this->load->view('Expert/UpdateData', $data, true);
							} else {
								$output['res'] = "error";
								$output['msg'] = "No Products Found";
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Data Is Empty";
					}
					echo json_encode([$output]);
				} elseif ($action == "DesignWiseProduct") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('design', 'Design', 'required|trim|numeric');
						$this->form_validation->set_rules('neck', 'Neck Style', 'required|trim|numeric');
						$this->form_validation->set_rules('cloth', 'Cloth Type', 'required|trim|numeric');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$design = $this->input->post('design');
							$neck = $this->input->post('neck');
							$cloth = $this->input->post('cloth');

							$query = $this->db->get_where('products', array('designtype' => $design, 'neckstyle' => $neck, 'clothtype' => $cloth, 'combo_status' => 'true'));

							if ($query->num_rows() > 0) {
								$products = $query->result();
								$output['res'] = "success";
								$data["products"] = $products;
								$data["action"] = "ProductForCombo";
								$output['html'] = $this->load->view('Expert/UpdateData', $data, true);
							} else {
								$output['res'] = "error";
								$output['msg'] = "No Products Found";
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Data Is Empty";
					}
					echo json_encode([$output]);
				} elseif ($action == "AddComboItem") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('productid', 'Product', 'required|trim|numeric');
						$this->form_validation->set_rules('color', 'Color', 'required|trim');
						$this->form_validation->set_rules('size[]', 'Size', 'required|trim');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if ($this->db->get_where('combo_item', array('product_id' => $this->input->post('productid'), 'color' => $this->input->post('color'), 'expert_id' => $this->userData->id, 'is_status' => 'false'))->num_rows() > 0) {
								$output['res'] = 'error';
								$output['msg'] = 'Already Added.';
							} else {
								$insertData = [
									'product_id' => $this->input->post('productid'),
									'variant_id' => $this->input->post('variantid'),
									'color ' => $this->input->post('color'),
									'size ' => implode(",", $this->input->post('size')),
									'expert_id' => $this->userData->id,
									'is_status' => 'false',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert('combo_item', $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Data Is Empty";
					}
					echo json_encode([$output]);
				} elseif ($action == "ModifyComboItem") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('productid', 'Product', 'required|trim|numeric');
						$this->form_validation->set_rules('variant', 'Variant', 'required|trim|numeric');
						$this->form_validation->set_rules('comboid', 'Look Id', 'required|trim|numeric');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if ($this->db->get_where('combo_item', array('product_id' => $this->input->post('productid'), 'variant_id' => $this->input->post('variant'), 'expert_id' => $this->userData->id, 'combo_id' => $this->input->post('comboid')))->num_rows() > 0) {
								$output['res'] = 'error';
								$output['msg'] = 'Already Added.';
							} else {
								$insertData = [
									'product_id' => $this->input->post('productid'),
									'variant_id ' => $this->input->post('variant'),
									'expert_id' => $this->userData->id,
									'combo_id' => $this->input->post('comboid'),
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert('combo_item', $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Data Is Empty";
					}
					echo json_encode([$output]);
				} elseif ($action == "AddNewCombo") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Look Name', 'required|trim');
						$this->form_validation->set_rules('description', 'Look Description', 'required|trim');
						$this->form_validation->set_rules('beautytips', 'Beauty Tips', 'required|trim');
						$this->form_validation->set_rules('whycreated', 'Why Look Created', 'required|trim');
						$this->form_validation->set_rules('bodyshape', 'Body Shape', 'required|trim');
						$this->form_validation->set_rules('category', 'Category', 'required|trim|numeric');
						$this->form_validation->set_rules('subcategory', 'Subcategory', 'required|trim|numeric');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if ($this->db->get_where('combo_item', array('expert_id' => $this->userData->id, 'is_status' => 'false'))->num_rows() > 1) {

								$insertData = [
									'name' =>  $this->input->post('name'),
									'description ' => $this->input->post('description'),
									'beautytips ' => $this->input->post('beautytips'),
									'why_created ' => $this->input->post('whycreated'),
									'bodyshape ' => $this->input->post('bodyshape'),
									'category_id ' => $this->input->post('category'),
									'subcat_id ' => $this->input->post('subcategory'),
									'expert_id' => $this->userData->id,
									'approve_status' => 'approved',
									'is_status' => 'false',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert('tbl_combo', $insertData)) {
									$lastid = $this->db->insert_id();

									$updatedata = [
										'combo_id'  => $lastid,
										'is_status' => 'true'
									];
									if ($this->db->where(['expert_id' => $this->userData->id, 'is_status' => 'false'])->update('combo_item', $updatedata)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Look Saving.';
									}
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {

								$output['res'] = 'error';
								$output['msg'] = 'Look Can Have Atleast 2 Products';
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Data Cannot Be Empty";
					}
					echo json_encode([$output]);
				} elseif ($action == "ModifyComboDetails") {
					if (!empty($this->input->post('id'))) {

						$this->form_validation->set_rules('id', 'Look Id', 'required|trim|numeric');
						$this->form_validation->set_rules('name', 'Look Name', 'required|trim');
						$this->form_validation->set_rules('description', 'Look Description', 'required|trim');
						$this->form_validation->set_rules('beautytips', 'Beauty Tips', 'required|trim');
						$this->form_validation->set_rules('whycreated', 'Why Look Created', 'required|trim');
						$this->form_validation->set_rules('bodyshape', 'Body Shape', 'required|trim');
						$this->form_validation->set_rules('category', 'Category', 'required|trim|numeric');
						$this->form_validation->set_rules('subcategory', 'Subcategory', 'required|trim|numeric');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$id = $this->input->post('id');
							$data_arr = array(
								'name' =>  $this->input->post('name'),
								'description ' => $this->input->post('description'),
								'beautytips ' => $this->input->post('beautytips'),
								'why_created ' => $this->input->post('whycreated'),
								'bodyshape ' => $this->input->post('bodyshape'),
								'category_id ' => $this->input->post('category'),
								'subcat_id ' => $this->input->post('subcategory'),
								"approve_status" => 'pending',
								"modified_at" => $this->data->timestamp
							);
							$updateData = $this->security->xss_clean($data_arr);
							if ($this->db->where('id', $id)->update('tbl_combo', $updateData)) {
								$output['res'] = "success";
								$output['msg'] = "Look Successfully Set To Approval Request";
							} else {
								$output['res'] = "error";
								$output['msg'] = "Something Went Wrong";
							}
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Look Id Is Required";
					}
					echo json_encode([$output]);
				} elseif ($action == "ChangeVariant") {
					if (!empty($this->input->post('id'))) {
						$id = $this->input->post('id');
						$query = $this->db->get_where('product_variant', array('id' => $id));
						if ($query->num_rows() > 0) {
							$list = $query->result();
							$output['res'] = "success";
							$data["list"] = $list;
							$data["action"] = "ChangeVariant";
							$output['html'] = $this->load->view('Expert/UpdateData', $data, true);
						} else {
							$output['res'] = "error";
							$output['msg'] = "No Variant Found";
						}
					} else {
						$output['res'] = "error";
						$output['msg'] = "Variant Id Is Required";
					}
					echo json_encode([$output]);
				}
			}
		} else {
			$data['activepage'] = 'ManageCombo';
			$query = $this->db->order_by("id", "DESC")->get_where($this->data->table, array('expert_id' => $this->userData->id));
			$data["list"] = $query->result();
			$this->load->view('Expert/' . $this->data->method, $data);
		}
	}


	#Manage Color
	public function ManageColor()
	{
		$this->data->table = 'tbl_color';
		$this->data->key = 'Color';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditColor";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$insertData = [
								'name' => $this->input->post('name'),
								'code' => $this->input->post('code'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run('EditColor') == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$check_name_exist = $this->db->where('name', $this->input->post("name"))->get($this->data->table)->result();
									$check_code_exist = $this->db->where('code', $this->input->post("code"))->get($this->data->table)->result();
									if (count($check_name_exist) && $check_name_exist[0]->id != $data['list'][0]->id) {
										$output['msg'] = "The color name value must contain a unique value.";
									} else if (count($check_code_exist) && $check_code_exist[0]->id != $data['list'][0]->id) {
										$output['msg'] = "The color code value must contain a unique value.";
									} else {
										$updateData = [
											'name' => $this->input->post('name'),
											'code' => $this->input->post('code'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data['activepage'] = 'ManageColor';
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Size
	public function ManageSize()
	{
		$this->data->table = 'tbl_size';
		$this->data->key = 'Size';
		$this->data->folder = 'sizechart';
		$data['activepage'] = 'ManageSize';
		createFolder('./uploads/' . $this->data->folder);
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditSize";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$upload_status = 'true';
						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;

							$upload_errors           = array();
							$config['upload_path']   = './uploads/' . $this->data->folder . '/';
							$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config['max_size']      = 2048;
							$config['file_name']     = $filename;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('icon')) {
								$upload_status = 'false';
							}
						} else {
							$filename = '';
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							if ($upload_status == "true") {
								$tbl_size = $this->db->get('tbl_size')->result();
								$size_type_arr = array();
								foreach ($tbl_size as $size) {
									array_push($size_type_arr, $size->size_type);
								}

								if (!in_array(ucfirst($this->input->post('size_type')), $size_type_arr)) {
									$insertData = [
										'size_type' => ucfirst($this->input->post('size_type')),
										'size_name' => $this->input->post('size_name'),
										'size_chart' => base64_encode($this->input->post('size_chart')),
										'image' => $filename,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
									$insertData = $this->security->xss_clean($insertData);
									if ($this->db->insert($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Size Type Already Added.';
								}
							} else {
								$output['msg'] = 'Size Chart Image Unable To Upload';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						$upload_status = 'true';
						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;

							$upload_errors           = array();
							$config['upload_path']   = './uploads/' . $this->data->folder . '/';
							$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config['max_size']      = 2048;
							$config['file_name']     = $filename;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('icon')) {
								$upload_status = 'false';
							}
						} else {
							$filename = '';
						}

						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								if ($upload_status == 'true') {
									$updateData = [
										'size_name' => $this->input->post('size_name'),
										'size_chart' => base64_encode($this->input->post('size_chart')),
										'image' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Size Chart Image Unable To Upload';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Attributes
	public function ManageAttribute()
	{
		$this->data->table = 'tbl_attribute';
		$this->data->key = 'Attribute';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageAttribute';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->row();
						$data["allcategory"] = $this->db->order_by("id", "DESC")->get('categories')->result();
						$data["action"] = "EditAttribute";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						$attribute_tbl = $this->db->get('tbl_attribute')->result();
						$attribute_arr = array();
						foreach ($attribute_tbl as $attr) {
							array_push($attribute_arr, $attr->attribute);
						}
						$attribute = ucwords($this->input->post('attribute'));
						if (!in_array($attribute, $attribute_arr)) {
							$insertData = [
								'category' => $this->input->post('category'),
								'subcategory' => $this->input->post('subcategory'),
								'attribute_type' => $this->input->post('attribute_type'),
								'attribute' => ucwords($this->input->post('attribute')),
								'attribute_value' => ucfirst($this->input->post('attribute_value')),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$this->Product_model->createAndConfigureIndex();
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {
							$output['msg'] = 'Attribute Already exist.';
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$updateData = [
									'category' => ucfirst($this->input->post('category')),
									'subcategory' => $this->input->post('subcategory'),
									'attribute_type' => $this->input->post('attribute_type'),
									'attribute' => ucwords($this->input->post('attribute')),
									'attribute_value' => ucfirst($this->input->post('attribute_value')),
									'modified_at' => $this->data->timestamp
								];
								$updateData = $this->security->xss_clean($updateData);
								$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
								if ($result) {
									$this->Product_model->createAndConfigureIndex();
									$output['res'] = 'success';
									$output['msg'] = 'Data Updated Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data["category"] = $this->db->order_by("id", "DESC")->get('categories')->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}
	#Manage Gift Wrap
	public function ManageGiftwrap()
	{
		$this->data->table = 'tbl_giftwrap';
		$this->data->folder = 'giftcard';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Gift Wrap';
		$this->data->file_column = 'image';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageGiftwrap';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditGiftWrap";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (!empty($_FILES['image']['name'])) {
							$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$this->form_validation->set_rules('image', 'Gift Wrap Image', 'required|trim');
						}
						$this->form_validation->set_rules('name', 'Gift Wrap Name', 'required|trim|is_unique[tbl_giftwrap.name]');
						$this->form_validation->set_rules('type', 'Gift Wrap Type', 'required|trim');
						$this->form_validation->set_rules('price', 'Gift Wrap Price', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = "true";
							if (!empty($_FILES['image']['name'])) {
								$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand() . "." . $extension;
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 4048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									$upload_status = "false";
									$msgupload = explode('</p>', $this->upload->display_errors());
									$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
								}
							} else {
								$upload_status = "false";
								$uploaderror = "Please Upload File";
							}

							if ($upload_status == "true") {
								$insertData = [
									'type' => $this->input->post('type'),
									'name' => $this->input->post('name'),
									'price' => $this->input->post('price'),
									'image' => $filename,
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = $uploaderror;
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$old_filename = $data['list'][0]->image;
								$filename = $old_filename;
								$upload_status = "true";

								if (!empty($_FILES['image']['name'])) {
									$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 2048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
										$upload_status = "false";
										$msgupload = explode('</p>', $this->upload->display_errors());
										$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
									}
								}

								if ($upload_status == "true") {
									$updateData = [
										'type' => $this->input->post('type'),
										'name' => $this->input->post('name'),
										'price' => $this->input->post('price'),
										'image' => $filename,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
										if (!empty($_FILES['image']['name'])) {
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = $uploaderror;
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Sale
	public function ManageSale()
	{
		$this->data->table = 'tbl_sale';
		$this->data->folder = 'sale';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Sale';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageSale';
		$data['categorylist'] = $this->db->get_where('categories', array('is_status' => 'true'))->result();
		$data['brandlist'] = $this->db->get_where('brand', array('is_status' => 'true'))->result();
		$data["salelist"] = $this->db->get_where('tbl_sale', array('is_status' => 'true'))->result();

		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($this->uri->segment(5) == TRUE) {
					if ($action == 'getproduct') {
						$query = $this->db->get_where('products', array('category' => $id, 'sub_category' => $this->uri->segment(5)));

						$data["list"] = $query->result();
						$data["action"] = "Getproduct";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {

					if ($action == 'Edit') {
						$query = $this->db->where('id', $id)->get($this->data->table);
						if ($query->num_rows()) {
							$data["list"] = $query->result();
							$data["action"] = "EditSale";
							$this->load->view($this->data->controller . '/UpdateData', $data);
						} else {
							echo "Data Not Found";
						}
					} elseif ($action == 'EditSaleProduct') {
						$query = $this->db->where('id', $id)->get('sale_product');
						if ($query->num_rows()) {
							$data["list"] = $query->result();
							$data["action"] = "EditSaleProduct";
							$this->load->view($this->data->controller . '/UpdateData', $data);
						} else {
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					} elseif ($action == 'subcategory') {
						$query = $this->db->get_where('sub_category', array('category_id' => $id));

						$data["list"] = $query->result();
						$data["action"] = "subcategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} elseif ($action == 'AssignSaleProduct') {
						$query = $this->db->where('id', $id)->get($this->data->table);
						if ($query->num_rows()) {
							$list = $this->db->order_by('id', 'DESC')->where('sale_id', $id)->get('sale_product')->result();
							$data["saledata"] = $query->row();
							$data["alldata"] = $list;
							$this->load->view($this->data->controller . '/AssignSaleProduct', $data);
						} else {
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Sale Name', 'required|trim');
						$this->form_validation->set_rules('title', 'Sale Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Sale Description', 'required|trim');
						$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
						$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
						$this->form_validation->set_rules('product_type', 'Product Type', 'required|trim');
						$this->form_validation->set_rules('sale_type', 'Sale Type', 'required|trim');
						$this->form_validation->set_rules('user_type', 'User Type', 'required|trim');
						$this->form_validation->set_rules('discount_type', 'Discount Type', 'required|trim');
						// $this->form_validation->set_rules('discount_value','Discount Value','required|trim|number');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if (empty($_FILES['icon']['name'])) {
								$output['msg'] = 'Catalog Is Required.';
							} else {
								$upload_status = "true";

								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 4048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
										$upload_status = "false";
									}
								}

								if ($upload_status == "true") {

									$insertData = [
										'name' => $this->input->post('name'),
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'start_date' => $this->input->post('startdate'),
										'end_date' => $this->input->post('enddate'),
										'product_type' => $this->input->post('product_type'),
										'sale_type' => $this->input->post('sale_type'),
										'user_type' => $this->input->post('user_type'),
										'discount_type' => $this->input->post('discount_type'),
										// 'discount_value' => $this->input->post('discount_value'),
										'icon' => $filename,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];

									$insertData = $this->security->xss_clean($insertData);

									if ($this->db->insert($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Banner Unable To Upload.';
								}
							}
						}
					} else {
						$output['msg'] = 'Blank Data Is Not Allowed';
					}
					echo json_encode([$output]);
				} else if ($action == 'UpdateSaleProduct') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('sale_product');
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								// $this->form_validation->set_rules('sale','Sale','required|trim|numeric');
								// $this->form_validation->set_rules('product','Product','trim|numeric');

								$this->form_validation->set_rules('percentdis', 'Discount Percentage', 'required|trim|numeric|less_than[100]');
								$this->form_validation->set_rules('quantity', 'Quantity', 'required|trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									if (empty($this->input->post('product'))) {
										$product = $data['list'][0]->product_id;
									} else {
										$product = $this->input->post('product');
									}

									$discount = $this->input->post('percentdis');



									$updateData = [
										'type' => 'percent',
										'quantity' => $this->input->post('quantity'),
										'discount' => $discount,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update('sale_product', $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'SubmitSaleData') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('saleid', 'Sale Id', 'required|trim');
						$this->form_validation->set_rules('product_type', 'Product Type', 'required|trim');
						$this->form_validation->set_rules('sale_type', 'Sale Type', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$productid = $this->input->post('productid');

							if (!empty($productid)) {
								$insert_data = [];
								for ($i = 0; $i < count($productid); $i++) {
									$arr = [];
									$arr['product_id'] = $productid[$i];
									$arr['discount'] = $this->input->post('discount' . $productid[$i]);
									$arr['quantity'] = $this->input->post('quantity' . $productid[$i]);
									$arr['sale_id'] = $this->input->post('saleid');
									$arr['product_type'] = $this->input->post('product_type');
									$arr['sale_type'] = $this->input->post('sale_type');
									$arr['qty_x'] = $this->input->post('qty_x' . $productid[$i]);
									$arr['is_status'] = 'true';
									$arr['created_at'] = $this->data->timestamp;
									$arr['modified_at'] = $this->data->timestamp;
									$insert_data[] = $arr;
								}

								if ($this->db->insert_batch('sale_product', $insert_data)) {
									$output['res'] = 'success';
									$output['msg'] = count($insert_data) . ' Data Added Successfully';
								} else {
									$output['msg'] = 'Something Went Wrong';
								}
							} else {
								$output['msg'] = 'Please Select Atleast One Product';
							}
						}
					} else {
						$output['msg'] = 'Blank Data Is Not Allowed';
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('name', 'Sale Name', 'required|trim');
								$this->form_validation->set_rules('title', 'Sale Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Sale Description', 'required|trim');
								$this->form_validation->set_rules('startdate', 'Start Date', 'required|trim');
								$this->form_validation->set_rules('enddate', 'End Date', 'required|trim');
								$this->form_validation->set_rules('product_type', 'Product Type', 'required|trim');
								$this->form_validation->set_rules('sale_type', 'Sale Type', 'required|trim');
								$this->form_validation->set_rules('user_type', 'User Type', 'required|trim');
								$this->form_validation->set_rules('discount_type', 'Discount Type', 'required|trim');
								// $this->form_validation->set_rules('discount_value','Discount Value','required|trim');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$upload_status = 'true';
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;
									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											$upload_status = 'false';
										}
									} else {
										$filename = $old_filename;
									}

									if ($upload_status == 'true') {
										$updateData = [
											'name' => $this->input->post('name'),
											'title' => $this->input->post('title'),
											'description' => $this->input->post('description'),
											'start_date' => $this->input->post('startdate'),
											'end_date' => $this->input->post('enddate'),
											'product_type' => $this->input->post('product_type'),
											'sale_type' => $this->input->post('sale_type'),
											'user_type' => $this->input->post('user_type'),
											'discount_type' => $this->input->post('discount_type'),
											// 'discount_value' => $this->input->post('discount_value'),
											'icon' => $filename,
											'is_status' => 'true',
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['catalog']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Banner Unable To Upload';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == "SaleFilterProduct") {
					if (!empty($this->input->post())) {
						$apply_type = $this->input->post('apply_type');
						$saleid = $this->input->post('saleid');
						if ($apply_type == 'all_product') {
							$chk = $this->db->get_where('products', array('is_status' => 'true'));
						} elseif ($apply_type == 'specific_collection') {

							$category = $this->input->post('category');
							$subcategory = $this->input->post('subcategory');
							$chk = $this->db->get_where('products', array('category' => $category, 'sub_category' => $subcategory, 'is_status' => 'true'));
						}

						if ($chk->num_rows() > 0) {
							$product = $chk->result();
							$data['saledata'] = $this->db->get_where('tbl_sale', ['id' => $saleid])->row();
							$data["productdata"] = $product;
							$data["action"] = "SaleFilterProducts";
							$this->load->view($this->data->controller . '/UpdateData', $data);
						} else {
							echo "No Product Found";
						}
					} else {
						echo "Data Cannot Be Empty";
					}
				} elseif ($action == "SaleFilterCombo") {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('category', 'Category', 'required|trim|numeric');
						$this->form_validation->set_rules('subcategory', 'Sub-Category', 'required|trim|numeric');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							echo  str_ireplace('<p>', '', $msg[0]);
						} else {
							$category = $this->input->post('category');
							$subcategory = $this->input->post('subcategory');
							$chk = $this->db->get_where('tbl_combo', array('category_id' => $category, 'subcat_id' => $subcategory, 'approve_status' => 'approved'));

							if ($chk->num_rows() > 0) {
								$product = $chk->result();

								$data["productdata"] = $product;
								$data["action"] = "SaleFilterCombo";

								$this->load->view($this->data->controller . '/UpdateData', $data);
							} else {
								echo "No Look Product Found";
							}
						}
					} else {
						echo "Data Cannot Be Empty";
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}



	#Manage Coupon
	public function SaleProducts()
	{
		$this->data->table = 'sale_product';
		$this->data->key = 'Sale Product';
		$output['res'] = 'error';

		$data['categorylist'] = $this->db->get_where('categories', array('is_status' => 'true'))->result();
		$data["salelist"] = $this->db->get_where('tbl_sale', array('is_status' => 'true'))->result();
		$data["productlist"] = $this->db->get_where('products', array('is_status' => 'true', 'is_complimentary' => 'false'))->result();


		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($this->uri->segment(5) == TRUE) {
					if ($action == 'getproduct') {
						$query = $this->db->get_where('products', array('category' => $id, 'sub_category' => $this->uri->segment(5)));

						$data["list"] = $query->result();
						$data["action"] = "Getproduct";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {


					if ($action == 'Edit') {
						$query = $this->db->where('id', $id)->get($this->data->table);
						if ($query->num_rows()) {

							$data["list"] = $query->result();
							$data["action"] = "EditSaleProduct";
							$this->load->view($this->data->controller . '/UpdateData', $data);
						} else {
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					} elseif ($action == 'subcategory') {
						$query = $this->db->get_where('sub_category', array('category_id' => $id));

						$data["list"] = $query->result();
						$data["action"] = "subcategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('sale', 'Sale', 'required|trim|numeric');
						$this->form_validation->set_rules('product', 'Product', 'required|trim|numeric');
						$this->form_validation->set_rules('type', 'Discount Type', 'required|trim');

						if ($this->input->post('type') == "percent") {
							$this->form_validation->set_rules('percentdis', 'Discount Percentage', 'required|trim|numeric|less_than[100]');
						} elseif ($this->input->post('type') == "flat") {
							$this->form_validation->set_rules('discountrs', 'Discount Rupees', 'required|trim|numeric');
						}



						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if ($this->input->post('type') == "percent") {
								$discount = $this->input->post('percentdis');
							} elseif ($this->input->post('type') == "flat") {
								$discount = $this->input->post('discountrs');
							}


							$insertData = [
								'sale_id' => $this->input->post('sale'),
								'product_id' => $this->input->post('product'),
								'type' => $this->input->post('type'),
								'discount' => $discount,
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('sale', 'Sale', 'required|trim|numeric');
								$this->form_validation->set_rules('product', 'Product', 'required|trim|numeric');
								$this->form_validation->set_rules('type', 'Discount Type', 'required|trim');

								if ($this->input->post('type') == "percent") {
									$this->form_validation->set_rules('percentdis', 'Discount Percentage', 'required|trim|numeric|less_than[100]');
								} elseif ($this->input->post('type') == "flat") {
									$this->form_validation->set_rules('discountrs', 'Discount Rupees', 'required|trim|numeric');
								}

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									if ($this->input->post('type') == "percent") {
										$discount = $this->input->post('percentdis');
									} elseif ($this->input->post('type') == "flat") {
										$discount = $this->input->post('discountrs');
									}


									$updateData = [
										'sale_id' => $this->input->post('sale'),
										'product_id' => $this->input->post('product'),
										'type' => $this->input->post('type'),
										'discount' => $discount,
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}



	#Manage Color
	public function ManageQuiz()
	{
		$this->data->table = 'tbl_quiz';
		$this->data->folder = 'quiz';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Quiz';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';

		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditQuiz";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Data Not Found";
					}
				} elseif ($action == 'AssignQuestion') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$questions = $this->db->order_by('id', 'DESC')->where('quizid', $id)->get('quiz_question')->result();

						$data["quizlist"] = $query->row();
						$data["questionlist"] = $questions;
						$this->load->view($this->data->controller . '/AssignQuestion', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Icon', 'required');
						}


						$this->form_validation->set_rules('name', 'Quiz Name', 'required|trim');
						$this->form_validation->set_rules('title', 'Quiz Tile', 'required|trim');
						$this->form_validation->set_rules('description', 'Quiz Description', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$upload_status = "true";
							if (!empty($_FILES['icon']['name'])) {
								$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand() . "." . $extension;
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 4048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									$upload_status = "false";
									$msgupload = explode('</p>', $this->upload->display_errors());
									$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
								}
							} else {
								$upload_status = "false";
								$uploaderror = "Please Upload File";
							}

							if ($upload_status == "true") {
								$insertData = [
									'name' => $this->input->post('name'),
									'title' => $this->input->post('title'),
									'description' => $this->input->post('description'),
									'icon' => $filename,
									'is_status' => 'false',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = $uploaderror;
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('name', 'Quiz Name', 'required|trim');
								$this->form_validation->set_rules('title', 'Quiz Tile', 'required|trim');
								$this->form_validation->set_rules('description', 'Quiz Description', 'required|trim');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;

									$upload_status = "true";
									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 4096;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											$upload_status = "false";
											$msgupload = explode('</p>', $this->upload->display_errors());
											$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
										}
									}

									if ($upload_status == "true") {
										$updateData = [
											'name' => $this->input->post('name'),
											'title' => $this->input->post('title'),
											'description' => $this->input->post('description'),
											'icon' => $filename,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['icon']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = $uploaderror;
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddQuestion') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('quizid', 'Quiz Id', 'required|trim|numeric');
						$this->form_validation->set_rules('question', 'Question', 'required|trim');
						$this->form_validation->set_rules('questiontype', 'Question Type', 'required|trim');
						$this->form_validation->set_rules('opt1', 'Option 1', 'required|trim');
						$this->form_validation->set_rules('opt2', 'Option 2', 'trim');
						$this->form_validation->set_rules('opt3', 'Option 3', 'trim');
						$this->form_validation->set_rules('opt4', 'Option 4', 'trim');
						$this->form_validation->set_rules('opt5', 'Option 5', 'trim');
						$this->form_validation->set_rules('opt6', 'Option 6', 'trim');
						$this->form_validation->set_rules('opt7', 'Option 7', 'trim');
						$this->form_validation->set_rules('opt8', 'Option 8', 'trim');
						$this->form_validation->set_rules('opt9', 'Option 9', 'trim');
						$this->form_validation->set_rules('opt10', 'Option 10', 'trim');

						$this->form_validation->set_rules('opt1desc', 'Option 1 Description', 'trim');
						$this->form_validation->set_rules('opt2desc', 'Option 2 Description', 'trim');
						$this->form_validation->set_rules('opt3desc', 'Option 3 Description', 'trim');
						$this->form_validation->set_rules('opt4desc', 'Option 4 Description', 'trim');
						$this->form_validation->set_rules('opt5desc', 'Option 5 Description', 'trim');
						$this->form_validation->set_rules('opt6desc', 'Option 6 Description', 'trim');
						$this->form_validation->set_rules('opt7desc', 'Option 7 Description', 'trim');
						$this->form_validation->set_rules('opt8desc', 'Option 8 Description', 'trim');
						$this->form_validation->set_rules('opt9desc', 'Option 9 Description', 'trim');
						$this->form_validation->set_rules('opt10desc', 'Option 10 Description', 'trim');

						$this->form_validation->set_rules('description', 'Description', 'required|trim');


						if (empty($_FILES['opt1image']['name'])) {
							$this->form_validation->set_rules('opt1image', 'Option 1 Image Is Required', 'required|trim');
						}

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$upload_status = "true";
							if (!empty($_FILES['opt1image']['name'])) {
								$extension = pathinfo($_FILES['opt1image']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand() . "." . $extension;
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 4048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload('opt1image')) {
									$upload_status = "false";
									$msgupload = explode('</p>', $this->upload->display_errors());
									$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
								}
							} else {
								$upload_status = "false";
								$uploaderror = "Please Upload File";
							}

							$upload_status2 = "true";
							if (!empty($_FILES['opt2image']['name'])) {
								$extension2 = pathinfo($_FILES['opt2image']['name'], PATHINFO_EXTENSION);
								$filename2 = time() . rand() . "." . $extension2;
								$upload_errors2           = array();
								$config2['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config2['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config2['max_size']      = 4048;
								$config2['file_name']     = $filename2;
								$this->upload->initialize($config2);
								if (!$this->upload->do_upload('opt2image')) {
									$upload_status2 = "false";
									$msgupload2 = explode('</p>', $this->upload->display_errors());
									$uploaderror2 = str_ireplace('<p>', '', $msgupload2[0]);
								}
							} else {
								$filename2 = '';
							}

							$upload_status3 = "true";
							if (!empty($_FILES['opt3image']['name'])) {
								$extension3 = pathinfo($_FILES['opt3image']['name'], PATHINFO_EXTENSION);
								$filename3 = time() . rand() . "." . $extension3;
								$upload_errors3           = array();
								$config3['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config3['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config3['max_size']      = 4048;
								$config3['file_name']     = $filename3;
								$this->load->library('upload', $config3);
								if (!$this->upload->do_upload('opt3image')) {
									$upload_status3 = "false";
									$msgupload3 = explode('</p>', $this->upload->display_errors());
									$uploaderror3 = str_ireplace('<p>', '', $msgupload3[0]);
								}
							} else {
								$filename3 = '';
							}

							$upload_status4 = "true";
							if (!empty($_FILES['opt4image']['name'])) {
								$extension4 = pathinfo($_FILES['opt4image']['name'], PATHINFO_EXTENSION);
								$filename4 = time() . rand() . "." . $extension4;
								$upload_errors4          = array();
								$config4['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config4['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config4['max_size']      = 4048;
								$config4['file_name']     = $filename4;
								$this->upload->initialize($config4);
								if (!$this->upload->do_upload('opt4image')) {
									$upload_status4 = "false";
									$msgupload4 = explode('</p>', $this->upload->display_errors());
									$uploaderror4 = str_ireplace('<p>', '', $msgupload4[0]);
								}
							} else {
								$filename4 = '';
							}

							$upload_status5 = "true";
							if (!empty($_FILES['opt5image']['name'])) {
								$extension5 = pathinfo($_FILES['opt5image']['name'], PATHINFO_EXTENSION);
								$filename5 = time() . rand() . "." . $extension5;
								$upload_errors5          = array();
								$config5['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config5['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config5['max_size']      = 4048;
								$config5['file_name']     = $filename5;
								$this->upload->initialize($config5);
								if (!$this->upload->do_upload('opt5image')) {
									$upload_status5 = "false";
									$msgupload5 = explode('</p>', $this->upload->display_errors());
									$uploaderror5 = str_ireplace('<p>', '', $msgupload5[0]);
								}
							} else {
								$filename5 = '';
							}

							$upload_status6 = "true";
							if (!empty($_FILES['opt6image']['name'])) {
								$extension6 = pathinfo($_FILES['opt6image']['name'], PATHINFO_EXTENSION);
								$filename6 = time() . rand() . "." . $extension6;
								$upload_errors6          = array();
								$config6['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config6['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config6['max_size']      = 4048;
								$config6['file_name']     = $filename6;
								$this->upload->initialize($config6);
								if (!$this->upload->do_upload('opt6image')) {
									$upload_status6 = "false";
									$msgupload6 = explode('</p>', $this->upload->display_errors());
									$uploaderror6 = str_ireplace('<p>', '', $msgupload6[0]);
								}
							} else {
								$filename6 = '';
							}

							$upload_status7 = "true";
							if (!empty($_FILES['opt7image']['name'])) {
								$extension7 = pathinfo($_FILES['opt7image']['name'], PATHINFO_EXTENSION);
								$filename7 = time() . rand() . "." . $extension7;
								$upload_errors7          = array();
								$config7['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config7['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config7['max_size']      = 4048;
								$config7['file_name']     = $filename7;
								$this->upload->initialize($config7);
								if (!$this->upload->do_upload('opt7image')) {
									$upload_status7 = "false";
									$msgupload7 = explode('</p>', $this->upload->display_errors());
									$uploaderror7 = str_ireplace('<p>', '', $msgupload7[0]);
								}
							} else {
								$filename7 = '';
							}

							$upload_status8 = "true";
							if (!empty($_FILES['opt8image']['name'])) {
								$extension8 = pathinfo($_FILES['opt8image']['name'], PATHINFO_EXTENSION);
								$filename8 = time() . rand() . "." . $extension8;
								$upload_errors8          = array();
								$config8['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config8['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config8['max_size']      = 4048;
								$config8['file_name']     = $filename8;
								$this->upload->initialize($config8);
								if (!$this->upload->do_upload('opt8image')) {
									$upload_status8 = "false";
									$msgupload8 = explode('</p>', $this->upload->display_errors());
									$uploaderror8 = str_ireplace('<p>', '', $msgupload8[0]);
								}
							} else {
								$filename8 = '';
							}


							$upload_status9 = "true";
							if (!empty($_FILES['opt9image']['name'])) {
								$extension9 = pathinfo($_FILES['opt9image']['name'], PATHINFO_EXTENSION);
								$filename9 = time() . rand() . "." . $extension9;
								$upload_errors9          = array();
								$config9['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config9['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config9['max_size']      = 4048;
								$config9['file_name']     = $filename9;
								$this->upload->initialize($config9);
								if (!$this->upload->do_upload('opt9image')) {
									$upload_status9 = "false";
									$msgupload9 = explode('</p>', $this->upload->display_errors());
									$uploaderror9 = str_ireplace('<p>', '', $msgupload9[0]);
								}
							} else {
								$filename9 = '';
							}


							$upload_status10 = "true";
							if (!empty($_FILES['opt10image']['name'])) {
								$extension10 = pathinfo($_FILES['opt10image']['name'], PATHINFO_EXTENSION);
								$filename10 = time() . rand() . "." . $extension10;
								$upload_errors10          = array();
								$config10['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config10['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config10['max_size']      = 4048;
								$config10['file_name']     = $filename10;
								$this->upload->initialize($config10);
								if (!$this->upload->do_upload('opt9image')) {
									$upload_status10 = "false";
									$msgupload10 = explode('</p>', $this->upload->display_errors());
									$uploaderror10 = str_ireplace('<p>', '', $msgupload10[0]);
								}
							} else {
								$filename10 = '';
							}

							if ($upload_status == 'true') {
								if ($upload_status2 == 'true') {
									if ($upload_status3 == 'true') {
										if ($upload_status4 == 'true') {
											if ($upload_status5 == 'true') {
												if ($upload_status6 == 'true') {
													if ($upload_status7 == 'true') {
														if ($upload_status8 == 'true') {
															if ($upload_status9 == 'true') {
																if ($upload_status10 == 'true') {

																	$insertData = [
																		'quizid' => $this->input->post('quizid'),
																		'question' => $this->input->post('question'),
																		'questiontype' => $this->input->post('questiontype'),
																		'opt1' => $this->input->post('opt1'),
																		'opt2' => $this->input->post('opt2'),
																		'opt3' => $this->input->post('opt3'),
																		'opt4' => $this->input->post('opt4'),
																		'opt5' => $this->input->post('opt5'),
																		'opt6' => $this->input->post('opt6'),
																		'opt7' => $this->input->post('opt7'),
																		'opt8' => $this->input->post('opt8'),
																		'opt9' => $this->input->post('opt9'),
																		'opt10' => $this->input->post('opt10'),
																		'opt1desc' => $this->input->post('opt1desc'),
																		'opt2desc' => $this->input->post('opt2desc'),
																		'opt3desc' => $this->input->post('opt3desc'),
																		'opt4desc' => $this->input->post('opt4desc'),
																		'opt5desc' => $this->input->post('opt5desc'),
																		'opt6desc' => $this->input->post('opt6desc'),
																		'opt7desc' => $this->input->post('opt7desc'),
																		'opt8desc' => $this->input->post('opt8desc'),
																		'opt9desc' => $this->input->post('opt9desc'),
																		'opt10desc' => $this->input->post('opt10desc'),
																		'opt1image' => $filename,
																		'opt2image' => $filename2,
																		'opt3image' => $filename3,
																		'opt4image' => $filename4,
																		'opt5image' => $filename5,
																		'opt6image' => $filename6,
																		'opt7image' => $filename7,
																		'opt8image' => $filename8,
																		'opt9image' => $filename9,
																		'opt10image' => $filename10,
																		'description' => $this->input->post('description'),
																		'is_status' => 'true',
																		'created_at' => $this->data->timestamp,
																		'modified_at' => $this->data->timestamp
																	];
																	$insertData = $this->security->xss_clean($insertData);

																	if ($this->db->insert('quiz_question', $insertData)) {
																		$output['res'] = 'success';
																		$output['msg'] = 'Data Added Successfully.';
																	} else {
																		$output['msg'] = 'Something went wrong in Data Saving.';
																	}
																} else {
																	$output['msg'] = $uploaderror10;
																}
															} else {
																$output['msg'] = $uploaderror9;
															}
														} else {
															$output['msg'] = $uploaderror8;
														}
													} else {
														$output['msg'] = $uploaderror7;
													}
												} else {
													$output['msg'] = $uploaderror6;
												}
											} else {
												$output['msg'] = $uploaderror5;
											}
										} else {
											$output['msg'] = $uploaderror4;
										}
									} else {
										$output['msg'] = $uploaderror3;
									}
								} else {
									$output['msg'] = $uploaderror2;
								}
							} else {
								$output['msg'] = $uploaderror;
							}
						}
					} else {
						$output['msg'] = 'Data Cannot Be Blank';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage E-Catalog
	public function ManageECatalog()
	{
		$this->data->table = 'e_catalog';
		$this->data->folder = 'catalog';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'E-Catalog';
		$this->data->file_column = 'catalog';
		$output['res'] = 'error';
		$data['activepage'] = 'ManageECatalog';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditECatalog";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo "Data Not Found";
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Catalog Name', 'required|trim');
						$this->form_validation->set_rules('title', 'Catalog Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Catalog Description', 'required|trim');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							if (empty($_FILES['catalog']['name'])) {
								$output['msg'] = 'Catalog Is Required.';
							} else {
								$upload_status = "true";

								if (!empty($_FILES['catalog']['name'])) {
									$extension = pathinfo($_FILES['catalog']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;

									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'pdf';
									$config['max_size']      = 4048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload($this->data->file_column)) {
										$upload_status = "false";
									}
								}

								if ($upload_status == "true") {


									$insertData = [
										'name' => $this->input->post('name'),
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'catalog' => $filename,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];

									$insertData = $this->security->xss_clean($insertData);

									if ($this->db->insert($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Catalog Unable To Upload.';
								}
							}
						}
					} else {
						$output['msg'] = 'Blank Data Is Not Allowed';
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('name', 'Catalog Name', 'required|trim');
								$this->form_validation->set_rules('title', 'Catalog Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Catalog Description', 'required|trim');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$upload_status = 'true';
									$old_filename = $data['list'][0]->catalog;
									$filename = $old_filename;
									if (!empty($_FILES['catalog']['name'])) {
										$extension = pathinfo($_FILES['catalog']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'pdf';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											$upload_status = 'false';
										}
									} else {
										$filename = $old_filename;
									}

									if ($upload_status == 'true') {
										$updateData = [
											'name' => $this->input->post('name'),
											'title' => $this->input->post('title'),
											'description' => $this->input->post('description'),
											'catalog' => $filename,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['catalog']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Catalog Unable To Upload';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#Manage Notifications
	public function Notifications()
	{
		$this->data->table = 'notification';
		$this->data->key = 'Notification';
		$data['activepage'] = 'Notifications';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditNotification";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'title' => $this->input->post('title'),
								'description ' => $this->input->post('description'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$updateData = [
										'title' => $this->input->post('title'),
										'description ' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Notifications
	public function ManageStyleAndDesign()
	{
		$this->data->tabledesign = 'tbl_design';
		$this->data->tableneck = 'tbl_neckstyle';
		$this->data->tablesleeve = 'tbl_sleevestyle';
		$this->data->tablecloth = 'tbl_clothtype';


		$this->data->designkey = 'Design';
		$this->data->neckkey = 'Neck Style';
		$this->data->sleevekey = 'Sleeve Style';
		$this->data->clothkey = 'Cloth Type';

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditNotification";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'AddDesign') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Design Name', 'required|trim|is_unique[tbl_design.name]');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->tabledesign, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Design Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					} else {
						$output['msg'] = 'Data Cannot Be Blank';
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddNeckstyle') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Neck Style', 'required|trim|is_unique[tbl_neckstyle.name]');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->tableneck, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Neck Style Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					} else {
						$output['msg'] = 'Data Cannot Be Blank';
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddSleevestyle') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Sleeve Style', 'required|trim|is_unique[tbl_sleevestyle.name]');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->tablesleeve, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Sleeve Style Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					} else {
						$output['msg'] = 'Data Cannot Be Blank';
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddClothType') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Sleeve Style', 'required|trim|is_unique[tbl_clothtype.name]');
						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'name' => $this->input->post('name'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->tablecloth, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Cloth Type Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					} else {
						$output['msg'] = 'Data Cannot Be Blank';
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$updateData = [
										'title' => $this->input->post('title'),
										'description ' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->tabledesign);
			$data["designlist"] = $query->result();

			$queryneck = $this->db->order_by("id", "DESC")->get($this->data->tableneck);
			$data["necklist"] = $queryneck->result();

			$querysleeve = $this->db->order_by("id", "DESC")->get($this->data->tablesleeve);
			$data["sleevelist"] = $querysleeve->result();

			$querycloth = $this->db->order_by("id", "DESC")->get($this->data->tablecloth);
			$data["clothlist"] = $querycloth->result();

			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Notifications
	public function DeliveryCharge()
	{
		$this->data->table = 'delivery_charge';
		$this->data->key = 'Delivery Charge';
		$data['activepage'] = 'DeliveryCharge';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditDeliveryCharge";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'pincode' => $this->input->post('pincode'),
								'charge' => $this->input->post('charge'),
								'description' => $this->input->post('description'),
								'area' => $this->input->post('area'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('charge', 'Delivery Charge', 'required');
								$this->form_validation->set_rules('description', 'Description', 'required');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$updateData = [
										'charge' => $this->input->post('charge'),
										'area' => $this->input->post('area'),
										'description' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'UploadExcel') {
					if (!empty($this->input->post())) {

						$this->load->library('excel');


						if (empty($_FILES['excelfile']['name'])) {
							$output['msg'] = 'Excel File Is Required';
						} else if (!in_array($_FILES["excelfile"]["type"], $this->excel->allowedFileType)) {
							$output['msg'] = 'Invalid Excel File';
						} else {

							$fileInfo = $_FILES["excelfile"]["name"];
							$newFileName = "Delivery-" . time() . rand(100, 900) . "." . pathinfo($_FILES['excelfile']['name'], PATHINFO_EXTENSION);
							$fileDirectory = "./uploads/excel/";
							$inputFileName = $fileDirectory . $newFileName;

							$config['upload_path'] = $fileDirectory;
							$config['allowed_types'] = 'xlsx|xls';
							$config['max_size'] = 100000000;
							$config['file_name'] = $newFileName;

							$this->load->library('upload', $config);
							$this->upload->do_upload('excelfile');

							$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
							$objReader = PHPExcel_IOFactory::createReader($inputFileType);
							$objReader->setReadDataOnly(true);
							$objPHPExcel = $objReader->load($inputFileName);
							$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
							$highestRow = $objWorksheet->getHighestRow();
							$highestColumn = $objWorksheet->getHighestColumn();
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							if ($highestRow <= 1 or $highestColumnIndex <= 0) {
								$output['msg'] = 'Empty Excel File.';
							} else {
								for ($row = 2; $row <= $highestRow; $row++) {
									$srno = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
									$pincode = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();

									$deliverycharge = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
									$description = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
									$area = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();

									if ($this->db->get_where($this->data->table, array('pincode' => $pincode))->num_rows()) {
										continue;
									}

									$insertData[] = [
										'pincode' => $pincode,
										'charge' => $deliverycharge,
										'description' => $description,
										'area' => $area,
										'is_status' => 'true',
										'created_at' => $this->data->timestamp,
										'modified_at' => $this->data->timestamp
									];
								}

								if (!empty($insertData)) {

									if ($this->db->insert_batch($this->data->table, $insertData)) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Uploaded Successfully.';
									} else {
										$output['msg'] = 'Something Went Wrong';
									}
								} else {
									$output['msg'] = 'Data Already Added Please Add Some Fresh Data';
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#  ManageBeautyConsultant 
	public function ManageBeautyConsultant()
	{
		$this->data->table = 'beauty_consultant';
		$this->data->key = 'Beauty Consultation';
		$data['activepage'] = 'ManageBeautyConsultant';
		if ($this->uri->segment(3) == true) {
			$action = $this->uri->segment(3);
			if ($action == 'Edit') {
				if ($this->uri->segment(4) == true) {
					$id = $this->uri->segment(4);
					$data['action'] = 'EditBeautyConsultant';
					$data['list'] = $this->db->get_where($this->data->table, ['id' => $id])->row();
					$this->load->view($this->data->controller . '/UpdateData', $data);
				}
			} else if ($action == 'Update') {
				if (!empty($this->input->post())) {
					if (empty($this->input->post("id"))) {
						$output['msg'] = 'ID is required.';
					} else {
						$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
						if ($query->num_rows()) {
							$data['list'] = $query->result();
							$updateData = [
								'schedule_date' => $this->input->post('schedule_date'),
								'schedule_time' => $this->input->post('schedule_time'),
								'schedule_status' => $this->input->post('schedule_status'),
								'consultant_name' => $this->input->post('consultant_name'),
								'consultation_links' => $this->input->post('consultation_links'),
								'modified_at' => $this->data->timestamp,
							];
							$updateData = $this->security->xss_clean($updateData);
							$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
							if ($result) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Updated Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
				}
				echo json_encode([$output]);
			} else {
				redirect(base_url($this->data->controller . '/' . $this->data->method));
			}
		} else {
			$data['beauty_consultant'] = $this->db->order_by("id", "DESC")->get($this->data->table)->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#  HelpAndSupport 
	public function StockAlert()
	{
		$this->data->table = 'products';
		$this->data->key = 'Product';
		$this->data->folder = 'product';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'StockAlert';
		if (!empty($this->input->get('vendor')) && $this->input->get('vendor') != 'all') {
			$id = $this->input->get('vendor');
			$query = $this->db->order_by("product_variant.id", "DESC")->where('vendor_id', $id)->select('*,product_variant.id as vid')->from('product_variant')->join('products', 'product_variant.product_id = products.id', 'inner')->get()->result();
		} else {
			$query = $this->db->order_by("product_variant.id", "DESC")->select('*,product_variant.id as vid')->from('product_variant')->join('products', 'product_variant.product_id = products.id', 'inner')->get()->result();
		}
		$data["list"] = $query;
		$count = 1;
		$vendor_list = [];
		foreach ($query as $item) {
			$sizes = json_decode($item->size);
			$json_less_size = [];
			foreach ($sizes as $eachSize) {
				foreach ($eachSize as $size => $size_stock) {

					if ($size_stock <= $item->alert_qty) {
						array_push($json_less_size, $size . ':' . $size_stock);
					}
				}
			}
			if (!empty($json_less_size)) {
				if (empty($item->vendor_id)) {
					$item->vendor_id = 'NA';
				}
				array_push($vendor_list, $item->vendor_id);
			}
		}
		$data['vendorlist'] = $this->db->where_in('id', $vendor_list)->get('tbl_vendor', array('is_status' => 'true'))->result();
		$this->load->view($this->data->controller . '/' . $this->data->method, $data);
	}


	#Manage Categories
	public function ManageGiftCard()
	{
		$this->data->table = 'tbl_giftcard';
		$this->data->folder = 'giftcard';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Gift Card';
		$this->data->file_column = 'icon';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditGiftCard";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$this->form_validation->set_rules('icon', 'Gift Card Icon', 'required|trim');
						}

						$this->form_validation->set_rules('name', 'Gift Card Name', 'required|trim|is_unique[tbl_giftcard.name]');
						$this->form_validation->set_rules('title', 'Gift Card Title', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = "true";
							if (!empty($_FILES['icon']['name'])) {
								$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand() . "." . $extension;
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 4048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									$upload_status = "false";
									$msgupload = explode('</p>', $this->upload->display_errors());
									$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
								}
							} else {
								$upload_status = "false";
								$uploaderror = "Please Upload File";
							}

							if ($upload_status == "true") {
								$insertData = [
									'name' => $this->input->post('name'),
									'title ' => $this->input->post('title'),
									'icon' => $filename,
									'is_status' => 'true',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = $uploaderror;
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('name', 'Gift Card Name', 'required|trim');
								$this->form_validation->set_rules('title', 'Gift Card Title', 'required|trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;

									$upload_status = "true";

									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "." . $extension;
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											$upload_status = "false";
											$msgupload = explode('</p>', $this->upload->display_errors());
											$uploaderror = str_ireplace('<p>', '', $msgupload[0]);
										}
									}

									if ($upload_status == "true") {
										$updateData = [
											'name ' => $this->input->post('name'),
											'title ' => $this->input->post('title'),
											'icon' => $filename,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['icon']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = $uploaderror;
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Faq Category
	public function FaqCategory()
	{
		$this->data->table = 'faqs_category';
		$this->data->key = 'Faq Category';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditFaqCategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[faqs_category.name]');
						$this->form_validation->set_rules('title', 'Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Description', 'trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$insertData = [
								'name' => $this->input->post('name'),
								'title ' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];
							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('name', 'Name', 'required|trim');
								$this->form_validation->set_rules('title', 'Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Description', 'trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'name' => $this->input->post('name'),
										'title ' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data['activepage'] = 'FaqCategory';
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage FAQ's
	public function Faqs()
	{
		$this->data->table = 'faqs';
		$this->data->key = "Faq's";
		$data['categorylist'] = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get('faqs_category')->result();
		$data['activepage'] = 'Faqs';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditFaq";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						$this->form_validation->set_rules('category', 'category', 'required|trim');
						$this->form_validation->set_rules('question', 'Question', 'required|trim');
						$this->form_validation->set_rules('answer', 'Answer', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'category_id' => $this->input->post('category'),
								'question' => $this->input->post('question'),
								'answer' => $this->input->post('answer'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {

								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('category', 'category', 'required|trim');
								$this->form_validation->set_rules('question', 'Question', 'required|trim');
								$this->form_validation->set_rules('answer', 'Answer', 'required|trim');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'category_id' => $this->input->post('category'),
										'question' => $this->input->post('question'),
										'answer' => $this->input->post('answer'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Survey  
	public function SiteSurvey()
	{
		$this->data->table = 'faqs';
		$this->data->key = "Faq's";
		$data['categorylist'] = $this->db->where(['is_status' => 'true'])->order_by("name", "ASC")->get('faqs_category')->result();
		$data['activepage'] = 'SiteSurvey';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditFaq";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} elseif ($action == 'ViewReport') {
						$data['list'] = $this->db->order_by('id', 'desc')->get_where('site_feedback', ['question' => $id])->result();
						$this->load->view($this->data->controller . '/SiteFeedback', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {

						$this->form_validation->set_rules('category', 'category', 'required|trim');
						$this->form_validation->set_rules('question', 'Question', 'required|trim');
						$this->form_validation->set_rules('option[]', 'Option', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$insertData = [
								'category_id' => $this->input->post('category'),
								'question' => $this->input->post('question'),
								'answer' => implode(",", $this->input->post('option')),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];


							$insertData = $this->security->xss_clean($insertData);
							if ($this->db->insert($this->data->table, $insertData)) {

								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('category', 'category', 'required|trim');
								$this->form_validation->set_rules('question', 'Question', 'required|trim');
								$this->form_validation->set_rules('answer', 'Answer', 'required|trim');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'category_id' => $this->input->post('category'),
										'question' => $this->input->post('question'),
										'answer' => $this->input->post('answer'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data["list"] = $this->db->select('*,faqs.id as qid')->from('faqs')->join('faqs_category', 'faqs_category.id=faqs.category_id')->where('faqs_category.name', 'Website Survey')->get()->result();
			$data["app_list"] = $this->db->select('*,faqs.id as qid')->from('faqs')->join('faqs_category', 'faqs_category.id=faqs.category_id')->where('faqs_category.name', 'App Survey')->get()->result();
			$this->load->view($this->data->controller . '/SurveyFaq', $data);
		}
	}

	#  ReferFriendManagement 
	public function ReferFriendManagement()
	{
		$this->data->table = 'refer_friend';
		$this->data->key = 'Refer Friend Management';

		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditReferFriend";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {

				if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('signup_cashback', 'Signup Cashback', 'required|trim');
								$this->form_validation->set_rules('signup_points', 'Sign Up Rewards Point', 'required|trim');
								$this->form_validation->set_rules('ref_cashback', 'Referral Cashback', 'required|trim');
								$this->form_validation->set_rules('ref_points', 'Referral Reward Point', 'required|trim');
								$this->form_validation->set_rules('ref_order_cashback', 'Referral User Order Cashback', 'required|trim');
								$this->form_validation->set_rules('ref_order_point', 'Referral User Order Reward Point', 'required|trim');
								$this->form_validation->set_rules('ref_min_order', 'Referral User Min Order Value', 'required|trim');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'signup_cashback' => $this->input->post('signup_cashback'),
										'signup_points' => $this->input->post('signup_points'),
										'ref_cashback' => $this->input->post('ref_cashback'),
										'ref_points' => $this->input->post('ref_points'),
										'ref_order_cashback' => $this->input->post('ref_order_cashback'),
										'ref_order_point' => $this->input->post('ref_order_point'),
										'ref_min_order' => $this->input->post('ref_min_order'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#  SubscriptionPlan 
	public function SubscriptionPlan()
	{
		$this->data->table = 'subscription_plan';
		$this->data->folder = 'plan';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'Subscription Plan';
		$output['res'] = 'error';
		$data['activepage'] = 'SubscriptionPlan';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditSubscriptionPlan";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'EditChoose') {
					$query = $this->db->where('id', $id)->get('choose_plan');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditChoosePlan";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'Editwhatyouget') {
					$query = $this->db->where('id', $id)->get('whatyouget');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "Editwhatyouget";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} elseif ($action == 'EditBenefits') {
					$query = $this->db->where('id', $id)->get('subscription_benefits');
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditSubscriptionBenefits";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Add') {
					if (!empty($this->input->post())) {
						$this->form_validation->set_rules('amount', 'Net Price', 'required|trim|numeric');
						$this->form_validation->set_rules('offer_price', 'Offer Price', 'required|trim|numeric');
						// $this->form_validation->set_rules('tax', 'Tax On Subscription Plan', 'required|trim|numeric');
						$this->form_validation->set_rules('description', 'Subscription Plan Description', 'required|trim');
						$this->form_validation->set_rules('name', 'Plan Name', 'required|trim');
						$this->form_validation->set_rules('type', 'Plan Type', 'required|trim');
						$this->form_validation->set_rules('duration', 'Plan Duration', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = "true";
							if ($upload_status == 'true') {
								$insertData = [
									'name' => $this->input->post('name'),
									'plan_type' => $this->input->post('type'),
									'duration' => $this->input->post('duration'),
									'icon' => "",
									'amount' => $this->input->post('amount'),
									'offer_price' => $this->input->post('offer_price'),
									'discount' => $this->input->post('discount'),
									'tax' => "",
									'description' => $this->input->post('description'),
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];
								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Banner Unable To Upload';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();

								$this->form_validation->set_rules('amount', 'Subscription Plan', 'required|trim|numeric');
								// $this->form_validation->set_rules('tax', 'Tax On Subscription Plan', 'required|trim|numeric');
								$this->form_validation->set_rules('description', 'Subscription Plan Description', 'required|trim');
								$this->form_validation->set_rules('name', 'Plan Name', 'required|trim');
								$this->form_validation->set_rules('type', 'Plan Type', 'required|trim');
								$this->form_validation->set_rules('duration', 'Plan Duration', 'required|trim');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$old_filename = $data['list'][0]->icon;

									$upload_status = "true";

									// if (!empty($_FILES['icon']['name']))
									// {

									// $extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									// $filename = time() . rand() . "." . $extension;

									// $upload_errors           = array();
									// $config['upload_path']   = './uploads/' . $this->data->folder . '/';
									// $config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									// $config['max_size']      = 2048;
									// $config['file_name']     = $filename;
									// $this->load->library('upload', $config);
									// if (!$this->upload->do_upload('icon'))
									// {
									// $upload_status = "false";
									// }
									// }
									// else
									// {
									// $filename = $old_filename;
									// } 

									if ($upload_status == 'true') {
										$updateData = [
											'name' => $this->input->post('name'),
											'plan_type' => $this->input->post('type'),
											'duration' => $this->input->post('duration'),
											'icon' => "",
											'amount' => $this->input->post('amount'),
											'offer_price' => $this->input->post('offer_price'),
											'discount' => $this->input->post('discount'),
											'tax' => $this->input->post('tax'),
											'description' => $this->input->post('description'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Banner Unable To Upload';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				}
				// add choose plan start here 
				elseif ($action == 'AddChoose') {

					if (!empty($this->input->post())) {
						$upload_status = "true";

						if ($upload_status == 'true') {
							$insertData = [
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							if ($this->db->insert('choose_plan', $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {
							$output['msg'] = 'Choose Unable To Upload';
						}
					}
					echo json_encode([$output]);
				}
				// add choose plan end here 
				// add WHAT YOU GET start here 
				elseif ($action == 'Addwhatyouget') {

					if (!empty($this->input->post())) {
						$upload_status = "true";

						if ($upload_status == 'true') {
							$insertData = [
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							if ($this->db->insert('whatyouget', $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {
							$output['msg'] = 'Choose Unable To Upload';
						}
					}
					echo json_encode([$output]);
				}
				// add WHAT YOU GET end here 
				elseif ($action == 'AddBenefits') {

					if (!empty($this->input->post())) {
						$upload_status = "true";
						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
							$upload_errors           = array();
							$config['upload_path']   = './uploads/' . $this->data->folder . '/';
							$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config['max_size']      = 2048;
							$config['file_name']     = $filename;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('icon')) {
								$upload_status = "false";
							}
						} else {
							$filename = $old_filename;
						}

						if ($upload_status == 'true') {
							$insertData = [
								'icon' => $filename,
								'alt' => $this->input->post('alt'),
								'seo_title' => $this->input->post('seo_title'),
								'title' => $this->input->post('title'),
								'description' => base64_encode($this->input->post('description')),
								'is_status' => 'true',
								'created_at' => $this->data->timestamp,
								'modified_at' => $this->data->timestamp
							];

							if ($this->db->insert('subscription_benefits', $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
							} else {
								$output['msg'] = 'Something went wrong in Data Saving.';
							}
						} else {
							$output['msg'] = 'Banner Unable To Upload';
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateBenefits') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('subscription_benefits');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$upload_status = "true";
								$old_filename = $data['list'][0]->icon;

								if (!empty($_FILES['icon']['name'])) {
									$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
									$filename = time() . rand() . "." . $extension;
									$upload_errors           = array();
									$config['upload_path']   = './uploads/' . $this->data->folder . '/';
									$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
									$config['max_size']      = 2048;
									$config['file_name']     = $filename;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload('icon')) {
										$upload_status = "false";
									}
								} else {
									$filename = $old_filename;
								}

								if ($upload_status == 'true') {
									$updateData = [
										'icon' => $filename,
										'alt' => $this->input->post('alt'),
										'seo_title' => $this->input->post('seo_title'),
										'title' => $this->input->post('title'),
										'description' => base64_encode($this->input->post('description')),
										'is_status' => 'true',
										'modified_at' => $this->data->timestamp
									];

									$result = $this->db->where('id', $data['list'][0]->id)->update('subscription_benefits', $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Banner Unable To Upload';
								}
							}
						}
					}
					echo json_encode([$output]);
				}

				// start choose update 
				elseif ($action == 'UpdateChoose') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('choose_plan');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$upload_status = "true";

								if ($upload_status == 'true') {
									$updateData = [
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];

									$result = $this->db->where('id', $data['list'][0]->id)->update('choose_plan', $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Choose Unable To Upload';
								}
							}
						}
					}
					echo json_encode([$output]);
				}
				// end choose update 

				// start Updatewhatyouget update 
				elseif ($action == 'Updatewhatyouget') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('whatyouget');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$upload_status = "true";

								if ($upload_status == 'true') {
									$updateData = [
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'modified_at' => $this->data->timestamp
									];

									$result = $this->db->where('id', $data['list'][0]->id)->update('whatyouget', $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								} else {
									$output['msg'] = 'Updatewhatyouget Unable To Upload';
								}
							}
						}
					}
					echo json_encode([$output]);
				}
				// end choose update 

				elseif ($action == 'Subscriber') {
					$data['activepage'] = 'Subscriber';
					$data['subscriber'] = $this->db->get('royal_subscriber')->result_array();
					$this->load->view($this->data->controller . '/ManageSubscriber', $data);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}


	#  HelpAndSupport 
	public function HelpAndSupport()
	{
		$this->data->table = 'contact';
		$query = $this->db->order_by("id", "DESC")->get($this->data->table);
		$data["list"] = $query->result();
		$data['activepage'] = 'HelpAndSupport';
		$this->load->view($this->data->controller . '/' . $this->data->method, $data);
	}

	#  NewsLetters 
	public function NewsLetters()
	{
		$this->data->table = 'tbl_newsletter';
		$query = $this->db->order_by("id", "DESC")->get($this->data->table);
		$data["list"] = $query->result();
		$this->load->view($this->data->controller . '/' . $this->data->method, $data);
	}

	#  WebSite Content Management 
	public function WebSiteContentManagement()
	{
		$this->data->folder = 'websitecontent';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->table_newsletter = 'newsletter_content';
		$this->data->table_cornerpopup = 'corner_popup';
		$this->data->table_about = 'content_about';
		$this->data->table_terms = 'tbl_terms';
		$data['activepage'] = 'WebSiteContentManagement';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'EditNewsLetter') {
					$query = $this->db->where('id', $id)->get($this->data->table_newsletter);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditNewsLetter";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo 'Data Not Found';
					}
				} elseif ($action == 'EditTerms') {
					$query = $this->db->where('id', $id)->get($this->data->table_terms);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditTermsDetails";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo 'Data Not Found';
					}
				} elseif ($action == 'EditCornerPopup') {
					$query = $this->db->where('id', $id)->get($this->data->table_cornerpopup);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditCornerPopup";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo 'Data Not Found';
					}
				} elseif ($action == 'EditAbout') {
					$query = $this->db->where('id', $id)->get($this->data->table_about);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditAbout";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						echo 'Data Not Found';
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'AddAbout') {
					if (!empty($this->input->post())) {

						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Banner Image', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						if (empty($_FILES['mainicon']['name'])) {
							$this->form_validation->set_rules('mainicon', 'Main Banner Image', 'required');
						} else {
							$extension2 = pathinfo($_FILES['mainicon']['name'], PATHINFO_EXTENSION);
							$filename2 = time() . rand() . "." . $extension2;
						}

						if (empty($_FILES['image']['name'])) {
							$this->form_validation->set_rules('image', 'Image', 'required');
						} else {
							$extension3 = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
							$filename3 = time() . rand() . "." . $extension3;
						}

						$this->form_validation->set_rules('name', 'Name', 'required|trim');
						$this->form_validation->set_rules('message', 'Message', 'required|trim');
						$this->form_validation->set_rules('title', 'Title', 'required|trim');
						$this->form_validation->set_rules('description', 'Description', 'required|trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = 'true';
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload('icon')) {
									$upload_status = 'false';
								}
							}

							$upload_status2 = 'true';
							if (!empty($_FILES['mainicon']['name'])) {
								$upload_errors2           = array();
								$config2['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config2['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config2['max_size']      = 2048;
								$config2['file_name']     = $filename2;
								$this->load->library('upload', $config2);
								$this->upload->initialize($config2);
								if (!$this->upload->do_upload('mainicon')) {
									$upload_status2 = 'false';
								}
							}

							$upload_status3 = 'true';
							if (!empty($_FILES['image']['name'])) {
								$upload_errors3           = array();
								$config3['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config3['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config3['max_size']      = 2048;
								$config3['file_name']     = $filename3;
								$this->load->library('upload', $config3);
								$this->upload->initialize($config3);
								if (!$this->upload->do_upload('image')) {
									$upload_status3 = 'false';
								}
							}

							if ($upload_status == "true") {
								if ($upload_status2 == "true") {
									if ($upload_status3 == "true") {
										$insertData = [
											'icon' => $filename,
											'mainicon' => $filename2,
											'image' => $filename3,
											'name' => $this->input->post('name'),
											'message' => $this->input->post('message'),
											'title' => $this->input->post('title'),
											'description' => $this->input->post('description'),
											'meta_description' => $this->input->post('metadescription'),
											'meta_title' => $this->input->post('metatitle'),
											'meta_keyword' => $this->input->post('keyword'),
											'is_status' => 'false',
											'created_at' => $this->data->timestamp,
											'modified_at' => $this->data->timestamp
										];

										$insertData = $this->security->xss_clean($insertData);
										if ($this->db->insert($this->data->table_about, $insertData)) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Added Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Unable To Upload Image';
									}
								} else {
									$output['msg'] = 'Unable To Upload Main Banner Image';
								}
							} else {
								$output['msg'] = 'Unable To Upload Banner Image';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddCornerPopup') {
					if (!empty($this->input->post())) {

						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Banner Image', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						$this->form_validation->set_rules('text', 'Data', 'required');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {

							$upload_status = 'true';
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload('icon')) {
									$upload_status = 'false';
								}
							}


							if ($upload_status == "true") {
								$insertData = [
									'icon' => $filename,
									'is_status' => 'false',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];

								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table_cornerpopup, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Unable To Upload Banner Image';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'AddNewsLetter') {
					if (!empty($this->input->post())) {
						if (empty($_FILES['icon']['name'])) {
							$this->form_validation->set_rules('icon', 'Banner Image', 'required');
						} else {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						}

						$this->form_validation->set_rules('title', 'Title', 'trim');
						$this->form_validation->set_rules('description', 'Description', 'trim');

						if ($this->form_validation->run() == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$upload_status = 'true';
							if (!empty($_FILES['icon']['name'])) {
								$upload_errors           = array();
								$config['upload_path']   = './uploads/' . $this->data->folder . '/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload('icon')) {
									$upload_status = 'false';
								}
							}


							if ($upload_status == "true") {
								$insertData = [
									'title' => $this->input->post('title'),
									'description ' => $this->input->post('description'),
									'icon' => $filename,
									'is_status' => 'false',
									'created_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp
								];

								$insertData = $this->security->xss_clean($insertData);
								if ($this->db->insert($this->data->table_newsletter, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Unable To Upload Banner Image';
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateNewsletter') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table_newsletter);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'News Letter Id', 'required|trim');
								$this->form_validation->set_rules('title', 'Title', 'trim');
								$this->form_validation->set_rules('description', 'Description', 'trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;

									$upload_status = 'true';

									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "_NewsLetter." . $extension;

										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload('icon')) {
											$upload_status = 'false';
										}
									}

									if ($upload_status == 'true') {
										$updateData = [
											'title' => $this->input->post('title'),
											'description ' => $this->input->post('description'),
											'icon' => $filename,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_newsletter, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['icon']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Icon Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateTermsDetails') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table_newsletter);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Id', 'required|trim');
								$this->form_validation->set_rules('cookies', 'Privacy & Cookies', 'required|trim');
								$this->form_validation->set_rules('exchangepolicy', 'Exchange Policy', 'required|trim');
								$this->form_validation->set_rules('returnpolicy', 'Return Policy', 'required|trim');
								$this->form_validation->set_rules('shippingterms', 'Shipping & Delivery', 'required|trim');
								$this->form_validation->set_rules('shoppingguide', 'Shopping Guide', 'required|trim');
								$this->form_validation->set_rules('choosesize', 'Choose Your Size', 'required|trim');
								$this->form_validation->set_rules('intellectual', 'Itellectual Property', 'required|trim');
								$this->form_validation->set_rules('refundpolicy', 'Refund Policy', 'required|trim');
								$this->form_validation->set_rules('cancellationpolicy', 'Cancellation Policy', 'required|trim');
								$this->form_validation->set_rules('termscondition', 'Terms & Condition', 'required|trim');
								$this->form_validation->set_rules('couponredemption', 'Coupon Redemption', 'required|trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {


									$updateData = [
										'privacy_cookie' => $this->input->post('cookies'),
										'exchange_policy' => $this->input->post('exchangepolicy'),
										'return_policy' => $this->input->post('returnpolicy'),
										'shipping_terms' => $this->input->post('shippingterms'),
										'shopping_guide' => $this->input->post('shoppingguide'),
										'choose_size' => $this->input->post('choosesize'),
										'intellectual_proprty' => $this->input->post('intellectual'),
										'refund_policy' => $this->input->post('refundpolicy'),
										'cancellation_policy ' => $this->input->post('cancellationpolicy'),
										'terms_condition ' => $this->input->post('termscondition'),
										'coupon_redemption ' => $this->input->post('couponredemption'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateDetailsTerms') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table_newsletter);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Id', 'required|trim');
								$this->form_validation->set_rules('type', 'Detail Type', 'required|trim');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									if ($this->input->post('type') == 'privacycookie') {
										$updateData = [
											'cookie_keyword' => $this->input->post('keyword'),
											'cookie_title' => $this->input->post('metatitle'),
											'cookie_description' => $this->input->post('metadescription'),
											'privacy_cookie' => $this->input->post('cookies'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'intellectual') {
										$updateData = [
											'intellectual_keyword' => $this->input->post('keyword'),
											'intellectual_title' => $this->input->post('metatitle'),
											'intellectual_description' => $this->input->post('metadescription'),
											'intellectual_proprty' => $this->input->post('intellectual'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'exchangepolicy') {
										$updateData = [
											'exchange_keyword' => $this->input->post('keyword'),
											'exchange_title' => $this->input->post('metatitle'),
											'exchange_description' => $this->input->post('metadescription'),
											'exchange_policy' => $this->input->post('exchangepolicy'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'refund') {
										$updateData = [
											'refund_keyword' => $this->input->post('keyword'),
											'refund_title' => $this->input->post('metatitle'),
											'refund_description' => $this->input->post('metadescription'),
											'refund_policy' => $this->input->post('refundpolicy'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'return') {
										$updateData = [
											'return_keyword' => $this->input->post('keyword'),
											'return_title' => $this->input->post('metatitle'),
											'return_description' => $this->input->post('metadescription'),
											'return_policy' => $this->input->post('returnpolicy'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'termscancellation') {
										$updateData = [
											'cancellation_keyword' => $this->input->post('keyword'),
											'cancellation_title' => $this->input->post('metatitle'),
											'cancellation_description' => $this->input->post('metadescription'),
											'cancellation_policy ' => $this->input->post('cancellationpolicy'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'termscondition') {
										$updateData = [
											'terms_keyword' => $this->input->post('keyword'),
											'terms_title' => $this->input->post('metatitle'),
											'terms_description' => $this->input->post('metadescription'),
											'terms_condition ' => $this->input->post('termscondition'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'ShippingShopping') {
										$updateData = [
											'shipping_keyword' => $this->input->post('keyword'),
											'shipping_title' => $this->input->post('metatitle'),
											'shipping_description' => $this->input->post('metadescription'),
											'shipping_terms' => $this->input->post('shippingterms'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'ShoppingGuide') {
										$updateData = [
											'shopping_keyword' => $this->input->post('keyword'),
											'shopping_title' => $this->input->post('metatitle'),
											'shopping_description' => $this->input->post('metadescription'),
											'shopping_guide' => $this->input->post('shoppingguide'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'CouponAndSize') {
										$updateData = [
											'coupon_keyword' => $this->input->post('keyword'),
											'coupon_title' => $this->input->post('metatitle'),
											'coupon_description' => $this->input->post('metadescription'),
											'coupon_redemption ' => $this->input->post('couponredemption'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} elseif ($this->input->post('type') == 'ChooseSize') {
										$updateData = [
											'size_keyword' => $this->input->post('keyword'),
											'size_title' => $this->input->post('metatitle'),
											'size_description' => $this->input->post('metadescription'),
											'choose_size' => $this->input->post('choosesize'),
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_terms, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Invalid Detail Type';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateCornerPopup') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table_cornerpopup);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Corner PopUp Id', 'required|trim');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$filename = $old_filename;

									$upload_status = 'true';

									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "_PopUp." . $extension;

										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload('icon')) {
											$upload_status = 'false';
										}
									}

									if ($upload_status == 'true') {
										$updateData = [
											'icon' => $filename,
											'modified_at' => $this->data->timestamp
										];
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_cornerpopup, $updateData);
										if ($result) {
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
											if (!empty($_FILES['icon']['name'])) {
												unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
											}
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Icon Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateAbout') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table_about);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Corner PopUp Id', 'required|trim');
								$this->form_validation->set_rules('name', 'Name', 'required|trim');
								$this->form_validation->set_rules('message', 'Message', 'required|trim');
								$this->form_validation->set_rules('title', 'Title', 'required|trim');
								$this->form_validation->set_rules('description', 'Description', 'required|trim');


								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->icon;
									$old_filename2 = $data['list'][0]->mainicon;
									$old_filename3 = $data['list'][0]->image;
									$filename = $old_filename;
									$filename2 = $old_filename2;
									$filename3 = $old_filename3;

									$upload_status = 'true';

									if (!empty($_FILES['icon']['name'])) {
										$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "_About." . $extension;

										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload('icon')) {
											$upload_status = 'false';
										}
									}

									$upload_status2 = 'true';

									if (!empty($_FILES['mainicon']['name'])) {
										$extension2 = pathinfo($_FILES['mainicon']['name'], PATHINFO_EXTENSION);
										$filename2 = time() . rand() . "_MainAbout." . $extension2;

										$upload_errors2           = array();
										$config2['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config2['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config2['max_size']      = 2048;
										$config2['file_name']     = $filename2;
										$this->load->library('upload', $config2);
										if (!$this->upload->do_upload('mainicon')) {
											$upload_status2 = 'false';
										}
									}

									$upload_status3 = 'true';

									if (!empty($_FILES['image']['name'])) {
										$extension3 = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
										$filename3 = time() . rand() . "_Image." . $extension3;

										$upload_errors3           = array();
										$config3['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config3['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config3['max_size']      = 2048;
										$config3['file_name']     = $filename3;
										$this->load->library('upload', $config3);
										if (!$this->upload->do_upload('image')) {
											$upload_status3 = 'false';
										}
									}

									if ($upload_status == 'true') {
										if ($upload_status2 == 'true') {
											if ($upload_status3 == 'true') {
												$updateData = [
													'icon' => $filename,
													'mainicon' => $filename2,
													'image' => $filename3,
													'name' => $this->input->post('name'),
													'message' => $this->input->post('message'),
													'title' => $this->input->post('title'),
													'description' => $this->input->post('description'),
													'meta_description' => $this->input->post('metadescription'),
													'meta_title' => $this->input->post('metatitle'),
													'meta_keyword' => $this->input->post('keyword'),
													'modified_at' => $this->data->timestamp
												];
												$updateData = $this->security->xss_clean($updateData);
												$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table_about, $updateData);
												if ($result) {
													$output['res'] = 'success';
													$output['msg'] = 'Data Updated Successfully.';
													if (!empty($_FILES['icon']['name'])) {
														unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
													}
												} else {
													$output['msg'] = 'Something went wrong in Data Saving.';
												}
											} else {
												$output['msg'] = 'Image Unable To Upload.';
											}
										} else {
											$output['msg'] = 'Main Banner Unable To Upload.';
										}
									} else {
										$output['msg'] = 'Main Banner Unable To Upload.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateGiftWrapTerms') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('manage_content');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Id', 'required|trim');
								$this->form_validation->set_rules('giftwrap_termscondition', 'giftwrap_termscondition', 'required');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'giftwrap_termscondition' => base64_encode($this->input->post('giftwrap_termscondition')),
									];
									$result = $this->db->where('id', $data['list'][0]->id)->update('manage_content', $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateWebsiteDetails') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get('manage_content');
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('id', 'Id', 'required|trim');
								$this->form_validation->set_rules('website_name', 'WebSite name', 'required');
								$this->form_validation->set_rules('website_email', 'Website email', 'required');
								$this->form_validation->set_rules('website_mobile', 'Website mobile number', 'required');
								$this->form_validation->set_rules('website_link', 'Website link', 'required');
								$this->form_validation->set_rules('copyright_name', 'Copyright name', 'required');
								$this->form_validation->set_rules('copyright_link', 'copyright link', 'required');
								$this->form_validation->set_rules('website_address', 'Website address', 'required');
								// $this->form_validation->set_rules('website_main_logo','Website main logo','required');
								// $this->form_validation->set_rules('website_royal_logo','Website royal logo','required');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$old_filename = $data['list'][0]->website_main_logo;
									$old_filename2 = $data['list'][0]->website_royal_logo;
									$filename = $old_filename;
									$filename2 = $old_filename2;

									$upload_status = 'true';
									if (!empty($_FILES['website_main_logo']['name'])) {
										$extension = pathinfo($_FILES['website_main_logo']['name'], PATHINFO_EXTENSION);
										$filename = time() . rand() . "_logo." . $extension;

										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload('website_main_logo')) {
											$upload_status = 'false';
										} else {
											unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
										}
									}

									$upload_status2 = 'true';
									if (!empty($_FILES['website_royal_logo']['name'])) {
										$extension2 = pathinfo($_FILES['website_royal_logo']['name'], PATHINFO_EXTENSION);
										$filename2 = time() . rand() . "_royallogo." . $extension2;

										$upload_errors2           = array();
										$config2['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config2['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config2['max_size']      = 2048;
										$config2['file_name']     = $filename2;
										$this->load->library('upload', $config2);
										if (!$this->upload->do_upload('website_royal_logo')) {
											$upload_status2 = 'false';
										} else {
											// unlinkFile('./uploads/' . $this->data->folder . '/'.$old_filename2);
										}
									}


									if ($upload_status == 'true') {
										if ($upload_status2 == 'true') {
											$updateData = [
												'website_name' => $this->input->post('website_name'),
												'website_email' => $this->input->post('website_email'),
												'website_mobile' => $this->input->post('website_mobile'),
												'website_link' => $this->input->post('website_link'),
												'copyright_name' => $this->input->post('copyright_name'),
												'copyright_link' => $this->input->post('copyright_link'),
												'website_address' => $this->input->post('website_address'),
												'website_main_logo' => $filename,
												'website_royal_logo' => $filename2
											];
											$result = $this->db->where('id', $data['list'][0]->id)->update('manage_content', $updateData);
											if ($result) {
												$output['res'] = 'success';
												$output['msg'] = 'Data Updated Successfully.';
											} else {
												$output['msg'] = 'Something went wrong in Data Saving.';
											}
										} else {
											$output['msg'] = 'Something went wrong to update website logo.';
										}
									} else {
										$output['msg'] = 'Something went wrong to update royal logo.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$querynewsletter = $this->db->order_by("id", "DESC")->get($this->data->table_newsletter);
			$querypopup = $this->db->order_by("id", "DESC")->get($this->data->table_cornerpopup);
			$queryabout = $this->db->order_by("id", "DESC")->get($this->data->table_about);
			$queryterms = $this->db->order_by("id", "DESC")->get($this->data->table_terms);

			$data["listnewsletter"] = $querynewsletter->result();
			$data["listcornerpopup"] = $querypopup->result();
			$data["listabout"] = $queryabout->result();
			$data["listterms"] = $queryterms->result();
			$data["termsdata"] = $queryterms->row();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Career
	public function ManageCareer()
	{
		$this->data->table = 'tbl_job_post';
		$this->data->key = 'job_post';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == true) {

			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == true) {
				$id = $this->uri->segment(4);
				if ($action == 'Edit') {
					$data['list'] = $this->db->get_where($this->data->table, ['id' => $id])->result();
					$data['action'] = 'EditCareer';
					$this->load->view($this->data->controller . '/UpdateData', $data);
				}
			} else {
				if ($action == 'Add') {
					if ($this->form_validation->run($this->data->key) == false) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {
						$insertData = [
							'title' => $this->input->post('job_title'),
							'mail' => $this->input->post('mail'),
							'description' => base64_encode($this->input->post('desc')),
							'is_status' => 'true',
							'created_at' => $this->data->timestamp,
							'modified_at' => $this->data->timestamp,
						];
						$insertData = $this->security->xss_clean($insertData);
						if ($this->db->insert($this->data->table, $insertData)) {
							$output['res'] = 'success';
							$output['msg'] = 'Job Added Successfully!';
						} else {
							$output['msg'] = 'Opps! Something went wrong';
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'Update') {
					if (!empty($this->input->post('id'))) {
						if ($this->form_validation->run($this->data->key) == false) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$id = $this->input->post('id');
							$updateData = [
								'title' => $this->input->post('job_title'),
								'mail' => $this->input->post('mail'),
								'description' => base64_encode($this->input->post('desc')),
								'modified_at' => $this->data->timestamp,
							];
							$updateData = $this->security->xss_clean($updateData);
							if ($this->db->where('id', $id)->update($this->data->table, $updateData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Job Updated Successfully!';
							} else {
								$output['msg'] = 'Opps! Something went wrong';
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data['activepage'] = 'ManageCareer';
			$data['list'] = $this->db->get_where($this->data->table)->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#  Reward Point Settings 
	public function RewardPointsSetting()
	{
		$this->data->key = 'Reward Points Setting';
		$this->data->table = 'reward_point_setting';
		$data['activepage'] = 'RewardPointsSetting';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditRewardPointSetting";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('firstorder', 'First Order', 'required|trim|numeric');
								$this->form_validation->set_rules('birthday', 'Celebrate A Birthday', 'required|trim|numeric');
								$this->form_validation->set_rules('anniversary', 'Marriage Anniversary', 'required|trim|numeric');
								$this->form_validation->set_rules('rewardvalue', '1 Reward Point Value', 'required|trim|numeric');
								$this->form_validation->set_rules('shareapp', 'Share App Points', 'required|trim|numeric');
								$this->form_validation->set_rules('visit', '7 Days Visit Points', 'required|trim|numeric');
								$this->form_validation->set_rules('womensday', 'Womens Day Points', 'required|trim|numeric');
								$this->form_validation->set_rules('minredemption', 'Min Redemption Points', 'required|trim|numeric');
								$this->form_validation->set_rules('productfeedback', 'Product Feedback Points', 'required|trim|numeric');
								$this->form_validation->set_rules('expire_date', 'Expire Date', 'required|trim|numeric');
								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$updateData = [
										'login' => '',
										'register' => '',
										'first_order' => $this->input->post('firstorder'),
										'birthday' => $this->input->post('birthday'),
										'marriage_anniversary' => $this->input->post('anniversary'),
										'new_couple' => '',
										'become_parent' => '',
										'reward_value ' => $this->input->post('rewardvalue'),
										'min_redemption ' => $this->input->post('minredemption'),
										'beauty_tips ' => '',
										'womens_day ' => $this->input->post('womensday'),
										'ready_mother ' => '',
										'office_wear ' => '',
										'visit ' => $this->input->post('visit'),
										'share_app ' => $this->input->post('shareapp'),
										'newsletter ' => '',
										'product_feedback ' => $this->input->post('productfeedback'),
										'student ' => '',
										'expire_date ' => $this->input->post('expire_date'),
										'modified_at' => $this->data->timestamp
									];
									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#  Manage cart,wishlit and other limit 
	public function ManageLimit()
	{
		$this->data->key = 'Manage Limit';
		$this->data->table = 'manage_content';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);

				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditLimit";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								$this->form_validation->set_rules('cart_limit', 'Add To Cart Limit', 'required|trim|numeric');
								$this->form_validation->set_rules('wishlist_limit', 'Add To Wishlist Limit', 'required|trim|numeric');
								$this->form_validation->set_rules('cashback_limit', 'Cashback Used Limit', 'required|trim|numeric');
								$this->form_validation->set_rules('reward_limit', 'Reward Used Limit', 'required|trim|numeric');

								if ($this->form_validation->run() == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {
									$upload_status2 = 'true';
									$old_filename2 = $data['list'][0]->sitemap;

									if (!empty($_FILES['sitemap']['name'])) {
										$extension2 = pathinfo($_FILES['sitemap']['name'], PATHINFO_EXTENSION);
										$filename2 = "sitemap." . $extension2;

										$upload_errors2           = array();
										$config2['upload_path']   = './';
										$config2['allowed_types'] = 'xml';
										$config2['max_size']      = 2048;
										$config2['file_name']     = $filename2;
										$this->load->library('upload', $config2);
										if (unlinkFile('./' . $old_filename2)) {
											if (!$this->upload->do_upload('sitemap')) {
												$upload_status2 = 'false';
												$filename2 = '';
											}
										}
									} else {
										$filename2 = $old_filename2;
									}

									$upload_status3 = 'true';
									$old_filename3 = $data['list'][0]->robot;

									if (!empty($_FILES['robot']['name'])) {
										$extension3 = pathinfo($_FILES['robot']['name'], PATHINFO_EXTENSION);
										$filename3 = "robots." . $extension3;

										$upload_errors2           = array();
										$config3['upload_path']   = './';
										$config3['allowed_types'] = 'txt|text';
										$config3['max_size']      = 2048;
										$config3['file_name']     = $filename3;
										$this->load->library('upload', $config3);
										if (unlinkFile('./' . $old_filename3)) {
											if (!$this->upload->do_upload('robot')) {
												$upload_status3 = 'false';
												$filename3 = $old_filename3;
											}
										}
									} else {
										$filename3 = $old_filename3;
									}

									$updateData = [
										'cart_limit' => $this->input->post('cart_limit'),
										'wishlist_limit' => $this->input->post('wishlist_limit'),
										'cashback_used_limit' => $this->input->post('cashback_limit'),
										'reward_used_limit' => $this->input->post('reward_limit'),
										'royal_prebookig_status' => $this->input->post('royal_prebookig_status'),
										'royal_feature_activated_limit' => $this->input->post('royal_feature_activated_limit'),
										'sitemap' => $filename2,
										'robot' => $filename3
									];

									$updateData = $this->security->xss_clean($updateData);
									$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
									if ($result) {
										$output['res'] = 'success';
										$output['msg'] = 'Data Updated Successfully.';
									} else {
										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {
			$data['activepage'] = 'business_setting';
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	# Account Settings
	public function AccountSettings()
	{
		if ($this->sysAuth == true) {
			$this->data->table = $this->roleData_1->table_name;
			$data['profile'] = $this->userData_1;
		} else {
			$this->data->table = $this->roleData->table_name;
			$data['profile'] = $this->userData;
		}
		$this->data->folder = 'profile_pic';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->key = 'ChangePassword';
		$this->data->file_column = 'profile_pic';
		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);
			if ($action == 'Logout') {
				$this->Auth_model->logout($this->roleData->table_name, $this->user_id);
				$this->session->unset_userdata($this->roleData->session);
				if ($this->sysAuth == true) {
					$sessionAuth = $this->roleData->session . $this->roleData_1->session;
					$this->Auth_model->logout($this->roleData_1->table_name, $this->user_id_1);
					$this->session->unset_userdata($sessionAuth);
				}
				$this->session->set_flashdata(['res' => 'success', 'msg' => 'Logout Successfully.']);
				redirect(base_url('Auth/AdminLogin'));
			} else if ($action == 'ChangePassword') {
				if (!empty($this->input->post())) {
					if ($this->form_validation->run($this->data->key) == FALSE) {
						$msg = explode('</p>', validation_errors());
						$output['msg'] = str_ireplace('<p>', '', $msg[0]);
					} else {
						$opass = $this->input->post('opass');
						$npass = $this->input->post('npass');
						$cpass = $this->input->post('cpass');
						if ($this->sysAuth == true) {
							$user_id = $this->user_id_1;
						} else {
							$user_id = $this->user_id;
						}
						$result = $this->db->where('id', $user_id)->get($this->data->table);
						$values = $result->row();
						if ($values->password == $opass) {
							if ($npass == $cpass) {
								$result = $this->db->where('id', $user_id)->update($this->data->table, ['password' => $npass]);
								if ($result) {
									$output['res'] = 'success';
									$output['msg'] = 'Password Changed.';
								} else {
									$output['msg'] = 'Failed !';
								}
							} else {
								$output['msg'] = 'New and Confirm Password are not match.';
							}
						} else {
							$output['msg'] = 'Invalid Current Password';
						}
					}
					echo json_encode([$output]);
				} else {
					$data['activepage'] = 'ChangePassword';
					$this->load->view($this->data->controller . '/ChangePassword', $data);
				}
			} else if ($action == 'UpdateProfile') {
				if (!empty($this->input->post('name'))) {
					if ($this->sysAuth == true) {
						$user_id = $this->user_id_1;
					} else {
						$user_id = $this->user_id;
					}
					$query = $this->db->where('id', $user_id)->get($this->data->table);
					$data['list'] = $query->result();
					$old_filename = $data['list'][0]->icon;
					$filename = $old_filename;
					if (!empty($_FILES['icon']['name'])) {
						$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
						$filename = time() . rand() . "." . $extension;
					}
					$updateData = [
						'name' => $this->input->post('name'),
						'icon' => $filename,
						'modified_at' => $this->data->timestamp
					];
					$updateData = $this->security->xss_clean($updateData);
					$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
					if ($result) {
						$output['res'] = 'success';
						$output['msg'] = 'Profile Updated Successfully.';
						if (!empty($_FILES['icon']['name'])) {
							$upload_errors           = array();
							$config['upload_path']   = './uploads/' . $this->data->folder . '/';
							$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
							$config['max_size']      = 2048;
							$config['file_name']     = $filename;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('icon')) {
								array_push($upload_errors, array(
									'error_upload' => $this->upload->display_errors()
								));
								$output['msg'] = 'Data saved but error in file upload.';
							}
							unlinkFile('./uploads/' . $this->data->folder . '/' . $old_filename);
						}
					} else {
						$output['msg'] = 'Something went wrong in Data Saving.';
					}
					echo json_encode([$output]);
				} else {
					$data['activepage'] = 'UpdateProfile';
					$this->load->view($this->data->controller . '/UpdateProfile', $data);
				}
			} else {
				redirect(base_url($this->data->controller . '/' . $this->data->method));
			}
		} else {
			if ($this->sysAuth == true) {
				$data["activitiesList"] = $this->Auth_model->getResultDesc('activities', ['role_id' => $this->roleData_1->id, 'user_id' => $this->userData_1->id], 'id');
			} else {
				$data["activitiesList"] = $this->Auth_model->getResultDesc('activities', ['role_role_id' => $this->roleData->id, 'user_user_id' => $this->userData->id], 'id');
			}
			$i = 0;
			$return = [];
			foreach ($data["activitiesList"] as $item) {
				$return[$i] = $item;
				$roleData = $this->Auth_model->getRole($item->role_id);
				$return[$i]->user = $this->db->where('id', $item->user_id)->get($roleData->table_name)->row();
				$i++;
			}
			$data['activepage'] = 'AccountSettings';
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}
	#Manage Orders
	public function ManageOrders()
	{
		$this->table = 'tbl_order';
		$this->table_cart = 'tbl_cart';
		$this->data->key = 'Order';
		$output['res'] = 'error';

		$action = $this->uri->segment(3);
		$id = $this->uri->segment(4);
		if ($this->uri->segment(4) == true) {
			if ($action == 'View') {
				$query = $this->db->get_where($this->table, array('id' => $id));
				$data["order"] = $query->result();
				$data["action"] = "ViewOrder";
				$this->load->view($this->data->controller . '/ViewOrderDetails', $data);
			} elseif ($action == 'CancelItemDetails') {
				$query = $this->db->get_where($this->table_cart, array('id' => $id));
				$data["cart"] = $query->row();
				$data["action"] = "CancelItemDetails";
				$this->load->view($this->data->controller . '/UpdateData', $data);
			} elseif ($action == 'shipProcessingOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'processing']);

				#Update Order Status Activity
				$OrderStatusUpdate = false;
				$tbl_track = $this->db->get_where('tbl_track_product', ['cartid' => $id])->row();
				if (!empty($tbl_track)) {
					$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['placed_datetime' => $this->data->timestamp]);
				} else {
					$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'placed_datetime' => $this->data->timestamp, 'is_status' => 'true']);
				}

				if ($isUpdate and $OrderStatusUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order shipped for processing.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipDispatchOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'dispatched']);
				#Update Order Status Activity
				$OrderStatusUpdate = false;
				$tbl_track = $this->db->get_where('tbl_track_product', ['cartid' => $id])->row();
				if (!empty($tbl_track)) {
					$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['dispatched_datetime' => $this->data->timestamp]);
				} else {
					$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'placed_datetime' => $this->data->timestamp, 'dispatched_datetime' => $this->data->timestamp, 'is_status' => 'true']);
				}

				if ($isUpdate and $OrderStatusUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order shipped for dispatch.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipTransitOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'transit']);
				#Update Order Status Activity
				$OrderStatusUpdate = false;
				$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
				if (!empty($tbl_track)) {
					$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['transit_datetime' => $this->data->timestamp]);
				} else {
					$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'transit_datetime' => $this->data->timestamp, 'is_status' => 'true']);
				}

				if ($isUpdate and $OrderStatusUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order shipped for transit.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipDeliveredOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'delivered']);
				#Update Order Status Activity
				$OrderStatusUpdate = false;
				$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
				if (!empty($tbl_track)) {
					$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['delivered_datetime' => $this->data->timestamp]);
				} else {
					$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'delivered_datetime' => $this->data->timestamp, 'is_status' => 'true']);
				}
				if ($isUpdate and $OrderStatusUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order delivered.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipRtoOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'rto']);
				if ($isUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order shipped for RTO.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipCancelOrders') {
				$selectedId = (array)$id;
				$refund_amount = $this->input->post('refund_amount');
				$refunded = false;
				if (!empty($selectedId)) {
					$ItemData = $this->db->where_in('id', $selectedId)->get('tbl_cart');
					if (!empty($ItemData->row())) {
						$ItemData = $ItemData->row();
						$return_details = json_decode($ItemData->return_details);
						if ($ItemData->order_status != 'refund') {
							$orderid = $ItemData->orderid;
							$order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
							$userid = $order_details->userid;
							$amount = 0;
							$updateData = [];

							#Refund wallet amount which is used purchase
							$cashback = 0;
							$reward = 0;
							if (!empty($order_details->wallet_discount)) {
								$cartOrder = $this->db->get_where('tbl_cart', array('orderid' => $orderid))->result();
								$wallet_discount = (($order_details->wallet_discount) / (count($cartOrder))) * (count($selectedId));
								$refund_amount -= $wallet_discount;
								$reward_point_setting = $this->db->get_where('reward_point_setting')->row();
								if ($order_details->wallet_apply_type == 'cashback') {
									$cashback += $wallet_discount;
								} elseif ($order->wallet_apply_type == 'reward') {
									$reward += (int)(($wallet_discount) / ($reward_point_setting->reward_value));
								}
							}

							if (!empty($order_details)) {
								if ($order_details->pay_mode == 'online' and $order_details->PaymentStatus == 'Success') {
									$paymentId = $order_details->rzp_paymentid;
									$refundData = (array)$this->razorpay->getRazorpayRefund($paymentId, $refund_amount);
									$refundData = array_values($refundData)[0];
									unset($refundData['notes']);
									unset($refundData['acquirer_data']);

									if (!empty($refundData) and $refundData['status'] == 'processed') {
										$refundId = $refundData['id'];
										$refundAmount = $refundData['amount'];

										for ($i = 0; $i < count($selectedId); $i++) {
											$data = [
												'id' => $selectedId[$i],
												'order_status' => 'cancelled',
												'rzp_refundid' => $refundId,
												'refund_amount' => $refund_amount,
												'cancel_reason' => 'Cancelled by slickpattern due to some reason',
												'cancel_date_time' => $this->data->timestamp
											];
											array_push($updateData, $data);
										}
										$amount += (int)($refundAmount + $cashback + $reward);
										if ($cashback > 0 || $reward > 0) {
											$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
										}
										$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
										$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
										if ($isUpdate and $isUpdate2) {
											$refunded = true;
											#Update Order Status Activity
											$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
											if (!empty($tbl_track)) {
												$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['cancelled_datetime' => $this->data->timestamp]);
											} else {
												$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'cancelled_datetime' => $this->data->timestamp, 'is_status' => 'true']);
											}
										}
									}
								} else {

									for ($i = 0; $i < count($selectedId); $i++) {
										$data = [
											'id' => $selectedId[$i],
											'order_status' => 'cancelled',
											'cancel_reason' => 'Cancelled by slickpattern due to some reason',
											'cancel_date_time' => $this->data->timestamp
										];
										array_push($updateData, $data);
									}

									if ($cashback > 0 || $reward > 0) {
										$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
									}
									$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
									if ($isUpdate) {
										$refunded = true;
										#Update Order Status Activity
										$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
										if (!empty($tbl_track)) {
											$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['cancelled_datetime' => $this->data->timestamp]);
										} else {
											$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'cancelled_datetime' => $this->data->timestamp, 'is_status' => 'true']);
										}
									}
								}

								#Restock refunded product
								if ($refunded == true) {
									#Size Inventory Management For Individual
									$IndCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => '', 'availability' => ''])->get('tbl_cart')->result();
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
									$ComboCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => 'true', 'availability' => ''])->get('tbl_cart')->result();
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
									$output['msg'] = 'Cancelled Successfully.';
								} else {
									$output['msg'] = 'Something went wrong';
								}
							}
						} else {
							$output['msg'] = 'Item already  refunded.';
						}
					}
				} else {
					$output['msg'] = 'Id required.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipReturnOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'returned']);
				#Update Order Status Activity
				$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
				if (!empty($tbl_track)) {
					$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['replaced_datetime' => $this->data->timestamp]);
				} else {
					$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'replaced_datetime' => $this->data->timestamp, 'is_status' => 'true']);
				}

				if ($isUpdate and $OrderStatusUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order return successfully.';
				} else {
					$output['msg'] = 'Something went wrong.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'shipRefundOrders') {
				$selectedId = (array)$id;
				$refund_amount = $this->input->post('refund_amount');
				$refunded = false;
				if (!empty($selectedId)) {
					$ItemData = $this->db->where_in('id', $selectedId)->get('tbl_cart');
					if (!empty($ItemData->row())) {
						$ItemData = $ItemData->row();
						$return_details = json_decode($ItemData->return_details);
						if ($ItemData->order_status != 'refund') {
							$orderid = $ItemData->orderid;
							$order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
							$amount = 0;
							$updateData = [];

							if (!empty($order_details)) {
								#Refund wallet amount which is used purchase
								$cashback = 0;
								$reward = 0;
								if (!empty($order_details->wallet_discount)) {
									$cartOrder = $this->db->get_where('tbl_cart', array('orderid' => $orderid))->result();
									$wallet_discount = (($order_details->wallet_discount) / (count($cartOrder))) * (count($selectedId));
									$refund_amount -= $wallet_discount;

									$reward_point_setting = $this->db->get_where('reward_point_setting')->row();
									if ($order_details->wallet_apply_type == 'cashback') {
										$cashback += $wallet_discount;
									} elseif ($order->wallet_apply_type == 'reward') {
										$reward += (int)(($wallet_discount) / ($reward_point_setting->reward_value));
									}
								}

								if ($order_details->pay_mode == 'online' and $order_details->PaymentStatus == 'Success') {
									$paymentId = $order_details->rzp_paymentid;
									$refundData = (array)$this->razorpay->getRazorpayRefund($paymentId, $refund_amount);
									$refundData = array_values($refundData)[0];
									unset($refundData['notes']);
									unset($refundData['acquirer_data']);

									if (!empty($refundData) and $refundData['status'] == 'processed') {
										$refundId = $refundData['id'];
										$refundAmount = $refundData['amount'];

										for ($i = 0; $i < count($selectedId); $i++) {
											$data = [
												'id' => $selectedId[$i],
												'order_status' => 'refunded',
												'rzp_refundid' => $refundId,
												'refund_amount' => $refund_amount,
											];
											array_push($updateData, $data);
										}
										$amount += (int)($refundAmount + $cashback + $reward);
										if ($cashback > 0 || $reward > 0) {
											$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
										}
										$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
										$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
										if ($isUpdate and $isUpdate2) {
											$refunded = true;
										}
									}
								} else {

									for ($i = 0; $i < count($selectedId); $i++) {
										$data = [
											'id' => $selectedId[$i],
											'order_status' => 'refunded',
											'rzp_refundid' => '',
											'refund_amount' => $refund_amount,
										];
										array_push($updateData, $data);
									}
									$amount += (int)($refundAmount + $cashback + $reward);
									#Refund in provided bank account
									if ($return_details->transfer_type == 'account') {

										$accId = $return_details->account_details;
										$user_account = $this->db->get_where('tbl_user_account', ['id' => $accId, 'is_status' => 'true'])->row();
										if (!empty($user_account)) {
											$account_holder = $user_account->account_holder_name;
											$ifsc_code = $user_account->ifsc_code;
											$account_number = $user_account->account_number;
											//==================================================//
											# Intergrate api for refund when payment method is cod--later
											//==================================================//

											if ($cashback > 0 || $reward > 0) {
												$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
											}
											$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
											$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
											if ($isUpdate and $isUpdate2) {
												$refunded = true;
											}
										}
									} else {
										#Refund in provided wallet details
										$userid = $ItemData->userid;
										$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $refund_amount, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
										if ($isInsert) {
											if ($cashback > 0 || $reward > 0) {
												$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
											}
											$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
											$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
											if ($isUpdate and $isUpdate2) {
												$refunded = true;
											}
										}
									}
								}

								#Restock refunded product
								if ($refunded == true) {

									#Update Order Status Activity
									$tbl_track = $this->db->get_where('tbl_track_product', ['id' => $id])->row();
									if (!empty($tbl_track)) {
										$OrderStatusUpdate = $this->db->where(['cartid' => $id])->update('tbl_track_product', ['refunded_detetime' => $this->data->timestamp]);
									} else {
										$OrderStatusUpdate = $this->db->insert('tbl_track_product', ['cartid' => $id, 'refunded_detetime' => $this->data->timestamp, 'is_status' => 'true']);
									}

									#Size Inventory Management For Individual
									$IndCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => '', 'availability' => ''])->get('tbl_cart')->result();
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
									$ComboCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => 'true', 'availability' => ''])->get('tbl_cart')->result();
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
									$output['msg'] = 'Refund Successfully.';
								}
							}
						} else {
							$output['msg'] = 'Item already  refunded.';
						}
					}
				} else {
					$output['msg'] = 'Id required.';
				}
				echo json_encode([$output]);
			} elseif ($action == 'MarkLostOrders') {
				$isUpdate = $this->db->where(['id' => $id])->update($this->table_cart, ['order_status' => 'lost']);
				if ($isUpdate) {
					$output['res'] = 'success';
					$output['msg'] = 'Order mark as lost';
				} else {
					$output['msg'] = 'Something went wrong';
				}
				echo json_encode([$output]);
			}
		} else {

			if ($this->uri->segment(3) == true) {
				if ($action == 'InitiateRefund') {
					$selectedId = $this->input->post('selectId');
					$selectedPayment = $this->input->post('selectPayment');
					$refund_amount = $this->input->post('refund_amount');
					$refund_reason = $this->input->post('refund_reason');
					$refunded = false;
					if (!empty($selectedId)) {
						$ItemData = $this->db->where_in('id', $selectedId)->get('tbl_cart');
						if (!empty($ItemData->row())) {
							$ItemData = $ItemData->row();
							$return_details = json_decode($ItemData->return_details);
							$orderid = $ItemData->orderid;
							$order_details = $this->db->get_where('tbl_order', ['orderid' => $orderid])->row();
							$amount = (int)$order_details->refund_amount;
							if (!empty($order_details)) {
								#Refund wallet amount which is used purchase
								$cashback = 0;
								$reward = 0;
								if (!empty($order_details->wallet_discount)) {
									$cartOrder = $this->db->get_where('tbl_cart', array('orderid' => $orderid))->result();
									$wallet_discount = (($order_details->wallet_discount) / (count($cartOrder))) * (count($selectedId));
									$refund_amount -= $wallet_discount;
									$reward_point_setting = $this->db->get_where('reward_point_setting')->row();
									if ($order_details->wallet_apply_type == 'cashback') {
										$cashback += $wallet_discount;
									} elseif ($order->wallet_apply_type == 'reward') {
										$reward += (int)(($wallet_discount) / ($reward_point_setting->reward_value));
									}
								}
								if ($order_details->pay_mode == 'online' and $order_details->PaymentStatus == 'Success') {
									$paymentId = $order_details->rzp_paymentid;
									$refundData = (array)$this->razorpay->getRazorpayRefund($paymentId, $refund_amount);
									$refundData = array_values($refundData)[0];
									unset($refundData['notes']);
									unset($refundData['acquirer_data']);

									if (!empty($refundData) and $refundData['status'] == 'processed') {
										$refundId = $refundData['id'];
										$refundAmount = $refundData['amount'];

										for ($i = 0; $i < count($selectedId); $i++) {
											$data = [
												'id' => $selectedId[$i],
												'order_status' => 'refunded',
												'rzp_refundid' => $refundId,
												'refund_amount' => $selectedPayment[$i],
											];
											array_push($updateData, $data);
										}
										$amount += (int)($refundAmount + $cashback + $reward);;
										if ($cashback > 0 || $reward > 0) {
											$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
										}
										$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
										$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
										if ($isUpdate and $isUpdate2) {
											$refunded = true;
										}
									}
								} else {

									for ($i = 0; $i < count($selectedId); $i++) {
										$data = [
											'id' => $selectedId[$i],
											'order_status' => 'refunded',
											'rzp_refundid' => '',
											'refund_amount' => $selectedPayment[$i],
										];
										array_push($updateData, $data);
									}
									$amount += (int)($refundAmount + $cashback + $reward);
									#Refund in provided bank account
									if ($return_details->transfer_type == 'account') {

										$accId = $return_details->account_details;
										$user_account = $this->db->get_where('tbl_user_account', ['id' => $accId, 'is_status' => 'true'])->row();
										if (!empty($user_account)) {
											$account_holder = $user_account->account_holder_name;
											$ifsc_code = $user_account->ifsc_code;
											$account_number = $user_account->account_number;
											//==================================================//
											# Intergrate api for refund when payment method is cod--later
											//==================================================//
											if ($cashback > 0 || $reward > 0) {
												$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
											}
											$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
											$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
											if ($isUpdate and $isUpdate2) {
												$refunded = true;
											}
										}
									} else {
										#Refund in provided wallet details(If no any bank details provided)
										$userid = $ItemData->userid;
										$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $refund_amount, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
										if ($isInsert) {
											if ($cashback > 0 || $reward > 0) {
												$isInsert = $this->db->insert('user_wallet', ['is_status' => 'true', 'userid' => $userid, 'balance' => $cashback, 'coins' => $reward, 'created_at' => $this->data->timestamp, 'modified_at' => $this->data->timestamp]);
											}
											$isUpdate = $this->db->update_batch('tbl_cart', $updateData, 'id');
											$isUpdate2 = $this->db->where('orderid', $orderid)->update('tbl_order', ['refund_amount' => $amount]);
											if ($isUpdate and $isUpdate2) {
												$refunded = true;
											}
										}
									}
								}

								#Restock refunded product
								if ($refunded == true) {
									#Update Order Status Activity
									$OrderStatusUpdate = $this->db->where_in('cartid', $selectedId)->update('tbl_track_product', ['replaced_datetime' => $this->data->timestamp]);

									#Size Inventory Management For Individual
									$IndCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => '', 'availability' => ''])->get('tbl_cart')->result();
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
									$ComboCart = $this->db->where_in('id', $selectedId)->where(['is_combo' => 'true', 'availability' => ''])->get('tbl_cart')->result();
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
									$output['msg'] = 'Refund Successfully.';
								}
							} else {
								$output['msg'] = 'Item already  refunded.';
							}
						}
					} else {
						$output['msg'] = 'Id required.';
					}
					echo json_encode([$output]);
				} elseif ($action == 'UpdateReturnStatus') {
					if (!empty($this->input->post('id'))) {
						$id = $this->input->post('id');
						$return_status = $this->input->post('return_status');
						$isUpdate = $this->db->where('id', $id)->update('tbl_cart', ['return_status' => $return_status]);
						if ($isUpdate) {
							$output['res'] = 'success';
							$output['msg'] = 'Return status updated.';
						} else {
							$output['msg'] = 'Something went wrong.';
						}
					} else {
						$output['msg'] = 'Id required.';
					}
					echo json_encode([$output]);
				} elseif ($action == 'AllOrders') {
					$data['activepage'] = 'AllOrders';
					$this->data->subTitle = "All Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'SaleOrders') {
					$data['activepage'] = 'SaleOrders';
					$this->data->subTitle = "Sale Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/SaleOrder', $data);
				} elseif ($action == 'RoyalOrders') {
					$data['activepage'] = 'RoyalOrders';
					$this->data->subTitle = "Royal Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/RoyalOrder', $data);
				} elseif ($action == 'PrebookOrders') {
					$data['activepage'] = 'PrebookOrders';
					$this->data->subTitle = "Prebooking Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/PrebookingOrder', $data);
				} elseif ($action == 'PrepaidOrders') {
					$data['activepage'] = 'PrepaidOrders';
					$this->data->subTitle = "Prepaid Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get_where($this->table, ['pay_mode' => 'online'])->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'PostpaidOrders') {
					$data['activepage'] = 'PostpaidOrders';
					$this->data->subTitle = "Prepaid Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get_where($this->table, ['pay_mode' => 'cod'])->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'IncompleteOrders') {
					$data['activepage'] = 'IncompleteOrders';
					$this->data->subTitle = "Incomplete Orders";
					$data['orders'] = $this->db->order_by('id', 'desc')->get_where($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'NewOrders') {
					$data['activepage'] = 'NewOrders';
					$this->data->subTitle = "New Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'pending'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'ProcessingOrders') {
					$data['activepage'] = 'ProcessingOrders';
					$this->data->subTitle = "Processing Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'processing'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'DispatchOrders') {
					$data['activepage'] = 'DispatchOrders';
					$this->data->subTitle = "Dispatch Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'dispatch'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'TransitOrders') {
					$data['activepage'] = 'TransitOrders';
					$this->data->subTitle = "Transit Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'transit'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'DeliveredOrders') {
					$data['activepage'] = 'DeliveredOrders';
					$this->data->subTitle = "Delivered Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'delivered'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'RtoOrders') {
					$data['activepage'] = 'RtoOrders';
					$this->data->subTitle = "RTO Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'rto'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'CancelOrders') {
					$data['activepage'] = 'CancelOrders';
					$this->data->subTitle = "Cancel Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'cancel'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'ReturnOrders') {
					$data['activepage'] = 'ReturnOrders';
					$this->data->subTitle = "Return Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'return'])->result_array(); 
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'RefundOrders') {
					$data['activepage'] = 'RefundOrders';
					$this->data->subTitle = "Refund Orders";
					// $data['orders']=$this->db->order_by('id','desc')->get_where($this->table,['order_status'=>'refund'])->result_array();
					$data['orders'] = $this->db->order_by('id', 'desc')->get($this->table)->result_array();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				}
			} else {
				redirect(base_url($this->data->controller));
			}
		}
	}
	#Invoice
	public function invoice()
	{
		$this->table = 'tbl_order';
		$this->tbl_cart = 'tbl_cart';
		$this->data->key = 'Order';

		$uid = $this->uri->segment(3);
		$oid = $this->uri->segment(4);
		if ($this->uri->segment(3) == true and $this->uri->segment(4) == true) {
			if ($this->uri->segment(5) == true) {
				$action = $this->uri->segment(5);
				if ($action == 'PacketInvoice') {
					$query = $this->db->get_where($this->table, array('orderid' => $oid));
					$data["orders"] = $query->result_array();
					$data["amount"] = $uid;
					$this->load->view($this->data->controller . '/PacketInvoice', $data);
				}
			} else {
				$data["orders"] = $this->db->get_where($this->table, array('orderid' => $oid))->result_array();
				$data["cart"] = $this->db->get_where($this->tbl_cart, array('id' => $uid, 'orderid' => $oid))->result();
				$this->load->view($this->data->controller . '/' . $this->data->method, $data);
			}
		} else {
			redirect(base_url($this->data->controller));
		}
	}

	#Benefits Details
	public function BenefitsDetails($table, $id)
	{
		$data['list'] = $this->db->get_where($table, ['id' => $id])->row();
		$data['action'] = 'BenefitsDetails';
		$this->load->view($this->data->controller . '/UpdateData', $data);
	}

	#Manage Review
	public function ManageReview()
	{
		$this->data->table = 'tbl_review';
		$this->data->folder = 'review';
		createFolder('./uploads/' . $this->data->folder);
		$this->data->file_column = 'icon';
		if ($this->uri->segment(3) == true) {
			$action = $this->uri->segment(3);
			if ($this->uri->segment(4) == true) {
				$filter_by = $this->uri->segment(4);
				if ($action == 'ProductReview') {
					if ($filter_by == 'NewComments') {
						$data['activepage'] = 'NewComments';
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => '', 'vendor_id' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'Published') {
						$data['activepage'] = 'Published';
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'published', 'vendor_id' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'Unpublished') {
						$data['activepage'] = 'Unpublished';
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'unpublished', 'vendor_id' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'TopRatings') {
						$data['activepage'] = 'TopRatings';
						$data['list'] = $this->db->order_by('rating', 'desc')->get_where('tbl_review', ['is_status' => 'published', 'vendor_id' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'TrashComments') {
						$data['activepage'] = 'TrashComments';
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'deleted', 'vendor_id' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method . '/' . $action));
					}
				} elseif ($action == 'VendorReview') {
					if ($filter_by == 'NewComments') {
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => '', 'vendor_id!=' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'Published') {
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'published', 'vendor_id!=' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'Unpublished') {
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'unpublished', 'vendor_id!=' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'TopRatings') {
						$data['list'] = $this->db->order_by('rating', 'desc')->get_where('tbl_review', ['is_status' => 'published', 'vendor_id!=' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} elseif ($filter_by == 'TrashComments') {
						$data['list'] = $this->db->get_where('tbl_review', ['is_status' => 'deleted', 'vendor_id!=' => ''])->result();
						$this->load->view($this->data->controller . '/' . $this->data->method, $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method . '/' . $action));
					}
				}
			} else {
				if ($action == 'ProductReview') {
					$data['activepage'] = 'ProductReview';
					$data['list'] = $this->db->order_by('id', 'desc')->get_where($this->data->table, ['vendor_id=' => ''])->result();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} elseif ($action == 'VendorReview') {
					$data['activepage'] = 'VendorReview';
					$data['list'] = $this->db->order_by('id', 'desc')->get_where($this->data->table, ['vendor_id!=' => ''])->result();
					$this->load->view($this->data->controller . '/' . $this->data->method, $data);
				} else {
					redirect(base_url('Admin'));
				}
			}
		}
	}



	#Manage Content
	public function ManageContent()
	{
		$this->table = 'manage_content';
		$action = $this->uri->segment(3);
		if ($this->uri->segment(3) == true) {
			if ($action == 'laundrytips') {
				if (!empty($this->input->post())) {
					$value = base64_encode($this->input->post('laundry_tips'));
					$isUpdate = $this->db->where('name', 'laundry_tips')->update($this->table, array('value' => $value));
					if ($isUpdate) {
						$output['res'] = 'success';
						$output['msg'] = 'Updated Successfully.';
					} else {
						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong.';
					}
				}
			}
			echo json_encode([$output]);
		} else {
			redirect(base_url($this->data->controller));
		}
	}

	#Send Message
	public function SendMessage()
	{
		$this->table = 'manage_content';
		$this->load->view($this->data->controller . '/' . $this->data->method);
	}

	#Bulk Uploads
	public function BulkUploads()
	{
		$this->data->key = "bulk uploads";
		if ($this->uri->segment(3) == true && !is_numeric($this->uri->segment(3))) {
			$action = $this->uri->segment(3);
			if ($action == 'Add') {

				// Make sure file is not cached (as it happens for example on iOS devices)
				header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
				header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
				header("Cache-Control: no-store, no-cache, must-revalidate");
				header("Cache-Control: post-check=0, pre-check=0", false);
				header("Pragma: no-cache");

				// 5 minutes execution time
				@set_time_limit(5 * 60);

				// Uncomment this one to fake upload time
				// usleep(5000);

				// Settings
				// $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
				$targetDir = './uploads/product';
				$cleanupTargetDir = true; // Remove old files
				$maxFileAge = 5 * 3600; // Temp file age in seconds


				// Create target dir
				if (!file_exists($targetDir)) {
					@mkdir($targetDir);
				}

				// Get a file name
				if (isset($_REQUEST["name"])) {
					$fileName = $_REQUEST["name"];
				} elseif (!empty($_FILES)) {
					$fileName = $_FILES["file"]["name"];
				} else {
					$fileName = uniqid("file_");
				}

				$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

				// Chunking might be enabled
				$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
				$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


				// Remove old temp files	
				if ($cleanupTargetDir) {
					if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
						die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
					}

					while (($file = readdir($dir)) !== false) {
						$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

						// If temp file is current file proceed to the next
						if ($tmpfilePath == "{$filePath}.part") {
							continue;
						}

						// Remove temp file if it is older than the max age and is not the current file
						if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
							@unlink($tmpfilePath);
						}
					}
					closedir($dir);
				}


				// Open temp file
				if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
					die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
				}

				if (!empty($_FILES)) {
					if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
						die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
					}

					// Read binary input stream and append it to temp file
					if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
						die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
					}
				} else {
					if (!$in = @fopen("php://input", "rb")) {
						die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
					}
				}

				while ($buff = fread($in, 4096)) {
					fwrite($out, $buff);
				}

				@fclose($out);
				@fclose($in);

				// Check if file has been uploaded
				if (!$chunks || $chunk == $chunks - 1) {
					// Strip the temp .part suffix off 
					rename("{$filePath}.part", $filePath);
				}

				// Return Success JSON-RPC response
				die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
			}
		} else {

			$this->load->library('pagination');
			$directory = './uploads/product';
			$files = glob($directory . '/*');

			if (!empty($this->input->post('search'))) {
				$searchFile = $this->input->post('search');
				$files = array_filter($files, function ($file) use ($searchFile) {
					return fnmatch("*$searchFile*", basename($file));
				});
			}

			usort($files, function ($a, $b) {
				return filemtime($b) - filemtime($a);
			});

			$config = [
				'base_url' => base_url('Admin/BulkUploads'),
				'per_page' => 50, // pass limit number of rows in database
				'total_rows' => count($files),
				'num_links' => 0,
				'next_link' => '>>',
				'first_link' => 'First',
				'prev_link' => '<<',
				'last_link' => 'Last',
				'full_tag_open' => "<ul class='pagination pagination-circular float-right mt-1' >",
				'full_tag_close' => "</ul>",
				'first_tag_open' => "<li id='previous'>",
				'first_tag_close' => "</li>",
				'last_tag_open' => "<li id='next'>",
				'last_tag_close' => "</li>",
				'next_tag_open' => "<li>",
				'next_tag_close' => "</li>",
				'prev_tag_open' => "<li>",
				'prev_tag_close' => "</li>",
				'num_tag_open' => "<li>",
				'num_tag_close' => "</li>",
				'cur_tag_open' => "<li class='active current'><a>",
				'cur_tag_close' => "</a></li>",
			];
			$this->pagination->initialize($config); //pass as a offset
			$lim = $this->uri->segment(3);
			if (empty($lim)) {
				$lim = 0;
			}

			// Limit the number of files to 10
			$limitedFiles = array_slice($files, $lim, $config['per_page']);
			$data['files'] = $limitedFiles;
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Vendor Details
	public function VendorDetails()
	{
		$output['res'] = 'success';
		if ($this->uri->segment(3) == true) {
			$vendor_id = $this->uri->segment(3);
			if ($vendor_id != 'NA') {
				$vendor_info = $this->db->get_where('tbl_vendor', ['id' => $vendor_id])->row();
				if (!empty($vendor_info)) {
					$output['details'] = "<p class='card p-1 flex-row mb-0' style='background:lavender;align-items: center;'><span class='mr-1'><img src=" . base_url('uploads/profile_pic/') . $vendor_info->icon . " style='height:50px;width:50px;border-radius:50%;'></span><span class='mr-1'><b>Vendor Name:</b>" . $vendor_info->name . "</span><span class='mr-1'><b>Vendor Email:</b>" . $vendor_info->email . "</span><span class='mr-1'><b>Contact:</b>" . $vendor_info->mobile . "</span><span class='mr-1'><b>Address:</b>" . $vendor_info->pickup_address . "</span><span class='mr-1'><a href=" . base_url('Admin/ManageVendor/VendorFullDetails/' . $vendor_id) . " class='btn btn-sm btn-primary'>See Details</a></span></p>";
					$brand = $this->db->get_where('brand', ['vendor_id' => $vendor_id])->row();
					if (!empty($brand)) {
						$output['brand'] = "<option class='optionbrand'" . $brand->id . " value=" . $brand->id . ">" . $brand->name . "</option>";
						$output['brand_id'] = $brand->id;
					} else {
						$allbrand = $this->db->get_where('brand')->result();
						$output['brand'] = "<option class='optionbrand' selected disabled>--select brand--</option>";
						if (!empty($allbrand)) {
							foreach ($allbrand as $brand) {
								$output['brand'] .= "<option class='optionbrand" . $brand->id . "' value=" . $brand->id . ">" . $brand->name . "</option>";
							}
						}
						$output['brand_id'] = 0;
					}
				}
			} else {
				$brand = $this->db->get_where('brand', ['vendor_id' => 0])->row();
				if (!empty($brand)) {
					$output['brand'] = "<option class='optionbrand'" . $brand->id . " value=" . $brand->id . ">" . $brand->name . "</option>";
					$output['brand_id'] = $brand->id;
				} else {
					$allbrand = $this->db->get_where('brand')->result();
					$output['brand'] = "<option class='optionbrand' selected disabled>--select brand--</option>";
					if (!empty($allbrand)) {
						foreach ($allbrand as $brand) {
							$output['brand'] .= "<option class='optionbrand" . $brand->id . "' value=" . $brand->id . ">" . $brand->name . "</option>";
						}
					}
					$output['brand_id'] = 0;
				}
			}
		}
		echo json_encode($output);
	}

	#Manage Subadmin
	public function SitePermission()
	{
		$output['res'] = 'error';
		$this->data->table = 'site_permission';
		if ($this->uri->segment(3) == true) {
			$action = $this->uri->segment(3);
			if ($action == 'Update') {
				if (!empty($this->input->post('id'))) {
					$id = $this->input->post('id');
					$insertData = [
						"home" => !empty($this->input->post('home')) ? 1 : 0,
						"gift_wrap" => !empty($this->input->post('gift_wrap')) ? 1 : 0,
						"look_product" => !empty($this->input->post('look_product')) ? 1 : 0,
						"ecatlog" => !empty($this->input->post('ecatlog')) ? 1 : 0,
						"prebooking" => !empty($this->input->post('prebooking')) ? 1 : 0,
						"expert_talk" => !empty($this->input->post('expert_talk')) ? 1 : 0,
						"career" => !empty($this->input->post('career')) ? 1 : 0,
						"become_seller" => !empty($this->input->post('become_seller')) ? 1 : 0,
						"royal_subscription" => !empty($this->input->post('royal_subscription')) ? 1 : 0,
						"coupon" => !empty($this->input->post('coupon_management')) ? 1 : 0,
						"cashback" => !empty($this->input->post('cashback_management')) ? 1 : 0,
						"reward" => !empty($this->input->post('reward_management')) ? 1 : 0,
						"sale" => !empty($this->input->post('sale_management')) ? 1 : 0,
						"notification" => !empty($this->input->post('notification')) ? 1 : 0,
						"chat_support" => !empty($this->input->post('chat_support')) ? 1 : 0,
						"contact_us" => !empty($this->input->post('contact_us')) ? 1 : 0,
						"beauty_tips" => !empty($this->input->post('beauty_tips')) ? 1 : 0,
						"product_rating_review" => !empty($this->input->post('product_rating_review')) ? 1 : 0,
						"seller_rating_review" => !empty($this->input->post('seller_rating_review')) ? 1 : 0,
						"order_management" => !empty($this->input->post('order_management')) ? 1 : 0,
						"survey" => !empty($this->input->post('survey')) ? 1 : 0,
						"hygine_page" => !empty($this->input->post('hygine_page')) ? 1 : 0,
						"site_feedback" => !empty($this->input->post('site_feedback')) ? 1 : 0,
						"shopping_music" => !empty($this->input->post('shopping_music')) ? 1 : 0,
						"social_media_account" => !empty($this->input->post('social_media_account')) ? 1 : 0,
						"order_tracking" => !empty($this->input->post('order_tracking')) ? 1 : 0,
						"wallet_management" => !empty($this->input->post('wallet_management')) ? 1 : 0,
						"refer_friend_web" => !empty($this->input->post('refer_friend_web')) ? 1 : 0,
						"refer_friend_app" => !empty($this->input->post('refer_friend_app')) ? 1 : 0,
						"created_at" => $this->data->timestamp,
						"modified_at" => $this->data->timestamp,
					];
					if ($this->db->where('id', $id)->update($this->data->table, $insertData)) {
						$output['res'] = 'success';
						$output['msg'] = 'Updated Successfully';
					} else {
						$output['msg'] = 'Something went wrong';
					}
				} else {
					$output['msg'] = 'Id is required';
				}
				echo json_encode([$output]);
			}
		} else {
			$data['activepage'] = 'SitePermission';
			$data['list'] = $this->db->get_where('site_permission')->row();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage Subadmin
	public function ManageSubadmin()
	{
		if ($this->userData->type != 'subadmin') {
			$output['res'] = 'error';
			$this->data->key = 'subadmin';
			$this->data->folder = 'profile_pic';
			createFolder('./uploads/' . $this->data->folder);
			$this->data->table = 'admin';
			$this->data->file_column = 'icon';

			if ($this->uri->segment(3) == true) {
				$action = $this->uri->segment(3);
				if ($this->uri->segment(4) == true) {
					if ($action == 'AssignPermission') {

						$data["action"] = "AssignPermission";
						$data["list"] = $this->uri->segment(4);
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} elseif ($action == 'Edit') {
						$data['activepage'] = 'ManageSubadmin';
						$id = $this->uri->segment(4);
						$data['list'] = $this->db->get_where('admin', ['id' => $id])->row();
						$this->load->view($this->data->controller . '/EditSubadmin', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					if ($action == 'Create') {
						$data['activepage'] = 'ManageSubadmin/Create';
						$this->load->view($this->data->controller . '/CreateSubadmin', $data);
					} elseif ($action == 'Add') {


						if (!empty($_FILES['icon']['name'])) {
							$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
							$filename = time() . rand() . "." . $extension;
						} else {
							$filename = "";
						}

						if ($this->form_validation->run($this->data->key) == FALSE) {
							$msg = explode('</p>', validation_errors());
							$output['msg'] = str_ireplace('<p>', '', $msg[0]);
						} else {
							$email = $this->input->post('email');
							$chk_user = $this->db->get_where('admin', ['email' => $email])->num_rows();
							if ($chk_user < 1) {
								$permissions = [
									'category' => [
										'add' => !empty($this->input->post('category_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('category_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('category_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('category_delete')) ? 1 : 0,
									],
									'color' => [
										'add' => !empty($this->input->post('color_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('color_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('color_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('color_delete')) ? 1 : 0,
									],
									'size' => [
										'add' => !empty($this->input->post('size_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('size_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('size_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('size_delete')) ? 1 : 0,
									],
									'brand' => [
										'add' => !empty($this->input->post('brand_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('brand_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('brand_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('brand_delete')) ? 1 : 0,
									],
									'order' => [
										'add' => !empty($this->input->post('order_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('order_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('order_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('order_delete')) ? 1 : 0,
									],
									'subscriptionplan' => [
										'add' => !empty($this->input->post('subscriptionplan_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('subscriptionplan_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('subscriptionplan_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('subscriptionplan_delete')) ? 1 : 0,
									],
									'subscriber' => [
										'add' => !empty($this->input->post('subscriber_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('subscriber_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('subscriber_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('subscriber_delete')) ? 1 : 0,
									],
									'product' => [
										'add' => !empty($this->input->post('product_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('product_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('product_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('product_delete')) ? 1 : 0,
									],
									'attribute' => [
										'add' => !empty($this->input->post('attribute_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('attribute_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('attribute_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('attribute_delete')) ? 1 : 0,
									],
									'lookproduct' => [
										'add' => !empty($this->input->post('lookproduct_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('lookproduct_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('lookproduct_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('lookproduct_delete')) ? 1 : 0,
									],
									'stock' => [
										'add' => !empty($this->input->post('stock_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('stock_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('stock_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('stock_delete')) ? 1 : 0,
									],
									'offer' => [
										'add' => !empty($this->input->post('offer_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('offer_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('offer_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('offer_delete')) ? 1 : 0,
									],
									'giftwrap' => [
										'add' => !empty($this->input->post('giftwrap_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('giftwrap_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('giftwrap_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('giftwrap_delete')) ? 1 : 0,
									],
									'beautyconsultation' => [
										'add' => !empty($this->input->post('beautyconsultation_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('beautyconsultation_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('beautyconsultation_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('beautyconsultation_delete')) ? 1 : 0,
									],
									'feedback' => [
										'add' => !empty($this->input->post('feedback_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('feedback_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('feedback_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('feedback_delete')) ? 1 : 0,
									],
									'salemanagement' => [
										'add' => !empty($this->input->post('salemanagement_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('salemanagement_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('salemanagement_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('salemanagement_delete')) ? 1 : 0,
									],
									'ecatlog' => [
										'add' => !empty($this->input->post('ecatlog_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('ecatlog_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('ecatlog_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('ecatlog_delete')) ? 1 : 0,
									],
									'vendor' => [
										'add' => !empty($this->input->post('vendor_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('vendor_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('vendor_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('vendor_delete')) ? 1 : 0,
									],
									'user' => [
										'add' => !empty($this->input->post('user_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('user_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('user_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('user_delete')) ? 1 : 0,
									],
									'fashionexpert' => [
										'add' => !empty($this->input->post('expert_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('expert_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('expert_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('expert_delete')) ? 1 : 0,
									],
									'notification' => [
										'add' => !empty($this->input->post('notification_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('notification_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('notification_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('notification_delete')) ? 1 : 0,
									],
									'deliverycharge' => [
										'add' => !empty($this->input->post('deliverycharge_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('deliverycharge_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('deliverycharge_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('deliverycharge_delete')) ? 1 : 0,
									],
									'helpandsupport' => [
										'add' => !empty($this->input->post('helpandsupport_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('helpandsupport_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('helpandsupport_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('helpandsupport_delete')) ? 1 : 0,
									],
									'slider' => [
										'add' => !empty($this->input->post('slider_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('slider_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('slider_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('slider_delete')) ? 1 : 0,
									],
									'contentmanagement' => [
										'add' => !empty($this->input->post('contentmanagement_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('contentmanagement_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('contentmanagement_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('contentmanagement_delete')) ? 1 : 0,
									],
									'businesssettings' => [
										'add' => !empty($this->input->post('businesssettings_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('businesssettings_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('businesssettings_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('businesssettings_delete')) ? 1 : 0,
									],
									'faqs' => [
										'add' => !empty($this->input->post('faqs_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('faqs_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('faqs_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('faqs_delete')) ? 1 : 0,
									],
								];

								$insertData = [
									'type' => 'subadmin',
									'role' => $this->input->post('rolename'),
									'name' => $this->input->post('name'),
									'username' => $this->input->post('name'),
									'email' => $this->input->post('email'),
									'mobile' => $this->input->post('mobile'),
									'exp_date' => $this->input->post('date'),
									'password' => md5($this->input->post('password')),
									'icon' => $filename,
									'is_status' => 'true',
									'is_verified' => 'true',
									'is_login' => 'true',
									'permission' => json_encode($permissions),
									'created_at' => $this->data->timestamp,
									'verified_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp,
								];

								if ($this->db->insert($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Added Successfully.';
									$output['redirect'] = base_url($this->data->controller . '/' . $this->data->method);
									if (!empty($_FILES['icon']['name'])) {
										$upload_errors           = array();
										$config['upload_path']   = './uploads/' . $this->data->folder . '/';
										$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
										$config['max_size']      = 2048;
										$config['file_name']     = $filename;
										$this->load->library('upload', $config);
										if (!$this->upload->do_upload($this->data->file_column)) {
											array_push($upload_errors, array(
												'error_upload' => $this->upload->display_errors()
											));
											$output['msg'] = 'Data saved but error in file upload.';
										}
									}
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							} else {
								$output['msg'] = 'Email Already Exist!';
							}
						}
						echo json_encode([$output]);
					} elseif ($action == 'Update') {
						$id = $this->input->post('id');
						if ($id) {
							$data = $this->db->get_where('admin', ['id' => $id])->row();
							if (!empty($_FILES['icon']['name'])) {
								$extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
								$filename = time() . rand() . "." . $extension;
								$upload_errors           = array();
								$config['upload_path']   = './uploads/profile_pic/';
								$config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
								$config['max_size']      = 2048;
								$config['file_name']     = $filename;
								$this->load->library('upload', $config);
								if (!$this->upload->do_upload($this->data->file_column)) {
									$filename = $data->icon;
								}
							} else {
								$filename = $data->icon;
							}

							if ($this->form_validation->run($this->data->key) == FALSE) {
								$msg = explode('</p>', validation_errors());
								$output['msg'] = str_ireplace('<p>', '', $msg[0]);
							} else {

								$permissions = [
									'category' => [
										'add' => !empty($this->input->post('category_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('category_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('category_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('category_delete')) ? 1 : 0,
									],
									'color' => [
										'add' => !empty($this->input->post('color_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('color_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('color_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('color_delete')) ? 1 : 0,
									],
									'size' => [
										'add' => !empty($this->input->post('size_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('size_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('size_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('size_delete')) ? 1 : 0,
									],
									'brand' => [
										'add' => !empty($this->input->post('brand_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('brand_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('brand_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('brand_delete')) ? 1 : 0,
									],
									'order' => [
										'add' => !empty($this->input->post('order_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('order_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('order_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('order_delete')) ? 1 : 0,
									],
									'subscriptionplan' => [
										'add' => !empty($this->input->post('subscriptionplan_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('subscriptionplan_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('subscriptionplan_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('subscriptionplan_delete')) ? 1 : 0,
									],
									'subscriber' => [
										'add' => !empty($this->input->post('subscriber_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('subscriber_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('subscriber_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('subscriber_delete')) ? 1 : 0,
									],
									'product' => [
										'add' => !empty($this->input->post('product_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('product_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('product_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('product_delete')) ? 1 : 0,
									],
									'attribute' => [
										'add' => !empty($this->input->post('attribute_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('attribute_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('attribute_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('attribute_delete')) ? 1 : 0,
									],
									'lookproduct' => [
										'add' => !empty($this->input->post('lookproduct_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('lookproduct_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('lookproduct_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('lookproduct_delete')) ? 1 : 0,
									],
									'stock' => [
										'add' => !empty($this->input->post('stock_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('stock_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('stock_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('stock_delete')) ? 1 : 0,
									],
									'offer' => [
										'add' => !empty($this->input->post('offer_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('offer_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('offer_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('offer_delete')) ? 1 : 0,
									],
									'giftwrap' => [
										'add' => !empty($this->input->post('giftwrap_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('giftwrap_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('giftwrap_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('giftwrap_delete')) ? 1 : 0,
									],
									'beautyconsultation' => [
										'add' => !empty($this->input->post('beautyconsultation_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('beautyconsultation_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('beautyconsultation_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('beautyconsultation_delete')) ? 1 : 0,
									],
									'feedback' => [
										'add' => !empty($this->input->post('feedback_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('feedback_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('feedback_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('feedback_delete')) ? 1 : 0,
									],
									'salemanagement' => [
										'add' => !empty($this->input->post('salemanagement_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('salemanagement_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('salemanagement_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('salemanagement_delete')) ? 1 : 0,
									],
									'ecatlog' => [
										'add' => !empty($this->input->post('ecatlog_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('ecatlog_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('ecatlog_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('ecatlog_delete')) ? 1 : 0,
									],
									'vendor' => [
										'add' => !empty($this->input->post('vendor_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('vendor_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('vendor_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('vendor_delete')) ? 1 : 0,
									],
									'user' => [
										'add' => !empty($this->input->post('user_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('user_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('user_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('user_delete')) ? 1 : 0,
									],
									'fashionexpert' => [
										'add' => !empty($this->input->post('expert_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('expert_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('expert_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('expert_delete')) ? 1 : 0,
									],
									'notification' => [
										'add' => !empty($this->input->post('notification_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('notification_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('notification_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('notification_delete')) ? 1 : 0,
									],
									'deliverycharge' => [
										'add' => !empty($this->input->post('deliverycharge_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('deliverycharge_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('deliverycharge_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('deliverycharge_delete')) ? 1 : 0,
									],
									'helpandsupport' => [
										'add' => !empty($this->input->post('helpandsupport_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('helpandsupport_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('helpandsupport_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('helpandsupport_delete')) ? 1 : 0,
									],
									'slider' => [
										'add' => !empty($this->input->post('slider_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('slider_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('slider_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('slider_delete')) ? 1 : 0,
									],
									'contentmanagement' => [
										'add' => !empty($this->input->post('contentmanagement_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('contentmanagement_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('contentmanagement_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('contentmanagement_delete')) ? 1 : 0,
									],
									'businesssettings' => [
										'add' => !empty($this->input->post('businesssettings_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('businesssettings_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('businesssettings_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('businesssettings_delete')) ? 1 : 0,
									],
									'faqs' => [
										'add' => !empty($this->input->post('faqs_add')) ? 1 : 0,
										'approval' => !empty($this->input->post('faqs_approval')) ? 1 : 0,
										'edit' => !empty($this->input->post('faqs_edit')) ? 1 : 0,
										'delete' => !empty($this->input->post('faqs_delete')) ? 1 : 0,
									],
								];

								$insertData = [
									'type' => 'subadmin',
									'role' => $this->input->post('rolename'),
									'name' => $this->input->post('name'),
									'username' => $this->input->post('name'),
									'mobile' => $this->input->post('mobile'),
									'exp_date' => $this->input->post('date'),
									'icon' => $filename,
									'is_status' => 'true',
									'is_verified' => 'true',
									'is_login' => 'true',
									'permission' => json_encode($permissions),
									'created_at' => $this->data->timestamp,
									'verified_at' => $this->data->timestamp,
									'modified_at' => $this->data->timestamp,
								];

								if ($this->db->where('id', $id)->update($this->data->table, $insertData)) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Updated Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Updating.';
								}
							}
						} else {
							$output['msg'] = 'Id is required!';
						}
						echo json_encode([$output]);
					}
				}
			} else {
				$data['activepage'] = 'ManageSubadmin';
				$data['list'] = $this->db->get_where('admin', ['type' => 'subadmin'])->result();
				$this->load->view($this->data->controller . '/' . $this->data->method, $data);
			}
		} else {
			redirect(base_url($this->data->controller));
		}
	}



	// AppPromotion
	public function AppPromotion()
	{
		$this->data->file_column = 'image';
		$this->data->folder = 'appdownload';
		$this->data->table = 'tbl_app_download';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'AppPromotion';
		$check_exist = getDataOrderByID($this->data->table, [], '1');
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);

			if ($action == 'Add') {

				$this->form_validation->set_rules('bg_title', 'Background Title', 'required');
				$this->form_validation->set_rules('bg_alt', 'Background Alt', 'required');
				$this->form_validation->set_rules('QR_title', 'QR Title', 'required');
				$this->form_validation->set_rules('QR_image_title', 'QR Image Title', 'required');
				$this->form_validation->set_rules('QR_image_alt', 'QR Image Alt', 'required');
				$this->form_validation->set_rules('banner_title', 'Banner Title', 'required');
				$this->form_validation->set_rules('banner_alt', 'Banner Alt', 'required');
				$this->form_validation->set_rules('meta_description', 'Meta Description', 'required');
				$this->form_validation->set_rules('text', 'Text', 'required');
				$this->form_validation->set_rules('app_link_title', 'App Link Title', 'required');
				$this->form_validation->set_rules('play_store_link', 'Play Store Link', 'required');
				$this->form_validation->set_rules('play_store_img_title', 'Play Store Image Title', 'required');
				$this->form_validation->set_rules('play_store_img_alt', 'Play Store Image Alt', 'required');
				$this->form_validation->set_rules('app_store_link', 'App Store Link', 'required');
				$this->form_validation->set_rules('app_store_img_title', 'App Store Image Title', 'required');
				$this->form_validation->set_rules('app_store_img_alt', 'App Store Image Alt', 'required');
				$this->form_validation->set_rules('phone_app_text', 'Phone View App Download Text', 'required');
				$this->form_validation->set_rules('phone_text', 'Phone View Text', 'required');
				if (empty($_FILES['background_image']['name']) &&  (!empty($check_exist) ? empty($check_exist['background_image']) : true)) {
					$this->form_validation->set_rules('background_image', 'Background Image', 'required');
				}
				if (empty($_FILES['QR_image']['name']) && (!empty($check_exist) ? empty($check_exist['QR_image']) : true)) {
					$this->form_validation->set_rules('QR_image', 'OR Image', 'required');
				}
				if (empty($_FILES['banner']['name']) && (!empty($check_exist) ? empty($check_exist['banner']) : true)) {
					$this->form_validation->set_rules('banner', 'Banner Image', 'required');
				}

				if (empty($_FILES['app_store_img']['name']) && (!empty($check_exist) ? empty($check_exist['app_store_img']) : true)) {
					$this->form_validation->set_rules('app_store_img', 'App Store Image', 'required');
				}

				if (empty($_FILES['play_store_img']['name']) && (!empty($check_exist) ? empty($check_exist['play_store_img']) : true)) {
					$this->form_validation->set_rules('play_store_img', 'Play Store Image', 'required');
				}
				if (empty($_FILES['page_bg_img']['name']) && (!empty($check_exist) ? empty($check_exist['page_bg_img']) : true)) {
					$this->form_validation->set_rules('page_bg_img', 'Page Background Image', 'required');
				}

				if ($this->form_validation->run() == FALSE) {
					$msg = explode('</p>', validation_errors());
					$msg = str_ireplace('<p>', '', $msg[0]);
					$output["res"] = "error";
					$output["msg"] = $msg;
				} else {
					$in_data = $this->input->post();


					$insertdata = [
						'bg_title' => $in_data['bg_title'],
						'bg_alt' => $in_data['bg_alt'],
						'QR_title' => $in_data['QR_title'],
						'QR_image_title' => $in_data['QR_image_title'],
						'QR_image_alt' => $in_data['QR_image_alt'],
						'banner_title' => $in_data['banner_title'],
						'banner_alt' => $in_data['banner_alt'],
						'meta_description' => $in_data['meta_description'],
						'text' => $in_data['text'],
						'app_link_title' => $in_data['app_link_title'],
						'play_store_link' => $in_data['play_store_link'],
						'play_store_img_title' => $in_data['play_store_img_title'],
						'play_store_img_alt' => $in_data['play_store_img_alt'],
						'app_store_link' => $in_data['app_store_link'],
						'app_store_img_title' => $in_data['app_store_img_title'],
						'app_store_img_alt' => $in_data['app_store_img_alt'],
						'phone_app_text' => $in_data['phone_app_text'],
						'phone_text' => $in_data['phone_text'],
						'datetime' => date('Y-m-d h:i:s A')
					];

					if (!empty($_FILES["background_image"]["name"])) {
						$background_image = FIleUpload('background_image', $_FILES["background_image"]["name"], './uploads/' . $this->data->folder, 'background_image');
						if (!empty($background_image)) {
							$insertdata['background_image'] = $background_image;
						}
					}
					if (!empty($_FILES["QR_image"]["name"])) {
						$QR_image = FIleUpload('QR_image', $_FILES["QR_image"]["name"], './uploads/' . $this->data->folder, 'QR_image');
						if (!empty($QR_image)) {
							$insertdata['QR_image'] = $QR_image;
						}
					}
					if (!empty($_FILES["banner"]["name"])) {
						$banner = FIleUpload('banner', $_FILES["banner"]["name"], './uploads/' . $this->data->folder, 'banner');
						if (!empty($banner)) {
							$insertdata['banner'] = $banner;
						}
					}

					if (!empty($_FILES["play_store_img"]["name"])) {
						$play_store_img = FIleUpload('play_store_img', $_FILES["play_store_img"]["name"], './uploads/' . $this->data->folder, 'play_store');
						if (!empty($play_store_img)) {
							$insertdata['play_store_img'] = $play_store_img;
						}
					}

					if (!empty($_FILES["app_store_img"]["name"])) {
						$app_store_img = FIleUpload('app_store_img', $_FILES["app_store_img"]["name"], './uploads/' . $this->data->folder, 'app_store');
						if (!empty($app_store_img)) {
							$insertdata['app_store_img'] = $app_store_img;
						}
					}

					if (!empty($_FILES["page_bg_img"]["name"])) {
						$page_bg_img = FIleUpload('page_bg_img', $_FILES["page_bg_img"]["name"], './uploads/' . $this->data->folder, 'app_store');
						if (!empty($page_bg_img)) {
							$insertdata['page_bg_img'] = $page_bg_img;
						}
					}


					if (empty($check_exist)) {

						$ins = $this->db->insert($this->data->table, $insertdata);
						if ($ins) {
							$output["res"] = "success";
							$output["msg"] = "Data Added Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went Wrong.";
						}
					} else {
						$ins = $this->db->update($this->data->table, $insertdata);
						if ($ins) {

							$output["res"] = "success";
							$output["msg"] = "Data Updated Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went wrong.";
						}
					}
				}
			} else {
				$output["res"] = "error";
				$output["msg"] = "Something Went wrong.";
			}
			echo json_encode([$output]);
		} else {
			$data['data'] = $check_exist;
			$this->load->view("Admin/AppPromotion", $data);
		}
	}


	// NeedHelp 
	public function NeedHelp()
	{
		$this->data->table = 'tbl_web_settings';
		$data['activepage'] = 'NeedHelp';
		$check_exist = getDataOrderByID($this->data->table, [], '1');
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);

			if ($action == 'Add') {

				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('mobile', 'Mobile',  'required|regex_match[/^[6789]\d{9}$/]');
				$this->form_validation->set_rules('whatsapp_no', 'WhatsApp Number', 'required|regex_match[/^[6789]\d{9}$/]');

				if ($this->form_validation->run() == FALSE) {
					$msg = explode('</p>', validation_errors());
					$msg = str_ireplace('<p>', '', $msg[0]);
					$output["res"] = "error";
					$output["msg"] = $msg;
				} else {
					$in_data = $this->input->post();


					$insertdata = [
						'email' => $in_data['email'],
						'mobile' => $in_data['mobile'],
						'whatsapp_no' => $in_data['whatsapp_no'],
						'datetime' => date('Y-m-d h:i:s A')
					];





					if (empty($check_exist)) {

						$ins = $this->db->insert($this->data->table, $insertdata);
						if ($ins) {
							$output["res"] = "success";
							$output["msg"] = "Data Added Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went Wrong.";
						}
					} else {
						$ins = $this->db->update($this->data->table, $insertdata);
						if ($ins) {

							$output["res"] = "success";
							$output["msg"] = "Data Updated Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went wrong.";
						}
					}
				}
			} else {
				$output["res"] = "error";
				$output["msg"] = "Something Went wrong.";
			}
			echo json_encode([$output]);
		} else {
			$data['data'] = $check_exist;
			$this->load->view("Admin/NeedHelp", $data);
		}
	}

	// LogoSetup 
	public function LogoSetup()
	{

		$this->data->folder = 'logo';
		$this->data->table = 'tbl_logo';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'LogoSetup';
		$check_exist = getDataOrderByID($this->data->table, [], '1');
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);

			if ($action == 'Add') {

				$this->form_validation->set_rules('web_header_logo_title', 'Web Header Logo Title', 'required');
				$this->form_validation->set_rules('web_header_logo_alt', 'Web Header Logo Alt', 'required');
				// $this->form_validation->set_rules('web_footer_logo_title', 'Web Footer Logo Title', 'required');
				// $this->form_validation->set_rules('web_footer_logo_alt', 'Web Footer Logo Alt', 'required');
				$this->form_validation->set_rules('favicon_title', 'Favicon Title', 'required');
				$this->form_validation->set_rules('favicon_alt', 'Favicon Alt', 'required');
				$this->form_validation->set_rules('app_logo_title', 'App Logo Title', 'required');
				$this->form_validation->set_rules('app_logo_alt', 'App Logo Alt', 'required');
				$this->form_validation->set_rules('royal_club_logo_title', 'Royal Club Logo Title', 'required');
				$this->form_validation->set_rules('royal_club_logo_alt', 'Royal Club Logo Alt', 'required');

				if (empty($_FILES['web_header_logo']['name']) &&  (!empty($check_exist) ? empty($check_exist['web_header_logo']) : true)) {
					$this->form_validation->set_rules('web_header_logo', 'Web Header Logo', 'required');
				}
				// if (empty($_FILES['web_footer_logo']['name']) && ( !empty($check_exist) ? empty($check_exist['web_footer_logo']) : true)) {
				// 	$this->form_validation->set_rules('web_footer_logo', 'Web Footer Logo', 'required');
				// }
				if (empty($_FILES['favicon']['name']) && (!empty($check_exist) ? empty($check_exist['favicon']) : true)) {
					$this->form_validation->set_rules('favicon', 'Favicon', 'required');
				}
				if (empty($_FILES['app_logo']['name']) && (!empty($check_exist) ? empty($check_exist['app_logo']) : true)) {
					$this->form_validation->set_rules('app_logo', 'App Logo', 'required');
				}
				if (empty($_FILES['royal_club_logo']['name']) && (!empty($check_exist) ? empty($check_exist['royal_club_logo']) : true)) {
					$this->form_validation->set_rules('royal_club_logo', 'Royal Club Logo', 'required');
				}

				if ($this->form_validation->run() == FALSE) {
					$msg = explode('</p>', validation_errors());
					$msg = str_ireplace('<p>', '', $msg[0]);
					$output["res"] = "error";
					$output["msg"] = $msg;
				} else {
					$in_data = $this->input->post();

					$insertdata = [
						'web_header_logo_title' => $in_data['web_header_logo_title'],
						'web_header_logo_alt' => $in_data['web_header_logo_alt'],
						'web_footer_logo_title' => $in_data['web_footer_logo_title'],
						'web_footer_logo_alt' => $in_data['web_footer_logo_alt'],
						'favicon_title' => $in_data['favicon_title'],
						'favicon_alt' => $in_data['favicon_alt'],
						'app_logo_title' => $in_data['app_logo_title'],
						'app_logo_alt' => $in_data['app_logo_alt'],
						'royal_club_logo_title' => $in_data['royal_club_logo_title'],
						'royal_club_logo_alt' => $in_data['royal_club_logo_alt'],
						'datetime' => date('Y-m-d h:i:s A')
					];

					if (!empty($_FILES["web_header_logo"]["name"])) {
						$web_header_logo = FIleUpload('web_header_logo', $_FILES["web_header_logo"]["name"], './uploads/' . $this->data->folder, 'web_header_logo');
						if (!empty($web_header_logo)) {
							$insertdata['web_header_logo'] = $web_header_logo;
						}
					}
					if (!empty($_FILES["web_footer_logo"]["name"])) {
						$web_footer_logo = FIleUpload('web_footer_logo', $_FILES["web_footer_logo"]["name"], './uploads/' . $this->data->folder, 'web_footer_logo');
						if (!empty($web_footer_logo)) {
							$insertdata['web_footer_logo'] = $web_footer_logo;
						}
					}
					if (!empty($_FILES["favicon"]["name"])) {
						$favicon = FIleUpload('favicon', $_FILES["favicon"]["name"], './uploads/' . $this->data->folder, 'favicon');
						if (!empty($favicon)) {
							$insertdata['favicon'] = $favicon;
						}
					}
					if (!empty($_FILES["app_logo"]["name"])) {
						$app_logo = FIleUpload('app_logo', $_FILES["app_logo"]["name"], './uploads/' . $this->data->folder, 'app_logo');
						if (!empty($app_logo)) {
							$insertdata['app_logo'] = $app_logo;
						}
					}
					if (!empty($_FILES["royal_club_logo"]["name"])) {
						$royal_club_logo = FIleUpload('royal_club_logo', $_FILES["royal_club_logo"]["name"], './uploads/' . $this->data->folder, 'royal_club_logo');
						if (!empty($royal_club_logo)) {
							$insertdata['royal_club_logo'] = $royal_club_logo;
						}
					}



					if (empty($check_exist)) {

						$ins = $this->db->insert($this->data->table, $insertdata);
						if ($ins) {
							$output["res"] = "success";
							$output["msg"] = "Data Added Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went Wrong.";
						}
					} else {
						$ins = $this->db->update($this->data->table, $insertdata);
						if ($ins) {

							$output["res"] = "success";
							$output["msg"] = "Data Updated Successfully!";
						} else {
							$output["res"] = "error";
							$output["msg"] = "Something Went wrong.";
						}
					}
				}
			} else {
				$output["res"] = "error";
				$output["msg"] = "Something Went wrong.";
			}
			echo json_encode([$output]);
		} else {
			$data['data'] = $check_exist;
			$this->load->view("Admin/LogoSetup", $data);
		}
	}

	public function getCatTag()
	{

		$this->data->table = 'tbl_category_tags';
		if ($this->uri->segment(3) == TRUE) {
			$cat_id = $this->uri->segment(3);
			$data = getDataOrderByID($this->data->table, ['cat_id' => $cat_id, 'is_status' => 'true']);
			$output["res"] = "success";
			$output["msg"] = "Data Fetch Successfully!";
			$output["data"] = $data;
		} else {
			$output["res"] = "error";
			$output["msg"] = "Something Went wrong.";
		}


		echo json_encode([$output]);
	}

	#globalSearchKeyword
	public function globalSearchKeyword()
	{
		$this->data->table = 'tbl_global_search_keyword';
		$this->data->key = 'Search Keyword';
		$output['res'] = 'error';
		$data['activepage'] = 'SearchKeyword';
		if ($this->uri->segment(3) == TRUE) {

			$action = $this->uri->segment(3);
			if ($action == 'Add') {
				if ($this->input->post()) {
					$this->form_validation->set_rules('type', 'Type', 'required');
					$this->form_validation->set_rules('query', 'Query', 'required');
					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$output["res"] = "error";
						$output["msg"] = $msg;
					} else {
						$in_data = $this->input->post();
						$insertData = array(
							"type" => $in_data['type'],
							"query" => $in_data['query'],
						);
						$checkExist = $this->db->get_where($this->data->table, $insertData)->row();
						if (empty($checkExist)) {
							if ($this->db->insert($this->data->table, $insertData)) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Insert Successfully.';
							} else {
								$output['res'] = 'error';
								$output['msg'] = 'Something went wrong.';
							}
						} else {
							$output['res'] = 'error';
							$output['msg'] = 'Keyword already exist.';
						}
					}
				} else {
					$output['res'] = 'error';
					$output['msg'] = 'Something went wrong.';
				}
				$this->Product_model->createGlobleSearchKeyword();
				echo json_encode([$output]);
			} else if ($action == 'Edit') {


				if ($this->uri->segment(4) == true) {
					$id = $this->uri->segment(4);
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						$data["action"] = "EditSearchKeyword";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else if ($action == 'Update') {
				if ($this->input->post()) {
					$this->form_validation->set_rules('id', 'Id', 'required');
					$this->form_validation->set_rules('type', 'Type', 'required');
					$this->form_validation->set_rules('query', 'Query', 'required');
					if ($this->form_validation->run() == FALSE) {
						$msg = explode('</p>', validation_errors());
						$msg = str_ireplace('<p>', '', $msg[0]);
						$output["res"] = "error";
						$output["msg"] = $msg;
					} else {
						$in_data = $this->input->post();
						$insertData = array(
							"type" => $in_data['type'],
							"query" => $in_data['query'],
						);
						$checkExist = $this->db->get_where($this->data->table, $insertData)->row();
						if (!empty($checkExist) && $checkExist->id != $in_data['id']) {

							$output['res'] = 'error';
							$output['msg'] = 'Keyword already exist.';
						} else {
							if ($this->db->update($this->data->table, $insertData, ['id' => $in_data['id']])) {
								$output['res'] = 'success';
								$output['msg'] = 'Data Updated Successfully.';
							} else {
								$output['res'] = 'error';
								$output['msg'] = 'Something went wrong.';
							}
						}
					}
				} else {
					$output['res'] = 'error';
					$output['msg'] = 'Something went wrong.';
				}
				$this->Product_model->createGlobleSearchKeyword();
				echo json_encode([$output]);
			} else {
				#for Product
				$productList = getDataOrderByID('products');
				foreach ($productList as $product) {
					$insData = [
						'type' => 'product',
						'query' => $product['title']
					];
					if (empty(getDataOrderByID('tbl_global_search_keyword', $insData))) {

						$this->db->insert('tbl_global_search_keyword', $insData);
					}
				}

				#for Category
				$categoryList = getDataOrderByID('categories');
				foreach ($categoryList as $cat) {
					$insData = [
						'type' => 'category',
						'query' => $cat['name']
					];
					if (empty(getDataOrderByID('tbl_global_search_keyword', $insData))) {

						$this->db->insert('tbl_global_search_keyword', $insData);
					}
				}

				#for subCategory
				$subcategoryList = getDataOrderByID('sub_category');
				foreach ($subcategoryList as $subcat) {
					$insData = [
						'type' => 'subcategory',
						'query' => $subcat['name']
					];
					if (empty(getDataOrderByID('tbl_global_search_keyword', $insData))) {

						$this->db->insert('tbl_global_search_keyword', $insData);
					}
				}
				$this->Product_model->createGlobleSearchKeyword();
				$this->session->set_flashdata("res", "success");
				$this->session->set_flashdata("msg", "Successfully Refresh.");
				redirect(base_url('Admin/globalSearchKeyword'));
			}
		} else {
			$data['activepage'] = 'globalSearchKeyword';
			$query = $this->db->order_by("id", "DESC")->get($this->data->table);
			$data["list"] = $query->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}

	#Manage  Categorie Tags
	public function ManageComponent()
	{
		$this->data->table = 'tbl_component';
		$this->data->key = 'Component';
		$this->data->folder = 'component';
		$this->data->file_column = 'image';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageComponent';

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$this->data->comp_cat_id = $this->uri->segment(3);
			$data['cmp_data'] = $this->db->get_where('tbl_component_category', ['id' => $this->data->comp_cat_id])->row();
			if ($this->uri->segment(4) == TRUE) {
				$action = $this->uri->segment(4);

				if ($this->uri->segment(5) == TRUE) {
					$id = $this->uri->segment(5);
					// var_dump($id);die();
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						if ($action == 'Edit') {
							$data["action"] = "EditComponent";
							$this->load->view($this->data->controller . '/UpdateData', $data);
						} else {
							redirect(base_url($this->data->controller . '/' . $this->data->method));
						}
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					if ($action == 'Add') {

						if (!empty($this->input->post())) {
							if (empty($_FILES['image']['name'])) {
								$this->form_validation->set_rules('image', 'Image', 'required');
							}
							if ($this->form_validation->run($this->data->key) == FALSE) {

								$msg = explode('</p>', validation_errors());
								$output['msg'] = str_ireplace('<p>', '', $msg[0]);
							} else {
								$filename = FIleUpload('image', $_FILES['image']['name'], './uploads/' . $this->data->folder, 'image');
								if (empty($filename)) {
									$output['msg'] = 'Image Uploaded Failed.';
								} else {
									$insertData = [
										'component_cat_id' => $this->input->post('component_cat_id'),
										'type' => $this->input->post('type'),
										'image' => $filename,
										'image_title' => $this->input->post('image_title'),
										'image_alt' => $this->input->post('image_alt'),
										'start_date' => $this->input->post('start_date'),
										'end_date' => $this->input->post('end_date'),
										'offer_title' => $this->input->post('offer_title'),
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'url' => $this->input->post('url'),
										'is_status' => 'true',
										'created_at' => date('Y-m-d h:i:s a'),
										'modified_at' => date('Y-m-d h:i:s a'),
									];

									$insertData = $this->security->xss_clean($insertData);
									if ($this->db->insert($this->data->table, $insertData)) {

										$output['res'] = 'success';
										$output['msg'] = 'Data Added Successfully.';
									} else {

										$output['msg'] = 'Something went wrong in Data Saving.';
									}
								}
							}
						}
						echo json_encode([$output]);
					} else if ($action == 'Update') {
						if (!empty($this->input->post())) {
							if (empty($this->input->post("id"))) {
								$output['msg'] = 'ID is required.';
							} else {
								$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
								if ($query->num_rows()) {
									$data['list'] = $query->result();
									// $this->form_validation->set_rules('category', 'Category', 'required|trim');
									if ($this->form_validation->run($this->data->key) == FALSE) {
										$msg = explode('</p>', validation_errors());
										$output['msg'] = str_ireplace('<p>', '', $msg[0]);
									} else {

										$updateData = [
											'type' => $this->input->post('type'),
											'image_title' => $this->input->post('image_title'),
											'image_alt' => $this->input->post('image_alt'),
											'start_date' => $this->input->post('start_date'),
											'end_date' => $this->input->post('end_date'),
											'title' => $this->input->post('title'),
											'offer_title' => $this->input->post('offer_title'),
											'description' => $this->input->post('description'),
											'url' => $this->input->post('url'),
											'is_status' => 'true',
											'modified_at' => date('Y-m-d h:i:s a'),
										];
										$filename = '';
										if (!empty($_FILES['image']['name'])) {
											$filename = FIleUpload('image', $_FILES['image']['name'], './uploads/' . $this->data->folder, 'image');
											if (!empty($filename)) {
												$updateData['image'] = $filename;
											}
										}
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											if (!empty($_FILES['image']['name']) && !empty($filename)) {
												if (!empty($data['list'][0]->image) && file_exists('./uploads/' . $this->data->folder . '/' . $data['list'][0]->image)) {
													unlinkFile('./uploads/brand/' . $data['list'][0]->image);
												}
											}
											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									}
								}
							}
						}
						echo json_encode([$output]);
					} else if ($action == 'SortingComponent') {
						$order = $this->input->post('order');
						$this->db->trans_start();
						foreach ($order as $position => $id) {
							$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
						}
						$this->db->trans_complete();

						if ($this->db->trans_status() === FALSE) {

							$output['res'] = 'error';
							$output['msg'] = 'Something went wrong in Data Saving.';
						} else {
							$output['res'] = 'success';
							$output['msg'] = 'Positions updated successfully.';
						}
						echo json_encode([$output]);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				}
			} else {

				$data["list"] = $this->db->order_by('position', 'ASC')->where(['component_cat_id' => $this->data->comp_cat_id])->get($this->data->table)->result();
				$this->load->view($this->data->controller . '/' . $this->data->method, $data);
			}
		} else {
			redirect(base_url('Admin/ManageComponentCategroy'));
		}
	}

	public function ManageComponentItem()
	{
		$this->data->table1 = 'tbl_component';
		$this->data->table = 'tbl_component_item';
		$this->data->table2 = 'tbl_component_category';
		$this->data->key = 'ComponentItem';
		$this->data->folder = '';
		$this->data->file_column = '';
		$data['activepage'] = 'ManageComponent';
		$output['res'] = 'error';

		if ($this->uri->segment(3) == TRUE) {
			$cmp_id = $this->uri->segment(3);
			$id = '';
			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
			}

			// echo $_GET['action'];die();
			// if ($this->uri->segment(5) == TRUE) {
			if (isset($_GET['action'])) {
				$action = $_GET['action'];


				if ($action == 'Edit') {
					$query = $this->db->where('id', $id)->get($this->data->table);
					if ($query->num_rows()) {

						$data["list"] = $query->result();
						$data["action"] = "EditComponentItem";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					}
				} else if ($action == 'Add') {
					$query = $this->db->where('id', $cmp_id)->get($this->data->table2);
					// var_dump($id);die();
					if ($query->num_rows()) {
						$data["list"] = $query->result();
						if (!empty($this->input->post())) {
							if ($this->form_validation->run($this->data->key) == FALSE) {

								$msg = explode('</p>', validation_errors());
								$output['msg'] = str_ireplace('<p>', '', $msg[0]);
							} else {
								$in_data = $this->input->post();

								foreach ($in_data['ids'] as $pid) {
									$insertData = [
										'start_date' => $this->input->post('start_date'),
										'end_date' => $this->input->post('end_date'),
										'page_id' => $this->input->post('page_id'),
										'component_cat_id' => $cmp_id,
										'item_id' => $pid,
										'is_status' => 'true'
									];
									if (!empty($this->input->post('page_id'))) {
										$check_exist = $this->db->where(['page_id' => $this->input->post('page_id'), 'item_id' => $pid])->get($this->data->table)->result();
									} else {
										$check_exist = $this->db->where(['component_cat_id' => $cmp_id, 'item_id' => $pid])->get($this->data->table)->result();
									}
									if (empty($check_exist)) {
										$insertData = $this->security->xss_clean($insertData);
										$this->db->insert($this->data->table, $insertData);
									}
								}
								// if ($this->db->insert($this->data->table, $insertData)) {

								$output['res'] = 'success';
								$output['msg'] = 'Data Added Successfully.';
								// } else {

								// 	$output['msg'] = 'Something went wrong in Data Saving.';
								// }
							}
						}
						header('Content-Type: application/json');
						echo json_encode([$output]);
					} else {
						// redirect(base_url($this->data->controller . '/' . $this->data->method));
						header('Content-Type: application/json');
						echo json_encode([$output]);
					}
				} else if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();


								$updateData = [
									'start_date' => $this->input->post('start_date'),
									'end_date' => $this->input->post('end_date'),
								];
								$updateData = $this->security->xss_clean($updateData);
								$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
								if ($result) {
									$output['res'] = 'success';
									$output['msg'] = 'Data Updated Successfully.';
								} else {
									$output['msg'] = 'Something went wrong in Data Saving.';
								}
							}
						}
					}
					echo json_encode([$output]);
				} elseif ($action == 'SortingSlider') {

					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {

				$data["cmp_details"] = $this->db->get_where('tbl_component_category', ['id' => $cmp_id])->row();
				if (empty($data["cmp_details"])) {
					redirect(base_url('Admin/ManageComponent/' . $cmp_id));
				}
				$data["details"] = [];
				$condition = [];
				$acondition = ['tbl_component_item.component_cat_id' => $data["cmp_details"]->id];
				if ($this->uri->segment(4) == TRUE) {
					$data["details"] = $this->db->get_where($this->data->table1, ['id' => $id])->row();
					if (empty($data["details"])) {
						redirect(base_url('Admin/ManageComponent/' . $cmp_id));
					}
					$acondition['page_id'] = $data["details"]->id;
				}
				// if (empty($data["details"])) {
				// 	redirect(base_url('Admin/ManageComponent/'.$cmp_id));
				// }
				$data["productList"] = [];
				$data["categoryList"] = getData('categories', ['is_status' => 'true']);
				$data["subcategoryList"] = [];
				$data["asubcategoryList"] = [];


				if (isset($_GET['category']) && !empty($_GET['category'])) {
					$condition['products.category'] = $_GET['category'];
					$data["subcategoryList"] = getData('sub_category', ['is_status' => 'true', 'category_id' => $_GET['category']]);
				}
				if (isset($_GET['subcat']) && !empty($_GET['subcat'])) {
					$condition['products.sub_category'] = $_GET['subcat'];
				}
				if (isset($_GET['from_date']) && !empty($_GET['from_date'])) {
					$condition['DATE(tbl_component_item.end_date) >='] = $_GET['from_date'];
				}
				if (isset($_GET['to_date']) && !empty($_GET['to_date'])) {
					$condition['DATE(tbl_component_item.end_date)<='] = $_GET['to_date'];
				}


				if (isset($_GET['acategory']) && !empty($_GET['acategory'])) {
					$acondition['products.category'] = $_GET['acategory'];
					$data["asubcategoryList"] = getData('sub_category', ['is_status' => 'true', 'category_id' => $_GET['acategory']]);
				}
				if (isset($_GET['asubcat']) && !empty($_GET['asubcat'])) {
					$acondition['products.sub_category'] = $_GET['asubcat'];
				}
				if (isset($_GET['afrom_date']) && !empty($_GET['afrom_date'])) {
					$acondition['DATE(tbl_component_item.start_date) >='] = $_GET['afrom_date'];
				}
				if (isset($_GET['ato_date']) && !empty($_GET['ato_date'])) {
					$acondition['DATE(tbl_component_item.end_date)<='] = $_GET['ato_date'];
				}
				$data["list"] = [];
				if ($data["cmp_details"]->type == 'product') {
					$data["productList"] = [];
					if (!empty($condition)) {
						$condition['products.is_status'] = 'true';
						$data["productList"] = $this->Auth_model->searchCProduct($data["cmp_details"]->id, $condition);
					}
					$data["addedProductList"] = $this->Auth_model->getComponentCProduct($acondition);
				} else {
					$data["productList"] = [];
					if (!empty($condition)) {
						$condition['products.is_status'] = 'true';
						$data["productList"] = $this->Auth_model->searchProduct($data["details"]->id, $condition);
					}
					$data["addedProductList"] = $this->Auth_model->getComponentProduct($acondition);
				}
				$this->load->view($this->data->controller . '/' . $this->data->method, $data);
			}
		} else {
			redirect(base_url('Admin/ManageComponent'));
		}
	}

	public function ManageComponentCategroy()
	{
		$this->data->table = 'tbl_component_category';
		$this->data->key = 'ComponentCategory';
		$this->data->folder = 'component';
		$this->data->file_column = 'image';
		createFolder('./uploads/' . $this->data->folder);
		$data['activepage'] = 'ManageComponent';

		$output['res'] = 'error';
		if ($this->uri->segment(3) == TRUE) {
			$action = $this->uri->segment(3);

			if ($this->uri->segment(4) == TRUE) {
				$id = $this->uri->segment(4);
				$query = $this->db->where('id', $id)->get($this->data->table);
				if ($query->num_rows()) {
					$data["list"] = $query->result();
					if ($action == 'Edit') {
						$data["action"] = "EditComponentCategory";
						$this->load->view($this->data->controller . '/UpdateData', $data);
					} else {
						redirect(base_url($this->data->controller . '/' . $this->data->method));
					}
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			} else {
				if ($action == 'Update') {
					if (!empty($this->input->post())) {
						if (empty($this->input->post("id"))) {
							$output['msg'] = 'ID is required.';
						} else {
							$query = $this->db->where('id', $this->input->post("id"))->get($this->data->table);
							if ($query->num_rows()) {
								$data['list'] = $query->result();
								// $this->form_validation->set_rules('category', 'Category', 'required|trim');
								if ($this->form_validation->run($this->data->key) == FALSE) {
									$msg = explode('</p>', validation_errors());
									$output['msg'] = str_ireplace('<p>', '', $msg[0]);
								} else {

									$updateData = [
										'title' => $this->input->post('title'),
										'description' => $this->input->post('description'),
										'heading' => $this->input->post('heading'),
										'url' => $this->input->post('url'),
									];

									$imgUpStatus = true;
									if (!empty($_FILES['image']['name'])) {
										$filename = FIleUpload('image', $_FILES['image']['name'], './uploads/' . $this->data->folder, 'image');
										if (empty($filename)) {
											$imgUpStatus = false;
										} else {
											$updateData['bg_image'] = $filename;
										}
									}
									if ($imgUpStatus) {
										$updateData = $this->security->xss_clean($updateData);
										$result = $this->db->where('id', $data['list'][0]->id)->update($this->data->table, $updateData);
										if ($result) {
											if (!empty($_FILES['image']['name']) && $imgUpStatus) {
												if (!empty($data['list'][0]->bg_image) && file_exists('./uploads/' . $this->data->folder . '/' . $data['list'][0]->bg_image)) {
													unlinkFile('./uploads/brand/' . $data['list'][0]->bg_image);
												}
											}

											$output['res'] = 'success';
											$output['msg'] = 'Data Updated Successfully.';
										} else {
											$output['msg'] = 'Something went wrong in Data Saving.';
										}
									} else {
										$output['msg'] = 'Image Uploaded Falied.';
									}
								}
							}
						}
					}
					echo json_encode([$output]);
				} else if ($action == 'SortingComponent') {
					$order = $this->input->post('order');
					$this->db->trans_start();
					foreach ($order as $position => $id) {
						$this->db->set('position', $position)->where('id', $id)->update($this->data->table);
					}
					$this->db->trans_complete();

					if ($this->db->trans_status() === FALSE) {

						$output['res'] = 'error';
						$output['msg'] = 'Something went wrong in Data Saving.';
					} else {
						$output['res'] = 'success';
						$output['msg'] = 'Positions updated successfully.';
					}
					echo json_encode([$output]);
				} else {
					redirect(base_url($this->data->controller . '/' . $this->data->method));
				}
			}
		} else {

			$data["list"] = $this->db->order_by('position', 'ASC')->get($this->data->table)->result();
			$this->load->view($this->data->controller . '/' . $this->data->method, $data);
		}
	}
}
