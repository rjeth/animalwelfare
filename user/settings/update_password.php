<?php
require_once ("../../core/config.php");
if($_POST) {
	$pass = $_POST['current_pass'];
	$id = $_POST['user_id'];
	$sql = "UPDATE  user_tbl  SET  password = '$pass' WHERE user_id = '$id'";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
       header('location:../settings/setting.php');
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}
	$connect->close();
}
?>
