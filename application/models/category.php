<?php
class category extends CI_Model {
    
    public function getall()
    {
        $query = $this->db->query('select * from category');
        return $query->result_array();
    }
    public function searchbyID($id)
    {
        $query = $this->db->query('select * from category where id=?',array($id));
        return $query->result_array();
    }
    public function insert($name)
    {
        try{
            $query = $this->db->query('insert into category(name,created_at,status) values(?,NOW(),1)',array($name));
        }catch(Exception $e){
            return $e;
        }
    }
    public function update($id,$name,$status)
    {
        try{
            $query = $this->db->query('update category set name=?,status=?,updated_at=NOW() where id=?',array($name,$status,$id));
        }catch(Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
        try{
            $query = $this->db->query('delete from category where id=?',array($id));
        }catch(Exception $e){
            return $e;
        }
    }
}