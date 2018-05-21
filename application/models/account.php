<?php
class account extends CI_Model {
    
    public function getall()
    {
        $query = $this->db->query('select * from account');
        return $query->result_array();
    }
    public function search_username($username)
    {
        $query = $this->db->query('select * from account where username = ?',array($username));
        return $query->result_array();
    }
    public function check_password($password)
    {
        $query = $this->db->query('select * from account where password = ?',array($password));
        return $query->result_array();
    }
    public function add($username,$password,$id,$role=2)
    {
        try{
            $query = $this->db->query('insert into account(username,password,user_id,pin,question,answer,position,created_at,status) values(?,?,?,0000,\'chưa có\',\'chưa có\',?,NOW(),1)',array($username,$password,$id,$role));
        }
        catch(Exception $e){
            return 0;
        }
    }
    public function getUserbyUsername($username)
    {
        $query = $this->db->query('select user.id as id,user.name as name from account inner join user on account.user_id=user.id where username = ?',array($username));
        return $query->result_array();
    }
    public function getInfo($username)
    {
        $query = $this->db->query('select account.username as username,user.id as id,user.name as name,user.phone as phone,user.mail as mail, user.address as address,user.id_card as id_card,account.status as status from account inner join user on account.user_id=user.id where username = ?',array($username));
        return $query->result_array();
    }
    public function getRole($u)
    {
        $query = $this->db->query('select position from account where username = ?',array($u));
        return $query->result_array();
    }
}
?>