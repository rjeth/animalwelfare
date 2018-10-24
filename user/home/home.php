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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">Upload</button>
                      </div>
                  </div>
                    <div class="card mb-4 wow fadeIn">
                      <!--Card content-->
                        <div class="card-body">
                            <p class="h5 my-4">That's a very long heading </p>
                          <img src="https://images.pexels.com/photos/1345191/pexels-photo-1345191.jpeg" class="img-fluid" alt="Responsive image">
                            <p class="h5 my-4">That's a very long heading </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
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

<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form id="post_form" onsubmit="return Validate()" enctype="multipart/form-data">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Image</span>
            </div>
            <div class="custom-file">
              <label class="custom-file-label" for="fileInput">File Label</label>
              <input type="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
              <div class="invalid-feedback">
                Image is required
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Pet name</label>
              <input class="form-control" id="pet_name" type="text" rows="5"></input>
              <div class="invalid-feedback">
                Please input your pet name
              </div>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
              <select class="browser-default custom-select" id="pet_type">
                <option selected="true" disabled="disabled">Choose type</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
                <option value="3">others</option>
              </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" id="pet_age" type="number" rows="5" min="0"></input>
              <div class="invalid-feedback" id="pet_age_message">
                Please enter age
              </div>
          </div>
          <div class="form-group">
            <label for="select">Dewormed</label>
            <select class="browser-default custom-select" id="pet_dewormed">
              <option selected="true" disabled="disabled">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>
          <div class="form-group">
            <label for="select">Vacinated</label>
            <select class="browser-default custom-select" id="pet_vacinated">
              <option selected="true" disabled="disabled">Choose type</option>
              <option value="1">True</option>
              <option value="2">False</option>
            </select>
            <div class="invalid-feedback">
                Please select
            </div>
          </div>

            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>
                <textarea class="form-control" id="pet_description" rows="5"></textarea>
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
   <?php include("../../layout/foot.php"); ?>
   <script>
   <?php include('home.js'); ?>
   </script>
