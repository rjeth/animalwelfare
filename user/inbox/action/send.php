<?php
require_once ("../../../core/config.php");
if($_POST) {
	$subject = $_POST['subject'];
  $mail_message = $_POST['editor1'];
  $sender = $_POST['from'];
  $receiver = $_POST['receiver'];
  $id = $_POST['user_id'];
  $sql1 = "SELECT * FROM user_tbl WHERE username = '$receiver'";
  $resultset = mysqli_query($connect, $sql1) or die("database error:". mysqli_error($connect));
  while( $record1 = mysqli_fetch_assoc($resultset) ) {
    $res = $record1['user_id'];
  }

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
