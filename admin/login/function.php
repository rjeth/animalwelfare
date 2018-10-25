<?php
    include '../../core/config.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = mysqli_query($connect,"SELECT * FROM user_tbl WHERE username = '$user' AND password = '$pass' AND user_type = 'admin'");
    $row = mysqli_num_rows($sql);
    if($row > 0){
        echo "Success";
    }
    else{
        echo "Error";
    }
?>