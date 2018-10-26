<div class="list-group scrollbar-deep-purple  thin example-1">
<!-- Single message -->
<a href="../inbox/compose.php" class="list-group-item list-group-item-action media bg-danger text-white ">
   <div class="d-flex justify-content-between mb-1 ">
       <hp class="mb-1"><strong>Compose</strong></hp>
       <small></small>
   </div>
</a>
<a href="../inbox/inbox.php" class="list-group-item list-group-item-action media ">
 <div class="d-flex justify-content-between mb-1 ">
       <hp class="mb-1"><strong>Inbox</strong></hp>

       <small></small>
       <?php
       require_once ("../../core/config.php");
       $sql = "SELECT COUNT(mail_id) FROM tbl_mail WHERE receiver_user_id = $user";
       $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
       while( $record = mysqli_fetch_assoc($resultset) ) {
     ?>
     <span class="badge badge-default" style="float:right"><?php echo $record['COUNT(mail_id)'];?></span>
   <?php } ?>
   </div>


</a>
<a href="../inbox/sent_items.php" class="list-group-item list-group-item-action media ">
   <div class="d-flex justify-content-between mb-1 ">
       <hp class="mb-1"><strong>Sent Items</strong></hp>
       <small></small>
       <?php
       require_once ("../../core/config.php");
       $sql = "SELECT COUNT(mail_id) FROM tbl_mail WHERE user_id = $user";
       $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
       while( $record = mysqli_fetch_assoc($resultset) ) {
     ?>
     <span class="badge badge-default" style="float:right"><?php echo $record['COUNT(mail_id)'];?></span>
   <?php } ?>
   </div>
</a>

<!-- Single message -->

</div>
