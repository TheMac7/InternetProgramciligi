<?php
class Product_Category_Model extends CI_Model
{
public function __construct()
{
       parent::__construct();
}
public function save($data=array())
{
return $this->db->insert("product_catagories",$data);
}
public function getAll($order="id ASC")
{
return $this->db->order_by($order)->get("product_catagories")->result();
}

}
