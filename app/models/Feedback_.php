<?php 
    class Feedback_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function addFeedback($fn, $ln, $em, $rating, $mess ) {
            $this->db->query("INSERT INTO Feedback (FNAME, LNAME, Email, Rating, Message) VALUES (:fn, :ln, :em, :rating, :mess)");
            $this->db->bind(":fn", $fn);
            $this->db->bind(":ln", $ln);
            $this->db->bind(":em", $em);
            $this->db->bind(":rating", $rating);
            $this->db->bind(":mess", $mess);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
     
    }
?>