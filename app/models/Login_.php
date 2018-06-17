<?php 
    class Login_ {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getLogin($Username, $password ) {
       $this->db->query("SELECT Login_ID FROM Login WHERE User_Name = '$Username' and Password = '$password'");
      

      
            // $count = mysqli_num_rows($result);
            if(  $this->db->execute()) {
                return  $this->db->resultSet();
            } else {
                return false;
            }
        }
    }
?>