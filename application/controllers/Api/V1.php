<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class V1 extends Api_Controller 
    {
		public function __construct()
        {
            parent::__construct();
            
		}
		
        public function _remap($method, $params = array())
        {
            if (method_exists($this, $method))
            {
                return call_user_func_array(array($this, $method), $params);
			}
            else{
                $this->index();
			}
		}
		
        public function index()
        {
			
			$output['res']="error";
            $output['msg']="Invalid Parameters";
            
			$output['data']=[];
			
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Sliders()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('slider');
			if($result->num_rows())
			{
				foreach($result->result() as $each)
				{
					$each->image = base_url('uploads/slider/').$each->image;
				}
				$output['res']='success';
				$output['msg']=$result->num_rows().' Sliders Found';
				
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Record Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		
		public function Category()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('categories');
			if($result->num_rows())
			{
				foreach($result->result() as $each)
				{
					if(!empty($each->icon))
					{
					$each->icon = base_url('uploads/category/').$each->icon;
					}
				}
				$output['res']='success';
				$output['msg']=$result->num_rows().' Category Found';
				
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Category Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		
		
		public function SubCategory()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$this->form_validation->set_rules('id','Category Id','required|trim');
			
			if (empty($_POST) or empty($this->form_validation->run()))
			{
				$msg = explode('</p>', validation_errors());
				$output['msg'] = str_ireplace('<p>', '', $msg[0]);
			}
			else
			{
				
				$result=$this->db->order_by("id", "ASC")->get_where('sub_category',array('category_id'=>$this->input->post('id')));
				if($result->num_rows())
				{
					$output['res']='success';
					$output['msg']=$result->num_rows().' Sub-Category Found';
					$output['data']=$result->result();
				}
				else
				{
					$output['msg']="No Category Found";
				}
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Brands()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('brand');
			if($result->num_rows())
			{
				foreach($result->result() as $each)
				{
					$each->icon = base_url('uploads/brand/').$each->icon;
				}
				$output['res']='success';
				$output['msg']=$result->num_rows().' Brands Found';
				
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Brand Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Products()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('products');
			if($result->num_rows())
			{
				foreach($result->result() as $each)
				{
					$images = explode(',',$each->image1);
					foreach($images as $index=>$image)
					{
						$images[$index] = base_url('uploads/product/').$image;
					}
					$each->image1 = $images;
				}
				
				$output['res']='success';
				$output['msg']=$result->num_rows().' Products Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Products Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Colors()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('tbl_color');
			if($result->num_rows())
			{
				
				$output['res']='success';
				$output['msg']=$result->num_rows().' Colors Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Color Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function SleeveStyles()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('tbl_sleevestyle');
			if($result->num_rows())
			{
				
				$output['res']='success';
				$output['msg']=$result->num_rows().' Sleeve Style Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Sleeve Style Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function NeckStyles()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('tbl_neckstyle');
			if($result->num_rows())
			{
				
				$output['res']='success';
				$output['msg']=$result->num_rows().' Neck Style Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Neck Style Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Designs()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('tbl_design');
			if($result->num_rows())
			{
				$output['res']='success';
				$output['msg']=$result->num_rows().' Designs Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Designs Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function ClothType()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('tbl_clothtype');
			if($result->num_rows())
			{
				$output['res']='success';
				$output['msg']=$result->num_rows().' Cloth Types Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Cloth Types Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		
		public function Notifications()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$result=$this->db->where(['is_status'=>'true'])->order_by("id", "ASC")->get('notification');
			if($result->num_rows())
			{
				$output['res']='success';
				$output['msg']=$result->num_rows().' Notifications Found';
				$output['data']=$result->result();
			}
			else
			{
				$output['msg']="No Notifications Found";
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function SizeCharts()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			
			$this->form_validation->set_rules('subcatid','SubCategory Id','required|trim');
			
			if (empty($_POST) or empty($this->form_validation->run()))
			{
				$msg = explode('</p>', validation_errors());
				$output['msg'] = str_ireplace('<p>', '', $msg[0]);
			}
			else
			{
				
				$result=$this->db->where(['is_status'=>'true','subcat_id'=>$this->input->post('subcatid')])->order_by("id", "DESC")->get('size_chart');
				if($result->num_rows())
				{
					foreach($result->result() as $each)
					{
						$each->image = base_url('uploads/sizechart/').$each->image;
					}
					
					$output['res']='success';
					$output['msg']=$result->num_rows().' Size Chart Found';
					$output['data']=$result->result();
				}
				else
				{
					$output['msg']="No Size Chart Found";
				}
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		public function Login()
		{
			$output['res']="error";
            $output['msg']="error";
            $output['data']=[];
			
			$this->form_validation->set_rules('mobile','Mobile No','required|trim');
			
			if (empty($_POST) or empty($this->form_validation->run()))
			{
				$msg = explode('</p>', validation_errors());
				$output['msg'] = str_ireplace('<p>', '', $msg[0]);
			}
			else
			{
				
				$result = $this->db->get_where('tbl_user', array('mobile' => $this->input->post('mobile')));
				if ($result->num_rows())
				{
					$values = $result->row();
					if ($values->is_status == 'false')
					{
						$output['msg'] = 'This account has been blocked.';
					}
					else
					{
						$otp = $this->data->otp;
						$saveData = [
						'otp' => $otp,
						];
						$this->db->where('id', $values->id)->update('tbl_user', $saveData);
						$data = $this->db->where('id', $values->id)->get('tbl_user')->row();
						
						
						$output['res'] = 'success';
						$output['msg'] = 'OTP sent on your mobile no.';
						$output['data'] = $data;
					}
				}
				else
				{
					$output['msg'] = 'Mobile Number Not Registered, Please Sign Up First';
				}
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		
		// OTP Verification
		public function OTPVerification()
		{
			$output['res'] = "error";
			$output['msg'] = "error";
			$output['data'] = [];
			
			
			$this->form_validation->set_rules('mobile','Mobile No','required|trim');
			$this->form_validation->set_rules('otp','OTP','required|trim');
			
			if (empty($_POST) or empty($this->form_validation->run()))
			{
				$msg = explode('</p>', validation_errors());
				$output['msg'] = str_ireplace('<p>', '', $msg[0]);
			}
			else
			{
				$mobile = $this->input->post('mobile');
				$otp = $this->input->post('otp');
				
				$wheredata = array('mobile' => $mobile);
				$result = $this->db->where($wheredata)->get('tbl_user');
				if ($result->num_rows())
				{
					$values = $result->row();
					if ($values->otp == $otp)
					{
						$data = $this->db->where('mobile', $mobile)->get('tbl_user')->row();
						
						$output['res'] = 'success';
						$output['msg'] = 'OTP Successfully Verified';
						$output['data'] = $data;
						
					}
					else
					{
						$output['msg'] = 'Invalid OTP';
					}
				}
				else
				{
					$output['msg'] = 'Invalid Mobile No.';
				}
			}
			echo json_encode([$output], JSON_UNESCAPED_UNICODE);
		}
		
		
		
		
	}
?>  