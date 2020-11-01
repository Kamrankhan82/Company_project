<?php

class admin_model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
    public function insert_data($data){
       $query=$this->db->insert('form_data',$data);
        return $insert_id=$this->db->insert_id();
    }
    public function insert_price($data){
        $query=$this->db->insert('price',$data);
        return $insert_id=$this->db->insert_id();
    }
    public function get_price($where){
        $sql='select price from price where '.$where;
        return $this->db->query($sql)->result();
    }
     public function get_details($where){
        $sql='select * from form_data    where '.$where;
        return $this->db->query($sql)->result();
    }
}
?>