<?php
    include '../../core/config.php';
    $sql = mysqli_query($connect,"SELECT * FROM tbl_pets WHERE validation = 0");
    $output = array('data' => array());
    while($row = mysqli_fetch_assoc($sql)){
        $button = '<button type="button" class="btn btn-success" id='.$row["pet_id"].' name="deact">Validate</button>';
        $output['data'][] = array(
            $row['user'],
            $row['pet_name'],
            $row['pet_type'],
            $row['pet_details'],
            $row['pet_location'],
            $row['date_created'],
            $button
        );
    };
    echo json_encode($output);
?>
