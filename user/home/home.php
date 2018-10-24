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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_pet">Edit</button>
                      </div>
                  </div>

                    <div class="card mb-4 wow fadeIn">
                      <div class="card-header font-weight-bold">
                          <span style="float:left">That's a very long heading</span>
                          <span style="float:right">
                              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_pet">
                                  Edit
                              </button>
                              |
                              <button type="button" class="btn btn-sm btn-danger" id="delete">
                                  delete
                              </button>
                          </span>
                      </div>
                      <!--Card content-->
                        <div class="card-body">
                          <?php
                          include_once("../../core/config.php");
                          $sql = "SELECT * FROM tbl_pets WHERE pet_id = 23";
                          $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                          while( $record = mysqli_fetch_assoc($resultset) ) {
                          ?>
                          <img src="<?php echo $record['pet_image']; ?>" class="img-fluid" alt="Responsive image">

                            <p class="h5 my-4"><?php echo $record['pet_name']; ?></p>

                            <p class="mt-0 mb-1 text-muted" for="location">Status</p>
                            <label id="location"><?php echo $record['pet_status']; ?></label>

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
                          <?php } ?>
                        </div>
                    </div>


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


        <form >
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
              <input class="form-control" id="pet_name" name="pet_name" type="text" rows="5"></input>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
            <select class="browser-default custom-select" id="pet_type" name="pet_type" >
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">Dog</option>
              <option value="2">Cat</option>
              <option value="3">others</option>
            </select>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" id="pet_age" name="pet_age" type="number" rows="5"></input>
          </div>
          <div class="form-group">
            <label for="select">Dewormed</label>
            <select class="browser-default custom-select" id="pet_dewormed" name="pet_dewormed">
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
          </div>
          <div class="form-group">
            <label for="select">Vacinated</label>
            <select class="browser-default custom-select" id="pet_vaccinated" name="pet_vaccinated">
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
          </div>

            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>
                <textarea class="form-control" id="pet_description"  name="pet_description" type="text" rows="5"></textarea>
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
        <h5 class="modal-title" id="exampleModalLabel">POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form >
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
              <input class="form-control" id="pet_name" name="pet_name" type="text" rows="5"></input>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
            <select class="browser-default custom-select" id="pet_type" name="pet_type" >
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">Dog</option>
              <option value="2">Cat</option>
              <option value="3">others</option>
            </select>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" id="pet_age" name="pet_age" type="number" rows="5"></input>
          </div>
          <div class="form-group">
            <label for="select">Dewormed</label>
            <select class="browser-default custom-select" id="pet_dewormed" name="pet_dewormed">
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
          </div>
          <div class="form-group">
            <label for="select">Vacinated</label>
            <select class="browser-default custom-select" id="pet_vaccinated" name="pet_vaccinated">
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
          </div>

            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>
                <textarea class="form-control" id="pet_description"  name="pet_description" type="text" rows="5"></textarea>
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


   <?php include("../../layout/foot.php"); ?>
