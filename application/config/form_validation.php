<?php
$config = array(
    // Admin 
    'Login' => array(
        array(
            'field' => 'role_id',
            'label' => 'Role ID',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim'
        )
    ),
    'ForgotPassword' => array(
        array(
            'field' => 'role_id',
            'label' => 'Role ID',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|trim'
        )

    ),
    'ChangePassword' => array(
        array(
            'field' => 'opass',
            'label' => 'Current Password',
            'rules' => 'required'
        ),
        array(
            'field' => 'npass',
            'label' => 'New Password',
            'rules' => 'required'
        ),
        array(
            'field' => 'cpass',
            'label' => 'Confirm Password',
            'rules' => 'required'
        )
    ),

    'subadmin' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'rolename',
            'label' => 'Role Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'date',
            'label' => 'Expiry Date',
            'rules' => 'required|trim'
        )
    ),

    'Category' => array(
        array(
            'field' => 'name',
            'label' => 'Category Name',
            'rules' => 'required|trim|is_unique[categories.name]'
        ),
    ),
    'BecomeSeller' => array(
        array(
            'field' => 'title',
            'label' => 'Title Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'trim'
        )
    ),

    'Brand' => array(
        array(
            'field' => 'name',
            'label' => 'Brand Name',
            'rules' => 'required|trim|is_unique[brand.name]'
        ),
    ),


    'Slider' => array(
        array(
            'field' => 'key',
            'label' => 'Key',
            'rules' => 'required|trim'
        )
    ),
	
	'HeroBanner' => array(
        array(
            'field' => 'key',
            'label' => 'Key',
            'rules' => 'required|trim'
        )
    ),
	
	'RoyalClubSetting' => array(
        array(
            'field' => 'key',
            'label' => 'Key',
            'rules' => 'required|trim'
        )
    ),

    'SubCategory' => array(

        array(
            'field' => 'category',
            'label' => 'category',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'size_id',
            'label' => 'Size',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'cat_tag_id',
            'label' => 'Category Tag',
            'rules' => 'required|trim'
        ),
    ),
    
    'CategoryTags' => array(

        array(
            'field' => 'cat_id',
            'label' => 'category',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'tag_name',
            'label' => 'Tag Name',
            'rules' => 'required|trim'
        ),
    ),

    'Combo' => array(

        array(
            'field' => 'name',
            'label' => 'Combo Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'product1',
            'label' => 'Product 1',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'product2',
            'label' => 'Product 2',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'product3',
            'label' => 'Product 3',
            'rules' => 'trim|numeric'
        ),
        array(
            'field' => 'product4',
            'label' => 'Product 4',
            'rules' => 'trim|numeric'
        ),
        array(
            'field' => 'totalprice',
            'label' => 'Total Price',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'offerprice',
            'label' => 'Offer Price',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'longdescription',
            'label' => 'Long Description',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'shortdescription',
            'label' => 'Short Description',
            'rules' => 'required|trim'
        ),

    ),


    'SubBrand' => array(
        array(
            'field' => 'brand',
            'label' => 'Brand',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
    ),

    'job_post' => array(
        array(
            'field' => 'job_title',
            'label' => 'Title',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'desc',
            'label' => 'Description',
            'rules' => 'required|trim'
        ),
    ),

    'Coupon' => array(
        array(
            'field' => 'code',
            'label' => 'Coupon Code',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'discount',
            'label' => 'Discount',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required|trim'
        ),
        // array(
        // 'field' => 'startdate',  
        // 'label' => 'Stasting Date',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'enddate',
        // 'label' => 'Coupon Expiry Date',
        // 'rules' => 'required|trim' 
        // ),

    ),

    'Vendor' => array(
        array(
            'field' => 'name',
            'label' => 'Owner Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[tbl_vendor.email]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|is_unique[tbl_vendor.mobile]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),
        array(
            'field' => 'shopname',
            'label' => 'Shop Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'gstno',
            'label' => 'GSTIN No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'pickupname',
            'label' => 'Pickup Authority Person Name.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'state',
            'label' => 'Pickup State',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'Pickup City',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'pincode',
            'label' => 'Pickup Area Pincode',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'address',
            'label' => 'Pickup Address',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'acholder',
            'label' => 'Account Holder',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'accountno',
            'label' => 'Account No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'ifsc',
            'label' => 'IFSC Code',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'branch',
            'label' => 'Branch',
            'rules' => 'required|trim'
        ),

    ),

    'Purchase Vendor' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[purchase_vendor.email]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),
        array(
            'field' => 'altmobile',
            'label' => 'Alternate Mobile No.',
            'rules' => 'trim|min_length[10]|max_length[10]'
        ),
        array(
            'field' => 'wtspmobile',
            'label' => 'Whatsapp Mobile No.',
            'rules' => 'trim|min_length[10]|max_length[10]'
        ),
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'pincode',
            'label' => 'Pincode.',
            'rules' => 'required|trim|min_length[6]|max_length[6]'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'acholder',
            'label' => 'Account Holder',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'accountno',
            'label' => 'Account No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'ifsc',
            'label' => 'IFSC Code',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'branch',
            'label' => 'Branch',
            'rules' => 'required|trim'
        ),

    ),


    'SizeChart' => array(
        array(
            'field' => 'subcat',
            'label' => 'Subcategory',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'size',
            'label' => 'Size',
            'rules' => 'required|trim'
        ),

    ),


    'EditPurchaseVendor' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'acholder',
            'label' => 'Account Holder',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'accountno',
            'label' => 'Account No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'ifsc',
            'label' => 'IFSC Code',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'branch',
            'label' => 'Branch',
            'rules' => 'required|trim'
        ),

    ),

    'Color' => array(
        array(
            'field' => 'name',
            'label' => 'Color Name',
            'rules' => 'required|trim|is_unique[tbl_color.name]'
        ),
        array(
            'field' => 'code',
            'label' => 'Color Code',
            'rules' => 'required|trim|is_unique[tbl_color.code]'
        ),

    ),

    'Size' => array(
        array(
            'field' => 'size_type',
            'label' => 'Size Type',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'size_name',
            'label' => 'Size Name',
            'rules' => 'required|trim|is_unique[tbl_size.size_name]'
        ),

    ),

    'AddVariant' => array(
        array(
            'field' => 'id',
            'label' => 'Product Id',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'p_size[]',
            'label' => 'Size',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'p_color[]',
            'label' => 'Color',
            'rules' => 'required|trim'
        ),
        // array(
        // 'field' => 'p_unit',
        // 'label' => 'Unit',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'p_weight',
        // 'label' => 'Weight',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'p_mrp',
        // 'label' => 'MRP',
        // 'rules' => 'required|trim|numeric'
        // ),
        // array(
        // 'field' => 'p_price',
        // 'label' => 'Offer Price',
        // 'rules' => 'required|trim|numeric'
        // ),
        // array(
        // 'field' => 'avaliability',
        // 'label' => 'Availaibility',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'stock',
        // 'label' => 'Stock Quantity',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'baar_code',
        // 'label' => 'Bar Code',
        // 'rules' => 'required|trim'
        // ),
    ),

    'EditColor' => array(
        array(
            'field' => 'name',
            'label' => 'Color Name',
            'rules' => 'required|trim'
        ),
    ),

    'EditSize' => array(
        array(
            'field' => 'size_type',
            'label' => 'Size Type',
            'rules' => 'required|trim'
        ),

        array(
            'field' => 'size_name',
            'label' => 'Size Name',
            'rules' => 'required|trim'
        ),

    ),

    'editvendor' => array(
        array(
            'field' => 'name',
            'label' => 'Owner Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),
        array(
            'field' => 'shopname',
            'label' => 'Shop Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'gstno',
            'label' => 'GSTIN No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'pickupname',
            'label' => 'Pickup Authority Person Name.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'state',
            'label' => 'Pickup State',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'Pickup City',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'pincode',
            'label' => 'Pickup Area Pincode',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'address',
            'label' => 'Pickup Address',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'acholder',
            'label' => 'Account Holder',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'accountno',
            'label' => 'Account No.',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'ifsc',
            'label' => 'IFSC Code',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'branch',
            'label' => 'Branch',
            'rules' => 'required|trim'
        ),

    ),



    'Users' => array(
        array(
            'field' => 'name',
            'label' => 'User Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[tbl_user.email]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),

    ),

    'edituser' => array(
        array(
            'field' => 'name',
            'label' => 'User Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),

    ),

    'Expert' => array(
        array(
            'field' => 'name',
            'label' => 'Expert Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[fashion_expert.email]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),

    ),



    'editexpert' => array(
        array(
            'field' => 'name',
            'label' => 'Expert Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|min_length[6]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),

    ),

    'EditPurchaseSeller' => array(
        array(
            'field' => 'name',
            'label' => 'Seller Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'address',
            'label' => 'Password',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No.',
            'rules' => 'required|trim|min_length[10]|max_length[10]'
        ),

    ),

    'contactus' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'msg',
            'label' => 'Message',
            'rules' => 'required|trim'
        ),

    ),


    'Product' => array(
        array(
            'field' => 'name',
            'label' => 'Product Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'title',
            'label' => 'Product Title',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'purchase_price',
            'label' => 'Product Purchase',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'mrp',
            'label' => 'Product Mrp',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'base_price',
            'label' => 'Base Price',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'margin',
            'label' => 'Discount',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'cgst',
            'label' => 'Product CGST',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'sgst',
            'label' => 'Product SGST',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'gst',
            'label' => 'Product GST',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'expected_profit',
            'label' => 'Expected Profit',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'min_sell_price',
            'label' => 'Minimum Selling Price',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'reg_sell_price',
            'label' => 'Minimum Selling Price',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'hsn',
            'label' => 'HSN No.',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'unit',
            'label' => 'Product Unit',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'weight',
            'label' => 'Product Weight',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'category',
            'label' => 'Product Category',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'subcategory',
            'label' => 'Product Sub-Category',
            'rules' => 'required|trim'
        ),
        // array(
        //     'field' => 'brand',
        //     'label' => 'Product Brand',
        //     'rules' => 'required|trim'
        // ),
        // array(
        //     'field' => 'subbrand',
        //     'label' => 'Product Sub-Brand',
        //     'rules' => 'trim'
        // ),
        // array(
        //     'field' => 'avaliablity',
        //     'label' => 'Product Availaibility',
        //     'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'stock',
        // 'label' => 'Stock Quantity',
        // 'rules' => 'required|trim'
        // ),
        // array(
        // 'field' => 'maxqty',
        // 'label' => 'Maximum Quantity',
        // 'rules' => 'required|trim'
        // ),
        array(
            'field' => 'shortdescription',
            'label' => 'Short Description',
            'rules' => 'required|trim'
        ),
        // array(
        //     'field' => 'producttags',
        //     'label' => 'Product Tags',
        //     'rules' => 'required|trim'
        // ),
        array(
            'field' => 'longdescription',
            'label' => 'Long Description',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'prebook_avl',
            'label' => 'Prebooking Availaibility',
            'rules' => 'required|trim'
        ),

    ),


    'Notification' => array(
        array(
            'field' => 'title',
            'label' => 'Notification Title',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required|trim'
        )
    ),

    'Delivery Charge' => array(
        array(
            'field' => 'pincode',
            'label' => 'Pincode',
            'rules' => 'required|trim|numeric|is_unique[delivery_charge.pincode]|max_length[6]|min_length[6]'
        ),
        array(
            'field' => 'charge',
            'label' => 'Delivery Charge',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required|trim'
        )
    ),


    //Home-Website
    'Support' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|min_length[10]|max_length[10]|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email Address',
            'rules' => 'required|valid_email',
        ),
        array(
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'message',
            'label' => 'Message',
            'rules' => 'required|trim'
        )
    ),

    'otpVerification' => array(
        array(
            'field' => 'otp',
            'label' => 'OTP',
            'rules' => 'required|trim|min_length[4]|max_length[4]'
        )
    ),


    //Apis

    'userLogin' => array(
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim'
        )
    ),
    'ForgotPassword' => array(
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|trim'
        )
    ),
    'ForgotOTPVerification' => array(
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'otp',
            'label' => 'OTP',
            'rules' => 'required|trim'
        )
    ),
    'ResetPassword' => array(
        array(
            'field' => 'mobile',
            'label' => 'Mobile No',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'npass',
            'label' => 'New Password',
            'rules' => 'required|trim|min_length[6]'
        ),
        array(
            'field' => 'cpass',
            'label' => 'Confirm Password',
            'rules' => 'required|trim|min_length[6]'
        )
    ),
    'Logout' => array(
        array(
            'field' => 'user_id',
            'label' => 'User ID',
            'rules' => 'required|trim'
        )
    ),
    'Component' => array(
        // array(
        //     'field' => 'type',
        //     'label' => 'Type',
        //     'rules' => 'required|trim'
        // ),
        // array(
        //     'field' => 'title',
        //     'label' => 'Title',
        //     'rules' => 'required|trim'
        // ), 
        array(
            'field' => 'image_title',
            'label' => 'Image Title',
            'rules' => 'required|trim'
        ), array(
            'field' => 'image_alt',
            'label' => 'Image Alt',
            'rules' => 'required|trim'
        ),
        // array(
        //     'field' => 'description',
        //     'label' => 'Description',
        //     'rules' => 'required|trim'
        // ),
        array(
            'field' => 'component_cat_id',
            'label' => 'Component Id',
            'rules' => 'required|trim'
        ),

    ),
    'ComponentItem' => array(
        array(
            'field' => 'ids[]',
            'label' => 'Products',
            'rules' => 'required|trim'
        ), array(
            'field' => 'start_date',
            'label' => 'Start Datetime',
            'rules' => 'required|trim'
        ), array(
            'field' => 'end_date',
            'label' => 'End Datetime',
            'rules' => 'required|trim'
        ), 
        // array(
        //     'field' => 'page_id',
        //     'label' => 'Component Id',
        //     'rules' => 'required|trim'
        // ), 
        // array(
        //     'field' => 'component_cat_id',
        //     'label' => 'Component Category Id',
        //     'rules' => 'required|trim'
        // )

    ),
    'ComponentCategory' => array(
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required|trim'
        ), array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required|trim'
        )
    ),
);
