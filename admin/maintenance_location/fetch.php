<?php
    include '../../core/config.php';
    $sql = mysqli_query($connect,"SELECT * FROM location ORDER BY location_name");
    $output = array('data' => array());
    while($row = mysqli_fetch_assoc($sql)){
        $button = '<button type="button" class="btn btn-info" name="edit" id="'.$row['loc_id'].'">Edit</button>&nbsp;<button type="button" class="btn btn-danger" name="delete" id="'.$row['loc_id'].'">Delete</button>';
        $output['data'][] = array(
            $row['location_name'],
            $row['date_created'],
            $button
        );
    }
    echo json_encode($output);
?>