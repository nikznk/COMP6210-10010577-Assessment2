<?php 
    class Pages_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllPages() {
            $this->db->query("SELECT * FROM pages");
            return $this->db->resultSet();
        }

        public function getcontent($id){
            $this->db->query("SELECT * FROM pages where ID=".$id);
            return $this->db->resultSet();
        }
        
    }
?>