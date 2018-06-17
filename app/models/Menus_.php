<?php 
    class Menus_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getMenus() {
            $this->db->query("SELECT * FROM NavLinks");
            return $this->db->resultSet();
        }

     
    }
?>