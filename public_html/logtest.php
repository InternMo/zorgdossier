<?php

class Database {

    var $tbname = 'mo_test_db';


    public function connect() {
        $connection = new mysqli('localhost', 'mohammed', '1234', 'wp_zorgdossier');
        return $connection;
    }

    public function saveRecords($n, $m, $e) {

        $conn=$this->connect();
        mysqli_query($conn,"INSERT INTO ".$this->tbname."(user_id,activity,date) VALUES('$n', '$m', '$e')") or die(mysqli_error($conn));
        echo "<div style='padding:20px; background-color:yellow;'>
        Data added successfully</div>";

        }
    }

?>