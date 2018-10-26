<?php
$servername = "localhost";
$username = "thesisd2_user";
$password = "password";
$dbname = "thesisd2_awdb";
// creating the connection
$connect = new mysqli($servername, $username, $password, $dbname);
// checking the connection
if(!$connect->connect_error) {
    // echo "Successfully connected";
}
else {
    die("Connection Failed : " . $connect->connect_error);
}

?>
