<?php
    session_start();
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $type = $_POST['action'];
    include '../../core/config.php';
    $pet_name = $_POST['pet_name'];
    $pet_type = $_POST['pet_type'];
    $pet_breed = $_POST['pet_category'];
    $pet_age = $_POST['pet_age'];
    $pet_gender = $_POST['pet_gender'];
    $pet_dewormed = $_POST['pet_dewormed'];
    $pet_vaccinated = $_POST['pet_vaccinated'];
    $pet_description = $_POST['pet_description'];
    $new_name = rand(). '.' ."jpeg";
	$destination = 'upload/' . $new_name;
    move_uploaded_file($_FILES['image_file']['tmp_name'], $destination);
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/Y g:i A');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM user_tbl WHERE user_id = $user_id";
    $query = $connect->query($sql);
    $result = $query->fetch_array();
    $user = $result["user_id"];
    $location = $result["address"];

    if($type == 'Add'){
        mysqli_query($connect,"INSERT INTO tbl_pets (pet_name,pet_age,pet_type,pet_image,pet_details,pet_location,pet_category,pet_gender,pet_vaccinated,pet_dewormed,user)VALUES('$pet_name','$pet_age','$pet_type','$new_name','$pet_description','$location','$pet_breed','$pet_gender','$pet_vaccinated','$pet_dewormed','$user')");
        echo 'Uploaded Sucessfully';
    }
    else{
        mysqli_query($connect,"UPDATE tbl_pets SET pet_name='$pet_name', pet_age='$pet_age', pet_type='$pet_type', pet_details='$pet_description', pet_category='$pet_breed', pet_gender='$pet_gender', pet_vaccinated='$pet_vaccinated', pet_dewormed='$pet_dewormed'");
        echo 'Edit Sucessfully';
    }
?>