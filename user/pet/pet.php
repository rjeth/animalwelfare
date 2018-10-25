<?php
  include_once("../../core/config.php");
if (isset($_POST['keyword'])) {
   $Name = $_POST['keyword'];
   $sql = "SELECT * FROM tbl_pets WHERE pet_name LIKE '%$Name%'";
   $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
   while( $record = mysqli_fetch_assoc($resultset) ) {
  ?>
  <div class="col-md-4 mb-4">
      <!--Subheading-->
      <!--Section: Live preview-->
      <section>

          <div class="card">
              <!--Card image-->
              <div class="view overlay">
                  <img src="../home/upload/<?php echo $record['pet_image']; ?>" class="card-img-top" alt="fern">
                  <a>
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">
                  <h4 class="card-title"><?php echo $record['pet_name']; ?> </h4>

                  <!--Text-->
                  <div class="card-text">
                    <div >
                        <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">Location</p>
                        <label id="location"><?php echo $record['pet_location']; ?></label>

                    </div>
                      <div>
                        <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">age</p>
                        <label id="location"><?php echo $record['pet_age']; ?></label>
                    </div>
                  </div>
                  <hr>
                  <?php echo   '<a class="link-text" href="view_pet_info.php?pet_id='.$record['pet_id'].'">'; ?>
                    <h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
              </div>
              <!--/.Card content-->
          </div>

      </section>
  </div>
<?php }} ?>
