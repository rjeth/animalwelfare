<?php include("../core/verification.php");?>
<?php include("../layout/head.php"); ?>
    <style>

        .intro-2 {
            background: url("https://images.pexels.com/photos/406014/pexels-photo-406014.jpeg")no-repeat center center;
            background-size: cover;
        }


        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }

        html,
        body,
        header,
        .view {
          height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 650px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view  {
            height: 650px;
          }
        }

        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }

        .navbar.navbar-dark form .md-form input:focus:not([readonly]) {
            border-color: #8EDEF8;
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }

    </style>
    <!--Main Navigation-->
    <header>
        <!--Intro Section-->
        <section class="view intro-2">
          <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <form class="p-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                                  <p class="h4 mb-4 text-center">Sign in</p>
                                  <span><?php if(!empty($errors)) {?>
                                <div class="alert alert-warning fade show error"  role="alert">
                                    <?php foreach ($errors as $key => $value) {
                                        echo $value;
                                    } ?>
                                </div>
                            <?php } ?></span>

                                    <input type="text" id="username"  name="username" class="form-control mb-4" placeholder="Username">

                                    <input type="password"  id="password" name="password" class="form-control mb-4" placeholder="Password">

                                    <div class="d-flex justify-content-between">
                                      <div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                          <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                                        </div>
                                      </div>
                                      <div>
                                        <a href="" class="text-white">Forgot password?</a>
                                      </div>
                                    </div>

                                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                                    <div class="text-center">
                                      <p>Not a member?
                                        <a href="register.php" class="text-white">Register</a>
                                      </p>


                                    </div>
                                  </form>

                            </div>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
          </div>
        </section>

    </header>
    <!--Main Navigation-->
    <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();
    </script>
    
  </body>

  </html>
