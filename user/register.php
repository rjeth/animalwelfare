
<?php
require_once 'core/init.php';
include 'layout/head.php';
include 'core/sign_up.php';
 ?>
<style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 851px) and (max-width: 1440px) {
      html,
      body,
      header,
      .view {
        height: 850px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1200px;
      }
    }

    @media (max-width: 450px) {
      html,
      body,
      header,
      .view {
        height: 1400px;
      }
    }

    .intro-2 {
      background: url("https://images.pexels.com/photos/374898/pexels-photo-374898.jpeg")no-repeat center center;
      background-size: cover;
    }

    .top-nav-collapse {
      background-color: #3f51b5 !important;
    }


    @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5!important;
        }
    }


    .card {
      background-color: rgba(255, 255, 255, 0.85);
    }

    h6 {
      line-height: 1.7;
    }
  </style>

</head>


  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <!-- Navbar -->

    <!--Intro Section-->
    <section class="view intro-2">
        <div class="mask rgba-gradient">
          <div class="container h-100 d-flex justify-content-center align-items-center">

            <!--Grid row-->
            <div class="row  pt-5 mt-3">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="card">
                  <div class="card-body">

                    <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                      <strong>REGISTER</strong>
                    </h2>
                    <hr>

                    <!--Grid row-->
                    <div class="row mt-5">

                      <!--Grid column-->
                      <div class="col-md-6 ml-lg-5 ml-md-3">

                        <!--Grid row-->
                        <div class="row pb-4">
                          <div class="col-2 col-lg-1">
                            <i class="fa fa-bank indigo-text fa-lg"></i>
                          </div>
                          <div class="col-10">
                            <h4 class="font-weight-bold mb-4">
                              <strong>Safety</strong>
                            </h4>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                              minima assumenda deleniti hic.</p>
                          </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row pb-4">
                          <div class="col-2 col-lg-1">
                            <i class="fa fa-desktop deep-purple-text fa-lg"></i>
                          </div>
                          <div class="col-10">
                            <h4 class="font-weight-bold mb-4">
                              <strong>Technology</strong>
                            </h4>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                              minima assumenda deleniti hic.</p>
                          </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row pb-4">
                          <div class="col-2 col-lg-1">
                            <i class="fa fa-money purple-text fa-lg"></i>
                          </div>
                          <div class="col-10">
                            <h4 class="font-weight-bold mb-4">
                              <strong>Finance</strong>
                            </h4>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                              minima assumenda deleniti hic.</p>
                          </div>
                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-5">

                        <!--/Grid row-->

                        <!--Body-->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


                          <input type="text" name="name" class="form-control" placeholder="full name"  />

                          <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" >

                          <input type="password"  name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                          <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">Minimal 8 characters lenght</small>

                          <input type="text" name="contact" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

                          <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">Optional - for two step authentication</small>

                          <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>

                        </form>

                      </div>
                      <!--Grid column-->

                    </div>
                    <!--Grid row-->

                  </div>
                </div>

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
        </div>
    </section>
    <!--Intro Section-->

  </header>
  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
