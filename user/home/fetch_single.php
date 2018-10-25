<?php
    include '../../core/config.php';
    $id = $_POST['pet_id'];
    $output = array();
    $query = mysqli_query($connect,"SELECT * FROM tbl_pets WHERE pet_id = $id");
    $row = mysqli_fetch_assoc($query);
    $output['pet_name'] = $row['pet_name'];
    $output['pet_type'] = $row['pet_type'];
    $output['pet_category'] = $row['pet_category'];
    $output['pet_age'] = $row['pet_age'];
    $output['pet_details'] = $row['pet_details'];
    $output['pet_gender'] = $row['pet_gender'];
    $output['pet_dewormed'] = $row['pet_dewormed'];
    $output['pet_vaccinated'] = $row['pet_vaccinated'];
    echo json_encode($output);
?>