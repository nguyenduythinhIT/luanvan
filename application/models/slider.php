<?php
class slider extends CI_Model {
    public function getall()
    {
        $query = $this->db->query('select * from slider');
        return $query->result_array();
    }
    public function insert($url)
    {
        try{
            $query = $this->db->query('insert into slider(url) value(?)',array($url));
        }
        catch(Exception $e){
            return $e;
        }
    }
    public function update($id,$url)
    {
        try{
            $query = $this->db->query('update slider set url=? where id=?',array($url,$id));
        }
        catch(Exception $e){
            return $e;
        }
    }
    public function searchbyID($id)
    {
        $query = $this->db->query('select * from slider where id=?',array($id));
        return $query->result_array();
    }
    public function getlastID()
    {
        $query = $this->db->query('select * from slider order by id desc limit 1');
        return $query->result_array();
    }
    public function delete($id)
    {
        try{
            $query = $this->db->query('delete from slider where id=?',array($id));
        }
        catch(Exception $e){
            return $e;
        }
    }
}
?>