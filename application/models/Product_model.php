<?php

use Algolia\AlgoliaSearch\SearchClient;


class Product_model extends CI_Model
{
    protected $algolia, $index, $search_index, $apiKey = "K4UCSTA5PW", $appId = "5d3389f78b1ae8f73a1377b48e519820";


    public function __construct()
    {
        try {
            // Create Algolia client
            $this->algolia = SearchClient::create("K4UCSTA5PW", "31040d1121a629a4637171f5c5e6a560");

            // Initialize indexes
            $this->index = $this->algolia->initIndex('products');
            $this->search_index = $this->algolia->initIndex('search_keyword');

            // Ensure the indexes are correctly initialized
            if (!$this->index || !$this->search_index) {
                throw new Exception("Failed to initialize indexes");
            }

            // Configure indexes
            $this->createAndConfigureIndex();
        } catch (Exception $e) {
            // Handle and log the error
            error_log("Error initializing Algolia indexes: " . $e->getMessage());
            echo "Error initializing search functionality. Please try again later.";
        }
    }

    public function createAndConfigureIndex()
    {
        $attributesForFaceting = ['Categories', 'Subcategories'];
        $attrData = getDataOrderByID('tbl_attribute', ['is_status' => 'true', 'attribute_type' => 'product_attr']);
        foreach ($attrData as $adata) {
            array_push($attributesForFaceting, $adata['attribute']);
        }
        $settings = [
            'searchableAttributes' => ['product_code', 'hsn', 'barcode', 'skuid', 'Categories', 'Subcategories', 'name', 'title', 'short_desc', 'long_desc'],
            'customRanking' => ['desc(id)'],
            'attributesForFaceting' => $attributesForFaceting,
        ];

        try {
            $this->index->setSettings($settings);
        } catch (\Algolia\AlgoliaSearch\Exceptions\AlgoliaException $e) {
            log_message('error', 'Algolia Index creation/configuration error: ' . $e->getMessage());
        }
    }

    public function createGlobleSearchKeyword()
    {
        $searchKeyword = getDataOrderByID('tbl_global_search_keyword', ['status' => 'true']);
        try {
            foreach ($searchKeyword as &$data) {
                $data['objectID'] = $data['id'];
            }
            $this->search_index->saveObjects($searchKeyword);
        } catch (\Algolia\AlgoliaSearch\Exceptions\AlgoliaException $e) {
            log_message('error', 'Algolia Index creation/configuration error: ' . $e->getMessage());
        }
    }

    public function inserData($table, $insertData)
    {
        $query = $this->db->insert($table, $insertData);

        if ($query) {
            if ($table == 'products') {
                Product_model::saveProductToAlgolia($this->db->insert_id());
            }

            return true;
        } else {
            return false;
        }
    }

    public function inserBatchData($table, $insertData)
    {
        $query = $this->db->insert_batch($table, $insertData);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateData($table, $insertData, $condition)
    {
        $query = $this->db->where($condition)->update($table, $insertData);
        if ($query) {
            if ($table == 'products') {
                Product_model::saveProductToAlgolia($condition['id'], true);
            }
            return true;
        } else {
            return false;
        }
    }


    public function deleteData($table, $condition)
    {
        $query = $this->db->where($condition)->delete($table);
        if ($query) {
            if (isset($condition['id']) && $table == 'products') {
                Product_model::deleteProductFromAlgolia($condition['id']);
            }
            return true;
        } else {
            return false;
        }
    }

    public function getData($table, $condition = [], $id = '', $limit = '', $select = '', $asc = '')
    {

        if (!empty($select)) {
            $this->db->select($select);
        }
        $this->db->from($table);

        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('id', 'ASC');
        } else {
            $this->db->order_by('id', 'DESC');
        }

        if (!empty($limit)) {
            $this->db->limit($limit, 0);
        }

        $query = $this->db->get();

        if (!empty($id)) {
            $data = $query->row();
        } else {
            $data = $query->result();
        }


        return $data;
    }


    public function getSubcategory($condition = [], $id = '', $limit = '', $asc = '')
    {

        $this->db->select('sub_category.*,tbl_category_tags.tag_name,tbl_size.size_type,tbl_size.size_name,tbl_size.size_chart,tbl_size.image');
        $this->db->join('tbl_category_tags', 'tbl_category_tags.id=sub_category.cat_tag_id', 'left', function ($join) {
            $join->on('tbl_category_tags.id=sub_category.cat_tag_id', 'inner');
        });
        $this->db->join('tbl_size', 'tbl_size.id=sub_category.size_id', 'left', function ($join) {
            $join->on('tbl_size.id=sub_category.size_id');
        });


        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('sub_category.position', 'ASC');
        } else {
            $this->db->order_by('sub_category.position', 'DESC');
        }

        if (!empty($limit)) {
            $this->db->limit($limit, 0);
        }

        $query = $this->db->get('sub_category');

        if (!empty($id)) {
            $data = $query->row();
        } else {
            $data = $query->result();
        }


        return $data;
    }

    public static function getCategoryName($id)
    {
        $CI = &get_instance();
        $query = $CI->db->get_where('categories', ['id' => $id])->row();
        
        return ucwords($query ? $query->name :'');
    }

    public static function getSubCategoryName($id)
    {
        $CI = &get_instance();
        $query = $CI->db->get_where('sub_category', ['id' => $id])->row();
        // var_dump($query);
        return ucwords($query ? $query->name :'');
    }

    protected function saveProductToAlgolia($id, $delete = false)
    {
        $product = $this->db->get_where('products', ['id' => $id])->row_array();
        if (!empty($product)) {
            if (!empty($id) && $delete) {
                $this->index->deleteObject($id);
            }
            $start_price = $product['reg_sell_price'] - ($product['reg_sell_price'] % 50);
            $end_price = $start_price + 50;
            $price_range = $start_price . ' - ' . $end_price;

            $product['objectID'] = $id;
            $product['Categories'] = Product_model::getCategoryName($product['category']);
            $product['Subcategories'] = Product_model::getSubCategoryName($product['sub_category']);
            $product['Subcategories'] = Product_model::getSubCategoryName($product['sub_category']);
            $product['price_range'] = $price_range;
            $product['url'] = base_url('product/' . str_replace(" ", "_", $product['title']));
            $product_img = explode(",", $product['image1']);
            $product['image'] = base_url('uploads/products/' . $product_img[0]);

            if (!empty($product['product_details'])) {
                $product_details = explode(",", $product['product_details']);
                foreach ($product_details as $each) {
                    $productAttr = explode(":", $each);
                    $key = $productAttr[0];
                    $value = $productAttr[1];

                    if (isset($product[$key])) {
                        $product[$key][] = $value;
                    } else {
                        $product[$key] = [$value];
                    }
                }
            }
            if (!empty($product['expert_advice'])) {
                $expert_advice = explode(",", $product['expert_advice']);
                foreach ($expert_advice as $each) {
                    $expertAttr = explode(":", $each);
                    $key = $expertAttr[0];
                    $value = $expertAttr[1];

                    if (isset($product[$key])) {
                        $product[$key][] = $value;
                    } else {
                        $product[$key] = [$value];
                    }
                }
            }

            $this->index->saveObject($product);
        }
    }

    public function deleteProductFromAlgolia($id)
    {

        $this->index->deleteObject($id);
    }


    public function UpdateProductStatus($data)
    {
        $result = $this->db->where($data['where_column'], $data['where_value'])->update($data['table'], [$data['column'] => $data['value']]);
        if ($result) {
            if ($data['table'] == 'products') {
                if ($data['value']) {
                    $product_data = $this->db->get_where('products', [$data['column'] => $data['value']])->row_array();
                    $this->Product_model->saveProductToAlgolia($data['where_value']);
                } else {
                    Product_model::deleteProductFromAlgolia($data['where_value']);
                }
            }
            return true;
        } else {
            return false;
        }
    }
}
