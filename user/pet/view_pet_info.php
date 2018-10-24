<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
        <!--Section: Post-->
        <section class="my-4">

            <!--Grid row-->
            <div class="row">
              <?php
              require_once '../../core/config.php';
              if($_GET['pet_id']) {
                  $id = $_GET['pet_id'];
                  $sql = "SELECT * FROM tbl_pets WHERE pet_id = {$id}";
                  $result = $connect->query($sql);
                  $data = $result->fetch_assoc();
                  ?>
                    <div class="card col-md-8 mx-auto wow fadeIn ">
                        <img src="../home/upload/<?php echo $data['pet_image']; ?>" class="card-img-top" >
                        <div class="card-body">

                          <div class="form-group">
                                <p class="h5 my-4"><?php echo $data['pet_name']; ?></p>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Type</p>
                            <label id="location"><?php echo $data['pet_type']; ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Category</p>
                            <label id="location"><?php echo $data['pet_category']; ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Gender</p>
                            <label id="location"><?php echo $data['pet_gender']; ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Dewormed</p>
                            <label id="location"><?php if($data['pet_dewormed']==0){
                              echo "this pet is not dewormed";
                            }else{
                              echo "this pet is dewormed  ";
                            } ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Vaccinated</p>
                            <label id="location"><?php if($data['pet_vaccinated']==0){
                              echo "this pet is not vaccinated";
                            }else{
                              echo "this pet is vaccinated";
                            } ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">Description</p>
                            <label id="location"><?php echo $data['pet_details']; ?></label>
                          </div>

                          <div class="form-group mt-5">
                            <p class="mt-0 text-muted" for="location">Date Posted</p>
                            <label id="location"><?php echo $data['date_created']; ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">User Posted</p>
                            <label id="location"><?php $id =  $data['user'];

                            include_once("../../core/config.php");
                            $sql = "SELECT * FROM user_tbl WHERE user_id = {$id} ";
                            $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                            while( $record = mysqli_fetch_assoc($resultset) ) {
                              echo $record['username'];
                            }
                            ?></label>
                          </div>
                          <div class="form-group">
                            <p class="mt-0 text-muted" for="location">location</p>
                            <label id="location"><?php echo $data['pet_location']; ?></label>
                          </div>


                        </div>
                    </div>
                    <?php } ?>

            </div>
          <!--Grid row-->
        </section>
        <!--Section: Post-->

    </div>
</main>




   <?php include("../../layout/foot.php"); ?>
