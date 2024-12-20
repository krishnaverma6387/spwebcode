<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	#[\AllowDynamicProperties]
	class App
	{
		private $CI;
		
		public function __construct()
		{
			$this->CI =& get_instance();
			
			$this->appZipCode='';
			
			$this->appGoogleMapKey='';
			
			$this->TempleteIDForOTP='1307162021550108081';
			
			$this->TempleteIDForSMS='1307162021550108081';
			
		}
		
		function SendSMS($mobile,$msg,$DLT_TE_ID)
		{
			// $mobile='91'.$mobile;
			$msg=urlencode($msg);
			$sender="DIGICO";
			$authkey='316846AIn4LVLh7ibW6090030bP1';
			$route='1';
			$url="https://api.msg91.com/api/sendhttp.php?authkey=".$authkey."&sender=".$sender."&mobiles=".$mobile."&route=".$route."&message=".$msg."&DLT_TE_ID=".$DLT_TE_ID."";
			
			$res=file_get_contents($url);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function DiscountPercent($value)
		{
			if(empty($value))
            {
				$amount='0% Off';
			}
			else
            {
				if(explode(' ',$value)){
					$valueArr=explode('%',$value);
					if(!empty($valueArr[0])){
						$valueOrg=$valueArr[0];
						$valueOrg=round($valueOrg);
						$amount=$valueOrg.'% Off';
					}
					else{
						$amount='0% Off';
					}
				}
				else{
					$amount='0% Off';
				}
			}
			return $amount;
		}
		
		public function humanTiming ($time)
		{
			$time = time() - $time; 
			$time = ($time<1)? 1 : $time;
			$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
			);
			foreach ($tokens as $unit => $text) {
				if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'').' ago';
			}
		}
		
		public function calculateDistance($shipping_zip_code)
		{
			$pick_up_point_zip_code = $this->appZipCode;
			$shipping_zip_code = $shipping_zip_code;
			
			$pick_up_lat_lng = $this->getLatLng($pick_up_point_zip_code);
			$shipping_lat_lng = $this->getLatLng($shipping_zip_code);
			$unit = 'km';
			
			$theta = ($pick_up_lat_lng->longitude)-($shipping_lat_lng->longitude);
			$dist = sin(deg2rad((double)$pick_up_lat_lng->latitude)) * sin(deg2rad((double)$shipping_lat_lng->latitude)) + cos(deg2rad((double)$pick_up_lat_lng->latitude)) * cos(deg2rad((double)$shipping_lat_lng->latitude)) * cos(deg2rad((double)$theta));
			$dist = acos($dist);
			$dist = rad2deg($dist);
			$distance = round($dist * 60 * 1.1515 * 1.609344);
			
			$response = (object) [
			'latitude' => $shipping_lat_lng->latitude,
			'longitude' => $shipping_lat_lng->longitude,
			'address' => $shipping_lat_lng->address,
			'pincode' => $shipping_zip_code,
			'distance' => $distance
			];
			
			return $response;
		}
		
		public function getLatLng($zip_code)
		{
			$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$zip_code."&sensor=false&key=".$this->appGoogleMapKey."";
			$curl=curl_init($url);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, '');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_TIMEOUT, 30);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			
			$json=curl_exec($curl);
			$decode=json_decode($json, true);
			
			$response = (object) [
			'latitude' => $decode['results'][0]['geometry']['location']['lat'],
			'longitude' => $decode['results'][0]['geometry']['location']['lng'],
			'address' => $decode['results'][0]['formatted_address']
			];
			
			return $response;
		}
		
		function hidemobile($mobile)
		{
			if(strlen($mobile)==10)
			{
				$mob1=substr($mobile,0,2);
				$mob2=substr($mobile,6);
				$mob3=$mob1."XXXX".$mob2;
				return $mob3;
			}
			else
			{
				return $mobile;
			}
		}
		
		function send_notification_multiple($message, $title, $alltokendata)
		{
			$API_ACCESS_KEY='AAAA4zg-DRE:APA91bHR23JbpLNYkG2RwlCI4-EcdedXScnn9QvXxqGHsK5aB9oxEnV5FM6K2ztIvxHQO08YpjXvIE_-QS-2sCa1uS2TIB9P93_G7tJ4s-xkQz9CbeKBHpu7zxv_tqSS6ys4GHqSBn8p';
			$msg = array(
			'body'   => $message,
			'title'   => $title
			);
			define('API_ACCESS_KEY', $API_ACCESS_KEY);
			$fields = array(
			'registration_ids' => $alltokendata,
			'notification' => $msg
			);
			$headers = array(
			'Authorization: key=' . API_ACCESS_KEY,
			'Content-Type: application/json'
			);
			#Send Reponse To FireBase Server	
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			$result = curl_exec($ch);
			curl_close($ch);
			sleep(1);
			return $result;
		}
		
		
		function send_notification_single($message, $title, $token)
		{
			$API_ACCESS_KEY='AAAA4zg-DRE:APA91bHR23JbpLNYkG2RwlCI4-EcdedXScnn9QvXxqGHsK5aB9oxEnV5FM6K2ztIvxHQO08YpjXvIE_-QS-2sCa1uS2TIB9P93_G7tJ4s-xkQz9CbeKBHpu7zxv_tqSS6ys4GHqSBn8p';
			$msg = array(
			'body'   => $message,
			'title'   => $title
			);
			define('API_ACCESS_KEY', $API_ACCESS_KEY);
			$fields = array(
			'to' => $token,
			'notification' => $msg
			);
			$headers = array(
			'Authorization: key=' . API_ACCESS_KEY,
			'Content-Type: application/json'
			);
			#Send Reponse To FireBase Server	
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			$result = curl_exec($ch);
			curl_close($ch);
			sleep(1);
			return $result;
		}
		
		
		public function bar128($text) {  
			// global $char128asc,$char128charWidth;
			global $char128asc,$char128wid;
			$char128asc=' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~'; 
			$char128wid = array(
			'212222','222122','222221','121223','121322','131222','122213','122312','132212','221213', // 0-9 
			'221312','231212','112232','122132','122231','113222','123122','123221','223211','221132', // 10-19 
			'221231','213212','223112','312131','311222','321122','321221','312212','322112','322211', // 20-29 
			'212123','212321','232121','111323','131123','131321','112313','132113','132311','211313', // 30-39 
			'231113','231311','112133','112331','132131','113123','113321','133121','313121','211331', // 40-49 
			'231131','213113','213311','213131','311123','311321','331121','312113','312311','332111', // 50-59 
			'314111','221411','431111','111224','111422','121124','121421','141122','141221','112214', // 60-69 
			'112412','122114','122411','142112','142211','241211','221114','413111','241112','134111', // 70-79 
			'111242','121142','121241','114212','124112','124211','411212','421112','421211','212141', // 80-89 
			'214121','412121','111143','111341','131141','114113','114311','411113','411311','113141', // 90-99
			'114131','311141','411131','211412','211214','211232','23311120' ); // 100-106
			
			$w = $char128wid[$sum = 104]; // START symbol
			$onChar=1;
			for($x=0;$x<strlen($text);$x++) // GO THRU TEXT GET LETTERS
			if (!( ($pos = strpos($char128asc,$text[$x])) === false )){ // SKIP NOT FOUND CHARS
				$w.= $char128wid[$pos];
				$sum += $onChar++ * $pos;
			} 
			$w.= $char128wid[ $sum % 103 ].$char128wid[106]; //Check Code, then END
			//Part 2, Write rows
			$html="<div class='d-flex'>"; 
			for($x=0;$x<strlen($w);$x+=2) // code 128 widths: black border, then white space
			$html .= "<div class=\"b128\" style=\"border-left-width:{$w[$x]};width:{$w[$x+1]}; border-left: 1px black solid;height: 30px\"></div>"; 
			return "$html</div>"; 
		}
		
		public function barcode(){
			$filepath = (isset($_GET["filepath"])?$_GET["filepath"]:"");
			$text = (isset($_GET["text"])?$_GET["text"]:"2541");
			$size = (isset($_GET["size"])?$_GET["size"]:"20");
			$orientation = (isset($_GET["orientation"])?$_GET["orientation"]:"horizontal");
			$code_type = (isset($_GET["codetype"])?$_GET["codetype"]:"code128");
			$print = (isset($_GET["print"])&&$_GET["print"]=='true'?true:false);
			$sizefactor = (isset($_GET["sizefactor"])?$_GET["sizefactor"]:"1");
			
			// This function call can be copied into your project and can be made from anywhere in your code
			// barcode( $filepath, $text, $size, $orientation, $code_type, $print, $sizefactor );
			
			// function barcode( $filepath="", $text="0", $size="20", $orientation="horizontal", $code_type="code128", $print=false, $SizeFactor=1 ) {
				$code_string = "";
				// Translate the $text into barcode the correct $code_type
				if ( in_array(strtolower($code_type), array("code128", "code128b")) ) {
					$chksum = 104;
					// Must not change order of array elements as the checksum depends on the array's key to validate final code
					$code_array = array(" "=>"212222","!"=>"222122","\""=>"222221","#"=>"121223","$"=>"121322","%"=>"131222","&"=>"122213","'"=>"122312","("=>"132212",")"=>"221213","*"=>"221312","+"=>"231212",","=>"112232","-"=>"122132","."=>"122231","/"=>"113222","0"=>"123122","1"=>"123221","2"=>"223211","3"=>"221132","4"=>"221231","5"=>"213212","6"=>"223112","7"=>"312131","8"=>"311222","9"=>"321122",":"=>"321221",";"=>"312212","<"=>"322112","="=>"322211",">"=>"212123","?"=>"212321","@"=>"232121","A"=>"111323","B"=>"131123","C"=>"131321","D"=>"112313","E"=>"132113","F"=>"132311","G"=>"211313","H"=>"231113","I"=>"231311","J"=>"112133","K"=>"112331","L"=>"132131","M"=>"113123","N"=>"113321","O"=>"133121","P"=>"313121","Q"=>"211331","R"=>"231131","S"=>"213113","T"=>"213311","U"=>"213131","V"=>"311123","W"=>"311321","X"=>"331121","Y"=>"312113","Z"=>"312311","["=>"332111","\\"=>"314111","]"=>"221411","^"=>"431111","_"=>"111224","\`"=>"111422","a"=>"121124","b"=>"121421","c"=>"141122","d"=>"141221","e"=>"112214","f"=>"112412","g"=>"122114","h"=>"122411","i"=>"142112","j"=>"142211","k"=>"241211","l"=>"221114","m"=>"413111","n"=>"241112","o"=>"134111","p"=>"111242","q"=>"121142","r"=>"121241","s"=>"114212","t"=>"124112","u"=>"124211","v"=>"411212","w"=>"421112","x"=>"421211","y"=>"212141","z"=>"214121","{"=>"412121","|"=>"111143","}"=>"111341","~"=>"131141","DEL"=>"114113","FNC 3"=>"114311","FNC 2"=>"411113","SHIFT"=>"411311","CODE C"=>"113141","FNC 4"=>"114131","CODE A"=>"311141","FNC 1"=>"411131","Start A"=>"211412","Start B"=>"211214","Start C"=>"211232","Stop"=>"2331112");
					$code_keys = array_keys($code_array);
					$code_values = array_flip($code_keys);
					for ( $X = 1; $X <= strlen($text); $X++ ) {
						$activeKey = substr( $text, ($X-1), 1);
						$code_string .= $code_array[$activeKey];
						$chksum=($chksum + ($code_values[$activeKey] * $X));
					}
					$code_string .= $code_array[$code_keys[($chksum - (intval($chksum / 103) * 103))]];
					
					$code_string = "211214" . $code_string . "2331112";
					} elseif ( strtolower($code_type) == "code128a" ) {
					$chksum = 103;
					$text = strtoupper($text); // Code 128A doesn't support lower case
					// Must not change order of array elements as the checksum depends on the array's key to validate final code
					$code_array = array(" "=>"212222","!"=>"222122","\""=>"222221","#"=>"121223","$"=>"121322","%"=>"131222","&"=>"122213","'"=>"122312","("=>"132212",")"=>"221213","*"=>"221312","+"=>"231212",","=>"112232","-"=>"122132","."=>"122231","/"=>"113222","0"=>"123122","1"=>"123221","2"=>"223211","3"=>"221132","4"=>"221231","5"=>"213212","6"=>"223112","7"=>"312131","8"=>"311222","9"=>"321122",":"=>"321221",";"=>"312212","<"=>"322112","="=>"322211",">"=>"212123","?"=>"212321","@"=>"232121","A"=>"111323","B"=>"131123","C"=>"131321","D"=>"112313","E"=>"132113","F"=>"132311","G"=>"211313","H"=>"231113","I"=>"231311","J"=>"112133","K"=>"112331","L"=>"132131","M"=>"113123","N"=>"113321","O"=>"133121","P"=>"313121","Q"=>"211331","R"=>"231131","S"=>"213113","T"=>"213311","U"=>"213131","V"=>"311123","W"=>"311321","X"=>"331121","Y"=>"312113","Z"=>"312311","["=>"332111","\\"=>"314111","]"=>"221411","^"=>"431111","_"=>"111224","NUL"=>"111422","SOH"=>"121124","STX"=>"121421","ETX"=>"141122","EOT"=>"141221","ENQ"=>"112214","ACK"=>"112412","BEL"=>"122114","BS"=>"122411","HT"=>"142112","LF"=>"142211","VT"=>"241211","FF"=>"221114","CR"=>"413111","SO"=>"241112","SI"=>"134111","DLE"=>"111242","DC1"=>"121142","DC2"=>"121241","DC3"=>"114212","DC4"=>"124112","NAK"=>"124211","SYN"=>"411212","ETB"=>"421112","CAN"=>"421211","EM"=>"212141","SUB"=>"214121","ESC"=>"412121","FS"=>"111143","GS"=>"111341","RS"=>"131141","US"=>"114113","FNC 3"=>"114311","FNC 2"=>"411113","SHIFT"=>"411311","CODE C"=>"113141","CODE B"=>"114131","FNC 4"=>"311141","FNC 1"=>"411131","Start A"=>"211412","Start B"=>"211214","Start C"=>"211232","Stop"=>"2331112");
					$code_keys = array_keys($code_array);
					$code_values = array_flip($code_keys);
					for ( $X = 1; $X <= strlen($text); $X++ ) {
						$activeKey = substr( $text, ($X-1), 1);
						$code_string .= $code_array[$activeKey];
						$chksum=($chksum + ($code_values[$activeKey] * $X));
					}
					$code_string .= $code_array[$code_keys[($chksum - (intval($chksum / 103) * 103))]];
					
					$code_string = "211412" . $code_string . "2331112";
					} elseif ( strtolower($code_type) == "code39" ) {
					$code_array = array("0"=>"111221211","1"=>"211211112","2"=>"112211112","3"=>"212211111","4"=>"111221112","5"=>"211221111","6"=>"112221111","7"=>"111211212","8"=>"211211211","9"=>"112211211","A"=>"211112112","B"=>"112112112","C"=>"212112111","D"=>"111122112","E"=>"211122111","F"=>"112122111","G"=>"111112212","H"=>"211112211","I"=>"112112211","J"=>"111122211","K"=>"211111122","L"=>"112111122","M"=>"212111121","N"=>"111121122","O"=>"211121121","P"=>"112121121","Q"=>"111111222","R"=>"211111221","S"=>"112111221","T"=>"111121221","U"=>"221111112","V"=>"122111112","W"=>"222111111","X"=>"121121112","Y"=>"221121111","Z"=>"122121111","-"=>"121111212","."=>"221111211"," "=>"122111211","$"=>"121212111","/"=>"121211121","+"=>"121112121","%"=>"111212121","*"=>"121121211");
					
					// Convert to uppercase
					$upper_text = strtoupper($text);
					
					for ( $X = 1; $X<=strlen($upper_text); $X++ ) {
						$code_string .= $code_array[substr( $upper_text, ($X-1), 1)] . "1";
					}
					
					$code_string = "1211212111" . $code_string . "121121211";
					} elseif ( strtolower($code_type) == "code25" ) {
					$code_array1 = array("1","2","3","4","5","6","7","8","9","0");
					$code_array2 = array("3-1-1-1-3","1-3-1-1-3","3-3-1-1-1","1-1-3-1-3","3-1-3-1-1","1-3-3-1-1","1-1-1-3-3","3-1-1-3-1","1-3-1-3-1","1-1-3-3-1");
					
					for ( $X = 1; $X <= strlen($text); $X++ ) {
						for ( $Y = 0; $Y < count($code_array1); $Y++ ) {
							if ( substr($text, ($X-1), 1) == $code_array1[$Y] )
							$temp[$X] = $code_array2[$Y];
						}
					}
					
					for ( $X=1; $X<=strlen($text); $X+=2 ) {
						if ( isset($temp[$X]) && isset($temp[($X + 1)]) ) {
							$temp1 = explode( "-", $temp[$X] );
							$temp2 = explode( "-", $temp[($X + 1)] );
							for ( $Y = 0; $Y < count($temp1); $Y++ )
							$code_string .= $temp1[$Y] . $temp2[$Y];
						}
					}
					
					$code_string = "1111" . $code_string . "311";
					} elseif ( strtolower($code_type) == "codabar" ) {
					$code_array1 = array("1","2","3","4","5","6","7","8","9","0","-","$",":","/",".","+","A","B","C","D");
					$code_array2 = array("1111221","1112112","2211111","1121121","2111121","1211112","1211211","1221111","2112111","1111122","1112211","1122111","2111212","2121112","2121211","1121212","1122121","1212112","1112122","1112221");
					
					// Convert to uppercase
					$upper_text = strtoupper($text);
					
					for ( $X = 1; $X<=strlen($upper_text); $X++ ) {
						for ( $Y = 0; $Y<count($code_array1); $Y++ ) {
							if ( substr($upper_text, ($X-1), 1) == $code_array1[$Y] )
							$code_string .= $code_array2[$Y] . "1";
						}
					}
					$code_string = "11221211" . $code_string . "1122121";
				}
				
				// Pad the edges of the barcode
				$code_length = 20;
				if ($print) {
					$text_height = 30;
					} else {
					$text_height = 0;
				}
				
				for ( $i=1; $i <= strlen($code_string); $i++ ){
					$code_length = $code_length + (integer)(substr($code_string,($i-1),1));
				}
				
				if ( strtolower($orientation) == "horizontal" ) {
					$img_width = $code_length*1;
					$img_height = $size;
					} else {
					$img_width = $size;
					$img_height = $code_length*1;
				}
				
				$image = imagecreate($img_width, $img_height + $text_height);
				$black = imagecolorallocate ($image, 0, 0, 0);
				$white = imagecolorallocate ($image, 255, 255, 255);
				
				imagefill( $image, 0, 0, $white );
				if ( $print ) {
					imagestring($image, 5, 31, $img_height, $text, $black );
				}
				
				$location = 10;
				for ( $position = 1 ; $position <= strlen($code_string); $position++ ) {
					$cur_size = $location + ( substr($code_string, ($position-1), 1) );
					if ( strtolower($orientation) == "horizontal" )
					imagefilledrectangle( $image, $location*1, 0, $cur_size*1, $img_height, ($position % 2 == 0 ? $white : $black) );
					else
					imagefilledrectangle( $image, 0, $location*1, $img_width, $cur_size*1, ($position % 2 == 0 ? $white : $black) );
					$location = $cur_size;
				}
				
				var_dump($image); 
				// Draw barcode to the screen or save in a file
				// if ( $filepath=="" ) {
					// header ('Content-type: image/png');
					// imagepng($image);
					// imagedestroy($image);
					// } else {
					// imagepng($image,$filepath);
					// imagedestroy($image);		
				// }
			// }
		}
	}						