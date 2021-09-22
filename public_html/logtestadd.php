<form action="" method="post">
    User_ID: <input type="text" name="user_id"/><br>
    Activity: <input type="text" name="activity"/><br>
    <input type="submit" name="submit_log"/>

</form>

<?php
if (isset($_POST['submit_log'])) {
    include "logtest.php";
    $user_id = $_POST['user_id'];
    $activity = $_POST['activity'];
    $date = time();

    $connection = new mysqli('localhost', 'mohammed', '1234', 'wp_zorgdossier');

    $obj = new Log($connection);
    if ($obj->log($action, $type))
        echo "<div style='padding:20px; background-color:yellow;'>
        Data added successfully</div>";


}

?>