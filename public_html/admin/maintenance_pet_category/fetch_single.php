<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM pet_category WHERE petcat_id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "loc_name" => $row['category_name']
    );
    echo json_encode($output);
?>