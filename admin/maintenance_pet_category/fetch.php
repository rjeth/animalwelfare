<?php
    include '../../core/config.php';
    $sql = mysqli_query($connect,"SELECT * FROM pet_category ORDER BY category_name");
    $output = array('data' => array());
    while($row = mysqli_fetch_assoc($sql)){
        $button = '<button type="button" class="btn btn-info" name="edit" id="'.$row['petcat_id'].'">Edit</button>&nbsp;<button type="button" class="btn btn-danger" name="delete" id="'.$row['petcat_id'].'">Delete</button>';
        $output['data'][] = array(
            $row['category_name'],
            $row['date_created'],
            $button
        );
    }
    echo json_encode($output);
?>