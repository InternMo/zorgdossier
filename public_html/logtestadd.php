<form action="" method="post">
    User_ID: <input type="text" name="nm"/><br>
    Comment: <input type="text" name="mo"/><br>
    Date: <input type="text" name="em"/><br>
    <input type="submit" name="sb"/>

</form>

<?php
if (isset($_POST['sb'])) {
    include "logtest.php";
    $nm = $_POST['nm'];
    $mo = $_POST['mo'];
    $em = $_POST['em'];

    $obj = new Database();
    $obj->saveRecords($nm,$mo,$em);

}

?>