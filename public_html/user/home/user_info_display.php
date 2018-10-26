<?php
include_once("../../core/config.php");
$sql = "SELECT * FROM user_tbl WHERE user_id = $user";
$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>


<div class="media d-block d-md-flex mt-3">
    <img class="d-flex mb-3 mx-auto z-depth-1" style="width: 100px;" alt="image" src="../settings/upload/<?php if( $record['user_image']== ''){
      if ($record['gender'] == 'Male') {
          echo 'signup_male.jpg';
        }
        else{
            echo 'signup_female.jpg';
        }
       } ?>">
    <div class="media-body text-center text-md-left ml-md-4 ml-0">
        <h5 class="mt-0 font-weight-bold"><?php echo $record['firstname']; ?> <?php echo $record['middlename']; ?> <?php echo $record['lastname']; ?> <?php echo $record['suffix']; ?>
        </h5>
        <div>
            <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">BIO</p>
            <label id="location"><?php echo $record['bio']; ?></label>

        </div>

        <div>
            <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">Location</p>
            <label id="location"><?php echo $record['address']; ?></label>

        </div>
        <div>
            <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">username</p>
            <label id="location"><?php echo $record['username']; ?></label>

        </div>



    </div>
</div>
<?php } ?>
