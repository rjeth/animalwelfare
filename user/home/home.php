<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>
        <!--Section: Post-->
        <section class="mt-4">
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card mb-4 wow fadeIn">
                          <!--Card content-->
                    <div class="card-body">
                        <?php include("user_info_display.php"); ?>
                      </div>
                  </div>
              </div>
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                  <div class="card mb-3 wow fadeIn">
                      <div class="card-header font-weight-bold">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_pet">Upload</button>
                      </div>
                  </div>
                  <?php
                  include_once("../../core/config.php");
                  $sql = "SELECT * FROM tbl_pets WHERE user = {$user}";
                  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {
                  ?>
                    <div class="card mb-4 wow fadeIn">
                      <div class="card-header font-weight-bold">
                          <h3 style="float:left" class="modal-title"><span class="badge red"><?php echo $record['pet_status']; ?></span></h3>

                          <span style="float:right">
                            <form class="form-inline my-1">
                               <ul class="navbar-nav mr-auto">
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                  <button type="button" class="dropdown-item" data-toggle="modal" data-target="#edit_pet">
                                      Edit
                                  </button>
                                  <button type="button" class="dropdown-item" id="delete">
                                      delete
                                  </button>
                                </div>
                              </li>
                            </ul>
                            </form>
                          </span>
                      </div>
                      <div class="card-body">

                        <img src="upload/<?php echo $record['pet_image']; ?>" class="img-fluid" alt="Responsive image">

                          <h1 class="my-4"><?php echo $record['pet_name']; ?> </h1>

                          <p class="mt-0 mb-1 text-muted" for="location">Type</p>
                          <label id="location"><?php echo $record['pet_type']; ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Age</p>
                          <label id="location"><?php echo $record['pet_age']; ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Gender</p>
                          <label id="location"><?php echo $record['pet_gender']; ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Location</p>
                          <label id="location"><?php echo $record['pet_location']; ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Description</p>
                          <label id="location"><?php echo $record['pet_details']; ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Dewormed</p>
                          <label id="location"><?php if($record['pet_dewormed'] == 0){
                            echo "false";
                          }else{
                            echo "true";
                          } ?></label>
                          <p class="mt-0 mb-1 text-muted" for="location">Vaccinated</p>
                          <label id="location"><?php if($record['pet_vaccinated'] == 0){
                            echo "false";
                          }else{
                            echo "true";
                          } ?></label>

                      </div>

                    </div>
                    <?php } ?>


                </div>
              <!--Grid column-->
              <!--Grid column-->
              <!--Grid column-->
            </div>
          <!--Grid row-->
        </section>
        <!--Section: Post-->

    </div>
</main>

<div class="modal fade" id="upload_pet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <form method="POST" id="post_form" onsubmit="return Validate()">

          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Image</span>
            </div>
            <div class="custom-file">
              <label class="custom-file-label" for="fileInput">File Label</label>
             <input type="file" class="custom-file-input" id="image_file" name="image_file" aria-describedby="fileInput">
              <div class="invalid-feedback">
                Image is required
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Pet name</label>

              <input class="form-control" id="pet_name" name="pet_name" type="text" rows="5"></input>
              <div class="invalid-feedback">
                Please input your pet name
              </div>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
              <select class="browser-default custom-select" name="pet_type" id="pet_type">
                <option selected="true" disabled="disabled">Choose type</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Others">Others</option>
              </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>
          <div class="form-group">
            <label for="select">Breed</label>
              <select class="browser-default custom-select" id="pet_category" name="pet_category">
                  <option selected="true" disabled="disabled">Choose Breed</option>
                <?php
                include_once("../../core/config.php");
                $sql = "SELECT * FROM pet_category";
                $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>
                <option value="<?php echo $record['category_name']; ?>"><?php echo $record['category_name']; ?></option>
              <?php } ?>
              </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" name="pet_age" id="pet_age" type="number" rows="5" min="0"></input>
              <div class="invalid-feedback" id="pet_age_message">
                Please enter age
              </div>
          </div>
          <div class="form-group">
              <label for="gen">Gender</label>
              <div class="row">
                <div class="custom-control custom-radio">
                    <input class="control-input" type="radio" name="pet_gender"  value="Female">
                    <label class="control-label" for="gender">
                      Female
                    </label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input class="control-input" type="radio" name="pet_gender"  value="Male" >
                    <label class="control-label" for="gender">
                      Male
                    </label>
                  </div>
              </div>
              <p class="text-danger" id="gender_message"></p>
        </div>
          <div class="form-group">
            <label for="select">Dewormed</label>
            <select class="browser-default custom-select" name="pet_dewormed" id="pet_dewormed">
              <option selected="true" disabled="disabled">Choose type</option>
              <option value="1">True</option>
              <option value="0">False</option>
            </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>
          <div class="form-group">
            <label for="select">Vaccinated</label>

            <select class="browser-default custom-select" id="pet_vaccinated"  name="pet_vaccinated">
              <option selected="true" disabled="disabled">Choose type</option>
              <option value="1">True</option>
              <option value="0">False</option>
            </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>


            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>

                <textarea class="form-control" id="pet_description" name="pet_description" type="text" rows="5"></textarea>
                <div class="invalid-feedback">
                Description is required
                </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_pet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <?php
          include_once("../../core/config.php");
          $sql = "SELECT * FROM tbl_pets WHERE pet_id = 23";
          $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
          while( $record = mysqli_fetch_assoc($resultset) ) {
          ?>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Image</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image_file" name="image_file" aria-describedby="fileInput">
              <label class="custom-file-label" for="fileInput">File Label</label>
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Pet name</label>
              <input class="form-control" id="pet_name" name="pet_name" type="text" rows="5" value="<?php echo $record['pet_name']; ?>"></input>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
            <select class="browser-default custom-select" id="pet_type" name="pet_type"  >
              <option value="" disabled="" selected=""><?php echo $record['pet_type']; ?></option>
              <option value="1">Dog</option>
              <option value="2">Cat</option>
              <option value="3">others</option>
            </select>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" id="pet_age" name="pet_age" type="number" rows="5" value="<?php echo $record['pet_age']; ?>"></input>
          </div>
          <div class="form-group">
              <label for="gen">Gender</label>
              <div class="row">
                <?php if ($record['pet_gender'] == 'Male'){ ?>
                <div class="custom-control custom-radio">
                    <input class="control-input" type="radio" name="gender"  value="Female">
                    <label class="control-label" for="gender">
                      Female
                    </label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input class="control-input" type="radio" name="gender"  value="Male" checked>
                    <label class="control-label" for="gender">
                      Male
                    </label>
                  </div>
                <?php }else {?>
              <div class="custom-control custom-radio">
                      <input class="control-input" type="radio" name="gender"  value="Female" checked>
                      <label class="control-label" for="gender">
                        Female
                      </label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="control-input" type="radio" name="gender"  value="Male" >
                      <label class="control-label" for="gender">
                        Male
                      </label>
                    </div>
              <?php  } ?>
              </div>
        </div>
          <div class="form-group">
            <label for="select">Dewormed</label>
            <select class="browser-default custom-select" id="pet_dewormed" name="pet_dewormed">
            <?php if( $record['pet_dewormed'] == 0) {?>
              <option value="1">True</option>
              <option value="2" selected>False</option>
            <?php }else{ ?>
              <option value="1" selected>True</option>
              <option value="2">False</option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="select">Vacinated</label>
            <select class="browser-default custom-select" id="pet_vaccinated" name="pet_vaccinated">
              <?php if( $record['pet_vaccinated'] == 0) {?>
                <option value="1">True</option>
                <option value="2" selected>False</option>
              <?php }else{ ?>
                <option value="1" selected>True</option>
                <option value="2">False</option>
              <?php } ?>
            </select>
          </div>

            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>
                <textarea class="form-control" id="pet_description"  name="pet_description" type="text" rows="5" ><?php echo $record['pet_details']; ?></textarea>

            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit">Post</button>
      </div>
    <?php } ?>
      </form>
    </div>
  </div>
</div>
   <?php include("../../layout/foot.php"); ?>
   <script>
   <?php include('home.js'); ?>
   </script>
