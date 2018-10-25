<?php
    include '../../core/config.php';
    $loc = $_POST['loc'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if($action == 'Add'){
        mysqli_query($connect,"INSERT INTO location (location_name)VALUES('$loc')");
        echo 'Added Successfully';
    }
    if($action == 'Edit'){
        mysqli_query($connect,"UPDATE location SET location_name = '$loc' WHERE loc_id = $id");
        echo 'Update Successfully';
    }
    if($action == 'Delete'){
        mysqli_query($connect,"DELETE FROM location WHERE loc_id = $id");
    }
?>