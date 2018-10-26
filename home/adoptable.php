<?php include("../core/verification.php");?>
<?php include("../layout/head.php");  ?>
  <style type="text/css">
    /* Necessary for full page carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }
    .carousel-inner {
      height: 100%;
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
          background: #1C2331!important;
      }
  }

  </style>
  <!-- Navbar -->

<main class="mt-5 pt-5 pb-5">
    <div class="container">


      <!--Section: Main info-->



      <!--Section: Main features & Quick Start-->
      <section class="mb-5">
            <h2 class="font-weight-bold mt-lg-5 mb-5 pb-4"><strong>Adoptable Pets</strong></h2>
            <section class="mb-5">
              <!-- Search form -->
              <label for="textInput">Search</label>
              <input type="text" id="textInput" class="form-control mb-4" placeholder="Text input">
              <div class="row">
              <div class="col-md-4">
                <label for="select">Type</label>
                <select class="browser-default custom-select mb-4" id="select">
                  <option value="" disabled="" selected="">Type</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="select">Location</label>
                <select class="browser-default custom-select mb-4" id="select">
                  <option value="" disabled="" selected="">Location</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="col-md-4">
                 <button class="btn btn-info btn-block my-4" type="submit">Search</button>
              </div>
            </div>
            </section>
            <!-- Search form -->
                  <div class="row">
                      <!--Subheading-->

                      <div class="col-md-4 mb-4">
                          <!--Subheading-->
                          <!--Section: Live preview-->
                          <section>
                              <!--Card Light-->
                              <div class="row">

                                  <?php
                                    include_once("../core/config.php");

                                     $sql = "SELECT * FROM tbl_pets";
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


                                        </section>
                                    </div>
                                  <?php } ?>
                                </div>
                              </div>
                              <!--/.Card Light-->
                          </section>
                          <!--Section: Live preview-->
                      </div>
                  </div>
              </section>
      <hr class="mb-5">

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.</h2>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="../user/login.php">Login</a>
                <a class="btn btn-primary" href="../user/register.php">Sign up</a>
            </div>
        </div>
    </div>
</div>


<?php include("../layout/foot.php"); ?>
