<?php
    include '../../core/config.php';
    $sql = mysqli_query($connect,"SELECT * FROM user_tbl WHERE state = 'inactive' ORDER BY user_id DESC");
    $output = array('data' => array());
    while($row = mysqli_fetch_assoc($sql)){
        $button = '<button type="button" class="btn btn-success" id='.$row["user_id"].' name="deact">Activate</button>';
        $output['data'][] = array(
            $row['firstname'],
            $row['lastname'],
            $row['username'],
            $row['email_address'],
            $row['contact_number'],
            $row['address'],
            $button
        );
    };
    echo json_encode($output);
?>