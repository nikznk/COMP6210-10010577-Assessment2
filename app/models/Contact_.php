<?php 
    class Contact_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

     
        public function addContact($fn,$em,$mess ) {
            $this->db->query("INSERT INTO Contact (FNAME, Email, Message) VALUES (:fn,  :em, :mess)");
            $this->db->bind(":fn", $fn);
            $this->db->bind(":em", $em);
            $this->db->bind(":mess", $mess);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
     
    
}
?>