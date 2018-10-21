<?php require_once("../core/session.php"); ?>
<?php require_once("../core/config.php"); ?>
<?php include("../layout/head2.php"); ?>
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

                              <div class="media d-block d-md-flex mt-3">
                                  <img class="d-flex mb-3 mx-auto z-depth-1" style="width: 100px;" alt="Generic placeholder image" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg">
                                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                      <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                                      </h5>
                                      <div>
                                          <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">BIO</p>
                                          <label id="location">dignissimos ducimus</label>

                                      </div>

                                      <div>
                                          <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">Location</p>
                                          <label id="location">dignissimos ducimus</label>

                                      </div>
                                      <div>
                                          <p class="mt-0 mb-1 font-weight-bold text-muted" for="location">Pets</p>
                                          <label id="location">dignissimos ducimus</label>

                                      </div>
                                    


                                  </div>
                              </div>

                          </div>

                      </div>
                  <div class="card mb-4 wow fadeIn">

                      <div class="card-header">Related articles</div>

                      <!--Card content-->
                      <div class="card-body">

                          <ul class="list-unstyled">
                              <li class="media">
                                  <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                      <a href="">
                                          <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                      </a>
                                      Cras sit amet nibh libero, in gravida nulla (...)
                                  </div>
                              </li>
                              <li class="media my-4">
                                  <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                                  <div class="media-body">
                                      <a href="">
                                          <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                      </a>
                                      Cras sit amet nibh libero, in gravida nulla (...)
                                  </div>
                              </li>
                              <li class="media">
                                  <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                      <a href="">
                                          <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                      </a>
                                      Cras sit amet nibh libero, in gravida nulla (...)
                                  </div>
                              </li>
                          </ul>

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


   <?php include("../layout/foot.php"); ?>
