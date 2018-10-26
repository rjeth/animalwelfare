<?php
require_once ("../../../core/config.php");
if($_POST) {
	$subject = $_POST['subject'];
  $mail_message = $_POST['editor1'];
  $sender = $_POST['from'];
  $receiver = $_POST['receiver'];
  $id = $_POST['pet'];
  $sql1 = "SELECT * FROM user_tbl WHERE username = '$receiver'";
  $resultset = mysqli_query($connect, $sql1) or die("database error:". mysqli_error($connect));
  while( $record1 = mysqli_fetch_assoc($resultset) ) {
    $res = $record1['user_id'];
  }

	$sql = "INSERT INTO `tbl_mail`(`mail_subject`, `user_id`, `receiver_user_id`, `mail_message`) VALUES ('$subject','$sender','$res','$mail_message')";
	if($connect->query($sql) === TRUE) {

    $sql3 = "INSERT INTO `tbl_adoption_list`(`user_id`, `pet_id`, `sender_id`) VALUES ('$receiver','$id','$sender')";
  	if($connect->query($sql3) === TRUE) {
  		echo "<p>Succcessfully Updated</p>";
      header('location:../inbox.php');
  	}
    else {
      echo "Erorr while updating record : ". $connect->error;
    }
	} else {

	}
	$connect->close();
}
?>
