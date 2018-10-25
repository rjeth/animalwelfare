<?php
require_once ("../../../core/config.php");
if($_POST) {
	$subject = $_POST['subj'];
  $mail_message = $_POST['editor1'];
  $sender = $_POST['from'];
  $res = $_POST['sender'];


	$sql = "INSERT INTO `tbl_mail`(`mail_subject`, `user_id`, `receiver_user_id`, `mail_message`) VALUES ('$subject','$sender','$res','$mail_message')";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
       header('location:../inbox.php');
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}
	$connect->close();
}
?>
