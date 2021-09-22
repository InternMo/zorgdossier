<?php



class Log {

    var $table = '';
    private $wpdb;

    public function __construct(&$wpdb) {
        $this->table = 'mo_test_db';
        $this->wpdb = $wpdb;
    }

    public function log($action, $type, $user_id = 0, $meta = '') {

        if ($action == '' || $type == '')
           throw new Exception('Error in aanroep');

        if ($user_id == 0) { //User ID meegegeven? Zo niet bekijken of we die kunnen achterhalen
         
            

        }

        $fields = [
            'user_id' => $user_id,
            'type' => $type,
            'insertdate' => time()
        ];

        return $this->save($fields);

    }

    private function save($fields = []) {

        //mysqli_query($this->conn,"INSERT INTO `".$this->table."` (user_id,activity,insertdate) VALUES('$user_id', '$activity', $date)") or die(mysqli_error($conn));

        $fields = [
            'user_id' => $user_id,
            'type' => $type,
            'insertdate' => time()
        ];

        $columns = implode(", ",array_keys($fields));
        $escaped_values = array_map('mysqli_real_escape_string', array_values($fields));
        $values = implode(", ", $escaped_values);

        $wpdb->query( $wpdb->prepare("INSERT INTO `.$this->table.` ($columns) VALUES($values)"));
        echo "Data added"

        //$wpdb->query( $wpdb->prepare('INSERT INTO xxx (a,b,c) value(%s, %s, %d)', ['a','b',1]));



        
    }
}
?>