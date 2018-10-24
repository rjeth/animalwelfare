<?php
include_once("../../core/config.php");
$sql = "SELECT * FROM user_tbl WHERE user_id = $user";
$resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>


<div class="media d-block d-md-flex mt-3">
    <img class="d-flex mb-3 mx-auto z-depth-1" style="width: 100px;" alt="Generic placeholder image" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg">
    <div class="media-body text-center text-md-left ml-md-4 ml-0">
        <h5 class="mt-0 font-weight-bold"><?php echo $record['username']; ?>
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
            <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">Pets</p>
            <label id="location"><?php echo $record['username']; ?></label>

        </div>



    </div>
</div>
<?php } ?>
