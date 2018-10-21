<?php

require_once ("../core/config.php");
session_start();

// check if user is not logged in
if(empty($_SESSION['user_id'])) {
    header('location:../home/index.php');
    exit();
}

if(isset($_SESSION['user_id'])) { ?>


<?php
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_tbl WHERE user_id = $user_id";
$query = $connect->query($sql);
$result = $query->fetch_array();

// close database connection
//$connect->close();
}
?>
