<?php
class product_type extends CI_Model {
    
    public function getall()
    {
        $query = $this->db->query('select product_type.id,product_type.name ,product_type.status ,product_type.category_id,category.name as category_name from product_type inner join category on product_type.category_id= category.id where category.status=1');
        return $query->result_array();
    }
    public function searchbyID($id)
    {
        $query = $this->db->query('select product_type.id ,product_type.name ,product_type.status ,product_type.category_id,category.name as category_name  from product_type inner join category on product_type.category_id= category.id where product_type.id=?',array($id));
        return $query->result_array();
    }
    public function searchbyCATEGORY($ct)
    {
        $query = $this->db->query('select * from product_type where category_id=?',array($ct));
        return $query->result_array();
    }
    public function insert($name,$category_id)
    {
        try{
            $query = $this->db->query('insert into product_type(name,category_id,created_at,status) values(?,?,NOW(),1)',array($name,$category_id));
        }catch(Exception $e){
            return $e;
        }
    }
    public function update($id,$name,$category_id,$status)
    {
        try{
            $query = $this->db->query('update product_type set name=?,category_id=?,status=?,updated_at=NOW() where id=?',array($name,$category_id,$status,$id));
        }catch(Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
        try{
            $query = $this->db->query('delete from product_type where id=?',array($id));
        }catch(Exception $e){
            return $e;
        }
    }
}