<?php
    class Test {
        public function showpage() {
            echo "Show Page Method";
        }
        public function readpage() {
            echo "Read Page Method";
        }
        public function readsinglepage($id, $number, $page) {
            echo "Read Page with ID = $id";
            echo "<br><br>";
            echo "Read Page with Param2 = $number";
            echo "<br><br>";
            echo "Read Page with Param3 = $page";
        }
    }
?>