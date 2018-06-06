<?php
class user extends CI_Model {
    public function getall()
    {
        $query = $this->db->query(' select user.id as id, user.name as name, role.name as role, account.username as username from user left join (account inner join role on account.position=role.id ) on user.id=account.user_id');
        return $query->result_array();
    }
    public function getallbyRole($role)
    {
        $query = $this->db->query(' select user.id as id, user.name as name, role.name as role, account.username as username from user left join (account inner join role on account.position=role.id ) on user.id=account.user_id where role.id=?',array($role));
        return $query->result_array();
    }
    public function search($name)
    {
        $query = $this->db->query("select user.id as id, user.name as name, role.name as role, account.username as username from user left join (account inner join role on account.position=role.id ) on user.id=account.user_id where user.name like '%$name%'",array($name));
        return $query->result_array();
    }
    public function searchbyID($id)
    {
        $query = $this->db->query("select * from user where id=?",array($id));
        return $query->result_array();
    }
    public function update($id,$name,$phone,$mail,$address,$id_card)
    {
        $arr=array($name,$phone,$mail,$address,$id_card,$id);
        try {$query = $this->db->query("update user set name=?, phone=?,mail=?,address=?,id_card=?,updated_at=NOW() where id=?",$arr);
        echo "Cập nhật thành công";
        }catch(Exception $e)
        {
            echo $e;
        }
    }
    public function delete($id)
    {
        try {$query = $this->db->query("delete from user where id=?",array($id));
        echo "Xóa thành công";
        }catch(Exception $e)
        {
            echo $e;
        }
    }
    public function add($name,$phone,$mail,$address,$id_card)
    {
        try{
            $date=date("Y-m-d H:m:s");
            $query = $this->db->query('insert into user(name,phone,mail,address,id_card,created_at) values(?,?,?,?,?,?)',array($name,$phone,$mail,$address,$id_card,$date));
            $query = $this->db->query('select id from user where name=? AND phone=? AND mail=? AND address=? AND id_card=? AND created_at=?',array($name,$phone,$mail,$address,$id_card,$date));
            return $query->result_array();
        }
        catch(Exception $e)
        {
            return 0;
        }
    }
    public function countCustom()
    {
        $query = $this->db->query('select count(id) as amount from user');
        $c1=$query->result_array();
        $c1=$c1[0]['amount'];
        $query = $this->db->query('select count(id) as amount from user left join account on user.id=account.user_id where account.position=2');
        $c2=$query->result_array();
        $c2=$c2[0]['amount'];
        return $c1-$c2;
    }
    public function countMember()
    {
        $query = $this->db->query('select count(id) as amount from user left join account on user.id=account.user_id where account.position=2');
        $c= $query->result_array();
        return $c[0]['amount'];
    }
    public function countEmploy()
    {
        $query = $this->db->query('select count(id) as amount from user left join account on user.id=account.user_id where account.position NOT LIKE 2');
        $c= $query->result_array();
        return $c[0]['amount'];
    }
    
}
?>