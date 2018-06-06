<?php
class menu extends CI_Model {
    public function getall()
    {
        $query = $this->db->query('select * from menu');
        return $query->result_array();
    }
    public function getallParent()
    {
        $query = $this->db->query('select * from menu where parent_id is NULL order by position asc');
        return $query->result_array();
    }
    public function getallbyParent($id)
    {
        $query = $this->db->query('select * from menu where parent_id=? order by position asc',array($id));
        return $query->result_array();
    }
    public function update($id,$name,$position,$url)
    {
       try{
        $query = $this->db->query('update menu set name=? , position=? , url=? , updated_at= NOW() where id=?',array($name,$position,$url,$id));
       }
       catch(Eception $e)
       {
           return $e;
       }
    }
    public function insert($name,$parent,$position,$url)
    {
        try{
            if($parent!=0){
                $query = $this->db->query('insert into menu(name,parent_id,position,url,created_at) values(?,?,?,?,NOW())',array($name,$parent,$position,$url));
            }  
            else {$query = $this->db->query('insert into menu(name,position,url,created_at)  values(?,?,?,NOW())',array($name,$position,$url));}
           }
           catch(Eception $e)
           {
               return $e;
           }
    }
    public function delete($id)
    {
        try{
            $query = $this->db->query('delete from menu where id=?',array($id));
           }
           catch(Eception $e)
           {
               return $e;
           }
    }
}
?>