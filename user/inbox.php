<?php include("../layout/head2.php");  ?>
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
  <style>
        .avatar-sm {
            width: 56px;
            border-radius: 50%;
        }
    </style>
  <!-- Navbar -->

<main class="mt-5 pt-5 pb-5">
          <div class="container">

              <!--Section: Chat-->
              <section class="mt-4">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                    <div class="col-md-4 mb-4">

                          <!--Name-->
                          <div class="md-form mb-4">
                              <i class="fa fa-search prefix"></i>
                              <input type="text" id="searchConv" class="form-control">
                              <label for="searchConv" class="">Search Message</label>
                          </div>


                          <!-- Messages -->
                          <div class="list-group">

                              <!-- Single message -->
                              <a href="#" class="list-group-item list-group-item-action media active">
                                  <!-- Avatar -->
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">

                                  <!-- Author -->
                                  <div class="d-flex justify-content-between mb-1 ">
                                      <hp class="mb-1"><strong>Dawid Adach</strong></hp>
                                      <small>13 July</small>
                                  </div>

                                  <!-- Message -->
                                  <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                      sed diam eget risus varius blandit.</p>
                              </a>

                              <!-- Single message -->


                          </div>
                          <!-- Messages -->

                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-8 mb-4">

                          <!-- Conversation -->
                          <div class="border border-dark p-4">

                              <!-- My Message -->
                              <div class="text-center"><small>16 July, 23:54</small></div>
                              <div class="d-flex justify-content-end">
                                  <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                              </div>

                              <!-- Your Message -->
                              <div class="text-center"><small>16 July, 23:55</small></div>
                              <div class="d-flex justify-content-start media">
                                  <!-- Avatar -->
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">

                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                              </div>

                              <!-- Your Message -->
                              <div class="text-center"><small>16 July, 23:56</small></div>
                              <div class="d-flex justify-content-start media">
                                  <!-- Avatar -->
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">

                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                              </div>

                              <!-- My Message -->
                              <div class="text-center"><small>16 July, 23:54</small></div>
                              <div class="d-flex justify-content-end">
                                  <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                              </div>

                              <div class="text-center"><small>16 July, 23:54</small></div>
                              <div class="d-flex justify-content-end">
                                  <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                              </div>
                              <!-- New message -->
                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="d-flex flex-row">

                                          <div class="md-form">
                                              <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                                              <label for="form7">Type your message</label>
                                          </div>

                                          <div class="mt-5">
                                              <a class="btn btn-primary btn-lg waves-effect waves-light">Send</a>
                                          </div>

                                      </div>

                                  </div>

                              </div>
                              <!-- /.New message -->

                          </div>
                          <!-- Conversation -->

                      </div>
                      <!--Grid column-->

                  </div>
                  <!--/.Grid row-->

              </section>
              <!--Section: Chat-->

          </div>
      </main>


<?php include("../layout/foot.php"); ?>
