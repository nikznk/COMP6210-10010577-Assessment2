<?php 
    class Signup_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function addSignup($Username, $em,  $password ) {
            $this->db->query("INSERT INTO Login (User_Name, Password,Email) VALUES (:Username, :password,:em)");
            $this->db->bind(":Username", $Username);
            $this->db->bind(":password", $password);
            $this->db->bind(":em", $em);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>