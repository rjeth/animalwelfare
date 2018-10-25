<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM location WHERE loc_id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "loc_name" => $row['location_name']
    );
    echo json_encode($output);
?>