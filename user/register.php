<?php include("../core/verification.php");?>
<?php
include("../layout/head.php");
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




    .card {
      background-color: rgba(255, 255, 255, 0.85);
    }

    h6 {
      line-height: 1.7;
    }
  </style>

</head>

  <header>
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

                    <div class="row mt-5">

                      <!--Grid column-->
                      <div class="col-md-6 ml-lg-5 ml-md-3">

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
                      </div>
                      <div class="col-md-5">
                        <form action="actions/registration.php" method="POST">
                          <div class="form-group">
                              <label for="replyFormComment">Username:</label>
                              <input type="text" class="form-control" id="username" name="username" required></input>
                          </div>
                          <div class="form-group">
                              <label for="replyFormComment">Firstname:</label>
                              <input type="text" class="form-control" id="fname" name="fname" required></input>
                          </div>
                          <div class="form-group">
                              <label for="replyFormComment">Lastname:</label>
                              <input type="text" class="form-control" id="lname" name="lname" required></input>
                          </div>
                          <div class="form-group">
                              <label for="replyFormComment">Middlename:</label>
                              <input type="text" class="form-control" id="mname" name="mname" required></input>
                          </div>
                          <div class="form-group">
                              <label for="replyFormComment">Email Address:</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="defaultRegisterFormPhoneHelpBlock" required></input>
                          </div>
                          <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="browser-default custom-select" id="gender" name="gender">
                              <option value="" disabled="" selected="">Choose your option</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="location">Location</label>
                            <select class="browser-default custom-select" id="location" name="location">
                              <option value="" disabled="" selected="">Choose your option</option>
                              <option value="1">Quezon City</option>

                            </select>
                          </div>
                          <div class="form-group">
                              <label for="replyFormComment">Password:</label>
                              <input type="password" class="form-control" id="password" name="password" aria-describedby="defaultRegisterFormPhoneHelpBlock" required></input>
                          </div>

                          <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4" required>Minimal 8 characters lenght</small>


                          <input class="btn btn-info my-4 btn-block" type="submit" name="submit" value="Sign up"></input>
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
