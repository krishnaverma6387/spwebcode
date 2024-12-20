<?php
class Auth_model extends CI_Model
{
    public function getRole($role_id)
    {
        $query = $this->db->where(['id' => $role_id])
            ->get('roles');
        if ($query->num_rows()) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }
    public function isValid($table, $id)
    {
        $query = $this->db->where(['id' => $id, 'is_status' => 'true', 'is_verified' => 'true'])
            ->get($table);
        if ($query->num_rows()) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }
    public function isValidVendor($table, $id)
    {
        $query = $this->db->where(['id' => $id, 'is_status' => 'true'])
            ->get($table);
        if ($query->num_rows()) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }

    public function logout($table, $id)
    {
        $query = $this->db->where(['id' => $id])->update($table, ['logout_at' => $this->data->timestamp, 'is_login' => 'false']);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getYoutubeLinkData($link)
    {
        $baseUrl = 'https://www.youtube.com/';
        $baseEmbedUrl = 'https://www.youtube.com/embed/';
        $baseWatchUrl = 'https://www.youtube.com/watch';
        $baseVideoUrl = 'https://youtu';

        $embedLinkArr = explode('embed/', $link);
        $watchLinkArr = explode('?v=', $link);
        $videoLinkArr = explode('.be/', $link);

        if ($baseWatchUrl == $watchLinkArr[0]) {
            $youtube_id = end($watchLinkArr);
        } else if ($baseVideoUrl == $videoLinkArr[0]) {
            $youtube_id = end($videoLinkArr);
        } else if ($baseUrl == $embedLinkArr[0]) {
            $youtube_id = end($embedLinkArr);
        } else {
            $youtube_id = 0;
        }

        $embedUrl = $baseEmbedUrl . $youtube_id;
        $watchUrl = $baseWatchUrl . '?v=' . $youtube_id;
        $videoUrl = $baseVideoUrl . '.be/' . $youtube_id;
        $thumbnailUrl = 'https://img.youtube.com/vi/' . $youtube_id . '/sddefault.jpg';

        $response = (object) ['baseUrl' => $baseUrl, 'id' => $youtube_id, 'embedUrl' => $embedUrl, 'watchUrl' => $watchUrl, 'videoUrl' => $videoUrl, 'thumbnailUrl' => $thumbnailUrl];
        return $response;
    }





    public function getRowDesc($table, $whereData, $orderBy)
    {
        $query = $this->db->where($whereData)->order_by($orderBy, 'DESC')->get($table);
        if ($query) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }
    public function getRowAsc($table, $whereData, $orderBy)
    {
        $query = $this->db->where($whereData)->order_by($orderBy, 'ASC')->get($table);
        if ($query) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }

    public function getResultDesc($table, $whereData, $orderBy)
    {
        $query = $this->db->where($whereData)->order_by($orderBy, 'DESC')->get($table);
        if ($query) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    public function getSubcategory()
    {
        $data = getData('categories', [], '', '', '', 'asc');
        foreach ($data as &$d) {
            $d['icon'] = $d['icon'] ? base_url('uploads/category/') . $d['icon'] : '';
            // $subcategories = getData('sub_category', ['category_id' => $d['id']], '', '', '', 'asc');
            $subcategories = $this->db->select('sub_category.*,tbl_category_tags.tag_name,tbl_size.size_type,tbl_size.size_name,tbl_size.size_chart,tbl_size.image')->join('tbl_category_tags', 'tbl_category_tags.id=sub_category.cat_tag_id', 'left')->join('tbl_size', 'tbl_size.id=sub_category.size_id', 'left')->where(['category_id' => $d['id']])->order_by('sub_category.position', 'asc')->get('sub_category')->result_array();
            $d['subcategories'] = $subcategories;
        }
        return $data;
    }


    public function getCoSubcategory()
    {
        $data = $this->getSubcategory();
        foreach ($data as &$d) {
            foreach ($d['subcategories'] as &$sub) {
                $sub['cosubcategories'] = getData('co_subcategory', ['category_id' => $d['id'], 'subcategory_id' => $sub['id']], '', '', '', 'asc');
            }
        }
        return $data;
    }


    public function getCategoryTags()
    {
        $data = getData('categories', [], '', '', '', 'asc');
        foreach ($data as &$d) {
            $categorytags = getData('tbl_category_tags', ['cat_id' => $d['id']], '', '', '', 'asc');
            $d['categorytags'] = $categorytags;
        }
        return $data;
    }

    public function getComponentProduct($condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('products.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id,tbl_component_item.start_date,tbl_component_item.end_date,tbl_component_item.is_status as hp_is_status,categories.name as category_name,sub_category.name as sub_category_name');
        $this->db->from('tbl_component_item');
        $this->db->join('products', 'products.id=tbl_component_item.item_id', 'inner');
        $this->db->join('categories', 'categories.id=products.category', 'inner');
        $this->db->join('sub_category', 'sub_category.id=products.sub_category', 'inner');
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.position', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.position', 'DESC');
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

    public function getComponentCategory($condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('categories.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id');
        $this->db->from('tbl_component_item');
        $this->db->join('categories', 'categories.id=tbl_component_item.item_id', 'inner');

        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.id', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.id', 'DESC');
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


    public function getComponentSubcategory($condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('sub_category.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id,categories.name as category_name');
        $this->db->from('tbl_component_item');
        $this->db->join('sub_category', 'sub_category.id=products.sub_category', 'inner');
        $this->db->join('categories', 'categories.id=sub_category.category_id', 'inner');
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.id', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.id', 'DESC');
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
    
    public function searchProduct($item_id,$condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('products.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id,categories.name as category_name,sub_category.name as sub_category_name');
        $this->db->from('products');
        $this->db->join('tbl_component_item', 'products.id=tbl_component_item.item_id AND tbl_component_item.page_id = '.$item_id, 'left');
        $this->db->join('categories', 'categories.id=products.category', 'inner');
        $this->db->join('sub_category', 'sub_category.id=products.sub_category', 'inner');
        $this->db->where('tbl_component_item.id', NULL);
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.id', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.id', 'DESC');
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
        // var_dump($this->db->last_query());die();
        return $data;
    }
    
    
    public function searchCProduct($item_id,$condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('products.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id,categories.name as category_name,sub_category.name as sub_category_name');
        $this->db->from('products');
        $this->db->join('tbl_component_item', 'products.id=tbl_component_item.item_id AND tbl_component_item.component_cat_id = '.$item_id, 'left');
        $this->db->join('categories', 'categories.id=products.category', 'inner');
        $this->db->join('sub_category', 'sub_category.id=products.sub_category', 'inner');
        $this->db->where('tbl_component_item.id', NULL);
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.id', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.id', 'DESC');
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
        // var_dump($this->db->last_query());die();
        return $data;
    }
    
    public function getComponentCProduct($condition = [], $id = '', $limit = '', $asc = '')
    {
        $this->db->select('products.*,tbl_component_item.id as hp_item_id,tbl_component_item.page_id,tbl_component_item.item_id,tbl_component_item.start_date,tbl_component_item.end_date,tbl_component_item.is_status as hp_is_status,categories.name as category_name,sub_category.name as sub_category_name');
        $this->db->from('tbl_component_item');
        $this->db->join('products', 'products.id=tbl_component_item.item_id', 'inner');
        $this->db->join('categories', 'categories.id=products.category', 'inner');
        $this->db->join('sub_category', 'sub_category.id=products.sub_category', 'inner');
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        if (!empty($asc)) {
            $this->db->order_by('tbl_component_item.position', 'ASC');
        } else {
            $this->db->order_by('tbl_component_item.position', 'DESC');
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
    
    
}
