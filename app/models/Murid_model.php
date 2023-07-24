<?php

class Murid_model {

        private $table = 'murid';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

    public function getAllMurid() 
        {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet(); //resultSet digunakan jika isinya banyak

        }  

    public function getMuridById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); //untuk menyimpan data yg akan kita binding
        $this->db->bind('id', $id);
        return $this->db->single(); //single digunakan jika isinya cuma 1
    }
        
    
}