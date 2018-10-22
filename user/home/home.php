<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
        <!--Section: Post-->
        <section class="mt-4">

          <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
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
        <form>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Image</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
              <label class="custom-file-label" for="fileInput">File Label</label>
            </div>
          </div>
          <div class="form-group">
              <label for="postForm">Pet name</label>
              <input class="form-control" id="postForm" type="text" rows="5"></input>
          </div>
          <div class="form-group">
            <label for="select">Type</label>
            <select class="browser-default custom-select" id="select">
              <option value="" disabled="" selected="">Choose type</option>
              <option value="1">Dog</option>
              <option value="2">Cat</option>
              <option value="3">others</option>
            </select>
          </div>
          <div class="form-group">
              <label for="postForm">Age</label>
              <input class="form-control" id="postForm" type="number" rows="5"></input>
          </div>

            <!-- Comment -->
            <div class="form-group">
                <label for="postForm">Description</label>
                <textarea class="form-control" id="postForm" rows="5"></textarea>
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
