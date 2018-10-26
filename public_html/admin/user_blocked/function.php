<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    mysqli_query($connect,"UPDATE user_tbl SET state = 'active' WHERE user_id = $id");
?>
