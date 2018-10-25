<?php
    include '../../core/config.php';
    $loc = $_POST['loc'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if($action == 'Add'){
        mysqli_query($connect,"INSERT INTO pet_category (category_name)VALUES('$loc')");
        echo 'Added Successfully';
    }
    if($action == 'Edit'){
        mysqli_query($connect,"UPDATE pet_category SET category_name = '$loc' WHERE petcat_id = $id");
        echo 'Update Successfully';
    }
    if($action == 'Delete'){
        mysqli_query($connect,"DELETE FROM pet_category WHERE petcat_id = $id");
    }
?>