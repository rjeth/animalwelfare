<?php
require_once ("../../core/config.php");
if($_POST) {
	$subject = $_POST['subject'];
  $mail_message = $_POST['editor1'];
  $sender = $_POST['from'];
  $receiver = $_POST['editor1'];
	$id = $_POST['user_id'];
	$sql = "INSERT INTO `tbl_mail`(`mail_subject`, `user_id`, `receiver_user_id`, `mail_message`) VALUES ([value-1],[value-5],[value-6],[value-7])";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
       header('location:../inbox/inbox.php');
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}
	$connect->close();
}
?>
