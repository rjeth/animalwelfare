<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    mysqli_query($connect,"UPDATE tbl_pets SET validation = 0 WHERE pet_id = $id");
?>
