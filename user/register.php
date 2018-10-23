<?php include("../core/verification.php");?>
<?php include("../layout/head.php");  ?>
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
  <!-- Navbar -->

  <main class="mt-5 pt-5 pb-5">
    <div class="container">
      <!--Section: Main info-->
  <hr>
      <!--Section: Main features & Quick Start-->
      <!-- Jumbotron -->
<div class=" col-md-5 card mx-auto">
  <h1 class="text-center pt-3">Register</h1>
  <div class="card-body">
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
          <label for="gen">Gender</label>
          <div class="row">
            <div class="custom-control custom-radio">
                <input class="control-input" type="radio" name="gender"  value="Female">
                <label class="control-label" for="gender">
                  Female
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input class="control-input" type="radio" name="gender"  value="Male">
                <label class="control-label" for="gender">
                  Male
                </label>
              </div>
          </div>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <select class="browser-default custom-select" id="location" name="location">
        <option value="" disabled="" selected="">Choose your option</option>
        <option value="Quezon City">Quezon City</option>

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
  </div>
<!-- Grid row -->

  <hr class="my-4">

<!-- Jumbotron -->

      <!--Section: More-->

      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->


<?php include("../layout/foot.php"); ?>
