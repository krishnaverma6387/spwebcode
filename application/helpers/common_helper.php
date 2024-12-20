<?php

function getData($table, $condition = [], $id = '', $limit = '', $select = '', $asc = '')
{
    $CI = &get_instance();

    // Start query building
    if (!empty($select)) {
        $CI->db->select($select);
    }
    $CI->db->from($table);

    if (!empty($condition)) {
        $CI->db->where($condition);
    }

    if (!empty($asc)) {
        $CI->db->order_by('position', 'ASC');
    } else {
        $CI->db->order_by('position', 'DESC');
    }

    if (!empty($limit)) {
        $CI->db->limit($limit, 0);
    }

    $query = $CI->db->get();

    if (!empty($id)) {
        $data = $query->row_array();
    } else {
        $data = $query->result_array();
    }


    return $data;
}

function getHeaderCategory()
{
    $data = getData('categories', ['is_status' => 'true'], '', 7, '', 'asc');
    foreach ($data as &$d) {
        $d['icon'] = $d['icon'] ? base_url('uploads/category/') . $d['icon'] : '';
        $subcategories = getData('sub_category', ['category_id' => $d['id'], 'is_status' => 'true'], '', '', '', 'asc');
        foreach ($subcategories as &$subData) {
            $subData['cosubcategory'] = getData('co_subcategory', ['category_id' => $d['id'], 'subcategory_id' => $subData['id'], 'is_status' => 'true'], '', '', '', 'asc');
        }
        $d['subcategories'] = $subcategories;
    }
    return $data;
}

function unlinkFile($file_path)
{
    if (file_exists($file_path)) {
        unlink($file_path);
        return true;
    } else {
        return false;
    }
}

function createFolder($directory_path)
{
    if (!is_dir($directory_path)) {
        mkdir($directory_path, 0777, true);
        return true;
    } else {
        return false;
    }
}

function getNumberRound($num)
{

    $floatnum = $num / 8;

    $floatnum = explode(".", $floatnum);
    // var_dump($floatnum);die();
    $roundNum = $floatnum[0] + (count($floatnum) > 1 && $floatnum[1] > 0  ? 1 : 0);
    return $roundNum;
}

function getDataOrderByID($table, $condition = [], $id = '', $limit = '', $select = '', $asc = '')
{
    $CI = &get_instance();

    // Start query building
    if (!empty($select)) {
        $CI->db->select($select);
    }
    $CI->db->from($table);

    if (!empty($condition)) {
        $CI->db->where($condition);
    }

    if (!empty($asc)) {
        $CI->db->order_by('id', 'ASC');
    } else {
        $CI->db->order_by('id', 'DESC');
    }

    if (!empty($limit)) {
        $CI->db->limit($limit, 0);
    }

    $query = $CI->db->get();

    if (!empty($id)) {
        $data = $query->row_array();
    } else {
        $data = $query->result_array();
    }


    return $data;
}

function FIleUpload($key, $filename, $path, $rename_name)
{
    $CI = &get_instance();
    $upload_status = true;
    $filename1 = "";
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $filename1 = time() . $rename_name . "." . $ext;
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'jpg|png|jpeg|webp|avif|svg';
    $config['max_size'] = '*'; // In KB
    $config['file_name'] = $filename1;
    $CI->load->library('upload');
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($key)) {
        $upload_status = false;
        $filename1 = '';
    }
    return $filename1;
}




function getTitleCategory()
{
    $data = getData('categories', ['is_status' => 'true'], '', 7, '', 'asc');
    foreach ($data as &$d) {
        $d['icon'] = $d['icon'] ? base_url('uploads/category/') . $d['icon'] : '';
        $categoryTags = getData('tbl_category_tags', ['cat_id' => $d['id'], 'is_status' => 'true'], '', '', '', 'asc');
        foreach ($categoryTags as &$tagData) {
            $tagData['subcategories'] = getData('sub_category', ['cat_tag_id' => $tagData['id'], 'is_status' => 'true'], '', '', '', 'asc');
        }
        $d['categoryTags'] = $categoryTags;
    }
    return $data;
}

function getDateDDFormate()
{
    $date = date("Ymd");
    return $date;
}

function getProductUniqueCode()
{
    $CI = &get_instance();
    $data = $CI->db->order_by("id", "desc")->get('products')->row();
    $id = $data->id ?? 1;
    if ($id <= 9) {
        $num = '00000' . $id;
    } else if ($id >= 9 && $id <= 99) {
        $num = '0000' . $id;
    } else if ($id > 99 && $id <= 999) {
        $num = '000' . $id;
    } else if ($id > 999 && $id <= 9999) {
        $num = '00' . $id;
    } else if ($id > 9999 && $id <= 99999) {
        $num = '0' . $id;
    } else if ($id > 99999) {
        $num = $id;
    }
    return $num;
}

function getProductCode($cat_id, $item_type)
{
    //20240625-6C-000001
    return getDateDDFormate() . '-' . $cat_id . $item_type . '-' . getProductUniqueCode();
}

function getUpdatedProductCode($cat_id, $item_type, $Oldproduct_code = '', $pid = '')
{
    //20240625-6C-000001
    if (!empty($product_code)) {
        $Oldproduct_codeId = explode("-", $Oldproduct_code);
        $updatedID = $Oldproduct_codeId[0] . '-' . $cat_id . $item_type . '-'  . end($Oldproduct_codeId);
    } else {
        $pid = (int)$pid - 1;
        if ($pid <= 9) {
            $num = '00000' . $pid;
        } else if ($pid >= 9 && $pid <= 99) {
            $num = '0000' . $pid;
        } else if ($pid > 99 && $pid <= 999) {
            $num = '000' . $pid;
        } else if ($pid > 999 && $pid <= 9999) {
            $num = '00' . $pid;
        } else if ($pid > 9999 && $pid <= 99999) {
            $num = '0' . $pid;
        } else if ($pid > 99999) {
            $num = $pid;
        }
        $updatedID = getDateDDFormate() . '-' . $cat_id . $item_type . '-'  . $num;
    }
    return $updatedID;
}

function getProductVarientUniqueCode()
{
    $CI = &get_instance();
    $data = $CI->db->order_by("id", "desc")->get('product_variant')->row();
    $id = $data->id;
    if ($id <= 9) {
        $num = '00000' . $id;
    } else if ($id >= 9 && $id <= 99) {
        $num = '0000' . $id;
    } else if ($id > 99 && $id <= 999) {
        $num = '000' . $id;
    } else if ($id > 999 && $id <= 9999) {
        $num = '00' . $id;
    } else if ($id > 9999 && $id <= 99999) {
        $num = '0' . $id;
    } else if ($id > 99999) {
        $num = $id;
    }
    return $num;
}

function getProductVariantCode($cat_id, $item_type, $color_id)
{
    //20240625-6C-000001
    return getDateDDFormate() . '-' . $cat_id . $item_type . '-' . getProductVarientUniqueCode();
}


function updateProductVariantCode($cat_id, $item_type, $color_id, $varientCode = '', $vid = '')
{
    //20240625-6C-000001
    return getDateDDFormate() . '-' . $cat_id . $item_type . '-' . getProductVarientUniqueCode();
}


function getSkuUniqueCode()
{
    $CI = &get_instance();
    $data = $CI->db->order_by("id", "desc")->get('products')->row();
    $id = $data->id ?? 1;
    if ($id <= 9) {
        $num = '000' . $id;
    } else if ($id >= 9 && $id <= 99) {
        $num = '00' . $id;
    } else if ($id > 99 && $id <= 999) {
        $num = '0' . $id;
    } else {
        $num = $id;
    }
    return $num;
}
function getProductSKUId($item_type, $cat_id, $subcat_id)
{
    //{INDIVIDUAL/COMBO}-{PRODUCT CATEGORY}-{SUB CATEGORY (Optional)}-uniqueid
    return $item_type . '-' . $cat_id . '-' . $subcat_id . '-' . getSkuUniqueCode();
}

function getupdatedProductSKUId($item_type, $cat_id, $subcat_id, $oldsku = '', $pid = '')
{
    if (!empty($oldsku)) {
        $oldskuId = explode("-", $oldsku);
        $updatedID = $item_type . '-' . $cat_id . '-' . $subcat_id . '-' . end($oldskuId);
    } else {
        $updatedID = $item_type . '-' . $cat_id . '-' . $subcat_id . '-' . (int)$pid - 1;
    }
    //{INDIVIDUAL/COMBO}-{PRODUCT CATEGORY}-{SUB CATEGORY (Optional)}-uniqueid
    return $updatedID;
}


function canonical_link()
{
    $CI = &get_instance();
    $canonical_url = base_url(uri_string());
    return '<link rel="canonical" href="' . $canonical_url . '" />';
}

function product_schema_markup($product)
{
    $schema = [
        '@context' => 'http://schema.org',
        '@type' => 'Product',
        'name' => $product['name'],
        'description' => $product['description'],
        'sku' => $product['sku'],
        'offers' => [
            '@type' => 'Offer',
            'priceCurrency' => 'USD', // Change according to your currency
            'price' => $product['price'],
            'availability' => 'http://schema.org/InStock', // Example for in stock, adjust as needed
            'seller' => [
                '@type' => 'Organization',
                'name' => 'Your Company Name', // Change to your company name
            ],
        ],
        'image' => $product['image_url'], // URL of the product image
        'url' => current_url(), // URL of the current product page
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}


function generateQrcode($qrtext)
{
    createFolder('./uploads/qrcode');
    $CI = &get_instance();
    $CI->load->library('phpqrcode/Qrlib');
    //file path for store images
    $SERVERFILEPATH = getcwd() . '/uploads/qrcode/';
    $text             = $qrtext;

    $folder = $SERVERFILEPATH;
    $file_name1 = $qrtext . ".png";

    $file_name = $folder . $file_name1;
    if (!file_exists(base_url('uploads/qrcode/') . $file_name)) {
        QRcode::png($text, $file_name);
    }
    return base_url('uploads/qrcode/') . $file_name1;
}

function generateBarcode($code)
{
    createFolder('./uploads/barcode');
    $CI = &get_instance();
    error_reporting(0);

    $CI->load->library('zend');
    $CI->zend->load('Zend/Barcode');

    // $code = 'abc';
    $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $code), array())->draw();


    if (!file_exists(base_url('uploads/barcode/') . $code . '.png')) {
        imagepng($imageResource, 'uploads/barcode/' . $code . '.png');
    }
    return base_url('uploads/barcode/') . $code . '.png';
}



function compress_image($inputImagePath, $outputImagePath, $targetSizeKB = 100)
{
    // Define the maximum allowed size in bytes (100KB)
    $maxSize = $targetSizeKB * 1024;

    // Check if the input file exists
    if (!file_exists($inputImagePath)) {
        // die('Input file does not exist.');
        return false;
    }

    // Function to resize the image
    function resizeImage($resource, $width, $height, $newWidth, $newHeight)
    {
        if ($newWidth <= 0 || $newHeight <= 0) {
            return false;
        }
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        if ($newImage === false) {
            return false;
        }
        $result = imagecopyresampled($newImage, $resource, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        if ($result === false) {
            imagedestroy($newImage);
            return false;
        }
        return $newImage;
    }

    // Get the size of the original image
    $imageSize = filesize($inputImagePath);
    if ($imageSize === false) {
        // die('Failed to get the size of the input image.');
        return false;
    }

    // Check the image type and create a new image resource from the original
    $img = false;
    $imageInfo = getimagesize($inputImagePath);
    if ($imageInfo === false) {
        // die('Failed to get image information.');
        return false;
    }

    switch ($imageInfo[2]) {
        case IMAGETYPE_JPEG:
            $img = imagecreatefromjpeg($inputImagePath);
            break;
        case IMAGETYPE_PNG:
            $img = imagecreatefrompng($inputImagePath);
            break;
        case IMAGETYPE_GIF:
            $img = imagecreatefromgif($inputImagePath);
            break;
        case IMAGETYPE_WEBP:
            if (function_exists('imagecreatefromwebp')) {
                $img = imagecreatefromwebp($inputImagePath);
            } else {
                // die('WebP support is not enabled in your GD library.');
                return false;
            }
            break;
        default:
            // die('Unsupported image type.');
            return false;
    }

    if ($img === false) {
        // die('Failed to create image from input file.');
        return false;
    }

    // Get original dimensions
    list($originalWidth, $originalHeight) = getimagesize($inputImagePath);

    // Initialize the compression quality
    // $quality = 90;
    $quality = 2;

    // Initialize resize factor
    // $resizeFactor = 0.9;
    $resizeFactor = 1;

    // Compress the image until it is less than or equal to 100KB
    do {
        // Calculate new dimensions
        $newWidth = (int)($originalWidth * $resizeFactor);
        $newHeight = (int)($originalHeight * $resizeFactor);

        // Ensure the new dimensions are valid
        if ($newWidth <= 0 || $newHeight <= 0) {
            break;
        }

        // Resize the image
        $resizedImage = resizeImage($img, $originalWidth, $originalHeight, $newWidth, $newHeight);
        if ($resizedImage === false) {
            // die('Failed to resize image.');
            return false;
        }

        // Save the image with the current quality
        switch ($imageInfo[2]) {
            case IMAGETYPE_JPEG:
                imagejpeg($resizedImage, $outputImagePath, $quality);
                break;
            case IMAGETYPE_PNG:
                imagepng($resizedImage, $outputImagePath, (int)($quality / 10 - 1)); // PNG quality is from 0 (no compression) to 9
                break;
            case IMAGETYPE_WEBP:
                imagewebp($resizedImage, $outputImagePath, $quality);
                break;
        }

        // Check the size of the compressed image
        $compressedSize = filesize($outputImagePath);

        if ($compressedSize === false) {
            imagedestroy($resizedImage);
            // die('Failed to get the size of the compressed image.');
            return false;
        }

        // Decrease the quality for the next iteration if necessary
        if ($compressedSize > $maxSize) {
            $quality -= 5;
            $resizeFactor -= 0.1;
        }

        // Free up memory of resized image
        imagedestroy($resizedImage);
    } while ($compressedSize > $maxSize && $quality > 0 && $resizeFactor > 0.1);

    // Free up memory of original image
    imagedestroy($img);

    // echo "Image processing completed.";
    return true;
}

function compress_svg($inputImagePath, $outputImagePath)
{
    // Ensure using absolute paths
    $inputImagePath = realpath($inputImagePath);
    $outputImagePath = realpath(dirname($outputImagePath)) . DIRECTORY_SEPARATOR . basename($outputImagePath);

    if ($inputImagePath === false || $outputImagePath === false) {
        die('Failed to resolve absolute paths.');
    }

    $command = "svgo $inputImagePath -o $outputImagePath";
    exec($command . " 2>&1", $output, $return_var);

    if ($return_var !== 0) {
        die("SVG compression failed: " . implode("\n", $output));
    }

    echo "SVG compression completed.";
}

function compress_avif($inputImagePath, $outputImagePath, $quality = 50)
{
    $command = "magick convert $inputImagePath -quality $quality $outputImagePath";
    exec($command, $output, $return_var);

    if ($return_var !== 0) {
        die("AVIF compression failed: " . implode("\n", $output));
    }

    echo "AVIF compression completed.";
}


function sendEmail($to, $name, $subject, $msg)
{

    $CI = &get_instance();

    // Set email preferences
    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.hostinger.com',
        'smtp_port' => 587,
        'smtp_user' => 'info@slickpattern.com',
        'smtp_pass' => 'SlickPattern@123',
        'smtp_crypto' => 'tls',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE,
        'newline' => "\r\n"
    );
    $CI->email->initialize($config);

    // Set email parameters
    $CI->email->from('info@slickpattern.com', $name);
    // $CI->email->to('anshul.guptacs@gmail.com');
    $CI->email->to($to);
    $CI->email->subject($subject);
    $CI->email->message($msg);
    // Send email
    // if ($CI->email->send()) {
    //     echo "Email sent successfully!";
    // } else {
    //     show_error($CI->email->print_debugger());
    // }
    return $CI->email->send();
}

function updateData($table, $data, $condition)
{
    $CI = &get_instance();
    $CI->db->where($condition);
    $CI->db->update($table, $data);
    if ($CI->db->affected_rows() > 0) {
        return true;
    }else{
      return false;  
    }
}


function getDataById($table, $condition = [], $id = '', $limit = '', $select = '', $asc = '')
{
    $CI = &get_instance();

    // Start query building
    if (!empty($select)) {
        $CI->db->select($select);
    }
    $CI->db->from($table);

    if (!empty($condition)) {
        $CI->db->where($condition);
    }

    if (!empty($asc)) {
        $CI->db->order_by('position', 'ASC');
    } else {
        $CI->db->order_by('position', 'DESC');
    }

    if (!empty($limit)) {
        $CI->db->limit($limit, 0);
    }

    $query = $CI->db->get();

    if (!empty($id)) {
        $data = $query->row();
    } else {
        $data = $query->result();
    }


    return $data;
}
