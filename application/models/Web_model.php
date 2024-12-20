<?php


class Web_model extends CI_Model
{

    public function __construct()
    {
    }

    public static function getWelcomeStoreProducts()
    {
        $today = date('Y-m-d');
        $table = 'products';
        $condition = [
            'is_status' => 'true'
        ];
        return $coupon_product = Web_model::get_where($table, $condition);
    }

    public static function getValidCoupons()
    {
        $today = date('Y-m-d');
        $table = 'tbl_coupon';
        $condition = [
            'product_type' => ['individual', 'all'],
            'coupon_type' => 'Discount on minimum purchase',
            'complementry_type' => 'coupon',
            'start_date <=' => $today,
            'end_date >=' => $today,
            'is_status' => 'true'
        ];
        return $coupon_product = Web_model::get_where($table, $condition);
    }

    public static function get_where($table, $condition)
    {
        $CI = &get_instance();
        $coupon_product = $CI->db->select('*');
        foreach ($condition as $key => $value) {
            is_array($value) ? $CI->db->where_in($key, $value) : $CI->db->where($key, $value);
        }
        return $CI->db->get($table)->result();
    }

    public function getSlider($condition = [])
    {
        $this->db->select('*');
        $this->db->from('slider');
        if (!empty($condition)) {
            $this->db->where($condition);
        }
        $this->db->group_start();
        $this->db->where('start_date', '0000-00-00 00:00:00');
        $this->db->or_where('start_date <=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $this->db->group_end();
        $this->db->group_start();
        $this->db->where('end_date', '0000-00-00 00:00:00');
        $this->db->or_where('end_date >=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $this->db->group_end();
        $this->db->order_by('position', 'ASC');
        $query = $this->db->get();

        $result = $query->result_array();
        // var_dump($this->db->last_query());die();
        return $result;
    }

    public static function getCmpCategoryProduct($condition = [], $limit = '', $asc = '')
    {
        $CI = &get_instance();
        $CI->db->select('products.*,tbl_component_item.item_id,tbl_component_item.end_date,tbl_component_item.start_date,tbl_component_item.id as hp_cid');
        $CI->db->from('tbl_component_item');
        $CI->db->join('products', 'products.id=tbl_component_item.item_id', 'inner');
        $CI->db->where(['products.is_status' => 'true']);
        if (!empty($condition)) {
            $CI->db->where($condition);
        }
        $CI->db->group_start();
        $CI->db->where('tbl_component_item.start_date', '0000-00-00 00:00:00');
        $CI->db->or_where('tbl_component_item.start_date <=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $CI->db->group_end();
        $CI->db->group_start();
        $CI->db->where('tbl_component_item.end_date', '0000-00-00 00:00:00');
        $CI->db->or_where('tbl_component_item.end_date >=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $CI->db->group_end();
        if (!empty($asc)) {
            $CI->db->order_by('tbl_component_item.position', 'ASC');
        } else {
            $CI->db->order_by('tbl_component_item.position', 'DESC');
        }

        if (!empty($limit)) {
            $CI->db->limit($limit, 0);
        }

        $query = $CI->db->get();


        $data = $query->result();
        // var_dump($CI->db->last_query());die();
        foreach ($data as &$d) {
            $d->front_view_image = $d->front_view_image ? base_url('uploads/product/' . $d->front_view_image) : '';
        }
        return $data;
    }

    public static function getComponentProduct($condition = [], $limit = '', $asc = '')
    {
        $CI = &get_instance();
        $CI->db->select('tbl_component.*');
        $CI->db->from('tbl_component');
        if (!empty($condition)) {
            $CI->db->where($condition);
        }
        $CI->db->group_start();
        $CI->db->where('tbl_component.start_date', '0000-00-00 00:00:00');
        $CI->db->or_where('tbl_component.start_date <=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $CI->db->group_end();
        $CI->db->group_start();
        $CI->db->where('tbl_component.end_date', '0000-00-00 00:00:00');
        $CI->db->or_where('tbl_component.end_date >=', date('Y-m-d H:i:s'));  // Compare with current datetime
        $CI->db->group_end();
        if (!empty($asc)) {
            $CI->db->order_by('tbl_component.position', 'ASC');
        } else {
            $CI->db->order_by('tbl_component.position', 'DESC');
        }

        if (!empty($limit)) {
            $CI->db->limit($limit, 0);
        }

        $query = $CI->db->get();


        $data = $query->result();
        // var_dump($data);die();
        $allData = [];
        foreach ($data as &$d) {
            $d->image = $d->image ? base_url('uploads/component/' . $d->image) : '';
            $CI->db->where('tbl_component_item.start_date <=', date('Y-m-d H:i:s'));
            $CI->db->where('tbl_component_item.end_date >=', date('Y-m-d H:i:s'));
            $CI->db->where('tbl_component_item.is_status', 'true');
            $CI->db->where('tbl_component_item.page_id', $d->id);
            $query2 = $CI->db->get('tbl_component_item');
            // var_dump($CI->db->last_query());die();
            if ($query2->num_rows() > 0) {

                array_push($allData, $d);
            }
        }
        // return $allData;
        return $data;
    }

    public function getComponents()
    {
        $data = getDataById('tbl_component_category', ['is_status' => 'true'], '', '', '', 'ASC');
        // var_dump($data);
        foreach ($data as $d) {
            // echo $d->type;
            if ($d->type == 'category') {
                $d->items = $this->getComponentProduct(['tbl_component.is_status' => 'true', 'tbl_component.component_cat_id' => $d->id]);
            } else {
                $d->items = $this->getCmpCategoryProduct(['tbl_component_item.is_status' => 'true', 'tbl_component_item.component_cat_id' => $d->id]);
            }
        }

        return $data;
    }

    public function getOfferHtml($data)
    {

        if (!empty($data)) {
            $html = '<div class="box-25">
                <section class="offerSection_startHere">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center ">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2>';
            $html .= $data->title;
            $html .= '</h2>
                                    </div>
                                    <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                        <p>';
            $html .= $data->description;
            $html .= '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner__area-2 ">
                        <div class="container-fluid">
                            <div class="contain">
                                <div id="offer_owl" class="owl-carousel owl-theme">';

            foreach ($data->items as $items) {
                $html .= '<div class="item">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="';
                $html .= $items->image;
                $html .= '" alt="banner"></a>
                                        </div>
                                    </div>
                                </div>';
            }

            $html .= '         </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>';


            if (count($data->items) > 0) {
                return $html;
            } else {
                return '';
            }
        }
    }


    public function getWelcomeStoreHtml($data)
    {
        if (!empty($data)) {
            $html = ' <section class="welcome_startingSection blog__area ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-40">
                                    <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                        <h2>' . $data->title . '</h2>
                                    </div>
                                    <div class="section__sub-title  wow fadeInDown" data-wow-duration="2s">
                                        <p>' . $data->description . '/p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid pb-30">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="welcome__slider owl-carousel">';

            foreach ($data->items as $items) {

                $html .= '  <div class="blog__item">
                                            <div class="blog__thumb fix ">
                                                <a href="#" class="w-img"><img class="image-placeholder" src="' . $items->image . '" alt="' . $items->image_alt . '" title="' . $items->image_title . '"></a>
                                            </div>
                                            <div class="blog__content">
                                                <h4><a href="#">' . $items->title . '</a></h4>
                                                <div class="blog__meta ">
                                                    <span>' . $items->offer_title . '</span>
                                                </div>
                                            </div>
                                        </div>';
            }
            $html .= '</div>
                            </div>
                        </div>
                    </div>
                </section>';
            if (count($data->items) > 0) {
                return $html;
            } else {
                return $html;
            }
        }
    }

    public function getNewCoreHtml($data)
    {
        // var_dump($data->items);die();
        if (!empty($data)) {
            // var_dump(count($data->items));die();
            $html = '<section class="product__area comboProductArea pt-30 pb-50" id="view_Third_popup">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title-wrapper text-center mb-55">
                            <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                <h2>' . $data->title . ' </h2>
                            </div>
                            <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                <p>' . $data->description . '
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid combo_section_Desktopview">
                <div class="product__banner p-relative">
                    <div class="product__banner-inner p-absolute fix d-none d-lg-block">
                        <div class="product__banner-img large-image">
                            <a href="#"><img src="' . $data->items[0]->front_view_image . '" id="mainImage" alt="' . $data->items[0]->name . '"></a>
                        </div>
                    </div>';

            if (count($data->items) > 1) {
                $html .= '<div class="row">
                        <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 ">
                            <div class="product__slider-2 owl-carousel" id="comboProducts">';

                // foreach ($data->items as $items) {


                $html .= '
                                <div class="product__item ">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#" class="w-img">
                                                <img src="' . $data->items[1]->front_view_image . '" alt="product-img">
                                                <img class="product__thumb-2" src="' . $data->items[1]->front_view_image . '" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <h4><a href="#"> ' . $data->items[1]->name . '</a>
                                                    <br>
                                                    ₹ ' . $data->items[1]->reg_sell_price . ' Regular price
                                                </h4>
                                                <span></span> &nbsp;
                                                <span class="old-price">₹ ' . $data->items[1]->mrp . ' </span>';

                if ($data->items[1]->discount > 0) {
                    $html .= '<span>Sale price <span class="text-success">(' . $data->items[1]->discount . '% Off)</span></span>';
                }
                $html .= ' <div class="product__price transition-3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                if (count($data->items) > 2) {
                    $html .= '
                                    <div class="product__item ">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="#" class="w-img">
                                                    <img src="' . $data->items[2]->front_view_image . '" alt="product-img">
                                                    <img class="product__thumb-2" src="' . $data->items[2]->front_view_image . '" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="#"> ' . $data->items[2]->name . '</a>
                                                        <br>
                                                        ₹ ' . $data->items[2]->reg_sell_price . ' Regular price
                                                    </h4>
                                                    <span></span> &nbsp;
                                                    <span class="old-price">₹ ' . $data->items[2]->mrp . ' </span>';

                    if ($data->items[2]->discount > 0) {
                        $html .= '<span>Sale price <span class="text-success">(' . $data->items[2]->discount . '% Off)</span></span>';
                    }
                    $html .= ' <div class="product__price transition-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                }

                // }
                $html .= ' </div>
                        </div>
                    </div>
                    <br><br>';
            }
            if (count($data->items) > 3) {
                $html .= '
                    <div class="row">
                        <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                            <div class="thumbnails owl-carousel" id="combo_slider">';
                foreach ($data->items as $index => $items) {
                    if ($index < 3)
                        continue;

                    if ($index > 5)
                        break;

                    $html .= '

                                <div class="product__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <img src="' . $items->front_view_image . '" class="thumb" alt="' . $items->name . '">
                                        </div>
                                    </div>
                                </div>';
                }
                $html .= '

                            </div>
                        </div>
                    </div>';
            }
            $html .= '
                </div>
            </div>


            <div class="container-fluid combo_section_Mobileview">
                <div class="product__banner p-relative">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="comboProductsMobile owl-carousel">
                            ';
            foreach ($data->items as $items) {

                $html .= '
                                <div class="item">
                                    <div class="row ">
                                        <div class="col-md-7 col-7 pr-0 combo_show_designs">
                                            <div class="product__wrapper ">
                                                <div class="product__thumb">
                                                    <a href="#" class="w-img">
                                                        <img src="' . $items->front_view_image . '" class="h-100" alt="' . $items->name . '">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-5 combo_parts_img">
                                            <div class="product__wrapper">
                                                <div class="product__thumb mb-40">
                                                    <a href="#" class="w-img">
                                                        <img src="' . $items->front_view_image . '" alt="' . $items->name . '">
                                                    </a>
                                                </div>
                                                <div class="product__content p-relative mb-10">
                                                    <div class="product__content-inner">
                                                        <h4><a href="#"> ' . $items->name . '</a></h4>
                                                        <span class="old-price">₹ ' . $items->reg_sell_price . ' </span><span>Sale price <span class="text-success">(60% Off)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper">
                                                <div class="product__thumb">
                                                    <a href="#" class="w-img">
                                                        <img src="' . $items->front_view_image . '" alt="' . $items->name . '">
                                                    </a>
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="#">' . $items->name . '</a></h4>
                                                        <span class="old-price">₹ ' . $items->reg_sell_price . ' </span>';

                if ($items->discount > 0) {
                    $html .= '<span>Sale price <span class="text-success">(60% Off)</span>';
                }
                $html .= ' </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
            }

            $html .= ' </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>';
            if (count($data->items) > 1) {
                return $html;
            } else {
                return '';
            }
        }
    }

    public function getLatestCollectionHtml($data)
    {
        // var_dump(count($data->items));die();
        if (!empty($data)) {
            $html = ' <section class="sale__area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>' . $data->title . ' </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>' . $data->description . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sale__area-slider-2 owl-carousel latest_collection">';
            foreach ($data->items as $items) {
                $html .= ' <div class="sale__item">
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="#l" class="w-img">
                                                <img class="image-placeholder" src="' . $items->front_view_image . '" alt="' . $items->name . '">
                                            </a>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <span class="text-muted">' . $items->name . '</span>
                                                <h4><a href="#">' . $items->title . ' </a></h4>
                                                <span class="mb-4">₹' . $items->reg_sell_price . '</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>';
            }
            $html .= '</div>
                        </div>
                    </div>
                </div>
            </section>';
            return $html;
        }
    }

    public function getOfferSliderHtml($data)
    {
        // var_dump($data);die();
        if (!empty($data)) {
            $html = '  <section class="offerSection_startHere SaleBannerSectionhere">
            <div class="banner__area-2 ">
            <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>' . $data->title . ' </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>' . $data->description . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-lg-12  mx-0 px-0">
                            <div id="sellerBanner_owl" class="owl-carousel owl-theme">';
            foreach ($data->items as $items) {
                $html .= '<a href="' . $items->url . '">
                                <div class="item">
                                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                        <div class="banner__thumb fix">
                                            <a href="#" class="w-img"><img src="' . $items->image . '" alt="' . $items->image_alt . '" title="' . $items->image_title . '"></a>
                                        </div>
                                    </div>
                                </div></a>';
            }
            $html .= '
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>';
            if (count($data->items) > 0) {
                return $html;
            } else {
                return '';
            }
        }
    }

    public function getNewSlickPatternHtml($data)
    {
        // var_dump($data);die();
        if (!empty($data)) {
            $html = '  <section class="pro-content pro-tab-content ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>' . $data->title . '</h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>' . $data->description . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="products-area desktop_view_newONSlickPattern">
                        <!-- desktop view -->
                        <div class="row prebook-row newOnSlick-col weekend_style">';
            foreach ($data->items as $items) {
                $html .= '
                            <div class="col-12 col-md-4">
                                <figure class="newOn_sp">
                                    <img src="' . $items->image . '" alt="' . $items->image_alt . '" title="' . $items->image_title . '" class="img-fluid">
                                    <figcaption class="story-hero__cta">
                                        <h3 class="mb-2">' . $items->title . '</h3>
                                        <a href="' . $items->url . '" class="os-btn os-btn-2" target="_blank">Shop Now</a>
                                    </figcaption>
                                </figure>
                            </div>';
            }

            $html .= ' </div>
                    </div>
                    <!-- __mobile_viewSection__ -->

                    <div class="row mobileViewNEWOnSlickPattern">
                        <div class="col-xl-12">
                            <div class=" pre_order_slider  owl-carousel">
                            ';
            foreach ($data->items as $items) {
                $html .= '
                                <div class="blog__item ">
                                    <figure class="newOn_sp">
                                        <img src="' . $items->image . '" alt="' . $items->image_alt . '" title="' . $items->image_title . '" class="img-fluid">
                                        <figcaption class="story-hero__cta">
                                            <h3 class="mb-2">' . $items->title . '</h3>
                                            <a href="' . $items->url . '" class="os-btn os-btn-2" target="_blank">Shop Now</a>
                                        </figcaption>
                                    </figure>
                                </div>';
            }
            $html .= '
                            </div>
                        </div>
                    </div>
                </div>
            </section>';

            if (count($data->items) > 0) {
                return $html;
            } else {
                return '';
            }
        }
    }
    
    public function getAboutUsHtml($data)
    {
        // var_dump($data);die();
        if (!empty($data)) {
            $imgurl=base_url("uploads/component/".$data->bg_image);
            $html = ' 
            
                <section class="banner_one_section pb-40 ">
            <div class="show_banner_two banner__area-2" style="background-image: url('.$imgurl .')">
                <div class="onLayer  pb-30">
                    <div class="container-fluid  px-0 m-0">
                        <dirv class="row px-0 m-0">
                            <div class="col-lg-12 text-center pt-4 px-0">
                                <div class="content_here">
                                    <div class="position-absolute sf-hero__content pt-lg-5">
                                        <span class=" text-white sf-hero__subtitle">' . $data->title . '</span><br><br>
                                        <h2 class="sf-hero__title text-white">' . $data->heading . '</h2>
                                        <div class="sf-hero__text ">
                                            <span class="text-white lh-md">' . $data->description . '</span>
                                        </div><br><br>
                                        <a href="' . $data->url . '" class="os-btn os-btn-2" target="_blank">Learn More</span></a>
                                    </div>
                                </div>
                        </dirv>
                    </div>
                </div>
            </div>
        </section>';
            
                return $html;
        }
    }
    
    public function getOurCombosHtml($data)
    {
        // var_dump($data);die();
        if (!empty($data)) {
            $html = ' 
              <section class="sale__area pb-30 pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-40">
                                <div class="section__title wow fadeInDown" data-wow-duration="1s">
                                    <h2>' . $data->title . ' </h2>
                                </div>
                                <div class="section__sub-title wow fadeInDown" data-wow-duration="2s">
                                    <p>' . $data->description . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="combos__slider add_combo_imgcss owl-carousel">';
            foreach ($data->items as $items) {
                $html .= '
                                <div class="blog__item mb-30">
                                    <div class="blog__thumb fix">
                                        <a href="#" class="w-img"><img src="' . $items->image . '"  alt="' . $items->image_alt . '" title="' . $items->image_title . '"></a>
                                    </div>
                                    <div class="overlay_add">
                                        <div class="lastText">
                                            <p>' . $items->title . '</p>
                                        </div>
                                    </div>
                                </div>';
            }

            $html .= '
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>';
            

            if (count($data->items) > 0) {
                return $html;
            } else {
                return '';
            }
        }
    }
    
}
