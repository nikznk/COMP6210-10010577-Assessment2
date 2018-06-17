<?php 
    class Testimonials_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function gettestimonials() {
            $this->db->query("SELECT * FROM testimonials");
            return $this->db->resultSet();
        }

        
    }
?>