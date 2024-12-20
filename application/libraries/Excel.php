<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');  
	// error_reporting(0);
	
	require_once "./application/third_party/PHPExcel/PHPExcel.php";
	#[AllowDynamicProperties]
	class Excel extends PHPExcel {
		public function __construct() {
			parent::__construct();
			 
			//Excel Allowed File Extension
			$this->allowedFileType=[
				'application/vnd.ms-excel',
				'text/xls',
				'text/xlsx',
				'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
			];
		}
	}
?>