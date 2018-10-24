<?php
require_once ("../../core/config.php");
if($_POST) {
	$bio = $_POST['bios'];
	$uname = $_POST['username'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$mname = $_POST['middlename'];
	$suffix = $_POST['suffix'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$location = $_POST['location'];
	$id = $_POST['id_user'];
	$sql = "UPDATE  user_tbl  SET  username = '$uname', firstname = '$fname', lastname = '$lname', middlename = '$mname', suffix = '$suffix', email_address = '$email', gender = '$gender', contact_number = '$contact', address = '$location', bio = '$bio' WHERE 'user_id' = '$id'";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
       header('location:../settings/setting.php');
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}
	$connect->close();
}
?>
