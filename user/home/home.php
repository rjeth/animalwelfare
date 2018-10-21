<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
        <!--Section: Post-->
        <section class="mt-4">

            <!--Grid row-->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card mb-4 wow fadeIn">
                          <!--Card content-->
                          <div class="card-body">
                              <?php include("user_info_display.php"); ?>

                          </div>

                      </div>
                  <div class="card mb-4 wow fadeIn">

                      <div class="card-header">Supporting Docs</div>

                      <!--Card content-->
                      <div class="card-body">
                        <div class="form-group">
                            <a class="mt-0 mb-1 font-weight-bold text-primary" for="location" href="../settings/support_docs.php"><i class="fa fa-cogs" aria-hidden="true"></i>  Supporting Documents</a>

                        </div>
                      </div>
                  </div>
                  <!--/.Card-->
              </div>
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Featured Image-->
                    <div class="card mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">POST</div>
                        <div class="card-body">

                            <!-- Default form reply -->
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

                                <div class="text-right mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Post</button>
                                </div>
                            </form>
                            <!-- Default form reply -->



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
                    <!--/.Reply-->

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


   <?php include("../../layout/foot.php"); ?>
