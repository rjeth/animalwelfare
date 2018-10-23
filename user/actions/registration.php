<?php
require_once ("../../core/config.php");
if($_POST) {
    $uname = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    $user_type =  "user";

    $sql = "INSERT INTO user_tbl(`username`, `firstname`, `lastname`, `middlename`,  `email_address`, `gender`, `password`, `address`,  `user_type`) VALUES ('$uname' ,'$fname' , '$lname' , '$mname' , '$email' , '$gender' , '$password', '$location' ,  '$user_type'  )";
    if($connect->query($sql) === TRUE) {
         header('location:../login.php');
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
    $connect->close();
}
?>
