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
    $date = date('Y-m-d G:i:s');

    $obj = new Database();
    $obj->saveRecords($user_id,$activity,$date);

}

?>