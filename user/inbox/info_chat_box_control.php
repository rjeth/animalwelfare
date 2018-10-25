<?php
include_once("../../core/config.php");
$sql = "SELECT * FROM user_tbl WHERE user_id = $user";
$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
  <!--Featured Image-->
  <form method="post" action="action/send.php">
  <div class="card wow fadeIn thin" >
      <div class="card-body">
        <div class="form-group">
            <label for="postForm">From</label>
            <input class="form-control" id="from" name="from" type="hidden" value="<?php echo $record['user_id']?>" ></input>
            <input class="form-control" type="text" value="<?php echo $record['username']; ?>" disabled></input>
        </div>
        <div class="form-group">
            <label for="postForm">To</label>
            <input class="form-control" id="receiver" name="receiver" type="text" required></input>
        </div>
        <div class="form-group">
            <label for="postForm">Subject</label>
            <input class="form-control" id="subject" name="subject" type="text" required></input>
        </div>

        <div class="form-group">
        <textarea name="editor1" required></textarea>
      </div>
      </div>
      <div class="card-foot table-responsive">
           <button class="btn btn-info " style="float:right" type="submit">post</button>
      </div>
  </div>
</form>
<?php } ?>
