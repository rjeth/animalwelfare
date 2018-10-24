<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    mysqli_query($connect,"DELETE FROM tbl_pets WHERE pet_id = $id");
?>