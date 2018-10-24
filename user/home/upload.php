<?php
    include '../../core/config.php';
    $pet_image = $_POST['image_file'];
    $pet_name = $_POST['pet_name'];
    $pet_type = $_POST['pet_type'];
    $pet_age = $_POST['pet_age'];
    $pet_dewormed = $_POST['pet_dewormed'];
    $pet_vacinated = $_POST['pet_vacinated'];
    $pet_description = $_POST['pet_description'];
    $new_name = rand(). '.' ."jpeg";
	$destination = 'upload/' . $new_name;
	move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
?>